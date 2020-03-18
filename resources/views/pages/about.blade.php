@extends('layout.app_noSlider')
@section('title')
    About
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <img src="{{url("")}}/images/autor.jpg" alt="autor">
            </div>
            <div class="col">
                <table class="table table-dark table-hover">
                    <tbody>
                    <tr>
                        <td>Name:</td>
                        <td>Ivan</td>
                    </tr>
                    <tr>
                        <td>Surname:</td>
                        <td>Maksimović</td>
                    </tr>
                    <tr>
                        <td>Date of birth:</td>
                        <td>04.02.1997</td>
                    </tr>
                    <tr>
                        <td>Place of birth:</td>
                        <td>Belgrade, Serbia</td>
                    </tr>
                    <tr>
                        <td>Index number:</td>
                        <td>80/16</td>
                    </tr>
                    <tr>
                        <td>Contact email:</td>
                        <td><a href="mailto:ivan.maksimovic.80.16@ict.edu.rs">ivan.maksimovic.80.16@ict.edu.rs</a></td>
                    </tr>
                    </tbody>
                </table>
                <p class="text-justify">
                    I graduated from the secondary electrical school "Nikola Tesla" in Belgrade. I'm a student of the "Visoka ICT" School for Information and Communication Technologies, the direction of Internet technology...
                </p>
                <a href="https://www.linkedin.com/in/ivan-maksimovi%C4%87-31b98619b" class="btn btn-light btn-lg mt-2">
                    <i class="fab fa-linkedin"></i>
                    LinkedIn profile page
                </a>
            </div>
        </div>
    </div>
@endsection
