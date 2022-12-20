<?php $title = 'Bases de données'; ?>
<?php ob_start(); ?>

<!---

à rajouter pour chaque imoort Notion : 

1. Supprimer le CSS html, body , a a visited

2.  <details open="">    ->     <details>

3. En cas de composition, supprimer <html></html> <body></body>

-->


 <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><style>
/* cspell:disable-file */
/* webkit printing magic: print all background colors */
html {
	-webkit-print-color-adjust: exact;
}
* {
	box-sizing: border-box;
	-webkit-print-color-adjust: exact;
}

.pdf-relative-link-path {
	font-size: 80%;
	color: #444;
}

h1,
h2,
h3 {
	letter-spacing: -0.01em;
	line-height: 1.2;
	font-weight: 600;
	margin-bottom: 0;
}

.page-title {
	font-size: 2.5rem;
	font-weight: 700;
	margin-top: 0;
	margin-bottom: 0.75em;
}

h1 {
	font-size: 1.875rem;
	margin-top: 1.875rem;
}

h2 {
	font-size: 1.5rem;
	margin-top: 1.5rem;
}

h3 {
	font-size: 1.25rem;
	margin-top: 1.25rem;
}

.source {
	border: 1px solid #ddd;
	border-radius: 3px;
	padding: 1.5em;
	word-break: break-all;
}

.callout {
	border-radius: 3px;
	padding: 1rem;
}

figure {
	margin: 1.25em 0;
	page-break-inside: avoid;
}

figcaption {
	opacity: 0.5;
	font-size: 85%;
	margin-top: 0.5em;
}

mark {
	background-color: transparent;
}

.indented {
	padding-left: 1.5em;
}

hr {
	background: transparent;
	display: block;
	width: 100%;
	height: 1px;
	visibility: visible;
	border: none;
	border-bottom: 1px solid rgba(55, 53, 47, 0.09);
}

img {
	max-width: 100%;
}

@media only print {
	img {
		max-height: 100vh;
		object-fit: contain;
	}
}

@page {
	margin: 1in;
}

.collection-content {
	font-size: 0.875rem;
}

.column-list {
	display: flex;
	justify-content: space-between;
}

.column {
	padding: 0 1em;
}

.column:first-child {
	padding-left: 0;
}

.column:last-child {
	padding-right: 0;
}

.table_of_contents-item {
	display: block;
	font-size: 0.875rem;
	line-height: 1.3;
	padding: 0.125rem;
}

.table_of_contents-indent-1 {
	margin-left: 1.5rem;
}

.table_of_contents-indent-2 {
	margin-left: 3rem;
}

.table_of_contents-indent-3 {
	margin-left: 4.5rem;
}

.table_of_contents-link {
	text-decoration: none;
	opacity: 0.7;
	border-bottom: 1px solid rgba(55, 53, 47, 0.18);
}

table,
th,
td {
	border: 1px solid rgba(55, 53, 47, 0.09);
	border-collapse: collapse;
}

table {
	border-left: none;
	border-right: none;
}

th,
td {
	font-weight: normal;
	padding: 0.25em 0.5em;
	line-height: 1.5;
	min-height: 1.5em;
	text-align: left;
}

th {
	color: rgba(55, 53, 47, 0.6);
}

ol,
ul {
	margin: 0;
	margin-block-start: 0.6em;
	margin-block-end: 0.6em;
}

li > ol:first-child,
li > ul:first-child {
	margin-block-start: 0.6em;
}

ul > li {
	list-style: disc;
}

ul.to-do-list {
	text-indent: -1.7em;
}

ul.to-do-list > li {
	list-style: none;
}

.to-do-children-checked {
	text-decoration: line-through;
	opacity: 0.375;
}

ul.toggle > li {
	list-style: none;
}

ul {
	padding-inline-start: 1.7em;
}

ul > li {
	padding-left: 0.1em;
}

ol {
	padding-inline-start: 1.6em;
}

ol > li {
	padding-left: 0.2em;
}

.mono ol {
	padding-inline-start: 2em;
}

.mono ol > li {
	text-indent: -0.4em;
}

.toggle {
	padding-inline-start: 0em;
	list-style-type: none;
}

/* Indent toggle children */
.toggle > li > details {
	padding-left: 1.7em;
}

.toggle > li > details > summary {
	margin-left: -1.1em;
}

.selected-value {
	display: inline-block;
	padding: 0 0.5em;
	background: rgba(206, 205, 202, 0.5);
	border-radius: 3px;
	margin-right: 0.5em;
	margin-top: 0.3em;
	margin-bottom: 0.3em;
	white-space: nowrap;
}

.collection-title {
	display: inline-block;
	margin-right: 1em;
}

.simple-table {
	margin-top: 1em;
	font-size: 0.875rem;
	empty-cells: show;
}
.simple-table td {
	height: 29px;
	min-width: 120px;
}

.simple-table th {
	height: 29px;
	min-width: 120px;
}

.simple-table-header-color {
	background: rgb(247, 246, 243);
	color: black;
}
.simple-table-header {
	font-weight: 500;
}

time {
	opacity: 0.5;
}

.icon {
	display: inline-block;
	max-width: 1.2em;
	max-height: 1.2em;
	text-decoration: none;
	vertical-align: text-bottom;
	margin-right: 0.5em;
}

img.icon {
	border-radius: 3px;
}

.user-icon {
	width: 1.5em;
	height: 1.5em;
	border-radius: 100%;
	margin-right: 0.5rem;
}

.user-icon-inner {
	font-size: 0.8em;
}

.text-icon {
	border: 1px solid #000;
	text-align: center;
}

.page-cover-image {
	display: block;
	object-fit: cover;
	width: 100%;
	max-height: 30vh;
}

.page-header-icon {
	font-size: 3rem;
	margin-bottom: 1rem;
}

.page-header-icon-with-cover {
	margin-top: -0.72em;
	margin-left: 0.07em;
}

.page-header-icon img {
	border-radius: 3px;
}

.link-to-page {
	margin: 1em 0;
	padding: 0;
	border: none;
	font-weight: 500;
}

p > .user {
	opacity: 0.5;
}

td > .user,
td > time {
	white-space: nowrap;
}

input[type="checkbox"] {
	transform: scale(1.5);
	margin-right: 0.6em;
	vertical-align: middle;
}

p {
	margin-top: 0.5em;
	margin-bottom: 0.5em;
}

.image {
	border: none;
	margin: 1.5em 0;
	padding: 0;
	border-radius: 0;
	text-align: center;
}

.code,
code {
	background: rgba(135, 131, 120, 0.15);
	border-radius: 3px;
	padding: 0.2em 0.4em;
	border-radius: 3px;
	font-size: 85%;
	tab-size: 2;
}

code {
	color: #eb5757;
}

.code {
	padding: 1.5em 1em;
}

.code-wrap {
	white-space: pre-wrap;
	word-break: break-all;
}

.code > code {
	background: none;
	padding: 0;
	font-size: 100%;
	color: inherit;
}

blockquote {
	font-size: 1.25em;
	margin: 1em 0;
	padding-left: 1em;
	border-left: 3px solid rgb(55, 53, 47);
}

.bookmark {
	text-decoration: none;
	max-height: 8em;
	padding: 0;
	display: flex;
	width: 100%;
	align-items: stretch;
}

.bookmark-title {
	font-size: 0.85em;
	overflow: hidden;
	text-overflow: ellipsis;
	height: 1.75em;
	white-space: nowrap;
}

.bookmark-text {
	display: flex;
	flex-direction: column;
}

.bookmark-info {
	flex: 4 1 180px;
	padding: 12px 14px 14px;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}

.bookmark-image {
	width: 33%;
	flex: 1 1 180px;
	display: block;
	position: relative;
	object-fit: cover;
	border-radius: 1px;
}

.bookmark-description {
	color: rgba(55, 53, 47, 0.6);
	font-size: 0.75em;
	overflow: hidden;
	max-height: 4.5em;
	word-break: break-word;
}

.bookmark-href {
	font-size: 0.75em;
	margin-top: 0.25em;
}

.sans { font-family: ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"; }
.code { font-family: "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace; }
.serif { font-family: Lyon-Text, Georgia, ui-serif, serif; }
.mono { font-family: iawriter-mono, Nitti, Menlo, Courier, monospace; }
.pdf .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK JP'; }
.pdf:lang(zh-CN) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK SC'; }
.pdf:lang(zh-TW) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK TC'; }
.pdf:lang(ko-KR) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK KR'; }
.pdf .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
.pdf:lang(zh-CN) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
.pdf:lang(zh-TW) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
.pdf:lang(ko-KR) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
.pdf .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK JP'; }
.pdf:lang(zh-CN) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK SC'; }
.pdf:lang(zh-TW) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK TC'; }
.pdf:lang(ko-KR) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK KR'; }
.pdf .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
.pdf:lang(zh-CN) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
.pdf:lang(zh-TW) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
.pdf:lang(ko-KR) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
.highlight-default {
	color: rgba(55, 53, 47, 1);
}
.highlight-gray {
	color: rgba(120, 119, 116, 1);
	fill: rgba(120, 119, 116, 1);
}
.highlight-brown {
	color: rgba(159, 107, 83, 1);
	fill: rgba(159, 107, 83, 1);
}
.highlight-orange {
	color: rgba(217, 115, 13, 1);
	fill: rgba(217, 115, 13, 1);
}
.highlight-yellow {
	color: rgba(203, 145, 47, 1);
	fill: rgba(203, 145, 47, 1);
}
.highlight-teal {
	color: rgba(68, 131, 97, 1);
	fill: rgba(68, 131, 97, 1);
}
.highlight-blue {
	color: rgba(51, 126, 169, 1);
	fill: rgba(51, 126, 169, 1);
}
.highlight-purple {
	color: rgba(144, 101, 176, 1);
	fill: rgba(144, 101, 176, 1);
}
.highlight-pink {
	color: rgba(193, 76, 138, 1);
	fill: rgba(193, 76, 138, 1);
}
.highlight-red {
	color: rgba(212, 76, 71, 1);
	fill: rgba(212, 76, 71, 1);
}
.highlight-gray_background {
	background: rgba(241, 241, 239, 1);
}
.highlight-brown_background {
	background: rgba(244, 238, 238, 1);
}
.highlight-orange_background {
	background: rgba(251, 236, 221, 1);
}
.highlight-yellow_background {
	background: rgba(251, 243, 219, 1);
}
.highlight-teal_background {
	background: rgba(237, 243, 236, 1);
}
.highlight-blue_background {
	background: rgba(231, 243, 248, 1);
}
.highlight-purple_background {
	background: rgba(244, 240, 247, 0.8);
}
.highlight-pink_background {
	background: rgba(249, 238, 243, 0.8);
}
.highlight-red_background {
	background: rgba(253, 235, 236, 1);
}
.block-color-default {
	color: inherit;
	fill: inherit;
}
.block-color-gray {
	color: rgba(120, 119, 116, 1);
	fill: rgba(120, 119, 116, 1);
}
.block-color-brown {
	color: rgba(159, 107, 83, 1);
	fill: rgba(159, 107, 83, 1);
}
.block-color-orange {
	color: rgba(217, 115, 13, 1);
	fill: rgba(217, 115, 13, 1);
}
.block-color-yellow {
	color: rgba(203, 145, 47, 1);
	fill: rgba(203, 145, 47, 1);
}
.block-color-teal {
	color: rgba(68, 131, 97, 1);
	fill: rgba(68, 131, 97, 1);
}
.block-color-blue {
	color: rgba(51, 126, 169, 1);
	fill: rgba(51, 126, 169, 1);
}
.block-color-purple {
	color: rgba(144, 101, 176, 1);
	fill: rgba(144, 101, 176, 1);
}
.block-color-pink {
	color: rgba(193, 76, 138, 1);
	fill: rgba(193, 76, 138, 1);
}
.block-color-red {
	color: rgba(212, 76, 71, 1);
	fill: rgba(212, 76, 71, 1);
}
.block-color-gray_background {
	background: rgba(241, 241, 239, 1);
}
.block-color-brown_background {
	background: rgba(244, 238, 238, 1);
}
.block-color-orange_background {
	background: rgba(251, 236, 221, 1);
}
.block-color-yellow_background {
	background: rgba(251, 243, 219, 1);
}
.block-color-teal_background {
	background: rgba(237, 243, 236, 1);
}
.block-color-blue_background {
	background: rgba(231, 243, 248, 1);
}
.block-color-purple_background {
	background: rgba(244, 240, 247, 0.8);
}
.block-color-pink_background {
	background: rgba(249, 238, 243, 0.8);
}
.block-color-red_background {
	background: rgba(253, 235, 236, 1);
}
.select-value-color-pink { background-color: rgba(245, 224, 233, 1); }
.select-value-color-purple { background-color: rgba(232, 222, 238, 1); }
.select-value-color-green { background-color: rgba(219, 237, 219, 1); }
.select-value-color-gray { background-color: rgba(227, 226, 224, 1); }
.select-value-color-opaquegray { background-color: rgba(255, 255, 255, 0.0375); }
.select-value-color-orange { background-color: rgba(250, 222, 201, 1); }
.select-value-color-brown { background-color: rgba(238, 224, 218, 1); }
.select-value-color-red { background-color: rgba(255, 226, 221, 1); }
.select-value-color-yellow { background-color: rgba(253, 236, 200, 1); }
.select-value-color-blue { background-color: rgba(211, 229, 239, 1); }

.checkbox {
	display: inline-flex;
	vertical-align: text-bottom;
	width: 16;
	height: 16;
	background-size: 16px;
	margin-left: 2px;
	margin-right: 5px;
}

.checkbox-on {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22%2358A9D7%22%2F%3E%0A%3Cpath%20d%3D%22M6.71429%2012.2852L14%204.9995L12.7143%203.71436L6.71429%209.71378L3.28571%206.2831L2%207.57092L6.71429%2012.2852Z%22%20fill%3D%22white%22%2F%3E%0A%3C%2Fsvg%3E");
}

.checkbox-off {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20x%3D%220.75%22%20y%3D%220.75%22%20width%3D%2214.5%22%20height%3D%2214.5%22%20fill%3D%22white%22%20stroke%3D%22%2336352F%22%20stroke-width%3D%221.5%22%2F%3E%0A%3C%2Fsvg%3E");
}
	
</style></head><article id="14560a72-9482-4da6-b1e8-6001859aeb3d" class="page sans"><header><img class="page-cover-image" src="https://www.notion.so/images/page-cover/woodcuts_1.jpg" style="object-position:center 90%"/><h1 id=<?php $ini=0; echo $ini ; $ini++ ;?> class="page-title">Story 10 - Merise - MCD - MLD - MPD</h1></header><div class="page-body"><h1 id="32f747b7-0f3a-4f91-9ca0-54151344367f" class="block-color-orange_background">Contexte</h1><p id="b8b4578a-6393-4e32-b2f9-2b3460beaa1d" class=""><mark class="highlight-blue">Concevoir et modéliser des bases de données relationnelles. Comprendre les différentes étapes de la phase de modélisation.</mark></p><h1 id="bb1e655f-9893-4a1c-8b20-573cbd94463e" class="block-color-orange_background">Mots clés</h1><ul id="a3f322f2-4e30-4e88-bd54-80c6b19967f2" class="toggle"><li> <details><summary><strong>Merise</strong></summary><p id="4627a0ea-ce64-4ac5-9dcd-a61dac95384a" class=""><em>Méthode d’Etude et de Réalisation Informatique pour les Systèmes d’Entreprise</em>.</p><blockquote id="cc479489-1441-4baa-b73c-ad1f294b5b22" class="">Méthode d’analyse et de conception de base de donnée basé le principe de la séparation des données et des traitements qui contient 3 modèles (MCD - MLD - MPD)</blockquote></details></li></ul><ul id="bf3ff5b4-fdff-4221-96f6-4a11f57b1b78" class="toggle"><li> <details><summary><strong>MCD</strong></summary><p id="c5c9f89b-c698-4174-8af9-5729e2b1e65d" class=""><em>Modèle Conceptuel de Données</em>. Dit aussi modèle entité-association. </p><blockquote id="fbe24992-9df7-4cb5-9aa7-a3a6b8f189d6" class="">C’est un diagramme du SI créé à partir des termes sémantiques qui la définissent. Ce diagramme se compose de 7 composants :

1. L’entité : Élément utilisé par le SI. Contient des propriétés (classe)
2. Occurrence : c’est une ligne, un enregistrement ou record. Une instance (objet)
3. L’association : Lien sémantique entre deux entités (verbe à l’infinitif) 
4. La dimension : C’est le nombre de “patte” de l’association. Le nombre d’entité qu’elle relie. 0,n = card comprise entre 0 et n.
5. La cardinalité : Contrainte que l’on écrit dans notre modèle. valeur min et max du nombre d’occurrence.
6. La propriété : Élément qui compose l’entité (attribut)
7. L’identifiant : ensemble d’attribut garantissant l’unicité (clé primaire).</blockquote><figure id="92acee3e-1e1c-4699-86d6-cdea383ca663" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/mcd.png"><img style="width:4580px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/mcd.png"/></a></figure><p id="536fd72e-b661-4456-bc71-1cc5c762d6cb" class="">C&#x27;est un modèle de la méthode Merise. Son équivalent UML est le diagramme des classes MOO.</p><p id="b6d03b8f-0fa4-4d25-b677-448e12d7d051" class=""><strong>Le MCD est la traduction sémantique du SI.</strong></p><p id="fa12d8a5-e7d5-4ad7-b5ee-74de49aa8b2a" class="">Le but du MCD est de décrire de manière formelle les données d&#x27;un système d&#x27;information (SI). Le MCD décrit la <strong>sémantique</strong>, c’est-à-dire le <strong>sens</strong>, attachée à ces données et à leurs rapports, et non l’utilisation qui en est faite.</p><p id="9eac2ab2-e9f5-43b7-8e93-e4c8e286c973" class="">Ce contenu est d&#x27;un niveau d&#x27;invariance élevé. C&#x27;est la partie la plus stable du SI, dite <strong>statique</strong>. A ce stade, on est uniquement dans la description des données du SI. Ce schéma doit est compris par un non initié à l&#x27;informatique, il est fait pour être lu, discuté et modifié.</p><p id="6cffa5a4-ea68-4083-acec-4549069add11" class="">C&#x27;est ce modèle qui va être la base du développement futur de l&#x27;application. S&#x27;il est erroné, il va entraîné des erreurs de réalisation qui coûteront cher au développement.
</p></details></li></ul><ul id="69b66ec9-4551-4ce5-8372-3cfa47a0aae4" class="toggle"><li> <details><summary><strong>MLD</strong></summary><p id="ff22b602-a6cb-44db-a49b-6df1d6f32119" class=""><em>Modèle Logique de Données</em>.</p><blockquote id="e9a883dc-7e87-422b-b930-11d8f64f0831" class="">Transformation du MCD en structure de BDD (tables, attributs, clés, …)</blockquote><figure id="3f463820-fa4b-4043-9c87-13c338fe3c85" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/mld_cours.png"><img style="width:3499px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/mld_cours.png"/></a></figure><p id="35c6d001-4e48-4270-8ae0-dd98c5b135aa" class="">Le Modèle Logique de Données est la transformation du MCD en un ensemble de tables.
Une entité devient une table. Un identifiant devient la clef primaire. Une propriété devient un champ.
Cela va nous obliger à effectuer un travail de traduction pour construire notre base de données en fonction de la technologie des SGBDR (Système de Gestion de Bases de Données Relationnel) qui possèdent chacun leur propre modèle.
C&#x27;est à cette étape, qu&#x27;on étudie les relations entre les tables. Suite à cette observation, nous corrigeons les imperfections en revenant sur le MCD si besoin. C&#x27;est ce que l&#x27;on va faire dans ce chapitre.

Règles de transformation : </p><ul id="6e92583b-9b35-4e65-b9dc-607fc4961019" class="bulleted-list"><li style="list-style-type:disc">Toute entité est transformée en table.</li></ul><ul id="1cc3594e-7d9d-4d51-81f5-cf64ecc48e2e" class="bulleted-list"><li style="list-style-type:disc">Une propriété est transformée en champ de la table.</li></ul><ul id="927e0803-244d-4923-a3e4-add9cf32a9ee" class="bulleted-list"><li style="list-style-type:disc">Un identifiant est transformé en une clé primaire.</li></ul><ul id="f482f01e-b657-4a3f-b958-62f81329218e" class="bulleted-list"><li style="list-style-type:disc">Le nom des tables et champs prend le nom des entités et propriétés. Il est transcrit presque à l&#x27;identique. Seul l&#x27;espace est transformé en underscore (_).</li></ul><ul id="e4298be8-b54a-4d8d-8425-34c50c2a659f" class="bulleted-list"><li style="list-style-type:disc">Une association devient une relation entre les tables :
<ul id="0ea7d684-ada5-4619-a6f5-959ac729591b" class="bulleted-list"><li style="list-style-type:circle">un-à-plusieurs : Se traduit en ajoutant une clé étrangère dans la table qui est du côté « plusieurs ». Cette clé étrangère référence la clé primaire de la table qui est du côté « un ».</li></ul><ul id="55f7bcf9-21c3-4d12-a3c2-dedf6856dada" class="bulleted-list"><li style="list-style-type:circle">plusieurs-à-plusieurs : La solution est d’ajouter une table intermédiaire en plus composée des deux clés étrangères.</li></ul><ul id="62e567ff-0b1f-420d-8c18-858198169eeb" class="bulleted-list"><li style="list-style-type:circle">un-à-un : clé étrangère + contrainte d’unicité.</li></ul><ul id="5450688e-766c-4425-a94c-c02579ffec6f" class="bulleted-list"><li style="list-style-type:circle">card min = 1 ⇒ <code>NOT NULL</code> en sql </li></ul><ul id="99a17966-4808-43e1-aeff-5c3a313000c9" class="bulleted-list"><li style="list-style-type:circle">Association ternaire : création d’une nouvelle table.
<figure id="2e162c04-791e-434e-9263-540f39f67f96" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/ternaire.png"><img style="width:374px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/ternaire.png"/></a></figure></li></ul><figure id="e1743e4a-8f82-4d62-9300-4f2b46f3b4a1" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/association_ternaire.png"><img style="width:389px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/association_ternaire.png"/></a></figure></li></ul><p id="ab3a7e6d-af6d-4de2-9dd2-39ce0269ad60" class="">
</p></details></li></ul><ul id="f24eb2ab-d4f6-4696-845c-d22f078e58b3" class="toggle"><li> <details><summary><strong>MPD</strong></summary><p id="07629560-3c60-4a90-a830-0c1647a5ddc8" class=""><em>Modèle Physique de Données</em>.</p><blockquote id="89239f2a-71ec-49ed-8979-c433a9b247af" class="">C’est la transformation du MLD en langage de informatique SQL. </blockquote><p id="648a4d8b-3db1-4e6d-bd36-29db545d9c45" class="">Le Modèle Physique de Données est la transformation du MLD dans le format d&#x27;une base de données. Le résultat final sera un script SQL qui permettra de créer la base dans le SGBDR. Ici va apparaître la valeur et longueur des données. Le résultat est beaucoup moins lisible.</p><pre id="d5898e7e-3881-4a30-adc7-7c3224adf88f" class="code"><code>CREATE TABLE Adresse(
   numéro INTEGER,
   nom_de_rue VARCHAR(50),
   ville VARCHAR(50),
   code_postal VARCHAR(6),
   PRIMARY KEY(numéro, nom_de_rue, ville, code_postal)
);

CREATE TABLE Matière(
   nom VARCHAR(20),
   PRIMARY KEY(nom)
);

...</code></pre></details></li></ul><p id="a76ed6dc-c7f1-48fe-9fe3-aa86ac2a7fc7" class="">
</p><ul id="db5bcbf4-2202-454c-a67a-e69d7b96d150" class="toggle"><li> <details><summary><strong>Clé primaire</strong></summary><blockquote id="e43f31bd-37e3-4019-bce4-15d52c00c08a" class="">Un ou plusieurs champs qui identifie de manière unique un enregistrement. Obligatoire pour une table.</blockquote></details></li></ul><ul id="80b67683-e68e-4f89-8345-1848016da747" class="toggle"><li> <details><summary><strong>Clé étrangère</strong></summary><blockquote id="0ab6d495-dcf3-4144-bef2-f8621650365b" class="">Clé primaire représentée sur une seconde table pour former une relation. </blockquote></details></li></ul><ul id="4c0b9d53-3ec8-4d71-bcbc-35b9868cd15d" class="toggle"><li> <details><summary><strong>Cardinalité</strong></summary><blockquote id="076615ac-deeb-4d39-bc81-acc9b58455b0" class="">Nombre d’occurrence lié à une association. Composé d’une valeur minimale et maximale.</blockquote><figure id="9e704c1d-ca8a-4c71-80e6-3a3113d940a7" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/card.png"><img style="width:583px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/card.png"/></a></figure></details></li></ul><ul id="2494cbc1-292f-40df-8538-f994c24780d4" class="toggle"><li> <details><summary><strong>Héritage</strong></summary><blockquote id="04751c73-3fcb-47d1-8c2d-08cf57b0b139" class="">C’est une entité dont les propriétés se propagent à d’autres entité. </blockquote><figure id="6bf8080d-9063-496b-9aba-5ed550bad5fc" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/heritage.png"><img style="width:640px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/heritage.png"/></a></figure></details></li></ul><ul id="95da3cae-fdc1-41d5-ba90-049e99845d12" class="toggle"><li> <details><summary><strong>Dictionnaire de données </strong></summary><blockquote id="ee9c31a0-4f03-4ae7-83d7-f544b5048de0" class="">C’est un tableau qui contient toutes les données (attributs) ainsi que quelques propriétés les concernant. Précédant le MCD.</blockquote><p id="39a381d6-194c-4d82-8a3d-7c91ba1b0231" class="">Le dictionnaire des données est un document (tableau) qui regroupe toutes les données que vous aurez à conserver dans votre base (et qui figureront donc dans le MCD). Pour chaque donnée, il indique :
</p><ul id="919befbf-7c30-43c1-99ff-1e5dd0a854e4" class="bulleted-list"><li style="list-style-type:disc">le <strong>code mnémonique :</strong> il s&#x27;agit d&#x27;un libellé désignant une donnée (par exemple «titre_l» pour le titre d&#x27;un livre) ;</li></ul><ul id="52aef266-b213-4b7d-9aaf-8fd983446114" class="bulleted-list"><li style="list-style-type:disc">la <strong>désignation :</strong> il s&#x27;agit d&#x27;une mention décrivant ce à quoi la donnée correspond (par exemple «titre du livre») ;</li></ul><ul id="7103ac73-7c58-4ed9-8018-4c104404a5b0" class="bulleted-list"><li style="list-style-type:disc">le <strong>type de donnée :</strong><ul id="94c1829b-4610-4960-b79b-e8a76d1ffa6c" class="bulleted-list"><li style="list-style-type:circle"><strong>A </strong>ou<strong> Alphabétique :</strong> lorsque la donnée est uniquement composée de caractères alphabétiques (de &#x27;A&#x27; à &#x27;Z&#x27; et de &#x27;a&#x27; à &#x27;z&#x27;),</li></ul><ul id="2f41bb4b-17f1-4c24-9097-913f8ed02e43" class="bulleted-list"><li style="list-style-type:circle"><strong>N </strong>ou<strong> Numérique :</strong> lorsque la donnée est composée uniquement de nombres (entiers ou réels),</li></ul><ul id="12ad84d3-32b1-4839-80c5-98ddb3b2a57b" class="bulleted-list"><li style="list-style-type:circle"><strong>AN </strong>ou<strong> Alphanumérique :</strong> lorsque la donnée peut être composée à la fois de caractères alphabétiques et numériques,</li></ul><ul id="79d64292-60e1-4bf7-b7a9-c56fc2e036a5" class="bulleted-list"><li style="list-style-type:circle"><strong>Date :</strong> lorsque la donnée est une date (au format AAAA-MM-JJ),</li></ul><ul id="f02fea43-1df0-43a8-9c09-e864f4ab966e" class="bulleted-list"><li style="list-style-type:circle"><strong>Booléen :</strong> Vrai ou Faux ;</li></ul></li></ul><ul id="4e429231-b3c5-4be2-97c2-323d9a7d4b10" class="bulleted-list"><li style="list-style-type:disc">la <strong>taille :</strong> elle s&#x27;exprime en nombre de caractères ou de chiffres.</li></ul><ul id="2c09666c-9ef1-4ced-97fc-7840af7ca487" class="bulleted-list"><li style="list-style-type:disc">La <strong>nature </strong>: donnée calculée (C) ou non (NC)( valeur entrée par exemple)</li></ul><ul id="3dafaf46-5496-4dba-a96f-3ad536747de5" class="bulleted-list"><li style="list-style-type:disc">Les <strong>contraintes d’intégrité</strong> :  par exemple variable &lt;0 / champ obligatoire / … </li></ul><ul id="7fdfe70b-fb92-48a4-abd5-060c24f4107e" class="bulleted-list"><li style="list-style-type:disc">parfois des <strong>remarques</strong> ou <strong>observations</strong> complémentaires.</li></ul></details></li></ul><ul id="42990596-ce24-4ba8-a58e-3fc0326f40ab" class="toggle"><li> <details><summary><a href="https://fr.wikipedia.org/wiki/D%C3%A9pendance_fonctionnelle"><strong>Dépendance fonctionnelle </strong></a></summary><blockquote id="01ba34bb-fa61-4c2c-bf51-df1511f63444" class="">C’est lorsqu’un ou plusieurs attributs dans une table (clé(s) primaire(s)) permettent d’en déterminer un autre unique de manière unique.</blockquote><figure id="c6a6aa2c-62fd-4477-857f-e9422a434838" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/DF.png"><img style="width:790px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/DF.png"/></a></figure><p id="9b0100ed-fd91-4bff-badd-0a6a6fe9ce42" class="">Soit deux propriétés (ou données) P1 et P2. On dit que P1 et P2 sont reliées par une <strong>dépendance fonctionnelle</strong> (DF) si et seulement si une <strong>occurrence</strong> (ou valeur) de P1 permet de connaître une et une seule occurrence de P2.</p><p id="0de02a47-1092-479d-9290-5a6cf514106c" class="">card 0,1</p><p id="83fb07ac-6978-4dad-a156-67b46f5fbc54" class="">
</p><p id="d4712716-d8b1-4e14-911d-2162894d84e0" class="">Une donnée B dépend fonctionnellement (ou est en dépendance fonctionnelle) d’une donnée A lorsque la connaissance de la valeur de la donnée A nous permet
la connaissance <strong>d’une et au maximum une seule</strong> valeur de la donnée B.</p></details></li></ul><ul id="8e680bde-1496-45d4-8cba-26bd252a5758" class="toggle"><li> <details><summary><strong>CIF (</strong><strong><em>Contrainte d’intégrité fonctionnelle)</em></strong></summary><p id="abfa2cd5-e88c-4ae2-a214-c9a74c2d850d" class=""><em>Contrainte d’intégrité fonctionnelle</em>.</p><blockquote id="69e9329d-cc98-4e39-af33-f9caa17d8b8c" class="">C’est lorsqu’une entité permettent d’en déterminer une autre unique.
C’est une dépendance fonctionnelle entre des propriétés de plusieurs entités. </blockquote><p id="e7264fb2-9eca-4e65-8523-6d45e5634ea6" class="">Garantie la cohérence fonctionnelle des données. </p><h3 id="c73024e8-b858-4f2a-ae2e-89fa1b28b01f" class="">Exemples 1</h3><figure id="6c8e0df4-d185-4b99-99e9-ed759bcd7a26" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/cif2.png"><img style="width:638px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/cif2.png"/></a></figure><p id="6fa01f4e-5ba0-4bca-92a4-271bbf370bf7" class="">Cela part d’une dépendance fonctionnelle. Un véhicule implique une seule personne. </p><p id="4c9b50e8-ad60-4f54-bf8e-3ff34adb27b8" class="">C’est une dépendance fonctionnelle entre des propriétés de plusieurs entités.</p><h3 id="1a18f9e5-0463-4b0f-87ae-7132fa9354b8" class="">Exemples 2</h3><figure id="b81e6ef9-e302-4300-935c-5ef00ebaacd4"><a href="https://www.youtube.com/watch?v=6IYkWAPERN8" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">Base de données #05 : Identifier les contraintes d&#x27;intégrité fonctionnelles</div><div class="bookmark-description">Dans cette vidéo, vous allez comprendre et identifier les contraintes d&#x27;intégrité fonctionnelles. Pour regarder toutes les vidéos du cours Base de données: https://www.coursaline.com/cours-videos/base-de-donnees Site web: https://www.coursaline.com/ https://www.saadrachid.net Pour interagir avec nous sur facebook: https://www.facebook.com/coursaline/ https://web.facebook.com/saadrachid.net/ 0:00 Introduction 0:12 QU&#x27;EST-CE QUE LES CONTRAINTES D&#x27;INTÉGRITÉ FONCTIONNELLES? 2:32 EXEMPLE 2 4:31 CONTRE EXEMPLE</div></div><div class="bookmark-href"><img src="https://www.google.com/favicon.ico" class="icon bookmark-icon"/>https://www.youtube.com/watch?v=6IYkWAPERN8</div></div><img src="https://i.ytimg.com/vi/6IYkWAPERN8/hqdefault.jpg" class="bookmark-image"/></a></figure><figure id="707b6c00-6c7f-4093-9a15-77628820212f" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/cif3.png"><img style="width:624px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/cif3.png"/></a></figure><p id="e4878360-ab30-47f8-b124-ff44c0631ad6" class=""><em>Nom professeur et Nom module permet de déterminer une salle unique.</em></p><p id="ca70788a-c863-437b-9293-af9b2b6be3c2" class="">
</p><h3 id="0f72471c-fa6f-47ea-8bee-08d751351e0e" class="">(Contre) Exemples 3</h3><figure id="65688769-ffc2-413f-bcd9-ed46c1c35765" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/cif4.png"><img style="width:535px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/cif4.png"/></a></figure><p id="7a30efd3-70a8-4dbe-904d-10acfbbaebdf" class=""><em>Nom client et Ref produit ne permettent pas de déterminer un magasin.</em></p><p id="90d9b872-280d-4a63-8313-540f86297de6" class="">
</p><p id="57e6e451-e607-4538-a85c-654d41a079fc" class="">Une contrainte d&#x27;intégrité fonctionnelle sur un objet signifie que cet objet est totalement identifié par la connaissance d&#x27;un ou plusieurs autres objets au sein d&#x27;une même association.</p><p id="666f6934-2f34-4a1c-9669-9885526e3a26" class="">Il s&#x27;agit de dépendances fonctionnelles qui sont directement représentées sur le MCD afin de réduire les identifiants d&#x27;associations jugés « trop larges ». Ces DF sont des règles de gestion à faire apparaître sur votre schéma.
</p><figure id="232a424b-1ef2-4e39-ae90-37332f54fc58" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/CIF.jpeg"><img style="width:767px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/CIF.jpeg"/></a></figure></details></li></ul><ul id="ffc401be-864c-478e-98ac-3ce44d0b7864" class="toggle"><li> <details><summary><strong>Normalisation</strong></summary><blockquote id="33354de9-bf25-4dac-8e11-2a39207b3e8f" class="">Bonne pratique pour éviter la redondance et assurer l’intégrité des données.</blockquote><p id="5a8a2fcf-53b0-4a7b-9fd0-81d20c09d265" class="">La <strong>normalisation</strong> consiste à restructurer une base de données pour respecter certaines formes normales, afin d&#x27;éviter la redondance des données (des données apparaissent plusieurs fois) et d&#x27;assurer l&#x27;<a href="https://fr.wikipedia.org/wiki/Int%C3%A9grit%C3%A9_des_donn%C3%A9es">intégrité des données</a>.</p></details></li></ul><ul id="60238a20-c281-43fe-93b4-f31ed6ff3f71" class="toggle"><li> <details><summary><a href="https://fr.wikipedia.org/wiki/Forme_normale_(bases_de_données_relationnelles)"><strong>Forme normale</strong></a></summary><blockquote id="07335d1b-8e47-461a-99be-57d42ddd298c" class="">Ce sont des conventions de modélisation de base de données définis sur plusieurs niveaux. Si les 3 premiers niveaux sont respectés, on dit qu’une base est normalisé.</blockquote><figure id="7c960741-867d-4fd4-89c5-5a5b41cfa089" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/FN.png"><img style="width:402px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/FN.png"/></a></figure><p id="9abcae79-22cb-44b5-87f3-653f6823cb9e" class="">Les trois premières étant les plus connues et utilisées. D&#x27;ailleurs, 
généralement, on dit qu&#x27;une base de données est normalisée si elle 
respecte la 3FN.</p></details></li></ul><ul id="41c9b76f-9324-43c8-a500-ac6d1df6ff8f" class="toggle"><li> <details><summary><strong>Entité faible - Lien relatif (R)</strong></summary><blockquote id="4fc197eb-866f-404a-a32f-568f0cd2cfe5" class="">C’est une entité qui a besoin d’une autre pour être définie de manière unique (clé primaire uniquement avec la clé secondaire d’une autre entité).</blockquote><p id="ea8ba718-5140-46bf-b530-ff281c43f82d" class="">Une <strong>entité faible</strong> ne peut être utilisée indépendamment car elle dépend d’un type d’<strong>entité fort</strong> appelé entité propriétaire. En outre, la relation qui relie l’entité faible à son identité de propriétaire est appelée la relation d’identification.</p><p id="d5660b4e-0646-44e5-a582-bf085055ee49" class="">Se matérialise dans le MCD par (R) (relatif) sur le lien entité-association.</p><figure id="60fc6394-8ea7-4267-b8a8-1f71c455ff04" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/Relatif111.png"><img style="width:850px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/Relatif111.png"/></a></figure><figure id="89a644c0-fb93-4b1b-9390-7d5a7ca23a5c" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/Relatif222.png"><img style="width:866px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/Relatif222.png"/></a></figure><figure id="e8697231-8e4e-41a7-a41a-67b30314c301"><a href="https://waytolearnx.com/2018/09/difference-entre-une-entite-forte-et-faible.html" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title"></div></div><div class="bookmark-href">https://waytolearnx.com/2018/09/difference-entre-une-entite-forte-et-faible.html</div></div></a></figure></details></li></ul><ul id="dc4eb5c7-2e5e-4e45-b825-c4eed45b4235" class="toggle"><li> <details><summary><strong>Entité forte</strong></summary><p id="df2934b6-00a8-4197-a6c5-08f3b6a70e1c" class="">Une <strong>entité forte</strong> est complète par elle-même et ne dépend d’aucun autre type d’entité. Il possède une <strong>clé primaire</strong> qui décrit chaque instance de l’<strong>entité forte</strong> définie de manière unique. Cela signifie que tout élément de l’ensemble d’<strong>entités fort</strong> peut être identifié de manière unique.</p><figure id="b2078357-dbd5-46b3-841a-22681615c952" class="image"><a href="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/entitsFF.png"><img style="width:596px" src="Story%2010%20-%20Merise%20-%20MCD%20-%20MLD%20-%20MPD%2014560a7294824da6b1e86001859aeb3d/entitsFF.png"/></a></figure></details></li></ul><p id="51d496b2-ab58-40f6-adce-91235928123e" class="">
</p><ul id="1ad9ef4d-5b3b-46a3-93f0-58437a780fbe" class="toggle"><li> <details><summary><strong>UML</strong></summary><p id="ab96392f-dcce-46bd-925c-031ca3fdb076" class=""><em>Unified Modeling Language</em>.</p><blockquote id="d4157113-154b-43ee-b62c-b4209fdc9740" class="">C’est une méthode graphique de modélisation d’un système informatique, standardisée et concurrente de la méthode Merise. Adapté à la programmation orienté objet. </blockquote><p id="e8aaa41f-bafd-4f7d-aa32-0ca1dba32acc" class="">C&#x27;est un standard de notation que vous pouvez utiliser pour modéliser ou représenter de manière visuelle une application informatique. La version standardisée actuelle est composée de 14 types de diagrammes différents (cas d’utilisation, diagramme de classe, … ). </p></details></li></ul><ul id="b0d83a8b-a83a-47d2-b70a-c49dbdf45e6a" class="toggle"><li> <details><summary><strong>Looping</strong></summary><blockquote id="35fa5bd8-843e-49a1-ac20-83279a219494" class="">Logiciel de mise en application de la méthode Merise. Permet de transformer automatiquement un MCD en MLD, en MPD.</blockquote></details></li></ul><h1 id="e7d8197d-9f0c-4b90-8ea0-b7e264dd225d" class="block-color-orange_background">Problématiques </h1><p id="c9cfa6d6-45c4-4754-ba8d-bedf764f11b1" class=""><mark class="highlight-blue">Comment concevoir et modéliser une base de données relationnelle avec la méthode Merise ?</mark></p><p id="7c8634e3-ea17-4abc-aba7-c0b15c479642" class=""><mark class="highlight-blue">Quels paramètres prendre en compte pour la conception d’une BDDR ?</mark></p><p id="90aeb1bf-4f8d-4716-96f0-d69f9af2255b" class=""><mark class="highlight-blue">Qu’est ce que le MCD, MLD MPD dans la méthode Merise ?</mark></p><h1 id="4c630a53-a600-4ef2-84e3-3184419b443a" class="block-color-orange_background">Hypothèses</h1><p id="ae515561-ce91-4d7e-b7a8-f00a916076a5" class=""><strong><mark class="highlight-blue">Une clé primaire est obligatoire dans une table.</mark></strong></p><p id="a470ad9e-d865-46ee-953a-861ffe370eeb" class="">Vrai</p><p id="528bd633-c5a1-41e3-9115-e87b2a2dba3f" class=""><mark class="highlight-blue">Merise permet de créé des schéma pour visualiser des relations.</mark></p><p id="1d4603c9-4e93-4a5e-8543-8bc1f354466e" class="">Vrai</p><p id="feaecbcc-5abe-40e8-af90-890aa683d7ae" class=""><mark class="highlight-blue">Contrairement à l’UML, Merise permet de modéliser la relation entre les tables.</mark></p><p id="54be70ad-901d-4a87-a0f3-63af44dbc726" class="">L’UML le fait aussi.</p><p id="d78049cd-866a-482b-94fb-ab452f199a8d" class=""><mark class="highlight-blue">Merise utilise un logiciel spécifique.</mark></p><p id="05b1a143-5299-482a-9b91-3dc71240f774" class="">Il y en a plusieurs disponibles. Dont looping, JMerise, etc.</p><p id="ff16ac3c-24f7-469b-9351-0200b53eff5a" class=""><mark class="highlight-blue">Merise est la seule méthode normalisée pour la conception de base de données. </mark></p><p id="ac63e0db-41fc-443e-8a20-5c84c6e6ebd3" class="">Il y a aussi l’UML.</p><p id="9c468332-8be5-46cf-bf07-a1b74cf11ded" class=""><mark class="highlight-blue">L’héritage rajoute une table commune.</mark></p><p id="7ff62937-f362-4660-9a5a-c8723c84b39f" class="">Vrai</p><p id="4f673751-1906-4993-bb5c-cc03c647a46a" class=""><mark class="highlight-blue">Une clé primaire peut avoir plusieurs champ.</mark></p><p id="17fdfc0d-dce7-419c-90e9-f349ba80f109" class="">Oui.</p><p id="4e2900f8-f3a6-4c85-8551-eca00bd5e444" class=""><mark class="highlight-blue">MCD, MLD, MPD sont interdépendants.</mark></p><p id="3df55ac0-c720-48f4-bc07-11d80ecc6906" class="">Non. Le MCD permet de faire le MLD et le MLD permet de faire le MPD.</p><p id="059766e3-5d26-477d-99b2-9db94a7f0230" class="">
</p><h2 id="f540725b-cc0c-4f9e-a8fd-17035a270a64" class="block-color-orange_background">Action</h2><h2 id="2d76fffa-c80b-4d08-b540-fe9f5bc2a6b2" class="">Ressources</h2><p id="ca013b92-2f62-4b4a-b50f-990afc29eaff" class=""><a href="https://sgbd.developpez.com/tutoriels/cours-complet-bdd-sql/">https://sgbd.developpez.com/tutoriels/cours-complet-bdd-sql/</a></p><p id="392b6e49-1f2c-4cd8-b7ca-a802bff416a2" class=""><a href="https://www.devdesignbook.tiankod.fr/">https://www.devdesignbook.tiankod.fr/</a></p><p id="332d21bb-2a02-47d3-a5ca-c1220e759ae2" class=""><a href="https://www.devdesignbook.tiankod.fr/statique/mcd/">https://www.devdesignbook.tiankod.fr/statique/mcd/</a></p><p id="43e21f36-fc7b-4c0a-9bcf-db6f560e4532" class=""><a href="https://www.devdesignbook.tiankod.fr/sgbd/merise/mld/">https://www.devdesignbook.tiankod.fr/sgbd/merise/mld/</a></p><p id="71cd971d-3430-49e7-8d97-d1c0e7b2f1d4" class=""><a href="https://www.devdesignbook.tiankod.fr/sgbd/merise/mpd/">https://www.devdesignbook.tiankod.fr/sgbd/merise/mpd/</a></p><p id="c1d6f316-234b-4645-a31c-135c659e0bab" class=""><a href="https://ineumann.developpez.com/tutoriels/merise/initiation-merise/#LIII-A">https://ineumann.developpez.com/tutoriels/merise/initiation-merise/#LIII-A</a></p><p id="be55db11-cd52-41aa-b5bb-a3681d281b7f" class=""><a href="https://sqlpro.developpez.com/cours/modelisation/merise/">https://sqlpro.developpez.com/cours/modelisation/merise/</a></p><p id="aee78ae2-3b3a-4571-9e12-fbb91aeda71c" class=""><a href="https://fr.wikipedia.org/wiki/Merise_(informatique)">https://fr.wikipedia.org/wiki/Merise_(informatique)</a></p><p id="dde0fefa-ca64-4eb7-b1c8-8863420b97f1" class="">
</p><h2 id="7715db09-7577-4db6-bf2e-f71eb102a8ca" class="">Règles BDD</h2><ul id="63ae5929-52f0-475f-90f3-7e5f65a7abe5" class="bulleted-list"><li style="list-style-type:disc">Nom de table unique - nom attribut unique dans la table mais pas entre deux tables.</li></ul><ul id="f09039c2-ac49-4cc9-ae0a-e95a3df2db91" class="bulleted-list"><li style="list-style-type:disc">Dictionnaire de données  : nom_i ⇒ table commence par ‘i’ - par de ‘_i’ dans le nom des attribut.</li></ul><p id="5b743ad7-5447-4512-9b67-21ec8325bcd4" class="">
</p><h2 id="16124244-2f66-49cc-b551-4021cd98b4ba" class="">Divers </h2><ul id="f494dee3-7524-4126-a366-cc13d9b5ab42" class="bulleted-list"><li style="list-style-type:disc">VARCHAR(30) : 30 caractères maximum.</li></ul><ul id="3f5d5f60-9011-49d1-abce-2e434b6b4b62" class="bulleted-list"><li style="list-style-type:disc">CHAR(30) : 30 caractères obligatoirement.</li></ul></div></article>  





 <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><style>
/* cspell:disable-file */
/* webkit printing magic: print all background colors */
html {
	-webkit-print-color-adjust: exact;
}
* {
	box-sizing: border-box;
	-webkit-print-color-adjust: exact;
}

.pdf-relative-link-path {
	font-size: 80%;
	color: #444;
}

h1,
h2,
h3 {
	letter-spacing: -0.01em;
	line-height: 1.2;
	font-weight: 600;
	margin-bottom: 0;
}

.page-title {
	font-size: 2.5rem;
	font-weight: 700;
	margin-top: 0;
	margin-bottom: 0.75em;
}

h1 {
	font-size: 1.875rem;
	margin-top: 1.875rem;
}

h2 {
	font-size: 1.5rem;
	margin-top: 1.5rem;
}

h3 {
	font-size: 1.25rem;
	margin-top: 1.25rem;
}

.source {
	border: 1px solid #ddd;
	border-radius: 3px;
	padding: 1.5em;
	word-break: break-all;
}

.callout {
	border-radius: 3px;
	padding: 1rem;
}

figure {
	margin: 1.25em 0;
	page-break-inside: avoid;
}

figcaption {
	opacity: 0.5;
	font-size: 85%;
	margin-top: 0.5em;
}

mark {
	background-color: transparent;
}

.indented {
	padding-left: 1.5em;
}

hr {
	background: transparent;
	display: block;
	width: 100%;
	height: 1px;
	visibility: visible;
	border: none;
	border-bottom: 1px solid rgba(55, 53, 47, 0.09);
}

img {
	max-width: 100%;
}

@media only print {
	img {
		max-height: 100vh;
		object-fit: contain;
	}
}

@page {
	margin: 1in;
}

.collection-content {
	font-size: 0.875rem;
}

.column-list {
	display: flex;
	justify-content: space-between;
}

.column {
	padding: 0 1em;
}

.column:first-child {
	padding-left: 0;
}

.column:last-child {
	padding-right: 0;
}

.table_of_contents-item {
	display: block;
	font-size: 0.875rem;
	line-height: 1.3;
	padding: 0.125rem;
}

.table_of_contents-indent-1 {
	margin-left: 1.5rem;
}

.table_of_contents-indent-2 {
	margin-left: 3rem;
}

.table_of_contents-indent-3 {
	margin-left: 4.5rem;
}

.table_of_contents-link {
	text-decoration: none;
	opacity: 0.7;
	border-bottom: 1px solid rgba(55, 53, 47, 0.18);
}

table,
th,
td {
	border: 1px solid rgba(55, 53, 47, 0.09);
	border-collapse: collapse;
}

table {
	border-left: none;
	border-right: none;
}

th,
td {
	font-weight: normal;
	padding: 0.25em 0.5em;
	line-height: 1.5;
	min-height: 1.5em;
	text-align: left;
}

th {
	color: rgba(55, 53, 47, 0.6);
}

ol,
ul {
	margin: 0;
	margin-block-start: 0.6em;
	margin-block-end: 0.6em;
}

li > ol:first-child,
li > ul:first-child {
	margin-block-start: 0.6em;
}

ul > li {
	list-style: disc;
}

ul.to-do-list {
	text-indent: -1.7em;
}

ul.to-do-list > li {
	list-style: none;
}

.to-do-children-checked {
	text-decoration: line-through;
	opacity: 0.375;
}

ul.toggle > li {
	list-style: none;
}

ul {
	padding-inline-start: 1.7em;
}

ul > li {
	padding-left: 0.1em;
}

ol {
	padding-inline-start: 1.6em;
}

ol > li {
	padding-left: 0.2em;
}

.mono ol {
	padding-inline-start: 2em;
}

.mono ol > li {
	text-indent: -0.4em;
}

.toggle {
	padding-inline-start: 0em;
	list-style-type: none;
}

/* Indent toggle children */
.toggle > li > details {
	padding-left: 1.7em;
}

.toggle > li > details > summary {
	margin-left: -1.1em;
}

.selected-value {
	display: inline-block;
	padding: 0 0.5em;
	background: rgba(206, 205, 202, 0.5);
	border-radius: 3px;
	margin-right: 0.5em;
	margin-top: 0.3em;
	margin-bottom: 0.3em;
	white-space: nowrap;
}

.collection-title {
	display: inline-block;
	margin-right: 1em;
}

.simple-table {
	margin-top: 1em;
	font-size: 0.875rem;
	empty-cells: show;
}
.simple-table td {
	height: 29px;
	min-width: 120px;
}

.simple-table th {
	height: 29px;
	min-width: 120px;
}

.simple-table-header-color {
	background: rgb(247, 246, 243);
	color: black;
}
.simple-table-header {
	font-weight: 500;
}

time {
	opacity: 0.5;
}

.icon {
	display: inline-block;
	max-width: 1.2em;
	max-height: 1.2em;
	text-decoration: none;
	vertical-align: text-bottom;
	margin-right: 0.5em;
}

img.icon {
	border-radius: 3px;
}

.user-icon {
	width: 1.5em;
	height: 1.5em;
	border-radius: 100%;
	margin-right: 0.5rem;
}

.user-icon-inner {
	font-size: 0.8em;
}

.text-icon {
	border: 1px solid #000;
	text-align: center;
}

.page-cover-image {
	display: block;
	object-fit: cover;
	width: 100%;
	max-height: 30vh;
}

.page-header-icon {
	font-size: 3rem;
	margin-bottom: 1rem;
}

.page-header-icon-with-cover {
	margin-top: -0.72em;
	margin-left: 0.07em;
}

.page-header-icon img {
	border-radius: 3px;
}

.link-to-page {
	margin: 1em 0;
	padding: 0;
	border: none;
	font-weight: 500;
}

p > .user {
	opacity: 0.5;
}

td > .user,
td > time {
	white-space: nowrap;
}

input[type="checkbox"] {
	transform: scale(1.5);
	margin-right: 0.6em;
	vertical-align: middle;
}

p {
	margin-top: 0.5em;
	margin-bottom: 0.5em;
}

.image {
	border: none;
	margin: 1.5em 0;
	padding: 0;
	border-radius: 0;
	text-align: center;
}

.code,
code {
	background: rgba(135, 131, 120, 0.15);
	border-radius: 3px;
	padding: 0.2em 0.4em;
	border-radius: 3px;
	font-size: 85%;
	tab-size: 2;
}

code {
	color: #eb5757;
}

.code {
	padding: 1.5em 1em;
}

.code-wrap {
	white-space: pre-wrap;
	word-break: break-all;
}

.code > code {
	background: none;
	padding: 0;
	font-size: 100%;
	color: inherit;
}

blockquote {
	font-size: 1.25em;
	margin: 1em 0;
	padding-left: 1em;
	border-left: 3px solid rgb(55, 53, 47);
}

.bookmark {
	text-decoration: none;
	max-height: 8em;
	padding: 0;
	display: flex;
	width: 100%;
	align-items: stretch;
}

.bookmark-title {
	font-size: 0.85em;
	overflow: hidden;
	text-overflow: ellipsis;
	height: 1.75em;
	white-space: nowrap;
}

.bookmark-text {
	display: flex;
	flex-direction: column;
}

.bookmark-info {
	flex: 4 1 180px;
	padding: 12px 14px 14px;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}

.bookmark-image {
	width: 33%;
	flex: 1 1 180px;
	display: block;
	position: relative;
	object-fit: cover;
	border-radius: 1px;
}

.bookmark-description {
	color: rgba(55, 53, 47, 0.6);
	font-size: 0.75em;
	overflow: hidden;
	max-height: 4.5em;
	word-break: break-word;
}

.bookmark-href {
	font-size: 0.75em;
	margin-top: 0.25em;
}

.sans { font-family: ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"; }
.code { font-family: "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace; }
.serif { font-family: Lyon-Text, Georgia, ui-serif, serif; }
.mono { font-family: iawriter-mono, Nitti, Menlo, Courier, monospace; }
.pdf .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK JP'; }
.pdf:lang(zh-CN) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK SC'; }
.pdf:lang(zh-TW) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK TC'; }
.pdf:lang(ko-KR) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK KR'; }
.pdf .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
.pdf:lang(zh-CN) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
.pdf:lang(zh-TW) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
.pdf:lang(ko-KR) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
.pdf .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK JP'; }
.pdf:lang(zh-CN) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK SC'; }
.pdf:lang(zh-TW) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK TC'; }
.pdf:lang(ko-KR) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK KR'; }
.pdf .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
.pdf:lang(zh-CN) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
.pdf:lang(zh-TW) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
.pdf:lang(ko-KR) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
.highlight-default {
	color: rgba(55, 53, 47, 1);
}
.highlight-gray {
	color: rgba(120, 119, 116, 1);
	fill: rgba(120, 119, 116, 1);
}
.highlight-brown {
	color: rgba(159, 107, 83, 1);
	fill: rgba(159, 107, 83, 1);
}
.highlight-orange {
	color: rgba(217, 115, 13, 1);
	fill: rgba(217, 115, 13, 1);
}
.highlight-yellow {
	color: rgba(203, 145, 47, 1);
	fill: rgba(203, 145, 47, 1);
}
.highlight-teal {
	color: rgba(68, 131, 97, 1);
	fill: rgba(68, 131, 97, 1);
}
.highlight-blue {
	color: rgba(51, 126, 169, 1);
	fill: rgba(51, 126, 169, 1);
}
.highlight-purple {
	color: rgba(144, 101, 176, 1);
	fill: rgba(144, 101, 176, 1);
}
.highlight-pink {
	color: rgba(193, 76, 138, 1);
	fill: rgba(193, 76, 138, 1);
}
.highlight-red {
	color: rgba(212, 76, 71, 1);
	fill: rgba(212, 76, 71, 1);
}
.highlight-gray_background {
	background: rgba(241, 241, 239, 1);
}
.highlight-brown_background {
	background: rgba(244, 238, 238, 1);
}
.highlight-orange_background {
	background: rgba(251, 236, 221, 1);
}
.highlight-yellow_background {
	background: rgba(251, 243, 219, 1);
}
.highlight-teal_background {
	background: rgba(237, 243, 236, 1);
}
.highlight-blue_background {
	background: rgba(231, 243, 248, 1);
}
.highlight-purple_background {
	background: rgba(244, 240, 247, 0.8);
}
.highlight-pink_background {
	background: rgba(249, 238, 243, 0.8);
}
.highlight-red_background {
	background: rgba(253, 235, 236, 1);
}
.block-color-default {
	color: inherit;
	fill: inherit;
}
.block-color-gray {
	color: rgba(120, 119, 116, 1);
	fill: rgba(120, 119, 116, 1);
}
.block-color-brown {
	color: rgba(159, 107, 83, 1);
	fill: rgba(159, 107, 83, 1);
}
.block-color-orange {
	color: rgba(217, 115, 13, 1);
	fill: rgba(217, 115, 13, 1);
}
.block-color-yellow {
	color: rgba(203, 145, 47, 1);
	fill: rgba(203, 145, 47, 1);
}
.block-color-teal {
	color: rgba(68, 131, 97, 1);
	fill: rgba(68, 131, 97, 1);
}
.block-color-blue {
	color: rgba(51, 126, 169, 1);
	fill: rgba(51, 126, 169, 1);
}
.block-color-purple {
	color: rgba(144, 101, 176, 1);
	fill: rgba(144, 101, 176, 1);
}
.block-color-pink {
	color: rgba(193, 76, 138, 1);
	fill: rgba(193, 76, 138, 1);
}
.block-color-red {
	color: rgba(212, 76, 71, 1);
	fill: rgba(212, 76, 71, 1);
}
.block-color-gray_background {
	background: rgba(241, 241, 239, 1);
}
.block-color-brown_background {
	background: rgba(244, 238, 238, 1);
}
.block-color-orange_background {
	background: rgba(251, 236, 221, 1);
}
.block-color-yellow_background {
	background: rgba(251, 243, 219, 1);
}
.block-color-teal_background {
	background: rgba(237, 243, 236, 1);
}
.block-color-blue_background {
	background: rgba(231, 243, 248, 1);
}
.block-color-purple_background {
	background: rgba(244, 240, 247, 0.8);
}
.block-color-pink_background {
	background: rgba(249, 238, 243, 0.8);
}
.block-color-red_background {
	background: rgba(253, 235, 236, 1);
}
.select-value-color-pink { background-color: rgba(245, 224, 233, 1); }
.select-value-color-purple { background-color: rgba(232, 222, 238, 1); }
.select-value-color-green { background-color: rgba(219, 237, 219, 1); }
.select-value-color-gray { background-color: rgba(227, 226, 224, 1); }
.select-value-color-opaquegray { background-color: rgba(255, 255, 255, 0.0375); }
.select-value-color-orange { background-color: rgba(250, 222, 201, 1); }
.select-value-color-brown { background-color: rgba(238, 224, 218, 1); }
.select-value-color-red { background-color: rgba(255, 226, 221, 1); }
.select-value-color-yellow { background-color: rgba(253, 236, 200, 1); }
.select-value-color-blue { background-color: rgba(211, 229, 239, 1); }

.checkbox {
	display: inline-flex;
	vertical-align: text-bottom;
	width: 16;
	height: 16;
	background-size: 16px;
	margin-left: 2px;
	margin-right: 5px;
}

.checkbox-on {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22%2358A9D7%22%2F%3E%0A%3Cpath%20d%3D%22M6.71429%2012.2852L14%204.9995L12.7143%203.71436L6.71429%209.71378L3.28571%206.2831L2%207.57092L6.71429%2012.2852Z%22%20fill%3D%22white%22%2F%3E%0A%3C%2Fsvg%3E");
}

.checkbox-off {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20x%3D%220.75%22%20y%3D%220.75%22%20width%3D%2214.5%22%20height%3D%2214.5%22%20fill%3D%22white%22%20stroke%3D%22%2336352F%22%20stroke-width%3D%221.5%22%2F%3E%0A%3C%2Fsvg%3E");
}
	
</style></head> <article id="25e3b869-d964-40a1-b939-bd5c59d23477" class="page sans"><header><img class="page-cover-image" src="https://www.notion.so/images/page-cover/woodcuts_1.jpg" style="object-position:center 90%"/><h1 id=<?php echo $ini ; $ini++ ;?> class="page-title">Story 11 - IDE MySQL &amp; Python</h1></header><div class="page-body"><h1 id="21f346f8-1d45-4e28-8d9e-8ad53f851aa1" class="block-color-orange_background">Contexte</h1><p id="f6cbe9e4-8567-4229-803a-ba985eaefaeb" class=""><mark class="highlight-blue">Il s’agit d’apprendre à installer un serveur MySQL, une interface graphique et les composants nécessaires pour créer et gérer la base de données. </mark></p><h1 id="21c4f359-66f3-4ad1-bf62-915507ee90c3" class="block-color-orange_background">Mots clés</h1><ul id="783b0fa1-5474-4808-baf5-6dcd2701f5ae" class="toggle"><li> <details><summary><strong>Serveur-client</strong></summary><p id="aa5b506e-bf5f-43fc-b82b-6878c546d237" class="">Modélisation matériel et logiciel qui offre des services à un ou plusieurs clients. Il répond automatiquement à des requêtes formalisées par des protocoles réseaux.</p></details></li></ul><ul id="2252c2dd-0238-43ac-810d-b3ef866fa5ca" class="toggle"><li> <details><summary><strong>Administrer une BDD</strong></summary><p id="1e63f20e-3c00-48dd-ad1e-494a69548660" class="">Gérer une base de données avec tous les droits en lecture et écriture.</p></details></li></ul><ul id="a507c4a4-90e3-45c6-991a-5e703d14f896" class="toggle"><li> <details><summary><strong>MySQL</strong></summary><p id="2b79df75-8e56-424c-ad51-2724d3bff25c" class="">SGBDR</p></details></li></ul><ul id="c5f96e33-d5c0-4403-b918-2a814e76c386" class="toggle"><li> <details><summary><strong>MySQL GUI</strong></summary><p id="9970cd59-a74b-4fd4-9fbd-eed71c304329" class=""><em>Graphical User Interface</em>.
Permet d’utiliser MySQL à l’aide d’une interface graphique, sans utiliser la console. </p></details></li></ul><ul id="18be3d71-bf32-4c71-b6ac-d991c780d8ce" class="toggle"><li> <details><summary><strong>IDE</strong></summary><p id="b33526e7-c93c-45e1-8fb2-8cf18cd9c3e5" class=""><em>Integrated development environement</em>.</p><p id="179c34fc-5b44-43dd-ad16-42e7ade652ff" class="">Regroupe un ensemble d’outils spécifiques qui permet des développer des programmes informatiques efficacement (optimise la productivité).</p></details></li></ul><ul id="40ffcd70-2852-46fa-86ed-876ab7394c5d" class="toggle"><li> <details><summary><strong>phpMyAdmin</strong></summary><blockquote id="6be957d7-3ae0-4706-9620-c3a0dfab9b03" class="">Logiciel libre (IDE) de gestion de base de donnée MySQL ou MariaDB. Écrit en php, il doit donc être exécuté depuis un serveur. (serveur interne php, mamp, apache, …).</blockquote><figure id="fe6e6517-1347-40f3-953e-49e395808c58"><a href="https://docs.phpmyadmin.net/fr/latest/intro.html" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">Introduction - Documentation phpMyAdmin 5.3.0-dev</div><div class="bookmark-description">phpMyAdmin est un logiciel libre écrit en PHP qui a pour mission de s&#x27;occuper de l&#x27;administration d&#x27;un serveur de base de données MySQL ou MariaDB. Vous pouvez utiliser phpMyAdmin pour réaliser la plupart des tâches d&#x27;administration, ceci incluant la création de base de données, l&#x27;exécution de demandes, et l&#x27;ajout de comptes utilisateur.</div></div><div class="bookmark-href"><img src="https://docs.phpmyadmin.net/favicon.ico" class="icon bookmark-icon"/>https://docs.phpmyadmin.net/fr/latest/intro.html</div></div></a></figure><figure id="f5f25983-fda4-412c-b592-371f45fb9fb6"><a href="https://www.iadrien.fr/parametrage_erreurs_securit%C3%A9.php#5" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">Paramétrage, erreurs et sécurité</div><div class="bookmark-description">C&#x27;est ce qu&#x27;on appelle un serveur web. Il s&#x27;agit du plus important de tous les programmes, car c&#x27;est lui qui est chargé de délivrer les pages web aux visiteurs. Cependant, Apache ne gère que les sites web statiques (il ne peut traiter que des pages HTML). Il faut donc le compléter avec d&#x27;autres programmes.</div></div><div class="bookmark-href">https://www.iadrien.fr/parametrage_erreurs_securit%C3%A9.php#5</div></div><img src="https://www.iadrien.fr/images/216959.png" class="bookmark-image"/></a></figure></details></li></ul><ul id="dcaafeea-442b-4c52-ba07-5deeaf9cd54e" class="toggle"><li> <details><summary><strong>MySQL Workbench</strong></summary><p id="0c091e95-466a-4311-8ddd-481d74a68358" class="">Logiciel (Oracle) de gestion de base de données MySQL. Outil visuel unifié pour architectes, développeurs et administrateurs de base de donnée MySQL. </p></details></li></ul><ul id="412fa835-0295-471d-8e1e-0f30f65e5eae" class="toggle"><li> <details><summary><strong>Requête</strong></summary><blockquote id="32457f9b-3df8-4aea-9eda-6778c02e5c9c" class="">Instruction (CRUD) passé à la base de données. </blockquote></details></li></ul><h1 id="3da7f71e-d081-4c0b-b16b-7246ae2dbf63" class="block-color-orange_background">Problématiques </h1><p id="a0069374-37e2-43bf-99d3-1ccb59f55ec8" class=""><mark class="highlight-blue">Comment installer MySQL sur son poste de travail pour pouvoir exploiter des bases de données ? </mark></p><p id="cbde2051-b0f4-49cb-b430-41fe73862ee3" class=""><mark class="highlight-blue">Quels sont les différentes manières d’administrer une base de données MySQL ?</mark></p><h1 id="5d808d76-d482-464c-bf5f-0ab16cda9a68" class="block-color-orange_background">Hypothèses</h1><p id="33257a19-0d7d-49f0-a3a3-7ca1455c574d" class=""><mark class="highlight-blue">Avec phpMyAdmin, on peut créer une base de données sans faire de requête.</mark></p><p id="90b57d1e-abe3-4664-ab26-db65ec8702f4" class="">Vrai</p><p id="0b85d442-87c2-477b-b7d6-88e0035ff106" class="">
</p><p id="896797bc-fd73-4256-a506-1b5b2b1b7373" class=""><mark class="highlight-blue">On a besoin de télécharger une bibliothèque python pour l’interfacer avec MySQL.</mark></p><p id="b4bfc5dc-45bd-4114-bdf5-e3f483dab798" class="">Vrai. mysql-connector</p><p id="578e83e9-ad64-4619-ab66-c669be79862a" class="">
</p><p id="78aa6d71-bbbf-4df2-b679-e7c5974dcf8d" class=""><mark class="highlight-blue">phpMyAdmin fonctionne avec d’autres SGBD. </mark></p><p id="b8b1ddbd-7605-471e-9b99-fd35e140a7c9" class="">Vrai. MySQL ou MariaDB</p><h2 id="25bd2cfe-8248-4574-a563-ca071ae7c979" class="block-color-orange_background">Action</h2><h2 id="8275d3ab-a77d-4810-b2b6-49dfa283eb1e" class="">Ressources</h2><p id="4c937e4f-be29-4a9b-abbb-456348ba6dcf" class=""><a href="https://dev.mysql.com/downloads/installer/">https://dev.mysql.com/downloads/installer/</a></p><p id="6d4dbc36-f7ef-4ff5-b73a-43a8a8d30c01" class=""><a href="https://docs.phpmyadmin.net/fr/latest/intro.html">https://docs.phpmyadmin.net/fr/latest/intro.html</a></p><p id="fe08003e-153e-4233-9d1f-b06aba89b65e" class=""><a href="https://www.w3schools.com/sql/sql_datatypes.asp">https://www.w3schools.com/sql/sql_datatypes.asp</a></p><p id="066d2aeb-66f2-40cd-8f5d-35c6f67021c8" class=""><a href="https://medium.com/@tattwei46/how-to-use-python-with-mysql-79304bee8753">https://medium.com/@tattwei46/how-to-use-python-with-mysql-79304bee8753</a></p><p id="10829904-9f92-40ba-9a09-e6c218869af8" class=""><a href="https://www.phpmyadmin.net/downloads/">https://www.phpmyadmin.net/downloads/</a></p><p id="b0e39718-f92a-4388-a85a-02928962188d" class=""><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql?archived-source=1959476">https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql?archived-source=1959476</a></p><p id="9f6ea2ec-a0f4-4a21-8eb4-0c0e608a3e20" class=""><a href="https://www.iadrien.fr/MySQL.php#2">https://www.iadrien.fr/MySQL.php</a></p><p id="d5694f97-9635-4953-b9f9-cf267be02da0" class=""><a href="https://github.com/Muhd-Shahid/Learn-Python-Data-Access/blob/main/MySQL/Import%20a%20CSV%20file%20into%20a%20%20MySQL%20database%20using%20python%20script.ipynb">https://github.com/Muhd-Shahid/Learn-Python-Data-Access/blob/main/MySQL/Import a CSV file into a MySQL database using python script.ipynb</a></p><p id="3e0f8e6e-dd70-4d7f-94c8-b0fe67d874d4" class="">
</p><h2 id="95c6ed56-5800-4c52-a0ce-b6cf3a1b6bac" class="">Comparaison phpMyAdmin / MySQL Workbench</h2><table id="2ec315e2-52af-49b4-b926-f55dee98906c" class="simple-table"><tbody><tr id="d0d3226f-78a5-40ec-80e5-0ec4860d1ca4"><td id="~BHl" class=""></td><td id="DRbb" class="">phpMyAdmin</td><td id="P@nj" class="">MySQL Workbench</td></tr><tr id="b5d2536a-f356-4234-a98e-addc2b51b245"><td id="~BHl" class="">Licence</td><td id="DRbb" class="">open source</td><td id="P@nj" class="">open source (version communauté)</td></tr><tr id="71c0999b-ac6e-499e-ac69-906ff05af02b"><td id="~BHl" class="">SGBD</td><td id="DRbb" class="">MySQL &gt;5.5, MariaDB</td><td id="P@nj" class="">MySQL all version, MariaDB</td></tr><tr id="bb22c264-bd46-4307-927b-39781184069b"><td id="~BHl" class="">Installation</td><td id="DRbb" class="">Nécessite un serveur + php (mysqli,pdo)</td><td id="P@nj" class="">Exécutable</td></tr><tr id="8f468944-6dde-4420-a71c-c2f0779467ce"><td id="~BHl" class="">Utilisation</td><td id="DRbb" class="">Simple</td><td id="P@nj" class="">Difficile</td></tr><tr id="776ce98e-99b1-421e-b637-b26bd336bb46"><td id="~BHl" class=""></td><td id="DRbb" class="">Navigateur</td><td id="P@nj" class="">Exécutable</td></tr></tbody></table><p id="fd354e49-f49c-4734-988a-f56f84a1e76e" class="">
</p><h2 id="d79bb432-a14d-4d07-82bc-b98d23fad20a" class="">MySQL avec python </h2><p id="d7620fea-551f-4bb9-8fa0-8480c04f0188" class=""><strong>Pré Requis</strong> : Python, MySQL, mysql-connector-python, to_sql ⇒ pandas, sqlalchemy</p><p id="d07064a1-9c20-4cd0-a922-28ba89167e2d" class="">
</p><p id="25d51605-9658-4624-9c0e-3cc98162d4c9" class=""><strong>Doc mysql-connector </strong></p><figure id="de641182-4f4d-4b07-b49a-6a366672f673"><a href="https://dev.mysql.com/doc/connector-python/en/" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">MySQL Connector/Python Developer Guide</div><div class="bookmark-description">Licensing information. This product may include third-party software, used under license. MySQL Connector/Python 2.2 Community License Information User Manual has information about licenses relating to MySQL Connector/Python community releases up to and including version 2.2. MySQL Connector/Python 2.2 Commercial License Information User Manual has information about licenses relating to MySQL Connector/Python commercial releases up to and including version 2.2.</div></div><div class="bookmark-href"><img src="https://labs.mysql.com/common/themes/sakila/favicon.ico" class="icon bookmark-icon"/>https://dev.mysql.com/doc/connector-python/en/</div></div></a></figure><p id="a7191275-7d5d-4602-8181-6b29bb48067b" class="">
</p><p id="9c85b76a-fdb6-4bc0-8c08-fbfed808159b" class="">Se connecter à la base de donnée :</p><pre id="87350a3e-6af6-4f42-9ae5-a9e4a098ea8b" class="code"><code>import mysql.connector as msql

try:
    conn = msql.connect(host=&#x27;localhost&#x27;, user=&#x27;root&#x27;, password=&#x27;sql@123&#x27;)
    if conn.is_connected():
        cursor = conn.cursor()
        record = cursor.fetchone()
        print(&quot;You&#x27;re connected: &quot;, record)
        cursor.execute(&#x27;DROP DATABASE IF EXISTS irisDB;&#x27;)
        cursor.execute(&quot;CREATE DATABASE irisDB&quot;)
        print(&quot;irisDB database is created&quot;)
        
except Error as e:
    print(&quot;Error while connecting to MySQL&quot;, e)</code></pre><ul id="433a7fb3-427d-43ee-9250-eabe396c65c1" class="toggle"><li> <details><summary><code>mysql.connector.connect()</code> </summary><p id="22c267f3-684e-4398-a818-bccded4eb47a" class="">Établi une session avec le serveur MySQL. </p><pre id="1d75582c-76d2-480a-9b0a-b28e3a659b2c" class="code"><code>conn = msql.connect(host=&#x27;localhost&#x27;, user=&#x27;root&#x27;, password=&#x27;sql@123&#x27;, database=&#x27;mybd&#x27;)</code></pre><figure id="9361f82f-48bd-4847-8b41-193c5cb72a1e"><a href="https://dev.mysql.com/doc/connector-python/en/connector-python-connectargs.html" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">MySQL :: MySQL Connector/Python Developer Guide :: 7.1 Connector/Python Connection Arguments</div><div class="bookmark-description">A connection with the MySQL server can be established using either the mysql.connector.connect() function or the mysql.connector.MySQLConnection() class: cnx = mysql.connector.connect(user=&#x27;joe&#x27;, database=&#x27;test&#x27;) cnx = MySQLConnection(user=&#x27;joe&#x27;, database=&#x27;test&#x27;) The following table describes the arguments that can be used to initiate a connection. An asterisk (*) following an argument indicates a synonymous argument name, available only for compatibility with other Python MySQL drivers.</div></div><div class="bookmark-href"><img src="https://labs.mysql.com/common/themes/sakila/favicon.ico" class="icon bookmark-icon"/>https://dev.mysql.com/doc/connector-python/en/connector-python-connectargs.html</div></div></a></figure></details></li></ul><p id="ccc92142-3e0c-42f9-b729-3e72334948a6" class="">
</p><ul id="18105253-75f5-41c2-85d0-40a0f361746b" class="toggle"><li> <details><summary><code>MySQLConnection.cursor()</code></summary><p id="8bf99ef9-559a-4751-bd05-9ca9c425bdfc" class=""> <a href="https://dev.mysql.com/doc/connector-python/en/connector-python-api-mysqlcursor.html">Doc MySQLCursor Class</a> (Instancie des objets qui exécute des opérations SQL).</p><p id="7389325b-5814-4b0c-ac41-12eed6ce4d74" class=""><a href="https://dev.mysql.com/doc/connector-python/en/connector-python-api-mysqlconnection-cursor.html"> Doc </a><a href="https://dev.mysql.com/doc/connector-python/en/connector-python-api-mysqlconnection-cursor.html"><code>cursor()</code></a> :</p><p id="4eb0e38f-9fb3-4eee-af83-5dbd37b5295b" class="">Retourne un objet <code>MySQLCursor()</code>, utilisé pour faire des requêtes, etc. </p></details></li></ul><ul id="4869eb92-c01a-4c5b-8014-cf4f5dc56f9c" class="toggle"><li> <details><summary><code>MySQLConnection.commit()</code></summary><p id="26c46dc9-684d-4761-92ac-13c48ef4f708" class="">Envoie un état <code>COMMIT</code> au serveur MySQL en validant les transactions en cours.</p><p id="6e996643-2d8a-48d5-94a5-647b1a04a75f" class="">Par défaut, connector-python ne fait pas d’auto-commit. Il est important d’appeler cette méthode pour valider les changements en base de données. </p><pre id="25a8bb56-565f-4cbd-8bec-9793fbee14d2" class="code"><code>&gt;&gt;&gt; cursor.execute(&quot;INSERT INTO employees (first_name) VALUES (%s)&quot;, (&#x27;Jane&#x27;))
&gt;&gt;&gt; cnx.commit()</code></pre><p id="3f77777d-2de2-4181-83bc-15dd7cd0d1e2" class="">
</p></details></li></ul><ul id="0001a9e2-25bd-485f-bb20-f3d0128bcc05" class="toggle"><li> <details><summary><code>MySQLConnection.rollback()</code></summary><p id="c645d97a-0f1a-493a-8351-189ea80b9140" class="">Permet d’annuler un <code>COMMIT</code>.</p></details></li></ul><p id="1138bf74-cf88-430b-bb14-a703148fcffe" class="">
</p><ul id="4f42a60d-e592-422c-ae98-a3a11a5ceaba" class="toggle"><li> <details><summary><code>MySQLCursor.execute()</code></summary><p id="a10ec754-350a-49ac-9fbe-1df7e26397fb" class="">Exécute les opérations en base de données (requêtes ou commandes). Doit être commité pour valider en bdd.</p><pre id="8a902f5e-40ed-4f6d-a40c-ff5a2e9a0365" class="code"><code>cursor.execute(&quot;SELECT * FROM city&quot;)
cursor.execute(operation, params=None, multi=False)

insert_stmt = (
  &quot;INSERT INTO employees (emp_no, first_name, last_name, hire_date) &quot;
  &quot;VALUES (%s, %s, %s, %s)&quot;
)
data = (2, &#x27;Jane&#x27;, &#x27;Doe&#x27;, datetime.date(2012, 3, 23))
cursor.execute(insert_stmt, data)</code></pre><figure id="f68b1a01-23f5-476d-998e-e04d34d29e02"><a href="https://dev.mysql.com/doc/connector-python/en/connector-python-api-mysqlcursor-execute.html" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">MySQL :: MySQL Connector/Python Developer Guide :: 10.5.4 MySQLCursor.execute() Method</div><div class="bookmark-description">Syntax: cursor.execute(operation, params=None, multi=False) iterator = cursor.execute(operation, params=None, multi=True) This method executes the given database operation (query or command). The parameters found in the tuple or dictionary params are bound to the variables in the operation. Specify variables using%s or parameter style (that is, using format or pyformat style).</div></div><div class="bookmark-href"><img src="https://labs.mysql.com/common/themes/sakila/favicon.ico" class="icon bookmark-icon"/>https://dev.mysql.com/doc/connector-python/en/connector-python-api-mysqlcursor-execute.html</div></div></a></figure></details></li></ul><ul id="f5517ae2-22cc-4913-aa35-570a36ec959a" class="toggle"><li> <details><summary><code>MySQLCursor.executemany()</code></summary></details></li></ul><ul id="2d9a6a6d-f44a-42c9-bd65-e57937f157d2" class="toggle"><li> <details><summary><code>MySQLCursor.fetchone()</code></summary><p id="af20ab3a-e292-4bd2-bdf1-56c480fee5d3" class="">Méthode de <code>MySQLCursor Class</code>.</p><p id="55930f60-d74a-4a58-aa4b-f88c172e7a58" class="">Retourne la prochaine ligne d’une requête dans un tuple.</p><pre id="b1a4f542-02c6-4edc-b8ea-61a6b33c551c" class="code"><code>cursor = conn.cursor()
cursor.execute(&quot;SELECT * FROM city&quot;)
record = cursor.fetchone()
print(type(record))
print(record)

&gt;&gt;&gt; &lt;class &#x27;tuple&#x27;&gt;
&gt;&gt;&gt; (1, &#x27;Kabul&#x27;, &#x27;AFG&#x27;, &#x27;Kabol&#x27;, 1780000)

while record is not None:
  print(record)
  record = cursor.fetchone()</code></pre><figure id="9daa0bff-5409-49d6-8d7a-15acaba053e3"><a href="https://dev.mysql.com/doc/connector-python/en/connector-python-api-mysqlcursor-fetchone.html" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">MySQL :: MySQL Connector/Python Developer Guide :: 10.5.8 MySQLCursor.fetchone() Method</div><div class="bookmark-description">Syntax: row = cursor.fetchone() This method retrieves the next row of a query result set and returns a single sequence, or None if no more rows are available. By default, the returned tuple consists of data returned by the MySQL server, converted to Python objects.</div></div><div class="bookmark-href"><img src="https://labs.mysql.com/common/themes/sakila/favicon.ico" class="icon bookmark-icon"/>https://dev.mysql.com/doc/connector-python/en/connector-python-api-mysqlcursor-fetchone.html</div></div></a></figure></details></li></ul><ul id="15ad582f-cc75-42db-adb5-68d30d9b9e65" class="toggle"><li> <details><summary><code>MySQLCursor.fetchall()</code></summary><p id="86be8bbf-5e5c-4d01-a855-f96ce5789353" class="">Retourne une liste de tuple de toutes les lignes. Ou liste vide.</p><figure id="0f297378-48d3-4fbc-ac8b-b3bba8ee8b51"><a href="https://dev.mysql.com/doc/connector-python/en/connector-python-api-mysqlcursor-fetchall.html" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">MySQL :: MySQL Connector/Python Developer Guide :: 10.5.6 MySQLCursor.fetchall() Method</div><div class="bookmark-description">Syntax: rows = cursor.fetchall() The method fetches all (or all remaining) rows of a query result set and returns a list of tuples. If no more rows are available, it returns an empty list.</div></div><div class="bookmark-href"><img src="https://labs.mysql.com/common/themes/sakila/favicon.ico" class="icon bookmark-icon"/>https://dev.mysql.com/doc/connector-python/en/connector-python-api-mysqlcursor-fetchall.html</div></div></a></figure></details></li></ul><ul id="63fac354-5a70-48dc-b63f-e07da42b0a68" class="toggle"><li> <details><summary><code>MySQLCursor.fetchmany()</code></summary><p id="a5022650-1361-49a3-991e-e8a7c65d396f" class="">Retourne une liste de tuple de la taille spécifiée dans size. </p><pre id="3af4e782-3be7-4b8c-93c4-f9147ab6e8a5" class="code"><code>rows = cursor.fetchmany(size=1)</code></pre></details></li></ul><p id="765042bc-3a22-4f3a-b713-2edd3ec2f770" class="">
</p><ul id="5a2a86a6-4f25-4b9d-a9bd-6c1d4ed238d3" class="toggle"><li> <details><summary><code>pd.Dataframe.to_sql()</code></summary><p id="7e79d23d-dd92-484e-af52-e2bae2038b68" class="">Écrit des enregistrements d’un DF dans un base de donnée SQL. </p><pre id="5f7008ec-cb3f-45e1-8cc0-cf6b7db3519b" class="code"><code>from sqlalchemy import create_engine

engine = create_engine(&quot;mysql+pymysql://{user}:{pw}@localhost/{db}&quot;
                       .format(user=&quot;root&quot;,
                               pw=&quot;sql@123&quot;,
                               db=&quot;irisdb&quot;))

to_sql(name=&#x27;nom de la table&#x27;, con=engine)
</code></pre><figure id="c7a4086c-7883-4e83-895c-48dea22d4ce3"><a href="https://docs.sqlalchemy.org/en/13/core/connections.html" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">SQLAlchemy 2.0 Documentation</div><div class="bookmark-description">This section details direct usage of the , , and related objects. Its important to note that when using the SQLAlchemy ORM, these objects are not generally accessed; instead, the object is used as the interface to the database.</div></div><div class="bookmark-href"><img src="https://www.sqlalchemy.org/favicon.ico" class="icon bookmark-icon"/>https://docs.sqlalchemy.org/en/13/core/connections.html</div></div></a></figure><figure id="b0ba9326-9651-405a-a056-ec6f3cbeee00"><a href="https://pandas.pydata.org/pandas-docs/stable/reference/api/pandas.DataFrame.to_sql.html" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">pandas.DataFrame.to_sql - pandas 1.5.2 documentation</div><div class="bookmark-description">Write records stored in a DataFrame to a SQL database. Databases supported by SQLAlchemy [1] are supported. Tables can be newly created, appended to, or overwritten. Parameters Name of SQL table. consqlalchemy.engine.(Engine or Connection) or sqlite3.Connection Using SQLAlchemy makes it possible to use any DB supported by that library.</div></div><div class="bookmark-href"><img src="https://pandas.pydata.org/pandas-docs/stable/_static/favicon.ico" class="icon bookmark-icon"/>https://pandas.pydata.org/pandas-docs/stable/reference/api/pandas.DataFrame.to_sql.html</div></div></a></figure></details></li></ul><p id="86397352-7703-468a-a32c-1552f8b1a2fc" class="">
</p><h2 id="3049f038-525c-4bd7-af05-ef58b957dc42" class="">Commandes magiques</h2><figure id="321b7a4d-87f9-4815-8d95-3d92e05c5998"><a href="https://ipython.readthedocs.io/en/stable/interactive/magics.html" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">Built-in magic commands - IPython 8.7.0 documentation</div><div class="bookmark-description">Important This documentation covers IPython versions 6.0 and higher. Beginning with version 6.0, IPython stopped supporting compatibility with Python versions lower than 3.3 including all versions of Python 2.7. If you are looking for an IPython version compatible with Python 2.7, please use the IPython 5.x LTS release and refer to its documentation (LTS is the long term support release).</div></div><div class="bookmark-href"><img src="https://ipython.readthedocs.io/en/stable/_static/favicon.ico" class="icon bookmark-icon"/>https://ipython.readthedocs.io/en/stable/interactive/magics.html</div></div></a></figure><p id="34eea512-4c8d-4ce5-ae9b-797cd5d570e7" class="">
</p><h2 id="4cc7fe49-ba5f-4bd3-9c54-2b00b3c3158f" class="">sqlachemy VS mysql.connector</h2><p id="1be46d28-fe56-4562-a1ff-bbaf6f3497e8" class="">Ce sont deux modules de python qui permettent de se connecter à une base de donnée MySQL et effectuer des opération dessus. </p><p id="d4973a3b-3964-4aad-87b4-7ba01e26daf8" class="">
</p><p id="c1c1fadb-4e64-43dc-a022-9432791f4a72" class="">sqlalchemy est lui un ORM qui permet de se connecter à plusieurs SGBD et garder le même code pour tous (utile en cas de migration de SGBD). </p><table id="47cbe82b-5ddd-4e64-800d-0c5351358c97" class="simple-table"><tbody><tr id="1eba9052-d43e-4fbf-8f5f-283924e5c317"><td id="mQNq" class=""></td><td id="ff~^" class=""><a href="https://docs.sqlalchemy.org/en/13/core/engines_connections.html">sqlalchemy</a></td><td id="BYEQ" class=""><a href="https://dev.mysql.com/doc/connector-python/en/connector-python-reference.html">mysql.connector</a></td></tr><tr id="76cc133e-a31f-4e95-9868-8a7f65f04995"><td id="mQNq" class="">SGBDR</td><td id="ff~^" class="">ORM (PostgreSQL, SQLite, MySQL, Oracle, MS-SQL, Firebird, Informix)</td><td id="BYEQ" class="">MySQL</td></tr><tr id="b9c50341-45b6-424a-aa97-ebda455bacba"><td id="mQNq" class="">Insertion DF in SGBD</td><td id="ff~^" class="">Panda (to_sql) </td><td id="BYEQ" class="">à la main</td></tr></tbody></table><h2 id="c33415fd-8d8b-4ec6-9f34-1ec8cb080803" class="">Librairie ipython-sql</h2><p id="b74a7dd4-e18d-49d9-bb06-758f32b59296" class="">Permet d’utiliser les commandes magiques <code>%sql</code> et <code>%%sql</code>. Utilise <code>sqlalchemy</code>.</p><ul id="eeeed88f-8fcf-46a5-b4f6-b83f6f704f32" class="bulleted-list"><li style="list-style-type:disc">Installer la librairie ipython-sql. <code>pip install ipython-sql</code> </li></ul><ul id="08ad1bc0-0f3a-471e-9119-c082e9e6f56e" class="bulleted-list"><li style="list-style-type:disc">Ne fonctionne qu’avec Jupyter, mais on peut émuler les <strong>cellules </strong>de code sur spyder avec <code>#%%</code>. 
ctrl+’enter’ pour exécuter une cellule.
shift+’enter’ pour exécuter et passer à la cellule suivante.</li></ul><ul id="7df4891e-cf8c-44cb-bd02-a8be5265276e" class="bulleted-list"><li style="list-style-type:disc">charger <code>%load_ext sql</code>. </li></ul><ul id="da3c7775-9112-45e4-b11c-654d0d91de1a" class="bulleted-list"><li style="list-style-type:disc">Se connecter à la DB : <code>%sql mysql://user:pwd@localhost/database_name</code></li></ul><ul id="95b574c8-f2df-469c-9fe2-79b89ae7c558" class="bulleted-list"><li style="list-style-type:disc"><code>%%sql</code> s’applique à toute la <strong>cellule</strong> et permet que le reste du script soit traiter comme script SQL.<pre id="38d0c005-4992-4514-8885-4f426b380464" class="code"><code>%%sql
SELECT * FROM employees
W&lt;HERE ROWNUM &lt;=5</code></pre></li></ul><ul id="6c3c8ae5-94e5-46b5-85c7-715dcb5fc894" class="bulleted-list"><li style="list-style-type:disc"><code>%sql</code> s’applique à toute la ligne et permet que le reste du script soit traiter comme script SQL.<pre id="30a3f584-d2e4-4222-a90a-f583bcda754a" class="code"><code>#%%
a = %sql SELECT * FROM Fam</code></pre></li></ul><ul id="25966b88-e0b5-4e92-8a7e-6b9ad115d3b4" class="bulleted-list"><li style="list-style-type:disc">&lt;&lt; assigne une requête multi-ligne SQL à une variable :
<pre id="88951391-01ae-47c8-8575-40a09d049ec2" class="code"><code>#%%
%%sql result &lt;&lt; SELECT Date, transaction, price, no FROM Book
Order BY price DESC 
LIMIT 10

#%%
result.csv(&#x27;Desktop/mydata.csv&#x27;)
result.DataFrame() </code></pre></li></ul><ul id="86ccf122-6845-49d0-a875-ca0192da2447" class="bulleted-list"><li style="list-style-type:disc">Fermer la connexion :<pre id="e363408f-3c2e-41d8-b8e5-8932550a19f0" class="code"><code>#%%
%sql -x / --close &quot;connection name&quot;</code></pre></li></ul><p id="bb2ac747-9ee1-4b50-86b7-59d8ee7ba49b" class="">
</p><figure id="9a502c93-dbd3-4ead-a1b8-a7740eeb5550"><a href="https://holypython.com/python-sqlite-tutorial/python-magic-for-sql/" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">Python Magic for SQL | HolyPython.com</div><div class="bookmark-description">Advanced Python Projects ready to be mastered, provided by HolyPython. Gain confidence with just the most effective learning reinforcement methods.</div></div><div class="bookmark-href"><img src="https://holypython.com/wp-content/uploads/2020/10/cropped-HolyPython_favicon-192x192.png" class="icon bookmark-icon"/>https://holypython.com/python-sqlite-tutorial/python-magic-for-sql/</div></div><img src="https://holypython.com/wp-content/uploads/2020/02/banner-286x300.png" class="bookmark-image"/></a></figure><figure id="731f7aad-4c87-4996-a6ca-e58293a5d423"><a href="http://www.xavierdupre.fr/app/pyensae/helpsphinx/notebooks/pyensae_sql_magic.html" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">SQL Magic Commands with SQLite in a Notebook - pyensae 1.3.934.934</div><div class="bookmark-description">Links: notebook , html, PDF , python , slides, GitHub SQL from a notebooks, using magic commands to query a sqllite3 database. This notebook introduced some of the magic commands used to easily query a SQLite database with sqlite3. SQLite databases can be easily manipulated with open source tools such as SQLite Manager (add-on for firefox) or SQLiteSpy (only on Windows).</div></div><div class="bookmark-href"><img src="http://www.xavierdupre.fr/app/pyensae/helpsphinx/_static/project_ico.ico" class="icon bookmark-icon"/>http://www.xavierdupre.fr/app/pyensae/helpsphinx/notebooks/pyensae_sql_magic.html</div></div><img src="http://www.xavierdupre.fr/app/pyensae/helpsphinx/_images/pyensae_sql_magic_37_0.png" class="bookmark-image"/></a></figure></div></article>  














 <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><style>
/* cspell:disable-file */
/* webkit printing magic: print all background colors */
html {
	-webkit-print-color-adjust: exact;
}
* {
	box-sizing: border-box;
	-webkit-print-color-adjust: exact;
}

.pdf-relative-link-path {
	font-size: 80%;
	color: #444;
}

h1,
h2,
h3 {
	letter-spacing: -0.01em;
	line-height: 1.2;
	font-weight: 600;
	margin-bottom: 0;
}

.page-title {
	font-size: 2.5rem;
	font-weight: 700;
	margin-top: 0;
	margin-bottom: 0.75em;
}

h1 {
	font-size: 1.875rem;
	margin-top: 1.875rem;
}

h2 {
	font-size: 1.5rem;
	margin-top: 1.5rem;
}

h3 {
	font-size: 1.25rem;
	margin-top: 1.25rem;
}

.source {
	border: 1px solid #ddd;
	border-radius: 3px;
	padding: 1.5em;
	word-break: break-all;
}

.callout {
	border-radius: 3px;
	padding: 1rem;
}

figure {
	margin: 1.25em 0;
	page-break-inside: avoid;
}

figcaption {
	opacity: 0.5;
	font-size: 85%;
	margin-top: 0.5em;
}

mark {
	background-color: transparent;
}

.indented {
	padding-left: 1.5em;
}

hr {
	background: transparent;
	display: block;
	width: 100%;
	height: 1px;
	visibility: visible;
	border: none;
	border-bottom: 1px solid rgba(55, 53, 47, 0.09);
}

img {
	max-width: 100%;
}

@media only print {
	img {
		max-height: 100vh;
		object-fit: contain;
	}
}

@page {
	margin: 1in;
}

.collection-content {
	font-size: 0.875rem;
}

.column-list {
	display: flex;
	justify-content: space-between;
}

.column {
	padding: 0 1em;
}

.column:first-child {
	padding-left: 0;
}

.column:last-child {
	padding-right: 0;
}

.table_of_contents-item {
	display: block;
	font-size: 0.875rem;
	line-height: 1.3;
	padding: 0.125rem;
}

.table_of_contents-indent-1 {
	margin-left: 1.5rem;
}

.table_of_contents-indent-2 {
	margin-left: 3rem;
}

.table_of_contents-indent-3 {
	margin-left: 4.5rem;
}

.table_of_contents-link {
	text-decoration: none;
	opacity: 0.7;
	border-bottom: 1px solid rgba(55, 53, 47, 0.18);
}

table,
th,
td {
	border: 1px solid rgba(55, 53, 47, 0.09);
	border-collapse: collapse;
}

table {
	border-left: none;
	border-right: none;
}

th,
td {
	font-weight: normal;
	padding: 0.25em 0.5em;
	line-height: 1.5;
	min-height: 1.5em;
	text-align: left;
}

th {
	color: rgba(55, 53, 47, 0.6);
}

ol,
ul {
	margin: 0;
	margin-block-start: 0.6em;
	margin-block-end: 0.6em;
}

li > ol:first-child,
li > ul:first-child {
	margin-block-start: 0.6em;
}

ul > li {
	list-style: disc;
}

ul.to-do-list {
	text-indent: -1.7em;
}

ul.to-do-list > li {
	list-style: none;
}

.to-do-children-checked {
	text-decoration: line-through;
	opacity: 0.375;
}

ul.toggle > li {
	list-style: none;
}

ul {
	padding-inline-start: 1.7em;
}

ul > li {
	padding-left: 0.1em;
}

ol {
	padding-inline-start: 1.6em;
}

ol > li {
	padding-left: 0.2em;
}

.mono ol {
	padding-inline-start: 2em;
}

.mono ol > li {
	text-indent: -0.4em;
}

.toggle {
	padding-inline-start: 0em;
	list-style-type: none;
}

/* Indent toggle children */
.toggle > li > details {
	padding-left: 1.7em;
}

.toggle > li > details > summary {
	margin-left: -1.1em;
}

.selected-value {
	display: inline-block;
	padding: 0 0.5em;
	background: rgba(206, 205, 202, 0.5);
	border-radius: 3px;
	margin-right: 0.5em;
	margin-top: 0.3em;
	margin-bottom: 0.3em;
	white-space: nowrap;
}

.collection-title {
	display: inline-block;
	margin-right: 1em;
}

.simple-table {
	margin-top: 1em;
	font-size: 0.875rem;
	empty-cells: show;
}
.simple-table td {
	height: 29px;
	min-width: 120px;
}

.simple-table th {
	height: 29px;
	min-width: 120px;
}

.simple-table-header-color {
	background: rgb(247, 246, 243);
	color: black;
}
.simple-table-header {
	font-weight: 500;
}

time {
	opacity: 0.5;
}

.icon {
	display: inline-block;
	max-width: 1.2em;
	max-height: 1.2em;
	text-decoration: none;
	vertical-align: text-bottom;
	margin-right: 0.5em;
}

img.icon {
	border-radius: 3px;
}

.user-icon {
	width: 1.5em;
	height: 1.5em;
	border-radius: 100%;
	margin-right: 0.5rem;
}

.user-icon-inner {
	font-size: 0.8em;
}

.text-icon {
	border: 1px solid #000;
	text-align: center;
}

.page-cover-image {
	display: block;
	object-fit: cover;
	width: 100%;
	max-height: 30vh;
}

.page-header-icon {
	font-size: 3rem;
	margin-bottom: 1rem;
}

.page-header-icon-with-cover {
	margin-top: -0.72em;
	margin-left: 0.07em;
}

.page-header-icon img {
	border-radius: 3px;
}

.link-to-page {
	margin: 1em 0;
	padding: 0;
	border: none;
	font-weight: 500;
}

p > .user {
	opacity: 0.5;
}

td > .user,
td > time {
	white-space: nowrap;
}

input[type="checkbox"] {
	transform: scale(1.5);
	margin-right: 0.6em;
	vertical-align: middle;
}

p {
	margin-top: 0.5em;
	margin-bottom: 0.5em;
}

.image {
	border: none;
	margin: 1.5em 0;
	padding: 0;
	border-radius: 0;
	text-align: center;
}

.code,
code {
	background: rgba(135, 131, 120, 0.15);
	border-radius: 3px;
	padding: 0.2em 0.4em;
	border-radius: 3px;
	font-size: 85%;
	tab-size: 2;
}

code {
	color: #eb5757;
}

.code {
	padding: 1.5em 1em;
}

.code-wrap {
	white-space: pre-wrap;
	word-break: break-all;
}

.code > code {
	background: none;
	padding: 0;
	font-size: 100%;
	color: inherit;
}

blockquote {
	font-size: 1.25em;
	margin: 1em 0;
	padding-left: 1em;
	border-left: 3px solid rgb(55, 53, 47);
}

.bookmark {
	text-decoration: none;
	max-height: 8em;
	padding: 0;
	display: flex;
	width: 100%;
	align-items: stretch;
}

.bookmark-title {
	font-size: 0.85em;
	overflow: hidden;
	text-overflow: ellipsis;
	height: 1.75em;
	white-space: nowrap;
}

.bookmark-text {
	display: flex;
	flex-direction: column;
}

.bookmark-info {
	flex: 4 1 180px;
	padding: 12px 14px 14px;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}

.bookmark-image {
	width: 33%;
	flex: 1 1 180px;
	display: block;
	position: relative;
	object-fit: cover;
	border-radius: 1px;
}

.bookmark-description {
	color: rgba(55, 53, 47, 0.6);
	font-size: 0.75em;
	overflow: hidden;
	max-height: 4.5em;
	word-break: break-word;
}

.bookmark-href {
	font-size: 0.75em;
	margin-top: 0.25em;
}

.sans { font-family: ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"; }
.code { font-family: "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace; }
.serif { font-family: Lyon-Text, Georgia, ui-serif, serif; }
.mono { font-family: iawriter-mono, Nitti, Menlo, Courier, monospace; }
.pdf .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK JP'; }
.pdf:lang(zh-CN) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK SC'; }
.pdf:lang(zh-TW) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK TC'; }
.pdf:lang(ko-KR) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK KR'; }
.pdf .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
.pdf:lang(zh-CN) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
.pdf:lang(zh-TW) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
.pdf:lang(ko-KR) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
.pdf .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK JP'; }
.pdf:lang(zh-CN) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK SC'; }
.pdf:lang(zh-TW) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK TC'; }
.pdf:lang(ko-KR) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK KR'; }
.pdf .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
.pdf:lang(zh-CN) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
.pdf:lang(zh-TW) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
.pdf:lang(ko-KR) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
.highlight-default {
	color: rgba(55, 53, 47, 1);
}
.highlight-gray {
	color: rgba(120, 119, 116, 1);
	fill: rgba(120, 119, 116, 1);
}
.highlight-brown {
	color: rgba(159, 107, 83, 1);
	fill: rgba(159, 107, 83, 1);
}
.highlight-orange {
	color: rgba(217, 115, 13, 1);
	fill: rgba(217, 115, 13, 1);
}
.highlight-yellow {
	color: rgba(203, 145, 47, 1);
	fill: rgba(203, 145, 47, 1);
}
.highlight-teal {
	color: rgba(68, 131, 97, 1);
	fill: rgba(68, 131, 97, 1);
}
.highlight-blue {
	color: rgba(51, 126, 169, 1);
	fill: rgba(51, 126, 169, 1);
}
.highlight-purple {
	color: rgba(144, 101, 176, 1);
	fill: rgba(144, 101, 176, 1);
}
.highlight-pink {
	color: rgba(193, 76, 138, 1);
	fill: rgba(193, 76, 138, 1);
}
.highlight-red {
	color: rgba(212, 76, 71, 1);
	fill: rgba(212, 76, 71, 1);
}
.highlight-gray_background {
	background: rgba(241, 241, 239, 1);
}
.highlight-brown_background {
	background: rgba(244, 238, 238, 1);
}
.highlight-orange_background {
	background: rgba(251, 236, 221, 1);
}
.highlight-yellow_background {
	background: rgba(251, 243, 219, 1);
}
.highlight-teal_background {
	background: rgba(237, 243, 236, 1);
}
.highlight-blue_background {
	background: rgba(231, 243, 248, 1);
}
.highlight-purple_background {
	background: rgba(244, 240, 247, 0.8);
}
.highlight-pink_background {
	background: rgba(249, 238, 243, 0.8);
}
.highlight-red_background {
	background: rgba(253, 235, 236, 1);
}
.block-color-default {
	color: inherit;
	fill: inherit;
}
.block-color-gray {
	color: rgba(120, 119, 116, 1);
	fill: rgba(120, 119, 116, 1);
}
.block-color-brown {
	color: rgba(159, 107, 83, 1);
	fill: rgba(159, 107, 83, 1);
}
.block-color-orange {
	color: rgba(217, 115, 13, 1);
	fill: rgba(217, 115, 13, 1);
}
.block-color-yellow {
	color: rgba(203, 145, 47, 1);
	fill: rgba(203, 145, 47, 1);
}
.block-color-teal {
	color: rgba(68, 131, 97, 1);
	fill: rgba(68, 131, 97, 1);
}
.block-color-blue {
	color: rgba(51, 126, 169, 1);
	fill: rgba(51, 126, 169, 1);
}
.block-color-purple {
	color: rgba(144, 101, 176, 1);
	fill: rgba(144, 101, 176, 1);
}
.block-color-pink {
	color: rgba(193, 76, 138, 1);
	fill: rgba(193, 76, 138, 1);
}
.block-color-red {
	color: rgba(212, 76, 71, 1);
	fill: rgba(212, 76, 71, 1);
}
.block-color-gray_background {
	background: rgba(241, 241, 239, 1);
}
.block-color-brown_background {
	background: rgba(244, 238, 238, 1);
}
.block-color-orange_background {
	background: rgba(251, 236, 221, 1);
}
.block-color-yellow_background {
	background: rgba(251, 243, 219, 1);
}
.block-color-teal_background {
	background: rgba(237, 243, 236, 1);
}
.block-color-blue_background {
	background: rgba(231, 243, 248, 1);
}
.block-color-purple_background {
	background: rgba(244, 240, 247, 0.8);
}
.block-color-pink_background {
	background: rgba(249, 238, 243, 0.8);
}
.block-color-red_background {
	background: rgba(253, 235, 236, 1);
}
.select-value-color-pink { background-color: rgba(245, 224, 233, 1); }
.select-value-color-purple { background-color: rgba(232, 222, 238, 1); }
.select-value-color-green { background-color: rgba(219, 237, 219, 1); }
.select-value-color-gray { background-color: rgba(227, 226, 224, 1); }
.select-value-color-opaquegray { background-color: rgba(255, 255, 255, 0.0375); }
.select-value-color-orange { background-color: rgba(250, 222, 201, 1); }
.select-value-color-brown { background-color: rgba(238, 224, 218, 1); }
.select-value-color-red { background-color: rgba(255, 226, 221, 1); }
.select-value-color-yellow { background-color: rgba(253, 236, 200, 1); }
.select-value-color-blue { background-color: rgba(211, 229, 239, 1); }

.checkbox {
	display: inline-flex;
	vertical-align: text-bottom;
	width: 16;
	height: 16;
	background-size: 16px;
	margin-left: 2px;
	margin-right: 5px;
}

.checkbox-on {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22%2358A9D7%22%2F%3E%0A%3Cpath%20d%3D%22M6.71429%2012.2852L14%204.9995L12.7143%203.71436L6.71429%209.71378L3.28571%206.2831L2%207.57092L6.71429%2012.2852Z%22%20fill%3D%22white%22%2F%3E%0A%3C%2Fsvg%3E");
}

.checkbox-off {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20x%3D%220.75%22%20y%3D%220.75%22%20width%3D%2214.5%22%20height%3D%2214.5%22%20fill%3D%22white%22%20stroke%3D%22%2336352F%22%20stroke-width%3D%221.5%22%2F%3E%0A%3C%2Fsvg%3E");
}
	
</style></head> <article id="86c76595-d1d2-425b-bc17-ccde71e8be62" class="page sans"><header><img class="page-cover-image" src="https://www.notion.so/images/page-cover/woodcuts_1.jpg" style="object-position:center 90%"/><h1 id=<?php echo $ini ; $ini++ ;?> class="page-title">Story 12 - CRUD &amp; Jointures &amp; Divers</h1></header><div class="page-body"><h1 id="942de5ec-9bfa-4104-b3b1-c576d8e3d034" class="block-color-orange_background">Contexte</h1><p id="36376e8d-3af6-4625-9e8a-ed8c8ca506f2" class=""><mark class="highlight-blue">Apprendre à utiliser le langage SQL afin de créer, lire, modifier et supprimer des données dans une base de données. </mark></p><h1 id="bdee2762-a7a0-453a-9077-d032dd09b1ac" class="block-color-orange_background">Mots clés</h1><ul id="9e9fde6b-b68e-4dde-bfd5-a61e23390ade" class="toggle"><li> <details><summary><strong>CRUD</strong></summary><p id="80a33362-03a8-48b2-9504-8d48a9117a65" class=""><em>Create, Read, Update, Delete</em>. </p><blockquote id="fc6b387e-a5ee-448b-8a2a-1818faf15799" class="">Opérations élémentaires sur une base de données qui permet de créé, lire, mettre à jour et effacer des données. </blockquote><p id="4b9c131a-a5c1-4710-b014-6c98c3cd1fa5" class=""><strong>CREATE</strong></p><pre id="522a2df7-ee28-4c0e-82e6-fb31f2ab32ca" class="code"><code>CREATE DATABASE nomdelabase;

CREATE TABLE utilisateur (
id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(100),
prenom VARCHAR(100),
email VARCHAR(255) NOT NULL UNIQUE
);


// ATTENTION au BackTicks //


// Ajout d&#x27;un record
INSERT INTO utilisateur (nom, prenom, email)
VALUES (&#x27;Durantay&#x27;, &#x27;Quentin&#x27;, &#x27;quentin@gmail.com&#x27;);

//Ajout de plusieurs record
INSERT INTO `utilisateur` (`nom`, `prenom`, `email`)
VALUES
(&#x27;Doe&#x27;, &#x27;John&#x27;, &#x27;john@yahoo.fr&#x27;),
(&#x27;Smith&#x27;, &#x27;Jane&#x27;, &#x27;jane@hotmail.com&#x27;),
(&#x27;Dupont&#x27;, &#x27;Sebastien&#x27;, &#x27;sebastien@orange.fr&#x27;),
(&#x27;Martin&#x27;, &#x27;Emilie&#x27;, &#x27;emilie@gmail.com&#x27;);</code></pre><p id="f78d8a3d-fbbd-4975-ba10-4595fe51cf97" class=""><strong>READ</strong></p><pre id="fbbe1b47-4100-43d6-a4ec-b89b3222ed5e" class="code"><code>SELECT `colonne1`, `colonne2` FROM table;

SELECT `colonne1`, `colonne2` WHERE id=&quot;1&quot;;
SELECT * FROM aliment WHERE calories &lt; 90;
SELECT * FROM users WHERE email LIKE &quot;%gmail.com&quot;;</code></pre><p id="314d4b87-907a-43e5-974d-650ffd0e56f3" class=""><strong>UPDATE</strong></p><pre id="bf066854-debe-4643-ba73-29fdd5446830" class="code"><code>// Modifie un champ
UPDATE `table` SET `colonne` = &#x27;new value&#x27; WHERE `id` = &#x27;to update&#x27;; 

// Modifie une table
ALTER TABLE aliment DROP bio;</code></pre><p id="2d9b462f-f2b8-4255-b454-e221e807b7cc" class=""><strong>DELETE</strong></p><pre id="2a01d8ad-2d5f-4830-8788-49eacabb3332" class="code"><code>DELETE FROM `table` WHERE `id` = &#x27;2&#x27;;

DROP DATABASE ma_base;

DROP DATABASE IF EXISTS ma_base;

DROP TABLE `user`;</code></pre></details></li></ul><ul id="691fc6e6-9f0a-4c46-bb66-e9b1341421b5" class="toggle"><li> <details><summary><strong>Jointures </strong></summary><p id="705c51ca-d207-4488-8e73-08e540d31e02" class="">Opération qui permet de lier plusieurs tables entre elles avec les clés primaires et étrangères.</p></details></li></ul><ul id="0624878e-45c5-42ab-be29-099418673bdb" class="toggle"><li> <details><summary><strong>Jointures internes </strong><code><strong>INNER JOIN</strong></code></summary><p id="3a81ecdf-81ee-4148-8e9f-971ab844d300" class="">C’est assembler plusieurs tables entres elles qui ne conservent que les données qui ont une correspondance entre elles.</p><pre id="9da556ee-54b1-41c8-aaa0-45f4920a6c3c" class="code"><code>SELECT *
FROM table1
INNER JOIN table2
ON table1.id = table2.fk_id
WHERE table1.name = &#x27;bleue&#x27;</code></pre><figure id="ea90dd19-760c-4ef2-a90c-5504d0f40d3d" class="image"><a href="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/jointure_interne.png"><img style="width:529px" src="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/jointure_interne.png"/></a></figure><figure id="920c05ef-083c-4d47-857f-b3b383ba6042" class="image"><a href="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/sql-ensemble-intersect-300.png"><img style="width:300px" src="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/sql-ensemble-intersect-300.png"/></a></figure></details></li></ul><ul id="68ef6a49-6171-48e8-9b6a-84362657241c" class="toggle"><li> <details><summary><strong>Jointures externes</strong></summary><p id="3108259c-9c7c-4f81-8005-a5e2a5a372d9" class="">C’est assembler plusieurs tables entres elles en conservant les données qui n’ont pas de correspondance à gauche (première table) ou a droite (deuxième table).</p></details></li></ul><ul id="bf3505da-b9dd-49ae-9c00-67ed9094b4f1" class="toggle"><li> <details><summary><code><strong>LEFT JOIN </strong></code></summary><blockquote id="8101c6b1-6b95-4fb3-9cd4-5d9fc4a97cab" class="">Conserve la table de gauche (la première dans la requête) et lie la seconde avec les clés primaires et étrangères.</blockquote><pre id="e01bae49-2840-44a5-afcf-ff86c92fa0a3" class="code code-wrap"><code>SELECT u.full_name, c.comment
FROM users u
LEFT JOIN comments c
ON u.user_id = c.user_id</code></pre><figure id="9a853c95-03d3-46a4-9984-e05aff6caea4" class="image"><a href="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/LEFTJOIN.png"><img style="width:529px" src="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/LEFTJOIN.png"/></a></figure><figure id="59f63aea-2100-424c-b8f0-b8a67c118a5b" class="image"><a href="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/sql-left-join-300.png"><img style="width:300px" src="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/sql-left-join-300.png"/></a></figure></details></li></ul><ul id="72586077-204c-4d6d-95a6-5619e3b3ba87" class="toggle"><li> <details><summary><code><strong>RIGHT JOIN</strong></code></summary><blockquote id="2219de43-a37c-4837-8911-a00ea8b1d485" class="">Conserve la table de droite (la seconde dans la requête) et lie la première avec les clés primaires et étrangères.</blockquote><pre id="98a47c19-cefc-44b9-83bf-69daeaa06312" class="code"><code>SELECT u.full_name, c.comment
FROM users u
RIGHT JOIN comments c
ON u.user_id = c.user_id</code></pre><figure id="dda4967c-0b72-4bfd-9cef-fa8bb73fd701" class="image"><a href="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/RIGHTJOIN.png"><img style="width:873px" src="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/RIGHTJOIN.png"/></a></figure><figure id="07810e7a-835d-48a4-bdec-e405e7be07ff" class="image"><a href="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/sql-right-join-300.png"><img style="width:300px" src="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/sql-right-join-300.png"/></a></figure></details></li></ul><ul id="00fc77de-12ce-43bf-996b-cd19546b20a0" class="toggle"><li> <details><summary><code><strong>FULL JOIN</strong></code></summary><p id="7935d771-4e15-4448-89ac-ce44c4b2f679" class="">jointure externe pour retourner les résultats quand la condition est vrai dans au moins une des 2 tables.</p><pre id="b7a429ba-b0f4-4201-98e2-da480f7d4a9b" class="code"><code>SELECT * FROM A FULL JOIN B ON A.key = B.key</code></pre><figure id="f4cbdf0f-b56c-4608-a4f2-15bfcc96cb5f" class="image"><a href="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/sql-ensemble-union-300.png"><img style="width:300px" src="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/sql-ensemble-union-300.png"/></a></figure></details></li></ul><p id="9d1df642-5adf-424a-a10e-893d9b108a90" class="">
</p><ul id="8f4fe8f6-091c-467a-8dea-548ef9ece1e9" class="toggle"><li> <details><summary><code><strong>USE base_de_données</strong></code></summary><blockquote id="fa462eb4-87bb-47d6-a6e0-540eff2d49cc" class="">Précise sur quelle base on souhaite travailler</blockquote></details></li></ul><ul id="80f5bca2-0df0-43d0-8652-263d75cbe34f" class="toggle"><li> <details><summary><code><strong>SHOW database</strong></code></summary><p id="d06f32ea-ccce-4ab4-8012-82789aa225e1" class=""><code>SHOW DATABASES;</code> montre toutes les bases.
Ou <code>SHOW TABLES FROM nom_de_la_base</code></p><p id="ae374183-74b1-4b8d-b6e4-6de8bb7e676c" class="">Faire <code>USE</code> avant de <code>SHOW</code>. </p><p id="47aef39d-5db2-42e1-a8f9-250c5a7c2c0e" class="">Ou <code>SHOW COLUMNS FROM lenomdematable;</code></p></details></li></ul><ul id="72929f23-47a0-4777-9f1f-5036dfaa18f1" class="toggle"><li> <details><summary><code><strong>SHOW tables</strong></code></summary><p id="8b2e2de3-c3f9-4df2-976f-ff132c9e7fab" class="">On demande à MySQL de nous afficher toutes les tables présentes dans notre base grâce à cette commande.</p><pre id="22a282ef-879c-47bc-b11b-2fd15af31963" class="code"><code>USE database;
SHOW COLUMNS FROM lenomdematable;</code></pre></details></li></ul><p id="d7760b5e-d73a-409d-bf3f-13eef42cf243" class="">
</p><ul id="a2f59d17-33a6-4560-8712-1ed94b726dc0" class="toggle"><li> <details><summary><strong>Fonction d’agrégation</strong></summary><blockquote id="5ad3ecec-d4f0-4f33-b2eb-28d91603c713" class="">Fonction qui permet de récupérer une seule valeur sur une sélection d’enregistrement pour un champ précis. </blockquote><figure id="7613ba3f-3d90-4824-9bde-f295ef71aecb"><a href="https://sql.sh/fonctions/agregation" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">Fonctions d&#x27;agrégation SQL - SQL</div><div class="bookmark-description">Les fonctions d&#x27;agrégation dans le langage SQL permettent d&#x27;effectuer des opérations statistiques sur un ensemble d&#x27;enregistrement. Étant données que ces fonctions s&#x27;appliquent à plusieurs lignes en même temps, elle permettent des opérations qui servent à récupérer l&#x27;enregistrement le plus petit, le ...</div></div><div class="bookmark-href"><img src="https://sql.sh/favicon.ico" class="icon bookmark-icon"/>https://sql.sh/fonctions/agregation</div></div></a></figure><p id="fd8fd0ad-f5bf-4840-9236-e9175be3626e" class=""><a href="https://sql.sh/fonctions/agregation/avg"><code>AVG()</code></a> Valeur moyenne</p><pre id="e289ec87-8a4b-4792-aa79-106c74a2bf97" class="code"><code>SELECT AVG(c.review) as rating FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1
&gt;&gt;&gt; 2.3333</code></pre><p id="168b88fe-cea8-4b7b-b0b5-ae76e7bfd76d" class=""><a href="https://sql.sh/fonctions/agregation/count"><code>COUNT()</code></a></p><p id="727e3588-3a6c-4db1-aa90-4ac106f31026" class=""><a href="https://sql.sh/fonctions/agregation/max"><code>MAX()</code></a></p><p id="173410d7-8549-4542-80fe-74244ed2a804" class=""><a href="https://sql.sh/fonctions/agregation/min"><code>MIN()</code></a></p><p id="2b2e27ba-d887-47f2-8717-239623396461" class=""><a href="https://sql.sh/fonctions/agregation/sum"><code>SUM()</code></a></p></details></li></ul><ul id="0a0c6d77-22b0-4793-a93e-d4898ceefa64" class="toggle"><li> <details><summary><strong>Fonction scalaire</strong></summary><p id="00f25bb5-13ba-4444-9c0d-612f773668af" class="">C’est une fonction qui s’applique à chaque élément sélectionné. </p><p id="f68a7aff-877a-41b5-824c-173c932e7ff4" class=""><code>ROUND()
</code>Arrondi une valeur</p></details></li></ul><ul id="263db417-976a-4d96-9d40-da0cd4a43c62" class="toggle"><li> <details><summary><strong>Backticks</strong></summary><figure id="2817f19f-cdd5-4010-bbb4-fb866137b285" class="image"><a href="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/ponctuation_static.png"><img style="width:821px" src="Story%2012%20-%20CRUD%20&amp;%20Jointures%20&amp;%20Divers%2086c76595d1d2425bbc17ccde71e8be62/ponctuation_static.png"/></a></figure></details></li></ul><p id="ccf7c1cb-b20b-4c92-98ee-d7e4d342ef61" class="">
</p><ul id="484b1eed-e234-404c-a48a-3b2d509168c6" class="toggle"><li> <details><summary><code>GROUPE BY</code></summary><blockquote id="9d845db8-e437-476d-9704-a2df8e65de74" class="">Groupe les données en fonction de l’attribut demandé. </blockquote><p id="49ba5d4c-235c-4c5a-ae3c-27d643dcd218" class="">Il faut utiliser <code>GROUP BY</code> en même temps qu&#x27;une fonction d&#x27;agrégat, sinon il ne sert à rien.</p><p id="8dca883b-f0df-464a-9200-23633ae541aa" class=""><code>HAVING</code> est un peu l&#x27;équivalent de <code>WHERE</code>, mais il agit sur les données une fois qu&#x27;elles ont été regroupées. 
C&#x27;est donc une façon de filtrer les données à la fin des opérations</p><pre id="7a32c780-7f82-49a0-a6e9-95b7d7798788" class="code"><code>SELECT AVG(review), recipe_id FROM comments GROUP BY recipe_id</code></pre></details></li></ul><ul id="cd6961fe-c915-4f0c-935d-ec67ae3665b7" class="toggle"><li> <details><summary><code>ORDER BY</code></summary><p id="7fab9719-e63a-4d63-aabd-050e08a4e2e6" class=""><code>ORDER BY &#x27;colonne&#x27;</code> donne par défaut dans l&#x27;ordre alphabétique.</p><pre id="fa5c9e99-1732-4cb7-ad4a-02e02c79a0e6" class="code"><code>ORDER BY &#x27;colonne&#x27; ASC
ORDER BY &#x27;colonne&#x27; DESC</code></pre></details></li></ul><ul id="f4cc1cd5-cd66-42ec-9033-7e73e5c5f35b" class="toggle"><li> <details><summary><code>COUNT()</code></summary><p id="cefab3b6-3458-437e-8c3f-6f9673ea7049" class="">Retourne le nombre d’élément dans une table. </p><pre id="6d129a72-b47f-41e7-97f6-6acb205f4fa4" class="code"><code>SELECT COUNT(*) FROM utilisateur
SELECT COUNT(id) FROM utilisateur
SELECT COUNT(DISTINCT nom) // Compte les noms distincts</code></pre></details></li></ul><p id="5a9d4063-60f4-4c10-887a-0dee50c6b575" class="">
</p><ul id="1823435e-ad35-4c4c-bb5f-12089a0112a9" class="toggle"><li> <details><summary><strong>ORM</strong></summary><blockquote id="b25af104-71b1-4b5a-b50c-f81bd311de36" class="">C’est une interface entre un programme informatique et une BDDR. Permet un code qui ne dépend pas du SGBD.</blockquote><p id="742552a6-9a48-4ab4-b562-05aef512a7e6" class="">L&#x27;un des avantages est que cela réduit la quantité de code qui doit être écrit et permet une homogénéité avec le reste du code pour les langages orientés objets.</p><p id="68b9cb73-f43a-4ab1-a22a-ef7e9d2ef6d9" class="">Cependant, les ORM induisent une couche logicielle supplémentaire, ce qui peut nuire aux performances, et bien entendu à la maintenabilité. 
Par ailleurs, certains outils ORM ont historiquement montré des limites lors de la suppression de données en bloc. En outre, une base de données mal conçue peut induire une forte dépendance à un système ORM, et réciproquement.</p></details></li></ul><ul id="bc73f967-4d59-4c05-9a49-25dcf93c171e" class="toggle"><li> <details><summary><code><strong>sqlalchemy</strong></code></summary><blockquote id="7f98ec18-2a64-4d6a-81d2-e62aae1b683b" class="">Bibliothèque qui créé une interface entre python et la base de donnée. ORM. </blockquote><p id="5eba9aaf-f007-414a-9902-e269414ac10c" class="">SQLAlchemy est une bibliothèque qui permet de s&#x27;interfacer avec n&#x27;importe quel moteur de base de données tout en conservant un code identique. Base de données supportées: PostgreSQL, SQLite, MySQL, Oracle, MS-SQL, Firebird, Informix.</p><p id="b11781bc-c6e3-4683-9a4b-3630a90eb26c" class="">On créé un ‘engine’ pour se connecter à une base de donnée.</p><figure id="ffe76840-77eb-4c39-aeab-df1e1d9c60a9"><a href="https://docs.sqlalchemy.org/en/13/core/connections.html" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">SQLAlchemy 2.0 Documentation</div><div class="bookmark-description">This section details direct usage of the , , and related objects. Its important to note that when using the SQLAlchemy ORM, these objects are not generally accessed; instead, the object is used as the interface to the database.</div></div><div class="bookmark-href"><img src="https://www.sqlalchemy.org/favicon.ico" class="icon bookmark-icon"/>https://docs.sqlalchemy.org/en/13/core/connections.html</div></div></a></figure><p id="0b8f841b-7451-4e0a-9dba-5bab238622bb" class="">
</p></details></li></ul><p id="06c5b95f-7556-42a5-8abc-a322bc966bcc" class="">
</p><h1 id="f4fc72b3-b1aa-4a8e-844e-9bd001efaee1" class="block-color-orange_background">Problématiques </h1><p id="53dc9730-007f-49a9-9a88-784b452e63f3" class=""><mark class="highlight-blue">Comment faire des opérations de bases avec SQL ? </mark></p><h1 id="d9a114a4-bc7a-449d-89a0-0014bb28fa51" class="block-color-orange_background">Hypothèses</h1><p id="2a791b91-feb7-4783-9134-d01026cb8ba7" class=""><mark class="highlight-blue">On peut faire des jointures sur plusieurs base de données différentes. </mark></p><p id="8b000f1e-161d-4753-aefc-f9514c4ec7ad" class="">Faux</p><p id="61c06f1e-11f1-414e-bd05-49b58b4a178c" class="">
</p><p id="37470c4b-e5fe-48e2-a9e2-a9df4c1f9b10" class=""><mark class="highlight-blue">Lorsqu’on a effectué une jointure, elle persiste au-delà de la requête. Elle va être sauvegarder dans la mémoire physique.</mark></p><p id="c0bafa7d-4bf1-454c-9ccf-1eac32ee3792" class="">Faux</p><p id="20901a6b-8687-4f17-aa67-73495b34a6b2" class="">
</p><p id="d869101b-e82d-4e61-9d02-0f3ad8e5e132" class=""><mark class="highlight-blue">On peut enchainer les jointures entre tables à l’infini.</mark></p><p id="4bbcf990-1229-4149-8bfa-1de17067acd7" class="">Vrai </p><p id="3f90729a-c736-48dd-aa24-2c6c5fdca833" class="">
</p><p id="d1355a96-9057-4a0b-b91f-650f9affd52b" class=""><mark class="highlight-blue">LEFT JOIN modifie la clé primaire de la table sur laquelle on l’a fait. </mark></p><p id="e8ef1497-1774-46e4-aeed-0df69699d3f0" class="">Faux</p><pre id="9a27e66a-f0e7-4049-bb81-96df4c01d125" class="code"><code>SELECT u.full_name, c.comment, r.title
FROM users u
JOIN comments c
	ON u.user_id = c.user_id
JOIN recipes r
	ON c.recipe_id = r.recipe_id</code></pre><p id="5b039deb-6e8a-4b58-8e26-0bc5ab00a439" class=""><mark class="highlight-blue">Une jointure entre deux tables utilise une clé étrangère. </mark></p><p id="820bd91c-b47b-485e-85a5-d309d95c936f" class="">Vrai. Il faut un champ commun (clé primaire-clé étrangère)</p><p id="5fbbdb52-b689-4f3c-b00b-bdabb6314506" class="">
</p><p id="509419c1-5785-4d8c-b85f-15eb781cda3c" class=""><mark class="highlight-blue">Il est plus efficace de traiter sur Pandas que sur MySQL. </mark></p><p id="1041f515-270d-4b28-b745-60e9e3f65b97" class="">Cela dépend surtout du nombre de table. Plus on a de table, plus MySQL est pertinent. </p><p id="2986babd-6c34-47f0-88ab-7f4fe49eba12" class=""> </p><h2 id="c2112ea1-e2a1-4d86-af65-4d8a30c4449e" class="block-color-orange_background">Action</h2><h2 id="8c5b2506-8a8c-425e-9ad2-0b067f3d040f" class="">Ressources</h2><p id="a5d5a594-069c-4d8c-9ae5-126df8e8d59f" class=""><a href="https://towardsdatascience.com/heres-how-to-run-sql-in-jupyter-notebooks-f26eb90f3259">https://towardsdatascience.com/heres-how-to-run-sql-in-jupyter-notebooks-f26eb90f3259</a></p><p id="b81b382d-f662-4db9-acd6-f066c4ccb588" class=""><a href="https://medium.com/pythoneers/crud-operation-in-python-with-mysql-databases-e77ee5419c23">https://medium.com/pythoneers/crud-operation-in-python-with-mysql-databases-e77ee5419c23</a></p><p id="42d086b9-87ea-4953-92d7-703c7911f4b4" class=""><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql?archived-source=1959476">https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql?archived-source=1959476</a></p><p id="6d6f53ea-6cd2-4ef4-ae38-806faf9c5dca" class=""><a href="https://sql.sh/">https://sql.sh/</a></p><p id="2de8653d-5094-4783-a9c8-2d804f9c3c7c" class=""><a href="https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142248-inserez-des-donnees-dans-votre-bdd">https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142248-inserez-des-donnees-dans-votre-bdd</a></p><p id="826b3262-0bf6-401a-b1e4-78f597f00f11" class="">
</p><h2 id="4d8eeef1-c91b-4307-a4fc-4dcd731e9f8a" class="">Doc SQL</h2><figure id="d30a57e7-35ee-4436-953f-95be6123c745"><a href="https://sql.sh/" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">Cours et Tutoriels sur le Langage SQL</div><div class="bookmark-description">Le SQL (Structured Query Language) est un langage permettant de communiquer avec une base de données. Ce langage informatique est notamment très utilisé par les développeurs web pour communiquer avec les données d&#x27;un site web. SQL.sh recense des cours de SQL et des explications sur les principales commandes pour lire, insérer, modifier et supprimer des données dans une base.</div></div><div class="bookmark-href"><img src="https://sql.sh/favicon.ico" class="icon bookmark-icon"/>https://sql.sh/</div></div></a></figure><p id="8f49ddd7-07df-4c6f-8987-1bea005261ad" class="">
</p><h2 id="6fc5c534-d2ca-4711-9e56-2adb4f5c04c4" class="">Charger une BDD <code>.sql</code></h2><p id="f543ba78-c611-4757-9562-c84528715333" class="">Seul petit point important à savoir, il faut parfois avoir créé la base de données dans MySQL avant.</p><p id="9d5f7086-bf26-4d9a-848a-49af8b7a9834" class="">En terminal :</p><pre id="5cbd78f4-f85a-4936-8fe2-a085eebdb6a7" class="code"><code>mysql -u root -p nom_de_la_base_de_donnees &lt; nom_du_fichier.sql
mysql -u root -p nom_de_la_base_de_donnees &lt; mon/chemin/nom_du_fichier.sql</code></pre><p id="8c9ce2f5-0c0f-42fd-879a-9f1e456ba93b" class="">Ou dans phpMyAdmin → import dans une base existante.</p><p id="3e5c287b-2b0a-4500-a69c-62ef4b967a55" class="">Pas de requête SQL trouvé pour faire cela. voir <code>LOAD DATA LOCAL INFILE</code>.</p></div></article>  





<?php 
    $content = ob_get_clean(); 

    require_once('structure/layout.php');
?>
