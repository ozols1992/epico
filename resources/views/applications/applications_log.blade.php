@extends('layouts.app')

@section('content')

<div id="app">
<div class="container">
   <h3>{{ $vacancy->HeadLine }} Application</h3>
<a href="./">View</a> - <a href="./apply">Apply</a>
<div id="chat" >
    <msglog :messages="messages"></msglog>
    <msgform v-on:msgsent="addmsg"></msgform>
</div>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>
<script src="{{ asset('./js/app.js') }}" type='text/javascript'></script>
<script>
    const chat = new Vue({
        el: '#chat',
        data: {
            messages: []
        },
        methods: {
            addmsg(msg){

               axios.post(location.href + '/messages', {'msg': msg}).then(response => {
                    this.messages.push(response.data);
                }).catch(function(error){ alert(error); });
            }
        },
        created(){
            axios.get(location.href + '/messages').then(result => {
               this.messages = result.data;
            }).catch(function(error){alert(error);});

            
            Echo.private('chat.{{ $vacancy->Id . "." . $consultantId }}')
            .listen('.messagePosted', (e) => {
                alert('Hello');
            });
            
            
//            Pusher.logToConsole = true;
//
//            var pusher = new Pusher('e6e536103d1031ec4f99', {
//              encrypted: true
//            );
//
//            var channel = pusher.subscribe('chat.{{ $vacancy->Id . "." . $consultantId }}');
//            channel.bind('messagePosted', function(data) {
//              alert(data.message);
//            });
            
        }
    }); 
</script>
</div>
</div>


@endsection