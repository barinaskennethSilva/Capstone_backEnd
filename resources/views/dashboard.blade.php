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
<!----- for calendar link--->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css" rel="stylesheet">

        <style>

.container {
  height: 92vh;
  position:relative;
  left:153px;
  width:80% !important;
  top:53px;
background-image:url('./img/jilliejens123.png');
background-size:cover;
  }
 .calendar{
 width:100%;
 height:15vh;
 background-color:#111;
 float: right;
 position:relative;
 bottom:52px;
 }
 .calendar .table-cal {
  border-collapse: collapse;
  height:20%;
  width:100%;
  background-color:#fff;
}
.topFormCal{
  background-color:#111;
  display:flex;
  justify-content: center; 
  align-items: center;
  text-align:center;
}
.topFormCal h2{
  font-weight:600;
  font-size:16px;
  width:300px;
  color:#fff;
  font-family:san Serif;
  margin-top:10px;
}
.previousMonth{
  margin-right:20px;
  background-color:transparent;
  border:none;
  outline:none;
  font-size:25px;
  font-weight:700;
  color:#fff;
}
.nextMonth{
    margin-left:20px;
  background-color:transparent;
  border:none;
  outline:none;
  font-size:25px;
  font-weight:700;
  color:#fff;
 
}
th, td {
  padding: 3px;
  border: 1px solid #ccc;
  text-align:center;
}

th {
  
  padding:5px;
  font-size:12px !important;
}
.appointment{
  font-size:12px;
}


        </style>
    </head>
    <body>
      @include('header')

  <div>
  
    <div class="container">
     <div class="calendar shadow">
    <div id="app">
        @yield('content')
    </div>
</div>
</div>

</body>
</html>
