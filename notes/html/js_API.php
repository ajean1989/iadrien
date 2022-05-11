<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Javascript API</title>
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
                                <li><code class="line-code">GET</code> : permet de récupérer des ressources, comme par exemple le temps actuel sur un service de météo ;</li>
                                <li><code class="line-code">POST</code>: permet de créer ou modifier une ressource, comme la création d'un nouvel utilisateur sur votre application ;</li>
                                <li><code class="line-code">PUT</code> : permet de modifier une ressource, comme le nom de l'utilisateur que vous venez de créer avec POST ;</li>
                                <li><code class="line-code">DELETE</code> : Permet de supprimer une ressource, comme un commentaire dans un fil de discussion. </li>
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

               



                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577591-recuperez-des-donnees-dun-service-web#/id/r-7190542" target="_blank">L'API Fetch</a></h1>

                <p>
                    Fetch est un ensemble d'objets et de fonctions mis à disposition par le langage JavaScript, afin d'exécuter des requêtes HTTP de manière asynchrone (cela permet d'exécuter du code (une requête ici), sans bloquer l'exécution de la page, en attendant la réponse du service web).L’API Fetch  va nous permettre d'exécuter des requêtes HTTP sans avoir besoin de recharger la page du navigateur.
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://fr.javascript.info/fetch" target="_blank">Utilisation avec GET</a></h2>

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
                        <li><code class="line-code">url</code> – l’URL cible.</li>
                        <li><code class="line-code">options</code> – paramètres facultatifs : méthode, en-têtes, etc…</li>
                    </ul>
                    Sans <code class="line-code">options</code>, c’est une simple requête <code class="line-code">GET</code>, téléchargeant le contenu de l’url. Le navigateur démarre la requête immédiatement et renvoie une promesse que le code appelant devrait utiliser pour obtenir le résultat.
                </p>
                <p>
                    Obtenir une réponse est généralement un processus en deux étapes.
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577591-recuperez-des-donnees-dun-service-web#/id/r-5603009" target="blank">Qu'est-ce que le format JSON ?</a></h3>

                <p>
                    JSON signifie JavaScript Object Notation. Il s'agit d'un format textuel (contrairement à un format binaire plus léger mais impossible à lire à l'œil humain), se rapprochant en termes de syntaxe de celui des objets dans le langage JavaScript.<br/>
                    Ainsi, l'objet JavaScript suivant :
                </p>
                <figure class="block_code">
                    <pre><code>
const obj = {
    name: "Mon contenu",
    id: 1234,
    message: "Voici mon contenu",
    author: {
        name: "John"
    },
    comments: [
        {
            id: 45,
            message: "Commentaire 1"
        },
        {
            id: 46,
            message: "Commentaire 2"
        }
    ]
};
                    </code></pre>
                </figure>
                <p>
                    sera retranscrit ainsi en JSON :
                </p>
                <figure class="block_code">
                    <pre><code>
{
    "name": "Mon contenu",
    "id": 1234,
    "message": "Voici mon contenu",
    "author": {
        "name": "John"
    },
    "comments": [
        {
            "id": 45,
            "message": "Commentaire 1"
        },
        {
            id: 46,
            "message": "Commentaire 2"
        }
    ]
}
                    </code></pre>
                </figure>
                <p>
                    En JavaScript, votre objet est assigné à une variable, alors qu'en JSON on ne fait que décrire une structure. C'est une syntaxe qui vient des objets en JavaScript, ainsi, votre navigateur sait directement le lire et le transformer en objets JavaScript. Si l'on reprend l'exemple de JSON précédent, il nous fournira donc un objet JavaScript comme celui du premier échantillon de code ci-dessus.
                </p>
 







                <h3 id=<?php echo $ini ; $ini++ ;?>>Vérifier l'état HTTP</h3>

                <p>
                    la <code class="line-code">promise</code>, renvoyée par fetch, se résout avec un objet de la classe intégrée <code class="line-code">Response</code> dès que le serveur répond avec des en-têtes.<br/>
                    Nous pouvons voir l’état HTTP dans les propriétés de réponse :
                    <ul>
                        <li><code class="line-code">status</code> – Code d’état HTTP, par exemple 200.</li>
                        <li><code class="line-code">ok</code> – booléen, <code class="line-code">true</code> si le code d’état HTTP est 200-299.</li>
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
                        <li>L'opérateur <code class="line-code">await</code> permet d'attendre la résolution d'une promesse (Promise). Il ne peut être utilisé qu'au sein d'une fonction asynchrone.</li>
                        <li>L'instruction <code class="line-code">let</code> permet de déclarer une variable dont la portée est celle du bloc courant (le bloc est délimité par une paire d'accolades. On peut éventuellement « étiqueter » un bloc avec un label). </li>
                    </ul>
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>>Obtenir le corps de la réponse</h3>

                <p>
                    Response fournit plusieurs méthodes basées sur les promesses pour accéder au corps dans différents formats :
                    <ul>
                        <li><code class="line-code">response.text()</code> – lit la réponse et retourne sous forme de texte.</li>
                        <li><code class="line-code">response.json()</code> – analyse la réponse en JSON. Le plus simple et courament utilisé.</li>
                        <li><code class="line-code">response.formData()</code> – retourne la réponse en tant que objet FormData.</li>
                        <li><code class="line-code">response.blob()</code> – retourne la réponse en tant que Blob (donnée binaire avec type pour images par exemple).</li>
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

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://fr.javascript.info/fetch#requetes-post" target="_blank">Utilisation avec POST</a></h2>

                <p>
                    Pour faire une requête POST, ou une requête avec une autre méthode, nous devons utiliser les options fetch :
                    <ul>
                        <li><code class="line-code">method</code> – HTTP-method, par exemple <code class="line-code">POST</code></li>
                        <li><code class="line-code">body</code> – le corps de la requête, un parmi ceux-ci : 
                            <ul>
                                <li>une chaîne de caractères (par exemple encodé en JSON)</li>
                                <li>un objet <code class="line-code">FormData</code>, pour soumettre les données en tant que <code class="line-code">form/multipart</code></li>
                                <li><code class="line-code">Blob/BufferSource</code> pour envoyer des données binaires</li>
                                <li><code class="line-code">URLSearchParams</code>, pour soumettre les données au format <code class="line-code">x-www-form-urlencoded</code>, rarement utilisé</li>
                            </ul>
                        </li>
                    </ul>
                </p>
                <p>
                    Veuillez noter que si la requête body est une chaîne de caractères, alors l’en-tête <code class="line-code">Content-Type</code> est défini sur <code class="line-code">text/plain;charset=UTF-8</code> par défaut. Mais, si nous envoyons du JSON, nous utiliserons à la place l’option <code class="line-code">headers</code> pour envoyer <code class="line-code">application/json</code>, le bon <code class="line-code">Content-Type</code> pour les données encodées en JSON.
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
    'Content-Type': 'application/json;charset=utf-8'
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
                    Pour faire cette transformation, nous utilisons la fonction <code class="line-code">JSON.stringify(user)</code> parce que l'on souhaite envoyer du JSON à notre service web, il faut alors le prévenir qu'il va recevoir du JSON. Cela se fait grâce à des headers, qui sont des en-têtes envoyés en même temps que la requête pour donner plus d'informations sur celle-ci. Les headers en question sont  :
                    <ul>
                        <li><code class="line-code">Content-Type</code>, avec la valeur <code class="line-code">application/json</code></li>
                        <li><code class="line-code">Accept</code>, avec la valeur <code class="line-code">application/json</code></li>
                    </ul>
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/API/Headers#exemples" target="_blank">Headers</a></h2>

                <p>
                    L'interface Headers de l'API Fetch vous permet d'effectuer diverses actions sur les en-têtes de requête et de réponse HTTP. Ces actions incluent la récupération, la configuration, l’ajout et la suppression. Un objet Headers a une liste Headers associée qui est vide lors de l'initialisation et qui est constituée de zéro ou plusieurs paires de noms et de valeurs.
                </p>
                <p>
                    Tous les Headers <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers" target="blank">ici</a>.
                </p>

                







                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1922300-lapi-file#/id/r-1928174" target="_blank">L'API File</a></h1>

                <p>
                    HTML5 fournit maintenant une API nommée « File ». Celle-ci est nettement plus intéressante que ce à quoi nous étions limités avant son implémentation. Il est maintenant possible de manipuler un ou plusieurs fichiers afin de les uploader ou d'obtenir des informations, comme leur poids par exemple. L'objectif de ce chapitre est de vous fournir un tour d'horizon de l'API File.
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