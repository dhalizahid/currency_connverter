<?php
    // include('model/db.php');
    // include('model/form.php');
    // $fetch_table = new currency();
    // $tables = $fetch_table->get_all();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header"><strong>Currency</strong><small>Add Form</small></div>
                        <div class="card-body card-block">
                            <form action="../controller/form.php"  method="POST" enctype="multipart/form-data">
                                <input type="text" name="id" value="<?php echo $_REQUEST['id'];?>">
                                <div class="form-group">
                                    <label for="name"class=" form-control-label">Name</label>
                                    <input type="text" id="company" name="name" value="<?php echo $_REQUEST['name']; ?>" placeholder="Enter your name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="symbol" class=" form-control-label">Symbol</label>
                                    <input type="text" id="vat" name="symbol" value="<?php echo $_REQUEST['symbol']; ?>" placeholder="Symbol" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="street" class=" form-control-label">Rate</label>
                                    <input type="text" name="rate" value="<?php echo $_REQUEST['rate']; ?>" id="street" placeholder="Rating" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="short_name"class=" form-control-label">Short Name</label>
                                        <input type="text" name="short_name" value="<?php echo $_REQUEST['short_name']; ?>" id="city" placeholder="BDT" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country" class=" form-control-label">Country</label>
                                    <input type="text" name="country" value="<?php echo $_REQUEST['country']; ?>" id="country" placeholder="Country name" class="form-control">
                                </div>
                                <div class="card-footer">
                                    <input type="submit"  name="update" value="Update Data" class="btn btn-primary btn-sm">
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Currency</strong> Converter
                        </div>
                        <div class="card-body card-block">
                            <img src="view/images/banner_image.jpg" alt="side image">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->

    