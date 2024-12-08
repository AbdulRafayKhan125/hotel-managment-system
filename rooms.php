<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>Room Management</h1>
    <p>Manage room details below:</p>

    <?php
    // Fetch Rooms
    $query = $pdo->query("SELECT * FROM Rooms");
    $rooms = $query->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Room ID</th>
                <th>Room Type</th>
                <th>Rate</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rooms as $room): ?>
            <tr>
                <td><?= $room['RoomID'] ?></td>
                <td><?= $room['RoomType'] ?></td>
                <td><?= $room['Rate'] ?></td>
                <td><?= $room['AvailabilityStatus'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="add_room.php" class="btn">Add New Room</a>
</div>

<?php include 'footer.php'; ?>
