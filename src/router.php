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
                case 'lista';
                    return 'lista';
                case 'lista_action';
                    return 'lista_action';
                case 'tarea';
                    return 'tarea';
                case 'tarea_action';
                    return 'tarea_action';
                default:
                    return 'home';
            }
            
        }