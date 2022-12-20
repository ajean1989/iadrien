<?php $title = 'Introduction aux bases de données'; ?>
<?php ob_start(); ?>

<!---

à rajouter pour chaque imoort Notion : 

1. Supprimer le CSS html, body , a a visited

2. <details open="">    ->     <details>

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
	
</style></head><article id="ee7ccc93-5b5d-4066-af3d-d4844aaa5976" class="page sans"><header><img class="page-cover-image" src="https://www.notion.so/images/page-cover/nasa_multi-axis_gimbal_rig.jpg" style="object-position:center 80%"/><h1 id=<?php $ini=0; echo $ini ; $ini++ ;?> class="page-title">Story 4 - Anaconda, Jupyter Notebook, …</h1></header><div class="page-body"><h1 id="fa1ebd6d-4212-4d00-ac3b-1f7784a20df9" class="block-color-orange_background">Contexte</h1><p id="03862a1c-e423-488d-9857-497ac3d5f9dd" class=""><mark class="highlight-blue">Installation d’un environnement de développement pour l’IA et la collaboration.</mark></p><h1 id="1e7364ea-fff7-4e58-89ff-52caeb0d32ff" class="block-color-orange_background">Mots clés</h1><ul id="d0a3799e-d57c-462e-ab77-ae80ba845afe" class="toggle"><li><details><summary><strong>Poste de travail</strong></summary><blockquote id="39db0146-f723-41a5-96bd-ee945e55055a" class="">Environnement informatique matériel et logiciel à partir duquel on développe et déploie des applications IA.</blockquote></details></li></ul><ul id="f54d5cbb-74a5-4b17-a38d-b2425da19086" class="toggle"><li><details><summary><strong>Plateforme</strong></summary><blockquote id="f0c66a88-dd4d-4892-9222-9ce984b3caa0" class="">Environnement de programmation, ressources logicielles du poste de travail.</blockquote></details></li></ul><ul id="1086ceb4-4fd6-4553-9a58-3b0b6e63f135" class="toggle"><li><details><summary><strong>Environnement (Anaconda/Azure/…)</strong></summary><blockquote id="c25ba290-92e2-4fb1-95c9-e4c8185596d6" class="">Versioning propre à un projet. Préalable à tout projets. Il s’agit des librairies que l’on met à la disposition de notre projet.</blockquote></details></li></ul><ul id="ab25c611-6e4d-4c35-aa9f-f9e4462ca916" class="toggle"><li><details><summary><strong>IDE</strong></summary><blockquote id="248c2e57-9add-44cd-9150-072ead1c1bfd" class="">Environnement de développement intégré : C’est un logiciel qui regroupe des fonctions fréquemment utilisées par les développeurs comme :<ul id="de3f0316-9ad3-4f08-a168-3cdfad876f2a" class="bulleted-list"><li style="list-style-type:disc">Un éditeur de code</li></ul><ul id="bf1b2e8f-3fe7-4c43-b9d6-cbd78d5b9160" class="bulleted-list"><li style="list-style-type:disc">Compileur</li></ul><ul id="56937b19-c64f-481d-96d5-faf198147b2d" class="bulleted-list"><li style="list-style-type:disc">Débogeur</li></ul></blockquote></details></li></ul><ul id="8380b7d8-4a7d-4d8f-bcd9-03c422111978" class="toggle"><li><details><summary><a href="https://leblogducodeur.fr/langage-compile-vs-interprete/"><strong>Interpreteur</strong></a></summary><blockquote id="aea2257a-d02e-444c-b930-128a7edbe4d9" class="">Logiciel qui exécute le code en temps réel afin de délivrer un résultat immédiat.</blockquote><p id="b240c29f-97b3-4a67-aecb-02eb0055d492" class="">
</p><p id="66d6895f-c6f9-4eca-b07d-ee69d3265176" class="">Un programme va lire les instructions et va effectuer les actions correspondantes. Le soucis, c’est que l’interpréteur doit relire le programme à chaque fois, ce qui ralenti considérablement les performances du langage.</p><p id="24d74500-599e-4007-922f-14867d4fc776" class="">
</p><p id="be1cc8a2-92ce-435f-af60-85eddca21f38" class="">Il est possible de créer des nouveaux langages de programmation en créant des interpréteurs. Python par exemple est développé en C (compilé).</p><p id="d567f26a-8f36-444e-a471-b17590727238" class="">Dans ce cas, le programme (interpréteur) fonctionne pendant le programme et non pas avant (compilateur).</p><p id="63ff7924-755a-47a7-a533-a7ea3f4a5d2f" class="">Ainsi, on peut dire sans mentir que Python est à la fois un langage interprété et un langage compilé. Ce n&#x27;est pas le langage en lui-même qui est interprété ou compilé, mais la façon dont on l&#x27;utilise.</p><p id="2d339ba2-0f64-4567-92f5-f7fb03a3c415" class="">Quand on développe en Python, on n&#x27;a pas besoin de passer nous même par l&#x27;étape de compilation, mais cela ne veut pas dire pour autant que notre script Python n&#x27;est pas compilé en langage machine. C&#x27;est juste que la façon dont nous utilisons Python fait que nous n&#x27;avons pas besoin de passer par cette étape nous même, l&#x27;interpréteur Python s&#x27;en charge pour nous.</p><p id="c885af14-17b0-4e45-ab91-3519e73b7af4" class="">
</p></details></li></ul><ul id="cc7f0bc7-0c68-431f-ac9c-1862fe7e0df3" class="toggle"><li><details><summary><a href="https://leblogducodeur.fr/langage-compile-vs-interprete/"><strong>Compilateur</strong></a></summary><blockquote id="8d521450-9465-4eed-abdf-27c903802039" class="">C’est un logiciel qui transforme le code de notre programme et un autre langage compréhensible par la machine (langage machine = bytecode).</blockquote><p id="5fddf911-c72d-4cc4-8f18-be025fec6e38" class="">
</p><p id="a9177274-f504-432b-9fa5-4aba67e41771" class="">C’est un programme qui va simplement lire le code et générer un fichier binaire correspondant. Il existe aussi un autre programme généralement couplé, le pré compilateur. Son rôle est de fusionner tout les fichiers de code ensemble et d’ajouter des raccourcis dans votre code.</p><p id="1ac3461e-c8bb-4aa5-934a-56644d8735ca" class="">Gardez une chose en tête, contrairement aux langages compilés, ces programmes ne s’exécutent qu’une fois et surtout, ils travaillent avant que le programme soit exécutable. Une fois compilé, le code n’as besoin de personne pour travailler.</p><p id="ab18c397-62b9-4bc4-a7b5-4e9aa00b82d9" class="">
</p></details></li></ul><ul id="4992fb96-37f6-4d07-a044-7acd3fff3133" class="toggle"><li><details><summary><strong>Implémentation</strong></summary><blockquote id="b81bc345-18d9-4e30-83c7-9333e876ebc5" class="">Installation, organisation et mise en œuvre de ressources numériques nécessaire au déploiement de solutions IA.</blockquote></details></li></ul><ul id="fa0826d9-8400-4e97-8581-fbc2f658d055" class="toggle"><li><details><summary><strong>Visual Studio Code</strong></summary><blockquote id="ebb36005-aa3a-4b54-9b1b-93454deb099d" class="">Éditeur de code source</blockquote></details></li></ul><p id="86695a7a-fe90-414e-8568-d46445fd81d4" class="">
</p><ul id="34135369-bccf-4a9f-b2fe-55bafb77e22a" class="toggle"><li><details><summary><a href="https://fr.wikipedia.org/wiki/Python_(langage)"><strong>Python</strong></a></summary><blockquote id="bdd3d10c-9410-42c9-8af2-94ed2bc4074a" class="">Langage de programmation open source, interprété, multiplateforme, multiparadigme, à typage fort, <strong>structuré </strong>(if, else,…), <strong>fonctionnel </strong>(fonctions) et <strong>orienté objet</strong>(classes, objets, …).</blockquote><p id="559ca41a-4618-42f2-a829-84060a54490f" class="">Il est particulièrement répandu dans le monde scientifique, et possède de nombreuses <a href="https://fr.wikipedia.org/wiki/Biblioth%C3%A8que_(informatique)">bibliothèques</a> optimisées destinées au calcul numérique.</p><p id="60d7210a-6b3b-44fa-b796-c70b1c18bc02" class="">
</p></details></li></ul><ul id="1887d95a-395f-44e4-8ab8-48f6bdcb4562" class="toggle"><li><details><summary><strong>Jupyter notebook</strong></summary><blockquote id="122aceb6-38d9-4894-85ac-5c295a077afb" class="">Application qui permet, via le navigateur web, sous forme de cahier électronique, le partage et la création de documents pouvant contenir du texte, du code, des graphiques, des formules mathématiques, … </blockquote><p id="75cb08d3-7785-4671-ba8b-3b2c2fc531b0" class="">
</p><p id="e4edfbbe-6ae9-4196-a41c-8068b2910c45" class="">Jupyter Notebook est un outil open source permettant d’écrire du code informatique et de le partager pour collaborer.</p><p id="a6ad14fd-8546-4e3e-a0c5-c427b1e3cdbc" class="">C’est une application web basée client permettant de créer et de partager du code, des équations, des visualisations ou du texte.</p><p id="de6e6641-c1a8-432a-94e4-182f87847542" class="">Son nom est en fait une <strong>référence à trois langages de programmation : Julia, Python et R</strong>. En effet, Jupyter prend en charge plus d’une quarantaine de langages de programmation.</p><p id="43c0aa5b-2944-4d24-9cd5-4025df5a9686" class="">En effet, Jupyter Notebook fut créé pour <strong>faciliter la présentation de travaux en programmation</strong> et pour permettre le codage collaboratif. Il permet de combiner le 
code, les commentaires, le contenu multimédia et les visualisations dans un document interactif : le notebook. Celui-ci peut être partagé, réutilisé et modifié.</p></details></li></ul><ul id="4ed8a7e8-232e-4d10-a933-2f1d893871a1" class="toggle"><li><details><summary><strong>Anaconda</strong></summary><blockquote id="4269ae92-e971-41a9-8c46-429a1dc8be73" class="">C’est une distribution (langage + librairies) python, faite pour la data-science.</blockquote><p id="9d221db7-5382-4d4a-980b-9949329afa1f" class="">Open-Source.</p></details></li></ul><ul id="7fbf0259-192b-4000-80d1-1228c26bcbfc" class="toggle"><li><details><summary><strong>Conda</strong></summary><blockquote id="26e75110-c04a-4301-9d63-f3559422ca98" class="">C’est un gestionnaire de paquet. C’est à dire une aide à l’installation et la mise à jour de module complémentaire ou librairie. Il est inclue dans Anaconda.
Il permet aussi de gérer les environnements Anaconda. </blockquote><p id="18381284-5060-4757-a642-912ca7529c0a" class="">Concurrent : <a href="https://community.chocolatey.org/packages/python">Chocolatey</a>.</p><p id="98fbf446-6a4a-4bb2-9510-24a976f49ab1" class=""><a href="https://docs.conda.io/projects/conda/en/latest/commands.html"><strong>doc ici</strong></a><a href="https://docs.conda.io/projects/conda/en/latest/commands.html"> </a></p><ul id="68458925-0914-4339-9059-2d04b8b80e1b" class="bulleted-list"><li style="list-style-type:disc">update conda :</li></ul><pre id="f58330fb-45f1-4154-b82d-ad89126dc19d" class="code"><code>conda --version
conda update conda
conda update -n base -c defaults conda</code></pre><ul id="f52d630d-fb98-4629-a0bb-ca9907debede" class="bulleted-list"><li style="list-style-type:disc"><span style="border-bottom:0.05em solid">Package </span>: C’est un fichier qui comprend librairies et autre fichiers utiles pour anaconda.</li></ul><pre id="82e6fd34-e46a-4bc0-b6cf-dbe435fd8571" class="code"><code>conda search scipy
conda install scipy
conda install atoti atoti-jupyterlab python</code></pre><ul id="ef7671c5-ceb7-436f-b5aa-302d64496777" class="bulleted-list"><li style="list-style-type:disc"><span style="border-bottom:0.05em solid">Channels </span>: Ce sont les emplacements (URL) où se situe les packages que conda peut installer. Il faut parfois ajouter un channel avant d’installer un package. En cas de conflit penser à supprimer les channels non utilisés de l’environnement. </li></ul><pre id="95ea9065-cb94-4222-b010-b0794843dd08" class="code"><code>conda config --add channels conda-forge
conda config --add channels https://conda.atoti.io</code></pre><ul id="069c75e8-894e-43ed-aced-e46693317ad5" class="bulleted-list"><li style="list-style-type:disc"><span style="border-bottom:0.05em solid">Environment </span>: C’est un dossier de travail qui contient des packages.</li></ul><pre id="8fed1567-020f-4562-800f-b19c4a454b48" class="code"><code>conda create --name atoti
conda activate atoti</code></pre><p id="cd73680d-c696-4fcb-883d-d01f6d290f01" class="">
</p><p id="c8e32ca9-2ed1-41cf-b948-a843d8772131" class="">Conda as a package manager helps you find and install packages. If you need a package that requires a different version of Python, you do not need to switch to a different environment manager, because conda is also an environment manager. With just a few commands, you can set up a totally separate environment to run that different version of Python, while continuing to run your usual version of Python in your normal environment.</p><p id="3c1bc0c3-5cb7-49ca-82cb-990bdebceef3" class="">
</p><p id="281507c9-e224-45de-bf25-42d5206e7570" class="">The big difference between Conda and the <a href="https://en.wikipedia.org/wiki/Pip_(package_manager)">pip</a> package manager is in how package dependencies are managed, which is a significant challenge for Python data science and the reason Conda was created.</p><p id="347c8d55-6959-4120-bce7-0dfc321c5a30" class="">
</p><p id="853f9f87-e894-412a-878f-496a7d448e37" class="">Pip installed all Python package dependencies required, whether or not those conflict with other packages previously installed. So a working installation of, for example, Google <a href="https://en.wikipedia.org/wiki/TensorFlow">TensorFlow</a> would suddenly stop working when a user pip-installs a new package that needs a different version of the <a href="https://en.wikipedia.org/wiki/NumPy">NumPy</a> library. Everything might still appear to work but the user could get different results, or would be unable to reproduce the same results on a different system because the user did not pip-install packages in the same order. Conda checks the current environment, everything that has been installed, any version limitations that the user specifies (e.g. the user only wants TensorFlow &gt;= 2.0) and figures out how to install compatible dependencies. Otherwise, it will tell the user that what he or she wants can&#x27;t be done. Pip, by contrast, will just install the package the user specified and any dependencies, even if that breaks other packages.</p></details></li></ul><p id="dc27b605-6107-4692-b5a8-c916ed6ae3a9" class="">
</p><ul id="9be155ae-a81b-461c-a869-f4200c1c12a3" class="toggle"><li><details><summary><strong>Librairies</strong></summary><blockquote id="867745f3-f9c0-44d4-a1d7-54879b5ecc98" class="">Ce sont des ressources (fonctions, …) déjà créées que l’on importe dans notre programme. Cela évite de devoir les réécrire nous même. </blockquote></details></li></ul><ul id="8f7c1ad7-07ce-4e2c-abd1-020897d52bc2" class="toggle"><li><details><summary><strong>Matplotlib</strong></summary><blockquote id="66055ea2-870e-4abf-8025-e06c5e6a8643" class="">C’est une bibliothèque de Python destinée à tracer et visualiser des données sous forme de graphiques.</blockquote></details></li></ul><ul id="f96355c4-c9f9-4e7d-a3da-f497a65dd704" class="toggle"><li><details><summary><strong>Panda</strong></summary><blockquote id="d1ea72d5-3cd3-4117-8105-f97d29fd36aa" class="">Librairie python destinées à manipuler et analyser des données <strong>structurées</strong>.</blockquote><p id="7f059941-9b8b-4ca4-9cff-47a61f077d0a" class="">
</p><p id="2a264e9d-b56c-4666-b219-e1e972ddf817" class="">Grâce à Pandas, le langage Python permet enfin de <strong>charger</strong>, d’<strong>aligner</strong>, de <strong>manipuler</strong> ou encore de <strong>fusionner des données</strong>. Les performances sont particulièrement impressionnantes quand le code source back-end est écrit en C ou en Python.</p><p id="f0eabf0a-21d6-4ee3-ac58-e5fab5bded6a" class="">Les créateurs de Pandas comptent faire évoluer cette bibliothèque pour qu’elle devienne <strong>l’outil d’analyse et de manipulation de données open-source le plus puissant et flexible</strong> dans n’importe quel langage de programmation.</p><p id="59fbae39-d3c6-4bcd-aa0c-5967ef3398af" class="">Outre l’analyse de données, Pandas est très utilisé pour le <strong>« Data wrangling »</strong>. Ce terme englobe les méthodes permettant de transformer les données non structurées afin de les rendre exploitables.</p></details></li></ul><ul id="e30a447c-6b55-472d-9891-c2d47d1fadfe" class="toggle"><li><details><summary><strong>Numpy</strong></summary><blockquote id="4df83e58-be30-4079-b7ba-69019154be6c" class="">C’est une bibliothèque de Python destinée à manipuler des matrices ou tableaux multidimensionnels ainsi que des fonctions mathématiques opérant sur ces tableaux.</blockquote></details></li></ul><ul id="7b97efb9-6116-4887-9ff6-4e60a401adb6" class="toggle"><li><details><summary><strong>Scipy</strong></summary><blockquote id="0c8bc571-0260-42a2-9633-b2a7d8694d87" class="">C’est une bibliothèque de Python destinée aux calculs mathématiques complexes. C’est une extension de Numpy.</blockquote><p id="1b793bc8-8182-4653-98d9-63e2ad641f89" class="">
</p><p id="e4c13e74-3de2-4ddc-a765-367fbe9f6ac6" class="">SciPy est un projet visant à unifier et fédérer un ensemble de bibliothèques
 Python à usage scientifique. Scipy utilise les tableaux et matrices du module NumPy. C’est une extension de numpy.</p><p id="3eedbc21-2d9b-49df-8edd-9c4c2fe5d6d4" class="">
</p><p id="9ec0d73a-6ae1-4604-a51a-86394d846614" class="">C’est une bibliothèque open-source dédiée aux calculs de mathématiques complexes ou de problèmes scientifiques.</p><p id="15909a32-1a73-426d-a6d4-92a91d0a19fe" class="">
</p><p id="28a0355c-67f1-43c6-85b9-6af1838f2a6c" class="">En termes de fonctions, SciPy offre davantage de détails par rapport à Numpy. Il peut aussi effectuer des opérations complexes comme les algorithmes numériques et les fonctions algébriques. De son côté, Numpy se focalise davantage sur le tri, l’indexage et l’organisation.</p><p id="97f7980d-bd10-441c-8589-f8cae4718f10" class="">La vitesse de calcul est plus rapide avec Numpy, car il est basé sur le langage C. De son côté, SciPy est écrit en Python et délivre donc moins de vitesse, mais se révèle plus fonctionnel.</p><p id="eb344683-f33e-40c5-b671-88e62602e809" class="">En tant que bibliothèque basée sur les fonctions, SciPy n’exploite pas le concept de tableaux. En revanche, Numpy permet de construire des tableaux multidimensionnels d’objets contenant le même type de données.</p></details></li></ul><h1 id="1592ef10-3e93-49d9-8aae-df8ff287a182" class="block-color-orange_background">Problématiques </h1><p id="9d4b2fb4-552a-4349-bdd2-5c7fed333c47" class=""><mark class="highlight-blue">Comment choisir son environnement de travail ?</mark></p><h1 id="ba999d99-584e-4151-8624-029400911ba6" class="block-color-orange_background">Hypothèses</h1><p id="74c3b764-3a31-40ea-84ca-d59c5edb7d35" class=""><mark class="highlight-blue">On peut faire n’importe quel programme d’IA avec python.</mark></p><p id="2ee6d495-52e4-48c3-a8ae-5f382c4e8c5d" class="">Vrai</p><p id="d2e55485-ff96-4e92-8f13-3b5049bc96f3" class=""><mark class="highlight-blue">L&#x27;environnement de développement dépend de l’expertise du développeur.</mark></p><p id="9fbb3348-d036-437b-b305-9c92538fc6d5" class="">Faux</p><p id="bc5f3a23-8e87-4d51-b484-b480d99c03cb" class=""><mark class="highlight-blue">On peut faire du python à partir de n’importe quel type d’IDE.</mark></p><p id="86aac3e7-3fb7-4ce1-8773-7d3b215bd81f" class="">Vrai</p><p id="c9470140-7918-4cf5-8077-35337ae1e47f" class=""><mark class="highlight-blue">Python est le langage de référence en dev IA.</mark></p><p id="e9a05af1-bb18-4968-94d4-c9b0baa5ca9c" class="">Vrai</p><h1 id="dd3177e0-1744-4109-901e-0115de721d5f" class="block-color-orange_background">Plan d’action</h1><h2 id="a279b1e7-ef0f-4fcc-9258-fd82bdda74ca" class="">Ressources</h2><p id="70c34d75-88ea-46e5-bf4f-a79833098e5e" class=""><a href="https://openclassrooms.com/fr/courses/4452741-decouvrez-les-librairies-python-pour-la-data-science/5559646-installez-jupyter-sur-votre-propre-ordinateur">https://openclassrooms.com/fr/courses/4452741-decouvrez-les-librairies-python-pour-la-data-science/5559646-installez-jupyter-sur-votre-propre-ordinateur</a></p><p id="632047c9-4fef-4fe1-9a82-271ee77b99e4" class=""><a href="https://www.python.org/downloads/">https://www.python.org/downloads/</a></p><p id="e4313a1f-86f6-40fc-878b-112dee9fe0f8" class=""><a href="https://docs.python.org/fr/3/using/index.html">https://docs.python.org/fr/3/using/index.html</a></p><p id="2759c158-186a-462d-a03c-2c102aa4a844" class=""><a href="https://docs.python.org/fr/3/using/windows.html">https://docs.python.org/fr/3/using/windows.html</a></p><p id="09c3abdc-3e91-4a29-94b3-a20e85cd9c96" class=""><a href="https://www.anaconda.com/products/individual">https://www.anaconda.com/products/individual</a></p><p id="314e60aa-dcbc-4bde-a71a-12a4b6a63bb7" class=""><a href="https://onlinelibrary.wiley.com/doi/pdf/10.1002/9781119602927.app1">https://onlinelibrary.wiley.com/doi/pdf/10.1002/9781119602927.app1</a></p><p id="45045610-8b1b-4f2c-874c-90a715e5a1b0" class="">
</p><h2 id="8297b510-9ee7-48ca-a340-18c5868a6fa6" class="">Comparaison entre python et les autres langages</h2><ul id="b0f8519a-1345-4dec-a47a-768bb5eeafff" class="bulleted-list"><li style="list-style-type:disc">Python est reconnu dans le monde académique et professionnel, notamment pour la data science.</li></ul><ul id="0bba7754-b2aa-4ca2-90ed-e2eebfb7e72d" class="bulleted-list"><li style="list-style-type:disc">Python est un langage interprété, donc relativement performant.</li></ul><ul id="f663325f-cdc0-4235-bf83-5967e4a32153" class="bulleted-list"><li style="list-style-type:disc">Python dispose de nombreuse bibliothèques scientifique, très utiles pour la data science.</li></ul><h2 id="d58af93f-7be5-4fb7-ae40-ab03f06c5ecb" class="">Lien entre le langage et les différentes plateformes</h2><ul id="ab4d3e8f-7464-4fcc-a785-faf2acd60c62" class="bulleted-list"><li style="list-style-type:disc">Anaconda et ses applications intégrées ont été développer spécifiquement pour python et la data science. </li></ul><ul id="4f4fb60f-0c90-4a52-8e99-63bc2342357c" class="bulleted-list"><li style="list-style-type:disc">VSCode se veut plus universelle.</li></ul><h2 id="fa6ba9e2-b290-43f2-99f0-bde4470a49dd" class="">Avantages / inconvénients des différentes plateformes (Jupyter/Anaconda/VSCode).</h2><table id="628f3ebf-13c2-46f1-8117-bf6c6864d8d8" class="simple-table"><tbody><tr id="ce9f07b7-71b7-43a1-8497-84d034d9529d"><td id="~cmK" class=""></td><td id="OFxT" class="">Avantages</td><td id="GXeo" class="">Inconvénients</td></tr><tr id="7d9d8942-1f88-4bae-9abd-19f094879691"><td id="~cmK" class=""><strong>Jupyter</strong></td><td id="OFxT" class="">- Open source gratuit.

- Possibilité de voir le code, l’exécuter, d’afficher directement dans le navigateur web. Cahier numérique.

- Possibilité d’attacher des explications sur le fonctionnement d’un morceau de code directement au notebook et de recevoir un feedback en direct. Exécution par blocs.

- Moins lourd qu’anaconda.

- Auto sauvegarde.</td><td id="GXeo" class="">- Les notebooks ne sont pas indépendants.

- Pas d’options de débogage interactif, de gestion de code ou gestion de module.

- Pas idéal pour la reproductibilité.

- Moins ergonomique.</td></tr><tr id="c6327934-d66b-430f-b64b-e13ca66761ba"><td id="~cmK" class=""><strong>Anaconda</strong></td><td id="OFxT" class="">- Inclut un package largement utiliser pour l&#x27;apprentissage automatique, etc. 

- Pas de tracas pour créer un environnement. Moins de risque de problèmes 

- Créez un environnement pour démarrer le machine learning et le deep learning. 

- Différentes applications et bibliothèques.</td><td id="GXeo" class="">- Grande taille de fichier.

- “Je n&#x27;arrive pas à comprendre ce qu&#x27;il y a dedans” et ça se transforme en boîte noire.

- Vous devez installer les packages qui ne sont pas installés par défaut.

- De nombreux paquets inutiles le rendent lourd.

- Certaines applications sont inutiles. </td></tr><tr id="98742011-5ef9-4faa-a853-076923ee8806"><td id="~cmK" class=""><strong>VSCode</strong></td><td id="OFxT" class="">- Il est compatible avec toutes les plateformes : Windows, Linux et Mac.
- Léger car il n&#x27;a pas besoin de beaucoup d&#x27;espace.

- Il prend en charge les applications de bureau et dispose d&#x27;un excellent outil pour les technologies de site Web.

- VS Code prend en charge divers langages C/C#, Python, JavaScript.

- Auto-complétions

- Il a un marqueur de syntaxe disponible pour presque tous les langages de programmation.

- Il possède de nombreuses extensions de plug-in, étendant ainsi les fonctionnalités.</td><td id="GXeo" class=""></td></tr></tbody></table><p id="ae54b27c-e989-4cfb-ae24-242a1fbfe4f0" class="">
</p><p id="e87f49f0-c1eb-499d-bedf-38a2e668d60c" class="">
</p></div></article>



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
	
</style></head><article id="be130615-e392-468c-b7cd-c7ffca15f5af" class="page sans"><header><img class="page-cover-image" src="https://www.notion.so/images/page-cover/nasa_wrights_first_flight.jpg" style="object-position:center 40%"/><h1 id=<?php echo $ini ; $ini++ ;?> class="page-title">Story 5 - Initiation à Python - Les types et les variables</h1></header><div class="page-body"><h1 id="da1e1985-d4ae-4275-b1d9-01e1b213f4f4" class="block-color-orange_background">Contexte</h1><p id="376a336c-2620-4730-acea-8268ea3e4fe0" class=""><mark class="highlight-blue">Dans le cadre de l’apprentissage de python on va se familiariser avec certaines notions de base comme les variables et leurs différents types ainsi que la conversion d&#x27;un type à un autre.</mark></p><p id="65230a1d-f6e4-40f4-81c9-b5a187a7b4dd" class=""><mark class="highlight-blue">Apprendre les premiers principes algorithmiques en python soit :</mark></p><ul id="52033458-c1a2-4fe6-8416-3ea8fcf830c0" class="bulleted-list"><li style="list-style-type:disc"><mark class="highlight-blue">La lecture de valeur de l’extérieur</mark></li></ul><ul id="e5cae06a-9899-456a-a427-effbb7cb3d4f" class="bulleted-list"><li style="list-style-type:disc"><mark class="highlight-blue">L’affectation des variables</mark></li></ul><ul id="6587ef12-1ae6-4608-b50b-70480f4b3cad" class="bulleted-list"><li style="list-style-type:disc"><mark class="highlight-blue">L’affichage du résultat / sortie</mark></li></ul><ul id="6b88ea8f-91c1-440e-8790-5aac0200e706" class="bulleted-list"><li style="list-style-type:disc"><mark class="highlight-blue">Les opérations arithmétiques sur des variables</mark></li></ul><ul id="8b8fd078-247d-4cc2-ab61-210f20c089a4" class="bulleted-list"><li style="list-style-type:disc"><mark class="highlight-blue">Les commentaires</mark></li></ul><h1 id="aa2de8f2-63ff-40a1-bdf6-590bbf363e1e" class="block-color-orange_background">Mots clés</h1><ul id="af4a9e5d-f0a8-4ca9-bc29-7f250418766f" class="toggle"><li><details><summary><strong>Opérations arithmétiques</strong></summary><blockquote id="12c44eb2-7007-49f4-abed-5050a63b4826" class="">Ensembles de 4 opérations de base que l’on peut effectuer sur nos variables numériques. +, -, *, /.</blockquote><p id="dc29de68-9081-4499-bbd4-4a4ce26772c7" class=""><strong>Incrémenter </strong>: <code>+=</code>, variantes : <code>-=</code>, <code>*=</code> et<code> /=</code>.
<strong>Puissance </strong>: <code>**</code> ex : <code>2**3</code> → <code>8</code>.
<strong>Puissance de 10</strong> : <code>e</code> ex : <code>1e6</code> → <code>1000000</code> ; <code>3.12e-3</code> → <code>0.00312</code>

</p></details></li></ul><ul id="1a9dac4b-1a51-4455-b279-cc7051705354" class="toggle"><li><details><summary><strong>Modulo</strong></summary><blockquote id="1b0247b3-9b9e-4b11-97ab-1e898e673696" class="">Il s’agit du reste de la division entière de deux nombres.</blockquote><p id="392ebdfd-d722-431c-969d-b413640bbfcb" class=""><code>%</code> est différent <code>//</code> qui est le résultat de la division entière (sans le reste)</p><p id="0bd3b801-84f8-46e4-b413-2d8cd3eb7448" class="">Notez bien qu&#x27;en Python 3, la division de deux nombres entiers renvoie par défaut un float</p></details></li></ul><p id="1ffb4f32-5ebd-40b1-8958-ee9df55b5b97" class="">
</p><ul id="1dbfbf07-b191-48fa-9bfd-e6c10091cc72" class="toggle"><li><details><summary><strong>Constante</strong></summary><blockquote id="504c966a-20cc-466e-8013-5a423722615d" class="">Une constante est une variable qu’on ne peut pas modifier. Il n’y a pas de constante en python, on utilise donc des variables que l’on nome en majuscule par convention : <code>GRAVITY = 9.8</code>.</blockquote></details></li></ul><ul id="21f045ad-6685-4ce8-b1a6-073188884136" class="toggle"><li><details><summary><strong>Variables</strong></summary><blockquote id="26c53c95-eca5-4cc6-9bb2-0ac2ebfc8142" class="">C’est une zone de mémoire (adresse pointé) que l’on nome et à laquelle on affecte une valeur qui peut être de différents types.</blockquote><p id="05f95df2-f398-4c73-86b9-7f37e27cdaaf" class="">Une variable est une zone de la mémoire de l’ordinateur dans laquelle une valeur est stockée. Aux yeux du programmeur, cette variable est définie par un nom, alors que pour l’ordinateur, il s’agit en fait d’une adresse, c’est-à-dire d’une zone particulière de la mémoire.</p></details></li></ul><ul id="939fe944-2fcc-48a3-b4bf-9207f40014d9" class="toggle"><li><details><summary><strong>Variables locales</strong></summary><blockquote id="fd6310e4-51f7-4760-85b3-a67c581db801" class="">Variable définie et disponible qu’au sein d’une fonction.</blockquote><p id="2856efa4-c896-491f-9460-69495702c8ab" class="">
</p><p id="867b48d7-17cd-4eb1-befe-2635ad8a60f1" class="">Les variables définies dans une fonction sont appelées variables locales. Elles ne peuvent être utilisées que localement c’est-à-dire qu’à l’intérieur de la fonction qui les a définies.</p></details></li></ul><ul id="91947638-48b9-4772-9cbd-915084247a98" class="toggle"><li><details><summary><strong>Variables globales</strong></summary><blockquote id="f783fbe3-9b9a-4c2c-a1a3-daaa3da8fcb0" class="">Variable définie en dehors de toute fonction, et donc accessible dans tout le script.</blockquote><p id="061da9ea-bc0f-400d-b1b1-4bc1ea6997c9" class="">
Les variables définies dans l’espace global du script, c’est-à-dire en dehors de toute fonction sont appelées des variables globales. Ces variables sont accessibles (= utilisables) à travers l’ensemble du script et accessible en lecture seulement à l’intérieur des fonctions utilisées dans ce script.
Pour le dire très simplement : une fonction va pouvoir utiliser la valeur d’une variable définie globalement mais ne va pas pouvoir modifier sa valeur c’est-à-dire la redéfinir.

Dans certaines situations, il serait utile de pouvoir modifier la valeur d’une variable globale depuis une fonction, notamment dans le cas où une fonction se sert d’une variable globale et la manipule.
Cela est possible en Python. Pour faire cela, il suffit d’utiliser le mot clef <code>global</code> devant le nom d’une variable globale utilisée localement afin d’indiquer à Python qu’on souhaite bien modifier le contenu de la variable globale et non pas créer une variable locale de même nom.</p><p id="59470551-22cd-4eb2-9892-ae049d3d046a" class="">
</p></details></li></ul><ul id="2de3bae6-b626-4c9c-b246-bc77f9c608c6" class="toggle"><li><details><summary><strong>Portée des variables</strong></summary><blockquote id="6000e601-dc3b-4f20-8d51-144c70c9fd7e" class="">Définie l’endroit où on peut appeler une variable déclarée dans le contexte global/fonctions.</blockquote><p id="398e9e6f-105f-46d8-9f1b-bc6730cd3d63" class="">
</p><p id="efa167c0-5218-4be2-bb71-b7cb9bf7e9e0" class="">Le terme de “portée des variables” sert à désigner les différents espaces dans le script dans lesquels une variable est accessible c’est-à-dire utilisable. En Python, une variable peut avoir une portée locale ou une portée globale.

En Python, nous pouvons déclarer des variables n’importe où dans notre script : au début du script, à l’intérieur de boucles, au sein de nos fonctions, etc.</p></details></li></ul><ul id="bbc96e46-6172-4f48-8bc2-fff855182e67" class="toggle"><li><details><summary><strong>Types de variables</strong></summary><blockquote id="a231d912-fe7a-4c40-ae17-54e5197a70e1" class="">C’est la nature d’une variable.</blockquote><p id="b4230309-77d5-4f6a-9f18-5560fcd3f8fa" class="">
</p><p id="9955941c-0c9c-499e-9681-0bb2c2a7c1d1" class="">Le type d&#x27;une variable correspond à la nature de celle-ci. Chaque type de variable prend plus ou moins d&#x27;espace en mémoire.
Il existe : </p><ul id="5c2ad238-375f-4453-a7bf-8fa9fda8a5ed" class="bulleted-list"><li style="list-style-type:disc"><strong>Integer </strong>: <style>@import url('https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.13.2/katex.min.css')</style><span data-token-index="0" contenteditable="false" class="notion-text-equation-token" style="user-select:all;-webkit-user-select:all;-moz-user-select:all"><span></span><span><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi mathvariant="normal">∀</mi><mi>x</mi><mo>∈</mo><mi mathvariant="double-struck">N</mi></mrow><annotation encoding="application/x-tex">\forall x \in \N</annotation></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height:0.73354em;vertical-align:-0.0391em;"></span><span class="mord">∀</span><span class="mord mathnormal">x</span><span class="mspace" style="margin-right:0.2777777777777778em;"></span><span class="mrel">∈</span><span class="mspace" style="margin-right:0.2777777777777778em;"></span></span><span class="base"><span class="strut" style="height:0.68889em;vertical-align:0em;"></span><span class="mord mathbb">N</span></span></span></span></span><span>﻿</span></span>  —  <code>2</code></li></ul><ul id="4ffb616e-ef49-45b9-bf7b-d175029de104" class="bulleted-list"><li style="list-style-type:disc"><strong>Float </strong>: <style>@import url('https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.13.2/katex.min.css')</style><span data-token-index="0" contenteditable="false" class="notion-text-equation-token" style="user-select:all;-webkit-user-select:all;-moz-user-select:all"><span></span><span><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi mathvariant="normal">∀</mi><mi>x</mi><mo>∈</mo><mi mathvariant="double-struck">R</mi></mrow><annotation encoding="application/x-tex">\forall x \in \R</annotation></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height:0.73354em;vertical-align:-0.0391em;"></span><span class="mord">∀</span><span class="mord mathnormal">x</span><span class="mspace" style="margin-right:0.2777777777777778em;"></span><span class="mrel">∈</span><span class="mspace" style="margin-right:0.2777777777777778em;"></span></span><span class="base"><span class="strut" style="height:0.68889em;vertical-align:0em;"></span><span class="mord mathbb">R</span></span></span></span></span><span>﻿</span></span>  —  <code>2.0</code> ou <code>2.</code></li></ul><ul id="2bafd437-dd6f-45f3-b29d-7f30dad041a4" class="bulleted-list"><li style="list-style-type:disc"><strong>String </strong>:  Chaîne de caractères  —  <code>&#x27;2’</code> ou <code>“2”</code></li></ul><ul id="0f238876-76dd-459d-9081-22826cf8e92b" class="bulleted-list"><li style="list-style-type:disc"><strong>List </strong>: Liste de plusieurs variables  <code>plateformes_sociales = [&quot;Facebook&quot;, &quot;Instagram&quot;, &quot;Snapchat&quot;, &quot;Twitter&quot;, 4.0, 8]</code></li></ul><ul id="1ccec687-da2a-47f8-9c6f-c11dbbb999ee" class="bulleted-list"><li style="list-style-type:disc"><strong>Boolean </strong>: Prend deux valeurs logiques <code>true</code> et <code>false</code>.</li></ul><ul id="9210aea6-f85e-4692-8666-903737899c48" class="bulleted-list"><li style="list-style-type:disc">(nombre) <strong>Complexe </strong>: 
<pre id="c4dbdc86-7ec5-47ad-81b6-21d19576d8d8" class="code"><code>&gt;&gt;&gt;a = 2 + 3j
&gt;&gt;&gt;b = 1 + 1j
&gt;&gt;&gt;a * b
(-1+5j)</code></pre></li></ul><ul id="33bf2ecb-8ee3-46a4-bea1-5fc96d85e116" class="bulleted-list"><li style="list-style-type:disc">…</li></ul><p id="9bfc34d1-c156-4fa7-a032-f2380c233c80" class="">Pour retrouver le type d’une variable : <code>type(variable)</code></p><p id="0b02a39e-5ff3-45bc-a32f-7f0d5933fda4" class="">
</p></details></li></ul><ul id="26b29181-8707-432e-ad1e-1eb217d662e5" class="toggle"><li><details><summary><strong>Affectation de variables</strong></summary><blockquote id="c1924542-3ee2-43e2-926c-f47a20aff208" class="">C’est l’action d’assigner une valeur à une variable.</blockquote><p id="943d3555-82a8-45e8-bb37-7de5db99c575" class="">
</p><p id="ac02beaf-d09c-450a-93a2-bad72848d2bd" class="">L&#x27;opérateur d&#x27;affectation <code>=</code> s&#x27;utilise dans un certain sens. Par exemple, l&#x27;instruction  <code>x = 2</code> signifie qu&#x27;on attribue la valeur située à droite de l&#x27;opérateur <code>=</code> (ici, <code>2</code>) à la variable située à gauche (ici, <code>x</code>). D&#x27;autres langages de programmation comme <em>R</em> utilisent les symboles <code>&lt;-</code> pour rendre l&#x27;affectation d&#x27;une variable plus explicite, par exemple <code>x &lt;- 2</code>.</p></details></li></ul><ul id="3a020900-9bbd-4b1f-a743-599bbdd5a05d" class="toggle"><li><details><summary><strong>Règles de nommage des variables</strong></summary><p id="ef9a59f9-8097-4213-9703-0099cafbfb03" class="">L’une des conventions d’appellation populaires pour Python est le <strong>snake_case</strong> : des noms composés de plusieurs mots séparés par des tirets bas(_) comme <code>nombre_de_chats</code>, <code>reponse_finale</code>, etc.

Le nom des variables en Python peut être constitué de lettres minuscules (<code>a</code> à <code>z</code>), de lettres majuscules (<code>A</code> à <code>Z</code>), de nombres (<code>0</code> à <code>9</code>) ou du caractère souligné (<code>_</code>). Vous ne pouvez pas utiliser d&#x27;espace dans un nom de variable.

Par ailleurs, un nom de variable ne doit pas débuter par un chiffre et il n&#x27;est pas recommandé de le faire débuter par le caractère <code>_</code> (sauf cas très particuliers).

De plus, il faut absolument éviter d&#x27;utiliser un mot « réservé » par Python comme nom de variable (par exemple : <code>print</code>, <code>range</code>, <code>for</code>, <code>from</code>, etc.).

Enfin, Python est<strong> sensible à la casse</strong>, ce qui signifie que les variables <code>TesT</code>, <code>test</code> ou <code>TEST</code> sont différentes.

Python autorise l’utilisation du caractère « souligné » (ou underscore) _ pour séparer des groupes de chiffres. <code>avogadro_number = 6.022 _140_76e23</code></p></details></li></ul><ul id="8c413b9b-801a-427d-ad51-e487ca746eb9" class="toggle"><li><details><summary><strong>Conversion de variable</strong></summary><blockquote id="19c424c7-7aa8-436e-a06d-4d28b074a89f" class="">C’est la modification du type d’une variable.</blockquote><p id="0e63e900-ea33-46f8-96cc-01a7023cb99d" class="">On est souvent amené à convertir les types, c&#x27;est-à-dire passer d&#x27;un type numérique à une chaîne de caractères ou vice-versa. En Python, rien de plus simple avec les fonctions <code>int()</code>, <code>float()</code> et <code>str()</code>.</p></details></li></ul><p id="3d302145-7b29-41e7-bb6b-a15a45485318" class="">
</p><ul id="aefa19cb-920c-4ba6-b292-df8aa532bc7e" class="toggle"><li><details><summary><strong>Concaténation</strong></summary><blockquote id="ff5783b1-7d6d-4276-a2e0-d6a7a352accb" class="">C’est la mise bout à bout de plusieurs chaînes de caractères pour en obtenir qu’une.</blockquote><pre id="4b0da42b-b859-4f56-96f5-098e028b0a97" class="code"><code>&gt;&gt;&gt;chaine = &#x27;Salut&#x27;
&gt;&gt;&gt;chaine + &#x27;Python&#x27;
&#x27;Salut Python&#x27;
&gt;&gt;&gt;chaine*3
&#x27;SalutSalutSalut&#x27;</code></pre><p id="a971fc24-3d80-482b-97f7-724e8bc10a44" class="">
</p><p id="72ae9594-ff97-4635-8314-91d8f1eff325" class="">
</p></details></li></ul><ul id="c54833df-f545-4e01-a81e-cd66b23b1296" class="toggle"><li><details><summary><strong>Back-end</strong></summary><blockquote id="9338a40e-8029-4bca-8905-03100ed56d52" class="">Il s’agit de la partie d’arrière plan de notre programme. Celle qui sert à traiter les données, à la différence de la partie qui sert à mettre en forme et afficher nos résultats (partie font-end)</blockquote></details></li></ul><ul id="e80f9e79-c670-4907-8dc2-dff5360976f0" class="toggle"><li><details><summary><strong>Exception</strong></summary><blockquote id="45d1bf19-ab68-446c-8968-e5b95750a372" class="">C’est un message d’alerte sur la console nous indiquant qu’il y a une erreur dans notre programme.</blockquote></details></li></ul><ul id="ba351c82-59b3-497d-a468-1065005f1ac8" class="toggle"><li><details><summary><strong>Adresse mémoire</strong></summary><blockquote id="b036d2a2-3c9e-46a0-9ca3-a5f0fb334a80" class="">C’est un espace localisé désigné par une valeur dans le DD de l’ordinateur.</blockquote></details></li></ul><ul id="06f91dba-0e3d-47f1-8243-bffa690497f8" class="toggle"><li><details><summary><strong>Commentaires</strong></summary><blockquote id="fadb8fee-4bce-4a2f-b1c2-3fc8233b4187" class="">C’est une portion de notre script qui n’est pas lu lors de l’exécution de notre programme.</blockquote><p id="715d4d0f-a63c-414f-9d06-9078d7b400cd" class="">Ligne : <code>#Ceci est un commentaire</code></p><p id="4b767336-88c4-47cd-ab6f-4cecab4b5f34" class="">Multilignes : 
<code>”””
Ceci est un commentaire
à lignes multiples
”””</code></p></details></li></ul><p id="c3e81add-585d-4a7d-8dae-4ae19073f94c" class="">
</p><h1 id="a088fac0-baff-4021-a2a7-a87a143c86b9" class="block-color-orange_background">Problématiques </h1><p id="8fb08c64-7750-4e08-bcbb-66da15da2474" class=""><mark class="highlight-blue">Comment l’apprentissage de python peut nous permettre d’afficher, stocker et manipuler les variables ?</mark></p><p id="327319f0-e216-4a71-87bb-41d5c8af03ce" class=""><mark class="highlight-blue">Comment utiliser Python dans Jupyter Notebook ?</mark></p><h1 id="4988d840-c7b7-4867-b46f-532092a3d56e" class="block-color-orange_background">Hypothèses (vraies ou fausses)</h1><ol type="1" id="81c50096-8e9a-45c0-8697-0228f472f255" class="numbered-list" start="1"><li><mark class="highlight-blue"><em>Une variable déclarée mais non affectée ne possède pas de type.</em></mark><p id="97400187-27a1-45f0-94f0-f67b01d19006" class="">En python on ne peut pas déclarer une variable sans affectation.</p></li></ol><ol type="1" id="51a2182b-e0c2-42a4-8898-e75454417114" class="numbered-list" start="2"><li><mark class="highlight-blue"><em>On peut stocker un fichier dans une variable.
</em></mark><strong>Vrai.</strong><mark class="highlight-blue"><em> </em></mark>On peut ouvrir et manipuler un fichier avec la fonction <code>fopen()</code> et stocker ce qu’il contient dans une variable.</li></ol><ol type="1" id="d698a84e-6b16-4b08-b80d-dbb8a2631b1a" class="numbered-list" start="3"><li><mark class="highlight-blue"><em>Une variable peut changer de type pendant une opération.
</em></mark>Vrai</li></ol><ol type="1" id="bf7cae7f-fef8-4618-977e-afd4dd1692cf" class="numbered-list" start="4"><li><mark class="highlight-blue"><em>On dit que Python est un langage au typage dynamique</em></mark>.
Oui, ça veut dire que python affecte un type lors de l’affectation d’une variables, sans qu’on lui précise lequel.</li></ol><ol type="1" id="78d4cd52-ce1e-4714-952c-d550a46ac384" class="numbered-list" start="5"><li><mark class="highlight-blue"><em>Il est nécessaire de bien typer ses variables en Python.
</em></mark>Python le fait seul grâce au typage dynamique.</li></ol><ol type="1" id="71a7fa57-0050-4406-a351-ca1cf78b4af9" class="numbered-list" start="6"><li><mark class="highlight-blue"><em>Avec Python, une variable qui n&#x27;est plus affectée est toujours en mémoire.
</em></mark>Faux</li></ol><ol type="1" id="6f13b465-7387-4d19-9d65-912d03406b73" class="numbered-list" start="7"><li><mark class="highlight-blue"><em>Les constantes sont des variables elles aussi.
</em></mark>Vrai</li></ol><ol type="1" id="fd1396a9-ff89-4544-a45a-ad69dbe13b9e" class="numbered-list" start="8"><li><mark class="highlight-blue"><em>Le python est sensible à la casse.
</em></mark>Vrai</li></ol><h1 id="9c0b7eb7-50c7-4aeb-8ab4-78aa30b58949" class="block-color-orange_background">Action</h1><h2 id="3bcb2334-5589-4764-aa22-c354a6838a30" class="">Ressources</h2><p id="f0656257-45ab-4b63-87cd-ba4c1266c967" class=""><a href="https://python.sdv.univ-paris-diderot.fr/cours-python.pdf">https://python.sdv.univ-paris-diderot.fr/cours-python.pdf</a></p><p id="994c07c1-4ff4-4a00-877c-aab649dc1be0" class=""><a href="https://python.sdv.univ-paris-diderot.fr/02_variables/">https://python.sdv.univ-paris-diderot.fr/02_variables/</a></p><p id="4b468236-e7b6-4728-8b5a-d3589f0d916f" class=""><a href="https://openclassrooms.com/fr/courses/6204541-initiez-vous-a-python-pour-lanalyse-de-donnees/6237281-manipulez-les-types-de-variables">https://openclassrooms.com/fr/courses/6204541-initiez-vous-a-python-pour-lanalyse-de-donnees/6237281-manipulez-les-types-de-variables</a></p><p id="ae3ca665-c01c-44d4-829d-4e0da2e83906" class=""><a href="https://courspython.com/types.html">https://courspython.com/types.html</a></p><p id="8501b8a4-6624-4363-80c4-2d40c2339190" class=""><a href="https://realpython.com/courses/python-basics-first-program/">https://realpython.com/courses/python-basics-first-program/</a></p><p id="80c2460f-a4d9-4a57-aec6-89e2b47a146c" class="">
</p><h2 id="595c3807-40b8-4bb0-a6fc-e21a829a0374" class="">Éléments de base</h2><pre id="e1173ca3-b3d3-41f7-8e48-b4fa5bda7969" class="code"><code>print(&quot;hello world&quot;)  # affiche dans la console
&quot;&quot;&quot;
Triples guillemets 
Pour des commentaires multilignes
&quot;&quot;&quot;</code></pre><ul id="2b6cd136-593d-466a-8b07-719c48ac6a4a" class="bulleted-list"><li style="list-style-type:disc">Égal à : a <code>==</code> b</li></ul><ul id="09184c47-3bfe-4e0c-b010-33d55d4ca0be" class="bulleted-list"><li style="list-style-type:disc">Non égal à : a <code>!=</code> b</li></ul><ul id="7f4ab71b-9201-4e69-8181-9be6c46b2cfb" class="bulleted-list"><li style="list-style-type:disc">Moins que : a <code>&lt;</code> b</li></ul><ul id="e8839fb6-67de-4057-b8d3-8ee85c9b9729" class="bulleted-list"><li style="list-style-type:disc">Moins que ou égal à : a <code>&lt;=</code> b</li></ul><ul id="7d88d942-9099-4ef5-909a-a3f87ee840ea" class="bulleted-list"><li style="list-style-type:disc">Plus que : a <code>&gt;</code> b</li></ul><ul id="1b257176-c39e-4b2c-b45a-6a297993da44" class="bulleted-list"><li style="list-style-type:disc">Plus que ou égal à : a <code>&gt;=</code> b</li></ul><pre id="db32afd0-c974-4787-8190-4a503e3e9401" class="code"><code>for x in range(100):
    print(f&quot;{x} skate au mur !&quot;)</code></pre><p id="7a77bb13-d89e-4a69-a496-ce89eb521509" class="">Les accolades <code>{}</code> ci-dessus prennent n’importe quelle valeur dans la variable <code>x</code> et la remplace (n’oubliez pas le <code>“f”</code> au début de la string qui signifie format).</p><p id="77d92d5c-d0b2-4fae-b2b4-5ed1c586f558" class="">
</p><h2 id="e827072d-f9b4-4bbd-931a-411570eeee1a" class="">Les différents type de variables</h2><h3 id="a691bc30-09c4-45a1-aa1c-99c168c361e0" class="">Types natifs</h3><ul id="b157bbd2-7d8c-4d12-ad8c-55e2137332b3" class="bulleted-list"><li style="list-style-type:disc"><strong>Boolean </strong>: Prend deux valeurs logiques <code>true</code> et <code>false</code>.</li></ul><h3 id="f439d853-24b9-481b-abcb-20d90af84d38" class="">Types numériques</h3><ul id="cf935d88-f07a-4344-bdfb-214802c76fea" class="bulleted-list"><li style="list-style-type:disc"><strong>Integer </strong>: <style>@import url('https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.13.2/katex.min.css')</style><span data-token-index="0" contenteditable="false" class="notion-text-equation-token" style="user-select:all;-webkit-user-select:all;-moz-user-select:all"><span></span><span><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi mathvariant="normal">∀</mi><mi>x</mi><mo>∈</mo><mi mathvariant="double-struck">N</mi></mrow><annotation encoding="application/x-tex">\forall x \in \N</annotation></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height:0.73354em;vertical-align:-0.0391em;"></span><span class="mord">∀</span><span class="mord mathnormal">x</span><span class="mspace" style="margin-right:0.2777777777777778em;"></span><span class="mrel">∈</span><span class="mspace" style="margin-right:0.2777777777777778em;"></span></span><span class="base"><span class="strut" style="height:0.68889em;vertical-align:0em;"></span><span class="mord mathbb">N</span></span></span></span></span><span>﻿</span></span>  —  <code>2</code></li></ul><ul id="741ad174-e0d6-4b26-82d9-24bfad16a4ae" class="bulleted-list"><li style="list-style-type:disc"><strong>Float </strong>: <style>@import url('https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.13.2/katex.min.css')</style><span data-token-index="0" contenteditable="false" class="notion-text-equation-token" style="user-select:all;-webkit-user-select:all;-moz-user-select:all"><span></span><span><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi mathvariant="normal">∀</mi><mi>x</mi><mo>∈</mo><mi mathvariant="double-struck">R</mi></mrow><annotation encoding="application/x-tex">\forall x \in \R</annotation></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height:0.73354em;vertical-align:-0.0391em;"></span><span class="mord">∀</span><span class="mord mathnormal">x</span><span class="mspace" style="margin-right:0.2777777777777778em;"></span><span class="mrel">∈</span><span class="mspace" style="margin-right:0.2777777777777778em;"></span></span><span class="base"><span class="strut" style="height:0.68889em;vertical-align:0em;"></span><span class="mord mathbb">R</span></span></span></span></span><span>﻿</span></span>  —  <code>2.0</code> ou <code>2.</code></li></ul><figure id="1f12f1c0-353a-4beb-af8d-40d38b36dc61" class="image"><a href="Story%205%20-%20Initiation%20a%CC%80%20Python%20-%20Les%20types%20et%20les%20%20be130615e392468cb7cdc7ffca15f5af/virgflot-1756910388.gif"><img style="width:500px" src="Story%205%20-%20Initiation%20a%CC%80%20Python%20-%20Les%20types%20et%20les%20%20be130615e392468cb7cdc7ffca15f5af/virgflot-1756910388.gif"/></a></figure><ul id="c09770bf-4a72-4ccb-8c79-0be10adac02c" class="bulleted-list"><li style="list-style-type:disc"><strong>Complexe </strong>: 
<pre id="a0834c4d-c228-4402-b6d7-fcc8f99c9e7c" class="code"><code>&gt;&gt;&gt;a = 2 + 3j
&gt;&gt;&gt;b = 1 + 1j
&gt;&gt;&gt;a * b
(-1+5j)</code></pre></li></ul><h3 id="978c15a4-e544-4d0f-ae10-3ba764dd03ef" class="">Type séquence de texte</h3><ul id="16994184-39e0-48c7-9b67-2eab2671df4b" class="bulleted-list"><li style="list-style-type:disc"><strong>String </strong>:  Chaîne de caractères  —  <code>&#x27;2’</code> ou <code>“2”</code></li></ul><h3 id="e24b2ebc-38fb-4d2b-8076-16aefe811aba" class="">Type séquentiels</h3><ul id="8f9554cf-d6d0-4eb6-ba80-0ec94810eb0a" class="bulleted-list"><li style="list-style-type:disc"><strong>List </strong>: Liste de plusieurs variables  <code>plateformes_sociales = [&quot;Facebook&quot;, &quot;Instagram&quot;, &quot;Snapchat&quot;, &quot;Twitter&quot;, 4.0, 8]</code></li></ul><ul id="4c1fccde-b53f-425d-b616-b7a5aa11d8c0" class="bulleted-list"><li style="list-style-type:disc"><strong>Tuple </strong>: Beaucoup des propriétés des tuples sont similaires à celles des listes normales. Par exemple, les listes et tuples utilisent tous deux les indices. La principale différence est que les tuples sont immuables (ne peuvent pas être modifiés), alors que les listes sont modifiables.</li></ul><ul id="b9566ac8-57cf-4289-960b-9c570211b9c0" class="bulleted-list"><li style="list-style-type:disc"><strong>range </strong>: représente une séquence immuable de nombres et est couramment utilisé pour itérer un certain nombre de fois dans les boucles <a href="https://docs.python.org/fr/3.7/reference/compound_stmts.html#for"><code>for</code></a>.</li></ul><p id="9ba2fb95-ede7-4737-a579-868a341e97bd" class="">
</p></div></article>




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
	
</style></head><article id="160d8e3a-b763-428a-bfd1-1a31e220b911" class="page sans"><header><img class="page-cover-image" src="https://www.notion.so/images/page-cover/nasa_reduced_gravity_walking_simulator.jpg" style="object-position:center 50%"/><h1 id=<?php echo $ini ; $ini++ ;?> class="page-title">Story 6 - Python - Les conditions et les booléens</h1></header><div class="page-body"><h1 id="c4b81303-298a-40b5-af61-1266b04481c5" class="block-color-orange_background">Contexte</h1><p id="4853ece8-f434-4707-876f-5abd7c5af73f" class=""><mark class="highlight-blue">Appréhender les structures de contrôle conditionnel et les booléens dans Python.</mark></p><h1 id="e12a9156-2b6b-44c0-b09f-aefdaf8bc36f" class="block-color-orange_background">Mots clés</h1><ul id="db20ad2a-04cf-42f7-ba7a-adcfc56d2908" class="toggle"><li><details><summary><strong>Structure de contrôle conditionnelle</strong></summary><blockquote id="e7dacd4e-233b-4261-87cf-7d4016c88c5a" class="">Bloc de code qui s’exécute lorsque une ou plusieurs conditions déterminées sont vérifiées. Ces structures permettent de contrôler l’ordonnancement des actions.</blockquote></details></li></ul><ul id="0d82aaa7-390d-42ae-8db8-4d61a7fd8c81" class="toggle"><li><details><summary><strong>Structure Alternatives </strong></summary><p id="3fa5b168-654c-43a1-b402-ee2a9639d1f3" class="">C’est le bloc de code qui s’exécute lorsque la condition n’est pas vérifiée.</p></details></li></ul><ul id="224f7875-9793-4362-986c-223a18f50f6b" class="toggle"><li><details><summary><strong>Conditions</strong></summary><blockquote id="d695877b-ca6b-4225-8357-c2fd9db23692" class="">C’est une valeur booléenne qui répond à une question qui peut être formée d’opérateur de comparaison. (pas obligatoirement lié à une variable).</blockquote><pre id="341b74ea-bff4-4a79-89bf-487247cb4bfb" class="code"><code>x=8
if x==8:
   print(&quot;ok&quot;)</code></pre></details></li></ul><ul id="462235f0-ff64-44ab-97dc-178e0d7ee4de" class="toggle"><li><details><summary><strong>Tests à plusieurs cas (Tests imbriqués)</strong></summary><blockquote id="758622bc-c9a7-4a27-bde0-736d5e3eacd3" class="">En python on utilise <code>if condition : </code> pour définir une condition. On peut aussi tester plusieurs conditions sans repasser par if avec <code>elif</code> et <code>else</code>.
Si [condition1] : [action1], 
Sinon Si  [condition2] : [action2], 
Sinon : [action3] .
<mark class="highlight-teal">Ensemble de conditions qui s’enchaînent si la conditions précédente du bloc est False.</mark></blockquote><pre id="1eda3ba0-9ec1-4f27-8b75-5e6da02f8497" class="code"><code>ensoleille = False
neige = True

if ensoleille:
   print(&quot;on va à la plage !&quot;)
elif neige:
   print(&quot;on fait un bonhomme de neige&quot;)
else:
   print(&quot;on reste à la maison !&quot;)</code></pre></details></li></ul><ul id="a259d61c-4eb1-488e-8ba6-c6f3ced0d148" class="toggle"><li><details><summary><strong>Tests multiples</strong></summary><blockquote id="32fa5456-c5a5-4410-acc0-3ce51909df3a" class="">Ils permettent de tester plusieurs conditions en même temps en utilisant des opérateurs booléens (ET<code>and</code>, OU <code>or</code>, XOR <code>^</code>)</blockquote><p id="08055e2f-5ce2-4d7a-9a3d-0d081a96dcb4" class="">
</p></details></li></ul><ul id="6707f7df-9b4a-4494-a6b3-65832497c04d" class="toggle"><li><details><summary><strong>Test de valeur sur des floats</strong></summary><figure id="230e1765-41dc-4d40-89ef-ab513f8bab75" class="image"><a href="Story%206%20-%20Python%20-%20Les%20conditions%20et%20les%20boole%CC%81ens%20160d8e3ab763428abfd11a31e220b911/virgflot-1756910388.png"><img style="width:500px" src="Story%206%20-%20Python%20-%20Les%20conditions%20et%20les%20boole%CC%81ens%20160d8e3ab763428abfd11a31e220b911/virgflot-1756910388.png"/></a></figure><blockquote id="a3208c0b-4827-4417-bfea-62a02e281177" class="">Du fait de l’approximation des floats, il est dangereux de tester leur égalité, cela pourrait nous renvoyer un résultat inattendu. </blockquote></details></li></ul><ul id="26fcbf84-bbad-4871-a2cc-02ac09bb0f89" class="toggle"><li><details><summary><strong>Variables booléennes</strong></summary><blockquote id="18d62247-adba-459d-be38-88f3a456d320" class="">Variables logiques qui représente deux états : Vrai et Faux ou <code>1</code> et <code>0</code> en binaire. Il s’agit des variables <code>True </code>et <code>False</code>. Il existe un type <code>bool</code> en python.</blockquote></details></li></ul><ul id="39486457-9133-4d06-b207-3935f3ed2b33" class="toggle"><li><details><summary><strong>Opérateurs booléens</strong></summary><blockquote id="88fbd249-9b60-47bb-86d8-4f326920de13" class="">Il y a 5 opérateurs : La conjonction (<code>and</code>), la disjonction (<code>or</code>), l’équivalence (<code>==</code>), la non-équivalence (XOR <code>^</code> ), la négation (<code>!</code>).</blockquote><figure id="bf86e680-7a08-4a49-a552-bcd3c251beec" class="image"><a href="Story%206%20-%20Python%20-%20Les%20conditions%20et%20les%20boole%CC%81ens%20160d8e3ab763428abfd11a31e220b911/table_de_vrit.png"><img style="width:223px" src="Story%206%20-%20Python%20-%20Les%20conditions%20et%20les%20boole%CC%81ens%20160d8e3ab763428abfd11a31e220b911/table_de_vrit.png"/></a></figure></details></li></ul><ul id="712a18fa-290e-4530-bfbc-c1a677683b56" class="toggle"><li><details><summary><strong>Opérateurs de comparaison</strong></summary><blockquote id="6f9676e0-6220-4511-80fd-1d95ca60e393" class="">Cela compare les valeurs de deux variables. Renvoi un booléen.</blockquote><pre id="a2f3e9c9-acca-4214-9f69-3417af17f28e" class="code"><code>==      égal à 
!=      différent de 
&gt;       strictement supérieur à 
&gt;=      supérieur ou égal à
&lt;       strictement inférieur à 
&lt;=      inférieur ou égal à
is      pointe vers la même adresse mémoire (x=3 ; y=x ; x is y =&gt; True)
is not</code></pre></details></li></ul><p id="3f9b1780-2ed0-4d6f-b6d7-d86918285d70" class="">
</p><ul id="7e805b49-6a0a-4769-886c-1140a16506c0" class="toggle"><li><details><summary><strong>Ternaire </strong></summary><pre id="c6e89ac7-38a2-4621-8b1e-975a58c23357" class="code"><code>[on_true] if [expression] else [on_false]

min = a if a &lt; b else b</code></pre></details></li></ul><h1 id="18609a20-eadc-4846-ba17-db8aa8af42b2" class="block-color-orange_background">Problématiques </h1><p id="e2706fe3-53fb-4086-ad2a-4db6b43aa411" class=""><em><mark class="highlight-blue">Comment construire des tests conditionnels à l’aide d’opérateur booléens et de conditions dans Python ?</mark></em></p><h1 id="7abff2cc-c5ae-4486-9404-12d5152c4f18" class="block-color-orange_background">Hypothèses</h1><ol type="1" id="f0af95ee-624a-4b8a-9c5b-b0daaad7d968" class="numbered-list" start="1"><li><mark class="highlight-blue"><em>Il peut y avoir un état intermédiaire entre le vrai et le faux.</em></mark><p id="6b09b058-614c-4161-81e6-3f4e3ca55809" class="">Faux mais Vrai dans des contextes particuliers comme la <a href="https://fr.wikipedia.org/wiki/Logique_floue">logique floue</a>.</p></li></ol><ol type="1" id="a0564a80-a6db-4e84-85df-86073d3c81df" class="numbered-list" start="2"><li><em><mark class="highlight-blue">Les booléens ont été inventé par Mr Boole ?</mark></em><p id="dba84e6c-2a40-4780-ac5c-c5adf184361f" class="">Vrai. De 1844 à 1854, Georges Boole créé l’algèbre binaire , dite booléennes n’acceptant que deux valeurs numériques, 0 et 1.</p></li></ol><ol type="1" id="7484f78f-0e94-4879-9d05-7b56991c5e28" class="numbered-list" start="3"><li><mark class="highlight-blue"><em>Il y a une plusieurs façon de tester une condition que if ?</em></mark><ul id="a6eebeac-b3bc-469f-b66c-fbb87344daad" class="bulleted-list"><li style="list-style-type:disc">Lambda</li></ul><ul id="0d934e0b-136f-4a4b-87f7-7a1a827d6c50" class="bulleted-list"><li style="list-style-type:disc">Avec un dictionnaire</li></ul></li></ol><h1 id="cb24ff6d-9e5c-4d4f-9db2-37391d69b656" class="block-color-orange_background">Action</h1><h2 id="80dbfb32-8bbf-4ebc-834a-76965d63ce0b" class="">Ressources</h2><p id="34c75533-ad6e-40e8-8d30-8e431367449f" class=""><a href="https://python.sdv.univ-paris-diderot.fr/06_tests/">https://python.sdv.univ-paris-diderot.fr/06_tests/</a></p><p id="3ff0030c-bd61-4eb9-b633-f053afa6f750" class=""><a href="https://openclassrooms.com/fr/courses/4366701-decouvrez-le-fonctionnement-des-algorithmes/4384937-decouvrez-les-structures-conditionnelles">https://openclassrooms.com/fr/courses/4366701-decouvrez-le-fonctionnement-des-algorithmes/4384937-decouvrez-les-structures-conditionnelles</a></p><p id="83da3681-dca1-448a-a143-154ef4b5ff11" class=""><a href="https://python.doctor/page-apprendre-conditions-structures-conditionnelles-if-else-python-cours-debutant">https://python.doctor/page-apprendre-conditions-structures-conditionnelles-if-else-python-cours-debutant</a></p><p id="8b308e63-da6c-44d5-a2c5-4f4e0064892e" class="">
</p></div></article>



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
	
</style></head><article id="49deab13-dc2d-4811-a266-54076ef868f9" class="page sans"><header><img class="page-cover-image" src="https://www.notion.so/images/page-cover/webb2.jpg" style="object-position:center 70%"/><h1 id=<?php echo $ini ; $ini++ ;?> class="page-title">Story 7 - Les boucles</h1></header><div class="page-body"><h1 id="befd5521-d0b2-4e48-bc6c-b16f494872d3" class="block-color-orange_background">Contexte</h1><p id="29932a7f-d715-44e8-9c61-67475db808a7" class=""><mark class="highlight-blue">Découvrir et maîtriser la notion de boucle dans le langage Python.</mark></p><h1 id="eb3154c9-8594-4bd7-b0a3-16c2c46fa69f" class="block-color-orange_background">Mots clés</h1><ul id="638c5de2-b9af-479a-9441-3abcfa04c777" class="toggle"><li><details><summary><strong>Indentation</strong></summary><blockquote id="eb5b4512-5fbd-4435-8e96-a5d5846c9785" class="">Cela correspond à 4 espaces au début d’une un ligne et délimite un bloc de code<em> en python</em>. Délimite la portée d’une fonction.</blockquote></details></li></ul><ul id="a1d088a7-2a25-4dad-890e-78218ae4488d" class="toggle"><li><details><summary><strong>Itération</strong></summary><blockquote id="4f63f6e6-808e-4337-890f-5b60739c6b39" class="">Cela correspond à chaque tour de boucle, à chaque fois que la boucle est exécutée.
Répétition du corps de la boucle.</blockquote></details></li></ul><ul id="404d8e29-8df4-4cf5-819e-f5e4bc73b40a" class="toggle"><li><details><summary><strong>Récursivité</strong></summary><blockquote id="c4a364ec-763d-45b9-a86f-2504a34315c1" class="">Fonction qui s’appelle elle-même.</blockquote><p id="d3d36f6f-9ae8-400f-9ad9-5fd47be109db" class="">Exemple fonction factorielle :</p><pre id="1e127136-a50e-4a94-b7d5-5000c6a31200" class="code"><code>def fact(n):
	fact(0) = 1
	return n*fact(n-1)</code></pre></details></li></ul><ul id="f74625c8-a1e1-4b55-9c4a-d9e079bd1bc4" class="toggle"><li><details><summary><strong>Compteur</strong></summary><blockquote id="6f6b0d32-e79b-421c-b327-71f2485ebe9d" class="">Variable qui compte le nombre d’itération d’une boucle selon un pas à incrémenter.</blockquote></details></li></ul><ul id="c74283fa-043c-40d6-997a-e459db272aa8" class="toggle"><li><details><summary><strong>Fonction</strong></summary><blockquote id="a3697582-e0ba-4324-a6f7-e67452d90e77" class="">C’est un bloc de code nommé que l’on peut réutiliser et dont on peut modifier certains paramètres donnés (arguments).</blockquote><pre id="deb519f6-dcee-4cf2-afe6-6978dd928f57" class="code"><code>	def nom(arg1,arg2) :
		Instruction
		return ...
</code></pre></details></li></ul><p id="12d1556c-5c6a-4676-b34b-0021f25b5b09" class="">
</p><ul id="f4367a75-627e-43a3-b25d-9cba870c0a61" class="toggle"><li><details><summary><strong>Boucle</strong></summary><blockquote id="1e1f3d6a-e89f-45b5-998d-8c9da8044add" class="">Fonction récursive qui dépend de conditions ou paramètres.</blockquote></details></li></ul><ul id="144c5ee0-3909-42eb-9c49-9e85147c2131" class="toggle"><li><details><summary><strong>Boucle imbriquée</strong></summary><blockquote id="1d456e65-2d54-410d-9c88-bee1e3cfbab8" class="">C’est une boucle qui est inclue dans le bloc d’instruction d’une autre boucle. Très utilisé pour le calcul matriciel.</blockquote></details></li></ul><p id="139367b8-6208-41e3-8e09-3120541e11b7" class="">
</p><ul id="6d6b9c0a-568f-49ce-a34a-2ee5ec008b50" class="toggle"><li><details><summary><code>for</code></summary><blockquote id="4da90f73-9328-4a5e-8a5f-b7aad2c16c0a" class="">Boucle qui utilise une nouvelle variable qui prendra successivement les valeurs d’une collection de variable (liste, string, range, …) définie pour s’exécuter dans son bloc d’instructions (itération). On connait le nombre d’itération (début et fin).</blockquote><pre id="92183d2a-e7d7-44a0-8c2a-f0e03d80701b" class="code"><code>for [new_variable] in [liste ou string] : 
	[bloc]</code></pre></details></li></ul><ul id="f05e503c-98d1-48be-8f14-717864d8c644" class="toggle"><li><details><summary><code>while</code></summary><blockquote id="323c2ef3-9f59-41ff-bad3-6a0ed096d3f0" class="">Boucle qui exécute son bloc d’instructions tant que la condition est vérifiée. On ne connait pas à l’avance son nombre d’itération.</blockquote><pre id="29fc3311-0af3-4e01-807d-a17672f2972f" class="code"><code>while [condition] :
	[bloc]</code></pre></details></li></ul><ul id="64e78e32-2842-4dd5-8483-b13fa07046ed" class="toggle"><li><details><summary><code>range</code></summary><blockquote id="d458fbdf-8408-4b22-9670-6b264a61a0f4" class="">C’est un objet. C’est un type de variable qui est une séquence immuable de nombre. Un range s’initialise avec la fonction <code>range()</code> tel que :</blockquote><pre id="cbd42338-2242-4150-b098-6c09bd56c1d7" class="code"><code>range(start=0, stop, step=1)</code></pre><p id="4ec24bd9-3967-4c40-909f-628344df8cb2" class="">La séquence ira de <code>start</code> à <code>stop</code> non inclue.</p></details></li></ul><ul id="f694cdae-6a42-428f-9d8b-cc9a91bed702" class="toggle"><li><details><summary><code>break</code></summary><blockquote id="42c3a87c-70e0-4ecf-9501-f77621f0c9c1" class="">Ce mot clé s’utilise dans une boucle pour casser l’exécution d’une boucle, càd sortir de la boucle et passer à l’instruction suivante. À éviter.</blockquote></details></li></ul><ul id="43d0a987-4df7-4266-bb06-3a662cdff83f" class="toggle"><li><details><summary><code>continue</code></summary><blockquote id="0d74efbc-2fd2-49b2-8bf3-b904c3a6ef3b" class="">Permet de passer à la prochaine itération sans exécuter la suite.</blockquote></details></li></ul><ul id="e634b3bd-761b-4cf3-8851-d690cacc9c68" class="toggle"><li><details><summary><code>pass</code></summary><blockquote id="deaad8cb-d51e-4f58-8486-948455a11cbc" class="">C’est un mot clé qui rempli un bloc d’instruction encore vide. Sans cela, python renverrait une erreur. Son exécution ne renvoie rien.</blockquote><pre id="3631a8f7-0da5-4520-8426-55a85e4b4e3f" class="code"><code>if x:
print ( &quot;y&quot; )
else:
pass</code></pre></details></li></ul><ul id="293bcae5-0e59-4485-9f05-1aafe8cda15b" class="toggle"><li><details><summary><code>else</code></summary><p id="1daebe39-0e1d-4a27-88a3-3f4e844d5eba" class="">Le bloc de la clause <a href="https://courspython.com/tests.html#else"><code>else</code></a> est exécuté lorsque la boucle se termine par épuisement de la liste (avec <a href="https://courspython.com/boucles.html#for"><code>for</code></a>) ou quand la condition devient fausse (avec <a href="https://courspython.com/boucles.html#while"><code>while</code></a>), mais pas quand la boucle est interrompue par un <a href="https://courspython.com/boucles.html#break"><code>break</code></a>.</p></details></li></ul><h1 id="926b969f-2217-4fcf-92f0-9fe755932582" class="block-color-orange_background">Problématiques </h1><p id="5216e9b4-40ba-40c8-b3a5-e9cc27b82f1b" class=""><mark class="highlight-blue">Comment choisir la boucle adéquat en fonction d’un problème donné ?</mark></p><p id="440f0b5a-5e0e-4fbe-9d0a-4f3657fbaf78" class="">On choisira notre boucle en fonction de notre problème : 
<code>for</code> pour parcourir un tableau ou une chaine de caractère ou si on souhaite un nombre d’itération précis.</p><p id="4b99c46b-3830-4249-a3dd-949714415f04" class=""><code>while</code> pour itérer un bloc d’instruction un nombre de fois non connu à l’avance. </p><p id="5fefbed2-f159-491b-8c1e-9ee8af32889b" class=""><mark class="highlight-blue">Comment connaître le nombre de fois qu’une boucle sera répétée ?</mark></p><p id="11bc816b-a018-487c-b1bc-8e72ceea2586" class="">Grâce à un compteur qu’on incrémente.</p><h1 id="4e3501dd-119c-4a9b-91b6-8cf6cecb1989" class="block-color-orange_background">Hypothèses</h1><ol type="1" id="f2b806dc-e091-49ed-9ea2-acb29f024a44" class="numbered-list" start="1"><li><mark class="highlight-blue">Une boucle infinie peut s’interrompre seule.</mark><p id="b80ddc7d-c623-4526-9c2a-434262b75f09" class="">Faux, si elle infinie, elle ne s’interrompt pas par définition.</p></li></ol><ol type="1" id="a1b2874f-7f4c-4362-88c5-0728e1f8e3cc" class="numbered-list" start="2"><li><mark class="highlight-blue">Une boucle à itération donné, s’interrompra uniquement à la fin de ses itérations.
</mark>Vrai sauf si on utilise le mot clé <code>break</code>.</li></ol><ol type="1" id="518ce0f3-1703-4c8b-92db-948285b88f50" class="numbered-list" start="3"><li><mark class="highlight-blue">On peut utiliser une boucle pour créer une nouvelle variable.</mark><p id="070660de-280a-4905-b443-1e5e66c16ff4" class="">Vrai mais ce sera une variables locale. </p></li></ol><ol type="1" id="762919c3-2cce-4cbc-91b4-6544c4bf49a5" class="numbered-list" start="4"><li><mark class="highlight-blue">Une boucle </mark><mark class="highlight-blue"><code>for</code></mark><mark class="highlight-blue"> parcourt uniquement un tableau ou une chaîne de caractère.
</mark>Faux. Il parcours également le type <code>range</code> qui est une séquence immuable de nombre ou tout autre collections de variable.</li></ol><h1 id="ce074889-71ae-4295-af3b-bb3bf3650f8c" class="block-color-orange_background">Action</h1><h2 id="df7e23d3-81d0-46b0-8fa1-3fc2ba3c2f20" class="">Ressources</h2><p id="50a1ec37-5e9a-4a6d-840e-bc7187edb5d0" class=""><a href="https://courspython.com/boucles.html">https://courspython.com/boucles.html</a></p><p id="4e78ef62-99ce-47ff-9b4a-e9b9880701c4" class=""><a href="https://www.pierre-giraud.com/python-apprendre-programmer-cours/boucle-for-while/">https://www.pierre-giraud.com/python-apprendre-programmer-cours/boucle-for-while/</a></p><p id="d880f102-c590-4543-9f27-b44375389c9d" class=""><a href="https://python.doctor/page-apprendre-boucles-python-loop">https://python.doctor/page-apprendre-boucles-python-loop</a></p><p id="64211f7d-77d9-45f8-b507-74d073cd22a3" class=""><a href="https://www.youtube.com/watch?v=x_Jeyvw7n9I">https://www.youtube.com/watch?v=x_Jeyvw7n9I</a></p><h2 id="63594221-5ccf-483d-86a6-b5d709f9334a" class="">Avantages / Inconvénients</h2><table id="bfcd2952-bfb3-4a18-a2b6-a074734cd3b4" class="simple-table"><tbody><tr id="73c95b37-66fd-41e7-b724-2d350dd63f5c"><td id="Tf~U" class=""></td><td id="YWTF" class="">Avantages</td><td id="[T]D" class="">Inconvénients</td></tr><tr id="c7fd686e-ea6b-493b-9de0-7a53f6dda76d"><td id="Tf~U" class=""><code>for</code></td><td id="YWTF" class="">Idéal pour parcourir un tableau ou une chaine de caractère.</td><td id="[T]D" class="">On doit connaitre le nombre d’itération (liste, range, …).</td></tr><tr id="db831741-b463-4989-a4ab-ac4bc1bb8644"><td id="Tf~U" class=""><code>while</code></td><td id="YWTF" class="">On n’est pas obligé de connaître le nombre d’itération.</td><td id="[T]D" class="">Risque de boucle infinie</td></tr></tbody></table><p id="e3156afb-3bf7-40c0-b4e2-69194a0f6df6" class="">
</p><p id="ae459c23-8b07-4cca-ae52-2b921712a2a5" class="">
</p><p id="44a217d9-3c44-4f1c-b20d-bf83161d76a8" class="">
</p></div></article>


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
	
</style></head><article id="c6dc5b04-c409-4e87-bbc8-48ac3cef7f00" class="page sans"><header><img class="page-cover-image" src="https://www.notion.so/images/page-cover/nasa_ibm_type_704.jpg" style="object-position:center 49.63999999999999%"/><h1 id=<?php echo $ini ; $ini++ ;?> class="page-title">Story 8 - Les tableaux et dictionnaires</h1></header><div class="page-body"><h1 id="6ced7daa-188b-401b-a430-28fbf7291c42" class="block-color-orange_background">Contexte</h1><p id="1a3852ce-ea5f-48fe-8aa7-cb36d072a15f" class=""><mark class="highlight-blue">Nous allons apprendre à nous familiariser avec les différentes structures de données telles que les tableaux (listes), les tuples et dictionnaires.</mark></p><h1 id="0483d0b6-0788-468c-95d7-7334f30ba963" class="block-color-orange_background">Mots clés</h1><ul id="656cfc53-4c58-4f20-bfdb-31034435c254" class="toggle"><li><details><summary><strong>Structure de données</strong></summary><blockquote id="446f466b-e0a1-469e-a994-eb91d1dc0577" class="">Moyen de classer et ordonner des données pour les consulter et les traiter efficacement. Dictionnaires, listes, tuples, set, etc.</blockquote></details></li></ul><ul id="5b24c554-6673-4b70-b3ad-d46085c6d4c4" class="toggle"><li><details><summary><strong>Séquence</strong></summary><blockquote id="3acef71d-ca64-4413-b269-be08a8696a1f" class="">Ensemble fini et ordonné d’éléments indicés de 0 à n-1. Listes, tuples.</blockquote></details></li></ul><ul id="869722e0-19fb-4dc3-a193-d4e58d2d9628" class="toggle"><li><details><summary><strong>Container</strong></summary><blockquote id="29a1f677-7468-448a-b589-33f16dd41101" class="">C’est un nom générique pour définir un objet Python composite destiné à contenir une collection d&#x27;autres objets. Exemple : list, dictionnaire, range, string, fichier … 
Un container peut être ordonné, indéxable et itérable.</blockquote></details></li></ul><p id="13cd5527-6014-4a6a-b561-942fdc8ecb71" class="">
</p><ul id="eb63ebc3-420d-499e-ae98-d239d536ceb8" class="toggle"><li><details><summary><strong>Liste (Tableau)</strong></summary><blockquote id="783a1a01-3425-4a84-947d-a51033a5eb95" class="">C’est une structure de données (séquence) qui contient une série de valeurs qui peuvent-être multi-type. Ordonnées, celles-ci peuvent être modifiées à la différence des tuples.
Il est définit à l’aide crochet <code>[]</code>.</blockquote><pre id="2fb13adb-5055-4349-8567-25932fa46d7e" class="code"><code>mixte = [&quot;girafe&quot;, 5, &quot;souris&quot;, 0.15]
mixte[-1] -&gt; 0.15

nombre = list(range(5))
nombre[0:3]  -&gt; [0,1,2]

nombre.append(3)
nombre[2:] -&gt; [2,3]

nombre[0:4:2] -&gt; [0,2]</code></pre><p id="32b350e6-7987-4497-a91a-8a36f8a8797a" class="">Voici quelques opérations que l’on peut effectuer sur un liste : </p><pre id="816195a9-6207-450b-b237-66846db383c9" class="code"><code>&gt;&gt;&gt; liste = list(range(10))
&gt;&gt;&gt; liste
[0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
&gt;&gt;&gt; sum(liste)
45
&gt;&gt;&gt; min(liste)
0
&gt;&gt;&gt; max(liste)
9

+ : concaténation 
* : duplication

&gt;&gt;&gt; a = [1, 2, 3]
&gt;&gt;&gt; a.insert(2, -15)  // insère un objet dans une liste à un indice déterminé
&gt;&gt;&gt; a
[1, 2, -15, 3]

&gt;&gt;&gt; a = [1, 2, 3]
&gt;&gt;&gt; del a[1]   // supprime un élément d&#x27;une liste à un indice déterminé
&gt;&gt;&gt; a
[1, 3]

&gt;&gt;&gt; a = [1, 2, 3]
&gt;&gt;&gt; a.remove(3)  // supprime un élément d&#x27;une liste à partir de sa valeur
&gt;&gt;&gt; a
[1, 2]

&gt;&gt;&gt; a = [3, 1, 2]
&gt;&gt;&gt; a.sort()  // trie les éléments d&#x27;une liste du plus petit au plus grand ou par ordre alphabetique
&gt;&gt;&gt; a
[1, 2, 3]

liste = [1, 3, 5, 7, 9]
&gt;&gt;&gt; 3 in liste
True

</code></pre><p id="897b1fd4-3276-49fc-a9d7-0d2a5e20c52f" class="">Les indices fonctionnent aussi avec les chaînes de caractères ! En fait, les chaînes de caractères sont juste des listes de caractères.</p></details></li></ul><ul id="497a2455-ae9f-4415-8df1-3fab8d1cb1ef" class="toggle"><li><details><summary><strong>Tuple (n-uplet)</strong></summary><blockquote id="35b816db-e2ee-4ee4-a48d-1f4bb069f87e" class="">C’est un liste (itérable, ordonnées et indexable) mais non modifiable. L’exécution est plus rapide et prend moins de mémoire qu’une liste.
Il est définit à l’aide de parenthèses <code>()</code>.</blockquote><pre id="d5453c05-df73-4265-ae2a-9257515e3337" class="code"><code>&gt;&gt;&gt; t = (1, 2, 3)
&gt;&gt;&gt; t
(1, 2, 3)
&gt;&gt;&gt; type(t)
&lt;class &#x27;tuple&#x27;&gt;

&gt;&gt;&gt; t[0:2]
(1, 2)
&gt;&gt;&gt; t[2] = 15
Traceback (most recent call last):
  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
TypeError: &#x27;tuple&#x27; object does not support item assignment


&gt;&gt;&gt; for indice, element in enumerate([75, -75, 0]):
...     print(indice, element)
...
0 75
1 -75
2 0

&gt;&gt;&gt; for bidule in enumerate([75, -75, 0]):
...     print(bidule, type(bidule))
...
(0, 75) &lt;class &#x27;tuple&#x27;&gt;
(1, -75) &lt;class &#x27;tuple&#x27;&gt;
(2, 0) &lt;class &#x27;tuple&#x27;&gt;</code></pre></details></li></ul><ul id="dc4794f5-b36f-4c3f-b8e5-294464cef9d1" class="toggle"><li><details><summary><strong>Dictionnaire</strong></summary><blockquote id="b700fc3f-bdbe-4e48-9cd8-5c84c3c0e449" class="">C’est un tableau associatif. On accède aux <strong>valeurs </strong>d’un dictionnaire par une <strong>clés </strong>unique. Il est non ordonné. Clés immuables, valeurs mutables.
Il est définit à l’aide d’accolade <code>{}</code>. On remplit le dictionnaire avec différentes clés (<code>&quot;nom&quot;</code>, <code>&quot;taille&quot;</code>, <code>&quot;poids&quot;</code>) auxquelles on affecte des valeurs (<code>&quot;girafe&quot;</code>, <code>5.0</code>, <code>1100</code>).</blockquote><pre id="4d0705df-8420-4d92-bb14-04792d60cd72" class="code"><code>ani1 = {}
&gt;&gt;&gt; ani1[&quot;nom&quot;] = &quot;girafe&quot;
&gt;&gt;&gt; ani1[&quot;taille&quot;] = 5.0
&gt;&gt;&gt; ani1[&quot;poids&quot;] = 1100
&gt;&gt;&gt; ani1
{&#x27;nom&#x27;: &#x27;girafe&#x27;, &#x27;taille&#x27;: 5.0, &#x27;poids&#x27;: 1100}

ou 

&gt;&gt;&gt; ani2 = {&quot;nom&quot;: &quot;singe&quot;, &quot;poids&quot;: 70, &quot;taille&quot;: 1.75}</code></pre><p id="53a861e5-1e72-4d40-b8a4-b2fba7bc25bf" class="">Toutes les clés de dictionnaire utilisées jusqu&#x27;à présent étaient des 
chaînes de caractères. On peut utiliser d&#x27;autres types d&#x27;objets comme 
des entiers, des <em>floats</em>, voire même des <em>tuples</em>, cela peut s&#x27;avérer parfois très utile. Une règle est toutefois requise, les objets utilisés comme clé doivent être <strong>hachables</strong>.</p><p id="430b694f-2c61-41b9-b4ac-7b7fadcd61fb" class="">
</p><p id="bfa1d032-9c59-4def-a8ab-337d9bae3efd" class="">Si on souhaite voir toutes les associations clés / valeurs, on peut itérer sur un dictionnaire de la manière suivante :</p><pre id="7f94ad14-ea56-497e-9e06-a458104178da" class="code"><code>&gt;&gt;&gt; ani2 = {&#x27;nom&#x27;: &#x27;singe&#x27;, &#x27;poids&#x27;: 70, &#x27;taille&#x27;: 1.75}
&gt;&gt;&gt; for key in ani2:
...     print(key, ani2[key])
...
poids 70
nom singe
taille 1.75</code></pre><p id="74a85581-1457-4071-96a2-bbdc49cec820" class="">Quelques opérations : </p><pre id="4e98d4e7-4766-46f3-a34b-59625e23e524" class="code"><code>&gt;&gt;&gt; ani2 = {&#x27;nom&#x27;: &#x27;singe&#x27;, &#x27;poids&#x27;: 70, &#x27;taille&#x27;: 1.75}
&gt;&gt;&gt; if &quot;poids&quot; in ani2: // Apprtenance (renvoie un booléen)
...     print(&quot;La clé &#x27;poids&#x27; existe pour ani2&quot;)

&gt;&gt;&gt; ani2.get(&quot;nom&quot;)  // get renvoie la valeur
&#x27;singe&#x27;
&gt;&gt;&gt; ani2.get(&quot;age&quot;)  // Mais pas d&#x27;erreur si inexistante
&gt;&gt;&gt;</code></pre></details></li></ul><ul id="bcd35eb6-b0f9-469c-bb47-7a4562c39d2d" class="toggle"><li><details><summary><strong>Set</strong></summary><blockquote id="d05ea8f2-2924-4fcf-8dff-e95f0e2c10b5" class="">C’est un type de conteneur qui possède une seule copie maximum de chaque élément. Il est modifiable, non ordonné et non indexable.
Utiliser pour supprimer les doublons d’une liste par exemple ou parfois permet de réduire son code.</blockquote><pre id="801f3260-cd4c-47b9-93cf-7fc89c653337" class="code"><code>myset = {&quot;apple&quot;, &quot;banana&quot;, &quot;cherry&quot;}</code></pre><p id="b44d2c87-fc42-4cf5-b9e0-aa611e754729" class=""><em>Frozen set est pareil mais non modifiable.</em></p></details></li></ul><ul id="64998370-bbeb-426c-930d-aecaa49b59e8" class="toggle"><li><details><summary><strong>Listes imbriquées</strong></summary><blockquote id="e2bc2c18-c66e-424d-8731-e947119f0c5b" class="">Ce sont des listes qui contiennent d’autres listes. On les appelle matrice ou tableau bi-dimensionnel. </blockquote><pre id="83b25010-4cf0-46ff-affe-3742066d0a00" class="code"><code>a = [[1, 2, 3], [4, 5, 6]]</code></pre><p id="07206491-ad5b-47b6-9ee2-34b38c628b29" class="">Pour traiter un tableau à deux dimensions, vous utilisez généralement des boucles imbriquées. La première boucle parcourt le numéro de ligne, la seconde boucle parcourt les éléments à l&#x27;intérieur d&#x27;une rangée.</p><pre id="ea75d919-f347-4591-935f-addfcaac7f56" class="code"><code>a = [[1, 2, 3, 4], [5, 6], [7, 8, 9]]
for row in a:
    for elem in row:
        print(elem, end=&#x27; &#x27;)
    print()</code></pre></details></li></ul><ul id="5a0590b0-bc4f-4f23-b752-bd874329e557" class="toggle"><li><details><summary><strong>Clés</strong></summary><blockquote id="6ac69d52-48db-4cdc-a525-85afed224176" class="">Il s’agit d’une valeur unique associée à une autre à l’aide d’un dictionnaire. Equivalence à l’index pour les dictionnaires. </blockquote></details></li></ul><ul id="cfaaa945-92da-4183-826f-9855d2058a6e" class="toggle"><li><details><summary><strong>Indice (index)</strong></summary><blockquote id="33bf71a0-24cf-4c4e-aaa0-30886098d26a" class="">C’est la position d’un élément d’une liste ou d’un tuple. Soit <style>@import url('https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.13.2/katex.min.css')</style><span data-token-index="0" contenteditable="false" class="notion-text-equation-token" style="user-select:all;-webkit-user-select:all;-moz-user-select:all"><span></span><span><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi>n</mi></mrow><annotation encoding="application/x-tex">n</annotation></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height:0.43056em;vertical-align:0em;"></span><span class="mord mathnormal">n</span></span></span></span></span><span>﻿</span></span> éléments, <code>[0]</code> est le premier élément et <code>[n-1]</code> le dernier.</blockquote></details></li></ul><ul id="fa5f7c09-dbad-494d-81b4-25a969c80015" class="toggle"><li><details><summary><strong>Indice négatif</strong></summary><blockquote id="e9b55cd2-9dbd-4e7a-ac32-d86769747d3d" class="">Si on utilise un indice négatif, on parcours une séquence en partant de la fin.</blockquote><figure id="469749f3-500f-41a2-9614-292dc58c18fc" class="image"><a href="Story%208%20-%20Les%20tableaux%20et%20dictionnaires%20c6dc5b04c4094e87bbc848ac3cef7f00/indicenegatif.png"><img style="width:538px" src="Story%208%20-%20Les%20tableaux%20et%20dictionnaires%20c6dc5b04c4094e87bbc848ac3cef7f00/indicenegatif.png"/></a></figure></details></li></ul><ul id="f0d366a9-2cec-4614-924f-af0c50808412" class="toggle"><li><details><summary><strong>Objet ordonné</strong></summary><blockquote id="324d66ea-4878-4812-99f2-5db5ba5f56ee" class="">C’est un container indexé. </blockquote></details></li></ul><ul id="451386d2-ccf8-4816-a72b-e1911e8a282f" class="toggle"><li><details><summary><strong>Objet mutable (modifiable)</strong></summary><blockquote id="c5c9c9e8-9719-4d88-84d8-8b57201d7828" class="">Objet où l’on peut changer ce qu’il contient après sa création (ajout, suppression, modification). </blockquote></details></li></ul><ul id="c8141d4c-9c2d-4e6f-9da8-62e8965a6d75" class="toggle"><li><details><summary><strong>Objet non</strong> <strong>mutable (non modifiable / immuable)</strong></summary><blockquote id="e9e95312-6e1f-4d95-9a6f-b53b74f37394" class="">Une fois créé, on ne peut plus modifier (ajout, suppression, modification) cet objet ou ce qu’il contient.</blockquote></details></li></ul><p id="32496ecc-8ae5-4857-859a-92b9341e0af5" class="">
</p><ul id="d755961f-dc02-448c-9d2b-de8f786fc905" class="toggle"><li><details><summary><strong>Méthode</strong></summary><p id="6ca8795c-e07b-478f-9c40-7ea7a4fce872" class="">Fonction associé à un objet. </p></details></li></ul><ul id="f3558f86-bd82-49c8-bc43-c7c0ad11153b" class="toggle"><li><details><summary><code>len()</code></summary><blockquote id="c2199f2c-b86e-4186-a39a-f865e6524be8" class="">Renvoie la longueur (le nombre d’élément) d’un container.</blockquote></details></li></ul><ul id="e0d43d80-fc96-4a81-945e-849aa0424912" class="toggle"><li><details><summary><code>keys()</code></summary><blockquote id="56ae5e71-d4aa-4ce6-9a8b-3b12a6072bdf" class="">Renvoie les clés d’un dictionnaire : </blockquote><pre id="c7553e23-ef65-4319-8df1-63243a1396fa" class="code"><code>&gt;&gt;&gt; ani2 = {&#x27;nom&#x27;: &#x27;singe&#x27;, &#x27;poids&#x27;: 70, &#x27;taille&#x27;: 1.75}
&gt;&gt;&gt; ani2.keys()
dict_keys([&#x27;poids&#x27;, &#x27;nom&#x27;, &#x27;taille&#x27;])</code></pre><p id="a60974fc-26cb-4a21-9f57-39a2408e6019" class="">Les mentions <code>dict_keys</code> et <code>dict_values</code>indiquent que nous avons à faire à des objets un peu particuliers. Ils ne sont pas indexables (on ne peut pas retrouver un élément par indice, par exemple <code>dico.keys()[0]</code> renverra une erreur). Il s’agit d’un objet <code>view</code> qui est une photo à un instant donné. Si besoin, nous pouvons les transformer en liste avec la fonction <code>list()</code>.</p></details></li></ul><ul id="4f1f5ebf-fa12-45b9-a405-da31411269a5" class="toggle"><li><details><summary><code>values()</code></summary><blockquote id="773bfa05-8c83-4d8b-bf27-f4ce22f6c85f" class="">Renvoie les valeurs d’un dictionnaire : </blockquote><pre id="55f5922d-e5c0-485c-a6b1-132daafe17bb" class="code"><code>&gt;&gt;&gt; ani2 = {&#x27;nom&#x27;: &#x27;singe&#x27;, &#x27;poids&#x27;: 70, &#x27;taille&#x27;: 1.75}
&gt;&gt;&gt; ani2.values()
dict_values([70, &#x27;singe&#x27;, 1.75])</code></pre><p id="bd1753d6-b45b-4ee7-826b-cfca55d9c2a3" class="">Les mentions <code>dict_keys</code> et <code>dict_values</code>indiquent que nous avons à faire à des objets un peu particuliers. Ils ne sont pas indexables (on ne peut pas retrouver un élément par indice, par exemple <code>dico.keys()[0]</code> renverra une erreur). Il s’agit d’un objet <code>view</code> qui est une photo à un instant donné. Si besoin, nous pouvons les transformer en liste avec la fonction <code>list()</code>.</p></details></li></ul><ul id="0bc1c728-1eac-4e49-b6cc-2513ecbd6522" class="toggle"><li><details><summary><code>items()</code></summary><blockquote id="f1ed5fd4-3563-4ce0-acf2-7956625f19f2" class="">Renvoie un nouvel objet <code>dict_items</code>, non indexable mais itérable contenant les couples clé/valeur : </blockquote><pre id="52569486-efb1-4fa7-b462-1e023ca21b0d" class="code"><code>&gt;&gt;&gt; dico = {0: &quot;t&quot;, 1: &quot;o&quot;, 2: &quot;t&quot;, 3: &quot;o&quot;}
&gt;&gt;&gt; dico.items()
dict_items([(0, &#x27;t&#x27;), (1, &#x27;o&#x27;), (2, &#x27;t&#x27;), (3, &#x27;o&#x27;)])

&gt;&gt;&gt; for key, val in dico.items():
...    print(key, val)
...
0 t
1 o
2 t
3 o</code></pre></details></li></ul><ul id="e3902996-1290-4b08-b26f-8c1816b0991e" class="toggle"><li><details><summary><code>append()</code></summary><blockquote id="4e6139fb-a7d2-49d6-9bf1-6bb083408b92" class="">Ajoute un élément à une liste</blockquote><pre id="30861781-4705-4b9f-a8a4-ac4b2ee7f420" class="code"><code>&gt;&gt;&gt; numbers = [1, 2, 3]
&gt;&gt;&gt; numbers.append(4)
&gt;&gt;&gt; numbers
[1, 2, 3, 4]</code></pre><p id="2905aacb-1bf2-4a33-a322-cff532609852" class="">
</p></details></li></ul><ul id="d097a62e-f8d0-4a7c-b0ce-fe80bb40e233" class="toggle"><li><details><summary><strong>Hash</strong></summary><blockquote id="87613aaf-3412-4540-b24e-fbef3806419c" class="">Fonction mathématique qui renvoie un entier unique en font de la donnée hashée pour un accès rapide à une donnée.</blockquote><p id="0d57349c-db36-44f7-b645-70b029f42c90" class="">Un objet Python est dit <strong>hachable</strong> (<em>hashable</em> en anglais) s&#x27;il est possible de calculer une valeur de hachage sur celui-ci avec la fonction interne <code>hash()</code>. En programmation, la valeur de hachage peut être vue comme une empreinte numérique de l&#x27;objet. Elle est obtenue en passant l&#x27;objet dans une fonction de hachage et dépend du contenu de l&#x27;objet. En Python, cette empreinte est comme dans la plupart des langages de programmation un entier. Au sein d&#x27;une même session Python, deux objets hachables qui ont un contenu identique auront strictement la même valeur de hachage.</p><p id="9f596e7e-b2f7-4634-9935-2806f20a223b" class="">
</p><p id="36005a5a-05cc-4a8b-ab11-10265c3f5d6a" class="">La valeur de hachage d&#x27;un objet renvoyée par la fonction <code>hash()</code> n&#x27;a pas le même sens que son identifiant renvoyé par la fonction <code>id()</code>. La valeur de hachage est obtenue en « moulinant » le contenu de l&#x27;objet dans une fonction de hachage. L&#x27;identifiant est quant à lui attribué par Python à la création de l&#x27;objet. Il est constant tout le le long de la durée de vie de l&#x27;objet, un peu comme une carte d&#x27;identité. Tout 
objet a un un identifiant, mais il doit être hachable pour avoir une valeur de hachage.</p><p id="b5d28897-1060-4a37-8225-ef4c1f7fbfcc" class="">
</p><p id="244e5380-56ec-4086-b5e4-e51a938e5b34" class="">
</p><figure id="d4346839-e6b2-482f-9232-77b4bc378ac7"><a href="https://python.sdv.univ-paris-diderot.fr/13_dictionnaires_tuples_sets/" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">13. Dictionnaires, tuples et sets - Cours de Python</div><div class="bookmark-description">Dans ce chapitre nous allons voir trois nouveaux types d&#x27;objet qui s&#x27;avèrent extrêmement utiles : les dictionnaires, les tuples et les sets. Comme les listes ou les chaînes de caractères, ces trois nouveaux types sont appelés communémement des containers. Avant d&#x27;aborder en détail ces nouveaux types, nous allons définir les containers et leurs propriétés.</div></div><div class="bookmark-href"><img src="https://python.sdv.univ-paris-diderot.fr/assets/images/favicon.png" class="icon bookmark-icon"/>https://python.sdv.univ-paris-diderot.fr/13_dictionnaires_tuples_sets/</div></div><img src="https://python.sdv.univ-paris-diderot.fr/img/tuple_de_listes.png" class="bookmark-image"/></a></figure></details></li></ul><p id="d1d8a367-07f5-47d2-9773-bf497a9343a1" class="">
</p><h1 id="400d8274-2baa-417e-9433-66f9b6cab29c" class="block-color-orange_background">Problématiques </h1><p id="33b770fd-4bcc-41ec-ad14-de904d7c1fbd" class=""><mark class="highlight-blue">Comment les structures de données dans python vont nous permettre de stocker et analyser les données ?</mark></p><p id="eec1ee7a-f7fd-498e-a197-a53c470fc473" class=""><mark class="highlight-blue">Quelles sont les différentes structures de données ?</mark></p><h1 id="9783ff24-1bea-49be-8b7b-d9d24801d128" class="block-color-orange_background">Hypothèses</h1><p id="2d1175d1-93d2-4dc0-a9bd-d3c2126067d9" class=""><mark class="highlight-blue">On peut stocker des données dans une liste ou dans un dictionnaire de la même manière.</mark></p><p id="606843b6-b7b9-4dff-819e-e55ba82bcebf" class="">Faux. Les dictionnaires ont besoin d’une clé contrairement aux listes qui contiennent des valeurs seules. </p><p id="5e1037d0-d2de-4a04-b4ea-25d9ca83566e" class=""><mark class="highlight-blue">Un dictionnaire permet de stocker des données non structuré ?</mark></p><p id="18634135-b54c-47b9-9e96-2bdc246d9864" class="">Vrai</p><p id="03950f25-c74c-47a8-a793-9eed49fe880e" class=""><mark class="highlight-blue">Les structures de données permettent de me modifier des données non-structurées en données structurées.</mark></p><p id="8d0b4194-b984-4920-b9d5-47e602e78834" class="">Faux, il faut faire plus que placer des données non structurées dans structures de données pour transformer des données non structurées en données structurées.</p><h1 id="f2b8b9fc-2797-4cc8-bbbb-179b8596f5a4" class="block-color-orange_background">Action</h1><h2 id="19305387-3c53-4c67-a90f-e574309d2957" class="">Ressources</h2><p id="66bfa2b9-6400-4684-9ae3-3be6ee3409ae" class=""><a href="https://pixees.fr/informatiquelycee/n_site/nsi_prem_pythonSequence.html">https://pixees.fr/informatiquelycee/n_site/nsi_prem_pythonSequence.html</a></p><p id="ce85fc3d-f873-4d89-8738-2b234b0ecccd" class=""><a href="https://snakify.org/fr/lessons/two_dimensional_lists_arrays/">https://snakify.org/fr/lessons/two_dimensional_lists_arrays/</a></p><p id="18a2b353-59e6-49f5-8b63-985054a27e0a" class=""><a href="https://courspython.com/dictionnaire.html">https://courspython.com/dictionnaire.html</a></p><p id="9e66c469-3828-416d-95c2-c7505c7a9fc1" class=""><a href="https://python.sdv.univ-paris-diderot.fr/04_listes/">https://python.sdv.univ-paris-diderot.fr/04_listes/</a></p><p id="d45a782f-2a6c-424a-830e-d5a618907575" class=""><a href="https://python.sdv.univ-paris-diderot.fr/13_dictionnaires_tuples_sets/">https://python.sdv.univ-paris-diderot.fr/13_dictionnaires_tuples_sets/</a></p><p id="b4f1f619-655c-4eff-9281-767673810dd3" class=""><a href="https://www.youtube.com/watch?v=5UOSiCPu5aM">https://www.youtube.com/watch?v=5UOSiCPu5aM</a></p><p id="f515cc17-0f3a-4b0a-a56c-c414007dfd70" class=""><a href="https://www.youtube.com/watch?v=QR-gUWAeLqs">https://www.youtube.com/watch?v=QR-gUWAeLqs</a></p><p id="6b8f39c8-2de7-4675-b436-53fa01da092d" class="">
</p><p id="5244cb42-25e5-4db0-aa4c-5904299694c7" class="">Autre</p><figure id="0d759fe3-f09f-4bc6-8561-d4a58a6d2a1c"><a href="https://python.sdv.univ-paris-diderot.fr/13_dictionnaires_tuples_sets/" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">13. Dictionnaires, tuples et sets - Cours de Python</div><div class="bookmark-description">Dans ce chapitre nous allons voir trois nouveaux types d&#x27;objet qui s&#x27;avèrent extrêmement utiles : les dictionnaires, les tuples et les sets. Comme les listes ou les chaînes de caractères, ces trois nouveaux types sont appelés communémement des containers. Avant d&#x27;aborder en détail ces nouveaux types, nous allons définir les containers et leurs propriétés.</div></div><div class="bookmark-href"><img src="https://python.sdv.univ-paris-diderot.fr/assets/images/favicon.png" class="icon bookmark-icon"/>https://python.sdv.univ-paris-diderot.fr/13_dictionnaires_tuples_sets/</div></div><img src="https://python.sdv.univ-paris-diderot.fr/img/tuple_de_listes.png" class="bookmark-image"/></a></figure></div></article>


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
	
</style></head><article id="3387092d-1bd6-4f80-b145-e148ba834fcd" class="page sans"><header><img class="page-cover-image" src="https://www.notion.so/images/page-cover/woodcuts_1.jpg" style="object-position:center 90%"/><h1 id=<?php echo $ini ; $ini++ ;?> class="page-title">Story 9 - <strong>Fichiers - Fonctions - Modules</strong></h1></header><div class="page-body"><h1 id="e8cb550b-041d-4f3e-8c38-82a1d18a0f0b" class="block-color-orange_background">Contexte</h1><p id="46a8f1dc-3c44-4d38-8a87-b43db44ee42d" class=""><mark class="highlight-blue">Maitriser la manipulation des fichiers.</mark></p><p id="ceae1deb-82bb-441c-8c29-e58f8d3e1802" class=""><mark class="highlight-blue">Se familiariser avec les modules de python.</mark></p><h1 id="e0976e82-a6a9-4b45-9f45-9896801c2b45" class="block-color-orange_background">Mots clés</h1><ul id="f0e47a73-0735-4d8f-9a91-e5541c70c1a8" class="toggle"><li><details><summary><strong>Package</strong></summary><blockquote id="d2faf09d-788a-49d3-9d6b-99afc7dd7578" class="">Ensemble de plusieurs modules.</blockquote></details></li></ul><ul id="a926b488-b30d-4376-9eb2-2606c9f48e63" class="toggle"><li><details><summary><strong>Module</strong></summary><blockquote id="e44f4e1a-d84a-4957-b23c-438d56ccb76d" class="">C’est une bibliothèque ou libraire. Définie dans une story précédente.
On les importe de la manière suivante :</blockquote><pre id="ff1c5f6d-e319-496c-93c8-b8c9f75be7a0" class="code"><code>import numpy                 # numpy.array()
import numpy as np           # np.array()
from numpy import array      # array()
from numpy import *          # array()</code></pre></details></li></ul><ul id="f2104839-7858-4c53-93d7-e426fff49b98" class="toggle"><li><details><summary><strong>Module built-in</strong></summary><blockquote id="63ab0da5-4399-409f-9d48-fe99adfc3e86" class="">Ce sont des modules déjà présents dans python. </blockquote><p id="d7b8bf6e-910a-4b55-935e-06b97808f040" class="">In addition to built-in functions, a large number of pre-defined functions are also available as a part of libraries bundled with Python distributions. These functions are defined in modules are called built-in modules.</p><p id="dd6f962c-2f7e-4feb-afbb-d43c15a42945" class="">Built-in modules are written in C and integrated with the Python shell. Each built-in module contains resources for certain system-specific functionalities such as OS management, disk IO, etc. The standard library also contains many Python scripts (with the .py extension) containing useful utilities.</p></details></li></ul><ul id="f3cd857b-3727-436e-9d71-fd01d55d06bc" class="toggle"><li><details><summary><strong>numpy</strong></summary><figure id="b8b21a4d-f370-4c98-9fd3-65f1b2b5b43d" class="link-to-page"><a href="https://www.notion.so/Numpy-b8b21a4df3704c989fd365f1b2b5b43d"><span class="icon">🦝</span>Numpy</a></figure><p id="7235c0c2-5648-4910-9824-dfceb14ee3fe" class="">Destinée à manipuler des matrices ou tableaux multidimensionnels ainsi que des fonctions mathématiques opérant sur ces tableaux.</p><p id="9792aa9d-7979-464b-aad9-c93528b92ba7" class="">Elle fournit de multiples fonctions permettant notamment de créer directement un tableau depuis un fichier ou au contraire de sauvegarder un tableau dans un fichier, et manipuler des vecteurs, matrices et polynômes.</p><pre id="68999007-6f7c-45e7-92d8-383f3c6e4934" class="code"><code>import numpy as np</code></pre><p id="d544c656-36e4-4e6f-8174-9141f8f2e558" class="">Doc : </p><figure id="fbef86b8-078b-4324-9661-c2b81c756a8d"><a href="https://numpy.org/doc/stable/" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">NumPy documentation - NumPy v1.23 Manual</div><div class="bookmark-description">Version: 1.23 Download documentation: PDF Version | Historical versions of documentation Useful links: Installation | Source Repository | Issue Tracker | Q&amp;A Support | Mailing List NumPy is the fundamental package for scientific computing in Python.</div></div><div class="bookmark-href"><img src="https://numpy.org/doc/stable/_static/favicon.ico" class="icon bookmark-icon"/>https://numpy.org/doc/stable/</div></div></a></figure></details></li></ul><ul id="2d849135-2fd4-4432-881e-346861b1ac79" class="toggle"><li><details><summary><strong>math</strong></summary><blockquote id="4ae63ce1-138d-4952-a44a-929c00dd8a67" class="">Module natif de python conçue avec des fonctions mathématiques. Il existe aussi c-math pour les nombres complexes. </blockquote><p id="a2abc84b-df98-4000-8b86-6ac99b74c720" class="">Python has a built-in module that you can use for mathematical tasks.</p><p id="be19e9fc-8752-4c09-abea-b789051a9efc" class="">The <code>math</code> module has a set of methods and constants.</p><figure id="6d05c547-0a72-47ed-b9ee-3261af6d15be"><a href="https://www.w3schools.com/python/module_math.asp" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">Python math Module</div><div class="bookmark-description">W3Schools offers free online tutorials, references and exercises in all the major languages of the web. Covering popular subjects like HTML, CSS, JavaScript, Python, SQL, Java, and many, many more.</div></div><div class="bookmark-href"><img src="https://www.w3schools.com/favicon.ico" class="icon bookmark-icon"/>https://www.w3schools.com/python/module_math.asp</div></div><img src="https://www.w3schools.com/images/w3schools_logo_436_2.png" class="bookmark-image"/></a></figure></details></li></ul><ul id="23fb1885-0e19-44a3-9328-963c638970f9" class="toggle"><li><details><summary><strong>random</strong></summary><blockquote id="a647dc18-1380-42dc-a459-451434568cb0" class="">Module natif qui permet de générer des nombres aléatoires, de faire des sélections aléatoires dans une liste, etc. </blockquote><p id="d7212603-ef6f-4c83-b67e-fe4c5a500075" class="">Python has a built-in module that you can use to make random numbers.</p><figure id="01f4ecdd-2d73-4c76-a0cd-a6d53bb23698"><a href="https://www.w3schools.com/python/module_random.asp" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">Python Random Module</div><div class="bookmark-description">Python has a built-in module that you can use to make random numbers.</div></div><div class="bookmark-href"><img src="https://www.w3schools.com/favicon.ico" class="icon bookmark-icon"/>https://www.w3schools.com/python/module_random.asp</div></div><img src="https://www.w3schools.com/images/w3schools_logo_436_2.png" class="bookmark-image"/></a></figure></details></li></ul><ul id="fb1c636e-adcf-4942-b516-54ea03b5542b" class="toggle"><li><details><summary><strong>pandas</strong></summary><figure id="5ca0a42c-4635-47fb-987f-89984e30d926" class="link-to-page"><a href="https://www.notion.so/Pandas-5ca0a42c463547fb987f89984e30d926"><span class="icon">🐼</span>Pandas </a></figure><p id="1e7163e1-b50f-4fa5-9c64-98612bfc9a0a" class="">C’est une bibliothèque dédiée à la manipulation et l&#x27;analyse des données et sa structure de données clé est appelée DataFrame. Les DataFrames vous permettent de stocker et de manipuler des données tabulaires.</p><figure id="b207b85d-ee8f-45a8-ad77-32e9baf6f791"><a href="https://pandas.pydata.org/docs/" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">pandas documentation - pandas 1.5.1 documentation</div><div class="bookmark-description">The reference guide contains a detailed description of the pandas API. The reference describes how the methods work and which parameters can be used. It assumes that you have an understanding of the key concepts.</div></div><div class="bookmark-href"><img src="https://pandas.pydata.org/docs/_static/favicon.ico" class="icon bookmark-icon"/>https://pandas.pydata.org/docs/</div></div></a></figure></details></li></ul><ul id="f5e9e720-276d-41b5-b05f-3622f3828fcf" class="toggle"><li><details><summary><strong>DataFrames</strong></summary><blockquote id="67f25e29-5924-4b7c-87d8-ba36a9323b96" class="">Ce sont des tableaux bidimensionnels spécifiques à Pandas, organisés en colonnes. </blockquote><p id="d5941426-653b-4ec3-a4f3-d907ee8dbd2c" class="">Le data frame est un objet Python permettant de représenter les données sous forme de tableau, où chaque colonne est explicitement nommée. Il reprend les mêmes paradigmes que l’array NumPy : chaque colonne peut naturellement être d’un type différent, mais une colonne ne peut contenir qu’un seul type ! Cette organisation simplifie l’accès aux variables, et permet de nombreuses manipulations de données plus ou moins complexes.</p><p id="c3e43d3c-45c0-49be-af9b-b46e4bbf94dd" class="">Il est assez courant que certaines méthodes appliquées à des data frames retournent des arrays, et qu’on ait besoin de retransformer ces arrays en data frames à postériori. C’est pourquoi il est nécessaire de maîtriser les deux librairies, pour être parfaitement armé avant de plonger dans une analyse de données.</p></details></li></ul><ul id="fd7a9197-113d-4795-a625-c4f899f38707" class="toggle"><li><details><summary><strong>matplotlib</strong></summary><blockquote id="3913eb86-047e-4550-832b-f7ca4c3c1e7a" class="">package pour la représentation graphique de python. Traçage des nuages de points, courbes et surfaces.
Seaborn est concurrente et meilleure que matplotlib. </blockquote></details></li></ul><ul id="92d7b834-d739-4ea9-b7fa-7436592ca4c6" class="toggle"><li><details><summary><strong>statistics</strong></summary><blockquote id="0759c4ee-f3f4-4d9e-9e7a-e71b0afa5391" class="">Module de statistiques.</blockquote></details></li></ul><p id="02e1a6f5-ce55-4d5b-a93d-f3f265d0ac99" class="">
</p><ul id="8b3abfbd-5ef1-4759-a022-59c6f408f949" class="toggle"><li><details><summary><strong>Variable globale</strong></summary><blockquote id="6f6e4f59-90f8-4af7-b7a7-542be2ccea3b" class="">Une variable <span style="border-bottom:0.05em solid">déclarée à la racine d&#x27;un module</span> est visible dans tout ce module. On parle alors de <strong>variable globale</strong>.</blockquote><pre id="4ab9246c-8a70-4542-80f1-a92042e473ff" class="code"><code>&gt;&gt;&gt; x = &quot;hello&quot;
&gt;&gt;&gt; def test():
...     print x
... 
&gt;&gt;&gt; test()
hello</code></pre></details></li></ul><ul id="69b51fdc-92f2-4069-ba04-c4a7486b7105" class="toggle"><li><details><summary><strong>Variable locale</strong></summary><p id="7a69d469-f95a-4c02-b98c-67fbb6aec9f2" class="">Une variable <span style="border-bottom:0.05em solid">déclarée dans une fonction</span> ne sera visible que dans cette fonction. On parle alors de <strong>variable locale</strong>.</p><pre id="bacd5243-a298-485f-b4b4-4cd584ca8325" class="code"><code>&gt;&gt;&gt; x = False
&gt;&gt;&gt; def test():
...     x = &quot;hello&quot;
... 
&gt;&gt;&gt; test()
&gt;&gt;&gt; x
False</code></pre></details></li></ul><ul id="1bab0c12-7637-4060-86df-cadc94418877" class="toggle"><li><details><summary><code>global</code></summary><p id="68e8da64-dab9-470c-b506-5d3503bc5edd" class="">Permet de créer une variable global dans une fonction.
ou
Permet de modifier une variable globale dans une fonction.</p><p id="11a15be2-6127-4422-86a3-d36412c05657" class="">
</p><p id="682241b0-1c83-4c77-8213-db63e068988d" class="">Pour utiliser une variable, on la passe en paramètre</p><pre id="a49e6728-5224-4bf9-8a83-8aafab60dba7" class="code"><code>x = &quot;awesome&quot;

def myfunc():
  global x
  x = &quot;fantastic&quot;

myfunc()

print(&quot;Python is &quot; + x)
&gt;&gt;&gt; Python is fantastic</code></pre><pre id="23a19910-3029-4bd4-8522-f78c6ed8619a" class="code"><code>x = &quot;awesome&quot;

def myfunc():
  x = &quot;fantastic&quot;

myfunc()

print(&quot;Python is &quot; + x)
&gt;&gt;&gt; Python is awesome</code></pre></details></li></ul><ul id="30ea9324-3ca0-4eb2-9a0d-616f51e950c7" class="toggle"><li><details><summary><strong>Fonction built-in</strong></summary><blockquote id="dd4b50e0-9917-49b3-ad86-602206e900fd" class="">Ce sont les fonctions de base de python. Utilisables à tout moment.</blockquote><p id="d69c5162-fb50-4fe1-8db5-6c2201022ac8" class="">Def et liste :</p><figure id="e7e33024-5457-43fb-995a-adec87337ec6"><a href="https://docs.python.org/3/library/functions.html" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">Built-in Functions - Python 3.11.0 documentation</div><div class="bookmark-description">This function drops you into the debugger at the call site. Specifically, it calls , passing and straight through. By default, sys.breakpointhook() calls expecting no arguments. In this case, it is purely a convenience function so you don&#x27;t have to explicitly import or type as much code to enter the debugger.</div></div><div class="bookmark-href"><img src="https://docs.python.org/favicon.ico" class="icon bookmark-icon"/>https://docs.python.org/3/library/functions.html</div></div></a></figure><figure id="2c42df27-6b39-4224-9650-38d11c64af6e"><a href="https://www.w3schools.com/python/python_ref_functions.asp" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">Python Built-in Functions</div><div class="bookmark-description">Python has a set of built-in functions.</div></div><div class="bookmark-href"><img src="https://www.w3schools.com/favicon.ico" class="icon bookmark-icon"/>https://www.w3schools.com/python/python_ref_functions.asp</div></div><img src="https://www.w3schools.com/images/w3schools_logo_436_2.png" class="bookmark-image"/></a></figure></details></li></ul><ul id="3fca4b13-6e10-40cf-839e-9645b1e1552c" class="toggle"><li><details><summary><strong>Splat</strong></summary><p id="9f90e47d-41b3-4f24-b088-72d2006f6842" class="">L&#x27;opérateur splat : <code> * </code> est très souvent utilisé en python.</p><pre id="75f05ccf-1808-42fa-a711-c7d5736c3902" class="code"><code># Liste de paramètre
&gt;&gt;&gt; def augmente_moi(*param):
...     return param[0] + param[1] + param[2]
... 
&gt;&gt;&gt; augmente_moi(1, 2, 3)
6
&gt;&gt;&gt; augmente_moi(10, 20, 30)
60

# Rend un paramètre optionel
&gt;&gt;&gt; def ma_fiche(prenom, nom, *reste):
...     return prenom + &quot; &quot; + nom 
... 
&gt;&gt;&gt; ma_fiche(&quot;olivier&quot;,&quot;engel&quot;)

# Utilise un dictionnaire en paramètre
&gt;&gt;&gt; def ma_fiche(**parametres):
...     return parametres[&quot;prenom&quot;]
...
&gt;&gt;&gt; ma_fiche(prenom=&quot;olivier&quot;)
&#x27;olivier&#x27;

# Pour l&#x27;appel de fonction
&gt;&gt;&gt; data = {&#x27;firstname&#x27;:&#x27;olivier&#x27;, &#x27;lastname&#x27;:&#x27;engel&#x27;}
&gt;&gt;&gt; test(*data)
&#x27;lastname firstname&#x27;
&gt;&gt;&gt; test(**data)
&#x27;olivier engel&#x27;</code></pre></details></li></ul><ul id="47919812-ead9-4c33-b344-eb9f2f3e1673" class="toggle"><li><details><summary><strong>Fichiers</strong></summary><blockquote id="350183f7-6d35-4676-af3c-a596f1cbdc0d" class="">On parle ici des type de fichier manipulable en python : csv, json, xml, </blockquote><h3 id="1da99e62-1a8e-4a8a-8210-a441c376452c" class="">Lire</h3><pre id="a22f39c4-44ca-4f44-9a16-a76836532399" class="code"><code>&gt;&gt;&gt; filin = open(&quot;zoo.txt&quot;, &quot;r&quot;)
&gt;&gt;&gt; filin
&lt;_io.TextIOWrapper name=&#x27;zoo.txt&#x27; mode=&#x27;r&#x27; encoding=&#x27;UTF-8&#x27;&gt;
&gt;&gt;&gt; filin.readlines()
[&#x27;girafe\n&#x27;, &#x27;tigre\n&#x27;, &#x27;singe\n&#x27;, &#x27;souris\n&#x27;]
&gt;&gt;&gt; filin.close()
&gt;&gt;&gt; filin.readlines()
Traceback (most recent call last):
  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
ValueError: I/O operation on closed file.</code></pre><p id="be07e4f9-df86-4273-b4ef-0d0c6f09bed0" class="">Il existe en Python le mot-clé <code>with</code> qui permet d&#x27;ouvrir et de fermer un fichier de manière efficace.
Si pour une raison ou une autre l&#x27;ouverture ou la lecture du fichier conduit à une erreur, l&#x27;utilisation de <code>with</code> garantit la bonne fermeture du fichier, ce qui n&#x27;est pas le cas dans le code précédent. Voici donc le même exemple avec <code>with</code> :</p><pre id="05a83dcc-204c-49f2-9bf0-56801788b94d" class="code"><code>&gt;&gt;&gt; with open(&quot;zoo.txt&quot;, &#x27;r&#x27;) as filin:
...     lignes = filin.readlines()
...     for ligne in lignes:
...         print(ligne)
...
girafe

tigre

# with créé une indentation
# Pas besoin de close()</code></pre><p id="02689b4b-563b-411a-b6cc-f55f2f9eb104" class=""><code>read()</code> renvoie une chaine de caractère unique.</p><p id="45a89724-5031-44c6-9c45-ea484c52bb25" class=""><code>readlines()</code> renvoie une liste composée de chaque ligne.</p><p id="a20c96ea-b71d-4b17-8045-6d83d127dae8" class=""><code>readlines()</code> lit une ligne d&#x27;un fichier et la renvoie sous forme de chaîne de caractères. Associée à la boucle <code>while</code> (ligne <code>!=&#x27;&#x27;</code>), cette méthode permet de lire un fichier ligne par ligne.</p><pre id="abb6955f-33ce-41c4-8244-a1fdadbed766" class="code"><code>&gt;&gt;&gt; with open(&quot;zoo.txt&quot;, &quot;r&quot;) as filin:
...     for ligne in filin:
...         print(ligne)
...
girafe

tigre

singe

souris

&gt;&gt;&gt;</code></pre><p id="3014dc79-d3dc-42cc-b745-2cb9a46f6aa5" class="">Ouvrir plusieurs fichiers</p><pre id="9027371b-65de-437c-80bd-b82829d94c1f" class="code"><code>with open(&quot;zoo.txt&quot;, &quot;r&quot;) as fichier1, open(&quot;zoo2.txt&quot;, &quot;w&quot;) as fichier2:
    for ligne in fichier1:
        fichier2.write(&quot;* &quot; + ligne)</code></pre><h3 id="0c326401-9a18-459d-ad67-0c07892923ff" class="">Ecrire</h3><pre id="43f4d2c3-de7f-4443-9ecd-51ef64144813" class="code"><code>&gt;&gt;&gt; animaux2 = [&quot;poisson&quot;, &quot;abeille&quot;, &quot;chat&quot;]
&gt;&gt;&gt; with open(&quot;zoo2.txt&quot;, &quot;w&quot;) as filout:
...     for animal in animaux2:
...         filout.write(f&quot;{animal}\n&quot;)
...
7 # Nombre d&#x27;octet de poisson
7 # Nombre d&#x27;octet de abeille
4 # ...</code></pre></details></li></ul><ul id="50ba2b35-fc3e-4257-afbc-5db80dd77ff7" class="toggle"><li><details><summary>.<strong>csv</strong></summary><p id="49a247d1-a23a-4bc2-8d19-97c118841e18" class=""><em>Comma-separated values</em>. Format de fichier qui contient des données tabulaire (tableau) séparées par délimiteur (virgule, point-virgule). </p><pre id="274aec85-0217-4ae1-9d17-f509a852af22" class="code"><code>Sexe,Prénom,Année de naissance
M,Alphonse,1932
F,Béatrice,1964
F,Charlotte,1988</code></pre><h3 id="084344bb-539c-4240-9968-77d0fb367ab5" class="">Lire</h3><p id="071b0220-2efe-4a8b-8562-1caae0735085" class=""><span style="border-bottom:0.05em solid">csv</span> : </p><figure id="4de88909-b67c-427a-8ec5-eb1868b2c24b" class="image"><a href="Story%209%20-%20Fichiers%20-%20Fonctions%20-%20Modules%203387092d1bd64f80b145e148ba834fcd/Module_csv.png"><img style="width:687px" src="Story%209%20-%20Fichiers%20-%20Fonctions%20-%20Modules%203387092d1bd64f80b145e148ba834fcd/Module_csv.png"/></a></figure><figure id="01db3288-2f69-4576-ac3e-1e936df4f675" class="image"><a href="Story%209%20-%20Fichiers%20-%20Fonctions%20-%20Modules%203387092d1bd64f80b145e148ba834fcd/mode_csv.png"><img style="width:698px" src="Story%209%20-%20Fichiers%20-%20Fonctions%20-%20Modules%203387092d1bd64f80b145e148ba834fcd/mode_csv.png"/></a></figure><pre id="eb495d78-d621-4be2-b007-f00291c80b0b" class="code"><code>import csv;
f= open (r&quot;C:\Users\HP\Desktop/data.csv&quot;)
myReader = csv.reader(f)
for row in myReader:
print(row)</code></pre><p id="5f995df9-e4fd-4e7f-bdf6-50b62040f4de" class="">Vous pouvez également utiliser <code>DictReader()</code> pour lire les fichiers CSV. Les résultats sont interprétés comme un dictionnaire où la ligne d&#x27;en-tête est la clé et les autres lignes sont des valeurs :</p><pre id="347e9f24-3c48-48a6-bfd1-af49b152a8e5" class="code"><code>import csv
reader = csv.DictReader(open(r&quot;C:\Users\HP\Desktop/data.csv&quot;))
for raw in reader:
print(raw)</code></pre><p id="44cad27b-0582-43c0-aa4d-53d4c0e33767" class=""><span style="border-bottom:0.05em solid">Pandas</span> : La lecture du CSV dans un DataFrame <strong>pandas </strong>est très simple et rapide :</p><pre id="143e26b7-284b-476f-b94f-054bc514b0ea" class="code"><code>import pandas
lire = pandas.read_csv(r&quot;C:\Users\HP\Desktop/data.csv&quot;)
print(lire)

# On ne sélectionne que deux colonnes
sortie = pandas.read_csv(&#x27;résultatt.csv&#x27;, usecols=[&#x27;E-mail&#x27;, &#x27;Nom&#x27;])
print(sortie)</code></pre><h3 id="a73e0dd1-5d12-4cd8-ab5c-0b060e78aa0f" class="">Ecrire</h3><p id="d3000042-e3c2-4d84-b0bd-ed799501b6d5" class=""><span style="border-bottom:0.05em solid">CSV </span>: Vous devez utiliser la fonction <code>writer()</code>. Pour itérer les données sur les lignes, vous devez utiliser la fonction <code>writerow()</code>.</p><pre id="ab391d32-f179-4881-a5fd-c9f913a45587" class="code"><code>import csv
with open(&#x27;data2.csv&#x27;,&#x27;w&#x27;,newline=&#x27;&#x27;) as fichiercsv:
	writer=csv.writer(fichiercsv)
	writer.writerow([&#x27;Nom&#x27;, &#x27;Prénom&#x27;; &#x27;E-mail&#x27;, &#x27;Télephone&#x27;])
	writer.writerow([&#x27;Depond&#x27;, &#x27;Marcel&#x27;, &#x27;Marcel@gmail.com&#x27;, &#x27;1020304050&#x27;])
	writer.writerow([&#x27;Alicat&#x27;, &#x27;Patricia&#x27;, &#x27;Alicatpa@gmail.com&#x27;, &#x27;1224455660&#x27;])</code></pre><p id="49e5e824-cb84-4641-9337-a7632ba591c5" class=""><span style="border-bottom:0.05em solid">Pandas</span> : </p><pre id="5ecdc1e0-3c8a-4f93-8184-bf16b7f92a2a" class="code"><code></code></pre></details></li></ul><ul id="9ecefe81-3c73-4cb1-b202-a80f28f4a696" class="toggle"><li><details><summary>.<strong>xml</strong></summary><p id="cc63f4d7-1c52-49e3-8a67-52f304926e92" class=""><em>Extensible Markup Language</em>.
XML se présente en général comme un texte, séparant deux niveaux : du texte à destination des humains et des balises à destination des machines. La structuration de ce texte par les balises produit un modèle
 informatique. D&#x27;un point de vue formel, un document XML est un arbre, articulant différents types de nœuds (texte, éléments, attributs, commentaires…).</p><pre id="83c98146-7a3d-449d-997d-bdc4e7c91208" class="code"><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;?xml-stylesheet href=&quot;transformation.xsl&quot; type=&quot;text/xsl&quot;?&gt;
&lt;?mode ecran?&gt;
&lt;?instruction pour le traitement?&gt;
&lt;!-- Commentaire --&gt;
&lt;ex:collection
    xml:lang=&quot;fr&quot;
    xmlns:dc=&quot;http://purl.org/dc/elements/1.1/&quot;
&gt;
    &lt;élément&gt;Texte&lt;/élément&gt;
    &lt;dc:title&gt;Astérix le Gaulois&lt;/dc:title&gt;
    &lt;ex:livre attribut=&quot;valeur&quot; type=&quot;BD&quot;&gt;
        &lt;dc:title&gt;Astérix chez les Belges&lt;/dc:title&gt;
        &lt;!-- élément répété --&gt;
        &lt;dc:creator&gt;René Goscinny&lt;/dc:creator&gt;
        &lt;dc:creator&gt;Albert Uderzo&lt;/dc:creator&gt;
        &lt;dc:description&gt;
            &lt;b&gt;Astérix chez les Belges&lt;/b&gt; est un album de 
&lt;a href=&quot;http://fr.wikipedia.org/wiki/Bande_dessinée&quot;&gt;bande dessinée&lt;/a&gt; de la
série Astérix le Gaulois créée par René Goscinny et Albert Uderzo.
&lt;br /&gt;&lt;!-- élément vide --&gt;
            Cet album publié en 1979 est le dernier de la série écrite par René 
Goscinny.
        &lt;/dc:description&gt;
    &lt;/ex:livre&gt;
&lt;/ex:collection&gt;</code></pre><p id="098ffd45-6bff-4eba-a057-4d9df6d5e8bb" class="">
</p></details></li></ul><ul id="1fe76f2c-b144-4882-891f-46379cc5a36b" class="toggle"><li><details><summary>.<strong>json</strong></summary><p id="1e26cdb8-f694-4562-b307-e37921cdda6b" class=""><em>JavaScript Object Notation</em>.
Il s&#x27;agit d&#x27;une représentation des données sous forme d&#x27;objet JavaScript.</p><p id="3b78a0a4-02d4-4a66-843e-fc688daa99af" class="">Version simplifié de xml.</p><pre id="8da6d5ae-c7df-4603-900c-9924ed985ab1" class="code"><code>{
    &quot;Membre1&quot;: {
        &quot;posts&quot;: 6230,
        &quot;inscription&quot;: &quot;22/08/2003&quot;
    },

    &quot;Membre2&quot;: {
        &quot;posts&quot;: 200,
        &quot;inscription&quot;: &quot;04/06/2011&quot;
     }
}</code></pre></details></li></ul><p id="d2127e02-1e25-4edc-9866-1cde2fa795ff" class="">
</p><figure id="5ca0a42c-4635-47fb-987f-89984e30d926" class="link-to-page"><a href="https://www.notion.so/Pandas-5ca0a42c463547fb987f89984e30d926"><span class="icon">🐼</span>Pandas </a></figure><p id="0dbc3641-c606-452b-83b4-e55672ab3fec" class="">
</p><h1 id="ea7ffe40-b138-426c-9985-7de898b13660" class="block-color-orange_background">Problématiques </h1><p id="237fcaef-975d-4cd3-bad3-cf16d969c1ec" class=""><mark class="highlight-blue">Comment manipuler les différents types de fichier à l’aide des modules de python ? </mark></p><h1 id="39f391d1-a549-4890-9c59-a0b90c717b1e" class="block-color-orange_background">Hypothèses </h1><p id="386db2b3-957e-43e4-a613-ee8a4f56fe3e" class=""><mark class="highlight-blue"><em>Les modules peuvent contenir de nouveaux objets. </em></mark></p><p id="68ce5fbe-1d34-4d5b-8177-230b24cf2d80" class="">Vrai </p><p id="9a7d4a99-d913-429b-8f8d-cbdfb332b02e" class=""><mark class="highlight-blue"><em>Un module est un objet.</em></mark></p><p id="eae77b97-b4b3-4784-95ec-d73d3945aa44" class="">Faux</p><p id="7610be10-24c7-4104-a8ae-6f16788632e7" class=""><mark class="highlight-blue"><em>Pandas ne permet pas de traiter tout type de fichier.</em></mark></p><p id="06b682d6-d47b-47c1-8d8a-af0abcf3d9a9" class="">Vrai. html, csv, xls, sql, xm, json principalement.</p><p id="61b87a22-cdca-499e-bac7-b9f4a03c8ddb" class=""><mark class="highlight-blue"><em>Pour utiliser un module, il faut l’installer avant.</em></mark></p><p id="4d8edd9b-6982-49eb-9349-569f87954798" class="">Oui, sauf si il est natif (built-in) ou sur anaconda.</p><h1 id="29d0824c-46e0-4d66-87f8-cbdaee538e78" class="block-color-orange_background">Action</h1><h2 id="1ab27a5a-e896-43a5-aaf4-e727d5b056f5" class="">Ressources</h2><p id="a258f319-9dd5-4bc7-87b4-c739d08797e7" class=""><a href="https://python.sdv.univ-paris-diderot.fr/07_fichiers/">https://python.sdv.univ-paris-diderot.fr/07_fichiers/</a></p><p id="d920c411-285d-42c7-b45a-e7749a8ade4b" class=""><a href="https://www.cours-gratuit.com/tutoriel-python/tutoriel-python-comment-importer-lire-et-modifier-un-fichier-csv-en-python">https://www.cours-gratuit.com/tutoriel-python/tutoriel-python-comment-importer-lire-et-modifier-un-fichier-csv-en-python</a></p><p id="dd889edc-3be0-47c8-8f99-e3bf774a3aab" class=""><a href="https://python.doctor/page-apprendre-creer-fonction-en-python">https://python.doctor/page-apprendre-creer-fonction-en-python</a></p><p id="2df9df03-14e6-4e9e-b8c3-0dc4e254c7fb" class=""><a href="https://www.youtube.com/watch?v=v7OTVy6whEY">https://www.youtube.com/watch?v=v7OTVy6whEY</a></p><p id="9dccad21-5826-4749-bb08-49eb48857df6" class=""><a href="https://www.youtube.com/watch?v=mSh4h-J0z1c">https://www.youtube.com/watch?v=mSh4h-J0z1c</a></p><p id="75b264f0-480f-4e47-bcea-ab3662a56e07" class=""><a href="https://www.youtube.com/watch?v=zZkNOdBWgFQ">https://www.youtube.com/watch?v=zZkNOdBWgFQ</a></p><p id="0833744a-c465-4f0e-96c6-20a46ed9a83c" class="">
</p><p id="4467cf00-5bde-4df3-aedb-35438c089c2b" class="">Autre</p><figure id="75dacea6-b9f4-4104-9ad1-759b9a200d6a"><a href="https://python.sdv.univ-paris-diderot.fr/07_fichiers/" class="bookmark source"><div class="bookmark-info"><div class="bookmark-text"><div class="bookmark-title">7. Fichiers - Cours de Python</div><div class="bookmark-description">Une grande partie de l&#x27;information en biologie est stockée sous forme de texte dans des fichiers. Pour traiter cette information, vous devez le plus souvent lire ou écrire dans un ou plusieurs fichiers. Python possède pour cela de nombreux outils qui vous simplifient la vie.</div></div><div class="bookmark-href"><img src="https://python.sdv.univ-paris-diderot.fr/assets/images/favicon.png" class="icon bookmark-icon"/>https://python.sdv.univ-paris-diderot.fr/07_fichiers/</div></div></a></figure><p id="e8970de8-6fa1-4f4a-bfa8-887ed77313cc" class="">
</p><h2 id="0b5ac6eb-57fc-47d1-a9dd-2b6596345075" class="block-color-orange_background">Objectifs</h2><p id="a30fdbbe-1eb0-40ee-aa82-57361b622ca3" class="">Comprendre les différentes notions ainsi que les DataFrames, et pouvoir travailler avec des fichiers <code>.csv</code> et la bibliothèque pandas.</p></div></article>


<?php 
    $content = ob_get_clean(); 

    require_once('structure/layout.php');
?>
