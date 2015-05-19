<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Sheldon Lee Cooper</p>

              <a href="/<?=$_SESSION['lang'];?>/user/show"><i class="fa fa-circle text-success"></i> <?= $this->language->getPhrase("key_online",$_SESSION['lang']) ?></a>
            </div>
          </div>
          <!-- search form -->
          <form action="/<?=$_SESSION['lang'];?>/user/show" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="<?= $this->language->getPhrase("key_search",$_SESSION['lang']) ?>..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
           <!-- <li class="header">MENÚ DE NAVEGACIÓN</li> -->
            <li class="treeview <?= $this->checkController($_SERVER['REQUEST_URI'],'home');?>">
              <a href="/<?=$_SESSION['lang'];?>/home/show">
                <i class="fa fa-dashboard"></i> <span><?= $this->language->getPhrase("key_dashboard",$_SESSION['lang']) ?></span> <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </a>

            </li>

            <li class="treeview <?= $this->checkController($_SERVER['REQUEST_URI'],'user');?>">
              <a href="#">
                <i class="fa fa-users"></i> <span><?= $this->language->getPhrase("key_users",$_SESSION['lang']) ?></span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/<?=$_SESSION['lang'];?>/user/listusers"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_user_list",$_SESSION['lang']) ?></a></li>
                <li><a href="/<?=$_SESSION['lang'];?>/user/insertuser"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_registry",$_SESSION['lang']) ?></a></li>
                <li><a href="/<?=$_SESSION['lang'];?>/user/massregistration"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_mass_registry",$_SESSION['lang']) ?></a></li>
              </ul>
            </li>
            <li class="treeview <?= $this->checkController($_SERVER['REQUEST_URI'],'organization');?>">
              <a href="#">
                <i class="fa fa-university"></i>
                <span><?= $this->language->getPhrase("key_organizations",$_SESSION['lang']) ?></span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/<?=$_SESSION['lang'];?>/organization/listOrganizations"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_list_organization",$_SESSION['lang']) ?></a></li>
                <li><a href="/<?=$_SESSION['lang'];?>/organization/create"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_create_organization",$_SESSION['lang']) ?></a></li>
                <li><a href="/<?=$_SESSION['lang'];?>/organization/category"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_manage_categories",$_SESSION['lang']) ?></a></li>
                <li><a href="/<?=$_SESSION['lang'];?>/organization/addCourse"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_add_course_to_org",$_SESSION['lang']) ?></a></li>
              </ul>
            </li>
            <li class="treeview <?= $this->checkController($_SERVER['REQUEST_URI'],'course');?>">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span><?= $this->language->getPhrase("key_courses",$_SESSION['lang']) ?></span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/<?=$_SESSION['lang'];?>/course/create"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_create_course",$_SESSION['lang']) ?></a></li>
                <li><a href="/<?=$_SESSION['lang'];?>/course/listCourses"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_list_courses",$_SESSION['lang']) ?></a></li>
              </ul>
            </li>

            <li class="treeview <?= $this->checkController($_SERVER['REQUEST_URI'],'edition');?>">
              <a href="#">
                <i class="fa fa-calendar"></i> <span><?= $this->language->getPhrase("key_editions",$_SESSION['lang']) ?></span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/<?=$_SESSION['lang'];?>/edition/create"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_create_edition",$_SESSION['lang']) ?></a></li>
                <li><a href="/<?=$_SESSION['lang'];?>/edition/listeditions"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_list_editions",$_SESSION['lang']) ?></a></li>
              </ul>
            </li>
            <li class="treeview <?= $this->checkController($_SERVER['REQUEST_URI'],'group');?>">
              <a href="#">
                <i class="fa fa-code-fork"></i> <span><?= $this->language->getPhrase("key_groups",$_SESSION['lang']) ?></span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/<?=$_SESSION['lang'];?>/group/create"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_create_group",$_SESSION['lang']) ?></a></li>
                <li><a href="/<?=$_SESSION['lang'];?>/group/listgroups"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_list_groups",$_SESSION['lang']) ?></a></li>
              </ul>
            </li>
            <li class="treeview <?= $this->checkController($_SERVER['REQUEST_URI'],'certificate');?>">
              <a href="#">
                <i class="fa fa-graduation-cap"></i> <span><?= $this->language->getPhrase("key_certificates",$_SESSION['lang']) ?></span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/<?=$_SESSION['lang'];?>/certificate/generate"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_generate_certificates",$_SESSION['lang']) ?></a></li>
              </ul>
            </li>
            <li class="treeview <?= $this->checkController($_SERVER['REQUEST_URI'],'stats');?>">
              <a href="#">
                <i class="fa fa-bar-chart"></i> <span><?= $this->language->getPhrase("key_stats",$_SESSION['lang']) ?></span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/<?=$_SESSION['lang'];?>/stats/showOrgStats"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_org_stats",$_SESSION['lang']) ?></a></li>
                <li><a href="/<?=$_SESSION['lang'];?>/stats/showCourseStats"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_course_stats",$_SESSION['lang']) ?></a></li>
              </ul>
            </li>
            <li class="treeview <?= $this->checkController($_SERVER['REQUEST_URI'],'search');?>">
              <a href="#">
                <i class="fa fa-search"></i> <span><?= $this->language->getPhrase("key_advanced_search",$_SESSION['lang']) ?></span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/<?=$_SESSION['lang'];?>/search/advancedSearch"><i class="fa fa-circle-o"></i> Búsqueda general</a></li>
                <li><a href="/<?=$_SESSION['lang'];?>/search/advancedUsersSearch"><i class="fa fa-circle-o"></i> Búsqueda de usuarios</a></li>
              </ul>
            </li>
            <li class="treeview <?= $this->checkController($_SERVER['REQUEST_URI'],'settings');?>">
              <a href="#">
                <i class="fa fa-cogs"></i> <span><?= $this->language->getPhrase("key_settings",$_SESSION['lang']) ?></span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/<?=$_SESSION['lang'];?>/settings/translation"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_translation",$_SESSION['lang']) ?></a></li>
                <li><a href="/<?=$_SESSION['lang'];?>/settings/preferences"><i class="fa fa-circle-o"></i> <?= $this->language->getPhrase("key_preferences",$_SESSION['lang']) ?></a></li>
              </ul>
            </li>
          
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>