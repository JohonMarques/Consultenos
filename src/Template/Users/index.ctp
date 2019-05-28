<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Usuarios

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
                  <th scope="col"><?= $this->Paginator->sort('role_id',['label' => ' Permissão']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('name',['label' => ' Nome']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('username',['label' => ' Usuario']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('email',['label' => ' Email']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('password',['label' => ' Senha']) ?></th>
                  <th scope="col" class="actions text-center"><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
                <tr>
                  <td><?= $this->Number->format($user->id) ?></td>
                  <td><?= $user->has('role') ? $this->Html->link($user->role->role, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                  <td><?= h($user->name) ?></td>
                  <td><?= h($user->username) ?></td>
                  <td><?= h($user->email) ?></td>
                  <td><?= h($user->password) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $user->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $user->id], ['confirm' => __('Tem certeza que deseja excluir o usuario:  # {0}?', $user->name), 'class'=>'btn btn-danger btn-xs']) ?>
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