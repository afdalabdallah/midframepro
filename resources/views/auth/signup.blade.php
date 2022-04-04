<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
        <title>Sign Up</title>
        <link rel="stylesheet" href="{{URL::asset('css/signup.css')}}">
        <script type="text/javascript" src="{{URL::asset('js/togglePass.js')}}"></script>

    </head>
    <body>
        <div class="contact-us">
            <h1>Sign Up</h1>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div >
                <div style="margin: auto;">
                    <label for="text"><b>First Name</b><br></label>
                    <input name="firstName" type="text" class="data-input" placeholder="First Name" style="margin-right: 1px;"/>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> 
                    @enderror
                </div>

                <div style="margin: auto;">
                    <label for="text"><b>Last Name</b><br></label>
                    <input name="lastName" type="text" class="data-input" placeholder="Last Name" style="margin-right: 1px;"/>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                       </span> 
                    @enderror
                </div>
                
                <div>
                    <label for="text"><b>Email</b><br></label>
                    <input type="email" class="data-input" placeholder="Email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                </div>
                
               
                <div style="margin-bottom: 15px;">
                    <label for="password"><b>Password</b><br></label>
                    <input type="password" class="data-input"  id="password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div style="margin-bottom: 15px;">
                    <label for="password"><b>Password</b><br></label>
                    <input name="password_confirmation" type="password" class="data-input"  id="password-confirmation" required autocomplete="new-password"/>
                    <button class="visibility" type="button" onclick="togglePass();changeVis()" >
                        <img src="{{URL::asset('vis2.png')}}" width="25px" height="16px" id="visIcon">
                    </button>
                </div>

                <!-- <textarea name="text" class="comment-input" placeholder="Comment" ></textarea> -->
                <input type="submit" value="Sign Up"/>
            </div>
        </form>
    </body>
</html>