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

            <div class="em">Un fichier par class et le nom du fichier = nom de la class</div>
            
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
    private $temperature = 35;  // Par défaut


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

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306937-concevez-lapi-publique-de-vos-objets#/id/r-7361649" target="blank">Définissez le domaine public de vos classes
            </a></h2>

            <p>
            Toutes les méthodes et les propriétés que vous allez vouloir garder accessibles au niveau de l’objet, que vous souhaitez utiliser en dehors des méthodes, de la classe elle même, doivent être préfixées du mot clé <code class="line_code">public</code>. 
            </p>

            <p>
            Si maintenant nous avons besoin d’ajouter une propriété ou méthode qui ne servira qu’au sein de la classe (et pas à l’extérieur), nous allons la préfixer du mot-clé <code class="line_code">private</code>.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306937-concevez-lapi-publique-de-vos-objets#/id/r-7361669" target="blank">Accédez aux propriétés privées
            </a></h2>

            <p>
            Avec le typage strict, vous êtes garanti d'avoir un flottant en longueur et en largeur. Mais rien ne vous empêche d'y insérer des valeurs négatives, par exemple. Pour se protéger, il faut privatiser <code class="line_code">$longueur</code> et <code class="line_code">$largeur</code> :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

declare(strict_types=1);

class Pont
{
   private string $unite = 'm²';
  
   private float $longueur;
   private float $largeur;
}

$towerBridge = new Pont;
$towerBridge->longueur = 286.0;
				</code></pre>
			</figure>

            <p>
            A présent ce n’est plus possible de modifier les valeurs depuis l'extérieur de l'objet ; les modifications doivent absolument être faites dans la classe.
            </p>

            <p>
            Dès que l’on verrouille des accès, on rentre dans le principe de l'encapsulation. On encapsule, on enferme les données dans l’objet et on va devoir créer une méthode publique, qu’on appellera <code class="line_code">setLongueur</code>, pour les modifier :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

declare(strict_types=1);

class Pont
{
   private string $unite = 'm²';
  
   private float $longueur;
   private float $largeur;
  
   public function setLongueur(float $longueur): void
   {
       if ($longueur < 0) {
           trigger_error(
               'La longueur est trop courte. (min 1)',
               E_USER_ERROR
           );
       }
      
       $this->longueur = $longueur;
   }
}

$towerBridge = new Pont;
$towerBridge->setLongueur(286.0);
$towerBridge->setLongueur(-286.0);
				</code></pre>
			</figure>

            <p>
            Cette méthode s'appelle un setter ou mutateur en français.
            </p>

            <p>
            Elle est souvent accompagnée d'un getter ou accesseur en français. Cette seconde méthode permet d'obtenir la valeur contenue dans la propriété. Dans notre exemple, ce serait une méthode nomméegetLongueur :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

class Pont
{
…
    public function getLongueur(): float {
        return $this->longueur;
    }
}
				</code></pre>
			</figure>

            <div class="em">Par convention (ou par habitude) les développeurs préfixent ces méthodes là par get pour les getter et set pour les setter. En référence aux verbes anglais.</div>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7361681-utilisez-les-proprietes-et-methodes-statiques#/id/r-7361736" target="blank">Découvrez les méthodes statiques (<code class="line_code">self</code>, <code class="line_code">::</code>)
            </a></h2>

            

            <p>
            Lors des précédents chapitres, nous avons étudiés les propriétés et méthodes qui se rattachaient à un objet, comme la longueur ou la largeur d’un pont. Vous allez maintenant découvrir les méthodes et propriétés qui se rapportent à une classe (donc communes à tous nos objets). On les appelle propriétés et méthodes statiques.
            </p>

            <div class="em">On peut écrire comme cela toute les fonctions afférentes à un thème dans une Class pour les regrouper au même endroit</div>

            <p>
                Parfois, créer une instance n’est pas nécessaire. Pour utiliser une méthode sans instance, elle doit être déclarée statique et nous ferons attention de manipuler uniquement des propriétés statiques. Lorsqu’une propriété est déclarée statique, la valeur qu’elle contient sera partagée pour toutes les instances.
            </p>

            <p>
            Déclarons une première méthode statique avec le mot clé static :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

declare(strict_types=1);

class Pont
{
   public static function validerTaille(float $taille): bool
   {
       if ($taille < 50.0) {
           trigger_error(
               'La longueur est trop courte. (min 50m)',
               E_USER_ERROR
           );
       }
      
       return true;
   }
}

var_dump(Pont::validerTaille(150.0));
var_dump(Pont::validerTaille(20.0));
				</code></pre>
			</figure>

            <p>
            Pourquoi on n’a pas utilisé une flèche pour accéder à <code class="line_code">validerTaille()</code> ?
            </p>

            <p>
            <code class="line_code">Pont</code> fait référence à la classe or, rappelez-vous, <code class="line_code">-></code> permet d'accéder aux éléments d'un objet, c'est-à-dire d'une instance (une variable). 
            </p>

            <p>
            Pour dire à PHP que nous souhaitons faire référence à un élément de la classe, il faut utiliser <code class="line_code">::</code> à la place, comme pour les constantes. Sans ceci, il va chercher à utiliser la méthode d'un objet contenu dans une constante nommée <code class="line_code">Pont</code>.
            </p>

            <p>
            Comme vous pouvez le voir sur cet exemple, les méthodes statiques sont particulièrement utiles pour réaliser des vérifications ou des calculs sans effet sur l’objet. Et tout comme une méthode classique, vous pouvez aussi y faire appel depuis votre objet. Mais il y a une subtilité, vous ne pourrez pas l'appeler avec le mot clé <code class="line_code">$this</code>  pour les mêmes raisons que pour la flèche.
            </p>

            <p>
            Vous devez utiliser le mot clé <code class="line_code">self</code> pour cibler une méthode statique de classe, lorsque vous l'appelez depuis une instance de cette même classe. Remplaçons notre vérification de tout à l'heure :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

declare(strict_types=1);

class Pont
{
   public static function validerTaille(float $taille): bool
   {
       if ($taille < 50.0) {
           trigger_error(
               'La taille est trop courte. (min 50m)',
               E_USER_ERROR
           );
       }
      
       return true;
   }
  
   public function setLongueur(float $longueur): void
   {
       self::validerTaille($longueur);
      
       $this->longueur = $longueur;
   }
}

$towerBridge = new Pont;
$towerBridge->setLongueur(20.0);
				</code></pre>
			</figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7361681-utilisez-les-proprietes-et-methodes-statiques#/id/r-7361759" target="blank">Utilisez des valeurs immuables
            </a></h2>

            <p>
            Parfois, vous pouvez avoir besoin d’une propriété statique immuable, c’est-à-dire qui ne changera jamais. Nous pouvons alors passer cette propriété en constante avec le mot-clé <code class="line_code">const</code> + NOM ( qui, par convention sont écrites en UPPER_SNAKE_CASE (tout en majuscule, avec les mots séparés par des underscores)) :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

declare(strict_types=1);

class Pont
{
   private const UNITE = ‘m²’;
   private float $longueur;
   private float $largeur;
  
   public function getSurface(): string
   {
       return ($this->longueur * $this->largeur) . self::UNITE;
   }
  // setLongueur et setLargeur ne changent pas
}

$towerBridge = new Pont;
$towerBridge->setLongueur(286.0);
$towerBridge->setLargeur(15.0);

echo $towerBridge->getSurface();
				</code></pre>
			</figure>

            <p>
            Une constante est statique, on utilise le mot-clé <code class="line_code">self</code> pour l’utiliser dans <code class="line_code">getSurface</code>.
            </p>

            <div class="em">Seules les expressions de type scalaire (bool, int, float et string) et des tableaux contenant uniquement des expressions scalaires sont acceptées pour les constantes.</div>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306942-exploitez-les-methodes-communes-aux-objets#/id/r-7304311" target="blank">Exploitez les méthodes communes aux objets (__construct, ...) 
            </a></h2>

            <p>
            L'usage du mot clé <code class="line_code">class</code> vous donne accès, dès le départ, à un jeu de méthodes sans que vous n'ayez rien à écrire. Ces méthodes sont prédéfinies par PHP, et sont appelées automatiquement dans la plupart des cas. Ce jeu de méthodes est un moyen d'intervenir dans le processus de création, modification et suppression des objets de PHP, afin d'y ajouter des comportements personnalisés.
            </p>

            <p>
            Elles sont reconnaissables parce qu'elles sont préfixées par deux underscores. Il en existe plusieurs, que vous pouvez regarder dans la documentation PHP. Ici, nous nous intéressons tout d'abord à deux d’entre elles : <code class="line_code">__construct</code> et <code class="line_code">__destruct</code>.
            </p>
            
            <p>
            La première est une méthode appelée automatiquement par PHP lorsque vous créez une instance à l'aide du mot clénew. On appelle la méthode <code class="line_code">__construct</code> un constructeur. La majeure partie du temps, le constructeur nous sert à initialiser des données de départ pour notre objet.
            </p>

            <p>
            La seconde est un destructeur. La méthode est appelée automatiquement lorsque l’objet est supprimé de la mémoire, ce qui est fait à chaque fois que le script se termine. Pour faire simple, dès que PHP détecte que plus rien ne fait référence à un objet en mémoire, il le détruit, et donc déclenche <code class="line_code">__destruct</code>.
            </p>

            <p>
            Reprenons notre pont avec deux mutateurs pour définir les valeurs des longueur et largeur :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
 
 declare(strict_types=1);
  
 class Pont
 {
     private float $longueur;
     private float $largeur;
  
     public function setLongueur(float $longueur): void
     {
         $this->longueur = $longueur;
     }
  
     public function setLargeur(float $largeur): void
     {
         $this->largeur = $largeur;
     }
 }
  
 $towerBridge = new Pont;
 $towerBridge->setLongueur(286.0);
 $towerBridge->setLargeur(62.2);
				</code></pre>
			</figure>

            <p>
            Et remplaçons à présent les mutateurs par l'usage du constructeur.
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
 
 declare(strict_types=1);
  
 class Pont
 {
     private float $longueur;
     private float $largeur;
  
     public function __construct(float $longueur, float $largeur)
     {
         $this->longueur = $longueur;
         $this->largeur = $largeur;
     }
 }
  
 $towerBridge = new Pont(286.0, 62.0);    // C'est ici que c'est imoortant 
				</code></pre>
			</figure>

            <p>
                __construct permet de passer en paramètre de la class des valeurs ! Assignées comme défini dans le __construct.
            </p>

            <p>
            Depuis PHP8, vous pouvez aussi le rencontrer sous sa forme courte. En précisant la visibilité directement au niveau des arguments du constructeur, vous pouvez ne pas déclarer les propriétés et leur assignation. Ce sera fait automatiquement par PHP :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
 
declare(strict_types=1);
 
class Pont
{
    public function __construct(private float $longueur, private float $largeur)
    {
    }
}
 
$towerBridge = new Pont(286.0, 62.0);
var_dump($towerBridge);
				</code></pre>
			</figure>

            <p>
                D'autres méthodes magiques <a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306942-exploitez-les-methodes-communes-aux-objets#/id/r-7306939" target="blank">ici</a>
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306947-procedez-a-un-heritage#/id/video_Player_1" target="blank">Découvrez la mécanique de l'héritage
            </a></h1>

            <p>
            L'héritage nous permet d’accéder aux propriétés et méthodes d’une classe “parent” depuis les “enfants”. 
            </p>

            <p>
            Regardons ce code, permettant de définir un utilisateur :
            </p>

            <figure class="block_code">
    			<pre><code>
 &lt?php
 
 declare(strict_types=1);
  
 class User
 {
     private const STATUS_ACTIVE = 'active';
     private const STATUS_INACTIVE = 'inactive';
  
     public function __construct(public string $username, private string $status = self::STATUS_ACTIVE)
     {
     }
  
     public function setStatus(string $status): void
     {
         if (!in_array($status, [self::STATUS_ACTIVE, self::STATUS_INACTIVE])) {
             trigger_error(sprintf('Le status %s n\'est pas valide. Les status possibles sont : %s', $status, implode(', ', [self::STATUS_ACTIVE, self::STATUS_INACTIVE])), E_USER_ERROR);
         };
 
         $this->status = $status;
     }
  
     public function getStatus(): string
     {
         return $this->status;
     }
 }
				</code></pre>
			</figure>

            <p>
            Et à présent créons ensemble un administrateur :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
 
 declare(strict_types=1);
  
 class Admin
 {
     private const STATUS_ACTIVE = 'active';
     private const STATUS_INACTIVE = 'inactive';
  
     // Ajout d'un tableau de roles pour affiner les droits des administrateurs :)
     public function __construct(public string $username, private array $roles = [], private string $status = self::STATUS_ACTIVE)
     {
     }
  
     public function setStatus(string $status): void
     {
         if (!in_array($status, [self::STATUS_ACTIVE, self::STATUS_INACTIVE])) {
             trigger_error(sprintf('Le status %s n\'est pas valide. Les status possibles sont : %s', $status, implode(', ', [self::STATUS_ACTIVE, self::STATUS_INACTIVE])), E_USER_ERROR);
         };
  
         $this->status = $status;
     }
  
     public function getStatus(): string
     {
         return $this->status;
     }
  
     // Méthode d'ajout d'un rôle, puis on supprime les doublons avec array_filter.
     public function addRole(string $role): void
     {
         $this->roles[] = $role;
         $this->roles = array_filter($this->roles);
     }
 
     // Méthode de renvoie des rôles, dans lequel on définit le rôle ADMIN par défaut.
     public function getRoles(): array
     {
         $roles = $this->roles;
         $roles[] = 'ADMIN';
 
         return $roles;
     }
  
     public function setRoles(array $roles): void
     {
         $this->roles = $roles;
     }
 }
				</code></pre>
			</figure>

            <p>
            Dans les deux classes nous retrouvons des propriétés similaires, comme le nom et le statut. Il y a aussi des méthodes en commun pour la gestion du statut. La seule différence est l’ajout d’une gestion de rôles dans l’admin. C’est dommage d’avoir à répéter ce code.
            </p>

            <p>
            L’héritage va nous permettre de supprimer les parties dupliquées. Voyons ensemble comment faire en étendant les classes.
            </p>

            <p>
            Nous allons modifier notre classe   Admin  pour qu’elle bénéficie du code de la classe   User. Avec l’héritage, la classe hérite des propriétés, ainsi que des méthodes des classes "parentes". Voyez ceci exactement comme un arbre généalogique :
            </p>

            <img src="../images/16250498796755_p2c1-1 (1).png" alt="généalogie héritage PHP"/>

            <div class="em">En PHP (contrairement au C++ ou au Python) vous ne pouvez hériter que d'un parent à la fois, qui lui-même ne pourra avoir qu'un parent au maximum, etc.</div>

            <p>
            Pour ce faire, nous allons employer le mot clé <code class="line_code">extends</code>, suivi du nom de la classe que nous souhaitons étendre : <code class="line_code">Admin extends User</code>. Cela signifiera donc que nos administrations bénéficieront de toutes les propriétés et méthodes de la classe <code class="line_code">User</code>. Le mot-clé <code class="line_code">extends</code> peut se lire par “est un” : un administrateur est un utilisateur (avec des droits spécifiques). L’héritage est donc complètement adapté.
            </p>

            <p>
            Modifions la classe de notre exemple :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
 
 declare(strict_types=1);
  
 class User
 {
     public const STATUS_ACTIVE = 'active';
     public const STATUS_INACTIVE = 'inactive';
  
     public function __construct(public string $username, public string $status = self::STATUS_ACTIVE)
     {
     }
 
     public function setStatus(string $status): void
     {
         if (!in_array($status, [self::STATUS_ACTIVE, self::STATUS_INACTIVE])) {
             trigger_error(sprintf('Le status %s n\'est pas valide. Les status possibles sont : %s', $status, implode(', ', [self::STATUS_ACTIVE, self::STATUS_INACTIVE])), E_USER_ERROR);
         };
 
         $this->status = $status;
     }
 
     public function getStatus(): string
     {
         return $this->status;
     }
 }
  
 class Admin extends User
 {
     // Ajout d'un tableau de roles pour affiner les droits des administrateurs :)
     public function __construct(public string $username, public array $roles = [], public string $status = self::STATUS_ACTIVE)
     {
     }
  
     // Méthode d'ajout d'un rôle, puis on supprime les doublons avec array_filter.
     public function addRole(string $role): void
     {
         $this->roles[] = $role;
         $this->roles = array_filter($this->roles);
     }
  
     // Méthode de renvoie des rôles, dans lequel on définit le rôle ADMIN par défaut.
     public function getRoles(): array
     {
         $roles = $this->roles;
         $roles[] = 'ADMIN';
  
         return $roles;
     }
 
     public function setRoles(array $roles): void
     {
         $this->roles = $roles;
     }
 }
				</code></pre>
			</figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306996-decouvrez-comment-profiter-des-proprietes-et-methodes-dont-votre-classe-vient-d-heriter#/id/r-7306992" target="blank">Accédez aux propriétés de la classe parente</a></h2>

            <p>
            Lorsque vous utilisez l'héritage, depuis l'objet comme depuis la classe, vous pouvez accéder aux propriétés de la classe parente de la même manière qu'avant, avec la flèche <code class="line_code">-></code>. Il en va de même pour les propriétés statiques.
            </p>

            <p>
            En revanche, ceci marche en cascade : vous ne pourrez pas faire référence aux propriétés (statiques ou non) de l'enfant depuis le parent. 
            </p>

            <p>
            Pour faire référence à un parent, vous devez utiliser le nouveau mot clé <code class="line_code">parent</code>. Il permet de faire référence à une classe parente. En revanche, lorsque votre classe hérite d’une classe, qui elle-même hérite d’une classe, qui elle-même… bref, vous ne pouvez pas cibler la classe parente désirée, avec le mot clé <code class="line_code">parent</code>.
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
 
 declare(strict_types=1);
  
 class User
 {
     public const STATUS_ACTIVE = 'active';
     public const STATUS_INACTIVE = 'inactive';
  
     public static $nombreUtilisateursInitialisés = 0;
  
     public function __construct(public string $username, public string $status = self::STATUS_ACTIVE)
     {
     }
 }
  
 class Admin extends User
 {
     public static $nombreAdminInitialisés = 0;
  
     // mise à jour des valeurs des propriétés statiques de la classe courante avec `self`, et de la classe parente avec `parent`
     public static function nouvelleInitialisation()
     {
         self::$nombreAdminInitialisés++; // classe Admin
         parent::$nombreUtilisateursInitialisés++; // classe User
     }
 }
  
 Admin::nouvelleInitialisation();
 var_dump(Admin::$nombreAdminInitialisés, Admin::$nombreUtilisateursInitialisés, User::$nombreUtilisateursInitialisés);
 var_dump(User::$nombreAdminInitialisés); // ceci ne marche pas.
				</code></pre>
			</figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306996-decouvrez-comment-profiter-des-proprietes-et-methodes-dont-votre-classe-vient-d-heriter#/id/r-7306993" target="blank">Accédez aux méthodes de la classe parente</a></h2>

            <p>
            En ce qui concerne les méthodes de classe, depuis un objet, tout comme les accès aux propriétés, rien ne change. Vous pourrez accéder aux méthodes de la même manière qu'avant, avec la flèche <code class="line_code">-></code>.
            </p>

            <p>
            PHP vous permet également de réécrire une méthode existante d’un parent, dans une classe enfant. On parle de <strong>surcharge</strong>. 
            </p>

            <p>
            Lorsque vous surchargez une méthode, vous pouvez choisir d’exploiter la méthode parente <strong>et</strong> d’ajouter un comportement supplémentaire, <strong>ou</strong> de choisir de complètement réécrire le comportement. Dans le premier cas, lorsque vous souhaitez appeler la méthode parente, plutôt que la flèche, il faut utiliser <code class="line_code">parent::</code>.
            </p>

            <p>
            Que vous permet de faire PHP, et que vous impose-t-il lorsque vous réécrivez/surchargez une méthode existante dans une classe parente ? Pour commencer, sa signature doit rester compatible avec la méthode d'origine :
            <ul>
                <li>vous ne pouvez pas enlever des arguments ;</li>
                <li>vous pouvez ajouter un argument uniquement s'il est optionnel ;</li>
                <li>Vous pouvez changer le type d'un argument uniquement s'il est compatible avec le type d'origine ;</li>
                <li>vous pouvez changer le type de retour de la méthode uniquement s'il est compatible avec le type d'origine.</li>
            </ul>
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
 
 declare(strict_types=1);
  
 class User
 {
     public const STATUS_ACTIVE = 'active';
     public const STATUS_INACTIVE = 'inactive';
  
     public function __construct(public string $username, public string $status = self::STATUS_ACTIVE)
     {
     }
  
     public function setStatus(string $status): void
     {
         if (!in_array($status, [self::STATUS_ACTIVE, self::STATUS_INACTIVE])) {
             trigger_error(sprintf('Le status %s n\'est pas valide. Les status possibles sont : %s', $status, implode(', ', [self::STATUS_ACTIVE, self::STATUS_INACTIVE])), E_USER_ERROR);
         };
  
         $this->status = $status;
     }
  
     public function getStatus(): string
     {
         return $this->status;
     }
 }
  
 class Admin extends User
 {
     public const STATUS_LOCKED = 'locked';
  
     // la méthode est entièrement réécrite ici :) seule la signature reste inchangée
     public function setStatus(string $status): void
     {
         if (!in_array($status, [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_LOCKED])) {
             trigger_error(sprintf('Le status %s n\'est pas valide. Les status possibles sont : %s', $status, implode(', ', [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_LOCKED])), E_USER_ERROR);
         };
 
         $this->status = $status;
     }
  
     // la méthode utilisée est celle de la classe parente, puis ajoute un comportement :)
     public function getStatus(): string
     {
         return strtoupper(parent::getStatus());
     }
 }
  
 $admin = new Admin('Paddington');
 $admin->setStatus(Admin::STATUS_LOCKED);
 echo $admin->getStatus();
				</code></pre>
			</figure>

            <p>
            Comme vous avez pu le voir dans l’exemple précédent ciblant une propriété parente, lorsqu’une méthode est héritée depuis une classe enfant, vous pouvez choisir :
            <ul>
                <li>d’appeler la méthode de la classe courante avec <code class="line_code">$this</code> (ou <code class="line_code">self</code> pour les méthodes statiques) ;</li>
                <li>ou bien de cibler la méthode parente avec le mot clé <code class="line_code">parent::</code>.</li>
            </ul>
            Notez que si la méthode a été “surchargée” (réécrite) plusieurs fois dans l’arbre généalogique, le mot clé   parent::  ne permet pas de préciser si vous souhaitez faire appel à la méthode du parent, ou bien du grand-parent, etc. PHP va remonter l’arborescence de classes héritées, et utiliser la première définition de la méthode qu’il trouve. Méthode qui elle-même pourra éventuellement faire appel à la méthode parente.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306999-controlez-lacces-aux-proprietes-et-aux-methodes-de-vos-objets#/id/r-7306997" target="blank">Empêchez l'accès aux propriétés et aux méthodes</a></h2>

            <p>
            Nous avons déjà croisé 2 formes de visibilité, publique et privée, dans la première partie. Mais jusqu'ici, c'était uniquement via une seule classe. Que se passe-t-il lorsque je définis une propriété ou une méthode comme privée, puis que j'hérite de cette classe ?
            </p>

            <p>
            Un élément privé devient uniquement accessible pour la classe dans laquelle il se trouve. L'héritage est interrompu pour cet élément, qu'il s'agisse d'une propriété ou d'une méthode.
            </p>

            <p>
            Heureusement, nous avons accès à une troisième visibilité nous apportant un peu de finesse.
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7306999-controlez-lacces-aux-proprietes-et-aux-methodes-de-vos-objets#/id/r-7306998" target="blank">Empêchez l'accès aux propriétés et aux méthodes</a></h3>

            <p>
            Cette visibilité s'applique par le biais du mot clé <code class="line_code">protected</code>. Donc pour synthétiser, nous avons 3 moyens d'exposer nos propriétés et nos méthodes :
            <ul>
                <li><code class="line_code">public</code> ouvre l'accès à tous ;</li>
                <li><code class="line_code">private</code> ferme à tous ;</li>
                <li>et <code class="line_code">protected</code> permet de fermer à l'extérieur, mais d'ouvrir à l'héritage. </li>
            </ul>
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7307048-contraignez-l-usage-de-vos-classes#/id/r-7307044" target="blank">Imposez l'héritage d’une classe</a></h2>

            <p>
            Lorsque vous voulez garantir un usage particulier, mais laisser les classes enfants décider de la manière dont le code doit fonctionner, alors l’abstraction est LA mécanique désirée !
            </p>

            <p>
            Pensons un instant à notre logiciel. L’utilisateur est étendu par un administrateur, puis nous avons travaillé avec des classes <code class="line_code">Player</code> et <code class="line_code">QueuingPlayer</code> dans les TP. Finalement, on se rend compte que les <code class="line_code">Player</code> pourraient eux aussi hériter de <code class="line_code">User</code>, et que jamais nous n’allons instancier la classe <code class="line_code">User</code> seule puisque nos utilisateurs seront forcément soit des joueurs, soit des administrateurs. Une idée serait d’interdire l’usage de User seul, et dans le même temps, de forcer son héritage. La classe servira de “squelette” pour les classes suivantes. Elle contient les bases minimalistes nécessaires.
            </p>

            <p>
            Dans notre code, ceci est représenté par le mot clé abstract. Il va venir en préfixe de la déclaration d'une classe.
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
 
 abstract class User
 {
 }
				</code></pre>
			</figure>

            <p>
            À présent, il n'est plus possible d'utiliser la classe User  seule.
            </p>

            <p>
            Ce qui est pratique avec le mot clé   abstract  qui se situe devant le mot clé class, c’est qu’une fois qu’il est là, on peut aussi l’utiliser devant une méthode de classe ! Cela permet de déclarer la signature de la méthode (visibilité, statique ou non, nom, arguments, et type de retour) comme nécessaire, mais nous n'écrivons pas son comportement. Nous terminons là par un ";", nous ne mettons pas d’accolades, et pas de code non plus. Pas tout de suite. Nous exprimons juste que cette méthode doit exister dans les classes enfants, sans dire comment elle fonctionne. C’est à la classe enfant de porter cette responsabilité.
            </p>

            <p>
            Pour le démontrer, imaginons la méthode   getUsername()  dont le retour serait l’e-mail pour un administrateur, et le pseudo pour un joueur.
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

declare(strict_types=1);

abstract class User
{
    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';

    public function __construct(public string $email, public string $status = self::STATUS_ACTIVE)
    {
    }

    public function setStatus(string $status): void
    {
        assert(
            in_array($status, [self::STATUS_ACTIVE, self::STATUS_INACTIVE]),
            sprintf('Le status %s n\'est pas valide. Les status possibles sont : %s', $status, [self::STATUS_ACTIVE, self::STATUS_INACTIVE])
        );
    
        $this->status = $status;
    }
    
    public function getStatus(): string
    {
        return $this->status;
    }
    
    abstract public function getUsername(): string;
}

class Admin extends User
{
    // Ajout d'un tableau de roles pour affiner les droits des administrateurs :)
    public function __construct(string $email, string $status = self::STATUS_ACTIVE, public array $roles = [])
    {
        parent::__construct($email, $status);
    }

    // ...
    
    public function getUsername(): string
    {
        return $this->email;
    }
}

class Player extends User
{
    // Ajout d'un tableau de roles pour affiner les droits des administrateurs :)
    public function __construct(string $email, public string $username, string $status = self::STATUS_ACTIVE)
    {
        parent::__construct($email, $status);
    }

    // ...
    
    public function getUsername(): string
    {
        return $this->username;
    }
}
				</code></pre>
			</figure>

            <div class="em">Lorsque vous décidez de déclarer des méthodes abstraites, vous devez impérativement écrire leur logique dans une classe enfant.</div>

            <p>
            Grâce à cette mécanique, vous êtes à présent capable de créer des structures préparées, avec des attentes particulières, qui devront être étendues et écrites plus tard. 
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7307048-contraignez-l-usage-de-vos-classes#/id/r-7307045" target="blank">Empêchez l'héritage</a></h2>

            <p>
            Pour interdire l'héritage d'une classe, nous allons utiliser le mot clé <code class="line_code">final</code>. Il va venir préfixer le mot clé <code class="line_code">class</code>, de la même manière que le mot clé <code class="line_code">abstract</code>.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7307052-gerez-le-comportement-d-une-classe-parente#/id/r-7305295" target="blank">Changez la valeur d'une propriété statique ou d'une constante</a></h2>

            <p>
            Il arrive de vouloir utiliser une constante de la classe par défaut et d’utiliser une surcharge des classes enfant s’il y en a. Nous souhaitons utiliser les constantes de <code class="line_code">User</code> par défaut, mais si une classe enfant les redéfinit (comme c’est le cas avec <code class="line_code">Admin</code>), nous souhaitons les utiliser à la place. Pour autoriser cette situation, il faut utiliser un mot clé que vous avez déjà rencontré. Il s'agit de <code class="line_code">static</code>. Au lieu de le placer devant une déclaration de méthode ou de propriété, nous allons l'utiliser en remplacement du mot clé <code class="line_code">self</code>.
            </p>

            <div class="em"><code class="line_code">Self</code> fait référence à la classe courante, et permet de faire appel à un élément de cette classe. <code class="line_code">Static</code> fait aussi référence à la classe courante, et permet de faire appel à un élément de cette classe, <strong>mais</strong> si l’élément est redéclaré dans une classe enfant, alors c’est celui-ci qui sera utilisé à la place.</div>

            <p>
            Le mot clé <code class="line_code">static</code> nous permet d’utiliser la déclaration de la constante la plus proche de la classe instanciée, dans la hiérarchie.
            </p>

           
            <div class="em">Toutes les fonctions définies dans l'interface doivent être utilisées dans l'implémentation.</div>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7307099-specialisez-vos-objets-avec-les-espaces-de-noms#/id/video_Player_1" target="blank">Les espaces de noms - namespace</a></h1>

            <p>
                Résumer :
            </p>


            <figure class="block_code">
    			<pre><code>
&lt?php


namespace Forum\Message;
class Message
{}

namespace Messenger\Message;
class Message
{}
				</code></pre>
			</figure>

            <figure class="block_code">
    			<pre><code>
&lt?php


use Forum\Message;
use Messenger\Message as ContactMessage; //as car Message est aussi utilisé pour forum
use DataTime; // on import les class de php, on peut aussi juste mettre un \ devant la class (ex : new \DateTime)

require_once 'class/message.php'
require_once 'class/Contact/message.php'

$nouvelleinstance0 = new Message
$nouvelleinstance1 = new ContactMessage

$php= new DateTime();

{}
				</code></pre>
			</figure>

            <p>
                ------------------------------
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://grafikart.fr/tutoriels/autoloader-composer-php-1144#autoplay" target="blank">L'autoload'</a></h2>

            <p>
                Pour éviter d'écrire les require_once on peut utiliser l'autoloader qui s'occupera de la faire pour nous. 
            </p>

            <p>
                Il faut déjà télécharger composer (voir chap) et configurer le fichier composer.json à la racine de notre projet :
            </p>

            <figure class="block_code">
    			<pre><code>
{
    "name": "adrien/tests",
    "autoload": {
        "psr-4": {
            "Adrien\\Tests\\": "src/"
        }
    },
    "authors": [
        {
            "name": "adrien",
            "email": "adrien.jean1989@gmail.com"
        }
    ],
    "autoload":{
        "psr-4" : {
            "Namespace\\" : "dossier_où_il_situe/"
        }
    }
    "require": {}
}
				</code></pre>
			</figure>

            <p>
                Si c'est pas déjà fait comme ci-dessus ;)
            </p>

            <p>
                Ensuite on lance l'autoload avec :
            </p>

            <figure class="block_code">
    			<pre><code>
composer dump-autoload
				</code></pre>
			</figure>

            <p>
                Cela génère un fichier autoload.php dans le dossier vendor. <br/>
                Il suffit maintnenant de l'appeler avant le namespace comme ceci : 
            </p>

            <figure class="block_code">
    			<pre><code>
require 'vendor/autoload.php'

use App\Guestbook\{
    Guestbook,
    Message 
};
				</code></pre>
			</figure>

            <p>
                Si on veut installer toutes les dépendances d'un dossier comportant un fichier composer.json, on le faire avec :
            </p>

            <figure class="block_code">
    			<pre><code>
composer install
				</code></pre>
			</figure>



            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7307099-specialisez-vos-objets-avec-les-espaces-de-noms#/id/video_Player_1" target="blank">Namespace (détaillé)</a></h2>


            
            <p>
            Une des règles à garder en tête lorsque l'on conçoit des classes, c'est de limiter leur rayon d'action. Une classe ne devrait posséder qu’une seule responsabilité. Il en va de même pour les méthodes qui la composent. Ça évite d'avoir des méthodes trop complexes, d'introduire des bugs, c'est plus facile de les tester et de les faire évoluer.
            </p>

            <p>
            Du coup, parfois il se trouve que deux classes utilisées pour une action similaire et différente à la fois existent dans votre code.
            </p>

            <p>
            Commençons à partir d’un <code class="line_code">Message</code> pour un forum et d’un <code class="line_code">Message</code> pour une messagerie interne : deux classes différentes avec le même nom.
            </p>
            
            <p>
            Sauf qu'en PHP, il est interdit d'avoir deux classes portant le même nom ! On va donc encapsuler nos classes dans des "espaces" réservés. On encapsule dans l'espace <code class="line_code">Forum</code> pour la première, et l'espace <code class="line_code">Messenger</code> pour la seconde.
            </p>

            <p>
                Nous ne pouvons pas avoir deux classes Message, sauf si elles sont dans deux espaces de noms différents.
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

declare(strict_types=1);

namespace Forum;
class Message
{}

namespace Messenger;
class Message
{}
				</code></pre>
			</figure>

            <p>
            Toutes les classes déclarées sous le <code class="line_code">namespace</code> seront considérées comme lui appartenant. Dès qu'un nouveau namespace est déclaré, les classes suivantes seront dans ce dernier.
            </p>

            <div class="em">Vous pouvez aussi retrouver une syntaxe. Au lieu d'un <code class="line_code">;</code>, vous pouvez encapsuler l'espace dans des accolades <code class="line_code">{}</code>. Lorsque vos namespaces sont dans le même fichier, c'est un peu plus lisible.</div>

            <p>
            Pour faire référence à une classe en particulier, vous devez préfixer son nom par son espace de noms :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

declare(strict_types=1);

namespace Forum;

class Message
{}

namespace Messenger;
class Message
{}

$forumMessage = new \Forum\Message;
$messengerMessage = new \Messenger\Message;

var_dump($forumMessage::class);
var_dump($messengerMessage::class);
				</code></pre>
			</figure>

            <p>
            Par défaut, PHP possède un espace de nom global représenté par cet anti-slash. Depuis le début de ce cours, vous l'utilisez sans le savoir ! Si vous ne précisez aucun 'namespace', PHP considère que vous faites référence au 'namespace' global.
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

declare(strict_types=1);

namespace Forum;

class Message
{}

namespace Messenger;
class Message
{}

$forumMessage = new \Forum\Message;
$messengerMessage = new \Messenger\Message;
$date = new DateTime();

var_dump($forumMessage::class);
var_dump($messengerMessage::class);
				</code></pre>
			</figure>

            <p>
            Rappelez vous, PHP pense qu'on est dans l'espace de nom  Messenger  . Or,  DateTime  se situe toujours dans l'espace global. Pour y faire référence, on doit rajouter l'anti-slash devant :
            </p>

            <figure class="block_code">
    			<pre><code>
$date = new \DateTime();
				</code></pre>
			</figure>

            <p>
            Il y a une autre technique pour déclarer les classes dans les espaces de noms, c'est d'encapsuler les espaces de noms avec les accolades. Mais alors se pose une autre contrainte : lorsqu'un espace de noms est déclaré dans un fichier, tout le code de ce fichier doit faire partie d'un espace de noms. S'il s'agit du namespace global, alors il suffit de ne pas nommer l'espace de noms :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

declare(strict_types=1);

namespace Forum {
   class Message
   {}
}

namespace Messenger {
   class Message
   {}
}

namespace {
   $forumMessage = new Forum\Message;
   $messengerMessage = new Messenger\Message;
  
   var_dump($forumMessage::class);
   var_dump($messengerMessage::class);
}
				</code></pre>
			</figure>

            <p>
            Encore une chose sur les espaces de noms. Dans notre exemple, il y a un seul niveau, mais on peut avoir des espaces à plusieurs niveaux ! Par exemple :
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

namespace App\Domain\Messenger {
   class Message
   {}
}

namespace {
   $messengerMessage = new App\Domain\Messenger\Message;
   var_dump($messengerMessage::class);
}
				</code></pre>
			</figure>

            <p>
            Et il n'est pas rare de voir des espaces de noms à 6, 8 niveaux ou plus. Mais attention : dans votre code ça va vite être moche et difficile à lire. C'est pourquoi vous pouvez préciser en avance à quel espace de noms vous faites référence, lorsque vous utilisez le nom d'une classe. On dit qu'on "importe" une classe avec le mot clé <code class="line_code">use</code>.
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

namespace App\Domain\Messenger {
   class Message
   {}
}

namespace {
   use App\Domain\Messenger\Message;
  
   $messengerMessage = new Message;
   var_dump($messengerMessage::class);
}ar_dump($messengerMessage::class);
}
				</code></pre>
			</figure>

            <p>
            Nous avons vu les deux syntaxes : avec et sans accolades. En pratique, nous préférons utiliser la syntaxe sans accolade. Une pratique courante est de définir l’espace de nom dans lequel on se trouve au début du fichier, puis de préciser les classes provenant des autres espaces de nom (avec le mot-clé <code class="line_code">use</code>) en dessous. Ensuite, on y met notre code. 
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7307103-structurez-vos-fichiers#/id/r-7305852" target="blank">Structurez vos fichiers</a></h1>
            
            <p>
            On va se fixer une règle supplémentaire : un fichier pour une classe. À chaque appel de classe on va charger le fichier associé. Non seulement cela diminue la taille de vos fichiers, mais en prime PHP n’ira charger et analyser que le strict nécessaire au moment de la requête. :D
            </p>

            <p>
            Nous sommes obligés d’utiliser <code class="line_code">require_once</code> pour chaque fichier de chaque classe utilisée... Ça veut dire que pour toutes les classes que j'utilise potentiellement, je suis obligé de faire cet import de fichier. Même si l'utilisation de la classe est dans une condition IF et que la classe n'est pas utilisée systématiquement. 
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

require_once('Domaine/Forum/Message.php');
require_once('Domaine/User/User.php');

use Domaine\Forum\Message;
use Domaine\User\User;

$user = new User;

...
				</code></pre>
			</figure>

            <p>
            Pour commencer, je vais me retrouver avec un en-tête de fichier très long avec tous les   requires  suivis de tous les   use. Bof. Et surtout, PHP est un langage interprété ! Il va charger, lire, parser, analyser et interpréter tous les fichiers demandés à chaque requête que vous faites. Plus votre application va grandir, pire les performances seront.<br/>
            C'est pourquoi nous allons utiliser une technique grâce à une bibliothèque fournie avec PHP : le chargement automatisé de la bibliothèque standard PHP, <a href="https://www.php.net/manual/fr/book.spl.php" target="blank">SPL</a>.
            </p>

            <p>
            Dans la bibliothèque SPL se trouve une fonction nommée <code class="line_code">spl_autoload_register</code>. 
            </p>

            <p>
            Puisque nous écrivons nos espaces de noms comme des chemins de répertoire, si notre arborescence de fichier correspond, alors on peut automatiser le chargement des fichiers. Cette façon de répartir son code en fichiers et répertoires, et d'accorder les espaces de noms, est d'ailleurs très bien détaillé dans la recommandation standard de PHP PSR-4 (en anglais).
            </p>

            <p>
            Eh bien, grâce à cette technique, les classes et donc les fichiers sont chargés uniquement lorsque c'est nécessaire ! Moins à parser, et moins à interpréter, donc de meilleures performances et moins de consommation de mémoire ! Des fichiers plus petits donc plus simples et moins susceptibles de contenir des erreurs ou des bugs ! 
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7307110-assouplissez-l-heritage-avec-les-traits#/id/r-7305913" target="blank">Étendez vos classes avec les traits (ou l'héritage horizontal)</a></h1>

            <p>
            Voyez les traits comme des super classes. Sauf qu'au lieu d'utiliser le mot clé <code class="line_code">class</code>, c'est le mot clé <code class="line_code">trait</code>.<br/>
            Comme une classe, un trait :
            <ul>
                <li>possède un nom ;</li>
                <li>peut posséder des propriétés ;</li>
                <li>peut posséder des méthodes ;</li>
                <li>propose de l'abstraction et de la staticité.</li>
            </ul>
            En plus de cela, un trait peut :
            <ul>
                <li>modifier la visibilité d'une méthode ou d'une propriété ;</li>
                <li>créer des <code class="line_code">Alias</code> de méthode et de propriété en cas de conflit ;</li>
                <li>être composé de plusieurs autres traits.</li>
            </ul>
            En revanche, un trait ne peut pas être instancié.
            </p>

            <p>
            Enfin, une classe peut être composée de plusieurs traits. Parce qu'un trait peut potentiellement être utilisé par plusieurs arbres généalogiques d'héritage, on imagine facilement le côté horizontal de la chose.
            </p>

            <p>
            Un bon cas d'usage, c'est lorsque vous souhaitez offrir des fonctionnalités qui pourraient ne pas être associées à un domaine en particulier. Si l'on reprend nos exemples des messages du chapitre précédent, on pourrait imaginer que les 2 possèdent des éléments communs.
            </p>

            <p>
            Pour autant, ce ne serait pas logique qu'ils aient un ancêtre en commun. Ils n'appartiennent pas au même domaine, cela rendrait le couplage trop important. Les traits sont une solution.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7345206-etablissez-des-contrats-avec-les-interfaces#/id/r-7345204" target="blank">Établissez des contrats avec les interfaces</a></h1>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://www.php.net/manual/fr/language.oop5.interfaces.php" target="blank"><code class="line_code">interface</code>/<code class="line_code">implements</code></a></h2>

            <p>
                Une interface est une sorte de structure de class qui définit des fonctions qui devront être utilisée dans les class implémentées par cette interface. Les fonctions ne seront pas décrites dans l'interface mais uniquement dans les implémentations. 
            </p>

            <p>
                Utile pour structurer deux classes qui se ressemble dans leurs structure (ex: PostsInputs et UsersInputs implémentent Inputs / MySQLdDb et MariaDb implémentent ConnexionDb)
            </p>

            <figure class="block_code">
                <pre><code>
// Declaration de l'interface 'Template'
interface Template
{
public function setVariable($name, $var);
public function getHtml($template);
}
                </code></pre>
            </figure>

            <figure class="block_code">
                <pre><code>
class WorkingTemplate implements Template
{
private $vars = [];

public function setVariable($name, $var)
{
$this->vars[$name] = $var;
}

public function getHtml($template)
{
foreach($this->vars as $name => $value) {
$template = str_replace('{' . $name . '}', $value, $template);
}

return $template;
}
}
                </code></pre>
            </figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://www.php.net/manual/fr/language.oop5.interfaces.php" target="blank">suite</a></h2>


            <p>
            Les interfaces sont des idées. Elles se déclarent comme une classe, mais avec le mot clé <code class="line_code">interface</code> au lieu de <code class="line_code">class</code>, et ne peuvent contenir que des signatures de méthode.
            </p>

            <p>
            Quand vous écrivez une méthode, vous lui donnez un nom, une visibilité, des arguments avec des types, obligatoires ou optionnels, des valeurs par défaut, et un type de retour. Tout ça, c'est la signature. Puis, entre accolades, vous écrivez l'algorithme qui la compose.
            </p>

            <p>
            Eh bien, dans une interface on se contente d'écrire des signatures. Pas le contenu. Pour deux choses :
            <ul>
                <li>Lorsque vous travaillez en équipe, définir des interfaces sans écrire le code réel permet de se répartir les tâches et de commencer à travailler comme si les classes existaient. Eh oui, parce que vous pouvez préciser une interface comme un type dans vos arguments de méthodes ! </li>
                <li>La seconde, pour spécifier des comportements communs attendus entre différentes classes appartenant à des domaines différents.</li>
            </ul>
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php


namespace Domain\Display;


use Domain\User\User;


interface MessageInterface
{
   public function getContent(): string;
   public function getAuthor(): User;
}
				</code></pre>
			</figure>

            <p>
            Toute classe utilisant cette interface sera obligée d'avoir les méthodes   getContent  et   getAuthor  qui renverront une chaîne de caractères et un utilisateur. Peu importe la classe, et peu importent son implémentation, son code.
            </p>

            <p>
            On peut donc définir cette interface dans notre méthode <code class="line_code">printMessage</code>. 
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php

declare(strict_types=1);

namespace use Domain\Display;

class MessagePrinter
{
   public static function printMessage(MessageInterface $message)
   {
       echo sprintf('%s %s', $message->getContent(), $message->getAuthor()->name);
   }
}
				</code></pre>
			</figure>

            <p>
            Ajoutons l'interface sur les classes, à présent ! Cela s'effectue par le biais du mot clé  implements  suivi du nom de l'interface, en dernier, juste après le nom de la classe. Et si la classe en étend une autre, après le nom de la classe étendue.
            </p>

            <figure class="block_code">
    			<pre><code>
&lt?php
declare(strict_types=1);


namespace Forum {
   use Domain\Display\MessageInterface;
  
   class Message implements MessageInterface
   {
        // ... implémentation des méthodes de l'interface
   }
}


namespace Messenger {
   use Domain\Display\MessageInterface;
  
   class Message implements MessageInterface
   {
        // ... implémentation des méthodes de l'interface
   }
}
				</code></pre>
			</figure>

            <p>
                De plus, une interface peut hériter de plusieurs interfaces avec le mot clé <code class="line_code">extends</code> !
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7307115-evoluez-vers-la-composition#/id/r-7306191" target="blank">La composition</a></h1>

            <p>
            Disons que j’ai une classe pour enregistrer un nouvel utilisateur, et qu’à présent je souhaite envoyer un e-mail pour avertir l’utilisateur de la création de son compte. Au lieu d’ajouter une méthode   envoyerEmail  dans ma classe, ou d’étendre ma classe et d’ajouter cette méthode dans la classe enfant, le choix de la composition nous dicte plutôt de :
            <ul>
                <li>créer une nouvelle classe dédiée à l’envoi de ce mail, et </li>
                <li>donner une instance de cette classe à la première.</li>
            </ul>
            </p>

            <p>
            La mise en place d'une composition ne peut pas s'effectuer simplement au fil de l'eau. Le nombre de classes et la portée de leurs actions doivent être réfléchis en amont. Généralement, ça passe par la création d'interfaces :
            <ul>
                <li>les classes implémentent les interfaces ;</li>
                <li>les interfaces sont développées et ajoutées aux classes ; </li>
                <li>et les classes les réclament soit par nouvelles créations (instanciation), soit par injection en argument de constructeur ou de méthode.</li>
            </ul>
            </p>

            <p>
            Choisissez l'héritage lorsque vous pouvez dire "c'est un" ; par exemple :
            <ul>
                <li>Un administrateur est un utilisateur.</li>
                <li>Un pont levant est un pont.</li>
            </ul>
            </p>

            <p>
            Choisissez la composition lorsque vous pouvez dire "possède un/des" ou "est composé de", comme :
            <ul>
                <li>Un pont levant possède un moteur.</li>
                <li>Un match possède des joueurs.</li>
            </ul>
            </p>

            <p>
            La composition est un principe qui donne plus de souplesse à la conception et à l'évolution de votre code. C'est plus naturel de construire des classes en en possédant d'autres qui sont spécialisées, plutôt que d'essayer de trouver des points communs entre elles, et de créer un arbre généalogique.
            </p>

            <p>
            Cette approche permet de s'adapter plus facilement aux modifications futures ! Dans le cas où vous utilisez l'héritage, si vous effectuez un changement relativement important dans une classe située très haut dans l'arbre généalogique, vous impactez tous les enfants. Souvent ça implique de restructurer ces classes-ci, ainsi que celles qui en dépendent... Pour cela, la composition est préférable quand c’est possible. 
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/7307123-gerez-vos-cas-derreur#/id/r-7318117" target="blank">Gérez vos cas d'erreur</a></h1>





































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