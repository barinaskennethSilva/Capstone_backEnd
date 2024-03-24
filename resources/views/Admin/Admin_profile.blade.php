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

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<style type="text/css">
		.container{
  width:80%;
  height:92.5vh !important;
  position:relative;
  left:152px;

}
.header{
    margin: 0px;
    padding: 0px;
    width: 100%;
     position: relative;
    top: 60px;
}
.footer{
     margin: 0px;
    padding: 0px;
    width: 100%;
     position: relative;
    top: 250px;
}
.prof_design{
    background-color: dodgerblue;
    width: 100%;
    height: 25vh;
}
.profile img{
    width: 25%;
    height: 25vh;
}
.Btn_holder{
    height: 95px;
    width: 40%;
    position: relative;
    top:100px;
    left: 30px;
}
.Btn_holder a{
    font-size: 18px;
    width: 150px;
     flex-grow: 0;
  flex-shrink: 0;
  display: flex;
  flex-direction: column;
}
.Btn_holder a i{
    font-size: 35px;
}
	</style>
    <div class="container">
	<div class="header bg-danger">
<div class="prof_design">
<div class="profile">
<!-- <img src="/User_folder"> -->
<div class="d-flex w-100">
<img src="{{ asset('User_folder/' . Auth::user()->user_profile) }}" >
<div class="Btn_holder d-flex">
    <a href="#" class="btn btn-light w-20 ms-2" data-bs-toggle="modal" data-bs-target="#updateProfileImageModal"><i class="bi bi-camera"></i>Edit Profile</a>
        <a href="#" class="btn btn-light w-50 ms-2 p-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square" ></i>Edit Personal Information</a>
</div>
</div>
<div class="mt-2 text-center w-25">
<h2>{{ Auth::user()->fname }} {{ Auth::user()->lname }}</h2>
<span>{{ Auth::user()->email }}</span>
</div>
</div>
    </div>   
    </div>
 <!-- MODAL EDIT PROFILE FUNCTION -->
 <!-- Modal -->
<div class="modal fade" id="updateProfileImageModal" tabindex="-1" aria-labelledby="updateProfileImageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('profile.updateImage') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="updateProfileImageModalLabel">Update Profile Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="profile_image" class="form-label">Choose Image</label>
                        <input type="file" class="form-control" id="profile_image" accept="image/*" name="profile_image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL EDIT FUNCTION -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <!-- Modal body content goes here -->
 <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Update profile form fields -->
          <div class="d-flex w-100">
          <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname" value="{{ Auth::user()->fname }}">
          </div>
          <div class="mb-3 ms-2">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" value="{{ Auth::user()->lname }}">
          </div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
          </div>
           <div class="mb-3">
            <label for="contactNum" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contactNum" name="contactNum" value="{{ Auth::user()->contactNum }}">
          </div>
          <div class="mb-3">
            <label for="Permanent_address" class="form-label">Permanent Address</label>
            <input type="text" class="form-control" id="Permanent_address" name="Permanent_address" value="{{ Auth::user()->Permanent_address }}">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="{{ Auth::user()->password }}">
          </div>
          <!-- Add more fields as needed -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>      </div>
     
    </div>
  </div>
</div>




<div class="footer">
<div class="myForm">
  
</div>
</div>
    </div>

</body>
</html>