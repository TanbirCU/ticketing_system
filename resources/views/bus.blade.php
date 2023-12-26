<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        *, *:before, *:after {
      box-sizing: border-box;
    }
    
    html {
      font-size: 16px;
    }
    
    .plane {
      margin: 20px auto;
      max-width: 300px;
    }
    
    .exit {
      position: relative;
      height: 50px;
    }
    .exit:before, .exit:after {
      content: "EXIT";
      font-size: 14px;
      line-height: 18px;
      padding: 0px 2px;
      font-family: "Arial Narrow", Arial, sans-serif;
      display: block;
      position: absolute;
      background: green;
      color: white;
      top: 50%;
      transform: translate(0, -50%);
    }
    .exit:before {
      left: 0;
    }
    .exit:after {
      right: 0;
    }
    
    .fuselage {
      border-right: 5px solid #d8d8d8;
      border-left: 5px solid #d8d8d8;
    }
    
    ol {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    .seats {
      display: flex;
      flex-direction: row;
      flex-wrap: nowrap;
      justify-content: flex-start;
    }
    
    .seat {
      display: flex;
      flex: 0 0 14.28571428571429%;
      padding: 5px;
      position: relative;
    }
    .seat:nth-child(3) {
      margin-right: 14.28571428571429%;
    }
    .seat input[type=checkbox] {
      position: absolute;
      opacity: 0;
    }
    .seat input[type=checkbox]:checked + label {
      background: #bada55;
      -webkit-animation-name: rubberBand;
      animation-name: rubberBand;
      animation-duration: 300ms;
      animation-fill-mode: both;
    }
    .seat input[type=checkbox]:disabled + label {
      background: #dddddd;
      text-indent: -9999px;
      overflow: hidden;
    }
    .seat input[type=checkbox]:disabled + label:after {
      content: "X";
      text-indent: 0;
      position: absolute;
      top: 4px;
      left: 50%;
      transform: translate(-50%, 0%);
    }
    .seat input[type=checkbox]:disabled + label:hover {
      box-shadow: none;
      cursor: not-allowed;
    }
    .seat label {
      display: block;
      position: relative;
      width: 100%;
      text-align: center;
      font-size: 14px;
      font-weight: bold;
      line-height: 1.5rem;
      padding: 4px 0;
      background: #1ff4bb;
      border-radius: 5px;
      animation-duration: 300ms;
      animation-fill-mode: both;
    }
    .seat label:before {
      content: "";
      position: absolute;
      width: 75%;
      height: 75%;
      top: 1px;
      left: 50%;
      transform: translate(-50%, 0%);
      background: rgba(255, 255, 255, 0.4);
      border-radius: 3px;
    }
    .seat label:hover {
      cursor: pointer;
      box-shadow: 0 0 0px 2px #5C6AFF;
    }
    
    @-webkit-keyframes rubberBand {
      0% {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
      }
      30% {
        -webkit-transform: scale3d(1.25, 0.75, 1);
        transform: scale3d(1.25, 0.75, 1);
      }
      40% {
        -webkit-transform: scale3d(0.75, 1.25, 1);
        transform: scale3d(0.75, 1.25, 1);
      }
      50% {
        -webkit-transform: scale3d(1.15, 0.85, 1);
        transform: scale3d(1.15, 0.85, 1);
      }
      65% {
        -webkit-transform: scale3d(0.95, 1.05, 1);
        transform: scale3d(0.95, 1.05, 1);
      }
      75% {
        -webkit-transform: scale3d(1.05, 0.95, 1);
        transform: scale3d(1.05, 0.95, 1);
      }
      100% {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
      }
    }
    @keyframes rubberBand {
      0% {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
      }
      30% {
        -webkit-transform: scale3d(1.25, 0.75, 1);
        transform: scale3d(1.25, 0.75, 1);
      }
      40% {
        -webkit-transform: scale3d(0.75, 1.25, 1);
        transform: scale3d(0.75, 1.25, 1);
      }
      50% {
        -webkit-transform: scale3d(1.15, 0.85, 1);
        transform: scale3d(1.15, 0.85, 1);
      }
      65% {
        -webkit-transform: scale3d(0.95, 1.05, 1);
        transform: scale3d(0.95, 1.05, 1);
      }
      75% {
        -webkit-transform: scale3d(1.05, 0.95, 1);
        transform: scale3d(1.05, 0.95, 1);
      }
      100% {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
      }
    }
    .rubberBand {
      -webkit-animation-name: rubberBand;
      animation-name: rubberBand;
    }
    
        </style>
</head>


<body>

    <Section class="py-5">
        <div class="container">
            <div class="row" >
                <nav class="navbar navbar-expand-lg navbar-light bg-success">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Navbar</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </Section>

    <section>
      @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
      @endif
      <form action="{{ route('add_schedule') }}" method="post">
            @csrf
            <div class="container">
                <div class="row col-md-12" >
                {{-- <form> --}}
                <div class="col-md-6" style="background-color: rgb(96, 123, 201)">
                    <div class="form-group col-md-10 py-3" style="margin-left: 10px">
                        <label>Your Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Type Name">
                    </div>
                    <div class="form-group col-md-10 py-3" style="margin-left: 10px">
                        <label>Mobile</label>
                        <input type="number" name="mobile" class="form-control" placeholder="Mobile">
                    </div>
                    <div class="form-group col-md-10 py-3" style="margin-left: 10px">
                        <label for="exampleFormControlSelect1">From</label>
                        <select class="form-control" name="from" id="exampleFormControlSelect1">
                            <option>---Select Destination---</option>
                            <option value="Dhaka"> Dhaka</option>
                            <option value="comilla"> Comilla</option>
                            <option value="chittagong">Chittagong</option>
                            <option value="coxbazar">Cox's Bazaar</option>
                        </select>
                    </div>
                    <div class="form-group col-md-10 py-3" style="margin-left: 10px">
                        <label for="exampleFormControlSelect1">To</label>
                        <select class="form-control" name="to" id="exampleFormControlSelect1">
                            <option>---Select Destination---</option>
                            <option value="comilla"> Comilla</option>
                            <option value="chittagong">Chittagong</option>
                            <option value="coxbazar">Cox's Bazaar</option>
                        </select>
                        </div>
                    <div class="form-group col-md-5 py-3" id="selectDate" style="margin-left: 10px">
                        <label>Select Date</label>
                        <input type="date" name="date" class="form-control" id="selectDateInput" placeholder="name@example.com">
                    </div>
                </div>
                    
                <div class="plane">
                    <h3>Choese Seet</h3>
                    <div class="fuselage" >
                    
                    </div>
                    <ol class="cabin fuselage" id="seatMap">
                      <li class="row row--1">
                        <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="1A"  id="1A"  />
                            <label for="1A">1A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="1B" id="1B"  />
                            <label for="1B">1B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="1C" id="1C"  />
                            <label for="1C">1C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="1D" id="1D" />
                            <label for="1D">1D</label>
                        </li>
                        </ol>
                    </li>
                    <li class="row row--2">
                        <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="2A" id="2A" />
                            <label for="2A">2A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="2B" id="2B" />
                            <label for="2B">2B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="2C" id="2C" />
                            <label for="2C">2C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="2D" id="2D" />
                            <label for="2D">2D</label>
                        </li>
                        
                        </ol>
                    </li>
                    <li class="row row--3">
                        <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="3A" id="3A" />
                            <label for="3A">3A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="3B" id="3B" />
                            <label for="3B">3B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="3C" id="3C" />
                            <label for="3C">3C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="3D" id="3D" />
                            <label for="3D">3D</label>
                        </li>
                        
                        </ol>
                    </li>
                    <li class="row row--4">
                        <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="4A" id="4A" />
                            <label for="4A">4A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="4B" id="4B" />
                            <label for="4B">4B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="4C" id="4C" />
                            <label for="4C">4C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="4D" id="4D" />
                            <label for="4D">4D</label>
                        </li>
                        
                        </ol>
                    </li>
                    <li class="row row--5">
                        <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="5A" id="5A" />
                            <label for="5A">5A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="5B" id="5B" />
                            <label for="5B">5B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="5C" id="5C" />
                            <label for="5C">5C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="5C" id="5C" />
                            <label for="5D">5D</label>
                        </li>
                        
                        </ol>
                    </li>
                    <li class="row row--6">
                        <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="6A" id="6A" />
                            <label for="6A">6A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="6B" id="6B" />
                            <label for="6B">6B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="6C" id="6C" />
                            <label for="6C">6C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="6D" id="6D" />
                            <label for="6D">6D</label>
                        </li>
                        
                        </ol>
                    </li>
                    <li class="row row--7">
                        <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="7A" id="7A" />
                            <label for="7A">7A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="7B" id="7B" />
                            <label for="7B">7B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="7C" id="7C" />
                            <label for="7C">7C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="7D" id="7D" />
                            <label for="7D">7D</label>
                        </li>
                        
                        </ol>
                    </li>
                    <li class="row row--8">
                        <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="8A" id="8A" />
                            <label for="8A">8A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="8B" id="8B" />
                            <label for="8B">8B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="8C" id="8C" />
                            <label for="8C">8C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="8D" id="8D" />
                            <label for="8D">8D</label>
                        </li>
                        
                        </ol>
                    </li>
                    <li class="row row--9">
                        <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="9A" id="9A" />
                            <label for="9A">9A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="9B" id="9B" />
                            <label for="9B">9B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="9C" id="9C" />
                            <label for="9C">9C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="seatSelect[]" value="9D" id="9D" />
                            <label for="9D">9D</label>
                        </li>
                        
                        </ol>
                    </li>
                    </ol>
                    <div class="fuselage">
                    
                    </div>
                    
                </div>
                {{-- </form> --}}
            </div>
        </div>
        <div class="container">
            <div class="row" >
                <div class="col-md-10" id="scheduleForm">
                </div>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>
</html>
<!-- Uncomment this script section -->
<script>
  $(document).ready(function () {
      $('#selectDateInput').on('change', function () {
          var selectedDate = $(this).val();

          // Make an AJAX request to check seat availability
          $.ajax({
              type: 'GET',
              url: '{{ route("checkSeatAvailability") }}',
              data: { date: selectedDate },
              success: function (response) {
                  // disableBookedSeats(JSON.parse(response[0]));
                  disableBookedSeats(response.bookedSeats);
              },
              error: function (error) {
                  console.log(error);
              }
          });
      });

      function disableBookedSeats(bookedSeats) {
          $('input[name="seatSelect[]"]').prop('disabled', false);
          // const seats =JSON.parse(bookedSeats);
          // console.log(seats);
          // $.each(bookedSeats, function (index, seatArray) {
          //   try {
          //     console.log(222);
          //       // Parse the JSON-encoded string into an array
          //       const seats = JSON.parse(seatArray);

          //       // Disable checkboxes for each booked seat
          //       $.each(seats, function (index, seat) {
          //           $('input[name="seatSelect[]"][value="' + seat + '"]').prop('disabled', true);
          //       });
          //   } catch (error) {
          //       console.error('Error parsing JSON:', error);
          //   }
          // });
          $.each(bookedSeats, function (index, seat) {
               console.log('Disabling seat:', seat);
              // $('input[name="seatSelect[]"][value="' + seat + '"]').prop('disabled', true);
              
          });
      }

  });
</script>


