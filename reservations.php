<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>Reservation Management</h1>
    <p>View and manage reservations below:</p>

    <?php
    // Fetch Reservations
    $query = $pdo->query("
        SELECT Reservations.ReservationID, Guests.Name AS GuestName, Rooms.RoomType, Reservations.CheckInDate, Reservations.CheckOutDate
        FROM Reservations
        JOIN Guests ON Reservations.GuestID = Guests.GuestID
        JOIN Rooms ON Reservations.RoomID = Rooms.RoomID
    ");
    $reservations = $query->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Reservation ID</th>
                <th>Guest Name</th>
                <th>Room Type</th>
                <th>Check-In</th>
                <th>Check-Out</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reservation): ?>
            <tr>
                <td><?= $reservation['ReservationID'] ?></td>
                <td><?= $reservation['GuestName'] ?></td>
                <td><?= $reservation['RoomType'] ?></td>
                <td><?= $reservation['CheckInDate'] ?></td>
                <td><?= $reservation['CheckOutDate'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="add_reservation.php" class="btn">Add New Reservation</a>
</div>

<?php include 'footer.php'; ?>
