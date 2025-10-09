<?php
    function pretty_pre($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    };

    function aside_menu(){
        $directories = glob('images/gallery/*');
        

        foreach($directories as $directory){
            $directory = str_replace('images/gallery/', '', $directory);
            echo "<li>" . "<a href='". $directory. "'>". $directory. "</a></li>";
        }
    }

    function current_url(){
        $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        return($actual_link);
    }
?>