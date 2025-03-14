# Oxxo Pay

## About

Accept Oxxo payments by displaying your account details during the checkout.

## Compatibility

PrestaShop: `1.7.6.0` or later

## Multistore compatibility

This module is compatible with the multistore :heavy_check_mark: <br/>
It can be configured differently from one store to another.<br/>
It can be configured quickly in the same way on all stores thanks to the all shops context or the group of shops.<br/>
It can be activated on one store and deactivated on another

## How to test

Link to similar specs : https://docs.prestashop-project.org/functional-documentation/functional-documentation/ux-ui/back-office/improve/modules/bank-transfer-ps_wirepayment

If module is enabled, check that wire payment method is displayed and available on FO and make sure that the order can be placed.
Configure the Account details.  Check in FO > Checkout process > Payment step that the account details are well updated.
Add customization for Bank transfer payment.

## Reporting issues

You can report issues with this module in the main PrestaShop repository. [Click here to report an issue][report-issue]. 

## Contributing

PrestaShop modules are open source extensions to the PrestaShop e-commerce solution. Everyone is welcome and even encouraged to contribute with their own improvements.

### Requirements

Contributors **must** follow the following rules:

* **Make your Pull Request on the "dev" branch**, NOT the "master" branch.
* Do not update the module's version number.
* Follow [the coding standards][1].

### Process in details

Contributors wishing to edit a module's files should follow the following process:

1. Create your GitHub account, if you do not have one already.
2. Fork this project to your GitHub account.
3. Clone your fork to your local machine in the ```/modules``` directory of your PrestaShop installation.
4. Create a branch in your local clone of the module for your changes.
5. Change the files in your branch. Be sure to follow the [coding standards][1]!
6. Push your changed branch to your fork in your GitHub account.
7. Create a pull request for your changes **on the _'dev'_ branch** of the module's project. Be sure to follow the [contribution guidelines][2] in your pull request. If you need help to make a pull request, read the [GitHub help page about creating pull requests][3].
8. Wait for one of the core developers either to include your change in the codebase, or to comment on possible improvements you should make to your code.

That's it: you have contributed to this open source project! Congratulations!

## License

This module is released under the [Academic Free License 3.0][AFL-3.0] 

[report-issue]: https://github.com/PrestaShop/PrestaShop/issues/new/choose
[1]: https://devdocs.prestashop.com/1.7/development/coding-standards/
[2]: https://devdocs.prestashop.com/1.7/contribute/contribution-guidelines/
[3]: https://help.github.com/articles/using-pull-requests
[AFL-3.0]: https://opensource.org/licenses/AFL-3.0
