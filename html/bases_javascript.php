<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Javascript</title>
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

    	<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1916901-premiers-pas-en-javascript#/id/r-1916870" target="_blank">Où placer le code dans la page</a></h1>

    	<p>
    		Les codes JavaScript sont insérés au moyen de l'élément <code class="line_code">&ltscript&gt</code>. Cet élément possède un attribut <code class="line_code">type</code> qui sert à indiquer le type de langage que l'on va utiliser. Dans notre cas, il s'agit de JavaScript, mais ça pourrait être autre chose, comme du VBScript.<br />
    		Si vous n'utilisez pas le HTML5, sachez que l'attribut <code class="line_code">type</code> prend comme valeur <code class="line_code">text/javascript</code>, qui est en fait le type MIME d'un code JavaScript. <br />
    		Il est possible, et même conseillé, d'écrire le code JavaScript dans un fichier externe, portant l'extension <code class="line_code">.js</code>. Ce fichier est ensuite appelé depuis la page Web au moyen de l'élément <code class="line_code">&ltscript&gt</code> et de son attribut <code class="line_code">src</code> qui contient l'URL du fichier <code class="line_code">.js</code>. Voici tout de suite un petit exemple :

    		<figure class="block_code">
    			<pre><code>
&ltbody&gt

	&ltscript src="hello.js"&gt&lt/script&gt // On suppose que hello.js se trouve dans le même répertoire que la page web.

&lt/body&gt

				</code></pre>
			</figure>

		<p>
			<div class="em">
			Il vaut mieux privilégier un fichier externe plutôt que d'inclure le code JavaScript directement dans la page, pour la simple et bonne raison que le fichier externe est mis en cache par le navigateur et n'est donc pas rechargé à chaque chargement de page, ce qui accélère l’affichage de la page.
			</div>
		</p>
		<p>
			Une page Web est lue par le navigateur de façon linéaire, c'est-à-dire qu'il lit d'abord le <code class="line_code">&lthead&gt</code>, puis les éléments de <code class="line_code">&ltbody&gt</code> les uns à la suite des autres. Si vous appelez un fichier JavaScript dès le début du chargement de la page, le navigateur va donc charger ce fichier, et si ce dernier est volumineux, le chargement de la page s'en trouvera ralenti. C'est normal puisque le navigateur va charger le fichier avant de commencer à afficher le contenu de la page.<br />
			Pour pallier ce problème, il est conseillé de placer les éléments <code class="line_code">&ltscript&gt</code> juste avant la fermeture de l’élément <code class="line_code">&ltbody&gt</code>.
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1916901-premiers-pas-en-javascript#/id/r-1916800" target="_blank">Afficher une boîte de dialogue</a></h1>

    	<figure class="block_code">
    		<pre><code>
&ltbody&gt

	&ltscript&gt
		alert('Hello  \nworld'); //alert()est une fonction qui permet d'afficher une boîte de dialogue contenant un message.
		/* Commentaire sur 
		plusieurs lignes ;
		Un « \n » permet de faire un saut de ligne */
	&lt/script&gt

&lt/body&gt

			</code></pre>
		</figure>

		<p>
			<a href="https://course.oc-static.com/ftp-tutos/cours/javascript/part1/chap2/ex1.html">Essayer le code</a>
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1916901-premiers-pas-en-javascript#/id/r-1916841" target="_blank">La syntaxe du JavaScript</a></h1>

		<p>
			De manière générale, les instructions doivent être séparées par un point-virgule que l'on place à la fin de chaque instruction. En réalité le point-virgule n'est pas obligatoire si l'instruction qui suit se trouve sur la ligne suivante. En revanche, si vous écrivez plusieurs instructions sur une même ligne, comme dans l'exemple suivant, le point-virgule est fortement recommandé.
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917082-les-variables#/id/r-1923132" target="_blank">Déclarer une variable</a></h1>

		<figure class="block_code">
    		<pre><code>
&ltbody&gt

	&ltscript&gt
		var myvariable; //On déclare la varible, à ce stade = null
		myvariable =2; 	//On affecte une valeur à la variable

		// Ou directement :

		var myvariable2 = 3; 	// Sensible à la casse

		var my variable1, myvariable2=3, Myvariable3; // plusieurs variable en même temps

		myvariable1 = myvariable2 = 2; 
	&lt/script&gt

&lt/body&gt

			</code></pre>
		</figure>

		<p>
		La convention de nommage la plus courante est camel case. Dans cette convention, les noms sont constitués de plusieurs mots dont l'initiale est en capitale. Par exemple <code class="line_code">numberOfCats</code>, <code class="line_code">finalAnswer</code>, <code class="line_code">howLongCanThisVariableNameGet</code>, etc.
		</p>

		<div class="em">Attention : dans beaucoup de démonstrations JavaScript, vous pourrez croiser le mot clé <code class="line_code">var</code> plutôt que <code class="line_code">let</code>. Bien qu'il y ait une différence subtile entre les deux (que nous détaillerons dans le chapitre sur la portée), pour l'instant vous pouvez simplement voir <code class="line_code">var</code> comme l'ancienne version de <code class="line_code">let</code> : c'est une autre façon de créer une variable.</div>

		<figure class="block_code">
    		<pre><code>
let numberOfCats = 3;
numberOfCats = 4;
			</code></pre>
		</figure>

		<p>
		En JavaScript, les variables créées par <code class="line_code">let</code> ou <code class="line_code">const</code> ne peuvent être vues ou utilisées qu'à l'intérieur du bloc de code dans lequel elles sont déclarées. Un bloc de code, aussi souvent appelé bloc tout court, est une section de code incluse entre accolades {}.
		</p>

		<p>
		Ce phénomène est appelé portée des variables ou block scope (en anglais).  Voici un exemple :
		</p>

		<figure class="block_code">
    		<pre><code>
let userLoggedIn = true;

if (userLoggedIn) {
   let welcomeMessage = 'Welcome back!';
} else {
   let welcomeMessage = 'Welcome new user!';
}

console.log(welcomeMessage); // renvoie une erreur
			</code></pre>
		</figure>

		<p>
		<code class="line_code">var</code> sera accessible partout.
		</p>




		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917082-les-variables#/id/r-2262505" target="_blank">Les types de variables</a></h1>

		<p>
			Trois types :
			<ul>
				<li><strong>number</strong> : il représente tout nombre, que ce soit un entier, un nombre négatif, décimal, scientifique, hexadecimal, etc. Bref, c'est le type pour les nombres.</li>
				<li><strong>string</strong> : ce type représente n'importe quel texte. On peut l'assigner de deux façons différentes : 
					<figure class="block_code">
    					<pre><code>
var text1 = "Mon \"texte\""; //Avec des guillements (\ pour échapper un guillemet ou apostrophe)
var texté = '2'; //Avec des apostrophes
						</code></pre>
					</figure>
					</li>
				<li><strong>boolean</strong> : un booléen est un type à deux états qui sont les suivants : vrai ou faux. </li>
			</ul>
		</p>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917082-les-variables#/id/r-1923156" target="_blank">Tester l'existence de variables avec <code class="line_code">typeof</code></a></h2>

		<figure class="block_code">
    		<pre><code>
&ltbody&gt

	&ltscript&gt
		var number = 2;
		alert(typeof number); 	//Affiche : "number"

		var text = 'Mon texte';
		alert(typeof text); 	//Affiche : "string"

		var aBoolean = false;
		alert(typeof aBoolean); 	//Affiche : "boolean"

		alert(typeof nothing); 	//Affiche : "undefined" (var inexistant ou déclaré mais ne contient rien)
	&lt/script&gt

&lt/body&gt

			</code></pre>
		</figure>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917082-les-variables#/id/r-2262512" target="_blank">Les opérateurs arithmétiques</a></h1>

		<p>
			<table>
				<tr>
					<th>Opérateur</th>
					<th>Signe</th>
				</tr>
				<tr>
					<td>addition</td>
					<td>+</td>
				</tr>
				<tr>
					<td>soustraction</td>
					<td>-</td>
				</tr>
				<tr>
					<td>multiplication</td>
					<td>*</td>
				</tr>
				<tr>
					<td>division</td>
					<td>/</td>
				</tr>
				<tr>
					<td>modulo</td>
					<td>%</td>
				</tr>
				<tr>
					<td>incrémentation</td>
					<td>++ : <code class="line_code">numberOfLikes++;</code></td>
				</tr>
				<tr>
					<td>décrémentation</td>
					<td>--</td>
				</tr>
			</table>
		</p>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917082-les-variables#/id/r-2262509">Quelques calculs simples</a></h2>

		<figure class="block_code">
    		<pre><code>
var number = 2 ;
number = number + 5 ;
alert(number);  	//Affiche 7 
			</code></pre>
		</figure>

		<p>
			Equivaut à 
		</p>

		<figure class="block_code">
    		<pre><code>
var number = 2 ;
number += 5 ;
alert(number);  	//Affiche 7 
			</code></pre>
		</figure>

		<p>
			À noter que ceci ne s'applique pas uniquement aux additions mais fonctionne avec tous les autres opérateurs arithmétiques :
			<ul>
				<li>+=</li>
				<li>-=</li>
				<li>*=</li>
				<li>/=</li>
				<li>%=</li>
			</ul>
		</p>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript/6278392-declarez-des-variables-et-modifiez-leurs-valeurs#/id/r-7180075">Mutabilité des variables</a></h2>

		<p>
		Une variable est de base mutable c'est-à-dire qu’elle peut changer au cours du temps. On la déclare avec le mot clé  let  suivi d’un nom de variable et on lui affecte une valeur de départ. Par la suite, on va pouvoir changer la valeur de cette variable autant de fois que l’on souhaite.
		</p>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript/6278392-declarez-des-variables-et-modifiez-leurs-valeurs#/id/r-7178067">Les contantes</a></h2>

		<p>
		Dans de nombreux programmes, certaines données ne seront pas modifiées pendant l'exécution du programme. C'est le cas par exemple du nom d'une entreprise, de la date de naissance d'un utilisateur, ou du nombre d'heures dans une journée. Pour s'assurer de ne pas réaffecter par inadvertance de nouvelles valeurs à ces données, vous allez utiliser des constantes. Ce sont simplement des variables qui ne seront pas mutables. On donnera une valeur de départ et on ne pourra plus changer la valeur par la suite. Ainsi s’il y a une erreur de logique dans votre code changeant la valeur du variable (constante) qui ne devait pas changer, javascript retournera une erreur.
		</p>

		<figure class="block_code">
    		<pre><code>
const nombrePostParPage = 20;
nombrePostParPage = 30; // Retournera une erreur dans la console car on ne peut plus changer sa valeur
			</code></pre>
		</figure>



		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917082-les-variables#/id/r-1923226" target="_blank">La concaténation</a></h1>

		<figure class="block_code">
    		<pre><code>
var hi = 'Bonjour ', name = 'vous', result ;
result = hi + name ;
alert(result);  	//Affiche " Bonjour vous" 
			</code></pre>
		</figure>

		<figure class="block_code">
    		<pre><code>
var text = 'Bonjour '
text += 'vous'
alert(result);  	//Affiche " Bonjour vous" 
			</code></pre>
		</figure>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1917774" target="_blank">Introduction aux objets (ancienne version)</a></h1>

		<p>
			Un objet est un concept, une idée ou une chose. Un objet possède une structure qui lui permet de pouvoir fonctionner et d'interagir avec d'autres objets. Le JavaScript met à notre disposition des objets natifs, c'est-à-dire des objets directement utilisables. Vous avez déjà manipulé de tels objets sans le savoir : un nombre, une chaîne de caractères ou même un booléen.<br />
			Outre les objets natifs, le JavaScript nous permet de fabriquer nos propres objets. Ceci fera toutefois partie d'un chapitre à part, car la création d'objets est plus compliquée que l'utilisation des objets natifs.
			<br />

			<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1923941" target="_blank">Que contiennent les objets ?</a></h2>

			<p>
				Les objets contiennent trois choses distinctes :
				<ul>
					<li><strong>Un constructeur</strong> : Le constructeur est un code qui est exécuté quand on utilise un nouvel objet. Il permet d’effectuer des actions comme définir diverses variables au sein même de l'objet (comme le nombre de caractères d'une chaîne de caractères). Tout cela est fait automatiquement pour les objets natifs, nous en reparlerons quand nous aborderons l'orienté objet.</li>
					<li><strong>Des propriétés</strong> : Toute valeur va être placée dans une variable au sein de l'objet : c'est ce que l'on appelle une propriété. Une propriété est une variable contenue dans l'objet, elle contient des informations nécessaires au fonctionnement de l'objet.</li>
					<li><strong>Des méthodes</strong> : Enfin, il est possible de modifier l'objet. Cela se fait par l'intermédiaire des méthodes. Les méthodes sont des fonctions contenues dans l'objet, et qui permettent de réaliser des opérations sur le contenu de l'objet. Par exemple, dans le cas d'une chaîne de caractères, il existe une méthode qui permet de mettre la chaîne de caractères en majuscules.</li>
				</ul>
			</p>

			<figure class="block_code">
    			<pre><code>
var myString = 'Ceci est une chaîne de caractères'; // On crée un objet String

alert(myString.length); // On affiche le nombre de caractères, au moyen de la propriété « length »

alert(myString.toUpperCase()); // On récupère la chaîne en majuscules, avec la méthode toUpperCase()

//On remarque quelque chose de nouveau dans ce code : la présence d'un point. Ce dernier permet d'accéder aux propriétés et aux méthodes d'un objet. 
				</code></pre>
			</figure>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript/6278564-definissez-des-objets-et-leurs-attributs-avec-des-classes#/id/r-7317052" target="_blank">Les objets</a></h1>

		<p>
		Les objets JavaScript sont écrits en JSON (JavaScript Object Notation). Ce sont des séries de <strong>paires clés-valeurs</strong> séparées par des virgules, entre des accolades. Les objets peuvent être enregistrés dans une variable :
		</p>

		<figure class="block_code">
    		<pre><code>
let myBook = {
    title: 'The Story of Tau',
    author: 'Will Alexander',
    numberOfPages: 250,
    isAvailable: true
};
			</code></pre>
		</figure>

		<p>
		Chaque clé est une chaîne (title, author, numberOfPages...), et les valeurs associées peuvent avoir tout type de données (nombre, chaîne, etc.).
		</p>

		<p>
		Construire des objets présente un avantage essentiel : cela permet de regrouper les attributs d'une chose unique à un même emplacement, que ce soit un livre, un profil d'utilisateur ou la configuration d'une application, par exemple.
		</p>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript/6278564-definissez-des-objets-et-leurs-attributs-avec-des-classes#/id/r-7179427" target="_blank">Accédez aux données d'un objet</a></h2>

		<p>
			Voyons comment accéder aux données dans un objet avec la notation pointée (dot notation). Une fois qu'un objet est enregistré dans une variable, vous pouvez accéder à ses données comme dans l'exemple ci-dessous.
		</p>

		<figure class="block_code">
    		<pre><code>
let myBook = {
    title: "L'Histoire de Tao",
    author: "Will Alexander",
    numberOfPages: 250,
    isAvailable: true
};
let bookTitle = myBook.title;  // "L'Histoire de Tao"
let bookPages = myBook.numberOfPages  // 250
			</code></pre>
		</figure>

		<p>
			Ou avec la notation bracket
		</p>

		<figure class="block_code">
    		<pre><code>
let bookTitle = myBook["title"];  // "L'Histoire de Tao"
let bookPages = myBook["numberOfPages"];  // 250
			</code></pre>
		</figure>

		<p>
		L'intérêt ici c’est qu’on va pouvoir mettre entre bracket une variable qui contient en string le nom de la propriété que l’on souhaite atteindre. Par exemple :
		</p>

		<figure class="block_code">
    		<pre><code>
let propertyToAccess = "title";
let bookTitle = myBook[propertyToAccess];  // "L'Histoire de Tao"
			</code></pre>
		</figure>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript/6278564-definissez-des-objets-et-leurs-attributs-avec-des-classes#/id/r-7178417" target="_blank">Les classes</a></h2>

		<p>
		La construction d'un objet à la main, par la notation à accolades vue précédemment, convient bien à des objets simples et uniques. Mais vous aurez souvent besoin de beaucoup d'objets du même type. C'est là que les classes sont utiles.
		</p>

		<p>
		Une classe est un modèle pour un objet dans le code. Elle permet de construire plusieurs objets du même type (appelés instances de la même classe) plus facilement.
		</p>

		<p>
		Pour cette classe, nous souhaitons que chaque <code class="line_code">Book</code> ait un titre, un auteur et un nombre de pages. Pour cela, vous utilisez ce qu'on appelle un constructor. Le <strong>constructor</strong> d'une classe est la fonction qui est appelée quand on crée une nouvelle instance de cette classe avec le mot clé <code class="line_code">new</code> (voir plus bas).
		</p>

		<p>
		Pour attribuer le titre, l'auteur et le nombre de pages reçus à cette instance, utilisez le mot clé <code class="line_code">this</code> et la notation dot.
		</p>

		<figure class="block_code">
    		<pre><code>
class Book {
    constructor(title, author, pages) {
        this.title = title; //this lie la propriété de son instance (après le '.') au contructeur et affecte le nom (ici title après le =) à celui-ci
        this.author = author;
        this.pages = pages;
    }
}
			</code></pre>
		</figure>

		<p>
		Ici, le mot clé <code class="line_code">this</code> fait référence à la nouvelle instance. Donc, il utilise la notation dot pour attribuer les valeurs reçues aux clés correspondantes.
		</p>

		<p>
		Maintenant que la classe est terminée, vous pouvez créer des <strong>instances</strong> par le mot clé <code class="line_code">new</code> :
		</p>

		<figure class="block_code">
    		<pre><code>
let myBook = new Book("L'Histoire de Tao", "Will Alexander", 250);
//Cette ligne crée l'objet suivant :
{
    title: "L'Histoire de Tao",
    author: "Will Alexander",
    pages: 250
}
			</code></pre>
		</figure>

		<p>
		Il est important d’expliquer la notion de propriété de classe. C’est une variable interne à cette classe que l’on peut définir par défaut et faire évoluer au fur et à mesure de l’exécution de notre code. Il n’est pas rare d’utiliser le terme <strong>attribut</strong> au lieu de <strong>propriété</strong>, mais <strong>cela représente bien la même chose</strong>.
		</p>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript/6279381-definissez-des-methodes-dinstance-et-des-proprietes#/id/r-7176297" target="_blank">Les méthodes d'instance</a></h2>

		<p>
			<p>
			Une méthode d'instance est une fonction faisant partie d'une classe, et qui agit sur une instance de cette classe. 
			</p>
		</p>

		<figure class="block_code">
    		<pre><code>
class BankAccount {
   constructor(owner, balance) {
      this.owner = owner; 	
      this.balance = balance;
   }
   showBalance() {
      console.log("Solde: " + this.balance + " EUR");
   }
}
			</code></pre>
		</figure>

		<p>
		La nouvelle méthode ci-dessus, déclarée par son nom suivi par (), utilise le mot clé <code class="line_code">this</code>  pour accéder à la propriété   balance  de l'instance, et l'afficher sur la console avec une mise en forme supplémentaire. Ceci signifie que vous pouvez utiliser la notation dot sur l'instance <code class="line_code">newAccount</code> pour appeler sa méthode <code class="line_code">showBalance()</code> :
		</p>

		<div class="em">Dans le corps d'une classe, le mot clé <code class="line_code">this</code> fait référence à l'instance créée de la classe. Dans cet exemple, il fait référence à <code class="line_code">newAccount</code>.</div>

		<p>
			Pour résumer
		</p>

		<figure class="block_code">
    		<pre><code>
class NouvelleClass {
   constructor(propriété, ouAttribut) {
      this.propriété = propriété;	//this lie la propriété de son instance (après le '.') au contructeur et affecte le nom (ici title après le =) à celui-ci
      this.ouAttribut = ouAttribut;
   }
   méthode() {
      console.log("Solde: " + this.ouAttribut + " EUR");	//this utilisé pour faire référence à la proprité de l'instance en question
   }
}

const instance_1 = new NouvelleClass(propriété, ouAttribut)
			</code></pre>
		</figure>

		<div class="em">N'oubliez pas qu'un objet (une instance d'une classe est un objet) est un type par référence, donc vous pouvez toujours apporter des modifications à l'instance de <code class="line_code">NouvelleClass</code> – la partie constante désigne une référence à cette instance.</div>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript/6279381-definissez-des-methodes-dinstance-et-des-proprietes#/id/r-7179793" target="_blank">Les méthodes statiques</a></h2>

		<p>
		Elle est différente des méthodes d'instance parce qu'elle n'est pas liée à une instance particulière d'une classe, mais à la classe elle-même. Utilisez-la pour créer des méthodes utilitaires (helper en anglais) où vous n'aurez pas besoin d'une instance d'une classe pour les utiliser. Vous pourrez vous en servir comme boîte à outils de fonctions que vous utiliserez souvent.
		</p>

		<p>
		Par exemple, en JavaScript, l'objet Math  contient beaucoup de méthodes utiles :
		</p>

		<figure class="block_code">
    		<pre><code>
const randomNumber = Math.random(); // crée un nombre aléatoire sur l'intervalle [0, 1]

const roundMeDown = Math.floor(495.966); // arrondit vers le bas à l'entier le plus proche, renvoie 495
			</code></pre>
		</figure>

		<p>
		Vous n'avez pas besoin de créer par <code class="line_code">new</code> une instance de l'objet <code class="line_code">Math</code> pour utiliser ces méthodes ; il suffit de les appeler sur l'objet <code class="line_code">Math</code> global.
		</p>

		<p>
		Vous pouvez créer vos propres méthodes statiques par le mot clé <code class="line_code">static</code> !
		</p>

		<figure class="block_code">
    		<pre><code>
class BePolite {
    
    static sayHello() {
        console.log("Hello!");
    }
    
    static sayHelloTo(name) {
        console.log("Hello " + name + "!");
    }
    
    static add(firstNumber, secondNumber) {
        return firstNumber + secondNumber;
    }
}

BePolite.sayHello(); // imprime "Hello!""

BePolite.sayHelloTo("Will"); // imprime "Hello Will!""

const sum = BePolite.add(2, 3); // sum = 5
			</code></pre>
		</figure>

		<p>
		Vous n'avez pas besoin d'ajouter un   constructor  à votre classe, car vous n'allez pas l'instancier.
		</p>

		<p>
		Toutes ces fonctionnalités pourraient être des fonctions, mais l'avantage d'utiliser des méthodes de classe statiques est par exemple de pouvoir les regrouper par catégorie ou par type.
		</p>

















	







		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917082-les-variables#/id/r-2262515" target="_blank">Intergire avec l'utilisateur : <code class="line_code">prompt()</code></a></h1>

		<figure class="block_code">
    		<pre><code>
var userName = prompt('Entrez votre prénom') ;
alert(result);  	//Affiche le prénom entré par l'utilisateur
			</code></pre>
		</figure>

		<p>
			<a href="http://learn.sdlm.be/js/part1/chap3/ex1.html">Essayer le code</a>
		</p>
		<p> 
			La fonction <code class="line_code">prompt()</code> s'utilise comme <code class="line_code">alert()</code> mais a une petite particularité. Elle renvoie ce que l'utilisateur a écrit sous forme d'une chaîne de caractères.
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917082-les-variables#/id/r-1923256" target="_blank">Convertir une chaîne de caractères en nombre</a></h1>

		<figure class="block_code">
    		<pre><code>
var text = '1337', number;

number = parseInt(text);  	// Conversion en number grâce à parseInt
alert(typeof number); 		// Affiche : "number"
			</code></pre>
		</figure>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917082-les-variables#/id/r-2262519" target="_blank">Convertir un nombre en chaîne de caractères</a></h1>

		<figure class="block_code">
    		<pre><code>
var text, number1 = 4, number2 = 2;
text = number1 + '' + number2;
alert(text); 	// Affiche : « 42 »
			</code></pre>
		</figure>

		<p>
			Qu'avons-nous fait ? Nous avons juste ajouté une chaîne de caractères vide entre les deux nombres, ce qui aura eu pour effet de les convertir en chaînes de caractères.<br />
			Il existe une solution un peu moins archaïque que de rajouter une chaîne vide mais vous la découvrirez plus tard.
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917384-les-conditions#/id/r-1923350" target="_blank">Les opérateurs de comparaison</a></h1>

		<p>
			<table>
				<tr>
					<th>Opérateur</th>
					<th>Signification</th>
				</tr>
				<tr>
					<td>==</td>
					<td>égal à</td>
				</tr>
				<tr>
					<td>!=</td>
					<td>différent de</td>
				</tr>
				<tr>
					<td>===</td>
					<td>contenu et type égale à</td>
				</tr>
				<tr>
					<td>!==</td>
					<td>contenu ou type différent de</td>
				</tr>
				<tr>
					<td>&gt</td>
					<td>supérieur à</td>
				</tr>
				<tr>
					<td>&gt=</td>
					<td>supérieur ou égale à</td>
				</tr>
				<tr>
					<td>&lt</td>
					<td>inférieur à</td>
				</tr>
				<tr>
					<td>&lt=</td>
					<td>inférieur ou égale à</td>
				</tr>
			</table>
		</p>

		<figure class="block_code">
    		<pre><code>
var number1 = 2, number2 = 2, number3 = 4, result;

result = number1 == number2; // On spécifie deux variables avec l'opérateur de comparaison entre elles
alert(result); // Affiche « true », la condition est donc vérifiée car les deux variables contiennent bien la même valeur

result = number1 == number3;
alert(result); // Affiche « false », la condition n'est pas vérifiée car 2 est différent de 4

result = number1 < number3; 
alert(result); // Affiche « true », la condition est vérifiée car 2 est bien inférieur à 4
			</code></pre>
		</figure>

		<figure class="block_code">
    		<pre><code>
var number = 4, text = '4', result;

result = number == text;
alert(result); // Affiche  « true » alors que « number » est un nombre et « text » une chaîne de caractères

result = number === text;
alert(result); // Affiche « false » car cet opérateur compare aussi les types des variables en plus de leurs valeurs
			</code></pre>
		</figure>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917384-les-conditions#/id/r-1923392" target="_blank">Les opérateurs logiques</a></h1>

		<p>
			<table>
				<tr>
					<th>Opérateur</th>
					<th>Type de logique</th>
					<th>Utilisation</th>
				</tr>
				<tr>
					<td>&&</td>
					<td>ET</td>
					<td>valeur1 && valeur2</td>
				</tr>
				<tr>
					<td>||</td>
					<td>OU</td>
					<td>valeur1 || valeur2</td>
				</tr>
				<tr>
					<td>!</td>
					<td>NON</td>
					<td>!valeur</td>
				</tr>
				<tr>
					<td>==</td>
					<td>vérifie la valeur, mais pas le type</td>
					<td>5 == "5" : true</td>
				</tr>
				<tr>
					<td>====</td>
					<td>vérifie à la fois la valeur et le type.</td>
					<td>5 == "5" : fasle (number et string)</td>
				</tr>
			</table>
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917384-les-conditions#/id/r-1917247" target="_blank">La condition « if else »</a></h1>

		<figure class="block_code">
    		<pre><code>
if (true) {
    alert("Ce message s'est bien affiché.");
}

if (false) {
    alert("Pas la peine d'insister, ce message ne s'affichera pas.");
}
			</code></pre>
		</figure>

		<figure class="block_code">
    		<pre><code>
var floor = parseInt(prompt("Entrez l'étage où l'ascenseur doit se rendre (de -2 à 30) :"));

if (floor == 0) {

    alert('Vous vous trouvez déjà au rez-de-chaussée.');

} else if (-2 <= floor && floor <= 30) {

    alert("Direction l'étage n°" + floor + ' !');

} else {

    alert("L'étage spécifié n'existe pas.");

}
			</code></pre>
		</figure>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917384-les-conditions#/id/r-1923427" target="_blank">la fonction <code class="line_code">confirm()</code></a></h1>

		<p>
			Son utilisation est simple : on lui passe en paramètre une chaîne de caractères qui sera affichée à l'écran et elle retourne un booléen en fonction de l'action de l'utilisateur.
		</p>

		<figure class="block_code">
    		<pre><code>
if (confirm('Voulez-vous exécuter le code JavaScript de cette page ?')) 
{
    alert('Le code a bien été exécuté !');
}
			</code></pre>
		</figure>
		<p>
			<a href="http://learn.sdlm.be/js/part1/chap4/ex1.html">Essayer le code</a>
		</p>
		<p>
			Comme vous pouvez le constater, le code s'exécute lorsque vous cliquez sur le bouton <code class="line_code">OK</code> et ne s'exécute pas lorsque vous cliquez sur <code class="line_code">Annuler</code>. En clair : dans le premier cas la fonction renvoie <code class="line_code">true</code> et dans le deuxième cas elle renvoie <code class="line_code">false</code>. Ce qui en fait une fonction très pratique à utiliser avec les conditions.
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917384-les-conditions#/id/r-1917275" target="_blank">La condition « switch »</a></h1>

		<p>
			Nous venons d'étudier le fonctionnement de la condition <code class="line_code">if else</code> qui est très utile dans de nombreux cas, toutefois elle n'est pas très pratique pour faire du cas par cas ; c'est là qu'intervient <code class="line_code">switch</code>!
		</p>
		<p>
			Prenons un exemple : nous avons un meuble avec quatre tiroirs contenant chacun des objets différents, et il faut que l'utilisateur puisse connaître le contenu du tiroir dont il entre le chiffre. Si nous voulions le faire avec <code class="line_code">if </code> ce serait assez long et fastidieux.<br />
			Le plus gros problème est de devoir réécrire à chaque fois la condition ; mais avec <code class="line_code">switch</code> c'est un peu plus facile :
		</p>

		<figure class="block_code">
    		<pre><code>
var drawer = parseInt(prompt('Choisissez le tiroir à ouvrir (1 à 4) :'));

switch (drawer) {
    case 1:
        alert('Contient divers outils pour dessiner : du papier, des crayons, etc.');
    break;

    case 2:
        alert('Contient du matériel informatique : des câbles, des composants, etc.');
    break;

    case 3:
        alert('Ah ? Ce tiroir est fermé à clé ! Dommage !');
    break;

    case 4:
        alert('Contient des vêtements : des chemises, des pantalons, etc.');
    break;

    default:
        alert("Info du jour : le meuble ne contient que 4 tiroirs et, jusqu'à preuve du contraire, les tiroirs négatifs n'existent pas.");
}
			</code></pre>
		</figure>

		<p>
			Sans l'instruction <code class="line_code">break</code> vous exécutez tout le code contenu dans le <code class="line_code">switch</code> à partir ducaseque vous avez choisi. 
		</p>

		<p>
			un <code class="line_code">switch</code> permet de faire une action en fonction d'une valeur mais aussi en fonction du type de la valeur (comme l'opérateur ===),
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917384-les-conditions#/id/r-1917297" target="_blank">Les ternaires</a></h1>

		<figure class="block_code">
    		<pre><code>
var startMessage = 'Votre catégorie : ',
    endMessage,
    adult = confirm('Êtes-vous majeur ?');

endMessage = adult ? '18+' : '-18'; // Ternaire : si adult=true : '18+', si adult=false : '-18'.

alert(startMessage + endMessage);
			</code></pre>
		</figure>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917384-les-conditions#/id/r-1923506" target="_blank">Tester l'existence de contenu d'une variable</a></h1>

		<p>
			Vous savez que les variables peuvent être de plusieurs types : les nombres, les chaînes de caractères, etc. Eh bien ici nous allons découvrir que le type d'une variable (quel qu'il soit) peut être converti en booléen même si à la base on possède un nombre ou une chaîne de caractères.
		</p>

		<figure class="block_code">
    		<pre><code>
var conditionTest = 'Fonctionnera ? Fonctionnera pas ?';

if (conditionTest) {
    alert('Fonctionne !');
} else {
    alert('Ne fonctionne pas !');
}
			</code></pre>
		</figure>

		<p>
			Qu'est-ce qu'un contenu vrai ou faux ? Eh bien, il suffit simplement de lister les contenus faux pour le savoir : un nombre qui vaut zéro ou bien une chaîne de caractères vide. C'est tout, ces deux cas sont les seuls à être évalués comme étant à <code class="line_code">false</code>. Bon, après il est possible d'évaluer des attributs, des méthodes, des objets, etc. Seulement, vous verrez cela plus tard.
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917384-les-conditions#/id/r-1923511" target="_blank">Le cas de l'opérateur OU</a></h1>

		<p>
			en plus de sa fonction principale, permet de renvoyer la première variable possédant une valeur évaluée à <code class="line_code">true</code>! Exemple :
		</p>

		<figure class="block_code">
    		<pre><code>
var conditionTest1 = '', conditionTest2 = 'Une chaîne de caractères';

alert(conditionTest1 || conditionTest2);
			</code></pre>
		</figure>

		<p>
			<a href="http://learn.sdlm.be/js/part1/chap4/ex8.html">Essayer le code</a>
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917498-les-boucles#/id/r-1917403" target="_blank">L'incrémentation</a></h1>

		<p>
			Il s'agit d'une méthode assez rapide pour ajouter ou soustraire une unité à une variable (on dit incrémenter et décrémenter).
		</p>

		<figure class="block_code">
    		<pre><code>
var number = 0;

number++;
alert(number); // Affiche : « 1 »

number--;
alert(number); // Affiche : « 0 »
			</code></pre>
		</figure>

		<p>
			++ (ou --) peuvent se placer après la variable, mais ils peuvent aussi se placer avant.<br />
			La différence réside en fait dans la priorité de l'opération, et ça a de l'importance si vous voulez récupérer le résultat de l'incrémentation. Dans l'exemple suivant, <code class="line_code">++number</code> retourne la valeur de <code class="line_code">number</code> incrémentée, c'est-à-dire 1.
		</p>

		<figure class="block_code">
    		<pre><code>
var number = 0;
var output = ++number;

alert(number); // Affiche : « 1 »
alert(output); // Affiche : « 1 »
			</code></pre>
		</figure>

		<p>
			Maintenant, si on place l'opérateur après la variable à incrémenter, l'opération retourne la valeur de <code class="line_code">number</code> avant qu'elle ne soit incrémentée :
		</p>

		<figure class="block_code">
    		<pre><code>
var number = 0;
var output = number++;

alert(number); // Affiche : « 1 »
alert(output); // Affiche : « 0 »
			</code></pre>
		</figure>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917498-les-boucles#/id/r-1917430" target="_blank">La boucle While</a></h1>

		<figure class="block_code">
    		<pre><code>
while (condition==true) {
    instruction_1;
    instruction_2;
    instruction_3;
}
			</code></pre>
		</figure>

		<p>
			Il existe un mot-clé pour arrêter la boucle d'un seul coup. Ce mot-clé est <code class="line_code">break</code>, et il s'utilise exactement comme dans la structure conditionnelle <code class="line_code">switch</code>.
		</p>

		<p>
			<code class="line_code">continue</code>, un peu comme <code class="line_code">break</code>, permet de mettre fin à une itération, mais attention, elle ne provoque pas la fin de la boucle : l'itération en cours est stoppée, et la boucle passe à l'itération suivante.
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917498-les-boucles#/id/r-1917437">La boucle do while</a></h1>

		<p>
			La boucle <code class="line_code">do while</code> ressemble très fortement à la boucle <code class="line_code">while</code>, sauf que dans ce cas la boucle est toujours exécutée au moins une fois. Dans le cas d'une boucle <code class="line_code">while</code>, si la condition n'est pas valide, la boucle n'est pas exécutée. Avec <code class="line_code">do while</code>, la boucle est exécutée une première fois, puis la condition est testée pour savoir si la boucle doit continuer.<br />
			Voici la syntaxe d'une boucledo while:
		</p>

		<figure class="block_code">
    		<pre><code>
do {
    instruction_1;
    instruction_2;
    instruction_3;
} while (condition);
			</code></pre>
		</figure>

		<p>
			l'utilisation des boucles <code class="line_code">do while</code> n'est pas très fréquente, et il est fort possible que vous n'en ayez jamais l'utilité car généralement les programmeurs utilisent une boucle <code class="line_code">while</code> normale, avec une condition qui fait que celle-ci est toujours exécutée une fois.
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917498-les-boucles#/id/r-1917497" target="_blank">La boucle for</a></h1>

		<figure class="block_code">
    		<pre><code>
for (initialisation; condition; incrémentation) {
    instruction_1;
    instruction_2;
    instruction_3;
}
			</code></pre>
		</figure>

		<p>
			En JavaScript, il est déconseillé de déclarer des variables au sein d'une boucle (entre les accolades), pour une raison logique : il n'y a en effet pas besoin de déclarer une même variable à chaque passage dans la boucle ! Il est conseillé de déclarer les variables directement dans le bloc d'initialisation. Mais attention : une fois que la boucle est exécutée, la variable existe toujours. Ce comportement est différent de celui de nombreux autres langages, dans lesquels une variable déclarée dans une boucle est « détruite » une fois la boucle exécutée.
		</p>
		<p>
			Les trois blocs qui constituent la boucle <code class="line_code">for</code> ne sont pas exécutés en même temps :
			<ul>
				<li>Initialisation : juste avant que la boucle ne démarre. C'est comme si les instructions d'initialisation avaient été écrites juste avant la boucle, un peu comme pour une boucle <code class="line_code">while</code>;</li>
				<li>Condition : avant chaque passage de boucle, exactement comme la condition d'une boucle <code class="line_code">while</code>;</li>
				<li>Incrémentation : après chaque passage de boucle. Cela veut dire que, si vous faites un <code class="line_code">break</code> dans une boucle <code class="line_code">for</code>, le passage dans la boucle lors du <code class="line_code">break</code> ne sera pas comptabilisé.</li>
			</ul>
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917728-les-fonctions#/id/r-1923716" target="_blank">Créer une fonction</a></h1>

		<figure class="block_code">
    		<pre><code>
function myFunction(argument1, argument2) {
	// Le code que la fonction va devoir exécuter
}
			</code></pre>
		</figure>

		<p>
			<div class='em'>Bien entendu, tout comme les variables, les noms de fonctions sont limités aux caractères alphanumériques (dont les chiffres) et aux deux caractères suivants : _ et $.</div>
		</p>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917728-les-fonctions#/id/r-1917567" target="_blank">La portée des variables</a></h2>

		<p>
			toute variable déclarée dans une fonction n'est utilisable que dans cette même fonction ! Ces variables spécifiques à une seule fonction ont un nom : <strong>les variables locales</strong>.<br />
			<div class="em">Lorsqu'une variable n'est accessible que dans une partie de votre code, on dit qu'elle se trouve au sein d'un « scope ». Retenez bien ce terme, il vous servira à l'avenir.</div>
		</p>
		<p>
			À l'inverse des variables locales, celles déclarées en-dehors d'une fonction sont nommées <strong>les variables globales</strong> car elles sont accessibles partout dans votre code, y compris à l'intérieur de vos fonctions.
		</p>
		<p>
			Que se produirait-il si je créais une variable globale nommée <code class="line_code">message</code> et une variable locale du même nom ? <br />
			La variable locale prend le dessus sur la variable globale de même nom pendant tout le temps de l'exécution de la fonction. Mais une fois la fonction terminée (et donc, la variable locale détruite) c'est la variable globale qui reprend ses droits.<br />
			Il existe une solution pour utiliser la variable globale dans une fonction malgré la création d'une variable locale de même nom, mais nous étudierons cela bien plus tard.
		</p>
		<p>
			Malgré le sens pratique des variables globales (vu qu'elles sont accessibles partout) elles sont parfois à proscrire car elles peuvent rapidement vous perdre dans votre code (et engendrer des problèmes si vous souhaitez partager votre code). 
		</p>
		<p>
			Voici un exemple de ce qu'il ne faut pas faire :
		</p>

		<figure class="block_code">
    		<pre><code>
var var1 = 2,
    var2 = 3;

function calculate() {
    alert(var1 * var2); // Affiche : « 6 » (sans blague ?!)
}

calculate();
			</code></pre>
		</figure>

		<p>
			Par principe, cette façon de faire est stupide : vu que ces variables ne servent qu'à la fonction <code class="line_code">calculate()</code>, autant les déclarer dans la fonction de la manière suivante :
		</p>

		<figure class="block_code">
    		<pre><code>
function calculate() {
    var var1 = 2,
        var2 = 3;
    alert(var1 * var2);
}

calculate();
			</code></pre>
		</figure>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917728-les-fonctions#/id/r-1923822" target="_blank">Les arguments</a></h2>

		<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917728-les-fonctions#/id/r-1923785" target="_blank">La portée des arguments</a></h3>

		<p>
			lorsqu'une fonction reçoit un argument, celui-ci est stocké dans une variable dont vous avez choisi le nom lors de la déclaration de la fonction. Voici, en gros, ce qui se passe quand un argument est reçu dans la fonction :
		</p>

		<figure class="block_code">
    		<pre><code>
function scope(arg) {
    // Au début de la fonction, la variable « arg » est créée avec le contenu de l'argument qui a été passé à la fonction
  
    alert(arg); // Nous pouvons maintenant utiliser l'argument comme souhaité : l'afficher, le modifier, etc.

    // Une fois l'exécution de la fonction terminée, toutes les variables contenant les arguments sont détruites
}
			</code></pre>
		</figure>

		<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917728-les-fonctions#/id/r-1923821" target="_blank">Les arguments facultatifs</a></h3>

		<p>
			Et c'est là que l'argument facultatif entre en scène ! Un argument facultatif est évidemment facultatif (eh oui ! :D ) mais doit généralement posséder une valeur par défaut dans le cas où l'argument n'a pas été rempli.
		</p>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917728-les-fonctions#/id/r-1923834" target="_blank">Les valeurs de retour</a></h2>

		<p>
			Pour faire retourner une valeur à notre fonction, rien de plus simple, il suffit d'utiliser l'instruction <code class="line_code">return</code> suivie de la valeur à retourner. Exemple :
		</p>

		<figure class="block_code">
    		<pre><code>
function sayHello() {
    return 'Bonjour !'; // L'instruction « return » suivie d'une valeur, cette dernière est donc renvoyée par la fonction
}

alert(sayHello()); // Ici on affiche la valeur retournée par la fonction sayHello()
			</code></pre>
		</figure>
		<p>
			cette instruction met fin à la fonction, puis retourne la valeur.<br />
			Ce fonctionnement explique d'ailleurs pourquoi on ne peut pas faire plusieurs renvois de valeurs pour une même fonction : si on écrit deux <code class="line_code">return</code> à la suite, seul le premier sera exécuté puisque le premier <code class="line_code">return</code> aura déjà mis un terme à l'exécution de la fonction.
		</p>
		<p>
			<div class="em">Il est tout d'abord important de préciser que les fonctions ne peuvent retourner qu'une seule et unique valeur chacune, pas plus ! Il est possible de contourner légèrement le problème en renvoyant un tableau ou un objet, mais vous étudierez le fonctionnement de ces deux éléments dans les chapitres suivants, nous n'allons pas nous y attarder dans l'immédiat.</div>
		</p>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917728-les-fonctions#/id/r-1917727" target="_blank">Les fonctions anonymes</a></h1>

		<p>
			Comme leur nom l'indique, ces fonctions spéciales sont anonymes car elles ne possèdent pas de nom ! Voilà la seule et unique différence avec une fonction traditionnelle, ni plus, ni moins. Pour déclarer une fonction anonyme, il vous suffit de faire comme pour une fonction classique mais sans indiquer de nom :
		</p>

		<figure class="block_code">
    		<pre><code>
function (arguments) {
    // Le code de votre fonction anonyme
}
			</code></pre>
		</figure>

		<p>
			comment fait-on pour exécuter cette fonction si elle ne possède pas de nom ?<br />
			Eh bien il existe de très nombreuses façons de faire ! Cependant, dans l'état actuel de vos connaissances, nous devons nous limiter à une seule solution : assigner notre fonction à une variable. Nous verrons les autres solutions au fil des chapitres suivants.
		</p>

		<figure class="block_code">
    		<pre><code>
var sayHello = function() {
    alert('Bonjour !');
};

sayhello(); 	// Affiche : "bonjour !"
			</code></pre>
		</figure>

		<p>
			On peut dire, en quelque sorte, que la variablesayHelloest devenue une fonction ! En réalité, ce n'est pas le cas, nous devrions plutôt parler de référence, mais nous nous pencherons sur ce concept plus tard.
		</p>
		<p>
			<div class="em">Certains d'entre vous auront sûrement noté le point-virgule après l'accolade fermante de la fonction dans le deuxième code, pourtant il s'agit d'une fonction, on ne devrait normalement pas en avoir besoin ! Eh bien si ! <br />
			En JavaScript, il faut savoir distinguer dans son code les structures et les instructions. Ainsi, les fonctions, les conditions, les boucles, etc. sont des structures, tandis que tout le reste (assignation de variable, exécution de fonction, etc.) sont des instructions.</div>
		</p>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917728-les-fonctions#/id/r-1923914" target="_blank">Les fonctions anonymes : isoler son code</a></h2>

		<p>
			Une utilisation intéressante des fonctions anonymes concerne l'isolement d'une partie de votre code, le but étant d'éviter qu'une partie de votre code n'affecte tout le reste. <br />
			Ce principe peut s'apparenter au système de sandbox mais en beaucoup moins poussé. Ainsi, il est possible de créer une zone de code isolée permettant la création de variables sans aucune influence sur le reste du code. L'accès au code en-dehors de la zone isolée reste toujours partiellement possible (ce qui fait donc que l'on ne peut pas réellement parler de sandbox). Mais, même si cet accès reste possible, ce système peut s'avérer très utile.
		</p>

		<figure class="block_code">
    		<pre><code>
// Code externe

(function() {

    // Code isolé

})();

// Code externe
			</code></pre>
		</figure>

		<p>
			Pourquoi ces parenthèses ? Eh bien pour une raison simple : une fonction, lorsqu'elle est déclarée, n'exécute pas immédiatement le code qu'elle contient, elle attend d'être appelée. Or, nous, nous souhaitons exécuter ce code immédiatement ! La solution est donc d'utiliser ce couple de parenthèses.
		</p>
		<p>
			<div class="em">À titre d'information, sachez que ces fonctions immédiatement exécutées se nomment des Immediately-Invoked Function Expression, abrégées IIFE. Nous utiliserons cette abréviation dorénavant.</div>
		</p>
		<p>
			Les zones isolées sont pratiques (vous découvrirez bien vite pourquoi) mais parfois on aimerait bien enregistrer dans le code global une des valeurs générées dans une zone isolée. Pour cela il vous suffit de procéder de la même façon qu'avec une fonction classique, c'est-à-dire comme ceci :
		</p>

		<figure class="block_code">
    		<pre><code>
var sayHello = (function() {

    return 'Yop !';

})();

alert(sayHello); // Affiche : « Yop ! »
			</code></pre>
		</figure>

		

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1917851" target="_blank">Les tableaux</a></h1>

		<p>
			Un tableau, ou plutôt un array en anglais, est une variable qui contient plusieurs valeurs, appelées items. Chaque item est accessible au moyen d'un indice (index en anglais) et dont la numérotation commence à partir de 0. 
		</p>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1924029" target="_blank">Déclarer un tableau</a></h2>

		<figure class="block_code">
    		<pre><code>
var myArray_a = [42, 12, 6, 3];
var myArray_b = [42, 'Sébastien', 12, 'Laurence'];
			</code></pre>
		</figure>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1924035" target="_blank">Récupérer et modifier des valeurs</a></h2>

		<figure class="block_code">
    		<pre><code>
var myArray = ['Sébastien', 'Laurence', 'Ludovic', 'Pauline', 'Guillaume'];

alert(myArray[1]); // Affiche : « Laurence »

myArray[1] = 'Clarisse';  	// Modifie l'index n°1

alert(myArray[1]); // Affiche : « Clarisse »
			</code></pre>
		</figure>

		<p>
		En JavaScript, les types primitifs tels que les nombres, les valeurs logiques et les chaînes sont passés par valeur. Ceci signifie que quand vous faites quelque chose comme :
		</p>

		<figure class="block_code">
    		<pre><code>
let numberOfGuests = 20;
let totalNumberOfGuests = numberOfGuests; // 20
			</code></pre>
		</figure>

		<p>
		... c'est la valeur 20 qui est copiée dans la nouvelle variable (totalNumberOfGuests), et aucun lien n'est maintenu entre les deux variables.
		</p>

		<p>
		Ce n'est pas le cas avec les objets et tableaux, qui sont passés par référence. Si vous n'y prenez pas garde, cela peut conduire à des comportements inattendus. Par exemple :
		</p>

		<figure class="block_code">
    		<pre><code>
let artistProfile = {
    name: "Tao Perkington",
    age: 27,
    available: true
};
let allProfiles = [artistProfile]; // nouveau tableau contenant l'objet ci-dessus
artistProfile.available = false; // modification de l'objet
console.log(allProfiles) // affiche { nom: "Tao Perkington", âge: 27, disponible: false }
			</code></pre>
		</figure>


		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript/6278664-regroupez-vos-donnees-avec-les-tableaux-et-les-objets#/id/r-7178622" target="_blank">Le comptage d'éléments</a></h2>

		<figure class="block_code">
    		<pre><code>
let guests = ["Will Alexander", "Sarah Kate", "Audrey Simon"];
let howManyGuests = guests.length; // 3
			</code></pre>
		</figure>

		









		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1924043" target="_blank">Ajouter et supprimer des items</a></h2>

		<p>
			La méthode <code class="line_code">push()</code> permet d'ajouter un ou plusieurs items à un tableau. La méthode <code class="line_code">unshift()</code> fonctionne commepush(), excepté que les items sont ajoutés au début du tableau. :
		</p>

		<figure class="block_code">
    		<pre><code>
var myArray = ['Sébastien', 'Laurence'];

myArray.push('Ludovic'); // Ajoute « Ludovic » à la fin du tableau
myArray.unshift('Pauline', 'Guillaume'); // Ajoute « Pauline » et « Guillaume » au début du tableau
			</code></pre>
		</figure>

		<p>
			Les méthodes <code class="line_code">shift()</code> et <code class="line_code">pop()</code> retirent respectivement le premier et le dernier élément du tableau.
		</p>

		<figure class="block_code">
    		<pre><code>
myArray.shift(); // Retire « Sébastien »
myArray.pop(); // Retire « Guillaume »
			</code></pre>
		</figure>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1924055" target="_blank">Chaînes de caractères et tableaux</a></h2>

		<p>
			Les chaînes de caractères possèdent une méthode <code class="line_code">split()</code> qui permet de les découper en un tableau, en fonction d'un séparateur. 
		</p>
	
		<figure class="block_code">
    		<pre><code>
var cousinsString = 'Pauline Guillaume Clarisse',
    cousinsArray = cousinsString.split(' ');
			</code></pre>
		</figure>
		<p>
			La méthode <code class="line_code">split()</code> va couper la chaîne de caractères à chaque fois qu'elle va rencontrer une espace. Les portions ainsi découpées sont placées dans un tableau, ici <code class="line_code">cousinsArray</code>.
		</p>

		<p>
			L'inverse desplit(), c'est-à-dire créer une chaîne de caractères depuis un tableau, se nommejoin():
		</p>

		<figure class="block_code">
    		<pre><code>
var cousinsString_2 = cousinsArray.join('-'); //une chaîne de caractères va être créée, et les valeurs de chaque item seront séparées par un tiret.
			</code></pre>
		</figure>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1917892" target="_blank">Parcourir un tableau</a></h2>

		<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1924068" target="_blank">Parcourir avec <code class="line_code">for</code></a></h3>

		<p>
			Le principe pour parcourir un tableau est simple : il faut faire autant d'itérations qu'il y a d'items. Le nombre d'items d'un tableau se récupère avec la propriété <code class="line_code">length</code>.
		</p>

		<figure class="block_code">
    		<pre><code>
for (var i = 0; i < myArray.length; i++) {
	
    alert(myArray[i]);
		
}
			</code></pre>
		</figure>

		<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript/6279104-utilisez-la-bonne-boucle-pour-repeter-les-taches-for-while#/id/r-7179222" target="_blank">Parcourir avec <code class="line_code">for ... in</code></a></h3>

		<p>
		Bien que le méthode ci-dessus fonctionne, il y a deux façons plus faciles de parcourir en boucle des tableaux (ou de faire une itération sur leurs éléments).
		</p>

		<p>
		La boucle <code class="line_code">for…  in</code> est très comparable à l'exemple de boucle   for  normale, mais elle est plus facile à lire, et effectue tout le travail d'itération pour vous :
		</p>

		<figure class="block_code">
    		<pre><code>
const passengers = [
    "Will Alexander",
    "Sarah Kate'",
    "Audrey Simon",
    "Tao Perkington"
]

for (let i in passengers) {
   console.log("Embarquement du passager " + passengers[i]);
}
			</code></pre>
		</figure>

		<p>
		<code class="line_code">i</code> démarre automatiquement à zéro, et s'incrémente à chaque boucle. Vous imprimez donc  <code class="line_code">passengers[0]</code>, puis  <code class="line_code">passengers[1]</code>, etc., jusqu'à terminer l'itération sur tous les passagers. Vous pouvez bien sûr imprimer chaque élément sur la console, car chacun est une chaîne contenant le nom du passager.
		</p>



		<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript/6279104-utilisez-la-bonne-boucle-pour-repeter-les-taches-for-while#/id/r-7179203" target="_blank">Parcourir avec <code class="line_code">for ... of</code></a></h3>

		<p>
		Pour les cas où l'indice précis d'un élément n'est pas nécessaire pendant l'itération, vous pouvez utiliser une boucle <code class="line_code">for… of</code>  :
		</p>

		<figure class="block_code">
    		<pre><code>
const passengers = [
    "Will Alexander",
    "Sarah Kate",
    "Audrey Simon",
    "Tao Perkington"
]

for (let passenger of passengers) {
   console.log("Embarquement du passager " + passenger);
}
			</code></pre>
		</figure>

		<p>
		C'est encore plus utile si le tableau est un peu plus complexe et contient par exemple des objets :
		</p>

		<figure class="block_code">
    		<pre><code>
const passengers = [
    {
        name: "Will Alexander",
        ticketNumber: 209542
    },
    
    {
        name: "Sarah Kate",
        ticketNumber: 169336
    },
    
    {
        name: "Audrey Simon",
        ticketNumber: 779042
    },
    
    {
        name: "Tao Perkington",
        ticketNumber: 703911
    }
]

for (let passenger of passengers) {
   console.log('Embarquement du passager ' + passenger.name + ' avec le ticket numéro ' + passenger.ticketNumber);
}
			</code></pre>
		</figure>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1917961" target="_blank">Les objets littéraux</a></h2>

		<p>
			S'il est possible d'accéder aux items d'un tableau via leur indice, il peut être pratique d'y accéder au moyen d'un identifiant. Par exemple, dans le tableau des prénoms, l'item appelésisterpourrait retourner la valeur « Laurence ».<br />
			Pour ce faire, nous allons créer nous-mêmes un tableau sous la forme d'un objet littéral : 
		</p>

		<figure class="block_code">
    		<pre><code>
var family = {
    self: 'Sébastien',
    sister: 'Laurence',
    brother: 'Ludovic',
    cousin_1: 'Pauline',
    cousin_2: 'Guillaume'
};			</code></pre>
		</figure>

		<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1924114" target="_blank">La syntaxe d'un objet</a></h3>

		<p>
			Créer un objet vide :
		</p>

		<figure class="block_code">
    		<pre><code>
var myObject = {};	
			</code></pre>
		</figure>

		<h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1924123" target="_blank">Accès aux items</a></h3>

		 <p>
		 	Ce que nous avons créé est un objet, et les identifiants sont en réalité des propriétés, exactement comme la propriété <code class="line_code">length</code> d'un tableau ou d'une chaîne de caractères. Donc, pour récupérer le nom de la sœur, il suffit de faire :
		 </p>

		 <figure class="block_code">
    		<pre><code>
family.sister;

// ou alors

family['sister'];
			</code></pre>
		</figure>

		<p>
			Utile si l'identifiant est contenu dans une variable, comme ce sera le cas avec la boucle que nous allons voir après. Exemple :
		</p>

		<figure class="block_code">
    		<pre><code>
var id = 'sister';

alert(family[id]); // Affiche : « Laurence »
			</code></pre>
		</figure>

		<p>
			<div class="em">Cette façon de faire convient également aux propriétés de tout objet. Ainsi, si notre tableau se nomme <code class="line_code">myArray</code>, nous pouvons faire <code class="line_code">myArray['length']</code> pour récupérer le nombre d'items.</div>
		</p>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1924128" target="_blank">Ajouter des items</a></h2>

		<p>
			Il est possible d'ajouter un item en spécifiant un identifiant qui n'est pas encore présent. Par exemple, si nous voulons ajouter un oncle dans le tableau :
		</p>

		<figure class="block_code">
    		<pre><code>
family['uncle'] = 'Didier'; // « Didier » est ajouté et est accessible via l'identifiant « uncle »

// ou alors

family.uncle = 'Didier'; // Même opération mais d'une autre manière
			</code></pre>
		</figure>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1924137" target="_blank">Parcourir un objet avec <code class="line_code">for in</code></a></h2>

		<p>
			Il n'est pas possible de parcourir un objet littéral avec une boucle <code class="line_code">for</code>. Normal, puisqu'une boucle <code class="line_code">for</code> est surtout capable d'incrémenter une variable numérique, ce qui ne nous est d'aucune utilité dans le cas d'un objet littéral puisque nous devons posséder un identifiant. En revanche, la boucle <code class="line_code">for in</code> se révèle très intéressante !<br />
			Le fonctionnement est quasiment le même que pour un tableau, excepté qu'ici il suffit de fournir une « variable clé » qui reçoit un identifiant (au lieu d'un index) et de spécifier l'objet à parcourir :
		</p>

		<figure class="block_code">
    		<pre><code>
for (var id in family) { 	// On stocke l'identifiant dans « id » pour parcourir l'objet « family »
	
    alert(family[id]);		
}
			</code></pre>
		</figure>

		<h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1917996-les-objets-et-les-tableaux#/id/r-1924142" target="_blank">Utilisation des objets littéraux</a></h2>

		<p>
			Les objets littéraux ne sont pas souvent utilisés mais peuvent se révéler très utiles pour ordonner un code. On les utilise aussi dans les fonctions : les fonctions, avecreturn, ne savent retourner qu'une seule variable. Si on veut retourner plusieurs variables, il faut les placer dans un tableau et retourner ce dernier. Mais il est plus commode d'utiliser un objet littéral.<br />
			L'exemple classique est la fonction qui calcule des coordonnées d'un élément HTML sur une page Web. Il faut ici retourner les coordonnées x et y.
		</p>

		<figure class="block_code">
    		<pre><code>
function getCoords() {
    /* Script incomplet, juste pour l'exemple */

    return {
        x: 12,
        y: 21
    };
}

var coords = getCoords();

alert(coords.x); // 12
alert(coords.y); // 21
			</code></pre>
		</figure>

		<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript/6279176-gerez-des-erreurs-et-des-exceptions-dans-votre-programme#/id/r-7179540" target="_blank">Gérer les erreurs</a></h1>

		<p>
			Il y a généralement 3 types d'erreur :
			<ul>
				<li>L'erreur de synthaxe : erreur de frappe, oublie de parenthèse, ... </li>
				<li>L'erreur logique</li>
				<li>L'erreur d'exécution</li>
			</ul>
		</p>

		<p>Pour les erreurs de synthaxe et logique il faut chercher. Pour l'erreur d'exécution on peut faire ceci : </p>

		<figure class="block_code">
    		<pre><code>
if (dataExists && dataIsValid) {
// utiliser les données ici
} else {
// gérer l'erreur ici
}
			</code></pre>
		</figure>

		<p>
			ou
		</p>

		<figure class="block_code">
    		<pre><code>
try {
// code susceptible à l'erreur ici
} catch (error) {
// réaction aux erreurs ici
}
			</code></pre>
		</figure>

	
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
        </div>

    </div>


    </body>
</html>