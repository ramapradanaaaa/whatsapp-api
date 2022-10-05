<?php

namespace Xmark\WhatsappApi\Models;

class Template {
    public string $name;

    public array $language;

    public ?array $components = null;

    public function name(string $name): Template {
        $this->name = $name;
        return $this;
    }

    public function lang(string $lang): Template {
        $this->language['code'] = $lang;
        return $this;
    }

    public function addComponent(Component $component): Template {
        if ($this->components == null) {
            $this->components = array();
        }

        array_push($this->components, $component);

        return $this;
    }
}