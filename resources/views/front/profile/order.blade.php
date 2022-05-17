@extends('front.layouts.profile')
@section('content')
<div class="col-md-8 table">
        <h2 class="text-center pb-3">Your Orders </h2>

        <table class="table table-hover text-center fs-md">
            <thead>
            <tr>
                <th>Order No:</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Total cost</th>
                <th>Status</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td class="py-3">#{{$order->order->id}}</td>
                    <td class="py-3">${{$order->producut->price}}</td>
                    <td class="py-3">{{$order->amount}}</td>
                    <td class="py-3">${{$order->total_cost}}</td>
                    <td class="py-3"><span class="badge bg-info m-0">In Progress</span> </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-danger btn-sm" onclick="document.getElementById('contact-del-{{$order->order->id}}').submit()">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                            <form action="{{route('order-delete',[Auth::user('user')->name,$order->order->id])}}" id='contact-del-{{$order->order->id}}' method="post">
                                @csrf
                                @method('delete')
                            </form>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


