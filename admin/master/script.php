<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/fastclick.js"></script>
<script src="./assets/js/jquery.slimscroll.min.js"></script>
<script src="./assets/js/adminlte.min.js"></script>
<script src="./assets/js/demo.js"></script>
<script src="./assets/js/sweetalert.min.js"></script>
<?php if (has_message('success')): ?>
    <script>
      swal({
        icon: 'success',
        text: "<?=get_message('success');?>",
        button: false,
      })
    </script>
<?php elseif (has_message('error')): ?>
    <script>
      swal({
        icon: 'error',
        text: "<?=get_message('error');?>",
        button: false,
      })
    </script>
<?php endif; ?>
