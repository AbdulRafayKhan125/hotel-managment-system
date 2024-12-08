<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>Add New Room</h1>
    <form method="POST">
        <label for="RoomType">Room Type:</label>
        <input type="text" id="RoomType" name="RoomType" required>
        
        <label for="Rate">Nightly Rate:</label>
        <input type="number" id="Rate" name="Rate" required>
        
        <label for="AvailabilityStatus">Availability Status:</label>
        <select id="AvailabilityStatus" name="AvailabilityStatus" required>
            <option value="Available">Available</option>
            <option value="Occupied">Occupied</option>
            <option value="Under Maintenance">Under Maintenance</option>
        </select>
        
        <button type="submit" name="addRoom">Add Room</button>
    </form>

    <?php
    if (isset($_POST['addRoom'])) {
        $roomType = $_POST['RoomType'];
        $rate = $_POST['Rate'];
        $status = $_POST['AvailabilityStatus'];

        $query = $pdo->prepare("INSERT INTO Rooms (RoomType, Rate, AvailabilityStatus) VALUES (?, ?, ?)");
        $query->execute([$roomType, $rate, $status]);

        echo "<p>Room added successfully!</p>";
    }
    ?>
</div>

<?php include 'footer.php'; ?>
