<?php

namespace Xmark\WhatsappApi\Models;

class Parameter {
    private string $type;

    private Text $text;

    // private Currency $currency;

    // private Datetime $date_time;

    // private Image $image;

    // private Document $document;

    // private Video $video;

    public function text(Text $text): void {
        $this->text = $text;
        $this->type = ParameterType::Text;
    }
}