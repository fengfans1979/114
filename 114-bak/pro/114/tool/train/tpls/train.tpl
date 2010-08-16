<div class="th box">以下为“<strong><{$traininfo->train_name}>车次(<{$traininfo->station_begin}>到<{$traininfo->station_end}>)</strong>” 站查询结果</div>
<table class="black">
<caption><{$traininfo->train_name}>车次时刻表</caption>
    <tr class="alt">
        <th rowspan="4" scope="col" class="onlyone">车次信息</th>
        <td width="88">车次</td>
        <td width="62" ><a href="?a=2&k=<{$traininfo->train_name}>"><{$traininfo->train_name}></a></td>
        <td width="77">车型</td>
        <td width="68"><{$traininfo->train_type}></td>
        <th rowspan="4" scope="col" class="onlyone">票价信息</th>
        <td width="65">硬座票价</td>
        <th width="74"><{$traininfo->c1}>元</td>
        <td width="71">软座票价</td>
        <td width="70"><{$traininfo->c5}>元</td>
        </tr>
    <tr>
        <td><span class="black">始发站</span></td>
        <td><{$traininfo->station_begin}></td>
        <td><span class="black">终点站</span></td>
        <td><{$traininfo->station_end}></td>
        <td><span class="black">硬卧票价（上）</span></td>
        <td><span class="black"><{$traininfo->c2}></span></td>
        <td><span class="black">软卧票价（下）</span></td>
        <td><span class="black"><{$traininfo->c4}></span></td>
        </tr>

    <tr class="alt">
        <td><span class="black">始发时</span></td>
        <td><span class="black"><{$traininfo->time_start}></span></td>
        <td><span class="black">终到时</span></td>
        <td><span class="black"><{$traininfo->time_arrival}></span></td>
        <td><span class="black">硬卧票价（中）</span></td>
        <td><span class="black"><{$traininfo->c3}></span></td>
        <td><span class="black">软卧票价（下）</span></td>
        <td><span class="black"><{$traininfo->c7}></span></td>
    </tr>
    <tr>
        <td><span class="black">全程时间</span></td>
        <td><span class="black"><{$traininfo->time_run}></span></td>
        <td><span class="black">总里程</span></td>
        <td><span class="black"><{$traininfo->distance}>公里</span></td>
        <td><span class="black">硬卧票价（下）</span></td>
        <td><span class="black"><{$traininfo->c4}></span></td>
        <td colspan='2'><span class="black"><a target="_blank" href="?a=5&k=<{$traininfo->train_name}>">详细票价</a></span></td>
    </tr>
</table>
<table class="black">
<caption>查询结果</caption>
    <tr class="top">
        <th scope="col"><div>车次</div></th>
        <th scope="col"><div>站次</div></th>
        <th scope="col"><div> 站名</div></th>
        <th scope="col"><div>到达时间</div></th>
        <th scope="col"><div>开车时间</div></th>
        <th scope="col"><div>停留</div></th>
        <th scope="col"><div>运行时间</div></th>
        <th scope="col"><div>里程</div></th>
        <th scope="col"><div>硬座/元</div></th>
        <th scope="col"><div>软座/元</div></th>
        </tr>

    <{foreach name=train from=$train item=row}>
    <tr <{if ($smarty.foreach.train.index) is even}>class="alt"<{/if}>>
        <th scope="row"><div><a href="?a=2&k=<{$row->train_name}>"><{$row->train_name}></a></div></th>
        <td><div><{$smarty.foreach.train.index+1}></div></td>
        <td><div><a href="?a=1&k=<{$row->station|escape:'url'}>"><{$row->station}></a></div></td>
        <td><div><{$row->time_arrival}></div></td>
        <td><div><{$row->time_start}></div></td>
        <td><div><{$row->time_stay}>分</div></td>
        <td><div><{$row->time_run}></div></td>
        <td><div><{$row->distance}></div></td>
        <td><div><{$row->c1}></div></td>
        <td><div><{$row->c5}></div></td>
        </tr>
    <{/foreach}>
</table>
