<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Javascript côté serveur</title>
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


            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577651-comprenez-comment-fonctionne-lasynchrone-en-js#/id/r-5694610" target="_blank">L'asynchrone en JS</a></h1>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1925582" target="_blank">JavaScript est synchrone et mono-thread</a></h2>

            <p>
            Eh bien, tout simplement qu'il n'y a qu'un seul fil d'exécution du code source. Cela signifie que lorsque vous écrivez du code, chaque ligne sera exécutée l'une après l'autre en attendant la fin de l'exécution de la ligne précédente. Il n'y a pas d'autre code qui pourra être exécuté en parallèle. Il ne peut faire qu'une seule chose à la fois.
            </p>

            <p>
                Mais il est possible et même très facile de faire de l'asynchrone en JavaScript, mais l'exécution restera synchrone...
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577651-comprenez-comment-fonctionne-lasynchrone-en-js#/id/r-5695050" target="_blank">L'event loop</a></h2>

            <p>
            En JavaScript, chaque ligne de code est exécutée de façon synchrone, mais il est possible de demander à exécuter du code de manière asynchrone. Et lorsque l'on demande à exécuter une fonction de façon asynchrone, la fonction en question est placée dans une sorte de file d'attente qui va exécuter toutes les fonctions qu'elle contient les unes après les autres. C'est ce qu'on appelle l'<strong>event loop</strong>. Tout le cœur du langage fonctionne autour de ça.
            </p>

            <p>
            Maintenant que vous comprenez un peu mieux ce qu'est l'event loop, voyons concrètement comment demander à exécuter du code de manière asynchrone. Il existe 3 fonctions pour faire ceci :
            <ul>
                <li><code class="line_code">setTimeout</code> est la fonction la plus répandue lorsque l'on veut exécuter du code asynchrone sans bloquer le fil d'exécution en cours. Cette fonction prend 2 paramètres :
                    <ul>
                        <li>La fonction à exécuter de manière asynchrone (qui sera donc ajoutée à la file d'attente de l'event loop) ;</li>
                        <li>Le délai, en millisecondes, avant d'exécuter cette fonction.</li>
                    </ul>
                </li>
                <li><code class="line_code">setInterval</code> (documentation à retrouver <a href="https://www.w3schools.com/jsref/met_win_setinterval.asp" target="blank">ici</a>) : elle fonctionne exactement comme <code class="line_code">setTimeout</code>, à ceci près qu'elle exécute la fonction passée en paramètre en boucle à une fréquence déterminée par le temps en millisecondes passé en second paramètre. Il suffira de passer la valeur de retour de <code class="line_code">setInterval</code> à <code class="line_code">clearInterval</code> pour stopper l'exécution en boucle de la fonction ;</li>
                <li><code class="line_code">setImmediate</code> (documentation à retrouver <a href="https://developer.mozilla.org/en-US/docs/Web/API/Window/setImmediate" target="blank">ici</a>). Cette fonction prend en seul paramètre la fonction à exécuter de façon synchrone.  La fonction en question sera placée dans la file d'attente de l'event loop, mais va passer devant toutes les autres fonctions, sauf certaines spécifiques au Javascript : les événements (les mêmes qu'on a vus au premier chapitre, et qui sont donc exécutés de façon asynchrone  😉), le rendu, et l'I/O. Il existe aussi <code class="line_code">nextTick</code>, qui permet, là, de court-circuiter tout le monde. À utiliser avec précaution, donc...</li>
            </ul>
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577651-comprenez-comment-fonctionne-lasynchrone-en-js#/id/r-5695071" target="_blank">Le cas de l'I/O</a></h2>

            <p>
            L'I/O correspond aux événements liés à l'input(les flux d'entrée) et l'output(les flux de sortie). Cela correspond notamment à la lecture/écriture des fichiers, aux requêtes HTTP, etc.
            </p>

            <p>
            Vous avez dû remarquer que lorsque l'on exécutait la fonction <code class="line_code">fetch()</code> lors d'une requête HTTP, celle-ci ne bloquait pas l'exécution du code. On n'attend pas que la requête soit envoyée et une réponse reçue avant d'exécuter le reste du code. C'est donc une fonction asynchrone.
            </p>

            <p>
            D’ailleurs, <code class="line_code">fetch()</code> retourne une Promise qui est une autre façon de faire de l’asynchrone car les fonctions <code class="line_code">then()</code> et <code class="line_code">catch()</code> sont appelées plus tard lorsque le travail (dans ce qu’on a vu dans le chapitre précédent il s’agissait d’une requête HTTP) est terminé. Et de la même manière, tout ce qui touche à l'I/O peut être exécuté de manière asynchrone. Et c'est tant mieux, car leur exécution peut prendre du temps. 😎
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577676-gerez-du-code-asynchrone#/id/r-5697259" target="_blank">Les callbacks</a></h2>

            <p>
                C'est la méthode la plus "vieille" mais toujours utilisée par beaucoup de modules JavaScript (nous verrons ce que sont les modules dans la dernière partie de ce cours). 
            </p>

            <p>
                Une callback est simplement une fonction que vous définissez. Le principe de la callback  est de la passer en paramètre d'une fonction asynchrone. Une fois que la fonction asynchrone a fini sa tâche, elle va appeler notre fonction callback en lui passant un résultat. Ainsi, le code que nous mettons dans notre fonction callback sera exécuté de manière asynchrone. Cela ne vous rappelle pas quelque chose ? Les événements ! Les événements sont un exemple typique de fonction asynchrone à laquelle on passe une fonction callback.
            </p>

            <figure class="block_code">
                    <pre><code>
            element.addEventListener('click', function(e) {
            // Do something here ... 
            });
                    </code></pre>
                </figure>

                <p>
                Dans l'exemple ci-dessus, la fonction qui est envoyée à <code class="line_code">addEventListener</code> est une callback. Elle n'est pas appelée tout de suite, elle est appelée plus tard, dès que l'utilisateur clique sur l'élément. Ça ne bloque donc pas l'exécution du code et c'est donc asynchrone. 😁<br/>
                Les callbacks sont la base de l'asynchrone en JavaScript et sont très utilisées.
                </p>

                <p>
                Les callbacks sont faciles à comprendre et à utiliser, mais elles souffrent d'un gros problème de lisibilité du code, via ce qu'on appelle le callback hell. En effet, on se retrouve régulièrement dans des situations où on va imbriquer plusieurs couches de callbacks , rendant le code difficile à lire et pouvant générer des erreurs.
                </p>

                <p>
                Pour gérer les erreurs avec les callbacks, la méthode la plus utilisée est de prendre 2 paramètres dans notre callback. Le 2e paramètre est notre donnée et le 1er est l'erreur. Si elle n'est pas null ou undefined,  elle contiendra un message d'erreur indiquant qu'une erreur est intervenue.
                </p>

                <figure class="block_code">
                    <pre><code>
            fs.readFile(filePath, function(err, data) {
            if (err) {
            throw err;
            }
            // Do something with data
            });
                    </code></pre>
                </figure>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577676-gerez-du-code-asynchrone#/id/r-5697271" target="_blank">Promise</a></h2>

                <p>
                Les promise, ou promesses en français, sont un peu plus complexes mais bien plus puissantes et faciles à lire que les callbacks.
                </p>

                <p>
                Lorsque l'on exécute du code asynchrone, celui-ci va immédiatement nous retourner une "promesse" qu'un résultat nous sera envoyé prochainement.
                </p>

                <p>
                Cette promesse est en fait un objet <code class="line_code">Promise</code> qui peut être <code class="line_code">resolve</code> avec un résultat, ou <code class="line_code">reject</code> avec une erreur.
                </p>

                <p>
                Lorsque l'on récupère une <code class="line_code">Promise</code>, on peut utiliser sa fonction <code class="line_code">then()</code> pour exécuter du code dès que la promesse est résolue, et sa fonction <code class="line_code">catch()</code> pour exécuter du code dès qu'une erreur est survenue.
                </p>

                <figure class="block_code">
                    <pre><code>
            functionThatReturnsAPromise()
            .then(function(data) {      // data où autre nom, renvoi au return
            // Do somthing with data 
            })
            .catch(function(err) {
            // Do something with error
            });
                    </code></pre>
                </figure>

                <figure class="block_code">
                    <pre><code>
function hr()
{
fetch('http://localhost:8000/hr.php')
    .then((ho) => ho.text())    // ho est le return de fetch
	.then(console.log);         // console.log du return de ho.text()
}

hr();
                    </code></pre>
                </figure>

                <p>
                Le gros avantage est que l'on peut aussi chaîner les <code class="line_code">Promise</code>. Ainsi, la valeur que l'on retourne dans la fonction que l'on passe à <code class="line_code">then()</code> est transformée en une nouvelle <code class="line_code">Promise</code> résolue, que l'on peut utiliser avec une nouvelle fonction <code class="line_code">then()</code>. Si notre fonction retourne par contre une exception, alors une nouvelle <code class="line_code">Promise</code> rejetée est créée et on peut l'intercepter avec la fonction <code class="line_code">catch()</code>. Mais si la fonction que l'on a passée à <code class="line_code">catch()</code> retourne une nouvelle valeur, alors on a à nouveau une <code class="line_code">Promise</code> résolue que l'on peut utiliser avec une fonction <code class="line_code">then()</code>, etc.
                </p>

                <figure class="block_code">
                    <pre><code>
returnAPromiseWithNumber2()
    .then(function(data) { // Data is 2
    return data + 1;
})
    .then(function(data) { // Data is 3
    throw new Error('error');
})
.then(function(data) {
// Not executed  
})
    .catch(function(err) {
    return 5;
})
    .then(function(data) { // Data is 5
    // Do something
});
                    </code></pre>
                </figure>

                <p>
                Dans l'exemple ci-dessus, la fonction <code class="line_code">returnAPromiseWithNumber2</code> nous renvoie une Promise qui va être résolue avec le nombre 2.
                <ul>
                    <li>La première fonction <code class="line_code">then()</code> va récupérer cette valeur.</li>
                    <li>Puis, dans cette fonction on retourne 2 + 1 , ce qui crée une nouvelle Promise qui est immédiatement résolue avec 3.</li>
                    <li>Puis, dans le <code class="line_code">then()</code> suivant, nous retournons une erreur.</li>
                </ul>
                De ce fait, le <code class="line_code">then()</code> qui suit ne sera pas appelé et c'est le <code class="line_code">catch()</code> suivant qui va être appelé avec l'erreur en question. Lui-même retourne une nouvelle valeur qui est transformée en Promise  qui est immédiatement résolue avec la valeur 5. Le dernier <code class="line_code">then()</code> va être exécuté avec cette valeur.
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577676-gerez-du-code-asynchrone#/id/r-5697271" target="_blank"><code class="line_code">Async</code>/<code class="line_code">await</code></a></h2>

                <p>
                    Ce sont 2 nouveaux mots clés qui permettent de gérer le code asynchrone de manière beaucoup plus intuitive, en bloquant l'exécution d'un code asynchrone jusqu'à ce qu'il retourne un résultat.
                </p>

                <figure class="block_code">
                    <pre><code>
async function fonctionAsynchrone1() {/* code asynchrone */}
async function fonctionAsynchrone2() {/* code asynchrone */}

async function fonctionAsynchrone3() {
 const value1 = await fonctionAsynchrone1();
 const value2 = await fonctionAsynchrone2();
 return value1 + value2;
}
                    </code></pre>
                </figure>

                <p>
                Dans cet exemple, nous avons un total de 3 fonction asynchrones : <code class="line_code">fonctionAsynchrone1</code> ,<code class="line_code">fonctionAsynchrone2</code> ,<code class="line_code">fonctionAsynchrone3</code>. Quand on utilise  async  et  await , une fonction asynchrone doit avoir le mot clé  async  avant la fonction. Ensuite, dans le code, nous pouvons faire appel à des fonctions asynchrones et attendre leur résultat grâce au mot clé  await  que l'on met devant l'appel de la fonction.
                </p>

                <p>
                    Voici un code en promise :
                </p>

                <figure class="block_code">
                    <pre><code>
function hr()
{
fetch('http://localhost:8000/hr.php')
    .then((ho) => ho.text())    // ho est le return de fetch
	.then(console.log);         // console.log du return de ho.text()
}

hr();
                    </code></pre>
                </figure>

                <p>
                    Le même avec async await
                </p>

                <figure class="block_code">
                    <pre><code>
async function hr()
{
    let response = await fetch('http://localhost:8000/hr.php');
    let data = await response.text();
    console.log(data);   
}

hr();
                    </code></pre>
                </figure>


                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920925-quest-ce-que-lajax#/id/r-1926963" target="_blank">L'AJAX</a></h1>

                <p>
                    Bon tuto grafikart <a href="https://grafikart.fr/tutoriels/ajax-780#autoplay">ici</a>
                </p>

                <p>
                    AJAX est l'acronyme d'Asynchronous JavaScript and XML, ce qui, transcrit en français, signifie « JavaScript et XML asynchrones ».<br />
                    Derrière ce nom se cache un ensemble de technologies destinées à réaliser de rapides mises à jour du contenu d'une page Web, sans qu'elles nécessitent le moindre rechargement visible par l'utilisateur de la page Web. Les technologies employées sont diverses et dépendent du type de requêtes que l'on souhaite utiliser, mais d'une manière générale le JavaScript est constamment présent. D'autres langages sont bien entendu pris en compte comme le HTML et le CSS, qui servent à l'affichage, mais ceux-ci ne sont pas inclus dans le processus de communication. Le transfert de données est géré exclusivement par le JavaScript, et utilise certaines technologies de formatage de données, comme le XML ou le JSON, mais cela s'arrête là.<br />
                    Et c'est là que réside l'intérêt de l'AJAX : les requêtes doivent être rapides. Par exemple, pour obtenir la liste des membres (lorsqu'on tape le début d'un nom dans la barre de recherche d'openclassroom), la requête AJAX ne va pas recevoir une page complète d'OpenClassrooms (bannière, menu, contenu, etc.) ; elle va juste obtenir une liste des membres formatée de manière à pouvoir l'analyser facilement.
                </p>

                <p>
                    L'AJAX est donc un ensemble de technologies visant à effectuer des transferts de données. Dans ce cas, il faut savoir structurer nos données. Il existe de nombreux formats pour transférer des données, nous allons voir ici les quatre principaux :
                    <ul>
                        <li>Le format texte est le plus simple, et pour cause : il ne possède aucune structure prédéfinie. Il sert essentiellement à transmettre une phrase à afficher à l'utilisateur, comme un message d'erreur ou autre. Bref, il s'agit d'une chaîne de caractères, rien de plus.</li>
                        <li>Le HTML est aussi une manière de transférer facilement des données. Généralement, il a pour but d'acheminer des données qui sont déjà formatées par le serveur puis affichées directement dans la page sans aucun traitement préalable de la part du JavaScript.</li>
                        <li>Un autre format de données proche du HTML est le XML, acronyme de eXtensible Markup Language. Il permet de stocker les données dans un langage de balisage semblable au HTML. Il est très pratique pour stocker de nombreuses données ayant besoin d'être formatées, tout en fournissant un moyen simple d'y accéder.</li>
                        <li>Le plus courant est le JSON, acronyme de JavaScript Object Notation. Il a pour particularité de segmenter les données dans un objet JavaScript, il est très avantageux pour de petits transferts de données segmentées et est de plus en plus utilisé dans de très nombreux langages.</li>
                    </ul>
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920925-quest-ce-que-lajax#/id/r-1927026" target="_blank">Les formats de données</a></h2>

                <p>
                    Lorsque nous parlons de « format classique », nous voulons désigner les deux premiers qui viennent d'être présentés : le texte et le HTML. Ces deux formats n'ont rien de bien particulier, vous récupérez leur contenu et vous l'affichez là où il faut, ils ne nécessitent aucun traitement. Que peut-on faire, à part copier ce code HTML là où il devrait être ? Le texte étant déjà formaté sous sa forme finale, il n'y a aucun traitement à effectuer, il est prêt à l'emploi en quelque sorte.
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920925-quest-ce-que-lajax#/id/r-1927001" target="_blank">Le XML</a></h3>

                <p>
                    Le format XML est déjà autrement plus intéressant pour nous, il permet de structurer des données de la même manière qu'en HTML, mais avec des balises personnalisées.
                    Le XML vous permet de structurer un document comme bon vous semble, tout comme en HTML, mais avec des noms de balise personnalisés. Il est donc possible de réduire drastiquement le poids d'un transfert simplement grâce à l'utilisation de noms de balise plutôt courts. <br />
                    Par exemple, nous avons ici la représentation d'un tableau grâce au XML :
                    <figure class="block_code">
                        <pre><code>
<?php 
$code = htmlspecialchars(
'<?xml version="1.0" encoding="utf-8"?>
<table>

    <line>
        <cel>Ligne 1 - Colonne 1</cel>
        <cel>Ligne 1 - Colonne 2</cel>
        <cel>Ligne 1 - Colonne 3</cel>
    </line>

    <line>
        <cel>Ligne 2 - Colonne 1</cel>
        <cel>Ligne 2 - Colonne 2</cel>
        <cel>Ligne 2 - Colonne 3</cel>
    </line>

    <line>
        <cel>Ligne 3 - Colonne 1</cel>
        <cel>Ligne 3 - Colonne 2</cel>
        <cel>Ligne 3 - Colonne 3</cel>
    </line>

</table>');
echo $code; 
?>

                        </code></pre>
                    </figure>

                    <p>

                    Là où l'utilisation du XML est intéressante, c'est que, en utilisant la requête appropriée, vous pouvez parcourir ce code XML avec les mêmes méthodes que vous utilisez pour le DOM HTML, comme <code class="line_code">getElementsByTagName()</code> par exemple !
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920925-quest-ce-que-lajax#/id/r-1927015" target="_blank">Le JSON</a></h3>

                <p>
                    Le JSON est le format le plus utilisé et le plus pratique pour nous. Comme l'indique son nom (JavaScript Object Notation), il s'agit d'une représentation des données sous forme d'objet JavaScript. 
                </p>

                <p>
                Il dispose de :
                <ul>
                    <li>4 types primitifs : les nombres, les textes (<strong>uniquement double ""</strong>), les booléens, la valeur null ;</li>
                    <li>2 types structurants : les objets et les tableaux.</li>
                </ul>
                </p>
                    
                <p>
                    Essayons, par exemple, de représenter une liste de membres ainsi que leurs informations :
                </p>
                <figure class="block_code">
                        <pre><code>
{

    "Membre1": {
        "posts": 6230,
        "inscription": "22/08/2003"
    },

    "Membre2": {
        "posts": 200,
        "inscription": "04/06/2011"
     }

}
                        </code></pre>
                    </figure>

                    <p>
                        Ou au format tableau :
                    </p>

                    <figure class="block_code">
                        <pre><code>
[
    {
        "nom": "Ampoule LED",
        "prix": 60,
        "categorie": "Optiques"
    },
    {
        "nom": "Plaquettes de frein (x4)",
        "prix": 40,
        "categorie": "Freinage"
    }
]
                        </code></pre>
                    </figure>


                    <p>
                        Cela ne vous dit rien ? Il s'agit pourtant d'un objet classique, comme ceux auxquels vous êtes habitués ! Tout comme avec le XML, vous recevez ce code sous forme de chaîne de caractères ; cependant, le parseur ne se déclenche pas automatiquement pour ce format. Il faut utiliser l'objet nommé <code class="line_code">JSON</code>, qui possède deux méthodes bien pratiques :
                        <ul>
                            <li>La première, <code class="line_code">parse()</code>, prend en paramètre la chaîne de caractères à analyser et retourne le résultat sous forme d'objet JSON ;</li>
                            <li>La seconde, <code class="line_code">stringify()</code>, permet de faire l'inverse : elle prend en paramètre un objet JSON et retourne son équivalent sous forme de chaîne de caractères.</li>
                        </ul>
                        Voici un exemple d'utilisation de ces deux méthodes :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var obj = {
        index: 'contenu'
    },
    string;

string = JSON.stringify(obj);

alert(typeof string + ' : ' + string); // Affiche : « string : {"index":"contenu"} »

obj = JSON.parse(string);

alert(typeof obj + ' : ' + obj); // Affiche : « object : [object Object] »
                        </code></pre>
                    </figure>
                    <p>
                        Le JSON est très pratique pour recevoir des données, mais aussi pour en envoyer, surtout depuis que le PHP 5.2 permet le support des fonctions <code class="line_code">json_decode()</code> et <code class="line_code">json_encode()</code>.
                    </p>

                    <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7697016-creez-des-pages-web-dynamiques-avec-javascript/7911123-projetez-des-donnees-avec-la-fonction-map" target="_blank">Fonctions utiles</a></h4>

                    <p>
                        Pour te tri dans les tableaux et objets.
                    </p>

                    <p>
                    <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array/map"><code class="line_code">map()</code></a>  va nous aider à récupérer le nom de chaque élément d'une propriété.
                    </p>

                    <img src="../images/16576178003032_P2C2-1 (1).png" alt="focntion map"/>

                    <figure class="block_code">
                        <pre><code>
const noms = pieces.map(piece => piece.nom);
                        </code></pre>
                    </figure>

                    <p>
                    Sachez que vous n’êtes pas limité à retourner une propriété d’un objet avec map. Vous avez accès à toutes les capacités du langage JavaScript dans la fonction lambda. Vous pouvez, par exemple, ne conserver que les prix auxquels vous ajoutez 1 euro, si c’est ce que vous voulez :
                    </p>



                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/API/FormData" target="_blank">Le FormData</a></h3>

                    <p>
                    L'interface FormData permet de construire facilement un ensemble de paires clé/valeur représentant les champs du formulaire et leurs valeurs, qui peuvent ensuite être facilement envoyées avec l'API fetch puis traité en PHP avec <code class="line_code">$_POST</code>. Elle utilise le même format qu'utilise un formulaire si le type d'encodage est mis à <code class="line_code">"multipart/form-data"</code>. Auquel on ajoutera toujours <code class="line_code">Boundary</code> à compléter.
                    </p>

                    <p>
                        Le constructeur <code class="line_code">FormData()</code> Crée un nouvel objet FormData. 
                    </p>

                    <figure class="block_code">
                        <pre><code>
var formData = new FormData(); // Formulaire vide à cet instant
formData = new FormData(myForm); // pré-rempli avec les valeurs issues du formulaire myForm (html id="myForm" récupéré avec getElementById)
                        </code></pre>
                    </figure>

                    <p>
                        Différentes méthodes de FormData se trouve <a href="https://developer.mozilla.org/fr/docs/Web/API/FormData">ici</a>
                    </p>

                    <p>
                        On retiendra ces principales
                    </p>

                    <figure class="block_code">
                        <pre><code>
formData.append('username', 'Chris');
formData.append('key2', 'value2');

for(var pair of formData.entries()) {
   console.log(pair[0]+ ', '+ pair[1]);
}
                        </code></pre>
                    </figure>







                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7697016-creez-des-pages-web-dynamiques-avec-javascript/7910981-preparez-votre-projet#/id/r-7910987" target="_blank">Le CSV</a></h3>

                    <p>
                    Le format CSV (Comma Separated Values, ou valeurs séparées par des virgules, en français), permet de stocker des données simples sous forme de texte. Il est souvent utilisé pour représenter les données d’un tableau (de type Excel) avec des lignes et des colonnes.
                    </p>

                    <figure class="block_code">
                        <pre><code>
Nom de la pièce,Prix en euros,Catégorie
Ampoule LED,90,Optiques
Pédale d’accélérateur,150,Habitacle
                        </code></pre>
                    </figure>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7697016-creez-des-pages-web-dynamiques-avec-javascript/7910981-preparez-votre-projet#/id/r-7910992" target="_blank">Les emplacements de données</a></h2>

                    <p>
                    Une fois que les données sont représentées sous un format particulier, il faut bien les stocker quelque part ! Et là aussi, plusieurs solutions s’offrent à vous. Vous pouvez les stocker dans des fichiers : ceux que vous trouvez dans vos dossiers sur votre ordinateur. Ils ont un nom et une extension. Sotckés sur le <strong>serveur hôte</strong>.
                    </p>

                    <p>
                    Par exemple : “pieces-auto.json”. Ici, le fichier comporte des informations sur les pièces automobiles au format JSON.
                    </p>

                    <p>
                    Vous pouvez également stocker vos données dans des <strong>serveurs de base de données</strong>. Ces serveurs sont gérés par des intégrateurs et administrateurs afin de garantir leur intégrité et leur bon fonctionnement. Les développeurs interagissent avec ces serveurs à l’aide du langage SQL et d’applications de gestion spécialisées (Oracle, pgAdmin).
                    </p>

                    <p>
                    Enfin, les données peuvent être manipulées à travers une <strong>API en ligne</strong>.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7697016-creez-des-pages-web-dynamiques-avec-javascript/7910981-preparez-votre-projet#/id/r-7910992" target="_blank">Quelles solutions pour ses données ?</a></h2>

                    <p>
                        <ul>
                            <li>Pour développer un site web depuis zéro, vous utiliserez le format SQL et vous stockerez les données sur un serveur de base de données.</li>
                            <li>Pour manipuler des données exportées d’un logiciel ou des fichiers de sauvegarde d’un projet, vous utiliserez plutôt les formats CSV, XML ou JSON, et vous stockerez les données dans des fichiers.</li>
                            <li>Pour interagir avec des API en ligne, vous devrez utiliser le format JSON pour les API récentes. Certaines API utilisent aussi le format XML, mais leur nombre reste assez limité. Le JSON a l’avantage d’être plus concis que les autres formats textuels, et d’être facilement compréhensible par les navigateurs.</li>
                        </ul>
                    </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927027" target="_blank">XMLHttpRequest (Délaissé au profit de l'API Fetch voir <a href="https://grafikart.fr/tutoriels/fetch-1017#autoplay">ici</a> )</a></h1>

                    <p>
                        Il est temps de mettre le principe de l'AJAX en pratique avec l'objet <code class="line_code">XMLHttpRequest</code>. Cette technique AJAX est la plus courante et est définitivement incontournable.<br />
                        Le principe même de cet objet est classique : une requête HTTP est envoyée à l'adresse spécifiée, une réponse est alors attendue en retour de la part du serveur ; une fois la réponse obtenue, la requête s'arrête et peut éventuellement être relancée.<br />
                        'objet que nous allons étudier dans ce chapitre possède deux versions majeures. La première version est celle issue de la standardisation de l'objet d'origine et son support est assuré par tous les navigateurs. L'utilisation de cette première version est extrêmement courante, mais les fonctionnalités paraissent maintenant bien limitées, étant donné l'évolution des technologies.<br />
                        La deuxième version introduit de nouvelles fonctionnalités intéressantes, comme la gestion du cross-domain (nous reviendrons sur ce terme plus tard), ainsi que l'introduction de l'objet <code class="line_code">FormData</code>. Cependant, peu de navigateurs supportent actuellement son utilisation.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1921087" target="_blank">Première version : les bases</a></h2>

                    <p>
                        L'utilisation de l'objet XHR se fait en deux étapes bien distinctes :
                        <ul>
                            <li>Préparation et envoi de la requête ;</li>
                            <li>Réception des données.</li>
                        </ul>
                        <div class='em'>Vous avez sûrement pu constater que nous avons abrégé <code class="line_code">XMLHttpRequest</code> par XHR. Il s'agit d'une abréviation courante pour tout développeur JavaScript, ne soyez donc pas étonnés de la voir sur de nombreux sites.</div>
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927087" target="_blank">Préparation et envoi de la requête</a></h3>

                    <p>
                        Pour commencer à préparer notre requête, il nous faut tout d'abord instancier un objet XHR :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var xhr = new XMLHttpRequest();
                        </code></pre>
                    </figure>
                    <p>
                        La préparation de la requête se fait par le biais de la méthode <code class="line_code">open()</code>, qui prend en paramètres cinq arguments différents, dont trois facultatifs :
                        <ul>
                            <li>Le premier argument contient la méthode d'envoi des données, les trois méthodes principales sont <code class="line_code">GET</code>, <code class="line_code">POST</code> et <code class="line_code">HEAD</code>.</li>
                            <li>Le deuxième argument est l'URL à laquelle vous souhaitez soumettre votre requête, par exemple : <code class="line_code">'http://mon_site_web.com'</code>.</li>
                            <li>Le troisième argument est un booléen facultatif dont la valeur par défaut est <code class="line_code">true</code>. À <code class="line_code">true</code>, la requête sera de type asynchrone, à <code class="line_code">false</code> elle sera synchrone (la différence est expliquée plus tard).</li>
                            <li>Les deux derniers arguments sont à spécifier en cas d'identification nécessaire sur le site Web (à cause d'un .htaccess par exemple). Le premier contient le nom de l'utilisateur, tandis que le deuxième contient le mot de passe.</li>
                        </ul>
                        Voici une utilisation basique et courante de la méthode <code class="line_code">open()</code> :
                    </p>
                    <figure class="block_code">
                        <pre><code>
xhr.open('GET', 'http://mon_site_web.com/ajax.php');
                        </code></pre>
                    </figure>
                    <p>
                        Cette ligne de code prépare une requête afin que cette dernière contacte la page <code class="line_code">ajax.php</code> sur le nom de domaine <code class="line_code">mon_site_web.com</code> par le biais du protocole <code class="line_code">http</code> (vous pouvez très bien utiliser d'autres protocoles, comme HTTPS ou FTP par exemple). Tout paramètre spécifié à la requête sera transmis par le biais de la méthode <code class="line_code">GET</code>.
                    </p>
                    <p>
                        Après préparation de la requête, il ne reste plus qu'à l'envoyer avec la méthode <code class="line_code">send()</code>. Cette dernière prend en paramètre un argument obligatoire que nous étudierons plus tard. Dans l'immédiat, nous lui spécifions la valeur <code class="line_code">null</code> :
                    </p>
                    <figure class="block_code">
                        <pre><code>
xhr.send(null);
                        </code></pre>
                    </figure>
                    <p>
                        Après exécution de cette méthode, l'envoi de la requête commence. Cependant, nous n'avons spécifié aucun paramètre ni aucune solution pour vérifier le retour des données, l'intérêt est donc quasi nul.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927073" target="_blank">Synchrone ou asynchrone ?</a></h3>

                    <p>
                        Une requête synchrone va bloquer votre script tant que la réponse n'aura pas été obtenue, tandis qu'une requête asynchrone laissera continuer l'exécution de votre script et vous préviendra de l'obtention de la réponse par le biais d'un événement.<br />
                        Il est bien rare que vous ayez besoin que votre script reste inactif simplement parce qu'il attend une réponse à une requête. La requête asynchrone est donc préconisé, elle vous permet de gérer votre interface pendant que vous attendez la réponse du serveur, vous pouvez donc indiquer au client de patienter ou vous occuper d'autres tâches en attendant.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927086" target="_blank">Transmettre des paramètres</a></h3>

                    <p>
                        Les méthodes d'envoi <code class="line_code">GET</code> et <code class="line_code">POST</code> vous sont sûrement familières, mais qu'en est-il de <code class="line_code">HEAD</code> ? En vérité, il ne s'agit tout simplement pas d'une méthode d'envoi, mais de réception : en spécifiant cette méthode, vous ne recevrez pas le contenu du fichier dont vous avez spécifié l'URL, mais juste son en-tête (son header, d'où le <code class="line_code">HEAD</code>). Cette utilisation est pratique quand vous souhaitez simplement vérifier, par exemple, l'existence d'un fichier sur un serveur.
                    </p>
                    <p>
                        CIl est possible de transmettre des paramètres par le biais de la méthode <code class="line_code">GET</code>. La transmission de ces paramètres se fait de la même manière qu'avec une URL classique, il faut les spécifier avec les caractères <code class="line_code">?</code> et <code class="line_code">&</code> dans l'URL que vous passez à la méthode <code class="line_code">open()</code> :
                    </p>
                    <figure class="block_code">
                        <pre><code>
xhr.open('GET', 'http://mon_site_web.com/ajax.php?param1=valeur1&param2=valeur2');
                        </code></pre>
                    </figure>
                    <p>
                        Il est cependant conseillé, quelle que soit la méthode utilisée (<code class="line_code">GET</code> ou <code class="line_code">POST</code>), d'encoder toutes les valeurs que vous passez en paramètre grâce à la fonction <code class="line_code">encodeURIComponent()</code>, afin d'éviter d'écrire d'éventuels caractères interdits dans une URL :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var value1 = encodeURIComponent(value1),
    value2 = encodeURIComponent(value2);

xhr.open('GET', 'http://mon_site_web.com/ajax.php?param1=' + value1 + '&ampparam2=' + value2);
                        </code></pre>
                    </figure>
                    <p>
                        En ce qui concerne la méthode <code class="line_code">POST</code>, les paramètres ne sont pas à spécifier avec la méthode <code class="line_code">open()</code> mais avec la méthode <code class="line_code">send()</code> :
                    </p>
                    <figure class="block_code">
                        <pre><code>
xhr.open('POST', 'http://mon_site_web.com/ajax.php');
xhr.send('param1=' + value1 + '&ampparam2=' + value2);
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927167" target="_blank">Réception des données</a></h3>

                    <p>
                        La réception des données d'une requête se fait par le biais de nombreuses propriétés. Cependant, les propriétés à utiliser diffèrent selon que la requête est synchrone ou non.
                    </p>
                    <p>
                        Dans le cas d'une requête asynchrone, il nous faut spécifier une fonction de <strong>callback</strong> afin de savoir quand la requête s'est terminée. Pour cela, l'objet XHR possède un événement nommé <code class="line_code">readystatechange</code> auquel il suffit d'attribuer une fonction :
                    </p>
                    <figure class="block_code">
                        <pre><code>
xhr.addEventListener('readystatechange', function() {
    // Votre code…
});
                        </code></pre>
                    </figure>
                    <p>
                        Cependant, cet événement ne se déclenche pas seulement lorsque la requête est terminée, mais plutôt, comme son nom l'indique, à chaque changement d'état. Il existe cinq états différents représentés par des constantes spécifiques à l'objet <code class="line_code">XMLHttpRequest</code> :
                        <table>
                            <tr>
                                <th>Constante</th>
                                <th>Valeur</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td><code class="line_code">UNSENT</code></td>
                                <td>0</td>
                                <td>L'objet XHR a été créé, mais pas initialisé (la méthode <code class="line_code">open()</code> n'a pas encore été appelée).</td>
                            </tr>
                            <tr>
                                <td><code class="line_code">OPENED</code></td>
                                <td>1</td>
                                <td>La méthode <code class="line_code">open()</code> a été appelée, mais la requête n'a pas encore été envoyée par la méthode <code class="line_code">send()</code>.</td>
                            </tr>
                            <tr>
                                <td><code class="line_code">HEADERS_RECEIVED</code></td>
                                <td>2</td>
                                <td>La méthode <code class="line_code">send()</code> a été appelée et toutes les informations ont été envoyées au serveur.</td>
                            </tr>
                            <tr>
                                <td><code class="line_code">LOADING</code></td>
                                <td>3</td>
                                <td>Le serveur traite les informations et a commencé à renvoyer les données. Tous les en-têtes des fichiers ont été reçus.</td>
                            </tr>
                            <tr>
                                <td><code class="line_code">DONE</code></td>
                                <td>4</td>
                                <td>Toutes les données ont été réceptionnées.</td>
                            </tr>
                        </table>
                        L'utilisation de la propriété <code class="line_code">readyState</code> est nécessaire pour connaître l'état de la requête. L'état qui nous intéresse est le cinquième (la constante <code class="line_code">DONE</code>), car nous voulons simplement savoir quand notre requête est terminée. Il existe deux manières pour vérifier que la propriété <code class="line_code">readyState</code> contient bien une valeur indiquant que la requête est terminée, la première (que nous utiliserons pour une question de lisibilité) consiste à utiliser la constante elle-même :
                    </p>
                    <figure class="block_code">
                        <pre><code>
xhr.addEventListener('readystatechange', function() {
    if (xhr.readyState === XMLHttpRequest.DONE) { // La constante DONE appartient à l'objet XMLHttpRequest, elle n'est pas globale
        // Votre code…
    }
});  
                      </code></pre>
                    </figure>
                    <p>
                        Tandis que la deuxième manière de faire consiste à utiliser directement la valeur de la constante, soit 4 pour la constante <code class="line_code">DONE</code>.
                    </p>
                    <p>
                        De cette manière, notre code ne s'exécutera que lorsque la requête aura terminé son travail. Toutefois, même si la requête a terminé son travail, cela ne veut pas forcément dire qu'elle l'a mené à bien, pour cela nous allons devoir consulter le statut de la requête grâce à la propriété <code class="line_code">status</code>. Cette dernière renvoie le code correspondant à son statut, comme le fameux 404 pour les fichiers non trouvés. Le statut qui nous intéresse est le 200, qui signifie que tout s'est bien passé :
                    </p>
                    <figure class="block_code">
                        <pre><code>
xhr.addEventListener('readystatechange', function() {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Votre code…
    }
});                      
                        </code></pre>
                    </figure>
                    <p>
                        Nous avons ici traité le cas d'une requête asynchrone, mais sachez que pour une requête synchrone il n'y a qu'à vérifier le statut de votre requête, tout simplement.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927161" target="_blank">Traitement des données</a></h3>

                    <p>
                        Une fois la requête terminée, il vous faut récupérer les données obtenues. Ici, deux possibilités s'offrent à vous :
                        <ol>
                            <li>Les données sont au format XML, vous pouvez alors utiliser la propriété <code class="line_code">responseXML</code>, qui permet de parcourir l'arbre DOM des données reçues.</li>
                            <li>Les données sont dans un format autre que le XML, il vous faut alors utiliser la propriété <code class="line_code">responseText</code>, qui vous fournit toutes les données sous forme d'une chaîne de caractères. C'est à vous qu'incombe la tâche de faire d'éventuelles conversions, par exemple avec un objet JSON : <code class="line_code">var response = JSON.parse(xhr.responseText);</code>.</li>
                        </ol>
                        <code class="line_code">responseXML</code> est particulière, dans le sens où elle contient un arbre DOM que vous pouvez facilement parcourir. Par exemple, si vous recevez l'arbre DOM suivant :
                    </p>
                    <figure class="block_code">
                        <pre><code>
&lt?xml version="1.0" encoding="utf-8"?&gt
&lttable&gt

    &ltline&gt
        &ltcel&gtLigne 1 - Colonne 1&lt/cel&gt
        &ltcel&gtLigne 1 - Colonne 2&lt/cel&gt
        &ltcel&gtLigne 1 - Colonne 3&lt/cel&gt
    &lt/line&gt

&lt/table&gt                      
                        </code></pre>
                    </figure>
                    <p>
                        vous pouvez récupérer toutes les balises <code class="line_code">&ltcel&gt</code> de la manière suivante :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var cels = xhr.responseXML.getElementsByTagName('cel');                    
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927166" target="_blank">Récupération des en-têtes de la réponse</a></h3>

                    <p>
                        Il se peut que vous ayez parfois besoin de récupérer les valeurs des en-têtes fournis avec la réponse de votre requête. Pour cela, vous pouvez utiliser deux méthodes. La première se nomme <code class="line_code">getAllResponseHeaders()</code> et retourne tous les en-têtes de la réponse en vrac. Voici ce que cela peut donner :
                    </p>
                    <figure class="block_code">
                        <pre><code>
Date: Sat, 17 Sep 2011 20:09:46 GMT
Server: Apache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 20
Keep-Alive: timeout=2, max=100
Connection: Keep-Alive
Content-Type: text/html; charset=utf-8            
                        </code></pre>
                    </figure>
                    <p>
                        La deuxième méthode, <code class="line_code">getResponseHeader()</code>, permet la récupération d'un seul en-tête. Il suffit d'en spécifier le nom en paramètre et la méthode retournera sa valeur :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var xhr = new XMLHttpRequest();

xhr.open('HEAD', 'http://mon_site_web.com/', false);
xhr.send(null);

alert(xhr.getResponseHeader('Content-type')); // Affiche : « text/html; charset=utf-8 »                  
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927186" target="_blank">Mise en pratique</a></h3>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1921307" target="_blank">Deuxième version : usage avancé</a></h2>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927334" target="_blank">Les requêtes cross-domain</a></h3>

                    <p>
                    Les requêtes cross-domain sont des requêtes effectuées depuis un nom de domaine A vers un nom de domaine B. Elles sont pratiques, mais absolument inutilisables avec la première version du XHR en raison de la présence d'une sécurité basée sur le principe de la same origin policy (voir chapitre Requettes HTTP). Cette sécurité est appliquée aux différents langages utilisables dans un navigateur Web, le JavaScript est donc concerné. Il est important de comprendre en quoi elle consiste et comment elle peut-être « contournée », car les requêtes cross-domain sont au cœur du XHR2.
                    </p>

                    <p>
                    Il existe une solution implémentée dans la deuxième version du XHR, qui consiste à ajouter un simple en-tête dans la page appelée par la requête pour autoriser le cross-domain. Cet en-tête se nomme Access-Control-Allow-Origin et permet de spécifier un ou plusieurs domaines autorisés à accéder à la page par le biais d'une requête XHR.
                    </p>

                    <p>
                    Il ne vous reste ensuite plus qu'à ajouter cet en-tête aux autres en-têtes de votre page Web, comme ici en PHP :
                    </p>

                    <figure class="block_code">
                        <pre><code>
&lt?php

header('Access-Control-Allow-Origin: *');

?&gt         
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927340" target="_blank">Éviter les requêtes trop longues</a></h3>

                    <p>
                    <code class="line_code">timeout</code> prend pour valeur un temps en millisecondes. Une fois ce temps écoulé, la requête se terminera.
                    </p>

                    <figure class="block_code">
                        <pre><code>
xhr.timeout = 10000; // La requête se terminera si elle n'a pas abouti au bout de 10 secondes  
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927345" target="_blank">Forcer le type de contenu</a></h3>

                    <p>
                    Vous souvenez-vous lorsque nous avions abordé le fait qu'il fallait bien spécifier le type MIME de vos documents afin d'éviter que vos fichiers XML ne soient pas parsés ? Eh bien, sachez que si vous n'avez pas la possibilité de le faire (par exemple, si vous n'avez pas accès au code de la page que vous appelez), vous pouvez réécrire le type MIME reçu afin de parser correctement le fichier. Cette astuce se réalise avec la nouvelle méthode <code class="line_code">overrideMimeType()</code>, qui prend en paramètre un seul argument contenant le type MIME exigé :
                    </p>

                    <figure class="block_code">
                        <pre><code>
var xhr = new XMLHttpRequest();

xhr.open('GET', 'http://example.com');

xhr.overrideMimeType('text/xml');

// L'envoi de la requête puis le traitement des données reçues peuvent se faire                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927363" target="_blank">Accéder aux cookies et aux sessions avec une requête cross-domain</a></h3>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927376" target="_blank">Les événements classiques</a></h3>

                    <p>Commençons par trois événements bien simples : <code class="line_code">loadstart</code>, <code class="line_code">load</code> et <code class="line_code">loadend</code>. Le premier se déclenche lorsque la requête démarre (lorsque vous appelez la méthode <code class="line_code">send()</code>). Les deux derniers se déclenchent lorsque la requête se termine, mais avec une petite différence : si la requête s'est correctement terminée (pas d'erreur 404 ou autre), alors <code class="line_code">load</code> se déclenche, tandis que loadend se déclenche dans tous les cas. L'avantage de l'utilisation de <code class="line_code">load</code> et <code class="line_code">loadend</code>, c'est que vous pouvez alors vous affranchir de la vérification de l'état de la requête avec la propriété <code class="line_code">readyState</code>, comme vous le feriez pour l'événement <code class="line_code">readystatechange</code>.
                    </p>

                    <p>
                    Les deux événements suivants sont <code class="line_code">error</code> et <code class="line_code">abort</code>. Le premier se déclenche en cas de non-aboutissement de la requête (quand <code class="line_code">readyState</code> n'atteint même pas la valeur finale : 4), tandis que le deuxième s'exécutera en cas d'abandon de la requête avec la méthode <code class="line_code">abort()</code> ou bien avec le bouton « Arrêt » de l'interface du navigateur Web.
                    </p>

                    <p>
                    Vous souvenez-vous de la propriété <code class="line_code">timeout</code> ? Eh bien, sachez qu'il existe un événement du même nom qui se déclenche quand la durée maximale spécifiée dans la propriété associée est atteinte
                    </p>

                    <p>
                    Pour finir, nous allons voir l'utilisation d'un événement un peu plus particulier nommé <code class="line_code">progress</code>. Son rôle est de se déclencher à intervalles réguliers pendant le rapatriement du contenu exigé par votre requête. Bien entendu, son utilisation n'est nécessaire, au final, que dans les cas où le fichier rapatrié est assez volumineux. Cet événement a pour particularité de fournir un objet en paramètre à la fonction associée. Cet objet contient deux propriétés nommées <code class="line_code">loaded</code> et <code class="line_code">total</code>. Elles indiquent, respectivement, le nombre d'octets actuellement téléchargés et le nombre d'octets total à télécharger. Leur utilisation se fait de cette manière :
                    </p>

                    <figure class="block_code">
                        <pre><code>
xhr.addEventListener('progress', function(e) {

element.innerHTML = e.loaded + ' / ' + e.total;

});        
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927404" target="_blank">L'objet <code class="line_code">FormData</code></a></h3>

                    <p>
                    Cet objet consiste à faciliter l'envoi des données par le biais de la méthode POST des requêtes XHR. Comme nous l'avons dit plus tôt dans ce chapitre, l'envoi des données par le biais de POST est une chose assez fastidieuse, car il faut spécifier un en-tête dont on ne se souvient que très rarement de tête, on perd alors du temps à le chercher sur le Web.
                    </p>

                    <p>
                    Tout d'abord, l'objet FormData doit être instancié :
                    </p>

                    <figure class="block_code">
                        <pre><code>
var form = new FormData();  

form.append('champ1', 'valeur1');
form.append('champ2', 'valeur2');
                        </code></pre>
                    </figure>

                    <p>
                    Une fois instancié, vous pouvez vous servir de son unique méthode : append(). Celle-ci ne retourne aucune valeur et prend en paramètres deux arguments obligatoires : le nom d'un champ (qui correspond à l'attribut name des éléments d'un formulaire) et sa valeur.
                    </p>

                    <p>
                    C'est là que cet objet est intéressant : pas besoin de spécifier un en-tête particulier pour dire que l'on envoie des données sous forme de formulaire. Il suffit juste de passer notre objet de type FormData à la méthode send(), ce qui donne ceci sur un code complet :
                    </p>

                    <figure class="block_code">
                        <pre><code>
var xhr = new XMLHttpRequest();

xhr.open('POST', 'script.php');

var form = new FormData();
form.append('champ1', 'valeur1');
form.append('champ2', 'valeur2');

xhr.send(form);
                        </code></pre>
                    </figure>

                    <p>
                    Et côté serveur, vous pouvez récupérer les données tout aussi simplement que d'habitude :
                    </p>

                    <figure class="block_code">
                        <pre><code>
&lt?php

echo $_POST['champ1'] . ' - ' . $_POST['champ2']; // Affiche : « valeur1 - valeur2 »

?&gt
                        </code></pre>
                    </figure>

                    <p>
                    Revenons rapidement sur le constructeur de cet objet, car celui-ci possède un argument bien pratique : passez donc en paramètre un élément de formulaire et votre objet FormData sera alors prérempli avec toutes les valeurs de votre formulaire. Voici un exemple simple :
                    </p>





                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577611-validez-les-donnees-saisies-par-vos-utilisateurs#/id/r-5684872" target="_blank">Never trust user input</a></h1>

                    <p>
                        Nous allons apprendre ici à valider les données utilisateur sur votre site web avant de les envoyer à votre service web. Cela constitue un premier rempart face aux problèmes cités plus haut, même si ce n'est pas suffisant, il faudra toujours avoir une validation poussée des données utilisateurs sur le service web. <br/>
                        C'est important, car rien n'empêchera un utilisateur malveillant d'utiliser un logiciel pour envoyer directement les requêtes HTTP malveillantes à votre service web. De cette manière, elles ne passeront pas par la case validation côté site web...
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577611-validez-les-donnees-saisies-par-vos-utilisateurs#/id/r-5684941" target="_blank">Validez les données suite à des événements</a></h2>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577611-validez-les-donnees-saisies-par-vos-utilisateurs#/id/r-5684939" target="_blank">En Javascript</a></h3>

                     <p>
                        Afin de valider les données utilisateurs, vous pouvez vous aider des événements du DOM. Ainsi, vous pouvez écouter l'événement  onChange  pour vérifier la donnée, dès que l'utilisateur a fini de l'éditer. Ou bien vous pouvez écouter l'événement  onInput  pour vérifier la donnée à chaque nouveau caractère. On utilisie pour cela les <a href="bases_php.php#57Regex" target="blank"><strong>Regex</strong></a>.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577611-validez-les-donnees-saisies-par-vos-utilisateurs#/id/r-5684963" target="_blank">En HTML5</a></h3>


                    <p>
                        Depuis HTML version 5, il est possible d'ajouter de la validation directement dans le code HTML, sans avoir besoin d'écrire la moindre ligne de JavaScript. Pour cela, différents attributs sont ajoutés et permettent d'empêcher la soumission d'un formulaire si toutes les validations ne sont pas respectées.
                    </p>

                    <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577611-validez-les-donnees-saisies-par-vos-utilisateurs#/id/r-5684949" target="_blank">L'attribut type pour les inputs</a></h4>

                    <p>
                        L'attribut  type  de la balise  <code class="line_code">input</code>  ne prend pas seulement comme valeurs  <code class="line_code">text</code> et <code class="line_code">password</code>. Cela peut aussi être <code class="line_code">email</code>, <code class="line_code">tel</code>, <code class="line_code">URL</code>, <code class="line_code">date</code> et bien d'autres. Lorsque vous ajoutez un élément  <code class="line_code">input</code> avec un attribut <code class="line_code">type="email"</code>, le navigateur empêchera la soumission du formulaire si ce n'est pas une adresse email correcte.
                    </p>


                    <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577611-validez-les-donnees-saisies-par-vos-utilisateurs#/id/r-5684960" target="_blank">Les attributs de validation simples</a></h4>

                    <p>
                        En fonction du <code class="line_code">type</code> de l'<code class="line_code">input</code>, vous pouvez utiliser différents attributs pour perfectionner votre validation :
                        <ul>
                            <li><code class="line_code">min</code>/<code class="line_code">max</code> : fonctionne avec des champs de type <code class="line_code">nombre</code> ou <code class="line_code">date</code>. Cela permet de définir une valeur minimum et une valeur maximum autorisées</li>
                            <li><code class="line_code">required</code> : fonctionne avec à peu près tous les types de champs. Cela rend obligatoire le remplissage de ce champ</li>
                            <li><code class="line_code">step</code> : fonctionne avec les dates ou les nombres. Cela permet de définir une valeur d'incrément lorsque vous changez la valeur du champ via les flèches</li>
                            <li><code class="line_code">minlength</code>/<code class="line_code">maxlength</code> : fonctionne avec les champs textuels (<code class="line_code">text</code>, <code class="line_code">url</code>, <code class="line_code">tel</code>, <code class="line_code">email</code> ...). Cela permet de définir un nombre de caractères minimum et maximum autorisé.</li>
                        </ul>
                    </p>


                    <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577611-validez-les-donnees-saisies-par-vos-utilisateurs#/id/r-5684962" target="_blank">Les patterns</a></h4>

                    <p>
                        Nous avons vu qu'il était possible d'avoir une validation complexe grâce aux Regex en JavaScript. Eh bien c'est aussi possible directement en HTML5 avec l'attribut <code class="line_code">pattern</code>. Il suffit de définir une Regex dans cet attribut, et vous obligez la valeur du champ correspondant à la respecter.<br/>
                        Par exemple, si on prend le code suivant :
                    </p>
                    <figure class="block_code">
                        <pre><code>
&tinput type="text" pattern="[0-9]{,3}" /&gt           
                        </code></pre>
                    </figure>

                    





                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577576-comprenez-ce-que-sont-des-api-et-un-service-web#/id/r-7190477" target="_blank">Qu'est-ce qu'une API ?</a></h1>

                    <p>
                        Une API, ou Application Programming Interface, est une interface de communication. Il en existe différents types, mais celle qui nous intéresse est celle qui permet de communiquer avec les services web.<br/>
                        L’API correspond à l’ensemble des demandes que l’on peut faire à un service web. Ces demandes sont appelées des requêtes.<br/>
                        Les requêtes sont des données qui respectent le protocole de communication et qui sont envoyées au serveur (protocole pour l'envoi de mail (SMTP), la réception de mail (IMAP), les requêtes liées à des ressources web (HTTP), aux transferts de fichiers (FTP), etc.). <br/>
                        Le protocole qui va nous intéresser est le protocole nous permettant de communiquer avec l’API d’un site Internet : le protocole HTTP. Grâce à lui, nous allons pouvoir récupérer et sauvegarder des données sur un service web, ce qui nous permettra de dynamiser le contenu de nos pages web.<br/>
                        Il va permettre de charger des pages HTML, des styles CSS, des polices de caractères, des images, etc. Mais ce n'est pas tout, le protocole HTTP  nous permet aussi d'envoyer des formulaires et de récupérer et d'envoyer toutes sortes de données depuis ou vers un serveur implémentant ce protocole grâce à son API !<br/>
                        Tout ce que vous avez besoin de savoir c’est que plusieurs informations se trouvent dans une requête HTTP :
                        <ul>
                            <li><strong>La méthode</strong>. Il s’agit de l’action que l’on souhaite faire : récupérer une ressource, la supprimer, etc… Voici les méthodes HTTP les plus courantes :
                                <ul>
                                    <li><code class="line_code">GET</code> : permet de récupérer des ressources, comme par exemple le temps actuel sur un service de météo ;</li>
                                    <li><code class="line_code">POST</code>: permet de créer ou modifier une ressource, comme la création d'un nouvel utilisateur sur votre application ;</li>
                                    <li><code class="line_code">PUT</code> : permet de modifier une ressource, comme le nom de l'utilisateur que vous venez de créer avec POST ;</li>
                                    <li><code class="line_code">DELETE</code> : Permet de supprimer une ressource, comme un commentaire dans un fil de discussion. </li>
                                </ul>
                            </li>
                            <li><strong>L’URL</strong>. C’est l’adresse sur le service web que vous souhaitez atteindre. Un peu comme un identifiant unique afin que le web service comprenne ce que vous voulez</li>
                            <li><strong>Les données</strong>. Lorsqu’on fait une requête pour enregistrer des données (par exemple un formulaire) il faut pouvoir envoyer ces données au service web.</li>
                        </ul>
                        Une fois votre requête envoyée et traitée par le service web, celui-ci va vous répondre avec, entre autres, les informations suivantes :
                        <ul>
                            <li><strong>Les données</strong>. Les données que vous avez demandées : une page HTML, etc…</li>
                            <li><strong>Le code HTTP</strong>. Il s’agit d’un code numérique qui vous indique comment s’est déroulée la requête. Voici les plus courants : <a href="https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP" target="blank">voici une liste exhaustive des codes HTTPs</a></li>
                        </ul>
                    </p>





                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577591-recuperez-des-donnees-dun-service-web#/id/r-7190542" target="_blank">L'API Fetch</a></h2>

                    <p>
                        Fetch est un ensemble d'objets et de fonctions mis à disposition par le langage JavaScript, afin d'exécuter des requêtes HTTP de manière asynchrone (cela permet d'exécuter du code (une requête ici), sans bloquer l'exécution de la page, en attendant la réponse du service web).L’API Fetch  va nous permettre d'exécuter des requêtes HTTP sans avoir besoin de recharger la page du navigateur.
                    </p>

                    <p>
                    La méthode <code class="line_code">fetch()</code> prend un argument obligatoire, le chemin vers la ressource souhaitée. Elle retourne une promesse qui résout la Response de cette requête, qu'elle soit couronnée de succès ou non. Vous pouvez aussi optionnellement lui passer un objet d'options init comme second argument (voir <code class="line_code">Request</code>.)
                    </p>

                    <p>
                    Vous rencontrerez plus fréquemment l'objet <code class="line_code">Response</code> comme étant le résultat d'une opération de l'API, par exemple, un service worker <code class="line_code">Fetchevent.respondWith</code>, ou un simple <code class="line_code">GlobalFetch.fetch()</code> (<code class="line_code">fetch()</code>).
                    </p>

                    <p>
                        <a href="https://developer.mozilla.org/fr/docs/Web/API/Response"><strong>Response</strong></a> représente la réponse d'une requête initialisée. Méthodes et propriétés sur la page en lien pour obtenir la réponse en elle même ou des infos dessus.
                    </p>

                  

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://fr.javascript.info/fetch" target="_blank">Utilisation avec GET</a></h3>

                    <p>
                        Voir <a href="https://developer.mozilla.org/fr/docs/Web/API/Fetch_API/Using_Fetch#fournir_des_options_%C3%A0_la_requ%C3%AAte" target="blank">ici</a> aussi.<br/><br/>
                        
                        La syntaxe de base est :
                    </p>
                    <figure class="block_code">
                        <pre><code>
                    let promise = fetch(url, [options])
                        </code></pre>
                    </figure>
                    <p>
                        <ul>
                            <li><code class="line_code">url</code> – l’URL cible.</li>
                            <li><code class="line_code">options</code> – paramètres facultatifs : méthode, en-têtes, etc…</li>
                        </ul>
                        Sans <code class="line_code">options</code>, c’est une simple requête <code class="line_code">GET</code>, téléchargeant le contenu de l’url (<strong>Ce qui est affiché sur la page, rien de plus</strong>). Le navigateur démarre la requête immédiatement et renvoie une promesse que le code appelant devrait utiliser pour obtenir le résultat.
                    </p>
                    <p>
                        Obtenir une réponse est généralement un processus en deux étapes.
                    </p>

                   



                    <h4 id=<?php echo $ini ; $ini++ ;?>>Vérifier l'état HTTP</h4>

                    <p>
                        la <code class="line_code">promise</code>, renvoyée par fetch, se résout avec un objet de la classe intégrée <code class="line_code">Response</code> dès que le serveur répond avec des en-têtes.<br/>
                        Nous pouvons voir l’état HTTP dans les propriétés de réponse :
                        <ul>
                            <li><code class="line_code">status</code> – Code d’état HTTP, par exemple 200.</li>
                            <li><code class="line_code">ok</code> – booléen, <code class="line_code">true</code> si le code d’état HTTP est 200-299.</li>
                        </ul>
                        exemple :
                    </p>
                    <figure class="block_code">
                        <pre><code>
                    let response = await fetch(url);

                    if (response.ok) { // if HTTP-status is 200-299
                    // obtenir le corps de réponse (la méthode expliquée ci-dessous)
                    let json = await response.json();
                    } else {
                    alert("HTTP-Error: " + response.status);
                    }
                        </code></pre>
                    </figure>

                    <p>à noter : 
                        <ul>
                            <li>L'opérateur <code class="line_code">await</code> permet d'attendre la résolution d'une promesse (Promise). Il ne peut être utilisé qu'au sein d'une fonction asynchrone.</li>
                            <li>L'instruction <code class="line_code">let</code> permet de déclarer une variable dont la portée est celle du bloc courant (le bloc est délimité par une paire d'accolades. On peut éventuellement « étiqueter » un bloc avec un label). </li>
                        </ul>
                    </p>

                    <h4 id=<?php echo $ini ; $ini++ ;?>>Obtenir le corps de la réponse</h4>

                    <p>
                        Response fournit plusieurs méthodes basées sur les promesses pour accéder au corps dans différents formats :
                        <ul>
                            <li><code class="line_code">response.text()</code> – lit la réponse et retourne sous forme de texte.</li>
                            <li><code class="line_code">response.json()</code> – analyse la réponse en JSON. Le plus simple et courament utilisé. Retourne un objet, une string ou ce que contient l'objet JSON.
                            <strong>Le résultat n'est pas JSON mais plutôt le résultat de la prise de JSON en entrée et de son analyse (parse) pour produire un objet JavaScript.</strong></li>
                            <li><code class="line_code">response.formData()</code> – retourne la réponse en tant que objet FormData.</li>
                            <li><code class="line_code">response.blob()</code> – retourne la réponse en tant que Blob (donnée binaire avec type pour images par exemple).</li>
                            <li>...</li>
                        </ul>
                        Prenons l'exemple, obtenons un objet JSON avec les derniers commits de GitHub :
                    </p>
                    <figure class="block_code">
                        <pre><code>
                    let url = 'https://api.github.com/repos/javascript-tutorial/en.javascript.info/commits';
                    let response = await fetch(url);

                    let commits = await response.json(); // lire le corps de réponse et analyser en JSON

                    alert(commits[0].author.login);
                        </code></pre>
                    </figure>
                    <p>
                        Ou, la même chose sans await, en utilisant la syntaxe des promesses pures :
                    </p>
                    <figure class="block_code">
                        <pre><code>
                    fetch('https://api.github.com/repos/javascript-tutorial/en.javascript.info/commits')
                    .then(response => response.json())
                    .then(commits => alert(commits[0].author.login));
                        </code></pre>
                    </figure>

                    <p>
                        à noter : 
                    </p>
                    <figure class="block_code">
                        <pre><code>
                    // Traditional Anonymous Function
                    function (a){
                    return a + 100;
                    }

                    // Arrow Function Break Down

                    // 1. Remove the word "function" and place arrow between the argument and opening body bracket
                    (a) => {
                    return a + 100;
                    }

                    // 2. Remove the body braces and word "return" -- the return is implied.
                    (a) => a + 100;

                    // 3. Remove the argument parentheses
                    a => a + 100;

                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://fr.javascript.info/fetch#requetes-post" target="_blank">Utilisation avec POST</a></h3>

                    <div class="em">Attention : la récupération en PHP se fait avec $_POST uniquement pour les données formData. En JSON, on récupère grâce à <code class="line_code">$json = file_get_contents('php://input');</code> qui renvoi une stdclass avec les propriétés correspondantes aux propriétées de l'objet JSON. Voir man de $_POST <a href="https://www.php.net/manual/fr/reserved.variables.post.php"></a></div>

                    <p>
                        Pour faire une requête POST, ou une requête avec une autre méthode, nous devons utiliser les options fetch :
                        <ul>
                            <li><code class="line_code">method</code> – HTTP-method, par exemple <code class="line_code">POST</code></li>
                            <li><code class="line_code">body</code> – le corps de la requête, un parmi ceux-ci : 
                                <ul>
                                    <li>une chaîne de caractères (par exemple encodé en JSON)</li>
                                    <li>un objet <code class="line_code">FormData</code>, pour soumettre les données en tant que <code class="line_code">form/multipart</code></li>
                                    <li><code class="line_code">Blob/BufferSource</code> pour envoyer des données binaires</li>
                                    <li><code class="line_code">URLSearchParams</code>, pour soumettre les données au format <code class="line_code">x-www-form-urlencoded</code>, rarement utilisé</li>
                                </ul>
                            </li>
                        </ul>
                    </p>
                    <p>
                        Veuillez noter que si la requête body est une chaîne de caractères, alors l’en-tête <code class="line_code">Content-Type</code> est défini sur <code class="line_code">text/plain;charset=UTF-8</code> par défaut. Mais, si nous envoyons du JSON, nous utiliserons à la place l’option <code class="line_code">headers</code> pour envoyer <code class="line_code">application/json</code>, le bon <code class="line_code">Content-Type</code> pour les données encodées en JSON.
                    </p>

                    <figure class="block_code">
                        <pre><code>
                    let user = {
                    name: 'John',
                    surname: 'Smith'
                    };

                    let response = await fetch('/article/fetch/post/user', {
                    method: 'POST',
                    headers: {
                    'Content-Type': 'application/json;charset=utf-8',
                    'Accept' : 'application/json'
                    },
                    body: JSON.stringify(user)
                    });

                    let result = await response.json();
                    alert(result.message);
                        </code></pre>
                    </figure>

                    <p>
                        Étant donné que l'on souhaite envoyer du JSON à notre service web, nous avons d'abord besoin de transformer notre objet JavaScript en JSON (qui, rappelons-le, est un format textuel, c'est-à-dire que c'est simplement du texte, contrairement à un objet JavaScript qui est une structure complexe du langage).
                    </p>
                    <p>
                        Pour faire cette transformation, nous utilisons la fonction <code class="line_code">JSON.stringify(user)</code> parce que l'on souhaite envoyer du JSON à notre service web, il faut alors le prévenir qu'il va recevoir du JSON. Cela se fait grâce à des headers, qui sont des en-têtes envoyés en même temps que la requête pour donner plus d'informations sur celle-ci. Les headers en question sont  :
                        <ul>
                            <li><code class="line_code">Content-Type</code>, avec la valeur <code class="line_code">application/json</code></li>
                            <li><code class="line_code">Accept</code>, avec la valeur <code class="line_code">application/json</code></li>
                        </ul>
                    </p>

                    <div class="em">Lorsqu'on envoie les données, la réponse reçue par la promise resolved se fait après traitement des données par la page fetched.</div>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/API/Headers#exemples" target="_blank">Headers</a></h3>

                    <p>
                        L'interface Headers de l'API Fetch vous permet d'effectuer diverses actions sur les en-têtes de requête et de réponse HTTP. Ces actions incluent la récupération, la configuration, l’ajout et la suppression. Un objet Headers a une liste Headers associée qui est vide lors de l'initialisation et qui est constituée de zéro ou plusieurs paires de noms et de valeurs.
                    </p>

                    <p>
                    <a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Headers/Accept"><strong>Accept</strong></a> indique quels sont les types de contenu, exprimés sous la forme de types MIME, que le client sera capable d'interpréter. <br/>
                    S'utilise uniquement pour la requête côté client (fetch).
                    </p>

                    <p>
                    <a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Headers/Accept"><strong>Content-Type</strong></a> indique au client le type de contenu réellement renvoyé. Il peut arriver que les navigateurs cherchent à détecter le type MIME du contenu en l'inspectant plutôt qu'en respectant la valeur de cet en-tête. Pour empêcher ce comportement, on peut paramétrer l'en-tête <code class="line_code">X-Content-Type-Options</code> avec la valeur <code class="line_code">nosniff</code>.<br/>
                    S'utilise côté client ou serveur (fetch ou header).
                    </p>

                    <p>
                    <a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Headers/Access-Control-Allow-Origin"><strong>Access-Control-Allow-Origin</strong></a>  renvoie une réponse indiquant si les ressources peuvent être partagées avec une origine donnée. Si le serveur spécifie un hôte d'origine plutôt que "*", il doit également inclure "Origin" dans l'en-tête de réponse "Vary" pour indiquer aux clients que les réponses du serveur seront différentes en fonction de la valeur de la demande d'origine entête.
                    </p>

                    <p>
                    L'en-tête de réponse <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Credentials"><strong>Access-Control-Allow-Credentials</strong></a> indique aux navigateurs s'il faut exposer la réponse au code JavaScript frontal lorsque le mode d'identification de la demande (Request.credentials) est inclus. Lorsque le mode d'identification d'une demande (Request.credentials) est inclus, les navigateurs n'exposent la réponse au code JavaScript frontal que si la valeur Access-Control-Allow-Credentials est true. Les informations d'identification sont des cookies, des en-têtes d'autorisation ou des certificats client TLS. The only valid value for this header is true (case-sensitive). If you don't need credentials, omit this header entirely (rather than setting its value to false). Avec fetch :  option credentials: 'include'
                    </p>


                    <p>
                        Tous les Headers <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers" target="blank">ici</a>.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/API/Headers#exemples" target="_blank">Erreur renconté</a></h3>

                    <p>
                        <ul>
                            <li>Accès refusé à cause de <code class="line_code">CSP: default-src</code> :</li>
                            Accès refusé à cause de <code class="line_code">CSP: default-src</code> : La directive HTTP Content-Security-Policy (CSP) default-src sert de valeur par défaut pour les autres directives CSP fetch directives. <br/>
                            Résolu avec le header suivant en php : <code class="line_code">header("Content-Security-Policy: default-src 'self'");</code>.<br/>
                            'self' fait référence au domaine dont est originaire le document protégé, y compris le protocole et le numéro de port.
                        </ul>
     
                    </p>









                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1922300-lapi-file#/id/r-1928174" target="_blank">L'API File</a></h2>

                    <p>
                        HTML5 fournit maintenant une API nommée « File ». Celle-ci est nettement plus intéressante que ce à quoi nous étions limités avant son implémentation. Il est maintenant possible de manipuler un ou plusieurs fichiers afin de les uploader ou d'obtenir des informations, comme leur poids par exemple. L'objectif de ce chapitre est de vous fournir un tour d'horizon de l'API File.
                    </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://www.youtube.com/watch?v=5f1M_cu2eDM" target="_blank">Service Worker et Progressive Web Apps</a></h1>

                    <p>
                    L'interface Worker de l'API Web Workers représente une tâche de fond qui peut facilement être créée et peut envoyer des messages en retour à son créateur. Créer un Worker est aussi simple que d'appeler le constructeur Worker(), en spécifiant un script qui définira le comportement du thread du worker.
                    </p>

                    <p>
                    Les service workers jouent essentiellement le rôle de serveurs proxy placés entre une application web, et le navigateur ou le réseau (lorsque disponible.) Ils sont destinés (entre autres choses) à permettre la création d'expériences de navigation déconnectée efficaces, en interceptant les requêtes réseau et en effectuant des actions appropriées selon que le réseau est disponible et que des ressources mises à jour sont à disposition sur le serveur. Ils permettront aussi d'accéder aux APIs de notifications du serveur (push) et de synchronisation en arrière-plan.
                    </p>

                    Plus d'info <a href="https://developer.mozilla.org/fr/docs/Web/API/Service_Worker_API">ici</a> et <a href="https://developer.mozilla.org/fr/docs/Web/API/Worker">ici</a> ainsi que sur le tuto grafikart <a href="https://www.youtube.com/watch?v=5f1M_cu2eDM"></a>

                    <p>
                    Les applications web progressives (ou progressive web applications en anglais, abrégées en PWAs) sont des applications web qui utilisent les service workers, les manifestes, et d'autres fonctionnalités de la plateforme web, avec l'amélioration progressive pour fournir aux utilisatrices et utilisateurs une expérience équivalente à celle des applications natives.
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