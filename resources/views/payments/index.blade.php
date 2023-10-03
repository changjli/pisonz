@extends('payments.layout')
@section('content')
    <div class="payment_container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Payment CRUD (Create, Read, Update and Delete)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/payment/create') }}" class="btn btn-success btn-sm" title="Add New Payment">
                            Add New Payment
                        </a>
                        <br/>
                        <br/>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Payment Id</th>
                                        <th>Payment Method</th>
                                        <th>Account Number</th>
                                        <th>Account Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($payments as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->method }}</td>
                                        <td>{{ $item->account_number }}</td>
                                        <td>{{ $item->account_name }}</td>
  
                                        <td>
                                            <a href="{{ url('/payment/' . $item->id) }}" title="View Payment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/payment/' . $item->id . '/edit') }}" title="Edit Payment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/payment' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $payments->links('pagination::bootstrap-5') }}
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection