
<?php $__env->startSection('content'); ?>
<div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
                <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
              </div>
            </div>
            <div class="card">
                  <div class="card-header">
                  </div>
                  <div class="card-body">
                            <form method="POST" action="<?php echo e(route('dosenStore')); ?>">
                              <?php echo csrf_field(); ?>
                              <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" id="nik" name="nik" placeholder="e.g. 7200001" class="form-control" maxlength="7" required autofocus/>
                              </div>
                              <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" placeholder="e.g. JohnDoe" class="form-control" maxlength="100" required/>
                              </div>
                              <div class="form-group">
                                <label for="tanggal_lahir">Birth Date</label>
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" required/>
                              </div>
                              <div class="form-group">
                                <label for="email">Email </label>
                                <input type="text" id="email" name="email" placeholder="e.g. john.doe@gmail.com" class="form-control" maxlength="100" required/>
                              </div>
                              <button tpye="submit">Submit</button>
                            </form>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ExtraCSS'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ExtraJS'); ?>
  <script>
    $("#table-lecturer").DataTable({
      pageLength: 25,
    });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\william\Downloads\academic_mis-main\academic_mis-main\resources\views/dosen/create.blade.php ENDPATH**/ ?>