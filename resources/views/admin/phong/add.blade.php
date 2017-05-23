@extends('templates.admin.template')

@section('main')


<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Thêm
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            <form action="{{ route('admin.phong.add') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label>Tên</label>
                    <input class="form-control" name="name" placeholder="Vui lòng nhập tên ( ENG )" required /><br />
                    <input class="form-control" name="name_vn" placeholder="Vui lòng nhập tên ( VN )" required />
                </div>
                <div class="form-group">
                    <label>Thời hạn</label><br />
                    <label class="radio-inline">
                        <input name="thoihan" value="1"  type="radio" >Long term / Dài hạn
                    </label>
                    <label class="radio-inline">
                        <input name="thoihan" value="0" type="radio" >Short term / Ngắn hạn
                    </label>
                </div>
                <div class="form-group">
                    <label>Danh mục cha</label>
                    <select class="form-control" name="id_list" id="theloai">
                    <option >Property</option>
                    @foreach($arQCao1 as $key => $arQC1)
                    <?php
                        $id = $arQC1['id'];
                        $name = $arQC1['name'];
                    ?>
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Danh mục con</label>
                    <select class="form-control" name="id_list1" id="loaitin">
                    <option >All</option>
                    @foreach($arQCao as $key => $arQC)
                    <?php
                        $id = $arQC['id'];
                        $name = $arQC['name'];
                    ?>
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Diện tích</label>
                    <input class="form-control" name="dientich" placeholder="Vui lòng nhập diện tích" required />
                </div>
                <div class="form-group">
                    <label>Phòng tắm</label>
                    <input class="form-control" name="phongtam" placeholder="Vui lòng nhập số lượng" required />
                </div>
                <div class="form-group">
                    <label>Giường</label>
                    <input class="form-control" name="giuong" placeholder="Vui lòng nhập số lượng" required />
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input class="form-control" name="gia" placeholder="Vui lòng nhập giá" required />
                </div>
                <div class="form-group">
                    <label>Hướng</label>
                    <input class="form-control" name="huong" placeholder="Vui lòng nhập hướng ( ENG )" required /><br />
                    <input class="form-control" name="huong_vn" placeholder="Vui lòng nhập hướng ( VN )" required />
                </div>
                 <div class="form-group">
                    <label>Tiện ích</label><br /><br />
                    @foreach($tienich as $key => $TI)
                      <?php
                        $id = $TI['id'];
                        $name = $TI['name'];
                      ?>    
                    <label style="width: 49%;font-weight: unset;">
                      <input type="checkbox"  name="checkbox[]" value="{{ $id }}" id="{{$id}}">&nbsp&nbsp{{$name}}
                    </label>
                    @endforeach
                    
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <input type="file" name="picture">
                </div>
                <div class="form-group">
                    <label>Tỉnh/T.P</label>
                    <select class="form-control" name="id_list3" id="hangsx">
                    <option >Tỉnh</option>
                    @foreach($arQCao2 as $key => $arQC2)
                    <?php
                        $id = $arQC2['id'];
                        $name = $arQC2['tenhsx'];
                    ?>
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Quận/Huyện</label>
                    <select class="form-control" name="id_list4" id="danhmuchsx">
                    <option >Quận/Huyện</option>
                    @foreach($arQCao3 as $key => $arQC3)
                    <?php
                        $id = $arQC3['id'];
                        $name = $arQC3['name'];
                    ?>
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Bản đồ</label>
                    <input id="pac-input" class="controls form-control" type="text" name="diachi" placeholder="Vui lòng nhập địa chỉ"><br />
                    <div id="map" style="height: 300px"></div>
                         <script>
                          function initAutocomplete() {
                            var map = new google.maps.Map(document.getElementById('map'), {
                              center: {lat: -33.8688, lng: 151.2195},
                              zoom: 13,
                              mapTypeId: 'roadmap'
                            });

                            // Create the search box and link it to the UI element.
                            var input = document.getElementById('pac-input');
                            var searchBox = new google.maps.places.SearchBox(input);
                            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                            // Bias the SearchBox results towards current map's viewport.
                            map.addListener('bounds_changed', function() {
                              searchBox.setBounds(map.getBounds());
                            });

                            var markers = [];
                            // Listen for the event fired when the user selects a prediction and retrieve
                            // more details for that place.
                            searchBox.addListener('places_changed', function() {
                              var places = searchBox.getPlaces();

                              if (places.length == 0) {
                                return;
                              }

                              // Clear out the old markers.
                              markers.forEach(function(marker) {
                                marker.setMap(null);
                              });
                              markers = [];

                              // For each place, get the icon, name and location.
                              var bounds = new google.maps.LatLngBounds();
                              places.forEach(function(place) {
                                if (!place.geometry) {
                                  console.log("Returned place contains no geometry");
                                  return;
                                }
                                var icon = {
                                  url: place.icon,
                                  size: new google.maps.Size(71, 71),
                                  origin: new google.maps.Point(0, 0),
                                  anchor: new google.maps.Point(17, 34),
                                  scaledSize: new google.maps.Size(25, 25)
                                };

                                // Create a marker for each place.
                                markers.push(new google.maps.Marker({
                                  map: map,
                                  icon: icon,
                                  title: place.name,
                                  position: place.geometry.location
                                }));

                                if (place.geometry.viewport) {
                                  // Only geocodes have viewport.
                                  bounds.union(place.geometry.viewport);
                                } else {
                                  bounds.extend(place.geometry.location);
                                }
                              });
                              map.fitBounds(bounds);
                            });
                          }

                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR1J9Gm_6ptfjxcewEtyUUN-c4l2WIzSU&libraries=places&callback=initAutocomplete">
                        </script>
                </div>
                <div class="form-group">
                    <label>Chi tiết</label>
                    <textarea class="form-control" rows="3" name="chitiet">Vui lòng nhập chi tiết ( ENG )</textarea>
                    <script type="text/javascript">ckeditor ("chitiet")</script><br />
                    <textarea class="form-control" rows="3" name="chitiet_vn">Vui lòng nhập chi tiết ( VN )</textarea>
                    <script type="text/javascript">ckeditor ("chitiet_vn")</script>
                </div>
                <button type="submit" class="btn btn-default">Thêm</button>
                <button type="reset" class="btn btn-default">Reset</button>
            <form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@endsection