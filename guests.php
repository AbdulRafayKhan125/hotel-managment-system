<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>Guests Management</h1>
    <p>Manage guest details below:</p>

    <?php
    $query = $pdo->query("SELECT * FROM Guests");
    $guests = $query->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Contact Details</th>
                <th>Nationality</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($guests as $guest): ?>
            <tr>
                <td><?= $guest['Name'] ?></td>
                <td><?= $guest['ContactDetails'] ?></td>
                <td><?= $guest['Nationality'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
