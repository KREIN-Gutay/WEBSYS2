<!DOCTYPE html>
<html>
<head>
    <title>Student Evaluation</title>
</head>
<body>

<h2>Student Evaluation System</h2>

<form method="GET" action="/evaluation">

    Name: <input type="text" name="name"><br><br>

    Prelim: <input type="number" name="prelim"><br><br>

    Midterm: <input type="number" name="midterm"><br><br>

    Final: <input type="number" name="final"><br><br>

    <button type="submit">Submit</button>
</form>


{{-- SHOW RESULT ONLY AFTER SUBMIT --}}
@if($prelim && $midterm && $final)

    @php
        $average = ($prelim + $midterm + $final) / 3;
    @endphp

    <h3>Result:</h3>

    Name: {{ $name }} <br>
    Average: {{ number_format($average,2) }} <br>

    {{-- LETTER GRADE --}}
    @if($average >= 90)
        Letter Grade: A <br>
    @elseif($average >= 80)
        Letter Grade: B <br>
    @elseif($average >= 70)
        Letter Grade: C <br>
    @elseif($average >= 60)
        Letter Grade: D <br>
    @else
        Letter Grade: F <br>
    @endif


    {{-- REMARKS --}}
    @if($average >= 75)
        Remarks: Passed <br>
    @else
        Remarks: Failed <br>
    @endif


    {{-- AWARD --}}
    @if($average >= 98)
        Award: With Highest Honors
    @elseif($average >= 95)
        Award: With High Honors
    @elseif($average >= 90)
        Award: With Honors
    @else
        Award: No Award
    @endif

@endif

</body>
</html>