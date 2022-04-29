<x-backindc>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Messages</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Messages</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- COLOR PALETTE -->
                <div class="card card-default color-palette-box">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-tag"></i>
                            Color Palette
                        </h3>
                    </div>
                    <div class="card-body">
                        <!-- /.col-12 -->
                        <div class="row">
                            <div class="col-12">
                                <form class="black-bg contact-form c-mb-20 c-gutter-20">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="ds form-group has-placeholder">
                                                <label for="name">Name
                                                </label>
                                                <input type="text" aria-required="true" size="30" value="{{$contact->name}}"id="name" class="form-control" disabled>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="ds form-group has-placeholder">
                                                <label for="email">Email address
                                                </label>
                                                <input type="email" aria-required="true" size="30" value="{{$contact->email}}" id="email" class="form-control" disabled>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="ds form-group has-placeholder">
                                                <label for="phone">Phone
                                                </label>
                                                <input type="text" size="30" value="{{$contact->phone}}" name="phone" id="phone" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="ds form-group has-placeholder">
                                                <label for="subject">Subject
                                                    <span class="required">*</span>
                                                </label>
                                                <input type="text" aria-required="true" size="30" value="{{$contact->subject}}" name="subject" id="subject" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="ds form-group has-placeholder">
                                                <label for="message">Message</label>
                                                <textarea aria-required="true" rows="6" cols="4" id="message" class="form-control" placeholder="Message" disabled>{{$contact->message}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <a id="contact_form_submit"  class="btn btn-primary" href="{{route('dashboard.contact')}}">
                                        <i class="fas fa-angle-left right">
                                            Back To Messages
                                        </i>

                                    </a>

                                    <a class="btn btn-danger" onclick="document.getElementById('contact-del-{{$contact->id}}').submit()">
                                        <i class="fas fa-trash">
                                        Delete This Message
                                        </i>
                                        Delete
                                        <form action="{{route('dashboard.delete-contact',$contact->id)}}" id='contact-del-{{$contact->id}}' method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.row -->
                <!-- END TYPOGRAPHY -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
</x-backindc>

