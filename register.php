
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                        <?php
                           
                            if(isset($_GET['response'])){

                                if($_GET['response'] == 'successfully')
                                {
                                    echo "<p class='text-danger'>Bạn đã đăng kí thành công</p>";                            

                                }
                                if(isset($_GET['response']) == 'existed')
                                {                                  
                                    echo "<p class='text-danger'>Email đã tồn tại</p>";
                                    

                                }
                                
                            }


                        ?>

                        <form action="process-register.php" METHOD = "POST" class="mx-1 mx-md-4">

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" id="firstName" name="firstName" class="form-control" />
                            <label class="form-label" for="firstName">First Name</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" id="lastName" name="lastName" class="form-control" />
                            <label class="form-label" for="lastName">Last Name</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="email" id="email" name="email" class="form-control" />
                            <label class="form-label" for="email">Email</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="password" id="pass1" name="pass1" class="form-control" />
                            <label class="form-label" for="pass1">Password</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="password" id="pass2" name="pass2" class="form-control" />
                            <label class="form-label" for="pass2">Repeat your password</label>
                            </div>
                        </div>

                        <!-- <div class="form-check d-flex justify-content-center mb-5">
                            <input
                            class="form-check-input me-2"
                            type="checkbox"
                            value=""
                            id="form2Example3c"
                            />
                            <label class="form-check-label" for="form2Example3">
                            I agree all statements in <a href="#!">Terms of service</a>
                            </label>
                        </div> -->

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" class="btn btn-primary btn-lg" name="btnRegister">Register</button>
                        </div>

                        </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

  </body>
</html>