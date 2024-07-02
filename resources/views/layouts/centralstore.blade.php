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

   
      <!-- <li class="menu-item">
  <a href="dashboard" style="background-color: #033DBB !important;">
    <span><i class="fas fa-home"></i>Dashboard</span>
  </a>
</li> -->

<li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas fa-arrows-alt"></i>Requisition Menu</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="from_department">
          <span><i class="fas fa-arrow-circle-right"></i>From Department <span class="badge badge-warning">90</span></span>
        </a>
      </li>

      <li class="menu-item">
        <a href="from_pharmacy">
          <span><i class="fas fa-arrow-circle-right"></i>From Pharmacy <span class="badge badge-warning">0</span></span>
        </a>
      </li>

      <li class="menu-item">
        <a href="request_other_branches">
          <span><i class="fas fa-arrow-circle-right"></i>From Branches</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="pending_request">
          <span><i class="fas fa-arrow-circle-right"></i>From Pending Request</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="raised_purchase_order">
          <span><i class="fas fa-arrow-circle-right"></i>Resend P O</span>
        </a>
      </li>



       <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas fa-user"></i>Administrative Menu </span>
        </a>
      </li>


      <li class="menu-item">
        <a href="procurement_request">
          <span><i class="fas  fa-arrow-circle-right"></i>Request to Procurement</span>
        </a>
      </li>


        <li class="menu-item">
        <a href="stock_in">
          <span><i class="fas  fa-arrow-circle-right"></i>Stock in (with PO)</span>
        </a>
      </li>


       <li class="menu-item">
        <a href="direct_stock_in">
          <span><i class="fas  fa-arrow-circle-right"></i>Stock (Direct)</span>
        </a>
      </li>

       <li class="menu-item">
        <a href="stock_in_temp">
          <span><i class="fas  fa-arrow-circle-right"></i>Temp Stock in item</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="stock_adjustment">
          <span><i class="fas  fa-arrow-circle-right"></i>Stock Adjustment</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="cost_adjustment">
          <span><i class="fas  fa-arrow-circle-right"></i>Cost Adjustment</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="price_adjustment">
          <span><i class="fas  fa-arrow-circle-right"></i>Price Adjustment</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="barcode_item">
          <span><i class="fas  fa-arrow-circle-right"></i>Barcode Item</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="item_recorder">
          <span><i class="fas  fa-arrow-circle-right"></i>Item Recorder</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="item_reorder">
          <span><i class="fas  fa-arrow-circle-right"></i>Item Reorder</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="transfer_item">
          <span><i class="fas  fa-arrow-circle-right"></i>Transfer Item </span>
        </a>
      </li>

      <li class="menu-item">
        <a href="item_repository">
          <span><i class="fas  fa-arrow-circle-right"></i>Item Repository</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="returned_items">
          <span><i class="fas  fa-arrow-circle-right"></i>Returned Items </span>
        </a>
      </li>


      <li class="menu-item">
        <a href="item_requisition">
          <span><i class="fas  fa-arrow-circle-right"></i>Item Requisition</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="leave_dashboard">
          <span><i class="fas  fa-arrow-circle-right"></i>Leave Dashboard</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="item_expense_request">
          <span><i class="fas  fa-arrow-circle-right"></i>Item Expense Request</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="expense_review">
          <span><i class="fas  fa-arrow-circle-right"></i>Expense Review</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="message">
          <span><i class="fas  fa-arrow-circle-right"></i>Message</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <span><i class="fas fa-user"></i>Reports Menu </span>
        </a>
      </li>

      <li class="menu-item">
        <a href="avaliable_stock">
          <span><i class="fas  fa-arrow-circle-right"></i>Avaliable Stock</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="expired_item">
          <span><i class="fas  fa-arrow-circle-right"></i>Expired Item</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="expired_item">
          <span><i class="fas  fa-arrow-circle-right"></i>List of Disbursed items</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="expired_item">
          <span><i class="fas  fa-arrow-circle-right"></i>List of Discarded items</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="store_balance_history">
          <span><i class="fas  fa-arrow-circle-right"></i>Store Balance History</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="item_stockin_reports">
          <span><i class="fas  fa-arrow-circle-right"></i>Items stock-in Reports</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="stockin_adjustment">
          <span><i class="fas  fa-arrow-circle-right"></i>stock-in Adjustment </span>
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
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index-2.html"><img src="assets/img/medboard-logo-84x41.png" alt="logo"> </a>
      </div>

      <ul class="mt-4 text-white text-center"><li class="font-weight-bold"><h5 class=" text-white"> Central Store (IHM SPECIALIST HOSPITAL)</h5></li></ul>
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
           <!--  <li class="ms-dropdown-list">
              <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
              <a class="media fs-14 p-2" href="pages/apps/email.html"> <span><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span> </a>
              <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span> </a>
            </li> -->
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="pages/lock_screen.php"> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
            </li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="logout"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
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
