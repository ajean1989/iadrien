<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <title>Git & Github</title>
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

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165703-decouvrez-la-magie-du-controle-de-versions#/id/r-7480594" target="_blank">Git ou GitHub ? Quelle est la différence ?</a></h1>

                <p>
                    <div class="em">
                        <strong>Git</strong> est un gestionnaire de versions. Vous l’utiliserez pour créer un dépôt local et gérer les versions de vos fichiers.<br/>
                        <strong>GitHub</strong> est un service en ligne qui va héberger votre dépôt. Dans ce cas, on parle de dépôt distant puisqu’il n’est pas stocké sur votre machine.
                    </div>
                    Git est la préparation que vous avez réalisée chez vous, et GitHub est l'entrepôt où elle peut être modifiée par les autres ou distribuée.
                </p>
                <p>
                    Dans la documentation en ligne ou en milieu professionnel, on parle souvent de repository, qui est la traduction anglaise du terme “dépôt”.
                </p>

                <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165721-installez-git-sur-votre-ordinateur#/id/video_Player_1" target="_blank">Git</a></h1>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165721-installez-git-sur-votre-ordinateur#/id/r-7480865" target="_blank">Installer et configurer</a></h2>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165721-installez-git-sur-votre-ordinateur#/id/r-7480875" target="_blank">Configurer votre identité</a></h3>

                <p>
                    Commencez par renseigner votre nom et votre adresse e-mail. C'est une information importante car vous en aurez besoin pour toutes vos validations dans Git :
                </p>
                <figure class="block_code">
                    <pre><code>
$ git config --global user.name "adrien" 
$ git config --global user.email adrienjean1989@gmail.com
                    </code></pre>
                </figure>

                <p>
                    <code class="line_code">--global</code> permet de configurer pour tous les dossiers. On peut configurer qu'un seul dossier avec <code class="line_code">global</code>.<br/>
                    Pour vérifier que vos paramètres ont bien été pris en compte, et vérifier les autres paramètres, il suffit de passer la commande <code class="line_code">git config --list</code>.
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165721-installez-git-sur-votre-ordinateur#/id/r-7480879" target="_blank">Configurer les couleurs</a></h3>


                <figure class="block_code">
                    <pre><code>
$ git config --global color.diff auto 
$ git config --global color.status auto 
$ git config --global color.branch auto
                    </code></pre>
                </figure>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165721-installez-git-sur-votre-ordinateur#/id/r-7480883" target="_blank">Configurer l'éditeur</a></h3>

                <p>
                    Par défaut, Git utilise Vim comme éditeur et Vimdiff comme outil de merge. Vous pouvez les modifier en utilisant :
                </p>
                <figure class="block_code">
                    <pre><code>
$ git config --global core.editor notepad++ 
$ git config --global merge.tool vimdiff
                    </code></pre>
                </figure>
                

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165721-installez-git-sur-votre-ordinateur#/id/r-7480917" target="_blank">Créer un dépôt local vide</a></h2>

                <figure class="block_code">
                    <pre><code>
$ cd Documents/PremierProjet
adrien ~/Documents/PremierProjet
$ git init
Initialized empty Git repository in c:/users/JohnDoe/Documents/PremierProjet/
                    </code></pre>
                </figure>

                <p>
                    <div class="em">La première ligne permet de vous positionner dans le dossier que vous venez de créer sur l’ordinateur. La seconde ligne va initialiser ce “simple dossier” comme un dépôt.</div>
                    Votre dossier n’a rien de nouveau, mais c’est normal . Vous avez pourtant bien initialisé votre dépôt Git. Un dossier caché .git a été créé ! Vous pouvez l'afficher en allant dans Affichage => Éléments masqués.<br/>
                    Pour les plus curieux d’entre vous, sachez que ce dossier caché contient tous les éléments non visibles de Git : la configuration, les “logs”, les branches...
                </p>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165726-travaillez-depuis-votre-depot-local-git#/id/r-7481038" target="_blank">Fonctionnement</a></h2>

                <img src='../images/16334576106761_image27.png' alt="schéma de fonctionnement"/>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165726-travaillez-depuis-votre-depot-local-git#/id/r-7481023" target="_blank">Le Working directory</a></h3>

                <p>
                    Cette zone correspond au dossier du projet sur votre ordinateur.
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165726-travaillez-depuis-votre-depot-local-git#/id/r-7481025" target="_blank">Le Stage ou index</a></h3>

                <p>
                    Cette zone est un intermédiaire entre le working directory et le repository. Elle représente tous les fichiers modifiés que vous souhaitez voir apparaître dans votre prochaine version de code.
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165726-travaillez-depuis-votre-depot-local-git#/id/r-7481037" target="_blank">Le Repository</a></h3>

                Lorsque l’on crée de nouvelles versions d’un projet (vous vous souvenez, les 3 versions différentes du gâteau ?), c’est dans cette zone qu’elles sont stockées.<br/>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165726-travaillez-depuis-votre-depot-local-git#/id/r-7481027" target="_blank">Cinématique</a></h3>

                <p>
                    Ces 3 zones sont donc présentes dans votre ordinateur, en local.<br/>
                    En-dessous, vous trouvez le repository GitHub, c’est-à-dire votre dépôt distant.<br/>
                    Imaginez un projet composé de 3 fichiers : fichier1, fichier2 et fichier3.<br/>
                    Nous faisons une modification sur fichier1, puis une modification sur fichier2, depuis le working directory.<br/>
                    Super ! Nous avons maintenant une version évoluée de notre projet. Nous aimerions sauvegarder cette version grâce à Git, c'est-à-dire la stocker dans le repository.<br/>
                    Pour commencer, nous allons envoyer les fichiers modifiés (fichier1 et fichier2) du working directory vers l’index. On dit qu’on va <strong>indexer</strong> fichier1 et fichier2. Une fois les fichiers indexés, nous pouvons créer une nouvelle version de notre projet.
                </p>
                <div class="em">Le terme “stage” est aussi beaucoup utilisé par les développeurs à la place du terme “index”. On peut dire “indexer un fichier” ou “stage un fichier”.</div>
                <p>
                    Pour résumer :
                    <ul>
                        <li><strong><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165726-travaillez-depuis-votre-depot-local-git#/id/r-7482738" target="blank">1</a></strong>. Créez les premiers fichiers dans le working directory.</li>
                        <li><strong><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165726-travaillez-depuis-votre-depot-local-git#/id/r-7481074" target="blank">2</a></strong>.  Indexez vos fichiers avec la commande <code class="line_code">git add</code> : <code class="line_code">$ git add index.html styles.css</code> toujours avec gitbash et étant bien positionné dans le wd (<code class="line_code">pwd</code> ou <code class="line_code">cd working directory</code>).</li>
                        <li><strong><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165726-travaillez-depuis-votre-depot-local-git#/id/r-7481082" target="blank">3</a></strong>. Créez une nouvelle version avec la commande <code class="line_code">git commit</code> : <code class="line_code">git commit -m “Ajout des fichiers html et css de base”</code> ;  -m (comme message) est ce qu'on appelle un argument, qui est ajouté à la commande principale. Ici "-m" permet de définir un message particulier rattaché au commit effectué. La description est très importante pour retrouver le fil de vos commits, et revenir sur un commit en particulier. Ne la négligez pas ! Il ne serait pas pratique de nommer des commits du type "version 1", "version 2", "version 2.1", car vous seriez alors obligé de lire le fichier pour connaître les modifications réalisées.</li>
                        <li><strong><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165726-travaillez-depuis-votre-depot-local-git#/id/r-7481125">4</a></strong>. Envoyez votre commit sur le dépôt distant avec la commande <code class="line_code">git push</code> comme suit :
                            <ul>
                                <li><code class="line_code">git remote add origin https://github.com/EtudiantOC/OpenclassroomsProject</code> lien disponnible sur github dans le projet. (<code class="line_code">git remote</code> donne le nom utiliser (ici origin) pour représenter l'URL)</li>
                                <li><code class="line_code">git branch -M main</code> pour relié le dépôt local au dépôt distant.</li>
                                <li>Vous pouvez donc envoyer des commits du repository vers le dépôt distant GitHub en utilisant la commande suivante : <code class="line_code">git push -u origin main</code> ; la version du projet est maintenant stockée dans le cloud !</li>
                            </ul>
                        </li>
                    </ul>
                    Pour toute autre modification : 
                    <ul>
                        <li>Indexer le fichier HTML modifié grâce à la commande : <br/>
                        <figure class="block_code">
                            <pre><code>
git add index.html
                            </code></pre>
                        </figure>
                        </li>
                        <li>Créer une nouvelle version grâce à la commande :<br/>
                        <figure class="block_code">
                            <pre><code>
git commit -m “Modification du titre H1”
                            </code></pre>
                        </figure>
                        </li>
                        <li>Envoyer la nouvelle version sur le dépôt distant grâce à la commande :<br/>
                        <figure class="block_code">
                            <pre><code>
git push origin main
                            </code></pre>
                        </figure>
                        </li>
                    </ul>

                   <img src='../images/16334576106761_image27.png' alt="schéma de fonctionnement"/>


                   <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://git-scm.com/docs" target="_blank">Les fontions en détail</a></h3>

                   <p>
                        <ul>
                            <li><a href="https://git-scm.com/docs/git-init" target="blank"><code class="line_code">git-init</code></a> - Create an empty Git repository or reinitialize an existing one</li>
                            <li><a href="https://git-scm.com/docs/git-add" target="blank"><code class="line_code">git-add</code></a> - Add file contents to the index</li>
                            <li><a href="https://git-scm.com/docs/git-commit" target="blank"><code class="line_code">git-commit</code></a> - Record changes to the repository</li>
                            <li><a href="https://git-scm.com/docs/git-remote" target="blank"><code class="line_code">git-remote</code></a> - Manage set of tracked repositories</li>
                            <li><code class="line_code">git remote add</code> [-t &ltbranch&gt] [-m &ltmaster&gt] [-f] [--[no-]tags] [--mirror=(fetch|push)] &ltname&gt &ltURL&gt - Add a remote named &ltname&gt for the repository at &ltURL&gt.</li>
                            <li><a href="https://git-scm.com/docs/git-branch" target="blank"><code class="line_code">git-branch</code></a> - List, create, or delete branches </li>
                            <li><a href="https://git-scm.com/docs/git-push" target="blank"><code class="line_code">git-push</code></a> - Mettre à jour les références distantes avec les objets associés</li>

                        </ul>
                    </p>

                    <img src="../images/versionner.png" alt="les commandes"/>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7475886-apprehendez-le-systeme-de-branches#/id/video_Player_1" target="_blank">Le système de Branche</a></h2>

                    <p>
                        Les différentes branches correspondent à des copies de votre code principal à un instant T, où vous pourrez tester toutes vos idées les plus folles sans que cela impacte votre code principal.
                    </p>
                    <p>
                        Sous Git, la branche principale est appelée la branche main, ou master pour les dépôts créés avant octobre 2020. La branche principale (main ou master) portera l’intégralité des modifications effectuées. Le but n’est donc pas de réaliser les modifications directement sur cette branche, mais de les réaliser sur d’autres branches, et après divers tests, de les intégrer sur la branche principale.
                    </p>
                    <p>
                        Une fois que toutes vos modifications auront été testées, vous pourrez les envoyer en production sans crainte en les intégrant à la branche main (et dans le pire des cas, revenir en arrière simplement) !
                    </p>
                    <div class="em">
                        Je vous conseille fortement de créer une branche si votre modification est lourde, compliquée, ou si elle risque d’avoir des impacts importants sur votre projet.
                    </div>
                    <img src="../images/16334584924239_image15.png" alt="schéma des branches"/>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7475886-apprehendez-le-systeme-de-branches#/id/video_Player_2" target="_blank">Quelques fonctions</a></h3>

                    <figure class="block_code">
                            <pre><code>
git branch    // renvoie * main ou * master ; l'étoile signifie que c'est la branche sur laquelle on se situe
                            </code></pre>
                    </figure>

                    <p>
                        On créer à présent une nouvelle branche "cagnotte" :
                    </p>

                    <figure class="block_code">
                            <pre><code>
git branch cagnotte   // créer une branche en local, pas sur le dépôt distant 
                            </code></pre>
                    </figure>

                    <p>
                        Pour basculer sur la branche cagnotte, on utilise : 
                    </p>

                    <figure class="block_code">
                            <pre><code>
git checkout cagnotte  // avec git branch on aura alors l'toile sur cagnotte
                            </code></pre>
                    </figure>

                    <p>
                        La branche va fonctionner comme un dossier virtuelle. On reste dans le dossier init physiquement. <br/>
                        Vous pouvez re-basculer si besoin à tout moment sur la branche main, sans impacter les modifications de la branche Cagnotte.
                    </p>
                    <p>
                        Vous avez réalisé des évolutions sur la branche Cagnotte, il faut maintenant demander à Git de les enregistrer, de créer une nouvelle version du projet comprenant les évolutions réalisées sur la branche Cagnotte. Vous devez créer un "commit" grâce à la commande :
                    </p>

                    <figure class="block_code">
                            <pre><code>
git commit -m “Réalisation de la partie cagnotte côté front end”
                            </code></pre>
                    </figure>

                    <p>
                        Il ne vous reste plus qu’à envoyer les modifications réalisées sur le dépôt distant grace à la commande git push que nous avons vu précédemment.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7475886-apprehendez-le-systeme-de-branches#/id/video_Player_2" target="_blank">Fusionner avec la commande <code class="line_code">git merge</code></a></h3>

                    <p>
                        À présent, il faut intégrer l'évolution réalisée dans la branche "cagnotte" à la branche principale "main". Pour cela, vous devez utiliser la commande "git merge".<br/>
                        Cette commande doit s'utiliser à partir de la branche dans laquelle nous voulons apporter les évolutions. Dans notre cas, la commande s’effectuera donc dans la branche main. Pour y retourner, utilisez la commande :
                    </p>

                    <figure class="block_code">
                            <pre><code>
git checkout main      // ou master
                            </code></pre>
                    </figure>

                    <p>
                        Maintenant que vous êtes dans votre branche principale, vous pouvez fusionner votre branche "cagnotte" à celle-ci grâce à la commande suivante :
                    </p>

                    <figure class="block_code">
                            <pre><code>
git merge cagnotte
                            </code></pre>
                    </figure>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165692-travaillez-avec-un-depot-distant#/id/r-7481322" target="_blank">Travaillez avec un dépôt distant</a></h2>

                    <p>
                        Voyons comment accéder à un dépôt distant et le copier en local. <br/>
                        Tout d’abord, vous allez récupérer l’URL du dépôt distant : cela se passe sur GitHub ! Dans le dépôt distant rubrique "Code", section HTTPS.<br/>
                        Taper la commande suivante :
                    </p>

                    <figure class="block_code">
                            <pre><code>
git clone &ltURL&gt
                            </code></pre>
                    </figure>

                    <p>
                        On peut créer un raccourci pour gagner du temps :
                    </p>

                    <figure class="block_code">
                            <pre><code>
git remote add &ltNOM&gt &ltURL&gt
                            </code></pre>
                    </figure>

                    <p>
                        Cette ligne ne permet pas de copier le dépôt, mais permet de dire au dépôt que l’on pointe vers le dépôt distant.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165692-travaillez-avec-un-depot-distant#/id/r-7481330" target="_blank">Mettez à jour le dépôt en local</a></h2>

                    <p>
                        Imaginons que durant la semaine, un de vos amis ait ajouté des modifications sur la branche main et que vous souhaitiez les récupérer.  Comment faire ? Utilisez la commande <code class="line_code">git pull</code> :
                    </p>

                    <figure class="block_code">
                            <pre><code>
git pull origin main
                            </code></pre>
                    </figure>

                    <p>
                        Vous devriez maintenant avoir l’ensemble des fichiers et dossiers du repository à jour dans votre répertoire courant.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165692-travaillez-avec-un-depot-distant#/id/r-7484029" target="_blank">Réalisez une pull request</a></h2>

                    <p>
                       Une pull request, ou demande de pull, en français, est une fonctionnalité de GitHub qui permet de demander aux propriétaires d’un repository l’autorisation de fusionner nos changements sur la branche principale ou toute autre branche sur laquelle on souhaite apporter nos modifications.
                    </p> 
                    <p>
                        Sur des projets d’envergure, il peut arriver que votre code ne puisse être fusionné sur la branche principale sans être relu et validé par d’autres membres du projet. C’est ce qu’on appelle une Code Review, ou revue de code, en français. Cela permet de prévenir les erreurs éventuelles, de discuter sur un choix, une prise de position ou même de poser des questions. 
                    </p>


                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165663-pratiquez-et-corrigez-vos-erreurs-sur-un-depot-local#/id/video_Player_1" target="_blank">Corriger des erreurs en local</a></h2>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165663-pratiquez-et-corrigez-vos-erreurs-sur-un-depot-local#/id/r-7481506">Supprimer une branche</a></h3>

                    <p>
                        Pour une branche vide :
                    </p>

                    <figure class="block_code">
                            <pre><code>
git branch -d brancheTest  // -d pour delete, supprime la branche brancheTest
                            </code></pre>
                    </figure>

                    <p>
                        Pour une branche qui a subi des modifications :
                    </p>

                    <figure class="block_code">
                            <pre><code>
git branch -D brancheTest   // La suppression de cette branche entraînera la suppression de tous les fichiers et modifications que nous n'aurez pas commités sur cette branche
                            </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165663-pratiquez-et-corrigez-vos-erreurs-sur-un-depot-local#/id/r-7481566">La commande <code class="line_code">stash</code></a></h3>

                    <p>
                        La remise, ou stash, permet de mettre vos modifications de côté, les ranger, le temps de créer votre nouvelle branche et d’appliquer cette remise sur la nouvelle branche.
                    </p>
                    <p>
                        Vous pouvez à tout moment voir l’état sont vos fichiers, c’est-à-dire voir les changements qui ont été indexés ou ceux qui ne l’ont pas été, avec la commande suivante :
                    </p>

                    <figure class="block_code">
                            <pre><code>
git status
                            </code></pre>
                    </figure>

                    <p>
                        Créez un stash avec la commande suivante :
                    </p>

                    <figure class="block_code">
                            <pre><code>
git stash
                            </code></pre>
                    </figure>

                    <p>
                        Assurez-vous que votre branche principale soit de nouveau propre, en faisant un nouveau <code class="line_code">git status</code>.
                    </p>
                    <p>
                        Créez ensuite la nouvelle branche et positionnez vous. Et finalement, vous pouvez appliquer le stash pour :
                        <ul>
                            <li>récupérer les modifications que vous avez rangées dans le stash.</li>
                            <li>Appliquer ces modifications sur votre nouvelle branche.</li>
                        </ul>
                    </p>

                    <figure class="block_code">
                            <pre><code>
git stash apply
                            </code></pre>
                    </figure>

                    <p>
                        Si pour une raison ou une autre, vous avez créé plusieurs stash, et que le dernier n'est pas celui que vous souhaitez appliquer, pas de panique, il est possible d’en appliquer un autre..<br/>
                        En premier lieu, regardez la liste de vos stash avec la commande suivante :
                    </p>

                    <figure class="block_code">
                            <pre><code>
git stash list
                            </code></pre>
                    </figure>

                    <p>
                        Cette commande va vous retourner un "tableau" des stash avec des identifiants. Il suffira alors d'appeler la commande <code class="line_code">git stash</code> en indiquant l'identifiant.
                    </p>

                    <figure class="block_code">
                            <pre><code>
git stash apply stash@{0}
                            </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165663-pratiquez-et-corrigez-vos-erreurs-sur-un-depot-local#/id/r-7481565">J'ai commit sur la mauvaise branche</a></h3>

                    <p>
                        Pour réparer cette erreur, vous devez analyser vos derniers commits avec la fonction <code class="line_code">git log</code>. Vous allez alors récupérer l'identifiant du commit que l'on appelle couramment le hash. 
                    </p>
                    <p>
                        Maintenant que vous disposez de votre identifiant, gardez-le bien de côté. Vérifiez que vous êtes sur votre branche avec l'erreur et réalisez la commande suivante :
                    </p>

                    <figure class="block_code">
                            <pre><code>
git reset --hard HEAD^
                            </code></pre>
                    </figure>

                    <p>
                        Cette ligne de commande va supprimer de la branche principale votre dernier commit. Le <code class="line_code">HEAD^</code> indique que c'est bien le dernier commit que nous voulons supprimer. L’historique sera changé, les fichiers seront supprimés.
                    </p>
                    <p>
                        Créer ensuite la nouvelle branche et rendez-y vous : 
                    </p>

                    <figure class="block_code">
                            <pre><code>
git branch brancheCommit
git checkout brancheCommit
                            </code></pre>
                    </figure>

                    <p>
                        Renouvelez la commande <code class="line_code">git reset</code>, qui va appliquer ce commit sur votre nouvelle branche ! Il n'est pas nécessaire d'écrire l'identifiant en entier. Seuls les 8 premiers caractères sont nécessaires.
                    </p>

                    <figure class="block_code">
                            <pre><code>
git reset --hard ca83a6df
                            </code></pre>
                    </figure>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165663-pratiquez-et-corrigez-vos-erreurs-sur-un-depot-local#/id/r-7481574">Le message de mon commit est erroné</a></h3>

                    <p>
                        Cette commande va fonctionner pour le dernier commit réalisé !
                    </p>

                    <figure class="block_code">
                            <pre><code>
git commit --amend -m "Votre nouveau message de commit"
                            </code></pre>
                    </figure>

                    <p>
                        On peut vérifier avec <code class="line_code">git log</code>.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165663-pratiquez-et-corrigez-vos-erreurs-sur-un-depot-local#/id/r-7481574">J’ai oublié un fichier dans mon dernier commit</a></h3>

                    <p>
                        La fonction <code class="line_code">git --amend</code> permet de modifier le dernier commit.
                    </p>

                    <figure class="block_code">
                            <pre><code>
git add FichierOublie.txt
git commit --amend --no-edit
                            </code></pre>
                    </figure>

                    <p>
                        Votre fichier a été ajouté à votre commit et grâce à la commande <code class="line_code">--no-edit</code>  que vous avez ajoutée, vous n'avez pas modifié le message du commit.
                    </p>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165666-corrigez-vos-erreurs-sur-votre-depot-distant#/id/video_Player_1">Corrigez vos erreurs sur votre dépôt distant</a></h2>

                    <p>
                        Il est possible d'annuler son commit public avec la commande <code class="line_code">git revert</code>. L'opération revert annule un commit en créant un nouveau commit. C'est une méthode sûre pour annuler des changements, car elle ne risque pas de réécrire l'historique du commit. Il vaut mieux utiliser <code class="line_code">git revert</code> pour annuler des changements apportés à une branche publique, et <code class="line_code">git reset</code> pour faire de même, mais sur une branche privée. 
                    </p>

                    <figure class="block_code">
                            <pre><code>
git revert HEAD
                            </code></pre>
                    </figure>

                    <img src="../images/16334778030431_image19.jpg" alt="schéma revert & reset"/>



                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165666-corrigez-vos-erreurs-sur-votre-depot-distant#/id/r-7481778">L'accès à distance ne fonctionne pas : Ajouter une clé SSH</a></h3>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165666-corrigez-vos-erreurs-sur-votre-depot-distant#/id/r-7481778">Revenez en arrière avec <code class="line_code">git reset</code></a></h2>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165651-utilisez-git-reset#/id/r-7481864"><code class="line_code">git reset --hard</code></a></h3>

                    <figure class="block_code">
                            <pre><code>
git reset notreCommitCible --hard
                            </code></pre>
                    </figure>

                    <p>
                        Cette commande permet de revenir à n'importe quel commit mais en oubliant absolument tout ce qu'il s'est passé après ! Quand je dis tout, c'est TOUT ! Que vous ayez fait des modifications après ou d'autres commits, tout sera effacé ! C'est pourquoi il est extrêmement important de revérifier plusieurs fois avant de la lancer, vous pourriez perdre toutes vos modifications si elle est mal faite.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165651-utilisez-git-reset#/id/r-7481864"><code class="line_code">git reset --mixed</code></a></h3>

                    <p>
                        Si rien n'est spécifié après <code class="line_code">git reset</code>, par défaut il exécutera un <code class="line_code">git reset --mixed HEAD~</code>.
                    </p>
                    <p>
                        Cela va permettre de revenir juste après votre dernier commit ou le commit spécifié, sans supprimer vos modifications en cours. Il permet aussi, dans le cas de fichiers indexés mais pas encore commités, de désindexer les fichiers.
                    </p>

                    <p>
                        Resets the index but not the working tree. Réinitialise l'index mais pas l'arbre de travail (c'est-à-dire que les fichiers modifiés sont conservés mais pas marqués pour validation) et signale ce qui n'a pas été mis à jour. Il s'agit de l'action par défaut.
                    </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165651-utilisez-git-reset#/id/r-7481874"><code class="line_code">git reset --soft</code></a></h3>

                    <p>
                        Cette commande permet de se placer sur un commit spécifique afin de voir le code à un instant donné, ou de créer une branche partant d'un ancien commit. Elle ne supprime aucun fichier, aucun commit, et ne crée pas de HEAD détaché.
                     </p>

                    <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165651-utilisez-git-reset#/id/r-7481887">Oups, j'ai des conflits !</a></h3>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165653-corrigez-un-commit-rate#/id/r-7481995">Un trou de mémoire ? <code class="line_code">git reflog</code> !</a></h2>

                    <p>
                        Par défaut, <code class="line_code">git log</code> énumère en ordre chronologique inversé les commits réalisés. Cela signifie que les commits les plus récents apparaissent en premier. Cette commande affiche chaque commit avec son identifiant SHA, l'auteur du commit, la date et le message du commit.
                    </p> 

                    <p>
                        <code class="line_code">git reflog</code> va loguer les commits ainsi que toutes les autres actions que vous avez pu faire en local : vos modifications de messages, vos merges, vos resets, enfin tout, quoi. Comme <code class="line_code">git log</code>, <code class="line_code">git reflog</code> affiche un identifiant SHA-1 pour chaque action. Il est donc très facile de revenir à une action donnée grâce au SHA. Cette commande, c'est votre joker, elle assure votre survie en cas d'erreur. Pour revenir à une action donnée, on prend les 8 premiers caractères de son SHA et on fait :
                    </p>

                    <figure class="block_code">
                            <pre><code>
git checkout e789e7c
                            </code></pre>
                    </figure>

                    <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/7162856-gerez-du-code-avec-git-et-github/7165653-corrigez-un-commit-rate#/id/r-7482019"><code class="line_code">cherry-pick</code> !</a></h2>

                    <p>
                        Admettons que vous travailliez sur une branche "Mes évolutions", et que vous ayez déjà réalisé plusieurs commits. Votre collègue a besoin de l'une de ces évolutions pour la livrer au client, mais pas des autres. C'est dans ce cas bien précis que nous allons faire appel à <code class="line_code">git cherry-pick</code> ! Cette commande va permettre de sélectionner un ou plusieurs commits grâce à leur SHA (décidément ils sont partout) et de les migrer sur la branche principale, sans pour autant fusionner toute la branche "Mes évolutions".
                    </p>

                    <figure class="block_code">
                            <pre><code>
git cherry-pick d356940 de966d4
                            </code></pre>
                    </figure>

                    <div class="em">
                        git cherry-pick  n'est pas une commande très appréciée dans la communauté des développeurs car elle duplique des commits existants. Je vous conseille plutôt de réaliser un merge.
                    </div>















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