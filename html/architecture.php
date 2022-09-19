<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Architecture : DDD - UML - BDD</title>
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


            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7419681-identifiez-les-mauvaises-pratiques-de-conception-avec-stupid#/id/r-7458662" target="_blank">
            Les design pattern</a></h1>

            <p>
            Les design patterns sont des solutions typiques à des problèmes communs en développement logiciel : ils ne sont pas une implémentation concrète d’une solution à un problème, mais plutôt une stratégie à appliquer pour le résoudre de façon élégante et maintenable.
            </p>

            <p>
            Dans cette partie, nous allons aborder une liste de design patterns accessibles, répondant à trois grands types de problèmes :
            <ul>
                <li>la création d’objets ;</li>
                <li>la gestion des relations entre objets ;</li>
                <li>et enfin, la gestion des responsabilités et comportements d’un objet.</li>
            </ul>
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7420004-utilisez-les-design-patterns-creationnels#/id/r-7458672" target="_blank">
            Les design patterns créationnels</a></h2>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7420004-utilisez-les-design-patterns-creationnels#/id/r-7419845" target="_blank">
            Le design pattern Factory Method</a></h3>

            <p>
            Le design pattern Factory Method consiste à remplacer les appels à la construction d’objets à l’aide de l’opérateur <code class="line_code">new</code> par l’appel d’une méthode spécifique d'une classe. La classe chargée de cette responsabilité est appelée Factory, et les objets créés sont souvent appelés <code class="line_code">products</code>.
            </p>

            <p>
            Dans tous les cas, les objets sont créés à l’aide de l’opérateur  new, on a juste délégué la création de l’objet à une classe.
            </p>

            <img src="../images/1632387579883_p3c2-1 (1).png" alt="design pattern Factory Method"/>

            <p>
                ...
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5647281-appliquez-le-principe-du-domain-driven-design-a-votre-application/6827306-tirez-un-maximum-de-ce-cours#/id/video_Player_1" target="blank">Le DDD : Domain-Driven Design</a></h1>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5647281-appliquez-le-principe-du-domain-driven-design-a-votre-application/6827331-resolvez-des-problemes-de-conception-avec-les-modeles-de-domaines#/id/r-6848863" target="blank">Découvrez le modèle de domaine</a></h2>

            <p>
            Un modèle de domaine est une représentation conceptuelle des éléments clés qui doivent être compris par tous, pour créer la solution souhaitée par le client. Vous pouvez le considérer comme l'idée qui constitue le fondement même d'un programme, mais qui serait compréhensible à la fois par les parties prenantes et par les développeurs. 
            </p>

            <p>
            Dans le cas de modèles de domaine complexes, vous regrouperez les différents éléments dans des domaines distincts. On les appelle contextes délimités (boundedcontext, en anglais). 
            </p>

            <p>
            Il y a plusieurs façons de représenter un modèle de domaine. Cela peut prendre la forme d'une liste à puces sur des pages wiki, ou être plus formel. L'un des moyens les plus courants consiste à utiliser des diagrammes. 
            </p>

            <p>
            Ici, nous sommes bien dans une logique descendante, contrairement à un modèle du domaine du point de vue du programme, ou approche ascendante, qui s'intéresse à comment créer. À ce stade, nous ne nous préoccupons ni de bases de données, ni d'objets, de déploiements cloud ou de toute autre réalisation technique.
            </p>

            <p>
            L'objectif de l'utilisation du Domain-Driven Design est de construire un modèle qui fonctionne du début de la collaboration (client) jusqu'au développement (web). Et pour y parvenir, vous devez discuter avec vos parties prenantes.
            </p>

            <p>
            Le Domain-Driven Design se concentre sur deux questions clés :
            <ul>
                <li>Pour qui suis-je en train de concevoir cette application ?</li>
                <li>Que veulent-ils réaliser ? </li>
            </ul>
            </p>

            <p>
            Dans un modèle de domaine, le juste équilibre consiste à créer un modèle qui donne les informations nécessaires sans s'encombrer de détails inutiles.
            </p>

            <p>
            Identifiez les acteurs : les utilisateurs de l'application. 
            </p>

            <p>
            Identifiez les cas d'utilisation ou use cases : ce que les acteurs essaient de faire
            </p>

            <p>
            Identifiez les entités : définissez les concepts de votre programme. Pour cela, il faut analyser les interactions des récits utilisateur, et rechercher les idées pérennes, c'est-à-dire celles qui vont durer. Ces idées constituent les entités de votre modèle de domaine.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5647281-appliquez-le-principe-du-domain-driven-design-a-votre-application/6831496-formalisez-votre-modele-de-domaine-avec-un-diagramme-de-cas-dutilisation#/id/video_Player_1" target="blank">l'UML</a></h2>

            <p>
            UML signifie Unified Modeling Language (langage unifié de modélisation). C'est un standard de notation que vous pouvez utiliser pour modéliser ou représenter de manière visuelle une application informatique. 
            </p>

            <p>
            Au début, il existait de nombreuses manières de représenter un programme. Chacun avait sa façon de procéder. Certains utilisaient des cercles, d'autres des rectangles, ou des nuages en pointillés... Aucune cohérence. 🙄 Finalement, un consensus a été trouvé sur les images qui devraient être utilisées pour modéliser telle ou telle idée (comme le personnage en bâtons pour un acteur). Vous comprenez donc maintenant d'où vient le terme "unifié" dans l'appellation langage unifié de modélisation.
            </p>

            <p>
            La version standardisée actuelle est composée de 13 types de diagrammes différents. Normalement, vous ne les utiliserez pas tous pour modéliser votre application. Dans ce cours, nous nous concentrerons seulement sur les deux types les plus courants.
            </p>

            <p>
            Avec les informations que vous avez recueillies jusqu'ici, vous êtes en mesure de construire un type de diagramme UML : le diagramme de cas d'utilisation. C'est un moyen de capturer, en image, ce que votre programme peut faire pour plusieurs utilisateurs. Il permet de représenter les informations que vous avez récoltées jusqu'à maintenant sur les utilisateurs de l'application, et ce qu'ils veulent qu'elle exécute pour eux. 
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5647281-appliquez-le-principe-du-domain-driven-design-a-votre-application/6831496-formalisez-votre-modele-de-domaine-avec-un-diagramme-de-cas-dutilisation#/id/r-6831583" target="blank">Le diagramme de cas d'utilisation</a></h3>

            <p>
            Pour ce faire, nous allons suivre les étapes suivantes :
                <ol>
                    <li>Identifier les acteurs.</li>
                    <li>Définir les cas d'utilisation (use cases).</li>
                    <li>Ajouter les relations.</li>
                </ol>
            </p>

            <p>
            Un acteur est représenté dans un diagramme sous la forme d'un personnage en bâtons, accompagné d'une description rapide du type d'utilisateur (son rôle).
            </p>

            <img src="../images/15868658554305_VISUELS_AMANDINE-3.jpg">

            <p>
            Représentez un cas d'utilisation sous la forme d'un ovale, en notant l'objectif de l'utilisateur à l'intérieur. Attention à ne pas tourner les objectifs du point de vue du programme. 
            </p>

            <img src="../images/1586866152725_VISUELS_AMANDINE-4.jpg">

            <p>
            Troisème étape : L'objectif ici est de montrer quels acteurs sont intéressés par quel(s) objectif(s). Pour cela, nous allons utiliser un trait pour les lier, appelé relation.
            </p>

            <img src="../images/15868662827361_VISUELS_AMANDINE-5.jpg">

            <p>
            Parfois, vous pouvez remarquer que certaines étapes se répètent dans plusieurs cas. Par exemple, plusieurs cas d'utilisation peuvent indiquer « envoyer ensuite un e-mail à quelqu'un ». Il peut être utile de distinguer cette activité partagée de manière visuelle : il s'agit de dépendances et elles sont indiquées avec des flèches. 
            </p>

            <p>
            La flèche sur le diagramme indique une dépendance. Comme c'est une flèche, il est facile de la confondre avec un flux de données ou d'exécution. Mais souvenez-vous : ce n'est pas la même chose. Cela signifie simplement que « Infliger des amendes pour retard » dépend de « Envoyer un e-mail » pour l'exécution de la tâche. 
            </p>
            

            <img src="../images/15840325465166_VISUELS_AMANDINE-FIX_1.png">

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5647281-appliquez-le-principe-du-domain-driven-design-a-votre-application/6831641-definissez-un-glossaire-commun-a-partir-dun-diagramme-de-classes#/id/video_Player_1" target="blank">Les classes</a></h3>

            <p>
            Si vous décidez finalement d'utiliser un code orienté objet pour votre système, vous devez déterminer les classes à partir desquelles créer les objets. Mais où chercher les classes dont vous avez besoin ? 🤷‍♀️
            </p>

            <p>
            Dans votre modèle de domaine ! 
            </p>

            <p>
            Travaillez à partir des descriptions de vos cas d’utilisation (use cases) pour préparer vos classes avec un diagramme de classes. Nous verrons ensemble qu'un diagramme de classes est constitué d'un ensemble de classes et de leurs relations.
            </p>

            <strong>Étape 1 : identifiez vos noms</strong>

            <p>
            Vous vous souvenez du cas d'utilisation « Rechercher un livre ». Listons ensemble les résultats du programme en détail. Ici, comme ce sont les noms qui nous intéressent (comme vous l'aviez peut-être deviné avec le nom du chapitre 👋), nous pouvons les mettre en gras :
            <ul>
                <li>l'<strong>utilisateur</strong> fait une requête pour chercher un <strong>livre</strong> ;</li>
                <li>le <strong>programme</strong> affiche la <strong>page de recherche</strong> ;</li>
                <li>l'utilisateur saisit le nom de l'auteur ;</li>
                <li>le système vérifie que le <strong>nom de l'auteur</strong> existe ;</li>
                <li>l'utilisateur saisit le <strong>titre</strong> du <strong>livre</strong> ;</li>
                <li>l'utilisateur lance la requête ;</li>
                <li>le système exécute la recherche ;</li>
                <li>le programme affiche les <strong>résultats</strong> :
                    <ul>
                        <li>une série de livres qui correspondent,</li>
                        <li>une <strong>image</strong> de la couverture de chaque livre,</li>
                        <li>une courte <strong>biographie</strong> de l'auteur,</li>
                        <li>une <strong>image</strong> de l'auteur.</li>
                    </ul>
                </li>
            </ul>
            Nous pouvons en repérer deux sortes : complexe ou simple. Si le nom est complexe (c'est-à-dire qu'il est impossible à décrire en un mot ou deux), il s'agit probablement d'une classe. Si c'est un nom simple, il s'agira probablement d'un attribut de classe.
            </p>

            <p>
            La classe à laquelle on pense en premier ici est celle du livre, avec plusieurs éléments qui lui sont associés (auteur, titre). Il ne peut pas être représenté sous la forme d'un entier ou d'une chaîne de caractères. En revanche, le titre est suffisamment simple pour être représenté par une chaîne de caractères. Félicitations, ce sera donc un attribut ! 
            </p>

            <p>
            Très souvent, vous aurez l'impression qu'un élément est une classe (ou un attribut) ; mais, au moment de l'implémentation, vous vous rendrez compte que c'est plus simple ou plus compliqué que vous ne le pensiez ! Dans ce cas-là, il faudra simplement adapter votre diagramme. D’ailleurs, nous verrons comment faire dans les chapitres à venir.
            </p>

            <p>
            Et l'utilisateur dans tout ça ? Ou même le programme lui-même ? S'agit-il également de classes ?
            </p>

            <p>
            Commençons par le plus facile : le programme. Dans la mesure où il s'agit de ce que vous créez, il ne s'agira pas d'une seule classe. Il sera constitué de l'ensemble des classes que vous allez identifier et de toutes leurs relations entre elles.
            </p>

            <p>
            Maintenant, l'utilisateur. Comme nous l'avons vu, vous pouvez avoir plusieurs types d'utilisateurs (bibliothécaires, usagers) qui ont accès à différentes parties du programme. Vous voulez que les classes représentent leurs différents pouvoirs (non non, nous ne sommes pas dans un film de super-héros) ; cependant, en général, vous n'aurez pas de classe appelée Utilisateur.
            </p>

            <strong>Étape 2 : représentez vos noms en tant que classes ou attributs</strong>

            <p>
            Une fois que vous avez défini vos noms, nous allons pouvoir commencer à concevoir nos classes à proprement parler. 🤩 Une classe est représentée par un rectangle, en indiquant le nom de la classe en haut et l'attribut en dessous.
            </p>

            <p>
            Commençons par la classe Livre. Puis, nous ne savons pas quel utilisateur va effectuer cette recherche. Or, pour le moment, vous connaissez deux types d'utilisateurs : les usagers et les bibliothécaires. Ajoutons-les :
            </p>

            <img src="../images/15868664168056_VISUELS_AMANDINE-9-1.jpg">

            <p>
            Faisons défiler la description de notre cas d’utilisation. Hoho : le nom de l'auteur. Comment le gérer ? 🙈 En ne regardant que le début de notre liste, nous pourrions être tentés de faire du nom de l'auteur un attribut de Livre. Mais descendez un peu dans la liste. 
            </p>

            <p>
            Un auteur est plus qu'un simple nom. Par exemple, il peut être associé à de nombreux livres. Si vos clients veulent une biographie succincte de l'auteur, ou sa photo, vous devez les ajouter :
            </p>

            <img src="../images/15868664742772_VISUELS_AMANDINE-10.jpg">

            <p>
            En avançant dans le scénario, vous vous rendrez compte que certaines classes doivent communiquer entre elles pour rechercher un livre. Une relation existe donc entre elles. Utilisez un trait entre les classes pour la représenter, comme dans le diagramme ci-dessous :
            </p>

            <img src="../images/15868665277791_VISUELS_AMANDINE-11.jpg">

            <p>
            Qu'est-ce que c'est que ces petits chiffres 1 et cet astérisque ? 😵
            </p>

            <p>
            Dans cet exemple, les résultats de recherche affichent de nombreux livres. En langage UML, vous pouvez noter cette multiplicité avec un astérisque, qui signifie « au moins un(e) ».  Et comme nous parlons de livres, cet astérisque est placé à l'endroit où le trait de la relation rejoint la classe Livre. En attendant, un livre n'a qu'un résultat de recherche. Vous notez donc un 1 à l'endroit où le trait de la relation rejoint la classe "Résultats de recherche". 
            </p>

            <p>
            <img src="../images/16101120224095_VISUELS_AMANDINE-12.png">
            </p>

            <p>
            Chaque livre a un auteur. Un auteur peut avoir écrit de nombreux livres, mais généralement un livre n'a qu'un seul auteur. Vous ajoutez donc un * à votre trait du côté du livre et 1 du côté de l'auteur. Un livre ne sera associé qu'à une image, de même qu'un auteur.
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5647281-appliquez-le-principe-du-domain-driven-design-a-votre-application/6833431-adaptez-votre-diagramme-aux-changements-de-besoins-de-votre-client#/id/video_Player_1" target="blank">Mettez à jour votre diagramme de cas d'utilisation</a></h3>

            <p>
            Après quelques échanges, vous vous rendez compte qu'ils ne sont pas 100 % satisfaits. Apparemment, quand un livre n'est pas disponible, les usagers se plaignent de devoir vérifier régulièrement s'il l'est à nouveau. Et même s'ils le cherchent depuis des semaines, il suffit que quelqu'un ait un peu de chance, et passe juste devant eux. Ce qui agace d'autant plus les bibliothécaires quand ce même titre est particulièrement demandé. Ils souhaiteraient donc augmenter l'amende pour les livres populaires rendus en retard et faire en sorte que les usagers puissent mettre un livre de côté.
            </p>

            <p>
            Tout d'abord, il va falloir déterminer si vous avez affaire à un cas d'utilisation totalement nouveau ou à une modification d'un cas d'utilisation existant. L'idée de mettre un livre de côté n'est reliée à aucun cas d'utilisation précédent. Vous devez donc reprendre votre diagramme et y ajouter un ovale.
            </p>

            <img src="../images/15868671341126_VISUELS_AMANDINE-18-1.jpg">

            <p>
            À présent, nous devons créer une description du nouveau cas d'utilisation. Cela nous permettra de repérer s'il faut ajouter de nouvelles classes ou de nouveaux attributs. Voici la description du nouveau cas d'utilisation : 
            <ul>
                <li>l'utilisateur recherche un livre ;</li>
                <li>le système affiche les informations relatives au livre :
                    <ul>
                        <li>    notamment le fait qu'il est actuellement emprunté par un autre <strong>usager</strong> ;</li>
                    </ul>
                </li>
                <li>l'utilisateur sélectionne l'option Mettre de côté ;</li>
                <li>le programme demande les coordonnées de l'usager ;</li>
                <li>l'utilisateur saisit le <strong>nom</strong> de l'usager ou son <strong>identifiant</strong> à la bibliothèque ;</li>
                <li>le programme confirme l'existence de l'usager ;</li>
                <li>le programme ajoute l'identifiant de l'usager à la liste des exemplaires mis de côté du livre.</li>
            </ul>
            </p>

            <p>
            Les nouveaux noms ont été mis en gras. Vous pouvez créer un diagramme de classes pour montrer les  nouveaux concepts et ceux déjà en lien avec ce cas d'utilisation :
            </p>

            <img src="../images/15852120845662_VISUELS_AMANDINE-19-1.png">

            <p>
            Le programme change de comportement, il s'adapte aux besoins de vos clients. Il est essentiel de tenir votre modèle à jour. Vous n'avez pas envie qu'un nouveau concept vous échappe. Si vous prenez la (très) mauvaise habitude de ne pas mettre à jour votre modèle, vous allez retomber dans l'approche « le programme d'abord, les besoins clients ensuite ».
            </p>

            <p>
            Dès que de nouvelles idées sont lancées, il faut adapter votre modèle de domaine. Pour cela, il vous faudra souvent ajouter de nouvelles classes et de nouveaux attributs, ou encore déplacer un attribut d'une classe à une autre. 
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5647281-appliquez-le-principe-du-domain-driven-design-a-votre-application/6833811-implementez-votre-modele-de-domaine#/id/r-6833881" target="blank">Implémentez votre modèle de domaine</a></h3>

            <p>
            Une fois que vous avez un modèle de domaine, vous avez une meilleure vue d'ensemble de votre application. Il est donc plus aisé de prendre des décisions importantes en ce qui concerne l'implémentation ! Voici les étapes à suivre pour implémenter votre domaine.
            </p>

            <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5647281-appliquez-le-principe-du-domain-driven-design-a-votre-application/6833811-implementez-votre-modele-de-domaine#/id/r-6833886" target="blank">Prêtez attention aux frontières</a></h4>

            <p>
            Il est possible d'avoir plusieurs contextes délimités (bounded contexts) dans un domaine. Dans le système de la bibliothèque, un ensemble de fonctionnalités est utilisé par les bibliothécaires et un autre par les usagers. Ces deux contextes délimités sont englobés dans un seul et même domaine.
            </p>

            <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5647281-appliquez-le-principe-du-domain-driven-design-a-votre-application/6833811-implementez-votre-modele-de-domaine#/id/r-6833901" target="blank">2- Définissez des entités pour représenter des objets uniques</a></h4>

            <p>
            y a quelques chapitres de cela, je vous disais qu'une entité se reconnaissait par son caractère unique. Vous vous rappelez ? Cela mérite d'être répété, car c'est important : il s'agit d'éléments qui ont une identité de manière durable, peu importe leur état.
            </p>

            <p>
            Les objets entités sont en général utilisés par plusieurs cas d'utilisation. C'est pour cela qu'ils sont habituellement enregistrés dans une sorte de système de stockage persistant (comme une base de données). 🗄 
            </p>

            <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5647281-appliquez-le-principe-du-domain-driven-design-a-votre-application/6833811-implementez-votre-modele-de-domaine#/id/r-6834091" target="blank">3- Identifiez les objets valeurs dans votre modèle</a></h4>

            <p>
                Un objet valeur est destiné à représenter une valeur. Si cette valeur n'est plus nécessaire, l'objet est supprimé et remplacé par un autre. Les objets valeurs sont habituellement créés uniquement pour faciliter l'exécution d'un seul cas d'utilisation. À la différence des entités, ils ne sont pas conservés dans le stockage de données, dans la mesure où ils ne sont nécessaires que brièvement. Dans l'exemple ci-dessus, l'amende est probablement calculée à partir du nombre de jours de retard. Il est inutile de conserver un objet et de le mettre à jour tous les jours. Mais il est nécessaire, au moins brièvement, pour calculer l'amende.
            </p>

            <p>
            Aujourd'hui, la data constitue une véritable mine d'or. Dans notre cas, il est probablement intéressant de savoir quels livres entraînent le plus d'amendes, ou de connaître le code postal des usagers qui rendent les livres dans les temps. Même si en général nous ne conservons pas l'objet valeur, certains programmes vont au contraire sauvegarder ce type d'informations, afin de comprendre toutes ces données.
            </p>

            <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5647281-appliquez-le-principe-du-domain-driven-design-a-votre-application/6833811-implementez-votre-modele-de-domaine#/id/r-6834296" target="blank">4- Identifiez les objets d'agrégatione</a></h4>

            <p>
            Pour terminer, vous avez besoin d'objets pour maintenir l'équilibre du système. Tous ces objets entités et valeurs qui circulent sont habituellement reliés d'une façon ou d'une autre. 
            </p>

            <p>
            C'est ici que les objets agrégats interviennent. Ils regroupent des objets valeurs et entités qui vont de pair en un tout unique, de telle sorte que vous pouvez les gérer comme s'il s'agissait d'un seul concept. Prenons comme exemple une liste de livres en retard :
            </p>

            <img src="../images/15869382467946_VISUELS_AMANDINE-21.jpg">

            <p>
            Tout d'abord, vous avez les usagers (entités) qui n'ont pas rendu leurs livres. Ensuite, vous avez les livres (entités). Puis vous avez l'amende (valeur) qu'ils doivent payer. Vous devez rassembler tous ces éléments dans une seule et même idée.
            </p>

            <p>
            Pour cela, il suffit d'introduire l'objet agrégat « livre en retard ». Notez qu'il a une relation de type « 1 » avec tous les éléments qui s'y rattachent. Ce n'est pas systématique pour un agrégat, mais c'est courant.
            </p>

            <p>
            Maintenant que vous avez vos contextes délimités, vos entités, vos objets valeurs et vos agrégats, vous pouvez passer au code. Mais, maintenant, vous avez une longueur d'avance dans la création de votre application. Dans la mesure où vous avez défini tous ces éléments, vous devriez avoir une idée claire de ce que fait et représente chaque objet, et cela vous permettra d'affronter sans soucis la complexité d'un système complet.
            </p>


            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7501243-decouvrez-l-interet-des-bases-de-donnees#/id/video_Player_1" target="_blank">
            Modéliser une base de donnée</a></h1>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7501243-decouvrez-l-interet-des-bases-de-donnees#/id/r-7501891" target="_blank">
            Le SGBD</a></h2>

            <p>
            Chaque SGBD a son propre langage, afin de communiquer avec les applications qui souhaitent accéder aux données. Le langage le plus utilisé est le langage SQL. Ainsi, le SGBD est spécialisé dans le stockage, l’accès et l’écriture de données. 
            </p>

            <p>
            Pour finir, parlons d’un SGBD très connu : SQLite. Nous l’utiliserons plus tard dans ce cours. Il est assez simple d’utilisation : il est donc parfait pour débuter.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7501282-choisissez-entre-une-bdd-relationnelle-ou-nosql#/id/r-7501281" target="_blank">
            Appréhendez la structure de vos données</a></h2>

            <p>
            Vous avez déjà utilisé un tableur comme Excel, Google Sheet, ou LibreOffice Calc ? Alors bravo ! Vous savez manipuler des données dites structurées.
            </p>

            <p>
            En général, on y indique sur chaque ligne chacune des entités que l’on enregistre, et en colonne les caractéristiques de chacune de ces entités.
            </p>

            <p>
            Mais parfois, c’est plus complexe. Avez-vous déjà entendu parler du big data ?
            </p>

            <p>
            On parle souvent des trois V qui caractérisent le big data :
            <ul>
                <li>Volume ;</li>
                <li>Vélocité (Vitesse, rapidité.) ;</li>
                <li>Variété.</li>
            </ul>
            </p>

            <p>
            Arrêtons-nous sur ce troisième point : la variété. Les formes de données générées par le Web sont de plus en plus diverses : images, vidéos, textes, opinions sur les réseaux sociaux, e-mails, etc. Ces données sont difficiles à représenter sous forme de tableau : on dit donc qu’elles sont peu structurées.
            </p>

            <p>
                Donc beaucoup de caractéristiques possibles, c’est beaucoup de colonnes dans notre tableau. De plus, vous obtiendrez rarement toutes les caractéristiques d’une personnes d’un coup ; loin de là ! <br>
                Cela veut dire que :
                <ul>
                    <li>Pour une ligne donnée, seule une toute petite proportion des colonnes seront remplies ;</li>
                    <li>Et pour la ligne suivante, d’autres colonnes seront remplies, mais pas forcément les mêmes !</li>
                </ul>
                Vous aurez donc un tableau très peu rempli, avec énormément de colonnes. Avouez que sur Excel, ce n’est pas pratique d’avoir une feuille énorme avec très peu de données éparpillées un peu partout !
            </p>

            <p>
            Mais alors, comment représente-t-on des données non structurées ?
            </p>

            <p>
            Il y a une infinité de représentations possibles !
            </p>

            <p>
            Si on reprend l’exemple des données relatives à une personne, on peut le faire sous une représentation de type Clé-Valeur. C’est-à-dire que chaque clé est l’intitulé d’une caractéristique (« nom », « prénom », etc) et à chaque clé est associée sa valeur (« Dupont », « Johanna », etc.).
            </p>

            <p>
            L’une des représentations qui utilise le principe Clé-Valeur est le format de fichiers JSON (« JavaScript Object Notation »).
            </p>

            <figure class="block_code">
    		<pre><code>
[
 {
  "identifiant_personne":1,
  "nom":"Dupont",
  "prenom":"Johanna",
  "pages_favorites":
    [
    "twitter.com",
    "mail.google.com",
    "lemonde.fr"
    ],
  "achats":{
    "culture":{
      "livres":
      [
         {
           "ISBN":"9782070612758",
           "titre":"Le petit prince",
                 "auteur_ice":"Antoine de Saint-Exupéry",
           "date_achat":"18/12/2029"
         },
         {
           "ISBN":"9782355221224",
           "titre":"Sorcières",
                 "auteur_ice":"Mona Chollet",
           "date_achat":"23/01/2029"
         }
       ]
     }
   }
 },
 {
   "identifiant_personne":2,
   "nom":"Nguyen",
   "prenom":"Augustin",
   "profil_facebook":"www.facebook.com/AugustinoLeRigolo",
   "profil_twitter":"twitter.com/AugustinoLeRigolo",
   "amis_facebook":
    [
     "www.facebook.com/RadiaLaRadieuse",
     "www.facebook.com/RatonLeLaveurDeVitres",
     "www.facebook.com/YvanLeHareng",
     "www.facebook.com/EdgarLeCougar"
    ]
  }
]
    		</code></pre>
    	</figure>

        <p>
        Et pour les données structurées, quel format de fichier faut-il ?
        </p>

        <p>
        Le plus souvent, on utilise le format CSV (« Comma-separated values »), conçu pour représenter un tableau. La première ligne du fichier donne le nom des colonnes, et les suivantes présentent toutes les données, séparées par des virgules, des point-virgules ou des tabulations.
        </p>

        <p>
        Notez donc qu'il y a deux façons d'ouvrir un fichier CSV :
        <ul>
            <li>avec un éditeur de texte de type "bloc notes" ou un IDE comme VS Code: vous aurez le texte du fichier CSV en affichage ;</li>
            <li>avec un logiciel comme Google Sheet ou Excel : vous aurez les données formatées sous forme de tableur.</li>
        </ul>
        Attention : Il sera parfois nécessaire de spécifier le caractère qui délimite les colonnes : la virgule, le point-virgule ou la tabulation.
        </p>

        <p>
        Dernier point concernant les fichiers CSV : L'encoding. Si vous avez des caractères étranges au chargement d'un fichier CSV, essayer de recharger votre fichier en spécifiant un encoding différent: latin-1 ou UTF-8 par exemple.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7501282-choisissez-entre-une-bdd-relationnelle-ou-nosql#/id/r-7913413" target="_blank">
        Choisissez votre SGBD en fonction de la structure de vos données</a></h2>

        <p>
        Connaître la structure de vos données vous permet de bien choisir votre SGBD. Si votre SGBD est mal adapté à vos données, alors il sera plus complexe de lui formuler des requêtes pour accéder aux données, et le temps de réponse sera probablement plus long.
        </p>

        <p>
        Le plus pratique pour stocker des données structurées, c’est d’utiliser une base de données relationnelle.
        </p>

        <p>
        Ce terme vient du « modèle relationnel », qui est un moyen de représenter les relations dans un ensemble d’informations. Mais nous verrons cela plus tard.
        </p>

        <p>
        Les SGBD qui gèrent les bases de données relationnelles sont appelés SGBDR. Pour éviter d’avoir un langage différent pour chacun de ces SGBDR, on a créé le langage SQL. Il est commun à la quasi-totalité des SGBDR, et il permet d’insérer, de lire, d’actualiser ou de supprimer des données dans une base relationnelle.
        </p>

        <p>
        Les plus célèbres SGBDR sont :
        <ul>
            <li>PostgreSQL ;</li>
            <li>MySQL ;</li>
            <li>Oracle ;</li>
            <li>SQLite.</li>
        </ul>
        </p>

        <p>
        Et pour les données non structurées ?
        </p>

        <p>
        C’est plus complexe, car les données non structurées ont des formes extrêmement variées. Tout dépend de ce que vous voulez y stocker. Les SGBD qui s’écartent du modèle relationnel sont appelés « NoSQL » (c’est-à-dire « Not Only SQL », soit en français « pas uniquement SQL »).<br>
        Parmi les SGBD NoSQL, on trouve :
        <ul>
            <li>Elasticsearch : très performant pour stocker du texte et y effectuer des recherches.</li>
            <li>Neo4j : qui stocke des « graphes », c.-à-d. des données de type « réseaux » constitués d’éléments connectés entre eux : réseaux sociaux, routiers, informatiques, etc.</li>
            <li>MongoDB : qui stocke des données au format Clé-Valeur, comme dans l’exemple que nous avons vu plus haut.</li>
        </ul>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7501478-decomposez-la-modelisation-de-votre-bdd-en-trois-etapes-cles#/id/video_Player_1" target="_blank">
        Modélisez de votre BDD</a></h2>

        <p>
        Comme nous l’avons vu, il existe des données très structurées et d’autres moins structurées. L’objet de ce cours, c’est d’apprendre à modéliser une base de données pour des données structurées (les données des lieux de tournage), ce qui implique que nous utilisions une base de données relationnelle.
        </p>

        <p>
        Eh bien, « modéliser » est synonyme d’« organiser la structure de la BDD » afin de pouvoir y ranger au mieux vos données.
        </p>

        <p>
        Pour modéliser une BDD, il y a plusieurs étapes, le plus souvent au nombre de trois :
        <ol>
            <li>La première sera un schéma généraliste et compréhensible de la structure de vos données.</li>
            <li>La seconde sera plus adaptée à une représentation en tableaux.</li>
            <li>La dernière sera plus technique et très spécifique au SGBDR que vous aurez choisi.</li>
        </ol>
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7501478-decomposez-la-modelisation-de-votre-bdd-en-trois-etapes-cles#/id/r-7501553" target="_blank">
        Construisez votre modèle conceptuel de données (MCD)</a></h3>

        <p>
        La première étape, c’est le modèle conceptuel des données (MCD). Elle se décompose elle-même en trois sous-étapes :
        <ol>
            <li>Cherchez les concepts présents dans vos données.</li>
            <li>Cherchez les associations qui existent entre ces concepts.</li>
            <li> Caractérisez ces associations par une multiplicité, que vous indiquez grâce à des signes du type   0, 1, 1..*, 0..*,, etc (Si un film est produit par une ou plusieurs boîtes de production, etc) ;</li>
        </ol>
        </p>

        <p>
        Pour dessiner le modèle conceptuel, il y a plusieurs possibilités. Les deux plus répandues sont :
        <ul>
            <li>Le modèle Entité-Associations (E-A), qui fait partie de la méthode MERISE ;</li>
            <li>Le diagramme de classes, qui fait partie du langage de modélisation UML.</li>
        </ul>
        Dans leurs principes, ces deux méthodes de modélisation sont très similaires, même si elles utilisent des conventions graphiques un peu différentes. Dans ce cours, nous allons choisir la 2e option : le diagramme de classes UML. Il présente plusieurs avantages : être commun aux développeur et est plus utiliser au niveau mondial. 
        </p>

        <img src="../images/16343129609622_image29.png">

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7501478-decomposez-la-modelisation-de-votre-bdd-en-trois-etapes-cles#/id/r-7501632" target="_blank">
        Concevez votre modèle logique de données (MLD)</a></h3>

        <p>
        Le modèle conceptuel est un ensemble de concepts. Mais maintenant, il va falloir donner une structure à ces concepts.
        </p>

        <p>
        Vous vous souvenez ? On a dit que des données structurées peuvent se représenter sous forme de tableaux. Eh bien c’est notre prochaine étape : formater tous nos concepts en des tableaux !
        </p>

        <p>
        En modélisation relationnelle, un tableau s’appelle une table.
        </p>

        <p>
        La principale transformation pour passer de l’UML au modèle relationnel sera de transformer les multiplicités des associations en clés étrangères. Le concept des clés étrangères vous est étranger ? Ne vous inquiétez pas, vous y viendrons !
        </p>

        <p>
        Ici, vous vous rapprochez de la solution technique, car vous commencez à façonner vos données pour qu’elles puissent rentrer dans un SGBDR.
        </p>

        <p>
        En fait, le MLD découle du MCD. Pas besoin de trop réfléchir : il n’y a qu’à appliquer des règles de transformation basiques pour passer du MCD au MLD.
        </p>

        <img src="../images/16343132431507_image11.png">

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7501478-decomposez-la-modelisation-de-votre-bdd-en-trois-etapes-cles#/id/r-7501655" target="_blank">Déterminez votre modèle physique de données (MPD)</a></h3>

        <p>
        La dernière étape est donc de traduire le modèle relationnel en code SQL compréhensible par le SGBDR que vous aurez choisi (PostgreSQL, MySQL, Oracle, SQLite, etc.).
        </p>

        <p>
        Le SQL peut se décomposer en quatre langages :
        <ul>
            <li>Le langage de définition de données (LDD ou DDL en anglais) : pour créer la structure de la BDD ;</li>
            <li>Le langage de manipulation de données (LMD ou DML) : pour insérer, actualiser, supprimer ou récupérer des données ;</li>
            <li>Le langage de contrôle des données (LCD ou DCL) : pour gérer les droits d’accès aux données ;</li>
            <li>Le langage de contrôle des transactions (LCT ou TCL) : pour la validation ou l’annulation de modifications de données.</li>
        </ul>
        Voici un exemple de LDD (création de table en SQL) :
        </p>

        <figure class="block_code">
    		<pre><code>
            CREATE TABLE film
(
    id_film INT PRIMARY KEY,
    titre VARCHAR(100),
    date_tournage DATE
)
    		</code></pre>
    	</figure>

        <p>
        Dans ce cours, nous ne verrons que les deux premiers niveaux : le MCD et le MLD. Quant au MPD, il nécessite d’utiliser le langage SQL et de choisir un SGBDR, puis de l’installer. 
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7501739-tenez-compte-de-la-redondance-dans-votre-modelisation#/id/video_Player_1" target="_blank">La redondance</a></h2>

        <p>
            Si une information est présente plusieurs fois dans un tableau, cela peut poser problème : 
                <ul>
                    <li>Premièrement cela peut provoquer des incohérences dans les données :si un nom est orthographier différemment par exemple.</li>
                    <li>Ensuite, imaginez que Cathy Verney change de nom. Il faudra actualiser l’information à plusieurs endroits dans le fichier, et on aura vite fait d’oublier une ou deux lignes : cela créera encore des incohérences !</li>
                    <li>Imaginez enfin que nous décidions de supprimer Vernon Subutex de notre BDD. Cela supprimera également les informations relatives à Cathy Verney. Or selon les cas d’utilisation, on peut très bien souhaiter qu’un réalisateur puisse exister dans notre base, même si elle ou il n’est associé à aucun lieu de tournage. De même, on ne peut actuellement pas ajouter de réalisateur s'il n’a pas tourné au moins une scène, car notre fichier décrit des lieux de tournage et non pas des réalisateurs/réalisatrices.</li>
                </ul>
        </p>

        <p>
        Alors, quelle est la solution ? Il suffit de créer un nouveau tableau contenant les réalisateurs !
        </p>

        <p>
        Avec ce nouveau tableau, les réalisateurs pourront exister indépendamment des tournages qu’ils ont réalisés ou non. C’est un premier avantage.
        </p>

        <p>
        Mais il y a un autre avantage important : dans ce tableau, un seul réalisateur n’est présent que sur une seule ligne ! Ainsi, si vous souhaitez actualiser une information relative à un seul réalisateur, vous ne le ferez qu’à un seul endroit ! Fini les incohérences liées à la redondance d'informations.
        </p>


        <p>
        Pour chaque réalisateur, on attribue un identifiant (1, 2, 3, etc.), et dans la tableau des lieux de tournage, on ajoute une colonne qui donne l’identifiant du réalisateur du film en question ! Ainsi, l’ordinateur peut rapidement faire le lien entre les deux tableaux !
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7501911-posez-les-premieres-briques-de-votre-diagramme-de-classes#/id/video_Player_1" target="_blank">Diagramme de classes</a></h2>

        <p>
        Cette première étape, c’est le modèle conceptuel des données (MCD).
        </p>


        <p>
        Je vous propose de faire des petits rectangles divisés en trois parties. Dans la partie haute, vous mettrez le nom du concept, dans la partie centrale la liste des caractéristiques. Et pour la partie basse, un peu de patience, je vous en parle un peu plus loin dans le chapitre.
        </p>

        <p>
        Habituez-vous à utiliser dès maintenant :
        <ul>
            <li>La convention Upper Camel Case pour vos noms de concepts (classes): CommePourLesClasses</li>
            <li>Le Lower Camel Case pour les attributs (propriétés) : commeCeci</li>
        </ul>
        </p>

        <p>
        Voici une réponse possible :
        </p>

        <img src="../images/1634319475562_image76.png">

        <p>
        Sans le savoir, vous venez de dessiner un diagramme de classes UML. Dans ce diagramme, vous avez formalisé tous nos concepts sous forme de classes : vous avez les classesFilm,   Lieu de tournage, etc.
        </p>

        <p>
        Sur ce diagramme, chaque classe est représentée par un rectangle, dont le nom figure sur la partie haute.
        </p>

        <p>
        Dans la partie centrale de notre rectangle, nous indiquons les attributs. Un attribut, c’est une caractéristique de la classe. Donc une propriété de classe.
        </p>

        <p>
        L’ensemble des valeurs que peut prendre un attribut est appelé son domaine. 
        </p>

        <p>
        Pour définir un domaine, vous pouvez le faire soit en énumérant toutes les valeurs possibles (définition en extension), soit en donnant les caractéristiques des valeurs, comme par exemple « ce doit être un nombre entier » (définition en intention).
        </p>

        <p>
        On peut définir aussi des attributs multivalués : cela signifie que l’attribut peut prendre zéro, une ou plusieurs valeurs du même type (ou même domaine), sans que l’on sache à l’avance combien il y en aura. Ce serait par exemple le cas d’un attributnuméro(s) de téléphoned’une classe   Personne  , car une personne peut avoir zéro, un, ou de multiples numéros de téléphone.
        </p>

        <p>
        Enfin, on dit qu’un attribut est dérivé, lorsqu’il peut être déterminé à partir d’autres attributs. Dans votre cas,anneeDuTournagepeut être déterminé à partir dedateDeDebut.
        </p>

        <p>
        Mais… une méthode de calcul, ça se programme avec du code informatique, non ?
        </p>

        <p>
        Tout à fait ! C’est pour cela qu’il y a une 3e partie dans les rectangles que vous avez dessiné : elle sert à accueillir les méthodes.
        </p>

        <p>
        Une méthode est un enchaînement d'opérations destiné :
        <ul>
            <li>Soit à modifier les attributs ;</li>
            <li>Soit à calculer un résultat à partir des attributs ;</li>
            <li>Soit les deux en même temps. </li>
        </ul>
        En fait, les méthodes définissent le « comportement » de votre classe, c’est-à-dire les actions qu’elle est capable de réaliser.
        </p>

        <p>
        En général, on préfère représenter les attributs dérivés par des méthodes, car un attribut dérivé est le résultat d’un calcul sur les attributs non dérivés.
        </p>

        <p>
        Pour une BDD, le diagramme de classe UML est suffisant. Il est aussi très utile pour les développeurs qui vont représenter les classes de leur programme. Même si pour eux, quelque chose de statique reste insuffisant. Le langage UML prévoit alors aussi d’autres types de diagrammes permettant par exemple de représenter le comportement du programme dans le temps.
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7502401-associez-vos-classes-pour-garder-du-lien-dans-vos-donnees#/id/video_Player_1" target="_blank">Association de classes</a></h3>

        <p>
        Pour créer vos associations, je vous propose de tracer des traits qui relient vos classes, et de leur donner un nom, de préférence un verbe tel que « réalise », « produit », etc.
        </p>

        <p>
        <img src="../images/16343245041689_image61.png">
        </p>

        <p>
        Il y a un concept très important quand on définit une association : c’est la notion de <strong>multiplicité</strong>.
        </p>

        <p>
        Elle permet de dire si un film peut être réalisé par UN SEUL ou par PLUSIEURS réalisateurs, et inversement : si un réalisateur peut produire UN SEUL ou PLUSIEURS films.
        </p>

        <p>
        Il ne faut pas négliger les multiplicités, car ceci aura des implications dans le SGBDR. Par exemple, si vous considérez à tort qu’un réalisateur ne peut réaliser qu’un seul film, alors la structure de votre BDD ne sera pas faite pour accueillir plus d’un film par réalisateur : et pour modifier cette structure, ce sera un peu plus complexe qu’on ne le pense. 
        </p>


        <p>
        Il existe trois types d’associations :
        <ul>
            <li>Plusieurs à plusieurs (many-to-many) : un film peut être réalisé par plusieurs réalisateurs, et un réalisateur peut avoir réalisé plusieurs films ;</li>
            <li>Un à plusieurs (one-to-many) ou plusieurs à un (many-to-one) : un film n’est réalisé que par au plus 1 société de production, et une société peut produire plusieurs films ;</li>
            <li>Un à un (one-to-one) : vous n’avez pas ce cas dans vos données, mais c’est lorsqu’une instance d’une classe A ne peut être associée qu’à au plus 1 instance d’une classe B. Et qu’une instance de B ne peut être associée qu’à au plus 1 instance de A.
Par exemple, un cinéma n’a qu’une seule adresse, et une adresse donnée ne peut accueillir qu’un seul cinéma.</li>
        </ul>
        </p>

        <p>
        Ensuite, vous pouvez aller plus loin dans la précision des multiplicités :
        <ul>
            <li>0..1 -> (pas d'abréviation) : 0 ou 1</li>
            <li>1..1 -> 1 : Exactement 1</li>
            <li>0..* -> * : 0, 1 ou plus</li>
            <li>1..* -> (pas d'abréviation) : Au moins 1</li>
            <li>n..n -> n : Exactement n (où n est un nombre entier)</li>
            <li>m..n -> (pas d'abréviation) : Au moins m et au plus n (avec m et n nombres entiers tels que m<n)</li>
        </ul>
        </p>

        <p>
        Retenez bien de quel côté de l’association placer vos deux multiplicités : ne les inversez pas ! ;)
        </p>

        <img src="../images/16343568880306_image61.png">

        <p>
       Peut-être qu’intuitivement, vous aviez envie de dessiner ce schéma conceptuel...
        </p>

        <img src="../images/16343571196001_image35.png">

        <p>
        Et vous auriez eu raison ! Mais dans ce cas, vous n’auriez pas réussi à placer les colonnes   Date de débutetDate de fin. En fait, ces deux dates sont des caractéristiques de l’association qui unit un lieu à un film. 
        </p>

        <p>
        Eh bien, sachez qu’il est possible de donner des caractéristiques à un lien, grâce à une classe d’association. Ici, comme l’association s’appelle « est tourné », vous pouvez appeler votre classe « Tournage » :
        </p>

        <img src="../images/16343573486978_image68.png">

        <p>
        Il existe un type d’association particulier, appelé l’association de composition. Celle-ci s’utilise quand une classe est un composant d’une autre classe.
        </p>

        <p>
        Pour votre appli, vous pourriez considérer qu’un tournage est un composant du film. En effet, rien ne sert d’enregistrer dans votre BDD un tournage si vous ne savez pas à quel film il est associé.
        </p>

        <p>La composition s’emploie quand ces trois caractéristiques sont réunies :
            <ol>
                <li>Le composite est « composé » de composants.</li>
                <li>L’association de composition est de type un-à-plusieurs, car le composite peut avoir plusieurs composants (0..1, 1, *ou1..*), et le composant appartient à un et un seul composite (la multiplicité est donc forcément1, rien d’autre) : on dit que le composite n’est pas partageable.</li>
                <li>Il y a un lien entre le cycle de vie du composite et du composant : un composant disparaît dès que l'objet composite auquel il appartient est supprimé.</li>
            </ol>
        </p>

        <p>
        Voici comment cette composition aurait été représentée : avec un losange noir (plein) du côté du composite :
        </p>

        
        <img src="../images/16343577199231_image25.png">

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7503390-ameliorez-votre-diagramme-de-classes#/id/r-7503916" target="_blank">L'héritage</a></h3>

        <p>
        Jusqu’à maintenant, j’ai parlé de films de manière générale. Mais vos données sont un peu plus précises que cela. En effet, ce que j’ai appelé « film » peut en réalité être un long-métrage, un téléfilm ou une série (diffusée sur le web ou à la télévision). Pour être plus correct, je vais maintenant employer le terme « Oeuvre » au lieu de « Film ». Une œuvre sera donc soit un long-métrage, soit un téléfilm, ou une série.
        </p>

        <p>
        Jusqu’à maintenant, le type de l'œuvre est enregistré dans l’attribut   typeDeTournage  .
        </p>

        <p>
        J’ai vu dans le fichier CSV que dans le cas des séries, on connaît parfois le numéro de saison. Peut-on ajouter un attribut   saison  dans la classe   Oeuvre    ?
        </p>

        <p>
        C’est une bonne idée. Cependant, cet attribut ne sera utilisé que si l'œuvre est une série. Il restera vide si l'œuvre est un téléfilm ou un long-métrage. Cette solution n’est donc pas optimale. L’idéal serait de placer cet attribut dans une classe Serie 
        </p>

        <p>
        Heureusement, c’est possible ! On fait cela via la notion d’héritage, comme ceci :
        </p>

        <img src="../images/16343605932924_image58.png">

        <p>
        La relation d’héritage se représente par une flèche triangulaire blanche (vide). Elle indique que la classeOeuvre(appelée classe mère) est plus générale que ses classes filles, qui sont plus spécialisées.
        </p>

        <p>
        Ainsi, toutes les classes filles (Telefilm,SerieetLongMetrage) héritent deOeuvre, et cette dernière transmet automatiquement à ses filles ses attributs et ses méthodes. De cette manière, toutes les classes filles possèdent l’attributTitre. La classeSerie a quant à elle deux attributs : TitreetSaison.
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7503390-ameliorez-votre-diagramme-de-classes#/id/r-7503988" target="_blank">Classes abstraites</a></h3>

        <p>
        Lorsque l’on utilise l’héritage, il est parfois utile de spécifier qu’une classe est abstraite, c’est-à-dire qu’elle ne peut pas être instanciée.
        </p>

        <p>
        C’est votre cas : dans la BDD, vous voulez qu’une œuvre soit obligatoirement un téléfilm, une série TV, une série web ou un long-métrage. La notion d'œuvre est trop générale pour que vous l’acceptiez. En effet, considérer un téléfilm simplement comme une oeuvre, c’est perdre les informations spécifiques au téléfilm.
        </p>

        <p>
            Pour indiquer une classe abstraite, il suffit de mettre son titre en italique. Voici donc ce que cela donne si vous définissezOeuvreetSeriecomme abstraites :
        </p>

        <img src="../images/16343614257334_image59.png">

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7504551-identifiez-les-elements-cles-du-modele-relationnel#/id/video_Player_1" target="_blank">Identifiez les éléments clés du modèle relationnel</a></h2>

        <p>
        Dans cette nouvelle partie, nous allons voir la seconde étape, le modèle logique. Pour les bases de données relationnelles, le niveau logique utilise la modélisation relationnelle. Votre modèle relationnel découlera de votre diagramme UML, et quand vous l’aurez défini, il sera ensuite très simple de créer votre base de données finale !
        </p>

        <p>
        Il existe différentes façons de représenter un modèle relationnel : l’une sous forme de texte, et l’autre sous forme graphique.
        </p>

        <p>
        Notre table lieu, qui possède quatre attributs, s’écrit de cette manière :
        </p>

        <figure class="block_code">
    		<pre><code>
lieu (localisation_de_la_scene:Texte, code_postal:Numérique, longitude:Numérique, latitude:Numérique)
    		</code></pre>
    	</figure>

        <p>
            Ou de manière grapique :
        </p>

        <img src="../images/16361087285205_P3C1.png">

        <p>
        Elle est très similaire à l’UML car elle représente les tables par des rectangles divisés en trois parties, mais ces trois parties sont remplies différemment qu’en UML. Attention donc à ne pas les confondre !
        </p>

        <p>
        À ces deux représentations, nous ajouterons une troisième, que nous appellerons représentation en tableaux. Elle n’est pas officielle et servira juste à illustrer les exemples de ce cours.
        </p>

        <img src="../images/16359249311985_illus T01.png">

        <p>
        ("rue corvisart", 75013, 2.3472, 48.8322)est aussi appelé un tuple, un enregistrement, plus rarement un vecteur ou même un n-uplet ! Si nous étions encore à la phase de modélisation UML, on pourrait aussi dire que   ("rue corvisart", 75013, 2.3472, 48.8322)est une instance de la classelieu
        </p>

        <p>
        Dans une table, l'ordre des lignes et des colonnes n'a pas d'importance et pas de signification. Deux tables contenant les mêmes colonnes (mais dans un ordre différent) et les mêmes lignes (dans un ordre différent) sont considérées comme identiques.
        </p>

        
        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7504979-determinez-vos-cles-primaires#/id/video_Player_1" target="_blank">Clés primaires</a></h3>

        <p>
        La clé primaire de cette table, ce sera le groupe de colonnes minimum que l’on peut donner au facteur pour qu’il soit sûr de pouvoir distribuer un courrier au bon logement.
        </p>

        <p>
        En choisissant les colonnes 3 à 9 comme clé primaire de la tableLogement, on définit implicitement que deux lignes de cette table ne peuvent pas avoir des valeurs identiques pour ces attributs. Le SGBDR vous l’interdira. On dit que l’on définit une contrainte d’unicité sur le groupe de colonnes 3 à 9.
        </p>

        <p>
        Formellement, on dira que la clé primaire d’une table est un groupe d’attributs minimum permettant d’identifier de manière unique une ligne.
        </p>

        <p>
        Graphiquement, il est courant de représenter les attributs qui constituent la clé primaire dans la partie centrale du rectangle qui représente la table, et tous les autres attributs sont inscrits dans la partie basse. Mais il peut arriver que vous rencontriez d’autres représentations, ailleurs que dans ce cours.  Par exemple avec la clé primaire en gras ou soulignée.
        </p>

        <p>
        Aussi, on peut indiquer les attributs de la clé primaire par l’abréviation « PK », mise pour « Primary Key ».
        </p>

        <p>
        Parmi les attributs d’une table,  il est parfois impossible de trouver une clé primaire. Dans d’autres cas, la clé primaire est trop complexe (trop d’attributs, par exemple). Dans ce cas, il est possible de créer une clé artificielle.
        </p>

        <p>
        Une clé artificielle est un attribut que l'on ajoute à la table. Cet attribut n'a pas de réelle signification dans le domaine que l'on modélise, mais sa seule fonction est d'identifier de manière unique les lignes de la relation. C’est donc un identifiant.
        </p>

        <p>
        Par contre, quand on passe au MPD (la troisième étape de la modélisation), il est fréquent d’utiliser des clés artificielles systématiquement, car : 
            <ul>
                <li>Il y a toujours un risque qu’une clé primaire non artificielle perde la propriété d’unicité (exemple : si une même société de production produit deux films ayant le même nom).</li>
                <li>Si la valeur d’une clé non artificielle est modifiée (si par exemple une société de production change de nom), il faut modifier toutes les clés étrangères qui la référencent.</li>
            </ul>
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7506536-creez-du-lien-entre-vos-tables-avec-les-cles-etrangeres#/id/r-7503201" target="_blank">Clés étrangères</a></h3>

        <p>
        Dans ce chapitre, vous verrez comment modéliser les associations que vous avez déterminées dans le diagramme UML. C’est-à-dire comment associer une ligne d’une table (ex. :oeuvre) à une ligne d’une autre table (ex. :societe_de_production).
        </p>

        <p>
        Une clé étrangère, c’est un attribut (ou groupe d'attributs) d’une table qui fait référence à la clé primaire d’une autre table, afin de modéliser le lien entre les lignes de ces deux tables.
        </p>

        <img src="../images/16369891378302_p3c2-1.png">


        <p>
        Les valeurs présentes dans la colonneauteur_icedoivent obligatoirement avoir une correspondance dans la colonneid, sinon les données sont incohérentes. La plupart des SGBDR n’accepteront pas que vous introduisiez un livre dont l’auteur indiqué dans la colonneauteur_ice n’existe pas dans la tablepersonne. Cette contrainte est à garder à l’esprit lorsqu'une personne sera supprimée de la base de données.
        </p>

        <p>
        Les attributs qui constituent une clé étrangère sont désignés par le signe « FK », pour « Foreign Key ». Graphiquement, on représente une clé étrangère par un trait en pointillés entre les deux tables, comme ceci :
        </p>

        <img src="../images/16343803588823_image64.png">

        <p>
        Ici, la clé étrangère n’est composée que d’un attribut (auteur_ice) car la clé primaire de   personne ne contient qu’un attribut (id). Mais si la clé primaire contient deux attributs, comme pour votre tablelieu, alors il faudrait une clé étrangère à deux attributs, que l’on pourrait appeler par exempleloc_sceneetcode_postal.
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7506536-creez-du-lien-entre-vos-tables-avec-les-cles-etrangeres#/id/r-7503273" target="_blank">Cardinalités minimales et valeurs nulles</a></h3>

        <p>
        Le modèle relationnel met à disposition une valeur bien pratique : la valeur nulle, notéenull. Cette valeur est équivalente à une case vide dans un tableau, lorsqu'une information est manquante ou inexistante.
        </p>

        <p>
        La valeur null est différente de la valeur 0, ou de la chaîne de caractères vide "". Contrairement à 0 ou à "", null indique l’absence d’information : soit parce que l’information n’a pas pu être récoltée, soit parce que l’information n’existe tout simplement pas.
        </p>

        <p>
        Les attributs qui composent une clé primaire ne peuvent jamais être nuls, car ils servent à identifier les lignes de la table. Une ligne sans identité (ou avec une identité incomplète), c’est interdit !
        </p>

        <p>
        Quand on transforme des associations UML en clés étrangères, la contrainte de non-nullité est utile lorsque la cardinalité minimale est 1 (et non pas 0).
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7506536-creez-du-lien-entre-vos-tables-avec-les-cles-etrangeres#/id/r-7503273" target="_blank">Transformez les associations de votre diagramme de classes UML en BDD</a></h3>

        <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7507122-transformez-les-associations-de-votre-diagramme-de-classes-uml#/id/r-7561967" target="_blank">L’association un-à-plusieurs</a></h4>

        <p>
        Elle est de type un-à-plusieurs. Certes, c’est aussi une composition. Mais une composition est un cas particulier de un-à-plusieurs. Si vous le voulez bien, oublions donc l’aspect composition pour le moment, pour nous concentrer sur l’aspect un-à-plusieurs :
        </p>

        <p>
        Comme une société de production produit PLUSIEURS oeuvres, il faut ajouter une clé étrangère dans oeuvrequi référence la clé primaire desociete_de_production:
        </p>

        <img src="../images/16369893230901_p3c3-2.png">

        <p>
        Une association un-à-plusieurs se traduit en ajoutant une clé étrangère dans la table qui est du côté « plusieurs ». Cette clé étrangère référence la clé primaire de la table qui est du côté « un ».
        </p>

        <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7507122-transformez-les-associations-de-votre-diagramme-de-classes-uml#/id/r-7561947" target="_blank">L’association plusieurs-à-plusieurs</a></h4>

        <p>
        Si vous essayez de mettre une clé étrangère dansoeuvreréférençant la clé primaire de   realisateur_ice, alors vous verrez qu’une œuvre ne peut avoir qu’un réalisateur : ce n’est pas ce que vous voulez. Si inversement vous mettez une clé étrangère dans realisateur_ice, alors vous ne pourrez avoir qu’une œuvre par réalisateur.
        </p>

        <p>
        Il faut donc trouver une autre solution. 🤓
        </p>

        <p>
        La solution est d’ajouter une table en plus. Cette table contiendra deux clés étrangères : l’une référençant oeuvre , et l’autre référençant realisateur_ice  :
        </p>

        <p>
        <img src="../images/16369893771823_p3c3-3.png">
        </p>

        <p>
        La clé primaire de cette nouvelle table sera composée des deux clés étrangères :
        </p>

        <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7507122-transformez-les-associations-de-votre-diagramme-de-classes-uml#/id/r-7561949" target="_blank">L’association un-à-un</a></h4>^

        <p>
        Pour une association un-à-un entre une tableA et une tableB, on utilise aussi une clé étrangère. La clé étrangère est placée dans A et elle référence la clé primaire deB  .
        </p>

        <img src="../images/16369894985505_p3c3-4.png">


        <p>
        Mais, c’est la même chose que pour l’association un-à-plusieurs, non ?
        </p>

        <p>
        Oui, mais il y a un petit détail en plus. 😉 Selon le graphique ci-dessus, un cinéma ne peut avoir qu’une adresse, mais deux cinémas peuvent avoir la même adresse : ce n’est pas ce que l’on veut.
        </p>

        <p>
        Pour spécifier qu’une adresse ne peut accueillir qu’un seul cinéma, il faut ajouter une contrainte d’unicité sur l’attribut adresse . Ainsi, la colonne adresse ne pourra pas contenir deux fois la même valeur. Ce qui signifie que adresse ne pourra pas contenir deux fois la même référence vers une adresse donnée. Autrement dit, une adresse ne pourra pas accueillir plus d’un cinéma.
        </p>

        <p>
        Il faut donc également spécifier au SGBDR une contrainte d’unicité sur la clé étrangère.
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7561936-transformez-vos-compositions-et-vos-classes-dassociations#/id/r-7562031" target="_blank">Transformez compositions et vos classes d'associations en BDD</a></h3>

        <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7561936-transformez-vos-compositions-et-vos-classes-dassociations#/id/r-7562042" target="_blank">Transformez vos compositions</a></h4>

        <p>
        Une composition, c’est un cas particulier d’association un-à-plusieurs. Comme nous l’avons vu précédemment, il faut donc ajouter une clé étrangère dans la table qui est du côté « plusieurs »,  cette clé étrangère référence la clé primaire de la table qui est du côté « un ».
        </p>


        <p>
        Mais vous le savez désormais, ce qui différencie une composition d’une simple association un-à-plusieurs, c’est que le composant ne peut exister sans son composite. Ainsi, on identifie un composant à partir de son composite. C’est-à-dire que la clé primaire du composant inclut/comprend obligatoirement le composite.
        </p>

        <p>
        C’est le cas entre une œuvre et sa société de production. Car comme vous l’avez vu précédemment, une œuvre se définit par son titre ET par la société qui l’a produite (car il arrive que deux œuvres aient le même titre).
        </p>

        <p>
        Maintenant que nous avons ajouté une clé étrangère societe_prod dans oeuvre ,qui référence societe_de_production, il est donc possible d’identifier chaque œuvre par son titre et sa société.
        </p>

        <p>
        Ici, societe_prod est à la fois une clé étrangère ET une partie de la clé primaire de oeuvre
        </p>

        <p>
        Une composition est traduite de la même manière qu’une association un-à-plusieurs ; mais en plus, on ajoute à la clé primaire de la table composant la clé étrangère vers la table composite.   
        </p>

        <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7561936-transformez-vos-compositions-et-vos-classes-dassociations#/id/r-7562096" target="_blank">Transformez vos classes d'associations</a></h4>

        <p>
        Une association plusieurs-à-plusieurs avec une classe d’association se traduit en une nouvelle table. Cette table contient tous les attributs de la classe d’association, ainsi que deux clés étrangères référençant les deux tables de part et d’autre de l’association.
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7562106-transformez-vos-relations-d-heritage#/id/r-7562111" target="_blank">Transformez vos relations d’héritage en BDD</a></h3>

        <p>
        Le modèle relationnel n’a pas été pensé pour représenter des relations d’héritage. Il est certes possible de les modéliser, mais cela nécessitera un peu de réflexion de votre part.
        </p>

        <p>
        Il y a  trois manières différentes de traduire une relation d’héritage :
            <ul>
                <li>L’héritage par référence ;</li>
                <li>L’héritage par classe mère ;</li>
                <li>L’héritage par classes filles.</li>
            </ul>
            La méthode la plus fréquente est la transformation de l’héritage par référence, car elle est bien adaptée à la majeure partie des cas de figure.
        </p>

        <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7562106-transformez-vos-relations-d-heritage#/id/r-7562232" target="_blank">Transformez votre héritage par référence</a></h4>

        <p>
        Avec cette méthode, il vous faut créer une table pour la classe mère, et une table par classe fille. Des clés étrangères dans les tables des classes filles permettront de référencer la table de la classe mère. 
        </p>

        <p>
        La clé primaire de chaque table fille doit être la même clé primaire que la table mère. Chacune des clés primaires des tables filles est donc également une clé étrangère qui référence la table mère.
        </p>

        <img src="../images/163438993874_image50.png">

        <p>
        Cette méthode est adaptée à la majeure partie des cas de figure. Utilisez-la donc par défaut. Cependant, dans votre cas, cela implique six tables, et la majeure partie de ces tables n’a pas d’autre attribut que la clé primaire. Elles ne contiennent donc quasiment pas d'information intéressante. La création d’une table par classe fille est donc ici peu adaptée.
        </p>

        <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7562106-transformez-vos-relations-d-heritage#/id/r-7562234" target="_blank">Transformez votre héritage par la classe mère</a></h4>

        <p>
        Avec cette méthode, il n’y a qu’une seule table : celle qui correspond à la classe mère.
        </p>

        <p>
        Elle nécessite donc de regrouper toutes les informations des classes filles dans cette unique table. Tous les attributs des classes filles seront donc réintégrés à la classe mère. En plus, un attribut supplémentaire sera ajouté (appelé attribut de discrimination), qui indique pour chaque ligne à quelle classe fille cette ligne correspond.
        </p>

        <p>
        Cette méthode est particulièrement adaptée quand les classes filles ne contiennent que très peu d’attributs. Dans le cas contraire, la table contiendra beaucoup de colonnes et beaucoup de valeurs NULL.
        </p>

        <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7562106-transformez-vos-relations-d-heritage#/id/r-7562236" target="_blank">Transformez votre héritage par la classe fille</a></h4>

        <p>
        Avec cette méthode, la classe mère ne donne pas lieu à une table. À l’inverse, chaque classe fille est traduite par une table, et chacune de ces tables doit alors reprendre les attributs de la classe mère. 
        </p>

        <p>
        De plus, la clé primaire de chaque table fille doit être la clé primaire de la classe mère. Dans votre cas, chaque table fille aurait donc eu comme clé primaire (titre, societe_prod).
        </p>

        <p>
        Cette méthode est adaptée lorsque la classe mère est abstraite, car l’absence de table correspondant à la classe mère traduit bien de fait qu’il est interdit d’instancier la classe mère.
        </p>

        <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7562106-transformez-vos-relations-d-heritage#/id/r-7562159" target="_blank">Autres alternatives</a></h4>

        <p>
        Le modèle relationnel n’ayant pas été conçu pour gérer efficacement l’héritage, il a été créé une amélioration du modèle relationnel : le modèle objet-relationnel. Il reprend les concepts du modèle relationnel, mais y ajoute quelques notions empruntées à l’orienté objet (qui se modélise par le diagramme de classes UML), comme l’héritage. 
        </p>

        <p>
        Les SGBDR PostgreSQL et Oracle Database savent gérer le relationnel-objet.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6938711-modelisez-vos-bases-de-donnees/7561516-ameliorez-votre-modelisation-grace-aux-formes-normales#/id/video_Player_1" target="_blank">Les formes normales</a></h2>

        <p>
        Il y a toujours plusieurs façons de modéliser des données : certaines sont meilleures que d’autres. L’un des principaux critères est la présence ou non de redondance dans la modèle. Pour nous aider à différencier la qualité de deux modèles donnés, des critères ont été créés, appelés formes normales.
        </p>

        <p>
            ...
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