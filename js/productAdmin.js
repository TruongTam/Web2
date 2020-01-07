$(document).ready(function(){
    $(".project-actions.text-right").on("click","a",function(e){
        e.preventDefault();
        $(this).children("span").text();
        
    });

});