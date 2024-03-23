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
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
	<style type="text/css">
		@media screen and (min-width:1024px){
.container{
  width:80% !important;
  height:92.9vh;
  position: relative;
  top:0px;
  left: 305px;
  padding: 0px;
  margin: 0px;
  display: flex;
  justify-content: center;
  align-items: center;
  }
  .reg-Form{
	background-color:dodgerblue;
	width:95%;
	height: 60vh;
}

.reg-Form form{
  width:70%;
  height: 100%;
  float:right;
  padding:20px;
  background-color:#fff;
   border-bottom-left-radius:30%;
  border-top-left-radius:30%;
}
.profile_data{
  position:  absolute ;
  width:  25%;
  left:   40px ;
text-align: center;
}
.profile_review {
  width: 100% !important;
  height:  25vh;
  border: 2px dashed  ;
  border-radius: 5px;
}
.profile_review i{
  font-size: 65px;
}

}
</style>
<div class="container">


<div class='reg-Form'>
  <form method="POST" class="shadow" action="{{ route('Register_therapistUpload') }}" enctype="multipart/form-data">
    @csrf
  <div class=" profile_data">
  <div class="mb-3 profile_review">
    <div id="image_data">
  <div class="d-flex flex-column">
    <i class="bi bi-person-add"></i>
    <label style="font-size:20px;font-weight: 600;font-style: italic;">Upload Profile</label>
  </div>
  </div>
    <img id="image_preview" src="#" alt="Preview" style="display: none;width: 100%; max-height: 100%;border-radius: 5px;">
            </div>
  <div class="mb-3 w-100">
    <input type="file" accept="image/*" class="form-control" name="image" id="image" aria-describedby="alertsms">
         <div id="alertsms" class="form-text text-center text-danger fw-bold"></div>
  </div>
  </div>

<input type="hidden" name="status" value="active">
<h1 class="text-center">Register Therapist Agent</h1>
<div class="step" id="step1">
<div class="d-flex mt-5 w-100 ms-2">

  <div class="mb-3 w-50">
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="fname" name="emp_fname" aria-describedby="alertsms">
    <div id="alertsms" class="form-text text-center text-danger fw-bold"></div>
</div>

 <div class="mb-3 ms-2 w-50">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="emp_lname" name="emp_lname" aria-describedby="alertsms">
      <div id="alertsms" class="form-text text-center text-danger fw-bold"></div>
  </div>

  </div>


<div class="d-flex mt-5 w-100 ms-2">

  <div class="mb-3 w-50">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control w-100" id="email" name="email_add" aria-describedby="alertsms">
       <div id="alertsms" class="form-text text-center text-danger fw-bold">@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif</div>
  
</div>

 <div class="mb-3 ms-2 w-50">
    <label for="contactNum" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="contactNum" name="contactNum" aria-describedby="alertsms">
      <div id="alertsms" class="form-text text-center text-danger fw-bold"></div>
  </div>

  </div>

<button type="button" class="btn btn-primary ms-4 w-25 fw-bold" style="width: 20%;" onclick="nextStep('step1', 'step2')">Next</button>
  </div>

    <div class="step" id="step2" style="display:none;">

   <div class="d-flex mt-5 w-100 ms-2">
  <div class="mb-3 w-50">
    <label for="Position" class="form-label">Skills</label>
    <input type="text" value="Therapist" name="skills" class="form-control" aria-describedby="alertsms">

  </div>

<div class="mb-3 w-50 ms-2">
    <label for="Age" class="form-label">Age</label>
    <input type="text" maxlength="11" class="form-control" id="Age" name="Age" aria-describedby="alertsms">
     <div id="alertsms" class="form-text text-center text-danger fw-bold"></div>
  </div>


</div>


<div class="d-flex mt-5 w-100 ms-2">
 
<div class="mb-3 w-50 ms-4 ms-2">
    <label for="Permanent_address" class="form-label">Permanent Address</label>
    <input type="text" class="form-control" name="Permanent_address" id="Permanent_address" aria-describedby="alertsms">
         <div id="alertsms" class="form-text text-center text-danger fw-bold"></div>
  </div>


<div class="mb-3 w-50 ms-4 text-start">
 <label for="gender" class="form-label">Gender</label>
<div class="d-flex">
  <div class=" form-check">
    <input type="checkbox" class="form-check-input" name="gender" value="Male" id="gender01">
    <label class="form-check-label" for="gender">Male</label>
  </div>
  <div class=" ms-3 form-check">
    <input type="checkbox" class="form-check-input" name="gender" value="Female" id="gender02">
    <label class="form-check-label" for="gender">Female</label>
  </div>
  </div>
</div>
</div> 

<button type="button" class="btn btn-primary ms-4 w-25 fw-bold" style="width: 20%;" onclick="prevStep('step2', 'step1')">Back</button>
  <button type="submit" class="btn btn-primary w-25 fw-bold">Register</button>

</div> 

</form>
</div>


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