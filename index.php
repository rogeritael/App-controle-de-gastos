<?php require 'assets/layout/header.php'; ?>

<section class="cards-container">

    <!-- card fazer -->
    <div class="card">

        
        <div class="card-header">
            <p><i class="fas fa-thumbtack"></i>Fazer </p>
            <p>22/45</p>
        </div>
        <div class="card-body">

        <?php foreach($tasks as $task){ 
            if($task['task_status'] == 1){
        ?>
            <div class="card-item">
                <h2><?php echo $task['task_name'] ?></h2>
                <p>A expressão Lorem ipsum em design gráfico e 
                    editoração é um texto padrão em latim utilizado na 
                    produção gráfica para preencher os espaços de texto 
                    em publicações para
                </p>
                <div class="card-controls">
                    <i class="fas fa-edit"></i>
                    <a href="kanban.controller.php?action=deletetask&id=<?php echo $task['task_id']; ?>"><i class="fas fa-trash-alt"></i></a>                    
                    <a href="kanban.controller.php?action=moveto&id=<?php echo $task['task_id']; ?>&status=2"><i class="fas fa-chevron-right"></i></a>                    
                    
                </div>
            </div>
        <?php } } ?>
            
        </div>
    </div>
    <!-- /card fazer-->

    <!-- card em andamento -->
    
    <div class="card">
        <div class="card-header">
            <p><i class="fas fa-clock"></i></i>Em andamento </p>
            <p>8/45</p>
        </div>
        <div class="card-body">
            <?php foreach($tasks as $task){ 
                if($task['task_status'] == 2){
            ?>
                <div class="card-item">
                    <h2>Criar header</h2>
                    <p>A expressão Lorem ipsum em design gráfico e 
                        editoração é um texto padrão em latim utilizado na 
                        produção gráfica para preencher os espaços de texto 
                        em publicações para
                    </p>
                    <div class="card-controls">
                    <a href="kanban.controller.php?action=moveto&id=<?php echo $task['task_id']; ?>&status=3"><i class="fas fa-check"></i></a> 
                        
                    </div>
                </div>
            <?php } } ?>
        </div>
    </div>
    <!-- /card em andamento-->


    <!-- card conluído -->
    <div class="card">
        <div class="card-header">
            <p><i class="fas fa-check-circle"></i>Concluído </p>
            <p>15/45</p>
        </div>
        <div class="card-body">
            <?php foreach($tasks as $task){ 
                if($task['task_status'] == 3){
            ?>
            <div class="card-item">
                <h2><?php echo $task['task_name']?></h2>
                <p>A expressão Lorem ipsum em design gráfico e 
                    editoração é um texto padrão em latim utilizado na 
                    produção gráfica para preencher os espaços de texto 
                    em publicações para
                </p>
                <div class="card-controls">
                    <a href="kanban.controller.php?action=deletetask&id=<?php echo $task['task_id']; ?>"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <?php } } ?>

            
        </div>
    </div>
    <!-- /card concluído -->

</section>

<?php require 'assets/layout/footer.php'; ?>