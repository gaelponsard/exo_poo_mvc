<?php
include_once '../modele/Dao.php';

class CrudController
{

    /* Fetch All */
    public function readData()
    {
        try {
            
            $dao = new Dao();
            
            $conn = $dao->openConnection();
            
            $sql = "SELECT * FROM `qcm`";
            
            $resource = $conn->query($sql);
            
            $result = $resource->fetchAll(PDO::FETCH_ASSOC);
            
            $dao->closeConnection();
        } catch (PDOException $e) {
            
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($result)) {
            return $result;
        }
    }

    /* Fetch Single Record by Id */
    public function readSingle($id)
    {
        try {
            
            $dao = new Dao();
            
            $conn = $dao->openConnection();
            
            $sql = "SELECT * FROM `qcm` WHERE id=" . $id . " ORDER BY id DESC";
            
            $resource = $conn->query($sql);
            
            $result = $resource->fetchAll(PDO::FETCH_ASSOC);
            
            $dao->closeConnection();
        } catch (PDOException $e) {
            
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($result)) {
            return $result;
        }
    }

    /* Add qcm */
    public function add_qcm($formArray)
    {
        $nom_qcm = $_POST['nom_qcm'];
        
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "INSERT INTO `qcm`(`nom_qcm`) VALUES ('" . $nom_qcm . "')";
        $conn->query($sql);
        $dao->closeConnection();
    }


/* Add question */
public function add_question($formArray)
{
    $intitule_question = $_POST['intitule_question'];
    $intitule_reponse = $_POST['intitule_reponse'];
    $valid = $_POST['valid'];
    
    $dao = new Dao();
    
    $conn = $dao->openConnection();
    
    $sql = "INSERT INTO `question`(`intitule_question`) VALUES ('" . $intitule_question . "')";
    $conn->query($sql);
    $dao->closeConnection();
}

/* Add reponse */
public function add_reponse($formArray)
{
    $intitule_reponse = $_POST['intitule_reponse'];
    $valid = $_POST['valid'];
    
    $dao = new Dao();
    
    $conn = $dao->openConnection();
    
    $sql = "INSERT INTO `reponse`(`intitule_reponse`,`valid`) VALUES ('" . $intitule_question . "')";
    $conn->query($sql);
    $dao->closeConnection();
}


    /* Edit a Record */
    public function edit($formArray)
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $category = $_POST['category'];
        
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "UPDATE tb_links SET title = '" . $title . "' , description='" . $description . "', url='" . $url . "', category='" . $category . "' WHERE id=" . $id;
        
        $conn->query($sql);
        $dao->closeConnection();
    }

    /* Delete a Record */
    public function delete($id)
    {
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "DELETE FROM `tb_links` where id='$id'";
        
        $conn->query($sql);
        $dao->closeConnection();
    }
}

?>