<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<style>
    .main {
        height: 100vh;
        box-sizing: border-box;
    }

    .login {
        width: 500px;
        border: solid 1px;
    }
</style>

<body>

    <div class="main d-flax justify-content-center align-items-center">
        <div class="login-box">
            <form action="" method="post">
                @csrf
                <div>
                    <input for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div>
                    <label for="paswpprd">Passord</label>
                    <input type="password" name="password" id="password">
                </div>
            </form>
        </div>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>