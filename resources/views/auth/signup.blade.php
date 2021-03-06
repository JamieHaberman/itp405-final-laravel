
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

  </style>
  <body>
    <div class="container">
      <h1>Sign Up</h1>
      <p>
        Already have an account? Please <a href="/login">Login</a>.
      </p>
      <form method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control" value="{{Request::old('email')}}">
        </div>
        <div class="form-group">
          <label for="pasword">Password</label>
          <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="form-group">
          <label for="pasword_confirmation">Confirm Password</label>
          <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
        </div>
        @if (session('successStatus'))

                    <p> {{session('successStatus')}} !</p>

              @endif
        <input type="submit" value="Sign Up" class="btn btn-primary" style="    background-color: #EA00B9; border:none;">
      </form>
    </div>
  </body>
</html>
