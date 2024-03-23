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
<a class="close" href="{{ route('Therapist_list') }}">
   <i class="bi bi-x-lg "></i> 
</a>
</div>

<div class="tableReq">
    <table class="table">
  <thead>

    <tr>
      <th scope="col">Employee id</th>
      <th scope="col">Employee Profile</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Permanent Address</th>
      <th scope="col">Email Address</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Skill</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody style="overflow-x:hidden;overflow-y: auto;">
            @if ($results->count() > 0)
 @foreach ($results as $result)
    <tr>
      <th scope="row">{{ $result->emp_id }}</th>
      <td><img src="/registration_pic/{{ $result->emp_profile }}" style="height:60px;border-radius: 50%;width:60PX;"></td>
      <td>{{ $result->emp_fname }} {{ $result->emp_lname }}</td>
      <td>{{ $result->Permanent_address }}</td>
      <td>{{ $result->email_add }}</td>
      <td>{{ $result->contactNum }}</td>
      <td>{{ $result->skills }}</td>
      <td>{{ $result->status }}</td>
      <td><div class="d-flex">
 <a  class="btn btn-primary me-2" href="{{ route('update_TherapistList', $result->id) }}" class="btn btn-danger btn-sm">Edit</a>
  <form id="deleteForm" action="{{ route('deleteList.delete', $result->id) }}" method="POST">
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