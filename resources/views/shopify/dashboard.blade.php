@extends('shopify-app::layouts.default')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" >
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

@endsection
@section('content')
   <!--  <p>You are: {{ ShopifyApp::shop()->shopify_domain }}</p> -->
   <!-- <dashboard-component></dashboard-component> -->
   <div id="load"></div>
     <section class="convert_site mt-3 mb-3 chatdata">
         <div class="container">
            <div class="custombox bg-white">
               <div class="row">
                  <div class="col-md-12">
                     <img src="svg/logo.svg" alt="#" class="upimg">
                      <span class="float-right position-relative d-flex">
                      @if($setting->status==1)
                      <input type="checkbox" id="html1" checked onchange="changstatus('{{$setting->status}}','{{$setting->id}}')" style="visibility: hidden;position-absolute;"><label for="html1" class="switch_button"><span class="switch_text">Show Hero to my visitors</span><span> <img src="images/On.svg" alt="#" class="switch_img"></span></label>
                      @else
                      <input type="checkbox" id="html" onchange="changstatus('{{$setting->status}}','{{$setting->id}}')" style="visibility: hidden;position-absolute;"><label for="html" class="switch_button"><span class="switch_text">Show Hero to my visitors</span><span><img src="images/Off.svg" alt="#" class="switch_img"></span></label>
                      @endif
                    </span>
                     <h1 class="ambassador pb-5 text-center welcomeheading">Welcome to Wassup</h1>
                  </div>
               </div>
               <div class="row pr-5 pl-5">
                  <div class="col-md-6">
                     <div class="box1 mb-4" onclick="changeambassador()">
                        <img src="svg/ChangeAmb.svg" alt="#"  class="mb-3">
                        <h1 class="pb-2">Change Hero</h1>
                        <p>Select from over 500 Heroes. We’ve categorized them based on marketing days and store types.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="box1 mb-4" onclick="changeplan()">
                        <img src="svg/Plans.svg" alt="#"  class="mb-3">
                        <h1 class="pb-2">Paid Plans</h1>
                        <p>Check out our paid plans for additional features and Super-Heroes that help you convert better. HINT - Our customers see a 40% increase in conversion in the paid plans.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <a href="#" class="export">
                     <div class="box1 mb-4">
                        <img src="svg/download-csv.svg" alt="#"  class="mb-3">
                        <h1 class="pb-2">Download Opt-in CSV</h1>
                        <p>During the setup leave the Mailchimp list URL blank. Email addresses of visitors who opt-in for the reward, will get listed here.</p>
                     </div>
                      </a>
                  </div>
                  <div class="col-md-6">
                     <div class="box1 mb-4" onclick="changefaq()">
                        <img src="svg/FAQs.svg" alt="#"  class="mb-3">
                        <h1 class="pb-2">FAQs & Support</h1>
                        <p>Need help? Talk to us right now with our award-winning customer support team. All your questions answered in real-time chat in less than 20 minutes. Alternatively, you may also refer to our frequently asked questions. </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="dvData" style="display: none;">
          <table>
          @foreach($mailchimp_data as $mailchimp_datas)
            <tr>
              <td>{{ $mailchimp_datas->email }}</td>
            </tr>
          @endforeach
          </table>
        </div>
      </section>
@endsection

@section('scripts')
    @parent
    
    <script type="text/javascript">
        var AppBridge = window['app-bridge'];
        var actions = AppBridge.actions;
        var TitleBar = actions.TitleBar;
        var Button = actions.Button;
        var Redirect = actions.Redirect;
        var titleBarOptions = {
            title: 'Welcome',
        };
        var myTitleBar = TitleBar.create(app, titleBarOptions);
        window.whatssupShop = @json($shop);
        window.setting = @json($setting);

          var notification =localStorage.getItem('wassup_value');
          if(notification !=null){
              ShopifyApp.flashNotice(notification);
              setTimeout(function(){ localStorage.removeItem('wassup_value'); }, 5000);
          }
        function changeambassador(){
        document.getElementById('load').style.visibility="visible";
          window.location.href = window.app_url+'/ambassador';
            
        }
        function changeplan(){
        document.getElementById('load').style.visibility="visible";
           window.location.href = window.app_url+'/plan';
        }
        function changefaq(){
        document.getElementById('load').style.visibility="visible";
            window.location.href = window.app_url+'/faq';
        }
        var $this = this;
       function changstatus(status, id){

          status != status;
          if(status =='1'){
            status = '0';
          }else{
            status = '1';
          }
          // this.setting.status = status;
          
          let uri = window.app_url+'/changestatus';
       //let uri = '/settings';
       var settings ={
         id : id,
         status : status
       } 
          this.axios.post(uri, settings)
                .then(function (response) {
                console.log(response.data);  
                })
                .catch(function (error) {
                    console.log(error);
                });
                location.reload();

        }
$(document).ready(function() {
  function exportTableToCSV($table, filename) {
    var $rows = $table.find('tr:has(td)'),
      // Temporary delimiter characters unlikely to be typed by keyboard
      // This is to avoid accidentally splitting the actual contents
      tmpColDelim = String.fromCharCode(11), // vertical tab character
      tmpRowDelim = String.fromCharCode(0), // null character
      // actual delimiter characters for CSV format
      colDelim = '","',
      rowDelim = '"\r\n"',
      // Grab text from table into CSV formatted string
      csv = '"' + $rows.map(function(i, row) {
        var $row = $(row),
          $cols = $row.find('td');

        return $cols.map(function(j, col) {
          var $col = $(col),
            text = $col.text();

          return text.replace(/"/g, '""'); // escape double quotes

        }).get().join(tmpColDelim);

      }).get().join(tmpRowDelim)
      .split(tmpRowDelim).join(rowDelim)
      .split(tmpColDelim).join(colDelim) + '"';

    // Deliberate 'false', see comment below
    if (false && window.navigator.msSaveBlob) {

      var blob = new Blob([decodeURIComponent(csv)], {
        type: 'text/csv;charset=utf8'
      });

      // Crashes in IE 10, IE 11 and Microsoft Edge
      // See MS Edge Issue #10396033
      // Hence, the deliberate 'false'
      // This is here just for completeness
      // Remove the 'false' at your own risk
      window.navigator.msSaveBlob(blob, filename);

    } else if (window.Blob && window.URL) {
      // HTML5 Blob        
      var blob = new Blob([csv], {
        type: 'text/csv;charset=utf-8'
      });
      var csvUrl = URL.createObjectURL(blob);

      $(this)
        .attr({
          'download': filename,
          'href': csvUrl
        });
    } else {
      // Data URI
      var csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

      $(this)
        .attr({
          'download': filename,
          'href': csvData,
          'target': '_blank'
        });
    }
  }

  // This must be a hyperlink
  $(".export").on('click', function(event) {
    // CSV
    var args = [$('#dvData>table'), 'mailchimp_data.csv'];

    exportTableToCSV.apply(this, args);

    // If CSV, don't do event.preventDefault() or return false
    // We actually need this to be a typical hyperlink
  });
});
    </script>
    @if(session()->has('status'))
    <script type="text/javascript">
      ShopifyApp.flashNotice("{{ session('status') }}");
    </script>
@endif
@endsection