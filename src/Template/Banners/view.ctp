<section class="content-header">
  <h1>
    Banner
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
            <dt scope="row"><?= __('Title') ?></dt>
            <dd><?= h($banner->title) ?></dd>
            <dt scope="row"><?= __('Subtitle') ?></dt>
            <dd><?= h($banner->subtitle) ?></dd>
            <dt scope="row"><?= __('Photo') ?></dt>
            <dd><?= $this->Html->image($banner->photo, array('width'=>'200px')) ?></dd>

          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
