<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
// ?>

<head>
    <title>Sign Up 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <?= $this->Html->css(['signup']) ?>
    <?= $this->Html->script('validation'); ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <style>
        .error-message {
            color: red;
            font-size: 12px;
        }

        ,
        .error {
            color: red !important;
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
                        <?= $this->Form->create($user, ['class' => 'signup-form', 'id' => 'signup-form',]) ?>
                        <div class="form-group mb-4">
                            <?php
                            echo $this->Form->control('Name', ['name' => 'Name', 'Placeholder' => '', 'type' => 'text', 'required' => 'false']); ?>
                        </div>
                        <div class="form-group mb-4">
                            <?php
                            echo $this->Form->control('email', ['name' => 'email', 'Placeholder' => '', 'type' => 'text', 'required' => 'false']); ?>
                        </div>

                        <div class="form-group mb-4">
                            <?php
                            echo $this->Form->control('password', ['name' => 'password', 'Placeholder' => '', 'type' => 'password', 'required' => 'false']); ?>
                        </div>
                        <div class="form-group mb-4">
                            <?php
                            echo $this->Form->control('confirmpassword', ['name' => 'confirmpassword', 'Placeholder' => '', 'type' => 'password', 'required' => 'false']); ?>
                        </div>
                        <?= $this->Form->button(__('Submit', ['class' => 'btn btn-primary rounded submit p-3'])) ?>

                        <?= $this->Form->end() ?>
                        </form>
                        <div class="w-100 social-wrap">
                            <p>
                                <span>or</span>
                                <span>Signup with</span>
                            </p>
                            <p class="social-media d-flex justify-content-center">
                                <a href="#"
                                    class="social-icon facebook d-flex align-items-center justify-content-center"><span
                                        class="fa fa-facebook"></span></a>
                                <a href="#"
                                    class="social-icon twitter d-flex align-items-center justify-content-center"><span
                                        class="fa fa-twitter"></span></a>
                            </p>
                            <p class="mt-4">I'm already a member! <a>
                                    <?= $this->Html->link(__('signin', ), ['controller' => 'users', 'action' => 'login', $user->id]) ?>
                                </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?= $this->Html->script('add'); ?>