<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Localistix | Online Shopping Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--header -->
 <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
         <!--jumbutron start-->
        <div class="jumbotron text-center">
            <h1>Welcome to Localistix!</h1>
            <p>We have wide range of products for you. No need to hunt around,we have all in one place</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
    <hr/>
    <!--menu list-->
    <div class="row text-center" id="Accessories">
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images\acc1.jpg" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6>Veni Gajara</h6>
                    <h6>Price :Rs 399</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(1)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a><p>
                        <?php
                        }
                    }
                    ?>
                </div>
                <a target="_blank" href="https://www.amazon.in/Foreign-Holics-Beautiful-Artificial-Accessories/dp/B07PBMQCVX/ref=sr_1_1?keywords=indian%252Baccessories%252Bfor%252Bwomen&amp;qid=1651055281&amp;sprefix=indian%252Baccesor%252Caps%252C233&amp;sr=8-1&amp;th=1&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=f58a69e4ccd2dd14c63953be0bd83805&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/acc2.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>TouchStone</h6>
                    <h6>Price :Rs 399</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(2)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                         } else {
                        ?>
                        <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                        <?php
                         }
                    }
                    ?>
                </div>
                <a target="_blank" href="https://www.amazon.in/Touchstone-Traditional-Attractive-Rhinestone-Accessory/dp/B07ZB3GNQ8/ref=sr_1_7?keywords=indian%252Baccessories%252Bfor%252Bwomen&amp;qid=1651057164&amp;sprefix=indian%252Bacceessori%252Caps%252C216&amp;sr=8-7&amp;th=1&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=8544bdb928dc03e17b029d5aae604c43&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/acc3.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Southern Jewel</h6>
                    <h6>Price :Rs 699</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(3)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
                <a target="_blank" href="https://www.amazon.in/Southern-Jewelery-Decoration-Jewellery-Women-9/dp/B07YYYN67R/ref=sr_1_24?keywords=indian+accessories+for+women&amp;qid=1651057164&amp;sprefix=indian+acceessori%252Caps%252C216&amp;sr=8-24&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=2a132267a58c059e1eacaff064dc06e1&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/acc4.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Scarf Teal</h6>
                    <h6>Price :Rs 795</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(4)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
                <a target="_blank" href="https://www.amazon.in/Chumbak-Adorned-Garden-Mandala-Viscose/dp/B07Y6HCSC6/ref=sr_1_9?keywords=indian+accessories+for+women&amp;qid=1651057164&amp;sprefix=indian+acceessori%252Caps%252C216&amp;sr=8-9&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=bb2d5e06a7ccd4790de81c390a812d0f&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
            </div>
        </div>

        
    </div>
    <div class="row text-center" id="Perfumes">
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/perr1.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                    <h6>Parag Fragrance</h6>
                    <h6>Price :Rs 399</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(5)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                    <a target="_blank" href="https://www.amazon.in/Parag-Fragrances-Perfume-Lasting-Attractive/dp/B07Z2WH6BC/ref=sr_1_12?keywords=indian+perfume&amp;qid=1651057386&amp;sprefix=indian+perfu%252Caps%252C195&amp;sr=8-12&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=35a523d9d44b2ec69c904c60468ca1dc&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/per2.jpg" alt="" class="img-fluid pb-1" >
                    <div class="figure-caption">
                    <h6>BN Perfume</h6>
                    <h6>Price :Rs 340</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(6)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                        <?php
                    }
                    }
                    ?>
                    </div>
                    <a target="_blank" href="https://www.amazon.in/BN-Perfume-Perfume-Premium-Perfumes/dp/B082B6KNQR/ref=sr_1_11?keywords=indian+perfume&amp;qid=1651057386&amp;sprefix=indian+perfu%252Caps%252C195&amp;sr=8-11&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=6b78f339777d553869cbfe6cccc72b8a&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/per3.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>AL FAKHR</h6>
                        <h6>Price :Rs 359</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(7)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                    <?php
                    }
                    }
                    ?>
                    </div>
                    <a target="_blank" href="https://www.amazon.in/AL-FAKHR-Perfume-Perfume-Oriental-Perfumes/dp/B082B7SPDH/ref=sr_1_9?keywords=indian+perfume&amp;qid=1651057386&amp;sprefix=indian+perfu%252Caps%252C195&amp;sr=8-9&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=6427dd1db1910ddfddff0de24929b206&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/per4.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Embark Womens</h6>
                        <h6>Price :Rs 1445</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(8)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                    <a target="_blank" href="https://www.amazon.in/Embark-Womens-Dream-Her-EDP/dp/B07C3M1QM7/ref=sr_1_13?keywords=indian+perfume&amp;qid=1651057386&amp;sprefix=indian+perfu%252Caps%252C195&amp;sr=8-13&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=eaf26e53297a224e39806388761623d5&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
                </div>
            </div>
        </div>
        <div class="row text-center" id="Mobile" >
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/mob1.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>SKYVIC</h6>
                            <h6>Price :Rs 1099</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(9)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                        <a target="_blank" href="https://www.amazon.in/SKYVIK-TRUHOLD-Dashboard-Magnetic-Mobile/dp/B07RZ5Q91Y/ref=sr_1_2_sspa?keywords=mobile+accessories&amp;qid=1651057668&amp;s=electronics&amp;smid=A17XW5KRZ5ILFD&amp;sprefix=Mobile+Accessor%252Celectronics%252C188&amp;sr=1-2-spons&amp;psc=1&amp;spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUExNE83WThSQUxKTVJJJmVuY3J5cHRlZElkPUEwMzY0Nzc1MkxHTzJPRUlCQlNNNyZlbmNyeXB0ZWRBZElkPUExMDI2ODU1QTNVQzZBNjJWMkxRJndpZGdldE5hbWU9c3BfYXRmJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ==&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=2993d0d09b2113e56f0e3d6affbc31de&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/mob2.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>STRIFF</h6>
                            <h6>Price :Rs 119</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(10)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                    } else {
                    ?>
                     <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                     <?php
                    }
                    }
                    ?>
                        </div>
                        <a target="_blank" href="https://www.amazon.in/STRIFF-Mobile-Android-Samsung-OnePlus/dp/B07GXHC691/ref=sr_1_4?keywords=mobile+accessories&amp;qid=1651057668&amp;s=electronics&amp;sprefix=Mobile+Accessor%252Celectronics%252C188&amp;sr=1-4&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=06ca4b4904c452da0117fdbf8a1713da&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/mob3.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Portronics</h6>
                            <h6>Price :Rs 129</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(11)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                        <a target="_blank" href="https://www.amazon.in/Portronics-POR-122-MODESK-Universal-Mobile/dp/B07N8RQ6W7/ref=sr_1_8?keywords=mobile+accessories&amp;qid=1651057668&amp;s=electronics&amp;sprefix=Mobile+Accessor%252Celectronics%252C188&amp;sr=1-8&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=a3bf6400d386e00678a05f2b45fbc50d&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3" >
                    <div class="card">
                        <img src="images/mob4.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                        <h6>ELV PS1</h6>
                    <h6>Price :Rs 179</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(12)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                        <a target="_blank" href="https://www.amazon.in/ELV-PS1-Mobile-Holder-Silver/dp/B073Y686P5/ref=sr_1_18?keywords=mobile+accessories&amp;qid=1651057668&amp;s=electronics&amp;sprefix=Mobile+Accessor%252Celectronics%252C188&amp;sr=1-18&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=4ae5ffe9272f4c25dc4f31b7a4353527&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
                    </div>
                </div>
            </div>
            <div class="row text-center" id="Beauty">
                    <div class="col-md-3 col-6 py-3" >
                        <div class="card">
                            <img src="images/beaut1.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>WOW Skin</h6>
                                <h6>Price :Rs 339</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(13)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                            <a target="_blank" href="https://www.amazon.in/WOW-Skin-Science-Shampoo-Pro-Vitamin/dp/B07YNHHH5N/ref=sr_1_4_sspa?crid=2PRUHCRMXN2V&amp;keywords=Beauty+products&amp;qid=1651057949&amp;s=beauty&amp;smid=A2WK4OB3ROODF0&amp;sprefix=beauty+product%252Cbeauty%252C183&amp;sr=1-4-spons&amp;psc=1&amp;spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEyNFBTUUVMU0ZaV1JYJmVuY3J5cHRlZElkPUEwNzc4MDU1MUk1VURQWUw0QVI2NCZlbmNyeXB0ZWRBZElkPUEwNzkwMDM0MlZOV0dHVDdGTjJHMSZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=b6bad344c62391e64410339732f8a3f2&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/beaut2.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Gulabari</h6>
                                <h6>Price :Rs 102</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(14)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=14" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                            <a target="_blank" href="https://www.amazon.in/Dabur-Gulabari-Premium-Rose-Water/dp/B085QMJ3TS/ref=sr_1_19_f3_0b_fs?almBrandId=ctnow&amp;crid=2PRUHCRMXN2V&amp;fpw=alm&amp;keywords=Beauty+products&amp;qid=1651057949&amp;s=beauty&amp;sprefix=beauty+product%252Cbeauty%252C183&amp;sr=1-19&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=9319f8082afc0b89f6fbbf83925ff3b3&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/beauti3.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Organics</h6>
                                <h6>Price :Rs 232</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(15)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=15" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                   <?php
                    }
                    }
                    ?>
                            </div>
                            <a target="_blank" href="https://www.amazon.in/Organics-Natural-Unrefined-Moisturized-Nourishing/dp/B09VGVLT5X/ref=sr_1_5?crid=2CISK86Z76GMF&amp;keywords=Beauty+products+indian&amp;qid=1651058032&amp;s=beauty&amp;sprefix=beauty+products+india%252Cbeauty%252C186&amp;sr=1-5&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=6dafe0f9e4f35aa74a98ba8f25483155&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/beaut4.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>MamaEarth</h6>
                                <h6>Price :Rs 434</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Wishlist</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(16)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added To Wishlist</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-warning  text-white">Add To Wishlist</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                            <a target="_blank" href="https://www.amazon.in/Mamaearths-Natural-Sunscreen-Lotion-Turmeric/dp/B07RGWRRMN/ref=sr_1_11?crid=2CISK86Z76GMF&amp;keywords=Beauty+products+indian&amp;qid=1651058032&amp;s=beauty&amp;smid=A61C6NUFGVGS7&amp;sprefix=beauty+products+india%252Cbeauty%252C186&amp;sr=1-11&_encoding=UTF8&tag=localistix-21&linkCode=ur2&linkId=f76322faa63633e7228b77c2f5dd1bd3&camp=3638&creative=24630" role="button" class="btn btn-warning  text-white ">Purchase</a>
                        </div>
                    </div>
                </div>
      </div>
      <!--menu list ends-->
      <!-- footer-->
        <?php include 'includes/footer.php'?>
      <!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>