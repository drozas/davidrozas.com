<?php
	session_start();
	require_once("content.php");
	require_once("language.php");
	
	check_language($_GET['set_language']);
    $public_key = "<font size=\"1\">
  -----BEGIN PGP PUBLIC KEY BLOCK-----
<br />Version: GnuPG v1.4.12 (GNU/Linux)
<br />
<br />mQENBFSMZkoBCAChYwmJN/aL2Av1+eR3fVi6ZrolJmscGHl77iRHgIeDLnJV0Cii
<br />8+QXhQ5Ki+o25YF0wlCVWtiTklVnQ/f5OB1zbB6DDQVAk0pwPa2x51g2DKETyHB7
<br />suWeM+MXXAH2lztMPfLY8EGox4Jakvt5pE1KAavzJGrbJkqO5h1jLU0YqatEYHwm
<br />NYUjCcE8Loh9Lcvmnz28AOGgjI0mqny0sxSKlZnX4z3ASIeTEz2dZazWyXlO106q
<br />tTCHalN5TxwFVpKcPTFgu+BEs0qwlvr/v8r5S/PYiWkSAH3fy/hYjl+EwNiwmG7B
<br />E0txNTQ/DOsePxAZv6OrQqGzVrpdWckIfq3tABEBAAG0I0RhdmlkIFJvemFzIDxk
<br />YXZpZC5yb3phc0BnbWFpbC5jb20+iQE4BBMBAgAiBQJUjGZKAhsDBgsJCAcDAgYV
<br />CAIJCgsEFgIDAQIeAQIXgAAKCRDovTekHUpJpG4RB/4htifhGU/sKW6kEeolVovu
<br />nRNFYjb+k2piDUikDwnjfpa/Cs0U/z+c0cb5VDA8qFb4/f+XX3oUmiQhB6KHOjHm
<br />+fvHouBsEhXiIp388HoPamzjJyvbpkeHpmzUhl1FjJvWQiscAiT7fZD9ZewmJohq
<br />oKsG5YS17LJBpIJqHy4yVZJ9o6zxWwvwJS5XGVYZyZG4UoaRiiQiQqBusDueS7GW
<br />lhsLzknXv9LpCdjolDJRsUwV0XncS/HQEW32T9fR2+wsl7SsJPv3NdRDqaOHBbpX
<br />DxVJ0ozjKJjIaBjGmLrfRg09mSwIAEa5eK8RFjsMG1XzaipCuU9WNtSbiwe+HfUE
<br />uQENBFSMZkoBCACwfGYAM8yDeLWMsbVq1GDkAbL3W0r6LvYrkCExpsv2W/bfCbX3
<br />0hoQNQf/28/rBgwI7xPM9cqvM2jub8WH/mhB7V5XE2QnUiKimB3h0mWJ0pK3zlHE
<br />hlN6SB2sSthXXMg5URo+jbzISVI+StfVeODGwlYnztlQfbVeORe9GMS5RX5hGPof
<br />XR1SyIDP5kfS6ndH0WktzPlYiwfRCaNW5PM0X+kg0qZ+HSmIeNmptU6IDA34X9PB
<br />2DRyrrs/hsHEfFxTCIKduLfqqNQz33/84Db3zYGw5DyheC9QzJSjNBqrcL4+qjxk
<br />EIoGtxSv9xbJDm9iqYlFn2P+DlcowCamwz07ABEBAAGJAR8EGAECAAkFAlSMZkoC
<br />GwwACgkQ6L03pB1KSaSL1wf8DNqqsYSdqov+5L7+S3U0L2oOu1OPGBa2GvU3eOcg
<br />QWv+T5RmABVmCtL4CbLkF04KbZ/68mXsBVs+LiDqwJ0fJQjEnTip2MnW3g6HtwnB
<br />YU+/nDfoA28ZNx2ubg5gB0y4uhZlaAUZPhZlRB94Dc/Tr2q/W+PzDraagvEVXrv5
<br />X5+zN2a98RlJm4lRsY4hiuOuR/Z7g0pd8WLQ0V47Xz9r6okLdkwtEh4EqhrePmOc
<br />3FU3Q5iucTn9oLHNiFFfR1hZ66L2LyvrKdv2aUZM5K00kd36DOISInDitvnZ1rEH
<br />jfocB9q3pl6Ge2INaoDkrEB4WQihaPFSxOXw19dtLRZvuZkCDQRUqWmdARAAu/4G
<br />5r3e72YsF8sxVn1Rm7LjYL1Xvmh+skLf9jDn7DmPTBLKISiVXhDEkQ5aDfXwG1zJ
<br />QHEucvlzzGdDYIObC2+xU0SL1RYJ0JTuLSDxSWTC9EaY72AOCwrlzyxDhkvsaPq2
<br />VsRtdvr1mgh0fKPySr8ZCjxgxFmuX0/8UGZDfN2FzpOx1jXGS0HGgWXxe9fjrRgP
<br />OexKJb7+CYQp/fmqGgvvsrqz89nwLaWfKtOIrC5yj4pm80Tmz1D+eorqxUEKX9SP
<br />H3XJttex3t4gtobUCp1e3FEQUdIVD6ymDr4nAAihKqHrLBMEJh4wgYsKNYSNwjEV
<br />9Gd+bcXu3x5E75M/iGXzdXK3D4wJOxRufcvzMddfjOnIc9rHULF0szUICbULwy2h
<br />AkGxiFj2Klyx1yyiD2S0BaYsbh+kucg/JQt989iH7hPHs/gtLXgZ4hr0yUDE9Tb/
<br />+ZRZjPc8i67Env6Bll1EidUq63qO5lrEy5/UZvoPLO43si3FmZ4NRSltzNT6PuIU
<br />Nh5cnUiCGYwFc9SnBghOITBy9lMwABa/Fuuwgh0ONf+aVcMzGkbhNJcKURsN6Xmx
<br />G9iJzRmwAn5hk86R704bN6CsM9H4gd7nFBvdhDoQfHeafaSWLMZQu8eYPfjulDv9
<br />Ym4E/mipFknAxg3YQN+aNADB+X4Y3afUTVxSs60AEQEAAbQrRGF2aWQgUm96YXMg
<br />RG9taW5nbyA8ZGF2aWQucm96YXNAZ21haWwuY29tPokCOgQTAQgAJAIbAwULCQgH
<br />AwUVCgkICwUWAgMBAAIeAQIXgAUCVKlqYgIZAQAKCRABpRspBJ1obtaAD/9MtMHD
<br />WqThJoPgUOoAEpnXyL9KvzeUvL5M5qE0v/ua0lzgwlmiD9KYhEQ/Fj3OiDyFEAYz
<br />kIqHKM6aV59tngGhHMDEvOwI2BxdO9vYCavlWkTJQg7ZxsiE0EvziEL2JRPohIvp
<br />36aejOzpYJ25QghX4iFvRaITfdlHSthblj2EdiFzMwCwUjQ4QsH3UcCFKNopxmy0
<br />NB9cnd8UkDXNILH9MSk6uNJ4caX0EQ82R70Eb2gX2ZNrhES88u6lAahQXSlUdDkH
<br />bzJbtUG+ibLpkIoFo8yY/I/9d0KmDKy+gJES7IkAJxsY5JEojRCdprxFxSu35y8r
<br />bSL/5rYuQ0AZvDXJJaUcW57Q5WYxc7Xr1sHnBK2Iz57wInVD2+t21tn15pRSqVpx
<br />zfQZfYjVXlDYr+IfAVLynXLsRK1Sjkt9E2MKrmnvDupoqrlY6P2z54orvvHSRGhT
<br />som4MX8FbqucDKVz9/60TgiVnqq6Klo9wyfdq/GMRwuZxtRdlBYTtU6/gRqVw2Wy
<br />2DC5P+Fn95lgl1HXUDXFltW+Ew7a2wc5NsHoBto7mUcsPJlC+sI9p+n9z7Ko+baV
<br />awB1nGDujIHAGGYw8h9HJuU+8WEgk51vz6e4d7gJcU+nkVqlcHhEUyJPmLVg/H+m
<br />sGaafyCdvpQNoolgfgBOIR+nRG4AviAWzrh0/bQhRGF2aWQgUm96YXMgPGRyb3ph
<br />c0BzdXJyZXkuYWMudWs+iQI3BBMBCAAhBQJUqWpKAhsDBQsJCAcDBRUKCQgLBRYC
<br />AwEAAh4BAheAAAoJEAGlGykEnWhu7XwP/3Rot0dc0CjMJ2ppkfVk6BTHUyOqbgK+
<br />tpezv/3hrJGaFi7D1g7IFsfAPX/PQpH8T8W7vHLY7x+UgXPekfMs5z+d15BlsHHU
<br />yCo5UcEiudfldA1kjQEqcNckQnsuqfrlSxRGJuXyTMoxtrQNcHR9cV+l3kbpMzA3
<br />iE7SKI/4slbFfLvA0Zyeh935qk5U2u4NJfm59D3PmQ23yNkOjbLIwkCZSVA5kCmS
<br />Vj/x3csZ8pE9n5QZt66V7tdbB+bJnK+QEYjZe7BNyqfG3gZEYAS4I7qKjAis4NXt
<br />hUTTNHGwVTnyphWJ8CNDUanvIEsKL9xDc/Hce385mt5VlqfSVjnu664W2SXIKFTc
<br />PzbIuvXzjT7H7Jk8NsckYWnmBKL1oLk8gTzgGqnhDTQX/p8w9/z036f7uXyswQvy
<br />tYhPI1EWgh0xl6GsTadvULCANa3RqoOIE/OClLbZY7jFwSj89qXUZTmxYPTYo+vi
<br />gAgEXCFsg25GuHllrvRCXyoZflOWg6GkVEOrDi7tXV0v7NmxCXw9wOlEFpJQoRhk
<br />cTsApaFrmwKdl5cW+SJss7w+myGzsJZOAdljlgIqv8Kj79DPQN1+25QplSOFCrzs
<br />wokTR/p1FGk2oNhInH2iTacTrjQMKIjuCORyyahc76QiBIkk63HOhRcxSCsc554Q
<br />AOT2jJD1SjiquQINBFSpaZ0BEADkcl+TKbMbYVUUn/PGAjlF9nWUprxOENaJ5rkQ
<br />u6YdDJoKghOuJ7N7Pb/iSFR4TcDQFWP7vu7/7G7ndUTMKLFkScEsmAcH0Hdok/Wr
<br />8v62KI67LU+doOAl1ahQ5MUu2VCFG94kmLL4/xTr7bP+NSVkMOh3myTmwx/LBdFx
<br />5ElYtb0hf5SsXP7EgNHWf7lBlPL3WSmTT1iAcaLY84d19PkmfSO/WlLQXYQ+z1SA
<br />A7H/OkoVrXHBwLhJtp8DCd9jRIFtykZuJxd7RrPmyo+71ofCRPyrdZADwkC0KOAV
<br />C5yPPCpkDs64F5CS7vUJHyB0JqRmY8wagIvrjBEo5seCI0dxgwC8vy3Y292K+uU3
<br />2Mdflxijq6flpJ+49F1yM45AehYZ3tndOlLkuD+HKQ42chWCurwk+lUclnhAf/6m
<br />jJaRGQb9QUqRuXLTGfWs0Af5mtN6ES2au8V2jN5UJ4lcDlU4JfecIuA4U25fApEV
<br />vi7jna480VIttpkcH8E3gJaAHm9JQnznMkivTZsHm7WTjXhO1Siwjup1dGo3MTgP
<br />cArLfclApJgZJup0jjzSiCbx2khH2CPh6HUYVxbnAV/GpG20TvV6DNOxaFhLhp5U
<br />7kOSG5FhqPXN6/5XGUMEGGCctf7oqVbc+W/hEFNiq7KjksoeMBavHBpUOpIfxUPc
<br />iWnR9wARAQABiQIfBBgBCAAJBQJUqWmdAhsMAAoJEAGlGykEnWhuRBUP/jI/myUB
<br />kTJ6FZO6yS8HUM0dRXQpmAOx39tzlDzSwkZQGlUa8jxA+1ptv3VZINCBqnFQ8CKz
<br />G+9XMmzL32y5wOySlLozJ0FAipb3d11iFp5nEuNfjx3TThy7DX86NP3NZa6Ecugz
<br />gahmCwd8kdOla2Kq54RNxZ3e62cltXOLtPJvutW3gvaC7qZ2vxi5Cq9E4PK+gmWa
<br />qF1IwqfyUkAOTQ+qHDEkRfTErYZcTmU6+RqEygu+isbfwftWXXmd/c5rmnxS+Rpy
<br />pC44MDAh7BuEADlzjJiTQhaWZ6cfw/hwQBJT2Uqmdw6Nx+RRJeKzc8KxeFt0iRYU
<br />UzQvwE5LjcqECtnZ6bAPwB2Dw8QODLHxmLez+1Mb4lfsZdU8pXtdpxZwFwdRn2rD
<br />M94HT/nbuM9QyWQpAvEowRedArGFKmPosA3gWqrm2Nv2OWcnRvw1Hik2K2MVUlpu
<br />pBMNY5pwouEAH01GUT8cgKrtPk73QfPSiSiyhj+qV4IydU8WlOUUFiMP3exqADFd
<br />M4HFiXf7NWmOfijDdH705V+avDrDNMZTjp/NyohLePLZlsZt/xmk5X+tyXKfHMf3
<br />PmOtA0oOfcDuX6etVcZKMURVn12EX5RinfEcYSSB55TIbX9TlJ42Rq3zyhC/jsLJ
<br />glMDvKufhzEH54q53SEJULMmWz4wm11QL/8FuQINBFSpapIBEACYlYfvMcnRuVRs
<br />p36nc66LeKKEasT9ZzDypN2V+upHAVA+9oL5NzdfwWQ90LFN5vEl/qqhwWrssDlK
<br />D5u6O+6T/cTIZzBPgYEUCviBZoVn+zgVe5aHPBslN618YemmXlzrCD2I5wYaf5Km
<br />l2gIlirGX7yS1JbbptMZQp7RF942Ucn/UfwUjWcRCfnQJSjQsPBrn/buFK0uV6s3
<br />obquUuCrSThePja6czXswNCguzc4RN8zboDf+w5uO+tia7d3U7mo59mahCaqOYnH
<br />jTMziWiM1xBOejB6FbpKa9f1503Dai+kUhvHpN7et6KInqLy8BkAEyq3UoLhb7Ex
<br />nSF7kXBhJi+Nz67GVP6qoDSOMuO/pmNHT6l+kIS5/ZJ46/diZd+zFmbqVLN1UkDS
<br />YldPgmAQeDboMe1Y0d4C1gsz1HENQctbdlvXzLIqQymFgXS0vWUa+eq5BLAaRtcm
<br />SQlwuVxeir0+2Ueo5J4NsoJjeMc6yluroUgLfjKx+gvd5/ihb3SCdWK0bxTNbdFc
<br />U1ubQPEzyIUE8kjqnRSvwQBBTG42lQUlBB2q5twa2ojreFt5sZodw8cFrct+mc1A
<br />3chciuTq/vWmOwxHmL1qB0ce2a3A/rkWku0ZqEpV6NiYt8mXqb1CvHj1ehg3wzpw
<br />3ECvKgHsGa6aIq2k8j9GgQHjGSgiSwARAQABiQIfBBgBCAAJBQJUqWqSAhsMAAoJ
<br />EAGlGykEnWhuC8UP/2Tc949znbMri4UXkOZbiqgsB2fn1ir6T0JGNlSTZS617we+
<br />q+id1df3EuHln2cRXlDuxq8aA1Li9H1jhBSFSo5FeFe+yASZoM9f0roqPUFzkc1c
<br />rFclJN8OqhUF9GTymJA596LkxaPsnSMLZfo8xV6LXanpNDCxEAvnJ2xpOyJs+4YU
<br />ysSRsFDdJyA6iEFQLqXW1kYBZZrCSak5oEIlf82ux0YhtC8HtgY+N60l4mQJ7uzV
<br />w+2/ZziK4tV2HFO1fOs2OIi+3Whdt0pSoCtbclTQwWvbJBHl0fRdOTVyrxC47Sxs
<br />hvewX2gNKef9c74BI1gqW13XQSkKsarxco6g6/QOtel+Gob4Mv/pHqrYXt1Y49nw
<br />rAEumXY6pKl84ZSduTJIFTDR/GxYxGMXPl8bLMrxGO3Yp9Ke9MCjHqFRCXjMOPPo
<br />LaZmgp+QhZ5yrH11nInD/cBbAFJ8CvCYyw8+eB0b5z1IJFVNyPXDHXFtZGyWYaAE
<br />+fAzX7WIPgQHSH8QAmsCe2A7x12y7mXpbKpvXOSE8LBuIPlQusAGx7jIuQz9cqpL
<br />6ruMWf9B8XCqOv+GebBoun2qBJctsWg/FwonVN5rmOP5ySox6+Ka7bX4UzvkcCl1
<br />7yKD74kH7owgpbIaHvoFYc03OH5KlCmczERlX/wSeQVadx4AYo8lZa/IzyAS
<br />=axHK
<br />-----END PGP PUBLIC KEY BLOCK-----      
 </font>";
	
	//drozas: The font size is an ugly hack to avoid dealing with divitis
	$items = array(		array(
								"PGP", 
								"PGP (Pretty Good Privacy) \"is a data encryption and decryption computer program that provides cryptographic privacy and authentication for data communication. PGP is often used for signing, encrypting, and decrypting texts, e-mails, files, directories, and whole disk partitions and to increase the security of e-mail communications.\" [Pretty Good Privacy. (n.d.). In Wikipedia. Retrieved January 3, 2015, from  <a href=\"http://en.wikipedia.org/wiki/Pretty_Good_Privacy\">http://en.wikipedia.org/wiki/Pretty_Good_Privacy</a>]. <br /> Press <a href=\"./pk/drozas_public.key\" target=\"_blank\">here</a> to download my public key, or copy and paste it from below.",
								"PGP",
								"PGP (Pretty Good Privacy) \"es un programa desarrollado por Phil Zimmermann y cuya finalidad es proteger la información distribuida a través de Internet mediante el uso de criptografía de clave pública, así como facilitar la autenticación de documentos gracias a firmas digitales.\" [Pretty Good Privacy. (n.d.). En Wikipedia. Accedido el 3 de enero de 2015, desde <a href=\"http://es.wikipedia.org/wiki/Pretty_Good_Privacy\">http://es.wikipedia.org/wiki/Pretty_Good_Privacy</a>]. <br /> Pincha <a href=\"./pk/drozas_public.key\" target=\"_blank\">aquí</a> para descargar mi clave pública, o copia y pégala desde la sección inferior."),
								array("My public key", $public_key
                                  ,"My clave pública",$public_key),
                                );

	print_header($_SESSION["lang"]);
	print_menu($_SESSION["lang"]);
	print_news($_SESSION["lang"]);
	foreach ( $items as $key => $item ) 
		print_item($_SESSION["lang"], $item);
    
	print_footer();	
?>	
