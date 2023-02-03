<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $brands
 */
?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $brands
 */
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!--  -->



<!doctype html>
<html lang="en">

<head>
    <title>Sign Up 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <?= $this->Html->css(['signup']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <style>
        .error-message {
            color: red;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <section class="ftco-section" style="padding: 1em;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <div class="login-wrap p-4 p-md-5">
                        <h3 class="mb-4">Hello! <span>You can update details below!</span></h3>
                        <img style="width: 90px;position: relative; margin-left: 130px;" src="/images/carlogo.png"
                            alt="Italian Trulli">
                        <?= $this->Form->create($car, ['type' => 'file', 'class' => 'signup-form', 'id' => 'signup-form']) ?>
                        <div class="form-group mb-4">
                            <?php
                            echo $this->Form->control('Name', ['name' => 'Name', 'Placeholder' => '', 'type' => 'text', 'required' => 'false']); ?>
                        </div>
                        <div class="form-group mb-4">
                            <?php
                            echo $this->Form->control('Make', ['name' => 'Make', 'Placeholder' => '', 'type' => 'text', 'required' => 'false']); ?>
                        </div>
                        <div class="form-group mb-4">
                            <?php
                            echo $this->Form->control('brand_id', ['options' => $brands, 'required' => 'false']); ?>
                        </div>
                        <div class="form-group mb-4">
                            <?php
                            echo $this->Form->control('Model', ['name' => 'Model', 'Placeholder' => '', 'type' => 'text', 'required' => 'false']); ?>
                        </div>
                        <div class="form-group mb-4">
                            <?php
                            echo $this->Form->control('Color', ['name' => 'Color', 'Placeholder' => '', 'type' => 'text', 'required' => 'false']); ?>
                        </div>
                        <div class="form-group mb-4">
                            <?php
                            echo $this->Form->control('Description', ['name' => 'Description', 'Placeholder' => '', 'type' => 'text', 'required' => 'false']); ?>
                        </div>
                        <!-- -->
                        <?= $this->Form->button(__('Add', ['class' => 'btn btn-primary rounded submit p-3'])) ?>

                        <?= $this->Form->end() ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?= $this->Html->script('add'); ?>

</body>

</html>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading">
                <?= __('Actions') ?>
            </h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $car->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $car->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cars form content">
            <?= $this->Form->create($car, ['type' => 'file']) ?>
            <fieldset>
                <legend>
                    <?= __('Edit Car') ?>
                </legend>
                <?php
                echo $this->Form->control('user_id', ['options' => $users]);
                echo $this->Form->control('Name');
                echo $this->Form->control('brand_id', ['options' => $brands]);
                echo $this->Form->control('Make');
                echo $this->Form->control('Model');
                echo $this->Form->control('Color');
                echo $this->Form->control('Description');
                echo $this->Form->control('image', ['type' => 'file']);
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