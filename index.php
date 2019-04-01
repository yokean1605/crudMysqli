<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="app mt-4">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h3 class="font-weight-bold mb-4">Tambah Data</h3>
                    <form action="action/insert.php" method="post">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="nama" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>