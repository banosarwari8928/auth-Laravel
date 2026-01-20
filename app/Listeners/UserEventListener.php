<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;
use Illuminate\Queue\InteractsWithQueue;

class UserEventListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        //
        $customer= $event->customer;
       $user= new User();
       $user->name= $customer->name;
    //    $user->lastName = $customer->lastName;
       $user->email= $customer->email;
       $user->password=bcrypt("Mah@#8928");
       $user->save();
    }
}
