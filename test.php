<?php


    function bowling($nbquillepartours, $score = 0){
        $scoretotal=0;
        $scorePerFrame=[null,null,null,null,null,null,null,null,null,null];
        	for ($nbfram=0; $nbfram < count($nbquillepartours); $nbfram+=2) { 
        		$frame=$nbquillepartours[$nbfram]+$nbquillepartours[$nbfram+1];
        		if ($frame==10){
        			if($nbquillepartours[$nbfram]==10){
        			$frame+=$nbquillepartours[$nbfram+2]+$nbquillepartours[$nbfram+3];
        		
        		}else{
        			$frame+=$nbquillepartours[$nbfram+2];
        		}
        	}
        		array_push($scorePerFrame, $frame);
        
        	}
        	

            foreach ($scorePerFrame as $value) {
                $scoretotal+=$value;
            }
        return $scoretotal;
    }
////////////////////////////
function remplirTableau($quille, $tours ,$tableau=[]){
	
		for ($nbtours=0; $nbtours < $tours; $nbtours++) { 
			array_push($tableau, $quille);
		}
		return $tableau;
}

var_dump(remplirTableau(1,18 ,remplirTableau(5,2)));

if (function_exists('bowling')){
	echo 'fonction bowling existe';

	if(bowling(remplirTableau(0,20))==0){
		echo 'test 2 ok';


		if(bowling(remplirTableau(1,20))==20){
			echo 'test 3 (tt1) ok';
			
			if(bowling(remplirTableau(1,18 ,remplirTableau(5,2)))==29){
				echo 'test spare ok';


					if(bowling(remplirTableau(1,16 ,remplirTableau(5,4)))==42){
				echo 'test dbl spare ok';



					if(bowling(remplirTableau(1,18,remplirTableau(0,1 ,remplirTableau(10,1))))==30){
				echo 'test strike ok';
					}else{
						echo '<br> test strike non pas égal à 30 il est de' ;
						echo bowling(remplirTableau(1,18,remplirTableau(0,1 ,remplirTableau(10,1))));
					}








				}else{
				echo'test double spate fail';
				}







			}else{
				echo '<br/>test spare non validé';
			}




		}else{
			echo 'test 3 (tt1) pas ok';
		}




	}else{
		echo 'test 2 (calcul pour que score nul) pas ok';
	}

}else{
	echo "la fonction bowling n'existe pas";
}
















// $nbquilles=array();
// for ($i=0; $i < 20; $i++) { 
// 	array_push($nbquilles, 0);

// }
// var_dump($nbquilles);


// 	foreach ($scorefictif as $key => $value){
// 		$valuefinale.=$value;
	
// 		if (scorebowling($score,$scorefictif)==$valuefinale){
// 			echo 'score calculé bon';

// 		}else{
// 			echo 'le score final est erronné';
// 		}
// }






// function scoreToursistrike('0', '10');

// 	if(scoreToursistrike()=='strike'){
// 		echo 'test ok';
// 	}else{
// 		echo 'strike non detecté par fonction strike';
// 	}

?>