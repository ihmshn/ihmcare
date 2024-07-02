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

    <!--   <li class="menu-item">
        <a href="add_patient_category">
          <span><i class="fas fa-arrow-circle-right"></i>Add Patient Category</span>
        </a>
      </li> -->



      <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-heart"></i>Post Payment</span>
        </a>
      </li>


      
      <li class="menu-item">
        <a href="debtors_list">
          <span><i class="fas fa-arrow-circle-right"></i>Debtors List</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-heart"></i>Corporate Billing Menu</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="op_bills">
          <span><i class="fas fa-arrow-circle-right"></i>OP Bills</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="ip_register">
          <span><i class="fas fa-arrow-circle-right"></i>IP Register</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="ip_bills">
          <span><i class="fas fa-arrow-circle-right"></i>IP Bills</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="finalized_ip_bills">
          <span><i class="fas fa-arrow-circle-right"></i>Finalized IP Bills</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="corporate_bill_summary">
          <span><i class="fas fa-arrow-circle-right"></i>Corporate Bill Summary</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="finalized_op_bills_toexcelG">
          <span><i class="fas fa-arrow-circle-right"></i>Finalized OP Bills To Excel (Generic)</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="member_Attendance">
          <span><i class="fas fa-arrow-circle-right"></i>Member Attendance</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="last_month_op_bills">
          <span><i class="fas fa-arrow-circle-right"></i>Last Month OP bills</span>
        </a>
      </li>

    



      <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-heart"></i>HMO Billing Menu</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="op_bills_hmo">
          <span><i class="fas fa-arrow-circle-right"></i>OP bills</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="ip_register_hmo">
          <span><i class="fas fa-arrow-circle-right"></i>IP Register</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="ip_bills_hmo">
          <span><i class="fas fa-arrow-circle-right"></i>IP Bills</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="last_month_bills_hmo">
          <span><i class="fas fa-arrow-circle-right"></i>Last Month Bills</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="encounter_summary">
          <span><i class="fas fa-arrow-circle-right"></i>Encounter Summary</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="member_attendance_hmo">
          <span><i class="fas fa-arrow-circle-right"></i>Member Attendance</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="download_patient_list">
          <span><i class="fas fa-arrow-circle-right"></i>Download Patient List</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="bill_summary_hmo">
          <span><i class="fas fa-arrow-circle-right"></i>Bill Summary</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="finalized_op_bill_to_excel">
          <span><i class="fas fa-arrow-circle-right"></i>Finalized OP Bills To Excel</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="finalized_op_bills_hmo">
          <span><i class="fas fa-arrow-circle-right"></i>Finalized OP Bills</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="saved_op_bills_hmo">
          <span><i class="fas fa-arrow-circle-right"></i> Saved OP Bills</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="finalized_ip_bills_hmo">
          <span><i class="fas fa-arrow-circle-right"></i>Finalized IP Bills</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="finalized_ip_bills_to_excel">
          <span><i class="fas fa-arrow-circle-right"></i> Finalized IP Bills to Excel</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="capitation_report_op">
          <span><i class="fas fa-arrow-circle-right"></i>Capitation Report(OP)</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="capitation_report_ip">
          <span><i class="fas fa-arrow-circle-right"></i>Capitation Report(iP)</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-heart"></i>Private Billing Menu</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="ip_bills_P">
          <span><i class="fas fa-arrow-circle-right"></i>IP bills <span class="badge badge-gradient-success p-1">88</span></span>
        </a>
      </li>


      <li class="menu-item">
        <a href="unfinalized_ip_billsP">
          <span><i class="fas fa-arrow-circle-right"></i>Unfinalized IP Bills Bills<span class="badge badge-gradient-success p-1">0</span></span>
        </a>
      </li>


      
      <li class="menu-item">
        <a href="finalized_ip_billsP">
          <span><i class="fas fa-arrow-circle-right"></i>Finalized IP Bills Bills <span class="badge badge-gradient-success p-1">0</span></span>
        </a>
      </li>


      <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-heart"></i>Administration Menu</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="hmo_consumption">
          <span><i class="fas fa-arrow-circle-right"></i>HMO Consumption</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="patient_emr">
          <span><i class="fas fa-arrow-circle-right"></i>Patient EMR</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="setup_corprate_insurance">
          <span><i class="fas fa-arrow-circle-right"></i>Setup Corporate / Insurance</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="setup_hmo_plan_type">
          <span><i class="fas fa-arrow-circle-right"></i>Setup HMO Plan Type</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="generate_corporate_tariff_drug">
          <span><i class="fas fa-arrow-circle-right"></i>Generate Corprate Tariff (Drug)</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="generate_corporate_tariff_services">
          <span><i class="fas fa-arrow-circle-right"></i>Generate Corprate Tariff (Services)</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="Edit_Corporate_tariff_data">
          <span><i class="fas fa-arrow-circle-right"></i>Edit Insurance / Corprate Data</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="Edit_Corporate_tariff_Percentage">
          <span><i class="fas fa-arrow-circle-right"></i>Edit Corprate / Tariff Percentage</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="Generate_Corporate_tariff_Percentage">
          <span><i class="fas fa-arrow-circle-right"></i>Generate Corprate / Tariff Percentage</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="create_new_services">
          <span><i class="fas fa-arrow-circle-right"></i>Create New Services</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="private_tariff_services">
          <span><i class="fas fa-arrow-circle-right"></i>Private Tariff (Services)</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="add_service_hmo_tariff">
          <span><i class="fas fa-arrow-circle-right"></i>Add Service to HMO Tariff</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="update_corprate_service)tariff">
          <span><i class="fas fa-arrow-circle-right"></i>Update Corporate Services Tariff</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="Edit_insurance_drug_tariff)tariff">
          <span><i class="fas fa-arrow-circle-right"></i>Edit Insurance Drug Tariff</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="Edit_insurance_services_tariff)tariff">
          <span><i class="fas fa-arrow-circle-right"></i>Edit Insurance Services Tariff</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="Update_hmo_drug_tariff">
          <span><i class="fas fa-arrow-circle-right"></i>Update HMO Drug Tariff</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="Update_hmo_drug_tariff">
          <span><i class="fas fa-arrow-circle-right"></i>Update HMO Service Tariff</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="Update_private_drug_tariff">
          <span><i class="fas fa-arrow-circle-right"></i>Update Private Service Tariff</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="add_service_tariff_all_hmo_corporate">
          <span><i class="fas fa-arrow-circle-right"></i>Add Service Tariff to All HMO/Corporate</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="registration_tariff">
          <span><i class="fas fa-arrow-circle-right"></i>Registration Tariff</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <span><i class="fas  fa-heart"></i>Reports Menu</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="load_prepared_bill_by_month">
          <span><i class="fas fa-arrow-circle-right"></i>Load Prepared Bills By Month</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="upload_patient_signature">
          <span><i class="fas fa-arrow-circle-right"></i>Upload Patients Signature</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="item_request">
          <span><i class="fas fa-arrow-circle-right"></i>Item Request</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="leave_dashboard">
          <span><i class="fas fa-arrow-circle-right"></i>Leave Dashboard</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="item_expense_request">
          <span><i class="fas fa-arrow-circle-right"></i>Item Expense Request</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="item_expense_review">
          <span><i class="fas fa-arrow-circle-right"></i>Item Expense Review</span>
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
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index-2.html"><img src="../assets/img/medboard-logo-84x41.png" alt="logo"> </a>
       
      </div>

    <!--   <div class=" ms-d-block-sm">
        <h5>good</h5>
      </div> -->

      <ul class="mt-4 text-white text-center"><li class="font-weight-bold"><h5 class=" text-white"> Billing Office (IHM SPECIALIST HOSPITAL)</h5></li></ul>
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
              <a class="media fs-14 p-2" href=""> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
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
