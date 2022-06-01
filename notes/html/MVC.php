<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Modèle MVC</title>
    </head>

    <body>

    	<?php include("structure/header.php"); ?>

    	<div id="columns">

    	<div class="column_nav">

    		<?php include("structure/nav.php"); ?>
        
        </div>




        <div class="column_front">

            <div id="conteneur">

            <section>

            <div class="element_1">

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/7847610-decouvrez-du-code-professionnel#/id/r-7847589" target="blank">Faire un code professionnel</a></h1>

            <p>
                <ul>
                    <li><strong>Il est modulaire</strong> : généralement découpé en de nombreux fichiers, chaque fichier a un et un seul rôle à la fois.</li>
                    <li><strong>Il est découplé</strong> : les fichiers sont conçus pour fonctionner indépendamment les uns des autres.</li>
                    <li><strong>Il est documenté</strong> : la documentation prend généralement la forme de commentaires spéciaux placés au-dessus des méthodes et classes publiques, pouvant être réutilisées dans d'autres projets (renseignez-vous sur la PHPdoc). On peut générer automatiquement une page web de documentation à partir de ces commentaires.</li>
                    <li><strong>Il est en anglais</strong> : c'est la langue des développeurs et développeuses partout sur la planète. Les variables et les noms des fonctions sont en anglais et peuvent être compris par tous.</li>
                    <li><strong>Il est clair</strong> : chaque fichier est généralement assez court (jamais des fichiers de 1000 lignes !), et le code à l'intérieur peut se lire comme de la prose.</li>
                    <li><strong>Il est réutilisable</strong> : si un jour nous avons codé un fichier utile, nous pouvons nous en resservir dans un autre projet, ou dans un autre endroit du même projet. On gagne du temps en n'ayant pas à tout refaire à chaque fois !</li>
                    <li><strong>Il est facile d'y travailler à plusieurs</strong> : chaque fichier étant indépendant (et généralement de petite taille), on peut travailler en équipe de 5, 10, voire 100 personnes sur un même projet. Si tout était mélangé dans un seul et même gros fichier, il serait impossible de le modifier en même temps !</li>
                    <li><strong>Il est évolutif </strong>: quand quelqu'un vient vous demander une nouvelle fonctionnalité, il est facile de l'ajouter. Vous n'avez pas peur de tout casser. Vous savez que ça va marcher, et votre code ne sera pas plus compliqué.</li>
                </ul>
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/7847735-isolez-laffichage-du-traitement-php#/id/r-7847690" target="blank">Isoler l'affichage du traitement PHP</a></h1>

            <p>
            La première bonne pratique que nous devons prendre consiste à éviter de mélanger l'affichage du reste. Ca veut dire qu'on va séparer le code HTML du code PHP.
            </p>

            <p>
                Exemple :
            </p>
		   <img src="../images/54564.png" alt="code HTML PHP"/>

           <p>
               Devient :           
            </p>

            <img src="../images/64654.png" alt="code HTML & PHP séparés"/>
            
            <div class="em">La fonction <code class="line_code">require</code> marche comme un include . Il y a une seule différence : si le fichier n'est pas trouvé quand on utilise <code class="line_code">require</code>, le script s'arrête et plante. C'est volontaire de ma part : la page ne doit pas s'afficher si on n'arrive pas à charger le fichier qui contient l'affichage.<br/>
            Ca aurait aussi bien marché avec un <code class="line_code">include</code>, mais c'est plus "propre" d'utiliser un <code class="line_code">require</code> dans ce cas, parce qu'il vaut mieux faire planter le script si le fichier n'était pas trouvé.</div>

            <p>
            On est bien obligé de faire de temps en temps des <code class="line_code">echo</code> pour afficher le contenu des variables. Ce qui compte, c'est que le rôle de ce code soit uniquement d'afficher des informations. On n'y fait pas des opérations ou des calculs complexes, on n'y fait pas des requêtes en base de données.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/7847795-isolez-lacces-aux-donnees#/id/r-7847737" target="blank">Isoler l'accès aux données</a></h1>

            <p>
            Notre code est déjà beaucoup mieux, mais nous pouvons aller un cran plus loin. Nous allons séparer complètement l'accès aux données (tout le traitement SQL) dans un fichier spécifique.
            </p>

            <p>
            Nous allons avoir 3 fichiers :
            </p>

            <p>
                <ul>
                    <li><code class="line_code">src/model.php</code> : se connecte à la base de données et récupère les billets.</li>
                    <li><code class="line_code">templates/homepage.php</code> : affiche la page. Ce fichier ne va pas changer du tout.</li>
                    <li><code class="line_code">index.php</code> : fait le lien entre le modèle et l'affichage (oui, juste ça !).</li>
                </ul>
            </p>

            <div class="em">On y reviendra, mais sachez que ces 3 fichiers forment la base d'une structure MVC (Modèle - Vue - Contrôleur) :
                <ul>
                    <li>Le <strong>modèle</strong> traite les données (src/modele.php)</li>
                    <li>La <strong>vue</strong> affiche les informations (templates/homepage.php)</li>
                    <li>Le <strong>contrôleur</strong> fait le lien entre les deux (index.php)</li>
                </ul>
            </div>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/7847795-isolez-lacces-aux-donnees#/id/r-7847758" target="blank">modele.php</a></h2>

            <p>
            Notre nouveau fichier modele.php contient une fonction <code class="line_code">getBillets()</code> qui renvoie la liste des billets :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
function getBillets()
{
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e-&gtgetMessage());
	}

	$req = $bdd-&gtquery('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

	return $req;
}
?&gt
				</code></pre>
			</figure>

            <p> Nouvel exemple utile :</p>

            <figure class="block_code">
    			<pre><code>
&lt?php

function getPosts() {
	// We connect to the database.
	try {
    	$database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'blog', 'password');
	} catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}

	// We retrieve the 5 last blog posts.
	$statement = $database->query(
    	"SELECT id, titre, contenu, DATE_FORMAT(date_creation, '%d/%m/%Y à %Hh%imin%ss') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5"
	);
	$posts = [];
	while (($row = $statement->fetch())) {
    	$post = [
        	'title' => $row['titre'],
        	'french_creation_date' => $row['date_creation_fr'],
        	'content' => $row['contenu'],
    	];

    	$posts[] = $post;
	}

	return $posts;
}

?&gt
				</code></pre>
			</figure>


            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4671501-isoler-lacces-aux-donnees#/id/r-4671646" target="blank">affichageAccueil.php</a></h2>

            <p>
            L'affichage n'a pas du tout changé. Voir ci-dessus.
            </p>


            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4671501-isoler-lacces-aux-donnees#/id/r-4671650" target="blank">index.php</a></h2>

            <p>
            La nouveauté, c'est désormais l'index (aussi appelé le contrôleur) qui sert d'intermédiaire entre le modèle et la vue :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
require('modele.php');

$req = getBillets();

require('affichageAccueil.php');
?&gt
				</code></pre>
			</figure>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/7847877-soignez-la-cosmetique-du-code#/id/r-7847855" target="blank">Le code amélioré</a></h1>

            <p>
                Pour commencer, on traduit tout en anglais. N'ayez pas peur d'utiliser de l'anglais, même si vous le parlez mal. En programmation, écrire en mauvais anglais est préférable à écrire en bon français (!).
            </p>

            <p>
            Vous constaterez que j'ai enlevé la balise de fermeture <code class="line_code">?&gt</code> à la fin du fichier index.php. Les développeurs professionnels enlèvent en effet la balise de fermeture PHP dans les pages qui ne contiennent que du PHP. Sans rentrer dans les détails, ça permet d'éviter que ces fichiers n'envoient par erreur du code HTML sous forme d'espaces blancs alors qu'ils ne devraient pas. Faites-moi confiance et retirez ce <code class="line_code">?&gt</code> si votre fichier ne contient que du PHP.
            </p>

            <p>
            Le code est un peu mieux indenté : on décale toujours d'un cran vers la droite le code à l'intérieur d'une balise. Le décalage se fait toujours en ajoutant 4 espaces à chaque fois qu'on veut décaler.
            </p>

            <p>
            Enfin, ce n'est pas obligatoire mais j'ai utilisé les "short open tags" en PHP pour faciliter la lisibilité du code. Ainsi, par exemple :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php echo htmlspecialchars($data['title']); ?&gt
				</code></pre>
			</figure>

            <p>
                Est devenu ...
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?= htmlspecialchars($data['title']) ?&gt
				</code></pre>
			</figure>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/7847928-decouvrez-comment-fonctionne-une-architecture-mvc#/id/r-7847880" target="blank">Comment fonctionne une architecture MVC ?</a></h1>

            <p>
            il y a des problèmes en programmation qui reviennent tellement souvent qu'on a créé toute une série de bonnes pratiques que l'on a réunies sous le nom de design patterns.
            </p>

            <p>
            Un des plus célèbres design patterns s'appelle MVC, qui signifie Modèle - Vue - Contrôleur.
            </p>

            <p>
            Le pattern MVC permet de bien organiser son code source. Il va vous aider à savoir quels fichiers créer, mais surtout à définir leur rôle. Le but de MVC est justement de séparer la logique du code en trois parties que l'on retrouve dans des fichiers distincts.
            <ul>
                <li><strong>Modèle</strong> : cette partie gère les données de votre site. Son rôle est d'aller récupérer les informations « brutes » dans la base de données, de les organiser et de les assembler pour qu'elles puissent ensuite être traitées par le contrôleur. On y trouve donc entre autres les requêtes SQL.</li>
                <li><strong>Vue</strong> : cette partie se concentre sur l'affichage. Elle ne fait presque aucun calcul et se contente de récupérer des variables pour savoir ce qu'elle doit afficher. On y trouve essentiellement du code HTML mais aussi quelques boucles et conditions PHP très simples, pour afficher par exemple une liste de messages.</li>
                <li><strong>Contrôleur</strong> : cette partie gère la logique du code qui prend des décisions. C'est en quelque sorte l'intermédiaire entre le modèle et la vue : le contrôleur va demander au modèle les données, les analyser, prendre des décisions et renvoyer le texte à afficher à la vue. Le contrôleur contient exclusivement du PHP. C'est notamment lui qui détermine si le visiteur a le droit de voir la page ou non (gestion des droits d'accès).</li>
            </ul>
            </p>

            <img src="../images/382128.png" alt="Modele vue controleur"/>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/7848103-creez-un-template-de-page#/id/r-7848049" target="blank">Créer un template de page</a></h1>

            <p>
                On sait inclure des blocs dans une page HTML avec <code class="line_code">include</code> ou <code class="line_code">require</code>. Nous allons être encore plus flexible.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/7848103-creez-un-template-de-page#/id/r-7848083" target="blank">Créer un layout</a></h2>

            <p>
            On va créer un layout (une disposition, traduit littéralement) de page. On va y retrouver toute la structure de la page, avec des "trous" à remplir.
            </p>

            <div class="em">Attention à ne pas faire l'amalgame entre layout et template ! Un layout est une façon spécifique d'utiliser un template. Il sert à créer une disposition d'affichage. Dans un fichier layout, les "trous" à remplir seront très souvent comblés... par des templates !</div>

            <p>
            Voici notre fichier <code class="line_code">templates/layout.php</code> :
            </p>


            <figure class="block_code">
    			<pre><code>
&lt!DOCTYPE html&gt
&lthtml&gt
    &lthead&gt
        &ltmeta charset="utf-8" /&gt
        &lttitle&gt&lt?= $title ?&gt&lt/title&gt
        &ltlink href="style.css" rel="stylesheet" /&gt
    &lt/head&gt
        
    &ltbody&gt
        &lt?= $content ?&gt
    &lt/body&gt
&lt/html&gt
				</code></pre>
			</figure>

            <p>
            Il y a 2 "trous" à remplir dans ce template : le <code class="line_code">&lttitle&gt</code> et le contenu de la page.
            </p>

            <p>
            Il faut maintenant définir ce qu'on met dans ces variables. Voici comment on peut le faire dans la vue <code class="line_code">templates/homepage.php</code> qui affiche la liste des derniers billets :
            </p>

            <img src="../images/5475643.png" alt="indexview.php"/>

            <p>
            Ce code fait 3 choses :
            <ol>
                <li>Il définit le titre de la page dans <code class="line_code">$title</code>. Celui-ci sera intégré dans la balise <code class="line_code">&lttitle&gt</code> dans le template.</li>
                <li>Il définit le contenu de la page dans <code class="line_code">$content</code>. Il sera intégré dans la balise <code class="line_code">&ltbody&gt</code> du template.<br/>
                Comme ce contenu est un peu gros, on utilise une astuce pour le mettre dans une variable. On appelle la fonction <code class="line_code">ob_start()</code> qui "mémorise" toute la sortie HTML qui suit, puis, à la fin, on récupère le contenu généré avec <code class="line_code">ob_get_clean()</code> et on met le tout dans <code class="line_code">$content</code>.</li>
                <li>Enfin, il appelle le template avec un require. Celui-ci va récupérer les variables <code class="line_code">$title</code> et <code class="line_code">$content</code> qu'on vient de créer... pour afficher la page !</li>
            </ol>
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/7848196-creez-un-routeur#/id/r-7848106" target="blank">Créer un routeur</a></h1>

            <p>
            Pour faciliter la maintenance, il est plus simple de passer par un contrôleur frontal, qui va jouer le rôle de routeur. Son objectif va être d'appeler le bon contrôleur (on dit qu'il route les requêtes).
            </p>

            <img src="../images/15066137117023_mvc_router.png" alt="vue routeur"/>

            <p>
            On va travailler ici sur 2 fichiers :
            <ul>
                <li><code class="line_code">index.php</code> : ce sera le nom de notre routeur. Le routeur étant le premier fichier qu'on appelle en général sur un site, c'est normal de le faire dans index.php. Il va se charger d'appeler le bon contrôleur.</li>
                <li><code class="line_code">src/controllers</code> : il contiendra nos contrôleurs dans des fonctions.</li>
            </ul>
            Chaque contrôleur a le droit à son propre fichier. C'est une unité de code qui a une taille souvent suffisamment grande pour ne pas devoir la mélanger avec d'autres.
            </p>

            <p>
            On va faire passer un paramètre <code class="line_code">action</code> dans l'URL de notre routeur <code class="line_code">index.php</code> pour savoir quelle page on veut appeler. Par exemple :
            <ul>
                <li>index.php?action=listPosts : va afficher la liste des billets.</li>
                <li>index.php?action=post : va afficher un billet et ses commentaires.</li>
            </ul>
            </p>

            <div class="em">Certains trouvent que l'URL n'est plus très jolie sous cette forme. Peut-être préféreriez-vous voir monsite.com/listposts plutôt que index.php?action=listPosts.<br/>
            Heureusement, cela peut se régler avec un mécanisme de réécriture d'URL (URL rewriting). On ne l'abordera pas ici, car ça se fait dans la configuration du serveur web (Apache), mais vous pouvez vous renseigner sur le sujet si vous voulez !</div>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/7848196-creez-un-routeur#/id/r-7848170" target="blank">Création du routeur index.php</a></h2>

            <figure class="block_code">
    			<pre><code>
&lt?php
require('controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
}
else {
    listPosts();
}
				</code></pre>
			</figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/7848196-creez-un-routeur#/id/r-7848158" target="blank">Création des controllers</a></h2>

            <p>
            Commençons par notre dossier <code class="line_code">controllers/</code>. On va y créer nos contrôleurs, un par fichier :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
// controllers/homepage.php

require_once('src/model.php');

function homepage() {
	$posts = getPosts();

	require('templates/homepage.php');
}
				</code></pre>
			</figure>

            <figure class="block_code">
    			<pre><code>
&lt?php
// controllers/post.php

require_once('src/model.php');

function post(string $identifier)
{
	$post = getPost($identifier);
	$comments = getComments($identifier);

	require('templates/post.php');
}
				</code></pre>
			</figure>

            <p>
            On a apporté deux changements majeurs :
            <ul>
                <li><strong>Nos contrôleurs sont placés dans des fonctions.</strong> Chaque fichier devient du type "bibliothèque de code" et ne fait plus rien par lui-même. Il va simplement fournir à notre routeur un point d'accès pour lancer notre code.</li>
                <li><strong>Notre fichier <code class="line_code">src/model.php</code> est inclus avec <code class="line_code">require_once</code>.</strong> C'est une fonction très semblable à <code class="line_code">require</code>, mais qui vérifie d'abord si le fichier a déjà été inclus ! Étant donné que <code class="line_code">src/model.php</code> est aussi un fichier de type "bibliothèque de code", on souhaite qu'il ne soit inclus qu'une seule fois. Sans ça, l'inclusion de nos deux contrôleurs va déclencher une double inclusion de notre modèle et donc un plantage de PHP.</li>
            </ul>
            Les plus attentifs auront aussi noté qu'on a simplifié le contrôleurpost, en lui enlevant la responsabilité de chercher lui-même l'identifiant du billet dans la requête ! On préfère déplacer ce travail sur notre routeur. Chaque contrôleur (et donc chaque nouvelle fonctionnalité métier) sera ainsi plus facile à développer.
            </p>

            <p>
            Vous remarquerez que c'est dans le routeur qu'on teste la présence de l'id dans l'URL pour l'affichage d'un post (ligne 9). On aurait pu laisser ce test dans le contrôleur, mais c'est normalement le rôle du routeur de vérifier que tous les paramètres sont présents dans l'URL avant de charger le contrôleur.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/7848249-organisez-en-dossiers#/id/r-7848198" target="blank">Organiser en dossiers</a></h1>

            <img src="../images/16509799889228_image14.png" alt='arborescence'/>


            <p>
            Je pense que ça serait bien d'adopter déjà au minimum l'organisation suivante, que l'on peut retrouver dans un certain nombre projets :
            <ul>
                <li><strong>src/controllers/</strong> : le dossier qui contient nos contrôleurs.</li>
                <li><strong>templates/</strong> : nos vues.</li>
                <li><strong>src/model/</strong> : notre modèle.</li>
                <li><strong>public/</strong> : tous nos fichiers statiques publics. On pourra y mettre à l'intérieur un dossier css/, images/, js/, etc.</li>
            </ul>
            On retrouve aussi souvent un dossier appelé <strong>vendor/</strong> dans lequel on place toutes les bibliothèques tierces (tout le code qui provient d'autres personnes).
            </p>

            <p>
            Hum, mais c'est bizarre non d'avoir controller/controller.php et model/model.php ? 🤔  En fait, ça nous donne la place de nous étendre quand le site va grossir. L'idée sera de regrouper les contrôleurs, modèles (et même les vues) dans des sections, en fonction des différentes grandes "zones du site".
            </p>

            <p>
                On peut aussi avoir un autre découpage :
                <ul>
                    <li><strong>frontend</strong> : tout ce qui est côté utilisateur. Affichage des billets, ajout et liste des commentaires...</li>
                    <li><strong>backend</strong> : tout ce qui est pour les administrateurs. Création de billets, modération des commentaires...</li>
                </ul>
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/7848418-gerez-les-erreurs#/id/r-7848334" target="blank">Gérer les erreurs</a></h1>

            <p>
            Si vous vous souvenez de notre routeur, il contient beaucoup de  if .On fait des tests et on affiche des erreurs à chaque fois qu'il y a un problème.
            </p>

            <p>
            Oui, mais comme toujours, ce n'est pas parce que ça marche que c'est pratique à la longue. Les développeurs ont en particulier du mal à gérer comme ça les erreurs qui ont lieu à l'intérieur des fonctions.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/7848418-gerez-les-erreurs#/id/r-7848365" target="blank">Les exceptions</a></h2>

            <p>
            Les exceptions sont un moyen en programmation de gérer les erreurs. Vous en avez peut-être déjà vu dans du code PHP, ça ressemble à ça :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
try {
    // Essayer de faire quelque chose
}
catch(Exception $e) {
    // Si une erreur se produit, on arrive ici
}
				</code></pre>
			</figure>

            <p>
            En premier lieu, l'ordinateur essaie d'exécuter les instructions qui se trouvent dans le bloc <code class="line_code">try</code> ("essayer" en anglais). Deux possibilités :
            <ul>
                <li>Soit il ne se passe aucune erreur dans le bloc <code class="line_code">try</code> : dans ce cas, on saute le bloc <code class="line_code">catch</code> et on passe à la suite du code.</li>
                <li>Soit une erreur se produit dans le bloc <code class="line_code">try</code> : on arrête ce qu'on faisait et on va directement dans le <code class="line_code">catch</code> (pour "attraper" l'erreur).</li>
            </ul>
            </p>
            On peut afficher l'erreur qui nous a été envoyée avec <code class="line_code">$e->getMessage() </code>
            </p>

            <p>
            Pour générer une erreur, il faut "jeter une exception" (oui, on dit ça 😂 ). Dès qu'il y a une erreur quelque part dans votre code, dans une fonction par exemple, vous utiliserez cette ligne :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
throw new Exception('Message d\'erreur à transmettre');
				</code></pre>
			</figure>

            <p>
            On va utiliser ce mécanisme dans notre code comme ceci :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
require('controller/frontend.php');

try { // On essaie de faire des choses
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                // Autre exception
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    }
    else {
        listPosts();
    }
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}

				</code></pre>
			</figure>

            <p>
            Comme vous pouvez le voir, à l'endroit où les erreurs se produisent j'ai mis des <code class="line_code">throw new Exception</code>. Cela arrête le bloc <code class="line_code">try</code> et amène directement l'ordinateur au bloc <code class="line_code">catch</code>. Ici, notre bloc <code class="line_code">catch</code> se contente de récupérer le message d'erreur qu'on a transmis et de l'afficher.
            </p>

            <p>
            Lorsqu'une erreur survient dans une sous-fonction, elle est remontée jusqu'au bloc catch :
            </p>

            <img src="../images/15066202231155_exceptions.png" alt="remonter une erreur"/>

            <p>
            Pour l'instant, notre bloc <code class="line_code">catch</code> affiche une erreur avec un simple <code class="line_code">echo</code>. Si nous voulons faire quelque chose de plus joli, nous pouvons appeler une vue  <code class="line_code">errorView.php</code> qui affiche joliment le message d'erreur.
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
require('controller/frontend.php');

try {
    // ...
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/errorView.php');
}
				</code></pre>
			</figure>
















            </div>
    
            </section>

            <footer>

            </footer>

            </div>

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