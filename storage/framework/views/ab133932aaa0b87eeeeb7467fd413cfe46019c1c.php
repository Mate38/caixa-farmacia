<?php $__env->startSection('content'); ?>
  <h2>Cadastro de Cliente<h2>
  <hr />

  <?php echo e(Form::model($cliente, array('route'=>array('clientes.store')))); ?>

    
    <?php echo e(Form::label('nome', 'Nome:')); ?>

    </br>
    <?php echo e(Form::text('nome')); ?>

    </br>
    <?php echo e(Form::label('cpf', 'CPF:')); ?> 
    </br>
    <?php echo e(Form::text('cpf')); ?>

    </br>
    <?php echo e(Form::label('endereco', 'Endereço:')); ?>

    </br>
    <?php echo e(Form::text('endereco')); ?>

   

    <?php echo e(Form::submit('Salvar', array('class' => 'btn btn-success'))); ?>


  <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>