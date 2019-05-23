<section class="content-header">
  <h1>
    Cargos
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
            <dt scope="row">Cargo</dt>
            <dd><?= h($staff->staff) ?></dd>
            <dt scope="row">Categoria</dt>
            <dd><?= $staff->has('category') ? $this->Html->link($staff->category->name, ['controller' => 'Categories', 'action' => 'view', $staff->category->id]) : '' ?></dd>
            <dt scope="row">Foto</dt>
            <dd><?= h($staff->photo) ?></dd>
            <dt scope="row">Texto</dt>
            <dd><?= h($staff->body) ?></dd>
            <dt scope="row">Id</dt>
            <dd><?= $this->Number->format($staff->id) ?></dd>
            <dt scope="row">Criado em:</dt>
            <dd><?= h($staff->created) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Posts') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($staff->staff_posts)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Titulo</th>
                    <th scope="col" style="width: 10%;">Texto</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Criado em:</th>
                    <th scope="col" class="actions text-center">Ações</th>
              </tr>
              <?php foreach ($staff->staff_posts as $staffPosts): ?>
              <tr>
                    <td><?= h($staffPosts->id) ?></td>
                    <td><?= h($staff->staff) ?></td>
                    <td ><?= h($staffPosts->titulo) ?></td>
                    <td <?= h($staffPosts->body) ?></td>
                    <td><?= h($staffPosts->photo) ?></td>
                    <td><?= h($staffPosts->created) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('Detalhes'), ['controller' => 'StaffPosts', 'action' => 'view', $staffPosts->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Editar'), ['controller' => 'StaffPosts', 'action' => 'edit', $staffPosts->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Excluir'), ['controller' => 'StaffPosts', 'action' => 'delete', $staffPosts->id], ['confirm' => __('Tem certeza que deseja excluir # {0}?', $staffPosts->titulo), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
