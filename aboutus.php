<?php 
// Template Name: About Us // 
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
    background-color: #3a2d28;
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

.img-text-box .wp-container-3 {
    display: flex;
    justify-content: center;
    align-items: center!important;
}

.image-box {
    width: 50vw;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem 20px 1rem 100px;
    height: 100%;
}

.image {
    height: fit-content;
    margin: 0;
}

.image img {
    width: auto;
}

.text-area {
    width: 50vw;
    padding: 1rem 100px 1rem 20px;
    color: #f2f2f2;
    height: fit-content;
}

.text-box-headline {
    font-size: 30px;
    text-align: center;
    font-family: "ATF Franklin Gothic", Arial, sans-serif;
    font-weight: 700;
    color: #f2f2f2;
    padding-bottom: 0.5rem;

}

.text-area p {
    padding-bottom: 1.2rem;
}

.about-columns {
    margin: 6rem 100px!important;
    background-color: #54413a;
    border: #211a17 5px solid; 
}

  .wp-container-8{
    width: 100%;
    display: flex;
  }
  
.about-contact-column {
    padding: 1rem 5rem;
    color: #f2f2f2;
}
  
    .info {
    padding-bottom: 0!important;
  }

.contact-form-column {
    background-color: #211a17;
    color: #f2f2f2;
  	width: 50%;
  	padding: 1rem 5rem;
}

.wp-block-lazyblock-address {
    width: 100%;
    display: flex;
}

.contact-info-headline, .contact-form-headline {
    text-align: center;
    font-size: 30px;
    padding: 1rem 0 1.5rem 0;
    font-family: "ATF Franklin Gothic", Arial, sans-serif;
    font-weight: 500;
}

.about-contact-column p {
    font-size: 20px;
    padding-bottom: 1.5rem;
}

.contact-info-box a {
    color: #f2f2f2;
}

.contact-form {
    padding: 1rem;
}

.wpforms-field-label {
    color: #e1e1e1!important;
    font-size: 18px!important;
    font-family: "ATF Franklin Gothic", Arial, sans-serif;
    font-weight: 600;
}

.wpforms-required-label {
    color: #ff0000!important;
    font-family: "ATF Franklin Gothic", Arial, sans-serif;
    font-weight: 600;
}

.wpforms-field {
    font-family: "ATF Franklin Gothic", Arial, sans-serif;
    font-weight: 400;
}

.social-media {
    margin-top: 3rem;
    padding-bottom: 0!important;
  }

.social-media-icons-contact {
  display: flex;
  justify-content: left;
}

.social-media-icons-contact a {
  margin-right: 15px; 
  margin-top: 10px;
}

.social-media-icons-contact img {
  width: 50px; 
  height: 50px; 
}
  
/* Media Query */
  @media (min-width: 1200px){
    h1 {
      margin-top: 100px;
    }
  }

@media (max-width: 1200px) {
  .wp-container-3 {
    flex-direction: column-reverse;
  }
  
  .text-box-headline {
    margin: 15px 0;
  }
  
  
  
  .image-box {
    width: auto;
    padding: 0;
    }
  
  .image img {
      padding: 1rem 100px;
  }
  
  
    .text-area {
    width: auto;
    padding: 1rem 100px;
  }
    .about-columns {
        flex-direction: column;
    }
  
  .wp-container-8 {
    flex-direction: column;
  }
  .contact-form-column {
    width: auto;
  }
}

@media (max-width: 600px)  {
    h1 {
        font-size: 100px;
    }
    
    .text-area, .image img {
        padding: 1rem 75px;
    }
    
    .about-columns {
        margin: 6rem 75px!important;
        
    }
    
    .about-contact-column, .contact-form-column {
        padding: 1rem 2.5rem;
    }
}


</style>