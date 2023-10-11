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
                                        <th>Transaction Id</th>
                                        <th>User Id</th>
                                        <th>User Nickname</th>
                                        <th>Product Id</th>
                                        <th>Payment Id</th>
                                        <th>Email</th>
                                        <th>Transaction Status</th>
                                        <th>Payment Evidence</th>
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
                                            <td><img src="{{ asset("storage/$transaction->payment_evidence") }}"
                                                    alt="">
                                            </td>
                                            <td>
                                                <form action="/admin/transactions/{{ $transaction->id }}?action=done"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit">Done</button>
                                                </form>
                                                <form action="/admin/transactions/{{ $transaction->id }}?action=cancel"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit">Cancel</button>
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
