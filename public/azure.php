<?php $title = 'Microsoft Azure'; ?>
<?php ob_start(); ?>

    	<h1 id=<?php $ini=0; echo $ini ; $ini++ ;?>><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1605060-mettez-en-place-le-css#/id/video_Player_1" target="_blank">Microsoft Azure</a></h1>

        <p>
            Énoncé : <a href="./../documents/Consigne_Projet_Azure.pdf" target="_blank">Projet Azure GRETA</a>.<br/>
            Rapport : <a href="./../documents/Rapport_Projet_Azure.pdf" target="_blank">Rapport Projet Azure</a>.<br/>
        </p>



    	

        <?php 
        
        $content = ob_get_clean(); 

        require_once('structure/layout.php');

        ?>
