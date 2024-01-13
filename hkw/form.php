<?php include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sty.css">
    <title>Php Crud operations</title>
</head>
<style>
    *
{
    padding: 0;
    margin:0;
    box-sizing: border-box;

}

body{
    background-color: rosybrown;
    padding: 0 10px;
}
.container{ 
   
    max-width: 500px;
    width: 100%;
    background-color: white;
    margin: 20px auto;
    padding: 30px;
    box-shadow: 5px 5px 5px (0,0,0,0.5);
}
.container .title{
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 25px;
    color: rosybrown;
    text-transform: uppercase;
    text-align: center;
}
.container .form{
    width: 100%;
}
.container .form .input_field{
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}
.container .form .input_field label{
  
    width: 200px;
    margin-right: 10px;
    font-size: 14px;

}
.container .form .input_field .input,
.container .form .input_field .textarea{
  width: 100%;
  outline: none;
  border: 1px solid rosybrown;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.5s;
}
.container .form .input_field .textarea{
    resize: none;
    height: 70px;
}
.container .form .input_field .custom_select {
    position: relative;
    width: 100%;
    height: 37px;
}
.container .form .input_field .custom_select select{
    -webkit-appearance: none;
    appearance: none;
  
    width: 100%;
    height: 100%;
    padding: 8px 10px;
    border: 1px solid rosybrown;
   
    border-radius: 3px;
    outline: none;
  
}
.container .form .input_field .custom_select:before{
    content: "";
    position: absolute;
    top: 12px;
    right: 10px;
    border: 8px solid black ;
    border-color: rosybrown transparent transparent transparent;
    pointer-events: none;
}
.container .form .input_field .input:focus{

 border: 1px solid rgb(196, 10, 196);
}
.container .form .input_field p{
    font-size: 14px;
    color: #757575;
}
.container .form .input_field .check{
    width: 15px;
    height: 15px;
    position: relative;
    display: block;
    cursor: pointer;
}
.container .form .input_field input[type="checkbox"]{
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
}
.container .form .input_field .check .checkmark{
    width: 15px;
    height: 15px;
    border: 1px solid rosybrown;
    display:  block;
    position: relative;

  
}
.container .form .input_field .check .checkmark::before{
 position: absolute;
 top: 1px;
 left: 2px;
 width: 5px;
 height: 2px; 
 border: 2px solid;
 border-color: transparent transparent white white;
 transform: rotate(-45deg);
 content :"";

}
.container .form .input_field .check input[type="checkbox"]:checked ~ .checkmark{
    background: rosybrown;

}
.container .form .input_field .check input[type="checkbox"]:checked ~ .checkmark::before{
    display: block;

}
.container .form .input_field .btn{
    width: 100%;
    padding: 8px 10px;
    font-size: 15px;
    border: 0;
    background: rosybrown;
    color: white;
   
    cursor: pointer;
    border-radius: 3px;
    outline: none;



}
.container .form .input_field:last-child{
    margin-bottom: 0;

}
.container .form .input_field .btn:hover{
    background: rgb(38, 1, 38);

}

</style>

<body>
    <div class="container">
    <form action="#" method="POST">
        <div class="title">
            Registration Form
        </div>

        <div class="form">
            <div class="input_field">
                <label>First Name</label>
                <input type="text" class="input" name="fname"required>
            </div>


          

            
            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname"required>
            </div>

           
            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="password"required>
            </div>

           
            <div class="input_field">
                <label>Confirm Password</label>
                <input type="password" class="input" name="conpassword"required>
            </div>

           
            <div class="input_field">
                <label>Gender</label>
                <div  class="custom_select" >
               <select name="gender"required>
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
               </select>
                </div>
            </div>
            
            
            
            <div class="input_field">
                <label>Email address</label>
                <input type="text" class="input"name="email">
            </div>
           
            <div class="form">
            <div class="input_field">
                <label>Phone No.</label>
                <input type="text" class="input" name="phone"required>
            </div>

               
            
            <div class="input_field">
                <label>Address</label>
               <textarea class="textarea" name="address"required></textarea>
            </div>
            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" >
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and Conditions</p>
             
            </div>
            <div class="input_field">
                <input type="submit" value="Register" class="btn"name="register">
            </div>


        </div>
</form>
    </div>
</body>
</html>
<?php
if(isset($_POST['register'])){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $psw = $_POST['password'];
    $cpsw = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if($first_name!= ""&& $last_name!=""&& $psw!=""&&$cpsw!=""&& $gender!=""&& $email!=""&& $phone!=""&& $address!="" )
   {
   $query = "INSERT INTO form values('$first_name','$last_name','$psw','$cpsw','$gender','$email','$phone','$address')";
   $data = mysqli_query($conn,$query);

   if($data){
    echo "Data inserted into database";

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