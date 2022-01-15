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
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard form-wizard-header">
                            <div class="tab-content twitter-bs-wizard-tab-content">
                                <div class="" id="general-info">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="product-name" class="form-label">Product Name <span class="text-danger">*</span></label>
                                                    <input required type="text" name="title" id="product-name" class="form-control @error('title') is-invalid @enderror" placeholder="e.g : Apple iMac">
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
                                                    <label for="product-name" class="form-label">Category <span class="text-danger">*</span></label>
                                                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="product-category">
                                                        <option value="">Select</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
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
                                    <label for="product-summary" class="form-label">Product Summary<span class="text-danger">*</span></label>
                                    <textarea name="content"
                                        class="form-control @error('content') is-invalid @enderror"
                                        id="product-summary" rows="5"
                                        placeholder="Promotion short description ">{{ old('content') }}</textarea>
                                    <div class="text-danger">
                                        @error('content')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                            <ul class="pager wizard mb-0 list-inline text-end mt-3">
                                                <li class="next list-inline-item">
                                                    <button type="submit" class="btn btn-primary">Upload Product <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                </li>
                                            </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>
                    </div>  {{--  card-body-end --}}

                </div>
            </div>
        </div>
        <!-- end row -->


    </div> <!-- container -->

</div> <!-- content -->
@endsection

        @push('css')
        <link href="{{ asset('backend')}}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend')}}/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        @endpush
@push('summernote')
<script>
    $('#summernote').summernote({
      placeholder: 'Hello stand alone ui',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>
@endpush
@push('scripts')

<!-- third party js -->
<script src="{{ asset('backend')}}/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<!-- Plugins js -->
{{-- <script src="{{ asset('backend')}}/assets/libs/quill/quill.min.js"></script> --}}

<!-- Select2 js-->
<script src="{{ asset('backend')}}/assets/libs/select2/js/select2.min.js"></script>
<!-- Dropzone file uploads-->
<script src="{{ asset('backend')}}/assets/libs/dropzone/min/dropzone.min.js"></script>

<!-- Init js-->
<script src="{{ asset('backend')}}/assets/js/pages/form-fileuploads.init.js"></script>

<!-- Init js -->
<script src="{{ asset('backend')}}/assets/js/pages/add-product.init.js"></script> {{-- Edit this line for js error --}}
<script src="{{ asset('js/product.js') }}"></script>
<script>
    $(function(){
    var category_id = $('select[name="category_id"]');
    var subcategory_id = $('select[name="subcategory_id"]');

    category_id.change(function(){
        var id = category_id.val();
        if(id){
            subcategory_id.empty();
            subcategory_id.append(`<option value="">Please Select</option>`);
            $.get(`{{ url('/subcategory?category_id=') }}${id}`, function(data, status){
                if(data){

                    data.forEach(function(row){
                        subcategory_id.append(`<option value="${row.id}"> ${row.name } </option>`);
                    });
                }
            });
        }

    });




    // For Price
    var saleprice = $('input[name="sale_price"]');
    var price = $('input[name="price"]');
    var categoryCommission = 0;
    var catCom = $('#catCom');



    // $(document).on('change select', 'select[name="subcategory_id"]', function(){
    //     var subCatID = subcategory_id.val();
    //     if(subcategory_id){
    //         $.get(`{{url('commission/${subCatID}')}}`, function(data, status){
    //         categoryCommission = data.commission;
    //         // console.log(data.commission);
    //     });
    //     };

    // });

    $(document).ready(function(){
            $(document).on('change click keyup select','input[name="sale_price"], select[name="subcategory_id"]',function(){


                var subCatID = subcategory_id.val();
                if(subcategory_id){
                    $.get(`{{url('commission/${subCatID}')}}`, function(data, status){
                    categoryCommission = data.commission;
                    if(data){
                        catCom.text(`${data.commission}%`);
                    }


                    // console.log(data.commission);
                });
                };

                // console.log(categoryCommission);
                calculatorFun();

                console.log(total);


            });
        });

        function calculatorFun(){
                var lastSellPrice = parseInt(saleprice.val());
                var total = lastSellPrice  + ( lastSellPrice * categoryCommission / 100 );
                price.val(total);
        };





})
</script>

@endpush
