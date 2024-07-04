<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up</title>
    <link rel="stylesheet" href="login.css" />


    

  </head>
  <body>
  
    <main>
    
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form method="POST" action="{{ route('login') }}" autocomplete="off" class="sign-in-form">
              @csrf
              <div class="logo">
                <!-- <img src="./img/logo.png" alt="easyclass" /> -->
                <h2>Solar Consult</h2>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                  id="email" type="email" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  
                    minlength="4"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                  <p> @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</p>
                 
                </div>

                <div class="input-wrap">
                  <input
                  id="password" type="password" class="input-field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                    minlength="4"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                  <p>
                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </p>
                  
                </div>

                <input type="submit" value="{{ __('Login') }}" class="sign-btn" />
                @if (Route::has('password.request'))
                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="{{ route('password.request') }}">Get help</a> signing in
                </p>
                @endif
              </div>
            </form>

            <form method="POST" action="{{ route('register') }}" autocomplete="off" class="sign-up-form">
              @csrf
			<div class="logo">
                <!-- <img src="./img/logo.png" alt="easyclass" /> -->
                <h2>Solar Consult</h2>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                  id="name" type="text" class="input-field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required  
                    minlength="4"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                  @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="input-wrap">
                  <input
                  id="email" type="email" class="input-field @error('email1') is-invalid @enderror" name="email" value="{{ old('email') }}" required 
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                  @error('email1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="input-wrap">
                  <input
                  id="password" type="password" class="input-field @error('password1') is-invalid @enderror" name="password" required autocomplete="new-password"
                    minlength="4"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                  @error('password1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="input-wrap">
                  <input
                  id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Confirm Password</label>
                </div>

                <input type="submit" value="{{ __('Register') }}" class="sign-btn" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="./img/image1.png" class="image img-1 show" alt="" />
              
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2 style="color: #000;">We are here for your Consultion</h2>
                  
                </div>
              </div>

             
            </div>
          </div>
        </div>
      </div>
    </main>
     

    <!-- Javascript file -->

    <script src="login.js"></script>
  </body>
</html>
