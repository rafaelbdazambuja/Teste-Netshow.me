@if(Session::has('success'))
    <div class="hide-alert float-left w-100 alert alert-success mt-3" role="alert">
        {{ Session::get('success') }}
    </div>
    <script>
        setTimeout(()=>{
            $(".hide-alert").fadeOut(400)
        },2500);
    </script>
@endif