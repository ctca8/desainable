<?php
    $this->load->view('frontend/template/v_header');
?>

<!-- 
================================================== 
    Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>About us</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">About us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>   
</section><!--/#page-header-->

<!-- 
================================================== 
    Company Description Section Start
================================================== -->
<section class="company-description">
    <div class="container">
        <div class="row">
            <div class="col-md-5 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="<?php echo base_url('templates/frontend/images/about/about-company.jpg') ?>" alt="" class="img-responsive">
            </div>
            <div class="col-md-7">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Siapa Kami Sebenarnya ?</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        Kami adalah mitra terbaik anda dalam pembuatan desain slide presentasi, poster ilmiah, poster produk, x-banner, katalog produk, CV (Curriculum Vitae).
                        <br>

                    </p>
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Visi</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                        Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                    </p>

                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Misi</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                        <i class="fa fa-paper-plane"> </i> Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                    </p>
                    <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                        <i class="fa fa-paper-plane"> </i> Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                    </p>
                    <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                        <i class="fa fa-paper-plane"> </i> Memberikan pelayanan terbaik dengan harga yang bersahabat
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Company Feature Section Start
================================================== -->
<section class="about-feature clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                <h2>
                Mengapa Memilih Kami ?
                </h2>
                <p>
                    Kami mengerti keinginan dan kebutuhan pelanggan kami. Kami menyediakan berbagai macam desain dengan kualitas premium tetapi dengan harga lebih murah dibanding jasa desain lain.
                </p>
            </div>
            <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                <h2 class="item_title">
                Apa yang anda dapatkan ?
                </h2>
                <p>
                    Anda akan mendapatkan pelayan berkelas dari para desainer kami. Jika anda kurang sesuai dengan desain yang anda dapatkan, anda dapat mengajukan revisi untuk beberapa produk.
                </p>
            </div>
            <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                <h2 class="item_title">
                Masih ragu dengan kami ?
                </h2>
                <p>
                    Setelah sekian banyak project yang kami kerjakan anda masih ragu?. Sepertinya anda perlu sesekali mencoba service kami. Jangan salahkan kami jika anda terpesona dengan desain yang kami berikan.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Team Section Start
================================================== -->
<!-- <section id="team">
    <div class="container">
        <div class="row">
            <h2 class="subtitle text-center">Di balik layar desainable</h2>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <div class="team-img">
                        <img src="<?php echo base_url('templates/frontend/images/team/team-1.jpg') ?>" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Dadang Aris Setyo Budi</h3>
                    <p class="team_designation">CEO, Project Manager</p>
                    <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <div class="team-img">
                        <img src="<?php echo base_url('templates/frontend/images/team/team-2.jpg') ?>" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">David Bintang Setiawan</h3>
                    <p class="team_designation">CEO, Project Manager</p>
                    <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <div class="team-img">
                        <img src="<?php echo base_url('templates/frontend/images/team/team-3.jpg') ?>" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Afif Zidan Nurrisqi</h3>
                    <p class="team_designation">CEO, Project Manager</p>
                    <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <div class="team-img">
                        <img src="<?php echo base_url('templates/frontend/images/team/team-4.jpg') ?>" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Candra Tri Cahyo Adi</h3>
                    <p class="team_designation">CEO, Project Manager</p>
                    <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->
        
<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Me</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        Sampaikan kesan atau pesan anda melalui form di bawah ini
                    </p>
                    <div class="contact-form">
                        <form id="contact-form" method="post" action="sendmail.php" role="form">
                
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Your Name" class="form-control" name="name" id="name" disabled="">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" disabled="">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject" disabled="">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message" disabled=""></textarea>    
                            </div>
                            
                            
                            <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message" disabled="">
                            </div>                      
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        Temukan kami di alamat berikut ini Jl. Lumban Tobing No.2, Setabelan, Banjarsari, Kota Surakarta, Jawa Tengah 57139
                    </p>
                    <!-- <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.277552998015!2d90.3678744!3d23.773128800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ae4adf3cb9%3A0x7f2cf443b764e4a4!2sShishu+Mela!5e0!3m2!1sen!2s!4v1435516022247" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row address-details">
            <div class="col-md-4">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <i class="ion-ios-location-outline"></i>
                    <h5>Jl. Lumban Tobing No.2, Setabelan <br>Banjarsari, Surakarta</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <i class="ion-ios-email-outline"></i>
                    <p>desainable@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <i class="ion-ios-telephone-outline"></i>
                    <p>0858-6713-3673</p>
                </div>
            </div>
        </div>
    </div>
</section>








<?php 
    $this->load->view('frontend/template/v_footer.php') 
?>