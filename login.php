<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="card bg-light">
            <div class="card-body">
                <form action="order.html" class="form">
                    <div class="error" style="display: none">
                    <!-- tempat untuk menampilkan error message -->
                    </div>
                    <div class="form-group">
                        <label for="email"><b> Email address </b></label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd"><b>Password</b> </label>
                        <input type="password" class="form-control" placeholder="Enter password" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" onclick="validate()">Login</button>
                </form>
            </div>
        </div>
    </div>

    </div>
    <script src="login.js"></script>
</body>

</html>