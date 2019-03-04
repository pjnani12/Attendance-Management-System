<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

    <head>         
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pagetitle; ?></title>
        
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
        <link href="css/semantic.min.css" rel="stylesheet">
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
        <link href="css/mystyle.css"  rel='stylesheet' type='text/css'> 

    </head>   
    <body style="background-color: #80bfff;">
        <div class="templatemo-top-menu">
            <div class="container">
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="home.php" class="navbar-brand">
                                <img src="image/logo.jpg" alt="AMRITA LOGO" >
                                </a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar" class="external-link">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 80px;"  role="menu" aria-labelledby="dropdownMenu" aria-expanded="false">
                                <li><a href="home.php" class="external-link">Home</a></li>
                                <li><a href="student.php" class="external-link">Students</a></li>
                                <li><a href="teacher.php" class="external-link">Teachers</a></li>
                                <li><a href="subject.php" class="external-link">Subjects</a></li>
                            
                                <li><a href="AttendenceReport.php" class="external-link">Overall Report</a></li>
                                  <li><a href="AttendenceForm.php" class="external-link">Do Attendance</a></li>

                                <li><a href="login.php" class="external-link" >Log Out</a></li>
                             </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>