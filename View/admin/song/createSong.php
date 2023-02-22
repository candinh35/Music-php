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
                                Song
                                <div class="page-title-subheading">
                                    View, create, update, delete and manage.
                                </div>
                            </div>
                        </div>

                        <div class="page-title-actions">
                            <a href="?controller=song&action=create&admin=1"
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
                                <form action="?controller=song&action=store&admin=1" method="post"
                                      enctype="multipart/form-data">
                                    <div class="position-relative row form-group">
                                        <label for="song" class="col-md-3 text-md-right col-form-label">Song</label>
                                        <div class="col-md-9 col-xl-8">
                                            <input required="" name="song" id="song" placeholder="song" type="file"
                                                   class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="image" class="col-md-3 text-md-right col-form-label">Image</label>
                                        <div class="col-md-9 col-xl-8">
                                            <input required="" name="image" id="image" placeholder="image" type="file"
                                                   class="form-control" value="">
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
                                        <label for="price" class="col-md-3 text-md-right col-form-label">Price</label>
                                        <div class="col-md-9 col-xl-8">
                                            <input required="" name="price" id="price" placeholder="price" type="number"
                                                   class="form-control" value="">
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="album" class="col-md-3 text-md-right col-form-label">Album</label>
                                        <div class="col-md-9 col-xl-8">
                                            <select required="" name="album_id" id="album_id" class="form-control">
                                                <option value="">-- album --</option>
                                                <?php foreach($albums as $album): ?>
                                                <option value="<?php echo $album['id'] ?>">
                                                <?php echo $album['name'] ?>
                                                </option>
                                               <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="singer" class="col-md-3 text-md-right col-form-label">Singer</label>
                                        <div class="col-md-9 col-xl-8">
                                            <select required="" name="singer_id" id="singer_id" class="form-control">
                                                <option value="">-- singer --</option>
                                                <?php foreach($singers as $singer): ?>
                                                <option value="<?php echo $singer['id'] ?>">
                                                <?php echo $singer['name'] ?>
                                                </option>
                                               <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="genre" class="col-md-3 text-md-right col-form-label">Genre</label>
                                        <div class="col-md-9 col-xl-8">
                                            <select required="" name="genre_id" id="genre_id" class="form-control">
                                                <option value="">-- genre --</option>
                                                <?php foreach($genres as $genre): ?>
                                                <option value="<?php echo $genre['id'] ?>">
                                                <?php echo $genre['name'] ?>
                                                </option>
                                               <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group mb-1">
                                        <div class="col-md-9 col-xl-8 offset-md-2">
                                            <a href="?controller=song&action=index&admin=1"
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

