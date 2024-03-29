<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading">
                <?= __('Actions') ?>
            </h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3>
                <?= h($user->id) ?>
            </h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td>
                        <?= h($user->first_name) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Email') ?>
                    </th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th>
                        <?= __('Age') ?>
                    </th>
                    <td><?= h($user->age) ?></td>
                </tr>
                <tr>
                    <th>
                        <?= __('Gender') ?>
                    </th>
                    <td><?= h($user->gender) ?></td>
                </tr>
                <tr>
                    <th>
                        <?= __('Image') ?>
                    </th>
                    <td><?= $this->Html->image($user->image) ?></td>
                </tr>
                <tr>
                    <th>
                        <?= __('Phone Number') ?>
                    </th>
                    <td><?= h($user->phone_number) ?></td>
                </tr>

                <tr>
                    <th>
                        <?= __('Id') ?>
                    </th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>