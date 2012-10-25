<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);

	/*$form= "<FORM METHOD=POST ACTION=\"process_reference_answer.php\">
			<br \><label for=\"name\">Format</label>
			<select size=\"1\" name=\"format\">
            <option value=\"pdf\" selected>PDF</option>
            <option value=\"odt\">ODT</option>
            <option value=\"doc\">DOC</option>
            </select>
			<br \><label for=\"name\">Language</label>
			<select size=\"1\" name=\"lang\">
            <option value=\"en\" selected>English</option>
            <option value=\"es\">Spanish</option>
            </select>
			<br \><label for=\"name\">Name</label> <input type=\"text\" id=\"name\" />
            <br \><label for=\"name\">Name</label> <input type=\"text\" id=\"name\" />
            <br \>Comment:
            <br \><TEXTAREA NAME=\"recommendationLetter\"COLS=40 ROWS=6></TEXTAREA>

           	<br \><INPUT TYPE=\"submit\"name=\"submit\" value=\"Send\">
            </FORM>";*/
            $text = "If you need my CV or any reference letter, please send me an e-mail to <a href=\"mailto:david.rozas@gmail.com\">david.rozas@gmail.com</a> 
								<br /> You can indicate your preferred document format (.pdf, .odt, .doc, ...) and language (English or Spanish). You can also contact me
								through <a href=\"http://uk.linkedin.com/in/drozas\" target=\"_blank\">LinkedIn</a>." ;
//drozas: This will be in a db or at least a file
	$items = array(		array(
								"Request CV", 
								$text,
								"Solicitar CV",
								"Si quieres solictar mi CV o cartas de referencia, puedes enviarme un correo a <a href=\"mailto:david.rozas@gmail.com\">david.rozas@gmail.com</a> 
								<br /> Puedes indicar el formato (.pdf, .odt, .doc, ...) y el idioma (inglés o español) en el que prefieres recibirlo. Puedes contactarme igualmente
								a través de <a href=\"http://uk.linkedin.com/in/drozas\" target=\"_blank\">LinkedIn</a>.")
					);

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
	print_form($form);    
	print_footer();	
?>	
