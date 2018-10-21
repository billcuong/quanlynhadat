
<section class="content">
    <div class="box-body">
        <div class="col-online-evaluation clearfix">
           
            <div class="title-group">
                <h1>Định giá Bất Động Sản trực tuyến</h1>
            </div>
            
            <p class="note" style="margin-top: 20px;">
                Chào mừng bạn đến với phần mềm định giá Bất Động Sản trực tuyến.<br>
                Bạn vui lòng thực hiện theo các bước sau và nhập các thông tin theo yêu cầu, phần mềm sẽ tự động phân tích từ những BĐS đang giao dịch trên thị trường để cho bạn kết quả định giá chính xác ngay tức thì.<br>
            </p>

            <div class="col-lg-10 col-md-12">
                <form class="form-horizontal" action="/dinh-gia-bat-dong-san" method="post" novalidate="novalidate">
                    <div class="estimate-tp-house" id="wizard">
                        <ol>
                            <!-- Loại hình BĐS -->
                            <li>
                                <h2 class="section-title"><span>Loại hình BĐS</span></h2>
                                <div class="row">
                                    <div class="col-md-6 col-lg-push-6 col-warning">
                                        <ul>
                                            <li>
                                                <label>Dấu<span>(*)</span></label>
                                                <p>Các mục có dấu (*) là bắt buộc nhập</p>
                                            </li>
                                            <li>
                                                <label>Hỗ trợ</label>
                                                <p>Hiện chỉ hỗ trợ dữ liệu để định giá tại một số quận trung tâm thuộc TP. HCM</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-pull-6">
                                        <!-- Loại nhà -->
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label required">Loại nhà</label>
                                            <div class="col-sm-6">
                                                <select name="HouseTypeCssClass" class="form-control valid" id="HouseTypeCssClass">
                                                    <option value="tp-none">Không có CTXD</option>
                                                    <option value="tp-house">Nhà phố</option>
                                                    <option value="tp-villa">Biệt thự</option>
                                                    <option value="tp-hotel">Khách sạn</option>
                                                    <option value="tp-warehouse">Kho xưởng</option>
                                                    <option value="tp-building">Cao ốc văn phòng</option>
                                                    <option value="tp-apartment">Căn hộ chung cư</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="HouseTypeCssClass">*</span>
                                            </div>
                                        </div>
                                        <!-- Loại đất -->
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label required" for="LandTypeCssClass">Loại đất</label>
                                            <div class="col-sm-6">
                                                <select name="LandTypeCssClass" class="form-control" id="LandTypeCssClass" required="required" data-val="true" data-val-required="Vui lòng chọn loại đất" data-msg-required="Vui lòng chọn loại đất">
                                                    <option value="">-- Vui lòng chọn --</option>
                                                    <option value="land-residential">Đất thổ cư</option>
                                                    <option value="land-annual-crops">Đất trồng cây hằng năm</option>
                                                    <option value="land-perennial-crops">Đất trồng cây lâu năm</option>
                                                    <option value="land-agricultural">Đất nông nghiệp khác</option>
                                                    <option value="land-forestry">Đất lâm nghiệp</option>
                                                    <option value="land-business">Đất sản xuất kinh doanh</option>
                                                    <option value="land-aquaculture">Đất nuôi trồng thuỷ sản</option>
                                                    <option value="land-non-agricultural">Đất phi nông nghiệp khác</option>
                                                    <option value="land-dedicated">Đất chuyên dụng</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="LandTypeCssClass">*</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Thông tin Địa chỉ BĐS -->
                            <li class="section-tp-house section-tp-apartment">
                                <h2 class="section-title">
                                    <span>Thông tin Địa chỉ BĐS</span>
                                </h2>
                                <div class="row">
                                    <div class="col-md-6 col-lg-push-6 col-warning">
                                        <ul>
                                            <li class="section-tp-house">
                                                <label>Lưu ý</label>
                                                <p>Nhập chính xác PHƯỜNG, SỐ NHÀ phần mềm mới định giá chính xác.</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-pull-6">
                                        <!-- Tỉnh / Thành Phố -->
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label required" for="ProvinceId">Tỉnh / Thành Phố:</label>
                                            <div class="col-sm-6">

                                                <div class="combobox-container combobox-selected">
                                                    <input name="ProvinceId" type="hidden" value="249" data-msg-required="Vui lòng chọn Tỉnh / Thành Phố">
                                                    <div class="input-group"> <input name="autocompleteProvinceId" class="form-control combobox" required="required" type="text" autocomplete="off" data-msg-required="Vui lòng chọn Tỉnh / Thành Phố"> <span class="btn input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div>
                                                </div><select class="form-control combobox" id="ProvinceId" style="display: none;" required="required" data-val-number="The field ProvinceId must be a number." data-val="true" data-val-required="Vui lòng chọn Tỉnh / Thành phố." placeholder="-- Tỉnh / Thành Phố --" data-msg-required="Vui lòng chọn Tỉnh / Thành Phố">
                                                    <option value="249">Tp. Hồ Chí Minh</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="ProvinceId">*</span>
                                                <label class="text-error collapse" for="autocompleteProvinceId"></label>
                                            </div>
                                        </div>
                                        <!-- Quận / Huyện -->
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label required" for="DistrictId">Quận / Huyện:</label>
                                            <div class="col-sm-6">
                                                <div class="combobox-container">
                                                    <input name="DistrictId" type="hidden" value="" data-msg-required="Vui lòng chọn Quận / Huyện">
                                                    <div class="input-group"> <input name="autocompleteDistrictId" class="form-control combobox" required="required" type="text" placeholder="-- Chọn Quận / Huyện --" autocomplete="off" data-msg-required="Vui lòng chọn Quận / Huyện"> <span class="btn input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div>
                                                </div><select class="form-control combobox" id="DistrictId" style="display: none;" required="required" data-val-number="The field DistrictId must be a number." data-val="true" data-val-required="Vui lòng chọn Quận / Huyện." placeholder="-- Quận / Huyện --" data-msg-required="Vui lòng chọn Quận / Huyện">
                                                    <option value="">-- Chọn Quận / Huyện --</option>
                                                    <option value="313">Quận 1</option>
                                                    <option value="314">Quận 2</option>
                                                    <option value="315">Quận 3</option>
                                                    <option value="316">Quận 4</option>
                                                    <option value="317">Quận 5</option>
                                                    <option value="318">Quận 6</option>
                                                    <option value="319">Quận 7</option>
                                                    <option value="320">Quận 8</option>
                                                    <option value="321">Quận 9</option>
                                                    <option value="322">Quận 10</option>
                                                    <option value="323">Quận 11</option>
                                                    <option value="324">Quận 12</option>
                                                    <option value="325">Quận Bình Tân</option>
                                                    <option value="326">Quận Bình Thạnh</option>
                                                    <option value="327">Quận Gò Vấp</option>
                                                    <option value="328">Quận Phú Nhuận</option>
                                                    <option value="329">Quận Tân Bình</option>
                                                    <option value="330">Quận Tân Phú</option>
                                                    <option value="331">Quận Thủ Đức</option>
                                                    <option value="332">Huyện Bình Chánh</option>
                                                    <option value="333">Huyện Cần Giờ</option>
                                                    <option value="334">Huyện Củ Chi</option>
                                                    <option value="335">Huyện Hóc Môn</option>
                                                    <option value="336">Huyện Nhà Bè</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="DistrictId">*</span>
                                                <label class="text-error collapse" for="autocompleteDistrictId"></label>
                                            </div>
                                        </div>
                                        <!-- Tên dự án / Chung cư -->
                                        <div class="form-group section-tp-apartment">
                                            <label class="col-sm-6 control-label" for="ApartmentId">Tên dự án / Chung cư:</label>
                                            <div class="col-sm-6">
                                                <div class="combobox-container">
                                                    <input name="ApartmentId" type="hidden" value="" data-msg-required="Vui lòng chọn Tên dự án / Chung cư">
                                                    <div class="input-group"> <input name="autocompleteApartmentId" class="form-control combobox" type="text" placeholder="-- Chọn Tên dự án / Chung cư --" autocomplete="off" data-msg-required="Vui lòng chọn Tên dự án / Chung cư"> <span class="btn input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div>
                                                </div><select class="form-control combobox" id="ApartmentId" style="display: none;" data-val-number="The field ApartmentId must be a number." data-val="true" placeholder="-- Tên dự án / Chung cư --" data-msg-required="Vui lòng chọn Tên dự án / Chung cư">
                                                    <option value="">-- Chọn Tên dự án / Chung cư --</option>
                                                    <option value="785704"> Căn hộ Vĩnh Tường</option>
                                                    <option value="1121152"> Carillon </option>
                                                    <option value="1114054"> CC1 - JOVITA Quận 7</option>
                                                    <option value="1114835"> Compound PARK RIVERSIDE </option>
                                                    <option value="1118788"> Depot Metro Tham Lương</option>
                                                    <option value="1118531"> Dự án Khu đô thị Nhân Phú</option>
                                                    <option value="611997"> Green Pearl City (C&amp;T Plaza)</option>
                                                    <option value="640818"> HIM LAM CHỢ LỚN</option>
                                                    <option value="1111231"> Hoàng Anh Thanh Bình</option>
                                                    <option value="1111296"> Khu phức hợp Jamona City</option>
                                                    <option value="1108651"> La Astoria</option>
                                                    <option value="1118442"> Mega Ruby Residence </option>
                                                    <option value="2399600"> Ngọc Đông Dương 2</option>
                                                    <option value="621217"> REE Tower</option>
                                                    <option value="1441539"> Saigon Pearl Apartment</option>
                                                    <option value="1119464"> SAIGONRES PLAZA </option>
                                                    <option value="1109349"> The GoldView</option>
                                                    <option value="638723"> The Hyco4 Tower</option>
                                                    <option value="1105443"> Vincom Center</option>
                                                    <option value="1374791"> Xi Grand Court</option>
                                                    <option value="1108691"> Dự án Chung cư Bộ Công An</option>
                                                    <option value="693821">109 Nguyễn Biểu</option>
                                                    <option value="653688">300 Bến Chương Dương</option>
                                                    <option value="614816">482 Võ Văn Kiệt</option>
                                                    <option value="895235">4S Riverside Garden Bình Triệu</option>
                                                    <option value="629048">4S Riverside Linh Đông</option>
                                                    <option value="613473">584 Lilama SHB Building</option>
                                                    <option value="631745">584 Tân Kiên</option>
                                                    <option value="613501">7A Thoại Ngọc Hầu</option>
                                                    <option value="611218">8X Đầm Sen </option>
                                                    <option value="774706">8X PLUS</option>
                                                    <option value="1156047">9 View Apartment</option>
                                                    <option value="2342116">Adi Lucky Home</option>
                                                    <option value="2340858">Akari City</option>
                                                    <option value="613456">An Bình</option>
                                                    <option value="810577">An Gia Garden</option>
                                                    <option value="967742">An Gia Riverside</option>
                                                    <option value="903354">An Gia Star</option>
                                                    <option value="1646404">An Hạ Riverside</option>
                                                    <option value="611954">An Khang Apartment</option>
                                                    <option value="642344">An Lạc Plaza</option>
                                                    <option value="611225">An Lộc </option>
                                                    <option value="637948">AN PHÚ 2 Apartment</option>
                                                    <option value="1111220">An Phú Apartment Complex</option>
                                                    <option value="611785">An Phú Plaza</option>
                                                    <option value="905847">An Phước - Incomex</option>
                                                    <option value="629072">An Sương Apartment</option>
                                                    <option value="905889">Angela Boutique Serviced Residence</option>
                                                    <option value="912226">Anh Tuấn Aparment</option>
                                                    <option value="774608">ANH TUẤN APARTMENT</option>
                                                    <option value="640660">Arista Villas</option>
                                                    <option value="611226">Âu Cơ Tower</option>
                                                    <option value="1156383">Auris City</option>
                                                    <option value="611746">Avalon Saigon Apartments</option>
                                                    <option value="653993">AVILA APARTMENTS</option>
                                                    <option value="611830">B1 Trường Sa</option>
                                                    <option value="611834">Bắc Bình</option>
                                                    <option value="895661">Bàu Cát II</option>
                                                    <option value="612103">Bảy Hiền Tower</option>
                                                    <option value="611972">Beau Rivage</option>
                                                    <option value="612097">Bee Home</option>
                                                    <option value="895551">Bee Home 2</option>
                                                    <option value="623872">Belleza Apartment</option>
                                                    <option value="611733">BEN THANH LUXURY</option>
                                                    <option value="626948">Bình An Apartment</option>
                                                    <option value="895123">Bình An Pearl</option>
                                                    <option value="626846">Bình An Plaza</option>
                                                    <option value="628308">Binh Chieu Apartment</option>
                                                    <option value="615286">Bình Minh</option>
                                                    <option value="642804">Bình Tân Apartment - Block A1</option>
                                                    <option value="650854">BÌNH TÂY PLAZA</option>
                                                    <option value="1106321">Bitexco Financial Tower</option>
                                                    <option value="637932">Blue Sapphire Bình Phú</option>
                                                    <option value="909600">Blue Star</option>
                                                    <option value="611744">BMC Bến Chương Dương</option>
                                                    <option value="611866">Botanic Towers</option>
                                                    <option value="611787">C.T Green</option>
                                                    <option value="903264">C.T Plaza Minh Châu</option>
                                                    <option value="1119489">C.T Plaza Nguyên Hồng</option>
                                                    <option value="785627">CĂN HỘ 12 VIEW</option>
                                                    <option value="862089">Căn hộ 155 Nguyễn Chí Thanh</option>
                                                    <option value="656104">Căn hộ 8X Đầm Sen</option>
                                                    <option value="1119203">CĂN HỘ 8X RAINBOW</option>
                                                    <option value="905058">Căn hộ 8X Thái An</option>
                                                    <option value="896148">Căn hộ Angia Star</option>
                                                    <option value="2438050">Căn Hộ Ascent Lakeside</option>
                                                    <option value="903390">Căn hộ Bình Khánh</option>
                                                    <option value="638033">Căn hộ cao cấp Ehome 5</option>
                                                    <option value="644906">CĂN HỘ CAO CẤP H3 HOÀNG DIỆU</option>
                                                    <option value="650426">CĂN HỘ CAO CẤP KHẢI HOÀN</option>
                                                    <option value="1419225">CĂN HỘ CAO CẤP LỮ GIA</option>
                                                    <option value="648865">CĂN HỘ CAO CẤP MINH THÀNH</option>
                                                    <option value="2344659">Căn hộ Charmington Iris</option>
                                                    <option value="613503">Căn hộ Đặng Thành</option>
                                                    <option value="645036">CĂN HỘ EMERALD APARTMENT</option>
                                                    <option value="2341768">Căn hộ Felisa Riverside</option>
                                                    <option value="2340998">Căn hộ Feliz En Vista</option>
                                                    <option value="1121354">căn hộ Fortuna</option>
                                                    <option value="1157971">CĂN HỘ GALAXY 9</option>
                                                    <option value="641046">căn hộ H1- Hoàng Diệu</option>
                                                    <option value="645239">CĂN HỘ H2 HOÀNG DIỆU</option>
                                                    <option value="613505">Căn hộ Hòa Bình</option>
                                                    <option value="671842">Căn hộ Hoa Sen</option>
                                                    <option value="788921">Căn hộ Hoàng Anh Gia Lai 2</option>
                                                    <option value="653512">CĂN HỘ HOÀNG ANH PHAN VĂN KHỎE</option>
                                                    <option value="1114588">Căn hộ Khang Gia</option>
                                                    <option value="680869">Căn hộ Kim Tân Hải</option>
                                                    <option value="680856">Căn hộ Lê Thị Riêng</option>
                                                    <option value="904932">Căn hộ Linh Tây</option>
                                                    <option value="815587">Căn hộ Masteri Thảo Điền</option>
                                                    <option value="611832">Căn Hộ Mỹ Đức</option>
                                                    <option value="794064">Căn hộ Mỹ Khang</option>
                                                    <option value="645130">CĂN HỘ NGỌC KHÁNH</option>
                                                    <option value="1109293">căn hộ Nguyễn Phúc Nguyên Quận 3</option>
                                                    <option value="641543">Căn hộ Nhất Lan 3</option>
                                                    <option value="2341258">Căn hộ Novaland Newberry Residence</option>
                                                    <option value="1152819">Căn hộ Park Vista</option>
                                                    <option value="622687">Căn hộ Phú Hoàng Anh</option>
                                                    <option value="2341792">Căn hộ Q7 SaiGon RiverSide</option>
                                                    <option value="1110697">Căn hộ Riva Park</option>
                                                    <option value="2341659">Căn hộ Saigon Manhattan</option>
                                                    <option value="2341942">Căn hộ Saigon Skyview</option>
                                                    <option value="904971">Căn hộ Saigonland</option>
                                                    <option value="1120869">Căn Hộ satra eximland </option>
                                                    <option value="903369">Căn hộ Sky Center</option>
                                                    <option value="2341723">CĂN HỘ SONATA RESIDENCES</option>
                                                    <option value="2340948">Căn Hộ TDH – RiverView</option>
                                                    <option value="1419258">CĂN HỘ Terra Rosa</option>
                                                    <option value="631242">Căn hộ Thái An</option>
                                                    <option value="785666">Căn hộ The CBD Premium Home</option>
                                                    <option value="2342068">Căn hộ The Green Star</option>
                                                    <option value="1121694">căn hộ The Mansion </option>
                                                    <option value="1109135">Căn hộ THE SUN AVENUE</option>
                                                    <option value="2344675">Căn hộ The View – Riviera Point</option>
                                                    <option value="774682">Căn hộ Triều An Tower Bình Tân</option>
                                                    <option value="613509">Căn hộ Vạn Gia Phúc</option>
                                                    <option value="623916">Cảnh viên 3</option>
                                                    <option value="611825">Cantavil Hoàn Cầu</option>
                                                    <option value="611980">Cantavil Premier</option>
                                                    <option value="653911">CAO ỐC 354 BẾN CHƯƠNG DƯƠNG</option>
                                                    <option value="904725">Cao ốc Bình Minh</option>
                                                    <option value="903304">Cao ốc BMC Hưng Long</option>
                                                    <option value="612043">Cao ốc Đại Thế Giới</option>
                                                    <option value="653681">CAO ỐC GARDEN VIEW</option>
                                                    <option value="640175">CAO ỐC HƯNG PHÁT</option>
                                                    <option value="612143">Cao ốc Phan Huy Ích</option>
                                                    <option value="903310">Cao ốc Phú Nhuận</option>
                                                    <option value="645262">CAO ỐC PHÚC THỊNH</option>
                                                    <option value="653783">CAO ỐC SGI</option>
                                                    <option value="895508">Cao ốc Sông Đà Tower</option>
                                                    <option value="903381">Cao ốc Thịnh Vượng</option>
                                                    <option value="621229">Cao ốc văn phòng G-Town</option>
                                                    <option value="612100">Carillon Apartment</option>
                                                    <option value="817996">Carillon City</option>
                                                    <option value="1371010">CARINA PLAZA</option>
                                                    <option value="1708812">CC1 - Felix Homes</option>
                                                    <option value="671951">CC1-JOVITA</option>
                                                    <option value="674058">CELADON CITY</option>
                                                    <option value="611738">Central Garden</option>
                                                    <option value="627019">Central Light Apartment</option>
                                                    <option value="612105">Central Plaza</option>
                                                    <option value="644285">Central Plaza</option>
                                                    <option value="626371">Chánh Hưng Giai Việt</option>
                                                    <option value="1156176">Charmington</option>
                                                    <option value="629415">Cheery 2 Apartment</option>
                                                    <option value="641289">Cheery 3 Apartment</option>
                                                    <option value="628202">Cheery 4 Complex</option>
                                                    <option value="612003">Cheery Apartment</option>
                                                    <option value="895525">Chung cư 107 Trương Định</option>
                                                    <option value="653770">CHUNG CƯ 10A TRẦN NHẬT DUẬT</option>
                                                    <option value="653757">CHUNG CƯ 1A - 1B</option>
                                                    <option value="904152">Chung cư 203 Nguyễn Trãi</option>
                                                    <option value="643035">Chung cư 35 Hồ Học Lãm</option>
                                                    <option value="905851">Chung cư 35 Hồ Ngọc Lãm</option>
                                                    <option value="905697">Chung cư 49/52 Âu Cơ</option>
                                                    <option value="793606">Chung Cư 6A Him Lam Trung Sơn</option>
                                                    <option value="614561">Chung cư 79C Phạm Vấn</option>
                                                    <option value="895631">Chung cư A.View</option>
                                                    <option value="626430">Chung cư An Sinh</option>
                                                    <option value="903977">Chung cư An Thịnh</option>
                                                    <option value="638793">Chung cư B1 Trường Sa</option>
                                                    <option value="650551">CHUNG CƯ BÌNH THỚI</option>
                                                    <option value="860677">Chung Cư Bình Tiên</option>
                                                    <option value="895119">Chung cư Bộ Công An</option>
                                                    <option value="653446">CHUNG CƯ CAO CẤP 224 AN DƯƠNG VƯƠNG</option>
                                                    <option value="650785">CHUNG CƯ CAO CẤP BIGEMCO</option>
                                                    <option value="644299">CHUNG CƯ CAO CẤP BÔNG SAO</option>
                                                    <option value="650659">CHUNG CƯ CAO CẤP CÂY MAI</option>
                                                    <option value="645277">CHUNG CƯ CAO CẤP KHÁNH HỘI 2</option>
                                                    <option value="905025">Chung cư Cao cấp Thọ Nam Sang</option>
                                                    <option value="775284">Chung cư Cửu Long</option>
                                                    <option value="612031">Chung cư Đào Duy Từ</option>
                                                    <option value="797598">Chung cư Đông Hưng</option>
                                                    <option value="650362">CHUNG CƯ ĐƯỜNG SẮT</option>
                                                    <option value="1114668">chung cư Gia Hòa The Art</option>
                                                    <option value="630413">Chung cư Hiệp Thành</option>
                                                    <option value="645215">CHUNG CƯ HỒNG LĨNH PLAZA</option>
                                                    <option value="653608">CHUNG CƯ KIẾN THÀNH</option>
                                                    <option value="650480">CHUNG CƯ LẠC LONG QUÂN</option>
                                                    <option value="642856">Chung cư Lê Thành - Block A2</option>
                                                    <option value="642859">Chung cư Lê Thành - Khu B</option>
                                                    <option value="626970">Chung cư Linh Trung</option>
                                                    <option value="653761">CHUNG CƯ LÝ VĂN PHỨC</option>
                                                    <option value="904692">Chung cư Man Thiện</option>
                                                    <option value="872359">Chung cư Miếu Nổi</option>
                                                    <option value="904919">Chung cư Mỹ An - 3G</option>
                                                    <option value="904948">Chung cư Mỹ Kim</option>
                                                    <option value="869784">Chung cư Mỹ Phước</option>
                                                    <option value="895246">Chung cư Ngô Gia Tự</option>
                                                    <option value="612033">Chung cư Ngô Gia Tự</option>
                                                    <option value="612040">Chung cư Nguyễn Chí Thanh</option>
                                                    <option value="616396">Chung cư Nguyễn Kim</option>
                                                    <option value="653823">CHUNG CƯ NGUYỄN THỊ NGHĨA</option>
                                                    <option value="611840">Chung cư Phú Đạt</option>
                                                    <option value="644228">Chung cư Phú Lợi D1</option>
                                                    <option value="650519">CHUNG CƯ PHÚ THỌ</option>
                                                    <option value="650490">CHUNG CƯ PHÚ THỌ THUẬN VIỆT</option>
                                                    <option value="729226">Chung cư Quân Sự</option>
                                                    <option value="620147">Chung Cư Sao Mai</option>
                                                    <option value="612047">Chung cư Sư Vạn Hạnh</option>
                                                    <option value="642468">Chung cư tái định cư Bắc Lương Bèo</option>
                                                    <option value="904643">Chung cư Tân Phước</option>
                                                    <option value="650908">CHUNG CƯ TÂN THỊNH LỢI</option>
                                                    <option value="1140712">Chung Cư TDH - Hiệp Phú</option>
                                                    <option value="629078">Chung cư Thạnh Lộc - First Home</option>
                                                    <option value="612027">Chung cư Thành Thái</option>
                                                    <option value="895255">Chung cư Thế Hệ Mới</option>
                                                    <option value="644362">chung cư Thế kỷ 21</option>
                                                    <option value="904978">Chung cư Thiên Quý</option>
                                                    <option value="741612">Chung cư Topaz Center</option>
                                                    <option value="650800">CHUNG CƯ TUỆ TĨNH</option>
                                                    <option value="621902">Chung cư Vạn Đô</option>
                                                    <option value="752779">Chung cư VIETHOME</option>
                                                    <option value="1643500">CHUNG CƯ VĨNH LỘC A</option>
                                                    <option value="945401">Chung cư Xóm Cải</option>
                                                    <option value="645138">CHUNG CƯ Z751</option>
                                                    <option value="628703">Chương Dương Golden Land</option>
                                                    <option value="1106909">Cinco Plaza</option>
                                                    <option value="904733">Citi Home</option>
                                                    <option value="810838">Citilight Tower</option>
                                                    <option value="2341205">Citrine Apartment</option>
                                                    <option value="611797">City Garden Avaneue</option>
                                                    <option value="611801">City Garden Boulevard </option>
                                                    <option value="611807">City Garden Crescent</option>
                                                    <option value="611805">City Garden Promenade</option>
                                                    <option value="626799">City Gate Towers</option>
                                                    <option value="795202">City Home</option>
                                                    <option value="1785717">CityLand Park Hills</option>
                                                    <option value="904163">Compass Living Park View</option>
                                                    <option value="612083">Cộng Hòa Garden</option>
                                                    <option value="612085">Cộng Hòa Plaza</option>
                                                    <option value="1121432">Conic Đông Nam Á</option>
                                                    <option value="631762">Conic Garden</option>
                                                    <option value="626268">Conic Gateway</option>
                                                    <option value="626287">Conic Riverside</option>
                                                    <option value="621779">Constrexim Square</option>
                                                    <option value="774655">CT Plaza Minh Châu</option>
                                                    <option value="643079">Cụm cao ốc Khu đô thị Tên Lửa</option>
                                                    <option value="650436">CỤM CAO ỐC TÂN PHƯỚC</option>
                                                    <option value="872465">Cửu Long</option>
                                                    <option value="642302">Da Sà Apartment</option>
                                                    <option value="611838">Đại An - Saigon Riverside</option>
                                                    <option value="814322">Đại Phúc Green Villas</option>
                                                    <option value="612079">Đầm Sen Complex</option>
                                                    <option value="611795">Đất Phương Nam Tower</option>
                                                    <option value="1156137">De Capella</option>
                                                    <option value="814433">Delta Riverside Tower</option>
                                                    <option value="903392">Detesco Lương Định Của</option>
                                                    <option value="612021">Detesco Tower</option>
                                                    <option value="815469">Diamond Island</option>
                                                    <option value="1339338">Diamond Lotus</option>
                                                    <option value="626666">Diamond Riverside</option>
                                                    <option value="626693">Diamond Riverside</option>
                                                    <option value="1106845">Diplomat Hotel</option>
                                                    <option value="671411">Dragon Hill Residence and Suites</option>
                                                    <option value="910355">Dragon PVFC Land</option>
                                                    <option value="895199">Dream Home 2</option>
                                                    <option value="630607">Dream Home Luxury Apartment</option>
                                                    <option value="1127413">Dream Home Palace quận 8</option>
                                                    <option value="903164">Dream Home Residence</option>
                                                    <option value="2437862">Dự án Aurora Residences</option>
                                                    <option value="2341974">Dự án căn hộ City Gate 3</option>
                                                    <option value="2504522">dự án Charmington Iris</option>
                                                    <option value="1167314">Dự án Orchard Park View‎</option>
                                                    <option value="1425878">Dự án PARCSPRING</option>
                                                    <option value="1167341">Dự án SUNRISE RIVERSIDE</option>
                                                    <option value="814496">Đức Khải Tower</option>
                                                    <option value="813992">Dương Hồng Garden House</option>
                                                    <option value="1106030">Eden Centre</option>
                                                    <option value="872374">Ehome 1</option>
                                                    <option value="640034">Ehome 2</option>
                                                    <option value="638564">Ehome 3 Tây Sài Gòn</option>
                                                    <option value="895082">Ehome 6 The Goflview</option>
                                                    <option value="626868">Elys Garden Apartment</option>
                                                    <option value="640690">Emerald Apartment</option>
                                                    <option value="622436">Era Town (Khu I)</option>
                                                    <option value="622463">Era Town (Khu III)</option>
                                                    <option value="643025">Everville</option>
                                                    <option value="611966">Fideco Riverview</option>
                                                    <option value="1114767">First Home Khang Việt</option>
                                                    <option value="795153">First Home Premium Bình Thạnh</option>
                                                    <option value="774744">First Home Thủ Đức</option>
                                                    <option value="861244">Fortune Aparment</option>
                                                    <option value="895244">Fortune Apartment</option>
                                                    <option value="2437626">Fuji Residence</option>
                                                    <option value="814122">Full House</option>
                                                    <option value="637896">Galaxy 9 Residence</option>
                                                    <option value="624807">Garden Court I</option>
                                                    <option value="624937">Garden Court II</option>
                                                    <option value="903313">Garden Gate</option>
                                                    <option value="794184">Garden Plaza 2</option>
                                                    <option value="625024">Garden Plaza I</option>
                                                    <option value="1108918">Gateway Thảo Điền</option>
                                                    <option value="814540">Gemadept Tower</option>
                                                    <option value="629163">Gia Định Plaza - Căn hộ </option>
                                                    <option value="629138">Gia Định Plaza - Trung tâm thương mại, văn phòng</option>
                                                    <option value="628691">Gia Phú Hưng</option>
                                                    <option value="640667">Gia Phú Khang</option>
                                                    <option value="1105282">Golden Mansion</option>
                                                    <option value="1105392">Golden Plaza</option>
                                                    <option value="1114628">GOOD HOUSE APARTMENT</option>
                                                    <option value="1156002">Gotec Apartment</option>
                                                    <option value="1473709">Green Building Quận 3</option>
                                                    <option value="638670">Green Hills</option>
                                                    <option value="904591">Green Home Residence</option>
                                                    <option value="895575">Green Park</option>
                                                    <option value="631375">Green Park Residences</option>
                                                    <option value="2340891">Green Star Sky Garden Quận 7</option>
                                                    <option value="625225">Green View</option>
                                                    <option value="905125">GreenView - Quận 9</option>
                                                    <option value="627012">Greenview Garden</option>
                                                    <option value="613496">Happy Plaza II</option>
                                                    <option value="794272">Happy Valley</option>
                                                    <option value="905129">Hậu Giang Plaza</option>
                                                    <option value="611752">HBT Court</option>
                                                    <option value="613490">Hiệp Tân Plaza</option>
                                                    <option value="626462">Him Lam Nam Khánh</option>
                                                    <option value="622078">Him Lam Riverside</option>
                                                    <option value="903209">Hòa Bình Green Park</option>
                                                    <option value="612054">Hoa Sen Apartment (Lotus)</option>
                                                    <option value="640107">Hoàng Anh An Tiến</option>
                                                    <option value="912220">Hoàng Anh Gold House</option>
                                                    <option value="815664">Hoàng Anh River View</option>
                                                    <option value="656201">Hoàng Anh Thanh Bình</option>
                                                    <option value="862067">Hoàng Tháp Plaza</option>
                                                    <option value="641353">Hóc Môn Plaza</option>
                                                    <option value="611215">Homyland 2</option>
                                                    <option value="611634">Homyland 3</option>
                                                    <option value="869703">Homyland 3</option>
                                                    <option value="895220">Hồng Hà Riverside</option>
                                                    <option value="611712">HORIZON Tower</option>
                                                    <option value="904548">HQC Hóc Môn</option>
                                                    <option value="640394">HT Apartment</option>
                                                    <option value="905049">Hưng Ngân Garden</option>
                                                    <option value="794537">Hưng Vượng</option>
                                                    <option value="1105485">Hùng Vương Plaza</option>
                                                    <option value="613677">Icon 56</option>
                                                    <option value="903251">I-Home 1</option>
                                                    <option value="611983">Imperia An Phú</option>
                                                    <option value="611716">Indochina Park Tower</option>
                                                    <option value="611779">Indochine Park Tower</option>
                                                    <option value="611781">Indochine Park Tower</option>
                                                    <option value="611748">International Plaza</option>
                                                    <option value="1106751">Intresco Plaza</option>
                                                    <option value="611870">Intresco Tower</option>
                                                    <option value="613048">Investco Babylon</option>
                                                    <option value="1156276">Jamona Apartment</option>
                                                    <option value="1106479">Khách sạn Hàng Không</option>
                                                    <option value="621279">Khahomex - Savico Tower</option>
                                                    <option value="630640">Khang Gia Apartment</option>
                                                    <option value="613488">Khang Phú Apartment</option>
                                                    <option value="862036">Khánh Hội 1</option>
                                                    <option value="621760">Khánh Hội 3</option>
                                                    <option value="2391119">Khu biệt thự Sol Villa</option>
                                                    <option value="653365">KHU CĂN HỘ 336 NGUYỄN VĂN LUÔNG</option>
                                                    <option value="905910">Khu căn hộ An Bình</option>
                                                    <option value="895560">Khu căn hộ Bình Phú</option>
                                                    <option value="788872">Khu căn hộ cao cấp Hoàng Anh – New Saigon</option>
                                                    <option value="646041">KHU CĂN HỘ CARINA PLAZA</option>
                                                    <option value="1365402">KHU CĂN HỘ CARINA PLAZA</option>
                                                    <option value="903162">Khu căn hộ Gia Tuệ Central Square</option>
                                                    <option value="903170">Khu căn hộ Hà Đô Green View</option>
                                                    <option value="645163">Khu Căn Hộ Hà Đô Nguyễn Văn Công</option>
                                                    <option value="645125">Khu Căn Hộ Hoàng Anh 3</option>
                                                    <option value="788965">Khu căn hộ Hoàng Anh River View</option>
                                                    <option value="905854">Khu căn hộ Hưng Phát</option>
                                                    <option value="626209">Khu căn hộ Lê Văn Lương</option>
                                                    <option value="631391">Khu căn hộ Nguyễn Thượng Hiền</option>
                                                    <option value="624568">Khu căn hộ Res III</option>
                                                    <option value="817989">Khu căn hộ River Terrace</option>
                                                    <option value="628733">Khu căn hộ Tam Bình</option>
                                                    <option value="611789">Khu căn hộ Trần Quốc Thảo</option>
                                                    <option value="642505">Khu cao ốc Hồng Tân</option>
                                                    <option value="653456">KHU CH SACOMREAL HÙNG VƯƠNG</option>
                                                    <option value="650821">KHU CHUNG CƯ CAO TẦNG MỸ LỘC</option>
                                                    <option value="788869">Khu Chung cư Sài Gòn Mới</option>
                                                    <option value="643096">Khu dân cư An Dương Vương</option>
                                                    <option value="905155">Khu dân cư An Phú</option>
                                                    <option value="905042">Khu dân cư An Sương</option>
                                                    <option value="815648">Khu dân cư Cát Lái Invesco</option>
                                                    <option value="2367653">Khu Dân Cư Thanh Niên - Garden Riverside Villas</option>
                                                    <option value="1140362">Khu phức hợp Centermark</option>
                                                    <option value="612075">Khu phức hợp Đầm Sen</option>
                                                    <option value="653555">KHU PHỨC HỢP LIÊN MINH BÌNH PHÚ</option>
                                                    <option value="629511">Kim Tâm Hải Apartment</option>
                                                    <option value="904545">Kingston Residence</option>
                                                    <option value="1105750">Kumho Asiana Plaza</option>
                                                    <option value="788835">La Astoria</option>
                                                    <option value="626187">La Casa</option>
                                                    <option value="786992">Lacasa</option>
                                                    <option value="626046">Lakeside Towers</option>
                                                    <option value="627944">Lan Phương MHBR Tower</option>
                                                    <option value="627956">Lan Phương Plaza</option>
                                                    <option value="1609301">Lancaster Lincoln</option>
                                                    <option value="611766">Lancaster Nguyễn Trãi Tower</option>
                                                    <option value="1105298">Landmark 81</option>
                                                    <option value="810912">Lant office building</option>
                                                    <option value="1139924">Lavita Garden</option>
                                                    <option value="814405">Le Meridien Sài Gòn</option>
                                                    <option value="631773">Lê Thành Tân Kiên</option>
                                                    <option value="641563">Lê Thành Twin Towers</option>
                                                    <option value="611772">Léman C.T Plaza</option>
                                                    <option value="895522">Leman Luxury Apartments</option>
                                                    <option value="611952">Lexington Residence</option>
                                                    <option value="814095">Liberty Central Riverside</option>
                                                    <option value="810877">Lim Tower</option>
                                                    <option value="641377">Long Phụng Apartment</option>
                                                    <option value="673302">Long Phụng Residence</option>
                                                    <option value="904960">Lotus Apartment</option>
                                                    <option value="613471">Lotus Garden</option>
                                                    <option value="653811">LTT COURT</option>
                                                    <option value="611723">Lữ Gia Plaza</option>
                                                    <option value="613492">Lucky Apartment</option>
                                                    <option value="795106">Lucky Dragon</option>
                                                    <option value="795050">Lucky Palace</option>
                                                    <option value="1111101">Lucky Palace</option>
                                                    <option value="1113935">LuxCity</option>
                                                    <option value="1646349">Luxgarden</option>
                                                    <option value="653872">MaiHarLan</option>
                                                    <option value="612008">May Apartments</option>
                                                    <option value="613468">MB Babylon</option>
                                                    <option value="905137">Mega Tower</option>
                                                    <option value="902598">Melody Residences</option>
                                                    <option value="1140444">Melosa Garden</option>
                                                    <option value="645182">METRO APARTMENT</option>
                                                    <option value="1366515">Metro Tower</option>
                                                    <option value="630967">Mikasa Apartment</option>
                                                    <option value="869779">Mikasa Tower</option>
                                                    <option value="912246">Minh Tâm Apartment</option>
                                                    <option value="621773">Moon Garden</option>
                                                    <option value="611811">Morning Star Plaza</option>
                                                    <option value="895213">Moscow Tower</option>
                                                    <option value="794172">Mỹ Cảnh</option>
                                                    <option value="794294">Mỹ Đức</option>
                                                    <option value="625737">Mỹ Đức Apartment</option>
                                                    <option value="947041">Mỹ Khang</option>
                                                    <option value="794201">Mỹ Khánh 1</option>
                                                    <option value="794205">Mỹ Khánh 2</option>
                                                    <option value="794208">Mỹ Khánh 3</option>
                                                    <option value="627706">Mỹ Long Building</option>
                                                    <option value="794131">Mỹ Phát</option>
                                                    <option value="625284">Mỹ Phát Apartment</option>
                                                    <option value="624387">Mỹ Phú Apartment</option>
                                                    <option value="626170">Mỹ Phú Riverpark</option>
                                                    <option value="794244">Mỹ Phúc</option>
                                                    <option value="794223">Mỹ Phước</option>
                                                    <option value="611849">Mỹ Phước</option>
                                                    <option value="794139">Mỹ Viên</option>
                                                    <option value="895656">Nam Minh Long</option>
                                                    <option value="611735">New Generation Apartment</option>
                                                    <option value="903259">New Peal Residence</option>
                                                    <option value="611783">New Pearl Residence</option>
                                                    <option value="1490235">Newton Residence</option>
                                                    <option value="628283">Newtown Apartment</option>
                                                    <option value="641595">Ngọc Đông Dương Apartment</option>
                                                    <option value="642286">Ngọc Đông Dương Apartment</option>
                                                    <option value="872221">NGỌC KHÁNH TOWER</option>
                                                    <option value="623967">Ngọc Lan Apartment</option>
                                                    <option value="626299">Ngọc Phương Nam</option>
                                                    <option value="611750">Nguyen Du Park Villas</option>
                                                    <option value="611935">Nguyễn Ngọc Phương</option>
                                                    <option value="642995">Nguyễn Quyền Plaza</option>
                                                    <option value="611221">Nguyễn Văn Công (Hà Đô)</option>
                                                    <option value="1371123">Nguyễn Văn Công (Hà Đô)</option>
                                                    <option value="642977">Nhất Lan Apartment</option>
                                                    <option value="905611">Nhu Ngoc Residence</option>
                                                    <option value="642288">Nhựt Quang Apartment</option>
                                                    <option value="653881">NVN COURT</option>
                                                    <option value="2342041">Opal Premium</option>
                                                    <option value="904582">Opal Riverside</option>
                                                    <option value="912207">OPC EximLand Building</option>
                                                    <option value="903318">Orchard Garden</option>
                                                    <option value="621336">Orient Apartment</option>
                                                    <option value="637821">PARC SPRING</option>
                                                    <option value="612019">Parc Spring</option>
                                                    <option value="611213">ParcSpring</option>
                                                    <option value="625763">Park View</option>
                                                    <option value="611956">Parkland Apartments</option>
                                                    <option value="626811">Peridot Building</option>
                                                    <option value="612006">Petroland Apartment</option>
                                                    <option value="622050">Petroland Tower</option>
                                                    <option value="1107588">Petrosetco Tower</option>
                                                    <option value="611995">PetroVietNam Landmark</option>
                                                    <option value="640908">Phố đông hoa sen</option>
                                                    <option value="1118838">Phú An Center</option>
                                                    <option value="895530">Phú Gia Hưng Apartment</option>
                                                    <option value="626828">Phú Lợi 1 Apartment</option>
                                                    <option value="612141">Phú Long Apartment</option>
                                                    <option value="644339">Phu Nhuan Plaza</option>
                                                    <option value="613458">Phú Thạnh Apartment</option>
                                                    <option value="628794">Phúc Lộc Thọ</option>
                                                    <option value="611217">Phúc Yên 2</option>
                                                    <option value="672329">Phước Kiển Sun City</option>
                                                    <option value="612024">Phước Long Spring Town</option>
                                                    <option value="1107661">Pico Plaza Sài Gòn</option>
                                                    <option value="611770">PNT Court</option>
                                                    <option value="611862">PNTechcons Tower</option>
                                                    <option value="1121015">PNTechcons Tower</option>
                                                    <option value="814287">Pullman Saigon Centre</option>
                                                    <option value="628693">PV Green House</option>
                                                    <option value="1961654">QH 930ha trung tâm HCM</option>
                                                    <option value="613465">Quang Thái Tower</option>
                                                    <option value="624288">Quốc Cường Gia Lai 1</option>
                                                    <option value="905147">Quốc Cường Gia Lai 2</option>
                                                    <option value="612017">Regency Park</option>
                                                    <option value="643105">Richland Emerald</option>
                                                    <option value="1156497">Richstar</option>
                                                    <option value="1337071">River City</option>
                                                    <option value="611960">River Garden Executive Residences</option>
                                                    <option value="795138">River Gate</option>
                                                    <option value="1140626">River Gate Residence </option>
                                                    <option value="1105247">River Gate Residence</option>
                                                    <option value="794309">Riverpark Residence</option>
                                                    <option value="910303">Riverscape South</option>
                                                    <option value="628227">Riverside Garden</option>
                                                    <option value="794553">Riverside Residence</option>
                                                    <option value="624031">Riviera Point</option>
                                                    <option value="1589549">ROSENA</option>
                                                    <option value="622009">Royal Tower</option>
                                                    <option value="895640">Ruby Garden</option>
                                                    <option value="1121268">ruby land</option>
                                                    <option value="613463">Sacomreal 584 Building</option>
                                                    <option value="613494">Sacomreal Hòa Bình</option>
                                                    <option value="797584">Sài Gòn Apartment</option>
                                                    <option value="643043">Sài Gòn Green II</option>
                                                    <option value="1108002">Sài Gòn Paragon</option>
                                                    <option value="611823">Sài Gòn Pearl</option>
                                                    <option value="640252">SAIGON AIRPORT PLAZA</option>
                                                    <option value="1106288">Saigon Centre </option>
                                                    <option value="653862">SAIGON CITY RESIDENCE</option>
                                                    <option value="611836">Saigon Domaine</option>
                                                    <option value="788906">SAIGON LAND APARTMENT ( D2 HOÀN CẦU )</option>
                                                    <option value="1139978">Saigon Mia</option>
                                                    <option value="2344616">SaiGon Mystery Villas</option>
                                                    <option value="810927">Saigon One Tower</option>
                                                    <option value="611776">Saigon Pavillon</option>
                                                    <option value="611813">Saigon Pearl - Sapphire </option>
                                                    <option value="611768">Saigon Plaza</option>
                                                    <option value="987551">Saigon Plaza Tower</option>
                                                    <option value="814371">Saigon Trade Center</option>
                                                    <option value="611718">Sailing Tower</option>
                                                    <option value="1119479">Samland Airport</option>
                                                    <option value="611844">SamLand River View</option>
                                                    <option value="626396">Sao Mai Tower</option>
                                                    <option value="1108986">Sarimi Khu đô thị Sala</option>
                                                    <option value="611854">Satra Citiland Plaza</option>
                                                    <option value="611868">Satra Eximland</option>
                                                    <option value="611227">Savimex (Ng.Phúc.Nguyên)</option>
                                                    <option value="794164">Scenic Valley</option>
                                                    <option value="611990">Screc II Tower</option>
                                                    <option value="611774">Screc Tower</option>
                                                    <option value="611754">Sedona Suites HCM</option>
                                                    <option value="666868">Sen Hồng</option>
                                                    <option value="611847">SGC Bình Quới 2</option>
                                                    <option value="611793">SGC Nguyễn Cửu Vân</option>
                                                    <option value="625768">Sky Garden 1</option>
                                                    <option value="625815">Sky Garden 2</option>
                                                    <option value="625836">Sky Garden 3</option>
                                                    <option value="872201">Skyland Residence</option>
                                                    <option value="895115">Skyway Residence</option>
                                                    <option value="795039">Skyway Tower</option>
                                                    <option value="903270">Soho Riverview</option>
                                                    <option value="1119372">SOHO RIVERVIEW.</option>
                                                    <option value="611756">Somerset Chancellor Court</option>
                                                    <option value="611759">Somerset Ho Chi Minh City</option>
                                                    <option value="631342">Sông Đà IDC Tower</option>
                                                    <option value="627909">Sông Đà Riverside - An Vui 1</option>
                                                    <option value="627922">Sông Đà Riverside - An Vui 2,3,4,5</option>
                                                    <option value="2341671">South Gate Tower</option>
                                                    <option value="622333">Southern Palace</option>
                                                    <option value="626435">Sovrano Plaza</option>
                                                    <option value="616079">SPLENDOR</option>
                                                    <option value="611761">Spring Court</option>
                                                    <option value="612012">Spring Life</option>
                                                    <option value="681077">SSG Tower</option>
                                                    <option value="622535">Star</option>
                                                    <option value="624002">Star Hill</option>
                                                    <option value="895239">Sun View 1 &amp; 2</option>
                                                    <option value="638824">SUNNY PLAZA</option>
                                                    <option value="638502">Sunrise City - Tháp Central</option>
                                                    <option value="638171">Sunrise City - Tháp North</option>
                                                    <option value="622395">Sunsire City</option>
                                                    <option value="630582">Sunview 3 Apartment</option>
                                                    <option value="627812">Sunview Apartment</option>
                                                    <option value="627791">Sunview Town</option>
                                                    <option value="612037">Tản Đà Court</option>
                                                    <option value="612045">Tản Đà Plaza</option>
                                                    <option value="611216">Tân Hương Tower (Chương Dương Garden)</option>
                                                    <option value="642486">Tân Mai Apartment</option>
                                                    <option value="1107922">Tân Phong Shopping Complex</option>
                                                    <option value="642971">Tân Tạo 1 Apartment</option>
                                                    <option value="641484">Tân Tạo Apartment</option>
                                                    <option value="895583">Tân Tạo Plaza</option>
                                                    <option value="638543">Tăng Phú House</option>
                                                    <option value="613483">TANI Building Sơn Kỳ</option>
                                                    <option value="645413">TANIBUILDING SƠN KỲ 1</option>
                                                    <option value="612139">Tanimex</option>
                                                    <option value="1114978">TDH – Phước Long</option>
                                                    <option value="627880">TDH - Trường Thọ</option>
                                                    <option value="905920">TDH Phúc Thịnh Đức</option>
                                                    <option value="910336">TDH Phước Bình</option>
                                                    <option value="640755">TDH Trường Thọ </option>
                                                    <option value="640829">Tecco Green Nest</option>
                                                    <option value="628153">Tecco Tower</option>
                                                    <option value="644937">Terra Rosa</option>
                                                    <option value="645025">Thái An Apartment</option>
                                                    <option value="629092">Thái An Apartment</option>
                                                    <option value="895783">Thái Sơn Apartment</option>
                                                    <option value="612092">Thái Sơn Plaza</option>
                                                    <option value="653645">Thang Long Land Star</option>
                                                    <option value="611842">Thanh Đa Pearl</option>
                                                    <option value="611828">Thanh Đa View</option>
                                                    <option value="611988">Thảo Điền Pearl (Thảo Điền Apartment)</option>
                                                    <option value="794037">The Ascent</option>
                                                    <option value="1114402">The Avila</option>
                                                    <option value="626877">The Bella Vista</option>
                                                    <option value="1167456">The Botanica</option>
                                                    <option value="638554">The Eastern</option>
                                                    <option value="612081">The Era Lạc Long Quân</option>
                                                    <option value="624450">The Era Royal Plaza</option>
                                                    <option value="611968">The Estella</option>
                                                    <option value="612051">The EverRich</option>
                                                    <option value="903993">The EverRich 3</option>
                                                    <option value="878162">The Everrich Central</option>
                                                    <option value="1110960">The Everrich Infinity</option>
                                                    <option value="612057">The Flemington Tower</option>
                                                    <option value="641556">The Golden Dynasty (Hoàng Kim Thế Gia)</option>
                                                    <option value="625904">The Grand View</option>
                                                    <option value="1114427">The Green View</option>
                                                    <option value="612094">The Harmona</option>
                                                    <option value="895596">The Hollywood Tower</option>
                                                    <option value="611809">The Hyco4 Tower</option>
                                                    <option value="895173">The Krista</option>
                                                    <option value="611721">The Lancaster HCM</option>
                                                    <option value="2388119">The Manor 1</option>
                                                    <option value="631786">The Mansion</option>
                                                    <option value="611546">The Morning Star Plaza</option>
                                                    <option value="869744">The Morning Star Plaza</option>
                                                    <option value="794123">The Panorama</option>
                                                    <option value="1105356">The Park Avenue</option>
                                                    <option value="640145">The Park Residence</option>
                                                    <option value="1490263">The Pegasuite</option>
                                                    <option value="611856">The Prince Residence_ Khu 1</option>
                                                    <option value="611859">The Prince Residence_Khu 2</option>
                                                    <option value="613486">The Rubyland</option>
                                                    <option value="631305">The Splendor</option>
                                                    <option value="872318">The Sun Avenue</option>
                                                    <option value="869758">The Tresor</option>
                                                    <option value="1423436">The Vesta Hà Đông, tòa V3 Prime</option>
                                                    <option value="611986">The Vista</option>
                                                    <option value="2444856">The Western Capital </option>
                                                    <option value="630666">Thiên Lộc Tower</option>
                                                    <option value="1118578">Thiên Nam Apatement</option>
                                                    <option value="815745">Thien Son Building</option>
                                                    <option value="611993">Thịnh Vượng Apartment</option>
                                                    <option value="612000">Thủ Thiêm Star</option>
                                                    <option value="611977">Thủ Thiêm Xanh</option>
                                                    <option value="612049">Thuận Kiều Plaza</option>
                                                    <option value="612029">Tie Tower</option>
                                                    <option value="752927">Times Square</option>
                                                    <option value="613507">Titco Plaza</option>
                                                    <option value="1114522">Topaz City</option>
                                                    <option value="741573">Topaz Garden</option>
                                                    <option value="611974">Tropic Garden Residence</option>
                                                    <option value="653655">TTTM - CHCC RICHLAND EMERALD</option>
                                                    <option value="612107">U-Garden Complex</option>
                                                    <option value="626206">USilk Apartment</option>
                                                    <option value="611852">V_Center</option>
                                                    <option value="611764">Valentina Court</option>
                                                    <option value="626897">Vạn Hưng Phát Apartment</option>
                                                    <option value="612010">Veronica Apartments</option>
                                                    <option value="626753">Vị trí: Ba Tơ, phường 7, Quận 8 , TP.HCM</option>
                                                    <option value="611864">Victoria Court</option>
                                                    <option value="613499">Việt Phát Tower</option>
                                                    <option value="814273">Vietcombank Tower</option>
                                                    <option value="1107415">Viettel Trade Center</option>
                                                    <option value="611964">Vinaconex Thảo Điền</option>
                                                    <option value="1107200">VinaSquare</option>
                                                    <option value="1106447">Vincom Financial Tower</option>
                                                    <option value="872195">Vinhomes Central Park</option>
                                                    <option value="794695">Vinhomes Central Park</option>
                                                    <option value="1338753">Vinhomes Đồng Khởi</option>
                                                    <option value="1339079">Vinhomes Golden River</option>
                                                    <option value="741765">Vista Verde</option>
                                                    <option value="629473">Võ Đình Apartment</option>
                                                    <option value="611742">VRG River View</option>
                                                    <option value="872430">VStar</option>
                                                    <option value="895555">Waseco Building</option>
                                                    <option value="2341996">West Intela</option>
                                                    <option value="895195">Wilton Tower</option>
                                                    <option value="1283574">XI GRAND COURT</option>
                                                    <option value="611702">XI RIVERVIEW PALACE</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="ApartmentId">*</span>
                                                <label class="text-error collapse" for="autocompleteApartmentId"></label>
                                            </div>
                                        </div>
                                        <!-- Block dự án / Chung cư -->
                                        <!-- Phường / Xã -->
                                        <div class="form-group section-tp-house">
                                            <label class="col-sm-6 control-label required" for="WardId">Phường / Xã:</label>
                                            <div class="col-sm-6">
                                                <div class="combobox-container">
                                                    <input name="WardId" type="hidden" value="" data-msg-required="Vui lòng chọn Phường / Xã">
                                                    <div class="input-group"> <input name="autocompleteWardId" class="form-control combobox" required="required" type="text" placeholder="-- Chọn Phường / Xã --" autocomplete="off" data-msg-required="Vui lòng chọn Phường / Xã"> <span class="btn input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div>
                                                </div><select class="form-control combobox" id="WardId" style="display: none;" required="required" data-val-number="The field WardId must be a number." data-val="true" placeholder="-- Phường / Xã --" data-msg-required="Vui lòng chọn Phường / Xã">
                                                    <option value="">-- Chọn Phường / Xã --</option>
                                                    <option value="1163">Phường An Lạc</option>
                                                    <option value="140385">Phường Bình Trị Đông A</option>
                                                    <option value="1625399">Xã Tân Hiệp</option>
                                                    <option value="1326">Phường Hiệp Phước</option>
                                                    <option value="1295">Xã An Nhơn Tây</option>
                                                    <option value="1288">Xã An Thới Đông</option>
                                                    <option value="1315">Phường Bà Điểm</option>
                                                    <option value="140453">Phường An Lạc A</option>
                                                    <option value="1172">Phường 1</option>
                                                    <option value="1121">Phường 1</option>
                                                    <option value="1152">Phường An Phú Đông</option>
                                                    <option value="1200">Phường 1</option>
                                                    <option value="1217">Phường 1</option>
                                                    <option value="1234">Phường 1</option>
                                                    <option value="1261">Phường Bình Chiểu</option>
                                                    <option value="140535">Phường Hiệp Thành</option>
                                                    <option value="1249">Phường Bình Thới</option>
                                                    <option value="1250">Phường Hiệp Tân</option>
                                                    <option value="1273">Xã An Phú Tây</option>
                                                    <option value="1000">Phường Bến Nghé</option>
                                                    <option value="1010">Phường An Khánh</option>
                                                    <option value="1035">Phường 1</option>
                                                    <option value="1021">Phường 1</option>
                                                    <option value="1053">Phường 1</option>
                                                    <option value="1082">Phường Bình Thuận</option>
                                                    <option value="1092">Phường 1</option>
                                                    <option value="1068">Phường 1</option>
                                                    <option value="1108">Phường Hiệp Phú</option>
                                                    <option value="1136">Phường 1</option>
                                                    <option value="1144">Phường 2</option>
                                                    <option value="1109">Phường Long Bình</option>
                                                    <option value="1128">Phường 2</option>
                                                    <option value="1100">Phường 2</option>
                                                    <option value="1083">Phường Phú Mỹ</option>
                                                    <option value="1045">Phường 2</option>
                                                    <option value="1060">Phường 2</option>
                                                    <option value="1074">Phường 2</option>
                                                    <option value="1027">Phường 2</option>
                                                    <option value="1011">Phường An Lợi Đông</option>
                                                    <option value="1001">Phường Bến Thành</option>
                                                    <option value="1274">Xã Bình Hưng</option>
                                                    <option value="1251">Phường Hòa Thạnh</option>
                                                    <option value="1262">Phường Bình Thọ</option>
                                                    <option value="1226">Phường 2</option>
                                                    <option value="1241">Phường 2</option>
                                                    <option value="1209">Phường 2</option>
                                                    <option value="1183">Phường 2</option>
                                                    <option value="1153">Phường Đông Hưng Thuận</option>
                                                    <option value="1164">Phường Bình Hưng Hòa</option>
                                                    <option value="1316">Phường Đông Thạnh</option>
                                                    <option value="1289">Xã Bình Khánh</option>
                                                    <option value="1296">Xã An Phú</option>
                                                    <option value="1327">Phường Long Thới</option>
                                                    <option value="1328">Phường Nhơn Đức</option>
                                                    <option value="1297">Xã Bình Mỹ</option>
                                                    <option value="1290">Xã Cần Thạnh</option>
                                                    <option value="1317">Phường Nhị Bình</option>
                                                    <option value="1165">Phường Bình Hưng Hòa A</option>
                                                    <option value="1154">Phường Hiệp Thành</option>
                                                    <option value="1210">Phường 3</option>
                                                    <option value="1242">Phường 3</option>
                                                    <option value="1227">Phường 3</option>
                                                    <option value="1193">Phường 3</option>
                                                    <option value="1263">Phường Hiệp Bình Chánh</option>
                                                    <option value="1252">Phường Phú Thạnh</option>
                                                    <option value="1275">Xã Bình Lợi</option>
                                                    <option value="1002">Phường Cầu Kho</option>
                                                    <option value="1012">Phường An Phú</option>
                                                    <option value="1028">Phường 3</option>
                                                    <option value="1075">Phường 3</option>
                                                    <option value="1061">Phường 3</option>
                                                    <option value="1046">Phường 3</option>
                                                    <option value="1084">Phường Phú Thuận</option>
                                                    <option value="1101">Phường 3</option>
                                                    <option value="1129">Phường 3</option>
                                                    <option value="1110">Phường Long Phước</option>
                                                    <option value="1145">Phường 3</option>
                                                    <option value="1146">Phường 4</option>
                                                    <option value="1111">Phường Long Thạnh Mỹ</option>
                                                    <option value="1130">Phường 4</option>
                                                    <option value="1102">Phường 4</option>
                                                    <option value="1085">Phường Tân Hưng</option>
                                                    <option value="1047">Phường 4</option>
                                                    <option value="1062">Phường 4</option>
                                                    <option value="1076">Phường 4</option>
                                                    <option value="1029">Phường 4</option>
                                                    <option value="1013">Phường Bình An</option>
                                                    <option value="1003">Phường Cầu Ông Lãnh</option>
                                                    <option value="1276">Xã Đa Phước</option>
                                                    <option value="1253">Phường Phú Thọ Hòa</option>
                                                    <option value="1264">Phường Hiệp Bình Phước</option>
                                                    <option value="1194">Phường 4</option>
                                                    <option value="1228">Phường 4</option>
                                                    <option value="1243">Phường 4</option>
                                                    <option value="1211">Phường 4</option>
                                                    <option value="1155">Phường Tân Chánh Hiệp</option>
                                                    <option value="1166">Phường Bình Hưng Hòa B</option>
                                                    <option value="1318">Phường Tân Hiệp</option>
                                                    <option value="1291">Xã Long Hòa</option>
                                                    <option value="1298">Xã Hoà Phú</option>
                                                    <option value="1329">Phường Phú Xuân</option>
                                                    <option value="1330">Phường Phước Kiểng</option>
                                                    <option value="1299">Xã Nhuận Đức</option>
                                                    <option value="1292">Xã Lý Nhơn</option>
                                                    <option value="1319">Phường Tân Thới Nhì</option>
                                                    <option value="1167">Phường Bình Trị Đông</option>
                                                    <option value="1156">Phường Tân Hưng Thuận</option>
                                                    <option value="1212">Phường 5</option>
                                                    <option value="1244">Phường 5</option>
                                                    <option value="1229">Phường 5</option>
                                                    <option value="1195">Phường 5</option>
                                                    <option value="1265">Phường Linh Chiểu</option>
                                                    <option value="1254">Phường Phú Trung</option>
                                                    <option value="1277">Xã Hưng Long</option>
                                                    <option value="1004">Phường Cô Giang</option>
                                                    <option value="1014">Phường Bình Khánh</option>
                                                    <option value="1030">Phường 5</option>
                                                    <option value="1077">Phường 5</option>
                                                    <option value="1063">Phường 5</option>
                                                    <option value="1048">Phường 5</option>
                                                    <option value="1086">Phường Tân Kiểng</option>
                                                    <option value="1103">Phường 5</option>
                                                    <option value="1131">Phường 5</option>
                                                    <option value="1112">Phường Long Trường</option>
                                                    <option value="1147">Phường 5</option>
                                                    <option value="1148">Phường 6</option>
                                                    <option value="1113">Phường Phú Hữu</option>
                                                    <option value="1132">Phường 6</option>
                                                    <option value="1104">Phường 6</option>
                                                    <option value="1087">Phường Tân Phong</option>
                                                    <option value="1049">Phường 6</option>
                                                    <option value="1064">Phường 6</option>
                                                    <option value="1078">Phường 6</option>
                                                    <option value="1031">Phường 6</option>
                                                    <option value="1015">Phường Bình Trưng Đông</option>
                                                    <option value="1005">Phường Đa Kao</option>
                                                    <option value="1278">Xã Lê Minh Xuân</option>
                                                    <option value="1255">Phường Sơn Kỳ</option>
                                                    <option value="1266">Phường Linh Ðông</option>
                                                    <option value="1196">Phường 6</option>
                                                    <option value="1230">Phường 6</option>
                                                    <option value="1245">Phường 6</option>
                                                    <option value="1213">Phường 6</option>
                                                    <option value="1157">Phường Tân Thới Hiệp</option>
                                                    <option value="1168">Phường Bình Trị Đông A</option>
                                                    <option value="1320">Phường Tân Xuân</option>
                                                    <option value="1293">Xã Tam Thôn Hiệp</option>
                                                    <option value="1300">Xã Phạm Văn Cội</option>
                                                    <option value="1331">Phường Phước Lộc</option>
                                                    <option value="140649">Thị trấn Nhà Bè</option>
                                                    <option value="1301">Xã Phú Hoà Đông</option>
                                                    <option value="1294">Xã Thạnh An</option>
                                                    <option value="1321">Phường Thới Tam Thôn</option>
                                                    <option value="1169">Phường Bình Trị Đông B</option>
                                                    <option value="1158">Phường Tân Thới Nhất</option>
                                                    <option value="1214">Phường 7</option>
                                                    <option value="1246">Phường 7</option>
                                                    <option value="1231">Phường 7</option>
                                                    <option value="1197">Phường 7</option>
                                                    <option value="1267">Phường Linh Tây</option>
                                                    <option value="1256">Phường Tân Quý</option>
                                                    <option value="1279">Xã Phạm Văn Hai</option>
                                                    <option value="1006">Phường Nguyễn Cư Trinh</option>
                                                    <option value="1016">Phường Bình Trưng Tây</option>
                                                    <option value="1032">Phường 7</option>
                                                    <option value="1079">Phường 7</option>
                                                    <option value="1065">Phường 7</option>
                                                    <option value="1050">Phường 7</option>
                                                    <option value="1088">Phường Tân Phú</option>
                                                    <option value="1105">Phường 7</option>
                                                    <option value="1133">Phường 7</option>
                                                    <option value="1114">Phường Phước Bình</option>
                                                    <option value="1149">Phường 7</option>
                                                    <option value="1150">Phường 8</option>
                                                    <option value="1115">Phường Phước Long A</option>
                                                    <option value="1134">Phường 8</option>
                                                    <option value="1106">Phường 8</option>
                                                    <option value="1089">Phường Tân Quy</option>
                                                    <option value="1051">Phường 8</option>
                                                    <option value="1066">Phường 8</option>
                                                    <option value="1080">Phường 8</option>
                                                    <option value="1033">Phường 8</option>
                                                    <option value="1017">Phường Cát Lái</option>
                                                    <option value="1007">Phường Nguyễn Thái Bình</option>
                                                    <option value="1280">Xã Phong Phú</option>
                                                    <option value="1257">Phường Tân Sơn Nhì</option>
                                                    <option value="1268">Phường Linh Trung</option>
                                                    <option value="1198">Phường 8</option>
                                                    <option value="1232">Phường 8</option>
                                                    <option value="1247">Phường 8</option>
                                                    <option value="1215">Phường 8</option>
                                                    <option value="1159">Phường Thạnh Lộc</option>
                                                    <option value="1170">Phường Tân Tạo</option>
                                                    <option value="1322">Phường Trung Chánh</option>
                                                    <option value="140567">Xã Tam Hiệp</option>
                                                    <option value="1302">Xã Phú Mỹ Hưng</option>
                                                    <option value="1303">Xã Phước Hiệp</option>
                                                    <option value="1323">Phường Xuân Thới Đông</option>
                                                    <option value="1171">Phường Tân Tạo A</option>
                                                    <option value="1160">Phường Thạnh Xuân</option>
                                                    <option value="1216">Phường 9</option>
                                                    <option value="1248">Phường 9</option>
                                                    <option value="1233">Phường 9</option>
                                                    <option value="1199">Phường 9</option>
                                                    <option value="1269">Phường Linh Xuân</option>
                                                    <option value="1258">Phường Tân Thành</option>
                                                    <option value="1281">Xã Qui Đức</option>
                                                    <option value="1008">Phường Phạm Ngũ Lão</option>
                                                    <option value="1018">Phường Thạnh Mỹ Lợi</option>
                                                    <option value="1034">Phường 9</option>
                                                    <option value="1081">Phường 9</option>
                                                    <option value="1067">Phường 9</option>
                                                    <option value="1052">Phường 9</option>
                                                    <option value="1090">Phường Tân Thuận Đông</option>
                                                    <option value="1107">Phường 9</option>
                                                    <option value="1135">Phường 9</option>
                                                    <option value="1116">Phường Phước Long B</option>
                                                    <option value="1151">Phường 9</option>
                                                    <option value="1137">Phường 10</option>
                                                    <option value="1117">Phường Tân Phú</option>
                                                    <option value="1069">Phường 10</option>
                                                    <option value="1091">Phường Tân Thuận Tây</option>
                                                    <option value="1093">Phường 10</option>
                                                    <option value="1054">Phường 10</option>
                                                    <option value="1022">Phường 10</option>
                                                    <option value="1036">Phường 10</option>
                                                    <option value="1019">Phường Thảo Điền</option>
                                                    <option value="1009">Phường Tân Định</option>
                                                    <option value="1282">Xã Tân Kiên</option>
                                                    <option value="1259">Phường Tân Thới Hòa</option>
                                                    <option value="1270">Phường Tam Bình</option>
                                                    <option value="1235">Phường 10</option>
                                                    <option value="1218">Phường 10</option>
                                                    <option value="1201">Phường 10</option>
                                                    <option value="1161">Phường Thới An</option>
                                                    <option value="1122">Phường 10</option>
                                                    <option value="1173">Phường 10</option>
                                                    <option value="1324">Phường Xuân Thới Sơn</option>
                                                    <option value="1304">Xã Phước Thạnh</option>
                                                    <option value="1305">Xã Phước Vĩnh An</option>
                                                    <option value="1325">Phường Xuân Thới Thượng</option>
                                                    <option value="140388">Phường Tân Kiên</option>
                                                    <option value="1174">Phường 11</option>
                                                    <option value="1123">Phường 11</option>
                                                    <option value="1162">Phường Trung Mỹ Tây</option>
                                                    <option value="1202">Phường 11</option>
                                                    <option value="1219">Phường 11</option>
                                                    <option value="1236">Phường 11</option>
                                                    <option value="1271">Phường Tam Phú</option>
                                                    <option value="1260">Phường Tây Thạnh</option>
                                                    <option value="1283">Xã Tân Nhựt</option>
                                                    <option value="1020">Phường Thủ Thiêm</option>
                                                    <option value="1037">Phường 11</option>
                                                    <option value="1023">Phường 11</option>
                                                    <option value="1055">Phường 11</option>
                                                    <option value="1094">Phường 11</option>
                                                    <option value="1070">Phường 11</option>
                                                    <option value="1118">Phường Tăng Nhơn Phú A</option>
                                                    <option value="1138">Phường 11</option>
                                                    <option value="1139">Phường 12</option>
                                                    <option value="1119">Phường Tăng Nhơn Phú B</option>
                                                    <option value="1071">Phường 12</option>
                                                    <option value="1095">Phường 12</option>
                                                    <option value="1056">Phường 12</option>
                                                    <option value="1024">Phường 12</option>
                                                    <option value="1038">Phường 12</option>
                                                    <option value="1284">Xã Tân Quý Tây</option>
                                                    <option value="1272">Phường Trường Thọ</option>
                                                    <option value="1237">Phường 12</option>
                                                    <option value="1220">Phường 12</option>
                                                    <option value="1203">Phường 12</option>
                                                    <option value="1124">Phường 12</option>
                                                    <option value="140449">Phường Tân Thới Nhì</option>
                                                    <option value="1175">Phường 12</option>
                                                    <option value="140625">Thị trấn Hóc Môn</option>
                                                    <option value="1306">Xã Tân An Hội</option>
                                                    <option value="1307">Xã Tân Phú Trung</option>
                                                    <option value="140626">Xã Hưng Lân</option>
                                                    <option value="1176">Phường 13</option>
                                                    <option value="140450">Phường 11</option>
                                                    <option value="1125">Phường 13</option>
                                                    <option value="1204">Phường 13</option>
                                                    <option value="1221">Phường 13</option>
                                                    <option value="1238">Phường 13</option>
                                                    <option value="140516">Phường 11</option>
                                                    <option value="140540">Phường Tam Hải</option>
                                                    <option value="1285">Xã Tân Túc</option>
                                                    <option value="1039">Phường 13</option>
                                                    <option value="1025">Phường 13</option>
                                                    <option value="1057">Phường 13</option>
                                                    <option value="1096">Phường 13</option>
                                                    <option value="1072">Phường 13</option>
                                                    <option value="1120">Phường Trường Thạnh</option>
                                                    <option value="1140">Phường 13</option>
                                                    <option value="1141">Phường 14</option>
                                                    <option value="1073">Phường 14</option>
                                                    <option value="140392">Phường Phú Trung</option>
                                                    <option value="1097">Phường 14</option>
                                                    <option value="1058">Phường 14</option>
                                                    <option value="1026">Phường 14</option>
                                                    <option value="1040">Phường 14</option>
                                                    <option value="1286">Xã Vĩnh Lộc A</option>
                                                    <option value="140517">Phường 14</option>
                                                    <option value="1239">Phường 14</option>
                                                    <option value="1222">Phường 14</option>
                                                    <option value="1205">Phường 14</option>
                                                    <option value="1126">Phường 14</option>
                                                    <option value="140451">Phường 12</option>
                                                    <option value="1177">Phường 14</option>
                                                    <option value="140627">Tân Chánh Hiệp</option>
                                                    <option value="1308">Xã Tân Thạnh Đông</option>
                                                    <option value="1309">Xã Tân Thạnh Tây</option>
                                                    <option value="140628">Xã Thới Tứ</option>
                                                    <option value="1178">Phường 15</option>
                                                    <option value="140452">Phường 17</option>
                                                    <option value="1127">Phường 15</option>
                                                    <option value="1206">Phường 15</option>
                                                    <option value="1223">Phường 15</option>
                                                    <option value="1240">Phường 15</option>
                                                    <option value="140521">Phường 16</option>
                                                    <option value="1287">Xã Vĩnh Lộc B</option>
                                                    <option value="1041">Phường 15</option>
                                                    <option value="1059">Phường 15</option>
                                                    <option value="140383">Phường 15</option>
                                                    <option value="1098">Phường 15</option>
                                                    <option value="140434">Phường Thạnh Mỹ Lợi</option>
                                                    <option value="1142">Phường 15</option>
                                                    <option value="1143">Phường 16</option>
                                                    <option value="140435">Phường Phước Long</option>
                                                    <option value="1099">Phường 16</option>
                                                    <option value="1042">Phường 16</option>
                                                    <option value="140559">Xã Bình Chánh</option>
                                                    <option value="140529">Phường 17</option>
                                                    <option value="140468">Phường 16</option>
                                                    <option value="1224">Phường 16</option>
                                                    <option value="1207">Phường 16</option>
                                                    <option value="1179">Phường 16</option>
                                                    <option value="1310">Xã Tân Thông Hội</option>
                                                    <option value="1311">Xã Thái Mỹ</option>
                                                    <option value="1180">Phường 17</option>
                                                    <option value="1208">Phường 17</option>
                                                    <option value="1225">Phường 17</option>
                                                    <option value="140472">Phường 17</option>
                                                    <option value="140530">Phường 18</option>
                                                    <option value="140560">Xã Bình Hưng Hòa</option>
                                                    <option value="1043">Phường 17</option>
                                                    <option value="140436">Phường 9</option>
                                                    <option value="140391">Xã Bình Hưng</option>
                                                    <option value="140441">Phường 17</option>
                                                    <option value="140442">Phường 26</option>
                                                    <option value="140437">Phường 6</option>
                                                    <option value="1044">Phường 18</option>
                                                    <option value="140561">Thị trấn Tân Túc</option>
                                                    <option value="140531">Phường 19</option>
                                                    <option value="140473">Phường 18</option>
                                                    <option value="1181">Phường 18</option>
                                                    <option value="1312">Xã Trung An</option>
                                                    <option value="1313">Xã Trung Lập Hạ</option>
                                                    <option value="1182">Phường 19</option>
                                                    <option value="140474">Phường 19</option>
                                                    <option value="140532">Phường 20</option>
                                                    <option value="140562">Xã Tân Tạo</option>
                                                    <option value="140563">Xã An Lạc</option>
                                                    <option value="140533">Phường Phú Hòa Thạnh</option>
                                                    <option value="140479">Phường 20</option>
                                                    <option value="1184">Phường 20</option>
                                                    <option value="1314">Xã Trung Lập Thượng</option>
                                                    <option value="140618">Thị trấn Củ Chi</option>
                                                    <option value="1185">Phường 21</option>
                                                    <option value="140480">Phường Phú Thạnh</option>
                                                    <option value="140534">Phường Bình Trị Đông</option>
                                                    <option value="140481">Phường Tân Quý</option>
                                                    <option value="1186">Phường 22</option>
                                                    <option value="140619">Xã An Hội</option>
                                                    <option value="140620">Xuân Thạnh Đông</option>
                                                    <option value="1187">Phường 23</option>
                                                    <option value="1188">Phường 24</option>
                                                    <option value="1189">Phường 25</option>
                                                    <option value="1190">Phường 26</option>
                                                    <option value="1191">Phường 27</option>
                                                    <option value="1192">Phường 28</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="WardId">*</span>
                                                <label class="text-error collapse" for="autocompleteWardId"></label>
                                            </div>
                                        </div>
                                        <!-- Đường / Phố -->
                                        <div class="form-group section-tp-house">
                                            <label class="col-sm-6 control-label required" for="StreetId">Đường / Phố:</label>
                                            <div class="col-sm-6">
                                                <div class="combobox-container">
                                                    <input name="StreetId" type="hidden" value="" data-msg-required="Vui lòng chọn Đường / Phố">
                                                    <div class="input-group"> <input name="autocompleteStreetId" class="form-control combobox" required="required" type="text" placeholder="-- Chọn Đường / Phố --" autocomplete="off" data-msg-required="Vui lòng chọn Đường / Phố"> <span class="btn input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div>
                                                </div><select class="form-control combobox" id="StreetId" style="display: none;" required="required" data-val-number="The field StreetId must be a number." data-val="true" placeholder="-- Đường / Phố --" data-msg-required="Vui lòng chọn Đường / Phố">
                                                    <option value="">-- Chọn Đường / Phố --</option>
                                                    <option value="629665"> Nguyễn Thế Truyện</option>
                                                    <option value="1774065">152 Cao Lỗ</option>
                                                    <option value="6325">30 tháng 4</option>
                                                    <option value="171933">49</option>
                                                    <option value="1832461">525 </option>
                                                    <option value="4646">Alexandre De Rhodes</option>
                                                    <option value="5040">An Bình</option>
                                                    <option value="5041">An Điềm</option>
                                                    <option value="5042">An Dương Vương</option>
                                                    <option value="1040780">An Dương Vương</option>
                                                    <option value="640831">An Dương Vương</option>
                                                    <option value="6640">An Hạ</option>
                                                    <option value="5939">An Hội</option>
                                                    <option value="5940">An Nhơn</option>
                                                    <option value="6899">An Nhơn Tây</option>
                                                    <option value="636740">An Phú</option>
                                                    <option value="140785">An Phú</option>
                                                    <option value="636697">An Phú - An Khánh</option>
                                                    <option value="140818">An Phú Tây</option>
                                                    <option value="6641">An Phú Tây-Hưng Long</option>
                                                    <option value="6858">An Thới Đông</option>
                                                    <option value="5614">Ấn Văn Hóa</option>
                                                    <option value="5615">Ao Đôi</option>
                                                    <option value="5616">Ao Sen</option>
                                                    <option value="6095">Ấp Bắc</option>
                                                    <option value="5617">Ấp Chiến Lược</option>
                                                    <option value="6997">Ấp Dân Thắng 1</option>
                                                    <option value="6998">Ấp Dân Thắng 2</option>
                                                    <option value="6999">Ấp Đình 4 (Tân Xuân)</option>
                                                    <option value="140760">Ấp Mỹ Hòa I</option>
                                                    <option value="1002793">Ấp Ông Nhiêu</option>
                                                    <option value="7000">Ấp Tam Đông</option>
                                                    <option value="992906">Ấp Tân Thới 2</option>
                                                    <option value="1625401">Ấp Thới Tây 1</option>
                                                    <option value="992636">Ấp Thới Tây 3</option>
                                                    <option value="7001">Ấp Thống Nhất 2-Nhị Tân 1</option>
                                                    <option value="140761">Ấp Tiền Lân</option>
                                                    <option value="6096">Âu Cơ</option>
                                                    <option value="6326">Âu Cơ</option>
                                                    <option value="1798518">Âu Cơ</option>
                                                    <option value="5268">Âu Dương Lân</option>
                                                    <option value="6642">Bà Cả</option>
                                                    <option value="6643">Bà Điểm</option>
                                                    <option value="140762">Bà Điểm</option>
                                                    <option value="7002">Bà Điểm 2</option>
                                                    <option value="7003">Bà Điểm 5</option>
                                                    <option value="7004">Bà Điểm 6</option>
                                                    <option value="7005">Bà Điểm 7</option>
                                                    <option value="7006">Bà Điểm 8</option>
                                                    <option value="5269">Ba Đình</option>
                                                    <option value="6097">Ba Gia</option>
                                                    <option value="140878">Bà Giang</option>
                                                    <option value="5432">Bà Hạt</option>
                                                    <option value="5138">Bà Hom</option>
                                                    <option value="4905">Bà Huyện Thanh Quan</option>
                                                    <option value="5139">Bà Ký</option>
                                                    <option value="5140">Bà Lài</option>
                                                    <option value="4647">Bà Lê Chân</option>
                                                    <option value="6644">Bà Thao</option>
                                                    <option value="6900">Bà Thiên</option>
                                                    <option value="188204">Ba tơ</option>
                                                    <option value="5043">Bà Triệu</option>
                                                    <option value="7007">Bà Triệu</option>
                                                    <option value="6098">Ba Vân</option>
                                                    <option value="6099">Ba Vì</option>
                                                    <option value="5433">Ba Vì</option>
                                                    <option value="6859">Bà Xán</option>
                                                    <option value="140883">Bác Ái</option>
                                                    <option value="6327">Bác Ái</option>
                                                    <option value="6100">Bắc Hải</option>
                                                    <option value="5434">Bắc Hải</option>
                                                    <option value="5435">Bắc Hải (nối Dài)</option>
                                                    <option value="5837">Bạch Đằng</option>
                                                    <option value="6101">Bạch Đằng</option>
                                                    <option value="5941">Bạch Đằng</option>
                                                    <option value="6102">Bạch Đằng 2</option>
                                                    <option value="5436">Bạch Mã</option>
                                                    <option value="5044">Bạch Vân</option>
                                                    <option value="5045">Bãi Sậy</option>
                                                    <option value="5141">Bãi Sậy</option>
                                                    <option value="4906">Bàn Cờ</option>
                                                    <option value="6103">Bành Văn Trân</option>
                                                    <option value="2344549">Bát Nàn</option>
                                                    <option value="6104">Bàu Bàng</option>
                                                    <option value="6105">Bàu Cát</option>
                                                    <option value="6106">Bàu Cát 1</option>
                                                    <option value="6107">Bàu Cát 2</option>
                                                    <option value="6108">Bàu Cát 3</option>
                                                    <option value="6109">Bàu Cát 4</option>
                                                    <option value="6110">Bàu Cát 5</option>
                                                    <option value="6111">Bàu Cát 6</option>
                                                    <option value="6112">Bàu Cát 7</option>
                                                    <option value="6113">Bàu Cát 8</option>
                                                    <option value="6114">Bàu cát 9</option>
                                                    <option value="6645">Bàu Gốc</option>
                                                    <option value="6901">Bàu Lách</option>
                                                    <option value="6902">Bàu Trăm</option>
                                                    <option value="6903">Bàu Tre</option>
                                                    <option value="1474020">Bảy Hiền</option>
                                                    <option value="6115">Bế Văn Đàn</option>
                                                    <option value="1391636">Bến Bình Đông</option>
                                                    <option value="5270">Bến Cần Giuộc</option>
                                                    <option value="6116">Bến Cát</option>
                                                    <option value="6904">Bến Cỏ</option>
                                                    <option value="6905">Bến Đình</option>
                                                    <option value="170244">Bến Đình</option>
                                                    <option value="140807">Bến Đò Mới</option>
                                                    <option value="5142">Bến Lò Gốm</option>
                                                    <option value="5618">Bến Lội</option>
                                                    <option value="6646">Bến Lội</option>
                                                    <option value="5191">Bến Nghé</option>
                                                    <option value="5271">Bến Phú Định</option>
                                                    <option value="5143">Bến Phú Lâm</option>
                                                    <option value="6906">Bến Súc</option>
                                                    <option value="6907">Bến Than (Đường Làng Số 4)</option>
                                                    <option value="5272">Bến Ụ Cây</option>
                                                    <option value="638130">Bến Vân Đồn</option>
                                                    <option value="5273">Bến Xóm Củi</option>
                                                    <option value="6549">Bình Chiểu</option>
                                                    <option value="5274">Bình Đông</option>
                                                    <option value="5275">Bình Đức</option>
                                                    <option value="5487">Bình Dương Thi Xã</option>
                                                    <option value="6117">Bình Giã</option>
                                                    <option value="6647">Bình Hưng</option>
                                                    <option value="5838">Bình Lợi</option>
                                                    <option value="6328">Bình Long</option>
                                                    <option value="5619">Bình Long</option>
                                                    <option value="6648">Bình Minh</option>
                                                    <option value="6908">Bình Mỹ</option>
                                                    <option value="6559">Bình Phú</option>
                                                    <option value="5144">Bình Phú</option>
                                                    <option value="5839">Bình Quới</option>
                                                    <option value="5145">Bình Tây</option>
                                                    <option value="5620">Bình Thành</option>
                                                    <option value="5488">Bình Thới</option>
                                                    <option value="5146">Bình Tiên</option>
                                                    <option value="5621">Bình trị Đông</option>
                                                    <option value="6649">Bình Trường</option>
                                                    <option value="6650">Bờ Huệ</option>
                                                    <option value="4907">Bờ Kênh Nhiêu Lộc</option>
                                                    <option value="6550">Bồi Hoàn</option>
                                                    <option value="6909">Bốn Phú (Trung An)-Huỳnh Thị Bẳng (Phú Hòa Đông)</option>
                                                    <option value="5276">Bông Sao</option>
                                                    <option value="5622">Bông Sen</option>
                                                    <option value="6651">Bông Văn Dĩa</option>
                                                    <option value="5192">Bùi Bằng Đoàn</option>
                                                    <option value="6329">Bùi Cẩm Hổ</option>
                                                    <option value="7008">Bùi Chu</option>
                                                    <option value="7009">Bùi Công Trừng</option>
                                                    <option value="5840">Bùi Đình Tuý</option>
                                                    <option value="5623">Bùi Dương Lịch</option>
                                                    <option value="5841">Bùi Hữu Nghĩa</option>
                                                    <option value="5046">Bùi Hữu Nghĩa</option>
                                                    <option value="5277">Bùi Huy Bích</option>
                                                    <option value="6860">Bùi Lâm</option>
                                                    <option value="5278">Bùi Minh Trực</option>
                                                    <option value="170644">Bùi Quang Là</option>
                                                    <option value="6652">Bùi Thanh Khiết</option>
                                                    <option value="6118">Bùi Thế Mỹ</option>
                                                    <option value="6910">Bùi Thị Điệt</option>
                                                    <option value="6911">Bùi Thị He</option>
                                                    <option value="6119">Bùi Thị Xuân</option>
                                                    <option value="4648">Bùi Thị Xuân</option>
                                                    <option value="5625">Bùi Tự Toàn</option>
                                                    <option value="5193">Bùi Văn Ba</option>
                                                    <option value="5576">Bùi Văn Ngữ</option>
                                                    <option value="7010">Bùi Văn Ngữ</option>
                                                    <option value="6653">Bùi Văn Sự</option>
                                                    <option value="1308045">Bùi Văn Thêm</option>
                                                    <option value="4649">Bùi Viện</option>
                                                    <option value="5309">Bưng Ông Thoàn</option>
                                                    <option value="5310">Bưng Sáu Xã</option>
                                                    <option value="5147">Bửu Đình</option>
                                                    <option value="5437">Bửu Long</option>
                                                    <option value="6912">Cá Lăng</option>
                                                    <option value="6120">Ca Văn Thỉnh</option>
                                                    <option value="5489">Các Đường Còn Lại Trong Cư Xá Lữ Gia</option>
                                                    <option value="5279">Các Đường Lô Trong Khu Dân Cư Phường 9, 10</option>
                                                    <option value="4962">Các Đường Nội Bộ Chung Cư Phường 3</option>
                                                    <option value="4963">Các Đường Nội Bộ Cư Xá Vĩnh Hội</option>
                                                    <option value="6330">Các Đường Nối Giữa Đường Số 16 Và 20</option>
                                                    <option value="5280">Các Đường Số Chẵn Phường 4, 5</option>
                                                    <option value="5281">Các Đường Số Lẻ Phường 4, 5</option>
                                                    <option value="5438">Các Đường Trong Cư Xá Bắc Hải</option>
                                                    <option value="5282">Các Đường Trong Khu Dân Cư Mới Báo Thanh Niên P. 1</option>
                                                    <option value="5283">Các Đường Trong Khu Dân Cư Mới Phường 16</option>
                                                    <option value="5284">Các Đường Trong Khu Dân Cư Mới Phường 4</option>
                                                    <option value="5285">Các Đường Trong Khu Dân Cư Mới Phường 5</option>
                                                    <option value="5286">Các Đường Trong Khu Dân Cư Mới Phường 6</option>
                                                    <option value="5287">Các Đường Trong Khu Dân Cư Mới Phường 7</option>
                                                    <option value="6331">Cách Mạng</option>
                                                    <option value="6121">Cách Mạng Tháng 8</option>
                                                    <option value="5439">Cách Mạng Tháng 8</option>
                                                    <option value="4650">Cách Mạng Tháng 8</option>
                                                    <option value="4908">Cách Mạng Tháng 8</option>
                                                    <option value="6654">Cái Trung</option>
                                                    <option value="4651">Calmette</option>
                                                    <option value="6025">Cầm Bá Thước</option>
                                                    <option value="6913">Can Trường</option>
                                                    <option value="4652">Cao Bá Nhạ</option>
                                                    <option value="4653">Cao Bá Quát</option>
                                                    <option value="5047">Cao Đạt</option>
                                                    <option value="5288">Cao Lỗ</option>
                                                    <option value="5440">Cao Thắng</option>
                                                    <option value="4909">Cao Thắng</option>
                                                    <option value="6026">Cao Thắng</option>
                                                    <option value="6655">Cao Tốc Hồ Chí Minh-Trung Lương</option>
                                                    <option value="5194">Cao Triều Phát</option>
                                                    <option value="5148">Cao Vân Lầu</option>
                                                    <option value="189395">Cao Văn Ngọc</option>
                                                    <option value="5289">Cao Xuân Dục</option>
                                                    <option value="6564">Cầu Bà Cả</option>
                                                    <option value="5311">Cầu Đình</option>
                                                    <option value="5626">Cầu Kinh</option>
                                                    <option value="5577">Cầu Lò Heo</option>
                                                    <option value="645198">Cầu Ván</option>
                                                    <option value="5312">Cầu Xây</option>
                                                    <option value="5313">Cầu Xây 2</option>
                                                    <option value="6332">Cầu Xéo</option>
                                                    <option value="6914">Cây Bài</option>
                                                    <option value="6656">Cây Bàng</option>
                                                    <option value="5627">Cây Cám</option>
                                                    <option value="6657">Cây Cám (Vĩnh Lộc B)</option>
                                                    <option value="4654">Cây Điệp</option>
                                                    <option value="6915">Cây Gỏ</option>
                                                    <option value="6551">Cây Keo</option>
                                                    <option value="901324">Cây Keo</option>
                                                    <option value="5290">Cây Sung</option>
                                                    <option value="140786">Cây Trắc</option>
                                                    <option value="5942">Cây Trâm (Nguyễn Văn Khối)</option>
                                                    <option value="140787">Cây Trôm</option>
                                                    <option value="6916">Cây Trôm-Mỹ Khánh</option>
                                                    <option value="6123">Chấn Hưng</option>
                                                    <option value="6333">Chân Lý</option>
                                                    <option value="140828">Chánh Hưng</option>
                                                    <option value="617712">Chánh Hưng</option>
                                                    <option value="140687">Chánh Hưng</option>
                                                    <option value="7172">Chánh Hưng nối dài</option>
                                                    <option value="5441">Châu Thới</option>
                                                    <option value="5048">Châu Văn Liêm</option>
                                                    <option value="6124">Châu Vĩnh Tế</option>
                                                    <option value="6334">Chế Lan Viên</option>
                                                    <option value="6125">Chí Công</option>
                                                    <option value="6126">Chí Linh</option>
                                                    <option value="6027">Chiến Thắng</option>
                                                    <option value="5049">Chiêu Anh Các</option>
                                                    <option value="5149">Chợ Lớn</option>
                                                    <option value="6127">Chữ Đồng Tử</option>
                                                    <option value="4655">Chu Mạnh Trinh</option>
                                                    <option value="140763">Chu Mạnh Trinh</option>
                                                    <option value="6335">Chu Thiên</option>
                                                    <option value="6336">Chu Văn An</option>
                                                    <option value="5150">Chu Văn An</option>
                                                    <option value="5314">Chu Văn An</option>
                                                    <option value="5842">Chu Văn An</option>
                                                    <option value="6552">Chương Dương</option>
                                                    <option value="6561">Chuông Tre</option>
                                                    <option value="5195">Chuyên Dùng 9</option>
                                                    <option value="6337">cn13</option>
                                                    <option value="6028">Cô Bắc</option>
                                                    <option value="4656">Cô Bắc</option>
                                                    <option value="4657">Cô Giang</option>
                                                    <option value="6029">Cô Giang</option>
                                                    <option value="5490">Công Chúa Ngọc Hân</option>
                                                    <option value="6128">Cộng Hoà</option>
                                                    <option value="6338">Cộng Hoà 3</option>
                                                    <option value="6122">Cống Lỡ</option>
                                                    <option value="4658">Cống Quỳnh</option>
                                                    <option value="5050">Công Trường An Đông</option>
                                                    <option value="5843">Công Trường Hoà Bình</option>
                                                    <option value="4659">Công Trường Lam Sơn</option>
                                                    <option value="4660">Công Trường Mê Linh</option>
                                                    <option value="4910">Công Trường Quốc Tế</option>
                                                    <option value="5844">Công Trường Tự Do</option>
                                                    <option value="4661">Công Xã Paris</option>
                                                    <option value="6129">Cù Chính Lan</option>
                                                    <option value="6030">Cù Lao</option>
                                                    <option value="5475">Cư Xá 100căn (Thành Thái)</option>
                                                    <option value="992910">Cư Xá An Lạc</option>
                                                    <option value="5491">Cư xá Bình Thới (Đường số 1)</option>
                                                    <option value="5492">Cư xá Bình Thới (Đường số 2)</option>
                                                    <option value="5493">Cư xá Bình Thới (Đường số 3)</option>
                                                    <option value="5494">Cư xá Bình Thới (Đường số 3a)</option>
                                                    <option value="5495">Cư xá Bình Thới (Đường số 4)</option>
                                                    <option value="5496">Cư xá Bình Thới (Đường số 5)</option>
                                                    <option value="5498">Cư xá Bình Thới (Đường số 6)</option>
                                                    <option value="5499">Cư xá Bình Thới (Đường số 7)</option>
                                                    <option value="5500">Cư xá Bình Thới (Đường số 7a)</option>
                                                    <option value="5501">Cư xá Bình Thới (Đường số 8)</option>
                                                    <option value="5502">Cư xá Bình Thới (Đường số 9)</option>
                                                    <option value="111249">Cư xá Cao Thắng</option>
                                                    <option value="1841879">Cư Xá Diên Hồng</option>
                                                    <option value="4911">Cư Xá Đô Thành Đường số 4</option>
                                                    <option value="4912">Cư Xá Đô Thành Đường số 5</option>
                                                    <option value="4913">Cư Xá Đô Thành Đường số 6</option>
                                                    <option value="4914">Cư Xá Đô Thành-Đường số 1</option>
                                                    <option value="4915">Cư Xá Đô Thành-Đường số 2</option>
                                                    <option value="4916">Cư Xá Đô Thành-Đường số 3</option>
                                                    <option value="4917">Cư Xá Đô Thành-Đường số 7</option>
                                                    <option value="5476">Cư xá Đồng Tiến (hẻm số 7 Thành Thái)</option>
                                                    <option value="5503">Cư xá Lạc Long Quân</option>
                                                    <option value="1383086">Cư Xá Lữ Gia</option>
                                                    <option value="1658239">Cư Xá Nguyễn Đình Chiểu</option>
                                                    <option value="1769377">Cư xá Nguyễn Văn Trỗi</option>
                                                    <option value="2023065">Cư Xá Phan Đăng Lưu</option>
                                                    <option value="140829">Cư xá Phồn Vinh</option>
                                                    <option value="748571">Cư Xá Phú Thọ Hòa</option>
                                                    <option value="6130">Cửu Long</option>
                                                    <option value="5442">Cửu Long</option>
                                                    <option value="5291">Dạ Nam</option>
                                                    <option value="6658">Đa Phước</option>
                                                    <option value="5292">Dã Tượng</option>
                                                    <option value="5315">Đại Lộ 1</option>
                                                    <option value="5316">Đại Lộ 2</option>
                                                    <option value="5317">Đại Lộ 3</option>
                                                    <option value="679778">Đại Lộ Đông Tây</option>
                                                    <option value="663612">Đại Lộ Đông Tây</option>
                                                    <option value="140830">Đại lộ Đông Tây</option>
                                                    <option value="2340806">Đại lộ Võ Văn Kiệt</option>
                                                    <option value="6131">Đại Nghĩa</option>
                                                    <option value="6339">Đàm Thận Huy</option>
                                                    <option value="6340">Dân Chủ</option>
                                                    <option value="5318">Dân Chủ</option>
                                                    <option value="6553">Dân Chủ(Phường Bình Thọ)</option>
                                                    <option value="6659">Dân Công Hỏa Tiến</option>
                                                    <option value="6341">Dân Tộc</option>
                                                    <option value="6132">Dân Trí</option>
                                                    <option value="5293">Đặng Chất</option>
                                                    <option value="7011">Đặng Công Bỉnh</option>
                                                    <option value="5196">Đặng Đại Độ</option>
                                                    <option value="5197">Đặng Đức Thuật</option>
                                                    <option value="4662">Đặng Dung</option>
                                                    <option value="4778">Đặng Hữu Phổ</option>
                                                    <option value="6133">Đặng Lộ</option>
                                                    <option value="5504">Đặng Minh Khiêm</option>
                                                    <option value="6134">Đặng Minh Trứ</option>
                                                    <option value="5151">Đặng Nguyên Cẩn</option>
                                                    <option value="7173">Đặng Nhữ Lâm</option>
                                                    <option value="4663">Đặng Tất</option>
                                                    <option value="6031">Đặng Thai Mai</option>
                                                    <option value="5051">Đặng Thái Thân</option>
                                                    <option value="4664">Đặng Thị Nhu</option>
                                                    <option value="6554">Đặng Thị Rành</option>
                                                    <option value="7012">Đặng Thúc Vịnh</option>
                                                    <option value="2504091">Đặng Thùy Trâm</option>
                                                    <option value="4779">Đặng Tiến Đông</option>
                                                    <option value="4665">Đặng Trần Côn</option>
                                                    <option value="6555">Đặng Văn Bi</option>
                                                    <option value="6861">Đặng Văn Kiều</option>
                                                    <option value="140764">Đặng Văn Mười</option>
                                                    <option value="6032">Đặng Văn Ngữ</option>
                                                    <option value="1795888">Đặng Văn Sâm</option>
                                                    <option value="5294">Đào Cam Mộc</option>
                                                    <option value="6862">Đào Cử</option>
                                                    <option value="6033">Đào Duy Anh</option>
                                                    <option value="6034">Đào Duy Từ </option>
                                                    <option value="5443">Đào Duy Từ</option>
                                                    <option value="5505">Đào Nguyên Phổ</option>
                                                    <option value="7174">Đào Sư Tích</option>
                                                    <option value="5052">Đào Tấn</option>
                                                    <option value="7175">Đào Tông Nguyên</option>
                                                    <option value="5198">Đào Trí</option>
                                                    <option value="6556">Đào Trinh Nhất</option>
                                                    <option value="6917">Đào Văn Thử</option>
                                                    <option value="140688">Đào Xuân Tích</option>
                                                    <option value="5628">Đất Mới</option>
                                                    <option value="6135">Đất Thánh</option>
                                                    <option value="6342">dc8</option>
                                                    <option value="6863">Đê Ec</option>
                                                    <option value="140831">Đê Rạch Ông Đồ</option>
                                                    <option value="6660">Đê Ranh Long An</option>
                                                    <option value="6661">Đê Số 2 (Tân Nhựt)</option>
                                                    <option value="4666">Đề Thám</option>
                                                    <option value="4667">Điện Biên Phủ</option>
                                                    <option value="4918">Điện Biên Phủ</option>
                                                    <option value="5444">Điện Biên Phủ</option>
                                                    <option value="5845">Điện Biên Phủ</option>
                                                    <option value="5846">Diên Hồng</option>
                                                    <option value="1666301">Diệp Minh Châu</option>
                                                    <option value="5295">Đình An Tài</option>
                                                    <option value="5847">Đinh Bộ Lĩnh</option>
                                                    <option value="6918">Đinh Chương Dương</option>
                                                    <option value="4668">Đinh Công Tráng</option>
                                                    <option value="6136">Đinh Điền</option>
                                                    <option value="6662">Đinh Đức Thiện</option>
                                                    <option value="5578">Đình Giao Khẩu</option>
                                                    <option value="5296">Đinh Hoà</option>
                                                    <option value="6919">Đình Kiến (Đinh Kiếp)</option>
                                                    <option value="4964">Đinh Lể</option>
                                                    <option value="6343">Đinh Liệt</option>
                                                    <option value="5629">Đình Nghi Xuân</option>
                                                    <option value="5319">Đình Phong Phú</option>
                                                    <option value="5848">Đinh Tiên Hoàng</option>
                                                    <option value="4669">Đinh Tiên Hoàng</option>
                                                    <option value="6344">Đỗ Bí</option>
                                                    <option value="6345">Đỗ Công Tường</option>
                                                    <option value="6920">Đỗ Đăng Tuyển</option>
                                                    <option value="6921">Đỗ Đình Nhân</option>
                                                    <option value="6346">Đô Đốc Chấn</option>
                                                    <option value="6347">Đô Đốc Lộc</option>
                                                    <option value="6348">Đô Đốc Long</option>
                                                    <option value="6349">Đô Đốc Thủ</option>
                                                    <option value="5199">Đô Đốc Tuyết</option>
                                                    <option value="6350">Đỗ Đức Dục</option>
                                                    <option value="5630">Đỗ Năng Tế</option>
                                                    <option value="6922">Đỗ Ngọc Du</option>
                                                    <option value="5053">Đỗ Ngọc Thạnh</option>
                                                    <option value="6351">Đỗ Nhuận</option>
                                                    <option value="1728930">Đỗ Pháp Thuận</option>
                                                    <option value="170658">Đỗ Phúc Thịnh</option>
                                                    <option value="6923">Đỗ Quang Cơ</option>
                                                    <option value="4670">Đỗ Quang Đẩu</option>
                                                    <option value="6137">Đồ Sơn</option>
                                                    <option value="6035">Đỗ Tấn Phong</option>
                                                    <option value="6352">Đỗ Thị Tâm</option>
                                                    <option value="6353">Đỗ Thừa Luông</option>
                                                    <option value="6354">Đỗ Thừa Tự</option>
                                                    <option value="7013">Đỗ Văn Dậy</option>
                                                    <option value="5054">Đỗ Văn Sửu</option>
                                                    <option value="4780">Đỗ Xuân Hợp</option>
                                                    <option value="5320">Đỗ Xuân Hợp</option>
                                                    <option value="4919">Đoàn Công Bửu</option>
                                                    <option value="6557">Đoàn Công Hớn</option>
                                                    <option value="6355">Đoàn Giỏi</option>
                                                    <option value="6356">Đoàn Hồng Phước</option>
                                                    <option value="4781">Đoàn Hữu Trưng</option>
                                                    <option value="6357">Đoàn Kết</option>
                                                    <option value="140917">Đoàn Kết</option>
                                                    <option value="110000">Đoàn Nguyên Phổ</option>
                                                    <option value="140832">Đoàn Nguyễn Tuân</option>
                                                    <option value="4965">Đoàn Nhữ Hài</option>
                                                    <option value="5631">Đoàn Phú Tứ</option>
                                                    <option value="6036">Đoàn Thị Điểm </option>
                                                    <option value="4966">Đoàn Văn Bơ</option>
                                                    <option value="6138">Dọc Bờ Kênh Nhiêu Lộc</option>
                                                    <option value="6358">Độc Lập</option>
                                                    <option value="5507">Đội Cung</option>
                                                    <option value="5849">Đống Đa</option>
                                                    <option value="6139">Đống Đa</option>
                                                    <option value="6140">Đồng Đen</option>
                                                    <option value="4671">Đông Du</option>
                                                    <option value="6141">Đông Hồ</option>
                                                    <option value="5297">Đông Hồ (đường Số 11)</option>
                                                    <option value="5579">Đông Hưng Thuận 2</option>
                                                    <option value="4672">Đồng Khởi</option>
                                                    <option value="6142">Đồng khởi</option>
                                                    <option value="6143">Đồng Nai</option>
                                                    <option value="5445">Đồng Nai</option>
                                                    <option value="6144">Đông Sơn</option>
                                                    <option value="7014">Đồng Tâm</option>
                                                    <option value="741756">Đồng Văn Cống</option>
                                                    <option value="6145">Đồng Xoài</option>
                                                    <option value="1869388">Đường 01</option>
                                                    <option value="1869389">Đường 02</option>
                                                    <option value="7015">Đường 02-Ấp Mới 2</option>
                                                    <option value="5632">Đường 1</option>
                                                    <option value="4782">Đường 1</option>
                                                    <option value="5850">Đường 1 C/x Chu Văn An</option>
                                                    <option value="5508">Đường 1 C/x Lữ Gia</option>
                                                    <option value="5200">Đường 10</option>
                                                    <option value="4783">Đường 10</option>
                                                    <option value="5851">Đường 10 C/x Chu Văn An</option>
                                                    <option value="5509">Đường 100 Bình Thới</option>
                                                    <option value="5298">Đường 1011 Phạm Thế Hiển</option>
                                                    <option value="5321">Đường 109</option>
                                                    <option value="4967">Đường 10c</option>
                                                    <option value="4784">Đường 11</option>
                                                    <option value="5322">Đường 11</option>
                                                    <option value="6924">Đường 11</option>
                                                    <option value="5299">Đường 1107 Phạm Thế Hiển (dọc Rạch Hiệp Ân)</option>
                                                    <option value="6663">Đướng 11A,Khu Dân Cư Him Lam 6A</option>
                                                    <option value="5323">Đường 12</option>
                                                    <option value="4785">Đường 12</option>
                                                    <option value="5852">Đường 12 C/x Chu Văn An</option>
                                                    <option value="5324">Đường 120</option>
                                                    <option value="5853">Đường 12ab Khu Miếu Nổi</option>
                                                    <option value="4786">Đường 13</option>
                                                    <option value="5325">Đường 138</option>
                                                    <option value="6664">Đường 13A,Khu Dân Cư Him Lam 6A</option>
                                                    <option value="4787">Đường 14</option>
                                                    <option value="5854">Đường 14 C/x Chu Văn An</option>
                                                    <option value="5326">Đường 144</option>
                                                    <option value="5327">Đường 147</option>
                                                    <option value="5328">Đường 15</option>
                                                    <option value="5201">Đường 15</option>
                                                    <option value="4788">Đường 15</option>
                                                    <option value="5202">Đường 15b</option>
                                                    <option value="4789">Đường 16</option>
                                                    <option value="5510">Đường 16 C/x Lữ Gia</option>
                                                    <option value="5855">Đường 16 Khu Miếu Nổi</option>
                                                    <option value="5329">Đường 160</option>
                                                    <option value="1181618">Đường 168</option>
                                                    <option value="4790">Đường 17</option>
                                                    <option value="6146">Đường 175 Lý Thường Kiệt</option>
                                                    <option value="5330">Đường 179</option>
                                                    <option value="5204">Đường 18</option>
                                                    <option value="4791">Đường 18</option>
                                                    <option value="5331">Đường 185</option>
                                                    <option value="5332">Đường 18a</option>
                                                    <option value="5333">Đường 18b</option>
                                                    <option value="5633">Đường 18b</option>
                                                    <option value="6665">Đường 18B</option>
                                                    <option value="5205">Đường 19</option>
                                                    <option value="4792">Đường 19</option>
                                                    <option value="5334">Đường 197</option>
                                                    <option value="5634">Đường 1a</option>
                                                    <option value="6666">Đường 1A (Công Nghệ Mới)</option>
                                                    <option value="5635">Đường 1b</option>
                                                    <option value="5206">Đường 2</option>
                                                    <option value="4793">Đường 2</option>
                                                    <option value="5636">Đường 2</option>
                                                    <option value="5856">Đường 2 C/x Chu Văn An</option>
                                                    <option value="5511">Đường 2 C/X Lữ Gia</option>
                                                    <option value="4794">Đường 20</option>
                                                    <option value="4968">Đường 20 Thước</option>
                                                    <option value="4795">Đường 21</option>
                                                    <option value="5207">Đường 21</option>
                                                    <option value="5335">Đường 21</option>
                                                    <option value="5336">Đường 215</option>
                                                    <option value="5337">Đường 22</option>
                                                    <option value="5208">Đường 22</option>
                                                    <option value="4796">Đường 22</option>
                                                    <option value="5512">Đường 22 C/x Lữ Gia</option>
                                                    <option value="5209">Đường 23</option>
                                                    <option value="5338">Đường 23</option>
                                                    <option value="4797">Đường 23</option>
                                                    <option value="4798">Đường 24</option>
                                                    <option value="5339">Đường 24</option>
                                                    <option value="6558">Đường 24</option>
                                                    <option value="5340">Đường 245</option>
                                                    <option value="5341">Đường 25</option>
                                                    <option value="4799">Đường 25</option>
                                                    <option value="4800">Đường 26</option>
                                                    <option value="4801">Đường 27</option>
                                                    <option value="4802">Đường 28</option>
                                                    <option value="2334604">Đường 28</option>
                                                    <option value="5152">Đường 28 Bình Phú</option>
                                                    <option value="5513">Đường 28 C/x Lữ Gia</option>
                                                    <option value="5514">Đường 281 Lý Thường Kiệt</option>
                                                    <option value="5342">Đường 29</option>
                                                    <option value="4803">Đường 29</option>
                                                    <option value="5343">Đường 297</option>
                                                    <option value="5637">Đường 2a</option>
                                                    <option value="5515">Đường 2A C/x Lữ Gia</option>
                                                    <option value="5638">Đường 2b</option>
                                                    <option value="5516">Đường 2B C/x Lữ Gia</option>
                                                    <option value="4804">Đường 3</option>
                                                    <option value="5639">Đường 3</option>
                                                    <option value="5857">Đường 3 C/x Chu Văn An</option>
                                                    <option value="5517">Đường 3 C/x Lữ Gia</option>
                                                    <option value="5518">Đường 3/2</option>
                                                    <option value="5446">Đường 3/2</option>
                                                    <option value="4805">Đường 30</option>
                                                    <option value="6359">Đường 30/4</option>
                                                    <option value="4806">Đường 31</option>
                                                    <option value="4807">Đường 32</option>
                                                    <option value="109997">đường 325,327 Minh Phụng</option>
                                                    <option value="109952">Đường 329 Minh Phụng</option>
                                                    <option value="4808">Đường 33</option>
                                                    <option value="5344">Đường 339</option>
                                                    <option value="4809">Đường 34</option>
                                                    <option value="5519">Đường 34 C/x Lữ Gia</option>
                                                    <option value="4810">Đường 35</option>
                                                    <option value="6925">Đường 35, 39, 40</option>
                                                    <option value="5345">Đường 359</option>
                                                    <option value="4811">Đường 36</option>
                                                    <option value="4812">Đường 37</option>
                                                    <option value="4813">Đường 38</option>
                                                    <option value="4814">Đường 39</option>
                                                    <option value="5640">Đường 3a</option>
                                                    <option value="5641">Đường 3b</option>
                                                    <option value="1359991">đường 3DB khu Nam Long</option>
                                                    <option value="4815">Đường 4</option>
                                                    <option value="5642">Đường 4</option>
                                                    <option value="5858">Đường 4 C/x Chu Văn An</option>
                                                    <option value="4816">Đường 40</option>
                                                    <option value="5520">Đường 40 C/x Lữ Gia</option>
                                                    <option value="5346">Đường 400</option>
                                                    <option value="4817">Đường 41</option>
                                                    <option value="6926">Đường 41</option>
                                                    <option value="5300">Đường 41 - Phú Định</option>
                                                    <option value="4818">Đường 42</option>
                                                    <option value="6927">Đường 42</option>
                                                    <option value="4819">Đường 43</option>
                                                    <option value="4820">Đường 44</option>
                                                    <option value="5301">Đường 44 - Trương Đình Hội</option>
                                                    <option value="5347">Đường 442</option>
                                                    <option value="4821">Đường 45</option>
                                                    <option value="5210">Đường 45</option>
                                                    <option value="4822">Đường 46</option>
                                                    <option value="4823">Đường 47</option>
                                                    <option value="5348">Đường 475</option>
                                                    <option value="4824">Đường 48</option>
                                                    <option value="4825">Đường 49</option>
                                                    <option value="5643">Đường 4a</option>
                                                    <option value="5644">Đường 4b</option>
                                                    <option value="6667">Đường 4B (Đa Phước)</option>
                                                    <option value="4826">Đường 5</option>
                                                    <option value="5859">Đường 5 C/x Chu Văn An</option>
                                                    <option value="4827">Đường 50</option>
                                                    <option value="5645">Đường 504</option>
                                                    <option value="4828">Đường 51</option>
                                                    <option value="4829">Đường 52</option>
                                                    <option value="5521">Đường 52 (Hẻm Minh Phụng)</option>
                                                    <option value="5522">Đường 52 C/x Lữ Gia</option>
                                                    <option value="4830">Đường 53</option>
                                                    <option value="5646">Đường 532</option>
                                                    <option value="4831">Đường 54</option>
                                                    <option value="4832">Đường 55</option>
                                                    <option value="4833">Đường 56</option>
                                                    <option value="4834">Đường 57</option>
                                                    <option value="4835">Đường 58</option>
                                                    <option value="4836">Đường 59</option>
                                                    <option value="4837">Đường 6</option>
                                                    <option value="5647">Đường 6</option>
                                                    <option value="5860">Đường 6 C/x Chu Văn An</option>
                                                    <option value="5212">Đường 60</option>
                                                    <option value="4838">Đường 60</option>
                                                    <option value="4839">Đường 61</option>
                                                    <option value="749755">Đường 61</option>
                                                    <option value="5349">Đường 61</option>
                                                    <option value="5213">Đường 62</option>
                                                    <option value="4840">Đường 62</option>
                                                    <option value="4841">Đường 63</option>
                                                    <option value="4842">Đường 64</option>
                                                    <option value="4843">Đường 65</option>
                                                    <option value="4844">Đường 66</option>
                                                    <option value="5350">Đường 671</option>
                                                    <option value="5351">Đường 6a</option>
                                                    <option value="6668">Đường 6A</option>
                                                    <option value="5352">Đường 6b</option>
                                                    <option value="5353">Đường 6c</option>
                                                    <option value="5354">Đường 6d</option>
                                                    <option value="4845">Đường 7</option>
                                                    <option value="1892171">Đường 7 c/x Chu Văn An</option>
                                                    <option value="5523">Đường 702 Hồng Bàng</option>
                                                    <option value="5524">Đường 762 Hồng Bàng</option>
                                                    <option value="5355">Đường 79</option>
                                                    <option value="4846">Đường 8</option>
                                                    <option value="5861">Đường 8 C/x Chu Văn An</option>
                                                    <option value="1560832">Đường 816</option>
                                                    <option value="4847">Đường 9</option>
                                                    <option value="5356">Đường 990</option>
                                                    <option value="1391659">Đường 9M</option>
                                                    <option value="1798887">Đường A</option>
                                                    <option value="819646">Đường A</option>
                                                    <option value="4848">Đường A2.1</option>
                                                    <option value="4849">Đường A2.10</option>
                                                    <option value="4850">Đường A2.11</option>
                                                    <option value="4851">Đường A2.12</option>
                                                    <option value="4852">Đường A2.13</option>
                                                    <option value="4853">Đường A2.14</option>
                                                    <option value="4854">Đường A2.15</option>
                                                    <option value="4855">Đường A2.16</option>
                                                    <option value="4856">Đường A2.2</option>
                                                    <option value="4857">Đường A2.3</option>
                                                    <option value="4858">Đường A2.4</option>
                                                    <option value="4859">Đường A2.5</option>
                                                    <option value="4860">Đường A2.6</option>
                                                    <option value="4861">Đường A2.7</option>
                                                    <option value="4862">Đường A2.8</option>
                                                    <option value="4863">Đường A2.9</option>
                                                    <option value="6147">Đường A4</option>
                                                    <option value="6669">Đường Ấp 1</option>
                                                    <option value="6670">Đường Ấp 2 (An Phú Tây)</option>
                                                    <option value="6671">Đường Ấp 4 (Kinh A)</option>
                                                    <option value="7016">Đường Ấp Đình 2</option>
                                                    <option value="5215">Đường B</option>
                                                    <option value="6360">Đường B1</option>
                                                    <option value="139487">Đường B1</option>
                                                    <option value="139488">Đường B2</option>
                                                    <option value="6361">Đường B2</option>
                                                    <option value="6362">Đường B3</option>
                                                    <option value="6363">Đường B4</option>
                                                    <option value="6148">Đường B6</option>
                                                    <option value="637719">Đường B6</option>
                                                    <option value="140689">Đường Bà Cả</option>
                                                    <option value="5648">Dương Bá Cung</option>
                                                    <option value="5302">Dương Bá Trạc</option>
                                                    <option value="4864">Đường Bắc Nam Ii</option>
                                                    <option value="6672">Đường Bảy Tấn</option>
                                                    <option value="5649">Đường Bia Truyền Thống</option>
                                                    <option value="4865">Đường Bình Trưng</option>
                                                    <option value="6364">Đường Bờ Bao Tân Thắng</option>
                                                    <option value="6673">Đường Bờ Nhà Thờ</option>
                                                    <option value="5650">Đường Bờ Sông</option>
                                                    <option value="7176">Đường Bờ Tây</option>
                                                    <option value="5651">Đường Bờ Tuyến</option>
                                                    <option value="6674">Đường Bờ Xe Lam</option>
                                                    <option value="5216">Đường C</option>
                                                    <option value="6365">Đường C1</option>
                                                    <option value="6149">Đường C1</option>
                                                    <option value="6150">Đường C12</option>
                                                    <option value="6151">Đường C18</option>
                                                    <option value="6152">Đường C2 (Phường 13)</option>
                                                    <option value="6153">Đường C22</option>
                                                    <option value="6154">Đường C27</option>
                                                    <option value="6155">Đường C3</option>
                                                    <option value="6366">Đường C4</option>
                                                    <option value="6367">Đường C4a</option>
                                                    <option value="6368">Đường C5</option>
                                                    <option value="6369">Đường C6</option>
                                                    <option value="6370">Đường C6a</option>
                                                    <option value="6371">Đường C7</option>
                                                    <option value="6372">Đường C8</option>
                                                    <option value="7177">Dương Cát Lợi</option>
                                                    <option value="6373">Đường Cây Keo</option>
                                                    <option value="6374">Đường Cc1</option>
                                                    <option value="6375">Đường Cc2</option>
                                                    <option value="6376">Đường Cc3</option>
                                                    <option value="6377">Đường Cc4</option>
                                                    <option value="6378">Đường Cc5</option>
                                                    <option value="6864">Đường Chính Vào Khu Dân Cư Đông Tranh</option>
                                                    <option value="4866">Đường Chợ An Điền</option>
                                                    <option value="6675">Đường Chùa</option>
                                                    <option value="6379">Đường Cn1</option>
                                                    <option value="6380">Đường Cn11</option>
                                                    <option value="6381">Đường Cn6</option>
                                                    <option value="7017">Dương Công Khi</option>
                                                    <option value="5217">Đường D</option>
                                                    <option value="5862">Đường D1 (Nguyễn Văn Thương)</option>
                                                    <option value="4867">Đường D10</option>
                                                    <option value="6382">Đường D10</option>
                                                    <option value="6383">Đường D11</option>
                                                    <option value="1304089">Đường D11</option>
                                                    <option value="6384">Đường D12</option>
                                                    <option value="6385">Đường D13</option>
                                                    <option value="4868">Đường D14</option>
                                                    <option value="6386">Đường D14a</option>
                                                    <option value="6387">Đường D14b</option>
                                                    <option value="6388">Đường D15</option>
                                                    <option value="6389">Đường D16</option>
                                                    <option value="4869">Đường D16</option>
                                                    <option value="1729365">Đường D2</option>
                                                    <option value="5863">Đường D2 (Nguyễn Gia Trí)</option>
                                                    <option value="5864">Đường D3 (Võ Oanh)</option>
                                                    <option value="1028400">Đường D3 Khu dân cư dự án Nam Long</option>
                                                    <option value="5865">Đường D5</option>
                                                    <option value="6156">Đường D50</option>
                                                    <option value="6157">Đường D51</option>
                                                    <option value="6158">Đường D52</option>
                                                    <option value="1354106">Đường D6</option>
                                                    <option value="6390">Đường D9</option>
                                                    <option value="140833">Đường Đá Đỏ</option>
                                                    <option value="4969">Đường Dân Sinh Hai Bên Cầu Ông Lãnh</option>
                                                    <option value="112426">Đường Đất</option>
                                                    <option value="6391">Đường Dc1</option>
                                                    <option value="6392">Đường Dc11</option>
                                                    <option value="6393">Đường Dc3</option>
                                                    <option value="6394">Đường Dc4</option>
                                                    <option value="6395">Đường Dc5</option>
                                                    <option value="6396">Đường Dc7</option>
                                                    <option value="6397">Đường Dc9</option>
                                                    <option value="6865">Đường Đê Ấp Trần Hưng Đạo</option>
                                                    <option value="6676">Đường Đê Rạch Ông Đồ</option>
                                                    <option value="6398">Đường Điện Cao Thế</option>
                                                    <option value="6677">Dương Đình Cúc</option>
                                                    <option value="5357">Dương Đình Hội</option>
                                                    <option value="5525">Dương Đình Nghệ</option>
                                                    <option value="4870">Đường Đông Tây I</option>
                                                    <option value="7018">Đường Đông Thạnh 1 (Đông Thạnh)</option>
                                                    <option value="7019">Đường Đông Thạnh 2</option>
                                                    <option value="7020">Đường Đông Thạnh 5</option>
                                                    <option value="6399">Dương Đức Hiền</option>
                                                    <option value="5218">Đường G</option>
                                                    <option value="6678">Đường Giao Thông Hào Ấp 3</option>
                                                    <option value="6400">Đường Hướng Đông Chợ Sơn Kỳ</option>
                                                    <option value="6401">Đường Kênh 19/5</option>
                                                    <option value="140690">Đường Khu Dân Cư COTEC</option>
                                                    <option value="7021">Đường Khu Phố 1-01 (Thị Trấn Hóc Môn)</option>
                                                    <option value="7022">Đường Khu Phố 1-02 (Thị Trấn Hóc Môn)</option>
                                                    <option value="7023">Đường Khu Phố 1-03 (Thị Trấn Hóc Môn)</option>
                                                    <option value="7024">Đường Khu Phố 2-01 (Thị Trấn Hóc Môn)</option>
                                                    <option value="7025">Đường Khu Phố 2-02 (Thị Trấn Hóc Môn)</option>
                                                    <option value="7026">Đường Khu Phố 3-01 (Thị Trấn Hóc Môn)</option>
                                                    <option value="7027">Đường Khu Phố 3-07 (Thị Trấn Hóc Môn)</option>
                                                    <option value="7028">Đường Khu Phố 3-08 (Thị Trấn Hóc Môn)</option>
                                                    <option value="7029">Đường Khu Phố 8-15 (Thị Trấn Hóc Môn)</option>
                                                    <option value="7178">Đường Khu Trung Tâm Huyện</option>
                                                    <option value="6403">Dương Khuê</option>
                                                    <option value="6679">Đường Kinh T11</option>
                                                    <option value="6680">Đường Kinh T14</option>
                                                    <option value="6681">Đường Kinh Tập Đoàn 7</option>
                                                    <option value="6682">Đường Liên Ấp 12</option>
                                                    <option value="6683">Đường Liên Ấp 1-2</option>
                                                    <option value="6684">Đường Liên Ấp 12 Bình Lợi</option>
                                                    <option value="681463">Đường Liên Ấp 123</option>
                                                    <option value="6685">Đường Liên Ấp 23</option>
                                                    <option value="7179">Đường Liên Ấp 2-3</option>
                                                    <option value="6686">Đường Liên Ấp 234</option>
                                                    <option value="6687">Đường Liên Ấp 34</option>
                                                    <option value="7180">Đường Liên Ấp 3-4</option>
                                                    <option value="6688">Đường Liên Ấp 345</option>
                                                    <option value="6689">Đường Liên Ấp 45</option>
                                                    <option value="6690">Đường Liên Ấp 56</option>
                                                    <option value="6691">Đường Liên Ấp 62</option>
                                                    <option value="5580">Đường Liên Phường (trước Trung Tâm Y Tế)</option>
                                                    <option value="6692">Đường Lô 2</option>
                                                    <option value="5652">Đường Mã lò</option>
                                                    <option value="5653">Đường Miếu Bình Đông</option>
                                                    <option value="5654">Đường Miếu Gò Xoài</option>
                                                    <option value="6693">Đường Miếu Ông Đá</option>
                                                    <option value="811696">Dương Minh Châu</option>
                                                    <option value="5219">Đường N</option>
                                                    <option value="140691">Đường NB Khu TĐC Phước Kiến Giai đoạn 1</option>
                                                    <option value="6159">Đường Nhà Kho Pepsi</option>
                                                    <option value="5153">Đường Nội Bộ Cư Xá Đài Rađa</option>
                                                    <option value="5154">Đường Nội Bộ Cư Xá Phú Lâm A</option>
                                                    <option value="5155">Đường Nội Bộ Cư Xá Phú Lâm B</option>
                                                    <option value="5156">Đường Nội Bộ Cư Xá Phú Lâm D</option>
                                                    <option value="7181">Đường nội bộ KCN Hiệp Phước</option>
                                                    <option value="7182">Đường Nội Bộ KDC Rạch Nò</option>
                                                    <option value="7183">Đường Nội Bộ KDC Thái Sơn</option>
                                                    <option value="7184">Đường nội bộ KDC Trường Đại Học KHXH và NV</option>
                                                    <option value="7185">Đường Nội Bộ Khu CBCNV Huyện Xã Long Thới</option>
                                                    <option value="6037">Đường Nội Bộ Khu Dân Cư Rạch Miễu (p.2,7)</option>
                                                    <option value="5157">Đường Nội Bộ Khu Phố Chợ Phú Lâm</option>
                                                    <option value="7186">Đường Nội Bộ Khu Tái Định Cư KCN Hiệp Phước</option>
                                                    <option value="7187">Đường Nội Bộ Khu Tái Định Cư Khu Vực cầu Bà Sáu</option>
                                                    <option value="5303">Đường Nối Phạm Thế Hiển-batơ</option>
                                                    <option value="6404">Đường Nối Tân Sơn Nhì- Trương Vĩnh Ký</option>
                                                    <option value="5220">Đường O</option>
                                                    <option value="5221">Đường P</option>
                                                    <option value="5866">Đường Phú Mỹ</option>
                                                    <option value="4970">Đường Phường 1</option>
                                                    <option value="5943">Dương Quảng Hàm</option>
                                                    <option value="6866">Đường Ra Bến Đò Đông Hòa</option>
                                                    <option value="6928">Đường Ranh Khu Công Nghiệp</option>
                                                    <option value="6405">Đường S1</option>
                                                    <option value="6406">Đường S11</option>
                                                    <option value="6407">Đường S3</option>
                                                    <option value="6408">Đường S5</option>
                                                    <option value="6409">Đường S7</option>
                                                    <option value="6410">Đường S9</option>
                                                    <option value="7030">Đường Số 08-Mỹ Hòa 3 (Tân Xuân)</option>
                                                    <option value="6560">Đường Số 1</option>
                                                    <option value="6411">Đường Số 1</option>
                                                    <option value="6160">Đường Số 1</option>
                                                    <option value="5944">Đường Số 1</option>
                                                    <option value="4971">Đường Số 1</option>
                                                    <option value="1038644">Đường số 1</option>
                                                    <option value="111575">Đường số 1</option>
                                                    <option value="5655">Đường Số 1</option>
                                                    <option value="5358">Đường Số 1</option>
                                                    <option value="7031">Đường Số 1 (Xuân Thới Đông)</option>
                                                    <option value="6694">Đường Số 1,khu dân cư Bình Hưng</option>
                                                    <option value="6695">Đường Số 1,khu dân cư Gia Hòa</option>
                                                    <option value="6696">Đường Số 1,khu dân cư Trung Sơn</option>
                                                    <option value="6697">Đường Số 1,khu tái định cư Tân Túc</option>
                                                    <option value="1191675">Đường số 10</option>
                                                    <option value="5945">Đường Số 10</option>
                                                    <option value="5656">Đường Số 10</option>
                                                    <option value="5222">Đường Số 10</option>
                                                    <option value="5158">Đường Số 10</option>
                                                    <option value="4972">Đường Số 10</option>
                                                    <option value="6698">Đường Số 10,khu dân cư Bình Hưng</option>
                                                    <option value="6699">Đường Số 10,khu dân cư Gia Hòa</option>
                                                    <option value="6700">Đường Số 10,khu dân cư Trung Sơn</option>
                                                    <option value="6701">Đường Số 10,khu tái định cư Tân Túc</option>
                                                    <option value="4973">Đường Số 10a</option>
                                                    <option value="6702">Đường Số 10A,khu dân cư Trung Sơn</option>
                                                    <option value="4974">Đường Số 10b</option>
                                                    <option value="6703">Đường Số 10B,khu dân cư Trung Sơn</option>
                                                    <option value="6562">Đường Số 11</option>
                                                    <option value="5946">Đường Số 11</option>
                                                    <option value="4975">Đường Số 11</option>
                                                    <option value="5159">Đường Số 11</option>
                                                    <option value="5657">Đường Số 11</option>
                                                    <option value="5359">Đường Số 11</option>
                                                    <option value="6563">Đường Số 11,(Phường Trường Thọ)</option>
                                                    <option value="6704">Đường Số 11,khu dân cư Bình Hưng</option>
                                                    <option value="6705">Đường Số 11,khu dân cư Him Lam 6A</option>
                                                    <option value="5304">Đường Số 111</option>
                                                    <option value="5658">Đường Số 11a</option>
                                                    <option value="5659">Đường Số 12</option>
                                                    <option value="5360">Đường Số 12</option>
                                                    <option value="171900">Đường Số 12</option>
                                                    <option value="4976">Đường Số 12</option>
                                                    <option value="904832">Đường số 12</option>
                                                    <option value="5947">Đường Số 12</option>
                                                    <option value="855249">Đường số 12 An Dương Vương</option>
                                                    <option value="5867">Đường số 12 khu Thanh Đa</option>
                                                    <option value="6706">Đường Số 12,khu dân cư Bình Hưng</option>
                                                    <option value="6707">Đường Số 12,khu dân cư Gia Hòa</option>
                                                    <option value="6565">Đường Số 12,Phường Linh Tây</option>
                                                    <option value="4977">Đường Số 12a</option>
                                                    <option value="6566">Đường Số 12-Phường Trường Thọ</option>
                                                    <option value="5948">Đường Số 13</option>
                                                    <option value="4978">Đường Số 13</option>
                                                    <option value="171901">Đường Số 13</option>
                                                    <option value="5660">Đường Số 13</option>
                                                    <option value="5361">Đường Số 13</option>
                                                    <option value="1574401">Đường số 13</option>
                                                    <option value="6708">Đường Số 13,khu dân cư Bình Hưng</option>
                                                    <option value="6709">Đường Số 13,khu dân cư Him Lam 6A</option>
                                                    <option value="5661">Đường Số 13a</option>
                                                    <option value="6567">Đường Số 13-Phường Linh Xuân</option>
                                                    <option value="140923">Đường số 14</option>
                                                    <option value="5949">Đường Số 14</option>
                                                    <option value="5662">Đường Số 14</option>
                                                    <option value="5362">Đường Số 14</option>
                                                    <option value="171902">Đường Số 14</option>
                                                    <option value="4979">Đường Số 14</option>
                                                    <option value="5868">Đường số 14 khu Thanh Đa</option>
                                                    <option value="6710">Đường Số 14,khu dân cư Bình Hưng</option>
                                                    <option value="6711">Đường Số 14,khu dân cư Him Lam 6A</option>
                                                    <option value="5663">Đường Số 14a</option>
                                                    <option value="5664">Đường Số 14b</option>
                                                    <option value="5665">Đường Số 15</option>
                                                    <option value="5363">Đường Số 15</option>
                                                    <option value="4980">Đường Số 15</option>
                                                    <option value="171903">Đường Số 15</option>
                                                    <option value="140926">Đường số 15</option>
                                                    <option value="5950">Đường Số 15</option>
                                                    <option value="6712">Đường Số 15,khu dân cư Bình Hưng</option>
                                                    <option value="6713">Đường Số 15,khu dân cư Him Lam 6A</option>
                                                    <option value="5364">Đường Số 154</option>
                                                    <option value="5365">Đường Số 16</option>
                                                    <option value="5666">Đường Số 16</option>
                                                    <option value="171904">Đường Số 16</option>
                                                    <option value="4981">Đường Số 16</option>
                                                    <option value="5951">Đường Số 16</option>
                                                    <option value="6714">Đường Số 16,khu dân cư Bình Hưng</option>
                                                    <option value="6715">Đường Số 16,khu dân cư Him Lam 6A</option>
                                                    <option value="6568">Đường Số 16,Phường Linh Trung</option>
                                                    <option value="5667">Đường Số 16a</option>
                                                    <option value="6569">Đường Số 16-Phường Linh Chiểu</option>
                                                    <option value="895227">Đường số 17</option>
                                                    <option value="5668">Đường Số 17</option>
                                                    <option value="5952">Đường Số 17</option>
                                                    <option value="4982">Đường Số 17</option>
                                                    <option value="171905">Đường Số 17</option>
                                                    <option value="5203">Đường Số 17</option>
                                                    <option value="6716">Đường Số 17,khu dân cư Bình Hưng</option>
                                                    <option value="6570">Đường Số 17,Phường Hiệp Bình Phước</option>
                                                    <option value="6571">Đường Số 17,Phường Linh Chiểu</option>
                                                    <option value="6572">Đường Số 17,Phường Linh Trung</option>
                                                    <option value="5669">Đường Số 17a</option>
                                                    <option value="5670">Đường Số 17b</option>
                                                    <option value="970724">Đường số 18</option>
                                                    <option value="171906">Đường Số 18</option>
                                                    <option value="4983">Đường Số 18</option>
                                                    <option value="5953">Đường Số 18</option>
                                                    <option value="6412">Đường Số 18 (p.tân Quý)</option>
                                                    <option value="671710">Đường số 18, P.Hiệp Bình Chánh</option>
                                                    <option value="6717">Đường Số 18,khu dân cư Bình Hưng</option>
                                                    <option value="6718">Đường Số 18,khu dân cư Him Lam 6A</option>
                                                    <option value="5671">Đường Số 18a</option>
                                                    <option value="5672">Đường Số 18c</option>
                                                    <option value="5673">Đường Số 18d</option>
                                                    <option value="5674">Đường Số 18e</option>
                                                    <option value="6573">Đường Số 18-Phường Linh Trung</option>
                                                    <option value="5954">Đường Số 19</option>
                                                    <option value="5675">Đường Số 19</option>
                                                    <option value="4984">Đường Số 19</option>
                                                    <option value="171907">Đường Số 19</option>
                                                    <option value="6413">Đường Số 19 (p.tân Quý)</option>
                                                    <option value="6719">Đường Số 19,khu dân cư Bình Hưng</option>
                                                    <option value="6574">Đường Số 19,Phường Hiệp Bình Chánh</option>
                                                    <option value="5676">Đường Số 19a</option>
                                                    <option value="6720">Đường Số 1A,khu dân cư Gia Hòa</option>
                                                    <option value="6721">Đường Số 1A,khu dân cư Trung Sơn</option>
                                                    <option value="5677">Đường Số 1b</option>
                                                    <option value="6722">Đường Số 1B,khu dân cư Trung Sơn</option>
                                                    <option value="5678">Đường Số 1c</option>
                                                    <option value="6723">Đường Số 1C,khu dân cư Trung Sơn</option>
                                                    <option value="5679">Đường Số 1d</option>
                                                    <option value="6724">Đường Số 1D,khu dân cư Trung Sơn</option>
                                                    <option value="6725">Đường Số 1E,khu dân cư Trung Sơn</option>
                                                    <option value="6726">Đường Số 1F,khu dân cư Trung Sơn</option>
                                                    <option value="774736">Đường số 2</option>
                                                    <option value="6414">Đường Số 2</option>
                                                    <option value="5955">Đường Số 2</option>
                                                    <option value="6161">Đường Số 2</option>
                                                    <option value="5680">Đường Số 2</option>
                                                    <option value="5366">Đường Số 2</option>
                                                    <option value="111576">Đường số 2</option>
                                                    <option value="4985">Đường Số 2</option>
                                                    <option value="7032">Đường Số 2 (Xuân Thới Đông)</option>
                                                    <option value="6575">Đường Số 2(Phường Linh Trung)</option>
                                                    <option value="6727">Đường Số 2,khu dân cư Bình Hưng</option>
                                                    <option value="6728">Đường Số 2,khu dân cư Gia Hòa</option>
                                                    <option value="6729">Đường Số 2,khu dân cư Trung Sơn</option>
                                                    <option value="6730">Đường Số 2,khu tái định cư Tân Túc</option>
                                                    <option value="6576">Đường Số 2,Phường Hiệp Bình Chánh</option>
                                                    <option value="140927">Đường số 20</option>
                                                    <option value="5956">Đường Số 20</option>
                                                    <option value="4986">Đường Số 20</option>
                                                    <option value="171908">Đường Số 20</option>
                                                    <option value="5367">Đường Số 20</option>
                                                    <option value="5681">Đường Số 20</option>
                                                    <option value="6731">Đường Số 20,khu dân cư Bình Hưng</option>
                                                    <option value="6732">Đường Số 20,khu dân cư Him Lam 6A</option>
                                                    <option value="5368">Đường Số 207</option>
                                                    <option value="171909">Đường Số 21</option>
                                                    <option value="4987">Đường Số 21</option>
                                                    <option value="140928">Đường số 21</option>
                                                    <option value="5957">Đường Số 21</option>
                                                    <option value="5682">Đường Số 21</option>
                                                    <option value="6733">Đường Số 21,khu dân cư Bình Hưng</option>
                                                    <option value="140929">Đường số 22</option>
                                                    <option value="5683">Đường Số 22</option>
                                                    <option value="5958">Đường Số 22</option>
                                                    <option value="4988">Đường Số 22</option>
                                                    <option value="171910">Đường Số 22</option>
                                                    <option value="6734">Đường Số 22,khu dân cư Bình Hưng</option>
                                                    <option value="6735">Đường Số 22,Khu dân cư Him Lam 6A</option>
                                                    <option value="140930">Đường số 23</option>
                                                    <option value="5959">Đường Số 23</option>
                                                    <option value="171911">Đường Số 23</option>
                                                    <option value="4989">Đường Số 23</option>
                                                    <option value="5369">Đường Số 236</option>
                                                    <option value="4990">Đường Số 24</option>
                                                    <option value="171912">Đường Số 24</option>
                                                    <option value="5960">Đường Số 24</option>
                                                    <option value="5684">Đường Số 24</option>
                                                    <option value="140931">Đường số 24</option>
                                                    <option value="6736">Đường Số 24,khu dân cư Bình Hưng</option>
                                                    <option value="6737">Đường Số 24,khu dân cư Him Lam 6A</option>
                                                    <option value="5685">Đường Số 24a</option>
                                                    <option value="5686">Đường Số 25</option>
                                                    <option value="5961">Đường Số 25</option>
                                                    <option value="140932">Đường số 25</option>
                                                    <option value="171913">Đường Số 25</option>
                                                    <option value="4991">Đường Số 25</option>
                                                    <option value="1038650">Đường số 25</option>
                                                    <option value="987654">Đường số 26</option>
                                                    <option value="4992">Đường Số 26</option>
                                                    <option value="171914">Đường Số 26</option>
                                                    <option value="140934">Đường số 26</option>
                                                    <option value="5962">Đường Số 26</option>
                                                    <option value="5687">Đường Số 26/3</option>
                                                    <option value="5370">Đường Số 265</option>
                                                    <option value="907148">Đường số 27</option>
                                                    <option value="171915">Đường Số 27</option>
                                                    <option value="4993">Đường Số 27</option>
                                                    <option value="5963">Đường Số 27</option>
                                                    <option value="140935">Đường số 27</option>
                                                    <option value="6415">Đường Số 27 (p.sơn Kỳ)</option>
                                                    <option value="6577">Đường Số 27,Phường Hiệp Bình Chánh</option>
                                                    <option value="5371">Đường Số 275</option>
                                                    <option value="4994">Đường Số 28</option>
                                                    <option value="171916">Đường Số 28</option>
                                                    <option value="140936">Đường số 28</option>
                                                    <option value="5964">Đường Số 28</option>
                                                    <option value="5965">Đường Số 29</option>
                                                    <option value="5688">Đường Số 29</option>
                                                    <option value="140937">Đường số 29</option>
                                                    <option value="171917">Đường Số 29</option>
                                                    <option value="4995">Đường Số 29</option>
                                                    <option value="5689">Đường Số 2a</option>
                                                    <option value="6738">Đường Số 2A,khu dân cư Trung Sơn</option>
                                                    <option value="5690">Đường Số 2b</option>
                                                    <option value="6739">Đường Số 2B,khu dân cư Trung Sơn</option>
                                                    <option value="5691">Đường Số 2c</option>
                                                    <option value="5692">Đường Số 2d</option>
                                                    <option value="5966">Đường Số 3</option>
                                                    <option value="6162">Đường Số 3</option>
                                                    <option value="6416">Đường Số 3</option>
                                                    <option value="6580">Đường Số 3</option>
                                                    <option value="7033">Đường Số 3</option>
                                                    <option value="5693">Đường Số 3</option>
                                                    <option value="4996">Đường Số 3</option>
                                                    <option value="111577">Đường số 3</option>
                                                    <option value="6578">Đường số 3 (P. Hiệp Bình Phước)</option>
                                                    <option value="5869">Đường số 3 Khu Thanh Đa</option>
                                                    <option value="6579">Đường số 3(Đường Chữ U),Phường Linh Xuân</option>
                                                    <option value="6740">Đường Số 3,khu dân cư Bình Hưng</option>
                                                    <option value="6741">Đường số 3,khu dân cư Gia Hòa</option>
                                                    <option value="6742">Đường Số 3,khu dân cư Trung Sơn</option>
                                                    <option value="6743">Đường Số 3,khu tái định cư Tân Túc</option>
                                                    <option value="140938">Đường số 30</option>
                                                    <option value="5967">Đường Số 30</option>
                                                    <option value="1216877">Đường số 30</option>
                                                    <option value="171918">Đường Số 30</option>
                                                    <option value="4997">Đường Số 30</option>
                                                    <option value="4998">Đường Số 31</option>
                                                    <option value="171919">Đường Số 31</option>
                                                    <option value="5968">Đường Số 31</option>
                                                    <option value="140939">Đường số 31</option>
                                                    <option value="5372">Đường Số 311</option>
                                                    <option value="171920">Đường Số 32</option>
                                                    <option value="1038645">Đường số 32</option>
                                                    <option value="4999">Đường Số 32</option>
                                                    <option value="140940">Đường số 32</option>
                                                    <option value="5969">Đường số 32</option>
                                                    <option value="5000">Đường Số 32a</option>
                                                    <option value="5001">Đường Số 33</option>
                                                    <option value="1038646">Đường số 33</option>
                                                    <option value="171921">Đường Số 33</option>
                                                    <option value="170672">Đường số 33</option>
                                                    <option value="140941">Đường số 33</option>
                                                    <option value="140942">Đường số 34</option>
                                                    <option value="171922">Đường Số 34</option>
                                                    <option value="5002">Đường Số 34</option>
                                                    <option value="1573510">Đường số 34</option>
                                                    <option value="5003">Đường Số 35</option>
                                                    <option value="171923">Đường Số 35</option>
                                                    <option value="6581">Đường Số 35</option>
                                                    <option value="6582">Đường Số 36</option>
                                                    <option value="170682">Đường số 36</option>
                                                    <option value="171924">Đường Số 36</option>
                                                    <option value="5004">Đường Số 36</option>
                                                    <option value="5005">Đường Số 37</option>
                                                    <option value="171925">Đường Số 37</option>
                                                    <option value="1038653">Đường số 37</option>
                                                    <option value="170681">Đường số 37</option>
                                                    <option value="140957">Đường số 37</option>
                                                    <option value="5373">Đường Số 379</option>
                                                    <option value="5694">Đường Số 38</option>
                                                    <option value="171926">Đường Số 38</option>
                                                    <option value="5006">Đường Số 38</option>
                                                    <option value="6583">Đường Số 38</option>
                                                    <option value="170680">Đường số 38</option>
                                                    <option value="5374">Đường Số 385</option>
                                                    <option value="5695">Đường Số 38a</option>
                                                    <option value="5007">Đường Số 39</option>
                                                    <option value="171927">Đường Số 39</option>
                                                    <option value="1432469">Đường số 39</option>
                                                    <option value="170723">Đường số 39</option>
                                                    <option value="140958">Đường số 39</option>
                                                    <option value="1038652">Đường số 39 Tân Qui Đông</option>
                                                    <option value="5696">Đường Số 3a</option>
                                                    <option value="6744">Đường Số 3A,khu dân cư Gia Hòa</option>
                                                    <option value="5697">Đường Số 3b</option>
                                                    <option value="5698">Đường Số 3c</option>
                                                    <option value="6584">Đường Số 3-Phường Linh Trung</option>
                                                    <option value="6585">Đường Số 4</option>
                                                    <option value="5970">Đường Số 4</option>
                                                    <option value="6163">Đường Số 4</option>
                                                    <option value="5699">Đường Số 4</option>
                                                    <option value="111578">Đường số 4</option>
                                                    <option value="5008">Đường Số 4</option>
                                                    <option value="7034">Đường Số 4 (Xuân Thới Đông)</option>
                                                    <option value="6745">Đường Số 4,khu dân cư Bình Hưng</option>
                                                    <option value="6746">Đường Số 4,khu dân cư Gia Hòa</option>
                                                    <option value="6747">Đường Số 4,khu dân cư Trung Sơn</option>
                                                    <option value="6748">Đường Số 4,khu tái định cư Tân Túc</option>
                                                    <option value="6586">Đường Số 4,Phường Linh Xuân</option>
                                                    <option value="6587">Đường Số 4,Phường Trường Thọ</option>
                                                    <option value="140959">Đường số 40</option>
                                                    <option value="170724">Đường số 40</option>
                                                    <option value="5009">Đường Số 40</option>
                                                    <option value="171895">Đường số 40</option>
                                                    <option value="5700">Đường Số 40</option>
                                                    <option value="5701">Đường Số 40a</option>
                                                    <option value="5702">Đường Số 40b</option>
                                                    <option value="171894">Đường số 41</option>
                                                    <option value="5010">Đường Số 41</option>
                                                    <option value="170725">Đường số 41</option>
                                                    <option value="968287">Đường số 41</option>
                                                    <option value="140960">Đường số 41</option>
                                                    <option value="140961">Đường số 42</option>
                                                    <option value="170726">Đường số 42</option>
                                                    <option value="171896">Đường số 42</option>
                                                    <option value="5703">Đường Số 42</option>
                                                    <option value="5704">Đường Số 42a</option>
                                                    <option value="589462">Đường số 43</option>
                                                    <option value="171897">Đường số 43</option>
                                                    <option value="170727">Đường số 43</option>
                                                    <option value="140962">Đường số 43</option>
                                                    <option value="140963">Đường số 44</option>
                                                    <option value="170728">Đường số 44</option>
                                                    <option value="5705">Đường Số 44</option>
                                                    <option value="5011">Đường Số 45</option>
                                                    <option value="170737">Đường số 45</option>
                                                    <option value="140964">Đường số 45</option>
                                                    <option value="140965">Đường số 46</option>
                                                    <option value="170738">Đường số 46</option>
                                                    <option value="5012">Đường Số 46</option>
                                                    <option value="171930">Đường Số 46</option>
                                                    <option value="5706">Đường Số 46</option>
                                                    <option value="5707">Đường Số 46a</option>
                                                    <option value="5708">Đường Số 46b</option>
                                                    <option value="5709">Đường Số 47</option>
                                                    <option value="1038651">Đường số 47</option>
                                                    <option value="171931">Đường Số 47</option>
                                                    <option value="5013">Đường Số 47</option>
                                                    <option value="170739">Đường số 47</option>
                                                    <option value="140966">Đường số 47</option>
                                                    <option value="140967">Đường số 48</option>
                                                    <option value="170741">Đường số 48</option>
                                                    <option value="5014">Đường Số 48</option>
                                                    <option value="171932">Đường Số 48</option>
                                                    <option value="5710">Đường Số 48</option>
                                                    <option value="5711">Đường Số 48a</option>
                                                    <option value="5712">Đường Số 48b</option>
                                                    <option value="5713">Đường Số 48c</option>
                                                    <option value="5714">Đường Số 49</option>
                                                    <option value="749801">Đường Số 49</option>
                                                    <option value="5015">Đường Số 49</option>
                                                    <option value="170742">Đường số 49</option>
                                                    <option value="140968">Đường số 49</option>
                                                    <option value="5715">Đường Số 49a</option>
                                                    <option value="5716">Đường Số 49b</option>
                                                    <option value="5717">Đường Số 49c</option>
                                                    <option value="6749">Đường Số 4A,khu dân cư Trung Sơn</option>
                                                    <option value="5718">Đường Số 4c</option>
                                                    <option value="6588">Đường Số 4-Phường Linh Trung</option>
                                                    <option value="742808">Đường số 5</option>
                                                    <option value="124972">Đường số 5</option>
                                                    <option value="5971">Đường Số 5</option>
                                                    <option value="6164">Đường Số 5</option>
                                                    <option value="5719">Đường Số 5</option>
                                                    <option value="5375">Đường Số 5</option>
                                                    <option value="5016">Đường Số 5</option>
                                                    <option value="111583">Đường số 5</option>
                                                    <option value="140877">Đường Số 5 (Bà Giang)</option>
                                                    <option value="7035">Đường Số 5 (Xuân Thới Đông)</option>
                                                    <option value="6750">Đường Số 5 A,B,C,khu dân cư Bình Hưng</option>
                                                    <option value="6589">Đường Số 5(Bà Giang)</option>
                                                    <option value="6751">Đường Số 5,khu dân cư Bình Hưng</option>
                                                    <option value="6752">Đường Số 5,khu dân cư Gia Hòa</option>
                                                    <option value="6753">Đường Số 5,khu dân cư Him Lam 6B</option>
                                                    <option value="6754">Đường Số 5,khu dân cư Trung Sơn</option>
                                                    <option value="6755">Đường Số 5,khu tái định cư Tân Túc</option>
                                                    <option value="140970">Đường số 50</option>
                                                    <option value="170729">Đường số 50</option>
                                                    <option value="171934">Đường Số 50</option>
                                                    <option value="5017">Đường Số 50</option>
                                                    <option value="5720">Đường Số 50</option>
                                                    <option value="5721">Đường Số 50a</option>
                                                    <option value="5722">Đường Số 50b</option>
                                                    <option value="5723">Đường Số 50c</option>
                                                    <option value="5724">Đường Số 50d</option>
                                                    <option value="5725">Đường Số 51</option>
                                                    <option value="171935">Đường Số 51</option>
                                                    <option value="170731">Đường số 51</option>
                                                    <option value="140971">Đường số 51</option>
                                                    <option value="140972">Đường số 52</option>
                                                    <option value="171936">Đường Số 52</option>
                                                    <option value="5726">Đường Số 52</option>
                                                    <option value="5526">Đường số 52 C/x Lữ Gia</option>
                                                    <option value="5727">Đường Số 52a</option>
                                                    <option value="5728">Đường Số 52b</option>
                                                    <option value="5729">Đường Số 53</option>
                                                    <option value="1038649">Đường số 53</option>
                                                    <option value="171937">Đường Số 53</option>
                                                    <option value="140973">Đường số 53</option>
                                                    <option value="170732">Đường số 53</option>
                                                    <option value="5730">Đường Số 53a</option>
                                                    <option value="5731">Đường Số 53b</option>
                                                    <option value="5732">Đường Số 53c</option>
                                                    <option value="5733">Đường Số 53d</option>
                                                    <option value="5734">Đường Số 54</option>
                                                    <option value="171938">Đường Số 54</option>
                                                    <option value="5735">Đường Số 54a</option>
                                                    <option value="5736">Đường Số 55</option>
                                                    <option value="171939">Đường Số 55</option>
                                                    <option value="5737">Đường Số 55a</option>
                                                    <option value="5738">Đường Số 55b</option>
                                                    <option value="171940">Đường Số 56</option>
                                                    <option value="171941">Đường Số 57</option>
                                                    <option value="5739">Đường Số 57</option>
                                                    <option value="5740">Đường Số 57a</option>
                                                    <option value="5741">Đường Số 57b</option>
                                                    <option value="5742">Đường Số 57c</option>
                                                    <option value="171942">Đường Số 58</option>
                                                    <option value="171943">Đường Số 59</option>
                                                    <option value="1038647">Đường số 59</option>
                                                    <option value="5743">Đường Số 59</option>
                                                    <option value="170733">Đường số 59</option>
                                                    <option value="5744">Đường Số 59b</option>
                                                    <option value="797478">Đường số 5A</option>
                                                    <option value="6756">Đường Số 5A,khu dân cư Trung Sơn</option>
                                                    <option value="5745">Đường Số 5b</option>
                                                    <option value="6757">Đường Số 5B,khu dân cư Trung Sơn</option>
                                                    <option value="5746">Đường Số 5c</option>
                                                    <option value="6758">Đường Số 5C,khu dân cư Trung Sơn</option>
                                                    <option value="5747">Đường Số 5d</option>
                                                    <option value="5748">Đường Số 5e</option>
                                                    <option value="5749">Đường Số 5f</option>
                                                    <option value="5750">Đường Số 6</option>
                                                    <option value="5211">Đường số 6</option>
                                                    <option value="5376">Đường Số 6</option>
                                                    <option value="111584">Đường số 6</option>
                                                    <option value="5018">Đường Số 6</option>
                                                    <option value="5972">Đường Số 6</option>
                                                    <option value="6165">Đường Số 6</option>
                                                    <option value="7036">Đường Số 6 (Xuân Thới Đông)</option>
                                                    <option value="6590">Đường số 6 P.Trường Thọ</option>
                                                    <option value="6591">Đường số 6 phường rường Thọ</option>
                                                    <option value="671674">Đường số 6, P.Hiệp Bình Phước</option>
                                                    <option value="6759">Đường Số 6,khu dân cư Bình Hưng</option>
                                                    <option value="6760">Đường Số 6,khu dân cư Gia Hòa</option>
                                                    <option value="6761">Đường Số 6,khu dân cư Him Lam</option>
                                                    <option value="6762">Đường Số 6,khu dân cư Trung Sơn</option>
                                                    <option value="6763">Đường Số 6,khu tái định cư Tân Túc</option>
                                                    <option value="6592">Đường Số 6,Phường Linh Chiểu</option>
                                                    <option value="6593">Đường Số 6,Phường Linh Trung</option>
                                                    <option value="171944">Đường Số 60</option>
                                                    <option value="171945">Đường Số 61</option>
                                                    <option value="170734">Đường số 61</option>
                                                    <option value="171946">Đường Số 62</option>
                                                    <option value="171947">Đường Số 63</option>
                                                    <option value="171948">Đường Số 64</option>
                                                    <option value="171949">Đường Số 65</option>
                                                    <option value="171950">Đường Số 66</option>
                                                    <option value="171951">Đường Số 67</option>
                                                    <option value="5214">Đường Số 67</option>
                                                    <option value="5377">Đường Số 68</option>
                                                    <option value="171952">Đường Số 68</option>
                                                    <option value="171959">Đường Số 69</option>
                                                    <option value="6764">Đường Số 6A,khu dân cư Trung Sơn</option>
                                                    <option value="6765">Đường Số 6B,khu dân cư Trung Sơn</option>
                                                    <option value="6766">Đường Số 6C,khu dân cư Trung Sơn</option>
                                                    <option value="6767">Đường Số 6D,khu dân cư Trung Sơn</option>
                                                    <option value="6594">Đường Số 6-Phường Linh Xuân</option>
                                                    <option value="6597">Đường Số 7</option>
                                                    <option value="5973">Đường Số 7</option>
                                                    <option value="6166">Đường Số 7</option>
                                                    <option value="111585">Đường số 7</option>
                                                    <option value="641586">Đường Số 7</option>
                                                    <option value="5019">Đường Số 7</option>
                                                    <option value="5378">Đường Số 7</option>
                                                    <option value="5751">Đường Số 7</option>
                                                    <option value="7037">Đường Số 7 (Xuân Thới Đông)</option>
                                                    <option value="6768">Đường Số 7,khu dân cư Bình Hưng</option>
                                                    <option value="6769">Đường Số 7,khu dân cư Trung Sơn</option>
                                                    <option value="6595">Đường Số 7,Phường Linh Trung</option>
                                                    <option value="171960">Đường Số 70</option>
                                                    <option value="171961">Đường Số 71</option>
                                                    <option value="171962">Đường Số 72</option>
                                                    <option value="171963">Đường Số 73</option>
                                                    <option value="171898">Đường Số 74</option>
                                                    <option value="171964">Đường Số 75</option>
                                                    <option value="1118967">Đường số 76</option>
                                                    <option value="171965">Đường Số 77</option>
                                                    <option value="640373">Đường Số 77</option>
                                                    <option value="171966">Đường Số 78</option>
                                                    <option value="171967">Đường Số 79</option>
                                                    <option value="1038648">Đường số 79</option>
                                                    <option value="5752">Đường Số 7a</option>
                                                    <option value="6770">Đường Số 7A,khu dân cư Trung Sơn</option>
                                                    <option value="5753">Đường Số 7b</option>
                                                    <option value="6596">Đường Số 7-Phường Linh Xuân</option>
                                                    <option value="6598">Đường Số 8</option>
                                                    <option value="5754">Đường Số 8</option>
                                                    <option value="5974">Đường Số 8</option>
                                                    <option value="5379">Đường Số 8</option>
                                                    <option value="111574">Đường số 8</option>
                                                    <option value="5020">Đường Số 8</option>
                                                    <option value="6599">Đường Số 8(Phường Trường Thọ)</option>
                                                    <option value="6771">Đường Số 8,khu dân cư Bình Hưng</option>
                                                    <option value="6772">Đường Số 8,khu dân cư Gia Hòa</option>
                                                    <option value="6773">Đường Số 8,khu dân cư Trung Sơn</option>
                                                    <option value="6774">Đường Số 8,khu tái định cư Tân Túc</option>
                                                    <option value="6600">Đường Số 8,Phường Linh Trung</option>
                                                    <option value="171968">Đường Số 80</option>
                                                    <option value="171969">Đường Số 81</option>
                                                    <option value="171970">Đường Số 82</option>
                                                    <option value="791725">Đường số 84</option>
                                                    <option value="5380">Đường Số 85</option>
                                                    <option value="6775">Đường Số 8A,khu dân cư Trung Sơn</option>
                                                    <option value="5755">Đường Số 8b</option>
                                                    <option value="6776">Đường Số 8B,khu dân cư Trung Sơn</option>
                                                    <option value="6777">Đường Số 8C,khu dân cư Trung Sơn</option>
                                                    <option value="1441959">Đường số 9</option>
                                                    <option value="5756">Đường Số 9</option>
                                                    <option value="171899">Đường Số 9</option>
                                                    <option value="5021">Đường Số 9</option>
                                                    <option value="1441958">Đường Số 9 (Phường 15)</option>
                                                    <option value="5975">Đường Số 9 (Phường10)</option>
                                                    <option value="6601">Đường Số 9(Phường Trường Thọ)</option>
                                                    <option value="6778">Đường Số 9,khu dân cư Bình Hưng</option>
                                                    <option value="6779">Đường Số 9,khu dân cư Him Lam 6B</option>
                                                    <option value="6780">Đường Số 9,khu dân cư Trung Sơn</option>
                                                    <option value="6602">Đường Số 9,Phường Linh Tây</option>
                                                    <option value="6603">Đường Số 9,Phường Tam Bình</option>
                                                    <option value="5381">Đường Số 904</option>
                                                    <option value="5757">Đường Số 9a</option>
                                                    <option value="6781">Đường Số 9A,khu dân cư Trung Sơn</option>
                                                    <option value="5758">Đường Số 9b</option>
                                                    <option value="6604">Đường Số 9-Phường Linh Trung</option>
                                                    <option value="6782">Đường Sư 9</option>
                                                    <option value="6417">Đường T1</option>
                                                    <option value="6783">Đường T12</option>
                                                    <option value="6418">Đường T4a</option>
                                                    <option value="6419">Đường T4b</option>
                                                    <option value="6420">Đường T6</option>
                                                    <option value="1640697">Đường TA08</option>
                                                    <option value="7038">Đường Tân Hiệp</option>
                                                    <option value="7039">Đường Tân Hiệp 14</option>
                                                    <option value="7040">Đường tân Hiệp 15</option>
                                                    <option value="7041">Đường Tân Hiệp 31</option>
                                                    <option value="7042">Đường Tân Hiệp 4</option>
                                                    <option value="7043">Đường Tân Hiệp 7</option>
                                                    <option value="7044">Đường Tân Xuân 2</option>
                                                    <option value="7045">Đường Tân Xuân 6</option>
                                                    <option value="6784">Đường Tập Đoàn 16 (Đa Phước)</option>
                                                    <option value="6785">Đường Tập Đoàn 7-11</option>
                                                    <option value="1701338">Dương Thị Mười</option>
                                                    <option value="734576">Dương Thiệu Tước</option>
                                                    <option value="6421">Đường Tổ 46</option>
                                                    <option value="6167">Đường Tổ 46-p10</option>
                                                    <option value="6422">Đường Tổ 48</option>
                                                    <option value="5870">Đường Trục</option>
                                                    <option value="6423">Đường Trước Trường Ptth Tân Bình</option>
                                                    <option value="5527">Dương Tử Giang</option>
                                                    <option value="5055">Dương Tử Giang</option>
                                                    <option value="5759">Dương Tự Quán</option>
                                                    <option value="7046">Đường Tuyến ống Nước Sạch</option>
                                                    <option value="1714981">Đường TX22</option>
                                                    <option value="5223">Đường U</option>
                                                    <option value="1728931">Dương Văn An</option>
                                                    <option value="6605">Dương Văn Cam</option>
                                                    <option value="6424">Dương Văn Dương</option>
                                                    <option value="6867">Dương Văn Hạnh</option>
                                                    <option value="6168">Dương Vân Nga</option>
                                                    <option value="905136">Đường Vành Đai Trong</option>
                                                    <option value="7188">Đường Vào Dầu Nhớt BP</option>
                                                    <option value="7189">Đường vào KDC VITACO</option>
                                                    <option value="7190">Đường Vào Kho Xăng Dầu Lâm Tài Chính</option>
                                                    <option value="7191">Đường Vào Kho Xăng Dầu PETECHIM</option>
                                                    <option value="5305">Đường Vào Khu Dân Cư Phú Lợi</option>
                                                    <option value="7192">Đường vào trung tâm sinh hoạt Thanh Thiếu Niên</option>
                                                    <option value="7193">Đường vào Trường THCS Lê Lợi</option>
                                                    <option value="5306">Đường Ven Sông Xáng</option>
                                                    <option value="6786">Đường Xã Hai</option>
                                                    <option value="6169">Duy Tân</option>
                                                    <option value="6038">Duy Tân</option>
                                                    <option value="6868">Duyên Hải</option>
                                                    <option value="5056">Gia Phú</option>
                                                    <option value="5160">Gia Phú</option>
                                                    <option value="7047">Giác Đạo</option>
                                                    <option value="6170">Giải Phóng</option>
                                                    <option value="4871">Giang Văn Minh</option>
                                                    <option value="6929">Giáp Hải</option>
                                                    <option value="6930">Giáp Hải nối dài</option>
                                                    <option value="6869">Giồng Ao</option>
                                                    <option value="951037">Giồng Cát</option>
                                                    <option value="6171">Gò Cẩm Đệm</option>
                                                    <option value="1140359">Gò Cát</option>
                                                    <option value="5057">Gò Công</option>
                                                    <option value="6425">Gò Dầu</option>
                                                    <option value="6606">Gò Dưa(Hương Lộ 25 Phường Tam Bình)</option>
                                                    <option value="5382">Gò Nổi</option>
                                                    <option value="5224">Gò Ô Môi</option>
                                                    <option value="5760">Gò Xoài</option>
                                                    <option value="6172">Hà Bá Tường</option>
                                                    <option value="6173">Hà Bá Tuyển</option>
                                                    <option value="5976">Hà Huy Giáp</option>
                                                    <option value="5581">Hà Huy Giáp</option>
                                                    <option value="5225">Hà Huy Tập (h.2102)</option>
                                                    <option value="7048">Hà Nội</option>
                                                    <option value="6870">Hà Quang Vóc</option>
                                                    <option value="5058">Hà Tôn Quyền</option>
                                                    <option value="5528">Hà Tôn Quyền</option>
                                                    <option value="6931">Hà Văn Lao</option>
                                                    <option value="5383">Hai Bà Trưng</option>
                                                    <option value="4920">Hai Bà Trưng</option>
                                                    <option value="4673">Hai Bà Trưng</option>
                                                    <option value="5059">Hải Thượng Lãn Ông</option>
                                                    <option value="4674">Hải Triều</option>
                                                    <option value="4675">Hàm Nghi</option>
                                                    <option value="5060">Hàm Tử</option>
                                                    <option value="5529">Hàn Hải Nguyên</option>
                                                    <option value="5530">Hàn Hải Nguyên (nối Dài)</option>
                                                    <option value="6426">Hàn Mặc Tử</option>
                                                    <option value="4676">Hàn Thuyên</option>
                                                    <option value="5384">Hàng Tre</option>
                                                    <option value="6427">Hành Lang Bảo Vệ Nhánh Phụ Kênh Nước Đen</option>
                                                    <option value="5977">Hạnh Thông</option>
                                                    <option value="6174">Hát Giang</option>
                                                    <option value="6175">Hậu Giang</option>
                                                    <option value="5161">Hậu Giang</option>
                                                    <option value="6428">Hiền Vương</option>
                                                    <option value="6607">Hiệp Bình</option>
                                                    <option value="6176">Hiệp Nhất</option>
                                                    <option value="5582">Hiệp Thành 05</option>
                                                    <option value="5583">Hiệp Thành 06</option>
                                                    <option value="5584">Hiệp Thành 13</option>
                                                    <option value="5585">Hiệp Thành 17</option>
                                                    <option value="5586">Hiệp Thành 22</option>
                                                    <option value="5587">Hiệp Thành 23</option>
                                                    <option value="5588">Hiệp Thành 27</option>
                                                    <option value="5447">Hồ Bá Kiện</option>
                                                    <option value="5385">Hồ Bá Phấn</option>
                                                    <option value="6039">Hồ Biểu Chánh</option>
                                                    <option value="6429">Hồ Đắc Di</option>
                                                    <option value="4677">Hồ Hảo Hớn</option>
                                                    <option value="5761">Hồ Học Lãm</option>
                                                    <option value="4678">Hồ Huấn Nghiệp</option>
                                                    <option value="6430">Hồ Ngọc Cẩn</option>
                                                    <option value="5448">Hồ Thị Kỷ</option>
                                                    <option value="4679">Hồ Tùng Mậu</option>
                                                    <option value="6040">Hồ Văn Huê</option>
                                                    <option value="5762">Hồ Văn Long</option>
                                                    <option value="6932">Hồ Văn Tắng</option>
                                                    <option value="6608">Hồ Văn Tư</option>
                                                    <option value="5871">Hồ Xuân Hương</option>
                                                    <option value="4921">Hồ Xuân Hương</option>
                                                    <option value="5531">Hoà Bình</option>
                                                    <option value="140974">Hòa Bình</option>
                                                    <option value="6431">Hòa Bình</option>
                                                    <option value="6041">hoa cau</option>
                                                    <option value="6042">Hoa Cúc</option>
                                                    <option value="6043">Hoa Đào</option>
                                                    <option value="5532">Hoà Hảo</option>
                                                    <option value="5449">Hòa Hảo</option>
                                                    <option value="6177">Hoà Hiệp</option>
                                                    <option value="6044">Hoa hồng</option>
                                                    <option value="6045">Hoa Huệ</option>
                                                    <option value="5450">Hòa Hưng</option>
                                                    <option value="873930">Hoa Lài</option>
                                                    <option value="6046">Hoa Lan</option>
                                                    <option value="6047">Hoa Mai</option>
                                                    <option value="4680">Hòa Mỹ</option>
                                                    <option value="6048">Hoa Phượng</option>
                                                    <option value="6049">Hoa Sứ</option>
                                                    <option value="6050">Hoa Sữa</option>
                                                    <option value="6051">Hoa Thị</option>
                                                    <option value="6052">Hoa Trà</option>
                                                    <option value="1071000">Hoài Thanh</option>
                                                    <option value="6933">Hoàng Bá Huân</option>
                                                    <option value="6178">Hoàng Bật Đạt</option>
                                                    <option value="6787">Hoàng Đạo Thúy</option>
                                                    <option value="140975">Hoàng Diệu</option>
                                                    <option value="6053">Hoàng Diệu</option>
                                                    <option value="5022">Hoàng Diệu</option>
                                                    <option value="6609">Hoàng Diệu 2</option>
                                                    <option value="5451">Hoàng Dư Khương</option>
                                                    <option value="5533">Hoàng Đức Tương</option>
                                                    <option value="5872">Hoàng Hoa Thám</option>
                                                    <option value="6054">Hoàng Hoa Thám</option>
                                                    <option value="6179">Hoàng Hoa Thám</option>
                                                    <option value="5978">Hoàng Hoa Thám</option>
                                                    <option value="5763">Hoàng Hưng</option>
                                                    <option value="5386">Hoàng Hữu Nam</option>
                                                    <option value="6180">Hoàng Kế Viêm (c21)</option>
                                                    <option value="5162">Hoàng Lê Kha</option>
                                                    <option value="5979">Hoàng Minh Giám</option>
                                                    <option value="6055">Hoàng Minh Giám</option>
                                                    <option value="6432">Hoàng Ngọc Phách</option>
                                                    <option value="6788">Hoàng Phan Thái</option>
                                                    <option value="5226">Hoàng Quốc Việt</option>
                                                    <option value="4922">Hoàng Sa</option>
                                                    <option value="4681">Hoàng Sa</option>
                                                    <option value="6181">Hoàng Sa</option>
                                                    <option value="6433">Hoàng Thiều Hoa</option>
                                                    <option value="6434">Hoàng Văn Hoè</option>
                                                    <option value="5764">Hoàng Văn Hợp</option>
                                                    <option value="5227">Hoàng Văn Thái</option>
                                                    <option value="6056">Hoàng Văn Thụ</option>
                                                    <option value="6182">Hoàng Văn Thụ</option>
                                                    <option value="6183">Hoàng Việt</option>
                                                    <option value="1648427">Hoàng Xuân Hoành</option>
                                                    <option value="6435">Hoàng Xuân Nhị</option>
                                                    <option value="6789">Hốc Hưu</option>
                                                    <option value="5061">Học Lạc</option>
                                                    <option value="5062">Hồng Bàng</option>
                                                    <option value="5163">Hồng Bàng</option>
                                                    <option value="5873">Hồng Bàng</option>
                                                    <option value="5534">Hồng Bàng</option>
                                                    <option value="6057">Hồng hà</option>
                                                    <option value="6184">Hồng Hà</option>
                                                    <option value="6185">Hồng Lạc</option>
                                                    <option value="6186">Hồng Lạc (hương Lộ 2)</option>
                                                    <option value="5452">Hồng Lĩnh</option>
                                                    <option value="5387">Hồng Sến</option>
                                                    <option value="6187">Hưng Hoá</option>
                                                    <option value="5453">Hưng Long</option>
                                                    <option value="5228">Hưng Long</option>
                                                    <option value="6790">Hưng Long-Quy Đức</option>
                                                    <option value="6791">Hưng Nhơn</option>
                                                    <option value="129628">Hưng Phú</option>
                                                    <option value="5454">Hùng Vương</option>
                                                    <option value="110050">Hùng Vương</option>
                                                    <option value="642866">Hùng Vương</option>
                                                    <option value="2090130">Hùng Vương</option>
                                                    <option value="5063">Hùng Vương</option>
                                                    <option value="140834">Hùng Vương</option>
                                                    <option value="5455">Hương Giang</option>
                                                    <option value="6934">Hương Lộ 10</option>
                                                    <option value="6792">Hương Lộ 11</option>
                                                    <option value="5765">Hương Lộ 13 (lê Trọng Tấn)</option>
                                                    <option value="5766">Hương Lộ 2</option>
                                                    <option value="140789">Hương lộ 2</option>
                                                    <option value="140791">Hương lộ 22</option>
                                                    <option value="5767">Hương Lộ 3</option>
                                                    <option value="6436">hương lộ 3</option>
                                                    <option value="140790">Hương lộ 4</option>
                                                    <option value="7049">Hương Lộ 60 (Lê Lợi)</option>
                                                    <option value="7050">Hương Lộ 60B</option>
                                                    <option value="140839">Hương lộ 80</option>
                                                    <option value="7051">Hương Lộ 80B</option>
                                                    <option value="140976">Hữu Nghị</option>
                                                    <option value="4682">Huyền Quang</option>
                                                    <option value="5535">Huyện Toại</option>
                                                    <option value="4683">Huyền Trân Công Chúa</option>
                                                    <option value="6793">Huỳnh Bá Chánh</option>
                                                    <option value="5874">Huỳnh Đình Hai</option>
                                                    <option value="5980">Huỳnh Khương An</option>
                                                    <option value="4684">Huỳnh Khương Ninh</option>
                                                    <option value="6188">Huỳnh Lan Khanh</option>
                                                    <option value="5064">Huỳnh Mẫn Đạt</option>
                                                    <option value="5875">Huỳnh Mẫn Đạt</option>
                                                    <option value="6935">Huỳnh Minh Mương</option>
                                                    <option value="5876">Huỳnh Tá Bang</option>
                                                    <option value="5229">Huỳnh Tấn Phát</option>
                                                    <option value="7194">Huỳnh Tấn Phát</option>
                                                    <option value="6936">Huỳnh Thị Bẳng</option>
                                                    <option value="6437">Huỳnh Thiện Lộc</option>
                                                    <option value="4685">Huỳnh Thúc Kháng</option>
                                                    <option value="5388">Huỳnh Thúc Kháng</option>
                                                    <option value="5877">Huỳnh Tịnh Của</option>
                                                    <option value="4923">Huỳnh Tịnh Của</option>
                                                    <option value="6189">Huỳnh Tịnh Của</option>
                                                    <option value="6058">Huỳnh Văn Bánh</option>
                                                    <option value="6438">Huỳnh Văn Chính</option>
                                                    <option value="5536">Huỳnh Văn Chính</option>
                                                    <option value="6937">Huỳnh Văn Cọ</option>
                                                    <option value="275137">Huỳnh Văn Gấm</option>
                                                    <option value="6439">Huỳnh Văn Một</option>
                                                    <option value="6190">Huỳnh Văn Nghệ</option>
                                                    <option value="5981">Huỳnh Văn Nghệ</option>
                                                    <option value="6794">Huỳnh Văn Trí</option>
                                                    <option value="5389">Ích Thạnh</option>
                                                    <option value="6440">Ích Thiện</option>
                                                    <option value="6795">Kênh A</option>
                                                    <option value="6796">Kênh B</option>
                                                    <option value="1042370">Kênh Nước Đen</option>
                                                    <option value="6402">Kênh Tân Hoá</option>
                                                    <option value="6610">Kha Vạn Cân</option>
                                                    <option value="6191">Khai Quang</option>
                                                    <option value="6192">Khai Trí</option>
                                                    <option value="5023">Khánh Hội</option>
                                                    <option value="5768">Khiếu Năng Tỉnh</option>
                                                    <option value="140848">Khiếu năng tỉnh</option>
                                                    <option value="6797">Khoa Đông (Lê Minh Xuân)</option>
                                                    <option value="140980">Khổng Tử</option>
                                                    <option value="5390">Khổng Tử</option>
                                                    <option value="140749">Khu cao ốc Phú Hoàng Anh</option>
                                                    <option value="6871">Khu Dân Cư An Bình</option>
                                                    <option value="6872">Khu Dân Cư An Hòa</option>
                                                    <option value="6873">Khu Dân Cư An Lộc</option>
                                                    <option value="6874">Khu Dân Cư An Phước</option>
                                                    <option value="140840">Khu dân cư Bình Hưng</option>
                                                    <option value="6875">Khu Dân Cư Bình Thạnh</option>
                                                    <option value="6876">Khu Dân Cư Bình Trung</option>
                                                    <option value="6877">Khu Dân Cư Hòa Hiệp</option>
                                                    <option value="6878">Khu Dân Cư Mỹ Khánh</option>
                                                    <option value="140846">Khu dân cư Nam - Nam Sài Gòn</option>
                                                    <option value="140747">Khu dân cư Phú Xuân</option>
                                                    <option value="140810">Khu dân cư Rạch Lá</option>
                                                    <option value="140981">Khu dân cư Tam Bình</option>
                                                    <option value="140748">Khu dân cư Thái Sơn</option>
                                                    <option value="6879">Khu Dân Cư Thạnh Bình</option>
                                                    <option value="6880">Khu Dân Cư Thạnh Hòa</option>
                                                    <option value="6881">Khu Dân Cư Thiêng Liềng</option>
                                                    <option value="140847">Khu dân cư Trung Sơn</option>
                                                    <option value="6611">Khu Làng Đại Học (Phường Bình Thọ) </option>
                                                    <option value="950301">Khu phố 02</option>
                                                    <option value="6798">Khuất Văn Bứt</option>
                                                    <option value="6441">Khuông Việt</option>
                                                    <option value="5537">Khuông Việt</option>
                                                    <option value="2474999">Kiều Đàm</option>
                                                    <option value="5065">Kim Biên</option>
                                                    <option value="6799">Kinh 10</option>
                                                    <option value="6800">Kinh 5</option>
                                                    <option value="6801">Kinh 7</option>
                                                    <option value="6802">Kinh 8</option>
                                                    <option value="6803">Kinh 9</option>
                                                    <option value="140851">Kinh A</option>
                                                    <option value="6804">Kinh C</option>
                                                    <option value="5164">Kinh Dương Vương</option>
                                                    <option value="5769">Kinh Dương Vương</option>
                                                    <option value="6805">Kinh Liên Vùng (Kinh Trung Ương)</option>
                                                    <option value="6806">Kinh Sáu Oánh</option>
                                                    <option value="6807">Kinh Số 7</option>
                                                    <option value="6808">Kinh T11</option>
                                                    <option value="6809">Kinh T12</option>
                                                    <option value="4686">Ký Con</option>
                                                    <option value="6059">Ký Con (PN)</option>
                                                    <option value="4924">Kỳ Đồng</option>
                                                    <option value="5066">Ký Hoà</option>
                                                    <option value="5391">Lã Xuân Oai</option>
                                                    <option value="5538">Lạc Long Quân</option>
                                                    <option value="6193">Lạc Long Quân</option>
                                                    <option value="5539">Lạc Long Quân (nối Dài)</option>
                                                    <option value="6810">Lại Hùng Cường</option>
                                                    <option value="5770">Lâm Hoành</option>
                                                    <option value="5878">Lam Sơn</option>
                                                    <option value="6612">Lam Sơn</option>
                                                    <option value="6194">Lam Sơn</option>
                                                    <option value="6060">Lam sơn</option>
                                                    <option value="5230">Lâm Văn Bền</option>
                                                    <option value="6811">Láng Le-Bàu Cò</option>
                                                    <option value="6938">Láng The</option>
                                                    <option value="5540">Lãnh Binh Thăng</option>
                                                    <option value="5067">Lão Tử</option>
                                                    <option value="4687">Lê Anh Xuân</option>
                                                    <option value="6812">Lê Bá Trịnh</option>
                                                    <option value="6195">Lê Bình</option>
                                                    <option value="6442">Lê Cảnh Tuân</option>
                                                    <option value="6443">Lê Cao Lãng</option>
                                                    <option value="6813">Lê Chính Đáng</option>
                                                    <option value="5771">Lê Cơ</option>
                                                    <option value="4688">Lê Công Kiều</option>
                                                    <option value="5772">Lê Công Phép</option>
                                                    <option value="6444">lê đại</option>
                                                    <option value="5541">Lê Đại Hành</option>
                                                    <option value="5773">Lê Đình Cẩn</option>
                                                    <option value="6814">Lê Đình Chi</option>
                                                    <option value="5774">Lê Đình Dương</option>
                                                    <option value="4872">Lê Đình Quản</option>
                                                    <option value="6445">Lê Đình Thám</option>
                                                    <option value="4689">Lê Duẩn</option>
                                                    <option value="5589">Lê Đức Thọ</option>
                                                    <option value="5982">Lê Đức Thọ</option>
                                                    <option value="6196">Lê Duy Nhuận (c28)</option>
                                                    <option value="5983">Lê Hoàng Phái</option>
                                                    <option value="5456">Lê Hồng Phong</option>
                                                    <option value="5068">Lê Hồng Phong</option>
                                                    <option value="6882">Lê Hùng Yên</option>
                                                    <option value="6446">Lê Khôi</option>
                                                    <option value="5984">Lê Lai</option>
                                                    <option value="6197">Lê Lai</option>
                                                    <option value="7052">Lê Lai</option>
                                                    <option value="4690">Lê Lai</option>
                                                    <option value="6447">Lê Lâm</option>
                                                    <option value="6448">Lê Lăng</option>
                                                    <option value="6449">Lê Liễu</option>
                                                    <option value="6450">Lê Lộ</option>
                                                    <option value="6198">Lê Lợi</option>
                                                    <option value="5985">Lê Lợi</option>
                                                    <option value="4691">Lê Lợi</option>
                                                    <option value="5392">Lê Lợi</option>
                                                    <option value="140765">Lê Lợi</option>
                                                    <option value="6451">Lê Lư</option>
                                                    <option value="6939">Lê Minh Nhựt</option>
                                                    <option value="140852">Lê Minh Xuân</option>
                                                    <option value="6199">Lê Minh Xuân</option>
                                                    <option value="6452">Lê Ngã</option>
                                                    <option value="6200">Lê Ngân</option>
                                                    <option value="571283">Lê Nghĩa</option>
                                                    <option value="4925">Lê Ngô Cát</option>
                                                    <option value="5775">Lê Ngung</option>
                                                    <option value="6453">Lê Niệm</option>
                                                    <option value="4873">Lê Phụng Hiểu</option>
                                                    <option value="6454">Lê Quang Chiểu</option>
                                                    <option value="5986">Lê Quang Định</option>
                                                    <option value="5069">Lê Quang Định</option>
                                                    <option value="5879">Lê Quang Định</option>
                                                    <option value="1339268">Lê Quang Kim</option>
                                                    <option value="5165">Lê Quang Sung</option>
                                                    <option value="5024">Lê Quốc Hưng</option>
                                                    <option value="6455">Lê Quốc Trinh</option>
                                                    <option value="6061">Lê Quý Đôn</option>
                                                    <option value="140982">Lê Quý Đôn</option>
                                                    <option value="4926">Lê Quý Đôn</option>
                                                    <option value="6456">Lê Sao</option>
                                                    <option value="6457">Lê Sát</option>
                                                    <option value="5776">Lê Tấn Bê</option>
                                                    <option value="5166">Lê Tấn Kế</option>
                                                    <option value="6201">Lê Tấn Quốc</option>
                                                    <option value="5025">Lê Thạch</option>
                                                    <option value="1038655">Lê Thành Phương</option>
                                                    <option value="4692">Lê Thánh Tôn</option>
                                                    <option value="5542">Lê Thị Bạch Cát</option>
                                                    <option value="7053">Lê Thị Hà</option>
                                                    <option value="1391638">Lê Thị Hoa</option>
                                                    <option value="6613">Lê Thị Hoa,Phường Bình Chiểu</option>
                                                    <option value="5987">Lê Thị Hồng</option>
                                                    <option value="4693">Lê Thị Hồng Gấm</option>
                                                    <option value="4694">Lê Thị Riêng</option>
                                                    <option value="5590">Lê Thị Riêng</option>
                                                    <option value="6940">Lê Thị Siêng</option>
                                                    <option value="6458">Lê Thiệt</option>
                                                    <option value="6941">Lê Thọ Xuân</option>
                                                    <option value="6459">Lê Thúc Hoạch</option>
                                                    <option value="4874">Lê Thước</option>
                                                    <option value="6883">Lê Thương</option>
                                                    <option value="6884">Lê Trọng Mân</option>
                                                    <option value="6460">Lê Trọng Tấn</option>
                                                    <option value="5777">Lê Trọng Tấn</option>
                                                    <option value="5880">Lê Trực</option>
                                                    <option value="5167">Lê Trực</option>
                                                    <option value="6461">Lê Trung Đình</option>
                                                    <option value="6202">Lê Trung Nghĩa (c26)</option>
                                                    <option value="6062">Lê Tự Tài</option>
                                                    <option value="5168">Lê Tuấn Mậu</option>
                                                    <option value="5543">Lê Tung</option>
                                                    <option value="6614">Lê Văn Chí</option>
                                                    <option value="6203">Lê Văn Huân</option>
                                                    <option value="4695">Lê Văn Hưu</option>
                                                    <option value="5591">Lê Văn Khương</option>
                                                    <option value="7054">Lê Văn Khương</option>
                                                    <option value="5026">Lê Văn Linh</option>
                                                    <option value="5027">Lê Văn Linh Nối Dài</option>
                                                    <option value="5231">Lê Văn Lương</option>
                                                    <option value="7195">Lê Văn Lương</option>
                                                    <option value="4875">Lê Văn Miến</option>
                                                    <option value="6615">Lê Văn Ninh</option>
                                                    <option value="6462">Lê Văn Phan</option>
                                                    <option value="5778">Lê Văn Quới</option>
                                                    <option value="4927">Lê Văn Sỹ</option>
                                                    <option value="6063">Lê Văn Sỹ</option>
                                                    <option value="6204">Lê Văn Sỹ</option>
                                                    <option value="6616">Lê Văn Tách</option>
                                                    <option value="5232">Lê Văn Thêm</option>
                                                    <option value="4876">Lê Văn Thịnh</option>
                                                    <option value="5988">Lê Văn Thọ</option>
                                                    <option value="5393">Lê Văn Việt</option>
                                                    <option value="6463">Lê Vĩnh Hoà</option>
                                                    <option value="6942">Lê Vĩnh Huy</option>
                                                    <option value="7055">Liên Ấp 1-4 Xã Xuân Thới Thượng</option>
                                                    <option value="7056">Liên Ấp 2-6-7 Xã Đông Thạnh</option>
                                                    <option value="7057">Liên Ấp 3-7 Xã Xuân Thới Thượng</option>
                                                    <option value="7058">Liên Ấp 5-7 Xã Đông Thạnh</option>
                                                    <option value="6943">Liên Ấp Hội Thạnh-Ấp Chợ-Ấp An Bình</option>
                                                    <option value="7059">Liên Ấp Nam Thới-Thới Tứ Xã Thới Tam Thôn</option>
                                                    <option value="7060">Liên Ấp Thới Tứ Trung Đông</option>
                                                    <option value="5779">Liên Khu 1</option>
                                                    <option value="5780">Liên Khu 10</option>
                                                    <option value="1040782">Liên khu 10-11</option>
                                                    <option value="5781">Liên Khu 11</option>
                                                    <option value="5782">Liên Khu 12</option>
                                                    <option value="5783">Liên Khu 13</option>
                                                    <option value="5784">Liên Khu 14</option>
                                                    <option value="5785">Liên Khu 15</option>
                                                    <option value="5786">Liên Khu 16</option>
                                                    <option value="1043439">Liên khu 1-6</option>
                                                    <option value="1043437">Liên khu 16-18</option>
                                                    <option value="5787">Liên Khu 17</option>
                                                    <option value="5788">Liên Khu 18</option>
                                                    <option value="5789">Liên Khu 2</option>
                                                    <option value="1040781">Liên khu 2-10</option>
                                                    <option value="1043438">Liên khu 2-3</option>
                                                    <option value="5790">Liên Khu 3</option>
                                                    <option value="5791">Liên Khu 4</option>
                                                    <option value="5792">Liên Khu 5</option>
                                                    <option value="1040784">Liên khu 5-6</option>
                                                    <option value="5793">Liên Khu 6</option>
                                                    <option value="5794">Liên Khu 7</option>
                                                    <option value="5795">Liên Khu 8</option>
                                                    <option value="1040783">Liên khu 8-9</option>
                                                    <option value="5796">Liên Khu 9</option>
                                                    <option value="641023">Liên Phường</option>
                                                    <option value="1050203">Liên TỈnh 5</option>
                                                    <option value="4877">Liên Tỉnh Lộ 25b</option>
                                                    <option value="7061">Liên Xã (Tân Xuân-Xuân Thới Sơn-Xuân Thới Thượng)</option>
                                                    <option value="140797">Liên xã Bàu Hưng Lợi</option>
                                                    <option value="6944">Liên Xã Phước Vĩnh An-Phạm Văn Cội</option>
                                                    <option value="7062">Liên Xã Tân Thới Nhì-Thị Trấn</option>
                                                    <option value="7063">Liên Xã Thị Trấn -Tân Hiệp</option>
                                                    <option value="7064">Liên Xã Thị Trấn -Thới Tam Thôn</option>
                                                    <option value="7065">Liên xã Thị Trấn Thới Tam Thôn-Đông Thạnh</option>
                                                    <option value="6945">Liên Xã Trung Lập-Sa Nhỏ</option>
                                                    <option value="6946">Liêu Bình Hương</option>
                                                    <option value="6617">Linh Đông</option>
                                                    <option value="6815">Linh Hòa</option>
                                                    <option value="6618">Linh Trung</option>
                                                    <option value="1045745">Lò Gốm</option>
                                                    <option value="5394">Lò Lu</option>
                                                    <option value="5544">Lò Siêu</option>
                                                    <option value="5797">Lộ Tẻ</option>
                                                    <option value="5798">Lô Tư</option>
                                                    <option value="6205">Lộc Hưng</option>
                                                    <option value="6206">Lộc Vinh</option>
                                                    <option value="6207">Long Hưng</option>
                                                    <option value="5395">Long Phước</option>
                                                    <option value="5396">Long Sơn</option>
                                                    <option value="140750">Long Thới</option>
                                                    <option value="7196">Long Thới-Nhơn Đức</option>
                                                    <option value="5397">Long Thuận</option>
                                                    <option value="5545">Lữ Gia</option>
                                                    <option value="6464">Lương Đắc Bằng</option>
                                                    <option value="4878">Lương Định Của</option>
                                                    <option value="4696">Lương Hữu Khánh</option>
                                                    <option value="6465">Lương Minh Nguyệt</option>
                                                    <option value="6816">Lương Ngang</option>
                                                    <option value="5989">Lương Ngọc Quyến</option>
                                                    <option value="5881">Lương Ngọc Quyến</option>
                                                    <option value="5070">Lương Nhữ Học</option>
                                                    <option value="6466">Lương Thế Vinh</option>
                                                    <option value="6467">Lương Trúc Đàm</option>
                                                    <option value="867630">Lương Văn Can</option>
                                                    <option value="6885">Lương Văn Nho</option>
                                                    <option value="5233">Luther King</option>
                                                    <option value="178843">Lưu Chí Hiếu</option>
                                                    <option value="608266">Lưu Hữu Phước</option>
                                                    <option value="6947">Lưu Khải Hồng</option>
                                                    <option value="6208">Lưu Nhân Chú</option>
                                                    <option value="5234">Lưu Trọng Lư</option>
                                                    <option value="4697">Lưu Văn Lang</option>
                                                    <option value="5071">Lưu Xuân Tín</option>
                                                    <option value="6468">Lũy Bán Bích</option>
                                                    <option value="5169">Lý Chiêu Hoàng</option>
                                                    <option value="4928">Lý Chính Thắng</option>
                                                    <option value="867629">Lý Đạo Thành</option>
                                                    <option value="5235">Lý Long Tường</option>
                                                    <option value="5546">Lý Nam Đế</option>
                                                    <option value="7066">Lý Nam Đế</option>
                                                    <option value="6886">Lý Nhơn</option>
                                                    <option value="5236">Lý Phục Man</option>
                                                    <option value="6619">Lý Tế Xuyên</option>
                                                    <option value="4929">Lý Thái Tổ</option>
                                                    <option value="5457">Lý Thái Tổ</option>
                                                    <option value="6469">Lý Thái Tông</option>
                                                    <option value="6470">Lý Thánh Tông</option>
                                                    <option value="6209">Lý Thường Kiệt</option>
                                                    <option value="5990">Lý Thường Kiệt</option>
                                                    <option value="7067">Lý Thường Kiệt</option>
                                                    <option value="5458">Lý Thường Kiệt</option>
                                                    <option value="5547">Lý Thường Kiệt</option>
                                                    <option value="5072">Lý Thường Kiệt</option>
                                                    <option value="4698">Lý Tự Trọng</option>
                                                    <option value="6471">Lý Tuệ</option>
                                                    <option value="4699">Lý Văn Phức</option>
                                                    <option value="4700">Mã Lộ</option>
                                                    <option value="5073">Mạc Cửu</option>
                                                    <option value="4701">Mạc Đỉnh Chi</option>
                                                    <option value="5398">Mạc Hiển Tích</option>
                                                    <option value="4702">Mạc Thị Bưởi</option>
                                                    <option value="5074">Mạc Thiên Tích</option>
                                                    <option value="1038657">Mạc Vân</option>
                                                    <option value="6817">Mai Bá Hương</option>
                                                    <option value="636925">Mai Chí Thọ</option>
                                                    <option value="6210">Mai Lão Bạng</option>
                                                    <option value="4703">Mai Thị Lựu</option>
                                                    <option value="4930">Mai Văn Ngọc</option>
                                                    <option value="6064">Mai Văn Ngọc</option>
                                                    <option value="5237">Mai Văn Vĩnh</option>
                                                    <option value="5170">Mai Xuân Thưởng</option>
                                                    <option value="5882">Mai Xuân Thưởng</option>
                                                    <option value="5399">Man Thiện</option>
                                                    <option value="608679">Mễ Cốc</option>
                                                    <option value="5883">Mê Linh</option>
                                                    <option value="5548">Minh Phụng</option>
                                                    <option value="5171">Minh Phụng</option>
                                                    <option value="5238">Morison</option>
                                                    <option value="808822">Mỹ Giang</option>
                                                    <option value="7068">Mỹ Huề</option>
                                                    <option value="5400">Nam Cao</option>
                                                    <option value="6211">Năm Châu</option>
                                                    <option value="5401">Nam Hoà</option>
                                                    <option value="4931">Nam Kỳ Khởi Nghĩa</option>
                                                    <option value="4704">Nam Kỳ Khởi Nghĩa</option>
                                                    <option value="4705">Nam Quốc Cang</option>
                                                    <option value="6818">Ngã Ba Chú Lường</option>
                                                    <option value="7197">Ngã Ba Đình</option>
                                                    <option value="6212">Nghĩa Hoà</option>
                                                    <option value="6213">Nghĩa Hưng</option>
                                                    <option value="6214">Nghĩa Phát</option>
                                                    <option value="5075">Nghĩa Thục</option>
                                                    <option value="6472">Nghiêm Toản</option>
                                                    <option value="275132">Nghụy Như KonTum</option>
                                                    <option value="6215">Ngô Bệ</option>
                                                    <option value="6620">Ngô Chí Quốc</option>
                                                    <option value="4706">Ngô Đức Kế</option>
                                                    <option value="5884">Ngô Đức Kế</option>
                                                    <option value="5459">Ngô Gia Tự</option>
                                                    <option value="5076">Ngô Gia Tự</option>
                                                    <option value="5077">Ngô Nhân Tịnh</option>
                                                    <option value="5172">Ngô Nhân Tịnh</option>
                                                    <option value="5885">Ngô Nhân Tịnh</option>
                                                    <option value="4879">Ngô Quang Huy</option>
                                                    <option value="5078">Ngô Quyền</option>
                                                    <option value="5460">Ngô Quyền</option>
                                                    <option value="5402">Ngô Quyền</option>
                                                    <option value="6473">Ngô Quyền</option>
                                                    <option value="7069">Ngô Quyền</option>
                                                    <option value="5886">Ngô Tất Tố</option>
                                                    <option value="6216">Ngô Thị Thu Minh</option>
                                                    <option value="6065">Ngô Thời Nhiệm</option>
                                                    <option value="4932">Ngô Thời Nhiệm</option>
                                                    <option value="6948">Ngô Tri Hòa</option>
                                                    <option value="4707">Ngô Văn Năm</option>
                                                    <option value="5028">Ngô Văn Sở</option>
                                                    <option value="5799">Ngô Y Linh</option>
                                                    <option value="6217">Ngự Bình</option>
                                                    <option value="5079">Nguyễn Án </option>
                                                    <option value="5080">Nguyễn An Khương</option>
                                                    <option value="4708">Nguyễn An Ninh</option>
                                                    <option value="5887">Nguyễn An Ninh</option>
                                                    <option value="5592">Nguyễn Ảnh Thủ</option>
                                                    <option value="7070">Nguyễn Ảnh Thủ</option>
                                                    <option value="5549">Nguyễn Bá Học</option>
                                                    <option value="4880">Nguyễn Bá Huân</option>
                                                    <option value="4881">Nguyễn Bá Lân</option>
                                                    <option value="6474">Nguyễn Bá Tòng</option>
                                                    <option value="6218">Nguyễn Bá Tòng</option>
                                                    <option value="6219">Nguyễn Bá Tuyển (c29)</option>
                                                    <option value="6220">Nguyễn Bặc</option>
                                                    <option value="5081">Nguyễn Biểu</option>
                                                    <option value="7198">Nguyễn Bình</option>
                                                    <option value="4709">Nguyễn Bỉnh Khiêm</option>
                                                    <option value="5888">Nguyễn Bỉnh Khiêm</option>
                                                    <option value="5991">Nguyễn Bỉnh Khiêm</option>
                                                    <option value="4710">Nguyễn Cảnh Chân</option>
                                                    <option value="6221">Nguyễn Cảnh Dị</option>
                                                    <option value="5239">Nguyễn Cao</option>
                                                    <option value="6222">Nguyễn Chánh Sắt</option>
                                                    <option value="867628">Nguyễn Chế Nghĩa</option>
                                                    <option value="5550">Nguyễn Chí Thanh</option>
                                                    <option value="5461">Nguyễn Chí Thanh</option>
                                                    <option value="5082">Nguyễn Chí Thanh</option>
                                                    <option value="6475">Nguyễn Chích</option>
                                                    <option value="6887">Nguyễn Công Bao</option>
                                                    <option value="6066">Nguyễn Công Hoan</option>
                                                    <option value="5889">Nguyễn Công Hoan</option>
                                                    <option value="5890">Nguyễn Công Trứ</option>
                                                    <option value="5403">Nguyễn Công Trứ</option>
                                                    <option value="4711">Nguyễn Công Trứ</option>
                                                    <option value="1135033">Nguyễn Cừ</option>
                                                    <option value="4712">Nguyễn Cư Trinh</option>
                                                    <option value="6476">Nguyễn Cửu Đàm</option>
                                                    <option value="6819">Nguyễn Cửu Phú</option>
                                                    <option value="5800">Nguyễn Cửu Phú</option>
                                                    <option value="5891">Nguyễn Cửu Vân</option>
                                                    <option value="6949">Nguyễn Đại Năng</option>
                                                    <option value="4882">Nguyễn Đăng Giai</option>
                                                    <option value="5173">Nguyễn Đình Chi</option>
                                                    <option value="4933">Nguyễn Đình Chiểu</option>
                                                    <option value="4713">Nguyễn Đình Chiểu</option>
                                                    <option value="6067">Nguyễn Đình Chiểu</option>
                                                    <option value="6068">Nguyễn Đình Chính</option>
                                                    <option value="6950">Nguyễn Đình Huân</option>
                                                    <option value="6223">Nguyễn Đình Khơi</option>
                                                    <option value="5801">Nguyễn Đình Kiên</option>
                                                    <option value="6820">Nguyễn Đình Kiên</option>
                                                    <option value="4883">Nguyễn Đôn Tiết</option>
                                                    <option value="4714">Nguyễn Du</option>
                                                    <option value="6477">Nguyễn Dữ</option>
                                                    <option value="5992">Nguyễn Du</option>
                                                    <option value="5240">Nguyễn Đức Cảnh</option>
                                                    <option value="6224">Nguyễn Đức Thuận</option>
                                                    <option value="5892">Nguyễn Duy</option>
                                                    <option value="608680">Nguyễn Duy</option>
                                                    <option value="170654">Nguyễn Duy Cung</option>
                                                    <option value="5462">Nguyễn Duy Dương</option>
                                                    <option value="5083">Nguyễn Duy Dương</option>
                                                    <option value="4884">Nguyễn Duy Hiệu</option>
                                                    <option value="4885">Nguyễn Duy Trinh</option>
                                                    <option value="5404">Nguyễn Duy Trinh</option>
                                                    <option value="4934">Nguyễn Gia Thiều</option>
                                                    <option value="5463">Nguyễn Giản Thanh</option>
                                                    <option value="6951">Nguyễn Giao</option>
                                                    <option value="1708377">Nguyễn Háo Vĩnh</option>
                                                    <option value="6478">Nguyễn Hậu</option>
                                                    <option value="4935">Nguyễn Hiền</option>
                                                    <option value="6225">Nguyễn Hiến Lê</option>
                                                    <option value="1728932">Nguyễn Hoàng</option>
                                                    <option value="5802">Nguyễn Hới</option>
                                                    <option value="5993">Nguyên Hồng</option>
                                                    <option value="5893">Nguyên Hồng</option>
                                                    <option value="6226">Nguyễn Hồng Đào</option>
                                                    <option value="4715">Nguyễn Huệ</option>
                                                    <option value="1535782">Nguyễn Hữu Cảnh</option>
                                                    <option value="5894">Nguyễn Hữu Cảnh</option>
                                                    <option value="4716">Nguyễn Hữu Cầu</option>
                                                    <option value="7071">Nguyễn Hữu Cầu</option>
                                                    <option value="6479">Nguyễn Hữu Dật</option>
                                                    <option value="5029">Nguyễn Hữu Hào</option>
                                                    <option value="5174">Nguyễn Hữu Thận</option>
                                                    <option value="5241">Nguyễn Hữu Thọ</option>
                                                    <option value="7199">Nguyễn Hữu Thọ</option>
                                                    <option value="577132">Nguyễn Hữu Thoại</option>
                                                    <option value="6480">Nguyễn Hữu Tiến</option>
                                                    <option value="6821">Nguyễn Hữu Trí</option>
                                                    <option value="170333">Nguyễn Huy Điển</option>
                                                    <option value="5895">Nguyễn Huy Lượng</option>
                                                    <option value="4717">Nguyễn Huy Tự</option>
                                                    <option value="5896">Nguyễn Huy Tưởng</option>
                                                    <option value="4718">Nguyễn Khắc Nhu</option>
                                                    <option value="5242">Nguyễn Khắc Viện</option>
                                                    <option value="5030">Nguyễn Khoái</option>
                                                    <option value="5897">Nguyễn Khuyến</option>
                                                    <option value="5994">Nguyễn Kiệm</option>
                                                    <option value="6069">Nguyễn Kiệm</option>
                                                    <option value="5464">Nguyễn Kim</option>
                                                    <option value="5084">Nguyễn Kim</option>
                                                    <option value="6952">Nguyễn Kim Cương</option>
                                                    <option value="6070">Nguyễn Lâm</option>
                                                    <option value="5465">Nguyễn Lâm</option>
                                                    <option value="5898">Nguyễn Lâm</option>
                                                    <option value="6481">Nguyễn Lộ Trạch</option>
                                                    <option value="5243">Nguyễn Lương Bằng</option>
                                                    <option value="140751">Nguyễn Lương Bằng</option>
                                                    <option value="6482">Nguyễn Lý</option>
                                                    <option value="6483">Nguyễn Minh Châu</option>
                                                    <option value="6227">Nguyễn Minh Hoàng (c25)</option>
                                                    <option value="6484">Nguyễn Mỹ Ca</option>
                                                    <option value="6485">nguyễn nghiêm</option>
                                                    <option value="5175">Nguyễn Ngọc Cung</option>
                                                    <option value="884941">Nguyễn Ngọc Cung</option>
                                                    <option value="5466">Nguyễn Ngọc Lộc</option>
                                                    <option value="6486">Nguyễn Ngọc Nhựt</option>
                                                    <option value="5899">Nguyễn Ngọc Phương</option>
                                                    <option value="6487">Nguyễn Nhữ Lãm</option>
                                                    <option value="5995">Nguyễn Oanh</option>
                                                    <option value="5176">Nguyễn Phạm Tuân</option>
                                                    <option value="5244">Nguyễn Phan Chánh</option>
                                                    <option value="6888">Nguyễn Phan Vinh</option>
                                                    <option value="4719">Nguyễn Phi Khanh</option>
                                                    <option value="6953">Nguyễn Phong Sắc</option>
                                                    <option value="6228">Nguyễn Phúc Chu</option>
                                                    <option value="4936">Nguyễn Phúc Nguyên</option>
                                                    <option value="6954">Nguyễn Phúc Trú</option>
                                                    <option value="6229">Nguyễn Quang Bích(b4)</option>
                                                    <option value="275138">Nguyễn Quang Diệu</option>
                                                    <option value="174891">Nguyễn Quý Anh</option>
                                                    <option value="1728912">Nguyễn Qúy Cảnh</option>
                                                    <option value="1728914">Nguyễn Qúy Đức</option>
                                                    <option value="5803">Nguyễn Quý Yêm</option>
                                                    <option value="1018000">Nguyễn Quyền</option>
                                                    <option value="944474">Nguyễn Sáng</option>
                                                    <option value="4720">Nguyễn Siêu</option>
                                                    <option value="6488">Nguyễn Sơn</option>
                                                    <option value="4937">Nguyễn Sơn Hà</option>
                                                    <option value="6489">Nguyễn Súy</option>
                                                    <option value="6230">Nguyễn Sỹ Sách</option>
                                                    <option value="5031">Nguyễn Tất Thành</option>
                                                    <option value="4721">Nguyễn Thái Bình</option>
                                                    <option value="6231">Nguyễn Thái Bình</option>
                                                    <option value="1450143">Nguyễn Thái Học</option>
                                                    <option value="6490">Nguyễn Thái Học</option>
                                                    <option value="4722">Nguyễn Thái Học</option>
                                                    <option value="5405">Nguyễn Thái Học</option>
                                                    <option value="5900">Nguyễn Thái Học</option>
                                                    <option value="5996">Nguyễn Thái Sơn</option>
                                                    <option value="5032">Nguyễn Thần Hiến</option>
                                                    <option value="6232">Nguyễn Thanh Tuyền</option>
                                                    <option value="5593">Nguyễn Thành Vĩnh</option>
                                                    <option value="4723">Nguyễn Thành Ý</option>
                                                    <option value="6233">Nguyễn Thế Lộc</option>
                                                    <option value="5085">Nguyễn Thi</option>
                                                    <option value="1701350">Nguyễn Thị Búp</option>
                                                    <option value="4938">Nguyễn Thị Diệu</option>
                                                    <option value="4886">Nguyễn Thị Định</option>
                                                    <option value="6071">Nguyễn Thị Huỳnh</option>
                                                    <option value="6955">Nguyễn Thị Lắm</option>
                                                    <option value="6956">Nguyễn Thị Lắng</option>
                                                    <option value="4724">Nguyễn Thị Minh Khai</option>
                                                    <option value="4939">Nguyễn Thị Minh Khai</option>
                                                    <option value="6957">Nguyễn Thị Nê</option>
                                                    <option value="140814">Nguyễn Thị Nê</option>
                                                    <option value="4725">Nguyễn Thị Nghĩa</option>
                                                    <option value="5177">Nguyễn Thị Nhỏ</option>
                                                    <option value="5086">Nguyễn Thị Nhỏ</option>
                                                    <option value="5551">Nguyễn Thị Nhỏ</option>
                                                    <option value="6234">Nguyễn Thị Nhỏ</option>
                                                    <option value="5552">Nguyễn Thị Nhỏ (nối Dài)</option>
                                                    <option value="6958">Nguyễn Thị Rành</option>
                                                    <option value="6959">Nguyễn Thị Rư</option>
                                                    <option value="7072">Nguyễn Thị Sóc</option>
                                                    <option value="738517">Nguyễn Thị Tần</option>
                                                    <option value="5245">Nguyễn Thị Thập</option>
                                                    <option value="140856">Nguyễn Thị Thập</option>
                                                    <option value="7073">Nguyễn Thị Thử</option>
                                                    <option value="6960">Nguyễn Thị Triệu</option>
                                                    <option value="6822">Nguyễn Thị Tú</option>
                                                    <option value="5804">Nguyễn Thị Tú</option>
                                                    <option value="4940">Nguyễn Thiện Thuật</option>
                                                    <option value="5901">Nguyễn Thiện Thuật</option>
                                                    <option value="4726">Nguyễn Thiệp</option>
                                                    <option value="5087">Nguyễn Thời Trung</option>
                                                    <option value="4941">Nguyễn Thông</option>
                                                    <option value="5805">Nguyễn Thức Đường</option>
                                                    <option value="5806">Nguyễn Thức Tự</option>
                                                    <option value="6072">Nguyễn Thượng Hiền</option>
                                                    <option value="5997">Nguyễn Thượng Hiền</option>
                                                    <option value="4942">Nguyễn Thượng Hiền</option>
                                                    <option value="5902">Nguyễn Thượng Hiền</option>
                                                    <option value="5467">Nguyễn Thượng Hiền</option>
                                                    <option value="5468">Nguyễn Tiểu La</option>
                                                    <option value="5088">Nguyễn Trãi</option>
                                                    <option value="4727">Nguyễn Trãi</option>
                                                    <option value="5089">Nguyễn Tri Phương</option>
                                                    <option value="5469">Nguyễn Tri Phương</option>
                                                    <option value="140857">Nguyễn Tri Phương(nối dài)</option>
                                                    <option value="5807">Nguyễn Triệu Luật</option>
                                                    <option value="6235">Nguyễn Trọng Lội</option>
                                                    <option value="5808">Nguyễn Trọng Trí</option>
                                                    <option value="6236">Nguyễn Trọng Tuyển</option>
                                                    <option value="6073">Nguyễn Trọng Tuyển</option>
                                                    <option value="4728">Nguyễn Trung Ngạn</option>
                                                    <option value="4887">Nguyễn Trung Nguyệt</option>
                                                    <option value="4729">Nguyễn Trung Trực</option>
                                                    <option value="5903">Nguyễn Trung Trực</option>
                                                    <option value="5033">Nguyễn Trường Tộ</option>
                                                    <option value="6074">Nguyễn Trường Tộ</option>
                                                    <option value="6491">Nguyễn Trường Tộ</option>
                                                    <option value="170641">Nguyễn tư giản</option>
                                                    <option value="4888">Nguyễn Tư Nghiêm</option>
                                                    <option value="6237">Nguyễn Tử Nha</option>
                                                    <option value="5998">Nguyễn Tuân</option>
                                                    <option value="4889">Nguyễn Tuyển</option>
                                                    <option value="4890">Nguyễn Ư Dĩ</option>
                                                    <option value="6621">Nguyễn Văn Bá(Phường Bình Thọ,Trường Thọ)</option>
                                                    <option value="5999">Nguyễn Văn Bảo</option>
                                                    <option value="4730">Nguyễn Văn Bình</option>
                                                    <option value="6823">Nguyễn Văn Bứa</option>
                                                    <option value="7074">Nguyễn Văn Bứa</option>
                                                    <option value="4731">Nguyễn Văn Chiêm</option>
                                                    <option value="6000">Nguyễn Văn Công</option>
                                                    <option value="5809">Nguyễn Văn Cự</option>
                                                    <option value="140864">Nguyễn Văn Cừ</option>
                                                    <option value="4732">Nguyễn Văn Cừ</option>
                                                    <option value="5090">Nguyễn Văn Cừ</option>
                                                    <option value="140865">Nguyễn Văn Cừ (nối dài)</option>
                                                    <option value="6075">Nguyễn Văn Đậu</option>
                                                    <option value="5904">Nguyễn Văn Đậu</option>
                                                    <option value="5091">Nguyễn Văn Đừng</option>
                                                    <option value="6001">Nguyễn Văn Dung</option>
                                                    <option value="4733">Nguyễn Văn Đượm</option>
                                                    <option value="6492">Nguyễn Văn Dưỡng</option>
                                                    <option value="4734">Nguyễn Văn Giai</option>
                                                    <option value="4891">Nguyễn Văn Giáp</option>
                                                    <option value="4892">Nguyễn Văn Hưởng</option>
                                                    <option value="6493">Nguyễn Văn Huyên</option>
                                                    <option value="6961">Nguyễn Văn Khạ</option>
                                                    <option value="6962">Nguyễn Văn Khạ nối dài</option>
                                                    <option value="5905">Nguyễn Văn Lạc</option>
                                                    <option value="6622">Nguyễn Văn Lịch</option>
                                                    <option value="6494">Nguyễn Văn Linh</option>
                                                    <option value="6824">Nguyễn Văn Linh</option>
                                                    <option value="640889">Nguyễn Văn Linh</option>
                                                    <option value="5246">Nguyễn Văn Linh</option>
                                                    <option value="140752">Nguyễn Văn Linh</option>
                                                    <option value="6825">Nguyễn Văn Long</option>
                                                    <option value="6002">Nguyễn Văn Lượng</option>
                                                    <option value="5178">Nguyễn Văn Luông</option>
                                                    <option value="4943">Nguyễn Văn Mai</option>
                                                    <option value="6238">Nguyễn Văn Mại</option>
                                                    <option value="6889">Nguyễn Văn Mạnh</option>
                                                    <option value="6003">Nguyễn Văn Nghi</option>
                                                    <option value="6495">Nguyễn Văn Ngọc</option>
                                                    <option value="4735">Nguyễn Văn Nguyễn</option>
                                                    <option value="6963">Nguyễn Văn Ni</option>
                                                    <option value="6964">Nguyễn Văn Nì</option>
                                                    <option value="6965">Nguyễn Văn On</option>
                                                    <option value="5553">Nguyễn Văn Phú</option>
                                                    <option value="5594">Nguyễn Văn Quá</option>
                                                    <option value="5247">Nguyễn Văn Quỳ</option>
                                                    <option value="6496">Nguyễn Văn Săng</option>
                                                    <option value="5406">Nguyễn Văn Tăng</option>
                                                    <option value="7200">Nguyễn Văn Tạo</option>
                                                    <option value="5407">Nguyễn Văn Thạnh</option>
                                                    <option value="6826">Nguyễn Văn Thê</option>
                                                    <option value="140754">Nguyễn Văn Thọ</option>
                                                    <option value="6827">Nguyễn Văn Thời (Quy Đức ,Bà Bầu)</option>
                                                    <option value="4736">Nguyễn Văn Thủ</option>
                                                    <option value="6497">Nguyễn Văn Tố</option>
                                                    <option value="4737">Nguyễn Văn Tráng</option>
                                                    <option value="6076">Nguyễn Văn Trỗi</option>
                                                    <option value="6239">Nguyễn Văn Trỗi</option>
                                                    <option value="6966">Nguyễn Văn Tỳ (Nguyễn Văn Tỷ)</option>
                                                    <option value="6240">Nguyễn Văn Vĩ</option>
                                                    <option value="6241">Nguyễn Văn Vĩnh</option>
                                                    <option value="618992">Nguyễn Văn Vịnh</option>
                                                    <option value="108677">Nguyễn Văn Vỹ</option>
                                                    <option value="6967">Nguyễn Văn Xơ</option>
                                                    <option value="1648428">Nguyễn Văn Yến</option>
                                                    <option value="6968">Nguyễn Viết Xuân</option>
                                                    <option value="5906">Nguyễn Xí</option>
                                                    <option value="5408">Nguyễn Xiển</option>
                                                    <option value="6498">Nguyễn Xuân Khoát</option>
                                                    <option value="5907">Nguyễn Xuân Ôn</option>
                                                    <option value="5179">Nguyễn Xuân Phụng</option>
                                                    <option value="7075">Nhà Vuông</option>
                                                    <option value="6499">Nhánh Đường Lý Tuệ</option>
                                                    <option value="6242">Nhất Chi Mai</option>
                                                    <option value="5554">Nhật Tảo</option>
                                                    <option value="5470">Nhật Tảo</option>
                                                    <option value="7076">Nhị Bình 3 (Nhị Bình) </option>
                                                    <option value="7077">Nhị Bình 8 (Nhị Bình)</option>
                                                    <option value="7078">Nhị Bình 9 (Nhị Bình)</option>
                                                    <option value="6500">nhiêu lộc</option>
                                                    <option value="5092">Nhiêu Tâm</option>
                                                    <option value="6077">Nhiêu Tứ</option>
                                                    <option value="140755">Nhơn Đức</option>
                                                    <option value="7201">Nhơn Đức-Phước Lộc</option>
                                                    <option value="6969">Nhữ Tiến Hiền</option>
                                                    <option value="6970">Nhuận Đức</option>
                                                    <option value="6243">Ni Sư Huỳnh Liên</option>
                                                    <option value="6971">Ninh Tốn</option>
                                                    <option value="5908">Nơ Trang Long</option>
                                                    <option value="803980">Nội Khu Nam Thiên 3</option>
                                                    <option value="140866">Nữ Dân Công</option>
                                                    <option value="6244">Núi Thành</option>
                                                    <option value="6972">Ông Ích Đường</option>
                                                    <option value="5555">Ông Ích Khiêm</option>
                                                    <option value="140766">Ống nước</option>
                                                    <option value="4944">Pasteur</option>
                                                    <option value="4738">Pasteur</option>
                                                    <option value="5093">Phạm Bân</option>
                                                    <option value="5810">Phạm Bành</option>
                                                    <option value="6245">Phạm Cự Lượng</option>
                                                    <option value="5811">Phạm Đăng Giản</option>
                                                    <option value="5812">phạm đăng giảng</option>
                                                    <option value="5180">Phạm Đình Hổ</option>
                                                    <option value="4945">Phạm Đình Toái</option>
                                                    <option value="5094">Phạm Đôn</option>
                                                    <option value="4739">Phạm Hồng Thái</option>
                                                    <option value="6246">Phạm Hồng Thái</option>
                                                    <option value="608691">Phạm Hùng</option>
                                                    <option value="6828">Phạm Hùng (Chánh Hưng Nối Dài)</option>
                                                    <option value="5095">Phạm Hữu Chí</option>
                                                    <option value="5248">Phạm Hữu Lầu</option>
                                                    <option value="7202">Phạm Hữu Lầu</option>
                                                    <option value="6973">Phạm Hữu Tâm</option>
                                                    <option value="6004">Phạm Huy Thông</option>
                                                    <option value="6501">Phạm Ngọc</option>
                                                    <option value="4946">Phạm Ngọc Thạch</option>
                                                    <option value="4740">Phạm Ngọc Thạch</option>
                                                    <option value="1600244">Phạm Ngọc Thảo</option>
                                                    <option value="6005">Phạm Ngũ Lão</option>
                                                    <option value="4741">Phạm Ngũ Lão</option>
                                                    <option value="5181">Phạm Phú Thứ</option>
                                                    <option value="6247">Phạm Phú Thứ</option>
                                                    <option value="6974">Phạm Phú Tiết</option>
                                                    <option value="6502">Phạm Quý Thích</option>
                                                    <option value="5249">Phạm Thái Bường</option>
                                                    <option value="640873">Phạm Thế Hiển</option>
                                                    <option value="5250">Phạm Thiều</option>
                                                    <option value="6503">Phạm Vấn</option>
                                                    <option value="6006">Phạm Văn Bạch</option>
                                                    <option value="6248">Phạm Văn Bạch</option>
                                                    <option value="6975">Phạm Văn Chèo</option>
                                                    <option value="5182">Phạm Văn Chí</option>
                                                    <option value="6007">Phạm Văn Chiêu</option>
                                                    <option value="775258">Phạm Văn Đồng</option>
                                                    <option value="1251127">Phạm Văn Đồng</option>
                                                    <option value="861243">Phạm Văn Đồng</option>
                                                    <option value="6249">Phạm Văn Hai</option>
                                                    <option value="6078">Phạm Văn Hai</option>
                                                    <option value="5251">Phạm Văn Nghị</option>
                                                    <option value="140870">Phạm Văn Sáng</option>
                                                    <option value="7079">Phạm Văn Sáng</option>
                                                    <option value="6504">Phạm Văn Xảo</option>
                                                    <option value="4742">Phạm Viết Chánh</option>
                                                    <option value="5909">Phạm Viết Chánh</option>
                                                    <option value="5183">Phan Anh</option>
                                                    <option value="6505">Phan Anh</option>
                                                    <option value="5813">Phan Anh</option>
                                                    <option value="6250">Phan Bá Phiến</option>
                                                    <option value="4743">Phan Bội Châu</option>
                                                    <option value="5910">Phan Bội Châu</option>
                                                    <option value="5814">Phan Cát Tựu</option>
                                                    <option value="6506">Phan Chu Trinh</option>
                                                    <option value="5911">Phan Chu Trinh</option>
                                                    <option value="5409">Phan Chu Trinh</option>
                                                    <option value="4744">Phan Chu Trinh</option>
                                                    <option value="5912">Phan Đăng Lưu</option>
                                                    <option value="6079">Phan Đăng Lưu</option>
                                                    <option value="5410">Phan Đạt Đức</option>
                                                    <option value="6251">Phan Đình Giót</option>
                                                    <option value="6080">Phan Đình Phùng</option>
                                                    <option value="6507">Phan Đình Phùng</option>
                                                    <option value="5411">Phan Đình Phùng</option>
                                                    <option value="5815">Phan Đình Thông</option>
                                                    <option value="6890">Phan Đức</option>
                                                    <option value="5096">Phan Huy Chú</option>
                                                    <option value="6252">Phan Huy Ích</option>
                                                    <option value="6008">Phan Huy Ích</option>
                                                    <option value="5913">Phan Huy Ôn</option>
                                                    <option value="5252">Phan Huy Thực</option>
                                                    <option value="4745">Phan Kế Bính</option>
                                                    <option value="5253">Phan Khiêm Ích</option>
                                                    <option value="4746">Phan Liêm</option>
                                                    <option value="4747">Phan Ngữ</option>
                                                    <option value="5097">Phan Phú Tiên</option>
                                                    <option value="6253">Phan Sào Nam</option>
                                                    <option value="6829">Phan Tấn Mười</option>
                                                    <option value="6081">Phan Tây Hồ</option>
                                                    <option value="6976">Phan Thị Hổi</option>
                                                    <option value="6254">Phan Thúc Duyện</option>
                                                    <option value="4748">Phan Tôn</option>
                                                    <option value="6891">Phan Trọng Tuệ</option>
                                                    <option value="7203">Phan Văn Bảy</option>
                                                    <option value="5254">Phan Văn Chương</option>
                                                    <option value="4749">Phan Văn Đạt</option>
                                                    <option value="7080">Phan Văn Đối</option>
                                                    <option value="5914">Phan Văn Hân</option>
                                                    <option value="5595">Phan Văn Hớn</option>
                                                    <option value="7081">Phan Văn Hớn</option>
                                                    <option value="5098">Phan Văn Khoẻ</option>
                                                    <option value="5184">Phan Văn Khoẻ</option>
                                                    <option value="6255">Phan Văn Lâu</option>
                                                    <option value="6508">Phan Văn Năm</option>
                                                    <option value="6256">Phan Văn Sửu</option>
                                                    <option value="6009">Phan Văn Trị</option>
                                                    <option value="5099">Phan Văn Trị</option>
                                                    <option value="5915">Phan Văn Trị</option>
                                                    <option value="4750">Phan Văn Trường</option>
                                                    <option value="5916">Phan Xích Long</option>
                                                    <option value="5556">Phan Xích Long</option>
                                                    <option value="6082">Phan Xích Long</option>
                                                    <option value="5557">Phó Cơ Điều</option>
                                                    <option value="5100">Phó Cơ Điều</option>
                                                    <option value="4751">Phó Đức Chính</option>
                                                    <option value="5917">Phó Đức Chính</option>
                                                    <option value="6083">Phổ Quang</option>
                                                    <option value="6257">Phổ Quang</option>
                                                    <option value="5255">Phố Tiểu Bắc</option>
                                                    <option value="5256">Phố Tiểu Đông</option>
                                                    <option value="5257">Phố Tiểu Nam</option>
                                                    <option value="5307">Phong Phú</option>
                                                    <option value="6623">Phú Châu</option>
                                                    <option value="5101">Phú Đinh</option>
                                                    <option value="5102">Phù Đổng Thiên Vương</option>
                                                    <option value="5103">Phú Giáo</option>
                                                    <option value="6258">Phú Hoà</option>
                                                    <option value="5104">Phú Hữu</option>
                                                    <option value="6259">Phú Lộc</option>
                                                    <option value="5918">Phú Mỹ</option>
                                                    <option value="5558">Phú Thọ</option>
                                                    <option value="6509">Phú Thọ Hoà</option>
                                                    <option value="639398">Phú Thuận</option>
                                                    <option value="6510">Phùng Chí Kiên</option>
                                                    <option value="5105">Phùng Hưng</option>
                                                    <option value="4752">Phùng Khắc Khoan</option>
                                                    <option value="5816">Phùng Tá Chu</option>
                                                    <option value="6084">Phùng Văn Cung</option>
                                                    <option value="5106">Phước Hưng</option>
                                                    <option value="5412">Phước Thiện</option>
                                                    <option value="6830">Quách Điêu</option>
                                                    <option value="6511">Quách Đình Bảo</option>
                                                    <option value="6512">Quách Hữu Nghiêm</option>
                                                    <option value="6260">Quách Văn Tuấn</option>
                                                    <option value="6513">Quách Vũ</option>
                                                    <option value="5559">Quân Sự</option>
                                                    <option value="6261">Quảng Hiền</option>
                                                    <option value="6010">Quang Trung</option>
                                                    <option value="7082">Quang Trung</option>
                                                    <option value="5413">Quang Trung</option>
                                                    <option value="5414">Quang Trung (nối Dài)</option>
                                                    <option value="6892">Quảng Xuyến</option>
                                                    <option value="4893">Quốc Hương</option>
                                                    <option value="666867">Quốc lộ 1(Xa Lộ Đại Hàn) </option>
                                                    <option value="140871">Quốc lộ 13</option>
                                                    <option value="6625">Quốc Lộ 13</option>
                                                    <option value="5919">Quốc Lộ 13</option>
                                                    <option value="6624">Quốc Lộ 13 Cũ</option>
                                                    <option value="6626">Quốc Lộ 1A</option>
                                                    <option value="6831">Quốc Lộ 1A</option>
                                                    <option value="7083">Quốc Lộ 1A</option>
                                                    <option value="5817">Quốc Lộ 1a</option>
                                                    <option value="5596">Quốc Lộ 1a</option>
                                                    <option value="6627">Quốc Lộ 1K(Kha Vạn Cân Cũ)</option>
                                                    <option value="6977">Quốc Lộ 22</option>
                                                    <option value="5597">Quốc Lộ 22</option>
                                                    <option value="7084">Quốc Lộ 22 (Quốc Lộ 1)</option>
                                                    <option value="6832">Quốc Lộ 50</option>
                                                    <option value="1036542">Quốc lộ 50</option>
                                                    <option value="140997">Quy Đức</option>
                                                    <option value="140872">Quy Đức</option>
                                                    <option value="4947">Rạch Bùng Binh</option>
                                                    <option value="7085">Rạch Hóc Môn</option>
                                                    <option value="140998">Rạch Lùng</option>
                                                    <option value="6833">Rạch Ông Cốm</option>
                                                    <option value="7086">Ranh Ấp Mỹ Hòa 1-Mỹ Hòa 3</option>
                                                    <option value="7087">Ranh Xã Trung Chánh-Tân Xuân</option>
                                                    <option value="5258">Raymondienne</option>
                                                    <option value="7088">Rỗng Bàng Xã Tân Hiệp</option>
                                                    <option value="6893">Rừng Sác</option>
                                                    <option value="6262">Sầm Sơn</option>
                                                    <option value="6263">Sao Mai</option>
                                                    <option value="5818">Sinco</option>
                                                    <option value="7089">Số 12 Xã Tân Thới Nhì</option>
                                                    <option value="7090">Số 14 Xã Tân Thới Nhì</option>
                                                    <option value="7091">Số 17 Xã Tân Thới Nhì</option>
                                                    <option value="7092">Số 5 Xã Tân Thới Nhì</option>
                                                    <option value="7093">Số 6 Xã Tân Thới Nhì</option>
                                                    <option value="7094">Số 7 Xã Tân Thới Nhì</option>
                                                    <option value="7095">Số 8 Xã Tân Thới Nhì</option>
                                                    <option value="6264">Sơn Cang</option>
                                                    <option value="6265">Sơn Hưng</option>
                                                    <option value="6514">Sơn Kỳ</option>
                                                    <option value="6266">Sông Đà</option>
                                                    <option value="6267">Sông Đáy</option>
                                                    <option value="1728928">Song Hành</option>
                                                    <option value="1046706">Song Hành</option>
                                                    <option value="6978">Sông Lu</option>
                                                    <option value="6268">Sông Nhuệ</option>
                                                    <option value="5819">Sông Suối</option>
                                                    <option value="5820">Sông Tắc</option>
                                                    <option value="6269">Sông Thao</option>
                                                    <option value="6270">Sông Thương</option>
                                                    <option value="4948">Sư Thiện Chiếu</option>
                                                    <option value="5107">Sư Vạn Hạnh</option>
                                                    <option value="5471">Sư Vạn Hạnh</option>
                                                    <option value="6979">Suối Lội</option>
                                                    <option value="4753">Sương Nguyệt Ánh</option>
                                                    <option value="5821">Tạ Mỹ Duật</option>
                                                    <option value="179346">Tạ Quang Bửu</option>
                                                    <option value="5560">Tạ Uyên</option>
                                                    <option value="5108">Tạ Uyên</option>
                                                    <option value="6894">Tắc Xuất</option>
                                                    <option value="6271">Tái Thiết</option>
                                                    <option value="6628">Tam Bình</option>
                                                    <option value="6629">Tam Châu(Tam Phú-Tam Bình)</option>
                                                    <option value="5415">Tam Đa</option>
                                                    <option value="5472">Tam Đảo</option>
                                                    <option value="140767">Tam Đông</option>
                                                    <option value="6630">Tam Hà</option>
                                                    <option value="6980">Tam Tân</option>
                                                    <option value="6895">Tam Thôn Hiệp</option>
                                                    <option value="2504101">Tân Cảng</option>
                                                    <option value="6272">Tân Canh</option>
                                                    <option value="6085">Tân Canh</option>
                                                    <option value="5598">Tân Chánh Hiệp 10</option>
                                                    <option value="6273">Tân Châu</option>
                                                    <option value="5109">Tản Đà</option>
                                                    <option value="6274">Tân Hải</option>
                                                    <option value="5110">Tân Hàng</option>
                                                    <option value="140768">Tân Hiệp</option>
                                                    <option value="7096">Tân Hiệp 14-32 (Tân Hiệp)</option>
                                                    <option value="140770">Tân Hiệp 15</option>
                                                    <option value="140771">Tân Hiệp 31</option>
                                                    <option value="7097">Tân Hiệp 4 nối dài (Tân Hiệp)</option>
                                                    <option value="7098">Tân Hiệp 6</option>
                                                    <option value="140769">Tân Hiệp 7</option>
                                                    <option value="7099">Tân Hiệp 8 (Tân Hiệp)</option>
                                                    <option value="608425">Tân Hóa</option>
                                                    <option value="5561">Tân Hóa</option>
                                                    <option value="5185">Tân Hoà Đông</option>
                                                    <option value="5822">Tân Hoà Đông</option>
                                                    <option value="5416">Tân Hoà Ii</option>
                                                    <option value="5111">Tân Hưng</option>
                                                    <option value="6515">Tân Hương</option>
                                                    <option value="6275">Tân Khai</option>
                                                    <option value="5562">Tân Khai</option>
                                                    <option value="6276">Tân Kỳ Tân Quí</option>
                                                    <option value="5823">Tân Kỳ Tân Quý</option>
                                                    <option value="6516">Tân Kỳ Tân Quý</option>
                                                    <option value="6277">Tân Lập</option>
                                                    <option value="5417">Tân Lập I</option>
                                                    <option value="5418">Tân Lập Ii</option>
                                                    <option value="6834">Tân Liêm</option>
                                                    <option value="6835">Tân Liểu</option>
                                                    <option value="6836">Tân Long</option>
                                                    <option value="5259">Tân Mỹ</option>
                                                    <option value="6837">Tân Nhiểu</option>
                                                    <option value="5260">Tân Phú</option>
                                                    <option value="140798">Tân Phú Trung</option>
                                                    <option value="5563">Tân Phước</option>
                                                    <option value="5473">Tân Phước</option>
                                                    <option value="6278">Tân Phước</option>
                                                    <option value="6517">Tân Quý</option>
                                                    <option value="739854">Tân Quy Đông</option>
                                                    <option value="6838">Tân Quý Tây (Đoàn Nguyễn Tuân)</option>
                                                    <option value="6011">Tân Sơn</option>
                                                    <option value="1588184">Tân Sơn</option>
                                                    <option value="6279">Tân Sơn Hoà</option>
                                                    <option value="5920">Tân Sơn Nhất Bình Lợi</option>
                                                    <option value="6518">Tân Sơn Nhì</option>
                                                    <option value="6280">Tân Tạo</option>
                                                    <option value="6519">Tân Thành</option>
                                                    <option value="5564">Tân Thành</option>
                                                    <option value="5112">Tân Thành</option>
                                                    <option value="6281">Tân Thọ</option>
                                                    <option value="140356">Tân Thới Hiệp 22 (TTH22)</option>
                                                    <option value="5599">Tân Thới Nhất 05</option>
                                                    <option value="5600">Tân Thới Nhất 1</option>
                                                    <option value="684737">Tân Thới Nhất 13</option>
                                                    <option value="895210">Tân Thới Nhất 17</option>
                                                    <option value="5601">Tân Thới Nhất 2</option>
                                                    <option value="5602">Tân Thới Nhất 6</option>
                                                    <option value="5603">Tân Thới Nhất 8</option>
                                                    <option value="5261">Tân Thuận Tây</option>
                                                    <option value="6282">Tân Tiến</option>
                                                    <option value="7100">Tân Tiến 11 (Xuân Thới Đông)</option>
                                                    <option value="7101">Tân Tiến 12 (Xuân Thới Đông)</option>
                                                    <option value="7102">Tân Tiến 4 (Xuân Thới Đông)</option>
                                                    <option value="6283">Tân Trang</option>
                                                    <option value="5262">Tân Trào</option>
                                                    <option value="6284">Tân Trụ</option>
                                                    <option value="6839">Tân Túc</option>
                                                    <option value="6285">Tản Viên</option>
                                                    <option value="5034">Tân Vĩnh</option>
                                                    <option value="6286">Tân Xuân</option>
                                                    <option value="7103">Tân Xuân 1 (Tân Xuân)</option>
                                                    <option value="7104">Tân Xuân 3 (Tân Xuân)</option>
                                                    <option value="7105">Tân Xuân 4 (Tân Xuân)</option>
                                                    <option value="7106">Tân Xuân 5 (Tân Xuân)</option>
                                                    <option value="7107">Tân Xuân 7 (Tân Xuân)</option>
                                                    <option value="5113">Tăng Bạt Hổ</option>
                                                    <option value="5921">Tăng Bạt Hổ</option>
                                                    <option value="5419">Tăng Nhơn Phú</option>
                                                    <option value="5824">Tập Đoàn 6b</option>
                                                    <option value="5420">Tây Hoà</option>
                                                    <option value="5825">Tây Lân</option>
                                                    <option value="6520">Tây Sơn</option>
                                                    <option value="6521">Tây Thạnh</option>
                                                    <option value="5826">Tên Lửa</option>
                                                    <option value="6522">Thạch Lam</option>
                                                    <option value="4754">Thạch Thị Thanh</option>
                                                    <option value="7108">Thái Bình</option>
                                                    <option value="5565">Thái Phiên</option>
                                                    <option value="6287">Thái Thị Nhạn</option>
                                                    <option value="1728921">Thái Thuận</option>
                                                    <option value="4755">Thái Văn Lung</option>
                                                    <option value="6523">Thẩm Mỹ</option>
                                                    <option value="6288">Thân Nhân Trung</option>
                                                    <option value="6289">Thăng Long</option>
                                                    <option value="6524">Thành Công</option>
                                                    <option value="5922">Thanh Đa</option>
                                                    <option value="2051009">Thạnh Lộc 17</option>
                                                    <option value="5604">Thạnh Lộc 30</option>
                                                    <option value="6290">Thành Mỹ</option>
                                                    <option value="4894">Thạnh Mỹ Lợi</option>
                                                    <option value="6840">Thanh Niên</option>
                                                    <option value="5474">Thành Thái</option>
                                                    <option value="6896">Thạnh Thới</option>
                                                    <option value="140782">Thành ủy</option>
                                                    <option value="5605">Thạnh Xuân 13</option>
                                                    <option value="4895">Thảo Điền</option>
                                                    <option value="5186">Tháp Mười</option>
                                                    <option value="5478">Thất Sơn</option>
                                                    <option value="6841">Thế Lữ</option>
                                                    <option value="6291">Thép Mới</option>
                                                    <option value="4756">Thi Sách</option>
                                                    <option value="6012">Thích Bữu Đăng</option>
                                                    <option value="4896">Thích Mật Thể</option>
                                                    <option value="6292">Thích Minh Nguyệt</option>
                                                    <option value="6086">Thích Quảng Đức</option>
                                                    <option value="6842">Thích Thiện Hòa</option>
                                                    <option value="6843">Thiên Giang</option>
                                                    <option value="6013">Thiên Hộ Dương</option>
                                                    <option value="5923">Thiên Hộ Dương</option>
                                                    <option value="5566">Thiên Phước</option>
                                                    <option value="6293">Thiên Phước</option>
                                                    <option value="7109">Thiên Quang</option>
                                                    <option value="5827">Thoại Ngọc Hầu</option>
                                                    <option value="6525">Thoại Ngọc Hầu</option>
                                                    <option value="5606">Thới An 19</option>
                                                    <option value="6844">Thới Hòa</option>
                                                    <option value="7110">Thới Tam Thôn 11A (Thới Tam Thôn)</option>
                                                    <option value="7111">Thới Tam Thôn 13 (Thới Tam Thôn)</option>
                                                    <option value="7112">Thới Tam Thôn 6 (Thới Tam Thôn)</option>
                                                    <option value="7113">Thới Tây-Tân Hiệp (Đường Tân Hiệp 5)</option>
                                                    <option value="6526">Thống Nhất</option>
                                                    <option value="6014">Thống Nhất</option>
                                                    <option value="6631">Thống Nhất(Phường Bình Thọ)</option>
                                                    <option value="6015">Thông Tây Hội</option>
                                                    <option value="6294">Thủ Khoa Huân</option>
                                                    <option value="4757">Thủ Khoa Huân</option>
                                                    <option value="5114">Thuận Kiều</option>
                                                    <option value="5567">Thuận Kiều</option>
                                                    <option value="7114">Thương Mại 1</option>
                                                    <option value="7115">Thương Mại 3</option>
                                                    <option value="6295">Tiền Giang</option>
                                                    <option value="5828">Tỉnh Lộ 10</option>
                                                    <option value="6845">Tỉnh Lộ 10</option>
                                                    <option value="6981">Tỉnh Lộ 15</option>
                                                    <option value="5607">Tỉnh Lộ 15</option>
                                                    <option value="6982">Tỉnh Lộ 2</option>
                                                    <option value="636797">Tỉnh lộ 25B</option>
                                                    <option value="141000">Tỉnh lộ 42</option>
                                                    <option value="6632">Tỉnh Lộ 43</option>
                                                    <option value="141001">Tỉnh lộ 44</option>
                                                    <option value="6983">Tỉnh Lộ 6</option>
                                                    <option value="6984">Tỉnh Lộ 7</option>
                                                    <option value="6985">Tỉnh Lộ 8</option>
                                                    <option value="6986">Tỉnh Lộ 9</option>
                                                    <option value="5479">Tô Hiến Thành</option>
                                                    <option value="6527">Tô Hiệu</option>
                                                    <option value="7116">Tô Ký</option>
                                                    <option value="5608">Tô Ký</option>
                                                    <option value="5609">Tô Ngọc Vân</option>
                                                    <option value="6633">Tô Ngọc Vân</option>
                                                    <option value="6634">Tô Vĩnh Diện</option>
                                                    <option value="5035">Tôn Đản</option>
                                                    <option value="5263">Tôn Dật Tiên</option>
                                                    <option value="4758">Tôn Đức Thắng</option>
                                                    <option value="4759">Tôn Thất Đạm</option>
                                                    <option value="5568">Tôn Thất Hiệp</option>
                                                    <option value="4760">Tôn Thất Thiệp</option>
                                                    <option value="5036">Tôn Thất Thuyết</option>
                                                    <option value="4761">Tôn Thất Tùng</option>
                                                    <option value="5115">Tống Duy Tân</option>
                                                    <option value="4897">Tống Hữu Định</option>
                                                    <option value="5569">Tổng Lung</option>
                                                    <option value="6296">Tống Văn Hên</option>
                                                    <option value="5570">Tống Văn Trân</option>
                                                    <option value="6297">Trà Khúc</option>
                                                    <option value="6016">Trần Bá Giao</option>
                                                    <option value="6017">Trần Bình Trọng</option>
                                                    <option value="7117">Trần Bình Trọng</option>
                                                    <option value="5480">Trần Bình Trọng</option>
                                                    <option value="5924">Trần Bình Trọng</option>
                                                    <option value="5116">Trần Bình Trọng</option>
                                                    <option value="4949">Trần Cao Vân</option>
                                                    <option value="4762">Trần Cao Vân</option>
                                                    <option value="6087">Trần Cao Vân</option>
                                                    <option value="5117">Trần Chánh Chiếu</option>
                                                    <option value="5829">Trần Đại Nghĩa</option>
                                                    <option value="6846">Trần Đại Nghĩa</option>
                                                    <option value="5118">Trần Điện</option>
                                                    <option value="4763">Trần Đình Xu</option>
                                                    <option value="4764">Trần Doãn Khanh</option>
                                                    <option value="6847">Trần Hải Phụng</option>
                                                    <option value="5119">Trần Hoà</option>
                                                    <option value="5120">Trần Hưng Đạo</option>
                                                    <option value="4765">Trần Hưng Đạo</option>
                                                    <option value="5421">Trần Hưng Đạo</option>
                                                    <option value="6528">Trần Hưng Đạo</option>
                                                    <option value="1021535">Trần Hưng Đạo</option>
                                                    <option value="6088">Trần Hữu Trang</option>
                                                    <option value="6089">Trần Huy Liệu</option>
                                                    <option value="6090">Trần Kế Xương</option>
                                                    <option value="5925">Trần Kế Xương</option>
                                                    <option value="4766">Trần Khắc Chân</option>
                                                    <option value="6091">Trần Khắc Chân</option>
                                                    <option value="7118">Trần Khắc Chân</option>
                                                    <option value="7119">Trần Khắc Chân nối dài</option>
                                                    <option value="4767">Trần Khánh Dư</option>
                                                    <option value="1728929">Trần Lưu</option>
                                                    <option value="6298">Trần Mai Ninh</option>
                                                    <option value="5481">Trần Minh Quyền</option>
                                                    <option value="4898">Trần Não</option>
                                                    <option value="4899">Trần Ngọc Diện</option>
                                                    <option value="1265929">Trần Nguyên Hãn</option>
                                                    <option value="5482">Trần Nhân Tôn</option>
                                                    <option value="5121">Trần Nhân Tôn</option>
                                                    <option value="4768">Trần Nhật Duật</option>
                                                    <option value="5122">Trần Phú</option>
                                                    <option value="6018">Trần Phú Cương</option>
                                                    <option value="6529">Trần Quang Cơ</option>
                                                    <option value="6897">Trần Quang Đạo</option>
                                                    <option value="4950">Trần Quang Diệu</option>
                                                    <option value="4951">Trần Quang Diệu (c/x T.Q. Diệu)</option>
                                                    <option value="4769">Trần Quang Khải</option>
                                                    <option value="2504093">Trần Quang Long</option>
                                                    <option value="6898">Trần Quang Quờn</option>
                                                    <option value="6299">Trần Quốc Hoàn</option>
                                                    <option value="4952">Trần Quốc Thảo</option>
                                                    <option value="4953">Trần Quốc Toản</option>
                                                    <option value="5422">Trần Quốc Toản</option>
                                                    <option value="6019">Trần Quốc Tuấn</option>
                                                    <option value="5571">Trần Quý</option>
                                                    <option value="5926">Trần Quý Cáp</option>
                                                    <option value="4770">Trần Quý Khoách</option>
                                                    <option value="6530">Trần Tấn</option>
                                                    <option value="6300">Trần Thái Tông</option>
                                                    <option value="5830">Trần Thanh Mại</option>
                                                    <option value="6301">Trần Thánh Tông</option>
                                                    <option value="1701339">Trần Thị Cờ</option>
                                                    <option value="1701347">Trần Thị Kiều</option>
                                                    <option value="6987">Trần Thị Ngần</option>
                                                    <option value="6020">Trần Thị Nghĩ</option>
                                                    <option value="2610954">Trần Thị Ngôi</option>
                                                    <option value="5483">Trần Thiện Chánh</option>
                                                    <option value="6531">Trần Thủ Độ</option>
                                                    <option value="6302">Trần Triệu Luật</option>
                                                    <option value="5264">Trần Trọng Cung</option>
                                                    <option value="5423">Trần Trọng Khiêm</option>
                                                    <option value="5187">Trần Trung Lập</option>
                                                    <option value="6988">Trần Tử Bình</option>
                                                    <option value="5123">Trần Tuấn Khải</option>
                                                    <option value="5124">Trần Tướng Công</option>
                                                    <option value="698684">Trần Văn Cẩn</option>
                                                    <option value="6989">Trần Văn Chẩm</option>
                                                    <option value="4954">Trần Văn Đang</option>
                                                    <option value="6303">Trần Văn Danh</option>
                                                    <option value="6304">Trần Văn Dư</option>
                                                    <option value="6532">Trần Văn Giáp</option>
                                                    <option value="6305">Trần Văn Hoàng</option>
                                                    <option value="5265">Trần Văn Khánh</option>
                                                    <option value="5188">Trần Văn Kiểu</option>
                                                    <option value="5125">Trần Văn Kiểu</option>
                                                    <option value="5927">Trần Văn Kỷ</option>
                                                    <option value="7120">Trần Văn Mười</option>
                                                    <option value="6635">Trần Văn Nữa(Ngô Quyền)</option>
                                                    <option value="6533">Trần Văn Ơn</option>
                                                    <option value="6306">Trần Văn Quang</option>
                                                    <option value="5266">Trần Văn Trà</option>
                                                    <option value="5126">Trần Xuân Hoà</option>
                                                    <option value="5267">Trần Xuân Soạn</option>
                                                    <option value="5127">Trang Tử</option>
                                                    <option value="5189">Trang Tử</option>
                                                    <option value="5128">Triệu Quang Phục</option>
                                                    <option value="6534">Trịnh Đình Thảo</option>
                                                    <option value="6535">Trịnh Đình Trọng</option>
                                                    <option value="5572">Trịnh Đình Trọng</option>
                                                    <option value="5424">Trịnh Hoài Đức</option>
                                                    <option value="5928">Trịnh Hoài Đức</option>
                                                    <option value="5129">Trịnh Hoài Đức</option>
                                                    <option value="4900">Trịnh Khắc Lập</option>
                                                    <option value="6536">Trịnh Lỗi</option>
                                                    <option value="6848">Trịnh Như Khuê</option>
                                                    <option value="141002">Trịnh Phong Đán</option>
                                                    <option value="6849">Trịnh Quang Nghị</option>
                                                    <option value="608681">Trịnh Quang Nghị</option>
                                                    <option value="7121">Trịnh Thị Miếng (Đường Trung Chánh-Tân Hiệp)</option>
                                                    <option value="4771">Trịnh Văn Cấn</option>
                                                    <option value="4901">Trúc Đường</option>
                                                    <option value="6990">Trung An</option>
                                                    <option value="7122">Trung Đông 11 (Thới Tam Thôn)</option>
                                                    <option value="7123">Trung Đông 12 (Thới Tam Thôn)</option>
                                                    <option value="7124">Trung Đông 7 (Thới Tam Thôn)</option>
                                                    <option value="7125">Trung Đông 8 (Thới Tam Thôn)</option>
                                                    <option value="6307">Trung Lang</option>
                                                    <option value="7126">Trung Mỹ</option>
                                                    <option value="5610">Trung Mỹ Tây 13</option>
                                                    <option value="1760119">Trung Mỹ Tây 17</option>
                                                    <option value="5611">Trung Mỹ Tây 2a</option>
                                                    <option value="7127">Trưng Nữ Vương</option>
                                                    <option value="6021">Trưng Nữ Vương</option>
                                                    <option value="6537">Trường Chinh</option>
                                                    <option value="6308">Trường Chinh</option>
                                                    <option value="5612">Trường Chinh</option>
                                                    <option value="6309">Trương Công Định</option>
                                                    <option value="6022">Trương Đăng Quế</option>
                                                    <option value="4772">Trương Định</option>
                                                    <option value="4955">Trương Định</option>
                                                    <option value="5037">Trương Đình Hợi</option>
                                                    <option value="679788">Trương Đình Hội</option>
                                                    <option value="4773">Trương Hán Siêu</option>
                                                    <option value="5425">Trương Hanh</option>
                                                    <option value="6310">Trương Hoàng Thanh</option>
                                                    <option value="5426">Trường Lưu</option>
                                                    <option value="6023">Trương Minh Ký</option>
                                                    <option value="5831">Trương Phước Phan</option>
                                                    <option value="6092">Trương Quốc Dung</option>
                                                    <option value="4956">Trương Quyền</option>
                                                    <option value="4957">Trường Sa</option>
                                                    <option value="4774">Trường Sa</option>
                                                    <option value="5929">Trường Sa</option>
                                                    <option value="6093">Trường Sa</option>
                                                    <option value="6311">Trường Sa</option>
                                                    <option value="6312">Trường Sơn</option>
                                                    <option value="5484">Trường Sơn</option>
                                                    <option value="6991">Trương Thị Kiện</option>
                                                    <option value="6636">Trường Thọ</option>
                                                    <option value="141003">Truông Tre</option>
                                                    <option value="6850">Trương Văn Đa</option>
                                                    <option value="5427">Trương Văn Hải</option>
                                                    <option value="6538">Trương Vân Lĩnh</option>
                                                    <option value="6637">Trương Văn Ngư</option>
                                                    <option value="5428">Trương Văn Thành</option>
                                                    <option value="6539">Trương Vĩnh Ký</option>
                                                    <option value="6313">Trương Vĩnh Ký</option>
                                                    <option value="7128">Trương Vương 3</option>
                                                    <option value="140357">TTH 37</option>
                                                    <option value="140358">TTH 7</option>
                                                    <option value="6314">Tự Cường</option>
                                                    <option value="6540">Tự Do 1</option>
                                                    <option value="6315">Tứ Hải</option>
                                                    <option value="6316">Tự Lập</option>
                                                    <option value="6024">Tú Mỡ</option>
                                                    <option value="6541">Tự Quyết</option>
                                                    <option value="5429">Tú Xương</option>
                                                    <option value="4958">Tú Xương</option>
                                                    <option value="5573">Tuệ Tĩnh</option>
                                                    <option value="5308">Tùng Thiện Vương</option>
                                                    <option value="1875227">tưởng</option>
                                                    <option value="7129">Tuyến 5 Xã Thới Tam Thôn</option>
                                                    <option value="7130">Tuyến 9 Xã Thới Tam Thôn</option>
                                                    <option value="141004">Ụ Ghe</option>
                                                    <option value="5930">Ung Văn Khiêm</option>
                                                    <option value="6317">Út Tịch</option>
                                                    <option value="1066351">Ưu Long</option>
                                                    <option value="6542">Văn Cao</option>
                                                    <option value="6318">Văn Chung</option>
                                                    <option value="6319">Vân Côi</option>
                                                    <option value="7131">Vạn Hạnh 1</option>
                                                    <option value="7132">Vạn Hạnh 3</option>
                                                    <option value="7133">Vạn Hạnh 4</option>
                                                    <option value="5931">Vạn Kiếp</option>
                                                    <option value="5130">Vạn Kiếp</option>
                                                    <option value="5190">Văn Thân</option>
                                                    <option value="5131">Vạn Tượng</option>
                                                    <option value="1472800">Vành Đai</option>
                                                    <option value="5832">Vành Đai Trong</option>
                                                    <option value="6094">Ven Kênh Nhiêu Lộc Thị Nghè</option>
                                                    <option value="5038">Vĩnh Khánh</option>
                                                    <option value="6851">Vĩnh Lộc</option>
                                                    <option value="5833">Vĩnh Lộc (hương Lộ 80)</option>
                                                    <option value="140876">Vĩnh Lộc B</option>
                                                    <option value="5485">Vĩnh Viễn</option>
                                                    <option value="5574">Vĩnh Viễn</option>
                                                    <option value="1666288">Võ Công Tồn</option>
                                                    <option value="5932">Võ Duy Ninh</option>
                                                    <option value="6543">Võ Hoành</option>
                                                    <option value="6852">Võ Hữu Lợi</option>
                                                    <option value="6320">Võ Thành Trang</option>
                                                    <option value="6992">Võ Thị Hồng</option>
                                                    <option value="4775">Võ Thị Sáu</option>
                                                    <option value="4959">Võ Thị Sáu</option>
                                                    <option value="1038658">Võ Trứ</option>
                                                    <option value="5933">Võ Trường Toản</option>
                                                    <option value="5132">Võ Trường Toản</option>
                                                    <option value="4902">Võ Trường Toản</option>
                                                    <option value="6993">Võ Văn Bích</option>
                                                    <option value="140784">Võ Văn Bích</option>
                                                    <option value="6994">Võ Văn Điều</option>
                                                    <option value="6544">Võ Văn Dũng</option>
                                                    <option value="5430">Võ Văn Hát</option>
                                                    <option value="640418">Võ Văn Kiệt</option>
                                                    <option value="4776">Võ Văn Kiệt</option>
                                                    <option value="5133">Võ Văn Kiệt</option>
                                                    <option value="743865">Võ Văn Kiệt</option>
                                                    <option value="666079">Võ Văn Kiệt</option>
                                                    <option value="6638">Võ Văn Ngân</option>
                                                    <option value="4960">Võ Văn Tần</option>
                                                    <option value="6853">Võ Văn Vân</option>
                                                    <option value="5834">Võ Văn Vân</option>
                                                    <option value="5134">Vũ Chí Hiếu</option>
                                                    <option value="6995">Vũ Duy Chí</option>
                                                    <option value="5835">Vũ Hữu</option>
                                                    <option value="5934">Vũ Huy Tấn</option>
                                                    <option value="5935">Vũ Ngọc Phan</option>
                                                    <option value="1728946">Vũ Tông Phan</option>
                                                    <option value="6545">Vũ Trọng Phụng</option>
                                                    <option value="6996">Vũ Tụ</option>
                                                    <option value="5936">Vũ Tùng</option>
                                                    <option value="4961">Vườn Chuối</option>
                                                    <option value="5613">Vườn Lài</option>
                                                    <option value="6546">Vườn Lài</option>
                                                    <option value="6321">Vườn Lan</option>
                                                    <option value="6854">Vườn Thơm</option>
                                                    <option value="5836">Vương Văn Huống</option>
                                                    <option value="1192301">Xa Lộ Hà Nội</option>
                                                    <option value="5431">Xa Lộ Hà Nội</option>
                                                    <option value="4903">Xa Lộ Hà Nội</option>
                                                    <option value="6639">Xa Lộ Hà Nội(Quốc Lộ 52)</option>
                                                    <option value="5937">Xô Viết Nghệ Tĩnh</option>
                                                    <option value="5135">Xóm Chỉ</option>
                                                    <option value="5039">Xóm Chiếu</option>
                                                    <option value="5575">Xóm Đất</option>
                                                    <option value="6855">Xóm Dầu</option>
                                                    <option value="6856">Xóm Giữa</option>
                                                    <option value="6857">Xóm Hố</option>
                                                    <option value="5136">Xóm Vôi</option>
                                                    <option value="6322">Xuân Diệu</option>
                                                    <option value="141006">Xuân Hiệp</option>
                                                    <option value="6323">Xuân Hồng</option>
                                                    <option value="7134">Xuân Thới 15</option>
                                                    <option value="7135">Xuân Thới 2 Xã Xuân Thới Đông</option>
                                                    <option value="7136">Xuân Thới 23</option>
                                                    <option value="7137">Xuân Thới 3 Xã Xuân Thới Đông</option>
                                                    <option value="7138">Xuân Thới 5</option>
                                                    <option value="7139">Xuân Thới 6</option>
                                                    <option value="7140">Xuân Thới 7</option>
                                                    <option value="7141">Xuân Thới 8</option>
                                                    <option value="7142">Xuân Thới 9</option>
                                                    <option value="7143">Xuân Thới Sơn 1</option>
                                                    <option value="7144">Xuân Thới Sơn 16</option>
                                                    <option value="7145">Xuân Thới Sơn 2</option>
                                                    <option value="7146">Xuân Thới Sơn 2</option>
                                                    <option value="7147">Xuân Thới Sơn 20</option>
                                                    <option value="7148">Xuân Thới Sơn 20C</option>
                                                    <option value="7149">Xuân Thới Sơn 21 (Xuân Thới Sơn)</option>
                                                    <option value="7150">Xuân Thới Sơn 22</option>
                                                    <option value="7151">Xuân Thới Sơn 26 (Xuân Thới Sơn)</option>
                                                    <option value="7152">Xuân Thới Sơn 27 (Xuân Thới Sơn)</option>
                                                    <option value="7153">Xuân Thới Sơn 37</option>
                                                    <option value="7154">Xuân Thới Sơn 38</option>
                                                    <option value="7155">Xuân Thới Sơn 4</option>
                                                    <option value="7156">Xuân Thới Sơn 5</option>
                                                    <option value="7157">Xuân Thới Sơn 6 (Xuân Thới Sơn)</option>
                                                    <option value="7158">Xuân Thới Sơn 8 (Xuân Thới Sơn)</option>
                                                    <option value="7159">Xuân Thới Sơn A (Xuân Thới Sơn)</option>
                                                    <option value="7160">Xuân Thới Thượng 15 (Ấp 1)</option>
                                                    <option value="7161">Xuân Thới Thượng 16 (Ấp 1)</option>
                                                    <option value="7162">Xuân Thới Thượng 17 (Ấp 1)</option>
                                                    <option value="7163">Xuân Thới Thượng 23 (Ấp 4)</option>
                                                    <option value="7164">Xuân Thới Thượng 24 (Ấp 4)</option>
                                                    <option value="7165">Xuân Thới Thượng 26</option>
                                                    <option value="7166">Xuân Thới Thượng 4 (Ấp 4)</option>
                                                    <option value="7167">Xuân Thới Thượng 5 (Ấp 5)</option>
                                                    <option value="7168">Xuân Thới Thượng 6 (Ấp 2)</option>
                                                    <option value="7169">Xuân Thới Thượng 7 (Ấp 3)</option>
                                                    <option value="7170">Xuân Thới Thượng 8 (Ấp 3)</option>
                                                    <option value="7171">Xuân Thới Thượng 9 (Ấp 3)</option>
                                                    <option value="4904">Xuân Thủy</option>
                                                    <option value="6547">Ỷ Lan</option>
                                                    <option value="6548">Yên Đỗ</option>
                                                    <option value="5938">Yên Đỗ</option>
                                                    <option value="6324">Yên Thế</option>
                                                    <option value="4777">Yersin</option>
                                                    <option value="5137">Yết Kiêu</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="StreetId">*</span>
                                                <label class="text-error collapse" for="autocompleteStreetId"></label>
                                            </div>
                                        </div>
                                        <!-- Số nhà -->
                                        <div class="form-group section-tp-house">
                                            <label class="col-sm-6 control-label required" for="AddressNumber">Số nhà:</label>
                                            <div class="col-sm-6">
                                                <input name="AddressNumber" class="form-control" id="AddressNumber" required="required" type="text" maxlength="250" placeholder="Số nhà" value="" data-val="true" data-val-length-max="255" data-val-length="The field AddressNumber must be a string with a maximum length of 255." data-msg-required="Vui lòng nhập Số nhà">
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AddressNumber">*</span>
                                            </div>
                                        </div>
                                        <!-- Mã số căn hộ -->
                                        <div class="form-group section-tp-apartment" style="display: none;">
                                            <label class="col-sm-6 control-label" for="ApartmentNumber">Mã số căn hộ:</label>
                                            <div class="col-sm-6">
                                                <input name="ApartmentNumber" class="form-control" id="ApartmentNumber" required="required" type="text" maxlength="250" placeholder="Mã số căn hộ" value="" data-val="true" data-val-length-max="255" data-val-length="The field ApartmentNumber must be a string with a maximum length of 255." data-msg-required="Vui lòng nhập Mã số căn hộ">
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="ApartmentNumber">*</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="text-error collapse" id="CannotEstimate">
                                    <p>
                                    </p>
                                    <h4>Chúng tôi chưa thể định giá cho BĐS này do một trong các nguyên nhân sau:</h4>
                                    <p></p>
                                    <ol>
                                        <li>Đường hoặc Phường chưa chính xác (Đường không thuộc Phường)</li>
                                        <li>Khu vực chưa đủ dữ liệu so sánh (Bạn vui lòng thử lại vào lúc khác khi chúng tôi cập nhật thêm dữ liệu)</li>
                                    </ol>
                                </div>
                            </li>

                            <!-- Thông tin Vị trí BĐS -->
                            <li class="content-item-estimate section-tp-house">
                                <h2 class="section-title">
                                    <span>Thông tin Vị trí BĐS</span>
                                </h2>
                                <div class="row">
                                    <div class="col-md-6 col-lg-push-6 col-warning">
                                        <ul>
                                            <li>
                                                <label>Lưu ý</label>
                                                <p>Thay đổi khoảng cách, số lần rẽ, hoặc độ rộng hẻm kết quả định giá sẽ thay đổi rất nhiều.</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-pull-6">
                                        <!-- Hướng của Bất Động Sản -->
                                        <!-- Giấy tờ pháp lý -->
                                        <!-- Vị trí Bất Động Sản -->
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label required" for="LocationCssClass">Vị trí Bất Động Sản:</label>
                                            <div class="col-sm-6">
                                                <select name="LocationCssClass" class="form-control" id="LocationCssClass" required="required" data-msg-required="Vui lòng chọn vị trí bất động sản">
                                                    <option value="">-- Vui lòng chọn --</option>
                                                    <option value="h-front">Mặt tiền</option>
                                                    <option value="h-alley">Trong hẻm</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="LocationCssClass">*</span>
                                            </div>
                                        </div>
                                        <!-- Khoảng cách từ BĐS ra MT đường -->
                                        <div class="form-group" style="display: none;">
                                            <label class="col-sm-6 control-label required" for="DistanceToStreet">
                                                Khoảng cách từ BĐS ra MT đường:
                                                <i title="" class="help fa fa-question tooltip-help" data-original-title="" data-toggle="popover" data-placement="top" data-popover-content="#vt-1" data-trigger="click"></i>
                                            </label>
                                            <div class="hidden" id="vt-1">
                                                <div class="popover-heading"> Khoảng cách từ BĐS ra MT đường</div>
                                                <div class="popover-body">
                                                    Là tổng độ dài các đoạn ngõ/hẻm ra đến mặt tiền đường.
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="DistanceToStreet" disabled="disabled" class="form-control" id="DistanceToStreet" required="required" type="number" min="0" placeholder="Khoảng cách từ BĐS ra MT đường" value="" data-val-number="The field DistanceToStreet must be a number." data-val="true" data-msg-required="Vui lòng nhập">
                                                    <span class="input-group-addon">m</span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="DistanceToStreet">*</span>
                                                <label class="text-error collapse" for="DistanceToStreet">Vui lòng nhập</label>
                                            </div>
                                        </div>
                                        <!-- Số lần rẽ (quẹo) từ MT đường vào đến BĐS -->
                                        <div class="form-group" style="display: none;">
                                            <label class="col-sm-6 control-label required" for="AlleyTurns">
                                                Số lần rẽ (quẹo) từ MT đường vào đến BĐS:
                                                <i title="" class="help fa fa-question tooltip-help" data-original-title="" data-toggle="popover" data-placement="top" data-popover-content="#vt-2" data-trigger="click"></i>
                                            </label>
                                            <div class="hidden" id="vt-2">
                                                <div class="popover-heading">Số lần rẽ (quẹo) từ MT đường vào đến BĐS</div>
                                                <div class="popover-body">
                                                    <img alt="Hướng dẫn định giá bất động sản"> <!-- src="/Content/images/help.jpg"> -->
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                                <select name="AlleyTurns" disabled="disabled" class="form-control" id="AlleyTurns" required="required" data-val-number="The field AlleyTurns must be a number." data-val="true" data-msg-required="Vui lòng nhập">
                                                    <option value="">-- Chọn số lần rẽ (quẹo) --</option>
                                                    <option value="1">1 lần rẽ (quẹo)</option>
                                                    <option value="2">2 lần rẽ (quẹo)</option>
                                                    <option value="3">3 lần rẽ (quẹo)</option>
                                                    <option value="4">4 lần rẽ (quẹo)</option>
                                                    <option value="5">5 lần rẽ (quẹo)</option>
                                                    <option value="6">6 lần rẽ (quẹo)</option>
                                                    <option value="6">&gt; 6 lần rẽ (quẹo)</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AlleyTurns">*</span>
                                                <label class="text-error collapse" for="AlleyTurns">Vui lòng nhập</label>
                                            </div>
                                        </div>
                                        <!-- Lần rẽ thứ nhất (Hẻm đầu tiên) rộng -->
                                        <div class="form-group" style="display: none;">
                                            <label class="col-sm-6 control-label required" for="AlleyWidth1">Lần rẽ thứ nhất (Hẻm đầu tiên) rộng:</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="AlleyWidth1" class="form-control" id="AlleyWidth1" required="required" type="number" min="0" placeholder="Lần rẽ thứ 1 rộng" value="" data-val-number="The field AlleyWidth1 must be a number." data-val="true" data-msg-required="Vui lòng nhập">
                                                    <span class="input-group-addon">m</span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AlleyWidth1">*</span>
                                                <label class="text-error collapse" for="AlleyWidth1">Vui lòng nhập</label>
                                            </div>
                                        </div>
                                        <!-- Lần rẽ thứ 2 rộng -->
                                        <div class="form-group" style="display: none;">
                                            <label class="col-sm-6 control-label required" for="AlleyWidth2">Lần rẽ thứ 2 rộng:</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="AlleyWidth2" class="form-control" id="AlleyWidth2" required="required" type="number" min="0" placeholder="Lần rẽ thứ 2 rộng" value="" data-val-number="The field AlleyWidth2 must be a number." data-val="true" data-msg-required="Vui lòng nhập">
                                                    <span class="input-group-addon">m</span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AlleyWidth2">*</span>
                                                <label class="text-error collapse" for="AlleyWidth2">Vui lòng nhập</label>
                                            </div>
                                        </div>
                                        <!-- Lần rẽ thứ 3 rộng -->
                                        <div class="form-group" style="display: none;">
                                            <label class="col-sm-6 control-label required" for="AlleyWidth3">Lần rẽ thứ 3 rộng:</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="AlleyWidth3" class="form-control" id="AlleyWidth3" required="required" type="number" min="0" placeholder="Lần rẽ thứ 3 rộng" value="" data-val-number="The field AlleyWidth3 must be a number." data-val="true" data-msg-required="Vui lòng nhập">
                                                    <span class="input-group-addon">m</span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AlleyWidth3">*</span>
                                                <label class="text-error collapse" for="AlleyWidth3">Vui lòng nhập</label>
                                            </div>
                                        </div>
                                        <!-- Lần rẽ thứ 4 rộng -->
                                        <div class="form-group" style="display: none;">
                                            <label class="col-sm-6 control-label required" for="AlleyWidth4">Lần rẽ thứ 4 rộng:</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="AlleyWidth4" class="form-control" id="AlleyWidth4" required="required" type="number" min="0" placeholder="Lần rẽ thứ 4 rộng" value="" data-val-number="The field AlleyWidth4 must be a number." data-val="true" data-msg-required="Vui lòng nhập">
                                                    <span class="input-group-addon">m</span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AlleyWidth4">*</span>
                                                <label class="text-error collapse" for="AlleyWidth4">Vui lòng nhập</label>
                                            </div>
                                        </div>
                                        <!-- Lần rẽ thứ 5 rộng -->
                                        <div class="form-group" style="display: none;">
                                            <label class="col-sm-6 control-label required" for="AlleyWidth5">Lần rẽ thứ 5 rộng:</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="AlleyWidth5" class="form-control" id="AlleyWidth5" required="required" type="number" min="0" placeholder="Lần rẽ thứ 5 rộng" value="" data-val-number="The field AlleyWidth5 must be a number." data-val="true" data-msg-required="Vui lòng nhập">
                                                    <span class="input-group-addon">m</span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AlleyWidth5">*</span>
                                                <label class="text-error collapse" for="AlleyWidth5">Vui lòng nhập</label>
                                            </div>
                                        </div>
                                        <!-- Lần rẽ thứ 6 rộng -->
                                        <div class="form-group" style="display: none;">
                                            <label class="col-sm-6 control-label required" for="AlleyWidth6">Lần rẽ thứ 6 rộng:</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="AlleyWidth6" class="form-control" id="AlleyWidth6" required="required" type="number" min="0" placeholder="Lần rẽ thứ 6 rộng" value="" data-val-number="The field AlleyWidth6 must be a number." data-val="true" data-msg-required="Vui lòng nhập">
                                                    <span class="input-group-addon">m</span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AlleyWidth6">*</span>
                                                <label class="text-error collapse" for="AlleyWidth6">Vui lòng nhập</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Thông tin Diện tích BĐS -->
                            <li class="content-item-estimate section-tp-house">
                                <h2 class="section-title">
                                    <span>Thông tin Diện tích BĐS</span>
                                </h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Chiều ngang (hợp quy hoạch) -->
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label required" for="AreaLegalWidth">
                                                Chiều ngang (hợp quy hoạch):
                                            </label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="AreaLegalWidth" class="form-control" id="AreaLegalWidth" required="required" type="number" min="0" placeholder="Chiều ngang (hợp quy hoạch)" value="" data-val-number="The field AreaLegalWidth must be a number." data-val="true" data-msg-required="Vui lòng nhập Chiều ngang hợp quy hoạch.">
                                                    <span class="input-group-addon">m</span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AreaLegalWidth">*</span>
                                                <label class="text-error collapse" for="AreaLegalWidth"></label>
                                            </div>
                                        </div>
                                        <!-- Chiều dài (hợp quy hoạch) -->
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label required" for="AreaLegalLength">
                                                Chiều dài (hợp quy hoạch):
                                            </label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="AreaLegalLength" class="form-control" id="AreaLegalLength" required="required" type="number" min="0" placeholder="Chiều dài (hợp quy hoạch)" value="" data-val-number="The field AreaLegalLength must be a number." data-val="true" data-msg-required="Vui lòng nhập Chiều dài hợp quy hoạch.">
                                                    <span class="input-group-addon">m</span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AreaLegalLength">*</span>
                                                <label class="text-error collapse" for="AreaLegalLength"></label>
                                            </div>
                                        </div>
                                        <!-- Diện tích (hợp quy hoạch) -->
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label required" for="AreaLegal">
                                                Diện tích (hợp quy hoạch):
                                            </label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="AreaLegal" class="form-control" id="AreaLegal" type="number" min="0" placeholder="Diện tích (hợp quy hoạch)" value="" data-val-number="The field AreaLegal must be a number." data-val="true">
                                                    <span class="input-group-addon">m<sup>2</sup></span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AreaLegal">*</span>
                                            </div>
                                        </div>
                                        <!-- Ngang mặt hậu (hợp quy hoạch) -->
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label" for="AreaLegalBackWidth">
                                                Ngang <span class="text-danger">mặt hậu</span> (hợp quy hoạch):
                                                <i title="" class="help fa fa-question tooltip-help" data-original-title="" data-toggle="popover" data-placement="top" data-popover-content="#ttd-2" data-trigger="click"></i>
                                            </label>
                                            <div class="hidden" id="ttd-2">
                                                <div class="popover-heading">Ngang mặt hậu</div>
                                                <div class="popover-body">
                                                    Mặt hậu là cạnh đáy của lô đất dùng để xác định tóp hậu hay nở hậu.
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="AreaLegalBackWidth" class="form-control" id="AreaLegalBackWidth" type="number" min="0" placeholder="Ngang mặt hậu (hợp quy hoạch)" value="" data-val-number="The field AreaLegalBackWidth must be a number." data-val="true">
                                                    <span class="input-group-addon">m</span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AreaLegalBackWidth">*</span>
                                            </div>
                                        </div>
                                        <!-- Diện tích đất vi phạm lộ giới -->
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label text-warning" for="AreaIlegal">
                                                Diện tích đất vi phạm lộ giới:
                                                <i title="" class="help fa fa-question tooltip-help" data-original-title="" data-toggle="popover" data-placement="top" data-popover-content="#ttd-1" data-trigger="click"></i>
                                            </label>
                                            <div class="hidden" id="ttd-1">
                                                <div class="popover-heading">Diện tích đất vi phạm lộ giới</div>
                                                <div class="popover-body">
                                                    Là phần đất vi phạm lộ giới, qh nhưng trong chủ quyền (phần thông tin đất) vẫn ghi nhận đủ diện tích đó. Khi giải tỏa được đền bù theo giá thị trường.
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="AreaIlegal" class="form-control" id="AreaIlegal" type="number" min="0" placeholder="Diện tích đất vi phạm lộ giới" value="" data-val-number="The field AreaIlegal must be a number." data-val="true">
                                                    <span class="input-group-addon">m<sup>2</sup></span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AreaIlegal">*</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                            </li>

                            <!-- Thông tin Xây dựng BĐS -->
                            <li class="content-item-estimate section-tp-house section-tp-apartment section-construction">
                                <h2 class="section-title">
                                    <span>Thông tin Xây dựng BĐS</span>
                                </h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Diện tích đất xây dựng -->
                                        <div class="form-group section-tp-house">
                                            <label class="col-sm-6 control-label" for="AreaConstruction">
                                                Diện tích <span class="text-danger">đất</span> xây dựng
                                                <i title="" class="help fa fa-question tooltip-help" data-original-title="" data-toggle="popover" data-placement="top" data-popover-content="#ttxd-1" data-trigger="click"></i>
                                            </label>
                                            <div class="hidden" id="ttxd-1">
                                                <div class="popover-heading">Diện tích đất xây dựng</div>
                                                <div class="popover-body">
                                                    Là phần đất có công trình xây dựng trên đất.<br>
                                                    Diện tích này phải nhỏ hơn hoặc bằng diện tích đất khuôn viên
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="AreaConstruction" class="form-control" id="AreaConstruction" type="number" min="0" placeholder="Diện tích đất xây dựng" value="" data-val-number="The field AreaConstruction must be a number." data-val="true">
                                                    <span class="input-group-addon">m<sup>2</sup></span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AreaConstruction">*</span>
                                            </div>
                                        </div>
                                        <!-- Số tầng -->
                                        <div class="form-group section-tp-house">
                                            <label class="col-sm-6 control-label" for="FloorsCount">Số tầng</label>
                                            <div class="col-sm-6">
                                                <select name="FloorsCount" class="form-control" id="FloorsCount" data-val-number="The field FloorsCount must be a number." data-val="true">
                                                    <option value="">-- Chọn số tầng --</option>
                                                    <option value="1">1 tầng</option>
                                                    <option value="2">2 tầng</option>
                                                    <option value="3">3 tầng</option>
                                                    <option value="4">4 tầng</option>
                                                    <option value="5">5 tầng</option>
                                                    <option value="6">6 tầng</option>
                                                    <option value="7">7 tầng</option>
                                                    <option value="8">8 tầng</option>
                                                    <option value="9">9 tầng</option>
                                                    <option value="10">10 tầng</option>
                                                    <option value="-1">&gt; 10 tầng</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="FloorsCount">*</span>
                                            </div>
                                        </div>
                                        <!-- Số tầng chính xác -->
                                        <div class="form-group section-tp-house" style="display: none;">
                                            <label class="col-sm-6 control-label" for="Floors">Số tầng chính xác</label>
                                            <div class="col-sm-6">
                                                <input name="Floors" class="form-control" id="Floors" type="number" min="0" placeholder="Số tầng chính xác" value="0" data-val-number="The field Floors must be a number." data-val="true">
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="Floors">*</span>
                                            </div>
                                        </div>
                                        <!-- Diện tích sàn xây dựng -->
                                        <div class="form-group section-tp-house">
                                            <label class="col-sm-6 control-label" for="AreaConstructionFloor">
                                                Diện tích sàn xây dựng
                                                <i title="" class="help fa fa-question tooltip-help" data-original-title="" data-toggle="popover" data-placement="top" data-popover-content="#ttxd-2" data-trigger="click"></i>
                                            </label>
                                            <div class="hidden" id="ttxd-2">
                                                <div class="popover-heading">Diện tích sàn xây dựng</div>
                                                <div class="popover-body">
                                                    Là tổng diện tích các sàn xây dựng kể cả ban công, tầng hầm, sân thượng…
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="AreaConstructionFloor" class="form-control" id="AreaConstructionFloor" type="number" min="0" placeholder="Diện tích sàn xây dựng" value="" data-val-number="The field AreaConstructionFloor must be a number." data-val="true">
                                                    <span class="input-group-addon">m<sup>2</sup></span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AreaConstructionFloor">*</span>
                                            </div>
                                        </div>
                                        <!-- Số phòng ngủ -->
                                        <!-- Số phòng vệ sinh -->
                                        <!-- Căn hộ thuộc tầng -->
                                        <div class="form-group section-tp-apartment">
                                            <label class="col-sm-6 control-label required" for="ApartmentFloorTh">Căn hộ thuộc tầng:</label>
                                            <div class="col-sm-6">
                                                <input name="ApartmentFloorTh" class="form-control" id="ApartmentFloorTh" required="required" type="number" min="0" max="99" placeholder="Căn hộ thuộc tầng" value="" data-val-number="The field ApartmentFloorTh must be a number." data-val="true" data-msg-required="Vui lòng nhập Tầng căn hộ">
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="ApartmentFloorTh">*</span>
                                            </div>
                                        </div>
                                        <!-- Diện tích căn hộ -->
                                        <div class="form-group section-tp-apartment">
                                            <label class="col-sm-6 control-label required" for="AreaUsable">Diện tích căn hộ:</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="AreaUsable" class="form-control" id="AreaUsable" required="required" type="number" min="0" placeholder="Diện tích căn hộ" value="" data-val-number="The field AreaUsable must be a number." data-val="true" data-msg-required="Vui lòng nhập Diện tích căn hộ">
                                                    <span class="input-group-addon">m<sup>2</sup></span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="AreaUsable">*</span>
                                                <label class="text-error collapse" for="AreaUsable"></label>
                                            </div>
                                        </div>
                                        <!-- Loại công trình xây dựng -->
                                        <!-- Chọn mức độ đầu tư xây dựng -->
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label" for="InteriorId">Chọn mức độ đầu tư xây dựng</label>
                                            <div class="col-sm-6">
                                                <select name="InteriorId" class="form-control" id="InteriorId" data-val-number="The field InteriorId must be a number." data-val="true">
                                                    <option value="">-- Chọn mức độ đầu tư xây dựng --</option>
                                                    <option value="36">Xây thô</option>
                                                    <option value="37">Xây dựng đơn giản</option>
                                                    <option value="38">Xây vừa đủ tiện nghi</option>
                                                    <option value="39">Xây sang trọng cao cấp</option>
                                                    <option value="40">Xây cực kỳ cao cấp</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="InteriorId">*</span>
                                            </div>
                                        </div>
                                        <!-- Chất lượng nhà còn lại -->
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label" for="RemainingValue">
                                                Chất lượng nhà còn lại
                                                <i title="" class="help fa fa-question" data-original-title="" data-toggle="popover" data-placement="top" data-popover-content="#ttxd-3" data-trigger="click"></i>
                                            </label>
                                            <div class="hidden" id="ttxd-3">
                                                <div class="popover-heading">Hướng dẫn đánh giá chất lượng còn lại của bđs</div>
                                                <div class="popover-body">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td rowspan="2"><strong>Loại kết cấu</strong></td>
                                                                <td colspan="3"><strong>Tỷ lệ còn lại</strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong class="text-blue">&gt; 80%</strong></td>
                                                                <td><strong class="text-blue">&gt; 65%</strong></td>
                                                                <td><strong class="text-blue">&gt; 45%</strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Kết cấu bằng bê-tông cốt thép </strong></td>
                                                                <td>Lớp trát bong tróc, bê tong bằn đầu bị nứt</td>
                                                                <td>Bê-tông có nhiều vết nứt, cốt thép có chỗ bị cong vênh</td>
                                                                <td>Kết cấu bắt đầu cong vênh</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Kết cấu bằng gạch </strong></td>
                                                                <td>Lớp trát bắt đầu bong tróc, có vết nứt nhỏ</td>
                                                                <td>Lớp trát bong tróc nhiều, nhiều chỗ có vết nứt rộng</td>
                                                                <td>Nhiều chỗ gạch bắt đầu mục, kết cấu bị thấm nước</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Kết cấu bằng gỗ hoặc sắt </strong> </td>
                                                                <td>Bắt đầu bị mối mọt hoặc bị rỉ</td>
                                                                <td>Bị mục hoặc rỉ ăn sâu nhiều chỗ</td>
                                                                <td>Kết cấu bị cong vênh nhiều</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="RemainingValue" class="form-control" id="RemainingValue" type="number" min="0" placeholder="Chất lượng nhà còn lại" value="" data-val-number="The field RemainingValue must be a number." data-val="true">
                                                    <span class="input-group-addon">%</span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="RemainingValue">*</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-sm-push-6 col-md-6 col-md-push-0">
                                        <div class="section-tp-house">
                                            <!-- Có tầng hầm -->
                                            <div class="checkbox customize">
                                                <label for="HaveBasement">
                                                    <input name="HaveBasement" id="HaveBasement" type="checkbox" value="true" data-val="true" data-val-required="The HaveBasement field is required."><input name="HaveBasement" type="hidden" value="false">
                                                    <label for="HaveBasement"></label>
                                                    Có tầng hầm
                                                </label>
                                            </div>
                                            <!-- Có lửng -->
                                            <div class="checkbox customize">
                                                <label for="HaveMezzanine">
                                                    <input name="HaveMezzanine" id="HaveMezzanine" type="checkbox" value="true" data-val="true" data-val-required="The HaveMezzanine field is required."><input name="HaveMezzanine" type="hidden" value="false">
                                                    <label for="HaveMezzanine"></label>
                                                    Có lửng
                                                </label>
                                            </div>
                                            <!-- Có sân thượng -->
                                            <div class="checkbox customize">
                                                <label for="HaveTerrace">
                                                    <input name="HaveTerrace" id="HaveTerrace" type="checkbox" value="true" data-val="true" data-val-required="The HaveTerrace field is required."><input name="HaveTerrace" type="hidden" value="false">
                                                    <label for="HaveTerrace"></label>
                                                    Có sân thượng
                                                </label>
                                            </div>
                                            <!-- Có gara ô tô -->
                                            <div class="checkbox customize">
                                                <label for="HaveGarage">
                                                    <input name="HaveGarage" id="HaveGarage" type="checkbox" value="true" data-val="true" data-val-required="The HaveGarage field is required."><input name="HaveGarage" type="hidden" value="false">
                                                    <label for="HaveGarage"></label>
                                                    Có gara ô tô
                                                </label>
                                            </div>
                                            <!-- Có thang máy -->
                                            <div class="checkbox customize">
                                                <label for="HaveElevator">
                                                    <input name="HaveElevator" id="HaveElevator" type="checkbox" value="true" data-val="true" data-val-required="The HaveElevator field is required."><input name="HaveElevator" type="hidden" value="false">
                                                    <label for="HaveElevator"></label>
                                                    Có thang máy
                                                </label>
                                            </div>
                                            <!-- Có hồ bơi -->
                                            <div class="checkbox customize">
                                                <label for="HaveSwimmingPool">
                                                    <input name="HaveSwimmingPool" id="HaveSwimmingPool" type="checkbox" value="true" data-val="true" data-val-required="The HaveSwimmingPool field is required."><input name="HaveSwimmingPool" type="hidden" value="false">
                                                    <label for="HaveSwimmingPool"></label>
                                                    Có hồ bơi
                                                </label>
                                            </div>
                                        </div>
                                        <div class="section-tp-apartment">

                                            <div class="checkbox customize">
                                                <label for="ApartmentInteriorAdvantages[0].IsChecked">
                                                    <input name="ApartmentInteriorAdvantages[0].Advantage.Id" type="hidden" value="614483">
                                                    <input name="ApartmentInteriorAdvantages[0].IsChecked" id="ApartmentInteriorAdvantages[0].IsChecked" type="checkbox" value="true">
                                                    <label for="ApartmentInteriorAdvantages[0].IsChecked"></label>
                                                    Sàn gỗ
                                                </label>
                                            </div>
                                            <div class="checkbox customize">
                                                <label for="ApartmentInteriorAdvantages[1].IsChecked">
                                                    <input name="ApartmentInteriorAdvantages[1].Advantage.Id" type="hidden" value="614484">
                                                    <input name="ApartmentInteriorAdvantages[1].IsChecked" id="ApartmentInteriorAdvantages[1].IsChecked" type="checkbox" value="true">
                                                    <label for="ApartmentInteriorAdvantages[1].IsChecked"></label>
                                                    Thiết bị vệ sinh
                                                </label>
                                            </div>
                                            <div class="checkbox customize">
                                                <label for="ApartmentInteriorAdvantages[2].IsChecked">
                                                    <input name="ApartmentInteriorAdvantages[2].Advantage.Id" type="hidden" value="614485">
                                                    <input name="ApartmentInteriorAdvantages[2].IsChecked" id="ApartmentInteriorAdvantages[2].IsChecked" type="checkbox" value="true">
                                                    <label for="ApartmentInteriorAdvantages[2].IsChecked"></label>
                                                    Thiết bị nhà bếp
                                                </label>
                                            </div>
                                            <div class="checkbox customize">
                                                <label for="ApartmentInteriorAdvantages[3].IsChecked">
                                                    <input name="ApartmentInteriorAdvantages[3].Advantage.Id" type="hidden" value="614486">
                                                    <input name="ApartmentInteriorAdvantages[3].IsChecked" id="ApartmentInteriorAdvantages[3].IsChecked" type="checkbox" value="true">
                                                    <label for="ApartmentInteriorAdvantages[3].IsChecked"></label>
                                                    Giường tủ, bàn ghế
                                                </label>
                                            </div>
                                            <div class="checkbox customize">
                                                <label for="ApartmentInteriorAdvantages[4].IsChecked">
                                                    <input name="ApartmentInteriorAdvantages[4].Advantage.Id" type="hidden" value="614487">
                                                    <input name="ApartmentInteriorAdvantages[4].IsChecked" id="ApartmentInteriorAdvantages[4].IsChecked" type="checkbox" value="true">
                                                    <label for="ApartmentInteriorAdvantages[4].IsChecked"></label>
                                                    Máy lạnh
                                                </label>
                                            </div>
                                            <div class="checkbox customize">
                                                <label for="ApartmentInteriorAdvantages[5].IsChecked">
                                                    <input name="ApartmentInteriorAdvantages[5].Advantage.Id" type="hidden" value="1420685">
                                                    <input name="ApartmentInteriorAdvantages[5].IsChecked" id="ApartmentInteriorAdvantages[5].IsChecked" type="checkbox" value="true">
                                                    <label for="ApartmentInteriorAdvantages[5].IsChecked"></label>
                                                    Căn góc
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Đặc điểm tốt / xấu của BĐS -->
                            <li class="content-item-estimate section-tp-house">
                                <div class="mb10">
                                    <script src="//e.dinhgianhadat.vn/Data/data_script/dg_script_load_1009_0.js"></script>
                                </div>
                                <h2 class="section-title">
                                    <span>Đặc điểm tốt / xấu của BĐS</span>
                                </h2>
                                <div class="row">
                                    <!-- Đặc điểm tốt -->
                                    <div class="col-sm-6">
                                        <div class="title-group">
                                            <h3>Đặc điểm tốt</h3>
                                        </div>

                                        <div class="checkbox customize">
                                            <label for="Advantages[0].IsChecked">
                                                <input name="Advantages[0].Advantage.Id" type="hidden" value="85728">
                                                <input name="Advantages[0].IsChecked" id="Advantages[0].IsChecked" type="checkbox" value="true">
                                                <label for="Advantages[0].IsChecked"></label>
                                                Có 2 mặt đường chính
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="Advantages[1].IsChecked">
                                                <input name="Advantages[1].Advantage.Id" type="hidden" value="85729">
                                                <input name="Advantages[1].IsChecked" id="Advantages[1].IsChecked" type="checkbox" value="true">
                                                <label for="Advantages[1].IsChecked"></label>
                                                Căn góc, có hẻm bên hông
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="Advantages[2].IsChecked">
                                                <input name="Advantages[2].Advantage.Id" type="hidden" value="85730">
                                                <input name="Advantages[2].IsChecked" id="Advantages[2].IsChecked" type="checkbox" value="true">
                                                <label for="Advantages[2].IsChecked"></label>
                                                Có hẻm sau nhà
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="Advantages[3].IsChecked">
                                                <input name="Advantages[3].Advantage.Id" type="hidden" value="85732">
                                                <input name="Advantages[3].IsChecked" id="Advantages[3].IsChecked" type="checkbox" value="true">
                                                <label for="Advantages[3].IsChecked"></label>
                                                Gần chợ, siêu thị (&lt;500m)
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="Advantages[4].IsChecked">
                                                <input name="Advantages[4].Advantage.Id" type="hidden" value="85733">
                                                <input name="Advantages[4].IsChecked" id="Advantages[4].IsChecked" type="checkbox" value="true">
                                                <label for="Advantages[4].IsChecked"></label>
                                                Gần công viên, trung tâm giải trí (&lt;500m)
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="Advantages[5].IsChecked">
                                                <input name="Advantages[5].Advantage.Id" type="hidden" value="85734">
                                                <input name="Advantages[5].IsChecked" id="Advantages[5].IsChecked" type="checkbox" value="true">
                                                <label for="Advantages[5].IsChecked"></label>
                                                Khu dân cư cao cấp có cổng bảo vệ
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="Advantages[6].IsChecked">
                                                <input name="Advantages[6].Advantage.Id" type="hidden" value="85735">
                                                <input name="Advantages[6].IsChecked" id="Advantages[6].IsChecked" type="checkbox" value="true">
                                                <label for="Advantages[6].IsChecked"></label>
                                                Vị trí đẹp nhất trong đoạn đường
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="Advantages[7].IsChecked">
                                                <input name="Advantages[7].Advantage.Id" type="hidden" value="85736">
                                                <input name="Advantages[7].IsChecked" id="Advantages[7].IsChecked" type="checkbox" value="true">
                                                <label for="Advantages[7].IsChecked"></label>
                                                Tiện làm quán cafe, nhà hàng, khách sạn
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="Advantages[8].IsChecked">
                                                <input name="Advantages[8].Advantage.Id" type="hidden" value="85794">
                                                <input name="Advantages[8].IsChecked" id="Advantages[8].IsChecked" type="checkbox" value="true">
                                                <label for="Advantages[8].IsChecked"></label>
                                                Hẻm thông ra đường khác đẹp hơn.
                                            </label>
                                        </div>
                                        <div class="form-group"></div>
                                        <div class="form-group">
                                            <label class="col-sm-12" for="OtherAdvantagesDesc">Đặc điểm tốt khác làm tăng giá trị của BĐS:</label>
                                            <div class="col-sm-12">
                                                <input name="OtherAdvantagesDesc" class="form-control" id="OtherAdvantagesDesc" type="text" placeholder="Nêu Đặc điểm tốt khác làm tăng thêm giá trị của BĐS" value="" data-val="true" data-val-length-max="255" data-val-length="The field OtherAdvantagesDesc must be a string with a maximum length of 255.">
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="OtherAdvantagesDesc">*</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label" for="OtherAdvantages">Nhập số phần trăm tăng thêm:</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="OtherAdvantages" class="form-control" id="OtherAdvantages" type="number" min="0" placeholder="Nhập số phần trăm tăng thêm" value="" data-val-number="The field OtherAdvantages must be a number." data-val="true">
                                                    <span class="input-group-addon">%</span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="OtherAdvantages">*</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Đặc điểm xấu -->
                                    <div class="col-sm-6">
                                        <div class="title-group">
                                            <h3>Đặc điểm xấu</h3>
                                        </div>

                                        <div class="checkbox customize">
                                            <label for="DisAdvantages[0].IsChecked">
                                                <input name="DisAdvantages[0].Advantage.Id" type="hidden" value="85737">
                                                <input name="DisAdvantages[0].IsChecked" id="DisAdvantages[0].IsChecked" type="checkbox" value="true">
                                                <label for="DisAdvantages[0].IsChecked"></label>
                                                Đường, hẻm đâm thẳng vào nhà
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="DisAdvantages[1].IsChecked">
                                                <input name="DisAdvantages[1].Advantage.Id" type="hidden" value="85738">
                                                <input name="DisAdvantages[1].IsChecked" id="DisAdvantages[1].IsChecked" type="checkbox" value="true">
                                                <label for="DisAdvantages[1].IsChecked"></label>
                                                Đối diện hoặc gần sát chùa, nhà thờ
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="DisAdvantages[2].IsChecked">
                                                <input name="DisAdvantages[2].Advantage.Id" type="hidden" value="85739">
                                                <input name="DisAdvantages[2].IsChecked" id="DisAdvantages[2].IsChecked" type="checkbox" value="true">
                                                <label for="DisAdvantages[2].IsChecked"></label>
                                                Đối diện hoặc gần sát nhà tang lễ, nhà xác
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="DisAdvantages[3].IsChecked">
                                                <input name="DisAdvantages[3].Advantage.Id" type="hidden" value="85740">
                                                <input name="DisAdvantages[3].IsChecked" id="DisAdvantages[3].IsChecked" type="checkbox" value="true">
                                                <label for="DisAdvantages[3].IsChecked"></label>
                                                Dưới chân cầu hoặc dưới đường dây điện cao thế
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="DisAdvantages[4].IsChecked">
                                                <input name="DisAdvantages[4].Advantage.Id" type="hidden" value="85741">
                                                <input name="DisAdvantages[4].IsChecked" id="DisAdvantages[4].IsChecked" type="checkbox" value="true">
                                                <label for="DisAdvantages[4].IsChecked"></label>
                                                Có cống trước nhà
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="DisAdvantages[5].IsChecked">
                                                <input name="DisAdvantages[5].Advantage.Id" type="hidden" value="85742">
                                                <input name="DisAdvantages[5].IsChecked" id="DisAdvantages[5].IsChecked" type="checkbox" value="true">
                                                <label for="DisAdvantages[5].IsChecked"></label>
                                                Có trụ điện trước nhà
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="DisAdvantages[6].IsChecked">
                                                <input name="DisAdvantages[6].Advantage.Id" type="hidden" value="85743">
                                                <input name="DisAdvantages[6].IsChecked" id="DisAdvantages[6].IsChecked" type="checkbox" value="true">
                                                <label for="DisAdvantages[6].IsChecked"></label>
                                                Có cây lớn trước nhà
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="DisAdvantages[7].IsChecked">
                                                <input name="DisAdvantages[7].Advantage.Id" type="hidden" value="85744">
                                                <input name="DisAdvantages[7].IsChecked" id="DisAdvantages[7].IsChecked" type="checkbox" value="true">
                                                <label for="DisAdvantages[7].IsChecked"></label>
                                                Không cho xây hoặc không thể xây mới
                                            </label>
                                        </div>
                                        <div class="checkbox customize">
                                            <label for="DisAdvantages[8].IsChecked">
                                                <input name="DisAdvantages[8].Advantage.Id" type="hidden" value="85745">
                                                <input name="DisAdvantages[8].IsChecked" id="DisAdvantages[8].IsChecked" type="checkbox" value="true">
                                                <label for="DisAdvantages[8].IsChecked"></label>
                                                Bị quy hoạch treo
                                            </label>
                                        </div>
                                        <div class="form-group">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12" for="OtherDisAdvantagesDesc">Đặc điểm xấu khác làm giảm giá trị BĐS:</label>
                                            <div class="col-sm-12">
                                                <input name="OtherDisAdvantagesDesc" class="form-control" id="OtherDisAdvantagesDesc" type="text" placeholder="Nêu Đặc điểm xấu khác làm giảm đi giá trị của BĐS" value="" data-val="true" data-val-length-max="255" data-val-length="The field OtherDisAdvantagesDesc must be a string with a maximum length of 255.">
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="OtherDisAdvantagesDesc">*</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label" for="OtherDisAdvantages">Nhập số phần trăm giảm đi:</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input name="OtherDisAdvantages" class="form-control" id="OtherDisAdvantages" type="number" min="0" placeholder="Nhập số phần trăm giảm đi" value="" data-val-number="The field OtherDisAdvantages must be a number." data-val="true">
                                                    <span class="input-group-addon">%</span>
                                                </div>
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="OtherDisAdvantages">*</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Thông tin liên hệ -->
                            <li class="content-item-estimate section-tp-house section-tp-apartment">
                                <h2 class="section-title">
                                    <span>Thông tin liên hệ</span>
                                </h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Nhập tên + điện thoại -->
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label required" for="ContactPhone">Nhập tên + điện thoại</label>
                                            <div class="col-sm-6">
                                                <input name="ContactPhone" class="form-control" id="ContactPhone" required="required" type="text" maxlength="250" placeholder="Nhập tên + điện thoại" value="" data-val="true" data-val-required="Vui lòng nhập Thông tin liên hệ." data-val-length-max="255" data-val-length="The field ContactPhone must be a string with a maximum length of 255." data-msg-required="Vui lòng nhập Tên + Điện thoại">
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="ContactPhone">*</span>
                                            </div>
                                        </div>
                                        <!-- Nhập Email liên hệ -->
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label" for="ContactEmail">Nhập Email liên hệ</label>
                                            <div class="col-sm-6">
                                                <input name="ContactEmail" class="form-control" id="ContactEmail" type="text" maxlength="250" placeholder="Nhập Email liên hệ" value="" data-val="true" data-val-length-max="255" data-val-length="The field ContactEmail must be a string with a maximum length of 255." data-msg-required="Vui lòng nhập Email liên hệ">
                                                <span class="field-validation-valid" data-valmsg-replace="false" data-valmsg-for="ContactEmail">*</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-warning">
                                        <ul>
                                            <li>
                                                <label>Lưu ý</label>
                                                <p>Bạn vui lòng nhập đủ Email và ĐT để chúng tôi giúp bạn định giá chính xác hơn. Trong trường hợp BĐS chưa định giá được tại thời điểm này, chúng tôi sẽ gửi kết quả cho bạn qua email.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ol>

                        <div class="content-item-estimate section-tp-house section-tp-apartment estimate-submit">
                            <div class="row">
                                <div class="col-md-4 col-md-push-4">
                                    <button class="btn btn-success btn-lg btn-block text-uppercase" id="btnEstimate" type="submit">ĐỊNH GIÁ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
       
        </div>
    </div>
</section>

