<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href="<?php echo e(asset('css/theme.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet">
    <?php echo $__env->yieldContent('style'); ?>
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
    <!-- header logo: top header -->
    <?php echo $__env->make('layouts.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar, sideNav -->
        <?php echo $__env->make('layouts.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <?php echo $__env->yieldContent('title'); ?>

            <!-- Main content -->
            <section class="content">
                <?php echo $__env->make('layouts.common.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->

    <script src="<?php echo e(asset('js/theme.js')); ?>"></script>
    <script src="<?php echo e(asset('AdminLTE/js/plugins/slimScroll/jquery.slimscroll.js')); ?>"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.alert').delay(9000).fadeOut(1000);
            $('select').select2();
        });
    </script>

    <?php echo $__env->yieldContent('script'); ?>

</body>
</html>
