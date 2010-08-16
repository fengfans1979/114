<div class="th box">以下为“<strong><{$station1}>站到<{$station3}>站</strong>”的查询结果</div>
<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" class="searcha">
  <tbody>
    <caption>中转方案: <{$station1}> &raquo; <{$station2}> &raquo;  <{$station3}></caption>
    <tr class="top">
        <th scope="col"><div>出发车次</div></th>
        <th width="100" scope="col"><div> <{$station1}>发车</div></th>
        <th width="100" scope="col"> <div>到达<{$station2}></div></th>
        <th width="100" scope="col"><div>旅行时间</div></th>
        <th width="100" scope="col"><div>旅行距离</div></th>
        <th width="110" scope="col"><div>区间票价/硬座</div></th>
        </tr>
    
    <{foreach name=first from=$first item=row}>
    <tr  <{if ($smarty.foreach.schemes.index) is even}>class="alt"<{/if}> >
        <th scope="row"><a href="?a=2&k=<{$row->train_name}>"><{$row->train_name|cat:'（'|cat:$row->station_begin|cat:'-'|cat:$row->station_end|cat:'）'}></a></th>
        <td><{$row->time_start}></td>
        <td><{$row->time_arrival}></td>
        <td><{$row->time_all}></td>
        <td><{$row->distance}> 公里</td>
        <td><{$row->c1}> 元</td>
        </tr>
    <{/foreach}>
    
    <tr class="top">
        <th scope="col"><div>中转车次</div></th>
        <th width="100" scope="col"><div> <{$station2}>发车</div></th>
        <th width="100" scope="col"> <div>到达<{$station3}></div></th>
        <th width="100" scope="col"><div>旅行时间</div></th>
        <th width="100" scope="col"><div>旅行距离</div></th>
        <th width="110" scope="col"><div>区间票价/硬座</div></th>
        </tr>
    <{foreach name=second from=$second item=row}>
    <tr  <{if ($smarty.foreach.schemes.index) is even}>class="alt"<{/if}> >
        <th scope="row"><a href="?a=2&k=<{$row->train_name}>"><{$row->train_name|cat:'（'|cat:$row->station_begin|cat:'-'|cat:$row->station_end|cat:'）'}></a></th>
        <td><{$row->time_start}></td>
        <td><{$row->time_arrival}></td>
        <td><{$row->time_all}></td>
        <td><{$row->distance}> 公里</td>
        <td><{$row->c1}> 元</td>
        </tr>
    <{/foreach}>
  </tbody>
</table>
