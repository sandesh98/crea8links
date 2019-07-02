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
                            <img src="img/icons/close.svg" alt="">
                        </button>
                        <!-- End Modal Close End -->

                        <!-- Appointment Form Begin -->
                        <form action="#" method="POST" class="appointment-form">
                            <h2 class="form-title">Request Appoinment</h2>
                            <input class="theme-input-style" type="text" placeholder="Full Name">
                            <input class="theme-input-style" type="email" placeholder="Email">
                            <input class="theme-input-style" type="tel" placeholder="Phone">

                            <select class="theme-input-style clearfix">
                                <option value="" disabled="" selected="">Select purpose</option>
                                <option value="01">Business</option>
                                <option value="01">Consultancy</option>
                            </select>

                            <textarea class="theme-input-style" placeholder="Message"></textarea>

                            <button class="btn" type="submit"><span>Send request</span></button>
                        </form>
                        <!-- End Appointment Form End -->
                    </div>
                    <!-- Modal Content End -->
                </div>
            </div>
        </div>
    </div>
</div>