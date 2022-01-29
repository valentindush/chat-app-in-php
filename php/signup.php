<?php
session_start();

    include_once "config.php";

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) ){

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");

            if(mysqli_num_rows($sql) > 0){ // if email exixts in database
                echo "email ($email) already taken";
            }else{

                if(isset($_FILES['image'])){
                    $image_name = $_FILES['image']['name'];
                    $image_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];

                    $img_explode = explode(".", $image_name);
                    $img_ext = end($img_explode);

                    $extensions = ["jpeg", "png", "jpg"];

                    if(in_array($img_ext, $extensions) === true){
                        $time = time();
                        $new_img_name = $time.$image_name;
                        if(move_uploaded_file($tmp_name, "img/".$new_img_name)){

                            $random_id = rand(time(), 100000);
                            $status = "Active now";

                            //INSERTING DATA IN DATABASE

                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                            VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");

                            if($sql2){
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' ");

                                if(mysqli_num_rows($sql3) > 0 ){
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    echo "success";
                                }else{
                                    echo "try again later";
                                }
                            }else{
                                echo "something went wrong";
                            }
                        }
                       
                    }else{
                        echo "please select an image file  - only jpeg, png, jpg files are accepted";
                    }
                }
            }
        }else{
            echo "$email in not a valid email";
        }

    }else{
        echo "all fields are required";
    }
  
?>