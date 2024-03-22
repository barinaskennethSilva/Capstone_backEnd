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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
    <style type="text/css">
        @media screen and (min-width:1024px){
.container{
  width:80% !important;
  height:92.9vh;
  position: relative;
  top:0px;
  left: 305px;
  padding: 0px;
  margin: 0px;
  display: flex;
  justify-content: center;
  align-items: center;
  }
  .footer{
    width: 100%;
    height: 200px;
    display: flex;
    flex-direction: row;
  }
  .left_container{
    width: 50%;
    height: 100%;
  }
  .footer{
    width: 100%;
    height: 200px;
    padding: 20px;
  }
  .right_container{
    width: 50%;
    height: 100%;
  }
  .emplo_data{
    height: 150px;
    width: 50%;
    border-radius: 10px;
  }
   .emplo_data label{
    font-size: 30px;
   }
   .cal-data{
    width: 100%;
    height: 100px;
   }
   .calendar{
width: 90%;
height: 50vh;
background-color: #fff;
border-radius: 10px;
margin: auto;
   }
   .cal-table{
    width: 100%;
    height: 80%;
    margin-left: 20px;
   }
   .month-navigation {
            margin-bottom: 20px;
            text-align: center;
            padding: 10px;
        }

        .month-navigation a {
            text-decoration: none;
            padding: 5px 5px;
            color: #111;
            border-radius: 3px;
            font-size: 25px;
/*            margin:0 10px;*/
        }

        .month-navigation a:hover {
            background-color: #0056b3;
        }
        .month-navigation span{
            font-size: 25px;
            font-style: italic;
            font-weight: 600;
        }
        .calendar td.today {
            background-color: #f0f8ff;
        }
        .chart-data{
            width: 90%;
height: 50vh;
background-color: #fff;
border-radius: 10px;
margin: auto;
        }  
        .formDiv{
            height: 93vh;
            padding: 10px;
        } 
        .topDivForm, .topDivFilter{
            width: 100%;
            padding: 10px;
            background-color: #fff;
            border-radius: 10px;
            text-align: center;
            height: 20vh;
        }
         .topDivForm h2{
            font-size: 20px;
            font-style: italic;
         }
         .topDivForm label,  .topDivFilter label{
            font-size:30px;
         }
         .formFilter{
            background-color: #fff;
            border-radius: 10px;
            margin-top: 40px;
         }
         
}
</style>
<div class="container">
<div class="left_container bg-light">
    <div class="footer bg-light">
            

        <div class="emplo_data bg-white">
            <div class="d-flex flex-column p-3">
            <span class="fw-bold text-dark">Total Earnings</span>
            @foreach ($doneData as $record)
            <label>{{ $record->price }}</label>
             @endforeach
        </div>
                </div>

<div class="emplo_data bg-white ms-2">
                <div class="d-flex flex-column p-3">
            <span class="fw-bold text-dark">Total Clients</span>
            @foreach ($doneData as $record)
            <label> {{ $totalClients }}</label>
                         @endforeach

        </div>
</div>
          

    </div>
    <div class="chart-data">
    <canvas id="appointmentChart" class="me-3" width="200" height="150"></canvas>
    </div>
</div>


<div class="right_container bg-light">
    <div class="footer bg-light">

        <div class="emplo_data bg-white">
            <div class="d-flex flex-column p-3">
            <span class="fw-bold text-dark">Pending Request Amount</span>
 @foreach ($pendingData as $record)
            <label> {{  $record->price }}</label>
                         @endforeach        </div>
                </div>

<div class="emplo_data bg-white ms-2">
                <div class="d-flex flex-column p-3">
            <span class="fw-bold text-dark">Total Employees</span>
            <label>24</label>
        </div>
</div>
    </div>

<div class="calendar">
 <div class="month-navigation">
        <a class="bg-light" style="float:left;margin-left: 20px" href="{{ route('Profit_report', ['year' => $prevYear, 'month' => $prevMonth]) }}"><i class="bi bi-chevron-left"></i></a>
        <span>{{ $currentMonth->format('F Y') }}</span>
        <a class="bg-light" style="float:right;margin-right: 20px" href="{{ route('Profit_report', ['year' => $nextYear, 'month' => $nextMonth]) }}"><i class="bi bi-chevron-right"></i></a>
    </div>

<table class="cal-table">
    <thead>
    <tr>
        <th>Sun</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
    </tr>
    </thead>
    <tbody>
    @foreach($weeks as $week)
        <tr>
            @foreach($week as $day)
                <td class="{{ $day['currentMonth'] ? '' : 'other-month' }} {{ $day['isToday'] ? 'today' : '' }}">
                    {{ $day['day'] }}
                </td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
</div>
</div>


    <!-- Add navigation dropdown for selecting previous and next months -->
    <div class="formDiv bg-primary">
<div class="topDivForm">
    <h2>Month</h2>
    <label>{{ $currentMonth->format('F Y') }}</label>
</div>
        <form class="formFilter" action="{{ route('Profit_report') }}" method="GET">
            <div class="topDivFilter">
    <label for="month">Monitor Income Profit</label>
</div>
<div class="p-2">
        <label for="year" class="fw-bold">Month:</label>
    <select name="month" id="month" class="form-control">
        @for ($i = 1; $i <= 12; $i++)
            <option value="{{ $i }}" {{ $i == $prevMonth->month ? 'selected' : '' }}>{{ Carbon\Carbon::createFromDate($prevMonth->year, $i, 1)->format('F') }}</option>
        @endfor
    </select>
    
    <label for="year" class="mt-3 fw-bold">Year:</label>
    <select name="year" id="year" class="form-control">
        @for ($y = date('Y') - 5; $y <= date('Y') + 5; $y++)
            <option value="{{ $y }}" {{ $y == $prevMonth->year ? 'selected' : '' }}>{{ $y }}</option>
        @endfor
    </select>
    
    <button type="submit" class=" mt-3 btn btn-primary w-100">Filter</button>
</div>
</form>
</div>
</div>
<script>
    var ctx = document.getElementById('appointmentChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar', // Change type to 'bar' for a bar chart
    data: {
        labels: ['Customers with Appointments', 'Customers without Appointments', 'Booking Requests'],
        datasets: [{
            label: 'Appointment Percentage',
            data: [{{ $percentage }}, {{ 100 - $percentage }}, 0], // Initial value for booking requests
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)', // Red for customers with appointments
                'rgba(54, 162, 235, 0.2)', // Blue for customers without appointments
                'rgba(255, 206, 86, 0.2)' // Yellow for booking requests
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
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


// Fetch and update data for booking requests
fetch('http://127.0.0.1:8000/api/book_req')
    .then(response => response.json())
    .then(data => {
        myChart.data.datasets[0].data[2] = data.bookingRequests;
        myChart.update();
    })
    .catch(error => {
        console.error('Error fetching booking requests:', error);
    });


    </script>
</body>
</html>
