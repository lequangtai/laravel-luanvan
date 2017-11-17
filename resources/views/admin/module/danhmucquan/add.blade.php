@extends('admin.app')
@section('title','Thêm loại tin')
@section('content')
<section class="content">
  @include('admin.block.error')
@include('admin.block.flash')
<form action="" method="POST">
{{ csrf_field() }}
  <div class="row">
    <div class="box-body"></div>
    <div class="col-xs-3"></div>
      <div class="col-xs-6">
        <div class="box box-danger">
            <button type="submit" name="btnSaveNew" value="btnSaveNew" class="btn btn-primary margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-plus-square"></i></b>Save & New</button> 
            <button type="submit" name="btnSaveClose" value="btnSaveClose" class="btn btn-success margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-save"></i></b>Save & Close</button>
            <a href="{{ route('danh-sach-loai-tin') }}" class="btn btn-danger margin btn-labeled" style="position: relative;padding-left: 50px"><b><i class="fa fa-close"></i></b>Close</a>
        </div>
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Thêm Danh Mục Quận</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-4 control-label">Tên danh mục</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="txtCateName" >
              </div>
            </div>
            <div class="form-group ">
              <label class="col-sm-4" >Thuộc Tỉnh Thành</label>
              <select class="col-sm-8 select2" name="sltCate">
                <option value="0">Danh mục cha</option>
                <?php menuMulti2($dataquan,0, $str ="-|", old('sltCate')); ?>
              </select>
            </div>
          </div>
        </div>
      </div>
  </div>
  </form>
</section>
@endsection  
  