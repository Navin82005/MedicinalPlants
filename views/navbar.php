<?php
echo '<div class="container-fluid fixed-top">
<div class="container topbar bg-primary d-none d-lg-block">
    <div class="d-flex justify-content-between">
        <div class="top-info ps-2">
            
        </div>
        <div class="top-link pe-2">
            <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
            <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
            <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
        </div>
    </div>
</div>
<div class="container px-0">
    <nav class="navbar navbar-light bg-white navbar-expand-xl">
        <a href="/IP/MedicinalPlants" class="navbar-brand">
            <h1 class="text-primary display-6">மூலிகை வனம்</h1>
        </a>
        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="fa fa-bars text-primary"></span>
        </button>
        <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
                <a href="/IP/MedicinalPlants" class="nav-item nav-link">Home</a>
                <a href="/IP/MedicinalPlants/allHerbs.php" class="nav-item nav-link">வனம்</a>
                <a href="/IP/MedicinalPlants/search.php" class="nav-item nav-link">தேடல் விவரம்</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <div class="d-flex m-3 me-0">
                <button
                    class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"
                    data-bs-toggle="modal" data-bs-target="#searchModal"><i
                        class="fas fa-search text-primary"></i></button>
            </div>
        </div>
    </nav>
</div>
</div>';
