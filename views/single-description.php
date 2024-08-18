<?php session_start(); ?>
<?php include("../services/HerbService.php"); ?>
<?php include("./navbar.php"); ?>
<?php include("./footer.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>மருத்துவ மூலிகைகள் - search</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../css/custom-style.css">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar start -->
    
    <!-- Navbar End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">மூலிகைகள்</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="/IP/MedicinalPlants">Home</a></li>
            <li class="breadcrumb-item active text-white">மூலிகைகள்</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    

    <!-- Single Herb Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <?php if (isset($_SESSION['search_results'])) {
                foreach ($_SESSION['search_results'] as $row) { ?>
                    <div class="row g-4 mb-5">
                        <div class="col-lg-8 col-xl-9">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="border rounded">
                                        <a href=<?php echo $row["image_url"] ?>>
                                            <img src=<?php echo $row["image_url"] ?> class="img-fluid rounded" alt=<?php echo $row["common_name"] ?>>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h4 class="fw-bold mb-3"><?php echo $row["common_name"] ?></h4>
                                    <p class="mb-3">வகை: <?php echo $row["category"] ?></p>
                                </div>
                                <div class="col-lg-12">
                                    <nav>
                                        <div class="nav nav-tabs mb-3">
                                            <button class="nav-link active border-white border-bottom-0" type="button"
                                                role="tab" id="nav-about-tab" data-bs-toggle="tab" data-bs-target=<?php echo "#nav-about" . $row["common_name"] ?>
                                                aria-controls=<?php echo "nav-about" . $row["common_name"] ?> aria-selected="true">விளக்கம்</button>
                                            <button class="nav-link border-white border-bottom-0" type="button" role="tab"
                                                id="nav-mission-tab" data-bs-toggle="tab" data-bs-target=<?php echo "#nav-mission" . $row["common_name"] ?>
                                                aria-controls=<?php echo "nav-mission" . $row["common_name"] ?> aria-selected="false">பயன்படு</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content mb-5">
                                        <div class="tab-pane active" id=<?php echo "nav-about" . $row["common_name"] ?> role="tabpanel"
                                            aria-labelledby="nav-about-tab">
                                            <p><?php echo $row["description"] ?></p>
                                            <p></p>
                                            <div class="px-2">
                                                <div class="row g-4">
                                                    <div class="col-6">
                                                        <div
                                                            class="row text-center align-items-center justify-content-center py-2">
                                                            <div class="col-6">
                                                                <p class="mb-0">பொறுப்பின்மை நாடு</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="mb-0"><?php echo $row["country_of_origin"] ?></p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="row bg-light text-center align-items-center justify-content-center py-2">
                                                            <div class="col-6">
                                                                <p class="mb-0">பிரிவு</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="mb-0"><?php echo $row["category"] ?></p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="row bg-light text-center align-items-center justify-content-center py-2">
                                                            <div class="col-6">
                                                                <p class="mb-0">வகை</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="mb-0"><?php echo $row["type"] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- USES -->
                                        <div class="tab-pane" id=<?php echo "nav-mission" . $row["common_name"] ?> role="tabpanel"
                                            aria-labelledby="nav-mission-tab">
                                            <div class="d-flex">
                                                <table class="usage-table">
                                                    <tr>
                                                        <th>அறிகுறிகள்</th>
                                                        <th>செயல்</th>
                                                        <th>பக்க விளைவுகள்</th>
                                                        <th>மருந்தை உட்கொள்ளுதல்</th>
                                                        <th>பிரதிபத்திகள்</th>
                                                    </tr>
                                                    <tr>
                                                    <?php
                                                        $plant_data = getPlantFromDesk($row["common_name"]); 
                                                        echo "<td>". $plant_data["indications"] ."</td>";
                                                        echo "<td>". $plant_data["action"] ."</td>";
                                                        echo "<td>". $plant_data["side_effects"] ."</td>";
                                                        echo "<td>". $plant_data["preparation"] ."</td>";
                                                        echo "<td>". $plant_data["contraindications"] ."</td>";
                                                    ?>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                // unset($_SESSION['search_results']);
            } ?>
        </div>
    </div>
    <!-- Single Herb End -->
    

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>