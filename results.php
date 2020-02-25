<?php
	$Firstname = $_POST['First_name'];

	$Lastname = $_POST['Last_name'];

	$Middlename = $_POST['Middle_Name'];

	$Address = $_POST['Add_ress'];

	$DateofBirth = $_POST['birth_day'];

	$PlaceofBirth = $_POST['Place_birth'];

	$Guardian = $_POST['Guar_dian'];

	$Contact = $_POST['Con_tact'];

	$CivlStatus = $_POST['Civil_status'];

	$YearLevel = $_POST['Year_Level'];

	$Course = $_POST['Course_s'];

	$SchoolYear = $_POST['School_year'];

	$gender = $_POST['gender'];




		if(empty($Firstname)){

			$Firstname_error ='Please fill out this field';
		} elseif (strlen($Firstname) < 2) {
			
			$Firstname_error ='First Name should have atleast a minimum of 2 letters';

		}


		if(empty($Lastname)){

			$Lastname_error ='Please fill out this field';
		} elseif (strlen($Lastname) < 2) {
			
			$Lastname_error ='Last Name should have atleast a minimum of 2 letters';
			

		}


		if(empty($Middlename)){

			$Middlename_error ='Please fill out this field.';
		}



		if(empty($Address)){

			$Address_error ='Please fill out this field.';
		}



		if(empty($DateofBirth)){

			$DateofBirth_error ='Please fill out this field.';
		}



		if(empty($PlaceofBirth)){

			$PlaceofBirth_error ='Please fill out this field.';
		}

		

		if(empty($Guardian)){

			$Guardian_error ='Please fill out this field.';
		}


	if(empty($Contact)){

			$Contact_error ='Please fill out this field.';

		}



	if(empty($CivilStatus)){

			$CivlStatus_error ='Please fill out this field.';
		}


	if(empty($YearLevel)){

			$YearLevel_error ='Please fill out this field.';
		}


	if(empty($Course)){

			$Course_error ='Please fill out this field.';
		}


	if(empty($SchoolYear)){

			$SchoolYear_error ='Please fill out this field.';
		}
		

		if(empty($Firstname_error) && empty($Lastname_error))  {
			include('Success.php');
		} else{
			include('index.php');

		}
		include('index.php');


?>