<!DOCTYPE html>
<html lang="en">


@include('Admin.pages.head')

<body>
  

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
          
        @include('Admin.pages.sidebar')
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
             @include('Admin.pages.navbar')
            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                  
                    <div class="col-sm-12 col-xl-6">
                   
                 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  +Category
</button>
@if(isset($errors))
<div class="alert alert-danger">
   @foreach ($errors->all() as $message)
        <ul> {{$message}} </ul>
        @endforeach
    </div>
    @endif
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                                <form action= "{{route('admin.create.category')}}" method="POST">
                                @csrf
                                <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="category" placeholder="name@example.com">
                                            <label for="floatingInput">Category</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                           <select name="status" id="" class="form-select">
                                            <option value="Disponible">Disponible</option>
                                            <option value="En-cours...">En-cours...</option>
                                           </select>
                                            <label for="floatingPassword">Status</label>
                                    </div>
                                            <button type="submit" class="btn btn-primary">Save changes</button>

                                            </form>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
                       
                    </div>
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Listes des category</h6>
                            <div class="table-responsive">
                               <livewire:category-table/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->

           


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

  @include('Admin.pages.js')
</body>

</html>