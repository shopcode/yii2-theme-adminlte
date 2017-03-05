<?php

    use yii\widgets\Breadcrumbs;
    use common\widgets\Alert;
    
?>

<?php $this->beginContent( '@app/../themes/adminLTE/views/layouts/base.php' ); ?>
   
    <div class="content-wrapper">

        <section class="content-header">
            <h1>Dashboard<small>Control panel</small></h1>
            <?php echo Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo Alert::widget() ?>
                </div>
            </div> 
            <!-- แสดง Content ต่าง ๆ -->
            <?php echo $content; ?> 
        </section>

    </div>

<?php $this->endContent(); ?>

<!-- end main layouts -- >