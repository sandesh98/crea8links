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
                        <form action="{{ route('notification.store') }}" method="POST" class="appointment-form" id="appointment">
                            @csrf
                            <h2 class="form-title">Afspraak maken</h2>

                            <div class="mb-4">
                                <input class="form-control rounded-0" style="height: 50px;" id="name" name="name" type="text" placeholder="Naam">
                            </div>

                            <div class="mb-4">
                                <input class="form-control rounded-0" style="height: 50px;" id="email" name="email" type="email" placeholder="Email">
                            </div>

                            <div class="mb-4">
                                <input class="form-control rounded-0" style="height: 50px;" id="phone" name="phone" type="tel" placeholder="Telefoonnummer">
                            </div>

                            <div class="mb-4">
                                <input class="form-control rounded-0" style="height: 50px;" id="company" name="company" type="text" placeholder="Bedrijfsnaam">
                            </div>

                            <div class="mb-4">
                                <textarea class="form-control rounded-0" id="message" name="message" placeholder="Bericht..." rows="4"></textarea>
                            </div>

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
                        sort: 'homepage'
                    },
                    success: function (data) {
                        $('#appointment')[0].reset();

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
                            $('.appointment-form input[name="' + key + '"]').addClass('is-invalid')
                                .after('<div class="invalid-feedback">' + value[0] + '</div>');

                            $('.appointment-form textarea[name="' + key + '"]').addClass('is-invalid')
                                .after('<div class="invalid-feedback">' + value[0] + '</div>');
                            // console.log(value);
                        })
                    }
                });
            });
        });
    </script>
@endpush