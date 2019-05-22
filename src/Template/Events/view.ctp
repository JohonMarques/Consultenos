<section class="content-header">
  <h1>
    Event
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Name') ?></dt>
            <dd><?= h($event->name) ?></dd>
            <dt scope="row"><?= __('Url') ?></dt>
            <dd><?= h($event->url) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($event->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($event->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($event->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Text') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($event->text); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Photos Events') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($event->photos_events)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col"><?= __('Photo') ?></th>
                    <th scope="col"><?= __('Photo Dir') ?></th>
                    <th scope="col"><?= __('Event Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($event->photos_events as $photosEvents): ?>
              <tr>
                    <td><?= h($photosEvents->id) ?></td>
                    <td><?= h($photosEvents->created) ?></td>
                    <td><?= h($photosEvents->modified) ?></td>
                    <td><?= h($photosEvents->photo) ?></td>
                    <td><?= h($photosEvents->photo_dir) ?></td>
                    <td><?= h($photosEvents->event_id) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'PhotosEvents', 'action' => 'view', $photosEvents->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'PhotosEvents', 'action' => 'edit', $photosEvents->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'PhotosEvents', 'action' => 'delete', $photosEvents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photosEvents->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
