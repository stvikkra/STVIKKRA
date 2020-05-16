<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styling/reset.css">
    <link rel="stylesheet" type="text/css" href="styling/style.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,600&display=swap" rel="stylesheet">
    <title>STVI KKRA | Contact</title>
  </head>

  <body>

  <div class="wrapper_master">
      <nav class="navigation">
        <label class="mobile_nav" for="toggle">&#9776;</label>
        <input type="checkbox" class="hamburger_menu" id="toggle">
        <div class="menu" id="mobile_subnav">
            <h4 class="submenu_h4"><a href="index.html" class="subnav_color" target="_blank">Home</a></h4>
            <h4 class="submenu_h4"><a href="casestudies.html" target="_blank">Case Studies</a></h4>
        </div>
          <h3 id="header_name"><a class="headlink" href="index.html" target="_blank"> STVI KKRA</a> </h3>
          <h4 class="main_nav"><a href="casestudies.html" target="_blank">Case Studies</a></h4>
      </nav>
      <div class="nav_buffer"></div>

      <div class="contact_wrapper">

		    <div class="contact__container">

				      <div class="contact__title">
						          <h2>Contact Me<hr></h2>
				      </div>

				      <form class="contact__form" action=”contactform.php” method=”post” enctype=”multipart/form-data” name=”EmailForm”>
						      <p class="form_p">Name</p>
					        <input class="contact__form-input" type="text" name="name">

						      <p class="form_p">Email</p>
						      <input class="contact__form-input" type="text" name="mail">

						      <p class="form_p">Message</p>
						      <textarea class="contact__form-textarea" type="text" name="message"></textarea>

						      <button class="form_cta" type="submit" name="submit"><h3>Send Message</h3></button>
				      </form>
		      </div>

        </div>

         <footer class="footer_wrap">

           <div class="name_avi">

             <img src="images/mask_footer.png" alt="avi" class="avi"/>

             <div class="name_email">
               <h3 class="description_display" id="footer_name"> Stevie Kukura </h3>
               <p class="footer_email">stvikkra@gmail.com</p>
             </div>

           </div>

           <div class="socialmedialinks">
             <a href="https://www.github.com/stvikkra" target="_blank"><img src="images/github.png" alt="github"/></a>
             <a href="https://www.linkedin.com/in/stvikkra" target="_blank"><img src="images/linkedin.png" alt="linkedin"/></a>
             <a href="https://www.instagram.com/stvikkra" target="_blank"><img src="images/instagram.png" alt="Instagram"/></a>
             <a href="https://www.facebook.com/stvikkra" target="_blank"><img src="images/facebook.png" alt="facebook"/></a>
           </div>

         </footer>

  </div>

  </body>

</html>
