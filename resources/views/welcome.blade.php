<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('inc.css')
        <title>Welcome to PUP-FISS</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
            
    video {
        float:left;
        width: 90%;
        height: 90%;
        margin: 20px auto 30px;
        padding: 50px 70px 70px 71px;
    }
    </style>
    <style type="text/css">
    body#LoginForm{ background-image:url"{{asset("images/pup.jpg")}}"; background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px; float:right;}
    
    .form-heading { color:#800000; font-size:23px;}
    .panel h2{ color:#800000; font-size:18px; margin:0 0 8px 0;}
    .panel p { color:#800000; font-size:14px; margin-bottom:30px; line-height:24px;}
    .login-form .form-control { float:right;
      background: #f7f7f7 none repeat scroll 0 0;
      border: 1px solid #800000;
      border-radius: 4px;
      font-size: 14px;
      height: 50px;
      line-height: 50px;
    }
    .main-div {
      float:right;
      background: #f7f7f7 none repeat scroll 0 0;
      border-radius: 2px;
      margin: 10px auto 30px;
      max-width: 80%;
      padding: 50px 70px 70px 71px;
      opacity:0.9;
    }
    
    .login-form .form-group {
      margin-bottom:10px;
    }
    .login-form{ text-align:center;}
    .forgot a {
      color: #800000;
      font-size: 14px;
      text-decoration: underline;
    }
    .login-form  .btn.btn-primary {
      background: #800000 none repeat scroll 0 0;
      border-color: #800000;
      color: #800000;
      font-size: 14px;
      width: 100%;
      height: 50px;
      line-height: 50px;
      padding: 0;
    }
    .forgot {
      text-align: left; margin-bottom:30px; color:800000;
    }
    .botto-text {
      color: #800000;
      font-size: 14px;
      margin: auto;
    }
    .login-form .btn.btn-primary.reset {
      background: #800000 none repeat scroll 0 0;
    }
    .back {color:800000; text-align: left; margin-top:10px;}
    .back a {color: #800000; font-size: 13px;text-decoration: none;}
    
  
        </style>
    </head>
    <body>
        <section>
            <img class="img-fluid" src ="{{asset('img/header2.jpg')}}";  />  </section>
            @include('inc.mainpagenavbar')

            <section class="cid-qW67Rcphaw mbr-fullscreen mbr-parallax-background" id="header2-37">
                    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(255, 255, 255);"></div>
                <video width="350" controls>
                  <source src="mov_bbb.mp4" type="video/mp4">
                  <source src="mov_bbb.ogg" type="video/ogg">
                  Your browser does not support HTML5 video.
                </video>
                <body id="LoginForm">
                <div class="container">
                <div class="login-form">
                <div class="main-div">
                    <div class="panel">
                   <h2>Login</h2>
                   <p>Please enter your email and password</p>
                   </div>
                    <form id="Login" method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="form-group">
                
                
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email Address" />
                        </div>
                
                        <div class="form-group">
                
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password" />
                        </div>
                        <div class="forgot">
                        <a href="reset.html">Forgot password?</a></div>
                        <button type="submit" class="btn pup-buttons">Login</button>
                    </form>
                    </div>
                </div>
                </div>
                </div>
                </section>

        @include('inc.js')
    </body>
</html>
