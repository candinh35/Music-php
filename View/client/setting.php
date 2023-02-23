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
                            <h2 class="text-md text-highlight">Setting</h2><small class="text-muted">Configure the things</small>
                        </div>
                        <div class="flex"></div>
                        <div></div>
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
                    <div class="padding">
                        <div id="accordion">
                            <p class="text-muted"><strong>Account</strong></p>
                            <div class="card">
                                <div class="d-flex align-items-center px-4 py-3 pointer collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#c_1" aria-expanded="false">
                                    <div><span class="w-48 avatar circle bg-info-lt" data-toggle-class="loading"><img src="<?php echo $_SESSION['client']['image'] != null  ? 'uploads/' . $_SESSION['client']['image'] : 'template/client/assets/img/default-user.png' ?>" alt="."></span></div>
                                    <div class="mx-3 d-none d-md-block"><strong><?php echo $_SESSION['client']['name'] ?></strong>
                                        <div class="text-sm text-muted"><?php echo $_SESSION['client']['email'] ?></div>
                                    </div>
                                    <div class="flex"></div>
                                    <div class="mx-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg></div>
                                    <div><a href="signin.1.html" class="text-prmary text-sm">Sign Out</a></div>
                                </div>
                                <div class="collapse p-4" id="c_1">
                                    <form action="?controller=customer&action=update&id=<?php echo $_SESSION['client']['id'] ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group"><label>Profile picture</label>
                                            <div class="custom-file"><input type="file" name="image" class="custom-file-input" id="customFile"><label class="custom-file-label" for="customFile">Choose file</label></div>
                                        </div>
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
                                <div class="d-flex align-items-center px-4 py-3 b-t"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw">
                                        <polyline points="23 4 23 10 17 10"></polyline>
                                        <polyline points="1 20 1 14 7 14"></polyline>
                                        <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                                    </svg>
                                    <div class="px-3">
                                        <div>Sync</div>
                                        <div class="text-sm text-muted">On - Sync everything</div>
                                    </div>
                                    <div class="flex"></div><span><label class="ui-switch ui-switch-md"><input type="checkbox" checked="checked"> <i></i></label></span>
                                </div>
                                <div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse" data-parent="#accordion" data-target="#c_2" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <div class="px-3">
                                        <div>Password</div>
                                    </div>
                                    <div class="flex"></div>
                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg></div>
                                </div>
                                <div class="p-4 collapse show" id="c_2" style="">

                                    <form class="needs-validation" novalidate method="post" action="?controller=customer&action=updatePassword&id=<?php echo $_SESSION['client']['id'] ?>">
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom03">Old Password</label>
                                                <input type="password" class="form-control" id="validationCustom03" required name="password_old">
                                                <div class="invalid-feedback">
                                                    Please provide a Old Password.
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom03">New Password</label>
                                                <input type="password" class="form-control" id="validationCustom03" required name="password">
                                                <div class="invalid-feedback">
                                                    Please provide a New Password.
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom03">New Password Again</label>
                                                <input type="password" class="form-control" id="validationCustom03" required name="password_confirmation">
                                                <div class="invalid-feedback">
                                                    Please provide a New Password Again.
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </form>

                                </div>
                                <div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse" data-parent="#accordion" data-target="#c_3" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                    </svg>
                                    <div class="px-3">
                                        <div>Payment methods</div>
                                    </div>
                                    <div class="flex"></div>
                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg></div>
                                </div>
                                <div class="p-4 collapse show" id="c_3" style="">
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
                                <div class="d-flex align-items-center px-4 py-3 b-t pointer collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#c_4" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    <div class="px-3">
                                        <div>Addresses and more</div>
                                    </div>
                                    <div class="flex"></div>
                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg></div>
                                </div>
                                <div class="collapse p-4" id="c_4">
                                    <form role="form">
                                        <div class="form-group"><label>URL</label><input type="text" class="form-control"></div>
                                        <div class="form-group"><label>Company</label><input type="text" class="form-control"></div>
                                        <div class="form-group"><label>Location</label><input type="text" class="form-control"></div><button type="submit" class="btn btn-primary mt-2">Update</button>
                                    </form>
                                </div>
                            </div>
                            <p class="text-muted"><strong>Notifications</strong></p>
                            <div class="card">
                                <div class="d-flex align-items-center px-4 py-3">
                                    <div>Anyone seeing my profile page</div>
                                    <div class="flex"></div><span><label class="ui-switch ui-switch-md"><input type="checkbox"> <i></i></label></span>
                                </div>
                                <div class="d-flex align-items-center px-4 py-3 b-t">
                                    <div>Anyone follow me</div>
                                    <div class="flex"></div><span><label class="ui-switch ui-switch-md"><input type="checkbox" checked="checked"> <i></i></label></span>
                                </div>
                                <div class="d-flex align-items-center px-4 py-3 b-t">
                                    <div>Anyone send me a message</div>
                                    <div class="flex"></div><span><label class="ui-switch ui-switch-md"><input type="checkbox" checked="checked"> <i></i></label></span>
                                </div>
                                <div class="d-flex align-items-center px-4 py-3 b-t">
                                    <div>Anyone invite me to group</div>
                                    <div class="flex"></div><span><label class="ui-switch ui-switch-md"><input type="checkbox"> <i></i></label></span>
                                </div>
                                <div class="d-flex align-items-center px-4 py-3 b-t">
                                    <div>Update</div>
                                    <div class="flex"></div><span><label class="ui-switch ui-switch-md"><input type="checkbox" checked="checked"> <i></i></label></span>
                                </div>
                            </div>
                            <p class="text-muted"><strong>Emails</strong></p>
                            <div class="card">
                                <div class="d-flex align-items-center px-4 py-3">
                                    <div>Anyone posts a comment on my post</div>
                                    <div class="flex"></div><span><label class="ui-switch ui-switch-md"><input type="checkbox"> <i></i></label></span>
                                </div>
                                <div class="d-flex align-items-center px-4 py-3 b-t">
                                    <div>Anyone follow me</div>
                                    <div class="flex"></div><span><label class="ui-switch ui-switch-md"><input type="checkbox" checked="checked"> <i></i></label></span>
                                </div>
                                <div class="d-flex align-items-center px-4 py-3 b-t">
                                    <div>Anyone repost</div>
                                    <div class="flex"></div><span><label class="ui-switch ui-switch-md"><input type="checkbox"> <i></i></label></span>
                                </div>
                            </div>
                            <p class="text-muted"><strong>Security</strong></p>
                            <div class="card">
                                <div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse" data-parent="#accordion" data-target="#c_5" aria-expanded="true">
                                    <div>Delete account?</div>
                                    <div class="flex"></div>
                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg></div>
                                </div>
                                <div class="p-4 collapse show" id="c_5" style="">
                                    <div class="py-3">
                                        <p>Are you sure to delete your account?</p><button type="button" class="btn btn-white">No</button> <button type="button" class="btn btn-danger">Yes</button>
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