<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ticket Sales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card" style="width: 18rem; margin: 0 auto;">
            <img src="{{ asset('assets/logo.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <!-- Information Table -->
                <div class="mb-3">
                    <div>
                        <label  class="font-weight-bold">From:</label> <span>{{ $ticket->from_station }}</span>
                    </div>
                    <div >
                        <label  class="font-weight-bold">To:</label> <span>{{ $ticket->to_st_name }}</span>
                    </div>
                    <div><label  class="font-weight-bold">Fare:</label> <span>{{ $ticket->fare }}</span></div>
                    <div><label  class="font-weight-bold">Journey Date:</label> <span>{{ $ticket->issue_date }}</span></div>
                    <div><label class="font-weight-bold">Mobile Number:</label> <span>{{ $ticket->mobile_no }}</span></div>
                    <div><label class="font-weight-bold">Ticket Number:</label> <span>{{ $ticket->tkt_no }}</span></div>
                    <div><label class="font-weight-bold">Payment Mode:</label> <span>{{ $ticket->pay_mode }}</span></div>
                    <div><label class="font-weight-bold">Payment Bank:</label> <span>{{ $ticket->pay_bank }}</span></div>
                </div>
            </div>

            <div class="card-body text-center">
                <!-- QR Code -->
                <div class="d-flex justify-content-center">
                    <div class="col-md-4">
                        {!! \DNS2D::getBarcodeHTML(json_encode($ticket), 'QRCODE', 3, 3) !!}
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>
</html>
