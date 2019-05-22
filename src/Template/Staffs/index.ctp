<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Cargos

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
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('staff',['label' => 'Cargo']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('category_id',['label' => 'Categoria']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo',['label' => 'Foto']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('body',['label' => 'Texto']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created',['label' => 'Criado em:']) ?></th>
                  <th scope="col" class="actions text-center"><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($staffs as $staff): ?>
                <tr>
                  <td><?= $this->Number->format($staff->id) ?></td>
                  <td><?= h($staff->staff) ?></td>
                  <td><?= $staff->has('category') ? $this->Html->link($staff->category->name, ['controller' => 'Categories', 'action' => 'view', $staff->category->id]) : '' ?></td>
                  <td><?= h($staff->photo) ?></td>
                  <td><?= h($staff->body) ?></td>
                  <td><?= h($staff->created) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Listar'), ['action' => 'view', $staff->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $staff->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $staff->id], ['confirm' => __('Tem certeza que deseja excluir # {0}?', $staff->staff), 'class'=>'btn btn-danger btn-xs']) ?>
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