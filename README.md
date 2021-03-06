[![Total Downloads](https://poser.pugx.org/sarfraznawaz2005/composer-confirm/downloads)](https://packagist.org/packages/sarfraznawaz2005/composer-confirm)

# composer-confirm

Displays confirmation message when using composer install/update commands.

**Why ?** I often swtich between PHP versions 5 and 7 and sometimes running composer update command messed things by incorrectly updating versions of some of the dependencies based on current PHP version I am working with.

## Screenshot

![Main Window](https://raw.githubusercontent.com/sarfraznawaz2005/composer-confirm/master/screenshot.png)

## Install

You can install it globally by typing:

` composer global require sarfraznawaz2005/composer-confirm`

That's it. Now on any project when you type `composer update` or `composer install`, you will be asked if you want to proceed.

To remove it:

` composer global remove sarfraznawaz2005/composer-confirm`

FYI, you can skip any plugin when installing/updating by appending `--no-plugins` argument, example:

`composer update --no-plugins`

Thanks