<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Su Finance!</title>
    <!--Bootstrap 4 Link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center">

                    <img src="assets/img/logo.png" alt="logo" style="width:140px; height:auto ">

                </div><!-- End Logo -->

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="pt">
                            <h5 class="text-center">Create an Account</h5>
                            <p class="text-center small">Enter your personal details to create account</p>
                        </div>

                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-12">
                                <label for="yourName" class="form-label">Your Name</label>
                                <input type="text" name="name" class="form-control" id="yourName" required>
                                <div class="invalid-feedback">Please, enter your name!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Your Email</label>
                                <input type="email" name="email" class="form-control" id="yourEmail" required>
                                <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" name="username" class="form-control" id="yourUsername" required>
                                    <div class="invalid-feedback">Please enter a username.</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="yourPassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="yourPassword" required>
                                <div class="invalid-feedback">Please enter your password!</div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                    <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Create Account</button>
                            </div>
                            <div class="col-12">
                                <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
</body>

</html>