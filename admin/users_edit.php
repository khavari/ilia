<?php require 'app/core.php'; ?>
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
            <h1>Edit user</h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit user: name family</h3>
                            <div class="box-tools"></div>
                        </div>
                        <form action="<?=current_url();?>" method="post">
                            <div class="box-body no-padding">

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                               value="<?=user($id, 'name');?>" required autofocus>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="family">Family</label>
                                        <input type="text" name="family" class="form-control" id="family"
                                               value="<?=user($id, 'family');?>" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" name="gender" id="gender" required>
                                            <option value="male" <?php echo (user($id,
                                                    'gender') == 'male') ? 'selected' : ''; ?>>Male
                                            </option>
                                            <option value="female" <?php echo (user($id,
                                                    'gender') == 'female') ? 'selected' : ''; ?>>Female
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="email">Email</label>
                                        <input type="email" name="email"
                                               class="form-control" id="email" value="<?=user($id, 'email');?>"
                                               required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="role">Role</label>
                                        <select class="form-control" name="role" id="role" required>
                                            <option value="admin" <?php echo (user($id,
                                                    'role') == 'admin') ? 'selected' : ''; ?>>Admin
                                            </option>
                                            <option value="user" <?php echo (user($id,
                                                    'role') == 'user') ? 'selected' : ''; ?>>User
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="mobile">Mobile</label>
                                        <input type="text" name="mobile" class="form-control" id="mobile"
                                               value="<?=user($id, 'mobile');?>" placeholder="09">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control" id="address"
                                               value="<?=user($id, 'address');?>">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" id="status" required>
                                            <option value="1" <?php echo (user($id,'status') == '1') ? 'selected' : ''; ?>>Active</option>
                                            <option value="0" <?php echo (user($id,'status') == '0') ? 'selected' : ''; ?>>Disable</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="box-footer">
                                <input type="submit" name="user_edit" class="btn btn-md btn-flat btn-success" value="Update">
                                <a href="users.php" class="btn btn-md btn-flat btn-primary">Back</a>
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
