<?php

function hitungDiskon($totalBelanja)
{
    $diskon = 0;

    if ($totalBelanja >= 100000) {
        $diskon = $totalBelanja * 0.10;
    } elseif ($totalBelanja >= 50000) {
        $diskon = $totalBelanja * 0.05;
    }

    return $diskon;
}

function getPersenDiskon($totalBelanja)
{
    if ($totalBelanja >= 100000) {
        return 10;
    } elseif ($totalBelanja >= 50000) {
        return 5;
    }
    return 0;
}

$hasil = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['total_belanja'])) {
    $totalBelanja = floatval(str_replace(['.', ','], ['', '.'], $_POST['total_belanja']));

    if ($totalBelanja > 0) {
        $diskon = hitungDiskon($totalBelanja);
        $persen = getPersenDiskon($totalBelanja);
        $totalBayar = $totalBelanja - $diskon;

        $hasil = [
            'total_belanja' => $totalBelanja,
            'persen' => $persen,
            'diskon' => $diskon,
            'total_bayar' => $totalBayar,
        ];
    }
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENGHITUNG HARGA DISKON</title>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #F5F0E8;
            font-family: 'Space Grotesk', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .card {
            background: #FFFFFF;
            border: 4px solid #000;
            box-shadow: 8px 8px 0px #000;
            max-width: 450px;
            width: 100%;
            padding: 0;
            overflow: hidden;
        }

        .card-header {
            background: #FFE600;
            border-bottom: 4px solid #000;
            padding: 20px 24px;
            text-align: center;
        }

        .card-header h1 {
            font-size: 28px;
            font-weight: 700;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .card-header span {
            font-size: 32px;
            display: block;
            margin-bottom: 8px;
        }

        .card-body {
            padding: 24px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            color: #000;
        }

        .input-wrapper {
            display: flex;
            border: 3px solid #000;
            box-shadow: 4px 4px 0px #000;
            overflow: hidden;
        }

        .input-prefix {
            background: #000;
            color: #FFE600;
            font-weight: 700;
            font-size: 16px;
            padding: 12px 14px;
            display: flex;
            align-items: center;
        }

        .input-wrapper input {
            flex: 1;
            border: none;
            outline: none;
            padding: 12px 14px;
            font-family: 'Space Grotesk', sans-serif;
            font-size: 18px;
            font-weight: 600;
            background: #fff;
            width: 100%;
        }

        .input-wrapper input:focus {
            background: #FFFDE8;
        }

        .info-box {
            background: #A8D8FF;
            border: 3px solid #000;
            box-shadow: 4px 4px 0px #000;
            padding: 16px 18px;
            margin-bottom: 20px;
        }

        .info-box h3 {
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
            color: #000;
        }

        .info-box ul {
            list-style: none;
            padding: 0;
        }

        .info-box ul li {
            font-size: 14px;
            font-weight: 600;
            color: #000;
            padding: 4px 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-box ul li::before {
            content: '';
            width: 10px;
            height: 10px;
            background: #000;
            display: inline-block;
            flex-shrink: 0;
        }

        .btn-hitung {
            display: block;
            width: 100%;
            padding: 14px 20px;
            background: #FF6B9D;
            border: 3px solid #000;
            box-shadow: 4px 4px 0px #000;
            font-family: 'Space Grotesk', sans-serif;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #000;
            cursor: pointer;
            transition: all 0.1s ease;
        }

        .btn-hitung:hover {
            box-shadow: 2px 2px 0px #000;
            transform: translate(2px, 2px);
        }

        .btn-hitung:active {
            box-shadow: 0px 0px 0px #000;
            transform: translate(4px, 4px);
        }

        .hasil {
            margin-top: 20px;
            border: 3px solid #000;
            box-shadow: 4px 4px 0px #000;
            overflow: hidden;
            animation: slideUp 0.3s ease;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hasil-header {
            background: #B8FF6B;
            border-bottom: 3px solid #000;
            padding: 12px 18px;
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .hasil-body {
            background: #fff;
            padding: 16px 18px;
        }

        .hasil-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            font-size: 15px;
            font-weight: 600;
            color: #333;
        }

        .hasil-row + .hasil-row {
            border-top: 2px dashed #ccc;
        }

        .hasil-row.diskon-row .nilai {
            color: #D63031;
        }

        .hasil-footer {
            background: #FFE600;
            border-top: 3px solid #000;
            padding: 16px 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .hasil-footer .label {
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            color: #000;
        }

        .hasil-footer .nilai {
            font-size: 22px;
            font-weight: 700;
            color: #000;
        }

        .badge {
            display: inline-block;
            background: #FF6B9D;
            border: 2px solid #000;
            padding: 2px 10px;
            font-size: 13px;
            font-weight: 700;
            margin-left: 6px;
        }

        .no-diskon .badge {
            background: #ccc;
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            font-weight: 600;
            color: #888;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <span>&#127991;</span>
            <h1>MENGHITUNG HARGA DISKON</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="">
                <div class="input-group">
                    <label for="total_belanja">Masukkan Total Belanja</label>
                    <div class="input-wrapper">
                        <div class="input-prefix">Rp</div>
                        <input
                            type="text"
                            id="total_belanja"
                            name="total_belanja"
                            placeholder="120.000"
                            value="<?= isset($_POST['total_belanja']) ? htmlspecialchars($_POST['total_belanja']) : '' ?>"
                            required
                            autocomplete="off"
                        >
                    </div>
                </div>

                <div class="info-box">
                    <h3>Aturan Diskon</h3>
                    <ul>
                        <li>&gt;= Rp 100.000 &rarr; Diskon 10%</li>
                        <li>&gt;= Rp 50.000 &rarr; Diskon 5%</li>
                        <li>&lt; Rp 50.000 &rarr; Tidak ada diskon</li>
                    </ul>
                </div>

                <button type="submit" class="btn-hitung">Hitung Diskon!</button>
            </form>

            <?php if ($hasil !== null): ?>
                <div class="hasil <?= $hasil['persen'] === 0 ? 'no-diskon' : '' ?>">
                    <div class="hasil-header">
                        Hasil Perhitungan
                        <span class="badge"><?= $hasil['persen'] ?>%</span>
                    </div>
                    <div class="hasil-body">
                        <div class="hasil-row">
                            <span class="label">Total Belanja</span>
                            <span class="nilai">Rp <?= number_format($hasil['total_belanja'], 0, ',', '.') ?></span>
                        </div>
                        <div class="hasil-row diskon-row">
                            <span class="label">Potongan Diskon (<?= $hasil['persen'] ?>%)</span>
                            <span class="nilai">- Rp <?= number_format($hasil['diskon'], 0, ',', '.') ?></span>
                        </div>
                    </div>
                    <div class="hasil-footer">
                        <span class="label">Total Bayar</span>
                        <span class="nilai">Rp <?= number_format($hasil['total_bayar'], 0, ',', '.') ?></span>
                    </div>
                </div>
            <?php endif; ?>

            <div class="footer-text">
                Tugas UTS &mdash; Program Diskon
            </div>
        </div>
    </div>

    <script>
        document.getElementById('total_belanja').addEventListener('input', function(e) {
            let value = this.value.replace(/[^\d]/g, '');
            if (value) {
                this.value = new Intl.NumberFormat('id-ID').format(parseInt(value));
            }
        });
    </script>
</body>
</html>
