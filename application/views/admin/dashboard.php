<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">


<!-- Custom fonts for this template-->
<link href="<?= base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?= base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="<?= base_url('laporan-pinjaman') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-primary text-uppercase mb-1">
                                Total Peminjaman</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp. " . number_format($peminjaman,0,',','.') ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-success text-uppercase mb-1">
                                Total Pembayaran Angsuran</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp. ". number_format($angsuran,0,'','.') ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-info text-uppercase mb-1">Sisa Angsuran
                            </div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= "Rp. ". number_format($sisa,0,'','.') ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Angsuran</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp. ". number_format($total,0,'','.') ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-primary text-uppercase mb-1">
                                Total Simpanan Modal</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp. " . number_format($modal,0,',','.') ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-success text-uppercase mb-1">
                                Total Simpanan Investasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp. ". number_format($investasi,0,'','.') ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-info text-uppercase mb-1">Total Simpanan Tabungan
                            </div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= "Rp. ". number_format($tabungan,0,'','.') ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Simpanan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "Rp. ". number_format($simpanan,0,'','.') ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Simpanan Bulanan</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="SimpananChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Pinjaman Bulanan</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="PinjamanChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Keuntungan Bulanan</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="LabaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>/assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>/assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script>
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}
var ctx = document.getElementById("SimpananChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [
        <?php if (date('m')=='01') {
            echo '"Agustus","September","Oktober","November","Desember","Januari"';
        } elseif (date('m')=='02') {
            echo '"September","Oktober","November","Desember","Januari","Februari"';
        } elseif (date('m')=='03') {
            echo '"Oktober","November","Desember","Januari","Februari","Maret"';
        } elseif (date('m')=='04') {
            echo '"November","Desember","Januari","Februari","Maret","April"';
        } elseif (date('m')=='05') {
            echo '"Desember","Januari","Februari","Maret","April","Mei"';
        } elseif (date('m')=='06') {
            echo '"Januari","Februari","Maret","April","Mei","Juni"';
        } elseif (date('m')=='07') {
            echo '"Februari","Maret","April","Mei","Juni","Juli"';
        } elseif (date('m')=='08') {
            echo '"Maret","April","Mei","Juni","Juli","Agustus"';
        } elseif (date('m')=='09') {
            echo '"April","Mei","Juni","Juli","Agustus","September"';
        } elseif (date('m')=='10') {
            echo '"Mei","Juni","Juli","Agustus","September","Oktober"';
        } elseif (date('m')=='11') {
            echo '"Juni","Juli","Agustus","September","Oktober","November"';
        } elseif (date('m')=='12') {
            echo '"Juli","Agustus","September","Oktober","November","Desember"';
        }
        ?>
    ],
    datasets: [{
      label: "Earnings",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [<?= $simpananbulanan6+0 ?>, <?= $simpananbulanan5-0 ?>, <?= $simpananbulanan4-0 ?>, <?= $simpananbulanan3-0 ?>, <?= $simpananbulanan2-0 ?>, <?= $simpananbulanan1-0 ?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return 'Rp. ' + number_format(value,0,'','.');
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': Rp. ' + number_format(tooltipItem.yLabel,0,'','.');
        }
      }
    }
  }
});

var ctx = document.getElementById("PinjamanChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [
        <?php if (date('m')=='01') {
            echo '"Agustus","September","Oktober","November","Desember","Januari"';
        } elseif (date('m')=='02') {
            echo '"September","Oktober","November","Desember","Januari","Februari"';
        } elseif (date('m')=='03') {
            echo '"Oktober","November","Desember","Januari","Februari","Maret"';
        } elseif (date('m')=='04') {
            echo '"November","Desember","Januari","Februari","Maret","April"';
        } elseif (date('m')=='05') {
            echo '"Desember","Januari","Februari","Maret","April","Mei"';
        } elseif (date('m')=='06') {
            echo '"Januari","Februari","Maret","April","Mei","Juni"';
        } elseif (date('m')=='07') {
            echo '"Februari","Maret","April","Mei","Juni","Juli"';
        } elseif (date('m')=='08') {
            echo '"Maret","April","Mei","Juni","Juli","Agustus"';
        } elseif (date('m')=='09') {
            echo '"April","Mei","Juni","Juli","Agustus","September"';
        } elseif (date('m')=='10') {
            echo '"Mei","Juni","Juli","Agustus","September","Oktober"';
        } elseif (date('m')=='11') {
            echo '"Juni","Juli","Agustus","September","Oktober","November"';
        } elseif (date('m')=='12') {
            echo '"Juli","Agustus","September","Oktober","November","Desember"';
        }
        ?>
    ],
    datasets: [{
      label: "Earnings",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [<?= $pinjamanbulanan6-0 ?>, <?= $pinjamanbulanan5-0 ?>, <?= $pinjamanbulanan4-0 ?>, <?= $pinjamanbulanan3-0 ?>, <?= $pinjamanbulanan2-0 ?>, <?= $pinjamanbulanan1-0 ?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return 'Rp. ' + number_format(value,0,'','.');
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': Rp. ' + number_format(tooltipItem.yLabel,0,'','.');
        }
      }
    }
  }
});

var ctx = document.getElementById("LabaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [
        <?php if (date('m')=='01') {
            echo '"Agustus","September","Oktober","November","Desember","Januari"';
        } elseif (date('m')=='02') {
            echo '"September","Oktober","November","Desember","Januari","Februari"';
        } elseif (date('m')=='03') {
            echo '"Oktober","November","Desember","Januari","Februari","Maret"';
        } elseif (date('m')=='04') {
            echo '"November","Desember","Januari","Februari","Maret","April"';
        } elseif (date('m')=='05') {
            echo '"Desember","Januari","Februari","Maret","April","Mei"';
        } elseif (date('m')=='06') {
            echo '"Januari","Februari","Maret","April","Mei","Juni"';
        } elseif (date('m')=='07') {
            echo '"Februari","Maret","April","Mei","Juni","Juli"';
        } elseif (date('m')=='08') {
            echo '"Maret","April","Mei","Juni","Juli","Agustus"';
        } elseif (date('m')=='09') {
            echo '"April","Mei","Juni","Juli","Agustus","September"';
        } elseif (date('m')=='10') {
            echo '"Mei","Juni","Juli","Agustus","September","Oktober"';
        } elseif (date('m')=='11') {
            echo '"Juni","Juli","Agustus","September","Oktober","November"';
        } elseif (date('m')=='12') {
            echo '"Juli","Agustus","September","Oktober","November","Desember"';
        }
        ?>
    ],
    datasets: [{
      label: "Earnings",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [<?= $pinjamanbulanan6-$keuntunganbulanan6 ?>, <?= $pinjamanbulanan5-$keuntunganbulanan5 ?>, <?= $pinjamanbulanan4-$keuntunganbulanan4 ?>, <?= $pinjamanbulanan3-$keuntunganbulanan3 ?>, <?= $pinjamanbulanan2-$keuntunganbulanan2 ?>, <?= $pinjamanbulanan1-$keuntunganbulanan1 ?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return 'Rp. ' + number_format(value,0,'','.');
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': Rp. ' + number_format(tooltipItem.yLabel,0,'','.');
        }
      }
    }
  }
});
</script>
<script src="<?= base_url(); ?>/assets/js/demo/chart-pie-demo.js"></script>
