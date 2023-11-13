@extends('promos.layout')
@section('content')
    <div class="product_container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Promo CRUD (Create, Read, Update and Delete)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/admin/promos/create') }}" class="btn btn-success btn-sm" title="Add New Promo">
                            Add New Promo
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
                                        <th>Promo Id</th>
                                        <th>Promo Code</th>
                                        <th>Discount</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($promos as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->promo_code }}</td>
                                        <td>{{ $item->discount }}</td>
                                        <td>Rp {{ $item->startDate }}</td>
                                        <td>{{ $item->endDate }}</td>
  
                                        <td>
                                            <a href="{{ url('/admin/promos/' . $item->id) }}" title="View Promo"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/promos/' . $item->id . '/edit') }}" title="Edit Promo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/admin/promos' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Promo" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $promos->links('pagination::bootstrap-5') }}
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection