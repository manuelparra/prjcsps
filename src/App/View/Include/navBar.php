<?php

/**
 * NavBar.
 * Contents of the NavBar
 * PHP version 8.2.0
 *
 * @category View
 * @package  ViewLayout
 * @author   Manuel Parra <manuelparra@live.com.ar>
 * @license  MIT <https://mit.org>
 * @version  CVS: <1.0.0>
 * @link     manuelparra.dev
 */

namespace App\View\Include;

use App\Controller\LoginController;

if (!isset($insLoginController)) {
    $insLoginController = new LoginController();
}

$id = $insLoginController->encryptData($_SESSION['id'])
?>

<nav class="full-box navbar-info">
    <a href="#" class="float-left show-nav-lateral">
        <i class="fas fa-exchange-alt"></i>
    </a>
    <a href="<?= SERVER_URL . '/user-update/' . $id  . '/' ?>">
        <i class="fas fa-user-cog"></i>
    </a>
    <a href="#" class="btn-exit-system">
        <i class="fas fa-power-off"></i>
    </a>
</nav>
