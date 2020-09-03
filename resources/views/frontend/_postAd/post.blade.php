<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('ContactFrom/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ContactFrom/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('ContactFrom/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('ContactFrom/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ContactFrom/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ContactFrom/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ContactFrom/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ContactFrom/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ContactFrom/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ContactFrom/vendor/noui/nouislider.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ContactFrom/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ContactFrom/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="post" enctype="multipart/form-data" action="{{route('post-product')}}">
            @csrf
            @method('POST')
            <span class="contact100-form-title">
					Post Advertisment
				</span>

            <div class="wrap-input100 validate-input bg1 col-12 rs1-wrap-input100"
                 data-validate="Enter Your Email (e@a.x)">
                <span class="label-input100">Product Name *</span>
                <input class="input100" type="text" name="title" placeholder="Enter Product Name ">
            </div>

            <div class="wrap-input100 bg1 col-12 rs1-wrap-input100">
                <span class="label-input100">Model</span>
                <input class="input100" type="text" name="model" placeholder="Enter Product Model">
            </div>
            <div class="wrap-input100 bg1 col-12 rs1-wrap-input100">
                <span class="label-input100">Image</span>
                <div class='col-sm-6'>
                    <div class="custom-file ">
                        <br>
                        <label for="imageFile" class="btn btn-success">press her to upload image </label>
                        <input  type="file" name="imageFile" class="custom-file-input" id="imageFile">
                    </div>
                </div>
            </div>

            <div class="wrap-input100 bg1 col-12 rs1-wrap-input100">
                <span class="label-input100">address</span>
                <input class="input100" type="text" name="address" placeholder="Enter Number Phone">
            </div>
            <div class="wrap-input100 validate-input col-12 bg1 rs1-wrap-input100"
                 data-validate="Enter Your Email (e@a.x)">
                <span class="label-input100">Price  *</span>
                <input class="input100" type="text" name="price" placeholder="Enter Your Email ">
            </div>

            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Select a subcategory *</span>
                <div>
                    <select class="js-select2" name="category_id">
                        <option value="0">Please chooses</option>
                        @if(\App\Models\Category::get() != null)
                            @foreach(\App\Models\Category::get() as $category)
                                <option value="{{$category->id ?? ""}}">{{ $category->title ?? ""}}</option>
                            @endforeach
                        @endif
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="w-full dis-none js-show-service">
                <div class="wrap-contact100-form-radio">
                    <span class="label-input100">What type of products do you sell?</span>

                    <div class="contact100-form-radio m-t-15">
                        <input class="input-radio100" id="radio1" type="radio" name="ewerwerwer" value="physical"
                               checked="checked">
                        <label class="label-radio100" for="radio1">
                            Phycical Products
                        </label>
                    </div>

                    <div class="contact100-form-radio">
                        <input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
                        <label class="label-radio100" for="radio2">
                            Digital Products
                        </label>
                    </div>

                    <div class="contact100-form-radio">
                        <input class="input-radio100" id="radio3" type="radio" name="type-product" value="service">
                        <label class="label-radio100" for="radio3">
                            Services Consulting
                        </label>
                    </div>
                </div>

                <div class="wrap-contact100-form-range">
                    <span class="label-input100">Budget *</span>

                    <div class="contact100-form-range-value">
                        $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
                        <input type="text" name="from-value">
                        <input type="text" name="to-value">
                    </div>

                    <div class="contact100-form-range-bar">
                        <div id="filter-bar"></div>
                    </div>
                </div>
            </div>

            <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate="Please Type Your Message">
                <span class="label-input100">Discrption</span>
                <textarea class="input100" name="description" placeholder="Your message here..."></textarea>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                </button>
            </div>
        </form>
    </div>
</div>


<!--===============================================================================================-->
<script src="{{asset('ContactFrom/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('ContactFrom/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('ContactFrom/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('ContactFrom/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="v{{asset('ContactFrom/endor/select2/select2.min.js')}}"></script>
<script>
    $(".js-select2").each(function () {
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });


        $(".js-select2").each(function () {
            $(this).on('select2:close', function (e) {
                if ($(this).val() == "Please chooses") {
                    $('.js-show-service').slideUp();
                } else {
                    $('.js-show-service').slideUp();
                    $('.js-show-service').slideDown();
                }
            });
        });
    })
</script>
<!--===============================================================================================-->
<script src="{{asset('ContactFrom/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('ContactFrom/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('ContactFrom/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('ContactFrom/vendor/noui/nouislider.min.js')}}"></script>
<script>
    var filterBar = document.getElementById('filter-bar');

    noUiSlider.create(filterBar, {
        start: [1500, 3900],
        connect: true,
        range: {
            'min': 1500,
            'max': 7500
        }
    });

    var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
    ];

    filterBar.noUiSlider.on('update', function (values, handle) {
        skipValues[handle].innerHTML = Math.round(values[handle]);
        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
    });
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
