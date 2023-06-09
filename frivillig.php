<?php 
// Template Name: Frivillig // 
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


<style>
 


  
body {
    background-color: #3a2d28;
}

.entry-title {
    display: none;
}

h1 {
    text-align: center;
    padding: 2rem 0 4rem 0;
    font-size: 150px;
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 900;
    color: #f2f2f2;
  	margin-top: 250px;
}

.img-text-box {
    display: flex;
    justify-content: center;
    align-items: center;
  	margin: 1rem 100px; 
  	height: fit-content;
}

.image-box {
    width: 50vw;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-right: 50px;
    height: fit-content;
}

.image {
    width: 80%;
    height: 100%;
    border: 5px solid #f6f6f6;
    margin: 0;
}

.image img {
    object-fit: cover;
    height: 100%;
    width: 100%;
}

.text-area {
    width: 50vw;
    padding-left: 50px;
    color: #f2f2f2;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
  
  .text-area p {
    padding-bottom: 1rem;
    font-size: 16px;
  }

.text-box-headline {
    font-size: 40px;
    text-align: center;
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 700;
    color: #f2f2f2;
    padding-bottom: 2rem;

}

.column-box {
    margin: 6rem 100px;
    height: fit-content;
    display: flex!important;
    align-items: center;
    justify-content: center;
}

.contact-box {
    background-color: #211a17;
    border: solid 5px #211a17;
    height: 100%;
    width: 50%;
}


.contact-info-headline, .contact-form-headline {
    text-align: center;
    font-size: 30px;
    padding-bottom: 1rem;
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 500;
    color: #f2f2f2;
}

.contact-text-box, .contact-info-outer-box {
    padding: 0.5rem 0.5rem;
}

.contact-info p {
    font-size: 18px;
    padding-bottom: 1.5rem;
}

.contact-info a {
    color: #f2f2f2;
}

.contact-info {
    background-color: #54413a;
    color: #f2f2f2;
    padding: 1rem 5rem;
}

.contact-form-box {
    padding: 1rem 5rem;
}

.wpforms-container {
    margin: 0!important;
}
  
  .wpforms-field-container input, .wpforms-field-medium {
    font-size: 18px!important;
  }

.wpforms-field-label {
    color: #e1e1e1!important;
    font-size: 18px!important;
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 600;
}

.wpforms-required-label {
    color: #ff0000!important;
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 600;
}

.wpforms-field {
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 400;
}

  .wpforms-container .wpforms-submit-container {
    padding: 0;
  }
  
  .wpforms-container .wpforms-submit-container {
    margin-top: 0!important;
  }
  
.social-media {
    padding-bottom: 0!important;
  }
  
  .info {
    padding-bottom: 0!important;
  }

.social-media-icons-contact {
  display: flex;
  justify-content: left;
}
  
.social-media-icons-contact img {
  width: 50px; 
  height: 50px; 
}

  .contact-image {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
  }
  
  .image-large {
      width: 100%;
      border: 5px solid #f6f6f6;
      height: 100%;
      margin: 0.1rem 0;
  }
  
    .image-large img {
      object-fit: cover;
      height: 100%;
      
  }

  /* Media Query */
  @media (min-width: 1200px){
    h1 {
      margin-top: 100px;
    }
  }
  
  @media (max-width: 1500px) {
    .wp-container-6 {
      flex-direction: column;
    }
  }
  
    @media (max-width: 1300px) {
  .column-box {
        flex-direction: column;
    }
      
          .wp-container-6 {
      flex-direction: row;
    }
      
      .contact-box {
        width: 100%;
      }
      
      .contact-image {
        width: 100%
      }
  }
    
  @media (max-width: 1200px) {
  
    h1 {
      font-size: 125px;
    }
    
  .wp-container-3 {
    flex-direction: column-reverse;
  }
    
  .image-box {
    width: auto;
    padding: 0;
  }
  
    .text-area {
      width: auto;
      padding: 0;
  }

    .contact-text-box,
    .contact-form-box {
        padding: 1rem 5rem; 
    }  
}
  
  @media (max-width: 1000px) {
    h1 {
      font-size: 100px;
    }
  }

  
  @media (max-width: 900px) {
    .wp-container-6 {
      flex-direction: column;
    }
      
    h1 {
      font-size: 75px;
    }
    .contact-text-box {
        padding: 0;
    }
  }
  
  @media (max-width: 800px) {
    .text-box-headline {
      font-size: 30px;
    }
  }
  
  @media (max-width: 700px) {
    .contact-info, .contact-form-box {
      padding: 1rem 3rem;
    }
    h1 {
      font-size: 60px;
    }

    
    .text-box-headline {
      font-size: 25px;
    }
  }
  
  @media (max-width: 600px) {
    .contact-info, .contact-form-box {
      padding: 1rem 2rem;
    }
    .contact-info p, .wpforms-field-label, .wpforms-field-container input, .wpforms-field-medium {
      font-size: 16px!important;
    }
    
    .img-text-box {
        margin: 1rem 75px;
    }
  }
</style>