<?php

class Gravatar{

    public function getAvatar($emailaddress,$type,$size=null){
$hashed = md5($emailaddress);
        $href = 'https://secure.gravatar.com/avatar/';
        $href.=$hashed;
        $href.='?d=';
        $href.= $type;
        if(!empty($size)){
            $href.= '&s=';
            $href.=$size;
        }
        return $href;
    }

}