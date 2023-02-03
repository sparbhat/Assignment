<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<style>
    .error-message {
        color: red
    }
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
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('send mail') ?></legend>
                <?php
                echo $this->Form->control('email');
                ?>
            </fieldset>
            <?= $this->Form->button('Submit', ['id' => 'submit']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?= $this->Html->script('validation') ?>
<?= $this->fetch('script') ?>