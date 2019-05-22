<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Quem Somos

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
                  <th scope="col"><?= $this->Paginator->sort('title', ['label' => 'Titulo']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('body', ['label' => 'Texto']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo', ['label' => 'Imagem']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created', ['label' => 'Criado em:']) ?></th>
                  <th scope="col" class="actions text-center"><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($about as $about): ?>
                <tr>
                  <td><?= $this->Number->format($about->id) ?></td>
                  <td><?= h($about->title) ?></td>
                  <td><?= h($about->body) ?></td>
                  <td><?= h($about->photo) ?></td>
                  <td><?= h($about->created) ?></td>
                  <td class="actions text-right">

                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $about->id], ['class'=>'btn btn-warning btn-xs']) ?>

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