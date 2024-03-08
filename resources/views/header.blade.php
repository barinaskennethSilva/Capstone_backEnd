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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



<style>
    @media screen and (min-width:320px) and (max-width:480px){
 .navbar-brand{
  display:block;
  }
.mobileDash{
  display:block;
  background-color: #111 ;
  height: 100vh;
  width: 60%;
  position: absolute;
  top: 0px;
    left: 0px;
  }
  .Topdash{
    border-bottom:1px solid lightgrey;
    display: flex;
    flex-direction: row;
    padding: 10px;
  }
  .logo img{
    height: 50px;
    width: 50px;
    border-radius: 50%;
  }
  .dropdown{
  display: none;
  }
}
@media screen and (min-width:1024px){
 .navbar-brand{
  display:none;
  }
  .navbar{
width:84%;
float:right;
  }
   .dropdown{
  position: relative;
  left: 1140px;
  display: block;
  }
  .mobileDash{
  display:none;
  }
.dashboard{
  position:absolute;
  left:0px;
  top:0px;
  height:100vh;
  width:20%;
  background-color:#111;
  display:block;
 
}
}

.dashboard .topForm{
  width:100%;
  height:100px;
  border-bottom:2px solid #fff;
  padding:10px;
  display:flex;
  flex-direction:row;
}
.topForm h1{
  font-size:18px;
  color:#fefefe;
  margin:10px 5px;
}
.topForm .logo img{
  width:50px;
  height:50px;
  border-radius:50%;
}
.navbar-nav{
  text-align:center;
  margin-top:20px;
  font-size:17px;
}
.nav-dash:hover{
background-color:#98FB98;
}

.icons{
  position:absolute;
  left:30px;
  font-size:20px;
}
</style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">

        <a class='navbar-brand text-white'>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-right:10px">
                <i class="bi bi-justify" onclick="toggleMobileNav()" v-show="mobile" :class="{'icon-active':mobileNav}"></i>
            </button>
        </a>
        <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:transparent;border:none;color:#fff;">
                <img src="./img/pic1.jpg" class="rounded-circle border border-light me-2" height="35" width="35" alt="Profile" loading="lazy"/>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="margin-left:-80px;">
                <li><a class="dropdown-item" href="#">My profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#"><form method="POST" action="{{ route('logout') }}">
    @csrf
    <button style="background-color: transparent;border: none;outline: none;" type="submit">Logout</button>
</form>
</a></li>
            </ul>
        </div>

    </div>
</nav>

<div class="dashboard">
    <div class="topForm">
        <div class='logo'>
            <img src='./img/pic1.jpg' alt="logo">
        </div>
        <h1>{{ Auth::user()->email }}</h1>
    </div>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active text-white fw-bold nav-dash" aria-current="page" href="{{ route('dashboard') }}"><i class="bi bi-house-door icons"></i> <label class="me-4">Dashboard</label></a>
        </li>

            <a class="nav-link text-white fw-bold nav-dash" href="{{ route('booking_reserve') }}"><i class="bi bi-book icons"></i><label class="nav-label" style="position:relative;left:28px;"> Booking Reservation</label></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white fw-bold nav-dash" href="{{ route('transact_record') }}"><i class="bi bi-bookmarks icons"></i><label class="nav-label ms-5">Transaction Record</label></a>
        </li>
        <li class="nav-item">
            <a class="login-btn nav-link text-white fw-bold nav-dash" href="{{ route('calendar') }}"><i class="bi bi-calendar3 icons"></i><label class="nav-label me-4"> Calendar</label></a>
        </li>
        <li class="nav-item">
            <a class="login-btn nav-link text-white fw-bold nav-dash" href="{{ route('chat_view') }}"><i class="bi bi-chat-dots icons"></i><label class="nav-label "> Message Us</label></a>
        </li>
    </ul>
</div>

<!---- for mobile view ---->
<div class="mobileDash">
     <div class="Topdash">
            <div class='logo'>
                <img src='./img/pic1.jpg' alt="logo">
            </div>
            <div style="display:flex;flex-direction:column;margin-left:10px;">
                <label style='font-weight:700;font-size:20px;color:#fff;'>{{ Auth::user()->email }}</label>
                <p style="font-size:15px;color:#fff;">kbarinas0@gmail.com</p>
            </div>
        </div>
<ul  class="dropdown-nav">
    
    <li class="nav-item">
        <a class="nav-link active text-white fw-bold nav-dash" aria-current="page" href="{{ route('dashboard') }}" onclick="toggleMobileNav()"><i class="bi bi-house-door icons"></i> <label style="position:relative;left:20px;">Dashboard</label></a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white fw-bold nav-dash" href="{{ route('booking_reserve') }}" onclick="toggleMobileNav()"><i class="bi bi-book icons"></i><label class="nav-label" style="position:relative;left:20px;"> Booking Reservation</label></a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white fw-bold nav-dash" href="{{ route('transact_record') }}" onclick="toggleMobileNav()"><i class="bi bi-bookmarks icons"></i><label class="nav-label" style="position:relative;left:20px;">Transaction Record</label></a>
    </li>
    <li class="nav-item">
        <a class="login-btn nav-link text-white fw-bold nav-dash" href="{{ route('calendar') }}" onclick="toggleMobileNav()"><i class="bi bi-calendar3 icons"></i><label class="nav-label" style="position:relative;left:20px;"> Calendar</label></a>
    </li>
    <li class="nav-item">
        <a class="login-btn nav-link text-white fw-bold nav-dash" href="{{ route('chat_view') }}" onclick="toggleMobileNav()"><i class="bi bi-chat-dots icons"></i><label class="nav-label " style="position:relative;left:20px;"> Message Us</label></a>
    </li>
    <li class="nav-item">
        <a class="login-btn nav-link text-white fw-bold nav-dash" href="{{ route('chat_view') }}" onclick="toggleMobileNav()"><i class="bi bi-box-arrow-left icons"></i><label class="nav-label " style="position:relative;left:25px;"> Logout</label></a>
    </li>
</ul>
</div>





<script type="text/javascript" defer >
    
    document.addEventListener('DOMContentLoaded', function() {
        function toggleMobileNav() {
            var mobileNav = document.getElementById('mobileNav');

            if (window.matchMedia('(max-width: 768px)').matches) {
                mobileNav.style.display = 'block'; // Show mobileNav for screens smaller than 768px
            } else {
                mobileNav.style.display = 'none'; // Hide mobileNav for larger screens
            }
        }

        // Call the function initially to set the initial state
        toggleMobileNav();

        // Add an event listener to the window resize event to update mobileNav when the screen size changes
        window.addEventListener('resize', toggleMobileNav);
    });

</script>
</body>
</html>