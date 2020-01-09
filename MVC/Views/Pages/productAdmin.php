<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý sản phẩm</h1>
          </div><!-- /.col -->
          <div id= "modesearch" ></div>
          <div class="col-sm-6 ">
            <form action="./Ajax/searchName" style="padding-left: 400px;" method = "post">
                  <input id="ipSearch" name= "name" type="text" placeholder="Tìm kiếm sản phẩm">
                  <input type="submit" id="Ssubmit" value="Tìm kiếm ">
            </form>
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
                    <th style="width: 10%" class="text-center">
                       Tiền chưa giảm giá 
                    </th>
                    <th style="width: 10%" class="text-center">
                        Tiền đã giảm giá
                    </th>
                    <th style="width: 10%" class="text-center">
                        Hình ảnh 
                    </th>
                    <th style="width:24%" class="text-center">
                        Mô tả
                    </th>
                    <th style="width: 15% " class="text-right">
                      Action
                    </th>
                </tr>
            </thead>
            <tbody id ="tbodysp">
              <?php foreach($data["data"] as $row) {
               
              ?>
                <tr>
                    <td style="width: 1%">
                    <?php echo $row->{"id"} ?>
                    </td>
                    <td style="width: 20%" class="overflowhide" >
                        <?php echo $row->{"name"} ?>
                    </td>
                    <td style="width: 10%" class="text-center">
                      <?php echo $row->{"price"} ?>
                    </td> 
                    <td style="width: 10%"class="text-center">
                    <?php echo $row->{"price2"} ?>
                    </td>
                    <td style="width: 10%" class="text-center">
                      <img alt="Avatar" class="table-avatar" src="./<?php echo $row->{"image"}?>">
                    </td> 
                    <td class="project-state text-left overflowhide">
                     <?php echo $row->{"description"} ?></td>
                       
                    </td>
                    <td class="project-actions text-right"style="width: 15% ">
                       
                        <a class="btn btn-info btn-sm" href="./ProductAdmin/updateProduct/<?php echo $row->{"id"}?>">
                            <i class="fas fa-pencil-alt">
                            </i>
                            <span>Edit</span>
                        </a>
                        <a class="btn btn-danger btn-sm" href="./ProductAdmin/deleteProduct/<?php echo $row->{"id"}?>">
                            <i class="fas fa-trash">
                            </i>
                            <span>Delete</span>
                        </a>
                    </td>
                </tr>
              <?php } ?>
                <tr>
                <td Colspan="7">
                <div >
                    <nav style="display: flex;justify-content: center">
                        <ul class="pagination">
                            <li style="padding-right:7px">
                                <a href="./ProductAdmin/Show/<?php echo $data["pages"]-1?>" aria-label="Previous">
                                    <span aria-hidden="true"><<</span>
                                </a>
                            </li>
                                <li><a href=""> </a><?php echo $data["pages"]?></li>
                            <li style="padding-left:7px">
                                <a href="./ProductAdmin/Show/<?php echo $data["pages"]+1?>" aria-label="Next">
                                    <span aria-hidden="true">  >></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                  </div>
                </td>
               
                
                </tr>
            </tbody>
        </table>
      </div>  
    </section>
    <!-- /.content -->
  </div>
  <script src= "./js/productAdmin.js"></script>