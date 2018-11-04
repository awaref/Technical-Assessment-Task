@if(Session::has('message'))
<script>
    var type="{{Session::get('alert-type','info')}}";
    let windowType = "{{Session::get('window')}}";
    let owl = $('#loginModal').find('.login-carousel');
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
        case 'error-modal':
            $('#loginModal').modal('show');
            $(document).ready(function($) {
              switch (windowType) {
                  case "login":
                    owl.trigger('to.owl.carousel', [0,300]);
                    break;
                  case "register":
                    owl.trigger('to.owl.carousel', [1,300]);
                    break;
                  case "forgot":
                    owl.trigger('to.owl.carousel', [2,300]);
                    break;
                default:
              }
              toastr.error("{{ Session::get('message') }}");
            });
            break;
        case 'warning-modal':
            $('#loginModal').modal('show');
            $(document).ready(function($) {
              switch (windowType) {
                  case "login":
                    owl.trigger('to.owl.carousel', [0,300]);
                    break;
                  case "register":
                    owl.trigger('to.owl.carousel', [1,300]);
                    break;
                  case "forgot":
                    owl.trigger('to.owl.carousel', [2,300]);
                    break;
                default:
              }
              toastr.error("{{ Session::get('message') }}");
            });
            break;
    }
</script>
@endif
