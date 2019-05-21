<?php
require_once 'model/ContactsLogic.php';

class ContactsController{
	public function __construct(){
			$this->ContactsLogic = new ContactsLogic();
	}
	public function __destruct(){}


    public function handleRequest()
    {
        try {
            $op = isset($_REQUEST['op'])?$_REQUEST['op']:NULL;
            switch ($op) {
                case 'create':
                    if($_POST == NULL){
                        include 'view/create.php';
                    }else {
                        $this->collectCreateContact($_REQUEST);
                    }
                    break;
                case 'reads':
                    $this->collectReadContacts();
                    break;
                case 'read':
                    $this->collectReadContact($_REQUEST['id']);
                    break;
                case 'update':
                    if($_POST == NULL){
                        include 'view/update.php';
                    }else {
                        $this->collectUpdateContact($_REQUEST);
                    }
                    break;
                case 'delete':
                    $this->collectDeleteContact($_REQUEST['id']);
                    break;
                default:
                    $this->collectReadContacts();
                    break;
            }
        } catch (ValidationException $e) {
            $errors = $e->getErrors();

        }

    }
	public function collectCreateContact(){
        $contacts = $this->ContactsLogic->createContact($_REQUEST);
        include 'view/create.php';
    }

    public function collectReadContacts(){
		$contacts = $this->ContactsLogic->readContacts();
		include 'view/reads.php';
		
	}
	public function collectReadContact($id){
        $contacts = $this->ContactsLogic->readContact($id);
        include 'view/contacts.php';
    }
	public function collectUpdateContact(){}
	public function collectDeleteContact($id){
        //echo "Gebruiker is verwijderd";
        $contacts = $this->ContactsLogic->deleteContact($id);
        include 'view/delete.php';

    }



}




?>