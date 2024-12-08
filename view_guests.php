<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>View Guests</h1>
    <table class="data-table">
        <thead>
            <tr>
                <th>Guest ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Nationality</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $pdo->query("SELECT * FROM Guests");
            while ($row = $query->fetch()) {
                echo "<tr>
                    <td>{$row['GuestID']}</td>
                    <td>{$row['Name']}</td>
                    <td>{$row['ContactDetails']}</td>
                    <td>{$row['Nationality']}</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
