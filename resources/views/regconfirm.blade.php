<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ralf Membership Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/scrollbar.css')}}">

    <style>
        .feedback {
            font-size: 20px;
            font-family: sans-serif;
            border: thin solid whitesmoke;
            border-radius: 20px;
            padding: 20px;
        }

        .thankyou{
            text-align: center;
            font-size: 46px;
            font-family: cursive;
            color: darkslategrey;
        }
        .tagline{

        }
    </style>
</head>

<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                </div>
                <div class="signup-form" id="style-4-scrollbar" style="max-height: 100vh; overflow-y: scroll;">
                    @if($errors->any() )
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="register-form">
                         <h1 class="thankyou">Thank you</h1>
                         @if(session()->has('message'))
                            <!-- <p class="feedback">Your application to join Ralf Community has been received. We cherish your interest to join our community, a mail has been sent to you - kindly check and your inbox for further instructions and on-boarding</p> -->
                            <p class="feedback">{{ session()->get('message') }}</p>
                         @endif
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
