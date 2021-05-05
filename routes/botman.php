<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('/random', 'App\Http\Controllers\AllBreedsController@random');

$botman->hears('Hi', function ($bot) {
	$user = $bot->getUser();
    $bot->reply(print_r($user->getInfo()));
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');
