{extends file="master/masterAdmin.tpl"}
{block name="bodyadmin"}
  <!-- /top navigation -->
  <div class="row tile_count">
    <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count text-center">
      <span class="count_top"><i class="fa fa-eye"></i> Tổng lượt xem</span>
      <div class="count">{$tongLuotXem.luotxem}</div>
      {*<span class="count_bottom"><i class="green">4% </i> From last Week</span>*}
    </div>

    <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count text-center">
      <span class="count_top"><i class="fa fa-pencil-square-o"></i> Tổng lượt bình luận</span>
      <div class="count green">{$tongBinhLuan.binhluan}</div>
      {*<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>*}
    </div>

    <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count text-center">
      <span class="count_top"><i class="fa fa-thumbs-o-up"></i> Tổng lượt thích</span>
      <div class="count">{$tongLuotThich.thich}</div>
      {*<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>*}
    </div>
  </div>

  <!-- page content -->

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="dashboard_graph">

        <div class="row x_title">
          <div class="col-md-12">
            <h3>Top 10 phim xem nhiều nhất<small></small></h3>
          </div>
        </div>


        {foreach from=$dttop10 key=k item=data}
          <div class="col-md-12 col-sm-4 col-xs-12">
            <div style="width: 100%;">
              <div id="canvas_dahs" class="demo-placeholder" style="width: 100%; ">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="col-md-3">
                    <img src="/content/images/{$data.hinh}" class="col-md-12">
                  </div>

                  <div class="col-md-9">
                    <div class="col-md-12 text-center">
                      <h3>{$data.tenphim}</h3>
                    </div>

                    <div class="col-md-12" style="margin-top: 20px">
                      <div class="col-md-8">
                        <i style="font-size: 150%;" class="fa fa-eye" aria-hidden="true"></i>
                        <span style="font-size: 150%;">Lượt xem:</span>
                        <span style="font-size: 150%;">{$data.tongluotxem}</span>
                      </div>
                      <div class="col-md-4 text-right">
                        <span style="font-size: 150%;">tỉ lệ: {(($data.tongluotxem * 100)/$tongLuotXem.luotxem)|round:2}%</span>
                      </div>
                      <div class="progress progress_sm" style="width: 100%; margin: auto 0">
                        <div class="progress-bar bg-green" role="progressbar" style="width: {(($data.tongluotxem * 100)/$tongLuotXem.luotxem)|round:2}%;" data-transitiongoal="80"></div>
                      </div>
                    </div>

                    <div class="col-md-12" style="margin-top: 20px">
                      <div class="col-md-8">
                        <i style="font-size: 150%;" class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        <span style="font-size: 150%;">Lượt thích:</span>
                        <span style="font-size: 150%;">{$data.tongluotthich}</span>
                      </div>
                      <div class="col-md-4 text-right">
                        <span style="font-size: 150%;">tỉ lệ: {(($data.tongluotthich * 100)/$tongLuotThich.thich)|round:2}%</span>
                      </div>
                      <div class="progress progress_sm" style="width: 100%; margin: auto 0">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: {(($data.tongluotthich * 100)/$tongLuotThich.thich)|round:2}%;" data-transitiongoal="80"></div>
                      </div>
                    </div>

                    <div class="col-md-12" style="margin-top: 20px">
                      <div class="col-md-8">
                        <i style="font-size: 150%;" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <span style="font-size: 150%;">Lượt bình luận:</span>
                        <span style="font-size: 150%;">{$data.tongbinhluan}</span>
                      </div>
                      <div class="col-md-4 text-right">
                        <span style="font-size: 150%;">tỉ lệ: {(($data.tongbinhluan * 100)/$tongBinhLuan.binhluan)|round:2}%</span>
                      </div>
                      <div class="progress progress_sm" style="width: 100%; margin: auto 0">
                        <div class="progress-bar bg-purple" role="progressbar" style="width: {(($data.tongbinhluan * 100)/$tongBinhLuan.binhluan)|round:2}%;" data-transitiongoal="80"></div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="x_title"></div>
        {/foreach}

      </div>
    </div>
  </div>
  <br>
{/block}
