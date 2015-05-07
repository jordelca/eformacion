<?php
Class organizationController Extends baseController
{
 

    public function index() {
            $this->registry->template->show('organization_show');
    }
    
    public function category() {
            $this->registry->template->show('organization_category');
    }

    public function create() {
            $this->registry->template->show('organization_create');
    }

    public function edit() {
            $this->registry->template->show('organization_edit');
    }

    public function profileOrg() {
            $this->registry->template->show('organization_profileOrg');
    }

    public function listOrganizations() {
            $this->registry->template->show('organization_list');
    }

    public function getOrganizations() {
        return organization::listOrganizations();
    }



    public function insertOrganization() {
                
        $conn = $this->registry->db->prepare("INSERT INTO adm_organization (name,description,address,postcode,country,town,county,email,visible,deleted,creationdate,licensekey,category_tree,logo) VALUES (:name,:description,:address,:postcode,:country,:town,:county,:email,:visible,false,NOW(),:licensekey,:category_tree,:logo)");
        $conn->bindValue(":name", $_POST['org_name']);
        $conn->bindValue(":description", $_POST['org_desc']);
        $conn->bindValue(":address", $_POST['ord_address']);
        $conn->bindValue(":postcode", $_POST['org_postcode']);
        $conn->bindValue(":country", $_POST['org_town']);
        $conn->bindValue(":town", $_POST['org_country']);
        $conn->bindValue(":county", $_POST['org_county']);
        $conn->bindValue(":email", $_POST['org_email']);
        $conn->bindValue(":visible", $_POST['org_visible']);
        $conn->bindValue(":licensekey", uniqid());
        $conn->bindValue(":logo", $_POST['org_logo']);
        $conn->bindValue(":category_tree", '[{"id":0,"text": "key_root_node"}]');
        try{
            $conn->execute();
        }catch (Exception $e){
            var_dump($e->getMessage());die();
        }
        header('Location: /'.$_SESSION['lang'].'/organization/listorganizations');
    }

    public function getCategoryTree() {
            
        $result = organization::getCategoryTree($_POST['org_id']);   
        echo $result;
        return $result;

        
    }

    public function insertCategory() {                
        $tree = json_decode(organization::getCategoryTree($_POST['org_id']));
        $newElement = new stdClass();
        $newElement->id = $this->getMaxId($tree)+1;
        $newElement->text = $_POST['cat_new_name'];

        $tree = $this->insertCategoryTree($tree,$newElement,$_POST['parent_node']);

        organization::updateTree($_POST['org_id'],json_encode($tree));
        $this->getCategoryTree($_POST['org_id']);
    }

    public function updateCategory() {                
        $tree = json_decode(organization::getCategoryTree($_POST['org_id']));
        $tree = $this->updateCategoryTree($tree,$_POST['node_id'],$_POST['cat_modify_name']);
        organization::updateTree($_POST['org_id'],json_encode($tree));
        $this->getCategoryTree($_POST['org_id']);
    }


    public function deleteCategory() {
        $tree = json_decode(organization::getCategoryTree($_POST['org_id']));
        $tree = $this->deleteCategoryTree($tree,$_POST['node_id']);
        organization::updateTree($_POST['org_id'],json_encode($tree));
        $this->getCategoryTree($_POST['org_id']);
    }


    public function insertCategoryTree($array,$element,$parent) { 
        
        foreach($array as $v) { 
               
                if(is_object($v) && isset($v->id) && (int)$v->id == (int)$parent){

                    $v->nodes[] = $element;
                    break; 
                }elseif (is_object($v) && isset($v->nodes) && is_array($v->nodes)){
                    self::insertCategoryTree($v->nodes,$element,$parent);
                }    
        } 
        
        return $array; 
    } 

    public function updateCategoryTree($array,$node_id,$cat_modify_name) { 
        
        foreach($array as $v) { 
                if(is_object($v) && isset($v->id) && isset($v->text) && (int)$v->id == (int)$node_id){
                    $v->text = $cat_modify_name;
                    break; 
                }elseif (is_object($v) && isset($v->nodes) && is_array($v->nodes)){
                    self::updateCategoryTree($v->nodes,$node_id,$cat_modify_name);
                }    
        } 
        
        return $array; 
    } 

    public function findCategoryName() { 
        
        $this->searchCategoryName(json_decode(organization::getCategoryTree($_POST['org_id'])),$_POST['cat_id']);

    } 

    public function searchCategoryName($array,$node_id) { 
        
        foreach($array as $v) { 
                if(is_object($v) && isset($v->id) && isset($v->text) && (int)$v->id == (int)$node_id){
                    return json_encode($v);
                }elseif (is_object($v) && isset($v->nodes) && is_array($v->nodes)){
                    echo self::searchCategoryName($v->nodes,$node_id);

                }    
        } 
    } 


    public function deleteCategoryTree(&$array,$node_id) {

        foreach($array as $k => $v) { 
            if(is_object($v) && isset($v->id) && (int)$v->id == (int)$node_id){
                unset($array[$k]); 
                $array = array_values($array) ;
                break; 
            }elseif (is_object($v) && isset($v->nodes) && is_array($v->nodes) ){
                self::deleteCategoryTree($v->nodes,$node_id);
                if(sizeOf($v->nodes) == 0){
                    unset($v->nodes);
                }

            }    
        } 
        
        return $array; 
    }


    public function getMaxId($ar) { 
        
        foreach($ar as $v) { 
            $keyIds[] = $v->id;
            if (isset($v->nodes)) {
                $keyIds = array_merge($keyIds, (array)self::getMaxId($v->nodes)); 
            }
                
        } 
        
        return max($keyIds);
            

    } 

    public function addCourse(){
        if(isset($_POST['selectedNodeId']) && isset($_POST['course_selected_list']) && isset($_POST['org_id'])){
            
            foreach(explode(",",$_POST['course_selected_list']) as $course){
                organization::addCourseToOrg($_POST['org_id'],$course,$_POST['selectedNodeId']);
            }
            
            header('Location: /'.$_SESSION['lang'].'/organization/listOrgCourses?org_id='.$_POST['org_id']);
           
        }else{
            header('Location: /'.$_SESSION['lang'].'/course/listCourses');
        }
        

    }

  
    public function getAvailableCourses(){
        $courseList = course::listAvailableCourses($_POST['org_id']);
        
        foreach ($courseList as $row) {
            echo '<tr>';
                
                
                foreach ($row as $key=>$field) {
                    if($key == "id"){
                        $id = $field;
                
                        echo '<td>';
                            echo '<input type="checkbox" value="'.$id.'" name="course_id_list">';
                        echo '</td>';
                        
                    }else{
                        echo '<td>';
                                echo $field;
                        echo '</td>';
                    }
                    
                }

            echo '</tr>';
            
        }
    }

    public function getAssociatedCourses(){
        echo json_encode(organization::listAssociatedCourses($_POST['org_id']));
    }


    public function listOrgCourses(){
        $this->registry->template->show('organization_listOrgCourses');

    }

    public function getCourses() {
        return course::listCourses();
    }

   
}
