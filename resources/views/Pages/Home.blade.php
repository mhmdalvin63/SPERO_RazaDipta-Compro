@extends('Template')
@section('title_tab', 'Home')
<link rel="stylesheet" href="../Css/Home.css">
@section('content')
    <div class="home-header">
        <img src="{{ asset('..\Images\bg-header.png') }}" alt="">
        <div class="header-abs-text">
            <p>This Is</p>
            <h1>PT. RAZA DIPTA PRATAMA</h1>
        </div>
    </div>

    <div class="container">
        <div class="about-us py-5">
            <div class="row align-items-center">
                <div class="col-5">
                    <div class="image-about-us">
                        <img src="{{ asset('..\Images\img-section-1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-7">
                    <div class="row align-items-end">
                        <div class="col-6"><h3 class="mb-0">PT. RAZA DIPTA PRATAMA</h3></div>
                        <div class="col-6 p-0"><hr class="title-hr mb-1"></div>
                    </div>
                    <p>dikelola oleh manajemen modern yang mampu beradaptasi dengan perkembangan teknologi, selalu membaca trend, melakukan evaluasi kedalam dan meningkatkan kemampuan SDM untuk dapat memberikan yang terbaik.

                        Kebutuhan serta peluangakan “MICE” (Meeting, Incentive, Convention, Exhibition) consultant, Procurement of goods and services saat ini yang begitu besar bagi Masyarakat, perusahaan dan Instansi pemerintahan maka PT. RAZA DIPTA PRATAMA hadir untuk memfasilitasi serta melayani dengan komitmen dan profesional.
                        
                        Ditopang dengan SDM dengan Manajemen Profesional dan kompetensi tinggi, PT. RAZA DIPTA PRATAMA, menyediakan berbagai layanan fasilitas MICE</p>
                </div>
            </div>
        </div>

        <div class="visi-misi py-5">
            <div class="row">
                <div class="col-2 visi-misi-img">
                    <img src="{{ asset('..\Images\img-section-2.png') }}" alt="">
                    <p>VISI & MISI</p>
                </div>
                <div class="col-5"> 
                    <div class="content-visi p-5">
                        <h3>COMPANY <br> VISION</h3>
                        <p>"Menjadi Perusahaan Jasa Yang Handal dengen Memberikan Layanan Yang Berkualitas, Unggul, dan Harmonis dalam Layanan dan Kinerja".</p>
                    </div>
                </div>
                <div class="col-5">
                    <div class="content-visi p-5">
                        <h3>COMPANY <br> MISION</h3>
                        <ul>
                            <li>Memberikan layanan prima dan solusi kepada mitra.</li>
                            <li>Komitmen menjadikan perusahaan yang berkualitas dalam meningkatkan kinerja.</li>
                            <li>Berkembang dan beradaptasi terhadap perkembangan Zaman dan teknologi untuk menjadi perusahaan berskala Nasional</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mice py-5">
       <div class="container">
        <h3 class="text-center">MICE</h3>
        <p class="text-center">Menyediakan srana dan prasarana yang memadai untuk terselenggaranya, meeting seminar, IHT, serta corporate gathering
            yang dikemas dengan rekreasi bersama dan mempunyai tujuan bersifat edukatif, inspiratif, dan motivatif,
            sesuai dengan kebutuhan dan perrmintaan</p>
        <div class="row">
            <div class="col-3">
                <div class="col-mice text-center py-4 px-5">
                    <div class="d-flex justify-content-center">
                        <div class="logo-text py-3 px-4"><h3>M</h3></div>
                    </div>
                    <h4 class="my-2">Meeting</h4>
                    <p>Menyediakan sarana dan prasarana yang memadai untuk terselenggaranya meeting.</p>
                </div>
            </div>
            <div class="col-3">
                <div class="col-mice text-center py-4 px-5">
                    <div class="d-flex justify-content-center">
                        <div class="logo-text py-3 px-4"><h3>M</h3></div>
                    </div>
                    <h4 class="my-2">Meeting</h4>
                    <p>Menyediakan sarana dan prasarana yang memadai untuk terselenggaranya meeting.</p>
                </div>
            </div>
            <div class="col-3">
                <div class="col-mice text-center py-4 px-5">
                    <div class="d-flex justify-content-center">
                        <div class="logo-text py-3 px-4"><h3>M</h3></div>
                    </div>
                    <h4 class="my-2">Meeting</h4>
                    <p>Menyediakan sarana dan prasarana yang memadai untuk terselenggaranya meeting.</p>
                </div>
            </div>
            <div class="col-3">
                <div class="col-mice text-center py-4 px-5">
                    <div class="d-flex justify-content-center">
                        <div class="logo-text py-3 px-4"><h3>M</h3></div>
                    </div>
                    <h4 class="my-2">Meeting</h4>
                    <p>Menyediakan sarana dan prasarana yang memadai untuk terselenggaranya meeting.</p>
                </div>
            </div>
        </div>
       </div>
    </div>

    <div class="container">
        <div class="consultant py-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-5">
                    <img src="{{ asset('..\Images\img-section-4.png') }}" alt="" class="img-section-4"> 
                </div>
                <div class="col-6">
                    <div class="row align-items-end">
                        <div class="col-3">
                            <h3 class="mb-0">Consultant</h3>
                        </div>
                        <div class="col-3">
                            <hr class="hr-4 mb-1">
                        </div>
                    </div>
                    <h2>PELATIHAN DAN MANAJEMEN</h2>
                    <p>PT. RDP akan membantu mengembangkan
                        peserta dari sisi pembekalan mindset, knowledge,
                        dan skill, serta menjawab kebutuhan untuk peningkatan kemampuan peserta dalam melakukan pekerjaan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mice py-5">
        <div class="container">
         <h3 class="text-center">FASILITATOR</h3>
         <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, alias quibusdam sunt nobis laudantium perferendis!</p>
         <div class="row">
             <div class="col-2 text-center">
                <img src="{{ asset('..\Images\fasilitator.png') }}" alt="" class="w-100">
                <p class="fw-bold mb-0">Alvin</p>
                <p class=" mb-0">Wicaksono</p>
             </div>
             <div class="col-2 text-center">
                <img src="{{ asset('..\Images\fasilitator.png') }}" alt="" class="w-100">
                <p class="fw-bold mb-0">Alvin</p>
                <p class=" mb-0">Wicaksono</p>
             </div>
             <div class="col-2 text-center">
                <img src="{{ asset('..\Images\fasilitator.png') }}" alt="" class="w-100">
                <p class="fw-bold mb-0">Alvin</p>
                <p class=" mb-0">Wicaksono</p>
             </div>
             <div class="col-2 text-center">
                <img src="{{ asset('..\Images\fasilitator.png') }}" alt="" class="w-100">
                <p class="fw-bold mb-0">Alvin</p>
                <p class=" mb-0">Wicaksono</p>
             </div>
             <div class="col-2 text-center">
                <img src="{{ asset('..\Images\fasilitator.png') }}" alt="" class="w-100">
                <p class="fw-bold mb-0">Alvin</p>
                <p class=" mb-0">Wicaksono</p>
             </div>
             <div class="col-2 text-center">
                <img src="{{ asset('..\Images\fasilitator.png') }}" alt="" class="w-100">
                <p class="fw-bold mb-0">Alvin</p>
                <p class=" mb-0">Wicaksono</p>
             </div>
         </div>
        </div>
    </div>

    <div class="container">
        <div class="consultant py-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-5">
                    <img src="{{ asset('..\Images\img-section-4.png') }}" alt="" class="img-section-4"> 
                </div>
                <div class="col-6">
                    <div class="row align-items-end">
                        <div class="col-3">
                            <h3 class="mb-0">Consultant</h3>
                        </div>
                        <div class="col-3">
                            <hr class="hr-4 mb-1">
                        </div>
                    </div>
                    <h2>PELATIHAN DAN MANAJEMEN</h2>
                    <p>PT. RDP akan membantu mengembangkan
                        peserta dari sisi pembekalan mindset, knowledge,
                        dan skill, serta menjawab kebutuhan untuk peningkatan kemampuan peserta dalam melakukan pekerjaan.</p>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                
                <div class="col-6">
                    <div class="row align-items-end">
                        <div class="col-3">
                            <h3 class="mb-0">Consultant</h3>
                        </div>
                        <div class="col-3">
                            <hr class="hr-4 mb-1">
                        </div>
                    </div>
                    <h2>PELATIHAN DAN MANAJEMEN</h2>
                    <p>PT. RDP akan membantu mengembangkan
                        peserta dari sisi pembekalan mindset, knowledge,
                        dan skill, serta menjawab kebutuhan untuk peningkatan kemampuan peserta dalam melakukan pekerjaan.</p>
                </div>
                <div class="col-5">
                    <img src="{{ asset('..\Images\img-section-4.png') }}" alt="" class="img-section-4"> 
                </div>
            </div>
        </div>
    </div>

   <div class="section-6">
    <div class="mice py-3 d-flex gap-3 justify-content-center">
        <hr class="gallery-hr">
        <h3 class="mb-0">GALLERY</h3>
        <hr class="gallery-hr">
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-4 visi-misi-img" id="gallery-img">
                <img src="{{ asset('..\Images\gallery.png') }}" alt="">
                <p>
                    <span class="fw-bold">Kegiatan 1</span>
                    <br>
                    <span>Lorem Ipsum</span>
                </p>
            </div>
            <div class="col-4 visi-misi-img" id="gallery-img">
                <img src="{{ asset('..\Images\gallery.png') }}" alt="">
                <p>
                    <span class="fw-bold">Kegiatan 1</span>
                    <br>
                    <span>Lorem Ipsum</span>
                </p>
            </div>
            <div class="col-4 visi-misi-img" id="gallery-img">
                <img src="{{ asset('..\Images\gallery.png') }}" alt="">
                <p>
                    <span class="fw-bold">Kegiatan 1</span>
                    <br>
                    <span>Lorem Ipsum</span>
                </p>
            </div>
        </div>
    </div>

    {{-- <link rel="stylesheet" href=" {{ asset('../css/part/footer.css')}}"> --}}

<footer class="pt-5 pb-4" style="margin-top: 7rem;">
    <div class="container">
        <div class="row justify-content-md-between align-items-start">
            <div class="col-lg-2 col-md-2 footerLogo">
                    <img src="{{asset('../image/pdfiLogoEllipse.png')}}" alt="">
            </div>
            <div class="col-lg-3 col-md-3 footerTitle">
                <p class="xl fw-bold my-2">PERSATUAN DOKTER FORENSIK INDONESIA</p>
                <p class="text-justify my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sapiente alias nam laborum? At tempora dolores architecto eligendi.</p>
                <div class="sosmed d-flex align-items-center justify-content-center justify-content-md-start gap-3 my-3">
                    <a href=""><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i></a>
                    <a href=""><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>
                    <a href=""><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
                    <a href=""><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok" style="color: #ffffff;"></i></a>
                    <a href=""><i class="fa-solid fa-circle-play" style="color: #ffffff;"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-8 col-7">
                <p class="xl fw-bold my-2">ALAMAT</p>
                <p class="text-justify my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci similique earum odit iste quo cum incidunt inventore! Saepe.</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-5">
                <p class="xl fw-bold mt-2">KONTAK KAMI</p>
                <div class="email d-flex align-items-center gap-2 mt-2">
                    <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                    <p>pdfi@gmail.co.id</p>
                </div>
                <div class="email d-flex align-items-center gap-2">
                    <i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>
                    <p>021 - 2569 - 5632</p>
                </div>
            </div>
        </div>
        <div class="hr"></div>
        <div class="bottomFooter d-flex justify-content-between">
            <p>©2020 PDFI, All Rights Reserved.</p>
            <p>Terms & Condition - Privacy - Cookies</p>
        </div>
    </div>
</footer>
   </div>
@endsection