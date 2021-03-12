<?php

class UsersContr extends Users {
    
    
    public function createUser($email, $firstname, $l_name, $session){
        
            $this->setUser($email, $firstname, $l_name, $session);

    }
}
