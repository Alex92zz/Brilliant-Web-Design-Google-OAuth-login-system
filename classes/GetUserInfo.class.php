<?php

class GetUserInfo extends UsersView {
    
    public function getUserInfoDetails($id, $sess){
        $results = $this->getUserByIdAndSession($id, $sess);
        
        return $results;
    }
    
}

