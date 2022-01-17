<?php
namespace MailCarrier;
/**
 * Classe de Email, para facilitar a criação e envio de email's
 * @author David Rusycki
 * @since 16/01/2022
 */
class Email 
{
    
    private string $Destiny;
    private string $Author;
    private string $Message;
    private string $Subject;

    /**
     * Construtor da classe.
     * @param String $sDestino - Email de destino.
     */
    public function __construct(string $sDestino = null)
    {
        if (!empty($sDestino)) {
            $this->setDestiny($sDestino);
        }
    }

    /**
     * Método para testes.
     */
    public function fakeSend($bSucess) {
        return $bSucess;
    }

    /**
     * Envia o email de acordo com os parâmetros.
     */
    public function send() : bool
    {
        return mail($this->getDestiny(), $this->getSubject(), $this->getMessage());    
    }

    /**
     * Get the value of Destiny
     * @return String - Indica o Email de Destiny.
     */ 
    public function getDestiny() : string
    {
        return $this->Destiny;
    }

    /**
     * Set the value of Destiny
     * @param String $Destiny - Indica o email de Destiny. 
     * @return self
     */ 
    public function setDestiny(string $Destiny) : self
    {
        $this->Destiny = $Destiny;

        return $this;
    }

    /**
     * Get the value of Author
     * @return String - Indica o email do author.
     */ 
    public function getAuthor() : string
    {
        if (!isset($this->Author)) {
            $this->Author = 'davidrusyck@gmail.com';
        }
        return $this->Author;
    }

    /**
     * Set the value of Author
     * @param string $Author - Seta o email do Author.
     * @return  self
     */ 
    public function setAuthor(string $Author) : self
    {
        $this->Author = $Author;

        return $this;
    }

    /**
     * Get the value of Message
     * @return String - Retorna a Message.
     */ 
    public function getMessage() : string
    {
        return $this->Message;
    }

    /**
     * Set the value of Message
     * @param String $Message - Message a ser setada.
     * @return  self
     */ 
    public function setMessage(string $Message) : self
    {
        $this->Message = wordwrap($Message, 70, "\n");

        return $this;
    }

    /**
     * Get the value of Subject
     * @return String - Assunto do email.
     */ 
    public function getSubject() : string
    {
        return $this->Subject;
    }

    /**
     * Set the value of Subject
     * @param String $Subject - Assunto a ser setado.
     * @return  self
     */ 
    public function setSubject(string $Subject) : self
    {
        $this->Subject = $Subject;

        return $this;
    }

}
