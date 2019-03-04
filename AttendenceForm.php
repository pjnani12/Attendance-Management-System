<?php  $pagetitle="AttendenceForm";
  include "includes/header.php"; ?>
 <div class="container">
              <div class="row">
                 <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Attendance Form</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                  </div>
                </div>






<?php  
error_reporting(E_ALL ^ E_DEPRECATED);
include("config.php");?>
<div class="form-container">
    <form method="post" action="saveattendence.php" role="form">
     <!-- <div class="container"> -->
     <div class="col-lg-3">
      <div class="form-group">
<?php
      $qs=mysql_query("select * from student_table");
      ?>
      <?php	
      echo "<select class='form-control' name='stid' >";			
      while($stid=mysql_fetch_row($qs))
      {				
       echo"
        <option value=$stid[0]>$stid[1] </option>";
       }
      echo "</select>"."<br>";
      ?>
      </div>
      </div> <!--col-lg-4-->
       <div class="col-lg-3">
      <?php
      $qs1=mysql_query("select * from subject_table");	
      echo "<select class='form-control' name='subjid'>";			
      while($subjid=mysql_fetch_row($qs1))
      {				
       echo"
       <option value=$subjid[0]>$subjid[1] </option>";
       }
      echo "</select>";?>
      </div> <!--col-lg-4-->
      <input type="radio" name="present" value="P" />Present
      <input type="radio" name="present" value="A" />Absent
      <button type="submit" name="save" value="Save" class="btn btn-success btn-sm">Save</button>





   
 </form>
 </div> <!--form-container-->
</div><!--container-->


<?php include "includes/footer.php"; ?>