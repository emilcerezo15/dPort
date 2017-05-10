<?php
/**
 * Created by PhpStorm.
 * User: emilio.cerezo
 * Date: 5/8/17
 * Time: 8:50 AM
 */
?>

<!DOCTYPE html>

<html lang="<?php echo e(config('app.locale')); ?>">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

        <title>dPort - <?php echo $__env->yieldContent('title'); ?></title>

        <link rel="stylesheet" href="<?php echo e(asset('/css/all.css')); ?>"/>

    </head>

    <body>
        <input id="BASE_URL" type="hidden" value="<?php echo e(URL::to('/')); ?>"/>

        <div class="container full-width">

            <?php echo $__env->yieldContent('content'); ?>

        </div>
    </body>
</html>