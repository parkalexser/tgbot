<?php
use App\Http\Controllers\BotManController;


$botman = resolve('botman');


$botman->hears('Hi', function ($bot) {
	$user = $bot->getUser();
    $bot->reply('Hello');
});

$botman->hears('info', function ($bot) {
    $bot->startConversation(new \App\Conversations\MyConversation());
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');
