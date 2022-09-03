<?php
    include('../model/db.php');
    include('../model/form.php');
    if (isset($_POST['submit']) && $_POST['submit']='Send Data') {
        $data =[
            'name'      => $_POST['name'],
            'symbol'    => $_POST['symbol'],
            'rate'      => $_POST['rate'],
            'short_name'=> $_POST['short_name'],
            'country'   => $_POST['country'],
        ];
        $add_currency = new currency();
        try {
            $add_currency->store($data);
            // var_dump($add_currency);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    if (isset($_REQUEST['action']) && $_REQUEST['action']=='edit') {
        $id = $_REQUEST['id'];

        $edit_currency = new currency();
        $result = $edit_currency->get_currency($id);
        echo $name        = $result[0]['name'];
        echo $symbol      = $result [0]['symbol'];
        echo $rate        = $result [0]['rate'];
        echo $short_name  = $result[0]['short_name'];
        echo $country     = $result [0]['country'];

        header('Location:../index.php?view=edit&id='.$id.'&name='.$name.'&symbol='.$symbol.'&rate='.$rate.'&short_name='.$short_name.'&country='.$country);
    }
    if (isset($_POST['update']) && $_POST['update']== 'Update Data') {
        $id = $_POST['id'];
        // var_dump( )
        $data = [
            'name'       => htmlspecialchars($_POST['name']),
            'symbol'     => htmlspecialchars($_POST['symbol']),
            'rate'       => htmlspecialchars($_POST['rate']),
            'short_name' => htmlspecialchars($_POST['short_name']),
            'country'    => htmlspecialchars($_POST['country'])
        ];
    // var_dump($data);

        try {
            $edit_store = new currency();
            $edit_store->update_store($id,$data);
            header('Location:../index.php?view=table_data');
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
    if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete'){
		$id 	= $_REQUEST['id'];
		$currency_delete = new currency();
		$result = $currency_delete->deleteByPk($id);

		header('location:../index.php?view=table_data');
	}

?>