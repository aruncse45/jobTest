<?php $__env->startSection('content'); ?>
<div class="container-fluid app-body">
	
	Recent post sent to buffer

	<input type="text" name="search">
	<input type="date" name="date">
	<select>
		<?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="volvo"><?php echo e($g->type); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  
	</select>
	<br><br>
	<table>
		<tr>
			<th>Group Name</th>
			<th>Group Type</th>
			<th>Account Name</th>
			<th>Post Text</th>
			<th>Time</th>
		</tr>
		<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	
			<tr>
				<td><?php echo e($r->name); ?></td>
				<td><?php echo e($r->type); ?></td>
				<td><?php echo e($r->account_service); ?></td>
				<td><?php echo e($r->status); ?></td>
				<td><?php echo e($r->start_time); ?></td>
			</tr>

    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>

<?php echo e($result->links()); ?>


    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>