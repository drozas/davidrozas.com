<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);
	
	//drozas: The font size is an ugly hack to avoid dealing with divitis
	$items = array(		array(
								"PGP", 
								"PGP (Pretty Good Privacy) \"is a data encryption and decryption computer program that provides cryptographic privacy and authentication for data communication. PGP is often used for signing, encrypting, and decrypting texts, e-mails, files, directories, and whole disk partitions and to increase the security of e-mail communications.\" [Pretty Good Privacy. (n.d.). In Wikipedia. Retrieved January 3, 2015, from  <a href=\"http://en.wikipedia.org/wiki/Pretty_Good_Privacy\">http://en.wikipedia.org/wiki/Pretty_Good_Privacy</a>]. <br /> Press <a href=\"./pk/drozas_public.key\" target=\"_blank\">here</a> to download my public key, or copy and paste it from below.",
								"PGP",
								"PGP (Pretty Good Privacy) \"es un programa desarrollado por Phil Zimmermann y cuya finalidad es proteger la información distribuida a través de Internet mediante el uso de criptografía de clave pública, así como facilitar la autenticación de documentos gracias a firmas digitales.\" [Pretty Good Privacy. (n.d.). En Wikipedia. Accedido el 3 de enero de 2015, desde <a href=\"http://es.wikipedia.org/wiki/Pretty_Good_Privacy\">http://es.wikipedia.org/wiki/Pretty_Good_Privacy</a>]. <br /> Pincha <a href=\"./pk/drozas_public.key\" target=\"_blank\">aquí</a> para descargar mi clave pública, o copia y pégala desde la sección inferior."),
								array(
								    "My public key",
								    "<font size=\"1\">-----BEGIN PGP PUBLIC KEY BLOCK-----
                                      <br />Version: GnuPG v1.4.6 (GNU/Linux)
                                      
                                      <br />mQGiBEjdEUkRBADsq+dTLW9bnyM7a0dMScYjpGX08m0NYUF6KdlbtIwEyZ0aGf8Y
                                      <br />ufuJWLempVmJyQ0/rV+xy492cUrIFSVgHhuhM/MugEHWIujsVqd0qXuRIxv2YaiY
                                      <br />gnzYELYz5FdzHvsz5DJT29pj/XAJWZjIPP7OOZa2yJMVX67x0tIdqR+Z9wCgty36
                                      <br />2xI95ff8wyXUoN/9fbnV2kUEAN4+S+cGHGP7+paxYSDaYepaDDLmLPa+d4l87Zw4
                                      <br />DQgDf8OhyA9kr70Kj5PmNHtGCF/TAcvBiBwX5lfe5Ok8O3GhIq+l0tO1xRBK/Xc4
                                      <br />oRFnxrdx1sc6ANJVS3VdNuLLcM8xXgFGKZxY6uPFF3MU/ARZZnWptI+jTWPEpeHT
                                      <br />PHikBACJN85iLOf/6B/O5G3pI/NruCEz+OqXwhdbDPc6fDuS9lSmqItbnpYXuua+
                                      <br />PkT8R5AEUG6lsJc10Mh3+AKKGCnbk2MpBJQnt9kozobwWnHAMPzfTfexb495HZsU
                                      <br />2Hhq7onXFnrnDOX6XBI00fzECgAfcUYf+8XTafhL2NPVIQNQeLRLRGF2aWQgUm96
                                      <br />YXMgRG9taW5nbyAoUEdQIEtleSBmb3IgbXkgZS1tYWlsIGFjY291bnQpIDxkYXZp
                                      <br />ZC5yb3phc0BnbWFpbC5jb20+iGAEExECACAFAkjdEUkCGyMGCwkIBwMCBBUCCAME
                                      <br />FgIDAQIeAQIXgAAKCRAAoRSOxTfcJF3yAJ0bIBp45l/BXoYQIktOismNttnQZwCf
                                      <br />QXdIwaAAY3V2BRsvzfDV0hPA3+q5Ag0ESN0RTRAIAIdzGhOd0btGP741+/BsAN2W
                                      <br />GEJQt10d9wGdbPoNKR9uYTiX0yz9NyYlaGIEU5moo7n29qX6t6olHZhx54PQWUUU
                                      <br />U+aFUtLscGxhF9W5ZikN9Feo/u26v0I0hcfjVZC2t1gPfAhG5XjTJs7H37/3GN0o
                                      <br />csjGzfEgRog+sbpUl9g+wXJ/OjG9u3qhNt+I9qEsiETz83EvKqhRpWVe+5L+R8F8
                                      <br />AH9Yg/3cmUe7bIzX7Z34flmUrDU09fzZ2EJzvqAbIrLYBaPfuEzoHyGRNMKddlDA
                                      <br />NT6TtRXrW8rHIg9dxU5TWZfG8Ai2Rl7dPiqXyU6xCDe06TyOsEXPOxIHdARKbSMA
                                      <br />AwUH+gMKXZxuUDBbgTXz/vErA80TKLUIMqYl8h36kCheJY/5Zee205Mf0TWLanG0
                                      <br />YYq8JBMCWZHIRWEyAtD6DdnLviT340OZC9Dgg0tKDfQ2LndOi2zs8LMHTndO/3XX
                                      <br />fpa9bR/Mrv1//feeKZY7Zt9d1ncaal/5tw2HifkWQVEz4N92JVAVxjAxuU0c6OOR
                                      <br />o9T9nn4Z9MohBHSRz/JqYwdO+ivibPUpEg/oWVRVL5Du5O4RUza/spWz0kx97KDh
                                      <br />kbBUwXP2igm3i9JJhbj1Oh0cLEVJ3M0YSgSNB4WQSY9+ImsZfmzG0mZbUNWHcikW
                                      <br />Te6RHUwnNZjieHcW0jPdnqkOLDGISQQYEQIACQUCSN0RTQIbDAAKCRAAoRSOxTfc
                                      <br />JG8AAKCwvcM3PQJKkIwGmKg6G+E+eI4vtwCfWQN/UQ/Af+mSeHUSXXU6IMlyZlk=
                                      <br />=6Bzt
                                      <br />-----END PGP PUBLIC KEY BLOCK-----</font>",
								    "My clave pública",
								    "<font size=\"1\">-----BEGIN PGP PUBLIC KEY BLOCK-----
                                      <br />Version: GnuPG v1.4.6 (GNU/Linux)
                                      
                                      <br />mQGiBEjdEUkRBADsq+dTLW9bnyM7a0dMScYjpGX08m0NYUF6KdlbtIwEyZ0aGf8Y
                                      <br />ufuJWLempVmJyQ0/rV+xy492cUrIFSVgHhuhM/MugEHWIujsVqd0qXuRIxv2YaiY
                                      <br />gnzYELYz5FdzHvsz5DJT29pj/XAJWZjIPP7OOZa2yJMVX67x0tIdqR+Z9wCgty36
                                      <br />2xI95ff8wyXUoN/9fbnV2kUEAN4+S+cGHGP7+paxYSDaYepaDDLmLPa+d4l87Zw4
                                      <br />DQgDf8OhyA9kr70Kj5PmNHtGCF/TAcvBiBwX5lfe5Ok8O3GhIq+l0tO1xRBK/Xc4
                                      <br />oRFnxrdx1sc6ANJVS3VdNuLLcM8xXgFGKZxY6uPFF3MU/ARZZnWptI+jTWPEpeHT
                                      <br />PHikBACJN85iLOf/6B/O5G3pI/NruCEz+OqXwhdbDPc6fDuS9lSmqItbnpYXuua+
                                      <br />PkT8R5AEUG6lsJc10Mh3+AKKGCnbk2MpBJQnt9kozobwWnHAMPzfTfexb495HZsU
                                      <br />2Hhq7onXFnrnDOX6XBI00fzECgAfcUYf+8XTafhL2NPVIQNQeLRLRGF2aWQgUm96
                                      <br />YXMgRG9taW5nbyAoUEdQIEtleSBmb3IgbXkgZS1tYWlsIGFjY291bnQpIDxkYXZp
                                      <br />ZC5yb3phc0BnbWFpbC5jb20+iGAEExECACAFAkjdEUkCGyMGCwkIBwMCBBUCCAME
                                      <br />FgIDAQIeAQIXgAAKCRAAoRSOxTfcJF3yAJ0bIBp45l/BXoYQIktOismNttnQZwCf
                                      <br />QXdIwaAAY3V2BRsvzfDV0hPA3+q5Ag0ESN0RTRAIAIdzGhOd0btGP741+/BsAN2W
                                      <br />GEJQt10d9wGdbPoNKR9uYTiX0yz9NyYlaGIEU5moo7n29qX6t6olHZhx54PQWUUU
                                      <br />U+aFUtLscGxhF9W5ZikN9Feo/u26v0I0hcfjVZC2t1gPfAhG5XjTJs7H37/3GN0o
                                      <br />csjGzfEgRog+sbpUl9g+wXJ/OjG9u3qhNt+I9qEsiETz83EvKqhRpWVe+5L+R8F8
                                      <br />AH9Yg/3cmUe7bIzX7Z34flmUrDU09fzZ2EJzvqAbIrLYBaPfuEzoHyGRNMKddlDA
                                      <br />NT6TtRXrW8rHIg9dxU5TWZfG8Ai2Rl7dPiqXyU6xCDe06TyOsEXPOxIHdARKbSMA
                                      <br />AwUH+gMKXZxuUDBbgTXz/vErA80TKLUIMqYl8h36kCheJY/5Zee205Mf0TWLanG0
                                      <br />YYq8JBMCWZHIRWEyAtD6DdnLviT340OZC9Dgg0tKDfQ2LndOi2zs8LMHTndO/3XX
                                      <br />fpa9bR/Mrv1//feeKZY7Zt9d1ncaal/5tw2HifkWQVEz4N92JVAVxjAxuU0c6OOR
                                      <br />o9T9nn4Z9MohBHSRz/JqYwdO+ivibPUpEg/oWVRVL5Du5O4RUza/spWz0kx97KDh
                                      <br />kbBUwXP2igm3i9JJhbj1Oh0cLEVJ3M0YSgSNB4WQSY9+ImsZfmzG0mZbUNWHcikW
                                      <br />Te6RHUwnNZjieHcW0jPdnqkOLDGISQQYEQIACQUCSN0RTQIbDAAKCRAAoRSOxTfc
                                      <br />JG8AAKCwvcM3PQJKkIwGmKg6G+E+eI4vtwCfWQN/UQ/Af+mSeHUSXXU6IMlyZlk=
                                      <br />=6Bzt
                                      <br />-----END PGP PUBLIC KEY BLOCK-----</font>"),
                                      					);

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
    
	print_footer();	
?>	
