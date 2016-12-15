<?php

$sqlcategoryEdit = "SELECT * FROM _category";
$querycategoryEdit = mysql($database, $sqlcategoryEdit);
$rowscategoryEdit = mysql_num_rows($querycategoryEdit);
$syndicateCategoryEdit = "";
if($rowscategoryEdit > 0){
    while($rowcategoryEdit = mysql_fetch_assoc($querycategoryEdit)){
        
        $categoryIDEdit = $rowcategoryEdit["_id"];
        $categoryNameEdit = $rowcategoryEdit["_category"];
        
        
        
            $syndicateCategoryEdit = $syndicateCategoryEdit.
            '<div class="modal fade" id="modalCategoryEdit-'.$categoryIDEdit.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Kategori</strong></h4>
      </div>
      <div class="modal-body">
          <form role="form" class="form-horizontal" action="" id="editKategori" name="editKategori" style="padding-bottom: 40px;" method="POST">
          <input type="text" name="idCategoryEdit" id="idCategoryEdit" value="'.$categoryIDEdit.'" style="visibility: hidden;">
            <div class="form-group">
                                    <label for="namaKategoriEdit" class="col-sm-4 control-label" style="color: #777;">Nama Kategori</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="namaKategoriEdit" name="namaKategoriEdit" placeholder="Nama Kategori" value="'.$categoryNameEdit.'" required>
                                        </div>
                                </div>
                <input type="submit" class="btn btn-info pull-right btn-sm" name="submitKategoriEdit" id="submitKategoriEdit" value="Update Kategori">
            </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';            
        
    }
}
