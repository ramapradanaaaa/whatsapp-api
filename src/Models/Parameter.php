<?php

namespace Xmark\WhatsappApi\Models;

class Parameter {
    public string $type;

    public string $text;

    // private Currency $currency;

    // private Datetime $date_time;

    // private Image $image;

    // private Document $document;

    // private Video $video;

    public function text(string $text): Parameter {
        $this->text = $text;
        $this->type = ParameterType::Text;
        return $this;
    }
}