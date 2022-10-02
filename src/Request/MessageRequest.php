<?php

namespace Xmark\WhatsappApi\Request;

class MessageRequest implements WhatsappApiRequest {

    private string $body;

    private string $from;

    private string $to;

    private string $type;

    public function __construct(string $from) {
        $this->from = $from;
    }

    public function path(): string {
        return $this->from . '/messages';
    }

    public function body(): string {
        return $this->body;
    }

    public function method(): string {
        return 'POST';
    }

    public function template(string $to, string $template) {
        $body = array(
            "messaging_product" => "whatsapp",
            'to'                => $to,
            'type'              => 'template',
            'template'          => [
                'name'  => $template,
                ''
            ]
        );

        // $this->body = json_encode($body);
        $this->body = '{ "messaging_product": "whatsapp", "to": "6282236255233", "type": "template", "template": { "name": "hello_world", "language": { "code": "en_US" } } }';
    }
}