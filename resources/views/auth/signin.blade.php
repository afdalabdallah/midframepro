<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign In</title>
        <link rel="stylesheet" href="{{URL::asset('css/signin.css')}}">
        <script type="text/javascript" src="{{URL::asset('js/togglePass.js')}}"></script>
    </head>
    <body>
        <header>
         
        </header>
        <main>
            <div style="margin:50px; margin-top: 130px;">
                <h1 style="text-align: center;color: white;">Sign In</h1>
                <form method="POST" action="{{ route('login') }}" id="form_style">
                    @csrf
                    <div>
                        <lable class="form-lable">Email</lable>
                        <input class="input-box" type="Email"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus required>
                        @error('email')
                            <span class="invalid-feedback" role="alert" style="color:white">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>  
                    <div>
                        <label class="form-lable">Password:</label>
                        <input class="input-box" type="password" id="password" @error('password') is-invalid @enderror" name="password" autofocus required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div> 
                    <div>
                        <button class="visibility" type="button" onclick="togglePass();changeVis()">
                            <img src="{{URL::asset('vis2.png')}}" width="25px" height="16px" id="visIcon">
                        </button>
                    </div>
                    
                    <!-- <input type="checkbox" onclick="togglePass()"> -->
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" style="text-decoration: none; float: right;margin-top: 5px;color: white;">Forgot your password?</a>
                    @endif
                   
                    <div style="margin-top: 40px;">
                        <button class="clicked">
                            Sign in
                        </button>
                    </div>
                        
                    
                    <div style="display: flex; margin-top: 20px;color: white;">
                        <div class="line" style="margin-right: 20px;"></div>
                        Make an account
                        <dif class="line" style="margin-left:20px;"></dif>
                    </div>
                    <div style="margin-top: 20px;">
                        <button class="clicked_sign" type="button" onclick="window.location.href='./signup'">
                            Sign Up
                        </button>
                    </div>
                   
                </form>
            </div>
         
        </main>

    </body>
</html>