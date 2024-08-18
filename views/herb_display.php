<?php include ("services/HerbList.php") ?>

<div class="row g-4 justify-content-center">
    <?php
    // Check if the herb data is available in the session
    if (isset($_SESSION['herb_data']) && !empty($_SESSION['herb_data'])) {
        // Get the page number from the URL
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;

        // Define the number of items to display per page
        $items_per_page = 6;

        // Calculate the starting index for the current page
        $start_index = ($page - 1) * $items_per_page;

        // Get a slice of the herb data based on the current page
        $herb_data_slice = array_slice($_SESSION['herb_data'], $start_index, $items_per_page);

        // Loop through the sliced herb data to display each item
        foreach ($herb_data_slice as $herb_item) {
            ?>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                        <img src="<?php echo $herb_item['image_url']; ?>" class="img-fluid w-100 rounded-top" alt="" />
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">
                        <?php echo $herb_item['category']; ?>
                    </div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4><?php echo $herb_item['common_name']; ?></h4>
                        <p><?php echo $herb_item['description']; ?></p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0"><?php echo $herb_item['scientific_name']; ?> 
                                <?php echo $herb_item['type']; ?></p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary">
                                View <i class="fa fa-share me-2 text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo "No herb data available.";
    }
    ?>
</div>