<?php $title = 'Sécurité'; ?>
<?php ob_start(); ?>

        <h1 id=<?php $ini=0; echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6519695-identifiez-les-regles-de-securite-a-appliquer-par-les-entreprises#/id/r-6741562" target="_blank">
        La sécurité</a></h1>

        <p>
        Il existe trois principes de sécurité qui peuvent être appliqués pour garantir la sécurité d’une application ou d’une infrastructure.
        <ol>
            <li><strong>La confidentialité</strong>. C'est l'assurance que les personnes non autorisées n'accèdent pas à des informations sensibles</li>
            <li><strong>L'intégrité</strong>. Elle permet d'être sûr que les données sont fiables et n'ont pas été modifiées par des personnes non autorisées.</li>
            <li><strong>La disponibilité</strong>. C'est l’assurance qu'il n'y a pas de perturbation d'un service ou de l'accessibilité aux données.</li>
        </ol>
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6519695-identifiez-les-regles-de-securite-a-appliquer-par-les-entreprises#/id/r-6678822" target="_blank">
        Les principales réglementations</a></h1>

        <p>
        <ul>
            <li><strong>Le RGPD</strong> :  Il modifie la manière dont les données personnelles sont stockées et utilisées et la façon dont les entreprises les traitent. Jetez un coup d'œil au <a href="https://gdpr.eu/">site web officiel du RGPD</a></li>
            <li>La norme Payment Card Industry Data Security Standard (<strong>PCI DSS</strong>) est une norme établie pour toutes les entreprises qui traitent des données bancaires. La sécurisation des données bancaires met l'accent sur la sécurité lors de la transmission, du traitement et du stockage des données. </li>
            <li>Pour en savoir plus sur le traitement des données personnelles en France, rendez-vous sur le site de la <a href="https://www.cnil.fr/">CNIL</a>.</li>
            <li><a href="https://owasp.org/www-project-top-ten/">L’Open Web Application Security Project (<strong>OWASP</strong>)</a> est un organisme impartial, mondial et sans but lucratif. Il évalue les dix principaux risques pour la sécurité des applications web et préconise un développement logiciel sécurisé.</li>
        </ul>
        </p>

        <h1 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6519752-decouvrez-lopen-web-application-security-project-owasp" target="_blank">
        TOP 10 2017</a></h1>

        <p>
            <ol>
                <li><strong>Injection</strong> : Une attaque par injection est une attaque permettant l’injection de code arbitraire dans l’application. Cela se produit lorsque des données non maîtrisées sont exécutées par le moteur présent sur le backend de l’application. Les données de l’attaquant sont exécutées sans autorisations adéquates. </li>
                <li><strong>Piratage de session</strong> : Beaucoup d'applications exigent qu'un utilisateur se connecte pour arriver sur des pages auxquelles lui seul a accès. L’application est vulnérable à une attaque si un utilisateur malveillant peut obtenir un accès non autorisé aux mots de passe, clés et jetons pour pirater la session d'un autre utilisateur.</li>
                <li><strong>Exposition de données sensibles </strong>: Les données stockées ou échangées via une application doivent être protégées pour éviter l’interception par une personne malveillante. Les bases de données qui enregistrent les données personnelles, les données de cartes de crédit, les noms d'utilisateur et les mots de passe représentent une cible de choix pour un pirate. Si ces données ne sont pas chiffrées, elles ne sont pas sécurisées et peuvent être récupérées lorsqu’elles sont en transit par exemple. L'utilisation de techniques de chiffrement et de pratiques de sécurité peut atténuer ce type d’attaques.</li>
                <li><strong>Entités externes XML (XXE) </strong>: Le format XML permet de faciliter l’échange de données sous forme d'arborescence. Il est largement utilisé sur Internet. Il peut être exploité via l’injection XXE ou XML External Entity. XML External Entity est une attaque contre les applications qui parsent des entrées XML (exemple flux RSS). Cette attaque a lieu lorsque l'analyseur XML est mal configuré et contient une référence à une entité externe.</li>
                <li><strong>Contournement du contrôle d’accès</strong> : Cette attaque vise les fonctionnalités des applications web qui nécessitent un contrôle d'accès. Dans ce cas, les pirates peuvent utiliser l'URL pour contourner l'authentification, par exemple. Ce type d’exploitation peut par exemple révéler comment une base de données est organisée.</li>
                <li><strong>Security Misconfiguration</strong> : Une mauvaise configuration de sécurité est le plus souvent observée dans les en-têtes HTTP qui permettent de donner des indications sur la configuration du serveur, ou via la gestion des exceptions par défaut. Les codes d'erreur et les exceptions courantes peuvent donner à un attaquant un aperçu de l'application.</li>
                <li><strong>Cross-Site Scripting  (XSS)</strong> : Les failles XSS se produisent chaque fois qu'une application inclut des données non fiables dans une nouvelle page web sans validation ou échappement. Les failles XSS permettent aux attaquants d'exécuter des scripts dans le navigateur de la victime, ce qui peut détourner des sessions utilisateur, altérer des sites web ou rediriger l'utilisateur vers un site malveillant.</li>
                <li><strong>Désérialisation non sécurisée (Insecure Deserialisation)</strong> : Une vulnérabilité de type “insecure deserialisation” permet à un utilisateur malveillant d'accéder et de modifier les fonctionnalités de l’application ciblée.</li>
                <li><strong>Utilisation de composants présentant des vulnérabilités connues</strong> : Même si votre application est sécurisée, vous devez vous assurer que le framework, les bibliothèques, les appels API et la plateforme que vous utilisez ne sont pas vulnérables. Lorsqu'une nouvelle vulnérabilité est découverte, un correctif est généralement proposé. Il faudra alors l’appliquer pour garantir la sécurité de l’application.</li>
                <li><strong>Manque de surveillance et de monitoring</strong> : Pour garantir la sécurité d’une application, il est nécessaire de surveiller et de monitorer les connexions. De nombreux serveurs vulnérables servent de rebond aux attaquants. La mise en place de monitoring permettra de détecter une anomalie sur le serveur.</li>
            </ol>

        </p>
        
        <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520701-protegez-votre-code-contre-l-injection#/id/r-6679312" target="_blank">
        L'injection</a></h2>

        <p>
        Cette vulnérabilité permet à un attaquant d’injecter des données non maîtrisées qui seront exécutées par l’application et qui permettent d’effectuer des actions qui ne sont normalement pas autorisées. Ces injections peuvent par exemple être des requêtes SQL pour manipuler la base de données, du code JavaScript ou HTML.
        </p>

        <div class="em">Le type d'attaque par injection le plus connu est l'injection SQL.</div>

        <p>
            Exemple de validation de connexion : 
        </p>

        <figure class="block_code">
                <pre><code>
SELECT * FROM accounts WHERE username='$username' AND password='$password' 
                </code></pre>
            </figure>

            <p>
            Cette requête classique peut être contournée par le biais d’une injection SQL. L’exemple suivant nous montre un cas d’exploitation classique.
            </p>

            <figure class="block_code">
                <pre><code>
$username = 1' or '1' = '1’

$password = 1’ or ‘1’= ’1’
                </code></pre>
            </figure>

            <p>
            Dans ce champ, <code class="line_code">“$username = 1”</code> et <code class="line_code">“$password = 1”</code>  sont comparés à l'instruction  <code class="line_code">'1=1'</code>. Ici, peu importent le username et le password entrés : l’instruction sera toujours valide.
            </p>

            <p>
                Pour garantir une protection contre l’injection SQL, il est possible d’utiliser un pare-feu d'application web ou WAF, pour Web Application Firewall en anglais. Ce pare-feu se place entre l'utilisateur et l’application web et permet de vérifier et d'intercepter les données envoyées. Toutefois il est également possible de sécuriser l’application directement dans le code.
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520701-protegez-votre-code-contre-l-injection#/id/r-6679417" target="_blank">
            Validez les entrées</a></h3>

            <p>
            La validation des entrées est une excellente pratique en tant que développeur web. Elle limite ce que l'utilisateur peut mettre dans la zone de texte. Avez-vous déjà été frustré lors de la création d'un compte parce qu'il n'était pas possible de créer un mot de passe sans chiffres ou lettres majuscules ?
            </p>

            <p>
            Cela n'empêchera pas l'injection, mais c'est une mesure que vous pouvez mettre en place pour limiter des attaques de base. En effet, les caractères spéciaux spécifiques à certains langages ne pourront pas être utilisés.
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520701-protegez-votre-code-contre-l-injection#/id/r-6679757" target="_blank">
            Paramétrez vos variables !</a></h3>

            <p>
            Vous pouvez écrire vos requêtes SQL en paramétrant les variables. C'est ce qu'on appelle une requête préparée. Examinons l'exemple précédent.
            </p>

            <p>
            Les langages Java, .NET, ColdFusion, PHP et Ruby ont également des fonctions intégrées pour paramétrer vos variables. (<code class="line_code">prepare()</code>, <code class="line_code">execute()</code> avec le module PDO de PHP)
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520701-protegez-votre-code-contre-l-injection#/id/r-6679758" target="_blank">
            Fonction <code class="line_code">sp_executesql</code></a></h3>

            <p>
                Voir détail sur google. 
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520701-protegez-votre-code-contre-l-injection#/id/r-6685023" target="_blank">
            Utilisez un Object Relational Mapper (ORM)</code></a></h3>

            <p>
            De nombreux langages disposent d'outils ORM (Object Relational Mapper) qui peuvent obfusquer votre requête, c’est-à-dire masquer son fonctionnement. Cela signifie qu'il masque ce à quoi ressemble vraiment la requête SQL, ce qui permet d’ajouter une couche de sécurité supplémentaire.
            </p>

            <p>
                A voir en fonction des languages. 
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520013-empechez-le-piratage-de-session#/id/video_Player_1" target="_blank">
            Le piratage de session</a></h2>

            <p>
            À tout moment du processus d'authentification, un utilisateur malveillant peut obtenir un accès non autorisé à la session et avoir accès à des données sensibles.
            </p>

            <p>
            Le piratage de l’authentification peut être automatisé avec l’utilisation de la technique de force brute, c’est-à-dire l’utilisation d’une multitude de couples identifiant/mot de passe de manière automatique, jusqu’à obtenir le bon.
            </p>

            <p>
            Lorsqu'un utilisateur malveillant a un accès non autorisé à une liste de noms d'utilisateur et de mots de passe, une attaque appelée credential stuffing peut être utilisée pour essayer toutes les combinaisons de noms d'utilisateur et de mots de passe, jusqu'à ce que le pirate s'authentifie.
            </p>

            <p>
            Bien que les cookies de suivi ne peuvent pas être utilisés pour pirater une session, ils peuvent représenter un problème concernant la confidentialité et la vie privée, car ils permettent l’accès à vos habitudes de navigation.
            </p>

            <p>
            Les cookies de session contiennent un identifiant qui identifie une session. Dans ce cas, chaque session reçoit un ID de session. L'authentification peut être détournée si l'utilisateur malveillant devine le bon ID de session.
            </p>

            <p>
            Avec le protocole HTTP, les sites web n'ont pas la possibilité d'enregistrer des informations d'authentification ou de session sauf s'ils les stockent dans un fichier sur les navigateurs. C'est à ça que servent les cookies de session.
            </p>

            <p>
            Voici quelques recommandations pour garantir la sécurité des cookies :
            <ul>
                <li>assurez-vous que les cookies sont chiffrés lors de la transmission via HTTPS ;</li>
                <li>ne stockez pas d'informations d'identification en texte clair dans vos cookies ;</li>
                <li>définissez une date d'expiration pour vos cookies-session.</li>
            </ul>
            </p>

            <p>
            Prévenez votre application des authentifications non autoriséesn avec des recommandations simples :
                <ul>
                    <li>exigez de vos utilisateurs qu'ils aient un mot de passe fort;</li>
                    <li>il est également recommandé d'exiger des utilisateurs qu'ils changent régulièrement leur mot de passe en cas d’attaque de credential stuffing ;</li>
                    <li>mettez en place le verrouillage de compte lorsqu'un utilisateur essaie de se connecter un trop grand nombre de fois sans y parvenir. Cela permet d'empêcher les attaques de force brute ;</li>
                    <li>changez ou désactivez les comptes par défaut ;</li>
                    <li>implémentez une authentification forte, c’est-à-dire avec plusieurs facteurs d’authentification, comme la validation par SMS ou par mail, par exemple. </li>
                </ul>
            </p>

            <p>
            Il existe des frameworks pour vous aider à implémenter plus facilement un code sécurisé, quel que soit le langage que vous utilisez.
            </p>

            <p>
            Une bonne pratique pour la validation des entrées est de vérifier toutes les entrées en supprimant les caractères non pertinents. 
            </p>

            <p>
            Le hachage permet de générer une empreinte unique pour une entrée. Le problème est qu’il est possible d’utiliser des rainbow tables, c’est-à-dire des listes de hash préalablement calculés, puis de les utiliser avec une attaque de force brute. Pour éviter ce genre d’attaque, il est possible d’ajouter un sel permettant d’ajouter une donnée supplémentaire, et ainsi renforcer la sécurité.
            </p>

            <p>
            Un sel est une séquence aléatoire utilisée en plus du chiffrement pour rendre le hachage imprévisible.
            </p>

            <p>
            Quel que soit le langage dans lequel vous développez, il existe plusieurs solutions qui peuvent vous permettre de sécuriser votre mécanisme d'authentification ! Voici quelques conseils pour vous aider à développer vos mécanismes d'identification et de validation de session :
                <ul>
                    <li>ne mettez pas l’ID de session dans l’URL ;</li>
                    <li>limitez la durée de l'ID de session ;</li>
                    <li>modifiez le nom d'ID de session par défaut.</li>
                </ul>
            </p>

            <p>
            PHP possède une bibliothèque appelée SessionManager avec des fonctions qui peuvent être utilisées pour valider les sessions avec des restrictions.
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520126-protegez-les-donnees-en-transit#/id/video_Player_1" target="_blank">
            Protégez les données en transit</a></h2>

            <p>
            Lorsque vous surfez sur Internet, votre navigateur utilise le les protocole HTTP (Hypertext Transfer Protocol) pour afficher les pages web, et le protocole Transmission Control Protocol/Internet Protocol (TCP/IP) pour les transmettre.
            </p>

            <p>
            Votre navigateur va lancer une connexion TCP, qui va envoyer des requêtes GET et POST pour vous connecter au serveur web associé au nom de domaine ou à l'adresse IP.
            </p>

            <p>
            Si le serveur web établit la connexion TCP avec le navigateur, une réponse avec le code status et le fichier demandé (généralement le fichier index.html pour la page web) sera transmise. Mais dans notre cas, les données transitent en HTTP et pas en HTTPS... Ceci nous amène à la première vulnérabilité. Les données transitant en HTTP peuvent être interceptées, car elles transitent en clair.
            </p>

            <p>
            L'attaque de l'homme du milieu (Man in the Middle, en anglais) est l'une des principales causes de détournement de session. L'attaquant se place au milieu de votre communication, intercepte les connexions réseau et capte ainsi tout ce que vous envoyez.
            </p>

            <p>
            HTTPS est la variante sécurisée de HTML qui utilise les protocoles  Secure Sockets Layer/ Transport Layer Security (SSL/TLS) pour chiffrer les transmissions. Cela permet d'ajouter une couche de sécurité lorsque les données sont en transit. En règle générale, si vous devez vous authentifier avec un mot de passe n'importe où sur le site, utilisez HTTPS pour protéger le mot de passe lorsqu'il est transmis sur le réseau.
            </p>

            <p>
            Tout d'abord, obtenez un certificat SSL et ajoutez-le à votre serveur. Ce certificat est nécessaire pour chiffrer les données en cours de transmission. Ensuite, codez vos pages avec HTTPS !
            </p>

            <p>
            Quel que soit le langage que vous utilisez, assurez-vous que votre page de connexion et toutes les pages web qui font partie de la session utilisent HTTPS.
            </p>

            <p>
            Voici quelques recommandations pour protéger vos données en transit :
            <ul>
                <li>N'utilisez GET que pour récupérer des informations.</li>
                <li>Utilisez POST pour les informations qui seront manipulées.</li>
                <li>Toutes les requêtes POST doivent utiliser HTTPS/SSL pour s'assurer que le corps est chiffré.</li>
                <li>Vérifiez tous les modules tiers que vous utilisez pour créer des requêtes GET/POST et utilisez HTTPS pour chacun d'entre eux !</li>
            </ul>
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520207-protegez-les-donnees-stockees-sur-une-application#/id/video_Player_1" target="_blank">
            Protégez les données stockées sur une application</a></h2>

            <p>
            Les données stockées sont donc le contenu de la base de données. Typiquement, une base de données contiendra des données sensibles sur un site qui nécessite une authentification.<br/>
            Nous savons comment effectuer des requêtes dans la base de données afin de prévenir les modifications non autorisées et l'exposition de la base de données. Mais si un attaquant arrive à contourner l’authentification, comment pouvons-nous restreindre son accès aux données ?<br/>
            Pour cela, il existe un moyen sûr, le chiffrement des données.
            </p>

            <p>
            L'intérêt des algorithmes de hachage est qu’ils permettent de calculer une empreinte (ou hash) d’une chaîne de caractères, par exemple. Cette empreinte est utile pour éviter de stocker en clair le mot de passe dans la base de données.
            </p>

            <p>
            SHA-1 (Secure Hash Algorithm) et MD5 (message-digest algorithm) sont des fonctions de hachage cryptographique. 
            </p>

            <p>
            Cependant, certains attaquants réussiront tout de même à contourner ce mécanisme. Comme pour les cookies, il est possible d’effectuer une attaque par rainbow table, c’est-à-dire qu’un attaquant va préalablement calculer des hash de mots de passe puis les utiliser avec une attaque de brute force pour trouver le bon.
            </p>

            <p>
            Comme pour l'authentification, il est possible de contourner cette attaque en utilisant le salage.
            </p>

            <p>
            Argon5 est un des algorithmes de hachage les plus puissants et fortement recommandés par l'OWASP. 
            </p>

            <p>
            Pour sécuriser l’authentification, il existe de bonnes pratiques de sécurité simples à appliquer :
                <ul>
                    <li>supprimer les comptes par défaut en changeant les mots de passe connus ;</li>
                    <li>utiliser le principe de moindre privilège pour vous assurer qu'un ou deux comptes seulement ont des privilèges élevés : concept fondamental de la sécurité des systèmes d’information. </li>
                </ul>
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520207-protegez-les-donnees-stockees-sur-une-application#/id/video_Player_1" target="_blank">
            Empêchez l'exploitation des contrôles d'accès</a></h2>

            <p>
            Le contrôle d'accès consiste à configurer votre application web pour s'assurer que les utilisateurs ne peuvent accéder qu'aux données permises par leur rôle.
            </p>

            <p>
            Les attaques courantes contre le contrôle d'accès se produisent lorsqu'une URL permet de contourner l'authentification. Les pirates informatiques utilisent la connaissance des formats et des modèles pour deviner l'URL des pages privilégiées qui n'ont pas été configurées de manière sécurisée. Pour se protéger contre ce type d'attaque, il est possible de mettre en place une restriction URL.
            </p>

            <p>
            Un utilisateur malveillant dispose de techniques pour accéder à une grande partie du code d'une application web. Une partie de ce code peut révéler comment une base de données est organisée. Le fait de fournir quelques informations sur la structure de l’application web peut permettre à un utilisateur non autorisé d’effectuer des actions malveillantes et de contourner les accès prédéfinis. 
            </p>

            <p>
            Par exemple, si vous accédez à votre compte sur un site et que vous êtes sur la page principale, vous remarquez que l'adresse URL ressemble à ceci :
            </p>

            <figure class="block_code">
                <pre><code>
https://webdevfightshacker.bla/index.php/view?account=3453
                </code></pre>
            </figure>



            <p>
            Sécurisez les contrôles d’accès
            <ol>
                <li>Au lieu de nommer vos pages cibles avec un sens, utilisez un tableau de valeurs clés qui font référence à vos objets.</li>
                <li>Modifiez les noms par défaut de vos pages web.</li>
                <li>Assurez-vous que toutes les pages ont un contrôle d'authentification.</li>
                <li>Personnalisez vos exceptions et vos codes d'erreur.</li>
            </ol>
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520207-protegez-les-donnees-stockees-sur-une-application#/id/video_Player_1" target="_blank">
            Stoppez le cross-site scripting (XSS)</a></h2>

            <p>
            Les attaques cross-site scripting ou XSS sont faites pour prendre le contrôle de votre navigateur. Un attaquant qui y parvient aura potentiellement accès à vos cookies et à vos sessions qui peuvent contenir des données sensibles ! Ces attaques peuvent également permettre d’apporter des modifications non autorisées à une application web et créer des liens qui vous mèneront vers des sites malveillants !
            </p>

            <p>
            Avec une attaque XSS, un attaquant va essayer de prendre le contrôle de votre navigateur en injectant un script JavaScript dans l'application web. Il pourra l’injecter directement dans un formulaire, mais il peut également l’injecter dans l'URL, l'en-tête HTTP ou d'autres parties du framework utilisé.
            </p>

            <p>
            Contrairement aux injections SQL, il ne s'agit pas de requêtes et de commandes SQL sur une base de données. Une faille XSS s’exécute dans le code de l'application web. 
            </p>

            <p>
            Les attaques XSS ciblent également les cookies, exposant leur contenu dans une fenêtre pop-up. Par exemple, si vous avez envoyé une demande de connexion à un serveur web et qu'il répond par un cookie avec vos identifiants en texte clair, un script XSS s'exécutera sur votre navigateur et affichera une fenêtre pop-up avec vos identifiants qui étaient sur le cookie.
            </p>

            <p>
            Une option consiste à ajouter un flag <code class="line_code">HttpOnly</code> à vos cookies. Ce flag permet d’empêcher un script d'accéder aux cookies. <code class="line_code">HttpOnly</code> est un flag à mettre à  true  dans la plupart des frameworks. Par exemple, Node.js a un module de cookies avec HttpOnly, et un middleware appelé Helmet. 
            </p>

            <p>
            Respectez les bonnes pratiques :
            <ul>
                <li>Appliquez la validation des données d'entrée : pour empêcher les attaques communes, il est possible de blacklister certains caractères comme les balises script.</li>
                <li>Appliquez la transformation des entrées : vous pouvez encoder toutes vos entrées dans une entité de caractères HTML ou du texte pour qu'il n'exécute aucun script. Il existe des fonctions simples et des bibliothèques qui peuvent vous aider à encoder tout votre HTML et JavaScript.</li>
                <li>Configurez vos cookies avec le flag HttpOnly.</li>
            </ul>
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520368-stoppez-le-cross-site-scripting-xss#/id/r-6694073" target="_blank">
            Les vulnérabilités CSRF (Cross-Site Request Forgery)</a></h3>

            <p>
            Un pirate peut créer un lien XSS et le distribuer par le biais de l'ingénierie sociale pour accéder au navigateur d'un utilisateur.
            </p>

            <p>
            Si l'utilisateur clique sur le lien alors qu'une session est encore ouverte sur sa banque, le pirate peut détourner un jeton de session dans le navigateur (en temps réel) pour accéder à cette session.
            </p>

            <p>
            Ces requêtes peuvent également rester inactives jusqu'à ce que l'utilisateur ait créé une session sur son navigateur. 
            </p>

            <p>
            Protégez votre application contre une faille CSRF ?
            <ul>
                <li>Exiger la réauthentification pour toutes les demandes des utilisateurs.</li>
                <li>Utiliser un jeton unique pour chaque demande.</li>
                <li>Utiliser des jetons anti-falsification qui valident le jeton côté client par rapport au jeton côté serveur web.</li>
                <li>Effectuer des recherches sur les bibliothèques CSRF basées sur la sécurité.</li>
            </ul>
            </p>

            <h2 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520493-protegez-votre-code-contre-les-failles-xxe-et-la-deserialisation-non-securisee#/id/video_Player_1" target="_blank">
            Les failles XXE et la désérialisation non sécurisée</a></h2>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520493-protegez-votre-code-contre-les-failles-xxe-et-la-deserialisation-non-securisee#/id/r-6694851" target="_blank">
            Les XML External Entities (XXE)</a></h3>

            <p>
            Pour comprendre ce que sont les XXE, il faut d’abord définir le langage XML. Le langage XML (Extensible Markup Language) a été créé pour stocker, partager et transporter des données entre systèmes. Il est indépendant de la plateforme et du langage. 
            </p>

            <p>
            Une entité externe est une référence XML à une source externe comme un chemin de fichier ou une URL, des images, des références de documents ou des liens de fichiers. Lorsque cette balise d'entité externe est intégrée à une page web, elle sera directement affichée depuis son emplacement externe.
            </p>

            <p>
            Une attaque XXE ou injection XXE est un type d'attaque contre une application qui utilise XML. Cette attaque se produit lorsque l'entrée XML contenant une référence à une entité externe est traitée par un analyseur XML mal configuré. Cette attaque peut entraîner la divulgation de données confidentielles, un déni de service, une falsification de requête côté serveur et d'autres impacts sur le système.
            </p>

            <p>
                Lorsque cette entité est référencée, elle affichera le contenu du fichier.
            </p>

            <p>
            Il existe un moyen de désactiver les entités externes dans tous les langages. Il s'agit généralement d'une balise binaire vrai/faux.
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520493-protegez-votre-code-contre-les-failles-xxe-et-la-deserialisation-non-securisee#/id/r-6694821" target="_blank">
            La désérialisation non sécurisée</a></h3>

            <p>
            Pour cet exemple, nous allons prendre un objet, comme un nom d'utilisateur et un mot de passe, et le mettre dans la base de données. Pour pouvoir être stocké, l'objet devra être converti en flux d'octets pour être transporté à travers le réseau afin d'accéder à la base de données. C'est ce qu'on appelle la sérialisation. Lorsqu'il y a un appel pour ce même objet dans la base de données, il doit être désérialisé (conversion du flux d'octets en objet) avant son utilisation.
            </p>

            <p>
            La désérialisation non sécurisée est une vulnérabilité qui expose les données à une attaque MITM  (homme du milieu), que nous avons vue précédemment, ou à une injection de code qui peut changer l'intégrité de l'objet quand il est désérialisé.
            </p>

            <p>
                Pas très bien expliqué comment s'en protéger. 
            </p>

            <h3 id=<?php echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/6179306-securisez-vos-applications-web-avec-lowasp/6520583-testez-la-securite-de-votre-application#/id/r-6700206" target="_blank">
            Réalisez des tests</a></h3>

            <p>
            Ces tests font partie du processus de développement d’une application web ; cependant, il est nécessaire de les réaliser tout au long du cycle de vie de l’application pour s’assurer que la sécurité est toujours maintenue.
            </p>

            <p>
            Une partie des tests consiste à effectuer des scans de vulnérabilité. Ces scans utilisent des attaques typiques basées sur les dix principaux risques de sécurité de l'OWASP et les vulnérabilités connues des composants du framework utilisé. Ils permettront d’identifier rapidement une vulnérabilité commune ou une mauvaise configuration. 
            </p>

            <p>
            Le fuzzing est une technique utilisée pour tester les zones où les données sont entrées sur votre application web. Il teste les entrées aléatoirement pour s'assurer que les techniques de validation appropriées sont utilisées. Le fuzzing va permettre de tester l'injection SQL et les attaques XSS, par exemple !
            </p>

            <p>
            L'audit de code peut être effectué manuellement ou à l'aide d'un outil automatisé. Il implique souvent une analyse ligne par ligne du code source pour trouver les éléments ou fonctions vulnérables. Ce test garantit que les fonctions vulnérables communes ne sont pas utilisées dans le code. Cela peut permettre de détecter des injections SQL, par exemple. Bien que votre code puisse réussir un test d'analyse de code, il peut toujours être vulnérable au contrôle d'accès, au piratage de session, aux problèmes de configuration dans le framework et aux algorithmes cryptographiques faibles.
            </p>




<?php       
    $content = ob_get_clean(); 

    require_once('structure/layout.php');
?>
