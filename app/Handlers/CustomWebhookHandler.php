<?php

namespace App\Handlers;

use DefStudio\Telegraph\Handlers\WebhookHandler;

class CustomWebhookHandler extends WebhookHandler
{
    public function hi()
    {
        $this->chat->markdown("*Hi* happy to be here!")->send();
    }
}
