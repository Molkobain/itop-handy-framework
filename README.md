# iTop extension: molkobain-handy-framework
* [Description](#description)
* [Content](#content)
* [Compatibility](#compatibility)
* [Installation](#installation)
* [Configuration](#configuration)

## Description
A bunch of Core & UI helpers to be used by other extensions.

This extension doesn't bring any features, it is meant to used by some extensions out there or by you to create your own.

## Content
### Attribute types
* `AttributeRackUnit`: Extends the `AttributeInteger` type to show the 'U' unit on display.

*Example on a server with the `Position` attribute before and after using the new rack unit type*

 ![Attribute rack unit before](https://raw.githubusercontent.com/Molkobain/itop-handy-framework/develop/docs/mhf-attributerackunit-01-before.png)
 ![Attribute rack unit after](https://raw.githubusercontent.com/Molkobain/itop-handy-framework/develop/docs/mhf-attributerackunit-01-after.png)

### UI
#### Console tooltips
Use the new `molkobain-light` and `molkobain-dark` themes to qTip tooltips for a more modern look & feel.

*Tooltip with the regular `light` theme and with the new `molkobain-light`theme.*

![Light tooltip before](https://raw.githubusercontent.com/Molkobain/itop-handy-framework/develop/docs/mhf-tooltip-light-01-before.png)
![Light tooltip after](https://raw.githubusercontent.com/Molkobain/itop-handy-framework/develop/docs/mhf-tooltip-light-01-after.png)

#### Toggle buttons
Display checkboxes as nice toggle buttons in forms by using `UIHelper::MakeToggleButton()`.

#### Loading overlay
Use the `.mhf-loader` class to have a nice overlay when you need to block some parts of the UI.
Toggle `.mhf-hide` class on it to hide / show it. 

## Compatibility
Compatible with iTop 2.4+

## Installation
* Unzip the extension
* Copy the ``dist/molkobain-handy-framework`` folder under ``<PATH_TO_ITOP>/extensions`` folder of your iTop
* Run iTop setup & select extension *Molkobain's handy framework*

*Your folders should look like this*

![Extensions folder](https://raw.githubusercontent.com/Molkobain/itop-handy-framework/develop/docs/mhf-install.png)

## Configuration
No configuration needed.

### Parameters
The extension has only 1 configuration parameter:
  * `enabled`: Enable or disable extension. Possible values are `true`|`false`, default is `true`.


## Licensing
This extension is under [MIT license](https://en.wikipedia.org/wiki/MIT_License).
