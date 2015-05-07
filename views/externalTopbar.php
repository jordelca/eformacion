<header class="main-header">
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
          <div class="navbar-custom-menu">
               <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown" style="position:relative;float:right;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-language fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <?php 

                            $languages = $this->language->getAvailableLanguages();
                            foreach ($languages as $lang) {
                                ?>
                                <li>
                                    <a href="<?= $this->language->changeLanguage($_SERVER['REQUEST_URI'],$lang['lang_code']); ?>"><i class="fa <?php if ($_SESSION['lang'] == $lang['lang_code']){echo 'fa-flag';}else{echo 'fa-flag-o';}?> fa-fw"></i> <?= $this->language->getPhrase("key_".$lang['lang_code'],$_SESSION['lang']); ?></a>
                                </li>
                            <?php
                                }
                            ?>
                       
                    </ul>
                    <!-- /.dropdown-lang -->
                </li>
              

     
            </ul>
          </div>
        </nav>
      </header>