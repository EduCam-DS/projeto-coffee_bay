<?php
// require_once('header.php');

        $json = file_get_contents('membros.json');
        $jsonMembros = json_decode($json, true);
        // var_dump ($jsonMembros);

        if (isset($jsonMembros[0]['nome'])) {
            foreach ($jsonMembros as $key=>$value) {
                var_dump($value['nome']);
            }
        }
        

// if (isset($jsonMembros['nome'])){
//     foreach ($jsonMembros as $value){
//         if('Edu' == $value["nome"]){
//         echo "existe";

//         }
//     }
    // echo "teste";
// }

// var_dump($retorno);


        // 
        
    //    function teste(){

       
    //         $json = file_get_contents('membros.json');
    //         $jsonMembros = json_decode($json, true);
    
    //         foreach ($jsonMembros as $value){
    //             if('Edu' == $value){
    //                 $existeMembro = true;
    //             }

    //             var_dump ($value);
    //         }
    
    //         // return $existeMembro;

    //     } 

    //     teste();

?>