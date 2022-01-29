<?php include_once "head.php" ?>
<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
 ?>

<body>

    <div class="wrapper">
        <section class="form signup">
            <header style="text-align: center;">Chat App
                <h4 style="font-size: 15px;">Create new account</h4>
            </header>
            


            <form action="#" enctype="multipart/form-data">
                <div class="error-txt" id="error">
                
                </div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" id="fname" placeholder="First Name">

                    </div>      
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" id="lname" placeholder="Last Name">
                    </div>
                </div>
               
                <div class="field input">
                    <label>Email address</label>
                    <input type="email" id="email" name="email" placeholder=" Email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="New Password">
                    <i id="btnToggle" class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select profile image</label>
                    <input type="file" name="image">
                </div>
                <div class="field button">
                    <input id="submit" type="submit" value="Continue">
                </div>
                <div class="link">Already signed up? <a href="login.php">Login now</a> </div>
            </form>
        </section>
    </div>

    <script src="js/passwordToggle.js"></script>
    <script src="js/signup.js"></script>
    
</body>
</html>
