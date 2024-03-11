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
th{
    border:1px solid #111;
}

	</style>
<div class="container">
<h3>Transaction Record</h3>
<table class="table table-hover">
 <thead>
    <tr class="table-danger">
      <th scope="col" class="text-white">Customer Name</th>
      <th scope="col" class="text-white">Contact Number</th>
      <th scope="col" class="text-white">Full name</th>
       <th scope="col" class="text-white">Type of Massage</th>
      <th scope="col" class="text-white">Time Interval</th>
            <th scope="col" class="text-white">Date of Arrival</th>
      <th scope="col" class="text-white">Payment</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($transact_records as $transact_record)
    <tr class="table-light">
     <td>{{ $transact_record->Client_name }}</td>
      <td>{{ $transact_record->contactNum }}</td>
       <td>{{ $transact_record->Type_service }}</td>
        <td>{{ $transact_record->Agent_therapist }}</td>
      <td>{{ $transact_record->time_interval }}</td>
      <td>{{ $transact_record->Date_schedule }}</td>
     <td>{{ $transact_record->price }}</td>

    </tr>
    @endforeach
  </tbody>
</table>
  

</div>

</body>
</html>