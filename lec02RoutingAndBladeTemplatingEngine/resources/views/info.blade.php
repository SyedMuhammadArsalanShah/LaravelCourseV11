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
    <h1>{{ $id }}</h1>
    <h1> {!! $student !!}</h1>

    <h1>{{ 'this is my web' }}</h1>

    <h1> {{ time() }}</h1>
    <h1> {{ date('m-d-y') }}</h1>






    @if ($name == 'ali')
        {{ 'this is an admin account' }}
    @elseif ($name == 'fatimah')
        {{ 'this is user account' }}
    @else
        {{ ' create an account ' }}
    @endif



    @unless ($name == 'sajid')
        {{ 'this verified account ' }}
    @endunless



    @isset($id)
        {{ 'user is from view ' }}
    @endisset



    <ul>

        @for ($i = 0; $i <= 10; $i++)
            <li> {{ $i }} </li>
        @endfor


    </ul>


    @php

        $j = 1;

    @endphp

    @while ($j <= 10)
        {{ 'index' . $j }}

        @php
            $j++;
        @endphp
    @endwhile






    @php

        $students = ['ali', 'fatimah', 'hasan', 'hussain'];
    @endphp



    @foreach ($students as $item)
        {{ $item }}
    @endforeach








</body>

</html>
