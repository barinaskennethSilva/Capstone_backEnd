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
  height:93.3vh;
  position: relative;
  top:50px;
  left: 305px;
  padding: 0px;
  margin: 0px;
  
}
.topHeader{
    position: relative;
    top:2px;
    height: 80px;
}
.close{
   position: relative;
   left: 990px;
   font-size: 30px;
   top: 15px;

}
</style>
<div class="container">

<div class="topHeader bg-light">
     <label style="font-size: 30px;position: relative;bottom: -10px;left: 10px;font-weight: 600;">Search Result</label>
<a class="close" href="{{ route('Booking_request') }}">
   <i class="bi bi-x-lg "></i> 
</a>
</div>

<div class="tableReq">
    <table class="table">
  <thead>

    <tr>
      <th scope="col">Client Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Email Address</th>
      <th scope="col">Agent Therapist</th>
      <th scope="col">Type of Services</th>
      <th scope="col">Time Interval</th>
      <th scope="col">Date of Arrival</th>
      <th scope="col">Payment</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody style="overflow-x:hidden;overflow-y: auto;">
            @if ($results->count() > 0)
 @foreach ($results as $result)
    <tr>
      <th scope="row">{{ $result->Client_name }}</th>
      <td>{{ $result->emp_fname }} {{ $result->contactNum }}</td>
      <td>{{ $result->cust_email }}</td>
      <td>{{ $result->Agent_therapist }}</td>
      <td>{{ $result->Type_service }}</td>
      <td>{{ $result->time_interval }}</td>
      <td>{{ $result->Date_schedule }}</td>
            <td>{{ $result->price }}</td>
            <td>{{ $result->status }}</td>

      <td><div class="d-flex">
 <a  class="btn btn-primary me-2" href="{{ route('statusEdit', $result->id) }}" class="btn btn-danger btn-sm">Edit</a>
  <form id="deleteForm" action="{{ route('Edit_record.delete', $result->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirmDelete();" class="btn btn-danger">Delete</button>
</form>    </div></td>
    </tr>
         @endforeach 
@else
    <p>No results found for the search query.</p>
@endif
  </tbody>
</table>
</div>



</div>
</body>
</html>