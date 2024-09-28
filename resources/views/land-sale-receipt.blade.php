<!DOCTYPE html>
<html>
<head>
    <title>Land Sale Receipt</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 20px; }
        .content { margin: 0 50px; }
        .footer { margin-top: 50px; }
        .signature-section { margin-top: 40px; }
        .signature-line { border-top: 1px solid #000; width: 200px; margin-top: 10px; }
        .signature-label { font-size: 14px; margin-top: 5px; }
        .signature-block { display: flex; justify-content: space-between; margin-bottom: 40px; }
        .signature-item { text-align: center; }
    </style>
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
        <p><strong>Sale Amount:</strong> ₦{{ number_format($sale_amount, 2) }}</p>
        <p><strong>Sale Date:</strong> {{ $sale_date }}</p>

        <h4>Witnesses:</h4>
        <ul>
            @foreach($witnesses as $witness)
                @if($witness)
                    <li>{{ $witness }}</li>
                @endif
            @endforeach
        </ul>

        <!-- Signature Section -->
        <div class="signature-section">
            <h4>Signatures:</h4>

            <!-- Buyer and Seller Signature -->
            <div class="signature-block">
                <div class="signature-item">
                    <p class="signature-label">Buyer Signature</p>
                    <div class="signature-line"></div>
                    <p>{{ $buyer_name }}</p>
                </div>

                <div class="signature-item">
                    <p class="signature-label">Seller Signature</p>
                    <div class="signature-line"></div>
                    <p>{{ $seller_name }}</p>
                </div>
            </div>

            <!-- Witness Signatures -->
            <div class="signature-block">
                @foreach($witnesses as $witness)
                    @if($witness)
                        <div class="signature-item">
                            <p class="signature-label">Witness Signature</p>
                            <div class="signature-line"></div>
                            <p>{{ $witness }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Thank you for your business!</p>
        </div>
    </div>
</body>
</html>
