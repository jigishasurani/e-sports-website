<?php
$product_suffel = $product->getData();
shuffle($product_suffel);
// request method post  
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['ssubmit'])) {
        //call method addtocart
        $cart->addtocart($_POST['user_id'], $_POST['p_id'], $_POST['c_id']);
    }
}
?>


<section id="product1" class="section-p1">
    <div class="pro-container">
        <?php foreach ($product_suffel as $item) { ?>
            <?php

            if ($item['c_id'] == 3 && $item['p_status'] == 'Active') {
                ?>

                <div class="pro">

                    <a href="<?php printf('%s?p_id=%s', 'fsproduct.php', $item['p_id']) ?>">
                        <img src="upload/product/<?php echo $item['p_img'] ?? "./img-1/product/sheesh-black.jpg" ?>" alt=""></a>
                    <div class="des">
                        <!-- <span><?php echo $item['item_brand'] ?? "unknown" ?></span> -->
                        <h5>
                            <?php echo $item['p_name'] ?? "unknown" ?>
                        </h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4 class="deals-value">&#8377;
                            <?php echo $item['p_price'] ?? '0' ?>
                        </h4>
                        <h4 style="font-size:20px">&#8377;
                            <?php echo $item['p_offerprice'] ?? '0' ?>
                        </h4>
                    </div>
                    <form method="post">
                        <input type="hidden" name="p_id" value="<?php echo $item['p_id'] ?? "1"; ?>">
                        <input type="hidden" name="user_id" value="<?php echo isset($_SESSION['uid'])?$_SESSION['uid']:0; ?>">
                        <input type="hidden" name="c_id" value="<?php echo $item['c_id'] ?? "1"; ?>">
                        <?php
                        if (in_array($item['p_id'], $cart->getcartid($product->getData('cart')) ?? [])) {
                            echo ' <button type="submit" name="ssubmit">
                                    <i class="bx bx-cart disable cart"></i>
                                        </button>';
                        } else {
                            echo ' <button type="submit" name="ssubmit">
                            <i class="bx bx-cart-add cart"></i>
                            </button>';
                        }
                        ?>
                    </form>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</section>