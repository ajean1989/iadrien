<?php $title = 'iadrien - accueil'; ?>
<?php ob_start(); ?>

				<p>
					Bienvenue sur iadrien.fr, vous trouverez ici mes notes personnelles concernant mon auto-formation en développement web dans la section 'notes dev web'. <br/>
					Vous retrouverez aussi mes notes de formation de développeur IA dans la section 'notes IA'.
				</p>

				<p>
					Ce site s'est construit au fil de mes connaissances et a pour objectif initial de mettre en application mes connaissances acquises en développement web et de centraliser mes résumés de cours, principalement tirés d'OpenClassroom et des différentes documentations disponibles.<br/>
					Il n'a pas vocation à être utilisé comme support de formation car il n'est pas nécéssairement tenu à jour et n'a pas fait l'objet de relecture particulière.
				</p>


<?php 
    $content = ob_get_clean(); 

    require_once('structure/layout.php');
?>
