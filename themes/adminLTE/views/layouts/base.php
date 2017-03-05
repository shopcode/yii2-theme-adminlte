<?php

    use yii\helpers\Html;
    use backend\assets\AppAsset;
    AppAsset::register($this);
    
?>

<?php $this->beginPage(); ?>

<!DOCTYPE html>

<html lang="<?php echo \Yii::$app->language; ?>">
    
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo \Yii::$app->charset; ?>" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php echo Html::csrfMetaTags(); ?>
        <title><?php echo Html::encode(!empty($this->title) ? strtoupper($this->title) . ' | ' : null); ?> BACKEND</title>
        
        <script type="text/javascript">
            var baseUrl = '<?php echo \Yii::$app->urlManager->createAbsoluteUrl(['/']); ?>';
        </script>
        
        <?php $this->head(); ?>
        
    </head>
    
    <body class="hold-transition skin-green sidebar-mini">
        
        <div class="wrapper">
            
            <?php $this->beginBody(); ?>

                <!-- Get Header -->
                <header class="main-header">
                    <a href="/backend" class="logo">
                        <span class="logo-mini"><b>A</b>LT</span>
                        <span class="logo-lg"><b>Admin</b>LTE</span>
                    </a>
                    <nav class="navbar navbar-static-top" role="navigation">
                        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                            <span class="sr-only">Toggle navigation</span>
                        </a>
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">
                                <?php if(\Yii::$app->user->isGuest): ?>
                                    <li>
                                        <a href="#"><span class="hidden-xs">Guest</span></a>
                                    </li>
				<?php else: ?>
                                    <li class="dropdown user user-menu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <img src="/backend/images/user2-160x160.jpg" class="user-image" alt="User Image">
                                            <span class="hidden-xs"><?php echo ucfirst(Yii::$app->user->identity->username); ?></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="user-header">
                                                <img src="/backend/images/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                <p><?php echo ucfirst(Yii::$app->user->identity->username); ?> - Administration<small>Member since Nov. 2015</small></p>
                                            </li>
                                            <li class="user-body">
                                                <div class="col-xs-4 text-center">
                                                    <a href="#">Followers</a>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <a href="#">Sales</a>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <a href="#">Friends</a>
                                                </div>
                                            </li>
                                            <li class="user-footer">
                                                <div class="pull-left">
                                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                                </div>
                                                <div class="pull-right">
                                                    <a href="/backend/user/logout" class="btn btn-default btn-flat" data-method="POST">Sign out</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </nav>
                </header>
                
                <!-- Get Sidebar -->
                <aside class="main-sidebar">
                    <section class="sidebar">
                        
                        <div class="user-panel">
                            <div class="pull-left image">
                                <img src="/backend/images/user2-160x160.jpg" class="img-circle" alt="User Image">
                            </div>
                            <div class="pull-left info">
                                <?php if(\Yii::$app->user->isGuest): ?>
                                    <p>Guest</p>
                                    <a href="#"><i class="fa fa-circle text-success"></i> Offline</a>
                                <?php else: ?>
                                    <p>Account: <?php echo ucfirst(Yii::$app->user->identity->username); ?></p>
                                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <ul class="sidebar-menu">
                            
                            <?php if(!\Yii::$app->user->isGuest): ?>
                                
                                <li class="header">ข้อมูลหลัก</li>
                            
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-pie-chart"></i><span>สินค้า (Product)</span><i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="/backend/product/create"><i class="fa fa-circle-o"></i> เพิ่มรายการสินค้า</a></li>
                                        <li><a href="/backend/product/index"><i class="fa fa-circle-o"></i> จัดการข้อมูลสินค้า</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-pie-chart"></i><span>ประเภทสินค้า (Category)</span><i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="/backend/category/create"><i class="fa fa-circle-o"></i> เพิ่มประเภทสินค้า</a></li>
                                        <li><a href="/backend/category/index"><i class="fa fa-circle-o"></i> จัดการประเภทสินค้า</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-pie-chart"></i><span>ผู้ใช้งาน (User)</span><i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="/backend/user/admin/create"><i class="fa fa-circle-o"></i> เพิ่มผู้ใช้งานใหม่</a></li>
                                        <li><a href="/backend/user/admin/index"><i class="fa fa-circle-o"></i> จัดการผู้ใช้งาน</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-pie-chart"></i><span>กำหนดสิทธิ์ (RBAC)</span><i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="/backend/admin/assignment"><i class="fa fa-circle-o"></i> ผู้ใช้งาน (Assignment)</a></li>
                                        <li><a href="/backend/admin/role"><i class="fa fa-circle-o"></i> ตำแหน่ง (Role)</a></li>
                                        <li><a href="/backend/admin/permission"><i class="fa fa-circle-o"></i> กำหนดสิทธิ์ (Permission)</a></li>
                                        <li><a href="/backend/admin/route"><i class="fa fa-circle-o"></i> เส้นทาง (Routes)</a></li>
                                        <li><a href="/backend/admin/rule"><i class="fa fa-circle-o"></i> กฏ (Rules)</a></li>
                                        <li><a href="/backend/admin/menu"><i class="fa fa-circle-o"></i> เมนู (Menu)</a></li>
                                    </ul>
                                </li>
                                
                                <li class="header">สั่งซื้อสินค้า</li>
                                
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-pie-chart"></i><span>การสั่งซื้อ (Order)</span><i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="/backend/order/index"><i class="fa fa-circle-o"></i> จัดการข้อมูลสั่งซื้อ</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-pie-chart"></i><span>การชำระเงิน (Payment)</span><i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="/backend/payment/index"><i class="fa fa-circle-o"></i> จัดการข้อมูลชำระเงิน</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-pie-chart"></i><span>การจัดส่ง (Delivery)</span><i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="/backend/delivery/index"><i class="fa fa-circle-o"></i> จัดการจัดส่งสินค้า</a></li>
                                    </ul>
                                </li>
                                
                                <li class="header">สต๊อกสินค้า</li>
                                
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-pie-chart"></i><span>สต๊อกสินค้า (Stock)</span><i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="/backend/stock/index"><i class="fa fa-circle-o"></i> จัดการสต๊อกสินค้า</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-pie-chart"></i><span>รับสินค้า (Receive)</span><i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="/backend/receive/index"><i class="fa fa-circle-o"></i> จัดการรับข้อมูลสินค้า</a></li>
                                        <li><a href="/backend/receive/create"><i class="fa fa-circle-o"></i> รับข้อมูลสินค้า (ใหม่)</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-pie-chart"></i><span>รายงานสรุป (Report)</span><i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="/backend/report/product" target="_blank"><i class="fa fa-circle-o"></i> สรุปรายการสินค้า</a></li>
                                        <li><a href="/backend/report/category" target="_blank"><i class="fa fa-circle-o"></i> สรุปรายการประเภทสินค้า</a></li>
                                        <li><a href="/backend/report/order" target="_blank"><i class="fa fa-circle-o"></i> สรุปรายการสั่งซื้อ</a></li>
                                        <li><a href="/backend/report/payment" target="_blank"><i class="fa fa-circle-o"></i> สรุปรายการชำระเงิน</a></li>
                                        <li><a href="/backend/report/delivery" target="_blank"><i class="fa fa-circle-o"></i> สรุปรายการจัดส่งสินค้า</a></li>
                                        <li><a href="/backend/report/receive" target="_blank"><i class="fa fa-circle-o"></i> สรุปรายการรับสินค้า</a></li>
                                        <li><a href="/backend/report/user" target="_blank"><i class="fa fa-circle-o"></i> สรุปรายการสมาชิก</a></li>
                                    </ul>
                                </li>
                                
                            <?php endif; ?>
                                
                            <li class="header">LABELS</li>
                            
                            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                            
                        </ul>
                    </section>
                </aside>

                <!-- Get Content -->
                <?php echo $content; ?>

                <footer class="main-footer">
                    <div class="pull-right hidden-xs"><b>Version</b> 2.3.0</div>
                    <strong>Copyright &copy; 2014-<?php echo date('Y',time()); ?> <a href="#">Almsaeed Studio</a>.</strong> All rights reserved.
                </footer>
                
            <?php $this->endBody(); ?>
                
        </div>
        
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        
    </body>
</html>

<?php $this->endPage(); ?>

<!-- end base layouts -- >