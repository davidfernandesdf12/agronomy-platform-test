<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

        <style>
            body{
                background-image: url({{asset('img/background-login.jpg')}});
            }
        </style>
    </head>

    <body>
        <div class="container">
        <div class="row">
            <div class="section"></div>
            <main>
                <center>
                    <div class="container">
                        <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 100px; solid #EEE;">
                            <div class="section"><i class="mdi-alert-error red-text"></i></div>

                            <div><a><img class="circle" style="width: 100px;margin: 10px;" src="{{asset('/img/user.png')}}"></a></div>
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type="text" name='username' id='email' required />
                                    <label for='email'>Username</label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='input-field col m12'>
                                    <input class='validate' type='password' name='password' id='password' required />
                                    <label for='password'>Password</label>
                                </div>
                            </div>
                            <br/>
                            <div style="display: flex; justify-content: center">
                                <div class='row'>
                                    <button class="btn-large waves-effect waves-light" type="submit" name="action">Entrar
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </center>
            </main>
        </div>
    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    </body>
</html>
