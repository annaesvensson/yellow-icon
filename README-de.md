<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Icon 0.8.14

Icons und Symbole.

![Bildschirmfoto](SCREENSHOT.png?raw=true)

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/annaesvensson/yellow-icon/archive/refs/heads/main.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man ein Icon hinzufügt

Füge `:shortcode:` zum Text einer Seite hinzu. Hier ist eine [komplette Liste mit Icons](https://fontawesome.com/icons).

Es ist auch möglich eine `[icon]`-Abkürzung zu erstellen oder HTML zu benutzen. Du kannst wahlweise einen Stil angeben, beispielsweise `icon-2x`, `icon-3x`, `icon-4x` und `icon-5x`.

## Beispiele

Icon hinzufügen:

    :icon-envelope-o:
    :icon-github:
    :icon-youtube:

Icon mit Abkürzung hinzufügen, unterschiedliche Größen:

    [icon icon-envelope-o]
    [icon icon-github icon-2x]
    [icon icon-youtube icon-3x]
    
Icon mit HTML hinzufügen, unterschiedliche Größen:

    <i class="icon icon-envelope-o" aria-label="Email"></i>
    <i class="icon icon-github icon-2x" aria-label="GitHub"></i>
    <i class="icon icon-youtube icon-3x" aria-label="Youtube"></i>

Websiten-Icons:

    :icon-file-o:        :icon-file-text-o:   :icon-file-image-o:
    :icon-file-audio-o:  :icon-comment-o:     :icon-cog:
    :icon-shopping-cart: :icon-search:        :icon-bars:

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`IconToolbarButtons` = Symbolleistenschaltflächen für die [Edit-Erweiterung](https://github.com/annaesvensson/yellow-edit/tree/main/README-de.md)  

## Danksagung

Diese Erweiterung enthält [Font Awesome 4.7.0](https://github.com/FortAwesome/Font-Awesome) von Dave Gandy. Danke für die schönen Icons.

## Entwickler

Anna Svensson. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
