@extends('admin_layout')
@section('admin_content')
 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm mã giảm giá
                        </header>
                        <?php
                        $message=Session::get('message');
                        if($message){
                            echo '<span style="color:red;width:100%;text-align: center;font-size:16px">'.$message.'</span>';
                            Session::get('message',null);
                        }
                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/insert_coupon_code')}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputBrand">Tên mã giảm giá</label>
                                    <input type="text" class="form-control" name="coupon_name" id="exampleInputCategory">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDesc">Mã giảm giá</label>
                                   <textarea class="form-control" id="exampleInputDesc" name="coupon_code"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDesc">Số lượng mã</label>
                                   <textarea class="form-control" id="exampleInputDesc" name="coupon_time"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDesc">Tính năng mã</label>
                                  <select name="coupon_condition" class="form-control input-sm m-bot15">
                                       <option value="0">----Chọn----</option>
                                       <option value="1">Giảm theo %</option>
                                       <option value="2">Giảm theo tiền mặt</option>
                                   </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputDesc">Nhập số % hoặc tiền giảm</label>
                                   <textarea class="form-control" id="exampleInputDesc" name="coupon_number"></textarea>
                                </div>
                                <button type="submit" class="btn btn-info" name="add_brand_product">Thêm mã</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            </div>  
@endsection                        