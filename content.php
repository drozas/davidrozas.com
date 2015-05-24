<?php
$news = array (
                    array("24rd, May. 2015", "Updated CV and publications", "24-05-2015", "Actualizadas publicaciones y CV"),
                    array("3rd, Jan. 2015", "Updated presentation and added 'Projects' and 'Publications' sections.", "03-01-2015", "Actualizadas las secciones de presentación y añadidas las secciones de 'Proyectos' y 'Publicaciones'"),
					array("13th, Nov. 2013", "Updated presentation and projects sections.", "13-11-2013", "Actualizadas las secciones de presentación y proyectos."),
					//array("13th, Oct. 2012", "Main page updated.", "13-10-2012", "Actualizada página principal."),
					//array("22nd-Feb-10", "Academic information updated.", "22-02-10", "Información académica actualizada."),
					//array("25th-Feb-09", "Redesigned as a dynamic website", "25-02-09", "Rediseñada como web dinámica"),
					//array("19th-Feb-09", "Some new areas added", "19-02-09", "Añadidas nuevas áreas"),
				);
				
				
function print_head()
{
	
	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">";
	echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">";
	echo "<head>";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />";
	echo "<title>drozas@www:~$ - David Rozas' Personal website</title>";
	echo "<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" />";
	echo "<link href=\"favicon.ico\" rel=\"icon\" type=\"image/x-icon\" />";
	echo "</head>";
	
}

function print_header($lang) 
{
	print_head();
	echo "<body>
			<div id=\"container\">
			<div id=\"languages\">";
	echo
			"<a href=\"http://". $_SERVER["SERVER_NAME"] . $_SERVER["PHP_SELF"] . "?set_language=en\">";
	echo 	"English";
	echo "</a> ";
	echo "| " . "<a href=\"http://". $_SERVER["SERVER_NAME"] . $_SERVER["PHP_SELF"] . "?set_language=es\">";
	echo	utf8_decode("Español");
	echo		"</a> ";
	echo "	</div>
			
			<div id=\"header\">
			<h1><a href=\"http://www.davidrozas.com\">drozas@www:~$</a></h1>";
	echo "<h2>";

	if(isset($lang)&& $lang!=null && $lang=="es"){echo utf8_decode("Página personal de David Rozas");}else{echo "David Rozas' Personal website";};
	echo "
    <ul class=\"share-buttons\">
	  <li><a href=\"https://twitter.com/drozas\" target=\"_blank\" title =\"Twitter profile\"><img src=\"img/social_media_icons/png/twitter.png\"></a></li>
      <li><a href=\"https://uk.linkedin.com/in/drozas\" target=\"_blank\" title =\"LinkedIn profile\"><img src=\"img/social_media_icons/png/linkedin.png\"></a></li>
      <li><a href=\"http://www.slideshare.net/drozas\" target=\"_blank\" title =\"Slideshare profile\"><img src=\"img/social_media_icons/png/slideshare.png\"></a></li>
	  <li><a href=\"https://drupal.org/u/drozas\" target=\"_blank\" title =\"Drupal profile\"><img src=\"img/social_media_icons/png/drupal.png\"></a></li>
      <li><a href=\"https://github.com/drozas\" target=\"_blank\" title =\"GitHub profile\"><img src=\"img/social_media_icons/png/github.png\"></a></li>
	  <li><a href=\"http://scholar.google.co.uk/citations?user=r5IjkCcAAAAJ\" target=\"_blank\" title =\"Academia profile\"><img src=\"img/social_media_icons/png/gscholar.png\"></a></li>
	  <li><a href=\"https://surrey.academia.edu/DavidRozas\" target=\"_blank\" title =\"Academia profile\"><img src=\"img/social_media_icons/png/academia.png\"></a></li>
      <li><a href=\"https://www.researchgate.net/profile/David_Rozas\" target=\"_blank\" title =\"ResearchGate profile\"><img src=\"img/social_media_icons/png/research_gate.png\"></a></li>
	  <li><a href=\"http://www.surrey.ac.uk/sociology/people/phd/david_rozas/\" target=\"_blank\" title =\"University of Surrey profile\"><img src=\"img/social_media_icons/png/surrey.png\"></a></li>
      <li><a href=\"mailto:david.rozas@gmail.com\" title =\"E-mail address\"><img src=\"img/social_media_icons/png/mail.png\"></a></li>  
	</ul>
    ";
	echo "</h2>
			<br />
			<hr />
			</div> <!-- end header -->
	";
}

function print_menu($lang)
{
	echo "<div class=\"spacer\"></div>
			<div id=\"left\">
			
			<div id=\"leftcontent\">
			
				<ul>
					<li><a href=\"index.php\">";
	if(isset($lang)&& $lang!=null && $lang=="es"){echo utf8_decode("Principal");}else{echo "Home";};
	echo			"</a></li>
					<li><a href=\"publications.php\">";
	if(isset($lang)&& $lang!=null && $lang=="es"){echo utf8_decode("Publicaciones");}else{echo "Publications";};
	echo			"</a></li>
					<li><a href=\"cv.php\">";
	if(isset($lang)&& $lang!=null && $lang=="es"){echo utf8_decode("Currículum resumido");}else{echo "Short CV";};
	echo			"</a></li>
					<li><a href=\"projects.php\">";
	if(isset($lang)&& $lang!=null && $lang=="es"){echo utf8_decode("Proyectos");}else{echo "Projects";};
	echo 			"</a></li>
					<li><a href=\"code.php\">";
	if(isset($lang)&& $lang!=null && $lang=="es"){echo utf8_decode("Código fuente & laboratorio");}else{echo "Source code & lab";};					
	echo 			"<li><a href=\"pgp.php\">PGP</a></li>
				</ul>
			<p>&nbsp;</p>";
			
}

function print_news($lang)
{
	global $news;
	
	echo "<h3>";
	if(isset($lang)&& $lang!=null && $lang=="es"){echo utf8_decode("Últimas actualizaciones");}else{echo "Latest updates";} 
	echo"</h3><p class=\"news\">";					
	foreach ( $news as $key => $n ) 
	{
		if(isset($lang)&& $lang!=null && $lang=="es")
			echo "- " . utf8_decode($n[2]) . " | " . utf8_decode($n[3]) . "<br />";
		else
			echo "- " . utf8_decode($n[0]) . " | " . utf8_decode($n[1]) . "<br />";

	}
	
	echo "</p></div> <!-- end left content -->
			</div> <!-- end left division -->
			<div id=\"main\">
			<div id=\"maincontent\">
		";	
	
}

/*drozas: each item has his title + content in english and spanish*/
function print_item($lang, $item)
{
	if(isset($lang)&& $lang!=null && $lang=="es")
	{
		echo "<h3 class=\"top_main_heading\">" . utf8_decode($item[2]) . "</h3>";
		echo "<p>" . utf8_decode($item[3]) . "</p>";
	}else{

		echo "<h3 class=\"top_main_heading\">" . $item[0] . "</h3>";
		echo "<p>" . $item[1] . "</p>";		
	}
	
	
}
function print_form($form)
{
	echo $form;
/*	if(isset($lang)&& $lang!=null && $lang=="es")
	{
		echo "<h3 class=\"top_main_heading\">" . utf8_decode($item[2]) . "</h3>";
		echo "<p>" . utf8_decode($item[3]) . "</p>";
	}else{

		echo "<h3 class=\"top_main_heading\">" . $item[0] . "</h3>";
		echo "<p>" . $item[1] . "</p>";		
	}
*/	
	
}

function print_footer()
{
	
	echo "
		</div> <!-- end main content section -->
		</div> 
		<div id=\"footer\"><div class=\"spacer\"></div>
		<hr />" .
		//<p class=\"left\">| <a href=\"http://jigsaw.w3.org/css-validator/\" target=\"_blank\">CSS</a> | <a href=\"http://validator.w3.org/check?uri=referer\" target=\"_blank\">XHTML 1.1</a> |</p>
		"<p class=\"right\">2009 - <a href=\"mailto:david.rozas@gmail.com\">David Rozas</a>. 
		CSS based on an Open Source Web Design by <a href = \"http://www.oswd.org/user/profile/id/8572\" target=\"_blank\">Matt Hollis</a>.<br />
		The contents of this website are licensed under a <a href=\"http://creativecommons.org/licenses/by-sa/4.0/\">Creative Commons Attribution-ShareAlike 4.0 International</a> except if otherwise noted.
		The source code is licensed under a <a href=\"http://www.gnu.org/licenses/gpl.html\" rel=\"license\"> GPLv3 License</a>
        and can <a href=\"https://github.com/drozas/davidrozas.com\" rel=\"github-repo\">be checkout from Github</a>.</p>
		
		<p>&nbsp;</p>
		</div> <!-- end footer -->
		
		</div> <!-- end container -->
		
        <!-- Piwik -->
        <script type=\"text/javascript\"> 
          var _paq = _paq || [];
          _paq.push(['trackPageView']);
          _paq.push(['enableLinkTracking']);
          (function() {
            var u=((\"https:\" == document.location.protocol) ? \"https\" : \"http\") + \"://davidrozas.com/piwik//\";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', 1]);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
            g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
          })();
        
        </script>
        <noscript><p><img src=\"http://davidrozas.com/piwik/piwik.php?idsite=1\" style=\"border:0\" alt=\"\" /></p></noscript>
        <!-- End Piwik Code -->	
		
		</body>
		
		</html>
		";
	
	
}
?>