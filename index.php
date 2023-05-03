<?php
include("config/config.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Product Filter</title>
   <!---bootstrap--->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src ="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src ="js/bootstrap.min.js"></script>
    <script type="text/javascript" src ="js/jquery.min.js"></script>

</head>
<body>
    <h3 class="text-center text-light bg-info p-2">Advanced Product Filter </h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
            <h5>Filter Product</h5>
            <hr>
            <h6 class="text-info">Select Brand</h6>
            <ul class="list-group">
                <?php
                 $sql = "SELECT DISTINCT brand FROM products ORDER BY brand";
                 $result=$conn->query($sql);
                 while($row=$result->fetch_assoc()){                    
                ?>
                <li class="list-group-item">
                    <div class="form-check">
                        <label for="" class="form-check-label"></label>
                        <input type="checkbox" class="form-check-input product_check" value="<?= $row['brand']; ?>" id ="brand"><?= $row['brand'];?>
                    </div>
                </li>
                <?php }?>
            </ul>
           
            <hr>
            <h6 class="text-info">Select RAM</h6>
            <ul class="list-group">
                <?php
                 $sql = "SELECT DISTINCT ram FROM products ORDER BY brand";
                 $result=$conn->query($sql);
                 while($row=$result->fetch_assoc()){                    
                ?>
                <li class="list-group-item">
                    <div class="form-check">
                        <label for="" class="form-check-label"></label>
                        <input type="checkbox" class="form-check-input product_check" value="<?= $row['ram']; ?>" id ="ram"><?= $row['ram'];?>
                    </div>
                </li>
                <?php }?>
            </ul>
           
            <hr>
            <h6 class="text-info">Select HDD</h6>
            <ul class="list-group">
                <?php
                 $sql = "SELECT DISTINCT hdd FROM products ORDER BY hdd";
                 $result=$conn->query($sql);
                 while($row=$result->fetch_assoc()){                    
                ?>
                <li class="list-group-item">
                    <div class="form-check">
                        <label for="" class="form-check-label"></label>
                        <input type="checkbox" class="form-check-input product_check" value="<?= $row['hdd']; ?>" id ="hdd"><?= $row['hdd'];?>
                    </div>
                </li>
                <?php }?>
            </ul>
            
            <hr>
            <h6 class="text-info">Select Processor</h6>
            <ul class="list-group">
                <?php
                 $sql = "SELECT DISTINCT processor FROM products ORDER BY processor";
                 $result=$conn->query($sql);
                 while($row=$result->fetch_assoc()){                    
                ?>
                <li class="list-group-item">
                    <div class="form-check">
                        <label for="" class="form-check-label"></label>
                        <input type="checkbox" class="form-check-input product_check" value="<?= $row['processor']; ?>" id ="processor"><?= $row['processor'];?>
                    </div>
                </li>
                <?php }?>
            </ul>
            <hr>
            <h6 class="text-info">Select Screen Size</h6>
            <ul class="list-group">
                <?php
                 $sql = "SELECT DISTINCT screen_size FROM products ORDER BY screen_size";
                 $result=$conn->query($sql);
                 while($row=$result->fetch_assoc()){                    
                ?>
                <li class="list-group-item">
                    <div class="form-check">
                        <label for="" class="form-check-label"></label>
                        <input type="checkbox" class="form-check-input product_check" value="<?= $row['screen_size']; ?>" id ="screen_size"><?= $row['screen_size'];?>
                    </div>
                </li>
                <?php }?>
            </ul>
            <hr>
            <h6 class="text-info">Select OS</h6>
            <ul class="list-group">
                <?php
                 $sql = "SELECT DISTINCT os FROM products ORDER BY os";
                 $result=$conn->query($sql);
                 while($row=$result->fetch_assoc()){                    
                ?>
                <li class="list-group-item">
                    <div class="form-check">
                        <label for="" class="form-check-label"></label>
                        <input type="checkbox" class="form-check-input product_check" value="<?= $row['os']; ?>" id ="os"><?= $row['os'];?>
                    </div>
                </li>
                <?php }?>
            </ul>
            </div>
            <div class="col-lg-9">
                <h5 class="text-center" id="textChange">All Products</h5>
                <hr>
                <div class="text-center">
                    <img src="images/loader.gif" alt="" id="loader" width="200" style ="display:none;"> 
                </div>
                <div class="row" id= "result">
                <?php
                $sql = "SELECT * FROM products";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
                ?>
                <div class="col-md-3 mb-2">
                    <div class="card-deck">
                        <div class="card boarder-secondary">
                            <img src="<?= $row['product_image'];?>" class="card-img-top">
                            <div class="card-img-overlay">
                                <h6 style ="margin-top:175px;" class="text-light bg-info text-center rounded p-1"><?=$row['product_name'];?></h6>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-danger">Price: <?=number_format($row['product_price']);?>/-</h4>
                                <p>
                                    RAM: <?=$row['ram'];?><br>
                                    HDD: <?=$row['hdd'];?><br>
                                    Processor: <?=$row['processor'];?><br>
                                    RAM: <?=$row['ram'];?><br>
                                    Screen Size: <?=$row['screen_size'];?><br>
                                    OS: <?=$row['os'];?><br>                                    
                                </p>
                                <a href="#" class="btn btn-success btn-block">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
          </div>
        </div>
    </div> 
    <script type ="text/javascript" src="js/script.js"></script>   
</body>
</html>