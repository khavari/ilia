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
                        <form role="form" action="" method="post">
                            <div class="box-body no-padding">

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" required autofocus>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="family">Family</label>
                                        <input type="text" name="family" class="form-control" id="family" required >
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" name="gender" id="gender" required>
                                            <option value="" selected disabled>Select me</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="email">Email</label>
                                        <input type="email" name="email"
                                               class="form-control ltr" id="email" value="" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="password">Password</label>
                                        <input type="password" name="password"
                                               class="form-control" id="password" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="role_id">Role</label>
                                        <select class="form-control" name="role_id" id="role_id" required>
                                            <option value="" selected disabled>Select me</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label for="mobile">Mobile</label>
                                        <input type="text" name="mobile"
                                               class="form-control" id="mobile" value="" placeholder="09">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group ">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control" id="address" value="">
                                    </div>
                                </div>

                            </div>
                            <div class="box-footer">
                                <button type="submit" name="user_create" class="btn btn-md btn-flat btn-success">Submit</button>
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
