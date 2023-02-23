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
                        <div class="text-muted text-sm sr-item" data-sr-id="31"
                             style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;"></div>
                        <h5 class="text-highlight sr-item" data-sr-id="32"
                            style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                            Filter</h5></div>
                    <span class="flex"></span></div>
                <div class="pb-1 d-flex sr-item" id="filter-tag" data-sr-id="33"
                     style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                    <div class="text-muted no-shrink my-2">Contries</div>
                    <div class="mx-3"><a class="badge badge-lg bg-light m-1">All countries</a> <a
                                class="badge badge-lg bg-light m-1">Australia</a> <a
                                class="badge badge-lg bg-light m-1">Canada</a> <a class="badge badge-lg bg-light m-1">France</a>
                        <a class="badge badge-lg bg-light m-1">Germany</a> <a class="badge badge-lg bg-light m-1">Ireland</a>
                        <a class="badge badge-lg bg-light m-1">Netherlands</a> <a class="badge badge-lg bg-light m-1">New
                            Zealand</a> <a class="badge badge-lg bg-light m-1">United Kingdom</a> <a
                                class="badge badge-lg bg-light m-1">USA</a></div>
                </div>
                <div class="pb-4 d-flex sr-item" id="filter-category" data-sr-id="34"
                     style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                    <div class="text-muted no-shrink my-2">Genres</div>
                    <div class="mx-3"><a href="#" class="badge badge-lg bg-light m-1">All genres </a><a href="#"
                                                                                                        class="badge badge-lg bg-light m-1">Acoustic </a><a
                                href="#" class="badge badge-lg bg-light m-1">Ambient </a><a href="#"
                                                                                            class="badge badge-lg bg-light m-1">Blues </a><a
                                href="#" class="badge badge-lg bg-light m-1">Classical </a><a href="#"
                                                                                              class="badge badge-lg bg-light m-1">Country </a><a
                                href="#" class="badge badge-lg bg-light m-1">Electronic </a><a href="#"
                                                                                               class="badge badge-lg bg-light m-1">Emo </a><a
                                href="#" class="badge badge-lg bg-light m-1">Folk </a><a href="#"
                                                                                         class="badge badge-lg bg-light m-1">Hardcore </a><a
                                href="#" class="badge badge-lg bg-light m-1">Hip-Hop </a><a href="#"
                                                                                            class="badge badge-lg bg-light m-1">Indie </a><a
                                href="#" class="badge badge-lg bg-light m-1">Jazz </a><a href="#"
                                                                                         class="badge badge-lg bg-light m-1">Latin </a><a
                                href="#" class="badge badge-lg bg-light m-1">Metal </a><a href="#"
                                                                                          class="badge badge-lg bg-light m-1">Pop </a><a
                                href="#" class="badge badge-lg bg-light m-1">Pop punk </a><a href="#"
                                                                                             class="badge badge-lg bg-light m-1">Punk </a><a
                                href="#" class="badge badge-lg bg-light m-1">Reggae </a><a href="#"
                                                                                           class="badge badge-lg bg-light m-1">R&amp;B </a><a
                                href="#" class="badge badge-lg bg-light m-1">Rock </a><a href="#"
                                                                                         class="badge badge-lg bg-light m-1">Soul </a><a
                                href="#" class="badge badge-lg bg-light m-1">World</a></div>
                </div>
                <div class="row row-md list">
                    <?php foreach ($songs as $song): ?>
                    <div class="col-4 col-sm-4 col-md-3 col-lg-2" data-id="312058991" data-category="all"
                         data-tag="France"
                         data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/AudioPreview62/v4/04/b6/28/04b62834-121f-b3af-47b3-2485ff499e14/mzaf_4474193750897158038.plus.aac.p.m4a">
                        <div class="list-item r" data-sr-id="35"
                             style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                            <div class="media"><a href="music.detail.html#312058991" class="ajax media-content"
                                                  style="background-image:url(<?php echo 'uploads/'. $song['image'] ?>)"
                                                  data-pjax-state=""></a>
                                <div class="media-action media-action-overlay">
                                    <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-heart active-danger">
                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                        </svg>
                                    </button>
                                    <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                    <button class="btn btn-icon no-bg no-shadow hide-row btn-more"
                                            data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right"></div>
                                </div>
                            </div>
                            <div class="list-content text-center">
                                <div class="list-body"><a href=""
                                                          class="list-title title ajax h-1x" data-pjax-state=""><?php echo $song['name'] ?></a><a href=""
                                                    class="list-subtitle d-block text-muted subtitle ajax h-1x"
                                                    data-pjax-state=""><?php echo $song['name_singer'] ?></a></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="no-result hide">
                    <div class="p-5 text-center"><h5>Nothing Found</h5><small>It seems we can’t find what you’re looking
                            for.</small></div>
                </div>
                <div class="pagination pagination-sm mt-3">
                    <li class="active"><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">1</a></li>
                    <li><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">2</a></li>
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
