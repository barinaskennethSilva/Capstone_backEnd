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
	.services-content{
		text-align: center;
		padding: 20px;

	}
	.services-content h1{
		font-family: cursive;
	}
	.services-content label{
		font-weight: 600;
		font-size: 25px;
	}
	.services-content p{
		font-size: 20px;
		margin-top: 10px;
	}
	.services_Offer img{
		width: 95%;
		height: 70%;
		position: relative	;
		top:50px;
	}
	.services_Offer{
		width: 25%;		
		height: 300px;
		padding: 0px;
		margin-top: 10px;
		display: flex;
		flex-direction: 	column;
		align-items: 	center;
	 justify-content: 	center;
	}
	.services_Offer .dataMassCont{
  width: 85%;
  z-index: 	50;
  height: 200px;
	}
	.servicesCont{
		display: flex;
		flex-direction: row;
		display: flex;
		flex-direction: row;
		align-items: 	center;
		justify-content: center;
	}
}
       @media screen and (min-width:320px) and (max-width:480px){
             *{
margin: 0px;
padding:0px;
box-sizing: border-box;
  }
	.services-content{
		text-align: center;
		padding: 20px;
		overflow-y: auto;
		overflow-x: hidden;
		position: absolute;
		top: 0px;
		left: 0px;
		width:100%;
		height: 100%;

	}
	.services-content h1{
		font-family: cursive;
	}
	.services-content label{
		font-weight: 600;
		font-size: 25px;
	}
	.services-content p{
		font-size: 20px;
		margin-top: 10px;
	}
	.services_Offer img{
		width: 95%;
		height: 70%;
		position: relative	;
		top:50px;
	}
	
	.services_Offer{
		width: 100%;		
		height: 300px;
		padding: 0px;
		margin-top: 60px;
		display: flex;
		flex-direction: 	column;
		align-items: 	center;
	 justify-content: 	center;
	}
	
	.services_Offer .dataMassCont{
  width: 85%;
  z-index: 	50;
  height: 200px;

	}
}
</style>
<body>
	<div class="services-content">
<h1>Welcome </h1>
<label>OUR SERVICES </label>
<p> For us, service implies beng close to our customers ans reacting quickly
	when required.<br>
	As a matter of fact, we care about customer satisfication and we pioritize you<br>
infinity provide services as  follows</p>
<div class="servicesCont">
<div class="services_Offer">
	<img src="./img/1.png">
	<div class="dataMassCont shadow bg-light">
<label>Massage</label>
<p>Spa massage is an overall wellness treatment with the purpose to relax the mind.</p>
</div>
</div>

<div class="services_Offer">
	<img src="./img/1.png">
	<div class="dataMassCont shadow bg-light">
<label>Body Scrub</label>
<p>A scrub or body polish is a spa treatment which exfoliates the skin on your body living.</p>
</div>
</div>


<div class="services_Offer">
	<img src="./img/1.png">
	<div class="dataMassCont shadow bg-light">
<label>Massage + Steam & Sauna</label>
<p>A massage sauna is great for relaxing muscles, relieving tension is the body as well.</p>
</div>
</div>
</div>

	</div>
</body>
</html>