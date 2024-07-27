@extends('layouts.front.app')

@section('title', 'Coming Soon')

@section('content')

    <section style="background-color: #191919 !important;" id="count-down" class="count-down pt-5 pb-5 w-100 overflow-hidden m-auto">
        <main class="container-fluid position-relative">
            <div class="row w-50 m-auto gx-5">
                <div class="col-md-3">
                    <div class="count-down-box text-center">
                        <div class="days d-flex justify-content-center align-items-center">
                            <div class="content-section__title ui heading size-heading_1 text-white number">360D</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="count-down-box text-center">
                        <div class="hours d-flex justify-content-center align-items-center">
                            <div class="content-section__title ui heading size-heading_1 text-white number">22H</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="count-down-box text-center">
                        <div class="minutes d-flex justify-content-center align-items-center">
                            <div class="content-section__title ui heading size-heading_1 text-white number">39M</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="count-down-box text-center">
                        <div class="seconds d-flex justify-content-center align-items-center">
                            <div class="content-section__title ui heading size-heading_1 text-white number">42S</div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <h4 class="w-50 m-auto text-center content-section__subtitle ui heading size-headingmd">Stay Tuned for Our
                Exciting New Launch!</h4>
            <br>
            <br>
            <p class="w-50 text-center m-auto content-section__description fs-6">
                An interior design agency can create content that showcases its work, highlights design trends, and provides
                educational resources for clients and followers. Some potential content ideas for an interior design agency.
                An interior design agency can create content that showcases its work.
            </p>
        </main>
    </section>

@endsection

@section('js')
    <script>
        // Create a new date for the event
        var eventDate = new Date();
        eventDate.setDate(eventDate.getDate() + 360);
        eventDate.setHours(eventDate.getHours() + 22);
        eventDate.setMinutes(eventDate.getMinutes() + 40);
        eventDate.setSeconds(eventDate.getSeconds() + 30);

        // Update the countdown every second
        let x = setInterval(function() {
            var currentDate = new Date();
            var timeDifference = eventDate.getTime() - currentDate.getTime(); // difference in milliseconds

            // Calculate days, hours, minutes, and seconds
            var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            // Update the countdown display
            document.querySelector(".days .number").textContent = days + "D";
            document.querySelector(".hours .number").textContent = hours + "H";
            document.querySelector(".minutes .number").textContent = minutes + "M";
            document.querySelector(".seconds .number").textContent = seconds + "S";

            // If the countdown is over, stop the interval
            if (timeDifference < 0) {
                clearInterval(x);
                // Display a message or take action when the countdown is over
            }
        }, 1000);

        document.getElementById("typing").addEventListener("keyup", function(e) {
            var count = this.value.length;
            console.log(count);
            document.getElementById("chars").textContent = 100 - count;
        });
    </script>
@endsection
