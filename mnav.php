<?php
$con1 = new mysqli("localhost", "root", "", "s8ul");
?>
<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: -40px;
        background-color: transparent;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        /* padding: 12px 16px; */
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .img:hover {
        box-shadow: 2px 2px 10px 3px #ff55a3;
    }
.flex{
    margin-top: 30px;
}
   .f {
        display: flex;
        /* justify-content: space-between; */
        align-items: center;
        font-size: 18px;
    }

    .flex .f img {
        padding-top: 10px;
        border-radius: 30%;
        width: 100px;
        height: 100px;
    }

    .flex .f a {
        color: white;
    }
    .flex .g{
        text-align: center;
    }
</style>
<nav class="nav-1">
    <a href="#">
        <img src="./img/logo.png" alt="" class="logo" />
    </a>

    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="navbar">
        <li><a href="\project\home.php" class="underline active">Home</a></li>
        <li><a href="\project\esport\esport.php" class="underline">Esports</a></li>
        <li><a href="\project\cc\cc.php" class="underline">CC</a></li>
        <div class="dropdown">
            <a href="#" class="underline">Live</a>
            <!-- <i class='bx bx-user bx-flip-horizontal' style='color:#ed1d1d'></i> -->
            <div class="dropdown-content">
                <div class="flex">
                    <hr id="j"/>
                    <?php
                    $sel_cat = "select * from live_tb where c_status = 'Active'";
                    $result = $con1->query($sel_cat);
                    foreach ($result as $item) { ?>

                        <div class="f">
                            <a href="<?php echo $item['c_link'] ?>" target="blank">
                            <div>
                                <img src="ecom/cloth web/upload/category/<?php echo$item['c_img'] ?? "./img/211008132059icon5.png" ?>" alt="">
                            </div>
                            <div class="g">
                                <?php echo $item['c_name'] ?? "pinku"; ?></a>
                            </div>    

                        </div>
                        <hr />
                    <?php } ?>

                </div>
            </div>
        </div>
        <!-- <li><a href="#services" class="underline">Parterns</a></li> -->
        <li>
            <a href="\project\ecom\cloth web\index.php" class="ctn" target="_blank">Shop</a>
        </li>
    </ul>
</nav>