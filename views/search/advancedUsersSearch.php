<!-- Content Header (Page header) -->
<section class="col-xs-12 content-header">
    <h1 class="col-xs-12">
    Búsqueda de usuarios
    <small><?= $this->language->getPhrase("key_search",$_SESSION['lang']) ?></small>
    </h1>
</section>










<section class="content row">
   <div class="col-xs-12">
      <div class="box">
         <div class="box-header table-top1">
            <div class="col-xs-12">
                                 
                                 

                                        <div class="form-group col-lg-8">
                                            <form class="form-horizontal" role="form">
                                              <div class="form-group">
                                                <label class="col-lg-4 control-label">Nombre</label>
                                                <div class="col-md-6">
                                                  <input type="textinput" class="form-control" placeholder="Introduce el nombre">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-lg-4 control-label">Primer apellido</label>
                                                <div class="col-md-6">
                                                  <input type="textinput" class="form-control" placeholder="Introduce el primer apellido">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-lg-4 control-label">Segundo apellido</label>
                                                <div class="col-md-6">
                                                  <input type="textinput" class="form-control" placeholder="Introduce el segundo apellido">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-lg-4 control-label">DNI / NIE / Pasaporte</label>
                                                <div class="col-md-6">
                                                  <input type="textinput" class="form-control" placeholder="Introduce el DNI, NIE o pasaporte">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-lg-4 control-label">Correo electrónico</label>
                                                <div class="col-md-6">
                                                  <input type="textinput" class="form-control" placeholder="Introduce el correo electrónico">
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_age_range",$_SESSION['lang']) ?></label>
                                                <div class="col-md-6">
                                                  <select id="selectbasic" name="selectbasic" class="form-control">
                                                    <option value="">-</option>
                                                    <option value="">Menos de 18 años</option>
                                                    <option value="">18 - 24 años</option>
                                                    <option value="">25 -29 años</option>                                
                                                    <option value="">30- 37 años</option>
                                                    <option value="">38 - 49 años</option>
                                                    <option value="">50 - 65 años</option>
                                                    <option value="">Más de 65 años</option>
                                                  </select>
                                                </div>
                                              </div>    
    
                                              <div class="form-group">
                                                <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_custom_age_range",$_SESSION['lang']) ?></label>
                                                <div class="col-md-1 icheckbox_flat-blue_custom">
                                                 <input type="checkbox" value="">
                                                </div>
                                                <div class="col-md-7">
                                                <input type="text" id="range_03" name="range_03" value="" style="display:none;"/>

                                                <div class="button-reset">
                                                      <button class="btn btn-default js-reset-03"><?= $this->language->getPhrase("key_reset_choice",$_SESSION['lang']) ?></button>
                                                </div>
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label class="col-md-4 control-label" for="radios"><?= $this->language->getPhrase("key_gender",$_SESSION['lang']) ?></label>
                                                <div class="col-md-6">
                                                  <label class="radio-inline" for="dni">
                                                    <input name="IdType" id="man" value="1" type="radio">
                                                    <?= $this->language->getPhrase("key_man",$_SESSION['lang']) ?>
                                                  </label>
                                                  <label class="radio-inline" for="nie">
                                                    <input name="IdType" id="woman" value="2" type="radio">
                                                    <?= $this->language->getPhrase("key_woman",$_SESSION['lang']) ?>
                                                  </label>
                                                  <label class="radio-inline" for="passport">
                                                    <input name="IdType" id="other" value="2" type="radio">
                                                    -
                                                  </label>
                                                </div>
                                              </div>

                                              <!-- <div class="form-group">
                                                <label class="col-lg-4 control-label"><?= $this->language->getPhrase("key_date_sing_up",$_SESSION['lang']) ?></label>
                                                <div class="col-md-6">                                                    
                                                <input id="textinput" name="daterange" value="01/01/2000 - 01/31/2016"  placeholder="<?= $this->language->getPhrase("key_placeholder_org_name",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label class="col-lg-4 control-label"><?= $this->language->getPhrase("key_last_login",$_SESSION['lang']) ?></label>
                                                <div class="col-md-6">                                                    
                                                <input id="textinput" name="daterange" value="01/01/2000 - 01/31/2016"  placeholder="<?= $this->language->getPhrase("key_placeholder_org_name",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                                                </div>
                                              </div> -->

                                              <div class="form-group">
                                                  <label class="col-lg-4 control-label"><?= $this->language->getPhrase("key_date_sing_up",$_SESSION['lang']) ?></label>
                                                  <div class="col-md-6">
                                                      <div class="input-daterange" id="datepicker">
                                                          <div class="input-group">
                                                            <input type="text" class="input-small form-control" name="start"/>
                                                            <span class="input-group-addon">hasta</span>
                                                            <input type="text" class="input-small form-control" name="end"/>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>


                                              <div class="form-group">
                                                  <label class="col-lg-4 control-label"><?= $this->language->getPhrase("key_last_login",$_SESSION['lang']) ?></label>
                                                  <div class="col-md-6">
                                                      <div class="input-daterange" id="datepicker">
                                                          <div class="input-group">
                                                            <input type="text" class="input-small form-control" name="start"/>
                                                            <span class="input-group-addon">hasta</span>
                                                            <input type="text" class="input-small form-control" name="end"/>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_user_country",$_SESSION['lang']) ?></label>
                                                <div class="col-md-6">
                                                  <select id="selectbasic" name="selectbasic" class="form-control">
                                                    <option value="">Todos</option>
                                                    <option value=""><?= $this->language->getPhrase("key_germany",$_SESSION['lang']) ?></option>
                                                    <option value="" selected><?= $this->language->getPhrase("key_spain",$_SESSION['lang']) ?></option>                                
                                                    <option value=""><?= $this->language->getPhrase("key_france",$_SESSION['lang']) ?></option>
                                                    <option value=""><?= $this->language->getPhrase("key_united_kingdom",$_SESSION['lang']) ?></option>
                                                  </select>
                                                </div>
                                              </div>
                                              <!-- Select Basic -->
                                              <div class="form-group">
                                                <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_select_region",$_SESSION['lang']) ?></label>
                                                <div class="col-md-6">
                                                  <select id="selectbasic" name="selectbasic" class="form-control">
                                                    <option value="">Todas</option>
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
                                                <div class="col-md-6">
                                                  <select id="selectbasic" name="selectbasic" class="form-control">
                                                    <option value="">Todas</option>
                                                    <option value="">Ademuz</option>
                                                    <option value="">Ador</option>
                                                    <option value="">Adzaneta de Albaida</option>
                                                    <option value="">Agullent</option>
                                                  </select>
                                                </div>
                                              </div>

                                              
                                              
                                              <div class="form-group">
                                                <label class="col-lg-4 control-label"><?= $this->language->getPhrase("key_organization",$_SESSION['lang']) ?></label>
                                                <div class="col-md-8">
                                                <select class="form-control">
                                                    <option value="0" selected>Todas las organizaciones</option>
                                                    <option value="1">EVES</option>
                                                    <option value="2">IVAP</option>
                                                    <option value="3">Centro de gestión</option>
                                                    <option value="4">SAPS</option>
                                                    <option value="5">Centre de Turisme</option>
                                                </select>
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label class="col-lg-4 control-label"><?= $this->language->getPhrase("key_course",$_SESSION['lang']) ?></label>
                                                <div class="col-md-8">
                                                <select class="form-control">
                                                    <option value="0" selected>Todos los cursos</option>
                                                    <option value="1">Curso Número 1</option>
                                                    <option value="2">Curso Número 2</option>
                                                    <option value="3">Curso Número 3</option>
                                                    <option value="4">Curso Número 4</option>
                                                    <option value="5">Curso Número 5</option>
                                                </select>
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label class="col-lg-4 control-label"><?= $this->language->getPhrase("key_edition",$_SESSION['lang']) ?></label>
                                                <div class="col-md-8">
                                                <select class="form-control">
                                                    <option value="0" selected>Todas las ediciones</option>
                                                    <option value="1">Edición Número 1</option>
                                                    <option value="2">Edición Número 2</option>
                                                    <option value="3">Edición Número 3</option>
                                                    <option value="4">Edición Número 4</option>
                                                    <option value="5">Edición Número 5</option>
                                                </select>
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label class="col-lg-4 control-label"><?= $this->language->getPhrase("key_group",$_SESSION['lang']) ?></label>
                                                <div class="col-md-8">
                                                <select class="form-control">
                                                    <option value="0" selected>Todos los grupos</option>
                                                    <option value="1">Grupo A</option>
                                                    <option value="1">Grupo B</option>
                                                    <option value="1">Grupo C</option>
                                                    <option value="1">Grupo D</option>
                                                    <option value="1">Grupo E</option>
                                                </select>
                                                </div>
                                              </div>
                                              
                                            </form>
                                        </div>
                                              <div class="form-group col-lg-12">
                                                <div class="col-md-3 control-label pull-right">
                                                <button type="submit" class="btn btn-primary btn-block">Buscar</button>
                                                </div>
                                              </div> 
                                    
                              </div>
                              

                          
         </div>
         <!-- /.row -->
      </div>
      <!-- /.box-body -->
   </div>
   <!-- /.box -->
</section>
           
                


                


          <!--  </div>
            
            <div class="box-header table-bottom">
                <div class="col-xs-12">
                </div>
            </div>
        </div>
    </div>
</section>-->    