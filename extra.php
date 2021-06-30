<body>
    <section class="blog-page">
        <div class="container">
            <?php
                $id=$_GET['id'];
                $stmt = $admin->ret("SELECT * FROM `product` where product_id='$id'");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-item">
                        <center>
                            <img src="images/<?php echo $row['image'];?>" style="height: 500px; width:550px;" alt="Image">
                            <div class="rent-price"><h1><b><span>Rs.<?php echo $row['price'];?>/</span>Piece</b></h1></div> 
                        </center>
                    </div>
                    <div class="down-content">
                        <center>
                            <h1><b><?php echo $row['pro_name'];?></b></h1>
                                <p>
                                    <h2><b><u><span>Description</span></u></b></h2>
                                    <p><h3><?php echo $row['description'];?></h3></p>
                                </p>
                        </center>
                    </div>
                    <div class="d-flex action">
                        <a href="booking.php?id=<?php echo $row['product_id'];?>" class="btn btn-primary"><h1><b>book now</b></h1></a>
                    </div>
                </div>
            </div>    
        </div>
    <?php } ?>  
    </section>
</body>