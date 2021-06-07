@extends('welcome')
@section('content')
<style>
img {
padding: 4px;
margin-left:1px;
margin-top:1.6px;
transform: scale(1);
transition: all 0.5s;
border-radius:9px 6px;
}
img:hover  {
transform: scale(1.03);
}
.text span{
        font-size:1.2em;
}
</style>
<div class="features_items">
                        <h2 class="title text-center" style="font-size:1.8em;">ĐỘI NGŨ GIẢNG VIÊN</h2>
                        <div class="row">
                            <div class="col-md-12 text-left">
                                    <p style="padding-bottom: 10px;font-weight: bold; font-size:1.5em;">Tất cả Giảng viên Trung tâm tin học là những chuyên gia giàu kinh nghiệm thực tế và chuyên nghiệp</p>
                            </div>
                                <style type="text/css">
                                        .khung{
                                                width: 190px;
                                                height: 220px;
                                                border: 1px solid #c7c7c7;
                                                border-radius:9px 6px;
                                              
                                        }
                                </style>
                                @foreach($giang_vien as $key=>$gv)
                                 <div class="col-md-12" style="margin-top: 20px">
                                        <div class="col-md-3">
                                               <div class="khung">
                                                       <img src="{{URL::to('public/uploads/product/'.$gv->HinhAnh)}}" width="99%" height="99%">
                                               </div>
                                        </div>
                                        <div class="col-md-9">
                                                <div class="col-xs-12" style="height: 50px;background: #FD6504;border-radius: 4px 5px;">
                                                        <p style=" text-align:center; margin-top: 15px;font-size: 16px;color: #fff">Giảng viên: {{$gv->TenNhanVien}}</p>
                                                </div>
                                                <div class="col-xs-12 text">
                                                        <p style="margin-top: 20px ;font-size:1.2em;">Sinh viên năm 4: Trường Đại học Công Nghiệp thành phố Hồ Chí Minh</p>
                                                        <span>Quá trình làm việc:</span><br>
                                                        <span>Giảng dạy tại trung tâm tin học Vịt Cạn từ 2020 đến nay</span><br>
                                                        <span>Các môn giảng dạy:</span><br>
                                                        <span>Lập trình PHP & MYSQL</span><br>
                                                        <span>Lập trình GAME</span>
                                                </div>
                                        </div>
                                </div>
                                @endforeach
                              
                        </div>
                                
</div>
<div class="col-sm-12">
   <ul style="margin-left: 600px" class="pagination pagination-sm m-t-none m-b-none ">
      {!!$giang_vien->render()!!}
  </ul>
</div>
 @endsection