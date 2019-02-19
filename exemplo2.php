<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
        <!--Como reduzir o código principal? Como mexer com a classe?
    </head>
    <body>
        <?php

            include ("cadeira.php");

            $c1 = new Cadeira("Azul", "5.3", "Ferro", "10", "120", true, "0.4", "0.85" );    //Adiciona um novo objeto (do tipo Cadeira) no sistema (instanciei(?))

            //Aumentando o tamanho!
            $c1->aumentar(0.5);
            
            $c2 = new Cadeira("Preto", "0.9", "Plástico", "5", "40", false,  "0.4", "0.4");
        ?>
        <table border="1">
            <tr>
                <td>Cor</td>
                <td>Peso</td>
                <td>Material</td>
                <td>Durabilidade</td>
                <td>Encosto</td>
                <td>Regulagem miníma</td>
                <td>Regulagem máxima</td>
                <td>Tamanho</td>
                <td>Custo</td>
            </tr>
            <?php
                echo "<tr>
                        <td>$c1->cor</td>
                        <td>$c1->peso</td>
                        <td>$c1->material</td>
                        <td>$c1->durabilidade</td>
                        <td>$c1->encosto</td>
                        <td>$c1->regulagem_minima</td>
                        <td>$c1->regulagem_maxima</td>
                        <td>$c1->tamanho</td>
                        <td>$c1->custo</td>
                    </tr>";
                
                echo "<tr>
                    <td>$c2->cor</td>
                    <td>$c2->peso</td>
                    <td>$c2->material</td>
                    <td>$c2->durabilidade</td>
                    <td>$c2->encosto</td>
                    <td>$c2->regulagem_minima</td>
                    <td>$c2->regulagem_maxima</td>
                    <td>$c2->tamanho</td>
                    <td>$c2->custo</td>
                </tr>";

            ?>
        </table>
    </body>
</html>
