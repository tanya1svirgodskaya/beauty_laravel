@include('header')
<div class="records-main ml-5 mt-5 mr-5  " >
<div class="d-flex flex-row ">
<h1 class="mr-auto ">Записи </h1>
<div class="button-new-record p-2">
  <a href="{{route ('newrecord')}}">
    <button class="btn btn-dark" >Добавить запись</button>
</a>
</div>
</div>



  <div class="records ">
    @if (isset($today_records)==true)
    <p>Записи отсутствуют</p>
@else
<table align="center">
<tr>
 <th>Имя и фамилия</th>
<th>Дата </th>
<th>Время</th>
<th>Процедура</th>
</tr>
</table>
</div>
</div>
    @endif



@yield('today-record')
