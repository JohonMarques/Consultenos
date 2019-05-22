<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Event
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
          <?php echo $this->Form->create($event, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('name');
                echo $this->Ck->input('text');?>
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
<style>
    .help {
        width: 40px;
        margin: 0 auto;
    }

    .help .question {
        height: 40px;
        width: 40px;
        background: #ccc;
        font-size: 32px;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        cursor: pointer;
    }

    .help .popup, .help .popup2 {
        width: 600px;
        height: 0px;
        text-align: left;
        overflow: hidden;
        position: relative;
        background: #eee;
        opacity: 0;
        transition: 1s;
    }

    .help .popup {
        left: -260px;
        top: 10px;
    }

    .help .popup2 {
        height: 220px;
    }

    .help .popup2 h4 {
        font-size: 18px;
        padding: 10px;
        margin: 0;
    }

    .help:hover .popup {
        opacity: 1;
        height: 270px;
    }

    .help .tell-me p:first-child {
        color: #317eac;
        cursor: pointer;
    }

    .tell-me {
        width: 150px;
    }

    .help .tell-me:hover .popup2 {
        top: -220px;
        opacity: 1;
    }

    .help .popup h3 {
        margin: 0;
        padding: 10px 0 0 10px;
        height: 30px;
        background: #555;
        color: #fff;
        font-weight: 400;
        font-size: 18px;
    }

    .help .popup p {
        font-size: 16px;
        padding: 10px;
        margin: 0;
    }

    .help .popup .popup2 .sub-levels {
        padding: 0 0 10px 140px;
    }

    .help .popup .popup2 .sub-levels strong {
        font-size: 20px;
    }

    .help .popup .popup2 p:nth-child(5) {
        padding: 20px 0 0 10px;
    }

    .help .popup a {
        text-decoration: none;
        color: #317eac;
    }

    .help .popup a:visited {
        color: #317eac;
    }

    .help .popup p em {
        font-size: 12px;
    }
</style>
