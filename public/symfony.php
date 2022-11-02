<?php $title = 'Symfony'; ?>
<?php ob_start(); ?>

            <h1 id=<?php $ini=0; echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/page_creation.html" target="_blank">Ordre de création</a></h1>

            <p>
                <ol>
                    <li>designer sa database</li>
                    <li>Créer un router basique.</li>
                    <li>Faire une mise en forme minimaliste.</li>
                    <li>Créer la base de donnée (avec doctrine ORM -> migration).</li>
                    <li>L'implémenter grâce à Doctrine ORM.</li>
                    <li>Faire un systeme d'autentification/sécurité.</li>
                    <li>Ajouter des fonctionnalités du site.</li>
                </ol>
            </p>








            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/page_creation.html" target="_blank">Create your First Page in Symfony</a></h1>

            <p>
            Creating a new page - whether it's an HTML page or a JSON endpoint - is a two-step process:
            <ul>
                <li>Create a route: A route is the URL (e.g. /about) to your page and points to a controller; Create a route: In <code class="line_code">config/routes.yaml</code>, the route defines the URL to your page (path) and what controller to call. You'll learn more about routing in its own section, including how to make variable URLs.</li>
                <li>Create a controller: A controller is the PHP function you write that builds the page. You take the incoming request information and use it to create a Symfony Response object, which can hold HTML content, a JSON string or even a binary file like an image or PDF.<br>
                Create a controller and a method: This is a function where you build the page and ultimately return a <code class="line_code">Response</code> object. You'll learn more about controllers in their own section, including how to return JSON responses;</li>
            </ul>
            </p>

            <p>
            Suppose you want to create a page - /lucky/number - that generates a lucky (well, random) number and prints it. To do that, create a "Controller" class and a "controller" method inside of it:
            </p>

            <figure class="block_code">
                <pre><code>
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '&lthtml&gt&ltbody&gtLucky number: '.$number.'&lt/bod&gty&gt&lt/html&gt'
        );
    }
}
            </code></pre>
        </figure>

        <p>
        Now you need to associate this controller function with a public URL (e.g. /lucky/number) so that the number() method is called when a user browses to it. This association is defined by creating a route in the config/routes.yaml file:
        </p>

        <figure class="block_code">
                <pre><code>
# config/routes.yaml

# the "app_lucky_number" route name is not important yet
app_lucky_number:
    path: /lucky/number
    controller: App\Controller\LuckyController::number
            </code></pre>
        </figure>

        <p>
        That's it! If you are using Symfony web server, try it out by going to: http://localhost:8000/lucky/number
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/routing.html" target="_blank">Routing</a></h1>

        <p>
        When your application receives a request, it calls a controller action to generate the response. The routing configuration defines which action to run for each incoming URL. It also provides other useful features, like generating SEO-friendly URLs (e.g. <code class="line_code">/read/intro-to-symfony</code> instead of <code class="line_code">index.php?article_id=57</code>).
        </p>

        <p>
        Routes can be configured in YAML, XML, PHP or using attributes. All formats provide the same features and performance, so choose your favorite. Symfony recommends attributes because it's convenient to put the route and controller in the same place.
        </p>
        
        <p>
        PHP attributes allow to define routes next to the code of the controllers associated to those routes. Attributes are native in PHP 8 and higher versions, so you can use them right away.
        </p>
        
        <p>
        You need to add a bit of configuration to your project before using them. If your project uses Symfony Flex, this file is already created for you. Otherwise, create the following file manually:
        </p>

        <figure class="block_code">
                <pre><code>
# config/routes/attributes.yaml
controllers:
    resource: ../../src/Controller/
    type: attribute

kernel:
    resource: ../../src/Kernel.php
    type: attribute
            </code></pre>
        </figure>

        <p>
        This configuration tells Symfony to look for routes defined as attributes in any PHP class stored in the src/Controller/ directory.
        </p>

        <p>
        Suppose you want to define a route for the /blog URL in your application. To do so, create a controller class like the following:
        </p>

        <figure class="block_code">
                <pre><code>
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog_list')]
    public function list(): Response
    {
        // ...
    }
}
            </code></pre>
        </figure>

        <p>
        This configuration defines a route called blog_list that matches when the user requests the /blog URL. When the match occurs, the application runs the list() method of the BlogController class.
        </p>

        <p>
        The query string of a URL is not considered when matching routes. In this example, URLs like /blog?foo=bar and /blog?foo=bar&bar=foo will also match the blog_list route.
        </p>

        <p>
        The route name (blog_list) is not important for now, but it will be essential later when generating URLs. You only have to keep in mind that each route name must be unique in the application.
        </p>

        <p>
        Instead of defining routes in the controller classes, you can define them in a separate YAML, XML or PHP file. The main advantage is that they don't require any extra dependency. The main drawback is that you have to work with multiple files when checking the routing of some controller action. Voir la doc pour plus d'info
        </p>

        <p>
        By default, routes match any HTTP verb (GET, POST, PUT, etc.) Use the methods option to restrict the verbs each route should respond to:
        </p>

        <figure class="block_code">
                <pre><code>
// src/Controller/BlogApiController.php
namespace App\Controller;

// ...

class BlogApiController extends AbstractController
{
    #[Route('/api/posts/{id}', methods: ['GET', 'HEAD'])]
    public function show(int $id): Response
    {
        // ... return a JSON response with the post
    }

    #[Route('/api/posts/{id}', methods: ['PUT'])]
    public function edit(int $id): Response
    {
        // ... edit a post
    }
}
            </code></pre>
        </figure>

        <p>
        Use the condition option if you need some route to match based on some arbitrary matching logic:
        </p>

        <figure class="block_code">
                <pre><code>
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route(
        '/contact',
        name: 'contact',
        condition: "context.getMethod() in ['GET', 'HEAD'] and request.headers.get('User-Agent') matches '/firefox/i'",
        // expressions can also include config parameters:
        // condition: "request.headers.get('User-Agent') matches '%app.allowed_browsers%'"
    )]
    public function contact(): Response
    {
        // ...
    }

    #[Route(
        '/posts/{id}',
        name: 'post_show',
        // expressions can retrieve route parameter values using the "params" variable
        condition: "params['id'] < 1000"
    )]
    public function showPost(int $id): Response
    {
        // ... return a JSON response with the post
    }
}
            </code></pre>
        </figure>

        <p>
            Plus d'info sur les paramètres <a href="https://symfony.com/doc/current/routing.html#matching-expressions">ici</a>.
        </p>

        <p>
        First, the <code class="line_code">debug:router</code> command lists all your application routes in the same order in which Symfony evaluates them. Pass the name (or part of the name) of some route to this argument to print the route details. The other command is called router:match and it shows which route will match the given URL. It's useful to find out why some URL is not executing the controller action that you expect.
        </p>

        <p>
        The previous examples defined routes where the URL never changes (e.g. /blog). However, it's common to define routes where some parts are variable. For example, the URL to display some blog post will probably include the title or slug (e.g. /blog/my-first-post or /blog/all-about-symfony).
        </p>

        <p>
        In Symfony routes, variable parts are wrapped in { ... } and they must have a unique name. For example, the route to display the blog post contents is defined as /blog/{slug}:
        </p>

        <figure class="block_code">
                <pre><code>
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    // ...

    #[Route('/blog/{slug}', name: 'blog_show')]
    public function show(string $slug): Response
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
    }
}
            </code></pre>
        </figure>

        <p>
        Routes can define any number of parameters, but each of them can only be used once on each route (e.g. /blog/posts-about-{category}/page/{pageNumber}).
        </p>

        <p>
            Plus de paramètres sur le routing <a href="https://symfony.com/doc/current/routing.html#parameters-validation">ici</a>.
        </p>


        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/controller.html" target="_blank">Controller</a></h1>

        <p>
        A controller is a PHP function you create that reads information from the Request object and creates and returns a Response object. The response could be an HTML page, JSON, XML, a file download, a redirect, a 404 error or anything else. The controller runs whatever arbitrary logic your application needs to render the content of a page.
        </p>

        <p>
        While a controller can be any PHP callable (function, method on an object, or a Closure), a controller is usually a method inside a controller class:
        </p>

        <figure class="block_code">
                <pre><code>
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    #[Route('/lucky/number/{max}', name: 'app_lucky_number')]
    public function number(int $max): Response
    {
        $number = random_int(0, $max);

        return new Response(
            '&lthtml&gt&ltbody&gtLucky number: '.$number.'&lt/body&gt&lt/html&gt'
        );
    }
}
            </code></pre>
        </figure>

        <p>
        The controller is the <code class="line_code">number()</code> method, which lives inside the controller class <code class="line_code">LuckyController</code>.
        </p>

        <p>
        This controller is pretty straightforward (directe) :
            <ul>
                <li>line 2: Symfony takes advantage of PHP's namespace functionality to namespace the entire controller class.</li>
                <li>line 4: Symfony again takes advantage of PHP's namespace functionality: the use keyword imports the <code class="line_code">Response</code> class, which the controller must return.</li>
                <li>line 7: The class can technically be called anything, but it's suffixed with Controller by convention.</li>
                <li>line 10: The action method is allowed to have a <code class="line_code">$max</code> argument thanks to the <code class="line_code">{max}</code> wildcard in the route.</li>
                <li>line 14: The controller creates and returns a <code class="line_code">Response</code> object.</li>
            </ul>
        </p>

        <p>
        To aid development, Symfony comes with an optional base controller class called <code class="line_code">AbstractController</code>. It can be extended to gain access to helper methods. You now have access to methods like <code class="line_code">$this->render()</code> and many others that you'll learn about next.
        </p>

        <p>
        If you want to redirect the user to another page, use the redirectToRoute() and redirect() methods:
        </p>

        <figure class="block_code">
                <pre><code>
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

// ...
public function index(): RedirectResponse
{
    // redirects to the "homepage" route
    return $this->redirectToRoute('homepage');

    // redirectToRoute is a shortcut for:
    // return new RedirectResponse($this->generateUrl('homepage'));

    // does a permanent HTTP 301 redirect
    return $this->redirectToRoute('homepage', [], 301);
    // if you prefer, you can use PHP constants instead of hardcoded numbers
    return $this->redirectToRoute('homepage', [], Response::HTTP_MOVED_PERMANENTLY);

    // redirect to a route with parameters
    return $this->redirectToRoute('app_lucky_number', ['max' => 10]);

    // redirects to a route and maintains the original query string parameters
    return $this->redirectToRoute('blog_show', $request->query->all());

    // redirects to the current route (e.g. for Post/Redirect/Get pattern):
    return $this->redirectToRoute($request->attributes->get('_route'));

    // redirects externally
    return $this->redirect('http://symfony.com/doc');
}
            </code></pre>
        </figure>

        <p>
        If you're serving HTML, you'll want to render a template. The <code class="line_code">render()</code> method renders a template and puts that content into a <code class="line_code">Response</code> object for you:
        </p>

        <figure class="block_code">
                <pre><code>
// renders templates/lucky/number.html.twig
return $this->render('lucky/number.html.twig', ['number' => $number]);
            </code></pre>
        </figure>

        <p>
        Symfony comes packed with a lot of useful classes and functionalities, called <a href="https://symfony.com/doc/current/service_container.html">services</a>. These are used for rendering templates, sending emails, querying the database and any other "work" you can think of.
        </p>

        <p>
        If you need a service in a controller, type-hint an argument with its class (or interface) name. Symfony will automatically pass you the service you need:
        </p>

        <figure class="block_code">
                <pre><code>
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
// ...

#[Route('/lucky/number/{max}')]
public function number(int $max, LoggerInterface $logger): Response
{
    $logger->info('We are logging!');
    // ...
}
            </code></pre>
        </figure>

        <p>
        When things are not found, you should return a 404 response. To do this, throw a special type of exception:
        </p>

        <figure class="block_code">
                <pre><code>
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

// ...
public function index(): Response
{
    // retrieve the object from database
    $product = ...;
    if (!$product) {
        throw $this->createNotFoundException('The product does not exist');

        // the above is just a shortcut for:
        // throw new NotFoundHttpException('The product does not exist');
    }

    return $this->render(...);
}
            </code></pre>
        </figure>

        <p>
        What if you need to read query parameters, grab a request header or get access to an uploaded file? That information is stored in Symfony's Request object. To access it in your controller, add it as an argument and type-hint it with the Request class:
        </p>

        <figure class="block_code">
                <pre><code>
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
// ...

public function index(Request $request, string $firstName, string $lastName): Response
{
    $page = $request->query->get('page', 1);

    // ...
}
            </code></pre>
        </figure>

        <p>
        Symfony provides a session object that you can use to store information about the user between requests. Session is enabled by default, but will only be started if you read or write from it.
        </p>

        <p>
        You can also store special messages, called "flash" messages, on the user's session. By design, flash messages are meant to be used exactly once: they vanish from the session automatically as soon as you retrieve them. This feature makes "flash" messages particularly great for storing user notifications.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/controller.html#the-request-and-response-object" target="_blank">The Request and Response Object</a></h2>

        <p>
        As mentioned earlier, Symfony will pass the Request object to any controller argument that is type-hinted with the Request class:
        </p>

        <figure class="block_code">
                <pre><code>
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

public function index(Request $request): Response
{
    $request->isXmlHttpRequest(); // is it an Ajax request?

    $request->getPreferredLanguage(['en', 'fr']);

    // retrieves GET and POST variables respectively
    $request->query->get('page');
    $request->request->get('page');

    // retrieves SERVER variables
    $request->server->get('HTTP_HOST');

    // retrieves an instance of UploadedFile identified by foo
    $request->files->get('foo');

    // retrieves a COOKIE value
    $request->cookies->get('PHPSESSID');

    // retrieves an HTTP request header, with normalized, lowercase keys
    $request->headers->get('host');
    $request->headers->get('content-type');
}
            </code></pre>
        </figure>

        <p>
        The Request class has several public properties and methods that return any information you need about the request.
        </p>

        <p>
        To return JSON from a controller, use the json() helper method. This returns a JsonResponse object that encodes the data automatically:
        </p>

        <figure class="block_code">
                <pre><code>
use Symfony\Component\HttpFoundation\JsonResponse;
// ...

public function index(): JsonResponse
{
    // returns '{"username":"jane.doe"}' and sets the proper Content-Type header
    return $this->json(['username' => 'jane.doe']);

    // the shortcut defines three optional arguments
    // return $this->json($data, $status = 200, $headers = [], $context = []);
}
            </code></pre>
        </figure>

        <p>
        If the serializer service is enabled in your application, it will be used to serialize the data to JSON. Otherwise, the json_encode function is used.
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/templates.html" target="_blank">Creating and Using Templates</a></h1>

        <p>
        A template is the best way to organize and render HTML from inside your application, whether you need to render HTML from a controller or generate the contents of an email. Templates in Symfony are created with Twig: a flexible, fast, and secure template engine.
        </p>

        <p>
        Before explaining in detail how to create and render templates, look at the following example for a quick overview of the whole process. First, you need to create a new file in the templates/ directory to store the template contents:
        </p>

        <figure class="block_code">
                <pre><code>
{# templates/user/notifications.html.twig #}
&lth1&gtHello {{ user_first_name }}!&lt/h1&gt
&ltp&gtYou have {{ notifications|length }} new notifications.&lt/p&gt
            </code></pre>
        </figure>

        <p>
        Then, create a controller that renders this template and passes to it the needed variables:
        </p>

        <figure class="block_code">
                <pre><code>
// src/Controller/UserController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    // ...

    public function notifications(): Response
    {
        // get the user information and notifications somehow
        $userFirstName = '...';
        $userNotifications = ['...', '...'];

        // the template path is the relative file path from `templates/`
        return $this->render('user/notifications.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'user_first_name' => $userFirstName,
            'notifications' => $userNotifications,
        ]);
    }
}
            </code></pre>
        </figure>

        <p>
        Symfony recommends the following for template names:
            <ul>
                <li>Use snake case for filenames and directories (e.g. blog_posts.html.twig, admin/default_theme/blog/index.html.twig, etc.);</li>
                <li>Define two extensions for filenames (e.g. index.html.twig or blog_posts.xml.twig) being the first extension (html, xml, etc.) the final format that the template will generate.</li>
            </ul>
            Although templates usually generate HTML contents, they can generate any text-based format. That's why the two-extension convention simplifies the way templates are created and rendered for multiple formats.
        </p>

        <p>
        Templates are stored by default in the <code class="line_code">templates/</code> directory. When a service or controller renders the <code class="line_code">product/index.html.twig template</code>, they are actually referring to the <code class="line_code">&ltyour-project&gt/templates/product/index.html.twig</code> file.
        </p>

        <p>
            <a href="https://symfony.com/doc/current/templates.html">Voir la doc pour plus d'info sur twig</a>
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/frontend.html" target="_blank">WebPack Encore -> Front : JS React CSS SCSS ... </a></h1>

        <p>
        Symfony ships with a pure-JavaScript library - called Webpack Encore - that makes it a joy to work with CSS and JavaScript. You can use it, use something else, or create static CSS and JS files in your public/ directory directly and include them in your templates.
        </p>

        <p>
        Webpack Encore is a simpler way to integrate Webpack into your application. It wraps Webpack, giving you a clean & powerful API for bundling JavaScript modules, pre-processing CSS & JS and compiling and minifying assets. Encore gives you professional asset system that's a delight to use.
        </p>

        <p>
        First, make sure you install Node.js. Optionally you can also install the Yarn package manager. In the next sections you will always see the commands for both npm and yarn, but you only need to run one of them.
        </p>

        <p>
        the following instruction for symfony application <a href="https://symfony.com/doc/current/frontend/encore/installation.html">exist for non symfony app too</a>.
        </p>

        <p>
        Run these commands to install both the PHP and JavaScript dependencies in your project:
        </p>

        <figure class="block_code">
                <pre><code>
composer require symfony/webpack-encore-bundle

# if yarn
yarn install

# if npm
npm install
            </code></pre>
        </figure>

        <p>
        If you are using Symfony Flex, this will install and enable the WebpackEncoreBundle, create the assets/ directory, add a webpack.config.js file, and add node_modules/ to .gitignore. You can skip the rest of this article and go write your first JavaScript and CSS by reading Encore: Setting up your Project! 
        </p>

        <p>
            Je pense que flex s'intalle automatiquement maintenant car en installant webpack Encore, les fichiers mentionné se créer automatiquement. Sans avoir installer flex auparavant. 
        </p>

        <p>
        After installing Encore, your app already has a few files, organized into an <code class="line_code">assets/</code> directory:
        <ul>
            <li>assets/app.js</li>
            <li>assets/bootstrap.js</li>
            <li>assets/controllers.json</li>
            <li>assets/styles/app.css</li>
            <li>assets/controllers/hello_controller.js</li>
        </ul>
        </p>

        <p>
        With Encore, think of your <code class="line_code">app.js</code> file like a standalone JavaScript application: it will require all of the dependencies it needs (e.g. jQuery or React), including any CSS. Your <code class="line_code">app.js</code> file is already doing this with a JavaScript <code class="line_code">import</code> statement:
        </p>


        <figure class="block_code">
                <pre><code>
// assets/app.js
// ...

import './styles/app.css';
            </code></pre>
        </figure>

        <p>
        Encore's job (via Webpack) is simple: to read and follow all of the import statements and create one final <code class="line_code">app.js</code> (and <code class="line_code">app.css</code>) that contains everything your app needs. Encore can do a lot more: minify files, pre-process Sass/LESS, support React, Vue.js, etc.
        </p>

        <p>
        The other files - bootstrap.js, controllers.json and hello_controller.js relate to a topic you'll learn about soon: Stimulus & Symfony UX.
        </p>

        


        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/frontend/encore/simple-example.html#configuring-encore-webpack" target="_blank">WebPack Encore config</a></h2>


        <p>
        Everything in Encore is configured via a webpack.config.js file at the root of your project. It already holds the basic config you need :
        </p>

        <figure class="block_code">
                <pre><code>
// webpack.config.js
const Encore = require('@symfony/webpack-encore');

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')

    .addEntry('app', './assets/app.js')

    // uncomment this if you want use jQuery in the following example
    .autoProvidejQuery()
;

// ...
            </code></pre>
        </figure>

        <p>
        The key part is <code class="line_code">addEntry()</code> this tells Encore to load the <code class="line_code">assets/app.js</code> file and follow all of the require() statements. It will then package everything together and - thanks to the first app argument - output final <code class="line_code">app.js</code> and <code class="line_code">app.css</code> files into the <code class="line_code">public/build</code> directory.
        </p>

        <p>
        To build the assets, run the following if you use the Yarn package manager: <br>
        Or 'npm run ...' :
        </p>

        <figure class="block_code">
                <pre><code>
#compil assets and automatically re-compile when files change
yarn watch
or
npm run watch

#or, run a dev-server that can  sometimes update your code without refreshing
yarn dev-server

# compil assets once
yarn dev

# on deploy, create a production build
yarn build
            </code></pre>
        </figure>

        <p>
        All of these commands - e.g. dev or watch - are shortcuts that are defined in your package.json file. If you use the npm package manager, replace yarn with npm run.
        </p>

        <p>
        Stop and restart encore each time you update your webpack.config.js file.
        </p>

        <p>
        Congrats! You now have three new files:
        <ul>
            <li>public/build/app.js (holds all the JavaScript for your "app" entry)</li>
            <li>public/build/app.css (holds all the CSS for your "app" entry)</li>
            <li>public/build/runtime.js (a file that helps Webpack do its job)</li>
        </ul>
        </p>

        <p>
            Les fichiers JS qui compose app.js sont à placer dans assets/ directement. 
            On les exporte comme habituellement, puis les importes dans app.js de la même manière. 
        </p>

        <p>
            Instead of using plain CSS you can also use Sass, LESS or Stylus. To use Sass, rename the app.css file to app.scss and update the import statement:
        </p>

        <figure class="block_code">
                <pre><code>
// assets/app.js
- import './styles/app.css';
+ import './styles/app.scss';
            </code></pre>
        </figure>

        <p>
        Then, tell Encore to enable the Sass preprocessor:
        </p>

        <figure class="block_code">
                <pre><code>
// webpack.config.js
  Encore
      // ...

+    .enableSassLoader()
  ;
            </code></pre>
        </figure>

        <p>
        ;

Because you just changed your webpack.config.js file, you'll need to restart Encore. When you do, you'll see an error! Encore supports many features. But, instead of forcing all of them on you, when you need a feature, Encore will tell you what you need to install. Run:
        </p>

        <figure class="block_code">
                <pre><code>

yarn add sass-loader@^12.0.0 sass --dev

yarn encore dev --watch

or for npm :

npm install sass-loader@^12.0.0 sass --save-dev

npm run watch
            </code></pre>
        </figure>

        <p>
        Your app now supports Sass. 
        </p>

        <p>
            details <a href="https://symfony.com/doc/current/frontend/encore/simple-example.html#using-sass-less-stylus">here</a>.
        </p>

        <p>
        Using React? First add some dependencies with Yarn:
        </p>

        <figure class="block_code">
                <pre><code>
# if you use the Yarn package manager
yarn add react react-dom prop-types

# if you use the npm package manager
npm install react react-dom prop-types --save
            </code></pre>
        </figure>


        <p>
        Enable react in your webpack.config.js:
        </p>

        <figure class="block_code">
                <pre><code>
// webpack.config.js
  // ...

  Encore
      // ...
+     .enableReactPreset()
  ;
            </code></pre>
        </figure>

        <p>
        Then restart Encore. When you do, it will give you a command you can run to install any missing dependencies. After running that command and restarting Encore, you're done!
        </p>

        <p>
        Your .js and .jsx files will now be transformed through babel-preset-react.
        </p>


        <p>
        Babel is automatically configured for all .js and .jsx files via the babel-loader with sensible defaults (e.g. with the @babel/preset-env and @babel/preset-react if requested).
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/frontend/encore/server-data.html" target="_blank">Passing Information from Twig to JavaScript</a></h2>

        <p>
        In Symfony applications, you may find that you need to pass some dynamic data (e.g. user information) from Twig to your JavaScript code. One great way to pass dynamic configuration is by storing information in <code class="line_code">data</code> attributes and reading them later in JavaScript. For example:
        </p>

        <figure class="block_code">
                <pre><code>
&ltdiv class="js-user-rating"
    data-is-authenticated="{{ app.user ? 'true' : 'false' }}"
    data-user="{{ app.user|serialize(format = 'json') }}"
&gt
    &lt!-- ... --&gt
&lt/div&gt
            </code></pre>
        </figure>

        <p>
        Fetch this in JavaScript:
        </p>

        <figure class="block_code">
                <pre><code>
document.addEventListener('DOMContentLoaded', function() {
    var userRating = document.querySelector('.js-user-rating');
    var isAuthenticated = userRating.dataset.isAuthenticated;
    var user = JSON.parse(userRating.dataset.user);

});
            </code></pre>
        </figure>

        <p>
        There is no size limit for the value of the data- attributes, so you can store any content. In Twig, use the html_attr escaping strategy to avoid messing with HTML attributes. For example, if your User object has some getProfileData() method that returns an array, you could do the following:
        </p>

        <figure class="block_code">
                <pre><code>
&ltdiv data-user-profile="{{ app.user ? app.user.profileData|json_encode|e('html_attr') }}"&gt
    &lt!-- ... --&gt
&lt/div&gt
            </code></pre>
        </figure>

        <p>
            Doc de l'attribut HTML <code class="line_code">data-</code> <a href="https://developer.mozilla.org/fr/docs/Web/HTML/Global_attributes/data-*">ici</a> : <br>
            Les attributs universels  <code class="line_code">data-*</code> forment une classe d'attributs, appelés attributs de données (data attributes). Ils permettent d'échanger des données propriétaire entre le HTML et la représentation du DOM, qu'on peut manipuler avec des scripts.
        </p>

        <p>
        De tels attributs sont disponibles via l'interface <code class="line_code">HTMLElement</code> de l'élément pour lequel l'attribut est utilisé. La propriété <code class="line_code">HTMLElement.dataset</code> permet d'accéder à l'attribut. Ici, l'astérisque (*) peut être remplacée par n'importe quel nom valide selon les règles appliquées aux noms XML et en respectant les contraintes suivantes : 
        <ul>
            <li>Le nom ne peut pas commencer par xml, quelle que soit la casse utilisée pour les différentes lettres</li>
            <li>Le nom ne doit pas contenir de point-virgule (U+003A)</li>
            <li>Le nom ne doit pas contenir de lettres majuscules de l'alphabet latin (A à Z).</li>
        </ul>
        </p>

        <p>
            Doc de <code class="line_code">HTMLElement.dataset</code> <a href="https://developer.mozilla.org/fr/docs/Web/API/HTMLElement/dataset">ici</a> :
        </p>

        <p>
        La propriété en lecture seule <code class="line_code">dataset</code>, rattachée à l'interface HTMLElement, fournit un accès en lecture/écriture aux attributs de données (data-*) de l'élément. Elle expose un objet DOMStringMap avec un élément pour chaque attribut data-*.
        </p>

        <p>
        En HTML : Le nom de l'attribut commence par data-. Il ne peut contenir que des lettres, des nombres, des tirets (-), des points (.), des doubles-points (:), et des tirets bas (_). Les lettres majuscules ASCII (A à Z) sont converties en minuscules.
        </p>

        <p>
        En JavaScript : Le nom de la propriété est le même que celui de l'attribut auquel on a retiré le préfixe data-, et on retire les tirets (-) en mettant les lettres qui suivent en majuscules afin d'obtenir une camelCase.
        </p>

        <p>
        Il est possible d'accéder aux valeurs d'un attribut et de le modifier en utilisant le nom de la clé comme propriété de l'objet : <code class="line_code">element.dataset.nomcle</code>
        </p>

        <p>
        Il est aussi possible de lire et d'écrire les attributs avec la notation entre crochets : <code class="line_code">element.dataset['nomcle']</code>
        </p>

        <p>
        L'opérateur in permet de vérifier si un attribut donné existe : <code class="line_code">'nomcle' in element.dataset</code>
        </p>


        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/frontend/encore/server-data.html" target="_blank">API plateform</a></h2>

        <p>
        API Platform est un framework web utilisé pour générer des API REST et GraphQL4, se basant sur le patron de conception MVC. 
        </p>

        <p>
        API Platform contient trois parties :
            <ul>
                <li>Un backend comprenant les routes de l’API, supportant plusieurs format d’entrées et sorties pour la négociation de contenu, telles que JSON-LD, GraphQL, Hydra, JSON:API, XML, CSV, YAML, ou autres.</li>
                <li>Un backend contenant la documentation de l’API, générée automatiquement et basé sur Swagger, utilisant le format de specification OpenAPI (en).</li>
                <li>Un back office d’administration, basé sur React Admin, ainsi qu’un outil pour générer des progressive web app en plusieurs langages, comme React, Vue.js, Next.js, React Native, ou autres.</li>
            </ul> 
        </p>
















        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/quick_tour/flex_recipes.html" target="_blank">Symfony Flex</a></h2>

        <p>
        Unless you're building a pure API (more on that soon!), you'll probably want to render HTML. To do that, you'll use Twig. Twig is a flexible, fast, and secure template engine for PHP. It makes your templates more readable and concise; it also makes them more friendly for web designers.
        </p>

        <p>
        Is Twig already installed in our application? Actually, not yet! And that's great! When you start a new Symfony project, it's small: only the most critical dependencies are included in your composer.json file. Unless you init you project with --full or -- webapp.
        </p>

        <p>
        This makes Symfony different from any other PHP framework! Instead of starting with a bulky app with every possible feature you might ever need, a Symfony app is small, simple and fast. And you're in total control of what you add.
        </p>
        
        <p>
        First, twig is not the name of a Composer package: it's a Flex alias that points to symfony/twig-bundle. Flex resolves that alias for Composer.
        </p>

        <p>
        And second, Flex installs a recipe for symfony/twig-bundle. What's a recipe? It's a way for a library to automatically configure itself by adding and modifying files. Thanks to recipes, adding features is seamless and automated: install a package and you're done!
        </p>

        <p>
        What did this recipe do? In addition to automatically enabling the feature in config/bundles.php, it added 3 things:
        <ul>
            <li><code class="line_code">config/packages/twig.yaml</code> A configuration file that sets up Twig with sensible defaults. </li>
            <li><code class="line_code">config/packages/test/twig.yaml</code> A configuration file that changes some Twig options when running tests. </li>
            <li><code class="line_code">templates/</code> This is the directory where template files will live. The recipe also added a <code class="line_code">base.html.twig</code> layout file. </li>
        </ul>
        </p>

        <p>
            Flex semble s'installer de base avec l'initialisation de symfony. 
        </p>



        
      







        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/frontend/encore/reactjs.html" target="_blank">Enabling React.js</a></h2>

        <p>
        Using React? First add some dependencies with Yarn:
        </p>

        <figure class="block_code">
                <pre><code>
# if you use the Yarn package manager
yarn add react react-dom prop-types

# if you use the npm package manager
npm install react react-dom prop-types --save
            </code></pre>
        </figure>


        <p>
        Enable react in your webpack.config.js:
        </p>

        <figure class="block_code">
                <pre><code>
// webpack.config.js
  // ...

  Encore
      // ...
+     .enableReactPreset()
  ;
            </code></pre>
        </figure>

        <p>
        Then restart Encore. When you do, it will give you a command you can run to install any missing dependencies. After running that command and restarting Encore, you're done!
        </p>

        <p>
        Your .js and .jsx files will now be transformed through babel-preset-react.
        </p>
    






































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
symfony new --webapp mon-super-projet    anciennement --full déprécié 
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
                Doc <a href="https://symfony.com/doc/current/doctrine.html">ici</a>.
            </p>

            <p>
            First, install Doctrine support via the orm Symfony pack, as well as the MakerBundle, which will help generate some code:
            </p>

            <figure class="block_code">
                <pre><code>
composer require symfony/orm-pack
composer require --dev symfony/maker-bundle
                </code></pre>
            </figure>

            <p>
            The database connection information is stored as an environment variable called <code class="line_code">DATABASE_URL</code>. For development, you can find and customize this inside <code class="line_code">.env</code> :
            </p>

            <figure class="block_code">
                <pre><code>
# .env (or override DATABASE_URL in .env.local to avoid committing your changes)

# customize this line!
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"

# to use mariadb:
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=mariadb-10.5.8"

# to use sqlite:
# DATABASE_URL="sqlite:///%kernel.project_dir%/var/app.db"

# to use postgresql:
# DATABASE_URL="postgresql://db_user:db_password@127.0.0.1:5432/db_name?serverVersion=11&charset=utf8"

# to use oracle:
# DATABASE_URL="oci8://db_user:db_password@127.0.0.1:1521/db_name"
                </code></pre>
            </figure>

            <p>
            Now that your connection parameters are setup, Doctrine can create the db_name database for you:
            </p>

            <figure class="block_code">
                <pre><code>
php bin/console doctrine:database:create
                </code></pre>
            </figure>

            <p>
            There are more options in <code class="line_code">config/packages/doctrine.yaml</code> that you can configure.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/doctrine.html#creating-an-entity-class" target="_blank">Creating an Entity Class</a></h2>

            <p>
                On va à présent créer une classe qui corrsepond à une table de notre base de donnée. C'est une Entity Class. On peut siplifier sa création grâce à une commande qui nous posera des questions sur cette table. Cette commande est : <code class="line_code">make:entity</code>
            </p>

            <figure class="block_code">
                <pre><code>
$ php bin/console make:entity

Class name of the entity to create or update:
> Product

New property name (press &ltreturn&gt to stop adding fields):
> name

Field type (enter ? to see all types) [string]:
> string

Field length [255]:
> 255

Can this field be null in the database (nullable) (yes/no) [no]:
> no

New property name (press &ltreturn&gt to stop adding fields):
> price

Field type (enter ? to see all types) [string]:
> integer

Can this field be null in the database (nullable) (yes/no) [no]:
> no

New property name (press &ltreturn&gt to stop adding fields):
>
(press enter again to finish)
                </code></pre>
            </figure>

            <p>
            Whoa! You now have a new <code class="line_code">src/Entity/Product.php</code> file:
            </p>
            
            <figure class="block_code">
                <pre><code>
// src/Entity/Product.php
namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

 #[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length: 255)]
    private string $name;

    #[ORM\Column]
    private int $price;

    public function getId(): ?int
    {
        return $this->id;
    }

    // ... getter and setter methods
}
                </code></pre>
            </figure>

            <p>
            This class is called an "entity". And soon, you'll be able to save and query Product objects to a product table in your database. Each property in the Product entity can be mapped to a column in that table. This is usually done with attributes: the #[ORM\Column(...)] comments that you see above each property:
            </p>

            <img src="../images/mapping_single_entity.png"/>

            <p>
            The <code class="line_code">make:entity</code> command is a tool to make life easier. But this is your code: add/remove fields, add/remove methods or update configuration.
            </p>

            <div class="em">Attention : users se créé avec <code class="line_code">php bin/console make:user</code> et on répond oui pour l'introdroduire en DB via doctrine. Cela créera en plus tout ce qui est nécéssaire pour l'authentification (voir le chap sécurity/Authentication).</div>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/doctrine.html#migrations-creating-the-database-tables-schema" target="_blank">Migration</a></h2>

            <p>
                Migration permet de créer un DB complète à partir de nos Entity Class ou bien de la mettre à jour avec des nouvelles tables/nouveaux champs.
            </p>

            <p>
            If you just defined this class, your database doesn't actually have the <code class="line_code">product</code> table yet. To add it, you can leverage the <code class="line_code">DoctrineMigrationsBundle</code>, which is already installed:
            </p>

            <figure class="block_code">
                <pre><code>
php bin/console make:migration
                </code></pre>
            </figure>

            <p>
            If everything worked, you should see something like this:
            </p>

            <figure class="block_code">
                <pre><code>
SUCCESS!

Next: Review the new migration "migrations/Version20211116204726.php"
Then: Run the migration with php bin/console doctrine:migrations:migrate
                </code></pre>
            </figure>

            <p>
            If you open this file, it contains the SQL needed to update your database! To run that SQL, execute your migrations:
            </p>

            <figure class="block_code">
                <pre><code>
php bin/console doctrine:migrations:migrate
                </code></pre>
            </figure>

            <p>
            This command executes all migration files that have not already been run against your database. You should run this command on production when you deploy to keep your production database up-to-date.
            </p>

            <p>
            But what if you need to add a new field property to Product, like a <code class="line_code">description</code> ? You can edit the class to add the new property. But, you can also use <code class="line_code">make:entity again</code> :
            </p>

            <figure class="block_code">
                <pre><code>
 $ php bin/console make:entity

Class name of the entity to create or update
> Product

New property name (press &ltreturn&gt to stop adding fields):
> description

Field type (enter ? to see all types) [string]:
> text

Can this field be null in the database (nullable) (yes/no) [no]:
> no

New property name (press &ltreturn&gt to stop adding fields):
>
(press enter again to finish)
                </code></pre>
            </figure>

            <p>
            This adds the new description property and <code class="line_code">getDescription()</code> and <code class="line_code">setDescription()</code> methods.
            </p>

            <p>
            The new property is mapped, but it doesn't exist yet in the <code class="line_code">product</code> table. No problem! Generate a new migration:
            </p>

            <figure class="block_code">
                <pre><code>
php bin/console make:migration
                </code></pre>
            </figure>

            <p>
            The migration system is smart. It compares all of your entities with the current state of the database and generates the SQL needed to synchronize them ! And like before, execute your migrations:
            </p>

            <figure class="block_code">
                <pre><code>
php bin/console doctrine:migrations:migrate
                </code></pre>
            </figure>

            <p>
            This will only execute the one new migration file, because DoctrineMigrationsBundle knows that the first migration was already executed earlier. Behind the scenes, it manages a <code class="line_code">migration_versions</code> table to track this.
            </p>

            <p>
            Each time you make a change to your schema, run these two commands to generate the migration and then execute it. Be sure to commit the migration files and execute them when you deploy.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/doctrine.html#persisting-objects-to-the-database" target="_blank">Persisting Objects to the Database</a></h2>

            <p>
            It's time to save a <code class="line_code">Product</code> object to the database! Let's create a new controller to experiment:
            </p>

            <figure class="block_code">
                <pre><code>
php bin/console make:controller ProductController
                </code></pre>
            </figure>

            <p>
            Inside the controller, you can create a new <code class="line_code">Product</code> object, set data on it, and save it:
            </p>

            <figure class="block_code">
                <pre><code>
// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'create_product')]
13  public function createProduct(ManagerRegistry $doctrine): Response
    {
15      $entityManager = $doctrine->getManager();

17      $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(1999);
20      $product->setDescription('Ergonomic and stylish!');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
23      $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
26      $entityManager->flush();

        return new Response('Saved new product with id '.$product->getId());
    }
}
                </code></pre>
            </figure>

            <p>
                If you go on http://localhost:8000/product You'll see that you've just created your first row in the <code class="line_code">product</code> table. To prove it, you can query the database directly:
            </p>

            <p>
                explications : 
                <ul>
                    <li>line 13 The <code class="line_code">ManagerRegistry $doctrine</code> argument tells Symfony to inject the Doctrine service into the controller method.</li>
                    <li>line 15 The <code class="line_code">$doctrine->getManager()</code> method gets Doctrine's entity manager object, which is the most important object in Doctrine. It's responsible for saving objects to, and fetching objects from, the database.</li>
                    <li>lines 17-20 In this section, you instantiate and work with the <code class="line_code">$product</code> object like any other normal PHP object.</li>
                    <li>line 23 The <code class="line_code">persist($product)</code> call tells Doctrine to "manage" the <code class="line_code">$product</code> object. This does not cause a query to be made to the database.</li>
                    <li>line 26 When the <code class="line_code">flush()</code> method is called, Doctrine looks through all of the objects that it's managing to see if they need to be persisted to the database. In this example, the <code class="line_code">$product</code> object's data doesn't exist in the database, so the entity manager executes an INSERT query, creating a new row in the product table.</li>
                </ul>

            </p>

            <p>
            Whether (Qu'il s'agisse) you're creating or updating objects, the workflow is always the same: Doctrine is smart enough to know if it should INSERT or UPDATE your entity.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/doctrine.html#validating-objects" target="_blank">Validating Objects</a></h2>

            <p>
            <a href="https://symfony.com/doc/current/validation.html">The Symfony validator</a> (Validation is a very common task in web applications. Data entered in forms needs to be validated. Data also needs to be validated before it is written into a database or passed to a web service.) reuses Doctrine metadata to perform some basic validation tasks:
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/doctrine.html#fetching-objects-from-the-database" target="_blank">Fetching Objects from the Database</a></h2>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/doctrine.html#automatically-fetching-objects-paramconverter" target="_blank">Automatically Fetching Objects (ParamConverter)</a></h2>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/doctrine.html#updating-an-object" target="_blank">Updating an Object</a></h2>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/doctrine.html#deleting-an-object" target="_blank">Deleting an Object</a></h2>


            <p>
                -----------------------------------------------------------
            </p>

            



























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
        </p>

        <p>
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

        <p>
        To get started, install the SecurityBundle:
        </p>

        <figure class="block_code">
                <pre><code>
composer require symfony/security-bundle
            </code></pre>
        </figure>

        <p>
        If you have Symfony Flex installed, this also creates a security.yaml configuration file for you :
        </p>

        <figure class="block_code">
                <pre><code>
# config/packages/security.yaml
security:
    # https://symfony.com/doc/current/security.html#registering-the-user-hashing-passwords
    password_hashers:
        Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface: 'auto'
    # https://symfony.com/doc/current/security.html#where-do-users-come-from-user-providers
    providers:
        users_in_memory: { memory: null }
    firewalls:
        dev:
            pattern: ^/(_(profiler|wdt)|css|images|js)/
            security: false
        main:
            lazy: true
            provider: users_in_memory

            # activate different ways to authenticate
            # https://symfony.com/doc/current/security.html#firewalls-authentication

            # https://symfony.com/doc/current/security/impersonating_user.html
            # switch_user: true

    # Easy way to control access for large sections of your site
    # Note: Only the *first* access control that matches will be used
    access_control:
        # - { path: ^/admin, roles: ROLE_ADMIN }
        # - { path: ^/profile, roles: ROLE_USER }
            </code></pre>
        </figure>

        <p>
        That's a lot of config! In the next sections, the three main elements are discussed:
        <ul>
            <li> <a href="https://symfony.com/doc/current/security.html#the-user">The User</a> (providers) : Any secured section of your application needs some concept of a user. The user provider loads users from any storage (e.g. the database) based on a "user identifier" (e.g. the user's email address); </li>
            <li> <a href="https://symfony.com/doc/current/security.html#the-firewall">The Firewall</a> & <a href="https://symfony.com/doc/current/security.html#authenticating-users">Authenticating Users</a> (firewalls) : The firewall is the core of securing your application. Every request within the firewall is checked if it needs an authenticated user. The firewall also takes care of authenticating this user (e.g. using a login form); </li>
            <li><a href="https://symfony.com/doc/current/security.html#access-control-authorization">Access Control (Authorization)</a> (access_control) : Using access control and the authorization checker, you control the required permissions to perform a specific action or visit a specific URL.</li>
        </ul>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/security.html#the-user" target="_blank">The User</a></h2>

        <p>
        Permissions in Symfony are always linked to a user object. If you need to secure (parts of) your application, you need to create a user class. This is a class that implements UserInterface. This is often a Doctrine entity, but you can also use a dedicated Security user class.
        </p>

        <p>
        The easiest way to generate a user class is using the <code class="line_code">make:user</code> command from the <code class="line_code">MakerBundle</code> (cela créera une entity user) (Besides creating the entity, the <code class="line_code">make:user</code> command also adds config for a user provider in your security configuration) :
        </p>

        <figure class="block_code">
                <pre><code>
php bin/console make:user
 The name of the security user class (e.g. User) [User]:
 > User

 Do you want to store user data in the database (via Doctrine)? (yes/no) [yes]:
 > yes

 Enter a property name that will be the unique "display" name for the user (e.g. email, username, uuid) [email]:
 > email

 Will this app need to hash/check user passwords? Choose No if passwords are not needed or will be checked/hashed by some other system (e.g. a single sign-on server).

 Does this app need to hash/check user passwords? (yes/no) [yes]:
 > yes

 created: src/Entity/User.php
 created: src/Repository/UserRepository.php
 updated: src/Entity/User.php
 updated: config/packages/security.yaml
            </code></pre>
        </figure>

        <figure class="block_code">
                <pre><code>
// src/Entity/User.php
namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $email;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    #[ORM\Column(type: 'string')]
    private $password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * The public representation of the user (e.g. a username, an email address, etc.)
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/security.html#the-firewall" target="_blank">The Firewall</a></h2>

        <p>
        The firewalls section of config/packages/security.yaml is the most important section. A "firewall" is your authentication system: the firewall defines which parts of your application are secured and how your users will be able to authenticate (e.g. login form, API token, etc).
        </p>

        <figure class="block_code">
                <pre><code>
# config/packages/security.yaml
security:
    # ...
    firewalls:
        dev:
            pattern: ^/(_(profiler|wdt)|css|images|js)/
            security: false
        main:
            lazy: true
            provider: users_in_memory

            # activate different ways to authenticate
            # https://symfony.com/doc/current/security.html#firewalls-authentication

            # https://symfony.com/doc/current/security/impersonating_user.html
            # switch_user: true
            </code></pre>
        </figure>

        <p>
        Only one firewall is active on each request: Symfony uses the pattern key to find the first match (you can also match by host or other things).
        </p>

        <p>
        The dev firewall is really a fake firewall: it makes sure that you don't accidentally block Symfony's dev tools - which live under URLs like /_profiler and /_wdt.
        </p>

        <p>
        All real URLs are handled by the main firewall (no pattern key means it matches all URLs). A firewall can have many modes of authentication, in other words, it enables many ways to ask the question "Who are you?".
        </p>

        <p>
        Often, the user is unknown (i.e. not logged in) when they first visit your website. If you visit your homepage right now, you will have access and you'll see that you're visiting a page behind the firewall in the toolbar:
        </p>

        <p>
        Visiting a URL under a firewall doesn't necessarily require you to be authenticated (e.g. the login form has to be accessible or some parts of your application are public). You'll learn how to restrict access to URLs, controllers or anything else within your firewall in the access control section.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/security.html#authenticating-users" target="_blank">Authenticating Users</a></h2>

        <p>
        During authentication, the system tries to find a matching user for the visitor of the webpage. Traditionally, this was done using a login form or a HTTP basic dialog in the browser. However, the SecurityBundle comes with many other authenticators:
            <ul>
                <li><a href="https://symfony.com/doc/current/security.html#form-login">Form Login</a></li>
                <li><a href="https://symfony.com/doc/current/security.html#json-login">JSON Login</a> : Some applications provide an API that is secured using tokens. These applications may use an endpoint that provides these tokens based on a username (or email) and password. The JSON login authenticator helps you create this functionality.</li>
                <li><a href="https://symfony.com/doc/current/security.html#http-basic">HTTP Basic</a>: HTTP Basic authentication is a standardized HTTP authentication framework. It asks credentials (username and password) using a dialog in the browser and the HTTP basic authenticator of Symfony will verify these credentials.</li>
                <li><a href="https://symfony.com/doc/current/security.html#login-link">Login Link</a> : Login links are a passwordless authentication mechanism. The user will receive a short-lived link (e.g. via email) which will authenticate them to the website.</li>
                <li><a href="https://symfony.com/doc/current/security.html#x-509-client-certificates">X.509 Client Certificates</a> : When using client certificates, your web server does all the authentication itself. The X.509 authenticator provided by Symfony extracts the email from the "distinguished name" (DN) of the client certificate. Then, it uses this email as user identifier in the user provider.</li>
                <li><a href="https://symfony.com/doc/current/security.html#remote-users">Remote users</a> : Besides client certificate authentication, there are more web server modules that pre-authenticate a user (e.g. kerberos). The remote user authenticator provides a basic integration for these services.</li>
                <li><a href="https://symfony.com/doc/current/security/custom_authenticator.html">Custom Authenticators</a></li>
                <li><a href="https://github.com/hwi/HWIOAuthBundle">Via a third-party service such as Google, Facebook or Twitter (social login)</a></li>
            </ul>
        </p>

        <p>
            Ici on ne verra que le Form Login.
        </p>

        <p>
        First, create a controller for the login form:
        </p>

        <figure class="block_code">
                <pre><code>
php bin/console make:controller Login

created: src/Controller/LoginController.php
created: templates/login/index.html.twig
            </code></pre>
        </figure>

        <figure class="block_code">
                <pre><code>
// src/Controller/LoginController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(): Response
    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
            </code></pre>
        </figure>

        <p>
        Then, enable the form login authenticator using the form_login setting:
        </p>

        <figure class="block_code">
                <pre><code>
# config/packages/security.yaml
security:
    # ...

    firewalls:
        main:
            # ...
            form_login:
                # "app_login" is the name of the route created previously
                login_path: app_login
                check_path: app_login
            </code></pre>
        </figure>

        <p>
        Once enabled, the security system redirects unauthenticated visitors to the login_path when they try to access a secured place (this behavior can be customized using authentication entry points).
        </p>

        <p>
        Edit the login controller to render the login form:
        </p>

        <figure class="block_code">
                <pre><code>
// ...
+ use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

  class LoginController extends AbstractController
  {
      #[Route('/login', name: 'app_login')]
-     public function index(): Response
+     public function index(AuthenticationUtils $authenticationUtils): Response
      {
+         // get the login error if there is one
+         $error = $authenticationUtils->getLastAuthenticationError();
+
+         // last username entered by the user
+         $lastUsername = $authenticationUtils->getLastUsername();
+
          return $this->render('login/index.html.twig', [
-             'controller_name' => 'LoginController',
+             'last_username' => $lastUsername,
+             'error'         => $error,
          ]);
      }
  }
            </code></pre>
        </figure>

        <p>
        Don't let this controller confuse you. Its job is only to render the form: the form_login authenticator will handle the form submission automatically. If the user submits an invalid email or password, that authenticator will store the error and redirect back to this controller, where we read the error (using <code class="line_code">AuthenticationUtils</code>) so that it can be displayed back to the user.
        </p>

        <p>
        Finally, create or update the template:
        </p>

        <figure class="block_code">
                <pre><code>
{# templates/login/index.html.twig #}
{% extends 'base.html.twig' %}

{# ... #}

{% block body %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <form action="{{ path('app_login') }}" method="post">
        <label for="username">Email:</label>
        <input type="text" id="username" name="_username" value="{{ last_username }}"/>

        <label for="password">Password:</label>
        <input type="password" id="password" name="_password"/>

        {# If you want to control the URL the user is redirected to on success
        <input type="hidden" name="_target_path" value="/account"/> #}

        <button type="submit">login</button>
    </form>
{% endblock %}
            </code></pre>
        </figure>

        <div class="em">The <code class="line_code">error</code> variable passed into the template is an instance of <a href="https://github.com/symfony/symfony/blob/6.1/src/Symfony/Component/Security/Core/Exception/AuthenticationException.php">AuthenticationException</a>. It may contain sensitive information about the authentication failure. Never use <code class="line_code">error.message</code>: use the <code class="line_code">messageKey</code> property instead, as shown in the example. This message is always safe to display.</div>

        <p>
        The form can look like anything, but it usually follows some conventions:
            <ul>
                <li>The <code class="line_code">&ltform&gt</code> element sends a POST request to the <code class="line_code">app_login</code> route, since that's what you configured as the <code class="line_code">check_path</code> under the <code class="line_code">form_login</code> key in <code class="line_code">security.yaml</code>;</li>
                <li>The username (or whatever your user's "identifier" is, like an email) field has the name <code class="line_code">_username</code> and the password field has the name <code class="line_code">_password</code>.</li>
            </ul>
        </p>

        And that's it! When you submit the form, the security system automatically reads the _username and _password POST parameter, loads the user via the user provider, checks the user's credentials and either authenticates the user or sends them back to the login form where the error can be displayed.

        <p>
        This login form is currently not protected against CSRF attacks. Read Security on how to protect your login form.
        </p>

        <p>
        Login CSRF attacks can be prevented using the same technique of adding hidden CSRF tokens into the login forms. The Security component already provides CSRF protection, but you need to configure some options before using it.
        </p>

        <p>
        First, you need to enable CSRF on the form login:
        </p>

        <figure class="block_code">
                <pre><code>
# config/packages/security.yaml
security:
    # ...

    firewalls:
        secured_area:
            # ...
            form_login:
                # ...
                enable_csrf: true
            </code></pre>
        </figure>

        <p>
        Then, use the <code class="line_code">csrf_token()</code> function in the Twig template to generate a CSRF token and store it as a hidden field of the form. By default, the HTML field must be called <code class="line_code">_csrf_token</code> and the string used to generate the value must be <code class="line_code">authenticate</code> :
        </p>

        <figure class="block_code">
                <pre><code>
{# templates/login/index.html.twig #}

{# ... #}
&ltform action="{{ path('app_login') }}" method="post"&gt
    {# ... the login fields #}

    &ltinput type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}"&gt

    &ltbutton type="submit"&gtlogin&lt/button&gt
&lt/form&gt
            </code></pre>
        </figure>

        <p>
        After this, you have protected your login form against CSRF attacks.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/security.html#logging-out" target="_blank">Logging Out</a></h2>

        <p>
        To enable logging out, activate the <code class="line_code">logout</code> config parameter under your firewall:
        </p>

        <figure class="block_code">
                <pre><code>
 # config/packages/security.yaml
security:
    # ...

    firewalls:
        main:
            # ...
            logout:
                path: app_logout

                # where to redirect after logout
                # target: app_any_route
            </code></pre>
        </figure>

        <p>
        Next, you need to create a route for this URL (but not a controller):
        </p>

        <figure class="block_code">
                <pre><code>
// src/Controller/SecurityController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logout()
    {
        // controller can be blank: it will never be called!
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}
            </code></pre>
        </figure>

        <p>
        That's it! By sending a user to the <code class="line_code">app_logout</code> route (i.e. to <code class="line_code">/logout</code>) Symfony will un-authenticate the current user and redirect them.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://symfony.com/doc/current/security.html#access-control-authorization" target="_blank">Access Control (Authorization)</a></h2>

        <p>
        Users can now log in to your app using your login form. Great! Now, you need to learn how to deny access and work with the User object. This is called authorization, and its job is to decide if a user can access some resource (a URL, a model object, a method call, ...).
        </p>

        <p>
            <ol>
                <li>The user receives a specific role when logging in (e.g. <code class="line_code">ROLE_ADMIN</code>).</li>
                <li>You add code so that a resource (e.g. URL, controller) requires a specific "attribute" (e.g. a role like <code class="line_code">ROLE_ADMIN</code>) in order to be accessed.</li>
            </ol>
        </p>

        <p>
        Roles : When a user logs in, Symfony calls the <code class="line_code">getRoles()</code> method on your <code class="line_code">User</code> object to determine which roles this user has. In the <code class="line_code">User</code> class that was generated earlier, the roles are an array that's stored in the database and every user is always given at least one role: <code class="line_code">ROLE_USER</code> : 
        </p>

        <figure class="block_code">
                <pre><code>
// src/Entity/User.php

// ...
class User
{
    #[ORM\Column(type: 'json')]
    private $roles = [];

    // ...
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }
}
            </code></pre>
        </figure>

        <p>
        This is a nice default, but you can do whatever you want to determine which roles a user should have. Here are a few guidelines:
        <ul>
            <li>Every role must start with <code class="line_code">ROLE_ </code>(otherwise, things won't work as expected)</li>
            <li>Other than the above rule, a role is just a string and you can invent what you need (e.g. <code class="line_code">ROLE_PRODUCT_ADMIN</code>).</li>
        </ul>
        </p>

        <p>
        You'll use these roles next to grant access to specific sections of your site.
        </p>

        <p>
        Instead of giving many roles to each user, you can define role inheritance rules by creating a role hierarchy:
        </p>

        <figure class="block_code">
                <pre><code>
# config/packages/security.yaml
security:
    # ...

    role_hierarchy:
        ROLE_ADMIN:       ROLE_USER
        ROLE_SUPER_ADMIN: [ROLE_ADMIN, ROLE_ALLOWED_TO_SWITCH]
            </code></pre>
        </figure>

        <p>
        Users with the <code class="line_code">ROLE_ADMIN</code> role will also have the <code class="line_code">ROLE_USER</code> role. Users with <code class="line_code">ROLE_SUPER_ADMIN</code>, will automatically have <code class="line_code">ROLE_ADMIN</code>, <code class="line_code">ROLE_ALLOWED_TO_SWITCH</code> and <code class="line_code">ROLE_USER</code> (inherited from <code class="line_code">ROLE_ADMIN</code>).
        </p>

        <p>
        There are two ways to deny access to something:
        <ol>
            <li><a href="https://symfony.com/doc/current/security.html#security-authorization-access-control">access_control in security.yaml</a> allows you to protect URL patterns (e.g. /admin/*). Simpler, but less flexible;
            <figure class="block_code">
                <pre><code>
# config/packages/security.yaml
security:
    # ...

    access_control:
        # matches /admin/users/*
        - { path: '^/admin/users', roles: ROLE_SUPER_ADMIN }

        # matches /admin/* except for anything matching the above rule
        - { path: '^/admin', roles: ROLE_ADMIN }
            </code></pre>
        </figure>
        </li>
            <li><a href="https://symfony.com/doc/current/security.html#security-securing-controller">in your controller</a>(or other code).
            <figure class="block_code">
                <pre><code>
// src/Controller/AdminController.php
// ...

public function adminDashboard(): Response
{
    $this->denyAccessUnlessGranted('ROLE_ADMIN');

    // or add an optional message - seen by developers
    $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
}
            </code></pre>
        </figure>
        </li>
        <li>In templates :
        <figure class="block_code">
                <pre><code>
{% if is_granted('ROLE_ADMIN') %}
    &lta href="..."&gtDelete&lt/a&gt
{% endif %}
            </code></pre>
        </figure>
        </li>
        <li>More options to see ... </li>
        </ol>
        </p>

        <p>
        When a visitor isn't yet logged in to your website, they are treated as "unauthenticated" and don't have any roles. This will block them from visiting your pages if you defined an <code class="line_code">access_control</code> rule.
        </p>

        <p>
        In the <code class="line_code">access_control</code> configuration, you can use the <code class="line_code">PUBLIC_ACCESS</code> security attribute to exclude some routes for unauthenticated access (e.g. the login page):
        </p>

        <figure class="block_code">
                <pre><code>
# config/packages/security.yaml
security:

    # ...
    access_control:
        # allow unauthenticated users to access the login form
        - { path: ^/admin/login, roles: PUBLIC_ACCESS }

        # but require authentication for all other admin routes
        - { path: ^/admin, roles: ROLE_ADMIN }
            </code></pre>
        </figure>






































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



        





<?php 
    $content = ob_get_clean(); 

    require_once('structure/layout.php');
?>
