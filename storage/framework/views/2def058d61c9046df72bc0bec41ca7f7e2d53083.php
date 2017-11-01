<?php $__env->startSection('content'); ?>

  <div class="row fixarTopo">
<h1>Clientes</h1>
<hr />

<a href="/home" class="btn btn-success pull-right">
  Menu Principal
</a>

<a href="/clientes/create" class="btn btn-info pull-right" style="margin-right: 10px">
  Cadastrar Cliente
</a>
  <br />
  <br />
  <br />
</div>

<div class="row">
  <?php if(Session::has('message')): ?>
    <div class="alert alert-success">
      <em> <?php echo session('message'); ?></em>
      </div>
  <?php endif; ?>

<table class="table table-bordered">
  <tr>
  <th>ID</th>
  <th>Nome</th>
  <th>CPF</th>
  <th>Endereço</th>
   <th>Saldo</th>
  <th>Atualizar Cadastro</th>
  <th>Deletar Cliente</th>
  </tr>

    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($cliente -> idclientes); ?></td>
      <td><?php echo e($cliente -> nome); ?></td>
      <td><?php echo e($cliente -> cpf); ?></td>
      <td><?php echo e($cliente -> endereco); ?></td>
      <td>
        <a href="/clientes/<?php echo e($cliente->idclientes); ?>" class="btn btn-default"
          arial-label="Mostrar Cliente">
          <span class="glyphicon glyphicon-eye-open"
          arial-hidden="true"></span>
        </a>
      </td>
      <td>
        <a href="/clientes/<?php echo e($cliente->idclientes); ?>/edit" class="btn btn-default"
          arial-label="Editar Cliente">
          <span class="glyphicon glyphicon-pencil"
          arial-hidden="true"></span>
        </a>
      </td>
      <td>
      <?php echo e(Form::open( array('url' => "clientes/$cliente->idclientes") )); ?>

          <?php echo e(Form::hidden('_method', 'DELETE')); ?>

          <?php echo e(Form::button('<span class="glyphicon glyphicon-trash"></span>', array('class' => 'btn btn-warning', 'type' => 'submit'))); ?>

      <?php echo e(Form::close()); ?>

      </td>
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>