<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Icon 0.8.13

Icons and symbols.

![Screenshot](icon-screenshot.png?raw=true)

## How to add an icon

Add `:shortcode:` to the text of a page. Here's a [complete list of icons](https://fontawesome.com/icons).

It's also possible to create a `[fa]` shortcut or use HTML `<i class="fa fa-name" aria-label="name"></i>`. You can add an additional style to the name, for example `fa-lg`, `fa-2x`, `fa-3x`, `fa-4x` and `fa-5x`.

## Examples

Adding an icon:

    :fa-envelope-o:
    :fa-twitter:
    :fa-github:

Adding an icon with shortcut, normal size:

    [fa fa-envelope-o]
    [fa fa-twitter]
    [fa fa-github]
    
Adding an icon with shortcut, double size:

    [fa fa-envelope-o fa-2x]
    [fa fa-twitter fa-2x]
    [fa fa-github fa-2x]

Adding an icon with HTML, normal size:

    <i class="fa fa-envelope-o" aria-label="Email"></i>
    <i class="fa fa-twitter" aria-label="Twitter"></i>
    <i class="fa fa-github" aria-label="GitHub"></i>

Adding an icon with HTML, double size:

    <i class="fa fa-envelope-o fa-2x" aria-label="Email"></i>
    <i class="fa fa-twitter fa-2x" aria-label="Twitter"></i>
    <i class="fa fa-github fa-2x" aria-label="GitHub"></i>

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`IconToolbarButtons` = toolbar buttons for the [edit extension](https://github.com/annaesvensson/yellow-edit)  

## Installation

[Download extension](https://github.com/annaesvensson/yellow-icon/archive/main.zip) and copy ZIP file into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

This extension includes [Font Awesome 4.7.0](https://github.com/FortAwesome/Font-Awesome) by Dave Gandy.

## Developer

Anna Svensson. [Get help](https://datenstrom.se/yellow/help/).
