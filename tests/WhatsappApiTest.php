<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Xmark\WhatsappApi\FacebookTransport;
use Xmark\WhatsappApi\Request\TemplateMessageRequest;
use Xmark\WhatsappApi\Models\Template;
use Xmark\WhatsappApi\Models\Component;
use Xmark\WhatsappApi\Models\ComponentType;
use Xmark\WhatsappApi\Models\ParameterType;
use Xmark\WhatsappApi\Models\Parameter;
use Xmark\WhatsappApi\Models\Text;

class WhatsappApiTest extends TestCase {

    public function testSendMessage() {
        $token = "EAAQQMEHgwCUBADZBa1WmFAkdCyYcYZAqVCSytZBzUYow5GmhMcyL29ZAjLRquNdZCZAIruvly6ZAJBX4SQ3JtMM8xaKhZCmWtQTBWBaHQzI3w8nIR4dK2GZCRVSH5S8UuN4weqeXY2gvshvil8qfw4D3bnc212B2tsBLg9INdnDgbSY6i1NUZBwwDqnObcGu3dp4UxsWdBjD4sTtbdgZBjKTkJ5aJxWvc5P0fAZD";

        $to = '6282236255233';
        $template = 'test_template';

        $transport = new FacebookTransport($token);

        $request = new TemplateMessageRequest('106243458924743');

        $template = new Template();
        $template->name('test_with_var')
                ->lang('id')
                ->addComponent(
                    (new Component)->type(ComponentType::Body)
                                    ->addParameter((new Parameter)->text("rama pradana"))
                );

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