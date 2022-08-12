<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>PHP</title>
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

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4237646-decouvrez-le-fonctionnement-dun-site-ecrit-en-php#/id/video_Player_1" target="_blank">
        Fonctionnement d'un site en PHP</a></h1>

        <p>
            Les clients sont incapables de comprendre le code PHP : ils ne connaissent que le HTML et le CSS. Seul le serveur est capable de lire du PHP.<br/>
            Le rôle de PHP est justement de générer du code HTML (on peut aussi générer du CSS, mais c'est plus rare), code qui est ensuite envoyé au client de la même manière qu'un site statique, comme le montre la figure suivante.
        </p>
        
        <figure>
            <img src="../images/207111.png" alt="schéma php" />
        </figure>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238116-ecrivez-votre-premier-script#/id/r-4443996" target="=_blank">
        Les balises PHP</a></h1>

        <p>
            Le code PHP vient s'insérer au milieu du code HTML. On va progressivement placer dans nos pages web des morceaux de code PHP à l'intérieur du HTML. Ces bouts de code PHP seront les parties dynamiques de la page.
        <p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238116-ecrivez-votre-premier-script#/id/r-4443983" target="_blank">
        Les balises PHP</a></h1>

        <figure class="block_code">
            <code>&lt?php /* le code PHP se met ici */ ?&gt //Commentaires sur une ligne  /* sur plusieurs lignes */</code>
        </figure>

        <p>
            <em>Il existe d'autres balises pour utiliser du PHP, par exemple <code class="linec_code">&lt? ?&gt,&lt% %&gt</code>, etc. Ne soyez donc pas étonnés si vous en voyez. Néanmoins,<code class="line_code">&lt?php ?&gt</code> est la forme la plus correcte, vous apprendrez donc à vous servir de cette balise et non pas des autres.</em>
        </p>
        <p>
            Peut-on placer une balise PHP n'importe où dans le code ?<br />
            Oui ! Vraiment n'importe où. Pas seulement dans le corps de la page d'ailleurs : vous pouvez placer une balise PHP dans l'en-tête de la page.<br />
            Il faut se rappeler que PHP génère du code HTML.<br />
            Tout langage de programmation contient ce qu'on appelle des instructions. On en écrit une par ligne en général, et elles se terminent toutes par un point-virgule.
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238116-ecrivez-votre-premier-script#/id/r-4444020" target="_blank">
        L'instruction <code class="line_code">echo</code></a></h1>

        <p>
            Elle sert à afficher du texte.
        </p>

        <figure class="block_code">
            <code>&lt?php echo "Ceci est du texte"; ?&gt</code>
        </figure>

        <p>
            Il faut savoir qu'on a aussi le droit de demander d'afficher des balises. Par exemple, le code suivant fonctionne :
        </p>

        <figure class="block_code">
            <code>&lt?php echo "Ceci est du &ltstrong&gttexte&lt/strong&gt ; ?&gt</code>
        </figure>

        <figure>
            <img src="../images/212042.png" alt="génération HTML avec PHP" />
        </figure>

        <p>
            Pour afficher des guillemet la solution consiste à faire précéder le guillemet d'un antislash <code class="line_code">\</code>:
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/911847-les-variables#/id/r-2172854" target="_blank">
        Les variables</a></h1>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/911847-decrivez-les-elements-de-votre-projet-a-laide-de-variables#/id/r-2172854" target="blank">Les différents type de variables</a></h2>

        <p>
            Voici les principaux types à connaître :
            <ul>
                <li><strong>Les chaînes de caractères (<code class="line_code">string</code>) </strong>: les chaînes de caractères sont le nom informatique qu'on donne au texte. <br />
                Une chaîne de caractères est habituellement écrite entre guillemets ou entre apostrophes (on parle de guillemets simples) :</li>
                <li><strong>Les nombres entiers (<code class="line_code">int</code>) </strong>: ce sont les nombres du type 1, 2, 3, 4, etc. On compte aussi parmi eux les entiers relatifs : -1, -2, -3…</li>
                <li><strong>Les nombres décimaux (<code class="line_code">float</code>)</strong> : ce sont les nombres à virgule, comme 14,738. On peut stocker de nombreux chiffres après la virgule, ce qui devrait convenir pour la plupart des usages que vous en ferez.</li>
                <li><strong>Les booléens (<code class="line_code">bool</code>) </strong>: c'est un type très important qui permet de stocker soit vrai soit faux. On écrit <code class="line_code">true</code> pour vrai, et <code class="line_code">false</code> pour faux.</li>
                <li><strong>Rien (<code class="line_code">NULL</code>)</strong> : Rien du tout. Ce n'est pas vraiment un type de données, mais plutôt l'absence de type.</li>
            </ul>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://www.php.net/manual/fr/language.variables.scope.php" target="blank">Portée des variables</a></h2>

        <p>
        Pour la majorité des variables, la portée concerne la totalité d'un script PHP. Mais, lorsque vous définissez une fonction, la portée d'une variable définie dans cette fonction est locale à la fonction.
        </p>

        <p>
        En PHP, une variable globale doit être déclarée à l'intérieur de chaque fonction afin de pouvoir être utilisée dans cette fonction. 
        </p>

        <figure class="block_code">
            <pre><code>
&lt?php
$a = 1; /* portée globale */

function test()
{ 
    echo $a; /* portée locale */
}

test();  // Rien, php utilise la variable locale $a

            </code></pre>
        </figure>



        <figure class="block_code">
            <pre><code>
&lt?php
$a = 1;
$b = 2;
function somme() {
    global $a, $b;
    $b = $a + $b;
}
somme();
echo $b;  // 3

            </code></pre>
        </figure>

        <p>
            Équivalent à :
        </p>

        <figure class="block_code">
            <pre><code>
&lt?php
$a = 1;
$b = 2;
function somme() {
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}
somme();
echo $b;

            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/911847-les-variables#/id/r-911745" target="_blank">
        Affecter une valeur à une variable</a></h2>

        <figure class="block_code">
            <pre><code>
&lt?php
$age_du_visiteur = 17; //$ précede toujours le nom d'une variable. Type int
$prenom = 'adrien \'aka adridri\''; //  antislash pour guillemets dans guillemets
$prenom = "adrien 'aka adridri'";  // ou guillemets simples dans double ou inversement
$poids = 57.3;              // type float
$je_suis_un_zero = true;    // type bool
$pas_de_valeur = NULL;      //type NULL, au départ, une variable ne contient rien. On dit qu'elle vaut NULL
?&gt
            </code></pre>
        </figure>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/911847-les-variables#/id/r-2172949" target="_blank">
        La concaténation</a></h1>

        <p>
            Avec des guillemets doubles, c'est le plus simple. Vous pouvez écrire le nom de la variable au milieu du texte et il sera remplacé par sa valeur.
        </p>
        <figure class="block_code">
            <pre><code>
&lt?php
$age_du_visiteur = 17;
echo "Le visiteur a $age_du_visiteur ans";
?&gt
            </code></pre>
        </figure>
        <p>
            Ça a le mérite d'être une solution facile à utiliser, mais je vous recommande plutôt celle des guillemets simples :<br />
            Cette fois, il va falloir écrire la variable en dehors des guillemets et séparer les éléments les uns des autres à l'aide d'un point.
        </p>
        <figure class="block_code">
            <pre><code>
&lt?php
$age_du_visiteur = 17;
echo 'Le visiteur a ' . $age_du_visiteur . ' ans';
?&gt
            </code></pre>
        </figure>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/911847-les-variables#/id/r-2172987" target="_blank">
        Les opérations</a></h1>

        <p>
            +, -, *, / et % le modulo. Cest le reste de la division entière. <br />
            Je passe sous silence les opérations plus complexes telles que la racine carrée, l'exponentielle, la factorielle, etc. Toutes ces opérations peuvent être réalisées en PHP mais il faudra passer par des fonctions.
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912046-les-conditions#/id/video_Player_1" target="_blank">
        Les conditions</a></h1>

            <table>
                <caption>rappel sur les opérateurs</caption>
                <tr>
                    <th>Symbole</th>
                    <th>Signification</th>
                </tr>
                <tr>
                    <td>==</td>
                    <td>Est égal à</td>
                </tr>
                <tr>
                    <td>!=</td>
                    <td>Est différent de</td>
                </tr>
            </table>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912046-les-conditions#/id/r-2173098" target="_blank">
        La structure if ... else</a></h2>

        <figure class="block_code">
            <pre><code>
&lt?php
$age = 17;

if (&age <= 20)     // Si age <=20
{
    $autorisation_entree = false
}
elseif (age>30)     // Sinon si age>30
{
    echo "salut mon vieux";
    &autorisation_entree = true
}
else                // Sinon
{
    $autorisation_entree = false
}

if ($autorisation_entree == false)
{
    echo "fout le camp";
}
?&gt
            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912046-les-conditions#/id/r-2173150" target="_blank">
        Conditions multiples</a></h2>

        <table>
                <caption>opérateurs logiques</caption>
                <tr>
                    <th>Opérateur</th>
                    <th>Signification</th>
                    <th>Symbole équivalent</th>
                </tr>
                <tr>
                    <td>AND</td>
                    <td>Et</td>
                    <td>&&</td>
                </tr>
                <tr>
                    <td>OR</td>
                    <td>Ou</td>
                    <td>||</td>
                </tr>
            </table>

            <figure class="block_code">
                <pre><code>
&lt?php
$age = 17;
&langue= "anglais";

if (&age <= 20 AND $langue == "francais")     
{
    echo "Bienvenue sur mon site";
}
elseif (age<=20) AND &langue == "anglais")     // Sinon si age>30
{
    echo "Welcome to my website";
}
?&gt
            </code></pre>
        </figure>
        
        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912046-les-conditions#/id/r-2173156" target="_blank">
        Insérer de l'HTML</a></h1>

        <p>
            Sachez que les deux codes ci-dessous donnent exactement le même résultat :
        </p>

        <figure class="block_code">
            <pre><code>
&lt?php
$variable = 23;

if (&variable <= 23)    
{
    echo '&ltstrong&gtBravo !&lt/strong&gt Voici le nombre mystère !';
}
?&gt
            </code></pre>
        </figure>
        <figure class="block_code">
            <pre><code>
&lt?php
$variable = 23;

if (&variable <= 23)    
{
?gt
&ltstrong&gtBravo !&lt/strong&gt Voici le nombre mystère !'
&lt?php
}
?&gt
            </code></pre>
        </figure>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912046-les-conditions#/id/r-912018" target="_blank">
        Switch</a></h1>

        <figure class="block_code">
            <pre><code>
&lt?php
$note = 10;

switch ($note)      // on indique sur quelle variable on travaille  
{
    case 0:         // dans le cas où $note vaut 0
        echo "nul";
    break;          // break demande à PHP de sortir du switch

    case 10:
        echo "bien";
    break;

    case 20:
        echo "super";
    break;

    default:        // Si aucun cas, 
        "erreur 404";
}
?&gt
            </code></pre>
        </figure>
        <p>
            Avantage : on n'a plus besoin de mettre le double égal ! Défaut : ça ne marche pas avec les autres symboles (<code class="line_code">&lt &gt &lt= &gt= !=</code>). En clair, le <code class="line_code">switch</code> ne peut tester que l'égalité.
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912046-les-conditions#/id/r-912045" target="_blank">
        Les ternaires : des conditions condensées</a></h1>

        <p>
            Un ternaire est une condition condensée qui fait deux choses sur une seule ligne :
            <ul>
                <li>on teste la valeur d'une variable dans une condition ;</li>
                <li>on affecte une valeur à une variable selon que la condition est vraie ou non.</li>
            </ul>
        </p>
        <figure class="block_code">
            <pre><code>
&lt?php
$age = 24;

$majeur = ($age &gt=18) ? true : false;   // $majeur prend la valeur true si &gt=18  sinon false
}
?&gt
            </code></pre>
        </figure>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912133-les-boucles#/id/r-912097" target="_blank">
        La boucle While (Tant que)</a></h1>

        <figure class="block_code">
            <pre><code>
&lt?php
while ($continuer_boucle == true)
{
    // instruction a éxécuter dans la boucle
}
?&gt
            </code></pre>
        </figure>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912133-les-boucles#/id/r-912132" target="_blank">
        Boucle For</a></h1>

        <figure class="block_code">
            <pre><code>
&lt?php
for ($nombre_de_ligne = 1 ; $nombre_de_ligne &gt= 100; $nombre_de_ligne++)      // ++ est une incrémentation
{
    echo 'Ceci est la ligne n°' . $nombre_de_ligne . '&ltbr /&gt';
}
?&gt
            </code></pre>
        </figure>

        <p>
            Après le mot <code class="line_code">for</code>, il y a des parenthèses qui contiennent trois éléments, séparés par des points-virgules <code class="line_code">;</code> :
            <ul>
                <li>Le premier sert à l'initialisation. C'est la valeur que l'on donne au départ à la variable (ici, elle vaut 1).</li>
                <li>Le second, c'est la condition. Comme pour le <code class="line_code">while</code>, tant que la condition est remplie, la boucle est réexécutée. Dès que la condition ne l'est plus, on en sort.</li>
                <li>Enfin, le troisième c'est l'incrémentation, qui vous permet d'ajouter 1 à la variable à chaque tour de boucle.</li>
            </ul>
        </p>
        <p>
            Si vous hésitez entre <code class="line_code">while</code> et <code class="line_code">for</code>, il suffit simplement de vous poser la question suivante : « Est-ce que je sais d'avance combien de fois je veux que mes instructions soient répétées ? ».<br />
            Si la réponse est oui, alors la boucle <code class="line_code">for</code> est tout indiquée. Sinon, alors il vaut mieux utiliser la boucle <code class="line_code">while</code>.
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238931-les-tableaux#/id/r-4239038" target="_blank">
        Les tableaux numérotés</a></h1>

        <p>
            Regardez par exemple celui-ci, contenu de la variable <code class="line_code">$prenoms</code> :
            <table>
                <tr>
                    <th>Clé</th>
                    <th>Valeur</th>
                </tr>
                <tr>
                    <td>0</td>
                    <td>François</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Michel</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nicole</td>
                </tr>
                <tr>
                    <td>...</td>
                    <td>...</td>
                </tr>
            </table>
           
            <code class="line_code">$prenoms</code> est un <strong>array</strong> : c'est ce qu'on appelle une variable « tableau ». Elle n'a pas qu'une valeur, mais plusieurs (vous pouvez en mettre autant que vous voulez).<br />
                Ici, nous travaillons sur un array numéroté, c'est-à-dire que chaque case est identifiée par un numéro. Ce numéro est appelé clé.<br />
                Attention ! Un array numéroté commence toujours à la case n°0 .
        </p>
        <p>
            Cet exemple vous montre comment créer l'array <code class="line_code">$prenoms</code> :
        </p>

        <figure class="block_code">
            <pre><code>
&lt?php
    $prenoms = array ('François', 'michel', 'Nicole');
?&gt
            </code></pre>
        </figure>

        <p>
            Vous pouvez aussi créer manuellement le tableau case par case :
        </p>

        <figure class="block_code">
            <pre><code>
&lt?php
    $prenoms[0] ='François';
    $prenoms[1] ='Michel';
    $prenoms[2] ='Nicole';
?&gt
            </code></pre>
        </figure>

        <p>
            Pour afficher un élément :
        </p>

        <figure class="block_code">
            <pre><code>
&lt?php
    echo $prenoms[1];
?&gt
            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238931-les-tableaux#/id/r-4239091" target="_blank">
        Les tableaux associatifs</a></h2>

        <p>
            Nous allons créé un tableau qui ressemble à la structure suivante :
            <table>
                <tr>
                    <th>Clé</th>
                    <th>Valeur</th>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td>François</td>
                </tr>
                <tr>
                    <td>nom</td>
                    <td>Dupont</td>
                </tr>
                <tr>
                    <td>Adresse</td>
                    <td>3 Rue de Paradis</td>
                </tr>
                <tr>
                    <td>Ville</td>
                    <td>Marseille</td>
                </tr>
            </table>
        </p>

        <figure class="block_code">
            <pre><code>
&lt?php
// On crée notre array $coordonnees
    $coordonnees = array (
        'prenom' =&gt 'François',
        'nom' =&gt 'Dupont',
        'adresse' =&gt '3 Rue du Paradis',
        'Ville' =&gt 'Marseille');
?&gt
            </code></pre>
        </figure>

        <p>
            Il est aussi possible de créer le tableau case par case, comme ceci :
        </p>

        <figure class="block_code">
            <pre><code>
&lt?php
    $coordonnees['prenom']= 'François'
    $coordonnees['nom']= 'Dupont'
    $coordonnees['adresse']= '3 Rue du Paradis'
    $coordonnees['ville']= 'Marseille'
?&gt
            </code></pre>
        </figure>

        <p>
            Pour afficher un élément :
        </p>

        <figure class="block_code">
            <pre><code>
&lt?php
    echo $coordonnees['ville'];
?&gt
            </code></pre>
        </figure>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238931-les-tableaux#/id/r-4239156" target="_blank">
        Parcourir un tableau</a></h1>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238931-les-tableaux#/id/r-4239107" target="_blank">
            La boucle For</a></h2>

            <figure class="block_code">
                <pre><code>
&lt?php
    $prenoms = array ('François', 'michel', 'Nicole');
    
    for ($numero =0; numero &gt 5; $numero++)
    {
        echo $prenom[$numero]. &ltbr /&gt
    }
?&gt
                </code></pre>
            </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238931-les-tableaux#/id/r-4239146" target="_blank">
            La boucle Foreach</a></h2>

            <p><a href="https://www.php.net/manual/fr/control-structures.foreach.php" target="blank">Description ici</a></p>
            <p>
                <code class="line_code">foreach</code> va passer en revue chaque ligne du tableau, et lors de chaque passage, elle va mettre la valeur de cette ligne dans une variable temporaire (par exemple <code class="line_code">$element</code>).
            </p>

            <p>
            La structure de langage <code class="line_code">foreach</code> fournit une façon simple de parcourir des tableaux. <code class="line_code">foreach</code> ne fonctionne que pour les tableaux et les objets, et émettra une erreur si vous tentez de l'utiliser sur une variable de type différent ou une variable non initialisée. Il existe deux syntaxes : 
            </p>

            <figure class="block_code">
                <pre><code>
&lt?php
    $prenoms = array ('François', 'michel', 'Nicole');
    
    foreach ($prenoms as $element)
    {
        echo $element. &ltbr /&gt   // affichera $prenoms[0], $prenoms[1] etc.
    }

    $coordonnees = array (
        'prenom' =&gt 'François',
        'nom' =&gt 'Dupont',
        'adresse' =&gt '3 Rue du Paradis',
        'Ville' =&gt 'Marseille');

    foreach ($prenoms as $element)
    {
        echo $element. &ltbr /&gt   
    }
?&gt
                </code></pre>
            </figure>

            <p>
                L'avantage de <code class="line_code">foreach</code>est qu'il permet aussi de parcourir les tableaux associatifs.
            </p>
            <p>
                Toutefois, avec cet exemple, on ne récupère que la valeur. Or, on peut aussi récupérer la clé de l'élément. On doit dans ce cas écrire <code class="line_code">foreach</code> comme ceci :
            </p>

            <figure class="block_code">
                <pre><code>
&lt?php
    $coordonnees = array (
        'prenom' =&gt 'François',
        'nom' =&gt 'Dupont',
        'adresse' =&gt '3 Rue du Paradis',
        'Ville' =&gt 'Marseille');

    foreach ($renoms as $cle =&gt $element)
    {
        echo '[' . $cle . '] vaut ' . $element . &ltbr /&gt   
    }
?&gt
                </code></pre>
            </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238931-les-tableaux#/id/r-4239155" target="_blank">
            Afficher rapidement un array avecprint_r</a></h2>

        <p>
            Parfois, en codant votre site en PHP, vous aurez sous les bras un array et vous voudrez savoir ce qu'il contient, juste pour votre information. <br />
            Cette commande a toutefois un défaut : elle ne renvoie pas de code HTML comme <code class="line_code">&ltbr /&gt </code>pour les retours à la ligne. Pour bien les voir, il faut donc utiliser la balise HTML <code class="line_code">&ltpre&gt</code> qui nous permet d'avoir un affichage plus correct.
        </p>

            <figure class="block_code">
                <pre><code>
&lt?php
    $coordonnees = array (
        'prenom' =&gt 'François',
        'nom' =&gt 'Dupont',
        'adresse' =&gt '3 Rue du Paradis',
        'Ville' =&gt 'Marseille');

    echo '&ltpre&gt';
    print_r($coordonnees);
    echo '&lt/pre&gt';
?&gt
                </code></pre>
            </figure>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238931-les-tableaux#/id/r-4239217" target="_blank">
        Recherche dans un tableau</a></h1>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238931-les-tableaux#/id/r-4239174" target="_blank">
            Vérifier si une clé existe dans l'array : <code class="line_code">array_key_exists</code></a></h2>

            <p>
                On doit d'abord lui donner le nom de la clé à rechercher, puis le nom de l'array dans lequel on fait la recherche :
            </p>
            <figure class="block_code">
                <pre><code>
&lt?php array_key_exists('cle', $array); ?&gt
                </code></pre>
            </figure>

            <p>
                La fonction renvoie un booléen, c'est-à-dire <code class="line_code">true</code> si la clé est dans l'array, et <code class="line_code">false</code> si la clé ne s'y trouve pas.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238931-les-tableaux#/id/r-4239182" target="_blank">
                Vérifier si une valeur existe dans l'array : <code class="line_code">in_array</code></a></h2>

                <p>
                    C'est le même pricipe que <code class="line_code">array_key_exists</code>
                </p>
                <figure class="block_code">
                    <pre><code>
&lt?php in_array('element', $array); ?&gt
                    </code></pre>
                </figure>
                <p>
                    La fonction renvoie un booléen, c'est-à-dire <code class="line_code">true</code> si la clé est dans l'array, et <code class="line_code">false</code> si la clé ne s'y trouve pas.
                </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238931-les-tableaux#/id/r-4239197" target="_blank">
                Récupérer la clé d'une valeur dans l'array : <code class="line_code">array_search</code></a></h2>

                <p>
                    <code class="line_code">array_search</code> fonctionne comme <code class="line_code">in_array</code> : il travaille sur les valeurs d'un array. Voici ce que renvoie la fonction :
                    <ul>
                        <li>si elle a trouvé la valeur,<code class="line_code">array_search</code> renvoie la clé correspondante (c'est-à-dire le numéro si c'est un array numéroté, ou le nom de la clé si c'est un array associatif);</li>
                        <li>si elle n'a pas trouvé la valeur,<code class="line_code">array_search</code> renvoie <code class="line_code">false</code>.</li>
                    </ul>
                </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912352-les-fonctions#/id/video_Player_1" target="_blank">
        Les fonctions</a></h1>

        <p>
            Souvent, les fonctions acceptent plusieurs paramètres. Vous devez dans ce cas les séparer par des virgules :
        </p>
        <figure class="block_code">
            <pre><code>
&lt?php 
    fonction(17, 'vert', true, 41.7); 
?&gt
            </code></pre>
        </figure>

        <p>
            Si la fonction ne retourne aucune valeur, il n'y a rien de plus à faire que dans les codes précédents. La fonction est appelée, fait son travail, et on ne lui demande rien de plus.<br />
            En revanche, si la fonction retourne une valeur, on la récupère dans une variable, comme ceci :
        </p>
        <figure class="block_code">
            <pre><code>
&lt?php 
    $volume = calculCube(4); 
?&gt
            </code></pre>
        </figure>
        <p>
            <em> comme on l'a vu, il est possible d'envoyer en entrée plusieurs paramètres à une fonction ; en revanche cette dernière ne peut retourner qu'une seule valeur. Il existe un moyen de contourner cette limitation en combinant des variables au sein d'un tableau de variables (appelé array) dont nous avons parlé dans le chapitre précédent.</em>
        </p>
        <p>
            PHP propose des centaines et des centaines de fonctions prêtes à l'emploi. Sur le site officiel, la documentation PHP les répertorie toutes, classées par catégories <a href="http://fr.php.net/manual/fr/funcref.php">ici</a>.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912352-les-fonctions#/id/r-912297" target="_blank">
            Quelques fonctions</a></h2>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912352-les-fonctions#/id/r-2173379" target="_blank"><code class="line_code">strlen</code>: longueur d'une chaîne</a></h3>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912352-les-fonctions#/id/r-2173392" target="_blank"><code class="line_code">str_replace</code>: rechercher et remplacer</a></h3>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912352-les-fonctions#/id/r-2173396" target="_blank"><code class="line_code">str_shuffle</code>: mélanger les lettres</a></h3>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912352-les-fonctions#/id/r-2173401" target="_blank"><code class="line_code">strtolower</code>: écrire en minuscules</a></h3>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912352-les-fonctions#/id/r-2173401" target="blank"><code class="line_code">strtoupper</code>: écrire en majuscule</a></h3>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912352-les-fonctions#/id/r-2173447" target="_blank">
            Récupérer la date et l'heure</a></h2>

            <p>
                Nous allons découvrir la fonction qui renvoie l'heure et la date. Il s'agit de <code class="line_code">date</code>. Cette fonction peut donner beaucoup d'informations. Voici les principaux paramètres à connaître :
                <table>
                    <tr>
                        <th>Paramètre</th>
                        <th>Descriptuion</th>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td>Heure</td>
                    </tr>
                    <tr>
                        <td>i</td>
                        <td>Minute</td>
                    </tr>
                    <tr>
                        <td>d</td>
                        <td>Jour</td>
                    </tr>
                    <tr>
                        <td>m</td>
                        <td>Mois</td>
                    </tr>
                    <tr>
                        <td>Y</td>
                        <td>Année</td>
                    </tr>

                </table>
                Si vous voulez afficher l'année, il faut donc envoyer le paramètre Y à la fonction :
            </p>

            <figure class="block_code">
                <pre><code>
&lt?php 
    $annee = date('Y')
    echo $annee; 
?&gt
                </code></pre>
            </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912352-les-fonctions#/id/r-912351" target="_blank">
            Créer ses propores fonctions</a></h2>

            <figure class="block_code">
                <pre><code>
&lt?php 
    function DireBonjour($nom)
    {
        echo 'Bonjour ' . $nom . ' !&ltbr /&gt';
    }

    DireBonjour('Adrien')  // Appelle de la fonction
?&gt
                </code></pre>
            </figure>

            <figure class="block_code">
                <pre><code>
&lt?php 
    function VolumeCone($rayon, $hauteur)
    {
        $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
        return $volume;
    }
?&gt
                </code></pre>
            </figure>
            <p>
                <code class="line_code">return</code> indique ce que doit renvoyer la fonction. Ici, elle renvoie le volume. Si vous aviez tapé <code class="line_code">return 15</code>, ça aurait à chaque fois affiché un volume de 15. La fonction renvoie une valeur, que l'on doit donc récupérer dans une variable : 
            </p>
            <figure class="block_code">
                <pre><code>
&lt?php 
    $volume = VolumeCone(3, 1);
?&gt
                </code></pre>
            </figure>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4239271-inclure-des-portions-de-page#/id/video_Player_1" target="_blank">
        Inclure des portions de page</a></h1>

        <p>
            En PHP, nous pouvons facilement insérer d'autres pages (on peut aussi insérer seulement des morceaux de pages) à l'intérieur d'une page.<br />
            Le principe de fonctionnement des <strong>inclusions</strong> en PHP est plutôt simple à comprendre. Vous avez un site web composé de disons vingt pages. Sur chaque page, il y a un menu, toujours le même. Pourquoi ne pas écrire ce menu (et seulement lui) une seule fois dans une pagemenus.php?<br />
            En PHP, vous allez pouvoir inclure votre menu sur toutes vos pages. Lorsque vous voudrez modifier votre menu, vous n'aurez qu'à modifiermenus.phpet l'ensemble des pages de votre site web sera automatiquement mis à jour !
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4239271-inclure-des-portions-de-page#/id/r-4239340" target="_blank">
            Dans la pratique</a></h2>

            <p>
                 Je vous propose de créer un nouveau fichier PHP et d'y insérer uniquement le code HTML correspondant à votre menu, comme ceci :
            </p>

            <figure class="block_code">
                <pre><code>
&ltnav&gt
        &ltul&gt
            &ltli&gt&lta href="index.html"&gtAccueil&lt/a&gt&lt/li&gt
            &ltli&gt&lta href="forum.html"&gtForum&lt/a&gt&lt/li&gt
            &ltli&gt&lta href="contact.html"&Contact&lt/a&gt&lt/li&gt
        &ltul&gt
&lt/nav&gt
                </code></pre>
            </figure>

            <p>
                Une page dont l'extension est.phppeut très bien ne contenir aucune balise PHP (même si c'est plutôt rare). Dans ce cas, cela redevient une page HTML classique qui n'est pas modifiée avant l'envoi.
            </p>
            <p>
                En théorie, vous pourriez très bien enregistrer votre page avec l'extension .html : menus.html. Néanmoins, afin d'éviter de mélanger des pages .php et .html sur votre site, je vous recommande de travailler uniquement avec l'extension .php à partir de maintenant.
            </p>
            <p>
                Maintenant que vos « morceaux de pages » sont prêts, reprenez les pages de votre site, par exemple la page d'accueil nommée index.php. Remplacez le menu par le code PHP suivant :
            </p>
            <figure class="block_code">
                <pre><code>
&lt?php include("menus.php"); ?&gt
                </code></pre>
            </figure>
            <p>
                Cette instruction ordonne à l'ordinateur : « Insère ici le contenu de la page menus.php ».
            </p>
            <p>
                <em>Ce code suppose que votre pageindex.phpet celles qui sont incluses (commemenus.php) sont dans le même dossier. Sinon utilisé des liens relatifs</em></p>
            <p>
                <em>Vous noterez que, contrairement à <code class="line_code">echo</code>, j'ai ici placé des parenthèses autour des guillemets. Il faut dire que <code class="line_code">echo</code> était un peu une exception. Dorénavant vous verrez souvent des parenthèses.</em>
            </p>
            <figure>
                <img = src="../images/421892.png" alt="vu utilisateur" />
            </figure>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-transmettez-des-donnees-avec-les-formulaires#/id/video_Player_1" target="_blank">
        Transmettez des données avec les formulaires</a></h1>

        <p>
            Il faut savoir qu'il existe plusieurs moyens d'envoyer les données du formulaire (plusieurs « méthodes »). Vous pouvez en employer deux.
            <ul>
                <li><code class="line_code">get</code> :les données transiteront par l'URL comme on l'a appris précédemment. On pourra les récupérer grâce à l'array <code class="line_code">$_GET</code>. Cette méthode est assez peu utilisée car on ne peut pas envoyer beaucoup d'informations dans l'URL (il est préférable de ne pas dépasser 256 caractères).</li>
                <li><code class="line_code">post</code> :  les données ne transiteront pas par l'URL, l'utilisateur ne les verra donc pas passer dans la barre d'adresse. Cette méthode permet d'envoyer autant de données que l'on veut, ce qui fait qu'on la privilégie le plus souvent. Néanmoins, les données ne sont pas plus sécurisées qu'avec la méthode <code class="line_code">GET</code> et il faudra toujours vérifier si tous les paramètres sont bien présents et valides, comme on l'a fait dans le chapitre précédent. On ne doit pas plus faire confiance aux formulaires qu'aux URL.</li>
            </ul>
        </p>
        <p>
            L'attribut <code class="line_code">action</code> sert à définir la page appelée par le formulaire. C'est cette page qui recevra les données du formulaire et qui sera chargée de les traiter.
        </p>
        <figure>
            <img scr="../images/215760.png" alt="schéma formulaire" />
        </figure>
        <p>
            <div class="em">Remarquez qu'en théorie rien n'empêche le formulaire de s'appeler lui-même. Il suffirait d'écrire <code class="line_code">action="formulaire.php"</code>. Dans ce cas, la page du formulaire doit être capable aussi bien d'afficher le formulaire que de traiter les données.</div>
        </p>
        <p>
            Je vais ici tous les énumérer et vous montrer comment vous servir de chacun d'eux dans la page <code class="line_code">cible.php</code> qui fera le traitement.
        </p>

        <p>
            Tout d'abord, la méthode <code class="line_code">GET</code> sert à faire transiter des informations par l'intermédiaire de l'URL, comme ceci : 
        </p>

        <img src="../images/16334391704407_p3c1-1.png" alt="image transfet par GET"/>

        <p>
            En théorie on peut écrire autant de paramètre que l'on veut. En pratique, certain navigateur n'accepte que 256 caractères. Il suffit d'écrire ces paramètre dans le lien hypertext (en remplaçant & par &amp) ou grâce à l'attribut <code class="line_code">name</code> d'un formulaire avec la méthode <code class="line_code">GET</code>.
        </p>

        <p>
            Les données transférer sont alors récupéré dans la page cible à l'aide de la super variable <code class="line_code">__GET</code>. Exemple : $_GET['email'] donne utilisateur@exemple.com
        </p>
            
        <p> 
            Pour la méthode <code class="line_code">POST</code>, vous allez voir, c'est vraiment très simple : au lieu de recevoir un array <code class="line_code">$_GET</code>, vous allez recevoir un array <code class="line_code">$_POST</code> contenant les données du formulaire !
        </p>
        <p>
            PHP viendra stocker la valeur saisie ou sélectionnée dans la variable <code class="line_code">$_POST['valeur_de_name']</code> car pour rappel, la balise <code class="line_code">input</code> qui permet de remplir un formulaire a un attribut <code class="line_code">name</code> qui va définir le nom de la variable qui sera créée dans <code class="line_code">name</code>cible.php</p>. . <code class="line_code">&ltinput type="text" name="pseudo" /&gt.</code>
        </p>

        <img src="../images/124553.png" alt="code d'une page cible submit" />

        <p>
        La fonction <code class="line_code">isset()</code> teste si une variable existe. Nous allons nous en servir pour afficher un message spécifique, dans le cas où le nom ou le prénom serait absent.
        </p>


        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-transmettez-des-donnees-avec-les-formulaires#/id/r-2174019" target="_blank">Pour un liste déroulante</a></h2>

            <figure class="block_code">
        <pre><code>
&ltform method="post" action="traitement.php"&gt
    &ltp&gt
        &ltlabel for="pays"&gtDans quel pays habitez-vous?&lt/label&gt&ltbr /&gt
        &ltselect name="pays" id="pays"&gt
            &ltoption value="france" selected&gtFrance&lt/option&gt
            &ltoption value="espagne"&gtEspagne&lt/option&gt
            &ltoption value="italie"&gtItalie&lt/option&gt
            &ltoption value="autre"&gtAutre&lt/option&gt
        &lt/select&gt
    &lt/p&gt
&lt/form&gt
            </code></pre>
        </figure>

            <p>
                Ici, une variable <code class="line_code">$_POST['pays']</code> sera créée, et elle contiendra le choix qu'a fait l'utilisateur. S'il a choisi « France », la variable <code class="line_code">$_POST['pays']</code> sera égale au <code class="line_code">value</code> correspondant, c'est-à-dire <code class="line_code">france</code>.
            </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-transmettez-des-donnees-avec-les-formulaires#/id/r-2174036" target="_blank">Les cases à cocher</a></h2>

            <figure class="block_code">
                <pre><code>
&ltinput type="checkbox" name="case" id="case" /&gt  &ltlabel for="case"&gt Ma case à cocher &lt/label&gt
                </code></pre>
            </figure>

            <p>
                Là encore, on donne un nom à la case à cocher via l'attribut <code class="line_code">name</code>(ici : « case »). Ce nom va générer une variable dans la page cible, par exemple <code class="line_code">$_POST['case']</code>.
                <ul>
                    <li>Si la case a été cochée, alors <code class="line_code">$_POST['case']</code> aura pour valeur « on ».</li>
                    <li>Si elle n'a pas été cochée, alors <code class="line_code">$_POST['case']</code> n'existera pas. Vous pouvez faire un test avec <code class="line_code">isset($_POST['case'])</code> pour vérifier si la case a été cochée ou non.</li>
                </ul>
            </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-administrez-des-formulaires-de-facon-securisee#/id/r-912979" target="_blank">La faille XSS (Recevoir du HTML)</a></h2>

        <p>
            C'est une technique qui consiste à injecter du code HTML contenant du JavaScript dans vos pages, pour le faire exécuter à vos visiteurs.
        </p>
        <p>
            Pour ignorer le code HTML, il suffit d'utiliser la fonction <code class="line_code">htmlspecialchars</code> Elle va transformer les chevrons des balises HTML <code class="line_code">&lt</code> et <code class="line_code">&gt</code> en &lt;  et &gt;  
        </p>

        <figure class="block_code">
                <pre><code>
&ltp&gt&ltb&gtMessage&lt/b&gt : &lt?php echo htmlspecialchars($_POST['message']); ?&gt&lt/p&gt
                </code></pre>
        </figure>




        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-transmettez-des-donnees-avec-les-formulaires#/id/r-913098" target="_blank">
        L'envoi de fichier</a></h1>

        <p>
            Vous aurez besoin de lire cette section si vous voulez que vos visiteurs puissent envoyer (on dit aussi uploader) des images, des programmes ou tout autre type de fichier sur votre site.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/7360266-activez-le-partage-de-fichiers#/id/r-7360478" target="_blank">
            Le formulaire d'envoi de fichier</a></h2>

            <p>
                Dès l'instant où votre formulaire propose aux visiteurs d'envoyer un fichier, il faut ajouter l'attribut <code class="line_code">enctype="multipart/form-data"</code> à la balise <code class="line_code">&ltform&gt</code>.<br />
                Grâce à <code class="line_code">enctype</code>, le navigateur du visiteur sait qu'il s'apprête à envoyer des fichiers.
            </p>
            <p>
                Maintenant que c'est fait, nous pouvons ajouter à l'intérieur du formulaire une balise permettant d'envoyer un fichier. C'est une balise très simple de type <code class="line_code">&ltinput type="file" /&gt</code>. Il faut penser comme toujours à donner un nom à ce champ de formulaire (grâce à l'attributname) pour que PHP puisse reconnaître le champ par la suite.
            </p>

            <figure class="block_code">
                <pre><code>
&ltform action="cible_envoi.php" method="post" enctype="multipart/form-data"&gt
    &ltp&gt
        Formulaire d'envoi de fichier : &ltbr /&gt
        &ltinput type="file" name="monfichier" /&gt&ltbr /&gt
        &ltinput type="submit" value="Envoyer le fichier" /&gt&ltbr /&gt
    &lt/p&gt
&lt/forme&gt
                </code></pre>
            </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/7360266-activez-le-partage-de-fichiers#/id/r-7360383" target="_blank">
            Le traitement de l'envoi en PHP</a></h2>

            <p>
                Comme vous avez dû le remarquer, le formulaire pointe vers une page PHP qui s'appelle <code class="line_code">cible_envoi.php</code>. Le visiteur sera donc redirigé sur cette page après l'envoi du formulaire. <br />
                C'est maintenant que ça devient important. Il faut que l'on écrive le code de la page <code class="line_code">cible_envoi.php</code> pour traiter l'envoi du fichier.<br />
                En fait, au moment où la page PHP s'exécute, le fichier a été envoyé sur le serveur mais il est stocké dans un dossier temporaire.
                C'est à vous de décider si vous acceptez définitivement le fichier ou non. Vous pouvez par exemple vérifier si le fichier a la bonne extension (si vous demandiez une image et qu'on vous envoie un « .txt », vous devrez refuser le fichier).<br />
                Si le fichier est bon, vous l'accepterez grâce à la fonction <code class="line_code">move_uploaded_file</code>, et ce, d'une manière définitive.<br />
                Pour chaque fichier envoyé, une variable <code class="line_code">$_FILES['nom_du_champ']</code> est créée. Dans notre cas, la variable s'appellera <code class="line_code">$_FILES['monfichier']</code>.
                Cette variable est un tableau qui contient plusieurs informations sur le fichier :
                <table>
                    <tr>
                        <th>Variable</th>
                        <th>Signification</th>
                    </tr>
                    <tr>
                        <td><code class="line_code">$_FILES['monfichier']['name']</code></td>
                        <td>Contient le nom du fichier envoyé par le visiteur.</td>
                    </tr>
                    <tr>
                        <td><code class="line_code">$_FILES['monfichier']['type']</code></td>
                        <td>Indique le type du fichier envoyé. Si c'est une image gif par exemple, le type sera image/gif.</td>
                    </tr>
                    <tr>
                        <td><code class="line_code">$_FILES['monfichier']['size']</code></td>
                        <td>Indique la taille du fichier envoyé. Attention : cette taille est en octets. Il faut environ 1 000 octets pour faire 1 Ko, et 1 000 000 d'octets pour faire 1 Mo.
                        Attention : la taille de l'envoi est limitée par PHP. Par défaut, impossible d'uploader des fichiers de plus de 8 Mo.</td>
                    </tr>
                    <tr>
                        <td><code class="line_code">$_FILES['monfichier']['tmp_name']</code></td>
                        <td>Juste après l'envoi, le fichier est placé dans un répertoire temporaire sur le
                        serveur en attendant que votre script
                        PHP décide si oui ou non il accepte de
                        le stocker pour de bon. Cette variable
                        contient l'emplacement temporaire du
                        fichier (c'est PHP qui gère ça).</td>
                    </tr>
                    <tr>
                        <td><code class="line_code">$_FILES['monfichier']['error']</code></td>
                        <td>Contient un code d'erreur permettant de savoir si l'envoi s'est bien effectué ou s'il y a eu un problème et si oui, lequel. La variable vaut 0 s'il n'y a pas eu d'erreur.</td>
                    </tr>
                </table>
                <div class="em">Si vous avez mis un second champ d'envoi de fichier dans votre formulaire, il y aura une seconde variable <code class="line_code">$_FILES['nom_de_votre_autre_champ']</code> découpée de la même manière que le tableau qu'on vient de voir ici.</div>
            </p>
            <p>
                Je vous propose de faire les vérifications suivantes pour décider si l'on accepte le fichier ou non.
            </p>

            <figure class="block_code">
                <pre><code>
&lt?php
//Testons si le fichier a bien été envoyé et si il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['monfichier']['size'] &gt=1000000)
    {
        // Testons si l'extension est autorisée
        // pathinfo renvoie un array contenant entre autres l'extension du fichier dans $infosfichier['extension'].

        $infosfichier = pathinfo($_FILES['monfichier']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees))
        {
            //On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
            echo "L'envoi a bien été effectué !";
        }
    }
}
                </code></pre>
            </figure>

            <p>
                <em>Lorsque vous mettrez le script sur Internet à l'aide d'un logiciel FTP, vérifiez que le dossier « uploads » sur le serveur existe et qu'il a les droits d'écriture. Pour ce faire, sous FileZilla par exemple, faites un clic droit sur le dossier et choisissez « Attributs du fichier ».
                Cela vous permettra d'éditer les droits du dossier (on parle de CHMOD). Mettez les droits à 733, ainsi PHP pourra placer les fichiers uploadés dans ce dossier.</em>
            </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913348-variables-superglobales#/id/r-2174327" target="_blank">
        Variables superglobales</a></h1>

        <p>
            Les variables superglobales sont des variables un peu particulières pour trois raisons :
            <ul>
                <li>elles sont écrites en majuscules et commencent toutes, à une exception près, par un underscore : <code class="line_code">$_GET</code> et <code class="line_code">$_POST</code>.</li>
                <li>les superglobales sont des array car elles contiennent généralement de nombreuses informations .
                <li>Enfin, ces variables sont automatiquement créées par PHP à chaque fois qu'une page est chargée. Elles existent donc sur toutes les pages et sont accessibles partout : au milieu de votre code, au début, dans les fonctions, etc.</li>
            </ul>
        </p>


        
        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913196-implementez-un-systeme-de-connexion#/id/r-7471352" target="_blank">
        Implémentez un système de connexion</a></h1>

        <p>
            Cela va se schématiser comme suit :
            <ol>
                <li>Vous n'êtes pas connecté : auquel cas, le formulaire de contact s'affiche, et la liste des recettes ne s'affiche pas.</li>Vous avez soumis le formulaire avec le bon mot de passe pour l'utilisateur : le message de succès s'affiche, le formulaire de connexion ne s'affiche pas et les recettes s'affichent.</li>
                <li>Vous avez soumis le formulaire avec le mauvais mot de passe pour l'utilisateur : le message d'erreur s'affiche, le formulaire de connexion s'affiche et les recettes ne s'affichent pas.</li>
            </ol>
            Vous devez donc créer une nouvelle page et adapter la page d'accueil :
            <ul>
                <li><stong>login.php</stong> : contient un simple formulaire comme vous savez les faire ;</li>
                <li><stong>home.php</stong> : qui doit maintenant inclure une formulaire de connexion et une condition sur l'affichage des recettes.</li>
            </ul>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913196-implementez-un-systeme-de-connexion#/id/r-7445353" target="blank">Codez la page login.php</a></h2>

        <img src="../images/6494761.png" alt="page login.php"/>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913196-implementez-un-systeme-de-connexion#/id/r-7445356" target="blank">Codez la page home.php</a></h2>

        <img src="../images/944511.png" alt="page login.php"/>

        <p>
        Mais est-ce que le formulaire est si sécurisé que ça ? Oui, honnêtement il l'est. Du moins, tant que vos utilisateurs ne choisissent pas de mots de passe trop simples à deviner !
        </p>
        <p>
        Pour l'instant ce système de connexion n'est pas "persistant". C'est-à-dire que si vous rechargez la page d'accueil ou que vous revenez sur votre site plus tard, l'information de la connexion n'aura pas été conservée. Pas super utile du coup ! Comment on fait pour conserver les informations de connexion d'un utilisateur ? Eh bien, ce sera l'objet des prochains chapitres !
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4239476-session-cookies#/id/r-4274891" target="_blank">
        Les sessions</a></h1>

        <p>
            Comment sont gérées les sessions en PHP ? Voici les trois étapes à connaître.
            <ul>
                <li>Un visiteur arrive sur votre site. On demande à créer une session pour lui. PHP génère alors un numéro unique. Ce numéro est souvent très gros et écrit en hexadécimal, par exemple : a02bbffc6198e6e0cc2715047bc3766f. (Ce numéro sert d'identifiant et est appelé « ID de session » (ou <code class="line_code"> PHPSESSID</code> ). PHP transmet automatiquement cet ID de page en page en utilisant généralement un cookie.)</li>
                <li>Une fois la session générée, on peut créer une infinité de variables de session pour nos besoins. Par exemple, on peut créer une variable  <code class="line_code"> $_SESSION['nom']</code>  qui contient le nom du visiteur, <code class="line_code">  $_SESSION['prenom']</code>  qui contient le prénom, etc. Le serveur conserve ces variables même lorsque la page PHP a fini d'être générée. Cela veut dire que, quelle que soit la page de votre site, vous pourrez récupérer par exemple le nom et le prénom du visiteur via la superglobale <code class="line_code"> $_SESSION </code> !</li>
                <li>Lorsque le visiteur se déconnecte de votre site, la session est fermée et PHP « oublie » alors toutes les variables de session que vous avez créées. Il est en fait difficile de savoir précisément quand un visiteur quitte votre site. En effet, lorsqu'il ferme son navigateur ou va sur un autre site, le vôtre n'en est pas informé. Soit le visiteur clique sur un bouton « Déconnexion » (que vous aurez créé) avant de s'en aller, soit on attend quelques minutes d'inactivité pour le déconnecter automatiquement : on parle alors de timeout. Le plus souvent, le visiteur est déconnecté par un timeout.</li>
            </ul>

            c'est très simple à utiliser. Vous devez connaître deux fonctions :
            <ul>
                <li><code class="line_code">session_start()</code>  : démarre le système de sessions. Si le visiteur vient d'arriver sur le site, alors un numéro de session est généré pour lui. Vous devez appeler cette fonction au tout début de chacune des pages où vous avez besoin des variables de session.</li>
                <li><code class="line_code">session_destroy() </code> : ferme la session du visiteur. Cette fonction est automatiquement appelée lorsque le visiteur ne charge plus de page de votre site pendant plusieurs minutes (c'est le timeout), mais vous pouvez aussi créer une page « Déconnexion » si le visiteur souhaite se déconnecter manuellement.</li>
            </ul>
            <em> il faut appeler <code class="line_code">session_start()</code> sur chacune de vos pages AVANT d'écrire le moindre code HTML (avant même la balise <code class="line_code">&lt!DOCTYPE&gt</code>. Si vous oubliez de lancer  session_start() , vous ne pourrez pas accéder aux variables superglobales <code class="line_code">$_SESSION</code>.</em>
            <em>Si vous voulez détruire manuellement la session du visiteur, vous pouvez faire un lien « Déconnexion » amenant vers une page qui fait appel à la fonction <code class="line_code">session_destroy()</code> . Néanmoins, sachez que sa session sera automatiquement détruite au bout d'un certain temps d'inactivité.</em>
        </p>
        Voici quelques exemples :
        <ul>
            <li>Imaginez un script qui demande un identifiant et un mot de passe pour qu'un visiteur puisse se « connecter » (s'authentifier). On peut enregistrer ces informations dans des variables de session et se souvenir de l'identifiant du visiteur sur toutes les pages du site !</li>
            <li>Puisqu'on retient son identifiant et que la variable de session n'est créée que s'il a réussi à s'authentifier, on peut l'utiliser pour restreindre certaines pages de notre site à certains visiteurs uniquement. Cela permet de créer toute une zone d'administration sécurisée : si la variable de session login existe, on affiche le contenu, sinon on affiche une erreur. Cela devrait vous rappeler l'exercice sur la protection d'une page par mot de passe, sauf qu'ici, on peut se servir des sessions pour protéger automatiquement plusieurs pages.</li>
            <li>On se sert activement des sessions sur les sites de vente en ligne. Cela permet de gérer un « panier » : on retient les produits que commande le client quelle que soit la page où il est. Lorsqu'il valide sa commande, on récupère ces informations et… on le fait payer. </li>
        </ul>
        <p>

        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4239476-session-cookies#/id/r-4275065" target="_blank">
        Les cookies</a></h1>

        <p>
            Un cookie, c'est un petit fichier que l'on enregistre sur l'ordinateur du visiteur.
            Ce fichier contient du texte et permet de « retenir » des informations sur le visiteur. Par exemple, vous inscrivez dans un cookie le pseudo du visiteur, comme ça la prochaine fois qu'il viendra sur votre site, vous pourrez lire son pseudo en allant regarder ce que son cookie contient.<br />
            Chaque cookie stocke généralement une information à la fois. Si vous voulez stocker le pseudonyme du visiteur et sa date de naissance, il est donc recommandé de créer deux cookies.<br />
            Comme tout cookie qui se respecte, chacun a une date d'expiration. Après cette date, ils ne sont plus bons à manger ils sont automatiquement supprimés par le navigateur.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4239476-session-cookies#/id/r-4275153" target="_blank">
            Ecrire un cookie</a></h2>

            <figure class="block_code">
                <pre><code>
&lt?php setcookie('pseudo', 'adridri', time() +365*24*3600); ?&gt
                </code></pre>
            </figure>

            <p>
                <code class="line_code">setcookie</code> a trois paramètres :
                <ol>
                    <li>Le nom du cookie (pseudo)</li>
                    <li>La valeur du cookie (adridri)</li>
                    <li>la date d'expiration du cookie, sous forme de timestamp</li>
                </ol>
                timestamp : c'est le nombre de secondes écoulées depuis le 1er janvier 1970. Le timestamp est une valeur qui augmente de 1 toutes les secondes. Pour obtenir le timestamp actuel, on fait appel à la fonction  time() . Pour définir une date d'expiration du cookie, il faut ajouter au « moment actuel » le nombre de secondes au bout duquel il doit expirer. Dans l'exemple cela aura pour effet de supprimer votre cookie dans exactement un an.
            </p>
            
            <p>
                <code class="line_code">setcookie</code>,comme pour <code class="line_code">session_start</code>, ne marche QUE si vous l'appelez avant tout code HTML (donc avant la balise <code class="line_code">&lt!DOCTYPE&gt</code>).Ne placez donc JAMAIS le moindre code HTML avant d'utiliser <code class="line_code">setcookie</code>.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4239476-session-cookies#/id/r-4275171" target="_blank">
                Sécuriser son cookie avec le mode <code class="line_code">httpOnly</code> et <code class="line_code">secure</code></a></h2>

                <p>
                    Sans rentrer dans les détails, cela rendra votre cookie inaccessible en JavaScript sur tous les navigateurs qui supportent cette option (c'est le cas de tous les navigateurs récents.). Cette option permet de réduire drastiquement les risques de faille XSS sur votre site, au cas où vous auriez oublié d'utiliser <code class="line_code">htmlspecialchars</code> à un moment.<br />>
                    Je vous recommande donc de créer votre cookie plutôt comme ceci :
                </p>

                <figure class="block_code">
                    <pre><code>
                    &lt?php
// retenir l'email de la personne connectée pendant 1 an
setcookie(
    'LOGGED_USER',
    'utilisateur@exemple.com',
    [
        'expires' => time() + 365*24*3600,
        'secure' => true,
        'httponly' => true,
    ]
);
                    </code></pre>
                </figure>
                <p>
                    Le dernier paramètre  true  permet d'activer le mode <code class="line_code">httpOnly</code> sur le cookie, et donc de le rendre en quelque sorte plus sécurisé.
                    Les paramètres du milieu sont des paramètres que nous n'utilisons pas, je leur ai donc envoyé <code class="line_code">null</code>.
                </p>
                <figure class="block_code">
                    <pre><code>
&lt?php 
setcookie('pseudo', 'adridri', time() +365*24*3600 null, null, false, true); // On écrit un cookie
setcookie('pays', 'France', time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...
?&gt

&lt!DOCTYPE html&gt
                    </code></pre>
                </figure>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4239476-session-cookies#/id/r-4275192" target="_blank">
                    Afficher un cookie</a></h2>

                    <p>
                        Pour ressortir le pseudo du visiteur que j'avais inscrit dans un cookie, il suffit d'écrire : <code class="line_code">$_COOKIE['pseudo']</code>.
                    </p>
                    <figure class="block_code">
                        <pre><code>
&ltp&gt
    Bonjour &lt?php echo $_COOKIE['pseudo']; ?&gt !
&lt/p&gt
                        </code></pre>
                    </figure>

                <p>
                    À noter que si le cookie n'existe pas, la variable superglobale n'existe pas. Il faut donc faire un  isset  pour vérifier si le cookie existe ou non.<br />
                    Vous avez besoin de savoir ce que contient le cookie  pseudo  ? Affichez donc le contenu de la superglobale <code class="line_code">$_COOKIE['pseudo']</code> avec <code class="line_code">print_r</code>.
                </p>
                <p>
                    <div class="em">Les cookies viennent du visiteur. Comme toute information qui vient du visiteur, elle n'est pas sûre. N'importe quel visiteur peut créer des cookies et envoyer ainsi de fausses informations à votre site. Souvenez-vous en lorsque vous lisez les cookies du visiteur : il peut les avoir modifiés, donc soyez prudents et n'ayez pas une confiance aveugle en leur contenu !</div>
                </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4239476-session-cookies#/id/r-4275204" target="_blank">
            Modifier un cookie existant</a></h2>

            <p>
                Il faut refaire appel à  setcookie  en gardant le même nom de cookie, ce qui « écrasera » l'ancien.
            </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Headers/Set-Cookie/SameSite" target="_blank">
        SameSite cookies</a></h2>

        <p>
        L'attribut SameSite de l'en-tête de réponse HTTP Set-Cookie vous permet de déclarer si vos cookies doivent être restreints au site visité, à des tiers, ou à des sous-domaines du site actuel.
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913492-lisez-et-ecrivez-dans-un-fichier#/id/r-2174475" target="_blank">
        Lire et écrire dans un fichier</a></h1>

        <p>
             Pour stocker ces informations longtemps, il faut les écrire sur le disque dur. Quoi de plus logique pour cela que de créer des fichiers ? PHP permet justement d'enregistrer des données dans des fichiers sur le disque dur du serveur.
        </p>

        <p>
        L'attribut SameSite accepte trois valeurs possibles :
        <ul>
            <li>Lax : Les cookies sont transférables depuis le site actuel vers des sites de niveaux inférieurs et seront envoyés lors de requêtes GET initialisées par des sites tiers. C'est la valeur par défaut des navigateurs les plus récents.</li>
            <li>Strict : Les cookies ne seront envoyés qu'avec les requêtes effectuées sur le domaine de même niveau, et ne seront pas envoyées sur les requêtes provenant de sites tiers.</li>
            <li>None : Les cookies seront envoyés dans tous les contextes, rendant possibles les requêtes de type cross-origin. None était la valeur par défaut des navigateurs, mais les navigateurs les plus récents optent désormais pour la valeur Lax comme valeur par défaut pour une meilleure défense contre les attaques de type cross-site request forgery (CSRF).</li>
        </ul>
        </p>

        <p>
        Les dernières versions des navigateurs récents fournissent une valeur par défaut de SameSite plus sécurisée pour vos cookies, il se peut donc que le message suivant apparaisse dans la console de votre navigateur : Some cookies are misusing the “sameSite“ attribute, so it won’t work as expected. Cookie “myCookie” has “sameSite” policy set to “lax” because it is missing a “sameSite” attribute, and “sameSite=lax” is the default value for this attribute. Cette alerte apparait car la stratégie de SameSite pour le cookie n'a pas été spécifiée explicitement. Même si vous pouvez compter sur la valeur par défaut SameSite=Lax des navigateurs récents, vous devriez tout de même spécifier la stratégie à appliquer pour ce cookie afin de communiquer clairement votre intention. Cela améliorera également l'expérience sur les autres navigateurs si ceux-ci n'utilisent pas encore la valeur par défaut Lax.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913492-lisez-et-ecrivez-dans-un-fichier#/id/r-913378" target="_blank">
            Autoriser l'écriture de fichiers (chmod)</a></h2>

            <p>
                Pour que PHP puisse créer des fichiers, il doit avoir accès à un dossier qui lui en autorise la création. Il faut en effet donner le droit à PHP de créer et modifier les fichiers, sinon celui-ci ne pourra rien faire.<br />
                Pour créer ces droits, on dit en général qu'on doit modifier le CHMOD du fichier ou du dossier. C'est le nom de la commande qui permet de modifier les droits sous Linux.<br />
                Le CHMOD est un nombre à trois chiffres que l'on attribue à un fichier (par exemple 777). Selon la valeur de ce nombre, Linux autorisera (ou non) la modification du fichier.<br />
                Il va falloir passer par… votre logiciel FTP ! Oui, celui-là même qui vous sert à envoyer vos pages sur le web. En ce qui me concerne, j'utilise FileZilla (vous pouvez utiliser celui que vous voulez, la manipulation est quasiment la même).<br />
                En général, vous devriez avoir un menu « CHMOD » ou « Permissions de fichier ».<br />
                Si vous rentrez 777 comme valeur pour le CHMOD, cela signifie que tous les programmes du serveur ont le droit de modifier le fichier, notamment PHP. Il faut donc rentrer 777 pour que PHP puisse modifier le fichier en question.<br />
                Pour ceux qui veulent en savoir plus sur les CHMOD, je traite le sujet beaucoup plus en détail dans mon cours sur Linux. N'hésitez pas à aller lire le tutoriel<a href="http://www.siteduzero.com/tutoriel-3-12783-les-utilisateurs-et-les-droits.html#ss_part_5">ici</a> si le sujet vous intéresse.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913492-lisez-et-ecrivez-dans-un-fichier#/id/r-913423" target="_blank">
                Ouvrir et fermer un fichier</a></h2>

                <figure class="block_code">
                    <pre><code>
&lt?php
    // 1 : on ouvre le fichier
    $monfichier = fopen('compteur.txt', 'r+');

    // 2 : on fera ici les opérations sur le fichier

    // 3 : quand on a fini de l'utiliser, on ferme le fichier
    fclose($monfichier);
?&gt
                    </code></pre>
                </figure>

                <p>
                    On indique tout d'abord à <code class="line_code">fopen</code> le fichier qu'on veut ouvrir (<code class="line_code">compteur.txt</code>), puis comment on veut l'ouvrir (ici j'ai mis'<code class="line_code">r+</code>'). Voici, regroupées dans le tableau ci-dessous, les principales possibilités à notre disposition.
                    <table>
                        <tr>
                            <th>Mode</th>
                            <th>Explications</th>
                        </tr>
                        <tr>
                            <td>r</td>
                            <td>Ouvre le fichier en lecture seule. Cela signifie que vous pourrez seulement lire le fichier.</td>
                        </tr>
                        <tr>
                            <td>r+</td>
                            <td>Ouvre le fichier en lecture et écriture. Vous pourrez non seulement lire le fichier, mais aussi y écrire (on l'utilisera assez souvent en pratique).</td>
                        </tr>
                        <tr>
                            <td>a</td>
                            <td>Ouvre le fichier en écriture seule. Mais il y a un avantage : si le fichier n'existe pas, il est automatiquement créé.</td>
                        </tr>
                        <tr>
                            <td>a+</td>
                            <td>Ouvre le fichier en lecture et écriture. Si le fichier n'existe pas, il est créé automatiquement. Attention : le répertoire doit avoir un CHMOD à 777 dans ce cas ! À noter que si le fichier existe déjà, le texte sera ajouté à la fin.</td>
                        </tr>
                    </table>
                    <em>Vous n'êtes absolument pas obligés de donner l'extension <code class="line_code">.txt</code> à votre fichier. Vous pouvez l'appeler comme vous voulez : <code class="line_code">compteur.cpt</code>, <code class="line_code">compteur.num</code>, ou même <code class="line_code">compteur</code> tout court.</em>
                </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913492-lisez-et-ecrivez-dans-un-fichier#/id/r-913491" target="_blank">
                Lire et écrire dans un fichier</a></h2>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913492-lisez-et-ecrivez-dans-un-fichier#/id/r-2174563" target="_blank">
                    Lire</a></h3>

                    <p>
                        Pour lire, on a deux possibilités :
                        <ul>
                            <li>lire caractère par caractère avec la fonction <code class="line_code">fgetc ;</code></li>
                            <li>lire ligne par ligne avec <code class="line_code">fgets</code>.</li>
                        </ul>
                        En général, on se débrouillera pour mettre une information par ligne dans notre fichier. On se sert donc assez peu defgetcqui est plutôt lourd à utiliser (il faudrait faire une boucle pour lire caractère par caractère).<br />
                        Dans notre cas, on va supposer que notre fichier ne contient qu'une ligne : le nombre de pages qui ont été vues sur le site.
                    </p>

                <figure class="block_code">
                    <pre><code>
&lt?php
    // 1 : on ouvre le fichier
    $monfichier = fopen('compteur.txt', 'r+');

    // 2 : on lit la première ligne du fichier
    $ligne = fgets($monfichier);

    // 3 : quand on a fini de l'utiliser, on ferme le fichier
    fclose($monfichier);
?&gt
                    </code></pre>
                </figure>
                <p>
                    Et si mon fichier fait quinze lignes, comment je fais pour toutes les lire ? Il faut faire une boucle. Un premier <code class="line_code">fgets</code> vous donnera la première ligne. Au second tour de boucle, le prochain appel à <code class="line_code">fgets</code> renverra la deuxième ligne, et ainsi de suite.<br />
                    C'est un peu lourd, mais si on stocke assez peu d'informations dans le fichier, cela peut suffire. Sinon, si on a beaucoup d'informations à stocker, on préfèrera utiliser une base de données (on en parlera dans la prochaine partie).
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913492-lisez-et-ecrivez-dans-un-fichier#/id/r-2174604" target="_blank">
                Ecrire</a></h3>

                    <p>
                        Pour l'écriture, on n'a qu'une seule possibilité : utiliser <code class="line_code">fputs</code>.<br />
                        Toutefois, il faut savoir où l'on écrit le texte. En effet, le fonctionnement d'un fichier est assez étrange…
                        <ol>
                            <li>Vous l'ouvrez avec <code class="line_code">fopen</code>.</li>
                            <li>Vous lisez par exemple la première ligne avec <code class="line_code">fgets</code>.</li>
                            <li>Oui mais voilà : maintenant, le « curseur » de PHP se trouve à la fin de la première ligne (vu qu'il vient de lire la première ligne).</li>
                        </ol>
                        Si vous faites un <code class="line_code">fputs</code> juste après, il va écrire à la suite ! Pour éviter ça, on va utiliser la fonction <code class="line_code">fseek</code> qui va replacer le curseur où l'on veut dans le fichier. En l'occurrence, on va replacer le curseur au début du fichier en faisant : <code class="line_code">fseek($monfichier, 0);</code><br />
                        <em>Si vous avez ouvert le fichier avec le mode'a'ou'a+', toutes les données que vous écrirez seront toujours ajoutées à la fin du fichier. La fonction <code class="line_code">fseek</code> n'aura donc aucun effet dans ce cas.</em>
                    </p>

                        <figure class="block_code">
                            <figcaption>Compteur de vue</figcaption>
                    <pre><code>
&lt?php
    // 1 : on ouvre le fichier
    $monfichier = fopen('compteur.txt', 'r+');

    
    $pages_vues = fgets($monfichier); // on lit la première ligne
    $pages_vues +=1 // on augmente de 1 ce nombre de pages vues
    fseek($monfichier, 0); // On remet le curseur au début du fichier
    fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de page vues

    fclose($monfichier);

    echo '&ltp&gtCette page a été vue ' . $pages_vues . ' fois.'' &lt/p&gt ;
?&gt
                    </code></pre>
                </figure>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/916990-les-expressions-regulieres-partie-1-2#/id/video_Player_1" target="_blank">
            Les expressions régulières</a></h1>

            
            <p>
                MAJ : Sites bien pratiks <a href="https://www.lucaswillems.com/fr/articles/25/tutoriel-pour-maitriser-les-expressions-regulieres">ici</a> et <a href="https://www.debuggex.com/?flavor=pcre">là</a>.
            </p>
            
            <p>
                Les expressions régulières constituent un système très puissant et très rapide pour faire des recherches dans des chaînes de caractères (des phrases, par exemple). C'est une sorte de fonctionnalité Rechercher / Remplacer très poussée.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/916990-les-expressions-regulieres-partie-1-2#/id/r-916481" target="_blank">
                Où utiliser une regex ?</a></h2>

                <p>
                    Il existe deux types d'expressions régulières, qui répondent aux doux noms de :
                    <ul>
                        <li><strong>POSIX</strong> : c'est un langage d'expressions régulières mis en avant par PHP, qui se veut un peu plus simple que PCRE (ça n'en reste pas moins assez complexe). Toutefois, son principal et gros défaut je dirais, c'est que ce « langage » est plus lent que PCRE ;</li>
                        <li><strong>PCRE</strong> : ces expressions régulières sont issues d'un autre langage (le Perl). Considérées comme un peu plus complexes, elles sont surtout bien plus rapides et performantes.</li>
                    </ul>
                    PHP propose donc de choisir entre POSIX et PCRE. Pour ma part, le choix est tout fait : nous allons étudier PCRE.
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/916990-les-expressions-regulieres-partie-1-2#/id/r-2177560" target="_blank">
                    <code class="line_code">preg_match</code></a></h3>

                    <p>
                        Cette fonction renvoie un booléen : elle renvoie <code class="line_code">true</code> (vrai) si elle a trouvé le mot que vous cherchiez dans la chaîne, <code class="line_code">false</code> (faux) si elle ne l'a pas trouvé.<br />
                        Vous devez lui donner deux informations : votre regex (c'est le petit nom qu'on donne à « expression régulière ») et la chaîne dans laquelle vous faites une recherche.
                    </p>

                    <figure class="block_code">
                        <pre><code>
&lt?php
    if (preg_match("**Votre REGEX **", "Ce dans quoi vous faites la recherche"))
    {
        echo 'Le mot recherché se trouve dans la chaine';
    }
    else
    {
        echo 'Le mot que vous cherchez ne se trouve pas dans la chaine';
    }
?&gt
                        </code></pre>
                    </figure>

                    <p>
                        Première chose importante à savoir : une regex (Expression régulière) est toujours entourée de caractères spéciaux appelés délimiteurs.<br />
                        On peut choisir n'importe quel caractère spécial comme délimiteur, et pour éviter de tourner en rond trop longtemps, je vais vous en imposer un : le dièse.<br />
                        <code class="line_code">#Ma regex#option</code><br />
                        À la place de « Ma regex », vous devez mettre le mot que vous recherchez.
                    </p>

                    <figure class="block_code">
                        <pre><code>
&lt?php
    if (preg_match("#Ma regex#", "J'aime jouer de la guitare."))
    {
        echo 'VRAI';
    }
    else
    {
        echo 'FAUX';
    }
?&gt
                        </code></pre>
                    </figure>

                    <p>
                        <em>Les regex sont sensibles à la casse</em>
                    </p>

                    <p>A savoir :
                        <ul>
                            <li>Pour ne plus être sensible à la casse, rajouter l'option "i" <code class="line_code">#Ma regex#i</code></li>
                            <li> OU : <code class="line_code">#guitare|piano#</code></li>
                            <li><code class="line_code">^</code> : indique le début d'une chaîne. Si vous placez le symbole « ^ » devant le mot, alors ce mot devra obligatoirement se trouver au début de la chaîne, sinon on vous répondra FAUX.</li>
                            <li><code class="line_code">$</code> : indique la fin d'une chaîne. Si on veut vérifier que la chaîne se termine par « zéro », on écrira cette regex : <code class="line_code">#zéro$#</code>.</li>
                        </ul>
                    </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/916990-les-expressions-regulieres-partie-1-2#/id/r-916842" target="_blank">
                Les classes de caractères</a></h2>

                <p>
                    <ul>
                        <li><code class="line_code">#gr[io]s#</code> : Entre crochets, c'est ce qu'on appelle une classe de caractères. Cela signifie qu'une des lettres à l'intérieur peut convenir. Notre regex reconnaît deux mots : « gris » et « gros ».</li>
                        <li>Les intervalles de classe <code class="line_code">-</code> : <code class="line_code">[a-e]</code> = <code class="line_code">[abcde]</code><br />
                        <code class="line_code">[a-eA-E0-3]</code> = <code class="line_code">[abcdeABCDE123]</code></li>
                        <li><code class="line_code">^</code> :  placez à l'intérieur d'une classe, il sert à dire que vous ne VOULEZ PAS de ce qui se trouve à l'intérieur de cette classe. <code class="line_code">#[^0-9]#</code> = Pas de chiffre</li>
                    </ul>
                </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/916990-les-expressions-regulieres-partie-1-2#/id/r-916989" target="_blank">
                Les quantificateurs</a></h2>


                <p>
                    Les quantificateurs sont des symboles qui permettent de dire combien de fois peuvent se répéter un caractère ou une suite de caractères.
                    <ul>
                        <li><code class="line_code">?</code> : ce symbole indique que la lettre est facultative. Elle peut y être 0 ou 1 fois.<br />
                        Ainsi,<code class="line_code">#a?#</code>reconnaît 0 ou 1 « a » ;</li>
                        <li><code class="line_code">+</code> : la lettre est obligatoire. Elle peut apparaître 1 ou plusieurs fois.<br />Ainsi,<code class="line_code">#a+#</code> reconnaît « a », « aa », « aaa », « aaaa », etc. ;</li>
                        <li><code class="line_code">*</code> : la lettre est facultative. Elle peut apparaître 0, 1 ou plusieurs fois.<br />
                        Ainsi, <code class="line_code">#a*#</code> reconnaît « a », « aa », « aaa », « aaaa », etc. Mais s'il n'y a pas de « a », ça fonctionne aussi !</li>
                        <li><code class="line_code">#Ay(ay)*#</code> : Ce code reconnaîtra « Ay », « Ayay », « Ayayay », « Ayayayay » ...</li>
                    </ul>
                    <em>Notez que ces symboles s'appliquent à la lettre se trouvant directement devant. On peut ainsi autoriser le mot « chien », qu'il soit au singulier comme au pluriel, avec la regex <code class="line_code">#chiens?#</code> (fonctionnera pour « chien » et « chiens »).</em>
                    <em>Vous pouvez utiliser le symbole « | » dans les parenthèses. La regex <code class="line_code">#Ay(ay|oy)*#</code> renverra par exemple vrai pour « Ayayayoyayayayoyoyoyoyayoy » ! </em>
                    <em>Autre bonne nouvelle : vous pouvez mettre un quantificateur après une classe de caractères (vous savez, avec les crochets !). Ainsi <code class="line_code">#[0-9]+#</code> permet de reconnaître n'importe quel nombre, du moment qu'il y a au moins un chiffre !</em>
                </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/916990-les-expressions-regulieres-partie-1-2#/id/r-2178053" target="_blank">
                Être plus précis grâce aux accolades</a></h2>

                <p>
                    Il y a trois façons d'utiliser les accolades :
                    <ul>
                        <li><code class="line_code">{3}</code> : si on met juste un nombre, cela veut dire que la lettre (ou le groupe de lettres s'il est entre parenthèses) doit être répétée 3 fois exactement.<br />
                        <code class="line_code">#a{3}#</code> fonctionne donc pour la chaîne « aaa ».</li>
                        <li><code class="line_code">{3,5}</code> : ici, on a plusieurs possibilités. On peut avoir la lettre de 3 à 5 fois.<br />
                        <code class="line_code">#a{3,5}#</code> fonctionne pour « aaa », « aaaa », « aaaaa ».</li>
                        <li><code class="line_code">{3,}</code> : si vous mettez une virgule, mais pas de 2e nombre, ça veut dire qu'il peut y en avoir jusqu'à l'infini. Ici, cela signifie « 3 fois ou plus ».<br />
                        <code class="line_code">#a{3,}</code>#fonctionne pour « aaa », « aaaa », « aaaaa », « aaaaaa », etc. Je ne vais pas tous les écrire, ça serait un peu long.</li>
                    </ul>
                </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/917386-les-expressions-regulieres-partie-2-2#/id/r-917058" target="_blank">
                Les métacaractères</a></h2>

                <p>
                    Dans le langage PCRE (des regex), les métacaractères qu'il faut connaître sont les suivants :<br />
                    <code class="line_code"># ! ^ $ ( ) [ ] { } ? + * . \ | </code><br />
                    Comment faire pour faire comprendre qu'on recherche « Quoi ? » alors que le point d'interrogation a déjà une signification ?<br />
                    Il va falloir l'échapper. Cela signifie que vous devez placer en fait un antislash « \ » devant un caractère spécial. Ainsi, la bonne regex serait :<br />
                    <code class="line_code">#Quoi \?#</code>
                </p>
                <p>
                    Jusqu'ici, vous avez mis des lettres et des chiffres entre les crochets ; par exemple :<br />
                    <code class="line_code">#[a-z0-9]#</code> <br />
                    Oui mais, vous vous en doutez, vous avez le droit de mettre d'autres caractères, comme les accents (mais dans ce cas, il faut les énumérer un à un). Par exemple : <code class="line_code">[a-zéèàêâùïüë]</code> et ainsi de suite.<br />
                    Jusqu'ici, tout va bien. Mais si vous voulez lister aussi des caractères spéciaux, hum ? Par exemple un point d'interrogation (au hasard). Eh bien là, ça ne compte pas ! Pas besoin de l'échapper : à l'intérieur de crochets les métacaractères… ne comptent plus !<br />
                    Ainsi, cette regex marche très bien :<br />
                    <code class="line_code">#[a-z?+*{}]#</code> <br />
                    Elle signifie qu'on a le droit de mettre une lettre, un point d'interrogation, un signe <code class="line_code">+</code>, etc.<br />
                    3 cas particuliers, cependant :
                    <ul>
                        <li>« <code class="line_code">#</code> » : il sert toujours à indiquer la fin de la regex. Pour l'utiliser, vous DEVEZ mettre un antislash devant, même dans une classe de caractères.</li>
                        <li>« <code class="line_code">]</code> » : normalement, le crochet fermant indique la fin de la classe. Si vous voulez vous en servir comme d'un caractère que vous recherchez, il faut là aussi mettre un antislash devant.</li>
                        <li>« <code class="line_code">-</code> » : encore un cas un peu particulier. Le tiret sert à définir un intervalle de classe (comme <code class="line_code">[a-z]</code>). Et si vous voulez ajouter le tiret dans la liste des caractères possibles ? Eh bien il suffit de le mettre soit au début de la classe, soit à la fin. Par exemple : <code class="line_code">[a-z0-9-]</code> permet de chercher une lettre, un chiffre ou un tiret.</li>
                    </ul>
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/917386-les-expressions-regulieres-partie-2-2#/id/r-917125" target="_blank">
                    Les classes abrégées</a></h2>

                    <p>
                        Voici ce qu'on appelle les classes abrégées, et que moi j'appelle les raccourcis.

                        <table>
                            <tr>
                                <th>Raccourci</th>
                                <th>Signification</th>
                            </tr>
                            <tr>
                                <td>\d</td>
                                <td>Indique un chiffre. Ça revient exactement à taper <code class="line_code">[0-9]</code></td>
                            </tr>
                            <tr>
                                <td>\D</td>
                                <td>Indique ce qui n'est PAS un chiffre. Ça revient à taper <code class="line_code">[^0-9]</code></td>
                            </tr>
                            <tr>
                                <td>\w</td>
                                <td>Indique un caractère alphanumérique ou un tiret de soulignement. Cela correspond à <code class="line_code">[a-zA-Z0-9_]</code></td>
                            </tr>
                            <tr>
                                <td>\W</td>
                                <td>Indique ce qui n'est PAS un mot. Si vous avez suivi, ça revient à taper <code class="line_code">[^a-zA-Z0-9_]</code></td>
                            </tr>
                            <tr>
                                <td>\t</td>
                                <td>Indique une tabulation</td>
                            </tr>
                            <tr>
                                <td>\n</td>
                                <td>Indique une nouvelle ligne</td>
                            </tr>
                            <tr>
                                <td>\r</td>
                                <td>Indique un retour chariot</td>
                            </tr>
                            <tr>
                                <td>\s</td>
                                <td>Indique un espace blanc</td>
                            </tr>
                            <tr>
                                <td>\S</td>
                                <td>Indique ce qui n'est PAS un espace blanc (\t \n \r)</td>
                            </tr>
                            <tr>
                                <td>.</td>
                                <td>Indique n'importe quel caractère. Il autorise donc tout !</td>
                            </tr>
                        </table>
                        <em>Pour le point, il existe une exception : il indique tout sauf les entrées (<code class="line_code">\n</code>).<br />
                        Pour faire en sorte que le point indique tout, même les entrées, vous devrez utiliser l'option « s » de PCRE. Exemple : <code class="line_code">#[0-9]-.#s</code></em>
                    </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/917386-les-expressions-regulieres-partie-2-2#/id/r-917256" target="_blank">
                Exemple de regex complète</a></h2>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/917386-les-expressions-regulieres-partie-2-2#/id/r-2178263" target="_blank">
                    Un numéro de téléphone</a></h3>

                    <p>
                        <code class="line_code">#^0[1-7][0-9]{8}$#</code>
                    </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/917386-les-expressions-regulieres-partie-2-2#/id/r-2178314" target="_blank">
                    Une adresse e-mail</a></h3>

                    <p>
                        <code class="line_code">#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#</code>
                    </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/917386-les-expressions-regulieres-partie-2-2#/id/r-2178328" target="_blank">
                    Des regex… avec MySQL !</a></h3>

                    <p>
                        MySQL comprend les regex !<br />
                        Il faut savoir cependant que MySQL ne comprend que les regex en langage POSIX, et pas PCRE comme on a appris.<br />
                        Vous avez juste besoin de retenir ce qui suit pour faire une regex POSIX :
                        <ul>
                            <li>il n'y a pas de délimiteur ni d'options. Votre regex n'est donc pas entourée de dièses ;</li>
                            <li>il n'y a pas de classes abrégées comme on l'a vu plus haut, donc pas de <code class="line_code">\d</code>, etc. En revanche, vous pouvez toujours utiliser le point pour dire : « n'importe quel caractère ».</li>
                        </ul>
                    </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/917386-les-expressions-regulieres-partie-2-2#/id/r-917385" target="_blank">
                Capture et remplacement : <code class="line_code">preg_replace</code></a></h2>

                <p>
                    retenez bien ceci : à chaque fois qu'il y a une parenthèse, cela crée une variable appelé e<code class="line_code">$1</code> (pour la première parenthèse), <code class="line_code">$2</code> pour la seconde, etc. On va ensuite se servir de ces variables pour modifier la chaîne (faire un remplacement).<br />
                    Voici comment s'utilise la fonctionpreg_replace : 
                    <ul>
                        <li>On lui donne en premier paramètre la regex. Rien de particulier, comme vous pouvez le constater, à part qu'il faut bien garder en tête que chaque parenthèse va créer une variable (<code class="line_code">$1</code>, <code class="line_code">$2</code>, etc.).   </li>
                        <li>Ensuite, et c'est là qu'est la nouveauté, on indique le texte de remplacement : « <code class="line_code">&ltstrong&gt$1&lt/strong&gt</code> ». Entre les balises HTML, j'ai mis <code class="line_code">$1</code>. Cela signifie que ce qui se trouve dans la parenthèse capturante (entre[b]et[/b]) sera en fait entouré des balises <code class="line_code">&ltstrong&gt</code> !</li>
                        <li>Enfin, dernier paramètre, c'est le texte dans lequel on fait notre recherche / remplacement.</li>
                    </ul>
                    Il y a quelques règles à respecter:
                    <ul>
                        <li>Si vous avez plusieurs parenthèses, pour savoir le numéro de l'une d'elles il suffit de les compter dans l'ordre de gauche à droite.</li>
                        <li>Vous pouvez utiliser jusqu'à 99 parenthèses capturantes dans une regex (ça vous laisse de la marge). Ça va donc jusqu'à <code class="line_code">$99</code>.</li>
                        <li>Une variable <code class="line_code">$0</code> est toujours créée ; elle contient toute la regex.</li>
                        <li>Si, par hasard, vous ne voulez pas qu'une parenthèse soit capturante (pour vous faciliter les comptes, ou parce que vous avez beaucoup beaucoup de parenthèses), il faut qu'elle commence par <code class="line_code">?:</code>.</li>
                    </ul>
                </p> 


            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/917386-les-expressions-regulieres-partie-2-2#/id/r-2178446" target="_blank">
                Créez votre bbCode</a></h2>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/917386-les-expressions-regulieres-partie-2-2#/id/r-2178446" target="_blank">
            Uploader des images</a></h1>

            <p>
                Dans la balise form, ajouter <code class="line_code">enctype="multipart/form-data</code>
            </p>

            <figure class="block_code">
                        <pre><code>
&ltform method="post" action="index.php" enctype="multipart/form-data?&gt
&ltinput type="hidden" name="MAX_FILE_SIZE" value="100000"&gt // limite la taille du fichier
&ltinput type="file" name="img"/&gt
&ltinput type="submit" name="envoyer"/&gt
&lt/form&gt
                </code></pre>
            </figure>

            <p>
                L'image se récupère avec <code class="line_code">$_FILES</code>. Infos <a href="https://www.php.net/manual/fr/reserved.variables.files.php">ici</a>
            </p>

            <p>
                $_FILES est un tableau avec le nom du fichier uploader et un sous tableau avec :
                <ul>
                    <li>$_FILES['userfile']['name'] : Le nom original du fichier, tel que sur la machine du client web.</li>
                    <li>$_FILES['userfile']['type'] : Le type MIME du fichier, si le navigateur a fourni cette information. Par exemple, cela pourra être "image/gif".</li>
                    <li>$_FILES['userfile']['size'] : La taille, en octets, du fichier téléchargé.</li>
                    <li> $_FILES['userfile']['tmp_name'] : Le nom temporaire du fichier qui sera chargé sur la machine serveur.</li>
                    <li> $_FILES['userfile']['error'] : Le code d'erreur associé au téléchargement de fichier.</li>
                    <li> $_FILES['userfile']['full_path'] : Le chemin entier tel que soumit par le navigateur. Cette valeur ne contient pas toujours une vraie hiérarchie de dossier, et il ne faut pas lui faire confiance. Disponible à partir de PHP 8.1.0.</li>
                </ul>
            </p>

            <p>
                Dans un premier temps on veut déplacer l'images dans un dossier de notre projet :
            </p>

            <figure class="block_code">
                        <pre><code>
$img = $_FILES['img']  // $_FILES['img'] est un tableau avec les infos de notre intl_get_error_message
//move_uploaded_file(string filename, string destination)
move_uploaded_file($img['tmp_name'], "./images" . $img['name']) // arg2 n'accepte pas '/' juste './' Et il faut nommer le fichier après '.' 
                </code></pre>
            </figure>

            <p>
                On vérifie que l'extension est bien celle d'une image (Pour pas upload un .php par exemple et se faire h@ck)
            </p>

            <figure class="block_code">
                        <pre><code>
$ext = strtolower(substr($img['name'],-3));  // On récupère les 3 dernières lettres du fichier
$allow_ext = array("jpg","png","gif");
if(in_array($ext,$allow_ext))
{
    move_uploaded_file($img['tmp-name'], "./images" . $img['name'])
}
                </code></pre>
            </figure>

            <p>
                Il est préférable de laisser les images sur le serveur et faire un script pour y accéder (en changeant le nom de l'image et lui passant un id par exemple pour mon site futur) que de le mettre en db type blob car la db est limitée en place et cela ralenti beaucoup la requête. 
            </p>

            <p>
                Cependant voici un bon tuto pour placer l'image en db <a href="https://www.youtube.com/watch?v=XfobCv4YBdk">ici</a> et <a href="https://www.youtube.com/watch?v=pCgLPVltp5o">ici</a>.
            </p>

            <p>
                Et pour sécuriser l'accès aux images du serveur avec un htacces, nous avons un bon tuto <a href="https://www.youtube.com/watch?v=_-W2wO5Sgro">ici</a>.
            </p>

            <p>
                Plus de fioriture et notemment des contrôles <a href="https://antoine-herault.developpez.com/tutoriels/php/upload/">ici</a>.
            </p>



       


            
            





















            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://www.youtube.com/watch?v=UDYOlFgtF0o&list=PLozMbzD1vZ2IOIb-wltQp7hZw56J9hSry&index=4&t=873s" target="_blank">
            Fioritures</a></h1>

            

            <p>
                <ul>
                    <li><code class="line_code">haeder('location: /adresse')</code> : renvoie vers la page /adresse. Doit être appelé avant toutes sorties (echo, ... ), infos <a href="https://stackoverflow.com/questions/8028957/how-to-fix-headers-already-sent-error-in-php">ici</a>
                    </li>
                    <li><code class="line_code">$this->users = $statement->fetchall(PDO::FETCH_CLASS, 'Users');</code> : FETCH CLASS utilise une nouvelle instance de Users. Ici fetchall va placer toutes ces instances dans un tableau nommé users (this->users ici). Pour accéder à une propriété dans un foreach on utilise foreach(this->users as user){ user->prop ... }</li>
                    <li>L'objet DateTime (lien <a href="https://grafikart.fr/tutoriels/datetime-object-php-1133">ici</a> et <a href="https://www.php.net/manual/fr/class.datetime.php">là</a> ): Date du jour en première prop $datetime d'une nouvelle instance.</li>
                </ul>
            </p>



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