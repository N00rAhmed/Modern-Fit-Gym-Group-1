<!DOCTYPE html>
<html lang="en">
<head>

<style>
table {
    
  font-family: arial, sans-serif;
}

td, th {

  border: 1px solid #000000;
}

tr:nth-child(even) {

}
</style>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('../css/regime.css')); ?>">

    <title>Regime</title>
</head>
<body>
    <header>
        <nav>
            <img class="navbar-logo" src="../Images/logo.png" height="100px" width="100px" />
            <h2>Modern FIT Gym Trainer Page</h2>
            <a href="/trainer">Trainer Home</a>
            <a href="/viewDiary">View Diary</a>
            <a href="/regime">Regime (crud functionality)</a>
        </nav>
    </header>

    <main>
        <h1>Yo Trainer this is Regime (CRUD Operation)</h1>

        <h2>Regime Nutritional Plan + Exercise Plan</h2>
        <p>make nutrion plan be on left side and excerise plan be on right side. try not to make it in columns</p>

        <h2>Nutritional Plan</h2>

            <input type="text" name="name" id="name" placeholder="name" />
            <input type="text" name="weight" id="weight" placeholder="weight" />
            <input type="text" name="calorie_amount" id="calorie_amount" placeholder="calorie amount" />
            <input type="text" name="fat" id="fat" placeholder="fat" />
            <input type="text" name="sugar" id="sugar" placeholder="sugar" />
            <input type="text" name="vitamins" id="vitamins" placeholder="vitamins" />
            <button type="submit">Create Nutrition</button>

        <h2>Workout Plan</h2>
        <form action="<?php echo e(route('workout.submit')); ?>" method="post">
            <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
            <input type="text" name="id" id="id" placeholder="id" />

            <input type="text" name="exercise_name" id="exercise_name" placeholder="exercise name" />
            <input type="text" name="exercise_type" id="exercise_type" placeholder="exercise type" />
            <input type="text" name="description" id="description" placeholder="description" />
            <input type="text" name="amount" id="amount" placeholder="amount" />
            <button type="submit">Create Workout</button>
        </form>


<table>
  <tbody>
    <?php if(is_array($data) || is_object($data)): ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <table>
            <thead>
                <tr>
                    <th>Member_ID</th>
                    <th>Exercise_Name</th>
                    <th>Excercise_Type</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($data) || is_object($data)): ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td>
                    <?php echo e($data1->Member_ID); ?></td>
                    <td><?php echo e($data1->Exercise_Name); ?></td>
                    <td><?php echo e($data1->Excercise_Type); ?></td>
                    <td><?php echo e($data1->Description); ?></td>
                    <td><?php echo e($data1->Amount); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <tr>
                    <td colspan="8">No data available</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
                    </form>
                </td>
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

    <footer>

    </footer>
</body>
</html><?php /**PATH C:\Users\noora\OneDrive\Desktop\LARAVEL\Modern-Fit-Gym\Modern-Fit-Gym-Laravel\resources\views/regime.blade.php ENDPATH**/ ?>