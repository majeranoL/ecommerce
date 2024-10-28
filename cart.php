<?php 
session_start();
    require_once("includes\header.php")
?>

    <!-- Navbar -->
    <?php require_once("includes\\navbar.php"); ?>

    <!-- Shopping Cart -->
    <div class="container mt-5">
        <div class="row">
            <!-- Shopping Cart Items -->
            <div class="col-md-8">
                <h3>Shopping Cart</h3>
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Product 1</td>
                            <td>1</td>
                            <td>$50.00</td>
                            <td>$50.00</td>
                        </tr>
                        <tr>
                            <td>Product 2</td>
                            <td>2</td>
                            <td>$25.00</td>
                            <td>$50.00</td>
                        </tr>
                        <tr>
                            <td>Product 3</td>
                            <td>1</td>
                            <td>$30.00</td>
                            <td>$30.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Cart Summary and Payment -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Order Summary</h4>
                    </div>
                    <div class="card-body">
                        <p>Subtotal: <span class="float-end">$130.00</span></p>
                        <p>Shipping: <span class="float-end">$10.00</span></p>
                        <hr>
                        <h5>Total: <span class="float-end">$140.00</span></h5>

                        <!-- Payment Method Selection -->
                        <div class="mt-4">
                            <label for="paymentMethod" class="form-label">Select Payment Method</label>
                            <select class="form-select" id="paymentMethod" required>
                                <option value="credit">Credit/Debit Card</option>
                                <option value="paypal">PayPal</option>
                                <option value="gcash">GCash</option>
                            </select>
                        </div>

                        <!-- Payment Details -->
                        <div class="mt-3">
                            <label for="cardNumber" class="form-label">Card/Account Number</label>
                            <input type="text" class="form-control" id="cardNumber" placeholder="Enter your card or account number" required>
                        </div>

                        <!-- Confirm Payment Button -->
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-success">Confirm Payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>