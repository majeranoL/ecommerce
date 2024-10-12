<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List - MyShop</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar with Dropdown for User Account (Admin) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="homepage.html">MyShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-dashboard.html">Dashboard</a>
                    </li>

                    <!-- Dropdown for Admin User -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            AdminUser <!-- Replace with dynamic admin username -->
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.html">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Product List</h2>
            <!-- Add New Product Button -->
            <a href="product-maintenance.html" class="btn btn-success">Add New Product</a>
        </div>
        <p class="text-center">Manage all products in the catalog</p>
        <hr>
    </div>

    <!-- Product Cards Container -->
    <div class="container mt-3">
        <div class="row">
            <!-- Sample Product Card -->
            <!-- Loop through each product and generate a card dynamically -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Product Name 1</h5>
                        <p class="card-text">Category: Electronics</p>
                        <p class="card-text">Price: $100</p>
                        <p class="card-text">Stock: 50</p>
                        <a href="#" class="btn btn-primary">Edit Product</a>
                        <a href="#" class="btn btn-danger">Delete Product</a>
                    </div>
                </div>
            </div>

            <!-- Another Product Card Example -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Product Name 2</h5>
                        <p class="card-text">Category: Fashion</p>
                        <p class="card-text">Price: $50</p>
                        <p class="card-text">Stock: 25</p>
                        <a href="#" class="btn btn-primary">Edit Product</a>
                        <a href="#" class="btn btn-danger">Delete Product</a>
                    </div>
                </div>
            </div>

            <!-- Example for Another Product -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Product Name 3</h5>
                        <p class="card-text">Category: Home Appliances</p>
                        <p class="card-text">Price: $200</p>
                        <p class="card-text">Stock: 100</p>
                        <a href="#" class="btn btn-primary">Edit Product</a>
                        <a href="#" class="btn btn-danger">Delete Product</a>
                    </div>
                </div>
            </div>

            <!-- Add more product cards dynamically based on your backend data -->
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
