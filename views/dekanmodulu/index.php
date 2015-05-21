<?php
/* @var $this yii\web\View */
$this->title = 'Dekan Sayfası';
?>
<div class="dekanmodulu-index">

    <div class="container">
        <div class="span3 well">
            <center>
                <h3>Harun Keleşoğlu</h3><a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/c2.0.148.148/p148x148/10364163_551730588268843_4238855143309187169_n.jpg?oh=4c522894d2e1fb70ceca843726b1a3b5&oe=55CCA404&__gda__=1438700691_cbe349780225dd394a521d7bcd2838c3" name="aboutme" width="140" height="140" class="img-circle"></a>

            </center>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" id="myModalLabel">Harun Hakkında</h4>
                    </div>
                    <div class="modal-body">
                        <center>
                            <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/c2.0.148.148/p148x148/10364163_551730588268843_4238855143309187169_n.jpg?oh=4c522894d2e1fb70ceca843726b1a3b5&oe=55CCA404&__gda__=1438700691_cbe349780225dd394a521d7bcd2838c3" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                            <h3 class="media-heading">Harun Keleşoğlu <small>TR</small></h3>
                            <span><strong>Ünvanlar: </strong></span>
                            <span class="label label-warning">HTML5/CSS</span>
                            <span class="label label-info">Adobe CS 5.5</span>
                            <span class="label label-info">Microsoft Office</span>
                            <span class="label label-success">Windows XP, Vista, 7</span>
                        </center>
                        <hr>
                        <center>
                            <p class="text-left"><strong>Biografi </strong><br>
                                Biyografi bilgileri.Biyografi bilgileri.Biyografi bilgileri.Biyografi bilgileriBiyografi bilgileri.Biyografi bilgileri.Biyografi bilgileri.Biyografi bilgileri.Biyografi bilgileri.Biyografi bilgileri</p>
                            <br>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <center>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tamam</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <h1>Dekan Sayfasına Hoşgeldiniz </h1>

        <p class="lead">Sahip olduğunuz yetkilere göre işlemler yapabilirsiniz.</p>

        <p><a class="btn btn-lg btn-success" href="#aboutModal" data-toggle="modal" data-target="#myModal">Profil Bilgilerim</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Akademisyen Ekle</h2>

                <p>Fırat Üniversitesi Teknoloji Fakültesine Akademisyen Ekleme, Silme ve Güncelleme işlemlerini bu bölümden yapabilirsiniz.</p>

                <p><a class="btn btn-default" href="http://localhost:8082/ders_yuku_hesaplama/web/index.php?r=bolum">Akademisyen Bilgileri &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Bölüm Ekle</h2>

                <p>Fırat Üniversitesi Teknoloji Fakültesine Bölüm Ekleme, Silme ve Güncelleme işlemlerini bu sayfadan yapabilirsiniz.</p>

                <p><a class="btn btn-default" href="http://localhost:8082/ders_yuku_hesaplama/web/index.php?r=bolum">Bölüm Bilgileri &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Ders Tipi Düzenle</h2>

                <p>Fırat Üniversitesi Teknoloji Fakültesine Ders Tipi Ekleme, Silme ve Güncelleme işlemlerini bu bölümden yapabilirsiniz.</p>

                <p><a class="btn btn-default" href="http://localhost:8082/ders_yuku_hesaplama/web/index.php?r=derstipi">Ders Tipi Bilgileri &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
