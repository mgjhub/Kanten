<?php 
// Template Name: Programside // 
get_header();
?>

<?php
if( have_posts() ) :
    while( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/post/content' );
    endwhile;    
endif;
?>

<?php get_footer(); ?>

<!-- CSS -->

<style>

body {
    background-color: #141414;
  font-family: "ATF Franklin Gothic", Arial, sans-serif;
}

.entry-title {
    display: none;
}

h1 {
    text-align: center;
    padding: 2rem 0;
    font-size: 150px;
    font-family: "ATF Franklin Gothic", Arial, sans-serif;
    font-weight: 900;
    color: #f2f2f2;
  margin-top: 250px;
}

.wp-block-lazyblock-program-event {
  margin: 0 100px;
}

.event-box {
  width: 100%;
  height: 350px;
  background: #464646;

  /* top left - bottom right */        
  -webkit-clip-path: polygon(0 25%, 0 100%, 95% 100%, 100% 75%, 100% 0, 05% 0);
  clip-path: polygon(0 25%, 0 100%, 95% 100%, 100% 75%, 100% 0, 05% 0);

  /* top right - bottom left */
  /* -webkit-clip-path: polygon(0px 0px, 0px 85%, 5% 100%, 100% 100%, 100% 15%, 95% 0);
  clip-path: polygon(0px 0px, 0px 85%, 5% 100%, 100% 100%, 100% 15%, 95% 0); */

  overflow: hidden;

  display: flex;
  align-items: center;
  margin: 2rem 0;
}

.image-box {
    width: 40%;
    height: 100%;
    overflow: hidden;
    padding-right: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.image {
    width: 100%;
    min-height: 100%;
    object-fit: cover;
}

.text-area {
    width: 60%;
    padding: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
  
.description {

}

.event-headline {
    text-align: center;
    font-size: 40px;
    font-family: "ATF Franklin Gothic", Arial, sans-serif;
    font-weight: 600;
    color: #141414;
    text-shadow: 0 0 10px #f2f2f2;
  padding-top: 3rem;
}

  .entry-content {
    padding-bottom: 150px;
  }
  
.event-time {
    color: #f2f2f2;
    padding: 0.5rem 5rem;
    text-align: center;
    font-size: 20px;
}

.event-description {
    color: #f2f2f2;
    padding: 1rem 5rem;
    font-size: 16px;
}

.tag {
    color: #f2f2f2;
}

.button-box {
  padding-bottom: 3rem;
}

.event-btn {
    padding: 0.8rem;
    -webkit-clip-path: polygon(0 25%, 0 100%, 85% 100%, 100% 75%, 100% 0, 15% 0);
    clip-path: polygon(0 25%, 0 100%, 85% 100%, 100% 75%, 100% 0, 15% 0);
    margin: 0 1rem;
    border: none;
    width: 120px;
    font-size: 16px;
    font-weight: 600;
}

.read-more {
    background-color: #f2f2f2;
    color: #141414;
    
}

.buy-ticket {
    background-color: #141414;
    color: #f2f2f2;
}

.read-more:hover, .buy-ticket:hover {
    opacity: 70%;
}
  
  /* Media Query */
  @media (min-width: 1200px){
    h1 {
      margin-top: 100px;
    }
  }
  

