<?php require 'app/core.php'; ?>
<!DOCTYPE html>
<html>
<?php include_once 'master/head.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include_once 'master/header.php'; ?>
    <?php include_once 'master/sidebar.php'; ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Submit a new content</h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">New content</h3>
                            <div class="box-tools"></div>
                        </div>
                        <form role="form" action="" method="post" enctype="multipart/form-data">
                            <div class="box-body no-padding">

                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" class="form-control" id="slug" required
                                               autofocus>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label for="summary">Summary</label>
                                        <textarea name="summary" class="form-control" id="summary" rows="2"
                                                  required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label for="body">Body</label>
                                        <textarea name="body" class="form-control" id="body" rows="5"
                                                  required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label for="keywords">Keywords</label>
                                        <input type="text" name="keywords" class="form-control" id="keywords" required>
                                    </div>
                                </div>

                            </div>
                            <div class="box-footer">
                                <button type="submit" name="content_create" class="btn btn-md btn-flat btn-success">
                                    Submit
                                </button>
                                <a href="contents.php" class="btn btn-md btn-flat btn-primary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include_once 'master/footer.php'; ?>
</div>
<?php include_once 'master/script.php'; ?>
</body>
</html>
