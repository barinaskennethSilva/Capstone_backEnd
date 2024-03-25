@include('header')

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modern Calendar</title>
    <style>
         @media screen and (min-width:320px) and (max-width:480px){
      .container{
  width:100%;
  height:100% !important;
  position:absolute;
  left:0px;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
}
 .calendar {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
          .calendar th {
            background-color: #f2f2f2;
            color: #333;
            padding: 15px;
            text-align: left;
        }

        .calendar td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }

        .calendar td.today {
            background-color: #f0f8ff;
        }

        .calendar td.other-month {
            color: #bbb;
        }

        .calendar td:hover {
            background-color: #f5f5f5;
            cursor: pointer;
        }

        .month-navigation {
            margin-bottom: 20px;
        }

        .month-navigation a {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border-radius: 3px;
            font-size: 25px;
            margin:0 30px;
        }

        .month-navigation a:hover {
            background-color: #0056b3;
        }
        .container span{
            font-size: 24px;
            font-style: italic;
            font-weight: 600;
        }
}
    @media screen and (min-width:1024px){

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
        /* Style the calendar */
        .calendar {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .calendar th {
            background-color: #f2f2f2;
            color: #333;
            padding: 15px;
            text-align: left;
        }

        .calendar td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }

        .calendar td.today {
            background-color: #f0f8ff;
        }

        .calendar td.other-month {
            color: #bbb;
        }

        .calendar td:hover {
            background-color: #f5f5f5;
            cursor: pointer;
        }

        .month-navigation {
            margin-bottom: 20px;
        }

        .month-navigation a {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border-radius: 3px;
            font-size: 35px;
            margin:0 10px;
        }

        .month-navigation a:hover {
            background-color: #0056b3;
        }
        .container span{
            font-size: 45px;
            font-style: italic;
            font-weight: 600;
        }
    }
    </style>
</head>
<body>
<div class="container">
    <div class="month-navigation">
        <a href="{{ route('calendar', ['year' => $prevYear, 'month' => $prevMonth]) }}"><i class="bi bi-chevron-left"></i></a>
        <span>{{ $currentMonth->format('F Y') }}</span>
        <a href="{{ route('calendar', ['year' => $nextYear, 'month' => $nextMonth]) }}"><i class="bi bi-chevron-right"></i></a>
    </div>

<table class="calendar">
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
</body>
</html>
