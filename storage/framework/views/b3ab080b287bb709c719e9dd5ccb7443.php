<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Birth Date</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $dataSiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($siswa->id); ?></td>
                    <td><?php echo e($siswa->name); ?></td>
                    <td><?php echo e($siswa->email); ?></td>
                    <td><?php echo e($siswa->address); ?></td>
                    <td><?php echo e($siswa->birth_date); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\aplikasi_sekolah_namasiswa\resources\views/data_siswa/index.blade.php ENDPATH**/ ?>