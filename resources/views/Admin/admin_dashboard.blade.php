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
<div class="container">

<div class="pageImg">
<div class="cont-data">
  <button class="btn btn-dark fw-bold" style="position:relative;left: 100px;height:50px;width:15%;color: #fff;">View</button>
  <button class="btn btn-dark fw-bold" style="position:relative;left: 310px;height:50px;width:15%;color: #fff;">View</button>
  <button class="btn btn-dark fw-bold" style="position:relative;left: 550px;height:50px;width:15%;color: #fff;">View</button>
</div>
</div>

    <canvas id="appointmentChart" width="400" height="400"></canvas>



</div>




<style scoped>
@media screen and (min-width:360px) and (max-width:480px){
.container{
  with:50% !important;
  height:100vh;
  position: relative;
  left: 120px;
}
.card img{
height:130px;
}

}
@media screen and (min-width:1024px){
.container{
  width:80% !important;
  height:100vh;
  position: relative;
  left: 153px;
  padding: 0px;
}
.pageImg{
	width: 100%;
	height: 92.5%;
	background-image: url({{ asset('./AdminPic/JillieJens.png') }});
	background-size: 100% 100%;
  display: flex;
  justify-content: center;
 align-items: center;
 }
.cont-data{
  display: flex;
  width: 85%;
  position: relative;
  bottom: 115px;
  left: 50px;
}
}
</style>
 <script>
        var ctx = document.getElementById('appointmentChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Customers with Appointments', 'Customers without Appointments'],
                datasets: [{
                    label: 'Appointment Percentage',
                    data: [{{ $percentage }}, {{ 100 - $percentage }}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)', // Red for customers with appointments
                        'rgba(54, 162, 235, 0.2)' // Blue for customers without appointments
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>