<section class="content-header">
  <h1>
    Room
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
            <dd><?= h($room->name) ?></dd>
            <dt scope="row"><?= __('Beds') ?></dt>
            <dd><?= h($room->beds) ?></dd>
            <dt scope="row"><?= __('People') ?></dt>
            <dd><?= h($room->people) ?></dd>
            <dt scope="row"><?= __('View') ?></dt>
            <dd><?= h($room->view) ?></dd>
            <dt scope="row"><?= __('Wifi') ?></dt>
            <dd><?= h($room->wifi) ?></dd>
            <dt scope="row"><?= __('Price') ?></dt>
            <dd><?= h($room->price) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($room->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($room->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($room->modified) ?></dd>
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
          <h3 class="box-title"><?= __('Details') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($room->details); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Photos Rooms') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($room->photos_rooms)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Photo') ?></th>
                    <th scope="col"><?= __('Photo Dir') ?></th>
                    <th scope="col"><?= __('Room Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($room->photos_rooms as $photosRooms): ?>
              <tr>
                    <td><?= h($photosRooms->id) ?></td>
                    <td><?= h($photosRooms->created) ?></td>
                    <td><?= h($photosRooms->modified) ?></td>
                    <td><?= h($photosRooms->name) ?></td>
                    <td><?= h($photosRooms->photo) ?></td>
                    <td><?= h($photosRooms->photo_dir) ?></td>
                    <td><?= h($photosRooms->room_id) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'PhotosRooms', 'action' => 'view', $photosRooms->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'PhotosRooms', 'action' => 'edit', $photosRooms->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'PhotosRooms', 'action' => 'delete', $photosRooms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photosRooms->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
