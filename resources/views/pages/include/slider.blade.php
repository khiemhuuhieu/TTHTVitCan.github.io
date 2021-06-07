 <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                         <div class="carousel-inner">
                            <?php
                            $i=0;
                            ?>
                            @foreach($slider as $key =>$val)
                            <?php
                            $i++;
                            ?>
                           <div class="item {{$i==1 ? 'active' : ''}}"> 
                                <div class="col-sm-12">                                   
                                   <img src="{{asset('public/uploads/slider/'.$val->slider_image)}}" class="img img-responsive" alt="" /> 
                                </div>
                            </div> 
                            @endforeach                           
                       </div> 
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
          
    </section><!--/slider-->
     <div class="col-sm-12" style="margin-top: 10px;margin-bottom: 20px;margin-right: 20px">
                        <div class="search_box pull-right">
                            <form action="{{URL::to('/tim_kiem')}}" method="POST">
                                {{csrf_field()}}
                            <input type="text" name="keyword_submit" placeholder="Nhập từ khóa..."/>
                            <input type="submit" class="btn btn-primary" style="margin-top: 0; color: #333" value="Tìm kiếm">
                        </form>
                        </div>
    </div>