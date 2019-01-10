<?php require 'app/core.php'; ?>
<?php (! is_admin()) ? header('Location: login.php') : null; ?>
<?php $id = (isset($_GET['id']) && exist_user($_GET['id'])) ? $_GET['id'] : header('Location: users.php'); ?>
<!DOCTYPE html>
<html>
<?php include_once 'master/head.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include_once 'master/header.php'; ?>
    <?php include_once 'master/sidebar.php'; ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>View user details</h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Users List</h3>
                        </div>
                        <div class="box-body no-padding">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 200px;">ID:</th>
                                    <td><?=$id;?></td>
                                </tr>
                                <tr>
                                    <th>Name:</th>
                                    <td><?=user($id, 'name');?></td>
                                </tr>
                                <tr>
                                    <th>Family:</th>
                                    <td><?=user($id, 'family');?></td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td><?=user($id, 'gender');?></td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td><?=user($id, 'email');?></td>
                                </tr>
                                <tr>
                                    <th>Role:</th>
                                    <td><?=user($id, 'role');?></td>
                                </tr>
                                <tr>
                                    <th>Mobile:</th>
                                    <td><?=user($id, 'mobile');?></td>
                                </tr>
                                <tr>
                                    <th>Address:</th>
                                    <td><?=user($id, 'address');?></td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td><?=user($id, 'status');?></td>
                                </tr>
                                <tr>
                                    <th>Created at:</th>
                                    <td><?=user($id, 'created_at');?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="box-footer">
                            <a href="users.php" class="btn btn-md btn-flat btn-primary">Back</a>
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
