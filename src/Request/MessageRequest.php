<?php

namespace Xmark\WhatsappApi\Request;

class MessageRequest {

    private string $from;

    public string $to;

    public string $messaging_product = 'whatsapp';

    public function __construct(string $from) {
        $this->from = $from;
    }

    public function path(): string {
        return $this->from . '/messages';
    }

    public function method(): string {
        return 'POST';
    }

    public function to(string $to): MessageRequest {
        $this->to = $to;
        return $this;
    }
}