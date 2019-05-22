<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Room
        <small><?php echo __('Add'); ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i
                        class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
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
                <?php echo $this->Form->create($room, ['role' => 'form']);
                $wifi = ['S' => 'SIM', 'N' => 'NÃO'];
                $person = ['1' => 'UMA', '2' => 'DUAS', '3' => 'TRES', '4' => 'QUATRO', '5' => 'CINCO'];
                $view = ['CIDADE' => 'CIDADE', 'MAR' => 'MAR']; ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('beds'); ?>
                    <div class="lista"><?php
                        echo $this->Form->control('people', ['options' => $person, 'class' => 'tam_20 lista']);
                        echo $this->Form->control('view', ['options' => $view, 'class' => 'tam_20 lista']);
                        echo $this->Form->control('wifi', ['options' => $wifi, 'class' => 'tam_20 lista']);
                        echo $this->Form->control('price');
                        ?></div>
                    <?php
                    echo $this->Ck->input('details');
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
