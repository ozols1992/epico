<script src="{{ asset('js/app.js') }}" charset="utf-8">
</script>
@extends('layouts.app')

@section('content')
<div class="container">
   <h3>{{ $vacancy->HeadLine }} Application</h3>
<a href="./">View</a> - <a href="./apply">Apply</a>
<div id="chat" >
    <msglog :messages="messages"></msglog>
    <msgform v-on:msgsent="addmsg"></msgform>
</div>
</div>
<script type='text/javascript'>
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
                .listen('messagePosted', (e) => {
                    alert('ss');
                });
    }
});
</script>
@endsection
