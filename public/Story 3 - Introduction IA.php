<?php $title = "Introduction à l'IA part 1"; ?>
<?php ob_start(); ?>

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
	
</style></head><article id="31603f2a-0423-4d61-a18a-89fb74cc6a7c" class="page sans"><header><img class="page-cover-image" src="https://www.notion.so/images/page-cover/webb3.jpg" style="object-position:center 50%"/><h1 class="page-title">Story 3 - <strong>Introduction IA</strong></h1></header><div class="page-body"><h1 id="20bfb1b8-6b35-4c3c-9e3b-93b18fcd706d" class="block-color-orange_background">Contexte</h1><p id="0085507d-a542-4122-90ae-e7d90e4ff4a4" class="">Toute entreprise a une large marée de données qui peut être considérée comme une source abondante, vitale et nécessaire pour sa survie. Nous pouvons avec une préparation adéquate utiliser de nouvelles méthodes et différentes applications de l&#x27;IA pour diriger les données brutes ou les images vers des informations significatives, ou directement vers des connaissances (modèles) pour aider les gestionnaires à prendre une décision.</p><h1 id="7c3f29b9-1be7-4a08-8e8e-31f8d646db27" class="block-color-orange_background">Mots clés</h1><ul id="58fce20a-9f57-476b-b15a-5bd39990cea5" class="toggle"><li><details><summary><strong>Intelligence</strong></summary><blockquote id="86431b35-ecab-4f74-aa2c-03feb44fc7c3" class="">C’est la capacité <strong>d’apprendre </strong>ou de <strong>s’adapter </strong>à des situations nouvelles. 
<mark class="highlight-teal">Les capacités cognitives sont les processus que l’humain utilise pour </mark><strong><mark class="highlight-teal">reconnaître</mark></strong><mark class="highlight-teal">, </mark><strong><mark class="highlight-teal">raisonner </mark></strong><mark class="highlight-teal">et </mark><strong><mark class="highlight-teal">s’adapter </mark></strong><mark class="highlight-teal">son environnement.</mark></blockquote><p id="4b00533e-5e08-4b0d-bd77-5c332648bf04" class="">
</p><p id="ddb27b8d-997a-49a0-8eca-96f17e64816e" class="">L&#x27;intelligence est l&#x27;ensemble des processus retrouvés dans des systèmes, plus ou moins complexes, vivants ou non, qui permettent de comprendre, d&#x27;apprendre ou de s&#x27;adapter à des situations nouvelles.
L&#x27;intelligence peut être également perçue comme la capacité à traiter l&#x27;information pour atteindre des objectifs.
L&#x27;intelligence reste un concept encore mal défini sur le plan scientifique.</p><p id="5820dc63-4ba6-48b5-a8c2-65388fed52b3" class="">Il existe plusieurs sorte d’intelligence dont l’intelligence émotionnelle, l’empathie, l’intelligence artistique.</p></details></li></ul><ul id="c95b9916-7ea6-42e9-8a7d-ba6e585dc478" class="toggle"><li><details><summary><strong>Intelligence artificielle</strong></summary><blockquote id="d021a855-86a4-46c3-8a61-c9ccf04e070e" class="">Ensemble de théorie et de techniques (programme) capable de simuler l’intelligence humaine (capacité de raisonnement, de communication, de déduction, de perception). Elle pour cela capable de traiter un très grand nombre de données <del>et même dépasser les capacités humaines dans certains cas.</del>  → Une calculatrice est-elle plus intelligente qu’un homme ?</blockquote><p id="eb9d2fa1-1b68-4bb5-8b7e-86c17216f502" class="">
</p><ul id="bd7338b8-b704-47ab-a5c9-6df953cf8c44" class="bulleted-list"><li style="list-style-type:disc"><mark class="highlight-blue">Ensemble de théorie et de techniques mises en œuvre en vue de réaliser des machines capables de simuler l’intelligence.</mark></li></ul><ul id="12b41898-aea6-4bff-9b12-bf15cf7a935a" class="bulleted-list"><li style="list-style-type:disc"><mark class="highlight-blue">Caractérise l’élaboration de programmes informatiques capables de prendre en charge des tâches habituellement effectuées par des humains car demandant un apprentissage, une organisation de la mémoire et un raisonnement. L’objectif est de parvenir à transmettre à une machine des fonctions propres au vivant : rationalité, raisonnement, mémoire et perception. </mark></li></ul><ul id="67a484c7-c201-4379-8f3c-0e74b961d915" class="bulleted-list"><li style="list-style-type:disc"><mark class="highlight-blue">La construction de programmes informatiques qui s’adonnent à des tâches qui sont, pour l’instant, accomplies de façon plus satisfaisante par des êtres humains car elles demandent des processus mentaux de haut niveau tels que : l’apprentissage perceptuel, l’organisation de la mémoire et le raisonnement critique.</mark></li></ul><ul id="af997147-656c-486f-8503-da9d3f7d68df" class="bulleted-list"><li style="list-style-type:disc">L’ensemble des théories et des techniques mises en œuvre en vue de réaliser des machines capables de simuler l&#x27;intelligence<em>.</em><mark class="highlight-blue">
</mark></li></ul></details></li></ul><p id="b7f24a44-5ee0-4f08-ab42-67132fd208a6" class="">
</p><ul id="f6938164-9dea-4c25-b73f-31c8086ddae6" class="toggle"><li><details><summary><strong>Modèle</strong></summary><blockquote id="b3431d5c-7cf0-432e-8bc4-27ac8f6758da" class="">Fichier qui a fait l’objet d’un traitement IA préalable (soumis à une base d’apprentissage) et qui peut être utilisé pour automatiser certaines tâches.</blockquote><p id="a31b15d1-bbaf-4d19-8bac-a5202441eb43" class="">Le modèle d&#x27;IA est la construction mathématique générant une déduction ou une prédiction à partir de <a href="https://www.cnil.fr/fr/definition/donnee-dentree">données d’entrée</a>. Le modèle est estimé à partir de données annotées lors de la phase d’apprentissage (ou d’<a href="https://www.cnil.fr/fr/definition/entrainement-ou-apprentissage">entraînement</a>) du système d’IA.</p></details></li></ul><ul id="82b33746-4e53-4d4a-8bbe-2e1ba754fb72" class="toggle"><li><details><summary><strong>Système expert</strong></summary><blockquote id="4f95fe81-425c-45de-9c83-1c8de0fd23f0" class="">Programme capable de se comporter comme un humain sur une tâche donnée.</blockquote><p id="b05d6458-2450-4c2f-9c64-ed4c08ca071f" class="">Ordinateur capable de se comporter comme un expert (humain), mais dans un domaine bien précis.</p></details></li></ul><ul id="f40b2629-1648-4326-8183-07f50ad6f4bb" class="toggle"><li><details><summary><strong>Réseau de neurones</strong></summary><blockquote id="08f9b1e0-aeec-4e50-aa58-51e7a8715be5" class="">Modèle dont la structure est identique au réseau de neurone du cerveau humain pour apprendre et reconnaitre. 
Utilisé en deep learning mais pas que, il s’agit d’un concept.
Ils sont efficaces dans la modélisation des problèmes complexes et non linéaires. </blockquote><p id="bdb1b1e4-5009-4e02-81ef-3ccc0b7a9ab7" class="">
</p><p id="3bd68203-9251-4cbb-b8fe-2740184dc324" class="">Un réseau de neurones artificiels, ou réseau neuronal artificiel, est un système dont la conception est à l&#x27;origine schématiquement inspirée du fonctionnement des <a href="https://fr.wikipedia.org/wiki/Neurone">neurones</a>
 biologiques, et qui par la suite s&#x27;est rapproché des méthodes statistiques.</p><p id="c4acffb2-29ee-49b8-8277-58c0e2f8974d" class="">
</p><p id="aef630cf-8e7e-4484-8002-ebe5b98b287b" class="">Un réseau de neurones est un modèle informatique dont la structure en couches est similaire à la structure en réseau des neurones du cerveau, avec des couches de nœuds connectés. Un réseau de neurones peut apprendre à partie de données ; il peut ainsi être entraîné à reconnaître des tendances, classer des données et prévoir des événements à venir.</p><p id="22375a3d-7a60-46db-86fa-b0f05aaa09eb" class="">Un réseau de neurones décompose vos données en couches d&#x27;abstraction. Il peut être entraîné sur de nombreux exemples en vue de reconnaître des modèles au niveau de la parole ou des images, par exemple, à l&#x27;instar du cerveau humain. Son comportement est défini par la façon dont ses éléments individuels sont reliés et par la solidité (ou poids) de ces liaisons. Ces poids sont automatiquement ajustés au cours de l&#x27;entraînement selon une règle d&#x27;apprentissage spécifiée jusqu&#x27;à ce que le réseau de neurones exécute correctement la tâche souhaitée.</p><p id="e4681e07-995e-4f85-80d0-970ec7ee2e67" class="">Les réseaux de neurones sont particulièrement bien adaptés à <a href="https://fr.mathworks.com/discovery/pattern-recognition.html">la reconnaissance de formes</a> pour identifier et classer des objets ou des signaux dans les systèmes de la parole, de la vision et du contrôle. Ils peuvent également être utilisés pour la prédiction et la modélisation de séries chronologiques.
</p></details></li></ul><p id="8fcca57b-19aa-4e51-b558-2516a801e882" class="">
</p><ul id="ede247bb-b90c-482a-a0a9-d0392bb24037" class="toggle"><li><details><summary><strong>Machine learning (apprentissage automatique)</strong></summary><blockquote id="2d511df0-5fa0-4214-be4d-5478b4904a15" class="">Technologie qui utilise des données pour apprendre seul et inférer des modèles d’application optimaux dans un domaine spécifique. </blockquote><p id="097a817b-f0bd-42d6-882c-99144e45b2e1" class="">
</p><p id="ef5cb647-69a7-4658-bcbf-762415fcb6de" class="">C’est la technologie la plus ancienne et la plus simple. Elle s’appuie sur un algorithme qui adapte lui-même le système à partir des retours faits par l’humain. La mise en place de cette technologie implique l’existence de données organisées. Le système est ensuite alimenté par des données structurées et catégorisées lui permettant de comprendre comment classer de nouvelles données similaires. En fonction de ce classement, le système exécute ensuite les actions programmées. Il sait par exemple identifier si une photo montre un chien ou un chat et classer le document dans le dossier correspondant.
Après une première phase d’utilisation, l’algorithme est optimisé à partir des feedbacks du développeur, qui informent le système des classifications erronées et lui indiquent les bonnes catégories.</p><p id="ad853017-f243-4687-8c89-b38e76de4fdb" class="">Le Machine learning fonctionne à partir d’une base de données contrôlable, le <strong>Deep learning a besoin d’un volume de données bien plus considérable.</strong>
Le système doit disposer de plus de 100 millions d’entrées pour donner des résultats fiables.</p><p id="72a48ea5-77ba-49ac-8cbc-a90edb625a8c" class="">
</p><p id="0b35f1f9-8581-44dc-8fb8-584beab4138d" class="">On donne aux ordinateurs l’accès à des données, puis on les laisse apprendre par eux-mêmes, sans intervention humaine ou reprogrammation logicielle. Ce qui leur permet de s’améliorer progressivement, de manière autonome. Et de dépasser ainsi les fonctions et les capacités initialement programmées. Certains algorithmes ne se contentent plus de reconnaître des images, mais se montrent capables de les produire et de donner des yeux aux machines.</p><p id="21c9f4d1-7203-4282-b55d-29ca9c39bce2" class="">
</p><p id="c6a9dd3d-d10a-4273-a24c-195d811670b8" class="">le machine learning est un modèle d’intelligence artificielle qui apprend seul grâce à l’analyse d’un jeu de données. Pour cela, il utilise <strong>des procédés automatiques issus des statistiques et des probabilités</strong>. Son objectif ? Aider les humains à exploiter des volumes de données inenvisageables et leur faire gagner du temps dans des activités à faible valeur ajoutée. Par exemple : <a href="https://experiences.microsoft.fr/business/intelligence-artificielle-ia-business/intelligence-artificielle-medecine/">examiner des images médicales</a>, segmenter une base de clients en marketing ou évaluer la probabilité <a href="https://experiences.microsoft.fr/business/cloud-infra-business/maintenance-predictive-secteur-industriel/">qu’une machine tombe en panne</a>.</p><p id="4cdcae8c-ece8-47f8-a93d-7d4e575a91e7" class="">
Le Machine Learning utilise l’apprentissage supervisé ou non-supervisé.</p></details></li></ul><ul id="ccf3da15-f91f-4a03-853d-2e69b41e5b1e" class="toggle"><li><details><summary><strong>Deep learning (apprentissage profond)</strong></summary><blockquote id="e3d4f018-b3b8-4867-b609-c5997c0f2e68" class="">Le Deep learning est une technologie inclue dans le machine learning. Technologie qui n’a pas besoin de données structurées et qui utilise<strong> </strong>des réseaux de neurones <strong>multicouches </strong>pour apprendre et catégoriser de manière autonome les données.
La profondeur est lié aux couches cachées de ses réseaux neuronaux.</blockquote><p id="d19b2499-7574-4a66-919d-e99ce77297c2" class="">
</p><p id="c6da52bd-ef8a-48af-9904-d5bb2fd90275" class="">C’est une sous-catégorie du Machine Learning. Le Deep learning (apprentissage profond) n’a pas besoin de données structurées. Le système fonctionne à partir de plusieurs couches de <a href="https://www.ionos.fr/digitalguide/web-marketing/search-engine-marketing/quest-ce-quun-reseau-neuronal-artificiel/">réseaux neuronaux</a>, qui combinent différents algorithmes en s’inspirant du cerveau humain. Ainsi, le système est capable de travailler à partir de données non structurées.</p><p id="b940233e-081b-4262-9187-339520e2b6fc" class="">Cette approche est particulièrement adaptée pour les tâches complexes, lorsque tous les aspects des objets à traiter ne peuvent pas être catégorisés en amont. Le système du Deep learning identifie lui-même les caractéristiques discriminantes.</p><p id="a37c4e4c-0719-4dc7-b6b1-7c53a3c22a3f" class="">Important : avec <strong>le Deep learning, le système identifie lui-même les caractéristiques discriminantes des données</strong>, sans avoir besoin d’une catégorisation préalable. Le système n’a pas besoin d’être entraîné par un développeur. Il évalue lui-même le besoin 
de modifier le classement ou de créer des catégories inédites en fonction des nouvelles données.</p><p id="d2cab58b-a994-40f6-bc3c-47e2f871b1fa" class="">Concrètement, toutes les tâches accomplies à l’aide du Machine learning peuvent être résolues avec le Deep learning. Il ne faut donc pas nécessairement opposer apprentissage profond et automatique.</p><p id="1554a558-ab41-407c-8000-901ab45805f5" class="">Le <strong>Deep learning mobilise beaucoup plus de ressources </strong>et n’est donc pas un processus efficient. Les champs d’application des deux technologies sont donc en principe bien délimités : toute tâche que le Machine learning peut exécuter doit être traitée par cette même technique.</p><p id="9fd512f1-186e-4afd-95f4-25107de3ba73" class="">
</p><p id="15882241-ac9e-4036-b760-958ca049b510" class="">Il repose sur un réseau de neurones artificiels, qui imitent le fonctionnement de notre cerveau. Et ce système crée une machine virtuelle composée de milliers d’unités, chacune chargée de petits calculs simples.</p></details></li></ul><p id="8c32af06-1c2f-47c6-9dd9-8fd6d3f9badb" class="">
</p><ul id="75603e49-50b5-451f-95d7-3a08f20aa202" class="toggle"><li><details><summary><a href="https://experiences.microsoft.fr/articles/intelligence-artificielle/apprentissage-supervise-et-non-supervise-quelles-differences/"><strong>Apprentissage supervisé</strong></a></summary><blockquote id="6158ab79-6e6c-45ad-b2fe-fdce253ccc33" class="">L’algorithme utilise un très grand jeu de données étiquetées (on lui dit les donne les réponses qu’on attend) soit pour classer un objet dans un catégorie spécifiée (classification), ou attribuer une valeur à un objet (régression).</blockquote><p id="dd1e5a4e-15a8-4abe-b79c-85f4ab5f6e47" class="">
</p><p id="43eaae85-d26c-4f39-b38a-6b35008de5d9" class="">Dans le cadre du machine learning. Il s’agit de deux sous-catégories (avec l’apprentissage non supervisé) qui permettent de résoudre des problèmes. Par exemple, on « nourrit » un programme avec des milliers de photos de voitures, étiquetées. Après cet « entrainement », le programme peut reconnaître, seul, des voitures de tous types sur les nouvelles images qui lui seront présentées.</p><p id="78f5e25a-f1b5-4f81-9b6f-aaa2b8de8895" class="">
</p><p id="382d34c6-96bd-49ed-9962-dbc329da1bba" class="">Qu’il s’agisse des types d’apprentissage supervisé ou non supervisé, <strong>tout part d’un jeu de données très important</strong>. Et quand on dit « très important », cela peut signifier jusqu’à 
plusieurs millions d’images pour la base ImageNet. C’est à partir de cette base que l’algorithme peut apprendre.  Mais <strong>dans le cadre de l’apprentissage supervisé, la machine connaît déjà les réponses qu’on attend d’elle</strong>. Elle travaille à partir de données étiquetées.</p><p id="e6c3b9e8-0a73-49f6-b447-65f3bd77ba3a" class="">
</p><p id="eceecb01-e640-48b3-9728-ef68570a5f83" class="">Cette méthode permet de réaliser <strong>deux types de tâches</strong> :</p><ul id="b358684d-5d6e-4f4c-94a4-00187418c5df" class="bulleted-list"><li style="list-style-type:disc">Des tâches de classification : Ces tâches consistent à <strong>attribuer une classe à des objets</strong>.</li></ul><ul id="d8203b66-7dd8-4b4f-b24e-74d6f74ac631" class="bulleted-list"><li style="list-style-type:disc">Des tâches de régression : Ici, on n’attribue pas une classe mais <strong>une valeur mathématique</strong> : un pourcentage ou une valeur absolue.</li></ul></details></li></ul><ul id="ab3ea2f6-52fd-47cc-b6de-0b283279b697" class="toggle"><li><details><summary><a href="https://experiences.microsoft.fr/articles/intelligence-artificielle/apprentissage-supervise-et-non-supervise-quelles-differences/"><strong>Apprentissage non-supervisé</strong></a></summary><blockquote id="5437112a-b544-4c33-bc1d-12be0d366b7f" class="">Programme qui utilise un très grand jeu de données non étiquetées et créé ses propres réponses grâce au <strong>clustering </strong>(Comme la classification mais les classes sont inventées par le programme) ou au <strong>filtrage collaboratif</strong> (recommandation).</blockquote><p id="8f1ede85-434a-40a7-b49d-ca536fdc2d5f" class="">
</p><p id="6d6f264b-3851-43be-8ab5-76a881f11005" class="">Dans le cadre du machine learning. Il s’agit de deux sous-catégories qui permettent de résoudre des problèmes.</p><p id="ee34f571-20e4-4982-a057-ad06d335bfb2" class="">
</p><p id="c38a971d-aaeb-4d14-8481-299c53bd8a93" class="">La différence par rapport à l’apprentissage supervisé lorsqu’on parle du type d’apprentissage non-supervisé, c’est que <strong>les réponses que l’on cherche à prédire ne sont pas disponibles dans les jeux de données</strong>. Ici, l’algorithme utilise un jeu de données non étiquetées. On demande alors à la machine de créer ses propres réponses. Elle propose ainsi des réponses à partir d’analyses et de groupement de données.</p><ul id="f24640f3-43ab-4106-a605-f2d0f076c2fd" class="bulleted-list"><li style="list-style-type:disc">Des tâches de clustering : Ici, on demande à la machine de grouper des objets dans des ensembles de données les plus homogènes possible. Cette technique peut sembler proche de celle de la classification dans l’apprentissage supervisé, mais à la différence de cette dernière, les classes ne sont pas pré-remplies par un humain, 
c’est la machine qui “invente” ses propres classes, à un niveau de finesse pas toujours évident pour un humain. Une technique très utile dans le marketing pour <strong>faire de la segmentation client</strong> notamment.</li></ul><ul id="57528069-b2b0-4184-95d5-3915d11026c6" class="bulleted-list"><li style="list-style-type:disc">Des tâches de filtrage collaboratif : ici l’objectif est toujours de <strong>personnaliser une expérience client</strong>. C’est une technique utilisée par de très nombreuses plateformes, telles que Netflix, Spotify, etc. Leurs algorithmes étudient ce que vous avez 
regardé, aimé, mais aussi ce que des profils similaires au vôtre ont apprécié, pour vous faire des recommandations automatiques. Le modèle s’appuie sur des facteurs implicites inconscients (ce que l’utilisateur a fait), plutôt que des facteurs explicites (des critères remplis par l’utilisateur).</li></ul></details></li></ul><ul id="e5239118-3ee3-4fba-8cc3-43c7e5665b0a" class="toggle"><li><details><summary><strong>Apprentissage semi-supervisé</strong></summary><p id="17e520eb-1abe-4da3-a4b3-357c5a697b2a" class="">Cet algorithme utilise une petite quantité de données étiquetées comme le machine learning supervisé et une plus grande quantité de données non étiquetées comme le machine learning non supervisé pour entraîner les algorithmes. Les données étiquetées peuvent être utilisées pour entraîner partiellement l’algorithme de machine learning, et cet algorithme partiellement entraîné trouve également des informations de manière organique.</p></details></li></ul><ul id="6a4b720c-31a9-403f-b6ad-bfc885712d00" class="toggle"><li><details><summary><strong>Apprentissage renforcé (reinforcement learning)</strong></summary><blockquote id="10594288-db3b-4e38-9197-8f810fb20d46" class="">Le programme apprend par expérience en optimisant une récompense dans le temps. </blockquote><p id="68ca4338-69a3-4f08-b790-fdde69ee9b2e" class="">Ici, la machine peut se montrer encore plus créative, car elle peut élaborer ses propres stratégies et s’adapter dans le temps et dans son environnement pour réaliser des tâches données. Elle élabore des réponses complexes. L’algorithme devient un agent autonome, 
dont l’objectif est de réaliser une action au sein d’un environnement. S’il y parvient selon les critères établis par le développeur, il est récompensé. À lui d’élaborer la suite d’actions qui lui permet d’atteindre son objectif.</p><p id="af2d4634-467e-4098-a4f9-df5a0c43f75c" class="">C’est cette méthode qui sera exploitée pour construire les algorithmes des voitures autonomes par exemple. Mais c’est aussi comme cela qu’on peut entraîner des machines capables de jouer à des jeux de stratégie.</p><p id="7bccdb55-c61a-4b60-a47e-310f641f02ef" class="">L&#x27;apprentissage par renforcement consiste, pour un agent autonome (ex. : robot), à apprendre les actions à prendre, à partir d&#x27;expériences, de façon à optimiser une récompense quantitative au cours du temps.</p></details></li></ul><p id="bad1cbcd-3052-4b6a-9bea-8dc817727d48" class="">
</p><ul id="44c551fc-8182-4ec4-8ac9-bf18d817ac02" class="toggle"><li><details><summary><strong>Data mining</strong></summary><blockquote id="da49c8b9-d649-4d43-b0a7-c92a11f621b9" class="">Technique IA - Il s’agit d’extraire une connaissance (lien entre plusieurs informations - modèle - patterns) à partir d’une grande quantité de données.</blockquote><p id="7ac61637-6397-47bb-9abc-d06c0bf14bd3" class="">
</p><p id="cef96bce-0e0f-471a-b785-5e8993d02b5b" class="">L’<strong>exploration de données</strong>, connue aussi sous l&#x27;expression de <strong>fouille de données</strong>, <em><strong>data mining</strong></em>, ou encore <strong>extraction de </strong><a href="https://fr.wikipedia.org/wiki/Connaissance"><strong>connaissances</strong></a><strong> à partir de données</strong>, a pour objet l’extraction d&#x27;un savoir ou d&#x27;une connaissance à partir de grandes quantités de données, par des méthodes automatiques ou semi-automatiques.</p><p id="2a38452a-1025-4023-8c24-d78627ae198d" class="">Elle se propose d&#x27;utiliser un ensemble d&#x27;algorithmes issus de disciplines scientifiques diverses telles que les statistiques, l&#x27;intelligence artificielle ou l&#x27;informatique, pour construire des modèles à partir des données, c&#x27;est-à-dire trouver des structures intéressantes ou des motifs selon des critères fixés au préalable, et d&#x27;en extraire un maximum de connaissances.</p></details></li></ul><ul id="0bc5a9e1-df2c-4bf5-9293-87c9698c4b5b" class="toggle"><li><details><summary><strong>Classification</strong></summary><blockquote id="ab35701e-5893-49a7-8bce-2161f75bdd0b" class="">Technique de machine learning supervisée qui permet de classer des objets dans des classes(labels/groupe) prédéfinies. 
→ 2 classes ou plus.</blockquote><p id="aca42e07-59e4-437b-be69-7f79218f626c" class="">La classification est un type de Machine Learning supervisé dans lequel un algorithme « apprend » à classifier de nouvelles observations à partir d&#x27;exemples de données étiquetées.</p></details></li></ul><ul id="7f63d876-02af-45ce-a406-bec9544bf7b5" class="toggle"><li><details><summary><strong>Régression linéaire</strong></summary><blockquote id="d8a85478-b4bb-4a46-80fc-18c7d2b2bf42" class="">Technique de machine learning supervisée qui permet de prédire une valeur réelle/continue à partir des entrées.
→ La régression logistique est une classification.</blockquote><p id="509cadb1-512f-418f-9a1c-fcdf9fc0368e" class="">
Les modèles de régression décrivent la relation entre une variable réponse (sortie) et une ou plusieurs variables prédictives (entrée).</p></details></li></ul><ul id="e0a7a37a-36f8-4e9b-ae6e-8d941c69a539" class="toggle"><li><details><summary><strong>Clustering</strong></summary><blockquote id="cd446136-52cc-43b3-98fb-6a4a0f78935d" class="">Technique permettant grâce à l’apprentissage non supervisé de trouver des modèles ou des groupements dans les données</blockquote><p id="3571ce4f-0007-4400-b05d-9d0cb2385459" class="">Le clustering est une approche d&#x27;apprentissage non supervisée dans laquelle les réseaux de neurones peuvent être utilisés pour effectuer une analyse exploratoire des données afin de trouver des modèles cachés ou des regroupements dans les données. Ce processus implique de grouper les données par similarité. L&#x27;analyse de séquence génomique, l&#x27;étude de marché et la reconnaissance d&#x27;objets sont des exemples d&#x27;applications <a href="https://fr.mathworks.com/discovery/unsupervised-learning.html">d&#x27;analyse de cluster.</a></p></details></li></ul><p id="0022e41a-af4e-4395-bb36-d711bd441f1e" class="">
</p><ul id="c3ffa015-e76a-4cd1-80a2-3e75c2eb04e2" class="toggle"><li><details><summary><strong>IoT (Internet of Things) internet des objet</strong></summary><blockquote id="744de753-ef03-44ad-9dc1-43d118840c3f" class="">Réseau d’objets connectés qui communique sans interaction humaine.</blockquote></details></li></ul><ul id="febe52c1-a26a-4555-90d3-53355795a213" class="toggle"><li><details><summary><strong>Éthique</strong></summary><p id="02ad52e2-d6c1-410c-8e1f-115e1c247cdc" class="">L&#x27;<strong>éthique</strong> est une discipline philosophique portant sur les jugements moraux et dont le concept est donc très proche de celui de la morale. C&#x27;est une réflexion fondamentale de tout peuple afin d&#x27;établir ses normes, ses limites et ses devoirs. Dans les pays laïcs, l&#x27;éthique est étroitement liée à la philosophie politique qui la sous tend, mais elle peut aussi être liée à la culture, la religion, les croyances et les traditions d&#x27;un pays, d&#x27;un groupe social, ou d&#x27;un système idéologique.</p><blockquote id="c6805300-067c-4702-9c9f-e0c7891613f1" class="">Ce sont les règles qui ne nuisent pas aux utilisateurs : transparence, responsabilité, équité, fiabilité, inclusion, confidentialité.</blockquote></details></li></ul><h1 id="77f2f3a7-1a81-4105-acb3-65a7bd06603c" class="block-color-orange_background">Problématiques </h1><p id="0cdc0b85-9b61-432c-804d-078c0c57f9bd" class=""><em><mark class="highlight-blue">Comment transformer un océan de données en flux régulier d’information pertinente pour répondre à des attentes précises ? </mark></em></p><h1 id="649ef42e-9f92-4acd-bef3-c80021ff39fd" class="block-color-orange_background">Hypothèses</h1><p id="8f231f09-fe61-4793-8cfd-0fc40db59759" class=""><em><mark class="highlight-blue">L’IA est plus performante qu’un algorithme classique.
</mark></em><mark class="highlight-teal">Vrai</mark></p><h1 id="e94e1949-ae68-4c05-8954-5c0eb5598241" class="block-color-orange_background">Action</h1><h2 id="e75c8378-8a05-498f-8ac9-3073073f5f19" class="">Ressources</h2><p id="1497bfde-b96b-4d1c-822c-181dcc91aa8b" class=""><a href="https://experiences.microsoft.fr/articles/intelligence-artificielle/comprendre-utiliser-intelligence-artificielle/">https://experiences.microsoft.fr/articles/intelligence-artificielle/comprendre-utiliser-intelligence-artificielle/</a> </p><p id="68b663ef-0b88-4354-9bd8-fdf0292dab48" class=""><a href="https://siecledigital.fr/2018/08/20/histoire-intelligence-artificielle/">https://siecledigital.fr/2018/08/20/histoire-intelligence-artificielle/</a> </p><p id="dd9762fd-f873-4a2e-84af-ac600fb48b4a" class=""><a href="https://datascientest.com/intelligence-artificielle-definition">https://datascientest.com/intelligence-artificielle-definition</a></p><p id="90da833d-3db6-47e4-be95-92baeb7c54a2" class=""><a href="https://www.cmsinfo.org/high-tech/domaines-application-intelligence-artificielle/">https://www.cmsinfo.org/high-tech/domaines-application-intelligence-artificielle/</a></p><p id="98fc323a-2755-4bd1-aba3-f38529d6745c" class=""><a href="https://www.coe.int/fr/web/artificial-intelligence/history-of-ai">https://www.coe.int/fr/web/artificial-intelligence/history-of-ai</a> </p><p id="4ca87a3e-f303-4d23-879d-7f30f163d75d" class=""><a href="https://ellcie-healthy.com/lintelligence-artificielle-une-evolution-fulgurante/">https://ellcie-healthy.com/lintelligence-artificielle-une-evolution-fulgurante/</a></p><p id="0dc1075c-a577-4dee-be13-3a12097ad466" class=""><a href="https://datascientest.com/quelle-difference-entre-le-machine-learning-et-deep-learning">https://datascientest.com/quelle-difference-entre-le-machine-learning-et-deep-learning</a></p><p id="39f7864e-4d5d-4c3c-8a62-5ff27d4e0787" class=""><a href="https://www.ionos.fr/digitalguide/web-marketing/search-engine-marketing/deep-learning-vs-machine-learning/">https://www.ionos.fr/digitalguide/web-marketing/search-engine-marketing/deep-learning-vs-machine-learning/</a></p><p id="aac80ae9-ecec-45b2-9ec7-d254634a2dd6" class="">
</p><p id="b35343a0-b8a8-4bd1-b42c-5f18f2228edf" class=""><span style="border-bottom:0.05em solid">En plus : </span></p><p id="b7ee2cb8-d1b8-4aa1-b4f7-be03d52f1823" class=""><a href="https://experiences.microsoft.fr/articles/intelligence-artificielle/apprentissage-supervise-et-non-supervise-quelles-differences/">https://experiences.microsoft.fr/articles/intelligence-artificielle/apprentissage-supervise-et-non-supervise-quelles-differences/</a></p><p id="eae9985d-5f23-4379-a2b8-c9951bf54cd4" class="">
</p><p id="4176f7fa-e75b-4838-b1ca-cfe07d41c1dc" class="">
</p><h2 id="482a111b-4a41-4494-b70f-3b028203638d" class="">Histoire </h2><p id="66e7a2c7-7a3a-4c93-b47e-afcd7e720b49" class=""><strong>1950 </strong>: article d’Alan Turing intitulé “<em>Computing Machinery and Intelligence</em>”. De cet article découlera ce que l’on appelle aujourd’hui le Test de Turing qui permet d’évaluer la capacité d’une machine à tenir une conversation humaine.</p><p id="cb4850fd-fcdf-47d2-a163-c95edbfc6adc" class=""><strong>1974 </strong>: C’est une période appelée le « <em>AI Winter</em> ». Beaucoup d’experts ne réussissent pas à faire aboutir leurs projets et les gouvernements britannique et américain réduisent leurs financements pour les académies. Ils préfèrent soutenir des idées ayant plus de chances de déboucher sur quelque chose de concret.</p><p id="7d7ec35f-0131-4912-8c73-a24063ce43df" class=""><strong>1980s </strong>: Le succès des systèmes experts permet de relancer les projets de recherche sur l’intelligence artificielle.</p><p id="afd93f78-bae2-42e1-8576-f521c39d3877" class=""><strong>1997 </strong>: Deep Blue créé par IBM a battu Garry Kasparov, alors champion du monde d’échec. Deep Blue s’appuyait sur un algorithme systématique de force brute, où tous les coups envisageables étaient évalués et pondérés.</p><p id="16a49a66-66d9-48b0-aef2-5cd7ccad25e6" class=""><strong>2003 </strong>: Geoffrey Hinton (de l’Université de Toronto), Yoshua Bengio (de l’Université de Montréal) et Yann LeCun (de l’Université de New York) décident de démarrer un programme de recherche pour remettre au goût du jour les réseaux neuronaux. Des expériences menées simultanément à Microsoft, Google et IBM avec l’aide du laboratoire de Toronto de Hinton ont alors démontré que ce type d’apprentissage parvenait à diminuer de moitié les taux d’erreurs pour la reconnaissance vocale. Des résultats similaires ont été atteints par l’équipe de Hinton pour la reconnaissance d’image.</p><p id="167c0300-a0ba-415f-b4bc-0d6ed32896a5" class=""><strong>2011 </strong>: Waston d’IBM a battu en direct les deux plus grands champions de <em>Jeopardy!</em>
<strong>2013 </strong>: Facebook ouvre le <a href="https://siecledigital.fr/2016/08/23/facebook-publie-ia-fasttext-github/">Facebook Artificial Intelligence Research</a> (FAIR) dirigé par Yann Le Cun.</p><p id="43643664-997e-4aaa-8cf1-ad950ca81ca9" class=""><strong>2016 </strong>: AlphaGO (IA de Google spécialisée dans le jeu de Go) battra le champion d’Europe (Fan Hui) et le champion du monde (Lee Sedol) puis elle-même (AlphaGo Zero). Précisons que le jeu de Go a une combinatoire bien plus importante que les échecs (plus que le nombre de particules dans l’univers) et qu’il n’est pas possible d’avoir des résultats aussi significatifs en force brute (comme pour Deep Blue en 1997).</p><p id="53e59c14-e07c-4c41-9941-dbf5317deb5e" class="">
</p><p id="67b3c6c0-e8a4-4a71-bc03-8079a7c72c70" class=""><strong>La révolution actuelle </strong>de l’intelligence artificielle et de la science qui en découle est rendue possible par « une combinaison de 3 facteurs ». Selon Harry Shum : « une vaste quantité de data ; une puissance informatique extraordinaire, notamment grâce au cloud ; et des algorithmes révolutionnaires, basés sur le deep-learning ».</p><h2 id="50489212-fecb-4c4e-8d8e-c3ca97215f2c" class="">Les différents type d’IA</h2><ul id="2373967a-d836-49df-8239-bc2bf0eb41c8" class="bulleted-list"><li style="list-style-type:disc">Machine learning</li></ul><ul id="bfad2f25-a7fe-4f41-aa73-d35919f50300" class="bulleted-list"><li style="list-style-type:disc">Deep learning</li></ul><p id="8d455dea-3bbc-4f93-a315-4977db5f3000" class="">
</p><h2 id="80bb8f4a-0834-4e11-a736-6331c3dd9ed8" class="">Avantages / inconvénients IA</h2><table id="00258bc4-9716-4537-abf5-2c9b7afcdad1" class="simple-table"><tbody><tr id="98fb97eb-211e-4794-b1f2-ae80b87602da"><td id="cFjQ" class=""><strong>Avantages</strong></td><td id="njCn" class=""><strong>Inconvénients</strong></td></tr><tr id="4853e557-b2fa-41ec-a0a3-a99d3fde1fc5"><td id="cFjQ" class="">Libère du temps en relayant les individus dans certaines tâches (nécessitant de la réflexion)</td><td id="njCn" class="">Sensible aux biais cognitif et sociétaux des programmeurs qui développent les applications IA</td></tr><tr id="8d5bb25c-d2fa-4a78-b0f8-34784c938953"><td id="cFjQ" class="">Permet de produire un traitement inédit de l’information, ne reproduisant pas strictement le processus de traitement humain</td><td id="njCn" class="">Le Deep Learning implique l’existence d’une boite noire. Le processus de traitement des données qui a conduit au résultat ne peut être complètement restitué du fait de sa complexité et son caractère non traductible en langage humain.</td></tr><tr id="427d68e9-5774-44a0-a3ff-d4c50d24d610"><td id="cFjQ" class=""></td><td id="njCn" class="">A besoin de données</td></tr><tr id="60c5b8d1-e2da-4729-9962-f2274f295d6f"><td id="cFjQ" class=""></td><td id="njCn" class="">Sans cesse en évolution, requiert des ajustements permanents</td></tr></tbody></table><h2 id="7f2a7d87-a07c-4043-ac4b-53005e5c6c02" class="">Les différents type de données utilisées et leurs origines </h2><figure id="2b1b18ae-7abf-4b5c-84a6-28fdcc778dc3" class="image"><a href="Story%203%20-%20Introduction%20IA%2031603f2a04234d61a18a89fb74cc6a7c/MicrosoftTeams-image.png"><img style="width:750px" src="Story%203%20-%20Introduction%20IA%2031603f2a04234d61a18a89fb74cc6a7c/MicrosoftTeams-image.png"/></a></figure><p id="85ff6610-88ce-42be-bc7c-99c1be7bd70e" class="">
</p><h2 id="2ab802bf-a42e-43cf-b851-07ff584a19d2" class="">Machine learning / Deep learning</h2><table id="e404208a-d1ef-41d7-8413-42e5056572de" class="simple-table"><tbody><tr id="0523c428-52ee-4651-9424-105de966da2b"><td id="Bq^y" class=""></td><td id="AL^B" class=""><strong>Machine Learning</strong></td><td id="jCy@" class=""><strong>Deep Learning</strong></td></tr><tr id="73db4540-2b3d-4fcb-8544-623803bac685"><td id="Bq^y" class="">Base de données</td><td id="AL^B" class="">Contrôlable</td><td id="jCy@" class="">&gt;1 millions de données</td></tr><tr id="1d6333a9-96d6-4b25-b871-64ebaee33b92"><td id="Bq^y" class="">Entraînement</td><td id="AL^B" class="">Entraînement par l’humain nécessaire</td><td id="jCy@" class="">Apprentissage autonome</td></tr><tr id="a0cbac09-25da-48c2-af64-ddd4b1800c56"><td id="Bq^y" class="">Algorithme</td><td id="AL^B" class="">Algorithme modifiable</td><td id="jCy@" class="">Réseau neuronal d’algorithmes</td></tr><tr id="33db6ed4-1721-414d-8599-8f3267c00d57"><td id="Bq^y" class="">Champ d’application</td><td id="AL^B" class="">Actions simples de routine</td><td id="jCy@" class="">Tâches complexes</td></tr></tbody></table><table id="892e63b0-4797-4087-9212-387b0eab3745" class="simple-table"><tbody><tr id="18929440-0809-4b16-8129-af607bb26984"><td id="v^Pu" class=""></td><td id="{_aj" class="">Avantages</td><td id="GHDq" class="">Inconvénients</td></tr><tr id="17121040-96c5-491b-ada6-af4b26783017"><td id="v^Pu" class="">Machine Learning</td><td id="{_aj" class="">+ Simple à mettre en oeuvre</td><td id="GHDq" class="">+ Moins efficace</td></tr><tr id="429d80b1-7963-48c8-a186-7f725ef945f8"><td id="v^Pu" class="">Deep Learning</td><td id="{_aj" class="">+ Performance</td><td id="GHDq" class="">+ Demande plus de ressources
+ Nécessite plus de données</td></tr></tbody></table><p id="d90348bd-9893-46f4-98ea-bad275032535" class="">
</p><figure id="65643b39-ca81-4ff4-9429-e7419c966e49" class="image"><a href="Story%203%20-%20Introduction%20IA%2031603f2a04234d61a18a89fb74cc6a7c/MicrosoftTeams-image_(1).png"><img style="width:1080px" src="Story%203%20-%20Introduction%20IA%2031603f2a04234d61a18a89fb74cc6a7c/MicrosoftTeams-image_(1).png"/></a></figure><h2 id="a2638086-d8de-47cf-aac2-d618d90ed155" class="">Applications</h2><h3 id="b4759178-889a-4302-b7ef-f304fd37f61c" class=""><a href="https://experiences.microsoft.fr/articles/intelligence-artificielle/intelligence-artificielle-medecine/">Santé</a></h3><ul id="8b17a2d5-7eba-48ef-9d2f-a012735f236e" class="bulleted-list"><li style="list-style-type:disc"><a href="https://siecledigital.fr/2018/07/03/chine-lia-plus-forte-que-les-medecins-pour-detecter-les-tumeurs-cerebrales/">Comprendre des radiographies mieux que les médecins</a> </li></ul><ul id="488788b5-7883-4d8c-9969-ca92c6e75b9c" class="bulleted-list"><li style="list-style-type:disc">Médecine préventive et prédictive</li></ul><p id="121d500f-4f08-408c-8131-c81b0a607361" class="">
</p><h3 id="28264631-a105-4ce0-83c9-ed55b0fda38f" class="">Transport</h3><ul id="3d46a69a-d91f-4b9f-bd81-a98fb6977816" class="bulleted-list"><li style="list-style-type:disc">Véhicules autonome : <a href="https://siecledigital.fr/2018/07/24/voitures-autonomes-waymo-40000-kilometres-jour/">Conduire des voitures</a> ou aides à la conduite.</li></ul><ul id="e0d17be9-efbb-449e-b447-4f1c4d49d944" class="bulleted-list"><li style="list-style-type:disc">optimisation des flux</li></ul><p id="3de937e5-c8d4-4312-a8bc-4ed3dbd873d8" class="">
</p><h3 id="dd13b69f-fecb-4fc3-adb0-21584ba1c6df" class="">Tertiaire</h3><ul id="3e5a033d-a495-4841-9d33-f53bdfff29a7" class="bulleted-list"><li style="list-style-type:disc">Chatbots</li></ul><ul id="7fd25e47-efaf-4710-a28e-7e8993c99e13" class="bulleted-list"><li style="list-style-type:disc"> <a href="https://siecledigital.fr/2016/09/28/lia-de-traduction-de-google-se-rapproche-de-celle-de-lhomme/">Faire de la traduction</a></li></ul><ul id="b0e97bc9-b1e1-4838-abbb-68fa913c44b6" class="bulleted-list"><li style="list-style-type:disc">Amplifier les capacités de vos collaborateurs en les déchargeant des tâches répétitives, à faible valeur ajoutée, vous assurer que vos clients, conducteurs d’automobiles, ne s’endorment pas au volant.</li></ul><ul id="5b191438-9077-4df0-8c64-c6d6e154117b" class="bulleted-list"><li style="list-style-type:disc">Les forces de vente, elles gagnent, grâce aux algorithmes, la capacité de mieux cibler les bons prospects et de connaitre les clients à choyer, grâce à l’analyse automatique des conversations.</li></ul><ul id="a5f1477c-6078-4d38-b2c3-8e752a940f31" class="bulleted-list"><li style="list-style-type:disc">Informatique décisionnelle : le Machine learning peut aussi servir à visualiser les données importantes de l’entreprise et à rendre différentes prévisions compréhensibles pour les décideurs humains.</li></ul><ul id="c5930e8b-2565-45fb-b7ea-070801d43f6c" class="bulleted-list"><li style="list-style-type:disc">Marketing en ligne</li></ul><p id="771c8337-a87a-4956-8bae-6a023bfbd557" class="">
</p><h3 id="3a6d685e-bbce-446e-adfc-d552230729dc" class="">Industrie</h3><ul id="d6b4a689-4f17-49d2-8048-b4ee2bc65452" class="bulleted-list"><li style="list-style-type:disc">Maintenance prédictive : repose sur quelques étapes clés : collecter les données à l’aide de capteurs ; les centraliser et les analyser ; modéliser des schémas de panne et déployer des algorithmes qui apprennent à reconnaître les signes avant-coureurs… Pour des gains opérationnels, des risques réduits et une maintenance améliorée.</li></ul><ul id="c8775471-0a88-496f-8927-e10eb1f0b2cf" class="bulleted-list"><li style="list-style-type:disc">Gestion des stocks</li></ul><p id="8e40e7a8-7097-42ae-b319-60c389d69672" class="">
</p><h3 id="2d3a3120-56f2-4838-b1ac-b4a20ffcc1be" class="">Numérique</h3><ul id="fcb43e7b-4686-4875-9d8b-ce4601a68b71" class="bulleted-list"><li style="list-style-type:disc">Sécurité informatique :<strong> </strong>Contrairement aux solutions basées sur le Machine learning, les systèmes IT et de <a href="https://www.ionos.fr/digitalguide/serveur/securite/cyber-securite-bien-se-proteger-sur-le-web/">cyber-sécurité</a> qui s’appuient sur le Deep learning peuvent identifier aussi bien les dangers documentés que les risques jusqu’alors inconnus grâce à leur capacité à détecter les anomalies dans les patterns connus du réseau neuronal. Le Deep learning démultiplie l’efficacité des mesures de sécurité.</li></ul><ul id="78e1f11b-c014-46c6-9b4e-3b371bee661b" class="bulleted-list"><li style="list-style-type:disc">Reconnaissance vocale, faciale.</li></ul><p id="2d3003cc-fd08-4eda-96af-6775c9f7ea13" class="">
</p><h3 id="3d17677d-9f72-441b-bb70-e8a9398d94c3" class="">Agriculture</h3><ul id="050b4313-9400-42fc-9985-606cf6089c33" class="bulleted-list"><li style="list-style-type:disc">Des modèles prédictifs de rendements alimentaires sont actuellement en phase de test. Rien que dans ce secteur, les investissements relatifs à l’IA seront conséquents ce marché devrait passer de 520 millions de dollars à 2,5 milliards de dollars d’ici 2025.</li></ul><p id="e8a79492-763f-477d-a32f-d02ed546de97" class="">
</p><h3 id="13bfdc37-88a4-475f-844e-9de9af1543d4" class="">Défense</h3><ul id="bbd2d740-0fc7-46f0-a0ce-9cc2f0407287" class="bulleted-list"><li style="list-style-type:disc">Robots de soutiens intelligents, drones autonomes, détection de mouvement, de suivi, d’identification.</li></ul><ul id="63296812-82d7-4c01-a863-249e330a4189" class="bulleted-list"><li style="list-style-type:disc">Reconnaissance faciale.</li></ul><p id="f0839f44-bc5d-49d6-a3a6-dccc4b274697" class="">
</p><h3 id="13111779-f377-4400-b4a3-cfce3d47ced9" class="">Artistique</h3><ul id="b06fd35d-3e16-4b21-9304-a9902918d181" class="bulleted-list"><li style="list-style-type:disc"><a href="https://siecledigital.fr/2018/04/25/nvidia-ia-repare-photos-tampon/">Imaginer une partie manquante d’une photographie</a></li></ul><ul id="97c33051-a57c-466b-bb17-a1d9a612180d" class="bulleted-list"><li style="list-style-type:disc"><a href="https://siecledigital.fr/2016/09/29/daddys-chanson-realisee-ia-style-beatles/">Créer des musiques</a>
</li></ul><p id="5ddb9e50-c6aa-446b-9cd0-c3a1d9b247b7" class="">
</p><h2 id="d1a707d4-46c8-4039-896b-5ba147e9d31d" class="">Métiers</h2><h3 id="2ea0b0ed-6223-4d0d-9467-10ad2ebc9860" class="">Data Analyst</h3><p id="001f3a3c-5be6-4a9c-b288-06fd2bbf1c08" class="">Un analyste de données, est un quelqu’un qui est <strong>capable d’interroger des sources de données</strong> pour en faire des rapports et des visualisations graphiques (graphes camemberts, histogrammes etc…). Un Data Analyst a une<strong> compréhension forte du domaine métier</strong> dans lequel il opère. Ce qui lui permet de mieux communiquer avec les gens du métier.</p><p id="1b79be72-7e38-447c-93aa-a10b3743906f" class="">Pour mieux explorer les données, un Data Analyst est généralement à l’aise avec les outils statistiques. Toutefois, il n’est pas forcement aussi “calé” techniquement qu’un <em>software engineer</em> pour traiter les grands volumes de données (Big Data).</p><p id="81a643a5-4711-4021-90dc-d57ca213355a" class=""><strong>Compétences et outils</strong> : Excel, Access, SQL, SPSS, Tableau, Statistiques…</p><p id="903cea0a-b9d5-4579-a2c0-10f150d8605f" class="">
</p><h3 id="a402e812-64f9-40ac-9595-f6b4dfb56bc2" class="">Business Intelligence Developer</h3><p id="2712fa95-0b2f-4b80-906b-c6a4251a6349" class="">Les développeurs B.I. (Business Intelligence / informatique décisionnelle) vont <strong>mettre en place des outils de B.I. pour les besoins de l’entreprise</strong>. Ces outils se présentent généralement sous forme de <em>Data warehouses, Datamart, </em>ainsi que des <em>bases de données multidimensionnelles</em> construits à partir d’agrégation de données en provenance de plusieurs bases de données. La construction des <em>Data warehouse et les bases OLAP</em> est généralement effectuée à travers des Job ETL (Extract, Transform, Load) en utilisant l’outil Talend<strong> </strong>par exemple.</p><p id="cc9c0b3d-5980-40b0-965e-eb932822b82c" class="">Ces Bases de données multidimensionnelles et <em>Data warehouses </em>sont par la suite utilisées par les développeurs B.I pour construire des tableaux de bords (<em>Dashboards) </em>et des rapports utiles pour les manageurs et les décideurs.</p><p id="f1b54b94-dd5c-4d92-87cb-4ef2ab578847" class="">Les développeurs de B.I. ont généralement une connaissance métier moindre que celle d’un Data Analyst. Cependant, ils sont plus “calés” techniquement pour s’interfacer avec les différentes sources de données.</p><p id="c83107ae-73f8-41ba-9f71-97d2d7e03caf" class=""><strong>Compétences et outils</strong> : SQL, OLAP, Data warehouses, Cubes, SSAS, SSIS, ETL (Talend…)</p><p id="60ca29d2-76c0-4044-9701-d277a205a2b8" class="">
</p><h3 id="1e4a264a-acb2-477b-ad57-cccb5dcaa489" class="">Data Engineer</h3><p id="683d73fc-c7de-4c2e-9d14-5a02548fe016" class="">Un Data Engineer est quelqu’un ayant un background technique en développement logiciel. Il peut être un <em>Software Engineer </em>qui s’est reconverti dans le Big Data.</p><p id="3b1ea154-bded-4082-85c1-ea8a99767fa1" class="">Les Data Engineers vont mettre en place des systèmes de Big Data pour traiter ces dernières. Ils opteront pour des outils de stockage performants comme les<strong> </strong>bases de données NoSQL
 et se baseront sur Hadoop, Spark, Map/Reduce pour traiter convenablement ces grands volumes de données.</p><p id="28265cc4-4edf-4654-b598-fad3eceb1785" class="">Les Data Engineer vont <strong>collecter, transformer les données de différentes sources.</strong> Ce travail préparatoire permettra d’avoir des données “propres”, prêtes pour qu’on leur applique dessus des techniques de Machine Learning.</p><p id="287bf27b-d547-4f71-a862-a81fd7484c83" class="">En d’autres termes, le travail d’un Data Engineer est de <strong>préparer le terrain</strong> pour qu’un Data Scientist puisse se servir des données propres pour en tirer des tendances (Insights).</p><p id="fdaba868-235b-4ec5-bd98-374827c28f77" class=""><strong>Compétences et outils</strong> : SQL, NoSQL, Hadoop, Data Lake, Big Data, Spark, Software Engineering, Map/Reduce…</p><p id="8088d7ff-4468-4035-9012-e15c73a25262" class="">
</p><h3 id="99f7edd1-234d-468b-a8e9-98d0881c0b06" class="">Data Scientist</h3><p id="838b0513-f6fe-4e3d-8af4-1716701e140b" class="">Un Data Scientist est un <strong>profil pluridisciplinaire</strong> qui aura pour mission première de tirer de l’information utile (<em>insights)</em> depuis des données brutes. Le métier du Data Scientist est à <strong>l’intersection entre </strong><strong><em>Data Analyst</em></strong><strong> et de</strong><strong><em> Data Engineer</em></strong><em>.</em> Tout en ayant des connaissances métiers dans le domaine dans lequel il évolue.</p><p id="12e0e5c7-c03e-4623-a8ac-31337bbe967b" class="">Un <em>Data scientist </em>va <strong>explorer et exploiter les gisements de données de l’entreprise</strong> pour leur appliquer des techniques de <a href="https://mrmint.fr/quest-machine-learning-apprentissage-automatique">machine learning</a>. Il s’agit donc d’une forme de <em>Data Analysis</em> poussée sur de grands volumes de données. L’exposition au contexte Big Data exige qu’un Data Scientist soit familier avec des concepts comme <strong>Map/Reduce, Hadoop, Data lake </strong>
etc…</p><p id="1fb04eee-9c40-4bca-9b0c-792fed1948b4" class="">L’information utile recherchée par un Data Scientist est <strong>spécifique à une entreprise</strong> et plus généralement à un domaine métier. Pour cela, un Data Scientist doit être à l’aise avec le domaine métier dans lequel il opère. Pour cela, il côtoiera les gens du métier pour creuser avec eux les différentes pistes de réflexion.</p><p id="13124af8-6d4e-44a0-b826-f1e16009b4ae" class="">Finalement, un data scientist doit être <strong>un bon communicant</strong> pour mieux communiquer ses retrouvailles. Il usera pour cela des différents supports de présentation comme les présentations <em>PowerPoint, </em>ainsi que des visualisations graphiques (histogrammes, camemberts…) plus parlantes aux décideurs.</p><p id="44eb60ce-ddcd-4eab-bae2-513a3c09cbb8" class=""><strong>Compétences et outils</strong> : SQL, NoSQL, Python, R, Machine Learning, Deep Learning, Statistiques, Software Engineering…</p><p id="1249174a-05ab-4152-b75f-77f46cf545a1" class="">
</p></div></article>


<?php 
    $content = ob_get_clean(); 

    require_once('structure/layout.php');
?>
