@extends('layouts.main')
@section('konten')
<section class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
                   src="{{ asset('dist/img/1.jpeg') }}"
                   alt="User profile picture">
            </div>
            <h3 class="profile-username text-center">Dilla Widya Mawarni</h3>
            <p class="text-muted text-center">Full Stack Web Developer</p>
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Followers</b> <a class="float-right">1,322</a>
              </li>
              <li class="list-group-item">
                <b>Following</b> <a class="float-right">543</a>
              </li>
              <li class="list-group-item">
                <b>Friends</b> <a class="float-right">13,287</a>
              </li>
            </ul>
            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">About Me</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Pendidikan</strong>
            <p class="text-muted">
              Universitas PGRI Kanjuruhan Malang, Program Studi Sistem Informasi
            </p>
            <hr>
            <strong><i class="fas fa-map-marker-alt mr-1"></i> Tempat Tinggal</strong>
            <p class="text-muted">Malang, Jawatimur</p>
            <hr>
            <strong><i class="fas fa-pencil-alt mr-1"></i> Minat</strong>
            <p class="text-muted">
              <span class="tag tag-danger">UI Design</span>
              <span class="tag tag-success">Coding</span>
              <span class="tag tag-info">Javascript</span>
              <span class="tag tag-warning">PHP</span>
            </p>
            <hr>
            <strong><i class="fas fa-file-alt mr-1"></i> Tempat, Tanggal Lahir</strong>
            <p class="text-muted">Malang, 18 Maret 2002</p></p>
            <hr>
            <strong><i class="fas fa-envelope mr-1"></i>E-mail</strong>
            <p class="text-muted">dillawidya0302@gmail.com</p></p>
            <hr>
            <strong><i class="fas fa-phone mr-1"></i>Telepon</strong>
            <p class="text-muted">082245464814</p></p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
     
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection