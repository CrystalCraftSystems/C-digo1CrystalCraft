<?php


class AtualizarMorador
{
    public function retornar()
    {


        $atualizar = (new MoradoresBanco())->AtualizarMorador($_POST['idMorador'], $_POST['cpfMorador'],$_POST['nomeMorador'],$_POST['idResidenciaMorador']);




        if (empty($atualizar)) {
            die("Não foi possível atualizar o morador");
        }

        $mensagem = '
    <div class="notification is-success">
        <button class="delete"></button>
           Morador atualizado!
    </div>
    <a href="./index.php">Voltar! </a>';
        echo $mensagem;
        }
}