<?php
include 'header.php';
include 'db.php';

$message = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $contact = htmlspecialchars($_POST['contact']);
    $nationality = htmlspecialchars($_POST['nationality']);

    if (!empty($name) && !empty($contact) && !empty($nationality)) {
        // Insert guest data into the database
        $sql = "INSERT INTO Guests (Name, ContactDetails, Nationality) VALUES (:name, :contact, :nationality)";
        $stmt = $pdo->prepare($sql);

        if ($stmt->execute(['name' => $name, 'contact' => $contact, 'nationality' => $nationality])) {
            $message = 'Guest added successfully!';
        } else {
            $message = 'Failed to add guest. Please try again.';
        }
    } else {
        $message = 'All fields are required!';
    }
}
?>

<div class="container">
    <h1>Add Guest</h1>
    <?php if (!empty($message)): ?>
        <p class="message"><?= $message; ?></p>
    <?php endif; ?>

    <form action="add_guest.php" method="POST" class="form">
        <div class="form-group">
            <label for="name">Guest Name</label>
            <input type="text" id="name" name="name" placeholder="Enter guest name" required>
        </div>

        <div class="form-group">
            <label for="contact">Contact Details</label>
            <input type="text" id="contact" name="contact" placeholder="Enter contact details" required>
        </div>

        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" id="nationality" name="nationality" placeholder="Enter nationality" required>
        </div>

        <button type="submit" class="btn-submit">Add Guest</button>
    </form>
</div>

<?php include 'footer.php'; ?>
