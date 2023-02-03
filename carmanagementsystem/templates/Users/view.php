<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $this->Number->format($user->Role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($user->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($user->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($user->modified_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Brands') ?></h4>
                <?php if (!empty($user->brands)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->brands as $brands) : ?>
                        <tr>
                            <td><?= h($brands->id) ?></td>
                            <td><?= h($brands->user_id) ?></td>
                            <td><?= h($brands->name) ?></td>
                            <td><?= h($brands->description) ?></td>
                            <td><?= h($brands->status) ?></td>
                            <td><?= h($brands->created_at) ?></td>
                            <td><?= h($brands->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Brands', 'action' => 'view', $brands->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Brands', 'action' => 'edit', $brands->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Brands', 'action' => 'delete', $brands->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brands->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Cars') ?></h4>
                <?php if (!empty($user->cars)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Brand Id') ?></th>
                            <th><?= __('Make') ?></th>
                            <th><?= __('Model') ?></th>
                            <th><?= __('Color') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Image') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->cars as $cars) : ?>
                        <tr>
                            <td><?= h($cars->id) ?></td>
                            <td><?= h($cars->user_id) ?></td>
                            <td><?= h($cars->Name) ?></td>
                            <td><?= h($cars->brand_id) ?></td>
                            <td><?= h($cars->Make) ?></td>
                            <td><?= h($cars->Model) ?></td>
                            <td><?= h($cars->Color) ?></td>
                            <td><?= h($cars->Description) ?></td>
                            <td><?= h($cars->image) ?></td>
                            <td><?= h($cars->status) ?></td>
                            <td><?= h($cars->created_at) ?></td>
                            <td><?= h($cars->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cars', 'action' => 'view', $cars->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cars', 'action' => 'edit', $cars->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cars', 'action' => 'delete', $cars->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cars->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Ratings') ?></h4>
                <?php if (!empty($user->ratings)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Car Id') ?></th>
                            <th><?= __('Rating') ?></th>
                            <th><?= __('Review') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->ratings as $ratings) : ?>
                        <tr>
                            <td><?= h($ratings->id) ?></td>
                            <td><?= h($ratings->user_id) ?></td>
                            <td><?= h($ratings->car_id) ?></td>
                            <td><?= h($ratings->rating) ?></td>
                            <td><?= h($ratings->Review) ?></td>
                            <td><?= h($ratings->status) ?></td>
                            <td><?= h($ratings->created_at) ?></td>
                            <td><?= h($ratings->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ratings', 'action' => 'view', $ratings->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ratings', 'action' => 'edit', $ratings->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ratings', 'action' => 'delete', $ratings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ratings->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
