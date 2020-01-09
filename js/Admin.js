$(document).ready(function(){

    
    bsCustomFileInput.init(function() {
     
        var preview = document.querySelector('.product-image');
        var file    = document.querySelector('#exampleInputFile').files[0];
        var reader  = new FileReader();
  
        reader.onloadend = function () {
          preview.src = reader.result;
        }
  
        if (file) {
          reader.readAsDataURL(file);
        } else {
          preview.src = "";
        }
  
        console.log($("#exampleInputFile").val());
    });






})