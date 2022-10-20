<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/login-style.css">
  <link rel="stylesheet" href="/css/navbar-style.css">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">
</head>

<body>

  <div class="cont">
    <div class="form sign-in">
      <h2>Welcome back ! </h2>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

      <!-- Login operation -->

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <label>
          <span style="color:black;font-size: 15px;font-family: "Lucida Console", "Courier New", monospace;">Email</span>
          <input type="email" name="email" id="email" />
        </label>
        <label>
          <span style="color:black;font-size: 15px;font-family: "Lucida Console", "Courier New", monospace;">Password</span>
          <input type="password" name="password" id="password" />
        </label>
        @if (Route::has('password.request'))
        <p class="forgot-pass"><a href="{{ route('password.request') }}">Forgot password?</a></p>
        @endif
        <button type="submit" class="submit">Sign In</button>
        <button type="button" class="fb-btn">Connect with <span>facebook</span></button>
      </form>
    </div>

    <div class="sub-cont">

      <div class="img">
        <div class="img__text m--up">
          <h2>New here? &nbsp</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img__text m--in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img__btn">
          <span class="m--up">Sign Up</span>
          <span class="m--in">Sign In</span>
        </div>
      </div>
      <!-- Register Operation -->
      <form method="POST" action='{{ route("register") }}'>
    @csrf

      <div class="form sign-up">
        <h2>Time to feel like home</h2>
      <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <label>
          <span>Name</span>
          <input type="text" name="name"/>
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="email" />
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password" />
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" name="password_confirmation" />
        </label>
        <!-- Select Option Role type -->
        <div class="mt-4">
            <x-label for="role_id" value="{{ __('Register as:') }}" />
            <div class="custom-select" >            
                            <select name="role_id" >
                                <option value="user">User</option>
                                <option value="chef">Chef</option>
                                <option value="admin">Admin</option>
                            </select>
            </div>               
        </div>
        <button type="submit" class="submit">Sign Up</button>
        
        
      </div>

      </form>
    </div>
  </div>

  <a href="https://dribbble.com/shots/3306190-Login-Registration-form" target="_blank" class="icon-link">
    <img src="http://icons.iconarchive.com/icons/uiconstock/socialmedia/256/Dribbble-icon.png">
  </a>
  <a href="https://twitter.com/NikolayTalanov" target="_blank" class="icon-link icon-link--twitter">
    <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
  </a>
  <script src="/js/login-script.js"></script>
  <script src="/js/navbar.js"></script>
</body>

</html>