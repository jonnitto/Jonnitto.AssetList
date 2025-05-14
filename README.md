# Jonnitto.AssetList

An asset list node type for [Neos].

| Version | Neos        | Maintained |
| ------- | ----------- | :--------: |
| 1.\*    | 2.\*        |     ✗      |
| > 2.2   | 3.\* + 4.\* |     ✗      |
| > 3.\*  | ^4.2 - 7.\* |     ✗      |
| > 4.\*  | ^5.3 - 8.\* |     ✗      |
| > 5.\*  | ^8.3 - 9.\* |     ✓      |

## Installation

Most of the time you have to make small adjustments to a package (e.g. configuration in Settings.yaml). Because of that, it is important to add the corresponding package to the composer from your theme package. Mostly this is the site packages located under Packages/Sites/. To install it correctly go to your theme package (e.g.Packages/Sites/Foo.Bar) and run following command:

```bash
composer require jonnitto/assetlist --no-update
```

The --no-update command prevent the automatic update of the dependencies. After the package was added to your theme composer.json, go back to the root of the Neos installation and run composer update. Et voilà! Your desired package is now installed correctly.

[neos]: https://www.neos.io
