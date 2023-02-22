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
            <div class="padding sr" id="list" data-page="50">
                <div class="heading py-2 d-flex">
                    <div>
                        <div class="text-muted text-sm sr-item" data-sr-id="67"
                             style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">Top
                        </div>
                        <h5 class="text-highlight sr-item" data-sr-id="68"
                            style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                            Charts</h5></div>
                    <span class="flex"></span></div>
                <div class="pos-rlt z-index-1">
                    <div class="d-flex py-2 sr-item" data-sr-id="69"
                         style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                        <div class="dropdown my-2">
                            <button class="btn btn-outline-primary sorting w-sm w-auto-xs text-align-auto"
                                    data-toggle="dropdown"><span>New</span></button>
                            <div class="dropdown-menu"><a href="#" class="dropdown-item sort" data-sort="num"
                                                          data-order="desc">Popular</a> <a href="#"
                                                                                           class="dropdown-item sort"
                                                                                           data-sort="author"
                                                                                           data-order="desc">New</a>
                            </div>
                        </div>
                        <div class="flex"></div>
                        <div class="dropdown my-2 mx-2">
                            <button class="btn btn-outline-primary sorting w-sm w-auto-xs text-align-auto"
                                    data-toggle="dropdown"><span>All countries</span></button>
                            <div class="dropdown-menu" id="filter-tag"><a class="dropdown-item">All countries</a> <a
                                        class="dropdown-item">Australia</a> <a class="dropdown-item">Canada</a> <a
                                        class="dropdown-item">France</a> <a class="dropdown-item">Germany</a> <a
                                        class="dropdown-item">Ireland</a> <a class="dropdown-item">Netherlands</a> <a
                                        class="dropdown-item">New Zealand</a> <a class="dropdown-item">United
                                    Kingdom</a> <a class="dropdown-item">USA</a></div>
                        </div>
                        <div class="dropdown my-2">
                            <button class="btn btn-outline-primary sorting w-sm w-auto-xs text-align-auto"
                                    data-toggle="dropdown"><span>All genres</span></button>
                            <div class="dropdown-menu dropdown-menu-right scrollable hover" id="filter-category"
                                 style="max-height: 310px"><a href="#" class="dropdown-item">All genres </a><a href="#"
                                                                                                               class="dropdown-item">Acoustic </a><a
                                        href="#" class="dropdown-item">Ambient </a><a href="#" class="dropdown-item">Blues </a><a
                                        href="#" class="dropdown-item">Classical </a><a href="#" class="dropdown-item">Country </a><a
                                        href="#" class="dropdown-item">Electronic </a><a href="#" class="dropdown-item">Emo </a><a
                                        href="#" class="dropdown-item">Folk </a><a href="#" class="dropdown-item">Hardcore </a><a
                                        href="#" class="dropdown-item">Hip-Hop </a><a href="#" class="dropdown-item">Indie </a><a
                                        href="#" class="dropdown-item">Jazz </a><a href="#"
                                                                                   class="dropdown-item">Latin </a><a
                                        href="#" class="dropdown-item">Metal </a><a href="#"
                                                                                    class="dropdown-item">Pop </a><a
                                        href="#" class="dropdown-item">Pop punk </a><a href="#" class="dropdown-item">Punk </a><a
                                        href="#" class="dropdown-item">Reggae </a><a href="#" class="dropdown-item">R&amp;B </a><a
                                        href="#" class="dropdown-item">Rock </a><a href="#"
                                                                                   class="dropdown-item">Soul </a><a
                                        href="#" class="dropdown-item">World</a></div>
                        </div>
                    </div>
                </div>
                <div class="row list list-row list-index">
                    <?php foreach ($songs as $song): ?>
                    <div class="col-12" data-id="90835896" data-category="Electronic" data-tag="all" data-source="">
                        <div class="list-item r" data-sr-id="70"
                             style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                            <div class="media"><a href="music.detail.html#90835896" class="ajax media-content"
                                                  style="background-image:url(<?php echo  'uploads/' . $song['image'] ?>)"
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
                                <div class="list-body"><a href="music.detail.html#90835896"
                                                          class="list-title title ajax h-1x" data-pjax-state=""><?php echo $song['name'] ?>
                                        Up </a><a href="music.artist.html#90835896"
                                                  class="list-subtitle d-block text-muted subtitle ajax h-1x"
                                                  data-pjax-state="">Avicii</a></div>
                            </div>
                            <div class="list-action show-row">
                                <div class="d-flex align-items-center">
                                    <div class="px-3 text-sm d-none d-md-block num">640</div>
                                    <button class="btn btn-icon no-bg no-shadow" data-toggle-class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-heart active-danger">
                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                        </svg>
                                    </button>
                                    <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown">
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
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="no-result hide">
                    <div class="p-5 text-center"><h5>Nothing Found</h5><small>It seems we can’t find what you’re looking
                            for.</small></div>
                </div>
                <div class="pagination pagination-sm mt-3 hide">
                    <li class="active"><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">1</a></li>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "common/footer.php" ?>
</body>

</html>
