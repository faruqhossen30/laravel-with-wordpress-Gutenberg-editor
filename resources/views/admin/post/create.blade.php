@extends('admin.layouts.app')

@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box page-title-box-alt">
                        <h4 class="page-title">Create Product</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">HeshelGhor</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                                <li class="breadcrumb-item active">Create Product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard form-wizard-header">
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="" id="general-info">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="product-name" class="form-label">Product Name
                                                                <span class="text-danger">*</span></label>
                                                            <input type="text" name="title" id="product-name"
                                                                class="form-control @error('title') is-invalid @enderror"
                                                                placeholder="e.g : Apple iMac">
                                                            <div class="text-danger">
                                                                @error('title')
                                                                    <span>{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="product-name" class="form-label">Category <span
                                                                    class="text-danger">*</span></label>
                                                            <select name="category_id"
                                                                class="form-control @error('category_id') is-invalid @enderror"
                                                                id="product-category">
                                                                <option value="">Select</option>
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="text-danger">
                                                                @error('category_id')
                                                                    <span>{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <div class="mb-3">
                                            <label for="product-description" class="form-label">Product Description <span class="text-danger">*</span></label>
                                            <textarea name="description" id="summernote" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Please enter comment"></textarea>
                                            <div class="text-danger">
                                                @error('description')
                                                <span>{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div> --}}

                                                {{-- Short Description --}}
                                                <div class="mb-3">
                                                    <label for="product-summary" class="form-label">Product Summary<span
                                                            class="text-danger">*</span></label>
                                                    <textarea id="content" name="content" class="form-control">

                                                        </textarea>

                                                </div>
                                                {{-- <div class="mb-3">
                                                    <div class="uk-margin">
                                                        <textarea name="content" id="content" hidden>{{ old('content') }}</textarea>
                                                    </div>

                                                </div> --}}
                                                <ul class="pager wizard mb-0 list-inline text-end mt-3">
                                                    <li class="next list-inline-item">
                                                        <button type="submit" class="btn btn-primary">Upload Product <i
                                                                class="mdi mdi-arrow-right ms-1"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </form>
                        </div> {{-- card-body-end --}}

                    </div>
                </div>
            </div>
            <!-- end row -->


        </div> <!-- container -->

    </div> <!-- content -->
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">
@endpush

@push('scripts')
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            Laraberg.init('content', {
                height: '600px',
                laravelFilemanager: true,
                sidebar: true,
                laravelFilemanager: true
            })
        })
    </script>
@endpush
