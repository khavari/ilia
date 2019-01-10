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
            <h1>View content details</h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Content details</h3>
                        </div>
                        <div class="box-body no-padding">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 200px;">ID:</th>
                                    <td>121</td>
                                </tr>
                                <tr>
                                    <th>Slug:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Title:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Summary:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Body:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Keywords:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Image:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Views:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Created at:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Updated at:</th>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                        <div class="box-footer">
                            <a href="contents.php" class="btn btn-md btn-flat btn-primary">Back</a>
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
