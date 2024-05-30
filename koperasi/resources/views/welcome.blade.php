<!DOCTYPE html>
<html lang="en">

<style>
.background {
  position: fixed;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 103%;
  height: 119%;
}

.background svg {
  position: absolute;
  top: 0;
  left: 0;
  width: 103%;
  height: 103%;
  transform-origin: top;
  box-sizing: border-box;
  display: block;
  pointer-events: none;
}

a1 {
  text-decoration: none;
  position: relative;
  border: none;
  font-size: 15px;
  font-family: inherit;
  cursor: pointer;
  color: #F1EEDC;
  width: 9em;
  height: 3em;
  line-height: 3em;
  background: linear-gradient(90deg, #03a9f4, #00ff00);
  background-size: 300%;
  border-radius: 30px;
  z-index: 1;
}

button:hover {
  animation: ani 8s linear infinite;
  border: none;
}

@keyframes ani {
  0% {
    background-position: 0%;
  }

  100% {
    background-position: 400%;
  }
}

a1:before {
  content: "";
  position: absolute;
  top: -5px;
  left: -5px;
  right: -5px;
  bottom: -5px;
  z-index: -1;
  background: linear-gradient(90deg, #00008b, #008080, #90ee90, #006400);
  background-size: 400%;
  border-radius: 35px;
  transition: 1s;
}

a1:hover::before {
  filter: blur(20px);
}

a1:active {
    background: linear-gradient(90deg, #03a9f4, #00ff00);
}

a2 {
 --color: linear-gradient(60deg, #B3C8CF, #BED7DC, #F1EEDC, #E5DDC5);
 font-family: inherit;
 display: inline-block;
 width: 7em;
 height: 2.6em;
 line-height: 2.5em;
 margin: 25px;
 position: relative;
 overflow: hidden;
 border: 2px solid var(--color);
 transition: color .5s;
 z-index: 1;
 font-size: 15px;
 border-radius: 6px;
 font-weight: 500;
 color: var(--color);
 text: center;
 text-align: center;
}

a2:before {
 content: "";
 position: absolute;
 z-index: -1;
 background: var(--color);
 height: 150px;
 width: 200px;
 border-radius: 50%;
}

a2:hover {
 color: #000000;
}

a2:before {
 top: 100%;
 left: 100%;
 transition: all .7s;
}

a2:hover:before {
 top: -30px;
 left: -30px;
}

a2:active:before {
 background: linear-gradient(180deg, #B3C8CF, #BED7DC, #F1EEDC, #E5DDC5);
 transition: background 0s;
}

.kartu {
  position: relative;
  width: 300px;
  height: 200px;
  background: linear-gradient(180deg, #D2E0FB, #F9F3CC, #D7E5CA, #8EACCD);
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  perspective: 1000px;
  box-shadow: 0 0 0 5px #ffffff80;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.kartu:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
}

.konten {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 20px;
  box-sizing: border-box;
  background: linear-gradient(180deg, #D2E0FB, #F9F3CC, #D7E5CA, #8EACCD);
  transform: rotateX(-90deg);
  transform-origin: bottom;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.kartu:hover .konten {
  transform: rotateX(0deg);
}

.deskripsi {
  margin: 10px 0 0;
  font-size: 14px;
  color: #777;
  line-height: 1.4;
}
.transition-transform {
            transition: transform 0.5s ease-in-out;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koperasi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="relative w-full h-full">
    <div class="background">
        <svg class="h-full w-full bg-no-repeat" style="background-size:cover" viewBox="0 0 1470 817" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_106_41)">
                    <g filter="url(#filter0_f_106_41)">
                      <path d="M304 790.031C129.768 684.678 -406.4 1167.32 -413.584 1177.23C-718.041 1523.9 91.1496 1378.93 110.908 1378.93C-180.976 1161.92 286.936 941.307 304 790.031Z" fill="#3B37FF"></path>
                      <path d="M161.807 644.898C161.554 520.595 -136.124 671.417 -284.931 762.366C-403.337 932.004 -13.0687 1192.9 1.35155 1035.57C23.94 789.128 162.125 800.276 161.807 644.898Z" fill="#37E7FF"></path>
                      <path d="M121.085 684.621C125.261 544.097 -214.984 734.315 -385.628 846.989C-555.644 959.056 16.778 1314.39 -102.496 1145.13C-221.77 975.865 115.866 860.276 121.085 684.621Z" fill="#FF37D3"></path>
                      <path d="M97.589 685.346C0.588959 626.846 -297.911 894.846 -301.911 900.346C-471.411 1092.85 -20.911 1012.35 -9.91104 1012.35C-172.411 891.846 88.089 769.346 97.589 685.346Z" fill="#EB1B1B"></path>
                      <path d="M98.8172 786.222C105.645 707.089 -155.821 865.52 -287.408 954.627C-342.535 990.996 -241.058 1042.93 -137.111 1149.4C-33.164 1255.87 -1.43155 1149.01 -6.87316 1007.24C-12.3148 865.481 90.2819 885.138 98.8172 786.222Z" fill="#FFF500"></path>
                      <path d="M79.6747 793.766C70.5845 765.971 -181.806 928.87 -306.865 1013.79C-207.001 1086.12 -12.6963 1207.5 -34.3905 1114.39C-61.5083 998.009 -9.31017 919.777 18.4035 892.264C46.1172 864.751 91.0373 828.51 79.6747 793.766Z" fill="white"></path>
                    </g>
                    <g filter="url(#filter1_f_106_41)" style="mix-blend-mode: color-dodge">
                      <path d="M285.396 691.649C91.9932 627.999 -322.445 1218.47 -327.229 1229.74C-546.3 1635.8 209.859 1313.26 229.116 1308.83C-103.959 1162.72 302.65 842.904 285.396 691.649Z" fill="#3B37FF"></path>
                      <path d="M135.808 620.898C135.554 496.595 -162.124 647.417 -310.931 738.366C-429.337 908.004 -39.0683 1168.9 -24.648 1011.57C-2.05946 765.128 136.125 776.276 135.808 620.898Z" fill="#37E7FF"></path>
                      <path d="M264.085 728.029C295.212 662.809 -38.8403 870.317 -242.627 890.397C-412.644 1002.46 159.778 1357.79 40.5042 1188.53C-78.7699 1019.27 188.395 886.626 264.085 728.029Z" fill="#FF37D3"></path>
                      <path d="M63.2555 586.832C-45.5052 555.172 -265.269 890.776 -267.724 897.118C-382.172 1126.66 32.6034 933.287 43.2353 930.466C-144.738 855.683 75.6212 670.458 63.2555 586.832Z" fill="#EB1B1B"></path>
                      <path d="M154.112 907.632C199.29 842.305 -106.329 850.19 -264.786 862.298C-330.693 866.536 -268.337 961.966 -230.885 1105.97C-193.433 1249.98 -112.876 1172.93 -47.2874 1047.13C18.301 921.334 97.6386 989.29 154.112 907.632Z" fill="#FFF500"></path>
                      <path d="M129.742 813.25C121.087 785.316 -133.815 944.257 -260.183 1027.22C-161.46 1101.1 30.9269 1225.49 10.6881 1132.06C-14.6104 1015.27 38.8021 937.856 66.9417 910.779C95.0813 883.702 140.561 848.167 129.742 813.25Z" fill="white"></path>
                    </g>
                    <g filter="url(#filter2_f_106_41)">
                      <path d="M1140.7 659.115C1237.3 776.059 1733.06 568.547 1740.55 563.349C2039.92 394.456 1529.82 270.985 1515.93 266.125C1515.82 644.929 1189.91 556.934 1140.7 659.115Z" fill="#3B37FF"></path>
                      <path d="M1098.22 512.71C1192.56 619.584 1652.14 410.657 1659.02 405.566C1935.22 238.529 1542.85 63.0972 1529.64 58.9411C1467.33 354.141 1305.24 419.284 1098.22 512.71Z" fill="#37E7FF"></path>
                      <path d="M1188.06 528.72C1386.37 555.048 1559.14 355.019 1562.99 269.094C1509.96 68.883 1450.87 -249.17 1437.38 84.2393C1422.27 457.75 890.157 489.171 1188.06 528.72Z" fill="#FF37D3"></path>
                      <path d="M1180.14 483.812C1170.93 546.68 1458.32 445.558 1585.1 347.02C1740.62 149.026 1606.16 -64.3923 1485.77 165.155C1449.31 234.678 1448.21 346.131 1273.18 409.921C1235.35 423.707 1182.62 466.882 1180.14 483.812Z" fill="white"></path>
                    </g>
                    <g filter="url(#filter3_f_106_41)" style="mix-blend-mode: color-dodge">
                      <path d="M1075.07 624.68C1183.34 665.319 1928.88 307.765 1991.15 478.431C2448.34 220.503 1669.33 31.9428 1648.11 24.5205C1670.96 -99.9098 1041.44 188.527 1075.07 624.68Z" fill="#3B37FF"></path>
                      <path d="M1157.15 586.417C1251.49 693.29 1711.07 484.363 1717.95 479.272C1994.15 312.236 1601.78 136.804 1588.57 132.648C1526.26 427.847 1364.17 492.99 1157.15 586.417Z" fill="#37E7FF"></path>
                      <path d="M1277.57 295.664C1475.88 321.992 1648.65 121.962 1652.5 36.0375C1599.47 -164.174 1540.38 -482.226 1526.89 -148.817C1511.78 224.693 979.665 256.114 1277.57 295.664Z" fill="#FF37D3"></path>
                      <path d="M1224.1 465.095C1214.89 527.963 1502.28 426.841 1629.07 328.302C1784.59 130.309 1650.12 -83.1096 1529.74 146.438C1493.27 215.961 1492.17 327.414 1317.14 391.203C1279.31 404.99 1226.58 448.165 1224.1 465.095Z" fill="white"></path>
                    </g>
                    <g filter="url(#filter4_f_106_41)">
                      <path d="M664.474 107.87C641.358 124.696 170.932 248.337 252.874 -365.067C364.865 -442.45 573.937 -82.0188 664.474 107.87Z" fill="#37E7FF"></path>
                      <path d="M393.411 -410.629C304.927 -322.705 264.346 -131.269 559.222 44.9769C895.049 245.699 621.708 -244.567 393.411 -410.629Z" fill="#3B37FF"></path>
                    </g>
                    <g filter="url(#filter5_f_106_41)" style="mix-blend-mode: color-dodge">
                      <path d="M574.831 -4.21438C548.914 8.94132 102.388 98.0663 399.01 -400.636C523.041 -460.996 567.904 -161.505 574.831 -4.21438Z" fill="#37E7FF"></path>
                      <path d="M167.001 -411.685C94.0128 -286.811 109.91 -42.5197 506.461 122.1C958.082 309.582 483.689 -247.587 167.001 -411.685Z" fill="#3B37FF"></path>
                    </g>
                    <g filter="url(#filter6_f_106_41)">
                      <path d="M769.312 668.888C713.944 557.598 514.063 824.819 421.044 972.341C390.178 1176.9 855.682 1237.6 798.814 1090.2C709.734 859.309 662.489 874.183 769.312 668.888Z" fill="#3B37FF"></path>
                      <path d="M654.567 580C696.502 663.067 791.358 1013.32 715.491 1029.57C836.162 1255.9 919.082 805.839 922.947 795.54C753.034 905.341 729.873 618.408 654.567 580Z" fill="#EB1B1B"></path>
                    </g>
                    <g filter="url(#filter7_f_106_41)" style="mix-blend-mode: color-dodge">
                      <path d="M898.312 681.889C842.943 570.598 643.063 837.82 550.044 985.341C519.178 1189.9 984.682 1250.6 927.814 1103.2C838.733 872.309 791.488 887.183 898.312 681.889Z" fill="#3B37FF"></path>
                      <path d="M659.751 623.067C701.685 706.135 796.541 1056.39 720.674 1072.64C841.345 1298.97 924.265 848.906 928.13 838.608C758.217 948.408 735.057 661.476 659.751 623.067Z" fill="#EB1B1B"></path>
                    </g>
                  </g>
                  <defs>
                    <filter color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="1011.21" id="filter0_f_106_41" width="986" x="-582" y="497.789">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                      <feBlend in="SourceGraphic" in2="BackgroundImageFix" mode="normal" result="shape"></feBlend>
                      <feGaussianBlur result="effect1_foregroundBlur_106_41" stdDeviation="50"></feGaussianBlur>
                    </filter>
                    <filter color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="1060.69" id="filter1_f_106_41" width="852.948" x="-467.015" y="473.789">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                      <feBlend in="SourceGraphic" in2="BackgroundImageFix" mode="normal" result="shape"></feBlend>
                      <feGaussianBlur result="effect1_foregroundBlur_106_41" stdDeviation="50"></feGaussianBlur>
                    </filter>
                    <filter color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="955.751" id="filter2_f_106_41" width="936.951" x="997.614" y="-160.955">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                      <feBlend in="SourceGraphic" in2="BackgroundImageFix" mode="normal" result="shape"></feBlend>
                      <feGaussianBlur result="effect1_foregroundBlur_106_41" stdDeviation="50"></feGaussianBlur>
                    </filter>
                    <filter color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="1121.94" id="filter3_f_106_41" width="1260.95" x="973.772" y="-394.011">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                      <feBlend in="SourceGraphic" in2="BackgroundImageFix" mode="normal" result="shape"></feBlend>
                      <feGaussianBlur result="effect1_foregroundBlur_106_41" stdDeviation="50"></feGaussianBlur>
                    </filter>
                    <filter color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="739.821" id="filter4_f_106_41" width="672.933" x="143.302" y="-510.629">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                      <feBlend in="SourceGraphic" in2="BackgroundImageFix" mode="normal" result="shape"></feBlend>
                      <feGaussianBlur result="effect1_foregroundBlur_106_41" stdDeviation="50"></feGaussianBlur>
                    </filter>
                    <filter color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="771.866" id="filter5_f_106_41" width="759.207" x="33.001" y="-511.685">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                      <feBlend in="SourceGraphic" in2="BackgroundImageFix" mode="normal" result="shape"></feBlend>
                      <feGaussianBlur result="effect1_foregroundBlur_106_41" stdDeviation="50"></feGaussianBlur>
                    </filter>
                    <filter color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="791.621" id="filter6_f_106_41" width="703.374" x="319.573" y="480">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                      <feBlend in="SourceGraphic" in2="BackgroundImageFix" mode="normal" result="shape"></feBlend>
                      <feGaussianBlur result="effect1_foregroundBlur_106_41" stdDeviation="50"></feGaussianBlur>
                    </filter>
                    <filter color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="761.554" id="filter7_f_106_41" width="584.064" x="448.572" y="523.067">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                      <feBlend in="SourceGraphic" in2="BackgroundImageFix" mode="normal" result="shape"></feBlend>
                      <feGaussianBlur result="effect1_foregroundBlur_106_41" stdDeviation="50"></feGaussianBlur>
                    </filter>
                    <clipPath id="clip0_106_41">
                      <rect fill="white" height="800" width="1440"></rect>
                    </clipPath>
                  </defs>
                </svg>
    </div>

    <div class="relative justify-center w-full mx-auto h-auto">
        <div x-data="{ open: false }" class="flex flex-col w-full px-8 py-2 mx-auto md:px-12 md:items-center md:justify-between md:flex-row lg:px-32 max-w-7xl">
            <div class="flex flex-row items-center justify-between text-black">
                <a class="inline-flex items-center gap-3 text-xl font-bold tracking-tight text-black " href="/">
                    <span>Koperasi</span>
                </a>
            </div>
            <div class="flex items-center md:ml-auto">
                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col items-center flex-grow hidden gap-3 p-4 px-5 text-sm font-medium text-gray-500 md:p-0 md:flex md:flex-row">
                    <a class="hover:text-black focus:outline-none focus:text-gray-500 mr-4 mb-1" href="{{ route('login') }}">
                    Login
                    </a>
                    <a2 class="hover:text-black" href="{{ route('register') }}">
                        <a class="hover:text-black focus:outline-none focus:text-gray-500 mb-1" href="{{ route('register') }}">
                        Sign Up
                        </a>
                    </a2>
                </nav>
            </div>
        </div>
    </div>
            

    <!-- Section 1 -->
    <section>
    <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl">
      <div class="grid items-center grid-cols-2 gap-2 lg:grid-cols-2">
        <div class="md:order-first h-full overflow-hidden bg-transparent border-2 border-gray-200 shadow-lg rounded-2xl p-8">
          <h1 class="text-4xl font-semibold tracking-tighter text-gray-900 text-balance">
            <span id="typed-text" class="inline-block mb-5"></span><span class="typing-animation"></span><br>
            <span class="text-3xl text-gray-700">Wadah Ekonomi Kerakyatan yang Terpercaya dan Menguntungkan</span>
          </h1>
          <p class="mt-4 text-base font-medium text-gray-500 text-justify">
            Bergabunglah bersama ribuan anggota lainnya dalam membangun kekuatan ekonomi bersama. Tumbuh dan berkembang bersama kami dengan menjadi anggota hari ini juga!
          </p>
        </div>

        <div class="order-last w-full lg:order-none lg:w-auto">
          <div class="h-full p-2 overflow-hidden">
            <img alt="#" class="relative w-64 ml-20 mr-0" src="{{ asset('img/logokoperasi.jpg') }}">
          </div>
        </div>
      </div>

      <div class="grid grid-cols-2 gap-2 lg:grid-cols-2">
        <div class="md:order-first overflow-hidden border-2 border-gray-200 shadow-lg rounded-2xl p-8 mt-8 w-full mx-15">
            <dl class="grid grid-cols-2 gap-4 list-none text-pretty">
              <div>
                <div class="flex items-center justify-center text-justify">❖</div>
                <dt class="mt-4 font-medium text-gray-900">Kesejahteraan Finansial yang Berkelanjutan</dt>
                <dd class="mt-2 text-sm text-gray-600 text-justify">
                Bergabung dengan Koperasi berarti Anda memilih jalan menuju kesejahteraan finansial yang berkelanjutan. Dengan berbagai skema simpanan dan peluang investasi yang ditawarkan, Anda dapat membangun kekayaan secara perlahan tapi pasti. Selain itu, Anda juga berhak menerima Sisa Hasil Usaha (SHU) yang dibagikan setiap tahunnya, memberikan Anda keuntungan lebih dari keanggotaan Anda.
                </dd>
              </div>
              <div>
                <div class="flex items-center justify-center">❖</div>
                <dt class="mt-4 font-medium text-gray-900">Kekuatan Bersama untuk Mencapai Tujuan</dt>
                <dd class="mt-2 text-sm text-gray-600 text-justify">
                Koperasi adalah organisasi yang dibangun atas dasar kerjasama dan saling membantu. Dengan bergabung di Koperasi, Anda bersatu dengan ribuan anggota lainnya yang memiliki visi dan tujuan yang sama: mencapai kemakmuran bersama. Kekuatan ini memungkinkan koperasi untuk tumbuh dan berkembang, serta memberikan manfaat yang lebih besar bagi Anda dan anggota lainnya.
                </dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 2 -->
    <section class="scroll-mt-24" id="features">
    <div class="px-8 py-24 mx-auto text-center md:px-12 lg:px-32 max-w-7xl">
        <div>
            <p class="mt-12 mb-12 text-4xl font-semibold tracking-tighter text-gray-900 lg:text-5xl">
                Wujudkan Kesejahteraan Finansial dengan Fitur Unggulan
            </p>
        </div>
        <div class="max-w-xl py-12 mx-auto lg:max-w-7xl">
            <div>
                <div class="grid grid-cols-2 gap-12 md:grid-cols-3 lg:space-y-0">
                    <div class="text-center">
                        <div class="rounded-full flex items-center justify-center w-12 h-12 mx-auto overflow-hidden shadow-lg">
                            <span class="text-xl">1</span>
                        </div>
                        <p class="mt-4 font-medium text-gray-900">Simpanan Pokok</p>
                        <p class="mt-4 text-sm text-gray-900 text-justify">
                            Simpanan pokok adalah syarat utama untuk bergabung menjadi anggota Koperasi. Dengan membayar simpanan ini, Anda resmi menjadi bagian dari keluarga besar kami dan berhak menikmati semua keuntungan yang ditawarkan.
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="rounded-full flex items-center justify-center w-12 h-12 mx-auto overflow-hidden shadow-lg">
                            <span class="text-xl">2</span>
                        </div>
                        <p class="mt-4 font-medium text-gray-900">Simpanan Wajib</p>
                        <p class="mt-4 text-sm text-gray-900 text-justify">
                            Sebagai anggota, Anda diwajibkan untuk membayar simpanan wajib secara rutin. Simpanan ini bertujuan untuk mengembangkan modal koperasi dan memperkuat basis keuangan bersama.
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="rounded-full flex items-center justify-center w-12 h-12 mx-auto overflow-hidden shadow-lg">
                            <span class="text-xl">3</span>
                        </div>
                        <p class="mt-4 font-medium text-gray-900">Simpanan Sukarela</p>
                        <p class="mt-4 text-sm text-gray-900 text-justify">
                            Tidak ada batasan untuk mewujudkan impian finansial Anda. Melalui simpanan sukarela, Anda dapat menambah tabungan sesuai keinginan dan kemampuan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section 3 -->         
<section>
    <div class="px-8 py-12 mx-auto space-y-24 md:px-12 lg:px-32 max-w-7xl">
        <div class="grid items-center grid-cols-1 gap-4 mt-6 list-none lg:grid-cols-2 lg:gap-24">
            <div>
                <p class="mt-8 text-4xl font-semibold tracking-tight text-gray-900">
                    User Interface
                    <span class="lg:block lg:text-gray-700">Ramah Pengguna</span>
                </p>
                <p class="mt-4 text-base text-gray-600 text-justify">
                    Koperasi dipersembahkan dengan antarmuka pengguna (UI) yang intuitif dan modern, dirancang untuk memberikan pengalaman digital yang mulus dan menyenangkan. Dengan tampilan yang bersih dan navigasi yang sederhana, Anda dapat dengan mudah mengakses semua fitur dan layanan koperasi kami.
                </p>
            </div>
            <div id="slider1" class="relative overflow-hidden rounded-lg p-1 shadow-lg rounded-2xl">
                <div class="slides flex transition-transform duration-500">
                    <div class="slide min-w-full h-64 bg-center bg-cover">
                        <img alt="Lexingtøn thumbnail" class="drop-shadow-2xl rounded-lg" src="{{ asset('img/landingpage.png') }}">
                    </div>
                    <div class="slide min-w-full h-64 bg-center bg-cover">
                        <img alt="Lexingtøn thumbnail" class="drop-shadow-2xl rounded-lg" src="{{ asset('img/User.dashboard.png') }}">
                    </div>
                    <div class="slide min-w-full h-64 bg-center bg-cover">
                        <img alt="Lexingtøn thumbnail" class="drop-shadow-2xl rounded-lg" src="{{ asset('img/user.simpanan.png') }}">
                    </div>
                </div>
                <button id="prev1" class="absolute left-0 top-1/2 transform -translate-y-1/2 p-2 bg-white bg-opacity-75 hover:bg-opacity-100 rounded-full ml-2">◀</button>
                <button id="next1" class="absolute right-0 top-1/2 transform -translate-y-1/2 p-2 bg-white bg-opacity-75 hover:bg-opacity-100 rounded-full mr-2">▶</button>
            </div>
        </div>
        <div class="grid items-center grid-cols-1 gap-4 mt-6 list-none lg:grid-cols-2 lg:gap-24">
            <div id="slider2" class="relative overflow-hidden rounded-lg p-1 shadow-lg rounded-2xl">
                <div class="slides flex transition-transform duration-500">
                    <div class="slide min-w-full h-64 bg-center bg-cover">
                        <img alt="Lexingtøn thumbnail" class="drop-shadow-2xl rounded-lg" src="{{ asset('img/signup.png') }}">
                    </div>
                    <div class="slide min-w-full h-64 bg-center bg-cover">
                        <img alt="Lexingtøn thumbnail" class="drop-shadow-2xl rounded-lg" src="{{ asset('img/verified.png') }}">
                    </div>
                </div>
                <button id="prev2" class="absolute left-0 top-1/2 transform -translate-y-1/2 p-2 bg-white bg-opacity-75 hover:bg-opacity-100 rounded-full ml-2">◀</button>
                <button id="next2" class="absolute right-0 top-1/2 transform -translate-y-1/2 p-2 bg-white bg-opacity-75 hover:bg-opacity-100 rounded-full mr-2">▶</button>
            </div>
            <div>
                <p class="mt-8 text-4xl font-semibold tracking-tight text-gray-900">
                    Pendaftaran Online
                    <span class="lg:block lg:text-gray-700">yang Cepat</span>
                </p>
                <p class="mt-4 text-base text-gray-600 text-justify">
                    Tidak perlu repot mengisi formulir panjang atau mengantri di kantor kami. Proses pendaftaran sepenuhnya dapat dilakukan secara online dengan mengisi beberapa informasi dasar.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Section 4 -->
    <section>
      <div class="px-8 py-12 mx-auto md:px-12 lg:px-32 max-w-7xl">
        <div>
          <p class="mt-12 text-4xl font-semibold tracking-tighter text-gray-900 lg:text-4xl">
              Pelanggan kami memberikan ulasan positif
            <span class="text-gray-500 md:block">tentang kami dan aplikasi kami</span>
          </p>
        </div>
        <ul role="list" class="grid max-w-2xl grid-cols-1 gap-6 mx-auto mt-12 sm:gap-4 lg:max-w-none lg:grid-cols-3">
          <li class="p-2 border bg-gray-50 rounded-3xl">
            <figure class="relative flex flex-col justify-between h-full p-6 bg-white border shadow-lg rounded-2xl">
              <blockquote class="relative">
                <p class="text-base text-gray-500">
                Sebagai seorang milenial yang terbiasa dengan teknologi, saya benar-benar terkesan dengan antarmuka pengguna Koperasi yang modern dan intuitif. Navigasi yang mudah membuat saya dapat mengakses semua fitur dengan cepat dan efisien. Ditambah dengan proses registrasi online yang cepat, bergabung dengan koperasi ini benar-benar menyenangkan!
                </p>
              </blockquote>
              <figcaption class="relative flex items-center justify-between pt-6 mt-6">
                <div>
                  <div class="font-medium text-gray-900">Kairi</div>
                  <div class="mt-1 text-sm text-gray-500">
                    Pro Player Mobile Legends
                  </div>
                </div>
                <div class="overflow-hidden rounded-full bg-gray-50">
                  <img alt="" src="/images/appify/avatar1.png" width="56" height="56" decoding="async" data-nimg="future" class="object-cover h-14 w-14 grayscale" loading="lazy" style="color: transparent">
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="p-2 border bg-gray-50 rounded-3xl">
            <figure class="relative flex flex-col justify-between h-full p-6 bg-white border shadow-lg rounded-2xl">
              <blockquote class="relative">
                <p class="text-base text-gray-500">
                Saya telah menjadi anggota Koperasi selama beberapa tahun, dan saya sangat puas dengan layanan yang mereka tawarkan. Fitur simpanan yang lengkap, mulai dari simpanan pokok hingga sukarela, memungkinkan saya untuk mengelola keuangan dengan fleksibilitas yang besar. Selain itu, transparansi dalam pelaporan pengeluaran koperasi juga membuat saya merasa yakin bahwa dana saya dikelola dengan baik.
                </p>
              </blockquote>
              <figcaption class="relative flex items-center justify-between pt-6 mt-6">
                <div>
                  <div class="font-medium text-gray-900">Anon</div>
                  <div class="mt-1 text-sm text-gray-500">
                    Creator of Lexington Themes
                  </div>
                </div>
                <div class="overflow-hidden rounded-full bg-gray-50">
                  <img alt="" src="/images/appify/avatar2.png" width="56" height="56" decoding="async" data-nimg="future" class="object-cover h-14 w-14 grayscale" loading="lazy" style="color: transparent">
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="p-2 border bg-gray-50 rounded-3xl">
            <figure class="relative flex flex-col justify-between h-full p-6 bg-white border shadow-lg rounded-2xl">
              <blockquote class="relative">
                <p class="text-base text-gray-500">
                Apa yang saya sukai dari Koperasi adalah kemampuan mereka untuk memberikan peluang investasi yang menguntungkan bagi anggotanya. Dengan bergabung, saya dapat memanfaatkan berbagai sumber pemasukan koperasi dan menerima Sisa Hasil Usaha (SHU) yang menarik setiap tahunnya. Ini benar-benar membantu meningkatkan kekayaan saya secara berkelanjutan.
                </p>
              </blockquote>
              <figcaption class="relative flex items-center justify-between pt-6 mt-6">
                <div>
                  <div class="font-medium text-gray-900">Jenson Button</div>
                  <div class="mt-1 text-sm text-gray-500">
                    Founder of Benji and Tom
                  </div>
                </div>
                <div class="overflow-hidden rounded-full bg-gray-50">
                  <img alt="" src="/images/appify/avatar3.png" width="56" height="56" decoding="async" data-nimg="future" class="object-cover h-14 w-14 grayscale" loading="lazy" style="color: transparent">
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="p-2 border bg-gray-50 rounded-3xl">
            <figure class="relative flex flex-col justify-between h-full p-6 bg-white border shadow-lg rounded-2xl">
              <blockquote class="relative">
                <p class="text-base text-gray-500">
                Sebagai seorang wirausahawan, saya sangat menghargai kontribusi Koperasi dalam mendukung pembangunan ekonomi kerakyatan. Dengan bergabung, saya merasa bahwa saya tidak hanya mengejar keuntungan pribadi, tetapi juga berkontribusi pada kemajuan bersama. Semangat gotong royong dan kerjasama yang dianut koperasi ini benar-benar menginspirasi.                </p>
              </blockquote>
              <figcaption class="relative flex items-center justify-between pt-6 mt-6">
                <div>
                  <div class="font-medium text-gray-900">Kairi</div>
                  <div class="mt-1 text-sm text-gray-500">
                    Pro Player Mobile Legends
                  </div>
                </div>
                <div class="overflow-hidden rounded-full bg-gray-50">
                  <img alt="" src="/images/appify/avatar1.png" width="56" height="56" decoding="async" data-nimg="future" class="object-cover h-14 w-14 grayscale" loading="lazy" style="color: transparent">
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="p-2 border bg-gray-50 rounded-3xl">
            <figure class="relative flex flex-col justify-between h-full p-6 bg-white border shadow-lg rounded-2xl">
              <blockquote class="relative">
                <p class="text-base text-gray-500">
                Saya baru saja bergabung dengan Koperasi, dan saya sangat terkesan dengan kelebihan yang mereka tawarkan. Akses terhadap layanan keuangan terpadu, seperti simpanan, pinjaman, dan asuransi, benar-benar memudahkan saya dalam mengelola keuangan. Dengan satu pintu layanan, saya tidak perlu repot mencari solusi keuangan di tempat lain.                </p>
              </blockquote>
              <figcaption class="relative flex items-center justify-between pt-6 mt-6">
                <div>
                  <div class="font-medium text-gray-900">Kairi</div>
                  <div class="mt-1 text-sm text-gray-500">
                    Pro Player Mobile Legends
                  </div>
                </div>
                <div class="overflow-hidden rounded-full bg-gray-50">
                  <img alt="" src="/images/appify/avatar1.png" width="56" height="56" decoding="async" data-nimg="future" class="object-cover h-14 w-14 grayscale" loading="lazy" style="color: transparent">
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="p-2 border bg-gray-50 rounded-3xl">
            <figure class="relative flex flex-col justify-between h-full p-6 bg-white border shadow-lg rounded-2xl">
              <blockquote class="relative">
                <p class="text-base text-gray-500">
                Apa yang membuat saya terus setia menjadi anggota Koperasi adalah kekuatan bersama yang kami miliki. Dengan bersatu bersama ribuan anggota lainnya, kami dapat mencapai tujuan finansial yang lebih besar dan berkelanjutan. Saya merasa bahwa saya tidak hanya mengejar kesejahteraan pribadi, tetapi juga berkontribusi pada kesuksesan koperasi secara keseluruhan.                </p>
              </blockquote>
              <figcaption class="relative flex items-center justify-between pt-6 mt-6">
                <div>
                  <div class="font-medium text-gray-900">Kairi</div>
                  <div class="mt-1 text-sm text-gray-500">
                    Pro Player Mobile Legends
                  </div>
                </div>
                <div class="overflow-hidden rounded-full bg-gray-50">
                  <img alt="" src="/images/appify/avatar1.png" width="56" height="56" decoding="async" data-nimg="future" class="object-cover h-14 w-14 grayscale" loading="lazy" style="color: transparent">
                </div>
              </figcaption>
            </figure>
          </li>
        </ul>
      </div>
    </section>

    <!-- Section 6 -->
    
    <section>
                <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl">
                <div class="flex justify-center items-center">
                    <div>
                        <h1 class="text-4xl font-semibold tracking-tighter text-gray-900 lg:text-5xl text-center">
                        Meet Our Team
                        <span class="block text-gray-600">Diverse. Skilled. United.</span>
                        </h1>
                        <p class="mt-4 text-base font-medium text-gray-500 text-center">
                        A group of passionate individuals working together to innovate and
                        excel in our industry.
                        </p>
                    </div>
                </div>

                    <br>
                    <br>
                    <br>

                    <div class="grid gap-12 lg:grid-cols-3">
                        <div>
                        <ul role="list" class="flex flex-col gap-12">
                            <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="object-cover w-16 h-16 rounded-full lg:h-20 lg:w-20" src="" alt="">
                                <div class="space-y-1">
                                <h3 class="text-lg font-medium leading-6 text-black">
                                    Rafii Dandy Adithya
                                </h3>
                                <p class="text-base text-gray-500">---</p>
                                </div>
                            </div>
                            </li>

                            <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="object-cover w-16 h-16 rounded-full lg:h-20 lg:w-20" src="" alt="">
                                <div class="space-y-1">
                                <h3 class="text-lg font-medium leading-6 text-black">
                                    Abiyoga Dhaniswara
                                </h3>
                                <p class="text-base text-gray-500">---</p>
                                </div>
                            </div>
                            </li>
                        </ul>
                        </div>

                        <div>
                        <ul role="list" class="flex flex-col gap-12">
                            <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="object-cover w-16 h-16 rounded-full lg:h-20 lg:w-20" src="" alt="">
                                <div class="space-y-1">
                                <h3 class="text-lg font-medium leading-6 text-black">
                                    Pandu Daniel
                                </h3>
                                <p class="text-base text-gray-500">---</p>
                                </div>
                            </div>
                            </li>

                            <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="object-cover w-16 h-16 rounded-full lg:h-20 lg:w-20" src="" alt="">
                                <div class="space-y-1">
                                <h3 class="text-lg font-medium leading-6 text-black">
                                    Subhil Ma'ruf L. Bilondatu
                                </h3>
                                <p class="text-base text-gray-500">---</p>
                                </div>
                            </div>
                            </li>
                        </ul>
                        </div>

                        <div>
                        <ul role="list" class="flex flex-col gap-12">
                            <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="object-cover w-16 h-16 rounded-full lg:h-20 lg:w-20" src="" alt="">
                                <div class="space-y-1">
                                <h3 class="text-lg font-medium leading-6 text-black">
                                    Tasya Ramdhani
                                </h3>
                                <p class="text-base text-gray-500">---</p>
                                </div>
                            </div>
                            </li>

                            <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="object-cover w-16 h-16 rounded-full lg:h-20 lg:w-20" src="" alt="">
                                <div class="space-y-1">
                                <h3 class="text-lg font-medium leading-6 text-black">
                                    Zulfa Ikhsanudin
                                </h3>
                                <p class="text-base text-gray-500">---</p>
                                </div>
                            </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
              </section>
            
    
    <script>
        const text = "Koperasi";
        let index = 1; 
        function typeWriter() {
            document.getElementById('typed-text').innerText = text.slice(0, index);
            index++;
            if (index <= text.length) {
                setTimeout(typeWriter, 150);
            } else {
                setTimeout(function() {
                    document.getElementById('typed-text').innerText = " ";
                    index = 1; 
                    typeWriter();
                }, 1000); 
            }
        }
        document.addEventListener("DOMContentLoaded", typeWriter);
        function initSlider(sliderId, prevBtnId, nextBtnId) {
        let currentIndex = 0;
        const slider = document.getElementById(sliderId);
        const slides = slider.querySelector('.slides');
        const totalSlides = slider.querySelectorAll('.slide').length;

        document.getElementById(nextBtnId).addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlidePosition();
        });

        document.getElementById(prevBtnId).addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateSlidePosition();
        });

        function updateSlidePosition() {
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
          }
        }

        initSlider('slider1', 'prev1', 'next1');
        initSlider('slider2', 'prev2', 'next2');
    </script>
</body>
</html>