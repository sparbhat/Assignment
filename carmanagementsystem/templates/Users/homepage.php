<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Car> $cars
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    <title>PHPJabbers.com | Free Car Dealer Website Template</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?= $this->Html->css(['style',]) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <style></style>
</head>

<body>




    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <!-- <a href="index.html" class="logo">The Modern<em> Garage</em></a> -->
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <!-- <li><a class="active">Home</a></li> -->
                            <li style="padding-top: 8px !important;" ;>
                                <?php if ($login) { ?>
                                    <em class="active" style="color: white;">Welcome!</em> <span class="active"
                                        style="color: white; margin-top: 5px;                                                                                                                                                                                                                                                                                                                                                                                 ;">
                                        <?php echo $user->Name ?>
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <li>
                                    <a href="http://localhost:8765/users/logout"> Logout</a>
                                </li>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



                                <li></li>

                            <?php } else { ?>

                                <li><a href="http://localhost:8765/users/add"> Login/Register</a></li>
                            <?php
                                } ?>
                            </li>
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
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="/images/video1.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Affordable and Like New</h6>
                <h2>A burning <em>passion </em> for quality.</h2>
                <div class="main-button">
                    <a>Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Featured <em>Cars</em></h2>
                        <img src="/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>

            <?= $this->Form->create(null, ['type' => 'get']) ?>
            <?= $this->Form->control('', [
                'Placeholder' => 'Search Car eg. swift ',
                'name' => 'key',
                'style' => 'width:365px; height:30px;border-top-style: hidden;
        border-right-style: hidden;
        border-left-style: hidden; border-bottom-style: groove;',
                'class' => "form-control mr-sm-2",
                'value' => $this->request->getQuery('key')
            ]) ?>
            <!-- <?= $this->Form->submit() ?> -->
            <?= $this->Form->end() ?>

            <br>

            <div class="row">
                <?php foreach ($cars as $car): ?>
                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <img>
                                <?= $this->Html->image($car->image) ?>
                            </div>
                            <div class="down-content">
                                <span>
                                    Model
                                    <?= h($car->Model) ?>
                                    &nbsp;
                                </span>
                                <h4>
                                    <?= h($car->Name) ?>
                                </h4>
                                <p>(
                                    <?= h($car->Make) ?>)
                                    &nbsp;&nbsp;&nbsp;
                                </p>
                                <p>
                                    <?= h($car->Description) ?>
                                </p>
                                <p>

                                    <?php if ($login == true) { ?>
                                        <?php echo $this->Html->link(__('More details'), ['action' => 'cardetail', $car->id]) ?>
                                    <?php } else { ?>
                                        <a href="http://localhost:8765/users/login"> please Login to see More details!</a>
                                    <?php
                                    } ?>



                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            </table>
            <br>

            <div class="main-button text-center">
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
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule"
        style="background-image: url(/images/about-fullscreen-1-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Read <em>About Us</em></h2>
                        <img src="/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti voluptas enim!
                            Provident consectetur id earum ducimus facilis, aspernatur hic, alias, harum rerum velit
                            voluptas, voluptate enim! Eos, sunt, quidem.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto nulla quo cum officia
                            laboriosam. Amet tempore, aliquid quia eius commodi, doloremque omnis delectus laudantium
                            dolor reiciendis non nulla! Doloremque maxime quo eum in culpa mollitia similique eius
                            doloribus voluptatem facilis! Voluptatibus, eligendi, illum. Distinctio, non!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Blog</em></h2>
                        <img src="/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing.</a></li>
                        <li><a href='#tabs-2'>Aspernatur excepturi magni, placeat rerum nobis magnam libero! Soluta.</a>
                        </li>
                        <li><a href='#tabs-3'>Sunt hic recusandae vitae explicabo quidem laudantium corrupti non
                                adipisci nihil.</a></li>
                        <div class="main-rounded-button"><a href="blog.html">Read More</a></div>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="/images/blog-image-1-940x460.jpg" alt="">
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>

                            <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                                27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 comments</p>

                            <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend
                                hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem
                                tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut,
                                accumsan diam.</p>
                            <div class="main-button">
                                <a href="blog-details.html">Continue Reading</a>
                            </div>
                        </article>
                        <article id='tabs-2'>
                            <img src="/images/blog-image-2-940x460.jpg" alt="">
                            <h4>Aspernatur excepturi magni, placeat rerum nobis magnam libero! Soluta.</h4>
                            <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                                27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 comments</p>
                            <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a
                                velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus
                                nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius
                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <div class="main-button">
                                <a href="blog-details.html">Continue Reading</a>
                            </div>
                        </article>
                        <article id='tabs-3'>
                            <img src="/images/blog-image-3-940x460.jpg" alt="">
                            <h4>Sunt hic recusandae vitae explicabo quidem laudantium corrupti non adipisci nihil.</h4>
                            <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                                27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 15 comments</p>
                            <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit
                                amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id
                                scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel,
                                accumsan a neque.</p>
                            <div class="main-button">
                                <a href="blog-details.html">Continue Reading</a>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action"
        style="background-image: url(/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus
                            odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class="main-button">
                            <a href="contact.html">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Testimonials</em></h2>
                        <img src="/images/line-dec.png" alt="waves">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem incidunt alias minima
                            tenetur nemo necessitatibus?</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime
                                        voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em>
                                </p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="/images/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime
                                        voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="/images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime
                                        voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em>
                                </p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="/images/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime
                                        voluptatibus, impedit sed! Necessitatibus repellendus sed deleniti id et!"</em>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <br>

            <div class="main-button text-center">
                <a href="testimonials.html">Read More</a>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 Company Name
                        - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="/js/scrollreveal.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/imgfix.min.js"></script>
    <script src="/js/mixitup.js"></script>
    <script src="/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="/js/custom.js"></script>

</body>

</html>