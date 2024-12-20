@include('admin.partials.header-admin')

<div class="app-content">
    <div class="u-s-p-b-60">
        <div class="section__content">
            <div class="dash">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            @include('admin.partials.siadebar')
                        </div>

                        <!-- Main Content Area for Coupons Table -->
                        <div class="col-lg-9 col-md-12">
                            <div class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius u-s-m-b-30">
                                <div class="dash__pad-2" style="display: flex; justify-content: space-between;">
                                    <div class="dash__address-header">
                                        <h1 class="dash__h1">Coupons</h1>
                                    </div>
                                    <a class="dash__custom-link btn--e-brand-b-2"  href="{{ route('admin.coupons.create') }}">
                                        <i class="fas fa-plus u-s-m-r-8"></i>
                                        <span>Add New Coupon</span>
                                    </a>
                                </div>

                                <div class="dash__table">
                                    <table class="dash__table">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Discount</th>
                                                <th>Is Active</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($coupons as $coupon)
                                                <tr>
                                                    <td>{{ $coupon->code }}</td>
                                                    <td>{{ $coupon->discount }}%</td>
                                                    <td>{{ $coupon->is_active ? 'Active' : 'Inactive' }}</td>
                                                    <td style="display: flex; justify-content: center;">
                                                        <form action="{{ route('admin.coupons.toggleStatus', $coupon->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="btn btn-sm {{ $coupon->is_active ? 'btn-danger' : 'btn-success' }}">
                                                                {{ $coupon->is_active ? 'Deactivate' : 'Activate' }}
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.partials.footer')
