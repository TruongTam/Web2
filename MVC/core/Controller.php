<?php
class Controller{
    public function model($model){
        require_once "./MVC/Models/".$model.".php";
        return new $model;
    }
    public function view($view, $data=[]){
        require_once "./MVC/Views/".$view.".php";
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<body>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Đăng nhập
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Thêm tài khoản</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-align:right ">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="dangkytaikhoan">
        
        <form action="" method="POST" style="text-align: center">
            <table>
                    <tr>
                        <td>Tài khoản:</td>
                        <td><input type="text" name="taikhoan"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    <tr>
                        <td>Mật khẩu:</td>
                        <td><input type="text" name="matkhau"></td>
                    </tr>
                    <tr>
                      <td>  &nbsp;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Đăng nhập" name="nutdangnhap1"></td>
                    </tr>
            </table>
        </form>
    </div>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>



  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong1">
    Đăng ký
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTittle1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle1">Đăng ký</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-align:right ">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="dangkytaikhoan">
        
        <form action="" method="POST" style="text-align: center">
            <table>
                    <tr>
                        <td>Tài khoản*:</td>
                        <td><input type="text" name="taikhoan1"></td>
                    </tr>
                    
                    <tr>
                        <td>Mật khẩu*:</td>
                        <td><input type="text" name="matkhau1"></td>
                    </tr>
                    <tr>
                        <td>Tên:</td>
                        <td><input type="text" name="ten"></td>
                    </tr>
                    <tr>
                        <td>SĐT:</td>
                        <td><input type="text" name="sdt"></td>
                    </tr>
                    <tr>
                        <td>Ngày sinh:</td>
                        <td><input type="text" name="ngaysinh"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ:</td>
                        <td><input type="text" name="diachi"></td>
                    </tr>

                    <tr>
                      <td>  &nbsp;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Đăng Ký" name="nutdangky1"></td>
                    </tr>
            </table>
        </form>
    </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>




  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong2">
    Cập nhật
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle2">Cập nhật</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-align:right ">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="dangkytaikhoan">
        
        <form action="" method="POST" style="text-align: center">
            <table>
                    <tr>
                        <td>Tài khoản:</td>
                        <td><input type="text" name="taikhoan2"></td>
                    </tr>
                    <tr>
                      <td>
                          &nbsp;
                      </td>
                    
                    </tr>
                    <tr>
                        <td>Mật khẩu:</td>
                        <td><input type="password" name="matkhau2"></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu mới:</td>
                        <td><input type="password" name="matkhaunew"></td>
                    </tr>
                    <tr>
                      <td>  &nbsp;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Cập nhật" name="nutsua1"></td>
                    </tr>
            </table>
        </form>
    </div>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>

</body>
</html>