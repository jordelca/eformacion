<!-- Content Header (Page header) -->
<section class="col-xs-12 content-header">
    <h1 class="col-xs-12">
    Búsqueda general
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
                                                <label class="col-lg-4 control-label"><?= $this->language->getPhrase("key_search",$_SESSION['lang']) ?></label>
                                                <div class="col-md-8 input-group custom-search-form">
                                                  <input type="textinput" class="form-control" placeholder="Introduce tu búsqueda">
                                                  <!--<span class="input-group-btn">
                                                  <button class="btn btn-default" type="button">
                                                  <span class="glyphicon glyphicon-search"></span>
                                                 </button>
                                                 </span> -->
                                                 </div><!-- /input-group -->
                                            </div>
                                        
                                    </br>

                                    
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



                                        <div class="form-group">
                                                <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_num_users",$_SESSION['lang']) ?></label>
                                                <div class="col-md-6">
                                                  <select id="selectbasic" name="selectbasic" class="form-control">
                                                    <option value="">-</option>
                                                    <option value="">Menos de 10 alumnos</option>
                                                    <option value="">11 - 25 alumnos</option>
                                                    <option value="">26 -50 alumnos</option>                                
                                                    <option value="">51- 100 alumnos</option>
                                                    <option value="">101 - 200 alumnos</option>
                                                    <option value="">Más de 200 alumnos</option>
                                                  </select>
                                                </div>
                                              </div>    


    
                                              <div class="form-group">
                                                <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_custom_num_users",$_SESSION['lang']) ?></label>
                                                <div class="col-md-1 icheckbox_flat-blue_custom">
                                                 <input type="checkbox" value="">
                                                </div>
                                                <div class="col-md-7">
                                                <input type="text" id="range_04" name="range_04" value="" style="display:none;"/>
                                                
                                                  <div class="button-reset">
                                                      <button class="btn btn-default js-reset-04"><?= $this->language->getPhrase("key_reset_choice",$_SESSION['lang']) ?></button>
                                                  </div>

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