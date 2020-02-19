!<DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<form action="action_page">
<div class="container">
  <h2>Student Form Validation</h2>
  <form action="/action_page.php" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="uname">FirstName:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Firstname" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

 <div class="form-group">
      <label for="uname">LastName:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Lastname" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


 <div class="form-group">
      <label for="uname">MiddleName:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Middlename" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

   

 <div class="form-group">
      <label for="uname">Address:</label>
      <input type="text" class="form-control" id="uname" placeholder="Address" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

      <label for="birthday">Date of Birth:</label>
      <input type="date" id="birthday" name="birthday">

 

 <div class="form-group">
      <label for="uname">Place of Birth:</label>
      <input type="text" class="form-control" id="uname" placeholder="Place of Birth" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

<div>
    <label for="pwd">Gender:</label>
<div><input type="radio" name="Gender" value="male" size="10">Male</div>
<div><input type="radio" name="Gender" value="Female" size="10">Female</div>
</div>


 
 

 <div class="form-group">
      <label for="uname">Guardian:</label>
      <input type="text" class="form-control" id="uname" placeholder="Guardian" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


 <div class="form-group">
      <label for="uname">Civil Status:</label>
      <input type="text" class="form-control" id="uname" placeholder="Civil Status" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


 <div class="form-group">
      <label for="uname">Contact No:</label><br></br>
  <input type="tel" id="phone" name="phone" placeholder="+639-4567-8901" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>



 <label for="pwd">Year Level:</label>
 <select name="City">
<option value="-1" selected>select..</option>
<option value="1styear">1styear</option>
<option value="2ndyear">2ndyear</option>
<option value="3rdyear">3rdyear</option>
<option value="4thyear">4thyear</option>
</select>

<label for="pwd">Course:</label>
<select name="Course">
<option value="-1" selected>select..</option>
<option value="BSIT">BSIT</option>
<option value="TCM">TCM</option>
<option value="DS">DS</option>
<option value="COMe">COMe</option>
</select>


 <div class="form-group">
      <label for="uname">School Year:</label>
      <input type="text" class="form-control" id="uname" placeholder="School Year" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>



    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree to share my information.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</form>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
