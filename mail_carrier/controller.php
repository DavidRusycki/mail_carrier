<?php
namespace MailCarrier;
/**
 * Classe de controlador do sistema.
 * @author David Rusycki
 * @since 16/01/2022
 */
class Controller  
{
    /**
     * Inicia o sistema.
     */
    public function init() {
        $this->iniciaSessao();
        $this->processaDados();
    }

    /**
     * Valida os dados da requisição e redireciona para o processamento.
     */
    private function processaDados() {
        if (isset($_POST['send'])) {
            $this->enviaEmail();
        }
        else {
            $this->carregaMenu();
        }
    }

    /**
     * Realiza o envio do Email.
     */
    private function enviaEmail() {
        $oEmail = new Email();
        $oEmail->setDestiny($_POST['destino'])->setSubject($_POST['assunto'])->setMessage($_POST['mensagem']);
        if ($oEmail->send()) {
            $_SESSION['sucess'] = true;
        }
        else {
            $_SESSION['sucess'] = false;
        }
        header('Location: index.php');
    }

    /**
     * Carrega o menu do sistema.
     */
    private function carregaMenu() {
        $oLoader = new \MailCarrier\ViewLoader();
        $oLoader->loadMenu();
    }

    /**
     * Inicia sessão caso necessário.
     */
    private function iniciaSessao() {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

}
