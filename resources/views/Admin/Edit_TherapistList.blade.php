   @include('/Admin/admin_header')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jillie Jen's Massage Spa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
	<style >
			@media screen and (min-width:1024px){
.container{
  width:80% !important;
  height:92.5vh;
  position: relative;
  top:0px;
  left: 305px;
  padding: 0px;
  margin: 0px;
  align-items: 	center	;
  display: 	flex;
  justify-content: 	center;
}	
.Therapist_pic img{
	width: 300px;
	height: 100px;
}
.Therapist_pic{
	display: flex;
	flex-direction: column;
	align-items: center;
	background-color: #fff;
	padding: 10px;
}
.topForm{
    background-color: dodgerblue;
    width: 100%;
    text-align: center;
    padding: 10px;
    font-size: 20px;
    color: #fff;
}
.prof_data{
	display: flex;
	flex-direction: row;
}
.personal_data{
	background-color: #fff;
	width: 75%;
	margin-left: 10px;
}
	</style>
	<div class="container">
<form method="POST" class="row  w-75 shadow bg-light"  action="{{ route('Edit_TherapistList', $EditList->id) }}"  enctype="multipart/form-data">
    <div class="topForm fw-bold">
Update Therapist Record
    </div>
    @csrf
    @method('PUT')
    <div class="prof_data">
    <div class="Therapist_pic">
    	<img src="/registration_pic/1711056842.jpg"  alt="profile" id="image_preview" style="width: 200px	; height: 200px;border-radius: 50%;">
<input type="file" accept="image/*" name="emp_profile" class=" mt-4 form-control" name="image" id="image">
</div>

    <div class="personal_data">

<div class="w-100 d-flex flex-row">
    <div class="col-md-6 p-2">
    <label for="emp_fname">First Name:</label>
    <input type="text" class="form-control" name="emp_fname" value="{{ $EditList->emp_fname }}" required>
</div>
<div class="col-md-6 p-2">
    <label for="emp_lname">Last Name:</label>
    <input type="text" class="form-control" name="emp_lname" value="{{ $EditList->emp_lname }}" required>
</div>
</div>

<div class="w-100 d-flex flex-row">
<div class="col-md-6 p-2">
    <label for="email_add">Email Address:</label>
    <input type="text" class="form-control" name="email_add" value="{{ $EditList->email_add }}" required>
</div>
<div class="col-md-6 p-2">
    <label for="fname">Permanent Address:</label>
    <input type="text" class="form-control" name="Permanent_address" value="{{ $EditList->Permanent_address }}" required>
</div>
</div>
<div class="w-100 d-flex flex-row">
<div class="col-md-6 p-2">
    <label for="contactNum">Contact Number:</label>
    <input type="text" class="form-control" name="contactNum" value="{{ $EditList->contactNum }} ">
</div>
<div class="col-md-6 p-2">
    <label for="fname">Skills:</label>
    <input type="text" class="form-control" name="skills" value="{{ $EditList->skills }} ">
</div>
</div>
<div class="w-100 d-flex flex-row">
<div class="col-md-6 p-2">
    <label for="Age">Age:</label>
    <input type="text" class="form-control" name="Age" value="{{ $EditList->Age }} ">
</div>
  <div class="col-md-6 p-2">
    <label for="Status">Status:</label>
    <select class="form-control" name="status"  required>
        <option value="Active">Active</option>
       <option value="Inactive">Inactive</option>
</select>
</div>
</div>
 <div class="col-12 p-2">
    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary w-100 fw-bold">Update Record</button>
</div>
</div>
</div>
</form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function() {
            readURL(this);
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#image_preview').attr('src', e.target.result);
                $('#image_preview').css('display', 'block');
                $('#image_data').css('display','none');
                $('.profile_review').css('border','none');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

	function nextStep(currentStep, nextStep) {
        document.getElementById(currentStep).style.display = 'none';
        document.getElementById(nextStep).style.display = 'block';
    }

    function prevStep(currentStep, prevStep) {
        document.getElementById(currentStep).style.display = 'none';
        document.getElementById(prevStep).style.display = 'block';
    }
</script>
</body>
</html>