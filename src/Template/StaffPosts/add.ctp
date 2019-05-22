<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StaffPost $staffPost
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Staff Post
      <small><?php echo __('Adicionar'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Voltar'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Formulario'); ?></h3>
          </div>
          <!-- /.box-header -->

          <!-- form start -->
          <?php echo $this->Form->create($staffPost, ['type' => 'file']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('staff_id', ['options' => $staffs]);
                echo $this->Form->control('titulo');
                echo $this->Form->control('body', ['label' => 'Texto' ]);
              echo $this->Form->control('photo', ['type' => 'file','label' => 'Foto']);
              ?>
            </div>
            <!-- /.box-body -->


          <?php echo $this->Form->submit(__('Submit')); ?>

          <?php echo $this->Form->end(); ?>

        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>
