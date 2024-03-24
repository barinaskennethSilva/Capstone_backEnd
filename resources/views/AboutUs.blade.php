         @include('home_header')
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
	 .about-content{
             width: 100%;
             height: 100%;
             position: absolute;
             top: 0px;
             left: 0px; 
             padding: 0px; 
            }
         
            .text-data{
            	width: 40%;
            	height: 200px;
            	position: absolute;
            	right: 70px;
            	top: 100px;
        
            }
            .text-data h1{
            	font-family: cursive;
            }
            .text-data label{
            	font-weight: 700;
            	font-size: 20px;
            }
            .text-data span{
            	font-size: 18px;
            	position: relative;
            	top: 30px;
            }
            .aboutPic2{
  display: none;
}
.aboutPic1{
  display: block;
  width: 100%;
             height: 100%;
}
          }
          @media screen and (min-width:320px) and (max-width:480px){
             *{
margin: 0px;
padding:0px;
box-sizing: border-box;
  }
   .about-content{
             width: 100%;
             height: 100%;
             position: absolute;
             top: 0px;
             left: 0px; 
             padding: 0px;
             background-color: green; 
            }
.aboutPic2{
  display: block;
  width: 100%;
  height: 100%;
}
.aboutPic1{
  display: none;
}
 .text-data{
              width: 63%;
              height: 200px;
              position: absolute;
              left: 100px;
              top: 140px;
            }
}
</style>
<body>
	<div class="about-content">
		<div class="text-data">
		<h1>About Us</h1>
		<label>Jillie jen's Massage Spa</label><br>
		<span>Jillie Jen's Massage Spa offers high-quality services aimed at ensuring customer satisfaction and providing a relaxing treatment experience. You can select treatments that best suit your needs, allowing you to fully enjoy the rejuvenating benefits of our spa services.</div>
		<img src="./img/aboutPic.png" class="aboutPic1">
    <img src="./img/aboutUs.png"class="aboutPic2">
	</div>
</body>
</html>