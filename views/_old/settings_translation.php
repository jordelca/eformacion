
      
        <!-- Content Header (Page header) -->
        <section class="col-xs-12 content-header">
            <h1>
                <?= $this->language->getPhrase("key_translations",$_SESSION['lang']) ?>
            <small><?= $this->language->getPhrase("key_list",$_SESSION['lang']) ?></small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content row">
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?= $this->language->getPhrase("key_pending_keys",$_SESSION['lang']) ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive box">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-pending">
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
                                                echo "<form name='newTranslation' action='/".$_SESSION['lang']."/settings/addTranslation' method='POST' accept-charset='ISO-8859-1'>";
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
                                                echo "<input type='submit' class='btn btn-default' value='".$this->language->getPhrase("key_send_form",$_SESSION['lang'])."'>";
                                                echo '</td>';
                                                echo "</form>";
                                                echo '</tr>';
                                                
                                            }
                                            ?>
                                       
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?= $this->language->getPhrase("key_translated_keys",$_SESSION['lang']) ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive box">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-translated">
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
                                                echo "<form name='newTranslation' action='/".$_SESSION['lang']."/settings/addTranslation' method='POST' accept-charset='ISO-8859-1'>";
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
                                                echo "<input type='submit' class='btn btn-default' value='".$this->language->getPhrase("key_send_form",$_SESSION['lang'])."'>";
                                                echo '</td>';
                                                echo "</form>";
                                                echo '</tr>';
                                                
                                            }
                                            ?>
                                       
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
        </section><!-- /.content -->
      



