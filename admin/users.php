<?php require 'app/core.php'; ?>
<?php (! is_admin()) ? header('Location: login.php') : null; ?>
<!DOCTYPE html>
<html>
<?php include_once 'master/head.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include_once 'master/header.php'; ?>
    <?php include_once 'master/sidebar.php'; ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Users</h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><a href="users_create.php">Submit a new user</a></h3>
                        </div>
                        <div class="box-body no-padding table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Mobile</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <?php foreach (get_users() as $user): ?>
                                    <tr class="<?= (is_updated($user['updated_at'])) ? 'updated' : ''; ?>">
                                        <td><?=$user['id'];?></td>
                                        <td><?=$user['name'];?> <?=$user['family'];?></td>
                                        <td><?=$user['email'];?></td>
                                        <td><?=$user['role'];?></td>
                                        <td><?=$user['mobile'];?></td>
                                        <?php if($user['status']): ?>
                                            <td><i class="fa fa-circle text-green"></i></td>
                                        <?php else: ?>
                                            <td><i class="fa fa-circle-o text-red"></i></td>
                                        <?php endif; ?>
                                        <td>

                                            <a href="users_edit.php?id=<?=$user['id'];?>" class="btn btn-success btn-xs">Edit</a>
                                            <a href="users_view.php?id=<?=$user['id'];?>" class="btn btn-primary btn-xs">View</a>
                                            <form action="<?=current_url();?>" class="delete" method="post" style="display: inline-block">
                                                <input type="hidden" name="user_id" value="<?=$user['id'];?>">
                                                <button type="submit" name="user_delete" class="btn btn-danger btn-xs">Delete</button>
                                            </form>

                                            <form action="<?=current_url();?>" method="post" style="display: inline-block">
                                                <input type="hidden" name="user_id" value="<?=$user['id'];?>">
                                                <button type="submit" name="send_sms" class="btn btn-danger btn-xs">SMS</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
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
