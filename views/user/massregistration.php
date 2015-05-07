      
        <!-- Content Header (Page header) -->
        <section class="col-xs-12 content-header">
            <h1 class="col-xs-12 col-md-6">
                <?= $this->language->getPhrase("key_mass_registry",$_SESSION['lang']) ?>
                <!-- <small><?= $this->language->getPhrase("key_quick_creation",$_SESSION['lang']) ?></small> -->
          </h1>                   
        </section>

        <!-- Main content -->

        <!-- Main content -->
        <section class="content row">
        
          <div class="col-xs-12">
            <div class="box">
             


<!-- FICHA DE REGISTRO -->   



                <form class="form-horizontal">

                   
                    
                    <!-- Form Name -->
                    <!-- <legend class="scheduler-border">Matrícula</legend> -->
                    <!-- Multiple Radios (inline) -->
                    <div class="col-xs-12 panel panel-default">
                      
                        <div class="col-xs-12 col-md-12 pull-right panel-body">

                          <div class="form-group">
                            <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_file",$_SESSION['lang']) ?></label>
                            <div class="col-md-8">
                              <input id="input-701" type="file" multiple=true class="file-loading">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_delimiter_csv",$_SESSION['lang']) ?></label>
                            <div class="col-md-2">
                              <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value="">,</option>
                                <option value="" selected="selected">;</option>
                                <option value="">:</option>
                                <option value="">\t</option>
                              </select>
                            </div>
                          </div>
                        
                      
                    
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_coding",$_SESSION['lang']) ?></label>
                            <div class="col-md-2">
                              <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value="UTF-8" selected="selected">UTF-8</option>
                                <option value="WINDOWS-1252">WINDOWS-1252</option>
                                <option value="ISO-8859-1">ISO-8859-1</option>
                                <option value="ASCII">ASCII</option>
                                <option value="ISO-8859-2">ISO-8859-2</option>
                                <option value="ISO-8859-3">ISO-8859-3</option>
                                <option value="ISO-8859-4">ISO-8859-4</option>
                                <option value="ISO-8859-5">ISO-8859-5</option>
                                <option value="ISO-8859-6">ISO-8859-6</option>
                                <option value="ISO-8859-7">ISO-8859-7</option>
                                <option value="ISO-8859-8">ISO-8859-8</option>
                                <option value="ISO-8859-9">ISO-8859-9</option>
                                <option value="ISO-8859-10">ISO-8859-10</option>
                                <option value="ISO-8859-13">ISO-8859-13</option>
                                <option value="ISO-8859-14">ISO-8859-14</option>
                                <option value="ISO-8859-15">ISO-8859-15</option>
                                <option value="ISO-8859-11">ISO-8859-11</option>
                                <option value="WINDOWS-874">WINDOWS-874</option>
                                <option value="WINDOWS-1250">WINDOWS-1250</option>
                                <option value="WINDOWS-1251">WINDOWS-1251</option>
                                <option value="WINDOWS-1253">WINDOWS-1253</option>
                                <option value="WINDOWS-1254">WINDOWS-1254</option>
                                <option value="WINDOWS-1255">WINDOWS-1255</option>
                                <option value="WINDOWS-1256">WINDOWS-1256</option>
                                <option value="WINDOWS-1257">WINDOWS-1257</option>
                                <option value="WINDOWS-1258">WINDOWS-1258</option>
                                <option value="KOI-8R">KOI-8R</option>
                                <option value="MACROMAN">MACROMAN</option>
                                <option value="GB2312">GB2312</option>
                                <option value="BIG5">BIG5</option>
                                <option value="EUC-JP">EUC-JP</option>
                                <option value="SHIFT_JIS">SHIFT_JIS</option>
                                <option value="EUC-KR">EUC-KR</option>
                                <option value="UTF-7">UTF-7</option>
                                <option value="UTF-16">UTF-16</option>
                                <option value="UTF-32">UTF-32</option>
                                <option value="UCS-2">UCS-2</option>
                                <option value="UCS-4">UCS-4</option>
                              </select>
                            </div>
                          </div>


                          <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic"><?= $this->language->getPhrase("key_preview_rows",$_SESSION['lang']) ?></label>
                            <div class="col-md-2">
                              <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value="">10</option>
                                <option value="">20</option>
                                <option value="">100</option>
                                <option value="">1000</option>
                                <option value="">100000</option>
                              </select>
                            </div>
                          </div>

                          <div class="col-xs-12 col-md-4 control-label pull-right nopadding">
                           <button class="col-xs-12 btn btn-primary"><?= $this->language->getPhrase("key_register_users",$_SESSION['lang']) ?></button>
                          </div>
                        </div>

                
              </form>
<!-- FIN DE LA FICHA DE REGISTRO -->               
              
              </div><!-- /.box-body -->
              </div><!-- /.box -->
          </section><!-- /.content -->



                         <!-- <div class="form-group">
                            <label class="col-md-4 control-label" for="radios">Matricular en una edición</label>
                            <div class="col-md-4">
                              <label class="radio-inline" for="enrol1">
                                <input name="enrolToEdition" id="enrol1" value="1" type="radio">
                                Si
                              </label>
                              <label class="radio-inline" for="enrol0">
                                <input name="enrolToEdition" id="enrol0" value="2" checked="true" type="radio">
                                No
                              </label>
                            </div>
                          </div> -->
                          <!-- Select Basic -->
                        <!-- <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">Selecciona una organización</label>
                            <div class="col-md-4">
                              <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value="">Centro de Gestión</option>
                                <option value="">SAPS</option>
                                <option value="">EVES</option>
                                <option value="">Centro de Turismo</option>
                                <option value="">IVAP</option>
                              </select>
                            </div>
                          </div> -->
                          <!-- Select Basic -->
                         <!-- <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">Selecciona una edición</label>
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
                          </div> -->
                          <!-- Select Basic -->
                         <!-- <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">Selecciona rol</label>
                            <div class="col-md-4">
                              <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value="" selected="selected">Alumno</option>
                                <option value="">Tutor</option>
                                <option value="">Profesor</option>
                                <option value="">Observador</option>
                              </select>
                            </div>
                          </div> -->