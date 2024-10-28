<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - MyShop</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
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
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.html">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.html">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Product Details -->
    <div class="container mt-5">
        <div class="row">
            <!-- Product Image -->
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500" alt="Product Image" class="img-fluid">
            </div>

            <!-- Product Information -->
            <div class="col-md-6">
                <h2>Product Name</h2>
                <p class="lead">$50.00</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis, orci sit amet luctus malesuada, felis nisi vehicula velit, at sodales neque purus eget metus. Praesent dictum feugiat purus.</p>

                <!-- Quantity Selection -->
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" id="quantity" class="form-control" value="1" min="1">
                </div>

                <!-- Add to Cart Button -->
                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products (Optional) -->
    <div class="container my-5">
        <h3>Related Products</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="Related Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Related Product 1</h5>
                        <p class="card-text">$30.00</p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="Related Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Related Product 2</h5>
                        <p class="card-text">$40.00</p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="Related Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Related Product 3</h5>
                        <p class="card-text">$35.00</p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="Related Product 4">
                    <div class="card-body">
                        <h5 class="card-title">Related Product 4</h5>
                        <p class="card-text">$45.00</p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>