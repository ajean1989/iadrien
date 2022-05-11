<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
		<script>hljs.initHighlightingOnLoad();</script>
        <title>Réseaux</title>
    </head>

    <body>

        <?php include("structure/header.php"); ?>

        <div id="columns">

        <div class="column_nav">

            <?php include("structure/nav.php"); ?>
		
		</div>




		<div class="column_front">

          
       	 	<section id="conteneur">

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/1561759-les-reseaux-presentation-generale#/id/r-1561741">Les Réseaux</a></h1>

                <p>
                    On pourrait définir le mot « réseau » en une phrase : Un réseau est un groupe d'entités en communication et consiste en l'échange d'informations. <br/>
                    Pour communiquer, les 2 entités doivent parler la même langue. Ou alors, l'intermédiaire doit parler la langue de chacun de ses interlocuteurs. En réseau informatique, c'est pareil, sauf qu'on ne parle pas de langue mais de protocole.<br/>
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/1561759-les-reseaux-presentation-generale#/id/r-2290102" target="blank">Le réseau Internet</a></h2>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/1561759-les-reseaux-presentation-generale#/id/r-2290099" target="blank">Le World Wide Web</a></h3>

                <p>
                    Le World Wide Web, ou Web pour faire plus court, est l'ensemble des sites Web (appelés par abus de langage "sites Internet") présents sur le réseau Internet. La toile, comme on dit parfois en français, c'est donc l'ensemble de tous les sites Web que nous pouvons visiter grace à notre navigateur Web (Firefox, Opera, ...).
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/1561759-les-reseaux-presentation-generale#/id/r-2290101" target="blank">Internet</a></h3>
                
                <p>
                    Internet, par contre, c'est l'ensemble des nœuds (connexions, câbles, etc.) entre les machines qui nous donnent accès au web. Internet est donc l'ensemble des réseaux qui nous permettent de partager des données sur la toile (entre autres, car il n'existe pas que le web sur Internet). Donc, quand une personne vous demande si vous avez Internet, elle veut savoir si votre ordinateur a accès à Internet. Par ailleurs c'est encore un abus de langage que de dire que l'on a Internet : ce réseau gigantesque n'appartenant à personne, on ne peut qu'avoir accès à Internet.
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607148-construire-un-reseau-le-materiel#/id/r-2290107"> Le matériel </a></h2>

                <p>
                <ul>
                    <li><a ref ="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607148-construire-un-reseau-le-materiel#/id/r-2290117">Câble Ethernet</a> : câble UTP-CAT5 (Unshielded Twisted Pair Category 5)" ou "câble UTP-CAT6 (Unshielded Twisted Pair Category 6)". La différence entre les deux catégories ? Tout simplement le débit : le CAT5 permet un débit de 100 mégabits par seconde alors que le CAT6 supporte le gigabit par seconde. Il existe deux types de câble Ethernet : les câbles Ethernet droits et les câbles Ethernet croisés. Ces derniers permettent de relier directement entre eux deux ordinateurs alors que les câbles droits servent à relier un ordinateur à un autre appareil comme un hub ou un switch que nous allons vous présenter dans ce chapitre. Ce type de câble est parfois appelé "câble RJ-45" : c'est un abus de langage, RJ-45 est le nom de l'interface du câble (en gros, son embout).</li>
                    <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607148-construire-un-reseau-le-materiel#/id/r-2290123">Le Bluetooth</a> :  Permet la diffusion d'ondes radio entre les équipements électroniques, afin de minimiser l'utilisation des câbles. En Bluetooth, un esclave ne peut communiquer qu'avec son ou ses maître(s). Il ne peut pas communiquer avec d'autres esclaves ou maîtres. Inversement, un maître ne peut communiquer qu'avec son ou ses esclave(s) (bien qu'un maître puisse être lui-même esclave d'un autre). D'ailleurs, un maître ne peut pas avoir plus de 7 esclaves. </li>
                    <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607148-construire-un-reseau-le-materiel#/id/r-2290142">Le Wi-Fi</a></li>
                    <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607148-construire-un-reseau-le-materiel#/id/r-3607140">La carte réseau</a> : La carte réseau est le composant le plus important, elle est indispensable. C'est par elle que transitent toutes les données à envoyer et à recevoir du réseau dans un ordinateur. Il n'y a pas grand chose à dire sur cet appareil. La seule chose que vous devez connaitre, c'est la notion d'adresse MAC : c'est l'adresse physique de la carte. Elle lui est attribuée à sa fabrication et ne peut pas changer (ce n'est pas tout à fait vrai, mais l'idée est là). L'adresse IP est relative au réseau : elle change tout bonnement suivant le réseau. Vous comprendrez mieux ce que sont ces adresses dans la sous-partie sur le commutateur (switch). La carte réseau est aussi appelée NIC en anglais, pour Network Interface Card.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607148-construire-un-reseau-le-materiel#/id/r-3607143">Concentrateur (hub)</a> : Ce qu'il fait est tout simple : il reçoit des données par un port, et envoie ce qu'il reçoit aux autres. Il a une interface de réception (un port) et une interface de diffusion (plusieurs autres ports par où les autres ordinateurs sont connectés). Ce qu'on lui reproche est le manque de confidentialité, et oui, le hub ne garde pas de secret : tout ce qu'un ordinateur lui dit, il l'envoie aux autres. </li>
                    <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607148-construire-un-reseau-le-materiel#/id/r-3607146">Le commutateur</a> : Un commutateur fonctionne à peu près comme un hub, sauf qu'il est plus discret et intelligent. Il n'envoie pas tout ce qu'il reçoit à tout le monde, mais il l'envoie uniquement au destinataire. Si l'ordinateur 1 envoie des données à l'ordinateur 2, seul ce dernier les recevra et pas les autres connectés. Afin de déterminer l'ordinateur à qui il faut renvoyer les données, le switch se base sur les adresses physiques (adresses MAC) des cartes réseau. Pour faire une analogie avec la vie réelle, une adresse MAC est un peu comme une adresse postale. C'est une suite de 6 nombres hexadécimaux, par exemple 00-16-D4-C7-6E-D3.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607148-construire-un-reseau-le-materiel#/id/r-2290173">Le routeur</a> : Un routeur ressemble à un switch sur le plan de l'utilisation : en effet, il permet de mettre plusieurs ordinateurs en réseau. Mais cela va plus loin : il permet de mettre en contact 2 réseaux fondamentalement différents. Dans une petite installation, avec un ou plusieurs ordinateurs connectés à une "box" (qui est en fait un routeur), il est la frontière entre le réseau local et Internet.<br/>Un routeur a plusieurs interfaces. Pour continuer dans notre exemple de frontière avec Internet, il possède une interface connectée à Internet (généralement, cela se traduit par un câble branché sur la prise téléphonique) et plusieurs autres interfaces sur lesquels se connectent des ordinateurs voulant accéder à Internet (ce qui se traduit généralement par des câbles Ethernet ou des connexions Wi-Fi).<br />
                    Notez aussi que le routeur n'est pas uniquement utilisé pour aller sur Internet, on l'utilise aussi dans un réseau strictement local.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607148-construire-un-reseau-le-materiel#/id/r-1561832">Répéteur</a> : Un répéteur (repeater en anglais) agit un peu comme un hub, mais ce dernier n'a que 2 interfaces. Son intérêt est de renvoyer ce qu'il reçoit par l'interface de réception sur l'interface d'émission, mais plus fort. On dit qu'il regénère et réémet le signal. En transmission sans fil (radio, téléphone) on parle aussi de relais.</li>
                </ul>
                </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a herf="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607161-les-topologies#/id/r-2290211">Les topologies</a></h1>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607161-les-topologies#/id/r-2290217">LAN : le réseau local</a></h2>
                    
                    <p>
                        Un LAN, Local Area Network (en français réseau local) est un réseau limité à un espace géographique comme un bâtiment. Par exemple, l'ensemble des ordinateurs dans une école forme un LAN. Ce type de réseau utilise généralement une configuration de type domaine comme nous l'avons vu précédemment
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607161-les-topologies#/id/r-2290220">WAN : le réseau étendu</a></h2>
                    
                    <p>
                        WAN signifie Wide Area Network, en français, on peut le traduire par "réseau étendu". Un WAN est en fait une association de plusieurs LAN. Supposons 3 LAN formés par des switchs : le "branchement" des 3 switchs sur un autre switch forme un WAN, car on associe plusieurs LAN entre eux. 
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607161-les-topologies#/id/r-2290223">Topologie physique</a></h2>
                    
                    <p>
                        Une topologie physique est en fait la structure physique de votre réseau. C'est donc la forme, l'apparence du réseau. Il existe plusieurs topologies physiques : le bus (<a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607161-les-topologies#/id/r-3607151">cette topologie est très peu utilisée</a>), l'étoile (<a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607161-les-topologies#/id/r-3607154">la plus utilisée</a>), le mesh (topologie maillée), <a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607161-les-topologies#/id/r-3607154">l'anneau</a>, hybride, etc. Cependant nous n'allons parler que des plus utilisées.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607161-les-topologies#/id/r-2290227">Topologie logique</a></h2> 
                    
                    <p>
                        Une topologie logique est la structure logique d'une topologie physique, c'est à dire que la topologie logique définit comment se passe la communication dans la topologie physique.
                    </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a ref="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/1562026-introduction-aux-protocoles#/id/r-2290273">Les protocoles</a></h1>

                    <p>
                        Un protocole est un ensemble de règles qui définissent comment se produit une communication dans un réseau. Un protocole est un ensemble de règles dictant comment doit s'effectuer la communication entre deux entités. Ceci dit, il faudrait que ledit protocole soit en mesure d'assurer des fonctions vitales au bon déroulement d'une communication. <a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/1562026-introduction-aux-protocoles#/id/r-2290327">Il existe plusieurs « fonctions vitales » (comprendre exigences) qu'un protocole de communication doit être capable de remplir. Parmi ces fonctions figurent en bonne et auguste posture</a> :
                    <ul>
                        <li>La gestion du format des données</li>
                        <li>La gestion du format d'adresses</li>
                        <li>Correspondance d'adresses</li>
                        <li>Routage </li>
                        <li>Détection d'erreurs de transmission</li>
                        <li>Accusé de réception</li>
                        <li>La gestion de perte d'informations</li>
                        <li>La direction du flux d'informations</li>
                        <li>Contrôle de séquences</li>
                        <li>Gestion de flux</li>
                    </ul>
                        Les fonctions citées ne peuvent pas être réalisées par un seul protocole. Il s'agit d'une suite protocolaire, une suite de protocoles. Il y a des protocoles qui s'occupent de la transmission, d'autres du routage, etc. Une suite de protocoles est un ensemble de protocoles fonctionnant en harmonie et cohésion pour le bon déroulement de la communication. Vous avez déjà entendu l'expression « protocole TCP/IP » ? En fait, ce n'est pas un protocole. TCP en est un, IP en est un autre.
                    </p>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607192-ils-en-tiennent-une-couche-osi-et-tcp-ip#/id/r-2290354">Le modèle OSI</a></h1>

                <p>
                    Le modèle OSI (Open Systems Interconnection : « interconnexion de systèmes ouverts ») est une façon standardisée de segmenter en plusieurs blocs le processus de communication entre deux entités. Chaque bloc résultant de cette segmentation est appelé couche. Une couche est un ensemble de services accomplissant un but précis. La beauté de cette segmentation, c'est que chaque couche du modèle OSI communique avec la couche au-dessus et au-dessous d'elle (on parle également de couches adjacentes). La couche au-dessous pourvoit des services que la couche en cours utilise, et la couche en cours pourvoit des services dont la couche au-dessus d'elle aura besoin pour assurer son rôle.<br />
                    Le modèle OSI a segmenté la communication en sept couches :
                <ul>
                    <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607222-de-lapplication-a-la-session#/id/r-2290599">Couche applicative</a> : Vous avez besoin d'accéder aux services réseaux. La couche applicative fait office d'interface pour vous donner accès à ces services, qui vous permettent notamment de transférer des fichiers, de rédiger un mail, d'établir une session à distance, de visualiser une page web… Plusieurs protocoles assurent ces services, dont FTP (pour le transfert des fichiers), Telnet (pour l'établissement des sessions à distance), SMTP (pour l'envoi d'un mail), HTTP, etc. Cette couche sert de point de contact ou d’interaction entre l’utilisateur que vous êtes et les services en réseaux. Par exemple, votre navigateur web est une application qui vous permet d’être en contact avec un service offert par le protocole HTTP (HyperText Transfer Protocol).</li>
                    <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607222-de-lapplication-a-la-session#/id/r-3607195">Couche présentation</a> : Elle s'occupe de la sémantique, de la syntaxe, du cryptage/décryptage, bref, de tout aspect « visuel » de l'information. Un des services de cette couche, entre autres : la conversion d'un fichier codé en EBCDIC (Extended Binary Coded Decimal Interchange Code) vers un fichier codé en ASCII (American Standard Code for Information Interchange).</li>
                    <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607222-de-lapplication-a-la-session#/id/r-3607200">Couche session</a> : La couche session du modèle OSI vous permet principalement d'ouvrir une session, de la gérer et de la clore. La demande d'ouverture d'une session peut échouer. Si la session est terminée, la « reconnexion » s'effectuera dans cette couche.<br/>
                    Les protocoles de la couche 5, tels que X.225, peuvent déterminer la direction de la communication. Il existe deux types de communication : Half Duplex (HDX) (système de communication permettant l’échange par tour) et Full Duplex (FDX) (A et B peuvent communiquer simultanément sans que cela ne pose problème). </li>
                    <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607312-exploration-de-la-couche-transport-1-2#/id/r-2292402">Couche transport</a> :Le nom de cette couche peut prêter à confusion : elle n'est pas responsable du transport des données proprement dit, mais elle y contribue. En fait, ce sont les quatre dernières couches (transport, réseau, liaison de données et physique) qui toutes ensemble réalisent le transport des données. Cependant, chaque couche se spécialise. La couche de transport divise les données en plusieurs segments (ou séquences) et les réunit dans la couche transport de l'hôte récepteur (nous y reviendrons). Cette couche permet de choisir, en fonction des contraintes de communication, la meilleure façon d'envoyer une information.  La couche de transport modifie également l'en-tête des données en y ajoutant plusieurs informations, parmi lesquelles les numéros de ports de la source et de la destination. Le protocole TCP (Transmission Control Protocol) est le plus utilisé dans la couche de transport.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607538-la-couche-3-le-reseau#/id/r-3607510">Couche réseau</a> : Maintenant que nous savons quel numéro de port utiliser, il faut aussi préciser l'adresse IP du récepteur. La couche réseau se charge du routage (ou relai) des données du point A au point B et de l'adressage. Ici aussi, l'en-tête subit une modification. Il comprend désormais l'en-tête ajouté par la couche de transport, l'adresse IP source et l'adresse IP du destinataire. Se fait également dans cette couche le choix du mode de transport (mode connecté ou non connecté, nous y reviendrons là encore). Le protocole le plus utilisé à ce niveau est bien sûr le protocole IP.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607899-quest-ce-qui-se-trame-chez-ethernet#/id/r-2293739">Couche liaison</a> : Il reste maintenant à établir une liaison « physique » entre les deux hôtes. Là où la couche réseau effectue une liaison logique, la couche de liaison effectue une liaison de données physique. En fait, elle transforme la couche physique en une liaison, en assurant dans certains cas la correction d'erreurs qui peuvent survenir dans la couche physique. Elle fragmente les données en plusieurs trames, qui sont envoyées une par une dans un réseau local. Quelques exemples de protocoles de cette couche : Ethernet, PPP (Point to Point Protocol), HDLC (High-Level Data Link Control), etc.</li>
                    <li>Finalement, la couche physique :La couche physique reçoit les trames de la couche de liaison de données et les « convertit » en une succession de bits qui sont ensuite mis sur le média pour l'envoi. Cette couche se charge donc de la transmission des signaux électriques ou optiques entre les hôtes en communication. On y trouve des services tels que la détection de collisions, le multiplexing, la modulation, le circuit switching, etc.</li>
                </ul>
                    Quand un hôte A envoie un message à un hôte B, le processus d'envoi va de la couche 7 (application) à la couche 1 (physique). En revanche, quand il s'agit de recevoir, le message emprunte le chemin inverse : il part de la couche 1 (physique) pour arriver à la couche 7 (application).
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href ="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607192-ils-en-tiennent-une-couche-osi-et-tcp-ip#/id/r-2290488">OSI VS TCP/IP</a></h2>

                <p>
                    <img src="../images/282390.png" alt="schéma TCP/IP OSI"/>
                    Les noms des couches des modèles TCP/IP ou OSI sont abstraits, voilà pourquoi nous vous avons parlé de couches d’abstraction. Leurs noms ne sont pas toujours synonymes de leurs fonctions et peuvent par moments être vagues. Par exemple, la couche application du modèle OSI ne veut pas dire grand-chose. Quand vous lisez application, est-ce que cela vous donne une idée de la fonction de cette couche ? Ce nom n’est pas si explicite. La couche transport des deux modèles est certainement la plus abstraite dans sa dénomination. Quand on lit transport, on a tendance à croire que cette couche transporte vraiment les données jusqu’à son destinataire — alors que la transmission s’effectue à la couche 1 (physique) du modèle OSI et à la couche interface réseau du modèle TCP/IP. Par contre, la couche réseau est la moins abstraite, l’on comprend tout de suite qu’il s’agit de l’exercice des fonctions intimement liées au réseau.<br/>
                    Il est clair que TCP/IP a plus de succès qu'OSI. Mais ce succès est simplement dû au fait que les protocoles de ce modèle sont les plus utilisés. Sans ses protocoles, le modèle TCP/IP serait pratiquement inexistant. Par contre, le modèle OSI, avec ou sans protocoles, est la parfaite norme dictant la procédure de communication.
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607192-ils-en-tiennent-une-couche-osi-et-tcp-ip#/id/r-3607191">L'encapsulation</a></h2>
                <p>
                    L’encapsulation consiste à encapsuler. En d'autres termes, elle consiste à envelopper les données à chaque couche du modèle OSI.Voici un schéma illustrant l'encapsulation des SDU dans le modèle OSI :
                    <img src="../images/284769.png" alt="schéma encapsulation OSI"/>
                    Chaque couche ajoute à la donnée initiale un en-tête. De la sorte, tous les en-têtes sont réunis dans la couche de liaison. Lorsque ces informations seront converties en une suite de bits, le récepteur devrait recevoir des données erronées puisque la donnée initiale n’avait pas tous ces en-têtes, n’est-ce pas ? En principe. Mais le modèle OSI (ou le modèle TCP/IP) est assez intelligent. En effet, dans la procédure de réception, chaque en-tête est enlevé lorsque le message « grimpe » les couches, tel qu’illustré par le schéma ci-dessous. Cette « suppression » d’en-tête, c’est la décapsulation !
                </p>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607222-de-lapplication-a-la-session#/id/r-3607207">BitTorrent : Protocole de partage</a></h1>

                <p>
                    BitTorrent minimise la congestion du réseau en coupant le fichier en plusieurs portions. Tous les clients en reçoivent une, puis ils font office de serveurs les uns pour les autres jusqu'à ce que chaque client ait reçu toutes les portions du fichier. Certes, les portions seront reçues dans le désordre, mais BitTorrent est assez intelligent pour les réagencer correctement. C'est ce qu'on appelle le contrôle de séquence.
                </p>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607222-de-lapplication-a-la-session#/id/r-3607221">SMTP : le protocole de transmission de mail</a></h1>

                <p>
                    SMTP (Simple Mail Transfer Protocol : « protocole simple de transfert de courrier ») a été créé dans les années 1970, aux débuts d'Internet.  Il sert principalement à envoyer des mails. Comme son nom l'indique, il s'agit d'un protocole de transmission et non de réception. Cependant, les serveurs de messagerie utilisent SMTP pour faire les deux, c'est-à-dire la transmission et la réception, cette dernière n'étant en fait qu'une transmission. Ainsi, les serveurs de messagerie utilisent SMTP pour la transmission et la réception, tandis que les clients de messagerie utilisent SMTP pour l'envoi et un autre protocole (POP ou IMAP) pour la réception. 
                </p>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607222-de-lapplication-a-la-session#/id/r-1562478">IMAP vs POP : les protocoles de retrait de mail</a></h1>

                <p>
                    Les protocoles POP et IMAP dans une même sous-partie, car ils servent à faire la même chose et que chacun présente des avantages que l'autre n'a pas. 
                    <ul>
                        <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607222-de-lapplication-a-la-session#/id/r-2290791">POP</a> (Post Office Protocole : « protocole de bureau de poste ») a l'avantage d'être simple et efficace et surtout, il est supporté par tous les clients de messagerie. POP n'est qu'un protocole de retrait : il permet d'aller chercher un mail se situant sur un serveur de messagerie, mais pas d'en envoyer. L'envoi est assuré par le protocole SMTP. Il existe trois versions de ce protocole : POP1, POP2 et POP3. Le protocole POP permet bien sûr de récupérer son courrier, mais aussi d'en laisser une copie sur le serveur. Cela est particulièrement utile si l'on ne peut plus accéder pour une raison quelconque (panne…) aux e-mails déjà téléchargés : on peut toujours les télécharger de nouveau. Néanmoins, il n'a pas vraiment été conçu pour cela, contrairement à IMAP.</li> 
                        <li><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607222-de-lapplication-a-la-session#/id/r-2290795">IMAP (Internet Message Access Protocol)</a> est un protocole de lecture d'e-mails. Contrairement à POP, il n'a pas été conçu pour recevoir des messages mais pour les consulter directement depuis un serveur. Cette consultation s'apparente à du clouding, c'est-à-dire l'accès par Internet à des données qui ne se trouvent pas sur notre disque dur. IMAP est assez avancé puisqu'il permet de gérer ses messages directement sur un serveur distant pour organiser nos messages en dossiers, par exemple. Il supporte également TLS. Dans le cas d'IMAP, le clouding est à la fois un avantage et un inconvénient : on peut accéder à ses messages depuis n'importe quel ordinateur, à condition d'être connecté à son compte de messagerie. Quelques clients permettent néanmoins de télécharger les messages pour pallier ce problème. </li>
                    </ul>
                </p>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607236-des-adresses-en-folie#/id/r-3607227">IP VS MAC</a></h1>
                
                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607236-des-adresses-en-folie#/id/r-2290805">Adresse IP</a></h2>
                
                <p>
                    Une adresse IP n'est "rien d'autre" que l'endroit où habite un ordinateur. Mais attention : cette adresse est relative au réseau. Une machine n'aura pas forcément la même adresse IP sur un réseau X et un réseau Y. Nous n'entrerons pas dans les détails pour le moment, l'adressage n'étant pas vraiment une base.<br/>
                    Les adresses IP sont le seul moyen d'identification des machines sur Internet. Mais il existe 2 versions du protocole Internet (la "manière" d'accéder à Internet en quelque sorte) : IPv4 et IPv6. Et chaque version utilise sa propre structure d'adresse IP.<br/>
                    Une "adresse IPv4" est constituée de 4 nombres correspondant à 4 octets compris entre 0 et 255, séparés par des points. Exemple : 88.45.124.201. De nos jours, ce sont les plus connues. Les "adresses IPv6" sont encore plus complexes : elles sont représentées par une suite de 8 groupes de 2 octets représentés en hexadécimal : 1fff:0000:0a88:85a3:0000:0000:ac1f:8001.
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607236-des-adresses-en-folie#/id/r-3607226">Adresse MAC</a></h2>
                <p>
                    Une adresse MAC est un identifiant unique attribué à chaque carte réseau. C'est une adresse physique. Concrètement, c'est un numéro d'identification composé de 12 chiffres hexadécimaux. Une adresse MAC ressemble donc à cela : 01:23:45:67:89:AB. <br />
                    Mais pourquoi on n'utilise pas juste les adresses MAC ? Parce que dans un grand réseau, comme un WAN, ou même Internet, il n'y a pas d'élément central qui connait l'emplacement du destinataire et qui peut renvoyer les données en conséquence. Par contre, le système d'adresses IP permet, grâce à un processus appelé routage, d'assurer que les données arrivent bien au destinataire. Le routage sera expliqué dès la prochaine partie.
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607236-des-adresses-en-folie#/id/r-2290849">Les sous-réseaux et leurs masques</a></h2>

                <p>
                    Prenons l'adresse IP 10.54.29.84 (au hasard, toujours). On ne peut pas, à première vue, reconnaitre le numéro (de l'hôte) de la rue (le réseau, ou sous-réseau) : il n'y a que des chiffres ! C'est pour ça qu'on a recours à un masque : c'est une suite de nombres qui dit que telle partie correspond au nom de la rue (au sous-réseau) et telle partie identifie l'hôte (le numéro de la maison). On voit dans les chapitres suivants comment se représente un masque. <br/>
                    Pour que 2 hôtes (machines connectées) communiquent :
                    <ul>
                        <li>Ils doivent utiliser le même protocole ;</li>
                        <li>Ils doivent appartenir au même sous-réseau ;</li>
                        <li>Chaque hôte doit connaître l'adresse IP de l'autre.</li>
                    </ul>
                    Mais alors, comment faire pour que deux machines, appartenant à des sous-réseaux différents, communiquent ?<br/>
                    Ce chapitre sur les masques de sous-réseaux n'est valable que pour les adresses IPv4.<br/>
                    Un masque de sous-réseau, ça ressemble un peu à une adresse IP dans la forme, mais chaque octet ne peut prendre que certaines valeurs. Des exemples : 255.255.0.0, 255.255.255.0, ... On les associe à des adresses IP et cela définit une plage d'adresses qui vont constituer un réseau. C'est donc le masque qui va définir avec qui on peut communiquer.<br/>
                    Prenons une adresse IP quelconque : 42.51.82.3. Associons à cette adresse un masque, par exemple 255.0.0.0. Ce masque va définir quelle partie de l'adresse IP identifie le réseau (cette partie est appellée network ID) et quelle partie identifie l'hôte sur le réseau (host ID)<br/>
                    Regardez bien cet exemple d'adresse IP et son masque de sous-réseau associé :
                    <ul>
                        <li>129.51.3.5</li>
                        <li>255.255.0.0</li>
                    </ul>
                    Les octets du masque ayant pour valeur 255 sont les mêmes que les octets de l'adresse IP définissant le network ID. De même, les octets du masque valant 0 correspondent aux octets de l'adresse IP définissant l'host ID. L'adresse IP ci-dessus est donc celle d'un hôte 3.5 dans le réseau 129.51. Cela est d'une importance capitale, et vous aurez l'occasion de vous en rendre compte quand nous verrons la personnalisation des masques. Avant d'introduire cette notion, voyons d'abord...<br/>
                    Voici quelques règles à connaître par cœur avant même d'aller plus loin :
                    <ul>
                        <li>On ne peut pas mélanger les zéros et les autres valeurs. En somme, tous les 255 doivent être à gauche et les zéros à droite. Parce que dans une adresse IP, c'est la partie gauche qui correspond à l'identité du réseau, et la partie droite qui correspond à l'identité de l'hôte. </li>
                        <li>Un masque de sous-réseau ne peut pas avoir un octet qui vaut plus de 255, pour la bonne et simple raison qu'un octet ne peut prendre que 256 valeurs différentes, ici de 0 à 255.</li>
                    </ul>
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/1562627-les-masques-de-sous-reseaux-a-la-decouverte-du-subnetting#/id/r-1562596">Subnetting</a></h3>

                Le subnetting est une technique qui consiste à diviser un réseau plus large en plusieurs sous-réseaux. Décomposons ce mot :<br/>
                sub - net - ting<br/>
                sous - réseau - (suffixe d'action)<br/>
                Vous l'aurez peut-être deviné, le subnetting est l'action de créer des sous-réseaux. Et pas n'importe comment : en personnalisant les masques.<br/>

                <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/1562627-les-masques-de-sous-reseaux-a-la-decouverte-du-subnetting#/id/r-2290889">Pourquoi faire ?</a></h4>








                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607236-des-adresses-en-folie#/id/r-3607230">La passerelle</a></h2>

                Celle-ci permet donc la communication entre deux sous-réseaux. Une passerelle est un autre ordinateur qui a plusieurs cartes réseau (en général, c'est un routeur). Cet ordinateur peut communiquer avec plusieurs sous-réseaux. On parle aussi de passerelle par défaut, de passerelle applicative ou de passerelle logique. Tous ces termes sont synonymes.<br/>
                Un hôte communique avec la passerelle par défaut selon l'architecture client-serveur.

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607236-des-adresses-en-folie#/id/r-3607235">Le client et le serveur</a></h2>

                Le mode de communication entre un client et un serveur est appellé architecture client-serveur.
                
                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1561696-les-reseaux-de-zero/3607330-exploration-de-la-couche-transport-2-2#/id/r-2292717">Les ports</a></h2>

                <p>
                    Un numéro de port sert à identifier quelque chose. Mais ce quelque chose est une application. Le numéro de port est donc le numéro qui nous permet de faire la distinction entre les applications. Nous savons déjà que la couche transport établit une communication bout-à-bout entre les processus d'applications. Alors comment faire pour distinguer les nombreux processus d'une application qui sont en fait des services exécutés sur une machine ? C'est le numéro de port qui permettra de les différencier.<br/>
                    L'organisme IANA (Internet Assigned Numbers Authority) (en) classe les numéros de port en trois catégories principales, comme l'illustre le tableau ci-dessous : 
                <ul>
                    <li>Ports 0 à 1023 : Ports bien connus / Ports réservés pour des services bien connus (web, envoi de mail, etc.).</li>
                    <li>Ports 1024 à 49151 : Ports réservés / Ports réservés pour être utilisés par des applications propriétaires.</li>
                    <li>Ports 49152 à 65635 : Ports dtynnamiques / Ports « libres » que vous pouvez utiliser pour vos applications. Ils ne sont ni pour des services bien connus, ni réservés par une entreprise quelconque.</li>
                </ul>
                </p>















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