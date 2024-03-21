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
<form method="POST" class="row  w-50 shadow"  action="{{ route('statusEditUpdate', $Edit_record->id) }}">
    <div class="topForm fw-bold">
Update Status Appointment
    </div>
    @csrf
    @method('PUT')

    <!-- Client Name -->
    <div class="col-md-6 p-2">
    <label for="Client_name">Client Name:</label>
    <input type="text" class="form-control" name="Client_name" value="{{ $Edit_record->Client_name }}" required>
</div>

  <div class="col-md-6 p-2">
    <label for="Status">Status:</label>
    <select class="form-control" name="status"  required>
        <option value="Pending">Pending</option>
       <option value="Done">Done</option>
</select>
</div>
 <div class="col-12 p-2">
    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary w-100 fw-bold">Update Booking</button>
</div>

</form>


 </div>
</body>
</html>