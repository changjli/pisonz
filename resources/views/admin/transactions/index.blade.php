@extends('categories.layout')
@section('content')
    <div class="category_container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Category CRUD (Create, Read, Update and Delete)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/category/create') }}" class="btn btn-success btn-sm" title="Add New Category">
                            Add New Category
                        </a>
                        <br />
                        <br />

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>User Id</th>
                                        <th>User Nickname</th>
                                        <th>Game</th>
                                        <th>Product</th>
                                        <th>Payment</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Evidence</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->id }}</td>
                                            <td>{{ $transaction->user_id }}</td>
                                            <td>{{ $transaction->user_nickname }}</td>
                                            <td>{{ $transaction->Product->Category->Game->name }}</td>
                                            <td>{{ $transaction->Product->name }}</td>
                                            <td>{{ $transaction->Payment->method }}</td>
                                            <td>{{ $transaction->email }}</td>
                                            <td>{{ $transaction->status }}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Payment
                                                                    evidence</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="{{ asset("storage/$transaction->payment_evidence") }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <form action="/admin/transactions/{{ $transaction->id }}?action=done"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit"><i class="fa-solid fa-check"></i></button>
                                                </form>
                                                <form action="/admin/transactions/{{ $transaction->id }}?action=cancel"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit"><i class="fa-solid fa-xmark"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection