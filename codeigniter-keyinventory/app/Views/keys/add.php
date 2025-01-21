<!-- app/Views/keys/add.php -->
<h2>Add a New Key</h2>

<form action="<?= site_url('keys/save'); ?>" method="post">
    <?= csrf_field(); ?> <!-- CSRF token for security -->
    
    <div>
        <label for="name">Key Name:</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="total_qty">Total Quantity:</label>
        <input type="number" name="total_qty" id="total_qty" required>
    </div>

    <div>
        <label for="notes">Notes:</label>
        <textarea name="notes" id="notes"></textarea>
    </div>

    <button type="submit">Add Key</button>
</form>