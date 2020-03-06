<?php
    use yii\helpers\Html;
?>
<div class="container-fluid pt-3">
    <div class="row my-2">
        <div class="col p-2 text-primary text-center" style="font-size:24px;">
            LYCA.
        </div>
    </div>
</div>
<nav class="navbar navbar-inverse fixed-left main-menu">

    <div class="container-fluid">

        <div class="row">
            <ul class="navbar-nav">

                <!-- Dashboard -->
                <li class="nav-item p-1">
                    <?= Html::a('<i class="fas fa-tachometer-alt mr-2"></i>Dashboard', ['site/index'], ['class' => 'nav-link']) ?>
                </li>


                <li class="divider"></li>

                <!-- Clientes -->
                <li class="nav-item p-1">
                    <?= Html::a('<i class="fas fa-tachometer-alt mr-2"></i>Clientes', ['cliente/index'], ['class' => 'nav-link']) ?>
                </li>

                <!-- Universidades -->
                <li class="nav-item p-1">
                    <?= Html::a('<i class="fas fa-tachometer-alt mr-2"></i>Universidades', ['universidade/index'], ['class' => 'nav-link']) ?>
                </li>

                <!-- Agentes -->
                <li class="nav-item p-1">
                    <?= Html::a('<i class="fas fa-tachometer-alt mr-2"></i>Agentes', ['agente/index'], ['class' => 'nav-link']) ?>
                </li>


                <li class="divider"></li>


                <!-- Listagens -->
                <li class="nav-item p-1">
                    <a class="nav-link" href="#"><i class="fas fa-tachometer-alt mr-2"></i>Listagens  ✖️</a>
                </li>


                <!-- Relatório de contas -->
                <li class="nav-item p-1">
                    <a class="nav-link" href="#"><i class="fas fa-tachometer-alt mr-2"></i>Relatórios  ✖️</a>
                </li>

                <!-- Biblioteca -->
                <li class="nav-item p-1">
                    <?= Html::a('<i class="fas fa-tachometer-alt mr-2"></i>Bibliotecas', ['biblioteca/index'], ['class' => 'nav-link']) ?>
                </li>

                <!-- Lista telefónica -->
                <li class="nav-item p-1">
                    <?= Html::a('<i class="fas fa-tachometer-alt mr-2"></i>Lista Telefónica', ['contacto/index'], ['class' => 'nav-link']) ?>
                </li>

                <!-- Agenda -->
                <li class="nav-item p-1">
                    <?= Html::a('<i class="fas fa-tachometer-alt mr-2"></i>Agenda', ['agenda/index'], ['class' => 'nav-link']) ?>
                </li>

                <!-- Forncecedores -->
                <li class="nav-item p-1">
                    <?= Html::a('<i class="fas fa-tachometer-alt mr-2"></i>Fornecedores', ['fornecedor/index'], ['class' => 'nav-link']) ?>
                </li>


                <!-- Utilizadores -->
                <li class="nav-item p-1">
                    <a class="nav-link" href="#"><i class="fas fa-tachometer-alt mr-2"></i>Utilizadores  ✖️</a>
                </li>


                <li class="divider"></li>

            </ul>

        </div>

    </div>

</nav>


<!-- Identificação do utilizador -->
<div class="container-fluid mb-5 mt-3 bg-light p-3 rounded">
    <div class="row">
        <div class="col col-2 text-center">
           
                <!-- <img src="user_photo.png" style="width:100%"> -->
                <i class="fas fa-user " style="font-size:20px;margin-top:7px"></i>

        </div>
        <div class="col col-10 ">
            <div style="font-size:14px; font-weight:700"><?= Yii::$app->user->identity->username;?></div>
            <div style="font-size:12px; font-weight:700" class="text-muted">ADMINISTRADOR</div>
        </div>
    </div>
</div>