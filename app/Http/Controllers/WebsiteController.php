<?php

namespace App\Http\Controllers;

class WebsiteController extends Controller
{
    public function home() {
        $dataBanner = [
          [
              "title" => "Kemendikbud Selenggarakan Rapat Koordinasi Pengelolaan Keuangan Pendidikan dan Kebudayaan Tahun 2019",
              "subTitle" => "Sebagai upaya meningkatkan kualitas pelaksanaan anggaran pendidikan dan kebudayaan tahun 2019, Kementerian Pendidikan dan Kebudayaan (Kemendikbud) menyelenggarakan rapat koordinasi (Rakor) pengelolaan keuangan dengan tema “Strategi Peningkatan Kualitas Pelaksanaan Anggaran dan Akuntabilitas Kinerja”. Rakor tersebut diselenggarakan di Hotel Grand Sahid Jaya, Jakarta, pada hari Kamis s.d. Sabtu, 7 s.d. 9 Februari 2019.",
              "cover" => "https://ivooxs3.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/02/Kemendikbud-Selenggarakan-Rapat-Koordinasi-Pengelolaan-Keuangan-Pendidikan-dan-Kebudayaan-Tahun-2019-doc.Kemendikbud-ivoox.id_.jpg",
              "readMore" => "#"
          ]
        ];
        return view("home.index", ["banners" => $dataBanner]);
    }

    public function about() {
        return view("about.index", ["page" => "Tentang Kami"]);
    }
}
