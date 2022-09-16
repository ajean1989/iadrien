<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Sass</title>
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

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6595695-structurez-votre-css#/id/video_Player_11" target="_blank">
        À quoi sert Sass</a></h1>

        <p>Voici la documentation Sass, <a href="https://sass-lang.com/documentation/">ici</a></p>

        <p>
        Dans ce cours, vous allez apprendre comment écrire du CSS qui est à la fois mieux organisé et surtout maintenable, en :
        <ul>
            <li>appliquant des structures de fichiers clairement définies ;</li>
            <li>travaillant avec un préprocesseur CSS appelé Sass, une technologie qui améliore votre codebase et vous simplifie la vie.</li>
        </ul>
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6595695-structurez-votre-css#/id/r-6595411" target="_blank">
        Le principe du DRY</a></h1>

        <p>
        Il existe un concept dans la programmation appelé le principe DRY, qui est une abréviation en anglais signifiant “Don’t repeat yourself”.
        </p>

        <p>
        Disons que vous remarquez que tous vos boutons ont la même couleur de fond, la même couleur et le même padding. Au lieu de placer tous ces attributs dans chacun de vos boutons, vous allez les réunir au même endroit et éviter de vous répéter. Vous obtiendrez quelque chose qui ressemble à :
        </p>

        <figure class="block_code">
                <pre><code>
.btn {
  background-color: #001534;
  color: #15DEA5;
  padding: 1.5rem;
}
                </code></pre>
            </figure>

            <p>
            Vous pouvez créer des règles additionnelles au  .btn  original, qui seront réparties dans de nouveaux sélecteurs plus spécifiques :
            </p>

            <figure class="block_code">
                <pre><code>
.btn {
  background-color: #001534;
  color: #15DEA5;
  padding: 1.5rem;
}

.btn-wide {
  width: 100%;
}

/* And... */
.btn-rounded {
  border-radius: 3rem;
}
                </code></pre>
            </figure>

            <p>
            votre markup ( Markup est parfois utilisé comme une forme abrégée pour dire HTML, qui signifie Hyper Text Markup Language ) ressemble à ça :   
            </p>

            <figure class="block_code">
                <pre><code>
&lt button class="btn btn-rounded btn-wide" &gt...&lt/button&gt
                </code></pre>
            </figure>

            <p>
            Plutôt que de recourir à <code class="line_code">Ctrl+F</code> et Chercher-remplacer pour modifier le padding de l'ensemble de vos boutons spécifiques, il vous suffit de changer la valeur d’un seul ensemble de règles, ici <code class="line_code">.btn</code>, et la modification se répercutera dans tous les <code class="line_code">.btn</code> de votre site.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6595695-structurez-votre-css#/id/r-7191892" target="_blank">
            La spécificité : Déterminer la priorité d’un sélecteur par rapport à un autre </a></h1>

            <p>
            En d’autres termes, la spécificité permet d’attribuer un score à un sélecteur afin de déterminer lequel a le plus de valeur par rapport à un autre au sein du HTML, et permet donc de déterminer la priorité d’un sélecteur par rapport à un autre. C’est comme un système de scores : celui qui a le plus de points gagne ! 
            </p>

            <p>
                Prenons un exemple avec 3 sélecteurs : une div, un id <code class="line_code">#submit-button</code> et une classe <code class="line_code">.button</code>.
            </p>

            <figure class="block_code">
                <pre><code>
&ltdiv id="submit-button" class="button"&gtClick Here!&lt/div&gt
                </code></pre>
            </figure>

            <p>
                La priorité sera accordée comme suit :
                <ul>
                    <ol>Le style inline, défini directement dans le HTML</ol>
                    <ol>Les id</ol>
                    <ol>Les classes, pseudoclasses (ex : :hover) et attributs</ol>
                    <ol>Les éléments et pseudoéléments</ol>
                </ul>
            </p>

            <div class="em">En règle générale, évitez d’utiliser des id dans vos sélecteurs. Votre but est d’écrire du code réutilisable, les id sont utilisés dans le cas de valeurs uniques. En conséquence, tous les sélecteurs qui les utilisent ne peuvent, par définition, être utilisés qu’une fois. Comme vous allez le voir dans le prochain chapitre, vous aurez souvent besoin d’outrepasser certains attributs à l’aide d’un autre sélecteur, plutôt que d’écrire une longue liste de sélecteurs spécifiques. Cela contribuera à rendre votre code plus modulaire et réutilisable.</div>

            <p>
            En cas d’égalité, le navigateur sélectionne le dernier sélecteur à avoir été déclaré.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6595809-creez-des-selecteurs-html-avec-la-methodologie-bem#/id/r-6641068" target="_blank">
            BEM : bloc, élément, modificateur</a></h1>

            <p>
            Le nommage vient du terme naming en anglais, qui est le fait d’identifier une caractéristique en lui attribuant un nom.
            </p>

            <p>
            En assignant chaque sélecteur que vous écrivez à l’une de ces trois catégories, vous êtes en mesure de définir sa fonctionnalité et ses relations, tout en le nommant correctement, et de définir un sélecteur comme un bloc, élément ou modificateur.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6595809-creez-des-selecteurs-html-avec-la-methodologie-bem#/id/r-6641058" target="_blank">
            Les blocs</a></h2>

            <p>
            Un bloc est un composant, ou une section d’une page qui est autonome et peut fonctionner indépendamment du reste de la page. Cela peut être un header, un footer, un conteneur, un menu ou même un bouton. Le but est simple : vous pourriez supprimer tout ce qu’il y a autour de votre bloc et vous pourriez toujours comprendre de quoi il s’agit. 
            </p>

            <p>
            On nomme un bloc en décrivant sa fonction. Nommons notre bloc pour notre aperçu de projet <code class="line_code">.proj-prev</code> (prev pour preview ou aperçu en français), en y assignant uniquement les règles qui sont spécifiques à la configuration de ce bloc en particulier.
            </p>

            <figure class="block_code">
                <pre><code>
.proj-prev {
  color: #fff;
  margin-bottom: .25rem;
}                </code></pre>
            </figure>

            <p>
            Nous avons donc un morceau de code réutilisable, ce qui nous permet d’avoir une codebase bien ordonnée, tout en assurant une certaine cohérence graphique et qui, bonus, suit le principe DRY (vous vous en souvenez ? 😉). 
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6595809-creez-des-selecteurs-html-avec-la-methodologie-bem#/id/r-6641061" target="_blank">
            Les éléments</a></h2>

            <p>
            Il ne peut pas fonctionner de façon autonome, mais en revanche il fait partie intégrante du bloc : il s’agit d’un élément de ce bloc.
            </p>

            <p>
            Le nom d’un élément doit indiquer deux choses :
            <ul>
                <li>son bloc parent, suivi d’un double underscore (aussi appelé “dunders”) ;</li>
                <li>la fonction de l’élément. Comme c’est le titre de notre projet, on va le nommer <code class="line_code">.proj-prev__heading</code> et lui assigner l’ensemble de règles qui suit.</li>
            </ul>
            </p>

            <figure class="block_code">
                <pre><code>
.proj-prev__heading {
  font-size: 4rem;
  padding-left: 2.5rem;
  margin: 0;
  line-height: 6rem;
}              </code></pre>
            </figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6595809-creez-des-selecteurs-html-avec-la-methodologie-bem#/id/r-6641067" target="_blank">
            Les modificateurs</a></h2>

            <p>
            Les modificateurs modifient l’apparence d’un bloc mais aussi d’un élément. Voyez-les comme des sélecteurs qui créent différentes versions d’un bloc ou d’un élément. Besoin de changer la taille, la couleur, la police, etc. d’un élément, tout en le gardant tel quel ? C’est un modificateur qu’il vous faut ! 
            </p>

            <p>
            Pour cela, vous allez créer un modificateur pour votre bloc .proj-prev. Pour nommer le modificateur, vous devez préciser le bloc (ou l’élément) qu’il modifie, y ajouter deux tirets suivi du style graphique de votre modificateur. Puisque vous êtes en train de modifier le bloc <code class="line_code">.proj-prev</code> pour lui donner un fond vert couleur menthe, vous pouvez l’appeler <code class="line_code">.proj-prev--mint</code> et lui attribuer une couleur.
            </p>

            <figure class="block_code">
                <pre><code>
.proj-prev--mint {
  color: #15DEA5;
}            </code></pre>
            </figure>

            <img src="../images/15706242907473_image9.png" atl="BEM"/>

            <p>
            Notez bien, c’est important : les sélecteurs BEM sont toujours implémentés sous forme de classes.
            </p>

            <p>
            Pour pouvoir appliquer les modificateurs avec des résultats cohérents, vous devez être sûr que vos sélecteurs ont une spécificité aussi basse que possible. Si vous assignez le sélecteur de bloc avec un id au lieu d’une classe, sa spécificité prendra automatiquement le dessus sur tous les modificateurs assignés en tant que classe.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6596497-utilisez-les-preprocesseurs-css-pour-des-fonctionnalites-avancees#/id/video_Player_1" target="_blank">
            Les préprocesseurs</a></h1>

            <p>
            En forçant un objet à exister au sein de blocs parents, votre codebase devient beaucoup plus facile à lire et à maintenir. Plutôt que de parcourir votre document de haut en bas en cherchant des éléments dans un bout de code, vous n’avez plus qu’à localiser le bloc que vous cherchez en particulier, et tous les éléments qui lui sont reliés se trouveront au même endroit.
            </p>

            <figure class="block_code">
                <pre><code>
.nav {
  padding-right: 6rem;
  flex: 2 1 auto;
  text-align: right;
      .nav__link {
        display: inline;
        font-size: 3rem;
        padding-left: 1.5rem;
            .nav__link--active {
              color: #001534;
            }
      }
}            </code></pre>
            </figure>

            <p>
            Voici votre nouveau meilleur ami : le <strong>préprocesseur CSS</strong> (Sass) ! 
            </p>

            <div class="em">Les préprocesseurs sont des outils, ou des programmes, qui vont vous permettre de générer du CSS à partir des fichiers écrits dans la syntaxe du préprocesseur que vous avez choisi. Les préprocesseurs CSS regorgent d’outils qui vous seront très utiles dans votre quête d’un code plus structuré et organisé.</div>

            <p>
            Coder en utilisant une syntaxe plus cohérente c’est bien, le souci c’est que les navigateurs voudront toujours que vos feuilles de style leur soient fournies sous forme d’un bon vieux fichier CSS classique. Les préprocesseurs vous permettent d’avoir les deux à la fois, en transformant la syntaxe vers du code CSS standard qui sera compris par les navigateurs.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6596497-utilisez-les-preprocesseurs-css-pour-des-fonctionnalites-avancees#/id/r-6596476" target="_blank">
            Découvrez les fonctionnalités des préprocesseurs</a></h2>

            <p>
                <ul>
                    <li>Les variables : permettent de stocker des valeurs répétées fréquemment, comme par exemple les couleurs et les mensurations, dans un élément unique que vous pouvez réutiliser à travers l’ensemble de votre code.</li>
                    <li>Les boucles : automatisent les tâches répétitives telles que la création d’une série de modificateurs de couleurs, par exemple, vous épargnent un vrai calvaire tout en gardant une codebase plus petite et plus simple à gérer.</li>
                    <li>Les opérations logiques : permettent d’écrire un même bloc de code que vous pouvez utiliser dans différentes circonstances et qui le font réagir en conséquence, comme changer la couleur du texte en fonction de la couleur du fond.</li>
                </ul>
            </p>

            <p>
            Il existe de nombreux préprocesseurs CSS, mais les trois plus reconnus sont Sass, Less et Stylus. Et entre nous, il n’y a pas grand chose qui les différencie. 🤫 Il existe, il est vrai, quelques différences de syntaxe et de fonctionnalité, mais globalement, ils font tous la même chose et de manière très similaire.
            </p>

            <p>
            Dans ce cours, nous allons utiliser Sass, mais ce qui compte, c’est d’apprendre et d'intégrer les concepts et process liés à l’utilisation d’un préprocesseur CSS, qui peuvent également s’appliquer à Less et Stylus.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6596483-decouvrez-sass-et-sa-syntaxe#/id/r-7191727" target="_blank">
            Démarrer avec Sass</a></h1>

            <p>
            La compilation est un processus qui nous permet de transformer Sass en CSS traditionnel. Votre navigateur est incapable de comprendre Sass dans l’état. En d’autres termes, il nous faut traduire la syntaxe Sass en CSS pour que votre navigateur puisse l’utiliser, et c’est possible en le compilant.
            </p>

            <p>
            Mais point de panique, jeune padawan, pour le moment nous allons nous concentrer seulement sur la syntaxe de Sass !
            </p>

            <p>
            Il existe deux manières d’écrire du Sass ; on les différencie par leur extension de fichier : <code class="line_code">.sass</code> et <code class="line_code">.scss</code>. Suivant l'extention, on écrit pas le Sass de la même manière. Le <code class="line_code">.scss</code> ressemble beaucoup à du CSS normal, tandis que le <code class="line_code">.sass</code> a une syntaxe plus condensée et concise. En <code class="line_code">.sass</code>, dites adieu aux accolades et aux points-virgules ! À la place, elle utilise uniquement des tabulations et des retours à la ligne pour la mise en forme du code. La syntaxe  .sass produit donc une codebase plus propre, mais surtout plus lisible. Sans compter qu’éviter toute cette ponctuation vous permet aussi d’écrire plus vite.
            </p>

            <p>
            Entre nous, il est assez rare que vous tombiez sur du <code class="line_code">.sass</code>. Quand quelqu’un parle de Sass, il parle quasi systématiquement de <code class="line_code">.scss</code>. Du coup, vos chances d’écrire du <code class="line_code">.scs</code>  dans votre vie professionnelles sont nettement plus élevées. Il est donc logique que nous utilisions <code class="line_code">.scss</code> dans ce cours.
            </p>

            <p>
            Vous avez déjà du code CSS traditionnel que vous voulez réutiliser ? Aucun problème ! Sass fonctionne très bien avec du CSS. Copiez votre CSS et collez-le dans un fichier <code class="line_code">.scss</code>, et le tour est joué. Votre code sera interprété et votre CSS sera exécuté mais ne sera pas transformé en Sass. Pour utiliser Sass, il est important d’apprendre à maîtriser sa syntaxe, car elle vous permet de bénéficier de fonctionnalités qui vont vous permettre d’écrire du code propre, plus organisé et surtout plus efficace.
            </p>

            <p>
            La syntaxe <code class="line_code">.scss</code> s’appuie sur la syntaxe CSS standard ! Celle-ci étant très proche du CSS, elle permet aux développeurs de ne pas être perdus lorsqu’ils écrivent du CSS, tout en bénéficiant de toutes les fonctionnalités Sass, et c’est tout l’intérêt !
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6596483-decouvrez-sass-et-sa-syntaxe#/id/r-6595937" target="_blank">
            Le nesting</a></h1>

            <p>
            De la même façon que vous imbriquez des <code class="line_code">&ltli&gt</code> dans un <code class="line_code">&ltul&gt</code> en HTML, dans Sass vous pouvez imbriquer les sélecteurs ou autrement dit, les nester.
            </p>

            <figure class="block_code">
                <pre><code>
ul {
  list-style: none;
  text-align: right;
  li {
      display: inline;
      font-size: 3rem;
      color: #D6FFF5;
  }
}           </code></pre>
            </figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6596489-utilisez-les-combinateurs#/id/r-7191732" target="_blank">
            Les combinateurs</a></h2>

            <p>
            En ajoutant le bon symbole de combinateur devant un sélecteur, vous pouvez créer tous les combinateurs CSS dans Sass :
            </p>

            <figure class="block_code">
                <pre><code>
.parent {
  background-color: #15DEA5;
  .descendant {
      color: #fff;
  }
  >.child {
      color: #D6FFF5;
  }
  +.adjacent {
      color: #001534;
  }
}           </code></pre>
            </figure>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6596489-utilisez-les-combinateurs#/id/r-6596487" target="_blank">
            L’esperluette (&)</a></h3>

            <p>
            Vous avez besoin d’ajouter une pseudoclasse <code class="line_code">li:hover</code> à vos <code class="line_code">&ltli&gt</code> pour ajouter un peu d’interaction visuelle et améliorer l’expérience utilisateur. 
            </p>
            
            <p>
            Sass a un signe spécifique pour concaténer les sélecteurs parent et enfant : l’esperluette (&) ! 
            </p>

            <figure class="block_code">
                <pre><code>
ul {
  list-style: none;
  text-align: right;
      li {

         display: inline;
        font-size: 3rem;
        color: #D6FFF5;
        &:hover {
            color: #001534;
        }
      }
}          </code></pre>
            </figure>

            <p>
            Et voici le CSS qui en découle :
            </p>

            <figure class="block_code">
                <pre><code>
ul {
  list-style: none;
  text-align: right;
}
ul li {
  display: inline;
  font-size: 3rem;
  color: #D6FFF5;
}

ul li:hover {
  color: #001534;
}        </code></pre>
            </figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6596489-utilisez-les-combinateurs#/id/r-6597385" target="_blank">
            N’abusez pas du nesting</a></h2>

            <p>
            On serait tenté de répliquer intégralement notre HTML dans Sass, en reproduisant une copie conforme de sa structure.
            </p>

            <p>
            Mais souvenez-vous, quand vous imbriquez des sélecteurs, vous augmentez la spécificité des sélecteurs compilés. De ce fait, si vous les imbriquez trop, vous allez vous retrouver avec des sélecteurs de très haute spécificité, ce qui les rendra extrêmement difficiles à modifier ou outrepasser si besoin.
            </p>

            <p>
            Plutôt que d’essayer de répliquer exactement la structure du HTML, il est préférable d’écrire des sélecteurs imbriqués qui soient uniquement relatifs au sélecteur racine. Cela ne reproduira pas la structure HTML aussi clairement, mais permettra de maintenir une spécificité basse dans votre codebase, ainsi qu’une certaine flexibilité et une certaine modularité.
            </p>

            <p>
            En pratique, si vous vous retrouvez à imbriquer au-delà de deux niveaux de profondeur, arrêtez-vous et réfléchissez à la façon dont vous êtes en train de structurer votre bloc. Il y a des chances que vous soyez en train de créer des sélecteurs trop spécifiques et devriez refactoriser votre code en conséquence.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6596494-utilisez-des-selecteurs-bem-avec-sass#/id/video_Player_1" target="_blank">
            Utilisez des sélecteurs BEM avec Sass</a></h1>

            <p>
            Si vous combinez des sélecteurs BEM et le nesting de Sass pour créer un <code class="line_code">block</code> et un <code class="line_code">block__element</code>, vous obtiendrez quelque chose comme ceci :
            </p>

            <img src="..images/75753.png" alt="BEM et nesting"/>

            <p>
            On se retrouve avec un sélecteur <code class="line_code">block</code> ayant une spécificité de 0/0/1/0 et un sélecteur <code class="line_code">block__element</code> avec une spécificité de 0/0/2/0. Ce n’est pas idéal, mais tout fonctionnera comme vous le voulez, sans règles contradictoires.
            </p>

            <img src="..images/78936453.png" alt="BEM et nesting"/>    

            <p>
            Ce qu’il vous faut, c’est un moyen de nester dans Sass sans aller à l’encontre des principes BEM. Vous vous rappelez du nesting avec des esperluettes ? Quand vous imbriquez avec une esperluette, cela relie le parent et l’enfant dans le CSS compilé. Mais l’enfant n’a pas besoin d’être un sélecteur, il peut aussi s’agir de simple texte !
            </p>

            <figure class="block_code">
                <pre><code>
.block{
  background-color: #15DEA5;
  &__element {
      color: #fff;
        &--modifier {
            background-color: #001534;
  }
  }
}        </code></pre>
            </figure>

            <p>
            Nous obtenons un CSS compilé parfaitement conforme avec ce que nous voulions :
            </p>

            <figure class="block_code">
                <pre><code>
.block {
  background-color: #15DEA5;
}

.block__element {
  color: #fff;
}

.block__element--modifier {
  background-color: #001534;
}        </code></pre>
            </figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6596494-utilisez-des-selecteurs-bem-avec-sass#/id/r-6596492" target="_blank">
            Utilisez les spécificités là où vous en avez besoin</a></h2>

            <p>
            Juste parce que nous avons évité jusqu’à présent d’augmenter la spécificité ne veut pas nécessairement dire que nous ne le ferons jamais. La spécificité n’est pas mauvaise en soi, mais il y a un temps et un lieu pour s’en servir. En maintenant la spécificité au minimum, il devient beaucoup plus simple de créer un modificateur capable d’outrepasser les propriétés souhaitées.
            </p>

            <p>
            Disons que nous avons créé un bouton avec un fond uni et un bouton modifié avec un fond transparent et un contour. Pour représenter un bouton désactivé, il faut le griser, ce qui implique de créer un autre modificateur. Dans le cas d’un bouton standard, cela veut dire mettre un fond gris, et dans le cas du bouton avec contour, rendre ce contour gris. 
            </p>

            <p>
            Nous allons donc écrire deux nouveaux modificateurs, un pour chaque instance du bouton, mais nous utiliserons le même nom pour les deux. Pour les différencier, nous allons compter sur le nesting dans Sass, afin de créer des sélecteurs spécifiques pour chaque type de bouton.
            </p>

            <figure class="block_code">
                <pre><code>
.btn {
  display: inline-block;
  margin: 0 auto;
  background: #15DEA5;
  padding: 1rem;
  &--disabled {
      background: grey;
  }

   &--outline {
      background: transparent;
      border: 2px solid #15DEA5;
      &.btn--disabled{

         border: 2px solid grey;
      }
  }
}       </code></pre>
            </figure>

            <figure class="block_code">
                <pre><code>
.btn {
  display: inline-block;
  margin: 0 auto;
  background: #15DEA5;
  padding: 1rem;
}

.btn--disabled {
  background: grey;
}

.btn--outline {
  background: transparent;
  border: 2px solid #15DEA5;
}

.btn--outline.btn--disabled {
  border: 2px solid grey;
}       </code></pre>
            </figure>  


            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6597580-ameliorez-la-maintenabilite-du-code-avec-les-variables-sass#/id/r-6597579" target="_blank">
            Utilisez des variables pour gérer les couleurs</a></h1>

            <p>
            Pour déclarer une variable dans Sass, il vous suffit de taper un symbole dollar ($) suivi de son nom, puis deux points et enfin la valeur que vous souhaitez lui donner :
            </p>

            <figure class="block_code">
                <pre><code>
$mint: #15DEA5;
                 </code></pre>
            </figure> 
            
            <p>
                Et se réutilise comme suit :
            </p>

            <figure class="block_code">
                <pre><code>
$mint: #15DEA5;
.form {
width: 100%;
padding-bottom: 1.5rem; 
}
.form__heading {
  width: 100%;
  color: #fff;
  text-shadow: 0.55rem 0.55rem #11af82;
  background: $mint;
  line-height: 5rem;
  padding: 1.5rem; 
}
                 </code></pre>
            </figure> 

            <div class="em">Notez que le CSS standard a lui aussi des variables qu’on appelle "custom properties" et qui fonctionnent de la même manière que les variables Sass. La plupart du temps, il n’y a pas de véritable avantage à utiliser des custom properties plutôt que des variables Sass, surtout que leur syntaxe est bien plus compliquée. On optera donc sans hésiter pour les variables Sass.</div>

            <p>
            Au lieu de $mint/$pink, il est préférable d’opter pour quelque chose comme $color-primary (couleur principale en anglais). Le nom de la variable vous indique que son rôle est de stocker la couleur principale de votre site, qu’il s’agisse de vert menthe, de rose ou de jaune fluo. Là où ça devient intéressant, c’est que lorsque vous vous replongerez dans votre code d’ici quelques mois ou quelques années, le nom $color-primary  vous dira toujours quelque chose. Une variable appelée $mint qui contient du rose vous donnera certainement une sacrée migraine...
            </p>

            <p>
            Et les variables, ce n’est pas que pour les couleurs ! Il y a huit types de données en tout dans Sass :
            <ul>
                <li>les couleurs</li>
                <li>les chaînes de caractères (strings)</li>
                <li>les nombres</li>
                <li>les listes et maps : des collections de n’importe quels éléments ci-dessus. On en parlera plus tard ;</li>
                <li>et trois autres que vous pouvez laisser de côté pour le moment : les booléens (boolean), les nulls et les fonctions.</li>
            </ul>
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6598201-utilisez-les-mixins-sass-avec-des-arguments#/id/r-6629659" target="_blank">
            Les mixins</a></h1>

            <p>
            Si dans notre CSS, nous utilisons beaucoup de texte ombré. Et avec tous les différents arguments auxquels on doit l’appliquer, on obtient un bon paquet de  répétitions.
            </p>

            <p>
            La solution la plus simple serait de tout caser dans une variable, non ?
            </p>

            <figure class="block_code">
                <pre><code>
$heading-shadow: text-shadow: 0.55rem 0.55rem #15DEA5;
                 </code></pre>
            </figure>

            <p>
            Malheureusement non, les variables ne peuvent stocker que des valeurs. 😓 Mais pas d’inquiétude ! Sass a donné aux variables une grande sœur, et elle est parfaitement adaptée à la situation : la @mixin Sass !
            </p>

            <p>
            Plutôt que d’être limités à des valeurs, les mixins stockent des blocs entiers de code. 
            </p>

            <p>
            Là encore, il vaut mieux éviter d’être trop spécifique quand on donne un nom à une mixin, faites plutôt référence à son rôle. Puisque tous les éléments sur lesquels on met une ombre sont des headers, nommez-le heading-shadow (ombre du heading).
            </p>

            <p>
            À partir de là, c’est la même chose que d’écrire un bloc CSS normal. Utilisez des accolades pour entourer ce que vous voulez mettre dans votre ensemble de règles. Dans le cas de la mixin heading-shadow, il s’agit de la propriété text-shadows et de ses paramètres :
            </p>

            <figure class="block_code">
                <pre><code>
@mixin heading-shadow{
  text-shadow: .55rem .55rem #15DEA5;
}
                 </code></pre>
            </figure>

            <p>
            Dans le cas présent, nous voulons ajouter une ombre dans notre sélecteur <code class="line_code">.form__heading</code>, ce que nous faisons en tapant @include suivi d’un espace et du nom de notre mixin :
            </p>

            <figure class="block_code">
                <pre><code>
.form {
  &__heading {
      @include heading-shadow;
  }
}
                 </code></pre>
            </figure>

            <p>
            Et lorsque Sass compile cela en CSS, il place l’ensemble de règles issues de la mixin directement dans le bloc dans lequel nous l’avons inclus :
            </p>

            <figure class="block_code">
                <pre><code>
.form__heading {
  text-shadow: .55rem .55rem #15DEA5;
}

                 </code></pre>
            </figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6598201-utilisez-les-mixins-sass-avec-des-arguments#/id/r-6838004" target="_blank">
            Customisez sa mixin</a></h2>

            <figure class="block_code">
                <pre><code>
@mixin heading-shadow($colour){
  text-shadow: .55rem .55rem $colour;
}

                 </code></pre>
            </figure>

            <p>
                Ou avec une valeur par défaut :
            </p>

            <figure class="block_code">
                <pre><code>
@mixin heading-shadow($colour: $colour-primary){
  text-shadow: .55rem .55rem $colour;
}

                 </code></pre>
            </figure>

            <p>
            Du coup, si vous oubliez d’ajouter l’argument ou d’assigner une couleur à la variable quand vous l’incluez, Sass en déduira que vous voulez que l’ombre soit celle de la couleur par défaut, dans notre cas $colour-primary.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6598201-utilisez-les-mixins-sass-avec-des-arguments#/id/r-6838004" target="_blank">
            Les extensions</a></h1>

            <p>
            Les extensions sont très similaires aux mixins. Vous écrivez un bloc de code et vous comptez sur Sass pour le réutiliser, ce qui nous épargne la tâche de devoir le retaper indéfiniment. Mais contrairement aux mixins, pas besoin de les déclarer avec un identifiant spécifique – il suffit de les écrire comme un simple sélecteur :
            </p>

            <figure class="block_code">
                <pre><code>
.typography {
color: #15dea5;
font-size: 2rem;
font-weight: 100;
line-height: 1.7;
}
                 </code></pre>
            </figure>

            <p>
            Ensuite, pour étendre un sélecteur à <code class="line_code">.typography</code>, tapez <code class="line_code">@extend</code> suivi du nom du sélecteur, <code class="line_code">.typography</code> :
            </p>

            <figure class="block_code">
                <pre><code>
.typography {
  color: $colour-primary;
  font-size: 2rem;
  font-weight: 100;
  line-height: 1.7;
}
h1 {
@extend .typography;
}
                 </code></pre>
            </figure>

            <p>
            Regardons le CSS compilé pour y voir un peu plus clair :
            </p>

            <figure class="block_code">
                <pre><code>
.typography, h1 {
color: #15dea5;
font-size: 2rem;
font-weight: 100;
line-height: 1.7;
}
                 </code></pre>
            </figure>

            <p>
            Avec les mixins, Sass inclut le contenu du mixin partout où il est appelé, ce qui a pour conséquence un tas de répétitions. Mais si vous utilisez @extend sur h1, vous dites à Sass que plutôt que de dupliquer les propriétés au sein de h1, vous voulez que h1 utilise l’ensemble de règles issu d’un autre sélecteur – dans le cas présent,  .typography. Du coup, Sass “étend” h1 aux règles de <code class="line_code">.typography</code> dans toute la feuille de style et l’ajoute à la liste.
            </p>

            <p>
            Quand vous regardez la liste des sélecteurs qui suivent  .typography, vous voyez beaucoup d’éléments que nous utilisons déjà un peu partout dans notre code mais pas  .typography. C’est parce que son but n’est pas de modifier un élément, mais plutôt de servir de placeholder (ou de terrain de base, si on veut) pour d’autres sélecteurs auxquels il doit être étendu.
            </p>

            <p>
            Comment faire pour utiliser  .typography  et pour l’étendre aux autres classes sans le déclarer comme un sélecteur ? Sass à la rescousse ! 🏋️‍♀️ Sass a un placeholder intégré prêt à l’emploi, que vous pouvez utiliser pour contenir votre ensemble de règles et garder un code propre et ordonné plutôt que d’utiliser un sélecteur standard ; il se matérialise avec le préfixe % :
            </p>

            <figure class="block_code">
                <pre><code>
%typography {
  color: $colour-primary;
  font-size: 2rem;
  font-weight: 100;
  line-height: 1.7;
}
h1 {
@extend %typography;
}
textarea {
  @extend %typography;
}
button {
  @extend %typography;
}
input {
  @extend %typography;
}
                 </code></pre>
            </figure>

            <p>
            Lorsque vous utilisez le préfixe pourcentage (%) devant votre sélecteur plutôt que le point qu’on utilise d’habitude pour les classes, Sass crée un placeholder.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6598436-choisissez-quand-utiliser-des-mixins-ou-des-extensions#/id/r-6598469" target="_blank">
            Mixins vs extensions</a></h1>

            <p>
            n’utilisez pas d’extensions.
            </p>
            <p>Je sais, je sais. Les mixins génèrent des tas de code qui se répètent ! Oui, c’est vrai. Mais ils n’affectent pas l’organisation de votre CSS. Les extensions démolissent l’ordre et la prédictibilité de votre codebase et ce, juste pour vous épargner du code répétitif. Le jeu n’en vaut pas la chandelle.
            Tenez-vous-en donc aux mixins. Le code que vous obtiendrez sera plus propre et plus simple à maintenir, même s’il est un peu plus volumineux.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6598606-optimisez-les-mixins-grace-aux-conditions-dans-sass#/id/r-6598748" target="_blank">
            Les conditions</a></h1>

            <p>
            Si la couleur a moins de 25 % de luminosité, l’éclaircir ; sinon, l’assombrir :
            </p>

            <figure class="block_code">
                <pre><code>
@if ( lightness($colour) < 25% ) {
  $colour: lighten($colour, 10%);
}@else{
  $colour: darken($colour, 10%);
}
                 </code></pre>
            </figure>

            <p>
                Voir le lien pour le détail sur la couleur (et le chapitre précédent d'OC)
            </p>

            <div class="em">Un moyen rapide d’afficher les valeurs hex d’une couleur sous d’autres formats tels que HSL est de taper les valeurs hex dans Google et de cliquer sur le menu déroulant “Afficher les valeurs de couleur”.</div>

            <p>
                On peut utiliser les mots 'and' et 'or' pour demander plusieurs conditions. Ainsi que tous les opérateurs logiques habituels (avec == pour égal)
            </p>


<figure class="block_code">
                <pre><code>
@for $i from 1 through 1000{
    #type_#{$i} {
        height : 20px;
        width : 20px;
        background: $primary-color;
    }
}
                 </code></pre>
            </figure>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6599091-creez-et-utilisez-des-fonctions#/id/r-6599112" target="_blank">
            Les fonctions</a></h1>

            <p>
            Une fonction est un bout de code qui effectue une tâche lorsqu’elle est exécutée, comme par exemple assombrir une couleur, indiquer sa clarté ou convertir ses valeurs RBG en hexadécimal : rgb(21, 222,165). Eh oui, à chaque fois que vous écrivez vos couleurs sous forme de rgb() dans .scss, vous faites appel à une fonction. Vous les utilisez depuis le début sans le savoir !   
            </p>

            <figure class="block_code">
                <pre><code>
@function lightness-shift($colour){
  @if ( lightness($colour) < 25% ) {
      @return lighten($colour, 10%);
  }@else{
      @return darken($colour, 10%);
  }
}
                 </code></pre>
            </figure>

            <p>
                Voici quelques fonctions :
                <ul>
                    <li>Les fonctions darken() et lighten() permettent respectivement de rendre une couleur plus foncée ou plus claire d’un certain montant exprimé en pourcentage</li>
                    <li>La fonction adjust-color() permet d’ajuster une couleur de base en modifiant certains de ses composants. Cette fonction va pouvoir être utile pour créer des variations d’une couleur principale </li>
                    <li>La fonction round() permet d’arrondir un nombre décimal à l’entier le plus proche. Cette fonction peut être très utile pour arrondir un nombre après un calcul dans le cas de calculs de marges par exemple</li>
                    <li>...</li>
                </ul>
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6599201-utilisez-le-systeme-7-1-pour-une-codebase-plus-simple-a-gerer#/id/r-7191797" target="_blank">
            Le modèle 7-1 pour organiser et structurer votre code</a></h1>

            <p>
            Fort heureusement, Sass vous permet de séparer votre code en fichiers séparés pour le catégoriser et l’organiser. Vous pouvez mettre toutes vos variables dans un fichier et tous vos mixins dans un autre. Pareil pour les feuilles de style et les composants.
            </p>

            <p>
            Le “7”, ce sont les sept directories thématiques (des dossiers, en langage de développeur) pour ranger vos fichiers, qui sont regroupés dans le “1” : un fichier .scss unique se compilant sous forme de feuilles de style CSS pour votre site.
            <ol>
                <li><strong>Base</strong> : contient les fichiers qui définissent les fondations de votre site, par exemple la police de caractères et les normes que vous voulez appliquer sur tout votre site, telles que le box-sizing ;</li>
                <li><strong>Utils</strong> : vous rangez vos variables, fonctions, mixins et les  %placeholders pour les extensions (si vous en utilisez) ;</li>
                <li><strong>Layout (mise en page)</strong> : est le dossier où vous mettez vos blocs BEM qui contiennent ce qui est réutilisable, par exemple un header pour les mises en page de grande taille ou un footer ;</li>
                <li><strong>Composants</strong> : est utilisé pour ranger les blocs BEM qui sont plus indépendants, comme les boutons.</li>
                <li><strong>Pages</strong> : contient des règles spécifiques à une seule page qui ne seront pas réutilisées ailleurs ;</li>
                <li><strong>Themes</strong> : c’est ici que vous stockez le code thématique, par exemple un style customisé pour Noël ou pour l’été. On ne l’utilisera pas dans notre site ;</li>
                <li><strong>Vendors (tiers)</strong> : est un directory pour des feuilles de style externes comme Bootstrap ou jQuery UI. En gros, il s’utilise pour tout CSS venant de l’extérieur. Utiliser des frameworks comme Bootstrap permet d’accélérer le développement d’un site, car ils contiennent des feuilles de style prédéfinies pour des choses comme les formulaires ou des boutons.</li>
            </ol>
            Un moyen rapide de créer des directories est d’utiliser le terminal dans VS Code et la commande mkdir suivie du nom du directory que vous souhaitez créer. Vous pouvez créer plusieurs directories simultanément en les listant l’un après l’autre.
            </p>

            <p>
            Lorsque vous séparez votre code, les fichiers individuels font tous partie d’une codebase globale, du coup Sass les appelle des partiels. Pour indiquer à Sass qu’un fichier est un partiel, vous devez lui ajouter le préfixe underscore (_).
            </p>

            <p>
                Par exemple le fichier qui contiendra les variables dans le dossier Utils s'appellera "_variables.scss".
            </p>

            <p>
            Avant de pouvoir utiliser du code qui a été découpé en partiels, vous devez préciser dans votre codebase où importer ces nouvelles variables. Comment ? En utilisant le mot clé @import.
            </p>

            <figure class="block_code">
                <pre><code>
 @import "./utils/variables";
                 </code></pre>
            </figure>

            <p>
            Le point (.) indique à Sass que pour arriver jusque variables, le chemin commence dans le même dossier que main.scss. Ensuite, /utils/ mène Sass au directory utils dans lequel il trouvera le partiel variables.<br/>
            Notez qu’on n’utilise pas d’underscore ni d’extension de fichier lorsqu’on indique dans le chemin le nom du fichier du partiel. Lors de l’importation d’un partiel, Sass sait qu’il lui faut chercher un fichier commençant par un underscore et qu’il s’agit d’un fichier Sass, pas besoin de le préciser.
            </p>

            <p>
            Attaquons-nous au bloc du formulaire ! Dans layouts/, créez un nouveau partiel nommé _form.scss, puis coupez-collez le bloc formulaire depuis main.scss.
            </p>

            <p>
            Maintenant que le bloc formulaire est dans son propre partiel, nous devons l’importer dans notre fichier principal pour pouvoir l’utiliser, comme avec variables :
            </p>

            <figure class="block_code">
                <pre><code>
@import "./utils/variables";
@import "./layouts/form";
                 </code></pre>
            </figure>

            <p>
            Notez que nous avons placé l’import du formulaire après les variables. L’ordre dans lequel vous importez vos partiels dans le fichier principal est l’ordre dans lequel Sass compilera tout ce qu’ils contiennent. Si on importait le partiel du formulaire avant les variables, on aurait une erreur de compilation, car les variables utilisées dans le formulaire n’auraient pas encore été définies !
            </p>

            <p>
            D’une manière générale, pour éviter les erreurs, faites en sorte d’importer vos fichiers dans l’ordre suivant :
            <ol>
                <li>Utils :
                    <ol>
                        <li>Variables</li>
                        <li>Fonctions</li>
                        <li>Mixins</li>
                        <li>Placeholders</li>
                    </ol>
                </li>
                <li>Feuilles de style de tiers (vendors) (si vous en avez).</li>
                <li>Base</li>
                <li>Composants</li>
                <li>Layout</li>
                <li>Pages</li>
                <li>Thèmes</li>
            </ol>
            </p>

            <p>
            Vous n’aurez sans doute pas besoin de tous ces dossiers pour chaque site sur lesquels vous travaillerez. Le site que nous construisons dans ce cours n’utilise pas de feuilles de styles externes, ni de thèmes, par exemple. Mais il est important que vous les connaissiez 👌.
            </p>

            <p>
            Une fois que l’ensemble du code a bien été séparé en partiels et importé, le fichier main.scss ne doit contenir que des imports. Les ensembles de règles sont eux aussi rangés dans leurs propres partiels :
            </p>

            <figure class="block_code">
                <pre><code>
@import "./utils/variables";
@import "./utils/functions";
@import "./utils/mixins";
@import "./utils/extensions";
@import "./base/base";
@import "./base/typography";
@import "./components/buttons";
@import "./layouts/header";
@import "./layouts/nav";
@import "./layouts/container";
@import "./layouts/form";
@import "./pages/work";
@import "./pages/about";
@import "./pages/project";
                 </code></pre>
            </figure>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6599386-installez-sass-sur-votre-machine#/id/r-7191807" target="_blank">
            Installer Sass</a></h1>

            <p>
                Pour commencer il faut installer npm et lancer <code class="line_code">npm install sass</code> ou <code class="line_code">npm install -g sass</code> puis faire un init avec <code class="line_code">npm init</code> et configurer le fichier package.json, dans la dépendance sass on va remplir le l'objet scripts comme suit :
            </p>

            <figure class="block_code">
                <pre><code>
{
"name": "writting-sass",
"version": "1.0.0",
"description": "",
"main": "index.js",
"scripts": {
  "sass": "sass --watch ./sass/main.scss:.public/css/style.css"
},
"author": "",
"license": "ISC",
}
                 </code></pre>
            </figure>

            <p>
                <ul>
                    <li>sass indique à npm où trouver le script à exécuter ;</li>
                    <li><code class="line_code">--watch</code> (observer, en anglais) est un flag (ou une option) que npm utilise pour trouver d’éventuels changements dans le fichier Sass. En d’autres termes, il observe si un changement opère et s’il en voit, il recompilera et mettra à jour le fichier CSS. Sans le flag watch, il vous faudrait faire tourner le script à chaque fois que vous sauvegardez votre fichier. Mais grâce à lui, la mise à jour se fera automatiquement tant que le script tourne dans votre terminal ;</li>
                    <li><code class="line_code">./sass/main.scss</code> indique au script situé dans node-sass où trouver le fichier Sass à compiler ;</li>
                    <li> les deux points séparent le chemin source du chemin de destination ;</li>
                    <li><code class="line_code">./css/style.css</code> indique au script l’endroit où compiler le CSS et comment le nommer.</li>
                </ul>
            </p>

            <p>
            Vous avez écrit un script, maintenant il est l’heure d’enregistrer le fichier  package.json et de lancer Sass avec <code class="line_code">npm run sass</code>. Tant que vous n’interrompez pas le processus, soit en tapant Ctrl+C dans le terminal, soit en cliquant sur la corbeille, le script attendra et sera à l'affût de tout changement à compiler. On va vérifier ça en changeant la couleur dans l’une de nos variables, puis en sauvegardant.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6599386-installez-sass-sur-votre-machine#/id/r-6599946" target="_blank">
            Les modes de compilation</a></h2>

            <p>
            Sass a quatre modes de compilation qui interprètent chacun le CSS d’une façon différente. Le premier, le mode par défaut, est ce que vous venez de voir, le mode nested.
            </p>

            <p>
            Le deuxième mode de compilation est appelé expanded, et il ressemble en tout point à du CSS qu’on aurait rédigé manuellement.
            </p>

            <p>
            Le troisième mode est compact. Il traduit le CSS avec un ensemble de règles par ligne : Le mode compact donne un fichier plus court et légèrement plus léger qui nécessite moins de scrolling, mais il n’est pas forcément facile à lire.
            </p>

            <p>
            Le quatrième et dernier mode est compressé. Quand Sass compile la feuille CSS en mode compressé, il retire tous les espaces et retours à la ligne inutiles : Le résultat est compliqué à lire, mais ça donne un fichier beaucoup plus léger. On appelle aussi cela un fichier CSS minifié, et c’est généralement ce qu’on utilise quand on déploie le site en live. La taille réduite du fichier diminue la quantité de données devant être téléchargées, ce qui réduit les temps de chargement, les besoins en matière d’espace de stockage et la consommation de données.
            </p>

            <p>
                Pour passer en mode compresser, on va modifier le script et  ajouter un nouveau flag : --style, suivi du style dans lequel vous voulez compiler, compressed :
            </p>

            <figure class="block_code">
                <pre><code>
{
"name": "writting-sass",
"version": "1.0.0",
"description": "",
"main": "index.js",
"scripts": {
  "sass": "sass --watch ./sass/main.scss:./css/style.css --style compressed"
},
"author": "",
"license": "ISC",
}
                 </code></pre>
            </figure>

            <p>
            Pour compiler en utilisant notre script fraîchement modifié, il faut d’abord interrompre l’ancien script, en appuyant sur Ctrl+C. Ensuite, relancez-le en tapant à nouveau <code class="line_code">npm run sass</code>.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6599386-installez-sass-sur-votre-machine#/id/r-6599946" target="_blank">
            Les listes et les maps</a></h1>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6599386-installez-sass-sur-votre-machine#/id/r-6599946" target="_blank">
            Les listes</a></h2>

            <figure class="block_code">
                <pre><code>
$padding-dimensions: 1rem 2rem 3rem 4rem;
.block {
  padding: $padding-dimensions;
}
                 </code></pre>
            </figure>

            <p>
            <code class="line_code">$padding-dimensions</code> est ce que Sass appelle une liste, ici une liste de valeurs. Cela vous permet de regrouper des valeurs dans une seule variable. Dans le cas présent, nous avons fait une liste des dimensions à utiliser comme valeurs pour une propriété de padding.
            </p>

            <p>
            La syntaxe pour les écrire est extrêmement flexible. Vous pouvez les séparer par des espaces, comme nous l’avons fait pour  $padding-dimesions, ou utiliser des virgules :
            </p>

            <figure class="block_code">
                <pre><code>
$syntax-01: 1rem 2rem 3rem 4rem;
$syntax-02: 1rem, 2rem, 3rem, 4rem;
$syntax-03: (1rem 2rem 3rem 4rem);
$syntax-04: (1rem, 2rem, 3rem, 4rem);
                 </code></pre>
            </figure>

            <p>
            Ce n’est pas parce que vous avez décidé de stocker un groupe de valeurs dans une liste que vous voulez forcément toutes les utiliser dans la même instance. Vous pouvez aussi utiliser individuellement les valeurs d’une liste.
            </p>

            <p>
            our accéder aux valeurs individuelles d’une liste, utilisez la fonction  nth()  suivie du nom de la liste et l’index de l’élément souhaité au sein de la liste :
            </p>

            <figure class="block_code">
                <pre><code>
$font-size: 7rem 5rem 4rem 2rem;
.form{
  &__field {
      & label {
        font-size: nth($font-size, 4);
      }
  }
}
                 </code></pre>
            </figure>

            <div class="em">Si vous êtes habitué à d’autres langages de programmation, vous êtes peut-être un peu perdu avec cet index à 4 et non à 3, c’est normal : la plupart des autres langages de programmation qui ont des listes commencent avec un index à zéro ; Sass, lui, commence à 1. C’est étrange, mais au moins vous êtes prévenus !</div>

            <p>
            Les listes permettent de regrouper des ensembles de valeurs. Mais si vous revenez sur votre code, disons dans quelques mois, elles peuvent être un peu difficiles à lire. . Dans quelques mois, même dans quelques minutes, vous aurez probablement oublié les indices des différentes valeurs de $font-size. Et c’est normal, mais il existe une solution. Les maps !
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6599971-integrez-les-types-de-donnees-sass#/id/r-6600159" target="_blank">
            Les maps</a></h2>

            <p>
            Les listes sont souvent difficiles à lire et à mémoriser parce qu’il n’y a pas vraiment de contexte pour lister leur contenu, c’est juste un ensemble de valeurs regroupées. C’est pour ça qu’existent les maps de Sass ! Elles sont très semblables aux listes, sauf qu’elles assignent à chaque valeur un nom sous forme d’une paire clé/valeur :
            </p>

            <figure class="block_code">
                <pre><code>
$font-size: (logo:7rem, heading:5rem, project-heading:4rem, label:2rem);
                 </code></pre>
            </figure>

            <p>
            Les règles sont beaucoup plus strictes pour écrire des maps que pour les listes. Avec les listes, à peu près tout est optionnel (les parenthèses, les virgules...). Mais le contenu des maps doit être entouré d’une paire de parenthèses et doit utiliser des virgules pour séparer les paires clé/valeur :
            </p>

            <figure class="block_code">
                <pre><code>
$map: (
  key-01: value-01,
  key-02: value-02,
  key-03: value-03
);                 </code></pre>
            </figure>

            <p>
            Pour accéder à la valeur d’une map, c’est aussi un peu différent. Avec les maps, il faut utiliser la fonction <code class="line_code">map-get()</code>; celle-ci nécessite deux arguments : le premier est le nom de la map (ici <code class="line_code">$font-size</code>), et le second est le nom de la clé (ici label).
            </p>

            <figure class="block_code">
                <pre><code>
$font-size: (logo:7rem, heading:5rem, project-heading:4rem, label:2rem);
.form{
  &__field {
    & label {
        font-size: map-get($font-size, label);
      }
  }
}            </code></pre>
            </figure>

            <p>
            Vous pouvez assigner n’importe quel type de données Sass comme valeurs dans vos maps (ou listes). Exemple : Vos inputs de texte doivent stocker trois couleurs distinctes, du coup chaque clé contiendra elle-même une clé avec trois valeurs : les couleurs de la bordure, du fond et du texte :
            </p>

            <figure class="block_code">
                <pre><code>
$colour-primary: #15DEA5;
$colour-secondary: #001534;
$colour-accent: #D6FFF5;
$colour-white: #fff;
$colour-invalid: #DB464B;
$txt-input-palette: (
  active: (
      bg: $colour-primary,
      border: $colour-primary,
      txt: $colour-white,
  ),
  focus: (
      bg: $colour-primary,
      border: $colour-primary,
      txt: $colour-white,
  ),
  invalid: (
      bg: $colour-invalid,
      border: $colour-white,
      txt: $colour-white,
  )
);            </code></pre>
            </figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6599971-integrez-les-types-de-donnees-sass#/id/r-6606566" target="_blank">
            Utilisez les mixins avec les maps</a></h2>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6606591-utilisez-les-boucles-dans-sass-pour-fluidifier-votre-code#/id/r-7191827" target="_blank">
            Créez des boucles !</a></h1>

            <p>
            En appliquant une boucle au sein de votre mixin de texte, Sass peut automatiquement créer les bons sélecteurs et les bons ensembles de règles pour chaque élément de la map que vous lui soumettez. Voilà qui semble bien plus propre et moins laborieux que de créer manuellement un bloc pour chacun des différents textes, non ?
            </p>

            <p>
            Sass met à notre disposition plusieurs types de boucles, mais nous n’en utiliserons qu’une : la boucle <code class="line_code">@each</code>. C’est la plus simple à mettre en place et elle fonctionne très bien avec maps. Puisque tous les types de boucles de Sass nous donneront les mêmes résultats à la fin, autant choisir l’option la plus simple.
            </p>

            <p>
            Quand vous écrivez une boucle @each dans Sass, vous indiquez que pour chaque paire clé/valeur d’une $map vous voulez effectuer une tâche, et c’est exactement comme ça qu’on la définit :
            </p>

            <figure class="block_code">
                <pre><code>
@each $key, $value in $map {
}           </code></pre>
            </figure>

            <p>
            Sass entre dans $map et crée des variables temporaires <code class="line_code">$key</code> et <code class="line_code">$value</code> pour chaque ensemble clé/valeur qu’il trouve. Ces variables n’existent que dans cette itération de la boucle. Elles n’existent ni avant ni après l’itération, et sont invisibles pour le reste du code.
            </p>

            <figure class="block_code">
                <pre><code>
@mixin txt-input-palette($palettes) {
  @each $state, $palette in $palettes{
      border: .1rem solid map-get($palette, border);
      background-color: map-get($palette, bg);
      color: map-get($palette, txt);
  }
}
           </code></pre>
            </figure>

            <p>
            On regarde ensemble : ici nous avons ajouté une boucle <code class="line_code">@each</code> qui va itérer tout au long de notre map <code class="line_code">$palettes</code>, tandis que les variables <code class="line_code">$state</code> et <code class="line_code">$palette</code> stockent chacune la clé et la valeur. Ensuite, en itérant à chaque passage, cela crée des règles pour border, background-color, et la color du texte.
            </p>

            <img src="../images/7578367827e.png" alt="@each"/>

            <p>
                Nous voulons plutôt :
            </p>

            <figure class="block_code">
                <pre><code>
@mixin txt-input-palette($palettes) {
  @each $state, $palette in $palettes{
      &:#{$state}{
        border: .1rem solid map-get($palette, border);
        background-color: map-get($palette, bg);
        color: map-get($palette, txt);
      }
  }
}
           </code></pre>
            </figure>

            <p>
                Ce qui donne :
            </p>

            <figure class="block_code">
                <pre><code>
.form__field input:active {
border: 0.1rem solid #15DEA5;
background-color: #15DEA5;
color: #fff;
}
.form__field input:focus {
border: 0.1rem solid #15DEA5;
background-color: #15DEA5;

 color: #fff;
}
.form__field input:invalid {
border: 0.1rem solid #fff;
background-color: #DB464B;
color: #fff;
}
           </code></pre>
            </figure>

            <p>
            Cet ensemble hashtag/accolade/$variable est tout nouveau, mais pas de panique, il s’agit simplement de la syntaxe d’interpolation (#{variable}) de Sass. Celle-ci n’est pas exclusive à Sass et existe dans de nombreux langages, comme Ruby par exemple. Elle vous permet d’utiliser la valeur d’une variable au sein d’une chaîne de caractères (ou string) et de la remplacer par une autre. Dans notre cas, elle nous permet de dire que l’on veut utiliser la valeur de la variable   $state  en tant que nom de pseudosélecteur au lieu de le taper nous-mêmes.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6606716-ajoutez-des-breakpoints-pour-une-mise-en-page-responsive#/id/video_Player_1" target="_blank">
            Ajoutez des breakpoints pour une mise en page responsive</a></h1>

            <p>
            L’affichage n’est pas fou sur mobile, et c’est normal car notre page n’est pas encore responsive. La mise en page reste la même quelle que soit la résolution de l’écran, et ce n’est pas ce que nous voulons. Pour que l’affichage de notre site s’adapte sur n’importe quel support, nous devons mettre en place des media queries. Les media queries indiquent au navigateur d’utiliser un ensemble de règles alternatif sous certaines conditions. En voici une :
            </p>

            <figure class="block_code">
                <pre><code>
                @media (max-width: 599px) {
  .proj-grid {
      grid-template-columns: 1fr;
  }
}
           </code></pre>
            </figure>

            <p>
            Cette media query signifie que le navigateur appliquera l’ensemble de règles que vous mettrez entre les accolades si la largeur du navigateur est inférieure à 600 pixels. Les résolutions que vous indiquez pour vos media queries sont appelées des breakpoints: ce sont les limites liées à la résolution de l’écran qui font que les ensembles de règles liés s’appliquent ou non. Pour notre exemple, nous avons créé une media query avec un breakpoint qui appliquera les ensembles de règles spécifiquement adaptés aux écrans mobiles.
            </p>

            <p>
            La syntaxe CSS standard pour les media queries consiste à placer un sélecteur et son ensemble de règles directement entre les accolades de la query. Lorsque la résolution de l’écran correspond au breakpoint, alors le breakpoint prendra le pas sur l’ensemble de règles par défaut.
            </p>

            <p>
            Mais devoir placer les sélecteurs au sein de la media query signifie qu’ils ne feront pas partie de leurs blocs BEM nestés.
            </p>

            <p>
            Les media queries CSS standard exigent de placer les sélecteurs à l’intérieur de la query, alors que Sass, lui, vous permet de placer les media queries directement dans les sélecteurs :
            </p>

            <figure class="block_code">
                <pre><code>
.proj-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  @media (max-width: 599px) {
      grid-template-columns: 1fr;
  }
}
           </code></pre>
            </figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6606716-ajoutez-des-breakpoints-pour-une-mise-en-page-responsive#/id/r-6631769" target="_blank">
            Les breakpoints Sass</a></h2>

            <p>
            Au lieu de déclarer tous nos breakpoints dans notre codebase, nous allons créer une map <code class="line_code">$breakpoints</code> pour y stocker nos différents breakpoints. Ajoutons-y notre valeur de breakpoint pour mobile tant qu’on y est :
            </p>

            <figure class="block_code">
                <pre><code>
                $breakpoints: (
  mobile: 599px
);
           </code></pre>
            </figure>

            <figure class="block_code">
                <pre><code>
@mixin mobile-only {
  @media screen and (max-width: map-get($breakpoints, mobile)){
      grid-template-columns: 1fr;
  }
}
.proj-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  @include mobile-only;
}
           </code></pre>
            </figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6606716-ajoutez-des-breakpoints-pour-une-mise-en-page-responsive#/id/r-6631768" target="_blank">
            <code class="line_code">@content</code></a></h2>

            <figure class="block_code">
                <pre><code>
@mixin mobile-only {
  @media screen and (max-width: map-get($breakpoints, mobile)){
      @content;
  }
}
           </code></pre>
            </figure>

            <p>
            Quand Sass compile les instances de la mixin, il remplace @content par le code que vous aurez placé à l’intérieur de l’instance de la mixin.
            </p>

            <figure class="block_code">
                <pre><code>
@mixin mobile-only {
  @media screen and (max-width: map-get($breakpoints, mobile)){
      @content;
  }
}
.proj-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  @include mobile-only{
      grid-template-columns: 1fr;
  }
}
           </code></pre>
            </figure>

            <p>
            Désormais, Sass remplacera @content par grid-template-columns: 1fr quand il compile le code :  
            </p>

            <figure class="block_code">
                <pre><code>
.proj-grid {
display: grid;
grid-template-columns: repeat(3, 1fr);
}
@media screen and (max-width: 599px) {
.proj-grid {
  grid-template-columns: 1fr;
}
}
           </code></pre>
            </figure>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6612156-utilisez-autoprefixer-pour-creer-du-code-adapte-a-tous-les-navigateurs#/id/r-7191837" target="_blank">
            Utilisez Autoprefixer pour créer du code adapté à tous les navigateurs</a></h1>

            <p>
            Certaines propriétés CSS s’afficheront différemment selon les navigateurs, sauf que vous voulez vous assurer que le rendu soit le même pour tous les visiteurs de votre site, peu importe leur navigateur.
            </p>

            <p>
            Les équipes qui conçoivent vos navigateurs, tels que Google et Mozilla, n’attendent pas que les nouveaux outils plutôt cool soient standardisés pour pouvoir les intégrer. Au lieu de ça, ils créent leur propre version, en ajoutant un préfixe pour la distinguer des autres navigateurs. Bien sûr, un jour ou l’autre, la nouvelle propriété sera standardisée et fonctionnera pour tous les navigateurs, supprimant le besoin d’utiliser des préfixes. Mais en attendant, il vous faudra utiliser des préfixes dans votre code.
            </p>

            <figure class="block_code">
                <pre><code>
.header {
display: -webkit-box;

 display: -moz-box;
display: -ms-flexbox;
display: flex;
}
           </code></pre>
            </figure>

            <p>
            “Autoprefixer” est un plugin qui vous sauvera des <code class="line_code">-webkit-</code> et des  <code class="line_code">-moz-</code>. Il fait exactement ce que son nom indique : il ajoute automatiquement des préfixes dans votre CSS. Il vous suffit de lui fournir une feuille CSS et il la passera en revue pour y ajouter les préfixes là où il faut.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6106181-simplifiez-vous-le-css-avec-sass/6612156-utilisez-autoprefixer-pour-creer-du-code-adapte-a-tous-les-navigateurs#/id/r-6612387" target="_blank">
            Installer Autoprefixer</a></h2>

            <figure class="block_code">
                <pre><code>
npm install autoprefixer postcss postcss-cli -g
           </code></pre>
            </figure>

            <p>
            Une fois que npm a téléchargé et installé les packages, retournez dans package.json :
            </p>

            <figure class="block_code">
                <pre><code>
{
"name": "joeblow",
"version": "1.0.0",
"description": "Joe Blow's web portfolio",
"main": "index.js",
"scripts": {
  "sass": "sass ./sass/main.scss:./public/css/style.css -w --style compressed",
  "prefix": "postcss ./public/css/style.css --use autoprefixer -d./public/css/prefixed/"
},
"author": "",
"license": "ISC",
"browserslist": "last 4 versions"
}
           </code></pre>
            </figure>

            <p>
                <ul>
                    <li>Après votre script “sass”, vous allez ajouter un nouveau script nommé  <code class="line_code">“prefix”</code>.</li>
                    <li>Dans ce script, vous devez dire à npm d’utiliser le nouveau package  <code class="line_code">postcss</code> que vous venez d’installer, et n’oubliez pas de lui dire où trouver votre fichier CSS compilé</li>
                    <li>Vous devez dire au package  postcss  d’utiliser Autoprefixer en exécutant le  flag  <code class="line_code">--use</code>  suivi d’ <code class="line_code">autoprefixer</code></li>
                    <li>Vous devez lui dire où mettre votre nouvelle feuille CSS préfixée  <code class="line_code">./public/css/prefixed</code></li>
                    <li>Tout ce qu’il reste à faire, c’est dire à Autoprefixer jusqu’à quand il doit remonter pour assurer votre compatibilité avec tous les browsers. Par défaut, Autoprefixer n’ira vérifier que la précédente version des principaux navigateurs pour conclure quels préfixes il doit ajouter à vos feuilles CSS. Mais vous voulez être sûr que les internautes utilisant des versions de browsers un peu plus anciennes soient également pris en compte.  <code class="line_code">"browserslist": "last 4 versions" </code></li>
                </ul>
            </p>

            <p>
                Pour lancer autoprefixer : <code class="line_code">npm run prefix</code>
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