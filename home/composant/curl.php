
<?php

function curl_get($uri, $token)
    {
       
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        
        $authorization = "Authorisation:$token";

        curl_setopt($ch, CURLOPT_URL, $uri);
    
        // Set the content type to application/json
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', $authorization));
    
        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result=curl_exec($ch);
    
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        curl_close($ch);

        return   $result;
    }


function curl_post($uri, $token, $data)
    {
       
        $ch = curl_init();

        $payload = json_encode($data);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
                
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            
        $authorization = "Authorisation:$token";

        curl_setopt($ch, CURLOPT_URL, $uri);
    
        // Set the content type to application/json
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', $authorization));
    
        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result=curl_exec($ch);
    
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        curl_close($ch);

        return   $result;
    }

function curl_put($uri, $token, $data)
    {
       
        $ch = curl_init();

        $payload = json_encode($data);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
                
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

        $authorization = "Authorisation:$token";

        curl_setopt($ch, CURLOPT_URL, $uri);
    
        // Set the content type to application/json
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', $authorization));
    
        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result=curl_exec($ch);
    
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        curl_close($ch);

        return   $result;
    }

function curl_delete($uri, $token)
    {
       
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

        $authorization = "Authorisation:$token";

        curl_setopt($ch, CURLOPT_URL, $uri);
    
        // Set the content type to application/json
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', $authorization));
    
        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result=curl_exec($ch);
    
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        curl_close($ch);

        return   $result;
    }


function curl_import($uri, $token, $data)
    {
       
        $ch = curl_init();

       // $payload = json_encode($data);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            
        $authorization = "Authorisation:$token";

        curl_setopt($ch, CURLOPT_URL, $uri);
    
        // Set the content type to application/json
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization));
    
        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result=curl_exec($ch);
    
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        curl_close($ch);

        return   $result;
    }

?>
    