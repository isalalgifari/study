@extends('layouts.admin.admin')

@section('content')
   <div class="content">
       <div class="row">
           <div class="col-md-12">
               <div class="card card-user">
                   <div class="image">
                       <img src="../assets/img/bg5.jpg" alt="...">
                   </div>
                   <div class="card-body">
                       <div class="author">
                           <a href="#">
                               <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                               <h5 class="title">Muhammad Faisal Algifari</h5>
                           </a>
                           <p class="description">
                               isalalgifari
                           </p>
                       </div>
                       <p class="description text-center">
                           "Hidup bukan bagaimana cara memulai
                           <br> tapi bagaimana cara kamu mengakhiri"
                       </p>
                   </div>
                   <hr>
                   <div class="button-container">
                       <button href="https://www.facebook.com/isalalgifari" class="btn btn-neutral btn-icon btn-round btn-lg">
                           <i class="fab fa-facebook-f"></i>
                       </button>
                       <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                           <i class="fab fa-twitter"></i>
                       </button>
                       <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                           <i class="fab fa-google-plus-g"></i>
                       </button>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection