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
        <div id="content" class="flex"><!-- ############ Main START-->
            <div>
                <div class="page-hero page-container" id="page-hero">
                    <div class="padding d-flex">
                        <div class="page-title">
                            <h2 class="text-md text-highlight">Profile</h2><small class="text-muted">Your personal information</small>
                        </div>
                        <div class="flex">

                        </div>

                    </div>
                    <?php
                    if (isset($_SESSION['success'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $_SESSION['success']; ?>
                        </div>
                    <?php
                        unset($_SESSION['success']);
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_SESSION['error']; ?>
                        </div>
                    <?php
                        unset($_SESSION['error']);
                    }
                    ?>
                </div>
                <div class="page-content page-container" id="page-content">
                    <div class="padding sr">
                        <div class="card" data-sr-id="2" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                            <div class="card-header bg-dark bg-img p-0 no-border" data-stellar-background-ratio="0.1" style="background-image:url(../assets/img/b3.jpg)">
                                <div class="bg-dark-overlay r-2x no-r-b">
                                    <div class="d-md-flex">
                                        <div class="p-4">
                                            <div class="d-flex"><a href="#"><span class="avatar w-64"><img src="<?php echo $_SESSION['client']['image'] != null  ? 'uploads/'. $_SESSION['client']['image'] : 'template/client/assets/img/default-user.png' ?>" alt="."> <i class="on"></i></span></a>
                                                <div class="mx-3">
                                                    <h5 class="mt-2"><?php echo $_SESSION['client']['name'] ?></h5>
                                                    <div class="text-fade text-sm"><span class="m-r">Senior Industrial Designer</span> <small><i class="fa fa-map-marker mr-2"></i>London, UK</small></div>
                                                </div>
                                            </div>
                                        </div><span class="flex"></span>
                                        <div class="align-items-center d-flex p-4">
                                            <div class="toolbar"><a href="#" class="btn btn-sm bg-dark-overlay btn-rounded text-white bg-success active" data-toggle-class="bg-success"><span class="d-inline">Follow</span> <span class="d-none">Following</span> </a><a href="#" class="btn btn-sm btn-icon bg-dark-overlay btn-rounded"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone text-fade">
                                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                                    </svg> </a><a href="#" class="btn btn-sm btn-icon bg-dark-overlay btn-rounded"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical text-fade">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="d-flex">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#" data-toggle="tab" data-target="#tab_4">Profile</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#" data-toggle="tab" data-target="#tab_2">Setting Profile</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#" data-toggle="tab" data-target="#tab_3">More money</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7 col-lg-8">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab_2">
                                        <div class="card p-4" data-sr-id="11" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                            <div class="timeline animates animates-fadeInUp">
                                                <form action="?controller=customer&action=update&id=<?php echo $_SESSION['client']['id'] ?>" method="post">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="name" id="" class="form-control" placeholder="name" value="<?php echo $_SESSION['client']['name'] ?>" aria-describedby="helpId">
                                                    </div>
                                                    <fieldset disabled>
                                                        <div class="form-group">
                                                            <label for="disabledTextInput">Email</label>
                                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_SESSION['client']['email'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="disabledTextInput">Account balance</label>
                                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_SESSION['client']['wallet'] ?? '0' ?> USD">
                                                        </div>
                                                    </fieldset>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab_3">
                                        <div class="card p-4" data-sr-id="12" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                            <form class="needs-validation" novalidate method="post" action="?controller=customer&action=rechage&id=<?php echo $_SESSION['client']['id'] ?>">
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationCustom03">Phone Card Code</label>
                                                        <input type="text" class="form-control" id="validationCustom03" required name="cardCode">
                                                        <div class="invalid-feedback">
                                                            Please provide a Phone Card Code.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom04">Card</label>
                                                        <select class="custom-select" id="validationCustom04" required>
                                                            <option selected disabled value="">Choose Phone Card</option>
                                                            <option>Viettel</option>
                                                            <option>Vinaphone</option>
                                                            <option>Mobiphone</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a valid Card.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom04">Face Value</label>
                                                        <select class="custom-select" id="validationCustom04" required name="wallet">
                                                            <option selected disabled value="">Choose Face Value</option>
                                                            <option value="20">20 USD</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a valid Face Value.
                                                        </div>
                                                    </div>
                                                </div>

                                                <button class="btn btn-primary" type="submit">Recharge Card</button>
                                            </form>


                                        </div>
                                    </div>
                                    <div class="tab-pane fade active show" id="tab_4">
                                        <div class="card" data-sr-id="21" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                            <div class="px-2">
                                                <div class="py-3">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item"><a class="nav-link"><span><?php echo $_SESSION['client']['name'] ?></span></a></li>
                                                        <li class="nav-item"><a class="nav-link"><span>320-654-123</span></a></li>
                                                        <li class="nav-item"><a class="nav-link"><span>July 10</span></a></li>
                                                        <li class="nav-item"><a class="nav-link"><span><?php echo $_SESSION['client']['email'] ?></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="px-4 py-4">
                                                <div class="row mb-2">
                                                    <div class="col-6"><small class="text-muted">Cell Phone</small>
                                                        <div class="my-2">1243 0303 0333</div>
                                                    </div>
                                                    <div class="col-6"><small class="text-muted">Family Phone</small>
                                                        <div class="my-2">+32(0) 3003 234 543</div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6"><small class="text-muted">Reporter</small>
                                                        <div class="my-2">Coch Jose</div>
                                                    </div>
                                                    <div class="col-6"><small class="text-muted">Manager</small>
                                                        <div class="my-2">James Richo</div>
                                                    </div>
                                                </div>
                                                <div><small class="text-muted">Bio</small>
                                                    <div class="my-2">Ut maecenas sed purus ultrices sed sapien massa quam eu sed odio id dui, sed sed lectus amet cursus sed habitant est morbi adipiscing nam consectetur nullam urna, proin condimentum ut laoreet congue felis, diam pulvinar aliquam libero non tortor turpis aliquet massa eu etiam eget quisque egestas tristique tempus purus blandit nunc volutpat aliquam amet, aliquet nec et sed</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-lg-4">
                                <div class="card sticky" style="z-index: 1; visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;" data-sr-id="22">
                                    <div class="card-header"><strong>You know these people?</strong></div>
                                    <div class="list list-row">
                                        <?php foreach ($users as $user) : ?>
                                            <div class="list-item" data-id="8" data-sr-id="23" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                                <div><a href="#"><span class="w-40 avatar gd-success"><span class="avatar-status on b-white avatar-right"></span> <img src="<?php echo  $user['image'] != null ? 'uploads/' . $user['image'] : 'template/client/assets/img/default-user.png' ?>" alt="."></span></a></div>
                                                <div class="flex"><a href="#" class="item-author text-color"><?php echo $user['name'] ?></a> <a href="#" class="item-company text-muted h-1x">Jet</a></div>
                                                <div>
                                                    <div class="item-action dropdown"><a href="#" data-toggle="dropdown" class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg></a>
                                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"><a class="dropdown-item" href="#">See detail </a><a class="dropdown-item download">Download </a><a class="dropdown-item edit">Edit</a>
                                                            <div class="dropdown-divider"></div><a class="dropdown-item trash">Delete item</a>
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
            </div><!-- ############ Main END-->
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