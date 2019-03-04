<?php
error_reporting(E_ALL & ~ E_NOTICE);
session_start();
 $pagetitle="LogIn Page";
?>
<?php
       if ($_POST['submit']){
        include 'connection.php';
        $username=($_POST['username']);
        $password=($_POST['password']);

        $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
        $query=mysqli_query($dbcon, $sql);
      //  echo  "<h1>.'$sql'.</h1>";
        $rows=mysqli_num_rows($query);
           //echo "<h1>$rows</h1>";
           if($rows >0){
            //echo "<h1>Hello</h1>";
              $_SESSION['username']=$username;
             // echo "<h1>Success</h1>";
             header("Location:home.php");
            }else{
            echo "<span style='color:red;'>User name or password is incorrect!</span>";
          }
        } 
?>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
        <link href="css/semantic.min.css" rel="stylesheet">
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
        <link href="css/mystyle.css"  rel='stylesheet' type='text/css'> 
<div class="container">

               <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 40px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Welcome to LOG IN</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
 </div>
     <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                                <div class="form-group">
                                    <input class="form-control" placeholder="User name" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label> <input name="remember" type="checkbox" value="Remember Me">Remember Me</label>
                                </div>
                                <button type="sumbit" name="submit" value="login" class="btn btn-lg btn-success btn-block">Login</button>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
 <?php include "includes/footer.php"; ?>