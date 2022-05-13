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

    				
    				<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913655-travaillez-avec-une-base-de-donnees#/id/r-2174664" target="_blank">PHP et MySQL</a></h1>

    				<p>
    					PHP fait l'intermédiaire entre vous et MySQL. On devra demander à PHP : "Va dire à MySQL de faire ceci".
    				</p>

    				<img src="../images/PHPMySQL.png" alt="Schéma entre PHP et MySQL"/>

    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913655-travaillez-avec-une-base-de-donnees#/id/r-913633" target="blank">Structurez votre base de données</a></h2>

    				<p>
    					<ul>
    						<li>L'armoire est appelée <strong>"la base"</strong> dans le langage SQL. C'est le gros meuble dans lequel les secrétaires ont l'habitude de classer les informations.</li>
    						<li>Dans une armoire, il y a plusieurs tiroirs. Un tiroir, en SQL, c'est ce qu'on appelle <strong>"une table"</strong>. Chaque tiroir contient des données différentes. Par exemple, on peut imaginer un tiroir qui contient les pseudonymes et informations sur vos visiteurs, un autre qui contient les messages postés sur votre forum, etc.</li>
    						<li>Mais que contient une table ? C'est là que sont enregistrées les données, sous la forme d'un tableau. Dans ce tableau, les colonnes sont appelées des <strong>"champs"</strong>, et les lignes sont appelées des <strong>"entrées"</strong>.</li>
    					</ul>
    					Par exemple, le tableau suivant vous montre à quoi peut ressembler le contenu d'une table appelée « Utilisateurs » :
					</p>
						<figure>
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
						</figure>

						<p>
    					La base de données contient plusieurs tables (on peut en mettre autant que l'on veut à l'intérieur). Chaque table est en fait un tableau où les colonnes sont appelées champs et où les lignes sont appelées entrées.<br/>
    					Pour vous donner quelques exemples concrets, voici le nom des tables que vous allez devoir créer pour compléter votre site de partage de recettes :
    					<ul>
    						<li>users : stocke tous les comptes utilisateur de votre site ;</li>
    						<li>recipes : stocke toutes les recettes de votre site ;</li>
    						<li>comments : stocke tous les commentaires liés aux recettes.</li>
    					</ul>

    					Ces fichiers sont quelque part sur votre disque dur, mais il ne faut jamais les ouvrir et encore moins les modifier directement. Il faut toujours parler avec MySQL qui va se charger d'extraire et de modifier les informations dans ces fichiers. Chaque SGBD a sa propre façon d'enregistrer les données, mais aucun d'eux ne peut y échapper : pour que les données restent enregistrées, il faut les stocker dans des fichiers sur le disque dur. Par exemple, avec MySQL sous Windows, si vous utilisez WAMP, vous devriez trouver les fichiers où sont stockées les informations dans  <code class="line_code">C:\wamp\mysql\data</code>.
						</p>

						<img src="../images/16335991080356_p4c1-2.png"  atl="schéma base de donnée"/>

    					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913893-mettez-en-place-une-base-de-donnees-avec-phpmyadmin#/id/r-7455696" target="blank">Mettre en place une base de données avec phpMyAdmin</a></h2>

    					<p>phpMyAdmin est livré avec MAMP et XAMPP. Voir vidéo dans <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913893-mettez-en-place-une-base-de-donnees-avec-phpmyadmin#/id/video_Player_2" target="blank">le lien</a></p>

    					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913893-mettez-en-place-une-base-de-donnees-avec-phpmyadmin#/id/r-6923863" target="blank">Les types de champs MySQL</a></h3>

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

    					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913893-mettez-en-place-une-base-de-donnees-avec-phpmyadmin#/id/r-6923889" target="blank">Importez et exportez des données</a></h3>

    					<p>
    						Explorez maintenant l'onglet « Exporter » de phpMyAdmin. C'est ici que vous allez pouvoir récupérer votre base de données sur le disque dur, sous forme de fichier texte .sql  (qui contiendra des tonnes de requêtes SQL). Le fichier que vous allez obtenir grâce à « l'exportation » de phpMyAdmin, c'est un fichier qui dit à MySQL comment recréer votre base de données (avec des requêtes en langage SQL). Et ce fichier-là est tout à fait lisible.<br/>
    						On peut s'en servir pour deux choses :
    						<ol>
    							<li><strong>Transmettre votre base de données sur Internet</strong> : pour le moment, votre base de données se trouve sur votre disque dur. Mais lorsque vous voudrez héberger votre site sur Internet, il faudra utiliser la base de données en ligne de votre hébergeur ! Le fichier <code class="line_code">.sql</code> que vous allez générer vous permettra de reconstruire la base de données à l'identique.</li>
    							<li><strong>Faire une copie de sauvegarde de la base de données</strong> : on ne sait jamais, si vous faites une bêtise ou si quelqu'un réussit à détruire toutes les informations sur votre site, vous serez bien content d'avoir une copie de secours sur votre disque dur !</li>
    						</ol>
    					</p>

    					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-7471362" target="blank">Accéder aux donnée en PHP avec PDO</a></h3>

    					<p>
    						Pour pouvoir travailler avec la base de données en PHP, il faut d'abord s'y connecter. Il va donc falloir que PHP s'authentifie : on dit qu'il établit une connexion avec MySQL. Une fois que la connexion sera établie, vous pourrez faire toutes les opérations que vous voudrez sur votre base de données !
    					</p>
						<p>Pour se connecter à une base de données MySQL, vous allez devoir utiliser une extension PHP appelée PDO ("PHP Data Objects"). Cette extension est fournie avec PHP (en français, "les fonctions PDO sont à votre disposition"), mais parfois il vous faudra activer l'extension.</p>

    					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-2175040" target="blank">Vérifiez que PDO est bien activé (voir lien)</a></h3>

						<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-2175074" target="blank">Connectez PHP à MySQL avec PDO</a></h3>

						<p>Maintenant que nous sommes certains que PDO est activé, nous pouvons nous connecter à MySQL. Nous allons avoir besoin de quatre renseignements :
							<ul>
								<li><strong>Le nom de l'hôte</strong> : c'est l'adresse IP de l'ordinateur où MySQL est installé. Le plus souvent, MySQL est installé sur le même ordinateur que PHP : dans ce cas, mettez la valeur <code class="line_code">localhost</code>. </li>
								<li><strong>La base</strong> : c'est le nom de la base de données à laquelle vous voulez vous connecter. Dans notre cas, la base s'appelle <code class="line_code">my_recipes</code>. Vous l'avez créée avec phpMyAdmin dans le chapitre précédent.</li>
								<li><strong>L'identifiant</strong> et <strong>le mot de passe</strong> : ils permettent de vous identifier. Renseignez-vous auprès de votre hébergeur pour les connaître (Sur MAMP, la valeur de l'identifiant et du mot de passe est la même : root).</li>
							</ul>
							Voici donc l'instruction PDO pour vous connecter à votre base my_recipes :
						</p>

						<figure class="block_code">
    						<pre><code>
&lt?php
// Souvent on identifie cet objet par la variable $conn ou $db
$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=my_recipes;charset=utf8',
    'root',
    'root',
	[PDO::ATTR_ERRMODE =&gt PDO::ERRMODE_EXCEPTION], //active une meilleure gestion des erreurs
);
?&gt
							</code></pre>
						</figure>

						<p>Lorsque votre site sera en ligne, vous aurez sûrement un nom d'hôte différent, ainsi qu'un identifiant et un mot de passe, comme ceci :</p>
						<figure class="block_code">
    						<pre><code>
&lt?php
$db = new PDO('mysql:host=sql.hebergeur.com;dbname=mabase;charset=utf8', 'pierre.durand', 's3cr3t');
?&gt
							</code></pre>
						</figure>
						<div class="em">Le premier paramètre (qui commence par mysql  ) s'appelle le DSN : Data Source Name. C'est généralement le seul qui change en fonction du type de base de données auquel on se connecte.</div>

						<h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-2175084" target="blank">Testez la présence d'erreurs</a></h4>

						<p>Si vous avez renseigné les bonnes informations, rien ne devrait s'afficher à l'écran. Toutefois, s'il y a une erreur (vous vous êtes trompé de mot de passe ou de nom de base de données, par exemple), PHP risque d'afficher toute la ligne qui pose l'erreur, ce qui inclut le mot de passe !<br/>
						En cas d'erreur, PDO renvoie ce qu'on appelle une exception, qui permet de « capturer » l'erreur :</p>

						<figure class="block_code">
    						<pre><code>
&lt?php
try		
{
	$db = new PDO('mysql:host=localhost;dbname=my_recipes;charset=utf8', 'root', 'root');
}
catch (Exception $e)		
{
        die('Erreur : ' . $e-&gtgetMessage());
}
?&gt	
							</code></pre>
						</figure>

						<p>
							<ul>
								<li>PHP essaie d'exécuter les instructions à l'intérieur du bloc try.</li>
								<li>S'il y a une erreur, il rentre dans le bloc catch et fait ce qu'on lui demande (ici, on arrête l'exécution de la page en affichant un message décrivant l'erreur).</li>
								<li>Si au contraire tout se passe bien, PHP poursuit l'exécution du code et ne lit pas ce qu'il y a dans le bloc catch. Votre page PHP ne devrait donc rien afficher pour le moment.</li>
							</ul>
						</p>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-914147" target="blank">Effectuez une première requête SQL</a></h2>

						<p>Voici la première requête SQL que nous allons utiliser :</p>

						<figure class="block_code">
    						<pre><code>
SELECT * FROM recipes	
							</code></pre>
						</figure>

						<p>« Prendre tout ce qu'il y a dans la table recipes ».
							<ul>
								<li><code class="line_code">SELECT</code> : en langage SQL, le premier mot indique quel type d'opération doit effectuer MySQL.Ce mot-clé demande à MySQL d'afficher ce que contient une table.</li>
								<li><code class="line_code">*</code> : après le <code class="line_code">SELECT</code>, on doit indiquer quels champs MySQL doit récupérer dans la table. Si on n'est intéressé que par les champs « nom » et « possesseur », il faudra taper : <code class="line_code">SELECT nom, possesseur FROM recipes</code> ; si vous voulez prendre tous les champs, tapez <code class="line_code">*</code>.</li>
								<li><code class="line_code">FROM</code> : c'est un mot de liaison qui se traduit par « dans ». <code class="line_code">FROM</code> fait la liaison entre le nom des champs et le nom de la table.</li>
								<li><code class="line_code">recipes</code> : c'est le nom de la table dans laquelle il faut aller piocher.</li>
							</ul>
							Effectuons la requête  à l'aide de l'objet PDO :
						</p>

						<figure class="block_code">
    						<pre><code>
&lt?php
$recipesStatement = $db-&gtprepare('SELECT * FROM recipes');
?&gt	
							</code></pre>
						</figure>
						<p>Le problème, c'est que $recipesStatement contient quelque chose d'inexploitable directement : un objet PDOStatement. Cet objet va contenir la requête SQL que nous devons exécuter, et par la suite, les informations récupérées en base de données.</p>
						<p>Pour récupérer les données, demandez à cet objet d'exécuter la requête SQL et de récupérer toutes les données dans un format "exploitable" pour vous, c'est-à-dire sous forme d'un tableau PHP.</p>

						<figure class="block_code">
    						<pre><code>
&lt?php
$recipesStatement-&gtexecute();
$recipes = $recipesStatement-&gtfetchAll();		//fetch signifie "va chercher" en anglais
?&gt	
							</code></pre>
						</figure>

						<p>Une fois qu'on a récupéré les données sous forme d'un tableau PHP, on en revient à ce que vous connaissez déjà !</p>

						<p>
							Pour résumer :
						</p>

						<img src="../images/6948946.png" alt=" résumer code complet "/>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-914221" target="blank">Filtrez vos données</a></h2>

						<p>
						Vous allez voir qu'en modifiant vos requêtes SQL, il est possible de filtrer et trier très facilement vos données. Vous allez ici découvrir les mots-clés suivants du langage SQL :
							<ul>
								<li><code class="line_code">WHERE</code> : défini des conditions sur les colonnes</li>
								<li><code class="line_code">ORDER BY</code> : 'colonne' donne par defaut dans l'ordre alphabetique</li>
								<li><code class="line_code">LIMIT</code> : limite le nombre d'élément par id (option <code class="line_code">OFFSET</code> permet de partir d'un id précis).</li>
							</ul>
						</p>

						<figure class="block_code">
    						<pre><code>
&lt?php
$sqlQuery = 'SELECT * FROM recipes WHERE is_enabled = TRUE';	
							</code></pre>
						</figure>

						<p>
							Traduction : « Sélectionner tous les champs de la table recipes lorsque le champ is_enabled est égal à vrai ».
						</p>

						<div class="em">
							Il faut utiliser les mots-clés dans l'ordre que j'ai donné : <code class="line_code">WHERE</code> puis <code class="line_code">ORDER BY</code> puis <code class="line_code">LIMIT</code> , sinon MySQL ne comprendra pas votre requête.
						</div>

						<p>Avant d'écrire le code PHP, vous pouvez déjà vérifier que la requête SQL est correcte en la testant dans l'onglet "SQL" de phpMyAdmin, comme je viens de vous le montrer.</p>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-914259" target="blank">Construisez des requêtes en fonction de variables</a></h2>

						<div class="em">
							On ne concatène JAMAIS une requête SQL pour passer des variables, au risque de créer des injections SQL !
						</div>

						<p>
							On utilise des marqueurs qui sont des identifiants reconnus par PDO pour être remplacés lors de la préparation de la requête par les variables PHP :
						</p>

						<figure class="block_code">
    						<pre><code>
&lt?php
$sqlQuery = 'SELECT * FROM recipes WHERE author = :author AND is_enabled = :is_enabled';

$db-&gtprepare($sqlQuery);
$recipes = $db-&gtexecute([
    'author' =&gt 'mathieu.nebra@exemple.com',
    'is_enabled' =&gt true,
]);	
							</code></pre>
						</figure>


						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914508-ajoutez-modifiez-et-supprimez-des-recettes#/id/r-2175533" target="blank">Ajouter une recette : l'instruction <code class="line_code">INSERT INTO</code></a></h2>

						<figure class="block_code">
    						<pre><code>
&lt?php
$sqlQuery = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';

							</code></pre>
						</figure>

						<p>INSERT INTO &ltTable&gt (&ltChamps dans lesquels on veut placer les infos&gt) VALUES (&ltValeurs à insérer dans le même ordre&gt)</p>

						<img src="../images/645894.png" alt="insertion PHP"/>

						<p>Généralement, on récupèrera des variables de <code class="line_code">$_POST</code>  (issues d'un formulaire) pour insérer une entrée dans la base de données :
						<ul>
							<li>On créer une page create.php qui va contenir le formulaire dans lequel on va appeller une autre page PHP : post_create.php</li>
						</ul></p>

						<img src="../images/564646984.png" alt="code create.php"/>

						<p>
							<ul>
								<li>Sur la page post_create.php on récupère les variables de <code class="line_code">$_POST</code> qu'on insert en base comme suit :</li>
							</ul>
						</p>

						<img src="../images/4864.png" alt="cpde post_create.php"/>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914508-ajoutez-modifiez-et-supprimez-des-recettes#/id/r-914477" target="blank">Editer une recette : l'instruction <code class="line_code">UPDATE</code></a></h2>

						<p>
						En imaginant qu'on fournit un formulaire d'édition et que l'on autorise les utilisateurs à éditer les champs title et recipe , voici la requête SQL correspondante :
						</p>

						<figure class="block_code">
    						<pre><code>
UPDATE recipes SET title = :title, recipe = :recipe WHERE recipe_id = :id
							</code></pre>
						</figure>

						<p>
							<ul>
								<li><code class="line_code">UPDATE</code> permet de dire qu'on va modifier une entrée.</li>
								<li>Ensuite, le nom de la table ( recipes ).</li>
								<li>Le mot-clé <code class="line_code">SET</code> sépare le nom de la table de la liste des champs à modifier.</li>
								<li>Viennent ensuite les champs qu'il faut modifier, séparés par des virgules. </li>
								<li>Enfin, le mot-clé <code class="line_code">WHERE</code> est tout simplement indispensable. Il nous permet de dire à MySQL quelle entrée il doit modifier.</li>
							</ul>
						</p>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914508-ajoutez-modifiez-et-supprimez-des-recettes#/id/r-914507" target="blank">Editer une recette : l'instruction <code class="line_code">UPDATE</code></a></h2>


						<p>
							Rapide et simple à utiliser, elle est quand même un poil dangereuse : après suppression, il n'y a aucun moyen de récupérer les données, alors faites bien attention !
						</p>
						<figure class="block_code">
    						<pre><code>
DELETE FROM recipes WHERE recipe_id=:id
							</code></pre>
						</figure>

						<div class="em">
							Si vous oubliez le <code class="line_code">WHERE</code>, toutes les entrées seront supprimées. Cela équivaut à vider la table.
						</div>

						<p>
							<a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914508-ajoutez-modifiez-et-supprimez-des-recettes#/id/video_Player_3" target="blank">Voir vidéo</a> pour plus de détail : <br/>
							Pour faire un bouton supprimer une recette, on passera toujours par un formulaire pour envoyer la requete en POST
						</p>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914508-ajoutez-modifiez-et-supprimez-des-recettes#/id/r-4428801" target="blank">Traitez les erreurs SQL</a></h2>

						<p>
							Repérez la requête qui selon vous plante, et forcez l'affichage de l'erreur s'il y en a une, comme ceci :
						</p>

						<figure class="block_code">
    						<pre><code>
&lt?php
$deleteRecipeStatement = $db-&gtprepare('DELETE FROM recipes WHERE recipe_id = :id');
$deleteRecipeStatement-&gtexecute([
    'id' =&gt $id,
]) or die(print_r($db-&gterrorInfo()));
							</code></pre>
						</figure>

						<p>
							Si la requête fonctionne, aucune erreur ne sera affichée. Si en revanche la requête plante, PHP arrêtera de générer la page et vous affichera l'erreur donnée par MySQL…
						</p>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/7372786-ajoutez-des-commentaires-grace-aux-jointures-sql#/id/r-7373184" target="blank">Les jointures</a></h2>

						<p>
							Considérons deux tables :
							<ul>
								<li><code class="line_code">comments</code></li>
								<li><code class="line_code">users</code></li>
							</ul>
							Les informations sont séparées dans des tables différentes, et c'est bien. Cependant, lorsqu'on récupère la liste des commentaires, si on souhaite obtenir le nom des auteurs, il faut adapter la requête pour récupérer aussi les informations issues de la table <code class="line_code">users</code>.
						</p>
						<p>
							Pour cela, on doit faire une <srtong>jointure</srtong>.
						</p>
						<p>
							Il existe plusieurs types de jointures, qui nous permettent de choisir exactement les données que l'on veut récupérer. Je vous propose d'en découvrir deux, les plus importantes :
							<ol>
								<li><strong>Les jointures internes</strong> : elles ne sélectionnent que les données qui ont une correspondance entre les deux tables.</li>
								<li><strong>Les jointures externes</strong> : elles sélectionnent toutes les données, même si certaines n'ont pas de correspondance dans l'autre table. (sans correspondance cela prends la valeur <code class="line_code">NULL</code></li>
							</ol>
						</p>

						<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/7372786-ajoutez-des-commentaires-grace-aux-jointures-sql#/id/r-7373279" target="blank">Les jointures internes</a></h3>


						<figure class="block_code">
    						<pre><code>
	# Liste des noms et commentaires associés
SELECT u.full_name, c.comment
FROM users u
INNER JOIN comments c
ON u.user_id = c.user_id
							</code></pre>
						</figure>

						<p>
						Cette fois, on récupère les données depuis une table principale (ici, <code class="line_code">users</code> ) et on fait une jointure interne ( <code class="line_code">INNER JOIN </code> ) avec une autre table ( <code class="line_code">comments </code> ).
						</p>

						<p>
						La liaison entre les champs est faite dans la clause <code class="line_code">ON</code> un peu plus loin.
						</p>

						<p>
							<ul>
								<li>filtrer ( <code class="line_code">WHERE</code>  ),</li>
								<li>ordonner (<code class="line_code"> ORDER BY </code> )</li>
								<li>ou limiter les résultats ( <code class="line_code">LIMIT</code> ),</li>
							</ul>
							… vous devez le faire à la fin de la requête.
						</p>

						<img src="../images/jointure interne.png" alt="table jointurne interne"/>

						<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/7372786-ajoutez-des-commentaires-grace-aux-jointures-sql#/id/r-7373496" target="blank">Les jointures externes</a></h3>

						<h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/7372786-ajoutez-des-commentaires-grace-aux-jointures-sql#/id/r-7455896" target="blank"><code class="line_code">LEFT JOIN</code> et <code class="line_code">RIGHT JOIN</code></a></h4>

						<figure class="block_code">
    						<pre><code>
	# Liste des noms et commentaires associés
SELECT u.full_name, c.comment
FROM users u
LEFT JOIN comments c
ON u.user_id = c.user_id
							</code></pre>
						</figure>

						<p>
						users  est appelée la « table de gauche » et comments  la « table de droite ».
						</p>

						<img src="../images/LEFTJOIN.png" alt="LEFT JOIN"/>

						<figure class="block_code">
    						<pre><code>
	# Liste des noms et commentaires associés
SELECT u.full_name, c.comment
FROM users u
RIGHT JOIN comments c
ON u.user_id = c.user_id
							</code></pre>
						</figure>

						<img src="../images/RIGHTJOIN.png" alt="RIGHT JOIN"/>

						<h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/7372786-ajoutez-des-commentaires-grace-aux-jointures-sql#/id/r-7373957" target="blank">Enchainer les jointures</a></h4>

						<figure class="block_code">
    						<pre><code>
							SELECT u.full_name, c.comment, r.title
FROM users u
JOIN comments c
	ON u.user_id = c.user_id
JOIN recipes r
	ON c.recipe_id = r.recipe_id
							</code></pre>
						</figure>
						
						<img src="../images/2JOIN.png" alt="Enchainer les jointures"/>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/915107-allez-plus-loin#/id/r-7456018" target="blank">Les fonctions</a></h2>

						<p>
						Les fonctions SQL peuvent être classées en deux catégories :
						<ol>
							<li><strong>Les fonctions scalaires</strong> : elles agissent sur chaque entrée. Par exemple, vous pouvez transformer en majuscules la valeur de chacune des entrées d'un champ.</li>
							<li><strong>Les fonctions d'agrégat</strong> : lorsque vous utilisez ce type de fonctions, des calculs sont faits sur l'ensemble de la table pour retourner une valeur. Par exemple, calculer la moyenne des prix retourne une valeur : le prix moyen.</li>
						</ol>
						</p>

						<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/915107-allez-plus-loin#/id/r-7456012" target="blank">Les fonctions scalaires</a></h3>

						<p>
							Pour vous montrer comment on utilise les fonctions scalaires SQL, je vais me baser sur la fonction <code class="line_code">DATE_FORMAT()</code> qui permet de convertir un timestamp en date.
						</p>

						<figure class="block_code">
    						<pre><code>
SELECT *, DATE_FORMAT(c.created_at, "%d/%m/%Y") FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1
							</code></pre>
						</figure>

						<p>
						l'aide de cette fonction, nous récupérons directement la date au format jour/mois/année plutôt que les heures/minutes/secondes qui ne nous intéressent pas. La table reste la même. Cela modifie seulement la valeur envoyée à PHP. Cela crée en fait un « champ virtuel » qui n'existe que le temps de la requête. Il est conseillé de donner un nom en utilisant pour cela le mot-clé <code class="line_code">AS</code> :
						</p>

						<figure class="block_code">
    						<pre><code>
SELECT DATE_FORMAT(c.created_at, "%d/%m/%Y") AS comment_date FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1							
							</code></pre>
						</figure>

						<p>Ce champ virtuel est appelé "alias".</p>

						<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/915107-allez-plus-loin#/id/r-7456014" target="blank">Les fonctions d'agrégat</a></h3>

						<p>
						<code class="line_code">ROUND()</code> est une fonction scalaire qui permet d'arrondir une valeur. On récupère donc autant d'entrées qu'il y en avait dans la table. En revanche, une fonction d'agrégat comme <code class="line_code">AVG()</code> renvoie une seule entrée : la valeur moyenne de tous les lignes.
						</p>

						<p>
							Utilisons-la sur le champ <code class="line_code">review</code> qui – pour rappel – permet à l'utilisateur d'évaluer une recette avec l'identifiant unique  1  :
						</p>

						<figure class="block_code">
    						<pre><code>
SELECT AVG(c.review) as rating FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1								</code></pre>
						</figure>

						<p>
						Mais c'est super moche, on peut pas calculer un arrondi de la moyenne ?
						</p>

						<figure class="block_code">
    						<pre><code>
SELECT ROUND(AVG(c.review),1) as rating FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1
							</code></pre>
						</figure>
										<p>
											<strong>Problème de CSS ici !</strong>
										</p>
						<p>
						Pour afficher cette information en PHP, on pourrait faire comme on en a l'habitude (cela fonctionne). Mais pourquoi s'embêterait-on à faire une boucle, étant donné qu'on sait qu'on ne va récupérer qu'une seule entrée, puisqu'on utilise une fonction d'agrégat ?
						</p>

						<figure class="block_code">
    						<pre><code>
&lt?php
$sqlQuery = 'SELECT ROUND(AVG(c.review),1) as rating FROM recipes r 
LEFT JOIN comments c ON r.recipe_id = c.recipe_id WHERE r.recipe_id = 1'; 

// Préparation
$averageRatingStatment = $db-&gtprepare($sqlQuery);

// Exécution
$averageRatingStatment-&gtexecute();

// La fonction fetch est plus performante que fetchAll()
$averageRating = $averageRatingStatment-&gtfetch();	
							</code></pre>
						</figure>	
						<p>
							Ce code est plus simple et plus logique :
							<ol>
								<li>On récupère la première et seule entrée avec fetch()  .</li>
								<li>Et on affiche ce qu'elle contient. Inutile de le faire dans une boucle, étant donné qu'il n'y a pas de seconde entrée.</li>
							</ol>
						</p>

						<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/915107-allez-plus-loin#/id/r-7456017" target="blank">Regroupez des données avec <code class="line_code">GROUP BY</code></a></h3>

						<p>
							Ce qui pourrait avoir du sens, ce serait de demander le note moyenne des commentaires pour chaque recette <br/>
							Pour faire cela, on doit utiliser un nouveau mot-clé : <code class="line_code">GROUP BY</code> qui signifie « grouper par ». On utilise cette clause en combinaison d'une fonction d'agrégat (comme <code class="line_code">AVG</code> ) pour obtenir des informations intéressantes sur des groupes de données.
						</p>

						<figure class="block_code">
    						<pre><code>
SELECT AVG(review) AS rating, recipe_id FROM comments GROUP BY recipe_id										
							</code></pre>
						</figure>

						<p>
							Il faut utiliser <code class="line_code">GROUP BY</code> en même temps qu'une fonction d'agrégat, sinon il ne sert à rien. Ici, on récupère la note moyenne des commentaires, que l'on regroupe ensuite par recette. Par conséquent, on obtiendra la liste des recettes de la table et la note moyenne des commentaires.
						</p>

						<p>
							<code class="line_code">HAVING</code> est un peu l'équivalent de <code class="line_code">WHERE</code>, mais il agit sur les données une fois qu'elles ont été regroupées. C'est donc une façon de filtrer les données à la fin des opérations.
						</p>

						<figure class="block_code">
    						<pre><code>
SELECT AVG(review) AS rating, recipe_id FROM comments GROUP BY recipe_id HAVING rating &gt= 3										
							</code></pre>
						</figure>

						<p>
							Avec cette requête, on récupère seulement les recettes dont la note moyenne est supérieure ou égale à 3.
						</p>

						<p>
						<code class="line_code">HAVING</code> ne doit s'utiliser que sur le résultat d'une fonction d'agrégat. Voilà pourquoi on l'utilise ici sur <code class="line_code">rating</code> et non sur <code class="line_code">recipe_id</code>.
						</p>

						<p>
							<ul>
								<li><code class="line_code">WHERE</code> agit en premier, avant le groupement des données ; </li>
								<li><code class="line_code">HAVING</code> agit en second, après le groupement des données.</li>
							</ul>
						</p>

						<figure class="block_code">
    						<pre><code>
SELECT AVG(review) AS rating, recipe_id FROM comments WHERE user_id = 1 GROUP BY recipe_id HAVING rating &gt= 2						
							</code></pre>
						</figure>

						<p>
						Ici, on demande à récupérer la note moyenne par recette de Mickaël ( <code class="line_code">WHERE</code> ), dont la valeur moyenne est supérieure ou égale à 2 ( <code class="line_code">HAVING</code> ).
						</p>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7152681-installez-le-sgbd-mysql#/id/r-7152721" target="blank">Installer MySQL sur windows</a></h1>

						<p>
							Rendez-vous sur <a href="https://dev.mysql.com/downloads/installer/" target="blank">https://dev.mysql.com/downloads/installer/ . Je vous conseille de télécharger le deuxième programme (la version “community”), qui dispose d’options supplémentaires par rapport au premier (la version “web”). </a>
						</p>
						<p>
							Pour lancer MySQL sur Windows, double-cliquez sur la console MySQL. Celle-ci doit avoir apparu dans vos programmes, suite à l’installation précédente.
						</p>
						<p>
							Pour créer le mot de passe “root”, utilisez la commande <code class="line_code">mysqladmin -u root password 'votresupermotdepassetrescomplique' </code>
						</p>
						<p>
						En informatique, et notamment dans le monde des bases de données, l’utilisateur dit “root” (ou racine) est un utilisateur qui a tous les droits (création, suppression, mise à jour). C’est celui qu’on utilise pour installer des logiciels sur notre machine. Mais attention à ne jamais l’utiliser en production ! En effet, il serait très dangereux qu’un utilisateur puisse l’utiliser, car il obtiendrait l’accès à toutes nos données. “Utiliser en production” désigne l’utilisation de votre base par votre application, depuis un serveur. Alors que “l’utilisation en local” signifie l’utilisation sur votre ordinateur, à des fins de développement uniquement.
						</p>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142232-creez-votre-base-de-donnees-bdd#/id/r-7142237" target="blank">Créez votre BDD avec <code class="line_code">CREATE DATABASE</code></a></h1>

						<p>
						Une application complexe peut être reliée à plusieurs BDD à la fois, et ce, pour plusieurs raisons. Par exemple, Facebook utilise plusieurs BDD pour des besoins spécifiques (certaines gèrent mieux la recherche, les autres le stockage…), mais surtout pour des raisons de taille de la donnée ! 
						</p>
						
						<p>
						Attention lorsqu’on nomme les bases de données ! Tout comme beaucoup de “noms” en informatique (variables, objets, identifiants…), ceux-ci ne doivent pas contenir de caractères spéciaux ou d’espaces. Il est même recommandé de n’utiliser que des caractères minuscules.
						</p>

						<p>
						Pour activer MySQL dans votre terminal, il va falloir exécuter la commande  <code class="line_code">mysql -u root -p</code>. Cette commande signale que vous souhaitez lancer MySQL, avec l’utilisateur root en saisissant le mot de passe.
						</p>

						<p>
						Pour créer une base, on utilise la commande <code class="line_code">CREATE DATABASE nomdelabase;</code>
						</p>

						<p>
						SQL vous indique que la commande a fonctionné en répondant <code class="line_code">Query OK</code>. 
						</p>

						<p>
						Pour sélectionner la base que vous venez de créer, utilisez la commande <code class="line_code">USE nomdelabase;</code>
						</p>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142232-creez-votre-base-de-donnees-bdd#/id/r-7142243" target="blank">Créez votre BDD avec <code class="line_code">Créer une table</code></a></h1>

						<figure class="block_code">
    						<pre><code>
							CREATE TABLE utilisateur (

id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,

nom VARCHAR(100),

prenom VARCHAR(100),

email VARCHAR(255) NOT NULL UNIQUE

);
							</code></pre>
						</figure>

						<img src="../images/573e.png" alt="description CERATE TABLE"/>

						<p>
							Il existe aussi :
							<ul>
								<li>FLOAT : nombres décimaux</li>
								<li>BOOLEAN : true or fasle</li>
								<li>DEFAULT  sert à indiquer une valeur par défaut. Utile pour ne pas avoir à spécifier une valeur tout le temps ! exemple : bio BOOLEAN DEFAULT false</li>
								<li>...</li>
							</ul>
						</p>

						<p>
						Pour vérifier que tout ce que vous avez fait fonctionne, rien de plus simple ! On demande à MySQL de nous afficher toutes les tables présentes dans notre base grâce à la commande <code class="line_code">SHOW tables;</code>.
						</p>

						<p>
						On peut même aller encore plus loin en demandant à MySQL de nous afficher le schéma de chaque table grâce à la commande <code class="line_code">SHOW COLUMNS FROM lenomdematable;</code>
						</p>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142248-inserez-des-donnees-dans-votre-bdd#/id/video_Player_1" target="blank">Les opérations CRUD</a></h1>

						<img src="../images/CRUD.png" alt="def CRUD"/>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142248-inserez-des-donnees-dans-votre-bdd#/id/r-7142316" target="blank">Insérez des objets</a></h2>

						<figure class="block_code">
    						<pre><code>
INSERT INTO `utilisateur` (`nom`, `prenom`, `email`)

VALUES

('Durantay', 'Quentin', 'quentin@gmail.com');
							</code></pre>
						</figure>

						<p>
							<ol>
								<li>On indique en SQL qu’on souhaite ajouter un objet avec <code class="line_code">INSERT INT</code>O.</li>
								<li>On écrit ensuite le nom de la table dans laquelle on souhaite ajouter l’objet, ici “utilisateur”.</li>
								<li>On écrit ensuite entre parenthèses la liste des colonnes que l’on va ajouter, ainsi que leur ordre.</li>
								<li>On ajoute le mot clé SQL <code class="line_code">VALUES</code> qui indique qu’on va ensuite déclarer les valeurs que l’on souhaite ajouter.</li>
								<li>On écrit la liste des valeurs de l’objet qu’on souhaite ajouter, dans le même ordre que les colonnes citées en 3.</li>
							</ol>
						</p>

						<p>
							On peut aussi ajouter plusieurs objets à la fois :
						</p>

						<figure class="block_code">
    						<pre><code>
INSERT INTO `utilisateur` (`nom`, `prenom`, `email`)

VALUES

('Doe', 'John', 'john@yahoo.fr'),

('Smith', 'Jane', 'jane@hotmail.com'),

('Dupont', 'Sebastien', 'sebastien@orange.fr'),

('Martin', 'Emilie', 'emilie@gmail.com');
							</code></pre>
						</figure>

						<p>
						Vous vous demandez sûrement pourquoi certaines valeurs sont entre guillemets simples, d’autres entre backticks (`) et certaines sans rien.
						</p>

						<img src="../images/16109607655779_2c1-3_ponctuation_static.png" alt='utilisation guillemets'/>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142258-selectionnez-les-donnees-presentes-dans-votre-bdd#/id/r-7156577" target="blank">Lisez les objets</a></h2>

						<figure class="block_code">
    						<pre><code>
SELECT * FROM utilisateur;
							</code></pre>
						</figure>

						<img src="../images/16109610872927_2c2-1_static.png" alt="la commande SELECT"/>

						<p>
							<ul>
								<li><code class="line_code">SELECT</code>, comme nous l’avons vu, indique à MySQL que nous souhaitons récupérer de la donnée ;</li>
								<li><code class="line_code">*</code> indique que l’on souhaite récupérer toutes les colonnes (ou champs) présents dans cette table (ici : id, nom, prenom et email) ;</li>
								<li><code class="line_code">FROM table</code> permet à MySQL de comprendre depuis quelle table nous souhaitons récupérer de la donnée.</li>
							</ul>
						</p>

						<p>
							Lire quelques colonnes seulement :
						</p>

						<figure class="block_code">
    						<pre><code>
SELECT `nom`, `prenom`, `email` FROM utilisateur;
							</code></pre>
						</figure>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142260-mettez-a-jour-les-donnees-de-votre-bdd#/id/r-7156412" target="blank">Mettez à jour les données</a></h2>

						<figure class="block_code">
    						<pre><code>
UPDATE `utilisateur` SET `email` = 'quentind@gmail.com' WHERE `id` = '1';
							</code></pre>
						</figure>

						<p>
							<ul>
								<li>UPDATE table : Signifie à SQL que vous souhaitez mettre à jour de la donnée dans votre BDD. Vous indiquez aussi la table dans laquelle se trouve(nt) le ou les objets que vous souhaitez modifier.</li>
								<li>SET colonne = valeur : Sert à indiquer à SQL quelles sont la ou les colonnes à modifier, et quelles sont la ou les valeurs qu’elles doivent désormais prendre.</li>
								<li>WHERE colonne = valeur : C’est ce qu’on appelle un filtre. Ils servent à restreindre la commande en cours à un ou des objets répondant à des conditions précises. Ici, on va mettre à jour uniquement l’objet dont l’id est 1, soit le premier utilisateur !</li>
							</ul>
						</p>

						<div class="em">Il est tout à fait possible d’utiliser <code class="line_code">UPDATE</code> sans filtres (sans <code class="line_code">WHERE</code>). Néanmoins, la commande modifierait tous les objets de notre table. C’est très rarement ce que l’on souhaite.</div>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142266-supprimez-des-objets-dans-votre-bdd#/id/r-7156417" target="blank">Supprimez des objets</a></h2>

						<p>
						Admettons qu’un utilisateur souhaite se désinscrire de Foodly. Il faudrait alors le supprimer de votre BDD. Mais comment faire ? 
						</p>

						<div class="em">Attention toutefois, cette commande est très simple à utiliser, parfois trop même ! Une fois la donnée supprimée de votre BDD, impossible de la récupérer ! À utiliser avec parcimonie.</div>


						<figure class="block_code">
    						<pre><code>
DELETE FROM `utilisateur` WHERE `id` = '2';
							</code></pre>
						</figure>

						<div class="em">Là aussi, il vaut mieux utiliser cette commande avecWHEREpour en limiter l’effet. Si vous ne le faites pas, vous risqueriez de supprimer tous les objets d’une table ! Dans notre cas, adieu à nos utilisateurs.</div>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142269-extrayez-des-informations-specifiques-de-votre-bdd#/id/r-7142268" target="blank">Isolez un objet unique avec <code class="line_code">WHERE</code></a></h1>

						<figure class="block_code">
    						<pre><code>
SELECT * FROM aliment WHERE nom = “poire”;
							</code></pre>
						</figure>

						<p>
						Vous pouvez utiliser tous les opérateurs classiques, tels que :
						<ul>
							<li>supérieur à ( > ) ;</li>
							<li>inférieur à ( < ) ;</li>
							<li>supérieur ou égal à (>=) ;</li>
							<li>et inférieur ou égal à (<=).</li>
						</ul>
						</p>

						<figure class="block_code">
    						<pre><code>
SELECT * FROM aliment WHERE calories < 90;
							</code></pre>
						</figure>

						<p>
						Vous pouvez utiliser tous les selecteurs de texte classiques (REGEX), tels que :
						<ul>
							<li>%nom</li>
							<li>..</li>
						</ul>
						</p>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142269-extrayez-des-informations-specifiques-de-votre-bdd#/id/r-7153066" target="blank">Ordonnez les objets récupérés pour chaque requête</a></h1>

						<figure class="block_code">
    						<pre><code>
SELECT * FROM aliment ORDER BY calories ASC;

SELECT * FROM aliment WHERE calories < 90 ORDER BY calories DESC;
							</code></pre>
						</figure>

						<p>
						Ce mot clé vous permet d’ordonner une colonne par ordre croissant (ascending en anglais, d’où le mot clé SQL <code class="line_code">ASC</code>), ou décroissant (descending en anglais, soit le mot clé <code class="line_code">DESC</code>).<br/>
						Cette commande fonctionne aussi avec le texte ! Si vous effectuez un <code class="line_code">ORDER BY</code> sur une colonne de texte, celle-ci sera ordonnée par ordre alphabétique.
						</p>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142269-extrayez-des-informations-specifiques-de-votre-bdd#/id/r-7153066" target="blank">Comptez le nombre d’objets récupérés via une requête</a></h1>

						<figure class="block_code">
    						<pre><code>
SELECT COUNT(*) FROM utilisateur WHERE email LIKE "%gmail.com";
							</code></pre>
						</figure>

						<p>
						MySQL vous affiche le nombre d’objets plutôt que leur contenu. Vous voyez donc combien d’utilisateurs répondent à ce critère.<br/>
						Vous comptez le nombre d’objets, mais vous pouvez aussi restreindre le comptage à une colonne spécifique en écrivant <code class="line_code">COUNT(colonne)</code>. Enfin, vous pouvez aussi compter le nombre d’éléments uniques d’une colonne avec <code class="line_code">COUNT(DISTINCT colonne)</code>.
						</p>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7152961-effectuez-des-operations-et-sauvegardez-vos-requetes#/id/r-7153026" target="blank">Effectuez des opérations sur des données chiffrées</a></h1>

						<img src="../images/16109617725758_P3_operations_static.png" alt="opération sur des objets"/>

						<figure class="block_code">
    						<pre><code>
SELECT MAX(sucre) FROM aliment;
							</code></pre>
						</figure>

						<figure class="block_code">
    						<pre><code>
SELECT AVG(calories) FROM aliment WHERE calories >= 30;
							</code></pre>
						</figure>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7152961-effectuez-des-operations-et-sauvegardez-vos-requetes#/id/r-7153058" target="blank">Sauvegardez vos requêtes</a></h1>

						<p>
						MySQL a un système de “vues” qui permet de créer des tables temporaires à partir d’une commande SQL. Entendez par là que vous allez “sauvegarder” une commande SQL pour ne plus avoir à la réeffectuer à chaque fois !
						</p>

						<figure class="block_code">
    						<pre><code>
CREATE VIEW utilisateurs_gmail_vw AS SELECT * FROM utilisateur WHERE email LIKE "%gmail.com";
							</code></pre>
						</figure>

						<p>
						Je viens de créer la vue “utilisateurs_gmail_vw”. Cette dernière s’utilise désormais comme une table.<br/>
						Ainsi, pour récupérer les utilisateurs avec une adresse Gmail, plus besoin d’écrire ma requête compliquée !<br/>
						Je n’ai plus qu’à écrire :
						</p>

						<figure class="block_code">
    						<pre><code>
SELECT * FROM utilisateurs_gmail_vw;
							</code></pre>
						</figure>

						<div class="em">La convention chez les utilisateurs de SQL est de toujours préfixer le nom d’une vue avec “_vw”, pour la distinguer des “vraies” tables.</div>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142288-modifiez-la-structure-d-un-objet-avec-alter-table#/id/video_Player_1" target="blank">Modifiez la structure d’un objet </a></h1>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142288-modifiez-la-structure-d-un-objet-avec-alter-table#/id/r-7142287" target="blank">Ajoutez un champ</a></h2>

						<figure class="block_code">
    						<pre><code>
ALTER TABLE aliment ADD vitamines_c FLOAT;
							</code></pre>
						</figure>

						<p>
						Ici, on signale à MySQL :
						<ul>
							<li>de modifier la structure d’une table avec <li class="line_code">ALTER TABLE</li> ;</li>
							<li>quelle table modifier (ici “aliment”) ;</li>
							<li>que la modification va faire ajouter une colonne avec <code class="line_code">ADD</code> ;</li>
							<li>le nom de cette nouvelle colonne (ici “vitamines_c”) ;</li>
							<li>enfin, le type de la colonne (ici, <code class="line_code">FLOAT</code>, car les vitamines sont stockées usuellement en mg/100g, valeur décimale).</li>
						</ul>
						<div class="em">À noter que le type n’est parfois pas seul. On peut aussi (comme dans la partie 1), mentionner à MySQL qu’on rajoute une colonne qui est :
							<ul>
								<li>une clé primaire (<code class="line_code">PRIMARY KEY</code>) ;</li>
								<li>avec une valeur par défaut (<code class="line_code">DEFAULT</code> valeur_par_défaut) ;</li>
								<li>non nulle (<code class="line_code">NOT NULL</code>). Auquel cas il faudra préciser une valeur par défaut, MySQL créant la colonne avec la valeur “NULL” pour tous les objets existants dans cette table ;</li>
								<li>etc.</li>
							</ul>
						</div>
						</p>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142288-modifiez-la-structure-d-un-objet-avec-alter-table#/id/r-7144111" target="blank">Supprimez un champ</a></h2>

						<figure class="block_code">
    						<pre><code>
ALTER TABLE aliment DROP bio;
							</code></pre>
						</figure>

						<p>
							<ul>
								<li>On modifie toujours la structure d’une table avec <code class="line_code">ALTER TABLE</code>.</li>
								<li>On lui signale à nouveau quelle table modifier (ici, “aliment”).</li>
								<li>On lui indique que la modification va supprimer une colonne avec <code class="line_code">DROP</code>.</li>
								<li>On mentionne le nom de la colonne à supprimer (ici, “bio”).</li>
							</ul>
						</p>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142288-modifiez-la-structure-d-un-objet-avec-alter-table#/id/r-7142292" target="blank">Modifiez un champ existant</a></h2>

						<figure class="block_code">
    						<pre><code>
ALTER TABLE aliment MODIFY calories FLOAT;
							</code></pre>
						</figure>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142288-modifiez-la-structure-d-un-objet-avec-alter-table#/id/r-7144116" target="blank">Renommez un champ</a></h2>

						<figure class="block_code">
    						<pre><code>
ALTER TABLE aliment CHANGE sucre sucres FLOAT;
							</code></pre>
						</figure>

						<p>
							<ul>
								<li>On modifie toujours la structure d’une table avec <code class="line_code">ALTER TABLE</code>.</li>
								<li>On lui signale à nouveau quelle table modifier (ici, “aliment”).</li>
								<li>On lui indique que la modification va modifier le nom d’une colonne avec <code class="line_code">CHANGE</code>.</li>
								<li>On mentionne le nom de la colonne à renommer, ainsi que son nouveau nom (ici, “sucre” devient “sucres”).</li>
								<li>On indique le nouveau type de la colonne (ici, <code class="line_code">FLOAT</code>).</li>
							</ul>
							C’est une spécificité propre à MySQL : pour renommer une colonne, il faut aussi indiquer son type. Ce qui n’est pas nécessaire si vous utilisez un autre SGBD. Cela permet de modifier à la fois le nom et le type d’une colonne dans une seule commande. Et ce, même si vous ne souhaitez pas le modifier (réutilisez alors le même type 😉).
						</p>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142285-implementez-des-relations-entre-vos-donnees-grace-a-join#/id/video_Player_1" target="blank">Implémentez des relations entre vos données grâce à <code class="line_code">JOIN</code></a></h1>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142296-ajoutez-une-relation-un-a-plusieurs#/id/video_Player_1" target="blank">Relation un à plusieurs</a></h2>

						<p>
						Nous allons expliquer à MySQL comment joindre deux tables selon un identifiant qu’elles ont en commun.
						</p>

						<p>
						Vous allez spécifier à MySQL de joindre les tables “utilisateur” et “langue” en lui précisant que l’id de langue et langue_id de l’utilisateur doivent êtres égaux !
						</p>

						<figure class="block_code">
    						<pre><code>
SELECT * FROM `utilisateur`

JOIN `langue`

ON `utilisateur`.`langue_id` = `langue`.`id`;
							</code></pre>
						</figure>

						<p>
						Que s’est-il passé dans cette commande ?
						<ul>
							<li>Nous avons demandé à MySQL de sélectionner tous les utilisateurs : <code class="line_code">SELECT * FROM `utilisateur` </code></li>
							<li>Auxquels nous voulons joindre les langues : <code class="line_code">JOIN `langue`</code> </li>
							<li>En précisant à MySQL de les relier, en considérant que l’id de la langue est stockée dans chaque utilisateur dans le champ langue_id : <code class="line_code">ON `utilisateur`.`langue_id` = `langue`.`id` </code></li>
						</ul>
						</p>

						<p>
							Il s'agit d'une relation 1 à plusieurs : Chaque utilisateur est relié à une langue. Et chaque langue peut être reliée à plusieurs utilisateurs.
						</p>

						<img src="../images/16109621275269_3c2_one-to-many.png" alt="1 à plusieurs"/>

						<p>
						Dans le cadre d’une telle relation, c’est l’objet qui se trouve du côté “plusieurs” de la relation qui va être modifié :
						</p>

						<figure class="block_code">
    						<pre><code>
ALTER TABLE aliment

ADD FOREIGN KEY (famille_id) REFERENCES famille (id)

ON DELETE CASCADE;
							</code></pre>
						</figure>

						<p>
							<ul>
								<li>On signale à MySQL qu’on souhaite modifier la table “aliment”, pour y ajouter une colonne (enfin, plutôt y ajouter une contrainte, dans ce cas précis).</li>
								<li>On dit à MySQL que la colonne “famille_id” est une clé étrangère (foreign key en anglais), soit une référence à une colonne d’une autre table (ici, avec la partie <code class="line_code">FOREIGN KEY (famille_id)</code>).</li>
								<li>On indique ensuite ce à quoi cette clé fait référence. Soit, dans notre cas, la colonne “id” de la table “famille” (soit la commande <code class="line_code">REFERENCES famille(id)</code>).</li>
								<li>Enfin, sûrement la partie la plus obscure pour vous, on indique à MySQL le comportement à adopter en cas de suppression de l’objet “unique” (ici, la “famille”).</li>
							</ul>
							Pour ce dernier point : Admettons que je vienne de créer ma famille “fruits”, et qu’elle soit reliée à mes objets “pomme” et “poire”. Que se passe-t-il si je supprime la famille “fruits” ?
						</p>

						<p>
						Eh bien, MySQL a besoin de le savoir. Pour cela, on lui indique via la commande <code class="line_code">ON DELETE</code>.
						</p>

						<img src="../images/1610964972865_P4_ON-DELETE.png" alt="attributs ON DELETE"/>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7153111-ajoutez-une-relation-plusieurs-a-plusieurs#/id/r-7156432" target="blank">Relation plusieurs à plusieurs</a></h2>
						
						<p>
							Que se passe-t-il lorsque chaque objet d’une table doit être relié à plusieurs objets de l’autre table, et vice versa ?
						</p>

						<p>
							Cest une relation plusieurs à plusieurs :
						</p>

						<img src="../images/16109643615497_3c2_Many-to-many.png" alt="plusieurs à plusieurs"/>


						<p>
						Par défaut, le SQL ne sait modéliser que des relations 1 à plusieurs.
						</p>

						<p>
							On va utiliser une <strong>table de liaison</strong> : Par convention, elle prend le nom <code class="line_code"> {table1}_{table2}</code>, et sert à relier les tables 1 et 2 qui y sont stockées, en sauvegardant l’id d’un objet de la table 1, à l’id de l’objet de la table 2 correspondant.
						</p> 

						<figure class="block_code">
    						<pre><code>
SELECT

*

FROM

utilisateur

JOIN utilisateur_aliment ON (utilisateur.id = utilisateur_aliment.utilisateur_id)

JOIN aliment ON (aliment.id = utilisateur_aliment.aliment_id);
							</code></pre>
						</figure>

						<p>
							<ul>
								<li>Nous avons demandé à MySQL de sélectionner tous les utilisateurs : <code class="line_code">SELECT * FROM `utilisateur`</code></li>
								<li>Auxquels nous voulons joindre la table utilisateur_aliment: <code class="line_code">JOIN `utilisateur_aliment`</code></li>
								<li>En précisant à MySQL de les relier en considérant que l’id de l’utilisateur est stocké en tant que utilisateur_id dans la table utilisateur_aliment : <code class="line_code">ON (utilisateur.id = utilisateur_aliment.utilisateur_id)</code></li>
								<li>À ce <code class="line_code"> JOIN</code>, on veut à nouveau lier de la donnée de la table aliment, soit un nouveau  <code class="line_code">JOIN</code> : <code class="line_code">JOIN `aliment`</code></li>
								<li>Pour ce faire, on précise à MySQL que l’id de l’aliment est stocké dans utilisateur_aliment en tant que aliment_id : <code class="line_code">ON (aliment.id = utilisateur_aliment.utilisateur_id)</code></li>
							</ul>
						</p>

						<p>
						En fait, les aliments vont avoir des relations un à plusieurs avec la table de liaison. Les lieux, eux aussi, vont disposer de telles relations avec cette table. Et c’est en reliant ces deux tables via cette table de liaison que vous allez pouvoir ressortir les relations entre lieux et aliments.<br/>
						Pour ce faire, une table de liaison doit être créée. Par convention, elle doit toujours avoir cette forme :
							<ul>
								<li>Son nom doit regrouper les deux tables qu’elle relie, sous la forme : “table1_table2”.</li>
								<li>Elle n’a que deux champs à stocker : “table1_id” et “table2_id”. Soit les id de chaque objet qu’elle relie. Ces id sont donc des références aux id des autres tables.</li>
								<li>Sa clé primaire n’est autre que l’association de ces deux id (association qui doit toujours être unique).</li>
							</ul>
							Dans notre cas, cela donne ceci en commande SQL :
						</p>

						<figure class="block_code">
    						<pre><code>
CREATE TABLE aliment_lieu (

aliment_id INT NOT NULL,

lieu_id INT NOT NULL,

FOREIGN KEY (aliment_id) REFERENCES aliment (id) ON DELETE RESTRICT ON UPDATE CASCADE,

FOREIGN KEY (lieu_id) REFERENCES lieu (id) ON DELETE RESTRICT ON UPDATE CASCADE,

PRIMARY KEY (aliment_id, lieu_id)

);
							</code></pre>
						</figure>

						<p>
						Décortiquons cette commande ensemble :
						<ul>
							<li>On crée une nouvelle table avec le nom des deux tables qu’elle relie (ici la table “aliment”, ainsi que la table “lieu”).</li>
							<li>On ajoute les références aux id de ces deux tables :
								<ul>
									<li>“aliment_id”, qui est une référence aux id de la table “aliment” </li>
									<li>“lieu_id”, qui est une référence aux id de la table “lieu” ;</li>
									<li>on signale à MySQL comment mettre à jour la BDD en cas de suppression ou de mise à jour d’un objet de “aliment_lieu”.</li>
								</ul>
							</li>
							<li>On explique à MySQL que l’id de cette table sera l’association entre les deux id précédents.</li>
						</ul>
						Avec :
						</p>

						<img src="../images/16109652325493_P4_ON-UPDATE.png" alt="ON UPDATE"/>

						<p>
						C’est bien beau tout ça, mais comment ajoute-t-on une relation entre les lieux et les aliments ?
						</p>

						<p>
						Sachant que 11 est l’id du “blanc de dinde”, 1 celui du “Carrefour City :
						</p>

						<figure class="block_code">
    						<pre><code>
INSERT INTO `aliment_lieu` (`aliment_id`, `lieu_id`) VALUES ('11', '1');
							</code></pre>
						</figure>

						<p>
						Et voilà, le fait que le blanc de dinde soit vendu à Carrefour est stocké en base de données. Bravo à vous. 👏
						</p>

						<p>
						Enfin, pour retrouver cette relation, il vous faudra faire un double JOIN. Rappelez-vous :
						</p>

						<figure class="block_code">
    						<pre><code>
SELECT

*

FROM

aliment

JOIN aliment_lieu ON aliment.id = aliment_lieu.aliment_id

JOIN lieu ON lieu.id = aliment_lieu.lieu_id

WHERE

aliment.id = 11;
							</code></pre>
						</figure>















						







								</div>

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

    </body>
</html>