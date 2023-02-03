<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading">
                <?= __('Actions') ?>
            </h4>
            <!-- <?= $this->Html->link(__('Edit Car'), ['action' => 'edit', $car->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Car'), ['action' => 'delete', $car->id], ['confirm' => __('Are you sure you want to delete # {0}?', $car->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Car'), ['action' => 'add'], ['class' => 'side-nav-item']) ?> -->
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cars view content">
            <h3>
                <?= h($car->id) ?>
            </h3>
            <table>
                <tr>
                    <th>
                        <?= __('User') ?>
                    </th>
                    <td>
                        <?= $car->has('user') ? $this->Html->link($car->user->id, ['controller' => 'Users', 'action' => 'view', $car->user->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Name') ?>
                    </th>
                    <td>
                        <?= h($car->Name) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Brand') ?>
                    </th>
                    <td>
                        <?= $car->has('brand') ? $this->Html->link($car->brand->name, ['controller' => 'Brands', 'action' => 'view', $car->brand->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Make') ?>
                    </th>
                    <td>
                        <?= h($car->Make) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Model') ?>
                    </th>
                    <td>
                        <?= h($car->Model) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Color') ?>
                    </th>
                    <td>
                        <?= h($car->Color) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Description') ?>
                    </th>
                    <td>
                        <?= h($car->Description) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Image') ?>
                    </th>
                    <td>
                        <?= h($car->image) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Id') ?>
                    </th>
                    <td>
                        <?= $this->Number->format($car->id) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Status') ?>
                    </th>
                    <td>
                        <?= $this->Number->format($car->status) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Created At') ?>
                    </th>
                    <td>
                        <?= h($car->created_at) ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= __('Modified At') ?>
                    </th>
                    <td>
                        <?= h($car->modified_at) ?>
                    </td>
                </tr>
            </table>
            <div class="related">
                <h4>
                    <?= __('Related Ratings') ?>
                </h4>
                <?php if (!empty($car->ratings)): ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th>
                                    <?= __('Id') ?>
                                </th>
                                <th>
                                    <?= __('User Id') ?>
                                </th>
                                <th>
                                    <?= __('Car Id') ?>
                                </th>
                                <th>
                                    <?= __('Rating') ?>
                                </th>
                                <th>
                                    <?= __('Review') ?>
                                </th>
                                <th>
                                    <?= __('Status') ?>
                                </th>
                                <th>
                                    <?= __('Created At') ?>
                                </th>
                                <th>
                                    <?= __('Modified At') ?>
                                </th>
                                <th class="actions">
                                    <?= __('Actions') ?>
                                </th>
                            </tr>
                            <?php foreach ($car->ratings as $ratings): ?>
                                <tr>
                                    <td>
                                        <?= h($ratings->id) ?>
                                    </td>
                                    <td>
                                        <?= h($ratings->user_id) ?>
                                    </td>
                                    <td>
                                        <?= h($ratings->car_id) ?>
                                    </td>
                                    <td>
                                        <?= h($ratings->rating) ?>
                                    </td>
                                    <td>
                                        <?= h($ratings->Review) ?>
                                    </td>
                                    <td>
                                        <?= h($ratings->status) ?>
                                    </td>
                                    <td>
                                        <?= h($ratings->created_at) ?>
                                    </td>
                                    <td>
                                        <?= h($ratings->modified_at) ?>
                                    </td>
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