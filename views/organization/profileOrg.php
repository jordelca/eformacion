<!-- Content Header (Page header) -->
<section class="col-xs-12 content-header">
  <h1 class="col-xs-10"><?= $this->language->getPhrase("key_file_organization",$_SESSION['lang']) ?></h1>   
    <div class="profile-header-right">
        <div>
          <a href="/<?=$_SESSION['lang'];?>/user/edit" data-original-title="<?= $this->language->getPhrase("key_edit_user",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><?= $this->language->getPhrase("key_edit",$_SESSION['lang']) ?></i></a>
          <a data-original-title="<?= $this->language->getPhrase("key_remove_user",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><?= $this->language->getPhrase("key_remove",$_SESSION['lang']) ?></i></a>
        </div>
    </div>
</section>

<!-- Main content -->


<section class="content row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">

        <div class="">
          <div class="">       
           <!-- <div class="profile-header-right">
              <div>
                <a href="/<?=$_SESSION['lang'];?>/user/edit" data-original-title="<?= $this->language->getPhrase("key_edit_user",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><?= $this->language->getPhrase("key_edit",$_SESSION['lang']) ?></i></a>
                <a data-original-title="<?= $this->language->getPhrase("key_remove_user",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><?= $this->language->getPhrase("key_remove",$_SESSION['lang']) ?></i></a>
              </div>
            </div> -->

            <div class="row persist-area" style="margin:0px;">
              <div class="col-md-3 col-lg-3 persist-header" align="center" style="background-color:white;padding:30px;z-index: 1;">
                <img alt="User Pic" src="../../dist/img/logo_eves.jpg" class="img-circle">                           
                <dl>
                  <tr><td>Escuela Valencia de Estudios de la Salud</td></tr>
                </dl>
              </div>

              <div class="col-md-9 col-lg-9">
                <div class="bs-example">
                  <div class="panel-group" id="accordion">


                    <!-- ------------------------------ DATOS DE LA ORGANIZACIÓN ---------------------------------------------- -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. <?= $this->language->getPhrase("key_organization_data",$_SESSION['lang']) ?></a>
                        </h4>
                      </div>

                      <div id="collapseOne" class="panel-collapse collapse in">                          
                        <table class="table orgTableBasic table-user-information">
                          <tbody>
                            <tr>
                              <td><?= $this->language->getPhrase("key_org_name",$_SESSION['lang']) ?></td>
                              <td>Escuela valenciana de estudios de la salud</td>
                            </tr>
                            <tr>
                              <td><?= $this->language->getPhrase("key_org_short_name",$_SESSION['lang']) ?></td>
                              <td>EVES</td>
                            </tr>
                            <tr>
                              <td><?= $this->language->getPhrase("key_org_desc",$_SESSION['lang']) ?></td>
                              <td>Quisque et pellentesque nibh. Fusce ullamcorper feugiat tortor ac porttitor. Nulla ut magna egestas, mattis nibh vel, feugiat mi. Cras vel tincidunt purus. Cras blandit orci non tristique ultrices. Integer at turpis nulla. Mauris mattis vitae nunc id dapibus. Cras placerat cursus mollis</td>
                            </tr>
                            <tr>
                              <td><?= $this->language->getPhrase("key_org_email",$_SESSION['lang']) ?></td>
                              <td><a href="mailto:info@eves.com">info@eves.com</a></td>
                            </tr>
                            <tr>
                              <td><?= $this->language->getPhrase("key_org_phone",$_SESSION['lang']) ?></td>
                              <td>123-4567-890</td>                                       
                            </tr>
                            <tr>
                              <td><?= $this->language->getPhrase("key_other_phone",$_SESSION['lang']) ?></td>
                              <td>555-4567-890</td>                                       
                            </tr>
                            <tr>
                              <td><?= $this->language->getPhrase("key_org_address",$_SESSION['lang']) ?></td>
                              <td>C/ Juan de Garay nº 21</td>
                            </tr>
                            <tr>
                              <td><?= $this->language->getPhrase("key_org_postcode",$_SESSION['lang']) ?></td>
                              <td>46017</td>
                            </tr>
                            <tr>
                              <td><?= $this->language->getPhrase("key_org_city",$_SESSION['lang']) ?></td>
                              <td>Burjassot</td>
                            </tr>
                            <tr>
                              <td><?= $this->language->getPhrase("key_org_subregion",$_SESSION['lang']) ?></td>
                              <td>Valencia</td>
                            </tr>
                            <tr>
                              <td><?= $this->language->getPhrase("key_user_country",$_SESSION['lang']) ?></td>
                              <td>España</td>
                            </tr>
                            <tr>
                              <td><?= $this->language->getPhrase("key_date_sing_up",$_SESSION['lang']) ?></td>
                              <td>16/09/2005</td>
                            </tr>
                            

                          </tbody>
                        </table>                              
                      </div>
                    </div>


                    <!-- ------------------------------ DATOS DEL ADMINISTRADOR -------------------------------------------------- -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. <?= $this->language->getPhrase("key_organization_admin",$_SESSION['lang']) ?></a>
                        </h4>
                      </div>

                      <div id="collapseTwo" class="panel-collapse collapse out">                          
                        <table class="table orgTableAdmin table-user-information">
                          <tbody>
                                          <tr>
                                             <td><?= $this->language->getPhrase("key_user_name",$_SESSION['lang']) ?></td>
                                             <td>Sheldon</td>
                                          </tr>
                                          <tr>
                                             <td><?= $this->language->getPhrase("key_first_surname",$_SESSION['lang']) ?></td>
                                             <td>Lee</td>
                                          </tr>
                                          <tr>
                                             <td><?= $this->language->getPhrase("key_second_surname",$_SESSION['lang']) ?></td>
                                             <td>Cooper</td>
                                          </tr>
                                          <tr>
                                             <td><?= $this->language->getPhrase("key_date_birth",$_SESSION['lang']) ?></td>
                                             <td>01/01/1988</td>
                                          </tr>
                                          <tr>
                                             <td><?= $this->language->getPhrase("key_gender",$_SESSION['lang']) ?></td>
                                             <td>Hombre</td>
                                          </tr>
                                          <tr>
                                             <td><?= $this->language->getPhrase("key_user_email",$_SESSION['lang']) ?></td>
                                             <td><a href="mailto:info@support.com">info@support.com</a></td>
                                          </tr>
                                          <tr>
                                             <td><?= $this->language->getPhrase("key_user_phone",$_SESSION['lang']) ?></td>
                                             <td>123-4567-890</td>
                                          </tr>
                                          <tr>
                                             <td><?= $this->language->getPhrase("key_other_phone",$_SESSION['lang']) ?></td>
                                             <td>555-4567-890</td>
                                          </tr>
                                          <tr>
                                             <td><?= $this->language->getPhrase("key_user_address",$_SESSION['lang']) ?></td>
                                             <td>Avd. Marqués de Sotelo 6</td>
                                          </tr>
                                          <tr>
                                             <td><?= $this->language->getPhrase("key_user_city",$_SESSION['lang']) ?></td>
                                             <td>Burjassot</td>
                                          </tr>
                                          <tr>
                                             <td><?= $this->language->getPhrase("key_user_region",$_SESSION['lang']) ?></td>
                                             <td>Valencia</td>
                                          </tr>
                                          <tr>
                                             <td><?= $this->language->getPhrase("key_user_country",$_SESSION['lang']) ?></td>
                                             <td>España</td>
                                          </tr>
                                          <tr>
                                             <td><?= $this->language->getPhrase("key_date_sing_up",$_SESSION['lang']) ?></td>
                                             <td>06/12/2013</td>
                                          </tr>
                                          <tr>
                                             <td><?= $this->language->getPhrase("key_last_login",$_SESSION['lang']) ?></td>
                                             <td>21/04/2015</td>
                                          </tr>
                                       </tbody>
                        </table>                              
                      </div>
                    </div>




 <!-- ------------------------------ DATOS DE LOS CURSOS -------------------------------------------------- -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. Resumen de las ediciones</a>
                        </h4>
                      </div>

                      <div id="collapseThree" class="panel-collapse collapse out">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12">
                            </br>
                              <div class="col-md-12">
                                
                                <strong>Activas</strong><span class="pull-right">40%</span>
                                <div class="progress progress-danger active">
                                  <div class="progress-bar progress-bar-success" style="width: 40%;"></div>
                                </div>
                                <p><a href="#" class="btn btn-large btn-default">Ver ediciones activas</a></p>

                                <strong>Inactivas</strong><span class="pull-right">64%</span>
                                <div class="progress progress-info active">
                                  <div class="progress-bar progress-bar-info" style="width: 64%;"></div>
                                </div>
                                <p><a href="#" class="btn btn-large btn-default">Ver ediciones inactivas</a></p>

                                <strong>Finalizadas</strong><span class="pull-right">6%</span>
                                <div class="progress progress-warning active">
                                  <div class="progress-bar progress-bar-danger" style="width: 6%;"></div>
                                </div>
                                <p><a href="#" class="btn btn-large btn-default">Ver ediciones finalizadas</a></p>
                                
                                
                              </div>

                          </div>
                        </div>
                      </div>
                    </div> 

                    <!-- ------------------------------ ACCESOS ----------------------------------------------------------- -->

                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">4. Resumen estadístico</a>
                        </h4>
                      </div>

                      <div id="collapseFour" class="panel-collapse collapse out">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12">
                            <div class="col-md-12">
                              

     </br>                           
  <div class="row">
    <div class="col-sm-3">
          <div class="hero-widget well well-sm">
                <div class="icon">
                     <i class="fa fa-user"></i>
                </div>
                <div class="text">
                    <var>1287</var>
                    <label class="text-muted">usuarios registrados</label>
                </div>
                <div class="options">
                    <a href="javascript:;" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-search"></i> Ver detalle</a>
                </div>
            </div>
    </div>
        <div class="col-sm-3">
            <div class="hero-widget well well-sm">
                <div class="icon">
                     <i class="fa fa-laptop"></i>
                </div>
                <div class="text">
                    <var>614</var>
                    <label class="text-muted">ediciones realizadas</label>
                </div>
                <div class="options">
                    <a href="javascript:;" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-search"></i> Ver detalle</a>
                </div>
            </div>
    </div>
        <div class="col-sm-3">
            <div class="hero-widget well well-sm">
                <div class="icon">
                     <i class="fa fa-bar-chart"></i>
                </div>
                <div class="text">
                    <var>12065</var>
                    <label class="text-muted">horas de formación</label>
                </div>
                <div class="options">
                    <a href="javascript:;" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-search"></i> Ver detalle</a>
                </div>
            </div>
      </div>
        <div class="col-sm-3">
            <div class="hero-widget well well-sm">
                <div class="icon">
                     <i class="fa fa-graduation-cap"></i>
                </div>
                <div class="text">
                    <var>96%</var>
                    <label class="text-muted">usuarios aprobados</label>
                </div>
                <div class="options">
                    <a href="javascript:;" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-search"></i> Ver detalle</a>
                </div>
            </div>
    
  </div>
</div>

                                
                             
                           </div>
                           

                          
                          
                        </div>
                      </div>
                    </div>
                  </div> 




                                           <!-- <div class="">
                                              <div class="row">


                                                <div class="total_stats">
                                                  <div class="tab_stats">
                                                        <h3>Conexiones a la plataforma</h3> 
                                                        
                                                        <h4>Conexiones totales</h4>
                                                        <div>450 conexiones<span class="pull-right strong">100%</span>
                                                          <div class="progress progress-striped">
                                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                                 style="width: 100%">
                                                            </div>
                                                          </div>
                                                        </div>
                                                  </div>
                                                  <div class="tab_stats">
                                                        <h4>Conexiones hoy</h4>
                                                        <div>72 conexiones<span class="pull-right strong">16%</span>
                                                          <div class="progress progress-striped">
                                                            <div class="progress-bar progress-bar-info" role="progressbar"
                                                                 aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"
                                                                 style="width: 16%">
                                                            </div>
                                                          </div>
                                                        </div>
                                                  </div>
                                                </div>
                                                





                                      <div class="tab_stats"><h3>Conexiones por curso</h3></div>


                                        <div class="total_stats">
                                          <h3 class="tab_stats">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Curso Número 1 <button type="button" class="btn btn-success btn-xs">Curso iniciado</button></a>
                                          </h3>
                                        </div>

                                          <div id="collapseFour" class="panel-collapse collapse out">
                                                
                                                  <div class="tab_stats">
                                                        
                                                        <h4>Conexiones totales</h4>
                                                        <div>233 conexiones<span class="pull-right strong">51,77%</span>
                                                          <div class="progress progress-striped">
                                                            <div class="progress-bar progress-bar-danger" role="progressbar"
                                                                 aria-valuenow="51.77" aria-valuemin="0" aria-valuemax="100"
                                                                 style="width: 51.77%">
                                                            </div>
                                                          </div>
                                                        </div>
                                                  </div>
                                                  <div class="tab_stats">
                                                        <h4>Conexiones hoy</h4>
                                                        <div>57 conexiones<span class="pull-right strong">24,46%</span>
                                                          <div class="progress progress-striped">
                                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                                 aria-valuenow="24.46" aria-valuemin="0" aria-valuemax="100"
                                                                 style="width: 24.46%">
                                                            </div>
                                                          </div>
                                                        </div>
                                                  </div>
                                          </div>
                                                


                                          <div class="total_stats">
                                            <h3 class="tab_stats">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Curso Número 2 <button type="button" class="btn btn-success btn-xs">Curso iniciado</button></a>
                                            </h3>
                                          </div>

                                          <div id="collapseFive" class="panel-collapse collapse out">
                                                  <div class="tab_stats">
                                                        
                                                        <h4>Conexiones totales</h4>
                                                        <div>46 conexiones<span class="pull-right strong">10,22%</span>
                                                          <div class="progress progress-striped">
                                                            <div class="progress-bar progress-bar-danger" role="progressbar"
                                                                 aria-valuenow="10.22" aria-valuemin="0" aria-valuemax="100"
                                                                 style="width: 10.22%">
                                                            </div>
                                                          </div>
                                                        </div>
                                                  </div>
                                                  <div class="tab_stats">
                                                        <h4>Conexiones hoy</h4>
                                                        <div>0 conexiones<span class="pull-right strong">0%</span>
                                                          <div class="progress progress-striped">
                                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                                 style="width: 0%">
                                                            </div>
                                                          </div>
                                                        </div>
                                                  </div>
                                          </div>



                                          <div class="total_stats">
                                            <h3 class="tab_stats">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Curso Número 3 <button type="button" class="btn btn-warning btn-xs">Curso no iniciado</button></a>
                                            </h3>
                                          </div>

                                          <div id="collapseSix" class="panel-collapse collapse out">
                                                  <div class="tab_stats">
                                                        
                                                        <h4>Conexiones totales</h4>
                                                        <div>0 conexiones<span class="pull-right strong">0%</span>
                                                          <div class="progress progress-striped">
                                                            <div class="progress-bar progress-bar-important" role="progressbar"
                                                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                                 style="width: 0%">
                                                            </div>
                                                          </div>
                                                        </div>
                                                  </div>
                                                  <div class="tab_stats">
                                                        <h4>Conexiones hoy</h4>
                                                        <div>0 conexiones<span class="pull-right strong">0%</span>
                                                          <div class="progress progress-striped">
                                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                                 style="width: 0%">
                                                            </div>
                                                          </div>
                                                        </div>
                                                  </div>
                                          </div>


                                                  <div class="total_stats">
                                                    <h3 class="tab_stats">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Curso Número 4 <button type="button" class="btn btn-danger btn-xs">Curso finalizado</button></a>
                                                    </h3>
                                                  </div>

                                          <div id="collapseSeven" class="panel-collapse collapse out">
                                                  <div class="tab_stats">
                                                        
                                                        <h4>Conexiones totales</h4>
                                                        <div>171 conexiones<span class="pull-right strong">38%</span>
                                                          <div class="progress progress-striped">
                                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                                 aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"
                                                                 style="width: 38%">
                                                            </div>
                                                          </div>
                                                        </div>
                                                  </div>
                                                   <div class="tab_stats">
                                                        <h4>Conexiones hoy</h4>
                                                        <div>0 conexiones<span class="pull-right strong">0%</span>
                                                          <div class="progress progress-striped">
                                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                                 style="width: 0%">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div> -->


                                                    </div>

                                                  </div> <!-- /.panel-group -->
                                                </div> <!-- /.bs-example -->
                                              </div> <!-- /.col-md-9 col-lg-9 -->

                                            </div> <!-- /.row persist-area -->

                                            <div class="panel-footer-right">            
                                              <div>
                                                <a href="/<?=$_SESSION['lang'];?>/user/edit" data-original-title="<?= $this->language->getPhrase("key_edit_user",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><?= $this->language->getPhrase("key_edit",$_SESSION['lang']) ?></i></a>
                                                <a data-original-title="<?= $this->language->getPhrase("key_remove_user",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><?= $this->language->getPhrase("key_remove",$_SESSION['lang']) ?></i></a>
                                              </div>
                                            </div>

                                          </div><!-- /.col-xs-12 -->
                                        </div><!-- /.row -->

                                      </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </section><!-- /.content -->



