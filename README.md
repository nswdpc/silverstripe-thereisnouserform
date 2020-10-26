# User form page selection hiding

Assists content editors in avoiding Inception-style situations where userform pages can contain elemental form elements.

It favours the elemental page building approach, and so:

+ The extension blocks "User Form" page type creation in the CMS (canCreate = false)
+ The configuration adds `SilverStripe\UserForms\Model\UserDefinedForm` as a hidden ancestor of `Page`

After this module is added, the only way to add user defined forms to a site is via the Form content element

If your project contains `dnadesign/silverstripe-elemental-userforms` already, add this module to provide the required configuration.

If it doesn't, add this module via composer and it will install the module and its requirements.

## Installation

```
composer require nswdpc/silverstripe-thereisnouserform
```

## Roadmap

Hopefully in the future this module won't be required.

## License

BSD-3-Clause, see [license](./LICENSE.md)

## Maintainers

+ [dpcdigital@NSWDPC:~$](https://dpc.nsw.gov.au)

## Bugtracker

Please raise bugs on the Github issue tracker

## Development and contribution

If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.
