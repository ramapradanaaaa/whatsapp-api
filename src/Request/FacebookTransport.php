<?php

namespace Xmark\WhatsappApi\Request;

use GuzzleHttp\Client;

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

    public function send(WhatsappApiRequest $request) {
        $client = new Client(['base_uri'  => $this->getApiUrl()]);

        error_log($request->body());
        $response = $client->request($request->method(), $request->path(), [
            'header'    => [
                'Authorization'     => 'Bearer ' . $this->getAccessToken(),
                'Content-Type'      => 'application/json'
            ],
            'body'      => $request->body()
        ]);

        return $response;
    }
}