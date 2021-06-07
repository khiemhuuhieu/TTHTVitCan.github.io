@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm tài khoản
                        </header>
                         <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('store-users')}}" method="post">
                                    {{ csrf_field() }}
                                 <div class="form-group">
                                    <label for="exampleInputOption">Tên tài khoản</label>
                                   <select name="admin_name" class="form-control input-sm m-bot15">
                                        @foreach($all_employee as $key => $lp)
                                   
                                        <option value="{{$lp->TenNhanVien}}">{{$lp->TenNhanVien}}</option>
                        
                                       @endforeach 
                                   </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Mã nhân viên</label>
                                   <select name="MaNhanVien" class="form-control input-sm m-bot15">
                                        @foreach($all_employee as $key => $lp)
                                         <option value="{{$lp->MaNhanVien}}">{{$lp->MaNhanVien}} - {{$lp->TenNhanVien}}</option>
                                       @endforeach 
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOption">Email</label>
                                   <select name="admin_email" class="form-control input-sm m-bot15">
                                        @foreach($all_employee as $key => $lp)
                           
                                         <option value="{{$lp->Email}}">{{$lp->MaNhanVien}} - {{$lp->Email}}</option>
                            
                                       @endforeach 
                                   </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Phone</label>
                                   <select name="admin_phone" class="form-control input-sm m-bot15">
                                        @foreach($all_employee as $key => $lp)
                                         <option value="{{$lp->SDT}}">{{$lp->MaNhanVien}} - {{$lp->SDT}}</option>
                                       @endforeach 
                                   </select>
                                </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input  type="Password" name="admin_password" class="form-control" id="exampleInputEmail1" placeholder="Slug">
                                     @if($errors->has('admin_password'))
                                <span style="color: red">
                                    {{$errors->first('admin_password')}}
                                @endif
                                </div>
                             
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm tài khoản</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection