<?php






















                return true;
}
else{
    return false;
}else{
    return false;
}
catch(PDOException $e){
    return false;
}
}

    function register ($db,$data){
        try{
            $sql="INSERT INTO users VALUES(?,?,?,null,null)"
            $stmt=$db -> prepare($sql);
            $stmt=$db -> prepare($sql);
        }
    }