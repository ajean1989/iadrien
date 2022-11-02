<?php $title = 'Python'; ?>
<?php ob_start(); ?>

            <p>
            <a href="https://docs.python.org/fr/3/index.html">documentation Python</a>.
            </p>








            <h1 id=<?php $ini=0; echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7289426-lancez-votre-premier-programme-python#/id/r-7311277" target="_blank">Installer Python</a></h1>

            <p>
                Il suffit de l'installer depuis <a href="https://www.python.org/downloads/">python.org</a>. 
            </p>

            <p>
                Python s'utilise dans l'IDLE de python ou avec anaconda->spyder.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7296451-ecrivez-du-code-correctement#/id/r-7317296" target="_blank">Divers</a></h1>

            <p>
                Commenter du code : 
            </p>

            <figure class="block_code">
                        <pre><code>
#ceci est un commentaire
                </code></pre>
            </figure>

            <figure class="block_code">
                        <pre><code>
"""
Ceci est un
commentaire à lignes multiples
"""
                </code></pre>
            </figure>


            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7289466-enregistrez-vos-donnees-avec-des-variables#/id/video_Player_1" target="_blank">Les variables</a></h1>

            <p>
            Une variable dans Python est constituée de trois éléments : son nom, son type et sa valeur
            </p>

            <p>
            L’une des conventions d’appellation populaires pour Python est le snake case : des noms composés de plusieurs mots séparés par des tirets bas(_) <code class="line_code">commenombre_de_chats</code>, <code class="line_code">reponse_finale</code>, etc.
            </p>

            <p>
                Déclarer une variable : 
            </p>

            <figure class="block_code">
                        <pre><code>
livre = "Gatsby le Magnifique"
                </code></pre>
            </figure>

        
            <p>
                Modifier une variable : 
            </p>

            <figure class="block_code">
                        <pre><code>
>> livre = "Gatsby le Magnifique"
>> print(livre)
Gatsby le Magnifique
>> livre = "Beloved"
>> print(livre)
Beloved
                </code></pre>
            </figure>

            



            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7290436-enregistrez-des-groupes-de-donnees-avec-les-listes#/id/video_Player_1" target="_blank">Les listes</a></h1>

            <p>
            Les listes acceptent n’importe quel type de données aussi, et même des combinaisons de types de données.
            </p>

            <figure class="block_code">
                        <pre><code>
plateformes_sociales = ["Facebook", "Instagram", "Snapchat", "Twitter"]
                </code></pre>
            </figure>

            <p>
            Pour accéder aux éléments d’une liste, on utilise un indice. Chaque élément a un indice qui lui correspond, selon sa position dans la liste. Vous obtenez la valeur de cet indice avec la syntaxe suivante :  liste[indice]. Elle vous renverra la valeur de la liste qui est à la position de l’indice. Celui-ci commençant par 0. 
            </p>

            <figure class="block_code">
                        <pre><code>
>> plateformes_sociales[0]
"Facebook"
>> plateformes_sociales[1]
"Instagram"
>> plateformes_sociales[-1]
"Twitter"
                </code></pre>
            </figure>

            <p>
            Les indices fonctionnent aussi avec les chaînes de caractères ! En fait, les chaînes de caractères sont juste des listes de caractères. Chaque caractère correspond à un indice qui va de zéro à la longueur de la chaîne.
            </p>

            <figure class="block_code">
                        <pre><code>
>> langage_de_programmation = "PYTHON"
>> langage_de_programmation[2]
"T"
>> langage_de_programmation[-4]
"T"
                </code></pre>
            </figure>

            <p>
            Dans Python, c’est très simple de réaliser toutes sortes d’opérations avec les listes. Vous pouvez faire appel à une méthode de liste. Nous allons voir les méthodes plus tard, mais pour l’instant, vous devez juste savoir qu’une méthode est une façon de réaliser une opération spécifique sur un élément.  
            </p>

            <figure class="block_code">
                        <pre><code>
>> plateformes_sociales.append("TikTok")
>> print(plateformes_sociales)
["Facebook", "Instagram", "Snapchat", "Twitter", "TikTok"]
                </code></pre>
            </figure>

            <figure class="block_code">
                        <pre><code>
>> plateformes_sociales.remove("Snapchat")
>> print(plateformes_sociales)
["Facebook", "Instagram", "Twitter", "TikTok"]
                </code></pre>
            </figure>

            <figure class="block_code">
                        <pre><code>
>> len(plateformes_sociales)
4
                </code></pre>
            </figure>

            <p>
            La dernière méthode que nous allons voir estsort(). Elle trie les éléments de la liste. Le tri se fait alphabétiquement pour les listes de chaînes et numériquement pour les listes de nombres.
            </p>

            <figure class="block_code">
                        <pre><code>
>> plateformes_sociales.sort()
                </code></pre>
            </figure>

            <p>
            Il y a beaucoup d’autres méthodes que vous pouvez utiliser avec les listes. Vous les trouverez dans la <a href="https://docs.python.org/fr/3/tutorial/datastructures.html">documentation Python</a>.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7290436-enregistrez-des-groupes-de-donnees-avec-les-listes#/id/r-7325371" target="_blank">Les tuples</a></h1>

            <p>
            Les tuples sont une autre structure de Python qui sert à enregistrer des données. Au lieu des crochets <code class="line_code">[ ]</code>, ils se caractérisent par les parenthèses <code class="line_code">()</code>.
            </p>

            <figure class="block_code">
                        <pre><code>
plateformes_sociales_tuple = ("Facebook", "Instagram", "TikTok", "Twitter")
                </code></pre>
            </figure>

            <p>
            Beaucoup des propriétés des tuples sont similaires à celles des listes normales. Par exemple, les listes et tuples utilisent tous deux les indices. La principale différence est que les tuples sont immuables (ne peuvent pas être modifiés), alors que les listes sont modifiables. 
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7290721-enregistrez-des-donnees-complexes-avec-des-dictionnaires#/id/video_Player_1" target="_blank">Les dictionnaires</a></h1>

            <p>
            Un dictionnaire est une structure de données qui enregistre des données dans des paires clés-valeurs.  Voici un exemple d’une clé et d’une valeur :  
            </p>

            <img src="../images/16244537609264_1C6-1.png"/>

            <p>
            Les dictionnaires sont indiqués par des accolades <code class="line_code">{}</code> au début et à la fin. Chaque paire clé-valeur comprend un deux-points <code class="line_code">:</code> placé entre la clé et la valeur et une virgule <code class="line_code">,</code> à la fin. Chaque dictionnaire doit être composé de clés uniques.
            </p>

            <p>
            Pour enregistrer tout cela, vous pouvez sauvegarder un dictionnaire comme ça :
            </p>

            <figure class="block_code">
                        <pre><code>
nouvelle_campagne = {
    "responsable_de_campagne": "Jeanne d'Arc",
    "nom_de_campagne": "Campagne nous aimons les chiens",
    "date_de_début": "01/01/2020",
    "influenceurs_importants": ["@MonAmourDeChien", "@MeilleuresFriandisesPourChiens"]
}
                </code></pre>
            </figure>

            <p>
            Vous pouvez aussi créer un nouveau dictionnaire avec des accolades vides <code class="line_code">{}</code> ou la fonction <code class="line_code">dict()</code> et avec des paires clés-valeurs comme indiqué ci-dessous :
            </p>

            <figure class="block_code">
                        <pre><code>
taux_de_conversion = {}
taux_de_conversion['facebook'] = 3.4
taux_de_conversion['instagram'] = 1.2
taux_de_conversion = dict()
taux_de_conversion['facebook'] = 3.4
taux_de_conversion['instagram'] = 1.2
                </code></pre>
            </figure>

            <p>
            Pour accéder aux différentes valeurs, vous pouvez utiliser la clé pour chacune des paires clés-valeurs.
            </p>

            <figure class="block_code">
                        <pre><code>
>> nouvelle_campagne['responsable_de_campagne']
"Jeanne d'Arc"
>> taux_de_conversion['facebook']
3.4
                </code></pre>
            </figure>

            <p>
            Comme pour les listes, plusieurs méthodes (ou opérations) intégrées à Python vous permettent de manipuler les données dans les dictionnaires.
            </p>

            <p>
            Pour supprimer une paire clé-valeur, vous pouvez utiliser le mot-clé <code class="line_code">del</code> et la clé que vous voulez supprimer ou encore la méthode <code class="line_code">pop</code>. Pour supprimer la paire clé-valeur "origine" de la paire clé-valeur, écrivez :
            </p>

            <figure class="block_code">
                        <pre><code>
>> del infos_labradoodle["origine"]
>> print(infos_labradoodle)
{ "poids": "13 à 16 kg",
"nom_scientifique": "Canis lupus familiaris"}
                </code></pre>
            </figure>

            <p>
            Certains mots font partie du langage Python et ne peuvent pas être utilisés comme noms de variables. Par exemple <code class="line_code">del</code>, <code class="line_code">if</code> et <code class="line_code">else</code>. Ces mots sont connus comme étant des mots réservés ou des mots-clés. 
            </p>

            <p>
            Vous pouvez utiliser le mot-cléinpour vérifier si une clé spécifique existe dans un dictionnaire.
            </p>

            <figure class="block_code">
                        <pre><code>
>> "poids" in infos_labradoodle
True
>> "race" in infos_labradoodle
False
                </code></pre>
            </figure>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7168878-controlez-le-deroulement-de-votre-programme-avec-des-conditions#/id/video_Player_1" target="_blank">Les conditions</a></h1>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7168878-controlez-le-deroulement-de-votre-programme-avec-des-conditions#/id/video_Player_1" target="_blank"><code class="line_code">if</code>, <code class="line_code">else</code></a></h2>

            <figure class="block_code">
                        <pre><code>
if mon_booleen:
   # exécuter le code quand mon_booleen est vrai
else:
   # exécuter le code quand mon_booleen est faux
                </code></pre>
            </figure>

            <figure class="block_code">
                        <pre><code>
ensoleille = False
neige = True

if ensoleille:
   print("on va à la plage !")
elif neige:
   print("on fait un bonhomme de neige")
else:
   print("on reste à la maison !")
                </code></pre>
            </figure>

            <p>
            Si vous voulez vérifier plusieurs conditions pour un seul résultat dans la même instruction if, vous pouvez utiliser les opérateurs logiques <code class="line_code">and</code>, <code class="line_code">or</code> ou <code class="line_code">not</code>.
            </p>

            <p>
            Si vous avez deux valeurs, <code class="line_code">a</code> et <code class="line_code">b</code>, vous pouvez utiliser les opérateurs de comparaison suivants dans Python : 
            <ul>
                <li>Égal à : a  <code class="line_code">==</code>  b</li>
                <li>Non égal à : a   <code class="line_code">!=</code>  b</li>
                <li>Moins que : a  <code class="line_code"></code>  b</li>
                <li>Moins que ou égal à : a  <code class="line_code"><=</code>  b</li>
                <li>Plus que : a  <code class="line_code">></code>  b</li>
                <li>Plus que ou égal à : a  <code class="line_code">>=</code>  b </li>
            </ul>
            </p>

            <p>
            Ces opérateurs peuvent être combinés et mélangés selon vos besoins.
            </p>

            <figure class="block_code">
                        <pre><code>
avec_soleil = True
en_semaine = False

if avec_soleil and not en_semaine:
   print("on va à la plage !")
elif avec_soleil and en_semaine:
   print("on va au travail !")
else:
   print("on reste à la maison !")
                </code></pre>
            </figure>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7296286-repetez-des-taches-facilement-a-l-aide-de-boucles#/id/video_Player_1" target="_blank">Les boucles</a></h1>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7296286-repetez-des-taches-facilement-a-l-aide-de-boucles#/id/r-7312290" target="_blank"><code class="line_code">for</code></a></h2>

            <p>
            a boucle <code class="line_code">for</code> est le type de boucle centrale dans Python. Une boucle <code class="line_code">for</code> est utilisée pour itérer sur une séquence. Ça peut être une liste, un tuple, un dictionnaire ou même une chaîne de caractères.
            </p>

            <p>
            Avec Python, c’est très facile de créer des boucles. Si vous voulez afficher tous les éléments dans une liste, le code ressemblera à ça :
            </p>

            <figure class="block_code">
                        <pre><code>
races_de_chien = ["golden retriever", "chihuahua", "terrier", "carlin"]
for chien in races_de_chien:
    print(chien)
                </code></pre>
            </figure>

            <figure class="block_code">
                        <pre><code>
for x in range(5):
    print(x)
                </code></pre>
            </figure>

            <p>
            Ce code affichera 0, 1, 2, 3, 4 en séquence.
            </p>

            <figure class="block_code">
                        <pre><code>
for x in range(100):
    print(f"{x} bouteilles de bières au mur !")
                </code></pre>
            </figure>

            <p>
            Les accolades <code class="line_code">{}</code> ci-dessus prennent n’importe quelle valeur dans la variable <code class="line_code">x</code> et la remplace (n’oubliez pas le <code class="line_code">“f”</code> au début de la string qui signifieformat).
            </p>

            <p>
            La fonction <code class="line_code">range()</code> est réglée sur 0 par défaut pour la valeur de début. Vous pouvez la modifier en ajoutant un autre nombre entier comme ça : <code class="line_code">range(4, 10)</code> ! Cette plage renvoie les valeurs de 4 à 9 (sans inclure 10).
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7296286-repetez-des-taches-facilement-a-l-aide-de-boucles#/id/r-7312355" target="_blank"><code class="line_code">while</code></a></h2>

            <p>
            La boucle <code class="line_code">for</code> vous permet d’exécuter du code un nombre spécifique de fois, alors que la boucle <code class="line_code">while</code> continue de s’exécuter jusqu’à ce qu’une certaine condition soit remplie.  
            </p>

            <figure class="block_code">
                        <pre><code>
capacite_maximale = 10
capacite_actuelle = 3
while capacite_actuelle < capacite_maximale:
    capacite_actuelle += 1
                </code></pre>
            </figure>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7296396-regroupez-des-taches-en-utilisant-des-fonctions#/id/video_Player_1" target="_blank">Les fonctions</a></h1>

            <p>
            Une fonction est un bloc de code avec un but spécifique auquel vous pouvez donner un nom. Quand vous appelez cette fonction, vous exécutez le code qu’elle contient. Les fonctions vous laissent saisir des paramètres pour exécuter le même code sur différentes valeurs.  
            </p>

            <p>
            Il y a différents types de fonctions dans Python :
                <ol>
                    <li>Les fonctions intégrées fournies avec Python.</li>
                    <li>Les fonctions définies par l’utilisateur que les développeurs (vous !) créent. </li>
                </ol> 
            </p>

            <p>
            Vous avez déjà utilisé une fonction intégrée ! <code class="line_code">range()</code> est une fonction dans laquelle vous pouvez saisir un nombre et elle renverra ou répondra avec une séquence allant de 0 à -1. 
            </p>

            <p>
            Pensez à une fonction comme à un moyen de réutiliser un ensemble d’instructions répétables. Vous la définissez avec le mot-clé def, le nom de la fonction, des parenthèses et deux-points:. Si la fonction a besoin d’un paramètre ou plus, il faut les saisir à l’intérieur des parenthèses, séparés par des virgules. Admettons que vous voulez ajouter deux nombres ensemble. L’extrait de code ci-dessous est une méthode add()qui prend deux nombres comme paramètres et renvoie la somme. 
            </p>

            <figure class="block_code">
                        <pre><code>
def add(a, b):
    return a + b
                </code></pre>
            </figure>

            <figure class="block_code">
                        <pre><code>
>> add(1,3)
4
>> add(403,123)
526
                </code></pre>
            </figure>

            <p>
            Quand une valeur est renvoyée dans une fonction, vous pouvez la sauvegarder dans une variable.
            </p>

            <figure class="block_code">
                        <pre><code>
total = add(1,4)
                </code></pre>
            </figure>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7296681-importez-des-packages-python#/id/r-7296687" target="_blank">Importez des packages Python</a></h1>

            <p>
            Un package (une bibliothèque en français) est une collection de fonctions qui peuvent être ajoutées au code Python et appelées au besoin, comme n’importe quelle autre fonction. Il n’y a aucune raison de réécrire du code pour réaliser une tâche standard. Avec les packages, vous pouvez importer des fonctions préexistantes et étendre efficacement les fonctionnalités de votre code.
            </p>

            <p>
            Voici quelques exemples de packages populaires et leurs fonctions :
            <ul>
                <li><a href="https://fr.python-requests.org/en/latest/">Requests</a> : un package HTTP élégant et simple pour Python. Fréquemment utilisé pour les appels d’interface REST. </li>
                <li><a href="https://www.crummy.com/software/BeautifulSoup/bs4/doc/">Beautiful Soup</a> (ressource anglais) : un package pour récupérer des données de fichiers HTML et XML.  </li>
                <li><a href="https://pandas.pydata.org/">Pandas</a> (ressource anglais) : un outil open source rapide, puissant et accessible pour l’analyse et la manipulation de données. </li>
            </ul>
            </p>

            <p>
            Installez les packages avec Pip : Pip est un gestionnaire de packages Python. Un gestionnaire de packages est un outil qui permet d’installer et de gérer des packages supplémentaires dans votre terminal. Pip est déjà installé dans Python, comme ça vous êtes prêt à vous y mettre !
            </p>

            <p>
            Pour installer un package avec pip dans votre terminal, utilisez la méthode suivante :
            </p>

            <figure class="block_code">
                        <pre><code>
pip install nom-du-package
                </code></pre>
            </figure>

            <p>
            Pour voir les packages déjà installés, vous pouvez écrire le code qui suit :
            </p>

            <figure class="block_code">
                        <pre><code>
pip freeze
                </code></pre>
            </figure>

            <p>
            Il va afficher une liste de tous les packages existants, qu’on appelle dépendances, dans votre terminal.
            </p>

            <p>
            En utilisant le mot-clé <code class="line_code">import</code> tout en haut de votre fichier de code, vous pourrez importer certaines fonctions d’un package ou le package entier d’un coup. Par exemple, pour importer le package <code class="line_code">Requests</code> entier, vous devez d’abord installer Requests avec votre terminal en utilisant  <code class="line_code">pip install requests</code>. Ensuite vous pouvez écrire le code suivant dans votre éditeur de texte : 
            </p>

            <figure class="block_code">
                        <pre><code>
import requests
                </code></pre>
            </figure>

            <p>
            Après, pour appeler la fonction <code class="line_code">get()</code> dans le package Requests, écrivez :
            </p>

            <figure class="block_code">
                        <pre><code>
requests.get()
                </code></pre>
            </figure>

            <p>
            Si vous voulez importer une seule fonction appelée <code class="line_code">get</code> à partir du package Requests, écrivez ceci : 
            </p>

            <figure class="block_code">
                        <pre><code>
from requests import get
                </code></pre>
            </figure>

            <p>
            Maintenant vous n’avez plus besoin d’écrire requests avant <code class="line_code">get()</code> parce que la méthode elle-même a déjà été importée.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7296776-extrayez-et-transformez-des-donnees-avec-l-extraction-web#/id/video_Player_1" target="_blank">Extraction de données web</a></h1>

            <p>
            L’extraction de données web est un processus automatique de récupération (ou extraction) des données d’un site web. Au lieu de collecter des données manuellement, vous pouvez écrire des scripts Python (une façon contournée de dire des processus de code) qui peuvent collecter des données à partir d’un site web et les sauvegarder dans des fichiers .txt ou .csv.  
            </p>

            <p>
            Pour cet exercice d’extraction, nous allons extraire des nouvelles et des communications du site web d’informations et des services du gouvernement du Royaume-Uni (https://gov.uk), transformer les données dans le format désiré et charger les données dans un fichier CSV. 
            </p>


            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python/7296776-extrayez-et-transformez-des-donnees-avec-l-extraction-web#/id/r-7312607" target="_blank">ETL : Extraire, Transformer, Charger</a></h2>

            <p>
            ETL signifie extraction, transformation et chargement (Extract, Transform, Load en anglais). C’est une procédure qui "permettant d'effectuer des synchronisations massives d'information d'une source de données (le plus souvent une base de données) vers une autre" (source Wikipédia). C’est une manière compliquée de nommer le processus qui sert à récolter des données à un endroit, à les manipuler un peu et à les sauvegarder dans un autre endroit.  
            </p>

            <p>
            L’extraction de données web est une forme d’ETL : vous extrayez des données à partir d’un site web, vous les transformez dans le format que vous voulez et vous les chargez dans un fichier CSV (ou dans une base de données).
            </p>

            <p>
            Pour extraire des données à partir d’un site web, nous devons utiliser le package Requests. Rappelez-vous qu’elle fournit la fonctionnalité de faire des requêtes HTTP. Nous pouvons l’utiliser puisque nous essayons d’obtenir des données à partir d’un site web qui utilise le protocole HTTP (par exemple, http://google.com). 
            </p>

            <p>
            Le package Requests contient une fonction <code class="line_code">get()</code> qui peut être utilisée pour récupérer le code HTML du site.  
            </p>

            <p>
            Pour appliquer ça à l’exercice d’extraction de données web, nous allons utiliser le package Requests pour obtenir le code HTML de la page d’informations et de communication britanniques. Dans le code ci-dessous, nous importons le package, nous sauvegardons l’URL que nous voulons extraire dans une variable <code class="line_code">url</code>, et nous utilisons la méthode <code class="line_code">.get()</code> pour récupérer les données HTML. Si vous exécutez le code ci-dessous, vous verrez le code source HTML affiché dans la console. 
            </p>

            <figure class="block_code">
                        <pre><code>
import requests
url = "https://www.gov.uk/search/news-and-communications"
page = requests.get(url)
# Voir le code html source
print(page.content)
                </code></pre>
            </figure>

            <p>
            Même si nous avons tout le code HTML sauvegardé dans notre code, c’est encore incompréhensible. Il nous faut encore savoir comment parser les éléments exacts que nous voulons. Et nous pouvons utiliser Beautiful Soup pour faire ça !
            </p>

            <p>
            Parser signifie « parcourir le contenu d'un texte ou d'un fichier en l'analysant pour vérifier sa syntaxe ou en extraire des éléments. » (Wiktionnaire)
            </p>

            <p>
            Maintenant que nous avons le code source HTML, nous devons le parser. On parse le HTML avec les attributs HTML <code class="line_code">class</code> et <code class="line_code">id</code> mentionnés plus tôt.
            </p>

            <figure class="block_code">
                        <pre><code>
pip install beautifulsoup4
                </code></pre>
            </figure>

            <figure class="block_code">
                        <pre><code>
import requests
from bs4 import BeautifulSoup
url = "https://www.gov.uk/search/news-and-communications"
page = requests.get(url)
soup = BeautifulSoup(page.content, 'html.parser')
                </code></pre>
            </figure>

            <p>
            La variable <code class="line_code">soup</code> que nous avons créée avec Beautiful Soup possède toutes les fonctions qui facilitent l’obtention de données à partir de HTML. Avant de récupérer les données de la page d’informations et de communications britanniques, nous allons parcourir certaines fonctionnalités de Beautiful Soup avec l’extrait HTML ci-dessous.
            </p>

            <figure class="block_code">
                        <pre><code>
&lthtml&gt
    &lthead&gt&lttitle&gtLes chiens les plus mignons&lt/title&gt&lt/head&gt
    &ltbody&gt
    &ltp class="title"&gt&ltb&gtLes meilleures races de chiens&lt/b&gt&lt/p&gt
    
    &ltp class="chiens"&gtIl existe de nombreuses races de chiens géniales et les meilleures sont :
        &lta href="http://exemple.com/labradoodle" class="race" id="lien1"&gtLabraDoodle&lt/a&gt,
        &lta href="http://exemple.com/retriever" class="race" id="lien2"&gtGolden Retriever&lt/a&gt et
        &lta href="http://exemple.com/carlin" class="race" id="lien3"&gtCarlin&lt/a&gt
     &lt/p&gt
    
    &lt/body&gt
&lt/html&gt
                </code></pre>
            </figure>

            <p>
            Une fois qu’on a créé un objet « soup » à partir du HTML, nous pouvons accéder à tous les éléments de la page très facilement !
            </p>

            <figure class="block_code">
                        <pre><code>
# Récupération du titre de la page HTML
>> soup.title
&lttitle&gt&ltLes chiens les plus mignons&gt&lt/title&gt

# Récupération de la chaîne de caractères du titre HTML
>> soup.title.string
"Les chiens les plus mignons"

# Trouver tous les éléments avec la balise &lta&gt
>>soup.find_all('a')
[ &lta href="http://exemple.com/labradoodle" class="race" id="lien1">LabraDoodle&lt/a&gt,
&lta href="http://exemple.com/retriever" class="race" id="lien2">Golden Retriever&lt/a&gt,
&lta href="http://exemple.com/carlin" class="race" id="lien3">Carlin&lt/a&gt]

# Trouver les éléments avec l’id du « lien1 »
>> soup.find(id="lien1")
&lta href="http://exemple.com/labradoodle" class="race" id="lien1">LabraDoodle&lt/a&gt

#Trouver tous les éléments p avec la classe « title »
>> soup.find_all("p", class_="title")
"Les meilleures races de chiens"
                </code></pre>
            </figure>


            <p>
            Et ce n’est qu’un aperçu de la façon dont Beautiful Soup peut vous aider à obtenir facilement les éléments spécifiques que vous voulez à partir d’une page HTML. Vous pouvez obtenir des éléments par leur balise, ID ou classe.
            </p>

            <p>
            Vous transformez des données quand vous les convertissez d’un format à l’autre. Ça peut être aussi simple que de convertir une chaîne de caractères en une liste, mais ça peut aussi concerner la transformation de milliers de listes en dictionnaires. Généralement, ça nécessite d’associer différents points de données. Il y a plusieurs façons de transformer des données et la décision dépend finalement du type de données et du format que vous voulez avoir.
            </p>

            <p>
            Voici quelques exemples de transformation de données :
                <ul>
                    <li>Convertir un format de champ de date de « 28 décembre 2019 » à 28/12/19. </li>
                    <li>Convertir une somme d’argent de dollars en euros. </li>
                    <li>Standardiser les adresses e-mail ou postales. </li>
                </ul>
            </p>

            <p>
            Python peut être utilisé pour lire les données de différents endroits, y compris les bases de données et les fichiers. Deux types de fichiers sont souvent utilisés : .txt et .csv. Vous pouvez importer et exporter les fichiers avec la fonctionnalité intégrée de Python ou le package CSV. Nous allons voir les deux options !
            </p>


            <p>
            Pour lire et écrire un fichier, vous pouvez utiliser la fonction intégrée <code class="line_code">open()</code>, qui requiert deux paramètres : le nom du fichier et le mode :
            <ul>
                <li>Nom du fichier : le chemin d’accès au fichier que vous voulez lire ou dans lequel vous voulez écrire.</li>
                <li>Mode : le mode que vous voulez utiliser pour le fichier. Les options principales sont :
                    <ul>
                        <li>Lire :  <code class="line_code">"r"</code></li>
                        <li>Écrire (écraser) :  <code class="line_code">"w"</code></li>
                        <li>Continuer d’écrire :  <code class="line_code">"a"</code></li>
                        <li>Lire et écrire (écraser) :  <code class="line_code">"r+"</code></li>
                    </ul>
                </li>
            </ul>
            </p>

            <p>
            Pour créer un nouveau fichier appelé « bonjour.txt » et y écrire « Hello, world! », utilisez le code ci-dessous :
            </p>

            <figure class="block_code">
                        <pre><code>
fichier = open("hello.txt", "w")
fichier.write("Hello, world!")
fichier.close()
                </code></pre>
            </figure>

            <p>
            Vous pouvez aussi utiliser l’instruction <code class="line_code">with</code> pour fermer automatiquement le fichier à la fin du bloc : 
            </p>

            <figure class="block_code">
                        <pre><code>
with open("file.txt") as fichier:
   for ligne in fichier:
      # faire quelque chose avec une ligne
      print(ligne)
                </code></pre>
            </figure>

            <p>
            Avec ce code, le fichier d’entrée va être affiché ligne par ligne. Vous avez probablement remarqué que nous n’avons pas spécifié de mode dans <code class="line_code">open()</code> C’est tout simplement parce que le mode d’ouverture par défaut est la lecture ou <code class="line_code">"r"</code> !
            </p>

            <p>
            La méthode <code class="line_code">open()</code> peut lire et écrire sur les fichiers <code class="line_code">.txt</code> et <code class="line_code">.csv</code>, mais vous pouvez aussi utiliser le package CSV de Python pour lire et écrire dans les fichiers CSV. Ce package offre plus de fonctionnalités.
            </p>

            <p>
            Quand vous utilisez le package CSV, vous devez aussi utiliser la fonction <code class="line_code">open()</code> pour ouvrir le fichier. Vous pouvez ensuite utiliser les méthodes <code class="line_code">reader()</code> ou <code class="line_code">writer()</code> sur le fichier pour le lire ou y écrire.
            </p>

            <p>
            La méthode <code class="line_code">.reader()</code> va prendre tout le texte dans un CSV, le parser ligne par ligne et convertir chaque ligne dans une liste de chaînes. Vous pouvez utiliser différents délimiteurs pour décider de la manière de séparer chaque colonne, mais le séparateur le plus commun est une virgule. L’extrait de code ci-dessous lit le fichier CSV et affiche chaque ligne.
            </p>

            <figure class="block_code">
                        <pre><code>
import csv

with open('couleurs_preferees.csv') as fichier_csv:
   reader = csv.reader(fichier_csv, delimiter=',')
   for ligne in reader:
      print(ligne)
                </code></pre>
            </figure>

            <p>
            Le résultat sera comme ceci :
            </p>

            <figure class="block_code">
                        <pre><code>
['nom', 'metier', 'couleur_preferee']
['Jacob Smith', 'Ingénieur en informatique', 'Violet']
['Nora Scheffer', 'Stratégiste numérique', 'Bleu']
['Emily Adams', 'Responsable marketing', 'Orange']
                </code></pre>
            </figure>

            <p>
            Bien que cette approche peut être utile parfois, la ligne d’en-tête est considérée comme la même que les autres. Une méthode plus utile pour lire les fichiers CSV, tout en reconnaissant les en-têtes pour identifier les colonnes, est la méthode <code class="line_code">DictReader()</code>. Cette méthode sait que la première ligne est un en-tête et sauvegarde les autres lignes en tant que dictionnaires. Chaque clé est un nom de colonne et la valeur est la valeur de la colonne.
            </p>

            <figure class="block_code">
                        <pre><code>
import csv

with open('couleurs_preferees.csv') as fichier_csv:
   reader = csv.DictReader(fichier_csv, delimiter=',')
   for ligne in reader:
      print(ligne['nom'] + " travaille en tant que " + ligne['metier'] + " et sa couleur préférée est " + ligne['couleur_preferee'])
                </code></pre>
            </figure>

            <p>
            Le résultat affichera :
            </p>

            <figure class="block_code">
                        <pre><code>
Jacob Smith travaille en tant que Ingénieur en informatique et sa couleur préférée est Violet
Nora Scheffer travaille en tant que Stratégiste numérique et sa couleur préférée est Bleu
Emily Adams travaille en tant que Responsable marketing et sa couleur préférée est Orange
                </code></pre>
            </figure>

            <p>
            Nous avons déjà écrit le code pour extraire et transformer les données du site d’informations et services du gouvernement britannique. Nous avons sauvegardé tous les titres et descriptions dans des listes de chaînes de caractères. Maintenant nous pouvons utiliser les fonctions <code class="line_code">.writer()</code> et <code class="line_code">.writerow()</code> pour écrire les données dans le fichier CSV. 
            </p>

            <figure class="block_code">
                        <pre><code>
# Créer une liste pour les en-têtes
en_tete = ["titre", "description"]

# Créer un nouveau fichier pour écrire dans le fichier appelé « data.csv »
with open('data.csv', 'w') as fichier_csv:
   # Créer un objet writer (écriture) avec ce fichier
   writer = csv.writer(fichier_csv, delimiter=',')
   writer.writerow(en_tete)
   # Parcourir les titres et descriptions - zip permet d'itérer sur deux listes ou plus à la fois
   for titre, description in zip(titres, descriptions):
      # Créer une nouvelle ligne avec le titre et la description à ce moment de la boucle
      ligne = [titre, description]
      writer.writerow(ligne)

                </code></pre>
            </figure>


            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7150616-apprenez-la-programmation-orientee-objet-avec-python/7197146-comprenez-la-programmation-orientee-objet#/id/r-7195335" target="_blank">La POO en python</a></h1>

            <p>
            Si la classe sert de modèle, de recette pour créer nos objets, les objets sont des créations qui prennent vie dans votre code.
            </p>

            <p>
            Les objets peuvent être stockés dans une variable, et le type de cette variable référence la classe. De la même façon que le type du chiffre « 5 » est un entier (int), et le type du mot « bonjour » est une chaîne de caractères (str), le type d’un objet gâteau est Cake.
            </p>

            <p>
            Vous pouvez modifier l’état d’un objet, ou appeler des méthodes dessus.
            </p>

            <p>
            On peut instancier plusieurs objets de la même classe, et ces objets sont indépendants. 
            </p>

            <p>
            Techniquement, il s’agit de manipuler des sortes de conteneurs (les classes), qui stockent à la fois des valeurs brutes (appelées « propriétés ») et des fonctions (appelées « méthodes »).
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7150616-apprenez-la-programmation-orientee-objet-avec-python/7195400-ecrivez-une-classe-python#/id/video_Player_1" target="_blank">Les classes</a></h2>

            <p>
            On utilise le mot-clé <code class="line_code">class</code>, des déclarations de fonctions (<code class="line_code">def</code>), et des déclarations d’affectation de variables (<code class="line_code">x = 3</code>).
            </p>

            <figure class="block_code">
                        <pre><code>
class Rectangle:
    width = 3
    height = 2

    def calculate_area(self):
        return self.width * self.height
                </code></pre>
            </figure>

            <p>
            Les noms de classe, par convention, commencent par une majuscule. S’il y a plusieurs mots dans le nom d’une classe, on utilise généralement le CapitalizedCase, en mettant une majuscule à la première lettre de chaque mot.
            </p>

            <p>
            Toutes les variables et méthodes qui composent cette classe (ses « attributs ») sont définies en dessous dans sa portée (« scope », en anglais), avec une indentation supplémentaire de 4 espaces.
            </p>

            <p>
            Un scope en Python est défini par le niveau d’indentation. Vous avez déjà écrit des conditions if et utilisé les indentations pour montrer où le code doit se résoudre – c’est la même chose avec les classes.
            </p>

            <p>
            Quand on déclare une méthode, on utilise le mot-clé <code class="line_code">def</code> – exactement comme pour les fonctions. 
            </p>

            <p>
            Les méthodes d’instance incluent toujours « <code class="line_code">self</code> » en premier paramètre. Ce paramètre référence l’objet lui-même, et il permet d’accéder à ses autres attributs. 
            </p>

            <p>
            Contrairement à certains autres langages de programmation, avec Python il n’est pas nécessaire de prédéfinir les variables existant dans votre classe, ou leur type, à l’avance.
            </p>

            <div class="em">Note sur le paramètre self : le nom « self » n’est qu’une convention : on pourrait très bien le renommer en « instance_actuelle », ou « this », ou encore « toto ». Votre code fonctionnerait aussi bien. C’est cependant une convention très forte en Python, donc prenez-la au mot. 🙏</div>

            <p>
            Il existe une catégorie spéciale de méthode nommée constructeur. Chaque classe en a un, et il est utilisé pour créer des objets à partir de cette classe. En Python, notre constructeur est une méthode magique nommée <code class="line_code">__init__</code>, que l’on peut utiliser un peu comme ceci :
            </p>

            <figure class="block_code">
                        <pre><code>
class Rectangle:
    def __init__(self, length, width, color="red"):
        self.length = length
        self.width = width
        self.color = color
                </code></pre>
            </figure>

            <p>
            Ce sont des attributs d’instance, qui seront propres à chaque objet créé.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7150616-apprenez-la-programmation-orientee-objet-avec-python/7195794-creez-et-utilisez-des-objets-python#/id/video_Player_1" target="_blank">Les objets</a></h2>

            <p>
            À la fin du chapitre précédent, nous avons écrit quelques constructeurs. Utilisons-les enfin pour créer un objet.
            </p>

            <p>
            Voici un exemple qui crée un <code class="line_code">Rectangle</code> de longueur 5 et de largeur 3 :
            </p>

            <figure class="block_code">
                        <pre><code>
rectangle = Rectangle(5, 3)
                </code></pre>
            </figure>


            <p>
            Nous pouvons accéder aux attributs d’un objet et leur affecter des valeurs comme ceci :
            </p>

            <figure class="block_code">
                        <pre><code>
print(rectangle.length)
rectangle.color = "yellow"
                </code></pre>
            </figure>

            <p>
            Nous pouvons également assigner des variables aux retours de méthodes, comme avec les fonctions :
            </p>

            <figure class="block_code">
                        <pre><code>
area = rectangle.calculate_area()
print(area)
                </code></pre>
            </figure>

            <p>
            Vous serez amené à lire trois types d’attributs de classe dans votre pratique du Python :
            <ul>
                <li>les attributs d’instance : variables définies à l’aide de <code class="line_code">self</code>. Elles sont relatives à l’instance, et ne peuvent être accédées sans instanciation.</li>
                <li>les attributs de classe : variables définies directement dans le corps de la classe. Elles peuvent être accédées par la classe, sans passer par l’instanciation. Les attributs de classe peuvent se référencer entre eux, mais ne peuvent pas accéder aux attributs d’instance. Elles seront précédées par un <code class="line_code">@classmethod</code>, et leur premier paramètre sera <code class="line_code">cls</code> (à la place de <code class="line_code">self</code>) :</li>
                <li>les attributs statiques : attributs qui n’ont pratiquement aucun lien avec la classe. Seules les méthodes peuvent être statiques, et l’ajout par rapport aux attributs de classe est minime : on n'a plus besoin de spécifier le paramètre <code class="line_code">cls</code>. Pour créer un attribut statique, il suffit de faire précéder la méthode par <code class="line_code">@staticmethod</code></li>
            </ul>
            </p>

            <p>
            Je vous recommande de privilégier les attributs d’instance qui permettent d’utiliser la programmation orientée objet à son plein potentiel. Les attributs de classe peuvent être très utiles, mais sont censés être plus rares. Enfin, les attributs statiques sont à l’opposé du paradigme orienté objet : évitez de les utiliser, quitte à utiliser un attribut de classe à la place. 😉
            </p>

            <figure class="block_code">
                        <pre><code>
class Bird:
    """Un oiseau. 🐦"""

    # ici on utilise deux attributs de classe.
    names = ("mouette", "pigeon", "moineau", "hirrondelle")
    positions = {}

    def __init__(self, name):
        """Les attributs définis ici sont des attributs d'instance."""
        self.position = 1, 2
        self.name = name
        
        # On accède à l'attribut de classe "positions" avec self (c'est possible).
        self.positions[self.position] = self.name

    @classmethod
    def find_bird(cls, position):
        """Retrouve un oiseau selon la position donnée."""
        if position in cls.positions:
            return f"On a trouvé un {cls.positions[position]} !"

        return "On a rien trouvé..."

    @staticmethod
    def get_definition():
        """Donne la définition d'un oiseau."""
        return (
        "Animal (vertébré à sang chaud) au corps recouvert de plumes, "
        "dont les membres antérieurs sont des ailes et qui a un bec."
        )

print(Bird.get_definition())


# On peut accéder aux variables de classe sans instanciation.
Bird.names
Bird.positions
print(Bird.find_bird((2, 5)))

# On instancie un oiseau
bird = Bird("mouette")

# On le retrouve avec la méthode find_bird.
print(Bird.find_bird((1, 2)))
                </code></pre>
            </figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7150616-apprenez-la-programmation-orientee-objet-avec-python/7196180-appliquez-l-heritage-dans-votre-code-python#/id/video_Player_1" target="_blank">L’héritage</a></h2>

            <p>
            L’héritage vous permet de créer une sous-classe (ou classe enfant) d’une classe parent, qui contient les attributs du parent ainsi que d’autres attributs spécifiques à l’enfant.
            </p>

            <p>
            Nous utilisons l’héritage en programmation orientée objet pour plusieurs raisons différentes, mais liées entre elles :
                <ul>
                    <li>La réutilisabilité</li>
                    <li>L'extensibilité</li>
                    <li>Les modèles</li>
                </ul>
            </p>

            <figure class="block_code">
                        <pre><code>
class FilmCassette(Film):         // FilmCassette hérite de Film (entre parenthèse)
    """Un film en cassette !"""

    def __init__(self, name):
        """Initialise le nom et la bande magnetique."""
        self.name = name
        self.magnetic_tape = True
    
    def rewind(self):
        """Rembobine le film."""
        print("C'est long à rembobiner !")
        self.magnetic_tape = True
                </code></pre>
            </figure>

            <p>
            En cas d’héritage multiple – sujet que nous aborderons brièvement plus loin – les classes parents sont séparées par des parenthèses, de façon similaire à celle dont fonctionnent les paramètres de fonctions, comme ceci : <code class="line_code">class SousClasse(ParentUn,ParentDeux, ...)</code>.
            </p>

            <p>
            L’héritage multiple est à utiliser avec précaution – pour la plupart des problèmes, il existe généralement des designs plus simples et plus faciles. Nous y reviendrons.
            </p>

            <div class="em">Si vous ne spécifiez pas de classe parent (ce que nous avions fait dans l’exercice de la partie précédente), vous dites en fait à Python de faire de la classe une sous-classe d’Object. <code class="line_code">Object</code> constitue la base de toutes les classes, ce qui peut prêter à confusion. Vous vous souvenez que toutes les classes possèdent un constructeur sans argument par défaut ? C’est parce qu’elles héritent d’Object.</div>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7150616-apprenez-la-programmation-orientee-objet-avec-python/7196334-surchargez-les-methodes-en-python#/id/video_Player_1" target="_blank">La surcharge</a></h2>

            <p>
            La surcharge désigne le concept selon lequel une classe enfant crée une nouvelle implémentation d’une méthode héritée. Lorsqu’une méthode dans une classe enfant est créée avec le même nom et la même signature qu’une méthode dans le parent, la méthode enfant l’emporte.
            </p>

            <figure class="block_code">
                        <pre><code>
from abc import ABC   # permet de définir des classes de base

class Shape(ABC):
    def area(self):
        return 0


class Square(Shape):
    def __init__(self, length):
        self.length = length

    def area(self):
        return length * length
                </code></pre>
            </figure>

            <p>
            Dans cet exemple, <code class="line_code">Shape</code> contient une méthode de superficie qui renvoie l’aire de la forme : <code class="line_code">area()</code>. <code class="line_code">Square</code> surcharge cette méthode en implémentant la formule pour l’aire d’un carré.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7150616-apprenez-la-programmation-orientee-objet-avec-python/7196334-surchargez-les-methodes-en-python#/id/r-7226488" target="_blank">Les classes abstraites</a></h2>

            <p>
            Bon, je comprends que <code class="line_code">area()</code> est surchargé, mais qu’est-ce que c’est que cet <code class="line_code">ABC</code> ?
            </p>

            <p>
            ABC signifie Abstract Base Class, ou classe de base abstraite. Il s’agit du mécanisme utilisé par Python pour implémenter ce que l’on nomme une classe abstraite.
            </p>

            <p>
            Une classe abstraite est une classe qui ne peut pas être instanciée – la seule façon de l’utiliser est de créer une sous-classe. 
            </p>

            <p>
            Une classe abstraite peut aussi insister pour qu’une méthode soit implémentée par ses enfants. Essayez de trouver le décorateur <code class="line_code">@abstractmethod</code> dans la documentation Python.
            </p>

            <p>
            Bien que la surcharge nous permette de modifier entièrement des comportements hérités, il peut parfois être utile d’avoir accès au code des méthodes des classes parents, depuis les classes enfants.
            </p>

            <p>
            L’un des emplacements les plus courants pour cette utilisation se trouve dans les constructeurs. Pour cela, nous utilisons <code class="line_code">super()</code> – comme ceci :
            </p>

            <figure class="block_code">
                        <pre><code>
class Drink:
    """Une boisson."""

    def __init__(self, price):
        """Initialise un prix."""
        self.price = price

    def drink(self):
        """Boire la boisson."""
        print("Je ne sais pas ce que c'est, mais je le bois.")


class Coffee(Drink):
    """Café."""
    
    prices = {"simple": 1, "serré": 1, "allongé": 1.5}

    def __init__(self, type):
        """Initialise le type du café."""
        self.type = type
        super().__init__(price=self.prices.get(type, 1))


    def drink(self):
    """Boire le café."""
        print("Un bon café pour me réveiller !")
                </code></pre>
            </figure>


            <p>
            Dans cet exemple, <code class="line_code">Coffee</code> est une sous-classe de <code class="line_code">Drink</code>. La classe <code class="line_code">Coffee</code> possède ses propres tarifs, qu’elle passe au constructeur de <code class="line_code">Drink</code> pour initialiser le bon prix !
            </p>

            <p>
            L’approche avec <code class="line_code">super()</code> vous permet de réutiliser le code plutôt que de le copier, et assure le regroupement des fonctionnalités de façon logique – soit deux des plus grands avantages de la programmation orientée objet !
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7150616-apprenez-la-programmation-orientee-objet-avec-python/7196419-utilisez-les-hierarchies-d-heritage-et-l-heritage-multiple#/id/video_Player_1" target="_blank">L'héritage multiple</a></h2>

            <img src="../images/16189371266543_P2C4-1.png" />

            <p>
            Nous pouvons observer que :
            <ol>
                <li><code class="line_code">FilmCassette</code> hérite de <code class="line_code">Film</code>.</li>
                <li><code class="line_code">FilmCassetteVHS</code> hérite de <code class="line_code">FilmCassette</code>.</li>
            </ol>
            </p>

            <p>
            Ainsi, les attributs de <code class="line_code">Film</code> se retrouvent dans la classe <code class="line_code">FilmCassetteVHS</code> également !
            </p>

            <p>
            L’héritage multiple a mauvaise réputation en programmation orientée objet – les systèmes qui utilisent l’héritage multiple peuvent être difficiles à comprendre. De plus, certains langages de programmation proposent des implémentations médiocres d’héritages multiples qui provoquent des problèmes.
            </p>

            <p>
            Le plus souvent, l’héritage multiple n’est pas une bonne solution à votre problème, mais il n’en reste pas moins qu’il existe quelques situations où il représente la meilleure solution possible. En tout cas, comme vous risquez de rencontrer l’héritage multiple dans votre activité professionnelle, nous le traiterons donc ici.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7150616-apprenez-la-programmation-orientee-objet-avec-python/7196587-utilisez-des-objets-dans-des-collections#/id/video_Player_1" target="_blank">Utilisez des objets dans des collections</a></h2>

            <p>
            Les collections comprennent des listes – où les données ont une position et sont indexables – et des dictionnaires – où on attribue une clé aux données.
            </p>

            <p>
            Les dictionnaires se doivent d’avoir des clés immutables (“immuables”). Les valeurs immuables sont par exemple des nombres et des chaînes de caractères – lorsque la valeur ne peut pas être changée après sa création. À part dans des cas très spéciaux, toutes les classes que vous écrirez seront mutables (“muables”) – elles peuvent être modifiées – et donc elles ne peuvent pas constituer des clés dans un dictionnaire. Créer des objets immuables est possible, mais c’est un peu complexe, et leur utilité est plus rare. 
            </p>

            <p>
            Bref – les objets de n’importe quelle classe sont comme n’importe quel autre élément ! Ils peuvent eux aussi être stockés dans des collections, un peu comme ici ; disons qu’il s’agit de notre liste de bénévoles pour une collecte de nourriture locale :
            </p>

            <figure class="block_code">
                        <pre><code>
class Person:
    """Personne."""

    def __init__(self, name):
        """Donne un nom."""
        self.name = name
    
    def walk(self):
        """Marche."""
        print(f"{self.name} marche.")


volunteers = [Person("Alice"), Person("Bob"), Person("Carol")]
for volunteer in volunteers:
    volunteer.walk()

# Ici, nous reprenons nos outils !
toolbox = {
    "screwdriver": Screwdriver(50),
    "hammer": Hammer(),
    "nails": [Nail(), Nail(), Nail()],
}
                </code></pre>
            </figure>

            <p>
            De la même façon que précédemment, nous avons une liste et un dictionnaire – mais cette fois, la liste contient des Personnes, et le dictionnaire contient toutes sortes de choses ! Nous avons même ici une boucle for, qui accomplit des itérations sur nos bénévoles (qui sont tous des objets Personne) et qui invoque leur méthode <code class="line_code">walk()</code>.
            </p>

            <p>
            Qu’est-ce qui pourrait bien mal se passer ? 
            </p>

            <p>
            Python utilise ce que l’on appelle le duck typing (littéralement, typage de canard) : si ça a un bec et que ça cancane comme un canard, alors c’est probablement un canard. Autrement dit, les méthodes ou attributs d’un objet sont plus importants que son type ou sa classe.
            </p>

            <p>
            Prenons un exemple. Et si nos bénévoles étaient un peu différents cette semaine ?
            </p>

            <figure class="block_code">
                        <pre><code>
volunteers = [Person("Alice"), Fish("Wanda"), Person("Bob")]

for volunteer in volunteers:
    volunteer.walk()  # Oops!
                </code></pre>
            </figure>

            <p>
            Les poissons ne peuvent pas marcher, donc si nous exécutons ce code, nous obtiendrons ce genre de chose : <code class="line_code">AttributeError: ‘Fish’ object has no attribute ‘walk’</code>.
            </p>

            <p>
            Dans d’autres langages, vous auriez à définir la Liste comme contenant un type particulier – mais cela ne nous intéresse pas en Python ! Nous avons simplement une liste, et elle contient des choses : nous ne saurons pas que les poissons ne peuvent pas marcher, jusqu’à ce que notre programme plante. 
            </p>

            <p>
            Il existe quelques stratégies que vous pouvez utiliser de différentes façons et à des degrés différents. Le choix des stratégies que vous utilisez dépendra fortement de la nature de votre programme.
            <ul>
                <li>Documentez votre code : Vous pouvez documenter votre code à l’aide de docstrings (pour les fonctions, classes, méthodes et modules). Elles sont une forme de documentation réelle pour votre code (elles peuvent se récupérer par votre éditeur de code, ou générer des documentations sous forme de site, via des bibliothèques spécialisées pour).</li>
                <li>Typez votre code : Python 3 vous fournit une bibliothèque detypes, qui vous permet d’écrire du code avec des annotations de type, de façon similaire à d’autres langages. Cette possibilité est de plus en plus utilisée – suivez le guide de styles du projet (nous y reviendrons dans la partie suivante) pour savoir si vous l’utiliserez ou non.
                <figure class="block_code">
                        <pre><code>
from typing import List

 
def highest(numbers: List[int]) -> int:
    max_value = 0
    for number in numbers:
        if number > max_value:
            max_value = number
    return max_value
                </code></pre>
            </figure>
            Cette fonction retourne l’entier (int) le plus élevé d’une liste d’entiers. La signature de cette fonction dit que les nombres doivent constituer une  List[int]  – une liste d’entiers – et le type de retour de cette fonction est int.
                </li>
                <li>la « programmation défensive » : La base de l’approche de la programmation défensive, c’est de se prémunir contre la possibilité d’erreurs ou de fautes. </li>
                <li>Gérez des exceptions : Certaines opérations non valides durant l’exécution d’un programme Python provoquent des exceptions – qui indiquent à l’utilisateur et à d’autres parties du programme qu’une erreur a eu lieu. Try Catch</li>
            </ul>
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7150616-apprenez-la-programmation-orientee-objet-avec-python/7197031-gerez-les-exceptions#/id/r-7210217" target="_blank">Les exceptions</a></h1>

            <p>
            Les exceptions sont déclenchées – ou levées, ou lancées – par un programme. Les exceptions que vous avez pu voir précédemment – comme  <code class="line_code">NameError</code>,  <code class="line_code">ZeroDivisionError</code>, ou <code class="line_code">IndexError</code> – sont toutes des exceptions intégrées qui sont lancées par les éléments internes de Python lui-même.
            </p>

            <p>
            Nous pouvons également lancer des exceptions personnalisées dans nos propres programmes. Pour ce faire, on utilise le mot-clé <code class="line_code">raise</code>.
            </p>

            <figure class="block_code">
                        <pre><code>
def get_half_even_number(number):
    if number % 2 == 0:
        return number / 2
    else:
        message = (
        f"This Function only supports halving even numbers. Received: {number}"
        )
        raise Exception(message)
                </code></pre>
            </figure>

            <p>
            Dans cet exemple, nous déclenchons une exception avec un message – une chaîne qui s’affiche pour l’utilisateur quand l’exception se produit. Dans ce cas, l’exception donne des informations sur l’erreur en elle-même.
            </p>

            <p>
            Toutes les exceptions Python sont des objets, ce qui mérite d’être souligné. <code class="line_code">Exception</code> est la classe de base des exceptions Python, dont tout hérite. Cela signifie que nous pouvons créer nos propres exceptions – ce que nous couvrirons après une note rapide sur la…
            </p>

            <p>
            Lorsqu’une exception est déclenchée dans notre code – et qu’elle n’est pas gérée – habituellement, notre programme s’arrête.
            </p>

            <p>
            Nous pouvons gérer une exception en utilisant un <code class="line_code">try-except</code> (souvent appelé une instruction try-catch dans d’autres langages).
            </p>
            
            <figure class="block_code">
                        <pre><code>
def increase_percent(initial_value, after_value):
    try:
        return (after_value / initial_value) * 100
    except ZeroDivisionError:
        return 0
    except Exception as error:
        print("Uh oh, unexpected error occurred!")
        raise error
                </code></pre>
            </figure>

            <p>
            Ici, nous avons une fonction, <code class="line_code">increase_percent</code>, qui calcule l’augmentation (ou la réduction !) du pourcentage à partir d’une valeur initiale. Notre calcul se trouve dans un bloc <code class="line_code">try</code>, ce qui signifie que si une exception se produit, elle sera gérée par nos blocs « except », au lieu de se contenter de planter.
            </p>


            <p>
            Prenons un exemple. Le problème le plus évident qui pourrait survenir ici serait une erreur de division par zéro. Dans cette fonction, si une <code class="line_code">ZeroDivisionError</code> est lancée, nous l’attrapons et retournons 0 à la place, grâce au premier bloc d’exception. L’exception est officiellement gérée et le programme ne plante pas !
            </p>

            <p>
            D’autre part, si l’exception qui se produit n’est pas une <code class="line_code">ZeroDivisionError</code>, nous la déclenchons simplement à nouveau. Vous voyez le <code class="line_code">as error</code> dans le deuxième bloc except ? Il assigne l’objet exception à la variable error, que nous pouvons alors redéclencher – soit pour qu’elle soit gérée par un autre bloc try dans lequel cette fonction a été appelée, soit simplement pour mettre fin au programme.
            </p>

            <p>
            Lorsqu’une exception est levée, elle se propage dans le programme. Python ne fait plus les choses dans l’ordre, mais lance plutôt continuellement l’exception en remontant la pile – c’est-à-dire la pile de fonctions/méthodes qui ont appelé d’autres fonctions/méthodes. L’exception va continuer à remonter jusqu’à ce qu’elle soit gérée ou qu’elle n’ait plus nulle part où aller. Dans ce dernier cas, le programme plante.
            </p>

            <div class="em">Si dans cet exemple nous avons soulevé <code class="line_code">Exception</code> comme erreur par défaut, c’est globalement une mauvaise pratique ! Utilisez toujours des erreurs plus ciblées pour être sûr de ne pas passer sous silence des erreurs qui pourraient générer des résultats inattendus dans votre code. 📛</div>

            <p>
            Dans un programme complexe, de nombreuses choses peuvent mal se passer. Pour gérer des problèmes uniques, Python nous permet de définir nos propres exceptions personnalisées. Si nous gardons en tête que les exceptions sont des objets, nous pouvons définir nos propres classes d’Exceptions, exactement comme nous le ferions pour tout autre objet.
            </p>

            <figure class="block_code">
                        <pre><code>
class InvalidAddressException(Exception):
    """Gère les exceptions liées aux mauvaises adresses."""
    pass

 
class OwlContactSystem(ContactSystem):
    def __init__(self, address):
        if (not validate_address(address)):
            raise InvalidAddressException(f"Adresse invalide: {address}"
        self.address = address
                </code></pre>
            </figure>

            <p>
            Ici, nous utilisons notre <code class="line_code">OwlContactSystem</code> de tout à l’heure. Dans notre constructeur, nous appelons la fonction <code class="line_code">validate_address</code> avec la chaîne d’adresse e-mail qui est donnée. Si la validation de l’adresse e-mail échoue, nous déclenchons une <code class="line_code">InvalidAddressException</code> – qui aura probablement besoin d’être gérée par quiconque appelle ce constructeur.
            </p>

            <p>
            Mais <code class="line_code">InvalidAddressException</code> ne fait rien, alors pourquoi l’utiliser ?
            </p>

            <p>
            De nombreuses exceptions personnalisées ressemblent à cela. Bien qu’il soit possible de surcharger des méthodes dans une exception personnalisée, le simple fait de disposer d’un type séparé nous est en réalité très utile.
            </p>

            <p>
            Nous pouvons aussi mettre un message par défaut, ce qui est souvent plus pratique :
            </p>

            <figure class="block_code">
                        <pre><code>
class InvalidAddressException(Exception):
    """Gère les exceptions liées aux mauvaises adresses."""
 
    def __init__(self, address, base_message="Adresse invalide !", *args, **kwargs):
        """Initialise le message.
         
        
        L’utilisation de *args et **kwags permet de prendre un nombre
        de paramètres dynamiques.
        """
        msg = f"{base_message} Adresse: {address}"
        super().__init__(msg, *args, **kwargs)
                </code></pre>
            </figure>

            <p>
            Souvenez-vous de l’instruction except – <code class="line_code">except InvalidAddressException</code>, par exemple. Le bloc <code class="line_code">except</code> correspond au type de l’exception. Autrement dit, le bloc <code class="line_code">except</code> aura lieu si l’expression déclenchée est du type <code class="line_code">InvalidAddressException</code>. Le type de l’exception est suffisant à lui seul !
            </p>

            <p>
            Une dernière chose : les exceptions personnalisées dans une grosse application n’héritent habituellement pas directement d’exception. Nous faisons alors généralement quelque chose qui ressemble à ceci :
            </p>

            <figure class="block_code">
                        <pre><code>
class MyAppException(Exception):
    pass


class MyAppInvalidAddressException(MyAppException):
    pass
                </code></pre>
            </figure>

            <p>
            Nous définissons <code class="line_code">MyAppException</code> comme classe de base pour notre hiérarchie d’exceptions personnalisées. Cela nous permet de savoir très rapidement si une exception est déclenchée depuis notre application ou pas ! Vous verrez que de nombreuses bibliothèques Python ont également leur propre classe de base d’exceptions personnalisées.
            </p>

            <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7150616-apprenez-la-programmation-orientee-objet-avec-python/7197031-gerez-les-exceptions#/id/r-7210217" target="_blank">Les librairies Python pour la Data Science</a></h1>


            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7150616-apprenez-la-programmation-orientee-objet-avec-python/7197031-gerez-les-exceptions#/id/r-7210217" target="_blank">Le notebook Jupyter</a></h2>

            <p>
            Jupyter Notebook est une application web qui vous permet de stocker des lignes de code Python, les résultats de l’exécution de ces dernières (graphiques, tableaux, etc.) et du texte formaté. Cela peut être comparé à une page web... contenant du code Python ! Un peu comme ce cours, en fin de compte.
            </p>

            <p>
            Jupyter Notebook est un outil puissant qui permet aux utilisateurs du langage Python de créer et de partager des documents interactifs contenant du code dynamique et exécutable, des visualisations de contenus, des textes de documentation et des équations. Le terme "notebook" est lié au caractère intrinsèque de l’outil qui permet d’écrire des petits bouts de code exécutable (appelés "cellules"), de les documenter pour expliquer ce qu’ils font, et d’afficher les données résultant de leur exécution. Tout cela est stocké dans un document partageable avec d’autres utilisateurs.
            </p>

            <p>
            C’est donc particulièrement pratique pour prototyper des algorithmes ou tester des bouts de code, afin d’analyser les résultats et éventuellement de les ajouter à votre projet principal. Avec un notebook, pas besoin d’organiser son code avec des fonctions. Vous avez juste besoin d’écrire votre code dans les blocs prédéfinis et de l’exécuter, pour "faire tourner du Python".
            </p>

            <p>
            Jupyter Notebook est une application très populaire pour l’ensemble des personnes travaillant dans l’analyse de données. Il permet à une équipe de pouvoir créer et partager des rapports sous forme de document/code, facilitant ainsi la productivité et la collaboration.
            </p>


            <p>
            Pour démarrer un notebook Jupyter, vous avez deux options. Soit vous souhaitez travailler sur votre propre machine et dans ce cas-là, il faudra installer Python et Jupyter – via la distribution Anaconda, par exemple. Soit vous pouvez utiliser un notebook directement hébergé dans le cloud : le plus connu en la matière est indéniablement Google Collaboratory, ou <a href="https://colab.research.google.com/">Google Colab</a>, pour les intimes.
            </p>

            <p>
            Le notebook comporte, de haut en bas : le nom de votre notebook (que vous pouvez modifier en cliquant dessus), une barre de menu, une barre d’outils et une cellule vide. Essayez d’écrire dans cette cellule votre première ligne de code, et cliquez ensuite sur  Exécuter  – ou Run  –  si vous êtes en local, ou sur la petite flèche à gauche de la case correspondante sous Google Colab. Dire "Bonjour", par exemple, serait un bon début.
            </p>

            <p>
            Si vous voulez gagner du temps, vous pouvez utiliser les raccourcis d'exécution ! Par exemple, plutôt que de cliquer sur Run, vous pouvez :
            <ul>
                <li>faire la combinaison Ctrl / command + Entrée pour exécuter la case courante ;</li>
                <li>ou faire Alt + Entrée pour exécuter la case courante et passer directement à la suivante.</li>
            </ul>
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6204541-initiez-vous-a-python-pour-lanalyse-de-donnees/6250516-prenez-en-main-les-modules-et-librairies-python#/id/r-6250529" target="_blank">Un module en Python</a></h2>

            <p>
            Un module est un ficher Python contenant un ensemble de fonctions, de classes et de variables prédéfinies et fonctionnelles, que vous pouvez utiliser comme bon vous semble dans votre code !
            </p>

            <p>
            Par exemple, si vous travaillez sur une problématique faisant intervenir de la géométrie, vous pourriez avoir besoin de :
            <ul>
                <li>Classes :
                    <ul>
                        <li>carré – défini par la longueur de son côté,</li>
                        <li>triangle – défini par la longueur de ses trois côtés,</li>
                        <li>cercle – défini par son rayon,</li>
                        <li>etc. ;</li>
                    </ul>
                </li>
                <li>Variables :
                    <ul>
                        <li>pi : constante indispensable pour calculer l’aire d’un cercle, égale à 3,1415...,</li>
                        <li>phi : constante représentant le nombre d’or, égale à 1,6180... ;</li>
                    </ul>
                </li>
                <li>Fonctions :
                    <ul>
                        <li>aire : qui prend en paramètre un objet géométrique (carré, triangle, etc.) et calcule son aire,</li>
                        <li>angles : qui prend en paramètre un triangle, et calcule les angles internes de ce dernier ,</li>
                        <li>etc.</li>
                    </ul>
                </li>
            </ul>
            </p>

            <p>
            Vous pouvez naturellement définir toutes ces choses dans votre notebook, mais cela ne ferait que l’alourdir. Le mieux est de stocker tout cela dans un fichier Python externe, que vous allez ensuite importer dans votre notebook : c’est un module !
            </p>

            <img src="../images/15580956040425_geometry methode fr.png"/>

            <p>
            Pour pouvoir importer un module, vous allez avoir besoin du mot clé <code class="line_code">import</code>. Voici un exemple avec notre module geometry :
            </p>

            <figure class="block_code">
                        <pre><code>
import geometry
                </code></pre>
            </figure>

            <p>
            Après avoir fait cela, vous pouvez utiliser les différents éléments définis dans votre module :
            </p>

            <figure class="block_code">
                        <pre><code>
car = geometry.carre(4)
tri = geometry.triangle(3, 6, 5)

print(geometry.pi) # -> 3.14159265359

geometry.aire(car) # -> 16
                </code></pre>
            </figure>

            <p>
            Tous les éléments inclus dans le module geometry peuvent être utilisés via la notation  nomModule.fonction()  ou encore  nomModule.variable. Si vous ne souhaitez pas réécrire geometry à chaque fois, vous avez deux autres options :
            <ul>
                <li>    soit donner un alias au nom de votre module, pour n’avoir à écrire que l’alias : <code class="line_code">import geometry as geo # on peut maintenant accéder à geo.aire() ou geo.pi</code></li>
                <li>soit importer des fonctions spécifiques que vous pourrez ensuite utiliser comme des fonctions/variables Python natives (sans la notation .) : <code class="line_code">from geometry import pi / print(pi) # -> 3.14159265359</code></li>
            </ul>
            </p>

            <p>
            Un cas particulier de cette dernière méthode est d’importer en une ligne tous les objets contenus dans un module via la notation <code class="line_code">*</code>. Néanmoins, ce n’est pas la méthode préconisée, afin d’éviter par exemple les conflits entre plusieurs modules qui pourraient avoir un nom de fonction identique.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6204541-initiez-vous-a-python-pour-lanalyse-de-donnees/6250516-prenez-en-main-les-modules-et-librairies-python#/id/r-6250529" target="_blank">Les packages</a></h2>

            <p>
            Un package (appelé parfois librairie) est une collection, un ensemble de modules Python. Comme vous l’avez vu ci-dessus, un module est un fichier Python. Un package est simplement un dossier contenant plusieurs fichiers Python (.py) et un fichier additionnel nommé <code class="line_code">__init__.py</code>. Ce dernier différencie un package d’un dossier lambda contenant uniquement des codes Python.
            </p>

            <p>
            Vous aurez besoin d’utiliser l’opérateur <code class="line_code">.</code> pour accéder au module, après avoir importé le package :
            </p>

            <figure class="block_code">
                        <pre><code>
import geometry # import all the geometry package

print(geometry.variables.pi) # -> 3.1415...
car = geometry.classes.carre(4)
geometry.fonctions.aire(car) # -> 16
                </code></pre>
            </figure>

            <p>
            Ou vous pouvez également importer seulement un module du package :
            </p>

            <figure class="block_code">
                        <pre><code>
import geometry.variables as var # importer uniquement ce qui est défini dans variables.py

print(var.pi) # -> 3.1415...
                </code></pre>
            </figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6204541-initiez-vous-a-python-pour-lanalyse-de-donnees/6250516-prenez-en-main-les-modules-et-librairies-python#/id/r-6250529" target="_blank">Le module Random</a></h2>

            <p>
                <a href="https://docs.python.org/3/library/random.html">Doc ici</a>
            </p>

            <p>
            Il existe de nombreux phénomènes dus au hasard dans la réalité, et il peut être utile, parfois numériquement, de pouvoir modéliser ces phénomènes pour balayer les différents cas/scénarios possibles. En Python, le module random contient plusieurs fonctions pour pouvoir générer des nombres ou des suites de nombres aléatoires.
            </p>

            <figure class="block_code">
                        <pre><code>
import random
                </code></pre>
            </figure>

            <p>
            La fonction de base de génération de nombre aléatoire s’appelle... <code class="line_code">random()</code> également (quelle originalité ;)). Elle va générer un float aléatoire compris entre 0 et 1 non inclus. Réalisez un exemple simple en affichant 3 nombres aléatoires :
            </p>

            <figure class="block_code">
                        <pre><code>
for i in range(3):
    print(random.random())
                </code></pre>
            </figure>

            <p>
            Mais avoir un nombre entre 0 et 1 uniquement, c’est un peu limité... non ? Tout à fait ! Mais ceux qui ont créé le package random ont heureusement pensé à tout. Vous avez d’autres fonctions vous permettant de générer un nombre aléatoire dans un intervalle donné :
            </p>

            <figure class="block_code">
                        <pre><code>
uniform(a, b) # va générer un float aléatoire compris entre  a  et  b;
randint(a, b) # le nombre aléatoire généré est cette fois-ci un entier !
                </code></pre>
            </figure>

            <p>
            Le module random permet également de générer un nombre aléatoire suivant une distribution. L’une des plus connues est la loi gaussienne (ou normale). Si vous ne la connaissez pas encore, laissez-moi vous la présenter !
            </p>

            <p>
            Le module random vous permet de générer des nombres aléatoires selon cette loi : c’est-à-dire que l’on a beaucoup plus de chances d’avoir des valeurs proches de la moyenne (avec l’exemple ci-dessus, entre 85 et 115) que des valeurs extrêmes (proches de 70 ou 130). La fonction correspondante s’appelle <code class="line_code">gauss(moyenne, écart-type)</code>.
            </p>

            <p>
            Comme vous le savez déjà, pour sélectionner un élément dans une liste, il faut le faire via son indice. Si vous voulez sélectionner un élément aléatoirement dans une liste, une solution un peu naïve pourrait être de tirer l’indice aléatoirement. Le module random va un peu plus loin en proposant une fonction permettant de faire la sélection directement sur la liste : la fonction <code class="line_code">choice</code>.
            </p>

            <figure class="block_code">
                        <pre><code>
liste = ['one','two','three','fou','five']
for i in range(3):
    print(random.choice(list))
                </code></pre>
            </figure>

            <p>
                On peut aussi sélectionner un échantillon de la liste initiale, avec remise : <code class="line_code">print(random.choice(liste, k=2))</code>
            </p>

            <p>
            On parle alors de sous-échantillonnage. La fonction correspondante, pour un échantillon sans remise, est <code class="line_code">sample</code> : <code class="line_code">random.sample(liste, 2))</code>
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6204541-initiez-vous-a-python-pour-lanalyse-de-donnees/6250516-prenez-en-main-les-modules-et-librairies-python#/id/r-6250529" target="_blank">Le module Numpy</a></h2>

            <p>
                <a href="https://docs.scipy.org/doc/numpy-1.13.0/reference/ufuncs.html">Doc ici</a>
            </p>

            <p>
                Les objets natifs de Python sont assez limités pour les manipuler correctement.
            </p>

            <p>
            Si on souhaite calculer la moyenne d'une liste d'int par exemple, il n’y a pas de fonction existante par défaut permettant de le faire : il faudrait la recoder soi-même ! C’est encore plus compliqué si on souhaite avoir une information plus spécifique, comme la médiane.
            </p>

            <p>
            C’est là que la librairie NumPy intervient ! 
            </p>

            <p>
            Diminutif de Numerical Python, elle fournit un ensemble de fonctions pour effectuer efficacement des opérations sur les données, mais propose également un objet qui est au cœur de presque tout l’écosystème data en Python : l’array.
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7771531-decouvrez-les-librairies-python-pour-la-data-science/7856832-creez-vos-premiers-arrays-avec-numpy#/id/r-7856630" target="_blank">Les arrays NumPy</a></h3>

            <p>
            Le tableau NumPy, ou array, en anglais, est d’une certaine manière similaire à une liste Python. Son avantage ? Il permet d’effectuer simplement et rapidement de nombreuses opérations complexes, en plus de faciliter le stockage et la manipulation des données.
            </p>

            <p>
                Pour calculer une moyenne par exemple, on fait comme ceci :
            </p>

            <figure class="block_code">
                        <pre><code>
import numpy as np
revenus = [1800, 1500, 2200, 3000, 2172]
np.mean(revenus)
                </code></pre>
            </figure>

            <p>
            C’est tout à fait logique, car la vraie révolution vient avec les arrays NumPy ! On estime qu’à mesure que la taille du tableau augmente, des opérations via array NumPy deviennent environ 30 fois plus rapides que via une liste Python classique. 
            </p>

            <p>
            Cette différence aussi importante s’explique par le fait que les arrays NumPy ne peuvent contenir qu’un seul et même type. En effet, contrairement à une liste classique où l’on peut stocker tous types d’objets, NumPy n’acceptera qu’un seul type en entrée.
            </p>

            <p>
            De plus, NumPy donne également accès à de nombreuses autres fonctions mathématiques indispensables, applicables à des arrays ou même à des listes :
            </p>

            <figure class="block_code">
                        <pre><code>
x = [-2, -1, 1, 2]
print("La valeur absolue: ", np.abs(x))
print("Exponentielle: ", np.exp(x))
print("Logarithme: ", np.log(np.abs(x)))
                </code></pre>
            </figure>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7771531-decouvrez-les-librairies-python-pour-la-data-science/7856832-creez-vos-premiers-arrays-avec-numpy#/id/r-7856654" target="_blank">Créez un array NumPy</a></h3>

            <p>
            Vous pouvez faire cela de différentes façons, mais la plus simple est de le faire… à partir d’une liste Python classique :
            </p>

            <figure class="block_code">
                        <pre><code>
revenus_array = np.array(revenus)
revenus_array
# array([1800, 1500, 2200, 3000, 2172])
                </code></pre>
            </figure>

            <div class="em">Si dans la liste de départ il y a des données de types différents, NumPy essaiera de tous les convertir au type le plus général. Par exemple, si un tableau contient des entiers ( <code class="line_code">int</code> ) et des nombres décimaux ( <code class="line_code">float</code> ), tous ses éléments seront convertis en nombres décimaux ( <code class="line_code">float</code> ).</div>

            <p>
            Il existe également des fonctions NumPy permettant de créer des arrays selon un certain pattern ou une spécification particulière. Les plus couramment utilisées sont :
                <ul>
                    <li><code class="line_code">np.zeros(n)</code> : permet de créer un array rempli de 0, de n éléments ;</li>
                    <li><code class="line_code">np.ones(n)</code> : similaire en tous points à la fonction présentée ci-dessus, à la différence que l’array sera rempli cette fois-ci de 1 ;</li>
                    <li><code class="line_code">np.arange(i, j, p)</code> : permet de créer un array rempli avec une séquence linéaire, qui ira de  i  à  j, par pas de  p  ;</li>
                    <li><code class="line_code">np.linspace(i, j, n)</code> : permet de créer un array de  n  valeurs espacées uniformément entre  i  et  j.</li>
                </ul>
            </p>

            <p>
            Comme nous avons pu le voir précédemment, un array ne peut contenir qu’un seul et unique type. Vous pouvez accéder au type des éléments d’un array via la méthode <code class="line_code">.dtype</code> :
            </p>

            <figure class="block_code">
                        <pre><code>
revenus_array.dtype
# dtype('int32')
                </code></pre>
            </figure>

            <p>
                <a href="https://numpy.org/doc/stable/user/basics.types.html">Infos sur les type numpy ici</a>
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7771531-decouvrez-les-librairies-python-pour-la-data-science/7856832-creez-vos-premiers-arrays-avec-numpy#/id/r-7856676" target="_blank">Sélectionnez des éléments au sein d’un array</a></h3>

            <figure class="block_code">
                        <pre><code>
# pour accéder au 5ème élement
revenus_array[4]

# pour accéder au dernier élément
revenus_array[-1]

# On peut aussi modifier les valeurs
revenus_array[1] = 1900

revenus_array[0:3]
                </code></pre>
            </figure>

            <p>
            Nous pouvons accéder à un ensemble d'éléments contigus avec la syntaxe suivante : <code class="line_code">nom_array[i:j:p]</code> , avec :
            <ul>
                <li> i  : l’indice du début ;</li>
                <li> j  : l’indice de fin (non inclu dans la sélection : de i à j-1);</li>
                <li>p : le pas.</li>
            </ul>
            </p>

            <div class="em">Le début peut être omis si on veut commencer au début de la liste (c'est-à-dire si début = 0). La fin peut être omise si on veut aller jusqu'au bout de la liste (c'est-à-dire fin = -1 ou fin = <code class="line_code">len(liste)</code> ). Le pas, ainsi que le dernier <code class="line_code">:</code> , peuvent être omis si le pas est de 1 (-1 si la fin est inférieure au début).</div>


            <figure class="block_code">
                        <pre><code>
# Les 3 premiers éléments
print(revenus_array[:3])

# Les éléments à partir de l’indice 2
print(revenus_array[2:])

# Un élément sur deux
print(revenus_array[::2])

# Inverser le tableau
revenus_array[::-1]
                </code></pre>
            </figure>

            <p>
            même façon qu’il est possible de sélectionner des éléments via leur indice, il est possible avec les arrays NumPy de renseigner la condition selon laquelle on souhaite sélectionner les éléments du tableau, avec l’écriture <code class="line_code">nom_array[condition de sélection]</code>.
            </p>

            <figure class="block_code">
                        <pre><code>
revenus_array[revenus_array > 2000]
# array([2200, 3000, 2172])

revenus_array[(revenus_array > 2000) & (revenus_array < 3000)]
# array([2200, 2172])
                </code></pre>
            </figure>

            <div class="em">Le et logique (respectivement ou logique) n’est pas matérialisé par le mot clé "and" (respectivement "or") comme dans une structure conditionnelle <code class="line_code">if</code> classique, mais par le symbole  <code class="line_code">&</code> (respectivement  "<code class="line_code">|</code>"). De plus, chaque condition doit être absolument délimitée par des parenthèses, sous peine de rencontrer une erreur. Cette écriture s’explique par le fait qu’on ne compare pas des booléens, mais des arrays de booléens, terme à terme.</div>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7771531-decouvrez-les-librairies-python-pour-la-data-science/7856832-creez-vos-premiers-arrays-avec-numpy#/id/r-7856798" target="_blank">Les méthodes d’array</a></h3>

            <p>
                <a href="https://numpy.org/doc/stable/reference/generated/numpy.ndarray.html">Toutes les méthodes ici</a>.
            </p>

            <figure class="block_code">
                <pre><code>
revenus_array.shape
# (5,) on a array contenant 5 éléments

# calculer la moyenne
revenus_array.mean()

# calculer le maximum (ou le minimum) :
revenus_array.max()
revenus_array.min()

# accéder à l’indice de l’élement minimum (ou maximum) :
revenus_array.argmin()
revenus_array.argmax()

# ordonner par ordre croissant :
revenus_array.sort()
print(revenus_array)

# calculer la somme :
revenus_array.sum()
                </code></pre>
            </figure>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7771531-decouvrez-les-librairies-python-pour-la-data-science/7856832-creez-vos-premiers-arrays-avec-numpy#/id/r-7856798" target="_blank">Array et matrices</a></h3>

            <p>
            Jusque-là, nous n’avons vu que des tableaux/arrays à une dimension, mais on ne travaille que très rarement avec une seule colonne.
            </p>

            <p>
            Et voici comment pourrait se matérialiser ce tableau en Python, en utilisant des listes :
            </p>

            <figure class="block_code">
                <pre><code>
# [âge, revenus, nb d'enfant]
hugo = [21, 1400, 0]
richard = [54, 2800, 2]
emilie = [27, 3700, 3]
tableau = [hugo, richard, emilie]
                </code></pre>
            </figure>

            <p>
            La liste <code class="line_code">tableau</code> contient donc 3 éléments, qui sont eux-mêmes des listes de 3 éléments : c’est donc une liste de listes. Nous avons néanmoins toujours l’ensemble des limitations liées aux listes, avec cette façon de faire.
            </p>

            <p>
            Comment pourrions-nous faire alors ?
            </p>

            <p>
            Vous vous en doutez très certainement, mais oui, encore une fois la réponse se trouve du côté de NumPy et des arrays !
            </p>

            <p>
            En effet, un array est un objet multidimensionnel, c’est-à -dire qu’il est possible de créer des arrays de toutes dimensions, et que l’ensemble des méthodes d’array prennent en compte ce côté multidimensionnel. Génial, non ? Testons tout cela ensemble ! 
            </p>

            <figure class="block_code">
                <pre><code>
tab1 = np.array([[1, 2],
    [3, 4],
    [5, 6]])

tab2 = np.array([[1, 2, 3],
        [4, 5, 6]])
                </code></pre>
            </figure>

            <p>
            Ces quelques lignes de code permettent de créer :
            <ul>
                <li>un array <code class="line_code">tab1</code> de 3 lignes et 2 colonnes ;</li>
                <li>et un array <code class="line_code">tab2</code> de 2 lignes et 3 colonnes.</li>
            </ul>
            </p>

            <div class="em">Il est possible de créer des tableaux en bien plus que 2 dimensions. Par exemple, pour un tableau en 3D il suffira d’utiliser une liste de listes de listes.</div>

            <p>
            Comme précédemment, nous pouvons également utiliser des fonctions NumPy pour créer des tableaux plus ou moins complexes. Voici quelques exemples de fonctions couramment utilisées :
            </p>

            <figure class="block_code">
                <pre><code>
# un tableau de 3x5 rempli de 1
np.ones((3, 5))

# un tableau de 4 lignes et de 4 colonnes contenant que des 0
np.zeros((4, 4))

# un tableau de 6x3 rempli de valeurs aléatoires comprises entre 0 et 1
np.random.random((6, 3))

# un tableau de 3x3 rempli de valeurs aléatoires entières, comprises entre 1 et 10
np.random.randint(1, 10, size=(3, 3))
                </code></pre>
            </figure>

            <p>
            Les tableaux que nous avons vus ensemble jusqu'ici, matérialisés par des arrays NumPy, portent le nom de matrices, en mathématiques. Le but premier de NumPy, avant même toutes ses applications dans le domaine de la data, est de proposer des outils pour manipuler ces matrices et effectuer ce qu’on appelle des calculs matriciels.
            </p>

            <p>
            Nous avons régulièrement à effectuer différentes opérations avec ces matrices. Considérons les 3 matrices suivantes, A, B et C :
            </p>

            <img src="../images/16526890878291_Capture d’écran 2022-05-16 à 10.17.32.png" />

            <p>
            Comme elles sont de même dimension (même nombre de lignes et de colonnes), on peut calculer la somme (ou la différence) de la matrice A et de la matrice B, en additionnant terme à terme chaque élément :
            </p>

            <img src="../images/16526891363109_Capture d’écran 2022-05-16 à 10.18.36.png" />

            <p>
            La même chose avec NumPy :
            </p>

            <figure class="block_code">
                <pre><code>
A = np.array([[1, 2], [3, 4]])
B = np.array([[5, 10], [15, 20]])
C = np.array([[2, 4, 6], [8, 10, 12]])

A+B
                </code></pre>
            </figure>

            <p>
            Il est également possible de faire une multiplication terme à terme via l’opérateur <code class="line_code">*</code>, comme avec une multiplication normale : <code class="line_code">A*B</code>.
            </p>

            <p>
            Cependant, lorsqu’on effectue des calculs matriciels, on utilise beaucoup plus ce qu’on appelle le produit matriciel. C’est un calcul assez fastidieux à faire à la main – d’autant plus avec des matrices de grande dimension – mais qu’un ordinateur n'a en revanche aucun problème à réaliser.
            </p>

            <p>
            Avec NumPy, le produit matriciel se fait via l’opérateur <code class="line_code">@</code> :  <code class="line_code">A @ C</code>. Cependant, cet opérateur n’est disponible que depuis Python 3.5. Avant cela, le produit matriciel se faisait via la fonction <code class="line_code">dot</code> de NumPy : <code class="line_code">AC = np.dot(A, C)</code>. Cette dernière fonctionne toujours aujourd’hui, les deux syntaxes sont donc possibles !
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7771531-decouvrez-les-librairies-python-pour-la-data-science/7856832-creez-vos-premiers-arrays-avec-numpy#/id/r-7856798" target="_blank">Les manipulations avancées d’array</a></h3>

            <p>
                Reprenons notre Array <code class="line_code">tableau</code> :
            </p>

            <figure class="block_code">
                <pre><code>
hugo = [21, 1400, 0]
richard = [54, 2800, 2]
emilie = [27, 3700, 3]
tableau = [hugo, richard, emilie]
                </code></pre>
            </figure>

            <p>
On transforme cette liste en Array numpy :
            </p>

            <figure class="block_code">
                <pre><code>
data = np.array(tableau)
data 
array([[21, 1400, 0],
[54, 2800, 2],
[27, 3700, 3]])
                </code></pre>
            </figure>

            <p>
            Pour sélectionner le premier indice de la première ligne :
            </p>

            <figure class="block_code">
                <pre><code>
# Pour sélectionner le premier indice de la première ligne 
data[0,0]

# Pour sélectionner la première ligne ( et toutes les colones ):
data[0,:]

# Pour sélectionner toutes les lignes de la 3ème colone :
data[:,2]

# Pour sélectionner à partir de condition (dont la 3ème colone est <= 2):
data[data[:,2] <= 2]

# Pour ajouter une ligne à la fin du tableau :
fred = [32, 2220, 0]
np.vstack((data, fred))
                </code></pre>
            </figure>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7771531-decouvrez-les-librairies-python-pour-la-data-science/7856832-creez-vos-premiers-arrays-avec-numpy#/id/r-7856798" target="_blank">Les data frame avec Pandas</a></h2>
















<?php 
    $content = ob_get_clean(); 

    require_once('structure/layout.php');
?>
