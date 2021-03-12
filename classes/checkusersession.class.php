<?php

class CheckUserSession extends UsersView {
    
    public function verifyUserLogin($id, $sess){
        $results = $this->checkUserSession($id, $sess);
        
        return $results;
    }
    
}

