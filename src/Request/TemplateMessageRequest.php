<?php

namespace Xmark\WhatsappApi\Request;

use Xmark\WhatsappApi\Models\Template;
use Xmark\WhatsappApi\Request\MessageType;

class TemplateMessageRequest extends MessageRequest {
    public string $type = MessageType::Template;

    public Template $template;

    public function getType(): string {
        return MessageType::Template;
    }

    public function template(Template $template): TemplateMessageRequest {
        $this->template = $template;
        return $this;
    }

}