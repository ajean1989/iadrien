<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>SOLID & DDD</title>
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

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7420376-tirez-le-maximum-de-ce-cours#/id/r-7483756" target="_blank">
        Les principes SOLID</a></h1>

        <p>
        Théorisé en 2002 par Robert C. Martin dans son ouvrage Agile Software Development, Principles, Patterns and Practices, l’acronyme SOLID est un moyen mnémotechnique pour retenir 5 grands principes applicables au développement d’applications logicielles pour les rendre plus faciles à comprendre, à maintenir et à faire évoluer.
        </p>

        <p>
        Ces 5 principes sont :
        <ul>
            <li>S comme Single Responsibility Principle ;</li>
            <li>O comme Open/Closed Principle ;</li>
            <li>L comme Liskov Substitution Principle ;</li>
            <li>I comme Interface Segregation Principle ;</li>
            <li>D comme Dependency Inversion Principle.</li>
        </ul>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7419316-s-comme-single-responsibility-principle#/id/r-7419248" target="_blank">
        S comme Single Responsibility Principle</a></h2>

        <p>
        Le principe SRP pour "Single Responsibility Principle" énonce qu’une classe ne devrait avoir qu’une et une seule raison de changer.
        </p>

        <p>
        L’idée ici est de faire en sorte qu’une classe ne soit responsable que d’une seule fonction de votre application, et que cette responsabilité soit complètement encapsulée ("cachée") dans la classe.
        </p>

        <p>
        La bonne nouvelle de ce principe, c’est qu’il est très simple à mettre en place : il suffit de diviser vos classes en de multiples classes ayant chacune une et une seule responsabilité ! :ange:
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7419380-o-comme-open-closed-principle#/id/r-7458637" target="_blank">
        O comme Open/Closed Principle</a></h2>

        <p>
        Le second principe SOLID est l’"Open/Closed Principle" (OCP) : les classes d’un projet devraient être ouvertes à l’extension, mais fermées à la modification.
        </p>

        <p>
        L’idée de fond derrière ce principe est la suivante : ajouter de nouvelles fonctionnalités ne devrait pas casser les fonctionnalités déjà existantes.
        </p>

        <p>
        En PHP, si une classe n’est pas <code class="line_code">final</code>, vous pouvez l’étendre et donc hériter de ses propriétés, fonctions et constantes publiques.
        </p>

        <p>
        Si par contre, une classe est déclarée <code class="line_code">final</code> (on dit également "complète"), il n’est pas possible de l’étendre, et une erreur fatale sera levée par PHP.
        </p>

        <p>
        Enfin, il existe un type de classe considéré comme "incomplet" par défaut : il s’agit des classes <code class="line_code">abstract</code> (abstraites). Une classe <code class="line_code">abstract</code> ne peut pas être instanciée directement, elle ne peut qu’être héritée. De plus, on peut définir des fonctions abstraites qu’il faudra implémenter dans les classes dites "enfants" :
        </p>

        <figure class="block_code">
                <pre><code><?php echo htmlspecialchars('
<?php

abstract class A
{
    public function helloWorld()
    {
        return \'Hello World\';
    }
    
    abstract public function warning();
}

$a = new A();

// PHP Warning:  Uncaught Error: Cannot instantiate abstract class A

class B extends A
{
    // vide
}

// PHP Fatal error:  Class B contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (A::warning)
')?>
                </code></pre>
            </figure>

        <p>
        Pour résumer, plutôt que de changer le comportement d’une classe existante pour l’adapter à un nouveau besoin, il vaut mieux étendre cette classe et en adapter le comportement : elle est donc ouverte à l’extension et fermée à la modification.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7419475-l-comme-liskov-substitution-principle#/id/r-7458642" target="_blank">
        L comme Liskov Substitution Principle</a></h2>

        <p>
            Il doit être possible de substituer une classe "parente" par l’une de ses classes enfants (on dit aussi "dérivées"). Pour cela, nous devons garantir que les classes enfants auront le même comportement que la classe qu’elles étendent.
        </p>

        <p>
            Le principe de substitution de Liskov respecte une liste de règles strictes. Vous allez découvrir les trois principales.
            <ul>
                <li>Contrôlez les types passés en paramètres de méthodes : Les types de paramètres dans la méthode d’une classe enfant doivent correspondre ou être plus "abstraits" que les types correspondants dans la classe parente.</li>
            </ul>
        </p>

        <figure class="block_code">
                <pre><code><?php echo htmlspecialchars('
<?php

class ParentOrder {}
class Order extends ParentOrder {}

class SubOrder extends Order {}

class Cart
{
    public function getShippingCost(Order $order)
    {
        /*...*/
    }
}

// Mauvaise idée!
class BadSubCart extends Cart
{
    public function getShippingCost(SubOrder $order)
    {
        /*...*/
    }
}

// Bonne idée!
class GoodSubCart extends Cart
{
    public function getShippingCost(ParentOrder $order)
    {
        /*...*/
    }
}
')?>
                </code></pre>
            </figure>

            <ul>
                <li>Contrôlez les types passés en retour de méthodes : Le type de retour d’une méthode d’une classe enfant doit correspondre, ou être un "sous-type" du type de retour de la classe parente (Une classe parente se dit "super class" en anglais, ne soyez pas surpris de tomber sur ce terme quand vous recherchez de l’information sur Internet.).</li>
                <li>Tirez profit des interfaces en programmation orientée objet : Une interface va vous permettre de définir proprement le contrat que doivent respecter les objets qui l’implémentent. De cette façon, il n’est plus possible de se tromper sur les types d’entrée ou de retour de vos fonctions ! L’essentiel des langages de programmation sont capables de contractualiser ces contraintes : pour PHP, c’est depuis la version 7.<br/>
                <code class="line_code">public function getOrder(ShippingType $type) : Order</code><br/>
                Nous précisons que getOrder prend en paramètre un objet <code class="line_code">ShippingType</code> et retourne un objet <code class="line_code">Order</code>.</li>
                <li>Contrôlez les types d’exceptions lancées par les fonctions : Comme pour les types de retours de fonction, cette règle stipule que si une exception est lancée par une classe parente dans certaines conditions, la classe enfant doit également lancer une exception dans ces conditions, et cette exception doit être de même type ou sous-type que l’exception parente.</li>
            </ul>

            <p>
                Pour mettre en pratique le principe de Liskov :
                <ul>
                    <li>Une classe devrait implémenter une interface, notamment si elle a pour objectif d’être étendue. Dans ce cas, les paramètres d’entrée et de retour des méthodes seront contrôlés par PHP.</li>
                    <li>Si nous lançons des exceptions, il vaut mieux avoir une classe d’exception par type d’erreur, puis étendre celle-ci pour chaque cas d’erreur. Nous nous assurons dans ce cas que le code qui dépend de notre implémentation sera en capacité de gérer proprement les cas d’erreur.</li>
                </ul>
            </p>


            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7419513-i-comme-interface-segregation-principle#/id/r-7458652" target="_blank">
            I comme Interface Segregation Principle</a></h2>

            <p>
            Nous pourrions le traduire de cette façon : "Vous ne devriez pas avoir à implémenter des méthodes dont vous n’avez pas besoin." L’idée ici est d’éviter d’avoir des interfaces aux multiples responsabilités et de les redécouper en multiples interfaces qui ont, elles, une seule responsabilité.
            </p>

            <p>
            Finalement, ce principe revisite le premier principe (Single Responsibility Principle), en l’appliquant cette fois à nos interfaces.
            </p>

            <div class="em">Les interfaces objet vous permettent de créer du code qui spécifie quelles méthodes une classe doit implémenter, sans avoir à définir comment ces méthodes fonctionneront. Les interfaces partagent l'espace de nom avec les classes et les traits, donc elles ne peuvent pas utiliser le même nom. En pratique les interfaces servent deux rôles complémentaires : 
                <ul>
                    <li>Permettre aux développeurs de créer des objets de classes différentes qui peuvent être utilisé de façon interchangeable, car elles implémentent la ou les mêmes interfaces. Un exemple commun sont plusieurs services d'accès à des bases de données, plusieurs gestionnaires de paiement ou différentes stratégies de cache. Différentes implémentations peuvent être échangées sans nécessiter des changements dans le code qui les utilisent. </li>
                    <li>Pour permettre à une fonction ou méthode d'accepter et opérer sur un paramètre qui conforme à une interface, sans se soucier de quoi d'autre l'objet peut faire ou comment c'est implémenté. Ces interfaces sont souvent nommées Iterable, Cacheable, Renderable, etc. pour décrire la signification de leur comportemen</li>
                </ul>
            Plus d'infos <a href="https://www.php.net/manual/fr/language.oop5.interfaces.php">ici</a> </div>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7419576-d-comme-dependency-inversion-principle#/id/r-7458657" target="_blank">
            D comme Dependency Inversion Principle</a></h2>

            <p>
            Je vous partage l’interprétation complète de ce principe : les classes de haut niveau ne devraient pas dépendre directement des classes de bas niveau, mais d’abstractions.
            </p>

            <p>
            Quand on conçoit un logiciel en programmation orientée objet, on peut faire la distinction entre deux types de classes :
            <ul>
                <li>Les classes de bas niveau qui implémentent des fonctionnalités de base : écrire dans un fichier, se connecter à une base de données, retourner une réponse HTTP...</li>
                <li>Les classes de haut niveau qui concernent le métier de vos applications (ce que l’on appelle communément la "business logic") : la gestion des coûts de livraison, par exemple.</li>
            </ul>
            </p>

            <p>
            Puisque vos classes de haut niveau auront besoin de classes bas niveau, vous aurez commencé par écrire les classes de bas niveau en premier. Le problème de cette approche est que vos classes de haut niveau ont tendance à dépendre directement des classes de bas niveau.
            </p>

            <p>
            Par exemple, prenons l’exemple d’une classe UserRepository dont la responsabilité est de récupérer une liste d’utilisateurs. Pour cela, nous avons développé une classe Database capable de faire des requêtes à la base de données.
            </p>

            <figure class="block_code">
                <pre><code><?php echo htmlspecialchars('
<?php

use Database;
use User;

class UserRepository
{
    private $database;

    public function __contruct(Database $database)
    {
        $this->database = $database;
    }

    public function getAll()
    {
        $users = [];
        $results = $this->database
            ->execute(\'SELECT * FROM users\')
            ->fetchAll()
        ;
        
        foreach($results as $result) {
            $users[] = new User($result);
        }
        
        return $users;
    }
}
')?>
                </code></pre>
            </figure>

            <p>
            C’est problématique, car si un jour nous voulons utiliser autre chose qu’une base de données pour retrouver les utilisateurs (disons une API REST), nous serons obligés de changer le code de cette classe (ce qui est incompatible avec le principe "Open Closed Principle").
            </p>

            <p>
            La solution consiste à inverser le sens de la dépendance, à faire en sorte que ce soient les classes de bas niveau qui dépendent d’abstractions !
            </p>

            <p>
            Et des abstractions, vous en connaissez au moins deux : les classes abstraites et les interfaces. :magicien:
            </p>

            <p>
            La solution pour régler ce problème de conception est simple : nous allons créer une interface de haut niveau que nos classes de bas niveau devront implémenter.
            </p>

            <p>
            Mettons à jour le code précédent en commençant par définir une nouvelle interface indiquant qu'une classe de type  DatabaseInterface  doit au moins permettre d'exécuter une requête et de récupérer des données :
            </p>

            <figure class="block_code">
                <pre><code><?php echo htmlspecialchars('
<?php

interface DatabaseInterface
{
    public function execute($query) : self;
    
    public function fetchAll() : array;
}
')?>
                </code></pre>
            </figure>

            <p>
            Maintenant, notre classe bas niveau peut implémenter l’interface (nous allons la renommer au passage) :
            </p>

            <figure class="block_code">
                <pre><code><?php echo htmlspecialchars('
<?php

use DatabaseInterface;

class MySQL implements DatabaseInterface
{
    public function execute($query)
    {
        /*...*/
    }

    public function fetchAll()
    {
         /*...*/       
    }
}
')?>
                </code></pre>
            </figure>

            <p>
            Et voici le code de la classe d’exemple mis à jour !
            </p>

            <figure class="block_code">
                <pre><code><?php echo htmlspecialchars('
<?php

use DatabaseInterface;
use User;

class UserRepository
{
    private $database;

    public function __contruct(DatabaseInterface $database)
    {
        $this->database = $database;
    }

    public function getAll()
    {
        $users = [];
        $results = $this->database
            ->execute(\'SELECT * FROM users\')
            ->fetchAll()
        ;
        
        foreach($results as $result) {
            $users[] = new User($result);
        }
        
        return $users;
    }
}

$userMySQLRepository = new UserRepository(new MySQL());
$userRestApiRepository = new UserRepository(new RestApiClient());
')?>
                </code></pre>
            </figure>

            <p>
            Avant, c’était la classe de haut niveau qui devait respecter l’implémentation des fonctions de bas niveau. Et maintenant, ce sont les classes de bas niveau qui vont devoir respecter les contraintes des classes de haut niveau. Comme vous le voyez dans l’exemple mis à jour, cela nous permet d’imaginer le support de plusieurs systèmes de persistance, comme l’appel à une API REST.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7419681-identifiez-les-mauvaises-pratiques-de-conception-avec-stupid#/id/r-7458662" target="_blank">
            Identifiez les mauvaises pratiques de conception avec STUPID</a></h1>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7419681-identifiez-les-mauvaises-pratiques-de-conception-avec-stupid#/id/r-7419578" target="_blank">
            S comme Singleton</a></h2>

            <p>
            En programmation orientée objet, un Singleton est une classe dont on limite le potentiel d’instanciation. En effet, un Singleton n’est instanciable qu’une seule fois.
            </p>

            <p>
            Le Singleton pose trois problèmes. Tout d’abord, bien que ce soit son objectif (et nous reviendrons en détail sur le Singleton dans un futur chapitre), n’avoir qu’une seule instance de classe possible est contre-productif. Après tout, une classe est un plan de construction d’un objet, quel est donc l’intérêt de limiter la production de ses objets ?
            </p>

            <p>
            Le deuxième problème que pose le Singleton, c’est que le constructeur de classe étant privé, on ne peut pas injecter de dépendances. La classe Database de notre projet utilise des variables globales à tout le projet, ce qui n’est pas très SOLID.
            </p>

            <p>
            Le troisième problème que pose le Singleton (et nous l’avons vu précédemment), c’est qu’un Singleton introduit un couplage fort dans la classe où il est appelé. En effet, vu qu’il est utilisé à l’aide d’une fonction statique, il n’est généralement pas injecté en constructeur de la classe qui en a besoin. Et ça non plus, ce n’est pas très SOLID.
            </p>

            <p>
            Dans la plupart des applications, vous ne devriez pas utiliser de Singleton. Nous reviendrons sur les intérêts de ce design pattern dans la prochaine partie de ce cours.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7419681-identifiez-les-mauvaises-pratiques-de-conception-avec-stupid#/id/r-7419578" target="_blank">
            T comme Tight Coupling</a></h2>

            <p>
            En programmation orientée objet, le couplage fort définit une relation entre deux objets. Si l’utilisation d’un objet nécessite la création ou l’utilisation d’un autre objet, alors ils sont dits "fortement couplés".
            </p>

            <p>
            Nous l’avons vu dans les pratiques SOLID, retirer le couplage "fort" est relativement facile : il suffit de faire dépendre les objets d’abstractions – comme les interfaces – plutôt que de classes concrètes.
            </p>

            <p>
            De manière générale, un couplage fort va limiter l’extensibilité de vos applications et la réutilisation de vos classes. Si deux classes sont fortement liées, elles vont devoir évoluer en même temps (ce qui est une violation du premier principe SOLID, rappelez-vous).
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7419681-identifiez-les-mauvaises-pratiques-de-conception-avec-stupid#/id/r-7419621" target="_blank">
            U comme Untestability</a></h2>

            <p>
            Si la création de tests unitaires est compliquée et que vos tests ont tendance à dépendre les uns des autres, c’est probablement que votre code a besoin d’être refactorisé.
            </p>

            <p>
            Ce cours n’a pas pour objet le test ou l’intérêt des tests. Cela dit, les tests unitaires permettent de confirmer que vos classes fonctionnent comme prévu. Ils permettent également de commencer à refactoriser ("réusiner", donc :D) votre projet sans prendre le risque d’introduire des bugs. Il faut les voir comme une tâche qui va améliorer votre productivité et votre capacité à faire évoluer vos applications. C’est donc un investissement et certainement pas une tâche supplémentaire, du même ordre que travailler avec un IDE (environnement de développement intégré) vous fait gagner du temps par rapport à l’utilisation d’un logiciel comme Notepad.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7419681-identifiez-les-mauvaises-pratiques-de-conception-avec-stupid#/id/r-7419621" target="_blank">
            P comme Premature Optimization</a></h2>

            <p>
            Très souvent, améliorer la performance de son code revient à établir un compromis entre performance et lisibilité du code : plus le code est proche du langage machine, plus il est optimisé. En revanche, plus il est proche du langage machine, moins il est compréhensible par les êtres humains. La performance est un sujet important, mais il faut la relativiser : quand on voit que le prix d’un bon serveur à l’année coûte moins cher qu’une journée de consulting d’un développeur, il faut se garder de penser d’abord à l’optimisation.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7419681-identifiez-les-mauvaises-pratiques-de-conception-avec-stupid#/id/r-7419651" target="_blank">
            I comme Indescriptive Naming</a></h2>

            <p>
            Pour les mêmes raisons que précédemment, soyez rigoureux dans le nommage de vos variables, fonctions et classes !
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7415611-ecrivez-du-php-maintenable-avec-les-principes-solid-et-les-design-patterns/7419681-identifiez-les-mauvaises-pratiques-de-conception-avec-stupid#/id/r-7419664" target="_blank">
            D comme Duplication</a></h2>

            <p>
            Les duplications de code dans votre projet sont rarement une bonne chose, car il est probable que corriger un bug d’un côté implique de le corriger de l’autre. Et cela n’est pas très SOLID, rappelez-vous.
            </p>

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
                <li>le <strong>programme affiche la <strong>page de recherche</strong> ;</li>
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