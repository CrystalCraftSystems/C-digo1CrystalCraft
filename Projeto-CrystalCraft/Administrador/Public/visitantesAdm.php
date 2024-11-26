<?php require __DIR__ . "/cabecalhoAdm.php";
var_dump($visitantes); ?>

<style>
    h1 {
        font-family: 'Candara';
    }

    td{
        text-align: center;
    }
</style>

<section class="section">
    <div class="container">
    <h1 class="title has-text-centered"><strong>Listagem de visitantes<strong></h1><br>
        <table class="table is-fullwidth is-striped">
            <thead>
                <tr>
                <th>ID Visitante</th>
                <th>Nome</th>
                    <th>Descrição</th>
                    <th>ID Morador visitado</th>
                 
                </tr>
            </thead>
            <tbody>
          
                <?php if (isset($visitantes)): ?>
                    
                    <?php foreach ($visitantes as $visitante): ?>
                        <tr>

                        <td><?php echo htmlspecialchars($visitante['visitante']); ?></td>
                        <td><?php echo htmlspecialchars($visitante['NOMEVISITANTE']); ?></td>
                        <td><?php echo htmlspecialchars($visitante['DESCRICAOVISITANTE']); ?></td>
                        <td><?php echo htmlspecialchars($visitante['IDMORADOR']); ?></td>     
                           
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="has-text-centered"><strong>Base de dados vazia!</strong></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

<br>
<br>


<div class="box">
<h1 class="title has-text-centered"><strong>Cadastrar visitantes<strong></h1>
    <form action="./index.php?acao=cad-visitante" method="post">
    <div class="field">

    <label class="label">ID do visitante</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o ID" name="idVisitante" required>
    </div>
</div>

<div class="field">
    <label class="label">Nome</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o nome do visitante" name="nomeVisitante" required>
    </div>
</div>

<div class="field">
    <label class="label">Descrição</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite a descrição do visitante" name="descricaoVisitante" required>
    </div>
</div>

<div class="field">
    <label class="label">ID do morador visitado</label>
    <div class="control">
        <input class="input" type="text" placeholder="Digite o ID do morador visitado" name="idMoradorVisitante" >
    </div>
</div>

    <br>


<div class="field">
    <div class="control">
        <input type="submit" class="button is-black is-fullwidth" value="Confirmar">
    </div>
</div>
</div>

    </form>

    <?php require __DIR__."/../../footer.php"; ?>