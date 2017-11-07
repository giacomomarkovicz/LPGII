<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div 
                    class="panel-heading">Lista de Produtos
                    <a class="pull-right" href="<?php echo e(route('produtos.create')); ?>">Novo Produto</a>
                </div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    
                    <div class="x_content">
                    <table class="table">
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                      </tr>
                      <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($produto->id); ?></td>
                          <td><?php echo e($produto->nome); ?></td>
                          <td>R$<?php echo e($produto->valor); ?></td>
                          <td><?php echo e($produto->categoria); ?></td>
                        <td>
                            <a href="<?php echo e(URL::to('produtos/' . $produto->id . '/show')); ?>" class="btn btn-xs btn-primary">
                              <i class="fa fa-eye"></i>Detalhes
                            </a>
                            <a href="<?php echo e(URL::to('produtos/' . $produto->id . '/edit')); ?>" class="btn btn-xs btn-warning">
                              <i class="fa fa-pencil"></i>Editar
                            </a>
                            <a href="" class="btn btn-xs btn-danger">
                              <i class="fa fa-trash"></i>Excluir
                            </a>
                        </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>                    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>