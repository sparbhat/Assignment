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
    <?= $this->Html->script('validation'); ?>

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
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"></h2>
                </div>
            </div>
            <?= $this->Flash->render() ?>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <div class="login-wrap p-4 p-md-5">
                        <h3 class="mb-4"><span>Login here!</span></h3>
                        <img style="width: 90px;position: relative; margin-left: 130px;" src="/images/carlogo.png"
                            alt="Italian Trulli">
                        <?= $this->Form->create(null, ['class' => 'signup-form', 'action' => 'login']) ?>
                        <div class="form-group mb-4">
                            <?php
                            echo $this->Form->control('email', ['name' => 'email', 'Placeholder' => '', 'type' => 'text', 'required' => 'false']); ?>
                        </div>


                        <div class="form-group mb-4">
                            <?php
                            echo $this->Form->control('password', ['name' => 'password', 'Placeholder' => '', 'type' => 'password', 'required' => 'false']); ?>
                        </div>

                        <?= $this->Form->button(__('login', ['class' => 'btn btn-primary rounded submit p-3'])) ?>
                        </form>
                        <div class="w-100 social-wrap">
                            <p class="social-media d-flex justify-content-center">
                                <a href="#"
                                    class="social-icon facebook d-flex align-items-center justify-content-center"><span
                                        class="fa fa-facebook"></span></a>
                                <a href="#"
                                    class="social-icon twitter d-flex align-items-center justify-content-center"><span
                                        class="fa fa-twitter"></span></a>
                            </p>
                            <p class="mt-4">Already existed! <a href="http://localhost:8765/users/add">Sign-up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>