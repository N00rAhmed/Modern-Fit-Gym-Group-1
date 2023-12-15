<!DOCTYPE html>
<html lang="en">
<head>

<style>
table {
    
  font-family: arial, sans-serif;
  /* border-collapse: collapse;
  width: 100%; */
}

td, th {

  border: 1px solid #000000;
  /* text-align: left;
  padding: 8px; */
}

tr:nth-child(even) {

  /* background-color: #dddddd; */
}
</style>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('../css/viewdiary.css')); ?>">

    <title>View Diary</title>
</head>
<body>

  <?php $__env->startSection('content'); ?>

    <main>
        <h1>Yo trainer you can View Diary of member here</h1>
        <h2>Diary</h2>

        <div class="diary-container">
            Diary Information of Member View

            <table>
  <thead>
    <tr>
      <th>Diary_ID</th>
      <th>Member_ID</th>
      <th>Date</th>
      <th>Calorie_Intake</th>
      <th>Supplement_Intake</th>
      <th>Exercise</th>
      <th>Daily_Duration</th>
      <th>Notes</th>
    </tr>
  </thead>
  <tbody>
  <?php if(is_array($data) || is_object($data)): ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($data1->Diary_ID); ?></td>
        <td><?php echo e($data1->Member_ID); ?></td>
        <td><?php echo e($data1->Date); ?></td>
        <td><?php echo e($data1->Calorie_Intake); ?></td>
        <td><?php echo e($data1->Supplement_Intake); ?></td>
        <td><?php echo e($data1->Exercise); ?></td>
        <td><?php echo e($data1->Daily_Duration); ?></td>
        <td><?php echo e($data1->Notes); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <tr>
            <td colspan="8">No data available</td>
        </tr>
    <?php endif; ?>
  </tbody>
</table>
        </div>
    </main>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\noora\OneDrive\Desktop\LARAVEL\Modern-Fit-Gym\Modern-Fit-Gym-Laravel\resources\views/viewDiary.blade.php ENDPATH**/ ?>