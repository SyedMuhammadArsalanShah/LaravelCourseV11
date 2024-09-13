<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <h1>{{ $name }}</h1>

    <h2>English : {{ $english }}</h2>
    <h2>Urdu : {{ $urdu }}</h2>
    <h2>Islamiyat : {{ $islamiyat }}</h2>


    @php
        $obtained = $english + $urdu + $islamiyat;

        $per = ($obtained / 300) * 100;
    @endphp

    <h1>
       Obtained Marks  {{ $obtained }}

    </h1>

  <h1> Percentage  {{ $per }} %</h1>

    @if ($per <= 100 && $per >= 80)
        {{ 'grade A1' }}
    @elseif ($per <= 79 && $per >= 70)
        {{ 'grade A' }}
    @elseif ($per <= 69 && $per >= 60)
        {{ 'grade B' }}
    @elseif ($per <= 59 && $per >= 50)
        {{ 'grade C' }}
    @elseif ($per <= 49 && $per >= 40)
        {{ 'grade D' }}
    @else
        {{ 'IU jaien ' }}
    @endif





</body>

</html>
