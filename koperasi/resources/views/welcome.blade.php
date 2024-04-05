<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koperasi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-500 text-white font-sans">
    <div class="bg-green-800 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <div>
                <a href="#" class="text-white text-xl font-bold">Your Logo</a>
            </div>
            <div>
                @if (Route::has('login'))
                    <div class="space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-white">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-white bg-blue p-3 rounded shadow hover:bg-blue-500">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-white bg-blue p-3 rounded shadow hover:bg-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center min-h-screen flex-col relative">
    <div class="absolute inset-0 z-0" style="background-image: url('img/money.jpg'); background-size: cover; background-position: center; filter: blur(8px);"></div>
    <div class="relative z-10">
        <!-- Konten Anda -->
        <div class="text-center mb-12">
            <h1 class="text-6xl font-bold mb-8">
                <span id="typed-text" class="inline-block"></span><span class="typing-animation"></span>
            </h1>
            <p class="text-lg">Sebuah aplikasi yang dapat membantu membantu manajemen dan operasi koperasi serta memfasilitasi berbagai aspek kegiatan koperasi, seperti manajemen anggota, pengelolaan simpanan, pembiayaan, pelacakan transaksi, pelaporan keuangan, dan lain sebagainya. </p>
        </div>
        <h2 class="text-4xl text-center font-bold mb-8">Features</h2>
        <div class="flex justify-center space-x-6">
            <a class="inline-block px-4 py-2 text-white rounded bg-black hover:bg-blue-900 hover:text-gray-200">Dashboard</a>
            <a class="inline-block px-4 py-2 text-white rounded bg-black hover:bg-blue-900 hover:text-gray-200">Simpanan</a>
            <a class="inline-block px-4 py-2 text-white rounded bg-black hover:bg-blue-900 hover:text-gray-200">Manage Anggota</a>
            <a class="inline-block px-4 py-2 text-white rounded bg-black hover:bg-blue-900 hover:text-gray-200">Manage Simpanan</a>
            <a class="inline-block px-4 py-2 text-white rounded bg-black hover:bg-blue-900 hover:text-gray-200">Recapitulation</a>
        </div>
    </div>
</div>


<div id="role-section" class="section bg-blue-200 py-16">
    <div class="container mx-auto px-4 text-black">
        <h2 class="text-4xl font-bold text-center mb-8">Role</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-2xl font-bold mb-4">Anggota</h3>
                <p class="text-lg">Dapat melakukan simpanan, melihat jumlah dan status pada data simpanan.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-2xl font-bold mb-4">Pengurus</h3>
                <p class="text-lg">Dapat melakukan simpanan, melihat rekapitulasi data simpanan serta melakukan manage data anggota yang telah masuk.</p>
            </div>
        </div>
    </div>
</div>


    <div id="simpanan-section" class="section bg-gray-200 flex items-center justify-center py-16">
        <div class="max-w-4xl mx-auto text-center text-black">
            <h2 class="text-4xl font-bold mb-8">Jenis-jenis Simpanan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50 transition-colors duration-200">
                    <h3 class="text-2xl font-bold mb-4">Simpanan Pokok</h3>
                    <p class="text-lg">Simpanan yang harus dibayar oleh setiap anggota dan pengurus saat pertama kali bergabung dengan koperasi.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50 transition-colors duration-200">
                    <h3 class="text-2xl font-bold mb-4">Simpanan Wajib</h3>
                    <p class="text-lg">Simpanan yang harus dibayar secara berkala oleh setiap anggota dan pengurus selama menjadi anggota koperasi.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50 transition-colors duration-200">
                    <h3 class="text-2xl font-bold mb-4">Simpanan Sukarela</h3>
                    <p class="text-lg">Simpanan yang dibayar oleh anggota dan pengurus koperasi secara sukarela di luar simpanan pokok dan wajib.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        const text = "Koperasi";
        let index = 1; 
        function typeWriter() {
            document.getElementById('typed-text').innerText = text.slice(0, index);
            index++;
            if (index <= text.length) {
                setTimeout(typeWriter, 300);
            } else {
                setTimeout(function() {
                    document.getElementById('typed-text').innerText = " ";
                    index = 1; 
                    typeWriter();
                }, 1000); 
            }
        }
        document.addEventListener("DOMContentLoaded", typeWriter);
    </script>
</body>
</html>
