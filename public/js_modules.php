<?php $title = 'Javascript - Modules'; ?>
<?php ob_start(); ?>

                <h1 id=<?php echo $ini=0; $ini ; $ini++ ;?>><a href="https://www.youtube.com/watch?v=Bjuai6iNjYA&t=10s" target="_blank">Modules</a></h1>

                <p><a href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Statements/export"> Page MDN ici </a></p>

                <p>
                    Les modules servent à séparer le code JS en plusieurs fichiers.
                </p>

                <p>
                    Le problème a longtemps été que les variables pouvaient s'écraser entres-elles et plusieurs systèmes ont été mis en place pour palier à ce problème. 
                </p>

                <p>
                    Depuis ES6 on utilise les mots-clé <code class="line_code">import</code> et <code class="line_code">export</code> comme suit :
                </p>

                <figure class="block_code">
                    <pre><code>
export function increment ()
{
    count += step 
    return count
}

export const pi = 3.14 
                    </code></pre>
                </figure>

                <p>
                    Puis dans le script principal <code class="line_code">app.js</code> : 
                </p>

                <figure class="block_code">
                    <pre><code>
import { increment, pi } from './increment.js'
                    </code></pre>
                </figure>

                <p>ou</p> 

                <figure class="block_code">
                    <pre><code>
import { increment as incr } from './increment.js'
                    </code></pre>
                </figure>

                <p>
                    Pour webpack : from est un chemin relatif, sinon webpack ira chercher dans node_module le module en question. Par exemple jQuerry si on l'a installé. 
                </p>

                <p>
                    (On n'est pas obligé d'utiliser webpack ou autre bundler, JS fera l'association tout seul à condition d'utiliser le type décrit ci-dessous. Cependant JS n'optisera pas le ce fichier centrale et les bundler disposent aussi d'autres options intéressantes.) Voir détails <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Modules">ici</a>.
                </p>

                <p>
                    Il faut cependant préciser dans la page html au niveau de la balise script qu'on utilise un type 'module' comme ceci :
                </p>

                <figure class="block_code">
                    <pre><code>
&ltscript type="module"&gt
    import './app.js'
&lt/script&gt
                    </code></pre>
                </figure>

                <p>
                    Si on a qu'un export à faire, il existe aussi le mot clé <code class="line_code">export default</code> qui permet d'importer ce que l'on veut et prendra la valeur souhaité pour n'importe quel appel d'import
                </p>

                <figure class="block_code">
                    <pre><code>
import { default as def } from './increment.js'
                    </code></pre>
                </figure>

                <div class="em">Ajouter <code class="line_code">type="module"</code> dans la balise script : <code class="line_code">&ltscript type="module" src="index.js"&gt&lt/script&gt</code></div>


                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://grafikart.fr/tutoriels/configuration-906#autoplay" target="_blank">Les bundlers</a></h1>

                <p>
                    Les bundlers servent à générer un seul fichier js peut importe les dépendances JS présentes. Cela permet de charger les scripts plus rapidement et supporte tous les systèmes de modules, même les plus anciens.
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://grafikart.fr/tutoriels/webpack-4-992" target="_blank">Webpack 3</a></h2>

                <p>Par convention, le fichier principale qui regroupe les modules s'appelle app.js</p>

                <p>
                    Pour installer webpack il faut déjà avoir fait un coup de <code class="line_code">npm init</code> dans le dossier de notre projet pour créer un fichier package.json qui va gérer les dépendances de notre projet.
                </p>

                <p>
                    Ensuite on fait un coup de <code class="line_code">npm install --save-dev webpack</code> pour intaller webpack en dépendance.
                </p>

                <p>
                    Pour utiliser webpack on se rend en ligne de commande dans le dossier de notre projet qui vient d'être créé ./node_modules/.bin/  webpack puis on lui indique le fichier d'entré app.js et le fichier d'export qui sera dans le fdossier dist qui sera créé et qui s'appelera bundle.js par convention. <br/>
                    La commande est donc :  <code class="line_code">./node_modules/.bin/  webpack js/app.js dist/bundle.js</code>
                </p>

                <p>
                    À Partir de là, webpack compil notre JS dans le fichier bundle.js.
                </p>

                <p>
                    On peut ajouter le drapeau --watch <code class="line_code">./node_modules/.bin/webpack js/app.js dist/bundle.js --watch</code> pour que webpack observe les changements et va recompiler à chaque changement.
                </p>

                <p>
                    On peut assi utiliser <code class="line_code">--optimize-minimize</code> qui va optimiser (ne pas compiler les fonctions non utilisée) et minimiser (tout mettre sur une ligne).
                </p>

                <p>
                    On va ensuite configurer webpack avec un fichier de configuration qui sera placé à la racine du projet et s'appellera <code class="line_code">webpack.config.js</code>. Cela va permettre de simplifier ce qui est dit plus haut.
                </p>

                <p>
                    Le fichier complet sera (à peu près) comme tel : <a href="https://webpack.js.org/configuration/"> ici </a>. On va détailler cela ci-dessous :
                </p>

                <p>
                    <strong>mode</strong> : précise si la configuration est pour le mode development ou production.
                    <strong>entry</strong> : Par défaut dans le dossier src. Va indiquer le point d'entrée.
                    <strong>output</strong> : prend une entrée <code class="line_code">path : path.resolve(__dirname, 'dist'),</code>
                    et une entrée <code class="line_code">filename : 'bundle.js'</code>.
                </p>

                <p>
                <code class="line_code">path.resolve(__dirname, 'dist')</code> va renvoyer le chemin absolu (nécéssaire pour la config). Il s'agit d'une commande nodejs. Il faut l'importer avant. Voici la commande finale :
                </p>

                <figure class="block_code">
    		<pre><code>
const path = require('path');

module.exports = {
  mode: 'development',
  entry: './foo.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'foo.bundle.js',
  },
};
			</code></pre>
		</figure>



                <p>
                    Avec ça on peut lancer la commande webpack <code class="line_code">./node_modules/.bin/webpack</code>sans argument.
                </p>

                <p>
                    Bien sûr on peut configurer cela grâce à npm. On se rend dans le fichier package.json et dans la partie script de webpack on ajoute : <code class="line_code">"dev": "webpack"</code>. Pas besoin de préciser le chemin complet de .bin, il trouvera tout seul. à présent on peut lancer en console <code class="line_code">npm run dev</code>
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://grafikart.fr/tutoriels/webpack-4-992" target="_blank">configurer un loader</a></h2>

                <p>
                    Ici on souhaite configurer webpack pour qu'il compile en utilisant le module babel.
                </p>

                <p>
                    Pour commencer on installe babel sur notre projet : <a href="https://babeljs.io/setup#installation">comme précisé ici</a>
                </p>

                <p>
                    Comme précisé, on ajoute ces lignes à la config webpack qui fonctionnemenront de la même manière pour tous les loader : 
                </p>

                <figure class="block_code">
    		<pre><code>
{
  module: {
    rules: [
      {
        test: /\.m?js$/,    
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ['@babel/preset-env']
          }
        }
      }
    ]
  }
}
			</code></pre>
		</figure>

        <p>
            <strong>rules</strong> : seront les règles qui définissent où sera appliquer le loader.
            <strong>test</strong> : expression régulière qui définit les fichiers à utiliser.
            <strong>exculde</strong> : on ne souhaite pas compiler le dossier node_module installer par npm.
            <strong>loader</strong> : indique quel module appliquer aux fichiers sélectionnés.
            <strong>option</strong> : indique quel module appliquer aux fichiers sélectionnés.
        </p>

        <p>
            Ensuite, comme précisé dans la doc babel, ne pas oublié de créé un fichier babel.config.json à la racine avec :
        </p>

        <figure class="block_code">
    		<pre><code>
{
  "presets": ["@babel/preset-env"]
}
			</code></pre>
		</figure>

        <p>
            sans oublié d'install aussi <code class="line_code">npm install @babel/preset-env --save-dev</code>
        </p>

        <p>
            À présent webpack compil en ES5 pour un compatibilité maximal avec les anciens naviguateurs.
        </p>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://grafikart.fr/tutoriels/webpack-4-992" target="_blank">Les modes dev et prod</a></h2>
        
        <p>
            Le mode production va nous permettre de minifier notre code et autre. Sur webpack 3 on utilisait un plugin Uglyfile mais il a disparu sur webpack 4 et se fait automatiquement grâce au mode dans le fichier de config 
        </p>

        <figure class="block_code">
    		<pre><code>
 module.exports = {
  mode: "production", // "production" | "development" | "none"
  // Chosen mode tells webpack to use its built-in optimizations accordingly.
			</code></pre>
		</figure>

        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://grafikart.fr/tutoriels/webpack-4-992" target="_blank">Webpack 4 et 5</a></h2>

        <p>
        Webpack 4 et 5 ne vous obligera pas à utiliser un fichier de configuration. Cependant, il supposera que le point d'entrée de votre projet est <code class="line_code">src/index.js</code> et affichera le résultat dans <code class="line_code">dist/main.js</code> minifié et optimisé pour la production.
        </p>

        <p>
        <a href="https://createapp.dev/webpack">createapp.dev</a> est un outil en ligne permettant de créer des configurations Webpack personnalisées. Il vous permet de sélectionner diverses fonctionnalités qui seront combinées et ajoutées au fichier de configuration résultant. En outre, il génère un exemple de projet basé sur la configuration Webpack fournie que vous pouvez consulter dans votre navigateur et télécharger.
        </p>

        <p>
        Généralement, vos projets devront étendre cette fonctionnalité, pour cela vous pouvez créer un fichier <code class="line_code">webpack.config.js</code> dans le dossier racine et webpack l'utilisera automatiquement. Détail <a href="https://webpack.js.org/configuration/">ici</a>.
        </p>

        <p>
            Page d'installation <a href="https://webpack.js.org/guides/getting-started">ici</a>.
        </p>



<?php  
    $content = ob_get_clean(); 

    require_once('structure/layout.php');
?>
