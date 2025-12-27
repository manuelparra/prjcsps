<?php

/**
 * NavLateral
 * Contents of the NavLateral
 * PHP version 8.3.24
 *
 * @category View
 * @package  ViewLayout
 * @author   Manuel Parra <manuelparra@live.com.ar>
 * @license  MIT <https://mit.org>
 * @version  CVS: <1.0.0>
 * @link     manuelparra.dev
 */

namespace App\View\Include;

?>

<section class="full-box nav-lateral">
    <div class="full-box nav-lateral-bg show-nav-lateral"></div>
    <div class="full-box nav-lateral-content">
        <nav class="full-box nav-lateral-menu">
            <ul>
                <li>
                    <a href="<?= SERVER_URL . '/home/' ?>">
                        <i class="fab fa-dashcube fa-fw"></i>
                        &nbsp;Dashboard
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu">
                        <i class="fas fa-users fa-fw"></i>
                        &nbsp;Control de procesos
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= SERVER_URL . '/client-new/' ?>">
                                <i class="fas fa-plus fa-fw"></i>
                                &nbsp;Agregar registro
                            </a>
                        </li>
                        <li>
                            <a href="<?= SERVER_URL . '/client-list/' ?>">
                                <i class="fas fa-clipboard-list fa-fw"></i>
                                &nbsp;Lista de registros
                            </a>
                        </li>
                        <li>
                            <a href="<?= SERVER_URL . '/client-search/' ?>">
                                <i class="fas fa-search fa-fw"></i>
                                &nbsp;Buscar registro
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu">
                        <i class="fas fa-bong fa-fw"></i>
                        &nbsp;Análisis de laboratorio
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= SERVER_URL . '/item-new/' ?>">
                                <i class="fas fa-plus fa-fw"></i>
                                &nbsp;Nuevo análisis
                            </a>
                        </li>
                        <li>
                            <a href="<?= SERVER_URL . '/item-list/' ?>">
                                <i class="fas fa-clipboard-list fa-fw"></i>
                                &nbsp;Listado de análisis
                            </a>
                        </li>
                        <li>
                            <a href="<?= SERVER_URL . '/item-search/' ?>">
                                <i class="fas fa-search fa-fw"></i>
                                &nbsp;Buscar análisis
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-btn-submenu">
                        <i class="fas fa-file fa-fw"></i>
                        &nbsp;Certificados de calidad
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= SERVER_URL . '/loan-new/' ?>">
                                <i class="fas fa-plus fa-fw"></i>
                                &nbsp;Nuevo Certifiacado
                            </a>
                        </li>
                        <li>
                            <a href="<?= SERVER_URL . '/loan-list/' ?>">
                                <i class="fas fa-clipboard-list fa-fw"></i>
                                &nbsp;Listado de Certificados
                            </a>
                        </li>
                        <li>
                            <a href="<?= SERVER_URL . '/loan-search/' ?>">
                                <i class="fas fa-search-dollar fa-fw"></i>
                                &nbsp;Buscar Certificados
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-btn-submenu">
                        <i class="fas fa-user fa-fw"></i>
                        &nbsp;Clientes
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= SERVER_URL . '/loan-new/' ?>">
                                <i class="fas fa-plus fa-fw"></i>
                                &nbsp;Nuevo Cliente
                            </a>
                        </li>
                        <li>
                            <a href="<?= SERVER_URL . '/loan-list/' ?>">
                                <i class="fas fa-user fa-fw"></i>
                                &nbsp;Listado de Cilentes
                            </a>
                        </li>
                        <li>
                            <a href="<?= SERVER_URL . '/loan-search/' ?>">
                                <i class="fas fa-search fa-fw"></i>
                                &nbsp;Buscar Cliente
                            </a>
                        </li>
                    </ul>
                </li>
                <?php
                if ($_SESSION['privilegio'] == 1) {
                    ?>
                    <li>
                        <a href="#" class="nav-btn-submenu">
                            <i class="fas  fa-user-secret fa-fw"></i>
                            &nbsp;Usuarios
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="<?= SERVER_URL . '/user-new/' ?>">
                                    <i class="fas fa-plus fa-fw"></i>
                                    &nbsp;Nuevo usuario
                                </a>
                            </li>
                            <li>
                                <a href="<?= SERVER_URL . '/user-list/' ?>">
                                    <i class="fas fa-clipboard-list fa-fw"></i>
                                    &nbsp;Lista de usuarios
                                </a>
                            </li>
                            <li>
                                <a href="<?= SERVER_URL . '/user-search/' ?>">
                                    <i class="fas fa-search fa-fw"></i>
                                    &nbsp;Buscar usuario
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= SERVER_URL . '/company/' ?>">
                            <i class="fas fa-store-alt fa-fw"></i>
                            &nbsp;Empresa
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </nav>
    </div>
</section>
