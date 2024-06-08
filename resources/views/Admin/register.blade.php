<!DOCTYPE html>
<html lang="en">

@include('Admin.pages.head')


<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                            </a>
                            <h3>Inscription</h3>
                        </div>
                        <form action="{{route('register.admin.informations')}}"  method="POST">
                            @csrf
                        <div class="form-floating mb-3">
                                                        @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                     @enderror
                            <input type="text" class="form-control" id="floatingText" name="name" placeholder="jhondoe" >
                            <label for="floatingText">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                                                        @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                     @enderror
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email </label>
                        </div>

                        <div class="form-floating mb-4">
                                                        @error('tel')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                     @enderror
                            <input type="text" class="form-control" name="tel" id="floatingPassword" placeholder="EX: 782529002">
                            <label for="floatingPassword">Telephone</label>
                        </div>

                        <div class="form-floating mb-4">
                                                    @error('password')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                     @enderror
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" >
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="password_confirm" id="floatingPassword" placeholder="Password confirmation" >
                            <label for="floatingPassword">Password-confirm</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="file" class="form-control" name="profil" id="floatingPassword"  accept="image/png, image/jpeg, image/jpg">
                            <label for="floatingPassword">Profile</label>
                        </div>

                        <div class="form-floating mb-4">
                                                         @error('role')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                     @enderror

                            <select name="role" id="" class="form-select" >
                                <option value="ADMIN">ADMIN</option>
                                <option value="USER">USER</option>
                            </select>
                            <label for="floatingPassword">Role</label>

                        </div>
                        
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

  @include('Admin.pages.js')
</body>

</html>