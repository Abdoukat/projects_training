<?php
    session_start();
    require "connection.php";
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
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/styles.css">
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
            <?php
                

                $query = "SELECT image FROM pictures WHERE category=\"architecture\" ORDER BY image DESC";
                $pictures = mysqli_query($con, $query);
                $data = $pictures->fetch_assoc();
                echo '<img src="uploads/'.implode($data).'" class="d-block w-100" alt="architecture">';
            ?>
            
            <div class="carousel-caption d-none d-md-block">
                <h3>Architecture</h3>      </div>
            </div>
            <div class="carousel-item">
            <?php
                

                $query = "SELECT image FROM pictures WHERE category=\"nature\" ORDER BY image DESC";
                $pictures = mysqli_query($con, $query);
                $data = $pictures->fetch_assoc();
                echo '<img src="uploads/'.implode($data).'" class="d-block w-100" alt="nature">';
            ?>
            <div class="carousel-caption d-none d-md-block">
                <h3>Nature</h3>      </div>
            </div>
            <div class="carousel-item">
            <?php
                

                $query = "SELECT image FROM pictures WHERE category=\"travel\" ORDER BY image DESC";
                $pictures = mysqli_query($con, $query);
                $data = $pictures->fetch_assoc();
                echo '<img src="uploads/'.implode($data).'" class="d-block w-100" alt="travel">';
            ?>
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

    <button id="myBtn" title="Go to top" onclick="topFunction()">Top <i class="fa-solid fa-arrow-up"></i></button>

    <!--Categories section start-->
    <section id="nature" class="my-4 mx-4">
        <div class="py-4 px-4">
            <h2 class="text-center">
                <span class="cat">Nature</span>
                <button class="btn  shadow p-1 m-1 bg-white rounded" data-toggle="modal" data-target="#pictureModal">
                    <i class="fas fa-plus-circle " style='font-size:25px'></i>
                </button>
            </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12 rounded">
                    <img src="uploads/nat2.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <img src="uploads/nat3.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <img src="uploads/nat4.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <img src="uploads/nat5.jpg" class="img-fluid rounded" alt="">
                </div> -->
                <?php
                    

                    $query = "SELECT * FROM pictures WHERE category=\"nature\"";
                    $pictures = mysqli_query($con, $query);
                    $data = $pictures->fetch_all();
                    foreach ($data as $data => $value) {
                        echo '
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
                                <img src="uploads/'.$value[1].'" class="img-fluid rounded" alt="'.$value[1].'">
                            </div>
                        ';
                    }
                    
                ?>
            </div>
        </div>
    </section>
    
    <section id="architecture" class="my-4 mx-4">
        <div class="py-4">
            <h2 class="text-center">
                <span class="cat">Architecture</span>
                <button class="btn  shadow p-1 m-1 bg-white rounded" data-toggle="modal" data-target="#pictureModal">
                    <i class="fas fa-plus-circle " style='font-size:25px'></i>
                </button>
            </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <img src="uploads/archi2.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <img src="uploads/archi3.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <img src="uploads/archi4.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <img src="uploads/archi5.jpg" class="img-fluid rounded" alt="">
                </div> -->
                <?php
                    

                    $query = "SELECT * FROM pictures WHERE category=\"architecture\"";
                    $pictures = mysqli_query($con, $query);
                    $data = $pictures->fetch_all();
                    foreach ($data as $data => $value) {
                        echo '
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
                                <img src="uploads/'.$value[1].'" class="img-fluid rounded" alt="'.$value[1].'">
                            </div>
                        ';
                    }
                    
                ?>
            </div>
        </div>
    </section>

    <section id="travel" class="my-4 mx-4">
        <div class="py-4">
            <h2 class="text-center">
                <span class="cat">Travel</span>&nbsp;
                <button class="btn  shadow p-1 m-1 bg-white rounded" data-toggle="modal" data-target="#pictureModal">
                    <i class="fas fa-plus-circle " style='font-size:25px'></i>
                </button>
            </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <img src="uploads/trav5.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <img src="uploads/trav3.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <img src="uploads/trav4.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <img src="uploads/trav2.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <img src="source.php?id=1" class="img-fluid rounded" alt="">
                </div> -->
                <?php
                    

                    $query = "SELECT * FROM pictures WHERE category=\"travel\"";
                    $pictures = mysqli_query($con, $query);
                    $data = $pictures->fetch_all();
                    foreach ($data as $data => $value) {
                        echo '
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
                                <img src="uploads/'.$value[1].'" class="img-fluid rounded" alt="'.$value[1].'">
                            </div>
                        ';
                    }
                    
                ?>
            </div>
        </div>
    </section>
    <!--Categories section end-->

    <!--Modal section start-->
    <div class="modal fade" id="pictureModal" tabindex="-1" aria-labelledby="pictureModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Picture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="uploadFile.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file" class="col-form-label">Image:</label>
                        <div class="form-group">
                            <input type="file" name="file" class="form-control-file" id="file" required>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category" class="col-form-label">Category:</label>
                        <!-- <input type="text" class="form-control" id="category" name="category" value="travel"> -->
                        <select class="custom-select custom-select-lg mb-3" name="category" id="category" required>
                            <option value="" disabled selected>- Choose a category -</option>
                            <option value="nature">Nature</option>
                            <option value="architecture">Architecture</option>
                            <option value="travel">Travel</option>
                        </select>
                        <div class="invalid-feedback">More example invalid feedback text</div>
                    </div>
                    
                    <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--Modal section end-->

    <!--Contact section start-->
    <section id="contact" class="my-4">
        <div class="py-4">
            <h2 class="cat text-center">Contact Us</h2>
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
            <form action="contact.php" method="post">
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
            <h2 class="cat text-center">About</h2>
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
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>