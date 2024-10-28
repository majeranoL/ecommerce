<?php 
session_start();
require_once($_SERVER["DOCUMENT_ROOT"]."/app/config/Directories.php");
require_once(ROOT_DIR."includes/header.php");
?>

<?php require_once(ROOT_DIR."includes/navbar.php"); ?>

<?php
require_once(ROOT_DIR."views/components/page-guard.php");
?>


    <!-- Product Maintenance Form -->
    <div class="container my-5">
        <h2>Product Maintenance</h2>
        <form>
            <div class="row">
                <!-- Left Column: Product Image -->
                <div class="col-md-4 mb-3">
                    <label for="productImage" class="form-label">Product Image</label>
                    <input type="file" class="form-control" id="productImage" accept="image/*">
                </div>

                <!-- Right Column: Product Details -->
                <div class="col-md-8">
                    <div class="row">
                        <!-- Product Name -->
                        <div class="col-md-12 mb-3">
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="productName" placeholder="Enter product name">
                        </div>

                        <!-- Product Category -->
                        <div class="col-md-12 mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select id="category" class="form-select">
                                <option selected>Choose a category</option>
                                <option value="1">Electronics</option>
                                <option value="2">Fashion</option>
                                <option value="3">Home Appliances</option>
                                <!-- Add more categories as needed -->
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Number of Stocks -->
                        <div class="col-md-4 mb-3">
                            <label for="numberOfStocks" class="form-label">Number of Stocks</label>
                            <input type="number" class="form-control" id="numberOfStocks" placeholder="Enter number of stocks" oninput="calculateTotalPrice()">
                        </div>

                        <!-- Unit Price -->
                        <div class="col-md-4 mb-3">
                            <label for="unitPrice" class="form-label">Unit Price</label>
                            <input type="number" step="0.01" class="form-control" id="unitPrice" placeholder="Enter unit price" oninput="calculateTotalPrice()">
                        </div>

                        <!-- Total Price (Automatically Calculated) -->
                        <div class="col-md-4 mb-3">
                            <label for="totalPrice" class="form-label">Total Price</label>
                            <input type="text" class="form-control" id="totalPrice" placeholder="Total Price" readonly>
                        </div>
                    </div>

                    <!-- Product Description -->
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3" placeholder="Enter product description"></textarea>
                        </div>
                    </div>

                    <!-- Save Button (aligned to right) -->
                    <div class="row">
                        <div class="col-md-12 d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Save Product</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <?php  require_once(ROOT_DIR. "includes/footer.php"); ?>