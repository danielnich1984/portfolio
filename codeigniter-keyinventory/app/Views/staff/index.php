
<?php if (session()->getFlashdata('success')): ?>
    <div class="success"><?= session()->getFlashdata('success'); ?></div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="error"><?= session()->getFlashdata('error'); ?></div>
<?php endif; ?>

<h2>Current Staff</h2>

<?php if ($staff_list !== []): ?>

    <table>
    <?php foreach ($staff_list as $staff_item): ?>
        <div>
                <tr>
                    <td><?= esc($staff_item['fname']) ?></td>
                    <td><?= esc($staff_item['lname']) ?></td>
                    <td><?= esc($staff_item['email']) ?></td>
                    <td>
                        <a href="<?= site_url('staff/delete/' . $staff_item['id']); ?>"
                           onclick="return confirm('Are you sure you want to delete this staff member?');">
                            Delete
                        </a>
                    </td>
                </tr>
        </div>
    <?php endforeach ?>
    </table>
<?php else: ?>

    <h3>No Staff Members Found</h3>

    <p>There are currently no staff members found in your system.</p>

<?php endif ?>
<a href=/logout>Logout</a>