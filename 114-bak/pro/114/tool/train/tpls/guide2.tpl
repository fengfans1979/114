<div class="th box">以下为“<strong><{$miniprice->station1}>站到<{$miniprice->station3}>站</strong>”的查询结果</div>
<!-- part1 -->
<table  class="black">
    <caption>行程花费最优惠的方案: <{$miniprice->station1}> &raquo; <{$miniprice->station2}> &raquo;  <{$miniprice->station3}></caption>
    <tr>
      <td>出发车次</td>
      <td> <{$miniprice->station1}>发车</td>
      <td>到达<{$miniprice->station2}></td>
      <td>旅行时间</td>
      <td>旅行距离</td>
      <td>区间票价/硬座</td>
    </tr>
    <tr>
      <td><a href="?a=2&k=<{$miniprice->train_name1}>"><{$miniprice->train_name1|cat:'（'|cat:$miniprice->station_begin1|cat:'-'|cat:$miniprice->station_end1|cat:'）'}></a></td>
	  <td><{$miniprice->time_start1}></td>
      <td><{$miniprice->time_arrival1}></td>
      <td><{$miniprice->time_all1}></td>
      <td><{$miniprice->distance1}> 公里</td>
      <td><{$miniprice->c11}> 元</td>
    </tr>
    <tr>
      <td>中转车次</td>
      <td><{$miniprice->station2}>发车</td>
      <td>到达<{$miniprice->station3}></td>
      <td>旅行时间</td>
      <td>旅行距离</td>
      <td>区间票价/硬座</td>
    </tr>
    <tr>
      <td><a href="?a=2&k=<{$miniprice->train_name2}>"><{$miniprice->train_name2|cat:'（'|cat:$miniprice->station_begin2|cat:'-'|cat:$miniprice->station_end2|cat:'）'}></a></td>
	  <td><{$miniprice->time_start2}></td>
      <td><{$miniprice->time_arrival2}></td>
      <td><{$miniprice->time_all2}></td>
      <td><{$miniprice->distance2}> 公里</td>
      <td><{$miniprice->c12}> 元</td>
    </tr>
</table>
<!-- /part1 -->
<!-- part2 -->
<table>
    <caption>行程时间最短的方案: <{$minitime->station1}> &raquo; <{$minitime->station2}> &raquo;  <{$minitime->station3}></caption>
    <tr>
      <td>出发车次</td>
      <td> <{$minitime->station1}>发车</td>
      <td>到达<{$minitime->station2}></td>
      <td>旅行时间</td>
      <td>旅行距离</td>
      <td>区间票价/硬座</td>
    </tr>
    <tr>
      <td><a href="?a=2&k=<{$minitime->train_name1}>"><{$minitime->train_name1|cat:'（'|cat:$minitime->station_begin1|cat:'-'|cat:$minitime->station_end1|cat:'）'}></a></td>
	  <td><{$minitime->time_start1}></td>
      <td><{$minitime->time_arrival1}></td>
      <td><{$minitime->time_all1}></td>
      <td><{$minitime->distance1}> 公里</td>
      <td><{$minitime->c11}> 元</td>
    </tr>
    <tr>
      <td>中转车次</td>
      <td><{$minitime->station2}>发车</td>
      <td>到达<{$minitime->station3}></td>
      <td>旅行时间</td>
      <td>旅行距离</td>
      <td>区间票价/硬座</td>
    </tr>
    <tr>
      <td><a href="?a=2&k=<{$minitime->train_name2}>"><{$minitime->train_name2|cat:'（'|cat:$minitime->station_begin2|cat:'-'|cat:$minitime->station_end2|cat:'）'}></a></td>
	  <td><{$minitime->time_start2}></td>
      <td><{$minitime->time_arrival2}></td>
      <td><{$minitime->time_all2}></td>
      <td><{$minitime->distance2}> 公里</td>
      <td><{$minitime->c12}> 元</td>
    </tr>
</table>
<!-- /part2 -->
<!-- part3 -->
<table>
    <caption>行程距离最短的方案: <{$minidistance->station1}> &raquo; <{$minidistance->station2}> &raquo;  <{$minidistance->station3}></caption>
    <tr>
      <td>出发车次</td>
      <td> <{$minidistance->station1}>发车</td>
      <td>到达<{$minidistance->station2}></td>
      <td>旅行时间</td>
      <td>旅行距离</td>
      <td>区间票价/硬座</td>
    </tr>
    <tr>
      <td><a href="?a=2&k=<{$minidistance->train_name1}>"><{$minidistance->train_name1|cat:'（'|cat:$minidistance->station_begin1|cat:'-'|cat:$minidistance->station_end1|cat:'）'}></a></td>
	  <td><{$minidistance->time_start1}></td>
      <td><{$minidistance->time_arrival1}></td>
      <td><{$minidistance->time_all1}></td>
      <td><{$minidistance->distance1}> 公里</td>
      <td><{$minidistance->c11}> 元</td>
    </tr>
    <tr>
      <td>中转车次</td>
      <td><{$minidistance->station2}>发车</td>
      <td>到达<{$minidistance->station3}></td>
      <td>旅行时间</td>
      <td>旅行距离</td>
      <td>区间票价/硬座</td>
    </tr>
    <tr>
      <td><a href="?a=2&k=<{$minidistance->train_name2}>"><{$minidistance->train_name2|cat:'（'|cat:$minidistance->station_begin2|cat:'-'|cat:$minidistance->station_end2|cat:'）'}></a></td>
	  <td><{$minidistance->time_start2}></td>
      <td><{$minidistance->time_arrival2}></td>
      <td><{$minidistance->time_all2}></td>
      <td><{$minidistance->distance2}> 公里</td>
      <td><{$minidistance->c12}> 元</td>
    </tr>
</table>
<!-- /part3 -->
<!-- part4 -->
<table>
    <caption>其它最佳中转方案(包含不同车次中最短的中转线路) </caption>
    <tr>
      <td>方案 </td>
	  <td>起始站</td>
      <td>中转站</td>
      <td>目的站</td>
      <td>详细时刻表</td>
    </tr>
    <{foreach name=schemes from=$schemes item=row}>
    <tr <{if ($smarty.foreach.schemes.index) is even}>class="alt"<{/if}>>
      <td>方案 (<{$smarty.foreach.schemes.index+1}>) </td>
	  <td><a href="?a=1&k=<{$row->station1}>"><{$row->station1}></a></td>
      <td><a href="?a=1&k=<{$row->station2}>"><{$row->station2}></a></td>
      <td><a href="?a=1&k=<{$row->station3}>"><{$row->station3}></a></td>
      <td><a href="?a=4&sid1=<{$row->sid1}>&sid2=<{$row->sid2}>&sid3=<{$row->sid3}>">详细时刻表</a></td>
    </tr>
    <{/foreach}>
        
</table>
<!-- /part4 -->
