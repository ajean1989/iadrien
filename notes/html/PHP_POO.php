<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>PHP - Programmation orienté objet</title>
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

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4735221-quest-ce-que-la-programmation-orientee-objet#/id/r-4735256" target="blank">Qu'est-ce que la programmation orientée objet ?</a></h1>

            <p>
            C'est un nouvel élément en programmation. Pour être plus précis, un objet c'est... un mélange de plusieurs variables et fonctions.
            </p>
            
            <p>
            En clair, programmer de manière orientée objet, c'est créer du code source (potentiellement complexe) mais que l'on masque en le plaçant à l'intérieur d'un cube (un objet) à travers lequel on ne voit rien. Pour la personne qui va l'utiliser, travailler avec un objet est donc beaucoup plus simple qu'avant : il suffit d'appuyer sur des boutons et on n'a pas besoin d'être diplômé en chimie pour s'en servir.
            </p>

            <p>
            Au lieu d'avoir des tonnes de tubes et de fioles dont il faut comprendre le fonctionnement, on nous propose juste quelques boutons sur la face avant du cube. L'utilisateur n'a plus qu'à employer les boutons du cube, sans se soucier de tout ce qui se passe à l'intérieur. Pour lui, le fonctionnement est donc complètement simplifié.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4735221-quest-ce-que-la-programmation-orientee-objet#/id/r-4735256" target="blank">Définir une classe pour créer des objets</a></h1>

            <p>
            Un objet est un ensemble de variables et de fonctions, regroupées dans un même endroit. On dit qu'on y encapsule les données.<br/>
            Pour pouvoir créer un objet, vous devez d'abord définir une <strong>classe</strong>. La classe est une sorte de plan qui indique comment créer des objets.
            </p>

            <p>
            Imaginez par exemple une classe <code class="line_code">Maison</code> : c'est le plan de construction.<br/>
            Grâce à la classe, on peut ensuite créer plusieurs objets ( <code class="line_code">maisonDeMathieu</code>, <code class="line_code">maisonDeJulie</code>...).
            </p>

            <p>
            Lorsqu'on crée une classe, on la place dans un fichier à son nom. Par exemple <code class="line_code">Maison.php</code>.
            </p>

            <p>
            Voici à quoi ressemble une classe (imaginaire) nommée  Maison  :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

class Maison  (écrit en PascalCase=la première lettre de chaque mot d'un mot composé est en majuscule)
{
    // Variables membres

    private $largeur;
    private $longueur;
    private $nombreEtages;
    private $porte;
    private $temperature;


    // Fonctions membres

    public function ouvrirPorte()
    {
        // ...
    }

    public function fermerPorte()
    {
        // ...
    }

    public function modifierTemperature($temperature)
    {
        // ...
    }
}
				</code></pre>
			</figure>

            <p>
            Comme je vous le disais, variables et fonctions sont encapsulées dans la classe. Cela permet de ne pas les mélanger avec d'autres variables et fonctions du même nom dans votre programme. Vous pouvez donc sans problème avoir 2 fonctions nommées <code class="line_code">ouvrirPorte</code> dans votre code, à condition qu'elles soient dans des classes différentes.
            </p>

            <div class="em">Vous remarquerez les mots-clés <code class="line_code">private</code> et <code class="line_code">public</code>. On va y revenir un peu plus tard, mais sachez qu'ils indiquent si ces éléments sont accessibles de l'extérieur de la classe. En général, toutes les variables membres sont privées car on veut les protéger de modifications hasardeuses par un développeur qui ne connaît pas le fonctionnement de la classe. Les fonctions sont plus souvent publiques, même si certaines peuvent rester privées.</div>

            <p>
            Pour résumer, les objets possèdent des <strong>propriétés</strong> (variables) et des <strong>méthodes</strong> (fonctions). Pour y accéder, il faut utiliser le symbole <code class="line_code">-&gt</code> à la suite de la variable. On parle de <strong>méthode</strong> dès qu'une fonction est associée à un objet.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4735351-non-mais-vraiment-quest-ce-que-la-programmation-orientee-objet#/id/r-4735514" target="blank">Instancier des objets</a></h1>

            <p>
            La classe créée ne suffit pas. Si nous voulons l'utiliser, nous devons l'instancier pour créer... des objets.
            </p>

            <p>
            On va créer ces objets dans un autre fichier. Vous pouvez appeler celui-ci comme vous voulez, disons que c'est <code class="line_code">index.php</code> :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

// Chargement de la classe
require_once("Maison.php");

// Instanciation d'un objet
$maisonDeMathieu = new Maison();
// Instanciation d'un autre objet
$maisonDeJulie = new Maison();

$maisonDeMathieu->ouvrirPorte();
$maisonDeMathieu->fermerPorte();
$maisonDeMathieu->modifierTemperature(21);

$maisonDeJulie->modifierTemperature(55); // 🔥😈
				</code></pre>
			</figure>

            <p>
            Ce code fait plusieurs choses :
            <ol>
                <li>Il <strong>charge la classe</strong> en mémoire. Eh oui, comme les fonctions, si vous ne les avez pas incluses au préalable, vous ne pourrez pas les utiliser !</li>
                <li>Il <strong>instancie des objets</strong> à partir de cette classe (la <code class="line_code">maisonDeMathieu</code> et la <code class="line_code">maisonDeJulie</code>). <code class="line_code">$maisonDeMathieu</code> et <code class="line_code">$maisonDeJulie</code> ne sont donc pas des variables mais des objets !</li>
                <li>Puis <strong>il appelle différentes fonctions membres de ces objets</strong> pour les modifier. Il ouvre puis ferme la porte de la maison de Mathieu, lui met la température à 21°... Chaque objet est indépendant.</li>
            </ol>
            </p>

            <div class="em">Rapel : Lorsque vous passez une variable en paramètre d’une fonction, PHP en fait une copie par défaut. Par exemple, à l’exécution de ce code, la variable $a n’a pas changé : </div>

            <figure class="block_code">
    			<pre><code>
&lt?php

// déclaration par référence avec le symbole &
function foo($var) {
    $var = 2;
}


$a=1;
foo ($a);
// $a vaut toujours 1
				</code></pre>
			</figure>

            <div class="em">Si vous souhaitez pouvoir modifier la variable au sein de la fonction, vous pouvez ajouter le symbole <code class="line_code">&</code> pour indiquer au langage de ne pas copier la valeur dans votre fonction, mais plutôt de manipuler directement la variable d’origine.</div>

            <figure class="block_code">
    			<pre><code>
&lt?php

// déclaration par référence avec le symbole &
function foo(&$var) {
    $var = 2;
}
 
$a=1;
foo ($a);
 
// $a vaut 2 maintenant
				</code></pre>
			</figure>

            <p>
            Si vous je parle de référence, c’est parce qu’en PHP, c’est un peu différent pour les objets. Ils sont toujours passés par référence aux différentes fonctions. Je manipule toujours le même objet en mémoire. Je n’ai pas besoin du <code class="line_code">&</code>.
            </p>

            <div class="em">Les objets se comparent de manière un peu différente des autres types de variables. Si vous créez 2 objets issus de la même classe, que vous leur assignez les mêmes valeurs et les comparez simplement (==), vous vérifiez que les 2 éléments possèdent les mêmes propriétés et les mêmes valeurs. Si vous testez strictement (===), alors vous vérifiez que vous êtes en train de manipuler la même instance.</div>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306872-decouvrez-les-objets-et-les-classes#/id/r-7306869" target="blank">Utilisez les fonctionnalités d'un objet</a></h1>

            <p>
            Il faut utiliser le symbole <code class="line_code">-></code> à la suite de la variable, comme dans l’exemple suivant :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

echo $date->format('d/m/Y');
				</code></pre>
			</figure>

            <p>
            Dans cet exemple, j’utilise <code class="line_code">echo</code> pour afficher le résultat du retour de la méthode <code class="line_code">format</code> de l'objet <code class="line_code">$date</code>. J’aurais aussi pu stocker le résultat de cette méthode dans une variable, ça s'utilise vraiment comme une fonction, sauf qu’il faut passer par un objet.
            </p>

            <p>
            Une méthode d'un objet peut ne rien vous retourner, comme vous retourner n'importe lequel des types primaires de PHP. Mais elle peut tout à fait vous retourner un objet.
            </p>

            <p>
            Retourner une instance offre la possibilité d'effectuer du chaînage. C'est-à-dire enchaîner les appels à différentes méthodes les unes à la suite des autres, sans avoir à faire référence à la variable. Comme ça :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

// D’abord, l’exemple sans chaînage :
$date = new DateTime;
$newDate = $date->modify('+1 day');
 
echo $date->format('d/m/Y').PHP_EOL;
echo $newDate->format('d/m/Y').PHP_EOL;
 
// Maintenant avec le chaînage. Nous exploitons directement
// l'objet qui nous est retourné sans le stocker dans une variable :
$formatedDate = $date->modify('+1 day')->format('d/m/Y');
echo $formatedDate.PHP_EOL;
				</code></pre>
			</figure>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306872-decouvrez-les-objets-et-les-classes#/id/r-7306870" target="blank">Créer un objet à partir d'un JSON</a></h1>

            <p>
            Lorsque vous manipulez des chaînes au format JSON et que celui-ci comprend la définition d'un objet, par exemple :
            </p>

            <figure class="block_code">
    			<pre><code>
{
    "date":"2021-03-23 07:35:44.011207",
    "timezone_type":3,
    "timezone":"Europe/Paris"
}
				</code></pre>
			</figure>

            <p>
            ... PHP n'a aucune indication. Il ne connaît pas la classe dont ces valeurs sont issues. Pourtant, lorsque vous allez lui demander de transformer cette chaîne en objet, il va y arriver : Vous allez obtenir un objet issu de la classe <code class="line_code">stdClass</code>.
            </p>

            <p>
            Pour éviter d’arrêter l’exécution du script par manque de connaissance, et d’afficher une erreur, lorsqu'aucune classe n'est spécifiée, PHP utilisera la classe <code class="line_code">stdClass</code>. Par ailleurs, vous pouvez tout à fait instancier cette classe manuellement.<br/>
            Ceci dit, je conseille toujours d’utiliser une autre classe que celle-ci, tout comme il sera préférable de ne pas abuser des capacités d'assignation dynamique de PHP.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306873-creez-vos-propres-classes#/id/r-7303744" target="blank">Créez vos propres classes</a></h1>

            <p>
            Une classe se déclare de la manière suivante :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

class NomDeLaClasse
{
}
				</code></pre>
			</figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306873-creez-vos-propres-classes#/id/r-7361548" target="blank">Ajoutez des propriétés (variables) et y accéder
            </a></h2>

            <p>
                L'intérêt de déclarer nos propriétés, c'est que nous allons pouvoir typer nos propriétés, c’est-à-dire garantir qu'elles contiennent bien la valeur attendue. Ça vous protège d'un mauvais usage de vos classes.
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

declare(strict_types=1);

class Pont
{
   public float $longueur = 0;
}

$pont = new Pont;
$pont->longueur = 263.0;

var_dump($pont);
				</code></pre>
			</figure>

            <p>
                <ul>
                    <li>En ligne 3 se trouve une instruction demandant à PHP d'être exigeant avec le typage : <code class="line_code">déclare(strict_type=1);</code>. Si pas activer, le langage fait la conversion pour vous, ce qui peut avoir des résultats inattendus si vous n'êtes pas attentif ! Voilà pourquoi je vous conseille de toujours activer le <code class="line_code">declare(strict_types=1);</code> dans vos fichiers.).</li>
                    <li>du mot clé <code class="line_code">public</code>, afin de définir l'accessibilité de la propriété, nous y reviendrons ; </li>
                    <li>du type de la propriété, ici <code class="line_code">float</code> (ce n’est pas obligatoire mais c’est une très bonne pratique) ;</li>
                </ul>
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306873-creez-vos-propres-classes#/id/r-7361589" target="blank">Ajoutez des méthodes (fonctions) et les utiliser
            </a></h2>

            <figure class="block_code">
    			<pre><code>
&lt?php

declare(strict_types=1);

class Pont
{
   public float $longueur;
   public float $largeur;
  
   public function getSurface(): float
   {
       return $this->longueur * $this->largeur;
   }
}
				</code></pre>
			</figure>

            <p>
            Que constate-t-on ?
            <ul>
                <li>La méthode <code class="line_code">getSurface()</code> est déclarée en commençant par sa visibilité "public". Nous y reviendrons au prochain chapitre. </li>
                <li>Puis le mot clé <code class="line_code">function</code> suivi d'un nom. Ce nom doit suivre cette fois-ci la nomenclature camelCase (C'est-à-dire que le premier mot est en minuscule, mais chaque nouveau mot commence par une majuscule).</li>
                <li>Ensuite une paire de parenthèses qui nous permettront par la suite d'y réclamer des arguments, de la même manière qu'une fonction.</li>
                <li>Juste après les parenthèses se trouve la déclaration du typefloat du résultat de la méthode. C’est optionnel mais c’est une excellente pratique.</li>
                <li>Enfin entre accolades, les instructions de la méthode.</li>
            </ul>
            </p>

            <p>
            Appelons maintenant cette méthode pour obtenir la surface : 
            </p>

            <figure class="block_code">
    			<pre><code>
                // …

$pont = new Pont;
$pont->longueur = 286.0;
$pont->largeur = 15.0;

$surface = $pont->getSurface();

var_dump($surface);
				</code></pre>
			</figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306873-creez-vos-propres-classes#/id/r-7361601" target="blank">Manipulez vos propriétés et vos méthodes depuis votre objet
            </a></h2>

            <p>
            Dans notre exemple, peu importe le pont créé, getSurface() doit renvoyer la surface du pont en question, à partir de sa propre largeur et de sa propre longueur. Nous n’aurons pas les mêmes tailles pour tous les ponts. Pour cela, on utilise le mot clé <code class="line_code">$this</code> :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

declare(strict_types=1);

class Pont
{
   public float $longueur;
   public float $largeur;
  
   public function getSurface(): float
   {
       return $this->longueur * $this->largeur;
   }
}

$towerBridge = new Pont;
$towerBridge->longueur = 286.0;
$towerBridge->largeur = 15.0;

$manhattanBridge = new Pont;
$manhattanBridge->longueur = 2089.0;
$manhattanBridge->largeur = 36.6;

$towerBridgeSurface = $towerBridge->getSurface();
$manhattanBridgeSurface = $manhattanBridge->getSurface();

var_dump($towerBridgeSurface);
var_dump($manhattanBridgeSurface);
				</code></pre>
			</figure>

            <p>
            Dans cet exemple, nous avons 2 instances de pont, chacune avec ses dimensions. L'usage de $this nous permet de faire références aux valeurs portées par chacune des instances.
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