<?php $title = 'Linux'; ?>
<?php ob_start(); ?>

                <h1 id=<?php $ini=0; echo $ini ; $ini++ ;?>><a href="https://docs.microsoft.com/fr-fr/windows/wsl/install" target="blank">Installer un terminal sous windows</a></h1>

                <p>
                    <ul>
                        <li>Dans les paramètre Windows, passer en mode développeur : Paramètres / Mises à jour et sécurité / Espace développeurs</li>
                        <li>Activé le sous système wsl : Paramètres / Application / Programmes et fonctionnalités (à droite) / Activer ou désactiver des fonctionnalitées windows / Cocher : Sous systèmes windows pour linux. </li>
                        <li>Lancer cmd ou powershell et écrire : "wsl --install" ou "wsl --install -d Ubuntu" et cela install par défaut Ubuntu</li>
                        <li>On peut ensuite lancer le shell Bash depuis l'application Ubuntu dans démarrer ou utiliser l'application windows terminal.</li>
                    </ul>
                    A savoir que C: se trouve dans le dossier /mnt/c
                </p>

                <h1 id=<?php echo $ini ; $ini++ ;?>>Monter un serveur Linux</h1>

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/2356316-montez-un-serveur-de-fichiers-sous-linux/5173586-qu-est-ce-qu-un-serveur#/id/r-5414497">Qu'est ce qu'un serveur</a></h2>

                Uun serveur est un logiciel qui fournit un service à d’autres logiciels. Bien souvent, il fournit ce service via le réseau informatique mais il peut aussi être installé sur la même machine que les clients.<br/>
                Par extension, on parle aussi de serveur pour désigner la machine physique (ou virtuelle) dont le but principal est de faire tourner un ou plusieurs logiciels serveurs.<br/>
                En pratique, vous verrez que le terme de serveur est employé aussi bien pour désigner le logiciel que le matériel ou même les services fournis. C’est le contexte qui vous permettra de savoir de quoi on parle vraiment.<br/>
                Il existe deux versions d'Ubuntu, une desktop et une serveur. 

                <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/36681-mais-cest-quoi-linux#/id/r-2277917">Linux</a></h2>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/36822-telechargez-linux-cest-gratuit#/id/r-2278119">Installer Linux</a></h3>

                Télécharger Linux <a href="https://www.ubuntu-fr.org/">ici</a>

                Créer un USB bootable avec <a href="https://unetbootin.github.io/">UNetbootin</a>, un logiciel libre. 

                <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/37192-partitionner-son-disque#/id/r-37042">Gestion du disque dur</a></h4>

                Système de fichiers windows : 
                <ul>
                    <li>FAT 16 : un très vieux système de fichiers, capable de gérer jusqu'à 4 Go de données. Il est donc impossible de faire une partition en FAT 16 de plus de 4 Go. Il était très utilisé à l'époque du DOS et aux débuts de Windows 95.</li>
                    <li>FAT 32 : une évolution du FAT 16, qui pousse la limite de taille à 2 To (2 000 Go). Le FAT 16 et le FAT 32 ont la particularité de beaucoup fragmenter les fichiers, d'où la nécessité de défragmenter régulièrement, sinon on prend le risque de voir son disque ressembler à un véritable champ de bataille.</li>
                    <li>NTFS : apparu avec Windows NT, puis réutilisé par Windows XP, il permet de créer des partitions d'une taille allant jusqu'à 16 Eo (16 Exaoctets, soit 16 000 000 000 de Gigaoctets). Mais ce n'est pas tant la taille maximale qui est intéressante (on en est franchement loin) que les avantages que le NTFS procure à côté. Contrairement au FAT 32, c'est un système de fichiers journalisé qui récupère beaucoup mieux les données en cas de crash du disque. D'autre part, on peut donner des droits sur certains fichiers, les crypter, les compresser, etc. Enfin, les fichiers sont censés moins se fragmenter… cependant, ils se fragmentent toujours.</li>
                </ul>
                Système de fichier Linux
                <ul>
                    <li>ext2 : c'est le système de fichiers qui a longtemps été utilisé sous Linux. Il a été développé par un français (Rémy Card) et présente la particularité de très peu se fragmenter. Ainsi, sous Linux et depuis longtemps, il n'y a pas besoin de faire de défragmentation.</li>
                    <li>ext3 : l'ext3 est très proche de l'ext2, à une différence majeure près : la journalisation. En effet, ext2 n'était pas journalisé et en cas de crash du disque, on risquait plus facilement une perte de données. Ce n'est plus le cas avec l'ext3.</li>
                    <li>ext4 : une amélioration de l'ext3, relativement récente, qui améliore la prise en charge des gros disques durs et diminue les problèmes de fragmentation des fichiers.</li>
                </ul>

                <h5 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/37192-partitionner-son-disque#/id/r-2278496">Les nom de disque sous linux</a></h5>

                c'est très différent de Windows où l'on a l'habitude des sempiternelsC:, D:, E:, etc. On va découvrir les noms des disques sous Linux avec un exemple : hda.
                <ul>
                    <li>h : la première lettre indique si le disque est de type IDE ou SCSI (un type de connexion différent à la carte mère). S'il est de type IDE, la lettre est un « h », si c'est un SCSI (ou un S-ATA), la lettre est un « s ».</li>
                    <li>d : cette lettre ne change pas.</li>
                    <li>a : c'est cette lettre qui indique les différents disques durs. hda représente le premier disque dur IDE, hdb le second, hdc le troisième, etc.</li>
                </ul>
                Lorsque l'on crée des partitions, on ajoute généralement un chiffre représentant le numéro de la partition. Ainsi, si on a trois partitions sur notre disque hda, elles seront nommées hda1, hda2, hda3…

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38351-la-structure-des-dossiers-et-fichiers#/id/r-2279477">La structure des dossiers et fichiers sous Linux et windows</a></h3>

                <p>
                    Sous windows <code class="line_code">/</code> est la racine, puis <code class="line_code">mnt</code> permet d'accéder aux disques c, ... 
                </p>

                Dans un système de fichiers, il y a toujours ce qu'on appelle une racine, c'est-à-dire un « gros dossier de base qui contient tous les autres dossiers et fichiers ». Sous Linux, il n'y a qu'une et une seule racine : « <code class="line_code">/</code> ». Comme vous le voyez, il n'y a pas de lettre de lecteur car justement, Linux ne donne pas de nom aux lecteurs comme le fait Windows. Il dit juste « La base, c'est <code class="line_code">/</code> ».
                <figure>
                    <a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38351-la-structure-des-dossiers-et-fichiers#/id/r-2279537"><img src="../images/86810.png" alt="dossier linux" title="cliquer pour plus de détails"/></a>
                </figure>




                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/37813-la-console-ca-se-mange#/id/r-2279042">La console</a></h3>

                 Voici les raccourcis à connaître pour accéder à la console :
                 <ul>
                    <li><code class="line_code">Ctrl + Alt + F1</code> : terminal 1 (tty1) ;</li>
                    <li><code class="line_code">Ctrl + Alt + F2</code> : terminal 2 (tty2) ;</li>
                    <li><code class="line_code">Ctrl + Alt + F3</code> : terminal 3 (tty3) ;</li>
                    <li><code class="line_code">Ctrl + Alt + F4</code> : terminal 4 (tty4) ;</li>
                    <li><code class="line_code">Ctrl + Alt + F5</code> : terminal 5 (tty5) ;</li>
                    <li><code class="line_code">Ctrl + Alt + F6</code> : terminal 6 (tty6) ;</li>
                    <li><code class="line_code">trl + Alt + F7</code> : retour au mode graphique (ouf !).</li>
                    <li><code class="line_code">Ctrl + Alt + T</code> : Ouvrir la console en mode graphique.</li>
                </ul>
                Une des grosses forces de la console, c'est d'être accessible à distance par Internet. Il suffit que votre machine soit connectée au réseau pour que vous puissiez vous logger de n'importe quel ordinateur dans le monde et faire comme si vous étiez chez vous ! Ça peut être pratique pour une foule de choses, comme surveiller l'état d'un téléchargement un peu long, lancer l'exécution d'un programme pour qu'il soit prêt lorsque vous serez rentrés chez vous… mais surtout, c'est comme ça que l'on administre un serveur sous Linux.<br/>
                Pour communiquer entre votre ordinateur et le serveur, il faut un protocole. Il existe des tonnes et des tonnes de protocoles pour communiquer par Internet, mais pour ce qui est d'accéder à la ligne de commande à distance, c'est-à-dire à la console, il y en a deux principaux.
                <ul>
                    <li>Telnet : le protocole le plus basique, qui présente le gros défaut de ne pas crypter les données échangées entre vous et le serveur. Si un pirate « écoute » vos échanges par un moyen ou un autre, il pourrait récupérer des informations sensibles, en particulier votre mot de passe lorsque vous l'envoyez à la connexion. Ce moyen de connexion reste utilisé mais peu par rapport à SSH.</li>
                    <li>SSH : c'est de très loin le protocole le plus utilisé (et que l'on préfère) car il permet de crypter les données et de sécuriser ainsi la connexion avec le serveur.</li>
                </ul>

                Pour accéder à distance à un ordinateur sous Linux connecté à Internet, vous avez besoin d'un programme spécial (<a href="https://www.chiark.greenend.org.uk/~sgtatham/putty/">PuTTY</a>) capable de restituer la ligne de commande à distance. Ce qui est bien, c'est que vous n'avez pas forcément besoin d'être sous Linux pour vous connecter à un autre ordinateur utilisant cet OS ; on peut très bien le faire depuis Windows, et c'est d'ailleurs la procédure que je vais vous montrer <a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/37813-la-console-ca-se-mange#/id/r-2279210">ici</a>.

                <figure class="block_code">
                    <pre><code class="html">
adrien@Adrinux:~$
                    </code></pre>
                </figure>

                <ul>
                    <li>adrien :  : le premier élément est votre pseudonyme. C'est le pseudo sous lequel vous vous êtes loggés.</li>
                    <li>Adrinux :  ça, c'est le nom de l'ordinateur sur lequel vous êtes en train de travailler.</li>
                    <li>~ : ça, c'est le dossier dans lequel vous vous trouvez actuellement. Vous pouvez naviguer de dossier en dossier dans la console et il est très utile qu'on vous rappelle systématiquement où vous vous trouvez avant chaque commande. Pour information, le symbole ~ signifie que vous êtes dans votre dossier personnel, ce qu'on appelle le « home » (/home/Adrien) sous Linux ; c'est l'équivalent du dossier « Mes documents » de Windows. </li>
                    <li>$ : ce dernier symbole est très important ; il indique votre niveau d'autorisation sur la machine. Il peut prendre deux formes différentes :
                        <ul>
                            <li>$ : signifie que vous êtes en train d'utiliser un compte utilisateur « normal », avec des droits limités (il ne peut pas modifier les fichiers système les plus importants)</li>
                            <li># : signifie que vous êtes en mode superutilisateur, c'est-à-dire que vous êtes connectés sous le pseudonyme « root ». Le root est l'utilisateur maître qui a le droit de tout faire sur sa machine (même de la détruire !)</li>
                        </ul>
                    </li>
                </ul>
                On travaille dans la console en tapant ce qu'on appelle des commandes. Ces dernières étant nombreuses, vous ne pourrez jamais toutes les connaître… et ce n'est pas le but : le but, c'est que vous sachiez vous servir par cœur de la plupart des commandes « courantes » et, pour les moins courantes, que vous soyez capables d'apprendre à vous en servir en lisant leur <a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39740-rtfm-lisez-le-manuel#/id/r-2280868">manuel d'utilisation</a>.

                <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38076-entrer-une-commande#/id/r-2279305">Les paramètres</a></h4>

                Les paramètres sont des options que l'on écrit à la suite de la commande. La commande et les paramètres sont séparés par un espace, comme ceci :
                <figure class="block_code">
                    <pre><code class="html">
mateo21@mateo21-desktop:~$ commande parametres
                    </code></pre>
                </figure>
                Les paramètres les plus courants sont constitués d'une seule lettre précédée d'un tiret. 
                <figure class="block_code">
                    <pre><code class="html">
commande -d -a -U -h
                    </code></pre>
                </figure>
                Ou, plus court :
                <figure class="block_code">
                    <pre><code class="html">
commande -daUh
                    </code></pre>
                </figure>
                Les paramètres constitués de plusieurs lettres sont précédés de deux tirets, comme ceci :
                <figure class="block_code">
                    <pre><code class="html">
commande -daUh --autreparametre
                    </code></pre>
                </figure>

                Il y a parfois deux écritures possibles pour un paramètre de commande : une version courte et une version longue. Cela permet de vous laisser le choix selon que vous préférez l'une ou l'autre.

                <h5 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38076-entrer-une-commande#/id/r-2279300">Les valeurs des paramètres</a></h5>
                Certains paramètres nécessitent que vous les complétiez avec une valeur. Cela fonctionne différemment selon que vous travaillez avec un paramètre long ou avec un paramètre court.<br/>
                Avec un paramètre court :
                <figure class="block_code">
                    <pre><code class="html">
commande -p 14
                    </code></pre>
                </figure>
                Avec un paramètre long :
                <figure class="block_code">
                    <pre><code class="html">
commande --parametre=14
                    </code></pre>
                </figure>

                <h5 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38076-entrer-une-commande#/id/r-37957">Retrouver une commande</a></h5>

                Lister les commandes correspondantes : Tapez juste « da » dans la console, puis tapez deux fois sur la touche Tabulation. On vous a répondu « dash » et « date ». Il y a donc deux commandes qui commencent par « da ».<br/>
                L'autocomplétion : Par exemple, il n'y a qu'une commande qui commence par « dat ». Tapez donc dat dans la console, puis appuyez une seule fois sur Tabulation. La commande se complète comme par magie.<br/>
                L'historique des commandes : appuyez sur la flèche directionnelle Haut ; vous verrez apparaître la dernière commande que vous avez tapée. Si vous appuyez de nouveau sur la flèche directionnelle Haut, vous verrez l'avant-dernière commande, puis l'avant-avant-dernière, etc. Il existe la commande <code class="line_code">history</code> qui vous rappelle l'historique des commandes<br/>
                Dans le cas où la flèche directionnelle Haut et la commande history ne suffiraient pas à retrouver une vieille commande que vous avez tapée, il y a un raccourci super utile : <code class="line_code">Ctrl + R</code>. Si ce n'est pas la commande que vous cherchiez, appuyez à nouveau sur Ctrl + R pour remonter dans la liste des commandes contenant « all ».

                <h5 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38076-entrer-une-commande#/id/r-38075">Les raccourcis clavier</a></h5>

                <ul>
                    <li><code class="line_code">Ctrl + L</code> : efface le contenu de la console. Utile pour faire un peu de ménage quand votre console est encombrée. À noter qu'il existe aussi une commande, clear, qui fait exactement la même chose.</li>
                    <li><code class="line_code">Ctrl + D</code> : envoie le message EOF (fin de fichier) à la console. Si vous tapez ce raccourci dans une ligne de commande vide (c'est-à-dire sans avoir écrit un début de commande au préalable), cela fermera la console en cours.À noter qu'il existe aussi la commande exit qui a le même effet.</li>
                    <li><code class="line_code">Shift + PgUp</code> : vous permet de « remonter » dans les messages envoyés par la console. En mode graphique, la molette de la souris accomplit aussi très bien cette action.</li>
                    <li><code class="line_code">Ctrl + A</code> : ramène le curseur au début de la commande. La touche Origine a le même effet (elle est située à côté de la touche Fin et représentée par une flèche pointant en haut à gauche).</li>
                    <li><code class="line_code">Ctrl + E</code> : ramène le curseur à la fin de la ligne de commandes. La touche Fin a le même effet.</li>
                    <li><code class="line_code">Ctrl + U</code> : supprime tout ce qui se trouve à gauche du curseur. Si celui-ci est situé à la fin de la ligne, cette dernière sera donc supprimée.</li>
                    <li><code class="line_code">Ctrl + K</code> : supprime le premier mot situé à gauche du curseur. Un « mot » est séparé par des espaces ; on s'en sert en général pour supprimer le paramètre situé à gauche du curseur.</li>
                    <li><code class="line_code">Ctrl + Y</code> : si vous avez supprimé du texte avec une des commandes <code class="line_code">Ctrl + U</code>, <code class="line_code">Ctrl + K</code> ou <code class="line_code">Ctrl + W</code> qu'on vient de voir, alors le raccourci <code class="line_code">Ctrl + Y</code> « collera » le texte que vous venez de supprimer. C'est donc un peu comme un couper-coller.</li>
                </ul>








                <h5 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38351-la-structure-des-dossiers-et-fichiers#/id/r-2279477" target="blank">Commandes</a></h5>

                Une commande n'est rien d'autre qu'un programme qu'on peut appeler n'importe quand et n'importe où dans la console.

                <ul>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38351-la-structure-des-dossiers-et-fichiers#/id/r-38235"><code class="line_code">ls</code></a> : C'est l'abréviation de « list », qui signifie « lister les fichiers et dossiers du répertoire actuel ». Si vous n'avez aucune réponse, c'est que vous êtes dans un dossier qui ne contient ni fichier ni dossier. Si on ajoute le nom d'un dossier (ou sous-dossier) (<code class="line_code">ls Examples</code>), cela affichera le contenu de ce dossier au lieu du contenu du dossier courant </li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38351-la-structure-des-dossiers-et-fichiers#/id/r-2279562"><code class="line_code">pwd</code></a> : C'est l'abréviation de « Print Working Directory », c'est-à-dire « Afficher le dossier actuel ».</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38351-la-structure-des-dossiers-et-fichiers#/id/r-2279575"><code class="line_code">which</code></a> prend un paramètre : le nom de la commande dont vous voulez connaître l'emplacement.
                    <figure class="block_code">
                        <pre><code class="html">
mateo21@mateo21-desktop:~$ which pwd
/bin/pwd
                        </code></pre>
                    </figure>
                    <code class="line_code">pwd</code> se trouve donc dans le dossier <code class="line_code">/bin/</code> ! Le « pwd » à la fin n'est pas un dossier mais le nom du programme lui-même. Vous noterez que les programmes sous Linux ne possèdent en général pas d'extension (contrairement à Windows où l'extension utilisée est en général.exe).</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38351-la-structure-des-dossiers-et-fichiers#/id/r-38316"><code class="line_code">cd</code></a> : abréviation de Change Directory, changer de dossier. La commande <code class="line_code">cd</code> ne prend pas plein de paramètres mais juste un seul : le nom du dossier dans lequel vous souhaitez aller.<br/>
                    Si on veut aller à la racine, il suffit de taper <code class="line_code">cd /</code><br/>
                    Pour revenir au dossier parent : <code class="line_code">cd ..</code> ou  <code class="line_code">cd ../..</code> pour remonter de deux dossiers parents. Il s'agit ici de chemins relatifs (à l'endroit où on se trouve). On peut indiquer un chemin absolu, il commence toujours par définition par le dossier racine <code class="line_code">/</code> puis le cheminement de dossier.<br/>
                    <code class="line_code">cd</code> sans paramètre nous ramène à ~ (home)<br/>
                    L'autocomplétion de chemin fonctionne de la même manière que l'autocomplétion de commande qu'on a vue dans le chapitre précédent : avec la touche Tab. 1x complète si qu'un dossier en retour / 2x Tab donne toutes les possibilités. </li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38351-la-structure-des-dossiers-et-fichiers#/id/r-38350"><code class="line_code">du</code></a>  pour Disk Usage (utilisation du disque) vous donne des informations sur la taille qu'occupent les dossiers sur votre disque. Peut prendre le paramètre <code class="line_code">h</code>.Si le dossier ne contient pas de sous-dossier, cela renvoie la taille totale que font les fichiers contenus dans le dossier. i celui-ci contient beaucoup de sous-dossiers cela va renvoyer la taille de chacun des sous-dossiers, puis la taille totale à la fin (« . »).<br/>
                    Par défaut,<code class="line_code">du</code> n'affiche que la taille des dossiers. Pour avoir aussi la taille des fichiers qu'ils contiennent, rajoutez l'option <code class="line_code">-a</code> (all)</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38696-manipuler-les-fichiers#/id/r-2279771"><code class="line_code">cat</code></a> permet d'afficher tout le contenu d'un fichier dans la console d'un coup. Elle est plus adaptée lorsque l'on travaille sur de petits fichiers que sur des gros. Il y a peu de paramètres vraiment intéressants à utiliser avec la commandecat, car c'est une commande somme toute très basique. On notera quand même le paramètre <code class="line_code">-n</code> qui permet d'afficher les numéros de ligne.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38696-manipuler-les-fichiers#/id/r-2279821"><code class="line_code">less</code></a> affiche progressivement le contenu du fichier, page par page. Ça vous laisse le temps de le lire dans la console. :-)<br/>
                        <ul>
                            <li><code class="line_code">Espace</code> : affiche la suite du fichier. La toucheEspacefait défiler le fichier vers le bas d'un « écran » de console. C'est celle que j'utilise le plus souvent.</li>
                            <li><code class="line_code">Entrée</code> : affiche la ligne suivante. Cela permet donc de faire défiler le fichier vers le bas ligne par ligne.</li>
                            <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38696-manipuler-les-fichiers#/id/r-2279806">D'autre raccourcis ici</a></li>
                        </ul>
                    </li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38696-manipuler-les-fichiers#/id/r-2279832"><code class="line_code">head</code></a> affiche seulement les premières lignes du fichier. Elle ne permet pas de se déplacer dans le fichier commeless, mais juste de récupérer les premières lignes. Le paramètre <code class="line_code">-n nombre</code>permet d'afficher le nombre de lignes que vous voulez.
                    <figure class="block_code">
                        <pre><code class="html">
mateo21@mateo21-desktop:/var/log$ head -n 3 syslog
Nov 14 00:44:23 mateo21-desktop syslogd 1.4.1#21ubuntu3: restart.
Nov 14 00:44:23 mateo21-desktop anacron[6725]: Job `cron.daily' terminated
Nov 14 00:44:23 mateo21-desktop anacron[6725]: Normal exit (1 job run)
                        </code></pre>
                    </figure>
                    </li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38696-manipuler-les-fichiers#/id/r-2279848"><code class="line_code">tail</code></a> vous renvoie la fin du fichier, donc les dernières lignes. <br/>
                    Le paramètre <code class="line_code">-n nombre</code>permet d'afficher le nombre de lignes que vous voulez.<br/>
                    Le paramètre <code class="line_code">-f</code> (follow) ordonne à <code class="line_code">tail</code> de « suivre » la fin du fichier au fur et à mesure de son évolution. C'est extrêmement utile pour suivre un fichier de log qui évolue souvent.<br/>
                    Faites <code class="line_code">Ctrl + C</code> pour arrêter la commande <code class="line_code">tail</code>.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38696-manipuler-les-fichiers#/id/r-38486"><code class="line_code">touch</code></a> : Créer un fichier. La commande <code class="line_code">touch</code> est à la base faite pour modifier la date de dernière modification d'un fichier. D'où son nom : on « touche » le fichier pour faire croire à l'ordinateur qu'on vient de le modifier alors que l'on n'a rien changé. Si le fichier n'existe pas, il sera créé ! Vous pouvez créer plusieurs fichiers en une seule commande. Il vous suffit de les lister l'un après l'autre, séparés par des espaces. Si le fichier contient des espaces, entourez le de guillements. </li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38696-manipuler-les-fichiers#/id/r-2279877"><code class="line_code">mkdir</code></a> est faite pour créer un dossier. Elle fonctionne de la même manière que <code class="line_code">touch</code>. On peut créer deux dossiers (ou plus !) en même temps en les séparant là aussi par des espaces.Le paramètre <code class="line_code">-p</code> sert à créer tous les sous-dossiers intermédiaires. 
                    <figure class="block_code">
                        <pre><code class="html">
mkdir -p animaux/vertebres/chat
                        </code></pre>
                    </figure>
                    créera le dossier animaux, puis à l'intérieur le sous-dossier vertebres, puis à l'intérieur encore le sous-dossier chat.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38696-manipuler-les-fichiers#/id/r-2279908"><code class="line_code">cp</code></a> (abréviation de CoPy, en anglais) vous permet comme son nom l'indique de copier un fichier… mais aussi de copier plusieurs fichiers à la fois, et même de copier des dossiers ! Le premier paramètre est le nom du fichier à copier, le second le nom de la copie du fichier à créer. En faisant cela, on aura donc deux fichiers identiques dans le même répertoire :fichierbidonetfichiercopie.
                    <figure class="block_code">
                        <pre><code class="html">
cp fichierbidon fichiercopie
                        </code></pre>
                    </figure>
                    si je veux copier <code class="line_code">prout</code> dans le sous-dossier <code class="line_code">gros prout</code> que j'ai créé tout à l'heure :
                    <figure class="block_code">
                        <pre><code class="html">
cp prout grosprout/(nouveaunom)
                        </code></pre>
                    </figure>
                    Dans cet exemple on utilise un chemin relatif mais fonctionne aussi avec un chemin absolu.<br/>
                    Avec l'option <code class="line_code">-R</code>, vous pouvez copier un dossier, ainsi que tous les sous-dossiers et fichiers qu'il contient !<br/>
                    Le symbole <code class="line_code">*</code> est appelé joker, ou encore wildcard en anglais sous Linux. Il vous permet de copier par exemple tous les fichiers image .jpg dans un sous-dossier : 
                    <figure class="block_code">
                        <pre><code class="html">
cp *.jpg mondossier/
                        </code></pre>
                    </figure>
                    Vous pouvez aussi vous en servir pour copier tous les fichiers dont le nom commence par « so » :
                    <figure class="block_code">
                        <pre><code class="html">
cp so* mondossier/
                        </code></pre>
                    </figure>
                    </li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38696-manipuler-les-fichiers#/id/r-2279938"><code class="line_code">mv</code></a> MoVe en anglais, a en fait deux utilités :
                        <ul>
                            <li>Déplacer un fichier : Au lieu de copier fichierbidon dans mondossier comme on l'a fait tout à l'heure, ici on a juste déplacé le fichier. Il n'existe plus dans son dossier d'origine (<code class="line_code">mv fichierbidon mondossier/</code>) .Vous pouvez déplacer des dossiers aussi simplement (<code class="line_code">mv animaux/ mondossier/</code>)</li>
                            <li> Renommer un fichier : En effet, il n'existe pas de commande spéciale pour renommer un fichier en console sous Linux, c'est la commande <code class="line_code">mv</code> qui est utilisée pour ça (<code class="line_code">mv fichierbidon superfichier</code> Après cette commande, fichierbidon n'existe plus, il a été renommé).</li>
                            <li>Déplacer et renommer un fichier à la fois : <code class="line_code">mv fichierbidon mondossier/superfichier</code></li>
                        </ul>
                    </li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38696-manipuler-les-fichiers#/id/r-2279972"><code class="line_code">rm</code></a> ReMove, peut supprimer un fichier, plusieurs fichiers, des dossiers, voire même votre ordinateur entier si vous le voulez. Vous pouvez aussi supprimer plusieurs fichiers en séparant leurs noms par des espaces : 
                    <figure class="block_code">
                        <pre><code class="html">
rm fichierbidon fichiercopie
                        </code></pre>
                    </figure>
                    Le paramètre <code class="line_code">-i</code> permet de vous demander une confirmation pour chacun des fichiers.<br/>
                    Le paramètre <code class="line_code">-f</code> force la suppression, ne demande pas de confirmation, même s'il y a un problème potentiel.<br/>
                    Le paramètre <code class="line_code">-v</code> verbose, verbeux en anglais, est un paramètre que l'on retrouve dans beaucoup de commandes sous Linux. Il permet de demander à la commande de dire ce qu'elle est en train de faire. Vous voyez au fur et à mesure de l'avancement ce qui est en train d'être fait. Très pratique !<br/>
                    Le paramètre <code class="line_code">-r</code> peut être utilisé pour supprimer un dossier (au lieu d'un fichier) ainsi que tout ce qu'il contient : fichiers et dossiers !<br/>
                    Notez qu'il existe aussi la commande <code class="line_code">rmdir</code>. La grosse différence avec <code class="line_code">rm -r</code>, c'est que'elle ne peut supprimer un dossier que s'il est vide ! Il faudra y avoir fait le ménage auparavant.
                    </li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38696-manipuler-les-fichiers#/id/r-38695"><code class="line_code">ln</code></a> permet de créer des liens entre des fichiers, c'est-à-dire qu'elle permet de créer des raccourcis. Il y en a de deux types : 
                        <ul>
                            <li>Des liens physiques : un lien physique permet d'avoir deux noms de fichiers qui partagent exactement le même contenu, c'est-à-dire le même inode. le fichier est le même. On peut juste y accéder via deux noms de fichiers différents. Il faut supprimer fichier1 ET fichier2 pour supprimer le contenu. Pour créer un lien physique, nous allons créer un fichier2 qui partagera le même inode (le même contenu) que fichier1. Tapez : <code class="line_code">ln fichier1 fichier2</code>.</li>
                            <li>Des liens symboliques : Le principe du lien symbolique est que l'on crée un lien vers un autre nom de fichier. Cette fois, on pointe vers le nom de fichier et non vers l'inode directement. On utilise là encore la commande <code class="line_code">ln</code>, mais avec le paramètre <code class="line_code">-s</code>(s comme symbolique) : <code class="line_code">ln -s fichier1 fichier2</code>.</li>
                        </ul>
                    </li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-2280110"><code class="line_code">sudo</code></a> : On peut devenir root temporairement à l'aide de la commande <code class="line_code">sudo</code>. Cette commande signifie « Faire en se substituant à l'utilisateur » : Substitute User DO.On écriera : <code class="line_code">sudo commande</code>.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-2280119"><code class="line_code">sudo su</code></a> : devenir root et le rester. Pour quitter le « mode root », tapez <code class="line_code">exit</code> (ou faites la combinaison <code class="line_code">Ctrl + D</code>).</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-2280130"><code class="line_code">adduser</code></a> permet d'ajouter un utilisateur (uniquement en mode root). Vous devez au minimum fournir un paramètre : le nom de l'utilisateur à créer. Le répertoire personnel de patrick est automatiquement créé (<code class="line_code">/home/patrick</code>) et son compte est préconfiguré.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-2280135"><code class="line_code">passwd</code></a>S'il était nécessaire de changer le mot de passe de patrick par la suite, utilisez la commande <code class="line_code">passwd</code> en indiquant en paramètre le nom du compte à modifier (uniquement en mode root). Attention ! Si vous appelez passwd sans préciser de compte en paramètre, c'est le mot de passe de l'utilisateur sous lequel vous êtes connecté que vous changerez ! </li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-2280145"><code class="line_code">deluser</code></a> pour supprimer son compte <code class="line_code">deluser patrick</code>. Toutefois, cette commande seule ne supprime pas le répertoire personnel de patrick. Si vous voulez supprimer aussi son home et tous ses fichiers personnels, utilisez le paramètre <code class="line_code">--remove-home</code></li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-2280158"><code class="line_code">addgroup</code></a> : créer un groupe. Vous avez juste besoin de spécifier le nom de celui-ci en paramètre.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-2280173"><code class="line_code">usermod</code></a> permet d'éditer un utilisateur. Elle possède plusieurs paramètres ; nous allons en retenir deux :
                        <ul>
                            <li>-l : renomme l'utilisateur (le nom de son répertoire personnel ne sera pas changé par contre) ;</li>
                            <li>-g : change de groupe.</li>
                        </ul>
                    Si je veux mettre patrick dans le groupe amis, je ferai donc comme ceci : <code class="line_code">usermod -g amis patrick</code><br/>
                    Il est aussi possible de faire en sorte qu'un utilisateur appartienne à plusieurs groupes. Pour ce faire, utilisez le paramètre <code class="line_code">-G</code>.Exemple : <code class="line_code">usermod -G amis,paris,collegues patrick</code>.Séparez les noms des groupes par une virgule, sans espace entre chaque nom de groupe.<br/>
                    Si vous voulez ajouter des groupes à un utilisateur (sans perdre les groupes auxquels il appartenait avant cela), utilisez <code class="line_code">-a</code></li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-2280178"><code class="line_code">delgroup</code></a> pour supprimer un groupe.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-2280196"><code class="line_code">chown</code></a> Permet de changer le propriétaire d'un fichier et doit être utilisée en tant que root. Elle attend deux paramètres au moins : Le nom du nouveau propriétaire et le nom du fichier à modifier. Mais cela ne change pas le groupe du fichier (sauf avec <code class="line_code">chown patrick:amis rapport.txt</code>, cela affectera le fichier à l'utilisateur patrick et au groupe amis<br/>
                    Très utile aussi, l'option <code class="line_code">-R</code> de chown. Elle modifie tous les sous-dossiers et fichiers contenus dans un dossier pour y affecter un nouvel utilisateur (et un nouveau groupe si on utilise la technique du deux points que l'on vient de voir).</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-2280202"><code class="line_code">chgrp</code></a> s'utilise exactement de la même manière que chown à la différence près qu'il affecte cette fois le groupe propriétaire d'un fichier.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-2280413"><code class="line_code">chmod</code></a> : modifier les droits d'accès. Vous n'avez pas besoin d'être root pour utiliser <code class="line_code">chmod</code>. Vous devez juste être propriétaires du fichier dont vous voulez modifier les droits d'accès.  On attribue un chiffre à chaque droit :
                        <ul>
                            <li>r = 4</li>
                            <li>w = 2</li>
                            <li>x = 1</li>
                        </ul>
                    Si vous voulez combiner ces droits, il va falloir additionner les chiffres correspondants. Ainsi, pour attribuer le droit de lecture et de modification, il faut additionner 4+2, ce qui donne 6. Le chiffre 6 signifie donc « Droit de lecture et d'écriture ». Avec ça, on peut calculer la valeur d'un triplet de droits. Il faut faire le même calcul pour les droits que l'on veut attribuer au propriétaire, au groupe et aux autres. Par exemple, « 640 » indique les droits du propriétaire, du groupe et des autres (dans l'ordre). 6 : droit de lecture et d'écriture pour le propriétaire / 4 : droit de lecture pour le groupe / 0 : aucun droit pour les autres.<br/>
                    <a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-2280407">On peut aussi attribuer des droits avec des lettres.</a><br/>
                    Le paramètre <code class="line_code">-R</code> existe aussi pour <code class="line_code">chmod</code>. Si vous affectez des droits sur un dossier avec <code class="line_code">-R</code>, tous ses fichiers et sous-dossiers récupèreront le même droit.</li>
                    <li><code class="line_code">man + nom de la commande</code> : Manuel d'utilisation.</li>
                    <li><code class="line_code">apropos + mot clé</code>,  elle va le rechercher dans les descriptions de toutes les pages du manuel.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39907-rechercher-des-fichiers#/id/r-39772"><code class="line_code">locate</code></a> :  il suffit d'indiquer le nom du fichier que vous voulez retrouver. <code class="line_code">locate</code> vous donne tous les fichiers qui contiennent le mot « australie » dans leur nom (<code class="line_code">locate australie</code>). Que ce soient des fichiers ou des dossiers, elle ne fait pas la différence.<br/>
                    Le défaut de <code class="line_code">locate</code> : la commande ne fait pas la recherche sur votre disque dur entier, mais seulement sur une base de données de vos fichiers mise à jour une fois par jour ( Vous pouvez forcer la commande <code class="line_code">locate</code> à reconstruire la base de données des fichiers du disque dur. Cela se fait avec la commande <code class="line_code">updatedb</code>, à exécuter en root ).</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39907-rechercher-des-fichiers#/id/r-39906"><code class="line_code">find</code></a> est la commande de recherche par excellence pour retrouver des fichiers, mais aussi pour effectuer des opérations sur chacun des fichiers trouvés. Contrairement à <code class="line_code">locate</code>, <code class="line_code">find</code> ne va pas lire dans une base de données mais au contraire parcourir tout votre disque dur (figure suivante). Cela peut être très long si vous avez plusieurs giga-octets de données ! Il peut prendre 3 paramètres : Où (par défaut : dossier courant et sous dossier), Quoi (obligatoire : -name + "nom fichier" = recherche stricte), que faire avec).<br/>
                    <a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39907-rechercher-des-fichiers#/id/r-2281199">Recherche par taille</a> : <code class="line_code">find  ~ -size +10M </code><br/>
                    <a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39907-rechercher-des-fichiers#/id/r-2281205">Recherche à partir de la date de dernier accès</a> : <code class="line_code">find -name "*.odt" -atime 6 </code><br/>
                    <a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39907-rechercher-des-fichiers#/id/r-2281216">Rechercher uniquement des répertoires ou des fichiers</a> :
                    <ul>
                        <li> <code class="line_code">-type d</code> : pour rechercher uniquement des répertoires (directories) ;</li>
                        <li> <code class="line_code">-type f</code> : pour rechercher uniquement des fichiers (files).</li>
                    </ul>
                    On peut ensuite :
                    <ul>
                        <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39907-rechercher-des-fichiers#/id/r-2281230">Afficher les fichiers de façon formatée</a> avec <code class="line_code">-printf</code> (voir man)</li>
                        <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39907-rechercher-des-fichiers#/id/r-2281237">Supprimer les fichiers trouvés</a> avec <code class="line_code">-delete</code></li>
                        <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39907-rechercher-des-fichiers#/id/r-2281256">Appeler une commande</a> avec <code class="line_code">-exec</code> qui effectuera une action sur chacun des fichiers trouvés.</li>
                    </ul></li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40172-extraire-trier-et-filtrer-des-donnees#/id/r-40031"><code class="line_code">grep</code></a> : Son rôle est de rechercher un mot dans un fichier et d'afficher les lignes dans lesquelles ce mot a été trouvé. L'avantage de cette commande est qu'elle peut être utilisée de manière très simple ou plus complexe (mais plus précise) selon les besoins en faisant appel aux expressions régulières.<br/>
                    <code class="line_code">grep texte nomfichier</code> : Le premier paramètre est le texte à rechercher, le second est le nom du fichier dans lequel ce texte doit être recherché.<br/>
                    Notez qu'il n'est pas nécessaire de mettre des guillemets autour du mot à trouver, sauf si vous recherchez une suite de plusieurs mots séparés par des espaces.<br/>
                    Elle a comme paramètre : 
                    <ul>
                        <li><code class="line_code">-i</code> : ne pas tenir compte de la casse</li>
                        <li><code class="line_code">-n</code> : affiche les numéros des lignes retournées.</li>
                        <li><code class="line_code">-v</code> : Si, au contraire, vous voulez connaître toutes les lignes qui ne contiennent pas un mot donné.</li>
                        <li><code class="line_code">-r</code> : rechercher dans tous les fichiers et sous-dossiers. Cette fois, il faudra indiquer en dernier paramètre le nom du répertoire dans lequel la recherche doit être faite (et non pas le nom d'un fichier).<br/>
                        À noter qu'il existe aussi la commande <code class="line_code">rgrep<</code> qui est équivalente à <code class="line_code">grep -r</code>.</li>
                        <li><code class="line_code">-E</code> : pour faire comprendre à <code class="line_code">grep</code> que l'on utilise <a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40172-extraire-trier-et-filtrer-des-donnees#/id/r-2281365">une expression régulière</a>. (il existe aussi l'équivanlent <code class="line_code">egrep</code>)
                    </ul>
                    </li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40172-extraire-trier-et-filtrer-des-donnees#/id/r-40031"><code class="line_code">sort</code></a> : se révèle bien utile lorsqu'on a besoin de trier le contenu d'un fichier. <code class="line_code">$ sort noms.txt </code>. Le contenu du fichier est trié alphabétiquement et le résultat est affiché dans la console. Vous noterez que <code class="line_code">sort</code> ne fait pas attention à la casse (majuscules / minuscules).<br/>
                    Elle a comme paramètre :
                    <ul>
                        <li><code class="line_code">-o</code> : Le fichier en lui-même n'a pas été modifié lorsque nous avons lancé la commande. Seul le résultat était affiché dans la console.Vous pouvez faire en sorte que le fichier soit modifié en précisant un nom de fichier avec <code class="line_code">sort -o noms_tries.txt noms.txt</code></li>
                        <li><code class="line_code">-r</code> permet d'inverser le tri.</li>
                        <li><code class="line_code">-R</code> permet de trier aléatoirement les lignes d'un fichier.</li>
                        <li><code class="line_code">-n</code> permet de trier des nombres.</li>
                    </ul>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40172-extraire-trier-et-filtrer-des-donnees#/id/r-40089"><code class="line_code">wc</code></a> : signifie word count. C'est donc a priori un compteur de mots mais en fait, on lui trouve plusieurs autres utilités : compter le nombre de lignes (très fréquent) et compter le nombre de caractères.<code class="line_code">$ wc noms.txt </code> : Sans paramètre il renvoi 1. le nombre de ligne (!=<code class="line_code">-l</code>) 2. le nombre de mot (!=<code class="line_code">-w</code>) 3. le nombre d'octets(!=<code class="line_code">-c</code>). Le paramètre <code class="line_code">-m</code> renvoie le nombre de caractères.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40172-extraire-trier-et-filtrer-des-donnees#/id/r-40109"><code class="line_code">uniq</code></a> : Parfois, certains fichiers contiennent des lignes en double et on aimerait pouvoir les détecter ou les supprimer. La commande <code class="line_code">uniq</code> est toute indiquée pour cela. Nous devons travailler sur un fichier trié. En effet, la commande ne repère que les lignes successives qui sont identiques. Vous pouvez demander à ce que le résultat sans doublons soit écrit dans un autre fichier plutôt qu'affiché dans la console => <code class="line_code">uniq doublons.txt sans_doublons.txt</code><br/>
                    Elle prend les paramètres : 
                    <ul>
                        <li><code class="line_code">-c</code> vous affiche le nombre de fois que la ligne est présente.</li>
                        <li><code class="line_code">-d</code> demande à afficher uniquement les lignes présentes en double.</li>
                    </ul>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40172-extraire-trier-et-filtrer-des-donnees#/id/r-40171"><code class="line_code">sort</code></a> : Couper une partie d'un fichier :
                        <ul>
                            <li><code class="line_code">-c</code> : Selon le nombre de caracère.<br/>
                                Pour conserver uniquement les caractères 2 à 5 de chaque ligne : <code class="line_code">$ cut -c 2-5 noms.txt </code><br/>
                                Pour conserver du 1er au 3ème caractère : <code class="line_code">$ cut -c -3 noms.txt </code><br/>
                                Pour conserver du 3ème au dernier caractère : <code class="line_code">$ cut -c 3- noms.txt </code>
                            </li>
                            <li>Couper selon un délimiteur : <code class="line_code">-d</code> indique quel est le délimiteur dans le fichier ; <code class="line_code">-f</code> indique le numéro du ou des champs à couper. Comme le nom CSV l'indique, les virgules servent à séparer les colonnes, pour conserver la première colone on utilisera donc <code class="line_code">$ cut -d , -f 1 notes.csv</code>.</li>
                        </ul>
                    </li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40666-surveiller-lactivite-du-systeme#/id/r-40513"><code class="line_code">w</code></a> : Cela me permet de voir d'un seul coup d'oeil si la machine est vraiment surchargée (et si oui, à quel point) et si quelqu'un d'autre est en train d'intervenir sur la machine. Elle renvoie : 
                        <ul>
                            <li>L'heure (commande <code class="line_code">date</code>)</li>
                            <li>L'uptime : C'est la durée de fonctionnement de l'ordinateur. (commande <code class="line_code">uptime</code>)</li>
                            <li>La charge : 1. La charge moyenne depuis 1mn 2. depuis 5mn 3. depuis 15mn. Charge = nombre moyen de processus (= un programme qui tourne en mémoire. La plupart des programmes ne font tourner qu'un processus en mémoire (une seule version d'eux-mêmes). C'est le cas d'OpenOffice par exemple. D'autres lancent des copies d'eux-mêmes, c'est le cas du navigateur Google Chrome qui crée autant de processus en mémoire que d'onglets ouverts) en train de tourner et qui réclament l'utilisation du processeur. Ce nombre dépend du nombre de processeurs de votre ordinateur. Un ordinateur dual core ne sera complètement chargé que lorsque la valeur aura atteint 2. Pour un quad core (4 coeurs de processeur), la valeur maximale avant surcharge sera de 4. Quand la charge est très élevée pendant une longue période, c'est qu'il y a clairement un problème. Il y a trop de programmes qui réclament le processeur et quelque chose ne va pas dans l'ordinateur. Celui-ci aura du mal à répondre en cas de forte charge.</li>
                            <li>La liste de connectés (commande <code class="line_code">who</code>).</li>
                        </ul></li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40666-surveiller-lactivite-du-systeme#/id/r-40588"><code class="line_code">ps</code></a> : Liste statique de processus,Cette liste n'est pas actualisée en temps réel.<br/>
                        Elle renvoie :
                        <ul>
                            <li><code class="line_code">PID</code> : c'est le numéro d'identification du processus. Chaque processus a un numéro unique qui permet de l'identifier. Ce numéro nous sera utile plus tard lorsque nous voudrons arrêter le processus.</li>
                            <li><code class="line_code">TTY</code> : c'est le nom de la console depuis laquelle a été lancé le processus.</li>
                            <li><code class="line_code">TIME</code> : la durée d'exécution du processus. Plus exactement, cela correspond à la durée pendant laquelle le processus a occupé le processeur depuis son lancement.</li>
                            <li><code class="line_code">CMD</code> : le programme qui a généré ce processus. Si vous voyez plusieurs fois le même programme, c'est que celui-ci s'est dupliqué en plusieurs processus (c'est le cas de MySQL, par exemple).</li>
                        </ul>
                        <p>
                            Quand on utilise <code class="line_code">ps</code> sans argument comme on vient de le faire, il affiche seulement les processus lancés par le même utilisateur (ici « mateo21 ») dans la même console (ici « pts/0 »). Cela limite énormément les processus affichés, car beaucoup sont lancés par root (l'utilisateur administrateur de la machine) et ne sont pas lancés depuis la même console que la vôtre.
                        </p>
                        <p>
                            Il existe plein de paramètre dont :
                            <ul>
                                <li><code class="line_code">ps -efH</code> : Affiche tous les processus en arbre (plusieurs processus sont des « enfants » d'autres processus, cela vous permet de savoir qui est à l'origine de quel processus).</li>
                                <li><code class="line_code">ps -u UTILISATEUR</code> : Affiche les processus lancés par un utilisateur.</li>
                            </ul>
                        </p>
                    </li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40666-surveiller-lactivite-du-systeme#/id/r-2281934"><code class="line_code">top</code></a> : Liste dynamique des processus. Cette liste est interactive et régulièrement mise à jour. Par défaut, les processus sont triés par taux d'utilisation du processeur (colonne %CPU). Les processus que vous voyez tout en haut de cette liste sont donc actuellement les plus gourmands en processeur. Ce sont peut-être eux que vous devriez cibler en premier si vous sentez que votre système est surchargé. ('q' pour fermer <code class="line_code">top</code>, 'h' pour afficher l'aide).</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40666-surveiller-lactivite-du-systeme#/id/r-2281942"><code class="line_code">Ctrl + C</code></a> : Arrête un processus lancé en console. Cela demande (gentiment) l'arrêt du programme console en cours d'exécution à l'écran. Exemple : <code class="line_code">find</code> qui s'éternise.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40666-surveiller-lactivite-du-systeme#/id/r-2281968"><code class="line_code">kill</code></a> : avec en paramètre le PID arrête un processus même en arrière plan.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40666-surveiller-lactivite-du-systeme#/id/r-2281965"><code class="line_code">kill -9</code></a> : avec en paramètre le PID arrête un processus même en arrière plan de manière brutal.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40666-surveiller-lactivite-du-systeme#/id/r-2281980"><code class="line_code">killall</code></a> : avec en paramètre le nom du processus arrête un ou plusieurs processus.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40666-surveiller-lactivite-du-systeme#/id/r-2281989"><code class="line_code">halt</code></a> : Arrête l'ordinateur. (en root)</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40666-surveiller-lactivite-du-systeme#/id/r-2281995"><code class="line_code">reboot</code></a> : redémarre l'ordinateur. (en root)</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40666-surveiller-lactivite-du-systeme#/id/r-2281995"><code class="line_code">&</code></a> : Placer en fin de commande, il éxecute la commande en arrière plan et renvoie [1] le n° du processus d'arrière plan et le PID. Il reste toutefois un problème : le processus est « attaché » à votre console. Si vous fermez la console sur laquelle vous êtes, le processus sera tué et ne s'exécutera donc pas jusqu'au bout.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40849-executer-des-programmes-en-arriere-plan#/id/r-2282047"><code class="line_code">nohup</code></a> : <code class="line_code">nohup commande</code> détache le processus en arrière plan de la console.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40849-executer-des-programmes-en-arriere-plan#/id/r-2282057"><code class="line_code">Ctrl + Z</code></a> : mettre en pause l'exécution du programme.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40849-executer-des-programmes-en-arriere-plan#/id/r-2282068"><code class="line_code">Ctrl + Z</code></a> : passer le processus en arrière-plan (background).</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40849-executer-des-programmes-en-arriere-plan#/id/r-2282079"><code class="line_code">Ctrl + Z</code></a> : connaître les processus qui tournent en arrière-plan.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40849-executer-des-programmes-en-arriere-plan#/id/r-2282084"><code class="line_code">Ctrl + Z</code></a> : reprendre un processus au premier plan (foreground). Sans paramètre si qu'un processus ou fg %[n°processus] si plusieurs.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40849-executer-des-programmes-en-arriere-plan#/id/r-40848">Screen, plusieurs console en une</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/41155-executer-un-programme-a-une-heure-differee#/id/r-40948"><code class="line_code">at</code></a> : Execute une commande plus tard. Le programme ne sera exécuté qu'une seule fois. La commande s'effectue en deux temps :
                        <ul>
                            <li>Vous indiquez à quel moment (quelle heure, quel jour (La date est au format américain, les numéros du jour et du mois sont donc inversés)) vous désirez que la commande soit exécutée. VALIDER</li>
                            <li>Vous tapez ensuite la commande que vous voulez voir exécutée à l'heure que vous venez d'indiquer.</li>
                        </ul>
                    <a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/41155-executer-un-programme-a-une-heure-differee#/id/r-2282285"><code class="line_code">atq</code> et <code class="line_code">atrm</code></a> servent lister et supprimer les jobs en attente.
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/41155-executer-un-programme-a-une-heure-differee#/id/r-40977"><code class="line_code">sleep</code></a> : On peut enchainer les commande en les séparant pas un ';' 'ou par '&&' si il n'y a pas d'erreur) : <code class="line_code">$ touch fichier.txt; sleep 10; rm fichier.txt</code>, <code class="line_code">sleep</code> permet de faire une pause entre les deux (en seconde par défaut).</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/41155-executer-un-programme-a-une-heure-differee#/id/r-41154"><code class="line_code">crontab</code></a> : permet de faire en sorte que l'exécution soit répétée : toutes les heures, toutes les minutes, tous les jours, tous les trois jours, etc.</li>









        




                <h5 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38696-manipuler-les-fichiers#/id/r-2279747" target="blank">Paramètres</a></h5>
                <ul>
                    <li><code class="line_code">--all</code> est un synonyme de <code class="line_code">-a</code> : Cela affiche tout le contenu du dossier, même les fichiers cachés. Un « fichier caché » sous Linux est un fichier qui commence par un point.Les deux premiers éléments sont assez intrigants : « . » et « .. ». Le premier représente en fait le dossier actuel, et « .. » représente le dossier parent, c'est-à-dire le dossier précédent dans l'arborescence.<br/>
                    Le paramètre <code class="line_code">-A</code> (un « A » majuscule au lieu d'un « a » minuscule) a pratiquement la même signification : cela affiche la même chose sauf ces éléments « . » et « .. ». </li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38351-la-structure-des-dossiers-et-fichiers#/id/r-2279594"><code class="line_code">-F</code></a> : Il rajoute à la fin des éléments un symbole pour qu'on puisse faire la distinction entre les dossiers(/), fichiers, raccourcis(@)…</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38351-la-structure-des-dossiers-et-fichiers#/id/r-2279615"><code class="line_code">-l</code></a> : Il affiche une liste détaillant chaque élément du dossier. Il y a un élément par ligne. Chaque colonne a sa propre signification. De gauche à droite :
                        <ol>
                            <li>droits sur le fichier ;</li>
                            <li>nombre de liens physiques ;</li>
                            <li>nom de la personne propriétaire du fichier. Si le fichier avait été créé par quelqu'un d'autre, par exemple Patrick, on aurait vu son nom à la place ;</li>
                            <li>groupe auquel appartient le fichier (on en reparlera dans le chapitre sur les droits). Il se peut que le nom du groupe soit le même que celui du propriétaire ;</li>
                            <li>taille du fichier, en octets ;</li>
                            <li>date de dernière modification ;</li>
                            <li>nom du fichier (ou dossier).</li>
                        </ol>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38351-la-structure-des-dossiers-et-fichiers#/id/r-2279621"><code class="line_code">-h</code></a> : « h » pour Human Readable, c'est-à-dire « lisible par un humain », vous obtenez des tailles de fichiers beaucoup plus lisibles.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/38351-la-structure-des-dossiers-et-fichiers#/id/r-2279632"><code class="line_code">-t</code></a> : trier par date de dernière modification. En pratique, je combine <code class="line_code">-t</code> avec <code class="line_code">-r</code> qui renverse l'ordre d'affichage des fichiers. Je préfère en effet avoir le dernier fichier modifié en bas de la liste, c'est plus pratique à l'usage dans la console.</li>
                    <li><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39740-rtfm-lisez-le-manuel#/id/r-2281082"><code class="line_code">-h</code></a> : et son équivalent plus long --help qui provoque l'affichage d'une aide résumée. Parfois cette aide est d'ailleurs plus facile à lire que celle du man.</li>




                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-2280084">Les utilisateurs et les droits</a></h3>

                <p>
                    On peut créer autant d'utilisateurs que l'on veut, eux-mêmes répartis dans des groupes. Il y a un utilisateur « spécial », root, aussi appelé superutilisateur. Celui-ci a tous les droits sur la machine. On ne se connecte en root que très rarement, lorsque c'est nécessaire. Certaines commandes de Linux que nous allons voir dans ce chapitre ne sont accessibles qu'à root.
                </p>
                <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-39043">Le fonctionnement des droits</a></h4>
                <p>
                    Chaque fichier et chaque dossier possède une liste de droits. C'est une liste qui indique qui a le droit de voir le fichier, de le modifier et de l'exécuter. Vous avez déjà vu des listes de droits, oui oui ! Lorsque vous faites un ls -l, il s’agit de la première colonne.<br/>
                    On peut voir cinq lettres différentes. Voici leur signification :
                    <ul>
                        <li>d (Directory) : indique si l'élément est un dossier ;</li>
                        <li>l (Link) : indique si l'élément est un lien (raccourci) ;</li>
                        <li>r (Read) : indique si on peut lire l'élément ;</li>
                        <li>w (Write) : indique si on peut modifier l'élément ;</li>
                        <li>x (eXecute) : si c'est un fichier, « x » indique qu'on peut l'exécuter. Ce n'est utile que pour les fichiers exécutables (programmes et scripts). Si c'est un dossier, « x » indique qu'on peut le « traverser », c'est-à-dire qu'on peut voir les sous-dossiers qu'il contient si on a le droit de lecture dessus.</li>
                    </ul>
                    Si la lettre apparaît, c'est que le droit existe. S'il y a un tiret à la place, c'est qu'il n'y a aucun droit.
                    <figure>
                        <img src="../92092.png" alt="schéma droits linux"/>
                    </figure>
                    On modifie les droits d'accès avec <a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39044-les-utilisateurs-et-les-droits#/id/r-2280413">chmod</a>
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39267-nano-lediteur-de-texte-du-debutant#/id/r-2280426">Nano, l'éditeur de texte</a></h3>

                <p>
                    Un éditeur de texte est un programme qui permet de modifier des fichiers de texte brut, sans mise en forme (gras, italique, souligné…). Sous Windows, on dispose d'un éditeur de texte très basique : le Bloc-Notes. Sous Linux, on a le choix entre Nano, Vim, Emacs et bien d'autres, sachant qu'au moins un de ceux-là est installé par défaut sur la plupart des distributions.<br/>
                    Les éditeurs de texte sont parfaits pour les programmeurs en particulier : ils permettent d'éditer des fichiers .c, .cpp, .h, .rb, .py, etc. (En fonction de votre langage de programmation.)
                </p>
                <p>
                    Pour démarrer le logiciel, il vous suffit simplement de taper <code class="line_code">nano</code> dans la console. Lorsque vous appelez Nano dans la ligne de commandes, vous pouvez spécifier plusieurs paramètres. Le plus courant est d'indiquer en paramètre le nom du fichier qu'on veut ouvrir. <code class="line_code">nano salut.txt</code>. Si le fichier n'existe pas, il sera automatiquement créé par Nano lors du premier enregistrement.<br/>
                    À part ça, la commande <code class="line_code">nano</code> accepte de nombreux paramètres. Pour vous, j'en ai sélectionné trois qui me semblent faire partie des plus utiles :
                    <ul>
                        <li>-m : autorise l'utilisation de la souris sous Nano. En console, oui, oui. Vous pouvez vous en servir pour cliquer avec votre souris sur la zone de texte où vous voulez placer votre curseur.</li>
                        <li>-i : indentation automatique. L'alinéa (tabulations) de la ligne précédente sera respecté lorsque vous irez à la ligne. Très utile lorsque vous éditez un fichier de code source.</li>
                        <li>-A : active le retour intelligent au début de la ligne. Normalement, lorsque vous appuyez sur la touche Origine (aussi connue sous le nom de Home) située à côté de la touche Fin, le curseur se repositionne au tout début de la ligne. Avec cette commande, il se positionnera après les alinéas. Comme -i, il s'agit d'une option utile avant tout pour les programmeurs.</li>
                    </ul>
                    <a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39267-nano-lediteur-de-texte-du-debutant#/id/r-2280572">Pour configurer nano entrer dans <code class="line_code">sudo nano /etc/nanorc</code></a>
                </p>
                <p>
                    Tout comme il existe un fichier de configuration de Nano, il existe un fichier de configuration de l'ensemble de la console : le <a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39267-nano-lediteur-de-texte-du-debutant#/id/r-39266"><code class="line_code">.bashrc</code></a>. Il se situe dans votre répertoire personnel et celui-ci existe déjà normalement : <code class="line_code">~$ nano .bashrc</code>.
                </p>
                <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39267-nano-lediteur-de-texte-du-debutant#/id/r-2280609">Créer des alias</a></h4>

                <p>
                    Les alias sont des commandes que vous créez et qui sont automatiquement transformées en d'autres commandes. Descendez un peu plus bas dans le fichier <code class="line_code">.bashrc</code>, vous trouverez des lignes commentées commençant par « alias ».<br/>
                    Si vous voulez définir des alias ou modifier l'invite de commandes pour tous vos utilisateurs, vous pouvez le faire en une seule fois en éditant le fichier <code class="line_code">bashrc</code> global situé dans : <code class="line_code">/etc/bash.bashrc</code>. Ce <code class="line_code">bashrc</code> doit être édité en root.
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39499-installer-des-programmes-avec-apt-get#/id/r-2280645">Installer des programmes avec apt-get</a></h3>

                <p>
                    L'installation de programmes fonctionne différemment d'une distribution à une autre. C'est justement une des différences majeures entre les distributions. Sous Ubuntu, on n'a pas de programmes d'installation (.exe par exemple); on a ce qu'on appelle des paquets. Un paquet est une sorte de dossier zippé qui contient tous les fichiers du programme. Il se présente sous la forme d'un fichier.deb, en reférence à DEBian. Il contient toutes les instructions nécessaires pour installer le programme. Tous les paquets sont regroupés au sein d'un même endroit appelé dépôt. Il s'agit d'un serveur qui propose tous les paquets qui existent (ou presque), ce qui simplifie grandement vos recherches.<br/>
                    Les deux programmes console de gestion des paquets les plus connus sont :
                    <ul>
                        <li><code class="line_code">apt-get</code>, le plus utilisé</li>
                        <li><code class="line_code">aptitude</code></li>
                    </ul>
                    Nous devons généralement suivre trois étapes pour télécharger un paquet :
                    <ul>
                        <li><code class="line_code">apt-get update</code> (optionnel) : pour mettre notre cache à jour si ce n'est pas déjà fait ; Il y a deux cas où vous avez besoin de le mettre à jour : quand vous changez ou ajoutez un dépôt à votre liste de dépôts et quand vous n'avez pas mis à jour votre cache depuis un moment (quelques semaines)(Pensez à rajouter un sudo si vous n'êtes pas déjà root).</li>
                        <li><code class="line_code">apt-cache search monpaquet</code> (optionnel) : pour rechercher le paquet que nous voulons télécharger si nous ne connaissons pas son nom exact ;</li>
                        <li><code class="line_code">apt-get install monpaquet</code> : pour télécharger et installer notre paquet.</li>
                    </ul>
                </p>
                <p>
                    Si vous voulez désinstaller un paquet, vous pouvez utiliser la commande <a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39499-installer-des-programmes-avec-apt-get#/id/r-39469"><code class="line_code">apt-get remove</code></a>. Toutefois, cela ne supprime pas les dépendances du paquet devenues inutiles. Pour demander à ><code class="line_code">apt-get</code> de supprimer aussi les dépendances inutiles, on utilise ><code class="line_code">apt-get autoremove</code>.
                </p>
                <p>
                    <a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39499-installer-des-programmes-avec-apt-get#/id/r-39498"><code class="line_code">apt-get upgrade</code></a> ira à mettre à jour tous les paquets installés sur votre système d'un seul coup. 
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/39740-rtfm-lisez-le-manuel#/id/r-39564">RTFM : Le manuel d'utilisation.</a></h3>

                <p>
                    Il s'agit de la commande <code class="line_code">man + nom de la commande</code>.
                    Pour se déplacer dans le manuel :
                    <ul>
                        <li>Vous pouvez utiliser les touches Page Up et Page Down (ou Espace) pour vous déplacer de page en page.</li>
                        <li>Appuyez sur la touche Home (aussi appelée Origine) pour revenir au début du manuel, et sur Fin pour aller à la fin.</li>
                        <li>Appuyez sur la touche / (slash) pour effectuer une recherche ; c'est très pratique ! Tapez ensuite le mot que vous recherchez dans le manuel puis appuyez sur Entrée. Si la recherche renvoie un résultat vous serez automatiquement placés sur le premier résultat trouvé. Pour passer au résultat suivant, tapez à nouveau / puis directement sur Entrée (sans retaper votre recherche).</li>
                        <li>Appuyez sur la touche Q pour quitter le manuel à tout moment, comme vous le faisiez avec less.</li>
                    </ul>
                </p>
                <p>
                    On peut aussi utiliser <code class="line_code">apropos + mot clé</code>,  elle va le rechercher dans les descriptions de toutes les pages du manuel.
                </p>

                <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40444-les-flux-de-redirection#/id/r-2281526">Les flux de redirection</a></h3>

                <p>
                    Il est possible de rediriger le résultat de la commande. Au lieu que celui-ci s'affiche dans la console, vous allez pouvoir l'envoyer ailleurs : dans un fichier ou en entrée d'une autre commande pour effectuer des « chaînes de commandes ». Comme ci-dessous :
                <figure>
                    <img src="..images/137848.png" alt="flux de redirection"/>
                </figure>
                </p>
                <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40444-les-flux-de-redirection#/id/r-2281566"><code class="line_code">&gt</code> : rediriger dans un nouveau fichier</a></h4>


                <p>
                    Ce symbole permet de rediriger le résultat de la commande dans le fichier de votre choix. <code class="line_code">cut -d , -f 1 notes.csv > eleves.txt</code> ici eleves.txt ; Normalement, si vous exécutez cette commande, rien ne s'affichera dans la console. Tout aura été redirigé dans un fichier appelé eleves.txt qui vient d'être créé pour l'occasion dans le dossier dans lequel vous vous trouviez. (Attention : si le fichier existait déjà il sera écrasé sans demande de confirmation !)<br/>
                    Parfois, vous ne voulez ni voir le résultat d'une commande ni le stocker dans un fichier. Dans ce cas, l'astuce consiste à rediriger le résultat dans <code class="line_code">/dev/null</code>. C'est un peu le « trou noir » de Linux : tout ce qui va là-dedans disparaît immédiatement (<code class="line_code">commande_bavarde > /dev/null</code>).
                </p>
                
                 <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40444-les-flux-de-redirection#/id/r-2281580"><code class="line_code">&gt&gt</code> : rediriger à la fin d'un fichier (et le créer si il n'existe pas)</a></h4>

                <p>
                    Si vous faites : <code class="line_code">cut -d , -f 1 notes.csv >> eleves.txt</code> les noms seront ajoutés à la fin du fichier, sans écraser le résultat précédent.
                </p>

                <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40444-les-flux-de-redirection#/id/r-40302">Rediriger les erreurs</a></h4>

                <p>
                    Sur le même principe, si la console renvoie une erreur, elle peut être rediriger avec <code class="line_code">2&gt</code> et <code class="line_code">2&gt&gt</code> : <code class="line_code">cut -d , -f 1 fichier_inexistant.csv > eleves.txt 2> erreurs.log</code>.<br/>
                    Pour rediriger les erreurs et les résultats sans erreur dans le même fichier on utilisera <code class="line_code">2&gt&1</code> tel que <code class="line_code">cut -d , -f 1 fichier_inexistant.csv >> eleves.txt 2>&1</code> où les erreurs seront ajoutées à la fin du fichier eleves.txt comme le reste des messages.
                </p>

                <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40444-les-flux-de-redirection#/id/r-40357"><code class="line_code">&lt</code> : Lire depuis un fichier </a></h4>

                <p>
                    Cela permet d'indiquer d'où vient l'entrée qu'on envoie à la commande : <code class="line_code">cat < notes.csv</code>
                </p>

               <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40444-les-flux-de-redirection#/id/r-2281693"><code class="line_code">&lt&lt</code> : Lire depuis un clavier </a></h4>

                <p>
                    Il vous permet d'envoyer un contenu à une commande avec votre clavier. <br/>
                    Si on tape : <code class="line_code">sort -n << FIN</code><br/>
                    On peut ensuite taper ligne par ligne l'information à envoyer en finissant par 'entrer' puis écrire 'FIN' pour valider l'information à envoyer à la commande.<br/>
                    On peut remplacer 'FIN' par un autre mot clé. 
                </p>

                <h4 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/43538-reprenez-le-controle-a-laide-de-linux/40444-les-flux-de-redirection#/id/r-40357"><code class="line_code">|</code> : Chainer les commandes avec le pipe ( | ).</a></h4>

                <p>
                    « Chaîner des commandes » ? Cela signifie connecter la sortie d'une commande à l'entrée d'une autre commande (comme le montre la figure suivante). En gros, tout ce qui sort de la commande1 est immédiatement envoyé à la commande2. Et vous pouvez chaîner des commandes comme cela indéfiniment !
                    <figure>
                        <img src="../images/138426.png" alt="chainer les commandes"/>
                    </figure>
                </p>

                    
<?php  
    $content = ob_get_clean(); 

    require_once('structure/layout.php');
?>
