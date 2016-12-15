<?php

$sqlCategoryDelete = "SELECT * FROM _category";
$queryCategoryDelete = mysql($database, $sqlCategoryDelete);
$rowsCategoryDelete = mysql_num_rows($queryCategoryDelete);
$syndicateCategoryDelete = "";
if($rowsCategoryDelete > 0){
    while($rowCategoryDelete = mysql_fetch_assoc($queryCategoryDelete)){
        
        $categoryIDDelete = $rowCategoryDelete["_id"];
        
        
        
            $syndicateCategoryDelete = $syndicateCategoryDelete.
            '<div class="modal fade" id="modalCategoryDelete-'.$categoryIDDelete.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Hapus Kategori</strong></h4>
      </div>
      <div class="modal-body">
          <form role="form" class="form-horizontal" action="" id="removeKategori" name="removeKategori" style="padding-bottom: 40px;" method="POST">
          <input type="text" name="idCategoryDelete" id="idCategoryDelete" value="'.$categoryIDDelete.'" style="visibility: hidden;">
              <div class="form-group">
                                    <label for="" class="col-sm-0 control-label" style="color: #777;"></label>
                                        <div class="col-sm-12" style="color: #777;">
                                            Hapus kategori ini?. Dengan menghapus kategori ini, Anda juga akan menghapus produk dengan kategori ini.
                                        </div>
                                </div>
                <input type="submit" class="btn btn-danger pull-right btn-sm" name="submitKategoriDelete" id="submitKategoriDelete" value="Hapus Kategori">
            </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';            
        
    }
}
