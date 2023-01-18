
@extends('template.temp')
@section('contenido')
<!-- CSS only -->


<div style="margin:50px">
<h3>LIST THE PRODUCTS</h3>
<table  class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">CATEGORY</th>
      <th scope="col">PRICE</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      @foreach((array) $productsArray as $item)
      <td>{{$item['nameProduct']}}</td>
      @endforeach

    </tr>

  </tbody>
</table>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

@stop

