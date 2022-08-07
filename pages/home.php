<?php include 'header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-3">
                <div class="card mb-5">
                    <img src="assets/img/<?php echo $product['image'];?>" alt="" style="height: 250px;">
                    <div class="card-body">
                        <h4><?php echo $product['name'];?></h4>
                        <p>Tk. <?php echo $product['price'];?></p>
                        <hr>
                        <a href="action.php?page=detail&&id=<?php echo $product['id'];?>" class="btn btn-info px-5">Detail</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php'?>