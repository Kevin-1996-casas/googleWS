<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pgae</title>
    <style>
        .text-center
        {
            text-align: center;
        }
        .border
        {
            border: 1px ridge black;
        }
        .form
        {
            position: absolute;
            top: 20%;
            left: 35%;
            right: 25%;
            
        }
    </style>
</head>
<body>
       <div class="text-center">
          

          <div class="a">
            <form  method="post"  style="width: 30%;" class="border form">
                <h2>Google Cloud Platform</h2>
                <hr>
                <h1>Login Page</h1>

                <input type="text" name="username" placeholder="User Name" style="width: 80%; margin: 10px;">
                <input type="text" name="password" placeholder="Password" style="width: 80%; margin: 10px;"> <br>
                <input type="submit" value="Login" name="login" style="color: green">
               <a href="registor"> <input type="button"  value="New User?" style="color: red;"></a>

                <hr>
                &copy;Google Cloud Platform <br>
           </form>
          </div>
       </div>

       <?php
       ini_set("Display_errors",1);
       error_reporting(E_ALL);

      if($_POST['login'])
      {
              $n = $_POST['username'];
              $p = $_POST['password'];
              $con = new mysqli(null, "root", '', "grupo20sistema","grupo20sistema","/cloudsql/myphpapp-318701:southamerica-east1:grupo20sistema");
              //$data =  $con->query("select * from myLoginDetails where username='$n' and password='$p' ");

             if ($con->connect_error) 
             {
                die("Connection failed: " . $con->connect_error);
             }else{echo "COrrecto";}

              /*if($data->num_rows>0)
              {
                    echo "loged in";
              }
              else
              {
                echo "invalid entry";   
              }*/
      }
        ?>
</body>
</html>
