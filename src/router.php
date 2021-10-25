<?php
        /**
         *  Devuelve la url del route
         */
        function getRoute():string
        {
            if(isset($_REQUEST['url'])){
                $url=$_REQUEST['url'];
            }else{
                $url='home';
            }
            switch($url){
                //acceso a la vista
                case 'login':
                    return 'login';
                case 'register':
                    return 'register';
                //acceso a proceso login
                case 'login_action';
                    return 'login_action';
                case 'register_action';
                    return 'register_action';
                case 'escritorio';
                    return 'escritorio';
                default:
                    return 'home';
            }
            
        }