<?php include 'header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel mamagment system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>




<div class="container dashboard">
    <h1>Hotel Management System Dashboard</h1>
    <p>Welcome to the Hotel Management System! Use the buttons below to perform various operations.</p>
    
    <div class="dashboard-grid">
        <!-- Guest Operations -->
        <a href="add_guest.php" class="dashboard-btn">Add Guest</a>
        <a href="view_guests.php" class="dashboard-btn">View Guests</a>

        <!-- Room Operations -->
        <a href="add_room.php" class="dashboard-btn">Add Room</a>
        <a href="view_rooms.php" class="dashboard-btn">View Rooms</a>

        <!-- Reservation Operations -->
        <a href="add_reservation.php" class="dashboard-btn">Add Reservation</a>
        <a href="view_reservations.php" class="dashboard-btn">View Reservations</a>

        <!-- Payment Operations -->
        <a href="add_payment.php" class="dashboard-btn">Add Payment</a>
        <a href="view_payments.php" class="dashboard-btn">View Payments</a>

        <!-- Staff Operations -->
        <a href="add_staff.php" class="dashboard-btn">Add Staff</a>
        <a href="view_staff.php" class="dashboard-btn">View Staff</a>

        <!-- Service Operations -->
        <a href="add_service.php" class="dashboard-btn">Add Service</a>
        <a href="view_services.php" class="dashboard-btn">View Services</a>

        <!-- Reports -->
        <!-- <a href="revenue_report.php" class="dashboard-btn">Revenue Report</a>
        <a href="occupancy_report.php" class="dashboard-btn">Occupancy Report</a> -->
    </div>
</div>




    
</body>
</html>


<?php include 'footer.php'; ?>