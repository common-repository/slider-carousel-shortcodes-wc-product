<?php




// attivo wc_shortcode_marco----------------------------------------------------





	
	
function wcsm_carousel_shortcode_marco( $atts, $content = null ) {

	
	 $wc_carousel_shortcode_marco_itemswc = shortcode_atts( array(
		'itemswc' => 'itemswc',
		 'autoplay' => 'autoplay',
	), $atts );

	
	
	
	
	
	
	$GLOBALS['wcsmautoanimazione'] = esc_attr($wc_carousel_shortcode_marco_itemswc['autoplay']) ;
	
	  	$GLOBALS['wcsmnumerocolonnewc'] = esc_attr($wc_carousel_shortcode_marco_itemswc['itemswc']) ;
	 

	
    return '<div class="wc-carousel-marco">'  . do_shortcode($content) .  '      </div>';
	
	
  
	
	
}




add_shortcode( 'wccarousel', 'wcsm_carousel_shortcode_marco');









function wcsm_carousel_shortcode_marco_b( $atts, $content = null ) {

	
	 $wc_carousel_shortcode_marco_itemswcb = shortcode_atts( array(
		'itemswc' => 'itemswc',
		 'autoplay' => 'autoplay',
	), $atts );

	
	
	
	
	
	
	$GLOBALS['wcsmautoanimazione-b'] = esc_attr($wc_carousel_shortcode_marco_itemswcb['autoplay']) ;
	
	  	$GLOBALS['wcsmnumerocolonnewc-b'] = esc_attr($wc_carousel_shortcode_marco_itemswcb['itemswc']) ;
	 

	
    return '<div class="wc-carousel-marco-b">'  . do_shortcode($content) .  '      </div>';
	
	
  
	
	
}




add_shortcode( 'wccarousel-b', 'wcsm_carousel_shortcode_marco_b' );

















function wcsm_aggiungi_al_footer_carousel_marco(){

if ($GLOBALS['wcsmnumerocolonnewc'] !== NULL) {




?>
	
	<script>
	var wcsmelemento = document.querySelector(".wc-carousel-marco ul.products");
if(wcsmelemento  != null){
wcsmelemento.classList.add("za-owl-carousel");
		wcsmelemento.classList.add("owl-carousel");		
	
	}
	</script>
	<script>
	var wcsmelementob = document.querySelector(".wc-carousel-marco-b ul.products");
if(wcsmelementob  != null){
wcsmelementob.classList.add("marcob-owl-carousel");
		wcsmelementob.classList.add("owl-carousel");		
	
	}
	</script>






  
 <?php
	
	
	


	
    


	
    wp_enqueue_script('script-name',plugin_dir_url( __FILE__ ) . '/owl.carousel.min.js','1.0.0',true);


	  wp_enqueue_style( 'style-wcsm-carousel', plugins_url( '/style-wc-carousel-product.css', __FILE__ ) );	
	
										   
  
   ?>
 


   
         <script> 	   
        

		jQuery(document).ready(function($) {
    var $eowl = $('.za-owl-carousel');


      $eowl.children().each( function( index ) {
        jQuery(this).attr( 'data-position', index ); 
      });
      
      $eowl.owlCarousel({
        center: false,
        nav:true,
        loop: true,
		autoplay:<?php echo  $GLOBALS['wcsmautoanimazione']; ?>,
    autoplayTimeout:3500,
        items: '2',
      margin:20,
        navText: ["<i class='fa arrow-circle-left'><</i>","<i class='fa arrow-right'>></i>"],
        responsive:{
          0:{
              items:1
          },
          700:{
              items:2
          },
          1000:{
              items: <?php echo  $GLOBALS['wcsmnumerocolonnewc']; ?> + 0
          }
       }
      });
    $(document).on('click', '.listing-item', function() {
      $eowl.trigger('to.za.owl.carousel', $(this).data( 'position' ) ); 
    });
          });

	

			 
	
	  
	
	 
			 
    </script> 	             
          
                          
      <script> 	   
        
    

			 
		jQuery(document).ready(function($) {
    var $eowl = $('.marcob-owl-carousel');


      $eowl.children().each( function( index ) {
        jQuery(this).attr( 'data-position', index ); 
      });
      
      $eowl.owlCarousel({
        center: false,
        nav:true,
        loop: true,
		autoplay:<?php echo  $GLOBALS['wcsmautoanimazione-b']; ?>,
    autoplayTimeout:3500,
        items: '2',
      margin:20,
        navText: ["<i class='fa arrow-circle-left'><</i>","<i class='fa arrow-right'>></i>"],
        responsive:{
          0:{
              items:1
          },
          700:{
              items:2
          },
          1000:{
              items: <?php echo  $GLOBALS['wcsmnumerocolonnewc-b']; ?> + 0
          }
       }
      });
    $(document).on('click', '.listing-item', function() {
      $eowl.trigger('to.marcob.owl.carousel', $(this).data( 'position' ) ); 
    });
          });

	

			 
	
	  
	
	 
			 
    </script> 	             
                               
                                   
<?php
										   
								   
								   
										   
										   
   }    
}

add_action( 'wp_footer', 'wcsm_aggiungi_al_footer_carousel_marco' );









	













