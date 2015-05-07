
        <!-- Content Header (Page header) -->
        <section class="col-xs-12 content-header">
            <h1 class="col-xs-12">
                <?= $this->language->getPhrase("key_groups",$_SESSION['lang']) ?>
            <small><?= $this->language->getPhrase("key_list",$_SESSION['lang']) ?></small>
          </h1>
          
        </section>
<!-- Main content -->
<section class="content row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header table-top">
        <div class="col-xs-12 nopadding">
          <div class="col-xs-12 col-md-2 form-group pull-left">
            <a href="/<?=$_SESSION['lang'];?>/edition/create" class="col-xs-12 btn btn-success"><?= $this->language->getPhrase("key_create_group",$_SESSION['lang']) ?></a>
          </div>
          
          <div class="pull-right col-xs-12 col-md-3 ">
            <div class="form-group pull-right col-xs-12 col-md-12 nopadding">
              <div class="pull-left col-xs-9 nopadding">
                <select id="select_export" class="form-control" style="border-radius: 4px 0px 0px 4px;">
                  <option value="" disabled="" selected="">Exportar</option>
                  <option value="">XML</option>
                  <option value="">CSV</option>
                  <option value="">PDF</option>
                </select>
              </div>
              <div class="pull-right col-xs-3 nopadding">
                <button type="button" class="btn btn-default" style="width:100%;border-radius: 0px 4px 4px 0px; "><i class="fa fa-download fa-fw"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.box-header -->


      <div class="row">
        <div class="col-xs-12">


          <div class="table-responsive">
            <table id="example1" class="table table-bordred table-striped">

              <thead>

                <th></th>
                <th>Más info</th>
                <th>Id curso</th>
              
              </thead>
              <tbody>
                                         <?php 
                                         
                                            $courseList = $this->controller->getGroups();
                                            
                                            
                                            foreach ($courseList as $row) {
                                                echo '<tr>';
                                                
                                                  

                                                  foreach ($row as $key=>$field) {
                                                    if(!is_object($field) && !is_array($field)){

                                                        if(strpos('id,course_id,title,description,start_date_edition,end_date_edition,students,groups,waiting,active,visible',$key) !== false){
                                                            if($key == "id"){
                                                              echo '<td>';
                                                              echo '<input type="checkbox" value="'.$field.'">';
                                                              echo '</td>';

                                                              echo '<td>';
                                                              echo '<p data-placement="top" data-toggle="tooltip" ><button class="btn btn-primary btn-xs" data-title="Ver más" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open"></span></button></p></td>';
                                                              echo '</td>';
                                                            }elseif($key == "visible" || $key == "active") {
                                                             
                                                           
                                                                if($field){
                                                                  echo '<td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>';
                                                                }else{
                                                                  echo '<td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-danger btn-xs" data-title="Visible"><span class="glyphicon glyphicon-remove"></span></button></p></td>';
                                                                }

                                                            }else{
                                                              echo '<td>';
                                                              echo $field;
                                                              echo '</td>';

                                                            }    



                                                        }
                                                        
                                                    }
                                                    
                                                    
                                                }
     
                                                echo '</tr>';
                                                
                                            }
                                            
                                            ?>
                                       



              </tbody>


            </table>





          </div>
        </div>
      </div>
      <div class="box-header table-bottom">
        <div class="form-group col-xs-12 col-md-4">
          <button id="selectAll" type="button" class="col-xs-12 col-md-6 btn btn-default"><i class="fa fa-check-square-o fa-fw"></i><?= $this->language->getPhrase("key_select_all",$_SESSION['lang']) ?></button>
        </div>
        <div class="form-group col-xs-12 col-md-4">
          <select id="select_organization" class="col-xs-12 col-md-6 form-control">
            <option value="" disabled="" selected="">Opciones</option>
            <option value="">Eliminar</option>
            <option value="">Editar</option>
          </select>
        </div>
        <div class="form-group col-xs-12 col-md-4 pull-right">
          <button type="button" class="col-xs-12 col-md-6 pull-right btn btn-default"><i class="fa fa-check fa-fw"></i><?= $this->language->getPhrase("key_accept",$_SESSION['lang']) ?></button>
        </div>
      </div>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
      </section><!-- /.content -->