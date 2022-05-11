<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
		<script>hljs.initHighlightingOnLoad();</script>
        <title>MySQL</title>
    </head>

    <body>

    	<?php include("structure/header.php"); ?>

    	<div id="columns">

    	<div class="column_nav">

    		<?php include("structure/nav.php"); ?>

		</div>


		<div class="column_front">
       
       	 	<section id="conteneur">

    			<div class="element_1">

    				
    				<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913655-travaillez-avec-une-base-de-donnees#/id/r-2174664" target="_blank">PHP et MySQL : </a></h1>

    				<p>
    					PHP fait l'intermédiaire entre vous et MySQL. On devra demander à PHP : "Va dire à MySQL de faire ceci".
    				</p>

    				<img src='../images/PHPMySQL.png' alt='Schéma entre PHP et MySQL' />

    				<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913655-travaillez-avec-une-base-de-donnees#/id/r-913633" target="blank">Structurez votre base de données</a></h1>

    				<p>
    					<ul>
    						<li>L'armoire est appelée <strong>"la base"</strong> dans le langage SQL. C'est le gros meuble dans lequel les secrétaires ont l'habitude de classer les informations.</li>
    						<li>Dans une armoire, il y a plusieurs tiroirs. Un tiroir, en SQL, c'est ce qu'on appelle <strong>"une table"</strong>. Chaque tiroir contient des données différentes. Par exemple, on peut imaginer un tiroir qui contient les pseudonymes et informations sur vos visiteurs, un autre qui contient les messages postés sur votre forum, etc.</li>
    						<li>Mais que contient une table ? C'est là que sont enregistrées les données, sous la forme d'un tableau. Dans ce tableau, les colonnes sont appelées des <strong>"champs"</strong>, et les lignes sont appelées des <strong>"entrées"</strong>.</li>
    					</ul>
    					Par exemple, le tableau suivant vous montre à quoi peut ressembler le contenu d'une table appelée « Utilisateurs » :<br/>
    					<table>
    						<caption>Exemple d'une table</caption>
    						<tr>
    							<td>Number</td>
    							<td>Full name</td>
    							<td>Email</td>
    							<td>Age</td>
    							<td>Password</td>
    						</tr>
    						<tr>
    							<td>1</td>
    							<td>Mathieu Nebra</td>
    							<td>mathieu.nebra@gmail.com</td>
    							<td>34</td>
    							<td>P4ssw0rd</td>
    						</tr>
    						<tr>
    							<td>2</td>
    							<td>Adrien J</td>
    							<td>adrien.j@gmail.com</td>
    							<td>32</td>
    							<td>Adr1en</td>
    						</tr>
    						<tr>
    							<td>...</td>
    							<td>...</td>
    							<td>...</td>
    							<td>...</td>
    							<td>...</td>
    						</tr>
    					</table>
    					La base de données contient plusieurs tables (on peut en mettre autant que l'on veut à l'intérieur). Chaque table est en fait un tableau où les colonnes sont appelées champs et où les lignes sont appelées entrées.<br/>
    					Pour vous donner quelques exemples concrets, voici le nom des tables que vous allez devoir créer pour compléter votre site de partage de recettes :
    					<ul>
    						<li>users : stocke tous les comptes utilisateur de votre site ;</li>
    						<li>recipes : stocke toutes les recettes de votre site ;</li>
    						<li>comments : stocke tous les commentaires liés aux recettes.</li>
    					</ul>

    					Ces fichiers sont quelque part sur votre disque dur, mais il ne faut jamais les ouvrir et encore moins les modifier directement. Il faut toujours parler avec MySQL qui va se charger d'extraire et de modifier les informations dans ces fichiers. Chaque SGBD a sa propre façon d'enregistrer les données, mais aucun d'eux ne peut y échapper : pour que les données restent enregistrées, il faut les stocker dans des fichiers sur le disque dur. Par exemple, avec MySQL sous Windows, si vous utilisez WAMP, vous devriez trouver les fichiers où sont stockées les informations dans  <code class="line_code">C:\wamp\mysql\data</code>.

    					<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913893-mettez-en-place-une-base-de-donnees-avec-phpmyadmin#/id/r-7455696" target="blank">Mettre en place une base de données avec phpMyAdmin</a></h1>

    					<p>phpMyAdmin est livré avec MAMP et XAMPP. Voir vidéo dans <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913893-mettez-en-place-une-base-de-donnees-avec-phpmyadmin#/id/video_Player_2" target="blank">le lien</a></p>

    					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913893-mettez-en-place-une-base-de-donnees-avec-phpmyadmin#/id/r-6923863" target="blank">Les types de champs MySQL</a></h2>

    					<p>
    						MySQL propose une quantité très importante de types de données, mais dans la pratique, vous n'aurez besoin de jongler qu'entre les quatre types de données suivants :
    						<ul>
    							<li><code class="line_code">INT</code> : nombre entier ;</li>
    							<li><code class="line_code">VARCHAR</code> : texte court (entre 1 et 255 caractères) ;</li>
    							<li><code class="line_code">TEXT</code> : Texte long (roman) ;</li>
    							<li><code class="line_code">DATE</code> : date (jour, mois, année) ;</li>
    						</ul>
    						Toute table doit posséder un champ qui joue le rôle de clé primaire. La clé primaire permet d'identifier de manière unique une entrée dans la table. En général, on utilise le champ id comme clé primaire.

    						<div class="em">Prenez le réflexe de créer à chaque fois ce champ « id » en lui donnant l'index <code class="line_code">PRIMARY</code>, ce qui aura pour effet d'en faire une clé primaire. Vous en profiterez en général pour cocher la case <code class="line_code">AUTO_INCREMENT</code> pour que ce champ gère lui-même les nouvelles valeurs automatiquement (1, 2, 3, 4…).</div>
    					</p>

    					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913893-mettez-en-place-une-base-de-donnees-avec-phpmyadmin#/id/r-6923889" target="blank">Importez et exportez des données</a></h2>

    					<p>
    						Explorez maintenant l'onglet « Exporter » de phpMyAdmin. C'est ici que vous allez pouvoir récupérer votre base de données sur le disque dur, sous forme de fichier texte .sql  (qui contiendra des tonnes de requêtes SQL). Le fichier que vous allez obtenir grâce à « l'exportation » de phpMyAdmin, c'est un fichier qui dit à MySQL comment recréer votre base de données (avec des requêtes en langage SQL). Et ce fichier-là est tout à fait lisible.<br/>
    						On peut s'en servir pour deux choses :
    						<ol>
    							<li><strong>Transmettre votre base de données sur Internet</strong> : pour le moment, votre base de données se trouve sur votre disque dur. Mais lorsque vous voudrez héberger votre site sur Internet, il faudra utiliser la base de données en ligne de votre hébergeur ! Le fichier <code class="line_code">.sql</code> que vous allez générer vous permettra de reconstruire la base de données à l'identique.</li>
    							<li><strong>Faire une copie de sauvegarde de la base de données</strong> : on ne sait jamais, si vous faites une bêtise ou si quelqu'un réussit à détruire toutes les informations sur votre site, vous serez bien content d'avoir une copie de secours sur votre disque dur !</li>
    						</ol>
    					</p>

    					<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-7471362" target="blank">Accéder aux donnée en PHP avec PDO</a></h1>

    					<p>
    						Pour pouvoir travailler avec la base de données en PHP, il faut d'abord s'y connecter. Il va donc falloir que PHP s'authentifie : on dit qu'il établit une connexion avec MySQL. Une fois que la connexion sera établie, vous pourrez faire toutes les opérations que vous voudrez sur votre base de données !
    					</p>

    					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-2175040" target="blank">Vérifiez que PDO est bien activé (voir lien)</a></h2>


    				
 	
    		</section>

    		<footer>

    		</footer>

		</div>

    	<div class="column_reseaux">
    		<div id="navright">
                Menu
            </div>

        </div>

    </div>
					
					<script src="../js/navright.js"></script>

    	</div>

    </div>

    </body>
</html>