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
        <div class="col-xs-12 nopadding">
          <div class="col-xs-12 col-md-2 form-group pull-left">
            <a href="/<?=$_SESSION['lang'];?>/user/insertuser" class="col-xs-12 btn btn-primary"> <?= $this->language->getPhrase("key_create_user",$_SESSION['lang']) ?></a>
          </div>
          <div class="form-group col-xs-12 col-md-2">
            <select id="select_organization" class="col-xs-12 col-md-6 form-control">
              <option value="" disabled="" selected=""><?= $this->language->getPhrase("key_departments",$_SESSION['lang']) ?></option>
              <option value=""><?= $this->language->getPhrase("key_department",$_SESSION['lang']) ?> 1</option>
              <option value=""><?= $this->language->getPhrase("key_department",$_SESSION['lang']) ?> 2</option>
              <option value=""><?= $this->language->getPhrase("key_department",$_SESSION['lang']) ?> 3</option>
              <option value=""><?= $this->language->getPhrase("key_department",$_SESSION['lang']) ?> 4</option>
            </select>
          </div>
          <div class="form-group col-xs-12 col-md-2">
            <select id="select_organization" class="col-xs-12 col-md-6 form-control">
              <option value="" disabled="" selected=""><?= $this->language->getPhrase("key_roles",$_SESSION['lang']) ?></option>
              <option value=""><?= $this->language->getPhrase("key_role",$_SESSION['lang']) ?> 1</option>
              <option value=""><?= $this->language->getPhrase("key_role",$_SESSION['lang']) ?> 2</option>
              <option value=""><?= $this->language->getPhrase("key_role",$_SESSION['lang']) ?> 3</option>
              <option value=""><?= $this->language->getPhrase("key_role",$_SESSION['lang']) ?> 4</option>
            </select>
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
                  
                  <tr class="userRow">
                    <td><input type="checkbox" class="checkthis" /></td>
                    <td data-toggle="modal" data-target="#myModal">Sheldon</td>
                    <td data-toggle="modal" data-target="#myModal">Lee</td>
                    <td data-toggle="modal" data-target="#myModal">Cooper</td>
                    <td data-toggle="modal" data-target="#myModal">info@support.com</td>
                    <td data-toggle="modal" data-target="#myModal">123-4567-890</td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                    <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>
                  
                  <tr class="userRow">
                    <td><input type="checkbox" class="checkthis" /></td>
                    <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                    <td data-toggle="modal" data-target="#myModal">Irshad</td>
                    <td data-toggle="modal" data-target="#myModal">Mossul</td>
                    <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                    <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                    <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>             
                  
                  
                   <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>

                    <tr class="userRow">
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td data-toggle="modal" data-target="#myModal">Mohsin</td>
                      <td data-toggle="modal" data-target="#myModal">Irshad</td>
                      <td data-toggle="modal" data-target="#myModal">Mossul</td>
                      <td data-toggle="modal" data-target="#myModal">isometric.mohsin@gmail.com</td>
                      <td data-toggle="modal" data-target="#myModal">+923335586757</td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Visible"><button class="btn btn-primary btn-xs" data-title="Visible"><span class="glyphicon glyphicon-ok"></span></button></p></td>
                      <td><p><a href="/<?=$_SESSION['lang'];?>/user/profile" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
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
      </section><!-- /.content -->
      
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
              <a href="/<?=$_SESSION['lang'];?>/user/profile" data-original-title="<?= $this->language->getPhrase("key_complete_file",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><?= $this->language->getPhrase("key_complete_file",$_SESSION['lang']) ?></i></a>
              <!--<span class="pull-right">
              <a data-original-title="<?= $this->language->getPhrase("key_close",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></i></a>
            </span> -->
            </div>
            <div class="modal-body">
              <center>
                <img src="../../dist/img/user2-160x160.jpg" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                <h3 class="media-heading">Sheldon Lee Cooper</h3>
              </center>
            </div>
          <center>
          <table class="table table-user-information">
            <tbody>
              <tr>
                <td>Email</td>
                <td><a href="mailto:info@support.com">info@support.com</a></td>
              </tr>
              <tr>
                <td>Teléfono de contacto</td>
                <td>123-4567-890</td>
              </tr>
              <tr>
                <td>Dirección</td>
                <td>Avd. Marqués de Sotelo 6</td>
              </tr>
              <tr>
                <td>Localidad</td>
                <td>Burjassot</td>
              </tr>
              <tr>
                <td>Provincia</td>
                <td>Valencia</td>
              </tr>
              <tr>
                <td>País</td>
                <td>España</td>
              </tr>
              <tr>
                <td>Fecha de alta</td>
                <td>06/12/2013</td>
              </tr>
              <tr>
                <td>Último acceso al campus</td>
                <td>21/04/2015</td>
              </tr>
            </tbody>
          </table>
          </center>
          <div class="panel-footer-right">

            <!--<a data-original-title="<?= $this->language->getPhrase("key_send_message",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>-->
            <div>
              <a href="/<?=$_SESSION['lang'];?>/user/edit" data-original-title="<?= $this->language->getPhrase("key_edit_user",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><?= $this->language->getPhrase("key_edit",$_SESSION['lang']) ?></i></a>
              <a data-original-title="<?= $this->language->getPhrase("key_remove_user",$_SESSION['lang']) ?>" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><?= $this->language->getPhrase("key_remove",$_SESSION['lang']) ?></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
