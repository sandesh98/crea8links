<section class="pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!-- Contact Info Begin -->
                <div class="contact-info">
                    <h3>Contact Informatie</h3>
                    <p>Continue new you declared differed
                        learning bringing honoured.</p>

                    <div class="row">
                        <!-- Single Contact Info -->
                        <div class="col-sm-6 col-lg-12 single-contact-info media align-items-center">
                            <div class="image">
                                <img src="img/icons/location.svg" class="svg" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Office Location</h4>
                                <p>173 Collins Street West victoria,
                                    Melbourne, Australia</p>
                            </div>
                        </div>
                        <!-- End Single Contact Info -->

                        <!-- Single Contact Info -->
                        <div class="col-sm-6 col-lg-12 single-contact-info media align-items-center">
                            <div class="image">
                                <img src="img/icons/phone.svg" class="svg" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Business Phone</h4>
                                <p><a href="#">+0096665431</a> <a href="#">+0096667331</a></p>
                            </div>
                        </div>
                        <!-- End Single Contact Info -->

                        <!-- Single Contact Info -->
                        <div class="col-sm-6 col-lg-12 single-contact-info media align-items-center">
                            <div class="image">
                                <img src="img/icons/email.svg" class="svg" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Business Email</h4>
                                <p><a href="#">bizidea@info.com</a>
                                    <a href="#">bizidea@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <!-- End Single Contact Info -->

                        <!-- Single Contact Info -->
                        <div class="col-sm-6 col-lg-12 single-contact-info media align-items-center">
                            <div class="image">
                                <img src="img/icons/email.svg" class="svg" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Office Hours</h4>
                                <p>Monday - Friday <br>
                                    8:30 AM - 6:00 PM
                                </p>
                            </div>
                        </div>
                        <!-- End Single Contact Info -->

                    </div>
                </div>
                <!-- Contact Info End -->
            </div>

            <div class="col-lg-8">
                <!-- Contact Form Begin -->
                <div class="contact-form-wrapper">
                    <h3>Stuur ons een berichtje</h3>
                    <p>Our believe has request not how comfort evident. Up delight cousins we feeling
                        minutes. Genius has looked end piqued spring. Down has rose feel find man.</p>

                    <form method="POST" action="{{ route('notification.store') }}" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input type="text" id="name" name="name" class="form-control rounded-0" style="height: 50px;" placeholder="Naam">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input type="email" id="email" name="email" class="form-control rounded-0" style="height: 50px;" placeholder="Email adres">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input type="text" id="company" name="company" class="form-control rounded-0" style="height: 50px;" placeholder="Bedrijf">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input type="tel" id="phone" name="phone" class="form-control rounded-0" style="height: 50px;" placeholder="Telefoonnummer">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-4">
                                    <textarea name="message" id="message" class="form-control rounded-0" rows="4" placeholder="Bericht..."></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" id="submit" class="btn"><span>Versturen</span></button>
                            </div>
                        </div>
                        <div class="form-response"></div>
                    </form>
                </div>
                <!-- Contact Form End -->
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#submit').click(function (e) {

                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                const name = $('#name').val();
                const email = $('#email').val();
                const phone = $('#phone').val();
                const company = $('#company').val();
                const message = $('#message').val();

                $.ajax({
                    type: "POST",
                    url: "{{ route('notification.store') }}",
                    dataType: "json",
                    data: {
                        _token: "{{ csrf_token() }}",
                        name: name,
                        email: email,
                        phone: phone,
                        company: company,
                        message: message,
                        sort: 'contact'
                    },
                    success: function (data) {
                        $('.contact-form')[0].reset();

                        $('#submit').after('<h3 class="text-center pt-3">' + data + '</h3>')
                            .attr('disabled', true);
                    },
                    error: function (data) {
                        const errors = data.responseJSON.errors;
                        // console.log(errors);
                        $.each(errors, function (key, value) {
                            // debugger;
                            if ($('#' + key).hasClass('is-invalid')) {
                                return false;
                            }
                            $('.contact-form input[name="' + key + '"]').addClass('is-invalid')
                                .after('<div class="invalid-feedback">' + value[0] + '</div>');

                            $('.contact-form textarea[name="' + key + '"]').addClass('is-invalid')
                                .after('<div class="invalid-feedback">' + value[0] + '</div>');
                            // console.log(value);

                             $("input, textarea").focus(function(){
                                $(this).next('div').remove();
                                $(this).removeClass('is-invalid');
                            });
                        })
                    }
                });

            });
        });
    </script>
@endpush