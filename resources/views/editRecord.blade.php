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
.topForm{
    background-color: dodgerblue;
    width: 100%;
    text-align: center;
    padding: 10px;
    font-size: 20px;
    color: #fff;
}
</style>
<div class="container">
       <!-- Update Booking Request Form -->
<form method="POST" class="row  w-50 shadow"  action="{{ route('editRecordUpdate', $transact_record->id) }}">
    <div class="topForm fw-bold">
 Edit Appointment
    </div>
    @csrf
    @method('PUT')

    <!-- Client Name -->
    <div class="col-md-6 p-2">
    <label for="Client_name">Client Name:</label>
    <input type="text" class="form-control" name="Client_name" value="{{ $transact_record->Client_name }}" required>
</div>
 <div class="col-md-6 p-2">
    <!-- Customer Email -->
    <label for="cust_email">Customer Email:</label>
    <input type="email" name="cust_email" class="form-control" value="{{ $transact_record->cust_email }}" required>
</div>

  <div class="col-12 p-2">
    <!-- Contact Number -->
    <label for="contactNum">Contact Number:</label>
    <input type="text" name="contactNum" class="form-control" value="{{ $transact_record->contactNum }}" required>
</div>
<div class="col-12 p-2">
    <!-- Type of Service -->
    <label for="Type_service">Type of Service:</label>
    <input type="text" name="Type_service" class="form-control" value="{{ $transact_record->Type_service }}" required>
</div>
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
  <div class="col-md-6 p-2">
    <!-- Date Schedule -->
    <label for="Date_schedule">Date Schedule:</label>
    <input type="text" name="Date_schedule" class="form-control" value="{{ $transact_record->Date_schedule }}" required>
</div>
  <div class="col-md-6 p-2">
    <!-- Price -->
    <label for="price">Price:</label>
    <input type="text" name="price" class="form-control" value="{{ $transact_record->price }}" required>
</div>
  <div class="col-12 p-2">
    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary w-100 fw-bold">Update Booking</button>
</div>

</form>
</div>

</body>
</html>