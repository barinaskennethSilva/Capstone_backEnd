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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
	width:80%;
	height: 60vh;
}

.reg-Form form{
  width:80%;
  float:right;
  padding:20px;
  background-color:#fff;
   border-bottom-left-radius:30%;
  border-top-left-radius:30%;
}
}
</style>
<div class="container">


<div class='reg-Form'>
<form class="shadow">
<h1 class="text-center">Register Therapist Agent</h1>
<div class="step" id="step1">
<div class="d-flex mt-5 w-100 ms-2">

  <div class="mb-3 w-50">
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="fname" aria-describedby="alertsms">
    <div id="alertsms" class="form-text text-center text-danger fw-bold">Empty field</div>
</div>

 <div class="mb-3 ms-2 w-50">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lname" aria-describedby="alertsms">
      <div id="alertsms" class="form-text text-center text-danger fw-bold">Empty field</div>
  </div>

  </div>


<div class="d-flex mt-5 w-100 ms-2">

  <div class="mb-3 w-50">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control w-100" id="email" aria-describedby="alertsms">
       <div id="alertsms" class="form-text text-center text-danger fw-bold">Empty field</div>
  
</div>

 <div class="mb-3 ms-2 w-50">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lname" aria-describedby="alertsms">
      <div id="alertsms" class="form-text text-center text-danger fw-bold">Empty field</div>
  </div>

  </div>

<button type="button" class="btn btn-primary w-25 fw-bold" style="width: 20%;" onclick="nextStep('step1', 'step2')">Next</button>
  </div>

    <div class="step" id="step2" style="display:none;">

   <div class="d-flex mt-5 w-100 ms-2">
  <div class="mb-3 w-50">
    <label for="ContNum" class="form-label">Contact Number</label>
    <input type="tel" maxlength="11" class="form-control" id="ContNum" aria-describedby="alertsms">
     <div id="alertsms" class="form-text text-center text-danger fw-bold">Empty field</div>
  </div>

<div class="mb-3 w-50">
    <label for="ContNum" class="form-label">Password</label>
    <input type="tel" maxlength="11" class="form-control" id="ContNum" aria-describedby="alertsms">
     <div id="alertsms" class="form-text text-center text-danger fw-bold">Empty field</div>
  </div>


</div>


<div class="d-flex mt-5 w-100 ms-2">
 
<div class="mb-3 w-50 ms-4 ms-2">
    <label for="position" class="form-label">Position</label>
    <input type="text" class="form-control" id="position" aria-describedby="alertsms">
         <div id="alertsms" class="form-text text-center text-danger fw-bold">Empty field</div>
  </div>


<div class="mb-3 w-50 ms-4 text-start">
 <label for="gender" class="form-label">Gender</label>
<div class="d-flex">
  <div class=" form-check">
    <input type="checkbox" class="form-check-input" id="gender01">
    <label class="form-check-label" for="gender">Male</label>
  </div>
  <div class=" ms-3 form-check">
    <input type="checkbox" class="form-check-input" id="gender02">
    <label class="form-check-label" for="gender">Female</label>
  </div>
  </div>
</div>
</div> 

<button type="button" class="btn btn-primary w-25 fw-bold" style="width: 20%;" onclick="prevStep('step2', 'step1')">Back</button>
  <button type="submit" class="btn btn-primary w-25 fw-bold">Register</button>

</div> 

</form>
</div>


</div>
<script type="text/javascript">
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