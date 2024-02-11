<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <header>
        <h1>Dashboard</h1>
        <p>Selamat datang, !</p>
    </header>

    <nav>
        <ul>
            <!-- Tautan navigasi lainnya -->
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <main>
        <section id="banner">
            <span class="image object">
                <img src="images/gbr4.jpeg" alt="" />
            </span>
            <div class="content">


            </div>
        </section>


    </main>

    <script>
        function downloadPDF() {
            // Ambil elemen canvas dari chart
            var canvas = document.getElementById('newsChart');
            // Konversi elemen canvas menjadi gambar
            var imgData = canvas.toDataURL('image/png');
            // Ambil tahun terpilih dari dropdown
            var selectedYear = document.getElementById('tahunSelect').value;
            // Definisikan content untuk PDF menggunakan pdfmake
            var docDefinition = {
                content: [{
                        text: 'Laporan Tahun ' + selectedYear,
                        style: 'header'
                    },
                    {
                        image: imgData,
                        width: 500
                    }
                ],
                styles: {
                    header: {
                        fontSize: 18,
                        bold: true,
                        margin: [0, 0, 0, 10],
                    }
                },
            };
            // Buat PDF menggunakan pdfmake
            pdfMake.createPdf(docDefinition).download('laporan_' + selectedYear + '_pdf.pdf');
        }
    </script>

    <!-- Footer -->
    <footer id="footer">
        <p class="copyright">&copy; Project Salsa Oleh kelompok 4,Nadhira Adhya 21552011373</p>

    </footer>
</body>

</html>