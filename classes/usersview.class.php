<?php

class UsersView extends Users {
    
    public function showUsers($email){
    $results = $this->getUser($email);
        
    return $results;
    }
    
    protected function checkUserSession($id, $sess){
    $results = $this->checkUserStatus($id, $sess);
    
    return $results;
    }
    
    protected function getUserByIdAndSession($id, $sess){
    $results = $this->getUserInfoByIdAndSession($id, $sess);
    
    return $results;
    }
    
    
    
}

