 <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;    
                margin-top: 18px;
                z-index: -1;
                background-color: #222;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 75px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        @extends('layouts.app') 
        @section('content') 
        <div class="container">     
            <div class="row justify-content-center">         
                <div class="col-md-8">             
                    <div class="panel panel-content">
                        @if (auth()->check())
                            <div class="title">
                                Esta página ha sido modificada
                            </div>                 
                            <div class="flex-center">                     
                                <img src="http://clipart-library.com/images/8TAbRLKGc.png">                 
                            </div>
                        @else
                            <div class="title">
                                Inicia sesión y verás una página distinta
                            </div>
                        @endif
                    </div>         
                </div>     
            </div> 
        </div> 
        @endsection 
    </body>
</html>
