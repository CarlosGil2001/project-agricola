
@extends('template.temp')
@section('contenido')
<!-- CSS only -->


<div style="margin:50px">
<h3>LIST THE CUSTOMERS</h3>
<table  class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">LASTNAME</th>
      <th scope="col">CITY</th>
    </tr>
  </thead>
  <tbody>
    
  @for ($i = 0; $i <= sizeof($customersArray); $i++)
    <tr>
      
       <td>{{$customersArray["customerRespose"]["customer"][$i]["id"]}}</td>
       <td>{{$customersArray["customerRespose"]["customer"][$i]["nameCustomer"]}}</td>
       <td>{{$customersArray["customerRespose"]["customer"][$i]["lastNameCustomer"]}}</td>
       <td>{{$customersArray["customerRespose"]["customer"][$i]["cityCustomer"]}}</td>

    </tr>
    @endfor

  </tbody>
</table>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

@stop

