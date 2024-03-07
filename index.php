<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Heelibrary Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>
<body>
    <div class="container">
        <div class="conten">
        <div class="card">
            <div class="row">
                <h1>Login to Continue!</h1>
                </div>
                <div class="row">
                    <form action="action/ceklogin.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" required id="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required id="password">
                        </div>
                        <button type="submit" class="btn btn-success">Sign In</button>
                    </form>
                    <p class="mt-3">Don't have an Account? Register   <a href= "register.php" class="btn btn-primary">Here!</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>