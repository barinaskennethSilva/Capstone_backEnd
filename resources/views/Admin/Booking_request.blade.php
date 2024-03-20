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
.tableReq{
	width: 90%;
	margin-left: 50px;
}
.search{
	background-color: #111;
	border-radius: 20px;
	width: 30%;
	height: 50px;
	display: flex;
	float: right;
	position: relative;
	right: 10px;
	bottom: 35px;
 }
.search form input{
	height: 100%;
	width: 83%;
	border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    outline: none;
    border:none;
    background-color: transparent;
    padding-left: 10px;
    color: #fff;
}
.search form button{
	width: 50px;
	background-color: transparent;
	color: #fff;
	border: none;
}
form{
	width: 100%;
}
.footer{
    height: 80px;
    margin: 0px;
    padding: 0px;
}
}
	</style>
<div class="container">
<div class="footer bg-light">
<div class="search">
	<form>
<input type="text" placeholder="Search...">
<button class="searchBtn"><i class="bi bi-search"></i></button>
</form>
</div>
</div>
<div class="tableReq">
	<table class="table table-striped table-hover">
   <thead style="overflow-y: auto;overflow-x: hidden;">
    <tr>
      <th scope="col">Client Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Email Address</th>
      <th scope="col">Type of Services</th>
      <th scope="col">Time Interval</th>
      <th scope="col">Date of Arrival</th>
      <th scope="col">Payment</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  	 @foreach($book_report as $request)
    <tr>
      <td>{{ $request->Client_name }}</td>
      <td>{{ $request->contactNum }}</td>
      <td>{{ $request->cust_email }}</td>
      <td>{{ $request->Type_service }}</td>
       <td>{{ $request->time_interval }}</td>
       <td>{{ $request->Date_schedule }}</td>
              <td>{{ $request->price }}</td>
       <td>pending</td>
       <td><div class="d-flex"><button class="btn btn-primary">Edit</button><button class=" ms-2 btn btn-danger">Delete</button></div></td>

    </tr>
     @endforeach 
  </tbody></table>
</div>
</body>
</html>