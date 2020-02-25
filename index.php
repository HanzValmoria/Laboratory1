<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="='X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Php Form Validation</title>

</head>
<body>
	<div class="container">
		<div class="card">
			<div class=""> 
		</div>
		<form action="results.php" method="POST">
<h1>Student Form</h1>
		<form action="">
			<input placeholder="Firstname" type="text"  name="First_name">
				<?php if(isset($Firstname_error)) {?>
					<p><?php echo $Firstname_error ?> </p>
				 <?php } ?>

			<input placeholder="Lastname" type="text"    name="Last_name"> 
					<?php if(isset($Lastname_error)) {?>
				<p><?php echo $Lastname_error ?> </p>
		 <?php } ?>


			<input placeholder="Middlename" type="text"   name="Middle_Name">
			
				<?php if(isset($Middlename_error)) {?>
				<p><?php echo $Middlename_error ?> </p>
		 <?php } ?>

			<input placeholder="Address" type="text"      name="Add_ress">

			<?php if(isset($Address_error)) {?>
				<p><?php echo $Address_error ?> </p>
		 <?php } ?>

			<input placeholder="DateofBirth" type="date" id="birthday" name="birth_day">
			<?php if(isset($DateofBirth_error)) {?>
				<p><?php echo $DateofBirth_error ?> </p>
		 <?php } ?>

			<input placeholder="PlaceofBirth" type="text"   name="Place_birth">

			<?php if(isset($PlaceofBirth_error)) {?>
				<p><?php echo $PlaceofBirth_error ?> </p>
		 <?php } ?>


		 			<h3> Gender </h3>

 <p>		 <input type="radio" name="gender" value="male" >
 				<h5>Male</h5></p>



<p>		  <input type="radio" name="gender" value="female"> <h5>Female</h5> </p>



			<p><input placeholder="Guardian" type="text"      name="Guar_dian"></p>								
			<?php if(isset($Guardian_error)) {?>
				<p><?php echo $Guardian_error ?> </p>
		 <?php } ?>


			<p><input placeholder="+639971650187" type="text"      name="Con_tact"></p>
		
			<?php if(isset($Contact_error)) {?>
				<p><?php echo $Contact_error ?> </p>
		 <?php } ?>


			<p><input placeholder="Civil Status" type="text"      name="Civil_status"></p>

			<?php if(isset($CivilStatus_error)) {?>
				<p><?php echo$CivilStatus_error ?> </p>
		 <?php } ?>

		 
			  <h4>YearLevel</h4>

			  	<?php if(isset($YearLevel_error)) {?>
				<p><?php echo $YearLeve_error ?> </p>
		 <?php } ?>


 				<select name="Year_Level" >
						<option value="-1" selected>select</option>
						<option value="1styear">1styear</option>
						<option value="2ndyear">2ndyear</option>
						<option value="3rdyear">3rdyear</option>
						<option value="4thyear">4thyear</option>
					</select></p>

				<h4>Course</h4>
				<?php if(isset($Course_error)) {?>
				<p><?php echo $Course_error ?> </p>
		 <?php } ?>
					<select name="Course_s" >
						<option value="-1" selected>select</option>
						<option value="BSIT">BSIT</option>
						<option value="TCM">TCM</option>
						<option value="DS">DS</option>
						<option value="COMe">COMe</option>
					</select>
			<p><input placeholder="SchoolYear" type="text"      name="School_year"></p>
			<?php if(isset($SchoolYear_error)) {?>
				<p><?php echo $SchoolYear_error ?> </p>
		 <?php } ?>
				<input class="register_button" type="submit" value="Register" >
 				     
</form>


	</div>

</body>
</html>