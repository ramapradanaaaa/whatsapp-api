<?php

namespace Xmark\WhatsappApi\Models;

class Component {
    public string $type;

    public array $parameters = array();

    public function type(string $type): Component {
        $this->type = $type;
        return $this;
    }

    public function addParameter(Parameter $parameter): Component {
        array_push($this->parameters, $parameter);
        return $this;
    }
}