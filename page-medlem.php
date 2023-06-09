<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Medlems side</title>
    <link href="//cdn-images.mailchimp.com/embedcode/classic-071822.css" rel="stylesheet" type="text/css">
    <style type="text/css">

    body {
      background-color: #3a2d28;
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
.section-divider {
  border-top: 1px solid #ccc; 
  margin: 100px 0; 
  width: 92%;
  margin-left: auto;
  margin-right: auto;
}

 .medlem-title {
      padding: 150px 100px 0 100px;
      text-align: center;
      font-size: 50px;
    }
    
    .medlem-text {
      margin-top: 30px;
    }

    .medlem-text p{
     
      font-size: 16px;
      line-height: 1.5rem;
      margin-bottom: 25px;
    }  
      
      .linje-1 {
        font-weight: 600;
      	font-size: 22px!important;
 
      }
      
      
      .outer-text-box {
        display: flex;
        padding: 0 100px;
      }
      .text-box-1 {
        width: 50%;
        padding-right: 50px;
      }
      .text-box-2 {
        width: 50%;
        padding-left: 50px;
      }
      
      .text-box-2-inner {
        height: 50%
      }
      
      .linje-7 {
        font-style: italic;
      }
    
    .clear.foot input.button {
        background-color: #ff0000;
        color: #ffffff;
    }
      
        .container {
            display: flex;
            width: 100%;
            padding: 25px 75px 100px 75px;
            box-sizing: border-box;
        }

        .form-container {
            width: 50%;
            padding: 20px;
            background: #605a54;
            color: black;
        }

        .image-container {
            width: 50%;
            margin-left: 20px;
            display: flex;
            justify-content: center;
            border: 5px solid #f6f6f6;
        }

        .image-container img {
          width: 100%;
          height: 100%;
          object-fit: cover;
        }
      
   .logo-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50%;
  }

  .logo-bottom {
    width: 33%; 
    height: auto;
    padding: 0 2rem; 
  }
      
.footer {
  background-color: #211a17;
  padding: 75px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #f2f2f2;
  height: 100px;
}

.footer p {
  margin: 1em 0;
  line-height: 1rem;
}

.footer .logo {
  display: inline-block;
  width: 100px;
  height: 50px;
  margin-left: 50px;
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

 .mc-field-group {
    display: flex;
    align-items: center;
    height: 22px;
  }
  
  .mc-field-group .button {
      margin-left: 4px!important;
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
  
  .medlem-titel {
    padding: 100px 100px 0 100px;
  }
}  
@media (max-width: 1500px) {
  
  .medlem-title {
    font-size: 40px;
  }
    
  .text-box-2-inner {
    height: fit-content;
  }
      
  .logo-container {
    flex-direction: column;
    align-items: center;
    margin-top: 30px;
    width: 100%;
    height: fit-content;
  }

  .logo-bottom {
    width: auto;
    height: 75px;
  }
}  
      
@media (max-width: 1200px) {
  
  .medlem-title {
    font-size: 35px;
    padding-top: 200px;
  }
    
  .logo-bottom {
    width: auto;
    height: 100px;
  }
} 
      
@media (max-width: 1000px) {
  
  .medlem-title {
    font-size: 30px;
  }
  
  .outer-text-box {
    flex-direction: column;
  }
  
  .text-box-1, .text-box-2 {
    width: 100%;
    padding: 0;
  }
  
  .text-box-2 {
    display:flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  
  .logo-container {
    flex-direction: row;
    align-items: center;
    justify-content: center;
    margin-top: 30px;
    max-width: 65vw;
    height: fit-content;
  }
    
  .logo-bottom {
    width: 33%; 
    height: auto;
    padding: 0 2rem; 
  }
  
  .container {
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  
  .form-container {
    width: 100%;
    padding: 0;
  }
  
  .image-container {
    width: 100%;
    display: flex;
    padding: 0;
    margin-left: 0;
    margin-top: 50px;
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
      
@media (max-width: 600px) {
  
  .medlem-title {
    font-size: 25px;
    padding: 200px 75px 0 75px;
  }
  
  .outer-text-box {
      padding: 0 75px;
  }
      
  .logo-container {
    flex-direction: column;
    align-items: center;
    margin-top: 30px;
  }

  .logo-bottom {
    width: auto;
    height: 75px;
  }
  
  .foot {
    display: flex!important; 
    flex-direction: column!important;
    align-items: flex-start!important;
  }
}  
      
</style>
</head>
<body>
   <header>
    <div class="navbar">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri() ?>/images/Kanten-logo.png" alt="Logo">
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
  
   <div class="medlem-title">
   <h1>Bliv medlem af Kanten</h1>
  </div>

  <div class="medlem-text">
    <div class="outer-text-box">
	<div class="text-box-1">
    <p class="linje-1">Er du fan af undergrundsmusik, som EDM, reggae og hiphop? Så bliv medlem af Kanten, og få eksklusive fordele! </p>

	<p class="linje-3"> Ved at blive medlem af Kanten, støtter du ikke kun vores vision om at fremme det kreative vækstlag, der mangler en synlig plads i Esbjergs kulturliv, men du får også adgang til en række eksklusive fordele. </p>
	<p class="linje-4"> Med et medlemskab får du rabat på drikkevarer til alle vores events, så du kan nyde lækre drikkevarer, mens du laver uforglemmelige minder med venner og ligesindede Nyd en tur i byen uden at tømme pungen, da vi mener, at gode oplevelser bør være tilgængelige for alle. </p>
	<p class="linje-4"> Som medlem modtager du også invitationer til eksklusive events kun for Kanten medlemmer. Disse sammenkomster tilbyder intime rammer, hvor du kan møde, og få fede musikalske oplevelser. Oplev spændingen ved at være en del af et inkluderende fællesskab, hvor forskellige kunstnere og artister samles for at skabe unikke og mindeværdige oplevelser.</p>
 
  	</div>

	<div class="text-box-2">
      <div class="text-box-2-inner">
        <p class="linje-5"> Alt dette får du får til en årlig pris på <span style="font-weight: 600;"> kun 90 kr. </span> </p>

      	<p class="linje-6"> Så omfavn din interesse for kultur og musik, og vær med til at forme en dynamisk fremtid for Esbjergs kulturliv.  Lad os sammen skabe en platform, der fremmer vækst og tilskynder til grænseløs kunstnerisk udforskning, hvor unge skaberes livlige energi trives og finder sin stemme. </p>

      	<p class="linje-7"> Oplev, forbind og lad dig blive inspireret med et Kanten-medlemskab.</p>
      </div>
    <div class="logo-container">
      <img class="logo-bottom" src="<?php echo get_template_directory_uri() ?>/images/Fællesskab.png" alt="Kreativitet">
      <img class="logo-bottom" src="<?php echo get_template_directory_uri() ?>/images/Inklusion.png" alt="Inklusion">
      <img class="logo-bottom" src="<?php echo get_template_directory_uri() ?>/images/Kreativitet.png" alt="Fællesskab">
    </div>
  </div>
</div>


    
  </div>
  
  <hr class="section-divider">
  
<link href="//cdn-images.mailchimp.com/embedcode/classic-071822.css" rel="stylesheet" type="text/css">
<style type="text/css">
    #mc_embed_signup{clear:left; 100%; color: #f2f2f2;}
</style>
  
<div class="container">
    <div class="form-container">
        <div id="mc_embed_signup">
            <form action="https://easv365.us21.list-manage.com/subscribe/post?u=114b6f34947847e7f1bc1a036&amp;id=0c1551c060&amp;f_id=005f55e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <h2 style="padding: 1rem 0;">Tilmeld dig Kanten!</h2>
                    <div class="indicates-required"></div>
                    <div class="mc-field-group">
                        <label for="mce-MMERGE1">Fornavn</label>
                        <input type="text" value="" name="MMERGE1" class="" id="mce-MMERGE1">
                        
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-MMERGE2">Efternavn</label>
                        <input type="text" value="" name="MMERGE2" class="" id="mce-MMERGE2">
                       
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email Address</label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
                        
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-MMERGE3">Tlf. Nummer</label>
                        <input type="text" value="" name="MMERGE3" class="" id="mce-MMERGE3">
                       
                    </div>
                    <div id="mce-responses" class="clear foot">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_114b6f34947847e7f1bc1a036_0c1551c060" tabindex="-1" value=""></div>
                   <div class="clear foot">
    				<input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="button">
    				<p class="brandingLogo"><a href="http://eepurl.com/isbE_c" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p>
					</div>
                </div>
            </form>
        </div>
    </div>

    <div class="image-container">
        <img src="<?php echo get_template_directory_uri() ?>/images/fælleskab-kanten.jpg" alt="KantenFællesskab">
    </div>
</div>
  
  
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
  
 <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>
    (function($) {
        window.fnames = new Array();
        window.ftypes = new Array();
        fnames[1]='MMERGE1';ftypes[1]='text';fnames[2]='MMERGE2';ftypes[2]='text';
        fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='MMERGE3';ftypes[3]='text';
    }(jQuery));
  
  

  // Add an event listener to the form submit button
  var signupForm = document.getElementById('mc-embedded-subscribe-form');
  var signupSubmit = document.getElementById('mc-embedded-subscribe');
  signupSubmit.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Assuming the user has successfully signed up and is now a member

    // Get the current member count from local storage
    var currentMemberCount = localStorage.getItem('memberCount');

    // Increment the member count
    var updatedMemberCount = parseInt(currentMemberCount) || 0; // Default to 0 if the count is not a valid number
    updatedMemberCount++;

    // Store the updated member count in local storage
    localStorage.setItem('memberCount', updatedMemberCount);

    // Redirect the user back to the front page
    window.location.href = 'http://kantenesbjerg.com/';
  });
  

  
</script>

  
