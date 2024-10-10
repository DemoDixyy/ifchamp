<?php
    echo "<h1 class='text-center'>Lista de Campeonatos do Sistema</h1>";
    $listarCampeonatos = "SELECT * FROM Campeonatos"; //Cria a query para buscar Campeonatos

    include "conexaoBD.php"; //Inclui o arquivo de conexão com o BD
    $res = mysqli_query($conn, $listarCampeonatos) or die("Erro ao tentar listar Campeonatos!") . mysqli_error($conn);

    $totalCampeonatos = mysqli_num_rows($res); //Busca o total de registros retornados pela query

    echo "<div class='alert alert-info text-center'>Há $totalCampeonatos Campeonatos cadastrados!</div>";

    //Monta a tabela para exibir os registros
    while($registro = mysqli_fetch_assoc($res)){
        //Armazena em variáveis PHP os registros encontrados na tabela
        $idCampeonato           = $registro["idCampeonato"];
        $fotoCampeonato         = $registro["fotoCampeonato"];
        $nomeCampeonato         = $registro["nomeCampeonato"];
        $descricaoCampeonato    = $registro["descricaoCampeonato"];
        $categoriaCampeonato    = $registro["categoriaCampeonato"];

        //Exibe os registros encontrados
        echo "
            <!-- Início da primeira coluna da GRID -->
            <div class='col-sm-3'>
                <!-- Início do Card para exibição do produto-->
                <div class='card' style='width:100%; height:100%;'>
                    <img class='card-img-top' src='$fotoCampeonato' alt='Card image'>
                    <div class='card-body'>
                        <h4 class='card-title'>$nomeCampeonato</h4>
                        <p class='card-text'>$descricaoCampeonato</p>
                        <p class='card-text'>$categoriaCampeonato</p>
                        <a href='#' class='btn btn-primary'>Ver Detalhes</a>
                    </div>
                </div>
            </div>
        ";
    }
    echo "</tbody>";
echo "</table>";


?>