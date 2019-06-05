<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Treinamento

    <div class="pull-right"><?php echo $this->Html->link(__('Novo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('title', ['label' => 'Titulo']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('body', ['label' => 'Texto']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo', ['label' => 'Foto']) ?></th>
                  <th scope="col" class="actions text-center"><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($trainings as $training): ?>
                <tr>
                  <td><?= h($training->title) ?></td>
                  <td><?= h($training->body) ?></td>
                  <td><?= h($training->photo) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $training->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $training->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $training->id], ['confirm' => __('Tem certeza que deseja excluir # {0}?', $training->title), 'class'=>'btn btn-danger btn-xs']) ?>
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