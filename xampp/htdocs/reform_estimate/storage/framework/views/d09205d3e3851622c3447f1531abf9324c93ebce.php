<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>営業者一覧画面</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/managerindex1.css')); ?>">
</head>
<body>
    <div>
        <h1 style="text-align: center; margin:10px">営業者一覧画面</h1>
    </div>
    <form action="<?php echo e(route('salesperson.index')); ?>" method="GET" class="form-inline">
        <div class="form-group d-flex align-items-center">
            <input type="search" name="search" class="form-control search-box-margin me-2" placeholder="検索して下さい"
                value="<?php echo e(request()->input('search')); ?>">
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
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->department_name); ?></td>
                        <td>
                            <a href="<?php echo e(route('salesperson.edit', $user->id)); ?>" class="btn btn-dark">編集</a>

                            <form action="<?php echo e(route('salesperson.destroy', $user->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                            </form>
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
<?php /**PATH C:\xampp\htdocs\reform_estimate\resources\views/manager_index/index.blade.php ENDPATH**/ ?>