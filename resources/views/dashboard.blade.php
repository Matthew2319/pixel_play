<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/templatemo-style.css">

            <section class="gallery min-vh-100">
            <div class="container-lg">
                <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                    <div class="col">
                        <img src="images/phone bg 1.png" class="gallery-item" alt="">
                    </div>
                    <div class="col">
                        <img src="images/phone bg 2.png" class="gallery-item" alt="">
                    </div>
                    <div class="col">
                        <img src="images/phone bg 3.png" class="gallery-item" alt="">
                    </div>
                    <div class="col">
                        <img src="images/phonebg4.png" class="gallery-item" alt="">
                    </div>
                    <div class="col">
                        <img src="images/phone bg 5.png" class="gallery-item" alt="">
                    </div>
                    <div class="col">
                        <img src="images/phonebg6.png" class="gallery-item" alt="">
                    </div>
                    <div class="col">
                        <img src="images/phone bg 7.png" class="gallery-item" alt="">
                    </div>
                    <div class="col">
                        <img src="images/phone bg 8.png" class="gallery-item" alt="">
                    </div>
                    <div class="col">
                        <img src="images/phone bg 9.png" class="gallery-item" alt="">
                    </div>
                </div>
            </div>
        </section>
        

<!-- Modal -->
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img src="images/phone bg 8.png" class="modal-img" alt="">
      </div>
    </div>
  </div>
</div>

        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/min/main.min.js"></script>
        <script src="js/min/bear.min.js"></script>

</x-app-layout>
