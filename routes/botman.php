<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('/random', 'App\Http\Controllers\AllBreedsController@random');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello WORLD!');
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');
