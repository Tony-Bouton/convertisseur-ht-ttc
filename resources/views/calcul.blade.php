<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <h1>Convertisseur ht <-> ttc </h1>
    <div class="wrapper">

        <form action="{{route('recap.showresult')}}" method="post">
            @csrf
            <label for="amount">Montant (€)</label>
            <input type="number" step="0.01" name="amount" id="amount" class="form-group col-md-2">
            <select name="htttc" id="" class="form-group col-md-2">
                <option value="HT">HT</option>
                <option value="TTC">TTC</option>

            </select>
            <label for="taux">Taux de TVA</label>
            <select name="taux" id="taux" class="form-group col-md-2">
                <option value="5.5">5.5%</option>
                <option value="10">10%</option>
                <option value="20">20%</option>
            </select>
            <input type="submit" value="Calculer" class="btn btn-dark">




        </form>

    </div>
</body>

</html>

<style>
    h1 {
        text-align: center;
        margin: 10vh;
        border: grey solid 2px;
        box-shadow: 3px 7px 20px grey;
        border-radius: 10px;
        padding: 20px;
        width: 20vw;
        margin-left: auto;
        margin-right: auto;

    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        border: grey solid 2px;
        box-shadow: 3px 7px 20px grey;
        padding: 20px;
        border: grey solid 2px;
        border-radius: 10px;

    }

    body {
        height: 100vh;
    }

    .wrapper {
        height: 30vh;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .form-group {
        width: 10vw;
        margin: 10px;
    }
</style>