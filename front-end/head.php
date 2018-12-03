<?php
    function generateHead() {
        $styleList = array("bootstrap-4.1.3-dist/css/bootstrap.min.css", "css/style.css", "css/signin.css", "https://use.fontawesome.com/releases/v5.5.0/css/all.css");
        $scriptList = array("https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js", "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js", "js/table.js", "js/modal.js", "bootstrap-4.1.3-dist/js/bootstrap.min.js", "Chart.js/Chart.min.js");

        for ($i=0; $i<func_num_args; $i++) {
            if (substr(func_get_arg($i),-strlen(".css"))===".css") {
                array_push($styleList, func_get_arg($i));
            }
            else if (substr(func_get_arg($i),-strlen(".js"))===".js") {
                array_push($scriptList, func_get_arg($i));
            }
        }
?>

<meta charset="utf-8">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Snackfacts</title>
<link href="favicon address" rel="shortcut icon">

<?php
        foreach ($styleList as $style) {
            echo "<link href=\"$style\" rel=\"stylesheet\">";
        }
    
        foreach ($scriptList as $script) {
            echo "<script src=\"$script\"></script>";
        }
    }
?>