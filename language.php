<?php
function check_language($lang)
{
 		
	//drozas: initialize language to spanish if preferred, english otherwise
	if(!isset($_SESSION["lang"]))
	{
		$langs = explode(";", $_SERVER['HTTP_ACCEPT_LANGUAGE']);
		if(strpos($langs[0], "es") !== false)
			$_SESSION["lang"] = "es";
		else
			$_SESSION["lang"] = "en";		
	}
		
	//drozas: Check if the user has tried to set the language, and change it then
	if(isset($lang))
		$_SESSION["lang"] = $lang;
	
}
?>
