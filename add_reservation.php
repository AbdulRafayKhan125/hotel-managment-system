<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>Add New Reservation</h1>
    <form method="POST">
        <label for="GuestID">Guest ID:</label>
        <input type="number" id="GuestID" name="GuestID" required>
        
        <label for="RoomID">Room ID:</label>
        <input type="number" id="RoomID" name="RoomID" required>
        
        <label for="CheckInDate">Check-In Date:</label>
        <input type="date" id="CheckInDate" name="CheckInDate" required>
        
        <label for="CheckOutDate">Check-Out Date:</label>
        <input type="date" id="CheckOutDate" name="CheckOutDate" required>
        
        <button type="submit" name="addReservation">Add Reservation</button>
    </form>

    <?php
    if (isset($_POST['addReservation'])) {
        $guestID = $_POST['GuestID'];
        $roomID = $_POST['RoomID'];
        $checkIn = $_POST['CheckInDate'];
        $checkOut = $_POST['CheckOutDate'];

        $query = $pdo->prepare("INSERT INTO Reservations (GuestID, RoomID, CheckInDate, CheckOutDate) VALUES (?, ?, ?, ?)");
        $query->execute([$guestID, $roomID, $checkIn, $checkOut]);

        echo "<p>Reservation added successfully!</p>";
    }
    ?>
</div>

<?php include 'footer.php'; ?>
