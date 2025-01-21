<h2><?= esc($title) ?></h2>

<form action="<?= site_url('keyassignment/saveCheckout') ?>" method="post">
    <label for="checkout_date">Checkout Date:</label>
    <input type="date" name="checkout_date" value=<?= date('Y-m-d') ?> required>

    <label for="key_id">Key:</label>
    <select name="key_id" required>
        <?php foreach ($keys as $key): ?>
            <option value="<?= esc($key['id']) ?>"><?= esc($key['name']) ?></option>
        <?php endforeach; ?>
    </select>

    <label for="user_id">Staff Member:</label>
    <select name="user_id" required>
        <?php foreach ($staff as $member): ?>
            <option value="<?= esc($member['id']) ?>"><?= esc($member['fname']) ?> <?= esc($member['lname']) ?></option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Assign Key</button>
</form>
