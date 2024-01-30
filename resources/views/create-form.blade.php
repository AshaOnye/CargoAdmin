<!-- In create-form.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Parcel Form</title>
</head>
<body>

<h2>Create Parcel</h2>

<form action="{{ route('store-parcel') }}" method="post">
    @csrf
    <label for="trackingId">Tracking ID:</label>
    <input type="text" name="trackingId" required>

    <label for="shipmentType">Shipment Type:</label>
    <input type="text" name="shipmentType" required>

    <label for="senderInfo">Sender Info (JSON):</label>
    <textarea name="senderInfo" required></textarea>

    <label for="receiverInfo">Receiver Info (JSON):</label>
    <textarea name="receiverInfo" required></textarea>

    <label for="itemDetails">Item Details (JSON):</label>
    <textarea name="itemDetails" required></textarea>

    <button type="submit">Submit</button>
</form>

</body>
</html>
