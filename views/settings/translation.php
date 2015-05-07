<!-- Main content -->
<section class="content row">
   <div class="col-xs-12">
      <div class="box">
         <div class="box-header table-top1">
            <div class="col-xs-12">
               <div class="form-group pull-left">
                  <!-- Content Header (Page header) -->
                  <section class="col-xs-12 content-header">
                     <h1 class="col-xs-12">
                        <?= $this->language->getPhrase("key_translations",$_SESSION['lang']) ?>
                        <small><?= $this->language->getPhrase("key_pending_keys",$_SESSION['lang']) ?></small>
                     </h1>
                  </section>
               </div>
            </div>
         </div>
         <!-- /.box-header -->
         <div class="row">
            <div class="col-xs-12">
               <div class="table-responsive">
                  <table id="trans1" class="table table-bordred table-striped">
                     <thead>
                        <tr>
                           <th><?= $this->language->getPhrase("key_key",$_SESSION['lang']) ?></th>
                           <th><?= $this->language->getPhrase("key_lang_code",$_SESSION['lang']) ?></th>
                           <th><?= $this->language->getPhrase("key_translation",$_SESSION['lang']) ?></th>
                           <th><?= $this->language->getPhrase("key_options",$_SESSION['lang']) ?></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                           $keyList = $this->language->listPendingKeys();
                           
                           foreach ($keyList as $row) {
                               echo '<tr>';
                               echo "<form name='newTranslation' class='saveForm'>";
                               foreach ($row as $key=>$field) {
                           
                                   echo '<td>';
                                   if($key=="translation"){
                           
                                       echo "<input type='text' class='form-control' name='".$key."' value='".$field."'>";
                           
                                   }else{
                                       echo $field;    
                                       echo "<input type='hidden' name='".$key."' value='".$field."'>";
                                   }
                           
                                   
                                   echo '</td>';
                                   
                               }
                               echo '<td>';
                               echo "<input type='submit' class='saveTrans btn btn-default' value='".$this->language->getPhrase("key_send_form",$_SESSION['lang'])."'>";
                               echo '</td>';
                               echo "</form>";
                               echo '</tr>';
                               
                           }
                           ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="box-header table-bottom1">
         </div>
      </div>
      <!-- /.box-body -->
      <div class="box">
         <div class="box-header table-top2">
            <div class="col-xs-12">
               <div class="form-group pull-left">
                  <!-- Content Header (Page header) -->
                  <section class="col-xs-12 content-header">
                     <h1 class="col-xs-12">
                        <?= $this->language->getPhrase("key_translations",$_SESSION['lang']) ?>
                        <small><?= $this->language->getPhrase("key_translated_keys",$_SESSION['lang']) ?></small>
                     </h1>
                  </section>
               </div>
            </div>
         </div>
         <!-- /.box-header -->
         <div class="row">
            <div class="col-xs-12">
               <div class="table-responsive">
                  <table id="trans2" class="table table-bordred table-striped">
                     <thead>
                        <tr>
                           <th><?= $this->language->getPhrase("key_key",$_SESSION['lang']) ?></th>
                           <th><?= $this->language->getPhrase("key_lang_code",$_SESSION['lang']) ?></th>
                           <th><?= $this->language->getPhrase("key_translation",$_SESSION['lang']) ?></th>
                           <th><?= $this->language->getPhrase("key_options",$_SESSION['lang']) ?></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                           $keyList = $this->language->listAllKeys();
                           
                           foreach ($keyList as $row) {
                               echo '<tr>';
                               echo "<form name='newTranslation' class='saveForm'>";
                               foreach ($row as $key=>$field) {
                           
                                   echo '<td>';
                                   if($key=="translation"){
                           
                                       echo "<input type='text' class='form-control' name='".$key."' value='".$field."'>";
                           
                                   }else{
                                       echo $field;    
                                       echo "<input type='hidden' name='".$key."' value='".$field."'>";
                                   }
                           
                                   
                                   echo '</td>';
                                   
                               }
                               echo '<td>';
                               echo "<input type='submit' class='saveTrans btn btn-default' value='".$this->language->getPhrase("key_send_form",$_SESSION['lang'])."'>";
                               echo '</td>';
                               echo "</form>";
                               echo '</tr>';
                               
                           }
                           ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="box-header table-bottom2">
         </div>
      </div>
      <!-- /.box-body -->
   </div>
   <!-- /.box -->
</section>
<!-- /.content -->