<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>View Rooms</h1>
    <table class="data-table">
        <thead>
            <tr>
                <th>Room ID</th>
                <th>Type</th>
                <th>Rate</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $pdo->query("SELECT * FROM Rooms");
            while ($row = $query->fetch()) {
                echo "<tr>
                    <td>{$row['RoomID']}</td>
                    <td>{$row['RoomType']}</td>
                    <td>{$row['Rate']}</td>
                    <td>{$row['AvailabilityStatus']}</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
