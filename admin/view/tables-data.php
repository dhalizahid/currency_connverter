<?php
    include('model/db.php');
    include('model/form.php');
    $fetch_table = new currency();
    $tables = $fetch_table->get_all();
?>
<div class="col-sm-8">
    <div class="page-header float-right">
        <div class="page-title">
            <ol class="breadcrumb text-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Table</a></li>
                <li class="active">Data table</li>
            </ol>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Symbol</th>
                                    <th>Rate</th>
                                    <th>Short Name</th>
                                    <th>Country</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($tables as $table){ ?>
                                <tr>
                                    <td><?php echo $table['id']; ?></td>
                                    <td><?php echo $table['name']; ?></td>
                                    <td><?php echo $table['symbol']; ?></td>
                                    <td><?php echo $table['rate']; ?></td>
                                    <td><?php echo $table['short_name']; ?></td>
                                    <td><?php echo $table['country']; ?></td>
                                    <td><a class="btn btn-primary btn-sm" href="controller/form.php?action=edit&id=<?php echo $table['id'];?>">Edit</a></td>
                                    <td><a class="btn btn-danger btn-sm" href="controller/form.php?action=delete&id=<?php echo $table['id'];?>">Delete</a></td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->