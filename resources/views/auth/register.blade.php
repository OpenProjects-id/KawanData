<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Login KawanData</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

      <link rel="icon" href="{{ asset('images/icon.png') }}">
    </head>
    <body>
       <section class="h-100 w-100" style="box-sizing: border-box; background-color: #7839F3">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .btn-google {
        border: 2px solid #E7E5F4;
        border-radius: 50px;
        background-color: white;
        padding: 0.75rem 1rem;
      }  

      .content-3-5 .btn:focus,
      .content-3-5 .btn:active {
        outline: none !important;
      }

      .content-3-5 .width-left {
        width: 0%;
        background-color: #7839F3 !important;
      }

      .content-3-5 .width-right {
        width: 100%;
        height: 100%;
        padding: 8rem 2rem;
        background-color: #fcfdff;
      }

      .content-3-5 .centered {
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
      }

      .content-3-5 .right {
        width: 100%;
      }

      .content-3-5 .title-text {
        font: 600 1.875rem/2.25rem Poppins, sans-serif;
        margin-bottom: 0.75rem;
      }

      .content-3-5 .caption-text {
        font: 400 0.875rem/1.75rem Poppins, sans-serif;
        color: #a8adb7;
      }

      .content-3-5 .input-label {
        font: 500 1.125rem/1.75rem Poppins, sans-serif;
        color: #39465b;
      }

      .content-3-5 .div-input {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.25rem;
        margin-top: 0.75rem;
        border-radius: 50px;
        border: 1px solid #cacbce;
        color: #2a3240;
        transition: 0.3s;
      }

      .content-3-5 .div-input:focus-within {
        border: 1px solid #7839F3;
        color: #2a3240;
        transition: 0.3s;
      }

      .content-3-5 .div-input input::placeholder {
        color: #cacbce;
        transition: 0.3s;
      }

      .content-3-5 .div-input:focus-within input::placeholder {
        color: #2a3240;
        outline: none;
        transition: 0.3s;
      }

      .content-3-5 .div-input .icon-toggle-empty-3-5 path,
      .content-3-5 .div-input:focus-within .icon path {
        transition: 0.3;
        fill: #7839F3;
        transition: 0.3s;
      }

      .content-3-5 .input-field {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        width: 100%;
        background-color: #fcfdff;
        transition: 0.3s;
      }

      .content-3-5 .input-field:focus {
        outline: none;
        transition: 0.3s;
      }

      .content-3-5 .forgot-password {
        font: 400 0.875rem/1.25rem Poppins, sans-serif;
        color: #cacbce;
        transition: 0.3s;
        text-decoration: none;
      }

      .content-3-5 .forgot-password:hover {
        color: #2a3240;
      }

      .content-3-5 .btn-fill {
        font: 500 1.25rem/1.75rem Poppins, sans-serif;
        background-color: #7839F3;
        padding: 0.75rem 1rem;
        margin-top: 2.25rem;
        border-radius: 50px;
        transition: 0.5s;
      }

      .content-3-5 .btn-fill:hover {
        background-image: linear-gradient(#2ec49c, #2ec49c);
        transition: 0.5s;
      }

      .content-3-5 .bottom-caption {
        font: 400 0.875rem/1.25rem Poppins, sans-serif;
        margin-top: 2rem;
        color: #2a3240;
      }

      .content-3-5 .green-bottom-caption {
        color: #7839F3;
        font-weight: 500;
      }

      .content-3-5 .green-bottom-caption:hover {
        color: #2ec49c;
        cursor: pointer;
        text-decoration: underline;
      }

      @media (min-width: 576px) {
        .content-3-5 .width-right {
          padding: 8rem 4rem;
        }

        .content-3-5 .right {
          width: 58.333333%;
        }
      }

      @media (min-width: 768px) {
        .content-3-5 .right {
          width: 66.666667%;
        }
      }

      @media (min-width: 992px) {
        .content-3-5 .width-left {
          width: 48%;
        }

        .content-3-5 .width-right {
          width: 52%;
        }

        .content-3-5 .right {
          width: 75%;
        }
      }

      @media (min-width: 1200px) {
        .content-3-5 .right {
          width: 58.333333%;
        }
      }
    </style>
    <div class="content-3-5 d-flex flex-column align-items-center h-100 flex-lg-row"
      style="font-family: 'Poppins', sans-serif">
      <div class="position-relative d-none d-lg-block h-100 width-left" style="background-color: #7839F3;">
        <img class="position-absolute img-fluid centered"
          src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-5.png"
          alt="" />
      </div>
      <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0">
        <div class="right mx-lg-0 mx-auto">
          <div class="align-items-center justify-content-center d-lg-none d-flex">
            <img class="img-fluid"
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-5.png"
              alt="" />
          </div>
          <img src="{{ asset('images/logo.png') }}" alt="" width="410px" height="80px" class="mb-5">
          <h3 class="title-text">Silahkan Mendaftar Akun KawanData</h3>
          <p class="caption-text">
            Lengkapi form di bawah dengan
            <br />
            menggunakan data Anda yang valid
          </p>
          <form style="margin-top: 1.5rem" action="" method="post">
            <div style="margin-bottom: 1.75rem">
              <label for="" class="d-block input-label">Nama</label>
              <div class="d-flex w-100 div-input">
                <i class="fas fa-id-card-alt icon mt-1" style="margin-right: 1rem; color: #CACBCE"></i>
                <input class="input-field border-0" type="email" name="" id="" placeholder="Nama Lengkap"
                  autocomplete="on" required />
              </div>
            </div>
            <div style="margin-bottom: 1.75rem">
              <label for="" class="d-block input-label">Alamat Email</label>
              <div class="d-flex w-100 div-input">
                <svg class="icon" style="margin-right: 1rem" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M5 5C3.34315 5 2 6.34315 2 8V16C2 17.6569 3.34315 19 5 19H19C20.6569 19 22 17.6569 22 16V8C22 6.34315 20.6569 5 19 5H5ZM5.49607 7.13174C5.01655 6.85773 4.40569 7.02433 4.13168 7.50385C3.85767 7.98337 4.02427 8.59422 4.50379 8.86823L11.5038 12.8682C11.8112 13.0439 12.1886 13.0439 12.4961 12.8682L19.4961 8.86823C19.9756 8.59422 20.1422 7.98337 19.8682 7.50385C19.5942 7.02433 18.9833 6.85773 18.5038 7.13174L11.9999 10.8482L5.49607 7.13174Z"
                    fill="#CACBCE" />
                </svg>
                <input class="input-field border-0" type="email" name="" id="" placeholder="Masukkan Alamat Email"
                  autocomplete="on" required />
              </div>
            </div>
            <div style="margin-top: 1rem">
              <label for="" class="d-block input-label">Kata Sandi</label>
              <div class="d-flex w-100 div-input">
                <svg class="icon" style="margin-right: 1rem" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7.81592 4.25974C7.12462 5.48872 7 6.95088 7 8H6C4.34315 8 3 9.34315 3 11V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V11C21 9.34315 19.6569 8 18 8L17 7.99998C17 6.95087 16.8754 5.48871 16.1841 4.25973C15.829 3.62845 15.3194 3.05012 14.6031 2.63486C13.8875 2.22005 13.021 2 12 2C10.979 2 10.1125 2.22005 9.39691 2.63486C8.68058 3.05012 8.17102 3.62845 7.81592 4.25974ZM9.55908 5.24026C9.12538 6.01128 9 7.04912 9 8H15C15 7.04911 14.8746 6.01129 14.4409 5.24027C14.2335 4.87155 13.9618 4.57488 13.6 4.36514C13.2375 4.15495 12.729 4 12 4C11.271 4 10.7625 4.15495 10.4 4.36514C10.0382 4.57488 9.76648 4.87155 9.55908 5.24026ZM14 14C14 14.7403 13.5978 15.3866 13 15.7324V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V15.7324C10.4022 15.3866 10 14.7403 10 14C10 12.8954 10.8954 12 12 12C13.1046 12 14 12.8954 14 14Z"
                    fill="#CACBCE" />
                </svg>
                <input class="input-field border-0" type="password" name="" id="password-content-3-5"
                  placeholder="Masukkan Kata Sandi" minlength="6" required />
                <div onclick="togglePassword()">
                  <svg style="margin-left: 0.75rem; cursor: pointer" width="20" height="14" viewBox="0 0 20 14"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="icon-toggle" fill-rule="evenodd" clip-rule="evenodd"
                      d="M0 7C0.555556 4.66667 3.33333 0 10 0C16.6667 0 19.4444 4.66667 20 7C19.4444 9.52778 16.6667 14 10 14C3.31853 14 0.555556 9.13889 0 7ZM10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9C11.1046 9 12 8.10457 12 7C12 6.90536 11.9934 6.81226 11.9807 6.72113C12.2792 6.89828 12.6277 7 13 7C13.3608 7 13.6993 6.90447 13.9915 6.73732C13.9971 6.82415 14 6.91174 14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C10.6389 3 11.2428 3.14979 11.7786 3.41618C11.305 3.78193 11 4.35535 11 5C11 5.09464 11.0066 5.18773 11.0193 5.27887C10.7208 5.10171 10.3723 5 10 5Z"
                      fill="#CACBCE" />
                  </svg>
                </div>
              </div>
            </div>
            <button class="btn btn-fill text-white d-block w-100" type="submit">
              Daftar Sekarang
            </button>
            <hr>
            {{--  --}}
            <a class="btn btn-google d-block w-100 mt-3" type="submit" href="{{ route('user.login.google') }}">
                <img src="{{ asset('images/ic_google.svg') }}" class="icon" style="margin-right: 0.5em;">
                Masuk dengan Google
            </a>
            {{--  --}}
          </form>
          <p class="text-center bottom-caption">
            Sudah punya akun?
            <a href="{{ route('login') }}" style="text-decoration: none;"><span class="green-bottom-caption">Masuk Disini</span></a>
          </p>
        </div>
      </div>
    </div>

    <!-- Password toggle -->
    <script>
      function togglePassword() {
        var x = document.getElementById("password-content-3-5");
        if (x.type === "password") {
          x.type = "text";
          document
            .getElementById("icon-toggle")
            .setAttribute("fill", "#2ec49c");
        } else {
          x.type = "password";
          document
            .getElementById("icon-toggle")
            .setAttribute("fill", "#CACBCE");
        }
      }
    </script>
  </section> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>