<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>Add Payment</h1>
    <form method="POST">
        <label for="ReservationID">Reservation ID:</label>
        <input type="number" id="ReservationID" name="ReservationID" required>
        
        <label for="PaymentMethod">Payment Method:</label>
        <select id="PaymentMethod" name="PaymentMethod" required>
            <option value="Credit Card">Credit Card</option>
            <option value="Cash">Cash</option>
            <option value="Online">Online</option>
        </select>
        
        <label for="Amount">Amount:</label>
        <input type="number" id="Amount" name="Amount" required>
        
        <label for="PaymentDate">Payment Date:</label>
        <input type="date" id="PaymentDate" name="PaymentDate" required>
        
        <button type="submit" name="addPayment">Add Payment</button>
    </form>

    <?php
    if (isset($_POST['addPayment'])) {
        $reservationID = $_POST['ReservationID'];
        $method = $_POST['PaymentMethod'];
        $amount = $_POST['Amount'];
        $date = $_POST['PaymentDate'];

        $query = $pdo->prepare("INSERT INTO Payments (ReservationID, PaymentMethod, Amount, PaymentDate) VALUES (?, ?, ?, ?)");
        $query->execute([$reservationID, $method, $amount, $date]);

        echo "<p>Payment added successfully!</p>";
    }
    ?>
</div>

<?php include 'footer.php'; ?>
