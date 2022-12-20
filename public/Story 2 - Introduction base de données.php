<?php $title = 'Introduction aux bases de données'; ?>
<?php ob_start(); ?>

<!---

à rajouter pour chaque imoort Notion : 

1. Supprimer le CSS html, body , a a visited

2. <details open="">    ->     <details>

3. En cas de composition, supprimer <html></html><body></body>

4. php $ini=0; echo $ini ; $ini++ ;? sur le premier titre puis php echo $ini ; $ini++;>

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
	
</style></head><article id="b04d7840-a602-4507-aa2b-494a3541a600" class="page sans"><header><img class="page-cover-image" src="https://www.notion.so/images/page-cover/nasa_ibm_type_704.jpg" style="object-position:center 19.999999999999996%"/><h1 class="page-title">Story 2 - <strong>Introduction bases de données</strong></h1></header><div class="page-body"><h1 id="36ff6e0b-553c-4983-b134-07803ee50f6f" class="block-color-orange_background">Prérequis</h1><figure id="6b456bac-5f1d-4a56-9a29-b690cdb0652b" class="image"><a href="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/1849390n.jpg"><img style="width:1501px" src="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/1849390n.jpg"/></a></figure><p id="3895370e-2c4a-467c-8642-6dde23987c05" class="">
</p><blockquote id="c5af6549-a74d-463f-b565-354a79082bc7" class=""><mark class="highlight-blue"><span style="border-bottom:0.05em solid">Sagesse (wisedom) </span></mark><mark class="highlight-blue">: Connaissance des connaissances. Méta-connaissance.
Quand il y a un conflit entre deux connaissances, on utilise la méta-connaissance.</mark></blockquote><div id="32d1f79a-c3b8-4400-970b-8f610b76791e" class="column-list"><div id="1c2d6bb4-bac6-44f4-a95e-bf596860056e" style="width:50%" class="column"><blockquote id="c5618b70-be55-4017-bf0f-430b2b869bcd" class=""><mark class="highlight-blue"><span style="border-bottom:0.05em solid">Connaissances </span></mark><mark class="highlight-blue">: Règles, relations entre les informations. Algorithme / Modèle. Implique plusieurs informations. 
</mark><strong><mark class="highlight-blue">Base de connaissances (Ensemble de règle dans une base de connaissance)</mark></strong></blockquote></div><div id="f9e6276a-841a-406d-ad63-55abd36484cd" style="width:50%" class="column"><blockquote id="983f7d27-fd72-40c8-8e48-77e194392012" class=""><span style="border-bottom:0.05em solid"><mark class="highlight-blue">Datamining</mark></span><mark class="highlight-blue"> : Moyen de créer des </mark><strong><mark class="highlight-blue">connaissances </mark></strong><mark class="highlight-blue">à partir de </mark><strong><mark class="highlight-blue">données </mark></strong><mark class="highlight-blue">(à partir de modèle). </mark></blockquote></div></div><div id="fa6eee9f-3bc5-4014-b656-cf7260e6448d" class="column-list"><div id="01f9f34a-cebc-4d97-922d-2807ed04e809" style="width:50%" class="column"><blockquote id="8e6e3184-aacc-4503-bb78-fef29624d3fa" class="">I<mark class="highlight-blue"><span style="border-bottom:0.05em solid">nformation </span></mark><mark class="highlight-blue">: ensemble de données structurées et compréhensibles. (Adresse, n° sécurité sociale, …). Peut être vrai ou faux. </mark></blockquote></div><div id="69fb3552-f113-455a-83a9-db0a088b3904" style="width:50%" class="column"><blockquote id="0030148b-2cfb-436a-971a-eb8d740d493a" class=""><span style="border-bottom:0.05em solid"><mark class="highlight-blue">Business intelligence</mark></span><mark class="highlight-blue"> : Extrait des </mark><strong><mark class="highlight-blue">informations </mark></strong><mark class="highlight-blue">à partir de </mark><strong><mark class="highlight-blue">données</mark></strong><mark class="highlight-blue">. C’est faire des statistiques. </mark></blockquote><p id="93a4f7d4-8418-4a3e-ad64-0314cc8a6f17" class="">
</p></div></div><blockquote id="4db7ffb1-e7e4-4d96-9e6c-ff1d4a25ce48" class=""><mark class="highlight-blue"><span style="border-bottom:0.05em solid">Donnée </span></mark><mark class="highlight-blue">: information brut (chiffres, lettres, caractère, …).</mark></blockquote><p id="f70cab84-d23c-41be-af6c-e29795d625d7" class="">
</p><h2 id="2bb59a0a-05a7-4958-8282-ce427be4d556" class="">Base de donnée</h2><blockquote id="dffeb25d-70a1-4f5a-8eca-c6ef2aae3d15" class=""><span style="border-bottom:0.05em solid"><mark class="highlight-blue">Base de donnée</mark></span><mark class="highlight-blue"> : collection de données utiles. </mark></blockquote><blockquote id="0febd533-e44c-4a06-aa83-8bd6c2741c4d" class="block-color-blue"><span style="border-bottom:0.05em solid">Champ (attribut)</span> : Caractéristique ou attribut unique (Tête de colonne).</blockquote><blockquote id="fc41d256-932a-4e3f-9a38-e4e4de3dab78" class="block-color-blue"><span style="border-bottom:0.05em solid">Enregistrement (record)</span> : Ensemble de valeur de champs associés (ligne).</blockquote><blockquote id="63fdfea7-4903-49a8-99d8-4920b140f9f6" class=""><mark class="highlight-blue"><span style="border-bottom:0.05em solid">Table</span></mark><mark class="highlight-blue"> : Collections d’enregistrement (données similaires).</mark></blockquote><blockquote id="a055cc65-2c53-4f50-bb93-e035e1a878be" class=""><mark class="highlight-blue"><span style="border-bottom:0.05em solid">Base de donnée relationnelle</span></mark><mark class="highlight-blue"> : Ensemble de tables reliées entre elles.</mark></blockquote><p id="095ed200-7cee-4aec-aadd-400620d96d6a" class="">
</p><h1 id="5ea61589-5dbd-460e-8b89-08117f75823b" class="block-color-orange_background">Contexte </h1><p id="ca07b03a-3cd6-476b-b294-8a650ade6100" class="">Connaître les différents types de BDD et types de données. </p><h1 id="e26bd666-1289-49db-a78a-4c34aa85fd12" class="block-color-orange_background">Mots clés</h1><ul id="a0941da3-8674-42d7-87c2-5876f151022d" class="toggle"><li><details><summary><strong>Donnée</strong></summary><p id="d5d9a38a-1aee-4ff0-8c52-e1fa8ae4e04e" class="">Caractères, chiffres, lettres, mots brutes, sans contexte (chiffres, lettres, caractère, …).   →  <strong> Base de donnée (case)</strong></p></details></li></ul><ul id="027a4d2a-735e-41cb-913a-e420880c4b2c" class="toggle"><li><details><summary><strong>Information</strong></summary><p id="3a9c375e-706b-4538-8049-6ec0229d6905" class="">Ensemble de données structurées et compréhensibles. (Adresse, n° sécurité sociale, …). Peut être vrai ou faux.   → <strong> Système d’information (Requête)</strong></p></details></li></ul><ul id="2b2dc400-4f43-4aad-bca6-3c0eafd60ee3" class="toggle"><li><details><summary><strong>Connaissance</strong></summary><p id="469283ca-98c9-454b-bc92-ec870aa336e6" class="">Relations entre les informations. Règles / Algorithme / Modèle. Implique plusieurs informations.   →   <strong>Base de connaissances (Ensemble de règle dans une base de connaissance)
</strong><strong><mark class="highlight-teal"><em>Lorsqu’on traite les données pour en tirer des patterns dans un contexte particulier</em></mark></strong></p></details></li></ul><ul id="0c2e1cee-aa0d-45d1-8425-25099df5c471" class="toggle"><li><details><summary><strong>méta-connaissance</strong></summary><p id="4ea9ac4f-3244-4e64-94a5-d2c2cb2fb17c" class="">Connaissance des connaissances. </p></details></li></ul><p id="f26cc157-4672-4b58-955e-6c6038c439f4" class="">
</p><ul id="0f0214cd-93ec-4486-a640-5ceff7619f8d" class="toggle"><li><details><summary><strong>Champ (attribut)</strong></summary><blockquote id="8aa02091-bdb7-4915-97a9-dcd00580f5a2" class="">Caractéristique ou attribut unique (Tête de colonne).
Différent de champ de valeur qui correspond à une donnée (case).</blockquote></details></li></ul><ul id="5a6e2488-f153-4caf-959e-a7ff5a5ab1b0" class="toggle"><li><details><summary><strong>Enregistrement </strong><strong><span style="border-bottom:0.05em solid">(record)</span></strong></summary><blockquote id="935661b0-c270-4f5e-925d-2aedb696deab" class="">Ensemble de valeur de champs associés (ligne). (= tuple)</blockquote></details></li></ul><ul id="4d8d0f07-5513-4f5a-89d9-024572f33a17" class="toggle"><li><details><summary><strong>Table</strong></summary><blockquote id="f660879b-8580-486b-ba1f-d1d4c86395b1" class="">Collections d’enregistrement (données similaires).</blockquote></details></li></ul><p id="1e0176b7-297d-4bdd-85f9-2ebbd39ae0c8" class="">
</p><ul id="2a8b434f-4f3a-45d8-a33c-58468ddf9318" class="toggle"><li><details><summary><strong>Données structurées</strong></summary><blockquote id="78dc3372-1b67-42ef-8e24-6865e72fbc1e" class="">Données formatées dans des champs prédéfinies afin d’être facilement interprété par un SGBD. </blockquote><p id="cc5b3fe7-3589-4102-8143-c201bc014c69" class="">Les données structurées sont des informations qui ont été formatées et transformées en un modèle de données bien défini. Les données brutes sont mappées dans des champs prédéfinis qui peuvent ensuite être extraits et lus facilement via SQL. Les bases de données relationnelles SQL, constituées de tables avec des lignes et des colonnes, sont le parfait exemple de données structurées.</p></details></li></ul><ul id="2862d09d-12e7-4d65-a522-aaf76f5424a0" class="toggle"><li><details><summary><strong>Données semi-structurées</strong></summary><blockquote id="90a7593d-4402-4b7e-8b8a-c09349e471a9" class="">Ensemble de données structurées et non structurées.
exemple image (non structurée) et ses métadonnées (structurée).</blockquote><p id="d0dc0093-7853-4847-8262-54d0572c60c6" class="">Les données semi-structurées sont un type de données qui présentent des caractéristiques cohérentes et définies. Il ne se confine pas dans une structure rigide telle que celle nécessaire aux bases de données relationnelles. Les propriétés organisationnelles telles que les métadonnées ou les balises sémantiques sont utilisées avec des données semi-structurées pour les rendre plus gérables ; cependant, il contient encore une certaine variabilité et des incohérences.</p></details></li></ul><ul id="7b5bd2b4-6ba4-4a0c-8e5f-1b7226abc2cd" class="toggle"><li><details><summary><strong>Données non structurées</strong></summary><blockquote id="55a40b2c-1476-46e5-a26c-35d7d9e21509" class="">Données brutes, qui peuvent contenir plusieurs informations à l’intérieur d’une donnée. E<em>xemple : Texte, image, JSON.</em></blockquote><p id="9778139f-71fa-42ab-8fd9-55db27d7708d" class="">Données présentes sous forme brute. Il peut s&#x27;agir d&#x27;un paragraphe d&#x27;un livre contenant des informations pertinentes ou d&#x27;une page Web. Un exemple de données non structurées pourrait également être des fichiers journaux qui ne sont pas faciles à séparer.</p></details></li></ul><p id="ee58ec56-98cb-4e56-b0d6-242b04f913bf" class="">
</p><ul id="e05922dc-f6d4-433d-a440-8c46fc9a2749" class="toggle"><li><details><summary><strong>SGBD </strong></summary><p id="e88b35b7-0fc2-4c66-94a3-916f10427bab" class=""><em>Systèmes de Gestion de Bases de Données.</em></p><p id="28603384-7ba2-46c5-9057-a70dc4377acb" class="">Logiciel destiné au stockage et à la manipulation de bases de données. Plutôt sous-entendu relationnelle.</p></details></li></ul><ul id="8525f303-d387-4f9f-8c69-25fd5382d5d1" class="toggle"><li><details><summary><strong>Base de données</strong></summary><blockquote id="3cf329e6-29ce-4f56-bd32-1014b8a1ab85" class="">Collection de données que l’on peut traiter (CRUD).
+ Données structurées, semi-structurées ou non structurées indexées pour faciliter leur recherche.</blockquote><p id="f881f1d2-4770-4650-9c67-9049a558cd31" class="">C’est un ensemble de données qui sont stockées sur un support informatique, et structurées de manière à pouvoir facilement consulter et modifier leur contenu.</p></details></li></ul><ul id="089a0de4-3459-40bf-bd7f-0fdeb99eeea6" class="toggle"><li><details><summary><strong>Base de données relationnelle</strong></summary><blockquote id="1d7d7643-c98f-4b06-9c9b-0e0885ea6794" class="">Base de données qui contient des données structurées, regrouper par thème, et que l’on peut interconnecter <strong>par un champ commun</strong>.</blockquote><p id="cb26f963-9472-425b-80e4-a118f573eef2" class="">
</p><p id="f38a8a6a-59d2-4cfd-a335-8e9aa31645b3" class="">La disposition des données est sous forme de tableau et on peut créer autant de tableaux que l’on veut et les faire interagir entre eux. 

Ce qui fait la grande force et la spécificité de ce moteur de base de données c’est la possibilité de créer la structure de la base de données. En SQL, on appelle cela des schémas. Les schémas permettent de définir comment les données seront stockées, le type de données, ce qui est obligatoire et/ou optionnel, etc.</p></details></li></ul><p id="448d6815-1892-4b09-bdc2-9c7fad65825a" class="">
</p><ul id="5be02f6a-2fca-4a93-b628-b682794f6101" class="toggle"><li><details><summary><strong>SQL (Stuctured Query Language)</strong></summary><blockquote id="ebda4e4e-623f-48e2-b380-cc2d6aee3039" class="">Langage de programmation qui permet de communiquer avec une base de données relationnelle.</blockquote><p id="a669356d-2c94-4643-8818-36145464e8c5" class="">(Structured Query Data) est un langage, un langage de base de données. Vous pouvez ajouter, modifier ou supprimer des données. Bien entendu, vous pouvez également lire les données en appliquant des critères de restriction.</p></details></li></ul><ul id="2bad64e1-23b7-464d-af75-7831c2b5bb6b" class="toggle"><li><details><summary><strong>MySQL</strong></summary><blockquote id="5d65daee-d421-4d43-9c67-30b7d5164d9c" class="">SGBD (système de gestion de base de donnée) :  logiciel de gestion de base de donnée relationnelle.</blockquote></details></li></ul><p id="95457d5b-35da-4085-a8c9-b69b91317c1c" class="">
</p><ul id="edd39c45-0f36-4413-9e21-964884ccb391" class="toggle"><li><details><summary><strong>Base de données non relationnelle = NoSQL (Not Only SQL).</strong></summary><blockquote id="bfad0006-abb0-4666-a45c-5268955ea5d1" class="">Base de données qui peut accepter des données semi-structurées ou non-structurées. Il existe plusieurs configurations pour différents usages : <ul id="e5138ef6-bc32-472d-9898-dcc045cd2473" class="toggle"><li><details><summary><strong>NoSQL orienté agrégats</strong></summary><p id="f3ef565c-b5d6-411b-8a6d-40596dc067a5" class="">Une des caractéristiques retrouvées dans de nombreux SGBD NoSQL est 
l&#x27;utilisation d’« agrégats de données » constitués d&#x27;un ensemble de 
données souvent « consultées/modifiées en même temps » et qui peuvent 
être déployées sur des serveurs indépendants.
À titre d&#x27;exemple considérons une application de commerce-en-ligne conçue de manière à accéder fréquemment aux informations d&#x27;un client (adresses, etc) et à l&#x27;historique de ses achats (par exemple pour lui proposer des réductions).</p><ul id="8bec85e8-6ff0-4aa6-8b2a-5292423a3203" class="bulleted-list"><li style="list-style-type:disc">Un SGBD relationnel typique modélisera ce système en créant une table des informations clients et une table des achats puis en effectuant une jointure entre ces dernières à chaque opération. Cette architecture pourra poser problème lorsque le nombre de clients/achats deviendra important et sera difficile à répartir entre plusieurs serveurs.</li></ul><ul id="a31e4022-0ac4-430b-be2c-934e94057b8d" class="bulleted-list"><li style="list-style-type:disc">A contrario une architecture SGBD NoSQL typique aura tendance à modéliser ce problème en un ensemble d&#x27;agrégats constitué des informations d&#x27;un client et de ses achats. Cette architecture est plus facilement scalable. En effet ces agrégats interagissent peu entre eux et peuvent facilement être répartis sur un cluster de serveurs. Cette architecture pourra par contre poser problème si pour une raison quelconque on est amené à effectuer des requêtes qui ne correspondent pas aux cas d&#x27;utilisation immédiatement considérés. Par exemple une demande de calcul du nombre total de clients ou d&#x27;achats pourra être moins efficace que dans un système relationnel qui conserve l&#x27;ensemble des clients (resp. achats) dans une table unique.</li></ul></details></li></ul><ul id="5ddc51aa-2cc6-4222-b27b-c059943a5b31" class="toggle"><li><details><summary><strong>NoSQL orienté-graphes</strong></summary><p id="45308899-72f3-4a0b-bc50-002c8bb0a059" class="">Les <a href="https://fr.wikipedia.org/wiki/Bases_de_donn%C3%A9es_orient%C3%A9es_graphe">bases de données orientées graphe</a> permettent de stocker les données sous forme de graphe et de faciliter l&#x27;écriture des requêtes en supprimant la plupart des jointures. Par 
rapport aux bases relationnelles, l&#x27;efficacité de ces bases est variable en fonction des systèmes et tâches et des configurations.
Ces données sont typiquement celles des réseaux sociaux, réseaux de transport, topologies, ou systèmes de recommandation de documents.
On distingue habituellement les<a href="https://fr.wikipedia.org/wiki/Triplestore"> triplestores</a> des bases de données orientées-graphe. Les bases de données graphe fonctionnent avec différents types de graphe (ex. : pondérés, clusters, 
graphe et tables mixtes) et offrent souvent de meilleures performances 
pour les traversées de graphes.

Prenons l&#x27;exemple d&#x27;un réseau social : dans certains cas, il devient très complexe de calculer la distance entre deux personnes non directement connectées. Et c&#x27;est ce type d&#x27;approche que résolvent les bases orientées Graphe.

Dans la base orientée graphe, les données stockées sont : les nœuds, les liens et des propriétés sur ces nœuds et ces liens. Les requêtes que l&#x27;on peut exprimer sont basées sur la gestion de chemins, de propagations, d&#x27;agrégations, voire de recommandations. Toutefois, contrairement aux solutions précédentes la distribution des nœuds sur le réseau n&#x27;est pas triviale.
</p><figure id="08b50c4c-969b-44e2-9052-bd09ad22efa4" class="image"><a href="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe4.png"><img style="width:1358px" src="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe4.png"/></a></figure></details></li></ul><ul id="3e493802-627d-47a1-992d-7e089ab1c586" class="toggle"><li><details><summary><strong>NoSQL sans-schéma</strong></summary><p id="08bc5540-ece4-40d0-b18f-28c0f0eb6df1" class="">La première étape de la création d&#x27;une base de données relationnelle est de définir son schéma c&#x27;est-à-dire l&#x27;ensemble des tables la composant et l&#x27;ensemble des champs de ces tables. Cette étape crée une certaine rigidité dans l&#x27;implémentation, implique d&#x27;avoir une vision assez claire des évolutions de l&#x27;application et peut poser problème si la structure des données recueillies change dans le temps. Les systèmes NoSQL sans-schéma peuvent ignorer cette étape et stocker des données hétérogènes au fur et à mesure de leur alimentation. Cette utilisation permet une grande flexibilité et des capacités d&#x27;adaptation au niveau de la base de données. La contrepartie est que les applications qui liront la base de données devront être capables d&#x27;intégrer des données plus hétérogènes et de structure plus complexe.</p></details></li></ul><ul id="85617eac-9858-47df-9e6b-8ee5e97b9e85" class="toggle"><li><details><summary><strong>Orientés colonnes</strong></summary><p id="28d2976b-791c-4b1c-8861-e347fd4d3ca6" class="">Traditionnellement, les données sont représentées en ligne, représentant l&#x27;ensemble des attributs. Le stockage orienté colonne change ce paradigme en se focalisant sur chaque attribut et en les distribuant. Il est alors possible de focaliser les requêtes sur une ou plusieurs colonnes, sans avoir à traiter les informations inutiles (les autres colonnes).</p><p id="919d22bd-369d-497b-9eb2-0b6705be96ce" class="">Cette solution est très adaptée pour effectuer des traitements sur des colonnes comme les agrégats (comptage, moyennes, co-occurences...). D&#x27;une manière plus concrète, elle est adaptée à de gros calculs analytiques. Toutefois, cette solution est beaucoup moins appropriée pour la lecture de données spécifiques comme pour les clés/valeurs.
</p><figure id="ea0a235b-8078-4c39-ac17-0bb26fb0fa94" class="image"><a href="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe2.png"><img style="width:2038px" src="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe2.png"/></a></figure></details></li></ul><ul id="edebfa3b-18f1-473c-bce7-a66e69414703" class="toggle"><li><details><summary><strong>Orientées clé/valeur</strong></summary><p id="4c817e29-94f0-4fba-a799-16ec88bac4d7" class="">Tout repose sur le couple Clé/Valeur. La clé identifie la donnée de manière unique et permet de la gérer. La valeur contient n&#x27;importe quel type de données.</p><figure id="e390818c-b861-45e6-be37-951301973867" class="image"><a href="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe1.png"><img style="width:1680px" src="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe1.png"/></a></figure></details></li></ul><ul id="99736415-e6d3-4dc4-be56-b972c0805edb" class="toggle"><li><details><summary><strong>Orientée &quot;document&quot;</strong></summary><p id="709bf573-80f2-4dc2-a389-d5ba8426ce5e" class="">Les bases orientées documents ressemblent sans doute le plus à ce que l&#x27;on peut faire dans une base de données classique pour des requêtes complexes. Le but de ce stockage est de manipuler des documents contenant des informations avec une structure complexe (types, listes, imbrications). Il repose sur le principe du clé/valeur, mais avec une extension sur les champs qui composent ce document.</p><p id="752ace7e-9010-491f-9c95-dea3ad00932d" class="">
</p><p id="d425074b-db79-4790-898c-28d3c415da1c" class="">L&#x27;avantage de cette solution est d&#x27;avoir une approche structurée de chaque valeur, formant ainsi un document. De fait, ces solutions proposent des langages d&#x27;interrogation riches permettant de faire des manipulations complexes sur chaque attribut du document (et sous-documents) comme dans une base de données traditionnelles, tout en passant à l&#x27;échelle dans un contexte distribué.</p><p id="e69da3a1-b8a9-4f96-a41e-121676bce295" class="">
</p><figure id="02708c9c-9ed1-45cd-b1dd-4ec19d42d9a9" class="image"><a href="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe3.png"><img style="width:1778px" src="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe3.png"/></a></figure></details></li></ul></blockquote><p id="621990fa-22a8-4197-a5c8-a1965a80fb73" class="">
</p><p id="b0d3e3fa-0518-4912-bd67-76a2ccdaad38" class="">On appelle aussi les bases de données non relationnelles des bases de données NoSQL (Not Only SQL).  Leur principale différence avec les bases de données relationnelles est qu’elle s’abstienne de la plupart des contraintes que peut avoir le relationnel, à commencer par les schémas. Vous pouvez stocker les données un peu comme vous le voulez, n’importe comment même si ce n’est pas conseillé de le faire bien sûr. Il y a plusieurs types de bases de données NoSQL : les orientées documents (MongoDB, CouchDB), les clés-valeurs (Redis, Memcached) et les orientées colonnes (ElasticSearch, BigTable). En clair, chaque document peut avoir d’une certaine façon son propre schéma ce qui rend l’utilisation et la pratique du NoSQL beaucoup plus souple, simple et rapide à utiliser. 
Bien entendu, vous faites complètement l’impasse sur l’intégrité de vos données ainsi que de leur sécurité et de leur cohérence même s’il est possible de pallier avec votre langage de programmation.

Un modèle typique en NoSQL est le système clé-valeur, avec une base de données pouvant se résumer topologiquement à un simple <a href="https://fr.wikipedia.org/wiki/Tableau_associatif">tableau associatif</a> unidimensionnel avec des millions — voire des milliards — d&#x27;entrées. Parmi les applications typiques, on retrouve des analyses temps-réel, statistiques, du stockage de logs (journaux), etc.</p></details></li></ul><ul id="160a2abd-de29-484d-a42e-46d832798213" class="toggle"><li><details><summary><strong>NoSQL</strong></summary><p id="d8e78168-1e3c-4afd-96a7-e5ea06a7805b" class="">(Not Only SQL). Utiliser pour le big data ! </p></details></li></ul><p id="49f4ab65-98bc-4d38-a2d7-c782d612e596" class="">
</p><ul id="18adfdf5-74bf-48b6-a834-51d862e0d709" class="toggle"><li><details><summary><a href="https://fr.wikipedia.org/wiki/Big_data"><strong>Big Data</strong></a></summary><blockquote id="219e33b2-aad9-4d1a-9d2f-a034f562ff03" class="">Ensemble de données diverses dont le volume et la vélocité (vitesse d’arrivée des données) nécessite des capacités de traitement importantes.</blockquote><p id="ea045def-c89a-48a5-9181-811cd95713b7" class="">Le big data, les mégadonnées ou les données massives, désigne les ressources d’informations dont les caractéristiques en termes de <strong>volume</strong>, de <strong>vélocité </strong>et de <strong>variété</strong> imposent l’utilisation de technologies et de méthodes analytiques particulières pour créer de la valeur, et qui dépassent en général les capacités d&#x27;une seule et unique machine et nécessitent des traitements parallélisés.</p></details></li></ul><ul id="dbe3924b-9e53-484b-b4c1-b258f18ee3dc" class="toggle"><li><details><summary><strong>Cloud Computing</strong></summary><blockquote id="abc1c039-bf7f-438f-a7fd-5718851c0ecc" class="">C’est un système de stockage et de traitement de données sur des serveurs dans des datacenters distants. </blockquote><p id="f696d1b4-be58-4af5-ae17-fb41a57f7cb1" class="">Le cloud computing est la pratique consistant à utiliser des serveurs informatiques à 
distance et hébergés sur internet pour stocker, gérer et traiter des données, plutôt qu&#x27;un serveur local ou un ordinateur personnel.</p></details></li></ul><h1 id="95bcaf96-b0a7-4f8d-b9a0-1b6cb76cf61e" class="block-color-orange_background">Problématiques </h1><p id="4fd35219-be32-425d-90e4-7d3e03ab81da" class=""><mark class="highlight-blue">Quels type de base de donnée utiliser ?</mark></p><p id="f1188003-eb09-48fc-bc43-dda0dabf40c2" class="">Pour des données structurées on privilégiera les BDD relationnelles si on privilégie la sécurité, la cohérence des données et que la base n’est pas appelé à changer d’échelle. Si les données sont trop volumineuse (dispatchées sur plusieurs serveur), le NoSQL est aussi préférable. 

Pour des données semi-structurées ou non structurées on utilisera des BDD non relationnelles.
</p><p id="1140a2eb-2fc3-402a-a729-1553d7e42041" class=""><mark class="highlight-blue">Comment stocker et organiser nos données (structurées ou non) ?</mark><em><mark class="highlight-blue">
</mark></em>Grâce à des bases de données adaptées à nos données.</p><h1 id="6ba893d7-e646-412f-b5e0-77ef405a0ed1" class="block-color-orange_background">Hypothèses </h1><p id="1b4b8849-2dce-466a-9e53-517bc9b26ae3" class=""><mark class="highlight-blue">Le type de donnée nous permet d’utiliser qu’un seul type de base de données. </mark></p><p id="b5971a20-f241-4f79-9e71-34cdc69a8e96" class="">Les données <strong>structurées</strong> peuvent être utilisées dans des bases de données <strong>relationnelles ou non</strong>. 
Les données <strong>non structurées</strong> ou semi-structurées ne peuvent être utilisées que dans des bases de données <strong>non relationnelle</strong>.</p><p id="ff1e759e-b69a-47f6-b18a-2465a6de98c7" class="">
</p><p id="9025d199-9eb1-47c1-b161-207d7ff1b7ca" class=""><mark class="highlight-blue">Les différents types de base de données présentent des contraintes différentes en terme d’opération qui peuvent être conduites sur les données.</mark></p><p id="a51285be-fa3e-40bf-811b-68abe19af5a2" class="">Vrai</p><h1 id="280581fc-79e2-46ed-b42d-b1660f2f7700" class="block-color-orange_background">Action</h1><h2 id="4d79a212-76f4-4f65-b013-4ea61c2108a9" class="">Ressources</h2><p id="3b3f8474-1a25-4f92-b789-92273493bc2b" class=""><a href="https://apprendre-la-programmation.net/type-de-base-de-donnees-choisir/">https://apprendre-la-programmation.net/type-de-base-de-donnees-choisir/</a></p><p id="503abb5f-fb0f-4f92-9ed7-07216cb0a339" class=""><a href="https://www.mysql.com/fr/why-mysql/">https://www.mysql.com/fr/why-mysql/</a></p><p id="1d32da58-c5a6-4fe2-a61f-8372ee36480b" class=""><a href="https://fr.wikipedia.org/wiki/NoSQL">https://fr.wikipedia.org/wiki/NoSQL</a></p><p id="aa6e07f3-f15e-4248-9c03-d470eabd46e3" class=""><a href="https://github.com/ClementDelgrange/Cours_bases_de_donnees/blob/master/Presentation_BDD.md">https://github.com/ClementDelgrange/Cours_bases_de_donnees/blob/master/Presentation_BDD.md</a></p><p id="4345caf4-a3c8-46d7-803a-9d9fd992a494" class="">
</p><p id="147b9286-77c9-4f7c-b45a-110de6f25750" class="">Autres</p><p id="6879c5a8-79a3-49bc-83bc-979bf7ecfa50" class=""><a href="https://openclassrooms.com/fr/courses/4462426-maitrisez-les-bases-de-donnees-nosql/4462433-choisissez-votre-famille-nosql">https://openclassrooms.com/fr/courses/4462426-maitrisez-les-bases-de-donnees-nosql/4462433-choisissez-votre-famille-nosql</a></p><p id="80b86c26-14b5-4c52-b57a-d56966835f7c" class="">
</p><h2 id="d67ba8d2-b06b-4fba-a2b6-45499af5d1be" class="">Histoire </h2><p id="bb926518-e606-4347-b541-48be3c230a84" class="">Les SGBD relationnels créés dans les années 1970 se sont progressivement imposés jusqu&#x27;à devenir le paradigme de bases de données très largement dominant au début des années 1990.</p><p id="d39a2a88-df00-42fc-b381-6756c9159ff1" class="">Les différents type.
C&#x27;est dans le courant des années 2000 avec le développement de grandes 
entreprises internet (Google, Amazon, eBay…) brassant des quantités énormes de données et le développement de l&#x27;<a href="https://fr.wikipedia.org/wiki/Grappe_de_serveurs">informatique en grappes</a> que la domination sans partage du modèle relationnel a été remise en question car souffrant de limites rédhibitoires pour ces nouvelles 
pratiques.

Ce sont les grandes entreprises du web amenées à traiter des volumes de 
données très importants qui ont été les premières confrontées aux limitations intrinsèques des SGBD relationnels traditionnels. Ces systèmes fondés sur une application stricte des <a href="https://fr.wikipedia.org/wiki/Propri%C3%A9t%C3%A9s_ACID">propriétés ACID</a>
 et généralement conçus pour fonctionner sur des ordinateurs uniques ont rapidement posé des problèmes d&#x27;<a href="https://fr.wikipedia.org/wiki/Extensibilit%C3%A9">extensibilité</a>. Afin de répondre à ces limites, ces entreprises ont commencé à développer leurs propres systèmes de gestion de bases de données pouvant fonctionner sur des architectures matérielles distribuées et permettant de traiter des volumes de données importants.

La rencontre de 2009 à San Francisco est considérée comme l&#x27;inauguration de la communauté des développeurs de logiciels NoSQL. Des développeurs qui, selon le magazine <a href="https://fr.wikipedia.org/wiki/Computerworld">Computerworld</a>, « racontent comment ils ont renversé la tyrannie des coûteux et lents SGBD relationnels par des moyens plus simples et plus rapides de manipuler des données ». Selon Jon Travis, un des présentateurs de la conférence, « les SGBD relationnels en font trop, alors que les produits NoSQL font exactement ce dont vous avez besoin ».</p><h2 id="6e2283fd-120f-49bb-b86b-05785929a9e7" class="">Avantages / Inconvénients</h2><table id="5f779c56-36e7-40b9-aaa3-4d896835b5dd" class="simple-table"><tbody><tr id="160650d1-229e-4a6c-9303-67cd6b7cc4eb"><td id="e:fH" class="" style="width:106px"></td><td id="FG?E" class="" style="width:186px">BBD relationnelle</td><td id="~W&lt;A" class="" style="width:174px">BBD non relationnelle</td><td id="viVg" class="" style="width:141px">données structurées</td><td id="wv&lt;~" class="" style="width:244px">données non structurées</td></tr><tr id="7ea9e2dd-1c7d-4270-b4f1-3001ed50cf86"><td id="e:fH" class="" style="width:106px">Avantages</td><td id="FG?E" class="" style="width:186px">+ Données structurées
+ Cohérentes
+ Sécurisées
+ Possibilité de gérer des droits d’accès différents à la base de données et aux données</td><td id="~W&lt;A" class="" style="width:174px">+ Données non/semi-structurées
+ Performance (vitesse)
+ Plus flexible</td><td id="viVg" class="" style="width:141px">+ Facile à ordonner
+ Typées</td><td id="wv&lt;~" class="" style="width:244px">+ Flexible (pas de schéma)
+ Peuvent être traiter en masse
+ scalable</td></tr><tr id="ae2cc58c-836c-4c03-b0df-9865a547c74b"><td id="e:fH" class="" style="width:106px">Inconvénients</td><td id="FG?E" class="" style="width:186px">+ Peu scalable</td><td id="~W&lt;A" class="" style="width:174px">+ Moins sécurisée
+ Regroupement et croisement de données plus difficiles</td><td id="viVg" class="" style="width:141px">+ Traitement rigide</td><td id="wv&lt;~" class="" style="width:244px">+ Le regroupement et le croisement de données sont plus difficiles à réaliser qu’en SQL
+ La sécurité et la cohérence des données sont sacrifiées même si une équipe de développeur peut le minimiser, il y aura toujours un risque.</td></tr></tbody></table><p id="7f556c64-f66e-45a7-843f-b359bb2c08cd" class="">
</p><h2 id="0e04049c-d48d-4daf-bc93-3bd18920b2eb" class="">Les différents type de BDD NoSQL</h2><ul id="2b257caf-ec93-49a6-9afc-437efa505a32" class="toggle"><li><details><summary><strong>NoSQL orienté agrégats</strong></summary><p id="49f5f575-0403-4e4d-adf3-600ca5d5c342" class="">Une des caractéristiques retrouvées dans de nombreux SGBD NoSQL est 
l&#x27;utilisation d’« agrégats de données » constitués d&#x27;un ensemble de 
données souvent « consultées/modifiées en même temps » et qui peuvent 
être déployées sur des serveurs indépendants.
À titre d&#x27;exemple considérons une application de commerce-en-ligne conçue de manière à accéder fréquemment aux informations d&#x27;un client (adresses, etc) et à l&#x27;historique de ses achats (par exemple pour lui proposer des réductions).</p><ul id="b09c4303-ebcf-4a28-ae66-8fadaa24b849" class="bulleted-list"><li style="list-style-type:disc">Un SGBD relationnel typique modélisera ce système en créant une table des informations clients et une table des achats puis en effectuant une jointure entre ces dernières à chaque opération. Cette architecture pourra poser problème lorsque le nombre de clients/achats deviendra important et sera difficile à répartir entre plusieurs serveurs.</li></ul><ul id="57997e48-db82-4f7e-9c54-25365f06ff27" class="bulleted-list"><li style="list-style-type:disc">A contrario une architecture SGBD NoSQL typique aura tendance à modéliser ce problème en un ensemble d&#x27;agrégats constitué des informations d&#x27;un client et de ses achats. Cette architecture est plus facilement scalable. En effet ces agrégats interagissent peu entre eux et peuvent facilement être répartis sur un cluster de serveurs. Cette architecture pourra par contre poser problème si pour une raison quelconque on est amené à effectuer des requêtes qui ne correspondent pas aux cas d&#x27;utilisation immédiatement considérés. Par exemple une demande de calcul du nombre total de clients ou d&#x27;achats pourra être moins efficace que dans un système relationnel qui conserve l&#x27;ensemble des clients (resp. achats) dans une table unique.</li></ul></details></li></ul><ul id="cd6eb5fc-a1a8-4d75-bf30-f7df6fd26c74" class="toggle"><li><details><summary><strong>NoSQL orienté-graphes</strong></summary><p id="8b869ecc-811e-4258-a883-39a4e7d892ed" class="">Les <a href="https://fr.wikipedia.org/wiki/Bases_de_donn%C3%A9es_orient%C3%A9es_graphe">bases de données orientées graphe</a> permettent de stocker les données sous forme de graphe et de faciliter l&#x27;écriture des requêtes en supprimant la plupart des jointures. Par 
rapport aux bases relationnelles, l&#x27;efficacité de ces bases est variable en fonction des systèmes et tâches et des configurations.
Ces données sont typiquement celles des réseaux sociaux, réseaux de transport, topologies, ou systèmes de recommandation de documents.
On distingue habituellement les<a href="https://fr.wikipedia.org/wiki/Triplestore"> triplestores</a> des bases de données orientées-graphe. Les bases de données graphe fonctionnent avec différents types de graphe (ex. : pondérés, clusters, 
graphe et tables mixtes) et offrent souvent de meilleures performances 
pour les traversées de graphes.

Prenons l&#x27;exemple d&#x27;un réseau social : dans certains cas, il devient très complexe de calculer la distance entre deux personnes non directement connectées. Et c&#x27;est ce type d&#x27;approche que résolvent les bases orientées Graphe.

Dans la base orientée graphe, les données stockées sont : les nœuds, les liens et des propriétés sur ces nœuds et ces liens. Les requêtes que l&#x27;on peut exprimer sont basées sur la gestion de chemins, de propagations, d&#x27;agrégations, voire de recommandations. Toutefois, contrairement aux solutions précédentes la distribution des nœuds sur le réseau n&#x27;est pas triviale.
</p><figure id="26735c8e-8aa6-48a7-a8fb-a7f113c475b1" class="image"><a href="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe4.png"><img style="width:1358px" src="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe4.png"/></a></figure></details></li></ul><ul id="1bf12363-01fc-498d-9fb3-5a516b987b2f" class="toggle"><li><details><summary><strong>NoSQL sans-schéma</strong></summary><p id="08eee5b7-566e-4135-a76e-8bef03e29a3c" class="">La première étape de la création d&#x27;une base de données relationnelle est de définir son schéma c&#x27;est-à-dire l&#x27;ensemble des tables la composant et l&#x27;ensemble des champs de ces tables. Cette étape crée une certaine rigidité dans l&#x27;implémentation, implique d&#x27;avoir une vision assez claire des évolutions de l&#x27;application et peut poser problème si la structure des données recueillies change dans le temps. Les systèmes NoSQL sans-schéma peuvent ignorer cette étape et stocker des données hétérogènes au fur et à mesure de leur alimentation. Cette utilisation permet une grande flexibilité et des capacités d&#x27;adaptation au niveau de la base de données. La contrepartie est que les applications qui liront la base de données devront être capables d&#x27;intégrer des données plus hétérogènes et de structure plus complexe.</p></details></li></ul><ul id="ead6b6b3-64df-41ca-b9b9-843f6bee4d50" class="toggle"><li><details><summary><strong>Orientés colonnes</strong></summary><p id="00ea3061-5fe2-4368-a7de-39470ab4fd91" class="">Traditionnellement, les données sont représentées en ligne, représentant l&#x27;ensemble des attributs. Le stockage orienté colonne change ce paradigme en se focalisant sur chaque attribut et en les distribuant. Il est alors possible de focaliser les requêtes sur une ou plusieurs colonnes, sans avoir à traiter les informations inutiles (les autres colonnes).</p><p id="ef5dde0b-8db2-4562-8015-79a5128c7328" class="">Cette solution est très adaptée pour effectuer des traitements sur des colonnes comme les agrégats (comptage, moyennes, co-occurences...). D&#x27;une manière plus concrète, elle est adaptée à de gros calculs analytiques. Toutefois, cette solution est beaucoup moins appropriée pour la lecture de données spécifiques comme pour les clés/valeurs.
</p><figure id="a6b01fd4-f67e-4a26-8637-7ead41143429" class="image"><a href="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe2.png"><img style="width:2038px" src="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe2.png"/></a></figure></details></li></ul><ul id="fc61e935-7726-443e-9438-4e084aedeae0" class="toggle"><li><details><summary><strong>Orientées clé/valeur</strong></summary><p id="de640349-76e1-4af8-bb73-36e9433b13c5" class="">Tout repose sur le couple Clé/Valeur. La clé identifie la donnée de manière unique et permet de la gérer. La valeur contient n&#x27;importe quel type de données.</p><figure id="7371c874-5903-4a40-b880-dfa4b65ce5fa" class="image"><a href="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe1.png"><img style="width:1680px" src="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe1.png"/></a></figure></details></li></ul><ul id="4da8a267-d9af-42fe-a920-dbe3894cf221" class="toggle"><li><details><summary><strong>Orientée &quot;document&quot;</strong></summary><p id="a6835a37-8d2b-46fe-b4c3-515dfff8f73f" class="">Les bases orientées documents ressemblent sans doute le plus à ce que l&#x27;on peut faire dans une base de données classique pour des requêtes complexes. Le but de ce stockage est de manipuler des documents contenant des informations avec une structure complexe (types, listes, imbrications). Il repose sur le principe du clé/valeur, mais avec une extension sur les champs qui composent ce document.</p><p id="20e148e8-055b-49ca-8795-18f0bbafc835" class="">
</p><p id="38620d85-67ad-493b-91b2-3b28e5b00647" class="">L&#x27;avantage de cette solution est d&#x27;avoir une approche structurée de chaque valeur, formant ainsi un document. De fait, ces solutions proposent des langages d&#x27;interrogation riches permettant de faire des manipulations complexes sur chaque attribut du document (et sous-documents) comme dans une base de données traditionnelles, tout en passant à l&#x27;échelle dans un contexte distribué.</p><p id="46a0c1c9-f17c-4ba9-a1d2-32fb1df9d945" class="">
</p><figure id="9ae2431f-7ab0-42ee-b25a-9ce396aafce0" class="image"><a href="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe3.png"><img style="width:1778px" src="Story%202%20-%20Introduction%20bases%20de%20donne%CC%81es%20b04d7840a6024507aa2b494a3541a600/annexe3.png"/></a></figure></details></li></ul><p id="00a528b9-4ebd-408e-884c-fdb1537ceed0" class="">
</p></div></article>
<?php 
    $content = ob_get_clean(); 

    require_once('structure/layout.php');
?>
