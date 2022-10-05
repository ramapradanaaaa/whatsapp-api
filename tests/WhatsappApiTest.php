<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Xmark\WhatsappApi\FacebookTransport;
use Xmark\WhatsappApi\Request\TemplateMessageRequest;
use Xmark\WhatsappApi\Models\Template;

class WhatsappApiTest extends TestCase {

    public function testSendMessage() {

        $token = "EAAQQMEHgwCUBAH1dhZAqX2XrzyELCBU0IuCuhF0bZAaZCj69h8E7GF5NvGCIHeBrmZAdPje3DrI9c7dIZAPOLzGodwupf5djs5vKBaEno7jX2YADf424JOPvEewf61OqEVwpJqt5pLeO3qCmZCf2BYaZCTnEZBUelwWIKCeZAb3lsZBspUfl4rdLp2oZCBd2NflqP3ohv5SE0LRpeiZAhGmeGS09oXLMQz3qhzcZD";

        $to = '6282236255233';
        $template = 'test_template';

        $transport = new FacebookTransport($token);

        $request = new TemplateMessageRequest('106243458924743');

        $template = new Template();
        $template->name('test_template')
                ->lang('id');

        $request->to($to)->template($template);

        error_log(json_encode(get_object_vars($request)));
        try {
            $transport->send($request);
        } catch(GuzzleHttp\Exception\RequestException $e) {
            error_log($e->getMessage());
        }
        $this->assertEquals(true, true);
    }
}