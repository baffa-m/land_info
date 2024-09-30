<!DOCTYPE html>
<html>
<head>
    <title>Land Sale Receipt</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 20px; }
        .content { margin: 0 50px; }
        .footer { margin-top: 50px; }
        .signature-block {
            display: flex;
            justify-content: space-between; /* Place items at the edges */
            width: 100%;
            margin-top: 50px;
        }

        .signature-item {
            width: 45%; /* Each signature takes 45% of the width */
            text-align: center; /* Center-align text within each block */
        }

        .signature-label {
            font-size: 1rem;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .signature-line {
            border-bottom: 1px solid black;
            margin-bottom: 10px;
            height: 2px;
        }

        .signature-name {
            margin-top: 10px;
            font-weight: normal;
            font-size: 1rem;
        }

        .witness-table {
            width: 100%;
            border-collapse: collapse; /* Ensures no gaps between table cells */
        }

        .witness-name {
            padding-right: 200px; /* Adds space between name and line */
            font-weight: bold;
            text-align: left; /* Align name to the left */
            white-space: nowrap; /* Prevents names from breaking into multiple lines */
        }

        .witness-line {
            border-bottom: 1px solid black; /* Creates the line */
            width: 30%; /* Makes the line span the available space */
        }

    </style>

    <link href="{{ asset('assets/css/bootstrap-green.min.css') }}" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css" />

</head>
<body>
    <div class="header">
        <h1>Land Sale Receipt</h1>
        <p>Receipt No: {{ $receipt_no }}</p>
    </div>

    <div class="content">
        <p><strong>Buyer Name:</strong> {{ $buyer_name }}</p>
        <p><strong>Seller Name:</strong> {{ $seller_name }}</p>
        <p><strong>Plot No:</strong> {{ $land_record }}</p>
        <p><strong>Sale Amount:</strong>₦ {{ number_format($sale_amount, 2) }}</p>
        <p><strong>Sale Date:</strong> {{ $sale_date }}</p>

        <h4>Witnesses:</h4>
        <table class="witness-table">
            @foreach($witnesses as $witness)
                @if($witness)
                    <tr style="margin-bottom: 20px">
                        <td class="witness-name" style="margin-bottom: 20px;">{{ $witness }}</td>
                        <td class="witness-line" style="margin-bottom: 20px;"></td>
                    </tr>
                @endif
            @endforeach
        </table>



        <!-- Signature Section -->
        <div class="signature-section">
            <h4>Signatures:</h4>

            <!-- Buyer and Seller Signature using a table -->
            <table style="width: 100%; margin-top: 50px;">
                <tr>
                    <td style="text-align: left;">
                        <div class="signature-line" style="width: 80%; border-bottom: 1px solid black; height: 2px;"></div>
                        <p class="signature-name">{{ $buyer_name }}</p>
                    </td>

                    <td style="text-align: right;">
                        <div class="signature-line" style="width: 100%; border-bottom: 1px solid black; height: 2px;"></div>
                        <p class="signature-name">{{ $seller_name }}</p>
                    </td>
                </tr>
            </table>


        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Thank you for Trusting Us!</p>
        </div>
    </div>
</body>
</html>
