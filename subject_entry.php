
<?php
 $pagetitle="Entering Subjects Detail In This Page ";
 include "includes/header.php"; ?>

 <?php 
    if (isset($_POST['saved'])) {
    
      $subName = $_POST['subject'];
      $teacher= $_POST['teacher'];
      $field = $_POST['field'];
      $semester= $_POST['semester'];

      $db = new db();

      if($db->subject_entry($conn,$subName,$teacher,$field,$semester)){
      echo "Succesfully Saved";
      }
      else{
        echo "unable to Save.";
      }
    }
     ?>  
 
<div class="container">

               <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Subject's Entry</span>
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
            <label for="subject" >Subject's Name </label>
           <select  class="form-control" required id="teacher" name="subject">
           <option>Select subject</option>
           <option >C++</option>
           <option >Java</option>
           <option >DBMS</option>
           <option >OOP</option>
           <option >C</option>
           <option >DSP</option>
           <option >SICP</option>
           <option >MACHINES</option>
           <option >EEE</option>
           <option >CIRCUITS</option>
           <option >COA</option>
           <option >Others</option>
           </select>
          </div>
          </div>
    
          <div class="col-lg-3">

          <div class="form-group">
          <label for="field" >Field</label>
           <select  class="form-control" required id="field" name="field">
           <option>Select field</option>
           <option >B.TECH</option>
           <option >BioTech<option>
           <option >M.Tech</option> 
           <option >IntMSC</option>
           <option >PHD</option>
           </select>
          </div>
          </div>

         </div><!--col-row-->
          </div><!--col-container-->
           <div class="container">
          <div class="row">
          <div class="col-lg-4">

          <div class="form-group">
            <label for="semester" >Semester </label>
           <select  class="form-control" required id="semester" name="semester">
           <option>Select semester</option>
           <option >1st</option>
           <option >2nd</option>
           <option >3rd</option> 
           <option >4th</option>
           <option >5th</option>
           <option >6th</option> 
           <option >7th</option>
           <option >8th</option>
           </select>
          </div>
          </div>
        
      
         <div class="col-lg-3">

          <div class="form-group">
          <label for="teacher" >Teacher Name</label>
           <select  class="form-control" required id="teacher" name="teacher">
           <option>Select teacher</option>
           <option >Thara</option>
           <option >Sreekumar</option>
           <option >Asha Ashok</option>
           <option >Ramya</option>
           <option >Krishna Prasad</option>
           <option >Prathibamole</option>
           <option >Dr.Bala</option>
           <option >Geetha</option>
           <option >Jyothisha</option>
           <option >Krishna veni</option>
           <option >Others</option>
           </select>
          </div>
          </div>
      </div>
      </div>

          <div class="ui mini buttons col-sm-offset-3 col-sm-3">
          <button type="submit" class="ui mini positive button" name="saved">Register</button>
          <div class="or"></div>
          <button type="reset" class="ui mini red button" name="back">Clear</button>
          </div>
      
  </form>
 </div><!--form-container-->
 </div> <!--container-->
   
<?php include "includes/footer.php"; ?>
