<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $brands
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading">
                <?= __('Actions') ?>
            </h4>
            <?= $this->Html->link(__('List Cars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cars form content">
            <?= $this->Form->create($car, ['type' => 'file']) ?>
            <fieldset>
                <legend>
                    <?= __('Add Car') ?>
                </legend>
                <?php
                echo $this->Form->control('user_id', ['options' => $users]);
                echo $this->Form->control('Name');
                echo $this->Form->control('brand_id', ['options' => $brands]);
                echo $this->Form->control('Make');
                echo $this->Form->control('Model');
                echo $this->Form->control('Color');
                echo $this->Form->control('Description');
                echo $this->Form->control('image_file', ['type' => 'file']);
                echo $this->Form->control('status');
                echo $this->Form->control('created_at');
                echo $this->Form->control('modified_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>