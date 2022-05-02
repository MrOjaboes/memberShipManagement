@extends('layouts.admin')
@section('content')
    <x-navbar />
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard / Message</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row pt-3">

                    <!-- /.col -->
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="info-box mb-3">
                            <div class="info-box-content">
                                <form wire:submit.prevent="send">
                                    <div class="form-group col-md-2">
                                        <div class="multipleSelection">
                                            <div class="selectBox" onclick="showEmailboxes()">
                                                <select class="form-control">
                                                    <option>Select Recievers</option>
                                                </select>
                                                <div class="overSelect"></div>
                                            </div>
                                            <div class="form-group" id="emailBoxes">
                                                <label><input type="checkbox" name="all" value="all"> All Users</label>

                                                @foreach ($users as $user)
                                                    <label><input type="checkbox" name="reciever_id[]" value="{{ $user->id }}">
                                                        {{ $user->name }}</label>
                                                @endforeach

                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message[]" class="form-control" id="" cols="" rows="" placeholder="Message Content"></textarea>
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


        <!-- /.content -->
    </div>
@endsection
<script>
    var show = true;

    function showEmailboxes() {
        var checkboxes =
            document.getElementById("emailBoxes");

        if (show) {
            checkboxes.style.display = "block";
            show = false;
        } else {
            checkboxes.style.display = "none";
            show = true;
        }
    }
</script>
