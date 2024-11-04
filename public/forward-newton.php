<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newton's Methods Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="mb-4">
            <h1 class="mb-4">Perhitungan Interpolasi Newton Maju</h1>
            <a href="../public/index.html" class="btn btn-danger">Beranda</a>
        </div>    
        <form id="newtonForm">
            <div class="mb-3">
                <label for="method" class="form-label">Metode:</label>
                <select class="form-select" id="method" name="method">
                    <option value="forward">Interpolasi Newton Maju</option>
                </select>
            </div>
            
            <div id="forwardInputs">
                <div class="mb-3">
                    <label for="xValues" class="form-label">Nilai X (Pisahkan dengan Koma):</label>
                    <input type="text" class="form-control" id="xValues" name="xValues">
                </div>
                <div class="mb-3">
                    <label for="yValues" class="form-label">Nilai Y (Pisahkan dengan Koma):</label>
                    <input type="text" class="form-control" id="yValues" name="yValues">
                </div>
                <div class="mb-3">
                    <label for="xInterpolate" class="form-label">Nilai X yang di Interpolasi:</label>
                    <input type="number" class="form-control" id="xInterpolate" name="xInterpolate" step="any">
                </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
        <div id="result" class="mt-4"></div>
        <canvas id="newtonChart" class="mt-4" aria-label="Newton's Method Chart" role="img"></canvas>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../src/js/script1.js"></script>
</body>
</html>