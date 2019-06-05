<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Posts dos cargos

    <div class="pull-right"><?php echo $this->Html->link(__('Novo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('Lista'); ?></h3>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">


                <div class="input-group-btn">

                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>

                  <th scope="col"><?= $this->Paginator->sort('staff_id',['label' => 'Cargo']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('body',['label' => 'Texto']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo',['label' => 'Foto']) ?></th>
                  <th scope="col" class="actions text-center"><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($staffPosts as $staffPost): ?>
                <tr>

                  <td><?= $staffPost->has('staff') ? $this->Html->link($staffPost->staff->staff, ['controller' => 'Staffs', 'action' => 'view', $staffPost->staff->id]) : '' ?></td>
                  <td><?= h($staffPost->titulo) ?></td>
                    <td><?= h($staffPost->body) ?></td>
                  <td><?= h($staffPost->photo) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $staffPost->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $staffPost->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $staffPost->id], ['confirm' => __('Tem certeza que deseja excluir # {0}?', $staffPost->staff->staff), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
          <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                  <?php echo $this->Paginator->numbers(); ?>
              </ul>
          </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>