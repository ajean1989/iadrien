<?php $title = 'Bases de données'; ?>
<?php ob_start(); ?>

        <h1 id=<?php $ini=0; echo $ini ; $ini++ ;?>><a href="./../documents/Intro_BDD.pdf" target="_blank">
        Big data</a></h1>

        <p>
        Le big data est un ensemble de données diverses dont le volume et la vélocité (vitesse d’arrivée des données) nécessite des capacités de traitement importantes.
        </p>

        <img src="../images/1849390n.jpg">

        <p>
            <ul>
                <li>Donnée : information brut (chiffres, lettres, caractère, …).    →   Base de donnée (case)</li>
                <li>Information : ensemble de données structurées et compréhensibles. (Adresse, n° sécurité sociale, …). Peut être vrai ou faux.   →  Système d’information (Requête)</li>
                <li>Connaissances : Règles, relations entre les informations. Algorithme / Modèle. Implique plusieurs informations.   →   Base de connaissances (Ensemble de règle dans une base de connaissance)</li>
                <li>Sagesse (wisedom) : Connaissance des connaissances. Méta-connaissance.<br/>
                Quand il y a un conflit entre deux connaissances, on utilise la méta-connaissance.</li>
            </ul>
        </p>

        <h1 id=<?php $ini=0; echo $ini ; $ini++ ;?>><a href="./../documents/RERP__Story_2_-_Introduction_base_de_donnes.pdf" target="_blank">
        Introduction aux bases de données</a></h1>

        <p>
            <ul>
                <li><strong>Base de donnée</strong> : collection de données utiles, structurées, semi-structurées ou non structurées indexées pour faciliter leur recherche. </li>
                <li><strong>Champ (attribut)</strong> : Caractéristique ou attribut unique (Tête de colonne).</li>
                <li><strong>Enregistrement (record)</strong> : Ensemble de valeur de champs associés (ligne).</li>
                <li><strong>Table</strong> : Collections d’enregistrement (données similaires).</li>
                <li><strong>Base de donnée relationnelle</strong> : Ensemble de tables reliées entre elles.</li>
            </ul>
        </p>

        <h2 id=<?php $ini=0; echo $ini ; $ini++ ;?>><a href="./../documents/RERP__Story_2_-_Introduction_base_de_donnes.pdf" target="_blank">
        Les types de données</a></h2>

        <p>
            <ul>
                <li><strong>Données structurées</strong> : Données formatées dans des champs prédéfinies afin d’être facilement interprété par un SGBDR. </li>
                <li><strong>Données semi-structurées</strong> : Ensemble de données structurées et non structurées.<br/>
                Par exemple image (non structurée) et ses métadonnées (structurée).</li>
                <li><strong>Données non structurées</strong> : Données brutes, qui peuvent contenir plusieurs informations à l’intérieur d’une donnée. exemple : Texte, image, JSON.</li>
            </ul>
        </p>

        <p>
            <ul>
                <li><strong>SGBD</strong> : Logiciel destiné au stockage et à la manipulation de bases de données. Plutôt sous-entendu relationnel.</li>
                <li><strong>Base de données relationnelle</strong> : Base de données qui contient des données structurées, regrouper par thème, et que l’on peut interconnecter par un champ commun.</li>
                <li><strong>SQL</strong> : Langage de programmation qui permet de communiquer avec une base de données relationnelle.</li>
                <li><strong>MySQL</strong> : SGBD (système de gestion de base de donnée) :  logiciel de gestion de base de donnée relationnelle.</li>
            </ul>
        </p>

        <p>
            <ul>
                <li><strong>Base de données non relationnelle = NoSQL (Not Only SQL)</strong> : Base de données qui peut accepter des données semi-structurées ou non-structurées. Il existe plusieurs configurations pour différents usages : Orientés colonnes, Orientées clé/valeur, Orientée "document", ... (détails <a href="./../documents/RERP__Story_2_-_Introduction_base_de_donnes.pdf">ici</a>)</li>
            </ul>
        </p>








<?php 
     $content = ob_get_clean(); 

    require_once('structure/layout.php');
?>
