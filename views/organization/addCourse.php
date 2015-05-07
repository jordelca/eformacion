      
<!-- Content Header (Page header) -->
<section class="col-xs-12 content-header">
  <h1 class="col-xs-12 col-md-6">
    <?= $this->language->getPhrase("key_manage_categories",$_SESSION['lang']) ?>
    <small><?= $this->language->getPhrase("key_manage_categories",$_SESSION['lang']) ?></small>
  </h1>
</section>

<!-- Main content -->

<!-- Main content -->
<section class = "content row">
  <div class = "col-xs-12">
    <div class = "box">
      <div class="box-header table-top">
        <div class="form-group col-xs-12 col-md-4">
          <label for="org_name"><?= $this->language->getPhrase("key_select_organization",$_SESSION['lang']) ?></label>
          <select id="select_organization" view="addCourse" class="form-control">
            <option value="" disabled selected><?= $this->language->getPhrase("key_select_organization",$_SESSION['lang']) ?></option>
            <?php
            $keyList = organization::getOrganizations();
            foreach ($keyList as $row) {
              echo '<option value="'.$row["id"].'">';
              echo $row['name'];    
              echo '</option>';
            }

            ?>
          </select>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="form-group" id="cat_tree" style="display:none;clear:both;">
            <label for="treeview" class="control-label"><?= $this->language->getPhrase("key_select_category",$_SESSION['lang']) ?></label>
            <div id="treeview">
            </div>
          </div>
        </div>
        <div class="form-group" id="cat_name" style="display:none">
          <label for="selectedNode"></label>
          <div class="input-group col-xs-12 col-md-12" style="padding-left:15px;padding-right:15px;">
            <span class="input-group-btn">
              <button class="btn btn-default" id="change_category" type="button"><?= $this->language->getPhrase("key_select_category",$_SESSION['lang']) ?></button>
            </span>
            <input type="text" class="form-control" name="selectedNode" id="selectedNode" disabled placeholder="<?= $this->language->getPhrase("key_category",$_SESSION['lang']) ?>" value="" style="cursor:pointer; cursor: hand;">
          </div><!-- /input-group -->
        </div><!-- /input-group -->
        <div id="course_table" style="display:none" class="col-sm-12">
          <div class="form-group" id="course_table">
            <div class="table-responsive box">
              <table class="table table-striped table-bordered table-hover" id="dataTables-courses">
                <thead>
                  <tr>
                    <th></th>
                    <th><?= $this->language->getPhrase("key_course_title",$_SESSION['lang']) ?></th>
                    <th><?= $this->language->getPhrase("key_course_description",$_SESSION['lang']) ?></th>
                    <th><?= $this->language->getPhrase("key_course_creation_date",$_SESSION['lang']) ?></th>
                    <th><?= $this->language->getPhrase("key_course_visible",$_SESSION['lang']) ?></th>
                    <th><?= $this->language->getPhrase("key_course_max_attendees",$_SESSION['lang']) ?></th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
          <div class="form-group col-xs-12 col-md-4 nopadding">
            <button id="selectAll" type="button" class="col-xs-12 btn btn-default"><i class="fa fa-check-square-o fa-fw"></i><?= $this->language->getPhrase("key_select_all",$_SESSION['lang']) ?></button>
          </div>
          <div class="form-group col-xs-12 col-md-4 pull-right nopadding">
            <form method="POST" id="add_courses" name="add_courses">
              <input type="hidden" name="selectedNode" id="selectedNode">
              <input type="hidden" name="selectedNodeId" id="selectedNodeId">
              <input type="hidden" name="course_selected_list" id="course_selected_list">
              <input type="hidden" name="org_id" id="org_id">
              <button type="submit" class="col-xs-12 btn btn-default"><?= $this->language->getPhrase("key_send_form",$_SESSION['lang']) ?></button>
            </form>
          </div>
        </div>

      </div>








    </section><!-- /.content -->


