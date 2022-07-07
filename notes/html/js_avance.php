<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Javascript</title>
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

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577651-comprenez-comment-fonctionne-lasynchrone-en-js#/id/r-5694610" target="_blank">L'asynchrone en JS</a></h1>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1925582" target="_blank">JavaScript est synchrone et mono-thread</a></h2>

                <p>
                Eh bien, tout simplement qu'il n'y a qu'un seul fil d'exécution du code source. Cela signifie que lorsque vous écrivez du code, chaque ligne sera exécutée l'une après l'autre en attendant la fin de l'exécution de la ligne précédente. Il n'y a pas d'autre code qui pourra être exécuté en parallèle. Il ne peut faire qu'une seule chose à la fois.
                </p>

                <p>
                    Mais il est possible et même très facile de faire de l'asynchrone en JavaScript, mais l'exécution restera synchrone...
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577651-comprenez-comment-fonctionne-lasynchrone-en-js#/id/r-5695050" target="_blank">L'event loop</a></h2>

                <p>
                En JavaScript, chaque ligne de code est exécutée de façon synchrone, mais il est possible de demander à exécuter du code de manière asynchrone. Et lorsque l'on demande à exécuter une fonction de façon asynchrone, la fonction en question est placée dans une sorte de file d'attente qui va exécuter toutes les fonctions qu'elle contient les unes après les autres. C'est ce qu'on appelle l'<strong>event loop</strong>. Tout le cœur du langage fonctionne autour de ça.
                </p>
                
                <p>
                Maintenant que vous comprenez un peu mieux ce qu'est l'event loop, voyons concrètement comment demander à exécuter du code de manière asynchrone. Il existe 3 fonctions pour faire ceci :
                <ul>
                    <li><code class="line-code">setTimeout</code> est la fonction la plus répandue lorsque l'on veut exécuter du code asynchrone sans bloquer le fil d'exécution en cours. Cette fonction prend 2 paramètres :
                        <ul>
                            <li>La fonction à exécuter de manière asynchrone (qui sera donc ajoutée à la file d'attente de l'event loop) ;</li>
                            <li>Le délai, en millisecondes, avant d'exécuter cette fonction.</li>
                        </ul>
                    </li>
                    <li><code class="line-code">setInterval</code> (documentation à retrouver <a href="https://www.w3schools.com/jsref/met_win_setinterval.asp" target="blank">ici</a>) : elle fonctionne exactement comme <code class="line-code">setTimeout</code>, à ceci près qu'elle exécute la fonction passée en paramètre en boucle à une fréquence déterminée par le temps en millisecondes passé en second paramètre. Il suffira de passer la valeur de retour de <code class="line-code">setInterval</code> à <code class="line-code">clearInterval</code> pour stopper l'exécution en boucle de la fonction ;</li>
                    <li><code class="line-code">setImmediate</code> (documentation à retrouver <a href="https://developer.mozilla.org/en-US/docs/Web/API/Window/setImmediate" target="blank">ici</a>). Cette fonction prend en seul paramètre la fonction à exécuter de façon synchrone.  La fonction en question sera placée dans la file d'attente de l'event loop, mais va passer devant toutes les autres fonctions, sauf certaines spécifiques au Javascript : les événements (les mêmes qu'on a vus au premier chapitre, et qui sont donc exécutés de façon asynchrone  😉), le rendu, et l'I/O. Il existe aussi <code class="line-code">nextTick</code>, qui permet, là, de court-circuiter tout le monde. À utiliser avec précaution, donc...</li>
                </ul>
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577651-comprenez-comment-fonctionne-lasynchrone-en-js#/id/r-5695071" target="_blank">Le cas de l'I/O</a></h2>

                <p>
                L'I/O correspond aux événements liés à l'input(les flux d'entrée) et l'output(les flux de sortie). Cela correspond notamment à la lecture/écriture des fichiers, aux requêtes HTTP, etc.
                </p>

                <p>
                Vous avez dû remarquer que lorsque l'on exécutait la fonction <code class="line-code">fetch()</code> lors d'une requête HTTP, celle-ci ne bloquait pas l'exécution du code. On n'attend pas que la requête soit envoyée et une réponse reçue avant d'exécuter le reste du code. C'est donc une fonction asynchrone.
                </p>

                <p>
                D’ailleurs, <code class="line-code">fetch()</code> retourne une Promise qui est une autre façon de faire de l’asynchrone car les fonctions <code class="line-code">then()</code> et <code class="line-code">catch()</code> sont appelées plus tard lorsque le travail (dans ce qu’on a vu dans le chapitre précédent il s’agissait d’une requête HTTP) est terminé. Et de la même manière, tout ce qui touche à l'I/O peut être exécuté de manière asynchrone. Et c'est tant mieux, car leur exécution peut prendre du temps. 😎
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5543061-ecrivez-du-javascript-pour-le-web/5577676-gerez-du-code-asynchrone#/id/r-5697259" target="_blank">Les callbacks</a></h2>

                <p>
                    C'est la méthode la plus "vieille" mais toujours utilisée par beaucoup de modules JavaScript (nous verrons ce que sont les modules dans la dernière partie de ce cours). 
                </p>

                <p>
                    Une callback est simplement une fonction que vous définissez. Le principe de la callback  est de la passer en paramètre d'une fonction asynchrone. Une fois que la fonction asynchrone a fini sa tâche, elle va appeler notre fonction callback en lui passant un résultat. Ainsi, le code que nous mettons dans notre fonction callback sera exécuté de manière asynchrone. Cela ne vous rappelle pas quelque chose ? Les événements ! Les événements sont un exemple typique de fonction asynchrone à laquelle on passe une fonction callback.
                </p>

                <figure class="block_code">
                        <pre><code>
element.addEventListener('click', function(e) {
    // Do something here ... 
});
                        </code></pre>
                    </figure>

                    <p>
                    Dans l'exemple ci-dessus, la fonction qui est envoyée à <code class="line-code">addEventListener</code> est une callback. Elle n'est pas appelée tout de suite, elle est appelée plus tard, dès que l'utilisateur clique sur l'élément. Ça ne bloque donc pas l'exécution du code et c'est donc asynchrone. 😁<br/>
                    Les callbacks sont la base de l'asynchrone en JavaScript et sont très utilisées.
                    </p>

                    <p>
                        ... à continuer ...
                    </p>




            
                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1925582" target="_blank">Les objets</a></h1>

                <p>
                    Nous avons vu que le JavaScript nous permettait de créer des objets littéraux et nous allons voir maintenant comment créer de véritables objets qui possèdent des propriétés et des méthodes tout comme les objets natifs.<br />
                    Un objet représente quelque chose, une idée ou un concept. Ici, suite à l'exemple de la famille, nous allons créer un objet appelé Person qui contiendra des données, à savoir le prénom, l'âge, le sexe, le lien de parenté, le travail et la liste des amis (qui sera un tableau).
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1925619" target="_blank">Définition via un constructeur</a></h2>
                    L'utilisation de tels objets se fait en deux temps :
                    <ol>
                        <li>On définit l'objet via un constructeur, cette étape permet de définir un objet qui pourra être réutilisé par la suite. Cet objet ne sera pas directement utilisé car nous en utiliserons une « copie » : on parle alors d'instance.</li>
                        <li>À chaque fois que l'on a besoin d'utiliser notre objet, on crée une instance de celui-ci, c'est-à-dire qu'on le « copie ».</li>
                    </ol>
                    La syntaxe d'un constructeur est la même que celle d'une fonction :
                    <figure class="block_code">
                        <pre><code>
function Person() {
   // Code du constructeur
}
                        </code></pre>
                    </figure>
                    <div class='em'>De manière générale on met une majuscule à la première lettre d'un constructeur. Cela permet de mieux le différencier d'une fonction « normale » et le fait ressembler aux noms des objets natifs qui portent tous une majuscule (<code class="line-code">Array</code>, <code class="line-code">Date</code>, <code class="line-code">String</code>…).</div>
                    Le code du constructeur va contenir une petite particularité : le mot-clé <code class="line-code">this</code>. Ce mot-clé fait référence à l'objet dans lequel il est exécuté, c'est-à-dire ici le constructeur <code class="line-code">Person</code>. Si on utilise <code class="line-code">this</code> au sein du constructeur <code class="line-code">Person</code>, <code class="line-code">this</code> pointe vers <code class="line-code">Person</code>. Grâce à <code class="line-code">this</code>, nous allons pouvoir définir les propriétés de l'objet <code class="line-code">Person</code> :
                    <figure class="block_code">
                        <pre><code>
function Person(nick, age, sex, parent, work, friends) {
    this.nick = nick;
    this.age = age;
    this.sex = sex;
    this.parent = parent;
    this.work = work;
    this.friends = friends;
}
                        </code></pre>
                    </figure>
                    Les paramètres de notre constructeur (les paramètres de la fonction si vous préférez) vont être détruits à la fin de l'exécution de ce dernier, alors que les propriétés définies par le biais de <code class="line-code">this</code> vont rester présentes. Autrement dit, <code class="line-code">this.nick</code> affecte une propriété <code class="line-code">nick</code> à notre objet, tandis que le paramètre <code class="line-code">nick</code> n'est qu'une simple variable qui sera détruite à la fin de l'exécution du constructeur.

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1925619" target="_blank">Utilisation de l'objet</a></h2>

                    <p>
                        L'objet <code class="line-code">Person</code> a été défini grâce au constructeur qu'il ne nous reste plus qu'à utiliser :
                    </p>
                    <figure class="block_code">
                        <pre><code>
// Définition de l'objet Person via un constructeur
function Person(nick, age, sex, parent, work, friends) {
    this.nick = nick;
    this.age = age;
    this.sex = sex;
    this.parent = parent;
    this.work = work;
    this.friends = friends;
}

// On crée des variables qui vont contenir une instance de l'objet Person :
var seb = new Person('Sébastien', 23, 'm', 'aîné', 'JavaScripteur', []);
var lau = new Person('Laurence', 19, 'f', 'soeur', 'Sous-officier', []);

alert(seb.nick); // Affiche : « Sébastien »
alert(lau.nick); // Affiche : « Laurence »
                        </code></pre>
                    </figure>
                    <p>
                        Pour pouvoir utiliser cet objet, on définit une variable qui va contenir une instance de l'objet <code class="line-code">Person</code>, c'est-à-dire une copie. Pour indiquer au JavaScript qu'il faut utiliser une instance, on utilise le mot-clé <code class="line-code">new</code> qui signifie « créer une nouvelle instance de l'objet ».
                    </p>
                    <p>
                        <div class='em'>Il est possible de faire un test pour savoir si la variable seb est une instance de Person. Pour ce faire, il convient d'utiliser le mot-clé instanceof, comme ceci : alert(seb instanceof Person); // Affiche true </div>
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1925625" target="_blank">Modifier les données</a></h2>

                    <p>
                        Une fois la variable définie, on peut modifier les propriétés, exactement comme s'il s'agissait d'un simple objet littéral.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1919505" target="_blank">Ajouter des méthodes</a></h2>

                    <p>
                        Il y a deux manières de définir une méthode pour un objet : dans le constructeur ou via prototype. Définir les méthodes directement dans le constructeur est facile puisque c'est nous qui créons le constructeur. La définition de méthodes via prototype est utile surtout si on n'a pas créé le constructeur : ce sera alors utile pour ajouter des méthodes à des objets natifs, comme <code class="line-code">String</code> ou <code class="line-code">Array</code>.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1925640" target="_blank">Définir une méthode dans le constructeur</a></h3>

                    <p>
                        Pour cela, rien de plus simple, on procède comme pour les propriétés, sauf qu'il s'agit d'une fonction :
                    </p>

                    <figure class="block_code">
                        <pre><code>
function Person(nick, age, sex, parent, work, friends) {
    this.nick = nick;
    this.age = age;
    this.sex = sex;
    this.parent = parent;
    this.work = work;
    this.friends = friends;

    this.addFriend = function(nick, age, sex, parent, work, friends) {
        this.friends.push(new Person(nick, age, sex, parent, work, friends));
    };
}
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1925650" target="_blank">Ajouter une méthode via prototype</a></h3>

                    <p>
                        Lorsque vous définissez un objet, il possède automatiquement un sous-objet appelé <code class="line-code">prototype</code>.<br />
                        <code class="line-code">prototype</code> est un objet, mais c'est aussi le nom d'une bibliothèque JavaScript : Prototype. Faites donc attention si vous faites des recherches avec les mots-clés « JavaScript » et « prototype », car vous risquez de tomber sur des pages concernant cette bibliothèque.<br />
                        Cet objet <code class="line-code">prototype</code> va nous permettre d'ajouter des méthodes à un objet. Voici comment ajouter une méthode <code class="line-code">addFriend()</code> à notre objet Person :
                    </p>
                    <figure class="block_code">
                        <pre><code>
Person.prototype.addFriend = function(nick, age, sex, parent, work, friends) {
    this.friends.push(new Person(nick, age, sex, parent, work, friends));
}
                        </code></pre>
                    </figure>
                    <p>
                        Le <code class="line-code">this</code> fait ici aussi référence à l'objet dans lequel il s'exécute, c'est-à-dire l'objet <code class="line-code">Person</code>.<br />
                        L'ajout de méthodes par prototype a l'avantage d'être indépendant de l'objet, c'est-à-dire que vous pouvez définir votre objet dans un fichier, et ajouter des méthodes dans un autre fichier (pour autant que les deux fichiers soient inclus dans la même page Web).
                        <div class='em'>En réalité, l'ajout de méthodes par <code class="line-code">prototype</code> est particulier, car les méthodes ajoutées ne seront pas copiées dans les instances de votre objet. Autrement dit, en ajoutant la méthode <code class="line-code">addFriend()</code> par <code class="line-code">prototype</code>, une instance comme <code class="line-code">seb</code> ne possèdera pas la méthode directement dans son propre objet, elle sera obligée d'aller la chercher au sein de son objet constructeur, ici <code class="line-code">Person</code>. Cela veut dire que si vous faites une modification sur une méthode contenue dans un <code class="line-code">prototype</code> alors vous affecterez toutes les instances de votre objet (y compris celles qui sont déjà créées), cette solution est donc à privilégier.</div>
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-3685451" target="_blank">Ajouter des méthodes aux objets natifs</a></h2>

                    <p>
                        Les objets natifs possèdent eux aussi un objet <code class="line-code">prototype</code> autorisant donc la modification de leurs méthodes !
                    </p>
                    <figure class="block_code">
                        <pre><code>
// Testons si cette méthode n'existe pas déjà !
if (!Object.prototype.debug) {

    // Créons la méthode
    Object.prototype.debug = function() {
        var text = 'Object {\n';
        
        for (var i in this) {
            if (i !== 'debug') {   
                text += '    [' + i + '] => ' + this[i] + '\n';    
            }
        }
        
        alert(text + '}');
    }

}
                        </code></pre>
                    </figure>
                    <p>
                        Comme vous avez dû le constater, quand nous utilisons <code class="line-code">prototype</code>, nous affectons une fonction. Cela veut donc dire qu'il est possible de modifier les méthodes natives des objets en leur affectant une nouvelle méthode. Cela peut se révéler très utile dans certains cas, mais nous verrons cela plus tard dans le chapitre qui aborde l'usage des polyfills.
                    </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1919560" target="_blank">Les namespaces</a></h1>

                    <p>
                        Un namespace permet de différencier deux données identiques.<br />
                        Imaginez que vous développiez une fonction <code class="line-code">pmyBestFunction()</code>, et vous trouvez un script tout fait pour réaliser un effet quelconque. Vous ajoutez alors ce script au vôtre. Problème : dans ce script tout fait, une fonction <code class="line-code">pmyBestFunction()</code> est aussi présente… Votre fonction se retrouve écrasée par l'autre, et votre script ne fonctionnera plus correctement.<br />Pour éviter ce genre de désagrément, nous allons utiliser un namespace !
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1925689" target="_blank">Définir un namespace</a></h2>

                    <p>
                        Vous allez vous créer un namespace, et, au sein de celui-ci, vous allez placer vos fonctions. De cette manière, vos fonctions seront en quelque sorte préservées d'éventuels écrasements. Comme le JavaScript ne gère pas nativement les namespaces (comprenez : il n'y a pas de structure consacrée à cela), nous allons devoir nous débrouiller seuls, et utiliser un simple objet littéral. Premier exemple :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myNamespace = {
    myBestFunction: function() {
        alert('Ma meilleure fonction !');
    }
};

// On exécute la fonction :
myNamespace.myBestFunction();
                        </code></pre>
                    </figure>
                    <p>
                        On commence par créer un objet littéral appelé <code class="line-code">myNamespace</code>. Ensuite on définit une méthode : <code class="line-code">myBestFunction()</code>.
                    </p>
                    <p>
                        Pour appeler <code class="line-code">myBestFunction()</code>, il faut obligatoirement passer par l'objet <code class="line-code">myNamespace</code>, ce qui limite très fortement la probabilité de voir votre fonction écrasée par une autre. Bien évidemment, votre namespace doit être original pour être certain qu'un autre développeur n'utilise pas le même… Cette technique n'est donc pas infaillible, mais réduit considérablement les problèmes.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1925696" target="_blank">Un style de code</a></h3>

                    <p>
                        Utiliser un namespace est aussi élégant, car cela permet d'avoir un code visuellement propre et structuré. Une grande majorité des « gros » scripts sont organisés via un namespace, notamment car il est possible de décomposer le script en catégories. Par exemple, vous faites un script qui gère un webmail (comme Hotmail ou GMail) :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var thundersebWebMail = {
    // Propriétés
    version: 1.42,
    lang: 'english',

    // Initialisation
    init: function() { /* initialisation */ },

    // Gestion des mails
    mails: {
        list: function() { /* affiche la liste des mails */ },
        show: function() { /* affiche un mail */ },
        trash: function() { /* supprime un mail */ },
        // et cætera…
    },

    // Gestion des contacts
    contacts: {
        list: function() { /* affiche la liste des contacts */ },
        edit: function() { /* édite un contact */ },
        // et cætera…
    }
};
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1925701">L'emploi de <code class="line-code">this</code></a></h3>

                    <p>
                        Attention, si vous utilisez <code class="line-code">this</code> dans un sous-namespace, celui-ci pointera vers ce sous-namespace, et non vers le namespace parent. 
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1925704" target="_blank">Vérifier l'unicité du namespace</a></h3>

                  <figure class="block_code">
                        <pre><code>
// On vérifie l'existence de l'objet myNamespace
if (typeof myNamespace === 'undefined') {

    var myNamespace = {
        // Tout le code
    };

} else {
    alert('myNamespace existe déjà !');
}
                        </code></pre>
                    </figure>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-1919608" target="_blank">Modifier le contexte d'une méthode</a></h2>

                    <p>
                        Commençons par un petit rappel. Connaissez-vous la différence entre une fonction et une méthode ?<br />
                        La première est indépendante et ne fait partie d'aucun objet (ou presque, n'oublions pas window). Une méthode, en revanche, est dépendante d'un objet.<br />
                        Le fait qu'elle soit dépendante est à la fois un avantage et un inconvénient :
                        <ul>
                            <li>Un avantage car vous n'avez pas à spécifier quel objet la méthode doit modifier ;</li>
                            <li>Un inconvénient car cette méthode ne pourra fonctionner que sur l'objet dont elle est dépendante !</li>
                        </ul>
                        Cet inconvénient peut être résolu grâce à deux méthodes nommées <code class="line-code">apply()</code> et <code class="line-code">call()</code>. Elles existent pour permettre de rediriger la référence du mot-clé <code class="line-code">this</code> vers un autre objet !
                    </p>
                    <p>
                        Les deux méthodes fonctionnent quasiment de la même manière, elles prennent toutes les deux en paramètre un premier argument obligatoire qui est l'objet vers lequel va pointer le mot-clé <code class="line-code">this</code>. Nos deux méthodes se différencient sur les arguments facultatifs, mais nous en reparlerons plus tard. 
                    </p>
                    <p>
                        Comment utiliser notre méthode call() ? Tout simplement de la manière suivante :
                    </p>
                    <figure class="block_code">
                        <pre><code>
methode_a_modifier.call(objet_a_definir);
                        </code></pre>
                    </figure>
                    <p>
                        Revenons maintenant sur les arguments facultatifs de nos deux méthodes <code class="line-code">apply()</code> et <code class="line-code">call()</code>. La première prend en paramètre facultatif un tableau de valeurs, tandis que la deuxième prend une infinité de valeurs en paramètres. Ces arguments facultatifs servent à la même chose : ils seront passés en paramètres à la méthode souhaitée.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919609-les-objets#/id/r-3685456" target="_blank">L'héritage</a></h2>

                    <p>
                        Prenons l'exemple d'une voiture et d'un camion, vous voulez créer un objet constructeur pour chacun de ces deux véhicules cependant vous vous rendez alors compte que vous allez probablement devoir dupliquer votre code car ces deux véhicules ont tous deux la capacité de rouler, possèdent une plaque d'immatriculation et un réservoir d'essence. Arrêtons-nous là pour les similitudes, cela sera amplement suffisant.<br />
                        Plutôt que dupliquer votre code entre les deux véhicules, nous allons faire appel à la notion d'héritage en créant un objet constructeur parent qui va rassembler ces caractéristiques communes :
                    </p>
                    <figure class="block_code">
                        <pre><code>
function Vehicle(licensePlate, tankSize) {
    this.engineStarted = false; // Notre véhicule est-il démarré ?
    this.licensePlate = licensePlate; // La plaque d'immatriculation de notre véhicule.
    this.tankSize = tankSize; // La taille de notre réservoir en litres.
}

// Permet de démarrer notre véhicule.
Vehicle.prototype.start = function() {
    this.engineStarted = true;
};

// Permet d'arrêter notre véhicule.
Vehicle.prototype.stop = function() {
    this.engineStarted = false;
};
                        </code></pre>
                    </figure>
                    <p>
                        Maintenant que notre objet Vehicle  est prêt, nous pouvons l'exploiter. L'héritage va ici consister à créer deux objets constructeurs (un pour notre voiture ainsi qu'un pour notre camion) qui vont tous deux hériter de <code class="line-code">Vehicle</code> . 
                    </p>
                    <figure class="block_code">
                        <pre><code>
function Car(licensePlate, tankSize, trunkSize) {
    // On appelle le constructeur de « Vehicle » par le biais de la méthode
    // call() afin qu'il affecte de nouvelles propriétés à « Car ».
    Vehicle.call(this, licensePlate, tankSize);

    // Une fois le constructeur parent appelé, l'initialisation de notre objet peut continuer.
    this.trunkOpened = false; // Notre coffre est-il ouvert ?
    this.trunkSize = trunkSize; // La taille de notre coffre en mètres cube.
}

// L'objet prototype de « Vehicle » doit être copié au sein du prototype
// de « Car » afin que ce dernier puisse bénéficier des mêmes méthodes.
Car.prototype = Object.create(Vehicle.prototype, {
    // Le prototype copié possède une référence vers son constructeur, actuellement
    // défini à « Vehicle », nous devons changer sa référence pour « Car »
    // tout en conservant sa particularité d'être une propriété non-énumerable.
    constructor: {
        value: Car,
        enumerable: false,
        writable: true,
        configurable: true
    }
});

// Il est bien évidemment possible d'ajouter de nouvelles méthodes.
Car.prototype.openTrunk = function() {
    this.trunkOpened = true;
};

Car.prototype.closeTrunk = function() {
    this.trunkOpened = false;
};
                        </code></pre>
                    </figure>
                    <p>
                        Il est maintenant possible d'instancier une nouvelle voiture de manière tout à fait classique :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myCar = new Car('AA-555-AA', 70, 2.5);
                        </code></pre>
                    </figure>
                    <p>
                        Cette voiture est maintenant capable de démarrer et arrêter son moteur, ouvrir et fermer son coffre, et nous connaissons sa plaque d'immatriculation ainsi que la taille de son réservoir et de son coffre.
                    </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919761-les-chaines-de-caracteres#/id/r-1925752" target="_blank">Les chaînes de caractères</a></h1>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919761-les-chaines-de-caracteres#/id/r-1919632" target="_blank">Les types primitifs</a></h2>

                    <p>
                        Pour créer une chaîne de caractères, on utilise généralement cette syntaxe :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myString = "Chaîne de caractères primitive";
                        </code></pre>
                    </figure>
                    <p>
                        Cet exemple crée ce que l'on appelle une chaîne de caractères primitive, qui n'est pas un objet <code class="line-code">String</code>. Pour instancier un objet <code class="line-code">String</code>, il faut faire comme ceci :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myRealString = new String("Chaîne");
                        </code></pre>
                    </figure>
                    <p>
                        Cela est valable pour les autres objets :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myArray = []; // Tableau primitif
var myRealArray = new Array(); 

var myObject = {}; // Objet primitif
var myRealObject = new Object();

var myBoolean = true; // Booléen primitif
var myRealBoolean = new Boolean("true");

var myNumber = 42; // Nombre primitif
var myRealNumber = new Number("42");
                        </code></pre>
                    </figure>

                    <p>
                        La différence est minime pour nous, développeurs. Prenons l'exemple de la chaîne de caractères : à chaque fois que nous allons faire une opération sur une chaîne primitive, le JavaScript va automatiquement convertir cette chaîne en une instance temporaire de <code class="line-code">String</code>, de manière à pouvoir utiliser les propriétés et méthodes fournies par l'objet <code class="line-code">String</code>. Une fois les opérations terminées, l'instance temporaire est détruite.
                    </p>
                    <p>
                        Mais il subsiste de légères différences avec l'opérateur <code class="line-code">instanceof</code> qui peut retourner de drôles de résultats…<br />
                        <code class="line-code">typeof</code> permet de vérifier le type primitif (en anglais on parle de datatype). Mais ici aussi faites attention au piège, car la forme primitive d'une instance de <code class="line-code">String</code> est… <code class="line-code">object</code> :
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919761-les-chaines-de-caracteres#/id/r-1919683" target="_blank">La casse et les caractères</a></h2>

                    <p>
                        <code class="line-code">toLowerCase()</code> et <code class="line-code">toUpperCase()</code> permettent respectivement de convertir une chaîne en minuscules et en majuscules.
                    </p>
                    <p>
                        La méthode <code class="line-code">charAt()</code> permet de récupérer un caractère en fonction de sa position dans la chaîne de caractères. La méthode reçoit en paramètre la position du caractère.
                    </p>
                    <p>
                        La méthode <code class="line-code">charCodeAt()</code> fonctionne comme <code class="line-code">charAt()</code> à la différence que ce n'est pas le caractère qui est retourné mais le code ASCII du caractère.
                    </p>
                    <p>
                        <code class="line-code">trim()</code> sert à supprimer les espaces avant et après une chaîne de caractères. C'est particulièrement utile quand on récupère des données saisies dans une zone de texte, car l'utilisateur est susceptible d'avoir laissé des espaces avant et après son texte, surtout s'il a fait un copier/coller.
                    </p>
                    <p>
                        La méthode <code class="line-code">indexOf()</code> est utile dans deux cas de figure :
                        <ul>
                            <li>Savoir si une chaîne de caractères contient un caractère ou un morceau de chaîne ;</li>
                            <li>Savoir à quelle position se trouve le premier caractère de la chaîne recherchée.</li>
                        </ul>
                        indexOf() retourne la position du premier caractère trouvé, et s'il n'y en a pas la valeur -1 est retournée.
                    </p>
                    <p>
                        Si <code class="line-code">indexOf()</code> retourne la position de la première occurrence trouvée, <code class="line-code">lastIndexOf()</code> retourne la position de la dernière. Ces deux fonctions possèdent chacune un deuxième argument qui permet de spécifier à partir de quel index la recherche doit commencer.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1919761-les-chaines-de-caracteres#/id/r-1925858" target="_blank">Extraire une chaîne avec <code class="line-code">substring()</code>, <code class="line-code">substr()</code> et <code class="line-code">slice()</code></a></h2>

                    <p>
                        <code class="line-code">substring(a, b)</code> permet d'extraire une chaîne à partir de la position a (incluse) jusqu'à la position b (exclue).
                    </p>
                    <p>
                        <code class="line-code">substr(a, n)</code> accepte deux paramètres : le premier est la position de début, et le deuxième le nombre de caractères à extraire.
                    </p>
                    <p>
                        <code class="line-code">slice()</code> ressemble très fortement à substring(), mais avec une option en plus. Une valeur négative est transmise pour la position de fin, <code class="line-code">slice()</code> va extraire la chaîne jusqu'à la fin, en décomptant le nombre de caractères indiqué.
                    </p>
                    <p>
                        <code class="line-code">split()</code> permet de couper une chaîne de caractères à chaque fois qu'une sous-chaîne est rencontrée. Les « morceaux » résultant de la coupe de la chaîne sont placés dans un tableau. Prend en paramètre lecaractère qui définit la coupe ( ex : ',', '\n' pour un saut de ligne).
                    </p>
                    <p>
                        <code class="line-code">valueOf()</code> renvoie la valeur primitive de n'importe quel objet. 
                    </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920128-les-expressions-regulieres-partie-1-2#/id/r-1925898" target="_blank">Les expressions régulières (regex)</a></h1>

                    <p>
                        Les regex ne s'utilisent pas seules, et il y a deux manières de s'en servir : soit par le biais de RegExp qui est l'objet qui gère les expressions régulières, soit par le biais de certaines méthodes de l'objet String :
                        <ul>
                            <li><code class="line-code">match()</code> : retourne un tableau contenant toutes les occurrences recherchées ;</li>
                            <li><code class="line-code">search()</code> : retourne la position d'une portion de texte (semblable à <code class="line-code">indexOf()</code> mais avec une regex);</li>
                            <li><code class="line-code">split()</code> : la fameuse méthode <code class="line-code">split()</code>, mais avec une regex en paramètre ;</li>
                            <li><code class="line-code">replace()</code> :effectue un rechercher/remplacer.</li>
                        </ul>
                        Nous n'allons pas commencer par ces quatre méthodes car nous allons d'abord nous entraîner à écrire et tester des regex. Pour ce faire, nous utiliserons la méthode <code class="line-code">test()</code> fournie par l'objet <code class="line-code">RegExp</code>.<br /> L'instanciation d'un objet <code class="line-code">RegExp</code> se fait comme ceci :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myRegex = /contenu_à_rechercher/;
                        </code></pre>
                    </figure>
                    <p>
                        Si votre regex contient elle-même des slashs, n'oubliez pas de les échapper en utilisant un anti-slash.
                    </p>
                    <p>
                        L'utilisation de la méthode <code class="line-code">test()</code> est très simple. En cas de réussite du test, elle renvoie <code class="line-code">true</code> ; dans le cas contraire, elle renvoie <code class="line-code">false</code>.
                    </p>
                    <figure class="block_code">
                        <pre><code>
if (/contenu_à_rechercher/.test('Chaîne de caractères bla bla bla'))
                        </code></pre>
                    </figure>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920128-les-expressions-regulieres-partie-1-2#/id/r-1919860" target="_blank">Recherches de mots</a></h2>

                    <figure class="block_code">
                        <pre><code>
if (/raclette/.test('Je mangerais bien une raclette savoyarde !')) {
    alert('Ça semble parler de raclette');
} else {
    alert('Pas de raclette à l\'horizon');
}
                        </code></pre>
                    </figure>
                    <p>
                        Les regex sont sensible à la casse. Il est possible, grâce aux options, de dire à la regex d'ignorer la casse, c'est-à-dire de rechercher indifféremment les majuscules et les minuscules. Cette option s'appelle i, et comme chaque option (nous en verrons d'autres), elle se place juste après le slash de fermeture de la regex : <code class="line-code">/Raclette/i</code>.
                    </p>
                    <p>
                        Pour rechercher plusieurs mots, on utilise l'opérateur OU, représenté par la barre verticale pipe |.
                    </p>
                    <figure class="block_code">
                        <pre><code>
/Raclette|Tartiflette|Fondue|Croziflette/i
                        </code></pre>
                    </figure>
                    <p>
                        Les symboles ^ et $ permettent respectivement de représenter le début et la fin d'une chaîne de caractères. Si un de ces symboles est présent, il indique à la regex que ce qui est recherché commence ou termine la chaîne. Cela délimite la chaîne en quelque sorte :
                    </p>
                    <figure class="block_code">
                        <pre><code>
/^raclette savoyarde$/
                        </code></pre>
                    </figure>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920128-les-expressions-regulieres-partie-1-2#/id/r-1919899" target="_blank">Les caractères et leurs classes</a></h2>

                    <p>
                         Nous allons maintenant étudier les classes de caractères qui permettent de spécifier plusieurs caractères ou types de caractères à rechercher.<br />
                         Une classe de caractères est écrite entre crochets et sa signification est simple : une des lettres qui se trouve entre les crochets peut convenir. 
                     </p>
                     <figure class="block_code">
                        <pre><code>
/gr[aèio]s/
                        </code></pre>
                    </figure>
                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920128-les-expressions-regulieres-partie-1-2#/id/r-1926029" target="_blank">Les intervalles de caractères</a></h3>

                    <p>
                        Si nous voulons trouver les lettres allant de a à o, on écrira <code class="line-code">[a-o]</code>. <br />
                        Plusieurs intervalles peuvent être écrits au sein d'une même classe. Ainsi, la classe <code class="line-code">[a-zA-Z]</code> va rechercher toutes les lettres de l'alphabet, qu'elles soient minuscules ou majuscules. 
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920128-les-expressions-regulieres-partie-1-2#/id/r-1926028" target="_blank">Exclure des caractères</a></h3>

                    <p>
                        Ainsi cette classe ignorera les voyelles : <code class="line-code">[^aeyuio]</code>. L'exclusion d'un intervalle est possible aussi : <code class="line-code">[^b-y]</code> qui exclura les lettres allant de b à y.
                    </p>
                    <p>
                        <div class='em'>S'il s'agit de trouver un caractère accentué, il faut l'indiquer explicitement : [a-zâäàéèùêëîïôöçñ]. Il n'y a toutefois pas besoin d'écrire les variantes en majuscules si l'option i est utilisée.</div>
                    </p>
                    <p>
                        Le point permet de trouver n'importe quel caractère, à l'exception des sauts de ligne (les retours à la ligne).
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920128-les-expressions-regulieres-partie-1-2#/id/r-1919969" target="_blank">Les quantificateurs</a></h2>

                    <p>
                        Les quantificateurs permettent de dire combien de fois un caractère doit être recherché. Il est possible de dire qu'un caractère peut apparaître 0 ou 1 fois, 1 fois ou une infinité de fois.
                    </p>
                    <p>
                        Les trois symboles quantificateurs :
                        <ul>
                            <li>? : ce symbole indique que le caractère qui le précède peut apparaître 0 ou 1 fois ;</li>
                            <li>+ : ce symbole indique que le caractère qui le précède peut apparaître 1 ou plusieurs fois ;</li>
                            <li>* : ce symbole indique que le caractère qui le précède peut apparaître 0, 1 ou plusieurs fois.</li>
                        </ul>
                    </p>
                    <figure class="block_code">
                        <pre><code>
/raclett?e/
                        </code></pre>
                    </figure>
                    <p>
                        À la place des trois symboles vus précédemment, on peut utiliser des accolades pour définir explicitement combien de fois un caractère peut être répété. Trois syntaxes sont disponibles :
                        <ul>
                            <li>{n} : le caractère est répété n fois ;</li>
                            <li>{n,m} : le caractère est répété de n à m fois. Par exemple, si on a {0, 5}, le caractère peut être présent de 0 à 5 fois ;</li>
                            <li>{n,} : le caractère est répété de n fois à l'infini.</li>
                        </ul>
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920128-les-expressions-regulieres-partie-1-2#/id/r-1920026" target="_blank">Les métacaractères</a></h2>

                    <p>
                        Nous avons vu précédemment que la syntaxe des regex est définie par un certain nombre de caractères spéciaux, comme ^, $, [ et ], ou encore + et *. Ces caractères sont ce que l'on appelle des métacaractères, et en voici la liste complète :
                    </p>
                    <figure class="block_code">
                        <pre><code>
! ^ $ ( ) [ ] { } ? + * . / \ |
                        </code></pre>
                    </figure>
                    <p>
                        Un problème se pose si on veut chercher la présence d'une accolade par exemple dans une chaîne de caractères.Les accolades seront vues par l'interpréteur comme étant des accolades « dans le texte », et non comme des métacaractères. Il suffit d'échapper les accolades au moyen d'un anti-slash. Il en va de même pour tous les métacaractères cités précédemment. Il faut même penser à échapper l'anti-slash avec… un anti-slash
                    </p>
                    <p>
                        Au sein d'une classe de caractères, il n'y a pas besoin d'échapper les métacaractères, à l'exception des crochets (qui délimitent le début et la fin d'une classe), du tiret (qui est utilisé pour définir un intervalle) et de l'anti-slash (qui sert à échapper).
                    </p>
                    <p>
                        <div class='em'>Concernant le tiret, il existe une petite exception : il n'a pas besoin d'être échappé s'il est placé en début ou en fin de classe.</div>
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920128-les-expressions-regulieres-partie-1-2#/id/r-1926218" target="_blank">Les types génériques</a></h2>

                    <p>
                        Nous avons vu que les classes étaient pratiques pour chercher un caractère au sein d'un groupe, ce qui permet de trouver un caractère sans savoir au préalable quel sera ce caractère. Seulement, utiliser des classes alourdit fortement la syntaxe des regex et les rend difficilement lisibles. Pour pallier ce petit souci, nous allons utiliser ce que l'on appelle des types génériques. Certains parlent aussi de « classes raccourcies », mais ce terme n'est pas tout à fait exact.
                    </p>
                    <p>
                        Les types génériques s'écrivent tous de la manière suivante : \x, où x représente une lettre. Voici la liste de tous les types génériques :
                        <table>
                            <tr>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>\d</td>
                                <td>Trouve un caractère décimal (un chiffre)</td>
                            </tr>
                            <tr>
                                <td>\D</td>
                                <td>Trouve un caractère qui n'est pas décimal (donc pas un chiffre)</td>
                            </tr>
                            <tr>
                                <td>\s</td>
                                <td>Trouve un caractère blanc</td>
                            </tr>
                            <tr>
                                <td>\S</td>
                                <td>Trouve un caractère qui n'est pas un caractère blanc</td>
                            </tr>
                            <tr>
                                <td>\w</td>
                                <td>Trouve un caractère « de mot » : une lettre, accentuée ou non, ainsi que l'underscore</td>
                            </tr>
                            <tr>
                                <td>\W</td>
                                <td>Trouve un caractère qui n'est pas un caractère « de mot »</td>
                            </tr>
                            <tr>
                                <td>\n</td>
                                <td>Trouve un retour à la ligne</td>
                            </tr>
                            <tr>
                                <td>\t</td>
                                <td>Trouve une tabulation</td>
                            </tr>
                        </table>
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920128-les-expressions-regulieres-partie-1-2#/id/r-1926257" target="_blank">Les assertions</a></h2>

                    <p>
                        Les assertions s'écrivent comme les types génériques mais ne fonctionnent pas tout à fait de la même façon. Un type générique recherche un caractère, tandis qu'une assertion recherche entre deux caractères. C'est tout de suite plus simple avec un tableau :
                    
                    <table>
                        <tr>
                            <td>Type</td>
                            <td>Description</td>
                        </tr>
                        <tr>
                            <td>\b</td>
                            <td>Trouve une limite de mot</td>
                        </tr>
                        <tr>
                            <td>\B</td>
                            <td>Ne trouve pas de limite de mot</td>
                        </tr>
                    </table>
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1920152" target="_blank">Construire une regex</a></h2>

                <p>
                    Nous allons partir d'un exemple simple : vérifier si une chaîne de caractères correspond à une adresse e-mail. Pour rappel, une adresse e-mail est de cette forme : javascript@openclassrooms.com.
                </p>
                <figure class="block_code">
                        <pre><code>
var email = prompt("Entrez votre adresse e-mail :", "javascript@siteduzero.com");

if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)) {
    alert("Adresse e-mail valide !");
} else {
    alert("Adresse e-mail invalide !");
}
                        </code></pre>
                    </figure>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1920164" target="_blank">L'objet RegExp</a></h2>

                    <p>
                        L'objet <code class="line-code">RegExp</code> est l'objet qui gère les expressions régulières. Il y a donc deux façons de déclarer une regex : via <code class="line-code">RegExp</code> ou via son type primitif que nous avons utilisé jusqu'à présent :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myRegex1 = /^Raclette$/i;
var myRegex2 = new RegExp("^Raclette$", "i");
                        </code></pre>
                    </figure>
                    <p>
                        Le constructeur <code class="line-code">RegExp</code> reçoit deux paramètres : le premier est l'expression régulière sous la forme d'une chaîne de caractères, et le deuxième est l'option de recherche, ici <code class="line-code">i</code>.<br /> 
                        L'intérêt d'utiliser <code class="line-code">RegExp</code> est qu'il est possible d'inclure des variables dans la regex, chose impossible en passant par le type primitif :
                    </p>

                    <figure class="block_code">
                        <pre><code>
var nickname = "Sébastien";
var myRegex = new RegExp("Mon prénom est " + nickname, "i");
                        </code></pre>
                    </figure>
                    <p>
                        Ce n'est pas spécialement fréquent, mais cela peut se révéler particulièrement utile. Il est cependant conseillé d'utiliser la notation littérale (le type primitif) quand l'utilisation du constructeur <code class="line-code">RegExp</code> n'est pas nécessaire.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1926288" target="_blank">Méthodes</a></h3>

                    <p>
                        RegExp ne possède que deux méthodes : test() et exec().
                        <ul>
                            <li><code class="line-code">test()</code> a déjà été utilisée et permet de tester une expression régulière ; elle renvoie <code class="line-code">true<</code> si le test est réussi ou <code class="line-code">false</code> si le test échoue. </li>
                            <li><code class="line-code">exec()</code> applique également une expression régulière, mais renvoie un tableau dont le premier élément contient la portion de texte trouvée dans la chaîne de caractères. Si rien n'est trouvé, <code class="line-code">null</code> est renvoyé.</li>
                        </ul>
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1926291" target="_blank">Propriétés</a></h3>

                    <p>
                        L'objet <code class="line-code">RegExp</code> contient neuf propriétés, appelées <code class="line-code">$1</code>, <code class="line-code">$2</code>, <code class="line-code">$3</code>… jusqu'à <code class="line-code">$9</code>. Comme nous allons le voir dans la sous-partie suivante, il est possible d'utiliser une regex pour extraire des portions de texte, et ces portions sont accessibles via les propriétés <code class="line-code">$1</code> à <code class="line-code">$9</code>.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1920186"target="_blank">Les parenthèses capturantes</a></h2>

                    <p>
                        Il est possible d'extraire des informations. Pour définir les informations à extraire, on utilise des parenthèses, que l'on appelle parenthèses capturantes, car leur utilité est de capturer une portion de texte, que la regex va extraire. <br />
                        Prenons un exemple :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var birth = 'Je suis né en mars';

/^Je suis né en (\S+)$/.exec(birth);

alert(RegExp.$1); // Affiche : « mars »
                        </code></pre>
                    </figure>
                    <p>
                        Dans un premier temps, on crée la regex avec les fameuses parenthèses. Comme les mois sont faits de caractères qui peuvent être accentués, on peut directement utiliser le type générique \S. \S+ indique qu'on recherche une série de caractères, jusqu'à la fin de la chaîne (délimitée, pour rappel, par $) : ce sera le mois. On englobe ce « mois » dans des parenthèses pour faire comprendre à l'interpréteur JavaScript que leur contenu devra être extrait.<br />
                        La regex est exécutée via <code class="line-code">exec()</code>. Et ici une autre explication s'impose. Quand on exécute <code class="line-code">test()</code> ou <code class="line-code">exec()</code>, le contenu des parenthèses capturantes est enregistré temporairement au sein de l'objet <code class="line-code">RegExp</code>. Le premier couple de parenthèses sera enregistré dans la propriété <code class="line-code">$1</code>, le deuxième dans <code class="line-code">$2</code> et ainsi de suite, jusqu'au neuvième, dans <code class="line-code">$9</code>. Cela veut donc dire qu'il ne peut y avoir qu'un maximum de neuf couples de parenthèses. Les couples sont numérotés suivant le sens de lecture, de gauche à droite. Et pour accéder aux propriétés, il suffit de faire <code class="line-code">RegExp.$1</code>, <code class="line-code">RegExp.$2</code>, etc.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1926312" target="_blank">Les parenthèses non capturantes</a></h3>

                    <p>
                        Il se peut que dans de longues et complexes regex, il y ait besoin d'utiliser beaucoup de parenthèses, plus de neuf par exemple, ce qui peut poser problème puisqu'il ne peut y avoir que neuf parenthèses capturantes exploitables. Mais toutes ces parenthèses n'ont peut-être pas besoin de capturer quelque chose, elles peuvent juste être là pour proposer un choix. Par exemple, si on vérifie une URL, on peut commencer la regex comme ceci :
                    </p>
                    <figure class="block_code">
                        <pre><code>
/(https|http|ftp|steam):\/\//
                        </code></pre>
                    </figure>
                    <p>
                        Mais on n'a pas besoin que ce soit une parenthèse capturante et qu'elle soit accessible via <code class="line-code">RegExp.$1</code>. Pour la rendre non capturante, on va ajouter <code class="line-code">?:</code> au début de la parenthèse, comme ceci :
                    </p>
                    <figure class="block_code">
                        <pre><code>
/(?:https|http|ftp|steam):\/\//
                        </code></pre>
                    </figure>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1920207" target="_blank">Les recherches non-greedy</a></h2>

                    <p>
                        Le mot anglais greedy signifie « gourmand ». En JavaScript, les regex sont généralement gourmandes, ce qui veut dire que lorsqu'on utilise un quantificateur comme le +, le maximum de caractères est recherché, alors que ce n'est pas toujours le comportement espéré. Par exemple, En spécifiant .+ comme quantificateur, on demande de rechercher le plus possible de caractères jusqu'à rencontrer les caractères « "> ». Pour pallier ce problème, nous allons écrire le quantificateur directement suivi du point d'interrogation, comme ceci :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var html = '&lta href="www.mon-adresse.be"&gt&ltstrong class="web"&gtMon site&lt/strong&&gt/a&gt';

/&lta href="(.+?)">/.exec(html);

alert(RegExp.$1);
                        </code></pre>
                    </figure>
                    <p>
                        Le point d'interrogation va faire en sorte que la recherche soit moins gourmande et s'arrête une fois que le minimum requis est trouvé, d'où l’appellation non-greedy (« non gourmande »).
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1920254" target="_blank">Rechercher et remplacer</a></h2>

                    <p>
                        Rechercher-remplacer signifie qu'on recherche des portions de texte dans une chaîne de caractères et qu'on remplace ces portions par d'autres. C'est relativement pratique pour modifier une chaîne rapidement, ou pour convertir des données. Une utilisation fréquente est la conversion de balises BBCode en HTML pour prévisualiser le contenu d'une zone de texte.
                    </p>
                    <p>
                        Un rechercher-remplacer se fait au moyen de la méthode <code class="line-code">replace()</code> de l'objet <code class="line-code">String</code>. Elle reçoit deux arguments : 
                        <ul>
                            <li>la regex</li>
                            <li> et une chaîne de caractères qui sera le texte de remplacement.</li>
                        </ul>
                             Petit exemple :
                    </p>

                    <figure class="block_code">
                        <pre><code>
var sentence = 'Je m\'appelle Sébastien';

var result = sentence.replace(/Sébastien/, 'Johann');

alert(result); // Affiche : « Je m'appelle Johann »
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1926339" target="_blank">Utilisation de <code class="line-code">replace()</code> sans regex</a></h3>

                    <p>
                        À la place d'une regex, il est aussi possible de fournir une simple chaîne de caractères. C'est utile pour remplacer un mot ou un groupe de mots, mais ce n'est pas une utilisation fréquente, on utilisera généralement une regex. Voici toutefois un exemple :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var result = 'Je m\'appelle Sébastien'.replace('Sébastien', 'Johann');

alert(result); // Affiche : « Je m'appelle Johann »
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1926343" target="_blank">L'option <code class="line-code">g</code></a></h3>

                    <p>
                        Nous avions vu l'option <code class="line-code">i</code> qui permet aux regex d'être insensibles à la casse des caractères. Il existe une autre option, <code class="line-code">g</code>, qui signifie « rechercher plusieurs fois ». Par défaut, la regex donnée précédemment ne sera exécutée qu'une fois : dès que « Sébastien » sera trouvé, il sera remplacé… et puis c'est tout. Donc si le prénom « Sébastien » est présent deux fois, seul le premier sera remplacé. Pour éviter ça, on utilisera l'option <code class="line-code">g</code> qui va dire de continuer la recherche jusqu'à ce que plus rien ne soit trouvé :
                    </p>

                    <figure class="block_code">
                        <pre><code>
var sentence = 'Il s\'appelle Sébastien. Sébastien écrit un tutoriel.';

var result = sentence.replace(/Sébastien/g, 'Johann');

alert(result); // Il s'appelle Johann. Johann écrit un tutoriel.
                        </code></pre>
                    </figure>
                    <p>
                        Ainsi, toutes les occurrences de « Sébastien » sont correctement remplacées par « Johann ». Le mot occurrence est nouveau ici, et il est maintenant temps de l'employer. À chaque fois que la regex trouve la portion de texte qu'elle recherche, on parle d'occurrence.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1926360" target="_blank">Rechercher et capturer</a></h3>

                    <p>
                        Il est possible d'utiliser les parenthèses capturantes pour extraire des informations et les réutiliser au sein de la chaîne de remplacement. Par exemple, nous avons une date au format américain : 05/26/2011, et nous souhaitons la convertir au format jour/mois/année. Rien de plus simple :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var date = '05/26/2011';

date = date.replace(/^(\d{2})\/(\d{2})\/(\d{4})$/, 'Le $2/$1/$3');

alert(date); // Le 26/05/2011
                        </code></pre>
                    </figure>
                    <p>
                        Pour placer un simple caractère $ dans la chaîne de remplacement, il suffit de le doubler.
                    </p>
                    <p>
                        Voici un autre exemple illustrant ce principe. L'idée ici est de convertir une balise BBCode de mise en gras (<code class="line-code">[b]un peu de texte[/b]</code>) en un formatage HTML de ce type : <code class="line-code">&ltstrong&gt</code> un peu de texte <code class="line-code">&lt/strong&gt</code>. N'oubliez pas d'échapper les crochets qui sont, pour rappel, des métacaractères !
                    </p>
                    <figure class="block_code">
                        <pre><code>
var text = 'bla bla [b]un peu de texte[/b] bla [b]bla bla en gras[/b] bla bla';

text = text.replace(/\[b\]([\s\S]*?)\[\/b\]/g, '&ltstrong&gt$1&lt/strong&gt');

alert(text);
                        </code></pre>
                    </figure>
                    <p>
                        Cette petite regex de remplacement est la base d'un système de prévisualisation du BBCode. Il suffit d'écrire une regex de ce type pour chaque balise, et le tour est joué :
                    </p>
                    <figure class="block_code">
                        <pre><code>
&ltscript&gt
    function preview() {
        var value = document.getElementById("text").value;

        value = value.replace(/\[b\]([\s\S]*?)\[\/b\]/g, '&ltstrong&gt$1&lt/strong&gt'); // Gras
        value = value.replace(/\[i\]([\s\S]*?)\[\/i\]/g, '&ltem&gt$1&lt/em&gt'); // Italique
        value = value.replace(/\[s\]([\s\S]*?)\[\/s\]/g, '&ltdel&gt$1&lt/del&gt'); // Barré
        value = value.replace(/\[u\]([\s\S]*?)\[\/u\]/g, '&ltspan style="text-decoration: underline"&gt$1&lt/span&gt'); // Souligné

        document.getElementById("output").innerHTML = value;
    }
&lt/script&gt

&ltform&gt
    &lttextarea id="text"&gt&lt/textarea&gt&ltbr /&gt
    &ltbutton type="button" onclick="preview()"&gtPrévisualiser&lt/button&gt
    &ltdiv id="output"&gt&lt/div&gt
&lt/form&gt
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1926378" target="_blank">Utiliser une fonction pour le remplacement</a></h3>

                    <p>
                        À la place d'une chaîne de caractères, il est possible d'utiliser une fonction pour gérer le ou les remplacements. Cela permet, par exemple, de réaliser des opérations sur les portions capturées (<code class="line-code">$1</code>, <code class="line-code">$2</code>, <code class="line-code">$3</code>…).<br />
                        Les paramètres de la fonction sont soumis à une petite règle, car ils doivent respecter un certain ordre (mais leurs noms peuvent bien évidemment varier) : <code class="line-code">function(str, p1, p2, p3 /* ... */, offset, s)</code>. Les paramètres <code class="line-code">p1</code>, <code class="line-code">p2</code>, <code class="line-code">p3</code>… représentent les fameux <code class="line-code">$1</code>, <code class="line-code">$2</code>, <code class="line-code">$3</code>... S'il n'y a que trois parenthèses capturantes, il n'y aura que trois « p ». S'il y en a cinq, il y aura cinq « p ». Voici les explications des paramètres :
                        <ul>
                            <li>Le paramètre <code class="line-code">str</code> contient la portion de texte trouvée par la regex ;</li>
                            <li>Les paramètres <code class="line-code">p*</code> contiennent les portions capturées par les parenthèses ;</li>
                            <li>Le paramètre <code class="line-code">offset</code> contient la position de la portion de texte trouvée ;</li>
                            <li>Le paramètre <code class="line-code">s</code> contient la totalité de la chaîne.</li>
                        </ul>
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1926382" target="_blank">Rechercher la position d'une occurrence</a></h2>

                    <p>
                        La méthode <code class="line-code">search()</code>, toujours de l'objet <code class="line-code">String</code>, retourne la position de la première occurrence trouvée. Si aucune occurrence n'est trouvée, -1 est retourné.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1926388" target="_blank">Récupérer toutes les occurrences</a></h2>

                    <p>
                        La méthode <code class="line-code">match()</code> de l'objet <code class="line-code">String</code> fonctionne comme <code class="line-code">search()</code>, à la différence qu'elle retourne un tableau de toutes les occurrences trouvées.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920284-les-expressions-regulieres-partie-2-2#/id/r-1926406" target="_blank">Couper avec une regex</a></h2>

                    <p>
                        Nous avions vu que la méthode <code class="line-code">split()</code> recevait une chaîne de caractères en paramètre. Mais il est également possible de transmettre une regex. C'est très pratique pour découper une chaîne à l'aide, par exemple, de plusieurs caractères distincts :
                    </p>

                    <figure class="block_code">
                        <pre><code>
var family = 'Guillaume,Pauline;Clarisse:Arnaud;Benoît;Maxime';
var result = family.split(/[,:;]/);

alert(result);
                        </code></pre>
                    </figure>

                    <p>
                        L'<code class="line-code">alert()</code> affiche donc un tableau contenant tous les prénoms, car il a été demandé à <code class="line-code">split()</code> de couper la chaîne dès qu'une virgule, un deux-points ou un point-virgule est rencontré.
                    </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920396-les-donnees-numeriques#/id/r-1920305" target="_blank">L'objet Number</a></h1>

                    <p>
                        L'objet <code class="line-code">Number</code> est à la base de tout nombre et pourtant on ne s'en sert quasiment jamais de manière explicite, car on lui préfère (comme pour la plupart des objets) l'utilisation de son type primitif. Cet objet possède pourtant des fonctions intéressantes comme, par exemple, celle permettant de faire des conversions depuis une chaîne de caractères jusqu'à un nombre en instanciant un nouvel objet <code class="line-code">Number</code> :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myNumber = new Number('3'); // La chaîne de caractères « 3 » est convertie en un nombre de valeur 3
                        </code></pre>
                    </figure>
                    <p>
                        Cependant, cette conversion est imprécise dans le sens où on ne sait pas si on obtiendra un nombre entier ou flottant en retour. On lui préfère donc les fonctions <code class="line-code">parseInt()</code> et <code class="line-code">parseFloat()</code> qui permettent d'être sûr de ce que l'on obtiendra. De plus, <code class="line-code">parseInt()</code> utilise un second argument permettant de spécifier la base (2 pour le système binaire, 10 pour le système décimal, etc.) du nombre écrit dans la chaîne de caractères, ce qui permet de lever tout soupçon sur le résultat obtenu.
                    </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920396-les-donnees-numeriques#/id/r-1920351" target="_blank">L'objet Math</a></h1>

                    <p>
                        Tout d'abord, deux petites choses :
                        <ul>
                            <li>La liste des propriétés et méthodes ne sera pas exhaustive, <a href="https://developer.mozilla.org/en/JavaScript/Reference/Global_Objects/Math" target="_blank">consultez la documentation</a> si vous souhaitez tout connaître ;</li>
                            <li>Toutes les propriétés et méthodes de cet objet sont accessibles directement sans aucune instanciation, on appelle cela des méthodes et des propriétés statiques. Considérez donc cet objet plutôt comme un namespace.</li>
                        </ul>
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920396-les-donnees-numeriques#/id/r-1926436" target="_blank">Les propriétés</a></h2>

                    <p>
                        Les propriétés de l'objet Math sont des constantes qui définissent certaines valeurs mathématiques comme le nombre pi (π) ou le nombre d'Euler (e). Nous ne parlons que de ces deux constantes car les autres ne sont pas souvent utilisées en JavaScript. Pour les utiliser, rien de bien compliqué :
                    </p>
                    <figure class="block_code">
                        <pre><code>
alert(Math.PI); // Affiche la valeur du nombre pi
alert(Math.E); // Affiche la valeur du nombre d'Euler
                        </code></pre>
                    </figure>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920396-les-donnees-numeriques#/id/r-1926471" target="_blank">Les méthodes</a></h2>

                    <p>
                        <ul>
                            <li>La méthode <code class="line-code">floor()</code> retourne le plus grand entier inférieur ou égal à la valeur que vous avez passée en paramètre : <code class="line-code">Math.floor(33.15); // Retourne : 33</code></li>
                            <li>La méthode <code class="line-code">ceil()</code>, celle-ci retourne le plus petit entier supérieur ou égal à la valeur que vous avez passée en paramètre : <code class="line-code">Math.ceil(33.95); // Retourne : 34</code></li>
                            <li>La méthode <code class="line-code">round()</code> qui fait un arrondi.</li>
                            <li>La méthode pour faire une puissance, <code class="line-code">pow()</code> : <code class="line-code">Math.pow(3, 2); // Le premier paramètre est la base, le deuxième est l'exposant.</code></li>
                            <li>Concernant le calcul de la racine carrée d'un nombre, il existe aussi une méthode prévue pour cela, elle se nomme <code class="line-code">sqrt()</code> : <code class="line-code">Math.sqrt(9); // Retourne : 3</code></li>
                            <li>La méthode qui renvoi un nombre aléatoire entre 0 et 1 est <code class="line-code">random()</code></li>
                            <li>Voici deux méthodes qui peuvent se révéler bien utiles : <code class="line-code">max()</code> et <code class="line-code">min()</code>. Elles permettent respectivement de retrouver les valeurs maximum et minimum dans une liste de nombres : <code class="line-code">Math.max(42, 4, 38, 1337, 105); // Retourne : 1337 ; Math.min(42, 4, 38, 1337, 105); // Retourne : 4</code></li>
                        </ul>
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920396-les-donnees-numeriques#/id/r-1926485" target="_blank">Les fonctions de conversion</a></h2>

                    <p>
                        Ces deux fonctions se nomment <code class="line-code">parseInt()</code> et <code class="line-code">parseFloat()</code>, elles permettent de convertir une chaîne de caractères en un nombre. La première possède deux arguments tandis que la seconde en possède un seul :
                        <ul>
                            <li>Le premier argument est obligatoire, il s'agit de la chaîne de caractère à convertir en nombre. Exemple : <code class="line-code">"303"</code> donnera le nombre 303 en sortie.</li>
                            <li>Le deuxième argument est facultatif, mais il est très fortement conseillé de s'en servir avec la fonction <code class="line-code">parseInt()</code> (puisque, de toute manière, il n'existe pas avec <code class="line-code">parseFloat()</code>). Il permet de spécifier la base que le nombre utilise dans la chaîne de caractères. Exemple : 10 pour spécifier le système décimal, 2 pour le système binaire.</li>
                        </ul>

                        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920396-les-donnees-numeriques#/id/r-1926514" target="_blank">Les fonctions de contrôle</a></h2>

                        <p>
                            Deux fonctions permettant de vérifier la présence de <code class="line-code">NaN</code> (Not a Number) et <code class="line-code">Infinity</code> : 
                            <ul>
                                <li><code class="line-code">isNaN()</code> qui permet de savoir si notre variable contient un nombre</li>
                                <li><code class="line-code">isFinite()</code> permet de déterminer si le nombre est fini.</li>
                            </ul>
                        </p>

                        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920527-la-gestion-du-temps#/id/r-1920466" target="_blank">Le système de datation</a></h1>

                        <p>
                            L'heure et la date sont gérées par un seul et même objet qui se nomme <code class="line-code">Date</code>. 
                        </p>

                        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920527-la-gestion-du-temps#/id/r-1926537" target="_blank">Le constructeur</a></h2>

                        <p>
                            Ce dernier prend en paramètre de nombreux arguments et s'utilise de différentes manières. Voici les quatre manières de l'utiliser :
                        </p>
                        <figure class="block_code">
                        <pre><code>
new Date(); // instancie un objet Date dont la date est fixée à celle de l'instant même de l'instanciation.
new Date(timestamp); // permet de spécifier le timestamp à utiliser pour notre instanciation.
new Date(dateString); // prend en paramètre une chaîne de caractères qui doit être interprétable par la méthode parse().
new Date(année, mois, jour [, heure, minutes, secondes, millisecondes ]); //  spécifier manuellement chaque composant qui constitue une date.
                        </code></pre>
                    </figure>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920527-la-gestion-du-temps#/id/r-1926545" target="_blank">Les méthodes statiques</a></h2>

                    <p>
                        L'objet <code class="line-code">Date</code> possède deux méthodes statiques, mais nous n'allons aborder l'utilisation que de la méthode <code class="line-code">parse()</code>.<br />
                        Cette méthode prend en unique paramètre une chaîne de caractères représentant une date et renvoie le timestamp associé. Cependant, nous ne pouvons pas écrire n'importe quelle chaîne de caractères, il faut respecter une certaine syntaxe qui se présente de la manière suivante :
                    </p>
                    <figure class="block_code">
                        <pre><code>
Sat, 04 May 1991 20:00:00 GMT+02:00
                        </code></pre>
                    </figure>
                    <p>
                        Cette date représente donc le samedi 4 mai 1991 à 20h pile avec un décalage de deux heures supplémentaires par rapport à l'horloge de Greenwich.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920527-la-gestion-du-temps#/id/r-1926575" target="_blank">Les méthodes des instances de l'objet <code class="line-code">Date</code></a></h2>

                    <p>
                        Commençons par huit méthodes très simples qui fonctionnent toutes selon l'heure locale :
                        <ul>
                            <li><code class="line-code">getFullYear()</code> : renvoie l'année sur 4 chiffres ;</li>
                            <li><code class="line-code">getMonth()</code> : renvoie le mois (0 à 11) ;</li>
                            <li><code class="line-code">getDate()</code> : renvoie le jour du mois (1 à 31) ;</li>
                            <li><code class="line-code">getDay()</code> : renvoie le jour de la semaine (0 à 6, la semaine commence le dimanche) ;</li>
                            <li><code class="line-code">getHours()</code> : renvoie l'heure (0 à 23) ;</li>
                            <li><code class="line-code">getMinutes()</code> : renvoie les minutes (0 à 59) ;</li>
                            <li><code class="line-code">getSeconds()</code> : renvoie les secondes (0 à 59) ;</li>
                            <li><code class="line-code">getMilliseconds()</code> : renvoie les millisecondes (0 à 999).</li>
                        </ul>
                        <div class='em'>Ces huit méthodes possèdent chacune une fonction homologue de type « set ». Par exemple, avec la méthode <code class="line-code">getDay()</code> il existe aussi, pour le même objet <code class="line-code">Date</code>, la méthode <code class="line-code">setDay()</code> qui permet de définir le jour en le passant en paramètre.</div>
                        Deux autres méthodes pourront aussi vous êtres utiles :
                        <ul>
                            <li>La méthode <code class="line-code">getTime()</code> renvoie le timestamp de la date de votre objet ;</li>
                            <li>La méthode <code class="line-code">setTime()</code> vous permet de modifier la date de votre objet en lui passant en unique paramètre un timestamp.</li>
                        </ul>
                    </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920527-la-gestion-du-temps#/id/r-1920526" target="_blank">Les fonctions temporelles</a></h1>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920527-la-gestion-du-temps#/id/r-1926611" target="_blank">Utiliser <code class="line-code">setTimeout()</code> et <code class="line-code">setInterval()</code> avec un simple appel de fonction</a></h2>

                    <p>
                        La première permet de déclencher un code au bout d'un temps donné, tandis que la seconde va déclencher un code à un intervalle régulier que vous aurez spécifié.<br />
                        Ces deux fonctions ont exactement les mêmes paramètres : le premier est la fonction à exécuter, le deuxième est le temps en millisecondes.<br />
                        Concernant le premier paramètre, il y a trois manières de le spécifier :
                        <ul>
                            <li>En passant la fonction en référence :
                                <figure class="block_code">
                                    <pre><code>
setTimeout(myFunction, 2000); // myFunction sera exécutée au bout de 2 secondes
                                    </code></pre>
                                </figure></li>
                            <li>En définissant une fonction anonyme :
                                <figure class="block_code">
                                     <pre><code>
setTimeout(function() {
    // Code…
}, 2000);
                                    </code></pre>
                                </figure></li>
                            <li>En utilisant une sale méthode que vous devez bannir de tous vos codes :
                                <figure class="block_code">
                                     <pre><code>
setTimeout('myFunction()', 2000);
                                    </code></pre>
                                </figure></li>
                            </ul>
                            En ce qui concerne le deuxième paramètre, il n'y a pas grand-chose à dire mis à part qu'il s'agit du temps à spécifier (en millisecondes) à votre fonction. 
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920527-la-gestion-du-temps#/id/r-1926610" target="_blank">Avec une fonction nécessitant des paramètres</a></h2>

                    <p>
                        Admettons que vous souhaitiez passer des paramètres à la fonction utilisée avec <code class="line-code">setTimeout()</code> ou <code class="line-code">setInterval()</code>, comment allez-vous faire ?<br />
                        C'est bien simple, nos deux fonctions temporelles possèdent toutes les deux deux paramètres, mais en vérité il est possible d'en attribuer autant que l'on veut. Les paramètres supplémentaires seront alors passés à la fonction appelée par notre fonction temporelle, exemple :
                    </p>
                    <figure class="block_code">
                        <pre><code>
setTimeout(myFunction, 2000, param1, param2);
                        </code></pre>
                    </figure>
                    <p>
                        Ainsi, au terme du temps passé en deuxième paramètre, notre fonction myFunction() sera appelée de la manière suivante :
                    </p>
                    <figure class="block_code">
                        <pre><code>
myFunction(param1, param2);
                        </code></pre>
                    </figure>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920527-la-gestion-du-temps#/id/r-1926620" target="_blank">Annuler une action temporelle</a></h2>

                    <p>
                        Il se peut que vous ayez parfois besoin d'annuler une action temporelle. Par exemple, vous avez utilisé la fonction <code class="line-code">setTimeout()</code> pour qu'elle déclenche une alerte si l'utilisateur n'a pas cliqué sur une image dans les dix secondes qui suivent. Si l'utilisateur clique sur l'image il va alors vous falloir annuler votre action temporelle avant son déclenchement, c'est là qu'entrent en jeu les fonctions <code class="line-code">clearTimeout()</code> et <code class="line-code">clearInterval()</code>. Comme vous pouvez vous en douter, la première s'utilise pour la fonction <code class="line-code">setTimeout()</code> et la deuxième pour <code class="line-code">setInterval()</code>.<br />
                        Ces deux fonctions prennent toutes les deux un seul argument : l'identifiant de l'action temporelle à annuler. Cet identifiant (qui est un simple nombre entier) est retourné par les fonctions <code class="line-code">setTimeout()</code> et <code class="line-code">setInterval()</code>.
                    </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920788-les-images#/id/r-1926808" target="_blank">L'objet Image</a></h1>

                    <p>
                        La manipulation des images se fait par le biais de l'objet <code class="line-code">Image</code>, qui possède plusieurs propriétés permettant d'obtenir divers renseignements sur l'image actuellement instanciée.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920788-les-images#/id/r-1926814" target="_blank">Le constructeur</a></h2>

                    <p>
                        Le constructeur de l'objet Image ne prend aucun argument en paramètre, cela a au moins le mérite d'être simple :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myImg = new Image();
                        </code></pre>
                    </figure>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920788-les-images#/id/r-1926841" target="_blank">Propriétés</a></h2>

                    <p>
                        Voici une liste non exhaustive des propriétés de l'objet <code class="line-code">Image</code>. Consultez la <a href="
                        https://developer.mozilla.org/en/DOM/HTMLImageElement" target="_blank">documentation</a> pour une liste complète (mais pas forcément fiable).
                        <ul>
                            <li><code class="line-code">width</code> : Contient la largeur originale de l'image. Vous pouvez redéfinir cette propriété pour modifier la taille de l'image.</li>
                            <li><code class="line-code">height</code> : Contient la hauteur originale de l'image. Vous pouvez redéfinir cette propriété pour modifier la taille de l'image.</li>
                            <li><code class="line-code">src</code> : Cette propriété vous sert à spécifier l'adresse (absolue ou relative) de l'image. Une fois que cette propriété est spécifiée, l'image commence immédiatement à être chargée.</li>
                        </ul>
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920788-les-images#/id/r-1926849" target="_blank">Événements</a></h2>

                    <p>
                        L'objet <code class="line-code">Image</code> ne possède qu'un seul événement nommé <code class="line-code">load</code>, il est très utile, notamment lorsque l'on souhaite créer un script de type Lightbox, car il vous permet de savoir quand une image est chargée.<br />
                        Son utilisation se fait comme tout événement :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myImg = new Image();

myImg.src = 'adresse_de_mon_image';

myImg.addEventListener('load', function() {
    // Etc.
});
                        </code></pre>
                    </figure>
                    <p>
                        Cependant, ce code risque de causer un problème majeur : notre événement pourrait ne jamais se déclencher ! Pourquoi donc ? Eh bien, parce que nous avons spécifié l'adresse de notre image avant même d'avoir spécifié notre événement, ce qui fait que si l'image a été trop rapidement chargée, l'événement <code class="line-code">load</code> se sera déclenché avant même que nous n'ayons eu le temps de le modifier.<br />
                        Il existe une solution toute simple pour pallier ce problème, il suffit de spécifier l'adresse de notre image après avoir modifié notre événement :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myImg = new Image();

myImg.addEventListener('load', function() { // Étape 1 : on modifie notre événement
    // Etc.
});

myImg.src = 'adresse_de_mon_image'; // Étape 2 : on spécifie l'adresse de notre image
                        </code></pre>
                    </figure>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920788-les-images#/id/r-1926852" target="_blank">Particularités</a></h2>

                    <p>
                        L'objet <code class="line-code">Image</code> est un peu spécial, dans le sens où vous pouvez l'ajouter à votre arbre DOM comme vous le feriez avec la valeur retournée par la méthode <code class="line-code">document.createElement()</code>. Ce comportement est spécial et ne peut se révéler utile que dans de très rares cas d'application, mais il est quand même préférable de vous en parler afin que vous connaissiez l'astuce :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myImg = new Image();
myImg.src = 'adresse_de_mon_image';

document.body.appendChild(myImg); // L'image est ajoutée au DOM
                        </code></pre>
                    </figure>


                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1926643" target="_blank">L'objet Array</a></h1>

                    <p>
                        L'objet <code class="line-code">Array</code> est à la base de tout tableau. Il possède toutes les méthodes et les propriétés nécessaires à l'utilisation et à la modification des tableaux. Précisons que cet objet ne concerne que les tableaux itératifs, les objets littéraux ne sont pas des tableaux, ce sont des objets, tout simplement !
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1926656" target="_blank">Le constructeur</a></h2>

                    <p>
                        Cet objet peut être instancié de trois manières différentes. Cependant, gardez bien à l'esprit que l'utilisation de son type primitif est bien préférable à l'instanciation de son objet. Nous n'abordons ce sujet qu'à titre indicatif.<br />
                        Instanciation sans arguments. Ce code génère un tableau vide :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myArray = new Array();
                        </code></pre>
                    </figure>
                    <p>
                        Instanciation en spécifiant chaque valeur à attribuer :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myArray = new Array('valeur1', 'valeur2', …, 'valeurX');
                        </code></pre>
                    </figure>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1926661" target="_blank">Les propriétés</a></h2>

                    <p>
                        Ici, les tableaux ont le mérite de rendre les choses simples, ils ne possèdent qu'une seule propriété (accessible uniquement après instanciation) que vous connaissez déjà tous : <code class="line-code">length</code> ! Pour rappel, cette propriété est en lecture seule et vous indique combien d'éléments existent dans votre tableau.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1920647" target="_blank">Les méthodes</a></h2>

                    <p>
                        Plusieurs méthodes ont déjà été abordées au cours du chapitre de la première partie consacré aux tableaux. Elles sont de nouveau listées dans ce chapitre, mais de manière plus approfondie afin que celui-ci vous serve, en quelque sorte, de référence.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1926673" target="_blank">Concaténer deux tableaux</a></h3>

                    <p>
                        Les tableaux possèdent une méthode nommée <code class="line-code">concat()</code> qui nous permet d'obtenir le résultat souhaité :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myArray = ['test1', 'test2'].concat(['test3', 'test4']);
alert(myArray);
                        </code></pre>
                    </figure>
                    <p>
                        <div class='em'>Notez bien que la méthode <code class="line-code">concat()</code> ne modifie aucun tableau ! Elle ne fait que retourner un nouveau tableau qui correspond à la concaténation souhaitée.</div>
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1926693" target="_blank">Parcourir un tableau</a></h3>

                    <p>
                        La méthode <code class="line-code">forEach()</code>prend pour paramètre deux arguments, le premier reçoit la fonction à exécuter pour chaque index existant et le deuxième (qui est facultatif) reçoit un objet qui sera pointé par le mot-clé <code class="line-code">this</code> dans la fonction que vous avez spécifiée pour le premier argument.<br />
                        Concentrons-nous sur la fonction passée en paramètre. Celle-ci sera exécutée pour chaque index existant (dans l'ordre croissant bien entendu) et recevra en paramètres trois arguments :
                        <ul>
                            <li>Le premier contient la valeur contenue à l'index actuel ;</li>
                            <li>Le deuxième contient l'index actuel ;</li>
                            <li>Le troisième est une référence au tableau actuellement parcouru.</li>
                        </ul>
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myArray = ["C'est", "un", "test"];

myArray.forEach(function(value, index, array) {
    alert(
        'Index : ' + index + '\n' +
        'Valeur : ' + value
    );
});
                        </code></pre>
                    </figure>
                    <p>
                        <a href="https://course.oc-static.com/ftp-tutos/cours/javascript/part3/chap7/ex2.html" target="_blank">Essayer le code</a>
                    </p>
                    <p>
                        Vous avez sûrement constaté que nous n'utilisons pas l'argument <code class="line-code">array</code> dans notre fonction anonyme, vous pouvez très bien ne pas le spécifier, votre code fonctionnera sans problème !
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1926706" target="_blank">Rechercher un élément dans un tableau</a></h3>

                    <p>
                        Tout comme les chaînes de caractères, les tableaux possèdent aussi les fonctions <code class="line-code">indexOf()</code> et <code class="line-code">lastIndexOf()</code>. Elles fonctionnent de la même manière, sauf qu'au lieu de ne chercher qu'une chaîne de caractères vous pouvez faire une recherche pour n'importe quel type de valeur, que ce soit une chaîne de caractères, un nombre ou un objet. La valeur retournée par la fonction est l'index du tableau dans lequel se trouve votre élément recherché, en cas d'échec la fonction vous retourne toujours la valeur -1.
                    </p>
                    <figure class="block_code">
                        <pre><code>
var element2 = ['test'],
     myArray = ['test', element2];

alert(myArray.indexOf(element2)); // Affiche : 1
                        </code></pre>
                    </figure>

                    <p>
                        Pour terminer sur nos deux fonctions, sachez qu'elles possèdent, elles aussi, un second paramètre permettant de spécifier à partir de quel index vous souhaitez faire débuter la recherche. 
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1926738" target="_blank">Trier un tableau</a></h3>

                    <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1926711" target="_blank">La méthode <code class="line-code">reverse()</code></a></h4>

                    <p>
                        Cette méthode ne prend aucun argument en paramètre et ne retourne aucune valeur, son seul rôle est d'inverser l'ordre des valeurs de votre tableau :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myArray = [1, 2, 3, 4, 5];

myArray.reverse();

alert(myArray); // Affiche : 5,4,3,2,1
                        </code></pre>
                    </figure>

                    <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1926737" target="_blank">La méthode <code class="line-code">sort()</code></a></h4>

                    <p>
                        Par défaut cette méthode trie votre tableau par ordre alphabétique uniquement. Mais cette méthode possède aussi un argument facultatif permettant de spécifier l'ordre à définir, et c'est là que les choses se compliquent. <br />
                        Tout d'abord, prenons un exemple simple :
                    </p>

                    <figure class="block_code">
                        <pre><code>
var myArray = [3, 1, 5, 10, 4, 2];

myArray.sort();

alert(myArray); // Affiche : 1,10,2,3,4,5
                        </code></pre>
                    </figure>

                    <p>
                        Venons-en maintenant à l'argument facultatif de <code class="line-code">sort()</code> : il a pour but de réaliser un tri personnalisé. Il doit contenir une référence vers une fonction que vous avez créée, cette dernière devant posséder deux arguments qui seront spécifiés par la méthode <code class="line-code">sort()</code>. La fonction devra alors dire si les valeurs transmises en paramètres sont de même valeur, ou bien si l'une des deux est supérieure à l'autre.
                    </p>
                    <p>
                        Notre but ici est de faire en sorte que notre tri soit, non pas alphabétique, mais par ordre croissant (et donc que la valeur 10 se retrouve à la fin du tableau). Nous allons donc commencer par créer notre fonction anonyme que nous fournirons au moment du tri.
                    </p>
                    <figure class="block_code">
                        <pre><code>
function(a, b) {
    // Comparaison des valeurs
}
                        </code></pre>
                    </figure>
                    <p>
                        nous allons devoir comparer les deux valeurs fournies. Avant tout, sachez que la méthode <code class="line-code">sort()</code> ne convertit pas les données du tableau en chaînes de caractères lorsque vous avez défini l'argument facultatif, ce qui fait que les valeurs que nous allons recevoir en paramètres seront bien de type <code class="line-code">Number</code> et non pas de type <code class="line-code">String</code>, cela nous facilite déjà la tâche !<br />
                        Le principe est simple :
                        <ul>
                            <li>On retourne -1 lorsque <code class="line-code">a</code> est inférieur à <code class="line-code">b</code> ;</li>
                            <li>On retourne 1 lorsque <code class="line-code">a</code> est supérieur à <code class="line-code">b</code> ;</li>
                            <li>Et on retourne 0 quand les valeurs sont égales.</li>
                        </ul>
                        Notre fonction devient donc la suivante :
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myArray = [3, 1, 5, 10, 4, 2];

myArray.sort(function(a, b) {

    if (a < b) {
        return -1;
    } else if (a > b) {
        return 1;
    } else {
        return 0;
    }

});

alert(myArray); // Affiche : 1,2,3,4,5,10
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1926744" target="_blank">Extraire une partie d'un tableau</a></h3>

                    <p>
                        La méthode <code class="line-code">slice()</code> est là pour ça. Elle prend en paramètre deux arguments, dont le deuxième est facultatif. Le premier est l'index (inclus) à partir duquel vous souhaitez commencer l'extraction du tableau, le deuxième est l'index (non inclus) auquel l'extraction doit se terminer. S'il n'est pas spécifié, alors l'extraction continue jusqu'à la fin du tableau.<br />
                        Lorsque vous spécifiez un nombre négatif au deuxième argument, alors l'extraction se terminera à l'index de fin moins la valeur que vous avez spécifiée. 
                    </p>
                    <figure class="block_code">
                        <pre><code>
var myArray = [1, 2, 3, 4, 5];

alert(myArray.slice(1, 3)); // Affiche : 2,3
alert(myArray.slice(2)); // Affiche : 3,4,5
alert(myArray.slice(1, -1)); // Affiche : 2,3,4
                        </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1926756" target="_blank">Remplacer une partie d'un tableau</a></h3>

                    <p>
                        La méthode <code class="line-code">splice()</code>reçoit deux arguments obligatoires, puis une infinité d'arguments facultatifs. Le premier argument est l'index à partir duquel vous souhaitez effectuer vos opérations, le deuxième est le nombre d'éléments que vous souhaitez supprimer à partir de cet index. Les arguments qui suivent les deux premiers contiennent les éléments qui doivent être ajoutés en remplacement de ceux effacés. Vous pouvez très bien spécifier plus d'éléments à ajouter que d'éléments qui ont été supprimés, ce n'est pas un problème. 
                    </p>

                    <figure class="block_code">
                        <pre><code>
var myArray = [1, null, 4, 5];

myArray.splice(1, 1, 2, 3);

alert(myArray); // Affiche : 1,2,3,4,5
                        </code></pre>
                    </figure>
                    <p>
                        Notez bien aussi une chose : si vous ajoutez des éléments dans le tableau, vous pouvez mettre le deuxième argument à 0, ce qui aura pour effet d'ajouter des éléments sans être obligé d'en supprimer d'autres. 
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1926760" target="_blank">Tester l'existence d'un tableau</a></h3>

                    <p>
                        Les tableaux possèdent une méthode propre à l'objet constructeur nommée <code class="line-code">isArray()</code>. Comme son nom l'indique, elle permet de tester si la variable passée en paramètre contient un tableau.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1920695" target="_blank">Les piles</a></h2>

                    <p>
                        Les piles partent du principe que le premier élément ajouté sera le dernier retiré, comme une pile de livres ! Elles sont utilisables de deux manières différentes : soit avec les deux méthodes <code class="line-code">push()</code> et <code class="line-code">pop()</code>, soit avec les deux restantes <code class="line-code">unshift()</code> et <code class="line-code">shift()</code>. Dans le premier cas, la pile sera empilée et dépilée à la fin du tableau, dans le deuxième cas, les opérations se feront au début du tableau.<br />
                        Pour rappel :
                        <ul>
                            <li><code class="line-code">push()</code> : ajoute un ou plusieurs éléments à la fin du tableau (un argument par élément ajouté) et retourne la nouvelle taille de ce dernier.</li>
                            <li><code class="line-code">pop()</code> : retire et retourne le dernier élément d'un tableau.</li>
                            <li><code class="line-code">unshift()</code> : ajoute un ou plusieurs éléments au début du tableau (un argument par élément ajouté) et retourne la nouvelle taille de ce dernier.</li>
                            <li><code class="line-code">shift()</code> : retire et retourne le premier élément d'un tableau.</li>
                        </ul>
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920696-les-tableaux#/id/r-1926787" target="_blank">Les files</a></h2>

                    <p>
                        Les files partent d'un autre principe tout aussi simple : le premier élément ajouté est le premier sorti, comme une file d'attente. Elles sont, elles aussi, utilisables de deux manières différentes : soit avec le couple <code class="line-code">push()</code>/<code class="line-code">shift()</code>, soit avec le couple <code class="line-code">unshift()</code>/<code class="line-code">pop()</code>.
                        <div class='em'>En JavaScript, les files sont bien moins utilisées que les piles, car elles sont dépendantes des méthodes <code class="line-code">unshift()</code> et <code class="line-code">shift()</code>. Ces dernières souffrent d'un manque de performance, elles utilisent chacune un algorithme qui fait qu'en retirant ou en ajoutant un élément en début de tableau, elles vont devoir réécrire tous les index des éléments qui suivent. Si le tableau possède de nombreux éléments, cela peut parfois prendre un peu de temps. C'est ce qui fait que les piles sont généralement préférées aux files en JavaScript, car elles peuvent se passer de ces deux méthodes. Cela dit, il faut relativiser : la perte de performance n'est pas dramatique, vous pouvez très bien vous en servir pour des tableaux de petite taille<. </div>
                    </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920856-les-polyfills-et-les-wrappers#/id/r-1926897" target="_blank">Les polyfiles</a></h1>

                    <p>
                        Concrètement, un polyfill est un script qui a pour but de fournir une technologie à tous les navigateurs existants. Une fois implémenté dans votre code, un polyfill a deux manières de réagir :
                        <ul>
                            <li>Le navigateur est récent et supporte la technologie souhaitée, le polyfill ne va alors strictement rien faire et va vous laisser utiliser cette technologie comme elle devrait l'être nativement.</li>
                            <li>Le navigateur est trop vieux et ne supporte pas la technologie souhaitée, le polyfill va alors « imiter » cette technologie grâce à diverses astuces et vous permettra de l'utiliser comme si elle était disponible nativement.</li>
                        </ul>
                        sachez maintenant que la plupart d'entre vous n'auront pratiquement jamais à réaliser vos propres polyfills, car ils sont déjà nombreux à avoir été créés par d'autres développeurs JavaScript. Le MDN est un bon concentré de polyfills et les recherches sur Google peuvent aussi vous aider. Essayez donc de taper le nom d'une méthode suivi du mot-clé « polyfill », vous trouverez rapidement ce que vous cherchez. 
                    </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920856-les-polyfills-et-les-wrappers#/id/r-1920855" target="_blank">Les wrappers</a></h1>

                    <p>
                        Un wrapper est un code qui a pour but d'encadrer l'utilisation de certains éléments du JavaScript. Il peut ainsi contrôler la manière dont ils sont employés et peut réagir en conséquence pour fournir des fonctionnalités supplémentaires aux développeurs. Il s'agit en fait d'une surcouche par laquelle nous allons passer pour pouvoir contrôler nos éléments. Dans l'idéal, un wrapper doit permettre au développeur de se passer de l'élément original, ainsi le travail ne s'effectuera que par le biais de la surcouche que constitue le wrapper.
                    </p>

                    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/2633501-les-closures#/id/r-2633506" target="_blank">Les closures</a></h1>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/2633501-les-closures#/id/r-2633525" target="_blank">Les variables et leurs accès</a></h2>

                    <p>
                        Avant d'attaquer l'étude des closures, il est de bon ton d'étudier un peu plus en profondeur de quelle manière sont gérées les variables par le JavaScript.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/2633501-les-closures#/id/r-2633568" target="_blank">Quelles solutions ?</a></h2>

                    <p>
                        Tout d'abord, qu'est-ce qu'une closure ? En JavaScript, il s'agit d'une fonction ayant pour but de capter des données susceptibles de changer au cours du temps, de les enregistrer dans son espace fonctionnel et de les fournir en cas de besoin.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript/2633501-les-closures#/id/r-2633598" target="_blank">Une autre utilité, les variables statiques</a></h2>

                    



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