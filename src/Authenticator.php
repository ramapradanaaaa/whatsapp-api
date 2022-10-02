<?php

namespace Xmark\WhatsappApi;

use GuzzleHttp\Client;

class Authenticator {

    private string $clientId;

    private string $clientSecret;


    function __construct(string $clientId, string $clientSecret) {
        // auth to facebook

    }


    function getToken(): string {
        $client = new Client([
            'base_uri'  => 'https://graph.facebook.com/',
        ]);

        $response = $client->request('GET', 'oauth/access_token', [
            'query' => [
                'client_id'     => $this->clientId,
                'client_secret' => $this->clientSecret,
                'grant_type'    => 'client_credentials'
            ]
            ]);
    }
}