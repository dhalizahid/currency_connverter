
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto pt-5 ">
                    <div class="main-bg p-5">
                        <div class="inner-div">
                            <div class="row d-flex">
                                <div class="col-md-6 left-site mx-auto">
                                    <h2 class="pt-3">Login Page</h2>
                                    <form action="../controller/login.php" method="POST" enctype="multipart/form-dara">
                                        <div class="col-md-10 px-0 mt-3">
                                            <div class="input-group">
                                                <input type="email" class="form-control" name="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-10 px-0 mt-3">
                                            <div class="input-group">
                                                <input type="password" name="password"placeholder="Password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="d-grid gap-1 col-5 px-0 mt-2 btn">
                                        <input type="submit" class="btn btn-primary" name="submit" value="Login">
                                        </div>
                                        <div>
                                            <a class="btn btn-warning btn-sm" href="register.php">Registation</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6  ps-0">
                                    <div class="right-site ">
                                        <img src="../img/login_page.jpg" class="img-fluid banner w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js">

</html>