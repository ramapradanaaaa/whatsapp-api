<?php

namespace Xmark\WhatsappApi\Models;

class Component {
    private string $type;

    private array $parameters = array();

    public function type(string $type): Component {
        $this->type = $type;
        return $this;
    }

    public function addParameter(Parameter $parameter): Component {
        array_push($this->$parameter, $parameter);
        return $this;
    }
}