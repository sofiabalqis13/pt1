<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Welcome to SB Organic</h2>
        <p class="text-muted mb-0">Pure, plant-powered organic face serums for every skin type</p>
    </div>
</div>
 
<div id="homeCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner rounded shadow-sm">
        <div class="carousel-item active">
            <div class="bg-success text-white text-center p-5">
                <i class="bi bi-flower1 display-1"></i>
                <h3 class="mt-3">100% Organic Ingredients</h3>
                <p class="mb-0">Every serum is made from certified organic botanicals.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-primary text-white text-center p-5">
                <i class="bi bi-droplet-half display-1"></i>
                <h3 class="mt-3">Deep Hydration</h3>
                <p class="mb-0">Lightweight formulas that absorb fast and keep skin glowing.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="bg-dark text-white text-center p-5">
                <i class="bi bi-heart display-1"></i>
                <h3 class="mt-3">Gentle on Sensitive Skin</h3>
                <p class="mb-0">No parabens, no sulfates, no synthetic fragrance.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
 
<div class="row g-4">
    <div class="col-md-3">
        <a href="products.php" class="text-decoration-none">
            <div class="card shadow-sm h-100 text-center">
                <div class="card-body">
                    <i class="bi bi-box-seam-fill text-primary fs-1"></i>
                    <h5 class="mt-2 text-dark">Products</h5>
                    <small class="text-muted">Manage serum inventory</small>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="customers.php" class="text-decoration-none">
            <div class="card shadow-sm h-100 text-center">
                <div class="card-body">
                    <i class="bi bi-people-fill text-success fs-1"></i>
                    <h5 class="mt-2 text-dark">Customers</h5>
                    <small class="text-muted">Manage customer records</small>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="staffs.php" class="text-decoration-none">
            <div class="card shadow-sm h-100 text-center">
                <div class="card-body">
                    <i class="bi bi-person-badge-fill text-warning fs-1"></i>
                    <h5 class="mt-2 text-dark">Staffs</h5>
                    <small class="text-muted">Manage staff records</small>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="orders.php" class="text-decoration-none">
            <div class="card shadow-sm h-100 text-center">
                <div class="card-body">
                    <i class="bi bi-cart-fill text-danger fs-1"></i>
                    <h5 class="mt-2 text-dark">Orders</h5>
                    <small class="text-muted">Manage customer orders</small>
                </div>
            </div>
        </a>
    </div>
</div>
 
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>