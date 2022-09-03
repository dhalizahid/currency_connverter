<?php
include('model/class.db.php');
include('model/currency.php');
$currency = new currency();
$countrys =  $currency->get_all();
// var_dump($countrys);

    if (isset($_POST['submit']) && $_POST['submit'] == 'Convert') {
        $from_country_id = $_POST['from_country'];
        $amount          = $_POST['taka'];
        $to_country_id   = $_POST['to_country'];

        $from_country = $currency->get_country($from_country_id);
        // var_dump($from_country);
        $to_country   = $currency->get_country($to_country_id);

        // var_dump($to_country_id);
        $from_country_rating = $from_country[0]['rate'];
        $to_country_rating   = $to_country[0]['rate'];

        $convert_amount = round(($to_country_rating * $amount)/$from_country_rating,2);
        
    }
?>
<link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mx-auto pt-5 ">
                    <div class="main-bg p-5">
                        <div class="inner-div">
                            <div class="row">
                                <div class="col-md-8 left-site mx-auto">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <h2 class="pt-3">Currency Convert</h2>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <!-- <div class="input-group"> -->
                                                <select name="from_country" id="" class="form-select">
                                                    <option value="">Select Country</option>
                                                    <?php foreach ($countrys as $country) { ?>
                                                        <option value="<?php echo $country['id']; ?>">
                                                            <?php echo $country['short_name']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                <!-- </div> -->
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <input type="text" name="taka" placeholder="Amount" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <select name="to_country" id="" class="form-select">
                                                        <option value="">Select Country</option>
                                                        <?php foreach ($countrys as $country) { ?>
                                                            <option value="<?php echo $country['id']; ?>">
                                                                <?php echo $country['short_name']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div class="d-grid gap-1 col-2   px-0 mt-0 btn">
                                                <input type="submit" class="btn btn-primary" name="submit" value="Convert">
                                            </div> -->
                                            <div class="row">
                                                <div class="d-grid gap-1 col-2  ml-3 px-0 mt-0 btn">
                                                    <input type="submit" class="btn btn-primary" name="submit" value="Convert">
                                                </div>
                                                <div class="col-md-4 gap-1 ml-3 offset-md-3" >
                                                    = <?php echo $convert_amount ?>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4  ps-0">
                                    <div class="right-site ">
                                        <img src="img/saide_image.jpg" class="img-fluid banner w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"> -->