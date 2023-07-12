<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news');
    }

    public function show($news)
    {
        if ($news == 'p3i-mengadakan-acara-networking-untuk-anggota-baru') {
            return view('news-file.news-1');
        }elseif ($news == 'p3i-merayakan-tahun-keberhasilan-dalam-industri-periklanan') {
            return view('news-file.news-2');
        }elseif ($news == 'p3i-membuka-pendaftaran-program-pelatihan-kreativitas-periklanan') {
            return view('news-file.news-3');
        }elseif ($news == 'p3i-mendukung-kampanye-sosial-berkelanjutan-dalam-industri-periklanan') {
            return view('news-file.news-4');
        }
    }
}
