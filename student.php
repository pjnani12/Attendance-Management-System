
  <?php
  $pagetitle="student data";
  // include "includes/header2.php";
  include "includes/header.php"; ?>
  <?php $db = new db(); ?>
  
<div class="container">
<?php
          if (isset($_GET[`std roll no`])) {
            $id = $_GET[`std roll no`];

            if($db->delete_std($conn,'student_table',$id)){
              echo "Record was Deleted";
            }
          }
?>
            
              <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Students Records</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
                <p><a href="student_entry.php" class="ui blue tiny button "><i class="glyphicon glyphicon-plus"> </i>Insert</a></p>
                <div class="table-responsive">
                 <table class="ui celled table table table-hover">
                  <thead>
                    <tr>
                     <!--  <th>Std Id</th> -->
                      <th>Student Name</th>
                      <th>DOB</th>
                      <th>Gender</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Session</th>
                      <th>Program</th>
                      <th>Semester</th>
                      <th>Action</th>
                    </tr>
                  </thead>
     <tbody>

          <?php    

            $veiw = $db->get_all_std($conn,'student_table',10);
            foreach ($veiw as $post) {
            $std_id = $post['std_roll_no'];
  
          echo '<tr>';

            // echo '<td>'. $post['student_id'] . '</td>';          
            echo '<td>'. $post['student_name'] . '</td>';
            echo '<td>'. $post['dob'] . '</td>';
            echo '<td>'. $post['gender'] . '</td>';
            echo '<td>'. $post['email'] . '</td>';
            echo '<td>'. $post['phone'] . '</td>';
            echo '<td>'. $post['address'] . '</td>';
            echo '<td>'. $post['Session'] . '</td>';
            echo '<td>'. $post['Program'] . '</td>';
            echo '<td>'. $post['Semester'] . '</td>';
            
            echo '<td width=250>';
            echo "<div class='ui mini buttons'>";
            echo '<a class="ui mini positive button" href="student_update.php?std_roll_no='.$post['std_roll_no'].'"> <i class="glyphicon glyphicon-pencil"></i>Update</a>';
            echo "<div class='or'></div>";    
            echo '<a class="ui mini red button" href="student.php?std_roll_no='.$post['std_roll_no'].'"><i class="glyphicon glyphicon-remove"> </i>Delete</a>';
            echo "</div>";
            echo '</td>';    
           echo '</tr>';  
            }
           ?>
      </tbody>     
            </table>
            </div><!--table-responsive-->   
           </div><!--container-->
<?php include "includes/footer.php"; ?>