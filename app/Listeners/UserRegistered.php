<?php

namespace App\Listeners;
use Redis;
use App\Role;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegistered
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        // Testing Redis if Event Fired has been Handlered correctly
        //Redis::set($event->user->names,$event->user);
        $userRole = Role::where('name','user')->first();
        //attach regular user Role to newely Created User
        $event->user->attachRole($userRole);

    }
}
