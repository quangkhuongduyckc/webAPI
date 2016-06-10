{extends file="master/masteradmin.tpl"}
{block name="bodyadmin"}
    <div class="row">
        <div class="col-md-12 title_quanlybinhluan" style="background-color: #b9def0; padding: 10px">
            <div class="tite">
                <div class="col-md-5">
                    <span style="font-size: 150%">Quản lý bình luận</span>
                </div>
                <div class="col-md-7 text-right">
                    <span style="font-size: 150%">Tìm kiếm</span>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th class="stt text-center">
                        <span>STT</span>
                    </th>
                    <th class="tenphim text-center">
                        <span>Tên phim</span>
                    </th>
                    <th class="soluotbinhluan text-center">
                        <span>Lượt bình luận</span>
                    </th>
                    <th class="chucnang text-center">
                        <span>Chức năng</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                    {foreach from=$dtqlbinhluan key=k item=data}
                        <tr>
                            <td class="filterable-cell stt text-center">{$k+1}</td>
                            <td class="filterable-cell tenphim text-center">{$data.tenphim} {if $data.tap > 0}- tập: {$data.tap}{/if}</td>
                            <td class="filterable-cell soluotbinhluan text-center">{$data.tongbinhluan}</td>
                            <td class="filterable-cell chucnang text-center">
                                <a href="binhluan/?idvd={$data.videosid}">Xem chi tiết</a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
    <div class="clearfix"></div>
    <br>
{/block}