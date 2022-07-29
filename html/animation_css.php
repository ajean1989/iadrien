<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Animations CSS</title>
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

    	<h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5919246-creez-des-animations-css-modernes/6340913-creez-des-animations-simples-avec-les-transitions" target="_blank">Les transitions</a></h1>

        <p>
        Pour créer une transition, vous aurez besoin de plusieurs informations :
            <ul>
                <li>une propriété CSS à modifier ;</li>
                <li>une valeur initiale pour votre propriété CSS ;</li>
                <li>une valeur finale pour cette même propriété ;</li>
                <li>une durée ;</li>
                <li>un événement pour déclencher votre transition.</li>
            </ul>
        </p>

        <p>
        Passez d’un état A à un état B :
        </p>

        <figure class="block_code">
    		<pre><code>
$cd-btn: #011c37;
$cd-txt: #15DEA5;
.btn {
    background: $cd-btn;
    color: $cd-txt;
    font-size: 3rem;
    cursor: pointer;
    padding: 1.85rem 3rem;
    border-radius: 10rem;
    transform: scale(1);            // Valeur initiale
    transition-property: transform; // Propriété
    transition-duration: 1000ms;    // Durée
    &:hover {                       // Événement
        transform: scale(1.15);     // Valeur finale
    }
}
    		</code></pre>
    	</figure>
        
        <p>
            On peut aussi utiliser la propriété raccourci de transition :
        </p>

        <figure class="block_code">
    		<pre><code>
transition-property: transform;
transition-duration: 400ms;
    		</code></pre>
    	</figure>

        <figure class="block_code">
    		<pre><code>
transition: transform 400ms;
    		</code></pre>
    	</figure>

        <p>
            Les événements doivent être des pseudoclasses. Voici les plus utilisées :
            <ul>
                <li><code class="line_code">:hover</code>, qui est déclenché au survol de la souris ;</li> 
                <li><code class="line_code">:active</code>, activé au clic de l'utilisateur (le plus souvent pour les liens et boutons) ;</li>
                <li><code class="line_code">:focus</code> qui se déclenche lorsque son élément reçoit le focus (soit il est sélectionné à l'aide du clavier, soit il est activé avec la souris) ; utiliser pour marquer un formulaire en css</li>
                <li><code class="line_code">:valid</code>, dont la validation du contenu s'effectue correctement par rapport au type de donnée attendu ;</li>
                <li><code class="line_code">:invalid</code>, qui inversement, correspond à un élément dont la validation du contenu ne s'effectue pas correctement par rapport au type de donnée attendu ;</li>
                <li><code class="line_code">:not()</code>, qui correspond à la négation. Elle prend un sélecteur en argument et permet de cibler les éléments qui ne sont pas représentés par cet argument ;</li>
                <li><code class="line_code">:checked</code>, qui correspond aux input de type checkbox, option ou radio qui sont cochés ;</li>
                <li><code class="line_code">:enabled</code>, un élément avec lequel on peut interagir ;</li>
                <li><code class="line_code">:disabled</code>, qui correspond à un élément dont l'interaction a été bloquée.</li>
            </ul>
        </p>

        <div class="em">Il est possible de sélectionner un élément lorsqu'on <code class="line_code">:hover</code> un autre avec simplement <code class="line_code">firstElement:hover autreElement</code>.</div>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5919246-creez-des-animations-css-modernes/6340915-appliquez-les-12-principes-de-l-animation-au-web" target="_blank">Appliquez les 12 principes de l’animation au web</a></h2>

        <p>
        Voir lien dans le titre;
        </p>

        <p>
        Au sein d’une transition, vous pouvez facilement animer deux propriétés, ou même trois, ou même autant que vous souhaitez.
        </p>

        <figure class="block_code">
    		<pre><code>
transition: transform 450ms, background-color 300ms;
transition-delay: 0, 150ms;
    		</code></pre>
    	</figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5919246-creez-des-animations-css-modernes/6340917-creez-des-animations-plus-naturelles-avec-les-fonctions-de-timing" target="_blank">Créez des animations plus naturelles avec les fonctions de timing (accélération, déccélération)</a></h2>

        <p>
        Pour que nos animations aient l’air réalistes et authentiques, l'accélération et la décélération sont essentielles. Dans le jargon de l’animation, il s'agit du ease-in et du ease-out.
        </p>

        <p>
        De base, le navigateur nous donne accès à plusieurs courbes d'accélération prédéfinies par défaut dans le CSS.
        Une animation dont le timing est linéaire : elle ne connaît pas d'accentuation à l'accélération ou à la décélération. Sa courbe est totalement droite du point A au point B. Pour appliquer une fonction de timing linéaire à l'animation de notre boîte, nous pouvons ajouter la propriété  transition-timing-function  et indiquer sa valeur en  linear  :
        </p>

        <figure class="block_code">
    		<pre><code>
transition: transform 1000ms;
transition-timing-function: linear;
    		</code></pre>
    	</figure>

        <p>
        La seconde fonction que j'aimerais vous faire découvrir est <code class="line_code">ease-in-out</code>. C’est la fonction de timing préférée de beaucoup d’animateurs car elle suit une courbe d’accélération et de décélération subtile.
        </p>

        <figure class="block_code">
    		<pre><code>
transition: transform 1000ms ease-in-out;
    		</code></pre>
    	</figure>

        <p>
        On peut aussi choisir de seulement d'accentuer l'accélération ou la décélération avec <code class="line_code">ease-in</code> et <code class="line_code">ease-out</code>.
        </p>

        <p>
        Lorsqu'aucune n'est précisée, le navigateur applique la fonction ease par défaut, qui ressemble aux courbes que nous venons de décrire. Mais  ease  suit un profil d’accélération plus net, et une rampe de décélération plus prononcée
        </p>

        <p>
        La fonction <code class="line_code">cubic-bezier</code> fonctionne comme la fonction <code class="line_code">rgb()</code> : on indique une liste de valeurs numériques, mais au lieu de transformer ces chiffres en couleur, la fonction <code class="line_code">cubic-bezier</code> les transforme en courbe d’accélération. On peut créé sa courbe depuis le site <a href="cubic-bezier.com" target=_blank>cubic-bezier.com</a> ou d'autres sites.
        </p>




        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/CSS/transform" target="_blank">La propriété <code class="line_code">transform</code></a></h2>

        <p>
        La propriété <code class="line_code">transform</code> s'avère un véritable couteau suisse en termes d'animation. En effet, elle dispose de plus de 20 fonctions différentes pour déplacer, faire pivoter, déformer et changer la taille des éléments.
        </p>

        <p>
            Voir lien dans le titre pour plus de détail ou <a href="https://openclassrooms.com/fr/courses/5919246-creez-des-animations-css-modernes/6340919-creez-des-animations-fluides-avec-la-propriete-css-transform">ici sur OC</a>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/CSS/transform" target="_blank">Modifiez le point d’ancrage d’un élément grâce à <code class="line_code">transform-origin</code></a></h2>

        <p>
        Par défaut, toutes les fonctions de  transform  partent du centre de l’élément. Et souvent, c’est très bien. Mais parfois, ça ne suffit pas. La propriété  transform-origin  est là pour ça ! Elle permet de déplacer un point d’ancrage où on veut, pour faire partir nos animations de ce point.
        </p>



        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5919246-creez-des-animations-css-modernes/6340913-creez-des-animations-simples-avec-les-transitions" target="_blank">Les animations (@keyframes)</a></h1>


        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/5919246-creez-des-animations-css-modernes/6340918-optimisez-les-performances-de-votre-navigateur-pour-vos-animations-css" target="_blank">Performances</a></h1>

        <p>
        Pour passer des codes CSS et HTML… à une page web, le navigateur passe par plusieurs étapes pour afficher une page. Voici les étapes qui nous intéressent pour le rendu de nos animations :
            <ol>
                <li>Style : le navigateur reçoit le code HTML. Il va l'interpréter pour comprendre la structure du DOM (Document Object Model). Ainsi, pour chaque balise HTML, il crée un élément du DOM, un peu comme un arbre de nœuds. Il parcourt ensuite le CSS, et détermine quelles règles s’appliquent à quels éléments. À partir de là, il va créer la structure qui s'affichera.</li>
                <li>Layout (mise en page) : maintenant que le navigateur connaît les styles et les éléments à afficher, il détermine la taille des éléments et où les placer.</li>
                <li>Paint (peinture) : le navigateur transforme les éléments en pixels en utilisant les styles de l’étape 1, et les positions et dimensions déduites de l’étape 2.</li>
                <li>Composition : le navigateur combine tous les éléments pour composer la page qui s’affiche dans le navigateur.</li>
            </ol>
            Ces différentes étapes sont importantes pour comprendre quelles propriétés modifier pour nos animations. En effet, le navigateur applique différentes propriétés CSS à différentes étapes du processus. Typiquement, width et height sont appliquées pendant l'étape du layout. En revanche, color et box-shadow sont appliquées à l'étape paint.
        </p>
        <div class="em">Le site <a href="https://csstriggers.com/"> csstriggers.com </a>(en anglais, mais vous retrouverez les mots clés que nous avons vus ici) présente les étapes de chaque propriété associée aux layout, paint et composition. Pas mal si vous avez un doute sur une propriété pour la performance de votre animation !</div>

        <p>
        Si je change la propriété  width  , cela veut dire que mon navigateur recalcule le layout, le paint et la composition. Pas très optimal, n'est-ce pas ? 🙈<br/>
        En d’autres termes, il ne faut animer que des propriétés qui font partie de l’étape composition. Les plus adaptées sont donc <code class="line_code">ransform</code> et <code class="line_code">opacity</code> par exemple.
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