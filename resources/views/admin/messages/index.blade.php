@include("admin.partials.header-admin")

<div class="app-content">
    <div class="u-s-p-b-60">
        <div class="section__content">
            <div class="dash">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            @include('admin.partials.siadebar')
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                <div class="dash__pad-2">
                                    <h1 class="dash__h1 u-s-m-b-14">Messages</h1>

                                    <div class="dash__table">
                                        <table class="dash__table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th> <!-- عرض عمود الاسم -->
                                                    <th>Email</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($messages as $message)
                                                    <tr>
                                                        <td>{{ $message->name }}</td> <!-- عرض الاسم -->
                                                        <td>{{ $message->email }}</td>
                                                        <td>{{ $message->subject }}</td>
                                                        <td>{{ $message->message }}</td>
                                                        <td>
                                                    <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="address-book-edit btn--e-transparent-platinum-b-2" style="margin-right:4px;" type="submit">Delete</button>
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
</div>

@include("admin.partials.footer")
