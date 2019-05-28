<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Equipe

    <div class="pull-right"><?php echo $this->Html->link(__('Novo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('name', ['label' => 'Nome']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('cargo', ['label' => 'Cargo']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('resumo', ['label' => 'Resumo']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('body', ['label' => 'Texto']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo', ['label' => 'Foto']) ?></th>
                  <th scope="col" class="actions text-center"><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($teams as $team): ?>
                <tr>
                  <td><?= $this->Number->format($team->id) ?></td>
                  <td><?= h($team->name) ?></td>
                  <td><?= h($team->cargo) ?></td>
                  <td><?= h($team->resumo) ?></td>
                  <td><?= h($team->body) ?></td>
                  <td><?= h($team->photo) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $team->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $team->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $team->id], ['confirm' => __('Tem certeza que deseja excluir # {0}?', $team->name), 'class'=>'btn btn-danger btn-xs']) ?>
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