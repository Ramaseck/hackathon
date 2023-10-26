

@extends('layouts.app')
@section('content')
    <div class="container" style="background-color:white;">
        <div class="row">
            <div class=" col col-sm-1"  > <br> <br> <br> <br>
                <a href="/dashboard"><i class="fa fa-tachometer" aria-hidden="true" title="dashboard"></i></a><br><br> 
                <a href="/cour"><i class="fa fa-book" aria-hidden="true" title="Cours"></i></a> <br> <br> 
                <a href="/prof"><i class="fa fa-user" aria-hidden="true" title="professeurs"></i></a> <br> <br> 

                <a href="/apprenant"><i class="fa fa-graduation-cap" aria-hidden="true" title="Apprenant"></i>
                </a>
            </div>
            <div class="col-sm-8" style=" height: 100%; border-radius:22px 0px 0px 0px; background-color:rgb(245,255,250)"> <br>
                <div class="container " style="margin-left:40px">
                    <form action="" >
                        <div>
                        <input type="seach" placeholder="search" style="width:60%;padding:5px "  >
                        <input type="submit" value="Study now" style="margin-left: 30px;">
                        </div>
                    </form> <br> <br>

                    @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif


                    <div class="card mb-3" style="max-width: 540px; height:30%; background-color:rgb(255,192,203)" id="date8">
                        <div class="row g-0" >
                            <div class="col-md-2" >
                                <img src="{{asset('asset/img.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <p class="card-text">
                                        
                                    
                                   
                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                
                    <div class="card mb-3" style="max-width: 540px; height:30%; background-color:rgb(176,224,230);" id="date17">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="{{asset('asset/img.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additiona.</p>
       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px; height:30%; background-color:rgb(230,230,250);">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="{{asset('asset/img.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additiona.</p>
       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px; height:30%; background-color:rgb(255,222,173);">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="{{asset('asset/img.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additiona.</p>
       
                                </div>
                            </div>
                        </div>
                    </div>
                <div style="display: flex; gap :40%; ">
                <h3>Top Teacher</h3>
                <h3 ><a href="">view all</a></h3>
                </div>
                <div style="display: flex; gap:20px;">
                <div class="image-container">
                    <a href=""><img src="{{asset('asset/perso1.jfif')}}" alt="Image"></a>
                    <div class="details">
                        <p>Cliquez pour voir les détails</p>
                        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                </div>
                <div class="image-container">
                    <img src="{{asset('asset/perso2.jfif')}}" alt="Image">
                    <div class="details">
                        <p>Cliquez pour voir les détails</p>
                        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                </div>

                <div class="image-container">
                    <img src="{{asset('asset/perso3.jpeg')}}" alt="Image">
                    <div class="details">
                        <p>Cliquez pour voir les détails</p>
                        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                </div>
                <div class="image-container">
                    <img src="{{asset('asset/perso4.jfif')}}" alt="Image">
                    <div class="details">
                        <p>Cliquez pour voir les détails</p>
                        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                </div>

                <div class="image-container">
                    <img src="{{asset('asset/perso5.jfif')}}" width="10px" height="10px">
                    <div class="details">
                        <p>Cliquez pour voir les détails</p>
                        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                </div>
            </div>
            </div>
            </div>

            <div class="col-sm-3" style="background-color:white; border-radius:22px 0px 0px 0px; box-shadow:0px 15px 15px 0px gray; " >

            <!--calendrier-->
            <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="calendar">
        <div class="month">Janvier 2023</div>
        <table>
            <tr>
                <th>Dim</th>
                <th>Lun</th>
                <th>Mar</th>
                <th>Mer</th>
                <th>Jeu</th>
                <th>Ven</th>
                <th>Sam</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr>
                <td>6</td>
                <td>7</td>
                <td><a href="#date8" title="cours java">8</a></td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
            </tr>
            <tr>
                <td>13</td>
                <td>14</td>
                <td>15</td>
                <td>16</td>
                <td><a href="#date17">17</a></td>
                <td>18</td>
                <td>19</td>
            </tr>
            <tr>
                <td>20</td>
                <td>21</td>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
            </tr>
            <tr>
                <td>27</td>
                <td>28</td>
                <td>29</td>
                <td>30</td>
                <td>31</td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</body>
</html>


            </div>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $("a[href^='#']").click(function() {
        var target = $($(this).attr("href"));
        if (target.length) {
            var topOffset = 10;
            var scrollDuration = 1000; // Durée de l'animation de défilement
            var blinkDuration = 400; // Durée de l'animation de clignotement

            $("html, body").animate({
                scrollTop: target.offset().top - topOffset
            }, scrollDuration, function() {
                // Une fois que le défilement est terminé, déclenchez l'animation de clignotement
                target.fadeTo(blinkDuration, 0.5).fadeTo(blinkDuration, 1.0);
            });
            
            return false;
        }
    });
});

</script>


    
                

    
     
                     
@endsection


