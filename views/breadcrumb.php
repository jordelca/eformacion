<ul class="breadcrumb col-xs-12">
    <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
            <input type="hidden" id="session_org" value="">
            <span id="org_selected"> <?= $this->language->getPhrase("key_select_organization",$_SESSION['lang']);?></span><span class="caret"></span>
        </a>
        <ul id="org_selector" class="dropdown-menu" role="menu">
            <?php
            $keyList = organization::getOrganizations();
            echo '<li class="baseOption"><a href="#">';
                echo $this->language->getPhrase("key_select_organization",$_SESSION['lang']);
            echo '</a></li>';
            foreach ($keyList as $row) {
            echo '<li id="'.$row['id'].'"><a href="#">';
                echo $row['name'];
            echo '</a></li>';
            }
            
            ?>
        </ul>
    </li>
    <li id="course_selector" role="presentation" class="dropdown" style="display:none;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
            <input type="hidden" id="session_course">
            <span id="course_selected"> <?= $this->language->getPhrase("key_select_course",$_SESSION['lang']);?></span><span class="caret"></span>
        </a>
        <ul id="course_selector" class="dropdown-menu" role="menu">
            <?php
            echo '<li class="baseOption"><a href="#">';
                echo $this->language->getPhrase("key_select_course",$_SESSION['lang']);
            echo '</a></li>';
            /*
            $keyList = course::listcourses();
            foreach ($keyList as $row) {
            echo '<li id="'.$row['id'].'"><a href="#">';
                echo $row['title'];
            echo '</a></li>';
            }
            */
            ?>
        </ul>
    </li>
    <li id="edition_selector" role="presentation" class="dropdown" style="display:none;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
            <input type="hidden" id="session_edition">
            <span id="edition_selected"> <?= $this->language->getPhrase("key_select_edition",$_SESSION['lang']);?></span><span class="caret"></span>
        </a>
        <ul id="edition_selector" class="dropdown-menu" role="menu">
            <?php
            echo '<li class="baseOption"><a href="#">';
                echo $this->language->getPhrase("key_select_edition",$_SESSION['lang']);
            echo '</a></li>';
            /*
            $keyList = edition::listEditions();
            foreach ($keyList as $row) {
            echo '<li id="'.$row['id'].'"><a href="#">';
                echo $row['title'];
            echo '</a></li>';
            }
            */
            
            ?>
        </ul>
    </li>
    <li id="group_selector" role="presentation" class="dropdown" style="display:none;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
            <input type="hidden" id="session_group">
            <span id="group_selected"> <?= $this->language->getPhrase("key_select_group",$_SESSION['lang']);?></span><span class="caret"></span>
        </a>
        <ul id="group_selector" class="dropdown-menu" role="menu">
            <?php
            echo '<li class="baseOption"><a href="#">';
                echo $this->language->getPhrase("key_select_group",$_SESSION['lang']);
            echo '</a></li>';
            /*
            $keyList = group::listGroups();
            foreach ($keyList as $row) {
            echo '<li id="'.$row['id'].'"><a href="#">';
                echo $row['name'];
            echo '</a></li>';
            }
            */
            ?>
        </ul>
    </li>
</ul>