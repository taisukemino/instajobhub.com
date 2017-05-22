/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );
    
    // Slider Overlay Direction
    wp.customize( 'slider_overlay_direction', function( value ) {
		value.bind( function( newval ) {
		  if( 'below' == newval ) {
		      $('.slider-overlay1').css({
                '-webkit-transform':'rotate(180deg)',
                '-moz-transform':'rotate(180deg)'
              });
		  }else {
		      $('.slider-overlay1').css({
                '-webkit-transform':'rotate(0deg)',
                '-moz-transform':'rotate(0deg)'
              });
		  }
		} );
	} );

    /** Background Color **/
	wp.customize( 'about_section_bg_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_about_section").css({
	  		'background-color':newval,
		  });
		} );
	} );

	wp.customize( 'portfolio_section_bg_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_portfolio_section").css({
	  		'background-color':newval,
		  });
		} );
	} );

	wp.customize( 'services_section_bg_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_services_section").css({
	  		'background-color':newval,
		  });
		} );
	} );

	wp.customize( 'blog_section_bg_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_blog_section").css({
	  		'background-color':newval,
		  });
		} );
	} );

	wp.customize( 'cta_section_bg_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_cta_section").css({
	  		'background-color':newval,
		  });
		} );
	} );

	wp.customize( 'testimonial_section_bg_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_testimonial_section").css({
	  		'background-color':newval,
		  });
		} );
	} );

	wp.customize( 'team_section_bg_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_team_section").css({
	  		'background-color':newval,
		  });
		} );
	} );

	/** Background Image **/
	wp.customize( 'about_section_bg_image', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_about_section").css({
		  	'background-image':'url("'+newval+'")',
		  });
		} );
	} );

	wp.customize( 'portfolio_section_bg_image', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_portfolio_section").css({
	  		'background-image':'url("'+newval+'")',
		  });
		} );
	} );

	wp.customize( 'services_section_bg_image', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_services_section").css({
	  		'background-image':'url("'+newval+'")',
		  });
		} );
	} );

	wp.customize( 'blog_section_bg_image', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_blog_section").css({
	  		'background-image':'url("'+newval+'")',
		  });
		} );
	} );

	wp.customize( 'cta_section_bg_image', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_cta_section").css({
	  		'background-image':'url("'+newval+'")',
		  });
		} );
	} );

	wp.customize( 'testimonial_section_bg_image', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_testimonial_section").css({
	  		'background-image':'url("'+newval+'")',
		  });
		} );
	} );

	wp.customize( 'team_section_bg_image', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_team_section").css({
	  		'background-image':'url("'+newval+'")',
		  });
		} );
	} );

	/** Background Repeat **/
	wp.customize( 'about_section_bg_repeat', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_about_section").css({
		  	'background-repeat': newval,
		  });
		} );
	} );

	wp.customize( 'portfolio_section_bg_repeat', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_portfolio_section").css({
	  		'background-repeat': newval,
		  });
		} );
	} );

	wp.customize( 'services_section_bg_repeat', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_services_section").css({
	  		'background-repeat': newval,
		  });
		} );
	} );

	wp.customize( 'blog_section_bg_repeat', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_blog_section").css({
	  		'background-repeat': newval,
		  });
		} );
	} );

	wp.customize( 'cta_section_bg_repeat', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_cta_section").css({
	  		'background-repeat': newval,
		  });
		} );
	} );

	wp.customize( 'testimonial_section_bg_repeat', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_testimonial_section").css({
	  		'background-repeat': newval,
		  });
		} );
	} );

	wp.customize( 'team_section_bg_repeat', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_team_section").css({
	  		'background-repeat': newval,
		  });
		} );
	} );

	/** Background Position **/
	wp.customize( 'about_section_bg_position', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_about_section").css({
		  	'background-position': newval,
		  });
		} );
	} );

	wp.customize( 'portfolio_section_bg_position', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_portfolio_section").css({
	  		'background-position': newval,
		  });
		} );
	} );

	wp.customize( 'services_section_bg_position', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_services_section").css({
	  		'background-position': newval,
		  });
		} );
	} );

	wp.customize( 'blog_section_bg_position', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_blog_section").css({
	  		'background-position': newval,
		  });
		} );
	} );

	wp.customize( 'cta_section_bg_position', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_cta_section").css({
	  		'background-position': newval,
		  });
		} );
	} );

	wp.customize( 'testimonial_section_bg_position', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_testimonial_section").css({
	  		'background-position': newval,
		  });
		} );
	} );

	wp.customize( 'team_section_bg_position', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_team_section").css({
	  		'background-position': newval,
		  });
		} );
	} );

	/** Background Attachment **/
	wp.customize( 'about_section_bg_attachment', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_about_section").css({
		  	'background-attachment': newval,
		  });
		} );
	} );

	wp.customize( 'portfolio_section_bg_attachment', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_portfolio_section").css({
	  		'background-attachment': newval,
		  });
		} );
	} );

	wp.customize( 'services_section_bg_attachment', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_services_section").css({
	  		'background-attachment': newval,
		  });
		} );
	} );

	wp.customize( 'blog_section_bg_attachment', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_blog_section").css({
	  		'background-attachment': newval,
		  });
		} );
	} );

	wp.customize( 'cta_section_bg_attachment', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_cta_section").css({
	  		'background-attachment': newval,
		  });
		} );
	} );

	wp.customize( 'testimonial_section_bg_attachment', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_testimonial_section").css({
	  		'background-attachment': newval,
		  });
		} );
	} );

	wp.customize( 'team_section_bg_attachment', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_team_section").css({
	  		'background-attachment': newval,
		  });
		} );
	} );

	/** Background Size **/
	wp.customize( 'about_section_bg_size', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_about_section").css({
		  	'background-size': newval,
		  });
		} );
	} );

	wp.customize( 'portfolio_section_bg_size', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_portfolio_section").css({
	  		'background-size': newval,
		  });
		} );
	} );

	wp.customize( 'services_section_bg_size', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_services_section").css({
	  		'background-size': newval,
		  });
		} );
	} );

	wp.customize( 'blog_section_bg_size', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_blog_section").css({
	  		'background-size': newval,
		  });
		} );
	} );

	wp.customize( 'cta_section_bg_size', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_cta_section").css({
	  		'background-size': newval,
		  });
		} );
	} );

	wp.customize( 'testimonial_section_bg_size', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_testimonial_section").css({
	  		'background-size': newval,
		  });
		} );
	} );

	wp.customize( 'team_section_bg_size', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_team_section").css({
	  		'background-size': newval,
		  });
		} );
	} );
    
    /** Section Title Color **/
    wp.customize( 'about_section_title_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_about_section .about h2").css({
	  		'color': newval,
		  });
		} );
	} );
    
    wp.customize( 'portfolio_section_title_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_portfolio_section h2").css({
	  		'color': newval,
		  });
		} );
	} );
    
    wp.customize( 'services_section_title_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_services_section h2").css({
	  		'color': newval,
		  });
		} );
	} );
    
    wp.customize( 'blog_section_title_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_blog_section h2").css({
	  		'color': newval,
		  });
		} );
	} );
    
    wp.customize( 'testimonial_section_title_color', function( value ) {
		value.bind( function( newval ) {
		  $(".testinomial h2").css({
	  		'color': newval,
		  });
		} );
	} );
    
    wp.customize( 'team_section_title_color', function( value ) {
		value.bind( function( newval ) {
		  $(".team h2").css({
	  		'color': newval,
		  });
		} );
	} );
    
    /** Section Content Color **/ 
    wp.customize( 'about_section_content_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_about_section .about-contents").css({
	  		'color': newval,
		  });
		} );
	} );
    
    wp.customize( 'services_section_content_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_services_section .service-descr").css({
	  		'color': newval,
		  });
          $("#plx_services_section .service-post-wrap h3").css({
	  		'color': newval,
		  });
          $("#plx_services_section .services-excerpt").css({
	  		'color': newval,
		  });
		} );
	} );   
    
    wp.customize( 'cta_section_content_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_cta_section .mid-content").css({
	  		'color': newval,
		  });
		} );
	} );   
    
    wp.customize( 'testimonial_section_content_color', function( value ) {
		value.bind( function( newval ) {
		  $(".client-testimonial").css({
	  		'color': newval,
		  });
		} );
	} );   
    
    wp.customize( 'team_section_content_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_team_section .member-says").css({
	  		'color': newval,
		  });
          $("#plx_team_section .team-member h3").css({
	  		'color': newval,
		  });
		} );
	} );      
    
} )( jQuery );
