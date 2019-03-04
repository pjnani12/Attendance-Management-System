   <?php 
      $conn = "";
      try {

        $conn = new PDO('mysql:host=localhost;dbname=attendance_db;','root','');

      } catch (Exception $e) {

        echo 'ERROR'.$e->getMessage();
      }



     Class db{

/**********************/
//Students Entry
/*********************/
 function std_entry($conn,$studentName,$dob,$gender,$email,$phone,$add,$session,$program,$semester){
	try{
		
		$query = "INSERT INTO student_table SET student_name = ?, dob = ?, gender = ?,email = ?,phone = ?, address = ?, Session=?,Program=?,Semester=?";

		$entry = $conn->prepare($query);
		$entry->bindValue(1, $studentName);
		$entry->bindValue(2, $dob);
		$entry->bindValue(3, $gender);
		$entry->bindValue(4, $email);
		$entry->bindValue(5, $phone);
		$entry->bindValue(6, $add);
		$entry->bindValue(7, $session);
		$entry->bindValue(8, $semester);
		$entry->bindValue(9, $program);
		
		if($entry->execute())
		{
			return "Successfully registered.";
			die();
		}
		else{
			return "Unable to register! Try again please.";
		}
	}

		catch(PDOException $e){
			return "Error: " . $e->getMessage();
		}
	}


		/**********************/
		//Gettintg all records
		/*********************/

function get_all_std($conn,$table,$limit){

			try {
				$query = "SELECT * FROM {$table} ORDER BY  std_roll_no LIMIT {$limit}";
					$stmt = $conn->prepare( $query );
					$stmt->execute();
					return $stmt->fetchAll();

			} catch (Exception $e) {
				return "ERROR". $e->getMessage();
			}

	      }


	      /*********************************/
		//Getting single record for editing
		/***********************************/

function get_single_std($conn,$table,$id)
	{
		
		try {

			$query = "SELECT * FROM {$table} WHERE `std roll no` ={$id}";
			$stmt = $conn->prepare($query);
			// $stmt->bindParam(1, $id);
			$stmt->execute();
			return $stmt->fetchAll();

			
		} catch (Exception $e) {
			return "Error : ". $e->getMessage();	
		}
	}

		/**********************/
		//delete single record
		/*********************/

function delete_std($conn,$table,$id){

			try {
				$query = "DELETE  FROM {$table} WHERE std_roll_no={$id}";
					$stmt = $conn->prepare( $query );
					$stmt->execute();
					
					
			} catch (Exception $e) {
				return "ERROR". $e->getMessage();
			}

	}

	 	/*****************************/
		//Update singel Student Record
		/****************************/

	function update_std($conn,$studentName,$dob,$gender,$email,$phone,$add,$rollno, $session, $program, $semester){
	try{
		
		$query = "UPDATE  student_table SET student_name = ?, dob = ?, gender = ?, email = ?, phone = ?, address = ? , Session = ?, Program = ?, Semester = ? WHERE std_roll_no = ?";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(1, $studentName);
		$stmt->bindParam(2, $dob);
		$stmt->bindParam(3, $gender);
		$stmt->bindParam(4, $email);
		$stmt->bindParam(5, $phone);
		$stmt->bindParam(6, $add);
		$stmt->bindParam(7, $session);
		$stmt->bindParam(8, $program);
		$stmt->bindParam(9, $semester);
		$stmt->bindParam(10, $rollno);
		if($stmt->execute()){
			return "Record was Updated.";
			die();
		}else{
			 return "Unable to Update Record";
			
		}
	}

		catch(PDOException $exception){
			return "Error: " . $exception->getMessage();
		}
	}

	/**************************/
	//Teachers Registration
	/*************************/
 function teacher_entry($conn,$firstName,$lastName,$dob,$gender,$email,$phone,$degree,$salary,$address){
	try{
		
		$query = "INSERT INTO teacher_table SET first_name = ?, last_name = ?, dob = ?, gender = ?,email = ?,phone = ?,degree = ?,salary = ? , address = ?";

		$entry = $conn->prepare($query);
		$entry->bindValue(1, $firstName);
		$entry->bindValue(2, $lastName);
		$entry->bindValue(3, $dob);
		$entry->bindValue(4, $gender);
		$entry->bindValue(5, $email);
		$entry->bindValue(6, $phone);
		$entry->bindValue(7, $degree);
		$entry->bindValue(8, $salary);
		$entry->bindValue(9, $address);
		
		if($entry->execute())
		{
			return "Successfully registered.";
			die();
		}
		else{
			return "Unable to register! Try again please.";
		}
	}

		catch(PDOException $e){
			return "Error: " . $e->getMessage();
		}
	}

        /*****************************/
		//Fetching Teachers Records
		/****************************/ 


	function get_all_teacher($conn,$table,$limit){
	       try {
				$query = "SELECT * FROM {$table} ORDER BY  teacher_id LIMIT {$limit}";
					$stmt = $conn->prepare($query);
					$stmt->execute();
					return $stmt->fetchAll();

			} catch (Exception $e) {
				return "ERROR". $e->getMessage();
			}

	      }



       /***************************************************/
		  //Fetching teacher's single record for Editing
	   /*************************************************/ 

	 	function get_single_teacher($conn,$table,$id){
	        try {
				$query = "SELECT * FROM {$table} ";
					$stmt = $conn->prepare( $query );
					$stmt->execute();
					echo "<br>" .PHP_EOL;
					return $stmt->fetchAll();
					 

			} catch (Exception $e) {
				return "ERROR". $e->getMessage();
			}

	      }     

    /******************************/
	//Deleting Teacher's Record
	/*****************************/

    function delete_teacher_record($conn,$table,$t_id){
    	try{
    		$query="DELETE FROM $table WHERE teacher_id=$t_id";
    		$stmt=$conn->prepare($query);
    		$stmt->execute();

    	}
    	catch(PDOException $e){
    		return "ERROR : ". $e->getMessage();

    	}
    } 

 /******************************/
	//Updating Teacher's Record
	/*****************************/

	function update_teacher_record($conn,$firstName,$lastName,$dob,$gender,$email,$phone,$degree,$salary,$address,$id){
	try{
		
		$query = "UPDATE  teacher_table SET first_name = ?, last_name = ?, dob = ?, gender = ?, email = ?, phone = ?, degree = ?, salary = ?, address = ? WHERE teacher_id = ?";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(1, $firstName);
		$stmt->bindParam(2, $lastName);
		$stmt->bindParam(3, $dob);
		$stmt->bindParam(4, $gender);
		$stmt->bindParam(5, $email);
		$stmt->bindParam(6, $phone);
		$stmt->bindParam(7, $degree);
		$stmt->bindParam(8, $salary);
		$stmt->bindParam(9, $address);
		$stmt->bindParam(10, $id);
		if($stmt->execute()){
			return "Record was Updated.";
			die();
		}else{
			 return "Unable to Update Record";
			
		}
	}
		catch(PDOException $exception){
			return "Error: " . $exception->getMessage();
		}
	}

	 /*****************************/
	// Subject Entry
	/****************************/ 

	function subject_entry($conn,$subName,$teacher,$field,$semester){
	try{
		
		$query = "INSERT INTO subject_table SET subject_name=?, teacher_name = ?, field = ? , semester =?";

		$entry = $conn->prepare($query);
		$entry->bindValue(1, $subName);
		$entry->bindValue(2, $teacher);
		$entry->bindValue(3, $field);
		$entry->bindValue(4, $semester);	
		if($entry->execute())
		{
			return "Successfully saved.";
			die();
		}
		else{
			return "Unable to save ! please try again.";
		}
	}

		catch(PDOException $e){
			return "Error: " . $e->getMessage();
		}
	}


		/**********************/
		//Gettintg all subject
		/*********************/

function get_all_subject($conn,$table,$limit){

			try {
				$query = "SELECT * FROM {$table} ORDER BY  subject_no LIMIT {$limit}";
					$stmt = $conn->prepare( $query );
					$stmt->execute();
					return $stmt->fetchAll();

			} catch (Exception $e) {
				return "ERROR". $e->getMessage();
			}

	      }

	    /**********************/
		//Gettintg all semester
		/*********************/

function get_all_term($conn,$table,$limit){

			try {
				$query = "SELECT * FROM {$table} ORDER BY  semester_no LIMIT {$limit}";
					$stmt = $conn->prepare( $query );
					$stmt->execute();
					return $stmt->fetchAll();

			} catch (Exception $e) {
				return "ERROR". $e->getMessage();
			}

	      }
 
 	 /*****************************/
	// semester Entry
	/****************************/ 

	function term_entry($conn,$semesterNo,$subject){
	try{
		
		$query = "INSERT INTO semester_table SET semester_no=?, subject = ?";

		$entry = $conn->prepare($query);
		$entry->bindValue(1, $semesterNo);
		$entry->bindValue(2, $subject);	
		if($entry->execute())
		{
			return "Successfully saved.";
			die();
		}
		else{
			return "Unable to save ! please try again.";
		}
	}

		catch(PDOException $e){
			return "Error: " . $e->getMessage();
		}
	}

	    //###################
		// Get Single User ##
		//###################

	function get_single_user($conn,$table,$id)
	{
		
		try {

			$query = "SELECT * FROM {$table} WHERE id ={$id} ";
			$stmt = $conn->prepare($query);
			// $stmt->bindParam(1, $user_id);
			$stmt->execute();
			return $stmt->fetchAll();

			
		} catch (Exception $e) {
			return "Error : ". $e->getMessage();	
		}
	}
//####################
//Get User ##
//####################
 function get_user($conn,$table){
				
		try {

				$query = "SELECT * FROM {$table}";
					$stmt = $conn->prepare( $query );
					$stmt->execute();
					return $stmt->fetchAll();

			} catch (Exception $e) {
				return "ERROR". $e->getMessage();
			}



		catch(PDOException $exception){
			return "Error: " . $exception->getMessage();
		}
	}

	
 	}


      






