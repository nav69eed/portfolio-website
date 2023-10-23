 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>DashBoard</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css" />
     <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/css/utilities.css">
     <style>
         #btn-0 {
             background: transparent;
             border: none;
             color: purple;
         }

         #btn {
             height: 40px;
             width: 40px;
             margin-right: 10px;
             padding: 0;
             background: transparent;
             border: none;
             border-radius: 50%;
             overflow: hidden;
         }

         .dropstart .dropdown-menu[data-bs-popper] {
             top: 0;
             right: 90%;
             left: auto;
             margin-top: 20px;
             margin-right: var(--bs-dropdown-spacer);
         }



         /* Custom CSS for the Dashboard */
         body {
             background-color: #f5f5f5;
             font-family: Arial, sans-serif;
         }

         .container {
             margin-top: 20px;
         }

         h1 {
             text-align: center;
         }

         .messages {
             background-color: #fff;
             padding: 20px;
             border-radius: 5px;
             box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         }

         .list-group-item {
             margin-top: 10px;
             border: 1px solid #ccc;
             padding: 10px;
             border-radius: 5px;
         }

         .list-group-item:hover {
             background-color: #f5f5f5;
         }

         .messages-container {
             display: flex;
             justify-content: center;
             align-items: center;
         }




         /*
                                Meaage Card
*/
         .dismiss {
             position: absolute;
             right: 10px;
             top: 10px;
             display: flex;
             align-items: center;
             justify-content: center;
             padding: 0.5rem 1rem;
             background-color: #fff;
             color: black;
             border: 2px solid #D1D5DB;
             font-size: 1rem;
             font-weight: 300;
             width: 30px;
             height: 30px;
             border-radius: 7px;
             transition: .3s ease;
         }

         .dismiss:hover {
             background-color: var(--secondary);
             border: 2px solid var(--secondary);
             color: #fff;
         }


         .pagination {
             display: flex;
             justify-content: center;
         }

         .pagination .page-item .page-link {
             color: var(--secondary);
         }

         .pagination .page-item.active .page-link {
             color: white;
         }

         .active>.page-link,
         .page-link.active {
             background-color: var(--secondary);
             border-color: var(--secondary);
         }

         .list-group-item {
             border: none;
             border-radius: 7px !important;
background: #ffffff;
box-shadow:  5px 5px 10px #666666,
             -5px -5px 10px #ffffff;
         }
     </style>




 </head>

 <body>
     <nav class="navbar bg-body-tertiary">
         <div class="container-fluid">
             <a class="navbar-brand c-s">
                 {{ $userData->name }}
             </a>

             <div class="btn-group dropstart">
                 <button type="button" id="btn-0" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                     data-bs-toggle="dropdown" aria-expanded="false">
                     <span class="visually-hidden">Toggle Dropstart</span>
                 </button>
                 <ul class="dropdown-menu p-3">
                     <li> {{ $userData->email }} </li>
                     <li><a class="dropdown-item" href="{{ route('Logout') }}">Logout <i
                                 class="fa-duotone fa-right-from-bracket"></i></a></li>

                 </ul>
                 <button type="button" id="btn" class="btn btn-secondary">
                     <img src="{{ $userData->picture }}" alt="Logout" class="img-fluid">
                 </button>
             </div>

         </div>
     </nav>
     <div class="container ">
         <h1 class="c-s">Dashboard</h1>
         <div class="row messages-container">
             <div class="col-md-8">
                 <div class="messages">
                     <h2 class="c-a">Messages</h2>
                     <ul class="list-group">
                         @if (Session::has('success'))
                             <div class="alert alert-success" role="alert">
                                 {{ Session::get('success') }}
                             </div>
                         @endif
                         @if (Session::has('fail'))
                             <div class="alert alert-danger" role="alert">
                                 {{ Session::get('fail') }}
                             </div>
                         @endif
                         @foreach ($datas as $message)
                             <div class="">
                                 <li class="list-group-item">
                                     <button type="button" class="dismiss"><a
                                             href="{{ route('deleter', ['id' => $message->id]) }}"><i
                                                 class="fa-solid fa-xmark"></i></a></button>

                                     <strong class="c-s">Name: </strong><span
                                         class="c-s">{{ $message->name }}</span><br>
                                     <strong class="c-a">Email: </strong><span
                                         class="c-a">{{ $message->email }}</span><br>
                                     <strong class="c-s">Phone No: </strong><span
                                         class="c-s">{{ $message->topic }}</span><br>
                                     <strong class="">Message: </strong><span class="">
                                         {{ $message->message }}</span><br>
                                     <div class="">
                                         <a href="mailto:{{ $message->email }}" class="btn btn-primary mt-3"
                                             target="_blank">Send an Email</a>
                                         <a href="https://wa.me/{{ $message->topic }}" class="btn btn-primary mt-3"
                                             target="_blank">Send Whatsapp Message</a>
                                     </div>
                                 </li>

                             </div>
                         @endforeach
                     </ul>
                     <div class="pagination mt-5">
                         {{ $datas->links() }}
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
 </script>

 </html>
