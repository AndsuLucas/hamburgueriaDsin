$(document).ready(function(){
    var types    = [];
    var products = [];
    
    function getTypes(){
        $.ajax({
            method: "get",
            url: "./controllers/?control_page=product_api",
            dataType: "json"
        }).done(function(result){
           
            console.log(result);
        
        });
    }
    getTypes();


});