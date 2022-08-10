<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Protocoles</title>
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

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP" target="blank">HTTP</a></h1>

            <p>
            Hypertext Transfer Protocol (HTTP) (ou protocole de transfert hypertexte en français) est un protocole de la couche application servant à transmettre des documents hypermédias, comme HTML. Il a été conçu pour la communication entre les navigateurs web et les serveurs web mais peut également être utilisé à d'autres fins. Il suit le modèle classique client-serveur : un client ouvre une connexion, effectue une requête et attend jusqu'à recevoir une réponse. Il s'agit aussi d'un protocole sans état, ce qui signifie que le serveur ne conserve aucune donnée (on parle d'état) entre deux requêtes.
            </p>

            <p>
            Il est à la base de tout échange de données sur le Web. C'est un protocole de type client-serveur, ce qui signifie que les requêtes sont initiées par le destinataire (qui est généralement un navigateur web). Un document complet est construit à partir de différents sous-documents qui sont récupérés, par exemple du texte, des descriptions de mise en page, des images, des vidéos, des scripts et bien plus.
            </p>

            <figure>
                <img src="../images/fetching_a_page.png" alt="schéma internet"/>
            </figure>

            <p>
            Les clients et serveurs communiquent par l'échange de messages individuels (en opposition à un flux de données). Les messages envoyés par le client, généralement un navigateur web, sont appelés des requêtes et les messages renvoyés par le serveur sont appelés réponses.
            </p>

            <p>
            Conçu au début des années 1990, HTTP est un protocole extensible qui a évolué au cours du temps. C'est un protocole de la couche application dont les données transitent via TCP ou à travers une connexion TCP chiffrée avec TLS. En théorie, tout protocole de transport fiable pourrait être utilisé. En raison de son extensibilité, il n'est pas seulement utilisé pour récupérer des documents, mais aussi pour des images, des vidéos ou bien pour renvoyer des contenus vers des serveurs, comme des résultats de formulaires HTML. HTTP peut aussi être utilisé pour récupérer des parties de documents pour mettre à jour à la demande des pages web. 
            </p>

            <p>
            HTTP est un protocole client-serveur : les requêtes sont envoyées par une entité : l'agent utilisateur (ou le proxy qui agit au nom de celui-ci). La majorité du temps, l'agent utilisateur est un navigateur web, mais cela peut-être n'importe quoi, un robot qui analyse le Web pour remplir et maintenir l'index d'un moteur de recherche est un exemple d'agent utilisateur.
            </p>

            <p>
            Chaque requête individuelle est envoyée au serveur, qui la traite et fournit une réponse. Entre cette requête et la réponse se trouve de nombreuses entités qu'on désignera de façon générique sous le terme proxies. Celles-ci exécutent différentes opérations et agissent comme passerelles ou comme caches par exemple.
            </p>

            <figure>
                <img src="../images/fetching_a_page.png" alt="schéma requete"/>
            </figure>

            <p>
            En réalité, il y a plus d'un ordinateur entre un navigateur et le serveur qui traite la requête : il y a les routeurs, les modems et bien plus. Grâce à la construction en couche du Web, ces intermédiaires sont cachés dans les couches réseau et transport. 
            </p>

            <p>
            Pour afficher une page web, le navigateur envoie une requête initiale pour récupérer le document HTML depuis la page. Ensuite, il analyse le fichier et récupère les requêtes additionnelles qui correspondent aux scripts, aux informations de mise en page (CSS) et les sous-ressources contenues dans la page (généralement des images et des vidéos). Le navigateur web assemble alors ces ressources pour présenter un document complet à l'utilisateur : c'est la page web. Les scripts exécutés par le navigateur peuvent permettre de récupérer plus de ressources par la suite afin de mettre à jour la page web.
            </p>

            <p>
            Une page web est un document hypertexte. Cela signifie que certaines parties sont des liens qui peuvent être activés (généralement avec un clic de souris) afin de récupérer une nouvelle page web, permettant à l'utilisateur de diriger son agent utilisateur et de naviguer sur le Web. Le navigateur traduit ces instructions en requêtes HTTP et interprète les réponses HTTP pour présenter une réponse claire à l'utilisateur.
            </p>

            <p>
            De l'autre côté du canal de communication, on trouve le serveur qui sert le document demandé par le client. Bien qu'on présente virtuellement le serveur comme un seul ordinateur, en réalité, il peut s'agir d'un ensemble de serveurs se répartissant la charge (load balancing) ou d'une architecture logicielle complexe qui interroge d'autres serveurs (par exemple un cache, un serveur de base de données, serveur d'e-commerce…), qui génèrent totalement ou partiellement le document à la demande.
            </p>

            <p>
            Entre le navigateur Web et le serveur, de nombreux ordinateurs et machines relaient les messages HTTP. En raison de la structure en couches superposées des technologies web, la plupart des opérations au niveau du transport, du réseau ou au niveau physique sont transparents pour la couche HTTP, ce qui peut avoir un impact significatif sur les performances. Les opérations au niveau de la couche applicative sont généralement appelées proxy. Ceux-ci peuvent être transparents ou non (en changeant les requêtes qui passent par eux), et peuvent effectuer de nombreuses tâches :
                <ul>
                    <li>mettre en cache (le cache peut alors être public ou privé, comme le cache du navigateur)</li>
                    <li>filtrer (comme un antivirus, contrôle parental…)</li>
                    <li>répartir la charge (pour permettre à de multiples serveurs de servir différentes requêtes)</li>
                    <li>authentifier (pour contrôler l'accès à différentes ressources)</li>
                    <li>effectuer la journalisation (permettant le stockage des informations d'historiques)</li>
                </ul>
            </p>

            <p>
            <strong>HTTP est simple</strong> : Même s'il est devenu plus complexe avec l'arrivée d'HTTP/2 et l'encapsulation des messages HTTP dans des trames, HTTP est généralement conçu pour être simple et lisible par un humain. Les messages HTTP peuvent être lus et compris par des humains, ce qui facilite les tests des développeurs et réduit la complexité pour les débutants.
            </p>

            <strong>HTTP est sans état, mais pas sans session</strong> : HTTP est sans état : il n'y a pas de lien entre deux requêtes qui sont effectuées successivement sur la même connexion. Cela devient très rapidement problématique lorsque les utilisateurs veulent interagir avec une page de façon cohérente, par exemple avec un panier d'achat sur un site de commerce en ligne. Bien que le cœur d'HTTP soit sans état, les cookies HTTP permettent l'utilisation de sessions avec des états. En utilisant l'extensibilité par les en-têtes, des cookies HTTP sont ajoutés aux flux et permettent la création d'une session sur chaque requête HTTP pour partager un même contexte, ou un même état.
            </p>

            <p>Voici une liste de fonctionnalités courantes, qui peuvent être contrôlées grâce à HTTP : 
                <ul>
                    <li><strong>Cache</strong> : La façon dont les documents sont mis en cache peut être contrôlée par HTTP. Le serveur peut indiquer aux proxys et aux clients ce qu'ils doivent mettre en cache et pour combien de temps. Le client peut indiquer aux proxys de cache intermédiaires d'ignorer le document qui est stocké. </li>
                    <li><strong>Lever la contrainte d'origine unique</strong> :  Pour éviter l'espionnage et d'autres invasions dans la vie privée, les navigateurs web imposent une séparation stricte entre les sites web. Seules les pages de la même origine peuvent accéder à toutes les informations d'une page web. Bien que cette contrainte soit un fardeau pour le serveur, les en-têtes HTTP peuvent assouplir cette séparation stricte du côté serveur, en permettant à un document de devenir un patchwork d'informations en provenance de différents domaines (il existe même des raisons de sécurité de procéder ainsi).</li>
                    <li><strong>Authentification </strong> : Certaines pages peuvent être protégées de sorte que seuls certains utilisateurs puissent y accéder. Une authentification simple peut être fournie par HTTP, soit en utilisant l'en-tête WWW-Authenticate et des en-têtes similaires, soit en définissant une session spécifique grâce à des cookies HTTP. </li>
                    <li><strong>Proxys et tunnels</strong> : Les serveurs et/ou les clients sont souvent situés sur des intranets et cachent leur véritable adresse IP à d'autres. Les requêtes HTTP passent ensuite par des proxys pour traverser cette barrière de réseau. Tous les proxys ne sont pas des proxys HTTP. Le protocole SOCKS, par exemple, fonctionne à un niveau inférieur. D'autres, comme FTP, peuvent être manipulés par ces proxys. </li>
                    <li><strong>Sessions</strong> :  L'utilisation de cookies HTTP permet de lier les requêtes à l'état du serveur. Cela crée des sessions, malgré le fait que HTTP soit, au sens strict, un protocole sans état. Ceci est utile non seulement pour les paniers de commerce électronique en ligne, mais aussi pour tout site permettant une configuration de l'utilisateur. </li>
                </ul>
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Overview#les_messages_http" target="blank">Flux HTTP</a></h2>

            <p>
            Lorsqu'un client veut communiquer avec un serveur, que ce soit avec un serveur final ou un proxy intermédiaire, il réalise les étapes suivantes :
            <ol>
                <li>Il ouvre une connexion TCP : la connexion TCP va être utilisée pour envoyer une ou plusieurs requêtes et pour recevoir une réponse. Le client peut ouvrir une nouvelle connexion, réutiliser une connexion existante ou ouvrir plusieurs connexions TCP vers le serveur.</li>
                <li>Il envoie un message HTTP : les messages HTTP (avant HTTP/2) sont lisibles par les humains. Avec HTTP/2, ces simples messages sont en-capsulés dans des trames, rendant la lecture directe impossible, mais le principe reste le même.
                <figure class="block_code">
    			    <pre><code>
GET / HTTP/1.1
Host: developer.mozilla.org
Accept-Language: fr
				    </code></pre>
			    </figure>
                </li>
                <li>Il lit la réponse envoyée par le serveur : 
                <figure class="block_code">
    			    <pre><code>
HTTP/1.1 200 OK
Date: Sat, 09 Oct 2010 14:28:02 GMT
Server: Apache
Last-Modified: Tue, 01 Dec 2009 20:18:22 GMT
ETag: "51142bc1-7449-479b075b2891b"
Accept-Ranges: bytes
Content-Length: 29769
Content-Type: text/html

&lt!DOCTYPE html... (suivi des 29769 octets de la page web demandée)
				    </code></pre>
			    </figure>
                </li>
                <li>Il ferme ou réutilise la connexion pour les requêtes suivantes.</li>
            </ol>
            </p>

            <p>
            Si le pipeline HTTP est activé, plusieurs demandes peuvent être envoyées sans attendre que la première réponse soit entièrement reçue. Le pipeline HTTP s'est révélé difficile à implémenter dans les réseaux existants où de vieux logiciels coexistent avec des versions modernes. Le pipeline HTTP a été remplacé dans HTTP/2 par des requêtes de multiplexage plus robustes dans les trames.
            </p>

            <p>
            Les messages HTTP/1.1 et ceux des versions précédentes d'HTTP sont lisibles par des humains. Avec HTTP/2, ces messages sont intégrés dans une nouvelle structure binaire, une trame, ce qui permet des optimisations telles que la compression des en-têtes et le multiplexage. Même si seule une partie du message HTTP d'origine est envoyée dans cette version d'HTTP, la sémantique de chaque message est inchangée et le client reconstitue (virtuellement) la requête HTTP/1.1 d'origine. Il est donc utile de comprendre les messages HTTP/2 au format HTTP/1.1.
            </p>

            <p>
            Il existe deux types de messages HTTP, les requêtes et les réponses, chacun ayant son propre format.
            </p>

            <p>
            Un exemple de requête HTTP :
            </p>

            <figure>
                <img src="../images/http_request.png" alt="http_request"/>
            </figure>

            <p>
            Une requête comprend les éléments suivants :
            <ul>
                <li>Une méthode HTTP : généralement un verbe tel que GET, POST ou un nom comme OPTIONS ou HEAD qui définit l'opération que le client souhaite effectuer. Par exemple, un client souhaite accéder à une ressource (en utilisant GET) ou téléverser le résultat d'un formulaire HTML (en utilisant POST), bien que d'autres opérations puissent être nécessaires dans d'autres cas.</li>
                <li>Le chemin de la ressource à extraire : l'URL de la ressource à laquelle on a retiré les éléments déductibles du contexte, par exemple le protocole (http://), le domaine (ici .mozilla.org), ou le port TCP (ici 80).</li>
                <li>La version du protocole HTTP.</li>
                <li>Les en-têtes optionnels qui transmettent des informations supplémentaires pour les serveurs.</li>
                <li>Ou un corps, pour certaines méthodes comme POST, semblable à ceux dans les réponses, qui contiennent la ressource envoyée.</li>
            </ul>
            </p>

            <p>
            Un exemple de réponse :
            </p>

            <figure>
                <img src="../images/http_response.png" alt="http_response"/>
            </figure>

            <p>
            Une réponse comprend les éléments suivants:
            <ul>
                <li>La version du protocole HTTP qu'elle suit</li>
                <li>Un code de statut, qui indique si la requête a réussi ou non.</li>
                <li>Un message de statut qui est une description rapide, informelle, du code de statut</li>
                <li>Les en-têtes HTTP, comme pour les requêtes.</li>
                <li>Éventuellement un corps contenant la ressource récupérée.</li>
            </ul>
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Overview#les_apis_bas%C3%A9es_sur_http" target="blank">Les API HTTP</a></h2>

            <p>
            L'API la plus utilisée se basant sur HTTP est l'API<code class="line_code"> XMLHttpRequest</code> qui permet d'échanger des données entre un agent utilisateur user agent et un serveur.
            </p>

            <p>
            Une autre API, <code class="line_code">server-sent events</code>, est un service unidirectionnel permettant à un serveur d'envoyer des notifications au client, en se basant sur le protocole HTTP. À l'aide de l'utilisation de l'interface EventSource, le client ouvre une connexion et initie un gestionnaire d'évènements. Le navigateur convertit alors automatiquement les messages du flux HTTP en objets de type Event, pour ensuite les déléguer au gestionnaire d'évènements qui se sont abonnés à ce type d'évènement. Dans le cas où le type est inconnu ou si aucun gestionnaire typé n'a été défini, ils sont délivrés au gestionnaire d'évènements <code class="line_code">onmessage</code>.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Caching" target="blank">Mise en cache HTTP</a></h2>

            <p>
            Les performances des sites et applications web peuvent être significativement améliorées en réutilisant les ressources déjà collectées précédemment. Les caches web réduisent la latence et le trafic du réseau, et ainsi diminuent le temps nécessaire à l'affichage de la représentation d'une ressource. En utilisant la mise en cache HTTP, les sites web deviennent plus réactifs.
            </p>

            <p>
            La mise en cache est une technique qui stocke une copie d’une ressource donnée et la renvoie quand elle est demandée. Quand un cache web a une ressource demandée dans son espace de stockage, il intercepte la requête et renvoie sa copie au lieu de la re-télécharger depuis le serveur d’origine. Cela a plusieurs avantages : le cache réduit la charge du serveur qui n’a pas besoin de servir tous les clients lui-même, et il améliore la performance en étant plus proche du client, par exemple, cela prend moins de temps pour transmettre à nouveau la ressource. Pour un site web, c’est un composant majeur pour atteindre de hautes performances. Cependant, il doit être configuré correctement, car toutes les ressources ne restent pas éternellement inchangées : il est important de mettre une ressource en cache seulement jusqu’à ce qu’elle change, pas plus longtemps.
            </p>

            <p>
            Il y a différents types de caches, qui peuvent être groupés en deux principales catégories : les caches privés et les caches partagés. Un cache partagé est un cache qui stocke les réponses pour qu’elles soient réutilisées par plus d’un utilisateur. Un cache privé est dédié à un seul utilisateur. Cette page aborde principalement les caches de navigateur et de proxy, mais il existe aussi d'autres types de caches.
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Caching#caches_de_navigateur_priv%C3%A9s" target="blank">Caches de navigateur privés</a></h3>

            <p>
            Un cache privé est dédié à un seul utilisateur. Il se peut que vous ayez déjà vu les termes « mise en cache » dans les paramètres de votre navigateur. Un cache de navigateur contient tous les documents téléchargés via HTTP par l’utilisateur. Ce cache est utilisé pour rendre les documents visités disponibles à la navigation via les boutons précédent / suivant, la sauvegarde, l’affichage du code source, etc. sans nécessiter un aller-retour au serveur supplémentaire. De la même manière, il améliore la navigation hors-ligne de contenu en cache.
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Caching#caches_de_proxy_partag%C3%A9s" target="blank">Caches de proxy partagés</a></h3>

            <p>
            Un cache partagé est un cache qui stocke les réponses pour qu’elles soient réutilisées par plus d’un utilisateur. Par exemple, un fournisseur d’accès à Internet ou votre entreprise peut avoir mis en place un proxy web au sein de son infrastructure de réseau local pour servir des utilisateurs multiples, de sorte que les ressources populaires sont réutilisées plusieurs fois, réduisant le trafic réseau et la latence.
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Caching#cibles_des_op%C3%A9rations_de_cache" target="_blank">Cibles des opérations de cache</a></h3>

            <p>
            La mise en cache HTTP est optionnelle, mais réutiliser une ressource en cache est généralement souhaitable. Cependant, les caches HTTP communs se limitent typiquement à mettre en cache les réponses à des requêtes GET et peuvent décliner les autres méthodes. La clé de cache primaire consiste en la méthode de requête et l’URI ciblée (souvent, seule l’URI est utilisée, car seules des requêtes GET sont ciblées par la mise en cache). Voici des formes courantes d’entrées de cache :
                <ul>
                    <li>Résultat positif de requête de lecture : une réponse 200 (OK) à une requête GET contenant une ressource telle qu’un document HTML, une image ou un fichier.</li>
                    <li>Redirection permanente : une réponse 301 (Moved Permanently).</li>
                    <li>Réponse d’erreur : une page de résultat 404 (Not Found).</li>
                    <li>Résultat incomplet : une réponse 206 (Partial Content).</li>
                    <li>Réponses autres que GET si quelque chose est défini comme pouvant être utilisé comme clé de cache.</li>
                </ul>
            Une entrée de cache peut aussi consister en de multiples réponses stockées différenciées par une clé secondaire, si la requête fait l’objet de négociation de contenu. 
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Caching#contr%C3%B4le_de_la_mise_en_cache" target="_blank">Contrôle de la mise en cache</a></h3>

            <p>
            Le champ d'en-tête général <code class="line_code">Cache-Control</code> est utilisé pour spécifier les directives pour les mécanismes de cache dans les requêtes et les réponses. Utilisez cet en-tête pour définir vos stratégies de mise en cache avec la variété de directives fournies.
            </p>

            <p>
            <strong>Pas du tout de cache mémoire</strong> : Le cache ne doit rien stocker concernant la demande du client ou la réponse du serveur. Une demande est envoyée au serveur et une réponse complète est téléchargée à chaque fois.
            </p>
            <figure class="block_code">
    			    <pre><code>
                    Cache-Control: no-store
Cache-Control: no-cache, no-store, must-revalidate
				</code></pre>
			</figure>

            <p>
            <strong>Pas de cache</strong> : Un cache enverra la demande au serveur d'origine pour validation avant de publier une copie en cache.
            </p>
            <figure class="block_code">
    			    <pre><code>
Cache-Control: no-cache
				</code></pre>
			</figure>

            <p>
            <strong>Caches privées et publiques</strong> : La directive "public" indique que la réponse peut être mise en cache par n'importe quel cache. Cela peut être utile si les pages avec une authentification HTTP ou des codes d’état de réponse qui ne sont pas normalement mis en cache doivent maintenant être mis en cache. En revanche, "privé" indique que la réponse est destinée à un seul utilisateur et ne doit pas être stockée par un cache partagé. Un cache de navigateur privé peut stocker la réponse dans ce cas.
            </p>
            <figure class="block_code">
    			    <pre><code>
Cache-Control: private
Cache-Control: public
				</code></pre>
			</figure>

            <p>
            <strong>Expiration</strong> : La directive la plus importante ici est "max-age = &ltsecondes&gt", qui correspond au temps maximum pendant lequel une ressource est considérée comme nouvelle. Contrairement à Expires, cette directive est relative à l'heure de la demande. Pour les fichiers de l'application qui ne changeront pas, vous pouvez généralement ajouter une mise en cache agressive. Cela inclut les fichiers statiques tels que les images, les fichiers CSS et les fichiers JavaScript, par exemple.
            </p>
            <figure class="block_code">
    			    <pre><code>
Cache-Control: max-age=31536000
				</code></pre>
			</figure>

            <p>
            <strong>Validation</strong> : Lors de l'utilisation de la directive "must-revalidate", le cache doit vérifier l'état des ressources obsolètes avant de l'utiliser, et celles qui ont expiré ne doivent pas être utilisées.
            </p>
            <figure class="block_code">
    			    <pre><code>
Cache-Control: must-revalidate
				</code></pre>
			</figure>

            <p>
            Une fois que la ressource est mise en mémoire dans le cache, elle pourrait théoriquement être servie éternellement par le cache. Les caches ont une capacité de stockage limitée donc les objets en sont périodiquement enlevés. Ce procédé est appelé éviction de cache ("cache eviction"). Certaines ressources peuvent changer sur le serveur et le cache doit donc être mis à jour. Comme HTTP est un protocole serveur-client, les serveurs peuvent informer les caches et les clients quand une ressource est modifiée, ils doivent communiquer un temps d'expiration de la ressource. Avant cette expiration, la ressource est considérée "fraîche" (fresh => freshness); Aprés son expiration, elle est considérée périmée (stale). Les algoritmes d'éviction privilégient souvent les ressources fraîches. Notez qu'une ressource "périmée" n'est ni éjectée ni ignorée; quand le cache reçoit une requête pour une ressource périmée, il transmet cette requête avec un If-None-Match pour vérifier si elle est quand même fraîche. Si c'est le cas, le serveur retourne en en-tête un statut 304 (Not Modified) sans renvoyer le corps de la ressource demandée, épargnant ainsi un peu de bande passante.
            </p>

            <p>
            Les développeurs Web ont inventé une technique que Steve Sounders a appelée revving (source). Les fichiers rarement mis à jour sont nommés d'une maniére spécifique : dans leur URL, habituellement dans le nom de fichier, est ajouté un numéro de révision (ou version). Comme ceci, chaque nouvelle révision / version de la ressource est considérée comme une ressource elle-même, qui ne change jamais et qui peut avoir un temps d'expiration très éloigné dans le futur. En général un an ou plus. Dans le but d'avoir les nouvelles versions, tous les liens doivent être changés. C'est l'inconvénient de cette méthode : une complexité additionnelle habituellement prise en charge par la chaîne d'outils de développeurs Web. Quand les ressources qui ne sont pas mises à jour fréquemment changent, elles induisent un changement supplémentaire aux ressources régulièrement rafraîchies. Quand elles sont lues, les nouvelles versions des autres sont lues aussi.
            </p>

            <p>
            Cette technique a un avantage de plus : mettre à jour deux ressources en cache en même temps ne fera pas qu'une version périmée d'une des ressources sera utilisée avec la nouvelle version de l'autre. C'est très important quand les sites ont des feuilles de style CSS ou des scripts JS qui ont des dépendances mutuelles c'est-à-dire qui dépendent l'un de l'autre parce qu'ils se réfèrent aux mêmes éléments HTML.
            </p>

            <p>
            La version de révision ajoutée à la ressource révisée n'a pas à être sous une forme classique de chaîne de version comme 1.1.3, ou une suite monotone de chiffres. Cela peut être n'importe quoi qui prévienne une collision : un hash ou une date.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Cookies" target="blank">HTTP cookies</a></h2>

            <p>
            Un cookie HTTP (cookie web, cookie de navigateur) est un petit ensemble de données qu'un serveur envoie au navigateur web de l'utilisateur. Le navigateur peut alors le stocker localement, puis le renvoyer à la prochaine requête vers le même serveur. Typiquement, cette méthode est utilisée par le serveur pour déterminer si deux requêtes proviennent du même navigateur.
            </p>

            <p>Les cookies sont utilisés pour 3 raisons principales :
                <ul>
                    <li><strong>Gestion des sessions</strong> : Logins, panier d'achat, score d'un jeu, ou tout autre chose dont le serveur doit se souvenir.
                    </li>
                    <li><strong>Personnalisation</strong> : Préférences utilisateur, thèmes, et autres paramètres.</li>
                    <li><strong>Suivi</strong> : Enregistrement et analyse du comportement utilisateur.</li>
                </ul>
            </p>

            <p>
            Les cookies étaient auparavant utilisés pour le stockage côté client. C'était légitime lorsque les cookies étaient la seule manière de stocker des données côté client, mais il est aujourd'hui recommandé de préférer les APIs modernes de stockage. Les cookies sont envoyés avec chaque requête, ils peuvent donc avoir un impact négatif sur les performances (particulièrement pour des connexions mobiles). Les APIs modernes de stockage côté client sont l'API Web storage (localStorage et sessionStorage) et IndexedDB.
            </p>

            <p>
            L'entête de réponse HTTP Set-Cookie envoie un cookie depuis le serveur vers le navigateur. Un cookie simple est défini comme ceci:
            </p>

            <figure class="block_code">
    			    <pre><code>
Set-Cookie: &ltnom-du-cookie&gt=&ltvaleur-du-cookie&gt
				</code></pre>
			</figure>

            <p>
            Exemple de réponse HTTP complète:
            </p>

            <figure class="block_code">
    			    <pre><code>
HTTP/1.0 200 OK
Content-type: text/html
Set-Cookie: yummy_cookie=choco
Set-Cookie: tasty_cookie=strawberry

[contenu de la page]				</code></pre>
			</figure>

            <p>
            Maintenant, à chaque requête vers le serveur, le navigateur va renvoyer au serveur tous les cookies stockés, avec l'entête Cookie :
            </p>

            <figure class="block_code">
    			    <pre><code>
                    GET /sample_page.html HTTP/1.1
Host: www.example.org
Cookie: yummy_cookie=choco; tasty_cookie=strawberry			
                    </code></pre>
			</figure>

            <p>
            <li><strong>Cookies de session</strong> : Il est effacé quand le navigateur est fermé, on ne pas spécifié de directive Expires ou Max-Age. Notons cependant que les navigateurs web peuvent utiliser la restauration de session, ce qui fait de la plupart des cookies des cookies permanents, comme si le navigateur n'avait jamais été fermé.
            </li>
            <li><strong>Cookies permanents</strong> : Plutôt que d'expirer quand le client ferme, les cookies permanents expirent à une date spécifique (Expires) ou après un certain temps (Max-Age).
            </li>
            </p>

            <p>
            Un cookie sécurisé est uniquement envoyé au serveur avec les requêtes chiffrées, via le protocole HTTPS. Même avec Secure, les informations sensibles ne devraient jamais être stockées dans les cookies, car ils sont intrinsèquement non sécurisés et cette option ne peut pas offrir de protection réelle. À partir de Chrome 52 et Firefox 52, les sites non sécurisés (http:) ne peuvent pas définir de cookies avec la directive Secure.
            </p>

            <p>
            Pour empêcher les attaques de cross-site scripting (XSS), on peut utiliser les cookies HttpOnly, qui sont inaccessibles à l'API JavaScript Document.cookie (en-US); ils sont uniquement envoyés au serveur. Par exemple, les cookies qui persistent la session côté serveur n'ont pas besoin d'être accessibles via JavaScript, et l'option HttpOnly doit être définie.
            </p>

            <figure class="block_code">
    			    <pre><code>
Set-Cookie: id=a3fWa; Expires=Wed, 21 Oct 2015 07:28:00 GMT; Secure; HttpOnly
                    </code></pre>
			</figure>

            <p>
            Domain spécifie les hôtes autorisés à recevoir le cookie. S'il n'est pas spécifié, il s'agit par défaut de l'hôte de l'emplacement actuel du document, en excluant les sous-domaines. Si Domain est spécifié, alors les sous-domaines sont toujours inclus. Par exemple, si Domain=mozilla.org est défini, alors les cookies sont envoyés sur les sous-domaines comme developer.mozilla.org.
            </p>

            <p>
            Path indique pour quels chemins d'URL on doit envoyer l'entête Cookie. Le caractère %x2F ("/") est considéré comme un séparateur de répertoire, et les sous-répertoires seront également acceptés. Par exemple, si Path=/docs est défini, ces chemins seront acceptés :
            <ul>
                <li>/docs</li>
                <li>/docs/Web/</li>
                <li>/docs/Web/HTTP</li>
            </ul>
            </p>

            <p>
            De nouveaux cookies peuvent également être créés via JavaScript en utilisant la propriété Document.cookie, et si l'option HttpOnly n'est pas définie, les cookies existants peuvent être également accédés via JavaScript.
            </p>

            <p>
            Prenez garde aux problèmes de sécurité, décrits dans la section Sécurité ci-dessous. Les cookies disponibles via JavaScript peuvent être volés en utilisant les failles XSS.
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Cookies#suivi_et_confidentialit%C3%A9" target="blank">Cookies tiers</a></h3>

            <p>
            Les cookies ont un domaine qui leur est associé. Si ce domaine est le même que la page sur laquelle vous êtes, on parle de cookie interne (first-party cookie). Si le domaine est différent, on parle de cookie tiers (third-party cookie).
            </p>

            <p>
            Alors que les cookies internes sont uniquement envoyés au serveur qui les a définis, une page web peut également contenir des images ou tout autre composant stockés sur d'autres domaines (comme des bannières publicitaires). Les cookies qui sont envoyés via les composants tiers sont appelés cookies tiers et ils sont principalement utilisés pour la publicité et le suivi sur le web. Voir par exemple les types de cookies utilisés par Google. La plupart des navigateurs autorisent les cookies tiers par défaut, mais il existe des addons disponibles pour les bloquer (par exemple, Privacy Badger par EFF).
            </p>

            <p>
            Si vous n'avertissez pas vos utilisateurs de l'utilisation de cookies tiers, vous pouvez perdre leur confiance s'ils la découvrent. Une divulgation claire (tel que dans une politique de confidentialité) tend à éliminer les effets négatifs d'une telle découverte. Quelques pays ont également une législation sur les cookies. 
            </p>

            <p>
            <strong>Do-Not-Track</strong> : Il n'y a pas d'obligations légales ou technologiques pour son utilisation, mais l'entête DNT peut être utilisée pour signaler qu'une application web doit désactiver son suivi ou le suivi tiers d'un utilisateur. Voir l'entête DNT pour plus d'informations.
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Cookies#directive_de_lue_sur_les_cookies" target="blank">Directive de l'UE sur les cookies</a></h3>

            <p>
            Les exigences relatives aux cookies dans l'Union Européenne sont définies dans la Directive 2009/136/EC du Parlement Européen entrée en vigeur le 25 mai 2011. Une directive n'est pas une loi en soi, mais une obligation pour les pays de l'Union Européenne de mettre en place des lois qui répondent aux exigences de la directive. La loi véritable peut différer d'un pays à l'autre
            </p>

            <p>
            Pour faire court, la directive de l'UE stipule qu'avant de pouvoir stocker ou récupérer des informations sur un ordinateur, téléphone mobile ou tout autre appareil, l'utilisateur doit donner son consentement de le faire en connaissance de cause. Beaucoup de sites web ont ajoutés des bannières depuis lors pour informer l'utilisateur sur l'utilisation des cookies.
            </p>


            <p>
            Une approche plus radicale des cookies sont les Cookies Zombies ou "Evercookies", qui sont des cookies recrées après leur suppression et intentionnellement difficiles à supprimer définitivement. Ils utilisent l'API Web storage, les Flash Local Shared Objects et d'autres techniques pour se recréer d'eux mêmes dès que l'absence du cookie est détéctée.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/CORS" target="blank">Cross-origin resource sharing (CORS)</a></h2>

            <p>
            Le «  Cross-origin resource sharing » (CORS) ou « partage des ressources entre origines multiples » (en français, moins usité) est un mécanisme qui consiste à ajouter des en-têtes HTTP afin de permettre à un agent utilisateur d'accéder à des ressources d'un serveur situé sur une autre origine que le site courant. Un agent utilisateur réalise une requête HTTP multi-origine (cross-origin) lorsqu'il demande une ressource provenant d'un domaine, d'un protocole ou d'un port différent de ceux utilisés pour la page courante.
            </p>

            <p>
            Prenons un exemple de requête multi-origine : une page HTML est servie depuis http://domaine-a.com contient un élément <img> src ciblant http://domaine-b.com/image.jpg. Aujourd'hui, de nombreuses pages web chargent leurs ressources (feuilles CSS, images, scripts) à partir de domaines séparés (par exemple des CDN (Content Delivery Network en anglais ou « Réseau de diffusion de contenu »).
            </p>

            <p>
            Le CORS permet de prendre en charge des requêtes multi-origines sécurisées et des transferts de données entre des navigateurs et des serveurs web. Les navigateurs récents utilisent le CORS dans une API contenante comme XMLHttpRequest ou Fetch pour aider à réduire les risques de requêtes HTTP multi-origines.
            </p>

            <p>
            Le standard CORS est utilisé afin de permettre les requêtes multi-origines pour :
            <ul>
                <li>L'utilisation des API XMLHttpRequest ou Fetch</li>
                <li>Les polices web </li>
                <li>Les textures WebGL</li>
                <li>Les frames (images ou vidéo) dessinées sur un canevas avec drawImage</li>
                <li>Les feuilles de style (pour les accès CSSOM)</li>
                <li>Les scripts (pour les exceptions non silencieuses (unmuted exceptions)).</li>
            </ul>
            </p>

            <p>
            Le standard CORS fonctionne grâce à l'ajout de nouveaux en-têtes HTTP qui permettent aux serveurs de décrire un ensemble d'origines autorisées pour lire l'information depuis un navigateur web. De plus, pour les méthodes de requêtes HTTP qui entraînent des effets de bord sur les données côté serveur (notamment pour les méthodes en dehors de GET ou pour les méthodes POST utilisées avec certains types MIME), la spécification indique que les navigateurs doivent effectuer une requête préliminaire (« preflight request ») et demander au serveur les méthodes prises en charges via une requête utilisant la méthode OPTIONS puis, après approbation du serveur, envoyer la vraie requête. Les serveurs peuvent également indiquer aux clients s'il est nécessaire de fournir des informations d'authentification (que ce soit des cookies ou des données d'authentification HTTP) avec les requêtes.
            </p>

            <p>
                Quelques scénarios <a href="https://developer.mozilla.org/fr/docs/Web/HTTP/CORS#exemples_de_sc%C3%A9narios_pour_le_contr%C3%B4le_dacc%C3%A8s" target="_blank"> ici</a>.
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/CORS#en-t%C3%AAtes_de_r%C3%A9ponse_http" target="blank">En-têtes de réponse HTTP</a></h3>

            <p>
            Dans cette section, on liste les en-têtes de réponse HTTP qui sont renvoyés par le serveur pour le contrôle d'accès, tels que définis par la spécification Cross-Origin Resource Sharing. 
            </p>

            <p>
            <strong>Access-Control-Allow-Origin</strong> : Le paramètre origin définit un URI qui peut accéder à la ressource. Le navigateur doit respecter cette contrainte. Pour les requêtes qui n'impliquent pas d'informations d'authentification, le serveur pourra indiquer un joker ("*") qui permet à n'importe quelle origine d'accéder à la ressource. <br/>
            Si on souhaite, par exemple, autoriser http://mozilla.org à accéder à la ressource, on pourra répondre avec :
            </p>

            <figure class="block_code">
    			    <pre><code>
Access-Control-Allow-Origin: http://mozilla.org
                    </code></pre>
			</figure>

            <p>
            <strong>Access-Control-Expose-Headers</strong> : Fournit une liste blanche des en-têtes auxquels les navigateurs peuvent accéder. Ainsi pour que X-Mon-En-tete-Specifique et   X-Un-Autre-En-tete soient utilisés par le navigateur.:
            </p>

            <figure class="block_code">
    			    <pre><code>
Access-Control-Expose-Headers: X-Mon-En-tete-Specifique, X-Un-Autre-En-tete
                    </code></pre>
			</figure>

            <p>
            <strong>Access-Control-Max-Age</strong> : Indique la durée pendant laquelle le résultat de la requête préliminaire peut être mis en cache (voir les exemples ci-avant pour des requêtes impliquant des requêtes préliminaires).

            <figure class="block_code">
    			    <pre><code>
Access-Control-Max-Age: <delta-en-secondes>
                    </code></pre>
			</figure>

            <p>
                D'autres en-tête <a href="https://developer.mozilla.org/fr/docs/Web/HTTP/CORS#access-control-allow-credentials" target="_blank">ici</a>
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/CORS#en-t%C3%AAtes_de_requ%C3%AAte_http" target="blank">En-têtes de requête HTTP</a></h3>

            <p>
            Dans cette section, nous allons décrire les en-têtes que les clients peuvent utiliser lors de l'envoi de requêtes HTTP afin d'exploiter les fonctionnalités du CORS. Ces en-têtes sont souvent automatiquement renseignés lors d'appels aux serveurs. Les développeurs qui utilisent XMLHttpRequest pour les requêtes multi-origines n'ont pas besoin de paramétrer ces en-têtes dans le code JavaScript.
            </p>

            <p>
                Voir lien du titre pour plus d'infos.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Headers" target="blank">En-têtes HTTP</a></h2>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Methods" target="blank">Méthodes de requête HTTP</a></h2>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status" target="blank">HTTP response status codes</a></h2>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/HTTP/Headers/Content-Security-Policy" target="blank">Politique de sécurité de contenu</a></h2>


















































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