      <header class="main-header sticky">
        <!-- Logo -->
        <a href="/<?=$_SESSION['lang'];?>/home/show" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="../../dist/img/logo_e.png" alt="Logo eFormación"/></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="../../dist/img/logo_blanco.png" alt="Logo eFormación"/></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"><?= $this->language->getPhrase("key_toogle_navigation",$_SESSION['lang']) ?></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              <li class="dropdown messages-menu" style="background-color: #3995CB;" >
                <a href="http://moodle.eformacion.gva.com" target="_blank" class="dropdown-toggle" style="height: 50px;">
                    <div class="pull-left">
                      <img src="../../dist/img/logo-moodle.png" class="img-circle-moodle" alt="Logo Moodle"/>
                    </div>
                    <span class="hidden-xs"> <?= $this->language->getPhrase("key_moodle_access",$_SESSION['lang']) ?></span>
                </a>

              </li>
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"><?= $this->language->getPhrase("key_you_have",$_SESSION['lang']) ?> 4 <?= $this->language->getPhrase("key_messages",$_SESSION['lang']) ?></li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            EVES
                            <small><i class="fa fa-clock-o"></i> 5 <?= $this->language->getPhrase("key_minutes",$_SESSION['lang']) ?></small>
                          </h4>
                          <p>Lorem ipsum Nostrud ad.</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../dist/img/user5-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            EFORMACION
                            <small><i class="fa fa-clock-o"></i> 2 <?= $this->language->getPhrase("key_hours",$_SESSION['lang']) ?></small>
                          </h4>
                          <p>Lorem ipsum Nostrud ad Duis.</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Nuevo curso
                            <small><i class="fa fa-clock-o"></i> <?= $this->language->getPhrase("key_today",$_SESSION['lang']) ?></small>
                          </h4>
                          <p><?= $this->language->getPhrase("key_dashboard",$_SESSION['lang']) ?></p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../dist/img/user5-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Curso finalizado
                            <small><i class="fa fa-clock-o"></i> <?= $this->language->getPhrase("key_yesterday",$_SESSION['lang']) ?></small>
                          </h4>
                          <p>Lorem ipsum Nostrud ad Duis eiusmod.</p>
                        </a>
                      </li>

                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"><?= $this->language->getPhrase("key_you_have",$_SESSION['lang']) ?> 10 <?= $this->language->getPhrase("key_notifications",$_SESSION['lang']) ?></li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 <?= $this->language->getPhrase("key_new_members_today",$_SESSION['lang']) ?>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Lorem ipsum Sed in non aute anim nostrud cillum consectetur officia quis do velit id eiusmod voluptate veniam nostrud anim est anim aliquip in aliquip amet do sunt nostrud reprehenderit ex sed enim aliqua non officia ea esse magna eiusmod.
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 <?= $this->language->getPhrase("key_new_members",$_SESSION['lang']) ?>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> <?= $this->language->getPhrase("key_action_required",$_SESSION['lang']) ?>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Lorem ipsum Sed in non aute anim nostrud cillum consectetur officia quis do velit id eiusmod voluptate veniam nostrud anim est anim aliquip in aliquip amet do sunt nostrud reprehenderit ex sed enim aliqua non officia ea esse magna eiusmod.
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#"><?= $this->language->getPhrase("key_see_all_alerts",$_SESSION['lang']) ?></a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"><?= $this->language->getPhrase("key_you_have",$_SESSION['lang']) ?> 9 <?= $this->language->getPhrase("key_tasks",$_SESSION['lang']) ?></li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            <?= $this->language->getPhrase("key_import_task",$_SESSION['lang']) ?>
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% <?= $this->language->getPhrase("key_completed",$_SESSION['lang']) ?></span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            <?= $this->language->getPhrase("key_news_notification",$_SESSION['lang']) ?>
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% <?= $this->language->getPhrase("key_completed",$_SESSION['lang']) ?></span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            <?= $this->language->getPhrase("key_nightly_processes",$_SESSION['lang']) ?>
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% <?= $this->language->getPhrase("key_completed",$_SESSION['lang']) ?></span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            <?= $this->language->getPhrase("key_course_import",$_SESSION['lang']) ?>
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% <?= $this->language->getPhrase("key_completed",$_SESSION['lang']) ?></span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#"><?= $this->language->getPhrase("key_see_all_tasks",$_SESSION['lang']) ?></a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Sheldon Lee Cooper</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Sheldon Lee Cooper - <?= $this->language->getPhrase("key_admin",$_SESSION['lang']) ?> BAZINGA
                      <small><?= $this->language->getPhrase("key_member_from",$_SESSION['lang']) ?> <?= $this->language->getPhrase("key_long_ago",$_SESSION['lang']) ?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-6 text-center">
                      <a href="#"><?= $this->language->getPhrase("key_organizations",$_SESSION['lang']) ?></a>
                    </div>
                    <div class="col-xs-6 text-center">
                      <a href="#"><?= $this->language->getPhrase("key_courses",$_SESSION['lang']) ?></a>
                    </div>
 
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="/<?=$_SESSION['lang'];?>/user/profile" class="btn btn-default btn-flat"><?= $this->language->getPhrase("key_profile",$_SESSION['lang']) ?></a>
                    </div>
                    <div class="pull-right">
                      <a href="/<?= $_SESSION['lang']?>/login/logout" class="btn btn-default btn-flat"><?= $this->language->getPhrase("key_logout",$_SESSION['lang']) ?></a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-outdent"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- Left side column. contains the logo and sidebar -->