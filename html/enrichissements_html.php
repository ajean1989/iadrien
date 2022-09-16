<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Enrichissements</title>
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

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1606851-ajoutez-des-tableaux#/id/video_Player_1" target="_blank">
        Ajouter des tableaux</a></h1>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1606851-ajoutez-des-tableaux#/id/r-1606764" target="_blank">
        Tableau simple</a></h2>

        <p>La première balise à connaître est <code class="line_code">&lttable&gt &lt/table&gt</code>. C'est cette balise qui permet d'indiquer le début et la fin d'un tableau.Cette balise est de <strong>type bloc</strong>, il faut donc la placer en dehors d'un paragraphe.<p>

        <figure class="block_code">
            <pre><code>
&lttable&gt                                 &lt!-- définit le tableau --&gt
&ltcaption&gtPassagers du vol 377&lt/caption&gt     &lt!-- titre du tableau --&gt

    &lttr&gt                                &lt!-- définit une ligne --&gt
        &ltth&gtNom&lt/th&gt                &lt!-- définit une ligne d'en tête --&gt
        &ltth&gtAge&lt/th&gt
        &ltth&gtPays&lt/th&gt
    &lt/tr&gt
    &lttr&gt
        &lttd&gtCarment&lt/td&gt            &lt!-- définit une cellule --&gt
        &lttd&gt33 ans&lt/td&gt
            &lttd&gtEspagne&lt/td&gt
        &lt/tr&gt
        &lttr&gt
        &lttd&gtCarment&lt/td&gt
        &lttd&gt33 ans&lt/td&gt
        &lttd&gtEspagne&lt/td&gt
    &lt/tr&gt
&lt/table&gt
            </code></pre>
        </figure>

    <p>
        Sachez que vous pouvez changer la position du titre avec la propriété CSS <code class="line_code">caption-side</code>qui peut prendre deux valeurs :
        <ul>
            <li><code class="line_code">top</code>:  le titre sera placé au-dessus du tableau (par défaut) ;</li>
            <li><code class="line_code">bottom</code>:  le titre sera placé au-dessous du tableau ;</li>
        </ul>
    </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1606851-ajoutez-des-tableaux#/id/r-1611749" target="blank">Propriétés CSS</a></h2>

        <figure class="block_code">
            <pre><code>
table
{
    border-collapse: collapse; /* ciolle les bordures entres-elles */
    caption-side: bottom;
}

td, th   /* Mettre une bordure sur les td et th */
{
    border: 1px solid black;
    vertical-align: center;   /* alignement vertical du texte des cellules
}
            </code></pre>
        </figure>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1606851-ajoutez-des-tableaux#/id/r-1606850" target="_blank">Tableau strucutré</a></h2>

    <p>
        Si votre tableau est assez gros, vous aurez tout intérêt à le découper en plusieurs parties. Pour cela, il existe des balises HTML qui permettent de définir les trois « zones » du tableau :
        <ul>
            <li>l'en-tête (en haut) : il se définit avec les balises <code class="line_code">&ltthead&gt&lt/thead&gt ;</code></li>
            <li>le corps (au centre) : il se définit avec les balises<code class="line_code">&lttbody&gt&lt/tbody&gt ;</code></li>
            <li>le pied du tableau (en bas) : il se définit avec les balises<code class="line_code">&lttfoot&gt&lt/tfoot&gt</code>.</li>
        </ul>
    <em> En fait, vous vous en servirez surtout si votre tableau est assez gros et que vous avez besoin de l'organiser plus clairement.Pour les « petits » tableaux, vous pouvez garder sans problème l'organisation plus simple que nous avons vue au début.</em>
    </p>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1606851-ajoutez-des-tableaux#/id/r-1611867" target="_blank">Fusions</a></h2>

    <p>
        Pour effectuer une fusion, on rajoute un attribut à la balise<code class="line_code">&lttd&gt</code>. Il faut savoir qu'il existe deux types de fusion :
        <ul>
            <li>La fusion de colonnes : c'est ce que je viens de faire dans cet exemple. La fusion s'effectue horizontalement. On utilisera l'attribut <code class="line_code">colspan</code>.</li>
            <li>La fusion de lignes : là, deux lignes seront groupées entre elles. La fusion s'effectuera verticalement. On utilisera l'attribut <code class="line_code">rowspan</code>.</li>
        </ul>
    </p>
    <figure class="block_code">
            <pre><code>
&lttd colspan="2"&gt  &lt!-- fusionne deux cellules colone. celle-ci avec celle d'après. --&gt
            </code></pre>
    </figure>

    <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607171-creez-des-formulaires#/id/video_Player_1" target="_blank">Créer des formulaires</a></h1>

    <p>
        Lorsqu'il vous prend subitement l'envie d'insérer un formulaire dans votre page HTML, vous devez pour commencer écrire une balise<code class="line_code">&ltform&gt&lt/form&gt</code>.<br/>
    <div class="em">Notez qu'il faut obligatoirement mettre des balises de type block à l'intérieur de votre formulaire si vous souhaitez y faire figurer du texte.</div>
    Vous devez ajouter deux attributs à la balise<code class="line_code">&ltform&gt</code>:
        <ul>
            <li><code class="line_code">method</code>: cet attribut indique par quel moyen les données vont être envoyées. Il existe deux solutions pour envoyer des données sur le Web :
                <ul>
                    <li><code class="line_code">method="get"</code>: c'est une méthode en général assez peu adaptée car elle est limitée à 255 caractères. La particularité vient du fait que les informations seront envoyées dans l'adresse de la page (http://…), mais ce détail ne nous intéresse pas vraiment pour le moment. La plupart du temps, je vous recommande d'utiliser l'autre méthode <code class="line_code">:post</code>.</li>
                    <li><code class="line_code">method="post"</code>: c'est la méthode la plus utilisée pour les formulaires car elle permet d'envoyer un grand nombre d'informations. Les données saisies dans le formulaire ne transitent pas par la barre d'adresse.</li>
                </ul></li>
            <li><code class="line_code">action</code>: c'est l'adresse de la page ou du programme qui va traiter les informations. Cette page se chargera de vous envoyer un e-mail avec le message si c'est ce que vous voulez, ou bien d'enregistrer le message avec tous les autres dans une base de données.</li>
        </ul>
    </p>
    <figure class="block_code">
        <pre><code>
&ltform method="post" action="traitement.php"&gt
    &ltp&gtTexte à l'intérieur du formulaire&lt/p&gt
&lt/form&gt
        </code></pre>
    </figure>

    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607171-creez-des-formulaires#/id/r-1606965" target="_blank">Les zones de saisie basiques</a></h2>

    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607171-creez-des-formulaires#/id/r-1611935" target="_blank">Zone de texte monoligne</a></h3>

        <p>
            Pour créer une zone de texte à une ligne, on doit écrire : <code class="line_code">&ltinput type="text" /&gt</code><br/>
            Pour donner un nom à un élément de formulaire, on utilise l'attribut <code class="line_code">name</code>.<br/>
            Pour insérer un libelé, on utilise la balise <code class="line_code">label</code>.<br/>
            <div class="em">Il faut lier le label à la zone de texte. Pour ce faire, on doit donner un nom à la zone de texte, non pas avec l'attribut <code class="line_code">name</code> mais avec l'attribut <code class="line_code">id</code>.<br/>
            Le <code class="line_code">name</code> , lui, réfère à la variable du formulaire que l’élément concerne. Ici, il n’y a qu’un seul élément qui pourra référer à la variable pseudo, <code class="line_code">name</code> et <code class="line_code">id</code> auront donc la même valeur.</div>
            Pour lier le label au champ, il faut lui donner un attribut <code class="line_code">for</code> qui a la même valeur que l'<code class="line_code">id</code> du champ… Le mieux est de le voir sur un exemple :
        </p>
        <figure class="block_code">
        <pre><code>
            &ltform method="post" action="traitement.php"&gt
                &ltp&gt
                    &ltlabel for="pseudo"&gtVotre pseudo&lt/label&gt : &ltinput type="text" name="pseudo" id="pseudo" /&gt
                &lt/p&gt               
            &lt/form&gt
        </code></pre>
        </figure>
        <p>
            On peut ajouter un certain nombre d'autres attributs à la balise<code class="line_code">&ltinput /&gt</code>pour personnaliser son fonctionnement :
            <ul>
                <li>On peut agrandir le champ avec <code class="line_code">size</code>.</li>
                <li>On peut limiter le nombre de caractères que l'on peut saisir avec <code class="line_code">maxlength</code>.</li>
                <li>On peut pré-remplir le champ avec une valeur par défaut à l'aide de <code class="line_code">value</code>.</li>
                <li>On peut donner une indication sur le contenu du champ avec <code class="line_code">placeholder</code>.</li>
            </ul>
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607171-creez-des-formulaires#/id/r-1611993" target="_blank">Zone de texte multiligne</a></h3>

        <figure class="block_code">
            <pre><code>
&ltform method="post" action="traitement.php"&gt
    &ltp&gt
        &ltlabel for="ameliorer"&gtComment améliorer notre site ?&lt/label&gt &ltbr /&gt
        &lttextarea name="ameliorer" id="ameliorer"&gt Pré-remplissage &lt/textarea&gt
    &lt/p&gt               
&lt/form&gt
            </code></pre>
        </figure>
        <p>
             on peut modifier la taille du <code class="line_code">&lttextarea&gt</code>de deux façons différentes :
             <ul>
                <li><strong>En CSS</strong> : il suffit d'appliquer les propriétés CSS <code class="line_code">widtht</code> et <code class="line_code">heightt</code> au <code class="line_code">&lttextarea&gt</code>.</li>
                <li><strong>Avec des attributs</strong> : on peut ajouter les attributs <code class="line_code">rows</code> et <code class="line_code">cols</code> à la balise <code class="line_code">&lttextarea&gt</code>. Le premier indique le nombre de lignes de texte qui peuvent être affichées simultanément, et le second le nombre de colonnes.</li>
            </ul>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607171-creez-des-formulaires#/id/r-1607042" target="_blank">Les zones de saisie enrichies</a></h2>

        <figure class="block_code">
            <pre><code>
&ltinput type="password" /&gt
&ltinput type="email" /&gt
&ltinput type="url" /&gt
&ltinput type="tel" /&gt
&ltinput type="number" /&gt &lt!-- attribut min, max, step --&gt
&ltinput type="range" /&gt  &lt!-- curseur, attribut min, max, step --&gt
&ltinput type="color" /&gt &lt!-- permet de saisir une couleur --&gt
&ltinput type="date" /&gt &lt!-- 09/12/1989&gt
&ltinput type="time" /&gt &lt!-- 13:54 --&gt
&ltinput type="week" /&gt 
&ltinput type="month" /&gt 
&ltinput type="datetime" /&gt &lt!-- date et heure (avec décalage horaire) --&gt
&ltinput type="datetime-local" /&gt &lt!-- sans décalage horaire --&gt
&ltinput type="search" /&gt &lt!-- champ de recherche --&gt
            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607171-creez-des-formulaires#/id/r-1607100" target="_blank">Les éléments d'options</a></h2>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607171-creez-des-formulaires#/id/r-1612091" target="_blank">Les cases à cocher</a></h3>

        <p>
            Nous allons réutiliser la balise <code class="line_code">&ltinput /&gt</code>, en spécifiant cette fois le type <code class="line_code">checkbox</code> : <code class="line_code">&ltinput type="checkbox" name="choix" /&gt</code><br/>
            Rajoutez un <code class="line_code">&ltlabel&gt</code> bien placé, et le tour est joué !<br/>
            Enfin, sachez que vous pouvez faire en sorte qu'une case soit cochée par défaut avec l'attribut <code class="line_code">checked</code> : <code class="line_code">&ltinput type="checkbox" name="choix" cheked /&gt</code> à noter que cheked n'a pas de valeur (checked="checked").
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607171-creez-des-formulaires#/id/r-1612107" target="_blank">Les zones d'options</a></h3>

        <p>
            Les zones d'options vous permettent de faire un choix (et un seul) parmi une liste de possibilités. Elles ressemblent un peu aux cases à cocher mais il y a une petite difficulté supplémentaire : elles doivent être organisées en groupes. Les options d'un même groupe possèdent le même nom (<code class="line_code">name</code>), mais chaque option doit avoir une valeur (<code class="line_code">value</code>) différente.<br/>
        </p>
        <figure class="block_code">
        <pre><code>
&ltinput type="radio" /&gt 
        </code></pre>
        </figure>
        <figure class="block_code">
        <pre><code>
&ltform method="post" action="traitement.php"&gt
    &ltp&gt
        Veuillez indiquer la tranche d'âge dans laquelle vous vous situez :&ltbr /&gt
            &ltinput type="radio" name="age" value="moins15" id="moins15" /&gt &ltlabel for="moins15"&gtMoins de 15 ans&lt/label&gt&gtbr /&lt
            &ltinput type="radio" name="age" value="medium15-25" id="medium15-25" /&gt &ltlabel for="medium15-25"&gt15-25 ans&lt/label&gt&ltbr /&gt
            &ltinput type="radio" name="age" value="medium25-40" id="medium25-40" /&gt &ltlabel for="medium25-40"&gt25-40 ans&lt/label>&gt&ltr /&gt
            &ltinput type="radio" name="age" value="plus40" id="plus40" /&gt &ltlabel for="plus40"&gtEncore plus vieux que ça ?!&lt/label&gt
    &lt/p&gt
&lt/form&gt
        </code></pre>
        </figure>
        <p>
            <em>L'attribut <code class="line_code">checked</code> est, là aussi, disponible pour sélectionner une valeur par défaut.</em>
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607171-creez-des-formulaires#/id/r-1612126" target="_blank">Les listes déroulantes</a></h3>

        <figure class="block_code">
        <pre><code>
&ltform method="post" action="traitement.php"&gt
    &ltp&gt
        &ltlabel for="pays"&gtDans quel pays habitez-vous?&lt/label&gt&ltbr /&gt
        &ltselect name="pays" id="pays"&gt
            &ltoption value="france" selected&gtFrance&lt/option&gt
            &ltoption value="espagne"&gtEspagne&lt/option&gt
            &ltoption value="italie"&gtItalie&lt/option&gt
            &ltoption value="autre"&gtAutre&lt/option&gt
        &lt/select&gt
    &lt/p&gt
&lt/form&gt
            </code></pre>
        </figure>
        <p>
            Si vous voulez qu'une option soit sélectionnée par défaut, utilisez cette fois l'attribut <code class="line_code">selected</code>.
        </p>
        <p>
            Vous pouvez aussi grouper vos options avec la balise <code class="line_code">&ltoptgroup&gt&lt/optgroup&gt</code>. Dans notre exemple, pourquoi ne pas séparer les pays en fonction de leur continent ?
        </p>

        <figure class="block_code">
            <pre><code>
&ltform method="post" action="traitement.php"&gt
    &ltp&gt
        &ltlabel for="pays"&gtDans quel pays habitez-vous?&lt/label&gt&ltbr /&gt
        &ltselect name="pays" id="pays"&gt
            &ltoptgroup label="Europe"&gt
                &ltoption value="france" selected&gtFrance&lt/option&gt
                &ltoption value="espagne"&gtEspagne&lt/option&gt
                &ltoption value="italie"&gtItalie&lt/option&gt
            &lt/optgroup&gt
            &ltoptgroup label="Autre continent"&gt
                &ltoption value="autre"&gtAutre&lt/option&gt
            &lt/optgroup&gt
        &lt/select&gt
    &lt/p&gt
&lt/form&gt
            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607171-creez-des-formulaires#/id/r-1607170" target="_blank">Finaliser et envoyer le formulaire</a></h2>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607171-creez-des-formulaires#/id/r-1612134" target="_blank">Regrouper les champs</h3></a>

        <p>
            Si votre formulaire grossit et comporte beaucoup de champs, il peut être utile de les regrouper au sein de plusieurs balises <code class="line_code">&ltfieldset&gt</code>. Chaque <code class="line_code">&ltfieldset&gt</code> peut contenir une légende avec la balise <code class="line_code">&ltlegend&gt</code>.
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607171-creez-des-formulaires#/id/r-1612138" target="_blank">Sélectionner automatiquement un champ</a></h3>

        <p>
            Vous pouvez placer automatiquement le curseur dans l'un des champs de votre formulaire avec l'attribut <code class="line_code">autofocus</code>. Dès que le visiteur chargera la page, le curseur se placera dans ce champ.
        </p>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607171-creez-des-formulaires#/id/r-1612147" target="_blank">Rendre un champ obligatoire</a></h3>

        <p>
            Vous pouvez faire en sorte qu'un champ soit obligatoire en lui donnant l'attribut <code class="line_code">required</code>.<br/>
            <em>On dispose de pseudo-formats en CSS pour changer le style des éléments requis (<code class="line_code">:required</code>) et invalides (<code class="line_code">:invalid</code>). N'oubliez pas non plus que vous disposez du pseudo-format <code class="line_code">:focus</code> pour changer l'apparence d'un champ lorsque le curseur se trouve à l'intérieur.</em>
        </p>
        <figure class="block_code">
            <pre><code>
&ltinput type="text name="prenom" id="prenom required autofocus /&gt"
            </code></pre>
        </figure>
        <figure class="block_code">
            <pre><code>
:required
{
    color: red;
}
            </code></pre>
        </figure>

        <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607171-creez-des-formulaires#/id/r-1612170" target="_blank">Le bouton d'envoi</a></h3>

        <p>
            Là encore, on utilise la balise <code class="line_code">&ltinput /&gt</code>. Elle existe en quatre versions :
            <ul>
                <li><code class="line_code">type="submit"</code>: le principal bouton d'envoi de formulaire. C'est celui que vous utiliserez le plus souvent. Le visiteur sera conduit à la page indiquée dans l'attribut <code class="line_code">action</code> du formulaire.</li>
                <li><code class="line_code">type="reset"</code>: remise à zéro du formulaire.</li>
                <li><code class="line_code">type="image"</code>: équivalent du bouton <code class="line_code">submit</code>, présenté cette fois sous forme d'image. Rajoutez l'attribut <code class="line_code">src</code>pour indiquer l'URL de l'image.</li>
                <li><code class="line_code">submittype="button"</code>: bouton générique, qui n'aura (par défaut) aucun effet. En général, ce bouton est géré en JavaScript pour exécuter des actions sur la page. Nous ne l'utiliserons pas ici.</li>
            </ul>
            <em>On peut changer le texte affiché à l'intérieur des boutons avec l'attribut <code class="line_code">value</code>.</em>
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>>CSS pour formulaire</h2>
        

        <figure class="block_code">
            <pre><code>
.form{
    &--main{
        border-style : none;    // Bordure de l'input
        background : $background-color;
        font-family: roboto-light;
        height : auto;
        resize: none;   // Empêche de se resizer

        &:focus{
            outline-style: dotted;  // Outline est le cadre du focus
            outline-width: 2px;
            outline-color : $primary-color;
        }
    }
}
            </code></pre>
        </figure>


        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607438-enrichissez-votre-site-avec-de-la-video-et-de-laudio#/id/video_Player_1" target="_blank">Enrichir son site avec de la vidéo et de l'audio</a></h1>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607438-enrichissez-votre-site-avec-de-la-video-et-de-laudio#/id/r-1607359" target="_blank">Insertion d'un élément audio</a></h2>

        <figure class="block_code">
            <pre><code>
&ltaudio src="musique.mp3"&gt&lt/audio&gt
            </code></pre>
        </figure>
        <p>
            Vous pouvez compléter la balise des attributs suivants :
            <ul>
                <li><code class="line_code">controls</code>: pour ajouter les boutons « Lecture », « Pause » et la barre de défilement. Cela peut sembler indispensable, et vous vous demandez peut-être pourquoi cela n'y figure pas par défaut, mais certains sites web préfèrent créer eux-mêmes leurs propres boutons et commander la lecture avec du JavaScript.</li>
                <li><code class="line_code">width</code>: pour modifier la largeur de l'outil de lecture audio</li>
                <li><code class="line_code">loop</code>: la musique sera jouée en boucle.</li>
                <li><code class="line_code">autoplay</code>: la musique sera jouée dès le chargement de la page. Évitez d'en abuser, c'est en général irritant d'arriver sur un site qui joue de la musique tout seul !</li>
                <li><code class="line_code">preload</code>: indique si la musique peut être préchargée dès le chargement de la page ou non. Cet attribut peut prendre les valeurs :
                    <ul>
                        <li><code class="line_code">auto</code>(par défaut) : le navigateur décide s'il doit précharger toute la musique, uniquement les métadonnées ou rien du tout.</li>
                        <li><code class="line_code">metadata</code>: charge uniquement les métadonnées (durée, etc.).</li>
                        <li><code class="line_code">none</code>: pas de préchargement. Utile si vous ne voulez pas gaspiller de bande passante sur votre site.</li>
                    </ul>
                </li>
            </ul>
            Pourquoi ouvrir la balise pour la refermer immédiatement après ?<br/>
            Cela vous permet d'afficher un message ou de proposer une solution de secours pour les navigateurs qui ne gèrent pas cette nouvelle balise.<br/>
            Et si le navigateur ne gère pas le MP3, comment faire ?<br/>
            Il faut proposer plusieurs versions du fichier audio. Dans ce cas, on va construire notre balise comme ceci :<br/>
        </p>
        <figure class="block_code">
            <pre><code>
&ltaudio controls&gt 
    &ltsource src="musique.mp3"&gt
    &ltsource src="musique.ogg"&gt
&lt/audio&gt
            </code></pre>
        </figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1607438-enrichissez-votre-site-avec-de-la-video-et-de-laudio#/id/r-1607437" target="_blank">Insertion d'une vidéo</a></h2>

        <figure class="block_code">
            <pre><code>
&ltvideo src="video.mp4"&gt&lt/video&gt
            </code></pre>
        </figure>

        <p>
            Rajoutons quelques attributs :
            <ul>
                <li><code class="line_code">poster</code>: image à afficher à la place de la vidéo tant que celle-ci n'est pas lancée. Par défaut, le navigateur prend la première image de la vidéo mais, comme il s'agit souvent d'une image noire ou d'une image peu représentative de la vidéo, je vous conseille d'en créer une ! Vous pouvez tout simplement faire une capture d'écran d'un moment de la vidéo.</li>
                <li><code class="line_code">controls</code>: pour ajouter les boutons « Lecture », « Pause » et la barre de défilement. Cela peut sembler indispensable, mais certains sites web préfèrent créer eux-mêmes leurs propres boutons et commander la lecture avec du JavaScript. En ce qui nous concerne, ce sera largement suffisant !</li>
                <li><code class="line_code">width</code>: pour modifier la largeur de la vidéo.</li>
                <li><code class="line_code">height</code>: pour modifier la hauteur de la vidéo.</li>
                <li><code class="line_code">loop</code>: la vidéo sera jouée en boucle.</li>
                <li><code class="line_code">autoplay</code>: la vidéo sera jouée dès le chargement de la page. Là encore, évitez d'en abuser, c'est en général irritant d'arriver sur un site qui lance quelque chose tout seul !</li>
                <li><code class="line_code">preload</code>: indique si la vidéo peut être préchargée dès le chargement de la page ou non. Cet attribut peut prendre les valeurs :
                    <ul>
                        <li><code class="line_code">auto</code>(par défaut) : le navigateur décide s'il doit précharger toute la vidéo, uniquement les métadonnées ou rien du tout.</li>
                        <li><code class="line_code">metadata</code>: charge uniquement les métadonnées (durée, dimensions, etc.).</li>
                        <li><code class="line_code">none</code>: pas de préchargement. Utile si vous souhaitez éviter le gaspillage de bande passante sur votre site.</li>
                    </ul>
                </li>
            </ul>
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Animations/Using_CSS_animations" target="_blank">Animation CSS</a></h1>

        <p>
            Très bonne doc <a href="https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Animations/Using_CSS_animations">ici</a> pour la propriété animation.
        </p>

        <p>
            Il existe aussi la propriété transition, <a href="https://developer.mozilla.org/fr/docs/Web/CSS/transition">ici</a>.
        </p>

        <p>
            Article pour cahcer un élément <a href="https://la-cascade.io/articles/cacher-des-elements-avec-css">ici</a>
        </p>.





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