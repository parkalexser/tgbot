<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



class AllBreedsController extends Controller
{
    /**
     * Controller constructor
     * 
     * @return void
     */
    public function __construct()
    {
        // $this->photos = new DogService;
    }

    /**
     * Return a random dog image from all breeds.
     *
     * @return void
     */
    public function random($bot)
    {	
        
		// $bot->hears('keyword', function (BotMan $bot) {
		    // $bot->typesAndWaits(2);
		    $bot->reply("Tell me more!");
		// });
		
    }

}