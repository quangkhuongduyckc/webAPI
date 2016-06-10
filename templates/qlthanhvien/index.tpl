{extends file="master/masteradmin.tpl"}
{block name="bodyadmin"}
    <div class="row">
        <div class="col-md-12 title_quanlybinhluan" style="background-color: #F1F6F7; padding: 10px">
            <div class="tite">
                <div class="col-md-5">
                    <span style="font-size: 150%">Quản lý thành viên</span>
                </div>
                <div class="col-md-7 text-right">
                    {*<span style="font-size: 150%">Tìm kiếm</span>*}
                    <button style="font-size: 100%" class="btn btn-info"> Thêm thanh viên</button>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th class="stt text-center">
                        <span>STT</span>
                    </th>
                    <th class="tenfacebook text-center">
                        <span>Faccebook</span>
                    </th>
                    <th class="tendangnhap text-center">
                        <span>Tên đăng nhập</span>
                    </th>

                </tr>
                </thead>
                <tbody>
                {foreach from=$dtqlthanhvien key=k item=data}
                    <tr class="{if $k%2 == 0}info{/if} qlthanhvien">
                        <td  class="filterable-cell stt text-center ">{$k+1}</td>
                        <td  class="filterable-cell tenfacebook text-center">{if isset($data.tenfacebook)}{$data.tenfacebook}{/if}</td>
                        <td  class="filterable-cell tendangnhap text-center">{if isset($data.username)}{$data.username}{/if}</td>
                        <td  class="filterable-cell chucnangbinhluan text-center">
                            <button class="btn btn-default">Chỉnh sửa</button>
                        </td>
                        <td class="filterable-cell chucnangbinhluan text-center">
                            <form action="" method="post">
                                <button type="submit" class="btn btn-danger" name="xoa" value="{$data.id}">Xoá</button>
                            </form>
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