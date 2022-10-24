<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Fontawesome 0.8.13

Ikoner och symboler.

![Skärmdump](fontawesome-screenshot.png?raw=true)

## Hur man lägger till en ikon

Lägg till `:shortcode:` till texten på en sida. Här är en [fullständig lista med ikoner](https://fontawesome.com/icons).

Det är också möjligt att skapa en `[fa]` förkortning eller använda HTML `<i class="fa fa-name" aria-label="name"></i>`. Du kan lägga till en extra stil till namnet, till exempel `fa-lg`, `fa-2x`, `fa-3x`, `fa-4x` och `fa-5x`.

## Exempel

Lägga till ikon:

    :fa-envelope-o:
    :fa-twitter:
    :fa-github:

Lägga till ikon med förkortning, normal storlek:

    [fa fa-envelope-o]
    [fa fa-twitter]
    [fa fa-github]
    
Lägga till ikon med förkortning, dubbel storlek:

    [fa fa-envelope-o fa-2x]
    [fa fa-twitter fa-2x]
    [fa fa-github fa-2x]

Lägga till ikon med HTML, normal storlek:

    <i class="fa fa-envelope-o" aria-label="Email"></i>
    <i class="fa fa-twitter" aria-label="Twitter"></i>
    <i class="fa fa-github" aria-label="GitHub"></i>

Lägga till ikon med HTML, dubbel storlek:

    <i class="fa fa-envelope-o fa-2x" aria-label="Email"></i>
    <i class="fa fa-twitter fa-2x" aria-label="Twitter"></i>
    <i class="fa fa-github fa-2x" aria-label="GitHub"></i>

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`FontawesomeToolbarButtons` = verktygsfältknappar för [edit-tilläget](https://github.com/annaesvensson/yellow-edit/tree/main/README-sv.md)  

## Installation

[Ladda ner tillägg](https://github.com/annaesvensson/yellow-fontawesome/archive/main.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

Detta tilläg innehåller [Font Awesome 4.7.0](https://github.com/FortAwesome/Font-Awesome) av Dave Gandy.

## Utvecklare

Anna Svensson. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
