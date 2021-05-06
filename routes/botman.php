<?php
use App\Http\Controllers\BotManController;

use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;

$botman = resolve('botman');


$botman->hears('Hi', function ($bot) {
	$user = $bot->getUser();
    $bot->reply('Hello');
});

$botman->hears('info', function ($bot) {
    $bot->startConversation(new \App\Conversations\MyConversation());
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');
