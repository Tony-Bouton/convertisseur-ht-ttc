<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Résultat</h1>
    <div class="wrapper">
        <ul>

            @foreach ($list as $key=>$value)
            @if($key=='Taux de TVA')
            <li>{{ $key }}: {{$value}} %</li>
            @continue
            @endif
            <li>{{ $key }}: {{$value}} €</li>
            @endforeach
        </ul>
    </div>


</body>

</html>

<style>
    body {
        height: 100vh;
    }

    .wrapper {
        height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 3px 7px 20px grey;
        padding: 20px;
        border: grey solid 2px;
        border-radius: 10px;
    }


    li {
        list-style: none;
        font-size: 3em;
        letter-spacing: 5px;
        margin: 10px;
    }

    h1 {
        text-align: center;
    }
</style>