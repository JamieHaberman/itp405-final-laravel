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
                background-image: url("welcome.png");
                background-size: cover;
                color: yellow;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            h1{
              font-family: 'Rubik', sans-serif;
              font-size:15pt;
              padding-bottom: 10px;
}
h2{
  font-family: 'Rubik', sans-serif;
  font-size:12pt;
  color: #44FFFF;

}


.form-group{
  width:300px;
  font-family: 'Rubik', sans-serif;
  font-size:12pt;


}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #EA00B9;;
}

li {
    float: left;
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


  #area{background-color: #44FFFF;}
        </style>
    </head>
    <body style="background-color:#EA00B9;">
      <div>
        <a class="navbar-brand" href="#" style="background-color:#EA00B9; width:400px; float:left;">
              <img alt="Brand" src="logo.png" style="width:30%; background-color:#EA00B9;">
            </a>

            <ul style="float:right">
              <li><a href="/profile">Profile</a></li>

  <li><a href="/explore">Explore</a></li>
  <li><a href="/upload">Upload</a></li>
  <li><a href="/logout">Logout</a></li>
</ul>


                </div>
              </div>
            </nav>





            <div id='content' style="width:300px; padding:auto; text-align:center;margin:auto; padding-top:100px;" >
            @if (session('successStatus'))

                        <h2> {{session('successStatus')}} {{Auth::user()->email }}!</h2>

                  @endif
              <h1>Where are you heading?</h1>
 </div>


  <center><form method="get" action="/results" id="search_light">
    <!-- <input name="area" type="text" size="30" placeholder="Find some graffiti..."/> -->
    <div class="form-group">
        <select class="textWidth form-control" name="area" id="area" >
            <option disabled selected> -- select an option -- </option>
            @foreach($photos as $photo)
              <option value="{{$photo->area}}">
                {{$photo->area}}
              </option>
            @endforeach

            <input type="submit" value="Submit" class="btn btn-info" style="margin-top:20px; ">
        </select>

    </div>

    </form></center>





    </div>
    </div>




</div>
    </body>
</html>
