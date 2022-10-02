<?php

namespace Xmark\WhatsappApi\Request;

interface WhatsappApiRequest {

    public function path(): string;

    public function method(): string;

    public function body(): string;

}