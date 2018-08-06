<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('common/head'); ?>
        <style>
            .videos .card-body p {font-size: 13px;}
            .videos .card {min-height: 300px;}
            .videos .card:hover {box-shadow: 0px 0px 20px #aaa;}
            .videos .view_all {width: 100%; color: #FFF!important; font-size: 13px; padding: 3px 10px;}
        </style>
    </head>
    <body>
        <?php $this->load->view('common/nav'); ?>
        <div class="container">

            <div id="carouselExampleFade" class="carousel slide carousel-fade mb-2" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= root ?>assets/img/sliders/s1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= root ?>assets/img/sliders/s2.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="mb-2 mt-4 videos">
                <h5 class="p-2 mb-2 border-left-heading">Recent Videos</h5>
                <div class="row">
                    <div class="col-md mb-2 col-sm-12">
                        <div class="card">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/Dize16eWINU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">APNRT JANMABHOOMI MANA VOORU 2018.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mb-2 col-sm-12">
                        <div class="card">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/xLfYje3490U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">APNRT CEO Dr Ravikumar Vemuru About The Iconic & Towering APNRT.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mb-2 col-sm-12">
                        <div class="card">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/xq2JbZM3Fdo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">CM Chandrababu To Lay Foundation For APNRT Icon Towers On 22nd June.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md mb-2"></div>
                    <div class="col-md mb-2">
                        <a class="btn btn-secondary mt-2 view_all">View All Videos</a>
                    </div>
                    <div class="col-md mb-2"></div>
                </div>
            </div>
            <div class="mb-2 mt-4 videos">
                <h5 class="p-2 mb-2 border-left-heading">Popular Videos</h5>
                <div class="row">
                    <div class="col-md mb-2 col-sm-12">
                        <div class="card">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/Dize16eWINU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">APNRT JANMABHOOMI MANA VOORU 2018.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mb-2 col-sm-12">
                        <div class="card">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/xLfYje3490U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">APNRT CEO Dr Ravikumar Vemuru About The Iconic & Towering APNRT.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mb-2 col-sm-12">
                        <div class="card">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/xq2JbZM3Fdo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">CM Chandrababu To Lay Foundation For APNRT Icon Towers On 22nd June.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md mb-2"></div>
                    <div class="col-md mb-2">
                        <a class="btn btn-secondary mt-2 view_all">View All Videos</a>
                    </div>
                    <div class="col-md mb-2"></div>
                </div>
            </div>
        </div>
        <?php $this->load->view('common/footer'); ?>
    </body>
</html>