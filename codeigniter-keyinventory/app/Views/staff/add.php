<!-- app/Views/keys/add.php -->
<h2>Add a New Staff</h2>

<form action="<?= site_url('staff/save'); ?>" method="post">
    <?= csrf_field(); ?> <!-- CSRF token for security -->
    
    <div>
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" required>
    </div>

    <div>
        <label for="lname">Last Name:</label>
        <input type="lname" name="lname" id="lname" required>
    </div>

    <div>
        <label for="email">Notes:</label>
        <textarea name="email" id="email"></textarea>
    </div>

    <button type="submit">Add Key</button>
</form>