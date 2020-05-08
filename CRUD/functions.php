<?php 

    function validatedata(){

        if ( strlen($_POST['first_name']) == 0 || strlen($_POST['last_name']) == 0 || strlen($_POST['email']) == 0|| strlen($_POST['headline']) == 0 || strlen($_POST['summary']) == 0)
                {
                    return "All values are required";
                }
            
            
            if (strpos( $_POST['email'] , '@' ) == false)
                {
                    return "Email must have an at-sign (@)";
                }
        return true;
    
}



function checkRemoteFile($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        // don't download content
        curl_setopt($ch, CURLOPT_NOBODY, 1);
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
        $result = curl_exec($ch);
        curl_close($ch);
        if($result !== FALSE)
        {
            return true;
            curl_close($ch);
        }
        else
        {
            return false;
            curl_close($ch);
        }
    
    }

    
?>