<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/main.js"></script>
    <title>User registration</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6">
                <h2 class="text-center py-5">Registracija</h2>
                <hr>
                <div class="response-error text-danger"></div><br>
                <form action="welcome.php" method="post" onsubmit="return false">
                    <div class="form-control">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Unesite ime...">
                    </div>
                    <div class="form-control">
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Unesite prezime...">
                    </div>
                    <div class="form-control">
                        <select name="gender" class="form-control" id="gender">
                            <option value="0">Izaberite pol</option>
                            <option value="1">Muski</option>
                            <option value="2">Zenski</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="date">Datum rodjenja:</label>
                        <input type="date" class="form-control" name="date" id="date">
                    </div>
                    <div class="form-control">
                        <textarea name="adress" class="form-control" id="adress" placeholder="Unesite adresu..."></textarea>
                    </div>
                    <div class="form-control">
                        <input type="text" class="form-control" name="city" id="city" placeholder="Unesite grad...">
                    </div>
                    <div class="form-control text-center">                        
                        <input type="checkbox" name="cbox" id="cbox">
                        <label for="cbox">Slažem se sa uslovima korišćenja.</label>
                    </div>
                    <div class="form-control text-center p-3">
                        <input type="Submit" class="btn btn-outline-success" value="Registracija" name="btn" id="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>