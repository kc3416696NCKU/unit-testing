<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
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
                font-size: 84px;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <div class="title m-b-md" id="msg">
                    Message
                </div>

                <button dusk="test-btn">submit</button>

                <input dusk="input_test" type="text" value="">
                <input dusk="email" type="text" value="">

                <input id="message" name="message" type="text">
                <button onclick="msg()">Send</button>

                <div>
                    <select name="choice">
                    　<option value="1">A</option>
                    　<option value="2">B</option>
                    　<option value="3">C</option>
                    </select>
                </div>

                <input type="checkbox" name="check_box">A

                <input type="radio" name="radio_test" value="1">A

                <input type="file" name="attach_test">

                <table>

                    <tbody>
                        <tr>
                            <th>Hello World</th>
                        </tr>
                        <tr>
                            <td>test</td>
                        </tr>
                    </tbody>
                </table>

                <div class="links">
                    <a dusk="test_a" href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                    <a href="/">Home</a>
                </div>

                <input name="email" type="email">
                <input name="password" type="password">
                <button onclick="link()">Login</button>

                <input id="name" name="name" type="text">
                <input name="share" type="checkbox">
                <button onclick="msg_playlist()">Create Playlist</button>
            </div>
        </div>
    </body>
</html>

<script>
    function link(){
        window.location="/";
    }

    function msg(){
        document.getElementById('msg').innerHTML = document.getElementById('message').value;
    }

    function msg_playlist(){
        document.getElementById('msg').innerHTML = document.getElementById('name').value;
    }
</script>