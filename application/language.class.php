<?php
Class Language
{
    
    /*
     * @the registry
     * @access private
    */
    private $registry;
    
    /*
     * @Variables array
     * @access private
    */
    private $vars = array();
    
    /**
     *
     * @constructor
     *
     * @access public
     *
     * @return void
     *
     */
    function __construct($registry) {
        $this->registry = $registry;
    }
    
    /**
     *
     * @set undefined vars
     *
     * @param string $index
     *
     * @param mixed $value
     *
     * @return void
     *
     */
    public function __set($index, $value) {
        $this->vars[$index] = $value;
    }
    
    function getAvailableLanguages() {
        
        $conn = $this->registry->db->prepare('SELECT lang_code FROM adm_languages WHERE active = 1');
        $conn->execute();
        return $conn->fetchAll();
    }
    
    function checkAvailableLanguages($lang) {
        
        $conn = $this->registry->db->prepare('SELECT lang_code FROM adm_languages WHERE active = 1 and lang_code = :lang');
        $conn->bindValue(":lang", $lang);
        $conn->execute();
        
        return $conn->rowCount() != 0;
    }
    
    function listPendingKeys() {
        $conn = $this->registry->db->prepare("SELECT 
                                                    adm_translation.translation_key,adm_translation.lang_code,adm_translation.translation
                                                FROM
                                                    adm_translation
                                                        INNER JOIN
                                                    adm_languages ON adm_languages.lang_code = adm_translation.lang_code
                                                        and adm_languages.active = 1
                                                WHERE
                                                    adm_translation.translation = '' OR adm_translation.translation IS NULL");
        $conn->execute();
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function listAllKeys() {
        $conn = $this->registry->db->prepare("SELECT 
                                                    adm_translation.translation_key,adm_translation.lang_code,adm_translation.translation
                                                FROM
                                                    adm_translation
                                                        INNER JOIN
                                                    adm_languages ON adm_languages.lang_code = adm_translation.lang_code
                                                        and adm_languages.active = 1
                                                WHERE
                                                    adm_translation.translation <> '' AND adm_translation.translation IS NOT NULL");
        $conn->execute();
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function getPhrase($key, $lang) {
        
        $conn = $this->registry->db->prepare('SELECT translation FROM adm_translation WHERE LOWER(translation_key) =:key and LOWER(lang_code)=:lang ');
        $conn->bindValue(":key", strtolower($key));
        $conn->bindValue(":lang", strtolower($lang));
        $conn->execute();

        if ($conn->rowCount()) {
            $result = $conn->fetch();
            
            if (!empty($result['translation']) && $result['translation'] != "[empty]") {
                //return iconv("utf-8","ISO-8859-1",$result['translation']);
                return $result['translation'];
            } else if ($result['translation'] == "[empty]") {
                return "";
            }
        } else {
            
            $this->addKey($key);
        }
        
        return $key;
    }
    
    function addKey($key) {
        
        $languages = $this->getAvailableLanguages();
        foreach ($languages as $lang) {
            try {
                
                $conn = $this->registry->db->prepare("INSERT INTO adm_translation (translation_key,lang_code,translation) VALUES (:key,:lang,'')");
                $conn->bindValue(":key", $key);
                $conn->bindValue(":lang", $lang['lang_code']);
                $conn->execute();
            }
            catch(Exception $e) {
            }
        }
    }
    
    function changeLanguage($route, $lang) {
        try{
            $parts = explode('/', $route);
            $parts[1] = $lang;    
            $result = implode('/', $parts);

        }catch(Exception $e){
            die;
        }
        
        return $result;
    }
    
    function langCodeToMoodle($lang) {
        
        switch ($lang) {
            case "cs":
                return "es";
                break;

            case "en":
                return "en";
                break;

            case "vl":
                return "ca_valencia";
                break;
        }
       
    }

    function langCodeToAdmin($lang) {
        
        switch ($lang) {
            case "es":
                return "cs";
                break;

            case "en":
                return "en";
                break;

            case "ca_valencia":
                return "vl";
                break;
        }
       
    }
}
?>
