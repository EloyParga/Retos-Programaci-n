
<?php
    // Funcion
    function esAnagrama($palabra1, $palabra2){
        //Si las palabras son la mismo no son ANAGRAMAS
        if(strtolower($palabra1) === strtolower($palabra2)){
            return false;
        }

        $array1 = str_split(strtolower($palabra1));
        $array2 = str_split(strtolower($palabra2));

        sort($array1);
        sort($array2);

        return $array1 === $array2;
    }

    var_dump(esAnagrama("amor", "roma"));
    var_dump(esAnagrama("emisora", "reiamos"));
    var_dump(esAnagrama("amor", "amor"));
    var_dump(esAnagrama("Jugar", "jubilo"));
    var_dump(esAnagrama("amor", "ROMA"));
    var_dump(esAnagrama("amor", "Amores"));
?>