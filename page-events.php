<!DOCTYPE html>
<html>
<head>
  <title>Events</title>
  <style>

    body {
      background-color: #1C1C1C;
      color: #f2f2f2;
      margin: 0;
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
    
/* Body */

h1 {
    text-align: center;
    font-size: 150px;
    font-family: "ATF Franklin Gothic", Arial, sans-serif;
    font-weight: 900;
    color: #f2f2f2;
    margin-bottom: 0;
    margin-top: 250px;
}
    
    .section-divider {
  border-top: 1px solid #ccc; 
  margin: 100px 0; 
  width: 92%;
  margin-left: auto;
  margin-right: auto;
}

.events-title {
      text-align: center;
      font-size: 24px;
    }
    
    .events-text {
      margin-top: 30px;
      text-align: center;
    }

    .events-text p{
     padding: 0 300px;
     font-size: 20px;
    }
    
.event-container {
  display: flex;
  justify-content: space-between;
  margin-top: 50px;
  padding: 0 100px;
}

.event-box {
  width: calc(50% - 10px);
  margin: 0 75px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.event-info {
  margin-top: 10px;
}

.event-box img {
  max-height: 500px;
	max-width: 500px;
}

    .event-info h3{
        text-align: center;
      font-size: 25px;
    }
    
    .h3-link {
      text-decoration: none;
      color: #f2f2f2;
    }
    
    .h3-link:hover {
      color: #f2f2f2aa;
    }
    
    .event-description {
      margin-top: 10px;
      line-height: 1.5rem;
      font-size: 16px;
    }
    
    .event-buttons {
      margin-top: 20px;
      display: flex;
      justify-content: center;
    }
    
    .event-button {
      margin: 0 10px;
      padding: 10px 20px;
      background-color: #333;
      color: #f2f2f2;
      font-size: 18px;
      border: none;
      cursor: pointer;
      border: 2px solid #f2f2f2;
    }
    
    .event-button a {
  	 color: #f2f2f2;
     text-decoration: none;
	}
    
    .section-divider {
      border-top: 1px solid #ccc; 
      margin: 100px 0; 
      width: 92%;
      margin-left: auto;
      margin-right: auto;
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
  
  

    h1 {
      margin-top: 100px;
    }

}  
    @media (max-width: 1500px) {
      .event-box img {
        max-height: 400px;
        max-width: 400px;
      }
    }
    @media (max-width: 1200px) {
      .event-container {
        flex-direction: column;
        margin: 0;
        padding: 0;
      }
      .event-box {
        width: 80vw;
        margin: 0;
        padding: 50px 100px;
      }
      .divider-middle {
        display: none;
      }
      
      .events-text p {
        padding: 0 150px
      }
    }
    
    @media (max-width: 1000px) {
       .events-text p {
        padding: 0 50px!important;
        font-size: 18px!important;
      }
    }
    
      @media (max-width: 600px) {
      .events-text p {
        font-size: 14px!important;
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


    <div class="events-title">
    <h1>Events</h1>
  </div>

  <div class="events-text">
    <p>Oplev den pulserende undergrundsmusik og mærk essensen af kulturel og musikalsk mangfoldighed gennem vores fire hovedbegivenheder. 

Fra de elektriske beats fra Mana Club til de fængslende rytmer i Vertex, hver event lover en unik og uforglemmelig oplevelse. Gør dig klar til at opleve hiphoppens kraft på DEFT og mærk den fede vibe fra reggae, dancehall og dub på X-Massive. <br> <br>

Kom og oplev vores fede events, som repræsenterer Kantens vision om at fremme kreativitet, rummelighed og fællesskab. <br> <br>
    </p>
  </div>
  
  <hr class="section-divider">

  <div class="event-container">
    <div class="event-box">
     <a href="<?php echo esc_url( home_url( '/mana-club' ) ); ?>">
     <img src="<?php echo get_template_directory_uri() ?>/images/ManaClubBG.png" alt="Mana">
	 </a>
       <div class="event-info">
       <a href="http://kantenesbjerg.com/mana-club/" class="h3-link"><h3>Mana Club - Esbjergs fedeste rave party!</h3></a> 
        <p class="event-description">Mana Club er den fedeste rave fest, som der sætter gang i natten med sin elektriske atmosfære og pulserende beats. </p>
         <div class="event-buttons">
          <button class="event-button"><a href="http://kantenesbjerg.com/mana-club/">Se Mere</a></button>
          <button class="event-button"><a href="https://billetto.dk/" target="_blank">Køb Billet</a></button>
        </div>
      </div>
    </div>

    <div class="event-box">
      <a href="<?php echo esc_url( home_url( '/vertex' ) ); ?>">
      <img src="<?php echo get_template_directory_uri() ?>/images/Vertex1BG.png" alt="Vertex2">
        </a>
      <div class="event-info">
        <a href="http://kantenesbjerg.com/vertex/" class="h3-link"><h3>Vertex - Slå dig løs til de fede House beats</h3></a>
        <p class="event-description">Vertex er en sensationel house-koncert, der sætter gang i festen med sine smittende rytmer og opløftende melodier.</p>
        <div class="event-buttons">
          <button class="event-button"><a href="http://kantenesbjerg.com/vertex/">Se Mere</a></button>
          <button class="event-button"><a href="https://billetto.dk/" target="_blank">Køb Billet</a></button>
        </div>
      </div>
    </div>
  </div>

  <hr class="section-divider divider-middle">

  <div class="event-container">
    <div class="event-box">
      <a href="<?php echo esc_url( home_url( '/x-massive' ) ); ?>">
      <img src="<?php echo get_template_directory_uri() ?>/images/Xm1BG.png" alt="Massive">
      </a>
      <div class="event-info">
        <a href="http://kantenesbjerg.com/x-massive/" class="h3-link"><h3>X-Massive - Fede vibes fra reggae, dancehall og dub</h3></a>
        <p class="event-description">X-Massive er et reggae, dancehall og dub event, der transporterer dig til Caribien. Mærk rytmen og nyd de positive vibes, og lad musikken forene os alle.</p>
        <div class="event-buttons">
          <button class="event-button"><a href="http://kantenesbjerg.com/x-massive/">Se Mere</a></button>
          <button class="event-button"><a href="https://billetto.dk/" target="_blank">Køb Billet</a></button>
        </div>
      </div>
    </div>

    <div class="event-box">
      <a href="<?php echo esc_url( home_url( '/deft' ) ); ?>">
      <img src="<?php echo get_template_directory_uri() ?>/images/Deft1BG.png" alt="Reggae-2">
      </a>
      <div class="event-info">
        <a href="http://kantenesbjerg.com/deft/" class="h3-link"><h3>DEFT - Lad vilde beats pumpe dig med hiphoppens energi</h3></a>
        <p class="event-description">DEFT er vores hiphop-begivenhed, som I ikke må gå glip af, hvor talentfulde kunstnere indtager scenen for at levere kraftfulde præstationer og lyrisk dygtighed.</p>
        <div class="event-buttons">
          <button class="event-button"><a href="http://kantenesbjerg.com/deft/">Se Mere</a></button>
          <button class="event-button"><a href="https://billetto.dk/" target="_blank">Køb Billet</a></button>
        </div>
      </div>
    </div>
  </div>
  
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