<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Banners

    <div class="pull-right"><?php echo $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('List'); ?></h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>

                  <th scope="col"><?= $this->Paginator->sort('Título') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Subtítulo') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Imagem') ?></th>

                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($banners as $banner): ?>
                <tr>

                  <td><?= h($banner->title) ?></td>
                  <td><?= h($banner->subtitle) ?></td>
                    <td><?= $this->Html->image($banner->photo, array('width'=>'200px')) ?></td>

                  <td class="actions text-right">
                      <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $banner->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $banner->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $banner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>