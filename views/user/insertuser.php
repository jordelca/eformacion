      
        <!-- Content Header (Page header) -->
        <section class="col-xs-12 content-header">
            <h1 class="col-xs-12 col-md-6">
                <?= $this->language->getPhrase("key_registry",$_SESSION['lang']) ?>
                <small><?= $this->language->getPhrase("key_quick_creation",$_SESSION['lang']) ?></small>
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
                              <label class="col-md-4 control-label" for="textinput"><?= $this->language->getPhrase("key_user",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_user",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                                
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group required">
                              <label class="col-md-4 control-label" for="textinput"><?= $this->language->getPhrase("key_first_surname",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_first_surname",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                                
                              </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group required">
                              <label class="col-md-4 control-label" for="textinput"><?= $this->language->getPhrase("key_second_surname",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_second_surname",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                                
                              </div>
                            </div>
                            <!-- Multiple Radios (inline) -->
                            <div class="form-group required">
                              <label class="col-md-4 control-label" for="radios"><?= $this->language->getPhrase("key_document_type",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <label class="radio-inline" for="dni">
                                  <input name="IdType" id="dni" value="1" checked="true" type="radio">
                                  <?= $this->language->getPhrase("key_option_dni",$_SESSION['lang']) ?>
                                </label>
                                <label class="radio-inline" for="nie">
                                  <input name="IdType" id="nie" value="2" type="radio">
                                  <?= $this->language->getPhrase("key_option_nie",$_SESSION['lang']) ?>
                                </label>
                                <label class="radio-inline" for="passport">
                                  <input name="IdType" id="passport" value="2" type="radio">
                                  <?= $this->language->getPhrase("key_option_passport",$_SESSION['lang']) ?>
                                </label>
                              </div>
                            </div>
                            <!-- Button Drop Down -->
                            <div class="form-group required">
                              <label class="col-md-4 control-label" for="buttondropdown"><?= $this->language->getPhrase("key_user_dni",$_SESSION['lang']) ?></label>
                              <div class="col-md-3">
                                <div class="input-group col-xs-12">
                                  <input id="dniField" name="buttondropdown" class="form-control" placeholder="<?= $this->language->getPhrase("key_placeholder_dni",$_SESSION['lang']) ?>" required="required" type="text" maxlength="8">


                                   <div class="input-group-btn">
                                    <button id="dniChar" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <?= $this->language->getPhrase("key_placeholder_letter",$_SESSION['lang']) ?>
                                    </button>
                                  </div>

                                </div>
                                <span class="col-xs-12 help-block"><?= $this->language->getPhrase("key_help_dni",$_SESSION['lang']) ?></span>
                              </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group required">
                              <label class="col-md-4 control-label" for="textinput"><?= $this->language->getPhrase("key_user_email",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_user_email",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                                
                              </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group required">
                              <label class="col-md-4 control-label" for="textinput"><?= $this->language->getPhrase("key_user_phone",$_SESSION['lang']) ?></label>
                              <span class="glyphicon glyphicon-question-sign popover-right" data-toggle="popover" tabindex="0" data-trigger="focus" title="Diferentes formatos de introducir un teléfono" data-content="Puedes introducir el teléfono de contacto de las siguientes formas: 961234567 / +34123456789 / 0034 123456789 / 123456 (Extensión GVA)"></span>
                              <div class="col-md-3">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_user_phone",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                                
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
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. <?= $this->language->getPhrase("key_other_data",$_SESSION['lang']) ?></a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse out">
                          <div class="panel-body">
                            <div class="form-group">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_gender",$_SESSION['lang']) ?></label>
                              <div class="col-xs-2">
                                <select class="form-control">
                                  <option> - </option>
                                  <option><?= $this->language->getPhrase("key_man",$_SESSION['lang']) ?></option>
                                  <option><?= $this->language->getPhrase("key_woman",$_SESSION['lang']) ?></option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_date_birth",$_SESSION['lang']) ?></label>
                              <div class="col-xs-2">
                                <select class="form-control">
                                  <option><?= $this->language->getPhrase("key_day",$_SESSION['lang']) ?></option>
                                  <option>01</option>
                                  <option>02</option>
                                  <option>03</option>
                                  <option>04</option>
                                  <option>05</option>
                                  <option>06</option>
                                  <option>07</option>
                                  <option>08</option>
                                  <option>09</option>
                                  <option>10</option>
                                  <option>11</option>
                                  <option>12</option>
                                  <option>13</option>
                                  <option>14</option>
                                  <option>15</option>
                                  <option>16</option>
                                  <option>17</option>
                                  <option>18</option>
                                  <option>19</option>
                                  <option>20</option>
                                  <option>21</option>
                                  <option>22</option>
                                  <option>23</option>
                                  <option>24</option>
                                  <option>25</option>
                                  <option>26</option>
                                  <option>27</option>
                                  <option>28</option>
                                  <option>29</option>
                                  <option>30</option>
                                  <option>31</option>
                                </select>
                              </div>
                              <div class="col-xs-2">
                                <select class="form-control">
                                  <option><?= $this->language->getPhrase("key_month",$_SESSION['lang']) ?></option>
                                  <option><?= $this->language->getPhrase("key_january",$_SESSION['lang']) ?></option>
                                  <option><?= $this->language->getPhrase("key_february",$_SESSION['lang']) ?></option>
                                  <option><?= $this->language->getPhrase("key_march",$_SESSION['lang']) ?></option>
                                  <option><?= $this->language->getPhrase("key_april",$_SESSION['lang']) ?></option>
                                  <option><?= $this->language->getPhrase("key_may",$_SESSION['lang']) ?></option>
                                  <option><?= $this->language->getPhrase("key_june",$_SESSION['lang']) ?></option>
                                  <option><?= $this->language->getPhrase("key_july",$_SESSION['lang']) ?></option>
                                  <option><?= $this->language->getPhrase("key_august",$_SESSION['lang']) ?></option>
                                  <option><?= $this->language->getPhrase("key_september",$_SESSION['lang']) ?></option>
                                  <option><?= $this->language->getPhrase("key_october",$_SESSION['lang']) ?></option>
                                  <option><?= $this->language->getPhrase("key_november",$_SESSION['lang']) ?></option>
                                  <option><?= $this->language->getPhrase("key_december",$_SESSION['lang']) ?></option>
                                </select>
                              </div>
                              <div class="col-xs-2">
                                <select class="form-control">
                                  <option><?= $this->language->getPhrase("key_year",$_SESSION['lang']) ?></option>
                                  <option>1970</option>
                                  <option>1971</option>
                                  <option>1972</option>
                                  <option>1973</option>
                                  <option>1974</option>
                                  <option>1975</option>
                                  <option>1976</option>
                                  <option>1977</option>
                                  <option>1978</option>
                                  <option>1979</option>
                                  <option>1980</option>
                                  <option>1981</option>
                                  <option>1982</option>
                                  <option>1983</option>
                                  <option>1984</option>
                                  <option>1985</option>
                                  <option>1986</option>
                                  <option>1987</option>
                                  <option>1988</option>
                                  <option>1989</option>
                                  <option>1990</option>
                                  <option>1991</option>
                                  <option>1992</option>
                                  <option>1993</option>
                                  <option>1994</option>
                                  <option>1995</option>
                                  <option>1996</option>
                                  <option>1997</option>
                                </select>
                            </div>
                          </div>
                          <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput"><?= $this->language->getPhrase("key_other_phone",$_SESSION['lang']) ?></label>
                            <div class="col-md-3">
                              <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_help_phone",$_SESSION['lang']) ?>" class="form-control input-md" type="text">
                              
                            </div>
                          </div>
                          <!-- Select Basic -->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_select_country",$_SESSION['lang']) ?></label>
                            <div class="col-md-4">
                              <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value=""><?= $this->language->getPhrase("key_germany",$_SESSION['lang']) ?></option>
                                <option value="" selected="selected"><?= $this->language->getPhrase("key_spain",$_SESSION['lang']) ?></option>                                
                                <option value=""><?= $this->language->getPhrase("key_france",$_SESSION['lang']) ?></option>
                                <option value=""><?= $this->language->getPhrase("key_united_kingdom",$_SESSION['lang']) ?></option>
                              </select>
                            </div>
                          </div>
                          <!-- Select Basic -->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_select_region",$_SESSION['lang']) ?></label>
                            <div class="col-md-4">
                              <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value="">Valencia</option>
                                <option value="">Castellón</option>
                                <option value="">Alicante</option>
                                <option value=""><?= $this->language->getPhrase("key_other",$_SESSION['lang']) ?></option>
                              </select>
                            </div>
                          </div>
                          <!-- Select Basic -->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_select_city",$_SESSION['lang']) ?></label>
                            <div class="col-md-4">
                              <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value="">Ademuz</option>
                                <option value="">Ador</option>
                                <option value="">Adzaneta de Albaida</option>
                                <option value="">Agullent</option>
                              </select>
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
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. <?= $this->language->getPhrase("key_preferences",$_SESSION['lang']) ?></a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse out">
                        <div class="panel-body">
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton"><?= $this->language->getPhrase("key_user_img",$_SESSION['lang']) ?></label>
                            <div class="col-md-4">
                              <input id="filebutton" name="filebutton" class="input-file" type="file">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_select_lang",$_SESSION['lang']) ?></label>
                            <div class="col-md-2">
                              <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value=""><?= $this->language->getPhrase("key_spanish",$_SESSION['lang']) ?></option>
                                <option value=""><?= $this->language->getPhrase("key_valencian",$_SESSION['lang']) ?></option>
                                <option value=""><?= $this->language->getPhrase("key_english",$_SESSION['lang']) ?></option>
                              </select>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    
                    <!-- Form Name -->
                    <!-- <legend class="scheduler-border">Matrícula</legend> -->
                    <!-- Multiple Radios (inline) -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">4. <?= $this->language->getPhrase("key_enrollment",$_SESSION['lang']) ?></a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="radios"><?= $this->language->getPhrase("key_enrollement_edition",$_SESSION['lang']) ?></label>
                            <div class="col-md-4">
                              <label class="radio-inline" for="enrol1">
                                <input name="enrolToEdition" id="enrol1" value="1" type="radio">
                                <?= $this->language->getPhrase("key_yes",$_SESSION['lang']) ?>
                              </label>
                              <label class="radio-inline" for="enrol0">
                                <input name="enrolToEdition" id="enrol0" value="2" checked="true" type="radio">
                                <?= $this->language->getPhrase("key_no",$_SESSION['lang']) ?>
                              </label>
                            </div>
                          </div>
                          <!-- Select Basic -->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_select_organization",$_SESSION['lang']) ?></label>
                            <div class="col-md-4">
                              <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value="">Centro de Gestión</option>
                                <option value="">SAPS</option>
                                <option value="">EVES</option>
                                <option value="">Centro de Turismo</option>
                                <option value="">IVAP</option>
                              </select>
                            </div>
                          </div>
                          <!-- Select Basic -->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_select_edition",$_SESSION['lang']) ?></label>
                            <div class="col-md-4">
                              <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value="">001 - Curso de pruebas</option>
                                <option value="">002 - Curso de pruebas</option>
                                <option value="">003 - Curso de pruebas</option>
                                <option value="">004 - Curso de pruebas</option>
                                <option value="">005 - Curso de pruebas</option>
                                <option value="">006 - Curso de pruebas</option>
                                <option value="">007 - Curso de pruebas</option>
                                <option value="">008 - Curso de pruebas</option>
                                <option value="">009 - Curso de pruebas</option>
                                <option value="">010 - Curso de pruebas</option>
                                <option value="">011 - Curso de pruebas</option>
                                <option value="">012 - Curso de pruebas</option>
                              </select>
                            </div>
                          </div>
                          <!-- Select Basic -->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_select_rol",$_SESSION['lang']) ?></label>
                            <div class="col-md-4">
                              <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value=""><?= $this->language->getPhrase("key_student",$_SESSION['lang']) ?></option>
                                <option value=""><?= $this->language->getPhrase("key_tutor",$_SESSION['lang']) ?></option>
                                <option value=""><?= $this->language->getPhrase("key_teacher",$_SESSION['lang']) ?></option>
                                <option value=""><?= $this->language->getPhrase("key_administrator",$_SESSION['lang']) ?></option>
                                <option value=""><?= $this->language->getPhrase("key_observer",$_SESSION['lang']) ?></option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 control-label pull-right">
                 <button class="btn btn-primary"><?= $this->language->getPhrase("key_button_register_user",$_SESSION['lang']) ?></button>
                </div>
              </form>
<!-- FIN DE LA FICHA DE REGISTRO -->               
              
              </div><!-- /.box-body -->
              </div><!-- /.box -->
          </section><!-- /.content -->


