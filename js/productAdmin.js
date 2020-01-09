$(document).ready(function(){
 

  
    $(".btnDelete").click(function(e){
        e.preventDefault();
        let tmp = $(this).attr("data-item");
        console.log(tmp);
        $("#btnSave").attr("data-item",tmp);
        $("#modal-default").modal();
  
      })
                  
      $('#btnSave').click(function(e){
          console.log($(this).attr("data-item"));
          $.post(`./ProductAdmin/deleteProduct/`, {id:$(this).attr("data-item")}, function(){
              
              window.location.reload();
              
          }) 
      })


    $("#ipSearch").keyup(function(){
       if($(this).val()==""){
           $("#modesearch").html("")
           window.location.reload();
           return;
       }else{
           $("#modesearch").html("Đang tìm kiếm");
       }
       $.ajax({
        url: "./Ajax/searchName",
        method: "post",
       
        data: {
            name: $(this).val()
        },
        success: function(data) {
            
            let list = JSON.parse(data);
            $("table.table-striped.projects #tbodysp").html("");
            list.forEach(function(value){
                $("table.table-striped.projects #tbodysp").append(`
          
             
                <tr>
                    <td style="width: 1%">
                    ${value.id}
                    </td>
                    <td style="width: 20%" >
                    ${value.name}
                    </td>
                    <td style="width: 10%" class="text-center">
                    ${value.price}
                    </td> 
                    <td style="width: 10%"class="text-center">
                    ${value.price2}
                    </td>
                    <td style="width: 10%" class="text-center">
                      <img alt="Avatar" class="table-avatar" src="${value.image}">
                    </td> 
                    <td class="project-state text-left" style="
                    max-width:300px;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;  
                    "> ${value.description}</td>
                       
                 
                    <td class="project-actions text-right"style="width: 15% ">
                       
                       <a class="btn btn-info btn-sm" href="./ProductAdmin/updateProduct/ ${value.id}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            <span>Edit</span>
                        </a>
                        
                        <a class="btnDelete" href="#", data-item = " ${value.id}">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                          
                        </a>
                    </td>
                </tr>
            
    
                

                `)
                
                
                
            })
           
           
           
           

        }

    });
      



    })


});