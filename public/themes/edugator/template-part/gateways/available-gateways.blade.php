@php($hasGateways = get_option('enable_stripe') || get_option('enable_paypal') || get_option('bank_gateway.enable_bank_transfer') || get_option('enable_offline_payment'))


@php(
    $total = $cart->total_amount * 100
)

@if($hasGateways)
    <div class="section-payment-methods-wrap">
        <h4>{{__t('payment_information')}}</h4>

        <p class="text-muted"> <i class="la la-lock"></i> {{__t('payment_secure_text')}}</p>

        <div class="checkout-section checkout-payment-methods-wrap bg-white p-4 mt-3">

            <ul class="nav bg-light nav-pills mb-3" role="tablist">

                {{-- @if(get_option('enable_stripe'))
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#payment-tab-card">
                            <i class="la la-credit-card"></i> Credit Card
                        </a>
                    </li>
                @endif --}}
                @if(get_option('enable_paypal'))
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#payment-tab-paypal">
                            <i class="la la-paypal"></i> Pay Now
                        </a>
                    </li>
                @endif

                {{-- @if(get_option('bank_gateway.enable_bank_transfer'))
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#payment-tab-bank">
                            <i class="la la-university"></i>  Bank Transfer
                        </a>
                    </li>
                @endif


                @if(get_option('enable_offline_payment'))
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#payment-tab-offline">
                            <i class="la la-wallet"></i>  Offline Payment
                        </a>
                    </li>
                @endif --}}

            </ul>



            <div class="tab-content">
                {{-- @if(get_option('enable_stripe'))
                    <div class="tab-pane fade show active" id="payment-tab-card">
                        <div class="stripe-credit-card-form-wrap ml-auto mr-auto py-5">
                            <form action="/charge" method="post" id="payment-form">
                                <div class="form-group">
                                    <label for="card-element"> Pay with your Credit or debit card via Stripe</label>
                                    <div id="card-element" class="form-control">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>
                                </div>

                                <!-- Used to display form errors. -->
                                <div id="card-errors" class="text-danger mb-3" role="alert"></div>

                                <button type="submit" class="btn btn-purple" id="stripe-payment-form-btn">
                                    <span class="enroll-course-btn-text mr-4 border-right pr-4">{{__t('enroll_in_course')}}</span>
                                    <span class="enroll-course-btn-price">{!! price_format($cart->total_amount) !!}</span>
                                </button>
                            </form>
                        </div>
                    </div> <!-- tab-pane.// -->
                @endif --}}
                
                @if(get_option('enable_paypal'))
                    <div class="tab-pane fade" id="payment-tab-paypal">

                        <div class="paypal-payment-form-wrap py-5 text-center">

                            {{-- <form action="{{route('paypal_redirect')}}" method="post">
                                @csrf
                                <p>
                                    <button type="submit" class="btn btn-purple btn-lg" id="paypal-payment-form-btn">
                                        <span class="enroll-course-btn-text mr-4 border-right pr-4">
                                            <i class="la la-paypal"></i> Pay with PayPal
                                        </span>
                                        <span class="enroll-course-btn-price">
                                            {!! price_format($cart->total_amount) !!}
                                        </span>
                                    </button>
                                </p>
                            </form> --}}


                            <button name="_token" id="rzp-button1" value="{!!csrf_token()!!}" class="btn btn-purple btn-lg" id="paypal-payment-form-btn">
                                <span class="enroll-course-btn-text mr-4 border-right pr-4">
                                    <i class="la la-wallet"></i> Pay Now
                                </span>
                                <span class="enroll-course-btn-price">
                                    {!! price_format($cart->total_amount) !!}
                                </span>
                            </button>
                            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                            <script>
                            var options = {
                                "key": "{{env("RAZORPAY_KEY")}}", // Enter the Key ID generated from the Dashboard
                                "amount": "{{$total}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                                "currency": "INR",
                                "name": "Onsite Academy",
                                "description": "Payment",
                                "image": "{{URL::asset("home_assets/assets/images/logo_large.png")}}",
                                "callback_url" : "/handle_razorpay_callback",
                                "prefill": {
                                    "email": "",
                                    "contact": ""
                                },
                                "notes": {
                                    "address": ""
                                },
                                "theme": {
                                    "color": "#3399cc"
                                }
                            };
                            var rzp1 = new Razorpay(options);
                            document.getElementById('rzp-button1').onclick = function(e){
                                rzp1.open();
                                e.preventDefault();
                            }
                            </script>
                        </div>

                    </div>
                @endif

                {{-- @if(get_option('bank_gateway.enable_bank_transfer'))
                    <div class="tab-pane fade" id="payment-tab-bank">
                        @include(theme('template-part.gateways.bank-transfer'))
                    </div> <!-- tab-pane.// -->
                @endif

                @if(get_option('enable_offline_payment'))

                    <div class="tab-pane fade" id="payment-tab-offline">
                        <div class="offline-payment-form-wrap pt-2 pb-5">

                            <form action="{{route('pay_offline')}}" method="post">
                                @csrf

                                <div class="form-group">

                                    <label>Write about your payment method </label>

                                    <textarea class="form-control" name="payment_note"></textarea>
                                    <p class="text-muted">
                                        <small>
                                            Write your payment method in details, elobrate as much as you can. We will verify payment and you will get course access after payment verification.
                                        </small>
                                    </p>

                                </div>


                                <p>
                                    <button type="submit" class="btn btn-purple btn-lg" id="offline-payment-form-btn">
                                        <span class="enroll-course-btn-text mr-4 border-right pr-4">
                                            <i class="la la-wallet"></i> Pay with Offline Payment
                                        </span>
                                        <span class="enroll-course-btn-price">
                                            {!! price_format($cart->total_amount) !!}
                                        </span>
                                    </button>
                                </p>
                            </form>

                        </div>

                    </div>
                @endif --}}


            </div> <!-- tab-content .// -->

        </div>
    </div>

@else
    <div class="alert alert-warning">
        <i class="la la-exclamation-circle"></i> There is no payment gateway available to complete purchase.
    </div>
@endif
