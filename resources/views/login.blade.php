<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/stylelogin.css') }}" rel="stylesheet">
</head>

<style>
    .main {
        height: 100vh;
        <body> box-sizing: border-box;
    }

    .login-box {
        width: 500px;
        border: solid 1px;
        padding: 30px
    }

    form div {
        margin-bottom: 15px
    }
</style>

<body>
    <!-- partial:index.partial.html -->
    <div class="section">
            <div class="container">
                <div class="row full-height justify-content-center">
                    <div class="col-12 text-center align-self-center py-5">
                        <div class="section pb-5 pt-5 pt-sm-2 text-center">
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">
                                    <div class="card-front">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">Log In</h4>
                                                <div class="form-group">
                                                    <input type="text" name="username" class="form-style" placeholder="User Name" id="username" autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>	
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style" placeholder="Your Password" id="password" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <a href="submit" class="btn mt-4">submit</a>
                                              </div>
                                              <a href="register" class="btn mt-4">Register</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>