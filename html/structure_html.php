<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>StructureHTML</title>
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

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605881-structurez-votre-page#/id/r-1605828" target="_blank">
            Les balises structurantes de HTML5</a></h1>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605881-structurez-votre-page#/id/r-1610835" target="blank"><code class="line_code">&ltheader&gt</code> : l'en tête</a></h2>

            <p>
             La plupart des sites web possèdent en général un en-tête, appelé header en anglais. On y trouve le plus souvent un logo, une bannière, le slogan de votre site…
            </p>
            <figure class="block_code">
                <pre><code>
&ltheader&gt
    &lt!-- Placer ici le contenu de l'en tête du site --&gt
&lt/header&gt
                </code></pre>
            </figure>
            <p>
                <em>Il peut y avoir plusieurs en-têtes dans votre page. Si celle-ci est découpée en plusieurs sections, chaque section peut en effet avoir son propre<code class="line_code">&ltheader&gt</code>.</em>
            </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605881-structurez-votre-page#/id/r-1610842" target="blank"><code class="line_code">&ltfooter&gt</code> : le pied de page</a></h2>

            <p>
                À l'inverse de l'en-tête, le pied de page se trouve en général tout en bas du document. On y trouve des informations comme des liens de contact, le nom de l'auteur, les mentions légales, etc.
            </p>
            <figure class="block_code">
                <pre><code>
&ltfooter&gt
    &lt!-- Placer ici le contenu de l'en tête du site --&gt
&lt/footer&gt
                </code></pre>
            </figure>
    		
                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605881-structurez-votre-page#/id/r-1610850" target="blank"><code class="line_code">&ltnav&gt</code> : principaux liens de navigation</a></h2>

            <p>
                La balise<code class="line_code">&ltnav&gt</code> doit regrouper tous les principaux liens de navigation du site. Vous y placerez par exemple le menu principal de votre site.Généralement, le menu est réalisé sous forme de liste à puces à l'intérieur de la balise<code class="line_code">&ltnav&gt</code> :
            </p>
            <figure class="block_code">
                <pre><code>
&ltnav&gt
    &ltul&gt
        &ltli&gt&lta href="index.html"&gtAccueil&gt/a&gt&lt/li&gt
        &ltli&gt&lta href="forum.html"&gtForum&gt/a&gt&lt/li&gt
        &ltli&gt&lta href="contact.html"&Contact&gt/a&gt&lt/li&gt
    &ltul&gt
&lt/nav&gt
                </code></pre>
            </figure>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605881-structurez-votre-page#/id/r-1610859" target="blank"><code class="line_code">&ltsection&gt</code> : une section de page</a></h2>
            <p>
                La balise <code class="line_code">&ltsection&gt</code> sert à regrouper des contenus en fonction de leur thématique. Elle englobe généralement une portion du contenu au centre de la page.
            </p>
            <figure class="block_code">
                <pre><code>
&ltsection&gt
    &lt!h1&gt Ma section de page &lt&/h1&gt
    &ltp&gt Bla bla bla &lt/p&gt
&lt/section&gt
                </code></pre>
            </figure>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605881-structurez-votre-page#/id/r-1610867" target="blank"><code class="line_code">&ltaside&gt</code> : information complémentaires</a></h2>

            <p>
                La balise<code class="line_code">&ltaside&gt</code> est conçue pour contenir des informations complémentaires au document que l'on visualise. Ces informations sont généralement placées sur le côté (bien que ce ne soit pas une obligation). <br/>
                Sur Wikipédia, par exemple, il est courant de voir à droite un bloc d'informations complémentaires à l'article que l'on visualise. Ainsi, sur la page présentant la planète Saturne (figure suivante), on trouve dans ce bloc les caractéristiques de la planète (dimensions, masse, etc.).
            </p>
            <figure class="block_code">
                <pre><code>
&ltaside&gt
    &lt!-- Placer ici des informations complémentaires --&gt
&lt/aside&gt
                </code></pre>
            </figure>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605881-structurez-votre-page#/id/r-1610874" target="blank"><code class="line_code">&ltarticle&gt</code> : un article indépendant</a></h2>
            <p>
                La balise<code class="line_code">&ltarticle&ht</code> sert à englober une portion généralement autonome de la page. C'est une partie de la page qui pourrait ainsi être reprise sur un autre site. C'est le cas par exemple des actualités (articles de journaux ou de blogs).
            </p>
            <figure class="block_code">
                <pre><code>
&ltarticle&gt
    &lth1&gtMon article&lth1&gt
    &ltp&gtBla bla&ltp&gt
&lt/article&gt
                </code></pre>
            </figure>

            <figure>
                <img src="../images/343677.png" alt="strucutre de page" />
            </figure>

            <figure class="block_code">
                <pre><code>
&lt!DOCTYPE html&gt
&lthtml&gt
    &lthead&gt
        &ltmeta charset="utf-8" /&gt
        &ltlink rel="stylesheet" href="../css/style.css" /&gt
        &lttitle>Titre&lt/title&gt
    &lt/head&gt

    &ltbody&gt
                        
    &ltheader&gt
        &lt!-- Placer ici le contenu de l'en tête du site --&gt
    &lt/header&gt

    &ltnav&gt
        &ltul&gt
            &ltli&gt&lta href="index.html"&gtAccueil&lt/a&gt&lt/li&gt
            &ltli&gt&lta href="forum.html"&gtForum&lt/a&gt&lt/li&gt
            &ltli&gt&lta href="contact.html"&Contact&lt/a&gt&lt/li&gt
        &ltul&gt
    &lt/nav&gt

    &ltsection&gt
        &ltaside&gt
            &lt!-- Placer ici des informations complémentaires --&gt
        &lt/aside&gt

        &ltarticle&gt
            &lth1&gtMon article&lth1&gt
            &ltp&gtBla bla&ltp&gt
        &lt/article&gt
    &lt/section&gt

    &ltfooter&gt
        &lt!-- Placer ici le contenu de l'en tête du site --&gt
    &lt/footer&gt


    &lt/body&gt
&lt/html>
                </code></pre>
            </figure>


            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1606168-decouvrez-le-modele-des-boites#/id/r-2302195" target="_blank">
            Les balises de type block et inline</a></h1>

            <p>
                <ul>
                    <li><strong>block</strong> : une balise de type block sur votre page web crée automatiquement un retour à la ligne avant et après. Il suffit d'imaginer tout simplement un bloc. Votre page web sera en fait constituée d'une série de blocs les uns à la suite des autres. Mais vous verrez qu'en plus, il est possible de mettre un bloc à l'intérieur d'un autre, ce qui va augmenter considérablement nos possibilités pour créer le design de notre site !</li>
                    <li><strong>inline</strong> :une balise de type inline se trouve obligatoirement à l'intérieur d'une balise block. Une balise inline ne crée pas de retour à la ligne, le texte qui se trouve à l'intérieur s'écrit donc à la suite du texte précédent, sur la même ligne (c'est pour cela que l'on parle de balise « en ligne »).</li>
                    <li>Il existe deux balises génériques et, comme par hasard, la seule différence entre les deux est que l'une d'elle est inline et l'autre est block : <code class="line_code">&ltspan&gt&lt/span&gt</code>(<strong>inline</strong>) et <code class="line_code">&ltdic&gt&lt/div&gt</code>(<strong>block</strong>)</li>
                </ul>
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1606168-decouvrez-le-modele-des-boites#/id/r-2302200" target="_blank">
            Les dimensions des blocs</a></h1>

            <p>
                Par défaut, un bloc prend 100% de la largeur disponible. <br />
                Maintenant, rajoutons un peu de CSS afin de modifier la largeur des paragraphes. Le CSS suivant dit : « Je veux que tous mes paragraphes aient une largeur de 50% ».<br/>
                <em> Lorsque vous utilisez les pourcentages vous devez seulement être conscient de la valeur à laquelle se réfère le pourcentage. Si vous donnez à un bloc enfant une largeur définie en pourcentage, celui-ci correspond à un pourcentage de la largeur du conteneur parent.</em><br/>
                <em>Lorsque vous utilisez des marges et des remplissages définis en pourcentages, la valeur est calculée à partir de la taille en ligne — donc de la largeur lorsque vous travaillez dans un langage horizontal. Dans notre exemple, toutes les marges et tous les renforts représentent 10 % de la largeur. Cela signifie que vous pouvez avoir des marges et un remplissage de taille égale tout autour de la boîte. C'est un fait dont il faut se souvenir si vous utilisez les pourcentages de cette manière. Voir ce <a href="https://developer.mozilla.org/fr/docs/Learn/CSS/Building_blocks/Sizing_items_in_CSS" target=blank=>lien</a></em>
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Learn/CSS/Building_blocks/Sizing_items_in_CSS" target="blank">Unités de la fenêtre d'affichage</a></h2>

            <p>
                La fenêtre — la surface de la page montrée par le navigateur lorsqu'on navigue sur un site — a aussi des dimensions. Certaines unités CSS sont dédiées à la description des dimensions de la fenêtre — <code class="line_code">vw</code> pour viewport width (largeur de la fenêtre), et <code class="line_code">vh</code> pour viewport height (hauteur de la fenêtre). Grâce à ces unités vous pouvez dimensionner un objet en fonction de la fenêtre de l'utilisateur.<br/>
                <em><code class="line_code">1vh</code> correspond à 1% de la hauteur de la fenêtre, <code class="line_code">1vw</code> à 1% sa largeur. Avec ces unités, on peut dimensionner des boîtes aussi bien que du texte.</em>
            </p>

            <figure class="block_code">
                <pre><code>
p
{
    width: 50%;     /* largeur, à exprimer en px ou % */
    height: 50%;    /* hauteur
}
                </code></pre>
            </figure>

            <p>
            On peut demander à ce qu'un bloc ait des dimensions minimales et maximales. C'est très pratique car cela nous permet de définir des dimensions « limites » pour que notre site s'adapte aux différentes résolutions d'écran de nos visiteurs :
            </p>
            <figure class="block_code">
                <pre><code>
p
{
    min-width: 400px; /* largeur minimale */
    min-height: 400px; /* hauteur minimale */
    max-width: 800px; /* largeur maximale */
    max-height : 800px; /* hauteur maximale */
}
                </code></pre>
            </figure>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1606168-decouvrez-le-modele-des-boites#/id/r-2302207" target="_blank">
            Les marges</a></h1>

            <p>
                <ul>
                    <li><code class="line_code">padding</code> : indique la taille de la marge intérieure. À exprimer en général en pixels (px).</li>
                    <li><code class="line_code">margin</code> : indique la taille de la marge extérieure. Là encore, on utilise le plus souvent des pixels.</li>
                </ul>
            </p>

            <p>
                <em>Les balises de type inline possèdent également des marges. Vous pouvez donc aussi essayer ces manipulations sur ce type de balises.</em>
            </p>
            <p>
                <code class="line_code">margin</code>(comme <code class="line_code">padding</code> d'ailleurs) s'applique aux quatre côtés du bloc. Si vous voulez spécifier des marges différentes en haut, en bas, à gauche et à droite, il va falloir utiliser des propriétés plus précises… Le principe est le même que pour la propriété <code class="line_code">border</code>.
                <ul>
                    <li><code class="line_code">margin-top</code> : marge extérieur en haut</li>
                    <li><code class="line_code">margin-bottom</code> : marge extérieur en bas</li>
                    <li><code class="line_code">margin-left</code> </li>
                    <li><code class="line_code">margin-right</code></li>
                    <li><code class="line_code">padding-top</code> : marge intérieur en haut</li>
                    <li><code class="line_code">padding-bottom</code> : </li>
                    <li><code class="line_code">padding-left</code></li>
                    <li><code class="line_code">padding-right</code></li>
                </ul>
            </p>
            <p>
                <em>Il y a d'autres façons de spécifier les marges avec les propriétés <code class="line_code">margin</code> et <code class="line_code">padding</code>.<br /> 
                Par exemple :<code class="line_code">margin: 2px 0 3px 1px;</code>signifie « 2 px de marge en haut, 0 px à droite (le px est facultatif dans ce cas), 3 px en bas, 1 px à gauche ».<br />
                Autre notation raccourcie :<code class="line_code">margin: 2px 1px;</code> signifie « 2 px de marge en haut et en bas, 1 px de marge à gauche et à droite ».</em>
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1606168-decouvrez-le-modele-des-boites#/id/r-1611149" target="_blank">
            Centrer des blocs</a></h1>

            <figure class="block_code">
                <pre><code>
p
{
    width: 350px; /* on a indiqué une largeur (obligatoire) */
    margin: auto; /* On demande à centrer le bloc avec auto */ 
    text-align: justify;
    ...
}
                </code></pre>
            </figure>

            <p>
                <em>Il n'est cependant pas possible de centrer verticalement un bloc avec cette technique. Seul le centrage horizontal est permis.</em>
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1606168-decouvrez-le-modele-des-boites#/id/r-2302218" target="_blank">
            Quand ça dépasse</a></h1>

            <p>
                Si vous voulez que le texte ne dépasse pas des limites du paragraphe, il va falloir utiliser la propriété <code class="line_code">overflow</code>. Voici les valeurs qu'elle peut accepter :
            </p>
            <figure class="block_code">
                <pre><code>
p
{
    overflow: visible; /* (Par défaut)  si le texte dépasse les limites de taille, il reste visible et sort volontairement du bloc. */
    overflow: hidden; /* si le texte dépasse les limites, il sera tout simplement coupé. On ne pourra pas voir tout le texte. */
    overflow: scroll; /* là encore, le texte sera coupé s'il dépasse les limites. Sauf que cette fois, le navigateur mettra en place
    des barres de défilement pour qu'on puisse lire l'ensemble du texte.*/
    overflow: auto; /*c'est le mode « pilote automatique ». En gros, c'est le navigateur qui décide de mettre ou non des barres
     de défilement (il n'en mettra que si c'est nécessaire). C'est la valeur que je conseille d'utiliser le plus souvent. */
 }
                </code></pre>
            </figure>

            <p>
                Si vous devez placer un mot très long dans un bloc, qui ne tient pas dans la largeur, vous allez adorer <code class="line_code">word-wrap</code>. Cette propriété permet de forcer la césure des très longs mots (généralement des adresses un peu longues).
            </p>
            <figure class="block_code">
                <pre><code>
p
{
    word-wrap: break-word;
}
                </code></pre>
            </figure>

            <p>
                <em>Je conseille d'utiliser cette fonctionnalité dès qu'un bloc est susceptible de contenir du texte saisi par des utilisateurs (par exemple sur les forums de votre futur site). Sans cette astuce, on peut « casser » facilement le design d'un site (en écrivant par exemple une longue suite de « aaaaaaaaaaa »).</em>
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/3298561-faites-votre-mise-en-page-avec-flexbox#/id/video_Player_1" target="_blank">
            flexbox, conteneurs et éléments</a></h1>

        <p>
            Le principe de la mise en page avec Flexbox est simple : vous définissez un conteneur, et à l'intérieur vous placez plusieurs éléments.<br/>
            Sur une même page web, vous pouvez sans problème avoir plusieurs conteneurs. Ce sera à vous d'en créer autant que nécessaire pour obtenir la mise en page que vous voulez.<br />
            Le conteneur est une balise HTML, et les éléments sont d'autres balises HTML à l'intérieur :
        </p>

        <figure class="block_code">
            <pre><code>
&ltdiv id="conteneur"&gt
    &ltdiv class="element 1"&gtElement &lt/div&gt
    &ltdiv class="element 2"&gtElement &lt/div&gt
    &ltdiv class="element 3"&gtElement &lt/div&gt
&lt/div&gt
            </code></pre>
        </figure>
        <figure>
            <img src="../images/flexbox_conteneur.png" alt="conteneurs"/>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/3298561-faites-votre-mise-en-page-avec-flexbox#/id/r-3298646" target="_blank">
            Soyez flex</a></h2>

        <p>
        Découvrons maintenant Flexbox. Si je mets une (une seule !) propriété CSS, tout change. Cette propriété, c'estflex, et je l'applique au conteneur :
        </p>

        <figure class="block_code">
            <pre><code>
#conteneur
{
    display: flex;
}
            </code></pre>
        </figure>

        <p>
            ... alors les blocs se placent par défaut côte à côte
            <img src="../images/flex_defaut.png" alt="bloc flex"/>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/3298561-faites-votre-mise-en-page-avec-flexbox#/id/r-3298630">
            La direction</a></h2>

        <figure class="block_code">
            <pre><code>
#conteneur
{
    display: flex;
    flex-direction: column; /*Oragnisés sur une colonne */
    flex-direction: row; /*Oragnisés sur une ligne (par défaut) */
    flex-direction: row-reverse; /*Oragnisés sur une ligne, mais en ordre inversé */
    flex-direction: column-reverse; /*Oragnisés sur une colonne, mais en ordre inversé */
}
            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/3298561-faites-votre-mise-en-page-avec-flexbox#/id/r-3298645" target="_blank">
            Le retour à la ligne</a></h2>

        <p>
            Par défaut, les blocs essaient de rester sur la même ligne s'ils n'ont pas la place (ce qui peut provoquer des bugs de design parfois). Si vous voulez, vous pouvez demander à ce que les blocs aillent à la ligne lorsqu'ils n'ont plus la place avec <code class="line_code">flex-wrap</code>  qui peut prendre ces valeurs :
        </p>

        <figure class="block_code">
            <pre><code>
#conteneur
{
    display: flex;
    flex-wrap: nowrap; /* pas de retour à la ligne (par défaut) */
    flex-wrap: wrap; /* retour à la ligne lorsqu'il n'y a plus de place */
    flex-wrap: wrap-reverse; /* retour à la ligne lorsqu'il n'y a plus de place, mais en sens inverse */
}
            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/3298561-faites-votre-mise-en-page-avec-flexbox#/id/r-3298711" target="_blank">
            Alignement</a></h2>

        <p>
            Les éléments sont organisés soit horizontalement (par défaut), soit verticalement. Cela définit ce qu'on appelle l'axe principal. Il y a aussi un axe secondaire (cross axis) :
            <ul>
                <li>Si vos éléments sont organisés horizontalement, l'axe secondaire est l'axe vertical.</li>
                <li>Si vos éléments sont organisés verticalement, l'axe secondaire est l'axe horizontal.</li>
            </ul>
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/3298561-faites-votre-mise-en-page-avec-flexbox#/id/r-3298681" target="_blank">
                Aligner sur l'axe principal</a></h3>
        <p>
            partons sur des éléments organisés horizontalement (c'est le cas par défaut).<br/>
            Pour changer leur alignement, on va utiliser <code class="line_code">justify-content</code> , qui peut prendre ces valeurs :
        </p>
            <figure class="block_code">
                <pre><code>
#conteneur
{
    display: flex;
    justify-content: flex-start; /* aligné au début (par défaut) */
    justify-content: flex-end; /* aligné à la fin */
    justify-content: center; /* aligné au centre */
    justify-content: space-between; /* les éléments sont alignés sur tout l'axe (il y a de l'espace entre les deux) */
    justify-content: space_around; /* idem mais en laissant de l'espace sur les extremités */
}
                </code></pre>
            </figure>
            <figure>
                <img src="../images/justify_content.png" alt="alignement flex"/>
            </figure>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/3298561-faites-votre-mise-en-page-avec-flexbox#/id/r-3298703" target="_blank">
                Aligner sur l'axe secondaire</a></h3>

            <p>
                Avec <code class="line_code">align-items</code>, nous pouvons changer leur alignement sur l'axe secondaire. Il peut prendre ces valeurs :
            </p>

            <figure class="block_code">
                <pre><code>
#conteneur
{
    display: flex;
    jusitfy-content: center;
    align-items: stretch; /* les éléments sont étirés sur tout l'axe (par défaut) */
    align-items: flex-start; /* alignés au début */
    align-items: flex-end; /* alignés à la fin */
    align-items: center; /* alignés au centre */
    align-items: baseline; /* alignés sur la ligne de base */
}
                </code></pre>
            </figure>

            <p>
                <em>St Graal du développeur web, le centrage vertical et horizontal peut d'ailleurs être obtenu encore plus facilement. Dites que votre conteneur est une flexbox et établissez des marges automatiques sur les éléments à l'intérieur.<br/>
                <figure class="block_code">
                    <pre><code>
#conteneur
{
    display: flex;
}
.element
{
    margin : auto;
}
                    </code></pre>
                </figure>
                </em>
            </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/3298561-faites-votre-mise-en-page-avec-flexbox#/id/r-3298710" target="_blank">
                Aligner un seul élément</a></h3>

        <p>
            Il est possible de faire une exception pour un seul des éléments sur l'axe secondaire avec <code class="line_code">align-self</code> :
        </p>
        <figure class="block_code">
            <pre><code>
#conteneur
{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

.element:nth-child(2) /* On prend le deuxième bloc élément */
{
    align-self: flex-end;
}
            </code></pre>
        </figure>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/3298561-faites-votre-mise-en-page-avec-flexbox#/id/r-3298742" target="_blank">
                Répartir plusieurs lignes</a></h3>

        <p>
            Si vous avez plusieurs lignes dans votre Flexbox, vous pouvez choisir comment celles-ci seront réparties avec <code class="line_code">align-content</code> .Cette propriété n'a aucun effet s'il n'y a qu'une seule ligne dans la Flexbox. Prenons donc un cas de figure où nous avons plusieurs lignes : 
        </p>

        <figure class="block_code">
            <pre><code>
#conteneur
{
    display: flex;
    flex-wrap: wrap;
    align-content: stretch; /* les éléments s'étirent pour occuper tout l'espace (par défaut) */
    align-content: flex-start; /* les éléments sont placés au début */
    align-content: flex-end; /* les éléments sont placés à la fin */
    align-content: center; /* les éléments sont placés au centre */
    align-content: space-between; /* les éléments séparés avec de l'espace entre eux */
    align-content: space-around; /* idem avec de l'espace aux extrémités */
}
            </code></pre>
        </figure>
        <figure>
            <img src="../images/align_content.png" alt="align content"/>
        </figure>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/3298561-faites-votre-mise-en-page-avec-flexbox#/id/r-3298754" target="_blank">
                Rappel à l'ordre</a></h3>

            <p>
                Sans changer le code HTML, nous pouvons modifier l'ordre des éléments en CSS grâce à la propriété <code class="line_code">order</code>.
            </p>

            <figure class="block_code">
                <pre><code>
.element:nth-child(1)
{
    order: 3;
}

/element:nth-child(2)
{
     order: 1;
}

.element:nth-chil(3)
{
    order: 2;
}
                </code></pre>
            </figure>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/3298561-faites-votre-mise-en-page-avec-flexbox#/id/r-3298769" target="_blank">Faire grossir ou maigrir des éléments</a></h3>

            <p>
                Avec la propriété <code class="line_code">flex</code> , nous pouvons permettre à un élément de grossir pour occuper tout l'espace restant.<br/>
                Le nombre que vous indiquez à la propriété flex indique dans quelle mesure il peut grossir par rapport aux autres.
            </p>

            <figure class="block_code" figcaption="Le premier élément peut grossir deux fois plus que le second élément">
                <pre><code>
.element:nth-chil(1)
{
    flex: 2
}
.element:nth-child(2)
{
    flex: 1;
}
                </code></pre>
            </figure>

            <p>
                <em>La propriété <code class="line_code">flex</code> est en fait une super-propriété qui combine <code class="line_code">flex-grow</code> (capacité à grossir), <code class="line_code">flex-shrink</code> (capacité à maigrir) et <code class="line_code">flex-basis</code> (taille par défaut). J'utilise simplement flex comme je vous l'ai montré ici, mais si vous voulez en savoir plus, je vous invite à vous renseigner sur ces autres propriétés.</em>
            </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607616-utilisez-le-responsive-design-avec-les-media-queries#/id/video_Player_1" target="_blank">
        Responsive design avec les Media Queries</a></h1>

        <p>
            Ce sont des règles à appliquer pour changer le design d'un site en fonction des caractéristiques de l'écran ! Grâce à cette technique, nous pourrons créer un design qui s'adapte automatiquement à l'écran de chaque visiteur !
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607616-utilisez-le-responsive-design-avec-les-media-queries#/id/r-1612481">
            Appliquer un Media Query</a></h2>

        <p>
            Les media queries sont donc des règles qui indiquent quand on doit appliquer des propriétés CSS. Il y a deux façons de les utiliser :
            <ul>
                <li>en chargeant une feuille de style <code class="line_code">.css</code> différente en fonction de la règle (ex : « Si la résolution est inférieure à 1280px de large, charge le fichier <code class="line_code">petite_resolution.css</code>») ;</li>
                <li>en écrivant la règle directement dans le fichier <code class="line_code">.css</code> habituel (ex : « Si la résolution est inférieure à 1280px de large, charge les propriétés CSS ci-dessous »).</li>
            </ul>
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607616-utilisez-le-responsive-design-avec-les-media-queries#/id/r-1612477" target="_blank">
        Chargement d'une feuille de style différente</a></h3>
        <figure class="block_code">
                <pre><code>
&lt!DOCTYPE html&gt
&lthtml&gt
    &lthead&gt
        &ltmeta charset="utf-8" /&gt
        &ltlink rel="stylesheet" href="style.css" /&gt &gt!-- Pour tout le monde --&gt
        &lt link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite8resolution.css" /&gt &lt!-- résolution inférieur à 1280px --&gt
        &lttitle&gtMedia queries&lt/title&gt
    &lthead&gt
                </code></pre>
        </figure>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607616-utilisez-le-responsive-design-avec-les-media-queries#/id/r-1612480" target="_blank">
                Chergement des règles dans la feuille de style</a></h3>

        <p>
            Une autre technique, que je préfère personnellement pour des raisons pratiques, consiste à écrire ces règles dans le même fichier CSS que d'habitude.<br/>
            Dans ce cas, on écrit la règle dans le fichier <code class="line_code">.css</code> comme ceci :</p>
        <figure class="block_code">
                <pre><code>
@media screen and(maw-width: 1280px)
{
    /* Rédiger les propriétés CSS ici */
}
                </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607616-utilisez-le-responsive-design-avec-les-media-queries#/id/r-1607516" target="_blank">
            Quelques propriétés</a></h2>

        <p>
            <ul>
                <li><code class="line_code">color</code>: gestion de la couleur (en bits/pixel).</li>
                <li><code class="line_code">height</code>: hauteur de la zone d'affichage (fenêtre).</li>
                <li><code class="line_code">width</code>: largeur de la zone d'affichage (fenêtre).</li>
                <li><code class="line_code">device-height</code>: hauteur du périphérique.</li>
                <li><code class="line_code">device-width</code>: largeur du périphérique.</li>
                <li><code class="line_code">orientation</code>: orientation du périphérique (portrait ou paysage).</li>
                <li><code class="line_code">media</code>: type d'écran de sortie. Quelques-unes des valeurs possibles :
                    <ul>
                        <li><code class="line_code">screen</code> : écran « classique » ;</li>
                        <li><code class="line_code">handheld</code> : périphérique mobile ;</li>
                        <li><code class="line_code">print</code> : impression ;</li>
                        <li><code class="line_code">tv</code> : télévision ;</li>
                        <li><code class="line_code">projection</code> : projecteur ;</li>
                        <li><code class="line_code">all</code> : tous les types d'écran.</li>
                    </ul>
                </li>
            </ul>
        </p>
        <p>
            <em>On peut rajouter le préfixe <code class="line_code">min-</code> ou <code class="line_code">max-</code> devant la plupart de ces règles. Ainsi,<code class="line_code">min-width</code> signifie « Largeur minimale », <code class="line_code">max-height</code> « Hauteur maximale », etc.</em>
        </p>
        <p>Les règles peuvent être combinées à l'aide des mots suivants :
            <ul>
                <li><code class="line_code">only</code></li>
                <li><code class="line_code">and</code></li>
                <li><code class="line_code">not</code></li>
            </ul>
        </p>
        <p>
            Pour retirer un élément, rien de plus simple : nous utilisons la propriété <code class="line_code">display</code> à laquelle nous affectons la valeur <code class="line_code">none</code>.
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://css.developpez.com/tutoriels/css-guide-complet/" target="_blank">
        Cours sur les grids</a></h1>

        <p><a href="https://css.developpez.com/tutoriels/css-guide-complet/">ici !</a></p>

        <p>
            Résumer :
            <ul>
                <li><code class="line_code">.container{ display: grid | inline-grid }</code> : Définit l'élément en tant que container grid et établit un nouveau contexte de formatage de son contenu.</li>
                <li><figure class="block_code" figcaption="Le premier élément peut grossir deux fois plus que le second élément">
                <pre><code>
.container{
  grid-template-columns: 40px 50px auto 50px 40px;
  grid-template-rows: 25% 100px auto;
}
                </code></pre>
            </figure> : Définissent les colonnes et rangées de la grille via une liste de valeurs séparées par un espace. Peut être une longueur, un pourcentage, ou une fraction de l'espace libre dans la grille (via l'unité fr) ;
            </li>
            <li></li>
            </ul>
        </p>

        <img src="../images/5233737.png" alt="grid-template"/>

        <img src="../images/7367836783678.png" alt="grid-area"/>



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