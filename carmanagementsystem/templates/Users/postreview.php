<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet">
</head>

<?= $this->Html->css(['header']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a class="logo"><em> The Modern Garage</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a class="active">Home</a></li>
                        <li><a class="active">Contact us</a></li>
                        <li><a href="http://localhost:8765/users/add"> Login/Register</a></li>

                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<br>
<br>
<section class="p-4 p-md-5 text-center text-lg-start shadow-1-strong rounded">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body m-3">
                    <div class="row">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                            <img <?= $this->Html->image($car->image) ?>>
                        </div>
                        <div class="col-lg-8">
                            <p class="text-muted fw-light mb-4">

                            </p>
                            <p class="fw-bold lead mb-2"><strong>
                                    <h1>
                                        <?= h($car->Name) ?>
                                    </h1> (
                                    <?= h($car->Make) ?>)
                                </strong></p>

                            <p class="fw-bold  mb-0">
                            <h3 style="color: green;">
                                (
                                <?= h($car->Model) ?>)
                            </h3>
                            <hr>
                            </p>
                            <p class="lead my-3 text-muted">
                                Now Available at your city! Contact us today at nearest showroom
                            </p>
                            <p>
                            <h4>
                                <?= h($car->Description) ?>
                            </h4>
                            </p>
                            <br>
                            <button type="button" class="btn btn-dark btn-rounded"><span style="font-size: 10px;">Post
                                    Review</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>