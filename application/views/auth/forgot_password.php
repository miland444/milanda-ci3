<div class="container">

    <!-- outer row-->
    <div class="row justify-content-center">

    <div clas="col=lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            <!--nested row within card body-->
            <div class="row">

                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900">Forgot your password</h1>
                            <h5 class="mb-4"><?=$this->session->userdata('reset_email');?></h5>
                                </div>
                                <?=$this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth/forgotpassword') ?>">
                                <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" 
                                name="email" placeholder="Enter new password">
                                <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Reset Password
                                </button>
                                </form>
                                <hr>

                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth') ?>">Back to login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>