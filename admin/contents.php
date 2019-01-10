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
            <h1>Contents</h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><a href="contents_create.php">Submit a new content</a></h3>
                        </div>
                        <div class="box-body no-padding table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Slug</th>
                                    <th>Title</th>
                                    <th>Views</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                                <?php for ($i = 0 ; $i < 10 ;$i++): ?>
                                <tr>
                                    <td><?=$i;?></td>
                                    <td>Slug</td>
                                    <td>Title</td>
                                    <td>0</td>
                                    <td>Created at</td>
                                    <td>
                                        <a href="contents_edit.php?id=0" class="btn btn-success btn-xs">Edit</a>
                                        <a href="contents_view.php?id=0" class="btn btn-primary btn-xs">View</a>
                                        <form action="" method="post" class="inline">
                                            <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endfor; ?>
                            </table>
                        </div>
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
