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
        <form method="post" action="/signup">
            <div >
                <div style="margin: auto;">
                    <label for="text"><b>First Name</b><br></label>
                    <input name="firstName" type="text" class="data-input" placeholder="First Name" style="margin-right: 1px;"/>
                </div>
                <div>
                    <label for="text"><b>Last Name</b><br></label>
                    <input name="lastName" type="text" class="data-input" placeholder="Last Name" style="margin-left: 1px;"/>     
                </div>
                
                <div>
                    <label for="text"><b>Email</b><br></label>
                    <input name="Email" type="email" class="data-input" placeholder="Email"/>
                </div>
                
                <label for="text"><b>Username</b><br></label>
                <input name="username" type="text" class="data-input" placeholder="Username"/>
                <div style="margin-bottom: 15px;">
                    <label for="password"><b>Password</b><br></label>
                    <input name="password" type="password" class="data-input" placeholder="Password" id="pass_Input"/>
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