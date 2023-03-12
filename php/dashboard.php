<div class="mr-4">
    <!-- Replace with your content -->
  <?php
  date_default_timezone_set('Asia/Manila');
  $date = date('m-d-y');

  include 'autoUpdate.php';
  ?>
  <h1 class="text-2xl text-slate-50 my-4 font-bold">Dashboard</h1>
  <h1 class="text-l text-slate-50 my-4 font-bold">Current status today (<?php echo $date; ?>)</h1>
  <div class="flex lg:flex-row flex-col justify-around justify-center">
        <!-- ph level -->
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden relative flex flex-col items-center  my-3 px-12">
      <div class="absolute top-[45%] left-[50%] translate-y-[-45%] translate-x-[-50%]">
          <div class="flex flex-col items-center">
              <svg class="w-[55px]" viewBox="0 0 93 114" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="phLogo" d="M72.4821 31.3997L14.486 89.3957C11.778 92.1037 7.15187 91.4831 5.51579 88.0417C2.58214 82.0052 0.889645 75.1788 0.889645 68.0139C0.776812 36.8721 32.37 10.2435 43.0892 2.06316C45.1766 0.483503 47.9974 0.483503 50.0284 2.06316C54.9366 5.78664 64.1325 13.5157 72.7642 23.6706C74.6823 25.9273 74.5695 29.3123 72.4821 31.3997Z" fill="#FFFFF"/>
              <path class="phLogo" d="M92.2927 68.072C92.2927 93.2337 71.8136 113.713 46.5954 113.713C36.4969 113.713 27.0751 110.441 19.4589 104.799C16.6945 102.768 16.4688 98.7061 18.8948 96.2802L75.7063 39.4687C78.3579 36.8171 82.8147 37.3813 84.6201 40.6534C89.2462 49.1725 92.3491 58.4248 92.2927 68.072Z" fill="#FFFFF"/>
              </svg>

              <p id="pHTextCenter" class="text-dark font-bold text-3xl"></p>
          </div>
      </div>
      <div>
        <canvas class="p-5 max-w-[300px]" id="chartDoughnut"></canvas>
      </div>
      <h1 id="status" class ="phtext text-2xl font-bold">No Data</h1>
      <!-- dbstatus coloumn from database should be the content in the first h1 -->
      <h1 id = "phstatus" class = "text-black font-bold text-l pb-[5px]">---</h1>
    </div>
          <!-- temperature -->
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden relative flex flex-col items-center  my-3 px-12">
      <div class="absolute top-[45%] left-[50%] translate-y-[-45%] translate-x-[-50%]">
        <div class="flex flex-col items-center">
            <svg class="w-[65px]" viewBox="0 0 113 121" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M42.0269 65.2915V25.4C42.0269 17.1378 48.2974 10.44 56.0324 10.44C63.7674 10.44 70.0379 17.1378 70.0379 25.4V65.2915C75.7075 69.8403 79.3749 77.0827 79.3749 85.2399C79.3749 99.0102 68.9241 110.173 56.0324 110.173C43.1407 110.173 32.6899 99.0102 32.6899 85.2399C32.6899 77.0827 36.3573 69.8403 42.0269 65.2915Z" fill="#115977" stroke="#115977" stroke-width="4" stroke-linejoin="round"/>
            <path d="M56.2286 42.6515V75.0648" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M56.2286 95.0115C61.3853 95.0115 65.5656 90.5463 65.5656 85.0381C65.5656 79.53 61.3853 75.0648 56.2286 75.0648C51.0719 75.0648 46.8916 79.53 46.8916 85.0381C46.8916 90.5463 51.0719 95.0115 56.2286 95.0115Z" stroke="white" stroke-width="10" stroke-linejoin="round"/>
            </svg>
            <p id="tempTextCenter" class="text-dark font-bold text-3xl"></p>
        </div>
      </div>
      <div>
        <canvas class="p-5 max-w-[300px]" id="chartDoughnut2"></canvas>
      </div>
      <h1 id="temp" class =" text-2xl font-bold">No Data</h1>
      <!-- dbstatus coloumn from database should be the content in the first h1 -->
      <h1 class = "text-black font-bold text-l pb-[5px]">Water Temperature</h1>
    </div>
  </div>
</div>
<script>
  $(document).ready(function () {
      phDonutShow();
      tempDonutShow();
  });
  function phDonutShow()
    {
        {
            $.post("phData.php",
            function (data)
            {
                var pHValue = [];
                var dbstatus = [];
                var phstatus = [];
              
              
                for (var i in data) {
                    // name.push(data[i].student_name);
                    pHValue.push(data[i].phvalue);
                    dbstatus.push(data[i].dbstatus)
                    phstatus.push(data[i].phstatus)
                    
                }
                $('#status').text(dbstatus[0]);
                $('#phstatus').text(phstatus[0]);
                var maxpH = 14;
                let mark = maxpH - pHValue[0];
                pHValue.push(mark);
                $('#pHTextCenter').text(pHValue[0])
                var phValue = $('#pHTextCenter').text();
                var phColor;
                var phtextcolor;
              //   CUT
              
                if (phValue > 0 && phValue <= 1) {
                  phColor = "#EE1C25";
                      $(".phLogo").attr('fill', phColor);
                      $(".phtext").attr("style", 'color:#EE1C25');
                } else if (phValue > 1 && phValue <= 2) {
                  phColor = "#F26724";
                      $(".phLogo").attr('fill', phColor);
                      $(".phtext").attr("style", 'color:#F26724');
                } else if (phValue > 2 && phValue <= 3) {
                  phColor = "#F8C511";
                      $(".phLogo").attr('fill', phColor);
                      $(".phtext").attr("style", 'color:#F8C511');
                } else if (phValue > 3 && phValue <= 4) {
                  phColor = "#F5ED1C";
                      $(".phLogo").attr('fill', phColor);
                      $(".phtext").attr("style", 'color:#F5ED1C');
                } else if (phValue > 4 && phValue <= 5) {
                  phColor = "#B5D333";
                      $(".phLogo").attr('fill', phColor);
                      $(".phtext").attr("style", 'color:#B5D333');
                } else if (phValue > 5 && phValue <= 5) {
                  phColor = "#41B700";
                      $(".phLogo").attr('fill', phColor);
                      $(".phtext").attr("style", 'color:#41B700');

                } else if (phValue > 6 && phValue <= 7) {
                  phColor = "#019E00";
                      $(".phLogo").attr('fill', phColor);
                      $(".phtext").attr("style", 'color:#019E00');
                } else if (phValue > 7 && phValue <= 8) {
                  phColor = "#01AF60";
                      $(".phLogo").attr('fill', phColor);
                      $(".phtext").attr("style", 'color:#01AF60');
                } else if (phValue > 8 && phValue <= 9) {
                phColor = "#01BEBE"; 
                      $(".phLogo").attr('fill', phColor);
                      $(".phtext").attr("style", 'color:#01BEBE');

                } else if (phValue > 9 && phValue <= 10) {
                  phColor = "#1488D0";
                      $(".phLogo").attr('fill', phColor);
                      $(".phtext").attr("style", 'color:#1488D0');
                } else if (phValue > 10 && phValue <= 11) {
                  phColor = "#004FE0";
                      $(".phLogo").attr('fill', phColor);
                      $(".phtext").attr("style", 'color:#004FE0');
                } else if (phValue > 11 && phValue <= 12) {
                  phColor = "#5A51A2";
                      $(".phLogo").attr('fill', phColor);
                      $(".phtext").attr("style", 'color:#5A51A2');
                } else if (phValue > 12 && phValue <= 13) {
                  phColor = "#63459D";
                      $(".phLogo").attr('fill', phColor);
                      $(".phtext").attr("style", 'color:#63459D');
                }  else if (phValue > 13 && phValue <= 14) {
                  phColor = "#48249F";
                      $(".phLogo").attr('fill', phColor);
                      $(".phtext").attr("style", 'color:#48249F');
                } 
              //   CUT
              
                const dataDoughnut = {
                    labels: ["pH Level", ""],
                    datasets: [
                      {
                        label: "My First Dataset",
                        data: pHValue,
                        backgroundColor: [
                          phColor,
                          "#D9D9D9"
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
                        animations: false,
                        maintainAspectRatio: true,
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        events: [],
                        
                    },
                  };
                  var chartBar = new Chart(
                    document.getElementById("chartDoughnut"),
                    configDoughnut
                  );
                  
                  // console.log(chartBar.dataDoughnut);
                  chartBar.update();
            });
        }
    }

    function tempDonutShow()
          {
              {
                  $.get("tempData.php",
                  function (data)
                  {
                      var tempVal = [];
                      var tempStatus = [];
                    
                      for (var i in data) {
                          tempVal.push(data[i].watertemp);
                          tempStatus.push(data[i].status);
                      }

                      $('#temp').text(tempStatus[0]);
                      var maxTemp = 100;
                      let mark = maxTemp - tempVal[0];
                      tempVal.push(mark);
                      $('#tempTextCenter').text(tempVal[0] + "°C")
                      const dataDoughnut1 = {
                        labels: ["Water Temperature",""],
                        datasets: [
                          {
                            label: "My First Dataset",
                            data: tempVal,
                            backgroundColor: [
                              "#115977",
                              "#D9D9D9",
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
                                animations: false,
                                maintainAspectRatio: true,
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                }, 
                                events: [],
                            },
                          };
                          var chartBar = new Chart(
                            document.getElementById("chartDoughnut2"),
                            configDoughnut1
                          );
                  });
              }
          }
</script>