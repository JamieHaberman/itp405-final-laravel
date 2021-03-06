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
                background-image: url("bg.png");
                background-size: cover;
                color: yellow;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            h1{
              font-family: 'Rubik', sans-serif;
              font-size:30pt;
              padding-bottom: 10px;
              color:#44FFFF;


}


            #content {
                margin: auto;

            }


            #photos {
              /* Prevent vertical gaps */
              line-height: 0;
              margin-botton:100px;

              -webkit-column-count: 4;
              -webkit-column-gap:   0px;
              -moz-column-count:    4;
              -moz-column-gap:      0px;
              column-count:         4;
              column-gap:           0px;
            }

            #photos img {
              /* Just in case there are inline attributes */
              width: 100% !important;
              height: auto !important;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #EA00B9;
            }

            li {
                float: left;
            }
            .faves{

              height:20px;
              width:20px;

            }
            li a {
              font-family: 'Rubik', sans-serif;
              font-size:12pt;
              color: #44FFFF;
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                border-radius: 10px;
            }

            li a:hover{
                background-color: #44FFFF;
                font-family: 'Rubik', sans-serif;
                font-size:12pt;
                color: #EA00B9;
                text-decoration: none;
            }


        </style>
    </head>
    <body style="background-color:#EA00B9;">

      <!-- //nav bar -->
      <div>
        <a class="navbar-brand" href="/explore" style="background-color:#EA00B9; width:400px; float:left;">
              <img alt="Brand" src="logo.png" style="width:30%; background-color:#EA00B9;">
            </a>

            <ul style="float:right">

    <li><a href="/profile">Profile</a></li>
  <li><a href="/explore">Explore</a></li>
  <li><a href="/upload">Upload</a></li>
  <li><a href="/logout">Logout</a></li>
</ul>


                </div>

              <br><br>  <br><br>


          <div style="width:300px; margin:auto; text-align:center;">      <h1 ><strong>{{ $searchterm }}</strong></h1>
        <a href = "/upload"><button class="btn btn-info">Upload Your Own Photos!</button></a>   <br><br>
<!-- //flash message successfully added photo -->
          @if (session('successStatus'))
            <div class="success" role="alert">
              <strong>{{session('successStatus')}}</strong>
            </div>
          @endif</div></div>


                 <br><br>


              <!-- //photo gallery of results -->
              <div id='content' style="width:900px; margin:auto; " >
                <section id="photos">

                  <form method="get" action="/details" >
                    @foreach($photos as $photo)
                          <div style="margin:20px; ">
                <a href="/details/{{$photo->id}}">  <img src="{{$photo->link}}"  name="photoclick" style="margin:10px;" >
                </a>


                  </form>


<!-- //post the favorite  -->
                    <form method="post" action="/profile">
                      {{ csrf_field() }}
                      <input type="hidden" name="user_id" value="{Auth::user()->id}}">
                      <input type="hidden" name="photo_id" value="{{$photo->id}}">
<center> <strong> <input type="submit"  value="+"style="color: #EA00B9; font-size:20pt; background-color: yellow; border-radius:20px; height:40px; width:40px; border:none; position:relative; top:-40px;left:90px;"></strong>
                </center>

             </div>
                 </form>

                      @endforeach


            </section>







</div>
    </body>
</html>
