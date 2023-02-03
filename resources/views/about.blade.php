@extends('layouts.main')

@section('content')
<div class="container d-flex infoBook mb-5 mt-3" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="1500">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 m-3">
            <div class="aboutUS">
                <h1 class="title d-flex justify-content-center">BUUKS</h1>
                <p>Buuks adalah sebuah situs web yang memungkinkan pengguna untuk memberikan ulasan dan pendapat tentang buku-buku yang mereka baca. Dalam Buuks ini, terdapat fitur CRUD (Create, Read, Update, dan Delete) yang memungkinkan pengguna untuk melakukan operasi-operasi dasar terhadap data.</p>
                    <ul>
                        <li>Create: Pengguna dapat menambahkan ulasan baru tentang buku yang mereka baca, mencantumkan judul buku, nama penulis, rating, dan ulasan singkat.</li>
                        <li>Read: Pengguna dapat membaca ulasan buku yang sudah diterbitkan oleh pengguna lain dan melihat detail buku seperti judul, penulis, dan ulasan.</li>
                        <li>Update: Pengguna dapat memperbarui ulasan buku yang sudah diterbitkan sebelumnya, mengubah rating atau menambahkan komentar baru.</li>
                        <li>Delete: Pengguna dapat menghapus ulasan buku yang sudah diterbitkan sebelumnya jika mereka merasa tidak sesuai atau tidak ingin diterbitkan lagi.</li>
                    </ul>
                <p>Dengan fitur CRUD ini, Buuks memungkinkan pengguna untuk mengelola ulasan buku mereka dan berbagi pendapat dengan pengguna lain secara efisien dan mudah.</p> 
            </div>
        </div>
    </div>
</div>
@endsection