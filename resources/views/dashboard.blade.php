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
@media (min-width:1025px){
      *{
margin: 0px;
padding:0px;
box-sizing: border-box;
  }
.container {
  height: 93vh;
  width: 80%;
  position:  absolute ;
  left:  207px;
  top:  52px;
  }
 .dash-home{
  width: 100%;
  height: 100%;
  position:  relative ;
  left:  11px;
  background-image:url('./img/jilliejens123.png');
background-size:cover;

 }
.btn-link{
    width: 36%;
    height: 70px;
    position: relative;
    top: 196px;
    left: 95px;
    padding: 20px;
    margin: 0px;
    display: flex;
    flex-direction: row;
}
.btnForm{
    border-radius: 40px;
    height: 60px;
    width: 200px;
outline: none;
   margin-left: 20px;
   background-color: transparent;
}
.vid-adds{
background: linear-gradient(to bottom, #333333, #666666);
;width: 93%;
position: absolute;
top: 5px;
left:80px;
height: 370px;
}
}
 @media screen and (min-width:320px) and (max-width:480px){
             *{
margin: 0px;
padding:0px;
box-sizing: border-box;
  }
  .container {
  height: 100%;
  width: 100%;
  position:  absolute ;
  left: 0px;
  top:  0px;
  }
.dash-home{
  width: 100%;
  height: 100%;
  background-image:url('./img/mobiledash.png');
background-size:100% 100%;
position:  absolute ;
  left: 0px;
  top:  0px;
 }
 .vid-adds{
background: linear-gradient(to bottom, #333333, #666666);
;width: 97%;
position: absolute;
top: 60px;
left:5px;
height: 280px;
}
.btn-link{
    width: 40%;
    height: 70px;
    position: relative;
    top: 196px;
    left: 50px;
    padding: 20px;
    margin: 0px;
}
.btnForm{
    border-radius: 13px;
    padding: 15px 25px;
outline: none;
   margin-left: 20px;
position: relative;
right:40px;
top: 9px;
}
}
        </style>
    </head>
    <body>
      @include('header')

  
    <div class="container">

     <div class="dash-home shadow">
       <div class="vid-adds">
    <video style="width:100%;height:100%;"controls autoplay loop>
    <source src="{{ asset('img/adds.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
</video>
<div class="btn-link">
      <a class="btnForm" href="{{ route('chat_view') }}">
</a>
    <a class="btnForm" style="right:48px" href="{{ route('booking_reserve') }}">
</a>
</div>
 </div>
</div>
</div>

</body>
</html>
