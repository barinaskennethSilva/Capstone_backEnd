
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

      
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
  @media (min-width:1025px){

  *{
margin: 0px;
padding:0px;
box-sizing: border-box;
  }
	 .navbar{
              z-index: 100; 
            }
            .nav-login{
            	position:absolute;
            	top: 	3px;
            	right: 	10px;
            	height: 50px;
            }
   .dashboard{
display: none !important;
   }
  }

@media screen and (min-width:320px) and (max-width:480px){
  .desktop-tab{
    display: none !important;
  }
  .btn-bar{
    padding: 15px;
    z-index: 100;
    position: absoute;
    left:20px;
  }
  .icon{
    width: 30px;
    height: 15px;
    position: relative;
    cursor: pointer;
  }
  .line{
    width: 100%;
    height: 3px;
    background-color: #fff;
    position: absolute;
    transition: tranform 0.3s ease;
  }
  .line2{
    top:8px;
  }
  .line3{
    top:16px;
  }
  .change .line1{
    transform: rotate(-45deg) translate(-5px, 6px);
  }
  .change .line2{
    opacity: 0;
  }
   .change .line3{
    transform: rotate(45deg) translate(-5px, -6px);
  }
  .dashboard{
    background-color: #111;
    width:0%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    overflow: hidden;
    transition: 0.5S;
    display: block;
    z-index: 100;
  }
  .dashboard ul{
    margin-top: 70px;
    padding: 10px;
  }
  .dashboard ul li{
    color: #fff;
    font-weight: 600;
  }
} 
</style>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="z-index: 100;">
  <div class="container-fluid">
    <a href="#" class="navbar-brand">Jillie jen's</a>
      <div class="btn-bar text-white">
        <div class="icon" id="navbarIcon">
<div class="line line1"></div>
<div class="line line2"></div>
<div class="line line3"></div>
        </div>
      </div>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0 desktop-tab" >
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">

          <a class="nav-link" href="{{ route('AboutUs') }}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ServiceOffer') }}">Services Offer</a>
        </li>
                <li class="nav-item nav-login btn btn-primary fw-bold">
          <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
        </li>
       
      </ul>

   
  </div>
</nav>
<div class="dashboard" id="dashboard">
 <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
        <li class="nav-item text-white">
          <a class="nav-link active ms-3" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-3 mt-2" href="{{ route('AboutUs') }}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-3 mt-2" href="{{ route('ServiceOffer') }}">Services Offer</a>
        </li>
                <li class="nav-item nav-login">
          <a class="nav-link text-white ms-3 mt-2" href="{{ route('login') }}">Login</a>
        </li>
       
      </ul>
</div>
<script type="text/javascript">
  document.getElementById('navbarIcon').addEventListener('click',function(){
this.classList.toggle('change');
var dashboard = document.getElementById('dashboard');
if (dashboard.style.width !== "70%") {
  dashboard.style.width = "70%";
}else{
dashboard.style.width = "0%";
}
  });

</script>
</body>
</html>