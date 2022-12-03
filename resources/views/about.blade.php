@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/bg-img.png'); background-repeat: repeat; background-size: 100vw;">
    <div class="row">
        <div class="col-md-12 my-5">
            <div class="container bg-white p-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="display-3 font-weight-bold mb-5">
                            Kata Sambutan
                        </h1>
                        <div class="row justify-content-center mb-5">
                            <div class="col-md-2 border-bottom border-dark"></div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-bottom: 100px;">
                    <div class="col-md-3 my-3">
                        <div>
                            <img src="{{ asset('images/1.PNG') }}" width="300px" alt="Responsive image">
                        </div>
                    </div>

                    <div class="col-md-1 my-3"></div>

                    <div class="col-md-8 my-3">
                        <h1 class="display-6 font-weight-bold mb-5">
                            Sambutan Ketua Umum Pengurus Provinsi Perbasi Jawa Tengah
                        </h1>
                        <p>
                            Assalamu’alaikum Warahmatullahi Wabarakatuh, <br>
                            Salam Sejahtera bagi kita semua, <br>
                            Salam Olahraga, <br>
                        </p>
                        <p>
                            Puji syukur kami panjatkan kehadirat Allah SWT atas limpahan rahmat dan karunia-Nya. Sebelumnya kami ingin mengucapkan Selamat atas diadakannya
                            website “ Commissionerjateng.com “ sebagai sarana penyampaian informasi
                            data-data tentang Commissioner atau Pengawas Pertandingan Jawa Tengah.
                        </p>
                        <p>
                            Informasi yang dirangkum dalam Commissionerjateng.com diharapkan dapat
                            memudahkan terutama para insan basket untuk lebih mengenal data-data personil
                            Pengawas Pertandingan Jawa Tengah yang berupa : data lisensi , surat penugasan
                            kegiatan hingga laporan tugas masing-masing pada saat bertugas.
                        </p>
                        <p>
                            Selain itu dapat sebagai pusat informasi jika terdapat hal-hal baru sesuai FIBA Rules
                            dapat diinformasikan melalui media tersebut sehingga memudahkan terutama para
                            anggota commisioner di Jawa Tengah dapat memperoleh informasi dengan cepat guna
                            mengikuti perkembangan dalam pengetahuan yang berkembang dengan cepat pula.
                        </p>
                        <p>
                            Demikian Sambutan dari kami, Selamat Bekerja, <br><br>
                            Wabillahi Taufik Walhidayah, <br>
                            Wassalamu’alaikum Warahmatullahi Wabarakatuh. <br>
                        </p>
                        <p>
                            Semarang, November 2022 <br>
                            PENGURUS PROVINSI PERBASI JAWA TENGAH
                            <br><br>
                            <u>Dr. Ir. BAMBANG WURAGIL UNTUNG, MM, M.Si</u> <br>
                            Ketua Umum
                        </p>
                    </div>
                </div>

                {{-- <div class="row" style="margin-top: 100px; margin-bottom: 100px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 100px; margin-bottom: 100px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5 my-3">
                                <img src="{{ asset('images/YUDHA_SAPUTRA1.jpg') }}" style="object-fit: none; object-position: center;" height="100%" width="100%" alt="Responsive image">
                            </div>

                            <div class="col-md-1 my-3"></div>

                            <div class="col-md-6 my-3">
                                <h1 class="display-4 font-weight-bold mb-5">
                                    Virtual Webinar Event on Digital Marketing
                                </h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam facere provident veniam quibusdam quo, doloremque quidem vel impedit distinctio inventore, maiores, odit error atque quia quasi! Exercitationem, quam velit voluptates doloribus doloremque similique tempore. Blanditiis natus odio sunt, aliquid laudantium, harum assumenda autem eveniet qui quibusdam, alias reprehenderit dignissimos vel?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 100px; margin-bottom: 100px;">
                    <div class="col-md-12 bg-warning">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3 py-3 text-center">
                                        <h3 class="display-4 font-weight-bold">
                                            100
                                        </h3>
                                        <h5 class="font-weight-bold">Events</h5>
                                    </div>
                                    <div class="col-md-3 py-3 text-center">
                                        <h3 class="display-4 font-weight-bold">
                                            100
                                        </h3>
                                        <h5 class="font-weight-bold">Events</h5>
                                    </div>
                                    <div class="col-md-3 py-3 text-center">
                                        <h3 class="display-4 font-weight-bold">
                                            100
                                        </h3>
                                        <h5 class="font-weight-bold">Events</h5>
                                    </div>
                                    <div class="col-md-3 py-3 text-center">
                                        <h3 class="display-4 font-weight-bold">
                                            100
                                        </h3>
                                        <h5 class="font-weight-bold">Events</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
