@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa chức danh
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                @foreach($edit_position as $key=>$update)
                                <form role="form" action="{{URL::to('/update_position/'.$update->position_id)}}" method="POST">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nhập tên chức danh</label>
                                    <input type="text" class="form-control" value="{{$update->position_name}}" name="position_name" id="exampleInputEmail1" placeholder="Nhập chức danh..">
                                </div>
                                <button type="submit" name="add_position" class="btn btn-info">Sửa</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection