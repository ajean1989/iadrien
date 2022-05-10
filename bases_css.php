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

    	<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605060-mettez-en-place-le-css#/id/video_Player_1" target="_blank">Infos générales</a></h1>

    	<p>
    		<ul>
    			<li>Insérer une ligne <code class="line_code">&ltlink rel="stylesheet" href="../css/style.css" /&gt</code> dans <code class="line_code">&lthead&gt</code>.</li>
    			<li>Commentaires : <code class="line_code">/* Insérer le commentaire */</code></li>
    			<li><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605060-mettez-en-place-le-css#/id/r-1604993" target="_blank">Attribut <code class="line_code">class</code></a> : Sert à identifier la balise. Il faut la nommer en commençant par une lettre. A réutiliser dans le code css comme suit : 
    			<figure class="block_code">
    				<pre><code>
.nom_class
{
    color: blue;
}
    				</code></pre>
    			</figure></li>
    			<li><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605060-mettez-en-place-le-css#/id/r-1604993" target="_blank">Attribut <code>id</code></a> : Idem que <code>class</code> mais ne s'utilise qu'une fois dans le code. S'appelle comme suit :
    			<figure class="block_code">
    				<pre><code>
#nom_id
{
    /*propriété css*/
}
    				</code></pre>
    			</figure></li> 
    			<li><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605060-mettez-en-place-le-css#/id/r-1610056" target="_blank">Balise universelle <code class="line_code">&ltspan&gt&lt/span&gt</code></a> : c'est une balise de type inline, c'est-à-dire une balise que l'on place au sein d'un paragraphe de texte, pour sélectionner certains mots uniquement.</li>
    			<li><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605060-mettez-en-place-le-css#/id/r-1610056" target="_blank">Balise universelle <code class="line_code">&ltdiv&gt&lt/div&gt</code></a> : c'est une balise de type block, qui entoure un bloc de texte.</li>
    		</ul>
    	</p>

    	
    	<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605060-mettez-en-place-le-css#/id/r-1605059" target="_blank"> Les sélecteurs avancés</a></h1>
    	<p>
    		<ul>
    			<li>Sélection de plusieurs balises :
    				<figure class="block_code">
    					<pre><code>
p, h1
{

}
    				</code></pre>
    			</figure>
    			</li>
    			<li>Sélection de balises précises :
    				<figure class="block_code">
    					<pre><code>
.class
{

}
#id
{

}
    					</code></pre>
    				</figure>
    			</li>
    			<li>Sélecteur universel :
    				<figure class="block_code">
    					<pre><code>
*
{
    /* sélectionne toutes les balises*/
}
    					</code></pre>
    				</figure>
    			</li>
    			<li>A B : une balise contenue dans une autre 
    				<figure class="block_code">
    					<pre><code>
h3 em
{
    /* Sélectionne toutes les balises<code class="line_code">&ltem&gt</code>situées à l'intérieur d'une balise<code class="line_code">&lth3&gt</code>./*
}
    					</code></pre>
    				</figure>
    			</li>
    			<li>A + B : une balise qui en suit une autre :
    				<figure class="block_code">
    					<pre><code>
h3 + p 
{
    /* Sélectionne la première balise<code class="line_code">&ltp&gt</code>située après un titre<code class="line_code">&lth3&gt</code>./*
}
    					</code></pre>
    				</figure>
    			</li>
    			<li>A[attribut] : une balise qui possède un attribut :
    				<figure class="block_code">
    					<pre><code>
a[title]
{
    /* Sélectionne tous les liens<code class="line_code">&lta&gt</code>qui possèdent un attribut<code class="line_code">&lttitle&gt</code>./*
}
    					</code></pre>
    				</figure>
    			</li>
    			<li>A[attribut="Valeur"] : une balise, un attribut et une valeur exacte
    				<figure class="block_code">
    					<pre><code>
a[title="cliquez ici"]
{
    /* Idem, mais l'attribut doit en plus avoir exactement pour valeur « Cliquez ici »./*
 }
    					</code></pre>
    				</figure>
    			</li>
    			<li>A[attribut*="Valeur"] : une balise, un attribut et une valeur
    				<figure class="block_code">
    					<pre><code>
a[title*="ici"]
{
    /* Idem, l'attribut doit cette fois contenir dans sa valeur le mot « ici » (peu importe sa position)./*
}
    					</code></pre>
    				</figure>
    			</li>
    			<li>D'autres sélecteurs existent ! voir <a href="https://www.w3.org/Style/css3-selectors-updates/WD-css3-selectors-20010126.fr.html#selectors" target="_blank">site du W3C</a></li>
    		</ul>
    	</p>

    	<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605329-formatez-du-texte#/id/video_Player_1" target="_blank">
    	Formater du texte</a></h1>
    	
    		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605329-formatez-du-texte#/id/r-1605118" target="blank">La taille</a></h2>
    	
    	<p>
    		Deux solutions :
    		<ul>
    			<li>Indiquer une taille <strong>absolue</strong> : en pixels, en centimètres ou millimètres. Cette méthode est très précise mais il est conseillé de ne l'utiliser que si c'est absolument nécessaire, car on risque d'indiquer une taille trop petite pour certains lecteurs.
    			<figure class="block_code">	
    			<pre><code>
p
{
    font-size: 14px; /* Paragraphes de 14 pixels / px:pixels, cm ou mm */
}
				</code></pre>
				</figure></li>
				<li>Indiquer une taille <strong>relative</strong> : C'est la méthode recommandée car le texte s'adapte alors plus facilement aux préférences de tous les visiteurs.Il y a plusieurs moyens d'indiquer une valeur relative.</li>
			</ul>
		</p>
		<p>
			Il y a plusieurs moyens d'indiquer une valeur relative. Vous pouvez par exemple écrire la taille avec des mots en anglais comme ceux-ci :
			<ul>
				<li><code class="line_code">xx-small</code> : Minuscule</li>
				<li><code class="line_code">x-small</code> : Très petit</li>
				<li><code class="line_code">small</code> : Petit</li>
				<li><code class="line_code">medium</code> : Moyen</li>
				<li><code class="line_code">large</code> : Grand</li>
				<li><code class="line_code">x-large</code> : Très grand</li>
				<li><code class="line_code">xx-large</code> : gigantesque</li>
			</ul>
			On peut aussi indiquer la taille en "em" :
			<ul>
				<li>Si vous écrivez <code class="line_code">1em</code>, le texte a une taille normale.</li>
				<li>Si vous voulez grossir le texte, vous pouvez inscrire une valeur supérieure à 1, comme <code class="line_code">1.3em</code>.</li>
				<li>Si vous voulez réduire le texte, inscrivez une valeur inférieure à 1, comme <code class="line_code">0.8em</code>.</li>
			</ul>
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605329-formatez-du-texte#/id/r-1605200" target="_blank">
		La police</a></h1>

		<p>
			La propriété CSS qui permet d'indiquer la police à utiliser estfont-family.Seulement, pour éviter les problèmes si l'internaute n'a pas la même police que vous, on précise en général plusieurs noms de police, séparés par des virgules :
		</p>
			<figure class="block_code">
				<pre><code>
balise
{
	font-family: police1, police2, police3 ;
}
				</code></pre>
			</figure>
		<p>
			<em>En général, on indique en tout dernier serif ou sans-serif, ce qui correspond à une police par défaut (qui ne s'applique que si aucune autre police n'a été trouvée).<br/>
			Si le nom de la police comporte des espaces, je conseille de l'entourer de guillemets, comme je l'ai fait pour « Arial Black ».</em>
		</p>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605329-formatez-du-texte#/id/r-1610272" target="_blank">Télécharger une police</a></h2>

			<p>
				Attention :
				<ul>
					<li>Il faudra que le navigateur de vos visiteurs télécharge automatiquement le fichier de la police, dont le poids peut atteindre, voire dépasser 1 Mo…</li>
					<li>La plupart des polices sont soumises au droit d'auteur, il n'est donc pas légal de les utiliser sur son site. Heureusement, il existe des sites comme <a href="https://www.fontsquirrel.com/" target="_blank">fontsquirrel.com</a> et <a href="https://www.dafont.com/fr/" target="_blank">dafont.com</a> qui proposent en téléchargement un certain nombre de polices libres de droits. Je recommande en particulier fontsquirrel.com car il permet de télécharger des packs prêts à l'emploi pour CSS 3.</li>
					<li>Il existe plusieurs formats de fichiers de polices et ceux-ci ne fonctionnent pas sur tous les navigateurs.</li>
				</ul>
			</p>

			<p>
				Voici les différents formats de fichiers de polices qui existent et qu'il faut connaître :
				<ul>
					<li><code class="line_code">.ttf</code>:TrueType Font. Fonctionne sur IE9 et tous les autres navigateurs.</li>
					<li><code class="line_code">.eot</code>:Embedded OpenType. Fonctionne sur Internet Explorer uniquement, toutes versions. Ce format est propriétaire, produit par Microsoft.</li>
					<li><code class="line_code">.otf</code>OpenType Font. Ne fonctionne pas sur Internet Explorer.</li>
					<li><code class="line_code">.svg</code>:SVG Font. Le seul format reconnu sur les iPhones et iPads pour le moment.</li>
					<li><code class="line_code">.woff</code>:Web Open Font Format. Nouveau format conçu pour le Web, qui fonctionne sur IE9 et tous les autres navigateurs.</li>
				</ul>
			</p>
			<p>
				En CSS, pour définir une nouvelle police, vous devez la déclarer comme ceci :
			</p>
				<figure class="block_code">
					<pre><code>
@font-face {
	font-family: 'MaPolice';
	src:	url('MaPolice.eot') format('eot');
			url('MaPolice.woff') format('woff');
			url('MaPolice.ttf') format('truetype');
			url('MaPolice.svg') format('svg');
}
					</code></pre>
				</figure>
			<p>
				Le fichier de police (ici MaPolice.eot) doit ici être situé dans le même dossier que le fichier CSS (ou dans un sous-dossier, si vous utilisez un chemin relatif).<br/>
				La section <code class="line_code">@font-face</code> permet de définir un nouveau nom de police qui pourra être utilisé dans le fichier CSS. Ensuite, nous utilisons ce nom de police avec la propriété <code class="line_code">font-family</code>
			</p>

			<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605329-formatez-du-texte#/id/r-1605248" target="_blank">Italique, gras, souligné...</a></h2>

			<figure class="block_code">
				<pre><code>
em
{
	font-style: normal;
	font-style: italic;
	font-weight: bold;
	text-decoration: blink; 		/* clignotant /*
	text-decoration: underline; 	/* souligné /*
	text-decoration: line-through; 	/* barré /*
	text-decoration: overline; 		/* ligne au dessus /*
	text-decoration: none; 			/* normal (par défaut) /*
}
				</code></pre>
			</figure>

			<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605329-formatez-du-texte#/id/r-1605268" target="_blank">L'alignement</a></h2>

			<figure class="block_code">
				<pre><code>
h1
{
	text-align: center; 	/* centré /*
	text-align: left; 		/* texte aligné à gauche (par défaut) /*
	text-align: right; 		/* aligné à droite /*
	text-align: justify; 	/* justifié /*
}
			</code></pre>
		</figure>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605329-formatez-du-texte#/id/r-1605328" target="_blank">Les flottants</a></h2>

		<figure>
			<img src="../images/5646.png" alt="flottant">
		</figure>

		<p>
			Nous allons apprendre ici à faire flotter une image. Voici le code HTML que nous devons taper dans un premier temps :
		</p>
		<figure class="block_code">
			<pre><code>
&ltp&gt
	&ltimg src="flash.gif" class="imageflottante" alt="Image flottante" /&gt 
	Ceci est un texte normal de paragraphe, écrit à la suite de l'image et qui l'habillera car l'image est flottante.
&lt/p&gt
&ltp class="dessous"&gtCe texte est écrit sous l'image flottante.&lt/p&gt
			</code></pre>
		</figure>
		<p>
			<em>Vous devez placer l'élément flottant en premier dans le code HTML. Si vous placez l'image après le paragraphe, l'effet ne fonctionnera pas.</em>
		</p>
		<p>
			Voici le seul bout de code CSS qu'on ait besoin de taper, qui permet de faire flotter l'image à gauche :
		</p>
		<figure class="block_code">
			<pre><code>
.imageflottante
{
	float: left;
	float:right;
}
.dessous
{
	clear: both; /* il existe right, lef, both en fonction du float appelé /*
}
			</code></pre>
		</figure>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605551-ajoutez-de-la-couleur-et-un-fond#/id/r-1605398" target="_blank">Les couleurs</a></h1>

		<figure class="block_code">
			<pre><code>
h1
{
	color: maroon;
	color:#AF2598; */ Couleur hexadécimale /*
	color: rgb(240,96,204); */ couleur rgb /*
}
			</code></pre>
		</figure>

		<a href="http://www.colorpicker.com" target="_blank">http://www.colorpicker.com</a> permet de trouver la valeur hexadécimale d'une couleur très facilement. Ainsi que les plugin <a href="https://addons.mozilla.org/fr/firefox/addon/colorpicker/" target="_blank">ColorPicker</a> pour Firefox et <a href="ColorZilla pour Chrome" target="_blank">ColorZilla</a> pour Chrome.

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605551-ajoutez-de-la-couleur-et-un-fond#/id/r-1605436" target="_blank">Couleur de fond</a></h1>

		<p>
			Pour indiquer la couleur de fond de la page web, il faut travailler sur la balise <code class="line_code">&ltbody&gt</code>. Eh oui, <code class="line_code">&ltbody&gt</code> correspond à l'ensemble de la page web, c'est donc en modifiant sa couleur de fond que l'on changera la couleur d'arrière-plan de la page.
		</p>
		<figure class="block_code">
			<pre><code>
body
{
	background-color: black; /* Le fond sera noir */

	color: white; /* Le texte sera blanc */
}
			</code></pre>
		</figure>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605551-ajoutez-de-la-couleur-et-un-fond#/id/r-1610485" target="_blank">Le CSS et l'héritage</a></h1>

		<p>
			En CSS, si vous appliquez un style à une balise, toutes les balises qui se trouvent à l'intérieur prendront le même style.Si vous dites par la suite que vous voulez vos titres en rouge, ce style aura la priorité et vos titres seront donc en rouge. En revanche, si vous n'indiquez rien de particulier, alors vos titres hériteront de la couleur blanche.
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605551-ajoutez-de-la-couleur-et-un-fond#/id/r-1605514" target="_blank">Images de fond</a></h1>

		<figure class="block_code">
			<pre><code>
body
{
	background-image: url("neige.png"); 	/* url ou nom de fichier si dans le dossier css ou lien relatif au .css */
	background-attachment: fixed; 		/* Fond fixe */
	background-attachment: scroll; 		/* Fond défile avec le texte */
	background-repeat: no-repeat; 		/* image unique */
	background-repeat: repeat-x; 		/* répétée sur la première ligne, horizontalement */
	background-repeat: repeat-y; 		/* répétée sur la première colone, verticalement */
	background-repeat: repeat; 			/* répétée en mosaique (par défaut) */
	background-position : 30px 50px; 	/* Par rapport au coin en haut à gauche */
	background-position : top/bottom/left/ight/center; 
}
			</code></pre>
		</figure>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605551-ajoutez-de-la-couleur-et-un-fond#/id/r-1610569" target="_blank">Combiner les propriétés</a></h2>

		<p>
			Si vous utilisez beaucoup de propriétés en rapport avec le fond (comme c'est le cas sur ce dernier exemple), vous pouvez utiliser une sorte de « super-propriété » appelée <code class="line_code">background</code>dont la valeur peut combiner plusieurs des propriétés vues précédemment :<br/>
				<code class="line_code">background-image,background-repeat,background-attachmentetbackground-position</code>.
		</p>
		<figure class="block_code">
			<pre><code>
body
{
	background: url('soleil.png') fixed no-repeat top right;
}
			</code></pre>
		</figure>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605551-ajoutez-de-la-couleur-et-un-fond#/id/r-1610579" target="_blank">Plusieurs images de fond</a></h2>

		<p>
			Il est possible de donner plusieurs images de fond à un élément. Pour cela, il suffit de séparer les déclarations par une virgule, comme ceci :
		</p>
		<figure class="block_code">
			<pre><code>
body
{
	background: url('soleil.png') fixed no-repeat top right, url('neigne.png') fixed;
}
			</code></pre>
		</figure>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605551-ajoutez-de-la-couleur-et-un-fond#/id/r-1605550" target="_blank">La transparence</a></h1>

		<figure class="block_code">
			<pre><code>
body
{
	opacity: 0.6; /* varie de 0 à 1. 0 = transparent*/
}

body
{
	background-color: rgb(255,0,0,0.5); /* O.5 représente l'opacité de la couleur */
}
			</code></pre>
		</figure>		

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605694-creez-des-bordures-et-des-ombres#/id/r-1605608" target="_blank">Bordure standard</a></h1>

		<p>
			Le CSS vous offre un large choix de bordures pour décorer votre page. De nombreuses propriétés CSS vous permettent de modifier l'apparence de vos bordures : <code class="line_code">border-width</code>,<code class="line_code">border-color</code>,<code class="line_code">border-style</code>…<br />
			Pour aller à l'essentiel, je vous propose ici d'utiliser directement la super-propriétéborderqui regroupe l'ensemble de ces propriétés.<br/>
			Pour <code class="line_code">border</code> on peut utiliser jusqu'à trois valeurs pour modifier l'apparence de la bordure :
			<ul>
				<li>La largeur : en px</li>
				<li>La couleur : hexa ou rgba</li>
				<li>Le type de bordure : 
					<ul>
						<li><code class="line_code">none</code> : Pas de bordure (par défaut)</li>
						<li><code class="line_code">solid</code> : Un trait simple</li>
						<li><code class="line_code">dotted</code> :Pointillés</li>
						<li><code class="line_code">dashed</code> : Tirets</li>
						<li><code class="line_code">double</code> : Bordure double</li>
						<li><code class="line_code">groove</code> : En relief</li>
						<li><code class="line_code">ridge</code> : autre effet de relief</li>
						<li><code class="line_code">inset</code> : Effet 3D enfoncé</li>
						<li><code class="line_code">outset</code> : Effet 3D surélevé</li>
					</ul></li>
			</ul>
		</p>
		<figure class="block_code">
			<pre><code>
h1
{
	border: 3px blue dashed;
}
			</code></pre>
		</figure>
		<figure>
			<img src="../images/343545.png" alt="bordures" />
		</figure>
		<p>
			Si vous voulez mettre des bordures différentes en fonction du côté (haut, bas, gauche ou droite), vous pouvez le faire sans problème. Dans ce cas, vous devrez utiliser ces quatre propriétés :
			<ul>
				<li><code class="line_code">border-top</code> : bordure du haut;</li>
				<li><code class="line_code">border-bottom</code> : bordure du bas;</li>
				<li><code class="line_code">border-left</code> : bordure de gauche;</li>
				<li><code class="line_code">border-right</code> : bordure de droite;</li>
			</ul>
		</p>
		<p>
			<em>Il existe aussi des équivalents pour paramétrer chaque détail de la bordure si vous le désirez :<code class="line_code">border-top-width</code> pour modifier l'épaisseur de la bordure du haut,<code class="line_code">border-top-color</code> pour la couleur du haut, etc.</em>
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605694-creez-des-bordures-et-des-ombres#/id/r-1605639" target="_blank">Bordures arrondies</a></h1>

		<figure class="block_code">
			<pre><code>
p
{
	border-radius: 10px; /* taille de l'arrondi */
	border-radius: 10px 5px 10px 5px; /* 1.en haut à gauche 2.en haut à droite 3.en bas à doite 4.en bas à gauche.
	border-radius: 20px / 10 px; /* courbes elliptiques */
}
			</code></pre>
		</figure>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605694-creez-des-bordures-et-des-ombres#/id/r-1605693" target="_blank">Les ombres</a></h1>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605694-creez-des-bordures-et-des-ombres#/id/r-1610734" target="_blank">Les ombres des boîtes</a></h2>

			<p>
				La propriété <code class="line_code">box-shadow</code> s'applique à tout le bloc et prend quatre valeurs dans l'ordre suivant :
				<ol>
					<li>Le décalage horizontal de l'ombre ;</li>
					<li>Le décalage vertical  de l'ombre ;</li>
					<li>L'adoucissement du dégradé ;</li>
					<li>La couleur de l'ombre ;</li>
				</ol>
			</p>
			<figure class="block_code">
				<pre><code>
p
{
	box-shadow: 6px 6px 0px black inset; /* inset est une option pour effet enfoncé (à lintérieur du cadre) */
}
				</code></pre>
			</figure>
		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605694-creez-des-bordures-et-des-ombres#/id/r-1610743" target="_blank">L'ombre du texte</a></h2>

		<figure class="block_code">
			<pre><code>
p
{
	text-shadow: 2px 2px 4px black; /* même config qu'ombres boîtes */
}
			</code></pre>
		</figure>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605763-creez-des-apparences-dynamiques#/id/video_Player_1" target="_blank">Apparences dynamiques</a></h1>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605763-creez-des-apparences-dynamiques#/id/r-1605726" target="_blank">Au survol</a></h2>

			<p>
				Nous allons découvrir dans ce chapitre plusieurs pseudo-formats CSS. Le premier que je vais vous montrer s'appelle <code class="line_code">:hover</code>. Comme tous les autres pseudo-formats que nous allons voir, c'est une information que l'on rajoute après le nom de la balise
			</p>
			<p>
				<code class="line_code">:hover</code> signifie « survoler ». <code class="line_code">a:hover</code> peut donc se traduire par : « Quand la souris est sur le lien » (quand on pointe dessus).
			</p>
			<figure class="block_code">
				<pre><code>
a /* Liens par défaut (non survolés) */
{
	text-decoration: none;
	color: red;
	font-style: italic;
}

a:hover /* Apparence au survol des liens */
{
	text-decoration: underline;
	color: green;
}
				</code></pre>
			</figure>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605763-creez-des-apparences-dynamiques#/id/r-1605744" target="_blank">Au clic et lors de la sélection</a></h2>

		<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605763-creez-des-apparences-dynamiques#/id/r-1610790" target="blank">Au moment du clic</a></h3>

		<p>
		Le pseudo-format:activepermet d'appliquer un style particulier au moment du clic. En pratique, il n'est utilisé que sur les liens.e lien gardera cette apparence très peu de temps : en fait, le changement intervient lorsque le bouton de la souris est enfoncé. En clair, ce n'est pas forcément toujours bien visible.
		</p>
		<figure class="block_code">
			<pre><code>
a:active 
{
	background-color: #FFC66;
}
			</code></pre>
		</figure>	

		<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605763-creez-des-apparences-dynamiques#/id/r-1610801" target="blank">Lorsque l'élément est sélectionné</a></h3>

		<p>
			Une fois que vous avez cliqué, le lien reste « sélectionné » (il y a une petite bordure en pointillés autour). C'est cela, la sélection. Ce pseudo-format pourra être appliqué à d'autres balises HTML comme les éléments de formulaires.
		</p>
		<figure class="block_code">
			<pre><code>
a:focus /* quand le lien est sélectionné */
{
	background-color: #FFCC66
}
			</code></pre>
		</figure>

		<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605763-creez-des-apparences-dynamiques#/id/r-1605762" target="blank">Lorsque le lien a déjà été  consulté</a></h3>

		<figure class="block_code">	
			<pre><code>
a:visited /* quand le visiteur a déjà vu la page concernée */
{
	color: #AAA
}
			</code></pre>
		</figure>



		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Learn/Getting_started_with_the_web/CSS_basics" target="blank">Les balises en vrac</a></h1>

		<ul>
			<li><a href="https://developer.mozilla.org/fr/docs/Web/CSS/overflow"><code class="line_code">overflow</code></a> : La propriété CSS overflow est une propriété raccourcie qui définit comment gérer le dépassement du contenu d'un élément dans son bloc.</li>
			<li><a href="https://developer.mozilla.org/fr/docs/Web/CSS/white-space"><code class="line_code">white-space</code></a> : La propriété white-space est utilisée pour décrire la façon dont les blancs sont gérés au sein de l'élément.</li>
			<li><a href="https://developer.mozilla.org/fr/docs/Web/CSS/position" taget="blank"><code class="line_code">position</code></a> : définit la façon dont un élément est positionné dans un document. Avec attributs : static ; relative ; absolute ; fixed ; sticky. <br/>
			Utiliser pour fixer un bloc (fixed : L'élément est retiré du flux normal), il est alors fixe par rapport à la page (flexbox ne fonctionne plus). <br/>Sticky pour fixer par rapport à un ancètre (La position de la boîte est calculée en fonction du flux normal du document)</li>
		</ul>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Learn/Getting_started_with_the_web/CSS_basics" target="blank">Liens divers</a></h1>

		<ul>
			<li><a href="https://www.pixelcrea.com/blog/pre-styles-css/">CSS pour la balise pre</a></li>
		</ul>

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