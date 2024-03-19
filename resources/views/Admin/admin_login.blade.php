
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

 <div class="background"></div>
<div class="mainForm shadow">

<div class="content">
<h2 style="font-size:40px"> Welcome Admin<br><span style="font-size:20px;"> To our jillie jen's massage spa</span></h2>
<p>We offer quality massage services for elaxing and stress free</p> 


  <div class="social-icons">
<a href="#" class="soc-a"><i class="bi bi-facebook"></i></a>
<a href="#"><i class="bi bi-envelope-at"></i></a>
<a href="#"><i class="bi bi-twitter-x"></i></a>
  </div>
</div>

<div class='form-container'>
 <form class="myform"  action="{{ route('admin_login') }}" method="POST">
   @csrf
   <input type="hidden" name="Usertype" id="Usertype" value="Admin">

<h1>Login Account</h1>


  <div class="form-input">
    <i class="icon bi bi-envelope"></i>
   <input type="email" id="email" name="email" class="input-field" required/>
   <label for="email">Email Address</label>
  </div>
 
  <div class="form-input">
   
       <input type="password" id="password" name="password" class="input-field" required/>
   <label for="password">Password</label>
    <i class=" icon bi bi-key"></i>

  </div>


  <div class="mb-2 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
 
<div class="mb-2">
  <button type="submit" class="btnForm">Login</button>
</div>
 <div class="mb-1">
  <div class="alert_msg alert" role="alert">
Email and Password Invalid!
</div>
</div>
<div class="login-register ">

  <span class="changeForm">Have not yet account?<a href="{{ route('admin_register')}}" class="linkform">Sign up</a></span>
</div>
</form>

</div>
</div>

<style>
.background{
  height:100vh;
  width:100%;
  position:absolute;
  top:0px !important;
  left:0px;
background: 
    linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
    url('../AdminPic/SinglePackages.png');
 
  background-size:cover;
  background-position:center;
 filter:blur(10px);
}
.form-container{
  display:flex;
  justify-content:center;
  align-items:center;
  width:100%;
  height:100%;
  background:transparent;
  backdrop-filter:blur(20px);
  background-top-right-radius:10px;
  background-bottom-right-radius:10px;
  color:#e4e4e4;
}
.mainForm{
  display:flex;
  flex-direction:row;
  width:75%;
  height:550px;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  border-radius:10px;
  position:absolute;
background: 
    linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
    url('../AdminPic/SinglePackages.png');
      background-size:cover;
  background-position:center;
  margin-top:20px;
}
 .mainForm .content{
 position:absolute;
 top:0;
 left:0;
 width:58%;
 height:100%;
 background:transparent;
 padding:70px;
 color:#e4e4e4;
 display:flex;
 justify-content:center;
 flex-direction:column;
 }
 .mainForm .content h2, p{
position:relative;
bottom:120px;
 }
 .social-icons{
 position:relative;
 top:150px;
 }
.social-icons a i{
  font-size:22px;
  color:#e4e4e4;
  margin-right:20px;
  transition: .5s ease;
}
.social-icons a:hover i{
transform: scale(2.2) !important;
}
 .mainForm .form-container{
 position:absolute;
 top:0;
 right:0;
 width:calc(100% - 58%);
 height:100%;
 border-top-right-radius:10px;
 border-bottom-right-radius:10px;
 }

.myform h1{
  font-size:32px;
  text-align:center;
}
.myform p{
  font-size:12px;
  text-align:center;
}
.form-container .form-input{
 position:relative;
  width:340px;
  height:50px;
  border-bottom:2px solid #e4e4e4;
  margin:30px 0;
}
.form-input input{
  width:100%;
  height:100%;
  background:transparent;
  border:none;
  outline:none;
  font-size:16px;
  color:#e4e4e4;
  font-weight:500;
  padding:28px;
}
.form-input label{
  position:absolute;
  top:50%;
  left:0;
  transfrom:translateY(-50%);
  font-size:16px;
  font-weight:500;
  pointer-events:none;
  transition: .5s ease;
  }
.input-field:focus + label, .input-field:valid + label{
  top: -5px !important;
}

.form-input .icon{
  position:absolute;
  top:13px;
  right:0;
  font-size:19px;
}
.alert_msg{
  color:red;
}
.btnForm{
  width:100%;
  height:45px;
  background-color:#c4103d;
  border:none;
  outline:none;
  border-radius:4px;
  cursor:pointer;
  font-weight:500;
  box-shadow: 0 0 10px rgba(0, 0, 0, .5);
  color:#e4e4e4;
}
.login-register {
font-size:14.5px;
font-weight:500;
text-align:center;
margin-top:25px;
}
.linkform{
  text-decoration:none;
  margin-left:10px;
  color:#e4e4e4 !important;
  font-weight:600;

}
.linkform:hover{
  text-decoration:underline;
}
</style>