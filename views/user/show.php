
        <!-- Content Header (Page header) -->
        <section class="col-xs-12 content-header">
            <h1 class="col-xs-12">
                <?= $this->language->getPhrase("key_users",$_SESSION['lang']) ?>
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
                      <button type="button" class="btn btn-success">Crear usuario</button>
                    </div>
                    <div class="form-group pull-right">
                            <div class="pull-left">

                                <select id="select_export" class="form-control" style="border-radius: 4px 0px 0px 4px;">
                                    <option value="" disabled="" selected="">Exportar</option>
                                    <option value="">XML</option>
                                    <option value="">CSV</option>
                                    <option value="">PDF</option>
                                </select>
                            </div>
                            <div class="pull-right">

                             <button type="button" class="btn btn-default" style="border-radius: 0px 4px 4px 0px; "><i class="fa fa-download fa-fw"></i></button>
                            </div>
                    </div>
                    <div class="form-group pull-right">
                            <div class="pull-left">

                                <select id="select_export" class="form-control" style="border-radius: 4px 0px 0px 4px;">
                                    <option value="" disabled="" selected="">Importar</option>
                                    <option value="">XML</option>
                                    <option value="">CSV</option>
                                    <option value="">PDF</option>
                                </select>
                            </div>
                            <div class="pull-right">

                             <button type="button" class="btn btn-default" style="border-radius: 0px 4px 4px 0px; "><i class="fa fa-upload fa-fw"></i></button>
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
                   <th>Nombre</th>
                   <th>1º Apellido</th>
                   <th>2º Apellido</th>
                   <th>Email</th>
                   <th>Teléfono</th>
                   <th>Visible</th> 
                   <th>Editar</th>                      
                   <th>Borrar</th>
                   </thead>

                   <tbody>
    
                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Francisco</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
    
                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
                      
                      
                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
                      
                      
                      
                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
                      
                      
                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>


                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
    
                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
                      
                      
                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
                      
                      
                      
                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
                      
                      
                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr> 


                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
    
                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
                      
                      
                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
                      
                      
                      
                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
                      
                      
                      <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>Irshad</td>
                      <td>Mossul</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                      <td><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>                   
                      
                      </tbody>
                          
                  

                 </table>

                      
                
                      
                      
                  
              </div>
            </div>
          </div>
                 <div class="box-header table-bottom">
                      <div class="form-group col-xs-12 col-md-4">
                        <button id="selectAll" type="button" class="col-xs-12 col-md-6 btn btn-default"><i class="fa fa-check-square-o fa-fw"></i>Selecionar todo</button>
                    </div>
                    <div class="form-group col-xs-12 col-md-4">

                        <select id="select_organization" class="col-xs-12 col-md-6 form-control">
                                <option value="" disabled="" selected="">Opciones</option>
                                <option value="">Eliminar</option>
                                <option value="">Editar</option>
                            </select>
                    </div>

                    <div class="form-group col-xs-12 col-md-4 pull-right">
                        <button type="button" class="col-xs-12 col-md-6 pull-right btn btn-default"><i class="fa fa-check fa-fw"></i>Aceptar</button>
                    </div>
                  </div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>

                    



                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
        </section><!-- /.content -->
      
