<?php

namespace Xmark\WhatsappApi\Models;

class Text {
    private string $body;

    private $preview_url = true;


    public function body(string $body): Text {
        $this->body = $body;
        return $this;
    }
}