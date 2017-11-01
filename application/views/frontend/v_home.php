<?php 
    $this->load->view('frontend/template/v_header.php') 
?>
    <body>
        <section id="hero-area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                            
                            <!-- Slider -->
                            <section class="cd-intro">
                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".1s" >
                                <span style="color: white;">HI, Kami adalah desainable</span><br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">MITRA TERBAIK DESAIN</b>
                                    <b>POSTER ILMIAH</b>
                                    <b>SLIDE PRESENTASI</b>
                                    <b>CV (CURRICULUM VITAE)</b>
                                    <b>X-BANNER</b>
                                    <b>POSTER PRODUK</b>
                                    <b>KATALOG PRODUK</b>
                                </span>
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                <!-- <h2 class="wow fadeInUp animated" data-wow-delay=".1s" >
                                    "untuk desain yang lebik baik"
                                </h2> -->
                                <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".1s" href="#works" data-section="#works" >Lihat Portfolio</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->
            <!--
            ==================================================
            Slider Section Start
            ================================================== -->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                                <h2>
                                Siapa Kami ?
                                </h2>
                                <p>
                                    Kami adalah mitra terbaik anda dalam desain slide presentasi, poster ilmiah, poster UMKM, X-banner, CV (Curriculum Vitae), kartu nama, katalog produk dan lain-lain.
                                    Kami memberikan layanan terbaik dengan tim yang terbagi dalam masing-masing bidang. Selain itu kami juga menawarkan desain dengan harga yang bersahabat
                                </p>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                                <img src="<?php echo base_url('templates/frontend/images/about/about.jpg') ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->
            <!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
            <section id="works" class="works">
                <div class="container" align="center">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s"><b>Portfolio Kami</b></h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            Kami telah mengerjakan berbagai macam jenis desain<br><br>
                            <a href="<?php echo base_url('portfolio'); ?>" class="btn btn-send" style="background-color: #FFD700; color: black; border-color: black; padding: 10px;"><b>LIHAT SEMUA PORTFOLIO</b></a>
                        </p>
                    </div>
                    <div class="row">
                        <?php 
                            foreach ($portfolio_home as $portfolio) {
                        ?>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                <div class="img-wrapper">
                                    <img src="<?php echo base_url('uploads/images/portfolio/'.$portfolio->file_portfolio) ?>" class="img-responsive" alt="<?php echo $portfolio->portfolio_name ?>" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="<?php echo base_url('uploads/images/portfolio/'.$portfolio->file_portfolio) ?>">zoom in</a>
                                            <!-- <a target="_blank" href="single-portfolio.html">Details</a> -->
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                
                                    <?php 
                                        echo "- ".$portfolio->category_name." -";
                                    ?>
                                
                                </h4>
                                <p>
                                    <?php
                                      $count=strlen($portfolio->portfolio_name);
                                      if ($count<40) 
                                      {
                                        echo $portfolio->portfolio_name;
                                      }
                                      else
                                      { 
                                        echo substr($portfolio->portfolio_name, 0, 38)."...";
                                      }
                                    ?>
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    
                </div>
            </section> <!-- #works -->


            <!--
            ==================================================
            Clients Section Start
            ================================================== -->
            <!-- <section id="clients">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="subtitle text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Our Happy Clinets</h2>
                            <p class="subtitle-des text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
                            <div id="clients-logo" class="owl-carousel">
                                <div>
                                    <img src="images/clients/logo-1.jpg" alt="">
                                </div>
                                <div>
                                    <img src="images/clients/logo-2.jpg" alt="">
                                </div>
                                <div>
                                    <img src="images/clients/logo-3.jpg" alt="">
                                </div>
                                <div>
                                    <img src="images/clients/logo-4.jpg" alt="">
                                </div>
                                <div>
                                    <img src="images/clients/logo-5.jpg" alt="">
                                </div>
                                <div>
                                    <img src="images/clients/logo-1.jpg" alt="">
                                </div>
                                <div>
                                    <img src="images/clients/logo-2.jpg" alt="">
                                </div>
                                <div>
                                    <img src="images/clients/logo-3.jpg" alt="">
                                </div>
                                <div>
                                    <img src="images/clients/logo-4.jpg" alt="">
                                </div>
                                <div>
                                    <img src="images/clients/logo-5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

                            
            <!-- 
            ================================================== 
                Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">BERMINAT MENJADI FREELANCER KAMI ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Bagi anda yang mempunyai kemampuan desain dan berminat menjadi mitra bisni kami</br>Kirimkan cv (curriculum vitae) dan link portfolio desain kalian ke email <b>desainable@gmail.com</b> dengan subjeck 'Freelancer_desainable'<br>Selamat bergabung bersama kami</p>
                                <!-- <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a> -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

<?php 
    $this->load->view('frontend/template/v_footer.php') 
?>