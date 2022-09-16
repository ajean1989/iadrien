<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Builder</title>
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

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://www.youtube.com/watch?v=P3aKRdUyr0s" target="_blank">
        NPM</a></h1>

        <p>
            NPM est un package manager, il sert à installer tous les compileurs dont nous avons besoin (gulp, webpack, react, ... )
        </p>

        <p>
            Pour installer npm, il faut commencer par installer Node.js <a href="https://nodejs.org/en/" target="blank">ici</a>. Cela va installer Node.js et npm.
        </p>

        <p>
            On peut vérifier les versions installées avec : 
        </p>

        <figure class="block_code">
            <pre><code>
node -v
npm -v
            </code></pre>
        </figure>

        <p>
            Quels package installer alors par la suite ? 
        </p>

        <p>
            Cela dépend des besoin, par exemple pour un projet vue.js, webpack est pas mal. Pour Sass, on peut utiliser Gulp. Il y en a beaucoup et il en existe qui font tout en même temps. J'ai retenu quelques principaux :
            <ul>
                <li>Webpack (bien mais demande beaucoup de configuration)</li>
                <li>Gulp (pas mal utilisé)</li>
                <li>Parcel (sans config mais a des limites)</li>
            </ul>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://www.youtube.com/watch?v=P3aKRdUyr0s" target="_blank">
        Installer un package</a></h2>

        <p>
            On peut installer un package de trois manières :
            <ul>
                <li>Localement : avec simplement la commande <code class="line_code">npm install</code>. Le package est installé dans le dossier choisi</li>
                <li>Globalement : avec <code class="line_code">mpn install -g</code>. Disponnible dans tous les dossiers.</li>
                <li>En dépendance de développement : <code class="line_code">mpn install -d</code></li>
            </ul>
            En général, tous les packs doivent être installé localement pour des questions de versionning.
        </p>

        <p>
        Lorsque vous installez un package npm à l'aide de <code class="line_code">npm install &ltpackage-name&gt</code>, vous l'installez en tant que dépendance. Le package est automatiquement répertorié dans le fichier package.json, sous la liste des dépendances.
        </p>

        <p>
        Lorsque vous ajoutez l'indicateur -D ou --save-dev, vous l'installez en tant que dépendance de développement, ce qui l'ajoute à la liste <code class="line_code">devDependencies</code>. Les dépendances de développement sont conçues comme des packages de développement uniquement, qui ne sont pas nécessaires en production. Par exemple tester des packages, webpack ou Babel. <br/>
        Lorsque vous passez en production, si vous tapez npm install et que le dossier contient un fichier package.json, ils sont installés, car npm suppose qu'il s'agit d'un déploiement de développement. Vous devez définir l'indicateur --production (npm install --production) pour éviter d'installer ces dépendances de développement.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://www.youtube.com/watch?v=P3aKRdUyr0s" target="_blank">
        Le fichier package.json</a></h2>

        <p>
            Il est créer par npm et permet d'entrer les infos du projet et les packages utilisés. Il permet même d'installer tous les packages directement si le projet est uploader grâce à la commande <code class="line_code">npm install</code> dans le dossier du fichier package.json. 
        </p>

        <p>
            package.json va également installer les packages sur le serveur de déploiement. 
        </p>

        <p>
            La première chose à faire est donc de créer ce fichier à l'aide de la commande : 
        </p>

        <figure class="block_code">
            <pre><code>
npm init
            </code></pre>
        </figure>

        <p>
            Puis npm demandera les infos nécéssaires sur le projet. Un simple 'entrer' permet de passer la question et pourra être complété plus tard. <code class="line_code">npm init -y</code> créer le fichier avec toutes les valeurs par défaut.
        </p>

        <p>
            Lorsqu'on installe un package, celui-ci est mit en dépendance dans le fichier package.json avec la version utilisée. Il va aussi créer un dossier node_modules dans notre projet où sera stocké tous les packages (ceux qu'on a installé et ceux dont notre package a besoin pour fonctionner).
        </p>

        <p>
            La commande <code class="line_code">npm list</code> permet de voir tous les packages de notre projet ainsi que leur version.
        </p>

        <p>
            Dans le fichier package.json, dans la partie script, la ligne de script est la ligne qui sera executée lors d'un <code class="line_code">npm run nomdeligne</code>. Dans une extension il peut y avoir plusieurs scripts lancée à l'aide de <code class="line_code">npm run</code> en fonction de ce qu'on souhaite faire. 
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://www.youtube.com/watch?v=P3aKRdUyr0s" target="_blank">
        Le versionning</a></h2>

        <p>
        <code class="line_code">npm view &ltpackage-name&gt versions</code> permet de voir toutes les version du package.
        </p>

        <p>
            Une version se compose comme suit : XX.YY.ZZ , exemple 1.0.0, 2.3.8.<br/>
           <ul>
            <li>XX : Version majeur - Gros changement, peu casser le code en cas d'update</li>
            <li>YY : Version mineur - nouvelles fonctions et ne casse pas l'ancien code</li>
            <li>ZZ : Patch< - bug fix</li>
           </ul>
        </p>

        <p>
            Dans le fichier package.json il est indiqué la version avec '^' devant (^4.2.2). Ce qui signifie que les update ne se feront pas au dela de la version majeur 4, seulement les patch et version mineur seront mise à jour avec la commande <code class="line_code">npm update</code>
        </p>

        <p>
            On peut forcer la mise à jour avec <code class="line_code">npm update &ltpackage-name&gt@latest</code> ou <code class="line_code">npm update &ltpackage-name&gt@5</code> pour la version 5 si c'est la dernière. On peut aussi revenir de cette manière à une version antérieur, exemple : <code class="line_code">npm update &ltpackage-name&gt@2</code>.
        </p>

        <p>
            npm créer aussi un fichier package-lock.json qui sert à installer la bonne version des packages lors d'un upload. 
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://getcomposer.org/" target="_blank">
        Composer</a></h1>

        <p>Tuto grafikart <a href="https://grafikart.fr/tutoriels/composer-require-1146#autoplay">ici</a>.</p>

        <p>
        Avec l’arrivé de PHP5, les notions de bibliothèques, composants, package, n’ont jamais été si présent dans le développement web. En effet, grâce à l’ajout des objets et des namespaces, le langage PHP est devenu comme tous les autres langages de programmation, un langage souple, modulable et réutilisable. La très forte communauté a donc créé des milliers de composants, bibliothèques, mais très vite, le surplus est devenu fouillis et il fallait mettre de l’ordre dans tout ça.
        </p>

        <p>
        Composer est un outil mis en place pour la communauté des développeurs de PHP. A l’image de « npm » pour nodejs ou « bundler » pour ruby, il sert de gestionnaire de dépendance entre applications et librairies.
        </p>

        <p>
        De façon plus précise, Composer permet de gérer pour chaque projet, la liste des modules et bibliothèques nécessaires à son fonctionnement ainsi que leurs versions. Il est utilisable via la console en ligne de commande. De plus, il permet de mettre en place un système d’autoload pour les bibliothèques compatibles.
        </p>

        <p>
        Pour utiliser Composer, tout se passe dans le fichier composer.json à la racine de votre projet. Ce fichier va définir toutes les informations concernant votre projet ainsi que toutes ses dépendances.
        </p>

        <p>
        Nous allons prendre comme exemple le fichier composer.json du module zendsqueleton qui est un cas simple pour comprendre :
        </p>

        <figure class="block_code">
            <pre><code>
{
    "name": "zendframework/skeleton-application",
    "description": "Skeleton Application for ZF2",
    "license": "BSD-3-Clause",
    "keywords": [
        "framework",
        "zf2"
    ],
    "homepage": "http://framework.zend.com/",
    "require": {
        "php": ">=5.3.3",
        "zendframework/zendframework": "2.2.*"
    }
}
            </code></pre>
        </figure>

        <p>
        Premièrement, nous voyons que le fichier est un simple tableau au format json. Les premiers éléments sont un ensemble d’attributs définissant le projet. Ce qui nous interesse est la clé « require », c’est ici que sont définit les dépendances. Il y en a deux, chacun avec un nom et une version. Il vous faudra donc PHP 5.3.3 minimum et zendframework dans sa version 2.2 la plus récente.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://getcomposer.org/doc/00-intro.md" target="_blank">
        Installation</a></h2>

        <p>
            Suivre le get started <a href="https://getcomposer.org/doc/00-intro.md">ici</a>.
        </p>

        <p>
        Composer s'installe globalement. On peut ensuite rechercher une librairie existante sur <a href="https://packagist.org/">packagist.org</a>. On peut regarder le code et quelques exemples d'utilisation sur son dépôt github. 
        </p>

        <p>
        Il est ensuite indiquer quel ligne de commande entrer pour l'installer : <code class="line_code">composer require erusev/parsedown</code>. 
        </p>

        <p>
            Cela va installer les fichiers nécéssaires (y compris d'autre lib dont dépend notre libraire) dans le dossier /vendor et remplir le fichier composer.json avec les informations qui permettrons de télécharger ces librairies si le fichier vendor est absent grâce à <code class="line_code">composer install</code>. Cela complète aussi l'autoloader. 
        </p>

        <p>
            Dans composer.json, cela complète "require".
        </p>

        <p>
            On peut aussi installer des librairie de développement avec composer --dev (cela est précisé sur packagist). Si on ne veut pas installer les lib de dev on fait <code class="line_code">composer install --no-dev</code>.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://getcomposer.org/doc/00-intro.md" target="_blank">
        update</a></h2>

        <p>
        <code class="line_code">composer update</code> met à jour les différentes dépendances (librairies). Dans composer.json version : ^1.2.3 mettra à jour tant que le premier chiffre ne change pas. ~1.2.3 n'ira pas plus loin que 1.2.3
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