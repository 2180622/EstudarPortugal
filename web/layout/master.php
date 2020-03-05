<!DOCTYPE html>
<html lang="pt" dir="ltr">

<!-- head - CSS Styles -->
<?php require __DIR__ . '/partials/head.php' ?>



<!-- body - SECÇÃO PRINCIPAL -->
<body>

<div class="container-fluid h-100">
    <div class="row h-100">

        <!-- Menu principal - Esquerda -->
        <div class="col h-100 shadow side-bar">
            <?php require __DIR__ . '/partials/main_menu.php' ?>
        </div>

        
        <!-- Conteudo Principal -->
        <div class="col col-8 h-100"><?php include __DIR__ . 'dashboard.php' ?></div>


        <!-- Barra Direita (notificações) -->
        <div class="col h-100 side-bar shadow">
            <?php require __DIR__ . '/partials/sidebar.php' ?>
        </div>

    </div>
</div>


</body>

<!-- footer - JS Scripts -->
<?php require __DIR__ . '/partials/footer.php' ?>

</html>
