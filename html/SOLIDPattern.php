<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Sécurité</title>
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