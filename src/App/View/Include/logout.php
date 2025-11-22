<?php

/**
 * Logout.
 * Contents of the Logout
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

$token = $insLoginController->encryptData($_SESSION['token']);
$user = $insLoginController->encryptData($_SESSION['usuario']);
?>

<script>
    let btn_exit_system = document.querySelector(".btn-exit-system");
    btn_exit_system.addEventListener('click', function(e) {
        e.preventDefault();
        Swal.fire({
            title: '¿Deseas cerrar esta sesión?',
            text: "Estas a punto de cerrar la sesión y salir del sistema.",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, salir!',
            cancelButtonText: 'No, cancelar'
        }).then((result) => {
            if (result.value) {
                let url = '<?= SERVER_URL . '/endpoint/login-ajax/' ?>';
                let token = '<?= $token ?>';
                let user = '<?= $user ?>';
                let data = new FormData();
                data.append("token", token);
                data.append("usuario", user);

                fetch(url, {
                    method: 'POST',
                    body: data
                })
                .then(res => {
                    return res.json()
                })
                .then(res => {
                    return ajax_alerts(res);
                });
            }
        });
    });
</script>
