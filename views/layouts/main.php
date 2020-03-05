<!DOCTYPE html>
<html lang="pt" dir="ltr">

<!-- head - CSS Styles -->
<?php require __DIR__ . '/partials/head.php' ?>



<!-- body - SECÇÃO PRINCIPAL -->
<body>

<div class="container-fluid">
    <div class="row " >

        <!-- Menu principal - Esquerda -->
        <div class="col col-2 main-menu bg-white shadow"  style="overflow:hidden">
            <?php require __DIR__ . '/partials/main_menu.php' ?>
        </div>

        <!-- Conteudo Principal -->
        <div class="col col-8 col-sm-8 col-md-8 col-lg-8" >
            <?php require __DIR__ . '/testcontent.php' ?>
        </div>


        <!--Barra Direita (notificações) -->
        <div class="col col-2 bg-white sidebar shadow" style="overflow:hidden">
            <?php require __DIR__ . '/partials/sidebar.php' ?>
        </div>

    </div>
</div>

</body>

<!-- footer - JS Scripts -->
<?php require __DIR__ . '/partials/footer.php' ?>

</html>
