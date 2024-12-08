<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>Staff Management</h1>
    <p>Manage staff records below:</p>

    <?php
    // Fetch Staff
    $query = $pdo->query("SELECT * FROM Staff");
    $staff = $query->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Staff ID</th>
                <th>Name</th>
                <th>Role</th>
                <th>Contact Details</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($staff as $staff_member): ?>
            <tr>
                <td><?= $staff_member['StaffID'] ?></td>
                <td><?= $staff_member['Name'] ?></td>
                <td><?= $staff_member['Role'] ?></td>
                <td><?= $staff_member['ContactDetails'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="add_staff.php" class="btn">Add New Staff</a>
</div>

<?php include 'footer.php'; ?>
