<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span style="color:white;" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
        <div class="row pt-3">

            <!-- /.col -->
            <div class="col-12 col-sm-12 col-md-12">
                <div class="info-box mb-3">
                    <div class="info-box-content">
                        <form wire:submit.prevent="send">
                            <div class="card" style="height: 200px;overflow-y:scroll;">
                                <div class="card-body">
                                    <table class="table table-condensed table-hover table-responsive-lg">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input type="checkbox" wire:model="selectPageRows"
                                                            class="form-check-input" id="exampleCheck1">
                                                        All
                                                    </div>
                                                </th>
                                                <th>Name</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <input type="checkbox" wire:model="selectedRows"
                                                                class="form-check-input" value="{{ $user->id }}"
                                                                id="{{ $user->id }}">
                                                        </div>
                                                    </th>
                                                    <td>{{ $user->name }}</td>

                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>

                                </div>

                            </div>

                            <div class="form-group">
                                <textarea wire:model="message" class="form-control" id="" cols="" rows="" placeholder="Message Content"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Send Message</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->


        </div>


        <div class="row pt-5">

            <div class="col-md-12">

                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ww</td>
                            <td>dd</td>
                        </tr>
                    </tbody>
                </table>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
