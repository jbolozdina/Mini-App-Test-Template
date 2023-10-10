<?php

namespace App\Handlers;

use DefStudio\Telegraph\Handlers\WebhookHandler;
use DefStudio\Telegraph\Keyboard\Keyboard;

class CustomWebhookHandler extends WebhookHandler
{
    public function start()
    {
        $this->chat->message('Preparing webapp...')->send();

        $this->chat
            ->message("Here's your webapp!")
            ->keyboard(
                Keyboard::make()->button('Launch webapp')->webApp(env('APP_URL'))
            )
            ->send();
    }
}
