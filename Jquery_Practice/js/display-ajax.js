// JavaScript Document

// JavaScript Document
var $j = $.noConflict();

$j(document).ready(function() {

    $j("#display").click(function() {                

      $j.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "display.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $j("#responsecontainer").html(response); 
            //alert(response);
        }

        });
     });
});