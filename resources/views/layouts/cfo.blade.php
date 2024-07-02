<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>IHM CARE</title>
  <!-- Iconic Fonts -->

    <!-- Include local Bootstrap CSS -->
    <link href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iconic-fonts/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iconic-fonts/flat-icons/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/sweetalert.min.js') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('assets/css/morris.css') }}" rel="stylesheet"> -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

    <script src="{{asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{asset('assets/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset('assets/js/buttons.html5.min.js') }}"></script>
    <script src="{{asset('assets/js/buttons.print.min.js') }}"></script>
    <script src="{{asset('assets/js/pdfmake.min.js') }}"></script>
    <script src="{{asset('assets/js/vfs_fonts.js') }}"></script>
    <script src="{{asset('sweetalert.min.js') }}"></script>
  
  
</head>
<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
<!-- <body class="ms-body ms-primary-theme"> -->

    <div id="app">
    <!-- <div id="preloader-wrap">
         <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
         </div>
      </div> -->

      <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
        <a class="pl-0 ml-0 text-center" href="dashboard">
        <img src="{{ asset('assets/img/ihmcareicon.png') }}" alt="logo">
    </a>
      <!-- <a href="#" class="text-center ms-logo-img-link"> <img src="assets/img/dashboard/doctor-3.jpg" alt="logo"></a>
      <h5 class="text-center text-white mt-2">Dr.Samuel</h5>
      <h6 class="text-center text-white mb-3">Admin</h6> -->
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->

      <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <span><i class="fas fa-desktop text-white"></i>Dashboard</span>
        </a>
      </li>

     <!--  <li class="menu-item">
        <a href="?action=#1">
           <span><i class="fas fa-arrow-circle-right"></i>Transaction Postings</span>
        </a>
      </li> -->

      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#trans_posting" aria-expanded="false" aria-controls="trans_posting">
          <span><i class="fas fa-laptop"></i>Transaction Postings</span>
        </a>
        <ul id="trans_posting" class="collapse" aria-labelledby="trans_posting" data-parent="#side-nav-accordion">
          <li> <a href="">Revenues</a> </li>
          <li> <a href="">Expenses</a> </li>
          <li> <a href="">Liabilities</a> </li>
          <li> <a href="">Assets</a> </li>
          <li> <a href="">Post Transaction</a> </li>
          <li> <a href="">Item Requestion</a> </li>
          <li> <a href="">Leave Dashboard</a> </li>
          <li> <a href="">Confirmation Appraisal</a> </li>
          <li> <a href="">Clinic Paper </a> </li>
        </ul>
      </li>



      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#accounts" aria-expanded="false" aria-controls="accounts">
          <span><i class="fas fa-laptop"></i>Chart of Accounts</span>
        </a>
        <ul id="accounts" class="collapse" aria-labelledby="accounts" data-parent="#side-nav-accordion">
          <li> <a href="">Create new account</a> </li>
          <li> <a href="">Edit account</a> </li>
          <li> <a href="">View chart of accounts</a> </li>
          <li> <a href="">View Accounts Logs</a> </li>
        </ul>
      </li>




       <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#refunds" aria-expanded="false" aria-controls="refunds">
          <span><i class="fas fa-laptop"></i>Refunds</span>
        </a>
        <ul id="refunds" class="collapse" aria-labelledby="refunds" data-parent="#side-nav-accordion">
          <li> <a href="">Process refund</a> </li>
          <li> <a href="">View refund history</a> </li>
        </ul>
      </li>



      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#fin_report" aria-expanded="false" aria-controls="fin_report">
          <span><i class="fas fa-laptop"></i>Financial Reports</span>
        </a>
        <ul id="fin_report" class="collapse" aria-labelledby="fin_report" data-parent="#side-nav-accordion">
          <li> <a href="">Cash Activities</a> </li>
          <li> <a href="">Account Statement</a> </li>
          <li> <a href="">Subledger Statement</a> </li>
          <li> <a href="">General Ledgers</a> </li>
          <li> <a href="">Trial Balance</a> </li>
          <li> <a href="">Daily Trail Balance</a> </li>
        </ul>
      </li>


      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#budgeting" aria-expanded="false" aria-controls="budgeting">
          <span><i class="fas fa-laptop"></i>Budgeting</span>
        </a>
        <ul id="budgeting" class="collapse" aria-labelledby="budgeting" data-parent="#side-nav-accordion">
          <li> <a href="">SBU Previous Revenue</a> </li>
          <li> <a href="">Setup SBU Revenue Budget</a> </li>
          <li> <a href="">Expense Budget</a> </li>
          <li> <a href="">View SBU Budget</a> </li>
          <li> <a href="">View Expense Budget</a> </li>
        </ul>
      </li>



      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#payroll" aria-expanded="false" aria-controls="payroll">
          <span><i class="fas fa-laptop"></i>Payroll</span>
        </a>
        <ul id="payroll" class="collapse" aria-labelledby="payroll" data-parent="#side-nav-accordion">
          <li> <a href="">Employee Payroll</a> </li>
          <li> <a href="">Add Allowance</a> </li>
          <li> <a href="">Add Deduction</a> </li>
          <li> <a href="">View Allowance </a> </li>
          <li> <a href="">View Deduction</a> </li>
          <li> <a href="">Initial Salaries</a> </li>
          <li> <a href="">Post Allowance</a> </li>
          <li> <a href="">Post Deduction</a> </li>
          <li> <a href="">Post Tax Adjustment</a> </li>
          <li> <a href="">Payroll History</a> </li>
        </ul>
      </li>



      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#revenue" aria-expanded="false" aria-controls="revenue">
          <span><i class="fas fa-laptop"></i>Revenue Reports</span>
        </a>
        <ul id="revenue" class="collapse" aria-labelledby="revenue" data-parent="#side-nav-accordion">
          <li> <a href="">SBU</a> </li>
          <li> <a href="">Departmental</a> </li>
          <li> <a href="">Patient Category</a> </li>
          <li> <a href="">Patient Type</a> </li>
          <li> <a href="">Procedures</a> </li>
          <li> <a href="">Investigations</a> </li>
          <li> <a href="">Drugs</a> </li>
          <li> <a href="">Beds</a> </li>
          <li> <a href="">Professional Fees</a> </li>
          <li> <a href="">Wards</a> </li>
          <li> <a href="">Services Group</a> </li>
        </ul>
      </li>






      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#operation_report" aria-expanded="false" aria-controls="operation_report">
          <span><i class="fas fa-laptop"></i>Operational Reports</span>
        </a>
        <ul id="operation_report" class="collapse" aria-labelledby="operation_report" data-parent="#side-nav-accordion">
          <li> <a href="">Patient Visits</a> </li>
          <li> <a href="">Admissions</a> </li>
          <li> <a href="">Procedures Count</a> </li>
          <li> <a href="">Investigations Count</a> </li>
        </ul>
      </li>



      <li class="menu-item bg-white">
        <a href="#">
          <span class="text-dark"><i class="fas fa-arrow-circle-right text-dark"></i>Expense Review</span>
        </a>
      </li>



      <li class="menu-item ">
       <span>&nbsp;</span>
      </li>



      <li class="menu-item bg-white">
        <a href="?action=#2">
          <span class="text-dark"><i class="fas fa-arrow-circle-right text-dark"></i>Expense Request</span>
        </a>
      </li>

    </ul>
  </aside>


  <main class="body-content">
    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">
      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
      </div>
      <div class="logo-sn logo-sm ms-d-block-sm">
        <!-- <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index-2.html"><img src="assets/img/medboard-logo-84x41.png" alt="logo"> </a> -->
        <button class="btn btn-success btn-sm" >Logged in - <?php //echo $_SESSION['username']; ?></button>
      </div>

    <!--   <div class=" ms-d-block-sm">
        <h5>good</h5>
      </div> -->

      <ul class="mt-4 text-white text-center"><li class="font-weight-bold"><h5 class=" text-white"> CFO Platform (IHM SPECIALIST HOSPITAL)</h5></li></ul>
      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">

      
        <li class="ms-nav-item ms-nav-user dropdown">
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
            <!-- <img class="ms-user-img ms-img-round float-right" src="assets/img/dashboard/doctor-3.jpg" alt="people">  -->
            <button class="btn btn-success btn-sm" >Logged User - <?php //echo $_SESSION['name']; ?></button>
          </a>
          <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, <?php //echo $_SESSION['username']; ?></span></h6>
            </li>
          
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="pages/prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
            </li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="?action=logout"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
            </li>
          </ul>
        </li>
      </ul>
      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
      </div>
    </nav>


    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
            @yield('content')
    </div>

  </main>

    </div>

    
  <script>
  $( function() {
    $( ".datepicker" ).datepicker();
  } ); 
  </script>
<script>
    function exportToExcel(tableId) {
        const table = document.getElementById(tableId);
        const rows = table.getElementsByTagName('tr');
        const csv = [];

        for (let i = 0; i < rows.length; i++) {
            const row = [];
            const cols = rows[i].querySelectorAll('td, th');

            for (let j = 0; j < cols.length; j++) {
                row.push(cols[j].innerText);
            }

            csv.push(row.join(','));
        }

        const blob = new Blob([csv.join('\n')], { type: 'text/csv' });
        const url = window.URL.createObjectURL(blob);

        const a = document.createElement('a');
        a.href = url;
        a.download = 'table_data.csv';
        a.click();

        window.URL.revokeObjectURL(url);
    }
</script>


<script>

   function exportToPDF() {
      const doc = new jsPDF();
      doc.autoTable({ html: '#example' });
      doc.save('table_data.pdf');
  }
</script>


<script>
    function printTable() {
        const table = document.getElementById('example');
        const printWindow = window.open('', '', 'width=600,height=600');
        printWindow.document.open();
        printWindow.document.write('<html><head><title>Print Table</title></head><body>');
        printWindow.document.write('<table>' + table.innerHTML + '</table>');
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
        // printWindow.close();
    }
</script>


<script>
    function copyTable() {
        const table = document.getElementById('example');
        const range = document.createRange();
        range.selectNode(table);
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
        document.execCommand('copy');
        window.getSelection().removeAllRanges();
        // alert('Table copied to clipboard!');
        Swal.fire({
        title: "Success!",
        text: "Table copied to clipboard!.",
        icon: "success",
        confirmButtonText: "OK"
         });
        }

</script>

<script>
  // JavaScript to toggle the 'active' class on menu items based on the current URL
  document.addEventListener("DOMContentLoaded", function () {
    var currentUrl = window.location.href;

    var menuItems = document.querySelectorAll(".accordion .menu-item");

    menuItems.forEach(function (menuItem) {
      var link = menuItem.querySelector("a");
      if (link.href === currentUrl) {
        menuItem.classList.add("active");
      }
    });
  });
</script>



<script>
  $(document).ready(function() {
    $('#example').DataTable({
      lengthMenu: [25, 50, 100, 200],  // Set page length options
      pageLength: 100,
      dom: 'Bfrtip',
      buttons: [
        'copy',
        'excel',
        'csv',
        'pdf',
        'print',
        'pageLength',
        'colvis',
        'colReorder',
      ]
    });
  });
</script>

    
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/d3.v3.min.js') }}"></script>
    <script src="{{ asset('assets/js/topojson.v1.min.js') }}"></script>
    <script src="{{ asset('assets/js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.webticker.min.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/index-chart.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alerts.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard.js') }}"></script>
    <script src="{{ asset('assets/js/calendar.js') }}"></script>
    <script src="{{ asset('assets/js/framework.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    
</body>
</html>
