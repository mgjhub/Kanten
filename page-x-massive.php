<!DOCTYPE html>
<html>
<head>
  <title> X-Massive</title> 
  <style>

    body {
      background-color: #3a2d28;
      color: #f2f2f2;
      margin: 0;
      background-image: url('<?php echo get_template_directory_uri() ?>/images/Xm1.png'); 
      background-size: auto 100%;
      background-position: center;
      font-family: "ATF Franklin Gothic", Arial, sans-serif;
    }

 /* Navbar */
    
 header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 999;
  color: #f2f2f2;
  background-color: rgba(0, 0, 0, 0.5);
 	width: 100vw;
}

.navbar {
  display: flex;
  justify-content: space-between;  
  padding: 10px;
}

.logo {
  display: inline-block;
  width: 100px;
  height: 60px;
  margin-top: 5px;
  margin-left: 20px;
}

.navbar .logo img {
  max-height: 150px;
  filter: invert(100%);
  padding-top: 12px;
}

 .hamburger-menu {
  display: flex;
  flex-direction: column;
  padding: 30px 30px;
  align-items: end;
  width: 100%;
}

#menu {
  justify-content: center;
  align-items: end;
  padding-top: 20px;
  width: 100%;
  display: block;
  flex-direction: column;
  padding-right: 30px;
}
    
.button-container {
  flex: 15;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: end;
  color: #f2f2f2;
}

.button-container button {
  color: #f2f2f2;
  background-color: transparent;
  border: none;
  cursor: pointer;
  font-size: 50px;
  font-weight: 600;
  padding: 7px 12px;
}

.button-container button:hover {
  border: 2px solid #f2f2f2;
  padding: 5px 10px;
}
    
.right-button {
  margin-right: 75px;
  color: #f2f2f2;
  background-color: transparent;
  border: none;
  cursor: pointer;
  font-size: 20px;
}

 .language-switch-button {
color: #f2f2f2;
background-color: transparent;
border: 5px solid #f2f2f2;
cursor: pointer;
font-size: 35px;
width: 40px;
height: 40px;
display: flex;
align-items: center;
justify-content: center;
text-decoration: none;
border-radius: 50%;
padding: 40px;
} 
 
/* Style the hamburger menu */
.hamburger {
  display: block;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  justify-content: end;
  width: fit-content;
}

#toggle {
    display: none;
}

.line {
  width: 150px;
  height: 15px;
  background-color: #f2f2f2;
  margin: 15px 0;
  transition: transform 0.3s ease-in-out;
}

/* Rotate lines to create the "X" icon */
.toggle-input:checked ~ .hamburger .line:nth-child(1) {
  transform: rotate(45deg) translate(30px, 35px);
  margin: 15px 15px;
}

.toggle-input:checked ~ .hamburger .line:nth-child(2) {
  opacity: 0;
  margin: 15px 15px;
}

.toggle-input:checked ~ .hamburger .line:nth-child(3) {
  transform: rotate(-45deg) translate(30px, -35px);
  margin: 15px 15px;
}

/* Hide the menu by default */
#menu {
  display: none;
}

/* Show the menu when the checkbox is checked */
.toggle-input:checked ~ #menu {
  display: flex;
}

/* Style the menu items */
#menu .button-container {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

#menu a {
  margin: 10px 0;
  text-decoration: none;
  color: #333;
  font-weight: bold;
}    

    /* Hero */
    
    
    .hero {
      position: relative;
      height: 90vh;
      width: 100vw;
      overflow: hidden;
    }

    .hero img {
      width: 100%;
      height: 100%;
      position: absolute;
      object-fit: cover;
    }

    .section-divider { 
    margin: 100px 0; 
    width: 92%;
    margin-left: auto;
    margin-right: auto;
}

    .divider-1 {
      border: 1px solid #387341;
    }
    .divider-2 {
      border: 1px solid #EEBC49;
    }
    .divider-3 {
      border: 1px solid #8C2B2B;
    }
    
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  width: 100%;
  margin: 0 auto;
  max-width: 1750px;
  height: fit-content;
}

.container-top,
.container-bottom {
  display: flex;
  justify-content: center;
  height: fit-content;
  max-width: 1750px;
}

.box {
  flex: 1;
  padding: 20px;
  color: #f2f2f2;
  max-width: 50%;
  margin: 0 auto;
  display: flex;
  justify-content: center;
  align-items: center;
}

.box.left {
  position: relative;
}
    
.box.left::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  height: 100%;
  
  opacity: 0.7;
  filter: blur(20px);
  z-index: -1;
}

 .box.overlay-box::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #387341;
  opacity: 0.2;
  filter: blur(20px);
  z-index: -1;
}     
    
.box.right {
  position: relative;
  padding: 125px;
  margin-left: 0;
}

  .box.overlay-box {
  position: relative;
}
    
 .box img {
  width: 90%;
  height: 90%;
  object-fit: cover;
}

.box .text {
  color: #f2f2f2;
  text-align: left;
    font-size: 22px;
  line-height: 1.5rem;
}
    
    .text p {
      margin-top: 0;
    }
    
.section-title {
  text-align: center;
  font-size: 40px;
}
    
.photo-gallery {
  padding: 0 75px;
   margin-bottom: 75px;
}
    
.gallery-container {
  margin-top: 75px;
  display: flex;
  align-items: center;
  position: relative;
}
    
.photo-gallery .overlay-box {
  position: absolute; 
  left: 0;
  width: 100%;
  background-color: #387341;
  opacity: 0.2;
  filter: blur(20px);
  z-index: -1;
}

.gallery-slides {
  display: flex;
  overflow-x: scroll;
  scroll-snap-type: x mandatory;
  scroll-behavior: smooth;
  scroll-padding: 10px;
  width: 80%;
  margin: 0 auto;
  align-items: center;
}

.gallery-slide {
  flex-shrink: 0;
  width: calc(100% / 3);
  padding: 20px 20px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.gallery-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  box-shadow: 2px 2px 10px #080605;
}


.navigation-arrow {
  position: absolute;
  top: 50%;
  width: 50px;
  height: 50px;
  color: #f2f2f2;
  font-size: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 1;
}

.prev-arrow {
  left: 10px;
  transform: translateY(-50%);
}

.next-arrow {
  right: 10px;
  transform: translateY(-50%);
}    

.footer {
  background-color: black;
  padding: 75px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #f2f2f2;
  height: 100px;
}

.footer .logo {
  display: inline-block;
  width: 100px;
  height: 50px;
}
    
        .footer .logo img {
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
  padding-right: 5px;
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

.mc-field-group {
    display: flex;
    align-items: center;
  }
  
  .mc-field-group input[type="email"] {
    margin-right: 10px;
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

/* Media Query */
@media (min-width: 1200px){
  
header {
	width: 100%;
  	padding: 10px;
}
  
  .button-container button {
  margin: 0 20px;
  color: #f2f2f2;
  background-color: transparent;
  border: none;
  cursor: pointer;
  font-weight: 600;
}
  
  .hero {
    position: relative;
    height: 100vh;
    overflow: hidden;
  }

  .hero img {
    width: 100%;
    height: auto;
    position: absolute;
    top: 0;
    left: 0;
    object-fit: cover;
  }
  
  .hamburger {
    display: none;
  }
  
  .hamburger-menu {
    padding: 0;
  }

  #toggle {
    display: none;
  }

  .line {
    display: none;
  }
  
  .navbar {
    align-items: center;
  }

  #menu {
    display: flex;
    align-items: center;
    width: 100%;
    padding: 0;
    flex-direction: row;
  }
  
  #menu a {
    margin: 0 0;
    padding: 10px;
  }

  .navbar .logo {
    margin-left: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .navbar .logo img {
    padding-top: 0;
    max-height: 50px;
    padding-top: 0;
  }
  
  .button-container {
    flex: 1;
    display: flex;
    justify-content: center;
    flex-direction: row;
  }

  .button-container button {
      font-size: 25px;
  font-weight: 600;
  padding: 7px 12px;
  }
  
  .navbar {
    justify-content: space-between;
  }

  .language-switch-button {
    margin-right: 20px;
    font-size: 18px;
  width: 40px;
  height: 40px;
    padding: 20px;
      border: 2px solid #f2f2f2;
  } 
} 

 @media (max-width: 1500px){
      
        .hero {
    height: 85vh;
  }
       .box img {
         height: 60%;
       }
       .box .text {
         font-size: 16px;
         line-height: 1.3rem;
         }
       }
       
        @media (max-width: 1250px){
      
        .hero {
    height: 75vh;
  }
        }
        
      @media (max-width: 1200px) {

              .container-top {
                display: flex;
                flex-direction: column;
                width: 100%;
                justify-content: center;
                align-items: center;
              }
              
               .box {
                    max-width: 80%;
                  }
              
              .box.right {
                margin: 0;
                padding: 25px 125px 125px 125px;
              }
              
              .box.left {
                 margin: 0;
                padding: 125px 125px 25px 125px;
              }
              
              
              .container-bottom {
                display: flex;
                flex-direction: column-reverse;
                width: 100%;
                justify-content: center;
                align-items: center;
              }
         
        .hero {
    height: 70vh;
              margin-top: 215px;
  	}
          .gallery-slide {
    width: calc(100% / 1);
      height: 100%;
  }

  .gallery-slides {
    height: 100%;
  }
   }
      
@media (max-width: 1000px){
    .hero {
        height: auto;
        width: 100vw;
    }
    
    .hero img {
        position: relative;
    }
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

@media (max-width: 700px) {
.box {
  max-width: 100%;
}

.box.right {
  margin: 0;
  padding: 25px 75px 125px 75px;
}

.box.left {
  margin: 0;
  padding: 75px 75px 25px 75px;
}
}


</style>
</head>
<body>
    <header>
    <div class="navbar">
      <div class="logo">
        <a href="/forside-kanten/"><img src="<?php echo get_template_directory_uri() ?>/images/Kanten-logo.png" alt="Logo"></a>
      </div>
      <div class="hamburger-menu">
        <input type="checkbox" id="toggle" class="toggle-input">
        <label for="toggle" class="hamburger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </label>
        <nav id="menu">
          <div class="button-container">
       	  <a href="/forside-kanten/"><button>Forside</button></a>
     	  <a href="/events/"><button>Events</button></a>
      	  <a href="/program/"><button>Program</button></a>
     	  <a href="/kraftvaerket/"><button>Kraftværket</button></a>
     	  <a href="/om-os/"><button>Om Os</button></a>
          </div>
          <a href="?lang=en"><button class="language-switch-button">EN</button></a>
        </nav>
      </div>
    </div>
  </header>

  <section class="hero">
    <img src="<?php echo get_template_directory_uri() ?>/images/reggae-ny.jpg" alt="reggae"> 
  </section>

  <hr class="section-divider divider-1">

  <div class="container">
  <div class="container-top">
    <div class="box left overlay-box">
      <img src="<?php echo get_template_directory_uri() ?>/images/xmassive1.jpg" alt="xmassive1">
    </div>
    <div class="box right overlay-box">
      <div class="text">
        <h2>Næste events line-up</h2>
<p> Efter snart 10-års pause kan du igen opleve de danske dancehall-konger Bikstok Røgsystem bestående af kendte danske navne som, Pharfar, Blæs Bukki og Eagger, som endelig er blevet genforenet og er tilbage med en helt ny ep der allerede har fået en masse gode anmeldelser. </p> 

<p> I den femstjernede anmeldelse fra Gaffa skriver anmelderen blandt andet:</p> 
<p> ”Bikstok sætter alle konkurrenterne på plads med denne vanvittige opturs-ep, der er den første samlede udgivelse siden debutalbummet Over Stok & Sten fra 2005 og lover godt for trioens kommende koncerter”</p> 
<p> Denne gang har kommer Bikstok Røgsystem til Esbjerg og spiller på Kanten.</p>       </div>
    </div>
  </div>
</div>


 <hr class="section-divider divider-3">

<section class="photo-gallery">
  <div class="overlay-box"></div>
  <h2 class="section-title">Galleri</h2>
  <?php the_content() ?>
</section>

    <hr class="section-divider divider-2">
<div class="container">
    <div class="container-bottom">
    <div class="box right overlay-box">
        <div class="text">
            <h2>Om X-Massive</h2>
<p>X-Massive er et musik event fyldt med reggae, dancehall og dub. </p>
 <p>Reggae den rytmiske musikgenre som stammer fra Jamaica, rummer roots-reggae, dub og dancehall som stammer fra ca 1970. En af reggaens helt store navne er den legendariske Bob Marley. Nogle af de store danske reggae artister er navne som: Natasja, Lil’ Kaka og Bikstok Røgsystem som alle i høj grad er inspireret af reggae.</p>

<p>Dub er en elektronisk musik stil men bliver betragtet som en undergenre af reggae, generalt består dub af remixes af allerede eksisterende numre men ved at manipulere originalen ved eksempelvis at fjerne vokale dele eller ved at anvende studie effekter som ekko og rumklang.</p>

        </div>
    </div>
    <div class="box left overlay-box">
        <img src="<?php echo get_template_directory_uri() ?>/images/xmassive2.jpg" alt="xmassive">
    </div>
    </div>
</div>
  



<hr class="section-divider divider-1">

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
      <p>Finsensgade 1, 6700 Esbjerg</p>
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
  
    <script>
const gallerySlides = document.querySelector('.gallery-slides');
const prevArrow = document.querySelector('.prev-arrow');
const nextArrow = document.querySelector('.next-arrow');
const imageWidth = gallerySlides.offsetWidth / 3;
let scrollPosition = 0;

nextArrow.addEventListener('click', () => {
  scrollPosition += imageWidth;
  if (scrollPosition > gallerySlides.scrollWidth - gallerySlides.offsetWidth) {
    scrollPosition = gallerySlides.scrollWidth - gallerySlides.offsetWidth;
  }
  gallerySlides.scrollTo({
    left: scrollPosition,
    behavior: 'smooth'
  });

  updateArrowsVisibility();
});

prevArrow.addEventListener('click', () => {
  scrollPosition -= imageWidth;
  if (scrollPosition < 0) {
    scrollPosition = 0;
  }
  gallerySlides.scrollTo({
    left: scrollPosition,
    behavior: 'smooth'
  });

  updateArrowsVisibility();
});

function updateArrowsVisibility() {
  prevArrow.style.display = scrollPosition > 0 ? 'flex' : 'flex';
  nextArrow.style.display =
    scrollPosition < gallerySlides.scrollWidth - gallerySlides.offsetWidth
      ? 'flex'
      : 'flex';
}

window.addEventListener('resize', () => {
  scrollPosition = gallerySlides.scrollLeft;
  updateArrowsVisibility();
});

gallerySlides.addEventListener('scroll', () => {
  scrollPosition = gallerySlides.scrollLeft;
  updateArrowsVisibility();
});

updateArrowsVisibility();
  
  </script>