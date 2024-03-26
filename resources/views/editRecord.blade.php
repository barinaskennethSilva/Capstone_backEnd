@include('header')
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
     <style type="text/css">
            @media screen and (min-width:1024px){
        .editContainer{
  width:80%;
  height:92.5vh !important;
  position:relative;
  left:152px;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
}
.topForm{
    background-color: dodgerblue;
    width: 100%;
    text-align: center;
    padding: 10px;
    font-size: 20px;
    color: #fff;
}
.editContainer form{
width: 50%;
}
.btnNextMobile,.prevBTN{
    display: none;
}
#step2{
    display: block;
}
.desktop-des{
    display: flex;
}
.btnUpdate{
    width: 100%;
}
}
@media screen and (min-width:320px) and (max-width:480px){
*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.editContainer{
display: flex;
align-items: center;
justify-content: center;
}
.topForm{
    background-color: dodgerblue;
    width: 100%;
    text-align: center;
    padding: 10px;
    font-size: 20px;
    color: #fff;
}
.editContainer form{
width: 80%;
height: 65vh;
margin-top: 50px;
}
.btnNextMobile, .prevBTN{
    display: block;
}
#step2{
    display: none;

}
.btnUpdate{
    width: 50%;
}
}

</style>
<div class="editContainer">
       <!-- Update Booking Request Form -->
<form method="POST" class="row shadow"  action="{{ route('editRecordUpdate', $transact_record->id) }}">
    <div class="topForm fw-bold">
 Edit Appointment
    </div>
    @csrf
    @method('PUT')

    <div class="step" id="step1">

    <!-- Client Name -->
    <div class="desktop-des">
    <div class="col-md-6 p-2">
    <label for="Client_name">Client Name:</label>
    <input type="text" class="form-control" name="Client_name" value="{{ $transact_record->Client_name }}" required>
</div>
 <div class="col-md-6 p-2">
    <!-- Customer Email -->
    <label for="cust_email">Customer Email:</label>
    <input type="email" name="cust_email" class="form-control" value="{{ $transact_record->cust_email }}" required>
</div>
</div>
 <div class="desktop-des">
  <div class="col-md-6 p-2">
    <!-- Contact Number -->
    <label for="contactNum">Contact Number:</label>
    <input type="text" name="contactNum" class="form-control" value="{{ $transact_record->contactNum }}" required>
</div>
<div class="col-md-6 p-2">
    <!-- Type of Service -->
    <label for="Type_service">Type of Service:</label>
    <!-- <input type="text" name="Type_service" class="form-control" value="{{ $transact_record->Type_service }}" required> -->
    <select class="form-control" name="Type_service">
        <option value="{{ $transact_record->Type_service }}" required>{{ $transact_record->Type_service }}</option>
        <option class="bg-primary p-2 text-white fw-bold text-center" required>Single Package</option>
        <option value="1hr Full Body Massage" required>1hr Full Body Massage</option>
        <option value="Foot Spa" required>Foot Spa</option>
        <option value="1hr Foot Reflex" required>1hr Foot Reflex</option>
        <option value="30mins Foot Reflex" required>30mins Foot Reflex</option>
        <option value="EarCandle" required>EarCandle</option>
        <option value="Hotel and Home Services" required>Hotel and Home Services</option>
        <option value="Milk Body Scrub" required>Milk Body Scrub</option>

        <option class="bg-primary p-2 text-white fw-bold text-center" required>Double Package</option>
        <option value="Ventosa w/1hr Massage" required>Ventosa w/1hr Massage</option>
        <option value="Hotstone w/1hr Massage" required>Hotstone w/1hr Massage</option>
        <option value="Body Scrub w/1hr Massage" required>Body Scrub w/1hr Massage</option>
        <option value="EarCandle w/1hr Massage" required>EarCandle w/1hr Massage</option>
        <option value="HFoot Reflex w/1hr Massage" required>Foot Reflex w/1hr Massage</option>
        <option value="Foot Spa w/1hr Massage" required>Foot Spa w/1hr Massage</option>

        <option class="bg-primary p-2 text-white fw-bold text-center" required>Combo Package</option>
        <option value="Foot Spa w/1hr Massage" required>C1 2hrs Ventosa + Hotstone + Massage </option>
        <option value="Foot Spa w/1hr Massage" required>C2 1hrs Massage + Hot Compress + Freecandle </option>
        <option value="Foot Spa w/1hr Massage" required>C3 massage + hotcompress + Freecandle </option>
        <option value="Foot Spa w/1hr Massage" required>C4 Earcandle + Footreflex + massage</option>
        <option value="Foot Spa w/1hr Massage" required>"VIP Room</option>
        <option value="Foot Spa w/1hr Massage" required>VIP Couple</option>
        <option value="Foot Spa w/1hr Massage" required>Hot Compress</option>

    </select>
</div>
</div>
<div class="p-2 w-100 btnNextMobile">
<button type="button" onclick="nextStep('step1', 'step2')" class="text-center fw-bold text-white w-100 btn btn-primary">Next</button>

</div>
</div>




<div class="step" id="step2">
     <div class="desktop-des">
<div class="col-md-6 p-2">
    <!-- Agent/Therapist -->
    <label for="Agent_therapist">Agent/Therapist:</label>
    <input type="text" name="Agent_therapist" class="form-control" value="{{ $transact_record->Agent_therapist }}" required>
</div>
  <div class="col-md-6 p-2">
    <!-- Time Interval -->
    <label for="time_interval">Time Interval:</label>
    <input type="text" name="time_interval" class="form-control" value="{{ $transact_record->time_interval }}" required>
</div>
</div>
     <div class="desktop-des">
  <div class="col-md-6 p-2">
    <!-- Date Schedule -->
    <label for="Date_schedule">Date Schedule:</label>
    <input type="text" name="Date_schedule" class="form-control" value="{{ $transact_record->Date_schedule }}" required>
</div>
  <div class="col-md-6 p-2">
    <!-- Price -->
    <label for="price">Price:</label>
        <input type="hidden"  name="price" class="form-control" value="{{ $transact_record->price }}" required>
    <input type="text" disabled  name="price" class="form-control" value="{{ $transact_record->price }}" required>
</div>
</div>
  <div class="col-12 p-2">
    <!-- Submit Button -->
    <div class="d-flex p-2">
        <button class=" bg-primary btn btn-primary fw-bold w-50 ms-2 prevBTN" type="button" onclick="prevStep('step2', 'step1')">Previous</button>
    <button type="submit" class="btn btn-primary ms-2 btnUpdate fw-bold">Update Booking</button>
</div>
</div>
</div>
</form>
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