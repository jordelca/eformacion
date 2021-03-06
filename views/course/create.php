<!-- Content Header (Page header) -->
<section class="col-xs-12 content-header">
  <h1 class="col-xs-12 col-md-6">
  <?= $this->language->getPhrase("key_course",$_SESSION['lang']) ?>
  <small><?= $this->language->getPhrase("key_creation",$_SESSION['lang']) ?></small>
  </h1>
  <div class="col-xs-12 col-md-4 pull-right showHide">
    <a id="expandAll" href="#" class="col-xs-6 btn btn-default" role="button"><?= $this->language->getPhrase("key_show",$_SESSION['lang']) ?></a>
    <a id="collapseAll" href="#" class="col-xs-6 btn btn-default" role="button"><?= $this->language->getPhrase("key_hide",$_SESSION['lang']) ?></a>
  </div>
</section>
<!-- Main content -->
<!-- Main content -->
<section class="content row">
  
  <div class="col-xs-12">
    <div class="box">
      
      <!-- FICHA DE REGISTRO -->
      <form class="form-horizontal">
        <!-- Form Name -->
        <!-- <legend class="scheduler-border">Datos básicos</legend> -->
        <div class="bs-example" style="padding: 10px;">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. <?= $this->language->getPhrase("key_basic_data",$_SESSION['lang']) ?></a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="alert alert-warning alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <?= $this->language->getPhrase("key_required_fields",$_SESSION['lang']) ?>
                  
                </div>
                <div class="panel-body">
                  <!-- Text input-->
                  <!--
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?php //echo $this->language->getPhrase("key_autogenerated_id",$_SESSION['lang']) ?></label>
                    <div class="col-md-4">
                      <span class="label label-success" style="font-size:14px;">598</span>
                    </div>
                  </div>
                  -->
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_organization",$_SESSION['lang']) ?></label>
                    <div class="col-xs-12 col-md-8 nopadding pull-right">
                      <div class="col-xs-8 col-md-6">
                        <select id="select-user1" class="contacts" placeholder="<?= $this->language->getPhrase("key_select_organization",$_SESSION['lang']) ?>">
                          <option value=""><?= $this->language->getPhrase("key_select_organization",$_SESSION['lang']) ?></option>
                          <option value="4">EVES</option>
                          <option value="1">IVAP</option>
                          <option value="3">CDT</option>
                          <option value="5">CGE</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 pull-right">
                    <ul class="nav nav-tabs col-xs-12 col-md-8 pull-right">
                      <li class="active">
                        <a data-toggle="tab" href="#sectionA"> <?= $this->language->getPhrase("key_spanish",$_SESSION['lang']) ?></a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#sectionB"> <?= $this->language->getPhrase("key_valencian",$_SESSION['lang']) ?></a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#sectionC"> <?= $this->language->getPhrase("key_english",$_SESSION['lang']) ?></a>
                      </li>
                      
                    </ul>
                    <div class="border tab-content col-xs-12 col-md-8 pull-right">
                      <div id="sectionA" class="tab-pane fade in active">
                        <div class="form-group col-xs-12 required">
                          <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_course_title",$_SESSION['lang']) ?></label>
                          <div class="col-md-9">
                            <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_course_title",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                            
                          </div>
                        </div>
                        <div class="form-group col-xs-12 required">
                          <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_course_desc",$_SESSION['lang']) ?></label>
                          <div class="col-md-9">
                            <textarea id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_course_desc",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text"></textarea>
                            
                          </div>
                        </div>
                      </div>
                      <div id="sectionB" class="tab-pane fade">
                        <div class="form-group col-xs-12 required">
                          <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_course_title",$_SESSION['lang']) ?></label>
                          <div class="col-md-9">
                            <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_course_title",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                            
                          </div>
                        </div>
                        <div class="form-group col-xs-12 required">
                          <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_course_desc",$_SESSION['lang']) ?></label>
                          <div class="col-md-9">
                            <textarea id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_course_desc",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text"></textarea>
                            
                          </div>
                        </div>
                      </div>
                      <div id="sectionC" class="tab-pane fade">
                        <div class="form-group col-xs-12 required">
                          <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_course_title",$_SESSION['lang']) ?></label>
                          <div class="col-md-9">
                            <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_course_title",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                            
                          </div>
                        </div>
                        <div class="form-group col-xs-12 required">
                          <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_course_desc",$_SESSION['lang']) ?></label>
                          <div class="col-md-9">
                            <textarea id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_course_desc",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text"></textarea>
                            
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_visible",$_SESSION['lang']) ?></label>
                    <div class="col-md-4 nopadding">
                      <div class="btn-group col-xs-12" data-toggle="buttons">
                        <label class="btn btn-primary active col-xs-6">
                          <input type="radio" name="org_visible" id="option1" autocomplete="off" checked value="1"> <?= $this->language->getPhrase("key_yes",$_SESSION['lang']) ?>
                        </label>
                        <label class="btn btn-primary col-xs-6">
                          <input type="radio" name="org_visible" id="option1" autocomplete="off" value="0"> <?= $this->language->getPhrase("key_no",$_SESSION['lang']) ?>
                        </label>
                      </div>
                    </div>
                  </div>
                  
                  
                </div>
              </div>
            </div>
            
            <!-- Form Name -->
            <!-- <legend class="scheduler-border">Otros datos</legend> -->
            <!-- Multiple Checkboxes -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. <?= $this->language->getPhrase("key_course_creation",$_SESSION['lang']) ?></a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse out">
                <div class="panel-body">
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_course_company",$_SESSION['lang']) ?></label>
                    <div class="col-md-4">
                      <select id="select-user1" class="contacts" placeholder="<?= $this->language->getPhrase("key_select_company",$_SESSION['lang']) ?>">
                        <option value=""><?= $this->language->getPhrase("key_select_company",$_SESSION['lang']) ?></option>
                        <option value="1">Empresa 1</option>
                        <option value="3">Empresa 2</option>
                        <option value="5">Empresa 3</option>
                        <option value="5">Empresa 4</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_course_author",$_SESSION['lang']) ?></label>
                    <div class="col-xs-12 col-md-4" style="padding-right:0px;">
                      <div class="col-xs-12 form-group multiple-form-group input-group" style="padding-left: 0px;">
                        <select id="select-user1" class="contacts" placeholder="<?= $this->language->getPhrase("key_select_author",$_SESSION['lang']) ?>">
                          <option value=""><?= $this->language->getPhrase("key_select_author",$_SESSION['lang']) ?></option>
                          <option value="4">Thomas Edison</option>
                          <option value="1">Nikola</option>
                          <option value="3">Nikola Tesla</option>
                          <option value="5">Arnold Schwarzenegger</option>
                        </select>
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-success btn-add"  style="margin-top: -5px;height: 33px;"><span class="glyphicon glyphicon-plus"></span></button>
                        </span>
                      </div>
                    </div>
                  </div>

              
                  
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_email",$_SESSION['lang']) ?></label>
                    <div class="col-xs-12 col-md-4" style="padding-right:0px;">
                      <div class="col-xs-12 form-group multiple-form-group input-group" style="padding-left: 0px;">
                        <input type="text" name="contacts['value'][]" class="form-control" placeholder="<?= $this->language->getPhrase("key_placeholder_org_email",$_SESSION['lang']) ?>">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-success btn-add" ><span class="glyphicon glyphicon-plus"></span></button>
                        </span>
                      </div>
                    </div>
                  </div>
                    
                    <div class="form-group required">
                      <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_phone",$_SESSION['lang']) ?></label>
                      <div class="col-xs-12 col-md-4" style="padding-right:0px;">
                        <div class="col-xs-12 form-group multiple-form-group input-group" style="padding-left: 0px;">
                          <input type="text" name="contacts['value'][]" class="form-control" placeholder="<?= $this->language->getPhrase("key_placeholder_org_phone",$_SESSION['lang']) ?>">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-success btn-add" ><span class="glyphicon glyphicon-plus"></span></button>
                          </span>
                        </div></div>
                        
                      </div>
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_creation_tool",$_SESSION['lang']) ?></label>
                    
                    <div class="col-xs-12 col-md-8 nopadding pull-right">
                      <div class="col-xs-8 col-md-6">
                        <select id="select-user1" class="contacts" placeholder="<?= $this->language->getPhrase("key_select_tool",$_SESSION['lang']) ?>">
                          <option value=""><?= $this->language->getPhrase("key_select_tool",$_SESSION['lang']) ?></option>
                          <option value="4">exeLearning</option>
                          <option value="1">SapsEditor</option>
                          <option value="3">HotPotato</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_creation_tool_version",$_SESSION['lang']) ?></label>
                    
                    <div class="col-xs-12 col-md-8 nopadding pull-right">
                      <div class="col-xs-8 col-md-6">
                        <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_tool_version",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                      </div>
                    </div>
                  </div>
                  <!--
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?php //echo $this->language->getPhrase("key_created_by",$_SESSION['lang']) ?></label>
                    
                    <div class="col-xs-12 col-md-8 nopadding pull-right">
                      <div class="col-xs-8 col-md-6">
                        <div id="textinput" name="textinput" style="height: 34px;padding: 6px 12px;">Sheldon Lee Cooper</div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?php //echo $this->language->getPhrase("key_created_on_date",$_SESSION['lang']) ?></label>
                    
                    <div class="col-xs-12 col-md-8 nopadding pull-right">
                      <div class="col-xs-8 col-md-6">
                        <div id="textinput" name="textinput" style="height: 34px;padding: 6px 12px;">29/04/2015</div>
                      </div>
                    </div>
                  </div>
                  -->
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_type",$_SESSION['lang']) ?></label>
                    
                    <div class="col-xs-12 col-md-8 nopadding pull-right">
                      <div class="col-xs-8 col-md-6">
                        <select id="select-user1" class="contacts" placeholder="<?= $this->language->getPhrase("key_select_type",$_SESSION['lang']) ?>">
                          <option value=""><?= $this->language->getPhrase("key_select_type",$_SESSION['lang']) ?></option>
                          <option value="4">Tipo 1</option>
                          <option value="2">Tipo 2</option>
                          <option value="3">Tipo 3</option>
                          <option value="4">Tipo 4</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            
            <!-- Form Name -->
            <!-- <legend class="scheduler-border">Preferencias</legend> -->
            <!-- Select Basic -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. <?= $this->language->getPhrase("key_educational_info",$_SESSION['lang']) ?></a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse out">
                <div class="panel-body">
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_online_hours",$_SESSION['lang']) ?></label>
                    
                    <div class="col-xs-12 col-md-8 nopadding pull-right">
                      <div class="col-xs-8 col-md-6">
                        <input id="textinput" name="textinput" class="form-control input-md" required="required" type="number" min="0">
                      </div>
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_classroom_hours",$_SESSION['lang']) ?></label>
                    
                    <div class="col-xs-12 col-md-8 nopadding pull-right">
                      <div class="col-xs-8 col-md-6">
                        <input id="textinput" name="textinput" class="form-control input-md" required="required" type="number" min="0">
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_others",$_SESSION['lang']) ?></label>
                    
                    <div class="col-xs-12 col-md-8 nopadding pull-right">
                      <div class="col-xs-8 col-md-6">
                        <input id="textinput" name="textinput" class="form-control input-md" required="required" type="number" min="0">
                      </div>
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_total_hours",$_SESSION['lang']) ?></label>
                    
                    <div class="col-xs-12 col-md-8 nopadding pull-right">
                      <div class="col-xs-8 col-md-6">
                        <input id="textinput" name="textinput" class="form-control input-md" required="required" type="number" min="0">
                      </div>
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_course_structure",$_SESSION['lang']) ?></label>
                    <div class="col-md-8">
                      <ul class="nav nav-tabs col-xs-12 col-md-12 pull-right">
                        <li class="active">
                          <a data-toggle="tab" href="#sectionA1"> <?= $this->language->getPhrase("key_spanish",$_SESSION['lang']) ?></a>
                        </li>
                        <li>
                          <a data-toggle="tab" href="#sectionB2"> <?= $this->language->getPhrase("key_valencian",$_SESSION['lang']) ?></a>
                        </li>
                        <li>
                          <a data-toggle="tab" href="#sectionC3"> <?= $this->language->getPhrase("key_english",$_SESSION['lang']) ?></a>
                        </li>
                        
                      </ul>
                      <div class="border tab-content col-xs-12 col-md-12 pull-right">
                        <div id="sectionA1" class="tab-pane fade in active">

                          <div class="form-group required" style="margin-bottom:5px;">
                            <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_module",$_SESSION['lang']) ?></label>
                            <div class="col-xs-12 col-md-9 nopadding pull-right">
                            <div class="col-xs-12 col-md-11" style="padding-right:0px;">
                              <div class="col-xs-12 form-group multiple-form-group input-group" style="padding-left: 0px;">
                                <input type="text" name="contacts['value'][]" class="form-control" placeholder="<?= $this->language->getPhrase("key_placeholder_module_name",$_SESSION['lang']) ?>">
                                <span class="input-group-btn">
                                  <button type="button" class="btn btn-success btn-add" ><span class="glyphicon glyphicon-plus"></span></button>
                                </span>
                              </div>
                            </div>
                            </div>
                          </div>

                          <div class="form-group col-xs-12 required">
                            <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_extended_modules",$_SESSION['lang']) ?></label>
                            <div class="col-md-9">
                              <textarea id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_extended_modules",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text"></textarea>
                              
                            </div>
                          </div>
                          <div class="form-group col-xs-12 required">
                            <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_competences",$_SESSION['lang']) ?></label>
                            <div class="col-md-9">
                              <textarea id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_competences",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text"></textarea>
                              
                            </div>
                          </div>
                        </div>
                        <div id="sectionB2" class="tab-pane fade">
                          <div class="form-group required" style="margin-bottom:5px;">
                            <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_module",$_SESSION['lang']) ?></label>
                            <div class="col-xs-12 col-md-9 nopadding pull-right">
                            <div class="col-xs-12 col-md-11" style="padding-right:0px;">
                              <div class="col-xs-12 form-group multiple-form-group input-group" style="padding-left: 0px;">
                                <input type="text" name="contacts['value'][]" class="form-control" placeholder="<?= $this->language->getPhrase("key_placeholder_module_name",$_SESSION['lang']) ?>">
                                <span class="input-group-btn">
                                  <button type="button" class="btn btn-success btn-add" ><span class="glyphicon glyphicon-plus"></span></button>
                                </span>
                              </div>
                            </div>
                            </div>
                          </div>
                          <div class="form-group col-xs-12 required">
                            <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_extended_modules",$_SESSION['lang']) ?></label>
                            <div class="col-md-9">
                              <textarea id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_extended_modules",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text"></textarea>
                              
                            </div>
                          </div>
                          <div class="form-group col-xs-12 required">
                            <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_competences",$_SESSION['lang']) ?></label>
                            <div class="col-md-9">
                              <textarea id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_competences",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text"></textarea>
                              
                            </div>
                          </div>
                        </div>
                        <div id="sectionC3" class="tab-pane fade">
                          <div class="form-group required" style="margin-bottom:5px;">
                            <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_module",$_SESSION['lang']) ?></label>
                            <div class="col-xs-12 col-md-9 nopadding pull-right">
                            <div class="col-xs-12 col-md-11" style="padding-right:0px;">
                              <div class="col-xs-12 form-group multiple-form-group input-group" style="padding-left: 0px;">
                                <input type="text" name="contacts['value'][]" class="form-control" placeholder="<?= $this->language->getPhrase("key_placeholder_module_name",$_SESSION['lang']) ?>">
                                <span class="input-group-btn">
                                  <button type="button" class="btn btn-success btn-add" ><span class="glyphicon glyphicon-plus"></span></button>
                                </span>
                              </div>
                            </div>
                            </div>
                          </div>

                          <div class="form-group col-xs-12 required">
                            <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_extended_modules",$_SESSION['lang']) ?></label>
                            <div class="col-md-9">
                              <textarea id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_extended_modules",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text"></textarea>
                              
                            </div>
                          </div>
                          <div class="form-group col-xs-12 required">
                            <label class="col-md-3 control-label"><?= $this->language->getPhrase("key_competences",$_SESSION['lang']) ?></label>
                            <div class="col-md-9">
                              <textarea id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_competences",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text"></textarea>
                              
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  
                  
                  
                </div>
              </div>
            </div>
            
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">4. <?= $this->language->getPhrase("key_publication_data",$_SESSION['lang']) ?></a>
                </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse out">
                <div class="panel-body">
                  <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_visible",$_SESSION['lang']) ?></label>
                    <div class="col-md-4 nopadding">
                      <div class="btn-group col-xs-12" data-toggle="buttons">
                        <label class="btn btn-primary active col-xs-6">
                          <input type="radio" name="org_visible" id="option1" autocomplete="off" checked value="1"> <?= $this->language->getPhrase("key_yes",$_SESSION['lang']) ?>
                        </label>
                        <label class="btn btn-primary col-xs-6">
                          <input type="radio" name="org_visible" id="option1" autocomplete="off" value="0"> <?= $this->language->getPhrase("key_no",$_SESSION['lang']) ?>
                        </label>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_more_info",$_SESSION['lang']) ?></label>
                    <div class="col-md-8 pull-right">
                      <input id="input-704" type="file" multiple=true class="file-loading">
                    </div>
                  </div>
                  
                   <div class="form-group required">
                    <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_info_url",$_SESSION['lang']) ?></label>
                    
                    <div class="col-xs-12 col-md-8 nopadding pull-right">
                      <div class="col-xs-8 col-md-6">
                        <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_info_url",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
        <div class="col-md-4 control-label pull-right">
          <button class="btn btn-primary"><?= $this->language->getPhrase("key_create_course",$_SESSION['lang']) ?></button>
        </div>
      </form>
      <!-- FIN DE LA FICHA DE REGISTRO -->
      
      </div><!-- /.box-body -->
      </div><!-- /.box -->
      </section><!-- /.content -->