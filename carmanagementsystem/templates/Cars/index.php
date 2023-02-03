<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Car> $cars
 */
?>
<div class="cars index content">
    <?= $this->Html->link(__('New Car'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3>
        <?= __('Cars') ?>
    </h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>
                        <?= $this->Paginator->sort('id') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('user_id') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('Name') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('brand_id') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('Make') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('Model') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('Color') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('Description') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('image') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('status') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('created_at') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('modified_at') ?>
                    </th>
                    <th class="actions">
                        <?= __('Actions') ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cars as $car): ?>
                    <tr>
                        <td>
                            <?= $this->Number->format($car->id) ?>
                        </td>
                        <td>
                            <?= $car->has('user') ? $this->Html->link($car->user->id, ['controller' => 'Users', 'action' => 'view', $car->user->id]) : '' ?>
                        </td>
                        <td>
                            <?= h($car->Name) ?>
                        </td>
                        <td>
                            <?= $car->has('brand') ? $this->Html->link($car->brand->name, ['controller' => 'Brands', 'action' => 'view', $car->brand->id]) : '' ?>
                        </td>
                        <td>
                            <?= h($car->Make) ?>
                        </td>
                        <td>
                            <?= h($car->Model) ?>
                        </td>
                        <td>
                            <?= h($car->Color) ?>
                        </td>
                        <td>
                            <?= h($car->Description) ?>
                        </td>
                        <td>
                            <?= h($car->image) ?>
                        </td>
                        <td>
                            <?= $this->Number->format($car->status) ?>
                        </td>
                        <td>
                            <?= h($car->created_at) ?>
                        </td>
                        <td>
                            <?= h($car->modified_at) ?>
                        </td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $car->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $car->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $car->id], ['confirm' => __('Are you sure you want to delete # {0}?', $car->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p>
            <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
        </p>
    </div>
</div>