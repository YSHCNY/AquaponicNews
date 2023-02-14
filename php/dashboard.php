<?php
date_default_timezone_set('Asia/Manila');
$date = date('m-d-y');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AS | Dashboard </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="dist/output.css">
  <!-- <script src="./tailwind3.js"></script> -->
  
</head>


<style>
    #sidebar {
    --tw-translate-x: -100%;
}
#menu-close-icon {
    display: none;
}

#menu-open:checked ~ #sidebar {
    --tw-translate-x: 0;
}
#menu-open:checked ~ * #mobile-menu-button {
    background-color: rgba(31, 41, 55, var(--tw-bg-opacity));
}
#menu-open:checked ~ * #menu-open-icon {
    display: none;
}
#menu-open:checked ~ * #menu-close-icon {
    display: block;
}

.bgcolor {
      background: linear-gradient(0deg, rgba(0, 0, 0, 0.05) 72%, #212127 72%);
    }


@media (min-width: 768px) {
    #sidebar {
        --tw-translate-x: 0;
    }
}

</style>


<body class="bgcolor">
<div class="relative min-h-screen md:flex" data-dev-hint="container">
    <input type="checkbox" id="menu-open" class="hidden" />

    <label for="menu-open" class="absolute right-2 bottom-2 shadow-lg rounded-full p-2 bg-gray-100 text-gray-600 md:hidden" data-dev-hint="floating action button">
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </label>

    <header class="bg-[#212127] text-gray-100 flex justify-between md:hidden" data-dev-hint="mobile menu bar">
        <a href="#" class="block p-4 text-white font-bold whitespace-nowrap truncate">
           
        </a>

        <label for="menu-open" id="mobile-menu-button" class="m-2 p-2 focus:outline-none hover:text-white hover:bg-gray-700 rounded-md">
            <svg id="menu-open-icon" class="h-6 w-6 transition duration-200 ease-in-out" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="menu-close-icon" class="h-6 w-6 transition duration-200 ease-in-out" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </label>
    </header>

    <aside id="sidebar" class="md:ml-[1rem] border-2 border-slate-50 rounded-lg ml-[-1rem] md:border-r-2 md:border-r-white md:rounded-r-lg bg-[#212127]  text-gray-100 md:w-64 w-3/4 space-y-6 pt-2 px-0 absolute inset-y-0 left-0 transform md:relative md:translate-x-0 transition duration-200 ease-in-out  md:flex md:flex-col md:justify-between overflow-y-auto z-[999]" data-dev-hint="sidebar; px-0 for frameless; px-2 for visually inset the navigation">
        <div class="flex flex-col space-y-6" data-dev-hint="optional div for having an extra footer navigation">
            <a href="dashboard.php" class="text-white flex items-center space-x-2 px-4" title="Aquaponic System Logo">
              <!-- LOGO -->
              <div class="py-1.5 pl-6 mt-1 flex items-center justify-between rounded-md ">

                <div class =" flex flex-col md:flex-row">
                <svg class="w-[2rem] h-[3rem]" viewBox="0 0 130 161" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M101.705 43.359L19.3156 125.749C15.4686 129.596 8.89664 128.715 6.5724 123.826C2.40481 115.25 0.000428248 105.552 0.000428248 95.3738C-0.159864 51.1332 44.7219 13.3042 59.9494 1.68307C62.9148 -0.561022 66.9221 -0.561022 69.8073 1.68307C76.78 6.97271 89.8438 17.9527 102.106 32.379C104.831 35.5849 104.671 40.3936 101.705 43.359Z" fill="#1D419F"/>
                <path opacity="0.4" d="M129.834 95.454C129.834 131.199 100.74 160.292 64.9152 160.292C50.5691 160.292 37.1843 155.644 26.3646 147.629C22.4375 144.744 22.1169 138.973 25.5632 135.527L106.271 54.8201C110.037 51.0532 116.369 51.8547 118.934 56.5031C125.506 68.605 129.914 81.749 129.834 95.454Z" fill="#02800E"/>
                </svg>

                </div>
                <h1 class="  md:text-[1rem]  md:pl-[10px] text-[13px] flex md:mx-auto ml-5 text-xl text-gray-200 font-bold">Aquaponic System</h1>
                

                </div>


            </a>

            <nav data-dev-hint="main navigation">
                <a href="dashboard.php" class="flex mt-3 items-center  transition duration-200  hover:text-white">
                <!-- DASHBOARD -->

                <div class=" flex flex-col items-center mx-auto px-8 py-5 hover:bg-[#303039] rounded-md duration-300 cursor-pointer  ">

                <svg class="w-[3rem] h-[3rem]" viewBox="0 0 131 131" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.727173 0.353943H130.562V130.189H0.727173V0.353943Z" fill="white" fill-opacity="0.01"/>
                <path d="M119.742 65.2713C119.742 95.1487 95.5219 119.369 65.6445 119.369C35.7671 119.369 11.5468 95.1487 11.5468 65.2713M119.742 65.2713H108.923M119.742 65.2713C119.742 50.35 113.701 36.8394 103.931 27.0524M11.5468 65.2713H22.3663M11.5468 65.2713C11.5468 50.3498 17.5878 36.8394 27.3576 27.0524M103.931 27.0524C94.1389 17.2427 80.6004 11.1735 65.6445 11.1735M103.931 27.0524L95.4664 35.5175M27.3576 27.0524C37.1501 17.2427 50.6886 11.1735 65.6445 11.1735M27.3576 27.0524L35.8226 35.5175M65.6445 11.1735V21.9931" stroke="white" stroke-width="10.8196" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M65.6445 54.4517V86.9104" stroke="white" stroke-width="10.8196" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M108.523 98.2603C98.6316 111.098 83.1039 119.369 65.6444 119.369C48.1849 119.369 32.6572 111.098 22.7657 98.2603C35.4062 91.0377 50.0434 86.9103 65.6444 86.9103C81.2454 86.9103 95.8823 91.0377 108.523 98.2603Z" stroke="white" stroke-width="10.8196" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <span class="text-[1rem] mt-2 mx-auto text-gray-200">DASHBOARD</span>
                </div>

                </a>
               
                <a href="phlevel.php" class="flex mt-3 items-center  transition duration-200  hover:text-white">
                      <!-- PH LEVEL  -->

                      <div class=" flex flex-col items-center mx-auto px-8 py-5 hover:bg-[#303039] rounded-md duration-300 cursor-pointer  ">
                    <svg class="w-[3rem] h-[3rem]" viewBox="0 0 55 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M42.7154 18.7178L8.84143 53.0837C7.25977 54.6883 4.55776 54.3206 3.60218 52.2813C1.88871 48.7043 0.90017 44.6593 0.90017 40.4138C0.834267 21.9605 19.287 6.18167 25.5478 1.33435C26.767 0.398316 28.4145 0.398316 29.6008 1.33435C32.4675 3.54072 37.8386 8.12059 42.8801 14.138C44.0005 15.4751 43.9346 17.4809 42.7154 18.7178Z" fill="white"/>
                        <path d="M54.2862 40.4483C54.2862 55.358 42.3249 67.493 27.5956 67.493C21.6974 67.493 16.1944 65.5541 11.746 62.2111C10.1313 61.0076 9.99953 58.6007 11.4164 57.1632L44.5985 23.4993C46.1472 21.9281 48.7504 22.2624 49.8048 24.2013C52.5068 29.2493 54.3191 34.7318 54.2862 40.4483Z" fill="white"/>
                        </svg>

                    </svg>
                    <span class="text-[1rem] mt-2 mx-auto text-gray-200">pH REPORT</span>
                    </div>
                    </a>


                <a href="water.php" class="flex mt-3 items-center  transition duration-200  hover:text-white">
                      <!-- WATER TEMP  -->
                      <div class=" flex flex-col items-center mx-auto px-8 py-5 hover:bg-[#303039] rounded-md duration-300 cursor-pointer  ">
         <svg class="w-[5rem] h-[4rem]" viewBox="0 0 96 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M36.4027 54.8787V21.3514C36.4027 14.4074 41.6901 8.77814 48.2125 8.77814C54.7348 8.77814 60.0222 14.4074 60.0222 21.3514V54.8787C64.803 58.7019 67.8954 64.7888 67.8954 71.6447C67.8954 83.2181 59.083 92.6002 48.2125 92.6002C37.3419 92.6002 28.5295 83.2181 28.5295 71.6447C28.5295 64.7888 31.6219 58.7019 36.4027 54.8787Z" fill="white" stroke="white" stroke-width="4" stroke-linejoin="round"/>
            <path d="M48.3778 35.8508V63.093" stroke="#363642" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M48.3778 79.8574C52.7261 79.8574 56.251 76.1046 56.251 71.4752C56.251 66.8459 52.7261 63.093 48.3778 63.093C44.0296 63.093 40.5047 66.8459 40.5047 71.4752C40.5047 76.1046 44.0296 79.8574 48.3778 79.8574Z" stroke="#363642" stroke-width="10" stroke-linejoin="round"/>
            </svg>


        </svg>
    <span class="text-[1rem] mt-2 mx-auto text-gray-200">TEMPERATURE REPORT</span>
        </div>
      
                </a>
            </nav>
        </div>

     
    </aside>

    <main id="content" class="flex-1 p-6 lg:px-8">
        <div class="">
            <!-- Replace with your content -->
            <h1 class="text-2xl text-slate-50 my-4 font-bold">Dashboard</h1>
            <h1 class="text-l text-slate-50 my-4 font-bold">Current status today (<?php echo $date; ?>)</h1>
            <div class="flex lg:flex-row flex-col justify-around justify-center">
                <div class="bg-white shadow-2xl rounded-2xl overflow-hidden relative flex flex-col items-center w-inherit mx-3 my-3 px-5">
                    <!-- <div class="py-3 px-5 bg-gray-50">Doughnut chart</div> -->
                    <div class="absolute top-[50%] left-[50%] translate-y-[-50%] translate-x-[-50%]">
                        <div class="flex flex-col items-center">
                            <svg class="w-[60px]" viewBox="0 0 93 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M72.4821 31.3997L14.486 89.3957C11.778 92.1037 7.15187 91.4831 5.51579 88.0417C2.58214 82.0052 0.889645 75.1788 0.889645 68.0139C0.776812 36.8721 32.37 10.2435 43.0892 2.06316C45.1766 0.483503 47.9974 0.483503 50.0284 2.06316C54.9366 5.78664 64.1325 13.5157 72.7642 23.6706C74.6823 25.9273 74.5695 29.3123 72.4821 31.3997Z" fill="#02800E"/>
                            <path d="M92.2927 68.072C92.2927 93.2337 71.8136 113.713 46.5954 113.713C36.4969 113.713 27.0751 110.441 19.4589 104.799C16.6945 102.768 16.4688 98.7061 18.8948 96.2802L75.7063 39.4687C78.3579 36.8171 82.8147 37.3813 84.6201 40.6534C89.2462 49.1725 92.3491 58.4248 92.2927 68.072Z" fill="#02800E"/>
                            </svg>

                            <p class="text-dark font-bold text-3xl">5</p>
                        </div>
                    </div>
                    <div>
                    <canvas class="p-5 max-w-[300px]" id="chartDoughnut"></canvas>
                    </div>
                </div>
                <div class="bg-white shadow-2xl rounded-2xl overflow-hidden relative flex flex-col items-center mx-3 my-3 px-5">
                    <div class="absolute top-[50%] left-[50%] translate-y-[-50%] translate-x-[-50%]">
                        <div class="flex flex-col items-center">
                            <svg class="w-[60px]" viewBox="0 0 113 121" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M42.0269 65.2915V25.4C42.0269 17.1378 48.2974 10.44 56.0324 10.44C63.7674 10.44 70.0379 17.1378 70.0379 25.4V65.2915C75.7075 69.8403 79.3749 77.0827 79.3749 85.2399C79.3749 99.0102 68.9241 110.173 56.0324 110.173C43.1407 110.173 32.6899 99.0102 32.6899 85.2399C32.6899 77.0827 36.3573 69.8403 42.0269 65.2915Z" fill="#115977" stroke="#115977" stroke-width="4" stroke-linejoin="round"/>
                            <path d="M56.2286 42.6515V75.0648" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M56.2286 95.0115C61.3853 95.0115 65.5656 90.5463 65.5656 85.0381C65.5656 79.53 61.3853 75.0648 56.2286 75.0648C51.0719 75.0648 46.8916 79.53 46.8916 85.0381C46.8916 90.5463 51.0719 95.0115 56.2286 95.0115Z" stroke="white" stroke-width="10" stroke-linejoin="round"/>
                            </svg>
                            <p class="text-dark font-bold text-3xl">25 C</p>
                        </div>
                    </div>
                    <!-- <div class="py-3 px-5 bg-gray-50">Doughnut chart</div> -->
                    <div>
                    <canvas class="p-5 max-w-[300px]" id="chartDoughnut2"></canvas>
                    </div>
                </div>
                <div class="bg-white shadow-2xl rounded-2xl overflow-hidden relative flex flex-col items-center mx-3 my-3 px-5">
                    <div class="absolute top-[50%] left-[50%] translate-y-[-50%] translate-x-[-50%]">
                        <div class="flex flex-col items-center">
                            <svg class="w-[60px]" viewBox="0 0 107 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.248901 0.510498H106.787V107.049H0.248901V0.510498Z" fill="white" fill-opacity="0.01"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M53.5181 98.1708C71.9055 98.1708 86.8114 83.2649 86.8114 64.8775C86.8114 33.8038 53.5181 9.38873 53.5181 9.38873C53.5181 9.38873 20.2249 33.8038 20.2249 64.8775C20.2249 83.2649 35.1307 98.1708 53.5181 98.1708Z" stroke="#1D419F" stroke-width="6.35241" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.2249 64.8775C20.2249 83.2649 35.1307 98.1707 53.5181 98.1707C71.9055 98.1707 86.8114 83.2649 86.8114 64.8775C86.8114 64.8775 66.8354 71.5361 53.5181 64.8775C40.2008 58.2188 20.2249 64.8775 20.2249 64.8775Z" fill="white" stroke="#1D419F" stroke-width="6.35241" stroke-linejoin="round"/>
                            </svg>
                            <p class="text-dark font-bold text-3xl">80%</p>
                        </div>
                    </div>
                    <!-- <div class="py-3 px-5 bg-gray-50">Doughnut chart</div> -->
                    <div>
                    <canvas class="p-5 max-w-[300px]" id="chartDoughnut3"></canvas>
                    </div>
                </div>
            </div>
            
            <!-- /End replace -->
        </div>
    </main>
</div>
<script src="../js/chart.js"></script>
<script>
  const dataDoughnut = {
    labels: ["pH Level", ""],
    datasets: [
      {
        label: "My First Dataset",
        data: [9, 5],
        backgroundColor: [
          "#02800E",
          "#B9DBBD"
        ],
        hoverOffset: 4,
        cutout: "90%",
      },
    ],
  };
  
  const configDoughnut = {
    type: "doughnut",
    data: dataDoughnut,
    options: {
        maintainAspectRatio: true,
        plugins: {
            legend: {
                display: false
            }
        }
    },
  };
  var chartBar = new Chart(
    document.getElementById("chartDoughnut"),
    configDoughnut
  );

//   second donut
  const dataDoughnut1 = {
    labels: ["JavaScript", "Python", "Ruby"],
    datasets: [
      {
        label: "My First Dataset",
        data: [300, 50],
        backgroundColor: [
          "#115977",
          "#B9DBBD",
        ],
        hoverOffset: 4,
        cutout: "90%",
      },
    ],
  };

  const configDoughnut1 = {
    type: "doughnut",
    data: dataDoughnut1,
    options: {
        plugins: {
            legend: {
                display: false
            }
        }
    },
  };

  var chartBar = new Chart(
    document.getElementById("chartDoughnut2"),
    configDoughnut1
  );


// third donut
const dataDoughnut2 = {
    labels: ["JavaScript", "Python", "Ruby"],
    datasets: [
      {
        label: "My First Dataset",
        data: [300, 50],
        backgroundColor: [
          "#1D419F",
          "#B9DBBD",
        ],
        hoverOffset: 4,
        cutout: "90%",
      },
    ],
  };

  const configDoughnut2 = {
    type: "doughnut",
    data: dataDoughnut2,
    options: {
        plugins: {
            legend: {
                display: false
            }
        }
    },
  };

  var chartBar = new Chart(
    document.getElementById("chartDoughnut3"),
    configDoughnut2
  );
</script>

<script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
</body>

</html>