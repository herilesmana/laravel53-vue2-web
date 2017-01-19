<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<li>Nama saya : <?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></li>
	<li>Alamat saya : <?php echo $user['address']; ?></li><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>