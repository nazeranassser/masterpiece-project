@include('admin.partials.header-admin')

<!--====== End - Main Header ======-->

<br>
<!--====== App Content ======-->
<div class="app-content">

    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="dash">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">

                            <!--====== Dashboard Features ======-->
                            @include('admin.partials.siadebar')
                            <!--====== End - Dashboard Features ======-->
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                <div class="dash__pad-2">
                                    <h1 class="dash__h1 u-s-m-b-14" style="padding-bottom: 10px;">Add New Coupon</h1>

                                    <form class="dash-address-manipulation" method="POST" action="{{ route('admin.coupons.store') }}">
                                        @csrf

                                        <div class="gl-inline">
                                            <div class="u-s-m-b-30">
                                                <label class="gl-label" for="coupon-code">Code *</label>
                                                <input class="input-text input-text--primary-style" name="code" type="text" id="coupon-code" placeholder="Enter code" required>
                                            </div>
                                            <div class="u-s-m-b-30">
                                                <label class="gl-label" for="coupon-discount">Discount *</label>
                                                <input class="input-text input-text--primary-style" name="discount" type="number" id="coupon-discount" placeholder="Enter discount" required>
                                            </div>
                                        </div>

                                        <div class="gl-inline">
                                            <div class="u-s-m-b-30">
                                                <label class="gl-label" for="coupon-expiry">Expiry Date *</label>
                                                <input class="input-text input-text--primary-style" name="expiry_date" type="date" id="coupon-expiry" required>
                                            </div>
                                            <div class="u-s-m-b-30">
                                                <label class="gl-label" for="coupon-active">Active *</label>
                                                <select class="input-text input-text--primary-style" name="is_active" id="coupon-active" required>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <button class="btn btn--e-brand-b-2" >Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->
</div>
<!--====== End - App Content ======-->

@include('admin.partials.footer')
