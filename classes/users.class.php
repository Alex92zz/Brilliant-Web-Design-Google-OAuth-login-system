<?php

class Users extends Dbh {
    
    protected function getUser($email){
        $sql = "SELECT * FROM users WHERE email = ?" ;
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        
        $results = $stmt->fetchAll();
        
        return $results;
    }
    
    protected function getUserId($email){
        $sql = "SELECT * FROM users WHERE email = ?" ;
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        $results = $stmt->fetchAll();
        return $results;
    }
    
    // check validity of id and session
    protected function checkUserStatus($id, $sess){
        $sql = "SELECT id FROM users WHERE id=:id AND session=:session";
        $stmt = $this->connect()->prepare($sql);
        $stmt-> execute([':id'       => intval($id),
                          ':session'  => $sess]);
        $results = $stmt->fetchAll();
        if(!$results[0]["id"]){
            return FALSE;
        }else{
            return TRUE;
        }
    }
    
    
    // get user info by ID and SESSION
    protected function getUserInfoByIdAndSession($id, $sess){
        $sql = "SELECT * FROM users WHERE id=:id AND session=:session";
        $stmt = $this->connect()->prepare($sql);
        $stmt-> execute([':id'       => intval($id),
                          ':session'  => $sess]);
        $results = $stmt->fetchAll();
        
        return $results;
    }
    
    
    
    protected function setUser($email, $firstname, $l_name, $session){
    $sql = "INSERT INTO users(email, f_name, l_name, session) VALUES (?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$email, $firstname, $l_name, $session]);
    }
    
}