@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Program Studi Informatika - '. env('APP_NAME'))
@section('meta_description', 'Program Studi Informatika - '. env('APP_NAME'))
@section('meta_keywords', 'informatika upu, informatika potensi utama, visi misi informatika upu, berita informatika potensi utama')
@section('canonical', env('APP_URL').'/program-studi/informatika')
@section('json-ld')
<script type="application/ld+json">{"@context": "https://schema.org","@type": "EducationalOrganization","name": "Informatika","url": "{{env('APP_URL')}}/program-studi/informatika","address": {"@type": "PostalAddress","addressLocality": "Medan","addressRegion": "Sumatera Utara","postalCode": "20241","streetAddress": "Jl. K.L Yos Sudarso, Km. 6,5 , No. 3-a, Tj. Mulia, Kec. Medan Deli" },"department": {"@type": "EducationalOrganization","name": "{{env('APP_NAME')}}","url": "{{env('APP_URL')}}"}}</script>
@endsection
@section('content')

   @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix"
        style="background-image: url({{ asset('landing/assets/img/building-img/gedung-upu.jpg') }})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>Program Studi</span></p>
                        <p class="post-title">{{$title}}</p>
                        {{-- <div class="d-flex align-items-center">
                            <span class="post-date mr-30">June 20, 2018</span>
                            <span class="post-date">By Michael Smith</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Post Details Title Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="post-details-content mb-100">
                        <h1 class="mb-30">Visi Misi & Tujuan</h1>
                        <h4 class="mb-30">Visi</h4>
                        <p>"Pada Tahun 2025 Menjadi program studi Informatika khususnya dalam bidang Komputasi Cerdas, Komputasi Nirkabel, dan Keamanan komputer yang unggul di tingkat Sumatera dan mampu berperan serta ditingkat Nasional".</p>

                        <h4 class="mb-30">Misi</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">1.</td>
                                <td>Melaksanakan pendidikan yang berkualitas dalam bidang Informatika khususnya dalam bidang Komputasi Cerdas, Komputasi Nirkabel, dan Keamanan komputer yang sesuai dengan perkembangan Ilmu Pengetahuan dan Teknologi.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">2.</td>
                                <td>Melaksanakan penelitian dalam bidang Informatika yang dapat dipublikasikan pada tingkat Nasional.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">3.</td>
                                <td>Melaksanakan kegiatan dan layanan yang bermanfaat bagi masyarakat dalam bidang Informatika</td>
                            </tr>
                        </table>
                        
                        <h4 class="mb-30">Tujuan</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">1.</td>
                                <td>Menghasilkan lulusan yang unggul, profesional dan bermental wirausaha dalam bidang informatika khususnya dalam bidang komputasi Cerdas, komputasi Nirkabel, dan keamanan komputer.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">2.</td>
                                <td>Menghasilkan lulusan yang mempunyai landasan teori keilmuan yang kuat dan kemampuan praktis yang tinggi dalam bidang Informatika khususnya dalam bidang Komputasi Cerdas, Komputasi Nirkabel, dan Keamanan komputer.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">3.</td>
                                <td>Menghasilkan karya ilmiah dan hasil penelitian lainnya dalam bidang Informatika yang dipublikasikan pada tingkat Nasional</td>
                            </tr>
                            <tr>
                              <td style="vertical-align: top;">3.</td>
                              <td>Terjadinya kerjasama dengan masyarakat, industri, pemerintah dan stakeholder lainnya pada tingkat Nasional</td>
                          </tr>
                        </table>
                    </div>

                    <div class="post-details-content mb-100">
                        <h1 class="mb-30">Kurikulum {{$title}}</h1>
                        <div class="col-12 col-lg-12">
                            <div class="accordions mb-50" id="accordion" role="tablist" aria-multiselectable="true">

                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                            data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Semester 1
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseOne" class="accordion-content collapse ">
                                        <table style="width: 100%; border-collapse: collapse;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Agama I</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Dasar Pemrograman</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Bahasa Indonesia</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">English I</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Fisika</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Instalasi Komputer dan Jaringan</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pancasila</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Matematika I</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">9</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Teknologi Informasi</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 1</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">21</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                          Semester 2
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseTwo" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pemrograman Berorientasi Objek</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Interaksi Manusia dan Komputer</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Web Design</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Dasar Pemrograman Lanjut I</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">English II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Organisasi dan Arsitektur Komputer</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Matematika II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Agama 2</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 2</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">21</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                </div>


                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                          Semester 3
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseThree" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Basis Data</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Jaringan Komputer</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Sistem Digital</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Komputasi Numerik</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Dasar Pemrograman Lanjut II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Matematika Diskrit</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Probabilitas dan Statistik</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 3</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">21</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                          Semester 4
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseFour" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Aljabar Linear</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Sistem Basis Data</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Teori Bahasa dan Automata</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pemrograman Internet</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Kecerdasan Buatan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Struktur Data dan Algoritma</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pemrograman Web</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 4</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">22</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                          Semester 5
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseFive" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Kecerdasan Komputasi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Perancangan Perangkat Lunak</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pemrograman Mobile</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Perancangan dan analisis Algoritma</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Keamanan Komputer dan Jaringan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Komputer Grafik</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Sistem Operasi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 5</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">21</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                          Semester 6
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseSix" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pengolahan Citra Digital</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Sistem Informasi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Metodologi Penelitian</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Kerja Praktek</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Matakuliah Pilihan I</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Matakuliah Pilihan II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Matakuliah Pilihan III</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 6</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">19</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 
                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                                          Semester 7
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseSeven" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Sistem Multimedia</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Proyek Perangkat Lunak</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Etika & Profesi Teknologi Informasi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Komunikasi Skill</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Proposal Skripsi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 7</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">13</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                                          Semester 8
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseEight" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Technopreneurship</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Kewarganegaraan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Skripsi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 8</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">8</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                            </div>
                            <table style="width: 100%; border-collapse: collapse;">
                              <thead>
                                  <tr>
                                    <th style="border: 0 solid #ddd; padding: 8px; text-align: right;">Total Seluruh SKS:</th>
                                    <th style="border: 0 solid #ddd; padding: 8px; text-align: center;">146</th>
                                  </tr>
                              </thead>
                           </table>
                        </div>
                    </div>

                    {{-- Berita Prodi --}}
                    <x-academic-news :latestPosts="$latestPosts"></x-academic-news>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

@endsection
