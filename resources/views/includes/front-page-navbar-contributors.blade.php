@extends('front-page')
@section('articles')
<br/>
<hr/>
<h3 style="text-align: center">Our Contributors</h3><hr/><br/>
<table class="table">
  <thead>
    <tr>
      <th style="text-align:center" scope="col">#</th>
      <th style="text-align:center" scope="col">Image</th>
      <th style="text-align:center" scope="col">Name</th>
      <th style="text-align:center" scope="col">Age</th>
      <th style="text-align:center" scope="col">Status</th>
      <th style="text-align:center" scope="col">Alma Mater</th>
      <th style="text-align:center" scope="col">Contact</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contributors as $conti)
    <tr>
      <th scope="row">{{$conti->authorId}}</th>
      <td style="text-align:center"><img height="72px" width="48px" src="{{asset($conti->authorImage)}}" /></td>
      <td style="text-align:center">{{$conti->authorName}}</td>
      <td style="text-align:center">{{$conti->authorAge}}</td>
      <td style="text-align:center">{{$conti->authorStatus}}</td>
      <td style="text-align:center">{{$conti->authorEdu}}</td>
      <td style="text-align:center">{{$conti->authorEmail}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection  