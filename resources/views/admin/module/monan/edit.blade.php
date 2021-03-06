@extends('admin.app')
@section('title','Cập nhật món ăn')
@section('content')
<section class="content">
@include('admin.block.error')
@include('admin.block.flash')
<form action="" method="POST">
{{ csrf_field() }}
  <div class="row">
    <div class="box-body"></div> 
      <div class="col-xs-12">
        <div class="box box-danger">
          
            <button type="submit" name="btnSaveNew" value="btnSaveNew" class="btn btn-primary margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-plus-square"></i></b>Save & New</button> 
            <button type="submit" name="btnSaveClose" value="btnSaveClose" class="btn btn-success margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-save"></i></b>Save & Close</button>
            <a href="{{ route('danh-sach-mon-an') }}" class="btn btn-danger margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-close"></i></b>Close</a>
          
        </div>
      </div>
      <div class="col-xs-12">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Cập nhật món ăn</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
          </div>
          <div class="box-body">
          <div class="form-group ">
              <label class="col-sm-2" >Danh mục cha</label>
              <select class="col-sm-6 select2" name="sltCate"><?php menuMulti5($data_cate); ?>
                <!-- <option value="0">Danh mục cha</option> -->
                
              </select>
          </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Tên món ăn</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="txtTitle" placeholder="Nhập tên" value="{!!old('txtTitle', isset($data_news["tenmonan"]) ? $data_news["tenmonan"]:null)!!}">
              </div>
        	  </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Đơn giá</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="txtdongia" placeholder="Nhập tên" value="{!!old('txtdongia', isset($data_news["dongia"]) ? $data_news["dongia"]:null)!!}">
              </div>
            </div>
           
          	 <div class="form-group">
              <label class="col-sm-12 control-label">Giới Thiệu:</label>
                <div class="col-sm-12">
                <textarea name="txtgioithieu" rows="5" class="textbox" value="" >{!!old('txtgioithieu', isset($data_news["gioithieu"]) ? $data_news["gioithieu"]:null)!!}</textarea>
				          <script type="text/javascript">
          					var editor = CKEDITOR.replace('txtgioithieu', {
          						language:'vi',
          						filebrowserImageBrowseUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/ckfinder.html?Type=Images',
          						filebrowserFlashBrowseUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/ckfinder.html?Type=Flash',
          						filebrowserImageUploadUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
          						filebrowserFlashUploadUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

          					});
          				</script>
				      </div>
           </div>
            
          
           <div class="box-body"></div>
           <div class="form-group">
              <label class="col-sm-2 control-label">Hình ảnh</label>
              <div class="col-sm-9">
               <img src="{!! isset($data_news["hinhanh"]) ? asset('public/uploads/news/'.$data_news["hinhanh"]) :asset('public/lv17_admin/templates/images/nophoto.png') !!}" width="100px" />
              <input type="hidden" name="fImageCurrent" value="{!! $data_news["hinhanh"] !!}">
               
              </div>
           </div>
          </div>
           <div class="box-body"></div>
           <div class="form-group">
              <label class="col-sm-2 control-label">Hình ảnh đại diện</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" name="newsImg">
              </div>
        	 </div>
          </div>
         
        </div>
      </div>
  </div>
  </form>
</section>
@endsection  
	