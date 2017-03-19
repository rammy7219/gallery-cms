<?php include_once 'User.php'; ?>

<div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  Admin
                  <small>Subheading</small>
              </h1>

              <?php

                // $user = new User();
                //
                // $user->username = "Suave The Second";
                // $user->password = "Rico Last Name";
                // $user->first_name = "Rico";
                // $user->last_name = "Suaves";
                //
                // $user->create();

                // $user = User::find_user_by_id(3);
                // $user->last_name = "WILLIAMS";
                //
                // $user->update();

                $user = User::find_user_by_id(3);
                $user->delete();

              ?>

              <ol class="breadcrumb">
                  <li>
                      <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                  </li>
                  <li class="active">
                      <i class="fa fa-file"></i> Blank Page
                  </li>
              </ol>
          </div>
      </div>
      <!-- /.row -->

  </div>
  <!-- /.container-fluid -->
