<?php $title = 'React'; ?>
<?php ob_start(); ?>


                <h1 id=<?php $ini=0; echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7134597-apprehendez-la-logique-de-react#/id/r-7134457" target="_blank">Quelques infos</a></h1>

                <p>
                On appelle framework front-end tout ensemble de classes, fonctions et utilitaires qui nous facilite la création d'applications web. Ces outils sont compatibles avec tous les navigateurs.
                </p>

                <p>
                En fait, la frontière entre framework et bibliothèque reste assez fine, surtout dans le cas de React ; et il n'est pas simple de séparer parfaitement l'un de l'autre.
                </p>

                <p>
                Pour faire simple, vous pouvez vous dire qu'un framework est un ensemble d'outils ultra complets permettant de créer une application de A à Z et fournissant tous les outils nécessaires au développement d'une application. Alors qu'une bibliothèque s'ajoute à une partie de votre application. 
                </p>

                <p>
                Plus généralement, le but est d'éviter de réinventer la roue pour n'importe quel besoin classique d'une application : gestion de l'interface utilisateur, des événements, du DOM, des formulaires, de l’évolution dans le temps des données manipulées par l'interface, etc. En plus, initialiser une base de code avec un framework simplifie non seulement votre prise de marques, mais aussi l’intégration d’une nouvelle personne sur la codebase.
                </p>

                <p>
                À proprement parler, React… est une bibliothèque. Mais son écosystème est tellement développé maintenant qu'on peut aussi bien le considérer comme un framework à part entière ! 🙃 Ici, j'utiliserai le terme de bibliothèque pour parler de React, mais je ne me formalise pas si j'entends quelqu'un utiliser le terme de framework.
                </p>

                <p>
                React est un projet open-source, distribué sous la licence MIT et piloté par Facebook. Leurs produits web et mobile tels que Facebook, Messenger, Instagram, reposent en grande partie sur cette technologie. Comme React est open-source, vous pouvez accéder au code source directement sur GitHub, proposer une feature, ou même notifier d'un problème (issue).
                </p>

                <p>
                L'ambition de React est de créer des interfaces utilisateurs, avec un outil rapide et modulaire. L'idée principale derrière React est que vous construisiez votre application à partir de composants.
                </p>

                <p>
                Un composant regroupe à la fois le HTML, le JS et le CSS, créés sur mesure pour vos besoins, et que vous pouvez réutiliser pour construire des interfaces utilisateurs.
                </p>

                <p>
                React lui-même ne manipule pas directement le DOM du navigateur. À la place, React génère un DOM virtuel, distinct du DOM des navigateurs. Au moment venu, il réconcilie ce DOM virtuel avec le DOM du navigateur, en prenant soin de minimiser le nombre d'opérations nécessaires. C’est ce qui nous permet d’avoir de super performances, et d’utiliser React dans de nombreux contextes, et pas seulement au sein du navigateur même, typiquement les applications mobiles natives, etc.
                </p>

                <p>
                <a href="https://fr.reactjs.org/docs/getting-started.html">La doc de react.</a>  
                </p>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7134597-apprehendez-la-logique-de-react#/id/r-7134457" target="_blank">Les composants</a></h1>

                <p>
                Les composants sont essentiels dans React.
                </p>

                <p>
                Une interface est toujours constituée de différents éléments : des boutons, des listes, des titres, des sous-titres. Une fois rassemblés, ces éléments constituent une interface utilisateur ou UI. Si je prends l’exemple de la maquette de notre site de plantes, vous voyez la barre de menu, le panier, et que pour chaque article, il y a un nom, une photo, une description.
                </p>

                <img src="../images/16109867335116_P1C3-2.png">

                <p>
                Avec React, chacune de ces parties qu’on va pouvoir réutiliser correspond à un composant. Ils contiennent tout ce qui est nécessaire à leur bon fonctionnement : la structure, les styles et le comportement (par exemple, les actions qui sont déclenchées quand on clique dessus).
                </p>

                <p>
                Les composants nous permettent d’utiliser la même structure de données, et de remplir ces structures avec différents jeux de données. Peu importe le nombre de plantes que vous aurez à mettre dans La maison jungle, vous pourrez les exploiter pour afficher vos données sans aucun effort. Et si dans le futur, vous avez besoin de créer une nouvelle page avec la même présentation, vous pourrez réutiliser le même composant.
                </p>

                <p>
                La majorité de nos composants sont eux-mêmes créés en combinant d’autres composants plus simples.
                </p>

                <p>
                Vous savez que le HTML est une suite d’instructions que le navigateur doit suivre pour construire le DOM. Eh bien, React vient directement modifier le DOM pour vous : il suffit juste de lui donner les instructions de ce que vous souhaitez faire.
                </p>

                <p>
                Pour faire simple : en utilisant <code class="line_code">React.createElement</code>, React crée d’abord ses éléments dans le DOM virtuel, puis il vient prévenir le DOM au moment de sa création, “Hé, rajoute-moi une balise h1 avec le texte La maison jungle   dedans”.
                </p>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7134800-ecrivez-du-code-modulaire-avec-les-composants-en-jsx#/id/r-7134755" target="_blank">JSX</a></h1>

                <p>
                Vous avez découvert que les éléments renvoient des objets avec tout un ensemble de propriétés spécifiques, et que React vient les créer avec createElement. Mais vous vous doutez que les développeurs React ne manipulent pas ces objets directement. Non, à la place, ils utilisent le JSX.
                </p>

                <p>
                Il s’agit de l'extension JavaScript créée par React, qui permet d’utiliser notre syntaxe sous forme de tags directement dans le code JavaScript.
                </p>

                <p>
                Lorsqu’on a ça :
                </p>

                <figure class="block_code">
    				<pre><code>
function Header() {
    return (&ltdiv&gt
        &lth1&gtLa maison jungle&lt/h1&gt
    &lt/div&gt)
}
					</code></pre>
				</figure>

                <p>
                ... et qu’on le réutilise avec <code class="line_code">&ltHeader /&gt</code>, on pourrait croire qu’il s’agit de HTML. Ça a un peu la même tête, mais il s’agit de JSX ! Eh oui, JSX est la manière la plus compréhensible d’écrire des composants React dans une application, et donc la manière qui est quasiment toujours utilisée. Il s'agit d'ailleurs de la spécificité de React : contrairement aux autres frameworks où on écrit du HTML enrichi, les équipes de React ont créé le JSX, leur propre syntaxe basée sur JavaScript, qui permet de mêler HTML et JS.
                </p>

                <p>
                On a bien créé un composant Header et pas header. Il est essentiel de mettre une majuscule à nos composants JSX, sinon React ne saura pas qu'il s'agit d'un composant, et pensera qu'il s'agit juste d'une balise HTML.
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7134800-ecrivez-du-code-modulaire-avec-les-composants-en-jsx#/id/r-7137491" target="_blank">Composez vos composants</a></h2>

                <p>
                Reprenons notre composant <code class="line_code">&ltHeader /&gt</code>. Il est un peu tout seul, vous ne trouvez pas ?
                </p>

                <p>
                On va lui ajouter un composant <code class="line_code">&ltDescription /&gt</code> :
                </p>

                <figure class="block_code">
    				<pre><code>
function Description() {
    return (&ltp&gtIci achetez toutes les plantes dont vous avez toujours rêvé 🌵🌱🎍&lt/p&gt)
}
					</code></pre>
				</figure>

                <p>Et on le rajoute dans le render :</p>

                <figure class="block_code">
    				<pre><code>
ReactDOM.render(&ltHeader /&gt&ltDescription /&gt, document.getElementById("root"))			
                    </code></pre>
				</figure>

                <p>
                    Attention : deux composants doivent toujours être wrappés dans un seul composant parent.
                </p>

                <p>
                On doit donc faire :
                </p>

                <figure class="block_code">
    				<pre><code>
ReactDOM.render(&ltdiv&gt&ltHeader /&gt&ltDescription /&gt&lt/div&gt, document.getElementById("root"))			
                    </code></pre>
				</figure>

                <p>
                React met également à notre disposition un outil, les Fragments, si on veut wrapper deux composants dans un seul parent sans que le parent apparaisse dans le DOM. Pour ça, vous pouvez faire :
                </p>
                
                <figure class="block_code">
    				<pre><code>
ReactDOM.render(&ltReact.Fragment&gt&ltHeader /&gt&ltDescription /&gt&lt/React.Fragment&gt, document.getElementById("root"))			
                    </code></pre>
				</figure>

                <p>
                Comme je vous l’ai expliqué, le propre de React est de nous encourager à réutiliser nos composants. On va donc structurer notre interface en arborescences de composants.
                </p>

                <p>
                Regroupons notre Titre et notre Description dans une bannière :
                </p>

                <figure class="block_code">
    				<pre><code>
function Banner() {
    return (&ltdiv&gt
        &ltHeader /&gt
        &ltDescription /&gt
    &lt/div&gt)
}		
                    </code></pre>
				</figure>

                <p>
                Et nous pourrions également les encapsuler, et les utiliser autant de fois que nous le souhaitons comme ci-dessous :
                </p>

                <figure class="block_code">
    				<pre><code>
&ltParent&gt
    &ltEnfant /&gt
    &ltEnfant /&gt
    &ltEnfant /&gt
&lt/Parent&gt
                    </code></pre>
				</figure>

                <p>
                Vous remarquez d'ailleurs que tous nos composants sont bien fermés. En JSX, toutes les balises doivent être fermées, y compris les éléments HTML autofermants tels que input.
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7134800-ecrivez-du-code-modulaire-avec-les-composants-en-jsx#/id/r-7137496" target="_blank">Manipulez des données</a></h2>

                <p>
                En React, les accolades <code class="line_code">{</code> et <code class="line_code">}</code> sont également particulièrement utiles. Dès qu'il s'agit d'expressions JavaScript, elles sont écrites entre accolades.
                </p>

                <p>
                Ça nous permet d'appliquer des expressions JavaScript directement dans notre JSX pour : 
                <ul>
                    <li>faire des maths : <code class="line_code">&ltdiv&gtLa grande réponse sur la vie, l'univers et le reste est { 6 * 7 } &lt/div&gt</code></li>
                    <li>modifier des chaînes de caractères : <code class="line_code">&ltdiv&gt{ alexia.toUpperCase() }&lt/div&gt</code></li>
                    <li>utiliser des ternaires : <code class="line_code">&ltdiv&gt{ 2 > 0 ? 'Deux est plus grand que zéro' : 'Ceci n'apparaîtra jamais }&lt/div&gt</code></li>
                    <li>Ou même tout simplement pour afficher une variable JS : : <code class="line_code">&ltdiv&gt{ myTitle }&lt/div&gt</code></li>
                </ul>
                </p>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7135204-prenez-en-main-create-react-app#/id/video_Player_1" target="_blank">Create React App</a></h1>


                <p>
                Les développeuses et développeurs utilisent des outils automatisés pour créer une base de code, qui dispose des outils essentiels déjà préconfigurés. Pour vous citer quelques-unes des fonctionnalités de ces outils, ils permettent de :
                <ul>
                    <li>gérer les différentes dépendances (bibliothèques) utilisées par notre app ;</li>
                    <li>optimiser le chargement de notre code dans les navigateurs ;</li>
                    <li>importer du CSS et des images ;</li>
                    <li>gérer les différentes versions de JavaScript ;</li>
                    <li>faciliter l'expérience de développement, en rechargeant la page lorsque le code est modifié.</li>
                </ul>
                </p>

                <p>
                Également créé par les équipes de Facebook, Create React App est un outil qui vous aidera à faire tout ce que je viens de vous citer. S'il existe d'autres outils (Next, Gatsby, Parcel, etc.), Create React App reste la référence, notamment pour les nouveaux utilisateurs de React.
                </p>

                <p>
                Create React App va vous permettre de générer un squelette de code pour votre application. Il embarque un certain nombre d'outils préconfigurés, tels que Webpack, Babel et ESLint, afin de vous garantir la meilleure expérience de développement possible.
                </p>

                <p>
                    ...
                </p>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7135359-incorporez-du-style-et-des-assets-a-votre-projet#/id/video_Player_1" target="_blank">Un peu de style</a></h1>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7135359-incorporez-du-style-et-des-assets-a-votre-projet#/id/r-7135265" target="_blank">Exploitez les classNames</a></h2>


                <p>
                Comme en HTML, nous pouvons associer des attributs à nos éléments. Les attributs HTML tels que <code class="line_code">id</code>, <code class="line_code">href</code> pour un lien, <code class="line_code">src</code> pour une balise <code class="line_code">&ltimg /&gt</code>, fonctionnent normalement en JSX.
                </p>

                <p>
                En revanche, il existe des mots réservés en JavaScript, tels que <code class="line_code">class</code>. Il suffit pour cela d'utiliser l'attribut <code class="line_code">className</code>, et de lui préciser une string. 
                </p>

                <p>
                Créons dans <code class="line_code">/src</code> un dossier <code class="line_code">/styles</code> qui va regrouper nos fichiers CSS. On peut y glisser <code class="line_code">index.css</code> en n'oubliant pas de modifier le path relatif pour importer <code class="line_code">index.css</code> dans <code class="line_code">index.js</code>.
                </p>

                <p>
                Je crée donc mon fichier  Banner.css   qui va me permettre de styliser mon composant. Ce qui nous donne une organisation comme dans la capture d'écran ci-dessous : 👇
                </p>

                <img src="../images/16106098192817_image6.png">

                <p>
                Dans  Banner.js  , je wrappe mon  h1   dans une div à laquelle je précise la className  lmj-title   (“lmj” pour la maison jungle, bien sûr !) :
                </p>

                <figure class="block_code">
    				<pre><code>
&ltdiv className='lmj-banner'&gt
    &lth1&gtLa maison jungle&lt/h1&gt
&lt/div&gt
                    </code></pre>
				</figure>

                <p>
                Et retour dans notre fichier  Banner.css  , où on crée la classe correspondante :
                </p>

                <figure class="block_code">
    				<pre><code>
.lmj-banner {
    color: black;
    text-align: right;
    padding: 32px;
    border-bottom: solid 3px black;
}
                    </code></pre>
				</figure>


                <p>
                Puis on import le fichier. Il suffit de rajouter dans notre fichier  Banner.js   :
                </p>

                <figure class="block_code">
    				<pre><code>
import '../styles/Banner.css'
                    </code></pre>
				</figure>

                <p>
                Et ça y est ! Notre style est appliqué !
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7135359-incorporez-du-style-et-des-assets-a-votre-projet#/id/r-7137511" target="_blank">L'attribut style</a></h2>

                <p>
                    Les éléments React acceptent également l'attribut  style  pour styliser un composant. À la différence des éléments HTML, pour lesquels cet attribut est également accepté, il faut lui passer un objet en paramètre. On appelle cette méthode du inline style. 
                </p>

                <p>
                    On ne l'utilise pas vraiment dans les faits et lui préfère la méthode précédente className. Voir la video dans le cours OC (lien dans le titre) pour plus d'informations. 
                </p>
                
                <p>
                Ici je vous ai montré la méthode des classNames, combinées avec de simples fichiers CSS, et l'attribut style. Ces méthodes restent simples et efficaces. Mais sachez qu’il existe de nombreuses autres manières de styliser son application, en utilisant par exemple les CSS modules intégrés directement par Create React App (en anglais), ou en ajoutant des bibliothèques tierces. Vous pouvez par exemple utiliser Sass, ou bien encore (c’est ma technique préférée) le CSS in JS. Et même pour ça, il existe également plusieurs manières de faire.
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://medium.com/how-to-react/use-sass-in-react-js-bbeb0b94f8a6" target="_blank">React + Sass</a></h2>

                <p>
                    <ol>
                        <li>Create your React js project : <code class="line_code">yarn create react-app sass-react-medium</code></li>
                        <li>Now install the node-sass module to your react project : <code class="line_code">yarn add node-sass</code></li>
                        <li>In your project src directory create an <code class="line_code">app.scss</code> file.</li>
                        <li>Now add the below code in your app.js file : <code class="line_code">import './App.scss';</code></li>
                        <li>Open your <code class="line_code">app.scss</code> file and add sass code there.</li>
                    </ol>
                    C'est selon le tuto, moi je mettrai main.scss à la place de App. A tester. 
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7135359-incorporez-du-style-et-des-assets-a-votre-projet#/id/r-7137516" target="_blank">Les images</a></h2>

                <p>
                Toujours dans <code class="line_code">/src</code>, on crée un dossier <code class="line_code">/assets</code> dans lequel on vient mettre notre fichier <code class="line_code">logo.png</code>.
                </p>

                <p>
                Pour l’importer dans votre code, vous pouvez maintenant faire de la manière suivante. Dans <code class="line_code">Banner.js</code> :
                </p>

                <figure class="block_code">
    				<pre><code>
import logo from '../assets/logo.png'
                    </code></pre>
				</figure>

                <p>
                Vous voyez ici, on déclare en fait une variable logo à laquelle on assigne le contenu de notre image.
                </p>

                <p>
                Puis vous pouvez l'utiliser dans un élément img, ce qui nous donne pour notre <code class="line_code">Banner.js</code> :
                </p>

                <figure class="block_code">
    				<pre><code>
import logo from '../assets/logo.png'
import '../styles/Banner.css'

function Banner() {
    const title = 'La maison jungle'
    return (
        &ltdiv className='lmj-banner'&gt
            &ltimg src={logo} alt='La maison jungle' className='lmj-logo' /&gt
            &lth1 className='lmj-title'&gt{title}&lt/h1&gt
        &lt/div&gt
    )
}

export default Banner
                    </code></pre>
				</figure>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7135593-gagnez-en-temps-et-en-efficacite-grace-aux-listes-et-aux-conditions#/id/video_Player_1" target="_blank">Listes et conditions</a></h1>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7135593-gagnez-en-temps-et-en-efficacite-grace-aux-listes-et-aux-conditions#/id/r-7135461" target="_blank"><code class="line_code">map()</code></a></h2>


                <p>
                En code, vous serez très souvent confronté à des listes de données qui présentent la même structure. Bonne nouvelle ! ✨ Pas besoin de vous faire des crampes à force de copier-coller : vous pouvez directement itérer sur votre contenu et générer des composants React dessus.
                </p>

                <p>
                La méthode JavaScript <code class="line_code">map()</code> passe sur chaque élément d'un tableau. Elle lui applique une fonction, et renvoie un nouveau tableau contenant les résultats de cette fonction appliquée sur chaque élément.
                </p>

                <p>
                Par exemple, pour une fonction qui doublerait la valeur d'un élément, cela donne :
                </p>

                <figure class="block_code">
    				<pre><code>
const numbers = [1, 2, 3, 4]
const doubles = numbers.map(x => x * 2) // [2, 4, 6, 8]
                    </code></pre>
				</figure>

                <p>
                Dans notre cas, elle va nous permettre de prendre une liste de données, et de la transformer en liste de composants.
                </p>

                <div class="em">La méthode <code class="line_code">map()</code> permet facilement d'itérer sur des données et de retourner un tableau d'éléments. Comme elle, les méthodes <code class="line_code">forEach()</code>, <code class="line_code">filter()</code>, <code class="line_code">reduce()</code>, etc., qui permettent de manipuler des tableaux, seront également vos alliés en React.</div>

                <p>
                On va donc créer un composant <code class="line_code">ShoppingList.js</code> pour notre magasin de plantes. Dans ce fichier, on déclare une variable plantList qui contient notre liste de plantes. Et on ajoute en dessous le composant lui-même :
                </p>

                <figure class="block_code">
    				<pre><code>
const plantList = [
    'monstera',
    'ficus lyrata',
    'pothos argenté',
    'yucca',
    'palmier'
]

function ShoppingList() {
    return (
        &ltul&gt
            {plantList.map((plant) => (
                &ltli&gt{plant}&lt/li&gt
            ))}
        &lt/ul&gt
    )
}

export default ShoppingList
                    </code></pre>
				</figure>

                <p>
                Pour chaque entrée du tableau, on retourne un élément &ltli&gt.
                </p>

                <p>
                On importe ShoppingList.js dans &ltApp /&gt  : super ! On a notre liste de composants ! 🎉 Cependant il manque un élément essentiel : le prop <code class="line_code">key</code>
                </p>

                <p>
                <a href="https://fr.reactjs.org/docs/lists-and-keys.html">La documentation de React</a> est claire sur ce sujet : les <code class="line_code">key</code> (clés) aident React à identifier quels éléments d’une liste ont changé, ont été ajoutés ou supprimés. Vous devez donner une clé à chaque élément dans un tableau, afin d’apporter aux éléments une identité stable.
                </p>

                <p>
                Si vous voulez éviter les bugs, une  key  doit impérativement respecter deux principes :
                <ol>
                    <li>Elle doit être unique au sein du tableau. </li>
                    <li>Et stable dans le temps (pour la même donnée source, on aura toujours la même valeur de key).</li>
                </ol>
                </p>

                <p>
                Souvenez-vous, je vous avais parlé du DOM virtuel dans la partie précédente. Eh bien, la  key   permet d'associer une donnée au composant correspondant dans le DOM virtuel qui permettra ensuite de générer les composants. 
                </p>

                <p>
                Nous avons plusieurs méthodes pour générer une <code class="line_code">key</code> unique :
                <ul>
                    <li>La méthode la plus simple et la plus fiable consiste à utiliser l'id associée à votre donnée dans votre base de données.</li>
                    <li>Vous pouvez également trouver un moyen d'exploiter la valeur de la donnée, si vous avez la certitude qu'elle sera toujours unique, et stable dans le temps.</li>
                    <li>En dernier recours, vous pouvez définir une string et la combiner avec l'index de la data dans votre tableau.</li>
                </ul>
                </p>

                <p>
                Dans notre cas, puisqu'il n'y a pas d'id associée, on peut faire une combinaison entre l'index et le nom de la plante qui est une string :
                </p>

                <figure class="block_code">
    				<pre><code>
function ShoppingList() {
    return (
        &ltul&gt
            {plantList.map((plant, index) => (
                &ltli key={`${plant}-${index}`}&gt{ plant }&lt/li&gt
            ))}
        &lt/ul&gt
    )
}

export default ShoppingList
                    </code></pre>
				</figure>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7135593-gagnez-en-temps-et-en-efficacite-grace-aux-listes-et-aux-conditions#/id/r-7135556" target="_blank">Contextualisez le contenu de vos composants</a></h2>

                <p>
                React nous permet de faire des listes de composants : un gain de temps énorme dans votre vie de développeur. Mais ce n'est pas tout ! Le JSX nous permet également d'afficher des éléments de manière conditionnelle dans nos composants.
                </p>

                <p>
                Vous vous souvenez, dans la première partie, je vous avais dit que React permet d'évaluer directement une expression JavaScript dans le JSX ? Que les accolades permettent d'écrire un ternaire directement pour afficher un élément ou un autre ? 
                </p>

                <p>
                Eh bien, nous allons pousser cette logique plus loin pour changer certaines parties de notre composant selon le contexte.
                </p>

                <p>
                Dans notre liste de plantes <code class="line_code">plantList.js</code>, je vais rajouter une catégorie <code class="line_code">isBestSale</code> correspondant à un booléen qui nous indique si notre plante fait partie des meilleures ventes. Ce qui nous donne pour le premier élément :
                </p>

                <p>
                <figure class="block_code">
    				<pre><code>
{
    name: 'monstera',
    category: 'classique',
    id: '1ed',
    isBestSale: true
},
                    </code></pre>
				</figure>
                </p>

                <p>
                Maintenant que nous avons notre booléen, nous allons utiliser un ternaire pour afficher un emoji en fonction. Dans <code class="line_code">ShoppingList.js</code>, au niveau de l'affichage du nom, je rajoute :
                </p>

                <figure class="block_code">
    				<pre><code>
{plantList.map((plant) => (
    &ltli key={ plant.id }&gt
        {plant.isBestSale ? &ltspan&gt🔥&lt/span&gt : &ltspan&gt👎&lt/span&gt}
    &lt/li&gt
))}
                    </code></pre>
				</figure>

                <p>
                Ce qui nous donne :
                </p>

                <img src="../images/16106132557283_image13.png">

                <p>
                Mais vous savez quoi ? Il existe une manière encore plus simple d'écrire ça : vous pouvez utiliser <code class="line_code">&&</code>.
                </p>

                <p>
                Indiquée entre accolades, <code class="line_code">&&</code> précède un élément JSX et précise que l'élément ne sera généré que si la condition est respectée. On peut donc écrire si on ne veut que 🔥 :
                </p>

                <figure class="block_code">
    				<pre><code>
{plant.isBestSale && &ltspan&gt🔥&lt/span&gt}
                    </code></pre>
				</figure>

                <p>
                Vous pouvez d'ailleurs chaîner les conditions. Si par exemple, vous vouliez afficher le 🔥 pour les plantes qui sont des <code class="line_code">isBestSale</code> ET dans la category classique :
                </p>

                <figure class="block_code">
    				<pre><code>
{{plant.isBestSale && plant.category === "classique" && &ltspan&gt🔥&lt/span&gt}
                    </code></pre>
				</figure>

                <p>
                De la même manière, si vous aviez voulu que le 🔥 s'affiche à côté des plantes qui sont <code class="line_code">isBestSale</code> OU dans la category classique :
                </p>

                <figure class="block_code">
    				<pre><code>
{{plant.isBestSale || plant.category === "classique" && &ltspan&gt🔥&lt/span&gt}
                    </code></pre>
				</figure>

                <p>
                Mais gare à la propreté du code. Si vous avez trop de conditions, je vous conseille de les sortir de ce qui est retourné par votre fonction. 😉
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7135593-gagnez-en-temps-et-en-efficacite-grace-aux-listes-et-aux-conditions#/id/r-7135556" target="_blank">Les autres méthodes pour personnaliser les composants</a></h2>

                <p>
                     Il en existe beaucoup. Voir la doc ou <a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7135593-gagnez-en-temps-et-en-efficacite-grace-aux-listes-et-aux-conditions#/id/video_Player_2">la video ici</a>
                </p>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7135822-reutilisez-vos-composants-avec-les-props#/id/video_Player_1" target="_blank">Les props</a></h1>

                <p>
                    Pour être réutilisés, les composants requièrent souvent une configuration. Bonne nouvelle : pour ça, vous allez pouvoir utiliser les props. 🎉
                </p>
                

                <p>
                Et si je vous disais que vous avez déjà utilisé une prop ? Eh oui, la prop <code class="line_code">key</code> dans le chapitre sur les listes ! Vous avez donc déjà vu la syntaxe.
                </p>

                <p>
                Revenons à notre site de plantes. Nous allons maintenant créer un nouveau composant qui va être réutilisé. L'idée est de créer une échelle d'arrosage et une échelle de luminosité pour chaque plante.
                </p>

                <p>
                Rouvrons <code class="line_code">ShoppingList.js</code>, où nous ajoutons les données correspondantes dans <code class="line_code">plantList</code> : 
                <ul>
                    <li>une donnée <code class="line_code">water</code> qui correspond à l'arrosage conseillé pour chaque plante ;</li>
                    <li>et une donnée <code class="line_code">light</code> qui correspond à l'ensoleillement nécessaire.</li>
                </ul>
                </p>

                <p>
                Commençons par la lumière : dans chaque item plante, on vient ajouter un composant <code class="line_code">CareScale</code> et on lui passe la prop value :
                </p>

                <figure class="block_code">
    				<pre><code>
&ltCareScale scaleValue={plant.light} /&gt
                    </code></pre>
				</figure>

                <p>
                    On va utiliser une echelle de 1 à 3 et récupérer les props dans les paramètres de la fonction qui définit notre composant.
                </p>

                <figure class="block_code">
    				<pre><code>
function CareScale(props) {
    const scaleValue = props.scaleValue

    const range = [1, 2, 3]

    return (
        &ltdiv&gt
            {range.map((rangeElem) =>
                scaleValue >= rangeElem ? &ltspan key={rangeElem.toString()}&gt☀️&lt/span&gt : null
            )}
        &lt/div&gt
    )
}
                    </code></pre>
				</figure>


                <div class="em">Les props sont donc des objets que l'on peut récupérer dans les paramètres de notre composant fonction.</div>


                <p>
                On va pousser la logique un peu plus loin afin de véritablement paramétrer notre composant.
                </p>

                <p>
                Je vais commencer par préciser une <code class="line_code">prop</code> de <code class="line_code">type</code> pour mon composant <code class="line_code">CareScale</code> et réutiliser ce composant entre l'ensoleillement et l'arrosage :
                </p>

                <figure class="block_code">
    				<pre><code>
&ltCareScale careType='water' scaleValue={plant.water} /&gt
&ltCareScale careType='light' scaleValue={plant.light} /&gt
                    </code></pre>
				</figure>

                <p>
                Il faut maintenant que j'adapte <code class="line_code">CareScale</code> pour récupérer le <code class="line_code">careType</code>.
                </p>

                <div class="em">
                    À partir de maintenant, je vais utiliser une syntaxe qui nous est permise depuis l'ES6 : la déstructuration. Elle permet directement de déclarer une variable et de lui assigner la valeur d'une propriété d'un objet.<br>
                    Ici on peut donc faire :
                    <figure class="block_code">
                        <pre><code>
    const {scaleValue, careType} = props
    // On évite de multiplier les déclarations qui sans cette syntaxe auraient été :
    // const scaleValue = props.scaleValue et
    // const careType = props.careType
                        </code></pre>
                    </figure>
                    Cela nous permet de déclarer directement nos deux variables <code class="line_code">scaleValue</code> et <code class="line_code">careType</code>, et de les assigner aux valeurs passées en props. On peut même directement l'écrire dans les paramètres :
                    <figure class="block_code">
                        <pre><code>
    function CareScale({scaleValue, careType}) {
                        </code></pre>
                    </figure>
                </div>

                <p>
                On peut donc maintenant paramétrer notre composant <code class="line_code">CareScale</code> pour qu'il puisse gérer les données d'arrosage et les données d'ensoleillement :
                </p>

                <figure class="block_code">
                        <pre><code>
function CareScale({ scaleValue, careType }) {
    const range = [1, 2, 3]
    
    const scaleType = careType === 'light' ? '☀️' : '💧'

    return (
        &ltdiv&gt
            {range.map((rangeElem) => scaleValue >= rangeElem ? &ltspan key={rangeElem.toString()}&gt{scaleType}&lt/span&gt : null
            )}
        &lt/div&gt
    )
}
                    </code></pre>
                </figure>

                <p>
                Comme vous l'avez vu ici, nous avons utilisé deux syntaxes différentes pour nos props. Pour <code class="line_code">scaleType</code>, nous lui avons assigné une <code class="line_code">string</code>, entre guillemets. En revanche, pour <code class="line_code">scaleValue</code>, nous lui avons attribué la valeur d'un objet, que nous avons passée entre accolades.
                </p>

                <p>
                En pratique, une prop peut avoir n’importe quelle valeur possible en JavaScript, mais syntaxiquement, en JSX, on n’a en gros que deux possibilités :
                <ul>
                    <li>un littéral  String , matérialisé par des guillemets ;</li>
                    <li>ou, pour tout le reste (booléen, number, expression Javascript, etc.), des accolades {}.</li>
                </ul>
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7135822-reutilisez-vos-composants-avec-les-props#/id/r-7135770" target="_blank">L'héritage'</a></h2>

                <p>
                Les props nous permettent donc de configurer nos composants. Elles répondent à la logique même de React selon laquelle les données descendent à travers notre arborescence de composants : il s'agit d'un flux de données unidirectionnel.
                </p>

                <img src="../images/16109926616554_P2C4-2.png">

                <p>
                Comme vous pouviez vous en douter, un composant est le parent du composant défini dans le <code class="line_code">return()</code>.
                </p>

                <p>
                Dans notre exemple, <code class="line_code">CareScale</code> est l'enfant, et <code class="line_code">ShoppingList</code> est le parent.
                </p>

                <p>
                Pour les props, vous devez garder deux règles à l'esprit :
                <ul>
                    <li>Une prop est toujours passée par un composant parent à son enfant : c’est le seul moyen normal de transmission.</li>
                    <li>Une prop est considérée en lecture seule dans le composant qui la reçoit.</li>
                </ul>
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7135822-reutilisez-vos-composants-avec-les-props#/id/r-7135769" target="_blank">props techniques</a></h3>

                <p>
                Il existe chez React des props qui ont un comportement un peu particulier : nous les appelons les props techniques. 🛠
                </p>

                <p>
                La syntaxe de cette prop est particulière, puisqu'elle n’est pas fournie à l’aide d’un attribut, mais en imbriquant des composants à l’intérieur du composant concerné :
                </p>

                <figure class="block_code">
                        <pre><code>
&ltParent&gt
    &ltEnfant1 /&gt
    &ltEnfant2 /&gt
&lt/Parent&gt
                    </code></pre>
                </figure>

                <p>
                Par exemple, si on utilise <code class="line_code">children</code> pour réécrire la Banner, cela nous donnerait dans <code class="line_code">App.js</code> :
                </p>

                <figure class="block_code">
                        <pre><code>
 &ltBanner&gt
    &ltimg src={logo} alt='La maison jungle' /&gt
    &lth1 className='lmj-title'&gtLa maison jungle&lt/h1&gt
&lt/Banner&gt
                    </code></pre>
                </figure>

                <p>
                Ici, <code class="line_code">img</code> et <code class="line_code">h1</code> sont les nœuds enfants dans le DOM de <code class="line_code">Banner</code>.
                </p>

                <p>
                Et on peut accéder à ces nœuds enfants de Banner dans ses paramètres, un peu de la même manière qu'on récupérerait des props :
                </p>


                <figure class="block_code">
                        <pre><code>
function Banner({ children }) {
    return &ltdiv className='lmj-banner'&gt{children}&lt/div&gt
}
                    </code></pre>
                </figure>

                <p>
                Cette manière d'utiliser <code class="line_code">children</code> est particulièrement utile lorsqu'un composant ne connaît pas ses enfants à l'avance, par exemple pour une barre de navigation (Sidebar) ou bien pour une modale.
                </p>


                <div class="em">React a créé les PropTypes, qui nous permettent de préciser dès le début le type d'une prop, si elle est requise, et de lui attribuer une valeur par défaut. Nous ne les verrons pas dans ce cours, mais vous pouvez y <a href="https://fr.reactjs.org/docs/typechecking-with-proptypes.html#gatsby-focus-wrapper">jeter un œil</a> dès maintenant.</div>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7136084-interagissez-avec-vos-composants-grace-aux-evenements#/id/video_Player_1" target="_blank">Les événements en React</a></h1>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7136084-interagissez-avec-vos-composants-grace-aux-evenements#/id/r-7135875" target="_blank">La syntaxe</a></h2>

                <p>
                Quelques caractéristiques de la déclaration d'un événement en React :
                    <ul>
                        <li>l'événement s'écrit dans une balise en camelCase;</li>
                        <li>vous déclarez l'événement à capter, et lui passez entre accolades la fonction à appeler ;</li>
                        <li>contrairement au JS, dans la quasi totalité des cas, vous n'avez pas besoin d'utiliser addEventListener.</li>
                    </ul>
                </p>

                <p>
                Testons ça dès maintenant dans notre code. Dans <code class="line_code">components/PlantItem.js</code>, je vais déclarer une fonction <code class="line_code">handleClick</code> qui vient faire un log dans notre console :
                </p>

                <p>
                <figure class="block_code">
                        <pre><code>
function handleClick() {
    console.log('✨ Ceci est un clic ✨')
}
                    </code></pre>
                </figure>
                </p>

                <p>
                    On ajoute maintenant <code class="line_code">onClick={handleClick}</code> dans la  balise <code class="line_code">li</code> du composant <code class="line_code">PlantItem</code>. On a donc :
                </p>

                <figure class="block_code">
                        <pre><code>
&ltli className='lmj-plant-item' onClick={handleClick(name)}&gt
    &ltimg className='lmj-plant-item-cover' src={cover} alt={`${name} cover`} /&gt
    {name}
    &ltdiv&gt
        &ltCareScale careType='water' scaleValue={water} /&gt
        &ltCareScale careType='light' scaleValue={light} /&gt
    &lt/div&gt
&lt/li&gt
                    </code></pre>
                </figure>

                <p>
                J'ouvre la console : yeeeees ! Ça fonctionne comme prévu ! 🎉
                </p>

                <p>
                Je vais pousser cet exercice un peu plus loin : on va déclencher une alerte qui affiche le nom de la plante sur laquelle on a cliqué.
                </p>

                <p>
                On passe donc <code class="line_code">plantName</code> en paramètre de handleClick comme ici :
                </p>

                <figure class="block_code">
                        <pre><code>
function handleClick(plantName) {
    alert(`Vous voulez acheter 1 ${plantName} ? Très bon choix 🌱✨`)
}
                    </code></pre>
                </figure>

                <p>
                Mais si je clique, ça ne marche pas : En effet, React passe par défaut un objet (que nous aborderons dans quelques minutes), mais ici, nous voulons lui spécifier notre propre argument.
                </p>

                <p>
                Pour cela, c'est très simple : on déclare une fonction directement dans <code class="line_code">onClick</code> (les fonctions fléchées sont très pratiques pour ça). Cette fonction appellera handleClick en lui passant <code class="line_code">name</code> en paramètre. Donc on a : 
                </p>

                <figure class="block_code">
                        <pre><code>
onClick={() => handleClick(name)}
                    </code></pre>
                </figure>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7136084-interagissez-avec-vos-composants-grace-aux-evenements#/id/r-7135913" target="_blank">Les événements synthétiques</a></h2>

                <p>
                    <a href="https://fr.reactjs.org/docs/events.html">Voici la doc</a>.
                </p>

                <p>
                Donc, je vous parlais de l'objet que React passe par défaut en paramètre aux fonctions indiquées en callback des événements. Voyons voir à quoi ça ressemble. 🕵️‍♀️
                </p>

                <p>
                Si je récupère le paramètre dans handleClick :
                </p>

                <figure class="block_code">
                        <pre><code>
function handleClick(e) {
    console.log('✨ Ceci est mon event :', e)
}
                    </code></pre>
                </figure>

                <p>
                j'obtiens ça :
                </p>

                <img src="../images/16106217909369_image11.png">

                <p>
                Il s'agit en fait d'un événement synthétique. Pour faire bref, il s'agit de la même interface que pour les événements natifs du DOM, sauf qu'ils sont compatibles avec tous les navigateurs.
                </p>

                <p>
                Vu qu'il s'agit de la même interface que pour les événements natifs du DOM, est-ce qu'on a aussi accès à <code class="line_code">preventDefault</code> et <code class="line_code">stopPropagation</code> ? 
                </p>

                <p>
                Tout à fait ! Vous pouvez utiliser ces méthodes avec le paramètre récupéré dans la fonction passée à l'événement.
                </p>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7136084-interagissez-avec-vos-composants-grace-aux-evenements#/id/r-7137526" target="_blank">Les formulaires</a></h1>

                <p>
                Il existe deux grandes manières de gérer les formulaires : la manière contrôlée et la manière non contrôlée. J'aborderai assez rapidement la manière non contrôlée, parce qu'elle nécessite moins d'implication de React, et que React encourage l'utilisation des formulaires contrôlés.
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7136084-interagissez-avec-vos-composants-grace-aux-evenements#/id/r-7135944" target="_blank">Les formulaires non contrôlés</a></h2>

                <p>
                Je vous fais une petite démo d'un formulaire non contrôlé. Sur notre app, directement dans <code class="line_code">App.js</code>, je mets un composant <code class="line_code">QuestionForm</code> que je vais déclarer dans un fichier à part. Nous allons ajouter un champ pour une question.<br>
                Donc pour ça je crée un form, qui englobe mon input :
                </p>

                <p>
                <figure class="block_code">
                        <pre><code>
&ltform onSubmit={handleSubmit}&gt
    &ltinput type='text' name='my_input' defaultValue='Tapez votre texte' /&gt
    &ltbutton type='submit'&gtEntrer&lt/button&gt
&lt/form&gt
                    </code></pre>
                </figure>
                </p>

                <p>
                Et pour <code class="line_code">handleSubmit</code>, cela donne :
                </p>

                <p>
                <figure class="block_code">
                        <pre><code>
function handleSubmit(e) {
    e.preventDefault()
    alert(e.target['my_input'].value)
}
                    </code></pre>
                </figure>
                </p>

                <p>
                Plutôt simple, n'est-ce pas ? Vous déléguez le travail à votre DOM. Effectivement, les formulaires non contrôlés nous permettent de ne pas avoir à gérer trop d'informations. Mais cette approche est un peu moins "React", parce qu'elle ne permet pas de tout faire.
                </p>

                <p>
                À la place, vous pouvez utiliser les composants contrôlés.
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7136084-interagissez-avec-vos-composants-grace-aux-evenements#/id/r-7136000" target="_blank">Les formulaires contrôlés</a></h2>

                <p>
                Le state local nous permet de garder des informations. Ces informations sont spécifiques à un composant et elles proviennent d'une interaction que l'utilisateur a eue avec le composant.
                </p>

                <p>
                Donc je vais créer ma variable <code class="line_code">inputValue</code> et la fonction qui va permettre de changer sa valeur dans le state local avec <code class="line_code">useState</code>.
                </p>

                <p>
                Sachez juste que la ligne de code ci-dessous me permet de déclarer l'état initial pour <code class="line_code">inputValue</code> et la fonction correspondante pour la modifier, et de lui préciser la valeur par défaut "Posez votre question ici" :
                </p>

                <figure class="block_code">
                        <pre><code>
const [inputValue, setInputValue] = useState("Posez votre question ici")
                    </code></pre>
                </figure>

                <p>
                J'ai donc mon <code class="line_code">QuestionForm</code> comme ci-dessous :
                </p>

                <figure class="block_code">
                        <pre><code>
import { useState } from 'react'

function QuestionForm() {
    const [inputValue, setInputValue] = useState('Posez votre question ici')
    return (
        &ltdiv&gt
            &lttextarea
                value={inputValue}
                onChange={(e) => setInputValue(e.target.value)}
            /&gt
        &lt/div&gt
    )
}

export default QuestionForm
                    </code></pre>
                </figure>

                <p>
                Ici, je passe une fonction en callback à <code class="line_code">onChange</code> pour qu'elle sauvegarde dans mon state local la valeur de mon input. J'accède à la valeur tapée dans l'input avec <code class="line_code">e.target.value</code>.
                </p>

                <p>
                <code class="line_code">inputValue</code> a maintenant accès au contenu de mon input à tout moment. Je peux donc créer un bouton qui déclenche une alerte qui affiche le contenu de mon input, comme ici :
                </p>

                <figure class="block_code">
                        <pre><code>
&ltdiv&gt
    &lttextarea
        value={inputValue}
        onChange={(e) => setInputValue(e.target.value)}
    /&gt
    &ltbutton onClick={() => alert(inputValue)}&gtAlertez moi 🚨&lt/button&gt
&lt/div&gt
                    </code></pre>
                </figure>

                <p>
                C'est bien beau d'avoir accès à la valeur de mon input, mais pourquoi ? 🤔
                </p>

                <p>
                Eh bien, cela permet d'interagir directement avec la donnée renseignée par l'utilisateur. Vous pouvez donc afficher un message d'erreur si la donnée n'est pas valide, ou bien la filtrer en interceptant une mauvaise valeur.
                </p>

                <p>
                Si nous décidons qu'il n'est pas autorisé d'utiliser la lettre "f" (bon oui, c'est un peu bizarre), eh bien nous pouvons déclarer une variable : 
                </p>

                <figure class="block_code">
                        <pre><code>
const isInputError = inputValue.includes('f') 
                    </code></pre>
                </figure>

                <p>
                et afficher ou non un message d'erreur en fonction de ce booléen :
                </p>

                <figure class="block_code">
                        <pre><code>
{isInputError && (
    &ltdiv&gt🔥 Vous n'avez pas le droit d'utiliser la lettre "f" ici.&lt/div&gt
)}
                    </code></pre>
                </figure>

                <p>
                De la même manière, nous pouvons intercepter une mauvaise valeur entrée par l'utilisateur. Pour cela, il faut déclarer une fonction intermédiaire :
                </p>

                <p>
                <figure class="block_code">
                        <pre><code>
function checkValue(value) {
    if (!value.includes('f')) {
        setInputValue(value)
    }
}
                    </code></pre>
                </figure>
                </p>

                <p>
                et on applique la modification dans notre fonction callback :
                </p>

                <figure class="block_code">
                        <pre><code>
onChange={(e) => checkValue(e.target.value)}
                    </code></pre>
                </figure>

                <p>
                Ici, vous aurez beau marteler votre touche `f` autant de fois que vous voudrez, la valeur ne s'inscrira pas dans votre input.
                </p>

                <p>
                Vous ne vous en rendez peut-être pas compte pour l'instant, mais ça vous laisse une très grande liberté quant aux validations que vous voulez créer ; et en tant que développeur, c'est vraiment très puissant 🔥.
                </p>


                <p>
                Super, je connais les deux méthodes, mais quand utiliser le composant contrôlé et quand utiliser sa version non contrôlée ?!
                </p>


                <p>
                Eh bien cela dépend des cas. À vous de voir selon vos contraintes. Quand vous avez un composant rapide à faire, qui n'intègre aucune complexité, un input non contrôlé peut faire l'affaire. À l'inverse, si vous avez des vérifications à faire, il vaudra sûrement mieux passer par un composant contrôlé. Pour ma part, j'ai vu beaucoup plus de composants contrôlés dans les codebases que j'ai pu voir.
                </p>

                <p>
                Sachez qu'il existe également des bibliothèques qui vous permettent de gérer les formulaires et leur validation aussi proprement que possible, par exemple le <a href="https://react-hook-form.com/">très bon outil react-hook-form</a>.
                </p>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7137536-mettez-en-place-votre-state-local-avec-usestate#/id/video_Player_1" target="_blank">Le state local avec useState</a></h1>

                <p>
                    Comment faire pour permettre à nos utilisateurs d'interagir avec ces données ? Qu'ils puissent agir sur notre application, entrer des informations, et ainsi modifier les données affichées, et que nous puissions garder les données qu’ils rentrent ?
                </p>

                <p>
                Vous vous en doutez puisque c'est l'objet de ce chapitre : avec le state !
                </p>

                <p>
                Le state local est présent à l’intérieur d’un composant et garde sa valeur, même si l'application se re-render. On peut alors dire qu'il est stateful (avec état). 
                </p>

                <p>
                On retourne donc dans <code class="line_code">Cart.js</code>. Pour le moment, nous allons uniquement permettre aux utilisateurs d'ajouter des monsteras dans leur panier, supprimons donc tout le reste.
                </p>

                <p>
                Commençons par importer <code class="line_code">useState</code> avec :
                </p>

                <figure class="block_code">
                        <pre><code>
import { useState } from 'react'
                    </code></pre>
                </figure>

                <p>
                Puis, on peut créer un state <code class="line_code">cart</code>. Avec <code class="line_code">useState</code>, nous devons déclarer en même temps une fonction pour mettre à jour ce state ( <code class="line_code">updateCart</code> ), et lui attribuer une valeur initiale, qui sera ici de 0 :
                </p>

                <figure class="block_code">
                        <pre><code>
const [cart, updateCart] = useState(0)
                    </code></pre>
                </figure>

                <p>
                Je vais maintenant pouvoir ajouter un bouton dans mon panier qui permet d'ajouter un monstera avec la fonction que nous venons de déclarer. Ce qui me donne dans <code class="line_code">Cart.js</code> :
                </p>

                <figure class="block_code">
                        <pre><code>
function Cart() {
    const monsteraPrice = 8
    const [cart, updateCart] = useState(0)

    return (
        &ltdiv className='lmj-cart'&gt
            &lth2&gtPanier&lt/h2&gt
            &ltdiv&gt
                Monstera : {monsteraPrice}€
                &ltbutton onClick={() =&gt updateCart(cart + 1)}>
                    Ajouter
                &lt/button&gt
            &lt/div&gt
            &lth3&gtTotal : {monsteraPrice * cart}€&lt/h3&gt
        &lt/div&gt
    )
}
                    </code></pre>
                </figure>

                <p>
                Maintenant, si on clique sur "Ajouter", le montant total est modifié en fonction du nombre d'éléments sauvegardés dans le state du panier.
                </p>

                <p>
                Concrètement, cela veut dire que le composant Cart peut être re-render autant de fois que nécessaire, mais la valeur du panier sera préservée.
                </p>

                <p>
                <code class="line_code">useState</code> est un <strong>hook</strong> qui permet d’ajouter le state local React à des composants fonctions.
                </p>

                <p>
                Un hook est une fonction qui permet de « se brancher » (to hook up) sur des fonctionnalités React. On peut d'ailleurs les importer directement depuis React. Après <code class="line_code">useState</code>, nous verrons un autre hook dans cette partie : <code class="line_code">useEffect</code>. Il existe d'autres hooks que nous n'aborderons pas dans ce cours, mais dans le suivant sur React !
                </p>

                <p>
                Investiguons comment est construit notre state cart : <code class="line_code">const [cart, updateCart] = useState(0)</code>
                </p>

                <p>
                J'aurais tout aussi bien pu faire : <code class="line_code">const [coucou, cavabien] = useState(0)</code>
                </p>

                <p>
                Tout d'abord, les crochets <code class="line_code">[]</code>. Si cette syntaxe peut vous paraître un peu particulière, il s'agit en fait de la même pratique que nous avions vue dans la partie précédente : la déstructuration. Sauf qu'ici, ça s'appelle la décomposition, parce qu'il s'agit d'un tableau et non d'un objet.
                </p>

                <p>
                <code class="line_code">useState</code> nous renvoie une paire de valeurs dans un tableau de 2 éléments, que nous récupérons dans les variables  cart   et  updateCart   dans notre exemple. Le premier élément est la valeur actuelle, et le deuxième est une fonction qui permet de la modifier.
                </p>

                <p>
                Sans la décomposition, nous aurions aussi pu faire :
                </p>

                <figure class="block_code">
                        <pre><code>
const cartState = useState(0)
const cart = cartState[0]
const updateCart = cartState[1]
                    </code></pre>
                </figure>

                <p>
                    Quant à useState <code class="line_code">useState(0)</code>, il correspond à l'état initial de notre state. Cet état initial peut être un nombre comme ici, une string, un booléen, un tableau ou encore un objet avec plusieurs propriétés.
                </p>

                <p>
                Il est important de préciser une valeur initiale dans votre state. Sinon, elle sera undefined par défaut, et ce n'est pas un comportement souhaitable : plus vous serez explicite, mieux votre application s'en portera !
                </p>

                <p>
                    Il est possible d'utiliser plusieurs variables d'état. Nous allons encore améliorer notre panier. Cette fois-ci, je veux pouvoir choisir de l'afficher ou de le cacher. Pour ça, nous allons utiliser une variable d'état dans notre composant Cart.
                </p>

                <p>
                Dans notre cas, il suffit de créer une variable  isOpen   associée avec la fonction  setIsOpen, et de l'initialiser à false :
                </p>

                <figure class="block_code">
                        <pre><code>
function Cart() {
    const monsteraPrice = 8
    const [cart, updateCart] = useState(0)
    const [isOpen, setIsOpen] = useState(false)
 
    return isOpen ? (
        &ltdiv className='lmj-cart'&gt
            &ltbutton onClick={() =&gt setIsOpen(false)}>Fermer&lt/button&gt
            &lth2&gtPanier&lt/h2&gt
            &ltdiv&gt
                Monstera : {monsteraPrice}€
                &ltbutton onClick={() => updateCart(cart + 1)}&gt
                    Ajouter
                &lt/button&gt
            &lt/div&gt
            &lth3&gtTotal : {monsteraPrice * cart}€&lt/h3&gt
        &lt/div&gt
    ) : (
        &ltutton onClick={() => setIsOpen(true)}>Ouvrir le Panier&lt/button&gt
    )
}
                    </code></pre>
                </figure>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7136837-partagez-votre-state-entre-differents-composants#/id/video_Player_1" target="_blank">Partagez votre state entre différents composant</a></h1>

                <p>
                Mais comment faire pour changer le comportement d'un composant en fonction du state d'un autre composant ? Par exemple, si je veux enfin ajouter un lien entre mon <code class="line_code">Cart</code> et mon composant <code class="line_code">ShoppingList</code>. Je peux créer un bouton "Ajouter au panier" dans chaque <code class="line_code">PlantItem</code>... Mais comment faire pour venir compléter mon panier en fonction ?
                </p>

                <p>
                Comme son nom l'indique, un state local… est local.  Ni les parents, ni les enfants ne peuvent manipuler le state local d'un composant (ils n’en ont pas la possibilité technique).
                </p>

                <p>
                Eh bien, il faudra faire remonter ces données vers le state local du plus proche composant qui est un parent commun, et y garder le state. À partir de là, il sera possible de :
                <ul>
                    <li>Faire redescendre ces infos avec des props jusqu’aux composants qui en ont besoin.</li>
                    <li>Faire « remonter » les demandes d'update toujours dans les props. Pour cela, on peut utiliser la fonction de mise à jour du state récupérée dans useState, en la passant en props aux composants qui en ont besoin.</li>
                </ul>
                </p>

                <p>
                Vous vous demandez peut-être quelles sont les bonnes pratiques : où mettre le state ? Dans le composant parent, ou le composant enfant ? Eh bien, dans la pratique… ça dépend totalement. Il est considéré comme plus propre de garder la logique au maximum dans les composants parents, et que les enfants ne servent qu'à afficher les éléments en props. Mais dans de nombreux cas, il est bien mieux de garder le state dans le composant enfant. Vous apprendrez à le voir avec le temps et l'expérience. 
                </p>

                <p>
                Je commence à faire remonter <code class="line_code">cart</code> dans <code class="line_code">App.js</code> :
                </p>

                <figure class="block_code">
                        <pre><code>
function App() {
    const [cart, updateCart] = useState([])
    
    return (
        &ltdiv&gt
            &ltanner&gt
                &ltimg src={logo} alt='La maison jungle' className='lmj-logo' /&gt
                &lth1 className='lmj-title'&gt>La maison jungle&lth1&gt
            &lt/Banner&gt
            &ltdiv className='lmj-layout-inner'&gt
                &ltCart cart={cart} updateCart={updateCart} /&gt
                &ltShoppingList cart={cart} updateCart={updateCart} /&gt
            &lt/div&gt
            &ltFooter /&gt
        &lt/div&gt
    )
}

export default App
                    </code></pre>
                </figure>

                <p>
                Et toujours dans <code class="line_code">App.js</code> dans le JSX, je passe <code class="line_code">cart</code> ainsi que <code class="line_code">updateCart</code> en props :
                </p>
                
                <figure class="block_code">
                        <pre><code>
&ltCart cart={cart} updateCart={updateCart} /&gt
                    </code></pre>
                </figure>

                <p>
                ...que je récupère dans <code class="line_code">Cart.js</code>. Vous vous souvenez de la déstructuration ? Ça nous permet de récupérer notre prop en une ligne.
                </p>

                <p>
                J'en profite pour supprimer mon bouton "Ajouter" dans <code class="line_code">Cart.js</code>.
                </p>

                <p>
                On a donc un panier un peu vide :
                </p>

                <figure class="block_code">
                        <pre><code>
function Cart({ cart, updateCart }) {
    const monsteraPrice = 8
    const [isOpen, setIsOpen] = useState(true)

    return isOpen ? (&gt
        &ltdiv className='lmj-cart'&gt
            &ltbutton
                className='lmj-cart-toggle-button'
                onClick={() => setIsOpen(false)}
            &gt
                Fermer
            &lt/button&gt
            &lth2&gtPanier&lt/h2&gt
            &lth3&gtTotal : {monsteraPrice * cart}€&lt/h3&gt
            &ltbutton onClick={() => updateCart(0)}&gtVider le panier&lt/button&gt
        &lt/div&gt
    ) : (
        &ltdiv className='lmj-cart-closed'&gt
           &ltbutton
                className='lmj-cart-toggle-button'
                onClick={() => setIsOpen(true)}
            &gt
                Ouvrir le Panier
            &lt/button&gt
        &lt/div&gt
    )
}

export default Cart
                    </code></pre>
                </figure>

                <p>
                Du côté de <code class="line_code">ShoppingList</code>, je lui passe <code class="line_code">updateCart</code>. Je le récupère ensuite dans <code class="line_code">ShoppingList</code>. 
                </p>

                <p>
                Je change ensuite ma liste de plantes pour avoir (toujours dans <code class="line_code">ShoppingList.js</code>) :
                </p>

                <figure class="block_code">
                        <pre><code>
function ShoppingList({ cart, updateCart }) {
// Petite précision : categories nous vient de la partie précédente pour récupérer toutes les catégories uniques de plantes.

    const categories = plantList.reduce(
        (acc, elem) =>
            acc.includes(elem.category) ? acc : acc.concat(elem.category),
            []
    )
    
    return (
        &ltdiv className='lmj-shopping-list'&gt
            &ltul&gt
                {categories.map((cat) => (
                &ltli key={cat}&gt{cat}&lt/li&gt
                ))}
            &lt/ul&gt
            &ltul className='lmj-plant-list'&gt
                {plantList.map(({ id, cover, name, water, light }) => (
                    &ltdiv key={id}&gt
                        &ltPlantItem cover={cover} name={name} water={water} light={light} /&gt
                        &ltbutton onClick={() => updateCart(cart + 1)}&gtAjouter&lt/button&gt
                    &lt/div&gt
                ))}
            &lt/ul&gt
        &lt/div&gt
    )
}

export default ShoppingList
                    </code></pre>
                </figure>

                <p>
                Et voilà ! Maintenant, vous pouvez updater votre panier directement en cliquant sur un bouton lié à chaque plante. 🎉
                </p>

                <p>
                Vous voyez, ce n'est pas si compliqué, il a suffi de :
                <ul>
                    <li>faire remonter notre state ;</li>
                    <li>faire descendre le contenu de notre state et la fonction pour l'updater ;</li>
                    <li>déclencher la mise à jour de notre state avec une interaction utilisateur (ici le clic sur le bouton).</li>
                </ul>
                </p>

                <div class="em">Ici, nous sommes sur une petite application : il n'y a qu'une seule page et nous partageons le state directement entre parents et enfants. Mais ça peut vite devenir le bazar pour une plus grosse application. C'est pourquoi la notion de state management va beaucoup plus loin. Il existe des outils dédiés au State Management tels que Flux, Redux ou des solutions natives comme React Context que nous n'aborderons pas ici, mais qui font l'objet d'un cours à part entière. Si cela vous intéresse, vous pouvez voir le cours “Organisez votre application avec la logique Redux” sur OpenClassrooms !</div>


                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7008001-debutez-avec-react/7137079-declenchez-des-effets-avec-useeffect#/id/video_Player_1" target="_blank">Les effets avec useEffect</a></h1>

                <p>
                Dès qu'une modification intervient dans une prop ou le state, le composant concerné et ses enfants sont re-render.
                </p>

                <p>
                Mais comment faire si on veut effectuer une action qui ne fait pas partie du return ? Qui intervient après que React a mis à jour le DOM ? Par exemple, si vous voulez déclencher une alerte à chaque fois que votre panier est mis à jour ? Ou bien même pour sauvegarder ce panier à chaque mise à jour ?
                </p>

                <p>
                Eh bien, ces types d'actions s'appellent des effets de bord, et pour cela, nous avons <code class="line_code">useEffect</code>. 😎 Ils nous permettent d'effectuer une action à un moment donné du cycle de vie de nos composants.
                </p>

                <p>
                Essayons dès maintenant. Disons que je veux créer une alerte lorsque j'ajoute une plante à mon panier, et que cette alerte affiche le montant total du panier.
                </p>

                <p>
                Importez <code class="line_code">useEffect</code> comme nous l’avons fait avec <code class="line_code">useState</code> dans <code class="line_code">Cart.js</code> :
                </p>


                <figure class="block_code">
                        <pre><code>
import { useState, useEffect } from 'react'
                    </code></pre>
                </figure>

                <p>
                et utilisez ce snippet à la place (toujours dans <code class="line_code">Cart.js</code>) :
                </p>

                <figure class="block_code">
                        <pre><code>
useEffect(() => {
    alert(`J'aurai ${total}€ à payer 💸`)
})
                    </code></pre>
                </figure>

                <p>
                Ce qui nous donne pour <code class="line_code">Cart.js</code> :
                </p>

                <figure class="block_code">
                        <pre><code>
function Cart({ cart, updateCart }) {
    const [isOpen, setIsOpen] = useState(true)
    const total = cart.reduce(
        (acc, plantType) => acc + plantType.amount * plantType.price,
            0
        )
    useEffect(() => {
        alert(`J'aurai ${total}€ à payer 💸`)
    })

    return isOpen ? (
        &ltdiv className='lmj-cart'&gt
            &ltbutton
                className='lmj-cart-toggle-button'
                onClick={() => setIsOpen(false)}
            &gt
                Fermer
            &lt/button&gt
            {cart.length > 0 ? (
                &ltdiv&gt
                    &lth2&gtPanier&lt/h2&gt
                    &ltul&gt
                        {cart.map(({ name, price, amount }, index) => (
                            &ltdiv key={`${name}-${index}`}>
                                    {name} {price}€ x {amount}
                            &lt/div&gt
                        ))}
                    &lt/ul&gt
                    &lth3&gtTotal :{total}€&lt/h3&gt
                    &ltbutton onClick={() => up&ltdateCart([])}&gtVider le panier&lt/button&gt
                &lt/div&gt
            ) : (
                &ltdiv&gtVotre panier est vide&lt/div&gt
            )}
        &lt/div&gt
    ) : (
        &ltdiv className='lmj-cart-closed'&gt
            &ltbutton
                className='lmj-cart-toggle-button'
                onClick={() => setIsOpen(true)}
            &gt
                Ouvrir le Panier
            &lt/button&gt
        &lt/div&gt
    )
}
                    </code></pre>
                </figure>

                <p>
                Et voilààà ! Tout se passe comme espéré, pour la simple et bonne raison que  useEffect   nous permet d'effectuer notre effet une fois le rendu du composant terminé. Et comme  useEffect  est directement dans notre composant, nous avons directement accès à notre state, à nos variables, nos props, magique n'est-ce pas ?
                </p>

                <p>
                Mais attendez, qu'est-ce qui se passe si je ferme mon panier ?
                </p>

                <p>
                Nooon ! 😭 Mon alerte se déclenche aussi !   
                </p>

                <p>
                Eh bien c'est normal : je vous ai dit que <code class="line_code">useEffect</code> se déclenche après le rendu. Eh bien il se déclenche après CHAQUE rendu du composant. Sauf si vous utilisez un second paramètre pour <code class="line_code">useEffect</code>.
                </p>

                <p>
                Petit rappel : le premier paramètre passé à useEffect est une fonction. Cette fonction correspond à l'effet à exécuter.
                </p>

                <p>
                Le deuxième paramètre de accepte un tableau noté entre crochets : il s'agit du tableau de dépendances.
                </p>

                <p>
                Dans notre cas, si je veux que l'alerte ne s'affiche que lorsque le total de mon panier change, il me suffit de faire :
                </p>

                <figure class="block_code">
                        <pre><code>
useEffect(() => {
    alert(`J'aurai ${total}€ à payer 💸`)
}, [total])
                    </code></pre>
                </figure>

                <p>
                Vous pouvez mettre n'importe quelle variable ici. Si vous voulez afficher l'alerte quand le total change OU quand une nouvelle catégorie est sélectionnée, vous pourriez tout à fait :
                <ul>
                    <li>récupérer la catégorie sélectionnée (en faisant remonter <code class="line_code">activeCategory</code> et <code class="line_code">setActiveCategory</code> et en les passant en props) ;</li>
                    <li>puis mettre <code class="line_code">[total, activeCategory]</code> dans votre tableau de dépendances. </li>
                </ul>
                </p>

                <p>
                Comment faire pour exécuter un effet uniquement après le premier render de mon composant ? Par exemple, si je veux récupérer des données sur une API ?
                </p>

                <p>
                Eh bien, dans ce cas, il faut renseigner un tableau de dépendances vide :
                </p>

                <figure class="block_code">
                        <pre><code>
useEffect(() => {
    alert('Bienvenue dans La maison jungle')
}, [])
                    </code></pre>
                </figure>

                <p>
                on, moi je commence à en avoir un peu marre de toutes ces alertes. J'ai plutôt envie d'utiliser <code class="line_code">useEffect</code> pour mettre à jour le titre de l'onglet de mon navigateur.
                </p>

                <p>
                On va donc utiliser <code class="line_code">document.title</code> toujours dans <code class="line_code">Cart.js</code>, comme ici :
                </p>
               
                <figure class="block_code">
                        <pre><code>
useEffect(() => {
    document.title = `LMJ: ${total}€ d'achats`
}, [total])
                    </code></pre>
                </figure>

                <p>
                Comme je vous l'ai expliqué au chapitre précédent,  useEffect   est un hook, une fonction qui permet de « se brancher » sur la fonctionnalité des effets de React. Mais quelques règles particulières s'appliquent au hook  useEffect :
                <ul>
                    <li>Appelez toujours <code class="line_code">useEffect</code> à la racine de votre composant. Vous ne pouvez pas l'appeler à l’intérieur de boucles, de code conditionnel ou de fonctions imbriquées. Ainsi, vous vous assurez d'éviter des erreurs involontaires.</li>
                    <li>Comme pour <code class="line_code">useState</code>, <code class="line_code">useEffect</code> est uniquement accessible dans un composant fonction React. Donc ce n'est pas possible de l'utiliser dans un composant classe, ou dans une simple fonction JavaScript.</li>
                </ul>
                Par ailleurs, je vous conseille de séparer les différentes actions effectuées dans différents useEffect. Cela est plutôt une bonne pratique qu’une règle.
                </p>

                









<?php 
    $content = ob_get_clean(); 

    require_once('structure/layout.php');
?>
