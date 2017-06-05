<?php

require_once 'model/class.ContactsService.php';

class ContactsController
{
    // werkt het om $_GET af te vangen met een ahref in een form als je meerdere $_GET levels kan hebben? of is dat niet het beste/kan dat niet eens?
    // heb je ook een soort baseController voor models? waar je bijv de database verbinding in kan zetten, of doe je dat in index.php
    // waar is die base controller?
    // PHP.ini in phpstorm ergens, error reporting aanzetten

    private $contactsService = NULL;

    public function __construct() {
        $this->contactsService = new ContactsService('192.168.56.1','mvc','mainuser','dev01dev');
    }

    public function handleRequest() {
        $op = isset($_POST['op'])?$_POST['op']:NULL;
        try {

            if (!$op || $op == 'list') {
                $this->readAllContactData();
            } elseif ($op == 'new') {
                $this->contactsService->createContactData();
            } elseif ($op == 'delete') {
                $this->contactsService->deleteContactData();
            } elseif ($op == 'show') {
                $this->contactsService->readContactData();
            } else {
                $this->showError('Page not found', 'Page for operation'.$op.' was not found!');
            }
        } catch (Exception $e) {
            // later pas showerror methode aanmaken waar je die parameter meegeeft ofzo
            $this->showError('Application error', $e->getMessage());
        }
    }

    public function readAllContactData() {
        $orderby = isset($_GET['orderby'])?$_GET['orderby']:NULL;
        $contacts = $this->contactsService->readContacts($orderby);
        $table = $this->contactsService->createContactTable($contacts);
        $selectBox = $this->contactsService->selectBox($contacts, 'Name');
        include 'view/contacts.php';
    }












//    public function readData() {
//        $id = isset($_GET['id'])?$_GET['id']:NULL;
//        if (!$id) {
//            throw new Exception('Internal error.');
//        }
//        $contact = $this->contactsService->readContact($id);
//
//        include '../view/contacts.php';
//    }

}
