<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Paramétrage, erreurs et sécurité</title>
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

    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4237816-preparez-votre-environnement-de-travail#/id/r-4443610" target="_blank">
    Apache, PHP, MySQL</a></h1>

    <p><strong>Apache</strong></p>

    <p>
        C'est ce qu'on appelle un serveur web. Il s'agit du plus important de tous les programmes, car c'est lui qui est chargé de délivrer les pages web aux visiteurs. Cependant, Apache ne gère que les sites web statiques (il ne peut traiter que des pages HTML). Il faut donc le compléter avec d'autres programmes.
    </p>

    <p><strong>PHP</strong></p>

    <p>
        C'est un plug-in pour Apache qui le rend capable de traiter des pages web dynamiques en PHP. En clair, en combinant Apache et PHP, notre ordinateur sera capable de lire des pages web en PHP.
    </p>

    <p><strong>MySQL</strong></p>

    <p>
        C'est un logiciel de gestion de bases de données. Il permet d'enregistrer des données de manière organisée (comme la liste des membres de votre site). Nous n'en aurons pas besoin immédiatement, mais autant l'installer de suite.
    </p>

    <p>
        Tous ces éléments sont libres et gratuits.
    </p>

    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4237816-preparez-votre-environnement-de-travail#/id/r-4443661" target="_blank">
    Configuration sous windows</a></h1>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://www.php.net/" target="_blank">
    Installation de php sur windows</a></h2>

    <p>
        Pour installer PHP sur windows manuellement :
        <ul>
            <li>Télécharger la dernière version de PHP <a href="https://www.php.net/" target="blank">ici</a> version x64 Zip Non Thread Safe fera l'affaire</li>
            <li>Copier l'archive dans un dossier qu'on peut appeler PHP placer par exemple dans C:/Programmes</li>
            <li>Il faut entrer le chemin de ce dossier (qui contient php.exe) dans les variables d'environnement (rechercher variables d'environnement dans windows). Variables d'environnement/Variables d'environnement/Variables utilisateur->PATH->Modifier->Ajouter une ligne avec le chemin du dossier PHP. Valider</li>
            <li>On peut vérifier que tout est ok en allant dans la console : <code class="line_code">php -v</code> renvoie la version de PHP</li>
            <li>Il faut maintenant configurer le fichier php.ini qui configure php et ses extensions (mySQL, PDO, ...)</li>
            <li>Dans le dossier php il existe deux fichier : php.ini-development et php.ini-production. Ce sont des exemples qu'on peut copier coller et appeler php.ini et configurer comme suit :
                <ul>
                    <li>Activer les extensions en décommentant le ligne <code class="line_code">extension_dir = "ext"</code> où ext est le dossier où sont les extensions</li>
                    <li>Décommentant les extensions souhaitées : <code class="line_code">extension=pdo_mysql</code> pour PDO et <code class="line_code">extension=mysqli</code> pour phpmyadmin</li> 
                    <li>Il faut redémarrer et faire un coup de phpinfo() pour vérifier si le module est bien installer</li>
                </ul>
            </li>
        </ul>
    </p>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://www.php.net/" target="_blank">
    Installation de MySQL sur windows</a></h2>

    <p>
		Rendez-vous sur <a href="https://dev.mysql.com/downloads/installer/" target="blank">https://dev.mysql.com/downloads/installer/ . Je vous conseille de télécharger le deuxième programme (la version “community”), qui dispose d’options supplémentaires par rapport au premier (la version “web”). </a>
	</p>
	
    <p>
		Pour lancer MySQL sur Windows, double-cliquez sur la console MySQL. Celle-ci doit avoir apparu dans vos programmes, suite à l’installation précédente.
	</p>
						
    <p>
		Pour créer le mot de passe “root”, utilisez la commande <code class="line_code">mysqladmin -u root password 'votresupermotdepassetrescomplique' </code>
	</p>
	
    <p>
		En informatique, et notamment dans le monde des bases de données, l’utilisateur dit “root” (ou racine) est un utilisateur qui a tous les droits (création, suppression, mise à jour). C’est celui qu’on utilise pour installer des logiciels sur notre machine. Mais attention à ne jamais l’utiliser en production ! En effet, il serait très dangereux qu’un utilisateur puisse l’utiliser, car il obtiendrait l’accès à toutes nos données. “Utiliser en production” désigne l’utilisation de votre base par votre application, depuis un serveur. Alors que “l’utilisation en local” signifie l’utilisation sur votre ordinateur, à des fins de développement uniquement.
	</p>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://www.phpmyadmin.net/downloads/" target="_blank">
    Installation de phpmyadmin sur windows</a></h2>

    <p>
        Pour installer phpMyAdmin sur windows manuellement :
        <ul>
            <li>Télécharger phpMyAdmin <a href="https://www.phpmyadmin.net/downloads/">ici</a></li>
            <li>L'extraire dans le dossier projets (htdocs -> htdocs/phpmyadmin/fichiersarchive</li>
            <li>Copier coller le fichier <code class="line_code">config.sample.inc.php</code> et le renommer <code class="line_code">config.inc.php</code> et l'utiliser pour configurer phpMyAdmin</li>
            <li>On entrera juste le mot de passe 32 caractères blowfish_secret</li>
            <li>On accède à phpMyAdmin avec l'index.php du dossier phpMyAdmin. Il faut que le serveur MySQL soit actif (ouvrir windows/MySQL/MySQL command line mdp:ad..mY</li>
            <li>identifiant de MySQL -> root - ad..mY</li>
        </ul>
    </p>

    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4237816-preparez-votre-environnement-de-travail#/id/r-4443692" target="_blank">
    Configuration sous Mac OS X</a></h1>

    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4237816-preparez-votre-environnement-de-travail#/id/r-4443743" target="_blank">
    Configuration sous Linux</a></h1>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://www.php.net/" target="_blank">
    Installation de php sur ubuntu</a></h2>

    <p>
        La commande <code class="line_code">apt install php</code> est utilisée pour installer php, cependant il se peut que les dernières versions ne soient pas disponibles. Il faut alors mettre à jour le package avec <code class="line_code">apt install software-properties-common</code> puis <code class="line_code">add-apt-repository ppa:ondrej/php</code> (repository de qqun (ondrej sur github) qui a créer un package avec les dernières versions de php (semble moyennement recommandé)). On peut ensuite faire <code class="line_code">apt install php8.1</code> .<br/> Bonne vidéo pour expliqueer ça <a href="https://www.youtube.com/watch?v=bHTv0FmvrTo" target="blank">ici</a>
    </p>

    <p>
        Sur linux il vaut mieux installer plusieurs versions de php côte à côte lorsqu'on upgrade.
    </p>

    <p>
        On active le serveur intégré avec <code class="line_code">php -S localhost:8000 ou 8080</code> ; Sur linux on utilisera plutôt le serveur apache2 qui se démarre avec <code class="line_code">systemctl start apache2</code> et le dossier root (localhost:80) se situe là : /var/www/html dans lequel on place nos projets et phpmyadmin.
    </p>

    <p>
        Le serveur apache2 est un serveur qui permet de lancer en local des pages web HTTP avec un module php associé. 
    </p>

    <p>
        Pour associer la bonne version de php il faut avoir la dernière version de php, ici php8.1. dé associer le module php7.4 avec <code class="line_code">sudo a2dismod php7.4</code> et on associe php8.1 à apache avec <code class="line_code">sudo a2enmod php8.1</code>. Un coup de <code class="line_code">phpinfo();</code> pour vérifier si tout est ok.
    </p>

    <p>
        On restart/start/stop le serveur avec <code class="line_code">sudo systemctl restart apache2</code>.
    </p>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://doc.ubuntu-fr.org/mysql" target="_blank">
    Installation de MySQL sur Ubuntu</a></h2>

    
    <p><code class="line_code">sudo apt install mysql-server</code></p>

    <p>
        L'installation se fait sans identifiant ni mot de passe : Depuis Bionic 18.04, Ubuntu lie par défaut le compte root de Ubuntu avec le plugin <code class="line_code">auth_socket</code> en installant MySQL. Auparavant il fallait spécifier un mot de passe lors de l'installation.
    </p>

    <p>On démarre le serveur avec <code class="line_code">sudo systemctl start mysql</code> ou <code class="line_code">sudo /etc/init.d/mysqld start</code></p>

    <p>On l'éteint avec <code class="line_code">sudo systemctl stop mysql</code> ou <code class="line_code">sudo /etc/init.d/mysqld stop</code></p>

    <p>
        On le redémarre avec <code class="line_code">sudo systemctl restart mysql</code>
    </p>

    <p>
        Site avec infos et aide à la configuration <a href="https://doc.ubuntu-fr.org/mysql" target="blank">ici</a>
    </p>

    <p>
        On lance la console mysql avec <code class="line_code">sudo mysql</code>
    </p>


    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://doc.ubuntu-fr.org/phpmyadmin" target="_blank">
    Installation de phpmyadmin sur ubuntu</a></h2>

    <p>
        phpmyadmin est juste un site, une interface graphique qui connecter à la db.
    </p>

    <p>
        On l'installe avec <code class="line_code">sudo apt install phpmyadmin</code>, voir <a href="https://doc.ubuntu-fr.org/phpmyadmin" target="blank">doc ici</a>
    </p>

    <p>
        J'ai jamais réussi à faire fonctionner phpmyadmin de cette manière ... 
    </p>

    <p>
        J'ai donc télécharger l'archive <code class="line_code">.tar.gz</code> sur le site de phpmyadmin. L'ai décompressée et placé dans un fichier <code class="line_code">phpmyadmin/</code>, lui même placé dans le dossier root du serveur apache2, à savoir <code class="line_code">/var/www/html</code> (<code class="line_code">/var/www/html/phpmyadmin/fichiersdécompressés</code>)
    </p>

    <p>
        On accède à phpmyadmin avec <code class="line_code">localhost/phpmyadmin</code> sur le navigateur
    </p>

    <div class="em">Astuce utile : la commande <code class="line_code">nautilus</code> permet d'ouvrir une fenêtre d'explorateur de fichier graphique en mode sudo.
    </div>

    <p>
        Avec MySQL depuis Bionic 18.04, et MariaDB depuis Xenial 16.04, l'authentification de l'utilisateur root de MySQL se fait au moyen du plugin <code class="line_code">auth_socket</code>, donc avec sudo.<br/>
        Cette méthode ne permet pas de se connecter avec phpMyAdmin, mais il est vivement déconseillé de modifier ce comportement. 
        </p>

        <p>
        Si vous avez besoin d'un accès global à vos bases de données depuis un même compte, la solution conseillée est donc de créer un nouvel utilisateur et de lui attribuer tous les privilèges depuis la commande de mysql <code class="line_code">sudo mysql</code> :
        </p>

        <figure class="block_code">
            <pre><code>
CREATE USER 'nom_utilisateur_choisi'@'localhost' IDENTIFIED BY 'mot_de_passe_solide';
GRANT ALL ON *.* TO 'nom_utilisateur_choisi'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
QUIT;                
            </code></pre>
        </figure>

        <p>
        user : adrien / adrMy
        </p>

        <p>
            infos <a href="https://doc.ubuntu-fr.org/phpmyadmin#acces_root" target="blank">ici</a>
        </p>














    
    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4237816-preparez-votre-environnement-de-travail#/id/r-7426821" target="_blank">
    Le serveur PHP intégré</a></h1>

    <p>
        Dans une console terminal taper au niveau du dossier où se trouve le fichier :
    </p>

    <figure class="block_code">
                <pre><code>
                php -S localhost:8080
                </code></pre>
            </figure>

            <p>
            Ensuite, en accédant à http://localhost:8080/index.php, le retour de l'exécution de ce script PHP sera disponible ! Pratique, non ?
            </p>

            <p>
                CTRL + c pour éteindre le serveur dans la console.
            </p>

            <p>
            Démarrage avec un dossier racine spécifique : utiliser le drapeau -t 'nom du dossier' : 
            </p>

            <figure class="block_code">
                <pre><code>
                $ php -S localhost:8000 -t ./public
                </code></pre>
            </figure>






    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238821-configurez-php-pour-visualiser-les-erreurs#/id/r-4238841" target="_blank">
    Configurer PHP pour afficher les erreurs</a></h1>

    <figure class="block_code">
                <pre><code>
phpinfo();
die(); // comme exit();
                </code></pre>
            </figure>
    
    <p>
        Affiche la page php info.
    </p>

    <p>
        Quelques bonnes infos au début de cette vidéo <a href="https://grafikart.fr/tutoriels/curl-php-1138#autoplay" target="blank">ici</a>, notemment pour configurer PHP différemment pour le dev et la prod. Pour que les erreurs soient affichées en dev mais pas en prod. 
    </p>

    <p>
        Par défaut, PHP n'affiche pas les erreurs pour éviter de donner trop d'indications aux utilisateurs pour des raisons de sécurité (un mantra à vous répéter : "moins l'utilisateur en sait sur mon application, mieux mon application se portera !").
    </p>

    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4240011-au-secours-mon-script-plante#/id/r-4240100" target="_blank">
    Les erreurs les plus courantes</a></h1>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4240011-au-secours-mon-script-plante#/id/r-4240078" target="_blank">
        Parse error</a></h2>

        <p>
            <ul>
                <li>Vous avez oublié le point-virgule à la fin de l'instruction. </li>
                <li>Vous avez oublié de fermer un guillemet (ou une apostrophe, ou une parenthèse). </li>
                <li>Vous vous êtes trompés dans la concaténation, vous avez peut-être oublié un point</li>
                <li>Il peut aussi s'agir d'une accolade mal fermée</li>
            </ul>
        </p>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4240011-au-secours-mon-script-plante#/id/r-4240089" target="_blank">
        Undefined function</a></h2>

        <p>
            Une autre erreur assez classique : la fonction inconnue. <<ul>
                <li>soit la fonction n'existe vraiment pas. Vous avez probablement fait une faute de frappe.</li>
                <li>soit la fonction existe vraiment, mais PHP ne la reconnaît pas. C'est parce que cette fonction se trouve dans une extension de PHP que vous n'avez pas activée. Par exemple, si vous essayez d'utiliser la fonction <code class="line_code">imagepng</code> alors que vous n'avez pas activé la bibliothèque nécessaire pour les images en PHP, on vous dira que la fonction n'existe pas. Activez la bibliothèque qui utilise la fonction et tout sera réglé.</li>
            </ul>
        </p>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4240011-au-secours-mon-script-plante#/id/r-4240099" target="_blank">
        Wrong parameter count</h2></a>

        <p>
            Si vous utilisez mal une fonction, vous aurez cette erreur. <br />
            Cela signifie que vous avez oublié des paramètres pour la fonction, ou même que vous en avez trop mis. S'il s'agit d'une fonction fournie par PHP, rendez-vous sur la documentation (<a href="https://www.php.net/manual/fr/index.php" target="_blank">ici</a>) et consultez le mode d'emploi de la fonction pour savoir combien de paramètres elle prend et quels sont ceux qui sont facultatifs.
        </p>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4240011-au-secours-mon-script-plante#/id/r-4240141" target="_blank">
        Headers already sent by…</a></h2>

        <p>
            Voilà une erreur classique quand on travaille avec les sessions ou avec les cookies. <br />
            Les headers sont des informations d'en-tête qui sont envoyées avant toute chose au navigateur du visiteur. Elles permettent de dire « Ce que tu vas recevoir est une page HTML », ou « Ce que tu vas recevoir est une image PNG », ou encore « Inscris un cookie ».
            Toutes ces choses-là doivent être effectuées avant que le moindre code HTML ne soit envoyé. En PHP, la fonction qui permet d'envoyer des informations de headers s'appelleheader(). Nous nous en servirons notamment dans le chapitre sur la création d'images en PHP pour indiquer que l'on envoie une image, et non pas une page HTML.<br />
            Ce que vous devez retenir, c'est que chacune de ces fonctions doit être utilisée au tout début de votre code PHP. Il ne faut RIEN mettre avant, sinon ça provoquera l'erreur « Headers already sent by… ».
        </p>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4240011-au-secours-mon-script-plante#/id/r-4240155" target="_blank">
        L'image contient des erreurs</a></h2>

        <p>
            C'est le navigateur qui vous donne ce message d'erreur et non pas PHP.<br />
            Ce message survient lorsque vous travaillez avec la bibliothèque GD. Si vous avez fait une erreur dans votre code (par exemple une banale « parse error »), cette erreur sera inscrite dans l'image. Du coup, l'image ne sera pas valide et le navigateur ne pourra pas l'afficher.<br />
        </p>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4240011-au-secours-mon-script-plante#/id/r-4240167" target="_blank">
        Maximum execution time exceeded</a></h2>

        <p>
            C'est le genre d'erreur qui arrive le plus souvent à cause d'une boucle infinie.
        </p>

    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912799-transmettez-des-donnees-avec-lurl#/id/r-912648" target="_blank">
    Envoyer des paramètre dans l'URL</a></h1>

    <p>
        Prenons l'adresse suivante : <code class="line_code"> http://www.monsite.com/bonjour.php</code>.<br />
        Ce que je vous propose d'apprendre à faire, c'est d'envoyer des informations à la <code class="line_code">pagebonjour.php</code>. Pour cela, on va ajouter des informations à la fin de l'URL, comme ceci :<br />

        <code class="line_code">http://www.monsite.com/bonjour.php?nom=Dupont&prenom=Jean</code> <br />

        Le point d'interrogation sépare le nom de la page PHP des paramètres. Ensuite, ces derniers s'enchaînent selon la forme <code class="line_code">nom=valeur</code> et sont séparés les uns des autres par le symbole <code class="line_code">&</code>. <br />
        On peut donc voir une URL de la forme :<br />
        <code class="line_code">page.php?param1=valeur1&param2=valeur2&param3=valeur3&param4=valeur4…</code><br />
        La seule limite est la longueur de l'URL. En général il n'est pas conseillé de dépasser les 256 caractères.
    </p>
    <p>
        Nous voulons faire un lien de <code class="line_code">index.</code> qui mène à <code class="line_code">bonjour.php</code> et qui lui transmet des informations dans l'URL.<br />
        Pour cela, ouvrez <code class="line_code">index.php</code> (puisque c'est lui qui contiendra le lien) et insérez-y par exemple le code suivant :
    </p>
    <figure class="block_code">
                <pre><code>
&lta href="bonjour.php?nom=Dupont&amp;amp;prenom=Jean"&gtDis-moi bonjour !&lt/a&gt
                </code></pre>
            </figure>

    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912799-transmettez-des-donnees-avec-lurl#/id/r-912682" target="_blank">
    Récupérer les paramètres en PHP</a></h1>

    <p>
        Intéressons-nous maintenant à la page qui réceptionne les paramètres. Dans notre exemple, il s'agit de la pagebonjour.php. Celle-ci va automatiquement créer un array au nom un peu spécial : <code class="line_code">$_GET</code>. Il s'agit d'un array associatif dont les clés correspondent aux noms des paramètres envoyés en URL.<br />
        Reprenons notre exemple pour mieux voir comment cela fonctionne. Nous avons fait un lien vers <code class="line_code">bonjour.php?nom=Dupont&prenom=Jean</code>, cela signifie que nous aurons accès aux variables suivantes :
        <table>
            <tr>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
            <tr>
                <td><code class="line_code">$_GET['nom']</code></td>
                <td>Dupont</td>
            </tr>
            <tr>
                <td><code class="line_code">$_GET['prenom']</code></td>
                <td>Jean</td>
            </tr>
        </table>
        On peut donc récupérer ces informations, les traiter, les afficher, bref faire ce que l'on veut avec. 
    </p>

    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912799-transmettez-des-donnees-avec-lurl#/id/r-912798" target=" _blank">
    Ne faites jamais confiance aux données reçues !</a></h1>

    <p>
        Nous allons en effet découvrir qu'il ne faut JAMAIS faire confiance aux variables qui transitent de page en page, comme <code class="line_code">$_GET</code>que nous étudions ici.
    </p>
    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912799-transmettez-des-donnees-avec-lurl#/id/r-2173840" target="_blank">
        Tous les visiteurs peuvent trafiquer les URL</a></h2>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912799-transmettez-des-donnees-avec-lurl#/id/r-2173857" target="_blank">
        Tester la présence d'un paramètre</a></h2>

        <p>
             Qu'est-ce qui empêche le visiteur de supprimer tous les paramètres de l'URL ?<br />
             La page va afficher quelque chose comme :
        </p>
        <figure class="block_code">
                <pre><code>
Bonjour 
Notice: Undefined index: prenom in C:\wamp\www\tests\bonjour.php on line 9

Notice: Undefined index: nom in C:\wamp\www\tests\bonjour.php on line 9
!
                </code></pre>
            </figure>
        <p>
            On a essayé d'afficher la valeur de <code class="line_code">$_GET['prenom']</code> et celle de <code class="line_code">$_GET['nom']</code>… Mais comme on vient de les supprimer de l'URL, ces variables n'ont pas été créées et donc elles n'existent pas ! PHP nous avertit qu'on essaie d'utiliser des variables qui n'existent pas, d'où les « <code class="line_code">Undefined index</code> ».<br />
            Pour résoudre ce problème, on peut faire appel à une fonction un peu spéciale : <code class="line_code">isset()</code>. Cette fonction teste si une variable existe. Nous allons nous en servir pour afficher un message spécifique si le nom ou le prénom sont absents.
        </p>
        <figure class="block_code">
                <pre><code>
&lt?php
    if (isset($_GET['prenom']) AND isset($_GET['nom']))
    {
        echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
    }

    else
    {
        echo 'Il faut renseigner un nom et un prénom !';
    }
                </code></pre>
            </figure>
        <p>
            Tôt ou tard vous tomberez sur un utilisateur malintentionné qui essaiera de trafiquer l'URL pour mettre n'importe quoi dans les paramètres. Il faut que votre site soit prêt à gérer le cas.<br />
            Dans notre exemple, si on ne gérait pas le cas, ça ne faisait rien de bien grave (ça affichait juste des messages d'erreur). Mais lorsque votre site web deviendra plus complexe, cela pourrait avoir des conséquences plus ennuyeuses.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912799-transmettez-des-donnees-avec-lurl#/id/r-2173919" target="_blank">
            Contrôler la valeur des paramètres</a></h2>

            <p>
                Vous devrez toujours faire très attention et prévoir tous les cas les plus tordus, comme nous venons de le faire :
                <ul>
                    <li>vérifier que tous les paramètres que vous attendiez sont bien là ;</li>
                    <li>vérifier qu'ils contiennent bien des valeurs correctes comprises dans des intervalles raisonnables.</li>
                </ul>
            </p>

            <figure class="block_code">
                <pre><code>
&lt?php
    if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))
    {
        $GET['repeter'] = (int) $_GET['repeter'];  // transtypage : convertie _GET['repeter'] en int

        if ($_GET['repeter'] &gt= 1 AND $_GET['repeter'] &lt=100)  //  On verifie que le nombre n'est pas incohérent
        {
            for ($i = 0; $i &gt $_GET['repeter']; $i++)
            {
                echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . '.'&ltbr /&gt ;
            }
        } 
    }

    else
    {
        echo 'Il faut renseigner un nom et un prénom et nombre de répétition';
    }
                </code></pre>
            </figure>

    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-transmettez-des-donnees-avec-les-formulaires#/id/r-912979" target="_blank">
    Pourquoi les formulaires ne sont pas sûrs</a></h1>

    <p>
        Toutes les informations qui proviennent de l'utilisateur, à savoir les données de <code class="line_code">$_GET</code> et de <code class="line_code">$_POST</code>, doivent être traitées avec la plus grande méfiance.<br/>
        Avec les formulaires, vous ne pouvez pas non plus supposer qu'on va vous envoyer tous les champs que vous attendiez. Un visiteur peut très bien s'amuser à supprimer un champ de texte, et dans ce cas votre pagecible.phpne recevra jamais le texte qu'elle attendait ! Il faudra impérativement qu'elle vérifie que toutes les données qu'elle attendait sont bien là avant d'effectuer la moindre opération.<br />
        vos visiteurs ne peuvent pas modifier vos pages web sur le serveur… Mais ils peuvent les reprendre et les modifier ailleurs.<br />
        Souvenez-vous du schéma de la figure suivante :
    </p>
    <figure>
        <img src="../images/21576011.png" atl="schéma formulaire" />
    </figure>
    <p>
        La page <code class="line_code">formulaire.php</code> contient le formulaire et <code class="line_code">cible.php</code> traite les données qu'on lui a envoyées. Autant le code PHP n'est jamais visible par vos visiteurs, autant le code HTML du formulaire, lui, peut être vu par tout le monde.<br />
        À partir de là, qu'est-ce qui empêche quelqu'un de créer une copie légèrement modifiée de votre formulaire et de la stocker sur son serveur, à l'image de la figure suivante ?
    </p>
    <figure>
        <img src="../images/216959.png" atl="schéma formulaire" />
    </figure>
    <p>
        Sur le schéma de la figure suivante, le « méchant » a pris le code HTML de votre formulaire, l'a modifié et l'a enregistré sur son serveur (ou même sur son ordinateur). L'attribut <code class="line_code">action</code> a été modifié pour indiquer l'adresse absolue (donc complète) de votre page cible : 
    </p>
    <figure class="block_code">
                <pre><code>
&ltform mathod="post" action="http://monsite.com/cible.php"&gt
                </code></pre>
    </figure>
    <p>
        Le méchant peut maintenant modifier votre formulaire, ajouter des champs, en supprimer, bref faire ce qu'il veut avec ! Votre page <code class="line_code">cible.php</code> n'y verra que du feu car il est impossible de savoir avec certitude de quel formulaire vient le visiteur.
    </p>

    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-transmettez-des-donnees-avec-les-formulaires#/id/r-2174115" target="_blank">
    La faille XSS</a></h1>

    <p>
        La faille XSS (pour cross-site scripting) est vieille comme le monde (euh, comme le Web) et on la trouve encore sur de nombreux sites web, même professionnels ! C'est une technique qui consiste à injecter du code HTML contenant du JavaScript dans vos pages pour le faire exécuter à vos visiteurs.<br />
        Reprenons la page qui affiche le prénom qu'on lui envoie. Elle contient notamment le code suivant :
    </p>

    <figure class="block_code">
                <pre><code>
&ltp&gtTu t'appelles &lt?php echo $_POST['prenom']; ?&gt ! &lt/p&gt
                </code></pre>
    </figure>
    <p>
        Si le visiteur décide d'écrire du code HTML à la place de son prénom, cela fonctionnera très bien ! Par exemple, imaginons qu'il écrive dans le champ « Prénom » le code :<code class="line_code">&ltstrong&gtBadaboum&lt/strong&gt</code>. Le code source HTML qui sera généré par PHP sera le suivant :
    </p>
    <figure class="block_code">
                <pre><code>
&ltp&gtTu t'appelles &ltstrong&gtBadaboum&lt/strong&gt ! &lt/p&gt
                </code></pre>
    </figure>
    <p>
        Outre le fait qu'il peut insérer n'importe quel code HTML (et rendre votre page invalide), ce qui n'est pas le plus grave, il peut aussi ouvrir des balises de type<code class="line_code">&ltscript&gt</code> pour faire exécuter du code JavaScript au visiteur qui visualisera la page !
    </p>
    <p>
        <em>Les choses deviennent vraiment critiques si le visiteur est assez malin pour récupérer vos cookies de cette façon-là. Les cookies stockent des informations sur votre session et parfois des informations plus confidentielles, comme votre pseudonyme et votre mot de passe sur le site ! Il est possible de forcer le visiteur qui lira le code JavaScript à envoyer tous les cookies qu'il a enregistrés pour votre site web, ce qui peut conduire au vol de son compte sur ce site.</em>
    </p>
    <p>
        Résoudre le problème est facile : il faut protéger le code HTML en l'échappant, c'est-à-dire en affichant les balises (ou en les retirant).
    </p>
    <p>
        Pour échapper le code HTML, il suffit d'utiliser la fonctionhtmlspecialcharsqui va transformer les chevrons des balises HTML<code class="line_code">&lt&gt</code>en <code class="line_code">&amplt;</code> et <code class="line_code">&ampgt;</code> respectivement. Cela provoquera l'affichage de la balise plutôt que son exécution.
    </p>
    <figure class="block_code">
                <pre><code>
&ltp&gtTu t'appelles &lt?php echo htmlspecialchars($_POST['prenom']); ?&gt ! &lt/p&gt
                </code></pre>
    </figure>
    <p>
        Le code HTML qui en résultera sera propre et protégé car les balises HTML insérées par le visiteur auront été échappées :
    </p>
    <figure class="block_code">
                <pre><code>
&ltp&gtTu t'appelles &amplt;strong&ampgt;Badaboum&amplt;/strong&ampgt; ! &lt/p&gt
                </code></pre>
    </figure>

    <p>
        Il faut penser à utiliser cette fonction sur tous les textes envoyés par l'utilisateur qui sont susceptibles d'être affichés sur une page web. Sur un forum par exemple, il faut penser à échapper les messages postés par vos membres, mais aussi leurs pseudos (ils peuvent s'amuser à y mettre du HTML !) ainsi que leurs signatures. Bref, tout ce qui est affiché et qui vient à la base d'un visiteur, vous devez penser à le protéger avec <code class="line_code">htmlspecialchars</code>.
    </p>
    <p>
        <em>Si vous préférez retirer les balises HTML que le visiteur a tenté d'envoyer plutôt que de les afficher, utilisez la fonction <code class="line_code">strip_tags</code>.</em>
    </p>

    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://grafikart.fr/tutoriels/curl-php-1138#autoplay" target="_blank">
    Utiliser une API avec cURL</a></h1>

    <p>
        Première étape : vérifier si cURL (une extension de php) est activée sur PHP avec phpinfo().
    </p>

    <p>
        Si ce n'est pas installer, aller dans le dossier PHP/php.ini :
        <ul>
            <li>Décommenter extension_dir = "C:\MAMP\bin\php\php8.0.1\ext\"</li>
            <li></li>
        </ul>
    </p>

    <p>
        à continuer ... 
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