<div class="th box">以下为“<strong><{$station[0]->station_query}></strong>” 站查询结果</div>
<table>
<caption><strong>车站查询结果</strong></caption>
    <tr class="top">
        <th width="100" scope="col">车次                </th>
        <th width="100" scope="col">车型    </th>
        <th width="80" scope="col">始发站</th>
        <th width="80" scope="col"> 始发时间      </th>
        <th width="80" scope="col">查询站      </th>
        <th width="80" scope="col">到站时间        </th>
        <th width="80" scope="col">开车时间</th>
        <th width="80" scope="col"> 终点站</th>
        <th width="80" scope="col"> 火车票价</th>
    </tr>
    <{foreach name=station from=$station item=row}>
    <tr <{if ($smarty.foreach.station.index) is even}>class="alt"<{/if}>>
        <td scope="row"><a href="?a=2&k=<{$row->train_name}>"><{$row->train_name}></a></td>
        <td><{$row->train_type}></td>
        <td><a href="?a=1&k=<{$row->station_begin|escape:'url'}>"><{$row->station_begin}></a></td>
        <td><{$row->time_begin}></td>
        <td><{$row->station_query}></td>
        <td><{$row->time_arrival}></td>
        <td><{$row->time_start}></td>
        <td><a href="?a=1&k=<{$row->station_end|escape:'url'}>"><{$row->station_end}></a></td>
        <td><a target="_blank" href="?a=5&k=<{$row->train_name}>">火车票价</a></td>
    </tr>
    <{/foreach}>
</table>

<div class="pages">
<a></a>
共有 <strong class="red"><{$recordCount}></strong> 趟列车经过<{$row->station_query}>火车站,当前第 <strong class="red"><{$page}></strong> 页  
<{section name=page loop=$pageCount}>
    <{assign var=p value=`$smarty.section.page.index+1`}>
    <a href="?a=1&k=<{$k|escape:'url'}>&p=<{$p}>"><{if $page eq $p}><u><b>[<{$p}>]</b></u><{else}>[<{$p}>]<{/if}></a>
<{/section}>
</div>
