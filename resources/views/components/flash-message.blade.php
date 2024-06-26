@if (session()->has('message'))
 <div class="message" id="messages">
    {{session('message')}}
 </div>
@endif

<script>
    var can =document.getElementById('messages');

        setTimeout(
            ()=>
        {
            can.style.display='none';
        }, 2000);

</script>
