<?php

namespace Xmark\WhatsappApi\Models;

class Text {
    public string $body;

    public $preview_url = true;


    public function body(string $body): Text {
        $this->body = $body;
        return $this;
    }
}