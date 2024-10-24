<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>見積書作成画面</title>
    <link rel="stylesheet" href='css/cover_index.css'>
  </head>
  <body>
    <div>
      <h1>見積書作成</h1>
      <p>各項目を入力・選択後、登録ボタン押下してください。</p>
    </div>
    <div id="estimate">
      <form id="estimate" method="post" action="<?php echo e(route('estimate.store')); ?>">
          <?php echo csrf_field(); ?>
          <table>
            <tr>
              <th>お客様名</th>
              <td>
                <input id="customer_name" type="text" name="customer_name" required>
              </td>
            </tr>
            <tr>
              <th>担当者名</th>
              <td>
                <input id="charger_name" type="text" name="charger_name" required>
              </td>
            </tr>
            <tr>
              <th>件名</th>
              <td>
                <input id="subject_name" type="text" name="subject_name" required>
              </td>
            </tr>
            <tr>
              <th>納入場所</th>
              <td>
                <input id="delivery_place" type="text" name="delivery_place" required>
              </td>
            </tr>
            <tr>
              <th>工期</th>
              <td>
                <input id="construction_period" type="text" name="construction_period" required>
              </td>
            </tr>
            <tr>
              <th>支払方法</th>
              <td>
              <select id="payment_type" type="text" name="payment_type" required>
                <option>現金</option>
                <option>信販</option>
              </select>
              </td>
            </tr>
            <tr>
              <th>有効期限</th>
              <td>
                <input id="expiration_date" type="text" name="expiration_date" required>
              </td>
            </tr>
            <tr>
              <th>備考</th>
              <td>
                <textarea id="remarks" type="text" name="remarks"></textarea>
              </td>
            </tr>
            <tr>
              <th>部署名</th>
              <td>
                <input id="department_name" type="text" name="department_name" required>
              </td>
            </tr>
            <tr>
              <th>工事名</th>
              <td>
                <select id="construction_id" type="text" name="construction_id" required>
                  <?php $__currentLoopData = $construction_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $construction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value=<?php echo e($construction ->construction_id); ?><?php if($construction->construction_name === $construction): ?> selected <?php endif; ?>><?php echo e($construction->construction_name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </td>
            </tr>
          </table>
          <button id="btn1" type="submit">登録</button>
      </form>
    </div>
    <div id="btn2">
        <form action="<?php echo e(route('salesperson_menu')); ?>" method="GET">
            <?php echo csrf_field(); ?>
            <button id="btn">営業者メニュー</button>
        </form>
    </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\reform_estimate\resources\views/cover/index.blade.php ENDPATH**/ ?>