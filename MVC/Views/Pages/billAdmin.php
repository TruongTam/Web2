

<div class="content-wrapper">
  <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Default Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" id="btnSave" data-item = "">Save changes</button>
          </div>
      </div>  
          <!-- /.modal-content -->
    </div>
        <!-- /.modal-dialog -->
  </div>
                
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
                        Người mua
                    </th>
                    <th style="width: 10%" class="text-center">
                        Ngày đặt
                    </th>
                    <th style="width: 10%" class="text-center">
                        Tổng tiền 
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
                        <?php echo $row->{"teb"} ?>
                    </td>
                    <td style="width: 10%" class="text-center">
                      <?php echo $row->{"ngaylapbill"} ?>
                    </td> 
                    <td style="width: 10%"class="text-center">
                    <?php echo $row->{"tongtien"} ?>
                    
                    
                    <td class="project-actions text-right"style="width: 15% ">
                       
                        <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                        <a class="btnDelete" href="#", data-item = "<?php echo $row ->{"id"}?>">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                          
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
                                <a href="./AccountAdmin/Show/<?php echo $data["pages"]-1?>" aria-label="Previous">
                                    <span aria-hidden="true"><<</span>
                                </a>
                            </li>
                                <li><a href=""> </a><?php echo $data["pages"]?></li>
                            <li style="padding-left:7px">
                                <a href="./AccountAdmin/Show/<?php echo $data["pages"]+1?>" aria-label="Next">
                                    <span aria-hidden="true">  >> </span>
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
  
  <script src="./js/Account.js"></script>
  </script>
