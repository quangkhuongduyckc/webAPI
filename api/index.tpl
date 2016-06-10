{extends file="master/master.tpl"}
{block name="body"}
    <div style="margin-top: 5px">
        {foreach from = $dtThongTinPhim key=k item = data}
            <div class="col-sm-12">
                <div class="col-sm-12">
                    <video id="my-video" class="video-js" controls preload="auto" width="1100%" height="500"
                           poster="/content/images/{$data.hinh}" data-setup="{}">
                        <source src="/content/mv/{$data.linkphim}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 container">
                    <!--Nav tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tap" data-toggle="tab">Tập</a></li>
                    </ul>
                    <!--tabs panes-->
                    <div class="tab-content well">
                        <!--class="fade" tạo hiệu hứng khi hiễn thị nội dung-->
                        <div class="tab-pane fade in active" id="tap">
                            <div>
                                {foreach from = $dttap key=k item = datatap}
                                    <div class="col-sm-1">
                                        <a href="" class="btn"> {$datatap.tap}</a>
                                    </div>
                                {/foreach}
                                <a class="btn btn-info col-sm-1" data-toggle="modal" data-target="#myModal">+</a>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-sm-12 container" >
                <div class="col-sm-3 text-center" style="margin-top: 20px">
                    <img style="width: 200px; height: 300px" src="/content/images/{$data.hinh}" alt="poster">
                </div>
                <div class="col-sm-5">
                    <div class="col-sm-12 text-center">
                        <h3>{$data.tenphim}</h3>
                    </div>
                    <div class="col-sm-12 subcontent">
                        <div class="col-sm-4 tieude">
                            <span>Status:</span>
                        </div>
                        <div class="col-sm-8 ">
                            <span>{$data.status}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 subcontent">
                        <div class="col-sm-4 tieude">
                            <span>Đạo diễn:</span>
                        </div>
                        <div class="col-sm-8">
                            <span>{$data.daodien}</span>
                    </div>
                    </div>
                    <div class="col-sm-12 subcontent">
                        <div class="col-sm-4 tieude">
                            <span>Diễn viên:</span>
                        </div>
                        <div class="col-sm-8">
                            <span>{$data.dienvien}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 subcontent">
                        <div class="col-sm-4 tieude">
                            <span>Nước sản xuất:</span>
                        </div>
                        <div class="col-sm-8">
                            <span>{$data.nuocsanxuat}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 subcontent">
                        <div class="col-sm-4 tieude">
                            <span>Năm phát hành:</span>
                        </div>
                        <div class="col-sm-8">
                            <span>{$data.namphathanh}</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px">
                    <div class="col-sm-12">
                        <a class="btn btn-danger col-sm-5" data-toggle="modal" data-target="#myModal">Cập nhật</a>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px">
                    <div class="col-sm-12">
                        <button class="btn btn-default col-sm-5">Xoá</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-12">
                    <h4>Nội dung phim</h4>
                </div>
                <div class="col-sm-12">
                    {$data.noidungphim}
                </div>
            </div>
        {/foreach}
            <div class="container">
                <h4>Bình luận</h4>
            </div>
                <div class="container binhluan" >

                    <table width="100%" id="binhluan" class="table table-striped table-hover">
                        <tr>
                            <td class="col-sm-10" height="15px">
                                <div>
                                    <h5>Quang Khuong Duy</h5>
                                </div>
                                <div>
                                    <span style="word-wrap:break-word;">kahskdjdkjashdkjahkjdhakjdhkajshdkjashdkjahsdkjahskjdkdkahskdjdkjashdkjahkjdhakjdhkajshdkjashdkjahsdkjahskjdkdkahskdjdkjashdkjahkjdhakjdhkajshdkjashdkjahsdkjahskjdkdkahskdjdkjashdkjahkjdhakjdhkajshdkjashdkjahsdkjahskjdkdkahskdjdkjashdkjahkjdhakjdhkajshdkjashdkjahsdkjahskjdkdkahskdjdkjashdkjahkjdhakjdhkajshdkjashdkjahsdkjahskjdkd</span>
                                </div>
                            </td>
                            <td class="col-sm-2" align="center" valign="middle" >
                                <a>Xoá bình luận</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="col-sm-10" height="15px">
                                <div>
                                    <h5>Quang Khuong Duy</h5>
                                </div>
                                <div>
                                    <span style="word-wrap:break-word;">kahskdjdkjashdkjahkjdhakjdhkajshdkjashdkjahsdkjahskjdkd</span>
                                </div>
                            </td>
                            <td class="col-sm-2" align="center" valign="middle" >
                                <a>Xoá bình luận</a>
                            </td>
                        </tr>


                        <tr>
                            <td class="col-sm-10" height="15px">
                                <div>
                                    <h5>Quang Khuong Duy</h5>
                                </div>
                                <div>
                                    <span style="word-wrap:break-word;">kahskdjdkjashdkjahkjdhakjdhkajshdkjashdkjahsdkjahskjdkd</span>
                                </div>
                            </td>
                            <td class="col-sm-2" align="center" valign="middle" >
                                <a>Xoá bình luận</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="col-sm-10" height="15px">
                                <div>
                                    <h5>Quang Khuong Duy</h5>
                                </div>
                                <div>
                                    <span style="word-wrap:break-word;">kahskdjdkjashdkjahkjdhakjdhkajshdkjashdkjahsdkjahskjdkd</span>
                                </div>
                            </td>
                            <td class="col-sm-2" align="center" valign="middle" >
                                <a>Xoá bình luận</a>
                            </td>
                        </tr>


                    </table>
                </div>
    </div>

        {*<div class="col-sm-10">*}
            {*<h4>Quang Khuong Duy</h4>*}
                                                {*<span style='word-wrap:break-word;'>*}

                                                {*</span>*}
        {*</div>*}
        {*<div class="col-sm-2">*}
            {*<a href="">Xoá</a>*}
        {*</div>*}


    <!-- modal -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Modal title
                    </h4>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    {foreach from = $dtThongTinPhim key=k item = data}
                        <form  method="post" enctype="multipart/form-data">
                            <div class="form-group col-sm-12">
                                <div class="col-sm-4" style="text-align: right;">
                                    <span style="vertical-align: sub;">MV Phim</span>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file" accept="video/mp4" name="fileVideos" required>
                                </div>
                            </div>
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="btn btn-primary" value="{$data.phimid}" name="phimid">
                                    Save changes
                                </button>
                            </div>

                        </form>
                    {/foreach}
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>





    {*<div class="modal fade" id="myModal" role="dialog">*}
        {*<div class="modal-dialog">*}
            {*<!-- Modal content-->*}
            {*<div class="modal-content">*}
                {*<div class="modal-header">*}
                    {*<button type="button" class="close" data-dismiss="modal">&times;</button>*}
                    {*<h3 class="modal-title">Review videos</h3>*}
                {*</div>*}
                {*<div class="modal-body" id="thongtinphim">*}
                    {*{foreach from = $dtThongTinPhim key=k item = data}*}

                        {*<div class=" input-group input-group-sm">*}
                            {*<span class="input-group-addon">@</span>*}
                            {*<input type="text" class="form-control col-sm-6" placeholder="Username">*}
                        {*</div>*}
                    {*{/foreach}*}
                {*</div>*}
                {*<div class="modal-footer">*}
                    {*<button type="button" class="btn btn-danger" data-dismiss="modal" onclick="playPause()"><span>Close</span></button>*}
                {*</div>*}
            {*</div>*}

        {*</div><div class="tenphim row">*}
            {*<input type="text" class="form-control" value="{$data.tenphim}">*}
        {*</div>*}
        {*<div class="col-sm-12 capnhatnoidung row">*}
            {*<div class="col-sm-4">*}
                {*<span>Status:</span>*}
            {*</div>*}
            {*<div class="col-sm-8">*}
                {*<select class="form-control" name="status">*}
                    {*{foreach from = $status key=k item = dataStatus}*}
                        {*<option value="{$dataStatus.statusid}" {if $dataStatus.status == $data.status } selected {/if}>{$dataStatus.status}</option>*}
                    {*{/foreach}*}
                {*</select>*}
            {*</div>*}
        {*</div>*}
        {*<div class="col-sm-12 row">*}
            {*<div class="col-sm-4">*}
                {*<span>Đạo diễn</span>*}
            {*</div>*}
            {*<div class="col-sm-8">*}
                {*<input type="text" class="form-control text-center" value="{$data.daodien}">*}
            {*</div>*}
        {*</div>*}
    </div>

{/block}



{*{foreach from = $dtThongTinPhim key=k item = data}*}
    {*<form role="form">*}
        {*<div class="form-group">*}
            {*<input type="email" class="form-control text-center col-sm-6" placeholder=" Tên phim" value="{$data.tenphim}"/>*}
        {*</div>*}
        {*<div class="input-group">*}
                                {*<span class="input-group-btn">*}
                                    {*<label class="btn btn-danger">Status</label>*}
                                {*</span>*}
            {*<select class="form-control" name="status">*}
                {*{foreach from = $status key=k item = dataStatus}*}
                    {*<option value="{$dataStatus.statusid}" {if $dataStatus.status == $data.status } selected {/if}>{$dataStatus.status}</option>*}
                {*{/foreach}*}
            {*</select>*}
            {*<input type="email" class="form-control" autocomplete="off" placeholder="Nhập từ khoá" required>*}
        {*</div>*}
        {*<div class="input-group">*}
                                {*<span class="input-group-btn">*}
                                    {*<label class="btn btn-danger">Đạo diễn</label>*}
                                {*</span>*}
            {*<input type="email" class="form-control" autocomplete="off" placeholder="Đạo diễn" value="{$data.daodien}" required>*}
        {*</div>*}
        {*<div class="input-group">*}
                                {*<span class="input-group-btn">*}
                                    {*<label class="btn btn-danger">Diễn viên</label>*}
                                {*</span>*}
            {*<input type="email" class="form-control" autocomplete="off" placeholder="Diễn viên" value="{$data.dienvien}" required>*}
        {*</div>*}
        {*<div class="input-group">*}
                                {*<span class="input-group-btn">*}
                                    {*<label class="btn btn-danger">Nước sản xuất</label>*}
                                {*</span>*}
            {*<input type="email" class="form-control" autocomplete="off" placeholder="Nước sản xuất" value="{$data.nuocsanxuat}" required>*}
        {*</div>*}
    {*</form>*}
{*{/foreach}*}