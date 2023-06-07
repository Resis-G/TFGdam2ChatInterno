<div>

    <section class="flex h-screen overflow-hidden">
        <div class="chat_list_container bg-white xl:w-3/12 lg:w-4/12 w-full p-6">

            @livewire('chat.chat-list')
        </div>
        <div class="chat_box_container bg-gray-100 xl:w-9/12 lg:w-8/12 hidden lg:block">

            @livewire('chat.chatbox')

            @livewire('chat.send-message')
        </div>
    </section>

    
    <script>
        window.addEventListener('chatSelected',event=>{ 
        if(window.innerWidth<1024){
            $('.chat_list_container').hide();
            $('.chat_box_container').show();

        }
        $('.chatbox_body').scrollTop($('.chatbox_body')[0].scrollHeight);
        let height = $('.chatbox_body')[0].scrollHeight;
        window.livewire.emit('updateHeight',{
            height:height,
        })
    });

    $(window).resize(function(){
        if(window.innerWidth >1024){
            $('.chat_list_container').show();
            $('.chat_box_container').show();
        }
    });

    $(document).on('click','return',function(){
        $('.chat_list_container').show();
        $('.chat_box_container').hide();
    });
    </script>

</div>