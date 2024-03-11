@include('header')
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jillie Jen's Massage Spa</title>

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <style type="text/css">
        .container{
  width:80%;
  height:92.5vh !important;
  position:relative;
  left:152px;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
}
th, td {
  padding: 10px;
  border: 1px solid #ccc;
}
    </style>
    <div class="container">

<!-- calendar.blade.php -->

<h1>Calendar</h1>

<div class="calendar-navigation">
    <a href="{{ route('calendar', ['month' => $prevMonth, 'year' => $prevYear]) }}">Previous Month</a>
    <a href="{{ route('calendar', ['month' => $nextMonth, 'year' => $nextYear]) }}">Next Month</a>
</div>

@php
    $weeks = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
@endphp

<h2>{{ $months[$currentMonth - 1] }} {{ $currentYear }}</h2>

<table border="1">
    <thead>
        <tr>
            <th>Week</th>
            @foreach($weeks as $week)
                <th>{{ $week }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @php
            $weekNumber = 1;
        @endphp
        @for ($i = 1; $i <= $daysInMonth; $i++)
            @if ($i == 1 || $firstDayOfMonth == 0) <!-- Start of a new row -->
                <tr>
                    <td>{{ $weekNumber }}</td>
            @endif
            <td>
                {{ $i }}
                @foreach ($events as $event)
                    @if (Carbon\Carbon::parse($event->date)->day == $i) <!-- Check if booking record exists for this day -->
                        <div class="event">
                            <h3>{{ $event->Client_name }}</h3>
                            <p>{{ $event->date }}</p>
                        </div>
                    @endif
                @endforeach
            </td>
            @if ($firstDayOfMonth == 6 || $i == $daysInMonth) <!-- End of the week or end of the month -->
                </tr>
                @php
                    $weekNumber++;
                @endphp
            @endif
            @if ($firstDayOfMonth < 6)
                @php
                    $firstDayOfMonth++;
                @endphp
            @else
                @php
                    $firstDayOfMonth = 0;
                @endphp
            @endif
        @endfor
    </tbody>
</table>


</div>

</body>
</html>