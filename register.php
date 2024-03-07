<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Heelibrary Register</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/regstyle.css'>
</head>
<body>
    <div class="container">
        <div class="conten">
        <div class="card">
            <div class="row">
                <h1>Register to enjoy reading at Heelibrary!</h1>
                </div>
                <div class="row">
                    <form action="action/pregis.php" method="post">
                    <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="fullname" required id="fullname">
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" required id="email">
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" required id="username">
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required id="password">
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <label for="level" class="option-select">Level</label>
                            <select name="level" id="level">
                                <option selected>-Select this Option-</option>
                                <option value="peminjam">Pengguna</option>
                            </select>
                        </div>
                        </div>
                        
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                    <p class="mt-3">Already have an Account? Sign In   <a href= "index.php" class="btn btn-primary">Here!</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>