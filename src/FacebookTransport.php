<?php

namespace Xmark\WhatsappApi;

use GuzzleHttp\Client;
use Xmark\WhatsappApi\Request\MessageRequest;

class FacebookTransport {
    private const BASE_URL = 'https://graph.facebook.com';

    private const DEFAULT_API_VERSION = 'v14.0';

    private string $permanentToken;

    public function __construct(string $permanentToken) {
        $this->permanentToken = $permanentToken;
    }

    public function getAccessToken(): string {
        return $this->permanentToken;
    }

    public function getApiUrl(): string {
        return $this::BASE_URL . '/'. $this::DEFAULT_API_VERSION .'/';
    }

    public function sendAsync(MessageRequest $request) {
        $client = new Client(['base_uri'  => $this->getApiUrl()]);

        $body = [
            'headers'    => [
                'Authorization'     => 'Bearer ' . $this->getAccessToken(),
            ],
            'json'      => get_object_vars($request)
        ];
        
        $response = $client->requestAsync($request->method(), $request->path(), $body);

        return $response;   
    }

    public function send(MessageRequest $request) {
        $client = new Client(['base_uri'  => $this->getApiUrl()]);

        $body = [
            'headers'    => [
                'Authorization'     => 'Bearer ' . $this->getAccessToken(),
            ],
            'json'      => get_object_vars($request)
        ];
        
        $response = $client->request($request->method(), $request->path(), $body);

        return $response;   
    }
}