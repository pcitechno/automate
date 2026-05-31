<!-- resources/views/commissions/search_results.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
        h2 {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <h1>Search Results</h1>

    <h2>BM Commissions</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Trainer ID</th>
            <th>Reference ID</th>
            <!-- Add other columns here as needed -->
        </tr>
        @forelse ($bmCommissions as $bm)
        <tr>
            <td>{{ $bm->id }}</td>
            <td>{{ $bm->trainer_id }}</td>
            <td>{{ $bm->reference_id }}</td>
            <!-- Display other columns here -->
        </tr>
        @empty
        <tr>
            <td colspan="3">No data found for BM Commissions</td>
        </tr>
        @endforelse
    </table>

    <h2>Final CM Commissions</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Trainer ID</th>
            <th>Reference ID</th>
            <!-- Add other columns here as needed -->
        </tr>
        @forelse ($finalCmCommissions as $cm)
        <tr>
            <td>{{ $cm->id }}</td>
            <td>{{ $cm->trainer_id }}</td>
            <td>{{ $cm->reference_id }}</td>
            <!-- Display other columns here -->
        </tr>
        @empty
        <tr>
            <td colspan="3">No data found for Final CM Commissions</td>
        </tr>
        @endforelse
    </table>

    <h2>Circular Commissions</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Trainer ID</th>
            <th>Reference ID</th>
            <!-- Add other columns here as needed -->
        </tr>
        @forelse ($circularCommissions as $circular)
        <tr>
            <td>{{ $circular->id }}</td>
            <td>{{ $circular->trainer_id }}</td>
            <td>{{ $circular->reference_id }}</td>
            <!-- Display other columns here -->
        </tr>
        @empty
        <tr>
            <td colspan="3">No data found for Circular Commissions</td>
        </tr>
        @endforelse
    </table>
</body>
</html>
