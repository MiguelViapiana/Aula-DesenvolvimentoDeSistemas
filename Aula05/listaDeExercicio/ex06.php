<?php

    $nota_aluno = array(
        array(5, 7, 8, 10),
        array(6,4,7,9),
        array(5,8,9,10),
        array(2,5,1,6),
        array(10,9,8,9),
        array(4,8,6,8),
        array(6,8,6,7),
        array(9,7,8,8),
        array(6,8,10,1),
        array(6,8,8,10),
    );
    $aluno =0;
    $nota=0;

    $media = array();
    $soma=0;

    for($aluno =0; $aluno < count($nota_aluno); $aluno++){
        $soma=0;
        for($nota=0; $nota < 4; $nota++){
            $soma+= $nota_aluno[$aluno][$nota];
        }
        $media[$aluno] = $soma/4;
    }
    echo"Média dos alunos: <br><br>";
    $count=0;
    for($i =0; $i< count($nota_aluno); $i++){
        echo"A média do aluno[".$i+1 ."]: ". $media[$i] . "<br>";
        if($media[$i] >= 7){
            $count++;
        }
    }
    echo "<br>O número de pessoas com média acima de 7 é de: ". $count;

    


?>