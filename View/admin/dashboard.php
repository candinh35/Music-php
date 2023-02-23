<!doctype html>
<html lang="en">

<head>
    <?php
    require_once "./View/admin/common/head.php";
    ?>
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <?php
    require_once "./View/admin/common/nav.php";
    ?>
    <div class="app-main">
        <?php
        require_once "./View/admin/common/slider.php";
        ?>
        <div class="app-main__outer">

            <div class="app-main__inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h1 class="text-center p-80 text-primary">Chào mừng bạn đến với trang quản trị của
                                        chúng tôi!</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            require_once "./View/admin/common/footer.php";
            ?>
        </div>

    </div>


</div>

<?php
require_once "./View/admin/common/js.php";
?>

</div>

</body>

</html>

<div class="row">