@extends('layouts.header')
@section('tittle')
    @if($product != null)
    {{$product->name}}
    @endif
@endsection
@section('content')
    <div class="loading-overlay" id="loadingSpinner" style="display: none;">
        <div class="loading-spinner"></div>
    </div>
    <!-- banner  -->

    <div class="inner-banner">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-12">
                    <div class="inner-banner-head">
                        <h1>{{$product->name}}</h1>
                    </div>

                    <div class="inner-banner-item">
                        <div class="left">
                            <a href="{{route('home')}}">Home</a>
                        </div>
                        <div class="icon">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 7L14 12L10 17" stroke="#E5E6EB" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                        </div>
                        <div class="left">
                            <span> Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner  -->
    <!-- Single Product Section Start -->
    @isset($product)
        <section class="food-details-section s-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="food-details-head">
                            <h2>{{$product->name}} </h2>
                        </div>

                        <div class="food-details-slick">
                            <div class="">
                                <div class="slider-for-img">
                                    <img  src="{{url($product->image)}}" alt="img">
                                </div>

                            </div>


                        </div>



                        <div class="food-details-item-box">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                            aria-selected="true">Menu Details </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">



                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="food-details-text">
                                              {!! $product->description !!}
                                            </div>

{{--                                            <div class="food-details-text-two">--}}
{{--                                                <h5>Ingredients:</h5>--}}

{{--                                                <ul>--}}
{{--                                                    <li>Fresh chicken breast or thigh meat, cubed</li>--}}
{{--                                                    <li>Assorted sweet bell peppers (red, yellow, and green), sliced--}}
{{--                                                        into rings</li>--}}
{{--                                                    <li>Marinade (your choice of herbs, spices, and seasonings)</li>--}}
{{--                                                    <li>Olive oil</li>--}}
{{--                                                    <li>Salt and pepper </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}

                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>





                    </div>



                    <div class="col-lg-4">
                        <div class="together-box">
                            <div class="together-box-text">
                                <h5>Frequently Bought together</h5>
                            </div>

                            @foreach($side as $sid)
                            <div class="together-box-item">
                                <div class="form-check">
                                   <img width="50" src="{{url($sid['image'])}}"/>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{$sid['name']}} ₦{{number_format(intval($sid['price'] *1))}}
                                    </label>
                                </div>

                                <div class="form-check-btn">
                                    <div class="form-check-btn">

                                        <div class="grid">
{{--                                            <button class="btn btn-minus "><i class="fa-solid fa-minus"></i></button>--}}
{{--                                            <div class="column product-qty">0</div>--}}
                                            <button class="btn btn-plus "><i class="fa-solid fa-shopping-cart"></i></button>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            @endforeach
                            <div class="together-box-inner-btn-btm">
                                <a href="#" class="main-btn-six" tabindex="-1">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path
                                                d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                stroke-width="1.5"></path>
                                            <path
                                                d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                stroke-width="1.5"></path>
                                            <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                            <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    Add to Cart
                                </a>
                            </div>
                        </div>






                    </div>
                </div>
            </div>
        </section>

    @endisset
    <!-- Single Product Section End -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function () {
                // Function to update flavor options based on selected layers
                function updateFlavourOptions() {
                    const selectedLayers = parseInt($('#layersBy').val());

                    // Disable all options first
                    $('#flavourBy option').prop('disabled', true);

                    // Enable options based on selected layers
                    if (selectedLayers === 1) {
                        $('#flavourBy option[value="vanilla"]').prop('disabled', false);
                        $('#flavourBy option[value="chocolate"]').prop('disabled', false);
                    } else if (selectedLayers === 2) {
                        $('#flavourBy option[value="vanilla_chocolate"]').prop('disabled', false);
                        $('#flavourBy option[value="vetuer"]').prop('disabled', false);
                    } else if (selectedLayers === 3) {
                        $('#flavourBy option[value="red_vetuer_chocolate"]').prop('disabled', false);
                        $('#flavourBy option[value="vanilla_red_vetuer"]').prop('disabled', false);
                    }
                }

                // Function to handle visibility of topper text input based on selected topper option
                function handleTopperVisibility() {
                    const selectedTopper = $('#topperBy').val();
                    if (selectedTopper === 'select') {
                        $('#topperTextSection').show();
                    } else {
                        $('#topperTextSection').hide();
                        $('#topperText').val(''); // Clear the text input when not visible
                    }
                }

                // Function to handle visibility of Eko Cakes card message input based on selected option
                function handleEkoCakesCard() {
                    const selectedOption = $('#ekoCakesCard').val();
                    if (selectedOption === 'yes') {
                        $('#ekoCakesMessageSection').show();
                    } else {
                        $('#ekoCakesMessageSection').hide();
                        $('#ekoCakesMessage').val(''); // Clear the text input when not visible
                    }
                }

                // Event listeners to call the functions when the user makes selections
                $('#layersBy').on('change', function () {
                    updateFlavourOptions();
                });
                $('#topperBy').on('change', function () {
                    handleTopperVisibility();
                });
                $('#ekoCakesCard').on('change', function () {
                    handleEkoCakesCard();
                });

                // Initial call to update flavor options, handle topper visibility, and handle Eko Cakes card visibility
                updateFlavourOptions();
                handleTopperVisibility();
                handleEkoCakesCard();
            });
        </script>


        <script>
            $(document).ready(function() {


                // Send the AJAX request
                $('#postcart').submit(function(e) {
                    e.preventDefault(); // Prevent the form from submitting traditionally

                    // Get the form data
                    var formData = $(this).serialize();

                    $('#loadingSpinner').show();

                            $.ajax({
                                url: "{{ route('addcart1') }}",
                                type: 'POST',
                                data: formData,
                                success: function(response) {
                                    // Handle the success response here
                                    $('#loadingSpinner').hide();

                                    console.log(response);
                                    // Update the page or perform any other actions based on the response

                                    if (response.status == 'success') {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Success',
                                            text: response.message
                                        }).then(() => {
                                            location.reload(); // Reload the page
                                        });
                                    } else {
                                        Swal.fire({
                                            icon: 'info',
                                            title: 'Pending',
                                            text: response.message
                                        });
                                        // Handle any other response status
                                    }

                                },
                                error: function(xhr) {
                                    $('#loadingSpinner').hide();
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'fail',
                                        text: xhr.responseText
                                    });
                                    // Handle any errors
                                    console.log(xhr.responseText);

                                }
                            });
                });
            });

        </script>


@endsection
