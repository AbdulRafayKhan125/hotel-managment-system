<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>View Services</h1>
    <table class="data-table">
        <thead>
            <tr>
                <th>Service ID</th>
                <th>Description</th>
                <th>Fee</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $pdo->query("SELECT * FROM Services");
            while ($row = $query->fetch()) {
                echo "<tr>
                    <td>{$row['ServiceID']}</td>
                    <td>{$row['Description']}</td>
                    <td>{$row['Fee']}</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
