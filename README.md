# User form page selection hiding

Assists content editors in avoiding Inception-style situations where [userform pages](https://github.com/silverstripe/silverstripe-userforms) can contain [elemental form elements](https://github.com/dnadesign/silverstripe-elemental-userforms).

It favours the elemental page building approach, and so:

+ The extension blocks "User Form" page type creation in the CMS (canCreate = false)
+ The configuration adds `SilverStripe\UserForms\Model\UserDefinedForm` as a hidden ancestor of `Page`

After this module is added, the only way to add user defined forms to a site is via the Form content element.

If your project contains `dnadesign/silverstripe-elemental-userforms` already, add this module to provide the required configuration.

If it doesn't, add this module via composer and it will install the module and its requirements.

## Installation

The only support way of installing this module is via composer:

```shell
composer require nswdpc/silverstripe-thereisnouserform
```

## Roadmap

Hopefully in the future this module won't be required.

## License

[BSD-3-Clause](./LICENSE.md)

## Maintainers

+ [dpcdigital@NSWDPC:~$](https://dpc.nsw.gov.au)

## Bugtracker

We welcome bug reports, pull requests and feature requests on the Github Issue tracker for this project.

Please review the [code of conduct](./code-of-conduct.md) prior to opening a new issue.

## Security

If you have found a security issue with this module, please email digital[@]dpc.nsw.gov.au in the first instance, detailing your findings.

## Development and contribution

If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.

Please review the [code of conduct](./code-of-conduct.md) prior to completing a pull request.
