<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>View Reservations</h1>
    <table class="data-table">
        <thead>
            <tr>
                <th>Reservation ID</th>
                <th>Guest ID</th>
                <th>Room ID</th>
                <th>Check-In</th>
                <th>Check-Out</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $pdo->query("SELECT * FROM Reservations");
            while ($row = $query->fetch()) {
                echo "<tr>
                    <td>{$row['ReservationID']}</td>
                    <td>{$row['GuestID']}</td>
                    <td>{$row['RoomID']}</td>
                    <td>{$row['CheckInDate']}</td>
                    <td>{$row['CheckOutDate']}</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
