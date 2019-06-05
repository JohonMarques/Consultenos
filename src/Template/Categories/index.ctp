<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Categorias

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

            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('name',['label' => 'Nome']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created',['label' => 'Criado em:']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified',['label' => 'Modificado em:']) ?></th>
                  <th scope="col" class="actions text-center"><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($categories as $category): ?>
                <tr>
                  <td><?= h($category->name) ?></td>
                  <td><?= h($category->created) ?></td>
                  <td><?= h($category->modified) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $category->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $category->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $category->id], ['confirm' => __('Tem certeza que quer excluir # {0}?', $category->name), 'class'=>'btn btn-danger btn-xs']) ?>
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