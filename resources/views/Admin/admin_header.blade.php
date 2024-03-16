<!DOCTYPE html>
<html lang="en">
    <head>
          <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Jillie Jen's Massage Spa</title>

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>


<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
   
    <a class='navbar-brand text-white'> <button 
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarToggleExternalContent"
      aria-controls="navbarToggleExternalContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    style="margin-right:10px">
     <i class="bi bi-justify" @click="dashOpen" v-show="mobile" :class="{'icon-active':mobileNav}"></i>
    </button></a>
   



<div class="dropdown">
  <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:transparent;border:none;color:#fff; ">
     <img
            src="{{ asset('./AdminPic/JillieJens01.png') }}"
            class="rounded-circle border border-light me-2"
            height="35"
            width="35"
            alt="Black and White Portrait of a Man"
            loading="lazy"/>
  </button>
  <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1" style="margin-left:-80px;">
    <li><a class="dropdown-item" href="#">My profile</a></li>
    <li><a class="dropdown-item" href="#">Settings</a></li>
    <li><a class="dropdown-item" href="#"><form method="POST" action="{{ route('logout') }}">
    @csrf
    <button style="background-color: transparent;border: none;outline: none;" type="submit">Logout</button>
</form></a></li>
  </ul>
</div>


    
  </div>
</nav>
<div class="dashboard">
<div class="topForm">
<div class='logo'>
<img src="{{ asset('./AdminPic/JillieJens01.png') }}" alt="logo">
</div>
<div class="d-flex ms-2 flex-column ">
        <h1>{{ Auth::user()->fname }} {{ Auth::user()->lname }}</h1>
         <label style='font-weight:700;font-size:16px;color:#fff;'>{{ Auth::user()->email }}</label>
</div> </div>
  <ul class="navbar-nav">
        <li class="nav-item">
          <RouterLink class="nav-link active text-white fw-bold nav-dash" aria-current="page" to="Dash_Home"><i class="bi bi-house-door icons"></i> <label class="me-4">Dashboard</label></RouterLink>
        </li>
        <li class="nav-item">
          <RouterLink class="nav-link text-white fw-bold nav-dash" to="/booking_reserve"><i class="bi bi-book icons"></i><label class="nav-label" style="position:relative;left:14px;"> Booking Request</label></RouterLink>
        </li>
        <li class="nav-item">
          <RouterLink class="nav-link text-white fw-bold nav-dash" to="/transact_record"><i class="bi bi-bookmarks icons"></i><label class="nav-label ms-5">Transaction Record</label></RouterLink>
        </li>
        <li class="nav-item">
          <RouterLink class="login-btn nav-link text-white fw-bold nav-dash" to="/calendar"><i class="bi bi-calendar3 icons"></i><label class="nav-label me-4"> Calendar</label></RouterLink>
        </li>
        <li class="nav-item">
          <a class="login-btn nav-link text-white fw-bold nav-dash" href="{{ route('admin_message') }}"><i class="bi bi-chat-dots icons"></i><label class="nav-label "> Message</label></a>
        </li>
       
      </ul>

</div>

<div name="mobile-nav" class="mobileDash">
<ul v-show="mobileNav" class="dropdown-nav">
<li>
<div class="Topdash">
<div class='logo'>
<img src="{{ asset('./AdminPic/JillieJens01.png') }}" alt="logo">
</div>
<div style="display:flex;flex-direction:column;margin-left:10px;">
<label style='font-weight:700;font-size:20px;color:#fff;'>{{ Auth::user()->fname }} {{ Auth::user()->lname }}</label>
<p style="font-size:15px;color:#fff;">{{ Auth::user()->email }}</p>
</div> </div>
</li>
 <li class="nav-item">
          <RouterLink class="nav-link active text-white fw-bold nav-dash" aria-current="page" to="Dash_Home" @click="dashOpen"><i class="bi bi-house-door icons"></i> <label style="position:relative;right:20px;">Dashboard</label></RouterLink>
        </li>
        <li class="nav-item">
          <RouterLink class="nav-link text-white fw-bold nav-dash" to="/booking_reserve" @click="dashOpen"><i class="bi bi-book icons"></i><label class="nav-label" style="position:relative;left:20px;"> Booking Request</label></RouterLink>
        </li>
        <li class="nav-item">
          <RouterLink class="nav-link text-white fw-bold nav-dash" to="/transact_record" @click="dashOpen"><i class="bi bi-bookmarks icons"></i><label class="nav-label ms-4">Transaction Record</label></RouterLink>
        </li>
        <li class="nav-item">
          <RouterLink class="login-btn nav-link text-white fw-bold nav-dash" to="/calendar" @click="dashOpen"><i class="bi bi-calendar3 icons"></i><label class="nav-label" style="position:relative;right:29px;"> Calendar</label></RouterLink>
        </li>
        <li class="nav-item">
          <RouterLink class="login-btn nav-link text-white fw-bold nav-dash" to="/chat_view" @click="dashOpen"><i class="bi bi-chat-dots icons"></i><label class="nav-label " style="position:relative;right:20px;"> Message Us</label></RouterLink>
        </li>
        <li class="nav-item">
          <RouterLink class="login-btn nav-link text-white fw-bold nav-dash" to="/chat_view" @click="dashOpen"><i class="bi bi-box-arrow-left icons"></i><label class="nav-label " style="position:relative;right:32px;"> Logout</label></RouterLink>
        </li>
        </ul>
</div>

<style scoped>
 @media screen and (min-width:320px) and (max-width:480px){
.navbar{
  z-index:50;
background-color:#111;
}
.navbar-brand{
  font-size:14px;
}

.dropdown-nav{
  padding:0;
}
.navbar-nav{
  position:relative;
right:400px;
}

.topdash{
  height:150px;
  width:100%;
  padding:20px;
color:#fff;
border-bottom:1px solid lightgrey;
}
.nav-item{
  margin-top:30px;
}
.nav-item .nav-link{
  position:relative;
  font-size:16px;
  font-weight:500;
  margin-right:30px;
}
.mobileDash{
  position:relative;
  bottom:10px;
}
.nav-item .nav-dash{
  color:orange;
  width:100%;
}
}
@media screen and (min-width:1024px){
 .navbar-brand{
  display:none;
  }
  .navbar{
width:84%;
float:right;
  z-index: 60;
  }
   .dropdown{
  position:relative;
  left:1180px;
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
   z-index: 90;
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
</body>
</html>