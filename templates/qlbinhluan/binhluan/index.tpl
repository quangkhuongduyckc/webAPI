{extends file="master/masterAdmin.tpl"}
{block name="bodyadmin"}
    <div class="row">
        <div class="col-md-12 title_quanlybinhluan" style="background-color: #b9def0; padding: 10px">
            <div class="tite">
                <div class="col-md-12">
                    {foreach from=$dtbinhluan key=k item=data}
                        {if $k == 0} <span style="font-size: 150%">Bình luận của phim: {$data.tenphim} {if $data.tap > -1} - tập {$data.tap}{/if}</span>{/if}
                    {/foreach}
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
                    <th class="soluotbinhluan text-center">
                        <span>Tên thành viên</span>
                    </th>
                    <th class="tenphim binhluan text-center">
                        <span>Bình luận</span>
                    </th>
                    <th class="chucnangbinhluan chucnang text-center">
                        <span>Chức năng</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                {foreach from=$dtbinhluan key=k item=data}
                    <tr>
                        <td class="filterable-cell stt text-center">{$k+1}</td>
                        <td class="filterable-cell soluotbinhluan text-center">
                            <span style="font-size: 120%">{$data.username}</span>
                        </td>
                        <td class="filterable-cell binhluan tenphim text-justify">
                            <span style="font-size: 120%; text-align: justify">
                                {$data.loibinhluan}
                            </span>
                        </td>
                        <td class="filterable-cell chucnangbinhluan chucnang text-center">
                            {*<a id="xoa" href="/qlbinhluan/binhluan?idvd={$data.videosid}&xoa={$data.idbinhluan}"  class="btn btn-danger" type="submit" value="{$data.idbinhluan}">Xoá</a>*}
                            {*<button onclick="clickxoa({$data.idbinhluan})"> test</button>*}
                            <a href="#" class="xoabinhluan">Xoá</a>
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
{block name="script"}
    <script>
        $(document).ready(function(){
           $(.xoabinhluan).click(function(e) {
                e.preventDefault();
                $.post("/qlbinluan/binhluan/",{xoa:1}, function(){

                });
            });
        });
    </script>
{/block}






