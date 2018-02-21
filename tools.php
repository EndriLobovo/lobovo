<?php
/* Template Name: Lobovo Tool */

$allow_comments = oxy_get_option( 'site_comments' );

get_header();

global $post;

oxy_page_header( $post->ID, array( 'heading_type' => 'page' ) ); ?>


<div class="container tools">
  <div class="col-md-8">
    <h3>Check Keyword Density</h3>
      <form id="form" action="" method="post">
        <span class="col-md-12 keywords-textarea">
          <textarea placeholder="Please enter your text here"  class ="message" type="text" name="message" ></textarea>
        </span>
        <br>
      </form>
  </div>
  <div class="col-md-4">
    <div class="keywords-density">
       <div class="density-details">
      
      </div> 
    </div>

  </div>
</div>
