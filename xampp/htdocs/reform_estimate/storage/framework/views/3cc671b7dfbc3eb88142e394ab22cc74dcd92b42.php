<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者メニュー画面</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/menuindex.css')); ?>">
</head>
<body>
    <div class="hero">
        <p>管理者メニュー画面</p>
    </div>

    <div class="button-container">
        <button onclick="window.location='<?php echo e(route('manager_estimate')); ?>'">見積書一覧へ</button>
        <button onclick="window.location='<?php echo e(route('salesperson.add')); ?>'">営業者登録へ</button>
        <button onclick="window.location='<?php echo e(route('manager_menu.index')); ?>'">営業者一覧へ</button>
        <button onclick="window.location='<?php echo e(route('manager_add.index')); ?>'">管理者登録へ</button>
        <button onclick="window.location='<?php echo e(route('admins.index')); ?>'">管理者一覧画面へ</button>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\reform_estimate\resources\views/manager_menu/index.blade.php ENDPATH**/ ?>