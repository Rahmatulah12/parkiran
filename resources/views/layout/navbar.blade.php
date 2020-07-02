<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
             <li class="nav-item{{request()->is('/')? ' active' : ''}}">
                 <a class="nav-link" href="{{ url('/') }}">Customer</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link{{request()->is('/create')? ' active' : ''}}" href="{{ url('/create') }}">
                    Add Customer
                </a>
             </li>
             <li class="nav-item{{request()->is('/transaction')? ' active' : ''}}">
                 <a class="nav-link" href="{{ url('/transaction') }}">
                    Transaction
                </a>
             </li>
             </ul>
         </div>
    </div> 
 </nav>