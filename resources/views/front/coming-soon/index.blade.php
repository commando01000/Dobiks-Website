@extends('layouts.front.app')

@section('title', 'Coming Soon')

@section('content')

    <section id="count-down" class="count-down overflow-hidden m-auto">
        <div class="container position-relative">
            <div class="timer d-flex justify-content-evenly position-absolute">
                <div class="row gx-5">
                    <div class="col-md-3">
                        <div class="count-down-box text-center">
                            <div class="days d-flex justify-content-center align-items-center">
                                <div class="text-white number"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="count-down-box text-center">
                            <div class="hours d-flex justify-content-center align-items-center">
                                <div class="text-white number"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="count-down-box text-center">
                            <div class="minutes d-flex justify-content-center align-items-center">
                                <div class="text-white number"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="count-down-box text-center">
                            <div class="seconds d-flex justify-content-center align-items-center">
                                <div class="text-white number"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
