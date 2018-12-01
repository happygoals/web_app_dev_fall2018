
addBarGraph();

function addBarGraph() {
 $.ajax({
                type: "POST",
                url: "link_to_php_file.php",
                data: area;
                success function(json_data){
                    var data_array = $.parseJSON(json_data);

                    //access your data like this:
                    var plum_or_whatever = data_array['output'];.
                    //continue from here...
                }
            });
\
}