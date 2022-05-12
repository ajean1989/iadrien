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
						</p>

						<img src="../images/16335991080356_p4c1-2.png"  atl="schéma base de donnée"/>

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
						<p>Pour se connecter à une base de données MySQL, vous allez devoir utiliser une extension PHP appelée PDO ("PHP Data Objects"). Cette extension est fournie avec PHP (en français, "les fonctions PDO sont à votre disposition"), mais parfois il vous faudra activer l'extension.</p>

    					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-2175040" target="blank">Vérifiez que PDO est bien activé (voir lien)</a></h2>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-2175074" target="blank">Connectez PHP à MySQL avec PDO</a></h2>

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
	[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION], //active une meilleure gestion des erreurs
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

						<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-2175084" target="blank">Testez la présence d'erreurs</a></h3>

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
        die('Erreur : ' . $e->getMessage());
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

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-914147" target="blank">Effectuez une première requête SQL</a></h1>

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
$recipesStatement = $db->prepare('SELECT * FROM recipes');
?&gt	
							</code></pre>
						</figure>
						<p>Le problème, c'est que $recipesStatement contient quelque chose d'inexploitable directement : un objet PDOStatement. Cet objet va contenir la requête SQL que nous devons exécuter, et par la suite, les informations récupérées en base de données.</p>
						<p>Pour récupérer les données, demandez à cet objet d'exécuter la requête SQL et de récupérer toutes les données dans un format "exploitable" pour vous, c'est-à-dire sous forme d'un tableau PHP.</p>

						<figure class="block_code">
    						<pre><code>
&lt?php
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();		//fetch signifie "va chercher" en anglais
?&gt	
							</code></pre>
						</figure>

						<p>Une fois qu'on a récupéré les données sous forme d'un tableau PHP, on en revient à ce que vous connaissez déjà !</p>

						<p>
							Pour résumer :
						</p>

						<img src="../images/6948946.png" alt=" résumer code complet "/>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-914221" target="blank">Filtrez vos données</a></h1>

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

						<p>Traduction : « Sélectionner tous les champs de la table recipes lorsque le champ is_enabled est égal à vrai ».</p>
						<div class="em">Il faut utiliser les mots-clés dans l'ordre que j'ai donné : <code class="line_code">WHERE</code> puis <code class="line_code">ORDER BY</code> puis <code class="line_code">LIMIT</code> , sinon MySQL ne comprendra pas votre requête.</div>
						<p>Avant d'écrire le code PHP, vous pouvez déjà vérifier que la requête SQL est correcte en la testant dans l'onglet "SQL" de phpMyAdmin, comme je viens de vous le montrer.</p>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914293-accedez-aux-donnees-en-php-avec-pdo#/id/r-914259" target="blank">Construisez des requêtes en fonction de variables</a></h1>

						<div class="em">On ne concatène JAMAIS une requête SQL pour passer des variables, au risque de créer des injections SQL !</div>

						<p>On utilise des marqueurs qui sont des identifiants reconnus par PDO pour être remplacés lors de la préparation de la requête par les variables PHP :</p>

						<figure class="block_code">
    						<pre><code>
&lt?php
$sqlQuery = 'SELECT * FROM recipes WHERE author = :author AND is_enabled = :is_enabled';

$db->prepare($sqlQuery);
$recipes = $db-&gtexecute([
    'author' =&gt 'mathieu.nebra@exemple.com',
    'is_enabled' =&gt true,
]);	
							</code></pre>
						</figure>


						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914508-ajoutez-modifiez-et-supprimez-des-recettes#/id/r-2175533" target="blank">Ajouter une recette : l'instruction <code class="line_code">INSERT INTO</code></a></h1>

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

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914508-ajoutez-modifiez-et-supprimez-des-recettes#/id/r-914477" target="blank">Editer une recette : l'instruction <code class="line_code">UPDATE</code></a></h1>

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

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914508-ajoutez-modifiez-et-supprimez-des-recettes#/id/r-914507" target="blank">Editer une recette : l'instruction <code class="line_code">UPDATE</code></a></h1>


						<p>
							Rapide et simple à utiliser, elle est quand même un poil dangereuse : après suppression, il n'y a aucun moyen de récupérer les données, alors faites bien attention !
						</p>
						<figure class="block_code">
    						<pre><code>
DELETE FROM recipes WHERE recipe_id=:id
							</code></pre>
						</figure>

						<div class="em">Si vous oubliez le <code class="line_code">WHERE</code>, toutes les entrées seront supprimées. Cela équivaut à vider la table.</div>

						<p>
							<a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914508-ajoutez-modifiez-et-supprimez-des-recettes#/id/video_Player_3" target="blank">Voir vidéo</a> pour plus de détail : <br/>
							Pour faire un bouton supprimer une recette, on passera toujours par un formulaire pour envoyer la requete en POST
						</p>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914508-ajoutez-modifiez-et-supprimez-des-recettes#/id/r-4428801" target="blank">Traitez les erreurs SQL</a></h1>

						<p>
							Repérez la requête qui selon vous plante, et forcez l'affichage de l'erreur s'il y en a une, comme ceci :
						</p>

						<figure class="block_code">
    						<pre><code>
&lt?php
$deleteRecipeStatement = $db->prepare('DELETE FROM recipes WHERE recipe_id = :id');
$deleteRecipeStatement->execute([
    'id' => $id,
]) or die(print_r($db->errorInfo()));
							</code></pre>
						</figure>

						<p>
							Si la requête fonctionne, aucune erreur ne sera affichée. Si en revanche la requête plante, PHP arrêtera de générer la page et vous affichera l'erreur donnée par MySQL…
						</p>

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/7372786-ajoutez-des-commentaires-grace-aux-jointures-sql#/id/r-7373184" target="blank">Les jointures</a></h1>

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

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/7372786-ajoutez-des-commentaires-grace-aux-jointures-sql#/id/r-7373279" target="blank">Les jointures internes</a></h2>


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

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/7372786-ajoutez-des-commentaires-grace-aux-jointures-sql#/id/r-7373496" target="blank">Les jointures externes</a></h2>

						<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/7372786-ajoutez-des-commentaires-grace-aux-jointures-sql#/id/r-7455896" target="blank"><code class="line_code">LEFT JOIN</code> et <code class="line_code">RIGHT JOIN</code></a></h3>

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

						<img src="../images/LEFTJOIN.png" alt="LEFT JOIN"  />

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

						<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/7372786-ajoutez-des-commentaires-grace-aux-jointures-sql#/id/r-7373957" target="blank">Enchainer les jointures</a></h3>

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

						<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/915107-allez-plus-loin#/id/r-7456018" target="blank">Les fonctions</a></h1>

						<p>
						Les fonctions SQL peuvent être classées en deux catégories :
						<ol>
							<li><strong>Les fonctions scalaires</strong> : elles agissent sur chaque entrée. Par exemple, vous pouvez transformer en majuscules la valeur de chacune des entrées d'un champ.</li>
							<li><strong>Les fonctions d'agrégat</strong> : lorsque vous utilisez ce type de fonctions, des calculs sont faits sur l'ensemble de la table pour retourner une valeur. Par exemple, calculer la moyenne des prix retourne une valeur : le prix moyen.</li>
						</ol>
						</p>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/915107-allez-plus-loin#/id/r-7456012" target="blank">Les fonctions scalaires</a></h2>

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
SELECT DATE_FORMAT(c.created_at, "%d/%m/%Y") AS comment_date FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1							</code></pre>
						</figure>

						<p>Ce champ virtuel est appelé "alias".</p>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/915107-allez-plus-loin#/id/r-7456014" target="blank">Les fonctions d'agrégat</a></h2>

						<p>
						<code class="line_code">ROUND()</code> est une fonction scalaire qui permet d'arrondir une valeur. On récupère donc autant d'entrées qu'il y en avait dans la table. En revanche, une fonction d'agrégat comme <code class="line_code">AVG()</code> renvoie une seule entrée : la valeur moyenne de tous les lignes.
						</p>

						<p>
							Utilisons-la sur le champ <code class="line_code">review</code> qui – pour rappel – permet à l'utilisateur d'évaluer une recette avec l'identifiant unique  1  :
						</p>

						<figure class="block_code">
    						<pre><code>
SELECT AVG(c.review) as rating FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1												</code></pre>
						</figure>

						<p>
						Mais c'est super moche, on peut pas calculer un arrondi de la moyenne ?
						</p>

						<figure class="block_code">
    						<pre><code>
SELECT ROUND(AVG(c.review),1) as rating FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1												</code></pre>
						</figure>

						<p>
						Pour afficher cette information en PHP, on pourrait faire comme on en a l'habitude (cela fonctionne). Mais pourquoi s'embêterait-on à faire une boucle, étant donné qu'on sait qu'on ne va récupérer qu'une seule entrée, puisqu'on utilise une fonction d'agrégat ?
						</p>

						<figure class="block_code">
    						<pre><code>
&lt?php
$sqlQuery = 'SELECT ROUND(AVG(c.review),1) as rating FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1';

// Préparation
$averageRatingStatment = $db->prepare($sqlQuery);

// Exécution
$averageRatingStatment->execute();

/** La fonction fetch est plus performante que fetchAll()
 * quand nous sommes certain(e)s de ne récupérer qu'une ligne.
 * https://www.php.net/manual/fr/pdostatement.fetch.php
 */
$averageRating = $averageRatingStatment->fetch();											
							</code></pre>
						</figure>

						<p>
							Ce code est plus simple et plus logique :
							<ol>
								<li>On récupère la première et seule entrée avec fetch()  .</li>
								<li>Et on affiche ce qu'elle contient. Inutile de le faire dans une boucle, étant donné qu'il n'y a pas de seconde entrée.</li>
							</ol>
						</p>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/915107-allez-plus-loin#/id/r-7456017" target="blank">Regroupez des données avec <code class="line_code">GROUP BY</code></a></h2>

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
SELECT AVG(review) AS rating, recipe_id FROM comments GROUP BY recipe_id HAVING rating >= 3										
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