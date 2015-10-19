<footer>
    <div class="container">

    	<div class="row">
    		<div class="col-md-8">
              <?php

                $args = array(
                  'menu' => 'footer',
                  'container' => '',
                  'items_wrap' => '<ul class="footernav">%3$s</ul>'
                  );

                wp_nav_menu( $args );

              ?>
	        </div>

	        <div class="col-md-4">
	        	<ul class="sm-icons">
	        		<li><a href="http://www.youtube.com/channel/UC2QwS3k61wM_rF_gCvgvCuw" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/youtube.png" alt="YouTube" /></a></li>
	        		<li><a href="https://www.facebook.com/ampsession" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/facebook.png" alt="Facebook" /></a></li>
	        		<li><a href="https://twitter.com/AMPSESSION" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/twitter.png" alt="Twitter" /></a></li>
	        		<li><a href="mailto:hello@ampsession.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/email.png" alt="Email" /></a></li>
	        		<li><a href="http://instagram.com/ampsession" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/instagram.png" alt="Instagram" /></a></li>
	        		<li><a href="https://plus.google.com/u/0/113204534575038474031/posts" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/googleplus.png" alt="Google+" /></a></li>
	            </ul>
	        </div>
	    </div>

		<div class="copyright">
	        <p>&copy; Copyright <?php echo date( 'Y' ); ?> Ampsession. Design & Developed by <a href="http://www.twitter.com/MsJackson_82">Christine Jackson</a>. All rights reserved.</p>
	        <? if(is_front_page()) { ?>
		        <div class="cc-license">
					<p>Main graphic <a href="https://flic.kr/p/i3e6Gc">creative commons female performer</a> at top by <a href="https://www.flickr.com/photos/cit_thmc/">David Burke</a>, used under <a href="https://creativecommons.org/licenses/by/2.0/">CC BY</a> / Destaurated with a filter from the original. The photographer and artist DO NOT endorse our service in any way.</p> 
					<p>Second graphic <a href="https://flic.kr/p/aArGLr">creative commons male performer</a> at top by <a href="https://www.flickr.com/photos/psicodrops/">C&aeute;ssio Abreu</a>, used under <a href="https://creativecommons.org/licenses/by/2.0/">CC BY</a> / Destaurated with a filter from the original. The photographer and artist DO NOT endorse our service in any way.</p>
					<p>Third graphic <a href="https://flic.kr/p/dZ3Zjd">creative commons male performer</a> at top by <a href="https://www.flickr.com/photos/avarty/">Avarty Photos</a>, used under <a href="https://creativecommons.org/licenses/by/2.0/">CC BY</a> / Destaurated with a filter from the original. The photographer and artist DO NOT endorse our service in any way.</p>
			    </div>
		    <? } ?>
		</div>


    </div>
</footer>
    
    <?php wp_footer(); ?>    

<script type="text/javascript">
jQuery( document ).ready(function( $ ) {
 
  //$("#owl-example").owlCarousel();
 
  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
 
  sync1.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
    navigation: true,
    pagination:false,
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
  });
 
  sync2.owlCarousel({
    /*items : 15,
    itemsDesktop      : [1199,5],
    itemsDesktopSmall     : [979,4],
    itemsTablet       : [768,8],*/
    itemsMobile       : [479,2],
    pagination:false,
    responsiveRefreshRate : 100,
    afterInit : function(el){
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });
 
  function syncPosition(el){
    var current = this.currentItem;
    $("#sync2")
      .find(".owl-item")
      .removeClass("synced")
      .eq(current)
      .addClass("synced")
    if($("#sync2").data("owlCarousel") !== undefined){
      center(current)
    }
  }
 
  $("#sync2").on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
  });
 
  function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
      if(num === sync2visible[i]){
        var found = true;
      }
    }
 
    if(found===false){
      if(num>sync2visible[sync2visible.length-1]){
        sync2.trigger("owl.goTo", num - sync2visible.length+2)
      }else{
        if(num - 1 === -1){
          num = 0;
        }
        sync2.trigger("owl.goTo", num);
      }
    } else if(num === sync2visible[sync2visible.length-1]){
      sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
      sync2.trigger("owl.goTo", num-1)
    }
    
  }

});
</script>

  </body>
</html>