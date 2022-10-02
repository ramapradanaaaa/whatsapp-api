<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Xmark\WhatsappApi\Request\FacebookTransport;

final class FacebookTransportTest extends TestCase {

    public function testAccessToken() {
        $permanentToken = "PERMANENT_TOKEN";
        $api = new FacebookTransport($permanentToken);
        $this->assertEquals('PERMANENT_TOKEN', $api->getAccessToken());
    }
}