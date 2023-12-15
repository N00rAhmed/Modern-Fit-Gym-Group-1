<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('../css/diary.css')); ?>">
    <title>My diary</title>
</head>

<body>
    
    <?php $__env->startSection('content'); ?>
    <main>
        <h2>Diary Entry</h2>
        <div class="input">
            <form action="<?php echo e(route('diary.submit')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="text" name="date" id="date" placeholder="Date" />
                <input type="text" name="calorie_intake" id="calorie_intake" placeholder="Calorie Intake" />
                <input type="text" name="supplement_intake" id="supplement_intake" placeholder="Supplement Intake" />
                <input type="text" name="exercise" id="exercise" placeholder="Exercise" />
                <input type="text" name="daily_duration" id="daily_duration" placeholder="Daily Duration" />
                <input type="text" name="notes" id="notes" placeholder="Notes" />
                <button type="submit" class="coloured-button">Add</button>
            </form>
        </div>
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
    </main>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
</body>

</html>

<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\noora\OneDrive\Desktop\LARAVEL\Modern-Fit-Gym\Modern-Fit-Gym-Laravel\resources\views/diary.blade.php ENDPATH**/ ?>