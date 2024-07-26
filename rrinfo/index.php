<?php get_header(); ?>


<?php if(have_posts()) { ?>
    <section class="jumbotron text-center">
        <div class="carousel-contain">

            <?php the_post(); ?>
            <div class="carousel">
                <div class="slide"
                    style="background-image:url('<?php the_post_thumbnail_url() ?>');">
                    <div class="bg-fade">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 slide-content">
                                    <div class="content-block">
                                        <h3><?php the_title() ?></h3>
                                        <p><?php the_excerpt(); ?></p>
                                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute()?>"><button type="button" class="btn btn-dark">leia mais</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <main role="main">
    <div class="album py-5 bg-light">
        <div class="container"> 
            <div class="row">

                <?php while(have_posts()) { ?>
                    <?php the_post(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute()?>" class="no-decoration">
                            <div class="card mb-4">
                                <div class="card-img-top">
                                    <div class="div-img" style="background-image:url('<?php the_post_thumbnail_url( "medium" ) ?>');" alt="Card image cap"></div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title() ?></h5>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                    <div class="text-center">
                                        <small class="text-muted"><time datetime="<?php echo get_the_date('c') ?>"><?php echo get_the_date() ?></time>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php } ?>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="#"><button type="button" class="btn btn-dark ">carregar mais</button></a>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-dark" id="go-to-top"><i class="fa-solid fa-arrow-up"></i></a>

    </main>
    <?php the_posts_pagination( ); ?>
<?php } else { ?>
    <p>Sorry, no posts matched your criteria</p>
<?php } ?>



<?php get_footer(); ?>