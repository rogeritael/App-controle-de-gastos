<?php require 'assets/layout/header.php'; ?>

<section class="cards-container">

    <?php echo $pId ?>
    <div class="task-register">
        <form action="kanban.controller.php?action=task-register" method="post">
            <div class="input-task">
                <label for="task"></label>
                <input name="task" type="text" placeholder="Digite a tarefa">
            </div>

            <input type="hidden" name="id" value="<?php $pId ?>">

            <label for="task-description"></label>
            <textarea name="task-description" placeholder="Escreva uma descrição"></textarea>
            
            <input type="submit" value="Cadastrar">
        </form>
    </div>

</section>

<?php require 'assets/layout/footer.php'; ?>