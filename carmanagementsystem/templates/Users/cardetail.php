<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <Style>
        .checked {
            color: orange;
        }
    </style>
</head>

<?= $this->Html->css(['header']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
<!--  -->
<br>
<br>
<section class="p-4 p-md-5 text-center text-lg-start shadow-1-strong rounded">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body m-3">
                    <div class="row">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                            <img>
                            <?= $this->Html->image($car->image) ?>
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

                            <?= $this->Form->create($rating) ?>
                            <fieldset>
                                <legend>
                                    <?= __('Rate this car') ?>
                                </legend>

                                <?php
                                echo '
                <span class="ratestars">
                        <li class="star" value="1"><a><i class="fa-regular fa-star"></a></i></li>
                        <li class="star" value="2"><a><i class="fa-regular fa-star"></a></i></li>
                        <li class="star" value="3"><a><i class="fa-regular fa-star"></a></i></li>
                        <li class="star" value="4"><a><i class="fa-regular fa-star"></a></i></li>
                        <li class="star" value="5"><a><i class="fa-regular fa-star"></a></i></li>
                    </ol>
                </span>
                ';
                                ?>
                                <button type="button" class="btn bg-default" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <span style="font-weight: 40px;">View All Ratings</span>
                                </button>

                                <?php
                                echo $this->Form->control('star', ['type' => 'hidden', 'value' => '5', 'id' => 'starinput']);

                                echo $this->Form->control('review', ['type' => 'textarea', 'required' => false]);

                                ?>
                            </fieldset>
                            <?= $this->Form->button(__('Submit', ['class' => "btn btn-dark btn-rounded"])) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        <?php echo $car->Name ?>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <?php
                    $sum = 0;
                    $count = 0;
                    if (!empty($car->ratings)): ?>
                        <h4>
                            <?= __('Related Ratings') ?>
                        </h4>
                        <div class="table-responsive">
                            <table>
                                <tr>
                                    <th>
                                        <?= __('Star') ?>
                                    </th>
                                    <th>
                                        <?= __('Review') ?>
                                    </th>


                                </tr>
                                <?php foreach ($ratings as $ratings): ?>
                                    <tr>
                                        <td>
                                            <span class="ratestars">
                                                <?php
                                                for ($i = 0; $i < $ratings->rating; $i++) {
                                                    echo '<li class="fa-solid fa-star" value="1"></li>';
                                                }
                                                for ($j = $i; $j < 5; $j++) {
                                                    echo '<li class="fa-regular fa-star" value="1"></li>';
                                                }
                                                ?>
                                            </span>
                                        </td>
                                        <td>
                                            <?= h($ratings->Review) ?>
                                        </td>

                                    </tr>
                                    <?php

                                    $count++;
                                    $sum += $ratings->star;
                                    ?>
                                <?php endforeach; ?>
                            </table>
                        </div>

                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function () {
            $('.star').click(function () {
                var stars = $(this).val()
                $(this).prevAll('li').css({
                    "background-color": "red",
                });
                $(this).css({
                    "background-color": "red",
                });
                $(this).nextAll('li').css({
                    "background-color": "white",
                });
                $('#starinput').val(stars)
            })
        });
    </script>
</section>