
<?php if (session()->getFlashdata('success')): ?>
    <div class="success"><?= session()->getFlashdata('success'); ?></div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="error"><?= session()->getFlashdata('error'); ?></div>
<?php endif; ?>

<h1>Key Types</h1>

<?php if ($key_list !== []): ?>

    <table>
    <?php foreach ($key_list as $key_item): ?>
        <div>
                <tr>
                    <td><?= esc($key_item['name']) ?></td>
                    <td><?= esc($key_item['total_qty']) ?></td>
                    <td><?= esc($key_item['notes']) ?></td>
                    <td>
                        <a href="<?= site_url('keys/delete/' . $key_item['id']); ?>" 
                           onclick="return confirm('Are you sure you want to delete this key?');">
                            Delete
                        </a>
                    </td>
                </tr>
        </div>
    <?php endforeach ?>
    </table>
<?php else: ?>

    <h3>No Keys Found</h3>

    <p>There are currently no keys found in your system.</p>

<?php endif ?>
<a href=/logout>Logout</a>