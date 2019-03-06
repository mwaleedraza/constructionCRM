<?php
require_once('include/MVC/View/views/view.list.php');
class ContactsViewList extends ViewList {

    function listViewProcess() {
        global $current_user;
        $this->params['custom_where'] = '';

        parent::listViewProcess();
}

}