<?php $__env->startSection('content'); ?>
<h1>Atualização saldo</h1>
<hr />
<?php 
  $valor = 0.0;
?>
<table class="table table-bordered">
  <tr>
  <th>Nome</th>
  <th>CPF</th>
  <th>Endereço</th>
  <th>Saldo</th>
  </tr>
    <tr>
      <td><?php echo e($cliente -> nome); ?></td>
      <td><?php echo e($cliente -> cpf); ?></td>
      <td><?php echo e($cliente -> endereco); ?></td>
      <td><?php echo e($cliente -> saldo); ?></td>
    </tr>
  </table>

<table class="table table-bordered">
  <tr>
  <th>Valor Da Operação</th>
  <th>Creditar</th>
  <th>Debitar</th>
  </tr>
    <tr>
    <?php echo e(Form::open(array('url' => "clientes/transacao/$cliente->idclientes" ))); ?>

      <td><?php echo e(Form::text('valor', $valor)); ?></td>
      <td>
        <input class="btn btn-default" arial-label="Mostrar Cliente" type="submit" name="creditar" value="creditar">

        </input></td>
         <td><input class="btn btn-default"
          arial-label="Mostrar Cliente" type="submit" name="debitar" value="debitar">
        </input></td>

        <?php echo e(Form::close()); ?>

    </tr>
  </table>

<a href="/" class="btn btn-success pull-right"
arial-label="Menu Principal">Menu Principal
</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>