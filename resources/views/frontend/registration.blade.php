<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhurr - registration Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- =======custome css======== -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <!-- ================= fav icon ======================= -->
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <!--============font awesome cdn============ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Owl Carousel CSS -->
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- owl corousel animation css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        section {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <section class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 ">
                    <div class="registration-form">
                        <h4 class="text-center">Registration</h4>
                        <form>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Firstname">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Lastname">
                                </div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Mobile number">
                                </div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" aria-describedby="emailHelp"
                                        placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-12">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-12">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <button type="submit" class="btn common__btn px-md-5 rounded px-3">Submit</button>
                            </div>
                            <div class="form-row justify-content-end mt-3">
                                <a href="login.html" class="">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>
</body>