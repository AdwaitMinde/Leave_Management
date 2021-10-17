<html>
    <head>
        <script src='https://code.jquery.com/jquery-3.6.0.min.js'>
        </script>
        <script type="text/javascript" src="js/login_script.js"></script>
        <title>login and Registration</title>
        <link rel="stylesheet" href="login.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body style="background-image: linear-gradient(to bottom, #66ffff 0%, #ffcc80 100%);">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href='login.html' class="navbar-brand" style="font-size: 25px;">Leave Management system</a>
                </div>
            </div> 
        </nav>
        <div class="container" style="opacity: 95%;">
            <div class="login-page loginDivPad bgLogin">
                <div class="form">
                    <form class="register-form" method='post' id='register' onsubmit='return register_validate()'>
                        <h1>Register</h1>
                        <div class="input-group loginPad">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input class="form-control m-3" type="text"
                                                            id="registerUsername"
                                                            placeholder="Username" />
                        </div>
                        <div class="input-group loginPad">
                            <span class="input-group-addon"><i class="glyphicon
                                                                      glyphicon-lock"></i></span>
                            <input type="password" id="registerPassword"class="form-control m-3" type="text"
                                                                                                 placeholder="Password" />

                        </div>
                        <div class="input-group loginPad">
                            <span class="input-group-addon"><i class="glyphicon
                                                                      glyphicon-lock"></i></span>
                            <input class="form-control m-3" type="password"
                                                            id="registerRePassword" type="text"
                                                                                    placeholder="Re-enterPassword" />
                        </div>
                        <div class="input-group loginPad">
                            <span class="input-group-addon"><i class="glyphicon
                                                                      glyphicon-envelope"></i></span>
                            <input class="form-control m-3" id="registerEmail" type="text"
                                                                               placeholder="Email" />
                        </div>
                        <div class="input-group loginPad">
                            <span class="input-group-addon"><i class="glyphicon
                                                                      glyphicon-phone"></i></span>
                            <input class="form-control m-3" type="text"
                                                            id="registerContact"
                                                            placeholder="Contact No." />
                        </div>

                        <p class="message">Already Registered?  <a href="#">Login</a> </p>
                        <br></br>
                        <input type="submit" value="Submit">
                    </form>
                    <form class="login-form" method="post"
                                             onsubmit="return login_validate()" id='loginForm'>
                        <h1>Login</h1>
                        <div class="input-group loginError loginPad">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="loginUsername" class="form-control m-3" type="text"
                                                                               placeholder="Username"/>
                        </div>
                        <div class="input-group passwordPad">
                            <span class="input-group-addon"><i class="glyphicon
                                                                       glyphicon-lock"></i></span>
                            <!--put a error message when password is wrong using-->
                            <!--glyphicon-remove-->
                            <input type="password" id="loginPassword" class="form-control" placeholder="password"/>
                            <div class="row"></div>
                        </div>                   
                        <br>
                        <p class="message">Not Registered? <a href="#">Register</a> </p>

                        <input type="submit" 
                               value="Submit" >
                </div>     
                        <!--<p class="message">Not Registered? <a href="#">Register</a> </p>-->
                    </form>
            </div>
        </div>
        </div>     
        <script>
            $('.message a').click(function(){
                            $('form').animate({height: "toggle",opacity: "toggle"}, "slow");

                        });
        </script>

    </body>
</html>