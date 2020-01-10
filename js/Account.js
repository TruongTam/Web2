$(document).ready(function(){
    $(".btnDelete").click(function(e){
        e.preventDefault();
        let tmp = $(this).attr("data-item");
        console.log(tmp);
        $("#btnSave").attr("data-item",tmp);
        $("#modal-default").modal();
        console.log(tmp);
      })

                  
      $('#btnSave').click(function(e){
          console.log($(this).attr("data-item"));
          $.post(`./AccountAdmin/deleteAccount/`, {id:$(this).attr("data-item")}, function(){
              
              window.location.reload();
              
          }) 
      })
    $("#ipSearch").keyup(function(){
        console.log($(this).val());
       if($(this).val()==""){
        $("#modesearch").html("")
           window.location.reload();
           return;
       }else{
           $("#modesearch").html("Đang tìm kiếm");
       }
       $.ajax({
        url: "./Ajax/searchNameAccount",
        method: "post",
       
        data: {
            name: $(this).val()
        },
        success: function(data) {
            console.log(data)
            let list = JSON.parse(data);
            console.log(list);
            $("table.table-striped.projects #tbodysp").html("");
            list.forEach(function(value){
                $("table.table-striped.projects #tbodysp").append(`

                <tr>
                <td style="width: 1%">
                ${value.id}
                </td>
                <td style="width: 20%" class="overflowhide" >
                ${value.taikhoan}
                </td>
                <td style="width: 10%" class="text-center">
                ${value.ten}
                </td> 
                <td style="width: 10%"class="text-center">
                ${value.ngaysinh}
                </td>
                <td style="width: 10%" class="text-center">
                ${value.diachi}
                </td> 
                <td class="project-state text-left overflowhide">
                ${value.email}
                </td>
                <td class="project-actions text-right"style="width: 15% ">
                   
                    <a class="btn btn-info btn-sm" href="./AccountAdmin/updateProduct/ ${value.id}">
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
            </tr>`
                )
            })
        }

    });
      



    })


});