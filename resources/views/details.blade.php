<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("https://68.media.tumblr.com/810fbb239f532ab31b0ffa90be075c4a/tumblr_ootxmp1siT1qhk3cbo1_1280.png");
                background-size: cover;
                color: yellow;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            h1{
              font-family: 'Rubik', sans-serif;
              font-size:25pt;
              padding-bottom: 10px;
              color:#FBE530;


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

            #content {
                margin: auto;

                /*background-color: #44FFFF;*/
                /*height:1000px;*/
            }

            .title {
                font-size: 84px;
            }
            .thebutton{
              width:14%;
            }
            .thebutton:hover{
              width:16%;
               transition: width 0.5s ease;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            #container{
              width:85%;
              text-align: center;
              padding:20px;
              -webkit-box-shadow: 0px 2px 15px -2px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 2px 15px -2px rgba(0,0,0,0.75);
    box-shadow: 0px 2px 15px -2px rgba(0,0,0,0.75);
           /*background-color: #EA00B9;*/
              margin:auto;
              margin-bottom:100px;
            }
            .img{
              width:100%;
              border-radius: 4px;
            }
            #content{
              width:100%;
              color:black;
              font-size:12pt;
              text-align: left;

              padding:20px;
              font-family: 'Rubik', sans-serif;

            }
        </style>
    </head>
    <body style="background-color:#EA00B9;">


      <div>
        <a class="navbar-brand" href="#" style="background-color:#EA00B9;">
              <img  src="https://68.media.tumblr.com/f2d20991f507d4883a37bc7108e38dd0/tumblr_ootxmp1siT1qhk3cbo2_1280.png" style="width:12%; background-color:#EA00B9;">
            </a></div>
<br><br><br><br>
<div id="container">
  <h1>     {{$photo->title}}</h1>
            <img class="img" src='{{ $photo->link }}'>
<br>
<div id="content">
          Artist:   <em>{{$photo->artist}}</em>
            <br>    <br>
              Walking Area: <em>{{$photo->area}}</em>
              <br>    <br>
            Specific Location: <em>{{$photo->location}}</em>
            {{$photo->id}}

</div>













</div>
    </body>
</html>
