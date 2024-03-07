@include('header')
   <!-- Required meta tags -->
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
</head>
<body>


<style>

.container{
  width:80%;
  height:92.5vh !important;
  position:relative;
  left:152px;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
}
.backform{
  width:100%;
  height:100%;
  position:absolute;
  top:0px;
  left:0px;

}
.form-sett{
  display:flex;
  flex-direction:row;
  height:58vh;
  background-color:#cbcbcbff;
  width:95%;
  margin-left:30px;
  border-radius:8px;
  z-index:50;
}
.form-disp1{
  background-color:#fff;
  padding:10px;
  width:35%;
  text-align:center;
  border-top-left-radius:8px;
  border-bottom-left-radius:8px;
}
.form-disp1 .icon-detail{
  font-size:45px;
  margin:20px;
}
.pagnation-btn{
  display:flex;
  flex:1;

  justify-content:center;
}
.pagnation-btn div{
  border-radius:50%;
  height:20px;
  width:20px;
  border:1px solid #cdcdcdff;
  margin-left:10px;
}
.first-step{
  background-color:dodgerblue;
}
.form-disp2{
  width:100%;

}

.header-info{
  margin-bottom:10px;
  height:50px;
   background-color:#fff;
    padding:10px;
        border-top-right-radius:8px;

}
.header-info h1{
  font-size:25px;
  color:dodgerblue;
   text-align:center;
   
}
.step1{
  background-color:#fff;
  padding:10px;
  position:relative;
  height:378px;
    border-bottom-right-radius:8px;

}
.reservationForm{
  width: 65%;
}


.custo-details{
  margin-top:10px;
   background-color:#fff;
   height:382px;
   position:relative;
  bottom:7px;
   border-bottom-right-radius:8px;
}
.sum-label{
  font-size:20px;
  font-weight:700;
}
.btn-next{
  position: relative;
  right:390px;
  bottom: 70px;
}

.agent1{
  display:flex;
  flex-direction:column;
  width:200px;
  height:150px;
  border:1px solid lightgrey;
  margin-right:10px;
}
.agent1 i{
font-size:45px;
}
.agent1 label{
  font-weight:700;
}
.formDate{
  background-color:#fff;
  border-bottom-left-radius: 8px;
  width:100%;
  padding:10px;
  height:375px;
}
.packages-card{
	padding: 10px;
	width:50%;
	height: 150px;
	margin-bottom: 10px;
	background-color: violet;
	text-align: center;
}
</style>
<div class="container bg-light">
  <!-- resources/views/register.blade.php -->
<div class="form-sett">
<div class='form-disp1'>
	<div class="header-info">
  <h1>Massage Appointment</h1>

    	</div>
<i class="bi bi-person-vcard icon-detail"></i>
<h2>Enter Information</h2>
<p>Please provide you contact  details saw we can send you a confirmation and other contact info</p>

</div>



<form id="reservationForm" class="ms-2 reservationForm"  method="post" action="/register">
    @csrf

    <!-- Step 1 -->
    <div class="step" id="step1">
    	<div class="header-info">
    		    	<h1>Single Package</h1>

    	</div>
    	<div class="step1">
    		<div style="overflow-y: auto;width:100%;height:100%;overflow-x: hidden;">
        <input type="hidden" name="packages" id="packages" value="Single Package">
<div class="d-flex w-100 ">
      <div class="packages-card">
      	<input type="radio"><label>Full Body Massage</label>
  </div>
 
  <div class="packages-card ms-2">
      	<input type="radio"><label>Foot Spa</label>
  </div>
   </div>

   <div class="d-flex w-100 ">
  <div class="packages-card">
      	<input type="radio"><label>Foot Reflex</label>
  </div>
   <div class="packages-card ms-2">
      	<input type="radio"><label>30mins Footreflex</label>
  </div>
      
    </div>

<div class="d-flex w-100 ">
  <div class="packages-card">
      	<input type="radio"><label>Earcandle</label>
  </div>
   <div class="packages-card ms-2">
      	<input type="radio"><label>Hotel & Home Services</label>
  </div>
      </div>
    </div>


      <button type="button" class="btn-next bg-primary btn btn-primary w-50" onclick="nextStep('step1', 'step2')">Next</button>
     </div>

</div>
    <!-- Step 2 -->
    <div class="step" id="step2" style="display:none;">
    	<div class="header-info">
    		    	<h1>Double Package</h1>

    	</div>
    	<div class="step1">
        <input type="hidden" name="packages" id="packages" value="Single Package">
<div class="d-flex w-100 ">
      <div class="packages-card">
      	<input type="radio"><label>Full Body Massage</label>
  </div>
 
  <div class="packages-card ms-2">
      	<input type="radio"><label>Foot Spa</label>
  </div>
   </div>
   <div class="d-flex w-100 ">
  <div class="packages-card">
      	<input type="radio"><label>Foot Reflex</label>
  </div>
   <div class="packages-card ms-2">
      	<input type="radio"><label>30mins Footreflex</label>
  </div>
      
    </div>
    <div class="btn-next d-flex">
       <button class=" bg-primary btn btn-primary w-25" type="button" onclick="prevStep('step2', 'step1')">Previous</button>
        <button  class=" bg-primary btn btn-primary w-25 ms-2" type="button" onclick="nextStep('step2', 'step3')">Next</button>
     </div>
       
    </div>


<div class="step" id="step1">
    	<div class="header-info">
    		    	<h1>Single Package</h1>

    	</div>
    	<div class="step1">
    		<div style="overflow-y: auto;width:100%;height:100%;overflow-x: hidden;">
        <input type="hidden" name="packages" id="packages" value="Single Package">
<div class="d-flex w-100 ">
      <div class="packages-card">
      	<input type="radio"><label>Full Body Massage</label>
  </div>
 
  <div class="packages-card ms-2">
      	<input type="radio"><label>Foot Spa</label>
  </div>
   </div>

   <div class="d-flex w-100 ">
  <div class="packages-card">
      	<input type="radio"><label>Foot Reflex</label>
  </div>
   <div class="packages-card ms-2">
      	<input type="radio"><label>30mins Footreflex</label>
  </div>
      
    </div>

<div class="d-flex w-100 ">
  <div class="packages-card">
      	<input type="radio"><label>Earcandle</label>
  </div>
   <div class="packages-card ms-2">
      	<input type="radio"><label>Hotel & Home Services</label>
  </div>
      </div>
    </div>


      <button type="button" class="btn-next bg-primary btn btn-primary w-50" onclick="nextStep('step1', 'step2')">Next</button>
     </div>

</div>
    <!-- Step 2 -->
    <div class="step" id="step3" style="display:none;">
    	<div class="header-info">
    		    	<h1>Combo Package</h1>

    	</div>
    	<div class="step1">
        <input type="hidden" name="packages" id="packages" value="Single Package">
<div class="d-flex w-100 ">
      <div class="packages-card">
      	<input type="radio"><label>Full Body Massage</label>
  </div>
 
  <div class="packages-card ms-2">
      	<input type="radio"><label>Foot Spa</label>
  </div>
   </div>
   <div class="d-flex w-100 ">
  <div class="packages-card">
      	<input type="radio"><label>Foot Reflex</label>
  </div>
   <div class="packages-card ms-2">
      	<input type="radio"><label>30mins Footreflex</label>
  </div>
      
    </div>
    <div class="btn-next d-flex">
       <button class=" bg-primary btn btn-primary w-25" type="button" onclick="prevStep('step2', 'step1')">Previous</button>
        <button  class=" bg-primary btn btn-primary w-25 ms-2" type="button" onclick="nextStep('step2', 'step3')">Next</button>
     </div>
       
    </div>




    <!-- Step 3 -->
    <div class="step" id="step4" style="display:none;">
    	        <input type="text" name="address" placeholder="Address">

    	        <input type="email" name="email" placeholder="Email">

        <!-- Add fields for step 3 -->
        <button type="button" onclick="prevStep('step3', 'step2')">Previous</button>
        <button type="submit">Submit</button>
    </div>
</form>
 </div>
<script>
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
