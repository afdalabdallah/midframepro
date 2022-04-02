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
                <form id="form_style" method="post">
                    <div>
                        <lable class="form-lable">Username</lable>
                        <input class="input-box" type="text" name="username" autofocus required>
                    </div>  
                    <div>
                        <label class="form-lable">Password:</label>
                        <input class="input-box" type="password" id="pass_Input" name="password" autofocus required>
                        
                    </div> 
                    <div>
                        <button class="visibility" type="button" onclick="togglePass();changeVis()">
                            <img src="{{URL::asset('vis2.png')}}" width="25px" height="16px" id="visIcon">
                        </button>
                    </div>
                    
                    <!-- <input type="checkbox" onclick="togglePass()"> -->
                    <a href="sign.html" style="text-decoration: none; float: right;margin-top: 5px;color: white;">Lupa password?</a>
                    <div style="margin-top: 40px;">
                        <button class="clicked">
                            Masuk
                        </button>
                    </div>
                        
                    
                    <div style="display: flex; margin-top: 20px;color: white;">
                        <div class="line" style="margin-right: 20px;"></div>
                        Belum punya akun?
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