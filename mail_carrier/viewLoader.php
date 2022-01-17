<?php
namespace MailCarrier;
/**
 * ViewLoader do sistema.
 * @author David Rusycki
 * @since 16/01/2022
 */
class ViewLoader {

    /**
     * Carrega o Menu
     */
    public function loadMenu() : void {
        require_once('./mail_carrier/view/viewMenu.php');
    }

}
?>