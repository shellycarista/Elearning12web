<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Film</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Katalog Movie</h1>
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn btn-primary" data-bs-toggle="film" data-bs-target="#addnew">
              Add New
            </button>
            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
 
                    unset($_SESSION['message']);
                }
            ?>
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Production House</th>
                    <th>Description</th>
                    <th>Release at</th>
                </thead>
                <tbody>
                    <?php
                        include_once('config/database.php');
 
                        $database = new Database();
                        $db = $database->open();
                        try{    
                            $sql = 'SELECT * FROM members';
                            foreach ($db->query($sql) as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['production_house']; ?></td>
                                    <td><?php echo $row['description']; ?></td>
                                    <td><?php echo $row['release at']; ?></td>
                                    <td>
                                        <a href="#edit_<?php echo $row['id']; ?>" class="btn btn-success btn-sm" data-bs-toggle="film"> Edit</a>
                                        <a href="#delete_<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" data-bs-toggle="film"> Delete</a>
                                    </td>
                                    <?php include('update.php'); ?>
                                </tr>
                                <?php 
                            }
                        }
                        catch(PDOException $e){
                            echo "There is some problem in connection: " . $e->getMessage();
                        }
 
                        //close connection
                        $database->close();
 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('add.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>