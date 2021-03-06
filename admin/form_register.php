<html>
<head lang="en">
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Login</title>

    <style>
        body {
            min-height: 75rem;
            padding-top: 4.5rem;
        }
        
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .bg-image {
            /* The image used */
            background-image: url("../assets/rustem-baltiyev-x_YN1GKSn-0-un.png");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    
    </style>
    <script>
        // Function to check Whether both passwords 
        // is same or not. 
        function checkPassword(form) { 
            password1 = form.password1.value; 
            password2 = form.password2.value; 

            // If password not entered 
            if (password1 == ''){
                alert ("Tolong masukkan password"); 
                return false;
            }

            // If confirm password not entered 
            else if (password2 == ''){
                alert ("Tolong masukkan konfirmasi password"); 
                return false;
            }
                
            // If Not same return False.     
            else if (password1 != password2) { 
                alert ("\nPassword tidak sama. Silakan coba kembali") 
                return false; 
            } 

            // If same return True. 
            else{ 
                return true; 
            } 
        } 
    </script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Pemrograman Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            </ul>
            <!-- dikanan -->
        </div>
    </nav>

    <main role="main" class="card mx-auto" style="width: 20rem;">
        <div class="card-header">
            <h3>Register</h3>
        </div>
        <div class="card-body">
            <form action="register.php" method="post" onsubmit="return checkPassword(this);">
                <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input class="form-control" type="text" id="inputUsername" name="username" require>
                </div>
                <div class="form-group">
                    <label for="inputUsername">Nama</label>
                    <input class="form-control" type="text" id="inputUsername" name="name" require>
                </div>
                <div class="form-group">
                    <label for="inputUsername">Password</label>
                    <input class="form-control" type="password" id="inputPassword" name="password1" require>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="showPassword" onclick="showHidePassword()">
                            <label class="custom-control-label" for="showPassword">Show</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputUsername">Confirm Paswsord</label>
                    <input class="form-control" type="password" id="inputPassword2" name="password2" require>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="showPassword2" onclick="showHidePassword2()">
                            <label class="custom-control-label" for="showPassword2">Show</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <!-- <table class="center">
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" size="20"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" size="20"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Login" value="Proses"></td>
                    </tr>
                </table> -->
            </form>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>
        function showHidePassword() {
            var x = document.getElementById("inputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        function showHidePassword2() {
            var x = document.getElementById("inputPassword2");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html> 