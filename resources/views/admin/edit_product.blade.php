@extends('admin_layout')
@section('admin_content')
<div class="form-group">
            <div class="col-lg-12">
            <h4>
              <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Cập Nhật Sản Phẩm </font></font>
            </h4>
            </div></br>
            @foreach($edit_product as $key => $edit)
            <form role="form" action="{{URL::to('/update_product/'.$edit->id_product)}}" method="post" class="form-horizontal style-form" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleFormControlFile1">Tên sản phẩm</label><br>
                <input type="text" name="product_name" value="{{$edit->Name_product}}" class="form-control" id="formGroupExampleInput" placeholder="Tên sản phẩm" required>
              </div></br>
              <div class="form-group">
                <label for="exampleFormControlFile1">Giá sản phẩm</label><br>
                <input type="number" name="product_price" value="{{$edit->Price_product}}" class="form-control" id="formGroupExampleInput" placeholder="Giá sản phẩm" required>
              </div></br>
              <div class="form-group">
                <label for="exampleFormControlFile1">Mô tả sản phẩm</label><br>
                <input type="text" name="product_desc" value="{{$edit->Description_product}}" class="form-control" id="formGroupExampleInput" placeholder="Mô tả sản phẩm" required>
              </div></br>
              <div class="form-group">
                <label for="exampleFormControlFile1">Số lượng sản phẩm</label><br>
                <input type="number" name="product_Quantity" value="{{$edit->Quantity_product}}" class="form-control" id="formGroupExampleInput" placeholder="Số lượng sản phẩm" required>
              </div></br>
              <div class="form-group">
                <label for="exampleFormControlFile1">Hình Ảnh</label><br>
                <input type="file" name="product_image" id="formGroupExampleInput" placeholder="Thêm tên danh mục">
                </div></br>
                <div class="form-group">
                	<label class="control-label col-md-3">Danh mục sản phẩm</label>
                	<div class="col-md-4">
                		<select class="form-control" name="category">
                      @foreach($category as $key => $cate)
		                  <option value="{{$cate->id_category}}">{{$cate->Name_category}}</option>
                      @endforeach
		                </select>
                	</div>
                </div>
              <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
            @endforeach
</div>
@endsection