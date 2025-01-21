<!-- Keys Overview Table -->
<h2>Keys Overview</h2>
<table>
    <thead>
        <tr>
            <th>Key Name</th>
            <th>Notes</th>
            <th>Total Quantity</th>
            <th>Checked Out</th>
            <th>Available</th>
            <th>Lost</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($keyInventory as $assignment): ?>
            <tr>
                <td><?= esc($assignment['key_name']) ?></td>
                <td><?= esc($assignment['notes']) ?></td>
                <td><?= esc($assignment['total_qty']) ?></td>
                <td><?= esc($assignment['checked_out_count']) ?></td>
                <td><?= esc($assignment['total_qty'] - $assignment['checked_out_count'] - $assignment['lost_count']) ?></td>
                <td><?= esc($assignment['lost_count']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Inventory List Table -->
<h2>Inventory List</h2>
<table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Key Name</th>
            <th>Lost Key</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($inventoryList as $assignment): ?>
            <tr>
                <td><?= esc($assignment['fname']) ?></td>
                <td><?= esc($assignment['lname']) ?></td>
                <td><?= esc($assignment['key_name']) ?></td>
                <td><?= esc($assignment['status'] == 'LOST' ? 'Yes' : 'No') ?></td>
                <td>
                    <form action="<?= site_url('/keyassignment/updateStatus/' . $assignment['id']) ?>" method="POST">
                        <select name="status">
                            <option value="CHECKED_OUT" <?= ($assignment['status'] === 'CHECKED_OUT') ? 'selected' : '' ?>>Checked Out</option>
                            <option value="RETURNED" <?= ($assignment['status'] === 'RETURNED') ? 'selected' : '' ?>>Returned</option>
                            <option value="LOST" <?= ($assignment['status'] === 'LOST') ? 'selected' : '' ?>>Lost</option>
                        </select>
                </td>
                <td>
                    <button type="submit">Update Status</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>