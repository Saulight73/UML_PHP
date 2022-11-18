<?php



class core{

public function loginRequest(String $login, String $password){

    $mysqli = mysqli_connect ("localhost","root",NULL, "uml_php");
    if($mysqli!=false){
        if ($result = $mysqli -> query("SELECT * FROM `account` WHERE Username=\"".$login."\" AND Password=\"".$password."\"")) {
            echo "Returned rows are: " . $result -> num_rows;
            $row = mysqli_fetch_row($result);
            if($result -> num_rows == 0){
                return "access blocked, wrong username or password";
            }elseif($result -> num_rows == 1){
                
                return "access granted, welcome back ".$row[4];
            }
            
            $result -> free_result();
          }
          
          $mysqli -> close();
    }

}
}