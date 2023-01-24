<?php
$array = ['nome' => 'Rebeca', 'idade' => '23', 'profissão' => 'programadora'];

print_r($array);

if($array['idade']>=18){
    echo "<br>A pessoa é maior de idade pois a idade da pessoa é: ".$array['idade'];
}else{
    echo "<br>A pessoa não é maior de idade";
}


?>