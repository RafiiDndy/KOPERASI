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
        <div class="grid items-center grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-19">
          <div class="md:order-first h-full overflow-hidden bg-tranpare border shadow-lg rounded-2xl p-8 mb-15">
            <h1 class="text-4xl font-semibold tracking-tighter text-gray-900 text-balance">
              <span id="typed-text" class="inline-block mb-5"></span><span class="typing-animation"></span><br>
              <span class="text-gray-600">Explore our services, and let's grow together</span>
            </h1>
            <p class="mt-4 text-base font-medium text-gray-500">
              Sebuah aplikasi yang dapat membantu membantu manajemen dan operasi koperasi serta memfasilitasi berbagai aspek kegiatan koperasi, seperti manajemen anggota, pengelolaan simpanan, pembiayaan, pelacakan transaksi, pelaporan keuangan, dan lain sebagainya.
            </p>
          </div>
          <div class="order-first block w-full mt-12 aspect-square lg:mt-20">
            <div class="h-full p-2 overflow-hidden mt-20">
              <img alt="#" class="relative w-64 ml-20 mb-20" src="{{ asset('img/logokoperasi.jpg') }}">
            </div>
          </div>
          <div class="md:order-first h-full overflow-hidden bg-tranpare border shadow-lg rounded-2xl p-8">
            <dl class="grid grid-cols-2 gap-4 mt-12 list-none lg:gap-6 text-pretty">
              <div>
                <div class="flex items-center justify-center">❖</div>
                <dt class="mt-4 font-medium text-gray-900">Secure Your Future with Our Savings Plans</dt>
                <dd class="mt-2 text-sm text-gray-500">
                  Koperasi kami menawarkan berbagai pilihan simpanan yang disesuaikan dengan tujuan keuangan Anda. Mulai dari simpanan pokok, simpanan wajib, hingga simpanan sukarela, kami menyediakan jalur yang aman dan dapat diandalkan bagi Anda untuk mengembangkan kekayaan dan menjamin masa depan Anda.
                </dd>
              </div>
              <div>
                <div class="flex items-center justify-center">❖</div>
                <dt class="mt-4 font-medium text-gray-900">Commercial use allowed</dt>
                <dd class="mt-2 text-sm text-gray-500">
                  You are allowed to use the licensed work for both non-commercial and commercial purposes.
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
                      <p class="mt-12 text-4xl font-semibold tracking-tighter text-gray-900 lg:text-5xl">
                        Another feature section
                        <span class="text-gray-500 md:block">to write some features or benefits</span>
                      </p>
                      <p class="mt-4 text-sm text-gray-500">
                        The fastest method for working together
                        <span class="md:block"> on staging and temporary environments.</span>
                      </p>
                    </div>
                    <div class="max-w-xl py-12 mx-auto lg:max-w-7xl">
                      <div>
                        <div class="grid grid-cols-2 gap-12 md:grid-cols-4 lg:space-y-0">
                          <div>
                            <div>
                              <div class="flex items-center justify-center size-12 mx-auto text-black bg-gray-100 rounded-xl">
                                1
                              </div>
                              <p class="mt-4 font-medium text-gray-900">Authentication</p>
                            </div>
                            <div class="mt-4 text-sm text-gray-500">
                              You must give appropriate credit to the original creator of the
                              work. This typically includes providing the name.
                            </div>
                          </div>
                          <div>
                            <div>
                              <div class="flex items-center justify-center size-12 mx-auto text-black bg-gray-100 rounded-xl">
                                2
                              </div>
                              <p class="mt-4 font-medium text-gray-900">
                                Serverless Functions
                              </p>
                            </div>
                            <div class="mt-4 text-sm text-gray-500">
                              You may not impose any additional legal terms or technological
                              measures on the work.
                            </div>
                          </div>
                          <div>
                            <div>
                              <div class="flex items-center justify-center size-12 mx-auto text-black bg-gray-100 rounded-xl">
                                3
                              </div>
                              <p class="mt-4 font-medium text-gray-900">Payments</p>
                            </div>
                            <div class="mt-4 text-sm text-gray-500">
                              The CC BY 3.0 License does not include a "Share Alike" (SA)
                              provision.
                            </div>
                          </div>
                          <div>
                            <div>
                              <div class="flex items-center justify-center size-12 mx-auto text-black bg-gray-100 rounded-xl">
                                4
                              </div>
                              <p class="mt-4 font-medium text-gray-900">
                                Database with GraphQL
                              </p>
                            </div>
                            <div class="mt-4 text-sm text-gray-500">
                              You are allowed to use the licensed work for both non-commercial
                              and commercial purposes.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section>
                  <div class="px-8 py-12 mx-auto space-y-24 md:px-12 lg:px-32 max-w-7xl">
                    <div class="grid items-center grid-cols-1 gap-4 mt-6 list-none lg:grid-cols-2 lg:gap-24">
                      <div>
                        <span class="text-xs font-bold tracking-wide text-gray-500 uppercase">tokens</span>
                        <p class="mt-8 text-4xl font-semibold tracking-tight text-gray-900">
                          A sustainable approach to
                          <span class="lg:block lg:text-gray-600">blockchain validation</span>
                        </p>
                        <p class="mt-4 text-base text-gray-500">
                          Control and added security. With decentralization, users have more
                          control over their data and transactions, and the platform is less
                          susceptible to malicious attacks.
                        </p>
                      </div>
                      <div class="p-2 border bg-gray-50 rounded-3xl">
                        <div class="h-full overflow-hidden bg-white border shadow-lg rounded-3xl">
                          <img alt="Lexingtøn thumbnail" class="relative w-full rounded-2xl drop-shadow-2xl" src="/images/appify/phone.png">
                        </div>
                      </div>
                    </div>
                    <div class="grid items-center grid-cols-1 gap-4 mt-6 list-none lg:grid-cols-2 lg:gap-24">
                      <div>
                        <span class="text-xs font-bold tracking-wide text-gray-500 uppercase">data</span>
                        <p class="mt-8 text-4xl font-semibold tracking-tight text-gray-900">
                          Empowering users
                          <span class="lg:block lg:text-gray-600">with data control</span>
                        </p>
                        <p class="mt-4 text-base text-gray-500">
                          Control and added security. With decentralization, users have more
                          control over their data and transactions, and the platform is less
                          susceptible to malicious attacks.
                        </p>
                      </div>
                      <div class="p-2 border bg-gray-50 rounded-3xl lg:order-first">
                        <div class="h-full overflow-hidden bg-white border shadow-lg rounded-3xl">
                          <img alt="Lexingtøn thumbnail" class="relative w-full rounded-2xl drop-shadow-2xl" src="/images/appify/phone.png">
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section>
                  <div class="px-8 py-12 mx-auto md:px-12 lg:px-32 max-w-7xl">
                    <div>
                      <p class="mt-12 text-4xl font-semibold tracking-tighter text-gray-900 lg:text-5xl">
                        Our customers pretend
                        <span class="text-gray-500 md:block">they love us and our app</span>
                      </p>
                    </div>
                    <ul role="list" class="grid max-w-2xl grid-cols-1 gap-6 mx-auto mt-12 sm:gap-4 lg:max-w-none lg:grid-cols-3">
                      <li class="p-2 border bg-gray-50 rounded-3xl">
                        <figure class="relative flex flex-col justify-between h-full p-6 bg-white border shadow-lg rounded-2xl">
                          <blockquote class="relative">
                            <p class="text-base text-gray-500">
                              Being in the financial industry, we were always looking for ways
                              to enhance our transactions' security and efficiency.
                            </p>
                          </blockquote>
                          <figcaption class="relative flex items-center justify-between pt-6 mt-6">
                            <div>
                              <div class="font-medium text-gray-900">Michael Andreuzza</div>
                              <div class="mt-1 text-sm text-gray-500">
                                Creator of Windstatic.com
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
                              Implementing Semplice's blockchain technology has been a
                              game-changer for our supply chain management.
                            </p>
                          </blockquote>
                          <figcaption class="relative flex items-center justify-between pt-6 mt-6">
                            <div>
                              <div class="font-medium text-gray-900">Michael Andreuzza</div>
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
                              We were initially hesitant about integrating blockchain
                              technology into our existing systems, fearing the complexity of
                              the process.
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
                    </ul>
                  </div>
                </section>
                <section>
                  <div class="px-8 py-12 mx-auto md:px-12 lg:px-32 max-w-7xl">
                    <div class="p-2 border bg-gray-50 rounded-3xl">
                      <div class="p-10 text-center bg-white border shadow-lg md:p-20 rounded-3xl">
                        <p class="text-4xl font-semibold tracking-tighter text-black">
                          Download our app today
                        </p>
                        <p class="mt-4 text-base text-gray-500">
                          The fastest method for working together
                          <span class="md:block">
                            on staging and temporary environments.</span>
                        </p>
                        <div class="flex flex-col items-center justify-center gap-2 mx-auto mt-8 md:flex-row">
                          <button class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 bg-gray-100 md:w-auto rounded-xl hover:bg-gray-200 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-4" viewBox="0 0 512 512">
                              <path d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z"></path></svg><span class="text-xs text-gray-600">Download on Google Play</span></button><button class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 bg-gray-100 md:w-auto rounded-xl hover:bg-gray-200 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-4" viewBox="0 0 305 305">
                              <path d="M40.74 112.12c-25.79 44.74-9.4 112.65 19.12 153.82C74.09 286.52 88.5 305 108.24 305c.37 0 .74 0 1.13-.02 9.27-.37 15.97-3.23 22.45-5.99 7.27-3.1 14.8-6.3 26.6-6.3 11.22 0 18.39 3.1 25.31 6.1 6.83 2.95 13.87 6 24.26 5.81 22.23-.41 35.88-20.35 47.92-37.94a168.18 168.18 0 0021-43l.09-.28a2.5 2.5 0 00-1.33-3.06l-.18-.08c-3.92-1.6-38.26-16.84-38.62-58.36-.34-33.74 25.76-51.6 31-54.84l.24-.15a2.5 2.5 0 00.7-3.51c-18-26.37-45.62-30.34-56.73-30.82a50.04 50.04 0 00-4.95-.24c-13.06 0-25.56 4.93-35.61 8.9-6.94 2.73-12.93 5.09-17.06 5.09-4.64 0-10.67-2.4-17.65-5.16-9.33-3.7-19.9-7.9-31.1-7.9l-.79.01c-26.03.38-50.62 15.27-64.18 38.86z"></path>
                              <path d="M212.1 0c-15.76.64-34.67 10.35-45.97 23.58-9.6 11.13-19 29.68-16.52 48.38a2.5 2.5 0 002.29 2.17c1.06.08 2.15.12 3.23.12 15.41 0 32.04-8.52 43.4-22.25 11.94-14.5 17.99-33.1 16.16-49.77A2.52 2.52 0 00212.1 0z"></path></svg><span class="text-xs text-gray-600">Download on App Store</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <footer>
                  <div class="h-full px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl">
                    <div class="pt-12 border-t border-gray-300 xl:grid xl:grid-cols-3 xl:gap-8">
                      <div class="text-black">
                        <div class="inline-flex items-center gap-3">
                          <p class="text-2xl font-bold uppercase">Appify</p>
                        </div>
                        <p class="mt-2 text-sm text-gray-500 lg:w-4/5">
                          Windstatic, basic and sturdy themes under the creative commons
                          license.
                        </p>
                      </div>
                      <div class="grid grid-cols-2 gap-8 mt-12 lg:grid-cols-3 lg:mt-0 xl:col-span-2">
                        <div>
                          <h3 class="text-black">Information</h3>
                          <ul role="list" class="mt-4 space-y-2">
                            <li>
                              <a href="#_" class="text-sm text-gray-500 hover:text-black">
                                License
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div>
                          <h3 class="text-black">Socials</h3>
                          <ul role="list" class="mt-4 space-y-2">
                            <li>
                              <a href="https://twitter.com/lexingtonthemes" class="text-sm text-gray-500 hover:text-black">
                                @lexingtonthemes
                              </a>
                            </li>
                            <li>
                              <a href="https://twitter.com/Mike_Andreuzza" class="text-sm text-gray-500 hover:text-black">
                                @Mike_Andreuzza
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                          <h3 class="text-black">Premium Themes</h3>
                          <ul role="list" class="mt-4 space-y-2">
                            <li>
                              <a href="https://lexingtonthemes.com/" class="text-sm text-gray-500 hover:text-black">
                                Lexington Themes
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col pt-12 md:flex-row md:items-center md:justify-between">
                      <p class="text-left">
                        <span class="mx-auto mt-2 text-sm text-gray-500 lg:mx-0">
                          © Windstatic. By:
                          <a class="text-accent-500 hover:text-accent-600" href="https://michaelandreuzza.com/">Michael Andreuzza</a>
                          Demo Images: Respective owners.
                        </span>
                      </p>
                    </div>

    <!-- Section 3 -->
    <section>
        <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <div class="text-center">
                <h1 class="text-4xl font-semibold tracking-tighter text-gray-900 lg:text-5xl text-balance">
                <span class="text-gray-600">Roles</span>
                </h1>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="flex justify-center items-center text-sm font-medium text-center text-gray-500 gap-x-20 text-balance">
                <div class="kartu">
                    <p>Anggota</p>
                        <div class="konten">
                        <br>
                        <p class="deskripsi">Anggota dapat melakukan simpanan, melihat jumlah simpanan yang telah dilakukan, dan memeriksa status dari data simpanan tersebut.</p>
                    </div>
                </div>

                <div class="kartu">
                    <p>Pengurus</p>
                        <div class="konten">
                        <br>
                        <p class="deskripsi">
                            Pengurus dapat melakukan simpanan ke dalam sistem, memantau rekapitulasi lengkap, dan mengelola informasi anggota yang terdaftar di dalamnya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <section>

    <!-- Section 4 -->
    
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
                                    Subhil Ma'ruf
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
    </script>
</body>
</html>
