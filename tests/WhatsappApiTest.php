<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Xmark\WhatsappApi\WhatsappApi;

class WhatsappApiTest extends TestCase {

    public function testSendMessage() {

        $token = "EAAQQMEHgwCUBAEYaU6w8UHVeflOOTpn2hAIZBZACRbgCNZAZArAos8d5FASKnhQakpSGZBbYZCa9f1sITnYfEjyndsb5EmodgkowZB5ZBcOPl85ZB8Wpxlh0TF8okXsmedSgegVnk2DQZCVShER3YTcq7qZAk8ba7w0isWeVdbB5ic8xnH9BkzyFiGrcwLAAQZCiYqi3UB9paOZBXdQZDZD";

        $to = '6282236255233';
        $template = 'test_template';

        $api = new WhatsappApi($clientId, $clientSecret);
        $api->sendMessage($to, $msg);
    }
}