<div class="appointment-modal modal fade" id="appointmentModalForm" tabindex="1" role="dialog"
     aria-labelledby="appointmentModalForm" aria-hidden="true">
    <div class="modal-dialog d-flex align-items-center" role="document">
        <div class="container">
            <div class=" row justify-content-center">
                <div class="col-lg-8 col-12">
                    <!-- Modal Content Begin -->
                    <div class="modal-content">
                        <!-- Modal Close Button Begin -->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="{{ asset('img/icons/close.svg') }}" alt="">
                        </button>
                        <!-- End Modal Close End -->

                        <!-- Appointment Form Begin -->
                        <form action="{{ route('notification.store') }}" method="POST" class="appointment-form">
                            @csrf
                            <h2 class="form-title">Afspraak maken</h2>

                            <input class="theme-input-style position-relative" style="z-index: 99999;" id="name" name="name" type="text" placeholder="Naam">

                            <input class="theme-input-style position-relative" style="z-index: 99999;" id="email" name="email" type="email" placeholder="Email">

                            <input class="theme-input-style position-relative" style="z-index: 99999;" id="phone" name="phone" type="tel" placeholder="Telefoonnummer">

                            <select class="theme-input-style position-relative  style="z-index99999" clearfix" name="purpose" id="purpose">
                                <option value="" selected="" disabled="">Kies een optie</option>
                                @foreach(\App\Notification::getEnumValues() as $purpose)
                                    <option value="{{ $purpose }}">{{ ucfirst($purpose) }}</option>
                                @endforeach

                            </select>

                            <textarea class="theme-input-style position-relative" style="z-index: 99999;" id="message" name="message" placeholder="Bericht..."></textarea>

                            <button class="btn" id="submit" type="submit"><span>Verzenden</span></button>
                        </form>
                        <!-- End Appointment Form End -->
                    </div>
                    <!-- Modal Content End -->
                </div>
            </div>
        </div>
    </div>
</div>

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
                const purpose = $('#purpose').val();
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
                        purpose: purpose,
                        message: message
                    },
                    success: function (data) {
                        console.log(data);
                    },
                    error: function (data) {
                        const errors = data.responseJSON.errors;
                        // console.log(errors);
                        $.each(errors, function (key, value) {
                            // debugger;
                            $('.appointment-form input[name="' + key + '"]').addClass('is-invalid')
                                .after('<div class="invalid-feedback">' + value[0] + '</div>');
                            $('.appointment-form select[name="' + key + '"]').addClass('is-invalid')
                                .after('<div class="invalid-feedback">' + value[0] + '</div>');
                            $('.appointment-form textarea[name="' + key + '"]').addClass('is-invalid')
                                .after('<div class="invalid-feedback" style="padding-top: 200px;">' + value[0] + '</div>');
                            console.log(value);
                        })
                    }
                });
            });
        });
    </script>
@endpush