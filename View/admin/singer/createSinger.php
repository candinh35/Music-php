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
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                            </div>
                            <div>
                                singer
                                <div class="page-title-subheading">
                                    View, create, update, delete and manage.
                                </div>
                            </div>
                        </div>

                        <div class="page-title-actions">
                            <a href="?controller=singer&action=create&admin=1"
                               class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                                Create
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <?php
                            if (isset($_SESSION['error'])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION['error']; ?>
                                </div>
                                <?php
                                unset($_SESSION['error']);
                            }
                            ?>
                            <div class="card-body">
                                <form action="?controller=singer&action=store&admin=1" method="post"
                                      enctype="multipart/form-data">
                                    <div class="position-relative row form-group">
                                        <label for="image" class="col-md-3 text-md-right col-form-label">Avatar</label>
                                        <div class="col-md-9 col-xl-8">
                                            <img style="height: 200px; cursor: pointer;"
                                                 class="thumbnail rounded-circle" data-toggle="tooltip" title=""
                                                 data-placement="bottom"
                                                 src="template/admin/assets/images/add-image-icon.jpg"
                                                 alt="Avatar" data-original-title="Click to change the image">
                                            <input name="image" type="file" onchange="changeImg(this)"
                                                   class="image form-control-file" style="display: none;" value="">
                                            <input type="hidden" name="image_old" value="">
                                            <small class="form-text text-muted">
                                                Click on the image to change (required)
                                            </small>
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="name" class="col-md-3 text-md-right col-form-label">Name</label>
                                        <div class="col-md-9 col-xl-8">
                                            <input required="" name="name" id="name" placeholder="Name" type="text"
                                                   class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="email" class="col-md-3 text-md-right col-form-label">Description</label>
                                        <div class="col-md-9 col-xl-8">
                                            <textarea name="description" id="" cols="30" rows="10"  class="form-control"></textarea>
                                        </div>
                                    </div>


                                    <div class="position-relative row form-group mb-1">
                                        <div class="col-md-9 col-xl-8 offset-md-2">
                                            <a href="?controller=singer&action=index&admin=1"
                                               class="border-0 btn btn-outline-danger mr-1">
                                                    <span class="btn-icon-wrapper pr-1 opacity-8">
                                                        <i class="fa fa-times fa-w-20"></i>
                                                    </span>
                                                <span>Cancel</span>
                                            </a>

                                            <button type="submit" class="btn-shadow btn-hover-shine btn btn-primary">
                                                    <span class="btn-icon-wrapper pr-2 opacity-8">
                                                        <i class="fa fa-download fa-w-20"></i>
                                                    </span>
                                                <span>Save</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
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

