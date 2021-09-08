@extends("admin.layout")
@section("content")
    <div class="row">
        <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="{{ url("template/images/logo-alumni.png") }}"
                             alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">IKATAN ALUMNI SMAN 6 LUBUKLINGGAU</h3>

                    <p class="text-muted text-center">Organisasi Sekolah</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Jumlah Anggota</b> <a class="float-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                            <b>Jumlah Anggota Laki-laki</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Jumlah Anggota Perempuan</b> <a class="float-right">13,287</a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Informasi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fas fa-microphone-alt mr-1"></i> Tentang Kami</strong>

                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>

                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Lokasi</strong>

                    <p class="text-muted">Air Teman, Lubuk Linggau Selatan I, Lubuklinggau City, South Sumatra 31626</p>

                    <hr>

                    <strong><i class="fas fa-phone-alt mr-1"></i> Kontak</strong>

                    <p class="text-muted">
                        0895355698652
                    </p>

                    <hr>

                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                    <p class="text-muted">-</p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
