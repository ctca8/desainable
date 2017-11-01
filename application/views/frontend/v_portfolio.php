<?php
    $this->load->view('frontend/template/v_header');
?>

<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Portfolio</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Portfolio</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>   
</section><!--/#page-header-->

<section class="works">
    <div class="container" align="center">
        <div class="row">
            <?php 
                foreach ($portfolio as $portfolio) {
            ?>
            <div class="col-sm-3 col-xs-12">
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
                    <a href="">
                        <?php
                          $count=strlen($portfolio->portfolio_name);
                          if ($count<30) 
                          {
                            echo $portfolio->portfolio_name;
                          }
                          else
                          { 
                            echo substr($portfolio->portfolio_name, 0, 28)."...";
                          }
                        ?>
                    </a>
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

<?php 
    $this->load->view('frontend/template/v_footer.php') 
?>