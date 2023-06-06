@extends('crud')
@section('content')

<div class="col-md-4 m-auto border mt -3">
    <h2 class="text-centre text-warning">Update View</h2>
    <form action="updatedata"method="get">
        <div class="mb-2">
            <label for=""> product Name</label>
            <input type="text" name="name" value="{{$pname}}"class="form-control" id="">
        </div>
        <div class="mb-2">
            <label for=""> product price</label>
            <input type="text" name="price" value="{{$pprice}}" class="form-control" id="">
            </div>
            <br>
            <input type="hidden" name="id" value="{{$pid}}">
            <button type="submit" class="btn btn-outline-warning rounded-pill">Update</button>
    </form>
</div>