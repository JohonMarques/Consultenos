<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Nossa Missão
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
              <div class="input-group input-group-sm" style="width: 150px;">

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
                  <th scope="col"><?= $this->Paginator->sort('title', ['label' => 'Titulo']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('body', ['label' => 'Texto']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo', ['label' => 'Foto']) ?></th>

                  <th scope="col" class="actions text-center"><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($mission as $mission): ?>
                <tr>
                  <td><?= $this->Number->format($mission->id) ?></td>
                  <td><?= h($mission->title) ?></td>
                  <td><?= ($mission->body) ?></td>
                  <td><?= h($mission->photo) ?></td>
                  <td class="actions text-right">

                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $mission->id], ['class'=>'btn btn-warning btn-xs']) ?>

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