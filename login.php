<?php include_once "head.php" ?>
<body>

    <div class="wrapper">
        <section class="form login">
            <header style="text-align: center;">Chat App
            <h4 style="font-size: 15px;">Login</h4>
        </header>

            
            <form action="#">
                <div class="error-txt" id="error">
                    error text
                </div>
                
               
                <div class="field input">
                    <label>Email address</label>
                    <input type="email" name="email" placeholder=" Email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your Password">
                    <i id="btnToggle" class="fas fa-eye"></i>
                </div>
                
                <div class="field button">
                    <input type="submit" value="Continue">
                </div>
                <div class="link">Not a user? <a href="index.php">Sign Up now</a> </div>
            </form>
        </section>
    </div>

    <script src="js/passwordToggle.js"></script>
    <script src="js/login.js"></script>
    
</body>
</html>