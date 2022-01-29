<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas array</title>
</head>

<body>

    <?php
       //verifica se o parametro e um array
       
        $array1 = 'String';
        $retorno = is_array ($array1);

        if($retorno){
            echo 'É um Array';
        }else{
            echo 'Não é um Array';
        }

          echo '<hr>';

          $array = [1=> 'A', 2=> 'B',18=> 'C'];
          echo '<pre>';
           print_r($array);
          echo '<pre>';
        //array_keys mostra os indicies
          $chaves_array = array_keys($array);   
          echo '<pre>';
           print_r($chaves_array);
          echo '<pre>';
          
            echo 'hr>';
            
            
          $array = array ('not','teclado','mouse','azus','as','b');

           echo '<pre>';
           print_r($array);
          echo '<pre>';
   //sort - deixa em ordem alfabetica
          sort($array);
       echo '<br>';
          echo '<pre>';
          print_r($array);
         echo '<pre>';

       
         echo '<br>';
          echo '<pre>';
          print_r($array);
         echo '<pre>';
   //asort -preserva os indicies
          asort($array);
          echo '<br>';
          echo '<pre>';
          print_r($array);
         echo '<pre>';

         // array_merge = une os arrays em um so
         $array = ['osx', 'linux'];
         $array2 = ['windo'];
         $array3 =['solaris'];
   
        $novo_array = array_merge($array,$array2,$array3);
        echo '<pre>';
        print_r($novo_array);
       echo '<pre>'; 

       $string ='12/01/2021';
         $retorno = explode('/',$string);
     echo '<pre>';
        print_r($retorno);
       echo '<pre>'; 
     ?>
    
</body>
</html>
