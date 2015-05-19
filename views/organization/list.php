<!-- Content Header (Page header) -->
<section class = "col-xs-12 content-header">
   <h1 class="col-xs-12 col-md-6">
      <?= $this -> language -> getPhrase("key_organization", $_SESSION['lang']) ?>
      <small> <?= $this -> language -> getPhrase("key_list", $_SESSION['lang']) ?> </small> 
   </h1>
</section>
<!-- Main content -->
<section class = "content row">
   <div class = "col-xs-12 box">
      <div class = "col-xs-12 box-header table-top nopadding">
         <div class="col-xs-12">
            <div class = "form-group pull-left">
               <a href="/<?=$_SESSION['lang'];?>/organization/create" type = "button" class = "btn btn-primary"> <?= $this -> language -> getPhrase("key_create_organization", $_SESSION['lang']) ?> </a> 
            </div>
         </div>
      </div>
      <div class="col-xs-12 nopadding">
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                  
               <a class="small-box-link" href="/<?=$_SESSION['lang'];?>/organization/profileOrg">
                  <div class="inner">
                     <h3>EVES</h3>
                     <p> 92 <?= $this -> language -> getPhrase("key_students", $_SESSION['lang']) ?></p>
                     <p> 79 <?= $this -> language -> getPhrase("key_courses", $_SESSION['lang']) ?></p>
                     <input value="0" type = "checkbox" class="pull-right">
                  </div>
                  <div class="icon">
                     <i class="fa fa-university"></i>
                  </div>
               </a>
               <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal"><?= $this -> language -> getPhrase("key_more_info", $_SESSION['lang']) ?> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
               <a class="small-box-link" href="/<?=$_SESSION['lang'];?>/organization/profileOrg">
                  <div class="inner">
                     <h3>IVAJ</h3>
                     <p> 61 <?= $this -> language -> getPhrase("key_students", $_SESSION['lang']) ?></p>
                     <p> 57 <?= $this -> language -> getPhrase("key_courses", $_SESSION['lang']) ?></p>
                     <input value="1" type = "checkbox" class="pull-right">
                  </div>
                  <div class="icon">
                     <i class="fa fa-university"></i>
                  </div>
               </a>
               <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal"><?= $this -> language -> getPhrase("key_more_info", $_SESSION['lang']) ?> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
               <a class="small-box-link" href="/<?=$_SESSION['lang'];?>/organization/profileOrg">
                  <div class="inner">
                     <h3>CGE</h3>
                     <p> 510 <?= $this -> language -> getPhrase("key_students", $_SESSION['lang']) ?></p>
                     <p> 53 <?= $this -> language -> getPhrase("key_courses", $_SESSION['lang']) ?></p>
                     <input value="2" type = "checkbox" class="pull-right">
                  </div>
                  <div class="icon">
                     <i class="fa fa-university"></i>
                  </div>
               </a>
               <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal"><?= $this -> language -> getPhrase("key_more_info", $_SESSION['lang']) ?> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
               <a class="small-box-link" href="/<?=$_SESSION['lang'];?>/organization/profileOrg">
                  <div class="inner">
                     <h3>IVAP</h3>
                     <p> 58 <?= $this -> language -> getPhrase("key_students", $_SESSION['lang']) ?></p>
                     <p> 9 <?= $this -> language -> getPhrase("key_courses", $_SESSION['lang']) ?></p>
                     <input value="3" type = "checkbox" class="pull-right">
                  </div>
                  <div class="icon">
                     <i class="fa fa-university"></i>
                  </div>
               </a>
               <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal"><?= $this -> language -> getPhrase("key_more_info", $_SESSION['lang']) ?> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
               <a class="small-box-link" href="/<?=$_SESSION['lang'];?>/organization/profileOrg">
                  <div class="inner">
                     <h3>CDT</h3>
                     <p> 97 <?= $this -> language -> getPhrase("key_students", $_SESSION['lang']) ?></p>
                     <p> 27 <?= $this -> language -> getPhrase("key_courses", $_SESSION['lang']) ?></p>
                     <input value="4" type = "checkbox" class="pull-right">
                  </div>
                  <div class="icon">
                     <i class="fa fa-university"></i>
                  </div>
               </a>
               <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal" data-toggle="modal" data-target="#myModal"><?= $this -> language -> getPhrase("key_more_info", $_SESSION['lang']) ?> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
      </div>

      <div class = "col-xs-12 box-header table-bottom nopadding">
         <div class = "form-group col-xs-12 col-md-4">
            <button id = "selectAll"
               type = "button"
               class = "col-xs-12 col-md-6 btn btn-default"> <i class = "fa fa-check-square-o fa-fw"> </i><?= $this->language->getPhrase("key_select_all",$_SESSION['lang']) ?></button>
         </div>
         <div class = "form-group col-xs-12 col-md-4">
            <select id = "select_organization"
               class = "col-xs-12 col-md-6 form-control">
               <option value = ""
                  disabled = ""
                  selected = ""> Opciones </option>
               <option value = ""> Eliminar </option>
               <option value = ""> Editar </option>
            </select>
         </div>
         <div class = "form-group col-xs-12 col-md-4 pull-right">
            <button type = "button"
               class = "col-xs-12 col-md-6 pull-right btn btn-default"> <i class = "fa fa-check fa-fw"> </i><?= $this->language->getPhrase("key_accept",$_SESSION['lang']) ?></button>
         </div>
      </div>
      <!-- /.box-->
   </div>
   <!-- /.col-->
</section>
<!-- /.content-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
              <a href="/<?=$_SESSION['lang'];?>/organization/profileOrg" data-original-title="<?= $this->language->getPhrase("key_complete_file",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><?= $this->language->getPhrase("key_complete_file",$_SESSION['lang']) ?></i></a>
              
            </div>
           <div class="modal-body">
              <center>
                 <img src="../../dist/img/logo_eves.jpg" name="aboutme" width="140" height="140" border="0"></a>
              </center>
           </div>
           <center>
              <table class="table table-user-information">
                 <tbody>
                  <tr><td><?= $this->language->getPhrase("key_org_name",$_SESSION['lang']) ?></td><td>Escuela Valencia de Estudios de la Salud</td></tr>
                  <!-- <tr><td><?= $this->language->getPhrase("key_org_short_name",$_SESSION['lang']) ?></td><td>EVES</td></tr> -->
                  <tr><td><?= $this->language->getPhrase("key_org_desc",$_SESSION['lang']) ?></td><td>Escuela Valencia de Estudios de la Salud</td></tr>
                  <tr><td><?= $this->language->getPhrase("key_org_address",$_SESSION['lang']) ?></td><td>C/ Juan de Garay nº 21</td></tr>
                  <tr><td><?= $this->language->getPhrase("key_org_postcode",$_SESSION['lang']) ?></td><td>46017</td></tr>
                  <tr><td><?= $this->language->getPhrase("key_org_country",$_SESSION['lang']) ?></td><td>España</td></tr>
                  <!-- <tr><td><?= $this->language->getPhrase("key_org_region",$_SESSION['lang']) ?></td><td>Comunidad Valencia</td></tr> -->
                  <tr><td><?= $this->language->getPhrase("key_org_subregion",$_SESSION['lang']) ?></td><td>Valencia</td></tr>
                  <tr><td><?= $this->language->getPhrase("key_org_city",$_SESSION['lang']) ?></td><td>Valencia</td></tr>
                  <tr><td><?= $this->language->getPhrase("key_org_email",$_SESSION['lang']) ?></td><td><a href="mailto:eves@gva.es">eves@gva.es</a></td>
                  <tr><td><?= $this->language->getPhrase("key_org_phone",$_SESSION['lang']) ?></td><td>963131600</td></tr>
                  

                  
                 </tbody>
              </table>
           </center>
           <div class="panel-footer-right">            
                  <div>
                    <a href="/<?=$_SESSION['lang'];?>/user/edit" data-original-title="<?= $this->language->getPhrase("key_edit_organization",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><?= $this->language->getPhrase("key_edit",$_SESSION['lang']) ?></i></a>
                    <a data-original-title="<?= $this->language->getPhrase("key_remove_organization",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><?= $this->language->getPhrase("key_remove",$_SESSION['lang']) ?></i></a>
                  </div>
                </div>
        </div>
     </div>
  </div>

      <!-- /.row -->
      <!-- <div class="col-xs-12 image-zoom-container">
         <div class="col-xs-12 col-md-3 zoom-item-wrapper">
               <div class="col-xs-12 zoom-container">
                     <span class="zoom-caption">
                        <h3>IVAJ</h3>
                     </span>
                     <img src="../../dist/img/logo_ivaj.jpg" />
               </div>
         </div>
         <div class="col-xs-12 col-md-3 zoom-item-wrapper">
               <div class="col-xs-12 zoom-container">
                     <span class="zoom-caption">
                        <h3>EVES</h3>
                     </span>
                     <img src="../../dist/img/logo_eves.jpg" />
               </div>
         </div>
         <div class="col-xs-12 col-md-3 zoom-item-wrapper">
               <div class="col-xs-12 zoom-container">
                     <span class="zoom-caption">
                        <h3>SAPS</h3>
                     </span>
                     <img src="../../dist/img/logo_saps.jpg" />
               </div>
         </div>
         
         <div class="col-xs-12 col-md-3 zoom-item-wrapper">
               <div class="col-xs-12 zoom-container">
                     <span class="zoom-caption">
                        <h3>IVAJ</h3>
                     </span>
                     <img src="../../dist/img/logo_ivaj.jpg" />
               </div>
         </div>
         <div class="col-xs-12 col-md-3 zoom-item-wrapper">
               <div class="col-xs-12 zoom-container">
                     <span class="zoom-caption">
                        <h3>EVES</h3>
                     </span>
                     <img src="../../dist/img/logo_eves.jpg" />
               </div>
         </div>
         <div class="col-xs-12 col-md-3 zoom-item-wrapper">
               <div class="col-xs-12 zoom-container">
                     <span class="zoom-caption">
                        <h3>SAPS</h3>
                     </span>
                     <img src="../../dist/img/logo_saps.jpg" />
               </div>
         </div>
         </div>
         -->
      <!--
         <div class = "col-xs-12">
            
            <table id = "example1"
               class = "table table-bordered table-hover">
               <thead>
                  <tr>
                     <td> </td>
                     <th> Nombre </th>
                     <th> Dirección </th>
                     <th> Código postal </th>
                     <th> Localidad </th>
                     <th> Provincia </th>
                     <th> Persona de contacto </th>
                     <th> Teléfono </th>
                     <th> eMail </th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
                  <tr>
                     <td class = "sorting_1"> <input value = "6"
                        type = "checkbox"> </td>
                     <td> Organización </td>
                     <td> Avenida Calle Callejón </td>
                     <td> 46001 </td>
                     <td> Valencia </td>
                     <td> Valencia </td>
                     <td> User Admin Organización </td>
                     <td> 961234567 </td>
                     <td> admin@ correo.com </td>
                  </tr>
               </tbody>
               <tfoot>
                  <tr>
                     <td> </td>
                     <th> Nombre </th>
                     <th> Dirección </th>
                     <th> Código postal </th>
                     <th> Localidad </th>
                     <th> Provincia </th>
                     <th> Persona de contacto </th>
                     <th> Teléfono </th>
                     <th> eMail </th>
                  </tr>
               </tfoot>
            </table>
         </div>-->
      <!-- /.box - body-->