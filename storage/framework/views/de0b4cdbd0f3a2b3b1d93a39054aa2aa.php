<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../Styles/workout.css"> -->
    <link rel="stylesheet" href="<?php echo e(asset('../css/workout.css')); ?>">

    <title>Exercise Plan</title>
</head>
<body>
    
    <?php $__env->startSection('content'); ?>

    <main>
    <div class="table-container">
        <fieldset>
        <legend>Form</legend>
        <div>
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter member ID" required/>
        </div>
        <br>
        <div>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter your email" required/>
        </div>
        <br>
        </fieldset>

        <div class="table-with-search">
    <form action="workout_process.php" method="post">
        <table class="table">
            <caption>Workout</caption>
            <tr>
                <th>Member ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td><input type="text" name="member_id" value="Data 1"></td>
                <td><input type="text" name="name" value="Data 2"></td>
                <td><input type="text" name="type" value="Data 3"></td>
                <td><input type="text" name="description" value="Data 4"></td>
                <td><input type="text" name="amount" value="Data 5"></td>

                <?php if(is_array($data) || is_object($data)): ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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


            </tr>
        </table>
    </form>
</div>

<div class="table-with-search">
    <form action="members_process.php" method="post">
        <div class="search-container">
            <input type="text" id="searchBar" name="searchBar" placeholder="Search Members">
        </div>
        <table class="table">
            <caption>Members</caption>
            <tr>
                <th>Member_ID</th>
                <th>First name</th>
                <th>Last name</th>
            </tr>
            <tr>
                <td><input type="text" name="member_id" value="Data 1"></td>
                <td><input type="text" name="first_name" value="Data 2"></td>
                <td><input type="text" name="last_name" value="Data 3"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</div>
    </div>
    </div>
    </main>

    <footer>


    <?php $__env->stopSection(); ?>
    </footer>
</body>
</html>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\noora\OneDrive\Desktop\LARAVEL\Modern-Fit-Gym\Modern-Fit-Gym-Laravel\resources\views/workout.blade.php ENDPATH**/ ?>