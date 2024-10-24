<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者一覧画面</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/managerindex.css')); ?>">
</head>
<body>
    <div>
        <p>管理者一覧画面</p>
    </div>
    <form action="<?php echo e(route('admins.index')); ?>" method="GET" class="form-inline">
        <div class="form-group d-flex align-items-center">
            <input type="search" name="search" class="form-control search-box-margin me-2" placeholder="検索して下さい" value="<?php echo e(request()->input('search')); ?>">
            <button type="submit" class="btn btn-primary custom-margin">検索</button>
        </div>
    </form>

    <div>
        <table>
            <thead>
                <tr>
                    <th>氏名</th>
                    <th>メールアドレス</th>
                    <th>部署名</th>
                    <th>アクション</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $manager_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manager): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($manager->name); ?></td>
                    <td><?php echo e($manager->email); ?></td>
                    <td><?php echo e($manager->department_name); ?></td>
                    <td>
                        <a href="<?php echo e(route('admins.edit', $manager->id)); ?>" class="btn btn-dark">編集</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div class="col-3 custom-margin-bottom" style="margin-top: 20px; margin-right: 20px; text-align: right;">
            <button type="button" onclick="window.location.href='<?php echo e(route('manager_menu')); ?>'" class="btn btn-primary custom-margin custom-border mb-3">管理者メニュー</button>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\reform_estimate\resources\views/admins/index.blade.php ENDPATH**/ ?>