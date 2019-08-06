
<body>
<div>
<link href="{{asset('css/login.css')}}" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('css/app.css')}}" rel="stylesheet" id="bootstrap-css">

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="{{asset('images/user1.png')}}" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="{{url()->action('LoginController@login') }}" method="POST" >
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="username ou email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
    <h5>Default Auth</h5>
    <p>username: admin and password: admin</p>
      <a class="underlineHover" href="#">Go to the Site</a>
    </div>

  </div>
</div>
</body>