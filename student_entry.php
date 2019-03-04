  <?php 
   $pagetitle="Students Registration";
  include "includes/header.php"; ?>

  <?php 
    if (isset($_POST['register'])) {

      $studentName = $_POST['name'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $phone= $_POST['phone'];
      $add= $_POST['add'];
      $session = $_POST['session'];
      $program= $_POST['program'];
      $semester= $_POST['semester'];

      $db = new db();

      if($db->std_entry($conn,$studentName,$dob,$gender,$email,$phone,$add,$session,$program,$semester)){
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
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Students Entry</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
          

<div class="form-container">
    <form action="#" method="post" role="form">

        <div class="container">
          <div class="row">
          <div class="col-lg-4">
          <div class="form-group">
            <label for="name" > Student Name(*) </label>
            <input type="text" class="form-control" required id="name" placeholder="student name"  name="name">
          </div>
          </div>
          <div class="col-lg-4">
          <div class="form-group">
            <label for="dob"> Date Of Birth </label>
            <input type="date" class="form-control" id="dob" name="dob">
          </div>
          </div>
         </div>
        </div>  <!-- col-container-->

         <div class="container">
          <div class="row">
           <div class="col-lg-4">

          <div class="form-group">
          <label for="gender"  >Gender(*)</label>
           <select  class="form-control"   required id="sex" name="gender">
           <option>-------select-------</option>
           <option value="male">Male</option>
           <option value="female">Female</option> 
           </select>
          </div>
          </div>
          <div class="col-lg-4">

          <div class="form-group">
            <label for="email"  >Email address </label>
            <input type="email" class="form-control" required id="email" placeholder=" Email" name="email">
          </div>
          </div>
           </div>
          </div><!-- col-container-->

       <div class="container">
        <div class="row">
         <div class="col-lg-4">
          <div class="form-group">
            <label for="phone" >Phone </label>
            <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone">
        </div>
        </div>
          <div class="col-lg-4">

          <div class="form-group">
            <label for="add" >Address</label>
            <input type="text" class="form-control" id="add" placeholder="Your address please" rows="3" name="add"></input> 
          </div>
          </div>
          </div>
          </div>
          <div class="container">
           <div class="row">
          <div class="col-lg-4">

          <div class="form-group">
            <label for="session" >Session</label>
            <input type="text" class="form-control" id="session" placeholder="session" name="session">
          </div>
          </div>
              <div class="col-lg-4">
          <div class="form-group">
          <label for="program"  class="col-sm-2 control-label">Program</label>
           <select  class="form-control" name="program"  required id="program" name="program">
          <option></option>
           <option >B.TECH</option>
           <option >BioTech</option>
           <option >M.Tech</option>
           <option >IntMSC</option>
           <option >PHD</option>
           </select>
          </div>  
          </div>
           </div>
          </div>

          <div class="col-lg-4">
          <div class="form-group">
          <label for="semester"  class="col-sm-2 control-label">Semester</label>
           <select  class="form-control" name="semester"  required id="semester" >
           <option>------ </option>
           <option>1st</option>
           <option>2nd</option>
           <option>3rd</option> 
           <option>4th</option>
           <option>5th</option>
           <option>6th</option>
           <option>7th</option>
           <option>8th</option>
           </select>
          </div>  
          </div>
          <br><br>
          <div class="ui mini buttons col-sm-offset-3 col-sm-3">
          <button type="submit" class="ui mini positive button" name="register">Register</button>
          <div class="or"></div>
          <button type="reset" class="ui mini red button" name="back">Clear</button>
          </div> 
    
       </form>
       </div><!--form-container--> 
       </div> <!--container--> 
<?php include "includes/footer.php"; ?>