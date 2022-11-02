<?php $title = 'Firefox'; ?>
<?php ob_start(); ?>

        <h1 id=<?php $ini=0; echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Mozilla/Add-ons/WebExtensions" target="_blank">
        Créé une extension (add-on)</a></h1>

        <p>
        Les extensions, ou modules complémentaires, peuvent étendre et modifier les fonctionnalités d'un navigateur. Les extensions pour Firefox sont construites avec l'API WebExtensions qui fonctionnent pour les différents navigateurs.
        </p>

        <p>
        La technologie d'extensions Firefox est, en grande partie, compatible avec l'API d'extension prise en charge par les navigateurs Chromium tels que Google Chrome, Microsoft Edge et Opera. Dans la plupart des cas, les extensions écrites dans ces navigateurs fonctionnent sur Firefox avec seulement quelques modifications.
        </p>

        <p>
            Infos pour une version basique <a href="https://developer.mozilla.org/fr/docs/Mozilla/Add-ons/WebExtensions/Your_first_WebExtension">ici</a> et avancée <a href="https://developer.mozilla.org/fr/docs/Mozilla/Add-ons/WebExtensions/Your_second_WebExtension">ici</a>
        </p>

        <p>
            Le dossier de l'add-on est organisé comme ceci :
        </p>

        <figure class="block_code">
            <pre><code>
hotreload/

web_ressources/  // Optionel
  frog.jpg
  snake.jpg
  turtle.jpg

content_scripts/    
  hr.js

icons/
  hr-32.png
  hr-48.png

popup/      // Gère le popup dans l'icône sur la barre des tâches de firefox
  hr.css
  hr.html
  hrpop.js

manifest.json
            </code></pre>
         </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Mozilla/Add-ons/WebExtensions/Your_first_WebExtension" target="_blank">
        Le manifest</a></h2>

        <p>
        Il s'agit du seul fichier qui doit être présent dans chaque extension. Il contient des métadonnées de base sur l'extension telles que son nom, sa version et les autorisations requises. Il fournit également des pointeurs vers d'autres fichiers dans l'extension.
        </p>

        <p>
            Il se configure selon l'extension mais voici quelques éléments :
        </p>

        <figure class="block_code">
            <pre><code>
 {
"manifest_version": 2,                      //Version du manifest
"name": "Borderify",
"version": "1.0",                           //Version de l'extension

"description": "Ajoute une bordure rouge pleine sur l'ensemble des pages web mozilla.org.",

"background": {                             //script d'arrière plan
  "scripts": ["background-script.js"]
}

"icons": {                                  
    "48": "icons/border-48.png"
  },

"content_scripts": [                        //script de contenu
  {
    "matches": ["*://*.mozilla.org/*"],
    "js": ["jquery.js", "content-script.js"]
  }
]

            </code></pre>
         </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Mozilla/Add-ons/WebExtensions/Content_scripts" target="_blank">
        Le script de contenu</a></h2>

        <p>
        Utilisez les scripts de contenu pour accéder et manipuler des pages Web. Les scripts de contenu sont chargés dans des pages Web et lancés dans le contexte de cette page particulière.
        </p>

        <p>
        Les scripts de contenu peuvent voir et manipuler le DOM de la page, tout comme les scripts normaux chargés par la page.
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Mozilla/Add-ons/WebExtensions/Content_scripts" target="_blank">
        Le script de contenu</a></h3>
 

        <p>
        Les extensions doivent souvent conserver un état à long terme ou effectuer des opérations à long terme indépendamment de la durée de vie d'une page Web ou d'une fenêtre de navigateur. C'est le rôle des scripts d'arrière-plan.
        </p>

        <p>
        Les scripts en arrière-plan sont chargés dès que l'extension est chargée et restent chargés jusqu'à ce que l'extension soit désactivée ou désinstallée. Vous pouvez utiliser n'importe laquelle des WebExtension APIs dans le script, tant que vous avez demandé les permissions nécessaires.
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Mozilla/Add-ons/WebExtensions/Anatomy_of_a_WebExtension#scripts_darri%C3%A8re-plan" target="_blank">
        Communication en script</a></h3>

        <p>
        Bien que les scripts de contenu ne puissent pas utiliser la totalité des API WebExtension, ils peuvent communiquer avec les scripts d'arrière-plan de l'extension via l'API de messagerie et ont donc indirectement accès aux mêmes API que ces derniers.
        </p>

        <p>
        Par défault, il existe deux moyens de communication entre les scripts d'arrière-plan et les scripts de contenu : vous pouvez envoyer des messages un par un, avec des réponses optionelles, ou vous pouvez établir une connexion continue entre les scripts, et utiliser cette connexion pour échanger des messages.
        </p>

        <p>
            Voir doc pour l'utilisation de <code class="line_code">browser.tabs.sendMessage()</code>, <code class="line_code">browser.runtime.sendMessage()</code>, <code class="line_code">browser.runtime.onMessage</code>.
        </p>



        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Mozilla/Add-ons/WebExtensions/Anatomy_of_a_WebExtension#sidebars_popups_pages_options" target="_blank">
        Sidebars, popups, pages options</a></h2>

        <p>
        Votre extension peut inclure divers composants d'interface utilisateur dont le contenu est défini à l'aide d'un document HTML :
        <ul>
            <li>Une barre latérale est un volet qui s'affiche dans la partie gauche de la fenêtre du navigateur, à côté de la page Web.</li>
            <li>Un popup est une boîte de dialogue que vous pouvez afficher lorsque l'utilisateur clique sur un bouton de la barre d'outils ou de la barre d'adresse</li>
            <li>Une page d'options est une page qui s'affiche lorsque l'utilisateur accède aux préférences de votre module complémentaire dans le gestionnaire d'add-ons natif du navigateur.</li>
        </ul>
        </p>

        <p>
        Pour chacun de ces composants, vous créez un fichier HTML et pointez vers lui en utilisant une propriété spécifique dans manifest.json. Le fichier HTML peut inclure des fichiers CSS et JavaScript, tout comme une page Web normale.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Mozilla/Add-ons/WebExtensions/Anatomy_of_a_WebExtension#rendre_accessible_des_ressources_web" target="_blank">
        web ressources</a></h2>

        <p>
        Les ressources web sont des fichiers tels que des images, des fichiers HTML, CSS ou JavaScript qui sont inclus dans l'extension afin d'être utilisés par les scripts de contenu et les scripts d'arrière-plan. Les ressources web mises à disposition peuvent être référencées depuis les scripts grâce à un schéma d'URI spécifique.
        </p>

        <p>
        Ainsi, si un script de contenu souhaite insérer des images sur une page web, on pourra insérer ces images dans l'extension et les rendre accessible. Ensuite, le script de contenu pourra créer et ajouter une balise <img> faisant référence à l'image via l'attribut src ciblant le fichier via le schéma spécifique.
        </p>


        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Mozilla/Add-ons/WebExtensions/API" target="_blank">
        Les APIs JavaScript</a></h2>

        <p>

        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href=" https://addons.mozilla.org/en-US/firefox/" target="_blank">
        Publication</a></h2>

       <p>
        On publie l'extension sur <a href=" https://addons.mozilla.org/en-US/firefox/"> https://addons.mozilla.org/en-US/firefox/</a>, rubrique Developer Hub.
       </p>

       <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Mozilla/Add-ons/WebExtensions/API" target="_blank">
       Debugging</a></h1>

       <p>
       Vous pouvez l'utiliser pour déboguer du code exécuté localement dans Firefox ou exécuté à distance, par exemple sur un appareil Android exécutant Firefox pour Android. Voir à propos du débogage pour savoir comment connecter le débogueur à une cible distante.
       </p>

       <p>
        Pour le connecter à une page distante, voir <a href="https://firefox-source-docs.mozilla.org/devtools-user/about_colon_debugging/index.html">ce lien</a>.
       </p>

       <p>
        Commençons par observer les panneaux disponnibles dans la vu débugging : 
       </p>

       <img src="../images/debugger_uitour_01.png" alt="panels_debug"/>

       <p>
        <ul>
            <li>Source list panel : Le volet de la liste des sources répertorie tous les fichiers source JavaScript chargés dans la page (y compris les scripts pour les web worker) et vous permet d'en sélectionner un à déboguer. Au niveau supérieur, les sources sont organisées par origine, et en dessous, elles sont organisées par la structure de répertoire à partir de laquelle elles sont servies.<br/>
            Clic droit ouvre quelques otions dont ignore source qui peut être utile pour éviter d'entrer dans les bibliothèques utilisées par votre code.</li>
            <li>Source panel : Cela montre le fichier JavaScript actuellement chargé.</li>
            <li>Le contenu du troisième volet dépend de l'état actuel du débogueur et peut inclure les sections suivantes :
                <ul>
                    <li>Toolbar</li>
                    <li>Watch expressions</li>
                    <li>Breakpoints</li>
                    <li>Call stack : Lorsque le débogueur est en pause, la Call stack répertorie la chaîne de fonctions qui attendent de se terminer, avec le cadre de la fonction qui a été appelée en dernier en haut (c'est-à-dire la fonction la plus profondément imbriquée). La sélection d'une ligne ouvre le fichier associé dans le volet source, à l'emplacement spécifié. emplacement. Il met également à jour la section Scopes avec les variables pour ce cadre/portée.</li>
                    <li>Scopes : Lorsque le débogueur est en pause, vous pourrez développer cette section pour voir tous les objets concernés à ce stade du programme.</li>
                    <li>XHR Breakpoints</li>
                    <li>Event Listener Breakpoints</li>
                    <li>DOM Mutation Breakpoints</li>
                </ul>
            </li>
        </ul>
       </p>

       <p>
       La call stack (pile d'appel) est un outil utile pour suivre le flux d'exécution dans votre application ! Il vous permet de confirmer que les fonctions sont appelées dans l'ordre que vous attendez et avec des valeurs de variables sensibles.
       </p>

       <p>
        La toolbar contient :
        <ul>
            <li>Les bouton de controle du débugging : Play/Pause(F8) - Ligne suivante(F10) - Entrer dans la fonction sur cette ligne(F11) -  Execute le script jusqu'à la fin bloc(F11)</li>
            <li>Un boutton pour désactiver les breakpoints</li>
            <li>Un bouton settings</li>
        </ul>
       </p>

       <p>
        Pour dé-minifier le code, cliquer sur les accolades en bas du panneau source.
       </p>

       <p>
        Attention pour code JS compilé (typescript ou autre), il faut utilisé une source map pour le debugging. Une source map est un fichier qui transforme la source transformée à la source d'origine, permettant au navigateur de reconstruire la source d'origine et de présenter l'original reconstruit dans le débogueur.
       </p>

       <p>
       Pour permettre au débogueur de fonctionner avec une carte source, vous devez :
       <ul>
        <li>Générer un source map</li>
        <li>inclure un commentaire dans le fichier transformé, qui pointe vers la carte source. La syntaxe du commentaire est la suivante : //# sourceMappingURL=http://example.com/path/to/your/sourcemap.map</li>
       </ul>
       </p>

       <p>
       La plupart des navigateurs vous permettent de déboguer les web workers dans leurs débogueurs JavaScript exactement de la même manière que le débogage du thread principal !
       </p>

       <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://firefox-source-docs.mozilla.org/devtools-user/debugger/ui_tour/index.html#debugger-ui-tour-source-list-pane" target="_blank">
       Les breakpoints</a></h1>

       <img src="../images/debugger_uitour_03.png" alt="breakpoints"/>

       <p>
       Les points d'arrêt sont très utiles lors du débogage de JavaScript - vous définissez essentiellement un point dans votre code où vous souhaitez que l'exécution du code s'interrompe. À ce stade, vous pouvez faire des choses utiles comme étudier la valeur de différentes variables à ce stade, ce qui vous permet de déterminer pourquoi un problème se produit.
       </p>

       <p>
        Au clic sur le numéro de la ligne, on ajoute un breakpoint standard.
       </p>

       <p>
        Au clic droit on peut ajouter un breakpoint conditionnel. Ou un log point qui enregistre une valeur sur votre console plutôt que de suspendre l'exécution comme le fait un point d'arrêt.
       </p>

       <p>
       De plus, si la ligne contient plusieurs appels de fonction, chacun recevra une petite icône de flèche bleue à sa gauche. Ceux-ci sont appelés points d'arrêt de colonne et vous permettent de définir le point d'arrêt pour qu'il se produise exactement sur l'un des appels de fonction de la ligne (ou plusieurs appels), en cliquant sur chacun d'entre eux.
       </p>

       <p>
       Un point d'arrêt conditionnel est celui où le code interrompt l'exécution lorsqu'il est atteint, uniquement si une certaine condition est remplie, une telle variable ayant une certaine valeur à ce moment-là. Vous pouvez définir un point d'arrêt conditionnel à l'aide du menu contextuel (voir ci-dessus),
       </p>

       <p>
       Une fois que vous avez défini des points d'arrêt, la liste des points d'arrêt dans la colonne de droite affiche le nom du fichier et le numéro de ligne pour chacun.
       </p>

       <img src="../images/updated-conditional.png" alt="conditional breakpoint"/>

       <p>
       Un point d'arrêt XHR (XMLHttpRequest) interrompt l'exécution du code lorsqu'une requête XHR est envoyée afin que vous puissiez examiner l'état actuel du programme. Vous pouvez casser sur toutes les requêtes ou sur celles qui incluent une URL spécifique. Il faut alors spécifier l'url concernée. On l'utilisera peu du fait de fetch.
       </p>

       <p>
       Pour utiliser un point d'arrêt d'événement, vous ouvrez le débogueur JavaScript, puis recherchez et développez la section Event Listener Breakpoints dans la colonne de droite.
       </p>

       <p>
       Pour arrêter lorsque les écouteurs d'événements sont touchés, cochez les cases à côté des événements qui vous intéressent. Tous les événements standard pris en charge dans votre version de Firefox sont répertoriés, classés par l'API ou la zone d'API dont ils font partie.
       </p>

       <p>
       Lorsqu'un événement se produit, l'exécution s'interrompt dès qu'il entre dans le code d'écoute.
       </p>

       <p>
       Lorsque l'exécution s'interrompt, le volet source affiche la ligne en surbrillance du code JavaScript qui sera ensuite exécuté, ainsi que le code environnant pour le contexte. De plus, vous obtenez une boîte superposée sur la fenêtre indiquant "En pause sur le point d'arrêt de l'événement", avec des boutons pour parcourir cette ligne de code ou reprendre l'exécution.
       </p>

       <p>
       Vous pouvez ajouter des points d'arrêt réguliers au point d'entrée de l'auditeur pour obtenir le même effet. Si toutefois vous avez plusieurs éléments, qui ont tous des écouteurs d'événements attachés sur lesquels vous souhaitez vous arrêter, cela devient un énorme gain de temps.
       </p>

       <p>
       Pour demander au débogueur de s'arrêter sur une exception, cochez ces cases dans la liste des points d'arrêt :
       </p>

       <p>
       Lors du débogage du code JavaScript, il peut être utile de savoir quand les propriétés des objets sont lues ou modifiées.
       </p>

       <p>
       Dans le débogueur Firefox, ces informations peuvent être fournies par des points de surveillance. En définissant un point de surveillance sur la propriété, plutôt qu'un point d'arrêt sur une ligne particulière, vous pouvez découvrir où cet accès se produit.
       </p>

       <p>
       Dans le volet Scope sur le panel de droite, recherchez un objet que vous souhaitez surveiller et cliquez dessus avec le bouton droit pour ouvrir son menu contextuel.<br/>
       Choose Break on, and then one of : 
        <ul>
                <li>Property set</li>
                <li>Property get</li>
                <li>Property get or set</li>
        </ul>
       </p>

       <p>
       Un point d'arrêt de mutation DOM interrompt le code lorsque le nœud DOM sur lequel vous avez défini le point d'arrêt est modifié.
       </p>

       <p>
       Vous définissez un point d'arrêt de mutation DOM dans l'inspecteur . Accédez au nœud DOM qui vous intéresse et utilisez le menu contextuel (clic droit) pour définir le point d'arrêt.
       </p>



<?php 
    $content = ob_get_clean(); 

    require_once('structure/layout.php');
?>
