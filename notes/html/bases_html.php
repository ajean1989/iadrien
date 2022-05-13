<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
		<script>hljs.initHighlightingOnLoad();</script>
        <title>HTML</title>
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

    				
    				<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604361-creez-votre-premiere-page-web-en-html#/id/r-6413154" target="_blank">Structure de base d'un site web HTML</a></h1>

    				<figure class="block_code">
    					<pre><code class="html">
&lt!DOCTYPE html&gt
&lthtml&gt
	&lthead&gt
    	&ltmeta charset="utf-8" /&gt
    	&ltlink rel="stylesheet" href="../css/style.css" /&gt
    	&lttitle>Titre&lt/title&gt
    &lt/head&gt

    &ltbody&gt
    		&lt!-- Ceci est un commentaire --&gt
    &lt/body&gt
&lt/html>
						</code></pre>
					</figure>

			

    				
    				<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604534-organisez-votre-texte#/id/r-1604413" target="_blank">Les paragraphes</a></h1>

    				<figure class="block_code">
    					<pre><code>
&ltp&gtBonjour et bienvenue sur mon site !&lt/p&gt 
						</code></pre>
					</figure>

					<p>
						Sauter une ligne : balise orpheline <code>&ltbr /&gt</code>
					</p>
		
   				
    				<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604534-organisez-votre-texte#/id/r-1604443" target="_blank">Les titres</a></h1>

    				<p>
    					<ul>
    						<li><code class="line_code">&lth1&gt &lt/h1&gt</code> :  signifie « titre très important ». En général, on s'en sert pour afficher le titre de la page au début de celle-ci.</li>
    						<li><code class="line_code">&lth2&gt &lt/h2&gt</code> : signifie « titre important ».</li>
    						<li><code class="line_code">&lth3&gt &lt/h3&gt</code> :  c'est un titre un peu moins important (on peut dire un « sous-titre » si vous voulez).</li>
    						<li><code class="line_code">&lth4&gt &lt/h4&gt</code> :  titre encore moins important..</li>
    						<li><code class="line_code">&lth5&gt &lt/h5&gt</code> : titre pas important.</li>
    						<li><code class="line_code">&lth6&gt &lt/h6&gt</code> : titre vraiment, mais alors là vraiment pas important du tout.</li>
    					</ul>
    				</p>

    	
    				
    				<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604534-organisez-votre-texte#/id/r-1604474" target="_blank">La mise en valeur</a></h1>

 					<p>
    					<code class="line_code">&ltem&gt &lt/em&gt</code> : Mettre un peu en valeur, a pour conséquence de mettre le texte en italique. En fait, c'est le navigateur qui choisit comment afficher les mots. On lui dit que les mots sont assez importants et, pour faire ressortir cette information, il change l'apparence du texte en utilisant l'italique.
    					<code class="line_code">&ltstrong&gt &lt/strong&gt</code> : Mettre bien en valeur. Là encore, le gras n'est qu'une conséquence. Le navigateur a choisi d'afficher en gras les mots importants pour les faire ressortir davantage.
    					<code class="line_code">&ltmark&gt &lt/mark&gt</code> : Marquer le texte.Permet de faire ressortir visuellement une portion de texte. L'extrait n'est pas forcément considéré comme important mais on veut qu'il se distingue bien du reste du texte. Cela peut être utile pour faire ressortir un texte pertinent après une recherche sur votre site par exemple. Par défaut,&ltmark&gta pour effet de surligner le texte. 
    				</p>

    		
    				<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604534-organisez-votre-texte#/id/r-1604533" target="_blank">Les listes</a></h1>
   				
    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604534-organisez-votre-texte#/id/r-1609600" target="_blank">Listes non ordonnées</a></h2>

    				<figure class="block_code">
    					<pre><code>
&ltul&gt
    &ltli&gt Fraises &lt/li&gt
    &ltli&gt Framboises &lt/li&gt
   	&ltli&gt Cerises &lt/li&gt
&lt/ul&gt
    					</code></pre>
    				</figure>

    				<p>
    					<ul>
    						<li><code class="line_code">&ltul&gt&lt/ul&gt</code> délimite toute la liste</li>
    						<li><code class="line_code">&ltli&gt&lt/li&gt</code> délimite un élément de la liste (une puce).</li>
    					</ul>
    				</p>

    		
    				
    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604534-organisez-votre-texte#/id/r-1609612" target="_blank">Listes ordonnées</a></h2>

    				<figure class="block_code">
    					<pre><code>
&ltol&gt
    &ltli&gtJe me lève.&lt/li&gt
    &ltli&gtJe mange.&lt/li&gt
    &ltli&gtJe retourne me coucher.&lt/li&gt
&lt/ol&gt
    					</code></pre>
    				</figure>

    				<p>
   						<div class="em">Pour information, il existe un troisième type de liste, beaucoup plus rare : la liste de définitions. Elle fait intervenir les balises<code class="line_code">&ltdl&gt</code>(pour délimiter la liste), <code class="line_code">&ltdt&gt</code>(pour délimiter un terme) et <code class="line_code">&ltdd&gt</code> (pour délimiter la définition de ce terme).</div>
    				</p>

    		

    				
    				<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604646-creez-des-liens#/id/video_Player_1" target="_blank">Créer des liens</a></h1>

    				
    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604646-creez-des-liens#/id/r-1604554" taget="_blank">Lien vers un autre site</a></h2>
    	
    				<p>	
    					<code class="line_code">&lta&gt</code> : Balise
    					<code class="line_code">href</code> : Attribut qui indique vers quelle page le lien doit aller.
    					<code class="line_code">title</code> : Attribut qui affiche une bulle d'aide lorsqu'on pointe sur le lien.
    				</p>

    				<figure class="block_code">
    					<pre><code class="block_code">
&lta href="https://openclassrooms.com"&gtOpenClassrooms&lt/a&gt
					</pre></code>
    				</figure>

    				<p>
    					<div class="em">Si vous faites un lien vers un site qui comporte une adresse un peu bizarre avec des &, comme :http://www.site.com/?data=15&name=mateo21, vous devrez remplacer tous les « & » par « &amp; » dans votre lien comme ceci :http://www.site.com/?data=15&amp;name=mateo21.Vous ne verrez pas la différence, mais cela est nécessaire pour avoir une page web correctement construite en HTML5.</div>
    				</p>

    		
			

    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604646-creez-des-liens#/id/r-1604590" target="_blank">Lien vers une autre page de son site</a></h2>

    				<p>
    					Si les deux fichiers sont situés dans le même dossier, il suffit d'écrire comme cible du lien le nom du fichier vers lequel on veut amener.<br />
    					<code class="line_code">&lta href="page2.html"&gt</code>.<br />
    					<strong>On dit que c'est un lien relatif.</strong>
    				</p>

    				<p>
    					Imaginons que page2.html se trouve dans un sous-dossier appelé contenu, comme à la figure suivante.<br />
    					<code class="line_code">&lta href="contenu/page2.html"&gt</code>
    				</p>

    				<p>
    					Si votre fichier cible est placé dans un dossier qui se trouve « plus haut » dans l'arborescence, il faut écrire deux points comme ceci :<br />
    					<code class="line_code">&lta href="../page2.html"&gt</code><br />
    					Résumer en image :
    				</p>

    				<figure>
    					<img src="../images/341455.png" alt="lien dossier" />
    				</figure>

    				
    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604646-creez-des-liens#/id/r-1604608" target="_blank">Lien vers une ancre</a></h2>

    				<p>
    					Une ancre est une sorte de point de repère que vous pouvez mettre dans vos pages HTML lorsqu'elles sont très longues.
    				</p>

    				<p>
    					<code class="line_code">id</code> : Attribut qui va servir de repère. Peut se placer sur n'importe quelle balise. Un titre par exemple.<br />
    					<code class="line_code">&lth2 id="mon_ancre"&gtTitre&lt/h2&gt</code><br />
    					Ensuite, il suffit de créer un lien comme d'habitude avec l'attribu <code class="line_code">href</code><br />
    					<code class="line_code">&lta href="#mon_ancre"&gtAller vers l'ance&lt/a&gt</code><br/>
    					On peut utiliser indifféremment les attributs <code class="line_code">id</code> et <code class="line_code">class</code> pour appliquer des styles CSS aux éléments d'une page et interagir avec eux en JavaScript, mais...
    					<ul>
    						<li>un id s'applique à un objet unique : il ne peut pas y avoir deux mêmes id dans une page</li>
    						<li>une classe peut caractériser plusieurs objets (identiques ou non)</li>
    					</ul>
    					<figure class="block_code">
    					<pre><code>
&ltdiv class="toto"&gt&lt/div&gt 
&ltdiv class="toto"&gt&lt/div&gt &lt!-- correcte --&gt

&ltdiv id="toto"&gt&lt/div&gt 
&ltdiv id="toto"&gt&lt/div&gt &lt!-- incorrecte --&gt
						</code></pre>
					</figure>
    				</p>

    				
    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604646-creez-des-liens#/id/r-1609695" target="_blank">Lien vers une ancre située dans une autre page</a></h2>

    				<p>
    					En pratique c'est assez simple à faire : il suffit de taper le nom de la page, suivi d'un dièse (#), suivi du nom de l'ancre.<br />
    					<code class="line_code">&lta href="ancres.html#rollers"&gt</code> mènera sur la page ancres.html, au niveau de l'ancre appelé <code class="line_code">rollers</code>
    				</p>

    				
    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604646-creez-des-liens#/id/r-1609712" target="_blank">Un lien qui ouvre une nouvelle fenêtre</a></h2>

    				<p>
    					Il est possible de « forcer » l'ouverture d'un lien dans une nouvelle fenêtre. Pour cela, on rajoutera <code class="line_code">target="_blank"</code> à la balise <code class="line_code">&lta&gt</code> :<br />
    					<code class="line_code">&ltp&gtBonjour. Souhaitez-vous visiter &lta href="https://openclassrooms.com" title="Vous ne le regretterez pas !" target="_blank"&gtOpenClassrooms&lt/a&gt ?&lt/p&gt</code>
    				</p>

    				
    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604646-creez-des-liens#/id/r-1609716" target="_blank">Un lien pour envoyer un e-mail</a></h2>

    				<p>
    					<code class="line_code">&ltp&gt&lta href="mailto:votrenom@bidule.com"&gtEnvoyez-moi un e-mail !&lt/a&gt&lt/p&gt</code>
    				</p>

    				
    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604646-creez-des-liens#/id/r-1609721" target="_blank">Un lien pour télécharger un fichier</a></h2>

    				<p>
    					<code class="line_code">&ltp&gt&lta href="monfichier.zip"&gtTélécharger le fichier&gt/a&gt&lt/p&gt</code>
    				</p>

    		


    				
    				<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604791-inserez-des-images#/id/r-1604738" target="_blank">Insérer une image</a></h1>

    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604791-inserez-des-images#/id/r-1604706" target="blank">Il existe un format adapté à chaque image</a></h2>

    				<p>
    					<ul>
    						<li>Une photo : utilisez un JPEG.</li>
    						<li>N'importe quel graphique avec peu de couleurs (moins de 256) : utilisez un PNG 8 bits ou éventuellement un GIF.</li>
    						<li>N'importe quel graphique avec beaucoup de couleurs : utilisez un PNG 24 bits.</li>
    						<li>Une image animée : utilisez un GIF animé.</li>
    					</ul>
    				</p>

    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604791-inserez-des-images#/id/r-1609790" target="blank">Les erreurs à éviter</a></h2>

    				<p>
    					<ul>
    						<li>Bannissez les autres formats</li>
    						<li>Choisissez bien le nom de votre image :<br />
    						Si vous voulez éviter des problèmes, prenez l'habitude d'enregistrer vos fichiers avec des noms en minuscules, sans espace ni accent, par exemple :  mon_image.png.</li>
    					</ul>
    				</p>

    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604791-inserez-des-images#/id/r-1604738" target="blank">Insérer une image</a></h2>

    				<p>
    				La balise <code class="line_code">&ltimg /&gt</code>doit être accompagnée de deux attributs obligatoires :
    					<ul>
    						<li><code class="line_code">src</code> : il permet d'indiquer où se trouve l'image que l'on veut insérer. Vous pouvez soit mettre un chemin absolu (ex. :  http://www.site.com/fleur.png), soit mettre le chemin en relatif (ce qu'on fait le plus souvent). Ainsi, si votre image est dans un sous-dossier  images.</li>
    						<li><code class="line_code">alt</code> :cela signifie « texte alternatif ». On doit toujours indiquer un texte alternatif à l'image, c'est-à-dire un court texte qui décrit ce que contient l'image. Ce texte sera affiché à la place de l'image si celle-ci ne peut pas être téléchargée (cela  arrive), ou dans les navigateurs de personnes handicapées (non-voyants). Cela aide aussi les robots des moteurs de recherche pour les recherches d'images. </li>
    					</ul>
    					<div class="em">Les images doivent se trouver obligatoirementà l'intérieur d'un paragraphe (<code class="line_code">&ltp&gt&lt/p&gt</code>).</div>
    				</p>

    				
    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604791-inserez-des-images#/id/r-1609810" target="_blank">Ajouter une infobulle</a></h2>

    				<p>
    					L'attribut permettant d'afficher une bulle d'aide est le même que pour les liens : il s'agit de  <code class="line_code">title</code>. Cet attribut est facultatif (contrairement à  <code class="line_code">alt</code>).
    				</p>

    				
    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604791-inserez-des-images#/id/r-1609821" target="_blank">Miniature cliquable</a></h2>

    				<figure class="block_code">
    					<pre><code>
&ltp&gt
    Vous souhaitez voir l'image dans sa taille d'origine ? Cliquez dessus !&ltbr /&gt
	&lta href="img/montagne.jpg"&gt&ltimg src="img/montagne_mini.jpg" alt="Photo de montagne" title="Cliquez pour agrandir" /&gt&lt/a&gt
&lt/p&gt
						</code></pre>
					</figure>

    				
    				<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604791-inserez-des-images#/id/r-1604790" target="_blank">Les figures</a></h2>
    			
    				<p>
    					Ce sont des éléments qui viennent enrichir le texte pour compléter les informations de la page. <br />
    					Les figures peuvent être de différents types :
    					<ul>
    						<li>images ;</li>
    						<li>code source ;</li>
    						<li>ciations ;</li>
    						<li>etc.</li>
    					</ul>
    				</p>
    				<p>
    					Bref, tout ce qui vient illustrer le texte est une figure. Nous allons ici nous intéresser aux images mais, contrairement à ce qu'on pourrait croire, les figures ne sont pas forcément des images : un code source aussi illustre le texte.
    				</p>

    				
    				<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1604791-inserez-des-images#/id/r-1609842" target="_blank">Création d'une figure</a></h3>

    				<p>
    					Une figure est le plus souvent accompagnée d'une légende. Pour ajouter une légende, utilisez la balise  <code class="line_code">&ltfigcaption&gt</code> à l'intérieur de la balise <code class="line_code">&ltfigure&gt</code>, comme ceci :
    				</p>

    				<figure class="block_code">
    					<pre><code>
&ltfigure&gt
   	&ltimg src="images/blocnotes.png" alt="Bloc-Notes" /&gt
   	&ltfigcaption&gtLe logiciel Bloc-Notes&lt/figcaption&gt
&lt/figure&gt
						</code></pre>
					</figure>

					<p>
						<div class="em">Si vous faites de votre image une figure, l'image peut être située en-dehors d'un paragraphe.</div>
					</p>


	

					<h1 id=<?php echo $ini ; $ini++ ;?>>Balises diverses</h1>

					<p>
						<ul>
							<li><a href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/code"><code class="line_code">&ltcode&gt</code></a> : représente un fragment de code machine. Par défaut, l'agent utilisateur utilise une police à chasse fixe (monospace) afin d'afficher le texte contenu dans cet élément.</li>
							<li><a href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/pre"><code class="line_code">&ltpre&gt</code></a> :  représente du texte préformaté, généralement écrit avec une police à chasse fixe. Le texte est affiché tel quel, les espaces utilisés dans le document HTML seront retranscrits. <br/>
				 			Il est nécessaire d'échapper les caractères '<' en '&amp;lt;' et '>' en '&amp;gt' afin de s'assurer que le code écrit entre les éléments ne soit pas interprété de façon involontaire.</li>
						</ul>
					</p>

				</div>
			
 	
    		</section>


    		<footer>

    		</footer>

    		</div>

    	<div class="column_reseaux">
    		<div id="navright">
                reseaux
        	</div>

        </div>

    </div>
					
					<script src="../js/navright.js"></script>

    </body>
</html>