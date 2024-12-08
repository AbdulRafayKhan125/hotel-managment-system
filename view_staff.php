<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>View Staff</h1>
    <table class="data-table">
        <thead>
            <tr>
                <th>Staff ID</th>
                <th>Name</th>
                <th>Role</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $pdo->query("SELECT * FROM Staff");
            while ($row = $query->fetch()) {
                echo "<tr>
                    <td>{$row['StaffID']}</td>
                    <td>{$row['Name']}</td>
                    <td>{$row['Role']}</td>
                    <td>{$row['ContactDetails']}</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
