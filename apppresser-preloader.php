<?php
add_action ( 'wp_head', 'hook_head_preloader' );
 function hook_head_preloader() {
	 echo "<script type='text/javascript'>
	  jQuery(window).load(function () {
	      'use strict';
	 if(  jQuery( '.et-bfb' ).length <= 0 && jQuery( '.et-fb' ).length <= 0  ){
	 jQuery('.status').fadeOut();
	 jQuery('.preloader').delay(1000).fadeOut('slow');
	 }else{
	 jQuery('.preloader').css('display','none');
	 }
	  });
	 </script>
	 <style>
	 .preloader {
	    position: fixed;
	    top: 0;
	    left: 0;
	    right: 0;
	    bottom: 0;
	    background-color: #c0007a;
	    z-index: 100000;
	    height: 100%;
	    width: 100%;
	    overflow: hidden !important;
	 }
	 .preloader .status {
	    width: 200px;
	    height: 200px;
	    position: relative;
	    top: 25%;
	    background-image: url('https://app.thehighcountrygirls.com/wp-content/uploads/2020/11/THC-Girls-App-Splash-1.png');
	    background-repeat: no-repeat;
	    background-position: center;
	    -webkit-background-size: cover;
	    background-size: cover;
	    margin-left: auto;
	    margin-right: auto;
	 }
	 </style>";
 }

?>
