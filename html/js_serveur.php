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

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920925-quest-ce-que-lajax#/id/r-1926963" target="_blank">L'AJAX</a></h1>

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

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920925-quest-ce-que-lajax#/id/r-1927026" target="_blank">Les formats classiques</a></h2>

                <p>
                    Lorsque nous parlons de « format classique », nous voulons désigner les deux premiers qui viennent d'être présentés : le texte et le HTML. Ces deux formats n'ont rien de bien particulier, vous récupérez leur contenu et vous l'affichez là où il faut, ils ne nécessitent aucun traitement. Que peut-on faire, à part copier ce code HTML là où il devrait être ? Le texte étant déjà formaté sous sa forme finale, il n'y a aucun traitement à effectuer, il est prêt à l'emploi en quelque sorte.
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920925-quest-ce-que-lajax#/id/r-1927001" target="_blank">Le XML</a></h2>

                <p>
                    Le format XML est déjà autrement plus intéressant pour nous, il permet de structurer des données de la même manière qu'en HTML, mais avec des balises personnalisées. Si vous ne savez absolument pas ce qu'est le XML, il est conseillé de jeter un coup d’œil au premier chapitre du cours d'OpenClassrooms <a href="https://openclassrooms.com/fr/courses/1766341-structurez-vos-donnees-avec-xml/1766421-quest-ce-que-le-xml" target="_blank">"Structurez vos données avec XML"</a>  avant de continuer.<br />
                    Le XML vous permet de structurer un document comme bon vous semble, tout comme en HTML, mais avec des noms de balise personnalisés. Il est donc possible de réduire drastiquement le poids d'un transfert simplement grâce à l'utilisation de noms de balise plutôt courts. <br />
                    Là où l'utilisation du XML est intéressante, c'est que, en utilisant la requête appropriée, vous pouvez parcourir ce code XML avec les mêmes méthodes que vous utilisez pour le DOM HTML, comme <code class="line-code">getElementsByTagName()</code> par exemple !
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920925-quest-ce-que-lajax#/id/r-1927015" target="_blank">Le JSON</a></h2>

                <p>
                    Le JSON est le format le plus utilisé et le plus pratique pour nous. Comme l'indique son nom (JavaScript Object Notation), il s'agit d'une représentation des données sous forme d'objet JavaScript. Essayons, par exemple, de représenter une liste de membres ainsi que leurs informations :
                </p>
                <figure class="block_code">
                        <pre><code>
{

    Membre1: {
        posts: 6230,
        inscription: '22/08/2003'
    },

    Membre2: {
        posts: 200,
        inscription: '04/06/2011'
     }

}
                        </code></pre>
                    </figure>
                    <p>
                        Cela ne vous dit rien ? Il s'agit pourtant d'un objet classique, comme ceux auxquels vous êtes habitués ! Tout comme avec le XML, vous recevez ce code sous forme de chaîne de caractères ; cependant, le parseur ne se déclenche pas automatiquement pour ce format. Il faut utiliser l'objet nommé <code class="line-code">JSON</code>, qui possède deux méthodes bien pratiques :
                        <ul>
                            <li>La première, <code class="line-code">parse()</code>, prend en paramètre la chaîne de caractères à analyser et retourne le résultat sous forme d'objet JSON ;</li>
                            <li>La seconde, <code class="line-code">stringify()</code>, permet de faire l'inverse : elle prend en paramètre un objet JSON et retourne son équivalent sous forme de chaîne de caractères.</li>
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
                        Le JSON est très pratique pour recevoir des données, mais aussi pour en envoyer, surtout depuis que le PHP 5.2 permet le support des fonctions <code class="line-code">json_decode()</code> et <code class="line-code">json_encode()</code>.
                    </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927027" target="_blank">XMLHttpRequest (semble délaissé au profit de l'API Fetch)</a></h1>

                    <p>
                        Il est temps de mettre le principe de l'AJAX en pratique avec l'objet <code class="line-code">XMLHttpRequest</code>. Cette technique AJAX est la plus courante et est définitivement incontournable.<br />
                        Le principe même de cet objet est classique : une requête HTTP est envoyée à l'adresse spécifiée, une réponse est alors attendue en retour de la part du serveur ; une fois la réponse obtenue, la requête s'arrête et peut éventuellement être relancée.<br />
                        'objet que nous allons étudier dans ce chapitre possède deux versions majeures. La première version est celle issue de la standardisation de l'objet d'origine et son support est assuré par tous les navigateurs. L'utilisation de cette première version est extrêmement courante, mais les fonctionnalités paraissent maintenant bien limitées, étant donné l'évolution des technologies.<br />
                        La deuxième version introduit de nouvelles fonctionnalités intéressantes, comme la gestion du cross-domain (nous reviendrons sur ce terme plus tard), ainsi que l'introduction de l'objet <code class="line-code">FormData</code>. Cependant, peu de navigateurs supportent actuellement son utilisation.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1921087" target="_blank">Première version : les bases</a></h2>

                    <p>
                        L'utilisation de l'objet XHR se fait en deux étapes bien distinctes :
                        <ul>
                            <li>Préparation et envoi de la requête ;</li>
                            <li>Réception des données.</li>
                        </ul>
                        <div class='em'>Vous avez sûrement pu constater que nous avons abrégé <code class="line-code">XMLHttpRequest</code> par XHR. Il s'agit d'une abréviation courante pour tout développeur JavaScript, ne soyez donc pas étonnés de la voir sur de nombreux sites.</div>
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
                        La préparation de la requête se fait par le biais de la méthode <code class="line-code">open()</code>, qui prend en paramètres cinq arguments différents, dont trois facultatifs :
                        <ul>
                            <li>Le premier argument contient la méthode d'envoi des données, les trois méthodes principales sont <code class="line-code">GET</code>, <code class="line-code">POST</code> et <code class="line-code">HEAD</code>.</li>
                            <li>Le deuxième argument est l'URL à laquelle vous souhaitez soumettre votre requête, par exemple : <code class="line-code">'http://mon_site_web.com'</code>.</li>
                            <li>Le troisième argument est un booléen facultatif dont la valeur par défaut est <code class="line-code">true</code>. À <code class="line-code">true</code>, la requête sera de type asynchrone, à <code class="line-code">false</code> elle sera synchrone (la différence est expliquée plus tard).</li>
                            <li>Les deux derniers arguments sont à spécifier en cas d'identification nécessaire sur le site Web (à cause d'un .htaccess par exemple). Le premier contient le nom de l'utilisateur, tandis que le deuxième contient le mot de passe.</li>
                        </ul>
                        Voici une utilisation basique et courante de la méthode <code class="line-code">open()</code> :
                    </p>
                    <figure class="block_code">
                        <pre><code>
xhr.open('GET', 'http://mon_site_web.com/ajax.php');
                        </code></pre>
                    </figure>
                    <p>
                        Cette ligne de code prépare une requête afin que cette dernière contacte la page <code class="line-code">ajax.php</code> sur le nom de domaine <code class="line-code">mon_site_web.com</code> par le biais du protocole <code class="line-code">http</code> (vous pouvez très bien utiliser d'autres protocoles, comme HTTPS ou FTP par exemple). Tout paramètre spécifié à la requête sera transmis par le biais de la méthode <code class="line-code">GET</code>.
                    </p>
                    <p>
                        Après préparation de la requête, il ne reste plus qu'à l'envoyer avec la méthode <code class="line-code">send()</code>. Cette dernière prend en paramètre un argument obligatoire que nous étudierons plus tard. Dans l'immédiat, nous lui spécifions la valeur <code class="line-code">null</code> :
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
                        Les méthodes d'envoi <code class="line-code">GET</code> et <code class="line-code">POST</code> vous sont sûrement familières, mais qu'en est-il de <code class="line-code">HEAD</code> ? En vérité, il ne s'agit tout simplement pas d'une méthode d'envoi, mais de réception : en spécifiant cette méthode, vous ne recevrez pas le contenu du fichier dont vous avez spécifié l'URL, mais juste son en-tête (son header, d'où le <code class="line-code">HEAD</code>). Cette utilisation est pratique quand vous souhaitez simplement vérifier, par exemple, l'existence d'un fichier sur un serveur.
                    </p>
                    <p>
                        CIl est possible de transmettre des paramètres par le biais de la méthode <code class="line-code">GET</code>. La transmission de ces paramètres se fait de la même manière qu'avec une URL classique, il faut les spécifier avec les caractères <code class="line-code">?</code> et <code class="line-code">&</code> dans l'URL que vous passez à la méthode <code class="line-code">open()</code> :
                    </p>
                    <figure class="block_code">
                        <pre><code>
xhr.open('GET', 'http://mon_site_web.com/ajax.php?param1=valeur1&param2=valeur2');
                        </code></pre>
                    </figure>
                    <p>
                        Il est cependant conseillé, quelle que soit la méthode utilisée (<code class="line-code">GET</code> ou <code class="line-code">POST</code>), d'encoder toutes les valeurs que vous passez en paramètre grâce à la fonction <code class="line-code">encodeURIComponent()</code>, afin d'éviter d'écrire d'éventuels caractères interdits dans une URL :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var value1 = encodeURIComponent(value1),
    value2 = encodeURIComponent(value2);

xhr.open('GET', 'http://mon_site_web.com/ajax.php?param1=' + value1 + '&param2=' + value2);
                        </code></pre>
                    </figure>
                    <p>
                        En ce qui concerne la méthode <code class="line-code">POST</code>, les paramètres ne sont pas à spécifier avec la méthode <code class="line-code">open()</code> mais avec la méthode <code class="line-code">send()</code> :
                    </p>
                    <figure class="block_code">
                        <pre><code>
xhr.open('POST', 'http://mon_site_web.com/ajax.php');
xhr.send('param1=' + value1 + '&param2=' + value2);
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927167" target="_blank">Réception des données</a></h3>

                    <p>
                        La réception des données d'une requête se fait par le biais de nombreuses propriétés. Cependant, les propriétés à utiliser diffèrent selon que la requête est synchrone ou non.
                    </p>
                    <p>
                        Dans le cas d'une requête asynchrone, il nous faut spécifier une fonction de <strong>callback</strong>afin de savoir quand la requête s'est terminée. Pour cela, l'objet XHR possède un événement nommé <code class="line-code">readystatechange</code> auquel il suffit d'attribuer une fonction :
                    </p>
                    <figure class="block_code">
                        <pre><code>
xhr.addEventListener('readystatechange', function() {
    // Votre code…
});
                        </code></pre>
                    </figure>
                    <p>
                        Cependant, cet événement ne se déclenche pas seulement lorsque la requête est terminée, mais plutôt, comme son nom l'indique, à chaque changement d'état. Il existe cinq états différents représentés par des constantes spécifiques à l'objet <code class="line-code">XMLHttpRequest</code> :
                        <table>
                            <tr>
                                <th>Constante</th>
                                <th>Valeur</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td><code class="line-code">UNSENT</code></td>
                                <td>0</td>
                                <td>L'objet XHR a été créé, mais pas initialisé (la méthode <code class="line-code">open()</code> n'a pas encore été appelée).</td>
                            </tr>
                            <tr>
                                <td><code class="line-code">OPENED</code></td>
                                <td>1</td>
                                <td>La méthode <code class="line-code">open()</code> a été appelée, mais la requête n'a pas encore été envoyée par la méthode <code class="line-code">send()</code>.</td>
                            </tr>
                            <tr>
                                <td><code class="line-code">HEADERS_RECEIVED</code></td>
                                <td>2</td>
                                <td>La méthode <code class="line-code">send()</code> a été appelée et toutes les informations ont été envoyées au serveur.</td>
                            </tr>
                            <tr>
                                <td><code class="line-code">LOADING</code></td>
                                <td>3</td>
                                <td>Le serveur traite les informations et a commencé à renvoyer les données. Tous les en-têtes des fichiers ont été reçus.</td>
                            </tr>
                            <tr>
                                <td><code class="line-code">DONE</code></td>
                                <td>4</td>
                                <td>Toutes les données ont été réceptionnées.</td>
                            </tr>
                        </table>
                        L'utilisation de la propriété <code class="line-code">readyState</code> est nécessaire pour connaître l'état de la requête. L'état qui nous intéresse est le cinquième (la constante <code class="line-code">DONE</code>), car nous voulons simplement savoir quand notre requête est terminée. Il existe deux manières pour vérifier que la propriété <code class="line-code">readyState</code> contient bien une valeur indiquant que la requête est terminée, la première (que nous utiliserons pour une question de lisibilité) consiste à utiliser la constante elle-même :
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
                        Tandis que la deuxième manière de faire consiste à utiliser directement la valeur de la constante, soit 4 pour la constante <code class="line-code">DONE</code>.
                    </p>
                    <p>
                        De cette manière, notre code ne s'exécutera que lorsque la requête aura terminé son travail. Toutefois, même si la requête a terminé son travail, cela ne veut pas forcément dire qu'elle l'a mené à bien, pour cela nous allons devoir consulter le statut de la requête grâce à la propriété <code class="line-code">status</code>. Cette dernière renvoie le code correspondant à son statut, comme le fameux 404 pour les fichiers non trouvés. Le statut qui nous intéresse est le 200, qui signifie que tout s'est bien passé :
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
                            <li>Les données sont au format XML, vous pouvez alors utiliser la propriété <code class="line-code">responseXML</code>, qui permet de parcourir l'arbre DOM des données reçues.</li>
                            <li>Les données sont dans un format autre que le XML, il vous faut alors utiliser la propriété <code class="line-code">responseText</code>, qui vous fournit toutes les données sous forme d'une chaîne de caractères. C'est à vous qu'incombe la tâche de faire d'éventuelles conversions, par exemple avec un objet JSON : <code class="line-code">var response = JSON.parse(xhr.responseText);</code>.</li>
                        </ol>
                        <code class="line-code">responseXML</code> est particulière, dans le sens où elle contient un arbre DOM que vous pouvez facilement parcourir. Par exemple, si vous recevez l'arbre DOM suivant :
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
                        vous pouvez récupérer toutes les balises <code class="line-code">&ltcel&gt</code> de la manière suivante :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var cels = xhr.responseXML.getElementsByTagName('cel');                    
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1921308-xmlhttprequest#/id/r-1927166" target="_blank">Récupération des en-têtes de la réponse</a></h3>

                    <p>
                        Il se peut que vous ayez parfois besoin de récupérer les valeurs des en-têtes fournis avec la réponse de votre requête. Pour cela, vous pouvez utiliser deux méthodes. La première se nomme <code class="line-code">getAllResponseHeaders()</code> et retourne tous les en-têtes de la réponse en vrac. Voici ce que cela peut donner :
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
                        La deuxième méthode, <code class="line-code">getResponseHeader()</code>, permet la récupération d'un seul en-tête. Il suffit d'en spécifier le nom en paramètre et la méthode retournera sa valeur :
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
                        L'attribut  type  de la balise  <code class="line-code">input</code>  ne prend pas seulement comme valeurs  <code class="line-code">text</code> et <code class="line-code">password</code>. Cela peut aussi être <code class="line-code">email</code>, <code class="line-code">tel</code>, <code class="line-code">URL</code>, <code class="line-code">date</code> et bien d'autres. Lorsque vous ajoutez un élément  <code class="line-code">input</code> avec un attribut <code class="line-code">type="email"</code>, le navigateur empêchera la soumission du formulaire si ce n'est pas une adresse email correcte.
                    </p>


                    <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577611-validez-les-donnees-saisies-par-vos-utilisateurs#/id/r-5684960" target="_blank">Les attributs de validation simples</a></h4>

                    <p>
                        En fonction du <code class="line-code">type</code> de l'<code class="line-code">input</code>, vous pouvez utiliser différents attributs pour perfectionner votre validation :
                        <ul>
                            <li><code class="line-code">min</code>/<code class="line-code">max</code> : fonctionne avec des champs de type <code class="line-code">nombre</code> ou <code class="line-code">date</code>. Cela permet de définir une valeur minimum et une valeur maximum autorisées</li>
                            <li><code class="line-code">required</code> : fonctionne avec à peu près tous les types de champs. Cela rend obligatoire le remplissage de ce champ</li>
                            <li><code class="line-code">step</code> : fonctionne avec les dates ou les nombres. Cela permet de définir une valeur d'incrément lorsque vous changez la valeur du champ via les flèches</li>
                            <li><code class="line-code">minlength</code>/<code class="line-code">maxlength</code> : fonctionne avec les champs textuels (<code class="line-code">text</code>, <code class="line-code">url</code>, <code class="line-code">tel</code>, <code class="line-code">email</code> ...). Cela permet de définir un nombre de caractères minimum et maximum autorisé.</li>
                        </ul>
                    </p>


                    <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577611-validez-les-donnees-saisies-par-vos-utilisateurs#/id/r-5684962" target="_blank">Les patterns</a></h4>

                    <p>
                        Nous avons vu qu'il était possible d'avoir une validation complexe grâce aux Regex en JavaScript. Eh bien c'est aussi possible directement en HTML5 avec l'attribut <code class="line-code">pattern</code>. Il suffit de définir une Regex dans cet attribut, et vous obligez la valeur du champ correspondant à la respecter.<br/>
                        Par exemple, si on prend le code suivant :
                    </p>
                    <figure class="block_code">
                        <pre><code>
&tinput type="text" pattern="[0-9]{,3}" /&gt           
                        </code></pre>
                    </figure>





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