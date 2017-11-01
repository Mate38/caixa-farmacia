<?php $__env->startSection('content'); ?>
  <h2>Edição de Cliente<h2>
  <hr />
  <?php echo e(Form::model($cliente, array('route'=>array('clientes.update', $cliente->idclientes), 'method' => 'PUT'))); ?>

<table class="table table-bordered">
  <tr>
  <th><?php echo e(Form::label('nome', 'Nome:')); ?></th>
  <th>CPF</th>
  </tr>
    <tr>
      <td><?php echo e(Form::text('nome', null, array('class' => 'form=control'))); ?></td>
      <td><?php echo e(Form::text('cpf', null, array('class' => 'form=control'))); ?></td>
  </tr>
  <tr>
  <th>Endereço</th>
  <th>Saldo</th>
  </tr>
    
  <tr>
      <td><?php echo e(Form::text('endereco', null, array('class' => 'form=control'))); ?></td>
      <td><?php echo e(Form::text('saldo', null, array('class' => 'form=control'))); ?></td>
    </tr>
  </table>

    <?php echo e(Form::submit('Salvar', array('class' => 'btn btn-success'))); ?>


  <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>