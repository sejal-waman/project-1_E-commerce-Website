<!DOCTYPE html>
<html>
<head>
    <title>Product Data</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">  </head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Product Data
                            <a href="" class="btn btn-info btn-sm float-end">Add Student</a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="users-list">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Image</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($detail as $demo)
                                {
                                  echo "<tr>";
                                  echo "<td>".$demo['id']."</td>";
                                  $image=$demo['image_url'];
                                  ?><td><?php
                                  echo '<img src="' . $image . '" alt="Image">';?></td><?php

                                  //echo "<td>".$image."</td>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>