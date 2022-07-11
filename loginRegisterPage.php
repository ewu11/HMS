<!DOCTYPE html>    
<html>    
    <header>    
        <title>Login</title>

        <?php include "./header.php"; ?>

        <script type="text/javascript" src="./processors/navBarProcessor.js"></script>
    </header>
    
    <script>
        // testing();
        displayNavBar(false, "mainHeader");

        $('.carousel slide').carousel({
        interval: false,
        });
    </script>

    <body>
        <div class="mainContainer">
            <div class="firstDiv">
                <div class="areaContainer">
                    <div class="loginArea" data-bs-target="#loginRegCarousel" data-bs-slide="prev" title="Click here to login.">Login</div>
                    <div class="registerArea" data-bs-target="#loginRegCarousel" data-bs-slide="next" title="Click here to register.">Register</div>
                </div>
                <div class="mainContentDiv">
                    <div class="loginRegContainer">
                        <div id="loginRegCarousel" class="carousel slide" data-bs-ride="false" data-bs-wrap="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="loginFormDiv">    
                                        <form id="login" method="POST" action="./processors/loginProcessor.php">
                                            <h1>Login</h1>
                                            <p style="font-size:small;">Already own an account? Enter here to login.</p>

                                            <hr>

                                            <label><b>User Name</b></label>    
                                            <input type="text" name="Uname" id="Uname" placeholder="Username">    
                                            <br><br>    

                                            <label><b>Password</b></label>    
                                            <input type="Password" name="Pass" id="Pass" placeholder="Password">    
                                            <br>

                                            <hr>

                                            <input class="btn btn-primary" type="submit" name="log" id="log" value="Login">       
                                            <br><br>

                                            <input type="checkbox" id="check">    
                                            <span>Remember me</span>    
                                            <br><br>    
                                            Forgot <a href="./processors/forgotPassProcessor.php">Password</a>
                                        </form>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="registerFormDiv">
                                        <form method="POST" action="./processors/registerProcessor.php">
                                            <h1>Register</h1>
                                            <p style="font-size:small;">New here? Enter here to create an account.</p>

                                            <hr>

                                            <label for="email"><b>Email</b></label>
                                            <input type="text" placeholder="Enter Email" name="email" id="email" required>
                                            <br><br>

                                            <label for="name"><b>Name</b></label>
                                            <input type="text" placeholder="Enter Name" name="name" id="name" required>
                                            <br><br>

                                            <label for="studID"><b>Student ID</b></label>
                                            <input type="text" placeholder="Enter Student ID" name="studid" id="studid" required>
                                            <br><br>

                                            <label for="psw"><b>Password</b></label>
                                            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                                            <br><br>

                                            <label for="psw-repeat"><b>Repeat Password</b></label>
                                            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
                                            <br><br>

                                            <hr>

                                            <button type="submit" class="btn btn-success">Register</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- for bootstrap uses -->
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>

    <footer>
        <?php include "./footer.php"; ?>
    </footer>
</html>