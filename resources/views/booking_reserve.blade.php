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
  position: fixed;
  left:410px;
  bottom: 160px;
  z-index: 100;
  width: 20%;
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
  text-align: center;
}
.package_check{
   position: relative;
   top: 90px;
   right: 120px;
}
.therapist-agent{
  width:200px;
  height: 200px;
  border-radius: 5px;
  margin-left: 10px;
}
.therapist-agent img{
   border-top-left-radius: 5px;
      border-top-right-radius: 5px;
  width:100%;
}
.agent-data{
  text-align: center;
  font-style: italic;
  background-color: dodgerblue;
  border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
  color: #fff;
  width: 100%;
  height: 90px;
  padding: 10px;
}
.custData{
 border-right:2px solid #cdcdcdff;
  width:50%;
  height: 100%;
  float: left;
}
.custLabel{
  font-weight: 700;
  font-size: 18px;
  font-style: italic;
  margin-left: 10px;
}
.inputData{
 width:180px;
}
.modal {
    display: none;
    position: absolute;
    z-index: 1;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    z-index: 60;
  }

  .modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    border: 1px solid #888;
    width: 50%;
        text-align: center;
     font-weight: 600;
     font-style: italic;
  }
.topModal{
  width: 100%;
  background-color: dodgerblue;
  padding: 10px;
  margin-bottom: 30px;
}

  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
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



<div id="reservationForm" class="ms-2 reservationForm" >

    <!-- Step 1 -->
    <div class="step" id="step1">
      <div class="header-info">
              <h1>Single Package</h1>

      </div>
      <div class="step1">
        <div style="overflow-y: auto;width:100%;height:100%;overflow-x: hidden;">
        <input type="hidden" name="packages" id="packages" value="Single Package">
<div class="d-flex w-100 ">
      <div class="packages-card" style="background-image: url(./img/serve_pic1.png);background-size: 100% 100%;">
       <input type="radio" value="Full Body Massage" class="form-check-input package_check" name="massage_type">



  </div>
 
  <div class="packages-card ms-2" style="background-image: url(./img/serve_pic2.png);background-size: 100% 100%;">
        <input type="radio" class="form-check-input package_check"  value="Foot Spa" name="massage_type">
  </div>
   </div>

   <div class="d-flex w-100 ">
  <div class="packages-card" style="background-image: url(./img/serve_pic3.png);background-size: 100% 100%;">
    <input type="radio" class="form-check-input package_check" name="massage_type" value="  Foot Reflex" >
  </div>
   <div class="packages-card ms-2" style="background-image: url(./img/serve_pic4.png);background-size: 100% 100%;">
        <input type="radio" name="massage_type" class="form-check-input package_check" value="  30mins Foot Reflex">
  </div>
      
    </div>

<div class="d-flex w-100 ">
  <div class="packages-card" style="background-image: url(./img/serve_pic5.png);background-size: 100% 100%;">
        <input type="radio" value="Earcandle" name="massage_type" class="form-check-input package_check">
  </div>
   <div class="packages-card ms-2" style="background-image: url(./img/serve_pic6.png);background-size: 100% 100%;">
        <input type="radio" name="massage_type" name="massage_type" value="Hotel & Home Services" class="form-check-input package_check">
  </div>
      </div>
      <div class="d-flex w-100 ">
  <div class="packages-card" style="background-image: url(./img/serve_pic7.png);background-size: 100% 100%;">
        <input type="radio" value="Milk BodyScrub" name="massage_type" class="form-check-input package_check">
  </div>
    </div>
</div>

      <button type="button" class="btn-next bg-primary btn btn-primary" style="width: 20%;" onclick="nextStep('step1', 'step2')">Next</button>
     </div>

</div>
    <!-- Step 2 -->
    <div class="step" id="step2" style="display:none;">
      <div class="header-info">
              <h1>Double Package</h1>

      </div>
      <div class="step1">
                <div style="overflow-y: auto;width:100%;height:100%;overflow-x: hidden;">

<div class="d-flex w-100 ">
      <div class="packages-card" style="background-image: url(./img/serve_pic8.png);background-size: 100% 100%;">
        <input type="radio" value="Ventosa" name="massage_type" class="form-check-input package_check">
  </div>
 
  <div class="packages-card ms-2"  style="background-image: url(./img/serve_pic9.png);background-size: 100% 100%;">
        <input type="radio" class="form-check-input package_check" name="massage_type" value=" Hotstone">
  </div>
   </div>
   <div class="d-flex w-100 ">
  <div class="packages-card"  style="background-image: url(./img/serve_pic10.png);background-size: 100% 100%;">
        <input type="radio" class="form-check-input package_check" name="massage_type" value=" BodyScrub">
  </div>
   <div class="packages-card ms-2" style="background-image: url(./img/serve_pic11.png);background-size: 100% 100%;">
        <input type="radio" class="form-check-input package_check" name="massage_type" value="Earcandle">
  </div>
    </div>  
    <div class="d-flex w-100 ">
      <div class="packages-card"  style="background-image: url(./img/serve_pic12.png);background-size: 100% 100%;">
        <input type="radio" value="Footreflex" name="massage_type" class="form-check-input package_check">
  </div>
   <div class="packages-card ms-2"  style="background-image: url(./img/serve_pic13.png);background-size: 100% 100%;">
        <input type="radio" value="FootSpa" name="massage_type" class="form-check-input package_check">
  </div>
    </div>

    <div class="btn-next d-flex">
       <button class=" bg-primary btn btn-primary" style="width: 50%;" type="button" onclick="prevStep('step2', 'step1')">Previous</button>
        <button  class=" bg-primary btn btn-primary  ms-2" type="button" style="width: 50%;" onclick="nextStep('step2', 'step3')">Next</button>
     </div>
      </div> 
    </div>
</div>

<!--- step 3----->

<div class="step" id="step3" style="display:none;">
      <div class="header-info">
              <h1>Combo Package</h1>

      </div>
      <div class="step1">
        <div style="overflow-y: auto !important;width:100%;height:100%;overflow-x: hidden;">
<div class="d-flex w-100 ">
      <div class="packages-card"style="background-image: url(./img/serve_pic14.png);background-size: 100% 100%;">
        <input type="radio" class="form-check-input package_check " name="massage_type" value="C1 ventosa + hotstone + massage">
  </div>
 
  <div class="packages-card ms-2" style="background-image: url(./img/serve_pic15.png);background-size: 100% 100%;">
        <input type="radio" name="massage_type" value="C2 massage + hotcompress + free candle" class="form-check-input package_check">
  </div>
   </div>

   <div class="d-flex w-100 ">
  <div class="packages-card" style="background-image: url(./img/serve_pic16.png);background-size: 100% 100%;">
        <input type="radio" name="massage_type" value="C3 massage + hotcompress + freecandle" class="form-check-input package_check">
  </div>
   <div class="packages-card ms-2" style="background-image: url(./img/serve_pic17.png);background-size: 100% 100%;">

        <input type="radio" name="massage_type" value="C4 Earcandle + Footreflex + massage" class="form-check-input package_check">
  </div>
      
    </div>

<div class="d-flex w-100 ">
  <div class="packages-card" style="background-image: url(./img/serve_pic18.png);background-size: 100% 100%;">
            <input type="radio" class="form-check-input package_check" name="massage_type" value="C5 ventosa & hotcompress or hotstone + BodyScrub + Earcandle">  </div>
   <div class="packages-card ms-2" style="background-image: url(./img/serve_pic19.png);background-size: 100% 100%;"> 
        <input type="radio" name="massage_type" value="VIP Room"class="form-check-input package_check">
  </div>
      </div>

      <div class="d-flex w-100 ">
  <div class="packages-card" style="background-image: url(./img/serve_pic20.png);background-size: 100% 100%;">
     <input type="radio" class="form-check-input package_check" name="massage_type" value="VIP Couple">

  </div>
   <div class="packages-card ms-2" style="background-image: url(./img/serve_pic21.png);background-size: 100% 100%;"> 
        <input type="radio" name="massage_type" value="Hot Compress"class="form-check-input package_check">

  </div>
      </div>
       <div class="d-flex w-100 ">
  <div class="packages-card" style="background-image: url(./img/serve_pic22.png);background-size: 100% 100%;">
            <input type="radio" class="form-check-input package_check" name="massage_type" value="Earcandle">  </div>
      </div>
    </div>

 <div class="btn-next d-flex">
       <button class=" bg-primary btn btn-primary"  style="width: 50%;" type="button" onclick="prevStep('step3', 'step2')">Previous</button>
        <button  class=" bg-primary btn btn-primary ms-2"  style="width: 50%;" type="button" onclick="nextStep('step3', 'step4')">Next</button>
     </div>


</div>
</div>



<div class="step" id="step4" style="display:none;">
      <div class="header-info">
              <h1>Therapist Selection</h1>

      </div>
      <div class="step1">
        <div style="overflow-y: auto !important;width:100%;height:100%;overflow-x: hidden;">

<div class="w-100 d-flex">
<div class="therapist-agent shadow bg-light">
  <img src="./img/pic1.jpg" class=" border border-light me-2" alt="profile" loading="lazy"/>
<div class="agent-data">
  <input type="radio" name="massage_therapist" value="Maviel Therapist">
  <label>Maviel Therapist</label>
  <span>Massage Therapist</span>
</div>
</div>

<div class="therapist-agent shadow bg-light">
  <img src="./img/pic1.jpg" class=" border border-light me-2" alt="profile" loading="lazy"/>
<div class="agent-data">
  <input type="radio" name="massage_therapist" value="Xialong Therapist">
  <label>Xialong Therapist</label>
  <span>Massage Therapist</span>
</div>
</div>


<div class="therapist-agent shadow bg-light">
  <img src="./img/pic1.jpg" class=" border border-light me-2" alt="profile" loading="lazy"/>
<div class="agent-data">
  <input type="radio" name="massage_therapist" value="Rod Mier Therapist">
  <label>Rod Mier Therapist</label>
  <span>Massage Therapist</span>
</div>
</div>
</div>



        </div>


 <div class="btn-next d-flex">
       <button class=" bg-primary btn btn-primary" style="width: 50%;" type="button" onclick="prevStep('step4', 'step3')">Previous</button>
        <button  class=" bg-primary btn btn-primary ms-2" style="width: 50%;" type="button" onclick="nextStep('step4', 'step5')">Next</button>
     </div>


      </div>
    </div>

    <!-- Step 4 -->
    <div class="step" id="step5" style="display:none;">
          <div class="header-info">
              <h1>Time & Date Selection</h1>

      </div>
      <div class="step1">
        <div style="overflow-y: auto !important;width:100%;height:100%;overflow-x: hidden;">
<div class="mb-3  w-100">
    <label for="date" class="form-label">The day you want to come</label>
    <input type="date" class="form-control" id="date" name="DateArrive" >
 </div>
  <div class="mb-3 w-100">
    <label for="time" class="form-label">Time Arrival</label>
    <input type="time" class="form-control " name="timeArrive" id="timeArrive">
  </div>


  
    <div class="mb-3 w-100">
    <label for="time" class="form-label">Time Limit</label>
    <select type="time" class="form-control " id="selectHours">
      <option value="1">1 hours</option>
<option value="3">3 hours</option>
<option value="4">4 hours</option>
<option value="2">2 hours</option>
    </select>
  </div>

       

  </div>

  </div>
<div class="btn-next d-flex">
       <button class=" bg-primary btn btn-primary" style="width: 50%;" type="button" onclick="prevStep('step5', 'step4')">Previous</button>
        <button  class=" bg-primary btn btn-primary ms-2" style="width: 50%;" type="button" onclick="nextStep('step5', 'step6')">Next</button>
     </div>

    </div>

 <!-- Step 5 -->
    <div class="step" id="step6" style="display:none;">
          <div class="header-info">
              <h1>Appointment Verification</h1>

      </div>
      <div class="step1" style="padding: 0px !important;">
        <div style="overflow-y: auto !important;width:100%;height:100%;overflow-x: hidden;padding: 0px !important;">
      <form  method="POST" action="{{ route('booking_reserve') }}">
        @csrf
<div class="custData">
  <div class="mb-2 p-2">
            <label class="custLabel">Name</label>
            <input type="text" name="Client_name" class="inputData" value="{{Auth::user()->fname}} {{Auth::user()->lname}}">
          </div>
 <div class="mb-2 p-2">
            <label class="custLabel">Email</label>
            <input type="text" name="cust_email" class="inputData" value="{{Auth::user()->email}}">
          </div>
           <div class="mb-2 p-2">

            <label class="custLabel">Contact Num</label>
            <input type="text" name="contactNum" class="inputData" value="{{Auth::user()->contactNum}}">
</div>
</div>

 <div class="mb-2 p-2 ms-2">
  <label class="custLabel">Type of Services</label>
    <input type="text" id="massageTypeInput" class="inputData" name="Type_service" readonly>
            </div>
 <div class="mb-2  ms-2 p-2">
      <label class="custLabel">Therapist Agent</label>
    <input type="text" id="massageTherapistInput" class="inputData" name="Agent_therapist" readonly>
       
  </div> 
    <div class="mb-2  ms-2 p-2">
      <label class="custLabel">Time Limit</label>  
 <input type="text" id="TimeInterval" class="inputData" name="time_interval" readonly>
</div>

<div class="mb-2  ms-2 p-2" >
      <label class="custLabel">Time Arrival</label>
    <input type="text" id="TimeArriveData" name="TimeArriveData" readonly>
  </div>
   
<div class="mb-2 p-2" >
      <label class="custLabel">Date Arrival</label>
    <input type="text" id="DateArriveData" class="inputData" name="Date_schedule" readonly>
  </div>


<div class="mb-2 p-2" >
      <label class="custLabel">Price</label>
<input type="text" value="" id="totalPrice" name="price">

  </div>

</div>
    
       <!-- Add fields for step 3 -->
            <div class="btn-next d-flex">
        <button type="button" class="btn btn-primary fw-bold bg-primary" style="width: 50%;" onclick="prevStep('step6', 'step5')">Previous</button>
        <button class="btn btn-primary  bg-primary fw-bold ms-2" style="width: 50%;" onclick="SubmitData()" type="submit">Submit</button>
      </div>
</form>
    </div>
  </div>
</div>
 </div>

<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="topModal">
    <span class="close">&times;</span>
  </div>
    <p> {{ session('message') }} This is a popup modal!</p>
  </div>
</div>


        


 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

var modal = document.getElementById("myModal");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the page loads, show the modal
  function  SubmitData() {
    modal.style.display = "block";
    setTimeout(function() {
      modal.style.display = "none";
    }, 4000); // Hide after 4 seconds (4000 milliseconds)
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }





    $(document).ready(function(){
        // Handle massage type radio button change
        $('input[name=massage_type]').change(function() {
            $('#massageTypeInput').val($(this).val());
        });

        // Handle massage therapist radio button change
        $('input[name=massage_therapist]').change(function() {
            $('#massageTherapistInput').val($(this).val());
        });

 $('input[name=DateArrive]').change(function(){
            $('#DateArriveData').val($(this).val());

        });
        $('input[name=timeArrive]').change(function(){
 var militaryTime = $(this).val();
    var timeArriveInput = $('#TimeArriveData');

    // Parse the input time
    var hours = parseInt(militaryTime.substring(0, 2), 10);
    var minutes = militaryTime.substring(3, 5);

    // Convert to AM/PM format
    var period = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // Handle midnight (0 hours)

    // Update the value in the TimeArrive input
    var formattedTime = hours + ':' + minutes + ' ' + period;
    timeArriveInput.val(formattedTime);
        });


        $('#selectHours').change(function() {
            $('#TimeInterval').val($(this).val());
        });
    });


 document.addEventListener('DOMContentLoaded', function() {
            // Get references to the hour select element and the radio buttons
            const hourSelect = document.getElementById('selectHours');
            const footSpaRadio = document.querySelector('input[name="massage_type"][value="Foot Spa"]');
            const fullBodyRadio = document.querySelector('input[name="massage_type"][value="Full Body Massage"]');
            const totalPriceParagraph = document.getElementById('totalPrice');

            // Function to calculate and update the total price
            function updateTotalPrice() {
                const pricePerHourFootSpa = 300;
                const pricePerHourFullBody = 500;
                const selectedHours = parseInt(hourSelect.value);
                const massageType = footSpaRadio.checked ? 'footSpa' : 'fullBody';

                // Calculate total price based on selected hours and massage type
                let totalPrice = massageType === 'footSpa' ? pricePerHourFootSpa * selectedHours : pricePerHourFullBody * selectedHours;

                // Update the total price display
                totalPriceParagraph.value = `₱${totalPrice}`;
            }

            // Add event listeners to hour select and radio buttons to update total price
            hourSelect.addEventListener('change', updateTotalPrice);
            footSpaRadio.addEventListener('change', updateTotalPrice);
            fullBodyRadio.addEventListener('change', updateTotalPrice);

            // Initial calculation of total price
            updateTotalPrice();
        });




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
