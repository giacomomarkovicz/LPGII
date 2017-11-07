<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div 
                    class="panel-heading">Cadastro de Produtos
                    <a class="pull-right" href="<?php echo e(route('produtos.index')); ?>">Lista de Produtos</a>
                </div>

                <div class="panel-body">
                   <?php echo Form::open(['url' => route('produtos.store')]); ?>

                   
                   <?php echo Form::input('text' , 'nome' , '',['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']); ?>

                   <?php echo Form::input('text' , 'valor' , '',['class' => 'form-control', 'placeholder' => 'Valor']); ?>

                   <?php echo Form::input('text' , 'categoria' , '',['class' => 'form-control', 'placeholder' => 'Categoria']); ?>

                   <?php echo Form::submit('Salvar',['class'=>'btn-primary']); ?>

                   
                   <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>