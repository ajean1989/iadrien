<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>CSS</title>
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

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4670713-pourquoi-faire-un-code-professionnel#/id/r-4670726" target="blank">Faire un code professionnel</a></h1>

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

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4671236-isoler-laffichage-du-traitement-php#/id/r-4671241" target="blank">Isoler l'affichage du traitement PHP</a></h1>

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

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4671501-isoler-lacces-aux-donnees#/id/r-4671526" target="blank">Isoler l'accès aux données</a></h1>

            <p>
            Notre code est déjà beaucoup mieux, mais nous pouvons aller un cran plus loin. Nous allons séparer complètement l'accès aux données (tout le traitement SQL) dans un fichier spécifique.
            </p>

            <p>
            Nous allons avoir 3 fichiers :
            </p>

            <p>
                <ul>
                    <li><code class="line_code">modele.php</code> : se connecte à la base de données et récupère les billets.</li>
                    <li><code class="line_code">affichageAccueil.php</code> : affiche la page. Ce fichier ne va pas changer du tout.</li>
                    <li><code class="line_code">index.php</code> : fait le lien entre le modèle et l'affichage (oui, juste ça !).</li>
                </ul>
            </p>

            <div class="em">On y reviendra, mais sachez que ces 3 fichiers forment la base d'une structure MVC (Modèle - Vue - Contrôleur) :
                <ul>
                    <li>Le <strong>modèle</strong> traite les données (modele.php)</li>
                    <li>La <strong>vue</strong> affiche les informations (affichageAccueil.php)</li>
                    <li>Le <strong>contrôleur</strong> fait le lien entre les deux (index.php)</li>
                </ul>
            </div>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4671501-isoler-lacces-aux-donnees#/id/r-4671643" target="blank">modele.php</a></h2>

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

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4671301-soigner-la-cosmetique#/id/r-4671375" target="blank">Le code amélioré</a></h1>

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

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4678736-comment-fonctionne-une-architecture-mvc#/id/r-4678828" target="blank">Comment fonctionne une architecture MVC ?</a></h1>

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

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4682286-creer-un-template-de-page#/id/r-4682291" target="blank">Créer un template de page</a></h1>

            <p>
                On sait inclure des blocs dans une page HTML avec <code class="line_code">include</code> ou <code class="line_code">require</code>. Nous allons être encore plus flexible avec un template. 
            </p>

            <p>
                Voici notre fichier template.php :
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
            Il faut maintenant définir ce qu'on met dans ces variables. Voici comment on peut le faire dans la vue indexView.php qui affiche la liste des derniers billets :
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