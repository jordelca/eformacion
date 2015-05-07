      
        <!-- Content Header (Page header) -->
        <section class="col-xs-12 content-header">
            <h1 class="col-xs-12 col-md-6">
                <?= $this->language->getPhrase("key_organization",$_SESSION['lang']) ?>
                <small><?= $this->language->getPhrase("key_edit",$_SESSION['lang']) ?></small>
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
                            <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_name",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_org_name",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                                
                              </div>
                            </div>

                             <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_short_name",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_org_short_name",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_desc",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <textarea id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_org_desc",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="areatext"></textarea>
                              </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_logo",$_SESSION['lang']) ?></label>
                              <div class="col-md-8 pull-right">
                                <input id="input-702" type="file" multiple=true class="file-loading">
                              </div>
                            </div>
                            <!-- Multiple Radios (inline) -->
                            <div class="form-group required">
                              <label class="col-md-4 control-label" for=""><?= $this->language->getPhrase("key_location",$_SESSION['lang']) ?></label>
                              <div class="col-md-8"><div id="map-canvas" class="col-md-12"></div> </div>
                            </div>
                                                         
                            <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_address",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_org_address",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                              </div>
                            </div>
                            <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_postcode",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_org_postcode",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                              </div>
                            </div>

                            <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_country",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                                                    
                                  <select id="select-country" class="contacts" placeholder="<?= $this->language->getPhrase("key_select_country",$_SESSION['lang']) ?>">
                                    <option value=""><?= $this->language->getPhrase("key_select_country",$_SESSION['lang']) ?></option>
                                      <option value="4"><?= $this->language->getPhrase("key_spain",$_SESSION['lang']) ?></option>
                                      <option value="1"><?= $this->language->getPhrase("key_france",$_SESSION['lang']) ?></option>
                                      <option value="3"><?= $this->language->getPhrase("key_italy",$_SESSION['lang']) ?></option>
                                      <option value="5"><?= $this->language->getPhrase("key_germany",$_SESSION['lang']) ?></option>
                                      <option value="5"><?= $this->language->getPhrase("key_united_kingdom",$_SESSION['lang']) ?></option>
                                    </select>
                              </div>
                            </div>
                            <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_region",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <select id="select-region" class="contacts" placeholder="<?= $this->language->getPhrase("key_select_region",$_SESSION['lang']) ?>">
                                    <option value=""><?= $this->language->getPhrase("key_select_region",$_SESSION['lang']) ?></option>
                                      <option value="4"><?= $this->language->getPhrase("key_valencian_region",$_SESSION['lang']) ?></option>
                                      <option value="1"><?= $this->language->getPhrase("key_madrid",$_SESSION['lang']) ?></option>
                                      <option value="3"><?= $this->language->getPhrase("key_catalonia",$_SESSION['lang']) ?></option>
                                      <option value="5"><?= $this->language->getPhrase("key_andalucia",$_SESSION['lang']) ?></option>
                                    </select>
                              </div>
                            </div>
                            <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_subregion",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <select id="select-subregion" class="contacts" placeholder="<?= $this->language->getPhrase("key_select_subregion",$_SESSION['lang']) ?>">
                                    <option value=""><?= $this->language->getPhrase("key_select_subregion",$_SESSION['lang']) ?></option>
                                      <option value="4"><?= $this->language->getPhrase("key_alicante",$_SESSION['lang']) ?></option>
                                      <option value="1"><?= $this->language->getPhrase("key_valencia",$_SESSION['lang']) ?></option>
                                      <option value="3"><?= $this->language->getPhrase("key_castellon",$_SESSION['lang']) ?></option>
                                    </select>
                              </div>
                            </div>
                            <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_city",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <select id="select-city" class="contacts" placeholder="<?= $this->language->getPhrase("key_select_city",$_SESSION['lang']) ?>">
                                    <option value=""><?= $this->language->getPhrase("key_select_city",$_SESSION['lang']) ?></option>
                                      <option value="4"><?= $this->language->getPhrase("key_valencia_city",$_SESSION['lang']) ?></option>
                                      <option value="1"><?= $this->language->getPhrase("key_xativa",$_SESSION['lang']) ?></option>
                                      <option value="3"><?= $this->language->getPhrase("key_burjassot",$_SESSION['lang']) ?></option>
                                      <option value="5"><?= $this->language->getPhrase("key_meliana",$_SESSION['lang']) ?></option>
                                      <option value="5"><?= $this->language->getPhrase("key_utiel",$_SESSION['lang']) ?></option>
                                    </select>
                              </div>
                            </div>
                            <div class="form-group required">
                              <label class="col-xs-12 col-md-4 control-label"><?= $this->language->getPhrase("key_org_email",$_SESSION['lang']) ?></label>
                              <div class="col-xs-10 col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_org_email",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                              </div>
                              <div class="col-xs-2 col-md-4 row">
                              <button class="btn btn-danger btn-xs" data-title="Visible" style="margin:3px;"><span class="glyphicon glyphicon-minus"></span></button>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-xs-12 col-md-4 control-label"></label>
                              <div class="col-xs-10 col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_org_email",$_SESSION['lang']) ?>" class="form-control input-md" type="text">
                              </div>
                              <div class="col-xs-2 col-md-4 row">
                              <button class="btn btn-success btn-xs" data-title="Visible" style="margin:3px;"><span class="glyphicon glyphicon-plus"></span></button><button class="btn btn-danger btn-xs" data-title="Visible" style="margin:3px;"><span class="glyphicon glyphicon-minus"></span></button>
                            </div>
                            </div>
                            <div class="form-group required">
                              <label class="col-xs-12 col-md-4 control-label"><?= $this->language->getPhrase("key_org_phone",$_SESSION['lang']) ?></label>
                              <div class="col-xs-10 col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_org_phone",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                              </div>
                              <div class="col-xs-2 col-md-4 row">
                              <button class="btn btn-danger btn-xs" data-title="Visible" style="margin:3px;"><span class="glyphicon glyphicon-minus"></span></button>
                            </div>
                            </div>
                            <div class="form-group">
                              <label class="col-xs-12 col-md-4 control-label"></label>
                              <div class="col-xs-10 col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_org_phone",$_SESSION['lang']) ?>" class="form-control input-md" type="text">
                              </div>
                              <div class="col-xs-2 col-md-4 row">
                              <button class="btn btn-success btn-xs" data-title="Visible" style="margin:3px;"><span class="glyphicon glyphicon-plus"></span></button><button class="btn btn-danger btn-xs" data-title="Visible" style="margin:3px;"><span class="glyphicon glyphicon-minus"></span></button>
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
                             <div class="form-group">
                              <label class="col-md-4 control-label" for="gva"><?= $this->language->getPhrase("key_campus_gva",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <input id="gva" name="gva"  class="form-control input-md" type="checkbox">
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
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. <?= $this->language->getPhrase("key_administrator",$_SESSION['lang']) ?></a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse out">
                          <div class="panel-body">
                            <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_name",$_SESSION['lang']) ?></label>

                              <div class="col-xs-12 col-md-8 pull-right">
                                <div class="col-xs-4 col-md-4">
                                    <select id="select-user1" class="contacts" placeholder="<?= $this->language->getPhrase("key_select_user",$_SESSION['lang']) ?>">
                                    <option value=""><?= $this->language->getPhrase("key_select_user",$_SESSION['lang']) ?></option>
                                      <option value="4">Thomas Edison</option>
                                      <option value="1">Nikola</option>
                                      <option value="3">Nikola Tesla</option>
                                      <option value="5">Arnold Schwarzenegger</option>
                                    </select>
                                </div>
                                <div class="col-xs-4 col-md-2">
                                  <select class="form-control">
                                      <option><?= $this->language->getPhrase("key_role",$_SESSION['lang']) ?></option>
                                      <option><?= $this->language->getPhrase("key_admin",$_SESSION['lang']) ?></option>
                                      <option><?= $this->language->getPhrase("key_tutor",$_SESSION['lang']) ?></option>
                                    </select>
                                </div>
                                <div class="col-xs-4"><button class="btn btn-danger btn-xs" data-title="Visible" style="margin:3px;"><span class="glyphicon glyphicon-minus"></span></button></div>
                              </div>
                              <div class="col-xs-12 col-md-8 pull-right">
                                <div class="col-xs-4 col-md-4">
                                    <select id="select-user2" class="contacts" placeholder="<?= $this->language->getPhrase("key_select_user",$_SESSION['lang']) ?>">
                                    <option value=""><?= $this->language->getPhrase("key_select_user",$_SESSION['lang']) ?></option>
                                      <option value="4">Thomas Edison</option>
                                      <option value="1">Nikola</option>
                                      <option value="3">Nikola Tesla</option>
                                      <option value="5">Arnold Schwarzenegger</option>
                                    </select>
                                </div>
                                <div class="col-xs-4 col-md-2">
                                  <select class="form-control">
                                      <option><?= $this->language->getPhrase("key_role",$_SESSION['lang']) ?></option>
                                      <option><?= $this->language->getPhrase("key_admin",$_SESSION['lang']) ?></option>
                                      <option><?= $this->language->getPhrase("key_tutor",$_SESSION['lang']) ?></option>
                                    </select>
                                </div>
                                <div class="col-xs-4"><button class="btn btn-success btn-xs" data-title="Visible" style="margin:3px;"><span class="glyphicon glyphicon-plus"></span></button><button class="btn btn-danger btn-xs" data-title="Visible" style="margin:3px;"><span class="glyphicon glyphicon-minus"></span></button></div>
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
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. <?= $this->language->getPhrase("key_data_security",$_SESSION['lang']) ?></a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse out">
                        <div class="panel-body">
                          <div class="form-group">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_lopd_file",$_SESSION['lang']) ?></label>
                              <div class="col-md-8 pull-right">
                                <div class="col-md-4">
                                  <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_lopd_file",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                                </div>
                                <!--<textarea name="editor1" id="editor1" rows="10" cols="80">
                                    
                                </textarea>-->
                              </div>
                            </div>
                         
                          
                        </div>
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">4. <?= $this->language->getPhrase("key_org_languages",$_SESSION['lang']) ?></a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse out">
                        <div class="panel-body">
                                                     <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_default_language",$_SESSION['lang']) ?></label>
                              <div class="col-md-4 nopadding">
                                    <div class="btn-group col-xs-12" data-toggle="buttons">
                                <label class="btn btn-primary active col-xs-4">
                                    <input type="radio" name="org_visible" id="option1" autocomplete="off" checked value="0"> <?= $this->language->getPhrase("key_spanish",$_SESSION['lang']) ?>
                                </label>
                                <label class="btn btn-primary col-xs-4">
                                    <input type="radio" name="org_visible" id="option2" autocomplete="off" value="1"> <?= $this->language->getPhrase("key_valencian",$_SESSION['lang']) ?>
                                </label>
                                <label class="btn btn-primary col-xs-4">
                                    <input type="radio" name="org_visible" id="option3" autocomplete="off" value="2"> <?= $this->language->getPhrase("key_english",$_SESSION['lang']) ?>
                                </label>
                                </div>
                              </div>
                            </div>
                          
                        </div>
                      </div>
                    </div>
                    
                                        <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">5. <?= $this->language->getPhrase("key_social_networks",$_SESSION['lang']) ?></a>
                        </h4>
                      </div>
                      <div id="collapseFive" class="panel-collapse collapse out">
                        <div class="panel-body">
                            <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_facebook",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_facebook",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                              </div>
                            </div>
                              <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_twitter",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_twitter",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                              </div>
                            </div>
                              <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_google_plus",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_google_plus",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                              </div>
                            </div>
                              <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_youtube",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_youtube",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                              </div>
                            </div>

                         
                          
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>

                <div class="col-md-4 control-label pull-right">
                 <button class="btn btn-primary"><?= $this->language->getPhrase("key_create_organization",$_SESSION['lang']) ?></button>
                </div>
              </form>
<!-- FIN DE LA FICHA DE REGISTRO -->               
              
              </div><!-- /.box-body -->
              </div><!-- /.box -->
          </section><!-- /.content -->


