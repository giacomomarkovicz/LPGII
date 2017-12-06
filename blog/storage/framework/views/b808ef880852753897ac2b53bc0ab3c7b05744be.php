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
                    
                   <?php echo e(Form::model($produtos, array('route' => array('produtos.update', $produtos->id), 'method' => 'PUT'))); ?>

                   
                   <?php echo Form::input('text' , 'nome' , null ,['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']); ?>

                   <?php echo Form::input('text' , 'valor' , null ,['class' => 'form-control', 'placeholder' => 'Valor']); ?>

                   <?php echo Form::input('text' , 'categoria' , null ,['class' => 'form-control', 'placeholder' => 'Categoria']); ?>

                                     
                
                <div class="panel-body">
                    
                   <?php echo Form::submit('Salvar',['class'=>'btn-primary btn btn-md']); ?>

                   <a href="<?php echo e(route('produtos.index')); ?>" class="btn btn-md btn-warning">Voltar</a>
                   <?php echo Form::close(); ?>

                   
                </div>   
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>