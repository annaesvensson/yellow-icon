<p align="right"><a href="readme-de.md">Deutsch</a> &nbsp; <a href="readme.md">English</a> &nbsp; <a href="readme-sv.md">Svenska</a></p>

# Icon 0.9.2

Ikoner och symboler.

![Skärmdump](screenshot.png)

## Hur man installerar ett tillägg

[Ladda ner ZIP-filen](https://github.com/annaesvensson/yellow-icon/archive/refs/heads/main.zip) och kopiera den till din `system/extensions` mapp. [Läs mer om tillägg](https://github.com/annaesvensson/yellow-update/tree/main/readme-sv.md).

## Hur man lägger till en ikon

Lägg till `:icon-asterisk:` eller `[icon icon-asterisk]` till texten på en sida. Här är en [fullständig lista med ikoner](https://fontawesome.com/icons).

## Hur man lägger till en ikon i en layoutfil

Använd HTML-format, till exempel `<i class="icon icon-asterisk" aria-label="Asterisk"></i>`.

## Exempel

Innehållsfil med ikoner och symboler:

    ---
    Title: Exempelsida
    ---
    Detta är en exempelsida med ikoner och symboler.

    :icon-asterisk: :icon-calendar: :icon-tag: 
    :icon-rss-square: :icon-picture-o: :icon-envelope-o:

Lägga till ikon efter namn:

    :icon-asterisk:
    :icon-calendar:
    :icon-tag:

Lägga till ikon med förkortning:

    [icon icon-asterisk]
    [icon icon-calendar]
    [icon icon-tag]
    
Lägga till ikon med HTML:

    <i class="icon icon-asterisk" aria-label="Asterisk"></i>
    <i class="icon icon-calendar" aria-label="Calendar"></i>
    <i class="icon icon-tag" aria-label="Tag"></i>

Webbplatsikoner:

    :icon-file-o:         :icon-file-text-o:   :icon-file-image-o:
    :icon-file-audio-o:   :icon-comment-o:     :icon-cog:
    :icon-shopping-cart:  :icon-search:        :icon-bars:

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`IconToolbarButtons` = verktygsfältknappar för [edit-tillägget](https://github.com/annaesvensson/yellow-edit/tree/main/readme-sv.md)  

## Tack

Detta tillägg innehåller [Font Awesome 4.7.0](https://github.com/FortAwesome/Font-Awesome) av Dave Gandy. Tack för de vackra ikonerna.

## Utvecklare

Anna Svensson. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
