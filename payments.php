<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>Payment Management</h1>
    <p>View and manage payment records below:</p>

    <?php
    // Fetch Payments
    $query = $pdo->query("
        SELECT Payments.PaymentID, Guests.Name AS GuestName, Payments.PaymentMethod, Payments.PaymentDate, Payments.Amount
        FROM Payments
        JOIN Reservations ON Payments.ReservationID = Reservations.ReservationID
        JOIN Guests ON Reservations.GuestID = Guests.GuestID
    ");
    $payments = $query->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Payment ID</th>
                <th>Guest Name</th>
                <th>Payment Method</th>
                <th>Payment Date</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($payments as $payment): ?>
            <tr>
                <td><?= $payment['PaymentID'] ?></td>
                <td><?= $payment['GuestName'] ?></td>
                <td><?= $payment['PaymentMethod'] ?></td>
                <td><?= $payment['PaymentDate'] ?></td>
                <td><?= $payment['Amount'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
