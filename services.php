<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>Service Management</h1>
    <p>View and manage hotel services below:</p>

    <?php
    // Fetch Services
    $query = $pdo->query("SELECT * FROM Services");
    $services = $query->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Service ID</th>
                <th>Description</th>
                <th>Fee</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($services as $service): ?>
            <tr>
                <td><?= $service['ServiceID'] ?></td>
                <td><?= $service['Description'] ?></td>
                <td><?= $service['Fee'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="add_service.php" class="btn">Add New Service</a>
</div>

<?php include 'footer.php'; ?>
