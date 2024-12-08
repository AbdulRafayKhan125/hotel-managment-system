<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>Add New Staff</h1>
    <form method="POST">
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" required>
        
        <label for="Role">Role:</label>
        <input type="text" id="Role" name="Role" required>
        
        <label for="ContactDetails">Contact Details:</label>
        <input type="text" id="ContactDetails" name="ContactDetails" required>
        
        <button type="submit" name="addStaff">Add Staff</button>
    </form>

    <?php
    if (isset($_POST['addStaff'])) {
        $name = $_POST['Name'];
        $role = $_POST['Role'];
        $contact = $_POST['ContactDetails'];

        $query = $pdo->prepare("INSERT INTO Staff (Name, Role, ContactDetails) VALUES (?, ?, ?)");
        $query->execute([$name, $role, $contact]);

        echo "<p>Staff added successfully!</p>";
    }
    ?>
</div>

<?php include 'footer.php'; ?>
