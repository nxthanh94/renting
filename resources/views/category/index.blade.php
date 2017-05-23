@extends('templates.public.template')

@section('main')
<div class="main" role="main">
      <div id="content" class="content full">
          <div class="container">
              <div class="row">
                                <div class="col-md-9">                      <!-- <div class="block-heading">
                          <a href="" class="btn btn-primary btn-sm pull-right">View all types <i class="fa fa-long-arrow-right"></i></a>
                          <h4><span class="heading-icon"><i class="fa fa-home"></i></span>Projects &#8211; Villas</h4>
                      </div> -->
                    <div class="home-tab2-listimage">
                      <ul>
                        @foreach($arNews as $key => $arItem)
                        <?php
                          $id = $arItem['id'];
                          $mota = $arItem['preview_vn'];
                          $chitiet = $arItem['detail_vn'];
                          $name = $arItem['name_vn'];
                          $date = $arItem['created_at'];
                          $hinhanh = $arItem['picture'];
                          $picUrl = asset("storage/app/files/{$hinhanh}");
                          $nameSeo = str_slug($name);
                          $url = route('public.category.detail',['slug' => $nameSeo,'id' => $id]);
                        ?>
                          <li class="type-rent col-md-12">
                            <a href="{{$url}}">                        
                            <img src="{{$picUrl}}"    class="attachment-377-199-size size-377-199-size wp-post-image" alt="{{$nameSeo}}" />              
                                <span><h3>{{$name}}</h3>
                                  <p>{{$mota}} 
                                  </p>
                                </span>
                            </a>            
                          </li>
                        @endforeach
                      </ul>
                    </div>
                   <center></center>
                  </div>

            @include('index.right_bar')



                   
              </div>
          </div>
      </div>
  </div>
  
@endsection
@section('title')
Projects - Villa | Apartment | House | Hotel | Vocation Rentals | Room for Rent in Danang
@endsection