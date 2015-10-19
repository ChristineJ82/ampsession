<!doctype html>
<html class="no-js" lang="en">
  <head>
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,700' rel='stylesheet' type='text/css'>-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
    <meta charset="utf-8" />
    <title>

      <?php

        wp_title('-', true, 'right');
        bloginfo( 'name' );

      ?>

    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->    

    <?php wp_head(); ?>
  </head>
  <body  <?php body_class(); ?>>
    <header class="gradient">

    <div class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><span>Empowering Music-Makers Everywhere - Be Heard</span></a>
        </div>
        <div class="navbar-collapse collapse">
          <!--<form class="navbar-form navbar-right" role="form">
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>-->

              <?php

                $args = array(
                  'menu' => 'top nav',
                  'container' => '',
                  'items_wrap' => '<ul id="topnav" class="nav navbar-nav navbar-right menu">%3$s</ul>'
                  );

                wp_nav_menu( $args );

              ?>

        </div><!--/.navbar-collapse -->
      </div>
    </div>

<?php if(is_front_page()) {?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-6">
              <h1 class="text-center">Learn how to get<br />
                  your music heard!</h1>

                  <div id="signup_wrapper">
                    <div id="signup_form">

                    <?php echo do_shortcode( '[contact-form-7 id="609" title="Sign Up"]' ); ?>

                    </div>
                  </div>
                  <!--<h1 class="text-center">Breaking into the Music Industry with Jean Grae<br/>
                    <small>Live-streamed Interactive Class</small></h1>
                  <div id="signup_wrapper">
                    <div id="signup_form">
                      <a class="btn btn-primary btn-lg aligncenter rsvp-btn" href="<? bloginfo ('url'); ?>/breaking-into-the-music-industry-with-jean-grae/">RSVP Here!</a>
                    </div>
                  </div> -->           

                </div>
          </div>

      </div>
    </div>
<?php } ?>

    </header>   
