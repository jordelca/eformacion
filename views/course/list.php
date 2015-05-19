
        <!-- Content Header (Page header) -->
        <section class="col-xs-12 content-header">
            <h1 class="col-xs-12">
                <?= $this->language->getPhrase("key_courses",$_SESSION['lang']) ?>
            <small><?= $this->language->getPhrase("key_list",$_SESSION['lang']) ?></small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content row">
            <div class="col-xs-12">


              <div class="box">
                <div class="box-header table-top">
                 <div class="col-xs-12">
                    <div class="form-group pull-left">
                    <a href="/<?=$_SESSION['lang'];?>/course/create" class="col-xs-12 btn btn-primary"> <?= $this->language->getPhrase("key_create_course",$_SESSION['lang']) ?></a>                      
                    </div>
                  </div>

                </div><!-- /.box-header -->

          <div class="row">
            <div class="col-xs-12">       
    
        
                    <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example1">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th><?= $this->language->getPhrase("key_course_title",$_SESSION['lang']) ?></th>
                                            <th><?= $this->language->getPhrase("key_course_description",$_SESSION['lang']) ?></th>
                                            <th><?= $this->language->getPhrase("key_course_creation_date",$_SESSION['lang']) ?></th>
                                            <th><?= $this->language->getPhrase("key_course_visible",$_SESSION['lang']) ?></th>
                                            <th><?= $this->language->getPhrase("key_course_max_attendees",$_SESSION['lang']) ?></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                         
                                            $courseList = $this->controller->getCourses();
                                            
                                            
                                            foreach ($courseList as $row) {
                                                echo '<tr>';
                                                
                                                
                                                foreach ($row as $key=>$field) {
                                                    if(!is_object($field) && !is_array($field)){
                                                        if((ENVIRONMENT === "dev" && strpos('id,fullname,summary,startdate,maxbytes,visible',$key) !== false) || (ENVIRONMENT !== "dev")){
                                                            if($key == "id"){
                                                            echo '<td>';
                                                            echo '<input type="checkbox" value="'.$field.'">';
                                                            echo '</td>';
                                                            
                                                        }else{
                                                            echo '<td>';
                                                            echo mb_convert_encoding($field,"ISO-8859-1","UTF-8");
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


      