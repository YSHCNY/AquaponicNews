<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AS | Water Temperature Report</title>
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

    <aside id="sidebar" class="md:ml-[1rem] border-2 border-slate-50 rounded-lg ml-[-1rem] md:border-r-2 md:border-r-white md:rounded-r-lg bg-[#212127]  text-gray-100 md:w-64 w-3/4 space-y-6 pt-2 px-0 absolute inset-y-0 left-0 transform md:relative md:translate-x-0 transition duration-200 ease-in-out  md:flex md:flex-col md:justify-between overflow-y-auto" data-dev-hint="sidebar; px-0 for frameless; px-2 for visually inset the navigation">
        <div class="flex flex-col space-y-6" data-dev-hint="optional div for having an extra footer navigation">
            <a href="dashboard.php" class="text-white flex items-center space-x-2 px-4" title="Aquaponic System Logo">
              <!-- LOGOs -->
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
                <a href="history.php" class="flex mt-3 items-center  transition duration-200  hover:text-white">
                   <!-- HISTORY  -->
                    <div class=" flex flex-col items-center mx-auto px-8 py-5 hover:bg-[#303039] rounded-md duration-300 cursor-pointer  ">
                    <svg class="w-[3rem] h-[3rem]" viewBox="0 0 55 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35.8533 32.4977H16.6889C15.5664 32.4977 14.6356 31.5534 14.6356 30.4146C14.6356 29.2758 15.5664 28.3314 16.6889 28.3314H35.8533C36.9758 28.3314 37.9067 29.2758 37.9067 30.4146C37.9067 31.5534 36.9758 32.4977 35.8533 32.4977Z" fill="white"/>
                    <path d="M28.3381 49.6236H16.3467C15.2242 49.6236 14.2933 48.6793 14.2933 47.5405C14.2933 46.4017 15.2242 45.4573 16.3467 45.4573H28.3381C29.4606 45.4573 30.3915 46.4017 30.3915 47.5405C30.3915 48.6793 29.4606 49.6236 28.3381 49.6236Z" fill="white"/>
                    <path d="M33.1156 15.2764H22.1644C19.5362 15.2764 14.6356 15.2764 14.6356 7.63822C14.6356 0 19.5362 0 22.1644 0H33.1156C35.7438 0 40.6444 0 40.6444 7.63822C40.6444 10.3047 40.6444 15.2764 33.1156 15.2764ZM22.1644 4.1663C19.454 4.1663 18.7422 4.1663 18.7422 7.63822C18.7422 11.1101 19.454 11.1101 22.1644 11.1101H33.1156C36.5378 11.1101 36.5378 10.388 36.5378 7.63822C36.5378 4.1663 35.826 4.1663 33.1156 4.1663H22.1644Z" fill="white"/>
                    <path d="M35.8533 59.7167H19.4267C4.04036 59.7167 0.946671 52.5507 0.946671 40.9684V24.3032C0.946671 11.6377 5.464 6.2215 16.5794 5.63822C17.6745 5.58267 18.6875 6.4437 18.7422 7.61026C18.797 8.77683 17.9209 9.72119 16.7984 9.77674C9.02312 10.2211 5.05334 12.5821 5.05334 24.3032V40.9684C5.05334 51.2452 7.05191 55.5504 19.4267 55.5504H35.8533C48.2281 55.5504 50.2267 51.2452 50.2267 40.9684V24.3032C50.2267 12.5821 46.2569 10.2211 38.4816 9.77674C37.3591 9.72119 36.483 8.72128 36.5378 7.58249C36.5925 6.4437 37.5781 5.55489 38.7006 5.61044C49.816 6.2215 54.3333 11.6377 54.3333 24.2755V40.9406C54.3333 52.5507 51.2396 59.7167 35.8533 59.7167Z" fill="white"/>
                    </svg>
                    <span class="text-[1rem] mt-2 mx-auto text-gray-200">HISTORY</span>
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
    <div class="max-w-7xl mx-auto">
            <!-- Replace with your content -->
            <h1 class="text-2xl font-bold text-white mb-5">pH Report</h1>
            <div class="flex sm:flex-row flex-col w-full">
                <div class="bg-[#118128] px-10 py-5 rounded-[20px] border-2 border-slate-50 grow[1] sm:mr-4 sm:mb-0 mb-4">
                    <div class="flex items-center justify-center mb-2">
                        <div class="mr-4">
                            <svg class="w-[3rem]" viewBox="0 0 92 113" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M71.5928 30.5213L13.5967 88.5173C10.8887 91.2253 6.26252 90.6047 4.62645 87.1633C1.69279 81.1268 0.000301452 74.3004 0.000301452 67.1355C-0.112531 35.9937 31.4807 9.36512 42.1998 1.18474C44.2872 -0.394915 47.108 -0.394915 49.139 1.18474C54.0473 4.90823 63.2431 12.6373 71.8748 22.7922C73.793 25.0489 73.6802 28.4339 71.5928 30.5213Z" fill="#FFFFFF"/>
                            <path d="M91.4033 67.1936C91.4033 92.3553 70.9242 112.834 45.7061 112.834C35.6075 112.834 26.1858 109.562 18.5695 103.921C15.8051 101.89 15.5795 97.8277 18.0054 95.4018L74.8169 38.5903C77.4685 35.9387 81.9254 36.5028 83.7307 39.775C88.3568 48.2941 91.4597 57.5464 91.4033 67.1936Z" fill="#FFFFFF"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white text-center sm:text-center">5.3</h3>
                    </div>
                    <h5 class="text-center text-white">pH Value</h5>
                    
                </div>
                <div class="bg-[#0AB8B6] px-10 py-5 rounded-[20px] border-2 border-slate-50 grow">
                    <div class="flex flex-col justify-between h-full">
                        <div class="flex items-center mb-2 grow">
                            <h1 class="text-2xl text-white flex mx-auto">Change the Water</h1>
                        </div>
                        <h5 class="text-center text-white">Diagnosis</h5>
                    </div>
                </div>
                <div>

                </div>
            </div>
         
           <!-- TABLE ////////////////////////////////////////////// -->

           <!-- DB CONNECTION -->
        <?php
                        //Creates new record as per request
                        //Connect to database
                        $hostname = "localhost";		//example = localhost or 192.168.0.0
                        $username = "root";		//example = root
                        $password = "";	
                        $dbname = "aquaponic_db";
                        // Create connection
                        $conn = mysqli_connect($hostname, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed !!!");
                        } 
                    ?>

       
           <section class="my-12">
            <div class="overflow-x-hidden shadow-2xl rounded-md">

            <div class="px-5 pt-3">
                <h1 class="text-2xl text-dark font-bold mb-4">Hourly Report</h1>
            </div>
                <table class="w-full text-md text-left text-[#00000] dark:text-[#00000]">
                    <thead class=" text-md text-[#00000] uppercase bg-[#D9D9D9]  dark:text-[#00000]">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                            Time
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Water Temperature
                            </th>
                            <th scope="col" class="px-6 py-3">
                                 Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                        $table = mysqli_query($conn, "SELECT * FROM waterreporttbl"); //nodemcu_ldr_table = Youre_table_name
                                        while($row = mysqli_fetch_array($table))
                                        {
                                    ?>
                                        <tr class="flex table-row mb-2 ">
                                            <td class="border-grey-light border p-3"><?php echo $row["date"]; ?></td>
                                            <td class="border-grey-light border p-3"><?php echo $row["time"]; ?></td>
                                            <td class="border-grey-light border p-3 "><?php echo $row["watertemp"]; ?></td>
                                            <td class="border-grey-light border p-3  "><?php echo $row["status"]; ?></td>
                                        </tr>
                                    
                                    </tbody>
                            
                                    <?php
                                        }
                                    ?>
                </table>

            </div>
           </section>


            <!-- /End replace -->
        </div>
    </main>
</div>



</body>

</html>