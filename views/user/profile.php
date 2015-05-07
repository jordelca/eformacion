<!-- Content Header (Page header) -->
<section class="col-xs-12 content-header">
   <h1 class="col-xs-12"><?= $this->language->getPhrase("key_file_user",$_SESSION['lang']) ?></h1>
</section>
<!-- Main content -->
<section class="content row">
   <div class="col-xs-12">
      <div class="box">
         <div class="box-header">
            <div class="">
               <div class="">
                  <div class="profile-header-right">
                     <div>
                       <a href="/<?=$_SESSION['lang'];?>/user/edit" data-original-title="<?= $this->language->getPhrase("key_edit_user",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><?= $this->language->getPhrase("key_edit",$_SESSION['lang']) ?></i></a>
                       <a data-original-title="<?= $this->language->getPhrase("key_remove_user",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><?= $this->language->getPhrase("key_remove",$_SESSION['lang']) ?></i></a>
                     </div>
                  </div>
                  <div class="row persist-area" style="margin:0px;">
                     <div class="col-md-3 col-lg-3 persist-header" align="center" style="background-color:white;padding:30px;z-index: 1;">
                        <img alt="User Pic" src="../../dist/img/user2-160x160.jpg" class="img-circle">                           
                        <dl>
                           <dt>Sheldon Lee Cooper</dt>
                        </dl>
                     </div>
                     <div class="col-md-9 col-lg-9">
                        <div class="bs-example">
                           <div class="panel-group" id="accordion">
                              <!-- ------------------------------ DATOS PERSONALES ---------------------------------------------- -->
                              <div class="panel panel-default">
                                 <div class="panel-heading">
                                    <h4 class="panel-title">
                                       <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. <?= $this->language->getPhrase("key_personal_data",$_SESSION['lang']) ?></a>
                                    </h4>
                                 </div>
                                 <div id="collapseOne" class="panel-collapse collapse in">
                                    <table class="table table-user-information">
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
                              <!-- ------------------------------ DATOS ACADÉMICOS -------------------------------------------------- -->
                              <div class="panel panel-default">
                                 <div class="panel-heading">
                                    <h4 class="panel-title">
                                       <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. <?= $this->language->getPhrase("key_academic_data",$_SESSION['lang']) ?></a>
                                    </h4>
                                 </div>
                                 <div id="collapseTwo" class="panel-collapse collapse out">
                                    <div class="row">
                                       <div class="col-xs-12 col-sm-12">
                                          <ul class="event-list">
                                             <li>
                                                <img alt="IVAJ" src="../../dist/img/logo_ivaj.jpg" />
                                                <div class="info">
                                                   <h2 class="title">Curso Número 1</h2>
                                                   <table class="table-academic_data">
                                                      <tbody>
                                                         <tr>
                                                            <td><?= $this->language->getPhrase("key_start_date",$_SESSION['lang']) ?></td>
                                                            <td>16/04/2015</td>
                                                         </tr>
                                                         <tr>
                                                            <td><?= $this->language->getPhrase("key_end_date",$_SESSION['lang']) ?></td>
                                                            <td>23/05/2015</td>
                                                         </tr>
                                                         <tr>
                                                            <td><?= $this->language->getPhrase("key_user_rol",$_SESSION['lang']) ?></td>
                                                            <td>Alumno</td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                                <div class="academic_data">
                                                   <ul>
                                                      <li class="col-lg-12 col-xs-12"><a data-original-title="Acceder al curso" data-toggle="tooltip" type="button" class="btn btn-primary"><i class="fa fa-laptop"></i></a></li>
                                                      <li class="col-lg-12 col-xs-12"><a data-original-title="Estadísticas" data-toggle="tooltip" type="button" class="btn btn-success"><i class="fa fa-bar-chart"></i></a></li>
                                                   </ul>
                                                </div>
                                             </li>
                                             <li>
                                                <img alt="EVES" src="../../dist/img/logo_eves.jpg" />                        
                                                <div class="info">
                                                   <h2 class="title">Curso Número 2</h2>
                                                   <table class="table-academic_data">
                                                      <tbody>
                                                         <tr>
                                                            <td><?= $this->language->getPhrase("key_start_date",$_SESSION['lang']) ?></td>
                                                            <td>16/04/2015</td>
                                                         </tr>
                                                         <tr>
                                                            <td><?= $this->language->getPhrase("key_end_date",$_SESSION['lang']) ?></td>
                                                            <td>23/05/2015</td>
                                                         </tr>
                                                         <tr>
                                                            <td><?= $this->language->getPhrase("key_user_rol",$_SESSION['lang']) ?></td>
                                                            <td>Alumno</td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                                <div class="academic_data">
                                                   <ul>
                                                      <li class="col-lg-12 col-xs-12"><a data-original-title="Curso no iniciado" data-toggle="tooltip" type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-laptop"></i></a></li>
                                                      <li class="col-lg-12 col-xs-12"><a data-original-title="Estadísticas" data-toggle="tooltip" type="button" class="btn btn-success"><i class="fa fa-bar-chart"></i></a></li>
                                                   </ul>
                                                </div>
                                             </li>
                                             <li>
                                                <img alt="EVES" src="../../dist/img/logo_eves.jpg" />                        
                                                <div class="info">
                                                   <h2 class="title">Curso Número 3</h2>
                                                   <table class="table-academic_data">
                                                      <tbody>
                                                         <tr>
                                                            <td><?= $this->language->getPhrase("key_start_date",$_SESSION['lang']) ?></td>
                                                            <td>16/04/2015</td>
                                                         </tr>
                                                         <tr>
                                                            <td><?= $this->language->getPhrase("key_end_date",$_SESSION['lang']) ?></td>
                                                            <td>23/05/2015</td>
                                                         </tr>
                                                         <tr>
                                                            <td><?= $this->language->getPhrase("key_user_rol",$_SESSION['lang']) ?></td>
                                                            <td>Alumno</td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                                <div class="academic_data">
                                                   <ul>
                                                      <li class="col-lg-12 col-xs-12"><a data-original-title="Curso no iniciado" data-toggle="tooltip" type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-laptop"></i></a></li>
                                                      <li class="col-lg-12 col-xs-12"><a data-original-title="Estadísticas" data-toggle="tooltip" type="button" class="btn btn-success"><i class="fa fa-bar-chart"></i></a></li>
                                                   </ul>
                                                </div>
                                             </li>
                                             <li>
                                                <img alt="SAPS" src="../../dist/img/logo_saps.jpg" />                        
                                                <div class="info">
                                                   <h2 class="title">Curso Número 4</h2>
                                                   <table class="table-academic_data">
                                                      <tbody>
                                                         <tr>
                                                            <td><?= $this->language->getPhrase("key_start_date",$_SESSION['lang']) ?></td>
                                                            <td>16/04/2015</td>
                                                         </tr>
                                                         <tr>
                                                            <td><?= $this->language->getPhrase("key_end_date",$_SESSION['lang']) ?></td>
                                                            <td>23/05/2015</td>
                                                         </tr>
                                                         <tr>
                                                            <td><?= $this->language->getPhrase("key_user_rol",$_SESSION['lang']) ?></td>
                                                            <td>Alumno</td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                                <div class="academic_data">
                                                   <ul>
                                                      <li class="col-lg-12 col-xs-12"><a data-original-title="Curso finalizado" data-toggle="tooltip" type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-laptop"></i></a></li>
                                                      <li class="col-lg-12 col-xs-12"><a data-original-title="Estadísticas" data-toggle="tooltip" type="button" class="btn btn-success"><i class="fa fa-bar-chart"></i></a></li>
                                                      <li class="col-lg-12 col-xs-12"><a data-original-title="Certificado" data-toggle="tooltip" type="button" class="btn btn-warning"><i class="fa fa-graduation-cap"></i></a></li>
                                                   </ul>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="panel panel-default">
                                 <div class="panel-heading">
                                    <h4 class="panel-title">
                                       <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. <?= $this->language->getPhrase("key_stats_access",$_SESSION['lang']) ?></a>
                                    </h4>
                                 </div>
                                 <!-- ------------------------------ ACCESOS ----------------------------------------------------------- -->
                                 <div id="collapseThree" class="panel-collapse collapse in">
                                    <div class="row">
                                       <div class="col-xs-12 col-sm-12">
                                          <div class="col-md-12">
                                             <h4 style="font-weight:600">Conexiones a la plataforma</h4>
                                             <div class="col-md-12">
                                                <div>
                                                   450 conexiones totales<span class="pull-right strong">100%</span>
                                                   <div class="progress progress-striped">
                                                      <div data-percentage="0%" style="width: 100%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div>
                                                   72 conexiones hoy<span class="pull-right strong">16%</span>
                                                   <div class="progress progress-striped">
                                                      <div data-percentage="0%" style="width: 16%;" class="progress-bar progress-bar-info" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <table class="col-md-12 col-xs-12 stats">
                                                <tbody>
                                                   <tr>
                                                      <td>Primer acceso:</td>
                                                      <td>08/12/2013</td>
                                                   </tr>
                                                   <tr>
                                                      <td>Último acceso:</td>
                                                      <td>21/04/2015</td>
                                                   </tr>
                                                   <tr>
                                                      <td>Última IP:</td>
                                                      <td>193.144.127.12</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                          <div class="col-md-12">
                                             <h4 style="font-weight:600">Navegador y Sistema operativo</h4>
                                             <div class="col-md-8">
                                                <div class="chart-responsive" id="donut">
                                                   <canvas id="pieChart" height="150"></canvas>
                                                </div>
                                                <!-- ./chart-responsive -->
                                             </div>
                                             <!-- /.col -->
                                             <div class="col-md-4">
                                                <ul class="chart-legend clearfix">
                                                   <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                                                   <li><i class="fa fa-circle-o text-green"></i> IE</li>
                                                   <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                                                   <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                                                   <li><i class="fa fa-circle-o text-light-blue"></i> Otro</li>
                                                </ul>
                                             </div>
                                             <!-- /.col -->
                                          </div>
                                          <!-- /.row -->
                                          <div class="col-md-12">
                                             <ul class="nav nav-pills nav-stacked">
                                                <li><a href="#">Windows <span class="pull-right text-red"><i class="fa fa-angle-right"></i> 72%</span></a></li>
                                                <li><a href="#">IOS <span class="pull-right text-green"><i class="fa fa-angle-right"></i> 16%</span></a></li>
                                                <li><a href="#">Android <span class="pull-right text-yellow"><i class="fa fa-angle-right"></i> 12%</span></a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>
                        <!-- /.panel-group -->
                     </div>
                     <!-- /.bs-example -->
                  </div>
                  <!-- /.col-md-9 col-lg-9 -->
               </div>
               <!-- /.row persist-area -->
                <div class="panel-footer-right">            
                  <div>
                    <a href="/<?=$_SESSION['lang'];?>/user/edit" data-original-title="<?= $this->language->getPhrase("key_edit_user",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><?= $this->language->getPhrase("key_edit",$_SESSION['lang']) ?></i></a>
                    <a data-original-title="<?= $this->language->getPhrase("key_remove_user",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><?= $this->language->getPhrase("key_remove",$_SESSION['lang']) ?></i></a>
                  </div>
                </div>
            </div>
            <!-- /.col-xs-12 -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.box-body -->
   </div>
   <!-- /.box -->
</section>
<!-- /.content -->

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