<?php

namespace Xmark\WhatsappApi;

use Xmark\WhatsappApi\Request\FacebookTransport;
use Xmark\WhatsappApi\Request\MessageRequest;

class WhatsappApi {
    private FacebookTransport $transport;


    function __construct(string $permanentToken) {
        $this->transport = new FacebookTransport($permanentToken);
    }

    function sendMessage(string $to, string $message) {
        $from = '106243458924743';

        $request = new MessageRequest($from);
        $request->text($to, $message);
        
        try {
            $this->transport->send($request);
        } catch(GuzzleHttp\Exception\ClientException $e) {
            error_log($e);
        }
    }
}