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
            <h1>Submit a new user</h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">New user</h3>
                            <div class="box-tools"></div>
                        </div>
                        <form action="<?=current_url();?>" method="post">
                            <div class="box-body no-padding">

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                               value="<?=old('name');?>" required autofocus>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="family">Family</label>
                                        <input type="text" name="family" class="form-control" id="family"
                                               value="<?=old('family');?>" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" name="gender" id="gender" required>
                                            <option value="" selected disabled>Select me!</option>
                                            <option value="male" <?php echo (old('gender') == 'male') ? 'selected' : ''; ?>>
                                                Male
                                            </option>
                                            <option value="female" <?php echo (old('gender') == 'female') ? 'selected' : ''; ?>>
                                                Female
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="email">Email</label>
                                        <input type="email" name="email"
                                               class="form-control" id="email" value="<?=old('email');?>" required>
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
                                            <option value="" selected disabled>Select me!</option>
                                            <option value="admin" <?php echo (old('role') == 'admin') ? 'selected' : ''; ?>>
                                                Admin
                                            </option>
                                            <option value="user" <?php echo (old('role') == 'user') ? 'selected' : ''; ?>>
                                                User
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="mobile">Mobile</label>
                                        <input type="text" name="mobile" class="form-control" id="mobile"
                                               value="<?=old('mobile');?>" placeholder="09">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control" id="address"
                                               value="<?=old('address');?>">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" id="status" required>
                                            <option value="" selected disabled>Select me!</option>
                                            <option value="1" <?php echo (old('status') == '1') ? 'selected' : ''; ?>>
                                                Active
                                            </option>
                                            <option value="0" <?php echo (old('status') == '0') ? 'selected' : ''; ?>>
                                                Disable
                                            </option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="box-footer">
                                <input type="submit" name="user_create" class="btn btn-md btn-flat btn-success"
                                       value="Submit">
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
