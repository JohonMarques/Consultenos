<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Video $video
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Video
      <small><?php echo __('Edit'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($video, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('text');
                echo $this->Form->control('title');
              ?>
                <div style="display: inline-flex; width: 100%;">
                    <?php echo $this->Form->control('url', ['style'=>'width: 276%']);?>
                    <div class="help" style="    margin-top: 21px;">

                        <div class="question">?</div>

                        <div class="popup">
                            <h3>Deseja adicionar um vídeo?</h3>
                            <p>Vamos ao <strong>passo a passo:</strong>.</p>
                            <p><strong>1° </strong>Entre no <a href="http://www.youtube.com" target="_blank">Youtube</a> e clique no vídeo que quer adicionar ao site.</p>
                            <p><strong>2° </strong>Coloque o mouse em cima do vídeo e clique com o botão direito.</p>
                            <p><strong>3° </strong>Após isso selecione a opção <strong>Copiar código de incorporação</strong>.</p>
                            <p><strong>4° </strong>Volte aqui e clique com o botão direito do mouse em cima do campo <strong>Url</strong> e selecione <strong>Colar</strong>. Pronto! :)</p>
                        </div>

                    </div>
                </div>
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
