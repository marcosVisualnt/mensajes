<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


//callback de autorizacion $user quien inicia sesion .. id es usuario al que se envia...

Broadcast::channel('users.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


Broadcast::channel('messenger', function ($user) {
    //todos los usuarios tienen acceso
    return [
        'id' => $user->id
    ];
});
