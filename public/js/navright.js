//var titres = document.querySelectorAll("h1 a, h2 a, h3 a, h4 a, h5 a");  // essayer de selectionner avec firstchild

var titres=[];  //Tableau récupération des titres

var nb=document.querySelectorAll("section h1, h2, h3, h4, h5");  		//nombre de titre avec nb.length


for(var i=0; i<nb.length; i++){
		try{
			if(document.getElementById(i).firstChild.nodeName=='#text'){   
				titres[i]=document.getElementById(i);  						// dans <h1>, affiché avec innerHTML
			}else{
				titres[i]=document.getElementById(i).firstElementChild;  	//dans <a>, affiché avec innerHTML
			}
		}
		catch{}
			
}


var typetitre = [] ;	// récupère h1, h2, h3 ou h4 dans un tableau

var titre1=1  ;			//niveaux de titre

var titre2=['I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII','XIII','XIV','XV','XVI','XVII','XVIII','XIX','XX'];

var local2=0;

var titre3=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t'];

var local3=0;

var titre4=['i','ii','iii','iv','v','vi','vii','viii','ix','x','xi','xii','xiii','xiv','xv','xvi','xvii','xviii','xix','xx'];

var local4=0;

var titre5=['u','v','w','x','y','z'];

var local5=0;

var string = '' ;  		//menu navright en HTML



for(var i=0; i<titres.length; i++){									// renvoi h1, ..., hn correspondant au titre
	if(titres[i].nodeName.toLowerCase()=='a'){
		typetitre[i]=titres[i].parentNode.nodeName.toLowerCase();
	}else{
		typetitre[i]=titres[i].nodeName.toLowerCase();
	}
}






function main_titres(i){								// return le titre peu import si il est dans h1 ou a
	if(titres[i].nodeName.toLowerCase()=='a'){
		return titres[i].parentNode.innerHTML;
	}else{
		return titres[i].innerHTML ;
	}
}



for(var i = 0; i<titres.length; i++){			// essayer avec switch  et créer une fonction string(n)
	if (typetitre[i]=='h1'){					// affiche titre1 (1, 2, ... ) devant + change le href
		string += '<' + typetitre[i] + '><a href="#' + i + '">' + titre1 + '. ' + titres[i].innerHTML + '</a></' + typetitre[i] + '><br/>' ;
		document.getElementById(i).innerHTML = titre1 + '. ' + main_titres(i) ; 		//titres[i].parentNode.innerHTML ;
		titre1++;
	} else if (typetitre[i]=='h2'){				// affiche titre2 (I, II, ... ) devant + change le href	
		if(typetitre[i-1]=='h1'){				//permet de repartir à 0 si le chaptitre est clôt
			local2=0;
			string += '<' + typetitre[i] + '><a href="#' + i + '">' + titre2[local2] + '. ' + titres[i].innerHTML + '</' + typetitre[i] + '><br/>' ;	
			document.getElementById(i).innerHTML = titre2[local2] + '. ' +main_titres(i) ;	
			local2++;
		}else{									// incrémente titre2 et affiche les titres
		string += '<' + typetitre[i] + '><a href="#' + i + '">' + titre2[local2] + '. ' + titres[i].innerHTML + '</' + typetitre[i] + '><br/>' ;
		document.getElementById(i).innerHTML = titre2[local2] + '. ' + main_titres(i) ;		
		local2++;
		}
	} else if (typetitre[i]=='h3'){
		if(typetitre[i-1]=='h1'|| typetitre[i-1]=='h2' ){
			local3=0;
			string += '<' + typetitre[i] + '><a href="#' + i + '">' + titre3[local3] + '. ' + titres[i].innerHTML + '</' + typetitre[i] + '><br/>' ;
			document.getElementById(i).innerHTML = titre3[local3] + '. ' + main_titres(i) ;	
			local3++;
		}else{
		string += '<' + typetitre[i] + '><a href="#' + i + '">' + titre3[local3] + '. ' + titres[i].innerHTML + '</' + typetitre[i] + '><br/>' ;
		document.getElementById(i).innerHTML = titre3[local3] + '. ' + main_titres(i) ;	
		local3++;
		}
	} else if (typetitre[i]=='h4'){
		if(typetitre[i-1]=='h1'|| typetitre[i-1]=='h2'|| typetitre[i-1]=='h3'){
			local4=0;
			string += '<' + typetitre[i] + '><a href="#' + i + '">' + titre4[local4] + '. ' + titres[i].innerHTML + '</' + typetitre[i] + '><br/>' ;
			document.getElementById(i).innerHTML = titre4[local4] + '. ' + main_titres(i) ;	
			local4++;
		}else{
		string += '<' + typetitre[i] + '><a href="#' + i + '">' + titre4[local4] + '. ' + titres[i].innerHTML + '</' + typetitre[i] + '><br/>' ;
		document.getElementById(i).innerHTML = titre4[local4] + '. ' + main_titres(i) ;	
		local4++;
		}
	} else if (typetitre[i]=='h5'){
		if(typetitre[i-1]=='h1'|| typetitre[i-1]=='h2'|| typetitre[i-1]=='h3'|| typetitre[i-1]=='h4'){
			local5=0;
			string += '<' + typetitre[i] + '><a href="#' + i + '">' + titre5[local5] + '. ' + titres[i].innerHTML + '</' + typetitre[i] + '><br/>' ;
			document.getElementById(i).innerHTML = titre5[local5] + '. ' + main_titres(i) ;
			local5++;
		}else{
		string += '<' + typetitre[i] + '><a href="#' + i + '">' + titre5[local5] + '. ' + titres[i].innerHTML + '</' + typetitre[i] + '><br/>' ;
		document.getElementById(i).innerHTML = titre5[local5] + '. ' + main_titres(i) ;
		local5++;
		}
	}else {
	string += '<' + typetitre[i] + '><a href="#' + i + '">' + '?' + titres[i].innerHTML + '</' + typetitre[i] + '><br/>' ;
	document.getElementById(i).innerHTML =  '?. ' + main_titres(i) ;
	}
}






document.getElementById('navright').innerHTML = string; // Affiche le menu navright en HTML à l'emplacement id="navright"





