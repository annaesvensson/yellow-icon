<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Icon 0.9.2

Icons and symbols.

![Screenshot](SCREENSHOT.png)

## How to install an extension

[Download ZIP file](https://github.com/annaesvensson/yellow-icon/archive/refs/heads/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to add an icon

Add `:shortcode:` to the text of a page. Here's a [complete list of icons](https://fontawesome.com/icons).

It's also possible to create a `[icon]` shortcut or use HTML. You can add an optional style, for example `icon-2x`, `icon-3x`, `icon-4x` and `icon-5x`.

## Examples

Adding an icon:

    :icon-envelope-o:
    :icon-github:
    :icon-youtube:

Adding an icon with shortcut, different sizes:

    [icon icon-envelope-o]
    [icon icon-github icon-2x]
    [icon icon-youtube icon-3x]
    
Adding an icon with HTML, different sizes:

    <i class="icon icon-envelope-o" aria-label="Email"></i>
    <i class="icon icon-github icon-2x" aria-label="GitHub"></i>
    <i class="icon icon-youtube icon-3x" aria-label="Youtube"></i>

Website icons:

    :icon-file-o:        :icon-file-text-o:   :icon-file-image-o:
    :icon-file-audio-o:  :icon-comment-o:     :icon-cog:
    :icon-shopping-cart: :icon-search:        :icon-bars:

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`IconToolbarButtons` = toolbar buttons for the [edit extension](https://github.com/annaesvensson/yellow-edit)  

## Acknowledgements

This extension includes [Font Awesome 4.7.0](https://github.com/FortAwesome/Font-Awesome) by Dave Gandy. Thank you for the beautiful icons.

## Developer

Anna Svensson. [Get help](https://datenstrom.se/yellow/help/).
