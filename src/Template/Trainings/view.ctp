<section class="content-header">
  <h1>
    Treinamento
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
            <dt scope="row">Titulo</dt>
            <dd><?= h($training->title) ?></dd>
            <dt scope="row">Texto</dt>
            <dd><?= h($training->body) ?></dd>
            <dt scope="row">Foto</dt>
            <dd><?= h($training->photo) ?></dd>
            <dt scope="row">Id</dt>
            <dd><?= $this->Number->format($training->id) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
