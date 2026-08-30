
<?php 

session_start();

include "db.php";

if(isset($_POST['submit'])){
    
$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
    
$query = "SELECT * FROM users WHERE username = '{$username}' ";
$result = mysqli_query($connection, $query);
    
 
    if(!$result){
        
        die('QUERY FAILED' . mysqli_error($connection));
    }
    
    while($row = mysqli_fetch_array($result)){
        
    $db = $row['user_id'];
        $db_user = $row['username'];
        $db_pass = $row['user_password'];
        $db_first = $row['user_firstname'];
        $db_last = $row['user_lastname'];
        $db_role = $row['user_role'];
        
    }
    
   /* $password = crypt($password, $db_pass);*/
    
    if($username !== $db_user && $password !== $db_pass ){
        
        header("Location: ../index.php");
    } else if ($username == $db_user && $password == $db_pass){
        
        $_SESSION['username'] = $db_user;
        $_SESSION['user_firstname'] = $db_first;
        $_SESSION['user_lastname'] = $db_last;
        $_SESSION['user_role'] = $db_role;
        
        header("Location: ../adminS");
    } else {
        
        header("Location: ../index.php");
    }
    
}






?>
