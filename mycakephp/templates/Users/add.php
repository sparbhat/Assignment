<?php
use PharIo\Manifest\Type;

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<style>
    .error-message {}
</style>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading">
                <?= __('Actions') ?>
            </h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user, ['type' => 'file', 'id' => 'alldata']) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                echo $this->Form->control('first_name', ['required' => false]);
                echo $this->Form->control('email', ['required' => false]);
                echo $this->Form->control('password', ['required' => false]);
                echo $this->Form->control('age', ['required' => false]);


                echo $this->Form->control(
                    'gender',

                    array(
                        'div' => true,
                        'label' => 'Gender',
                        'type' => 'radio',
                        'legend' => false,
                        'required' => false,
                        'hiddenField' => false,
                        'options' => array(
                            1 => 'Male',
                            2 => 'Female',
                            3 => 'other'
                        ),
                        'value' => 'gender'
                    )
                );
                echo $this->Form->control('phone_number', ['required' => false]);
                echo $this->Form->control('image_file', ['type' => 'file']);

                ?>

            </fieldset>
            <?= $this->Form->button('Submit', ['id' => 'submit']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<!-- <?= $this->Html->script('validation') ?>
<?= $this->fetch('script') ?> -->