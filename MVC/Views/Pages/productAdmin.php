<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý thành viên</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="card-body p-0">
        <table class="table table-striped projects" style="width:100%">
            <thead>
                <tr>
                    <th style="width: 1%">
                        STT
                    </th>
                    <th style="width: 20%">
                       Tên sản phẩm
                    </th>
                    <th style="width: 15%" class="text-center">
                       Tiền chưa giảm giá 
                    </th>
                    <th style="width: 15%" class="text-center">
                        Tiền đã giảm giá
                    </th>
                    <th style="width: 10%" class="text-center">
                        Hình ảnh 
                    </th>
                    <th style="width:24%">
                        Mô tả
                    </th>
                    <th style="width: 15% " class="text-right">
                      Action
                    </th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($data["data"] as $row) {
               
              ?>
                <tr>
                    <td style="width: 1%">
                    <?php echo $row->{"id"} ?>
                    </td>
                    <td style="width: 20%" >
                        <?php echo $row->{"name"} ?>
                    </td>
                    <td style="width: 10%" class="text-center">
                      <?php echo $row->{"price"} ?>
                    </td> 
                    <td style="width: 10%"class="text-center">
                    <?php echo $row->{"price2"} ?>
                    </td>
                    <td style="width: 10%" class="text-center">
                      <img alt="Avatar" class="table-avatar" src="./<?php echo $row->{"image"}?>.jpg">
                    </td> 
                    <td class="project-state text-left" style="
                    max-width:300px;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;  
                    "> <?php echo $row->{"description"} ?></td>
                       
                    </td>
                    <td class="project-actions text-right"style="width: 15% ">
                        <a class="btn btn-primary btn-sm" href="./AdminController/Show/coc">
                            <i class="fas fa-folder">
                            </i>
                            <span>View</span>
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            <span>Edit</span>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            <span>Delete</span>
                        </a>
                    </td>
                </tr>
              
              <?php } ?>
              <tr>
                <form action="./MVC/Controllers/AdminContrller" method = "post">
                  <input id="ipSearch" name= "coc" type="text" placeholder="Tìm kiếm sản phẩm">
                  <input type="submit" id="Ssubmit" value="Tìm kiếm ">

                </form>
                </tr>
            </tbody>
        </table>
      </div>  
    </section>
    <!-- /.content -->
  </div>