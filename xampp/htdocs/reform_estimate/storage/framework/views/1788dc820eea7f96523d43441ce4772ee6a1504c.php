<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>営業者登録画面</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/register.css')); ?>">
</head>

<body>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <h1>営業者登録画面</h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <!-- Form to register salesperson -->

    <div class="form-container">
        <form action="<?php echo e(route('salesperson.create')); ?>" method="POST">

            <?php echo csrf_field(); ?>
            <label for="name">氏名</label>
            <input type="text" id="name" name="name" required>

            <label for="department">部署名</label>
            <select id="department" name="department_name" required>
                
                <option value="本部">本部</option>
                <option value="営業１課１係">営業１課１係</option>
                <option value="営業１課２係">営業１課２係</option>
                <option value="営業１課３係">営業１課３係</option>
                <option value="営業２課１係">営業２課１係</option>
                <option value="営業２課２係">営業２課２係</option>
                <option value="営業３課">営業３課</option>
                <option value=" 契約管理課"> 契約管理課</option>
            </select>

            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" required>

            <label for="password">パスワード</label>
            <input type="password" id="password" name="password" required>

            <!-- Place button container inside the form-container -->
            <div class="button-container">
                <button type="submit">登録</button>
                <button type="button" onclick="window.location.href='<?php echo e(route('manager_menu')); ?>'">管理者<br>メニュー</button>
            </div>
        </form>
    </div>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\reform_estimate\resources\views/salesperson_add/index.blade.php ENDPATH**/ ?>