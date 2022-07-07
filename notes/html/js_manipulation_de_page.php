<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Javascript - Manipuler les pages</title>
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

            	<h1 id=<?php echo $ini ; $ini++ ;?>>Manipuler le code HTML, Le DOM.</h1>

            	<p>
				Le DOM, qui signifie Document Object Model (c'est-à-dire "modèle d'objet de document", en français), est une interface de programmation qui est une représentation du HTML d'une page web et qui permet d'accéder aux éléments de cette page web et de les modifier avec le langage JavaScript.
			 	</p>

				<p>
				Il faut voir le DOM comme un arbre où chaque élément peut avoir zéro ou plusieurs enfants, qui peuvent avoir eux-mêmes zéro ou plusieurs enfants, qui peuvent avoir zéro ou plusieurs... 
				</p>

			 	<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-1924301" target="_blank">L'objet <code class="line_code">window</code></a></h2>

			 	<p>
			 		L'objet <code class="line_code">window</code> est ce qu'on appelle un objet global qui représente la fenêtre du navigateur. C'est à partir de cet objet que le JavaScript est exécuté.<br />
			 		Contrairement à ce qui a été dit dans ce cours, <code class="line_code">alert()</code> n'est pas vraiment une fonction. Il s'agit en réalité d'une méthode appartenant à l'objet <code class="line_code">window</code>. Mais l'objet <code class="line_code">window</code> est dit implicite, c'est-à-dire qu'il n'y a généralement pas besoin de le spécifier. Ainsi, ces deux instructions produisent le même effet, à savoir ouvrir une boîte de dialogue :
			 	</p>

			 		<figure class="block_code">
			 			<pre><code>
window.alert('Hello world!');

alert('Hello world!');
						</code></pre>
					</figure>

					<p>
						Puisqu'il n'est pas nécessaire de spécifier l'objetwindow, on ne le fait généralement pas sauf si cela est nécessaire, par exemple si on manipule des frames.<br />
						Lorsque vous déclarez une variable dans le contexte global de votre script, cette variable deviendra en vérité une propriété de l'objet <code class="line_code">window</code>.
					</p>
					<figure class="block_code">
			 			<pre><code>
var text = 'Variable globale !';

(function() { // On utilise une IIFE pour « isoler » du code

    var text = 'Variable locale !';

    alert(text); // Forcément, la variable locale prend le dessus

    alert(window.text); // Mais il est toujours possible d'accéder à la variable globale grâce à l'objet « window »

})();
						</code></pre>
					</figure>

					<p>
						Une dernière chose importante qu'il vous faut mémoriser : toute variable non déclarée (donc utilisée sans jamais écrire le mot-clé <code class="line_code">var</code>) deviendra immédiatement une propriété de l'objet <code class="line_code">window</code>, et ce, quel que soit l'endroit où vous utilisez cette variable ! 
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-1924303" target="_blank">Le <code class="line_code">document</code></a></h2>

					<p>
						L'objet <code class="line_code">document</code> est un sous-objet de <code class="line_code">window</code>, l'un des plus utilisés. Et pour cause, il représente la page Web et plus précisément la balise <code class="line_code">&lthtml&gt</code>. C'est grâce à cet élément-là que nous allons pouvoir accéder aux éléments HTML et les modifier. Voyons donc, dans la sous-partie suivante, comment naviguer dans le document.
					</p>

					<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-2341647" target="_blank">Naviguer dans le document</a></h1>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-2341638" target="_blank">La structure du DOM</a></h2>

					<figure figcaption="Une page web peut être vue comme un arbre">
						<img src="../images/261648.png" alt="structure du DOM"/>
					</figure>

					<p>
						Le schéma est plutôt simple : l'élément <code class="line_code">&lthtml&gt</code> contient deux éléments, appelés <strong>enfants</strong> : <code class="line_code">&lthead&gt et &ltbody&gt</code>. Pour ces deux enfants, <code class="line_code">&lthtml&gt</code> est l'élément <strong>parent</strong>. Chaque élément est appelé <strong>nœud</strong> (node en anglais). L'élément <code class="line_code">&lthead&gt</code> contient lui aussi deux enfants : <code class="line_code">&ltmeta&gt</code> et <code class="line_code">&lttitle&gt</code>. <code class="line_code">&ltmeta&gt</code> ne contient pas d'enfant tandis que <code class="line_code">&lttitle&gt</code> en contient un, qui s’appelle <code class="line_code">#text</code>. Comme son nom l'indique, <code class="line_code">#text</code> est un élément qui contient du texte. Le texte présent dans une page Web est vu par le DOM comme un nœud de type <code class="line_code">#text</code>.
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-2341642" target="_blank">Accéder aux éléments</a></h2>

					<p>
						L'objet <code class="line_code">document</code> possède trois méthodes principales :
					</p>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-2341641" target="_blank"><code class="line_code">getElementById()</code></a></h3>

					<p>
						Cette méthode permet d'accéder à un élément en connaissant son ID qui est simplement l'attribut id de l'élément. Cela fonctionne de cette manière :
					</p>
					<figure class="block_code">
			 			<pre><code>
&ltdiv id="myDiv"&gt
    &ltp&gtUn peu de texte &lta&gtet un lien&lt/a&gt&lt/p&gt
&lt/div&gt

&ltscript&gt
    var div = document.getElementById('myDiv');

    alert(div);
&lt/script&gt
						</code></pre>
					</figure>
					<figure figcaption="Notre div est bien un objet de type HTMLDivElement">
						<img src="../images/htmldivelement.png" alt="fenêtre de résultat" />
					</figure>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-2341641" target="_blank"><code class="line_code">getElementByClassName()</code></a></h3>

					<p>
					Cette méthode fonctionne de la même manière que la précédente, mais fera sa recherche sur la <code class="line_code">class</code> des éléments et retournera la liste des éléments qui correspondent.
					</p>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-1924337" target="_blank"><code class="line_code">getElementsByTagName()</code></a></h3>

					<p>
						Cette méthode permet de récupérer, sous la forme d'un tableau, tous les éléments avec un nom de balise bien précis. Si, dans une page, on veut récupérer tous les <code class="line_code">&ltdiv&gt</code>, il suffit de faire comme ceci :
					</p>
					<figure class="block_code">
			 			<pre><code>
var divs = document.getElementsByTagName('div');

for (var i = 0, c = divs.length ; i < c ; i++) {
    alert('Element n° ' + (i + 1) + ' : ' + divs[i]);
}						</code></pre>
					</figure>

					<p>
						La méthode retourne une collection d'éléments (utilisable de la même manière qu'un tableau). Pour accéder à chaque élément, il est nécessaire de parcourir le tableau avec une petite boucle.<br />Deux petites astuces :
						<ul>
							<li>Cette méthode est accessible sur n'importe quel élément HTML et pas seulement sur l'objet <code class="line_code">document</code>.</li>
							<li>En paramètre de cette méthode vous pouvez mettre une chaîne de caractères contenant un astérisque * qui récupérera tous les éléments HTML contenus dans l'élément ciblé.</li>
						</ul>
					</p>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-1924340" target="_blank"><code class="line_code">getElementsByName()</code></a></h3>

					<p>
						Cette méthode est semblable à <code class="line_code">getElementsByTagName()</code> et permet de ne récupérer que les éléments qui possèdent un attribut <code class="line_code">name</code> que vous spécifiez. L'attribut <code class="line_code">name</code> n'est utilisé qu'au sein des formulaires, et est déprécié depuis la spécification HTML5 dans tout autre élément que celui d'un formulaire.
					</p>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-1924355" target="_blank"><code class="line_code">querySelector()</code> et <code class="line_code">querySelectorAll()</code></a></h3>

					<p>
						Ces deux méthodes ont pour particularité de grandement simplifier la sélection d'éléments dans l'arbre DOM grâce à leur mode de fonctionnement. Ces deux méthodes prennent pour paramètre un seul argument : une chaîne de caractères !<br />
						Cette chaîne de caractères doit être un sélecteur CSS comme ceux que vous utilisez dans vos feuilles de style. Exemple :
					</p>
					<figure class="block_code">
			 			<pre><code>
#menu .item span
 						</code></pre>
					</figure>
					<p>
						Ce sélecteur CSS stipule que l'on souhaite sélectionner les balises de type <code class="line_code">&ltspan&gt</code> contenues dans les classes <code class="line_code">.item</code> elles-mêmes contenues dans un élément dont l'identifiant est <code class="line_code">#menu</code>.<br />
						<code class="line_code">querySelector()</code>, renvoie le premier élément trouvé correspondant au sélecteur CSS, tandis que <code class="line_code">querySelectorAll()</code> va renvoyer tous les éléments (sous forme de tableau) correspondant au sélecteur CSS fourni. Ils renvoient null si aucun élément n'a été trouvé. 
					</p>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-1924355" target="_blank">Le recherche depuis un élément</a></h3>

					<p>
					Il n'y a pas qu'avec <code class="line_code">document</code> que vous pouvez rechercher des éléments. Comme nous l'avons vu au début du chapitre, chaque élément est un objet JavaScript avec ses propriétés et ses fonctions. Et parmi ces dernières, il en existe pour parcourir les enfants et le parent de chaque élément ! 
					<ul>
						<li><code class="line_code">element.children</code> : cette propriété nous retourne la liste des enfants de cet élément ;</li>
						<li><code class="line_code">element.parentElement</code> : cette propriété nous retourne l'élément parent de celui-ci ;</li>
						<li><code class="line_code">element.nextElementSibling</code> / <code class="line_code">element.previousElementSibling</code> : ces propriétés nous permettent de naviguer vers l'élément suivant / précédent de même niveau que notre élément.</li>
					</ul>
					Par exemple, avec le code HTML suivant :
					</p>

					<figure class="block_code">
			 			<pre><code>
						 <div id="parent">
    &ltdiv id="previous"&gtPrécédent&lt/div&gt
    &ltdiv id="main"&gt
        &ltp&gtParagraphe 1&lt/p&gt
        &ltp&gtParagraphe 2&lt/p&gt
    &lt/div&gt
    &ltdiv id="next"&gtSuivant&lt/div&gt
&lt/div&gt
 						</code></pre>
					</figure>

					<p>
					et si l'on considère que nous avons le code JavaScript suivant :
					</p>

					<figure class="block_code">
			 			<pre><code>
const elt = document.getElementById('main'); 						</code></pre>
					</figure>

					<P>
					nous aurons ceci :
					<ul>
						<li><code class="line_code">elt.children</code> nous retournera les éléments de type  p  qui sont les enfants de l'élément <code class="line_code">#main</code></li>
						<li><code class="line_code">elt.parentElement</code> nous retournera la  div  qui a l'id  <code class="line_code">parent</code></li>
						<li><code class="line_code">elt.nextElementSibling</code> nous retournera l'élément qui a l'id </li>next</ul></li>
						<li><code class="line_code">elt.previousElementSibling</code> nous retournera l'élément qui a l'id <code class="line_code">previous</code></li>
					</ul>
					</P>



					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-2341646" target="_blank">L'héritage des propriétés et des méthodes</a></h2>

					<p>
						Nous avons vu qu'un élément <code class="line_code">&ltdiv&gt</code> est un objet <code class="line_code">HTMLDivElement</code>, mais un objet, en JavaScript, peut appartenir à différents groupes. Ainsi, notre <code class="line_code">&ltdiv&gt</code> est un <code class="line_code">HTMLDivElement</code>, qui est un sous-objet d'<code class="line_code">HTMLElement</code> qui est lui-même un sous-objet d'<code class="line_code">Element</code>. <code class="line_code">Element</code> est enfin un sous-objet de <code class="line_code">Node</code>. Ce schéma est plus parlant :
					</p>
					<figure figcaption="Le JavaScript voit les éléments HTML comme étant des objets, cela veut donc dire que chaque élément HTML possède des propriétés et des méthodes. Cependant faites bien attention parce que tous ne possèdent pas les mêmes propriétés et méthodes. Certaines sont néanmoins communes à tous les éléments HTML, car tous les éléments HTML sont d'un même type : le typeNode, qui signifie « nœud » en anglais.">
						<img src="../images/263780.png" alt="shéma objet en javascript" />
					</figure>

					<p>
						L'objet <code class="line_code">Node</code> apporte un certain nombre de propriétés et de méthodes qui pourront être utilisées depuis un de ses sous-objets. En clair, les sous-objets héritent des propriétés et méthodes de leurs objets parents. Voilà donc ce que l'on appelle l'héritage.
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-2341662" target="_blank">Éditer les éléments HTML</a></h2>


					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-2341657" target="_blank">Les attributs</a></h3>

					<p>
						Pour interagir avec les attributs, l'objet <code class="line_code">Element</code> nous fournit deux méthodes, <code class="line_code">getAttribute()</code> et <code class="line_code">setAttribute()</code> permettant respectivement de récupérer et d'éditer un attribut. Le premier paramètre est le nom de l'attribut, et le deuxième, dans le cas de <code class="line_code">setAttribute()</code> uniquement, est la nouvelle valeur à donner à l'attribut. Petit exemple :
					</p>
					<figure class="block_code">
			 			<pre><code>
&ltbody&gt
    &lta id="myLink" href="http://www.un_lien_quelconque.com"&gtUn lien modifié dynamiquement&lt/a&gt

    &ltscript&gt
        var link = document.getElementById('myLink');
        var href = link.getAttribute('href'); // On récupère l'attribut « href »

        alert(href);

        link.setAttribute('href', 'http://www.siteduzero.com'); // On édite l'attribut « href »
    &lt/script&gt
&lt/body&gt
 						</code></pre>
					</figure>

					<p>
						Sinon, pour la plupart des éléments courants comme <code class="line_code">&lta&gt</code>, il est possible d'accéder à un attribut via une propriété. Ainsi, si on veut modifier la destination d'un lien, on peut utiliser la propriété <code class="line_code">href</code>, comme ceci :
					</p>

					<p>
						Il existe aussi <code class="line_code">removeAttribute</code> : voir doc pour info
					</p>

					<figure class="block_code">
			 			<pre><code>
&ltbody&gt
    &lta id="myLink" href="http://www.un_lien_quelconque.com"&gtUn lien modifié dynamiquement&lt/a&gt

    &ltscript&gt
        var link = document.getElementById('myLink');
        var href = link.href;

        alert(href);

        link.href = 'http://www.siteduzero.com';
    &lt/script&gt
&lt/body&gt
 						</code></pre>
					</figure>

					<p>
						C'est cette façon de faire que l'on utilisera majoritairement pour les formulaires : pour récupérer ou modifier la valeur d'un champ, on utilisera la propriété <code class="line_code">value</code>.
					</p>
					<p>
						<div class="em">Attention cependant ! Un attribut auquel on accède par le biais de la méthode getAttribute() renverra la valeur exacte de ce qui est écrit dans le code HTML (sauf après une éventuelle modification) tandis que l'accès par le biais de sa propriété peut entraîner quelques changements. Prenons l'exemple suivant : <figure class="block_code"><pre><code> &lta href="/"&gtRetour à l'accueil du site&lt/a&gt</code></pre></figure>. L'accès à l'attribut<code class="line_code">href</code> avec la méthode <code class="line_code">getAttribute()</code> retournera bien un simple slash tandis que l'accès à la propriété retournera une URL absolue. Si votre nom de domaine est « mon_site.com » vous obtiendrez alors « http://mon_site.com/ ».</div>
					</p>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-2341656" target="_blank">La classe</a></h3>

					<p>
						On peut penser que pour modifier l'attribut <code class="line_code">class</code> d'un élément HTML, il suffit d'utiliser <code class="line_code">element.class</code>. Ce n'est pas possible, car le mot-clé <code class="line_code">class</code> est réservé en JavaScript, bien qu'il n'ait aucune utilité. À la place de <code class="line_code">class</code>, il faudra utiliser <code class="line_code">className</code>.
					</p>

					<figure class="block_code">
			 			<pre><code>
&lthead&gt
    &ltmeta charset="utf-8" /&gt
    &lttitle&gtLe titre de la page&lt/title&gt
    &ltstyle&gt
        .blue {
            background: blue;
            color: white;
        }
    &lt/style&gt
&lt/head&gt

&ltbody&gt
    &ltdiv id="myColoredDiv"&gt
        &ltp&gtUn peu de texte &lta&gtet un lien&lt/a&gt&lt/p&gt
    &lt/div&gt

    &ltscript&gt
        document.getElementById('myColoredDiv').className = 'blue';
    &lt/script&gt
&lt/body&gt
 						</code></pre>
					</figure>
					<p>
						id="myColoreDiv" devient id="blue" pour avoir le style définit plus haut.
					</p>
					<p>
						<div class="em">Toujors dans le même cas, le nom <code class="line_code">for</code> est réservé lui aussi en JavaScript (pour les boucles). Vous ne pouvez donc pas modifier l'attribut HTML <code class="line_code">for</code> d'un <code class="line_code">&ltlabel&gt</code> en écrivant <code class="line_code">element.for</code>, il faudra utiliser <code class="line_code">element.htmlFor</code> à la place.</div>
					</p>
					<p>
						Faites attention : si votre élément comporte plusieurs classes (exemple : <code class="line_code">&lta class="external red u"&gt</code>) et que vous récupérez la classe avec <code class="line_code">className</code>, cette propriété ne retournera pas un tableau avec les différentes classes, mais bien la chaîne « external red u », ce qui n'est pas vraiment le comportement souhaité. Il vous faudra alors couper cette chaîne avec la méthode <code class="line_code">split()</code> pour obtenir un tableau.
					</p>
					<p>
						Vous pouvez aussi vous tourner vers la propriété <code class="line_code">classList</code> qui permet de consulter les classes sous forme d'un tableau et de les manipuler aisément :
					</p>

					<figure class="block_code">
			 			<pre><code>
var div = document.querySelector('div');


div.classList.add('new-class');		// Ajoute une nouvelle classe


div.classList.remove('new-class');  // Retire une classe


div.classList.toggle('toggled-class');  // Retire une classe si elle est présente ou bien l'ajoute si elle est absente

div.classList.contains("nouvelleClasse");   // Retournera false car on vient de la supprimer

div.classList.replace("oldClass", "newClass"): // Remplacera oldClass par newClass si oldClass était présente sur l'élément

// Indique si une classe est présente ou non
if (div.classList.contains('old-class')) {
    alert('La classe .old-class est présente !');
}



// Parcourt et affiche les classes CSS
var result = '';

for (var i = 0; i < div.classList.length; i++) {
    result += '.' + div.classList[i] + '\n';
}

alert(result);
 						</code></pre>
					</figure>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-2341661" target="_blank">Le contenu : <code class="line_code">innerHTML</code></a></h3>

					<h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-2341660" target="_blank">Récupérer du HTML</a></h4>

					<p>
						<code class="line_code">innerHTML</code> permet de récupérer le code HTML enfant d'un élément sous forme de texte. Ainsi, si des balises sont présentes, <code class="line_code">innerHTML</code> les retournera sous forme de texte.
					</p>

					<figure class="block_code" figcaption="Affiche : <p>Un peu de text <a>et un lien</a></p>">
			 			<pre><code>
&ltdiv id="myDiv"&gt
        &ltp&gtUn peu de texte &lta&gtet un lien&lt/a&gt&lt/p&gt
    &lt/div&gt

    &ltscript&gt
        var div = document.getElementById('myDiv');

        alert(div.innerHTML);
    &lt/script&gt
 						</code></pre>
					</figure>

					<h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-1924403" target="_blank">Ajouter ou éditer du HTML</a></h4>

					<p>
						Pour éditer ou ajouter du contenu HTML, il suffit de faire l'inverse, c'est-à-dire de définir un nouveau contenu :
					</p>
					<figure class="block_code">
			 			<pre><code>
document.getElementById('myDiv').innerHTML = '&ltblockquote&gtJe mets une citation à la place du paragraphe&lt/blockquote&gt';
 						</code></pre>
					</figure>
					<figure class="block_code">
			 			<pre><code>
document.getElementById('myDiv').innerHTML += ' et &ltstrong&gtune portion mise en emphase&lt/strong&gt.';
 						</code></pre>
					</figure>
					<p>
						<div class="em">Attention ! Si un jour il vous prend l'envie d'ajouter une balise <code class="line_code">&ltscript&gt</code> à votre page par le biais de la propriété <code class="line_code">innerHTML</code>, sachez que ceci ne fonctionne pas ! Il est toutefois possible de créer cette balise par le biais de la méthode <code class="line_code">createElement()</code> que nous étudierons au prochain chapitre.</div>
					</p>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918282-manipuler-le-code-html-partie-1-2#/id/r-2341673" target="_blank"><code class="line_code">InnerText</code> et <code class="line_code">textContent</code></a></h3>

					<p>
					<ul>
						<li><code class="line_code">innerHTML</code> demande à ce que vous entriez du texte représentant un contenu HTML.</li>
						<li><code class="line_code">textContent</code>, quant à elle, demande un simple texte qui ne sera pas interprété comme étant du HTML.</li>
					</ul>
					</p>
					<figure class="block_code">
			 			<pre><code>
    &ltdiv id="myDiv"&gt
        &ltp&gtUn peu de texte &lta&gtet un lien&lt/a&gt&lt/p&gt
    &lt/div&gt

    &ltscript&gt
        var div = document.getElementById('myDiv');
        var txt = '';

        if (div.textContent) { // « textContent » existe ? Alors on s'en sert !
            txt = div.textContent;
        } else if (div.innerText) { // « innerText » existe ? Alors on doit être sous IE.
            txt = div.innerText + ' [via Internet Explorer]';
        } else { // Si aucun des deux n'existe, cela est sûrement dû au fait qu'il n'y a pas de texte
            txt = ''; // On met une chaîne de caractères vide
        }

        alert(txt);
    &lt/script&gt

						</code></pre>
					</figure>
					<p>
						Cela dit, ce code est quand même très long et redondant. Il est possible de le raccourcir de manière considérable :
					</p>
					<figure class="block_code">
			 			<pre><code>
txt = div.textContent || div.innerText || '';
						</code></pre>
					</figure>

					<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1918410" target="_blank">Naviguer entre les noeuds</a></h1>

					<p>
						Nous avons vu précédemment qu'on utilisait les méthodes <code class="line_code">getElementById()</code> et <code class="line_code">getElementsByTagName()</code> pour accéder aux éléments HTML. Une fois que l'on a atteint un élément, il est possible de se déplacer de façon un peu plus précise, avec toute une série de méthodes et de propriétés que nous allons étudier ici.
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924460">La propriété <code class="line_code">parentNode</code></a></h2>

					<p>
						permet d'accéder à l'élément parent d'un élément. 
					</p>

					<figure class="block_code">
			 			<pre><code>
&ltblockquote&gt
    &ltp id="myP"&gtCeci est un paragraphe !&lt/p&gt
&lt/blockquote&gt
&ltsript&gt
	var paragraph = document.getElementById('myP');
	var blockquote = paragraph.parentNode;
&lt/script&gt
						</code></pre>
					</figure>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924533" target="_blank">Les propriétés <code class="line_code">nodeType</code> et <code class="line_code">nodeName</code></a></h2>

					<p>
						<code class="line_code">nodeType</code> et <code class="line_code">nodeName</code> servent respectivement à vérifier le type d'un nœud et le nom d'un nœud.
					</p>
					<p>
						<code class="line_code">nodeType</code> retourne un nombre, qui correspond à un type de nœud. Voici un tableau qui liste les types possibles, ainsi que leurs numéros (les types courants sont mis en gras) :
						<table>
							<tr>
								<th>Numéro</th>
								<th>Type de noeud</th>
							</tr>
							<tr>
								<td><strong>1</strong></td>
								<td><strong>Noeud élément</strong></td>
							</tr>
							<tr>
								<td><strong>2</strong></td>
								<td><strong>Noeud attribut</strong></td>
							</tr>
							<tr>
								<td><strong>3</strong></td>
								<td><strong>Noeud texte</strong></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Noeud pour passage CDATA</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Noeud pour référence d'entité</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Noeud pour entité</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Noeud pour instruction de traitement</td>
							</tr>
							<tr>
								<td><strong>8</strong></td>
								<td><strong>Noeud pour commentaire</strong></td>
							</tr>
							<tr>
								<td>9</td>
								<td>Noeud document</td>
							</tr>
							<tr>
								<td>10</td>
								<td>Noeud type de document</td>
							</tr>
							<tr>
								<td>11</td>
								<td>Noeud de fragment de document</td>
							</tr>
							<tr>
								<td>12</td>
								<td>Noeud pour notation</td>
							</tr>
						</table>
					</p>

					<p>
						<code class="line_code">nodeName</code>, quant à lui, retourne simplement le nom de l'élément, en majuscule. Il est toutefois conseillé d'utiliser <code class="line_code">toLowerCase()</code> (ou <code class="line_code">toUpperCase()</code>) pour forcer un format de casse et ainsi éviter les mauvaises surprises.
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924565" target="_blank">Les propriétés <code class="line_code">firstChild</code> et <code class="line_code">lastChild</code></a></h2>

					<p>
						Comme leur nom le laisse présager, <code class="line_code">firstChild</code> et <code class="line_code">lastChild</code> servent respectivement à accéder au premier et au dernier enfant d'un nœud.
					</p>
					<figure class="block_code" figcaption="On récupére le texte du premier enfant, et le texte contenu dans l'élément<strong>">
			 			<pre><code>
 &ltdiv&gt
    &ltp id="myP"&gtUn peu de texte, &lta&gtun lien&lt/a&gt et &ltstrong&gtune portion en emphase&lt/strong&gt&lt/p&gt
 &lt/div&gt
						</code></pre>
					</figure>
					<figure figcaption='<p> id="myP">Texte, <a>un lien</a> et <strong>important</strong></p>'>
						<img src='../images/274198.png' alt="schéma de myP" />
					</figure>
					<p>
						Le premier enfant de <code class="line_code">&ltp&gt</code> est un nœud textuel, alors que le dernier enfant est un élément <code class="line_code">&ltstrong&gt</code>(Cela se lit en ligne !).
					</p>
					<p>
						<div class='em'>Dans le cas où vous ne souhaiteriez récupérer que les enfants qui sont considérés comme des éléments HTML (et donc éviter les nœuds <code class="line_code">#text</code> par exemple), sachez qu'il existe les propriétés <code class="line_code">firstElementChild</code> et <code class="line_code">lastElementChild</code>. Ainsi, dans l'exemple précédent, la propriété <code class="line_code">firstElementChild</code> renverrait l'élément <code class="line_code">&lta&gt</code>.</div>
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924550" target="_blank">Les propréités <code class="line_code">nodeValue</code> et <code class="line_code">data</code></a></h2>

					<p>
						Les deux servent à récupérer le texte qui se trouve dans un noeud.
					</p>

					<figure class="block_code" figcaption="On récupére le texte du premier enfant, et le texte contenu dans l'élément<strong>">
			 			<pre><code>
var paragraph = document.getElementById('myP');
var first = paragraph.firstChild;
var last = paragraph.lastChild;

alert(first.nodeValue);
alert(last.firstChild.data);
						</code></pre>
					</figure>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924554">La propriété <code class="line_code">childNodes</code></a></h2>

					<p>
						La propriété <code class="line_code">childNodes</code> retourne un tableau contenant la liste des enfants d'un élément.
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924564" target="_blank">Les propriétés <code class="line_code">nextSibling</code> et <code class="line_code">previousSibling</code></a></h2>

					<p>
						<code class="line_code">nextSibling</code> et <code class="line_code">previousSibling</code> sont deux propriétés qui permettent d'accéder respectivement au nœud (sur la ligne) suivant et au nœud précédent.<br />
						Avec ça, il est même possible de parcourir les enfants d'un élément, en utilisant une bouclewhile:
					</p>
					<p>
						<div class='em'>Tout comme pour <code class="line_code">firstChild</code> et <code class="line_code">lastChild</code>, sachez qu'il existe les propriétés <code class="line_code">nextElementSibling</code> et <code class="line_code">previousElementSibling</code> qui permettent, elles aussi, de ne récupérer que les éléments HTML.</div>
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924579" target="_blank">Attention aux noeuds vides</a></h2>

					<p>
						les espaces entre les éléments tout comme les retours à la ligne sont considérés comme des nœuds textuels (enfin, cela dépend des navigateurs) !<br />
						Heureusement, il existe une solution à ce problème ! Les attributs <code class="line_code">firstElementChild</code>, <code class="line_code">lastElementChild</code>, <code class="line_code">nextElementSibling</code> et <code class="line_code">previousElementSibling</code> ne retournent que des éléments HTML et permettent donc d'ignorer les nœuds textuels. Ils s'utilisent exactement de la même manière que les attributs de base (<code class="line_code">firstChild</code>, <code class="line_code">lastChild</code>, etc.). 
					</p>

					<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1918468" target="_blank">Créer et insérer des éléments</a></h1>

					<p>
						Avec le DOM, l'ajout d'un élément HTML se fait en trois temps :
						<ol>
							<li>On crée l'élément ;</li>
							<li>On lui affecte des attributs ;</li>
							<li>On l'insère dans le document, et ce n'est qu'à ce moment-là qu'il sera « ajouté ».</li>
						</ol>
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924593" target="_blank">Création de l'élément</a></h2>

					<p>
						La création d'un élément se fait avec la méthode <code class="line_code">createElement()</code>, un sous-objet de l'objet racine, c'est-à-dire <code class="line_code">document</code> dans la majorité des cas :
					</p>

					<figure class="block_code">
			 			<pre><code>
var newLink = document.createElement('a');
						</code></pre>
					</figure>
					<p>
						<div class='em'>Si vous travaillez dans une page Web, l'élément racine sera toujours <code class="line_code">document</code>, sauf dans le cas des frames. La création d'éléments au sein de fichiers XML sera abordée plus tard.</div>
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577491-modifiez-le-dom#/id/r-5591357" target="_blank">Supprimez et remplacez des éléments</a></h2>

					<p>
					Il existe les fonctions <code class="line_code">removeChild</code> et <code class="line_code">replaceChild</code>, afin de respectivement supprimer et remplacer un élément.
					</p>

					<figure class="block_code">
			 			<pre><code>
						 const newElt = document.createElement("div");
let elt = document.getElementById("main");
elt.appendChild(newElt);

elt.removeChild(newElt);    // Supprime l'élément newElt de l'élément elt
elt.replaceChild(document.createElement("article"), newElt);    // Remplace l'élément newElt par un nouvel élément de type article
						</code></pre>
					</figure>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924596" target="_blank">Affectation des attributs</a></h2>

					<p>
						Ici, c'est comme nous avons vu précédemment : on définit les attributs, soit avec <code class="line_code">setAttribute()</code>, soit directement avec les propriétés adéquates.
					</p>


					<figure class="block_code">
			 			<pre><code>
newLink.id    = 'sdz_link';
newLink.href  = 'http://www.siteduzero.com';
newLink.title = 'Découvrez le Site du Zéro !';
newLink.setAttribute('tabindex', '10');
						</code></pre>
					</figure>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924610" target="_blank">Insertion de l'élément</a></h2>

					<p>
						On utilise la méthode <code class="line_code">appendChild()</code> pour insérer l'élément. Append child signifie « ajouter un enfant », ce qui signifie qu'il nous faut connaître l'élément auquel on va ajouter l'élément créé. 
					</p>
					<figure class="block_code">
			 			<pre><code>
&ltdiv&gt
    &ltp id="myP"&gtUn peu de texte &lta&gtet un lien&lt/a&gt&lt/p&gt
&lt/div&gt
						</code></pre>
					</figure>
					<p>
						On va ajouter notre élément <code class="line_code">&lta&gt</code> dans l'élément &ltp&gt portant l'ID <code class="line_code">myP</code>. Pour ce faire, il suffit de récupérer cet élément, et d'ajouter notre élément <code class="line_code">&lta&gt</code> via <code class="line_code">appendChild()</code>:
					</p>
					<figure class="block_code">
			 			<pre><code>
document.getElementById('myP').appendChild(newLink);
						</code></pre>
					</figure>
					<figure>
						<img src="../images/273122.png" alt='schéma nouvelle enfant'>
					</figure>
					<p>
						<code class="line_code">appendChild()</code> insérera toujours l'élément en tant que dernier enfant, ce qui n'est pas toujours très pratique. Nous verrons plus tard comment insérer un élément avant ou après un enfant donné.
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924636" target="_blank">Ajouter des noeuds textuels</a></h2>

					<p>
						La méthode <code class="line_code">createTextNode()</code> sert à créer un nœud textuel (de type <code class="line_code">#text</code>) qu'il nous suffira d'ajouter à notre élément fraîchement inséré, comme ceci :
					</p>
					<figure class="block_code">
			 			<pre><code>
var newLinkText = document.createTextNode("Le Site du Zéro");

newLink.appendChild(newLinkText);
						</code></pre>
					</figure>

					<p>
						Il y a quelque chose à savoir : le fait d'insérer via <code class="line_code">appendChild()</code> n'a aucune incidence sur l'ordre d’exécution des instructions. Cela veut donc dire que l'on peut travailler sur les éléments HTML et les nœuds textuels sans qu'ils soient au préalable insérés dans le document.
					</p>
					<p>
						<code class="line_code">appendChild()</code> retourne une référence (voir plus loin pour plus de détails) pointant sur l'objet qui vient d'être inséré. Cela peut servir dans le cas où vous n'avez pas déclaré de variable intermédiaire lors du processus de création de votre élément. 
					</p>

					<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1918482" target="_blank">Notions sur les références</a></h1>

					<p>
						En JavaScript et comme dans beaucoup de langages, le contenu des variables est « passé par valeur ». C'est le fait que deux valeurs soient distinctes sans liens entres elles.
					</p>
					<figure class="block_code">
			 			<pre><code>
var nick1 = 'Clarisse';
var nick2 = nick1;
						</code></pre>
					</figure>
					<p>
						Si on modifie la valeur denick2, la valeur denick1reste inchangée : normal, les deux variables sont bien distinctes.
					</p>
					<p>
						Outre le « passage par valeur », le JavaScript possède un « passage par référence ». En fait, quand une variable est créée, sa valeur est mise en mémoire par l'ordinateur. Pour pouvoir retrouver cette valeur, elle est associée à une adresse que seul l'ordinateur connaît et manipule (on ne s'en occupe pas). Quand on passe une valeur par référence, on transmet l'adresse de la valeur, ce qui va permettre d'avoir deux variables qui pointent sur une même valeur ! 
					</p>
					<p>
						les objets du DOM sont toujours accessibles par référence, et c'est la raison pour laquelle ce code ne fonctionne pas :
					</p>
					<figure class="block_code">
			 			<pre><code>
var newDiv1 = document.createElement('div');
var newDiv2 = newDiv1; // On tente de copier le &ltdiv&gt
						</code></pre>
					</figure>
					<p>
						<code class="line_code">newDiv2</code> contient une référence qui pointe vers le même <code class="line_code">&ltdiv&gt</code> que <code class="line_code">newDiv1</code>. <br/>
						Mais comment dupliquer un élément alors ? Eh bien il faut le cloner, et c'est ce que nous allons voir maintenant !
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924656" target="_blank">Cloner un élément</a></h2>

					<p>
						<code class="line_code">cloneNode()</code>. Cette méthode requiert un paramètre booléen (<code class="line_code">true</code> ou <code class="line_code">false</code>) : si vous désirez cloner le nœud avec (<code class="line_code">true</code>) ou sans (<code class="line_code">false</code>) ses enfants et ses différents attributs.
					</p>

					<figure class="block_code">
			 			<pre><code>
// On va cloner un élément créé :
var hr1 = document.createElement('hr');
var hr2 = hr1.cloneNode(false); // Il n'a pas d'enfants…

// Ici, on clone un élément existant :
var paragraph1 = document.getElementById('myP');
var paragraph2 = paragraph1.cloneNode(true);

// Et attention, l'élément est cloné, mais pas « inséré » tant que l'on n'a pas appelé appendChild() :
paragraph1.parentNode.appendChild(paragraph2);
						</code></pre>
					</figure>
					<p>
						<div class="em">la méthode <code class="line_code">cloneNode()</code> ne copie malheureusement pas les événements associés et créés avec le DOM (avec <code class="line_code">addEventListener()</code>), même avec un paramètre à <code class="line_code">true</code>. Pensez bien à cela !</div>
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924661" target="_blank">Remplacer un élément par un autre</a></h2>

					<p>
						<code class="line_code">replaceChild()</code> : Cette méthode accepte deux paramètres : le premier est le nouvel élément, et le deuxième est l'élément à remplacer. Tout comme <code class="line_code">cloneNode()</code>, cette méthode s'utilise sur tous les types de nœuds (éléments, nœuds textuels, etc.).
					</p>
					<figure class="block_code">
			 			<pre><code>
&ltdiv&gt
    &ltp id="myP"&gtUn peu de texte &lta&gtet un lien&lt/a&gt&lt/p&gt
&lt/div&gt

&ltscript&gt
    var link = document.querySelector('a');
    var newLabel = document.createTextNode('et un hyperlien');

    link.replaceChild(newLabel, link.firstChild);
&lt/script&gt
						</code></pre>
					</figure>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924668" target="_blank">Supprimer un élément</a></h2>

					<p>
						<code class="line_code">removeChild()</code> : Cette méthode prend en paramètre le nœud enfant à retirer. 
					</p>
					<p>
						À noter que la méthoderemoveChild()retourne l'élément supprimé, ce qui veut dire qu'il est parfaitement possible de supprimer un élément HTML pour ensuite le réintégrer où on le souhaite dans le DOM.
					</p>
					<figure class="block_code">
			 			<pre><code>
var link = document.querySelector('a');

var oldLink = link.parentNode.removeChild(link); // On supprime l'élément et on le garde en stock

document.body.appendChild(oldLink); // On réintègre ensuite l'élément supprimé où on veut et quand on veut
						</code></pre>
					</figure>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924671" target="_blank">Vérifier la présence d'éléments enfants</a></h2>

					<p>
						<code class="line_code">hasChildNodes()</code>. Il suffit d'utiliser cette méthode sur l'élément de votre choix ; si cet élément possède au moins un enfant, la méthode renverra <code class="line_code">true</code>.
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924677" target="_blank">Insérer à la bonne place</a></h2>

					<p>
						<code class="line_code">insertBefore()</code> permet d'insérer un élément avant un autre. Elle reçoit deux paramètres :
						<ol>
							<li>L'élément à insérer.</li>
							<li>L'élément avant lequel l'élément va être inséré.</li>
						</ol>
					</p>
					<p>
						<div class='em'>Comme pour <code class="line_code">appendChild()</code>, cette méthode s'applique sur l'élément parent.</div>
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918600-manipuler-le-code-html-partie-2-2#/id/r-1924686" target="_blank">Une bonne astuce : <code class="line_code">insertAfter()</code></a></h2>

					<p>
						Le JavaScript met à disposition <code class="line_code">insertBefore()</code>, mais pas <code class="line_code">insertAfter()</code>. C'est dommage car, bien que l'on puisse s'en passer, cela est parfois assez utile. Qu'à cela ne tienne, créons donc une telle fonction.
					</p>
					<figure class="block_code">
			 			<pre><code>
function insertAfter(newElement, afterElement) {
    var parent = afterElement.parentNode;
	
    if (parent.lastChild === afterElement) { // Si le dernier élément est le même que l'élément après lequel on veut insérer, il suffit de faire appendChild()
        parent.appendChild(newElement);
    } else { // Dans le cas contraire, on fait un insertBefore() sur l'élément suivant
        parent.insertBefore(newElement, afterElement.nextSibling);
    }
}
						</code></pre>
					</figure>

					<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1918754" target="_blank">Les événements</a></h1>

					<p>
						Les événements permettent de déclencher une fonction selon qu'une action s'est produite ou non. Par exemple, on peut faire apparaître une fenêtre <code class="line_code">alert()</code> lorsque l'utilisateur survole une zone d'une page Web.
					</p>

					<p>
					Un événement en JavaScript est représenté par un nom (<code class="line_code">click</code>,  <code class="line_code">mousemove</code> ...) et une fonction que l'on nomme une <code class="line_code">callback</code>. Un événement est par défaut propagé, c'est-à-dire que si nous n'indiquons pas à l'événement que nous le traitons, il sera transmis à l'élément parent, et ainsi de suite jusqu'à l'élément racine.
					</p>

					<p>
					Cette fonction <code class="line_code">callback</code>, c'est nous qui allons la spécifier. Elle sera appelée à chaque fois que l'action que l'on désire suivre est exécutée. Cela signifie que si l'on désire suivre le clic sur un élément, notre fonction sera appelée à chaque fois que l'utilisateur cliquera sur cet élément. 
					</p>

					


					<p>
						Voici la liste des événements principaux, ainsi que les actions à effectuer pour qu'ils se déclenchent :
						<table>
							<tr>
								<th>Nom de l'événement</th>
								<th>Action pour le déclencher</th>
							</tr>
							<tr>
								<td><code class="line_code">click</code></td>
								<td>Cliquer (appuyer puis relâcher) sur l'élément</td>
							</tr>
							<tr>
								<td><code class="line_code">dblclick</code></td>
								<td>Double-cliquer sur l'élément</td>
							</tr>
							<tr>
								<td><code class="line_code">mouseover</code></td>
								<td>Faire entrer le curseur sur l'élément</td>
							</tr>
							<tr>
								<td><code class="line_code">mouseout</code></td>
								<td>Faire sortir le curseur de l'élément</td>
							</tr>
							<tr>
								<td><code class="line_code">mousedown</code></td>
								<td>Appuyer (sans relâcher) sur le bouton gauche de la souris sur l'élément</td>
							</tr>
							<tr>
								<td><code class="line_code">mouseup</code></td>
								<td>Relâcher le bouton gauche de la souris sur l'élément</td>
							</tr>
							<tr>
								<td><code class="line_code">keydown</code></td>
								<td>Appuyer (sans relâcher) sur une touche de clavier sur l'élément</td>
							</tr>
							<tr>
								<td><code class="line_code">keyup</code></td>
								<td>Relâcher une touche de clavier sur l'élément</td>
							</tr>
							<tr>
								<td><code class="line_code">keypress</code></td>
								<td>Frapper (appuyer puis relâcher) une touche de clavier sur l'élément</td>
							</tr>
							<tr>
								<td><code class="line_code">focus</code></td>
								<td>« Cibler » l'élément</td>
							</tr>
							<tr>
								<td><code class="line_code">blur</code></td>
								<td>Annuler le « ciblage » de l'élément</td>
							</tr>
							<tr>
								<td><code class="line_code">change</code></td>
								<td>Changer la valeur d'un élément spécifique aux formulaires (<code class="line_code">input</code>, <code class="line_code">checkbox</code>, etc.)</td>
							</tr>
							<tr>
								<td><code class="line_code">input</code></td>
								<td>Taper un caractère dans un champ de texte (son support n'est pas complet sur tous les navigateurs)</td>
							</tr>
							<tr>
								<td><code class="line_code">select</code></td>
								<td>Sélectionner le contenu d'un champ de texte (<code class="line_code">input</code>, <code class="line_code">textarea</code>, etc.)</td>
							</tr>
							<tr>
								<td><code class="line_code">click</code></td>
								<td>Cliquer (appuyer puis relâcher) sur l'élément</td>
							</tr>
						</table>
						Il existe aussi deux événements spécifiques à l'élément <code class="line_code">&ltform&gt</code>, que voici :
						<table>
							<tr>
								<th>Nom de l'événement</th>
								<th>Action pour le déclencher</th>
							</tr>
							<tr>
								<td><code class="line_code">submit</code></td>
								<td>Envoyer le formulaire</td>
							</tr>
							<tr>
								<td><code class="line_code">reset</code></td>
								<td>Réinitialiser le formulaire</td>
							</tr>
						</table>

						<p>
							Voici la liste des événement <a href="https://developer.mozilla.org/fr/docs/Web/Events" target="blank">ici</a>
						</p>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1924872" target="_blank">Le focus</a></h2>

						<p>
							Le focus définit ce qui peut être appelé le « ciblage » d'un élément. Lorsqu'un élément est ciblé, il va recevoir tous les événements de votre clavier. 
						</p>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1924916" target="_blank">Les événements sans le DOM</a></h2>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1918834" target="_blank">Les événements au travers du DOM</a></h2>

						<p>
							nous allons passer à leur utilisation au travers de l'interface implémentée par Netscape que l'on appelle le DOM-0 puis au standard de base actuel : le DOM-2.
						</p>

						<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1924934" target="_blank">Le DOM-0 (désuet)</a></h2>

						<p>
							Cette interface est vieille mais n'est pas forcément dénuée d'intérêt. Elle reste très pratique pour créer des événements et peut parfois être préférée au DOM-2.
						</p>

						<p>
							Commençons par créer un simple code avec un événement <code class="line_code">click</code> :
						</p>
						<figure class="block_code">
			 			<pre><code>
&ltspan id="clickme"&gtCliquez-moi !&lt/span&gt

&ltscript&gt

    var element = document.getElementById('clickme');

    element.onclick = function() {
        alert("Vous m'avez cliqué !");
    };

&lt/script&gt
						</code></pre>
					</figure>
					<p>
						Chaque événement standard possède donc une propriété dont le nom est précédé par les deux lettres « on ». Cette propriété prend soit le nom d'une fonction, soit une fonction anonyme. Bref, dans tous les cas, il faut lui fournir une fonction qui contiendra le code à exécuter en cas de déclenchement de l'événement. <br />
						Concernant la suppression d'un événement avec le DOM-0, il suffit tout simplement de lui attribuer une fonction anonyme vide :
					</p>
					<figure class="block_code">
			 			<pre><code>
element.onclick = function() {};
						</code></pre>
					</figure>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1924977" target="_blank">Le DOM-2 (Old version de note, voir next chap)</a></h2>

					<p>
						En ce qui concerne le DOM-0, il a deux problèmes majeurs : il est vieux, et il ne permet pas de créer plusieurs fois le même événement.<br />
						Le DOM-2, lui, permet la création multiple d'un même événement et gère aussi l'objet <code class="line_code">Event</code>. 
					</p>
					<p>
						Voici un exemple avec l'événement <code class="line_code">click</code> :
					</p>
					<figure class="block_code">
			 			<pre><code>
&ltspan id="clickme"&gtCliquez-moi !&lt/span&gt
&ltscript&gt
    var element = document.getElementById('clickme');

    element.addEventListener('click', function() {
        alert("Vous m'avez cliqué !");
    });
&lt/script&gt
						</code></pre>
					</figure>

					<p>
						Concrètement, qu'est-ce qui change par rapport au DOM-0 ? Alors tout d'abord nous n'utilisons plus une propriété mais une méthode nommée <code class="line_code">addEventListener()</code>, et qui prend trois paramètres (bien que nous n'en ayons spécifié que deux) :
						<ul>
							<li>Le nom de l'événement (sans les lettres « on ») ;</li>
							<li>La fonction à exécuter ;</li>
							<li>Un booléen optionnel pour spécifier si l'on souhaite utiliser la phase de capture ou bien celle de bouillonnement. Nous expliquerons ce concept un peu plus tard dans ce chapitre.</li>
						</ul>
					</p>
					<p>
						Comme indiqué plus haut, le DOM-2 permet la création multiple d'événements identiques pour un même élément, ainsi, vous pouvez très bien faire ceci :
					</p>
					<figure class="block_code">
			 			<pre><code>
&ltspan id="clickme"&gtCliquez-moi !&lt/span&gt

&ltscript&gt
    var element = document.getElementById('clickme');

    // Premier événement click
    element.addEventListener('click', function() {
        alert("Et de un !");
    });
  
    // Deuxième événement click
    element.addEventListener('click', function() {
        alert("Et de deux !");
    });
&lt/script&gt
						</code></pre>
					</figure>
					<p>
						Si vous avez exécuté ce code, vous avez peut-être eu les événements déclenchés dans l'ordre de création, cependant ce ne sera pas forcément le cas à chaque essai. En effet, l'ordre de déclenchement est un peu aléatoire…
					</p>
					<p>
						Venons-en maintenant à la suppression des événements ! Celle-ci s'opère avec la méthode <code class="line_code">removeEventListener()</code> et se fait de manière très simple :
					</p>
					<figure class="block_code">
			 			<pre><code>
element.addEventListener('click', myFunction); // On crée l'événement

element.removeEventListener('click', myFunction); // On supprime l'événement en lui repassant les mêmes paramètres
						</code></pre>
					</figure>
					<p>
						Toute suppression d'événement avec le DOM-2 se fait avec les mêmes paramètres utilisés lors de sa création ! Cependant, cela ne fonctionne pas aussi facilement avec les fonctions anonymes ! Tout événement DOM-2 créé avec une fonction anonyme est particulièrement complexe à supprimer, car il faut posséder une référence vers la fonction concernée, ce qui n'est généralement pas le cas avec une fonction anonyme.
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5578156-ecoutez-des-evenements#/id/r-5591279" target="_blank">Écoutez des événements</a></h2>

					<p>
					Afin de réagir lors d'un clic sur un élément, il faut écouter cet événement. Pour cela, nous avons à notre disposition la fonction <code class="line_code">addEventListener()</code>. Cette fonction nous permet d'écouter tous types d'événements (pas que le clic).
					</p>

					<div class="em">Réagir à un événement, c'est faire une action lorsque celui-ci se déclenche. Écouter, c'est vouloir être averti quand l'événement se déclenche.</div>

					<p>
					<code class="line_code">addEventListener(&ltevent&gt, &ltcallback&gt)</code> prend en paramètres le nom de l'événement à écouter (voici la liste des événements existants), et la fonction à appeler dès que l'événement est exécuté.
					</p>		

					<p>
						Admettons que vous vouliez réagir au clic sur un lien. Vous allez tout d'abord devoir récupérer l'élément qui correspond à votre lien, comme nous l'avons vu précédemment. Ensuite, vous allez appeler la méthode <code class="line_code">element.addEventListener('click', onClick);</code> directement sur cet élément.
					</p>

					<p>
					<code class="line_code">onClick</code> correspond à la fonction que vous allez définir et qui sera appelée à chaque fois que l'utilisateur cliquera sur votre lien. C'est donc vous qui choisissez ce que vous souhaitez faire : récupérer des informations depuis un serveur, afficher un message, etc. Le comportement par défaut de l'élément actionné sera tout de même exécuté. Ainsi, s'il y a un clic sur un lien, vous pouvez, dans votre fonction de callback, faire en sorte d'afficher un message.
					</p>

					<p>
					Le navigateur va quand même ouvrir le lien. De la même manière, si le clic se fait sur un bouton de validation de formulaire, celui-ci sera envoyé. Il est possible de désactiver ce comportement par défaut, c'est ce que nous allons voir juste après.
					</p>

					<figure class="block_code">
			 			<pre><code>
const elt = document.getElementById('mon-lien');    // On récupère l'élément sur lequel on veut détecter le clic
elt.addEventListener('click', function() {          // On écoute l'événement click
    elt.innerHTML = "C'est cliqué !";               // On change le contenu de notre élément pour afficher "C'est cliqué !"
});
						</code></pre>
					</figure>

					<p>
						Comme vous avez pu le voir si vous avez essayé de réagir aux clics sur votre lien, votre fonction est bien appelée, mais la page change. En effet, il s'agit d'un lien, et dès que l'on clique sur un lien, le navigateur nous redirige sur la page vers laquelle il pointe.
					</p>

					<p>
					En appelant la fonction <code class="line_code">preventDefault()</code> dans votre callback, vous demandez au gestionnaire des événements de ne pas exécuter le comportement par défaut de votre élément (qui est la redirection vers une autre page pour un lien). Et cela marche aussi pour d'autres types d'éléments que le lien. Cette même fonction exécutée pendant un événement  <code class="line_code">onsubmit</code> sur un formulaire empêchera le formulaire de s'envoyer au serveur, par exemple.
					</p>

					<p>
					Si on reprend notre exemple précédent, voici comment empêcher que notre navigateur ne change de page quand on clique sur le lien :
					</p>

					<figure class="block_code">
			 			<pre><code>
const elt = document.getElementById('mon-lien');    // On récupère l'élément sur lequel on veut détecter le clic
elt.addEventListener('click', function(event) {     // On écoute l'événement click, notre callback prend un paramètre que nous avons appelé event ici
    event.preventDefault();                         // On utilise la fonction preventDefault de notre objet event pour empêcher le comportement par défaut de cet élément lors du clic de la souris
});
						</code></pre>
					</figure>

					<p>
					<code class="line_code">stopPropagation()</code> est une fonction de l'objet que votre fonction reçoit en paramètre. Son rôle est par contre très différent, car il nous permet d'empêcher la propagation de l'événement vers son parent. En effet, lorsqu'un événement est déclenché, il est d'abord reçu par l'élément cible, mais il est ensuite remonté vers les éléments parents qui sont aussi dans la cible.
					</p>

					<p>
					Admettons par exemple que nous ayons un élément pour lequel nous voulons afficher un message lorsque l'on clique dessus. Mais à l'intérieur de cet élément, nous avons aussi un autre élément qui doit nous afficher un autre message lorsque l'on clique dessus.<br/>
					Par défaut, si nous cliquons dans l'élément intérieur, le message va s'afficher, puis notre élément parent va lui aussi recevoir l'événement du clic et encore changer le message. Pour éviter cela, nous devons stopper la propagation de l'événement.</p>

					<p>
					Ainsi, dans l'élément intérieur, nous ferons ceci :</p>

					<figure class="block_code">
			 			<pre><code>
elementInterieur.addEventListener('click', function(event) {
    event.stopPropagation();
    elementAvecMessage.innerHTML = "Message de l'élément intérieur";
});
						</code></pre>
					</figure>

					<p>
					De cette manière, lorsque l'on clique sur l'élément intérieur, l'élément parent ne recevra plus le clic, et seul l'élément intérieur affichera son message. Par contre, en cliquant directement dans l'élément parent, sans être dans l'élément intérieur, l'élément parent recevra bien l'événement et affichera bien son message.
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5578181-recuperez-des-donnees-utilisateurs-avec-les-evenements#/id/r-7200022" target="_blank">Récupérez des données utilisateurs avec les événements</a></h2>

					<p>
					Comme nous l'avons vu brièvement dans le chapitre précédent, lorsque l'on reçoit un événement, notre fonction callback reçoit un paramètre contenant des informations sur cet événement. Ces informations sont reçues sous la forme d'un objet qui dépendra du type d'événement reçu.
					</p>

					<p>
					De plus, chaque événement implémente l'objet <code class="line_code">Event</code>. C'est-à-dire que chaque événement a au minimum les mêmes fonctions et propriétés que l'objet  Event . Cela comprend entre autres :
					<ul>
						<li><code class="line_code">preventDefault()</code> : empêche l'exécution du comportement par défaut de l'élément quand il reçoit l'événement ;</li>
						<li><code class="line_code">stopPropagation()</code> : empêche la propagation de l'événement vers d'autres éléments ;</li>
						<li>D'autres propriétés en fonction du type d'événement.</li>
						<li>Pour avoir une liste exhaustive de ce que propose l'interface  Event , vous pouvez aller voir sa <a href="https://developer.mozilla.org/fr/docs/Web/API/Event" taget="blank">documentation</a>.</li>
					</ul>
					</p>




					
					

	




			
					


					



















					

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1924995" target="_blank">Les phases de capture et de bouillonnement</a></h2>

					<p>
						Ces deux phases sont deux étapes distinctes de l'exécution d'un événement. La première, la <strong>capture</strong> (capture en anglais), s'exécute avant le déclenchement de l'événement, tandis que la deuxième, le <strong>bouillonnement</strong> (bubbling en anglais), s'exécute après que l'événement a été déclenché. Toutes deux permettent de définir le sens de propagation des événements.<br />
						Pour expliquer cela, prenons un exemple avec ces deux éléments HTML :
					</p>
					<figure class="block_code">
			 			<pre><code>
&ltdiv&gt
    &ltspan&gtDu texte &lt/span&gt
&lt/div&gt
						</code></pre>
					</figure>
					<p>
						Si nous attribuons une fonction à l'événement <code class="line_code">click</code> de chacun de ces deux éléments et que l'on clique sur le texte, quel événement va se déclencher en premier à votre avis ? Bonne question n'est-ce pas ?<br />
						Notre réponse se trouve dans les phases de capture et de bouillonnement. Si vous décidez d'utiliser la capture, alors l'événement du <code class="line_code">&ltdiv&gt</code> se déclenchera en premier puis viendra ensuite l'événement du <code class="line_code">&ltspan&gt</code>. En revanche, si vous utilisez le bouillonnement, ce sera d'abord l'événement du <code class="line_code">&ltspan&gt</code> qui se déclenchera, puis viendra par la suite celui du <code class="line_code">&ltdiv&gt</code>.
					</p>
					<p>
						<div class='em'>La phase de bouillonnement est celle définie par défaut et sera probablement celle que vous utiliserez la majorité du temps.</div>
					</p>
					<p>
						Et pour finir, <a href="https://www.w3.org/TR/DOM-Level-3-Events/#event-flow" target="_blank">un lien vers la spécification du W3C</a> concernant ces phases si vous avez envie d'aller plus loin.
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1918910" target="_blank">L'objet Event</a></h2>

					<p>
						Tout d'abord, à quoi sert cet objet ? À vous fournir une multitude d'informations sur l'événement actuellement déclenché. Par exemple, vous pouvez récupérer quelles sont les touches actuellement enfoncées, les coordonnées du curseur, l'élément qui a déclenché l'événement… Les possibilités sont nombreuses !
					</p>
					<p>
						Cet objet est bien particulier dans le sens où il n'est accessible que lorsqu'un événement est déclenché. Son accès ne peut se faire que dans une fonction exécutée par un événement, cela se fait de la manière suivante avec le DOM-0 :
					</p>
					<figure class="block_code">
			 			<pre><code>
element.onclick = function(e) { // L'argument « e » va récupérer une référence vers l'objet « Event »
    alert(e.type); // Ceci affiche le type de l'événement (click, mouseover, etc.)
};
						</code></pre>
					</figure>
					<p>
						Et de cette façon là avec le DOM-2 :
					</p>
					<figure class="block_code">
			 			<pre><code>
element.addEventListener('click', function(e) { // L'argument « e » va récupérer une référence vers l'objet « Event »
    alert(e.type); // Ceci affiche le type de l'événement (click, mouseover, etc.)
});
						</code></pre>
					</figure>
					<p>
						Il est important de préciser que l'objet <code class="line_code">Event</code> peut se récupérer dans un argument autre quee! Vous pouvez très bien le récupérer dans un argument nommé <code class="line_code">test</code>, <code class="line_code">hello</code>, ou autre… Après tout, l'objet <code class="line_code">Event</code> est tout simplement passé en référence à l'argument de votre fonction, ce qui vous permet de choisir le nom que vous souhaitez.
					</p>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1925070" target="_blank">Les fonctionnalités de l'objet <code class="line_code">Event</code></a></h3>

					<p>
						Vous avez déjà découvert la propriété <code class="line_code">type</code> qui permet de savoir quel type d'événement s'est déclenché. Passons maintenant à la découverte des autres propriétés et méthodes que possède cet objet (attention, tout n'est pas présenté, seulement l'essentiel).
					</p>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1925016" target="_blank">Récupérer l'élément de l'événement actuellement déclenché</a></h3>

					<p>
						Une des plus importantes propriétés de notre objet se nomme <code class="line_code">target</code>. Celle-ci permet de récupérer une référence vers l'élément dont l'événement a été déclenché, ainsi vous pouvez très bien modifier le contenu d'un élément qui a été cliqué :
					</p>

					<figure class="block_code">
			 			<pre><code>
@ltspan id="clickme"&gtCliquez-moi !&lt/span&gt

&ltscript&gt
    var clickme = document.getElementById('clickme');
  
    clickme.addEventListener('click', function(e) {
        e.target.innerHTML = 'Vous avez cliqué !';
    });
&lt/script&gt
						</code></pre>
					</figure>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1925028" target="_blank">Récupérer l'élément à l'origine du déclenchement de l'événement</a></h3>

					<p>
						certains événements appliqués à un élément parent peuvent se propager d'eux-mêmes aux éléments enfants ; c'est le cas des événements <code class="line_code">mouseover</code>, <code class="line_code">mouseout</code>, <code class="line_code">mousemove</code>, <code class="line_code">click</code>… <br />
						La propriété <code class="line_code">target</code> renvoie toujours l'élément déclencheur de l'événement, or nous souhaitons obtenir l'élément sur lequel a été appliqué l'événement. Autrement dit, on veut connaître l'élément à l'origine de cet événement, et non pas ses enfants.<br />
						La solution est simple : utiliser la propriété <code class="line_code">currentTarget</code> au lieu de <code class="line_code">target</code>. 
					</p>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1925037" target="_blank">Récupérer la position du curseur</a></h3>

					<p>
						La position du curseur est une information très importante, beaucoup de monde s'en sert pour de nombreux scripts comme le drag & drop. Généralement, on récupère la position du curseur par rapport au coin supérieur gauche de la page Web, cela dit il est aussi possible de récupérer sa position par rapport au coin supérieur gauche de l'écran. Toutefois, dans ce tutoriel, nous allons nous limiter à la page Web. Regardez la <a href='https://developer.mozilla.org/en/DOM/event' target="_blank">documentation de l'objet Event</a> si vous souhaitez en apprendre plus. ;)<br />
						Pour récupérer la position de notre curseur, il existe deux propriétés : <code class="line_code">clientX</code> pour la position horizontale et <code class="line_code">clientY</code> pour la position verticale. Étant donné que la position du curseur change à chaque déplacement de la souris, il est donc logique de dire que l'événement le plus adapté à la majorité des cas est <code class="line_code">mousemove</code>.
					</p>

					<figure class="block_code">
			 			<pre><code>
&ltdiv id="position"&gt&lt/div&gt

&ltscript&gt
    var position = document.getElementById('position');
  
    document.addEventListener('mousemove', function(e) {
        position.innerHTML = 'Position X : ' + e.clientX + 'px&ltbr /&gtPosition Y : ' + e.clientY + 'px';
    });
&lt/script&gt
						</code></pre>
					</figure>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1925044" target="_blank">Récupérer l'élément en relation avec un événement de souris</a></h3>

					<p>
						Cette fois nous allons étudier une propriété un peu plus « exotique » assez peu utilisée mais qui peut pourtant se révéler très utile ! Il s'agit de <code class="line_code">relatedTarget</code> et elle ne s'utilise qu'avec les événements <code class="line_code">mouseover</code> et <code class="line_code">mouseout</code>.<br />
						Cette propriété remplit deux fonctions différentes selon l'événement utilisé. Avec l'événement <code class="line_code">mouseout</code>, elle vous fournira l'objet de l'élément sur lequel le curseur vient d'entrer ; avec l'événement <code class="line_code">mouseover</code>, elle vous fournira l'objet de l'élément dont le curseur vient de sortir.
					</p>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1925060" target="_blank">Récupérer les touches frappées par l'utilisateur</a></h3>

					<p>
						Les événements <code class="line_code">keyup</code> et <code class="line_code">keydown</code> sont conçus pour capter toutes les frappes de touches. Ainsi, il est parfaitement possible de détecter l'appui sur la touche <code class="line_code">A</code> voire même sur la touche <code class="line_code">Ctrl</code>. La différence entre ces deux événements se situe dans l'ordre de déclenchement : <code class="line_code">keyup</code> se déclenche lorsque vous relâchez une touche, tandis que <code class="line_code">keydown</code> se déclenche au moment de l'appui sur la touche<br />
						Cependant, faites bien attention avec ces deux événements : toutes les touches retournant un caractère retourneront un caractère majuscule, que la touche <code class="line_code">Maj</code> soit pressée ou non.
					</p>
					<p>
						L'événement <code class="line_code">keypress</code>, lui, est d'une toute autre utilité : il sert uniquement à capter les touches qui écrivent un caractère, oubliez donc les <code class="line_code">Ctrl</code>, <code class="line_code">Alt</code> et autres touches de ce genre qui n'affichent pas de caractère. Alors, forcément, vous vous demandez probablement à quoi peut bien servir cet événement au final ? Eh bien son avantage réside dans sa capacité à détecter les combinaisons de touches ! Ainsi, si vous faites la combinaison <code class="line_code">Maj</code> + <code class="line_code">A</code>, l'événement <code class="line_code">keypress</code> détectera bien un <code class="line_code">A</code> majuscule là où les événements <code class="line_code">keyup</code> et <code class="line_code">keydown</code> se déclencheront deux fois, une fois pour la touche <code class="line_code">Maj</code> et une deuxième fois pour la touche <code class="line_code">A</code>.
					</p>
					<p>
						Si nous devions énumérer toutes les propriétés capables de vous fournir une valeur, il y en aurait trois : <code class="line_code">keyCode</code>, <code class="line_code">charCode</code> et <code class="line_code">which</code>. Cependant, la propriété <code class="line_code">keyCode</code> est amplement suffisante dans tous les cas.<br />
						Ces propriétés renvoient chacune un code ASCII correspondant à la touche pressée. <br/>
						La méthode <code class="line_code">fromCharCode()</code> est conçue pour convertir les valeurs ASCII vers des caractères lisibles. Faites donc bien attention à n'utiliser cette méthode qu'avec un événementkeypressafin d'éviter d'afficher, par exemple, le caractère d'un code correspondant à la touche Ctrl, cela ne fonctionnera pas !<br />
						cette méthode s'utilise avec le préfixe <code class="line_code">String.</code>, comme suit :
					</p>
					<figure class="block_code">
			 			<pre><code>
String.fromCharCode(/* valeur */);
						</code></pre>
					</figure>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1925069" target="_blank">Bloquer l'action par défaut de certains événements</a></h3>

					<p>
						Nous avons vu qu'il est possible de bloquer l'action par défaut de certains événements, comme la redirection d'un lien vers une page Web. Sans le DOM-2, cette opération était très simple vu qu'il suffisait d'écrire <code class="line_code">return false;</code>. Avec l'objet <code class="line_code">Event</code>, c'est quasiment tout aussi simple vu qu'il suffit juste d'appeler la méthode <code class="line_code">preventDefault()</code>!
					</p>
					</p>
					<figure class="block_code">
			 			<pre><code>
&lta id="link" href="http://www.siteduzero.com"&gtCliquez-moi !&lt/a&gt

&ltscript&gt
    var link = document.getElementById('link');

    link.addEventListener('click', function(e) {
        e.preventDefault(); // On bloque l'action par défaut de cet événement
        alert('Vous avez cliqué !');
    });
&lt/script&gt
						</code></pre>
					</figure>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1918968-les-evenements#/id/r-1918967" target="_blank">Résoudre les problèmes d'héritage des événements</a></h2>

					<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919022-les-formulaires#/id/r-1918992" target="_blank">Les formulaires</a></h1>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919022-les-formulaires#/id/r-1925136" target="_blank">Une propriété classique : <code class="line_code">value</code></a></h2>

					<p>
						Pour ceux qui ne se souviennent pas, cette propriété permet de définir une valeur pour différents éléments d'un formulaire comme les <code class="line_code">&ltinput&gt</code>, les <code class="line_code">&ltbutton&gt</code>, etc. Son fonctionnement est simple comme bonjour, on lui assigne une valeur (une chaîne de caractères ou un nombre qui sera alors converti implicitement) et elle est immédiatement affichée sur votre élément HTML. Exemple :
					</p>
					<figure class="block_code">
			 			<pre><code>
&ltinput id="text" type="text" size="60" value="Vous n'avez pas le focus !" /&gt

&ltscript&gt
    var text = document.getElementById('text');
  
    text.addEventListener('focus', function(e) {
        e.target.value = "Vous avez le focus !";
    });

    text.addEventListener('blur', function(e) {
        e.target.value = "Vous n'avez pas le focus !";
    });
&lt/script&gt
						</code></pre>
					</figure>
					<p>
						En JavaScript, on est souvent tenté d'utiliser <code class="line_code">innerHTML</code> pour récupérer le contenu de notre <code class="line_code">&lttextarea&gt</code>, cependant cela ne fonctionne pas : il faut bien utiliser <code class="line_code">value</code> à la place !
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919022-les-formulaires#/id/r-1925143" target="_blank">Les propriétés <code class="line_code">disabled</code>, <code class="line_code">checked</code> et <code class="line_code">readonly</code></a></h2>

					<p>
						En JavaScript, ces trois propriétés deviennent booléennes. Ainsi, il vous suffit de faire comme ceci pour désactiver un champ de texte :
					</p>
					<figure class="block_code">
			 			<pre><code>
&ltinput id="text" type="text" /&gt

&ltscript&gt
    var text = document.getElementById('text');

    text.disabled = true;
&lt/script&gt
						</code></pre>
					</figure>
					<p>
						Pour la propriété <code class="line_code">checked</code> avec une checkbox, il suffit d'opérer de la même manière qu'avec la propriété <code class="line_code">disabled</code>. 
					</p>
					<p>
						Pour les boutons de type radio, chaque bouton radio coché se verra attribuer la valeur <code class="line_code">true</code> à sa propriété <code class="line_code">checked</code>, il va donc nous falloir utiliser une boucle <code class="line_code">for</code> pour vérifier quel bouton radio a été sélectionné.
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919022-les-formulaires#/id/r-1925149" target="_blank">Les listes déroulantes avec <code class="line_code">selectedIndex</code> et <code class="line_code">options</code></a></h2>

					<p>
						<code class="line_code">selectedIndex</code> nous donne l'index (l'identifiant) de la valeur sélectionnée, et <code class="line_code">options</code>liste dans un tableau les éléments <code class="line_code">&ltoption&gt</code> de notre liste déroulante. Leur principe de fonctionnement est on ne peut plus classique :
					</p>
					<figure class="block_code">
			 			<pre><code>
&ltselect id="list"&gt
    &ltoption&gtSélectionnez votre sexe&lt/option&gt
    &ltoption&gtHomme&lt/option&gt
    &ltoption&gtFemme&lt/option&gt
&lt/select&gt

&ltscript&gt
    var list = document.getElementById('list');

    list.addEventListener('change', function() {

        // On affiche le contenu de l'élément &ltoption&gt ciblé par la propriété selectedIndex
        alert(list.options[list.selectedIndex].innerHTML);

    });
&lt/script&gt
						</code></pre>
					</figure>

					<p>
						<div class="em">Dans le cadre d'un <code class="line_code">&ltselect&gt</code> multiple, la propriété <code class="line_code">selectedIndex</code> retourne l'index du premier élément sélectionné.</div>
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919022-les-formulaires#/id/r-1919021" target="_blank">Les méthodes spécifiques à l'élément <code class="line_code">&ltform&gt</code></a></h2>

					<p>
						La première, <code class="line_code">submit()</code>, permet d'effectuer l'envoi d'un formulaire sans l'intervention de l'utilisateur. La deuxième, <code class="line_code">reset()</code>, permet de réinitialiser tous les champs d'un formulaire. <br />
						L'utilisation de ces deux méthodes est simple comme bonjour, il vous suffit juste de les appeler sans aucun paramètre (elles n'en ont pas) et c'est fini :
					</p>
					<figure class="block_code">
			 			<pre><code>
var element = document.getElementById('un_id_de_formulaire');

element.submit(); // Le formulaire est expédié
element.reset();  // Le formulaire est réinitialisé
						</code></pre>
					</figure>
					<p>
						Cependant, il est important de préciser une chose : envoyer un formulaire avec la méthode <code class="line_code">submit()</code> du JavaScript ne déclenchera jamais l'événement <code class="line_code">submit</code>! 
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919022-les-formulaires#/id/r-1925165" target="_blank">La gestion du focus et de la sélection</a></h2>

					<p>
						Il existe aussi deux méthodes, <code class="line_code">focus()</code> et <code class="line_code">blur()</code>, permettant respectivement de donner et retirer le focus à un élément. <br />
						Dans le même genre, il existe la méthode <code class="line_code">select()</code> qui, en plus de donner le focus à l'élément, sélectionne le texte de celui-ci si cela est possible.<br />
						Cette méthode ne fonctionne que sur des champs de texte comme un <code class="line_code">&ltinput&gt</code> de type <code class="line_code">text</code> ou bien un <code class="line_code">&lttextarea&gt</code>.
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919022-les-formulaires#/id/r-1925177" target="_blank">Explications sur l'événement <code class="line_code">change</code></a></h2>

					<p>
						Cet événement attend que l'élément auquel il est attaché perde le focus avant de se déclencher (s'il y a eu modification du contenu de l'élément). 
					</p>

					<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919235-manipuler-le-css#/id/r-1925178" target="_blank">Manipuler le CSS</a></h1>

					<p>
						Rappel : les propriétés CSS de l'attribut <code class="line_code">style</code> sont prioritaires sur les propriétés d'une feuille de style ! Ainsi, dans le code d'exemple suivant, le texte n'est pas rouge mais bleu.
					</p>
					<figure class="block_code">
			 			<pre><code>
&ltstyle&gt
    div {
        color: red;
    }
&lt/style&gt

&ltdiv style="color:blue;"&gtI'm blue ! DABADIDABADA !&lt/div&gt
						</code></pre>
					</figure>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919235-manipuler-le-css#/id/r-1919055">Éditer les propriétés CSS</a></h2>

					<p>
						Nous allons ici aborder la méthode la plus simple et la plus utilisée : l'utilisation de la propriété <code class="line_code">style</code>. L'édition des feuilles de style ne sera pas abordée, car elle est profondément inutile en plus d'être mal gérée par de nombreux navigateurs.
					</p>
					<p>
						Comment accéder à la propriété <code class="line_code">style</code> de notre élément ?
					</p>
					<figure class="block_code">
			 			<pre><code>
element.style; // On accède à la propriété « style » de l'élément « element »
						</code></pre>
					</figure>
					<p>
						Comment modifier les styles CSS ?
					</p>
					<figure class="block_code">
			 			<pre><code>
element.style.width = '150px'; // On modifie la largeur de notre élément à 150px
						</code></pre>
					</figure>
					<p>
						En JavaScript, les tirets sont interdits dans les noms des propriétés. Comment accède-t-on à une propriété CSS qui possède un nom composé ? La solution est simple : supprimer les tirets et chaque mot suivant normalement un tiret voit sa première lettre devenir une majuscule.
					</p>
					<figure class="block_code">
			 			<pre><code>
element.style.backgroundColor = 'blue'; // Après avoir supprimé le tiret et ajouté une majuscule au deuxième mot, le code fonctionne !
						</code></pre>
					</figure>
					<p>
						Malheureusement, on ne peut pas y faire grand-chose à partir de la propriété style, pour cela nous allons devoir utiliser la méthode <code class="line_code">getComputedStyle()</code> !
					</p>

					<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919235-manipuler-le-css#/id/r-1919153" target="_blank">Récupérer les propriétés CSS</a></h2>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919235-manipuler-le-css#/id/r-1919153" target="_blank">La fonction <code class="line_code">getComputedStyle()</code></a></h3>

					<p>
						Cette fonction va se charger de récupérer, à notre place, la valeur de n'importe quel style CSS ! Qu'il soit déclaré dans la propriété style, une feuille de style ou bien même encore calculé automatiquement, cela importe peu : <code class="line_code">getComputedStyle()</code> la récupérera sans problème.
					</p>
					<p>
						<div class='em'>Toutes les valeurs obtenues par le biais de <code class="line_code">getComputedStyle()</code> ou <code class="line_code">currentStyle</code> sont en lecture seule !</div>
					</p>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919235-manipuler-le-css#/id/r-1925306" target="_blank">Les propriétés de type <code class="line_code">offset</code></a></h3>

					<p>
						Certaines valeurs de positionnement ou de taille des éléments ne pourront pas être obtenues de façon simple avec <code class="line_code">getComputedStyle</code> pour pallier ce problème il existe les propriétés <code class="line_code">offset</code> qui sont, dans notre cas, au nombre de cinq :
						<table>
							<tr>
								<th>Nom de l'attribut</th>
								<th>Contient...</th>
							</tr>
							<tr>
								<td><code class="line_code">offsetWidth</code></td>
								<td>Contient la largeur complète (<code class="line_code"></code> + <code class="line_code">padding</code> + <code class="line_code">border</code>) de l'élément.</td>
							</tr>
							<tr>
								<td><code class="line_code">offsetHeight</code></td>
								<td>Contient la heuteur complète (<code class="line_code"></code> + <code class="line_code">padding</code> + <code class="line_code">border</code>) de l'élément.</td>
							</tr>
							<tr>
								<td><code class="line_code">offsetLeft</code></td>
								<td>Surtout utile pour les éléments en position absolue. Contient la position de l'élément par rapport au bord gauche de son élément parent.</td>
							</tr>
							<tr>
								<td><code class="line_code">offsetTop</code></td>
								<td>Surtout utile pour les éléments en position absolue. Contient la position de l'élément par rapport au bord supérieur de son élément parent.</td>
							</tr>
							<tr>
								<td><code class="line_code">offsetParent</code></td>
								<td>Utile que pour un élément en position absolue ou relative ! Contient l'objet de l'élément parent par rapport auquel est positionné l'élément actuel.</td>
							</tr>
						</table>
						Leur utilisation ne se fait pas de la même manière que n'importe quel style CSS, tout d'abord parce que ce ne sont pas des styles CSS ! Ce sont juste des propriétés (en lecture seule) mises à jour dynamiquement qui concernent certains états physiques d'un élément.
					</p>
					<p>
						Pour les utiliser, on oublie la propriété style vu qu'il ne s'agit pas de styles CSS et on les lit directement sur l'objet de notre élément HTML :
					</p>
					<figure class="block_code">
			 			<pre><code>
alert(el.offsetHeight); // On affiche la hauteur complète de notre élément HTML
						</code></pre>
					</figure>
					<p>
						<div class='em'>Faites bien attention : les valeurs contenues dans ces propriétés (à part <code class="line_code">offsetParent</code>) sont exprimées en pixels et sont donc de type <code class="line_code">Number</code>, pas comme les styles CSS qui sont de type <code class="line_code">String</code> et pour lesquelles les unités sont explicitement spécifiées (px, cm, em, etc.).</div>
					</p>

					<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919235-manipuler-le-css#/id/r-1925305" target="_blank">La propriété <code class="line_code">offsetParent</code></a></h3>

					<p>
						Lorsque vous décidez de mettre un de vos éléments HTML en positionnement absolu, celui-ci est sorti du positionnement par défaut des éléments HTML et va aller se placer tout en haut à gauche de votre page Web, par-dessus tous les autres éléments. Seulement, ce principe n'est applicable que lorsque votre élément n'est pas déjà lui-même placé dans un élément en positionnement absolu. Si cela arrive, alors votre élément se positionnera non plus par rapport au coin supérieur gauche de la page Web, mais par rapport au coin supérieur gauche du précédent élément placé en positionnement absolu, relatif ou fixe.<br />
						Ce système de positionnement est clair ? Bon, nous pouvons alors revenir à notre propriété offsetParent ! Si elle existe, c'est parce que les propriétés offsetTop et offsetLeft contiennent le positionnement de votre élément par rapport à son précédent élément parent et non pas par rapport à la page ! Si nous voulons obtenir son positionnement par rapport à la page, il faudra alors aussi ajouter les valeurs de positionnement de son (ses) élément(s) parent(s).
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