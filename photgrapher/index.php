<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photo Gallery</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--Navbar section start-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Photo Gallery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#nature">Nature</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#architecture">Architecture</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#travel">Travel</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!--Navbar section end-->

    <!--Slide section start-->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/archi1.jpg" class="d-block w-100" alt="architecture">
            <div class="carousel-caption d-none d-md-block">
                <h3>Architecture</h3>      </div>
            </div>
            <div class="carousel-item">
            <img src="images/nat1.jpg" class="d-block w-100" alt="nature">
            <div class="carousel-caption d-none d-md-block">
                <h3>Nature</h3>      </div>
            </div>
            <div class="carousel-item">
            <img src="images/trav1.jpg" class="d-block w-100" alt="travel">
            <div class="carousel-caption d-none d-md-block">
                <h3>Travel</h3>      </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--Slide section end-->

    <!--Categories section start-->
    <section id="nature" class="my-4">
        <div class="py-4">
            <h2 class="text-center">
                <span class="cat">Nature</span>
                <button class="btn  shadow p-1 m-1 bg-white rounded" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                    <i class="fas fa-plus-circle " style='font-size:25px'></i>
                </button>
            </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nat2.jpg" class="img-fluid pb-3" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nat3.jpg" class="img-fluid pb-3" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nat4.jpg" class="img-fluid pb-3" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="architecture" class="my-4">
        <div class="py-4">
            <h2 class="text-center">
                <span class="cat">Architecture</span>
                <a type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                    <i class="fas fa-plus-circle shadow p-1 mb-2 bg-white rounded" style='font-size:20px'></i>
                </a>
            </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/archi2.jpg" class="img-fluid pb-3" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/archi3.jpg" class="img-fluid pb-3" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/archi4.jpg" class="img-fluid pb-3" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="travel" class="my-4">
        <div class="py-4">
            <h2 class="text-center">
                <span class="cat">Travel</span>&nbsp;
                <a type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                    <i class="fas fa-plus-circle shadow p-1 mb-2 bg-white rounded" style='font-size:20px'></i>
                </a>
            </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/trav5.jpg" class="img-fluid pb-3" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/trav3.jpg" class="img-fluid pb-3" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/trav4.jpg" class="img-fluid pb-3" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--Categories section end-->

    <!--Modal section start-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
            </div>
        </div>
    </div>
    <!--Modal section end-->

    <!--Contact section start-->
    <section id="contact" class="my-4">
        <div class="py-4">
            <h2 class="text-center">Contact Us</h2>
        </div>
        
        <div class="w-50 m-auto">
            <?php
                if (isset($_SESSION['status'])) {
                    ?>
                    <div class="form-group alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['status']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                    
                    unset($_SESSION['status']);
                }
            ?>
            <form action="about.php" method="post">
                <div class="form-group">
                    <label for="name">Name*:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email*:</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="number">Phone number:</label>
                    <input type="text" name="number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea type="textarea" name="message" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>
    <!--Contact section end-->

    <!--About section start-->
    <section id="about" class="my-4">
        <div class="py-4">
            <h2 class="text-center">About</h2>
        </div>
        <div class="container-fluid">
            <h3 class="text-center">Abdellah</h3><br>
            <p class="text-center"><b>I am a passionate photographer interested in Architecture, Nature an Travel Photography.
                I am a full time frelancer with a experience of 5 years.
            </b></p>
        </div>
    </section>
    <!--About section end-->
    


    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>