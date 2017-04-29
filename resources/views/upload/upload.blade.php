
<html>
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <style>
  html, body {
      background-image: url("welcome.png");
      background-size: cover;
      color: yellow;
      font-weight: 100;
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
  .thebutton{
    width:7%;
  }
  .thebutton:hover{
    width:10%;
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

  .m-b-md {
      margin-bottom: 30px;
  }
  .container{
      font-family: 'Rubik', sans-serif;
    color:#EA00B9;  -webkit-box-shadow: 0px 2px 15px -2px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 2px 15px -2px rgba(0,0,0,0.75);
box-shadow: 0px 2px 15px -2px rgba(0,0,0,0.75);
    width:70%;
    margin:auto;
    background-color:#44FFFF;
    margin-top:100px;
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

  </style>
  <body>

    <div class="container">
      <h1><strong>Upload Your Own Photos!</strong></h1>

                        @if (session('successStatus'))

                                    <p style="color:red;"> <strong>{{session('successStatus')}}</strong> !</p>

                              @endif
      <form method="post">
        {{ csrf_field() }}




            <form method="post" action="/thanks" id="search_light">
                {{ csrf_field() }}
              <div class="form-group">
                <label for="address">Photo Web Link (copy Image Address)</label>
                <input type="link" id="link" name="link" class="form-control" >
                <label for="address">Address</label>
                <input type="address" id="address" name="address" class="form-control" >
                <label for="title">Title</label>
                <input type="title" id="title" name="title" class="form-control" >

                <label for="artist">Artist</label>
                <input type="artist" id="artist" name="artist" class="form-control" >
              </div>
<div class="form-group">
    <label for="area">Area</label>

    <div class="form-group">
        <select class="textWidth form-control" name="area"  id="area" >
            <option disabled selected> -- select an option -- </option>
            @foreach($photos as $photo)
              <option  value="{{$photo->area_id}}">
                {{$photo->area}}
              </option>
            @endforeach


                      <input type="submit" value="Submit" class="btn btn-info" style="margin-top:20px;">
                  </select>

              </div>

              </form>

        </div>


        <!-- <input type="submit" value="Upload" class="btn btn-primary" style="    margin-top:20px;background-color: #EA00B9; border:none;"> -->
      </form>
    </div>
  </body>
</html>
