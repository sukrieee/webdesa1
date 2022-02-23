<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);

    body {
        font: 400 16px/24px Poppins;
    }

    .gal-container {
        padding: 12px;
    }

    .gal-item {
        overflow: hidden;
        padding: 3px;
    }

    .gal-item .box {
        height: 350px;
        overflow: hidden;
    }

    .box img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        -o-object-fit: cover;
    }

    .gal-item a:focus {
        outline: none;
    }

    .gal-item a:after {
        content: "\e003";
        font-family: 'Glyphicons Halflings';
        opacity: 0;
        background-color: rgba(0, 0, 0, 0.75);
        position: absolute;
        right: 3px;
        left: 3px;
        top: 3px;
        bottom: 3px;
        text-align: center;
        line-height: 350px;
        font-size: 30px;
        color: #fff;
        -webkit-transition: all 0.5s ease-in-out 0s;
        -moz-transition: all 0.5s ease-in-out 0s;
        transition: all 0.5s ease-in-out 0s;
    }

    .gal-item a:hover:after {
        opacity: 1;
    }

    .modal-open .gal-container .modal {
        background-color: rgba(0, 0, 0, 0);
    }

    .modal-open .gal-item .modal-body {
        padding: 0px;
    }

    .modal-open .gal-item button.close {
        position: absolute;
        width: 25px;
        height: 25px;
        background-color: #000;
        opacity: 1;
        color: #fff;
        z-index: 999;
        right: -12px;
        top: -12px;
        border-radius: 50%;
        font-size: 15px;
        border: 2px solid #fff;
        line-height: 25px;
        -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.35);
        box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.35);
    }

    .modal-open .gal-item button.close:focus {
        outline: none;
    }

    .modal-open .gal-item button.close span {
        position: relative;
        top: -3px;
        font-weight: lighter;
        text-shadow: none;
    }

    .gal-container .modal-dialogue {
        width: 80%;
    }

    .gal-container .description {
        position: relative;
        height: 40px;
        top: -40px;
        padding: 10px 25px;
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        text-align: left;
    }

    .gal-container .description h4 {
        margin: 0px;
        font-size: 15px;
        font-weight: 300;
        line-height: 20px;
    }

    .gal-container .modal.fade .modal-dialog {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(0.1);
        top: 100px;
        opacity: 0;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }

    .gal-container .modal.fade.in .modal-dialog {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        -webkit-transform: translate3d(0, -100px, 0);
        transform: translate3d(0, -100px, 0);
        opacity: 1;
    }

    @media (min-width: 768px) {
        .gal-container .modal-dialog {
            width: 55%;
            margin: 50 auto;
        }
    }

    @media (max-width: 768px) {
        .gal-container .modal-content {
            height: 250px;
        }
    }

    .gal-container {
        padding-top: 20px;
        padding-bottom: 20px;
    }
</style>
<section>
    <div class="container gal-container">
        <center>
            <h1><i class="fa fa-camera-retro"></i> Gallery</h1>
        </center>
        <br>
        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#1">
                    <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/IMG20200826151257-1-1536x1152.jpg">
                </a>
                <div class="modal fade" id="1" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/IMG20200826151257-1-1536x1152.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>Sungai opak di puton watu ngelak</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#2">
                    <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/1622947037714-4-1024x683.jpg">
                </a>
                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                p<img src="https://desawisatabantul.com/wp-content/uploads/2021/06/1622947037714-4-1024x683.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>Bukit sriharjo</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#3">
                    <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/1622947494591-1-768x576.jpg">
                </a>
                <div class="modal fade" id="3" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/1622947494591-1-768x576.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>Panggung sono seneng</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#4">
                    <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/kerajinan-batik-kayu-topeng-krebet.jpg">
                </a>
                <div class="modal fade" id="4" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/kerajinan-batik-kayu-topeng-krebet.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>Kerajinan batik kayu topeng krebet</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#5">
                    <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/Batik-kayu-wayang-krebet.jpg">
                </a>
                <div class="modal fade" id="5" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/Batik-kayu-wayang-krebet.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>Kerajinan batik kayu wayang krebet</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#6">
                    <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/Jhatilan-Srimuda-Budaya-Krebet-1024x682.jpg">
                </a>
                <div class="modal fade" id="6" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/Jhatilan-Srimuda-Budaya-Krebet-1024x682.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>Jhatilan srimuda budaya krebet</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#7">
                    <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/jurang-pulosari.jpeg">
                </a>
                <div class="modal fade" id="7" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/jurang-pulosari.jpeg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>Jurang pulosari</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#8">
                    <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/dewisri.jpg">
                </a>
                <div class="modal fade" id="8" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/dewisri.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>Homestay dewi sri krebet</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#9">
                    <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/2homestay.jpg">
                </a>
                <div class="modal fade" id="9" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/2homestay.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>Downhill bukit imogiri</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#10">
                    <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/Sawah.jpg">
                </a>
                <div class="modal fade" id="10" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/Sawah.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>Wisata pesawahan di gunung cilik</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#11">
                    <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/1homestay-1.jpg">
                </a>
                <div class="modal fade" id="11" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/1homestay-1.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>Downhill bukit hijau imogiri</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#12">
                    <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/WhatsApp-Image-2021-06-08-at-11.10.12-1024x575.jpeg">
                </a>
                <div class="modal fade" id="12" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://desawisatabantul.com/wp-content/uploads/2021/06/WhatsApp-Image-2021-06-08-at-11.10.12-1024x575.jpeg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>Mbulak umpeng</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#13">
                    <img src="https://desawisatabantul.com/wp-content/uploads/2021/04/Selopamioro-1-1536x864.jpg">
                </a>
                <div class="modal fade" id="13" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://desawisatabantul.com/wp-content/uploads/2021/04/Selopamioro-1-1536x864.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>Selo pamioro adventure park</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>