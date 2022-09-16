<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Symfony</title>
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

    	<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/7171301-installez-symfony-5" target="_blank">Installer Symfony</a></h1>

        <p>
            Symfony s'installe grâce à composer.
        </p>

        <p>
        Depuis la version 4 du framework Symfony, il n'y a plus vraiment de distribution officielle.
        </p>

        <p>
        La vision de l'équipe qui maintient le projet, c'est de fournir des squelettes applicatifs légers, et de laisser la responsabilité aux développeurs de décider quelles dépendances sont nécessaires dans leurs applications.
        </p>

        <p>
        Officiellement, il existe deux squelettes applicatifs :
        </p>

        <p>
            <ul>
                <li><strong>skeleton</strong>: le squelette minimaliste pour démarrer un projet PHP, il est recommandé pour des applications en ligne de commande, par exemple.</li>
                <li><strong>website-skeleton</strong>: le squelette recommandé pour faire des projets web, que je vous recommande comme base de travail.</li>
            </ul>
        </p>

        <p>
        Pour installer ces squelettes, l'option recommandée est d'utiliser un logiciel appelé <a href="https://symfony.com/download">Symfony CLI</a>.
        </p>

        <p>
        Ce logiciel fournit trois fonctionnalités :
        <ul>
            <li>La création d'applications Symfony à partir des squelettes applicatifs ;</li>
            <li>Un serveur local pour exécuter votre projet sur votre poste ;</li>
            <li>Un outil pour vérifier les problèmes de sécurité (que l'on abordera dans le chapitre "Qu'est-ce qu'un code de qualité ?")</li>
        </ul>
        </p>

        <p>
        L'installation du squelette "Website Skeleton" se fait à l'aide de Symfony CLI :
        </p>

        <figure class="block_code">
                <pre><code>
symfony new --full mon-super-projet
            </code></pre>
        </figure>

        <p>
            Cela créé un dossier dans le chemin de notre ligne de commande avec des fichiers de config.
        </p>

        <p>
        Si en production on utilise un serveur web comme Apache ou Nginx, en développement, nous pouvons utiliser le serveur local de PHP. Pour cela, le framework fournit une console dédiée :
        </p>

        <figure class="block_code">
                <pre><code>
cd mon-super-projet
symfony server:start
            </code></pre>
        </figure>

        <p>
        Accessible ensuite par : http://127.0.0.1:8000 . 
        Par défaut, puisque vous n'avez aucun contrôleur ni aucune route configurée, le framework vous présente une page avec un lien vers la documentation officielle.
        </p>

        <p>
            Il est important d'avoir une vision d'ensemble du framework et une explication de chaque dossier :
        </p>

        <p>
            <ul>
                <li><strong>Le dossier "bin"</strong> : Ce dossier contient les exécutables disponibles dans le projet, que ce soit ceux fournis avec le framework (la console Symfony) ou ceux des dépendances (phpunit, simple-phpunit, php-cs-fixer, phpstan).</li>
                <li><strong>Le dossier "config"</strong> : Ce dossier a fait l'objet d'un chapitre complet de ce cours. Il contient toute la configuration de votre application, que ce soit le framework, les dépendances (Doctrine, Twig, Monolog) ou encore les routes. Ne pas oublier qu'il est possible d'adapter la configuration du framework en fonction de l'environnement, et qu'une partie de la configuration se trouve aussi dans le fichier .env du projet.</li>
                <li><strong>Le dossier "public"</strong> : Par défaut, il ne contient que le contrôleur frontal de votre application, le fichier dont la responsabilité est de recevoir toutes les requêtes des utilisateurs. Seul ce dossier doit être accessible de l'extérieur.</li>
                <li><strong>Le dossier "migrations"</strong> : Dans ce dossier et si vous manipulez une base de données, alors vous trouverez les migrations de votre projet générées à chaque changement que vous effectuerez sur votre base de données à l'aide de l'ORM Doctrine. Nous reviendrons sur ce dossier dans le chapitre "Gérez votre base de données avec Doctrine ORM".</li>
                <li><strong>Le dossier "src"</strong> : C'est ici que se trouve votre application ! Contrôleurs, formulaires, écouteurs d'événements, modèles et tous vos services doivent se trouver dans ce dossier. C'est également dans ce dossier que se trouve le "moteur" de votre application, le kernel. Si vous conservez cette architecture, vos services seront correctement autoconfigurés et construits. Sinon, vous devrez adapter la configuration fournie par défaut.</li>
                <li><strong>Le dossier "tests"</strong> : Dans ce dossier se trouvent les tests unitaires, d'intégration et d'interfaces. Par défaut, l'espace de nom du dossier tests est <code class="line_code">App\Tests</code> et celui du dossier src est <code class="line_code">App</code>.</li>
                <li><strong>Le dossier "templates"</strong> : Ce dossier contient les gabarits qui sont utilisés dans votre projet. Par exemple, si dans un contrôleur on fait : <code class="line_code">$this->render('foo.html.twig');</code>, alors le gabarit sera localisé dans le dossier templates <code class="line_code">templates/foo.html.twig</code>.</li>
                <li><strong>Le dossier "translations"</strong> : Si ce sujet n'a pas été abordé dans ce cours, Symfony fournit un composant appelé Translation capable de gérer de nombreux formats de traductions, dont les formats yaml, xliff, po, mo... Ces fichiers seront situés dans ce dossier.</li>
                <li><strong>Le dossier "var"</strong> : Ce dossier contient trois choses principalement : 
                <ul>
                    <li>les fichiers de cache dans le dossier cache ;</li>
                    <li>les fichiers de log dans le dossier log ;</li>
                    <li>et parfois, si le framework est configuré pour gérer les sessions PHP dans le système de fichiers, on trouve le dossier sessions.</li>
                </ul>
                Les fichiers de cache et de log sont créés en fonction de l'environnement exécuté : cache/dev. log/dev.log</li>
                <li><strong>Le dossier "vendor"</strong> : Ce dossier contient votre chargeur de dépendances (ou "autoloader") et l'ensemble des dépendances de votre projet PHP installées à l'aide de Composer. Une autre façon de découvrir vos dépendances est d'utiliser la commande "composer show".</li>
            </ul>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/7171301-installez-symfony-5#/id/r-7171411" target="_blank">Introduction à Symfony Flex</a></h2>

        <p>
        D’un point de vue technique, Symfony Flex est juste un plugin Composer. Flex est capable d'écouter les événements Composer, que ce soit l'installation, la mise à jour ou encore la suppression d'une dépendance.
        </p>

        <p>
        Parmi les tâches qu'il est capable de réaliser :
            <ul>
                <li>appliquer une configuration par défaut pour un plugin Symfony ;</li>
                <li>créer des fichiers/dossiers ;</li>
                <li>mettre à jour de fichiers (par exemple le fichier config/bundles.php).</li>
            </ul> 
        </p>

        <p>
        Pour cela, Symfony Flex fonctionne à l'aide d'un système de "recettes" qui sont disponibles dans deux dépôts : un dépôt officiel maintenu par l'équipe Symfony et un dépôt communautaire ouvert à tous les mainteneurs de bundles, librairies et projets.
        </p>

        <p>
        Si Flex vous intéresse, il existe <a href="https://afsy.fr/avent/2017/08-symfony-flex-la-nouvelle-facon-de-developper-avec-symfony"> un article complet écrit en français</a> mis à disposition par l'AFSY, l'Association Française des développeurs SYmfony.
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5489663-realisez-votre-premiere-page#/id/video_Player_1" target="_blank">Introduction</a></h1>

        <p>
        Symfony est un framework basé sur le processus HTTP requête/réponse. Mais comment cela fonctionne-t-il ? Ensemble, nous allons reprendre ce paradigme fondamental du web et voir comment il est intégré par le framework.
        </p>

        <p>
        Le framework Symfony, et notamment son composant <a href="https://symfony.com/doc/current/components/http_foundation.html">HttpFoundation</a>, apporte une couche d'abstraction pour la requête et la réponse, simple à utiliser et à manipuler.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5489663-realisez-votre-premiere-page#/id/r-5522569" target="_blank">La classe Request</a></h2>

        <p>
        La classe <a href="https://symfony.com/doc/current/introduction/http_fundamentals.html#symfony-request-object">Request</a> permet de centraliser l'accès à toutes les super variables de PHP en une seule classe utilitaire.
        </p>

        <figure class="block_code">
                <pre><code>
use Symfony\Component\HttpFoundation\Request;

// Récupération des valeurs accessibles dans les super variables
$request = Request::createFromGlobals();

// Récupérer l'url
$request->getPathInfo();

// récupérer des attributs en GET ou POST
$request->query->get('name');
$request->request->get('name', 'nom par défaut');

$request->getMethod();    // e.g. GET, POST, PUT, DELETE ou HEAD

            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5489663-realisez-votre-premiere-page#/id/r-7171459" target="_blank">La classe Response</a></h2>

        <p>
        La classe <a href="https://symfony.com/doc/current/introduction/http_fundamentals.html#symfony-response-object">Response</a> permet de retourner une réponse à l'utilisateur valide en termes de langage HTTP.
        </p>

        <figure class="block_code">
                <pre><code>
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$name = $request->get('name');
$response = new Response();

$response->setContent(
    '&lthtml&gt&ltbody&gtHello'
    . $name
    .'&lt/body&gt&lt/html&gt'
);
$response->setStatusCode(Response::HTTP_OK);
$response->headers->set('Content-Type', 'text/html');

// Retourne une réponse HTTP valide
$response->send();
            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5489663-realisez-votre-premiere-page#/id/r-5522896" target="_blank">Le routing</a></h2>

        <p>
        La responsabilité de lier une URL à une action PHP revient au composant <a href="https://symfony.com/doc/current/routing.html">Routing</a> qui est disponible dans le framework. Le composant Routing est très puissant et supporte de nombreux formats de déclaration : PHP, bien sûr, mais également XML, YAML ou les annotations qui sont le format recommandé que nous utiliserons. Voici un exemple :
        </p>

        <figure class="block_code">
                <pre><code>
// src/Controller/HelloController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * Page d'accueil
     * 
     * @Route('/home', name='accueil')
     */
    public function home()
    {
        return new Response(" Bienvenue sur la page d'accueil ! ");
    }

    /**
     * Page d'accès à un article
     * 
     * @Route('/article/{articleId}', name='show-article')
     */
    public function show($articleId)
    {
        // Nous retrouvons la valeur de la variable $articleId à partir de l'URI
        // Par exemple /article/1234 => $articleId = '1234'

        return new Response(" Voici le contenu de l'article avec l'ID $articleId ");
    }
}

            </code></pre>
        </figure>

        <p>
        Ici, l'annotation Route s'utilise dans un bloc de commentaire particulier (il commence par 2 astérisques) et permet de définir les paramètres et contraintes de la route pour laquelle l'action (ici <code class="line_code">home()</code> ou <code class="line_code">showBlogPost($articleId)</code>) se déclenchera.
        </p>

        <p>
        Le premier argument est la route en elle-même qui accepte des expressions régulières très puissantes !
        </p>

        <p>
        Par exemple, reprenons et améliorons l'exemple précédent :
        </p>

        <figure class="block_code">
                <pre><code>
/**
 * @Route(
 *  "/article/{articleId<\d+>}",
 *  name="show-article",
 *  methods={"GET"}
 * )
 */
public function show($articleId = 1)
{
    // ...
}
            </code></pre>
        </figure>

        <p>
        Nous venons de définir les pré-requis complémentaires suivants :
        <ul>
            <li>la valeur de $articleId passé en paramètre de l’URL doit forcément être un entier supérieur ;</li>
            <li>la valeur par défaut si non trouvé est 1 ;</li>
            <li>et la méthode d'accès HTTP doit être GET.</li>
        </ul>
        </p>

        <p>
        Le composant Routing de Symfony a de très nombreuses fonctionnalités, et parmi elles, une bonne gestion des URL pour l'internationalisation, par exemple. Consultez la <a href="https://symfony.com/doc/current/routing.html#localized-routing-i18n">documentation officielle</a> pour en savoir plus !
        </p>

        <p>
        Mais ce qu'il manque ici pour bien comprendre ce qu'il se passe "sous le capot", c'est comment un contrôleur Symfony va avoir accès à la requête de l'utilisateur. Car, contrairement à l'exemple utilisant PHP, les contrôleurs Symfony ne sont pas des contrôleurs frontaux, ils ne sont pas en charge d'écouter directement la requête utilisateur.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5489663-realisez-votre-premiere-page#/id/r-5537285" target="_blank">Le contrôleur front de Symfony</a></h2>

        <p>
        Pour créer un contrôleur front avec Symfony, nous devons utiliser un composant appelé <a href="https://symfony.com/doc/current/components/http_kernel.html">HttpKernel</a> qui utilise le composant HttpFoundation que nous venons de voir pour :
            <ul>
                <li>écouter une requête ;</li>
                <li>et retourner une réponse.</li>
            </ul>
        </p>

        <figure class="block_code">
                <pre><code>
use Symfony\Component\HttpFoundation\Request;

require __DIR__.'/../vendor/autoload.php';

$environment = 'prod';
$debugEnabled = false;

$kernel = new AppKernel($environment, $debugEnabled);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);

            </code></pre>
        </figure>

        <p>
        C'est ce kernel qui - entre autres responsabilités que l'on découvrira ensemble lors de ce cours - appellera la bonne action de contrôleur et retournera une réponse à l'utilisateur.
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5516991-realisez-une-application-configurable-et-extensible#/id/r-5537336" target="_blank">Le  container de services</a></h1>

        <p>
        Le composant Dependency Injection est fourni avec un container de services. Mais qu'est-ce qu'un service ?
        </p>

        <p>
        Un service est tout simplement un objet qui est utilisé dans votre projet et auquel vous avez besoin d'accéder. Ce service est enregistré dans un container, ainsi que sa "recette de cuisine", ou plutôt, ainsi que les étapes nécessaires à sa construction : dépendances, méthodes et arguments à appeler.
        </p>

        <p>
        Prenons un exemple avec un objet un peu complexe à construire :
        </p>

        <figure class="block_code">
                <pre><code>
// src/Services/ComplexObject.php
namespace App\Services;

class ComplexObject
{
    private $foo;
    private $bar;
    private $baz;
    private $other;
    
    public function __construct(
        Foo $foo,
        Bar $bar,
        Baz $baz,
        Other $other
    )
    {
        $this->foo = $foo;
        $this->bar = $bar;
        $this->baz = $baz;
        $this->other = $other;
    }

    public function doSomething() {
        // ...
    }
}
            </code></pre>
        </figure>

        <p>
        Vous venez pourtant ici de créer votre premier service, félicitations !
        </p>

        <p>
        Pour vérifier qu'un service est bien disponible, la console de Symfony a une commande dédiée : debug:container App\Services\ComplexObject
        </p>


        <p>
        Et ce n'est pas tout, puisque le service est présent dans le container de services, on peut l'injecter sans crainte dans nos classes ! Par exemple, imaginons que vous vouliez utiliser cet objet dans un contrôleur vu précédemment :
        </p>

        <figure class="block_code">
                <pre><code>
// src/Controller/HelloController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * Page d'accueil
     *
     * @Route("/", name="accueil")
     */
    public function home(ComplexObject $complexObject)
    {
        // $complexObject->doSomething();
    }
}
            </code></pre>
        </figure>

        <p>
        Mais comment est-ce possible ? Nous n'avons absolument rien fait d'autre que déclarer notre objet ! 
        </p>

        <p>
        C'est grâce à l'une des fonctionnalités les plus utiles du container de services : l'autowiring (ou autrement dit, l'autochargement des classes) !
        </p>

        <p>
        Cette fonctionnalité est activée par défaut dans tout projet Symfony 4. Dans le fichier services.yaml, vous retrouverez la déclaration suivante ( <a href="https://symfony.com/doc/current/components/yaml/yaml_format.html">doc de yalm (format de configuration)</a> ) :
        </p>

        <figure class="block_code">
                <pre><code>
# config/services.yaml
services:
    _defaults:
        # Ajoute automatiquement les dépendances à vos objets
        autowire: true
            </code></pre>
        </figure>

        <p>
        Tous les arguments qui sont des objets typés de la fonction <code class="line_code">__construct()</code> seront automatiquement passés à ce service s'ils sont disponibles dans le container de services.
        </p>

        <p>
        Dans votre projet, le framework va parcourir l'ensemble des ressources (ou chemins) définies :
        </p>

        <figure class="block_code">
                <pre><code>
services:
    # Rend chaque classe disponible dans src/ disponible en tant que service
    App\:
        resource: '../src/*'
        exclude: '../src/{Entity,Migrations,Tests,Kernel.php}'
            </code></pre>
        </figure>

        <p>
        Vous pouvez déclarer une autre ressource ou encore la classe seule :
        </p>

        <figure class="block_code">
                <pre><code>
services:
    # Toutes les classes d'une dépendance Composer
    OtherLibrary\:
        resource: '../vendor/a/b/c'

    # Seulement une classe, tant qu'elle est trouvée par Composer.
    OtherLibrary\MyClass:
            </code></pre>
        </figure>

        <p>
        Mais parfois, j'ai besoin de passer autre chose que des objets en constructeur, des tableaux ou une simple valeur de configuration : comment faire ?
        </p>

        <p>
        Imaginons que l'on ait besoin d'un e-mail administrateur pour recevoir des e-mails en cas d'erreur :
        </p>

        <figure class="block_code">
                <pre><code>
// src/Services/MailLogger
namespace App\Services;

class MailLogger
{
    private $adminEmail;

    public function __construct($adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function sendMail()
    {
        /* ... */    
    }
}
            </code></pre>
        </figure>

        <p>
Dans ce cas, le framework Symfony n'est pas capable de retrouver la valeur de la variable $adminEmail, nous devons la déclarer manuellement, soit seulement pour ce service, soit globalement :
        </p>

        <figure class="block_code">
                <pre><code>
# config/services.yaml
services:
    # Disponible seulement pour ce service
    App\Services\MailLogger:
        arguments:
            $adminEmail: 'admin@openclassrooms.com'
    
    # Déclaration globale à tous les services
    # déclarés dans ce fichier
    _defaults:
        bind:
            $adminEmail: 'admin@openclassrooms.com'
            </code></pre>
        </figure>

        <p>
        Et encore mieux, le container de services est également capable de contenir des paramètres. Adaptons l'exemple précédent :
        </p>

        <figure class="block_code">
                <pre><code>
# config/services.yaml
parameters:
    admin_email: 'admin@openclassrooms.com'

# Suffisant pour que le MailLogger soit bien instancié.
services:
    _defaults:
        bind:
            $adminEmail: '%admin_email%'
            </code></pre>
        </figure>

        <p>
        Avec toutes ces informations, vous serez maintenant capables de construire vos objets proprement et d'y accéder n'importe où dans votre projet Symfony.
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5516991-realisez-une-application-configurable-et-extensible#/id/r-5537339" target="_blank">Étendez votre application grâce aux événements natifs</a></h1>

        <p>
        Nous allons utiliser le composant <a href="https://symfony.com/doc/current/components/event_dispatcher.html">EventDispatcher</a> qui implémente deux patterns de programmation objet : Observateur et Mediateur.
        </p>

        <p>
        Une application Symfony dispose d'un répartiteur d'événements qui va envoyer une série d'événements natifs et métiers. Ensuite, des objets, qui peuvent être des écouteurs ou encore des souscripteurs d'événements, peuvent écouter ces événements et exécuter des fonctions à partir de données qui sont transmises par l'événement.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5516991-realisez-une-application-configurable-et-extensible#/id/r-5541759" target="_blank">EventDispatcher </a></h2>
        
        <p>
            <ul>
                <li>Écouteur 1 écoute l'événement 1, écouteur 2 l'événement 2, et le souscripteur l'événement 3.</li>
                <li>Les 3 "écouteurs" (2 écouteurs, 1 souscripteur) ont été ajoutés au répartiteur d'événements (ou encore "EventDispatcher").</li>
                <li>Quand le répartiteur envoie les événements, il donne l'information aux écouteurs qui peuvent donc réaliser des actions au bon moment sans pour autant avoir connaissance des autres écouteurs.</li>
            </ul>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5516991-realisez-une-application-configurable-et-extensible#/id/r-5542745" target="_blank">Créez un écouteur d'événements</a></h2>

        <p>
        Un écouteur d'événements est une simple classe PHP disposant de fonctions publiques qui prennent en argument l'événement écouté.
        </p>

        <p>
        Par exemple, cette classe est un écouteur d'événement valide :
        </p>

        <figure class="block_code">
                <pre><code>
// src/EventListener/ExceptionListener.php
namespace App\EventListener;

use Some\Events\FooEvent;

class BarListener
{
    public function doSomething(FooEvent $event)
    {
        /* ... */
    }
}
            </code></pre>
        </figure>

        <p>
        Pour qu'il soit considéré comme écouteur par le répartiteur d'événements, nous devons enregistrer le service avec un "tag" particulier :
        </p>

        <figure class="block_code">
                <pre><code>
# config/services.yaml
services:
    App\EventListener\BarListener:
        tags:
            - { name: kernel.event_listener, event: foo, method: doSomething }
            </code></pre>
        </figure>

        <p>
        Détaillons cette configuration :
            <ul>
                <li>Tout d'abord, le name du tag "kernel.event_listener" est propre au framework. Tagger ce service permet de le déclarer en tant qu'écouteur.</li>
                <li>Ensuite, l'event est le nom de l'événement qui sera envoyé par le répartiteur.</li>
                <li>Enfin, la method permet de spécifier quelle méthode de la classe sera exécutée. Il est possible également de ne pas la déclarer si l'on utilise la syntaxe suivante : "on" + "nom de l'événement en CamelCase" (ex. : onFoo(FooEvent $event)).</li>
            </ul>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5516991-realisez-une-application-configurable-et-extensible#/id/r-5542746" target="_blank">Les souscripteurs d'événements</a></h2>

        <p>
        Une autre façon de réagir à un événement est d'utiliser un souscripteur d'événements.
        </p>

        <p>
        Le souscripteur d'événements est mieux adapté pour écouter de multiples événements, et il contient la liste des événements à écouter. La classe doit impérativement implémenter l'interface <code class="line_code">Symfony\Component\EventDispatcher\EventSubscriberInterface</code> :
        </p>

        <figure class="block_code">
                <pre><code>
// src/EventSubscriber/ExceptionSubscriber.php
namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use App\Events\FooEvent;
use App\Events\BarEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class ExceptionSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        // Liste des évènements, méthodes et priorités
        return [
           'foo' => [
               ['doSomething', 10],
               ['doOtherThing', 0],
           ],
           'bar' => [
               ['doBarThing', -10]
            ],
        ];
    }

    public function doSomething(FooEvent $event) {}

    public function doOtherThing(FooEvent $event) {}

    public function doBarThing(BarEvent $event) {}
}
            </code></pre>
        </figure>

        <p>
        Et... c'est tout ! Parce que la classe implémente une interface particulière du framework Symfony, le container de services a automatiquement ajouté le tag "kernel.event_subscriber" et déclaré la classe en tant que souscripteur d'événements. Super, non ?
        </p>

        <p>
        C'est ce que l'on appelle l'autoconfiguration de services, qui est activée par défaut en Symfony 4 : vérifiez la valeur de la propriété autoconfigure dans votre configuration.
        </p>

        <p>
        Euh, mais pourquoi a-t-on des valeurs numériques comme 10, 0 ou -10 dans le souscripteur d'événement ? :-°
        </p>

        <p>
        C'est une propriété facultative d'un écouteur. Imaginons que 3 écouteurs écoutent le même événement, comment savoir lequel écoutera le premier ? Et si l'ordre importe pour vous ? Il suffira alors de déclarer une priorité, sachant que la plus forte valeur l'emporte et que la valeur par défaut est 0.
        </p>


        <p>
        Cette propriété est aussi disponible pour les écouteurs d'événements. Reprenons l'exemple précédent avec une priorité de 999 :
        </p>

        <figure class="block_code">
                <pre><code>
                # config/services.yaml
services:
    App\EventListener\BarListener:
        tags:
            - { name: kernel.event_listener, event: foo, method: doSomething, priority: 999 }
            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5516991-realisez-une-application-configurable-et-extensible#/id/r-5542835" target="_blank">Cycle de vie d'une application Symfony</a></h2>

        <p>
        Nous l'avons vu dans le chapitre précédent : le framework Symfony est construit autour du principe requête/réponse. Pour parvenir à retourner une réponse, l'application traite la requête, recherche le contrôleur et l'action à partir de l’URL, va construire une page à partir d'un template, etc.
        </p>

        <p>
        Dans le cycle de vie d'une application Symfony, de nombreux événements sont disponibles pour vous permettre d'altérer le comportement de l'application. Parmi les plus utiles :
        <ul>
            <li><strong>kernel.request</strong> : envoyé avant que le contrôleur ne soit déterminé, au plus tôt dans le cycle de vie.</li>
            <li><strong>kernel.controller</strong> : envoyé après détermination du contrôleur, mais avant son exécution.</li>
            <li><strong>kernel.response</strong> : envoyé après que le contrôleur retourne un objet Response.</li>
            <li><strong>kernel.terminate</strong> : envoyé après que la réponse est envoyée à l'utilisateur.</li>
            <li><strong>kernel.exception</strong> : envoyé si une exception est lancée par l'application.</li>
        </ul>
        Chacun de ces événements va retourner une instance particulière de KernelEvent. Par exemple écouter kernel.request permet d'accéder à la requête à partir de l'événement, kernel.controller au contrôleur déterminé, kernel.exception à l'exception...<br>
        Retrouvez l'ensemble des événements natifs dans<a href="https://symfony.com/doc/current/reference/events.html"> la documentation officielle !</a>
        </p>

        <p>
        Voici un exemple d'application très simple : l'envoi d'un e-mail à un utilisateur qui aurait acheté un produit sur un site e-commerce.
        </p>

        <p>
        <figure class="block_code">
                <pre><code>
// src/EventSubscriber/SummaryMailSubscriber
namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class SummaryMailSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            // 'kernel.terminate'
            KernelEvents::TERMINATE => [
                ['sendProductPaidMail', 0],
            ];
        ];
    }

    public function sendProductPaidMail(PostResponseEvent $event)
    {
        // envoi de l'email
    }
}
            </code></pre>
        </figure>
        </p>

        <p>
        Un envoi d'e-mail, qui peut être long et bloquer l'envoi de la réponse, a donc été "repoussé" après que l'application a retourné une réponse à l'utilisateur.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5516991-realisez-une-application-configurable-et-extensible#/id/r-5537341" target="_blank">Créez et déployez des événements spécifiques</a></h2>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5516996-deboguez-votre-application-a-l-aide-du-web-profiler#/id/video_Player_1" target="_blank">Déboguez votre application à l’aide du Web Profiler</a></h1>

        <p>
        Le Profileur Web est une application délivrée avec le framework Symfony uniquement disponible en environnement de développement... mais qu'est-ce qu'un environnement ?
        </p>

        <p>
        L'environnement correspond à la configuration sélectionnée lors de l'exécution de l'application, et par défaut, Symfony en fournit trois : "prod", "dev" et "test", et <a href="https://symfony.com/doc/current/configuration.html#creating-a-new-environment"> vous pouvez en créer autant que vous le souhaitez</a>.
        </p>

        <p>
        Ce qu'il est important de retenir ici, c'est qu'une configuration spécifique de l'application sera chargée en fonction de l'environnement sélectionné.
        </p>

        <p>
        Comment sélectionne-t-on un environnement?
        À la racine de votre projet, vous retrouvez un fichier appelé .env qui contient les variables d'environnement qui seront disponibles dans votre application. Les deux variables qui nous intéressent ici se nomment  APP_ENV  et  APP_DEBUG  :
        </p>

        <figure class="block_code">
                <pre><code>
# .env

###> symfony/framework-bundle ###
APP_ENV=prod # ou "dev" ou "test"
APP_DEBUG=0 # ou 1 pour désactiver
# ...
###< symfony/framework-bundle ###

            </code></pre>
        </figure>

        <p>
        Bingo ! En changeant uniquement le contenu de ce fichier, vous passez votre application en environnement de développement ou de production.
        </p>

        <p>
        Le mode de débogage n'a pas de rapport direct avec l'environnement sélectionné dans l'application de Symfony, même s'il sera généralement activé en environnement de test et de développement, et désactivé en environnement de production. Ce mode de débogage permet d'activer un puissant gestionnaire d'erreurs et de désactiver la mise en cache des éléments de configuration et de gabarit : c'est généralement ce que l'on souhaite lorsque l'on développe ou teste son application.
        </p>

        <p>
        En environnement de production, les erreurs ne seront pas affichées et il sera possible de <a href="https://symfony.com/doc/current/controller/error_pages.html">configurer des pages d'erreurs spécifiques</a>.
        </p>

        <p>
        En environnement de développement, une barre de débogage est automatiquement injectée dans la page HTML retournée à l'utilisateur.
        </p>

        <p>
        Cette barre apporte de nombreuses informations récoltées lors de l'exécution de votre application :
            <ul>
                <li>à gauche, le code HTTP de la réponse : si tout s'est bien passé, ce bloc sera en vert, sinon en rouge ;</li>
                <li>le nom de la route qui a été trouvée et exécutée par l'application</li>
                <li>des informations de performance.</li>
                <li>des informations sur l'internationalisation.</li>
                <li>des informations sur la base de données.</li>
                <li>et la version du framework utilisée.</li>
            </ul>

            Vous pouvez <a href="https://symfony.com/doc/current/profiler/data_collector.html">ajouter ou altérer les informations</a> de cette barre de développement.
        </p>

        <p>
        L'ensemble des blocs affichent un complément d'information au survol de la souris, et cliquer sur la barre de débogage permet d'accéder au Profileur Web.
        </p>

        <p>
        Le Profileur Web est une application permettant de récolter, de traiter et d'afficher des informations lors de l'exécution d'une application Symfony. Pour chaque profil établi, un token unique est créé et permet d'accéder aux informations du profil généré.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5516996-deboguez-votre-application-a-l-aide-du-web-profiler#/id/r-5794018" target="_blank">Déboguez une API REST avec le serveur de développement</a></h2>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517021-dynamisez-vos-vues-a-l-aide-de-twig#/id/video_Player_1" target="_blank">Dynamisez vos vues à l’aide de Twig</a></h1>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517021-dynamisez-vos-vues-a-l-aide-de-twig#/id/r-5558604" target="_blank">Qu’est-ce que Twig ?</a></h2>

        <p>
        <a href="https://twig.symfony.com/">Twig</a> est un moteur de gabarit développé en PHP inclus par défaut avec le framework Symfony 5.
        </p>

        <p>
        L'intérêt principal d'un moteur de gabarit est de séparer la logique de sa représentation. En utilisant PHP, comment définir ce qui est de la logique et ce qui est de la représentation ?
        </p>

        <p>
            Pourtant, nous avons toujours besoin d'un peu de code dynamique pour intégrer des pages web :
            <ul>
                <li>pouvoir boucler sur une liste d'éléments ;</li>
                <li>pouvoir afficher une portion de code selon une condition ;</li>
                <li>ou formater une date en fonction de la date locale utilisée par le visiteur du site...</li>
            </ul>
        </p>

        <p>
        Voici pourquoi Twig est plus adapté que le PHP en tant que moteur de gabarit :
            <ul>
                <li>il a une syntaxe beaucoup plus concise et claire;</li>
                <li>par défaut, il supporte de nombreuses fonctionnalités utiles, telles que la notion d'héritage ;</li>
                <li>et il sécurise automatiquement vos variables.</li>
            </ul>
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517021-dynamisez-vos-vues-a-l-aide-de-twig#/id/r-5578631" target="_blank">Éléments de syntaxe</a></h3>

        <p>
        Twig supporte nativement trois types de syntaxe :
            <ul>
                <li><code class="line_code">{{ ... }}</code> permet l'affichage d'une expression ;</li>
                <li><code class="line_code">{% ... %}</code> exécute une action ;</li>
                <li><code class="line_code">{# ... #}</code> n'est jamais exécuté, c'est utilisé pour des commentaires.</li>
            </ul>
        </p>

        <p>
        Voici un premier exemple de gabarit pour bien comprendre la différence :
        </p>

        <figure class="block_code">
                <pre><code>
{# Ceci est un exemple de gabarit Twig #}
{% set collection = [1, 2, 3] %}

&ltul&gt
{% for item in collection %}
    &ltli&gt{{ item }}&lt/li&gt
{% endfor %}
&lt/ul&gt

{# 
    Va afficher seulement ce code HTML:

    &ltul&gt
        ....
#}
            </code></pre>
        </figure>

        <p>
        Voici comment utiliser un gabarit Twig dans un contrôleur Symfony :
        </p>

        <figure class="block_code">
                <pre><code>
// src/Controller/HelloController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * Hello world, avec Twig cette fois :)
     *
     * @Route("/hello/{name}", name="hello")
     */
    public function hello($name)
    {
        $this->render('hello.html.twig', ['name' => $name]);
    }
}
            </code></pre>
</figure>

        <p>
        Et le gabarit Twig correspondant :
        </p>

        <figure class="block_code">
                <pre><code>
{# /templates/hello.html.twig #}

Hello {{ name }}!
            </code></pre>
        </figure>

        <p>
            <ul>
                <li>Par défaut, le framework Symfony ira chercher les gabarits dans son dossier templates.</li>
                <li>La fonction render prend en paramètre le chemin vers le gabarit et un tableau de paramètres.</li>
                <li>Les paramètres sont disponibles dans le gabarit.</li>
            </ul>
        </p>

        <p>
        D'accord, mais pourquoi n'appelle-t-on pas le template tout simplement hello.twig ?
        </p>

        <p>
        Pourquoi devrait-on limiter nos templates aux pages HTML ? Par exemple, si l'on a besoin de manipuler un fichier XML - disons un flux RSS -, nous pouvons tout à fait utiliser Twig pour cela, et nous nommerons le fichier flux.rss.twig, par exemple.
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517021-dynamisez-vos-vues-a-l-aide-de-twig#/id/r-5578671" target="_blank">Opérateurs</a></h3>

        <p>
        On retrouve tous les opérateurs dans Twig, tous décrits dans la documentation officielle.
        </p>

        <figure class="block_code">
                <pre><code>
{% for key, element in elements %}
    {% if loop.index % 2 %}
        Element pair
    {% else %}
        Element impair
    {% endif %}
{% else %}
    Il n'y a aucun élément à afficher.
{% endfor %}
            </code></pre>
        </figure>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517021-dynamisez-vos-vues-a-l-aide-de-twig#/id/r-5578687" target="_blank">Tags</a></h3>

        <p>
        Les tags sont des éléments de langage propres à Twig.
        </p>

        <p>
        Voici la liste des tags les plus utilisés :
            <ul>
                <li>block : définit un espace surchargeable.</li>
                <li>do, if, else,for, (with) : éléments de langage identiques à PHP.</li>
                <li>import : permet d'importer un fichier comprenant des macros.</li>
                <li>set : permet de définir une ou plusieurs variables.</li>
                <li>spaceless : supprime tous les espaces entre les tags HTML.</li>
                <li>verbatim : ne sera pas pris en compte par Twig.</li>
            </ul>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517021-dynamisez-vos-vues-a-l-aide-de-twig#/id/r-5558608" target="_blank">Étendez votre utilisation de Twig : macros, fonctions et filtres</a></h2>

        <p>
        Il est possible d'étendre Twig avec trois types d'extensions différentes : les fonctions, les filtres et les macros.
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517021-dynamisez-vos-vues-a-l-aide-de-twig#/id/r-5578724" target="_blank">Les fonctions et filtres à connaître</a></h3>

        <p>
        Une fonction peut changer la valeur d'une variable et peut avoir un ou plusieurs paramètres :
        </p>

        <figure class="block_code">
                <pre><code>
{% for i in range(1, 10) %}
    {{ i }}
{% endfor %}

{# Twig supporte les paramètres nommés #}
{{ renderWithOptions(foo = 'foo', bar = 'bar', baz = 'baz') }}
            </code></pre>
        </figure>

        <p>
            Voir la <a href="https://twig.symfony.com/doc/3.x/">doc</a> pour plus d'infos.
        </p>

        <p>
        Là où une fonction peut changer la valeur d'une variable, un filtre change seulement son affichage. On utilise l'opérateur "pipe" |  pour appliquer un filtre. Les filtres peuvent être chaînés.
        </p>

        <p>
        <figure class="block_code">
                <pre><code>
{{ 'foo'|capitalize|reverse }} {# "Oof" #}
{{ '&lth1&gtFoo&lt/h1&gt' }} {# affichera "&lth1&gtFoo&lt/h1&gt" dans le navigateur #}
{{ '&lth1&gtBar&lt/h1&gt'|raw }} {# affichera "Bar" tel qu'attendu #}
            </code></pre>
        </figure>
        Par défaut, Twig protège et échappe toute valeur, donc s'il vous faut afficher un contenu HTML ou Javascript, utilisez le filtre e ou raw (aucune protection appliquée).
        </p>

        <p>
            il est également possible d'afficher des objets du type objet javascript. 
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517021-dynamisez-vos-vues-a-l-aide-de-twig#/id/r-5578726" target="_blank">Créez vos propres fonctions et filtres</a></h3>

        <p>
        Pour ajouter vos propres filtres et fonctions, il faudra créer une extension Twig.
        </p>

        <p>
        Une extension Twig est une classe qui permet de définir ses propres filtres et fonctions et qui implémente Twig_ExtensionInterface, mais on préférera étendre la classe abstraite AbstractExtension:
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517021-dynamisez-vos-vues-a-l-aide-de-twig#/id/r-5578728" target="_blank">Créez vos propres macros</a></h3>

        <p>
        Il reste un dernier type d'extension à présenter qui répond à un besoin plus spécifique. On définit une macro comme étant "une petite routine informatique pour automatiser une tâche répétitive".
        </p>

        <p>
        Basiquement, en fonction du type d'erreur, seule une classe CSS va changer :
        </p>

        <figure class="block_code">
                <pre><code>
&ltdiv class="alert alert-primary" role="alert"&gt
  Message d'alerte principal
&lt/div&gt
&ltdiv class="alert alert-success" role="alert"&gt
  Message de succès
&lt/div&gt
&ltdiv class="alert alert-danger" role="alert"&gt
  Message d'erreur
&lt/div&gt
&ltdiv class="alert alert-warning" role="alert"&gt
  Message d'avertissement
&lt/div&gt
&lt!-- ...  et bien d'autres --&gt
            </code></pre>
        </figure>

        <p>
        Voilà ce que vous pourriez faire en définissant une macro Twig :
        </p>

        <figure class="block_code">
                <pre><code>
{# /templates/macros/alertes.html.twig #}
{% macro alert(message, type) %}
&ltdiv class="alert alert-{{ type }}" role="alert"&gt
  {{ message }}
&lt/div&gt
{% endmacro%}
            </code></pre>
        </figure>

        <p>
        Et son utilisation dans un template Twig (n'oubliez pas d'importer la macro !) :
        </p>

        <figure class="block_code">
                <pre><code>
{# /templates/exemple.html.twig #}
{% import 'alertes.html.twig' as utils %}

{{ utils.alert('Attention!', 'warning') }}
{{ utils.alert('Erreur fatale!', 'danger') }}
            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517021-dynamisez-vos-vues-a-l-aide-de-twig#/id/r-5558612" target="_blank">L’héritage de gabarit</a></h2>
        
        <p>
        Tout au début ce de chapitre, je vous disais que l'héritage de gabarit était l'une des fonctionnalités les plus utiles de Twig.
        </p>

        <p>
        Définir des blocks et utiliser la fonction parent() permet de customiser et de rendre réutilisables les gabarits, comme un héritage de classe permet de redéfinir le comportement d'une classe parent.
        </p>

        <p>
        Par exemple, le template parent.html.twig :
        </p>

        <figure class="block_code">
                <pre><code>
{# /templates/parent.html.twig #}
&lthtml&gt
    &lthead&gt
    &lttitle&gt{% block titre %}Parent{% endblock%}&lt/title&gt
    {% block stylesheets %}
        &ltlink rel="stylesheet" href="styles.css" type="text/css" media="all" /&gt
    {% endblock %}
    &lt/head&gt
    &ltbody&gt
        {% block contenuPrincipal %}
            Contenu du body
        {% endblock %}
        {% block javascripts %}{% endblock %}
    &lt/body&gt
&lt/html&gt
            </code></pre>
        </figure>

        <p>
        Et voici la page "Product" qui utilise "Parent" :
        </p>

        <figure class="block_code">
                <pre><code>
{# /templates/produit.html.twig #}
{% extends 'parent.html.twig' %}

{% block titre %}Page Produit{% endblock%}

{% block stylesheets %}
    {{ parent() }}
    &ltlink rel="stylesheet" href="produit.css" type="text/css" media="all" /&gt
{% endblock%}

{% block contenuPrincipal %}
    &ltp&gtCeci est la page Produit!&lt/p&gt
{% endblock %}

{% block javascripts %}
&ltscript src="build/produit.js" /&gt
{% endblock %}
            </code></pre>
        </figure>

        <p>
        Rendra le fichier HTML suivant à l'utilisateur :
        </p>

        <figure class="block_code">
                <pre><code>
&lthtml&gt
    &lthead&gt
        &lttitle&gtPage Produit&lt/title&gt
        &ltlink rel="stylesheet" href="styles.css" type="text/css" media="all" /&gt
        &ltlink rel="stylesheet" href="produit.css" type="text/css" media="all" /&gt
    &lt/head&gt
    &ltbody&gt
        &ltp&gtCeci est la page Produit!&lt/p&gt
        &ltscript src="build/produit.js" /&gt
    &lt/body&gt
&lt/html&gt
            </code></pre>
        </figure>

        <p>
        La fonction <code class="line_code">parent()</code> permet de récupérer le contenu du bloc dans le gabarit parent. 
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517026-interagissez-avec-vos-utilisateurs#/id/video_Player_1" target="_blank">Les formulaires</a></h1>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517026-interagissez-avec-vos-utilisateurs#/id/r-5558619" target="_blank">Créer un formulaires</a></h2>

        <p>
            <a href="https://symfony.com/doc/current/forms.html#built-in-field-types">Doc ici</a>
        </p>

        <p>
        Le framework Symfony vous permet de créer, valider et rendre des formulaires HTML avec le moteur de gabarit Twig.
        </p>


        <p>
        Imaginons un formulaire de création d'articles pour un blog. Au plus simple, pour un article, nous souhaitons un titre, un contenu principal, un nom d'auteur... que l'on représenterait sous forme d'objet :
        </p>

        <figure class="block_code">
                <pre><code>
// src/Entity/Article.php
namespace App\Entity;

class Article
{
    private $author;
    private $content;
    private $title;

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    // ...
}
            </code></pre>
        </figure>

        <p>
        Comment créer un formulaire, alors ? Il va falloir créer un "type de formulaire" à partir de notre objet.
        </p>

        <p>
        Un type de formulaire est une classe qui permet de construire un formulaire en définissant les différents types de champs. Voici un exemple valide de type de formulaire pour l'objet précédent :
        </p>

        <figure class="block_code">
                <pre><code>
// src/Form/ArticleType.php
namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content', TextareaType::class)
            ->add('author', TextType::class)
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
            </code></pre>
        </figure>

        <p>
        La création d'un formulaire à partir d'un objet est plutôt simple pour deux raisons principales :
            <ol>
                <li>le composant Form dispose d'un constructeur de formulaires (le form builder) capable de générer tout type de formulaire à partir de champs qu'il connaît déjà (champs de type texte, de type date...) ;</li>
                <li>en passant la classe au résolveur d'options du formulaire, le constructeur de formulaires est capable - à partir de la classe - de deviner quel type de champ il doit utiliser. Par exemple, si une classe a une propriété de type DateTime, alors le champ utilisé sera de type datetime en HTML.</li>
            </ol>
            Par défaut, le type de champ rendu sera un champ "texte" qui correspond à la classe TextType, mais on peut évidemment définir pour chaque propriété le type de rendu que l'on souhaite.
        </p>

        <p>
        Tous les types de champs disponibles dans la spécification HTML5 sont disponibles dans le composant ; ils couvriront l'essentiel des besoins de votre application.
        </p>

        <p>
        Par « type de champ », il ne faut pas comprendre « type HTML » comme text , password  ou select, mais comprendre « type sémantique ». Par exemple, le type DateType peut aussi afficher trois champs HTML select  à la suite pour choisir le jour, le mois et l'année. Il existe aussi un type TimezoneType pour choisir le fuseau horaire. Bref, il en existe pas mal et ils n'ont rien à voir avec les types HTML ; ils vont bien plus loin que ces derniers ! 
        </p>

        <table id="r-5577909">
            <tbody id="r-5577908">
                <tr id="r-5577876">
                    <td id="r-5577863" >
                        <p id="r-5577862" ><strong>Texte</strong></p>
                    </td>
                    <td id="r-5577865" >
                        <p id="r-5577864" ><strong>Choix</strong></p>
                    </td>
                    <td id="r-5577867" >
                        <p id="r-5577866" ><strong>Date et temps</strong></p>
                    </td>
                    <td id="r-5577869" >
                        <p id="r-5577868" ><strong>Divers</strong></p>
                    </td>
                    <td id="r-5577871" >
                        <p id="r-5577870" ><strong>Multiple</strong></p>
                    </td>
                    <td id="r-5577873" >
                        <p id="r-5577872" ><strong>Caché</strong></p>
                    </td>
                </tr>
                <tr id="r-5577907" >
                    <td id="r-5577881">
                        <p id="r-5577877" ><a href="https://symfony.com/doc/current/reference/forms/types/text.html">TextType</a><br /><a href="https://symfony.com/doc/current/reference/forms/types/textarea.html">TextareaType</a><br /><a href="https://symfony.com/doc/current/reference/forms/types/email.html">EmailType</a><br /><a href="https://symfony.com/doc/current/reference/forms/types/integer.html">IntegerType</a><br /><a href="https://symfony.com/doc/current/reference/forms/types/money.html">MoneyType</a><br /><a href="https://symfony.com/doc/current/reference/forms/types/number.html">NumberType</a><br /><a href="https://symfony.com/doc/current/reference/forms/types/password.html">PasswordType</a><br /><a href="https://symfony.com/doc/current/reference/forms/types/percent.html">PercentType</a><br /><a href="https://symfony.com/doc/current/reference/forms/types/search.html">SearchType</a><br /><a href="https://symfony.com/doc/current/reference/forms/types/url.html">UrlType</a></p><p id="r-5577878" ><a href="https://symfony.com/doc/current/reference/forms/types/tel.html">TelType</a></p><p id="r-5577879"><a href="https://symfony.com/doc/current/reference/forms/types/range.html">RangeType</a></p><p id="r-5577880" ><a href="https://symfony.com/doc/current/reference/forms/types/color.html">ColorType</a></p></td><td id="r-5577889" ><p id="r-5577882"><a href="https://symfony.com/doc/current/reference/forms/types/choice.html">ChoiceType</a></p><p id="r-5577883" ><a href="https://symfony.com/doc/current/reference/forms/types/entity.html">EntityType</a></p><p id="r-5577884" ><a href="https://symfony.com/doc/current/reference/forms/types/country.html">CountryType</a></p><p id="r-5577885" ><a href="https://symfony.com/doc/current/reference/forms/types/language.html">LanguageType</a></p><p id="r-5577886"><a href="https://symfony.com/doc/current/reference/forms/types/locale.html">LocaleType</a></p><p id="r-5577887" ><a href="https://symfony.com/doc/current/reference/forms/types/timezone.html">TimezoneType</a></p><p id="r-5577888" ><a href="https://symfony.com/doc/current/reference/forms/types/currency.html">CurrencyType</a></p></td><td id="r-5577895"><p id="r-5577890" ><a href="https://symfony.com/doc/current/reference/forms/types/date.html">DateType</a></p><p id="r-5577891" ><a href="https://symfony.com/doc/current/reference/forms/types/dateinterval.html">DateIntervalType</a></p><p id="r-5577892" ><a href="https://symfony.com/doc/current/reference/forms/types/datetime.html">DatetimeType</a></p><p id="r-5577893" ><a href="https://symfony.com/doc/current/reference/forms/types/time.html">TimeType</a></p><p id="r-5577894" ><a href="https://symfony.com/doc/current/reference/forms/types/birthday.html">BirthdayType</a></p></td><td id="r-5577899" ><p id="r-5577896" ><a href="https://symfony.com/doc/current/reference/forms/types/checkbox.html">CheckboxType</a></p><p id="r-5577897"><a href="https://symfony.com/doc/current/reference/forms/types/file.html">FileType</a></p><p id="r-5577898" ><a href="https://symfony.com/doc/current/reference/forms/types/radio.html">RadioType</a></p></td><td id="r-5577902" ><p id="r-5577900"><a href="https://symfony.com/doc/current/reference/forms/types/collection.html">CollectionType</a></p><p id="r-5577901" ><a href="https://symfony.com/doc/current/reference/forms/types/repeated.html">RepeatedType</a></p></td><td id="r-5577904" ><p id="r-5577903" ><a href="https://symfony.com/doc/current/reference/forms/types/hidden.html">HiddenType</a></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>
        Chacun de ces types de formulaires possède de nombreuses options qui permettent encore de configurer l'affichage. Par exemple, chaque type de champ possède une option help qui permet d'afficher un message d'aide lié au champ de formulaire (ce qui est une bonne pratique).
        </p>

        <figure class="block_code">
                <pre><code>
$builder->add('title', null, [
    'help' => "Le titre de l'article, utilisé dans l'url",
]);
            </code></pre>
        </figure>

        <p>
        Pour afficher le formulaire dans un template Twig, il va falloir le créer dans un contrôleur et fournir à Twig une "représentation" de l'objet formulaire créé.
        </p>

        <figure class="block_code">
                <pre><code>
// src/Controller/FormController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ArticleType;
use App\Entity\Article;

class FormController extends AbstractController
{
    /**
     * @Route("/form/new")
     */
    public function new(Request $request)
    {
        $article = new Article();
        $article->setTitle('Hello World');
        $article->setContent('Un très court article.');
        $article->setAuthor('Zozor');

        $form = $this->createForm(ArticleType::class, $article);

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
            </code></pre>
        </figure>

        <p>
        Et le template Twig correspondant :
        </p>

        <figure class="block_code">
                <pre><code>
{# templates/default/new.html.twig #}
{{ form(form) }}
            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517026-interagissez-avec-vos-utilisateurs#/id/r-5558623" target="_blank">Validez vos formulaires simplement</a></h2>

        <p>
        Jusque là, nous avons affiché un nouveau formulaire, mais il n'est même pas possible de le soumettre (pas de bouton "Créer") et les données seront de toute façon ignorées par votre contrôleur.
        </p>

        <p>
        Dans le gabarit Twig, nous allons adapter le rendu du formulaire et ajouter un bouton submit. Nous reviendrons sur les fonctions utilisées un peu plus tard :
        </p>

        <figure class="block_code">
                <pre><code>
{# templates/default/new.html.twig #}
&lthtml&gt
    &lthead&gt&lt/head&gt
    &ltbody&gt
        {{ form_start(form) }}
            {{ form_row(form.title) }}
            {{ form_row(form.content) }}
            {{ form_row(form.author) }}

            &ltbutton type="submit" class="btn btn-primary"&gtCréer&lt/button&gt
        {{ form_end(form) }}
    &lt/body&gt
&lt/html&gt
            </code></pre>
        </figure>

        <p>
        Et mettons à jour notre contrôleur Symfony  afin de récupérer les données reçues de la requête, et spécifiquement à partir du formulaire soumis :
        </p>

        <figure class="block_code">
                <pre><code>
// src/Controller/FormController.php

/**
 * @Route("/form/new")
 */
public function new(Request $request)
{
    $article = new Article();
    $article->setTitle('Hello World');
    $article->setContent('Un très court article.');
    $article->setAuthor('Zozor');

    $form = $this->createForm(ArticleType::class, $article);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        dump($article);
    }

    return $this->render('default/new.html.twig', array(
        'form' => $form->createView(),
    ));
}
            </code></pre>
        </figure>

        <p>
            <ul>
                <li>Tout d'abord, nous mettons à jour le formulaire à l'aide des informations reçues de l'utilisateur : c'est le rôle de la fonction <code class="line_code">handleRequest()</code>.</li>
                <li>Ensuite, nous vérifions que le formulaire a bien été soumis (<code class="line_code">$form->isSubmitted()</code>) et qu'il est valide (<code class="line_code">$form->isValid()</code>).</li>
                <li>Enfin, nous pouvons manipuler notre article mis à jour avec les données du formulaire. En utilisant le WebProfiler, on accède aux données provenant du formulaire.</li>
            </ul>
        </p>

        <p>
        Nous nous préoccuperons de la sauvegarde en base de données dans un prochain chapitre.
        </p>

        <p>
        Pour l'instant, concentrons-nous sur quelque chose de vraiment important concernant les formulaires : la validation des données et l'envoi d'erreurs à nos utilisateurs.
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517026-interagissez-avec-vos-utilisateurs#/id/r-5599985" target="_blank">Le composant Validator</a></h3>

        <p>
            <a href="https://symfony.com/doc/current/validation.html">doc ici</a>
        </p>

        <p>
        La validation des formulaires est l'une des tâches les plus pénibles pour un développeur web. Le framework Symfony et son composant Validator simplifient beaucoup le travail.
        </p>

        <p>
        Vous aurez remarqué, dans le contrôleur précédemment mis à jour, que nous avons utilisé la fonction <code class="line_code">isValid()</code> associée au formulaire.
        </p>

        <p>
        Eh bien, dès lors que des règles de validation ont été définies, les formulaires sont capables d'utiliser le validateur automatiquement ! Dans notre cas, nous n'avions pas encore défini de règles de validation, alors notre formulaire est forcément valide.
        </p>

        <p>
        La meilleure façon de définir un ensemble de règles à valider par le formulaire est d'utiliser les annotations fournies par le composant Validator au niveau de l'objet à valider :
        </p>

        <figure class="block_code">
                <pre><code>
// src/Entity/Article.php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Article
{
    /**
     * @Assert\Length(
     *     min = 10,
     *     max = 70,
     *     minMessage = "Ce titre est trop court",
     *     maxMessage = "Ce titre est trop long"
     * )
     */
    private $title;
    
    /**
     * @Assert\NotBlank(message = "Le contenu ne peut être vide.")
     */
    private $content;
    
    /**
     * @Assert\NotBlank(message = "Un auteur doit être associé à l'article")
     */
    private $author;

    /* ... */
}
            </code></pre>
        </figure>

        <p>
        La validation - comme pour la gestion de nos URL - se déclare à l'aide d'annotations, en associant des contraintes de validation à des propriétés ou des méthodes publiques de nos objets.
        </p>

        <p>
        Le composant Validator de Symfony permet de créer un validateur :
        </p>

        <figure class="block_code">
                <pre><code>
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use App\Entity\Article;

$article = new Article();
$validator = Validation::createValidator();
$violations = $validator->validate($article, [
    new Length(['min' => 10]),
    new NotBlank(),
]);

if (0 !== count($violations)) {
    // Affiche les erreurs
    foreach ($violations as $violation) {
        echo $violation->getMessage().'<br>';
    }
}
            </code></pre>
        </figure>

        <p>
        Tout d'abord, la classe Validation du composant permet de créer une instance du validateur. Ce validateur a une méthode validate qui prend 2 arguments :
        <ul>
            <li>la valeur à valider : ce peut être une chaîne de caractères, un tableau ou un objet ;</li>
            <li>une collection de contraintes de validation.</li>
        </ul>
        Le résultat de cette fonction est une liste de violations qui permettent d'accéder aux messages d'erreurs correspondant aux contraintes qui n'ont pas été validées. Si la valeur est valide, alors la liste de violations est vide.
        </p>

        <p>
        Lorsque nous soumettons notre formulaire et que nous appelons la fonction isValid du formulaire Symfony, les contraintes de validation déclarées dans la classe Article sont appliquées sur l'objet $article qui a été retrouvé à partir des données de la requête utilisateur.
        </p>

        <p>
        Il existe de nombreuses contraintes de validation et il est possible d'en créer de nouvelles assez facilement. Voici la liste exhaustive des contraintes de validation supportées par Symfony : voir liste <a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517026-interagissez-avec-vos-utilisateurs#/id/r-5605794">ici</a>
        </p>

        <p>
        Retournons les erreurs à l'utilisateur :
        </p>

        <p>
        Par défaut et en fonction des règles de validation configurées, le formulaire va appliquer certaines règles de validation HTML5 ; par exemple, voici le HTML généré pour le champ "Title" :
        </p>

        <figure class="block_code">
                <pre><code>
 &ltinput 
    type="text"
    id="article_title"
    name="article[title]"
    maxlength="70"
    pattern=".{10,}"
    class="form-control"
    value="Hello World"
&gt
            </code></pre>
        </figure>

        <p>
        La bonne nouvelle est que le serveur n'est pas appelé en cas d'erreur utilisateur ; la mauvaise est que, puisque le serveur n'est pas appelé, les messages que l'on a configurés ne sont pas accessibles...
        </p>

        <p>
        Si la gestion des messages d'erreur est importante pour vous, une solution est de désactiver la validation HTML5 avec l'attribut "novalidate". Mettons à jour notre formulaire :
        </p>

        <figure class="block_code">
                <pre><code>
&lthtml&gt
    &lthead>&lt/head&gt
    &ltbody&gt
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
            {{ form_row(form.title) }}
            {{ form_row(form.content) }}
            {{ form_row(form.author) }}

            &ltbutton type="submit" class="btn btn-primary"&gtCréer&lt/button&gt
        {{ form_end(form) }}
    &lt/body&gt
&lt/html&gt
            </code></pre>
        </figure>

        <p>
        Ce n'est vraiment pas joli, mais fonctionnel ! Maintenant que nous avons une gestion de formulaires complète, occupons-nous de rendre cela un minimum esthétique !
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517026-interagissez-avec-vos-utilisateurs#/id/r-5558627" target="_blank">Customisez le rendu de vos formulaires</a></h2>

        <p>
        Le framework Symfony fournit une intégration de Twig avec le composant Form, sous forme de fonctions dédiées au rendu de vos formulaires.
        </p>

        <p>
        Les fonctions de Twig dédiées au composant Form :
            <ul>
                <li>form_start rend la balise <code class="line_code">&ltform&gt</code> : on peut définir l'action, l'attribut method et ajouter différents attributs à la balise</li>
                <li>form_row rend un champ de formulaire complet, label et messages d'erreurs compris ;</li>
                <li>form_label rend le label ;</li>
                <li>form_widget rend l'input ;</li>
                <li>form_errors rend le bloc d'erreurs ;</li>
                <li>form_rest rend tous les champs non encore rendus ;</li>
                <li>csrf_token rend un input  hidden  avec une clé contre les attaques de type CSRF ;</li>
                <li>form_end rend la balise fermante  </form>  .</li>
            </ul>
        </p>

        <p>
        Avec l'ensemble de ces fonctions, nous pouvons construire n'importe type de formulaire qui sera rendu en fonction du thème actif.
        </p>

        <p>
        Attends, là, c'est quoi un thème de formulaire ?
        </p>

        <p>
        Un thème de formulaire est un gabarit qui contient toutes des définitions, tous les gabarits pour chaque type de formulaire géré par votre application. En fait, sans le savoir, nous utilisons déjà un thème de formulaire, à savoir le fichier form_div_layout.html.twig fourni avec le framework Symfony 4 :
        </p>

        <figure class="block_code">
                <pre><code>
                ...

{%- block checkbox_widget -%}
    &ltinput type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} /&gt
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    &ltinput type="radio" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} /&gt
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        &ltdiv {{ block('widget_container_attributes') }}&gt
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        &lt/div&gt
    {%- endif -%}
{%- endblock datetime_widget -%}
...
            </code></pre>
        </figure>

            <p>
            Pour chaque type de formulaire livré avec Symfony, un thème de formulaire définit comment il doit être rendu en Twig. Ce n'est pas tout ! Par défaut, vous retrouverez dans Symfony 4 plusieurs thèmes dont Bootstrap
            </p>

            <p>
            Il arrivera que nous ayons besoin de customiser l'affichage d'un champ particulier. Dans ce cas, il va falloir redéfinir le gabarit utilisé pour ce champ précis dans le gabarit du formulaire concerné.
            </p>

            <p>
                Suite <a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517026-interagissez-avec-vos-utilisateurs#/id/r-5722340">ici</a>
            </p>

            <p>
              <a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517026-interagissez-avec-vos-utilisateurs#/id/r-5722340">Customisation d'un champ spécifique dans un gabarit</a>  
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517031-gerez-vos-donnees-avec-doctrine-orm#/id/video_Player_1" target="_blank">Gérez vos données avec Doctrine ORM</a></h1>

            <p>
            Doctrine ORM implémente 2 patterns objets pour mapper un objet PHP à des éléments d'un système de persistance :
            <ul>
                <li>le pattern <a href="https://martinfowler.com/eaaCatalog/dataMapper.html"><strong>"Data Mapper"</strong></a>. C'est une couche qui synchronise la donnée stockée en base avec les objets PHP. En d'autres termes :
                    <ul>
                        <li>il peut insérer, mettre à jour des entrées en base de données à partir de données contenues dans les propriétés d'un objet ;</li>
                        <li>il peut supprimer des entrées en base de données si les "entités" liées sont identifiées pour être supprimées ;</li>
                        <li>il "hydrate" (rempli les propréiétés) des objets en mémoire à partir d'informations contenues en base.</li>
                    </ul>
                    Le grand avantage d'utiliser un Data Mapper, c'est que les objets sont complètement indépendants du système de stockage.
                </li>
                <li>le pattern <a href="https://martinfowler.com/eaaCatalog/unitOfWork.html"><strong>"Unit of Work"</strong></a>. L'Unit of Work est lui utilisé pour gérer l'état des différents objets hydratés par l'Entity Manager. La synchronisation en base ne s'effectue que quand on exécute la méthode "flush" et est effectuée sous forme d'une transaction qui est annulée en cas d'échec.</li>
            </ul>
            L'Entity Manager fait donc le lien entre les "Entités", qui sont de simples objets PHP, et la base de données :
                <ul>
                    <li>à l'aide de la fonction find, il retrouve et hydrate un objet à partir d'informations retrouvées en base ;</li>
                    <li>à l'aide de la fonction persist, il ajoute l'objet manipulé dans l'Unit of Work ;</li>
                    <li>à l'aide de la fonction flush, tous les objets "marqués" pour être ajoutés, mis à jour et supprimés conduiront à l'exécution d'une transaction avec la base de données.</li>
                </ul>
                Pour marquer un objet pour la suppression, il faut utiliser la fonction remove.
            </p>

            <p>
            Le format YAML est déprécié et ne sera plus supporté dans la prochaine version majeure de Doctrine ORM ; le format recommandé par Doctrine est l'annotation.
            </p>

            <p>
            Prenons l'exemple d'une classe Article avec les propriétés id, title, content et date :
            </p>

            <figure class="block_code">
                <pre><code>
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity()
* @ORM\Table(name="blog_article")
* */
class Article
{
    /**
    * @ORM\Id()
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    public $id;

    /**
    * @ORM\Column(type="string")
    */
    public $title;

    /**
    * @ORM\Column(type="text")
    */
    public $content;

    /**
    * @ORM\Column(type="datetime", name="date")
    */
    public $date;
}
            </code></pre>
        </figure>

        <p>
            <ul>
                <li>L'annotation Entity spécifie que la classe est considérée en tant qu'entité. L'attribut le plus important est repositoryClass, qui permet de spécifier un repository spécifique pour l'entité (on y reviendra plus tard).</li>
                <li>L'annotation Id identifie la clé primaire de la table.</li>
                <li>L'annotation GeneratedValue délègue la responsabilité de l'unicité de l'id au système de persistance choisi.</li>
                <li>L'annotation @ORM\Column permet de mapper une propriété PHP à une colonne de la base de données : Par défaut, le nom de la colonne de la base de données sera le nom de la propriété PHP, mais il est possible de le surcharger. Si une propriété n'est pas marquée avec l'annotation, elle sera complètement ignorée. Cette annotation a de nombreux attributs, tous documentés. Voici les plus utiles :
                    <ul>
                        <li><code class="line_code">unique</code> qui définit que la valeur doit être unique pour la colonne donnée ;</li>
                        <li><code class="line_code">nullable</code> qui autorise/interdit la valeur nulle ;</li>
                        <li><code class="line_code">length</code>, pour les chaînes de caractères, définit la longueur.</li>
                    </ul>
                    Ces annotations ne servent pas à la validation d'un objet, elles ne sont utilisées que pour le mapping et la génération de la base de données.
                </li>
                <li>Les types définis dans les annotations Doctrine ne correspondent ni aux types en PHP ni à ceux de la base de données, mais sont mappés aux deux. En voici quelques-uns <a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517031-gerez-vos-donnees-avec-doctrine-orm#/id/r-5730161">ici</a> et <a href="https://www.doctrine-project.org/projects/doctrine-dbal/en/2.6/reference/types.html#types">ici la doc</a></li>
            </ul>
            Plus d'infos dans la doc <a href="https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/annotations-reference.html#annotations-reference">ici</a>.
        </p>

        <p>
        Doctrine est capable de créer et mettre à jour une base de données à partir des informations tirées du mapping des entités.
        </p>

        <p>
        La première étape va être de configurer Doctrine ORM dans l'application Symfony. Pour cela, il faudra compléter le fichier <code class="line_code">.env</code> :
        </p>

        <figure class="block_code">
                <pre><code>
# .env

# Laissez le reste du contenu de ce fichier intact.


###> doctrine/doctrine-bundle ###
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name
###< doctrine/doctrine-bundle ###
            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517031-gerez-vos-donnees-avec-doctrine-orm#/id/r-5730172" target="_blank">Créez des relations entre vos entités</a></h2>

        <p>
        À un certain niveau de complexité, vos objets PHP vont interagir les uns avec les autres :
        <ul>
            <li>Dans une relation 1-1 : un objet A correspond à un objet B ;</li>
            <li>Dans une relation 1-n : un objet A est lié à de nombreuses instances de B ;</li>
            <li>Dans une relation n-n : des objets de type A ont de multiples relations avec des objets de type B.</li>
        </ul>
        </p>

        <p>
        Doctrine supporte différents types d'associations :
            <ul>
                <li><a href="https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/association-mapping.html#many-to-one-unidirectional">One-To-One</a> : 1 entité est liée à 1 entité ;</li>
                <li><a href="https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/association-mapping.html#many-to-one-unidirectional">Many-To-One</a> : plusieurs entités liées à 1 entité (liée à une OneTo-Many) ;</li>
                <li><a href="https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/association-mapping.html#many-to-one-unidirectional">One-To-Many</a> : une entité liée à plusieurs ;</li>
                <li><a href="https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/association-mapping.html#many-to-one-unidirectional">Many-To-Many</a> : plusieurs entités liées à plusieurs.</li>
            </ul>
        </p>

        <p>
            Plus de détail <a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517031-gerez-vos-donnees-avec-doctrine-orm#/id/r-5730172">ici</a>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517031-gerez-vos-donnees-avec-doctrine-orm#/id/r-5558642" target="_blank">Gérez les migrations de votre base de données</a></h2>

        <p>
        Parlons maintenant d'un problème difficile qui survient lorsque nous travaillons sur une application qui doit évoluer et qui est déjà disponible en production. Votre client vous a demandé d'effectuer des modifications qui ont eu un impact sur vos entités et donc sur votre base de données. Il falloir mettre la base de données à jour et cela semble risqué... :'( Mais ça, c'était avant que vous n'entendiez parler du bundle DoctrineMigration !
        </p>

        <p>
        Les fichiers de migration sont une méthode de mise à jour de base de données en toute sécurité, que ce soit en local ou sur un serveur de production.
        </p>

        <p>
            Détails <a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517031-gerez-vos-donnees-avec-doctrine-orm#/id/r-5558642">ici</a>.
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5654131-securisez-lacces-de-votre-site-web#/id/video_Player_1" target="_blank">Sécurité et authentification</a></h1>

        <p>
            Doc <a href="https://symfony.com/doc/current/security.html">ici</a>.
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-5/5517036-qu-est-ce-qu-un-code-de-qualite#/id/video_Player_1" target="_blank">Produire un code de qualité</a></h1>

        <p>
        Les PSR (pour "Propose a Standard Recommandation") sont l'ensemble des recommandations validées par le <a href="https://www.php-fig.org/">PHP Fig</a> ("PHP Framework Interoperability Group") dont le rôle est d'améliorer l'interopérabilité entre les frameworks PHP.
        </p>

        <p>
        Que ce soit Symfony, Laravel, Drupal ou même PrestaShop, ces projets respectent les quatre premières recommandations du PHP-FIG :
        <ul>
            <li>les conventions minimales de codage (<a href="https://www.php-fig.org/psr/psr-1/">PSR-1</a>) ;</li>
            <li>le style et l'organisation du code (<a href="https://www.php-fig.org/psr/psr-12/">PSR-12</a>) ;</li>
            <li>un contrat commun sur le logger (<a href="https://www.php-fig.org/psr/psr-3/">PSR-3</a>) ;</li>
            <li>un contrat commun sur le chargement des classes PHP (<a href="https://www.php-fig.org/psr/psr-4/">PSR-4</a>).</li>
        </ul>
        </p>



        









            


















        














































































    	



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