<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mission $mission
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Nossa Missao
      <small><?php echo __('Editar'); ?></small>
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
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($mission, ['type' => 'file']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('title');
                echo $this->Form->control('body',['id' => 'editor', 'label' => 'Titulo']);
                echo $this->Form->control('photo',['type' => 'file', 'label' => 'Imagem']);
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Alterar')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>

<?php $this->start('scriptBottom'); ?>

<?php echo $this->Html->script([
'ckeditor/ckeditor',
'ckeditor/translations/pt-br',
]); ?>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) ).then( editor => {  } ).catch( error => { } );
</script>
<?php  $this->end(); ?>
