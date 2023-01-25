<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6">
                <h1 class="text-success my-3">Dobrodošli</h1>
                <hr>
                <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ime i prezime</th>
                        <th scope="col">Pol</th>
                        <th scope="col">Adresa</th>
                        <th scope="col">Datum rodjenja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $_SESSION['user']; ?></td>
                            <td><?php echo $_SESSION['gender']; ?></td>
                            <td><?php echo $_SESSION['adress']; ?></td>
                            <td><?php echo $_SESSION['date']; ?></td>
                            </tr>
                        <tr>                        
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>