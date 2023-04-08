<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Icon 0.8.14

Ikoner och symboler.

![Skärmdump](icon-screenshot.png?raw=true)

## Hur man installerar ett tillägg

[Ladda ner ZIP-filen](https://github.com/annaesvensson/yellow-icon/archive/main.zip) och kopiera den till din `system/extensions` mapp. [Läs mer om tillägg](https://github.com/annaesvensson/yellow-update/tree/main/README-sv.md).

## Hur man lägger till en ikon

Lägg till `:shortcode:` till texten på en sida. Här är en [fullständig lista med ikoner](https://fontawesome.com/icons).

Det är också möjligt att skapa en `[icon]` förkortning eller använda HTML. Du kan valfritt lägga till en stil, till exempel `icon-2x`, `icon-3x`, `icon-4x` och `icon-5x`.

## Exempel

Lägga till ikon:

    :icon-envelope-o:
    :icon-github:
    :icon-youtube:

Lägga till ikon med förkortning, olika storlek:

    [icon icon-envelope-o]
    [icon icon-github icon-2x]
    [icon icon-youtube icon-3x]
    
Lägga till ikon med HTML, olika storlek:

    <i class="icon icon-envelope-o" aria-label="Email"></i>
    <i class="icon icon-github icon-2x" aria-label="GitHub"></i>
    <i class="icon icon-youtube icon-3x" aria-label="Youtube"></i>

Webbplatsikoner:

    :icon-file-o:        :icon-file-text-o:   :icon-file-image-o:
    :icon-file-audio-o:  :icon-comment-o:     :icon-cog:
    :icon-shopping-cart: :icon-search:        :icon-bars:

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`IconToolbarButtons` = verktygsfältknappar för [edit-tillägget](https://github.com/annaesvensson/yellow-edit/tree/main/README-sv.md)  

## Tack

Detta tillägg innehåller [Font Awesome 4.7.0](https://github.com/FortAwesome/Font-Awesome) av Dave Gandy. Tack för de vackra ikonerna.

## Utvecklare

Anna Svensson. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
