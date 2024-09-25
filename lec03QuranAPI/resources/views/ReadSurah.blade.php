<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>

        body{
            direction: rtl;
        }
        p {
            font-family: 'Amiri Quran', serif;
        }
    </style>
</head>
<body>
    @foreach ($alldatas as $item)
        <p>

            {{ $item['text'] }}
        </p>
    @endforeach
</body>

</html>
