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
                <div class="padding sr">
                    <div class="row no-gutters list-grouped">
                        <?php foreach ($albums as $album): ?>
                        <div class="col-sm-6">
                            <div class="list-item list-overlay r mb-3" data-sr-id="220" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                <div class="media media-4x3"><a href="" class="ajax media-content" style="background-image:url(<?php echo  'uploads/' . $album['image_url'] ?>)" data-pjax-state=""></a>
                                    <div class="media-action"></div>
                                </div>
                                <div class="list-content p-5">
                                    <div class="list-body"><a href="music.detail.html#" class="list-title title ajax h4 font-weight-bold" data-pjax-state=""><?php echo   $album['name'] ?></a><a href="" class="list-subtitle d-block text-muted subtitle ajax h-1x" data-pjax-state=""><?php echo   $album['description'] ?></a></div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="heading py-2 d-flex">
                        <div>
                            <div class="text-muted text-sm sr-item" data-sr-id="222" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">Weekly</div>
                            <h5 class="text-highlight sr-item" data-sr-id="223" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">Top tracks</h5>
                        </div><span class="flex"></span>
                    </div>
                    <div class="slick slick-visible slick-arrow-top row sr-item" data-sr-id="224" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                        <?php foreach ($songs as $song): ?>
                        <div class="col-2" data-id="92570808" data-category="Pop" data-tag="Canada" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music4/v4/64/3d/c1/643dc113-29d1-08de-78e2-a4ab4c3f1730/mzaf_5420937162202173294.plus.aac.p.m4a">
                            <div class="list-item slick-item r mb-3" data-sr-id="225" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                <div class="media"><a href="" class="ajax media-content" style="background-image:url(<?php echo  'uploads/' . $song['image'] ?>)" data-pjax-state=""></a>
                                    <div class="media-action media-action-overlay"><button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart active-danger">
                                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                            </svg></button> <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                        <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg></button>
                                        <div class="dropdown-menu dropdown-menu-right"></div>
                                    </div>
                                </div>
                                <div class="list-content text-center">
                                    <div class="list-body"><a href="" class="list-title title ajax h-1x" data-pjax-state=""><?php echo   $song['name'] ?> </a><a href="" class="list-subtitle d-block text-muted subtitle ajax h-1x" data-pjax-state="">Magic!</a></div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading py-2 d-flex">
                                <div>
                                    <div class="text-muted text-sm sr-item" data-sr-id="237" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">User</div>
                                    <h5 class="text-highlight sr-item" data-sr-id="238" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">Recently added</h5>
                                </div><span class="flex"></span>
                            </div>
                            <div class="row list-row list-index">
                                <?php foreach ($newSongs as $newSong) : ?>
                                    <div class="col-12" data-id="82924078" data-category="France" data-tag="Electronic" data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/v4/fa/37/1c/fa371cea-559d-f418-506a-5fdf64bed3fe/mzaf_1505180730434746810.plus.aac.p.m4a">
                                        <div class="list-item r" data-sr-id="239" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                            <div class="media"><a href="music.detail.html#82924078" class="ajax media-content" style="background-image:url(<?php echo  'uploads/' . $newSong['image'] ?>)" data-pjax-state=""></a>
                                                <div class="media-action media-action-overlay"><button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart active-danger">
                                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                        </svg></button> <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                                    <button onclick="playSound()" class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <div class="dropdown-menu dropdown-menu-right"></div>
                                                </div>
                                            </div>
                                            <div class="list-content text-center">
                                                <div class="list-body"><a href="music.detail.html#82924078" class="list-title title ajax h-1x" data-pjax-state=""><?php echo $newSong['name'] ?> </a><a href="music.artist.html#82924078" class="list-subtitle d-block text-muted subtitle ajax h-1x" data-pjax-state="">
                                                        <?php echo $newSong['name_singer'] ?></a></div>
                                            </div>
                                            <div class="list-action show-row">
                                                <div class="d-flex align-items-center">
                                                    <div class="px-3 text-sm d-none d-md-block">05:25</div><button class="btn btn-icon no-bg no-shadow" data-toggle-class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart active-danger">
                                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                        </svg></button> <button class="btn btn-icon no-bg no-shadow btn-more" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <div class="dropdown-menu dropdown-menu-right"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading py-2 d-flex">
                                <div>
                                    <div class="text-muted text-sm sr-item" data-sr-id="244" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">Upcoming</div>
                                    <h5 class="text-highlight sr-item" data-sr-id="245" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">Events</h5>
                                </div><span class="flex"></span>
                            </div>
                            <div class="row row-sm">
                                <?php foreach ($genres as $genre): ?>
                                <div class="col-6">
                                    <div class="list-item list-overlay r mb-3 gd-primary" data-sr-id="246" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                        <div class="media media-4x3"><a href="" class="ajax media-content" style="background-image:url()" data-pjax-state=""></a>
                                            <div class="media-action"></div>
                                        </div>
                                        <div class="list-content p-4">
                                            <div class="list-body"><a href="" class="list-title title ajax h5 font-weight-bold" data-pjax-state=""><?php echo $genre['name'] ?></a></div>
                                            <div class="list-footer">
                                                <div class="text-muted text-sm">Feb 29, 6:30 am</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="heading py-2 d-flex">
                                <div>
                                    <div class="text-muted text-sm sr-item" data-sr-id="248" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">Music</div>
                                    <h5 class="text-highlight sr-item" data-sr-id="249" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">News</h5>
                                </div><span class="flex"></span>
                            </div>
                            <div class="row row-sm">
                            <?php foreach ($singers as $singer) : ?>
                                <div class="col-4">
                                    <div class="list-item r" data-sr-id="250" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                        <div class="media media-16x9"><a href="music.detail.html#" class="ajax media-content" style="background-image:url(<?php echo 'uploads/'. $singer['avata_url']?>)" data-pjax-state=""></a>
                                            <div class="media-action"></div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-body"><a href="music.detail.html#" class="list-title title ajax" data-pjax-state=""><?php echo $singer['name'] ?></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
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