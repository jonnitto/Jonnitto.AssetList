<?php
namespace Jonnitto\AssetList\Controller;

use Neos\Flow\Annotations as Flow;
use Neos\Error\Messages\Message;

use Neos\Flow\ResourceManagement\PersistentResource as FlowResource;
use Neos\Flow\ResourceManagement\ResourceRepository;
use Neos\Flow\ResourceManagement\ResourceManager;

/**
 * @Flow\Scope("singleton")
 */
class DownloadController extends \Neos\Neos\Controller\Module\AbstractModuleController {

    /**
     * @Flow\Inject
     * @var ResourceRepository
     */
    protected $resourceRepository;

    /**
     * @Flow\Inject
     * @var ResourceManager
     */
    protected $resourceManager;

    /**
     * @param string $resource
     * @param string $filename
     * @return void
     */
    public function downloadAction($resource='', $filename='') {
        if ( empty($resource) ) {
            exit('No resource identifier given');
        }
        /** @var FlowResource $flowResource */
        $flowResource = $this->resourceRepository->findByIdentifier($resource);
        if ( !is_object($flowResource) ) {
            exit('Resource not found.');
        }

        if ( empty($filename) ) {
            $filename = $flowResource->getFilename();
        }

        $fileExtension = $flowResource->getFileExtension();
        $fileExtensionFromFilename = substr($filename, strlen($fileExtension) * -1);

        // Make shure file has an proper file extension
        if ( $fileExtensionFromFilename != $fileExtension ) {
            $filename .= '.' . $fileExtension;
        }

        header('Content-Length: ' . $flowResource->getFileSize());
        header('Content-disposition: attachment; filename="' . $filename . '"');

        if ( $fileExtension === 'pdf' ) {
            header('Content-Type: application/pdf');
        } else {
            header('Content-Type: application/octet-stream');
            header('Content-Transfer-Encoding: Binary');
        }

        fpassthru($flowResource->getStream());
    }

}
