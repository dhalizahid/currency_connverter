<?php
    include('view/sidebar.php');
    include('view/header.php');
    include('view/sucessful.php');

    $view = $_REQUEST['view']??'';

    switch ($view) {
        case 'form':
            include('view/form.php');
            break;
        case 'table_data':
            include('view/tables-data.php');
            break;
        case 'edit':
            include('view/edit.php');
            break;
        
        default:
        include('view/home.php');
            break;
    }
    
    include('view/footer.php');
?>