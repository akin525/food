@extends('admin.layouts.sidebar')
@section('tittle', 'All-Product')
@section('content')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="row mb-9 align-items-center justify-content-between">
        <div class="col-md-6 mb-8 mb-md-0">
            <h2 class="fs-4 mb-0">Product List</h2>
            <p>All RTG</p>
        </div>
        <div class="col-md-6 d-flex flex-wrap justify-content-md-end">
            <a href="{{route('admin/addrtg')}}" class="btn btn-outline-primary btn-hover-bg-primary me-4">
               Create new <span class="badge badge-soft-danger">RTG</span>
            </a>
        </div>
    </div>

    <div class="card mb-4 rounded-4 p-7">
        <div class="card-header bg-transparent px-0 pt-0 pb-7">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-4 col-12 mr-auto mb-md-0 mb-6">
                    <select class="form-select">
                        <option selected data-select2-id="3">All Categories</option>
                        @foreach($category as $cat)
                        <option>{{$cat['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-8">
                    <div class="row justify-content-end flex-nowrap d-flex">
                        <div class="col-lg-4 col-md-6 col-6">
                            <input type="date" class="form-control bg-input border-0">
                        </div>
                        <div class="col-lg-4 col-md-6 col-6">
                            <select class="form-select">
                                <option>Status</option>
                                <option>All</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body px-0 pt-7 pb-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle table-nowrap mb-0"><tbody>
                    @forelse($product as $products)
                    <tr>
                        <td class="text-center">
                            <div class="form-check">
                                <input class="form-check-input rounded-0 ms-0" type="checkbox" id="transactionCheck-0">
                                <label class="form-check-label" for="transactionCheck-0"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center flex-nowrap">
                                <a href="#" title="Flowers cotton dress">
                                    <img src="#" data-src="{{url($products['image'])}}" alt="Flowers cotton dress" class="lazy-image" width="60" height="80">
                                </a>
                                <a href="#" title="Flowers cotton dress" class="ms-6">
                                    <p class="fw-semibold text-body-emphasis mb-0">{{$products['name']}}</p>
                                </a>
                            </div>
                        </td>
                        <td>₦{{number_format(intval($products['price'] *1),2)}}</td>
                        <td>
                            <span class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-success border-0 text-capitalize fs-12">Active</span>
                        </td>
                        <td>{{$products['created-at']}}</td>
                        <td class="text-center">
                            <div class="d-flex flex-nowrap justify-content-center">
                                <a href="{{route('admin/editproduct1', $products['id'])}}" class="btn btn-primary py-4 px-5 btn-xs fs-13px me-4"><i class="far fa-pen me-2"></i> Edit</a>
                                <a href="#" class="btn btn-outline-primary btn-hover-bg-danger btn-hover-border-danger btn-hover-text-light py-4 px-5 fs-13px btn-xs me-4"><i class="far fa-trash me-2"></i> Delete</a>
                            </div>
                        </td>
                    @empty
                    <p><b>No Product added yet</b></p>
                    </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example" class="mt-6 mb-4">
        <ul class="pagination justify-content-start">
           {{$product->links()}}
        </ul>
    </nav>
@endsection
