<!DOCTYPE html>
<html>
<head>
	<title>Register student</title>
</head>
<body>
<h1> Welcome to Student's Registration Portal</h1>
<div>
<form class = "frm" name = 'register_user', action = 'user.php' method = "GET">
	<div>
<label>Student Name</label>
<input type="text" placeholder="First Name" name="firstname">
<label>Second Name</label>
<input type="text" placeholder="Second Name" name="secondname">

</div>
<div>
	<label>Year Of Intake</label>
<input type="text" placeholder="Year" name="intake">
	<label>Course</label>
<input type="text" placeholder="Course" name="course">

</div>

<div>
	<label>Student D.O.B</label>
<input type="text" placeholder="Student DOB" name="dob">

	
	<label> Contact</label>
<input type="text" placeholder="Contact" name="contact">
</div>
<div id = 'gender'>
<input type="radio" name="gender" value="male">
<label for = 'male'>Male</label><input type="radio" name="gender" value="female">
<label for = 'female'>Female</label>
</div>
<div>
	<label>Parent's Name</label>
<input type="text" placeholder="Parent's Name" name="parentname">


	<label>Parent Contact</label>
<input type="text" placeholder="Parent's Contact" name="parentcontact">
</div>
<div>

	<input type="submit"  value="Register">


	
</form>

</div>
</body>
</html>