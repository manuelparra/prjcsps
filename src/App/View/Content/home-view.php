<?php

/**
 * Content Home View.
 * Content of the Home page view.
 * PHP version 8.3.24
 *
 * @category View
 * @package  ViewContent
 * @author   Manuel Parra <manuelparra@live.com.ar>
 * @license  MIT <https://mit.org>
 * @version  CVS: <1.0.0>
 * @link     manuelparra.dev
 */

namespace App\View\Content;

use App\Controller\{
    ClientController,
    ItemController,
    BusinessController,
    UserController
};

?>

<!-- Page header -->
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fab fa-dashcube fa-fw"></i>
        &nbsp;DASHBOARD
    </h3>
    <p class="text-justify">
        Sistema para la gestión de control de procesos,
        análisis de laboratorio,
        emisión de certificados de calidad y
        gestión de clientes para la producción industrial de sal.
    </p>
</div>

<!-- Content -->
<div class="full-box tile-container">
    <?php
    $instItemController = new ItemController();
    $query = $instItemController->queryDataItemController("Count");
    $word = $query->rowCount() > 0 ? "Registros" : "Registro";
    ?>

    <a href="<?= SERVER_URL . '/process-control/' ?>" class="tile">
        <div class="tile-tittle">PROCESOS</div>
        <div class="tile-icon">
            <i
                class="fas fa-users fa-fw"
                data-toggle="tooltip"
                data-placement="top"
                title="Control de Procesos"
            ></i>
            <p>
                <?php
                echo $query->rowCount();
                ?>&nbsp;<?php echo $word; ?>
            </p>
        </div>
    </a>

    <?php
    $instItemController = new ItemController();
    $query = $instItemController->queryDataItemController("Count");
    $word = $query->rowCount() > 0 ? "Registros" : "Registro";
    ?>

    <a href="<?= SERVER_URL . '/laboratory-analysis/' ?>" class="tile">
        <div class="tile-tittle">LABORATORIO</div>
        <div class="tile-icon">
            <i
                class="fas fa-bong fa-fw"
                data-toggle="tooltip"
                data-placement="top"
                title="Análisis de Laboratorio"
            ></i>
            <p>
                <?php
                echo $query->rowCount();
                ?>&nbsp;<?php echo $word; ?>
            </p>
        </div>
    </a>

    <?php
    $instItemController = new ItemController();
    $query = $instItemController->queryDataItemController("Count");
    $word = $query->rowCount() > 0 ? "Registros" : "Registro";
    ?>

    <a href="<?= SERVER_URL . '/quality-certificates/' ?>" class="tile">
        <div class="tile-tittle">CERTIFICADOS</div>
        <div class="tile-icon">
            <i
                class="fas fa-file fa-fw"
                data-toggle="tooltip"
                data-placement="top"
                title="Certificados de Calidad"
            ></i>
            <p>
                <?php
                echo $query->rowCount();
                ?>&nbsp;<?php echo $word; ?>
            </p>
        </div>
    </a>

    <?php
    $instClientController = new ClientController();
    $query = $instClientController->queryDataClientController("Count");
    $word = $query->rowCount() > 0 ? "Registros" : "Registro";
    ?>

    <a href="<?= SERVER_URL . '/client-list/' ?>" class="tile">
        <div class="tile-tittle">Clientes</div>
        <div class="tile-icon">
            <i
                class="fas fa-user fa-fw"
                data-toggle="tooltip"
                data-placement="top"
                title="Clientes"
            ></i>
            <p>
                <?php
                echo $query->rowCount();
                ?>&nbsp;<?php echo $word; ?>
            </p>
        </div>
    </a>

    <?php
    if ($_SESSION['privilegio'] == 1) {
        $insUserController = new UserController();

        $query = $insUserController->queryDataUserController("Count");
        $word = $query->rowCount() > 0 ? "Registros" : "Registro";
        ?>

        <a href="<?= SERVER_URL . '/user-list/' ?>" class="tile">
            <div class="tile-tittle">Usuarios</div>
            <div class="tile-icon">
                <i class="fas fa-user-secret fa-fw"></i>
                <p>
                    <?php
                    echo $query->rowCount();
                    ?>&nbsp;<?php echo $word; ?>
                </p>
            </div>
        </a>

        <?php
        $instBusinessController = new BusinessController();
        $query = $instBusinessController->queryBusinessInformationController();
        ?>

        <a href="<?= SERVER_URL . '/company/' ?>" class="tile">
            <div class="tile-tittle">Empresa</div>
            <div class="tile-icon">
                <i class="fas fa-store-alt fa-fw"></i>
                <p><?php echo $query->rowCount(); ?> Registro</p>
            </div>
        </a>
        <?php
    }
    ?>
</div>
