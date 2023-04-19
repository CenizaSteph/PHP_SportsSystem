<?php
include('config.php');

if(isset($_POST['register'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = sha1(mysqli_real_escape_string($conn, $_POST['password']));

    // Check if email already exists in the database
    $sql = "SELECT * FROM users WHERE Email='$email'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    
    // If email already exists, display an error message
    if($count > 0) {
        echo "<script>alert('Email already exists in the database!');</script>";
    } else {
        // If email does not exist, insert data into the database
        $sql = "INSERT INTO users (FirstName, LastName, Gender, Role, Email, Password)
                VALUES ('$fname', '$lname', '$gender', '$role', '$email', '$password')";
        if(mysqli_query($conn, $sql)) {
            header("location:../Pages/signup.html");
            echo"<script>alert('Data saved successfully!');</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}


/*if(isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    // Check if email already exists in the database
    $sql = "SELECT * FROM users WHERE Email='$email'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    
    // If email already exists, display an error message
    if($count > 0) {
        echo "<script>alert('Email already exists in the database!');</script>";
    } else {
        // If email does not exist, insert data into the database
        $sql = "INSERT INTO users (FirstName, LastName, Gender, Role, Email, Password) VALUES ('$fname', '$lname', '$gender', '$role', '$email', '$password')";
        if(mysqli_query($conn, $sql)) {
            header("location:../Pages/signup.php");
            echo"<script>alert('Data saved successfully!');</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}*/

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password = sha1($password);

    $stmt = $conn->prepare("SELECT * FROM users WHERE Email=? and Password=?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $num = mysqli_num_rows($result);

    if($num>0){
        $_SESSION['email'] = $email;
        header("location:../Pages/index.php");
    }else{
        echo"<script>alert('something went wrong try again')</script>";
    }
}

/*if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $query="SELECT * FROM users where Email='$email' and password='$password'";

    $result=mysqli_query($conn,$query);
    $num=mysqli_fetch_array($result);
    if($num>0){
        header("location:../Pages/index.php");
    }else{
        echo"<script>alert('something went wrong try again');</script>";
    }
}*/

?>