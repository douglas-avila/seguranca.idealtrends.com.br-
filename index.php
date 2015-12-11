<?php 
    $urls = array(
        'asafira.com.br',
        'solucoesindustriais.com.br'
    );
    
    t34t43t34t34t34
    foreach($urls as $url){
        $content = file_get_contents($url);
        
        echo $content;
    }
?>