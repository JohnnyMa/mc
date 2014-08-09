<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

            <!-- Be sure to leave the brand out there if you want it shown -->
            <a class="brand" href="#">jma</a>

            <div class="nav-collapse">

                <?php $this -> widget('zii.widgets.CMenu', array('htmlOptions' => array('class' => 'pull-right nav'), 'submenuHtmlOptions' => array('class' => 'dropdown-menu'), 'itemCssClass' => 'item-test', 'encodeLabel' => false, 'items' => array(
    /*
     array('label'=>'Graphs & Charts', 'url'=>array('/site/page', 'view'=>'graphs'), 'visible'=>!Yii::app()->user->isGuest),
     array('label'=>'Forms', 'url'=>array('/site/page', 'view'=>'forms'), 'visible'=>!Yii::app()->user->isGuest),
     array('label'=>'Concat', 'url'=>array('/site/contact'), 'visible'=>!Yii::app()->user->isGuest),
     array('label'=>'Tables', 'url'=>array('/site/page', 'view'=>'tables'), 'visible'=>!Yii::app()->user->isGuest),
     array('label'=>'Interface', 'url'=>array('/site/page', 'view'=>'interface'), 'visible'=>!Yii::app()->user->isGuest),
     array('label'=>'Typography', 'url'=>array('/site/page', 'view'=>'typography'), 'visible'=>!Yii::app()->user->isGuest),
     */

    array('label' => Yii::t('Common', 'nav_customer_mgmt'), 'url' => array('/customer/index'), 'visible' => !Yii::app() -> user -> isGuest), 
    array('label' => Yii::t('Common', 'nav_loan_mgmt'), 'url' => array('/loan/index'), 'visible' => !Yii::app() -> user -> isGuest), 
    array('label' => Yii::t('Common', 'nav_daily_mgmt'), 'url' => array('/task/index'), 'visible' => !Yii::app() -> user -> isGuest), 
    array('label' => Yii::t('Common', 'nav_report_mgmt'), 'url' => array('/report/index'), 'visible' => !Yii::app() -> user -> isGuest), 
    array('label' => Yii::t('Common', 'nav_customer_mgmt'), 'url' => array('/admin/view'), 'visible' => !Yii::app() -> user -> isGuest),
    array('label' => Yii::t('Common', 'nav_system_mgmt'), 'url' => array('/admin/view'), 'visible' => !Yii::app() -> user -> isGuest),

    /*array('label'=>'Gii generated', 'url'=>array('customer/index')),*/
    array('label' => Yii::t('Common', 'nav_my_account') . ' <span class="caret"></span>', 
          'url' => '#', 
          'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 
          'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"), 
          'items' => array( array('label' => 'My Messages <span class="badge badge-warning pull-right">26</span>', 'url' => '#'), 
          array('label' => 'My Tasks <span class="badge badge-important pull-right">112</span>', 'url' => '#'), 
          array('label' => 'My Invoices <span class="badge badge-info pull-right">12</span>', 'url' => '#'), 
          array('label' => 'Separated link', 'url' => '#'), 
          array('label' => 'One more separated link', 'url' => '#'), ), 'visible' => !Yii::app() -> user -> isGuest), 
          array('label' => Yii::t('Common', 'login'), 'url' => array('/site/login'), 'visible' => Yii::app() -> user -> isGuest), 
          array('label' => Yii::t('Common', 'logout') . ' (' . Yii::app() -> user -> name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app() -> user -> isGuest), 
          ), 
         ));
                ?>
            </div>
        </div>
    </div>
</div>

<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">

            <div class="style-switcher pull-left">
                <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
            </div>
            <form class="navbar-search pull-right" action="">
<!--
                <input type="text" class="search-query span2" placeholder="Search">
-->
            </form>
        </div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->