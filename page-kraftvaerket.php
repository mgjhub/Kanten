<?php 
// Template Name: Kraftværket // 
get_header();
?>

<div class="hero-img">
    <img src="<?php echo get_template_directory_uri() ?>/images/kraftværket-kanten.jpg" alt="Billeder af Kraftværket">
</div>

<?php
if( have_posts() ) :
    while( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/post/content' );
    endwhile;    
endif;
?>

<footer class="footer">
  <div class="footer-left">
    <h3>For unge drevet af unge</h3>
    <a href="http://kantenesbjerg.com/events/">Events</a>
    <a href="http://kantenesbjerg.com/program/">Program</a>
    <a href="http://kantenesbjerg.com/kraftvaerket/">Kraftværket</a>
    <a href="http://kantenesbjerg.com/om-os/">Om os</a>
  </div>

  <div class="footer-middle">
    <div class="logo">
      <img src="<?php echo get_template_directory_uri() ?>/images/Kanten-logo.png" alt="Logo">
    </div>
    <div class="footer-text">
      <p>Gl. Novrupvej 14, 6705 Esbjerg Ø</p>
      <p>+45 28 97 11 85</p>
      <p>musikforeningenkanten@gmail.com</p>
      <p>CopyRight @Kanten 2023</p>
    </div>
  </div>

  <div class="footer-right">
    <h5>Tilmeld dig vores nyhedsbrev </h5>
    
    <form action="https://easv365.us21.list-manage.com/subscribe/post?u=114b6f34947847e7f1bc1a036&amp;id=0c1551c060&amp;f_id=005f55e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
  <div id="mc_embed_signup_scroll">
    <div class="mc-field-group">
      <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
      <input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="button">
    </div>
    <div id="mce-responses" class="clear">
      <div class="response" id="mce-error-response" style="display:none"></div>
      <div class="response" id="mce-success-response" style="display:none"></div>
    </div>
  </div>
</form>

    <div class="social-media-icons">
      <a href="https://www.facebook.com" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icons8-facebook-48.png" alt="Facebook"></a>
      <a href="https://www.instagram.com" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icons8-instagram-48.png" alt="Instagram"></a>
      <a href="https://www.youtube.com" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icons8-youtube-48.png" alt="Youtube"></a>
      <a href="https://www.discord.com" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/icons8-discord-48.png" alt="Discord"></a>
    </div>
  </div>
</footer>

<style>
body {
    background-color: #3a2d28;
    font-family: "ATF Franklin Gothic", Arial, sans-serif;
}

.entry-title {
    display: none;
}

.hero-img {
    height: 90vh;
    overflow: hidden;
    top: 0;
    margin: 0;
    padding: 0;
}

.hero-img img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.wp-block-lazyblock-mini-nav {
    overflow: hidden;
}

.mini-nav {
    height: 75px;
    width: 100vw;
    background-color: #605a54;
    display: flex;
    justify-content: center;
    align-items: center;
}


.mini-nav a {
    font-size: 30px;
    text-decoration: none!important;
    color: #f2f2f2;
    margin: 0 2rem;
    width: fit-content;
    height: fit-content;
}

.mini-nav p {
    font-family: "ATF Franklin Gothic", Arial, sans-serif;
    font-weight: 700;
}
  
  .wp-container-3 {
    display: flex;
}

.video-text-box {
    padding: 1rem 100px;
    height: fit-content;
}
.video-box {
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.youtube-video {
    margin: 0;
    height: 100%
}

 iframe {
    width: 560px!important;
    height: 315px!important ;
   
}

.text-area {
    display: flex;
    justify-content: center;
    height: fit-content;
    flex-direction: column;
    width: 50%;
}

.kraftvaerket-headline {
    text-align: center;
    padding: 2rem 0;
    font-size: 50px;
    font-family: "ATF Franklin Gothic", Arial, sans-serif;
    font-weight: 900;
    color: #f2f2f2;
}

.text-area p {
    font-family: "ATF Franklin Gothic", Arial, sans-serif;
    font-weight: 400;
    line-height: 1.5rem;
    color: #f2f2f2;
    padding-bottom: 1.2rem;
}
  
  .text-end {
    text-align: center;
  }
  
  .footer {
    margin-top: 50px; 
  }
  
  @media (max-width: 1200px) {
      .wp-container-3 {
    flex-direction: column-reverse;
  }

    .video-box {
      width: 100%;
    }
     .text-area {
      width: 100%;
    }
    
  }
  .footer {
  background-color: #211A17;
  padding: 75px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #f2f2f2;
  height: 100px;
}
    
    .footer h5 {
      margin: 1.67em 0;
    }

    .footer .button {
      padding: 1px 6px;
    }
    
    .footer p {
      margin: 1em 0;
      line-height: 1rem;
    }
    
    .footer h3 {
      font-size: 1.17em;
      margin: 1em 0;
    }
    
.footer .logo {
  display: inline-block;
  width: 100px;
  height: 50px;
  margin-left: 50px;
}
    
    .logo img {
  max-height: 50px;
  filter: invert(100%);
  padding-top: 12px;
}

.footer-left {
  flex: 1;
  display: flex;
  flex-direction: column;
}

.footer-left a {
  color: #f2f2f2;
  text-decoration: none;
  margin-bottom: 10px;
}

.footer-middle {
  flex: 2;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
}

.footer-logo {
  max-height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  filter: invert(100%);
}

.footer-text {
  margin-top: 10px;
  text-align: center;
}


.footer-right {
  flex: 1;
  display: flex;
  flex-direction: column; 
  align-items: flex-end; 
  justify-content: flex-end; 
  padding-right: 20px; 
}

.footer-right h5 {
 margin-right: 7px;
}

    .mc-field-group {
    display: flex;
    align-items: center;
  }
  
  .mc-field-group input[type="email"] {
    margin-right: 10px;
  }    
    
.newsletter-form {
  display: flex;
  margin-bottom: 10px; 
}

.newsletter-input {
  flex: 1;
  padding: 5px;
}

.newsletter-button {
  margin-left: 10px;
  padding: 5px 10px;
  background-color: #333;
  color: #f2f2f2;
  border: none;
}

.social-media-icons {
  display: flex;
  justify-content: center; 
}

.social-media-icons a {
  margin-right: 15px; 
  margin-top: 10px;
}

.social-media-icons img {
  width: 30px; 
  height: 30px; 
}

@media (max-width: 950px) {
    .footer {
        flex-direction: column;
        align-items: flex-start;
        height: fit-content;
    }
    
    .footer-left, .footer-middle, .footer-right {
        flex: none;
    }
    
    .footer-middle {
        align-items: flex-start;
    }
    
    .footer-middle .logo {
        margin: 0;
    }
    
    .footer-middle .footer-text {
        text-align: left;
    }
}

@media (max-width: 650px) {
    .video-text-box {
        padding: 0 75px;
    }
    
    .mini-nav {
        flex-direction: column;
        height: fit-content;
    }
    
    .mini-nav a {
        margin: 1rem;
    }
}

@media (max-width: 500px) {
    
    .kraftvaerket-headline {
        font-size: 40px;
    }
    
    .video-text-box {
        padding: 0 50px;
    }
}

</style>
