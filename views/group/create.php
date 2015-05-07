      
        <!-- Content Header (Page header) -->
        <section class="col-xs-12 content-header">
            <h1 class="col-xs-12 col-md-6">
                <?= $this->language->getPhrase("key_group",$_SESSION['lang']) ?>
                <small><?= $this->language->getPhrase("key_creation",$_SESSION['lang']) ?></small>
          </h1>
          <div class="col-xs-12 col-md-4 pull-right showHide">
              <a id="expandAll" href="#" class="col-xs-6 btn btn-default" role="button"><?= $this->language->getPhrase("key_show",$_SESSION['lang']) ?></a>
              <a id="collapseAll" href="#" class="col-xs-6 btn btn-default" role="button"><?= $this->language->getPhrase("key_hide",$_SESSION['lang']) ?></a>
          </div>         
        </section>

        <!-- Main content -->

        <!-- Main content -->
         <!-- Main content -->
        <section class="content row">
        
          <div class="col-xs-12">
            <div class="box">
             


<!-- FICHA DE REGISTRO -->      

                <form class="form-horizontal">

                  <!-- Form Name -->
                  <!-- <legend class="scheduler-border">Datos básicos</legend> -->
                  <div class="bs-example" style="padding: 10px;">
                    <div class="panel-group" id="accordion">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. <?= $this->language->getPhrase("key_basic_data",$_SESSION['lang']) ?></a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                          <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= $this->language->getPhrase("key_required_fields",$_SESSION['lang']) ?>
                          </div>
                          <div class="panel-body">
                            <div class="form-group required">
                              <label class="col-md-4 control-label"><?= $this->language->getPhrase("key_org_name",$_SESSION['lang']) ?></label>
                              <div class="col-md-4">
                                <input id="textinput" name="textinput" placeholder="<?= $this->language->getPhrase("key_placeholder_org_name",$_SESSION['lang']) ?>" class="form-control input-md" required="required" type="text">
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="col-md-4 control-label pull-right">
                 <button class="btn btn-primary"><?= $this->language->getPhrase("key_create_group",$_SESSION['lang']) ?></button>
                </div>
              </form>
<!-- FIN DE LA FICHA DE REGISTRO -->               
              
              </div><!-- /.box-body -->
              </div><!-- /.box -->
          </section><!-- /.content -->


