<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>Add New Service</h1>
    <form method="POST">
        <label for="Description">Service Description:</label>
        <input type="text" id="Description" name="Description" required>
        
        <label for="Fee">Fee:</label>
        <input type="number" id="Fee" name="Fee" required>
        
        <button type="submit" name="addService">Add Service</button>
    </form>

    <?php
    if (isset($_POST['addService'])) {
        $description = $_POST['Description'];
        $fee = $_POST['Fee'];

        $query = $pdo->prepare("INSERT INTO Services (Description, Fee) VALUES (?, ?)");
        $query->execute([$description, $fee]);

        echo "<p>Service added successfully!</p>";
    }
    ?>
</div>

<?php include 'footer.php'; ?>
