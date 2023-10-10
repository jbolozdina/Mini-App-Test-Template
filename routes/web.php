<?php

use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//    $telegraph_bot = new DefStudio\Telegraph\Telegraph();
//

    $bot = \DefStudio\Telegraph\Models\TelegraphBot::fromId(5);

    /** @var \DefStudio\Telegraph\Models\TelegraphChat $chat */
    $chat = $bot->chats()->one();
    /** @var ?\DefStudio\Telegraph\Models\TelegraphChat $chat */
    $chat = \DefStudio\Telegraph\Models\TelegraphChat::query()->first();
    $chat->action(\DefStudio\Telegraph\Enums\ChatActions::UPLOAD_VOICE)->send();
    \Laravel\Prompts\info($chat);
//    $chat?->animation('https://media.tenor.com/d9xSH0TTlC0AAAAC/stfu-hang-up.gif')->send();
    $chat->action(\DefStudio\Telegraph\Enums\ChatActions::TYPING)->send();
//    $response = $chat->message('kek')->keyboard(Keyboard::make()->buttons([
//        Button::make('open')->url('https://google.com'),
//    ]))->send();
//    $response->dd();
    $response = $chat->message('mumbo jumbo')->replyKeyboard(
        \DefStudio\Telegraph\Keyboard\ReplyKeyboard::make()->buttons([
            \DefStudio\Telegraph\Keyboard\ReplyButton::make('what the fuck man?')->requestLocation(),
            \DefStudio\Telegraph\Keyboard\ReplyButton::make('okay')->requestQuiz(),
            \DefStudio\Telegraph\Keyboard\ReplyButton::make('okay')->requestQuiz(),
            \DefStudio\Telegraph\Keyboard\ReplyButton::make('okay')->requestQuiz(),
            \DefStudio\Telegraph\Keyboard\ReplyButton::make('okay')->requestQuiz(),
            \DefStudio\Telegraph\Keyboard\ReplyButton::make('okay')->requestQuiz(),
            \DefStudio\Telegraph\Keyboard\ReplyButton::make('okay')->requestQuiz(),
            \DefStudio\Telegraph\Keyboard\ReplyButton::make('okay')->requestQuiz(),
            \DefStudio\Telegraph\Keyboard\ReplyButton::make('okay')->requestQuiz(),
            \DefStudio\Telegraph\Keyboard\ReplyButton::make('okay')->webApp('https://ya.ru'),
        ])
    )->send();

//    $bot->updates()->each(function (\DefStudio\Telegraph\DTO\TelegramUpdate $update) use ($chat) {
//        $chat->message(json_encode($update->toArray()))->send();
//    });

    return view('welcome', ['bot' => $bot, 'messageCount' => count($bot->updates())]);
});
