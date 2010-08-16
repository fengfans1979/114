<{if $a eq '5'}>
<div class="th box">以下为“<strong><{$price->train_name}></strong>”车次的火车票票价</div>
<{/if}>
<{if $a eq '6'}>
<div class="th box">以下为“<strong><{$price->station_begin_query}>站到<{$price->station_end_query}>站</strong>”的火车票票价</div>
<{/if}>
<table> 
<caption><strong>火车票票价</strong></caption>
<{if $price->train_type eq '动车组'}>
    <tr class="top">
        <th width="150" scope="col">票价类型                </th>
        <th width="200" scope="col">动车组一等座</th>
        <th width="200" scope="col">动车组二等座</th>
    </tr>
    <tr>
        <th scope="row">全价：</th>
        <td><{$price->c1}></td>
        <td><{$price->c5}></td>
    </tr>
<{else}>
    <tr class="top">
        <th scope="col">票价类型                </th>
        <th scope="col">硬座    </th>
        <th scope="col">软座</th>
        <th scope="col"> 硬卧（上）      </th>
        <th scope="col">硬卧（中）      </th>
        <th scope="col">硬卧（下）        </th>
        <th scope="col">软卧（上）</th>
        <th scope="col"> 软卧（下）</th>
    </tr>
    <tr>
        <th scope="row">全价：</th>
        <td><{$price->c1}></td>
        <td><{$price->c5}></td>
        <td><{$price->c3}></td>
        <td><{$price->c4}></td>
        <td><{$price->c2}></td>
        <td><{$price->c6}></td>
        <td><{$price->c7}></td>
    </tr>
    <tr>
        <th scope="row">学生火车票价：</th>
        <td><{$price->xc1}></td>
        <td><{$price->xc5}></td>
        <td><{$price->xc3}></td>
        <td><{$price->xc4}></td>
        <td><{$price->xc2}></td>
        <td><{$price->xc6}></td>
        <td><{$price->xc7}></td>
    </tr>
    <tr>
        <th scope="row">儿童火车票价：</th>
        <td><{$price->ec1}></td>
        <td><{$price->ec5}></td>
        <td><{$price->ec3}></td>
        <td><{$price->ec4}></td>
        <td><{$price->ec2}></td>
        <td><{$price->ec6}></td>
        <td><{$price->ec7}></td>
    </tr>
    <tr>
        <th scope="row">残疾军人火车票价：</th>
        <td><{$price->jc1}></td>
        <td><{$price->jc5}></td>
        <td><{$price->jc3}></td>
        <td><{$price->jc4}></td>
        <td><{$price->jc2}></td>
        <td><{$price->jc6}></td>
        <td><{$price->jc7}></td>
    </tr>
<{/if}>
</table>
