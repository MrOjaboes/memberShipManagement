<section class="content">
    <div class="container-fluid">

        <div class="row pt-3">

            <!-- /.col -->
            <div class="col-12 col-sm-12 col-md-12">
                <div class="info-box mb-3">
                    <div class="info-box-content">
                       <form wire:submit.prevent="send">
                           <div class="form-group">
                               <label for="">Recievers</label>
                             <select wire:model="reciever_id" class="form-control">
                                 <option value="">w</option>
                                 <option value="">w</option>
                             </select>
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
