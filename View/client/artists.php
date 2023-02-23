<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "common/head.php" ?>
</head>

<body class="layout-row">
    <?php
    require_once "common/nav.php";
    ?>
    <div id="main" class="layout-column flex bg-white">
        <?php
        require_once "common/header.php";
        ?>
        <div id="content" class="flex">
            <div class="page-container">
                <div class="padding sr" id="list">
                    <div class="heading py-2 d-flex">
                        <div>
                            <div class="text-muted text-sm sr-item" data-sr-id="113" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                Featured
                            </div>
                            <h5 class="text-highlight sr-item" data-sr-id="114" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                Artists</h5>
                        </div>
                        <span class="flex"></span>
                    </div>
                    <div class="pb-4 d-flex sr-item" id="filter-tag" data-sr-id="115" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                        <div class="text-muted no-shrink my-2">Contries</div>
                        <div class="mx-3"><a class="badge badge-lg bg-light m-1">All countries</a> <a class="badge badge-lg bg-light m-1">Australia</a> <a class="badge badge-lg bg-light m-1">Canada</a> <a class="badge badge-lg bg-light m-1">France</a>
                            <a class="badge badge-lg bg-light m-1">Germany</a> <a class="badge badge-lg bg-light m-1">Ireland</a>
                            <a class="badge badge-lg bg-light m-1">Netherlands</a> <a class="badge badge-lg bg-light m-1">New
                                Zealand</a> <a class="badge badge-lg bg-light m-1">United Kingdom</a> <a class="badge badge-lg bg-light m-1">USA</a>
                        </div>
                    </div>
                    <div class="row list media-circle">
                        <?php foreach ($singers as $singer) : ?>
                            <div class="col-4 col-sm-3 col-md-2-4 col-lg-2 col-xl-1-8" data-id="303988181" data-category="Pop" data-tag="Australia" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview71/v4/fb/0c/fc/fb0cfc4d-dfc7-18fc-89c9-f2302a9fc65a/mzaf_9146754008516582895.plus.aac.p.m4a">
                                <div class="list-item r" data-sr-id="116" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div class="media"><a href="music.artist.html#303988181" class="ajax media-content" style="background-image:url(<?php echo 'uploads/' . $singer['avata_url']  ?>)" data-pjax-state=""></a>
                                        <div class="media-action"></div>
                                    </div>
                                    <div class="list-content text-center">
                                        <div class="list-body"><a href="" class="list-subtitle d-block text-muted subtitle ajax h-1x" data-pjax-state=""><?php echo $singer['name']  ?></a></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once "common/footer.php";
        ?>
    </div>

    <?php
    require_once "common/js.php";
    ?>
</body>

</html>