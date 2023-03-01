@extends('templates.yody.master')

@section('content')

@include('templates.yody.inc.sidebar')

<section class="page-hethong" >
    <h1 class="d-none">Hệ thống cửa hàng YODY - Shop quần áo thời trang Việt</h1>
    <section class="bread-crumb d-none d-md-block" style="padding-top: 20px !important; background: transparent; ">
       <div class="container">
          <div class="row">
             <div class="col-12 a-left">
                <ul class="breadcrumb">
                   <li class="home">
                      <a href="/"><span>Trang chủ</span></a>
                      <span class="mr_lr">&nbsp;/&nbsp;</span>
                   </li>
                   <li><strong><span>Hệ thống cửa hàng YODY - Shop quần áo thời trang Việt</span></strong></li>
                   <li class="last"><strong><span>TÌM CỬA HÀNG</span></strong></li>
                </ul>
             </div>
          </div>
       </div>
    </section>
    <div class="container">
       <div class="row counter">
          <div class="col-lg-3 col-6">
             <a class="item item-1" href="https://yody.vn/he-thong-cua-hang-yody-tren-toan-quoc">
             <span>Cửa hàng</span>
             <b><span>219</span></b>
             </a>
          </div>
          <div class="col-lg-3 col-6">
             <div class="item item-2">
                <span>Nhà máy may</span>
                <b><span class="counter">2</span></b>
             </div>
          </div>
          <div class="col-lg-3 col-6">
             <a class="item item-3" href="https://yody.vn/yody-news/showroom-yody">
             <span>Tỉnh thành</span>
             <b><span class="counter">48</span></b>
             </a>
          </div>
          <div class="col-lg-3 col-6">
             <a class="item item-4" href="https://yody.vn/yody-news/van-hoa-yody">
             <span>Văn phòng</span>
             <b><span class="counter">7</span></b>
             </a>
          </div>
          <div class="col-lg-3 col-12">
             <a class="item item-5" href="https://yody.vn">
             <span>Nhân sự Yody</span>
             <b><span class="counter">6000</span>+</b>
             </a>
          </div>
       </div>
       <div class="cssload-loader" style="display: none;">Đang tải bản đồ</div>
       <div class="map-list">
          <div id="map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.2143836810524!2d106.30362791533123!3d20.94390409604465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359b93265f5767%3A0x12119d049cdfd294!2zQ8O0bmcgdHkgY-G7lSBwaOG6p24gdGjhu51pIHRyYW5nIFlPRFk!5e0!3m2!1svi!2s!4v1635388113543!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="list-add">
             <div class="title">
                <p class="d-block d-md-none">TÌM KIẾM CỬA HÀNG YODY GẦN BẠN</p>
                <div class="city">
                   <p>Tỉnh / Thành</p>
                   <div class="text">
                      Tất cả tỉnh, thành
                   </div>
                   <div class="list-city">
                      <div class="scroll" data-default="Hà Nội">
                         <span data-value="all" class="active">Tất cả tỉnh, thành</span>
                         <span data-value="Hà Nội">Hà Nội</span><span data-value="Bắc Giang">Bắc Giang</span><span data-value="Hải Dương">Hải Dương</span><span data-value="Hưng Yên">Hưng Yên</span><span data-value="Phú Thọ">Phú Thọ</span><span data-value="Tuyên Quang">Tuyên Quang</span><span data-value="Yên Bái">Yên Bái</span><span data-value="Vĩnh Phúc">Vĩnh Phúc</span><span data-value="Thái Nguyên">Thái Nguyên</span><span data-value="Hà Giang">Hà Giang</span><span data-value="Lào Cai">Lào Cai</span><span data-value="Lạng Sơn">Lạng Sơn</span><span data-value="Điện Biên">Điện Biên</span><span data-value="Hoà Bình">Hoà Bình</span><span data-value="Sơn La">Sơn La</span><span data-value="Lai Châu">Lai Châu</span><span data-value="Bắc Ninh">Bắc Ninh</span><span data-value="Hải Phòng">Hải Phòng</span><span data-value="Nam Định">Nam Định</span><span data-value="Ninh Bình">Ninh Bình</span><span data-value="Quảng Ninh">Quảng Ninh</span><span data-value="Thái Bình">Thái Bình</span><span data-value="Thanh Hóa">Thanh Hóa</span><span data-value="Nghệ An">Nghệ An</span><span data-value="Thừa Thiên Huế">Thừa Thiên Huế</span><span data-value="Hà Nam">Hà Nam</span><span data-value="Quảng Nam">Quảng Nam</span><span data-value="Quảng Ngãi">Quảng Ngãi</span><span data-value="Quảng Trị">Quảng Trị</span><span data-value="Đà Nẵng">Đà Nẵng</span><span data-value="Quảng Bình">Quảng Bình</span><span data-value="Gia Lai">Gia Lai</span><span data-value="Hà Tĩnh">Hà Tĩnh</span><span data-value="Bình Định">Bình Định</span><span data-value="Đắk Lắk">Đắk Lắk</span><span data-value="KonTum">KonTum</span><span data-value="Phú Yên">Phú Yên</span><span data-value="Vĩnh Long">Vĩnh Long</span><span data-value="Bắc Kạn">Bắc Kạn</span><span data-value="Khánh Hoà">Khánh Hoà</span><span data-value="Hồ Chí Minh">Hồ Chí Minh</span><span data-value="Lâm Đồng">Lâm Đồng</span><span data-value="Đắk Nông">Đắk Nông</span><span data-value="Bình Dương">Bình Dương</span><span data-value="Bình Thuận">Bình Thuận</span><span data-value="Cần Thơ">Cần Thơ</span><span data-value="An Giang">An Giang</span><span data-value="Bạc Liêu">Bạc Liêu</span>
                      </div>
                   </div>
                </div>
                <div class="search">
                   <p>Nhập tên cửa hàng</p>
                   <input class="search-shop" type="text" placeholder="Tìm kiếm cửa hàng" onkeyup="filterItemInList(jQuery('.search-shop'))">
                </div>
             </div>
             <div class="list">
                <ul id="list-store">
                   <li class="item" data-add="yody xuân mai" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7454.672164990916!2d105.57604587640563!3d20.898794091039065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134457910d86765%3A0xff3adc875636fb02!2sYODY%20Xu%C3%A2n%20Mai!5e0!3m2!1svi!2s!4v1639556425643!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Xuân Mai</b>
                      <p>Số nhà 17, Tổ 2 , Khu phố Xuân Hà, TT Xuân Mai, Chương Mỹ, Hà Nội</p>
                      <a href="tel:0911211258">0911211258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody sóc sơn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.332757520405!2d105.8460892152656!3d21.258291885874513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313503b3ffb0a753%3A0x30d954ca59fd8b95!2zWU9EWSBTw7NjIFPGoW4!5e0!3m2!1svi!2s!4v1639556486036!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Sóc Sơn</b>
                      <p>Tổ 9 khu B Thị trấn Sóc Sơn,  Hà Nội</p>
                      <a href="tel:0919936258">0919936258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hoàng mai" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14901.820391980073!2d105.82557813484078!3d20.974386776444362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad126c28e331%3A0x981bcdfbecac872b!2sYODY%20HO%C3%80NG%20MAI!5e0!3m2!1svi!2s!4v1639556525055!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hoàng Mai</b>
                      <p>43 Kim Đồng, Phường Giáp Bát,Quận Hoàng Mai, TP Hà Nội</p>
                      <a href="tel:0888084258">0888084258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody long biên" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1861.8060347478176!2d105.87944025872196!3d21.048202600000018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a9be4fa1011d%3A0x4ced2db1185ddc9b!2sYODY%20Long%20Bi%C3%AAn!5e0!3m2!1svi!2s!4v1639556574369!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Long Biên</b>
                      <p>489 Nguyễn Văn Cừ Hà Nội</p>
                      <a href="tel:0888469258">0888469258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody yên hòa" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3506966920554!2d105.79032271526205!3d21.01864928600388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab69c0cac6d3%3A0x200669ed389bb5c2!2zWU9EWSBZw6puIEjDsmE!5e0!3m2!1svi!2s!4v1639556749320!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Yên Hòa</b>
                      <p>207 Trung Kính, Yên Hòa, Cầu Giấy, HN</p>
                      <a href="tel:0888783258">0888783258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody linh đàm" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.7400896537406!2d105.82471877862842!3d20.96295031462406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad3849eaeb41%3A0xdfa7bef27fd13672!2zWU9EWSBMaW5oIMSQw6Bt!5e0!3m2!1svi!2s!4v1639556837348!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Linh Đàm</b>
                      <p>Biệt thự 19 BT1, Khu đô thị Bắc Linh Đàm, Hoàng Mai, Hà Nội</p>
                      <a href="tel:0859244258">0859244258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thái hà" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14897.679255391593!2d105.8066299697754!3d21.015881800000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab70c8b10315%3A0xade804eed8f5c39e!2zWU9EWSBUaMOhaSBIw6A!5e0!3m2!1svi!2s!4v1639556936143!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Thái Hà</b>
                      <p>175 Thái Hà, Láng Hạ, Đống Đa, Hà Nội</p>
                      <a href="tel:0827846258">0827846258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thanh trì" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.888823619011!2d105.80630231493144!3d20.95697938603734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6f22c8ec001d2197!2sYODY%20Thanh%20Tr%C3%AC!5e0!3m2!1svi!2s!4v1644998590293!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Thanh Trì</b>
                      <p>308 Phan Trọng Tuệ, xã Thanh Liệt, huyện Thanh Trì, Hà Nội</p>
                      <a href="tel:0888134258">0888134258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody trần đại nghĩa" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8280931457966!2d105.84276931493216!3d20.999526986014217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ddd5e00c273af49!2zWU9EWSBUcuG6p24gxJDhuqFpIE5naMSpYQ!5e0!3m2!1svi!2s!4v1646449470264!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Trần Đại Nghĩa</b>
                      <p>98- 100 Trần Đại Nghĩa, phường Đồng Tâm, quận Hai Bà Trưng, Hà Nội</p>
                      <a href="tel:0888247258">0888247258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody đông anh" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.35667251145!2d105.85599121493455!3d21.138199485939168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x196137ad64de143!2zWU9EWSDEkMO0bmcgQW5o!5e0!3m2!1svi!2s!4v1646449811947!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Đông Anh</b>
                      <p>số 333 đường Cao Lỗ - huyện Đông Anh - thành phố Hà Nội</p>
                      <a href="tel:0888474258">0888474258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody nguyễn tuân" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7892923894224!2d105.79879521493221!3d21.00108178601336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9c92a09ff02243e3!2zWU9EWSBOZ3V54buFbiBUdcOibg!5e0!3m2!1svi!2s!4v1649728047748!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Nguyễn Tuân</b>
                      <p>Số 187 đường Nguyễn Tuân, phường Nhân Chính, quận Thanh Xuân</p>
                      <a href="tel:0911628258">0911628258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody nguyễn lương bằng" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3841089418393!2d105.82735711536608!3d21.01731148600454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abff3ad0b6db%3A0x9919e7f89e18f652!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgTmd1eeG7hW4gTMawxqFuZyBC4bqxbmc!5e0!3m2!1svi!2s!4v1653631777949!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Nguyễn Lương Bằng</b>
                      <p>số 55 Nguyễn Lương Bằng, phường Nam Đồng, quận Đống Đa, TP. Hà Nội</p>
                      <a href="tel:0856073258">0856073258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody sơn tây" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.392897338993!2d105.5075456!3d21.1367569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2943dbd7e1054225!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgU8ahbiBUw6J5!5e0!3m2!1svi!2s!4v1654915226897!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Sơn Tây</b>
                      <p>Số nhà 28-30-32 Phùng Khắc Khoan, Sơn Tây, Hà Nội</p>
                      <a href="tel:0915310258 ">0915310258 </a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody xuân la" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.066007974109!2d105.80961169999999!3d21.0700257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x99dc836a81800a1e!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgWHXDom4gTGE!5e0!3m2!1svi!2s!4v1661582758453!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Xuân La</b>
                      <p>Số 29 Đường Xuân La, Phường Xuân La, Tây Hồ, Hà Nội</p>
                      <a href="tel:0824736258">0824736258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody nguyễn văn lộc" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2599838700307!2d105.7896085!3d20.9822131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x21127c533d9e18bb!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgTmd1eeG7hW4gVsSDbiBM4buZYw!5e0!3m2!1svi!2s!4v1661827272701!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Nguyễn Văn Lộc</b>
                      <p>Toà nhà LK 1-2-3 đường Nguyễn Văn Lộc, Khu đô thị Bắc Hà, Hà Đông, Hà Nội</p>
                      <a href="tel:0836484258">0836484258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody nguyễn viết xuân" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.56218920449!2d105.76840000000001!3d20.97009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x75fd82f1bf662479!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgTmd1eeG7hW4gVmnhur90IFh1w6Ju!5e0!3m2!1svi!2s!4v1663555659449!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Nguyễn Viết Xuân</b>
                      <p>156 Nguyễn Viết Xuân, Phường Quang Trung, Quận Hà Đông</p>
                      <a href="tel:0888429258">0888429258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thường tín" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.0011202305577!2d105.8690972!3d20.8720051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135b3d2cd6c900b%3A0xb62b12eabdd17434!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgVGjGsOG7nW5nIFTDrW4!5e0!3m2!1svi!2s!4v1664331066043!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Thường Tín</b>
                      <p>Khu Cầu Dừa, xã Văn Bình, Thị trấn Thường Tín, Hà Nội</p>
                      <a href="tel:0888 597 258">0888 597 258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody quang trung" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.815837961011!2d105.7613188!3d20.9599096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313453cfceb4a40f%3A0x79780c896148bdd9!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgUXVhbmcgVHJ1bmc!5e0!3m2!1svi!2s!4v1667372814889!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Quang Trung</b>
                      <p>Số 558 - 560 Quang Trung, Hà Đông, Hà Nội</p>
                      <a href="tel:0839317258">0839317258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody ngô xuân quảng" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3594354727943!2d105.9371264!3d21.0182994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a92ef799b8dd%3A0xb315d1163f2060a6!2zQ-G7rWEgaMOgbmcgdGjhu51pIHRyYW5nIFlPRFkgTmfDtCBYdcOibiBRdeG6o25n!5e0!3m2!1svi!2s!4v1669791646215!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Ngô Xuân Quảng</b>
                      <p>103 Ngô Xuân Quảng, Trâu Quỳ, Gia Lâm, Hà Nội</p>
                      <a href="tel:0856524258">0856524258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody chũ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3715.4530730528713!2d106.56337901526729!3d21.372057885813387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a9fe798079831%3A0xa84ecd9f7cbc38a9!2zWU9EWSBDaMWp!5e0!3m2!1svi!2s!4v1639556989226!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Chũ</b>
                      <p>Số 333, Khu Lê Lợi, Thị trấn Chũ , Huyện Lục Ngạn, Tỉnh Bắc Giang</p>
                      <a href="tel:0912636258">0912636258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody đồi ngô" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.175963174528!2d106.38425961526627!3d21.30406228584998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135653a36fc6cbd%3A0x2c2f70562b87c305!2zWU9EWSDEkOG7k2kgTmfDtA!5e0!3m2!1svi!2s!4v1639557868354!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Đồi Ngô</b>
                      <p>Số 210 Phố Bình Minh, Thị trấn Đồi Ngô, Huyện Lục Nam, Bắc Giang</p>
                      <a href="tel:0888012258">0888012258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hiệp hòa" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3715.8878033211427!2d105.97846571526694!3d21.354920285822548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313511da8dce04b7%3A0xc2b8b0f64834aedd!2zWU9EWSBIaeG7h3AgSMOyYQ!5e0!3m2!1svi!2s!4v1639557905479!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hiệp Hòa</b>
                      <p>KIOT A15 - Chợ Trung Tâm Thương Mại Hiệp Hoà - Bắc Giang</p>
                      <a href="tel:0916163258">0916163258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody bích động" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.8558696089603!2d106.09211871526584!3d21.277172085864287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135130d9fa373d5%3A0xf9806fa9759056e9!2zWU9EWSBCw61jaCDEkOG7mW5n!5e0!3m2!1svi!2s!4v1639558356378!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Bích Động</b>
                      <p>Số 379 Thân Nhân Trung, Thị trấn Bích Động, Việt Yên, Bắc Giang</p>
                      <a href="tel:0911368258">0911368258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody bắc giang" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59485.695382587684!2d106.05928792025544!3d21.277168452890155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31356d7771251769%3A0xcbc166130bada54f!2sYODY%20B%E1%BA%AFc%20Giang!5e0!3m2!1svi!2s!4v1639558548229!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Bắc Giang</b>
                      <p>Toà nhà Hapro, Quảng trường 3/2, Hoàng Văn Thụ, P.Ngô Quyền, TP.Bắc Giang</p>
                      <a href="tel:0888239258">0888239258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody yên thế" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.540192575123!2d106.19741184188295!3d21.447310896912224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31354151675cf77b%3A0xc6b4d77c5aa87ac2!2zWU9EWSBZw6puIFRo4bq_!5e0!3m2!1svi!2s!4v1639560729899!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Yên Thế</b>
                      <p>TT Bố Hạ, Huyện Yên Thế, Tỉnh Bắc Giang </p>
                      <a href="tel:0888016258">0888016258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody yên dũng" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.7852701155775!2d106.24724881493555!3d21.200687485905537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc62e6db84b249cfa!2zWU9EWSBZw6puIETFqW5n!5e0!3m2!1svi!2s!4v1648116143585!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Yên Dũng</b>
                      <p>662X+7Q9, TT. Neo, Yên Dũng, Bắc Giang</p>
                      <a href="tel:0826594258">0826594258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody vôi - bắc giang" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d237935.38022304204!2d105.8962505!3d21.2817445!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31356dd4f113a505%3A0xc21a19682faf18a1!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgVsO0aSAtIELhuq9jIEdpYW5n!5e0!3m2!1svi!2s!4v1671416935161!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Vôi - Bắc Giang</b>
                      <p>Số nhà 87 đường Cần Trạm, thị trấn Vôi, Lạng Giang, Bắc Giang</p>
                      <a href="tel:"></a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody trần hưng đạo" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.3473105309054!2d106.33187231526094!3d20.938563186047425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359b0a60f5c683%3A0x52b27fbedeee9ce2!2zWU9EWSBUcuG6p24gSMawbmcgxJDhuqFv!5e0!3m2!1svi!2s!4v1639560810634!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Trần Hưng Đạo</b>
                      <p>66 Trần Hưng Đạo - Quang Trung - TP Hải Dương</p>
                      <a href="tel:0914152258">0914152258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody kẻ sặt" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.987623418208!2d106.1483992!3d20.9128176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4fb67d967e74f711!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgS-G6uyBT4bq3dA!5e0!3m2!1svi!2s!4v1661410091844!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Kẻ Sặt</b>
                      <p>110 đường Trần Hưng Đạo, Thị Trấn Kẻ Sặt, Huyện Bình Giang, Tỉnh Hải Dương</p>
                      <a href="tel:0917174258">0917174258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody chí linh 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.9939393593663!2d106.39029261744386!3d21.1128078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313579d1b7e2a4b7%3A0x4355f2369fe76e44!2sYODY%20Ch%C3%AD%20Linh%202!5e0!3m2!1svi!2s!4v1639561044135!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Chí Linh 2</b>
                      <p>Ngã 3 Sao Đỏ, TP Chí Linh</p>
                      <a href="tel:0888452258">0888452258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody tứ kỳ 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d932.2992591351356!2d106.39920883526176!3d20.823748470316154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31358f04f5d4d837%3A0xb39d38a94270302f!2zWU9EWSBU4bupIEvhu7MgMg!5e0!3m2!1svi!2s!4v1639561147988!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Tứ Kỳ 2</b>
                      <p>Tòa nhà CTECH - thị trấn Tứ Kỳ</p>
                      <a href="tel:0888412258">0888412258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody kinh môn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9028931521875!2d106.54326211526174!3d20.996529336015872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7fbcd3ee4789%3A0x69f21fdfb4bd3458!2sYODY%20Kinh%20M%C3%B4n!5e0!3m2!1svi!2s!4v1639561234650!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Kinh Môn</b>
                      <p>Ngã tư Hiệp Sơn, Thị Xã Kinh Môn, Huyện Kinh Môn, Tỉnh Hải Dương</p>
                      <a href="tel:0918133258">0918133258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thanh miện" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1865.0647096285256!2d106.24703362080936!3d20.786051470714828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359717a2c48c71%3A0x17ebfd5cfba176a4!2sYODY%20Thanh%20Mi%E1%BB%87n!5e0!3m2!1svi!2s!4v1639561763977!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Thanh Miện</b>
                      <p>Số 93, 95 Đường Tuệ Tĩnh, Thị trấn Thanh Miện, Huyện Thanh Miện, Hải Dương</p>
                      <a href="tel:0919000258">0919000258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thanh hà" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3727.3651921255278!2d106.42626981526041!3d20.89762218606964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313585ce26f6cbe5%3A0x7f06e1042e75b548!2sYODY%20Thanh%20H%C3%A0!5e0!3m2!1svi!2s!4v1639561802975!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Thanh Hà</b>
                      <p>Khu 1, Đường 25 tháng 5, Thị trấn Thanh Hà, Huyện Thanh Hà, Hải Dương</p>
                      <a href="tel:0888616258">0888616258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody gia lộc" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.0746019608314!2d106.3001412!3d20.8690431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa12203297433fb88!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgR2lhIEzhu5lj!5e0!3m2!1svi!2s!4v1654933431767!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Gia Lộc</b>
                      <p> 337A Nguyễn Chế Nghĩa, Thị trấn Gia Lộc, Huyện Gia Lộc, Hải Dương</p>
                      <a href="tel:0911569258">0911569258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody ninh giang" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.4037428808033!2d106.3900375152579!3d20.734423586158574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31358d7347ec8eb1%3A0x7fc93e799f0d675a!2sYODY%20Ninh%20Giang!5e0!3m2!1svi!2s!4v1639561936586!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Ninh Giang</b>
                      <p>Thôn Tranh Xuyên, xã Đồng Tâm, thị trấn Ninh Giang, HD</p>
                      <a href="tel:0911567258">0911567258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody kim thành" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.8690476597394!2d106.50636341526113!3d20.957773386036813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313581b055fab1f1%3A0x17ee8cf2ae365954!2sYODY%20Kim%20Th%C3%A0nh!5e0!3m2!1svi!2s!4v1639562082174!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Kim Thành</b>
                      <p>Thôn Quyết Thắng, xã Kim Anh, huyện Kim Thành </p>
                      <a href="tel:0888599258">0888599258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody quý cao" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3730.7687021299025!2d106.49172306525834!3d20.7601669361445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313589807e2fb615%3A0xb4b75b7050f2586a!2sYody%20Qu%C3%BD%20Cao!5e0!3m2!1svi!2s!4v1639562114310!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Quý Cao</b>
                      <p>Ngã 3 Quý Cao, phố Quý Cao, Tứ Kỳ, Hải Dương</p>
                      <a href="tel:0911296258">0911296258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody nam sách" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.830950438057!2d106.33276441526188!3d20.99941248601436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31358368de674569%3A0xcd8dfad750607142!2sYODY%20Nam%20S%C3%A1ch!5e0!3m2!1svi!2s!4v1639562170429!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Nam Sách</b>
                      <p> 644 Trần Phú - khu La Văn Cầu - thị trấn Nam Sách - Hải Dương </p>
                      <a href="tel:0911056258">0911056258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody ghẽ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.305379515968!2d106.21230681526099!3d20.940248086046402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359924b7070a9f%3A0x50cba4f93d0c8969!2zWU9EWSBHaOG6vQ!5e0!3m2!1svi!2s!4v1639562223358!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Ghẽ</b>
                      <p>Nhà 7 tầng , phố Ghẽ, Tân Trường , Cẩm Giàng </p>
                      <a href="tel:0912048258">0912048258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody outlet" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.6020650352357!2d106.31534031526068!3d20.928323686052813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359bafb4abbf4d%3A0xad569cdd331333d3!2sYODY%20Outlet!5e0!3m2!1svi!2s!4v1639562376610!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Outlet</b>
                      <p>Số 8 đường Trường Chinh, tp. Hải Dương</p>
                      <a href="tel:0888382258">0888382258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody phủ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.2653106023854!2d106.19417101492989!3d20.86135388608934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1a2c4fac15af3db8!2zWU9EWSBQaOG7pw!5e0!3m2!1svi!2s!4v1644803126055!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Phủ</b>
                      <p>Xã Thái Học, huyện Bình Giang, tỉnh Hải Dương</p>
                      <a href="tel:0818536258">0818536258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hưng yên" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.4685818264074!2d106.05526821525672!3d20.650506886204457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135c6d1fe5f89cb%3A0xfd7431994da1c8fa!2zWU9EWSBIxrBuZyBZw6pu!5e0!3m2!1svi!2s!4v1639562504062!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hưng Yên</b>
                      <p>24 Điện Biên 1, P. Lê Lợi, Thành phố Hưng Yên, Hưng Yên</p>
                      <a href="tel:0914204258">0914204258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody phố nối" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7453.329328556701!2d106.0565249737002!3d20.92580686484657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a59105e3afab%3A0xb53c953816b2d2ff!2zWU9EWSBQaOG7kSBO4buRaQ!5e0!3m2!1svi!2s!4v1639562682791!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Phố Nối</b>
                      <p>Ngã tư chợ Bao Bì, Phố Nối, Mỹ Hào, Hưng Yên.</p>
                      <a href="tel:0911168258">0911168258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody dân tiến" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.7719811147913!2d106.00668591525952!3d20.84091218610044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135bb77792c5007%3A0xc720bddfd4d5fb10!2zWU9EWSBEw6JuIFRp4bq_bg!5e0!3m2!1svi!2s!4v1639562781181!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Dân Tiến</b>
                      <p>Xã Dân Tiến, huyện Khoái Châu, tỉnh Hưng Yên</p>
                      <a href="tel:0911023258">0911023258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody văn giang" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.325560261264!2d105.92439111526099!3d20.93943718604681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135af0dea035607%3A0xc01230699ae0d86e!2sYODY%20V%C4%83n%20Giang!5e0!3m2!1svi!2s!4v1639562843124!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Văn Giang</b>
                      <p>212 Thị trấn Văn Giang, Hưng Yên</p>
                      <a href="tel:0888026258">0888026258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody kim động" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.3274126086103!2d106.06770761492778!3d20.73751948615682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaebeb5657c40f8ea!2zWU9EWSBLaW0gxJDhu5luZw!5e0!3m2!1svi!2s!4v1644559499276!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Kim Động</b>
                      <p>Số 298, 300, 302, Thị Trấn Lương Bằng, Huyện Kim Động, Hưng Yên</p>
                      <a href="tel:0813598258">0813598258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody tiên lữ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.1942886349098!2d106.12410829999999!3d20.7023336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa131bb398f30b7dd!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgVGjhu4sgVHLhuqVuIFbGsMahbmc!5e0!3m2!1svi!2s!4v1656142210719!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Tiên Lữ</b>
                      <p>Đường Minh Khai, Thị Trấn Vương, huyện Tiên Lữ, tỉnh Hưng Yên</p>
                      <a href="tel:0888449258">0888449258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody yên mỹ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.806563340866!2d106.05630269999999!3d20.920100699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x84009d81361207db!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgWcOqbiBN4bu5!5e0!3m2!1svi!2s!4v1658797979184!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Yên Mỹ</b>
                      <p>thôn Liêu Thượng, xã Liêu Xá, huyện Yên Mỹ, Hưng Yên</p>
                      <a href="tel:0856473258">0856473258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody yên mỹ 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3727.569932676895!2d106.04232019999999!3d20.889377900000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135bb7b5d7f15d9%3A0x38972141c7a3647b!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgWcOqbiBN4bu5IDI!5e0!3m2!1svi!2s!4v1668565016730!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Yên Mỹ 2</b>
                      <p>Khu dân phố 1 chợ thương mại thị trấn Yên Mỹ, Yên Mỹ, Hưng yên</p>
                      <a href="tel:0848960258">0848960258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody việt trì" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3716.777336190239!2d105.38483461526653!3d21.31981288584143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31348d0bb7b60f11%3A0xd8be27de611f86ee!2zWU9EWSBWaeG7h3QgVHLDrA!5e0!3m2!1svi!2s!4v1639562915164!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Việt Trì</b>
                      <p>Số 1594 Đường Hùng Vương, Phường Gia Cẩm, Thành phố Việt Trì, Tỉnh Phú Thọ</p>
                      <a href="tel:0913413358">0913413358</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody phú thọ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118871.14501467872!2d105.15019590426377!3d21.40079774206547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31349b432e0a9d7b%3A0xcd5b4e8007eb32ad!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgUGjDuiBUaOG7jQ!5e0!3m2!1svi!2s!4v1668565419060!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Phú Thọ</b>
                      <p>Số 6 Lê Đồng, phố Tân Thành, phường Hùng Vương, thị xã Phú Thọ</p>
                      <a href="tel:0837437258">0837437258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody tuyên quang" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1852.0141620576992!2d105.20561129127208!3d21.817836504840653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xec1bf8dc8f17233f!2sYODY%20Tuy%C3%AAn%20Quang!5e0!3m2!1svi!2s!4v1639563026376!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Tuyên Quang</b>
                      <p>225 Quang Trung - Tân Quang – TP Tuyên Quang</p>
                      <a href="tel:0912084929">0912084929</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody yên bái" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.7803199915356!2d104.88452271527244!3d21.711254085632724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31335bc809ca3e09%3A0x21f38115540b3c7c!2zWU9EWSBZw6puIELDoWk!5e0!3m2!1svi!2s!4v1639563133339!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Yên Bái</b>
                      <p>Số 8 đại lộ Nguyễn Thái Học, phường Nguyễn Thái Học, TP.Yên Bái</p>
                      <a href="tel:0915909129">0915909129</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody phúc yên" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1859.4771692144593!2d105.70524167250885!3d21.233659194662728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134fd12c5db698d%3A0x9d5aed8744e47b31!2zWU9EWSBQaMO6YyBZw6pu!5e0!3m2!1svi!2s!4v1639563281619!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Phúc Yên</b>
                      <p>Số 90 Trần Hưng Đạo, Tp. Phúc Yên, Vĩnh Phúc</p>
                      <a href="tel:0913616258">0913616258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody bình xuyên" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.882401768177!2d105.64665831526575!3d21.27612208586482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134fb8cece78973%3A0x311736b5ad313e3!2zWU9EWSBCw6xuaCBYdXnDqm4!5e0!3m2!1svi!2s!4v1639563339957!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Bình Xuyên</b>
                      <p>Khu phố số 1, Thị trấn Hương Canh, Huyện Bình Xuyên, Vĩnh Phúc</p>
                      <a href="tel:0888356258">0888356258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody yên lạc" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.9621366296446!2d105.5713113152653!3d21.233349985887955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134f0b8540f6625%3A0x32e43a7a4638bb40!2zWU9EWSBZw6puIEzhuqFj!5e0!3m2!1svi!2s!4v1639563367363!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Yên Lạc</b>
                      <p>Số 186, Dương Tĩnh, Khu 3 thôn Đoài , TT.Yên Lạc, huyện Yên Lạc, Vĩnh Phúc</p>
                      <a href="tel:0888345258">0888345258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody vĩnh tường" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.313412220905!2d105.48763241526571!3d21.259058085874145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134f34a2d2dadef%3A0x30fb84cb58fd4ac0!2zWU9EWSBWxKluaCBUxrDhu51uZw!5e0!3m2!1svi!2s!4v1639563691996!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Vĩnh Tường</b>
                      <p>P. Cổng Xung, tt Thổ Tang, Vĩnh Tường, Vĩnh Phúc</p>
                      <a href="tel:0888287258">0888287258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody vĩnh yên" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3716.9209089355186!2d105.6045884!3d21.3141413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134e5f2625bf7df%3A0xf021d5f1e38a49db!2zQ-G7rWEgaMOgbmcgdGjhu51pIHRyYW5nIFlPRFkgVsSpbmggWcOqbg!5e0!3m2!1svi!2s!4v1669791417305!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Vĩnh Yên</b>
                      <p>Số 212-216 Mê Linh, P. Liên Bảo, TP. Vĩnh Yên, Vĩnh Phúc</p>
                      <a href="tel:0832417258">0832417258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody sông công" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7426.264442457401!2d105.84420711494003!3d21.46332801943776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdbba52ff78c525b9!2zWU9EWSBTw7RuZyBDw7RuZw!5e0!3m2!1svi!2s!4v1639563812954!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Sông Công</b>
                      <p>206 đường Cách Mạng Tháng 8, Phường Thắng Lợi, TP. Sông Công, Thái Nguyên</p>
                      <a href="tel:0916883258">0916883258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody phổ yên" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3714.308056531147!2d105.86908241526795!3d21.41713328578926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31351fb31e9b48d7%3A0x9ed9a2443a48f45a!2zWU9EWSBQaOG7lSBZw6pu!5e0!3m2!1svi!2s!4v1639563906854!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Phổ Yên</b>
                      <p>139 Phạm Văn Đồng, Ba Hàng, TX Phổ Yên, Thái Nguyên</p>
                      <a href="tel:0915568258">0915568258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thái nguyên 3" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.836438236107!2d105.8315805152707!3d21.592306685695913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313526e8ba839d25%3A0x5fc338a8dda4c7b0!2zWU9EWSBUaMOhaSBOZ3V5w6puIDM!5e0!3m2!1svi!2s!4v1639564058348!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Thái Nguyên 3</b>
                      <p>66 Hoàng Văn Thụ, P.Hoàng Văn Thụ, TP.Thái Nguyên</p>
                      <a href="tel:0888269258">0888269258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody đại từ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1854.3341004611618!2d105.65464143485497!3d21.63784922721072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134db106e089279%3A0x10b7dcaf789e4615!2zWW9keSDEkOG6oWkgVOG7qw!5e0!3m2!1svi!2s!4v1639564202324!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Đại Từ</b>
                      <p>Tổ dân phố Cầu Thành 1- Thị Trấn Hùng Sơn - Đại Từ - Thái Nguyên</p>
                      <a href="tel:0827894258">0827894258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody đồng hỷ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3708.972265097033!2d105.84235941527106!3d21.626004385677845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31352765a939437d%3A0x306f853a5958aac7!2zWU9EWSDEkOG7k25nIEjhu7c!5e0!3m2!1svi!2s!4v1639564311051!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Đồng Hỷ</b>
                      <p>Số 161, Tổ 6, Phường Chùa Hang, Thái Nguyên</p>
                      <a href="tel:0823496258">0823496258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hà giang" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.37389682637!2d104.98589919999999!3d22.8256524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf55bcc24170513b0!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgSMOgIEdpYW5n!5e0!3m2!1svi!2s!4v1661498331253!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Hà Giang</b>
                      <p>50 Nguyễn Thái Học, phường Minh Khai, thành phố Hà Giang, tỉnh Hà Giang</p>
                      <a href="tel:0839046258">0839046258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody lào cai" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.179266745211!2d103.96553271495826!3d22.497456285221467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81b147456c1f3f95!2sYODY%20L%C3%A0o%20Cai!5e0!3m2!1svi!2s!4v1639564409803!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Lào Cai</b>
                      <p>079 đường Hoàng Liên, Phường Cốc Lếu, TP. Lào Cai</p>
                      <a href="tel:0915989258">0915989258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody lạng sơn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1851.562457800235!2d106.75613137034033!3d21.85271690660696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbaccce3978303edc!2zWU9EWSBM4bqhbmcgU8ahbg!5e0!3m2!1svi!2s!4v1639564547323!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Lạng Sơn</b>
                      <p>Số 3 Tam Thanh, P. Tam Thanh, TP. Lạng Sơn</p>
                      <a href="tel:0916969258">0916969258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody điện biên" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7429.593409118113!2d103.02059810123377!3d21.3979079470485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x312d0909690feaa1%3A0xb49e70bcf847beba!2zWU9EWSDEkGnhu4duIEJpw6pu!5e0!3m2!1svi!2s!4v1639564669011!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Điện Biên</b>
                      <p>29 Võ Nguyên Giáp, phường Him Lam, tp Điện Biên Phủ, Điện Biên</p>
                      <a href="tel:0912526258">0912526258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hòa bình" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7458.643484247517!2d105.3344704348877!3d20.81871030000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31346b1268dc2e6f%3A0x62538f0af072ac3f!2zWU9EWSBIw7JhIELDrG5o!5e0!3m2!1svi!2s!4v1639564876573!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hòa Bình</b>
                      <p>Số 601 Đường Cù Chính Lan, Phương Lâm, TP. Hoà Bình</p>
                      <a href="tel:0888628258">0888628258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hòa bình 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3729.2056656800905!2d105.34465221525926!3d20.823399886110035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31346b9d0fcd40bb%3A0x430b8b33264d7d9e!2zWU9EWSBIw7JhIELDrG5oIDI!5e0!3m2!1svi!2s!4v1639564913283!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hòa Bình 2</b>
                      <p>Số 716 Đường Cù Chính Lan, phường Đồng Tiến, TP Hòa Bình</p>
                      <a href="tel:0888466258">0888466258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody mai sơn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.6530907983097!2d104.09213601526481!3d21.205935685902634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3132598712d2c341%3A0x718535fc3a029066!2sYODY%20Mai%20S%C6%A1n!5e0!3m2!1svi!2s!4v1639564949823!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Mai Sơn</b>
                      <p>Số 603, Tiểu khu 19, Thị Trấn Hát Lót, Huyện Mai Sơn, Tỉnh Sơn La</p>
                      <a href="tel:0826374258">0826374258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody sơn la" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3716.730213107752!2d103.91745651526654!3d21.32167408584045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31328b7cb2e4d329%3A0xe59b2f08b7e6793!2sYODY%20S%C6%A1n%20La!5e0!3m2!1svi!2s!4v1639565004063!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Sơn La</b>
                      <p>169 Trường Chinh, Phường Quyết Thắng, TP Sơn La</p>
                      <a href="tel:0888798258">0888798258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody lai châu" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.7710509195063!2d103.45416291528288!3d22.399986885271783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36d2a172bd0b5def%3A0xba5528e1f3b6eb2c!2sYODY%20Lai%20Ch%C3%A2u!5e0!3m2!1svi!2s!4v1639565030508!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Lai Châu</b>
                      <p>118 Trần Hưng Đạo, phường Đoàn Kết, TP Lai Châu</p>
                      <a href="tel:0888019258">0888019258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody bắc ninh" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.2187590880308!2d106.06554556526457!3d21.183467035914752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31350dfcc4465d57%3A0x4eaafa53ccbd4be!2zWW9keSBC4bqvYyBOaW5o!5e0!3m2!1svi!2s!4v1639565143425!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Bắc Ninh</b>
                      <p>363 Ngô Gia Tự, Phường Tiền An, Bắc Ninh</p>
                      <a href="tel:0916296258">0916296258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody quế võ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.9694159918013!2d106.14966481526399!3d21.153615385930813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31350bf21bbbdcf7%3A0x9d6abe32404c17fe!2zWU9EWSBRdeG6vyBWw7U!5e0!3m2!1svi!2s!4v1639565187729!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Quế Võ</b>
                      <p>Toà nhà Vĩnh Cát 2 ngã 4 TT Phố Mới ,Quế Võ ,Bắc Ninh</p>
                      <a href="tel:0911369258">0911369258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thuận thành" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8744852614386!2d106.08883771526236!3d21.037707585993417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a194140ab27b%3A0x7cf1a5dfa877cbf3!2zWU9EWSBUaHXhuq1uIFRow6BuaA!5e0!3m2!1svi!2s!4v1639565221482!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Thuận Thành</b>
                      <p>Số nhà 310 , 312 Đông Côi, Thị Trấn Hồ, Huyện Thuận Thành, Tỉnh Bắc Ninh</p>
                      <a href="tel:0912119258">0912119258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody yên phong" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.965836009851!2d105.95229571526464!3d21.193516085909412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313505e599ff0945%3A0x604856b65f397a02!2sYODY%20Y%C3%AAn%20Phong!5e0!3m2!1svi!2s!4v1639565262640!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Yên Phong</b>
                      <p>Số nhà 284, đường 295, Thị trấn Chờ, Yên Phong, BN</p>
                      <a href="tel:0911026258">0911026258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody lương tài" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.77029368022554!2d106.20239659419583!3d21.01969016141515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359fbb03036efb%3A0x6d7236b8586dac8d!2zWU9EWSBMxrDGoW5nIFTDoGk!5e0!3m2!1svi!2s!4v1639565363327!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Lương Tài</b>
                      <p>Số 12 Đường Phá Lãng -Thị Trấn Thứa - huyện Lương Tài - Bắc Ninh</p>
                      <a href="tel:0886956258">0886956258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody gia bình" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.4656080000755!2d106.1764849152626!3d21.05405798598472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359f55bf59e00d%3A0x3864c9c953b9f63c!2sYODY%20Gia%20B%C3%ACnh!5e0!3m2!1svi!2s!4v1639565391723!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Gia Bình</b>
                      <p>29, Nguyễn Văn Cừ, TT Gia Bình, Gia Bình, Bắc Ninh</p>
                      <a href="tel:0888586258">0888586258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody từ sơn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.7562367930527!2d105.96543631526353!3d21.122282385947784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135076a99d6a371%3A0x7f3f39f16379fb78!2zWU9EWSBU4burIFPGoW4!5e0!3m2!1svi!2s!4v1639565426241!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Từ Sơn</b>
                      <p>148 Trần Phú, thị trấn Từ Sơn, Từ Sơn, Bắc Ninh</p>
                      <a href="tel:0911658258">0911658258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thị trấn hồ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.523690274993!2d106.0878398!3d21.0517361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x21018f920bcd6958!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgVGjhu4sgVHLhuqVuIEjhu5M!5e0!3m2!1svi!2s!4v1660985805430!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Thị Trấn Hồ</b>
                      <p>Phố đường Âu Cơ- Thị trấn Hồ, huyện Thuận Thành, tỉnh Bắc Ninh</p>
                      <a href="tel:0886399258">0886399258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody kids yên phong" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3719.9666110306794!2d105.9543727!3d21.1934853!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313505d35b746aab%3A0x3815b9b6e7ddfdcc!2zQ-G7rWEgSMOgbmcgUXXhuqduIMOBbyBUcuG6uyBFbSBZT0RZIEtJRFMgWcOqbiBQaG9uZw!5e0!3m2!1svi!2s!4v1669875639489!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY KIDS Yên Phong</b>
                      <p>Số nhà 284, đường 295, Thị trấn Chờ, Yên Phong, BN</p>
                      <a href="tel:0889356258">0889356258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thủy nguyên" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3727.157834209429!2d106.6726996!3d20.9059687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x874556cc4a88e1cd!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgVGjhu6d5IE5ndXnDqm4!5e0!3m2!1svi!2s!4v1654933453557!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Thủy Nguyên</b>
                      <p>thôn 1, phố Mới, xã Thủy Sơn, Thủy Nguyên, Hải Phòng</p>
                      <a href="tel:0917819258">0917819258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody kiến an" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3729.590954983161!2d106.62206621525898!3d20.807829986118417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7783e6d6cda5%3A0xc066967c655fa9e6!2zWU9EWSBLaeG6v24gQW4!5e0!3m2!1svi!2s!4v1639565493330!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Kiến An</b>
                      <p>126 Phan Đăng Lưu - Quận Kiến An - TP Hải Phòng</p>
                      <a href="tel:0913562258">0913562258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody vĩnh bảo" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.4510617833257!2d106.53000301525672!3d20.651220286204115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135f5299326c00f%3A0x1a0e1a892e36d6c1!2zWU9EWSBWxKluaCBC4bqjbw!5e0!3m2!1svi!2s!4v1639565546543!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Vĩnh Bảo</b>
                      <p>số 37, Khu phố 1/5, TT Vĩnh Bảo, Hải Phòng</p>
                      <a href="tel:0913516258">0913516258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody tiên lãng" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.57601608967!2d106.55403951525783!3d20.727434686162432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a75cd096ec25b%3A0x37e40f30683b71cf!2zWU9EWSBUacOqbiBMw6NuZw!5e0!3m2!1svi!2s!4v1639565583142!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Tiên Lãng</b>
                      <p>Khu 3 - thị trấn Tiên Lãng - huyện Tiên Lãng, HP</p>
                      <a href="tel:0918282258">0918282258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody an dương" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.3664015184163!2d106.61307481525961!3d20.857276886091483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a79ef5a5e9187%3A0x12a4066648b8fa5a!2zWU9EWSBBbiBExrDGoW5n!5e0!3m2!1svi!2s!4v1639565613152!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY An Dương</b>
                      <p>141 Thị trấn An Dương, Huyện An Dương, Hải Phòng</p>
                      <a href="tel:0911356258">0911356258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody kiến thụy" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.1369844849673!2d106.66391081525809!3d20.745241186152676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7162b087af23%3A0x66454843a7a2bbe8!2zWU9EWSBLaeG6v24gVGjhu6V5!5e0!3m2!1svi!2s!4v1639565647115!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Kiến Thụy</b>
                      <p>Thôn Cẩm La, Xã Thanh Sơn, Thị trấn Kiến Thụy, TP Hải Phòng</p>
                      <a href="tel:0888538258">0888538258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody lê chân" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.4646575787906!2d106.67996441525965!3d20.853313486093622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7bbc406b0c73%3A0xc0555a2b4ef9722a!2zWU9EWSBMw6ogQ2jDom4!5e0!3m2!1svi!2s!4v1639565679686!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Lê Chân</b>
                      <p>39, Hai Bà Trưng, quận Lê Chân, Hải Phòng</p>
                      <a href="tel:0888121258">0888121258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody quán toan" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59655.43593878422!2d106.6471336186319!3d20.853309912062496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a792404d7ae77%3A0xe22b0b16298d5b32!2sYODY%20Qua%CC%81n%20Toan!5e0!3m2!1svi!2s!4v1639565744001!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Quán Toan</b>
                      <p>567 Hùng Vương, Quán Toan, Hồng Bàng, Hải Phòng</p>
                      <a href="tel:0888300258">0888300258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody ngô quyền" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233.01530185989307!2d106.70997061172937!3d20.86217978647627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7bd49ccc67c1%3A0x271e202cb01271b5!2zWU9EWSBOZ8O0IFF1eeG7gW4!5e0!3m2!1svi!2s!4v1639565797909!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Ngô Quyền</b>
                      <p>280B Đường Đà Nẵng - Quận Ngô Quyền - TP. Hải Phòng</p>
                      <a href="tel:0888663258">0888663258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody an lão" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3729.254162756804!2d106.55651301525916!3d20.821440686111046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a77836f4cd57d%3A0x71dea73710dec800!2sYODY%20An%20L%C3%A3o!5e0!3m2!1svi!2s!4v1639565843111!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY An Lão</b>
                      <p>84 Trần Tất Văn, TT An Lão, Hải Phòng</p>
                      <a href="tel:0833999258">0833999258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody nam định" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.8557114832424!2d106.16229381525362!3d20.43001808632582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135e757ca8e6c6b%3A0xc6900293364db1dd!2zWU9EWSBOYW0gxJDhu4tuaA!5e0!3m2!1svi!2s!4v1639565894120!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Nam Định</b>
                      <p>230 Điện Biên - TP Nam Định</p>
                      <a href="tel:0915479258">0915479258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody nam định 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14955.422868535072!2d106.15572773467916!3d20.43001785386249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135e723268b7281%3A0xd536b3202a987337!2zWU9EWSBOYW0gxJDhu4tuaCAy!5e0!3m2!1svi!2s!4v1639565937598!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Nam Định 2</b>
                      <p>151 Nguyễn Du - TP. Nam Định</p>
                      <a href="tel:0886856258">0886856258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hải hậu" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3744.450358803485!2d106.30030581525021!3d20.198598286453862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31360fd61047ac7d%3A0xeda56d10b01e32c7!2zWU9EWSBI4bqjaSBI4bqtdQ!5e0!3m2!1svi!2s!4v1639566336829!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hải Hậu</b>
                      <p>06 tổ dân phố số 1, TT.Yên Định, Huyện Hải Hậu, Nam Định</p>
                      <a href="tel:0888393258">0888393258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody ý yên" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.424475870944!2d106.0149287152521!3d20.324075786384277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136770adc3c48ab%3A0xcaac995547b14733!2zWU9EWSDDnSBZw6pu!5e0!3m2!1svi!2s!4v1639617858718!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Ý Yên</b>
                      <p>Đường 38B. Cầu bệnh viện . Thị trấn Lâm. Huyện Ý Yên. Tỉnh Nam Định</p>
                      <a href="tel:0829666258">0829666258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody cổ lễ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.696387887479!2d106.26835511525188!3d20.31283048639061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31360943a97100ad%3A0x19039f7159976a3a!2zWU9EWSBD4buVIEzhu4U!5e0!3m2!1svi!2s!4v1639617882403!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Cổ Lễ</b>
                      <p>Số nhà 100 xóm 3, cầu điện biên  thị trấn Cổ Lễ trực Ninh Nam Định</p>
                      <a href="tel:0833515258">0833515258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody vụ bản" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.229524960939!2d106.0744146152522!3d20.332134586379876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313675a6f55b56e9%3A0x6f20120141b108f2!2zWU9EWSBWdcyjIEJhzIlu!5e0!3m2!1svi!2s!4v1639617909773!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Vụ Bản</b>
                      <p>18b Non Côi , TT Gôi , Vụ Bản , Nam Định</p>
                      <a href="tel:0836515258">0836515258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody giao thuỷ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3742.527863509402!2d106.4236756!3d20.2784066!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x312331732b313cf9!2sYODY%20Giao%20Thu%E1%BB%B7!5e0!3m2!1svi!2s!4v1644802966485!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Giao Thuỷ</b>
                      <p>Xóm 14 , Xã Hoành Sơn, Huyện Giao Thuỷ, Tỉnh Nam Định</p>
                      <a href="tel:0829668258">0829668258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody ninh bình" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d935.7228089646778!2d105.97413684536122!3d20.263345048509635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf058bdd9d65f40e!2sYODY%20Ninh%20B%C3%ACnh!5e0!3m2!1svi!2s!4v1639618064754!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Ninh Bình</b>
                      <p>165 Lương Văn Thăng – TP Ninh Bình</p>
                      <a href="tel:0919866258">0919866258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody ninh bình 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d935.755534739361!2d105.97016041769913!3d20.25791657056557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31367763981c111b%3A0xcbdffd635fea710!2sYODY%20Ninh%20B%C3%ACnh%202!5e0!3m2!1svi!2s!4v1639618217774!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Ninh Bình 2</b>
                      <p>23 Lê Hồng Phong, Phường Đông Thành TP Ninh Bình </p>
                      <a href="tel:0918363258">0918363258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody tam điệp" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3745.3311242017908!2d105.92604661524976!3d20.161934086474243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31366565f1f10cc9%3A0xe05916d1e2d69981!2zWU9EWSBUYW0gxJBp4buHcA!5e0!3m2!1svi!2s!4v1639618405219!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Tam Điệp</b>
                      <p>396 Tổ 10B Đường Quang Trung, TP Tam Điệp</p>
                      <a href="tel:0911329258">0911329258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody yên khánh" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3744.925538804492!2d106.07064691524992!3d20.178825586464875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313673dde7688c8d%3A0xed3b8f91aa4191a3!2zWU9EWSBZw6puIEtow6FuaA!5e0!3m2!1svi!2s!4v1639618545339!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Yên Khánh</b>
                      <p>Phố 4, TT Yên Ninh, Yên Khánh, Ninh Bình</p>
                      <a href="tel:0818505258">0818505258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody yên mô" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3745.4242825287943!2d106.00840941524969!3d20.158052386476456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31366fd6657eaeb7%3A0x71b27eece7cbce39!2zWU9EWSBZw6puIE3DtA!5e0!3m2!1svi!2s!4v1639618621754!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Yên Mô</b>
                      <p>Số 14 đường Phạm Thận Duật ,khu Trung Yên,Thị Trấn Yên Thịnh, Huyện Yên Mô, Tỉnh Ninh Bình</p>
                      <a href="tel:0852666258">0852666258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody ninh bình 3" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3743.333257709397!2d105.99087669543245!3d20.24500905537694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313671c80a1ea36f%3A0xba584cb517844b83!2sYODY%20Ninh%20B%C3%ACnh%203!5e0!3m2!1svi!2s!4v1639618692442!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Ninh Bình 3</b>
                      <p>506 Nguyễn Công Trứ, phường Ninh Sơn, thành phố Ninh Bình, Ninh Bình</p>
                      <a href="tel:0888266258">0888266258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody mạo khê" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.3986962112485!2d106.5962789152627!3d21.05673253598327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a81253948503b%3A0x3bc53406bf34fe20!2zWU9EWSBN4bqhbyBLaMOq!5e0!3m2!1svi!2s!4v1639618831886!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Mạo Khê</b>
                      <p>Số 80, Hoàng Hoa Thám, Thị trấn Mạo Khê, Đông Triều, Quảng Ninh</p>
                      <a href="tel:0915135258">0915135258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody mạo khê 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.390811266359!2d106.59506831526272!3d21.057047685983186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a81063387018f%3A0x384badd392e89538!2zWU9EWSBN4bqhbyBLaMOqIDI!5e0!3m2!1svi!2s!4v1639618919823!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Mạo Khê 2</b>
                      <p>Số nhà 52, Khu Vĩnh Thông, Phường Mạo Khê, Tx Đông Triều, Quảng Ninh</p>
                      <a href="tel:0911606258">0911606258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody cẩm phả 1" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5242369477223!2d107.27698791526197!3d21.011699986007653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314affc04dcca219%3A0x2c51c5485c2fb404!2zWU9EWSBD4bqpbSBQaOG6ow!5e0!3m2!1svi!2s!4v1639618966080!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Cẩm Phả 1</b>
                      <p>289 Trần Phú - TP Cẩm Phả - Quảng Ninh</p>
                      <a href="tel:0911363258">0911363258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hạ long" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d465.7296176234818!2d107.09041121468044!3d20.959062400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a59ed09cad0dd%3A0x4625a2e1a93dbf77!2zWU9EWSBI4bqhIExvbmc!5e0!3m2!1svi!2s!4v1639619214662!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hạ Long</b>
                      <p>286 Cao Thắng- TP Hạ Long</p>
                      <a href="tel:0911016258">0911016258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody giếng đáy" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.368859278412!2d107.0049180152616!3d20.977846286026057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a59a7048a245f%3A0x88bfade4e560ae3a!2zWU9EWSBHaeG6v25nIMSQw6F5!5e0!3m2!1svi!2s!4v1639619259575!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Giếng Đáy</b>
                      <p>377 Giếng Đáy, TP Hạ Long, Tỉnh Quảng Ninh</p>
                      <a href="tel:0826515258">0826515258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody móng cái" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14845.811261569355!2d107.96356840308749!3d21.529142614107418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314b5333ea8af90d%3A0xe2dd7e57aac460d9!2zWU9EWSBNw7NuZyBDw6Fp!5e0!3m2!1svi!2s!4v1639619341520!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Móng Cái</b>
                      <p>27 Hùng Vương, Hòa Lạc, Móng Cái</p>
                      <a href="tel:0916959258">0916959258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody quảng yên" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.311899951845!2d106.79456701526101!3d20.939986086046574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a636023ce82e7%3A0x43ae9c945a94e71e!2zWU9EWSBRdeG6o25nIFnDqm4!5e0!3m2!1svi!2s!4v1639619493459!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Quảng Yên</b>
                      <p>khu 9, phường Quảng Yên, Tx Quảng Yên, tỉnh Quảng Ninh</p>
                      <a href="tel:0916562258">0916562258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody cẩm phả 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5813366978036!2d107.28929891526182!3d21.009412986008876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314b018a99ca2627%3A0x1065112363e536a!2zWU9EWSBD4bqpbSBQaOG6oyAy!5e0!3m2!1svi!2s!4v1639619531512!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Cẩm Phả 2</b>
                      <p>Số 26-28 Bà Triệu , Cẩm Đông , Cẩm Phả , Quảng Ninh</p>
                      <a href="tel:0918816258">0918816258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody đông triều" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.737111325556!2d106.5112367!3d21.0831595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x54128267a8ae3529!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgxJDDtG5nIFRyaeG7gXU!5e0!3m2!1svi!2s!4v1661498144033!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Đông Triều</b>
                      <p>136 Nguyễn Bình, P.Đông Triều, Tx.Đông Triều, Quảng Ninh</p>
                      <a href="tel:0911633258">0911633258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody uông bí" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.977399494013!2d106.75761961526221!3d21.033590285995658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a897fce2592ab%3A0x832e90dbce0e755c!2zWU9EWSBVw7RuZyBCw60!5e0!3m2!1svi!2s!4v1639619957247!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Uông Bí</b>
                      <p>237 đường Trần Nhân Tông - TP Uông Bí - Quảng Ninh</p>
                      <a href="tel:0915465258">0915465258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody vân đồn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.1349817291125!2d107.41408901493323!3d21.067270385977483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6a914bf54b37a582!2zWU9EWSBWw6JuIMSQ4buTbg!5e0!3m2!1svi!2s!4v1646450203187!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Vân Đồn</b>
                      <p>Số 216 , đường 334 Khu 1 thị trấn Cái Rồng, huyện Vân Đồn, tỉnh Quảng Ninh</p>
                      <a href="tel:0911606258">0911606258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thái bình 3" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.4630046204884!2d106.33846401525383!3d20.44616798631686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135e5e0a983b17d%3A0xc66a8e266581d544!2zWU9EWSBUaMOhaSBCw6xuaCAz!5e0!3m2!1svi!2s!4v1639620016477!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Thái Bình 3</b>
                      <p>192 Hai Bà Trưng, TP Thái Bình</p>
                      <a href="tel:0914118258">0914118258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thái bình 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.342768924962!2d106.33240061525385!3d20.45111018631417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135e4d7f900030b%3A0xfd3c399be757a2aa!2zWU9EWSBUaMOhaSBCw6xuaCAy!5e0!3m2!1svi!2s!4v1639620120061!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Thái Bình 2</b>
                      <p>297 Lý Bôn, Phường Tiền Phong, TP Thái Bình</p>
                      <a href="tel:0911393258">0911393258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody tiền hải" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7478.983080851875!2d106.50373350352312!3d20.403843952081015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135f909294a5f31%3A0xb0dfc6f8c65e8db3!2zWU9EWSBUaeG7gW4gSOG6o2k!5e0!3m2!1svi!2s!4v1639620255846!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Tiền Hải</b>
                      <p>Số 5B, Tiểu Hoàng, Thị trấn Tiền Hải, Thái Bình</p>
                      <a href="tel:0915136258">0915136258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody diêm điền" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.556021252261!2d106.56291841525541!3d20.565338886251254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a09664827a4fb%3A0xbd4e8883f20f037c!2zWU9EWSBEacOqbSDEkGnhu4Fu!5e0!3m2!1svi!2s!4v1639620285828!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Diêm Điền</b>
                      <p>Số 267, khu 6, Thị trấn Diêm Điền, Thái Thụy, Thái Bình</p>
                      <a href="tel:0888233258">0888233258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody đông hưng" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.8799787489324!2d106.35331181525525!3d20.55209108625839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134f5cbd78e7a27%3A0x77b0e27564b1f90a!2zWU9EWSDEkMO0bmcgSMawbmc!5e0!3m2!1svi!2s!4v1639620314246!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Đông Hưng</b>
                      <p> Lô 01+02, khu LK36, TT.Đông Hưng, Huyện Đông Hưng, Thái Bình</p>
                      <a href="tel:0888556258">0888556258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hưng hà" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.0697791131292!2d106.23014921525584!3d20.585207786240336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135e9aa753e492b%3A0x15f85467b95a9cdf!2zWU9EWSBIxrBuZyBIw6A!5e0!3m2!1svi!2s!4v1639620495749!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hưng Hà</b>
                      <p>Khu Nhân Cầu 1 - thị trấn Hưng Hà - huyện Hưng Hà</p>
                      <a href="tel:0888295258">0888295258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody quỳnh côi" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.448151543495!2d106.32258941525673!3d20.651338786204022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ed42a1236253%3A0xa475ccb303d71dd!2zWU9EWSBRdXnMgG5oIEPDtGk!5e0!3m2!1svi!2s!4v1639620546598!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Quỳnh Côi</b>
                      <p>92 Nguyễn Du, TT Quỳnh Côi, Quỳnh Phụ, Thái Bình</p>
                      <a href="tel:0911779258">0911779258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody kiến xương" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3739.847912753487!2d106.43211641525295!3d20.389159686348254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ff112616623d%3A0xc7e1b7835609ef73!2zWU9EWSBLaeG6v24gWMawxqFuZw!5e0!3m2!1svi!2s!4v1639620587053!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Kiến Xương</b>
                      <p>khu Cộng Hoà, TT Thanh Nê, huyện Kiến Xương, tỉnh Thái Bình</p>
                      <a href="tel:0827666258">0827666258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody bỉm sơn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.1914807135827!2d105.85525761524865!3d20.084280986517463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31366336d9b0c657%3A0x45e55b62e7626dc1!2zWU9EWSBC4buJbSBTxqFu!5e0!3m2!1svi!2s!4v1639620628398!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Bỉm Sơn</b>
                      <p>Số 7, Đường Nguyễn Huệ, Phường Ngọc Trạo, TX Bỉm Sơn, Thanh Hóa</p>
                      <a href="tel:0913876258">0913876258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody ngọc lặc" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.063543190436!2d105.37415291524879!3d20.089630436514536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136bf92689d6ecd%3A0x39f7144862d8a884!2zWU9EWSBOZ-G7jWMgTOG6t2M!5e0!3m2!1svi!2s!4v1639620664252!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Ngọc Lặc</b>
                      <p>892 Lê Lai - TT. Ngọc Lặc – Thanh Hóa</p>
                      <a href="tel:0941270468">0941270468</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody tĩnh gia" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.2223239484256!2d105.77623051523987!3d19.44597908687682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3137074ac8a80371%3A0x2d8fb8971c32bb21!2sYODY%20T%C4%A9nh%20Gia!5e0!3m2!1svi!2s!4v1639620741990!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Tĩnh Gia</b>
                      <p>Số 16 Quang Trung, Tĩnh Gia, Thanh Hóa</p>
                      <a href="tel:0918013258">0918013258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody triệu sơn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3753.487841231949!2d105.60474601524511!3d19.819300986665887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136fb3d17c1f225%3A0x69ff25589de8cfd0!2zWU9EWSBUcmnhu4d1IFPGoW4!5e0!3m2!1svi!2s!4v1639620762210!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Triệu Sơn</b>
                      <p>Số 46 phố Giắt , thị trấn Triệu Sơn, Huyện Triệu Sơn, Tỉnh Thanh Hóa</p>
                      <a href="tel:0888185258">0888185258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thanh hóa" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120111.62124625056!2d105.53689459532546!3d19.819287318297757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136f79935ba135f%3A0x637ab69627c3fe41!2sYODY%20Thanh%20H%C3%B3a!5e0!3m2!1svi!2s!4v1639620821995!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Thanh Hóa</b>
                      <p>Lô 7+8, Lê Hoàn, TP Thanh Hóa</p>
                      <a href="tel:0828117358">0828117358</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thanh hóa 3" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3753.8493475494724!2d105.76512041524475!3d19.80398388667445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136f9536faeec81%3A0x530c26187c7490d2!2sYODY%20Thanh%20H%C3%B3a%203!5e0!3m2!1svi!2s!4v1639620850358!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Thanh Hóa 3</b>
                      <p>Số nhà 340, Nguyễn Trãi, Phường Tân Sơn, Thanh Hóa</p>
                      <a href="tel:0888116258">0888116258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody quảng xương" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.5863726623684!2d105.77976141524381!3d19.73022658671599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136f9152c1fa20f%3A0x35257fcc70eec812!2zWU9EWSBRdeG6o25nIFjGsMahbmc!5e0!3m2!1svi!2s!4v1639620873395!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Quảng Xương</b>
                      <p>117 Tố Hữu - TT Tân Phong - Quảng Xương - Thanh Hoá</p>
                      <a href="tel:0888136258">0888136258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody quán lào" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.989919370867!2d105.65595551524699!3d19.96692618658299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136f3fc9100d5df%3A0xddbf873e3c9b23f2!2zWU9EWSBRdcOhbiBMw6Bv!5e0!3m2!1svi!2s!4v1639620920348!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Quán Lào</b>
                      <p>Khu 4, TT Quán Lào, huyện Yên Định, tỉnh Thanh Hóa</p>
                      <a href="tel:0839319258">0839319258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thạch thành" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1873.0072652407282!2d105.6721905!3d20.1334414!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x383c16b80d737657!2zWW9keSBUaOG6oWNoIFRow6BuaA!5e0!3m2!1svi!2s!4v1639621106478!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Thạch Thành</b>
                      <p>Khu phố 1, thị trấn Kim Tân, huyện Thạch Thành, Tỉnh Thanh Hoá</p>
                      <a href="tel:0919952258">0919952258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hậu lộc" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.207595743567!2d105.88531081524634!3d19.915654886611748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31365d2b5d3a7683%3A0x94a964c4dbc6c728!2zWU9EWSBI4bqtdSBM4buZYw!5e0!3m2!1svi!2s!4v1639621229412!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hậu Lộc</b>
                      <p>Số nhà 496 , đường Bà Triệu, thị trấn Hậu Lộc, Hậu Lộc, tỉnh Thanh Hoá</p>
                      <a href="tel:0835505258">0835505258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody cẩm thuỷ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3744.143060745251!2d105.47374731491914!3d20.211375386446804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x531446b39ade3169!2zWU9EWSBD4bqpbSBUaHXhu7c!5e0!3m2!1svi!2s!4v1646449885474!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Cẩm Thuỷ</b>
                      <p>Tổ dân phố Đại Đồng, thị trấn Phong Sơn, huyện Cẩm Thuỷ, tỉnh Thanh Hoá</p>
                      <a href="tel:0888198258">0888198258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thiệu hoá" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.7806261414507!2d105.67622581491399!3d19.891483086625364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x74b16fd2adb0597a!2zWU9EWSBUaGnhu4d1IEhvw6E!5e0!3m2!1svi!2s!4v1648115350076!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Thiệu Hoá</b>
                      <p>308 QL45 Thị Trấn Vạn Hà, Huyện Thiệu Hoá, Tỉnh Thanh Hoá.</p>
                      <a href="tel:0886899258">0886899258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody vĩnh lộc" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.77086957516!2d105.61413941491665!3d20.06003788653104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x82a7ff6791f22ea3!2zWU9EWSBWxKluaCBM4buZYw!5e0!3m2!1svi!2s!4v1648116075781!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Vĩnh Lộc</b>
                      <p>Khu 1, thị trấn Vĩnh Lộc, huyện Vĩnh Lộc, tỉnh Thanh Hoá</p>
                      <a href="tel:0886322258">0886322258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody nga sơn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.0943443068986!2d105.96926791491572!3d20.004554686561992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9f8a6096fa7c17c!2sYODY%20Nga%20S%C6%A1n!5e0!3m2!1svi!2s!4v1648605644414!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Nga Sơn</b>
                      <p>số nhà 341 - Tiểu Khu 2 - Thị Trấn Nga Sơn - Huyện Nga Sơn - Tỉnh Thanh Hóa</p>
                      <a href="tel:0886883258">0886883258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody sầm sơn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.527169949238!2d105.8991211!3d19.7327448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89477db9af6e428!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgU-G6p20gU8ahbg!5e0!3m2!1svi!2s!4v1666575560918!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Sầm Sơn</b>
                      <p>11 Đ. Lê Lợi, P. Trường Sơn, Sầm Sơn, Thanh Hoá</p>
                      <a href="tel:0888129259">0888129259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody vinh" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.936051894544!2d105.66825881522945!3d18.66686538732396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139cf7895829d0f%3A0x6740bc77d67f0a9b!2sYODY%20Vinh!5e0!3m2!1svi!2s!4v1639621313340!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Vinh</b>
                      <p>110A Đặng Thái Thân, Phường Cửa Nam, TP Vinh, tỉnh Nghệ An</p>
                      <a href="tel:0911003258">0911003258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody vinh 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.735070890888!2d105.67517281522963!3d18.675880787318732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139cf3f428ffde1%3A0x1ab4ac5467c7e29c!2sYODY%20VINH%202!5e0!3m2!1svi!2s!4v1639621346377!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Vinh 2</b>
                      <p>76 Nguyễn Thị Minh Khai, TP.Vinh, Nghệ An</p>
                      <a href="tel:0918268258">0918268258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody cầu giát" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.2248268304006!2d105.6238845152357!3d19.141633487050182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313771343cc0852d%3A0xc1f67eee894544e7!2zWU9EWSBD4bqndSBHacOhdA!5e0!3m2!1svi!2s!4v1639621422316!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Cầu Giát</b>
                      <p>khối 6 thị trấn Cầu Giát, huyện Quỳnh Lưu, Nghệ An</p>
                      <a href="tel:0832515258">0832515258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody huế" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.3117368575677!2d107.5995997!3d16.4597454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9e4131f702436738!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgSHXhur8!5e0!3m2!1svi!2s!4v1658713525412!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Huế</b>
                      <p>179 Bà Triệu, phường Xuân Phú, thành phố Huế, tỉnh Thừa Thiên Huế.</p>
                      <a href="tel:0888709259">0888709259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody huế 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.234502257179!2d107.5938583!3d16.4636594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a14197639243%3A0xd9d41a53d7963bbd!2zQ-G7rWEgaMOgbmcgdGjhu51pIHRyYW5nIFlPRFkgSHXhur8gMg!5e0!3m2!1svi!2s!4v1669456028073!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Huế 2</b>
                      <p>33 Hà Nội, phường Phú Nhuận, tp Huế, tỉnh Thừa Thiên Huế</p>
                      <a href="tel:0888138259">0888138259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hà nam" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.22422889872!2d105.91041441525513!3d20.538004486266292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ce281e6bea7b%3A0xba85c015908e7f5b!2sYODY%20H%C3%A0%20Nam!5e0!3m2!1svi!2s!4v1639621473277!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hà Nam</b>
                      <p>Quốc lộ 1A - TP. Phủ Lý, Hà Nam (cạnh ngân hàng Vietcombank cũ và xe máy Nam Hạnh)</p>
                      <a href="tel:0915169258">0915169258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody đồng văn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1866.8411835644322!2d105.9182963081751!3d20.641799846552303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135c9fe3127b79f%3A0x564a1c572e490465!2zWU9EWSDEkOG7k25nIFbEg24!5e0!3m2!1svi!2s!4v1639621520338!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Đồng Văn</b>
                      <p>126 Nguyễn Hữu Tiến, thị trấn Đồng Văn, huyện Duy Tiên, tỉnh Hà Nam</p>
                      <a href="tel:0856219258">0856219258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hà lam" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3840.1851702215054!2d108.35463291519414!3d15.74134058908424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31420b50b0a1ec55%3A0x9e167c95e7814347!2sYODY%20H%C3%A0%20Lam!5e0!3m2!1svi!2s!4v1639621547254!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hà Lam</b>
                      <p>89 Tiểu La, thị trấn Hà Lam, tỉnh Quảng Nam</p>
                      <a href="tel:0915459259">0915459259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody vĩnh điện" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.370651472996!2d108.24637581519573!3d15.889641188992064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31420f853caefaed%3A0xc57d8d5727d00134!2zWU9EWSBWxKluaCDEkGnhu4du!5e0!3m2!1svi!2s!4v1639621721648!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Vĩnh Điện</b>
                      <p>224 - 226 Đường Trần Nhân Tông , Vĩnh Điện, Điện Bàn, Quảng Nam</p>
                      <a href="tel:0919754259">0919754259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody vĩnh điện 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.326556329443!2d108.24528381519585!3d15.89195388899066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31420f352d5defd3%3A0x8432ff9f22300572!2zWU9EWSBWxKluaCDEkGnhu4duIDI!5e0!3m2!1svi!2s!4v1639621765202!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Vĩnh Điện 2</b>
                      <p>120 - 122 Trần Nhân Tông, P Vĩnh Điện, Thị Xã Điện Bàn, Quảng Nam. </p>
                      <a href="tel:0888684259">0888684259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody tam kỳ 1" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.5227676612385!2d108.49454491744385!3d15.563693700000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169dcc059b23e8b%3A0x861f20d8bf43b7c1!2zWU9EWSBUQU0gS-G7sg!5e0!3m2!1svi!2s!4v1639621807257!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Tam Kỳ 1</b>
                      <p>số 196- 198 Phan Chu Trinh, phường An Mỹ, thành phố Tam Kỳ, tỉnh Quảng Nam</p>
                      <a href="tel:0886632259">0886632259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody tam kỳ 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.3707733632464!2d108.48280321519223!3d15.57182668918982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169ddd5fff6b453%3A0x35dac36942c9970b!2zWU9EWSBUQU0gS-G7siAy!5e0!3m2!1svi!2s!4v1639621827732!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Tam Kỳ 2</b>
                      <p>45 Phan Chu Trinh, Tam Kỳ ,Quảng Nam</p>
                      <a href="tel:0916780259">0916780259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hội an" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.4793706544747!2d108.3231223151957!3d15.8839376889956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31420f658838b7f7%3A0x4ea21849dedeaa41!2zWU9EWSBI4buZaSBBbg!5e0!3m2!1svi!2s!4v1639622006426!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hội An</b>
                      <p>552 - 554 Hai Bà Trưng , phường Cẩm Phổ , Thành phố Hội An , Tỉnh Quảng Nam.</p>
                      <a href="tel:0919909258">0919909258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody núi thành" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.9023559019433!2d108.64847791519072!3d15.43582058927492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169c9b4c33dc8a9%3A0x1c45cab78d87ed90!2zWU9EWSBOw7ppIFRow6BuaA!5e0!3m2!1svi!2s!4v1639622031395!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Núi Thành</b>
                      <p>125 Nguyễn Văn Linh, thị trấn Núi Thành, huyện Núi Thành, Quảng Nam</p>
                      <a href="tel:0888586259">0888586259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody quảng ngãi" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3851.532187700621!2d108.79979411518744!3d15.129090189467599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169ad31b6d6541b%3A0xfdf0abeb47b269e0!2zWU9EWSBRdcOjbmcgTmfDo2k!5e0!3m2!1svi!2s!4v1639622066589!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Quảng Ngãi</b>
                      <p>139 - 141 Quang Trung - TP Quảng Ngãi – Tỉnh Quảng Ngãi</p>
                      <a href="tel:0919232259">0919232259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody bình sơn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.3479253678024!2d108.75368261518938!3d15.303315789357999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169b5ad83ad85ed%3A0xf4798990d5909a38!2zWU9EWSBCw6xuaCBTxqFu!5e0!3m2!1svi!2s!4v1639622095762!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Bình Sơn</b>
                      <p>240 Phạm Văn Đồng, Thị Trấn Châu Ổ, Bình Sơn, Quảng Ngãi</p>
                      <a href="tel:0819484259">0819484259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody quảng ngãi 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3851.64702311586!2d108.8025118690013!3d15.122770404117015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169ad806f4c2ce9%3A0xd0484586a68db250!2zWU9EWSBRVeG6ok5HIE5Hw4NJIDI!5e0!3m2!1svi!2s!4v1639622174410!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Quảng Ngãi 2</b>
                      <p>374 Quang Trung, TP Quảng Ngãi, Quảng Ngãi</p>
                      <a href="tel:0888396259">0888396259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody đức phổ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3851.6855276686447!2d108.80028151484643!3d15.120650789472956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf16bb75bcfb8e752!2zWU9EWSDEkOG7qWMgUGjhu5U!5e0!3m2!1svi!2s!4v1646449998037!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Đức Phổ</b>
                      <p>376 Đường Nguyễn Nghiêm, Phường Nguyễn Nghiêm, Thị xã Đức Phổ, Tỉnh Quảng Ngãi</p>
                      <a href="tel:0888653259">0888653259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody đông hà" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.244729562352!2d107.09861681520637!3d16.81421098842438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3140ef6398242a0d%3A0xd47ddbe515771d26!2zWU9EWSDEkMOUTkcgSMOA!5e0!3m2!1svi!2s!4v1639622465951!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Đông Hà</b>
                      <p>Số 01, Hùng Vương, TP. Đông Hà, Quảng Trị</p>
                      <a href="tel:0919654259">0919654259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody quảng trị" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61119.58746365059!2d107.10816990466103!3d16.777958342216557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3140fb926b3af325%3A0x827aebf48d9f16ed!2zWU9EWSBRdeG6o25nIFRy4buL!5e0!3m2!1svi!2s!4v1639622503975!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Quảng Trị</b>
                      <p>36 Trần Hưng Đạo - Thị xã Quảng Trị - tỉnh Quảng Trị</p>
                      <a href="tel:0888450259">0888450259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hồ xá" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3814.0199711305195!2d107.00517901520942!3d17.071675788268525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3140c5b6e9a9d4eb%3A0x672480424fc144a9!2zWU9EWSBI4buTIFjDoQ!5e0!3m2!1svi!2s!4v1639622533379!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hồ Xá</b>
                      <p>52 Hùng Vương, thị trấn Hồ Xá, huyện Vĩnh Linh, Quảng Trị </p>
                      <a href="tel:0888470259">0888470259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody lê duẩn 1" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7667.902484666263!2d108.19590917590192!3d16.06801975552658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219e416e2893d%3A0x32c45cd6ab83a44d!2zWU9EWSBMw6ogRHXhuqluIDE!5e0!3m2!1svi!2s!4v1639622594463!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Lê Duẩn 1</b>
                      <p>187 Lê Duẩn, Đà Nẵng.</p>
                      <a href="tel:0888332259">0888332259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody lê duẩn 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7667.902484666263!2d108.19590917590192!3d16.06801975552658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219e688b61849%3A0x31e747c0e0f0ac21!2zWU9EWSBMw6ogRHXhuqluIDI!5e0!3m2!1svi!2s!4v1639622919943!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Lê Duẩn 2</b>
                      <p>412 Lê Duẩn, Đà Nẵng. </p>
                      <a href="tel:0917455259">0917455259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody liên chiểu" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.915454404786!2d108.14896291519776!3d16.069876488880464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142192613b19e23%3A0x54ab560adf8fef77!2zWU9EWSBMacOqbiBDaGnhu4N1!5e0!3m2!1svi!2s!4v1639622956418!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Liên Chiểu</b>
                      <p>691 Tôn Đức Thắng, Hoà Khánh Bắc, Liên Chiểu, Đà Nẵng </p>
                      <a href="tel:0919942259">0919942259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody điện biên phủ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.990266386026!2d108.18511071519777!3d16.065994888882983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219a9eace4591%3A0xa74bc7304eb2d150!2zWU9EWSDEkGnhu4duIEJpw6puIFBo4bun!5e0!3m2!1svi!2s!4v1639623000248!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Điện Biên Phủ</b>
                      <p>478 Điện Biên Phủ - Thanh Khê - Đà Nẵng</p>
                      <a href="tel:0888131259">0888131259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody xô viết nghệ tĩnh" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.630152395852!2d108.21816681485811!3d16.032757188903506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb99f1fc6c5961757!2zWU9EWSBYw7QgVknhur90IE5naOG7hyBUxKluaA!5e0!3m2!1svi!2s!4v1640395729637!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Xô VIết Nghệ Tĩnh</b>
                      <p>68 Xô Viết Nghệ Tĩnh, Cẩm Lệ, TP Đà Nẵng</p>
                      <a href="tel:0888398259">0888398259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hoàng diệu" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3834.2888865306313!2d108.22125631537479!3d16.05049195583752!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x695da6c7ffbcfd20!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgSG_DoG5nIERp4buHdQ!5e0!3m2!1svi!2s!4v1658714784763!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Hoàng Diệu</b>
                      <p>299 Đường Hoàng Diệu, Phường Bình Thuận, Quận Hải Châu, TP. Đà Nẵng</p>
                      <a href="tel:0888309259">0888309259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody đồng hới 1" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7611.62312709631!2d106.61555965637302!3d17.468730929247112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314756db73ef8715%3A0x24d14d93eb5c7583!2zWU9EWSDEkOG7k25nIEjhu5tp!5e0!3m2!1svi!2s!4v1639623044661!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Đồng Hới 1</b>
                      <p>180 Trần Hưng Đạo, Đồng Hới, Quảng Bình</p>
                      <a href="tel:0919689259">0919689259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody đồng hới 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1902.8974675442455!2d106.61351400816454!3d17.46952639700737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3147576fd089fcd9%3A0xfe3cf888a0b803a!2zWU9EWSDEkOG7k25nIEjhu5tpIDI!5e0!3m2!1svi!2s!4v1639623075278!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Đồng Hới 2</b>
                      <p>59 Trần Hưng Đạo, Phường Đồng Phú, Đồng Hới, Quảng Bình</p>
                      <a href="tel:0812773259">0812773259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody kiến giang" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3810.904407093326!2d106.78889381521127!3d17.223426088177085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3140b12d61cc016b%3A0xf8fa9e7a6e9f921b!2sYODY%20Ki%E1%BA%BFn%20Giang!5e0!3m2!1svi!2s!4v1639623125446!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Kiến Giang</b>
                      <p>149 Hùng Vương, thị trấn Kiến Giang, huyện Lệ Thủy, tỉnh Quảng Bình</p>
                      <a href="tel:0888442259">0888442259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody ba đồn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3799.7592163415793!2d106.43079481521774!3d17.755980987858653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313899f0911002c1%3A0x9ddc1f0f13266d46!2zWU9EWSBCYSDEkOG7k24!5e0!3m2!1svi!2s!4v1639623168997!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Ba Đồn</b>
                      <p>196 Quang Trung, Phường Quảng Thọ, Thị Xã Ba Đồn, Tỉnh Quảng Bình</p>
                      <a href="tel:0888683259">0888683259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hoàn lão" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3803.471345179302!2d106.53399681521563!3d17.580338787963246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3138a7d21039119d%3A0xb3fa97e8ff0bcbc7!2zWU9EWSBIb8OgbiBMw6Nv!5e0!3m2!1svi!2s!4v1639623196599!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hoàn Lão</b>
                      <p>347 Hùng Vương - Thị trấn Hoàn Lão - huyện Bố Trạch - tỉnh Quảng Bình</p>
                      <a href="tel:0888360259">0888360259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody gia lai" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.769609140943!2d108.01315781517563!3d13.972314690205028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316c1f771b6e7023%3A0xd1a22b10da241872!2sYODY%20Gia%20Lai!5e0!3m2!1svi!2s!4v1639623225928!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Gia Lai</b>
                      <p>01 Lê Duẩn, phường Phù Đổng, TP Pleiku, Gia Lai</p>
                      <a href="tel:0819234259">0819234259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody an khê" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3872.1149570572125!2d108.65806111517543!3d13.95176019021827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316eddc0b798183d%3A0x4d20a726a363fe16!2sYODY%20An%20Kh%C3%AA!5e0!3m2!1svi!2s!4v1639623279213!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY An Khê</b>
                      <p>348 Quang Trung, thị xã An Khê, Gia Lai</p>
                      <a href="tel:0819334259">0819334259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody chư sê" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.391198395225!2d108.07491801517288!3d13.694740790384408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316e813d45e6ab57%3A0xc29d11f610515b17!2zWU9EWSBDaMawIFPDqg!5e0!3m2!1svi!2s!4v1639623301600!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Chư Sê</b>
                      <p>807A Hùng Vương, thị trấn Chư Sê, Huyện Chư Sê, tỉnh Gia Lai</p>
                      <a href="tel:0888161259">0888161259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody kỳ anh" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3792.9279783283832!2d106.2875858152218!3d18.07488858766996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3138890c887da2c7%3A0xd4007bd9a2d329bb!2zWU9EWSBL4buzIEFuaA!5e0!3m2!1svi!2s!4v1639623369902!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Kỳ Anh</b>
                      <p>Số 01 Việt Lào, phường Hưng Trí, thị xã Kỳ Anh, tỉnh Hà Tĩnh</p>
                      <a href="tel:0819324259">0819324259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hà tĩnh" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3787.071636748253!2d105.88796481522536!3d18.34401598751202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31384f7bcab0ab71%3A0x9ac8423d07db723b!2zWU9EWSBIw6AgVMSpbmg!5e0!3m2!1svi!2s!4v1639623401863!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hà Tĩnh</b>
                      <p>157 Trần Phú - TP Hà Tĩnh</p>
                      <a href="tel:0819404259">0819404259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody cẩm xuyên" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3789.1486247120697!2d105.99942271522404!3d18.249007087567666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31385b771efa1917%3A0xd70ae8f9a877d0e6!2zWU9EWSBD4bqpbSBYdXnDqm4!5e0!3m2!1svi!2s!4v1639623425326!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Cẩm Xuyên</b>
                      <p> 03 Trần Muông - thị trấn Cẩm Xuyên - huyện Cẩm Xuyên - Hà Tĩnh</p>
                      <a href="tel:0888381259">0888381259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hương khê" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3790.7869823136753!2d105.69941991522306!3d18.17372428761188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139ab96fb2fc389%3A0x574ba5f34dfb10f9!2zWU9EWSBIxrDGoW5nIEtow6o!5e0!3m2!1svi!2s!4v1639623476238!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hương Khê</b>
                      <p>376 Trần Phú, Thị Trấn Hương Khê, Tỉnh Hà Tĩnh</p>
                      <a href="tel:0888456259">0888456259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hồng lĩnh" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.977274112257!2d105.69847791522764!3d18.529929087403538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139cb4c1bb60bdf%3A0x53935cea28e4cd3a!2zWU9EWSBI4buTbmcgTMSpbmg!5e0!3m2!1svi!2s!4v1639623665381!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Hồng Lĩnh</b>
                      <p>58 Trần Phú, phường Bắc Hồng, Thị Xã Hồng Lĩnh, tỉnh Hà Tĩnh</p>
                      <a href="tel:0888727259">0888727259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody ngô mây" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.4003722264583!2d109.05621571517584!3d13.994258290190938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f3baf1ca82711%3A0x71567bf4106a4e35!2zWW9keSBOZ8O0IE3Donk!5e0!3m2!1svi!2s!4v1639623707325!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Ngô Mây</b>
                      <p>333 Quang Trung, Thị trấn Ngô Mây, Phù Cát, Bình Định</p>
                      <a href="tel:0888210259">0888210259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody an nhơn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123940.69396864997!2d109.04319435820312!3d13.890175900000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f3f07089930e5%3A0x4b5925bc1004fa33!2sYODY%20An%20Nh%C6%A1n!5e0!3m2!1svi!2s!4v1639623742564!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY An Nhơn</b>
                      <p>119 Trần Phú - Phường Bình Định -Thị xã An Nhơn - Tỉnh Bình Định</p>
                      <a href="tel:0888370259">0888370259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody bồng sơn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.837029387573!2d109.01591651518027!3d14.43655378990713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3168c5ac7a460d95%3A0xc6766a4d857bc7b4!2zWU9EWSBC4buTbmcgU8ahbg!5e0!3m2!1svi!2s!4v1639624046915!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Bồng Sơn</b>
                      <p>230 Quang Trung, Bồng Sơn, Bình Định</p>
                      <a href="tel:0888362259">0888362259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody quy nhơn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7750.607767525742!2d109.21567971868745!3d13.760539076731177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f6d1127eb9f75%3A0xc7b8a2f5a25a5142!2sYODY%20Quy%20Nh%C6%A1n!5e0!3m2!1svi!2s!4v1639624117388!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Quy Nhơn</b>
                      <p>16 Ngô Mây, phường Ngô Mây, TP Quy Nhơn, tỉnh Bình Địn</p>
                      <a href="tel:0888336259">0888336259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody quy nhơn 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.988686071816!2d109.22262101483068!3d13.779555490329393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x146f9db3bf32173a!2sYODY%20Quy%20Nh%C6%A1n%202!5e0!3m2!1svi!2s!4v1646450143493!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Quy Nhơn 2</b>
                      <p>số 442A đường Trần Hưng Đạo, phường Trần Hưng Đạo, thành phố Quy Nhơn, tỉnh Bình Định</p>
                      <a href="tel:0888589259">0888589259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody buôn ma thuột" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.3594595146947!2d108.04695301516355!3d12.68994559104114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3171f75583ce8309%3A0xabb13387ffecfc66!2zWU9EWSBCdcO0biBNYSBUaHXhu5l0!5e0!3m2!1svi!2s!4v1639624631995!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Buôn Ma Thuột</b>
                      <p>142 Phan Chu Trinh, Buôn Ma Thuột, Đắk Lắk</p>
                      <a href="tel:0888545259">0888545259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody buôn trấp" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3895.4752144712234!2d108.02751701516173!3d12.484629691176632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3172217a34b4b7cb%3A0x3baed9035dabfd53!2zWU9EWSBCdcO0biBUcuG6pXA!5e0!3m2!1svi!2s!4v1639624783547!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Buôn Trấp</b>
                      <p>01 - 03 Nguyễn Tất Thành, TT. Buôn Trấp, Huyện krong Ana, tỉnh ĐăkLak</p>
                      <a href="tel:0888356259">0888356259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody ea kar" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.484121161729!2d108.44869401516463!3d12.811962490960715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3171df4a5d1a4381%3A0xb6ae541539f1a54b!2sYODY%20Ea%20Kar!5e0!3m2!1svi!2s!4v1639624819976!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Ea Kar</b>
                      <p>143 Nguyễn Tất Thành, Thị trấn Eakar, Huyện Eakar, Đăklăk</p>
                      <a href="tel:0888561259">0888561259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody quảng phú" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249063.71171076782!2d108.05271247411955!3d12.738162728041033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3171ff3aa9cbcfc5%3A0xa0efdb74c30b821b!2zWU9EWSBRdeG6o25nIFBow7o!5e0!3m2!1svi!2s!4v1639624859866!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Quảng Phú</b>
                      <p>84-86 Hùng Vương, TT Quảng Phú, huyện Cưmgar, Đắk Lắk</p>
                      <a href="tel:0888691259">0888691259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody phước an" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.0390300124727!2d108.30026921516365!3d12.710875591027259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3171e578f0261515%3A0x9e99cc1a218be099!2zWU9EWSBQaMaw4bubYyBBbg!5e0!3m2!1svi!2s!4v1639624907540!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Phước An</b>
                      <p>279 Giải Phóng, Thị Trấn Phước An, Huyện Krông Pắc</p>
                      <a href="tel:0888342259">0888342259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody buôn hồ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124499.62025715095!2d108.08786760965938!3d12.803605098838597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316e1ddb374751dd%3A0x820f27df83b43fa7!2zWU9EWSBCdcO0biBI4buT!5e0!3m2!1svi!2s!4v1639624947849!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Buôn Hồ</b>
                      <p>43-45 Trần Hưng Đạo, Thị xã Buôn Hồ, Đắk Lắk</p>
                      <a href="tel:0888034259">0888034259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody kon tum" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.260356279002!2d108.00081876517947!3d14.35433888995972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316bffe4bd18e84d%3A0xfe45b53b96ba07d3!2sYODY%20KON%20TUM!5e0!3m2!1svi!2s!4v1639624973266!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Kon Tum</b>
                      <p>127 - 129 Lê Hồng Phong, P. Quyết Thắng, TP KonTum, Tỉnh KonTum</p>
                      <a href="tel:0888245259">0888245259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody phú yên" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7772.449927602855!2d109.3050705732923!3d13.08492422479217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316feda841dcacc9%3A0xd0e6d5aa99a1dfaf!2zWU9EWSBQaMO6IFnDqm4!5e0!3m2!1svi!2s!4v1639625000481!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Phú Yên</b>
                      <p>134-136 Trần Hưng Đạo, TP Tuy Hòa, Phú Yên</p>
                      <a href="tel:0888352259">0888352259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody vĩnh long" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.190515397736!2d105.97511481514373!3d10.246213392682629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a9d8adb496517%3A0xd4becb4ac6e5e140!2sYODY%20V%C4%A9nh%20Long!5e0!3m2!1svi!2s!4v1639625031795!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Vĩnh Long</b>
                      <p>55A Phạm Thái Bường, phường 4, TP Vĩnh Long, tỉnh Vĩnh Long</p>
                      <a href="tel:0834999258">0834999258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody bắc kạn" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7391.182444073686!2d105.83367649592122!3d22.141556171416852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cadfb863660317%3A0xd9d9af358d7666e6!2zWU9EWSBC4bqvYyBL4bqhbg!5e0!3m2!1svi!2s!4v1639625061897!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Bắc Kạn</b>
                      <p>Tổ 11A phường Đức Xuân, Thành phố Bắc Kạn, Bắc Kạn</p>
                      <a href="tel:0838367258">0838367258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody nha trang" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3898.9584736073166!2d109.1857941!3d12.2510895!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcb8c4db413db99e8!2sYODY%20Nha%20Trang!5e0!3m2!1svi!2s!4v1639625120695!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY Nha Trang</b>
                      <p>57 Lý Thánh Tôn, Phường Lộc Thọ, Thành Phố Nha Trang, Tỉnh Khánh Hòa</p>
                      <a href="tel:0888023259">0888023259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody cam ranh" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.861564411245!2d109.14102589999999!3d11.9147211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3170ed7b57a413e5%3A0x1c30bf6142a881c2!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgQ2FtIFJhbmg!5e0!3m2!1svi!2s!4v1669272900962!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Cam Ranh</b>
                      <p>Số 203 đường 22/08, phường Cam Lợi, tp Cam Ranh, tỉnh Khánh Hòa</p>
                      <a href="tel:0888619259">0888619259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody nha trang 2" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.0931553151977!2d109.1825102!3d12.2419715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x87a1dcc30c87fb6b!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgTmhhIFRyYW5nIDI!5e0!3m2!1svi!2s!4v1669604858668!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Nha Trang 2</b>
                      <p>217 Lê Hồng Phong, p. Phước Hòa, tp. Nha Trang, Khánh Hòa.</p>
                      <a href="tel:0888939259">0888939259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody 172 hoà bình" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.532002598334!2d106.62901991480068!3d10.770505692325514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x535252e91e22ac99!2zWU9EWSAxNzIgSG_DoCBCw6xuaA!5e0!3m2!1svi!2s!4v1646449681900!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;></iframe>">
                      <b>YODY 172 Hoà Bình</b>
                      <p>172 Hòa Bình, Tân Thới Hoà, Tân Phú, Thành phố Hồ Chí Minh</p>
                      <a href="tel:0859819258">0859819258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody nguyễn thị thập" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.941048762691!2d106.70616371480041!3d10.73902699234692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89b3fcb906942776!2zWU9EWSBOZ3V54buFbiBUaOG7iyBUaOG6rXA!5e0!3m2!1svi!2s!4v1648607739348!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Nguyễn Thị Thập</b>
                      <p>số 495 Nguyễn Thị Thập, phường Tân Phong, quận 7, thành phố Hồ Chí Minh</p>
                      <a href="tel:0886332258">0886332258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody tân sơn nhì" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2104647730093!2d106.6271785152573!3d10.795186392308823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529c553e1cfab%3A0xa45bb78326d3c707!2zWU9EWSBUw6JuIFPGoW4gTmjDrA!5e0!3m2!1svi!2s!4v1650254699505!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Tân Sơn Nhì</b>
                      <p>396 Tân Sơn Nhì ,Phường Tân Sơn Nhì, Quận Tân Phú, Thành phố Hồ Chí Minh</p>
                      <a href="tel:0886286258">0886286258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody cao lỗ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9383147802646!2d106.67941801480053!3d10.739237692346776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e0d6db650b0740!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgQ2FvIEzhu5c!5e0!3m2!1svi!2s!4v1651649682559!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Cao Lỗ</b>
                      <p>120 - 128 đường Cao Lỗ, phường 4, quận 8, HCM</p>
                      <a href="tel:0888598258">0888598258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thống nhất" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6522344022687!2d106.6649401!3d10.837903299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf40d67291e922715!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgVGjhu5FuZyBOaOG6pXQ!5e0!3m2!1svi!2s!4v1656989110617!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Thống Nhất</b>
                      <p>Số 239 -241-241A-241B Thống Nhất phường 11, quận Gò Vấp, thành phố Hồ Chí Minh</p>
                      <a href="tel:0816688258">0816688258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody phạm văn chiêu" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.478940502!2d106.65556989999999!3d10.8511303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x34c059249739fb0a!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgUGjhuqFtIFbEg24gQ2hpw6p1!5e0!3m2!1svi!2s!4v1660614473309!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Phạm Văn Chiêu</b>
                      <p>450 Phạm Văn Chiêu, Phường 9, Gò Vấp, Thành phố Hồ Chí Minh</p>
                      <a href="tel:0836125258">0836125258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody 651 hương lộ 3" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.07987415882!2d106.6085234!3d10.805194400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeeba49aa432fab88!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgNjUxIEjGsMahbmcgTOG7mSAz!5e0!3m2!1svi!2s!4v1667185753026!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY 651 Hương Lộ 3</b>
                      <p>651 Hương Lộ 3, Bình Hưng Hoà, Bình Tân, Thành phố Hồ Chí Minh</p>
                      <a href="tel:0816825258">0816825258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody bùi hữu nghĩa - quận 5" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.7741436514666!2d106.6750421!3d10.7518824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f85fe8b9edd%3A0xe89d4951a740a7e6!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgQsO5aSBI4buvdSBOZ2jEqWEgLSBRdeG6rW4gNQ!5e0!3m2!1svi!2s!4v1669272886325!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Bùi Hữu Nghĩa - Quận 5</b>
                      <p>Số 31 - 33 Bùi Hữu Nghĩa, Phường 5, Quận 5, Thành phố Hồ Chí Minh</p>
                      <a href="tel:0889963258">0889963258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody đà lạt" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.4408521065443!2d108.43197651481157!3d11.943949391535874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef81efb0387a93aa!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgxJDDoCBM4bqhdA!5e0!3m2!1svi!2s!4v1651649721511!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Đà Lạt</b>
                      <p>54B Phan Đình Phùng, phường 1, thành phố Đà Lạt, tỉnh Lâm Đồng</p>
                      <a href="tel:0888279259">0888279259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody liên nghĩa" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3906.4134911361125!2d108.3742527!3d11.735893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xba893dd8c060dc78!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgTGnDqm4gTmdoxKlh!5e0!3m2!1svi!2s!4v1658371288110!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Liên Nghĩa</b>
                      <p>số 25-27-29 Thống Nhất, Thị Trấn Liên Nghĩa, Đức Trọng, Lâm Đồng.</p>
                      <a href="tel:0888509259">0888509259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody di linh" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.4659938892573!2d108.0788939!3d11.590089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c521217ab71a98b!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgRGkgTGluaA!5e0!3m2!1svi!2s!4v1660614444296!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Di Linh</b>
                      <p>1046 Hùng Vương, tt Di Linh, huyện Di Linh, Lâm Đồng</p>
                      <a href="tel:0888508259">0888508259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody bảo lộc" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.133252807432!2d107.81162909999999!3d11.5422976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3173f7770562bf7b%3A0xbadb327c68e32ae0!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgQuG6o28gTOG7mWMgLSBMw6JtIMSQ4buTbmc!5e0!3m2!1svi!2s!4v1671417024613!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Bảo Lộc</b>
                      <p>103 Lê Hồng Phong, Phường 1, TP. Bảo Lộc, Lâm Đồng</p>
                      <a href="tel:0888578259">0888578259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody gia nghĩa" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3902.5006221537833!2d107.6839913!3d12.0090169!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc67d824ae30d42b7!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgR2lhIE5naMSpYQ!5e0!3m2!1svi!2s!4v1652757717075!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Gia Nghĩa</b>
                      <p>số 01 - 03 đường Chu Văn An, tổ dân phố 04, phường Nghĩa Thành, Thành phố Gia Nghĩa, tỉnh Đăk Nông</p>
                      <a href="tel:0888296259">0888296259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody thuận an" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.197294488212!2d106.73230199999999!3d10.948464300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfacf0358b24ba7d!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgVGh14bqtbiBBbg!5e0!3m2!1svi!2s!4v1662604200851!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Thuận An</b>
                      <p>đường 22/12, phường An Phú, thị xã Thuận An, tỉnh Bình Dương</p>
                      <a href="tel:0839313258">0839313258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody dĩ an" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.800672255541!2d106.7554181!3d10.902747999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4adec84347440a0!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgRMSpIEFu!5e0!3m2!1svi!2s!4v1667185776294!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Dĩ An</b>
                      <p>171 Đường Nguyễn Trãi - Phường Dĩ An - Thành Phố Dĩ An - tỉnh Bình Dương</p>
                      <a href="tel:0816333258">0816333258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody phan thiết" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.3723349395!2d108.1040177!3d10.935221400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc2675b336a6a5bc!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgUGhhbiBUaGnhur90!5e0!3m2!1svi!2s!4v1662604616909!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Phan Thiết</b>
                      <p>số 199-201 Trần Hưng Đạo, phường Phú Thủy, thành phố Phan Thiết, tỉnh Bình Thuận</p>
                      <a href="tel:0888238259">0888238259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody liên hương" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3913.4668191281717!2d108.72761249999999!3d11.2270299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3176d9085133286f%3A0x26f56e0e9390ce89!2zQ-G7rWEgaMOgbmcgdGjhu51pIHRyYW5nIFlPRFkgTGnDqm4gSMawxqFuZw!5e0!3m2!1svi!2s!4v1671415775591!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Liên Hương</b>
                      <p>23-24-25-26 Lê Duẩn, TT Liên Hương, huyện Tuy Phong, tỉnh Bình Thuận</p>
                      <a href="tel:0888676259">0888676259</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody nguyễn trãi - cần thơ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.663893512735!2d105.780851!3d10.044569099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf99f42b3273a7f5d!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgTmd1eeG7hW4gVHLDo2k!5e0!3m2!1svi!2s!4v1663124041244!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Nguyễn Trãi - Cần Thơ</b>
                      <p>90-92 Nguyễn Trãi - phường Cái Khế - quận Ninh Kiều, Cần Thơ</p>
                      <a href="tel:0888064258">0888064258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody 30/4 - cần thơ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.0643649359354!2d105.76022739999999!3d10.0115423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x216c003e312d7746!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgMzAvNA!5e0!3m2!1svi!2s!4v1663124157739!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY 30/4 - Cần Thơ</b>
                      <p>số 272 đường 30/4, phường Hưng Lợi, quận Ninh Kiều, Cần Thơ</p>
                      <a href="tel:0837184258">0837184258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody nguyễn văn cừ - cần thơ" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.600868219574!2d105.771687!3d10.049757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x223f7e046ab0f4cc!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgTmd1eeG7hW4gVsSDbiBD4burIC0gQ-G6p24gVGjGoQ!5e0!3m2!1svi!2s!4v1666073602856!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Nguyễn Văn Cừ - Cần Thơ</b>
                      <p>102 Nguyễn Văn Cừ - P. An Hoà - Q. Ninh Kiều - Cần Thơ</p>
                      <a href="tel:0838437258">0838437258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody hai bà trưng - long xuyên" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.5092974523927!2d105.4425945!3d10.3810638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x892e65d8a59bc0fc!2zQ-G7rWEgSMOgbmcgVGjhu51pIFRyYW5nIFlPRFkgSGFpIELDoCBUcsawbmcgLSBMb25nIFh1ecOqbg!5e0!3m2!1svi!2s!4v1666073584558!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Hai Bà Trưng - Long Xuyên</b>
                      <p>70-72 Hai Bà Trưng - P. Mỹ Long - TP. Long Xuyên - An Giang</p>
                      <a href="tel:0834074258">0834074258</a><span>Chỉ đường</span>
                   </li>
                   <li class="item" data-add="yody bạc liêu" data-map="<iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3937.4523800815987!2d105.7183962!3d9.2931228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a109d64d56d3b7%3A0x5e681ab109f119ff!2zQ-G7rWEgaMOgbmcgdGjhu51pIHRyYW5nIFlPRFkgQuG6oWMgTGnDqnU!5e0!3m2!1svi!2s!4v1670636678088!5m2!1svi!2s&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;></iframe>">
                      <b>YODY Bạc Liêu</b>
                      <p>63-65 Trần Huỳnh, Phường 7, Bạc Liêu</p>
                      <a href="tel:0837594258">0837594258</a><span>Chỉ đường</span>
                   </li>
                </ul>
                <span class="move"></span>
             </div>
          </div>
       </div>
    </div>
</section>
<script src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/tabletop.js?1672303543027" type="text/javascript"></script>
<script>
	$(".city .text").on("click", function(){
		$(".city .list-city").toggle();
	});
	$('.list-city .scroll').on('click','span',function(){
		var text = $(this).text();
		$(this).parents('.city').find('.text').text(text);
		$('.list-city .scroll span').removeClass('active');
		$(this).addClass('active');
	})
	$('.list-add .list').on('click',' ul li',function(){
		if ($(window).width() < 768) {
			$('.page-hethong .list-add').toggleClass('active');
		}
		var iframe = $(this).attr('data-map');
		$('#map').html(iframe);
	})
	$(document).ready(function (){
		var public_spreadsheet_url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vTowq1LY_JLF0pH9wVCi5Ei5jSHCZTFTouRgbR5o95rEmwCKrXSZxkI4Um-y2uOT96jcLwbHGkBtS5i/pub?output=csv";
		init_spreadsheet(public_spreadsheet_url);
	});
	$('#list-store').on('click','.item',function(){
		var $this = $(this);
		if (!$this.hasClass('unclick')) {
			$this.siblings().removeClass('checked');
			$this.addClass('checked');
			var code = $this.data('code');
			generateMap(code);
		}
	})
	$('.page-hethong .move').click(function(){
		$('.page-hethong .list-add').toggleClass('active');
	})
	function getAllCity(){
		$('#list-store').html('');
		$('.list-city .scroll span:not(:first-child)').remove();
		$('#map').html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.2143836810524!2d106.30362791533123!3d20.94390409604465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31359b93265f5767%3A0x12119d049cdfd294!2zQ8O0bmcgdHkgY-G7lSBwaOG6p24gdGjhu51pIHRyYW5nIFlPRFk!5e0!3m2!1svi!2s!4v1635388113543!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>');
					   var public_spreadsheet_url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vTowq1LY_JLF0pH9wVCi5Ei5jSHCZTFTouRgbR5o95rEmwCKrXSZxkI4Um-y2uOT96jcLwbHGkBtS5i/pub?output=csv";
					   init_spreadsheet(public_spreadsheet_url);
	}
	function filterItemInList(object) {
		var q = slug(object.val());
		object.next().find('.itemStore').show();
		if (q.length > 0) {
			object.next().find('.itemStore').each(function () {
				if ($(this).attr("data-filter").indexOf(q) == -1)
					$(this).hide();
			})
		}
	};
	function init_spreadsheet(public_spreadsheet_url) {
		Papa.parse(public_spreadsheet_url, {
			download: true,
			header: true,
			complete: function(results) {
				showInfo(results.data);
			}
		});
	}
	function showInfo(data, tabletop) {
		var stores_arr = data.reduce(function (acc, item) {
			var obj = [];
			var key = item.thanh_pho;
			obj.name = item.ten_cua_hang;
			obj.address = item.dia_chi;
			obj.phone = item.sdt;
			obj.map = item.ban_do;
			if (!acc[key]) {
				acc[key] = [];
			};
			acc[key].push({
				name: obj.name,
				address: obj.address,
				phone: obj.phone,
				map: obj.map,
			});
			return acc;
		}, {});
		store_generate(data,stores_arr);
	};
	function changeStore(val,data){
		var $liststore = $('#list-store');
		$liststore.html('');
		$.each(data[val], function (i, item) {
			var $item = "<li class='item' data-add='"+item.name.toLowerCase()+"' data-map='"+item.map+"'>"
			+ '<b>'+item.name+'</b>'
			+ '<p>'+item.address+'</p>'
			+ '<a href="tel:'+item.phone+'">'+item.phone+'</a>'
			+ '<span>Chỉ đường</span>'
			+ '</li>';
			$liststore.append($item)
		});
		$('#list-store .item:first-child').addClass('checked');
		dataLayer.push({
			'event': 'pangoTrack',
			'eventAction': 'StoreLocation',
			'cdpData': {
				properties: {
					'province': val,
					'storeName': $(".search-shop").val()
				}
			}
		})
	};
	function generateMap(code) {
		var map = document.getElementById('map').innerHTML = code;
		return map;
	};
	function store_generate(data, store) {
		var $selectcity = $('.list-city .scroll');
		var $liststore = $('#list-store');
		$.each(store, function (key, value) {
			$selectcity.append('<span data-value="' + key + '">' + key + '</span>');
		});
		var item;
		for(item in data) {
			var $item = "<li class='item' data-add='"+data[item].ten_cua_hang.toLowerCase()+"' data-map='"+data[item].ban_do+"'>"
			+ '<b>'+data[item].ten_cua_hang+'</b>'
			+ '<p>'+data[item].dia_chi+'</p>'
			+ '<a href="tel:'+data[item].sdt+'">'+data[item].sdt+'</a>'
			+ '<span>Chỉ đường</span>'
			+ '</li>';
			$liststore.append($item)
		}

		$('.list-city').on('click','span',function(){
			$('.city .list-city').hide();
			var city = $(this).data('value');
			if (city == 'all') {
				getAllCity();
			} else {
				changeStore(city,store);	
				generateMap($('#list-store .item:first-child').data('map'))
			}
		});
	};

	function filterItemInList(object) {
		q = object.val().toLowerCase();
		object.parents('.title').next().find('li').show();
		if (q.length > 0) {
			object.parents('.title').next().find('li').each(function() {
				if ($(this).attr("data-add").indexOf(q) == -1)
					$(this).hide();
			})
		}
	}
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/waypoints-min.js?1672303543027" type="text/javascript"></script>
<script src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/jquery-counterup-min.js?1672303543027" type="text/javascript"></script>
<script>
	$(document).ready(function(){
		$('.item .counter').counterUp({
			delay: 10,
			time: 1000
		});
	});
</script>
<script src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/search_smart.js?1672303543027" async defer></script>
@endsection