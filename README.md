[![Latest stable version]][packagist] [![Total downloads]][packagist] [![License]][packagist] [![GitHub forks]][fork] [![GitHub stars]][stargazers] [![GitHub watchers]][subscription] [![GitHub followers]][followers] [![Follow Jon on Twitter]][twitter]

# Jonnitto.AssetList

An asset list node type for [Neos].

| Version | Neos        | Maintained |
| ------- | ----------- | :--------: |
| 1.\*    | 2.\*        |     ✗      |
| > 2.2   | 3.\* + 4.\* |     ✗      |
| > 3.\*  | ^4.2 - 7.\* |     ✓      |

## Installation

Most of the time you have to make small adjustments to a package (e.g. configuration in Settings.yaml). Because of that, it is important to add the corresponding package to the composer from your theme package. Mostly this is the site packages located under Packages/Sites/. To install it correctly go to your theme package (e.g.Packages/Sites/Foo.Bar) and run following command:

```bash
composer require jonnitto/assetlist --no-update
```

To install the package under Neos 2.\* you have to enter

```bash
composer require "jonnitto/assetlist:^1.0" --no-update
```

The --no-update command prevent the automatic update of the dependencies. After the package was added to your theme composer.json, go back to the root of the Neos installation and run composer update. Et voilà! Your desired package is now installed correctly.

## License

Licensed under MIT, see [LICENSE]

[neos]: https://www.neos.io
[packagist]: https://packagist.org/packages/jonnitto/assetlist
[latest stable version]: https://poser.pugx.org/jonnitto/assetlist/v/stable
[total downloads]: https://poser.pugx.org/jonnitto/assetlist/downloads
[license]: https://poser.pugx.org/jonnitto/assetlist/license
[github forks]: https://img.shields.io/github/forks/jonnitto/Jonnitto.AssetList.svg?style=social&label=Fork
[github stars]: https://img.shields.io/github/stars/jonnitto/Jonnitto.AssetList.svg?style=social&label=Stars
[github watchers]: https://img.shields.io/github/watchers/jonnitto/Jonnitto.AssetList.svg?style=social&label=Watch
[github followers]: https://img.shields.io/github/followers/jonnitto.svg?style=social&label=Follow
[follow jon on twitter]: https://img.shields.io/twitter/follow/jonnitto.svg?style=social&label=Follow
[twitter]: https://twitter.com/jonnitto
[fork]: https://github.com/jonnitto/Jonnitto.AssetList/fork
[stargazers]: https://github.com/jonnitto/Jonnitto.AssetList/stargazers
[subscription]: https://github.com/jonnitto/Jonnitto.AssetList/subscription
[followers]: https://github.com/jonnitto/followers
[license]: LICENSE
