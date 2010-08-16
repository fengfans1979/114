<div class="th box">以下为“<strong><{$schemes[0]->station_begin_query}>站到<{$schemes[0]->station_end_query}>站</strong>”的查询结果</div>
<table class="black">
    <caption>站到站查询结果</caption>
    <tr class="searchabiao">
        <th width="180">车次</th>
        <th width="77">车型</th>
        <th width="88">始发站</th>
        <th width="88">开车时间</th>
        <th width="88">目的站</th>
        <th width="88">到达时间</th>
        <th width="88">里程</th>
        <th width="88">用时</th>
        <th width="88">火车票价</th>
    </tr>

    <{foreach name=schemes from=$schemes item=row}>
    <tr <{if ($smarty.foreach.schemes.index) is even}>class="alt"<{/if}>>
        <td><a href="?a=2&k=<{$row->train_name}>"><{$row->train_name|cat:'（'|cat:$row->station_begin|cat:'-'|cat:$row->station_end|cat:'）'}></a></td>
        <td><{$row->train_type}></td>
        <td><{$row->station_begin_query}></td>
        <td><{$row->time_begin}></td>
        <td><{$row->station_end_query}></td>
        <td><{$row->time_end}></td>
        <td><{$row->distance}> 公里</td>
        <td><{$row->time_all}></td>
        <td><a target="_blank" href="?a=6&k1=<{$row->station_begin_query}>&k2=<{$row->station_end_query}>&k=<{$row->train_name}>">火车票价</a></td>
    </tr>
    <{/foreach}>
	
</tbody></table>
