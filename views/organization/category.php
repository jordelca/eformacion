      
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
      <div class = "box-header table-top">
       <div class="form-group col-xs-12 col-md-4">
        <label for="org_name"><?= $this->language->getPhrase("key_select_organization",$_SESSION['lang']) ?></label>
        <select id="select_organization" class="form-control">
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
      <div id="cat_panel" class="col-xs-12 col-md-12" style="display:none;">
        <div class="form-group" id="cat_tree" style="display:none">
          <label for="treeview" class="control-label"><?= $this->language->getPhrase("key_select_category",$_SESSION['lang']) ?></label>
          <div id="treeview">
          </div>
        </div>
        
        <div id="cat_name" style="display:none">
          <div class="form-group">
            <label for="selectedNode"><?= $this->language->getPhrase("key_category",$_SESSION['lang']) ?></label>
            <div class="input-group">
              <span class="input-group-btn">
                <button class="btn btn-default" id="change_category" type="button"><?= $this->language->getPhrase("key_select_category",$_SESSION['lang']) ?></button>
              </span>
              <input type="text" class="form-control required" name="selectedNode" id="selectedNode" disabled placeholder="<?= $this->language->getPhrase("key_category",$_SESSION['lang']) ?>" value="" style="cursor:pointer; cursor: hand;">
              
            </div><!-- /input-group -->
          </div><!-- /input-group -->
          <div class="form-group">
            <div class="btn-group col-xs-12 col-md-12" role="toolbar" style="padding:0px;">
              <button type="button" class="btn btn-default col-xs-12 col-md-3" onClick="showForm('new_category');"><i class="glyphicon glyphicon-plus"></i><?= $this->language->getPhrase("key_create_category",$_SESSION['lang']) ?></button>
              <button type="button" class="btn btn-default col-xs-12 col-md-3" onClick="showForm('edit_category');"><i class="glyphicon glyphicon-edit"></i><?= $this->language->getPhrase("key_edit_category",$_SESSION['lang']) ?></button>
              <button type="button" class="btn btn-default col-xs-12 col-md-3" id="delete_cat"><i class="glyphicon glyphicon-trash"></i><?= $this->language->getPhrase("key_delete_category",$_SESSION['lang']) ?></button>
              <a id="course_link" href="/<?=$_SESSION['lang'];?>/organization/addCourse" class="btn btn-default col-xs-12 col-md-3" role="button"><i class="glyphicon glyphicon-plus"></i><?= $this->language->getPhrase("key_create_course_under_node",$_SESSION['lang']) ?></a>
            </div>
            <div id="cat_forms" class="col-xs-12" style="padding:20px 0px;">

              <form id="new_category" style="display:none;">
                <div id="errorMessage" class="col-xs-12 col-md-12 alert alert-danger" role="alert" style="display:none;">
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                  <span class="sr-only"><?= $this->language->getPhrase("key_error",$_SESSION['lang']) ?>:</span>
                  <?= $this->language->getPhrase("key_form_error",$_SESSION['lang']) ?>
                </div>
                <div class="form-group" style="display:none;">
                  <label for="selectedNode" class="control-label"><?= $this->language->getPhrase("key_select_parent_node",$_SESSION['lang']) ?></label>
                  <input type="text" class="form-control required" name="selectedNode" id="selectedNode" disabled placeholder="<?= $this->language->getPhrase("key_select_parent_node",$_SESSION['lang']) ?>">
                </div>
                <div class="form-group">
                  <label for="cat_new_name" class="control-label"><?= $this->language->getPhrase("key_new_name",$_SESSION['lang']) ?></label>
                  <input type="text" class="form-control required" name="cat_new_name" id="cat_new_name" placeholder="<?= $this->language->getPhrase("key_new_name",$_SESSION['lang']) ?>">
                  <input type="hidden" class="form-control" name="org_id" id="org_id">
                  <input type="hidden" class="form-control" name="parent_node" id="parent_node">
                </div>
                <button type="submit" class="btn btn-default"><?= $this->language->getPhrase("key_create_cat",$_SESSION['lang']) ?></button>
              </form>
              <form id="edit_category" style="display:none;">
                <div id="errorMessage" class="col-xs-12 col-md-12 alert alert-danger" role="alert" style="display:none;">
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                  <span class="sr-only"><?= $this->language->getPhrase("key_error",$_SESSION['lang']) ?>:</span>
                  <?= $this->language->getPhrase("key_form_error",$_SESSION['lang']) ?>
                </div>
                <div class="form-group" style="display:none;">
                  <label for="selectedNode" class="control-label"><?= $this->language->getPhrase("key_select_node",$_SESSION['lang']) ?></label>
                  <input type="text" class="form-control required" name="selectedNode" id="selectedNode" disabled placeholder="<?= $this->language->getPhrase("key_select_node",$_SESSION['lang']) ?>">
                </div>
                <div class="form-group">
                  <label for="cat_modify_name" class="control-label"><?= $this->language->getPhrase("key_modify_node",$_SESSION['lang']) ?></label>
                  <input type="text" class="form-control required" name="cat_modify_name" id="cat_modify_name" placeholder="<?= $this->language->getPhrase("key_modify_name",$_SESSION['lang']) ?>">
                </div>
                <button type="submit" class="btn btn-default"><?= $this->language->getPhrase("key_update_cat",$_SESSION['lang']) ?></button>
              </form>
              <form id="delete_category" style="display:none;">
                <div id="errorMessage" class="col-xs-12 col-md-12 alert alert-danger" role="alert" style="display:none;">
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                  <span class="sr-only"><?= $this->language->getPhrase("key_error",$_SESSION['lang']) ?>:</span>
                  <?= $this->language->getPhrase("key_form_error",$_SESSION['lang']) ?>
                </div>
                <div class="form-group" style="display:none;">
                  <label for="selectedNode" class="control-label"><?= $this->language->getPhrase("key_select_node",$_SESSION['lang']) ?></label>
                  <input type="text" class="form-control required" name="selectedNode" id="selectedNode" disabled placeholder="<?= $this->language->getPhrase("key_select_node",$_SESSION['lang']) ?>">
                </div>
                <button type="submit" class="btn btn-default"><?= $this->language->getPhrase("key_delete_cat",$_SESSION['lang']) ?></button>
              </form>
            </div>
          </div><!-- /input-group -->
        </div><!-- /input-group -->
      </div><!-- /input-group -->

    </div><!-- /.box - header -->
    
    

    
    

    

  </section><!-- /.content -->


