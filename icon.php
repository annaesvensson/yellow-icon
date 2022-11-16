<?php
// Icon extension, https://github.com/annaesvensson/yellow-icon

class YellowIcon {
    const VERSION = "0.8.14";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("iconToolbarButtons", ":icon-star: :icon-heart: :icon-exclamation-triangle: :icon-tag: :icon-comment: :icon-file-o: :icon-file-text-o: :icon-file-image-o: :icon-phone: :icon-envelope-o: :icon-lightbulb-o: :icon-coffee: :icon-calendar: :icon-clock-o: :icon-map-marker: :icon-check:");
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if (($name=="icon" && $type=="inline") || $type=="symbol") {
            list($shortname, $style) = $this->yellow->toolbox->getTextArguments($text);
            if (preg_match("/^icon-(.+)/", $shortname, $matches)) {
                $class = trim("icon $shortname $style");
                $label = $matches[1];
                $output = "<i class=\"".htmlspecialchars($class)."\"";
                $output .= " aria-label=\"".htmlspecialchars("$label")."\"";
                $output .= "></i>";
            }
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output = "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$extensionLocation}icon.css\" />\n";
        }
        return $output;
    }
}
