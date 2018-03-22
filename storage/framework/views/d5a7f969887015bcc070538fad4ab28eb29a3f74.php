<?php $__env->startSection('htmlheader_title'); ?>
	<?php echo e(trans('adminlte_lang::message.interno')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title', 'INTERNATIONAL VISIT REQUEST FORM - INTERNAL'); ?>

<?php $__env->startSection('contentheader_description','Formulario de Visita internacional - Interno'); ?>

<?php $__env->startSection('main-content'); ?>

<?php if($message = Session::get('success')): ?>

		<div class="alert alert-success">

				<p><?php echo e($message); ?></p>

		</div>

<?php endif; ?>
<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-12">
      <!-- Box opciones menú izq -->
      <div class="col-sm-3">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h4 class="box-title">Opciones - Options</h4>
            <div class="box-tools pull-right">
              <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button> -->
            </div>
          </div>
          <div class="box-body">
						<a href="<?php echo e(route('formin.create')); ?>" class="btn btn-app">
							<i class="fa fa-plus"></i>
							<?php echo e(trans('adminlte_lang::message.newform')); ?>

						</a>
						<a href="#" class="btn btn-app">
							<i class="fa fa-edit"></i>
							<!--<?php echo e(trans('adminlte_lang::message.editform')); ?> -->
							Edit
						</a>
						<a href="#" class="btn btn-app">
							<i class="fa fa-recycle"></i>
							Reutilizar
						</a>
						<a href="#" class="btn btn-app">
							<i class="fa fa-file-pdf-o"></i>
							Imprimir
						</a>

          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <!-- /.box opciones menú -->

      <!-- Box historial der.-->
      <div class="col-sm-9">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h4 class="box-title">Últimos Formulaios - Latest forms</h4>
            <div class="box-tools pull-right">
              <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button> -->
            </div>
          </div>
          <div class="box-body">
            <table id="last" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Fecha Ingreso</th>
                  <th>Destino</th>
                  <th>Fecha Viaje</th>
                  <th>Académico/Colaborador</th>
                </tr>
              </thead>
							<tbody>
								<?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($form->created_at); ?></td>
									<td><?php echo e($form->institucion_anf); ?></td>
									<td><?php echo e($form->fecha_ida); ?></td>
									<td><?php echo e($form->nombre); ?></td>
									<td>
										<a class="btn btn-info btn-xs" href="<?php echo e(route('formin.edit',$form->id)); ?>"><i class="fa fa-file-pdf-o"></i></a>
										<a class="btn btn-info btn-xs" href="<?php echo e(route('formin.edit',$form->id)); ?>"><i class="fa fa-edit"></i></a>
										<a class="btn btn-info btn-xs" href="<?php echo e(route('formin.edit',$form->id)); ?>"><i class="fa fa-recycle"></i></a>

									</td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
            </table>
          </div>
          <!-- /.box-body -->
				<!--	<div class="box-footer text-center">
						<a href="#" class="uppercase">View All Forms - Ver Todos los Formularios</a>
					</div>
        </div> -->
      </div>
      <!-- /.box historial der. -->

    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>