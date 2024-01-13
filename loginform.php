
<?php include("logconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST">
        <div class="align">
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
         </div>
        <div id="id01" class="modal">
          
          <form class="modal-content animate">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="user2.jpg" alt="Avatar" class="avatar">
            </div>
        
            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" id="name"required>
              <br>
        
              <label for="psw"><b>Password</b></label>
        
              <input type="password" placeholder="Enter Password" name="psw" id="password " required>
              <br>
                      
            <div class="container" style="background-color:#f1f1f1">
             
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
            <br>
                <div class="log">
              <button type="submit" name="login">Login</button>
              </div>
              <br>
              <label>
                <div class="remember">
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
              </div>
            </div>
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          </form>
        </form>
        </div>
</body>
</html>
<?php
if(isset($_POST['login'])){
    $name = $_POST['uname'];
    $password = $_POST['psw'];

    if($name!= ""&& $password!=""){
        
            $query = "INSERT INTO loginform values('$name','$password')";
            $data = mysqli_query($conn,$query);
            if($data){
              echo "Login Succesfully";
            
               }
               else{
                echo "falied";
               }
            }
            else{
                echo "<script>alert('Fill the form first')</script>";
            }
            }
            ?>
    
