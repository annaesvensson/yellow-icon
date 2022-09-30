<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Fontawesome 0.8.13

Icons und Symbole.

![Bildschirmfoto](fontawesome-screenshot.jpg?raw=true)

## Wie man ein Icon hinzufügt

Füge `:shortcode:` zum Text einer Seite hinzu. Hier ist eine [komplette Liste mit Icons](https://fontawesome.com/icons).

Es ist auch möglich eine `[fa]`-Abkürzung zu erstellen oder HTML `<i class="fa fa-name" aria-label="name"></i>` zu benutzen. Du kannst weitere Stile an den Namen anhängen, beispielsweise `fa-lg`, `fa-2x`, `fa-3x`, `fa-4x` und `fa-5x`.

## Beispiele

Icon hinzufügen:

    :fa-envelope-o:
    :fa-twitter:
    :fa-github:

Icon mit Abkürzung hinzufügen, normale Größe:

    [fa fa-envelope-o]
    [fa fa-twitter]
    [fa fa-github]
    
Icon mit Abkürzung hinzufügen, doppelte Größe:

    [fa fa-envelope-o fa-2x]
    [fa fa-twitter fa-2x]
    [fa fa-github fa-2x]

Icon mit HTML hinzufügen, normale Größe:

    <i class="fa fa-envelope-o" aria-label="E-Mail"></i>
    <i class="fa fa-twitter" aria-label="Twitter"></i>
    <i class="fa fa-github" aria-label="GitHub"></i>

Icon mit HTML hinzufügen, doppelte Größe:

    <i class="fa fa-envelope-o fa-2x" aria-label="E-Mail"></i>
    <i class="fa fa-twitter fa-2x" aria-label="Twitter"></i>
    <i class="fa fa-github fa-2x" aria-label="GitHub"></i>

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`FontawesomeToolbarButtons` = Symbolleistenschaltflächen für die [Edit-Erweiterung](https://github.com/annaesvensson/yellow-edit/tree/main/README-de.md)  

## Installation

[Erweiterung herunterladen](https://github.com/annaesvensson/yellow-fontawesome/archive/main.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

Diese Erweiterung benutzt [Font Awesome 4.7.0](https://github.com/FortAwesome/Font-Awesome) von Dave Gandy.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
