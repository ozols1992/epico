@extends('layouts.app')

@section('content')

<div id="app">
<div class="container">
   <h3>{{ $vacancy->HeadLine }}</h3>
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

               axios.post(location.href + '/messages', {'msg': msg})
                       .catch(function(error){ alert(error); });
            }
        },
        created(){
            axios.get(location.href + '/messages').then(result => {
               this.messages = result.data;
            }).catch(function(error){alert(error);});

            
            Echo.private('chat.{{ $vacancy->Id . "." . $consultantId }}')
            .listen('messagePosted', (e) => {
                this.messages.push(e.message);
            });  
        }
    }); 
</script>
</div>
</div>


@endsection