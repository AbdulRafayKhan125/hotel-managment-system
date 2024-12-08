<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>View Payments</h1>
    <table class="data-table">
        <thead>
            <tr>
                <th>Payment ID</th>
                <th>Reservation ID</th>
                <th>Method</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $pdo->query("SELECT * FROM Payments");
            while ($row = $query->fetch()) {
                echo "<tr>
                    <td>{$row['PaymentID']}</td>
                    <td>{$row['ReservationID']}</td>
                    <td>{$row['PaymentMethod']}</td>
                    <td>{$row['Amount']}</td>
                    <td>{$row['PaymentDate']}</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
