@include('header')
<div class="records-main ml-5 mt-5" >
  <h1>Записи на сегодня</h1>
  <div class="today-record ">
    @if (isset($today_records)==false)
    <p>Записей на сегодня нет</p>
@else
<table align="center">
<tr>
 <th>Имя и фамилия</th>
<th>Дата </th>
<th>Время</th>
<th>Процедура</th>
</tr>
@foreach ($today_records as $el)
	<tr>
 <td>$el->name $el->lastname </td>
 <td>$el->date</td>
 <td>$el->time</td>
 <td>$el->procedure</td>
 <td> <a class="btn btn-outline-primary" href="/records/$el->id">Просмотреть</a></td>
</tr>
@endforeach



</table>
    @endif
    <div class="an-date">
       <input type="checkbox" id="hd-1" class="reference"/>
<label for="hd-1" >Показать другие ближайшие даты</label>
<div class="story">
  <table align="center">
  <tr>
   <th>Имя и фамилия</th>
  <th>Дата </th>
  <th>Время</th>
  <th>Процедура</th>
  </tr>
  </table>
</div>
<div>
  </div>
</div>

@yield('today-record')
