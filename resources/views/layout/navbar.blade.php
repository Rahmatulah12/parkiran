<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
             <li class="nav-item active">
                 <a class="nav-link" href="{{ url('/') }}">Home</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{ url('/about') }}">About</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{ url('/mahasiswa') }}">Mahasiswa</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{ url('/students') }}">Students</a>
             </li>
             </ul>
         </div>
    </div> 
 </nav>