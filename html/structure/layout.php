<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/highlightjs/styles/a11y-dark.css" />
        <script src="../js/highlight.pack.js"></script>
		<script>hljs.initHighlightingOnLoad();</script>
        <title><?=$title?></title>
    </head>

    <body>

    	<?php require_once("header.php"); ?>

    	<div id="columns">

    	<div class="column_nav">

    		<?php require_once("nav.php"); ?>

		</div>


		<div class="column_front">
          
       	 	<section id="conteneur">

    			<div class="element_1">

                    <?= $content ?>

    			</div>
			
 	
    		</section>


    		<footer>
				<p>
				Adrien Jacquenet - ad.jacquenet@gmail.com - Le site n'utilise pas de cookies. 
				</p>	
    		</footer>

    	</div>

    	<div class="column_reseaux">
    		<div id="navright">
                
        	</div>

        </div>

    </div>	
		<script src="../js/navright.js"></script>
        <script src="../js/nav.js"></script>
		
    </body>
</html>