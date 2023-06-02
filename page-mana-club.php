<!DOCTYPE html>
<html>
<head>
  <title>Mana Club</title>
  <style>

    body {
      background-color: #1C1C1C;
      color: #f2f2f2;
      margin: 0;
      font-family: "ATF Franklin Gothic", Arial, sans-serif;
      background-image: url('<?php echo get_template_directory_uri() ?>/images/');
  	  background-size: 100% auto;
  	  background-position: cover;

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

    

 /* Hero image */    
.hero {
  position: relative;
  height: 100vh;
  overflow: hidden;
  display: flex; 
  justify-content: center;
  align-items: center;
}

.hero img {
  height: 100%;
}
    
    .section-divider {
    border: 1px solid #AF73BF; 
    margin: 100px 0; 
    width: 92%;
    margin-left: auto;
    margin-right: auto;
}

    .manaclub-headline {
		display: flex;
      	width: 100%;
      	height: 100px;
      	justify-content: center;
      	align-items: center;
        margin-bottom: 100px;
}

.manaclub-headline img {
  height: 100%;
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
  background-color: #AF73BF;
  opacity: 0;
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

.box.overlay-box::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #AF73BF;
  opacity: 0.3;
  filter: blur(20px);
  z-index: -1;
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

        .image-with-text {
		display: flex;
      	width: 100%;
      	height: 100px;
      	justify-content: center;
      	align-items: center;
        margin-bottom: 100px;
}

.image-with-text img {
  height: 100%;
}
    
.photo-gallery {
  padding: 0 75px;
  position: relative;
}

.transparent-box {
  position: absolute;
  top: 0%;
  left: 0;
  width: 100%;
  height: 110%;
  background-color: #AF73BF;
  opacity: 0.3;
  filter: blur(20px);
  z-index: -1;
}

.gallery-container {
  margin-top: 75px;
  display: flex;
  align-items: center;
  position: relative;
}

.gallery-slides {
  display: flex;
  overflow-x: scroll;
  scroll-snap-type: x mandatory;
  scroll-behavior: smooth;
  scroll-padding: 10px;
  width: 80%;
  margin: 0 auto;
}

.gallery-slide {
  flex-shrink: 0;
  width: calc(100% / 3);
  padding: 0 20px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.gallery-slide img {
  width: 100%;
  height: 500px;
  object-fit: cover;
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
    }  
    
  @media (max-width: 1200px){
    
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

      
          .gallery-slide {
    width: calc(100% / 1);
      height: 100%;
  }

  .gallery-slides {
    height: 100%;
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
    <img src="<?php echo get_template_directory_uri() ?>/images/mana-hero.jpg" alt="Mana">
  </section>
  
  <hr class="section-divider">

  <div class="manaclub-headline">
  <img src="<?php echo get_template_directory_uri() ?>/images/mana-png.png" alt="manatext1">
  </div>

  <div class="container">
  <div class="container-top">
    <div class="box left overlay-box">
      <img src="<?php echo get_template_directory_uri() ?>/images/manaclub1.jpg" alt="manaclub1">
    </div>
    <div class="box right overlay-box">
      <div class="text">
        <h2>Næste events line-up</h2>
      <p> Du ved sikkert på forhånd hvem han er; Tiesto, også kendt som The Godfather of EDM.</p> 
      <p> Ved du hvem han er, så har du helt sikkert også hørt hans hjertedroppende bangers.</p>
      <p> Tiesto har 30 års erfaring i branchen har den hollandske trance-DJ et hav af elektroniske hits og virale remixes sammen med nogle af de største artister inden for branchen.</p>
      <p> Tiesto har udgivet tracks med artister som Post Malone, Coldplay, Kygo og Selena Gomez.</p>
  
      </div>
    </div>
  </div>

  
   <hr class="section-divider">
    <div class="container-bottom">
    <div class="box right overlay-box">
        <div class="text">
            <h2>Om Mana Club</h2>
<p> Mana Club er et rave party. Rave parties er en danse fest som ofte bliver afholdt på natklubber, varehuse eller andre private og offentlige steder. Musikken der bliver spillet til disse events er typisk EDM (Electronic Dance Music). Denne musik stil bliver ofte associeret med de tidligere 90ere hvor mange DJs spillede til ulovlige koncerter som var domineret af EDM genren.</p>
<p> Mens nogle rave fester bliver holdt hjemme i privaten eller på de små natklubber er der bestemt også store rave parties. Rave fester er ofte kendt for at vare i lang tid, nogle gange helt op til et døgn. Disse fester skaber ekstra opmærksomhed for politiet da rave fester oftest bliver associeret med ”party drugs” som MDMA og LSD. Hos Kanten er det dog <span style="font-weight: 600; text-decoration: underline">ikke</span> tilladt at medbringe, eller indtage stoffer af nogen form.</p>

<p> Nogle af de mest kendte ansigter inden for denne genre er personer som bla. Skrillex og Deadmau5 som har optrådt verden over på nogle af de helt store scener med deres EDM musik. Skrillex har bla. vundet vundet tre Grammy Awards for årets dance-udgivelse. </p>
        </div>
    </div>
    <div class="box left overlay-box">
        <img src="<?php echo get_template_directory_uri() ?>/images/manaclub1.jpg" alt="manaclub1">
    </div>
    </div>
    </div>
    <hr class="section-divider">
   

<section class="photo-gallery">
   <div class="transparent-box"></div> 
  <div class="image-with-text">
    <img src="<?php echo get_template_directory_uri() ?>/images/mana-png-galleri.png" alt="manaclub3">
  </div>
  <?php the_content() ?>
</section>

  
   <hr class="section-divider">
  
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

</body>
</html>

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

