index<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"><b>ADMINISTRATORS</b></li>
            <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class=""><a href="../../admin/home.php"><span class="glyphicon glyphicon-lock"></span> <span>S.G.C</span></a></li>
            <li class=""><a href="../../Science/admin/home.php"><span class="glyphicon glyphicon-lock"></span> <span>School of Science</span></a></li>
            <li class=""><a href="../../Education/admin/home.php"><span class="glyphicon glyphicon-lock"></span> <span>School of Education, Arts ......</span></a></li>
            <li class=""><a href="../../Business/admin/home.php"><span class="glyphicon glyphicon-lock"></span> <span>School of Business & Economics</span></a></li>
            <li class=""><a href="../../HealthScience/admin/home.php"><span class="glyphicon glyphicon-lock"></span> <span>School of Health Sciences</span></a></li>
            <li class="header">MANAGE</li>
            <li class=""><a href="voters.php"><i class="fa fa-users"></i> <span>Students School of Agriculture......</span></a></li>
            <li class=""><a href="votes.php"><span class="glyphicon glyphicon-lock"></span> <span>Votes School of Agriculture...</span></a></li>
            <li class=""><a href="positions.php"><i class="fa fa-tasks"></i> <span>Positions School of Agriculture....</span></a></li>
            <li class=""><a href="candidates.php"><i class="fa fa-black-tie"></i> <span>Candidates School of Agriculture..</span></a></li>
            <li class="header">SETTINGS</li>
            <li class=""><a href="ballot.php"><i class="fa fa-file-text"></i> <span>School of Agriculture Ballot</span></a></li>
            <li class=""><a href="#config" data-toggle="modal"><i class="fa fa-cog"></i> <span>School of Agriculture Election Title</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>