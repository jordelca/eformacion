
        <!-- Content Header (Page header) -->
        <section class="col-xs-12 content-header">
            <h1 class="col-xs-12">
                <?= $this->language->getPhrase("key_course_stats",$_SESSION['lang']) ?>
            <small><?= $this->language->getPhrase("key_stats",$_SESSION['lang']) ?></small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content row">
            <div class="col-xs-12">


              <div class="box">
                <div class="box-header table-top">
                 <div class="col-xs-12">
                    <div class="form-group pull-left">
                      
                    </div>
                  </div>

                </div><!-- /.box-header -->

        
         
          <div class="row">
            <div class="col-xs-12">       
    
        
              <div class="table-responsive">

                  <table id="example1" class="table table-bordred table-striped">
                   
                   <thead>
                   
               
                   </thead>

                   <tbody>
    
                    <tr class="userRow">
                        <td></td>
                    </tr>
                      
                      
                                         
                      
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
            </div>
        </section><!-- /.content -->


      