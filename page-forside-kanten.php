<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kanten</title>
  <style>

body {
  background-color: #1A1010;
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

    
/* Hero image */    
.hero {
  position: relative;
  height: 100vh;
  overflow: hidden;
  display: flex; 
  justify-content: center;
  align-items: center;
}

.hero iframe {
  height: 100%;
  width: 100%;
}

.transparent-box {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: space-between;
  padding: 20px;
  box-sizing: border-box;
}

.box {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  color: #f2f2f2;
  text-align: center;
}

.box h2 {
  margin: 0;
  font-size: 25px;
}

.box-number {
  font-size: 24px;
  font-weight: bold;
  margin-top: 10px;
  margin-bottom: 20px;
}

.box-button {
  background-color: transparent;
  border: 2px solid #f2f2f2;
  color: #f2f2f2;
  font-size: 16px;
  cursor: pointer;
  padding: 8px 16px;
  text-decoration: none;
  font-weight: 500;
}

.section-divider {
  border-top: 1px solid #ccc; 
  margin: 100px 0; 
  width: 92%;
  margin-left: auto;
  margin-right: auto;
}

.section-title {
  text-align: center;
  font-size: 40px;
}

.image-links {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 20px;
  padding: 0 50px;
}

    .image-links a {
      	width: 25%;
      	display: flex;
  		justify-content: center;
  		align-items: center;
    }
    
.image-links img {
  width: 80%;
}

.artist-wrapper {
  display: flex;
}

.content-wrapper {
  display: flex;
  padding: 75px;
}

.local-artist {
  width: 50%;
  margin-bottom: 20px;
  text-align: center;
  margin-right: 40px;
}

.local-artist h2 {
  font-size: 40px;
  margin-bottom: 75px;
}
    
    .local-artist h3 {
      font-size: 25px;
    }

.youtube-box {
  width: 100%;
  padding-bottom: 56.25%;
  position: relative;
}

.youtube-box iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.artist-description {
  margin-top: 10px;
}

.upcoming-events {
  width: 50%;
  margin-bottom: 20px;
  margin-left: 40px;
  text-align: center;
}

.read-more-button,
.see-more-button,
.more-info-button,
.buy-ticket-button {
  display: inline-block;
  padding: 8px 12px;
  
  color: #f2f2f2;
  text-decoration: none;
  margin-right: 10px;
  margin-left: 10px;
  border: 2px solid #f2f2f2;
}

.upcoming-events h2 {
  font-size: 24px;
  margin-bottom: 75px;
}

.event-container {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  margin-left: 20px;
}

.event-container h2 {
  font-size: 40px; 
  margin-bottom: 50px; 
}

.se-flere {
  width: fit-content;
	padding: 8px 12px;
  color: #f2f2f2;
  text-decoration: none;
  margin-right: 10px;
  margin-left: 10px;
  border: 2px solid #f2f2f2;
  margin-top: 20px;
}

.event-box {
  display: flex;
  margin-bottom: 20px;
}

.event-image {
  width: 300px;
  height: 200px;
}

.event-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.event-info {
  width: 60%;
  background-color: #333;
  color: #f2f2f2;
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.event-info h3,
.event-info p {
  margin: 0;
}

.event-button {
	display: flex;
	justify-content: center;
	align-items: center;
}

.photo-gallery {
  padding: 0 75px;
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
  height: 100%;
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


.text-section {
  margin-bottom: 75px;
  padding-right: 100px;
  padding-left: 100px;
}

.section-headline {
  font-size: 40px;
  text-align: center;
  margin: 0;
}

.text-content {
  display: flex;
  justify-content: center;
  align-items: center;
  height: fit-content;
}

.text-column {
  width: 66%;
  height: fit-content;
  padding-right: 20px;
}

    .logo-column {
      width: 33%;
      display: flex;
      align-items: center;
      justify-content: center;
      height: fit-content;
      padding-left: 20px;
      padding-top: 40px;
    }
    
    .logo-bottom {
      filter: invert(100%);
      height: 250px;
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
    
.footer p {
  margin: 1em 0;
  line-height: 1rem;
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

  .hero iframe {
    width: 100%;
    height: 100vh;
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
    
@media (max-width: 1200px) {
  .image-links {
    flex-wrap: wrap;
    justify-content: center;
    padding: 0;
  }

  .image-links a {
	width: 40%;
    padding: 30px 0;

  }

  .image-links img {
    width: 75%; 
  }

  .content-wrapper {
    flex-direction: column-reverse;
    align-items: center;
    justify-content: center;
  }
  
  .upcoming-events {
    width: 100%;
    margin: 0;
    padding: 0;
  }
  
  .local-artist {
    width: 100%;
    margin: 0;
    padding: 0;
  }
  
  .local-artist h2 {
    padding-top: 100px;
  }
  
  .local-artist p {
    text-align: left;
  }
  
.text-content {
  flex-direction: column;
}

.text-column {
  width: 100%;
}

    .logo-column {
      width: 100%;
    }

    .gallery-slide {
    width: calc(100% / 1);
      height: 100%;
  }

  .gallery-slides {
    height: 100%;
  }
  
}

@media (max-width: 900px) {
  .box h2 {
    font-size: 20px;
  }
  
}
    
@media (max-width: 750px) {
.image-links {
    flex-wrap: mone;
    flex-direction: column;
  }

  .image-links a {
	width: 100%;
    padding: 30px 0;

  }

  .image-links img {
    width: 50%; 
  }
  
}
    
@media (max-width: 600px) {
  .transparent-box {
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .box {
    padding: 20px;
  }
  
    .box h2 {
    font-size: 25px;
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
     <iframe src="https://www.youtube.com/embed/A1KSXFeNtPc?autoplay=1&loop=0controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<div class="transparent-box">
  <div class="box">
    <h2>Antal events i år</h2>
    <p class="box-number" id="event-count">8</p>
    <a href="http://kantenesbjerg.com/events/" class="box-button">Se Events</a>
  </div>
  <div class="box">
    <h2>Antal frivillige</h2>
    <p class="box-number" id="volunteer-count">9</p>
    <a href="http://kantenesbjerg.com/frivillig/" class="box-button">Læs Mere</a>
  </div>
  <div class="box">
    <h2>Antal medlemmer</h2>
    <p class="box-number" id="member-count">7</p>
    <a href="http://kantenesbjerg.com/medlem/" class="box-button">Læs Mere</a>
  </div>

  <script>
    // Function to update the number of events
    function updateEventCount(count) {
      var eventCountElement = document.getElementById('event-count');
      eventCountElement.textContent = count;
    }

    // Function to update the number of volunteers
    function updateVolunteerCount(count) {
      var volunteerCountElement = document.getElementById('volunteer-count');
      volunteerCountElement.textContent = count;
    }

    // Function to update the number of members
    function updateMemberCount(count) {
      var memberCountElement = document.getElementById('member-count');
      memberCountElement.textContent = count;
    }

    // Retrieve the member count from local storage
    var updatedMemberCount = localStorage.getItem('memberCount');

    // Check if the member count exists in local storage
    if (updatedMemberCount === null) {
      updatedMemberCount = 0;
    } else {
      updatedMemberCount = parseInt(updatedMemberCount) || 0; // Default to 0 if the count is not a valid number
    }

    // Update the member count on the page
    updateMemberCount(updatedMemberCount);
  </script>
</div>
      
</section>


  <hr class="section-divider">

  <h2 class="section-title">De 4 største events</h2>
  <section class="image-links">
  <a href="http://kantenesbjerg.com/mana-club/">
    <img src="<?php echo get_template_directory_uri() ?>/images/ManaClubHvid.png" alt="ManaClub">
  </a>
  <a href="http://kantenesbjerg.com/vertex/">
    <img src="<?php echo get_template_directory_uri() ?>/images/Vertex1BG.png" alt="Vertex">
  </a>
  <a href="http://kantenesbjerg.com/x-massive/">
    <img src="<?php echo get_template_directory_uri() ?>/images/Xm1BG.png" alt="X-Massive">
  </a>
  <a href="http://kantenesbjerg.com/deft/">
    <img src="<?php echo get_template_directory_uri() ?>/images/Deft1BG.png" alt="DEFT">
  </a>
</section>

<hr class="section-divider">

<div class="content-wrapper">
  <section class="local-artist">
    <h2>Lokal Artist</h2>
    <div class="youtube-box">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/6YL0JAtxifQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="artist-description">
      <h3>Artist Beskrivelse</h3>
      <p>Med tekster skrevet i takt med livets gang, og med hovedet solidt plantet i skyerne, tager MartsMidnat dig med på sin musikalske drømmerejse. Musikken tager dig i hånden og fører dig gennem et sonisk univers med spacey keys, klirrende guitarer og drømmende vokal. Lytteren opfordres til at være til stede i nuet, mærke energien og lade sig rive med strømmen af følsom og nærværende sangskrivning.
       Bag navnet gemmer sig 22-årige Lærke Simoni, født og opvokset under jyske forhold. Under indflydelse af midnatstimen.
      </p>
    </div>
  </section>

<section class="upcoming-events">
  <div class="event-container">
  <h2>Kommende Events!</h2>
    <div class="event-box">
      <div class="event-image">
        <img src="<?php echo get_template_directory_uri() ?>/images/deft2.jpg " alt="deft2">
      </div>

      <div class="event-info">
        <h3>DEFT</h3>
        <p>Fredag d.15 Maj 2023. <br>
        Kl 20:00 - 02:00 </p>
        
        <div class="event-button">
        	<a href="/deft/" class="more-info-button">Mere information</a>
       		<a href="https://billetto.dk/" class="buy-ticket-button">Køb Billet</a>
    	</div>
     </div>
    </div>
    <div class="event-box">
      <div class="event-image">
        <img src="<?php echo get_template_directory_uri() ?>/images/xmassive1.jpg " alt="xmassive1">
      </div>

      <div class="event-info">
        <h3>X-Massive</h3>
        <p>Fredag d.15 Maj 2023. <br>
        Kl 20:00 - 02:00 </p>
        
        <div class="event-button">
        	<a href="x-massive/" class="more-info-button">Mere information</a>
       		<a href="https://billetto.dk/" class="buy-ticket-button">Køb Billet</a>
    	</div>
     </div>
    </div>
   <div class="event-box">
      <div class="event-image">
        <img src="<?php echo get_template_directory_uri() ?>/images/vertex1.jpg " alt="vertex1">
      </div>

      <div class="event-info">
        <h3>VERTEX</h3>
        <p>Fredag d.15 Maj 2023. <br>
        Kl 20:00 - 02:00 </p>
        
        <div class="event-button">
        	<a href="vertex/" class="more-info-button">Mere information</a>
       		<a href="https://billetto.dk/" class="buy-ticket-button">Køb Billet</a>
    	</div>
     </div>
    </div>
<div style="text-align: center; margin-top: 20px;">
  <a href="/program" class="se-flere">Gå til program</a>
</div>

<a href="/events"></a>

  </div>
 </div>
</section>

<hr class="section-divider">

<section class="photo-gallery">
  <h2 class="section-title">Galleri</h2>
  <?php the_content() ?>
  
</section>


<hr class="section-divider">

<section class="text-section">
  <div class="text-content">
    <div class="text-column">
      <h2 class="section-headline">Kanten</h2>
<p> Kanten er et fællesskab for koncerter, begivenheder og unge i Esbjerg, som er drevet af foreningen Kanten. Vores vision er at etablere en platform dedikeret til at fremme det kreative vækstlag, og derved give det en fremtrædende tilstedeværelse i Esbjergs kulturliv. Gennem denne platform, ønsker vi at støtte de fællesskaber, der opstår i de spirende kreative miljøer. </p>

<p> Vores værdier er fællesskab, inklusivitet og kreativitet, og de danner grundlaget for alt, hvad vi gør. Vores mission er at skabe en platform for de unge, som er skabt af de unge, hvor kunstneriske og kreative udfoldelser og musik trives. Vores mål er at vi igennem vores platform kan styrke og opløfte unge, vise deres talenter og give mulighed for at udtrykke deres kunstneriske sider. Vi stræber efter at skabe et rum, der hylder mangfoldighed, og tilskynder et fællesskab og samarbejde mellem unge fra forskellige baggrunde. </p> 
    </div>
    <div class="logo-column">
      <img class="logo-bottom" src="<?php echo get_template_directory_uri() ?>/images/Kanten-logo.png" alt="Logo">
    </div>
  </div>
</section>



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

    function toggleMenu() {
        var menu = document.getElementById("menu");
        menu.classList.toggle("show");
    }

    // Event listener to close the menu when a menu item is clicked
    var menuItems = document.querySelectorAll("#menu a");
    menuItems.forEach(function (menuItem) {
        menuItem.addEventListener("click", function () {
            var menu = document.getElementById("menu");
            menu.classList.remove("show");
        });
    });

  </script>



