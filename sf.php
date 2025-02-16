<!DOCTYPE html>                     
<html lang="en">                
    <head>                  
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>-Sol Flix O-SF,공상과학-</title>
        <!-- Favicon-->     
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/style.css?ver=0.1" rel="stylesheet" />
        <?php include_once("lib/select.php"); ?>
    </head>                         
    <body>                      
        <!-- Navigation-->  
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">SF/공상과학</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>        
                </div>              
            </div>                  
        </nav>                      
        <!-- Header-->              
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">SF/공상과학</h1>
                    <p class="lead fw-normal text-white-50 mb-0">추 천 목 록</p>
                </div>  
            </div>          
        </header>           
        <!-- Section-->     
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href=<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[0]."/".$fname[0].".mp4" ?>><img class="card-img-top" src="<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[0]."/".$fname[0]."th.jpg" ?>" alt="..." /></a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $title[0]; ?></h5>
                                    <!-- Product price-->
                                    <?php echo $info[0]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href=<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[1]."/".$fname[1].".mp4" ?>><img class="card-img-top" src="<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[1]."/".$fname[1]."th.jpg" ?>" alt="..." /></a>
<!-- Product details-->
                            <div class="card-body p-4">
<div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $title[1]; ?></h5>
                                    <!-- Product price-->
                                    <?php echo $info[1]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href=<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[2]."/".$fname[2].".mp4" ?>><img class="card-img-top" src="<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[2]."/".$fname[2]."th.jpg" ?>" alt="..." /></a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $title[2]; ?></h5>
                                    <!-- Product price-->
                                    <?php echo $info[2]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href=<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[3]."/".$fname[3].".mp4" ?>><img class="card-img-top" src="<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[3]."/".$fname[3]."th.jpg" ?>" alt="..." /></a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $title[3]; ?></h5>
                                    <!-- Product price-->
                                    <?php echo $info[3]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href=<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[4]."/".$fname[4].".mp4" ?>><img class="card-img-top" src="<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[4]."/".$fname[4]."th.jpg" ?>" alt="..." /></a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $title[4]; ?></h5>
                                    <!-- Product price-->
                                    <?php echo $info[4]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href=<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[5]."/".$fname[5].".mp4" ?>><img class="card-img-top" src="<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[5]."/".$fname[5]."th.jpg" ?>" alt="..." /></a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $title[5]; ?></h5>
                                    <!-- Product price-->
                                    <?php echo $info[5]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href=<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[6]."/".$fname[6].".mp4" ?>><img class="card-img-top" src="<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[6]."/".$fname[6]."th.jpg" ?>" alt="..." /></a>
 <!-- Product details-->
<div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $title[6]; ?></h5>
                                    <!-- Product price-->
                                    <?php echo $info[6]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href=<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[7]."/".$fname[7].".mp4" ?>><img class="card-img-top" src="<?php echo "http://d3sh1zjnth8475.cloudfront.net/".$fname[7]."/".$fname[7]."th.jpg" ?>" alt="..." /></a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $title[7]; ?></h5>
                                    <!-- Product price-->
                                    <?php echo $info[7]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Snowman 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>