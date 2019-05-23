<?php $this->layout = 'AdminLTE.login'; ?>

<!-- /.box-body -->



    <?php echo $this->Form->create(); ?>
    <div class="box-body">
        <?php
        echo $this->Form->control('username',['label' => 'Usuario']);
        echo $this->Form->control('password',['label' => 'Senha']);
        ?>
        <div style="margin: 0 auto;display: block; text-align: center">
        <?php echo $this->Form->button(__('Entrar')); ?>
        </div>
        <?php echo $this->Form->end(); ?>

    </div>

