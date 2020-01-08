<?php
include("./connect.php");
$productrang = 12;
if (isset($_GET["trang"])) {
    $trang = $_GET["trang"];
} else {
    $trang = 1;
}
if (isset($_GET["name"])) {
    $name = $_GET["name"];
} else {
    $name = "";
}

?>
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>

        <div class="container">
            <div id = "contact">
                <div style="width: 50%">
                    <p ><b style="font-size:82px;color:blue">Eagle cat eye</b> </p>
                    <table cellspacing="0" style="font-size:20px">
                        
                        <tr>
                            <td><b>Địa chỉ liên hệ:</b> 280 An Dương Vương, Quận 5; Thành phố Hồ Chí Minh, Việt Nam</td>
                            
                        </tr>
                        <tr>
                            <td> <b>Số điện thoại:</b>0964443332</td>
                           
                        
                        </tr>
                        <tr>
                            <td><b>Email:</b> concockun@gmail.com</td>
                            
                        </tr>
                                        
                    </table>
                </div>

                <div style="width: 50%">
                    <div role="tabpanel" class="tab-pane fade active in" id="profile">
                        <div class="submit-review">
                            <p><label for="name">Tên</label> <input id="ipreviewname" name="name" type="text"></p>
                            <p><label for="email">Gmail</label> <input id="ipreviewemail" name="email" type="email"></p>
                        
                            <p><label for="review">Nhận xét của bạn</label> <textarea id="txtreview" name="review" cols="30" rows="10"></textarea></p>
                            <p><input id="submitreview" type="submit" value="Gửi"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
<script>
  $("#submitreview").click(function  (){
       
         $.ajax({
             url:"mau.php",
             method:"post",
             type:"json",
             data:{
                
                 email:$("#ipreviewemail").val(),
            
                 review:$('#txtreview').val(),
                 
             },
             success:function(data){
                
                alert("Thành công");
                // window.location.reload();
                
                
             }
         })
         
        });
</script>

