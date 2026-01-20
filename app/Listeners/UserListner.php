<?php

namespace App\Listeners;
use App\Models\User;
use App\Events\createUserEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserListner
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
    public function handle(createUserEvent $event): void
    {
        $customer = $event ->customer;
        $user=User::create([
            "name"=>$customer->name,
       "email"=>$customer->email,
       "password"=>bcrypt("Mah@#8928"),
       "user_type"=>"customer",
        ]);
        $customer->userId = $user->id;
        $customer->save();
    }
}
