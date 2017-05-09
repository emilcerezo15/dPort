<?php
/**
 * Created by PhpStorm.
 * User: emilio.cerezo
 * Date: 5/8/17
 * Time: 8:50 AM
 */
?>

<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>dPort - @yield('title')</title>

    </head>

    <body>
        <input id="BASE_URL" type="hidden" value="{{ URL::to('/') }}"/>

        <div class="container">

            @yield('content')

        </div>
    </body>
</html>