
<?php
 $pagetitle="Teachers Registration Page";
 include "includes/header.php"; ?>
 <?php 
    if (isset($_POST['register'])) {
      
      $firstName = $_POST['name'];
      $lastName = $_POST['lname'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $phone= $_POST['phone'];
      $degree= $_POST['degree'];
      $salary= $_POST['salary'];
      $address= $_POST['address'];
     
      $db = new db();

      if($db->teacher_entry($conn,$firstName,$lastName,$dob,$gender,$email,$phone,$degree,$salary,$address)){
      echo "New entry was created";
      }
      else{
        echo "unable to create new entry.";
      }
    }
     ?>  
<div class="container">

               <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Teachers Entry</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>


<div class="form-container">

    <form action="#" method="post" role="form" >
    <div class="container">
    <div class="row">
    <div class="col-lg-3">
          <div class="form-group">
            <label for="name" > First Name (*)</label>
            <input type="text" class="form-control" required id="name" placeholder="First Name" name="name">
          </div>
    </div>
    <div class="col-lg-3">
          <div class="form-group">
            <label for="lname"> Last Name</label>
            <input type="text" class="form-control" required id="lname" placeholder="Last Name"  name="lname">
          </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-3">
          <div class="form-group">
            <label for="dob"> Birthday </label>
            <input type="date" class="form-control" id="dob" name="dob">
          </div>
  </div>
  <div class="col-lg-3">

          <div class="form-group">
          <label for="gender">Gender</label>
           <select  class="form-control" required id="sex" name="gender" >
           <option>-------select-------</option>
           <option value="male">Male</option>
           <option value="female">Female</option> 
           </select>
          </div>
  </div>
  </div>
  </div>
   <div class="container">
    <div class="row">
    <div class="col-lg-3">

          <div class="form-group">
            <label for="email" >Email address </label>
            <input type="email" class="form-control" required id="email" placeholder=" Email" name="email">
          </div>
   </div>
    <div class="col-lg-3">

          <div class="form-group">
            <label for="phone">Phone </label>
            <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone">
          </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-3">
           <div class="form-group">
          <label for="degree" >Degree(*)</label>
           <select  class="form-control" name="degree"  required id="degree" name="degree">
           <option>-------select-------</option>
           <option >Bachelor</option>
           <option >Master</option>
           <option >M.phil</option>
           <option >P.HD</option>
           </select>
          </div>
    </div>
    <div class="col-lg-3">
          <div class="form-group">
            <label for="salary" > Salary </label>
            <input type="text" class="form-control" required id="salary" placeholder=" Enter salary"  name="salary">
          </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-3">

          <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" placeholder="Teacher address please" rows="3" name="address"></textarea>
          </div>
    </div>
    </div>
    </div>
          <div class="ui mini buttons col-sm-offset-3 col-sm-3">
          <button type="submit" class="ui mini positive button" name="register">Register</button>
          <div class="or"></div>
          <button type="reset" class="ui mini red button" name="back">Clear</button>
          </div>
      
       </form>
          </div><!--form-container-->
        </div> <!--container-->
   
<?php include "includes/footer.php"; ?>
