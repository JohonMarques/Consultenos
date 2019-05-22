<section class="content-header">
  <h1>
    Posts do Cargos
    <small><?php echo __('Detalhes'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Voltar'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Informações'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row">Cargo</dt>
            <dd><?= $staffPost->has('staff') ? $this->Html->link($staffPost->staff->staff, ['controller' => 'Staffs', 'action' => 'view', $staffPost->staff->id]) : '' ?></dd>
            <dt scope="row">Titulo</dt>
            <dd><?= h($staffPost->titulo) ?></dd>
            <dt scope="row">Foto</dt>
            <dd><?= h($staffPost->photo) ?></dd>
            <dt scope="row">Id</dt>
            <dd><?= $this->Number->format($staffPost->id) ?></dd>
            <dt scope="row">Criado em:</dt>
            <dd><?= h($staffPost->created) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Texto') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($staffPost->body); ?>
        </div>
      </div>
    </div>
  </div>
</section>
